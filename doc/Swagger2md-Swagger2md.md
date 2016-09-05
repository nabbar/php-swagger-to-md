Swagger2md\Swagger2md
===============

Description of Swagger2md




* Class name: Swagger2md
* Namespace: Swagger2md



Constants
----------


### version

    const version = '1.0.0'





Properties
----------


### $swagger

    protected \Swagger2md\SwaggerValidator\Object\Swagger $swagger





* Visibility: **protected**


### $verboseLevel

    protected integer $verboseLevel





* Visibility: **protected**
* This property is **static**.


### $twigTpl

    protected \Twig_Environment $twigTpl





* Visibility: **protected**


### $tempFolder

    protected string $tempFolder





* Visibility: **protected**


### $templateFolder

    protected string $templateFolder





* Visibility: **protected**


### $output

    protected string $output





* Visibility: **protected**


### $instance

    private \Swagger2md\Swagger2md $instance





* Visibility: **private**
* This property is **static**.


### $suffixObject

    protected array $suffixObject





* Visibility: **protected**


Methods
-------


### __construct

    mixed Swagger2md\Swagger2md::__construct()

Private construct for singleton



* Visibility: **private**




### loadSwaggerFile

    mixed Swagger2md\Swagger2md::loadSwaggerFile($swaggerFile)





* Visibility: **public**


#### Arguments
* $swaggerFile **mixed**



### getInstance

    \Swagger2md\Swagger2md Swagger2md\Swagger2md::getInstance()

get the singleton of this object



* Visibility: **public**
* This method is **static**.




### setInstance

    mixed Swagger2md\Swagger2md::setInstance(\Swagger2md\Swagger2md $instance)

replace the singleton of this object



* Visibility: **public**
* This method is **static**.


#### Arguments
* $instance **[Swagger2md\Swagger2md](Swagger2md-Swagger2md.md)**



### pruneInstance

    mixed Swagger2md\Swagger2md::pruneInstance()

prune the singleton of this object



* Visibility: **public**
* This method is **static**.




### markdown

    mixed Swagger2md\Swagger2md::markdown()





* Visibility: **public**




### printError

    mixed Swagger2md\Swagger2md::printError($message)





* Visibility: **public**
* This method is **static**.


#### Arguments
* $message **mixed**



### printOut

    mixed Swagger2md\Swagger2md::printOut($message)





* Visibility: **public**
* This method is **static**.


#### Arguments
* $message **mixed**



### printOutV

    mixed Swagger2md\Swagger2md::printOutV($message)





* Visibility: **public**
* This method is **static**.


#### Arguments
* $message **mixed**



### printOutVV

    mixed Swagger2md\Swagger2md::printOutVV($message)





* Visibility: **public**
* This method is **static**.


#### Arguments
* $message **mixed**



### printOutVVV

    mixed Swagger2md\Swagger2md::printOutVVV($message)





* Visibility: **public**
* This method is **static**.


#### Arguments
* $message **mixed**



### exitCode

    mixed Swagger2md\Swagger2md::exitCode($code)





* Visibility: **public**


#### Arguments
* $code **mixed**



### showVersion

    mixed Swagger2md\Swagger2md::showVersion()





* Visibility: **public**




### showUsage

    mixed Swagger2md\Swagger2md::showUsage()





* Visibility: **public**




### showHelp

    mixed Swagger2md\Swagger2md::showHelp()





* Visibility: **public**




### checkTemplates

    mixed Swagger2md\Swagger2md::checkTemplates($path)





* Visibility: **public**


#### Arguments
* $path **mixed**



### makeAnchor

    mixed Swagger2md\Swagger2md::makeAnchor($title, $suffix)





* Visibility: **public**
* This method is **static**.


#### Arguments
* $title **mixed**
* $suffix **mixed**



### extractStored

    mixed Swagger2md\Swagger2md::extractStored()





* Visibility: **public**




### renderTable

    mixed Swagger2md\Swagger2md::renderTable($name, $anchor, $listKey, $colonsFile, $template, $vars, $store)





* Visibility: **public**


#### Arguments
* $name **mixed**
* $anchor **mixed**
* $listKey **mixed**
* $colonsFile **mixed**
* $template **mixed**
* $vars **mixed**
* $store **mixed**



### checkAndMakeObjectFolder

    mixed Swagger2md\Swagger2md::checkAndMakeObjectFolder()





* Visibility: **private**




### getColonArray

    mixed Swagger2md\Swagger2md::getColonArray($fileName)





* Visibility: **public**


#### Arguments
* $fileName **mixed**



### renderTemplate

    mixed Swagger2md\Swagger2md::renderTemplate($template, $vars)





* Visibility: **public**


#### Arguments
* $template **mixed**
* $vars **mixed**


