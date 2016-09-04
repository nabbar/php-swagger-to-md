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
| body | body | object | yes | [#/paths///post/parameters/0](#toto) | The pet JSON you want to post | 


* Example of request :
```json
HTTP 1.1 post http://petstore-api.herokuapp.com/pet/ 
Content-Type: application/json
Content-Length: 234
{
    "name": "ue vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices ",
    "birthday": -2016058399
}
```



#### put /

* Request Parameters :
  * Content-Type Accepted : application/json, text/xml


| Name | Location | Type | Required | Definition | Description |  
| :---: | :---: | :---: | :---: | :---: | :--- |  
| body | body | object | yes | [#/paths///put/parameters/0](#toto) | The pet JSON you want to post | 


* Example of request :
```json
HTTP 1.1 put http://petstore-api.herokuapp.com/pet/ 
Content-Type: application/json
Content-Length: 54
{
    "name": "arius l",
    "birthday": -1138391945
}
```




#### get /{petId}

* Request Parameters :
  * Content-Type Accepted : application/json, text/xml


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| petId | path | string | yes | ID of the pet | olestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nib | 


* Example of request :
```json
HTTP 1.1 get http://petstore-api.herokuapp.com/pet/olestie+pretium+tortor.+Praesent+interdum+fringilla+orci%2C+gravida+ornare+nib 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

