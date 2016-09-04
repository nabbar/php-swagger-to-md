# Swagger Petstore
* Version : 1.0.0
: This is a sample server Petstore server.

[Learn about Swagger](http://swagger.io) or join the IRC channel `#swagger` on irc.freenode.net.

For this sample, you can use the api key `special-key` to test the authorization filters

* Terms of service : http://helloreverb.com/terms/
* License : Apache 2.0  http://www.apache.org/licenses/LICENSE-2.0.html 
* Contact apiteam@swagger.io : 



---

### Global Definition
| Attribute | Value |
| :-------: | :---: |
| Schemes | http |
| Hostname | petstore.swagger.io |
| Root Path | /v2 |
| API Base Url | http://petstore.swagger.io/v2 |
| Content-Type Accepted |  |
| Content-Type Return |  |

---

## Summary 
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)


---

## Resources 
### Resource : pets
#### post /pets

* Request Parameters :
  * Content-Type Accepted : application/json, application/xml


| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#toto) | Pet object that needs to be added to the store | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 577
{
    "id": 8860526825957228544,
    "category": {
        "id": -5181354580599898112,
        "name": ". Donec ultrici"
    },
    "name": "doggie",
    "photoUrls": [
        " Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. A"
    ],
    "tags": [
        {
            "id": -5330187322098974720,
            "name": " Donec quis"
        }
    ],
    "status": "o. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus "
}
```


* <p name="objectproperty_57cc2c1724695">Object category</p> :

| Name | Location | Type |  
| :---: | :---: | :---: |  
| id |  | int64 | 
| name |  | string | 

* <p name="schema_57cc2c172863b">Object photoUrls/items/schema</p> :

| Name | Location | Type |  
| :---: | :---: | :---: |  
|  |  | string | 

* <p name="schema_57cc2c172d3f5">Object tags/items/schema</p> :

| Name | Location | Type |  
| :---: | :---: | :---: |  
| id |  | int64 | 
| name |  | string | 




#### put /pets

* Request Parameters :
  * Content-Type Accepted : application/json, application/xml


| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#toto) | Pet object that needs to be added to the store | 


* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 1114
{
    "id": -3415682847925600256,
    "category": {
        "id": 460152681445457920,
        "name": "us et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor"
    },
    "name": "doggie",
    "photoUrls": [
        "vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimen"
    ],
    "tags": [
        {
            "id": 4448559690191732736,
            "name": "s, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestib"
        }
    ],
    "status": "r. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvin"
}
```


* <p name="objectproperty_57cc2c17357db">Object category</p> :

| Name | Location | Type |  
| :---: | :---: | :---: |  
| id |  | int64 | 
| name |  | string | 

* <p name="schema_57cc2c1735c9f">Object photoUrls/items/schema</p> :

| Name | Location | Type |  
| :---: | :---: | :---: |  
|  |  | string | 

* <p name="schema_57cc2c1736182">Object tags/items/schema</p> :

| Name | Location | Type |  
| :---: | :---: | :---: |  
| id |  | int64 | 
| name |  | string | 





