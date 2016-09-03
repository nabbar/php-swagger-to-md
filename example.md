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
    * post /pets

* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//pets/post/parameters/0](#testtoto) |  |  | Pet object that needs to be added to the store

    * Example of request :
    ```
HTTP 1.1 post http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 781
{
    "id": -5771997284849942528,
    "category": {
        "id": 2866394274939797504,
        "name": "vwBTcqS3bSJ3spaxn3i8SDGQMCdUIL9diL7ub0ymShqkHBS5FbexOUnBxBvfnFtFqAaBBJYt0pOI1GOHS2fGWDiteNJBscgSNrupatSbTGUUnIBfKRWGueaI2Tju6AnU2SjclcofSi9g0LwLDts7ICPKw9fDKCxMvRZQ3o"
    },
    "name": "doggie",
    "photoUrls": [
        "WGgcH2JsFcUMUwBF3LUGwwdj24iS7GZ3nfg4h0wWcrI7YkM16GHCdVVf0e88V7cintnEtUAFljNjDzkJg2muYhJYvS6r0jKnM71f1CVnVIG"
    ],
    "tags": [
        {
            "id": -551996305052794880,
            "name": "jz4F32WN0sF7UGrE3dL5tNHoaC7RcqTvZXa2Z7P0Av8ubz8eNTjgH1FRENJQdCldzwfzD5zeAIILiQ05Kjmrk2jYP2P3FaheHwOlBnz"
        }
    ],
    "status": "6hYo8YtSiQkDSECIHrMmC3BjApEcNdoTumhCkLvCBQfuuRdbjZxV39eDySPl6deBAweVhJyTzOo4GBfZBNUEW9hv26Q8k5JVBXQSHoMhdalTMBSn"
}
    ```



    * put /pets

* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//pets/put/parameters/0](#testtoto) |  |  | Pet object that needs to be added to the store

    * Example of request :
    ```
HTTP 1.1 put http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 402
{
    "id": 867339104642138112,
    "category": {
        "id": 5765924265517907968,
        "name": "rsrtMbnhb5VTYPHnD6RNoy1Vov1R59ZxBr0nCnFOtAHsqpP4vGRTfTPDo"
    },
    "name": "doggie",
    "photoUrls": [
        "vu0u1BW1ZypEmSf4kGtaKYRCS6vIKUzfozKpbGrafQP"
    ],
    "tags": [
        {
            "id": 6884176454809026560,
            "name": "G4K"
        }
    ],
    "status": "ev8581cD"
}
    ```




    * get /pets/findByStatus
