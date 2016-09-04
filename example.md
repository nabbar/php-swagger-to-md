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
| body | body | object | [parameters/body](#objectproperty_57cc350233e3f) | Pet object that needs to be added to the store | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 782
{
    "id": -3477098277508218880,
    "category": {
        "id": 5371526743100227584,
        "name": "orta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, eges"
    },
    "name": "doggie",
    "photoUrls": [
        " varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum f"
    ],
    "tags": [
        {
            "id": -1666219608861835264,
            "name": " Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus u"
        }
    ],
    "status": ", velit eu dapibus vehicula, sem tortor accumsan nib"
}
```


* <p name="objectproperty_57cc35022a58a">Object category :</p> 
| Name | Location | Type |  
| :---: | :---: | :---: |  
| id |  | int64 | 
| name |  | string | 

* <p name="schema_57cc35022e82b">Object photoUrls/items/schema :</p>
| Name | Location | Type |  
| :---: | :---: | :---: |  
|  |  | string | 

* <p name="schema_57cc350233532">Object tags/items/schema :</p>
| Name | Location | Type |  
| :---: | :---: | :---: |  
| id |  | int64 | 
| name |  | string | 

* <p name="objectproperty_57cc350233e3f">Object body :</p> 
| Name | Location | Type | Required | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :---: | :--- | :--- |  
| id |  | int64 |  |  |  |  | 
| category |  |  |  | [schema/properties/category](#objectproperty_57cc35022a58a) |  |  | 
| name |  | string | yes |  |  | doggie | 
| photoUrls |  | array | yes | [ [photoUrls/items/schema](#schema_57cc35022e82b) ] |  |  | 
| tags |  | array |  | [ [tags/items/schema](#schema_57cc350233532) ] |  |  | 
| status |  | string |  |  | pet status in the store |  | 




#### put /pets

* Request Parameters :
  * Content-Type Accepted : application/json, application/xml


| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#objectproperty_57cc35023dc70) | Pet object that needs to be added to the store | 


* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 683
{
    "id": -5553625599739691008,
    "category": {
        "id": -8665943671914364928,
        "name": "ibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum q"
    },
    "name": "doggie",
    "photoUrls": [
        " volutpat dignissim mi eget lacinia. In nisi odio, po"
    ],
    "tags": [
        {
            "id": 565178642015977472,
            "name": "dunt elit. Etiam convallis eu ligula non consequat. Pellentesqu"
        }
    ],
    "status": ". Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcor"
}
```


* <p name="objectproperty_57cc35023c943">Object category :</p> 
| Name | Location | Type |  
| :---: | :---: | :---: |  
| id |  | int64 | 
| name |  | string | 

* <p name="schema_57cc35023ce34">Object photoUrls/items/schema :</p>
| Name | Location | Type |  
| :---: | :---: | :---: |  
|  |  | string | 

* <p name="schema_57cc35023d346">Object tags/items/schema :</p>
| Name | Location | Type |  
| :---: | :---: | :---: |  
| id |  | int64 | 
| name |  | string | 

* <p name="objectproperty_57cc35023dc70">Object body :</p> 
| Name | Location | Type | Required | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :---: | :--- | :--- |  
| id |  | int64 |  |  |  |  | 
| category |  |  |  | [schema/properties/category](#objectproperty_57cc35023c943) |  |  | 
| name |  | string | yes |  |  | doggie | 
| photoUrls |  | array | yes | [ [photoUrls/items/schema](#schema_57cc35023ce34) ] |  |  | 
| tags |  | array |  | [ [tags/items/schema](#schema_57cc35023d346) ] |  |  | 
| status |  | string |  |  | pet status in the store |  | 





#### get /pets/findByStatus
Multiple status values can be provided with comma seperated strings
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| status | query | array | [ [status/items/schema](#schema_57cc35023fc54) ] | Status values that need to be considered for filter | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByStatus 
```


* <p name="schema_57cc35023fc54">Object status/items/schema :</p>
| Name | Location | Type |  
| :---: | :---: | :---: |  
|  |  | string | 





#### get /pets/findByTags
Muliple tags can be provided with comma seperated strings. Use tag1, tag2, tag3 for testing.
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| tags | query | array | [ [tags/items/schema](#schema_57cc3502407cf) ] | Tags to filter by | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByTags 
```


* <p name="schema_57cc3502407cf">Object tags/items/schema :</p>
| Name | Location | Type |  
| :---: | :---: | :---: |  
|  |  | string | 





#### get /pets/{petId}
Returns a pet when ID < 10.  ID > 10 or nonintegers will simulate API error conditions
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| petId | path | int64 | yes | ID of pet that needs to be fetched | 2703805878473064448 | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/2703805878473064448 
```





#### post /pets/{petId}

* Request Parameters :
  * Content-Type Accepted : application/x-www-form-urlencoded


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| petId | path | string | yes | ID of pet that needs to be updated | quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis  | 
| name | formData | string | yes | Updated name of the pet |  sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Mae | 
| status | formData | string | yes | Updated status of the pet | t amet ipsum euismod ullamcorper. Phasellus sit amet vestibul | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets/quam+nisi%2C+posuere+sed+varius+sodales%2C+sagittis+sed+ex.+Vivamus+id+vulputate+odio.+Donec+quis+facilisis+arcu%2C+vel+ultrices+augue.+Suspendisse+potenti.+Mauris+vehicula+ex+lorem%2C+ut+ornare+purus+ultrices+nec.+Vestibulum+elementum+felis+ 
Content-Type: multipart/form-data, boundary=57cc350241ce8
Content-Length: 431
--57cc350241ce8
content-disposition: form-data; name="name"

 sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Mae
--57cc350241ce8
content-disposition: form-data; name="status"

t amet ipsum euismod ullamcorper. Phasellus sit amet vestibul
```





#### delete /pets/{petId}

* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| api_key | header | string | yes |  | se potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non f | 
| petId | path | int64 | yes | Pet id to delete | 2028696354515058688 | 


* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/2028696354515058688 
api_key: se potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non f
```






### Resource : stores
#### post /stores/order

* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#objectproperty_57cc35024354a) | order placed for purchasing the pet | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/stores/order 
Content-Type: 
Content-Length: 420
{
    "id": 6816222680547590144,
    "petId": 4833540312129339392,
    "quantity": -1863219079,
    "shipDate": "2016-09-04T14:51:46+00:00",
    "status": " nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare pur",
    "complete": 0
}
```


* <p name="objectproperty_57cc35024354a">Object body :</p> 
| Name | Location | Type | Description |  
| :---: | :---: | :---: | :--- |  
| id |  | int64 |  | 
| petId |  | int64 |  | 
| quantity |  | int32 |  | 
| shipDate |  | date-time |  | 
| status |  | string | Order Status | 
| complete |  | boolean |  | 





#### get /stores/order/{orderId}
For valid response try integer IDs with value <= 5 or > 10. Other values will generated exceptions
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| orderId | path | string | yes | ID of pet that needs to be fetched |  lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viver | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/+lectus+eu+nunc+interdum+laoreet+a+ut+dui.+Sed+eu+nulla+malesuada%2C+egestas+velit+id%2C+semper+felis.+Fusce+ac+dui+nisl.+Donec+ultricies+nibh+eu+leo+consectetur+congue+quis+nec+tellus.+Morbi+consequat+mi+id+eros+viver 
```





#### delete /stores/order/{orderId}
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| orderId | path | string | yes | ID of the order that needs to be deleted | mmodo quis, laoreet a ipsum. Duis  | 


* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/mmodo+quis%2C+laoreet+a+ipsum.+Duis+ 
```






### Resource : users
#### post /users
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#objectproperty_57cc350245ac9) | Created user object | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users 
Content-Type: 
Content-Length: 673
{
    "id": 503388820134166528,
    "username": "at dictum neque. Done",
    "firstName": "idunt. Aliquam enim dui, consectetur sit ",
    "lastName": "ed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliqu",
    "email": "ermentum ultricies, felis felis aliquam enim, i",
    "password": "io. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ",
    "phone": " molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum ",
    "userStatus": 1130494117
}
```


* <p name="objectproperty_57cc350245ac9">Object body :</p> 
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





#### post /users/createWithArray

* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| body | body | array | [ [schema/items/schema](#schema_57cc350246c21) ] | List of user object |  | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithArray 
Content-Type: 
Content-Length: 1068
[
    {
        "id": -1084384121599295488,
        "username": "am. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit a",
        "firstName": "d ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasell",
        "lastName": " sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulput",
        "email": "ndrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent in",
        "password": "tudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum",
        "phone": "tudin varius purus, nec condimentum tellus sagittis at. Nullam vel metus ac quam gravida pellentesque. Nullam ultrici",
        "userStatus": -553741228
    }
]
```


* <p name="schema_57cc350246c21">Object schema/items/schema :</p>
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
| body | body | array | [ [schema/items/schema](#schema_57cc350248872) ] | List of user object |  | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithList 
Content-Type: 
Content-Length: 1335
[
    {
        "id": 8457534554289209344,
        "username": "eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla o",
        "firstName": "met, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque e",
        "lastName": "uris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pret",
        "email": " elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec",
        "password": "les ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque e",
        "phone": "nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultri",
        "userStatus": -2001193267
    }
]
```


* <p name="schema_57cc350248872">Object schema/items/schema :</p>
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
| username | query | string | The user name for login | nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspend | 
| password | query | string | The password for login in clear text | equat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin  | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspend&password=equat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20 
```






#### get /users/logout




#### get /users/{username}

* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes | The name that needs to be fetched. Use user1 for testing. | d varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauri | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/d+varius+sodales%2C+sagittis+sed+ex.+Vivamus+id+vulputate+odio.+Donec+quis+facilisis+arcu%2C+vel+ultrices+augue.+Suspendisse+potenti.+Mauri 
```





#### put /users/{username}
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes |  | name that need to be deleted |  amet sagittis. In non l | 
| body | body | object |  | [parameters/body](#objectproperty_57cc35024c062) | Updated user object |  | 


* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/users/+amet+sagittis.+In+non+l 
Content-Type: 
Content-Length: 962
{
    "id": 2307363612320071680,
    "username": "o turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultric",
    "firstName": "at sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellente",
    "lastName": "bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In",
    "email": "rbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus ",
    "password": " ",
    "phone": "estie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. D",
    "userStatus": 995231802
}
```


* <p name="objectproperty_57cc35024c062">Object body :</p> 
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




#### delete /users/{username}
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes | The name that needs to be deleted | bendum orci. Sed eros massa, vehicula quis condimentum eget, tristique | 


* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/users/bendum+orci.+Sed+eros+massa%2C+vehicula+quis+condimentum+eget%2C+tristique 
```








---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

