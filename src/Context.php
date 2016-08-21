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

namespace Swagger2md;

/**
 * Description of SwaggerCommonContext
 *
 * @author Nicolas JUHEL<swaggervalidator@nabbar.com>
 * @version 1.0.0
 */
class Context extends \SwaggerValidator\Common\Context
{

    /**
     * Used to customizing log and more when a debug is send
     *
     * @param string $message
     * @param mixed $context
     * @param string $method
     * @param TypeInteger $line
     */
    public static function logDebug($message, $method = null, $line = null)
    {
        file_put_contents('php://stdout', "[" . date('Y-m-d H:i:s') . "][DEBUG][{{$method}#{$line}] - {$message} \n");
    }

    /**
     * Used to customizing log and more when a validation error is occured
     *
     * @param const $validationType
     * @param \SwaggerValidator\Common\Context $swaggerContext
     */
    public function logValidationError($validationType, $messageException = null, $method = null, $line = null)
    {
        file_put_contents('php://stderr', "[" . date('Y-m-d H:i:s') . "][VALIDATION][KO][{{$method}#{$line}][{$validationType}] : {$messageException} --- " . $this->__toString() . "\n");
    }

}
