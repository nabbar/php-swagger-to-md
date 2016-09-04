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
  * [Resource : Resource : Root](#resource--root)
    * [Operation : get /](#get-)
    * [Operation : post /](#post-)
    * [Operation : put /](#put-)
    * [Operation : get /{petId}](#get-petid)
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
| pet | body | object | yes | [parameters/body](#objectproperty_57cc4a5d914e0) | The pet JSON you want to post | 

* Example of request :
```json
HTTP 1.1 post http://petstore-api.herokuapp.com/pet/ 
Content-Type: application/json
Content-Length: 279
{
    "name": "nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at t",
    "birthday": 446357227
}
```

* <p name="objectproperty_57cc4a5d914e0">Object pet :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| name | string | elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim | 
| birthday | int32 | -458099048 | 




#### put /

* Request Parameters :
  * Content-Type Accepted : application/json, text/xml

| Name | Location | Type | Required | Definition | Description |  
| :---: | :---: | :---: | :---: | :---: | :--- |  
| pet | body | object | yes | [parameters/body](#objectproperty_57cc4a5d95608) | The pet JSON you want to post | 

* Example of request :
```json
HTTP 1.1 put http://petstore-api.herokuapp.com/pet/ 
Content-Type: application/json
Content-Length: 209
{
    "name": "eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus lu",
    "birthday": -2063282505
}
```

* <p name="objectproperty_57cc4a5d95608">Object pet :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| name | string | c et lorem eros. Suspendisse ege | 
| birthday | int32 | 1846538631 | 





#### get /{petId}

* Request Parameters :
  * Content-Type Accepted : application/json, text/xml

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| petId | path | string | yes | ID of the pet | Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricie | 

* Example of request :
```json
HTTP 1.1 get http://petstore-api.herokuapp.com/pet/Donec+consectetur+sed+ante+sit+amet+sagittis.+In+non+lectus+eu+nunc+interdum+laoreet+a+ut+dui.+Sed+eu+nulla+malesuada%2C+egestas+velit+id%2C+semper+felis.+Fusce+ac+dui+nisl.+Donec+ultricie 
```







---

## Table of contents
* Tags
* [Summary](#summary)
* [Resources](#resources)
  * [Resource : Resource : Root](#resource--root)
    * [Operation : get /](#get-)
    * [Operation : post /](#post-)
    * [Operation : put /](#put-)
    * [Operation : get /{petId}](#get-petid)
* [Table of contents](#table-of-contents)

