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
| Name | Location | Type | Validation | Default | Description |  
| :---: | :---: | :---: | :---: | :---: | :---: |  
| limit | query | integer | Value : 11 <= x <= 10000 | 11 | number of pets to return | 

* Example of request :
```json
HTTP 1.1 get http://petstore-api.herokuapp.com/pet/?limit=11 
```



#### post /

* Request Parameters :
| Name | Location | Type | Required | Definition | Description |  
| :---: | :---: | :---: | :---: | :---: | :---: |  
| body | body | object | yes | [#/paths///post/parameters/0](#testtoto) | The pet JSON you want to post | 

* Example of request :
```json
HTTP 1.1 post http://petstore-api.herokuapp.com/pet/ 
Content-Type: application/json
Content-Length: 295
{
    "name": "ur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor ac",
    "birthday": 1378617018
}
```



#### put /

* Request Parameters :
| Name | Location | Type | Required | Definition | Description |  
| :---: | :---: | :---: | :---: | :---: | :---: |  
| body | body | object | yes | [#/paths///put/parameters/0](#testtoto) | The pet JSON you want to post | 

* Example of request :
```json
HTTP 1.1 put http://petstore-api.herokuapp.com/pet/ 
Content-Type: application/json
Content-Length: 297
{
    "name": " Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada",
    "birthday": 1280945155
}
```




#### get /{petId}

* Request Parameters :
| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :---: |  
| petId | path | string | yes | ID of the pet | 

* Example of request :
```json
HTTP 1.1 get http://petstore-api.herokuapp.com/pet/a+facilisis+sapien+finibus+at.+Nullam+finibus+urna+v 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

