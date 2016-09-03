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

| Name |  |  |  
| --- | --- | --- |  
| body | body | object | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 668
{
    "id": -6335896245655044096,
    "category": {
        "id": -3629540045666385920,
        "name": "est leo"
    },
    "name": "doggie",
    "photoUrls": [
        " turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Ma"
    ],
    "tags": [
        {
            "id": 7550740729014779904,
            "name": "a lectus, a cursus neque erat vitae odio. Sed sed ne"
        }
    ],
    "status": "gue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vest"
}
```



#### put /pets

* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| body | body | object | 

* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 605
{
    "id": 6863628545285947392,
    "category": {
        "id": 6783383291882897408,
        "name": "nec condimentum tellus sagittis at. Nullam vel metus ac quam gravida pellentesque. Nullam ultricies turpis nec"
    },
    "name": "doggie",
    "photoUrls": [
        "to quis, iaculis odio. Mauris vol"
    ],
    "tags": [
        {
            "id": -6498566714651836416,
            "name": "rem ipsum dolor sit amet, consectetu"
        }
    ],
    "status": "lementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam digniss"
}
```




#### get /pets/findByStatus
Multiple status values can be provided with comma seperated strings
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| status | query | array | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByStatus 
```




#### get /pets/findByTags
Muliple tags can be provided with comma seperated strings. Use tag1, tag2, tag3 for testing.
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| tags | query | array | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByTags 
```




#### get /pets/{petId}
Returns a pet when ID < 10.  ID > 10 or nonintegers will simulate API error conditions
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| petId | path | int64 | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/-5791467282135777280 
```



#### post /pets/{petId}

* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| petId | path | string | 
| name | formData | string | 
| status | formData | string | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets/sim%2C+tincidunt+justo+quis%2C+iaculis+odio.+Mauris+volutpat+dignissim+mi+eget+lacinia.+In+nisi+odio%2C+porta+ut+quam+non%2C+imperdiet+varius 
Content-Type: multipart/form-data, boundary=57cafa158654c
Content-Length: 354
--57cafa158654c
content-disposition: form-data; name="name"

ium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque
--57cafa158654c
content-disposition: form-data; name="status"

sellus sit amet vestibulum quam. Morbi tincidunt pretium so
```



#### delete /pets/{petId}

* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| api_key | header | string | 
| petId | path | int64 | 

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/-364531921864097792 
api_key: cies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, ves
```




### Resource : stores
#### post /stores/order

* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| body | body | object | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/stores/order 
Content-Type: 
Content-Length: 274
{
    "id": -7301918412970655744,
    "petId": -6697285857776238592,
    "quantity": 31217477,
    "shipDate": "2016-09-03T16:28:05+00:00",
    "status": "elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit.",
    "complete": 0
}
```




#### get /stores/order/{orderId}
For valid response try integer IDs with value <= 5 or > 10. Other values will generated exceptions
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| orderId | path | string | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/sagittis.+In+non+lectus+eu+nunc+interdum+laoreet+a+ut+dui.+Sed+eu+nulla+malesuada%2C+egestas+velit+id%2C+semper+felis.+Fusce+ac+dui+nisl.+Donec+ultricies+ 
```



#### delete /stores/order/{orderId}
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| orderId | path | string | 

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/+posuere+tincidunt+elit.+Etiam+convallis+eu+ligula+non+consequat.+Pellentesque+elit+libero%2C+faucibus+luctus+ante+nec%2C+volutpat+dictum+neque.+Donec+molestie%2C+eros+in+pretium+pulvinar%2C+e 
```




### Resource : users
#### post /users
This can only be done by the logged in user.
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| body | body | object | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users 
Content-Type: 
Content-Length: 551
{
    "id": 6396685443236102144,
    "username": "dio. Mauris volutpat dignissim mi eget lacinia. In nisi odi",
    "firstName": "s nec dignissim a",
    "lastName": "s",
    "email": " eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Et",
    "password": "ollicitudin varius purus, nec condimentum te",
    "phone": "met, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis ali",
    "userStatus": -1501388466
}
```




#### post /users/createWithArray

* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| body | body | array | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithArray 
Content-Type: 
Content-Length: 1430
[
    {
        "id": 5177194144564510720,
        "username": "inar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla",
        "firstName": "suada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue ero",
        "lastName": "a facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turp",
        "email": "icies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, nec condimentum tellus",
        "password": ". Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu ",
        "phone": "um fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. ",
        "userStatus": -361662922
    }
]
```




#### post /users/createWithList

* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| body | body | array | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithList 
Content-Type: 
Content-Length: 1134
[
    {
        "id": -5893987163648819200,
        "username": "ed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, nec con",
        "firstName": "isus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget ",
        "lastName": " Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus ",
        "email": "i consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at tur",
        "password": "i, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum fel",
        "phone": "uere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, vo",
        "userStatus": -1326426615
    }
]
```




#### get /users/login

* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| username | query | string | 
| password | query | string | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=orper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.&password=utpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20 
```




#### get /users/logout


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/logout 
```




#### get /users/{username}

* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| username | path | string | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/m+eros.+Suspendisse+eget+nibh+pulvinar%2C+vestibulum+magna+ut%2C+suscipit+est.+Etiam+varius+lobortis+porttitor.+Mauris+vel+ultrices+erat%2C+at+hendrerit+enim.+Sed+leo+ex%2C+pulvinar+vel+metus+et%2C+molestie+pretium+tortor.+Praesent+ 
```



#### put /users/{username}
This can only be done by the logged in user.
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| username | path | string | 
| body | body | object | 

* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/users/m+magna+ut%2C+suscipit+est.+Etiam+varius+lobortis+porttitor.+Mauris+vel+ultrices+erat%2C+at+hendrerit+enim.+Sed+leo+ex%2C+pulvinar+vel+metus+et%2C+molestie+pretium+tortor.+Praesen 
Content-Type: 
Content-Length: 675
{
    "id": 3341311331667017728,
    "username": "lis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orc",
    "firstName": " enim metus in eros. Mauris sollicitudin varius purus, nec condimentum tellus sagittis at. Nullam vel metus ac quam gra",
    "lastName": "met, ",
    "email": "e potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vest",
    "password": ", tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget ",
    "phone": "m ultricies tu",
    "userStatus": -2075381777
}
```



#### delete /users/{username}
This can only be done by the logged in user.
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| username | path | string | 

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/users/ed+eros+massa%2C+vehicula+quis+condimentum+ege 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

