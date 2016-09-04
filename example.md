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
| body | body | object | [parameters/body](#objectproperty_57cc341f937da) | Pet object that needs to be added to the store | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 918
{
    "id": -1250923183603712000,
    "category": {
        "id": -4685478315396431872,
        "name": "dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Do"
    },
    "name": "doggie",
    "photoUrls": [
        "ed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius"
    ],
    "tags": [
        {
            "id": 802250451524255744,
            "name": "gue interdum sed. Vestibulum eget luctus metus, eu bib"
        }
    ],
    "status": "tus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum to"
}
```


* <p name="objectproperty_57cc341f8a22a">Object category</p> :

| Name | Location | Type |  
| :---: | :---: | :---: |  
| id |  | int64 | 
| name |  | string | 

* <p name="schema_57cc341f8e4d8">Object photoUrls/items/schema</p> :

| Name | Location | Type |  
| :---: | :---: | :---: |  
|  |  | string | 

* <p name="schema_57cc341f92ee8">Object tags/items/schema</p> :

| Name | Location | Type |  
| :---: | :---: | :---: |  
| id |  | int64 | 
| name |  | string | 




#### put /pets

* Request Parameters :
  * Content-Type Accepted : application/json, application/xml


| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#objectproperty_57cc341f9cae8) | Pet object that needs to be added to the store | 


* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 756
{
    "id": 1817928015649177600,
    "category": {
        "id": -7318084437944565760,
        "name": "a malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at tu"
    },
    "name": "doggie",
    "photoUrls": [
        "ien finibu"
    ],
    "tags": [
        {
            "id": 7318987205710446592,
            "name": "non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo c"
        }
    ],
    "status": "pien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nib"
}
```


* <p name="objectproperty_57cc341f9b7ad">Object category</p> :

| Name | Location | Type |  
| :---: | :---: | :---: |  
| id |  | int64 | 
| name |  | string | 

* <p name="schema_57cc341f9bc97">Object photoUrls/items/schema</p> :

| Name | Location | Type |  
| :---: | :---: | :---: |  
|  |  | string | 

* <p name="schema_57cc341f9c1b3">Object tags/items/schema</p> :

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
| status | query | array | [ [status/items/schema](#schema_57cc341f9e270) ] | Status values that need to be considered for filter | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByStatus 
```


* <p name="schema_57cc341f9e270">Object status/items/schema</p> :

| Name | Location | Type |  
| :---: | :---: | :---: |  
|  |  | string | 





#### get /pets/findByTags
Muliple tags can be provided with comma seperated strings. Use tag1, tag2, tag3 for testing.
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| tags | query | array | [ [tags/items/schema](#schema_57cc341f9ede8) ] | Tags to filter by | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByTags 
```


* <p name="schema_57cc341f9ede8">Object tags/items/schema</p> :

| Name | Location | Type |  
| :---: | :---: | :---: |  
|  |  | string | 





#### get /pets/{petId}
Returns a pet when ID < 10.  ID > 10 or nonintegers will simulate API error conditions
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| petId | path | int64 | yes | ID of pet that needs to be fetched | 4750360530911232000 | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/4750360530911232000 
```





#### post /pets/{petId}

* Request Parameters :
  * Content-Type Accepted : application/x-www-form-urlencoded


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| petId | path | string | yes | ID of pet that needs to be updated |  lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum | 
| name | formData | string | yes | Updated name of the pet | molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pret | 
| status | formData | string | yes | Updated status of the pet | gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu t | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets/+lorem+eros.+Suspendisse+eget+nibh+pulvinar%2C+vestibulum+magna+ut%2C+suscipit+est.+Etiam+varius+lobortis+porttitor.+Mauris+vel+ultrices+erat%2C+at+hendrerit+enim.+Sed+leo+ex%2C+pulvinar+vel+metus+et%2C+molestie+pretium+tortor.+Praesent+interdum 
Content-Type: multipart/form-data, boundary=57cc341fa02e8
Content-Length: 517
--57cc341fa02e8
content-disposition: form-data; name="name"

molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pret
--57cc341fa02e8
content-disposition: form-data; name="status"

gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu t
```





#### delete /pets/{petId}

* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| api_key | header | string | yes |  | dales, | 
| petId | path | int64 | yes | Pet id to delete | 4800392811100766208 | 


* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/4800392811100766208 
api_key: dales,
```






### Resource : stores
#### post /stores/order

* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#objectproperty_57cc341fa1c13) | order placed for purchasing the pet | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/stores/order 
Content-Type: 
Content-Length: 267
{
    "id": 5749587957975613440,
    "petId": -5718203656986165248,
    "quantity": -712528774,
    "shipDate": "2016-09-04T14:47:59+00:00",
    "status": "llentesque. Nullam ultricies turpis nec dignissim aliquam. Nunc sed enim nec tellus accum",
    "complete": 0
}
```






#### get /stores/order/{orderId}
For valid response try integer IDs with value <= 5 or > 10. Other values will generated exceptions
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| orderId | path | string | yes | ID of pet that needs to be fetched | lestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odi | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/lestie.+Aenean+quam+nisi%2C+posuere+sed+varius+sodales%2C+sagittis+sed+ex.+Vivamus+id+vulputate+odi 
```





#### delete /stores/order/{orderId}
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| orderId | path | string | yes | ID of the order that needs to be deleted | hicula, sem tortor accumsan nibh | 


* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/hicula%2C+sem+tortor+accumsan+nibh 
```






### Resource : users
#### post /users
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#objectproperty_57cc341fa3cef) | Created user object | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users 
Content-Type: 
Content-Length: 1206
{
    "id": -3239947852918554624,
    "username": "ent interdum fringilla orci, gravida ornare nibh sollic",
    "firstName": "ue ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat di",
    "lastName": "d efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accum",
    "email": " non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et",
    "password": "e. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum f",
    "phone": "cing elit. Integer ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etia",
    "userStatus": 680735682
}
```






#### post /users/createWithArray

* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| body | body | array | [ [schema/items/schema](#schema_57cc341fa4797) ] | List of user object |  | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithArray 
Content-Type: 
Content-Length: 681
[
    {
        "id": -5126547619627139072,
        "username": " justo turpis, lacinia id tempor sed, dapibus vel elit.",
        "firstName": " condimentum eget, tristique ut",
        "lastName": "em ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsu",
        "email": ", tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, fauc",
        "password": ". Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris ve",
        "phone": " vel metus et, molestie pretium tortor. Praesent interdu",
        "userStatus": 1512796303
    }
]
```


* <p name="schema_57cc341fa4797">Object schema/items/schema</p> :

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
| body | body | array | [ [schema/items/schema](#schema_57cc341fa6441) ] | List of user object |  | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithList 
Content-Type: 
Content-Length: 1101
[
    {
        "id": -8762530704648044544,
        "username": " risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tr",
        "firstName": "rabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam",
        "lastName": "t ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et di",
        "email": "ing elit. Integer ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie ali",
        "password": "varius lobortis porttitor. Mauris vel ultrices ",
        "phone": "ar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada ",
        "userStatus": 1607745789
    }
]
```


* <p name="schema_57cc341fa6441">Object schema/items/schema</p> :

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
| username | query | string | The user name for login |  laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu | 
| password | query | string | The password for login in clear text | sit | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu&password=sit 
```






#### get /users/logout




#### get /users/{username}

* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes | The name that needs to be fetched. Use user1 for testing. | utate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut orna | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/utate+odio.+Donec+quis+facilisis+arcu%2C+vel+ultrices+augue.+Suspendisse+potenti.+Mauris+vehicula+ex+lorem%2C+ut+orna 
```





#### put /users/{username}
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes |  | name that need to be deleted | sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada | 
| body | body | object |  | [parameters/body](#objectproperty_57cc341fa9dbe) | Updated user object |  | 


* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/users/sed%2C+dapibus+vel+elit.+Sed+efficitur%2C+mi+sit+amet+fermentum+ultricies%2C+felis+felis+aliquam+enim%2C+id+feugiat+magna+elit+in+sapien.+Sed+malesuada 
Content-Type: 
Content-Length: 716
{
    "id": -431808701905502208,
    "username": "e nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blan",
    "firstName": "h pulvin",
    "lastName": "uam gravida pellentesque. Nullam ultricies turpis nec d",
    "email": " lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, te",
    "password": "im nec tellus accumsan tincidunt. Aliquam enim dui,",
    "phone": "llicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, b",
    "userStatus": -399772994
}
```





#### delete /users/{username}
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes | The name that needs to be deleted | . Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdie | 


* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/users/.+Maecenas+et+velit+dignissim%2C+tincidunt+justo+quis%2C+iaculis+odio.+Mauris+volutpat+dignissim+mi+eget+lacinia.+In+nisi+odio%2C+porta+ut+quam+non%2C+imperdie 
```








---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

