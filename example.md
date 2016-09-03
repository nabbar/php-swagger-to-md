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
Content-Length: 937
{
    "id": 7188422029568114688,
    "category": {
        "id": 8369274123112677376,
        "name": "l3GSRZXWHLWVHyFFpdUmDPozUsOOilZDpGwgFudmg9hXHXD7bytOoRoijc7Cy6gXMNesirOyA6wi49qfIT46Lsp5FwIeCYbpMpR4RGCrN9KRja714b7QEwWj3ExFDJ5p9Xu0E7srgdjznqAsBIjfffziT7YxQ3X01r0Fyt7PGqp4Q0xsIQHY5hgZoewfiufkVgZuJ6kqxJvnJ3QsTxrZPH"
    },
    "name": "doggie",
    "photoUrls": [
        "dWvsfZHzVYyqIFK9cuEAeHqGBY8BNPA1M5t15bA1a9rSPc12GGCUo3B02JBQybRkhlmmxWoH6PAV2BXIiACGDdGGWiwvtoQKKd7h9"
    ],
    "tags": [
        {
            "id": -5516686157984825344,
            "name": "lzbnb95tJIanWR3S9zoDXfnHsuZC0ZSly4JKdPeWxpjtgmmqWL3U0rCtVC5WBYi921UgR8coxwSOTfeP1iK1JmvFYBBzzTJCVDTML5bjC47vkmllE5mosS3rtF03zKGuozhaFsthxANRW8cBezZGr38VI8ZhTFMhf3rUwU"
        }
    ],
    "status": "4vZVs884nH4497c4Ql48eJUvYYXTvR5zn5vQdDUAkYEt5QyWbC4qmZWlYTetLj38pyYCbTdwRSZXJyTVbYlxYhTWa7qWru4Q23tdWGKOzJLiiFduEz1CQVz120Xuu2kx6OL3vvR4fDmxiA1X93A0Ya21aZvF2Qc9EXc"
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
Content-Length: 690
{
    "id": -7901254874057146368,
    "category": {
        "id": 4491392179264028672,
        "name": "roVUOPRtYvQT9VYW4wthru0GAs3RsuYTTTOHJFbIa1BkXzg16KjxfjdP"
    },
    "name": "doggie",
    "photoUrls": [
        "hHfMF8FzWniCy1MAD6ydnzj8SQnc4cZmTe8znN9kbsWKtJl6QTjdtDlmuJzyVyVPN3pbRyv20sNub8A12UfvyBR2kqBgZw5MzvYq3tt3Wgx7p89r3pWB0OElefBdLH0lcYMfsgjoxRwWZG"
    ],
    "tags": [
        {
            "id": 5636889227309350912,
            "name": "kF69jrny3BkKCGXBsd4JwtgoZcoFArKV6R4qisYm4j7GZ4ishmbOPrc"
        }
    ],
    "status": "EAuf2fb96gzpJyLNRSuRXNje9v3ZXgOCRjRTz33GjC52aRQ2JlTH8dWiJZhGg6i7qa1Zd4FxHLARCrUmMN3V1ZdKZvrfCKm2Vo29sHGash15IWrvKvrLuFwtbYINI5QDtSMWAt62K88t4zZO"
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
HTTP 1.1 get http://petstore.swagger.io/v2/pets/-8684733732927569920 
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
HTTP 1.1 post http://petstore.swagger.io/v2/pets/EfLPSbWD2cXM5E0Nj2K14fam5dNLDvXhKI6DT3gWgeIlTI9cLTdQ9ocfB01f 
Content-Type: multipart/form-data, boundary=57cac7c81e83b
Content-Length: 431
--57cac7c81e83b
content-disposition: form-data; name="name"

YwhGDVAGcwWqfijYrwJlKAv9MKLNL0jJwBq9w0QIxN9M5tLx0uSL5oUS8FFTFZDcB3l74cQCZZp5taCtFveKT9C1OiVuiyGTC11GeRjdRIjkSVOyr3ilcVn0eiuwRaqtc
--57cac7c81e83b
content-disposition: form-data; name="status"

aqitE9bXu4TiDllVGxR3y6m3Dee3HruSSNlwXxtrCnKfI5bpD3sb9PfM4tPLUkEM8Zj6xNxaahqTnBi0FLcOArAEVqqQL4CU4W0CJyNUQdNdP5euQqirST5OkwE6Bh0Gd1jWA6QqjED8JSCzjV0cO609DEfeVgV9ie6SkXiEBWMkOpU8
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
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/572137244949741568 
api_key: Uk81khEZxTVNO463bYo8g2JdO42dYaxTuGVPYzPwtKkiPql0oJ9FMSSAXVOV5mPA3Kq1kfyO0S6QisRHc0mYTfzQbnMgKCRNmhPHxnvxfCoy4ffhfCg8SPZ3dLkXobKKtzs1WXzczXKEc0WrDcAv1zzflTcJ5XuzwWAtU9Gt6q
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
Content-Length: 362
{
    "id": -1224556216164810752,
    "petId": -212818348231098368,
    "quantity": -921707727,
    "shipDate": "2016-09-03T12:53:28+00:00",
    "status": "9fY6PGeAHyFkqUz15Ccopt0BEFyLxHnHXmNM21mKA250WE12geqGHrhm6Q8EyvlvS9iVbEFLHLMDpOFG26mJyE5Evdj4JFABOSwZxcLeXySnmy3oEq8d5eRBrbFbQgMF9jEGvqUsYNQklTJ0kSdq651xgHI7XvM6OqNkRINPvDaQwTQRL3hR9ipp",
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
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/wXEi4sJRNAAAq5dAVKuMBgQS8ZbypbGW9leeOY5BzGb0LoAH85tJlkCtkO2JZIF94UnSStts9EsU23Cb86VuqxYKm0tmJ9vN3TFWm8owNRrPU 
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
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/12 
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
Content-Length: 720
{
    "id": -9017722358407888896,
    "username": "bKnGaHJivezo9atgWoCt3k2Tq6tWWms77QOhxxz3L9rUjVafjNJn7MhySKuO7XVeNJvlh4o2eQXxL7N4Vwr2iIBat5YB3UPQElbVqzXEpVbb2YgYvI0NrBYUHWvKRlBv",
    "firstName": "Mq7moLMjXXmWdlrVlemXdhF9Nq191wQNXXamIWGGT3C7o33KipIvHnFuNGDOdtCbrMxaJeQDisKGvNrOd9jVxZ",
    "lastName": "lF3aTxN4YzC8jQYW9qGQWuhKIr4DZ33kJ6uDDhHBRjKaaI7k9Oa6irR1TVFSZIcJPHmtZ35RnP2yy9SHX2NguEinAXgAGsjvaFYaJ416T4Frey9bAXs5CKtcHJM",
    "email": "c6TnLSxuWzBQDhhRPq3qnvv0gZcYIZmU5ghQ8Pl5oXV2edT3DXu1t01JZeIHe4CjkTatJwz",
    "password": "tu9IH3Ml1gnugpefDWXR0zbltlOcRnklSt3zxPVy5i3mIhBldzdd8ozBKnOCL8XEC1e9Q9IWsLia2UwgtJtC82eTq2vcatRNu5XleFhHrARu",
    "phone": "oKY7eBggP9HRFU28LQDQNY5sf",
    "userStatus": 1677855529
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
Content-Length: 779
[
    {
        "id": -6941223838227103744,
        "username": "xdunqS2Mh1aPKiyvoCLHQGqSK68IwTx371ryUulbv",
        "firstName": "1gNzMbbxT2ejUYq3GXWe04fsDaXYmstnJhXvt82mbgG5f69W36a4aqwNAtMWWgkFxha0qdnCu3IJ9RGdXQh8gOVRiINfY8Uvq5wRjTtNXbx62dk04B8kq4bIMZXK7SgyXMpgGS4D3CK6P46TFee6ipO4pMPxE55CSuTymXcqzWwp0DjGSxMaXBfmn5U2aZE2uxBQvNh5KOuLrNrjleuiPKFcPzfZzT23rEUXsb",
        "lastName": "cZxXrkpLFDfYs0DFPdUOMORPfwJdYVfbVM9m7y8NcoLEopkdCf2p3TejqYwpUMAPyJcFiksuIe96DujfJlFNfT7GSE5NqFCYpOEI97dR",
        "email": "nYYRieBEToUNwAGaF",
        "password": "Al6zLUdt4kHWG4UEWcTxRNWLBslhC1LcmRL8MZCQjjMZoHEkUyRLlNwWfSeRTZ4gQPoCO1t8kg8",
        "phone": "XN2RmUCHI9EX1TPVSUbJKAmzBPHW5QE2EHU0CxIkGniIg7D82PRMqdl133X8UCbyk6yXDhhkEz2UHG3JwVwW8RYc",
        "userStatus": -1260183598
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
Content-Length: 1059
[
    {
        "id": 1003264408559812608,
        "username": "ujDcuRF5yDobjR5TFKtEYJmAtrV93szxMcKh3pmC3LNmDTfiDJWBsjcWL75OAFlnR5EVv1xyNlVqebIRVFtoZGkKOqyo5ULW0qSwrp4eK0FZbnR62kv11PMPfle",
        "firstName": "g0hgqaMSzR7kRMk39bacwFexu1mKmB5CBnT1xGU6y1rqOLtYWEbtjq0OrnyNYEqA1kCz1wFzy7ZmStlP8wirWjfnHObGsCguXS3YpJyYQylJ1Gz9cSB9cRx",
        "lastName": "GJA8lQDjJHh8qP7hns1p8BzltavF22zIL9R70urJbISCyZTWrVlAwVVZ6qF8tfQfpHnpcO9ow2051U1tPn3miZmoq1wUhm9G4w6hlfFShGXjBYNqlRMDQ81haybsVl80SehduX5MD35e1SFnJs1AB3SMB4exqnxiCPw6MBSqFYFGRl4BN6cp94bL9qizNQRpFnwsZpS",
        "email": "nxlfTqQHw26G7isgILPvBHVh5rJ5QBJe95t2wkJ3nQJu8cLQXAmzihQnJzszbcOliioOC8SZYBu7OfXLQkk9CawlKZVWcJhu1FjENcDMN8TCnRnebInNTU9DT4z6ORBPxVtl777V",
        "password": "1xESUS4CgSva1946JaUBLJ8GdtNlBIBCffua8zNoriztsDzcOtNAdVhqo5M0NnC3D7eLG1a8kJBMnbZcEMMRH3h6846WrJ05QeRxg1FALhn9sml698Y",
        "phone": "cgXlk3hLMiRDxIaNJQov7MEz90Gi8E9lU6GeaX0XgRBNzLBjB0PJNujWuZfDEoYyvENGCNETFfGf0izCiol5SF2nEh1iG0RcFESiswb8LSnMaWptlLyeqBC5SDnzEfLjTDBmaNuVFRIPO7iaS",
        "userStatus": 1027950264
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
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=s0olELUi1FCVjehpassword=1LpHD7wsfPC7G0q91OuFAoYB3BwnPOQRAfyen5GCUjJBkaKmZe2AD0cHBJ4rxUi8aRmxW3aQmUsH4c34r5E46RLIAP98KsgVjCtgFD72xzJCMMGdSlhYc3GNSPVDib 
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
HTTP 1.1 get http://petstore.swagger.io/v2/users/CN1StE0vczfOl2uyUQQS2TzQMpLpHXYkK0ceFdKRM0F72aGX0xP3qoTcOFCvCBPnB2Bhfm82mOaoYRlYob2OAV1oAEUcfKARMb82yh5U5fj36F2uR4js0lQAZLNfvo6izfl 
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
HTTP 1.1 put http://petstore.swagger.io/v2/users/wq2CFmGM2IhTNAlNVcoVXcasAgKaw6i3wlFcImYK5fDSPZGLb5G8hQBS7l2EslHYHnapJ89OoNHeMoZXtG5LxGDE2Fiv10tIoD77MhWb4EpQ2pNw5ThCAUhDAA8CBCkZgs72J4eNIDDL2rh8lzLVu2z4CIHek1dAtkDcoRZ7uDSx4aGpKrleuVj7D0lX2yxvSbIh2Ioxlh4qrLQcccq 
Content-Type: 
Content-Length: 1028
{
    "id": 432321594015088640,
    "username": "jf0o7yosc1eMSoj9Uy4gF66rVAjyFyGZOGnVfMorOCeH0xRU6VaL1hdXRxwx5cxTTUP8HdAwQOeQm5Lt0We2ds05ZwC5J9ZC4OKM2kjS9xIv",
    "firstName": "tYDpdFDFGIFclKVvJyzximzDFrMdaiPEhs4u8HaOqP1LAXgjvQROdrrTTe63wVIOoNixutmVjoGTlXcRO4F1v6Vok1sRXbFlYYTtsfoLD5EZ2RQRVvTqCOPXPiOMtu8ss1VUhjGVokUrbKj7fcyS0nPQGEDa8LCBNxw5Rc0gxUHIF0QVdoNdLC3sgHCpse0gLxmDJmTghBZWCPRPdE3Zh7ryO3XhhYy3vUHfgAvxbutO",
    "lastName": "lDyZGxhNYPC2NTkLrohl5wCF1aRwDFRZjpY0WfOV5qYSkjEMHV8NsKtuUk0y0SxjhwkeM8aRy8KSroE9kMWMxpgrKh0K9x4r4oFQxPH5YsYpQDzbqvXXUepFvqqFXu62TLSrBAwz2vZT9y4z42xZgXELn4qlzxntjfUUPruSWu",
    "email": "53PF7Rc689LTwPkRoSeSbuM6kdBca5Xf9NVgF7nNh9HOY2GnUVf6p2cJfNWpTUF2HAjnIHb0QSOPVucQpsXPu9yJXv9RpPU7pdu8UF8LyWAurNlQfiFKsetqKDh9sbgSpL0jq95Z5Fuws",
    "password": "nH73rziV02zhb2tsUSdVcE4hEaW8HpX4758zFqvFs4XE6q61jkWwY0NCaKLRaIWhO4Qtul9Xq6CwxIxR2un1uaDFVpx57tmWydq3zA0ZGCwel45oysp3D3IzsfEAJ1whfXkOxlOeXksjoyHW",
    "phone": "6ZEaIeCXTdHVJYaHiZeENsC7VVwtDtuKt9Ubnx9hKQcuPmb8mpM9",
    "userStatus": -169666386
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
HTTP 1.1 delete http://petstore.swagger.io/v2/users/OkNhXgMHJWBUk8 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

