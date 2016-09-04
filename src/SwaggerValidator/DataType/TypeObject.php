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

namespace Swagger2md\SwaggerValidator\DataType;

/**
 * Description of TypeCombined
 *
 * @author Nicolas JUHEL<swaggervalidator@nabbar.com>
 * @version 1.0.0
 */
class TypeObject extends \SwaggerValidator\DataType\TypeObject
{

    public function markdown(\SwaggerValidator\Common\Context $context)
    {
        $method       = __FUNCTION__;
        $templateVars = array(
            'partType' => \Swagger2md\Swagger2md::getInstance()->renderTemplate('PartTypeFormat', array('type' => \SwaggerValidator\Common\FactorySwagger::TYPE_OBJECT)),
            'model'    => $this->getModel($context)
        );

        if (!empty($this->properties)) {

            $properties = array();

            foreach ($this->keys() as $key) {
                $subVars = array();

                if (!in_array($key, $this->properties)) {
                    continue;
                }

                if (is_object($this->$key) && method_exists($this->$key, $method)) {
                    $item = $this->$key->$method($context->setDataPath($key));

                    if (is_array($item) && array_key_exists(\SwaggerValidator\Common\FactorySwagger::KEY_TYPE, $item)) {
                        $type = $item[\SwaggerValidator\Common\FactorySwagger::KEY_TYPE];
                    }
                    else {
                        $type = \SwaggerValidator\Common\FactorySwagger::TYPE_OBJECT;
                    }
                }
                else {
                    $type = null;
                    $item = $this->$key->$method($context->setDataPath($key));
                }

                if ($type === \SwaggerValidator\Common\FactorySwagger::TYPE_OBJECT) {
                    $ref = \Swagger2md\Swagger2md::makeAnchor(uniqid('objectProperty_'));

                    $name = $context->getLastDataPath();
                    $name = array_pop($name) . '/properties/' . $key;

                    $subVars = array(
                        \SwaggerValidator\Common\FactorySwagger::KEY_TYPE       => \SwaggerValidator\Common\FactorySwagger::TYPE_OBJECT,
                        \SwaggerValidator\Common\FactorySwagger::KEY_NAME       => $key,
                        'link'                                                  => $ref,
                        \SwaggerValidator\Common\FactorySwagger::KEY_PROPERTIES => $item,
                        'linkItemsObject'                                       => \Swagger2md\Swagger2md::getInstance()->renderTemplate('PartLinkObject', array('name' => $name, 'link' => $ref)),
                    );

                    \Swagger2md\Swagger2md::getInstance()->renderTable($name, $ref, \SwaggerValidator\Common\FactorySwagger::KEY_PROPERTIES, 'ColonsConfigOperation', 'TableObjectProperties', $subVars, true);

                    unset($subVars[\SwaggerValidator\Common\FactorySwagger::KEY_PROPERTIES]);
                }
                elseif (is_array($item)) {
                    $subVars = $item + array(\SwaggerValidator\Common\FactorySwagger::KEY_NAME => $key);
                }
                else {
                    $subVars = array(
                        \SwaggerValidator\Common\FactorySwagger::KEY_NAME => $key,
                        'value'                                           => $item,
                    );
                }

                if (in_array($key, $this->required)) {
                    $subVars[\SwaggerValidator\Common\FactorySwagger::KEY_REQUIRED] = true;
                }

                $properties[] = $subVars;
            }

            if (count($properties) == 1) {
                return array_pop($properties);
            }

            return $properties;
        }
        else {
            foreach ($this->keys() as $key) {
                if (is_object($this->$key) && method_exists($this->$key, $method)) {
                    $templateVars[$key] = $this->$key->$method($context->setDataPath($key));
                }
                elseif (!is_object($this->$key)) {
                    $templateVars[$key] = $this->$key;
                }
            }
        }

        return $templateVars;
    }

}
