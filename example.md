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

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [#/paths//pets/post/parameters/0](#testtoto) | Pet object that needs to be added to the store | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 937
{
    "id": -1841790304189939712,
    "category": {
        "id": 857504080505864192,
        "name": " risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bi"
    },
    "name": "doggie",
    "photoUrls": [
        "vamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare p"
    ],
    "tags": [
        {
            "id": -1514885345265582080,
            "name": "et fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin vari"
        }
    ],
    "status": "is sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit li"
}
```



#### put /pets

* Request Parameters :

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [#/paths//pets/put/parameters/0](#testtoto) | Pet object that needs to be added to the store | 

* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 839
{
    "id": 7774659171114287104,
    "category": {
        "id": 1740694655307087872,
        "name": "m ultricie"
    },
    "name": "doggie",
    "photoUrls": [
        "e ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec t"
    ],
    "tags": [
        {
            "id": -7313123450069975040,
            "name": "usce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices era"
        }
    ],
    "status": "ec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis "
}
```




#### get /pets/findByStatus
Multiple status values can be provided with comma seperated strings
* Request Parameters :

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

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| petId | path | int64 | yes | ID of pet that needs to be fetched | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/921382540688752640 
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
HTTP 1.1 post http://petstore.swagger.io/v2/pets/m+neque.+Donec+molestie%2C+eros+in+pretium+pulvinar%2C+est+leo+veh 
Content-Type: multipart/form-data, boundary=57cafeb5531b7
Content-Length: 621
--57cafeb5531b7
content-disposition: form-data; name="name"

re tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed 
--57cafeb5531b7
content-disposition: form-data; name="status"

blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat ma
```



#### delete /pets/{petId}

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| api_key | header | string | yes |  | 
| petId | path | int64 | yes | Pet id to delete | 

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/5422362478526857216 
api_key:  placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo q
```




### Resource : stores
#### post /stores/order

* Request Parameters :

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [#/paths//stores/order/post/parameters/0](#testtoto) | order placed for purchasing the pet | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/stores/order 
Content-Type: 
Content-Length: 336
{
    "id": 7940923252132544512,
    "petId": 5472150336422543360,
    "quantity": 311914945,
    "shipDate": "2016-09-03T16:47:49+00:00",
    "status": "nsequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus ",
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
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/+nibh+sollicitudin+et.+Curabitur+pulvinar+metus+massa%2C+malesuada+facilisis+sapien+finibus+at. 
```



#### delete /stores/order/{orderId}
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| orderId | path | string | yes | ID of the order that needs to be deleted | 

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/esuada%2C+egestas+velit+id%2C+semper+felis.+Fusce+ac+dui+nisl.+Donec+ultricies+nibh+eu+leo+consectetur+congue+quis+nec+tellus.+Morbi+consequat+mi+id+eros+viverra+ullamcorper.+Fusce+nec+es 
```




### Resource : users
#### post /users
This can only be done by the logged in user.
* Request Parameters :

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [#/paths//users/post/parameters/0](#testtoto) | Created user object | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users 
Content-Type: 
Content-Length: 1024
{
    "id": -2619716895628066816,
    "username": " eu ligula non consequat",
    "firstName": "ros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor",
    "lastName": "olor sit amet, consectetur adipiscing elit. Integer ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, po",
    "email": "ltricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesua",
    "password": "e sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mau",
    "phone": "urus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim ",
    "userStatus": -1212489151
}
```




#### post /users/createWithArray

* Request Parameters :

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | array | [#/paths//users/createWithArray/post/parameters/0/schema](#testtoto) | List of user object | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithArray 
Content-Type: 
Content-Length: 1092
[
    {
        "id": -2146565499956232192,
        "username": " dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Q",
        "firstName": "nia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec",
        "lastName": "t molestie. Aenean quam nisi, posuere sed v",
        "email": "ar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor bl",
        "password": "estie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus ",
        "phone": "erisque ipsum. Quisque porta mauri",
        "userStatus": 307065886
    }
]
```




#### post /users/createWithList

* Request Parameters :

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | array | [#/paths//users/createWithList/post/parameters/0/schema](#testtoto) | List of user object | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithList 
Content-Type: 
Content-Length: 774
[
    {
        "id": 5426221841649762304,
        "username": " massa, malesuada facilisis sap",
        "firstName": "Suspendisse potenti. Mauris vehicula ex",
        "lastName": " ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ull",
        "email": "ntesque enim metus i",
        "password": "perdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagitti",
        "phone": "ucibus urna arcu, et dignissi",
        "userStatus": -740092843
    }
]
```




#### get /users/login

* Request Parameters :

| Name | Location | Type | Description |  
| :---: | :---: | :---: | :--- |  
| username | query | string | The user name for login | 
| password | query | string | The password for login in clear text | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=dunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20m&password=quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20c 
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
HTTP 1.1 get http://petstore.swagger.io/v2/users/arius+orci.+Donec+consectetur+sed+ante+sit+amet+sagittis.+In+non+lectus+eu+nunc+interdum+laoreet+a+ut+dui.+Sed+eu+nulla+malesuada%2C+egestas+velit+id%2C+semper+felis.+Fusce+ac+dui+nisl.+Donec+ultricies+nibh+eu+leo+consectetur+congue+quis+nec+tellu 
```



#### put /users/{username}
This can only be done by the logged in user.
* Request Parameters :

| Name | Location | Type | Required | Definition | Description |  
| :---: | :---: | :---: | :---: | :---: | :--- |  
| username | path | string | yes |  | name that need to be deleted | 
| body | body | object |  | [#/paths//users/{username}/put/parameters/1](#testtoto) | Updated user object | 

* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/users/tas+velit+id%2C+semper+felis.+Fusce+ac+dui+nisl.+Donec+ultricies+nibh+eu+leo+consectetur+congue+quis+nec+tellus.+Morbi+consequat+mi+id+eros+vive 
Content-Type: 
Content-Length: 1009
{
    "id": -4874197018014121984,
    "username": " leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ips",
    "firstName": "auris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, fel",
    "lastName": "bulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit digni",
    "email": "os in",
    "password": "nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, nec condimentum tellus sagittis at. Nullam vel metus",
    "phone": "es ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pell",
    "userStatus": 2077726941
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
HTTP 1.1 delete http://petstore.swagger.io/v2/users/ales%2C+sagittis+sed+ 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

