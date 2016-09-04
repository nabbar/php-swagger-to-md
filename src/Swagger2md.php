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
    protected $tempFolder;

    /**
     *
     * @var string
     */
    protected $templateFolder;

    /**
     *
     * @var string
     */
    protected $output;

    /**
     *
     * @var \Swagger2md\Swagger2md
     */
    private static $instance;

    /**
     *
     * @var array
     */
    protected $suffixObject;

    /**
     * Private construct for singleton
     */
    private function __construct()
    {

    }

    public function loadSwaggerFile($swaggerFile = null)
    {
        $params = getopt('h::v', array(
            'templates::',
            'tempDir::',
            'output::',
            'help',
            'version',
            'verbose',
        ));

        if (isset($params['help']) || isset($params['h'])) {
            $this->showVersion();
            $this->showUsage();
            $this->showHelp();
            $this->exitCode(0);
        }

        if (isset($params['version'])) {
            $this->showVersion();
            $this->exitCode(0);
        }

        if (isset($params['v'])) {
            if (is_array($params['v']) && count($params['v']) > 2) {
                unset($params['v']);
                $params['vvv'] = true;
            }
            elseif (is_array($params['v']) && count($params['v']) > 1) {
                unset($params['v']);
                $params['vv'] = true;
            }
        }

        if (isset($params['verbose']) || isset($params['vvv'])) {
            $this->showVersion();
            self::$verboseLevel = 3;
            self::printOutV('Verbose : maximum');
        }
        elseif (isset($params['vv'])) {
            $this->showVersion();
            self::$verboseLevel = 2;
            self::printOutV('Verbose : medium');
        }
        elseif (isset($params['v'])) {
            $this->showVersion();
            self::$verboseLevel = 1;
            self::printOutV('Verbose : minimum');
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
            $this->templateFolder = $this->checkTemplates($params['templates']);
        }
        else {
            $this->templateFolder = $this->checkTemplates();
        }

        if (!empty($temp)) {
            $this->twigTpl = new \Twig_Environment(new \Twig_Loader_Filesystem($this->templateFolder), array(
                'cache'            => $temp,
                'debug'            => (self::$verboseLevel > 0),
                'strict_variables' => false,
                'optimizations'    => 0,
                'autoescape'       => false,
            ));
        }
        else {
            $this->twigTpl = new \Twig_Environment(new \Twig_Loader_Filesystem($this->templateFolder), array(
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

        \SwaggerValidator\Swagger::setSwaggerFile(getcwd() . DIRECTORY_SEPARATOR . $swaggerFile);
        $this->swagger = \SwaggerValidator\Swagger::load(new \Swagger2md\Context());
    }

    /**
     * get the singleton of this object
     * @return \Swagger2md\Swagger2md
     */
    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new static();
        }

        return self::$instance;
    }

    /**
     * replace the singleton of this object
     */
    public static function setInstance(\Swagger2md\Swagger2md $instance)
    {
        self::$instance = $instance;
    }

    /**
     * prune the singleton of this object
     */
    public static function pruneInstance()
    {
        self::$instance = null;
    }

    public function markdown()
    {
        file_put_contents($this->output, $this->swagger->markdown(new \Swagger2md\Context()));
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
        if (defined('PHAR_SWG2MD_ROOT_PATH')) {
            $baseDir = PHAR_SWG2MD_ROOT_PATH;
        }
        elseif (\Phar::running()) {
            $baseDir = null;
        }
        else {
            $baseDir = __DIR__ . DIRECTORY_SEPARATOR;
        }

        if (empty($path)) {
            $path = $baseDir . 'Templates';
        }

        if (\Phar::running()) {
            $pathReal = $path;
        }
        else {
            $pathReal = realpath($path);
        }

        if (!file_exists($pathReal)) {
            self::printOutVV('Given template folder : ' . $path);
            self::printError('The templates folder is not found !');
            self::exitCode(1);
        }

        self::printOutV('Using template folder : ' . $pathReal);
        return $pathReal;
    }

    public static function makeAnchor($title, $suffix = null)
    {
        if ($suffix === true) {
            $suffix = 1;
        }

        return str_replace(' ', '-', preg_replace('/([\W]*)/si', '', strtolower($title))) . ($suffix > 0 ? '-' . ((int) $suffix) : '');
    }

    public function extractStored()
    {
        $result = array();
        foreach ($this->suffixObject as $obj) {
            if (is_array($obj) && array_key_exists('file', $obj) && !empty($obj['file'])) {
                $obj['contents'] = file_get_contents($obj['file']);
                unlink($obj['file']);
            }

            if (!empty($obj['contents'])) {
                $result[] = $obj;
            }
        }

        $this->suffixObject = array();
        return $result;
    }

    public function renderTable($name, $anchor, $listKey, $colonsFile, $template, $vars, $store = null)
    {
        if ($store !== false) {
            $file = $this->checkAndMakeObjectFolder();
        }

        if (!is_array($this->suffixObject)) {
            $this->suffixObject = array();
        }

        $colonTitle = $this->getColonArray($colonsFile);

        if (empty($colonTitle)) {
            self::printError('Cannot load colons config for table with this template : ' . $colonsFile);
            return;
        }

        if (empty($vars[$listKey])) {
            self::printError('Cannot rendenr an empty table...');
            return;
        }

        $vars[$listKey] = array_map(function($val) {
            if (!is_array($val) || !array_key_exists(\SwaggerValidator\Common\FactorySwagger::KEY_REQUIRED, $val)) {
                return $val;
            }

            if ($val[\SwaggerValidator\Common\FactorySwagger::KEY_REQUIRED] !== true) {
                unset($val[\SwaggerValidator\Common\FactorySwagger::KEY_REQUIRED]);
            }

            return $val;
        }, $vars[$listKey]);

        $colonTitle = array_map(function($val) use($vars, $listKey) {
            if (empty($val) || !is_array($vars) || !array_key_exists('key', $val)) {
                return;
            }

            if ($val['enabled'] === true) {
                return $val;
            }

            foreach ($vars[$listKey] as $item) {
                if (empty($item) || !is_array($item) || !array_key_exists($val['key'], $item) || is_null($item[$val['key']])) {
                    continue;
                }
                elseif (!is_string($item[$val['key']]) || strlen($item[$val['key']]) > 0) {
                    $val['enabled'] = true;
                    break;
                }
            }

            return $val;
        }, $colonTitle);

        $vars['listColons'] = array_filter($colonTitle, function($val) {
            return $val['enabled'];
        });

        if (!empty($file)) {
            $file .= uniqid('obj_');

            \Swagger2md\Swagger2md::printOutV('Rendering this template : ' . $template);
            file_put_contents($file, $this->twigTpl->render($template, $vars));

            $this->suffixObject[$name] = array(
                'name' => $name,
                'link' => $anchor,
                'file' => $file,
            );
        }
        elseif ($store !== false) {
            \Swagger2md\Swagger2md::printOutV('Rendering this template : ' . $template);
            $this->suffixObject[$name] = array(
                'name'     => $name,
                'link'     => $anchor,
                'contents' => $this->twigTpl->render($template, $vars),
            );
        }
        else {
            \Swagger2md\Swagger2md::printOutV('Rendering this template : ' . $template);
            return $this->twigTpl->render($template, $vars);
        }
    }

    private function checkAndMakeObjectFolder()
    {
        if (empty($this->tempFolder)) {
            $folder = $this->tempFolder . DIRECTORY_SEPARATOR . 'tmpObject' . DIRECTORY_SEPARATOR;

            if (file_exists($folder)) {
                return $folder;
            }

            mkdir($folder, 0777, true);

            if (file_exists($folder)) {
                return $folder;
            }

            throw new Exception('Cannot create folder : ' . $folder);
        }

        return null;
    }

    public function getColonArray($fileName)
    {
        if (!file_exists($this->templateFolder)) {
            return null;
        }

        if (!file_exists($this->templateFolder . DIRECTORY_SEPARATOR . $fileName)) {
            return null;
        }

        $configColTitle = explode("\n", str_replace(array("\n\r", "\r\n", "\r"), "\n", file_get_contents($this->templateFolder . DIRECTORY_SEPARATOR . $fileName)));
        $colParamsTitle = array_map(function($val) {
            $colons = explode('|', trim($val));
            $enable = false;

            if (count($colons) < 3) {
                return;
            }

            if (in_array($colons[0], array('name', 'partType'))) {
                $enable = true;
            }

            return array(
                'enabled' => $enable,
                'key'     => $colons[0],
                'title'   => $colons[1],
                'align'   => $colons[2]
            );
        }, $configColTitle);

        return array_filter($colParamsTitle);
    }

    public function renderTemplate($template, $vars)
    {
        \Swagger2md\Swagger2md::printOutV('Rendering this template : ' . $template);
        return $this->twigTpl->render($template, $vars);
    }

}
