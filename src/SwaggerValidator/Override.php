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
class Override {

    public static function override()
    {
        \SwaggerValidator\Swagger::cleanInstances();


		\SwaggerValidator\Common\Factory::getInstance()->set(\SwaggerValidator\Common\CollectionType::TypeString, new \Swagger2md\SwaggerValidator\DataType\TypeString());
		\SwaggerValidator\Common\Factory::getInstance()->set(\SwaggerValidator\Common\CollectionType::TypeInteger, new \Swagger2md\SwaggerValidator\DataType\TypeInteger());
		\SwaggerValidator\Common\Factory::getInstance()->set(\SwaggerValidator\Common\CollectionType::TypeArray, new \Swagger2md\SwaggerValidator\DataType\TypeArray());
		\SwaggerValidator\Common\Factory::getInstance()->set(\SwaggerValidator\Common\CollectionType::TypeArrayItems, new \Swagger2md\SwaggerValidator\DataType\TypeArrayItems());
		\SwaggerValidator\Common\Factory::getInstance()->set(\SwaggerValidator\Common\CollectionType::TypeBoolean, new \Swagger2md\SwaggerValidator\DataType\TypeBoolean());
		\SwaggerValidator\Common\Factory::getInstance()->set(\SwaggerValidator\Common\CollectionType::TypeObject, new \Swagger2md\SwaggerValidator\DataType\TypeObject());
		\SwaggerValidator\Common\Factory::getInstance()->set(\SwaggerValidator\Common\CollectionType::TypeCombined, new \Swagger2md\SwaggerValidator\DataType\TypeCombined());
		\SwaggerValidator\Common\Factory::getInstance()->set(\SwaggerValidator\Common\CollectionType::TypeNumber, new \Swagger2md\SwaggerValidator\DataType\TypeNumber());
		\SwaggerValidator\Common\Factory::getInstance()->set(\SwaggerValidator\Common\CollectionType::TypeFile, new \Swagger2md\SwaggerValidator\DataType\TypeFile());


		\SwaggerValidator\Common\Factory::getInstance()->set(\SwaggerValidator\Common\CollectionType::Parameters, new \Swagger2md\SwaggerValidator\Object\Parameters());
		\SwaggerValidator\Common\Factory::getInstance()->set(\SwaggerValidator\Common\CollectionType::Responses, new \Swagger2md\SwaggerValidator\Object\Responses());
		\SwaggerValidator\Common\Factory::getInstance()->set(\SwaggerValidator\Common\CollectionType::Headers, new \Swagger2md\SwaggerValidator\Object\Headers());
		\SwaggerValidator\Common\Factory::getInstance()->set(\SwaggerValidator\Common\CollectionType::ParameterBody, new \Swagger2md\SwaggerValidator\Object\ParameterBody());
		\SwaggerValidator\Common\Factory::getInstance()->set(\SwaggerValidator\Common\CollectionType::Swagger, new \Swagger2md\SwaggerValidator\Object\Swagger());
		\SwaggerValidator\Common\Factory::getInstance()->set(\SwaggerValidator\Common\CollectionType::HeaderItem, new \Swagger2md\SwaggerValidator\Object\HeaderItem());
		\SwaggerValidator\Common\Factory::getInstance()->set(\SwaggerValidator\Common\CollectionType::Operation, new \Swagger2md\SwaggerValidator\Object\Operation());
		\SwaggerValidator\Common\Factory::getInstance()->set(\SwaggerValidator\Common\CollectionType::ResponseItem, new \Swagger2md\SwaggerValidator\Object\ResponseItem());
		\SwaggerValidator\Common\Factory::getInstance()->set(\SwaggerValidator\Common\CollectionType::ExternalDocs, new \Swagger2md\SwaggerValidator\Object\ExternalDocs());
		\SwaggerValidator\Common\Factory::getInstance()->set(\SwaggerValidator\Common\CollectionType::Info, new \Swagger2md\SwaggerValidator\Object\Info());
		\SwaggerValidator\Common\Factory::getInstance()->set(\SwaggerValidator\Common\CollectionType::PathItem, new \Swagger2md\SwaggerValidator\Object\PathItem());
		\SwaggerValidator\Common\Factory::getInstance()->set(\SwaggerValidator\Common\CollectionType::License, new \Swagger2md\SwaggerValidator\Object\License());
		\SwaggerValidator\Common\Factory::getInstance()->set(\SwaggerValidator\Common\CollectionType::Paths, new \Swagger2md\SwaggerValidator\Object\Paths());
		\SwaggerValidator\Common\Factory::getInstance()->set(\SwaggerValidator\Common\CollectionType::Reference, new \Swagger2md\SwaggerValidator\Object\Reference());
		\SwaggerValidator\Common\Factory::getInstance()->set(\SwaggerValidator\Common\CollectionType::Contact, new \Swagger2md\SwaggerValidator\Object\Contact());


    }
}

