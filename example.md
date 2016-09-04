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
| body | body | object | [parameters/body](#objectproperty_57cc37032f92b) | Pet object that needs to be added to the store | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 779
{
    "id": 5937951471092891648,
    "category": {
        "id": -6497186445306888192,
        "name": "s viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis moles"
    },
    "name": "doggie",
    "photoUrls": [
        "um tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et."
    ],
    "tags": [
        {
            "id": 5715580986746470400,
            "name": "tum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibu"
        }
    ],
    "status": "rpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vesti"
}
```

* <p name="objectproperty_57cc3703268f2">Object category :</p> 

| Name | Type |  
| :---: | :---: |  
| id | int64 | 
| name | string | 

* <p name="schema_57cc37032a92a">Object photoUrls/items/schema :</p>

| Name | Type |  
| :---: | :---: |  
| schema | string | 

* <p name="schema_57cc37032f0fc">Object tags/items/schema :</p>

| Name | Type |  
| :---: | :---: |  
| id | int64 | 
| name | string | 

* <p name="objectproperty_57cc37032f92b">Object body :</p> 

| Name | Type | Required | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | int64 |  |  |  |  | 
| category |  |  | [schema/properties/category](#objectproperty_57cc3703268f2) |  |  | 
| name | string | yes |  |  | doggie | 
| photoUrls | array | yes | [ [photoUrls/items/schema](#schema_57cc37032a92a) ] |  |  | 
| tags | array |  | [ [tags/items/schema](#schema_57cc37032f0fc) ] |  |  | 
| status | string |  |  | pet status in the store |  | 




#### put /pets

* Request Parameters :
  * Content-Type Accepted : application/json, application/xml

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#objectproperty_57cc3703390e0) | Pet object that needs to be added to the store | 

* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 737
{
    "id": 260113209539690496,
    "category": {
        "id": -2360828825509560320,
        "name": "mentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mau"
    },
    "name": "doggie",
    "photoUrls": [
        "dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum "
    ],
    "tags": [
        {
            "id": 5893091370909827072,
            "name": " luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi"
        }
    ],
    "status": ""
}
```

* <p name="objectproperty_57cc370337f54">Object category :</p> 

| Name | Type |  
| :---: | :---: |  
| id | int64 | 
| name | string | 

* <p name="schema_57cc37033839a">Object photoUrls/items/schema :</p>

| Name | Type |  
| :---: | :---: |  
| schema | string | 

* <p name="schema_57cc37033883d">Object tags/items/schema :</p>

| Name | Type |  
| :---: | :---: |  
| id | int64 | 
| name | string | 

* <p name="objectproperty_57cc3703390e0">Object body :</p> 

| Name | Type | Required | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | int64 |  |  |  |  | 
| category |  |  | [schema/properties/category](#objectproperty_57cc370337f54) |  |  | 
| name | string | yes |  |  | doggie | 
| photoUrls | array | yes | [ [photoUrls/items/schema](#schema_57cc37033839a) ] |  |  | 
| tags | array |  | [ [tags/items/schema](#schema_57cc37033883d) ] |  |  | 
| status | string |  |  | pet status in the store |  | 





#### get /pets/findByStatus
Multiple status values can be provided with comma seperated strings
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| status | query | array | [ [status/items/schema](#schema_57cc37033ae71) ] | Status values that need to be considered for filter | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByStatus 
```

* <p name="schema_57cc37033ae71">Object status/items/schema :</p>

| Name | Type |  
| :---: | :---: |  
| schema | string | 





#### get /pets/findByTags
Muliple tags can be provided with comma seperated strings. Use tag1, tag2, tag3 for testing.
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| tags | query | array | [ [tags/items/schema](#schema_57cc37033b933) ] | Tags to filter by | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByTags 
```

* <p name="schema_57cc37033b933">Object tags/items/schema :</p>

| Name | Type |  
| :---: | :---: |  
| schema | string | 





#### get /pets/{petId}
Returns a pet when ID < 10.  ID > 10 or nonintegers will simulate API error conditions
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| petId | path | int64 | yes | ID of pet that needs to be fetched | 5381977562467532800 | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/5381977562467532800 
```




#### post /pets/{petId}

* Request Parameters :
  * Content-Type Accepted : application/x-www-form-urlencoded

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| petId | path | string | yes | ID of pet that needs to be updated | ie pretium tortor. Praesent interdum fringilla orci, gravida or | 
| name | formData | string | yes | Updated name of the pet | sed pellentesque enim metus in eros. Mauris sollic | 
| status | formData | string | yes | Updated status of the pet | c molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets/ie+pretium+tortor.+Praesent+interdum+fringilla+orci%2C+gravida+or 
Content-Type: multipart/form-data, boundary=57cc37033cd0d
Content-Length: 278
--57cc37033cd0d
content-disposition: form-data; name="name"

sed pellentesque enim metus in eros. Mauris sollic
--57cc37033cd0d
content-disposition: form-data; name="status"

c molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed
```




#### delete /pets/{petId}

* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| api_key | header | string | yes |  | sequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, | 
| petId | path | int64 | yes | Pet id to delete | -9046123345048764416 | 

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/-9046123345048764416 
api_key: sequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar,
```





### Resource : stores
#### post /stores/order

* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#objectproperty_57cc37033e52d) | order placed for purchasing the pet | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/stores/order 
Content-Type: 
Content-Length: 322
{
    "id": -5107084133511725056,
    "petId": 5899384739244015616,
    "quantity": -2067335109,
    "shipDate": "2016-09-04T15:00:19+00:00",
    "status": "pien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis po",
    "complete": 0
}
```

* <p name="objectproperty_57cc37033e52d">Object body :</p> 

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
| orderId | path | string | yes | ID of pet that needs to be fetched | r adipiscin | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/r+adipiscin 
```




#### delete /stores/order/{orderId}
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| orderId | path | string | yes | ID of the order that needs to be deleted | sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, s | 

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/sapien%2C+bibendum+at+placerat+sit+amet%2C+volutpat+sed+lacus.+Nulla+justo+arcu%2C+s 
```





### Resource : users
#### post /users
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#objectproperty_57cc3703407f5) | Created user object | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users 
Content-Type: 
Content-Length: 816
{
    "id": 9170858463864029184,
    "username": "ngue quis nec tellus. Morbi consequat mi id eros viverra ullam",
    "firstName": "ger ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem e",
    "lastName": "orem eros. Suspendisse eget nibh pulvinar, vest",
    "email": "mod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus",
    "password": " eu bibendum orci. Sed eros massa, v",
    "phone": "ce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh",
    "userStatus": -1184653301
}
```

* <p name="objectproperty_57cc3703407f5">Object body :</p> 

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
| body | body | array | [ [schema/items/schema](#schema_57cc370341756) ] | List of user object |  | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithArray 
Content-Type: 
Content-Length: 859
[
    {
        "id": -6590685688612519936,
        "username": ". Donec ultricies nibh eu ",
        "firstName": " ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet.",
        "lastName": "amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facili",
        "email": "aliquam enim, id feugiat magna elit ",
        "password": "landit, bibendum tortor ac, congue er",
        "phone": "enti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignis",
        "userStatus": -1579410588
    }
]
```

* <p name="schema_57cc370341756">Object schema/items/schema :</p>

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
| body | body | array | [ [schema/items/schema](#schema_57cc3703430ea) ] | List of user object |  | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithList 
Content-Type: 
Content-Length: 758
[
    {
        "id": -6805931908841603072,
        "username": "ur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel ",
        "firstName": "ignissim, tincid",
        "lastName": " ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, ve",
        "email": ", gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem",
        "password": "ectetur adipiscing elit. Suspendisse just",
        "phone": "m gravida pellentesque. Nullam",
        "userStatus": 254867503
    }
]
```

* <p name="schema_57cc3703430ea">Object schema/items/schema :</p>

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
| username | query | string | The user name for login | a ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ul | 
| password | query | string | The password for login in clear text | facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=a%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ul&password=facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est 
```





#### get /users/logout




#### get /users/{username}

* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes | The name that needs to be fetched. Use user1 for testing. | h sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor a | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/h+sollicitudin+et.+Curabitur+pulvinar+metus+massa%2C+malesuada+facilisis+sapien+finibus+at.+Nullam+finibus+urna+vel+auctor+fringilla.+Mauris+eu+tortor+blandit%2C+bibendum+tortor+a 
```




#### put /users/{username}
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Required | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes |  | name that need to be deleted | estie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis | 
| body | body | object |  | [parameters/body](#objectproperty_57cc37034648c) | Updated user object |  | 

* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/users/estie+congue.+Nunc+et+lorem+eros.+Suspendisse+eget+nibh+pulvinar%2C+vestibulum+magna+ut%2C+suscipit+est.+Etiam+varius+lobortis 
Content-Type: 
Content-Length: 744
{
    "id": 438537429599649792,
    "username": "ectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem e",
    "firstName": "msan tinci",
    "lastName": "s urna vel auctor fringilla. Ma",
    "email": " vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue inter",
    "password": "m magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, moles",
    "phone": "sectetur adipiscing elit. Integer ipsum sapien, bibe",
    "userStatus": 1855576616
}
```

* <p name="objectproperty_57cc37034648c">Object body :</p> 

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
| username | path | string | yes | The name that needs to be deleted | gnissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed | 

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/users/gnissim+risus+non+felis+scelerisque+aliquet.+Phasellus+faucibus+urna+arcu%2C+et+dignissim+augue+interdum+sed.+Vestibulum+eget+luctus+metus%2C+eu+bibendum+orci.+Sed 
```







---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