#### get /pets/findByStatus
Multiple status values can be provided with comma seperated strings
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| status | query | array | [#/paths//pets/findByStatus/get/parameters/0](#testtoto) | Status values that need to be considered for filter | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByStatus 
```


* <p name="schema_57cc2c1737ecd">Object 0/items/schema</p> :

| Name | Location | Type |  
| :---: | :---: | :---: |  
|  |  | string | 





#### get /pets/findByTags
Muliple tags can be provided with comma seperated strings. Use tag1, tag2, tag3 for testing.
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| tags | query | array | [#/paths//pets/findByTags/get/parameters/0](#testtoto) | Tags to filter by | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByTags 
```


* <p name="schema_57cc2c17389ec">Object 0/items/schema</p> :

| Name | Location | Type |  
| :---: | :---: | :---: |  
|  |  | string | 





#### get /pets/{petId}
Returns a pet when ID < 10.  ID > 10 or nonintegers will simulate API error conditions
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| petId | path | int64 | yes | ID of pet that needs to be fetched | -867147944237727744 | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/-867147944237727744 
```





#### post /pets/{petId}

* Request Parameters :
  * Content-Type Accepted : application/x-www-form-urlencoded


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| petId | path | string | yes | ID of pet that needs to be updated | d, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed mal | 
| name | formData | string | yes | Updated name of the pet |  Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam.  | 
| status | formData | string | yes | Updated status of the pet |  nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets/d%2C+dapibus+vel+elit.+Sed+efficitur%2C+mi+sit+amet+fermentum+ultricies%2C+felis+felis+aliquam+enim%2C+id+feugiat+magna+elit+in+sapien.+Sed+mal 
Content-Type: multipart/form-data, boundary=57cc2c1739de5
Content-Length: 455
--57cc2c1739de5
content-disposition: form-data; name="name"

 Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. 
--57cc2c1739de5
content-disposition: form-data; name="status"

 nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum
```





#### delete /pets/{petId}

* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| api_key | header | string | yes |  | sis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, l | 
| petId | path | int64 | yes | Pet id to delete | 6733414706058362880 | 


* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/6733414706058362880 
api_key: sis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, l
```






### Resource : stores
#### post /stores/order

* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#toto) | order placed for purchasing the pet | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/stores/order 
Content-Type: 
Content-Length: 266
{
    "id": -5759854136698863616,
    "petId": -8420174188559466496,
    "quantity": 1414611072,
    "shipDate": "2016-09-04T14:13:43+00:00",
    "status": "bulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisqu",
    "complete": 1
}
```






#### get /stores/order/{orderId}
For valid response try integer IDs with value <= 5 or > 10. Other values will generated exceptions
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| orderId | path | string | yes | ID of pet that needs to be fetched | massa egestas, sed mollis est molestie.  | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/massa+egestas%2C+sed+mollis+est+molestie.+ 
```





#### delete /stores/order/{orderId}
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| orderId | path | string | yes | ID of the order that needs to be deleted | etur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis a | 


* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/etur+adipiscing+elit.+Suspendisse+justo+turpis%2C+lacinia+id+tempor+sed%2C+dapibus+vel+elit.+Sed+efficitur%2C+mi+sit+amet+fermentum+ultricies%2C+felis+felis+a 
```






### Resource : users
#### post /users
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#toto) | Created user object | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users 
Content-Type: 
Content-Length: 650
{
    "id": 2293998198080929792,
    "username": " facilisi",
    "firstName": "",
    "lastName": "amet vestibulum quam. Morbi tinci",
    "email": "it, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel eli",
    "password": "es nec. Vestibulum elementum felis sit amet ipsum euismo",
    "phone": "culis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nu",
    "userStatus": -2056703575
}
```






#### post /users/createWithArray

* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| body | body | array | [#/paths//users/createWithArray/post/parameters/0/schema](#testtoto) | List of user object |  | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithArray 
Content-Type: 
Content-Length: 1214
[
    {
        "id": -4071266097641291776,
        "username": "ibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspe",
        "firstName": "lentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvina",
        "lastName": "elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, nec condimentum tellus sagittis at. Nullam vel",
        "email": " facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sus",
        "password": "sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipi",
        "phone": "m tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentu",
        "userStatus": 1817338502
    }
]
```


* <p name="schema_57cc2c173da00">Object schema/items/schema</p> :

| Name | Location | Type | Description |  
| :---: | :---: | :---: | :--- |  
| id |  | int64 |  | 
| username |  | string |  | 
| firstName |  | string |  | 
| lastName |  | string |  | 
| email |  | string |  | 
| password |  | string |  | 
| phone |  | string |  | 
| userStatus |  | int32 | User Status | 





#### post /users/createWithList

* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| body | body | array | [#/paths//users/createWithList/post/parameters/0/schema](#testtoto) | List of user object |  | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithList 
Content-Type: 
Content-Length: 1059
[
    {
        "id": -1507515898645184512,
        "username": "or sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesua",
        "firstName": "rit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pul",
        "lastName": "m. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare ",
        "email": "ltrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, ",
        "password": "isl. Donec ultricies n",
        "phone": "er felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at t",
        "userStatus": 516984583
    }
]
```


* <p name="schema_57cc2c173f51c">Object schema/items/schema</p> :

| Name | Location | Type | Description |  
| :---: | :---: | :---: | :--- |  
| id |  | int64 |  | 
| username |  | string |  | 
| firstName |  | string |  | 
| lastName |  | string |  | 
| email |  | string |  | 
| password |  | string |  | 
| phone |  | string |  | 
| userStatus |  | int32 | User Status | 





#### get /users/login

* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| username | query | string | The user name for login | a, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tem | 
| password | query | string | The password for login in clear text |  sem tortor accumsan nibh, sed  | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=a%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tem&password=%20sem%20tortor%20accumsan%20nibh%2C%20sed%20 
```






#### get /users/logout




#### get /users/{username}

* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes | The name that needs to be fetched. Use user1 for testing. | ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Integer+ipsum+sapien%2C+bibendum+at+placerat+sit+amet%2C+volutpat+sed+lacus.+Nulla+justo+arcu%2C+sodales+ac+commodo+quis%2C 
```





#### put /users/{username}
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes |  | name that need to be deleted | rius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, u | 
| body | body | object |  | [parameters/body](#toto) | Updated user object |  | 


* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/users/rius+sodales%2C+sagittis+sed+ex.+Vivamus+id+vulputate+odio.+Donec+quis+facilisis+arcu%2C+vel+ultrices+augue.+Suspendisse+potenti.+Mauris+vehicula+ex+lorem%2C+u 
Content-Type: 
Content-Length: 982
{
    "id": -1350109126818004992,
    "username": ", vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ult",
    "firstName": "gue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In n",
    "lastName": "liquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim",
    "email": "suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus ",
    "password": "llis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis a",
    "phone": " eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo",
    "userStatus": 1426528187
}
```





#### delete /users/{username}
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes | The name that needs to be deleted | euismod ullamcorper. Phasellus sit amet vestibulum quam. M | 


* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/users/euismod+ullamcorper.+Phasellus+sit+amet+vestibulum+quam.+M 
```








---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

