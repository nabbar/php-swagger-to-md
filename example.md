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

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//pets/post/parameters/0](#testtoto) |  |  | Pet object that needs to be added to the store

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 597
{
    "id": 2961358175107809280,
    "category": {
        "id": 4338877774618951680,
        "name": "S9DyIrEr3bPKl4AjNdCAdzXgPrZrdkt6u6FdxjEBvulQzWamaMWn"
    },
    "name": "doggie",
    "photoUrls": [
        "UDclCDzX6FsdkFKEkm9OH0nDaKNXGajBOwXr9wogcRtxwebRAlGil4WwOKtuVN6Jj3btAAKNrekXswO3RumdziJn3dSY0YIk2TNDtxqULKSegHi8cElLX480"
    ],
    "tags": [
        {
            "id": -7400297748441858048,
            "name": "iZHC1ApF4X5ZJPRX6yfeLUzwREFSWGQeFyRH8gmdercXh3VnCb"
        }
    ],
    "status": "o5bVXQAPMgG0WeRDn80AnrMlJQg7trJSwVNtLniyEYyAcqeAzeaXGXipOyxiZgawcX0YkjwZh5AuwO552f"
}
```



#### put /pets

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//pets/put/parameters/0](#testtoto) |  |  | Pet object that needs to be added to the store

* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 909
{
    "id": -7386568108091113472,
    "category": {
        "id": 7404323670396502016,
        "name": "3p0Beh8ly4Qbaat4YNKH5w65GTCGnD9q2a2hsaC0fsbpCFuBsejyKpErjh8GUh7Xr9eUjQUyj6YWMsxfHQNsgrTzI2gDjoBLxPGRGAqZHoVtRtJzkw1AYVaGXrkhPV3nLJerkEr13nvVQeubLwMJrWqooKGeGJBrtPTNukPyIltyAYKluw5VtwkRh15XKHpexi11DRAlc4UM2E8xadtDJOv1PBYAinOPFQRj"
    },
    "name": "doggie",
    "photoUrls": [
        "rEUvzGydP6o3z1MnxNc8MNq9BfPs689yN34mKCAAIYDi0qGxeSG0G6ahm0Js9T0XX4jIHUiqTVJTlprAi7AYeLf"
    ],
    "tags": [
        {
            "id": 1423781826127724544,
            "name": "2VT3SQ8cyQ6RhZM0T8qlIItjGH4WhQWkLPoEFxQeoX5FXRGR06cJOG2vn7rFXo0JdpoTWe7lcc094H14NdOCUQ8hXAXVYXFbm34jibEuoFEsmFxaTmNNcV5av26t0MFnPKG8WlDk1iNnXlyRHlEUhK4NMbgNXWaNGRVDczXdRLBP6aGNwlHN6MATXRGUOQIvHE8Ud584RKUX"
        }
    ],
    "status": "BLqXte3fOWdGC8vtQ0bu86IeeN5YH2SiOjghxjxmgK3TTymKyyeHEXVSK1Rr4KKS31aBkHXBs0umyQ67olO2iKV2LNuPxfIAg"
}
```




