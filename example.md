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
Content-Length: 861
{
    "id": 7687543241347956736,
    "category": {
        "id": -7173069376910786560,
        "name": " consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id er"
    },
    "name": "doggie",
    "photoUrls": [
        "din et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finib"
    ],
    "tags": [
        {
            "id": 295926528049414144,
            "name": "tor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipisc"
        }
    ],
    "status": "u dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, nec condimentum"
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
Content-Length: 680
{
    "id": 6495107706905427968,
    "category": {
        "id": -4861194309468160000,
        "name": "uis condimentum eget, tristique ut quam. Maecenas et velit dignissi"
    },
    "name": "doggie",
    "photoUrls": [
        "sim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet "
    ],
    "tags": [
        {
            "id": 8123143450188054528,
            "name": "ien finibus at. Nullam finibus urna"
        }
    ],
    "status": "bulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo qui"
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
| petId | path | integer, formatted as : int64 | yes | ID of pet that needs to be fetched | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/639083200840204288 
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
HTTP 1.1 post http://petstore.swagger.io/v2/pets/+tortor.+Praesent+interdum+fringilla+orci%2C+gravida+ornare 
Content-Type: multipart/form-data, boundary=57cae9f59edfc
Content-Length: 391
--57cae9f59edfc
content-disposition: form-data; name="name"

 sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu d
--57cae9f59edfc
content-disposition: form-data; name="status"

 vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in
```



#### delete /pets/{petId}

* Request Parameters :
| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :---: |  
| api_key | header | string | yes |  | 
| petId | path | integer, formatted as : int64 | yes | Pet id to delete | 

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/-8694875885880213504 
api_key: ar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit en
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
Content-Length: 303
{
    "id": -4353484546075787264,
    "petId": -5246050819735814144,
    "quantity": -106308552,
    "shipDate": "2016-09-03T15:19:17+00:00",
    "status": "e quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turp",
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
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/lputate+odio.+Donec+quis+facilisis+arcu%2C+vel+ultrices+augue.+Suspendisse+potenti.+Mauris+vehicula+ex+lorem%2C+ut+ornare+purus+ultrices+nec.+Vestibulum+elementum+felis+sit+amet+ipsum+euismod+ullamcorper.+Phasellus+sit+amet+vestibulum+quam.+M 
```



#### delete /stores/order/{orderId}
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors
* Request Parameters :
| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :---: |  
| orderId | path | string | yes | ID of the order that needs to be deleted | 

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/i+sit+amet+fermentum+ultricies%2C+felis+felis+aliquam+enim%2C+id+feugiat+ 
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
Content-Length: 870
{
    "id": -8576402163662585856,
    "username": "lerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris v",
    "firstName": "ada, egestas veli",
    "lastName": "onec ultricies nibh eu leo consectetur congue quis n",
    "email": " In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ult",
    "password": "cinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, se",
    "phone": "sem elit, posuere eu facilisis nec, temp",
    "userStatus": 484315625
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
Content-Length: 803
[
    {
        "id": 6071217580368986112,
        "username": "us in eros. Mauris sollicit",
        "firstName": "ornare purus ultrices nec. Vestibulum elementum fe",
        "lastName": "or. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interd",
        "email": ". Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibu",
        "password": ", bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu",
        "phone": "iscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed effi",
        "userStatus": -143905404
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
Content-Length: 701
[
    {
        "id": -1648572137998385152,
        "username": "et, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris v",
        "firstName": " amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit ",
        "lastName": "pretium sodales. Etiam dignissim risus non fel",
        "email": "velit dignissim, tincidunt justo qui",
        "password": "ulis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet va",
        "phone": "en at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvi",
        "userStatus": 224602682
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
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20&password=%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20 
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
HTTP 1.1 get http://petstore.swagger.io/v2/users/lor+sit+amet%2C+consectetur+adipiscing+elit.+Suspendisse+justo+tur 
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
HTTP 1.1 put http://petstore.swagger.io/v2/users/.+Ut+molestie+aliquet+est%2C+posuere+tincidunt+elit.+Etiam+convallis+eu+ligula+non+consequat.+Pellentesque+elit+libero%2C+faucibus+luctus+ante+nec%2C+v 
Content-Type: 
Content-Length: 908
{
    "id": -1247072002393505792,
    "username": "rci. Sed eros massa, vehicula quis c",
    "firstName": " et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, ",
    "lastName": "posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat d",
    "email": "arius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultr",
    "password": "ec est quam. Pellentesque vulputat",
    "phone": " consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper ",
    "userStatus": 2103162665
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
HTTP 1.1 delete http://petstore.swagger.io/v2/users/iquet+est%2C+posuere+tincidunt+elit.+Etiam+convallis+eu+ligula+non+consequat.+Pellentesque+ 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

