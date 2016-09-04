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
| pet | body | object | yes | [parameters/body](#objectproperty_57cc416398404) | The pet JSON you want to post | 

* Example of request :
```json
HTTP 1.1 post http://petstore-api.herokuapp.com/pet/ 
Content-Type: application/json
Content-Length: 260
{
    "name": "incidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque era",
    "birthday": 34290269
}
```

* <p name="objectproperty_57cc416398404">Object pet :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| name | string | erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendis | 
| birthday | int32 | -765012338 | 




#### put /

* Request Parameters :
  * Content-Type Accepted : application/json, text/xml

| Name | Location | Type | Required | Definition | Description |  
| :---: | :---: | :---: | :---: | :---: | :--- |  
| pet | body | object | yes | [parameters/body](#objectproperty_57cc41639c73f) | The pet JSON you want to post | 

* Example of request :
```json
HTTP 1.1 put http://petstore-api.herokuapp.com/pet/ 
Content-Type: application/json
Content-Length: 175
{
    "name": "pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, fini",
    "birthday": -1874708052
}
```

* <p name="objectproperty_57cc41639c73f">Object pet :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| name | string | llente | 
| birthday | int32 | 1905029215 | 





#### get /{petId}

* Request Parameters :
  * Content-Type Accepted : application/json, text/xml

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| petId | path | string | yes | ID of the pet | is nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec mol | 

* Example of request :
```json
HTTP 1.1 get http://petstore-api.herokuapp.com/pet/is+nec%2C+tempus+ac+ipsum.+Ut+molestie+aliquet+est%2C+posuere+tincidunt+elit.+Etiam+convallis+eu+ligula+non+consequat.+Pellentesque+elit+libero%2C+faucibus+luctus+ante+nec%2C+volutpat+dictum+neque.+Donec+mol 
```







---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

