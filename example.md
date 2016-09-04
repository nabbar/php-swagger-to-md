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
| body | body | object | [parameters/body](#objectproperty_57cc38467e77d) | Pet object that needs to be added to the store | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 571
{
    "id": 2639400730745634816,
    "category": {
        "id": -5127832587942756352,
        "name": "tricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed"
    },
    "name": "doggie",
    "photoUrls": [
        " elit. Integer ipsum sapien, bi"
    ],
    "tags": [
        {
            "id": 8992341695848775680,
            "name": "ricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus"
        }
    ],
    "status": " volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsu"
}
```

* <p name="objectproperty_57cc3846751aa">Object category :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| id | int64 | 3385318485704835072 | 
| name | string | elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. M | 

* <p name="schema_57cc38467939d">Object photoUrls/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| schema | string | , finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed | 

* <p name="schema_57cc38467de92">Object tags/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| id | int64 | 3569243356280127488 | 
| name | string |  non lec | 

* <p name="objectproperty_57cc38467e77d">Object body :</p> 

| Name | Type | Required | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | int64 |  |  |  | 9148383651623337984 | 
| category |  |  | [schema/properties/category](#objectproperty_57cc3846751aa) |  |  | 
| name | string | yes |  |  | doggie | 
| photoUrls | array | yes | [ [photoUrls/items/schema](#schema_57cc38467939d) ] |  |  | 
| tags | array |  | [ [tags/items/schema](#schema_57cc38467de92) ] |  |  | 
| status | string |  |  | pet status in the store |  maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis e | 




#### put /pets

* Request Parameters :
  * Content-Type Accepted : application/json, application/xml

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#objectproperty_57cc3846885a7) | Pet object that needs to be added to the store | 

* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 731
{
    "id": 8518387184242262016,
    "category": {
        "id": -1850198690514337792,
        "name": "uere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volut"
    },
    "name": "doggie",
    "photoUrls": [
        "a vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur a"
    ],
    "tags": [
        {
            "id": -3053313257411444736,
            "name": "s nec massa egestas, sed mollis est molestie. Aene"
        }
    ],
    "status": "tricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi i"
}
```

* <p name="objectproperty_57cc3846872d7">Object category :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| id | int64 | 3429335385023447040 | 
| name | string | llu | 

* <p name="schema_57cc384687792">Object photoUrls/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| schema | string |  Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu | 

* <p name="schema_57cc384687c95">Object tags/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| id | int64 | -8143187830630252544 | 
| name | string | lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facili | 

* <p name="objectproperty_57cc3846885a7">Object body :</p> 

| Name | Type | Required | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | int64 |  |  |  | 7448894341323423744 | 
| category |  |  | [schema/properties/category](#objectproperty_57cc3846872d7) |  |  | 
| name | string | yes |  |  | doggie | 
| photoUrls | array | yes | [ [photoUrls/items/schema](#schema_57cc384687792) ] |  |  | 
| tags | array |  | [ [tags/items/schema](#schema_57cc384687c95) ] |  |  | 
| status | string |  |  | pet status in the store | tis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Done | 





#### get /pets/findByStatus
Multiple status values can be provided with comma seperated strings
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| status | query | array | [ [status/items/schema](#schema_57cc38468a439) ] | Status values that need to be considered for filter | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByStatus 
```

* <p name="schema_57cc38468a439">Object status/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| schema | string | elerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel | 





#### get /pets/findByTags
Muliple tags can be provided with comma seperated strings. Use tag1, tag2, tag3 for testing.
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| tags | query | array | [ [tags/items/schema](#schema_57cc38468af85) ] | Tags to filter by | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByTags 
```

* <p name="schema_57cc38468af85">Object tags/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| schema | string | vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scel | 





#### get /pets/{petId}
Returns a pet when ID < 10.  ID > 10 or nonintegers will simulate API error conditions
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| petId | path | int64 | yes | ID of pet that needs to be fetched | -7405555840679149568 | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/-7405555840679149568 
```




#### post /pets/{petId}

* Request Parameters :
  * Content-Type Accepted : application/x-www-form-urlencoded

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| petId | path | string | yes | ID of pet that needs to be updated | nte sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultri | 
| name | formData | string | yes | Updated name of the pet | stas v | 
| status | formData | string | yes | Updated status of the pet | er felis. Fusce ac | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets/nte+sit+amet+sagittis.+In+non+lectus+eu+nunc+interdum+laoreet+a+ut+dui.+Sed+eu+nulla+malesuada%2C+egestas+velit+id%2C+semper+felis.+Fusce+ac+dui+nisl.+Donec+ultri 
Content-Type: multipart/form-data, boundary=57cc38468c448
Content-Length: 150
--57cc38468c448
content-disposition: form-data; name="name"

stas v
--57cc38468c448
content-disposition: form-data; name="status"

er felis. Fusce ac
```




#### delete /pets/{petId}

* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| api_key | header | string | yes |  |  Pellentesque vulputate s | 
| petId | path | int64 | yes | Pet id to delete | -2907174967940481024 | 

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/-2907174967940481024 
api_key:  Pellentesque vulputate s
```





### Resource : stores
#### post /stores/order

* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#objectproperty_57cc38468dcb9) | order placed for purchasing the pet | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/stores/order 
Content-Type: 
Content-Length: 342
{
    "id": -3808540362574659584,
    "petId": 988681444106698752,
    "quantity": 1209381984,
    "shipDate": "2016-09-04T15:05:42+00:00",
    "status": "cus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt",
    "complete": 0
}
```

* <p name="objectproperty_57cc38468dcb9">Object body :</p> 

| Name | Type | Description | Example |  
| :---: | :---: | :--- | :--- |  
| id | int64 |  | 7494161071830204416 | 
| petId | int64 |  | 1526672105620373504 | 
| quantity | int32 |  | -1903355438 | 
| shipDate | date-time |  | 2016-09-04T15:05:42+00:00 | 
| status | string | Order Status | lum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisqu | 
| complete | boolean |  | 1 | 





#### get /stores/order/{orderId}
For valid response try integer IDs with value <= 5 or > 10. Other values will generated exceptions
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| orderId | path | string | yes | ID of pet that needs to be fetched | c tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, ves | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/c+tellus.+Morbi+consequat+mi+id+eros+viverra+ullamcorper.+Fusce+nec+est+quam.+Pellentesque+vulputate+sapien+at+turpis+molestie+congue.+Nunc+et+lorem+eros.+Suspendisse+eget+nibh+pulvinar%2C+ves 
```




#### delete /stores/order/{orderId}
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| orderId | path | string | yes | ID of the order that needs to be deleted | odales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. E | 

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/odales+ac+commodo+quis%2C+laoreet+a+ipsum.+Duis+sem+elit%2C+posuere+eu+facilisis+nec%2C+tempus+ac+ipsum.+Ut+molestie+aliquet+est%2C+posuere+tincidunt+elit.+E 
```





### Resource : users
#### post /users
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#objectproperty_57cc38469015e) | Created user object | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users 
Content-Type: 
Content-Length: 973
{
    "id": 5896514270866178048,
    "username": "us orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Done",
    "firstName": "e tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est l",
    "lastName": " dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque",
    "email": " eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dign",
    "password": "s in eros. Mauris sollicitudin varius ",
    "phone": " ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur co",
    "userStatus": -1884052263
}
```

* <p name="objectproperty_57cc38469015e">Object body :</p> 

| Name | Type | Description | Example |  
| :---: | :---: | :--- | :--- |  
| id | int64 |  | -1440533036100747264 | 
| username | string |  | orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Maur | 
| firstName | string |  | suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringil | 
| lastName | string |  | sa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Ma | 
| email | string |  | or blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing e | 
| password | string |  | sequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec moles | 
| phone | string |  | apibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, nec condi | 
| userStatus | int32 | User Status | -2041133130 | 





#### post /users/createWithArray

* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| body | body | array | [ [schema/items/schema](#schema_57cc3846912a3) ] | List of user object |  | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithArray 
Content-Type: 
Content-Length: 1545
[
    {
        "id": 3886342831853273088,
        "username": "odales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, vol",
        "firstName": "gestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis ",
        "lastName": "sequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc ",
        "email": "um fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauri",
        "password": "orbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lob",
        "phone": " Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus",
        "userStatus": -1426530825
    }
]
```

* <p name="schema_57cc3846912a3">Object schema/items/schema :</p>

| Name | Type | Description | Example |  
| :---: | :---: | :--- | :--- |  
| id | int64 |  | 3857213869730562048 | 
| username | string |  | . Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volu | 
| firstName | string |  | efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus  | 
| lastName | string |  | ignissim aliquam. N | 
| email | string |  | que porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed variu | 
| password | string |  | , malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, l | 
| phone | string |  | , lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor ac | 
| userStatus | int32 | User Status | 1140968041 | 





#### post /users/createWithList

* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| body | body | array | [ [schema/items/schema](#schema_57cc384692eee) ] | List of user object |  | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithList 
Content-Type: 
Content-Length: 886
[
    {
        "id": 3730498053732302848,
        "username": "ui. Sed eu nulla malesu",
        "firstName": " malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros ",
        "lastName": "m at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec",
        "email": "bus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat digniss",
        "password": " ornare purus ultrices nec. Vestibulum elementum felis sit amet ips",
        "phone": "m sapien, bibendum at plac",
        "userStatus": -369330194
    }
]
```

* <p name="schema_57cc384692eee">Object schema/items/schema :</p>

| Name | Type | Description | Example |  
| :---: | :---: | :--- | :--- |  
| id | int64 |  | -6600019563079794688 | 
| username | string |  | us ac qu | 
| firstName | string |  |  aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, | 
| lastName | string |  |  at placerat sit a | 
| email | string |  | ltricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauri | 
| password | string |  | as velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pelle | 
| phone | string |  | luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. S | 
| userStatus | int32 | User Status | -1193508043 | 





#### get /users/login

* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| username | query | string | The user name for login | el ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum  | 
| password | query | string | The password for login in clear text | molestie aliquet est, posue | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=el%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20&password=molestie%20aliquet%20est%2C%20posue 
```





#### get /users/logout




#### get /users/{username}

* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes | The name that needs to be fetched. Use user1 for testing. | eque erat vitae odio. Sed sed neque dignissim, imperdiet | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/eque+erat+vitae+odio.+Sed+sed+neque+dignissim%2C+imperdiet 
```




#### put /users/{username}
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Required | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes |  | name that need to be deleted | licitudin varius purus, nec co | 
| body | body | object |  | [parameters/body](#objectproperty_57cc3846966f4) | Updated user object |  | 

* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/users/licitudin+varius+purus%2C+nec+co 
Content-Type: 
Content-Length: 897
{
    "id": 4686196734576033792,
    "username": "m dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna e",
    "firstName": " Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere",
    "lastName": "a. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semp",
    "email": "us, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat.",
    "password": "la ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ull",
    "phone": " Aenean quam nisi, posuere sed vari",
    "userStatus": -1191929423
}
```

* <p name="objectproperty_57cc3846966f4">Object body :</p> 

| Name | Type | Description | Example |  
| :---: | :---: | :--- | :--- |  
| id | int64 |  | -1158300680562147328 | 
| username | string |  | e sit amet sagittis. In non lectus eu nunc interdum laore | 
| firstName | string |  | onsectetur sed ante sit amet sagittis. | 
| lastName | string |  | ros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies,  | 
| email | string |  | r vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auct | 
| password | string |  |  volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libe | 
| phone | string |  | c ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus  | 
| userStatus | int32 | User Status | 254455876 | 




#### delete /users/{username}
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes | The name that needs to be deleted | s condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iac | 

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/users/s+condimentum+eget%2C+tristique+ut+quam.+Maecenas+et+velit+dignissim%2C+tincidunt+justo+quis%2C+iac 
```







---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

