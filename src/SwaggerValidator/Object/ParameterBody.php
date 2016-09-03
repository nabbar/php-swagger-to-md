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
 * Description of ParameterBody
 *
 * @author Nicolas JUHEL<swaggervalidator@nabbar.com>
 * @version 1.0.0
 */
class ParameterBody extends \SwaggerValidator\Object\ParameterBody
{

    public function markdown(\SwaggerValidator\Common\Context $context, \Twig_Environment $twigObject)
    {
        $method       = __FUNCTION__;
        $schemaKey    = \SwaggerValidator\Common\FactorySwagger::KEY_SCHEMA;
        $templateVars = array();

        foreach ($this->keys() as $key) {

            if (is_object($this->$key) && method_exists($this->$key, $method)) {
                $templateVars[$key] = $this->$key->$method($context->setDataPath($key), $twigObject);
            }
            elseif (!is_object($this->$key)) {
                $templateVars[$key] = $this->$key;
            }
        }

        if (!$this->$schemaKey->has('type')) {
            $templateVars['type'] = \SwaggerValidator\Common\FactorySwagger::TYPE_OBJECT;
        }
        else {
            $templateVars['type'] = $this->$schemaKey->type;
        }

        $noMerge = array(
            \SwaggerValidator\Common\FactorySwagger::TYPE_OBJECT,
        );

        if (!in_array($templateVars['type'], $noMerge)) {
            if (array_key_exists('partType', $templateVars[$schemaKey])) {
                $templateVars['partType'] = $templateVars[$schemaKey]['partType'];
            }
            if (array_key_exists('linkItemsObject', $templateVars[$schemaKey])) {
                $templateVars['linkItemsObject'] = $templateVars[$schemaKey]['linkItemsObject'];
            }
            if (array_key_exists('partValidation', $templateVars[$schemaKey])) {
                $templateVars['partValidation'] = $templateVars[$schemaKey]['partValidation'];
            }
            if (array_key_exists('model', $templateVars[$schemaKey])) {
                $templateVars['model'] = $templateVars[$schemaKey]['model'];
            }
            unset($templateVars[$schemaKey]);

            foreach ($this->$schemaKey->keys() as $key) {

                if (is_object($this->$key) && method_exists($this->$key, $method)) {
                    $templateVars[$key] = $this->$key->$method($context->setDataPath($key), $twigObject);
                }
                elseif (!is_object($this->$key)) {
                    $templateVars[$key] = $this->$key;
                }
            }
        }
        else {
            $templateVars['partType']        = $twigObject->render('PartTypeFormat', $templateVars);
            $templateVars['linkItemsObject'] = $twigObject->render('PartLinkObject', array('name' => $context->getDataPath(), 'link' => 'toto'));
            $templateVars['model']           = $this->getModel($context);
        }

        $templateVars['name'] = \SwaggerValidator\Common\FactorySwagger::LOCATION_BODY;
        $templateVars['in']   = \SwaggerValidator\Common\FactorySwagger::LOCATION_BODY;

        $tpl = explode('\\', trim(__CLASS__, "\\"));
        array_shift($tpl);
        array_shift($tpl);
        $tpl = implode('', array_map('ucfirst', $tpl));

        \Swagger2md\Swagger2md::printOutV('Rendering this template : ' . $tpl);
        $templateVars['render'] = $twigObject->render($tpl, $templateVars);

        return $templateVars;
    }

}
