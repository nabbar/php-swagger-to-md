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


| Name | Location | Type | Required | Definition | Description |  
| :---: | :---: | :---: | :---: | :---: | :--- |  
| pet | body | object | yes | [parameters/body](#objectproperty_57cc36172d9ad) | The pet JSON you want to post | 


* Example of request :
```json
HTTP 1.1 post http://petstore-api.herokuapp.com/pet/ 
Content-Type: application/json
Content-Length: 72
{
    "name": "t, molestie pretium tortor.",
    "birthday": 313810406
}
```


* <p name="objectproperty_57cc36172d9ad">Object pet :</p> 
| Name | Type |  
| :---: | :---: |  
| name | string | 
| birthday | int32 | 




#### put /

* Request Parameters :
  * Content-Type Accepted : application/json, text/xml


| Name | Location | Type | Required | Definition | Description |  
| :---: | :---: | :---: | :---: | :---: | :--- |  
| pet | body | object | yes | [parameters/body](#objectproperty_57cc361731ab5) | The pet JSON you want to post | 


* Example of request :
```json
HTTP 1.1 put http://petstore-api.herokuapp.com/pet/ 
Content-Type: application/json
Content-Length: 95
{
    "name": "ucibus luctus ante nec, volutpat dictum neque. Do",
    "birthday": 1926069614
}
```


* <p name="objectproperty_57cc361731ab5">Object pet :</p> 
| Name | Type |  
| :---: | :---: |  
| name | string | 
| birthday | int32 | 





#### get /{petId}

* Request Parameters :
  * Content-Type Accepted : application/json, text/xml


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| petId | path | string | yes | ID of the pet |  molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringil | 


* Example of request :
```json
HTTP 1.1 get http://petstore-api.herokuapp.com/pet/+molestie+pretium+tortor.+Praesent+interdum+fringilla+orci%2C+gravida+ornare+nibh+sollicitudin+et.+Curabitur+pulvinar+metus+massa%2C+malesuada+facilisis+sapien+finibus+at.+Nullam+finibus+urna+vel+auctor+fringil 
```








---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

