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
  * Content-Type Accepted : application/json, text/xml

* Request Parameters :

| Name | Location | Type | Validation | Default | Description | Example |  
| :---: | :---: | :---: | :---: | :---: | :--- | :--- |  
| limit | query | integer | 11 <= Value <= 10000 | 11 | number of pets to return | 11 | 


* Example of request :
```json
HTTP 1.1 get http://petstore-api.herokuapp.com/pet/?limit=11 
```



#### post /

* Request Parameters :
  * Content-Type Accepted : application/json, text/xml

* Request Parameters :

| Name | Location | Type | Required | Definition | Description |  
| :---: | :---: | :---: | :---: | :---: | :--- |  
| body | body | object | yes | [#/paths///post/parameters/0](#toto) | The pet JSON you want to post | 


* Example of request :
```json
HTTP 1.1 post http://petstore-api.herokuapp.com/pet/ 
Content-Type: application/json
Content-Length: 120
{
    "name": "uat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum ",
    "birthday": -1402081525
}
```



#### put /

* Request Parameters :
  * Content-Type Accepted : application/json, text/xml

* Request Parameters :

| Name | Location | Type | Required | Definition | Description |  
| :---: | :---: | :---: | :---: | :---: | :--- |  
| body | body | object | yes | [#/paths///put/parameters/0](#toto) | The pet JSON you want to post | 


* Example of request :
```json
HTTP 1.1 put http://petstore-api.herokuapp.com/pet/ 
Content-Type: application/json
Content-Length: 190
{
    "name": "g elit. Integer ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Du",
    "birthday": -1097005581
}
```




#### get /{petId}

* Request Parameters :
  * Content-Type Accepted : application/json, text/xml

* Request Parameters :

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| petId | path | string | yes | ID of the pet | dui sit a | 


* Example of request :
```json
HTTP 1.1 get http://petstore-api.herokuapp.com/pet/dui+sit+a 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

