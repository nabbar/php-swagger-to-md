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

if (version_compare('5.4', PHP_VERSION, '>=')) {
    fwrite(STDERR, 'This version of swagger-to-md requires PHP 5.4; using the latest version of PHP is highly recommended.' . PHP_EOL . PHP_EOL);
    exit(1);
}

if (!ini_get('date.timezone')) {
    ini_set('date.timezone', 'UTC');
}

require 'Swagger2mdAutoload.php';
require 'vendors/swagger-validator/Swagger.php';
require 'vendors/twig/lib/Twig/Autoloader.php';

\Swagger2md\SwaggerValidator\Override::override();

if (!empty($argc) && $argc > 1) {
    $doc = new \Swagger2md\Swagger2md(array_pop($argv));
}
else {
    $doc = new \Swagger2md\Swagger2md(null);
}

$doc->markdown();
