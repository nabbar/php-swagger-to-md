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
Content-Length: 925
{
    "id": 3025756304858677248,
    "category": {
        "id": -2923587524037181440,
        "name": "lit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc in"
    },
    "name": "doggie",
    "photoUrls": [
        ", a cursus nequ"
    ],
    "tags": [
        {
            "id": -9021850247181107200,
            "name": "cing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, v"
        }
    ],
    "status": " erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec"
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
Content-Length: 590
{
    "id": -6504159462150897664,
    "category": {
        "id": 7241651702456123392,
        "name": "olutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ips"
    },
    "name": "doggie",
    "photoUrls": [
        "s so"
    ],
    "tags": [
        {
            "id": 4065374519202676736,
            "name": "mauris nec massa egestas, sed mollis es"
        }
    ],
    "status": " mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nul"
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
HTTP 1.1 get http://petstore.swagger.io/v2/pets/-6094728098203303936 
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
HTTP 1.1 post http://petstore.swagger.io/v2/pets/+laoreet+a+ipsum.+Duis+sem+elit%2C+posuere+eu+facilisis+nec%2C+tempus+ac+ipsum.+Ut+molestie+aliquet+est%2C+posuere+tincidunt+elit.+Etiam+convallis+eu+li 
Content-Type: multipart/form-data, boundary=57caee259754a
Content-Length: 424
--57caee259754a
content-disposition: form-data; name="name"

lvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh s
--57caee259754a
content-disposition: form-data; name="status"

Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis fac
```



#### delete /pets/{petId}

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| api_key | header | string | yes |  | 
| petId | path | int64 | yes | Pet id to delete | 

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/-4948393677564149760 
api_key: , laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam 
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
Content-Length: 240
{
    "id": 4589717011600244736,
    "petId": -4698340316518809600,
    "quantity": 1662461016,
    "shipDate": "2016-09-03T15:37:09+00:00",
    "status": "um euismod ullamcorper. Phasellus sit amet vestibulum quam. Mo",
    "complete": 0
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
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/t+pretium+sodales.+Etiam+dignissim+risus+non+felis+scelerisque+aliquet.+Phasellus+faucibus+urna+arcu%2C+et+dignissim+augue+interdum+sed.+Vestibulum+eget+luctus+metus%2C+eu+bibendum+orci.+Sed+eros+ma 
```



#### delete /stores/order/{orderId}
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| orderId | path | string | yes | ID of the order that needs to be deleted | 

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/spendisse+potenti.+Mauris+vehicula+ex+lorem%2C+ut+ornare+purus+ultrices+ne 
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
Content-Length: 1165
{
    "id": 4361765758418550784,
    "username": " fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, ne",
    "firstName": "o arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. U",
    "lastName": " varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, sem",
    "email": " magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla",
    "password": " pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curab",
    "phone": ", mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin v",
    "userStatus": -67792509
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
Content-Length: 977
[
    {
        "id": -314388840108261376,
        "username": "r felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pelle",
        "firstName": "rius sodales, sagittis",
        "lastName": "sto turpis, lacinia id tempor sed, dapibu",
        "email": " ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum l",
        "password": "auris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacin",
        "phone": "tium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada fac",
        "userStatus": 1767209398
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
Content-Length: 1097
[
    {
        "id": 4426755326640914432,
        "username": "da ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibu",
        "firstName": "as velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellente",
        "lastName": "lum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pret",
        "email": "neque erat vitae odio. Sed sed neque",
        "password": " eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nib",
        "phone": "quet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iacu",
        "userStatus": -595429752
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
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=um%20eui&password=lla%20malesuada%2C%20egestas%20 
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
HTTP 1.1 get http://petstore.swagger.io/v2/users/dio.+Mauris+volutpat+dignissim+mi+eget+lacinia.+In+nisi+odio%2C+porta+ut+quam+non%2C+imperdiet+varius+orci.+Donec+consectetur+sed+ante+sit+amet+sagittis.+In+non+lectus+eu+nunc+inter 
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
HTTP 1.1 put http://petstore.swagger.io/v2/users/%2C+posuere+eu+facilisis+nec%2C+tempus+ac+ipsum.+Ut+molestie+aliquet+est%2C+posuere+tincidunt+elit.+Etiam+convallis+eu+ligula+non+consequat.+Pellen 
Content-Type: 
Content-Length: 904
{
    "id": -5987438015557926912,
    "username": "pibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim,",
    "firstName": "rcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vest",
    "lastName": "Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulu",
    "email": "tiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula ",
    "password": "estie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien f",
    "phone": "sce nec est quam. Pellentesque vulputate sa",
    "userStatus": 221339192
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
HTTP 1.1 delete http://petstore.swagger.io/v2/users/+urna+vel+auctor+fringilla.+Mauris+eu+tortor+bla 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

