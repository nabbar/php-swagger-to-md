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
     * @param \Twig_Environment $twigObject
     */
    public function markdown(\SwaggerValidator\Common\Context $context, $generalItems, \Twig_Environment $twigObject)
    {
        $method = __FUNCTION__;
        $this->getMethodGeneric($context, $method, $generalItems, null, array($twigObject));
        $this->getModelConsumeProduce($generalItems);

        $templateVars = array(
            \SwaggerValidator\Common\FactorySwagger::KEY_PARAMETERS => null,
            \SwaggerValidator\Common\FactorySwagger::KEY_RESPONSES  => null,
            \SwaggerValidator\Common\FactorySwagger::KEY_CONSUMES   => null,
            \SwaggerValidator\Common\FactorySwagger::KEY_PRODUCES   => null,
        );

        if (!empty($generalItems[\SwaggerValidator\Common\FactorySwagger::KEY_CONSUMES])) {
            $templateVars[\SwaggerValidator\Common\FactorySwagger::KEY_CONSUMES] = $generalItems[\SwaggerValidator\Common\FactorySwagger::KEY_CONSUMES];
            unset($generalItems[\SwaggerValidator\Common\FactorySwagger::KEY_CONSUMES]);
        }

        if (!empty($generalItems[\SwaggerValidator\Common\FactorySwagger::KEY_PRODUCES])) {
            $templateVars[\SwaggerValidator\Common\FactorySwagger::KEY_PRODUCES] = $generalItems[\SwaggerValidator\Common\FactorySwagger::KEY_PRODUCES];
            unset($generalItems[\SwaggerValidator\Common\FactorySwagger::KEY_PRODUCES]);
        }

        foreach ($generalItems as $key => $value) {
            if (array_key_exists($key, $templateVars)) {
                $templateVars[$key] = $this->calcultateGenerals($key, $value);
            }
        }

        foreach ($this->keys() as $key) {
            if (array_key_exists($key, $templateVars)) {
                continue;
            }

            if (is_object($this->$key) && method_exists($this->$key, $method)) {
                $templateVars[$key] = $this->$key->$method($context->setDataPath($paths), $generalItems, $twigObject);
            }
            elseif (!is_object($this->$key)) {
                $templateVars[$key] = $this->$key;
            }
        }

        $tpl = explode('\\', trim(__CLASS__, "\\"));
        array_shift($tpl);
        array_shift($tpl);
        $tpl = implode('', array_map('ucfirst', $tpl));

        \Swagger2md\Swagger2md::printOutVV('Rendering this template : ' . $tpl);
        return $twigObject->render($tpl, $templateVars);
    }

    private function calcultateGenerals($type, $array)
    {
        $result = array();

        if (is_array($array)) {
            foreach ($array as $key => $value) {

                $value = $this->calcultateItemsGenerals($key, $value);

                if ($value['count'] < 1) {
                    continue;
                }

                $result[$key] = $value;
            }
        }

        return array(
            'name'  => $type,
            'count' => count($result),
            'items' => $result,
        );
    }

    private function calcultateItemsGenerals($type, $array)
    {
        $result = array();

        if (is_array($array)) {
            foreach ($array as $key => $value) {

                if (empty($value)) {
                    continue;
                }
                elseif (!is_array($value) || count($value) < 1) {
                    continue;
                }

                $result[$key] = $value;
            }
        }

        return array(
            'name'  => $type,
            'count' => count($result),
            'items' => $result,
        );
    }

}
