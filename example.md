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
Content-Length: 578
{
    "id": -1578353064841052160,
    "category": {
        "id": 6303223634865422336,
        "name": "dQssQvsyCFxVmA5DU0VGOXAH4qWVPmG2c8v2EXBgD8c0JhDDizk6wVOBlKwa6cdjlIm0GXgk6tlQLYu3xOa4JYF4J"
    },
    "name": "doggie",
    "photoUrls": [
        "fQps9LbwLS"
    ],
    "tags": [
        {
            "id": -1912914417150853120,
            "name": "AvxqgwUk4Ju9stPwd1L3redcpJXhd0uOv2eMz96ETBNl5DRiEDl6Rzihigzvg4jM7yyGIFlBg8WmLOEqs0xkzPBR6bnmfG9mfH3YnozExw0ilEJOEg9d6L5cWszb9IypqBnN0XrxurQQ6zEKQNYXy39vwJGFrf5RRsFR"
        }
    ],
    "status": "6oUyeKEOooFcnCLrMgXvX"
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
Content-Length: 757
{
    "id": -8100139742789632000,
    "category": {
        "id": -7867747995935047680,
        "name": "2Cy7l9uIkEKWROUtNHfLLOY8qrWOtdTvQsDbC7UXLEUDsO7gwm2ib0qBsnqVAkrqM5CpcxmYbgBE5IVC5XUhXlSqIjmjDOKpTmP5Tb35sFKyoFauC5LAqE08XmrAabZ3yP9s0cytSi1gXbKzgw9HaaP7whHHt"
    },
    "name": "doggie",
    "photoUrls": [
        "L2wUvx740Zm1gkd1Tux3bIe1PKjxsNfdQM8ljfpkfMmw6zx0453fNhhD2AbvnqJedRzw7ZQmLdSRNqRRvV7jdoXgZ9LnzuBMmajtaaPVnINa9F2EA9YOxW4w5QTFlvsHFMbPW1LkJyvSdxxOHwCfsHMyxGdSbGARsLGoMsJw1epeMW3utFJWmvuUbINmondQ9UeWnYsodRD0OGuildeIJICVqpiPNvFWqUSNSlc5dP52vAkR"
    ],
    "tags": [
        {
            "id": 8407316332080529408,
            "name": "xhdsICKxqgcnH6gvZBH5PwaR2LbUz"
        }
    ],
    "status": "u61HzJkjgKAt8hAoMz0uEP1PH3ASY9CsgD9Pn"
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
HTTP 1.1 get http://petstore.swagger.io/v2/pets/4312581721385074688 
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
HTTP 1.1 post http://petstore.swagger.io/v2/pets/svalyLo6cTzEcnnZAoXhnuGi6K7wvsiXXsjwdIDqBd5OAsNaRKsee8wlTDRp69n4CHAPpef1rkP1NDcEnETBNpWG3O6aXtezaOpA2FCuZsvN5Irsnl3aL0RPOXZMrdlB2Kc5pOzpg5dlNFOa0RlLScAHaAtBNPdQzpWZdvpuACPohDzivU3o7E5hezS2o6TYvPYJkodV03kiHTBdOEBVjHcyh5BFbuEHjCqE0Ez1HUkpNVCBAexU 
Content-Type: multipart/form-data, boundary=57caca009139a
Content-Length: 252
--57caca009139a
content-disposition: form-data; name="name"

JscP3S1ywIR98v9N5bu0vTNrwp2KXWFGpSwsLx0hfSqooAbuLGuhAhI6HLQEHwl6oRz9pArFtS3RsfleWPvw7eCOZttHZPNoHn
--57caca009139a
content-disposition: form-data; name="status"

6XZLqRPik5Dy1s4xzjaojDS0CHO0
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
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/3532474476266520576 
api_key: byv9yhAq7SKcwjdZoLzIWY1zQ2cyQdX2MtckLMKSFv5cPjbd4KV0IXAyZM7QZ4SMy46jRQcxmhJbAUoFEkGnigVh337380PG5V0WMcu8udj47IKM3q9lG5DJ8LNgLCXQxXNkahsEvMJDvtpyTzUAExkNi743J2UhZIBa04OvQx8l1x
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
Content-Length: 344
{
    "id": 4579900262549815296,
    "petId": 3361181138868502528,
    "quantity": -1121691401,
    "shipDate": "2016-09-03T13:02:56+00:00",
    "status": "xv56gGoMMvGy1wfobakmuJ758BRXXtdvYiCeZ00MwGkxdzVoKgLf0Sl8tc6rFjXDCzSBASn6zIEMiAb2RWiRPD0jP6LvpJ92j1DTT1ZtKEf2fq46nmYd0YxQ4ilu2uxlwaeqceTWT8Y8z3fXqdaqbHhg0CL27inDtC3FQX",
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
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/5ARFE6C5kNwvuNMvpyxxQVakxeZnbC7hdZWR5zWqmsVRfImFgUc7PnrnCrKN3S5gR28XB4nYxjPN1cti6GpW3QjFh4tlWyBNAJLcO8amr09tcCLijafm1y2iDwDz4fnFY8RNh29I2ibeVWxe7MB8lErYa4yekWUi5M5mOe5Qxg5tdCIlpjtLXUJ8ZinjehCj3IFSWKJu1OXfrGAQZ3BXYl5YDshSKUbOCRGzCp3Ee1UFHuvHy7 
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
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/xtKv6dNZXHbMj2sTFSXk6YeLGJhoho3OSO 
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
Content-Length: 926
{
    "id": -2093719840094158848,
    "username": "ws5BscT4wO4HOkFzPCFUsTFCss4NPdmmFrX8ERdaFhRuCx3raJlCC1e4ujRkweGcGElkvzvaQnFtUIU4sgG4iV9Me16LfNXWrjhWSM7J9Mc4v79XnQ1FLbs0czLsmJpO3GKVsRFCERH9YQ6lH81sjutw3fYqYne24ZXwQC9vuQEsGKOoSPQckkInzHOy53A92yGTaPoEF27mNVKFLBS5VAtvii3nlDwnbdhm2F1II9",
    "firstName": "v4PbQq3VmDpSWHVj2zQqL3H85m9N4iSAnHLd8O8vsxnofjIhTyHECoMILWvQeoqC6cPf0YKtw8SLsA2l9K0L9MtVJZLYocAuoqJpouTUCLG4mJqvtqgDdKyWJjV7wvCUVlkkPdesZVxlEXQ8o7LCSjyCCuK9Z",
    "lastName": "3VIofxCu0BpxW3vNbT",
    "email": "WvNg4pTy92yv6tduIL6cLHBjEFOsQInNdb3iAWRKYpg5Stz",
    "password": "fGO1oql259vWSSK64NoEKfoJFEOy8o9o4YqsoLvtV0qNTaTXYiCJy1sdGhMPFWdJUEcipHMlIc9Bn2zmlb",
    "phone": "Tdy7TQUIvQWfKAs20aPlS2uupx3MSfRMsqUmgO4ME02pBusBEhWxjr1JY5vRlnENOza5oeR3fUsQpUs4boBvQCfPILH39lRXV12jgUmvOPmdJOhVdTr4wGTesAhBW8yRaBbqvyWkniy67Q2lJtpfaiuCTLdQUMH4nTvTrrdPKMWRCYclsCBCU5fORsELfmQCflwHMKwwwto8rBuUd",
    "userStatus": -230399464
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
Content-Length: 873
[
    {
        "id": -2068556099153297408,
        "username": "Xt3sB4NbShd8rZwQIdS0qQ7kirEtLMnJfrbQwZ2ogfxHf3xXhpYHg51zwG2isq1HRcyobAMsQj95nG3E61mn6oWD4ZVxqWei9NGlotNeMWkaDnPKob7vz38D33at0pLadsvBVjPHgaSTxHDWSKrsO",
        "firstName": "6SDglEG7PUzkvuElcUv4O2LsZEcq610cTEtfi9m74Wszq7VC1qHPtshs6uTcwTpqySGQ23Y6ZrGqyB3A2KqvdIYkdSwKMWakOQbQUaWTBCjaemKg7bMkTKE6CbQp71JVSULM4IGGlZQzmBPtMBOGmsMZEDoLF7Hx2tk6b0Nw0D6nfVQ2xFIT7vS",
        "lastName": "9gxOoemqIGxTHkqHYw4dsVgZAYSItLuC22qrgNRZtpSaKjSJQWXiSdisbabFWFhYHIpYvhXZHQar92bZZ8iRlAkwLvbHbtGTc6RHoPH5FRxPTIPTQ7LbI5ItBUbMnRGzXxhmnYr2QZSKIH",
        "email": "yPoKyut15ndSK4yk26BotAQwqPoax6O6WcRuHkwMHJFsOeMRkofOZ6kpWJAtQpANCrijLP6tzLVnZIfk6v8",
        "password": "Bsvxc613vBQ738qPXxiwidUiV9C2EK7fdDNqJOtfqjmtsNipkAWDORV",
        "phone": "0xMFiUUvxIWhwpwXITqbHJB1kxF8oASp8F4rzZ",
        "userStatus": 1338158781
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
Content-Length: 871
[
    {
        "id": 57401593665945600,
        "username": "5PMT4Gr1aFHWOF8Ks3RyvsGa4uE6BGPGwBzAi0BsGjpvYxfrB7Z6zFhEaVKLCzs8b1Jt2lWIEleCSt4uA3AaJSOTOyFq88zj9iMcDIUi38VWCZrd22nMUcGILl9TtIcD1ZPFHKXLTSI",
        "firstName": "S9JUb7G6jmO4IXXcGaQH9GnRqkDkdlQ5vz0HHHN04B5Nz3ZfdQXnwkeXEShSd8XJHXqoFdpJPuwoy",
        "lastName": "ELmB8TVnQzf8stgpcXnDm2RMMGhi5POJAbkJ4g7UPn3iQjH3h5HD8ypUfGclw146cpQhFYcvlfNbyvfPAWtIvTCKAP56Qad3A4kf2wLnMyzk3OaELDmgwZ17O7dFiqJSu",
        "email": "8xATUmstHwiRa4uxk1xm8mum1NNKGiOOPpIJMadtHvkSzPqURXh0jMmlA95grU4hjN05YeyFKTykJYfAVwAfjXAT7F9zAeQT2RY05xGPreaacpL8WmnfkX9rDi0dxQ7zH6ANDgD5uNgHc1P8ocoIax9NQa1n08XIexvSN9YiWeZ9gOiE1GnbexZ4H0sH9qqnXWgL5e32s3bJSuo",
        "password": "aL5pi4uZ5WHen7Cl3S697abAdmj6QH01t5rLaVLfStufA7AEZHN7RYH5l1bcJbechFYsAJItccINjjsj0grSf8YBa9NTl25DH",
        "phone": "5iN",
        "userStatus": 760534150
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
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=0uOjOhDOx4HNdFonPcgaemOWqTedH0eHv21jjF7RKOEXt2lieCtsYiopcDCTDQB8TCsciz32oH0SKlbYXFrWXQl9uY38PEhJhJVziZ&password=HHCzsXLqVqSSnJdxdcAl2fCLwlH6EGJlolVQiHhe7a6vTk27xDszS5kpq1w5Ifr7AnYT4f7bqeGkzJr6mTFeYZDp19uKoVRZiPSm50yveeQOXhUjazy9zbzBl3lKZcJi1CE7CdDRrtFpKzJV9h5JtEkPHFzHRiZTUE0xRDoi74IREsMNKRwewQ3ewDVoVUhQyioqWNI3RrVwUHjEzQS6HWkezfCvaTlJcK99xScpk7Ve 
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
HTTP 1.1 get http://petstore.swagger.io/v2/users/fSp6LvNHP1g5DMgx8ZKS9Tq16PldKA30tt6eYUWOWdUzZa77aS0jLqlRfH50h90KC7ZB1VpX9jx8uFgExgXjHibWZgXhqY1250D7W356nDfRivwQMt9tMlqMCn32l45r5Jz2ME8ahn2ATyqF2 
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
HTTP 1.1 put http://petstore.swagger.io/v2/users/9OWzAyXDAjIGLOpkQcYYmgmpQfXhVZ 
Content-Type: 
Content-Length: 822
{
    "id": 8653339334470008832,
    "username": "uHn40sJVoTqybWqZKRU14NUkNQye6fABWXGXqpSPjjnufOuZFp1JcV40MCeTSOuOLbLcA",
    "firstName": "1UXppddTdSjeCw9HwVkLOczj0luMx5qy0nXpBaiO3C2F8cmE8GpXSZgTlLFSR5rRtph4zASDcVik7FZfmpcf",
    "lastName": "t8JfOC7U3Zosgs2QlF2gYmoDmD0LQfakoTzcwG7zFv2VY5MjKOAJbYmxCmjsCtN0nmdT3ktJQwFOBr7mgH5rGsZiPiLrMys9VF3Z0xIR3oFFQN16u7ybzxtpQe",
    "email": "DNiNIYQHZoqQrOv6Ei8LNfjZPRseIH5muo9dn0UmoldP9JWO25APkUOaLhouYtQtSZGfZBBnWOd6xaVzfvpApeKbw9GuDw",
    "password": "vwFKwglUda7kIifixLI7bWSnt13XEAW96BTCSfw5qEq8WGrtr9BD6t1zu5x9FtiL5coXrV3Szt1w9s0BCBfI5giAlPJ1j1NpebmF7qxGTzd31dEDPUmVaEvwuexOglduwzaD0IkThyXjLCXBwjwHY1esgMgx7t2E3ci3VDXdbVwWxtx4N4LL60dmMuUUYWy28Q54t3hFYNBwh9A4emPkm3G9yA3wwByFsEKWI1BGPdc6nNbB90Vv4CECdI9KjI",
    "phone": "MmaI4ckL1yY8VLjwVksqp",
    "userStatus": 1328776869
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
HTTP 1.1 delete http://petstore.swagger.io/v2/users/h 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