#### get /pets/findByStatus
Multiple status values can be provided with comma seperated strings
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| status | query | array |  no |  |  |  | [#/paths//pets/findByStatus/get/parameters/0](#testtoto) |  |  | Status values that need to be considered for filter

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByStatus 
```




#### get /pets/findByTags
Muliple tags can be provided with comma seperated strings. Use tag1, tag2, tag3 for testing.
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| tags | query | array |  no |  |  |  | [#/paths//pets/findByTags/get/parameters/0](#testtoto) |  |  | Tags to filter by

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/findByTags 
```




#### get /pets/{petId}
Returns a pet when ID < 10.  ID > 10 or nonintegers will simulate API error conditions
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| petId | path | integer, formatted as : int64 |  no |  |  |  |  |  |  | ID of pet that needs to be fetched

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/-956550862484799488 
```



#### post /pets/{petId}

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| petId | path | string |  no |  |  |  |  |  |  | ID of pet that needs to be updated
| name | formData | string |  no |  |  |  |  |  |  | Updated name of the pet
| status | formData | string |  no |  |  |  |  |  |  | Updated status of the pet

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets/GwnMNPQZzBvZ8QkshVBDqLlaO9VUArdgXA3KqTK0uf0C5l5nhH0HsmRhwMb6dpnb0qWrjGrOVsr1Nwo4doLGLCXhp9oDyLOycKZvqrjmUKnHhLLuaxaVa8 
Content-Type: multipart/form-data, boundary=57cacc9b56fcf
Content-Length: 356
--57cacc9b56fcf
content-disposition: form-data; name="name"

AhBdQn2pzMp4dRozL9XsqIeVTM6OXe2xwDKn0MMzzcEM33mOdjhE2wzViGKfUMMrqwOrjB0SNFFQI1FWlXAotakLQ41LRNcik1JEDKwqpbh8dX4zUFXnPi9FnaqeYDxjFgXi0tJpF1yTYDsSiqg7IpN5AdkyRRRw8OP8
--57cacc9b56fcf
content-disposition: form-data; name="status"

yyYz7RyKkq2KHat6XyGbTf2L6zTVo2dXAcwH34snvu7cEBjB90M3fPOloHhNJvKkHh
```



#### delete /pets/{petId}

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| api_key | header | string |  no |  |  |  |  |  |  | 
| petId | path | integer, formatted as : int64 |  no |  |  |  |  |  |  | Pet id to delete

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/1082027988440055808 
api_key: Kmu8SYg4DRof1o24DRSZgAh3kMOEt5Gesamk9DpNuN2vc4AQWtPd36hnT51mbIBDTYX2BnP6aSCnXcdUF37Jao63t8qFQ2iK0gMCDCIOulbsxpmdstWCS3Gmc6138kN9AzLdcu2HPd9nDvB5ZyISBoeNvgQ
```




### Resource : stores
#### post /stores/order

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//stores/order/post/parameters/0](#testtoto) |  |  | order placed for purchasing the pet

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/stores/order 
Content-Type: 
Content-Length: 335
{
    "id": -3008570199382163456,
    "petId": -3277574528095485952,
    "quantity": -1336488725,
    "shipDate": "2016-09-03T13:14:03+00:00",
    "status": "pLCXklwvv52fydCKFWeoCy8YNLrzuyBUkdSEzoa4tck1qXL6T0uvzDtmpVVUuwOOKHtj5EoyRIziFloylS4UvxhUtcOXJDMtkgNqVbYNTy5yUt6fmaaRIsMcEBaofWRAdF09QZWJx1hsvoHRzSJhlvtZ7Do",
    "complete": 0
}
```




#### get /stores/order/{orderId}
For valid response try integer IDs with value <= 5 or > 10. Other values will generated exceptions
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| orderId | path | string |  no |  |  |  |  |  |  | ID of pet that needs to be fetched

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/gXOVXXLWUuuVLWqaEiJx11SxvSE8g1 
```



#### delete /stores/order/{orderId}
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| orderId | path | string |  no |  |  |  |  |  |  | ID of the order that needs to be deleted

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/wZysWwdTqHomtlND05ny6oqETji2AkM7jlzgRMaiuyEXUrBUxYsEnTihdBkNV6UfruwjgGBKffI9Hk4fjxTGqbYDNirIpmYRQua6bMRq2zAJTFZccSTC4RgRaIAz4yrU3C0foSFqsgam 
```




### Resource : users
#### post /users
This can only be done by the logged in user.
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//users/post/parameters/0](#testtoto) |  |  | Created user object

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users 
Content-Type: 
Content-Length: 1134
{
    "id": -2476801154479030272,
    "username": "IYYH0taMAzFAuFQ8mRJRQXQZM4HLa2nS1mA1PLOpkt0P8QXvHHmyEdxqhfcsizlkVWmLHab1DbRM2PhJwEiaRQB95NBonXIjT44AegCSsuEujWePAw0smBBrpdPMby64CaFRriJTMon5kCVV8WnuyZWXcMKokQsX18PtqyndXLjhnfcvbA0JzXHMJ",
    "firstName": "a4jD2lLROcqbqnWJEkYRParQT0NBNx3XBnAEImvwyWIYjFIYZGQPRiFLjsm6Zq3BNDgw0M3yIL",
    "lastName": "2rf0qWRfN9UysnVynlCY9ffFg1IOJumLVCMlzEBnNwWgTROgdqfnGu3WwLLfg81bKOxks8HgFDwyvlP",
    "email": "L56sA9p6Ubmajnm4cToE25UHIrgeM5Wyb20LbqR6BehVBEZNxnsAtnhcOyqADn8Pq9ACAsIcG07iE66cuyMYV4aJCBkgYs5oCF1c8JoPKw7oDdA8Mn6Hrhr4SLkRepgQ5h3d1s2LYaaBoLJa8QRA7jE04YSio89tqcHsEKeDUofjaYtjPlTWEyXIxP1VYaopm6R1Q5ELuU4ETxXITRExpCgWriRqsgPPmHQcNvYhp2WiAT1tK",
    "password": "1aih6KzYa2f0RBIIOveNNDPJWpDXSoDTyWbFGLEROTSFvBnk7B7UfXEcmiafGO9fKlVq7ziVtbAZMYjTzrOPos1LLc1s0aHKwDbDcuyGF8Fr7ZkHr8wQByBnKDPKNwvj9GXmav3QE",
    "phone": "hLICs9LY0nxCKhfz226xmgejCpPGftpxe79HhVGhidU3v9CxcI5zZjSCIIiXbHuqPE76zOoS2jVxsy5Ehadgt6ScOaa0REqGjyNTmcLpvHWYf2CwcQMGXESLP2MHHco1LbU8oGxUntSDwv9ImWpjBh5qkR723v3PHYX6Eu01YTFuoOdKLC4mU9Me0Uh4pkU7iRdXldZk7EOvs1gdEkAyunNvh4AHpuOIl2FHgE1niQTLS9Zwu",
    "userStatus": 36248445
}
```




#### post /users/createWithArray

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | array |  no |  |  |  | [#/paths//users/createWithArray/post/parameters/0/schema](#testtoto) |  |  | List of user object

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithArray 
Content-Type: 
Content-Length: 828
[
    {
        "id": -4929742386944278528,
        "username": "s9yoHwAOAYJa9H0n7GmcFAwMFn30BJY3SxrA42pE09OaQPxXvUaavGWa40aFJ9JCHbcLdCpeLeoB3WzyQKJmqFwuGHapRT1y4ejiQJwBXUd0QNyHxh3XXAsDhC39w4IBi1T9KpLHkYHaMgSjyVhvwK9O",
        "firstName": "dXThFvAHoJsOv98uRig",
        "lastName": "bzG6Rb",
        "email": "BlqZyoSQ4nrLMbdAGnIae1qmc02jSeWtAns9Ll0QJrBwDP6jdPusRUP4VSnN6khHHKRt6RjPjVlWLsgYiKq9FfdA7BoeVGWCqN6wFpmYlIV6bb4tVvDBLRcSsA7oh31HR7ewxBvSjrYuD3YzzBaksmdVXkjeokWgrbNYMiQ6KPBnTzWsb6MEtZzqkSEJdAZFLMDy5uEPkfddP9G0gsFJse9N7OwkovZaiDJn8ndsDqGs",
        "password": "mtQP8zinI5uwCPV8P6qtPOBd14QsKj27NSXWrfjalOGXDC6tJxWylyLnCCPnVRuIJsEaHYk3M11qE7UnEQWZoHn1kcof4TYNlDY3Bj6ol7PZeJnTAjSZ1g1lspAwjzkEcjHOCOdYV2YaMl3nEWmGcn1FNCc6bxLoQtdthqsdtqogLsDqo06Bo8h",
        "phone": "KuiW23lSw",
        "userStatus": -586453748
    }
]
```




#### post /users/createWithList

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | array |  no |  |  |  | [#/paths//users/createWithList/post/parameters/0/schema](#testtoto) |  |  | List of user object

* Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithList 
Content-Type: 
Content-Length: 1067
[
    {
        "id": 1753159505098571776,
        "username": "jmeqzAZISX53s1T8hqZMS5ON3jTrHQT1c8rLJruCpAFRCz0T0ZFS4uG8NzAupuwCCYompTYOtDG5dGYdGE6K8MSWmtqMXXozVMVkFT98xPeKwcYcQ4WZRPVdim0gjoPeaLzQFJZdydX4qWgh1dgS3c6my6CRus6FdGvTpv6YI4280jp1xGUBS0Xq7AiC2phg5N9vift1jwakPzlnggY8gWzowS0yiiPo6YT",
        "firstName": "emqySASIae5qu4zL189x196jsVHyTAX7XnFPYyx8MDyhI73JgcgimmBOijnbUkjRIZGGyeOlRnCzvFiLSz4fWF3eZqqTLKKtKr9iFYDxlg7QWqCOZG3Wm7alyBfkl0N5rXo7V1EhiL8ebK3br77Nei9NTo7foVlQTJYPLC63oeiAZl",
        "lastName": "qsTeHcnv5MDlbyG1spZhbCne1CxBCSn2lhh3tEzzqcUBLADd0CucfSqgvYR7Rfacwrg06Qzx2t8O4L25oxhEqIUVGM",
        "email": "x1eKyG1yMR7jUBsIFeLKDi2hIKcEqYHX0WIzCJ7pAfJuQbdwqYh3hj",
        "password": "Z3xDuvlswia5UTckus3ZjfcPGb6Jtq5suC6Y8srEKBKFuXZZp3YIjay0mEJP5PiArpzzR0eCBYh6Wh5ll34EeCEBhormdJWF9wf0wuC8sUfpblKwpObEqQfHeG4sq18AxnA3Rdck7rJjMuPbi1PJR5q6MvydwHN34o7WCjgKK03",
        "phone": "uTJNUzwMEXSrsrEZ8s2cQ98ttpdeqhMUavH55eRJcJbFaPEiiGv8QEBk4Pyu6kpgQ7mVldFxXQc8GRrYxW7oBJIGyhaEBzVrHin2v2AtSNByE2xcYEBAnkgWBrAd1wFIO2",
        "userStatus": 570574401
    }
]
```




#### get /users/login

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| username | query | string |  no |  |  |  |  |  |  | The user name for login
| password | query | string |  no |  |  |  |  |  |  | The password for login in clear text

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=mNX&password=ovOq31pHD05Xg1zICMJ8ssXudhzz4wJt2xU5zkNckS9BTIjvv3EXvBsIT1hYy0rBymG7Guj0mtBgcUMHYrEt26bV8tTGtlh2HY9nstoPXZ69UTRSkwlmCxiL0csuyJwfIGDba11717hV08OkEaHhHZ3HcvcKfI0XoE8yG9GHhXDh6sCLCj2kj61wBdhQWhOkWWTC6zjowXGDpio2CrmW 
```




#### get /users/logout


* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/logout 
```




#### get /users/{username}

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| username | path | string |  no |  |  |  |  |  |  | The name that needs to be fetched. Use user1 for testing.

* Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/ot8CKYy1MTXJMAQmUeSRVwhdUjQlFNS4g0G0Ze2M70wUAmguB9mwFDKAXBVDoOHFOnFOCIAKI7EiuVN55aCKOnkLYgpn462TuHH6qiR8pwrTreZwoChdZCYXSnkXumQZ4y6uRXDht4bVjbsINKVMmTJfh4dMq3LvCR0uPDLjHXe08HJVrEINyr3PwgCWknsWfsr56doNaCOjkxfLcXyKpCzVScScAk9PNBVTOjHY 
```



#### put /users/{username}
This can only be done by the logged in user.
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| username | path | string |  no |  |  |  |  |  |  | name that need to be deleted
    | body | body | object |  no |  |  |  | [#/paths//users/{username}/put/parameters/1](#testtoto) |  |  | Updated user object

* Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/users/wig4x1guA0TcAO5MGim1scO37HRroQnV8DZFEfaff3rQSxCyPZAhcokj6cLv28qbLpQqE1FU47KXEnwum6Lzu6TAiE5lMvwxVnYAoDutLfqqDWU02GzxNs756drSJYqEmoeK2JeOZFeCB8CEPbbCDjIKw9Dg83Uus9fvStjR8ytKH6owhA9VTRFq1jG9mADPJTlCnFuwdYgU4FrlfAh8sXytgeDDPhtzaOcxtG3HEkCIZ44eFmn7jWAzbec0 
Content-Type: 
Content-Length: 880
{
    "id": -4109455585332690944,
    "username": "AGhJgOYIXqIO3075e075umHYhSlE9zuKgLtwAsexSWmWXt1ct9hYwZXNRis1SWL8IfEiHSPAPbwNFyZ9Hh7dg518nuafrVn9a2rRVhsKtYy8wxhePps6uueSYo8qkwzvy0ntiPeLNMUkjcz9B2f6wtZvS7VdDuIcv5FOUTzIFt3ZFC9hEoobSoGKvCX97GlDL1rF",
    "firstName": "1nAvqAa3JsI7RT0fALLdJUkpgYahpPbrdMWEm7H6AperieGTZr6Imq7CphTO75glRcZejGlT5zloN1hNtnwPODrdVk23qiohvn",
    "lastName": "P4RJar4yf5Q2zeyo3cQh8bjbBCAS7YpX2hGcIKKXQB0pPzOSLE9TPt5q6FjdDIaGZQSIBDFreGQ4fE",
    "email": "1i6U8A0yGGSUkA50AWTjxxZYLFPQVtNWMURVuRtbyl5SWaTx6MQEjPC5vrVqVJmIDdD857jDspwpzpWGcNkvDXB8pxykgV3U8G2eNmRgLnFlNC2Zpnu3l6bKDK5TF8ONPQ2DdTTZhzl4co3CLyF6ERR",
    "password": "BWbg5Z4UQ6x40r4h1pmeNqRzYwGDnxVYu7fz7juYp22pu6Hww3KjtBTs8z5w70uB8Jbf3FdsHgSbmzHSCsc646ycFDINEdpMXA20fftXvl9SURLxjYDn4",
    "phone": "AKPixuwWhtxjtMzXK5iTXdLIK4HnsLz3wpl3TS0alxuPk3M485Y5iJO2Ovqh",
    "userStatus": -1719366756
}
```



#### delete /users/{username}
This can only be done by the logged in user.
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| username | path | string |  no |  |  |  |  |  |  | The name that needs to be deleted

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/users/NpGRiyStTpXJK0wP8BOeTx3WmzmDQmYDMEu4cmx6MuPxvlmEXbSQJWM5v9JlwHYiltnx 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

