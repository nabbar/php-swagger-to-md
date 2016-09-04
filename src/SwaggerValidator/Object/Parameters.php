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
 * Description of Parameters
 *
 * @author Nicolas JUHEL<swaggervalidator@nabbar.com>
 * @version 1.0.0
 */
class Parameters extends \SwaggerValidator\Object\Parameters
{

    /**
     *
     * @param \SwaggerValidator\Common\Context $context
     * @param array $generalItems
     */
    public function markdown(\SwaggerValidator\Common\Context $context, $generalItems)
    {
        $method = __FUNCTION__;
        $context->setType(\SwaggerValidator\Common\Context::TYPE_REQUEST);

        foreach ($this->keys() as $key) {
            $param = null;
            $in    = null;
            $name  = null;

            if (is_object($this->$key) && ($this->$key instanceof \SwaggerValidator\Object\ParameterBody)) {
                $name  = \SwaggerValidator\Common\FactorySwagger::LOCATION_BODY;
                $in    = \SwaggerValidator\Common\FactorySwagger::LOCATION_BODY;
                $param = $this->$key->$method($context->setDataPath($key));
            }
            elseif (is_object($this->$key) && ($this->$key instanceof \SwaggerValidator\DataType\TypeCommon)) {
                $name  = $this->$key->name;
                $in    = $this->$key->in;
                $param = $this->$key->$method($context->setDataPath($key));
            }

            if (!array_key_exists($in, $generalItems) || !is_array($generalItems[$in])) {
                $generalItems[$in] = array();
            }

            if (!empty($param)) {
                $generalItems[$in][$name] = $param;
            }
        }

        \Swagger2md\Swagger2md::printOutVV('Collecting parameters data');
        return $generalItems;
    }

}
