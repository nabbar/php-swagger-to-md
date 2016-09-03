#!/usr/bin/env php
<?php
/*
 * Copyright 2016 Nicolas JUHEL<swaggervalidator@nabbar.com>.
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
try {
    Phar::mapPhar();

    if (version_compare('5.4', PHP_VERSION, '>=')) {
        fwrite(STDERR, 'This version of swagger-to-md requires PHP 5.4; using the latest version of PHP is highly recommended.' . PHP_EOL . PHP_EOL);
        exit(1);
    }

    if (!ini_get('date.timezone')) {
        ini_set('date.timezone', 'UTC');
    }

    if (!defined('DIRECTORY_SEPARATOR')) {
        define('DIRECTORY_SEPARATOR', '/');
    }

    if (!defined('PHAR_NAME')) {
        define('PHAR_NAME', 'phar://Swagger2MD.phar/');
    }

    if (!defined('PHAR_SWG2MD_ROOT_PATH')) {
        define('PHAR_SWG2MD_ROOT_PATH', 'phar://Swagger2MD.phar/');
    }

    if (!defined('PHAR_SWAGGER_VALIDATOR_ROOT_PATH')) {
        define('PHAR_SWAGGER_VALIDATOR_ROOT_PATH', 'phar://Swagger2MD.phar/vendors/swagger-validator/');
    }

    if (!defined('PHAR_TWIG_ROOT_PATH')) {
        define('PHAR_TWIG_ROOT_PATH', 'phar://Swagger2MD.phar/vendors/twig/');
    }

    require 'phar://Swagger2MD.phar/Swagger2mdAutoload.php';
    \Swagger2md\Swagger2mdAutoload::registerAutoloader();

    require 'phar://Swagger2MD.phar/vendors/swagger-validator/SwaggerAutoload.php';
    \SwaggerValidator\SwaggerAutoload::registerAutoloader();

    require 'phar://Swagger2MD.phar/vendors/twig/TwigAutoload.php';
    \TwigAutoload\TwigAutoload::registerAutoloader();

    require 'phar://Swagger2MD.phar/SwaggerValidator/Override.php';
    \Swagger2md\SwaggerValidator\Override::override();

    require 'phar://Swagger2MD.phar/Swagger2md.php';

    if (!empty($argc) && $argc > 1) {
        \Swagger2md\Swagger2md::getInstance()->loadSwaggerFile(array_pop($argv));
    }
    else {
        \Swagger2md\Swagger2md::getInstance()->loadSwaggerFile();
    }

    \Swagger2md\Swagger2md::getInstance()->markdown();
}
catch (\Exception $e) {
    file_put_contents('php://stderr', print_r($e, true));
    exit(1);
}

__HALT_COMPILER();
