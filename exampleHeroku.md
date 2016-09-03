# PetStore on Heroku
* Version : 1.0.0
: **This example has a working backend hosted in Heroku**

You can try all HTTP operation described in this Swagger spec.

Find source code of this API [here](https://github.com/mohsen1/petstore-api)



---

### Global Definition
| Attribute | Value |
| :-------: | :---: |
| Schemes | http, https |
| Hostname | petstore-api.herokuapp.com |
| Root Path | /pet |
| API Base Url | http://petstore-api.herokuapp.com/pet https://petstore-api.herokuapp.com/pet |
| Content-Type Accepted | application/json, text/xml |
| Content-Type Return | application/json, text/html |

---

## Summary 
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)


---

## Resources 
### Resource : Root
#### get /

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| limit | query | integer |  no | Value : 11 <= x <= 10000 |  |  |  | 11 |  | number of pets to return |

* Example of request :
```json
HTTP 1.1 get http://petstore-api.herokuapp.com/pet/?limit=11 
```



#### post /

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| body | body | object |  no |  |  |  | [#/paths///post/parameters/0](#testtoto) |  |  | The pet JSON you want to post |

* Example of request :
```json
HTTP 1.1 post http://petstore-api.herokuapp.com/pet/ 
Content-Type: application/json
Content-Length: 84
{
    "name": "e vulputate sapien at turpis molestie ",
    "birthday": 1461000101
}
```



#### put /

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| body | body | object |  no |  |  |  | [#/paths///put/parameters/0](#testtoto) |  |  | The pet JSON you want to post |

* Example of request :
```json
HTTP 1.1 put http://petstore-api.herokuapp.com/pet/ 
Content-Type: application/json
Content-Length: 237
{
    "name": "erdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor bl",
    "birthday": -463604061
}
```




#### get /{petId}

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| petId | path | string |  no |  |  |  |  |  |  | ID of the pet |

* Example of request :
```json
HTTP 1.1 get http://petstore-api.herokuapp.com/pet/lus+faucibus+urna+arcu%2C+et+dignissim+augue+interdum+sed.+Vestibulum+eget+luctus+metus%2C+e 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

