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
Content-Length: 922
{
    "id": 3583652134039584768,
    "category": {
        "id": 3836558555960311808,
        "name": "Q9J2BL4z72O6T3fY8aaiGBgCu48qpd6gnPiZAmyHpnOiq4hyfrQW27ywbHWAV3QiS8itvQbUd0dD4uckV3gXaOulwrWruNKnV2QrS2l52yJ72WrYZHW9wqv2SrtmeeKagBB9DWfGvYNyVexUVt3rUzuM0Y9fcUqsv2C8ZROuQB3LQAFL3JdYiHLjFVzR"
    },
    "name": "doggie",
    "photoUrls": [
        "Zkk1Wt0NivDUypK84vcOJa6qWp5RZXHYh10dv11NwF"
    ],
    "tags": [
        {
            "id": -3826180493339000832,
            "name": "sd9YpXHA37wtdota5rr7sFCtHqZm84rAhAyGyghCoN5BczLi1dptS2XzsXWA1najYJ0wZh8n5eYhNKAOXZiQ1fqtcm3eKexIXyfXPnlUCkcp4Me2MwTOMjhZFldqAL8xjnv8LQ3nbgNf31iQybEkuWjahxASi"
        }
    ],
    "status": "qC7VLTMPgX53d95vZDHEYcAimSPXK8HaLP5wISlYPr22B7yBLffJrP1OIRMs0uCLjIi1BE0q52tHa2iVixEJnGy5xlyyPbk9TCaugbVmep3ormjJTYthE1mcnVKc65lZHwuYHqkVPokgKDZEBtVguisSdd4jiqj0XOYFejB4HVkszk7aN2qilTaz6fTpGdpD2nigGUloPGRo0YzO107nTiW0yQpe3OS5cbmS5HhVn8jo6Td8Tk"
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
Content-Length: 816
{
    "id": -6235574472569520128,
    "category": {
        "id": -2691662773271658496,
        "name": "42oo6sXZaqzisfpkhmWZLNrX68quySyCVW11oY1zoASRQic8E87qVyo2GOweG4QC1SDpQFZegR679ifOqmemVCoCrUQ7YHKZzopq3oFjgLrq3Geu3sQZ5eBw8rE79o7JNwaQVPacABCDiQ7ljYkpcVWlnAsxZAhM7rD2gNeRpRuHHC31BoqNkm9HXCfXcxJjYnmfbB6AsBiaembP"
    },
    "name": "doggie",
    "photoUrls": [
        "CC4YLMWn2TAzDTx0fMcQSMjt5tHrFwbh9ggV2cj45TDJMbK2XWTQJckOF2gkzsCIISEL5XQaRuUEFEGDAztjMO8sQ"
    ],
    "tags": [
        {
            "id": 8836864579813244928,
            "name": "Qp8zhMkmKbxBFsfk6WYGvs0hg8J6wwwnWFWeshBcs9O8B3tHZrovToN9xxg44Nr0sofUGQ69"
        }
    ],
    "status": "VhAYKiYbHu45ieDPvHUi8VKxaFd1Mm0HEBGpUFBB9GHsUkip1cHa8sHj7VkTikBXWhmQWXr6D8yxtRXu3FFc8nvfiP9BaLy62UXZSp6vxF31w1wAGbMOyh4R7eshZ1o2Vl2OK8jiOnjkoQU41HTAZYs6d"
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
HTTP 1.1 get http://petstore.swagger.io/v2/pets/-6119225324644335616 
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
HTTP 1.1 post http://petstore.swagger.io/v2/pets/cDngjPpjBmBLm9nC5hiykC8JJY3GlmgxZDOjseC4AePXodAuvS2Quaze9CUuZb2ZPRih5VmGacDyqe2V74LBflQpYLUYWXXLOg3TcqzmCdU2sXYz2Jbi51H3NB1JzZvnfzhr 
Content-Type: multipart/form-data, boundary=57cacce5d9032
Content-Length: 523
--57cacce5d9032
content-disposition: form-data; name="name"

QOC4IEwGC6Imh0rjIv6kxQTwlgLVxdUo2wtLb0rO6aanaCGS8NdFD6bZnXUVbPjdmNYxNpmUzwiK9ZDhMQWqX8qk5lfgazuxns5bSr5sYoc7nQoaGlAEt1YzmePxOj4bM9mEAs6yQjGe95oPqZuU0stmHjTvDXGp733HvagmtWAC2YssYWnYpQl6aeCNcickmg2RridUfNxh
--57cacce5d9032
content-disposition: form-data; name="status"

ZKKW7IlY4s8j4Wvn9QJqSARbOMqCjIojt9fBSBAW4If8FLwOBfetQ6EFS5hbOGvhPLSHnsDrbTARE6FfmUIc0nSTt95hQAyFmrnJU1a6ULXyRDOexxryUjrntxEj7dZtFmdzonFi9CR0fFfNcGl7ZNusk9MsnLW279BwxhOGUGH9mWXyCjFC6a5rkRUHCQKKZ
```



#### delete /pets/{petId}

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| api_key | header | string |  no |  |  |  |  |  |  | 
| petId | path | integer, formatted as : int64 |  no |  |  |  |  |  |  | Pet id to delete

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/3996850394759168000 
api_key: gwD4cxLTH7QFGsYm55
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
Content-Length: 392
{
    "id": 8352614864094494720,
    "petId": 433507215442182144,
    "quantity": 1044274905,
    "shipDate": "2016-09-03T13:15:17+00:00",
    "status": "Xebv6u434MxbuFyug88mv9H2XeobJPqH3Bca5he93LlyqT2G1b2xlKziYYtINUqRvD1BUgKY15wrZz81Kby5V8oU6SDUM3LhGNTA3Dz5J6wJFFKqRiwNqUHwMkqzocQ40JF3nf87lFQ1lAscTYZjTHQG2hfqt6vtQaxepGlLlcMHNeTGdTZ7AQNC732B9x50IDe8jzTFMFmzUff89ffJ52ld",
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
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/OfWUfFxuNQ3GvQmRph7E 
```



#### delete /stores/order/{orderId}
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| orderId | path | string |  no |  |  |  |  |  |  | ID of the order that needs to be deleted

* Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/gUE0ZHldNK13HVjmsN9j 
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
Content-Length: 958
{
    "id": -7425741237782577152,
    "username": "MakvXThwoRKPceuBpyHOpMotDq1Tu2Jhd3MbW3HlVrb7GFI6dpUDcj7PJ8JdasuovhzslgOgIZnoF5vTupwHIDwsMfFWHaldsUGNav3TvqhawN31dAIVdeoZu3WcehqGc6tnBwg6XyhtlkuyUdu8rS8WW58anyRzFlWhScnPKEj6ZOEU182s0bpXgx7D6ZdMk93cmr176le59S0a13D2e2ZvA79H6muqwxCTYE150fb97bk9eXbt0aY",
    "firstName": "h7iouMO0krTj6Vo6aAghLAr0xCtyNs95Ast4fi4zKYTRTiY4SemDONEmp8VcA4haxLeM3jmOifFcxDhqRD3GqI3QQY2r2kBz5Qm9aIXtYDGwgXW8A0O1JRRzPU0SeCsktOuExs8w5O2mMZunZjoIafi0ajTpWlKqae4HHddM2g8OfDbfWAY7Qh70A0pwm9Wwo1d5frShH05XEhcARbHHsPH3P7zcgwIEyWKNnC45Ca2",
    "lastName": "sfRjrz1ToIWePw",
    "email": "638LC4vps7uxKFA17QSqhrrbQa840Eu6ICSkHnJaueIeTjf098rrATCq3Lu4pZb8C3skqcuU",
    "password": "c9kvplFyN68GJzKu4OU3Z2",
    "phone": "3v0tHuo8HxtcXPRvCYDjHd3ciS6lS91VE2omwMvdkYqhOiNqgrJYENaWFhixqks5mRrTEX7YWxgKP3a6uU49Hf6mwoUXIm25duYSr5QnD77tbizGdEQUTWhpkbm3xp8LT7DlduJQCRjO9SumwkhqhyPBJcEhCN3vVHR8cAYOriCBa7YHsf7JOXlya0PM",
    "userStatus": -1241513595
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
Content-Length: 856
[
    {
        "id": 1879333841684922368,
        "username": "4neuwrELQRmcb6E1Lc9fWtQroLH60In55BAB3enU6K6iQLjBXsRUVHljt3qtLNzRp9ttnQntAuMrf53dyU7uCtN5xezj18aqhEUEvh86LUx10Aeyvm37",
        "firstName": "Rdo5MH6USxbwrQ1JZ8uUFwVgKuM7xTYo7mtT3ANV7ZszQuiQCNKhjFy49kcHea5lwzeA92wh2YQSs9I5Xtng9Vligx0vI5QfE5PO8l5ajW3M5LR3fejoaFHqdHWVMMbrS0f0llbFhesn0kqfy",
        "lastName": "EJqlaD26zPSKgLLwM7SYMacfxdzYt8J7R9s1Nv",
        "email": "nk08BMT7y1ZwNaJ3HWCGqKqxBz0CnvKLPLTqxNy6OyCCImFqji6J2whD6hguM1fCM93kXBqM92pSo5iInprpWI320kxNmNp8WtsU4SHeV66k",
        "password": "p2zOtZKc3Ncnk0K7qS4TlZXeGc9MiuYHwyw0xgdA3qYoqIwQBAJWzHbfTl2cP0Ulyqm6GzHKZF9poFfZfZWPG85zt7Li8FEH60NNAuxzaGZymfyBfvrVDwv6DgpMW3t34gQELoeW4evqu32JztEd09kDqJpnNTqRagwVELRJZmauqdd0HSdH1xlshLQ4EgVOxrKcdCWcY6GpkUp1MDJOa4",
        "phone": "rQ6wvnrkUT476",
        "userStatus": -881356865
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
Content-Length: 1008
[
    {
        "id": 8397382068429914112,
        "username": "ZPXP0wQIxGtomQ0Gs9RHDCLefOuUA2yzRwpS3fAAV4YhVZYo9P5MrR0GFuAfw9PoFegIuRjpVhHQhFfqukdW",
        "firstName": "dDQId6fnVE39UMEM53InLzErO5W8iSkwvbeJhu6c8am2W0P24ypP74hWad4t5pZBAekRIr4QBrTyrIAwgZlo4DkeQpHWOHxpVRhDiluUMnse63Kn36M7J6mzw4vlL2KHU1ldnP7adApjD9HGgtOZzaz6e5r08cH2e2gBSnM5XboBl6iCz6B9hbfwhGwpSes6hII96ve4GDF2JYEj4gsmsH",
        "lastName": "Jnp9gECnVl54sAjwhXckHaY0efsBI9trxTBOxebszhx1SRy9OKuvUsw9IYKq8eSG7uvEIG7iYEkQvS0kCuQxXmGFkr6tFYaM",
        "email": "FqbmxtkcNaIGa2jETQCfxhAYo3DnepPTQ1fouzAiKjYUmhzf8buFt4DR8hfmG4gw5vUA5vTPPRKb9kqivVXZ0BR8S6vzbL6hh0SmwLblCWxMgY5MU2MUED3xKy6VkcdBd5XKQ96t5EgmCl8woUr3yuAi2HenUrY8xWSn5ZRbD7yftGMRB",
        "password": "U9IvsLcG8786fF27387VkK2S0vzNna0hjIMLtZsC6AIlgLtkUAffkh7lNG8aR8sbRfXlepXl0GGhsaBmKQB58JqWqy7hHAtyPqU4QSpRy580fKn0A",
        "phone": "5JIvG83NqKnTjdjeha6G1FM9F2T22u18eJDUSHIis6bMjv0BF7iGM4Qr7JuaewisgWm8D5r6bDSv9T7O0pvMuleB5JLjg3Lw08FDe",
        "userStatus": -2038518445
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
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=KDVTw2IxrekWzzxFjjYznK6nTM07TLxDosxVvgsXuNT4mqJFKIf7tlum7ut0g1EEtczZs1WWOP0bgKQ0s57VrBiy6MzmNd1hpAgRCcOr2OCiztj1yrX02fy927w&password=lx7L7nDJAraCgNVPgeRPGOPI4oS7woWRV3D3rgN1HXDYLzN1OFQuuGcy45FAtCspG5t7lg83eM1ZlP09uRDYxQxBVdcpQ 
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
HTTP 1.1 get http://petstore.swagger.io/v2/users/PwJiD4zM8Ny9MUZN3uEHtby1NueZU5DJBn2fsB2AoBKbvJYzeChHOPJCjYCd3gXEDZU5BWF0xpc39aCoNT6C 
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
HTTP 1.1 put http://petstore.swagger.io/v2/users/Pe2NQfQ6dvJdqPOmuPUU1X4czsZtyBcoQfbGu2MHywVYlJlQzfLBcQNMiNgRptffIrVduIV2fQ1BAmr9BdKO3yAmmRdLkt12VXfqFasV0uwAQYKsbvgf4RBqIPc2jd5ealEQv7LwBh7sgSUrnbHr3iSL74OrhUFsfkiKs3h4lpwChr4FDL7G3Zsb4gClaiOqD6a5asawRH898cOMXVs1UUcYbPkm88MLfXRqq1WiI5rRifDfa 
Content-Type: 
Content-Length: 1098
{
    "id": 1181989718712123392,
    "username": "m5DSgeTZ740BeUzCcsDft6xv26e3NSFaXi2exWdE0egf9PRlivBLC8gEeuH2nnckFezcbNRc17raWiwfN70pgh4vMMx99JuPY329QTlS0N2X6zcTGcjXuosgbZplITaGWcPM5",
    "firstName": "F6ZI35hgZYtjVXIndTmCe4vpLsBBfHNUNMCRRT7RSAaNxSbKMxm0CSqok2ZAJMuxy6oq0wiS6tGEmRo8oL91DzpYBoylb3SK9hbaNt2UWIyizWqYIA0m9qkLPT60WYK6fVg3ojXl2vDCs4BaEBwO1RzQKFRHEBOUx5XWpVhrqV3S0E2Fgztiq39aI0SmCGg9Me6b9oCzkGsklv0B4tTux2",
    "lastName": "f3xCFeSP07WcgkOQEvjZQOZrTtlo0o3grBS7PLXQTT29eR0TmjSc8SE2mZqnotEQ4wYUiVKbPNl3ElW0FPdOIRQ5RhtfK76PE4JW0u8QitUWPRXvGajp1auSrX8c4f1IkLFkgNayh5v7WsCCCW2D6wwyuFKzUMiexYzOLKn3PSaLkMoWJrAPX6nsM71HUkVsivg4fD75viRQ5fMOHmEEt17g99X3tSvLoMQDpYJVgAMmQy",
    "email": "xVOcpQjFZtC3XvzITlzxLxhHNRt9I2kfY9rnZL3ZfF3cbCV4YuCJ1TrPKUZsXjIVtajtWmtb1woc9jh7OTRPNjFyeE1bYJ7rUqVQMo2OVq04Jicyc4nZn2xBHyMFiU7ck326r4UmvVrfdENpIbp5eWHVvuBNoJZIM2Pe7JBCE2RSHFipQHv4Dc09HBW5lWO8ZDm6mXI10AUHfc76TCaxP",
    "password": "GwMDC7zq",
    "phone": "z4BFqzosAYmheypks2vZRFForj1zTsOswq7W0vpAuLSJkh4MkzLbfrAHLBgE356AwexwKW7fI0Y2i3PCCBOR3ozO0Ps4VzEsNbYy76NQ6MTpPI1rjPj",
    "userStatus": 957458265
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
HTTP 1.1 delete http://petstore.swagger.io/v2/users/beIDjEdX6185zgbn6i9ZHYIJq2yKpMDA1mdk0ri7sqc1HooOHyOpww8XyHHXukxvHLQHc8PEz1Ggq547DSxapF7YmPVQatmR 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

