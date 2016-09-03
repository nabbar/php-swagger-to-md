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

| Name |  |  |  
| --- | --- | --- |  
| limit | query | integer | 

* Example of request :
```json
HTTP 1.1 get http://petstore-api.herokuapp.com/pet/?limit=11 
```



#### post /

* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| body | body | object | 

* Example of request :
```json
HTTP 1.1 post http://petstore-api.herokuapp.com/pet/ 
Content-Type: application/json
Content-Length: 54
{
    "name": " auctor ",
    "birthday": -623418899
}
```



#### put /

* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| body | body | object | 

* Example of request :
```json
HTTP 1.1 put http://petstore-api.herokuapp.com/pet/ 
Content-Type: application/json
Content-Length: 151
{
    "name": "dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula qu",
    "birthday": -832785598
}
```




#### get /{petId}

* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| petId | path | string | 

* Example of request :
```json
HTTP 1.1 get http://petstore-api.herokuapp.com/pet/s+vehicula+ex+lorem%2C+ut+ornare+purus+ultrices+nec.+Vestibulum+elementum+felis+sit+amet+ipsum+euismod+ullamcorper.+Phasellus+sit+amet+vestibulum+quam.+Morbi+tincidunt+pretium+sodales.+Etiam+dignissim+risus+non+felis+scelerisque+aliquet.+Phasellus+ 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

