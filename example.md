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

* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//pets/post/parameters/0](#testtoto) |  |  | Pet object that needs to be added to the store

    * Example of request :
```js
HTTP 1.1 post http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 890
{
    "id": -1630035879487602688,
    "category": {
        "id": 2342188109099171840,
        "name": "Uux8jRvgRam6SMLLjuxpKh55n5MgV3bQxIZQAu6rFtyxfjizOQYz84EvaqL5uXW1FVSfqZH5sfDIzWhnNgXVkBru2dAwaxyQtr6TrNZT2CBBzTZm9XhuyJZBWA877GYA84uzRusU74wGYw28tkC23"
    },
    "name": "doggie",
    "photoUrls": [
        "D0cL8js6UAapa2TDX0ItHGZJOt3rv7397fUfynltYwS8zLLwMuZtaZdZshqYot7vJ2Lhp6KoDDxcojIbNIFXHSXa9n8yRg3AiOSIVD7ygELFXuQLcwJUpG4y3d7VtavMZnuU1BthgfWeJNZVjIPIoUhs8onBzToyhStiuXzLcwZWjYSDHHm6CEyK"
    ],
    "tags": [
        {
            "id": -7277683858139512832,
            "name": "CPLa7DEp8CZTPvTLPRDszlPFYteIvb581Qj8uXxDzwxp2qaRiOkR99x8CLR8WWgXNz6ixEV7aswdTH5bvp3FzBNcmEljBBhpboHJ2CQd5nqZ5vaAVegvP4IcJ3wkFOKRcrAe4rr9PS8UojvkyMQnQyAzB6UhVE876JmaaOkZGsU5"
        }
    ],
    "status": "ppkbgI2OiCqpxHkcPsiyOsJDMJkfDp22Pme55gUoTkOq18CRBUqqn939SnpwNrzDONIT4CiXW6oYf0PQVfhiplsiIRO"
}
```



#### put /pets

* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//pets/put/parameters/0](#testtoto) |  |  | Pet object that needs to be added to the store

    * Example of request :
```js
HTTP 1.1 put http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 888
{
    "id": -8583649976809160704,
    "category": {
        "id": 5160559353975013376,
        "name": "pQWn4hKdb9aPDnoRcCg7jPiMgtZVjM0IDW5HdPUpZ5fCsEuFgKMAA5mRylNR8NALJFtXvonvtC7WgCBxmo7XuuP2QCUYpuK9ae6GCuc66k2nWDUj22gww5zmHul7Y6g9knQWR22Ym5liJgBLiSiPXRcFlyNkE"
    },
    "name": "doggie",
    "photoUrls": [
        "uYrkVinYhJ3C2MTEycwQ1uHda3MXnq1RpsckLzi2jmFl8yZGLvxM0f0aiM7Gd8yCBKWnkfpDB5YKEXrptYctddEwZLcdUKPwvLTP1isCorm2pNsSLEmZR1vRMI4HsTdYF6NGpgjOHGR6tjZfYmfQnKIatMSWG5UmcI3CYnqG3iMwBMMA81qwM8HfVzbCF5ZRO2uMqVstdfZP1Mp"
    ],
    "tags": [
        {
            "id": -1471848935441039360,
            "name": "HzYoOUX0xD6wuUzZGZU9s7psWqemB2cjCbIq5GrCjx9NrIN8IHibPHEM8T8KVk3xvLYBrpeLXnzo6mxP4P0TwEFExOot9s0EeZgGourmS0LYmiNq8OkFs0j0OIuXbuCpuT6Snxffy0eUi2lrQ"
        }
    ],
    "status": "6jGqjv8Otki6KMZQFmnUCWVQQeTcFJSL2zbm4kaxEtDpgDfVZDQCzLtq0mDF5wq85Cu9WFHB8l1oYgkYUbBtX"
}
```




