# Swagger Petstore

* Version : 1.0.0

: This is a sample server Petstore server.

[Learn about Swagger](http://swagger.io) or join the IRC channel `#swagger` on irc.freenode.net.

For this sample, you can use the api key `special-key` to test the authorization filters


* Terms of service : http://helloreverb.com/terms/

* License : Apache 2.0  http://www.apache.org/licenses/LICENSE-2.0.html 

* Contact apiteam@swagger.io : 





---

> > ### Global Definition
| Attribute | Value |
| :-------: | :---: |
| Schemes | http |
| Hostname | petstore.swagger.io |
| Root Path | /v2 |
| API Base Url | http://petstore.swagger.io/v2 |
| Content-Type Accepted |  |
| Content-Type Return |  |

---

> ## Summary 
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)


---

> ## Resources 
> > ### Resource : pets
> > > #### post /pets

> > > > ##### Request
* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//pets/post/parameters/0](#testtoto) |  |  | Pet object that needs to be added to the store

* Example of request :
    ```
HTTP 1.1 post http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 794
{
    "id": -1825839766315204608,
    "category": {
        "id": 4163543856542908416,
        "name": "NcighRVKG4Kms5dWWJBmuJNJIYSHF8TtkcJC4FnLK78ddl995LwzvkjdibVYj"
    },
    "name": "doggie",
    "photoUrls": [
        "rE0bg5QDQALYOZjX8pJFYe0hrjtmhMbJrbUHhLl7m75a6p8fORUN5V5weyTvl4fNgavxVQEiYKs49BkYsfMxaR4oqYUM29zjj4QfVvxTf0YpBio3yaBI2G6sE1fHaO0uTRJOmhIChG2SZqWxAxgCem5SokAz9A32sNQO5yrmftffTbNuI36WqcPOwpnF0rIsfyhk7IHncWD57qzQtGMTTCHq2562wOvMnN7vwOSIKvOSWoIp5viY80"
    ],
    "tags": [
        {
            "id": 5848395080779431936,
            "name": "udCi"
        }
    ],
    "status": "oGwvb2k4L5zzXvXGV2cd1kepvjUIWdrkTYQ41a8MfImdejT9m6nnqBNVVIERV6cP43U5d2StLeH0yBaUHyi7a635OIXKOazTdtZrwRVi5CiDdtyU1R2bX6hMOewDo6xCAw37nYptAI7ObFIdwLouRFgGUNkjURVunZBLX1eyKmmV158yQx2Idjo76Ir1An"
}
    ```



> > > #### put /pets

> > > > ##### Request
* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//pets/put/parameters/0](#testtoto) |  |  | Pet object that needs to be added to the store

* Example of request :
    ```
HTTP 1.1 put http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 653
{
    "id": -6621982625672200192,
    "category": {
        "id": -6469664316348956672,
        "name": "NMpKm2CkM0DTJXZcMqcVMSZHZIXz3t0QfqBCseWfez8Yw7aiymelfe3fW0O0tPRJgslJGhYVR7Tof4GOrVaH9dW5eL5IBWrSpNB55z1WHVkWZ1KrWU9585amRg4tdwlCjWIowJkdEEaEFV6CQfHYkSlc8qFmW0YfWHEtqYH5DRKjNQVD"
    },
    "name": "doggie",
    "photoUrls": [
        "CCruXDDniZkjYzgFeJ6cqcQiX95O5JUIlldjYQHhQ1AOBRuPAB21NSkL"
    ],
    "tags": [
        {
            "id": -4469313148259663872,
            "name": "79tQvO3ONUw5KxFz9x3Y7F19tUueW"
        }
    ],
    "status": "N43hUz6YoTSUYCsEcBbgAjVBtovXCsRqwVHrvNpTHiOGUgk6RwmrPi3jGygj08Jx4qZAeptVHhBCyWJps6RioVC4tSnu1726x"
}
    ```




