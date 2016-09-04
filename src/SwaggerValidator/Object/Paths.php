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
 * Description of Paths
 *
 * @author Nicolas JUHEL<swaggervalidator@nabbar.com>
 * @version 1.0.0
 */
class Paths extends \SwaggerValidator\Object\Paths
{

    /**
     * Return the array structured by resource, path, method with all name and anchor
     * @param \SwaggerValidator\Common\Context $context
     * @return array
     */
    public function getSummary(\SwaggerValidator\Common\Context $context)
    {
        $method = __FUNCTION__;

        $summary  = array();
        $keyPaths = \SwaggerValidator\Common\FactorySwagger::KEY_PATHS;
        $keyTags  = \SwaggerValidator\Common\FactorySwagger::KEY_TAGS;

        foreach ($this->keys() as $key) {
            if (substr($key, 0, 1) != '/' || !is_object($this->$key) || !($this->$key instanceof \SwaggerValidator\Object\PathItem)) {
                continue;
            }

            list($resources, $isResource) = $this->getResourceForKey($key);

            if (!array_key_exists($resources, $summary)) {
                $string = \Swagger2md\Swagger2md::getInstance()->renderTemplate('StringResource', array('string' => $resources));

                $summary[$resources] = array(
                    'name'  => $string,
                    'link'  => \Swagger2md\Swagger2md::makeAnchor($string),
                    'paths' => array(),
                );
            }

            $string = \Swagger2md\Swagger2md::getInstance()->renderTemplate('StringPath', array('string' => $key));

            $summary[$resources]['paths'][$key] = array(
                'name'    => $string,
                'link'    => \Swagger2md\Swagger2md::makeAnchor($string, $isResource),
                'methods' => $this->$key->$method($context->setDataPath($key)),
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
        $method = __FUNCTION__;

        foreach ($this->keys() as $key) {
            if (substr($key, 0, 1) != '/' || !is_object($this->$key) || !($this->$key instanceof \SwaggerValidator\Object\PathItem)) {
                continue;
            }

            $this->$key->$method($context->setDataPath($key), $tags);
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
        $tplResources = array();

        foreach ($this->keys() as $key) {
            if (substr($key, 0, 1) != '/' || !is_object($this->$key) || !($this->$key instanceof \SwaggerValidator\Object\PathItem)) {
                continue;
            }

            list($resource, $isResource) = $this->getResourceForKey($key);

            if (!array_key_exists($resource, $tplResources)) {
                $string = \Swagger2md\Swagger2md::getInstance()->renderTemplate('StringResource', array('string' => $resource));

                $tplResources[$resource] = array(
                    'name'  => $string,
                    'paths' => array(),
                );
            }

            $string = \Swagger2md\Swagger2md::getInstance()->renderTemplate('StringPath', array('string' => $key));

            $tplResources[$resource]['paths'][$key] = array(
                'name' => $string,
                'item' => $this->$key->$method($context->setDataPath($key)->setRoutePath($key), $generalItems),
            );
        }

        $tpl = explode('\\', trim(__CLASS__, "\\"));
        array_shift($tpl);
        array_shift($tpl);
        $tpl = implode('', array_map('ucfirst', $tpl));

        \Swagger2md\Swagger2md::printOutV('Rendering this template : ' . $tpl);
        return \Swagger2md\Swagger2md::getInstance()->renderTemplate($tpl, array(
                    'resources' => $tplResources,
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
