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

    /**
     *
     * @var integer
     */
    protected static $verboseLevel = 0;

    /**
     *
     * @var \Twig_Environment
     */
    protected $twigTpl;

    /**
     *
     * @var string
     */
    protected $output;

    public function __construct($swaggerFile)
    {
        $this->showVersion();

        $params = getopt('h::vv::vvv::v', array(
            'templates::',
            'tempDir::',
            'output::',
            'help',
            'version',
            'verbose',
        ));

        if (isset($params['help']) || isset($params['h'])) {
            $this->showUsage();
            $this->showHelp();
            $this->exitCode(0);
        }

        if (isset($params['version'])) {
            $this->exitCode(0);
        }

        if (isset($params['verbose']) || isset($params['vvv'])) {
            self::$verboseLevel = 3;
        }
        elseif (isset($params['vv'])) {
            self::$verboseLevel = 2;
        }
        elseif (isset($params['v'])) {
            self::$verboseLevel = 1;
        }
        else {
            self::$verboseLevel = 0;
        }

        if (self::$verboseLevel < 3) {
            \SwaggerValidator\Common\Context::setConfigDropAllDebugLog();
        }

        if (!empty($params['tempDir'])) {
            $temp = $params['tempDir'];
        }

        if (!empty($params['output'])) {
            $output = $params['output'];
            self::printOutVV('Asked to ouput to : ' . $output);
        }

        if (!empty($params['templates'])) {
            $tplDir = $this->checkTemplates($params['templates']);
        }
        else {
            $tplDir = $this->checkTemplates();
        }

        if (!empty($temp)) {
            $this->twigTpl = new \Twig_Environment(new \Twig_Loader_Filesystem($tplDir), array(
                'cache'            => $temp,
                'debug'            => (self::$verboseLevel > 0),
                'strict_variables' => false,
                'optimizations'    => 0,
                'autoescape'       => false,
            ));
        }
        else {
            $this->twigTpl = new \Twig_Environment(new \Twig_Loader_Filesystem($tplDir), array(
                'cache'            => false,
                'debug'            => (self::$verboseLevel > 0),
                'strict_variables' => false,
                'optimizations'    => 0,
                'autoescape'       => false,
            ));
        }

        if (empty($swaggerFile) || substr($swaggerFile, 0, 1) == '-') {
            self::printError('Missing argument swaggerFile !');
            $this->showUsage();
            $this->exitCode(1);
        }

        if (!empty($output) && touch($output)) {
            $this->output = realpath($output);
            self::printOutV('The result will be saved into the file : ' . $this->output);
        }
        else {
            $this->output = 'php://stdout';
            self::printOutV('The result will be print in the stdout.');
        }

        try {
            \SwaggerValidator\Swagger::setSwaggerFile(getcwd() . DIRECTORY_SEPARATOR . $swaggerFile);
            $this->swagger = \SwaggerValidator\Swagger::load(new \Swagger2md\Context());
        }
        catch (Exception $ex) {

        }
    }

    public function markdown()
    {
        file_put_contents($this->output, $this->swagger->markdown(new \Swagger2md\Context(), $this->twigTpl));
    }

    public static function printError($message)
    {
        fwrite(STDERR, str_replace("\n", PHP_EOL, $message . "\n"));
    }

    public static function printOut($message)
    {
        fwrite(STDOUT, str_replace("\n", PHP_EOL, $message . "\n"));
    }

    public static function printOutV($message)
    {
        if (self::$verboseLevel > 0) {
            self::printOut($message);
        }
    }

    public static function printOutVV($message)
    {
        if (self::$verboseLevel > 1) {
            self::printOut($message);
        }
    }

    public static function printOutVVV($message)
    {
        if (self::$verboseLevel > 2) {
            self::printOut($message);
        }
    }

    public function exitCode($code)
    {
        fwrite(STDOUT, PHP_EOL . PHP_EOL);
        exit($code);
    }

    public function showVersion()
    {
        self::printOut("swagger-to-md " . self::version . " by Nicolas Juhel");
    }

    public function showUsage()
    {
        self::printOut("
Usage: swagger2md [options] swaggerFile");
    }

    public function showHelp()
    {
        self::printOut("
Options:
    --templates={folder}    Specify the folder of the templates to be used
    --tempDir={folder}      Specify the folder for temporary files
    --output={file}         Specify the file to store the generated documentation,
                              if not specify, then print in the stdout the result
    -vvv|--verbose          Prints more verbose message
    -vv                     Prints more verbose message but no message for SwaggerValidator
    -v                      Prints more verbose message only about the building documentation
    --version               Prints the version and exists
    -h|--help               Prints this help message
        ");
    }

    public function checkTemplates($path = null)
    {
        if (empty($path)) {
            $path = __DIR__ . DIRECTORY_SEPARATOR . 'Templates';
        }

        if (!file_exists($path)) {
            self::printError('The templates folder is not found !');
        }

        self::printOutV('Using template folder : ' . realpath($path));
        return realpath($path);
    }

}
