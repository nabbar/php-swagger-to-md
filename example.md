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
    ```
HTTP 1.1 post http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 903
{
    "id": -5309245104513351680,
    "category": {
        "id": -6799460204875350016,
        "name": "y2fwkScBOGzzexsrXfuJvSMaZuESKkeintOIm1jbHTLWqdootT8ZLU9LpOD98SswmgeJiyU0rFWSTlgmeomZjvKIknStfkZCBelTMfTeVQ6ObnbpMxo539OnwGQM0QoC4KvRZo6UfcJqAUPmsesvngTUXKHYA6AFQ5xPuDKJQtar"
    },
    "name": "doggie",
    "photoUrls": [
        "0OQegmCxgwv0etBk3ga9O0DrKniexJDxxuMORol7VR7akIuoZFxNFbeqyxF6giENNqCEPYLLPTV9BqxA55oLgCcPaRVqazeX0QCQOoCDhyNSYlt4qRPGu1wETr"
    ],
    "tags": [
        {
            "id": -7494365164381143040,
            "name": "j12aESY2vCj3pc1LG6bxVS2XoGRQMVS5WUfBNeDiQXmg9n1Qudnp5qnu6elS9dY68eHVslejiAAsYCisPGSV6gqdvL6FY5L7jt3MPh6"
        }
    ],
    "status": "SGARjTk8zd4GtuTYg0Df5pmoTpbIHhQAYrrhkLqUYvBs0urgv4wAuTZnia60sWAro2JIOaDNFefGJGXeLtPgmODFZKFrHgT5iCO6MrTsG98pP5EByuRVivAifgKWwD2OgQV2hOvYXDoNI2ohxfdPLO804SXBwZqMQlP8ak68XuVGxkY4AcUl03m5VkHrk7dat2iDmpLkTG1r1ZwBcrW"
}
    ```



#### put /pets

* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//pets/put/parameters/0](#testtoto) |  |  | Pet object that needs to be added to the store

    * Example of request :
    ```
HTTP 1.1 put http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 601
{
    "id": -897350025414180864,
    "category": {
        "id": -3949615946460561408,
        "name": "vy3QrujOvj2S1hw2X6rMnlgSUXTo92eFBiv2NPQi8TbabHc8ODVcZb5T8Yhi1wXCPsEChvVqp7AAONJCrEPqPUjYSBgU7e"
    },
    "name": "doggie",
    "photoUrls": [
        "WGbzYHvp6CZHrMr4d5TEVNXTGzaAHo7D5jd40Jt7msPNfgStmL7hz5bgElRlJYZPidTjWmriPg65xYyTKGajLmAqHrMrqLgIZa1WwsfmJlrhkZa4FlorHYRppDQPp7xpizlP2AbMWC3gCdkizJKhHBG7fxWFFu5X4qM61XSXAVdd9yvJhf0Z"
    ],
    "tags": [
        {
            "id": -6819848251420704768,
            "name": "7e3NU"
        }
    ],
    "status": "SRCjEIkCBicxwpH5Vqmbqm38tbmw"
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
    ```
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
    ```
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
    ```
HTTP 1.1 get http://petstore.swagger.io/v2/pets/-27791513601703936 
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
    ```
HTTP 1.1 post http://petstore.swagger.io/v2/pets/QDHUQNFZByyGZubOjIVpBHXuUF1tN2IDFpywddvPM3vLyGzSpui0cfu6VwAIyimeIUKW8gLUjgFSXfKnJ2oViT2dpCWYVjcEdWAmclgwCWozb9XVcl 
Content-Type: multipart/form-data, boundary=57cac506716ec
Content-Length: 8
--57cac506716ec
content-disposition: form-data; name="name"

veTIEwFCrYO5cLFyY0OvCKUcW3aRgwJLLCup892A8QFkClSBlH6Ys0bo4lgkSZ6DCA2KK4kSV0dyl69HNfGgfRFjdVE6VKJxlLi5QDYMDbkZiuG6JmmZe1jsXYySIiq34I9Ul7HZj2YBwFHg24gh5zK3yjWgBmkF4tAqBhqVkowR4e76ionoY7rwqnM1K7HPBhgczG7T5EK9TSfbgDAfL2LbqydaFU0gcgtLWBE1fpb8irkz4VOPXz1n
--57cac506716ec
content-disposition: form-data; name="status"

eyN9y4lPy7L9LNpbZytqS2uOQjLqk9yzIlJhq56YcS8YGx9F6D5YFzMwTyWeIuOqQxHhDOfPGoNmWX12A61gGNMzmIO4dCu4aclN0BDGZr3V
    ```



