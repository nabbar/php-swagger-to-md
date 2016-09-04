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
  * [Resource : Resource : pets](#resourcepets)
    * [Operation : post /pets](#postpets)
    * [Operation : put /pets](#putpets)
    * [Operation : get /pets/findByStatus](#getpetsfindbystatus)
    * [Operation : get /pets/findByTags](#getpetsfindbytags)
    * [Operation : get /pets/{petId}](#getpetspetid)
    * [Operation : post /pets/{petId}](#postpetspetid)
    * [Operation : delete /pets/{petId}](#deletepetspetid)
  * [Resource : Resource : stores](#resourcestores)
    * [Operation : post /stores/order](#poststoresorder)
    * [Operation : get /stores/order/{orderId}](#getstoresorderorderid)
    * [Operation : delete /stores/order/{orderId}](#deletestoresorderorderid)
  * [Resource : Resource : users](#resourceusers)
    * [Operation : post /users](#postusers)
    * [Operation : post /users/createWithArray](#postuserscreatewitharray)
    * [Operation : post /users/createWithList](#postuserscreatewithlist)
    * [Operation : get /users/login](#getuserslogin)
    * [Operation : get /users/logout](#getuserslogout)
    * [Operation : get /users/{username}](#getusersusername)
    * [Operation : put /users/{username}](#putusersusername)
    * [Operation : delete /users/{username}](#deleteusersusername)
* [Table of contents](#table-of-contents)


---

## Resources 
### Resource : pets
#### post /pets

* Request Parameters :
  * Content-Type Accepted : application/json, application/xml

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#objectproperty_57cc40e79c09e) | Pet object that needs to be added to the store | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 829
{
    "id": -7642121685860089856,
    "category": {
        "id": 2225249537042153472,
        "name": "ed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec"
    },
    "name": "doggie",
    "photoUrls": [
        "s, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis"
    ],
    "tags": [
        {
            "id": -2866455924900364288,
            "name": "m eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, im"
        }
    ],
    "status": "o"
}
```

* <p name="objectproperty_57cc40e792e5e">Object category :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| id | int64 | 7238885447164755968 | 
| name | string | enim. Sed leo ex, pulvinar vel metus et | 

* <p name="schema_57cc40e796eb1">Object photoUrls/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| schema | string | odales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mau | 

* <p name="schema_57cc40e79b7f4">Object tags/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| id | int64 | 8342529177076891648 | 
| name | string | eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volut | 

* <p name="objectproperty_57cc40e79c09e">Object body :</p> 

| Name | Type | Required | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | int64 |  |  |  | 5525505168952524800 | 
| category |  |  | [schema/properties/category](#objectproperty_57cc40e792e5e) |  |  | 
| name | string | yes |  |  | doggie | 
| photoUrls | array | yes | [ [photoUrls/items/schema](#schema_57cc40e796eb1) ] |  |  | 
| tags | array |  | [ [tags/items/schema](#schema_57cc40e79b7f4) ] |  |  | 
| status | string |  |  | pet status in the store | isis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales.  | 




#### put /pets

* Request Parameters :
  * Content-Type Accepted : application/json, application/xml

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#objectproperty_57cc40e7a5b6b) | Pet object that needs to be added to the store | 

* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 915
{
    "id": -4963389637482512384,
    "category": {
        "id": 2015829706238066688,
        "name": "imentum eget, tristique ut quam. Maecenas et velit dignissim, ti"
    },
    "name": "doggie",
    "photoUrls": [
        "dum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. M"
    ],
    "tags": [
        {
            "id": -3316960628035289088,
            "name": "mcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis po"
        }
    ],
    "status": "turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus v"
}
```

* <p name="objectproperty_57cc40e7a4927">Object category :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| id | int64 | 8964139858251481088 | 
| name | string | amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdu | 

* <p name="schema_57cc40e7a4dc6">Object photoUrls/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| schema | string | am ultricies turpis nec dignissim aliquam | 

* <p name="schema_57cc40e7a52a5">Object tags/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| id | int64 | 4436263937557659648 | 
| name | string | porta ut quam non, imperdiet var | 

* <p name="objectproperty_57cc40e7a5b6b">Object body :</p> 

| Name | Type | Required | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | int64 |  |  |  | -6601135386993360896 | 
| category |  |  | [schema/properties/category](#objectproperty_57cc40e7a4927) |  |  | 
| name | string | yes |  |  | doggie | 
| photoUrls | array | yes | [ [photoUrls/items/schema](#schema_57cc40e7a4dc6) ] |  |  | 
| tags | array |  | [ [tags/items/schema](#schema_57cc40e7a52a5) ] |  |  | 
| status | string |  |  | pet status in the store | a, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, | 





#### get /pets/findByStatus
Multiple status values can be provided with comma seperated strings
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| status | query | array | [ [status/items/schema](#schema_57cc40e7a78f2) ] | Status values that need to be considered for filter | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByStatus 
```

* <p name="schema_57cc40e7a78f2">Object status/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| schema | string | bus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maec | 





#### get /pets/findByTags
Muliple tags can be provided with comma seperated strings. Use tag1, tag2, tag3 for testing.
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| tags | query | array | [ [tags/items/schema](#schema_57cc40e7a8407) ] | Tags to filter by | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByTags 
```

* <p name="schema_57cc40e7a8407">Object tags/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| schema | string | tiam varius lobortis porttitor. | 





#### get /pets/{petId}
Returns a pet when ID < 10.  ID > 10 or nonintegers will simulate API error conditions
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| petId | path | int64 | yes | ID of pet that needs to be fetched | -4040536203638865920 | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/-4040536203638865920 
```




#### post /pets/{petId}

* Request Parameters :
  * Content-Type Accepted : application/x-www-form-urlencoded

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| petId | path | string | yes | ID of pet that needs to be updated | Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut o | 
| name | formData | string | yes | Updated name of the pet | ius sodales, sag | 
| status | formData | string | yes | Updated status of the pet | lvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor bl | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets/Vivamus+id+vulputate+odio.+Donec+quis+facilisis+arcu%2C+vel+ultrices+augue.+Suspendisse+potenti.+Mauris+vehicula+ex+lorem%2C+ut+o 
Content-Type: multipart/form-data, boundary=57cc40e7a9842
Content-Length: 391
--57cc40e7a9842
content-disposition: form-data; name="name"

ius sodales, sag
--57cc40e7a9842
content-disposition: form-data; name="status"

lvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor bl
```




#### delete /pets/{petId}

* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| api_key | header | string | yes |  | stie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in preti | 
| petId | path | int64 | yes | Pet id to delete | -4895151076824580096 | 

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/-4895151076824580096 
api_key: stie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in preti
```





### Resource : stores
#### post /stores/order

* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#objectproperty_57cc40e7aafbf) | order placed for purchasing the pet | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/stores/order 
Content-Type: 
Content-Length: 275
{
    "id": 9188779914986258432,
    "petId": -1236827564794707968,
    "quantity": -584950031,
    "shipDate": "2016-09-04T15:42:31+00:00",
    "status": "nean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec qui",
    "complete": 0
}
```

* <p name="objectproperty_57cc40e7aafbf">Object body :</p> 

| Name | Type | Description | Example |  
| :---: | :---: | :--- | :--- |  
| id | int64 |  | -1083443562416177152 | 
| petId | int64 |  | -4772357974716841984 | 
| quantity | int32 |  | -982304270 | 
| shipDate | date-time |  | 2016-09-04T15:42:31+00:00 | 
| status | string | Order Status | a vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis | 
| complete | boolean |  | 1 | 





#### get /stores/order/{orderId}
For valid response try integer IDs with value <= 5 or > 10. Other values will generated exceptions
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| orderId | path | string | yes | ID of pet that needs to be fetched | dunt pretium sodales. Etiam  | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/dunt+pretium+sodales.+Etiam+ 
```




#### delete /stores/order/{orderId}
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| orderId | path | string | yes | ID of the order that needs to be deleted | r. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget  | 

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/r.+Fusce+nec+est+quam.+Pellentesque+vulputate+sapien+at+turpis+molestie+congue.+Nunc+et+lorem+eros.+Suspendisse+eget+ 
```





### Resource : users
#### post /users
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| body | body | object | [parameters/body](#objectproperty_57cc40e7ad366) | Created user object | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users 
Content-Type: 
Content-Length: 759
{
    "id": -7335108309621407744,
    "username": "unc interdum ",
    "firstName": " ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt ",
    "lastName": "alesuada facilisis sapien finibus at. Nullam finib",
    "email": "ellus accumsan tincidunt. Aliquam enim dui, ",
    "password": "s massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandi",
    "phone": "quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue ",
    "userStatus": -1744703454
}
```

* <p name="objectproperty_57cc40e7ad366">Object body :</p> 

| Name | Type | Description | Example |  
| :---: | :---: | :--- | :--- |  
| id | int64 |  | 8394649159264632832 | 
| username | string |  | r. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac | 
| firstName | string |  | et, volutpat sed lacus. Nulla  | 
| lastName | string |  | u, et dignissim augue inter | 
| email | string |  | ellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisqu | 
| password | string |  | diet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu null | 
| phone | string |  | ficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentes | 
| userStatus | int32 | User Status | -835451171 | 





#### post /users/createWithArray

* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| body | body | array | [ [schema/items/schema](#schema_57cc40e7ae432) ] | List of user object |  | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithArray 
Content-Type: 
Content-Length: 1031
[
    {
        "id": -5661671484960014336,
        "username": "orem, ut ornare purus ultrices nec. Vestibulum elementum felis",
        "firstName": "lestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate o",
        "lastName": "ed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odi",
        "email": "llamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius",
        "password": " a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc ma",
        "phone": "Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagit",
        "userStatus": 1559114773
    }
]
```

* <p name="schema_57cc40e7ae432">Object schema/items/schema :</p>

| Name | Type | Description | Example |  
| :---: | :---: | :--- | :--- |  
| id | int64 |  | 2457092150853107712 | 
| username | string |  | Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus f | 
| firstName | string |  | t vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id | 
| lastName | string |  | tur sed ante sit amet sagitt | 
| email | string |  |  velit id, semper felis. Fusce ac dui nisl. Do | 
| password | string |  | , eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vita | 
| phone | string |  | cidunt pretium sodales. Etiam digni | 
| userStatus | int32 | User Status | 1359254358 | 





#### post /users/createWithList

* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| body | body | array | [ [schema/items/schema](#schema_57cc40e7aff3b) ] | List of user object |  | 

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithList 
Content-Type: 
Content-Length: 779
[
    {
        "id": -8377883208963850240,
        "username": "ctetur adipiscing elit. Integer ipsum sapien, bibendum at placerat s",
        "firstName": "apibus vehicula, sem tor",
        "lastName": "ic",
        "email": "at dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum.",
        "password": ", posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec",
        "phone": "s est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis se",
        "userStatus": 54482148
    }
]
```

* <p name="schema_57cc40e7aff3b">Object schema/items/schema :</p>

| Name | Type | Description | Example |  
| :---: | :---: | :--- | :--- |  
| id | int64 |  | 7019191401753608192 | 
| username | string |  |  Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lect | 
| firstName | string |  | ro | 
| lastName | string |  |  at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin  | 
| email | string |  | d efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id fe | 
| password | string |  |  molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a curs | 
| phone | string |  | u nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo | 
| userStatus | int32 | User Status | 338262709 | 





#### get /users/login

* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| username | query | string | The user name for login |  | 
| password | query | string | The password for login in clear text |  consectetur adipiscing elit. In | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=&password=%20consectetur%20adipiscing%20elit.%20In 
```





#### get /users/logout




#### get /users/{username}

* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes | The name that needs to be fetched. Use user1 for testing. | ulvinar vel metus et, molestie pretium tortor. Pr | 

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/ulvinar+vel+metus+et%2C+molestie+pretium+tortor.+Pr 
```




#### put /users/{username}
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Required | Definition | Description | Example |  
| :---: | :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes |  | name that need to be deleted | et, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec  | 
| body | body | object |  | [parameters/body](#objectproperty_57cc40e7b34ea) | Updated user object |  | 

* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/users/et%2C+tristique+ut+quam.+Maecenas+et+velit+dignissim%2C+tincidunt+justo+quis%2C+iaculis+odio.+Mauris+volutpat+dignissim+mi+eget+lacinia.+In+nisi+odio%2C+porta+ut+quam+non%2C+imperdiet+varius+orci.+Donec+ 
Content-Type: 
Content-Length: 898
{
    "id": 6355910359462707200,
    "username": "n nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, ",
    "firstName": "la quis condimentum eget, tris",
    "lastName": "t, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris vol",
    "email": "rnare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ip",
    "password": "facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium ",
    "phone": "la lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdie",
    "userStatus": -1979738801
}
```

* <p name="objectproperty_57cc40e7b34ea">Object body :</p> 

| Name | Type | Description | Example |  
| :---: | :---: | :--- | :--- |  
| id | int64 |  | 21995794538168320 | 
| username | string |  | ibh, sed pellentesque enim metus in eros. | 
| firstName | string |  | dipiscing elit. Suspendisse justo turpis, lacinia id tempor se | 
| lastName | string |  | d scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse pote | 
| email | string |  | laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, po | 
| password | string |  | gue quis nec tellus. Morbi consequat mi id eros viverra ullamcorp | 
| phone | string |  | , consectetur adipiscing elit. Integer ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilis | 
| userStatus | int32 | User Status | -750258026 | 




#### delete /users/{username}
This can only be done by the logged in user.
* Request Parameters :
  * Content-Type Accepted : 

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| username | path | string | yes | The name that needs to be deleted | euismod ullamcorper. Phasellus sit amet vesti | 

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/users/euismod+ullamcorper.+Phasellus+sit+amet+vesti 
```







---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

