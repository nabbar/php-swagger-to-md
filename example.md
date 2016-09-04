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
  * [Resource : Resource : pets](#resource--pets)
    * [Operation : post /pets](#post-pets)
    * [Operation : put /pets](#put-pets)
    * [Operation : get /pets/findByStatus](#get-petsfindbystatus)
    * [Operation : get /pets/findByTags](#get-petsfindbytags)
    * [Operation : get /pets/{petId}](#get-petspetid)
    * [Operation : post /pets/{petId}](#post-petspetid)
    * [Operation : delete /pets/{petId}](#delete-petspetid)
  * [Resource : Resource : stores](#resource--stores)
    * [Operation : post /stores/order](#post-storesorder)
    * [Operation : get /stores/order/{orderId}](#get-storesorderorderid)
    * [Operation : delete /stores/order/{orderId}](#delete-storesorderorderid)
  * [Resource : Resource : users](#resource--users)
    * [Operation : post /users](#post-users)
    * [Operation : post /users/createWithArray](#post-userscreatewitharray)
    * [Operation : post /users/createWithList](#post-userscreatewithlist)
    * [Operation : get /users/login](#get-userslogin)
    * [Operation : get /users/logout](#get-userslogout)
    * [Operation : get /users/{username}](#get-usersusername)
    * [Operation : put /users/{username}](#put-usersusername)
    * [Operation : delete /users/{username}](#delete-usersusername)
* [Table of contents](#table-of-contents)


---

## Resources 
### Resource : pets
#### post /pets

* Request Parameters :
  * Content-Type Accepted : application/json, application/xml

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#objectproperty_57cc4165a5c77) | Pet object that needs to be added to the store | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 801
{
    "id": -8148769406919376896,
    "category": {
        "id": 2457950104930222080,
        "name": "nissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut"
    },
    "name": "doggie",
    "photoUrls": [
        "volutpat sed lacus. Nulla justo arcu, sodales ac commodo qu"
    ],
    "tags": [
        {
            "id": 6783553239443832832,
            "name": " neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. V"
        }
    ],
    "status": "non felis scelerisque aliquet. Phase"
}
```

* <p name="objectproperty_57cc41659c84b">Object category :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| id | int64 | 8434670351723528192 | 
| name | string | n felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, ve | 

* <p name="schema_57cc4165a08ef">Object photoUrls/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| schema | string | ies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula,  | 

* <p name="schema_57cc4165a53a4">Object tags/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| id | int64 | -2664606553776062464 | 
| name | string | Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagitt | 

* <p name="objectproperty_57cc4165a5c77">Object body :</p> 

| Name | Type | Required | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | int64 |  |  |  | -7196586633548791808 | 
| category |  |  | [schema/properties/category](#objectproperty_57cc41659c84b) |  |  | 
| name | string | yes |  |  | doggie | 
| photoUrls | array | yes | [ [photoUrls/items/schema](#schema_57cc4165a08ef) ] |  |  | 
| tags | array |  | [ [tags/items/schema](#schema_57cc4165a53a4) ] |  |  | 
| status | string |  |  | pet status in the store | uam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget lu | 




#### put /pets

* Request Parameters :
  * Content-Type Accepted : application/json, application/xml

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#objectproperty_57cc4165af81f) | Pet object that needs to be added to the store | 

* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 627
{
    "id": -5450447115056578560,
    "category": {
        "id": -4284809066984767488,
        "name": "onsequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, v"
    },
    "name": "doggie",
    "photoUrls": [
        ". Nunc et lorem eros. Suspendisse e"
    ],
    "tags": [
        {
            "id": 698969978547732480,
            "name": "quam enim, id feugiat magna elit in sapien. Sed malesuada, velit e"
        }
    ],
    "status": "d pellentesque enim metus in eros. Mauris sollicitudin varius "
}
```

* <p name="objectproperty_57cc4165ae5f7">Object category :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| id | int64 | 5782220784483172352 | 
| name | string | r, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nu | 

* <p name="schema_57cc4165aea93">Object photoUrls/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| schema | string | ugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, nec | 

* <p name="schema_57cc4165aef5d">Object tags/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| id | int64 | 874600154877919232 | 
| name | string | x. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod  | 

* <p name="objectproperty_57cc4165af81f">Object body :</p> 

| Name | Type | Required | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | int64 |  |  |  | -734839410805178368 | 
| category |  |  | [schema/properties/category](#objectproperty_57cc4165ae5f7) |  |  | 
| name | string | yes |  |  | doggie | 
| photoUrls | array | yes | [ [photoUrls/items/schema](#schema_57cc4165aea93) ] |  |  | 
| tags | array |  | [ [tags/items/schema](#schema_57cc4165aef5d) ] |  |  | 
| status | string |  |  | pet status in the store |  ut dui. Sed eu nulla malesuada, egestas velit  | 





#### get /pets/findByStatus
Multiple status values can be provided with comma seperated strings
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| status | query | array | [ [status/items/schema](#schema_57cc4165b162e) ] | Status values that need to be considered for filter | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByStatus 
```

* <p name="schema_57cc4165b162e">Object status/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| schema | string | faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id | 





#### get /pets/findByTags
Muliple tags can be provided with comma seperated strings. Use tag1, tag2, tag3 for testing.
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| tags | query | array | [ [tags/items/schema](#schema_57cc4165b217d) ] | Tags to filter by | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByTags 
```

* <p name="schema_57cc4165b217d">Object tags/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| schema | string | ui. Sed eu nulla malesuada, egestas velit id, sempe | 





#### get /pets/{petId}
Returns a pet when ID < 10.  ID > 10 or nonintegers will simulate API error conditions
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| petId | path | int64 | yes | ID of pet that needs to be fetched | 1136346237969104896 | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/1136346237969104896 
```




#### post /pets/{petId}

* Request Parameters :
  * Content-Type Accepted : application/x-www-form-urlencoded

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| petId | path | string | yes | ID of pet that needs to be updated | s eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas  | 
| name | formData | string | yes | Updated name of the pet | ci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetu | 
| status | formData | string | yes | Updated status of the pet | r adipiscing elit. Integer ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, l | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets/s+eu+nunc+interdum+laoreet+a+ut+dui.+Sed+eu+nulla+malesuada%2C+egestas+ 
Content-Type: multipart/form-data, boundary=57cc4165b361f
Content-Length: 474
--57cc4165b361f
content-disposition: form-data; name="name"

ci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetu
--57cc4165b361f
content-disposition: form-data; name="status"

r adipiscing elit. Integer ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, l
```




#### delete /pets/{petId}

* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| api_key | header | string | yes |  | a malesuada, egestas velit id, | 
| petId | path | int64 | yes | Pet id to delete | 4821655325872488448 | 

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/4821655325872488448 
api_key: a malesuada, egestas velit id,
```





### Resource : stores
#### post /stores/order

* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#objectproperty_57cc4165b4e13) | order placed for purchasing the pet | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/stores/order 
Content-Type: 
Content-Length: 339
{
    "id": 7682292545044348928,
    "petId": 540091330018148352,
    "quantity": -1599261520,
    "shipDate": "2016-09-04T15:44:37+00:00",
    "status": "endisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in ",
    "complete": 1
}
```

* <p name="objectproperty_57cc4165b4e13">Object body :</p> 

| Name | Type | Description | Example |  
| :---: | :---: | :--- | :--- |  
| id | int64 |  | -913372881948246016 | 
| petId | int64 |  | -5672856666425524224 | 
| quantity | int32 |  | 1004482296 | 
| shipDate | date-time |  | 2016-09-04T15:44:37+00:00 | 
| status | string | Order Status | lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam  | 
| complete | boolean |  | 1 | 





#### get /stores/order/{orderId}
For valid response try integer IDs with value <= 5 or > 10. Other values will generated exceptions
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| orderId | path | string | yes | ID of pet that needs to be fetched | m augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iacul | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/m+augue+interdum+sed.+Vestibulum+eget+luctus+metus%2C+eu+bibendum+orci.+Sed+eros+massa%2C+vehicula+quis+condimentum+eget%2C+tristique+ut+quam.+Maecenas+et+velit+dignissim%2C+tincidunt+justo+quis%2C+iacul 
```




#### delete /stores/order/{orderId}
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| orderId | path | string | yes | ID of the order that needs to be deleted | d vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris  | 

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/d+vulputate+odio.+Donec+quis+facilisis+arcu%2C+vel+ultrices+augue.+Suspendisse+potenti.+Mauris+ 
```





### Resource : users
#### post /users
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#objectproperty_57cc4165b7248) | Created user object | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users 
Content-Type: 
Content-Length: 867
{
    "id": 6283195089967644672,
    "username": " Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibu",
    "firstName": ", tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pre",
    "lastName": ", egestas velit id, semper fe",
    "email": "la, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius p",
    "password": "uam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ",
    "phone": " ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit ",
    "userStatus": 164435396
}
```

* <p name="objectproperty_57cc4165b7248">Object body :</p> 

| Name | Type | Description | Example |  
| :---: | :---: | :--- | :--- |  
| id | int64 |  | 3813598979350855680 | 
| username | string |  | culis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetu | 
| firstName | string |  | ui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Done | 
| lastName | string |  | aoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutp | 
| email | string |  | bus urna vel auctor fringilla. Mauris eu tortor b | 
| password | string |  | sto turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor | 
| phone | string |  | diet nunc maximus, finibus erat. Proin id scelerisque ips | 
| userStatus | int32 | User Status | -1461675995 | 





#### post /users/createWithArray

* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| body | body | array | [ [schema/items/schema](#schema_57cc4165b8341) ] | List of user object |  | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithArray 
Content-Type: 
Content-Length: 1140
[
    {
        "id": 4760841204596211712,
        "username": "ie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibul",
        "firstName": " Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, ",
        "lastName": "vinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aene",
        "email": "les ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. U",
        "password": "perdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semp",
        "phone": "fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibu",
        "userStatus": 1173610781
    }
]
```

* <p name="schema_57cc4165b8341">Object schema/items/schema :</p>

| Name | Type | Description | Example |  
| :---: | :---: | :--- | :--- |  
| id | int64 |  | -3771305732012507136 | 
| username | string |  | is aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem torto | 
| firstName | string |  |  eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lect | 
| lastName | string |  | justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis a | 
| email | string |  | que. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed nequ | 
| password | string |  | s, felis felis aliquam enim, id feugia | 
| phone | string |  | Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est l | 
| userStatus | int32 | User Status | 461300046 | 





#### post /users/createWithList

* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| body | body | array | [ [schema/items/schema](#schema_57cc4165b9ef4) ] | List of user object |  | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithList 
Content-Type: 
Content-Length: 998
[
    {
        "id": 4540709437593092096,
        "username": "m felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. ",
        "firstName": " nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mo",
        "lastName": " justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. ",
        "email": ", sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus",
        "password": " at.",
        "phone": "t hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis ",
        "userStatus": -60620949
    }
]
```

* <p name="schema_57cc4165b9ef4">Object schema/items/schema :</p>

| Name | Type | Description | Example |  
| :---: | :---: | :--- | :--- |  
| id | int64 |  | -366605617973952512 | 
| username | string |  | . Proin id scelerisque  | 
| firstName | string |  | ue enim metus in eros. Mauris sollicitudin varius purus, nec condimentum tellus sagittis at. Nullam vel metus ac qua | 
| lastName | string |  | gue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacini | 
| email | string |  | en, bib | 
| password | string |  | is odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet var | 
| phone | string |  | sse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehic | 
| userStatus | int32 | User Status | -2082394559 | 





#### get /users/login

* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| username | query | string | The user name for login | d varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum fe | 
| password | query | string | The password for login in clear text | e odio. Donec quis facilisis arcu, vel ultrices augue. Susp | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=d%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20fe&password=e%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Susp 
```





#### get /users/logout




#### get /users/{username}

* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes | The name that needs to be fetched. Use user1 for testing. | nec est quam. Pellentesque vulputate sapien at turpis molestie co | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/nec+est+quam.+Pellentesque+vulputate+sapien+at+turpis+molestie+co 
```




#### put /users/{username}
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Required | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes |  | name that need to be deleted | es augue. Suspendisse potent | 
| body | body | object |  | [parameters/body](#objectproperty_57cc4165bd5a9) | Updated user object |  | 

* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/users/es+augue.+Suspendisse+potent 
Content-Type: 
Content-Length: 840
{
    "id": 6619080709543821312,
    "username": ", posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicul",
    "firstName": "at vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec mas",
    "lastName": "uris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing eli",
    "email": "gula non consequat. Pellentesque elit libero, faucibus luctus an",
    "password": "acinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc inte",
    "phone": "interdum fringilla ",
    "userStatus": 202655867
}
```

* <p name="objectproperty_57cc4165bd5a9">Object body :</p> 

| Name | Type | Description | Example |  
| :---: | :---: | :--- | :--- |  
| id | int64 |  | -1810725183695093760 | 
| username | string |  | rerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel | 
| firstName | string |  | incidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque digni | 
| lastName | string |  | d leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibu | 
| email | string |  | oreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posue | 
| password | string |  | s lobortis portti | 
| phone | string |  | ar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec | 
| userStatus | int32 | User Status | 724448816 | 




#### delete /users/{username}
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes | The name that needs to be deleted | dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputa | 

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/users/dui.+Sed+eu+nulla+malesuada%2C+egestas+velit+id%2C+semper+felis.+Fusce+ac+dui+nisl.+Donec+ultricies+nibh+eu+leo+consectetur+congue+quis+nec+tellus.+Morbi+consequat+mi+id+eros+viverra+ullamcorper.+Fusce+nec+est+quam.+Pellentesque+vulputa 
```







---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

