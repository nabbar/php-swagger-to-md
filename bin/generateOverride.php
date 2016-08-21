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


define('OVERRIDE_DIRPATH', dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'SwaggerValidator' . DIRECTORY_SEPARATOR);
define('OVERRIDE_FILEPATH', dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'SwaggerValidator' . DIRECTORY_SEPARATOR . 'Override.php');

function parsePath($source, $destination)
{
    if (!$dh = opendir($source)) {
        die('Cannot open path : ' . $source);
    }

    if (!touch($destination)) {
        die('Cannot write path : ' . $destination);
    }

    if (!substr($source, -1, 1) != DIRECTORY_SEPARATOR) {
        $source .= DIRECTORY_SEPARATOR;
    }

    $namespace = explode('src' . DIRECTORY_SEPARATOR, $source);
    array_shift($namespace);
    $namespace = str_replace('\\\\', '\\', '\\Swagger2md\\' . implode('\\', $namespace));

    file_put_contents($destination, "\n", FILE_APPEND);

    while ($file = readdir($dh)) {

        if (realpath($source . $file) == realpath($destination)) {
            continue;
        }

        if (is_dir($source . $file) && $file != '.' && $file != '..') {
            parsePath($source . $file, $destination);
            file_put_contents($destination, "\n", FILE_APPEND);
        }

        if (pathinfo($file, PATHINFO_EXTENSION) != 'php') {
            continue;
        }


        $class = pathinfo($file, PATHINFO_FILENAME);
        $str   = "\t\t\\SwaggerValidator\\Common\\CollectionType::getInstance()->set('{$class}', '{$namespace}$class');\n";

        print "Adding class : {$class}\n";
        file_put_contents($destination, $str, FILE_APPEND);
    }
}

$header = '
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

';

$footer = '
    }
}

';

if (!touch(OVERRIDE_FILEPATH) || !unlink(OVERRIDE_FILEPATH)) {
    die('Cannot write path : ' . OVERRIDE_FILEPATH);
}

file_put_contents(OVERRIDE_FILEPATH, $header);

parsePath(OVERRIDE_DIRPATH, OVERRIDE_FILEPATH);

file_put_contents(OVERRIDE_FILEPATH, $footer, FILE_APPEND);
