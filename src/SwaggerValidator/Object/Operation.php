<?php

/*
 * Copyright 2016 Nicolas JUHEL <swaggervalidator@nabbar.com>.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Swagger2md\SwaggerValidator\Object;

/**
 * Description of Operation
 *
 * @author Nicolas JUHEL<swaggervalidator@nabbar.com>
 * @version 1.0.0
 */
class Operation extends \SwaggerValidator\Object\Operation
{

    /**
     *
     * @param \SwaggerValidator\Common\Context $context
     * @param array $generalItems
     */
    public function markdown(\SwaggerValidator\Common\Context $context, $generalItems)
    {
        $method         = __FUNCTION__;
        $generalItems   = $this->getMethodGeneric($context, $method, $generalItems);
        $exampleRequest = $this->makeRequestExample($context, $generalItems);
        $reduce         = array();

        foreach ($generalItems[\SwaggerValidator\Common\FactorySwagger::KEY_PARAMETERS] as $listParams) {
            if (is_array($listParams) && !empty($listParams)) {
                $reduce = array_merge($reduce, array_values($listParams));
            }
        }
        $generalItems[\SwaggerValidator\Common\FactorySwagger::KEY_PARAMETERS] = $reduce;
        unset($reduce);

        $templateVars = array(
            \SwaggerValidator\Common\FactorySwagger::KEY_PARAMETERS => \Swagger2md\Swagger2md::getInstance()->renderTable(null, null, \SwaggerValidator\Common\FactorySwagger::KEY_PARAMETERS, 'ColonsConfigOperation', 'TableOperationRequest', $generalItems, false),
            \SwaggerValidator\Common\FactorySwagger::KEY_RESPONSES  => null,
            \SwaggerValidator\Common\FactorySwagger::KEY_CONSUMES   => $generalItems[\SwaggerValidator\Common\FactorySwagger::KEY_CONSUMES],
            \SwaggerValidator\Common\FactorySwagger::KEY_PRODUCES   => $generalItems[\SwaggerValidator\Common\FactorySwagger::KEY_PRODUCES],
            'Request'                                               => $exampleRequest
        );

        foreach ($this->keys() as $key) {
            if (array_key_exists($key, $templateVars)) {
                continue;
            }

            if (is_object($this->$key) && method_exists($this->$key, $method)) {
                $templateVars[$key] = $this->$key->$method($context->setDataPath($paths), $generalItems);
            }
            elseif (!is_object($this->$key)) {
                $templateVars[$key] = $this->$key;
            }
        }

        $tpl = explode('\\', trim(__CLASS__, "\\"));
        array_shift($tpl);
        array_shift($tpl);
        $tpl = implode('', array_map('ucfirst', $tpl));

        \Swagger2md\Swagger2md::printOutV('Rendering this template : ' . $tpl);
        return \Swagger2md\Swagger2md::getInstance()->renderTemplate($tpl, $templateVars);
    }

    protected function calculateLength($mixed)
    {
        if (is_array($mixed)) {
            return array_sum(array_map(array($this, 'calculateLength'), $mixed)) + count($mixed);
        }
        else {
            return strlen($mixed);
        }
    }

    protected function makeRequestExample(\SwaggerValidator\Common\Context $context, $operation)
    {
        $keyParameters = \SwaggerValidator\Common\FactorySwagger::KEY_PARAMETERS;
        $keyResponses  = \SwaggerValidator\Common\FactorySwagger::KEY_RESPONSES;
        $keyConsumes   = \SwaggerValidator\Common\FactorySwagger::KEY_CONSUMES;
        $keyProduces   = \SwaggerValidator\Common\FactorySwagger::KEY_PRODUCES;

        $keyLocationPath   = \SwaggerValidator\Common\FactorySwagger::LOCATION_PATH;
        $keyLocationQuery  = \SwaggerValidator\Common\FactorySwagger::LOCATION_QUERY;
        $keyLocationForm   = \SwaggerValidator\Common\FactorySwagger::LOCATION_FORM;
        $keyLocationHeader = \SwaggerValidator\Common\FactorySwagger::LOCATION_HEADER;
        $keyLocationBody   = \SwaggerValidator\Common\FactorySwagger::LOCATION_BODY;

        if (empty($operation[$keyParameters])) {
            $operation[$keyParameters] = array();
        }

        if (empty($operation[$keyConsumes])) {
            $operation[$keyConsumes] = array();
        }

        //\Swagger2md\Swagger2md::printOutVV('Request Example Base Parameters : ' . print_r($operation[$keyParameters], true));

        $templateVars = array(
        );

        $path        = $context->getBasePath() . $context->getRoutePath();
        $queryString = null;

        if (array_key_exists($keyLocationPath, $operation[$keyParameters])) {
            foreach ($operation[$keyParameters][$keyLocationPath] as $key => $value) {
                $path = str_replace('{' . $key . '}', urlencode($value['model']), $path);
            }
        }

        if (array_key_exists($keyLocationQuery, $operation[$keyParameters])) {
            $queryString = array();

            foreach ($operation[$keyParameters][$keyLocationQuery] as $key => $value) {
                if (!is_array($value['model']) && !is_object($value['model'])) {
                    $queryString[$key] = $value['model'];
                }
            }

            if (!empty($queryString)) {
                $queryString = '?' . preg_replace('/%5B[0-9]+%5D/simU', '%5B%5D', http_build_query($queryString, null, '&', PHP_QUERY_RFC3986));
            }
            else {
                $queryString = null;
            }
        }

        $templateVars['host']     = $context->getHost();
        $templateVars['scheme']   = $context->getScheme();
        $templateVars['path']     = $path . $queryString;
        $templateVars['method']   = $context->getMethod();
        $templateVars['headers']  = array();
        $templateVars['postForm'] = array();
        $templateVars['bodyRaw']  = null;

        if (array_key_exists($keyLocationHeader, $operation[$keyParameters])) {
            foreach ($operation[$keyParameters][$keyLocationHeader] as $name => $data) {
                $templateVars['headers'][] = $name . ': ' . $data['model'];
            }
        }

        if (array_key_exists($keyLocationForm, $operation[$keyParameters])) {
            $boundary = uniqid();
            foreach ($operation[$keyParameters][$keyLocationForm] as $name => $data) {
                $templateVars['postForm'][] = array(
                    'boundary' => '--' . $boundary,
                    'header'   => 'content-disposition: form-data; name="' . $name . '"',
                    'value'    => $data['model'],
                );
            }
            if (!empty($templateVars['postForm'])) {
                $templateVars['headers'][] = 'Content-Type: multipart/form-data, boundary=' . $boundary;
                $templateVars['headers'][] = 'Content-Length: ' . $this->calculateLength($templateVars['postForm']);
            }
        }

        if (array_key_exists($keyLocationBody, $operation[$keyParameters])) {
            $templateVars['bodyRaw']   = json_encode($operation[$keyParameters][$keyLocationBody][$keyLocationBody]['model'], JSON_NUMERIC_CHECK | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
            $templateVars['headers'][] = 'Content-Type: ' . array_shift($operation[$keyConsumes]);
            $templateVars['headers'][] = 'Content-Length: ' . strlen($templateVars['bodyRaw']);
        }

        \Swagger2md\Swagger2md::printOutV('Rendering this template : ExampleRequest');
        return \Swagger2md\Swagger2md::getInstance()->renderTemplate('ExampleRequest', $templateVars);
    }

}
