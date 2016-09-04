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
| body | body | object | [parameters/body](#objectproperty_57cc36193d2d9) | Pet object that needs to be added to the store | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 806
{
    "id": -4693821108980285440,
    "category": {
        "id": -4822578825445507072,
        "name": " eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, i"
    },
    "name": "doggie",
    "photoUrls": [
        "nim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nib"
    ],
    "tags": [
        {
            "id": 4757457521986240512,
            "name": "is sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere "
        }
    ],
    "status": "e interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dig"
}
```


* <p name="objectproperty_57cc361933ebf">Object category :</p> 
| Name | Type |  
| :---: | :---: |  
| id | int64 | 
| name | string | 

* <p name="schema_57cc361938066">Object photoUrls/items/schema :</p>
| Name | Type |  
| :---: | :---: |  
| schema | string | 

* <p name="schema_57cc36193ca72">Object tags/items/schema :</p>
| Name | Type |  
| :---: | :---: |  
| id | int64 | 
| name | string | 

* <p name="objectproperty_57cc36193d2d9">Object body :</p> 
| Name | Type | Required | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | int64 |  |  |  |  | 
| category |  |  | [schema/properties/category](#objectproperty_57cc361933ebf) |  |  | 
| name | string | yes |  |  | doggie | 
| photoUrls | array | yes | [ [photoUrls/items/schema](#schema_57cc361938066) ] |  |  | 
| tags | array |  | [ [tags/items/schema](#schema_57cc36193ca72) ] |  |  | 
| status | string |  |  | pet status in the store |  | 




#### put /pets

* Request Parameters :
  * Content-Type Accepted : application/json, application/xml


| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#objectproperty_57cc361946bbd) | Pet object that needs to be added to the store | 


* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 849
{
    "id": 7761086606307491840,
    "category": {
        "id": 499236613256118272,
        "name": "nec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula"
    },
    "name": "doggie",
    "photoUrls": [
        " arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorpe"
    ],
    "tags": [
        {
            "id": -6951440410078085120,
            "name": "terdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque"
        }
    ],
    "status": "i. Donec consectetur sed ante sit amet sagittis. In non lectus eu nu"
}
```


* <p name="objectproperty_57cc361945a95">Object category :</p> 
| Name | Type |  
| :---: | :---: |  
| id | int64 | 
| name | string | 

* <p name="schema_57cc361945eea">Object photoUrls/items/schema :</p>
| Name | Type |  
| :---: | :---: |  
| schema | string | 

* <p name="schema_57cc36194637c">Object tags/items/schema :</p>
| Name | Type |  
| :---: | :---: |  
| id | int64 | 
| name | string | 

* <p name="objectproperty_57cc361946bbd">Object body :</p> 
| Name | Type | Required | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | int64 |  |  |  |  | 
| category |  |  | [schema/properties/category](#objectproperty_57cc361945a95) |  |  | 
| name | string | yes |  |  | doggie | 
| photoUrls | array | yes | [ [photoUrls/items/schema](#schema_57cc361945eea) ] |  |  | 
| tags | array |  | [ [tags/items/schema](#schema_57cc36194637c) ] |  |  | 
| status | string |  |  | pet status in the store |  | 





#### get /pets/findByStatus
Multiple status values can be provided with comma seperated strings
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| status | query | array | [ [status/items/schema](#schema_57cc361948a23) ] | Status values that need to be considered for filter | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByStatus 
```


* <p name="schema_57cc361948a23">Object status/items/schema :</p>
| Name | Type |  
| :---: | :---: |  
| schema | string | 





#### get /pets/findByTags
Muliple tags can be provided with comma seperated strings. Use tag1, tag2, tag3 for testing.
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| tags | query | array | [ [tags/items/schema](#schema_57cc361949534) ] | Tags to filter by | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByTags 
```


* <p name="schema_57cc361949534">Object tags/items/schema :</p>
| Name | Type |  
| :---: | :---: |  
| schema | string | 





#### get /pets/{petId}
Returns a pet when ID < 10.  ID > 10 or nonintegers will simulate API error conditions
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| petId | path | int64 | yes | ID of pet that needs to be fetched | 6138075845912166400 | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/6138075845912166400 
```





#### post /pets/{petId}

* Request Parameters :
  * Content-Type Accepted : application/x-www-form-urlencoded


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| petId | path | string | yes | ID of pet that needs to be updated | ris soll | 
| name | formData | string | yes | Updated name of the pet | . Mauris sollicitudin varius purus, nec condimentum tellus sagittis at. Nullam vel metus ac quam gravida pellentesque. Null | 
| status | formData | string | yes | Updated status of the pet | mentum eget, tristique ut quam. Maecenas et velit dignissi | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets/ris+soll 
Content-Type: multipart/form-data, boundary=57cc36194a9a6
Content-Length: 307
--57cc36194a9a6
content-disposition: form-data; name="name"

. Mauris sollicitudin varius purus, nec condimentum tellus sagittis at. Nullam vel metus ac quam gravida pellentesque. Null
--57cc36194a9a6
content-disposition: form-data; name="status"

mentum eget, tristique ut quam. Maecenas et velit dignissi
```





#### delete /pets/{petId}

* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| api_key | header | string | yes |  | ida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis | 
| petId | path | int64 | yes | Pet id to delete | -8222354162478743552 | 


* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/-8222354162478743552 
api_key: ida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis
```






### Resource : stores
#### post /stores/order

* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#objectproperty_57cc36194c1e8) | order placed for purchasing the pet | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/stores/order 
Content-Type: 
Content-Length: 236
{
    "id": -2099747560406122496,
    "petId": 2269076362583080960,
    "quantity": -253924814,
    "shipDate": "2016-09-04T14:56:25+00:00",
    "status": "unt pretium sodales. Etiam dignissim risus non felis scele",
    "complete": 1
}
```


* <p name="objectproperty_57cc36194c1e8">Object body :</p> 
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
| orderId | path | string | yes | ID of pet that needs to be fetched |  convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium  | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/+convallis+eu+ligula+non+consequat.+Pellentesque+elit+libero%2C+faucibus+luctus+ante+nec%2C+volutpat+dictum+neque.+Donec+molestie%2C+eros+in+pretium+ 
```





#### delete /stores/order/{orderId}
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| orderId | path | string | yes | ID of the order that needs to be deleted | dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris | 


* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/dignissim+augue+interdum+sed.+Vestibulum+eget+luctus+metus%2C+eu+bibendum+orci.+Sed+eros+massa%2C+vehicula+quis+condimentum+eget%2C+tristique+ut+quam.+Maecenas+et+velit+dignissim%2C+tincidunt+justo+quis%2C+iaculis+odio.+Mauris 
```






### Resource : users
#### post /users
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#objectproperty_57cc36194e5b8) | Created user object | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users 
Content-Type: 
Content-Length: 1308
{
    "id": -7890808259462823936,
    "username": "t, at hendrerit enim. Sed leo ex, pulvin",
    "firstName": "pendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fr",
    "lastName": "n finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel e",
    "email": " justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum l",
    "password": "ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis mo",
    "phone": " luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, ",
    "userStatus": -2050242058
}
```


* <p name="objectproperty_57cc36194e5b8">Object body :</p> 
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
| body | body | array | [ [schema/items/schema](#schema_57cc36194f5cb) ] | List of user object |  | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithArray 
Content-Type: 
Content-Length: 860
[
    {
        "id": -4524349434716225536,
        "username": "eo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa",
        "firstName": " interdum fri",
        "lastName": "t amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignis",
        "email": "uat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dign",
        "password": "rius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor",
        "phone": ". Sed eros massa, vehicula quis condimentum eget, tristiqu",
        "userStatus": 376294887
    }
]
```


* <p name="schema_57cc36194f5cb">Object schema/items/schema :</p>
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
| body | body | array | [ [schema/items/schema](#schema_57cc361951095) ] | List of user object |  | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithList 
Content-Type: 
Content-Length: 1032
[
    {
        "id": 8595861097112666112,
        "username": "citudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tort",
        "firstName": "o. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lect",
        "lastName": "bus ",
        "email": "agittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec ",
        "password": "mcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum",
        "phone": "sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, nec condimentum tellus sagittis at. Nullam ",
        "userStatus": -1720917707
    }
]
```


* <p name="schema_57cc361951095">Object schema/items/schema :</p>
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
| username | query | string | The user name for login | estibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim m | 
| password | query | string | The password for login in clear text | ulum quam. Morbi tincidunt pretium sodales. Etiam dig | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=estibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20m&password=ulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dig 
```






#### get /users/logout




#### get /users/{username}

* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes | The name that needs to be fetched. Use user1 for testing. | ibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in  | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/ibus+vel+elit.+Sed+efficitur%2C+mi+sit+amet+fermentum+ultricies%2C+felis+felis+aliquam+enim%2C+id+feugiat+magna+elit+in+sapien.+Sed+malesuada%2C+velit+eu+dapibus+vehicula%2C+sem+tortor+accumsan+nibh%2C+sed+pellentesque+enim+metus+in+ 
```





#### put /users/{username}
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes |  | name that need to be deleted |  dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros mass | 
| body | body | object |  | [parameters/body](#objectproperty_57cc361954721) | Updated user object |  | 


* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/users/+dignissim+risus+non+felis+scelerisque+aliquet.+Phasellus+faucibus+urna+arcu%2C+et+dignissim+augue+interdum+sed.+Vestibulum+eget+luctus+metus%2C+eu+bibendum+orci.+Sed+eros+mass 
Content-Type: 
Content-Length: 828
{
    "id": 5082496579613491200,
    "username": "eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris",
    "firstName": "icitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac",
    "lastName": "ie pretium tortor. Praesent interdum fri",
    "email": "entesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut,",
    "password": "ulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices ",
    "phone": " eros. Lorem ipsum dolor sit amet, consectet",
    "userStatus": 589541260
}
```


* <p name="objectproperty_57cc361954721">Object body :</p> 
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
| username | path | string | yes | The name that needs to be deleted | agittis | 


* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/users/agittis 
```








---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

