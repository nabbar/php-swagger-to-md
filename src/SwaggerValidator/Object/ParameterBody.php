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

    public function markdown(\SwaggerValidator\Common\Context $context)
    {
        $method               = __FUNCTION__;
        $schemaKey            = \SwaggerValidator\Common\FactorySwagger::KEY_SCHEMA;
        $templateVars         = array();
        $templateVars['name'] = \SwaggerValidator\Common\FactorySwagger::LOCATION_BODY;
        $templateVars['in']   = \SwaggerValidator\Common\FactorySwagger::LOCATION_BODY;

        foreach ($this->keys() as $key) {

            if (is_object($this->$key) && method_exists($this->$key, $method)) {
                $templateVars[$key] = $this->$key->$method($context->setDataPath($key));
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
                    $templateVars[$key] = $this->$key->$method($context->setDataPath($key));
                }
                elseif (!is_object($this->$key)) {
                    $templateVars[$key] = $this->$key;
                }
            }
        }
        else {
            $ref  = \Swagger2md\Swagger2md::makeAnchor(uniqid('objectProperty_'));
            $name = 'parameters/body';

            $templateVars['partType']        = \Swagger2md\Swagger2md::getInstance()->renderTemplate('PartTypeFormat', $templateVars);
            $templateVars['model']           = $this->getModel($context);
            $templateVars['link']            = $ref;
            $templateVars['linkItemsObject'] = \Swagger2md\Swagger2md::getInstance()->renderTemplate('PartLinkObject', array('name' => $name, 'link' => $ref));

            $templateVars[\SwaggerValidator\Common\FactorySwagger::KEY_PROPERTIES] = $templateVars[$schemaKey];
            unset($templateVars[$schemaKey]);

            \Swagger2md\Swagger2md::getInstance()->renderTable($name, $ref, \SwaggerValidator\Common\FactorySwagger::KEY_PROPERTIES, 'ColonsConfigOperation', 'TableObjectProperties', $templateVars, true);

            unset($templateVars[\SwaggerValidator\Common\FactorySwagger::KEY_PROPERTIES]);
        }

        return $templateVars;
    }

}
