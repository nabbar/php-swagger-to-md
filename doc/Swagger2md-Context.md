Swagger2md\Context
===============

Description of SwaggerCommonContext




* Class name: Context
* Namespace: Swagger2md
* Parent class: SwaggerValidator\Common\Context







Methods
-------


### logDebug

    mixed Swagger2md\Context::logDebug(string $message, string $method, \Swagger2md\TypeInteger $line)

Used to customizing log and more when a debug is send



* Visibility: **public**
* This method is **static**.


#### Arguments
* $message **string**
* $method **string**
* $line **Swagger2md\TypeInteger**



### logValidationError

    mixed Swagger2md\Context::logValidationError(\Swagger2md\const $validationType, $messageException, $method, $line)

Used to customizing log and more when a validation error is occured



* Visibility: **public**


#### Arguments
* $validationType **Swagger2md\const**
* $messageException **mixed**
* $method **mixed**
* $line **mixed**


