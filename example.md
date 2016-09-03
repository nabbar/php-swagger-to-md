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
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| body | body | object |  no |  |  |  | [#/paths//pets/post/parameters/0](#testtoto) |  |  | Pet object that needs to be added to the store |

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 876
{
    "id": -4066115469780713472,
    "category": {
        "id": -4431252737220411392,
        "name": "nt interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel"
    },
    "name": "doggie",
    "photoUrls": [
        " Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neq"
    ],
    "tags": [
        {
            "id": -1921613310768185344,
            "name": "rat sit amet, volutpat sed lacus. Nulla justo arcu, sodales a"
        }
    ],
    "status": "arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere ti"
}
```



#### put /pets

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| body | body | object |  no |  |  |  | [#/paths//pets/put/parameters/0](#testtoto) |  |  | Pet object that needs to be added to the store |

* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 911
{
    "id": 1543525797808046080,
    "category": {
        "id": 589865280809730048,
        "name": "allis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vit"
    },
    "name": "doggie",
    "photoUrls": [
        "am dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit di"
    ],
    "tags": [
        {
            "id": 7404817110599204864,
            "name": "m eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et v"
        }
    ],
    "status": "gue eros. Lorem ipsum dolor sit amet, consectetur adipisc"
}
```




#### get /pets/findByStatus
Multiple status values can be provided with comma seperated strings
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| status | query | array |  no |  |  |  | [#/paths//pets/findByStatus/get/parameters/0](#testtoto) |  |  | Status values that need to be considered for filter |

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByStatus 
```




#### get /pets/findByTags
Muliple tags can be provided with comma seperated strings. Use tag1, tag2, tag3 for testing.
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| tags | query | array |  no |  |  |  | [#/paths//pets/findByTags/get/parameters/0](#testtoto) |  |  | Tags to filter by |

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByTags 
```




#### get /pets/{petId}
Returns a pet when ID < 10.  ID > 10 or nonintegers will simulate API error conditions
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| petId | path | integer, formatted as : int64 |  no |  |  |  |  |  |  | ID of pet that needs to be fetched |

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/-6860456780657328128 
```



#### post /pets/{petId}

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| petId | path | string |  no |  |  |  |  |  |  | ID of pet that needs to be updated |
| name | formData | string |  no |  |  |  |  |  |  | Updated name of the pet |
| status | formData | string |  no |  |  |  |  |  |  | Updated status of the pet |

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets/+ipsum+euismod+ullamcorper.+Phasellus+sit+amet+vestibulum+qu 
Content-Type: multipart/form-data, boundary=57cadcdf3e38c
Content-Length: 391
--57cadcdf3e38c
content-disposition: form-data; name="name"

ulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar 
--57cadcdf3e38c
content-disposition: form-data; name="status"

mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vul
```



#### delete /pets/{petId}

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| api_key | header | string |  no |  |  |  |  |  |  |  |
| petId | path | integer, formatted as : int64 |  no |  |  |  |  |  |  | Pet id to delete |

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/-7268085598370398208 
api_key: estie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ul
```




### Resource : stores
#### post /stores/order

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| body | body | object |  no |  |  |  | [#/paths//stores/order/post/parameters/0](#testtoto) |  |  | order placed for purchasing the pet |

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/stores/order 
Content-Type: 
Content-Length: 379
{
    "id": 3411569227033739264,
    "petId": 424281702999785472,
    "quantity": 783090717,
    "shipDate": "2016-09-03T14:23:27+00:00",
    "status": "o. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales,",
    "complete": 1
}
```




#### get /stores/order/{orderId}
For valid response try integer IDs with value <= 5 or > 10. Other values will generated exceptions
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| orderId | path | string |  no |  |  |  |  |  |  | ID of pet that needs to be fetched |

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/um+eget%2C+tristique+ut+quam.+Maecenas+et+velit+dignissim%2C+tincidunt+justo+quis%2C+iaculis+odio.+Mauris+volutpat+dignissim+mi+eget+lacinia.+In+nisi+odio%2C+porta+u 
```



#### delete /stores/order/{orderId}
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| orderId | path | string |  no |  |  |  |  |  |  | ID of the order that needs to be deleted |

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/t+amet+vestibulum+quam.+Morbi+tincidunt+pretium+sodales.+Etiam+dignissim+risus+non+felis+scelerisque+aliquet.+Phasellus+faucibus+urna+arcu%2C+et+dignissim+augue+interdum+sed.+Vestibulum+eget+luctus+metus%2C+eu+bibendum+orci.+Sed+eros+massa%2C+vehicula+ 
```




### Resource : users
#### post /users
This can only be done by the logged in user.
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| body | body | object |  no |  |  |  | [#/paths//users/post/parameters/0](#testtoto) |  |  | Created user object |

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users 
Content-Type: 
Content-Length: 788
{
    "id": -4560362099838025728,
    "username": "isl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lore",
    "firstName": "ro, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in p",
    "lastName": "ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis sceleri",
    "email": ", nec cond",
    "password": "issim augue interdum sed. Vestibulum eget luctus metus, eu",
    "phone": "t dui. Sed eu nulla malesuada, egestas velit id, semper fe",
    "userStatus": -1603691274
}
```




#### post /users/createWithArray

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| body | body | array |  no |  |  |  | [#/paths//users/createWithArray/post/parameters/0/schema](#testtoto) |  |  | List of user object |

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithArray 
Content-Type: 
Content-Length: 1169
[
    {
        "id": -5374186968533958656,
        "username": " Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimen",
        "firstName": "at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrer",
        "lastName": "lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et",
        "email": "rtor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, nec condimentum tellus sagittis at. Nullam vel metus ac quam gravi",
        "password": "pibus vel elit. Sed efficitur, mi sit am",
        "phone": "tium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestib",
        "userStatus": 1033044789
    }
]
```




#### post /users/createWithList

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| body | body | array |  no |  |  |  | [#/paths//users/createWithList/post/parameters/0/schema](#testtoto) |  |  | List of user object |

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithList 
Content-Type: 
Content-Length: 961
[
    {
        "id": -6432050388634959872,
        "username": "lit eu dapi",
        "firstName": "us at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue",
        "lastName": "ectetur adipiscing elit. Integer ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Dui",
        "email": "x, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam fi",
        "password": "l ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium s",
        "phone": "quam. Maecenas et velit dignissim, tincidunt ",
        "userStatus": 913681517
    }
]
```




#### get /users/login

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| username | query | string |  no |  |  |  |  |  |  | The user name for login |
| password | query | string |  no |  |  |  |  |  |  | The password for login in clear text |

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dign&password=%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Don 
```




#### get /users/logout


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/logout 
```




#### get /users/{username}

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| username | path | string |  no |  |  |  |  |  |  | The name that needs to be fetched. Use user1 for testing. |

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/ur+adipiscing+elit.+Integer+ipsum+sapien%2C+bibendum+at+placerat+sit+amet%2C+volutpat+sed+lacus.+Nulla+justo+arcu%2C+sodales+ac+commodo+quis%2C+laoreet+a+ipsum.+Duis+sem+elit%2C+posuere+eu+facilisis+nec%2C+tempus+ac+ipsum.+Ut+molestie+al 
```



#### put /users/{username}
This can only be done by the logged in user.
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| username | path | string |  no |  |  |  |  |  |  | name that need to be deleted |
| body | body | object |  no |  |  |  | [#/paths//users/{username}/put/parameters/1](#testtoto) |  |  | Updated user object |

* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/users/molestie.+Aenean+quam+nisi%2C+posuere+sed+varius+sodales%2C+sagittis+sed+ex.+Vivamus+id+vulputate+odio.+Donec+quis+facilisis+arcu%2C+vel+ultrices+augue.+Suspendisse+ 
Content-Type: 
Content-Length: 1334
{
    "id": 1952404455299219456,
    "username": "r. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel aucto",
    "firstName": "rat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, ma",
    "lastName": "uspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed",
    "email": "ur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius pur",
    "password": "m finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit",
    "phone": "t. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus i",
    "userStatus": 254804374
}
```



#### delete /users/{username}
This can only be done by the logged in user.
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| username | path | string |  no |  |  |  |  |  |  | The name that needs to be deleted |

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/users/ada%2C+egestas+velit+id%2C+semper+felis.+Fusce+ac+dui+nisl.+Donec+ultricies+nibh+eu+leo+consectetur+congue+quis+nec+tellus.+Morbi+consequat+mi+id+eros+viverra+ullamcorper.+Fusce+nec+est+qu 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

