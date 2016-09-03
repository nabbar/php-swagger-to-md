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

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| body | body | object |  no |  |  |  | [#/paths//pets/post/parameters/0](#testtoto) |  |  | Pet object that needs to be added to the store |

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 741
{
    "id": 7489015567865610240,
    "category": {
        "id": -8843171619028336640,
        "name": "quam nisi, posuere sed variu"
    },
    "name": "doggie",
    "photoUrls": [
        "esuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra u"
    ],
    "tags": [
        {
            "id": 3850085293466058752,
            "name": "nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pe"
        }
    ],
    "status": "is nec, tempus ac ipsum. Ut molestie aliquet est, posuere t"
}
```



#### put /pets

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| body | body | object |  no |  |  |  | [#/paths//pets/put/parameters/0](#testtoto) |  |  | Pet object that needs to be added to the store |

* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 888
{
    "id": -2124228813863780352,
    "category": {
        "id": 436223069292331008,
        "name": "nec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada,"
    },
    "name": "doggie",
    "photoUrls": [
        "am finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, da"
    ],
    "tags": [
        {
            "id": -2821192020482064384,
            "name": "rtor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur"
        }
    ],
    "status": "osuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volu"
}
```




#### get /pets/findByStatus
Multiple status values can be provided with comma seperated strings
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| status | query | array |  no |  |  |  | [#/paths//pets/findByStatus/get/parameters/0](#testtoto) |  |  | Status values that need to be considered for filter |

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByStatus 
```




#### get /pets/findByTags
Muliple tags can be provided with comma seperated strings. Use tag1, tag2, tag3 for testing.
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| tags | query | array |  no |  |  |  | [#/paths//pets/findByTags/get/parameters/0](#testtoto) |  |  | Tags to filter by |

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByTags 
```




#### get /pets/{petId}
Returns a pet when ID < 10.  ID > 10 or nonintegers will simulate API error conditions
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| petId | path | integer, formatted as : int64 |  no |  |  |  |  |  |  | ID of pet that needs to be fetched |

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/-5007749635968598016 
```



#### post /pets/{petId}

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| petId | path | string |  no |  |  |  |  |  |  | ID of pet that needs to be updated |
| name | formData | string |  no |  |  |  |  |  |  | Updated name of the pet |
| status | formData | string |  no |  |  |  |  |  |  | Updated status of the pet |

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets/.+Morbi+tincidunt+pretiu 
Content-Type: multipart/form-data, boundary=57cadc0cef2e6
Content-Length: 430
--57cadc0cef2e6
content-disposition: form-data; name="name"

asellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget,
--57cadc0cef2e6
content-disposition: form-data; name="status"

c maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed 
```



#### delete /pets/{petId}

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| api_key | header | string |  no |  |  |  |  |  |  |  |
| petId | path | integer, formatted as : int64 |  no |  |  |  |  |  |  | Pet id to delete |

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/2481228887804084224 
api_key:  placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posu
```




### Resource : stores
#### post /stores/order

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| body | body | object |  no |  |  |  | [#/paths//stores/order/post/parameters/0](#testtoto) |  |  | order placed for purchasing the pet |

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/stores/order 
Content-Type: 
Content-Length: 360
{
    "id": -3848526095783559168,
    "petId": -2665162185105211392,
    "quantity": 2146349237,
    "shipDate": "2016-09-03T14:19:56+00:00",
    "status": "re purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non ",
    "complete": 0
}
```




#### get /stores/order/{orderId}
For valid response try integer IDs with value <= 5 or > 10. Other values will generated exceptions
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| orderId | path | string |  no |  |  |  |  |  |  | ID of pet that needs to be fetched |

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/lerisque+aliquet.+Phasellus+faucibus+urna+arc 
```



#### delete /stores/order/{orderId}
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| orderId | path | string |  no |  |  |  |  |  |  | ID of the order that needs to be deleted |

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/isque+aliquet.+Phasellus+faucibus+urna+arcu%2C+et+dignissim+augue+interdum+sed.+Vestibulum+eget+luctus+metus%2C+eu+bibendum+orci.+Sed+eros+massa%2C+vehicula+quis+condimentum+eget%2C+tristique+ut+quam.+Maecenas+et+velit+dignissim%2C+tincidunt+justo+quis%2C+iac 
```




### Resource : users
#### post /users
This can only be done by the logged in user.
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| body | body | object |  no |  |  |  | [#/paths//users/post/parameters/0](#testtoto) |  |  | Created user object |

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users 
Content-Type: 
Content-Length: 1222
{
    "id": 1309870188107137024,
    "username": "us at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum t",
    "firstName": "dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed",
    "lastName": "urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula qu",
    "email": " quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis cond",
    "password": "gue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacini",
    "phone": "s at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur",
    "userStatus": 1202085794
}
```




#### post /users/createWithArray

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| body | body | array |  no |  |  |  | [#/paths//users/createWithArray/post/parameters/0/schema](#testtoto) |  |  | List of user object |

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithArray 
Content-Type: 
Content-Length: 750
[
    {
        "id": 1307296927171215360,
        "username": "Nullam ultricies turpis nec dignissim aliquam. Nunc sed enim n",
        "firstName": "s erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. ",
        "lastName": "x. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Maur",
        "email": "mod ullamcorper. Phasellus sit",
        "password": "m. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luc",
        "phone": "etur sed ante sit amet sagittis. In non lectus eu nunc int",
        "userStatus": 2014234648
    }
]
```




#### post /users/createWithList

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| body | body | array |  no |  |  |  | [#/paths//users/createWithList/post/parameters/0/schema](#testtoto) |  |  | List of user object |

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithList 
Content-Type: 
Content-Length: 1271
[
    {
        "id": -330263932587474944,
        "username": "unt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vest",
        "firstName": "el elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pel",
        "lastName": "s eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus v",
        "email": " arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu",
        "password": "um eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In",
        "phone": "quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo cons",
        "userStatus": -1544387185
    }
]
```




#### get /users/login

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| username | query | string |  no |  |  |  |  |  |  | The user name for login |
| password | query | string |  no |  |  |  |  |  |  | The password for login in clear text |

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=gittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20&password=vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augu 
```




#### get /users/logout


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/logout 
```




#### get /users/{username}

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| username | path | string |  no |  |  |  |  |  |  | The name that needs to be fetched. Use user1 for testing. |

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/n%2C+bibendum+at+placerat+sit+amet%2C+volutpat+sed+lacus.+Nulla 
```



#### put /users/{username}
This can only be done by the logged in user.
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| username | path | string |  no |  |  |  |  |  |  | name that need to be deleted |
| body | body | object |  no |  |  |  | [#/paths//users/{username}/put/parameters/1](#testtoto) |  |  | Updated user object |

* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/users/t+nibh+pulvinar%2C+vestibulum+magna+ut%2C+suscipit+est.+Etiam+varius+lobortis+porttitor.+Mauris+vel+ultrices+erat%2C+at+hen 
Content-Type: 
Content-Length: 945
{
    "id": -2976307650595127296,
    "username": "sce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sap",
    "firstName": "sapien, bibendum at placerat sit ame",
    "lastName": " enim dui, consectetur sit ame",
    "email": "psum dolor sit amet, consectetur adipiscing elit. Integer ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ",
    "password": "enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvi",
    "phone": " quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam co",
    "userStatus": 1055371393
}
```



#### delete /users/{username}
This can only be done by the logged in user.
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| username | path | string |  no |  |  |  |  |  |  | The name that needs to be deleted |

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/users/gnissim+mi+eget+lacinia.+In+nisi+odio%2C+porta+ut+quam+non%2C+imperdiet+varius+orci.+Donec+consectetur+sed+ante+sit+amet+sagi 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