#### delete /pets/{petId}

* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | api_key | header | string |  no |  |  |  |  |  |  | 
    | petId | path | integer, formatted as : int64 |  no |  |  |  |  |  |  | Pet id to delete

    * Example of request :
    ```
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/7386715266555576320 
api_key: 4XZbYgSM2s9LgdZTI34VoRVZvCZWFVlKTlWSBOFEgOpx2oqLsvGQmBQSdQOTLaDEvzw7obL
    ```




### Resource : stores
#### post /stores/order

* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//stores/order/post/parameters/0](#testtoto) |  |  | order placed for purchasing the pet

    * Example of request :
    ```
HTTP 1.1 post http://petstore.swagger.io/v2/stores/order 
Content-Type: 
Content-Length: 336
{
    "id": 1974918570785636352,
    "petId": -3010194139401682944,
    "quantity": 169387735,
    "shipDate": "2016-09-03T12:41:42+00:00",
    "status": "Zxoa29W642jzYjvkQ8HmO9HpeLCSN1YMzmXBwTHAW1aUkGfaOWwD5d3kZFcMHbzgywR4pzEmAPgVvw5ksCXyQ0TQG6CnhbDPIvT74yuFnKATgGdJjbi9bb0ShCgyOUoxpiFuQ99eTK8arlUKxcUInUBFxRelLCS",
    "complete": 0
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
    ```
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/yFMHP1BA9L1vGL2TFLgzmW6eas0NlbITRvBGwchFYibE3dxJZOjmKqAVSAIeMr8DWJksVB8TTjyXx5GwUZSFptAi3jxPKGtHqN 
    ```



#### delete /stores/order/{orderId}
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors
* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | orderId | path | string |  no |  |  |  |  |  |  | ID of the order that needs to be deleted

    * Example of request :
    ```
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/mpigiCOgaUWGOWztm24F6ndW8TpPkdZGCiWVULb4G8Lv4lZrn37uqkqyeQoy3nfFFbAAXMFDUq8ZL7q9byDCS3a6TyFXWUDC6dc30RHUiQT3Yk 
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
    ```
HTTP 1.1 post http://petstore.swagger.io/v2/users 
Content-Type: 
Content-Length: 805
{
    "id": 6934201240280629248,
    "username": "CeF1pzmRqb87zsapJZn7cGVxJNT0yE",
    "firstName": "bTgciQyagJioiLyIuy5BKMxivkbwTQ74Jog1ePcvyuTRfsAK0FmLrT3Xeet75BbOZrPeg1JPwDHM5hx5XTRoNUm19Q8esj2sLSG2UqSr3zd9QKfNE6cr0ztaqBoSVrkHj1KerCFvbSE2DUQh03J1Ccb2OzVK0frkhcyIOde06S3JMT1NWLOzY0CMzxxANZV4btNZH10NU3xHXzuTkjsjj55SCDtpCouNShMziNncQUT",
    "lastName": "toHOHa70fdTSQnisLMgE33emQBzGvtuZRcOymWyB9rt0OMtAyJfCMtZC4yjA1OAS0prmlZYvrsvgeZRNI6pvzo7EXrfYfQRgfiCBiB6J3B0iBR5jXuOxTWcQosPDiGTyZw9h7f0bR0usSzMP4AnXxzOV2DzkktSjZ2A7hBj8CNBumnkrYHovhdrjR0Ebtxvsz5",
    "email": "RHTZjGBN3Y7uWPTs67TqYT49nBFQbK",
    "password": "2rk2L1Dz4CGzzws2CzV3yP7IcJn2U7tXzNZlODUTfBsO7VQKvMN3CVLOE8RzgkwQ8wbX95QpH",
    "phone": "dPd4zJRnMtixiXGawWu3MDzXAJ3q8LJmAXraGixsMP04NGejCJnpnWmXFqoNc7aM5B",
    "userStatus": 759634612
}
    ```




#### post /users/createWithArray

* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | array |  no |  |  |  | [#/paths//users/createWithArray/post/parameters/0/schema](#testtoto) |  |  | List of user object

    * Example of request :
    ```
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithArray 
Content-Type: 
Content-Length: 1438
[
    {
        "id": 34840950798811136,
        "username": "4NfR0Ko1Ka1zKYDIo9fLcqvNE10ME1fJPvAPgZR19TAUSdCgnS2zjxnYynKdo0Wewx4MwVNFOozGBcXZ5ZzoxWm6j7kI8hWEO1rkWe0KDArfMoeSoNgWJD23KmMSDJxsKYMGcMrQnS5ahj2G6iCQVETG1GyFp5794UQhHh74acesvg8CzLsvqmcr2L7sQfBV9scQKjUVv9n0qwDZh5vHsH9ushWjwyfF0rvK",
        "firstName": "qFgA3h0zU0RZvyrdIWGZT0wsfbsGHdr8THIXYIwSInSeWkrFh8Fb8bDom644jwcddUacDH5l5Yz2i1HA9nLiyoGVuLZOhc2v7cHKUM6ZLG14HJER6paFOQAjCA8TNapUn6FhTLhErjI9",
        "lastName": "n19NbOB2pVF03zNeYHC4nUY8bDAumKxJMGwYv81V4GV7fImdqYiOShW4Uxyhi604Nx3jG4eKK9S0Sedjdw76N4aIBJZUQ0ZDx2Wd6aYRkQRc55wiBDppHz8jj7d98dNFfJTlURdeI4rN9X6LAvbi5jBprPyz2lfi58EZ0ReJVFx5DERea2wfm8FNYen1ACjFLXFMOTwKz3QcHHr",
        "email": "KX776MV41i5BVphGmWtbQZVp2LCKt3Cd1Jl7wgcxyi9tHqa4mDfdDbCGWfqqj2EkMZsjfFQOX0iFqsJN6Z0JaDp7SPxbScwEbYXrEOfBPxhfZ13603PaHfiz5PLX1hCdgAEUpTwerOurPxxPBn0iCiSI8EGaWjncT27jWEyns2OhAl7cJ8vmrn4A1KKX38aXbig7W",
        "password": "uoRjGsEOEoX9KoxOZzyKxCTIz40QbWFGlxZ2ZEQE2OONdlBcUaWsNPamUad66TMsqMuqrl4u9ThmeTz93vBQlLdgVqm2j9vKWZanlfRu89Rn2qw6W8WiTayPBUSV4nF0nQnI6fdfo4Cru9xrhuJbEh1fcTaghPgFGEnMTA1iFEJ9NgB5KkgoChEObO4tEl8kZw7",
        "phone": "69aLNUVBawGVRXktfYiqNnUrI2MHzTAF2LrQFmrQT8ML56fk5xLSVFkDI6lh0VX2HoTmLkdFsZrx6GSceD5ajpN2w8kw4izLHs8tNl9flANshFEwjKGD9uFGC0cHiMs0fAt2WChic5KuLp049HHjbnZNocvHYYHeyagvMyNZDytpYut7bbqmzqaXCFFBDmQcw6IjFvij4MI2gbarnBNW1YUEDzghV6tsdbLSH4bMQUP66ZytBmqCklhXUy",
        "userStatus": -1223670375
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
    ```
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithList 
Content-Type: 
Content-Length: 830
[
    {
        "id": 3724101674902487040,
        "username": "yUVPdyK4FAmpWrH4XKILhe8xVlF2iGLQAGGO",
        "firstName": "rSU1fkYG12EMKp3ZyAVUfXcWI3wpKlDbdxctRbaTdOFYeIXNiTHyQUuzX1YHmCTA9630heTv2zuhhs4AlM9cGDMDFKl1nfCwlGxDUr9W0Dei5iSr42DLFpolaKnxZZ3lGBYA27x3LLlQ4ei8gVTWkihu3F13E5okHnVJv",
        "lastName": "Nge97inprEkkBFDT9GybKdh8yYvtI1WvhaEos2OTH9eiOScYzKajXrswqXZ9ZWEg6jFzmut3DImrAypajAth2VNsTNBSJg9PAPpXjS1WAnnbWNlfnPwpLkSE7uxQLHGlw5jPYkMzI9KEX6UlWrLHLDmT7UJSBpe7vxXtSJ3ATOfQVacRBXznAVgIQ0BrqQzVoxpggsQag61bgd3SaCgLyxtox5QXVpTjXizd",
        "email": "qo2wpdNCgFNTVyrs2Q08GX36Qn39XhUoFWU4aIHrnukj3MM6CMeiJioAFsKDJF1oCWtNEbe1GzlJl7QYT4hDnGe28Y",
        "password": "REHggDK3hVijCREmdMccGhtjE9yGhwm9a3qrHbvY7NhJFW5TJh5pzyIdIgU0NhaYkAq1LV0SIiCofHhYZmnyV",
        "phone": "LEnFE",
        "userStatus": 408011293
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
    ```
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=9hpzjbvk4eCGCRoTQngdVbkHQHnuSkj2CJCVU7gZlSGXK4RAs7Onj859PsEHNYJpHmlCtBCPtiMemEOOLCc5KieAKTiyR2XzoibRTNGn6tBs7phT2uYNMdnx6F5XH2w5kIXewDBC7c4eCm7EQ6sCjPapvfndiTiCCfR8TsK0FPfhbnW2toEMePbJ4zWmtfZ5vQdpassword=jYpYNFfY2b0vAFiOuuyz3uVwKVBfMPE5N43AJjzMuAh5gATL4sk7XgEHbfXX5B3SG6tqp3cUEuZU4TF8m0gjgU0saXqfzt8fzCFZGRTkmTfqNVz9VQscKtEUq5a 
    ```




#### get /users/logout


    * Example of request :
    ```
HTTP 1.1 get http://petstore.swagger.io/v2/users/logout 
    ```




#### get /users/{username}

* Request
    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | username | path | string |  no |  |  |  |  |  |  | The name that needs to be fetched. Use user1 for testing.

    * Example of request :
    ```
HTTP 1.1 get http://petstore.swagger.io/v2/users/yjf8VV7BN1W9UbAI6aR20keKNTFeYQex9uF5qNGdODnJOXrV8jX 
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
    ```
HTTP 1.1 put http://petstore.swagger.io/v2/users/DcSr5yF4oUBxphDP4j3SXqCLo3GwmEE0QxrW670u2C2rTFhYZlQWLtIawpHT3mTUUlQ0tQvvsyXmefkdAbamETwbid4mAYguk6uNXZiqxgMLv7Z5iarX3Y8mcdJMcZgw6Lj3KCtiTf4on4uFeVDiTLF6ZoSbn9Hu 
Content-Type: 
Content-Length: 874
{
    "id": 3262313985306787840,
    "username": "G6TZEG4cJQeyfXcJkM1Geul1M6xGijEYpxY3e2gXSuv8rIRLvTsJnNLaTiRcBvb0393hcjf4OKdft41YXtHlgtwaLonnTyoXIseU",
    "firstName": "tZAecPHhRFfknABQ7LCv8ZpHnmqPAkB4jbjw10NSG2d4DOULAxgJwGrU2RKDbmIvy12A1PsISGMwvGh6dyPKegFh8qUjMDPlERVGHooA4a6ARoG5WwQbNvsVWnfI044EWZlEnJesUl3LJ",
    "lastName": "RFfHR3djY9HdSHiWmfWITkr8NltQ7czZSPGJS",
    "email": "2R4K5XsnUPDQxxaYFXk8Oslnrdd8W53ZW7J14bpZ03PxA0",
    "password": "fYRoMjJaKXnTTsWTp3Dr8PQ7QTXouYUKWL8J5STPPgJJJFC9JgAR5rZVlWjPUezR0IA5AuVpLE9ujMD22eU7FU20RmQMApDA7eFIJB8ufhZz3CC5RwcwrfxiBn4cNIMVWsDF3Laj29S6MubD1o9tEHLf4PsRyeNvHqaLcl5fuXlgsxTuV3Xz",
    "phone": "JPOzhG7wtCeUN0685lC3HTveM09PYJzHzogQ5onz0BtOBAWGVzJDsfRfg15eKFWj3da9BxIC9cqLMnsIXclpscFIdKWYpTit6sCH0kkaxKVj7n14Anu2zaKNUHLjA3MGwpoxKIHhtCAB0CGAZbDzlnnf48zFcmmJLLgvtXNXAnyA0eb0qOzLcW0h5AWiWj1",
    "userStatus": -1318413180
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
    ```
HTTP 1.1 delete http://petstore.swagger.io/v2/users/eye1vPp4qqjCqJq0uDXvU25Ql2amKeEYMT0iIqm8QFKgobhTOeoIhuzCwJZhYDgKxg3fGpox58Ouk5n8jMRBhreNbd49RkUoBXEin2PsbDXvIlE27wEoYSc96gjXBemdb0vz2k2dXZIGknJsTnRRf31lkkiWyF9KFEkHZmUW 
    ```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

