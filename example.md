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

| Name | Location | Type | Required | Definition | Description |  
| :---: | :---: | :---: | :---: | :---: | :---: |  
| body | body | object | no | [#/paths//pets/post/parameters/0](#testtoto) | Pet object that needs to be added to the store | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 810
{
    "id": 4133265028595843072,
    "category": {
        "id": -6875881996787122176,
        "name": "ante nec, volutpat dictum neque. Donec molestie, eros in preti"
    },
    "name": "doggie",
    "photoUrls": [
        "t. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus m"
    ],
    "tags": [
        {
            "id": 3607994415240445952,
            "name": "ris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet"
        }
    ],
    "status": "e. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit e"
}
```



#### put /pets

* Request Parameters :

| Name | Location | Type | Required | Definition | Description |  
| :---: | :---: | :---: | :---: | :---: | :---: |  
| body | body | object | no | [#/paths//pets/put/parameters/0](#testtoto) | Pet object that needs to be added to the store | 

* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 793
{
    "id": -2283303458930950144,
    "category": {
        "id": -4710805947994341376,
        "name": "s faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit "
    },
    "name": "doggie",
    "photoUrls": [
        "e odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lore"
    ],
    "tags": [
        {
            "id": 3222123601201201152,
            "name": " Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamc"
        }
    ],
    "status": "a ut dui. Sed eu nulla malesuad"
}
```




#### get /pets/findByStatus
Multiple status values can be provided with comma seperated strings
* Request Parameters :

| Name | Location | Type | Required | Definition | Description |  
| :---: | :---: | :---: | :---: | :---: | :---: |  
| status | query | array | no | [#/paths//pets/findByStatus/get/parameters/0](#testtoto) | Status values that need to be considered for filter | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByStatus 
```




#### get /pets/findByTags
Muliple tags can be provided with comma seperated strings. Use tag1, tag2, tag3 for testing.
* Request Parameters :

| Name | Location | Type | Required | Definition | Description |  
| :---: | :---: | :---: | :---: | :---: | :---: |  
| tags | query | array | no | [#/paths//pets/findByTags/get/parameters/0](#testtoto) | Tags to filter by | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByTags 
```




#### get /pets/{petId}
Returns a pet when ID < 10.  ID > 10 or nonintegers will simulate API error conditions
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :---: |  
| petId | path | int64 | yes | ID of pet that needs to be fetched | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/6316280756352057344 
```



#### post /pets/{petId}

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :---: |  
| petId | path | string | yes | ID of pet that needs to be updated | 
| name | formData | string | yes | Updated name of the pet | 
| status | formData | string | yes | Updated status of the pet | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets/eros+in+pretium+pulvinar%2C+est+leo+vehicula+lectus%2C+a+cursus+neque+erat+vitae+odio.+Sed+sed+neque+dignissim%2C+imperdiet+nunc+maximus%2C+finibus+erat.+Proin+id+scelerisque+ipsum.+Quisque+porta+mauris+nec+massa+egestas%2C+sed+mollis+est+molestie.+Ae 
Content-Type: multipart/form-data, boundary=57caec3d998ae
Content-Length: 235
--57caec3d998ae
content-disposition: form-data; name="name"


--57caec3d998ae
content-disposition: form-data; name="status"

ger ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo qui
```



#### delete /pets/{petId}

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :---: |  
| api_key | header | string | yes |  | 
| petId | path | int64 | yes | Pet id to delete | 

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/-1228536882049056768 
api_key:  Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum.
```




### Resource : stores
#### post /stores/order

* Request Parameters :

| Name | Location | Type | Required | Definition | Description |  
| :---: | :---: | :---: | :---: | :---: | :---: |  
| body | body | object | no | [#/paths//stores/order/post/parameters/0](#testtoto) | order placed for purchasing the pet | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/stores/order 
Content-Type: 
Content-Length: 354
{
    "id": 8520863486291476480,
    "petId": 4193602434272067584,
    "quantity": -1349609921,
    "shipDate": "2016-09-03T15:29:01+00:00",
    "status": " mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu ",
    "complete": 1
}
```




#### get /stores/order/{orderId}
For valid response try integer IDs with value <= 5 or > 10. Other values will generated exceptions
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :---: |  
| orderId | path | string | yes | ID of pet that needs to be fetched | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/uscipit+est.+Etiam+varius+lobortis+porttitor.+Mauris+vel+ultrices+erat%2C+at+hendrerit+enim.+Sed+leo+ex%2C+pulvinar 
```



#### delete /stores/order/{orderId}
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :---: |  
| orderId | path | string | yes | ID of the order that needs to be deleted | 

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/es+nibh+eu+leo+consectetur+ 
```




### Resource : users
#### post /users
This can only be done by the logged in user.
* Request Parameters :

| Name | Location | Type | Required | Definition | Description |  
| :---: | :---: | :---: | :---: | :---: | :---: |  
| body | body | object | no | [#/paths//users/post/parameters/0](#testtoto) | Created user object | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users 
Content-Type: 
Content-Length: 1081
{
    "id": 8469102443110596608,
    "username": "Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed ero",
    "firstName": ", felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque ",
    "lastName": "rcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ulla",
    "email": "Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam n",
    "password": "aucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus",
    "phone": "uam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar",
    "userStatus": 1436484352
}
```




#### post /users/createWithArray

* Request Parameters :

| Name | Location | Type | Required | Definition | Description |  
| :---: | :---: | :---: | :---: | :---: | :---: |  
| body | body | array | no | [#/paths//users/createWithArray/post/parameters/0/schema](#testtoto) | List of user object | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithArray 
Content-Type: 
Content-Length: 1217
[
    {
        "id": -8578948877405650944,
        "username": "ien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tin",
        "firstName": "elerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit digniss",
        "lastName": "sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nu",
        "email": "consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pu",
        "password": "m. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molest",
        "phone": " eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id",
        "userStatus": 478980640
    }
]
```




#### post /users/createWithList

* Request Parameters :

| Name | Location | Type | Required | Definition | Description |  
| :---: | :---: | :---: | :---: | :---: | :---: |  
| body | body | array | no | [#/paths//users/createWithList/post/parameters/0/schema](#testtoto) | List of user object | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithList 
Content-Type: 
Content-Length: 827
[
    {
        "id": 228402083013853184,
        "username": "llentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulu",
        "firstName": "inar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor b",
        "lastName": "est, posuere tincidunt elit. Etiam convallis eu",
        "email": "convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Don",
        "password": "din et. Curabitur pulvinar metus massa, males",
        "phone": " tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibu",
        "userStatus": 1142743387
    }
]
```




#### get /users/login

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :---: |  
| username | query | string | no | The user name for login | 
| password | query | string | no | The password for login in clear text | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commo&password=consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20 
```




#### get /users/logout


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/logout 
```




#### get /users/{username}

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :---: |  
| username | path | string | yes | The name that needs to be fetched. Use user1 for testing. | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/+Nunc+et+lorem+eros.+Suspendisse+eget+nibh+pulvinar%2C+vestibulum+magna+ut%2C+suscipit+est.+Etiam+varius+lobort 
```



#### put /users/{username}
This can only be done by the logged in user.
* Request Parameters :

| Name | Location | Type | Required | Definition | Description |  
| :---: | :---: | :---: | :---: | :---: | :---: |  
| username | path | string | yes |  | name that need to be deleted | 
| body | body | object | no | [#/paths//users/{username}/put/parameters/1](#testtoto) | Updated user object | 

* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/users/uismod+ullamcorper.+Phasellus+sit+amet+vestibulum+quam.+Morbi+tincidunt+pretium+sodales.+Etiam+dignissim+risus+non+felis+scelerisque+aliquet.+Phasellus+faucibus+urna 
Content-Type: 
Content-Length: 552
{
    "id": 7637255818626203648,
    "username": "Sed sed",
    "firstName": "d ante sit amet sagittis. In non lectus eu ",
    "lastName": "tis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egesta",
    "email": "it libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicu",
    "password": "itae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisqu",
    "phone": "sse potenti. Mauris vehicula ex",
    "userStatus": -480708763
}
```



#### delete /users/{username}
This can only be done by the logged in user.
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :---: |  
| username | path | string | yes | The name that needs to be deleted | 

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/users/ate+odio.+Donec+quis+facilisis+arcu%2C+vel+ultrices+augue.+Suspendisse+potenti.+Mauris+vehicula+ex+lor 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

