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
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 726
{
    "id": -2820194668946391040,
    "category": {
        "id": 4708280713382723584,
        "name": "mentum tellus sagittis at. Nullam vel metus ac quam gravida pellentesque. Nullam ultricies "
    },
    "name": "doggie",
    "photoUrls": [
        "met, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidu"
    ],
    "tags": [
        {
            "id": 5096276277808070656,
            "name": "ndisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna el"
        }
    ],
    "status": "i, p"
}
```



#### put /pets

* Request Parameters :

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 713
{
    "id": -3242160413911023616,
    "category": {
        "id": 2955926166759800832,
        "name": " tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit a"
    },
    "name": "doggie",
    "photoUrls": [
        "ctetur adipiscing elit. Integer ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsu"
    ],
    "tags": [
        {
            "id": -5054428117930606592,
            "name": "el ultrices au"
        }
    ],
    "status": "s lobortis porttitor. Mau"
}
```




#### get /pets/findByStatus
Multiple status values can be provided with comma seperated strings
* Request Parameters :

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByStatus 
```




#### get /pets/findByTags
Muliple tags can be provided with comma seperated strings. Use tag1, tag2, tag3 for testing.
* Request Parameters :

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByTags 
```




#### get /pets/{petId}
Returns a pet when ID < 10.  ID > 10 or nonintegers will simulate API error conditions
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/-566813143360077824 
```



#### post /pets/{petId}

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets/e+aliquet.+Phasellus+faucibus+urna+arcu%2C+et+dignissim+a 
Content-Type: multipart/form-data, boundary=57cafe5f4de3f
Content-Length: 417
--57cafe5f4de3f
content-disposition: form-data; name="name"

r. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis
--57cafe5f4de3f
content-disposition: form-data; name="status"

cu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vesti
```



#### delete /pets/{petId}

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/4674208961161854976 
api_key: tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, 
```




### Resource : stores
#### post /stores/order

* Request Parameters :

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/stores/order 
Content-Type: 
Content-Length: 318
{
    "id": -6755643000061165568,
    "petId": -3968556902559776768,
    "quantity": 201096087,
    "shipDate": "2016-09-03T16:46:23+00:00",
    "status": "tum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In ",
    "complete": 0
}
```




#### get /stores/order/{orderId}
For valid response try integer IDs with value <= 5 or > 10. Other values will generated exceptions
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/rem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Suspendiss 
```



#### delete /stores/order/{orderId}
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/dio.+Mauris+volutpat+dignissim+mi+eget+lacin 
```




### Resource : users
#### post /users
This can only be done by the logged in user.
* Request Parameters :

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users 
Content-Type: 
Content-Length: 712
{
    "id": -4533258695831715840,
    "username": " ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non conse",
    "firstName": "auris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien fini",
    "lastName": "n, ",
    "email": "culis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non,",
    "password": "eros viverra ullamcorper. Fusce nec",
    "phone": " ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euis",
    "userStatus": -1093649795
}
```




#### post /users/createWithArray

* Request Parameters :

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithArray 
Content-Type: 
Content-Length: 665
[
    {
        "id": -3904706780571107328,
        "username": "it. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in p",
        "firstName": "icies nibh eu leo consectetur congue quis nec tellus. M",
        "lastName": "elis. Fusce ac dui nisl. Donec ultri",
        "email": "es augue. Suspe",
        "password": "m dignissim risus non felis scelerisque",
        "phone": "rat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis",
        "userStatus": 1054747089
    }
]
```




#### post /users/createWithList

* Request Parameters :

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithList 
Content-Type: 
Content-Length: 814
[
    {
        "id": 4341843638515400704,
        "username": "laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet e",
        "firstName": "s eu nunc in",
        "lastName": "incidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pret",
        "email": "es erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada fac",
        "password": "sus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus m",
        "phone": "",
        "userStatus": 257299679
    }
]
```




#### get /users/login

* Request Parameters :

| Name | Location | Type | Description |  
| :---: | :---: | :---: | :--- |  
|  |  |  |  | 
|  |  |  |  | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=olestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisq&password=t%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auc 
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
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/tpat+dignissim+mi+eget+lacinia.+In+nisi+odio%2C+porta+ut+quam+non%2C+imperdiet+varius+orci.+Donec+consectetur+sed+ante+sit+amet+sagittis.+In+non+lectus+eu+nunc+interdum+laoreet+a+ut+dui.+Sed+eu+nulla+malesuada%2C+egestas+velit+id%2C+semper+felis.+Fusce 
```



#### put /users/{username}
This can only be done by the logged in user.
* Request Parameters :

| Name | Location | Type | Required | Definition | Description |  
| :---: | :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  |  | 
|  |  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/users/+sed+varius+sodales%2C+sagittis+sed+ex.+Vivamus+id+vulputate+odio.+Donec+quis+facilisis+arcu%2C+vel+ultrices+aug 
Content-Type: 
Content-Length: 916
{
    "id": 6484713881754140672,
    "username": "nec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed e",
    "firstName": "ec quis facili",
    "lastName": "am varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orc",
    "email": "odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare p",
    "password": ". Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget ",
    "phone": "usto turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor a",
    "userStatus": 1701974961
}
```



#### delete /users/{username}
This can only be done by the logged in user.
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/users/ut+ornare+purus+ultrices+nec.+Vestibulum+elementum+felis+sit+amet+ipsum+euismod+ullamcorper.+Phasellus+sit+amet+vestibulum+quam.+Morbi+tincidunt+pretium+sodales.+Etiam+dignissim+risus+non+f 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

