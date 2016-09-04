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


* Request Parameters :
  * Content-Type Accepted : application/json, application/xml


| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#toto) | Pet object that needs to be added to the store | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 762
{
    "id": -2716762098293014528,
    "category": {
        "id": -1147870571527143424,
        "name": "Donec consectetur sed ante sit amet sagittis. In non lectus eu"
    },
    "name": "doggie",
    "photoUrls": [
        "m ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros"
    ],
    "tags": [
        {
            "id": 6061153162029432832,
            "name": "bitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum "
        }
    ],
    "status": "sit amet, consectetur adipiscing elit. Integer ipsu"
}
```


* <p name="objectproperty_57cc2b44de1da">Object category</p> :

| Name | Location | Type |  
| :---: | :---: | :---: |  
| id |  | int64 | 
| name |  | string | 

* <p name="schema_57cc2b44e20a6">Object photoUrls/items/schema</p> :

| Name | Location | Type |  
| :---: | :---: | :---: |  
|  |  | string | 

* <p name="schema_57cc2b44e6da1">Object tags/items/schema</p> :

| Name | Location | Type |  
| :---: | :---: | :---: |  
| id |  | int64 | 
| name |  | string | 




* Example of request :



#### put /pets

* Request Parameters :
  * Content-Type Accepted : application/json, application/xml


* Request Parameters :
  * Content-Type Accepted : application/json, application/xml


| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#toto) | Pet object that needs to be added to the store | 


* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 967
{
    "id": 5837590265912623104,
    "category": {
        "id": -2018818230381969408,
        "name": "tus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volu"
    },
    "name": "doggie",
    "photoUrls": [
        "onsectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor"
    ],
    "tags": [
        {
            "id": 8208587332006182912,
            "name": "pien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, p"
        }
    ],
    "status": "lacerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere "
}
```


* <p name="objectproperty_57cc2b44f1360">Object category</p> :

| Name | Location | Type |  
| :---: | :---: | :---: |  
| id |  | int64 | 
| name |  | string | 

* <p name="schema_57cc2b44f1800">Object photoUrls/items/schema</p> :

| Name | Location | Type |  
| :---: | :---: | :---: |  
|  |  | string | 

* <p name="schema_57cc2b44f1cdc">Object tags/items/schema</p> :

| Name | Location | Type |  
| :---: | :---: | :---: |  
| id |  | int64 | 
| name |  | string | 




* Example of request :




#### get /pets/findByStatus
Multiple status values can be provided with comma seperated strings
* Request Parameters :
  * Content-Type Accepted : 


* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| status | query | array | [#/paths//pets/findByStatus/get/parameters/0](#testtoto) | Status values that need to be considered for filter | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByStatus 
```


* <p name="schema_57cc2b44f3f80">Object 0/items/schema</p> :

| Name | Location | Type |  
| :---: | :---: | :---: |  
|  |  | string | 




* Example of request :




#### get /pets/findByTags
Muliple tags can be provided with comma seperated strings. Use tag1, tag2, tag3 for testing.
* Request Parameters :
  * Content-Type Accepted : 


* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| tags | query | array | [#/paths//pets/findByTags/get/parameters/0](#testtoto) | Tags to filter by | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByTags 
```


* <p name="schema_57cc2b4500a1d">Object 0/items/schema</p> :

| Name | Location | Type |  
| :---: | :---: | :---: |  
|  |  | string | 




* Example of request :




#### get /pets/{petId}
Returns a pet when ID < 10.  ID > 10 or nonintegers will simulate API error conditions
* Request Parameters :
  * Content-Type Accepted : 


* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| petId | path | int64 | yes | ID of pet that needs to be fetched | -1221033264945299456 | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/-1221033264945299456 
```





* Example of request :



#### post /pets/{petId}

* Request Parameters :
  * Content-Type Accepted : application/x-www-form-urlencoded


* Request Parameters :
  * Content-Type Accepted : application/x-www-form-urlencoded


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| petId | path | string | yes | ID of pet that needs to be updated | lis felis aliquam enim, id feugiat magna elit in sapien | 
| name | formData | string | yes | Updated name of the pet | erdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec | 
| status | formData | string | yes | Updated status of the pet |  tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets/lis+felis+aliquam+enim%2C+id+feugiat+magna+elit+in+sapien 
Content-Type: multipart/form-data, boundary=57cc2b45020ef
Content-Length: 531
--57cc2b45020ef
content-disposition: form-data; name="name"

erdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec
--57cc2b45020ef
content-disposition: form-data; name="status"

 tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque.
```





* Example of request :



#### delete /pets/{petId}

* Request Parameters :
  * Content-Type Accepted : 


* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| api_key | header | string | yes |  | a ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque a | 
| petId | path | int64 | yes | Pet id to delete | 9200980890577010688 | 


* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/9200980890577010688 
api_key: a ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque a
```





* Example of request :




### Resource : stores
#### post /stores/order

* Request Parameters :
  * Content-Type Accepted : 


* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#toto) | order placed for purchasing the pet | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/stores/order 
Content-Type: 
Content-Length: 306
{
    "id": -729642680765644800,
    "petId": 2587637565850910720,
    "quantity": 1112620312,
    "shipDate": "2016-09-04T14:10:13+00:00",
    "status": "pien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam vari",
    "complete": 1
}
```





* Example of request :




#### get /stores/order/{orderId}
For valid response try integer IDs with value <= 5 or > 10. Other values will generated exceptions
* Request Parameters :
  * Content-Type Accepted : 


* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| orderId | path | string | yes | ID of pet that needs to be fetched | adipiscing elit. Integer ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nu | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/adipiscing+elit.+Integer+ipsum+sapien%2C+bibendum+at+placerat+sit+amet%2C+volutpat+sed+lacus.+Nu 
```





* Example of request :



#### delete /stores/order/{orderId}
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors
* Request Parameters :
  * Content-Type Accepted : 


* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| orderId | path | string | yes | ID of the order that needs to be deleted | bulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis sceleris | 


* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/bulum+quam.+Morbi+tincidunt+pretium+sodales.+Etiam+dignissim+risus+non+felis+sceleris 
```





* Example of request :




### Resource : users
#### post /users
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 


* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#toto) | Created user object | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users 
Content-Type: 
Content-Length: 716
{
    "id": 2955910283970740224,
    "username": "m varius ",
    "firstName": " leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpi",
    "lastName": "lisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ",
    "email": " Phasellus faucibus urna arcu, et ",
    "password": "x. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ",
    "phone": "t, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praese",
    "userStatus": -2030060524
}
```





* Example of request :




#### post /users/createWithArray

* Request Parameters :
  * Content-Type Accepted : 


* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| body | body | array | [#/paths//users/createWithArray/post/parameters/0/schema](#testtoto) | List of user object |  | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithArray 
Content-Type: 
Content-Length: 934
[
    {
        "id": -3986044570575044608,
        "username": "ius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida orn",
        "firstName": "porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit i",
        "lastName": "a",
        "email": "Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, t",
        "password": "nec quis facilisis arcu, vel u",
        "phone": " ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuad",
        "userStatus": -1204132985
    }
]
```


* <p name="schema_57cc2b4506b2d">Object schema/items/schema</p> :

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




* Example of request :




#### post /users/createWithList

* Request Parameters :
  * Content-Type Accepted : 


* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| body | body | array | [#/paths//users/createWithList/post/parameters/0/schema](#testtoto) | List of user object |  | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithList 
Content-Type: 
Content-Length: 862
[
    {
        "id": -2609164642018131968,
        "username": "rper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodal",
        "firstName": "lis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, nec c",
        "lastName": "rtor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. ",
        "email": "et, consectetur adipiscing elit. Integer ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac",
        "password": "esque elit libero, faucibus ",
        "phone": "dio. Sed sed neque di",
        "userStatus": 1265084190
    }
]
```


* <p name="schema_57cc2b4508844">Object schema/items/schema</p> :

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




* Example of request :




#### get /users/login

* Request Parameters :
  * Content-Type Accepted : 


* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| username | query | string | The user name for login | varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec | 
| password | query | string | The password for login in clear text | us erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec qu | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec&password=us%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20qu 
```





* Example of request :




#### get /users/logout

* Request Parameters :
  * Content-Type Accepted : 




* Example of request :




#### get /users/{username}

* Request Parameters :
  * Content-Type Accepted : 


* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes | The name that needs to be fetched. Use user1 for testing. |  porta mauris nec massa egestas, sed mollis est mo | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/+porta+mauris+nec+massa+egestas%2C+sed+mollis+est+mo 
```





* Example of request :



#### put /users/{username}
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 


* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes |  | name that need to be deleted | t. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed  | 
| body | body | object |  | [parameters/body](#toto) | Updated user object |  | 


* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/users/t.+Proin+id+scelerisque+ipsum.+Quisque+porta+mauris+nec+massa+egestas%2C+sed+mollis+est+molestie.+Aenean+quam+nisi%2C+posuere+sed+ 
Content-Type: 
Content-Length: 761
{
    "id": -7691165947477884928,
    "username": "olutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, ",
    "firstName": "lum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis sceler",
    "lastName": "tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit",
    "email": "nd",
    "password": "nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. ",
    "phone": "uam gravida pellentesque. ",
    "userStatus": 880316131
}
```





* Example of request :



#### delete /users/{username}
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 


* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes | The name that needs to be deleted | s sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt el | 


* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/users/s+sem+elit%2C+posuere+eu+facilisis+nec%2C+tempus+ac+ipsum.+Ut+molestie+aliquet+est%2C+posuere+tincidunt+el 
```





* Example of request :






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

