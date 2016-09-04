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
 * Description of Reference
 *
 * @author Nicolas JUHEL<swaggervalidator@nabbar.com>
 * @version 1.0.0
 */
class Reference extends \SwaggerValidator\Object\Reference
{

    /**
     *
     * @param \SwaggerValidator\Common\Context $context
     */
    public function markdown(\SwaggerValidator\Common\Context $context)
    {
        if ($context->checkExternalRef($this->referenceId)) {
            return null;
        }

        $object = \SwaggerValidator\Common\CollectionReference::getInstance()->get($this->referenceId);
        return $object->getObject($context->setExternalRef($this->referenceId))->markdown($context->setExternalRef($this->referenceId));
    }

}
