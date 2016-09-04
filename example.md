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

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [#/paths//pets/post/parameters/0](#toto) | Pet object that needs to be added to the store | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 1044
{
    "id": 2350705759391580160,
    "category": {
        "id": -7006115163367538688,
        "name": "eet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, er"
    },
    "name": "doggie",
    "photoUrls": [
        "t. Sed efficitur, mi sit amet fermentum ultricies, felis fe"
    ],
    "tags": [
        {
            "id": -1662046979414294528,
            "name": " Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, nec condimentum tellus sagittis at. Nullam vel metus a"
        }
    ],
    "status": "itur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo t"
}
```



#### put /pets

* Request Parameters :
  * Content-Type Accepted : application/json, application/xml

* Request Parameters :

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [#/paths//pets/put/parameters/0](#toto) | Pet object that needs to be added to the store | 


* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 917
{
    "id": -465289011359907840,
    "category": {
        "id": -5198497736403451904,
        "name": "t pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus"
    },
    "name": "doggie",
    "photoUrls": [
        "a, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta u"
    ],
    "tags": [
        {
            "id": 5798590399496847360,
            "name": "si, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Done"
        }
    ],
    "status": "sectetur adipiscing elit. Integer ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec"
}
```




#### get /pets/findByStatus
Multiple status values can be provided with comma seperated strings
* Request Parameters :
  * Content-Type Accepted : 

* Request Parameters :

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| status | query | array | [#/paths//pets/findByStatus/get/parameters/0](#testtoto) | Status values that need to be considered for filter | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByStatus 
```




#### get /pets/findByTags
Muliple tags can be provided with comma seperated strings. Use tag1, tag2, tag3 for testing.
* Request Parameters :
  * Content-Type Accepted : 

* Request Parameters :

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| tags | query | array | [#/paths//pets/findByTags/get/parameters/0](#testtoto) | Tags to filter by | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByTags 
```




#### get /pets/{petId}
Returns a pet when ID < 10.  ID > 10 or nonintegers will simulate API error conditions
* Request Parameters :
  * Content-Type Accepted : 

* Request Parameters :

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| petId | path | int64 | yes | ID of pet that needs to be fetched | -1998856180167868416 | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/-1998856180167868416 
```



#### post /pets/{petId}

* Request Parameters :
  * Content-Type Accepted : application/x-www-form-urlencoded

* Request Parameters :

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| petId | path | string | yes | ID of pet that needs to be updated | lam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacin | 
| name | formData | string | yes | Updated name of the pet | enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in e | 
| status | formData | string | yes | Updated status of the pet | . Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fring | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets/lam+finibus+urna+vel+auctor+fringilla.+Mauris+eu+tortor+blandit%2C+bibendum+tortor+ac%2C+congue+eros.+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Suspendisse+justo+turpis%2C+lacin 
Content-Type: multipart/form-data, boundary=57cc270ece1f5
Content-Length: 495
--57cc270ece1f5
content-disposition: form-data; name="name"

enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in e
--57cc270ece1f5
content-disposition: form-data; name="status"

. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fring
```



#### delete /pets/{petId}

* Request Parameters :
  * Content-Type Accepted : 

* Request Parameters :

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| api_key | header | string | yes |  | inar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scele | 
| petId | path | int64 | yes | Pet id to delete | 6761090989982482432 | 


* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/6761090989982482432 
api_key: inar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scele
```




### Resource : stores
#### post /stores/order

* Request Parameters :
  * Content-Type Accepted : 

* Request Parameters :

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [#/paths//stores/order/post/parameters/0](#toto) | order placed for purchasing the pet | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/stores/order 
Content-Type: 
Content-Length: 349
{
    "id": -6073474512668590080,
    "petId": 6761191638246096896,
    "quantity": 787901842,
    "shipDate": "2016-09-04T13:52:14+00:00",
    "status": "que aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, ",
    "complete": 0
}
```




#### get /stores/order/{orderId}
For valid response try integer IDs with value <= 5 or > 10. Other values will generated exceptions
* Request Parameters :
  * Content-Type Accepted : 

* Request Parameters :

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| orderId | path | string | yes | ID of pet that needs to be fetched | s nec tellus. Morbi consequat mi id eros viverra ullamcor | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/s+nec+tellus.+Morbi+consequat+mi+id+eros+viverra+ullamcor 
```



#### delete /stores/order/{orderId}
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors
* Request Parameters :
  * Content-Type Accepted : 

* Request Parameters :

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| orderId | path | string | yes | ID of the order that needs to be deleted | lit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor  | 


* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/lit.+Suspendisse+justo+turpis%2C+lacinia+id+tempor+sed%2C+dapibus+vel+elit.+Sed+efficitur%2C+mi+sit+amet+fermentum+ultricies%2C+felis+felis+aliquam+enim%2C+id+feugiat+magna+elit+in+sapien.+Sed+malesuada%2C+velit+eu+dapibus+vehicula%2C+sem+tortor+ 
```




### Resource : users
#### post /users
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 

* Request Parameters :

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [#/paths//users/post/parameters/0](#toto) | Created user object | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users 
Content-Type: 
Content-Length: 911
{
    "id": 6432673562619805696,
    "username": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integ",
    "firstName": "tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, es",
    "lastName": " congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, d",
    "email": "eo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean ",
    "password": "ed ",
    "phone": "mper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est",
    "userStatus": 1174397331
}
```




#### post /users/createWithArray

* Request Parameters :
  * Content-Type Accepted : 

* Request Parameters :

| Name | Location | Type | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| body | body | array | [#/paths//users/createWithArray/post/parameters/0/schema](#testtoto) | List of user object |  | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithArray 
Content-Type: 
Content-Length: 1020
[
    {
        "id": -7851472036978229248,
        "username": "sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ul",
        "firstName": "ortor blandit, bibendum t",
        "lastName": "ficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna el",
        "email": "gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna v",
        "password": " Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lor",
        "phone": "bero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus er",
        "userStatus": 1257412353
    }
]
```




#### post /users/createWithList

* Request Parameters :
  * Content-Type Accepted : 

* Request Parameters :

| Name | Location | Type | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| body | body | array | [#/paths//users/createWithList/post/parameters/0/schema](#testtoto) | List of user object |  | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithList 
Content-Type: 
Content-Length: 938
[
    {
        "id": 861500775208058880,
        "username": "quis, iaculis odio. Mauris volutpat dignissim mi ",
        "firstName": "Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam ",
        "lastName": "erat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Et",
        "email": " ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ult",
        "password": "t a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non",
        "phone": "ris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse jus",
        "userStatus": -1200426926
    }
]
```




#### get /users/login

* Request Parameters :
  * Content-Type Accepted : 

* Request Parameters :

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| username | query | string | The user name for login | Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nis | 
| password | query | string | The password for login in clear text | nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Sus | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nis&password=nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Sus 
```




#### get /users/logout



#### get /users/{username}

* Request Parameters :
  * Content-Type Accepted : 

* Request Parameters :

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes | The name that needs to be fetched. Use user1 for testing. |  fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sa | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/+fringilla+orci%2C+gravida+ornare+nibh+sollicitudin+et.+Curabitur+pulvinar+metus+massa%2C+malesuada+facilisis+sa 
```



#### put /users/{username}
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 

* Request Parameters :

| Name | Location | Type | Required | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes |  | name that need to be deleted | m. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posu | 
| body | body | object |  | [#/paths//users/{username}/put/parameters/1](#toto) | Updated user object |  | 


* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/users/m.+Duis+sem+elit%2C+posuere+eu+facilisis+nec%2C+tempus+ac+ipsum.+Ut+molestie+aliquet+est%2C+posu 
Content-Type: 
Content-Length: 565
{
    "id": 6766146857979609088,
    "username": "ti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum",
    "firstName": "gue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. ",
    "lastName": "ales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ips",
    "email": " accumsan nibh, sed pel",
    "password": "landit, bibendum tortor ac, congue eros. Lore",
    "phone": " ullamcorper. Phasellus sit amet vestibulum quam. Morbi t",
    "userStatus": 1810587639
}
```



#### delete /users/{username}
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 

* Request Parameters :

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes | The name that needs to be deleted |  varius purus, nec  | 


* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/users/+varius+purus%2C+nec+ 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

