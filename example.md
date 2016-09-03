# Swagger Petstore
* Version : 1.0.0
: This is a sample server Petstore server.

[Learn about Swagger](http://swagger.io) or join the IRC channel `#swagger` on irc.freenode.net.

For this sample, you can use the api key `special-key` to test the authorization filters

* Terms of service : http://helloreverb.com/terms/
* License : Apache 2.0  http://www.apache.org/licenses/LICENSE-2.0.html 
* Contact apiteam@swagger.io : 



---

* Global Definition
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
* Resource : pets
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
Content-Length: 891
{
    "id": -6890444620275122176,
    "category": {
        "id": 948191417312739328,
        "name": "5aXOjhw7Okqp5C2bGhqrEmNAJh4tqAzvKxk3OQbCaB1fe4rVmSm0faB"
    },
    "name": "doggie",
    "photoUrls": [
        "rFsSf1nZzH3nye0IQ1Y45q0rinsyx4xZJZSZ1fYAX2YvgYd70cb5CcxUz0s7407O0ZN1fMCcOAH5zVcz7oFJAdEad7ii7p67pU9EGLRvmyBVtNuAc9kNmYXA5gTcG0k5UtKBfB7B9IxDw1eIbyvyxt9C"
    ],
    "tags": [
        {
            "id": 3766146840634851328,
            "name": "p2avXDfzSRGu1o1EV2TDer9MZDWCnYrM1CiZfyy8peCqDD5yGYcUqmHpZD1mCt9E5rDlZctpr5Q4JVDpTQkkc2JbGKyidHXj9AE9N7yedojXkWmeNHyZJhbp2KIfrGzBhdK4ljiyHBw2yTglA"
        }
    ],
    "status": "lk7xK9htpI9Yjqb4uwnN55oB7Xuoj5dEplb9utCTcMRwc3AHAXuF2ThaQLzaQNOf80pCt2vFOnc1rMJ1JdGM7XXYJw8zjXPrXf4riA77Xj8p6SqQ66Cd4AcO6koqheRftVHMvPTt92SfUj50qIeuiqioKHP2VGioC0a8P4CZ6ve0Oj1e1fJkF2JqJysEfL3RLe0BiCAo7PpW8qaaFTvlWeLFMdk1ZnTKBTmTwXiEMHAV8K6OEB9BPUg"
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
Content-Length: 853
{
    "id": 1204031280421797888,
    "category": {
        "id": -8983594170316750848,
        "name": "GHF2sKlQDvo9UhwYAvGZe0riki0ZsSP8Aua2ewTS2i1XzxVa3C9hCAAWTBWluLu4fE7ub1mejnbTV63YIcglMRiGse1WZv1ea9Jmb6AuuLnpSqoADFVqwd6Zs8VrEXGP7pbiwLN0xaqpBP0euWE1aK0CTW3xUKm1axkGj7HRh7hTWh7reMsoxs1qp5XjPkkZREGbMn23ujXrB4TPQmenOfOelMxa6SaYwQ9jdcmIwka8o3XfpcDesrs"
    },
    "name": "doggie",
    "photoUrls": [
        "dZXjR8ioYrHcE4Ubo4jN8h2xtGLV8eIleGF6OXuNpcZ3hUeFYyt7PwEicqdkFWGTCmZrjueJGdNX72D6A7dpDSHQjVaYRRRudRWxlag1o4Zw6DDGKR5nJNd3Io1AgT5tK215ci7Bm78sKL9vDfTn27qLvsmLlsf5uhbHzjjVrrobdyHQNAeQHECd6ZZsreyWvJ"
    ],
    "tags": [
        {
            "id": -153013668823433216,
            "name": "X1upqGCYntMYHDFmfStfRVG6tDCdhHgfIKE8rh6OKTMswsPMli1ceIjHlVUDCbSkWwtnNAcytZ1ZrQLM9NZnvi5RdZuQbnb7TEvHeIgIH"
        }
    ],
    "status": "H98tWhhVFMeKEs"
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
HTTP 1.1 get http://petstore.swagger.io/v2/pets/1739017599427018752 
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
HTTP 1.1 post http://petstore.swagger.io/v2/pets/wwWNEbWgr1PIhhDK2bU2bO 
Content-Type: multipart/form-data, boundary=57cac2b81df47
Content-Length: 8
--57cac2b81df47
content-disposition: form-data; name="name"

LoOybGvCd1z1GKXXcZMVg4y17KW9WK8I8WhjDMWQNwSthQquPdp6hY7oJ3yGOHoWDFghrd8fJ0J0QauGoTMGSU5BYDiMkGIYmZfOco3VoNVfYqVmjH3cC8OAM6m7N5595lXhJ1d8P9nNzjaT1d5DmUd80zfOFlXKHV1rWfzMoXzXgKRhXWUkQ8sRIIFn4D7Ly9cvpMhNJQL0BCiyzdTqlli34Xr8BzT9J6E8SVWCMHCnkUWT8PktbCxfAYncyh
--57cac2b81df47
content-disposition: form-data; name="status"

hn0pfVlRI3t5no2hwRC03fyiQxG25XnmknMzj8r2bV8zjaRQ2tR5JpozW4B11ZolnaVHi
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
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/-888743198715805696 
api_key: JuhR3B2Us4oka7JzHGDiIFh61FhXmAk54CX7eZ2G4r1fzKOgrsza8Rh9wy7S8rXd3UlhUoYYPZdpK1FcufmC6DMCcTuklsyonTGhhEf6EtwovbAZqXCxAo9MiE7D6F1tyIKQn0W1utqZE1Z5YBCyZMlhqsUw7W0GFLw2Lt4gWufBweHvPj3P5p6wR12ZY2GDNcFzGKPDf4eLjWg9gkYmJ5SB7UA5XgJ
    ```




* Resource : stores
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
Content-Length: 428
{
    "id": -1306582601095446528,
    "petId": 193881120163495936,
    "quantity": 126491198,
    "shipDate": "2016-09-03T12:31:52+00:00",
    "status": "Nxp8gIjldAM9bZCYumq48eeB6WXdgg94Nyd3gwpu6cDicghGDHLLWZn2WkgdApioXvse1SI84mrgCIXfpI1lIooEJERk49I2FbgG3ZO8mfoZYmfn4gJMF7roMiIQsrT7CaOG9DPwTevRAKeE1YrG5S4SbNJDeCLRMzyWdns6BYXbJbQKahqfav8liRZxtKogkWdxkGDWEA7oMY8Wgzcq5kLocKVGvkXQhanBQ1xvCFTpE2mUCylIT666R2Mm",
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
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/cDUAfKCNgetaD7d02PynystEylGlI35VGZvWJ 
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
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/J0mca0ko0mezJM2dqBy7Wga1bR0HNKPxKcKVc4jcqxMajOnKpVSmc2noTo5H8VeT7YPj38wuGjE071LxXDT9FhyzFEgOzvIGux0xGx1nQGnYH8vFLpPrGn0m1haAMShhqiO6PQtGxRFeZbTLAJcg6cC7tNIgGZx6imd8dGOKxuZxFTifCuwIH9QaXyrDyYKQkXYyENichhJWb2cNwJv 
    ```




* Resource : users
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
Content-Length: 993
{
    "id": -5443171109744672768,
    "username": "C24BGRjNUr6trGsUXmubQtZB8B2HOZir1m2Hemv8NCCfi49grDrh7rSg3VXRUgjWDlERHa0vMCK5HUl8xNqFfiVieSa89t5MPKDxVE2HgNNYH97fXyUcQPv4IGdR9jEZ4hwZVzHcmub3EjjBRdNI3jMMZ0E9ki9oAFnwe5IBzUFddYP5cDNfWA2W",
    "firstName": "G6VZfjzUH59MOLmIqAWpp2B2PRZpTV0A2Wzhg8cXelK267LxHIW7KxaAp9Zi50T7WsodBBbPXVR33DBLlxS553GucFNiGGpD9OQKq1znXrr042MpAFvFIbaURXdyEDcNs3xS46f2yG3CIP2iuyYdJ88B6laKYmyqp6iucxxLeAnXqpfVXe8HngjtBteAPN0fTjJ6RgR5Re2iEidBxmjUCCoe5COVpPai8UoZbf52u8l",
    "lastName": "ryKYU4SxGgLMTzHjoSBxM0xXgC0LKlUcUEaPI3mpk8cdITw6M8Ez9bxqNxbyT5KOKVDtY0Si84wQY3XLbBklNRLBpW9j2U7MQLgPL87UdELcH",
    "email": "XTlie89ZJyWTRYNZLEK1twaBqofbAWVyQgQ4o047z00rZOqLsaMVGXw7lMjWJevzumESmI0VJ1nJPNuiYheFeLMAx6xgl2QPouILdJHXK4GARbSQt6vIRiiooPFJSvzh0i3d1KaLPRmH2exvl2dclwBJmhteN3wNlz1nkb993vQ5JnB4qPhLlTvHaZWY2t",
    "password": "o2MLnYUw1qn79LIebxwXTqtBAsxyv1kT47Fr5AY",
    "phone": "0lfa6YpiwVfplI0WbyvGzQzDXf53P3bQoq0vopNUl2kHLkDWT9CtZc6Xr",
    "userStatus": 1721268848
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
Content-Length: 987
[
    {
        "id": 1704243942175801344,
        "username": "1DPlIysUWG2plF4eOY16Sep5h0elV97XNWivvKqrrsRN7V1WU32MhrSzs6Vof2l3ZDyvoZWPrOCzKEvEHxqZZizrouPEwaHwOg1cfY2GMEgxjLb0jCZiUyJj3yYzJG6xW7Kb5MSSr9pKU",
        "firstName": "KedKw7jgrmOpWy62629QefC773gwNb7ypkiVsCbUY0kVzqYFs7vHn8Oub41Zf8xFtQAWsMQrManmAl13twKQFykQDlQTunyYe8UHVK9HUw4vR5ykCiahQv8uRYnlmVkB3eiYYrGTXKoPQW9sfkK6PSAHRX3dSnOWB7VAyCtwnSldPvG4PqaFiKma",
        "lastName": "pnANcxoksYS4sprkKFafle5LpK4a7eSxCtkP",
        "email": "I9tH2xarZvcFFs0UxMjiRuq6mXIQhyQ0HjIKRSbRoow3QxYojhHbL7h84ZYmyPmf95Z0YbRmAoqqVoPfFwqrDHAIHy4foruxxuxvGpRgNhHIFwXl2oNG5noMWt1kUwRr1pWHOOYC6FlMci7fHVVMjkyfNA",
        "password": "H7r98Q6QFVOh1uCNHVVWCRRoabXqZy0HFrQOiXEXSteUXRIFMEBovtNGFL6Ej6lZybNQ9rN2U2WSTFxG",
        "phone": "94PCSvhDBVXHgWfsJ6CbUE6WBZQgxwAGBpjtUB6ww4eN0tgKASWux3q82hpzNZgopARkbYQI24w3yMO8FLCcO3kRkJq8JHw9iottmkbppItYui794KlSNGJ8qagaSNjabNDy8PYxxsv2KCcOnyHaerjFBAPtn9EyWh7476CFy",
        "userStatus": -1163104979
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
Content-Length: 1152
[
    {
        "id": -781594326005186560,
        "username": "qyfmjiICNIJZmWysulbKJs6pVlqiwQWXockIu2khL4h80PBvbMgVenkaIKtfBpdZBxI6A3nl7Ft8u4DGQTB",
        "firstName": "gWfZHIfi8siJZ0Qz3dUaTnjnsW4jQFo7CE7jnmBvOTfOT5nXji8cGrA8oErekQmWvufSQRoFKDtEJRB29JfPbPYzuqNOgaKLE0EvR3aBHEgqvStFBIvMytm2TaQakBWZBButEF4ljlLPdeuPXZCvtYxn8oxtZusB5W4JB94VuQKI5fy3fayI966huDKt7d5da9WMi1HNSswYH41We",
        "lastName": "FnFLFapqDxEJKOSHAbIhZBJvzrzAn",
        "email": "a3cQPS0ejEMXnxLgelrWDrxmW7OwHclSfyI4qIjJn5GKCs1RNtOqUmNRtBobNJ33hL8IurrRx8CaAD1o6PO1bCSFegQ20T5hFdZ9Fr1dzDnahpyofmprZi6dzXfzQlQvyQFehGrRkP1Cez0uWqVVI29hZpQQKHmjx1xPHZG2OHE3hEye5uaNwj5wIWntEJMbKk1sjHu8p8bHNJVSd6GKpMh8JEBnnoz8IAA2i5aIelp25lUjrB3Rok",
        "password": "7ZCum04uJE5LXaVFpg4rmqmFRYIJm3Ju2lYpl3U5HZQEaLjz2o1oPn3GlMqIQ9cTubiQecVWcLAmxUWzjYY8m2PIPfqFoCyTORJ24FZgrADYuAxOyvWUyMCn132qGBjut3xxIwN96q8B1FpzbmuJ977aaaBQLUleYTLHqzQw0Z81EyAQV5A4cHfnSQeDLASJtEqTdhqegyfV",
        "phone": "QM2Vm684lvWbKAXktGN76Hln7zEGPzNFlPBIWJNifJt0kqkN78VdPhBXQgDGPrlbhWTdGGvWqZWLqgyxpuLfLncCDQitiEEzAyNhfidGiarJr0hQu25fqhR489yqOcZoLMG05UGn486v8omCqrRRJJWRTuiHHi6",
        "userStatus": -893290407
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
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=taHayMiFiq3E2u6UlPDiHxMZetikWm7pxPz5BSLTiOyljEfFuTXbqJbFct08Q7yoX8ty0fsi40EnFU29NZleIwUV0U4password=2CeZKIyKX0311IoHCrQqqbF8Iz3It7zwKNvuw4fu4jw 
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
HTTP 1.1 get http://petstore.swagger.io/v2/users/1VNEm 
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
HTTP 1.1 put http://petstore.swagger.io/v2/users/4MPJVxiZgM7PiRCOm9SBDXV94X4RBrwFd 
Content-Type: 
Content-Length: 919
{
    "id": 7580927369783803904,
    "username": "",
    "firstName": "lX2j4DNFnCIIr0dbNvrVZGOWEL3hS3yd1Ax6dlLAXtjptxBh22c1J1YnN1EF5cT6Nrc0MYBKsV9WsKdvNqxwrvTfxxUCKOIxfVy2UaNm5XiyHw4vWB1o7VEEtzgdnZLDVjGPttbzqu880cDXOFmVB0A4ARiXQ3BLmhAQLMq",
    "lastName": "gzkhMYfAECwfC7jdYBaOEMA13aROXi0dRlvDjKeXmLcZSwcQ7nFM9fNdqF2nX3APo6tIQIFdtSdmoqdwNSiX75axLcUJfvyDB2lsK1GeUTAikNP7G74NdflYrgHHMglojGR3IxiCrTVLHKTnSYb5dw3FNLmz2HXloOp",
    "email": "mHKNBFziqsFirQnFnrkbdHKfpIBNw1VTIFGjkgCKJh3a8rQwSaH6SrmhaX5GY0AHFg1ZxDKgVOr4fhA8shekJABTyGAxGaflrhlYV6fQUGV9YvhqNwKx7lqG21eIct4EKpDGwSxqzsAxXSXLpHiw3Jd5LrOXUTCFjflP8SgHlQfjJd48VnFY6S4RjTPeMrU5HgUP9axu1MNK0RTVfz",
    "password": "lrYdLR20DuUJbaD1jOyOPlBAltugI3a3u9hg0kgEOan0l1",
    "phone": "EPAsEV4fhxJxgMIjhRBxRVNwKYULjVNYKorpjvEB3o8jbQDsIe0AaO6UM0G5Vt4GRv5b1KM58VojM2MugM4rAbmnb2t7wxNn3Tz5DmaMiy64BTzRGEihPEE1H78dFWBJQbOtxYgPxnU8gt0W7jdXYSYF07T",
    "userStatus": -455135465
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
HTTP 1.1 delete http://petstore.swagger.io/v2/users/pTFdndcE3K1YTirUfzdswclvSlCL1FgrzWEX9RCdCDbvVDqbcEDJQZeIlRtnxKO6Gt4QkG3XketgRTr4x5Oo436pUAMrkAy14CRpjUmD9PT1Jk6gpUEtYLTSmGkHhTIlvzKOu6sDWlFFFLW5GBzEnsxJ8RqqK9LgIw5dDxQzTwfyhcEXNdB 
    ```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

