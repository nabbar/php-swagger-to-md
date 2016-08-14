# php-swagger-to-md
Transform a swagger (multifile / monofile) into md documents based on templates

[![Dependency Status](https://gemnasium.com/badges/github.com/njuhel/php-swagger-to-md.svg)](https://gemnasium.com/github.com/njuhel/php-swagger-to-md)  ~  [![Code Climate](https://codeclimate.com/github/njuhel/php-swagger-to-md/badges/gpa.svg)](https://codeclimate.com/github/njuhel/php-swagger-to-md)  ~  [![Test Coverage](https://codeclimate.com/github/njuhel/SwaggerValidator-PHP/badges/coverage.svg)](https://codeclimate.com/github/njuhel/php-swagger-to-md/coverage)  ~  [![Travis branch](https://img.shields.io/travis/njuhel/php-swagger-to-md/master.svg?maxAge=600&label=PHP%205.5%20--7.0)](https://travis-ci.org/njuhel/php-swagger-to-md)

# **_PHP_ Swagger To Markdown (md)**

A Swagger(OpenAPI) transformation to on markdown file as helper based on the PHP Swagger Validator.
Having a md doc file based on a swagger file is interesting to having plain file to explain what is need for each exposed resources

Swagger is old name of [OpenAPI Projet](https://openapis.org/) and who manage the [OAI Specification](https://github.com/OAI/OpenAPI-Specification/tree/master/schemas/)


## **Need to do**
  - realse a first version

## **Compatibility**
  **_Help us to fix error with compatibilities_**
  - scope PHP 5.5 to PHP 7.0

  
## **Installation Guide**
- Install into a git repository as submodule : 
```sh
git submodule init
git submodule add --branch v1.0.x http://srv01.https://github.com/njuhel/php-swagger-to-md build/lib/swagger-to-md
git submodule update
```

- Install by cloning git : 
```sh
git clone --branch v1.0.x https://github.com/njuhel/php-swagger-to-md swagger-to-md
```

- Install with composer (adding this in composer.json): 
```json
    "require": {
        "njuhel/swagger-to-md":">=1.0.0"
    },
```

- Install with phar : 
```sh
wget https://github.com/njuhel/php-swagger-to-md/raw/v1.0.x/bin/Swagger-to-md.phar 
```

  
## **Example & Docs**
 - **Examples** : [Example.php](https://github.com/njuhel/php-swagger-to-md/blob/v1.0.x/src/Swagger-to-md/Example.php) 
 - **Documentation** : [generated](https://github.com/njuhel/php-swagger-to-md/blob/v1.0.x/doc/README.md)

