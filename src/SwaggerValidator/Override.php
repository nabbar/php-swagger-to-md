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

namespace Swagger2md\SwaggerValidator;

/**
 * File to override class of SwaggerValidator to add genDoc method for each Swagger Object & Primitives
 *
 * @author Nicolas JUHEL <swaggervalidator@nabbar.com>
 * @version 1.0.0
 */
class Override
{

    public static function override()
    {

        \SwaggerValidator\Common\CollectionType::getInstance()->set('TypeString', '\Swagger2md\SwaggerValidator//DataType/TypeString');
        \SwaggerValidator\Common\CollectionType::getInstance()->set('TypeInteger', '\Swagger2md\SwaggerValidator//DataType/TypeInteger');
        \SwaggerValidator\Common\CollectionType::getInstance()->set('TypeArray', '\Swagger2md\SwaggerValidator//DataType/TypeArray');
        \SwaggerValidator\Common\CollectionType::getInstance()->set('TypeArrayItems', '\Swagger2md\SwaggerValidator//DataType/TypeArrayItems');
        \SwaggerValidator\Common\CollectionType::getInstance()->set('TypeBoolean', '\Swagger2md\SwaggerValidator//DataType/TypeBoolean');
        \SwaggerValidator\Common\CollectionType::getInstance()->set('TypeObject', '\Swagger2md\SwaggerValidator//DataType/TypeObject');
        \SwaggerValidator\Common\CollectionType::getInstance()->set('TypeCombined', '\Swagger2md\SwaggerValidator//DataType/TypeCombined');
        \SwaggerValidator\Common\CollectionType::getInstance()->set('TypeNumber', '\Swagger2md\SwaggerValidator//DataType/TypeNumber');
        \SwaggerValidator\Common\CollectionType::getInstance()->set('TypeFile', '\Swagger2md\SwaggerValidator//DataType/TypeFile');

        \SwaggerValidator\Common\CollectionType::getInstance()->set('Parameters', '\Swagger2md\SwaggerValidator//Object/Parameters');
        \SwaggerValidator\Common\CollectionType::getInstance()->set('Responses', '\Swagger2md\SwaggerValidator//Object/Responses');
        \SwaggerValidator\Common\CollectionType::getInstance()->set('Headers', '\Swagger2md\SwaggerValidator//Object/Headers');
        \SwaggerValidator\Common\CollectionType::getInstance()->set('ParameterBody', '\Swagger2md\SwaggerValidator//Object/ParameterBody');
        \SwaggerValidator\Common\CollectionType::getInstance()->set('Security', '\Swagger2md\SwaggerValidator//Object/Security');
        \SwaggerValidator\Common\CollectionType::getInstance()->set('SecurityRequirement', '\Swagger2md\SwaggerValidator//Object/SecurityRequirement');
        \SwaggerValidator\Common\CollectionType::getInstance()->set('Swagger', '\Swagger2md\SwaggerValidator//Object/Swagger');
        \SwaggerValidator\Common\CollectionType::getInstance()->set('HeaderItem', '\Swagger2md\SwaggerValidator//Object/HeaderItem');
        \SwaggerValidator\Common\CollectionType::getInstance()->set('Operation', '\Swagger2md\SwaggerValidator//Object/Operation');
        \SwaggerValidator\Common\CollectionType::getInstance()->set('ResponseItem', '\Swagger2md\SwaggerValidator//Object/ResponseItem');
        \SwaggerValidator\Common\CollectionType::getInstance()->set('ExternalDocs', '\Swagger2md\SwaggerValidator//Object/ExternalDocs');
        \SwaggerValidator\Common\CollectionType::getInstance()->set('Info', '\Swagger2md\SwaggerValidator//Object/Info');
        \SwaggerValidator\Common\CollectionType::getInstance()->set('PathItem', '\Swagger2md\SwaggerValidator//Object/PathItem');
        \SwaggerValidator\Common\CollectionType::getInstance()->set('SecurityItem', '\Swagger2md\SwaggerValidator//Object/SecurityItem');
        \SwaggerValidator\Common\CollectionType::getInstance()->set('License', '\Swagger2md\SwaggerValidator//Object/License');
        \SwaggerValidator\Common\CollectionType::getInstance()->set('Paths', '\Swagger2md\SwaggerValidator//Object/Paths');
        \SwaggerValidator\Common\CollectionType::getInstance()->set('Reference', '\Swagger2md\SwaggerValidator//Object/Reference');
        \SwaggerValidator\Common\CollectionType::getInstance()->set('Contact', '\Swagger2md\SwaggerValidator//Object/Contact');
        \SwaggerValidator\Common\CollectionType::getInstance()->set('Definitions', '\Swagger2md\SwaggerValidator//Object/Definitions');
        \SwaggerValidator\Common\CollectionType::getInstance()->set('SecurityDefinitions', '\Swagger2md\SwaggerValidator//Object/SecurityDefinitions');
    }

}
