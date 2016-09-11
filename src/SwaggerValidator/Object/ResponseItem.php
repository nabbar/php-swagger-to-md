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
 * Description of ResponseItem
 *
 * @author Nicolas JUHEL<swaggervalidator@nabbar.com>
 * @version 1.0.0
 */
class ResponseItem extends \SwaggerValidator\Object\ResponseItem
{

    /**
     *
     * @param \SwaggerValidator\Common\Context $context
     * @param array $generalItems
     */
    public function markdown(\SwaggerValidator\Common\Context $context, $generalItems)
    {
        $method = __FUNCTION__;

        $headersKey = \SwaggerValidator\Common\FactorySwagger::KEY_HEADERS;
        $schemaKey  = \SwaggerValidator\Common\FactorySwagger::KEY_SCHEMA;

        if (!array_key_exists($headersKey, $generalItems)) {
            $generalItems[$headersKey] = array();
        }

        if (!array_key_exists($schemaKey, $generalItems)) {
            $generalItems[$schemaKey] = null;
        }

        if ($this->__isset($headersKey) && is_object($this->$headersKey) && ($this->$headersKey instanceof \SwaggerValidator\Object\Headers)) {
            $generalItems[$headersKey] = $this->$headersKey->$method($context->setDataPath($headersKey), $generalItems[$headersKey]);
        }

        if (isset($this->$schemaKey) && is_object($this->$schemaKey) && method_exists($this->$schemaKey, 'getModel')) {
            $generalItems[$schemaKey] = $this->$schemaKey->$method($context->setDataPath($schemaKey)->setType(\SwaggerValidator\Common\Context::TYPE_RESPONSE));
        }

        if (empty($generalItems[$headersKey])) {
            unset($generalItems[$headersKey]);
        }

        if (empty($generalItems[$schemaKey])) {
            unset($generalItems[$schemaKey]);
        }

        \Swagger2md\Swagger2md::printOutVV('Collecting one response data');
        return $generalItems;
    }

}
