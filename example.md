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

* **Request Parameters** :
| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//pets/post/parameters/0](#testtoto) |  |  | Pet object that needs to be added to the store
  * Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 990
{
    "id": 8335207202730016768,
    "category": {
        "id": -1312935162668908544,
        "name": "RHJfAUhppSrVd9VeCVyj1mYbNyRkDz6ugPKRJ2g9UI58R0mtWVMYiL95j0qXzwrQlcI5eYf9GkiylF2hAPfSAoYUpoRZUiQgvymJwBTdWbLhROyrDOjddi7CGYBBhrSNZexwQqKNCw4tk"
    },
    "name": "doggie",
    "photoUrls": [
        "UXsebFxiidhTPzlHmlWTSMjCzW8EptikqKzBp6UHkbB9KXR7jN0cAkPagXPGq71RSBtiInZ3zBdkz4rTSs5tMUD3StKjBMatoDL61L9AnmUWrlPkNVNAPrEIUo1vacYzQKFRvPs"
    ],
    "tags": [
        {
            "id": 367441087897272320,
            "name": "PDIFXwAL7qcL969aCknBUdlz5RpxKBUAfDfd9QYhga2phcAUxYvrbR1hJqPu1J4hmjuw9tNqEQQW2rQzpm1Bd2SXsHrurvLOPgkZJ8qnYhj1JaB8wCKKEDH7l9CMFnAuDVun3UL2c43VfE3LhOvWrd3MnFz239wH5148VPa8Ue39S7V9Vr5nE991PJ4STBzYCE6yuhGovJyoQuxMVD9ANjBC2FuVg4T"
        }
    ],
    "status": "I0rci7BNRacHEJtznD9aWLMYrhUIlNB3O2g6aRU126JGQdgeQqoMbbLDsFlNtWRiZ7o9Zjb2qUIg7ZuXpTKA5wdxczlFwdXvlmFkGRn6L5mT4RRuLB5Q8jokSK0oXXUikAD0r06d6t6blXF6zLXI4m2W62l40gnlQ0mi1tv8WCkiA0p9LnRPJUMPW8TXogifhEyj73s"
}
```



#### put /pets

* **Request Parameters** :
| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//pets/put/parameters/0](#testtoto) |  |  | Pet object that needs to be added to the store
  * Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 814
{
    "id": 7530871643367800832,
    "category": {
        "id": -1036759393917468672,
        "name": "acSNmModgRp9NNbDhQeokX1NipQnlozwBskYeIbvABEnpP1HGf50c7OvwETS3spFVJD9sPF2rkqR9ryQGERTLGoikhaoKz3FjHPLwuNYOdPYFnPl1GeNmC5HUf6EPak8R9ToEHmsVbrAzgVBXaojNu1HJ8mziHHaRBz"
    },
    "name": "doggie",
    "photoUrls": [
        "iWYe7pOHFKiCVHWIbYqV6NupucAlN9Q65Olde9VUUdxPVty6sY2zLxYgJzBxIsEOhZ1v9Xq3aXT6qrcTqfscMrsw143JxHyOHAkQxKTHHNN8f02FfvR2XkyYpCHWkfL1"
    ],
    "tags": [
        {
            "id": -3870962107289698304,
            "name": "nQL4yzSHOTKu9fmbcGKa5nS2H8NJXTBkKnpjWi1LbLfl0BxchhmnEfpmnd5l6HGR46a0obLAW1VXCs9UKwipLHL9VRu2yaT"
        }
    ],
    "status": "g4EFgqfdrba4EkYoRgODYAMTrgW0rQEHUimbICoaOzesTcRKtFnrf9lHqiIR8mz2FWenzDxncMQ6YHQsneTDoflPx3GFqgI5cWtLz19MNZSMGJe4X7Hmn3bV7RAx7jDkg66Q8f"
}
```




