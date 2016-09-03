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

    public function markdown(\SwaggerValidator\Common\Context $context, \Twig_Environment $twigObject)
    {
        $method       = __FUNCTION__;
        $templateVars = array(
            'partType' => $twigObject->render('PartTypeFormat', array('type' => \SwaggerValidator\Common\FactorySwagger::TYPE_OBJECT)),
            'model'    => $this->getModel($context)
        );

        if (!empty($this->properties)) {
            $templateVars['linkItemsObject'] = $twigObject->render('PartLinkObject', array('name' => $context->getDataPath(), 'link' => 'toto'));
        }
        else {
            foreach ($this->keys() as $key) {
                if (is_object($this->$key) && method_exists($this->$key, $method)) {
                    $templateVars[$key] = $this->$key->$method($context->setDataPath($key), $twigObject);
                }
                elseif (!is_object($this->$key)) {
                    $templateVars[$key] = $this->$key;
                }
            }
        }

        $tpl = explode('\\', trim(__CLASS__, "\\"));
        array_shift($tpl);
        array_shift($tpl);
        $tpl = implode('', array_map('ucfirst', $tpl));

        \Swagger2md\Swagger2md::printOutV('Rendering this template : ' . $tpl);
        $templateVars['render'] = $twigObject->render($tpl, $templateVars);

        return $templateVars;
    }

}
