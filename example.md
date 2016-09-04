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
| body | body | object | [parameters/body](#objectproperty_57cc3562ab04f) | Pet object that needs to be added to the store | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 815
{
    "id": -2723258373767168,
    "category": {
        "id": -7022606527819153408,
        "name": "ante nec, volutpat dictum neque. Donec molestie, ero"
    },
    "name": "doggie",
    "photoUrls": [
        " velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur s"
    ],
    "tags": [
        {
            "id": 1467598953632497664,
            "name": "felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie "
        }
    ],
    "status": "tricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu d"
}
```


* <p name="objectproperty_57cc3562a1efb">Object category :</p> 
| Name | Type |  
| :---: | :---: |  
| id | int64 | 
| name | string | 

* <p name="schema_57cc3562a5f12">Object photoUrls/items/schema :</p>
| Name | Type |  
| :---: | :---: |  
|  | string | 

* <p name="schema_57cc3562aa7f2">Object tags/items/schema :</p>
| Name | Type |  
| :---: | :---: |  
| id | int64 | 
| name | string | 

* <p name="objectproperty_57cc3562ab04f">Object body :</p> 
| Name | Type | Required | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | int64 |  |  |  |  | 
| category |  |  | [schema/properties/category](#objectproperty_57cc3562a1efb) |  |  | 
| name | string | yes |  |  | doggie | 
| photoUrls | array | yes | [ [photoUrls/items/schema](#schema_57cc3562a5f12) ] |  |  | 
| tags | array |  | [ [tags/items/schema](#schema_57cc3562aa7f2) ] |  |  | 
| status | string |  |  | pet status in the store |  | 




#### put /pets

* Request Parameters :
  * Content-Type Accepted : application/json, application/xml


| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#objectproperty_57cc3562b46b1) | Pet object that needs to be added to the store | 


* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 999
{
    "id": 899864556967297024,
    "category": {
        "id": -4224727684309057536,
        "name": "mentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam"
    },
    "name": "doggie",
    "photoUrls": [
        "oin id scelerisque ipsum. Quisque porta mauris nec mass"
    ],
    "tags": [
        {
            "id": 6764800256883294208,
            "name": "is vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nulla"
        }
    ],
    "status": "nc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, v"
}
```


* <p name="objectproperty_57cc3562b353c">Object category :</p> 
| Name | Type |  
| :---: | :---: |  
| id | int64 | 
| name | string | 

* <p name="schema_57cc3562b399f">Object photoUrls/items/schema :</p>
| Name | Type |  
| :---: | :---: |  
|  | string | 

* <p name="schema_57cc3562b3e3b">Object tags/items/schema :</p>
| Name | Type |  
| :---: | :---: |  
| id | int64 | 
| name | string | 

* <p name="objectproperty_57cc3562b46b1">Object body :</p> 
| Name | Type | Required | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | int64 |  |  |  |  | 
| category |  |  | [schema/properties/category](#objectproperty_57cc3562b353c) |  |  | 
| name | string | yes |  |  | doggie | 
| photoUrls | array | yes | [ [photoUrls/items/schema](#schema_57cc3562b399f) ] |  |  | 
| tags | array |  | [ [tags/items/schema](#schema_57cc3562b3e3b) ] |  |  | 
| status | string |  |  | pet status in the store |  | 





#### get /pets/findByStatus
Multiple status values can be provided with comma seperated strings
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| status | query | array | [ [status/items/schema](#schema_57cc3562b645e) ] | Status values that need to be considered for filter | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByStatus 
```


* <p name="schema_57cc3562b645e">Object status/items/schema :</p>
| Name | Type |  
| :---: | :---: |  
|  | string | 





#### get /pets/findByTags
Muliple tags can be provided with comma seperated strings. Use tag1, tag2, tag3 for testing.
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| tags | query | array | [ [tags/items/schema](#schema_57cc3562b6f32) ] | Tags to filter by | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByTags 
```


* <p name="schema_57cc3562b6f32">Object tags/items/schema :</p>
| Name | Type |  
| :---: | :---: |  
|  | string | 





#### get /pets/{petId}
Returns a pet when ID < 10.  ID > 10 or nonintegers will simulate API error conditions
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| petId | path | int64 | yes | ID of pet that needs to be fetched | -8909738316421660672 | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/-8909738316421660672 
```





#### post /pets/{petId}

* Request Parameters :
  * Content-Type Accepted : application/x-www-form-urlencoded


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| petId | path | string | yes | ID of pet that needs to be updated | s. Lorem ipsum dolor sit amet,  | 
| name | formData | string | yes | Updated name of the pet | ris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed effici | 
| status | formData | string | yes | Updated status of the pet | bero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, e | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets/s.+Lorem+ipsum+dolor+sit+amet%2C+ 
Content-Type: multipart/form-data, boundary=57cc3562b8326
Content-Length: 414
--57cc3562b8326
content-disposition: form-data; name="name"

ris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed effici
--57cc3562b8326
content-disposition: form-data; name="status"

bero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, e
```





#### delete /pets/{petId}

* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| api_key | header | string | yes |  | , sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum eui | 
| petId | path | int64 | yes | Pet id to delete | -2708739369967026176 | 


* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/-2708739369967026176 
api_key: , sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum eui
```






### Resource : stores
#### post /stores/order

* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#objectproperty_57cc3562b9b23) | order placed for purchasing the pet | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/stores/order 
Content-Type: 
Content-Length: 393
{
    "id": 8199408123606204416,
    "petId": -8894338973174857728,
    "quantity": 151543167,
    "shipDate": "2016-09-04T14:53:22+00:00",
    "status": "reet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, vo",
    "complete": 0
}
```


* <p name="objectproperty_57cc3562b9b23">Object body :</p> 
| Name | Type | Description |  
| :---: | :---: | :--- |  
| id | int64 |  | 
| petId | int64 |  | 
| quantity | int32 |  | 
| shipDate | date-time |  | 
| status | string | Order Status | 
| complete | boolean |  | 





#### get /stores/order/{orderId}
For valid response try integer IDs with value <= 5 or > 10. Other values will generated exceptions
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| orderId | path | string | yes | ID of pet that needs to be fetched | psum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arc | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/psum+euismod+ullamcorper.+Phasellus+sit+amet+vestibulum+quam.+Morbi+tincidunt+pretium+sodales.+Etiam+dignissim+risus+non+felis+scelerisque+aliquet.+Phasellus+faucibus+urna+arc 
```





#### delete /stores/order/{orderId}
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| orderId | path | string | yes | ID of the order that needs to be deleted | sollicitudin varius purus, nec condimentum tellus sagittis at. Nullam vel metus ac quam gravida pellentesque. Nu | 


* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/sollicitudin+varius+purus%2C+nec+condimentum+tellus+sagittis+at.+Nullam+vel+metus+ac+quam+gravida+pellentesque.+Nu 
```






### Resource : users
#### post /users
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#objectproperty_57cc3562bbe1c) | Created user object | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users 
Content-Type: 
Content-Length: 1061
{
    "id": 2730270431863898112,
    "username": "arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie al",
    "firstName": "i, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu,",
    "lastName": " mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendi",
    "email": "tenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tin",
    "password": "ibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, nec condimentum tellus sagittis at. Nullam vel metus ac qua",
    "phone": "sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetu",
    "userStatus": -2066301944
}
```


* <p name="objectproperty_57cc3562bbe1c">Object body :</p> 
| Name | Type | Description |  
| :---: | :---: | :--- |  
| id | int64 |  | 
| username | string |  | 
| firstName | string |  | 
| lastName | string |  | 
| email | string |  | 
| password | string |  | 
| phone | string |  | 
| userStatus | int32 | User Status | 





#### post /users/createWithArray

* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| body | body | array | [ [schema/items/schema](#schema_57cc3562bcde7) ] | List of user object |  | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithArray 
Content-Type: 
Content-Length: 1081
[
    {
        "id": -5726857101259571200,
        "username": "etium tortor. Praesent interdum fringilla ",
        "firstName": "sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lo",
        "lastName": "mcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibend",
        "email": " ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel u",
        "password": "c consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas veli",
        "phone": "sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollici",
        "userStatus": -1234719937
    }
]
```


* <p name="schema_57cc3562bcde7">Object schema/items/schema :</p>
| Name | Type | Description |  
| :---: | :---: | :--- |  
| id | int64 |  | 
| username | string |  | 
| firstName | string |  | 
| lastName | string |  | 
| email | string |  | 
| password | string |  | 
| phone | string |  | 
| userStatus | int32 | User Status | 





#### post /users/createWithList

* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| body | body | array | [ [schema/items/schema](#schema_57cc3562be8b3) ] | List of user object |  | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithList 
Content-Type: 
Content-Length: 623
[
    {
        "id": -8042746051863511040,
        "username": "stie. Aenean quam ",
        "firstName": "m neque. Donec moles",
        "lastName": "mcorper. Fu",
        "email": " luctus metus, eu bibendu",
        "password": "ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa",
        "phone": "convallis eu ligula non consequat. Pellentesque elit libero, faucibus luc",
        "userStatus": 1697153645
    }
]
```


* <p name="schema_57cc3562be8b3">Object schema/items/schema :</p>
| Name | Type | Description |  
| :---: | :---: | :--- |  
| id | int64 |  | 
| username | string |  | 
| firstName | string |  | 
| lastName | string |  | 
| email | string |  | 
| password | string |  | 
| phone | string |  | 
| userStatus | int32 | User Status | 





#### get /users/login

* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| username | query | string | The user name for login | vinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Ma | 
| password | query | string | The password for login in clear text | , dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=vinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Ma&password=%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim 
```






#### get /users/logout




#### get /users/{username}

* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes | The name that needs to be fetched. Use user1 for testing. | , sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod  | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/%2C+sagittis+sed+ex.+Vivamus+id+vulputate+odio.+Donec+quis+facilisis+arcu%2C+vel+ultrices+augue.+Suspendisse+potenti.+Mauris+vehicula+ex+lorem%2C+ut+ornare+purus+ultrices+nec.+Vestibulum+elementum+felis+sit+amet+ipsum+euismod+ 
```





#### put /users/{username}
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes |  | name that need to be deleted |  eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est qu | 
| body | body | object |  | [parameters/body](#objectproperty_57cc3562c1e2c) | Updated user object |  | 


* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/users/+eu+nulla+malesuada%2C+egestas+velit+id%2C+semper+felis.+Fusce+ac+dui+nisl.+Donec+ultricies+nibh+eu+leo+consectetur+congue+quis+nec+tellus.+Morbi+consequat+mi+id+eros+viverra+ullamcorper.+Fusce+nec+est+qu 
Content-Type: 
Content-Length: 1148
{
    "id": 7003613168823959552,
    "username": " orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id,",
    "firstName": "verra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc e",
    "lastName": "or sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna ",
    "email": "egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Maur",
    "password": " justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliqu",
    "phone": "entesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat,",
    "userStatus": -1504952167
}
```


* <p name="objectproperty_57cc3562c1e2c">Object body :</p> 
| Name | Type | Description |  
| :---: | :---: | :--- |  
| id | int64 |  | 
| username | string |  | 
| firstName | string |  | 
| lastName | string |  | 
| email | string |  | 
| password | string |  | 
| phone | string |  | 
| userStatus | int32 | User Status | 




#### delete /users/{username}
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes | The name that needs to be deleted | ficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitud | 


* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/users/ficitur%2C+mi+sit+amet+fermentum+ultricies%2C+felis+felis+aliquam+enim%2C+id+feugiat+magna+elit+in+sapien.+Sed+malesuada%2C+velit+eu+dapibus+vehicula%2C+sem+tortor+accumsan+nibh%2C+sed+pellentesque+enim+metus+in+eros.+Mauris+sollicitud 
```








---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