#### get /pets/findByStatus
Multiple status values can be provided with comma seperated strings
* **Request Parameters** :
| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| status | query | array |  no |  |  |  | [#/paths//pets/findByStatus/get/parameters/0](#testtoto) |  |  | Status values that need to be considered for filter
  * Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByStatus 
```




#### get /pets/findByTags
Muliple tags can be provided with comma seperated strings. Use tag1, tag2, tag3 for testing.
* **Request Parameters** :
| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| tags | query | array |  no |  |  |  | [#/paths//pets/findByTags/get/parameters/0](#testtoto) |  |  | Tags to filter by
  * Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByTags 
```




#### get /pets/{petId}
Returns a pet when ID < 10.  ID > 10 or nonintegers will simulate API error conditions
* **Request Parameters** :
| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| petId | path | integer, formatted as : int64 |  no |  |  |  |  |  |  | ID of pet that needs to be fetched
  * Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/5865571136032473088 
```



#### post /pets/{petId}

* **Request Parameters** :
| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| petId | path | string |  no |  |  |  |  |  |  | ID of pet that needs to be updated
| name | formData | string |  no |  |  |  |  |  |  | Updated name of the pet
| status | formData | string |  no |  |  |  |  |  |  | Updated status of the pet
  * Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets/SmXRcNWQSki6FLhLwOFyIy5toIBQwNmp9khl7dcZxv5dgnYNbEmTdrnBaZrHMO6W9nigAvg70mlgJk4VYqObScN2ceKZ3QVcddtNIJVJ6g0PA4KzvzLnMyqYNaXQ1T3e7w2QgXzmezcOEXo9xaxjIYiw9fma9qpgXr6doFACfMrTKQ2h0AAIySeI8BSh2hyZJEd7jNKyAcsk2uC25cLD50meCewEw4DfIRn2F7B 
Content-Type: multipart/form-data, boundary=57cacc26c5fe9
Content-Length: 282
--57cacc26c5fe9
content-disposition: form-data; name="name"

k3AmydoEqahwaEKMShrpl5F4W37BbJRvNsRmFg06qiCBWmoPEPeZUU4RXcs8VkDI
--57cacc26c5fe9
content-disposition: form-data; name="status"

v5tL5zcnbOjyc8c1ncWihNgtgooB27oxcSjiswFEkZcw7pyvBuOTi4mytL9vSy35rnnTT3xe2KKa9jGLNuE6y1E1MOxF
```



#### delete /pets/{petId}

* **Request Parameters** :
| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| api_key | header | string |  no |  |  |  |  |  |  | 
| petId | path | integer, formatted as : int64 |  no |  |  |  |  |  |  | Pet id to delete
  * Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/-3038755384157274112 
api_key: ALOY9HRcf5fZQp995VXAA38BIaowH3TiOHhYp8aEepE5POfVJdvkhEWZPkwxnqQc77awflbuLPAADPwn31HkGDkvXR2lhSypZJWf57KQXkrBaXYeZGyFkTaiK
```




### Resource : stores
#### post /stores/order

* **Request Parameters** :
| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//stores/order/post/parameters/0](#testtoto) |  |  | order placed for purchasing the pet
  * Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/stores/order 
Content-Type: 
Content-Length: 416
{
    "id": -7895212988943040512,
    "petId": 7587793459122012160,
    "quantity": 1921703940,
    "shipDate": "2016-09-03T13:12:06+00:00",
    "status": "V6N2puGZVfuIrbCHfOQwznLdC2VJ1ooWubZUGFTBVokmAW4PLUmli7yUatEbS38ne7hVNbwIAR5aNaZz4lUmtshDWWPPZYde6v9TGGCgxIrkSqUWMOjfhATewJ3wHgKNLTGszjJ61arTBlQn99CqKwEgfINWYxJKqqd0JW6L7yEITv63EJuof8FvRtsQ0cArCOrmLy7S6MB0iH3WqxlGG1bxuDnvQYWsMoPyWXq3J141J7",
    "complete": 1
}
```




#### get /stores/order/{orderId}
For valid response try integer IDs with value <= 5 or > 10. Other values will generated exceptions
* **Request Parameters** :
| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| orderId | path | string |  no |  |  |  |  |  |  | ID of pet that needs to be fetched
  * Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/FkRml2TQ 
```



#### delete /stores/order/{orderId}
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors
* **Request Parameters** :
| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| orderId | path | string |  no |  |  |  |  |  |  | ID of the order that needs to be deleted
  * Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/hlwghZ3GOBCL2Gv4KxNSwYxQPTcSN3z5o5m 
```




### Resource : users
#### post /users
This can only be done by the logged in user.
* **Request Parameters** :
| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//users/post/parameters/0](#testtoto) |  |  | Created user object
  * Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users 
Content-Type: 
Content-Length: 648
{
    "id": 6705669182966464512,
    "username": "8emyfYp1a8tmg9wOotkao6hKYsgqiTjq8FZoEppOyTbP2",
    "firstName": "DrbXBA4Sk3lBtDuN4Dt417uqV2k7RnPvO0sq",
    "lastName": "xjVAEx3i1RnFksGrW7nYruQPklDkO4WlnSV2pZlrQI6bbMC7T06lvXaPiOa7S6tgYpjnpEOgnUryH4FA4MWAJ6p2Uz9NGD4E2n2r1RIoL9XtdD3ipZS96ib1SlPyYTd1gfth6bGSkDlygpQGpJPv10xTlmskfFlvVON1ZtUk7fSnFJ44sTAuU7ngtQBJvWeqL1sKvm4CCX0hG4m8YXCT509zQKimHxNsygd4DiGffGx",
    "email": "LU4KRHDXINwzyOVglJIUZVZCdFStmqp8ktScbw9TjFsSuo8",
    "password": "7RL7MKK0pDuM3TUonNAyjJrDpUwTiEJqvuxieijEVNqZHln48XDsH456YB0hgKHMff4uxo8tczsTVPY3MBwtGBAFdAWukD",
    "phone": "ASl4qJcTWMlPH",
    "userStatus": -347973056
}
```




#### post /users/createWithArray

* **Request Parameters** :
| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | array |  no |  |  |  | [#/paths//users/createWithArray/post/parameters/0/schema](#testtoto) |  |  | List of user object
  * Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithArray 
Content-Type: 
Content-Length: 1044
[
    {
        "id": -8400897421852278784,
        "username": "vc1HXxYUsxnfaV",
        "firstName": "aghWoyn4FFIVjotBUFCBDaAxC7VShQ0s7hovPMAvriqLHTmBzZdc9NKMV",
        "lastName": "FdvFFCW47MQIii0I3ICqjbpwozk8lfN0tiG8VCc3p3LHmLpqu2QNegkCPELaUzboRRwNuJQTNBBan0AR3rEhHZUxEFIyeUW6LtUgdKa0lLaJMLAPcf7Ue2sSHarW4o3QSX65Ih632hNO2nEfCMaROCKwMctRAwHtuOyc5Eg8V4XYrBd4nnWcZGIMSbE",
        "email": "IlWdavqg9Ho5Ll3cWhhkEdwETfqMq4g8qcmBIMRStfXeA1rxiISWVoAPE1C46Sdx5z8NlZFPeC3PEvmWdeS9DtYhvAmCtzay9ilvi0kxDomhTJe6Y6fCAeT6PgJiPT",
        "password": "ZccuudO2Rco858nc6tsJ4GCbvSUOIOEI0Qcu41xVeW4k4rwbVYUZFxbbq5Z9UERUv3pz5WujSyDWZa8U92UOA600c096E0094pJaldteM7aMhjGrlBgWHgWTg6ZV605bpOmL2PZOXaAfthGPTXLBdIuuOuqVvv7UktGmjGagRLwl3dbWaWxoF2Ttxjp2OwX8ZDvjk",
        "phone": "zbr6wujHrtEZSj1LNz4cBTIy2Icx1wdBHEHe91VBuAAnTC8HbcTM5Cl7kxEm3SXLwFZGGVhbvSypuG6FTZsZCN7XkMjoEhabX9RE59PA1oZw55cZ5EYIs5FMRZbwhlHevzSAIIbK7agdgscm7b4zhKm8JxF0TmfoV7ZEQaoXlFaC7nZey3OPNaYxIDyB0N0WU0ALaYIwDT9Lh80QcOG0YExGi5ijSifNiPytOh0rb9dtidj",
        "userStatus": -1301852738
    }
]
```




#### post /users/createWithList

* **Request Parameters** :
| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | array |  no |  |  |  | [#/paths//users/createWithList/post/parameters/0/schema](#testtoto) |  |  | List of user object
  * Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithList 
Content-Type: 
Content-Length: 1088
[
    {
        "id": -5975196972217270272,
        "username": "tOQ13WxDgqn11m1oc4AKtjQp3lbZNqEgeuhhrPVHgjIhFKGRPgCjAsJDOVCBlgRAL9ScYOUe7DwNocFethx3KgHycj9yA18ma1z9PtoX7ULv7qKBIhEsym1KFbigdrCntbxiFVgN",
        "firstName": "1jXr3yaldCTzEEfPXv2p7qSjXbZSrMIs5GU8e4tsHn1l2gb0MepTFidCtcvUYen4Uhc9mGB34Dp6TB6FQwzvOM7hZDbXRz",
        "lastName": "LQeUdVwhZ9H63icI8IiDx5LO4o02gz41qjWDetVeCCkFVxo3fHHNMtBRSBT8bYaBh7ewAaKcM4SHBhLRYtEKWfCPRwX2u8DMfSiP222P7UwJbiAaLfVIvxxn3upyC3kSWDHZGKOOElxQD81pnW7StEfx9F5MJqEF3lFK6uyLP5CtdDSBzZu3DJANpGz86dOazuVFYtqOz2hMF9",
        "email": "f9SiNCTA1z9aGnZQXtLCsf3gO6xAMHY1RQkEsdfuMpFsMEjJ85mAkqR9xpJj6IlYzFC2TRxGgc93RsN0yaATAr27RMqXvMW5ry7lqF1GSaKJDxJbHk4iM7pDTQBoCxt46Bpwgrd8BXSevCqcWvuICUmwKXVnvosB0S7hjlpVjiaOUA1Q6wzJqVfbTayoz0ZzT7Qctg7MziBtSCkZ8TIyPYKI9i7Jj7ic",
        "password": "9pIqxvZP6sIJMIRGqqvpaeztliNsBZHLpqbXVaM1DvKqdC6E3C4dQDHcWuExumiTMtQHEDJh9uHm6O19q5nhJ4tFy8c2uvWhZNZDrIVAcDXjrYtR4Q8NUCstKFwfatw9gwNIeJjrmgLNfeFj4O7ZqztaeZqptWzKsnsH6",
        "phone": "9t2Uhh8WBdLIdbiGmwGMW9JvTcSmUY73s9YJr7F",
        "userStatus": -1433501475
    }
]
```




#### get /users/login

* **Request Parameters** :
| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| username | query | string |  no |  |  |  |  |  |  | The user name for login
| password | query | string |  no |  |  |  |  |  |  | The password for login in clear text
  * Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=LyC3eZAVMw5v1ZIUlCTtGlDF44MK77bTFOWUNxPA3V65UOZfrSJ8emNiqA2yHern2oiQW8qZ3x5Xm4dNXWWbiKuJkxi2LKpO9HE5P55SDaQZf4Md0JpjtT3NqmPb&password=f0gXF 
```




#### get /users/logout

  * Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/logout 
```




#### get /users/{username}

* **Request Parameters** :
| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| username | path | string |  no |  |  |  |  |  |  | The name that needs to be fetched. Use user1 for testing.
  * Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/MKrFnBwnRAa4BTuVmnZaNl0Zsf0IcF4ZqvFO7bbYMl3oexkBUjLIFLI81IRdoVdOqSCy4 
```



#### put /users/{username}
This can only be done by the logged in user.
* **Request Parameters** :
| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| username | path | string |  no |  |  |  |  |  |  | name that need to be deleted
    | body | body | object |  no |  |  |  | [#/paths//users/{username}/put/parameters/1](#testtoto) |  |  | Updated user object
  * Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/users/wR8Agn7AY2UJLAvuIwdzKBvXpVQ1uVO0MXB2kIDiLx2x7x1Q4fpOQUMfQChky6lk3WnnF1FryHYGf0xjfX86RVmIxD35JpqNmOa1PQtoxr5NsC7IzgOrbbaJOdPyDflZ4w1TmuiUWnHoZP6 
Content-Type: 
Content-Length: 1028
{
    "id": -8017814329350946816,
    "username": "uW92Gs9vsGdDbuwyn4sp68K6CEsD2NqxKzzr2IWvo99ADF81JBrQJbXmQpZSdppXZZo1Hlw5vFG9lPb4qCV9NSvDhuwuUWsUVRVDcsJH8pRtf2yFEuPsmk6EPC9JzCEvtz8G2SnbhfEwhdcWH1o4muJb7SVHuzcY9lEcd2nvh12yffvXgT1CoKOwDJd8jq6sLK",
    "firstName": "ZM1u43xDjM8g31hFq2uWFe9NxzT0lEFkrHPvLn849gkciCSIEmFjAP78o18KFN56vVBgiKkr1FEjhx2VTHfuwmCVnLG3zL94GLlYwFqxl5QCCTxwBN089D4xpKAYwK2cwob24CAp",
    "lastName": "r1kkzQVmR4wv83UTESppVCVkNYoqyN8ZOsko",
    "email": "fKbkhGskBlZuKoqmkKai8ARVIRKbb8urTGLanevYzutkTTHdESwNsnJbftmqCRRvxCGUQbTqFmLzgsMUkjHNHrYWUlmxce2KQIEHUy8AUT9amW5GfNuXet",
    "password": "9OgG1uJMlsr3mZbWT564r2a8iXCgc5alUq2WVMIgeakB9wy3BE72Hha0fNgsTqOORQKMCt3RDnsNU0QvFXymfJnvwDXp4MdVCYIfsM76azT4AJzfH8CXR0snEqNIc1EP0n5s9czjMsnmcXCU5fRW",
    "phone": "kkTK7CX9hM9ESCN4b7QEudRsQLy5DulXPeIXRF68sgMkSAp4HfJctAEjmcpZHKXwZFuQlAYOQL8JlyN3Oxfh7TBu60tNKqkK6OArpzfgkoZGXNJLkY2sSEWYEpMpQ69XUJpkjFAE3zk0n4MH3P9Wt5U7vGwmNFjIpI2InCnrcHszMegQ3qMxwGE2nbobRIThrVZOymgK4JkRYBH11tzxadAyp",
    "userStatus": 1173091467
}
```



#### delete /users/{username}
This can only be done by the logged in user.
* **Request Parameters** :
| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| username | path | string |  no |  |  |  |  |  |  | The name that needs to be deleted
  * Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/users/GCx7yxW7UdSZWcQUNxWP1vncJXK8VtpC6WKFuHMoUEnRReMELIuNeRZYPJ6Ldvnjs8ZWPLlKqIChWoWI7qwmivk7fqStWgNppMlfxG0XpCfm0b58CBuU7O2nfVQbcDABqWQXDQV3sbptnuCZ66UdUXBaSrl45WGvTwtwnpz 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

