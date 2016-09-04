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
 * Description of TypeArrayItems
 *
 * @author Nicolas JUHEL<swaggervalidator@nabbar.com>
 * @version 1.0.0
 */
class TypeArrayItems extends \SwaggerValidator\DataType\TypeArrayItems
{

    public function markdown(\SwaggerValidator\Common\Context $context)
    {
        $method       = __FUNCTION__;
        $templateVars = array(
            'items' => array(),
        );
        $keySchema    = \SwaggerValidator\Common\FactorySwagger::KEY_SCHEMA;

        $tpl = explode('\\', trim(__CLASS__, "\\"));
        array_shift($tpl);
        array_shift($tpl);
        $tpl = implode('', array_map('ucfirst', $tpl));

        $name = $context->searchDataPath('items', 1);
        $name = array_pop($name) . '/items/';

        if (isset($this->$keySchema) && is_object($this->$keySchema)) {
            if (method_exists($this->$keySchema, $method)) {
                $ref = \Swagger2md\Swagger2md::makeAnchor(uniqid('schema_'));

                $schema = $this->$keySchema->$method($context->setDataPath($keySchema));

                if (is_array($schema) && array_key_exists('type', $schema)) {
                    $schema = array($schema);
                }

                \Swagger2md\Swagger2md::getInstance()->renderTable($name . 'schema', $ref, \SwaggerValidator\Common\FactorySwagger::KEY_PROPERTIES, 'ColonsConfigOperation', 'TableArrayItems', array(
                    \SwaggerValidator\Common\FactorySwagger::KEY_TYPE       => \SwaggerValidator\Common\FactorySwagger::TYPE_OBJECT,
                    \SwaggerValidator\Common\FactorySwagger::KEY_NAME       => $name . 'schema',
                    'link'                                                  => $ref,
                    \SwaggerValidator\Common\FactorySwagger::KEY_PROPERTIES => $schema,
                        ), true);

                $templateVars['items'][] = \Swagger2md\Swagger2md::getInstance()->renderTemplate('PartLinkObject', array('name' => $name . 'schema', 'link' => $ref));
            }
            else {
                \Swagger2md\Swagger2md::printOutV('Object : ' . get_class($this->$keySchema) . ' has not the awaiting method : ' . $method);
            }
        }
        else {
            foreach ($this->keys() as $key) {
                if (is_object($this->$key) && method_exists($this->$key, $method)) {
                    $type = is_object($this->$key->getModel($context->setDataPath($key)));
                    $item = $this->$key->$method($context->setDataPath($key));
                }
                else {
                    $type = null;
                    $item = $this->$key->$method($context->setDataPath($key));
                }

                if ($type === true) {
                    $ref = \Swagger2md\Swagger2md::makeAnchor(uniqid('itemSchema_'));

                    \Swagger2md\Swagger2md::getInstance()->renderTable($name . $key, $ref, \SwaggerValidator\Common\FactorySwagger::KEY_PROPERTIES, 'ColonsConfigOperation', 'TableArrayItems', array(
                        \SwaggerValidator\Common\FactorySwagger::KEY_TYPE       => \SwaggerValidator\Common\FactorySwagger::TYPE_OBJECT,
                        \SwaggerValidator\Common\FactorySwagger::KEY_NAME       => $name . $key,
                        'link'                                                  => $ref,
                        \SwaggerValidator\Common\FactorySwagger::KEY_PROPERTIES => $item,
                            ), true);

                    $templateVars['items'][] = \Swagger2md\Swagger2md::getInstance()->renderTemplate('PartLinkObject', array('name' => $name . $key, 'link' => $ref));
                }
                else {
                    $templateVars['items'][] = $item;
                }
            }
        }

        return $templateVars;
    }

}
