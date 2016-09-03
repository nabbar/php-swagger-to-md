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

/**
 * Builder for PHAR archive
 *
 * @author Nicolas JUHEL<swaggervalidator@nabbar.com>
 * @version 1.0.0
 */
define('REPOS_PATH_ROOT', dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR);
define('REPOS_PATH_SRC', REPOS_PATH_ROOT . 'src' . DIRECTORY_SEPARATOR);
define('REPOS_PATH_BIN', REPOS_PATH_ROOT . 'bin' . DIRECTORY_SEPARATOR);
define('SWG2MD_PATH_ROOT', REPOS_PATH_SRC);

function getPrivateKey($pharPath)
{
    /*
     * Generate a key with this command :
     * openssl genrsa -out key.priv.pem -aes256 4096
     * openssl rsa -in key.priv.pem -pubout -out key.pub.pem
     */
    $path = dirname(__FILE__);
    $path = str_replace(DIRECTORY_SEPARATOR, '/', $path);
    $path = str_replace('//', '/', $path . '/key.priv.pem');
    $path = str_replace('/', DIRECTORY_SEPARATOR, $path);

    copy(str_replace('.priv.', '.pub.', $path), $pharPath . '.pubkey');

    $private = openssl_get_privatekey(file_get_contents($path), readline('Passphrase :'));
    $result  = '';

    openssl_pkey_export($private, $result);
    return $private;
}

if (!Phar::canWrite()) {
    die("\n\n\t\t" . 'cannot write phar : change the ini phar.readonly to 0 !!' . "\n\n");
}

foreach (array(__DIR__ . '/../../autoload.php', __DIR__ . '/../../vendor/autoload.php', __DIR__ . '/../vendor/autoload.php', __DIR__ . '/vendor/autoload.php') as $file) {
    if (file_exists($file)) {
        define('SWG2MD_COMPOSER_INSTALL', $file);
        break;
    }
}

unset($file);

if (!defined('SWG2MD_COMPOSER_INSTALL')) {
    fwrite(STDERR, 'You need to set up the project dependencies using the following commands:' . PHP_EOL .
            'wget http://getcomposer.org/composer.phar' . PHP_EOL .
            'php composer.phar install' . PHP_EOL .
            PHP_EOL . PHP_EOL
    );
    exit(1);
}

function listDirectoryToPhar($localBasePath, $pharBasePath, $exclude = array())
{
    $list  = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(realpath($localBasePath), FilesystemIterator::SKIP_DOTS | FilesystemIterator::UNIX_PATHS));
    $files = array();

    foreach ($list as $key => $value) {
        $key = str_replace(realpath($localBasePath), $pharBasePath, $key);

        if (in_array($key, $exclude)) {
            continue;
        }

        $files[$key] = $value . "";

        file_put_contents('php://stdout', 'Adding File : ' . $key . ' => ' . $value . PHP_EOL);
    }

    if (version_compare(PHP_VERSION, '5.4', '<')) {
        ksort($files);
    }
    else {
        ksort($files, SORT_NATURAL);
    }

    return $files;
}

function createStub()
{
    return file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'stub.php');
}

$pharPath = REPOS_PATH_BIN . 'Swagger2MD.phar';
$phar     = new Phar($pharPath, 0, 'Swagger2MD.phar');

$phar->startBuffering();

$phar->buildFromIterator(new ArrayIterator(listDirectoryToPhar(SWG2MD_PATH_ROOT, '', array())));
$phar->buildFromIterator(new ArrayIterator(listDirectoryToPhar(dirname(SWG2MD_COMPOSER_INSTALL) . DIRECTORY_SEPARATOR . 'njuhel' . DIRECTORY_SEPARATOR . 'swagger-validator' . DIRECTORY_SEPARATOR . 'src', '/vendors/swagger-validator', array())));
$phar->buildFromIterator(new ArrayIterator(listDirectoryToPhar(dirname(SWG2MD_COMPOSER_INSTALL) . DIRECTORY_SEPARATOR . 'twig' . DIRECTORY_SEPARATOR . 'twig', '/vendors/twig', array())));
$phar->addFile(__DIR__ . DIRECTORY_SEPARATOR . 'TwigAutoload.php', '/vendors/twig/TwigAutoload.php');

$phar->setStub(createStub());

//$phar->setSignatureAlgorithm(Phar::OPENSSL, getPrivateKey($pharPath));

$phar->stopBuffering();
