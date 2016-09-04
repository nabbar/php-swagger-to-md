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
| body | body | object | [#/paths//pets/post/parameters/0](#toto) | Pet object that needs to be added to the store | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 963
{
    "id": -599260392920711168,
    "category": {
        "id": -906566217777545216,
        "name": "itor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretiu"
    },
    "name": "doggie",
    "photoUrls": [
        "bendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut q"
    ],
    "tags": [
        {
            "id": -6341695413577318400,
            "name": "psum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tinci"
        }
    ],
    "status": "at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh soll"
}
```



#### put /pets

* Request Parameters :
  * Content-Type Accepted : application/json, application/xml


| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [#/paths//pets/put/parameters/0](#toto) | Pet object that needs to be added to the store | 


* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 756
{
    "id": 3000837961169240064,
    "category": {
        "id": 5890429710957019136,
        "name": "etus et, molestie pretium tortor. Praesent interdum fringilla orci, gravi"
    },
    "name": "doggie",
    "photoUrls": [
        "cilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet v"
    ],
    "tags": [
        {
            "id": -9045986095073853440,
            "name": "ur adipiscing elit. Integer ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis"
        }
    ],
    "status": "nar, ves"
}
```




#### get /pets/findByStatus
Multiple status values can be provided with comma seperated strings
* Request Parameters :
  * Content-Type Accepted : 


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


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| petId | path | int64 | yes | ID of pet that needs to be fetched | 5012256400986865664 | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/5012256400986865664 
```



#### post /pets/{petId}

* Request Parameters :
  * Content-Type Accepted : application/x-www-form-urlencoded


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| petId | path | string | yes | ID of pet that needs to be updated | apibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, s | 
| name | formData | string | yes | Updated name of the pet | stie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est.  | 
| status | formData | string | yes | Updated status of the pet |  lectus eu nunc inte | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets/apibus+vel+elit.+Sed+efficitur%2C+mi+sit+amet+fermentum+ultricies%2C+felis+felis+aliquam+enim%2C+id+feugiat+magna+elit+in+sapien.+Sed+malesuada%2C+velit+eu+dapibus+vehicula%2C+sem+tortor+accumsan+nibh%2C+s 
Content-Type: multipart/form-data, boundary=57cc27617eb66
Content-Length: 246
--57cc27617eb66
content-disposition: form-data; name="name"

stie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. 
--57cc27617eb66
content-disposition: form-data; name="status"

 lectus eu nunc inte
```



#### delete /pets/{petId}

* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| api_key | header | string | yes |  | nsectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turp | 
| petId | path | int64 | yes | Pet id to delete | 4323801550351761408 | 


* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/4323801550351761408 
api_key: nsectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turp
```




### Resource : stores
#### post /stores/order

* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [#/paths//stores/order/post/parameters/0](#toto) | order placed for purchasing the pet | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/stores/order 
Content-Type: 
Content-Length: 292
{
    "id": -6503965016096505856,
    "petId": 7280951967474515968,
    "quantity": 249618768,
    "shipDate": "2016-09-04T13:53:37+00:00",
    "status": "nim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare n",
    "complete": 1
}
```




#### get /stores/order/{orderId}
For valid response try integer IDs with value <= 5 or > 10. Other values will generated exceptions
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| orderId | path | string | yes | ID of pet that needs to be fetched |  ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/+ex+lorem%2C+ut+ornare+purus+ultrices+nec.+Vestibulum+elementum+felis+sit+amet+ipsum+euismod+ullamcorper.+Phasellus+sit+amet+vestibulum+quam.+Morbi+tincidunt+pretium+sodales.+Etiam+dignissim+risus+non+felis+scelerisque+aliquet.+Phasellus+faucibus+urna+arcu 
```



#### delete /stores/order/{orderId}
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| orderId | path | string | yes | ID of the order that needs to be deleted | mentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim | 


* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/mentum+eget%2C+tristique+ut+quam.+Maecenas+et+velit+dignissim%2C+tincidunt+justo+quis%2C+iaculis+odio.+Mauris+volutpat+dignissim 
```




### Resource : users
#### post /users
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [#/paths//users/post/parameters/0](#toto) | Created user object | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users 
Content-Type: 
Content-Length: 956
{
    "id": -6745942288142172160,
    "username": "ibulum elementum felis sit am",
    "firstName": "el metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada ",
    "lastName": "en at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis p",
    "email": "i nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamco",
    "password": "in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauri",
    "phone": "felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, nec condimentum tellus s",
    "userStatus": -582935646
}
```




#### post /users/createWithArray

* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| body | body | array | [#/paths//users/createWithArray/post/parameters/0/schema](#testtoto) | List of user object |  | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithArray 
Content-Type: 
Content-Length: 1070
[
    {
        "id": -6857874500290084864,
        "username": "at. Nullam vel metus ac quam gravida pellentesque. Nullam ultricies turpis nec dignissim aliquam. Nunc sed e",
        "firstName": "lisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium p",
        "lastName": "porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc in",
        "email": "Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec co",
        "password": "q",
        "phone": "n sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, nec condime",
        "userStatus": -1044908729
    }
]
```




#### post /users/createWithList

* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| body | body | array | [#/paths//users/createWithList/post/parameters/0/schema](#testtoto) | List of user object |  | 


* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithList 
Content-Type: 
Content-Length: 933
[
    {
        "id": 791582461430595584,
        "username": "itur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue er",
        "firstName": "piscing elit. Suspendisse justo turpis,",
        "lastName": "et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, b",
        "email": "estie, eros in pretium pulvinar, est leo vehicula lectus, a",
        "password": "lvinar, est leo vehicula",
        "phone": "id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit",
        "userStatus": -119104749
    }
]
```




#### get /users/login

* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| username | query | string | The user name for login | mentum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. | 
| password | query | string | The password for login in clear text | n et. Curabitur pulvinar metus massa, malesuada facilisis sapien fi | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=mentum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.&password=n%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20fi 
```




#### get /users/logout



#### get /users/{username}

* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes | The name that needs to be fetched. Use user1 for testing. | itur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius | 


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/itur%2C+mi+sit+amet+fermentum+ultricies%2C+felis+felis+aliquam+enim%2C+id+feugiat+magna+elit+in+sapien.+Sed+malesuada%2C+velit+eu+dapibus+vehicula%2C+sem+tortor+accumsan+nibh%2C+sed+pellentesque+enim+metus+in+eros.+Mauris+sollicitudin+varius 
```



#### put /users/{username}
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes |  | name that need to be deleted | ing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada,  | 
| body | body | object |  | [#/paths//users/{username}/put/parameters/1](#toto) | Updated user object |  | 


* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/users/ing+elit.+Suspendisse+justo+turpis%2C+lacinia+id+tempor+sed%2C+dapibus+vel+elit.+Sed+efficitur%2C+mi+sit+amet+fermentum+ultricies%2C+felis+felis+aliquam+enim%2C+id+feugiat+magna+elit+in+sapien.+Sed+malesuada%2C+ 
Content-Type: 
Content-Length: 1361
{
    "id": -395143755805491200,
    "username": "ien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapi",
    "firstName": "o arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. ",
    "lastName": "oreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi ",
    "email": "ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Ph",
    "password": " velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet vari",
    "phone": "Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et d",
    "userStatus": -1224194292
}
```



#### delete /users/{username}
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes | The name that needs to be deleted | retium sodales. Etiam dignissim risus non felis scelerisque alique | 


* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/users/retium+sodales.+Etiam+dignissim+risus+non+felis+scelerisque+alique 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

