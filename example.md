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
Content-Length: 882
{
    "id": 6323522749817946112,
    "category": {
        "id": -7473023824074637312,
        "name": "xLqgPvB2HzmUZTFYQ6M45rH8v0I"
    },
    "name": "doggie",
    "photoUrls": [
        "ILsgxSwno8q6IM1HGGGxNsBTUi1pjKl1wNi3GPq5XQcGDdojT4QHxsArLCR4mc6S0oWGdmMbdYRQbfa5k1MRtnjeZaimmofmNb30yQcLO3C0jM6DNTvhgOvgYOCldSI04M1CCdorh0sBNzeBsKTIypYxdBTruCryota1HztYAVAouOZXzTF7iEFwgyXKapjyStAz33yDZ81uX1rwU7EdMjJ3RGO157AYBayEe6hdfjIckaJfhns4Gb7xSVzX"
    ],
    "tags": [
        {
            "id": -3987951312716169216,
            "name": "EkuizAANQTv3eFMtXaW2Q8ao06YY98UNso52ZGPPzlSO1FiYPe1Gnb4nh2lqageDFkGE0vuAQnoS2GRSVSyi3DGkF2LQiZuXjaCjG6TwthpwYgoT8XcbASwgUi7chBaBMMUsSOZm6oS5EhYMfaYQ2v6WNe95PjGB5B4Yq3kxrdC5vASKLQBOmHL9VUfLeVnkxrjXuDuWR"
        }
    ],
    "status": "1nHT8tKJh6r2gmXv8crvwYXPWstrolyqIgkRJ4A0b13ro0Xwdo2Jn0zks3MRpkh8ABZkGzkRAniYogvBEyl2yVn1Z9Sotaw4Lwos5JjG6CFv"
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
Content-Length: 857
{
    "id": 8501248074297901056,
    "category": {
        "id": 7143148422818693120,
        "name": "GbfaNtZQJjx14BABa5Dlph6zLMTnhL7XWm8KQ8AAs8CwJd8UiLfH3lgP89cpVknRHvByEc96kLD4YLYhxeYAAepIoB8kWvbD1NbGZlMk6po5bnmIBlibAHUYj2ifyuTAi5giq3Cxt1DEp0m0lFcVm6UG9dWIIPi0UzjlCWS6YvKnv7oQMAM9HHPRULzDASE"
    },
    "name": "doggie",
    "photoUrls": [
        "rXQ4TJbReWfK3DBQenZW4ONZAn"
    ],
    "tags": [
        {
            "id": -7720672475880620032,
            "name": "hHHeyM8hXZvTefXSQN6eN2jCQicdWosd5arDXzUUzpOOFMGwzNKnP3ZGmbTizmvFwXiuxco7CdVi0COAqyXfCWWZ8PiHbOmILFcjRBquPlMPYBpoamENiAMqp48BSvkEaxX28nxYJkNIVd65zLSSlFjLJsnCXHh8febnCImm294Ymb3WWWPiB93lBrYz9fHouSL7B8tEhyCEJFBFCqXdz1zbs"
        }
    ],
    "status": "KBNsZikLpWTSAbqcQ9SrPuSNIsOiDgQnSDPSVaEk7xdHJETzOM1DgTqZlfhZw7moLchGnV1usfccT5LISMm8GN822p1ywoXhAeYY90sCfEP9KBRCneL41T63j7CQwz76O6"
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
HTTP 1.1 get http://petstore.swagger.io/v2/pets/-8130175243659509760 
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
HTTP 1.1 post http://petstore.swagger.io/v2/pets/fpi0d 
Content-Type: multipart/form-data, boundary=57cac594bc012
Content-Length: 8
--57cac594bc012
content-disposition: form-data; name="name"

8yNx3vBxgCAhX4jZiAfxhfmGmC5FDjgLS4jVzVtQx38v8ruq2KXj0k0nW62ApimhmFdWBHM8KVESm9ipUgJUAJhxPk7fCuxZ9LVLsIUcDy50HopCE9wfSONI8VXLpuKzfFkIo
--57cac594bc012
content-disposition: form-data; name="status"

U1M02uor63BDjts6cB19mqE7ZUNjCbxxckxfPWGV0hzjL2pXDr70RL7RGUbi5JPi3nxTkeOkwoEiq3f4vn4m9beP6p8b8Yucl15FgU0MjE4KIkOdHTAQ4OGaeOmnMQA8SFO8AOVTt0Ebksp2lZSqOzB3nXq9O1hHG5QhU
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
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/-1646291329975582720 
api_key: bnLPz6iY8EY14MAGQYDh7sipaZv0gqLsNxhmEzlNejPi6pYWoCdw5wVfvrfLR1dFzv2d5n0jHPCNfAKDdYaiu5xZxNLoOZ3ou6BAtCTasvYI6ImjHwCbCab9XXyMWCarIM1cpUnSqlBw4XQLusX7C9hA6Pn3syualvmKpJDP5em9ccVHETOh35RaVfdnNHy8c
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
Content-Length: 417
{
    "id": -7847022747212316672,
    "petId": 972205240889638912,
    "quantity": -1750178686,
    "shipDate": "2016-09-03T12:44:04+00:00",
    "status": "dmiAJAHIz8pJnqTKe78eDrVVDbPalTQzg99ZJRHi072nxV8M3g0GIWCl7rvslm1BvbBe3ix3qArYwzKzQKfyGRUOipgEMifhuQwx94AAE1yaBiJr3Z0JQUx9kON673oCUU93ZKDDLcOnuyOyxPhnJPx3El9Moxoisxmsh053cUqGsfeZ4wnOmUR0g1MEzaX2IkuZkA3wuucWJrVOYiDkdvltw786i690qD0Kd4gIytEiVA6",
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
```js
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/Ke6fzALHISZO10fE0ZS4gADJfVFP2yIMNP1mpN37F3WG3 
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
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/l4be9rPMa4IQUKoDwbsxyRkCZ0FWGJ72NjgXK6KVasL5caIJmagU1Bw1BcXiV5kJoBH8Hr4SUPX7ZFQlP7fRIMTkYQCUWXDkzlthMx9Hm6OmMFHC 
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
Content-Length: 951
{
    "id": -8114321252354621440,
    "username": "Xi5x4jvzgb9KdjDeD0qh2brXItPsee6cwcJBveaLpkwDEaShaizdu1bcu0FIeMULYEmtSxfiSLVwVON66nkAovNTvsCKexvdbSH4pWmhIiOE6CKdZ5NoABh63TQiqmwCedGE92WSlKwrmhEmmsKX3137VTqmfWYt9F8jI4c3PIvb0aynDikHjnOfgf",
    "firstName": "vbAZlf8FXdR12AweAHMXk4i1oFQDW5fshPrC5Ah2N94PJB3jiQhDUAEjfvWbAbDR15u6FM9sVeiEPmY7cgL6Qqp5VmhvyVnA0RHGDR9z5rdUNb2ZrN6iewo9TFFrA22BUJhyAq7GSlBGwDGYrNhFjFPdkuEVxHwrqN01e7H7tiNZWtYogf4AVTNf",
    "lastName": "saV9HmAvnBJuiRYBEXx8WVpc0Z7TNnhfycpfzZKWBurUlpvZn28kYxwZwESk2aAAnZPWZzTB3lvoK0o83xs24Z1BEUVG4wgsv5ovFi6JDB8oCxwF4YH8YIKCCGiHcz9IEydkQk3uWcSyJodNnVWlDGYgmgYzP7huGuPxPT1L5UjOj",
    "email": "BGsy26e0mBhla7srC9WsGLlIxqCQfVoRCQpFWEGjfXFq58SIhPaXBwG8WiZben2Reswb6cvmaaNgiG",
    "password": "zv9x7FegCxfOLDQCSj93pmzLwJzM1fLBKU9Szn8cUo0G1RjUas",
    "phone": "zOxllgU8iaTUUO3MorVAljA2lrlfBOdbCKxY1s6jCZexOhkcIfM4ym6TNs9pgmBT78R8AYsdYGKMX4YGkKLS7SMVkVkBiVup4mxE",
    "userStatus": -2142762429
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
Content-Length: 857
[
    {
        "id": -7762073727231066112,
        "username": "A9xXKX261gbVWx7HUHp8MWpaFnklFxQgHodslgymwJhtgpab7AjTwJ4c6oxMWo2DMf57vDt2nLvEaGQigabNTfZ0ExMAVOdH3iPzWiBk47ZfOPx4ZIRTYRTCoFdktq2",
        "firstName": "JR6FaIZeQZtEO1IOKAHIsAlRfybJZegI5nng5nuWmYAb0jZKUGsmhNdxmpglDw3ITqYZOtVaswlsPlcJ1F6jsjQPI6alCd4wE3wswrDZXYrNjExljDEMXvBFBM1eZ5LE9",
        "lastName": "6GJKFHI7u2L2o5",
        "email": "3RDytjafkoeq9Tzr0faKURt2lwNoUT4YKHwd0Hsl5HLfBlGBARlvIPx4llsgexeZeLdfsFBynmOYIvAimWO4L",
        "password": "96IBnX8BWnm9DPPendBccjHMC3Iq8uNhAvTXs2zpqWy3Loi9BUlNd2AQ6igeN4wnzpl2rVrSR0VDpeN189PmcpciItxvx3T7tf9VaBN2CJG2Yt36CStPiF70",
        "phone": "FwGJpNcFX8QzVTbFzeD3hKGadvsSDt1iZH1pve4smU1hNdXnsAqJk6UyCmqfQsxPayfFNj89e9r2noqPZQzkXtSAQjPGLmwWVLBI4JSjTjmhIM7HDG1AaUa0d0HZndViYw13gUm9dJrVvyD8eFJpzUqMU7LhkGAj",
        "userStatus": 697099063
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
Content-Length: 975
[
    {
        "id": -2189529629776150528,
        "username": "LA6CVFcjhILzwQ8zB8QtkxqY1EF58QZUr5wmKIG1qsAWjIwUQnnbUO9WtO2BF1v661sQK9SaBs7UbEP21cdW1mTubV5QXBX3",
        "firstName": "qUnzNybgF5rjUtl7Hh94bDf6J63l37Yt2l2PTd5zjxSe1elIwvMH81NS8RdbZbE1xHRrVX0fuTtw7PeDk0kt28la0zmZL11iITKEQKTlEmRLb6pw7KZ9SlkSUGSFHTYqNI4DtYZ7lRTxYi3522eVozOigGYYAXpnFu19s1hNSakQtnVwqarOKf70W5Zw2oUISVSkW98PksFNQBjhML6w1dxXjxumVo5NjX8g7g5rJKeAm",
        "lastName": "R9jYFkbdivKMSGbXuuUDK1UPtDAHeXg66z4MUg0cLLZDraBWFwzpytf17QJlOZrUyvHsLHFxsEbUOMRtjqTRT9S10BmOBNI9jqC57hDAWOvLBmeUM8MGhFHhh46SSO2beE",
        "email": "mWUXTIsEkPSfC12ijH0BY4HQWvS8Kxp7tj4m2x1nnUCZVEhemiPkmwbj23rNBRV4a0rdxsAUmdUiSbweumyQTJaVNCJotEtEEVRcos7LF13xdAMHXkyQ",
        "password": "IMS",
        "phone": "vgOaKtOGl14N8PsaT0ntM4r7Dhcm34HzlwJ5ZyLkzQ7IGASzBg3nkuvYMHkPL1p6x8cxGYRgPZYvzR5a78ysD4qpLKfwMEDjNQRtPIKEHJ9hAesIn1a15AqQlGn7k1r7RiBG1lkI5u0FJsn7ty8y8ypueMBzO3GFlimmEH5Jb5p",
        "userStatus": 239360535
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
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=22laBuJ0ZXNAxBEeh0wDmbksUvykr77t9tDKYmLXkyyRac5rcC4zNp2IVA2mIaPREsCCPnz9W817k6ywJD6w28eYJhkrr9i5CUIsihBfpDmKKVgtznZCveAevUFX4Y2HTK9b2LrsoNc9JtCiQBVlQvAlqfjvdlc66mi88JBxxNGhhiA7UvtL137rjqXwLaDSwV1FFCccqTuHc4P6ziRAmZ2FpZca9P3GL4lqGyD6s7OEbDLLVDlhCpassword=X1n9cwYfdJjza08O7AW 
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
HTTP 1.1 get http://petstore.swagger.io/v2/users/e8y0TuDfLfDJg0SsxQIKA1kL1sz83v4hDChx6VMSapBrpuUXkCIVD2HFugOxMSPqv7YB3Kud96FzAzxVbfRPhyvMPjkCca2Hi0jlLOzVUeuuN1qZhhOyPjlEDFgQQjx8kRu5F30Ahv55xv4OMTnBd 
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
HTTP 1.1 put http://petstore.swagger.io/v2/users/gRpxHfQfob6ShMWhmeNrjlWoaJiylvhBmG84W 
Content-Type: 
Content-Length: 883
{
    "id": 6071813425476927488,
    "username": "XOfpFm2EFeyeOkz0YbMQ9b056sHH9ZR6N7wttz78OFmCZWCY8pPhAPnGh4n",
    "firstName": "4fySm4lPEtYs8l58iI7q7WHHL4o39Lvd136n7rdMVce4xjcQ1kg9gYR23f6c1Bq2ExqMZDyUQMYn6bd8vuhLs8OvoUIpv9saGSWFwuzmhyKoJXwfsO1UXPqmJ9MeiepZ7lEDQeZ7MJwwH3M9RN4PCvblEXAWbZVjkAWbPVjCFP8nSUxJ",
    "lastName": "Bzk7KFLIgHUgDdBe9M355FLUO8NIFxrh6LoRr9zHRtXvGyJPlMVqsGlgO8ZuFqMMbbDClckdFiImRsccf7DHNZXC7W7NnTzy4cbqpwD5OlrGODT3KxLywIbDFir2c1BheMHDjkI8G9",
    "email": "uNHyxfj6L2hpHzQKMRl358KJr5rzLBngo5OWk7269jvRTlBFdXIj5t2wyu5k5tAuzpqUxt0HMvyFRal473ncwpJ5TOpZ",
    "password": "0tSpUMWnNDaicP9maeteBGL1pRVegVxhppHjcEGZiQiuGrRRGl6i1RjrIfFZachzCYTOCANUr5p8xgZeB5wCXQ3G5JGgWXQyVJmykasLgRTO8T2JZymXo",
    "phone": "DuajL6gBEcl0KFbdrr5lfeeiXdQkafLOKV7w1o7FBtGm9RzBjFWzTaRRoHbzXWnIRveTUmyvQfRZ7rBq7xZ0IQS6y3Gw03eSztMtPkZFAQFHig7pN6qwXiCvmj2m",
    "userStatus": 116594124
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
HTTP 1.1 delete http://petstore.swagger.io/v2/users/WJ1qzmpfWgUEybLXZSnvPG7l2rnpOEEKoGaY3AdZQ7DoipmiiJN7qVtsmRRawwUVd5TgF6gweUUxjgPB0CJqxdTU5K4BhZwu5pKLw0hKVbifs7QtKAU 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