#### get /pets/findByStatus
Multiple status values can be provided with comma seperated strings
* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | status | query | array |  no |  |  |  | [#/paths//pets/findByStatus/get/parameters/0](#testtoto) |  |  | Status values that need to be considered for filter

    * Example of request :
```js
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByStatus 
```




#### get /pets/findByTags
Muliple tags can be provided with comma seperated strings. Use tag1, tag2, tag3 for testing.
* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | tags | query | array |  no |  |  |  | [#/paths//pets/findByTags/get/parameters/0](#testtoto) |  |  | Tags to filter by

    * Example of request :
```js
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByTags 
```




#### get /pets/{petId}
Returns a pet when ID < 10.  ID > 10 or nonintegers will simulate API error conditions
* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | petId | path | integer, formatted as : int64 |  no |  |  |  |  |  |  | ID of pet that needs to be fetched

    * Example of request :
```js
HTTP 1.1 get http://petstore.swagger.io/v2/pets/869843238079430656 
```



#### post /pets/{petId}

* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | petId | path | string |  no |  |  |  |  |  |  | ID of pet that needs to be updated
    | name | formData | string |  no |  |  |  |  |  |  | Updated name of the pet
    | status | formData | string |  no |  |  |  |  |  |  | Updated status of the pet

    * Example of request :
```js
HTTP 1.1 post http://petstore.swagger.io/v2/pets/C20qkjUrBLqqnmCs2hSUrI0jUFgLWJ2zM3Z6mUxXFXo2k1vmiohJ7h31XjMU2PtPStVentc3rA6LBB8UZpD6HG8E0Vz3K2SDwOSTi4XJF3vhFDbF2PMKv 
Content-Type: multipart/form-data, boundary=57cac6de0f95d
Content-Length: 2
--57cac6de0f95d
content-disposition: form-data; name="name"

owPXzA0rewg6qybnhRqN86qjLt8xdErCahAKSAc67sdx0oVifm5oswHd0QKevcQGtrql2Cs94FH53CnjYtHq0pE1gofLB6r5x
--57cac6de0f95d
content-disposition: form-data; name="status"

rzuTIyypEC22W0wErw45xkuN55TxaqoB0SvJr396Gb8DcEhDblIJGcwLipisQH4RAAA2DK8kVhX8VfL7BuQhHm3ZMlsD3xu
```



#### delete /pets/{petId}

* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | api_key | header | string |  no |  |  |  |  |  |  | 
    | petId | path | integer, formatted as : int64 |  no |  |  |  |  |  |  | Pet id to delete

    * Example of request :
```js
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/-4855219206800539648 
api_key: 75GLPO5L53T1jF8U9ZbQleQ8AiLDQfhXlYIaNOVTSPUbu35E2gvovlx5EiJuy1sT0a3NZZGRPA2kE7ZHou6T
```




### Resource : stores
#### post /stores/order

* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//stores/order/post/parameters/0](#testtoto) |  |  | order placed for purchasing the pet

    * Example of request :
```js
HTTP 1.1 post http://petstore.swagger.io/v2/stores/order 
Content-Type: 
Content-Length: 242
{
    "id": -1041962171270955008,
    "petId": 4111011621919260672,
    "quantity": 1155240320,
    "shipDate": "2016-09-03T12:49:34+00:00",
    "status": "GZnedMEXdOn9jNthfYENzpGHBfJPPq5wpsKDepBseYByM5P13tODTvkuL4kAup6U",
    "complete": 1
}
```




#### get /stores/order/{orderId}
For valid response try integer IDs with value <= 5 or > 10. Other values will generated exceptions
* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | orderId | path | string |  no |  |  |  |  |  |  | ID of pet that needs to be fetched

    * Example of request :
```js
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/x6g9yv7a3UfSVjmKXfghK1l4BPuHJmyhsPq1lybosrh 
```



#### delete /stores/order/{orderId}
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors
* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | orderId | path | string |  no |  |  |  |  |  |  | ID of the order that needs to be deleted

    * Example of request :
```js
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/LE8IToZEplJ0bdIVzhd26E4rcgQEH82sMbbGzbkZw30IhIDRZRU6vYyHeomVxpojBAZbLjaina0ETEvTvq00oyICX5yuvXO6xNhi7rAuCB9wfFqL5qMtZv6XAE 
```




### Resource : users
#### post /users
This can only be done by the logged in user.
* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//users/post/parameters/0](#testtoto) |  |  | Created user object

    * Example of request :
```js
HTTP 1.1 post http://petstore.swagger.io/v2/users 
Content-Type: 
Content-Length: 801
{
    "id": 1571874085200199680,
    "username": "Xt9MNEoVb7AzQGiciCOthgdPzZQqCHSAa2nYGLTSTurJaJWtmKWD09tA9j1M1TmcWKaCv3uoxW8IG4c2O8GPiapsuqevkBHglRTRVogtkob1so3hxK6PUwipXxUh8ByutrlpQBSb04ctsgKZ1QPWn7lkEfBNRahlCCKseDEfHQI96s98",
    "firstName": "Y4H6p1LEDywNQRptCSIfwXWnG6u8gCsfG9m5b7KOGhCx920LUI1rGYPm5jvlWXAC7WI",
    "lastName": "4t7LLKiUMiGH1I9",
    "email": "GY3Miz7exIREFAYK45vPPNKC6rj79sPQqSCIrKWYtOD8oBTsHohxc29itspDVeul764zR1ykPctdOmGvLY3X0cgtFG7AUBW2I0Cz2bURno5bLMHwKKuKXKeDqldlXaoFb0fdca5zybLkXtQHelrc5GPv13RZdfEogUCs5I2DTNXQgOyv90HfGwKHzCGNR",
    "password": "c8gPAlxCZqqWhHLPcUPTavqUd0xUNpg0xwP8RmKQMbN4SzT5uJZEfqzsq6nevDe2a3a2pVSc7Gg0fa5JT5o9vXCV3Z9yDnBNqMQQII3PpjPFuVpo0NxvK9qO9AnMXYAoLqft9ijzB8e63Eu4r1zcaZ0kzn6xmHW78bBitVS537b",
    "phone": "LFbdGL",
    "userStatus": 801594962
}
```




#### post /users/createWithArray

* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | array |  no |  |  |  | [#/paths//users/createWithArray/post/parameters/0/schema](#testtoto) |  |  | List of user object

    * Example of request :
```js
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithArray 
Content-Type: 
Content-Length: 860
[
    {
        "id": -5862337553939562496,
        "username": "KbwctiRzv1VBNEJra7ZXkHQs",
        "firstName": "6Sc73FSfc4JvWi0YeBMSld3sd0NURf9Y8m5c2Yre2aKZtKXHmJAIXEbbEY6vefumBzzEy0TAbDAEnxmKhXteBEpgDvMRLgenQN1oOUZZxzEV71GoZ9",
        "lastName": "BO3RrzEjkVxILlKa9F98dJN8QOPfNZTpOWgfvVzQQ7zCsjMCZVLcFylwnaLbaEAYBRe7MNYCVxenR1ZQXK3Cjo8GyTRJyrHaiWh5KgIFOW3FY3wVNzx7XFNwzFg87XiqUAvEQdkEank8qR3erAlpg9WPPcXWagm4RRJH53mfrHnRzr602rqiBm8qz5nJmJOdByVHBhW2ZkUyL0zNsZ63meuVkRFGBtUd1PUD7RG6bAFXA",
        "email": "L3dR6A6Bvqsa74D1hFRciY3Y5fzKc9ZYcdQjNWUinntvr7wJMoV5nZ3seDdrNdp",
        "password": "qgjdcewABZ536CNT0IYnI2QWF4oshNsH4MVh0rRCrWGxytrzcpX",
        "phone": "sOR8SfBa33R7QNoReftGc9eLCFlO5iJx6AGYPh9Sl00bOo23EwJRFXCiCX7HgQfmrVlgdu9yvaKjyMmdi54Y3HhFEonUfChGyDXL77kDh4WQRj4ap88sPq7uOup47GKGjIsrPM47R1XIk1TJa1b0",
        "userStatus": -991009896
    }
]
```




#### post /users/createWithList

* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | array |  no |  |  |  | [#/paths//users/createWithList/post/parameters/0/schema](#testtoto) |  |  | List of user object

    * Example of request :
```js
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithList 
Content-Type: 
Content-Length: 887
[
    {
        "id": 8071933227972952064,
        "username": "S1H4WcQObkyWJEBH2m990eO6lhMUkaZccGh8T7X5rv2b9ETc03m0ha7CsUxN4wZgdgp6omcQRe11SVeSYATfL0SeUp1ZW0f9hFgG1sxTHz",
        "firstName": "zu9ssKlIvlAJf0LfXLu739oKbQh4xRZ7m8zOSUxof88v9TK6FfeJpCtAtLF1CE8YNHNGCk5StdoC79INoXwOz0p2L44oJcnxUa",
        "lastName": "xvjpYxNAEWjslgYaQYzTKEX8n9vU4G8Bbr0aYOLDL557l3hc2Q5Mu2UScqMg6VRimStlHeYsj3zF7RRaIWWdZR5biSsoNkHacavUotmIxWnFNfPwb",
        "email": "JbDOmVHPku91FlcafAECjczGRnVHT7tCj7qG38v",
        "password": "CEpi0Btfc7SvkrccO8THgnkzuKfxTKVwplOpWhF9pxEJZRWOZPwfdQPHB5fuQb0fwOEt5jCvRgfR7bF71bne1cWCic68n6nUV2n1lZwdgL4oWKvXVTcX68zol",
        "phone": "wINUDIW0Jh0gvg1AFYkaVg48dagNzCu5lhZY0VZKdZ0Jg2jV0E6WUa47llVUXp0iH0hHWgsafsTwvdrvRxrLIwT3ROYPdY7UYpCUF44VxYr2bSy2q0O8wHcovadJ8lD7Kg2qk7lR5MUgFsj5t7eZOqokBC3KYHRJXT9i0u96h4mXxG20Nh0CIpXj1130",
        "userStatus": 1683079700
    }
]
```




#### get /users/login

* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | username | query | string |  no |  |  |  |  |  |  | The user name for login
    | password | query | string |  no |  |  |  |  |  |  | The password for login in clear text

    * Example of request :
```js
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=GOTYPo8VFciCKZFKNXLpFanYco2c7XWNMPMBdUxT7PvRObCB8o1OypNLNPXUNUIzJuaWoIPwxlnmx0YGo0uXqiIdpassword=G8VARujlFgKn5hVrEiYFhF3ia0IsJWAp4v0W0jhFz23FjZ7Yh6DzLHRVIzorvYQAuRwvaObKReqady9vEM4quVmcvKD1JuCel9JwXUgO9HZmf8SUVWlpSHBosfpcJ2q5baB94SYdzXAP6sK2o5rhM3Ffi5r27S7i2Ir7ApkanVZtnJwMPX3B1JRjOilWbsedbGkL6FVtAVXXFtKurO6 
```




#### get /users/logout


    * Example of request :
```js
HTTP 1.1 get http://petstore.swagger.io/v2/users/logout 
```




#### get /users/{username}

* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | username | path | string |  no |  |  |  |  |  |  | The name that needs to be fetched. Use user1 for testing.

    * Example of request :
```js
HTTP 1.1 get http://petstore.swagger.io/v2/users/xXMmg7irAxFLe0xkFtNgpLe 
```



#### put /users/{username}
This can only be done by the logged in user.
* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | username | path | string |  no |  |  |  |  |  |  | name that need to be deleted
    | body | body | object |  no |  |  |  | [#/paths//users/{username}/put/parameters/1](#testtoto) |  |  | Updated user object

    * Example of request :
```js
HTTP 1.1 put http://petstore.swagger.io/v2/users/fYzGNF8kDUHT20lDx0oL1W6GpUXOFbTU9sBW7KhKFZEHZZkx0Jj2FpJ5jGTZRMU1evYmfg7UfLCfLXNMH6OmwxsPdmP58J6ne4KukRpzD1PpZCbGI03fxv5LRUQ0DWoS18nl0MVDOL2Nnet6ewlM2qyTloUYliRnreJr1E5Pp8CNm6TBDfoFGWz1lt0HMR4d6NE8sKXSSAGfGARj 
Content-Type: 
Content-Length: 820
{
    "id": 7436580326488408064,
    "username": "ZGeRdqNMIZ6",
    "firstName": "0l7SmXskDp8fcOf22hg1YvTbVGXDG4yGpFzMC16grevE3LG52X70s0bnH91ndA4DfDpSEv96KEKOqrUso1tQ1EeIOg51QaF6N4YrA7ylMiacK4F858Z7NeQBvWDm6isTnrlYzTkmcuzWye5En4MajDMOApaGIDA64W4DPo02TzYsN37b8Tlrx7f7xqNf3ol8kqM9PMcIlaa9ehkmbFOIN4PluDBy1WGlnsvceHUzS4J6l3txJhfwl4SQHto",
    "lastName": "q54NxAZMhTm9Y5gk8JRR16onbhdTKCCaHGXfhW1yQoIOtY9CI0uJ7T6iajbUWO5Ev2TMZVkQj3FN1OqKPUtWOzfYTqTPfZuK2nw1jRSDUxrWmRGbMa7AKmzDNtt2sXMuljwEaoi5WJ2",
    "email": "AJtmTBWDXwhLZLNrIAW4TsJ4R19NKc6kVAHObEs9aJUauHBdixib01gR2qFNCM7xmP",
    "password": "xtPGEyBO3jqhBYANYB",
    "phone": "QEtwr6izDFo0dSPUwovksOKKpJkdHVgyzK51QnAu3YugRkanIGIbutVUcf7UbnsL8xMYVmtZlYfciqA16icAL8vYnCSz0lk8T67PtBOPz31SuBTAU6bFeGECjwbjRvsLCzA6aoVKrXCWyvwtCH9QoNsHjD0b",
    "userStatus": -1061014567
}
```



#### delete /users/{username}
This can only be done by the logged in user.
* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | username | path | string |  no |  |  |  |  |  |  | The name that needs to be deleted

    * Example of request :
```js
HTTP 1.1 delete http://petstore.swagger.io/v2/users/M3wSeVNYnKAjj6PMIxVyWJ1D2FEeO7bAaItpDgn01Yjk497NG2mCLngO3V3R3fseXWDAc0BdZUy43FRKIenuCEjFzmxDB0RzWv99vKmvFVzJAqtjFQNhu6W4ttH5tyFq3OzzzV4fRDYs4rLJiz0MGX 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

