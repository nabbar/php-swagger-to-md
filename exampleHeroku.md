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
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| limit | query | integer |  no | Value : 11 <= x <= 10000 |  |  |  | 11 |  | number of pets to return |

* Example of request :
```json
HTTP 1.1 get http://petstore-api.herokuapp.com/pet/?limit=11 
```



#### post /

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| body | body | object |  no |  |  |  | [#/paths///post/parameters/0](#testtoto) |  |  | The pet JSON you want to post |

* Example of request :
```json
HTTP 1.1 post http://petstore-api.herokuapp.com/pet/ 
Content-Type: application/json
Content-Length: 270
{
    "name": ", vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec c",
    "birthday": 2012520269
}
```



#### put /

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| body | body | object |  no |  |  |  | [#/paths///put/parameters/0](#testtoto) |  |  | The pet JSON you want to post |

* Example of request :
```json
HTTP 1.1 put http://petstore-api.herokuapp.com/pet/ 
Content-Type: application/json
Content-Length: 256
{
    "name": ", iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Se",
    "birthday": -9254645
}
```




#### get /{petId}

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| petId | path | string |  no |  |  |  |  |  |  | ID of the pet |

* Example of request :
```json
HTTP 1.1 get http://petstore-api.herokuapp.com/pet/t%2C+consectetur+adipiscing+elit.+Suspendisse+justo+tur 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

