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
| body | body | object | [parameters/body](#objectproperty_57cc4a5f9383e) | Pet object that needs to be added to the store | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 704
{
    "id": 8995813476827922432,
    "category": {
        "id": 8769049636074684416,
        "name": "Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, nec condi"
    },
    "name": "doggie",
    "photoUrls": [
        "onec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauri"
    ],
    "tags": [
        {
            "id": -2238540515203088384,
            "name": "im, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus ve"
        }
    ],
    "status": "ius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium"
}
```

* <p name="objectproperty_57cc4a5f8a829">Object category :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| id | int64 | 9217299180731498496 | 
| name | string | ibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec | 

* <p name="schema_57cc4a5f8e815">Object photoUrls/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| schema | string | n consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros i | 

* <p name="schema_57cc4a5f92fa3">Object tags/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| id | int64 | -979433408855801856 | 
| name | string |  mollis est molestie. Aenean quam nisi, posuere sed var | 

* <p name="objectproperty_57cc4a5f9383e">Object body :</p> 

| Name | Type | Required | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | int64 |  |  |  | -5560733972478033920 | 
| category |  |  | [schema/properties/category](#objectproperty_57cc4a5f8a829) |  |  | 
| name | string | yes |  |  | doggie | 
| photoUrls | array | yes | [ [photoUrls/items/schema](#schema_57cc4a5f8e815) ] |  |  | 
| tags | array |  | [ [tags/items/schema](#schema_57cc4a5f92fa3) ] |  |  | 
| status | string |  |  | pet status in the store | volutpat dictum neque. Donec molestie, eros in pretium pulv | 




#### put /pets

* Request Parameters :
  * Content-Type Accepted : application/json, application/xml

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#objectproperty_57cc4a5f9d010) | Pet object that needs to be added to the store | 

* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 580
{
    "id": 3038895928372101120,
    "category": {
        "id": -1250299399733510144,
        "name": "uctus ante nec, volutpat dictu"
    },
    "name": "doggie",
    "photoUrls": [
        ", lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id"
    ],
    "tags": [
        {
            "id": 6898318966070968320,
            "name": " sem tortor accumsan nibh, sed pellentesque enim metus in "
        }
    ],
    "status": "pendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, m"
}
```

* <p name="objectproperty_57cc4a5f9be94">Object category :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| id | int64 | -3167270447855173632 | 
| name | string | nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo | 

* <p name="schema_57cc4a5f9c307">Object photoUrls/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| schema | string | uam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet var | 

* <p name="schema_57cc4a5f9c7a6">Object tags/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| id | int64 | 4636449270847766528 | 
| name | string | eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis  | 

* <p name="objectproperty_57cc4a5f9d010">Object body :</p> 

| Name | Type | Required | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | int64 |  |  |  | 7285025632285622272 | 
| category |  |  | [schema/properties/category](#objectproperty_57cc4a5f9be94) |  |  | 
| name | string | yes |  |  | doggie | 
| photoUrls | array | yes | [ [photoUrls/items/schema](#schema_57cc4a5f9c307) ] |  |  | 
| tags | array |  | [ [tags/items/schema](#schema_57cc4a5f9c7a6) ] |  |  | 
| status | string |  |  | pet status in the store | m laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ull | 





#### get /pets/findByStatus
Multiple status values can be provided with comma seperated strings
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| status | query | array | [ [status/items/schema](#schema_57cc4a5f9ed40) ] | Status values that need to be considered for filter | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByStatus 
```

* <p name="schema_57cc4a5f9ed40">Object status/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| schema | string | consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, e | 





#### get /pets/findByTags
Muliple tags can be provided with comma seperated strings. Use tag1, tag2, tag3 for testing.
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| tags | query | array | [ [tags/items/schema](#schema_57cc4a5f9f82e) ] | Tags to filter by | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByTags 
```

* <p name="schema_57cc4a5f9f82e">Object tags/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| schema | string | am. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus fau | 





#### get /pets/{petId}
Returns a pet when ID < 10.  ID > 10 or nonintegers will simulate API error conditions
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| petId | path | int64 | yes | ID of pet that needs to be fetched | 6150056536925274112 | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/6150056536925274112 
```




#### post /pets/{petId}

* Request Parameters :
  * Content-Type Accepted : application/x-www-form-urlencoded

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| petId | path | string | yes | ID of pet that needs to be updated | tie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar me | 
| name | formData | string | yes | Updated name of the pet | s at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendiss | 
| status | formData | string | yes | Updated status of the pet | cidunt justo quis, iaculis  | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets/tie+pretium+tortor.+Praesent+interdum+fringilla+orci%2C+gravida+ornare+nibh+sollicitudin+et.+Curabitur+pulvinar+me 
Content-Type: multipart/form-data, boundary=57cc4a5fa0c18
Content-Length: 327
--57cc4a5fa0c18
content-disposition: form-data; name="name"

s at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendiss
--57cc4a5fa0c18
content-disposition: form-data; name="status"

cidunt justo quis, iaculis 
```




#### delete /pets/{petId}

* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| api_key | header | string | yes |  | s. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel u | 
| petId | path | int64 | yes | Pet id to delete | 6896129305844121600 | 

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/6896129305844121600 
api_key: s. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel u
```





### Resource : stores
#### post /stores/order

* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#objectproperty_57cc4a5fa2343) | order placed for purchasing the pet | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/stores/order 
Content-Type: 
Content-Length: 213
{
    "id": 7944449188354326528,
    "petId": -2732062648702074880,
    "quantity": 144649263,
    "shipDate": "2016-09-04T16:22:55+00:00",
    "status": "nterdum fringilla orci, gravida orna",
    "complete": 1
}
```

* <p name="objectproperty_57cc4a5fa2343">Object body :</p> 

| Name | Type | Description | Example |  
| :---: | :---: | :--- | :--- |  
| id | int64 |  | -8006875270986334208 | 
| petId | int64 |  | 4306084866090336256 | 
| quantity | int32 |  | 1136783607 | 
| shipDate | date-time |  | 2016-09-04T16:22:55+00:00 | 
| status | string | Order Status | ermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, nec c | 
| complete | boolean |  | 1 | 





#### get /stores/order/{orderId}
For valid response try integer IDs with value <= 5 or > 10. Other values will generated exceptions
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| orderId | path | string | yes | ID of pet that needs to be fetched | am dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibend | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/am+dignissim+risus+non+felis+scelerisque+aliquet.+Phasellus+faucibus+urna+arcu%2C+et+dignissim+augue+interdum+sed.+Vestibulum+eget+luctus+metus%2C+eu+bibend 
```




#### delete /stores/order/{orderId}
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| orderId | path | string | yes | ID of the order that needs to be deleted | ismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium | 

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/ismod+ullamcorper.+Phasellus+sit+amet+vestibulum+quam.+Morbi+tincidunt+pretium 
```





### Resource : users
#### post /users
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#objectproperty_57cc4a5fa4675) | Created user object | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users 
Content-Type: 
Content-Length: 871
{
    "id": -6151292250555940864,
    "username": "bendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, p",
    "firstName": "us ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. ",
    "lastName": "rices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ",
    "email": "isque aliquet. Phasellus faucibus urna arcu, et ",
    "password": " laoreet ",
    "phone": "s, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamc",
    "userStatus": 835185997
}
```

* <p name="objectproperty_57cc4a5fa4675">Object body :</p> 

| Name | Type | Description | Example |  
| :---: | :---: | :--- | :--- |  
| id | int64 |  | -9018602156688670720 | 
| username | string |  | m dignissim risu | 
| firstName | string |  | t vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis sceleris | 
| lastName | string |  |  Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et veli | 
| email | string |  | ndisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendr | 
| password | string |  | s ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, | 
| phone | string |  | vamus id vulputate odi | 
| userStatus | int32 | User Status | -648225018 | 





#### post /users/createWithArray

* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| body | body | array | [ [schema/items/schema](#schema_57cc4a5fa570c) ] | List of user object |  | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithArray 
Content-Type: 
Content-Length: 1506
[
    {
        "id": -1198629504348585984,
        "username": "io. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcor",
        "firstName": "ndrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. N",
        "lastName": "a mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornar",
        "email": "lestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel me",
        "password": "eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum n",
        "phone": "m mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac",
        "userStatus": 1681992799
    }
]
```

* <p name="schema_57cc4a5fa570c">Object schema/items/schema :</p>

| Name | Type | Description | Example |  
| :---: | :---: | :--- | :--- |  
| id | int64 |  | 5504326972978757632 | 
| username | string |  |  vitae odio. Sed sed neque dignissim, imperdiet nunc maxi | 
| firstName | string |  | e vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar ve | 
| lastName | string |  | uere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat d | 
| email | string |  | ectus eu nunc interdum lao | 
| password | string |  | or accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, nec condimentum tellus sagittis at. Nullam vel metus ac quam gravida pe | 
| phone | string |  | ces nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus fauci | 
| userStatus | int32 | User Status | -196424164 | 





#### post /users/createWithList

* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| body | body | array | [ [schema/items/schema](#schema_57cc4a5fa71f6) ] | List of user object |  | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithList 
Content-Type: 
Content-Length: 613
[
    {
        "id": -8880414676316323840,
        "username": "enim dui, ",
        "firstName": "celerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posue",
        "lastName": "mcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus",
        "email": "bus at.",
        "password": ", imperdiet nunc maximus, finibus erat. Proin",
        "phone": "o",
        "userStatus": 850633752
    }
]
```

* <p name="schema_57cc4a5fa71f6">Object schema/items/schema :</p>

| Name | Type | Description | Example |  
| :---: | :---: | :--- | :--- |  
| id | int64 |  | -5622712304769433600 | 
| username | string |  | que porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec q | 
| firstName | string |  | lit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellu | 
| lastName | string |  | nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean | 
| email | string |  | ed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis fa | 
| password | string |  |  id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis e | 
| phone | string |  | consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim | 
| userStatus | int32 | User Status | 2083323641 | 





#### get /users/login

* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| username | query | string | The user name for login | non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque | 
| password | query | string | The password for login in clear text | ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellent | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque&password=ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellent 
```





#### get /users/logout




#### get /users/{username}

* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes | The name that needs to be fetched. Use user1 for testing. | at. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/at.+Pellentesque+elit+libero%2C+faucibus+luctus+ante+nec%2C+volutpat+dictum+neque.+Donec+molestie%2C+eros+in+pretium+pulvinar%2C+est+leo+vehicula+lectus%2C+a+cursus+neque+erat+vitae+odio.+Sed 
```




#### put /users/{username}
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Required | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes |  | name that need to be deleted | or sit amet, consectetur adipiscing elit. Integer ipsum sapien, bibendum | 
| body | body | object |  | [parameters/body](#objectproperty_57cc4a5faa6fc) | Updated user object |  | 

* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/users/or+sit+amet%2C+consectetur+adipiscing+elit.+Integer+ipsum+sapien%2C+bibendum 
Content-Type: 
Content-Length: 740
{
    "id": 2153037757973266432,
    "username": "unc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id,",
    "firstName": "uis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris vo",
    "lastName": "uat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nun",
    "email": "c. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis sceler",
    "password": "a non consequat. Pellentesque elit libero, faucibus luctu",
    "phone": "id scelerisque ipsum. Quisque",
    "userStatus": 1346324087
}
```

* <p name="objectproperty_57cc4a5faa6fc">Object body :</p> 

| Name | Type | Description | Example |  
| :---: | :---: | :--- | :--- |  
| id | int64 |  | 1488925493481701376 | 
| username | string |  |  Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc i | 
| firstName | string |  | a lectus, a cursus neque erat vitae odio. Sed sed neque d | 
| lastName | string |  | llam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficit | 
| email | string |  | eet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce  | 
| password | string |  | it amet, consectetur adipiscing elit. Integer ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie alique | 
| phone | string |  | c massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices aug | 
| userStatus | int32 | User Status | -162664423 | 




#### delete /users/{username}
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes | The name that needs to be deleted | estie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odi | 

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/users/estie.+Aenean+quam+nisi%2C+posuere+sed+varius+sodales%2C+sagittis+sed+ex.+Vivamus+id+vulputate+odi 
```







---

## Table of contents
* Tags
  * Tag : pet
    * [Operation : post /pets](#post-pets)
    * [Operation : put /pets](#put-pets)
    * [Operation : get /pets/findByStatus](#get-petsfindbystatus)
    * [Operation : get /pets/findByTags](#get-petsfindbytags)
    * [Operation : get /pets/{petId}](#get-petspetid)
    * [Operation : post /pets/{petId}](#post-petspetid)
    * [Operation : delete /pets/{petId}](#delete-petspetid)
  * Tag : store
    * [Operation : post /stores/order](#post-storesorder)
    * [Operation : get /stores/order/{orderId}](#get-storesorderorderid)
    * [Operation : delete /stores/order/{orderId}](#delete-storesorderorderid)
  * Tag : user
    * [Operation : post /users](#post-users)
    * [Operation : post /users/createWithArray](#post-userscreatewitharray)
    * [Operation : post /users/createWithList](#post-userscreatewithlist)
    * [Operation : get /users/login](#get-userslogin)
    * [Operation : get /users/logout](#get-userslogout)
    * [Operation : get /users/{username}](#get-usersusername)
    * [Operation : put /users/{username}](#put-usersusername)
    * [Operation : delete /users/{username}](#delete-usersusername)
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

