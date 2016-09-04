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
| pet | body | object | yes | [parameters/body](#objectproperty_57cc348532ef9) | The pet JSON you want to post | 


* Example of request :
```json
HTTP 1.1 post http://petstore-api.herokuapp.com/pet/ 
Content-Type: application/json
Content-Length: 75
{
    "name": "ue elit libero, faucibus luctu",
    "birthday": 402725998
}
```


* <p name="objectproperty_57cc348532ef9">Object pet</p> :

| Name | Location | Type |  
| :---: | :---: | :---: |  
| name |  | string | 
| birthday |  | int32 | 




#### put /

* Request Parameters :
  * Content-Type Accepted : application/json, text/xml


| Name | Location | Type | Required | Definition | Description |  
| :---: | :---: | :---: | :---: | :---: | :--- |  
| pet | body | object | yes | [parameters/body](#objectproperty_57cc34853704a) | The pet JSON you want to post | 


* Example of request :
```json
HTTP 1.1 put http://petstore-api.herokuapp.com/pet/ 
Content-Type: application/json
Content-Length: 95
{
    "name": "nec tellus accumsan tincidunt. Aliquam enim dui, ",
    "birthday": 1001179306
}
```


* <p name="objectproperty_57cc34853704a">Object pet</p> :

| Name | Location | Type |  
| :---: | :---: | :---: |  
| name |  | string | 
| birthday |  | int32 | 





#### get /{petId}

* Request Parameters :
  * Content-Type Accepted : application/json, text/xml


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| petId | path | string | yes | ID of the pet | er ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu | 


* Example of request :
```json
HTTP 1.1 get http://petstore-api.herokuapp.com/pet/er+ipsum+sapien%2C+bibendum+at+placerat+sit+amet%2C+volutpat+sed+lacus.+Nulla+justo+arcu 
```








---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

