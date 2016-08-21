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

namespace Swagger2md;

if (file_exists('swagger2md.phar')) {
    require_once "phar://swagger2md.phar";
    \Swagger2md\Swagger2mdAutoload::registerAutoloader();
}
else {
    require_once 'Swagger2mdAutoload.php';
    \Swagger2md\Swagger2mdAutoload::registerAutoloader();
}

/**
 * Description of Swagger2md
 *
 * @author Nicolas JUHEL<swaggervalidator@nabbar.com>
 */
class Swagger2md
{

    const version = '1.0.0';

    /**
     *
     * @var \Swagger2md\SwaggerValidator\Object\Swagger
     */
    protected $swagger;

    public function __construct($swaggerFile)
    {
        $this->showVersion();

        $params = getopt('h::v::vv::vvv::', array(
            'templates::',
            'help::',
            'version::',
            'verbose::',
        ));

        if (isset($params['help']) || isset($params['h'])) {
            $this->showUsage();
            $this->showHelp();
            $this->exitCode(0);
        }

        if (isset($params['version'])) {
            $this->exitCode(0);
        }

        if (!isset($params['verbose']) && !isset($params['vvv'])) {
            \SwaggerValidator\Common\Context::setConfigDropAllDebugLog();
        }

        if (!empty($params['templates'])) {
            $this->checkTemplates($params['templates']);
        }

        if (empty($swaggerFile) || substr($swaggerFile, 0, 1) == '-') {
            $this->printError('Missing argument swaggerFile !');
            $this->showUsage();
            $this->exitCode(1);
        }

        try {
            \SwaggerValidator\Swagger::setSwaggerFile(getcwd() . DIRECTORY_SEPARATOR . $swaggerFile);
            $this->swagger = \SwaggerValidator\Swagger::load(new \Swagger2md\Context());
        }
        catch (Exception $ex) {

        }
    }

    public function printError($message)
    {
        fwrite(STDERR, str_replace("\n", PHP_EOL, $message . "\n"));
    }

    public function printOut($message)
    {
        fwrite(STDOUT, str_replace("\n", PHP_EOL, $message . "\n"));
    }

    public function exitCode($code)
    {
        fwrite(STDOUT, PHP_EOL . PHP_EOL);
        exit($code);
    }

    public function showVersion()
    {
        $this->printOut("swagger-to-md " . self::version . " by Nicolas Juhel");
    }

    public function showUsage()
    {
        $this->printOut("
Usage: swagger2md [options] swaggerFile");
    }

    public function showHelp()
    {
        $this->printOut("
Options:
    --templates     Specify the folder of the templates to be used
    -vvv|--verbose  Prints more verbose message
    -vv             Prints more verbose message but no message for SwaggerValidator
    -v              Prints more verbose message only about the building documentation
    --version       Prints the version and exists
    -h|--help       Prints this help message
        ");
    }

    public function checkTemplates($path = null)
    {
        if (empty($path)) {
            $path = __DIR__ . DIRECTORY_SEPARATOR . 'templates';
        }

        if (!file_exists($path)) {
            $this->printError('The templates folder is not found !');
        }
    }

}
