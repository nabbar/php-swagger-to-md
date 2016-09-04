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
  * [Resource : Resource : Root](#resourceroot)
    * [Operation : get /](#get)
    * [Operation : post /](#post)
    * [Operation : put /](#put)
    * [Operation : get /{petId}](#getpetid)
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
| pet | body | object | yes | [parameters/body](#objectproperty_57cc40e599c3e) | The pet JSON you want to post | 

* Example of request :
```json
HTTP 1.1 post http://petstore-api.herokuapp.com/pet/ 
Content-Type: application/json
Content-Length: 149
{
    "name": "llicitudin varius purus, nec condimentum tellus sagittis at. Nullam vel metus ac quam gravida pellentes",
    "birthday": 1229835012
}
```

* <p name="objectproperty_57cc40e599c3e">Object pet :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| name | string | dio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed an | 
| birthday | int32 | -819230604 | 




#### put /

* Request Parameters :
  * Content-Type Accepted : application/json, text/xml

| Name | Location | Type | Required | Definition | Description |  
| :---: | :---: | :---: | :---: | :---: | :--- |  
| pet | body | object | yes | [parameters/body](#objectproperty_57cc40e59df0c) | The pet JSON you want to post | 

* Example of request :
```json
HTTP 1.1 put http://petstore-api.herokuapp.com/pet/ 
Content-Type: application/json
Content-Length: 211
{
    "name": "bendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum",
    "birthday": -250505513
}
```

* <p name="objectproperty_57cc40e59df0c">Object pet :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| name | string | amet | 
| birthday | int32 | -1886316526 | 





#### get /{petId}

* Request Parameters :
  * Content-Type Accepted : application/json, text/xml

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| petId | path | string | yes | ID of the pet |  sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros m | 

* Example of request :
```json
HTTP 1.1 get http://petstore-api.herokuapp.com/pet/+sodales.+Etiam+dignissim+risus+non+felis+scelerisque+aliquet.+Phasellus+faucibus+urna+arcu%2C+et+dignissim+augue+interdum+sed.+Vestibulum+eget+luctus+metus%2C+eu+bibendum+orci.+Sed+eros+m 
```







---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

