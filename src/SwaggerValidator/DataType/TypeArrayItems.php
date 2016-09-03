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

    public function markdown(\SwaggerValidator\Common\Context $context, \Twig_Environment $twigObject)
    {
        $method       = __FUNCTION__;
        $templateVars = array(
            'items'   => array(),
            'objects' => array(),
        );
        $keySchema    = \SwaggerValidator\Common\FactorySwagger::KEY_SCHEMA;

        if (isset($this->$keySchema) && is_object($this->$keySchema)) {
            $templateVars['items'][] = $twigObject->render('StringObjectRef', array('name' => 'name', 'ref' => 'ref'));
            if (method_exists($this->$keySchema, $method)) {
                $templateVars['objects'][] = $this->$keySchema->$method($context->setDataPath($keySchema), $twigObject);
            }
        }
        else {
            foreach ($this->keys() as $key) {
                if (is_object($this->$key) && method_exists($this->$key, $method)) {
                    $type = is_object($this->$key->getModel($context->setDataPath($key)));
                    $item = $this->$key->$method($context->setDataPath($key), $twigObject);
                }
                else {
                    $type = null;
                    $item = $this->$key->$method($context->setDataPath($key), $twigObject);
                }

                if ($type === true) {
                    $templateVars['items'][]   = $twigObject->render('StringObjectRef', array('name' => 'name', 'ref' => 'ref'));
                    $templateVars['objects'][] = $item;
                }
                else {
                    $templateVars['items'][] = $item;
                }
            }
        }

        $templateVars['model'] = $this->getModel($context);

        $tpl = explode('\\', trim(__CLASS__, "\\"));
        array_shift($tpl);
        array_shift($tpl);
        $tpl = implode('', array_map('ucfirst', $tpl));

        \Swagger2md\Swagger2md::printOutV('Rendering this template : ' . $tpl);
        $templateVars['render'] = $twigObject->render($tpl, $templateVars);

        return $templateVars;
    }

}
