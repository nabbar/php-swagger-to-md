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

namespace Swagger2md\SwaggerValidator\Object;

/**
 * Description of PathItem
 *
 * @author Nicolas JUHEL<swaggervalidator@nabbar.com>
 * @version 1.0.0
 */
class PathItem extends \SwaggerValidator\Object\PathItem
{

    /**
     * Return the array structured by resource, path, method with all name and anchor
     * @param \SwaggerValidator\Common\Context $context
     * @return array
     */
    public function getSummary(\SwaggerValidator\Common\Context $context)
    {
        $summary = array();

        foreach ($this->keys() as $key) {
            if (!is_object($this->$key) || !($this->$key instanceof \SwaggerValidator\Object\Operation)) {
                continue;
            }

            $string        = \Swagger2md\Swagger2md::getInstance()->renderTemplate('StringMethod', array('string' => $key));
            $summary[$key] = array(
                'name' => $string,
                'link' => \Swagger2md\Swagger2md::makeAnchor($string),
            );
        }

        \Swagger2md\Swagger2md::printOutVV('Summary rendered for path :' . $context->getDataPath());
        return $summary;
    }

    /**
     * Return the array structured by tags, path, method with all name and anchor
     * @param \SwaggerValidator\Common\Context $context
     * @param array $tags
     * @return array
     */
    public function getTags(\SwaggerValidator\Common\Context $context, &$tags)
    {
        $method  = __FUNCTION__;
        $keyTags = \SwaggerValidator\Common\FactorySwagger::KEY_TAGS;
        $curPath = $context->getLastDataPath();


        $string  = \Swagger2md\Swagger2md::getInstance()->renderTemplate('StringPath', array('string' => $curPath));
        $pathBlk = array(
            'name'    => $string,
            'link'    => \Swagger2md\Swagger2md::makeAnchor($string),
            'methods' => array()
        );

        foreach ($this->keys() as $key) {
            if (substr($key, 0, 1) != '/' || !is_object($this->$key) || !($this->$key instanceof \SwaggerValidator\Object\Operation)) {
                continue;
            }

            if (!$this->$key->has($keyTags)) {
                continue;
            }

            $opeTag = $this->$key->$keyTags;

            if (!array_key_exists($opeTag, $tags)) {
                continue;
            }

            if (!array_key_exists('paths', $tags[$opeTag])) {
                $tags[$opeTag]['paths'] = array();
            }

            if (!array_key_exists($curPath, $tags[$opeTag]['paths'])) {
                $tags[$opeTag]['paths'][$curPath] = $pathBlk;
            }

            $string = \Swagger2md\Swagger2md::getInstance()->renderTemplate('StringMethod', array('string' => $key));

            $tags[$opeTag]['paths'][$curPath]['methods'][$key] = array(
                'name' => $string,
                'link' => \Swagger2md\Swagger2md::makeAnchor($string),
            );
        }

        \Swagger2md\Swagger2md::printOutVV('Tags rendered for path :' . $context->getDataPath());
        return $tags;
    }

    /**
     *
     * @param \SwaggerValidator\Common\Context $context
     * @param array $generalItems
     */
    public function markdown(\SwaggerValidator\Common\Context $context, $generalItems)
    {
        $method       = __FUNCTION__;
        $generalItems = $this->getMethodGeneric($context, $method, $generalItems);
        $tplOperation = array();

        foreach ($this->keys() as $key) {
            if (!is_object($this->$key) || !($this->$key instanceof \SwaggerValidator\Object\Operation)) {
                \Swagger2md\Swagger2md::printOutVV('Skip PathItem Name : ' . $key);
                continue;
            }

            $string = \Swagger2md\Swagger2md::getInstance()->renderTemplate('StringMethod', array(
                'route'  => $context->getRoutePath(),
                'path'   => $context->getDataPath(),
                'method' => $key
            ));

            $tplOperation[$key] = array(
                'name' => $string,
                'item' => $this->$key->$method($context->setDataPath($key)->setMethod($key), $generalItems),
            );
        }

        $tpl = explode('\\', trim(__CLASS__, "\\"));
        array_shift($tpl);
        array_shift($tpl);
        $tpl = implode('', array_map('ucfirst', $tpl));

        \Swagger2md\Swagger2md::printOutV('Rendering this template : ' . $tpl);
        return \Swagger2md\Swagger2md::getInstance()->renderTemplate($tpl, array(
                    'operations' => $tplOperation,
        ));
    }

    protected function getResourceForKey($key)
    {
        $resources = explode('/', trim($key, '/'));

        if (count($resources) < 2) {
            $isResource = true;
        }
        else {
            $isResource = false;
        }

        $resources = array_shift($resources);

        if (empty($resources) || substr($resources, 0, 1) == '{') {
            $resources = 'Root';
        }

        return array($resources, $isResource);
    }

}