> > > #### get /pets/findByStatus
Multiple status values can be provided with comma seperated strings
> > > > ##### Request
* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | status | query | array |  no |  |  |  | [#/paths//pets/findByStatus/get/parameters/0](#testtoto) |  |  | Status values that need to be considered for filter

* Example of request :
    ```
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByStatus 
    ```




> > > #### get /pets/findByTags
Muliple tags can be provided with comma seperated strings. Use tag1, tag2, tag3 for testing.
> > > > ##### Request
* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | tags | query | array |  no |  |  |  | [#/paths//pets/findByTags/get/parameters/0](#testtoto) |  |  | Tags to filter by

* Example of request :
    ```
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByTags 
    ```




> > > #### get /pets/{petId}
Returns a pet when ID < 10.  ID > 10 or nonintegers will simulate API error conditions
> > > > ##### Request
* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | petId | path | integer, formatted as : int64 |  no |  |  |  |  |  |  | ID of pet that needs to be fetched

* Example of request :
    ```
HTTP 1.1 get http://petstore.swagger.io/v2/pets/3635582944392773632 
    ```



> > > #### post /pets/{petId}

> > > > ##### Request
* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | petId | path | string |  no |  |  |  |  |  |  | ID of pet that needs to be updated
    | name | formData | string |  no |  |  |  |  |  |  | Updated name of the pet
    | status | formData | string |  no |  |  |  |  |  |  | Updated status of the pet

* Example of request :
    ```
HTTP 1.1 post http://petstore.swagger.io/v2/pets/cH6lZRnxtOBrnyXzwxezlSLPK6KifIesqlOpcbXF0y7n75XDCbdX4YMP5x7kgmNGIB6UM3ANCIbJN8npjAnozadFHlZXHMEqnKl 
Content-Type: multipart/form-data, boundary=57cabf98684d6
Content-Length: 8
--57cabf98684d6
content-disposition: form-data; name="name"

NVYpD99rhwQB7eZGodm5yl3g8IGws1HgXFGBOP26lTHs7H9vUvBsRFJ0npwP
--57cabf98684d6
content-disposition: form-data; name="status"

e6oTMZIC1PXVwq2ezy85aBWPkWdJt3aH9zBWyjyA8vvFWyTv71AhDw7XtlGWoREyqfuZy2AHy6nuEg0MiA4V7bTBxAyVrctSrXS00sIzy54dm4ZFF3ANfuoM4WHw9bpA8hA9KiIioNwKRvpwz0kOuJByFj5OuupDMZNwivPGjlqaRQH
    ```



> > > #### delete /pets/{petId}

> > > > ##### Request
* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | api_key | header | string |  no |  |  |  |  |  |  | 
    | petId | path | integer, formatted as : int64 |  no |  |  |  |  |  |  | Pet id to delete

* Example of request :
    ```
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/-2132738054610223104 
api_key: Q1fkKQTqaYfEtEifE5LXBBDUW44NVMeLNt6yk0ZuYe8sTqHywtv74910e6O9S2UGv1fQ1ekZtsrmT9UpCqwHzyHNEwWwzRd5SsVTGfTaHlwBur17RxOq6weK2ahB1uGTWBMDQFNy0kavLbCDJq4PWiAZsRAumhoiTbWKQKiR4tnQEZuoqyenQOmjGXO2fcl8nhSe2b66EtXjtrIT0WhRLDarBZuQbPYz7R
    ```




> > ### Resource : stores
> > > #### post /stores/order

> > > > ##### Request
* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//stores/order/post/parameters/0](#testtoto) |  |  | order placed for purchasing the pet

* Example of request :
    ```
HTTP 1.1 post http://petstore.swagger.io/v2/stores/order 
Content-Type: 
Content-Length: 299
{
    "id": -8682636779569807360,
    "petId": -3566150644819558400,
    "quantity": -530858478,
    "shipDate": "2016-09-03T12:18:32+00:00",
    "status": "FS5cL1kh0bLDcEFg9g8z7KjVA1CwTQSzJYLv06N0hyEtcjKmzSWHDgCdieKc5CLPBwkBC7CUGgoTz8f91cQEssSKHDWMgHCReWtR45LKlaEVjT4k5UZynSi5",
    "complete": 0
}
    ```




> > > #### get /stores/order/{orderId}
For valid response try integer IDs with value <= 5 or > 10. Other values will generated exceptions
> > > > ##### Request
* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | orderId | path | string |  no |  |  |  |  |  |  | ID of pet that needs to be fetched

* Example of request :
    ```
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/RLXuCbq52vbOgwZUriOwDUrCsOuLT01LLYfo9GuccF1tc0oDicaV7Byzq3lj3m5Pkleu2IHfoIIAI6e1joXqZv0qylJCIPs2bGxepetNWcnFjCHC0E30a3qJpal70NacuHqTVTGS64ypGf2HU5I599OykaGkXQwsxXltR1 
    ```



> > > #### delete /stores/order/{orderId}
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors
> > > > ##### Request
* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | orderId | path | string |  no |  |  |  |  |  |  | ID of the order that needs to be deleted

* Example of request :
    ```
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/X6UnNapu5vdaEmYdG8T16JyyhvUKmW7k21HPc7khCxshUquAznCG7afpG9a36hn8j5Yvc 
    ```




> > ### Resource : users
> > > #### post /users
This can only be done by the logged in user.
> > > > ##### Request
* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//users/post/parameters/0](#testtoto) |  |  | Created user object

* Example of request :
    ```
HTTP 1.1 post http://petstore.swagger.io/v2/users 
Content-Type: 
Content-Length: 1074
{
    "id": 1838013941310029824,
    "username": "FpJxK8dgrPTBmJrYvnraI0fmEkjILjFqIoYsxcIY2CAom1mRpO17OhtsCNbn6ROOfNhNZZL1ClqYnNQNBSVq9pTMc59jWX8cLpZKpLM17dZv0PiCHd2RDVDP1N9XLh9wG9h5U361h6whWPTD3WvGR8wTWFQHW0dD9uI3yP5PWC7Sr0vvW0bO9HH5nyNky0XHvGL3vRTst",
    "firstName": "",
    "lastName": "V0QqXRCM0ku6H2T1AUZipF4taVmComXknNLlEn7FIBMqDFseArxZ6BshwPUVbRfyE1Tjp1Y7CKxgqZv0r20xDsP9hJ4tAk2flWyLXxSAiqQIqmJRoJp1ceb",
    "email": "XfXyAZOWVnHTUztc0kVqGEh4nH6zVh3Tx0r70f4VCLPxliJlDFLjj3oGKugGMjzjk0rkgvgTg5qCoaX1PJk9NJPyd6e0pOjKPK45glZwqq9OA7QqQazEUpd7vs7VgrF5cKbs5aZwA8lbfbC6mbKgBYo7qw2GXIM9tXBz8A5JJqVYCx4YJPfkNDrd9uU6dGgHDSgMtmvcNqapYfoH4D1Sgt5pY0wbGNTkF968v",
    "password": "ki2vI1K6IPJKH0dNqcNXotKhNpqUyWwSfznXA84jXO3FOhsftgcRKW8ymzsUwZMLyaJ9jNsgBvWqNpFhFS8qOhYaRr4nqR8Y2R8lFACh6yHTXnaDfj33B2estjQTbZSdR1ywBbNHJvBHSMk75obHqq9TK0NVZG9QHInjTb1CGDjzpEHv2Tcsjmm3m",
    "phone": "ZmR8dyQASKLTmswG1WkIrnBDPV0cZnmYJd7WMYxEIjy5L5LN16wtt77j37v2uS1e59aS7IwQ15VNaGAcN6FheMAhU6koYlD3vNWCvssxyokI5UVS1A9fnKwhQRGOcjSI7OkDhNaPbvyhqu9r5jGs3dKU4rJgLCZSqk",
    "userStatus": 1168286903
}
    ```




> > > #### post /users/createWithArray

> > > > ##### Request
* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | array |  no |  |  |  | [#/paths//users/createWithArray/post/parameters/0/schema](#testtoto) |  |  | List of user object

* Example of request :
    ```
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithArray 
Content-Type: 
Content-Length: 805
[
    {
        "id": 6424771196457320448,
        "username": "3cWlbvIYwc248UVUU2",
        "firstName": "gj8bXGh8N6CaaP6v0CeZ8q2czW7tQaj7urir8AAWHc",
        "lastName": "R2dn2PB2X14aB1i5RsoZWPhoYRYUyb1qdeNg4oj1qnb1pu6hWugTkxijpgeYsfoFubVyAeA0CM22g8jdDz7Y7phxFvv7LUNf6JOGYoHBaJDqSWDwwKuDaMbPiHX3BLjIu7psw64GQH7JELfavKOGwZvPGtSifc1JkqcQxgwoYD7ComMU7BAEA6thAmAPyBzT2MJA3gY1U5Ejrqez2O",
        "email": "DVGUw2vmB7WuaIdKMuIOoNsHfTVOVK1yGItcKZzm6vQge411yJPXxhEMaAB6kDE0l8d57NsejivxnwyVfoTMGxzR7aXsNCt9KHeSuG6NZBlm8UioibaYJKPRVNkJpNSau72ZO9MOL8bT2uhlGsjpd9h8WBSmoLxTSzTHJGvvOGoQaGbQ9vgnExwB9oXy9vr25lJO1ejPVIF6pRWzmdW1KsC",
        "password": "QAr05T2aeMZf0j5W1K2rBZ0YcWZXpBQfcighcisr4rH5KM",
        "phone": "Mx4d93e7gb6dAI4QVn6dzpF1u7IARvCE2GSbK6j1ipeS8iJ3FPgf",
        "userStatus": 1690323395
    }
]
    ```




> > > #### post /users/createWithList

> > > > ##### Request
* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | array |  no |  |  |  | [#/paths//users/createWithList/post/parameters/0/schema](#testtoto) |  |  | List of user object

* Example of request :
    ```
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithList 
Content-Type: 
Content-Length: 948
[
    {
        "id": -4281900467887276032,
        "username": "EOrN0QqdDjvzsDi3d5VlhWOx8YYssi567xU8nkl0ERA6uSaHY62f2RNbPLDh4JobgijECEEgvfnZ8xH6EJmGA9SqVwHZf6awota18OhE4FEcdliR5FyFOq5JWNIcTTIinSjwHA",
        "firstName": "LgPYtaglfWTVKk1uhPduJ6c1t5kZNVazbZxFaO0qKUluenZwcc0VidWMihM5cWEoWb36Z3xKYTfdgeJtqKpJXmwfDilPfZdbbhiblPVjIbwZpfsPZRzXd5cQnyGDyUPJb7VwXRPG2mFrB8hB0RzdWM4kkLXSGMCRUy",
        "lastName": "SpeysAeUcmcOn3nAZ9Fktrhm74YYYxnRWBppcEjo1vdozAZyKFSe6aAdezcd6z43busn8MM",
        "email": "i0yRAxqlcjzitawIJIWQi0TtvmRD8ENqElhfSIA51anukUd3C9TUaNoF9gjhU6IzsZPlHqqJAOeVIrZlBTfLGErPUK7PRPpjPeFxF5ggUubCWaXx3djKSLAMwHCnx1HmgmTVsabmFmZBxX9Basl2eWPKDr7atPxJbrEEBQ0gdZRKX1m8uIbIE0shsAsVpZEBqjf29gimga6dbslFawoP",
        "password": "Q6ZqzUQyzsZSH11YkneuusGXOm8",
        "phone": "KXSA3S1DMSbmkbe2dg1xDg27II5x4dSOaKpeCrRpk3MEf0HsgIZUY12HK7eOk6DvR3JuvBUPEGtTHbmYTlSRnVy72NWnTzTKDCf8e9XTPrNwC9uvvnnSiW0",
        "userStatus": 2036191648
    }
]
    ```




> > > #### get /users/login

> > > > ##### Request
* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | username | query | string |  no |  |  |  |  |  |  | The user name for login
    | password | query | string |  no |  |  |  |  |  |  | The password for login in clear text

* Example of request :
    ```
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=IDwBo9eDhsMfmBG98iiCON0cGi9GDTDmwaXVkcyCFlR1Xya5RsIGgISW02DDVhZssXoMaWpPihRfP1kGu2mLLfHLilpeDpH5n5Spassword=2hnkyezofU5KWrvHHdt0ySebiVhF09c2rznZNXo3RtONVkvDxZD6SRiaMzPNJ2QaBdapayt12hPXBlA9kdfc5xnR7cFQev0QJbgUKJWM0MJC8kLtx1GDy3vFgawuGxlqIBkskhfl3YYbiJEQKktjnYZD9w8P3ufM5AfqRuLUtK6LuKCf55yt4 
    ```




> > > #### get /users/logout


* Example of request :
    ```
HTTP 1.1 get http://petstore.swagger.io/v2/users/logout 
    ```




> > > #### get /users/{username}

> > > > ##### Request
* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | username | path | string |  no |  |  |  |  |  |  | The name that needs to be fetched. Use user1 for testing.

* Example of request :
    ```
HTTP 1.1 get http://petstore.swagger.io/v2/users/7d4g38KiUPSagKE2E7MKTgvvvAB44FCbTHrWPcfJ28UiSykxG7iznN4ToGXsmzEfg6c6isQkBKCuiX1Y4jys7ClvjiYFSDV9J7f1A5mcPZG8WI611Et9hPFA7Dg0gb9Zjo1Uun6jmMrjuylwdPFvEk5MYmMfxWfQlgKPER91DBk89FFmukR9F 
    ```



> > > #### put /users/{username}
This can only be done by the logged in user.
> > > > ##### Request
* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | username | path | string |  no |  |  |  |  |  |  | name that need to be deleted
    | body | body | object |  no |  |  |  | [#/paths//users/{username}/put/parameters/1](#testtoto) |  |  | Updated user object

* Example of request :
    ```
HTTP 1.1 put http://petstore.swagger.io/v2/users/VEkITRE8IZptO4kY5Yzq6I5L5A6XKMVFqfnk72tP1TiQXDO2BnsI6ytc9A9Tm5zNkX8sZBh1uARsdGuP3Xxaw1mFCwzZB9MW7Uo7wG81g0tuGYkKVRUrTh7vNHvpRhlYcK5JqeKHedcVbwF7oAyhRGNEoj3fApeNakwBygiNuvIF1oNpYlHP2vtqOxGpXUc7eJIN01AuwjaxHXXFjEumaYNYvtnsnAACjipkk0PQj0o0XmGh0aEa9r9EUw7i7H 
Content-Type: 
Content-Length: 1296
{
    "id": -466642042022264832,
    "username": "KhyZhLZCy2ETRdwZlPqjAEwc4XTZh8H2qf1I10kz3YtVbZVxPlQqZnC4lv3DDLF40GM2H6CL45Gg5BOUXFkW2W0n",
    "firstName": "405PGaQnWS43vP8BwpH8dB5SW2VT2jl6krW0CMnyFrCbhLMNatWn51f23bV6uhdOJ9OlWbUBDwMVhzIr2EP8G5aKg6QKo3y7dns9ymKcTx7b6QD9vshbxsVNzMyXQ753uyd3VYfOvnZBdDLI52UDvQr4CZ2t67wAFKEAITpdgpPu2Ad8D7L8YcdBbf4inBT3lxE3r3hHt7cvIpDlxpuvBI7NYb6lNZo8x2c",
    "lastName": "6uGzBS5khIFP7akJTswRECcrCBA9EN7KhOjTGodY7TNf47ZXAvOe81FLCgVg331kRldxJrvRki7oq6l0CafLbUwOas5dv6ymrMTbdp3yIaX8gj9TtpEFjbtuDzI8Fhu73oihOmQwwNFN6PGAekgyvK39jLhY3M66bpoZLewh2b491LKf50OBKRK3D22GO8NZycZjrvBtGGDIrnXxnL98DUbgWeWLnKKVWKenfPQWvtEXRCufoDn1xzhuNefbZ0",
    "email": "VKliZb9VHDAFuc9JAN7ClGUPu85F75M3Q8lPkvL28lHDyRn9EuL0aFQFOVlW18ZRglHBQsDYOlCncZwRthREWIkKDFGFNFw41dFRGjQvEsSRrpIVGAADjUnWz4CnK8rLm7C3qsy5VrWmQFiwfS9yNxvnC8Kmgc8DjLGJefO9GLwwqO3GHdfvLKSnSDK9PSN8DtRRIG1prxWSmZy3dN",
    "password": "Yyrlq45ATYn1CRTuAzvZ12WToVrs9e17NstdxzOrxcs93mDEW9DXbzRAvi2Ex3Mkwfy4OnvmzXwDkahgjVduv441n7GVbsgHHPLwdhSNfoqzyIPSE3m98rbwyRrJjIr1ydyLuqyKPZjoI9gmcDwk5IQEzinT1PVz3tlyUUiKTB8CKpYX3vh8d8MNqaGrZB135mBZgTJavSMghLdlhvtuDfi4qYwqAxtGU4GaXplti",
    "phone": "JATWVaroF5EX94WFuxdYd72Ti0jDtCLdcF98PBwvGbtQgpvLXIJaQL48MoMg0ytddDl3eSzV42Lksh5p0OAQAFZn3ME4k7ixLEB0waVBcHVE",
    "userStatus": 10030444
}
    ```



> > > #### delete /users/{username}
This can only be done by the logged in user.
> > > > ##### Request
* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | username | path | string |  no |  |  |  |  |  |  | The name that needs to be deleted

* Example of request :
    ```
HTTP 1.1 delete http://petstore.swagger.io/v2/users/YQE 
    ```






---

> ## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

