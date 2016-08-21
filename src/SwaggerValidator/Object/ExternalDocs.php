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
 * Description of ExternalDocs
 *
 * @author Nicolas JUHEL<swaggervalidator@nabbar.com>
 * @version 1.0.0
 */
class ExternalDocs extends \SwaggerValidator\Object\ExternalDocs
{

    /**
     *
     * @param \SwaggerValidator\Common\Context $context
     * @param \Twig_Environment $twigObject
     */
    public function markdown(\SwaggerValidator\Common\Context $context, $generalItems, \Twig_Environment $twigObject)
    {
        $method       = __FUNCTION__;
        $templateVars = array();

        foreach ($this->keys() as $key) {
            if (is_object($this->$key) && method_exists($this->$key, $method)) {
                $templateVars[$key] = $this->$key->$method($context->setDataPath($key), $generalItems, $twigObject);
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

}
