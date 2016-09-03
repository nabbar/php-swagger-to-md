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
| :---: | :---: | :---: | :---: | :---: | :--- |  
| body | body | object | no | [#/paths//pets/post/parameters/0](#testtoto) | Pet object that needs to be added to the store | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 690
{
    "id": -3289211604545044480,
    "category": {
        "id": 2439310071419633664,
        "name": "nsequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec "
    },
    "name": "doggie",
    "photoUrls": [
        " eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget"
    ],
    "tags": [
        {
            "id": 4322145556991311872,
            "name": "scelerisque aliquet. Phasellus"
        }
    ],
    "status": ". Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem e"
}
```



#### put /pets

* Request Parameters :

| Name | Location | Type | Required | Definition | Description |  
| :---: | :---: | :---: | :---: | :---: | :--- |  
| body | body | object | no | [#/paths//pets/put/parameters/0](#testtoto) | Pet object that needs to be added to the store | 

* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 826
{
    "id": -2377427808956710912,
    "category": {
        "id": 8332848385216217088,
        "name": "uam. Morbi tincidunt pretium sodales. Etiam dignissim "
    },
    "name": "doggie",
    "photoUrls": [
        "onsectetur adipiscing elit. Integer ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, p"
    ],
    "tags": [
        {
            "id": -7945772562267504640,
            "name": " pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sap"
        }
    ],
    "status": "ndum orci. Sed eros massa, vehicula quis condimentum eget,"
}
```




#### get /pets/findByStatus
Multiple status values can be provided with comma seperated strings
* Request Parameters :

| Name | Location | Type | Required | Definition | Description |  
| :---: | :---: | :---: | :---: | :---: | :--- |  
| status | query | array | no | [#/paths//pets/findByStatus/get/parameters/0](#testtoto) | Status values that need to be considered for filter | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByStatus 
```




#### get /pets/findByTags
Muliple tags can be provided with comma seperated strings. Use tag1, tag2, tag3 for testing.
* Request Parameters :

| Name | Location | Type | Required | Definition | Description |  
| :---: | :---: | :---: | :---: | :---: | :--- |  
| tags | query | array | no | [#/paths//pets/findByTags/get/parameters/0](#testtoto) | Tags to filter by | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByTags 
```




#### get /pets/{petId}
Returns a pet when ID < 10.  ID > 10 or nonintegers will simulate API error conditions
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| petId | path | int64 | yes | ID of pet that needs to be fetched | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/5232195753455124480 
```



#### post /pets/{petId}

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| petId | path | string | yes | ID of pet that needs to be updated | 
| name | formData | string | yes | Updated name of the pet | 
| status | formData | string | yes | Updated status of the pet | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets/+at.+Nullam+finibus+urna+vel+auctor+fringilla.+Mauris+e 
Content-Type: multipart/form-data, boundary=57caeda5b4347
Content-Length: 277
--57caeda5b4347
content-disposition: form-data; name="name"

t ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt
--57caeda5b4347
content-disposition: form-data; name="status"

suere se
```



#### delete /pets/{petId}

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| api_key | header | string | yes |  | 
| petId | path | int64 | yes | Pet id to delete | 

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/1786414728201895936 
api_key: m nisi, posuere sed varius sodales, sagittis sed ex. Vivamus
```




### Resource : stores
#### post /stores/order

* Request Parameters :

| Name | Location | Type | Required | Definition | Description |  
| :---: | :---: | :---: | :---: | :---: | :--- |  
| body | body | object | no | [#/paths//stores/order/post/parameters/0](#testtoto) | order placed for purchasing the pet | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/stores/order 
Content-Type: 
Content-Length: 253
{
    "id": 1395443777937604608,
    "petId": 8957865211679735808,
    "quantity": 989402999,
    "shipDate": "2016-09-03T15:35:01+00:00",
    "status": "ius purus, nec condimentum tellus sagittis at. Nullam vel metus ac quam gravi",
    "complete": 1
}
```




#### get /stores/order/{orderId}
For valid response try integer IDs with value <= 5 or > 10. Other values will generated exceptions
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| orderId | path | string | yes | ID of pet that needs to be fetched | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/+imperdiet+nunc+maximus%2C+finibus+erat.+Proin+id+scelerisque+ipsum.+Quisque+porta+mauris+nec+massa+egestas%2C+sed+mollis+est+molestie.+Aenea 
```



#### delete /stores/order/{orderId}
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| orderId | path | string | yes | ID of the order that needs to be deleted | 

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/ium+tortor.+Praesent+interdum+fringilla+orci%2C+gravida+ornare+nibh+sollicitud 
```




### Resource : users
#### post /users
This can only be done by the logged in user.
* Request Parameters :

| Name | Location | Type | Required | Definition | Description |  
| :---: | :---: | :---: | :---: | :---: | :--- |  
| body | body | object | no | [#/paths//users/post/parameters/0](#testtoto) | Created user object | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users 
Content-Type: 
Content-Length: 1133
{
    "id": -5810913562612203520,
    "username": "it. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pe",
    "firstName": "drerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, mal",
    "lastName": "euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque a",
    "email": "llus sagittis at. Nullam vel metus ac quam gravida pellentesque. Nullam ultricies turpis nec di",
    "password": " mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nu",
    "phone": "Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada fa",
    "userStatus": -668737867
}
```




#### post /users/createWithArray

* Request Parameters :

| Name | Location | Type | Required | Definition | Description |  
| :---: | :---: | :---: | :---: | :---: | :--- |  
| body | body | array | no | [#/paths//users/createWithArray/post/parameters/0/schema](#testtoto) | List of user object | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithArray 
Content-Type: 
Content-Length: 1129
[
    {
        "id": 7547487042179956736,
        "username": "nissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed",
        "firstName": "itur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor",
        "lastName": " lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, se",
        "email": "nissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. F",
        "password": "Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Pha",
        "phone": " velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consecte",
        "userStatus": 1002681213
    }
]
```




#### post /users/createWithList

* Request Parameters :

| Name | Location | Type | Required | Definition | Description |  
| :---: | :---: | :---: | :---: | :---: | :--- |  
| body | body | array | no | [#/paths//users/createWithList/post/parameters/0/schema](#testtoto) | List of user object | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithList 
Content-Type: 
Content-Length: 1132
[
    {
        "id": -238490398551441408,
        "username": "cinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed m",
        "firstName": "Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. ",
        "lastName": "metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse",
        "email": "n",
        "password": " nec. Vestibulum elementum felis sit amet ipsum euismod u",
        "phone": "finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi s",
        "userStatus": 1869732431
    }
]
```




#### get /users/login

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| username | query | string | no | The user name for login | 
| password | query | string | no | The password for login in clear text | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=orper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat&password=volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20 
```




#### get /users/logout


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/logout 
```




#### get /users/{username}

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| username | path | string | yes | The name that needs to be fetched. Use user1 for testing. | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/assa+egestas%2C+sed+mollis+est+molestie.+Aenean+quam+nisi%2C+posuere+sed+varius+sodales%2C+sagittis+sed+ex.+Vivamus+id+vulputate+odio.+Donec+quis+facilisis+arcu%2C+vel+ultrices+augue.+Suspendisse+potenti.+Mauris+vehic 
```



#### put /users/{username}
This can only be done by the logged in user.
* Request Parameters :

| Name | Location | Type | Required | Definition | Description |  
| :---: | :---: | :---: | :---: | :---: | :--- |  
| username | path | string | yes |  | name that need to be deleted | 
| body | body | object | no | [#/paths//users/{username}/put/parameters/1](#testtoto) | Updated user object | 

* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/users/semper+felis.+Fusce+ac+dui+nisl.+Donec+ultricies+nibh+eu+leo+consectetur+congue+quis+nec+tellus.+Morbi+consequat+mi+id+eros+viverra+ullamcorpe 
Content-Type: 
Content-Length: 915
{
    "id": -7818804812077596672,
    "username": "Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque eni",
    "firstName": " sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu null",
    "lastName": " m",
    "email": "or sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus",
    "password": "molestie pretium tortor. Praesent in",
    "phone": ". Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimen",
    "userStatus": 2119120469
}
```



#### delete /users/{username}
This can only be done by the logged in user.
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| username | path | string | yes | The name that needs to be deleted | 

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/users/nec+ultricies+nibh+eu+leo+consectetur+congue+quis+nec+tellus.+Morbi+consequat+mi+id+eros+viverra+ullamcorper.+Fusce+nec+est+quam.+Pellentesque+vulputate+sapien+at+turpis+molestie+congue.+Nunc+et+lorem+eros.+Suspendisse+eget+nibh+pul 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

