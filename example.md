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
Path tpl
### Resource : pets
#### Path : /pets
Pathitem tpl
##### Operation : post



* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//pets/post/parameters/0](#testtoto) |  |  | Pet object that needs to be added to the store

* Example of request :
    ```
HTTP 1.1 post http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 672
{
    "id": -8605951113457303552,
    "category": {
        "id": 4130809982339776512,
        "name": "EqYcdarBhuvy4O9QdtAUddU3H5smtHc88akmlLXCgsbkhkbuOMp1Zj4Hpw3Seg0mrlIM6Gpn8AIqUTUIGkJFENm3kqWyH"
    },
    "name": "doggie",
    "photoUrls": [
        "U8iDUpjjMsTuSOnNw47gJM36QoxMWeJRm2uhrOBdhvH9j5XQ956TRa0HyxuuLel8gQqIF1WWwD6QJ3GT8NN0YNIwlc16qnfHdFpSGlPdZV4JYLD7yq8weQ3z24GtrVbFBAyiWnvWjzGhljpTKxqYotxqyeUZa5ELGd3DAzzT9gbuzBoj9OixiQYQ4TQeYv0FI4ijDScN8ohI0G29ukHNaFDfyuuxZudHyv0codZxChfCXhMsCtfN9T2Inxfm2"
    ],
    "tags": [
        {
            "id": 1977925202511659008,
            "name": "Y5NmiMTU49x1rjt3MJQWCTE0rTntms"
        }
    ],
    "status": "lxR"
}
    ```



  
##### Operation : put



* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//pets/put/parameters/0](#testtoto) |  |  | Pet object that needs to be added to the store

* Example of request :
    ```
HTTP 1.1 put http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 938
{
    "id": 6772875547019051008,
    "category": {
        "id": -9121809512141946880,
        "name": "1ENyoLaNLLWUvLLZxEcsgiWA8acNO95QNSpcDzZolWjQI4PfJ2HZkEAsOMgDVluJeTVStVhPRAFzEvPoxxnSbYk0LBEHX9qb3m3whkl8U1IzwxX34lWgjgh5SWMP5c08z3FQo1Zi2HSyfPCkbyBvPTAIPmxVzy38BIZZKYiM"
    },
    "name": "doggie",
    "photoUrls": [
        "alW0YgbxSHmLh5BECweaAmMjlM3k4P0fbWf9drG683Sq8t4L0iWAFJT1vXlAMlQYi57wwOCFSu51YaMZtJz8staXqvydRob9ujG18jG0NM2MWOLpyly0PIYgdwt4VFepZVq8e682SbOPZAeyWNyLvw1J3vOYb2naYNicUreNC3CCERaAEJm9foTiUHg5"
    ],
    "tags": [
        {
            "id": 1190643652611801088,
            "name": "IryUm099DcMfRDqsi9OspdlH82YdMCtu42pq2yAGKmWB0m4jwTLV66De9CsVeVqiYPJ1njH8GDKH0O0wHLsOS621IvXXqngpdZqAj7IZKtGLhGiYsLMkRPmAkkyLHOaVNBv6Ie6tHMeYtxXWiJgazDKUXjFF7QAVr629k8D2VS1ppYlHICRhfCbdVRT3HuY9A1jV9WX5OYveXQVGtNXJp9Wl1Q"
        }
    ],
    "status": "JknSVobQy8ODWN9bK06qtTocjy9EA03jkqbfOn6mvU0sH9Ds9KTDEiQXQZCqZFKk6WAUjGh"
}
    ```



  

  
#### Path : /pets/findByStatus
Pathitem tpl
##### Operation : get
Multiple status values can be provided with comma seperated strings


* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | status | query | array |  no |  |  |  | [#/paths//pets/findByStatus/get/parameters/0](#testtoto) |  |  | Status values that need to be considered for filter

* Example of request :
    ```
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByStatus 
    ```



  

  
#### Path : /pets/findByTags
Pathitem tpl
##### Operation : get
Muliple tags can be provided with comma seperated strings. Use tag1, tag2, tag3 for testing.


* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | tags | query | array |  no |  |  |  | [#/paths//pets/findByTags/get/parameters/0](#testtoto) |  |  | Tags to filter by

* Example of request :
    ```
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByTags 
    ```



  

  
#### Path : /pets/{petId}
Pathitem tpl
##### Operation : get
Returns a pet when ID < 10.  ID > 10 or nonintegers will simulate API error conditions


* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | petId | path | integer, formatted as : int64 |  no |  |  |  |  |  |  | ID of pet that needs to be fetched

* Example of request :
    ```
HTTP 1.1 get http://petstore.swagger.io/v2/pets/-7235026827071193088 
    ```



  
##### Operation : post



* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | petId | path | string |  no |  |  |  |  |  |  | ID of pet that needs to be updated
    | name | formData | string |  no |  |  |  |  |  |  | Updated name of the pet
    | status | formData | string |  no |  |  |  |  |  |  | Updated status of the pet

* Example of request :
    ```
HTTP 1.1 post http://petstore.swagger.io/v2/pets/VFE6qCjwrsRcuWK9IlfFYq7XtImhriBnXfuoSNUjgMwKJhUsCa7BBfy5XVnodYMaegy64tqkgW5Zd0rQbzrMO0SLVfa8eXjsdSyimZCCVIC8I3ZTDrGrrzdmOnv2kPuyH3Q32tGYbi7Um6OZxuqZ3DlS1RVmGqVotLrwf8vqrCkNJ8MhDdgHRCzTuvfaVaypW0Wb9rBA4WnO5a5IomqfZ08uvoEqz 
Content-Type: multipart/form-data, boundary=57cab9c9d0607
Content-Length: 8
--57cab9c9d0607
content-disposition: form-data; name="name"

PveLHndjYhfl5lwb3Uyuayui2ZHHqgUgM92txfMvx2RDnnOrinVsVqLYptFQJA6wK8ZhoMNVOEyc2nDlLyNHYzFo2lfMWmiGviXT4KPTpo5rMINxh
--57cab9c9d0607
content-disposition: form-data; name="status"

fgaVFdhUZdgiTLBRFFBuy1TEtFmgdERtU1ozfFueSLxMx8DcOfHngA1Jgn0u1RXWTlw810nTLUFi3jvSydfOOgy4EyyFqwCjR8sS8PMUKsdOLJGjWV8KbHPPgovGU70MgsEoirj2TwQFfwZcr7WDPMt5aYM46NQmfvLxW4AQBqwRWv3oD01sMuyW
    ```



  
##### Operation : delete



* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | api_key | header | string |  no |  |  |  |  |  |  | 
    | petId | path | integer, formatted as : int64 |  no |  |  |  |  |  |  | Pet id to delete

* Example of request :
    ```
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/572415773578887168 
api_key: l0A8RWnmIVjMvaoWHfScihQj
    ```



  

  
  
### Resource : stores
#### Path : /stores/order
Pathitem tpl
##### Operation : post



* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//stores/order/post/parameters/0](#testtoto) |  |  | order placed for purchasing the pet

* Example of request :
    ```
HTTP 1.1 post http://petstore.swagger.io/v2/stores/order 
Content-Type: 
Content-Length: 352
{
    "id": -4436110517030879232,
    "petId": 6932836054860824576,
    "quantity": -398947906,
    "shipDate": "2016-09-03T11:53:45+00:00",
    "status": "NrZhxykcH0s174BvkTos5rGNT6OEXK4Lb43ICnVjnnkvsW1NQpfVRWJK2xp0htLtxPbac7tAvO6XK7KAx0voWf9ZMyZ42LxAAJKNQenl2ujNB4n94Tx09HZVfZ0iKyTlhE88SwuV0NICR6LW0jX90X5gW6yHEs2V7a4ZGyVHmDjeK4",
    "complete": 0
}
    ```



  

  
#### Path : /stores/order/{orderId}
Pathitem tpl
##### Operation : get
For valid response try integer IDs with value <= 5 or > 10. Other values will generated exceptions


* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | orderId | path | string |  no |  |  |  |  |  |  | ID of pet that needs to be fetched

* Example of request :
    ```
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/n7Un40E16dIKFKGMUKMBjHiFlBT5G4Q4bLsgL6hSjZCYJjLE4xgofy3BaXHQ1yVdjnt5tKXMJALtUw8Z4onkXqV7oCYpaTCug5AKQywz9h33Ob2TApdxQ8FeLDEWxhqOn0ydz5NImRLb2O4Ceha4qPjbsY80fyODzmR8rEQOvCZyr4bFmlKMa3YD26DhFrVeOMngqe4WR4vi8GYu2IhcMgQOmt62V1hKNE0eT4bK9G3hn2MpK4B 
    ```



  
##### Operation : delete
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors


* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | orderId | path | string |  no |  |  |  |  |  |  | ID of the order that needs to be deleted

* Example of request :
    ```
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/ksmHVtKRv1BjGByzGJkPpn7MpUcaZNIkg42byM33NFmthU3XEnN4KURaP3kOR2877ajGWmKK27ej1hg 
    ```



  

  
  
### Resource : users
#### Path : /users
Pathitem tpl
##### Operation : post
This can only be done by the logged in user.


* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//users/post/parameters/0](#testtoto) |  |  | Created user object

* Example of request :
    ```
HTTP 1.1 post http://petstore.swagger.io/v2/users 
Content-Type: 
Content-Length: 1386
{
    "id": -7543097353675210752,
    "username": "Q08VjJFxAIce0zRXf3SOThLlag7CTcAJcJFwsl333fh4O924cUT6bEslVzYOLyyYiduKyxNCN5GCeIGrDzyOd0a9A9XlHvk0JPKinyUaDAMSjtkW2TLgUWqu5nPNSaNCZxUm6OxJpjCINXFPQr6KnwesU4fNf2peAjBG88qxs3gf0V5RmcCJJQcDVrqauPp590Lh9cPCg5Rh0X8n9K7SBjwxLWIfM7kW86dhj2Tz8LQ8JYwSJDLlWiSHeAX1Ih",
    "firstName": "Qnb8Ge2gmO6vx51qPFcaBu3jIEhKnyHdWTlD8oTuc00J519VH",
    "lastName": "5jQ9CzOTjbs1opUK229WxlWx52zfXgB3zrdc016jcykBXfm0ivXPRTnWWXbUdMYNeb0ed6yqFT2D8oErUBgMvEIrBTmPGkCUwC8KJHapAd2ICG9whqiN51fGVBvBW8wtLFdumoTWBWFdDPKVg3Il5X10zxBwF7ZrMdW9CQ5dMKrpzckPg3bl0clAJX6p55QRjN0VD68pRAPqNag3drpeEKOoHVOM0FE",
    "email": "sFf5MnvDYk4MvkPIMeXrZMPHHDuIj82LOhQAFmdDGhqbCfUpuSQuEGblkF4DO6oDnfe2BrGiJ6ummpMRhClWjxiDdmh1sGFQWTSxkzQ4Glr3KdU1QgX9NgN0C524LHVHAOfVn604rr7bF1dvibF5rt63y88jQ31qRhmfnmjOOr0ttdZLpERQ7XUG630W71nZjJeG6yvU0wotKnf9260a4VQaYQ76S",
    "password": "5bekSlTogTUEnE2CO4IOeMK5XJV4POzUZNfS88ho1b3pQ51EaJtpweutXpyMd7HdUW635ns7zwwpBx4MhybNMFhJ5PwjWdxRaDUf1nmATS0vq5hHDtvq9MaeCGyyU5q5JllLIHlCAm70rpI5Sdv10GgCmObhUBnEWIpFpLh07o1zNJEGWaHWQYzdMKuGlSkiAKX0ve0DD1cqLQ7H0PERNd4zXzgjrBB1ly1RN2",
    "phone": "q4GRPxYwyNbpApuam3rGu2iwoRygEAK4ErVuZU1yHcYiBstYvUF0XXwmO5CsFnxkPtOPnPn42lnEOQCkKhlIfS43XGwC43XTxMIUB6ZEsmigcVBXcWFrOKvLr2ov6lpD78xJewoGSGX5By2OvIgjsM5UOupUPPxXX4HbB5RtMPzonBcSkscNeiH3M7XCWuzTzh4anWEaLdy9PK29deXsxEvjMtVIYvBxNGIaDm",
    "userStatus": 1459390423
}
    ```



  

  
#### Path : /users/createWithArray
Pathitem tpl
##### Operation : post



* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | array |  no |  |  |  | [#/paths//users/createWithArray/post/parameters/0/schema](#testtoto) |  |  | List of user object

* Example of request :
    ```
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithArray 
Content-Type: 
Content-Length: 1238
[
    {
        "id": 5226138814480646144,
        "username": "yAWWEbkx0GmWBNY25DFKQbLwyhvh8l4GV1CAcX7cEu8fh7hmKW7A8S6GaCYjY2ZU3CugACse6BuoILLsIS3QLaxWMvfLxfFBSaRsMkHTWbiFX38FVbwHl3D8zST78yI0IAsvVapRlHxiKFYGRuocy1l7Uee2NX2wxv1sFrk08RjTwiAoMYAl0WsVaGXYD0ubwvDbXXc5PwZmOzKBylWzhous5sqItUTZqxbnvntkUsHI2rjBMga4",
        "firstName": "FwJ7WsBRmAhULFp98K3BrMET6fGmqK16gKeddP4zpmtb1Tl9DpL5bpZhFFE6pFcGqqTDfYdFkHRlAcveBgkMFj4lYIrooD4O4YrjWFZgmQBX27bEnwr3PvoOePcCthrxfSRbxRrUH3RKa3pxzQBplZdAOpdiGEPWxH75yyZgCR0MUpktfVSBU6cJwp2d4S9CzgH7PHoryoetOyW4uPGpVT9sjbFn3OZD4HLTp9kYyzrm7o",
        "lastName": "Ce8191aBkmhIq5H39pO3OXnMvWeS4CkGQsI0tTCNfTvGYdJ8Dxbsvzf1wtTB5diWF0W9UyXastQrGzzk7KMDk1EQuyrAMKwrKsBE1yOu1EVIeu2mfPZzRDqlbSWXCspnV12XzQrBvmkKRm67c5H3J7pV0lTCOi0Jk2GUT7vpuP9lcgsomas5hR1idUV1dVKxXrrRzXg3MqpZGSn32Q8kIaCV4xWhtHPq8hh",
        "email": "eyL0YbZF3nI6eRqW13R6BOo4vdvEuNmJl7JkjJZm7HtmzUiBY9HzY5Dtj87OWtxhBhBU1Bh8jLvSFNtDXadVgQo",
        "password": "ZwnV0UdCbPxdqPmJARBgE5UBg7xwYW6YsuUto76AWDNmsa631IjFNdh4lOAjKHidbcHAkNbhqZDT9KWasfPft7jPVU9GBrUNEBnYpyfQyTJHDGR5WHlqPEfKzorbPmYuXmsnUIdtCXafD2lzJGZylejUDL5t74X5qqsl8FOLDY0g1lQL2Pkn4Ei",
        "phone": "pobxs9CSz5dIK2to0uE2PuNSk7fpLx8aVjIo",
        "userStatus": -1860626777
    }
]
    ```



  

  
#### Path : /users/createWithList
Pathitem tpl
##### Operation : post



* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | array |  no |  |  |  | [#/paths//users/createWithList/post/parameters/0/schema](#testtoto) |  |  | List of user object

* Example of request :
    ```
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithList 
Content-Type: 
Content-Length: 1354
[
    {
        "id": -6368669577722724352,
        "username": "hcPYh3uQcjKts9cLu7vIpRAlqYlSANNSZCQhGl8TESm72yT",
        "firstName": "Gpf6gPsGONypAlhzY8QEtZx8STfUs8q9xFfNvHtku2J4n0El9vZCuxKmq0gT8H2GmhuSZYct0VxnWbJ5HJIbgtxHtNACuDjRUNKULWnLSV9P7SUOBDZR6wzAk9cPMvHHjrB4oZQgUZ61S0PtEPlKmUkG4xwQ3dymE9r28hj3gp49qUC4KYP6",
        "lastName": "9NXHjOKxn7bwyeFQyI7XNgoITssRhzLrmJ8GyTdV1przD7pbQw9DNxmG0OxiojJK2SrBLFwM4YmI5MTWj3z6AWMBKkT8ECTHvlih0O44MrMSdGOxJoEkkqV5LOdqr77Xspesdix0KkSX0HuK594pz0ulPILhQTeiisLwLjxvDqtE7Yod7sCHt73iQPzGINZ1gLy245yHv2mD0KQ8dsQGATYqIy7rm6sCR0FV6eDBgZehK4qXxgD8aCzTaG",
        "email": "wMN9DNPzT3dvkdKBXP2Vnizvsb4lmKGTxt3bhSKbWYHgbrS8gU3EdC9GOe2bZI4wc8Ht1sEXqmdBN6K40OIerSUg7Wr6FwCREkkFMZDdlQO9XzdYoWcPP75W3x2J3FAI0VnMV00hRPqPoENMB0Cq7HnbeqUi5v06qoTlpTChI366HUTjUvK1d7csx7KDCLJ29Coyw1Qe5WlNQe6KKQMXXZqv6a8IV",
        "password": "L4vaD1cufhqB4hQa2A0OyYOYtU8BD4up9ZAN0Mhg3IR7ZHh2hiQQgFOKAXmd2QDbPdYPZg53YXaYEs0WKRM1wBL6z8kBYXMNbLDb2Je0GoYlQYhBP4DmFpsexMPvKCjWoW7qGlrnKpIAoZce3PAJe2XLPNhAqAwOxDfdZGBJ6jkujwJmmj6Am3mcRDMhei5LWkZV1AE7UYCdvlARFGs2JOeBs0SGjYsfirbk2PrWO49kqJb5pE79slKUm",
        "phone": "BGB3VUu7exWGuLKD6anigNWnXpJIk6lVMWYIQtP50MLuxv8EGwWWkTkhi3ZCalxWivE9YteZfZuNvCsb9o8thsKzwKcG5JDofixeMLd1LIPglisuGAXY3IyAtKhzuUXJduXZfb11TRhe9KJPlHOpqmZT7gsBbqkoUinauobnftCoemez32YtpYnwe",
        "userStatus": 913390282
    }
]
    ```



  

  
#### Path : /users/login
Pathitem tpl
##### Operation : get



* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | username | query | string |  no |  |  |  |  |  |  | The user name for login
    | password | query | string |  no |  |  |  |  |  |  | The password for login in clear text

* Example of request :
    ```
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=fsOaLclfBwDR0fgeCuOFxN9XLwt0mBqC4fNPs843EHUFXaTzFIfdvpagWDhifIVjXI8qQctvToaRz4qeMFsi4Cz0gQjvyfPwXXWOaqj4OuVnzlCm15E6Hd7X3rtCpassword=i8Dg5sqvLujgqHPMkbNpPU73157tyJ9RSN7Xfyt12Nhtu6fPi2f7XmbYris02BRVpZSExmFA9X3E3itmkIth5FgxXJx0kpVJoOoVa4vj1zX5RrrcaVtgAKNytlyOKuy9iW5t0BM2aK71cydmtHC4sqCWLbKwFjFYfKrgmejwZqxbZLyssaxVA9RmlCS1 
    ```



  

  
#### Path : /users/logout
Pathitem tpl
##### Operation : get




* Example of request :
    ```
HTTP 1.1 get http://petstore.swagger.io/v2/users/logout 
    ```



  

  
#### Path : /users/{username}
Pathitem tpl
##### Operation : get



* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | username | path | string |  no |  |  |  |  |  |  | The name that needs to be fetched. Use user1 for testing.

* Example of request :
    ```
HTTP 1.1 get http://petstore.swagger.io/v2/users/xZbiqsEFLbEcJQbuoDXzaTakKwGnoHiWGuf7WTMI5rUOh5jGJgfU9pfUWVhkCAhj4wq1qdKvFEjWKCDtTSo3iDYezgybQQvVmVWM9GhOlBL5doz7gYbyC9NbpmngcSbyO7kXOCLadwfrUPzbNKKqUxBkTZA5RMEFUZCIBnSOU8gOYPZMzJcuhOOaNpgFbUk6UXOvlHkfQ 
    ```



  
##### Operation : put
This can only be done by the logged in user.


* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | username | path | string |  no |  |  |  |  |  |  | name that need to be deleted
    | body | body | object |  no |  |  |  | [#/paths//users/{username}/put/parameters/1](#testtoto) |  |  | Updated user object

* Example of request :
    ```
HTTP 1.1 put http://petstore.swagger.io/v2/users/3Pp3CZMOt4DieqHv5Tqq0koPQJxaYnK2da5P9SECWhUbICHOw7fwsDlimStlgdntosjxlY9hf4sYH9Ndh2KJG522YvoeJLI7e2Ez0ORgSkezu2NL4xvKCyNB3bPNXyUbAzLBnCRgW6Pq8CccaHXNfLojXe6UM06nARYXuPdqV3R4G3hQLeD101kXgrR2sXq2PoZjedJagBeWEvMpKqrKsLHIdzLFwbHmzHFNUpYa0c 
Content-Type: 
Content-Length: 683
{
    "id": -2211209787167735808,
    "username": "8goZ6TaDqm4AhRxuY2JbElwXYxPJA2DIi1HoUS1ke6VwXs",
    "firstName": "",
    "lastName": "uK795E74bXNLZqthrbFm3HGiNBPL4PHzzPIFtQJENxqMYU3p",
    "email": "IM9qs",
    "password": "d4iY97GIHvqnYg7D3E4PCYT24BOe1hHfmZev6UeOqFbpVi2ZX6PA5JDalsonK5C64RCbLR0cwcBsvEssLi3Q1G0m8pJSvlZzcCLYtMbZYMrtrUWccZ3dF4zNtiGYEFyRhkQL62L5Odyg7usjtww9A6W4pC24iBWAVMl2O67DjGTqamJESgNtmKxLnzQFbMf7zB9nHg11XVs7icMbsAEPkbBHLrnWdD3MedaW",
    "phone": "cYr8qzqDlB5VfVgrwYcYm9bZdYeq8aUl9ltzUTcguicKetbLroJNxVNKT1a2c5olrRVmL8CfqP0FibqKz9y75lRYm21y7pUyhPV2Xxioni3Fuuq4EYbJj3IF5Jed99MrYHtWfMlC5piATIExGQh0UZG0JUeT40k3IO0YAlAGLTgFCUdjLu",
    "userStatus": 291890996
}
    ```



  
##### Operation : delete
This can only be done by the logged in user.


* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | username | path | string |  no |  |  |  |  |  |  | The name that needs to be deleted

* Example of request :
    ```
HTTP 1.1 delete http://petstore.swagger.io/v2/users/ZGcUU5YVq1De1BPncv86LOIG11svk8YjObdJgcEGdiVfTKD6fLc0zVHBW96hh4B6fPPw1udfM8vGS8M8UZ9uVQ5R0b9igLowAe2CIgRuombhuYqpXATSqYKraUJqF7 
    ```



  

  
  


---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