Multiple status values can be provided with comma seperated strings
* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | status | query | array |  no |  |  |  | [#/paths//pets/findByStatus/get/parameters/0](#testtoto) |  |  | Status values that need to be considered for filter

    * Example of request :
    ```
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByStatus 
    ```




    * get /pets/findByTags
Muliple tags can be provided with comma seperated strings. Use tag1, tag2, tag3 for testing.
* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | tags | query | array |  no |  |  |  | [#/paths//pets/findByTags/get/parameters/0](#testtoto) |  |  | Tags to filter by

    * Example of request :
    ```
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByTags 
    ```




    * get /pets/{petId}
Returns a pet when ID < 10.  ID > 10 or nonintegers will simulate API error conditions
* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | petId | path | integer, formatted as : int64 |  no |  |  |  |  |  |  | ID of pet that needs to be fetched

    * Example of request :
    ```
HTTP 1.1 get http://petstore.swagger.io/v2/pets/7979123275378720768 
    ```



    * post /pets/{petId}

* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | petId | path | string |  no |  |  |  |  |  |  | ID of pet that needs to be updated
    | name | formData | string |  no |  |  |  |  |  |  | Updated name of the pet
    | status | formData | string |  no |  |  |  |  |  |  | Updated status of the pet

    * Example of request :
    ```
HTTP 1.1 post http://petstore.swagger.io/v2/pets/SnXVCwqjBbDSuGePhzo25uXEcBEr6Y0ZmXUZulj6wWY0CdPUMdWRITwVvbnC9oBwmvvRQOXnLVnn8dhUreMa8i6DttfDRRadmG4du1AgXYD5cV0E9NOh6UVzobdf2ntp3yC 
Content-Type: multipart/form-data, boundary=57cac3411d3b6
Content-Length: 8
--57cac3411d3b6
content-disposition: form-data; name="name"

AcOxbsDnnE1xrQPxLL79WloZISoMq1l0eaypCbM0QOyhEoPp9Xy6iX51QuOhv9iJkQ8X2VYSKwapU0O4XnaglghcK5tgfLZzB8xE4vwP1HeWH30FraVMqcYbisrydr7OAFsEaZtbGI8oL84cjZZJcYVuqn2DOasoPU30UxcBfk00s4dL3cvfarKAONeCYG1OB4OvC06Rl6SNa5zeh5uswf2l3gX1XZPy4E3GFax0h
--57cac3411d3b6
content-disposition: form-data; name="status"

OsvoGNtbf0qiltzjuwik4
    ```



    * delete /pets/{petId}

* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | api_key | header | string |  no |  |  |  |  |  |  | 
    | petId | path | integer, formatted as : int64 |  no |  |  |  |  |  |  | Pet id to delete

    * Example of request :
    ```
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/6716434265090818048 
api_key: Z72FiAFz0u1wSIjlTymjRHNq0iWjD1GC9IirjX1kr2RkLaFEJ2YAJL1K4Y3HZJk9sCAMAC72EYmq824S43tNPuyTtCAtmVCOydB8PIbuHxUQzYID2crRH0KaC
    ```




### Resource : stores
    * post /stores/order

* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//stores/order/post/parameters/0](#testtoto) |  |  | order placed for purchasing the pet

    * Example of request :
    ```
HTTP 1.1 post http://petstore.swagger.io/v2/stores/order 
Content-Type: 
Content-Length: 368
{
    "id": 4963590032066609152,
    "petId": 5282455293249191936,
    "quantity": -1485220190,
    "shipDate": "2016-09-03T12:34:09+00:00",
    "status": "NQ5d3mnJ9Ea6ULB8sd8P0cmAV24MZwvNmA0qXna61kdW6O5z1do1pLClNG7NdDAAdA0bYbh0wuXDj2clfBmFmZ0aF8YTLztZaua9Fr9bW7Pf92ApDX50W5bCeavZJYYTt828Ackxj9NsboSPmXQj32VhcrgVqfPToR2Z4nwnwkQIIIy4GpnJrj0DKhzbxo",
    "complete": 1
}
    ```




    * get /stores/order/{orderId}
For valid response try integer IDs with value <= 5 or > 10. Other values will generated exceptions
* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | orderId | path | string |  no |  |  |  |  |  |  | ID of pet that needs to be fetched

    * Example of request :
    ```
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/g6VkusI0NzJvhiAYHYH9hIN20mdyLiu1pqmTT4UGDEbVWMUEKCN2kA4lXiTIBoK0O6TIbOoPszLpmF36hR8CsdXpwR77gR75Y1N9PbYhLJG7pKdGBmi3Agt67BdnsksrmgAbrztcjajIUxpwUHAuX3 
    ```



    * delete /stores/order/{orderId}
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors
* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | orderId | path | string |  no |  |  |  |  |  |  | ID of the order that needs to be deleted

    * Example of request :
    ```
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/5ENt78Wyuc9GDI9Q2k9KeH9LBRl5OpFU4tnbBjK6wTM9CWZEg9ovQygspCxe2d86GwiiQ2omWbwy7vdnFCSwa9YAMwPOKXUrudJkf8GckdLrIYPoAIULSTmEqbsa9nBDAlXQuE2ORNgAM5ZnOT9HNvldGOoPbZtLlrCP5EDXsTyeZxCOrLvfgQtXERMQRfCcGe1MSEKlyjAxQcmiXRyeI1bnSYdJeQVV4WHXBsi9LT 
    ```




### Resource : users
    * post /users
This can only be done by the logged in user.
* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//users/post/parameters/0](#testtoto) |  |  | Created user object

    * Example of request :
    ```
HTTP 1.1 post http://petstore.swagger.io/v2/users 
Content-Type: 
Content-Length: 1029
{
    "id": 3432211587182624768,
    "username": "qVnCJB04sqscSMRAlcNWrjoflJIGKzmbvJNelNjNeM06ySGU4uRvOfL9ZtQK3cVyWINhw74KU5RsXxn12exQt",
    "firstName": "0tMQdP38oZQchnk",
    "lastName": "7erYHow4qyjXpMgpf3gsTkBijrvBOQXW5oVMNrRd0abqXsQdw6GprhIKJdmy3ju8IpVvRNISYUiWm89SfQiH70sReOpi7TqPjmlba449Ym5lvfeL5wsdxU4LIt3QnuGHR1T15Xa4kgpPvDBBa4OHZTtInwyL1fsSgmTmj4qDkQtQt4sD9gl8aOQxlpjmEMeV88irdI5yyyo2DQGN71ViQMQbc9xRVMM",
    "email": "V5v8NAGm95pNV5A37vlXic8ulGlht8kodQw1rcoBhNodSYhZuDXNP5haMDsfLMDZDa05moGEb4S43a4yN1lD7DOTgg922N1GX2LkqsYCxRHA1L9PMusU7gOowYqzLsfIu12Vt1x0TfBU0KKNfcInswMZucyfEOY8Q14j3CkWRWRSHBGWNokgU6fpjOFXCE6sFaMIN7FE3wwK7cHV",
    "password": "1cv8rVrfApSevlUG7Dtfi8jOE3WRLSsN4XVvTmLtLEIhZDY7gsmzAFofJk6udyihwdNpAzTmdCEcfCkw5G5FmtU5O0A1zSi566vHFp4S1I5glpMq6S6tl0z919aB2tH9zcReCV7DDdUZDHqKzwdUxM3zWeaZHS8g5ZvHUDkyRexuWYevusp2etBb",
    "phone": "MaoEjFJibrdPLMG0kbWiqrNSRP7kqi2dsrRL7B4i2i8O4OOoZLHpdui4jppKHsXaTOW0q0jsirgnf5LfRtF4XX9hmz141YeUNaVdbfGtGXRW3DcU6RY3O8kaHmfIktD8EylPO2juZa",
    "userStatus": 18250366
}
    ```




    * post /users/createWithArray

* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | array |  no |  |  |  | [#/paths//users/createWithArray/post/parameters/0/schema](#testtoto) |  |  | List of user object

    * Example of request :
    ```
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithArray 
Content-Type: 
Content-Length: 794
[
    {
        "id": -2711493552105324544,
        "username": "t48iUwW1zmJPoeNgC452uQlGg3IutcPWgYfaucc4yVTXaHdMMiPg9bXqfGVISKF8JVje",
        "firstName": "wjGsdDCURpHafYkrWKGDFpvp4E90Yo8vHPXUtAPk0xvfvPGrzm4eLAEQf",
        "lastName": "Rec0JUPHOjiEEib9yHYe8xBdLnOqe4e6iq62kWJ9f2OTkZ3TG18PyJ3k7RLmVZseqzgKw0UL2IFnIIgoKoej8hDg9pD5",
        "email": "6jOFAzbBtXDcD1Umij6HxpQO36YsK3QQnFwYeIzIGdVjePFx9LeGa4vdbtGVxwMVciTq1s9HF40UUFr3rGKCKfQWJwSh3EcfX6GYyPFeTG9OmBSNhCp2SfZBMRTPw64ucKsLA8ZuP9ibKaZ2Mp4EE3grVagrglVs5odGwdalnsx7D",
        "password": "9pVe4Ahl1dviEMDzeJYspuGzQ3",
        "phone": "obFUl5PzaqRvr41KJNnj27huwMb6Df81qOVMTLm3cezEjAo2oMlqTCUpp6w2lE3LsZymKUpX8YBrzZtXLPnEsi4RoBTKfWvIV45GYuE7tfy3f200RoFkHKb5l5PB1lkXqpEoUivny4rN6rOYQtjxeuDAztb",
        "userStatus": 1643668841
    }
]
    ```




    * post /users/createWithList

* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | array |  no |  |  |  | [#/paths//users/createWithList/post/parameters/0/schema](#testtoto) |  |  | List of user object

    * Example of request :
    ```
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithList 
Content-Type: 
Content-Length: 1028
[
    {
        "id": -7388467608917377024,
        "username": "QDBkDmR4PRPowqtezC0ClEQFsFjPnkDdXeyBBpFqh",
        "firstName": "OOVi2vV27gHYW9DgY0ACeyRM9scPSulHig0kLVnTc4R9eupdvZPJxHwH9Jx2dSKv8KQUGeOTiF2xasKGrAqZhWHqFetT6dofYf9FtYyMDBjO34vvEVuWRcnxqQqx3PM25WHzUglyRFnUJSpoNUlF6IcxyD4CtQFyNm7HCtft8CoSvOhiJCXPkamTOrwhibP5xXMaq2EzF3sbRJtAlrqGCNAqe6HwhxCPvpZVsE",
        "lastName": "8HXjyHM92eAJQojgDpY9HvMw1bwWDasLSp4r6RA95bTWzcccCbmkH8QIknFXy7JqwOSDGtNLEGHeSUqv6NPNVGvg4aeChX3OMVssofd3VVhOQHjWv9KrQfHUqVxHTAwFwY7VdlY9ggX7Yh4tqOUg3BbuxIcqjI5PHcLVxJ4OZ1WYi0rJOl0SXbmuTyUchZ2YcNUJxYyx0uvjuW2ji3cfeyK87EkpEnoQaiAIh9",
        "email": "hDLA8HDr0GDf",
        "password": "cZ3kEnJjL79WqKEHTUYxFzFnc6nTKCOWCRghf0A08KWyvBgovfWaOBx1IVUsxIpaAGrPG2PPMMnhoEGTTC4HeCJWxEp5nOgXvI",
        "phone": "bKC1wpoNN2uHW6MDkpnhX1G2oujm018cLLdiaB6YEAGAHse1RCiODZR2uboucxGXiTftvls9W8KDBZFtBYifX9hrkFVxdCvvvLZ07sa3AVGcUlFvkXKh72JsIEZVhvrMgrNnTXquS7GNtmjNj44r6NUPsUKJpcwFDj2xht1aBIY44hSolWQsKKhdE2X3euISO",
        "userStatus": -1893162497
    }
]
    ```




    * get /users/login

* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | username | query | string |  no |  |  |  |  |  |  | The user name for login
    | password | query | string |  no |  |  |  |  |  |  | The password for login in clear text

    * Example of request :
    ```
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=fqgQ9eUdvMCRJsjucBIQDGURaDKYo94EAkuJzoX4bAWV2gpfR76uN0mpassword=D6W2g0GQlaAUzxZL7WGac6p3ewy1wV0a2WdiXT9j4JeEheppa6zmcZqqvYs2UscWppfnjoGn7V2o9rNjxnGJn6aS5CUZ46WtwbRPzxdHtf6CHUWeiDYFJ9xPLsPPzLj5XaUxI8ecnlO4fLjxoic8rKYccN2LzmRwwM3fUirhDgmT2GrrYEAqoyDBmGnV2erz0vOVNgcrwzk 
    ```




    * get /users/logout


    * Example of request :
    ```
HTTP 1.1 get http://petstore.swagger.io/v2/users/logout 
    ```




    * get /users/{username}

* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | username | path | string |  no |  |  |  |  |  |  | The name that needs to be fetched. Use user1 for testing.

    * Example of request :
    ```
HTTP 1.1 get http://petstore.swagger.io/v2/users/fL0eqAFO8iquYNq12SA3npYaFbCc 
    ```



    * put /users/{username}
This can only be done by the logged in user.
* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | username | path | string |  no |  |  |  |  |  |  | name that need to be deleted
    | body | body | object |  no |  |  |  | [#/paths//users/{username}/put/parameters/1](#testtoto) |  |  | Updated user object

    * Example of request :
    ```
HTTP 1.1 put http://petstore.swagger.io/v2/users/WK0ILe8lUXudnZcbpdehNhEdfPSqr4boPb6AqfVkcqyApKMOX06LhLYxBQY3V9rKlylLOg61GEB6onVmo17GN6doXcrSlTDGsYsgfyhWdT2BhXYFZ6mMczaaLC37wGNYFgfUOxR2rTDIRBoRIKDUkO56r8dXP1Wuhcp6Jg8baMT2oiT63x1nl6tMeHK3IGx0SW6CdfNn2Hpq0jw3QxqbDUYSBJVkptkiprVDGJ0Jrq9rJFuAdUL 
Content-Type: 
Content-Length: 1058
{
    "id": 4934384477792108544,
    "username": "n1",
    "firstName": "IAPgnDvwGrNdvgTHE1yTxmokUwZXU1oCBdSZQowxQkKlAE2eFB7dYwxT3xQXyfzassajRHRH1C3Bg6QWIY9HuHAxeqvNG4Y9x8soPk6QXasdhiaZhjGL0hjfIO2oT0xq90PYkWPh7ivoBFnSZ4E0lXf3MirGjY7sYXrjTgB1y6paMN2LRGLdE0grjI7CGf4FcvZ6MA7lHxvtkxebd0oR1FjknqW4G0KSwJ",
    "lastName": "ik6E1D9uYGJ9UKyMLe55Bw2Gc3q5za4SubwvPF0NmKXhuw3gK9",
    "email": "lFo2RrsX1D1T7cqD26EPspMJUiNa2WxoBVrtnUqoxsiFFIiHPXwimj1hCPrFLY3nUvRhpiGWKYBpHU6xRDPeWRvyGXdsWhPQMG8bZP8JOJ9wEg3vTSKPJfoqdCS9TI0Go9SoY07MKgiowlUqeEgYTEo6gggaYgQnqILoJTbtauSGQM74qn2k1rqiHHsGYi4o1PNKIZeSt6zjSGoj3rD5S4nALPhJ8l8",
    "password": "aVUTU9MogmI937s7y5cr9A2VqjEyENIPIDJDNv23SKcVRF2qLfRUPTQgcvORixG0apEXVG1NqdJiTLIE1zzRtp7GUWxctecEERCzxDnYR6gKSYoTyXL1mSIhPftiuGX8xzH5d434bkP3idXRbISyBAPqQjJkZGtxgbCtgGyr0nujBraMa3lLEacvuVQtCj1SuEmKlUblhGFS8QFiT04yb",
    "phone": "3FbT8OdaHHO3s9YEvgkb8t1OLVOPtZ6xFiqO6EYNmNROWPts5ODehE23ART3RZAwh1koGjb263R2TkvY88dpNgtn7mrZl2vD3Q1J9dMfhDiaXN96VmvJDZ6KlyKHAglD6nnfAavRNN2KAbRwymgbmmWHUGpvWK837wiIGOA",
    "userStatus": 691170969
}
    ```



    * delete /users/{username}
This can only be done by the logged in user.
* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | username | path | string |  no |  |  |  |  |  |  | The name that needs to be deleted

    * Example of request :
    ```
HTTP 1.1 delete http://petstore.swagger.io/v2/users/fcO6JmtZyPmuxhbWM8HVbPsuy8i9DUMS6BYQYrPwhb1OtcLfktaviCZRLi0ocNgjof9mHYSYaTMD6ySq13WkGWbrecQqZ7KnmTJ3SC22vPGCnz2oCZIiVUK96AA5Hks4ec86Oa 
    ```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

