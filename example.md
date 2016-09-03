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

##### Request
* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//pets/post/parameters/0](#testtoto) |  |  | Pet object that needs to be added to the store

* Example of request :
    ```
HTTP 1.1 post http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 957
{
    "id": 5353842893863780352,
    "category": {
        "id": -2631133820643966976,
        "name": "DUubpQvjKHouvqj6L2279EDWF86zbwmPqQ1QHxaseyWKYgRKjTRtxvpdEwMQ28FtZHkGeu8s25d1m4LGYD9w9yJN4vD7EiBD0VjeqsHsyUuVZfBXTKu2jdPnJsvnL60L2kZsNGVmBphAFSx"
    },
    "name": "doggie",
    "photoUrls": [
        "D2AWfpjYSPmDVnoYHoru5mRGM8gs1O1EQCA61U5UJrxFOWDwk41prS5e0mH2aIG1kg7macgUENzsJcY4g0tISzWTVDV6mB8GSf23sjX77wzQJyVZyoIrYEkTif0ER8lJooMRHKYOgyFZ7AZFZI7XnrRFHSkz0Gip45gMPfB6Ng6UR6AROHPb9HRRzcqASJZXOgJEvkLiBRdtYNkMvaYERQwq2W1VF1SuhB9NWU6xL"
    ],
    "tags": [
        {
            "id": 7409592938138697728,
            "name": "7lwCwvgnlNOoJPkpQcU8O3VKX2iJljstFZ5bumzQ9nfSdzi3MccAg8ldaDWwXpZCp4OUqnKzK0sYzL1lYeWemhsw"
        }
    ],
    "status": "p2SP2ve6j8xHT7sTAqsmrOkGKz221yXqBQfEluKFCimvpOp0eRmGGGmqgpshYqIAgYeCtZh5hEBHt0HIS3pyKMZ0bsi9T1J90XMtW4zeIaVbbDU3GjCr5Csg4LqYMa7N7Ug4YPjG0eSbSMfy6S0butszeSx12FOaz5fxUyeVN76FUle0efbIIEhXwPZzuNJ3TZBOyPJl"
}
    ```



#### put /pets

##### Request
* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//pets/put/parameters/0](#testtoto) |  |  | Pet object that needs to be added to the store

* Example of request :
    ```
HTTP 1.1 put http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 1052
{
    "id": 9115673300956086272,
    "category": {
        "id": 7714433464652529664,
        "name": "IbVyJPT2jVrWBmURTa74bI9fzIyvpJP7VLGEBAHUv8Q7uLZoV6s6OBmojUTJDJRyvxd68U0E2RLxCKVxQoEF003kVX3zHV7ctliBfjfib1QNLLlCa0ha0luWiyvZtDbXYuyeNOxYPnMA98dj8uu9PY58xA71djYcNxqBlXzalm"
    },
    "name": "doggie",
    "photoUrls": [
        "uuYNDthMjgRrOszPGSOSFljhHhRRCdC6IBUl4c7otZPiro78gW1WileZC5Qfitm15hm9tuxXtnfVMn43k50CqeB3jsiCVED0VZaptInX6DSS0WVk2VXs9yvs0O4VtHWpH7OaQc8WP1OQYJa0E7tOGZhGNlCg3zFKGuVwG4sw5hm30x3FFxulwL2k6EBaehVULRrsVUZ0bl3cS7SyEmTb7VveA6oPnkJ9bbC76B7iWbuPjnnYJh9"
    ],
    "tags": [
        {
            "id": -5929446362104987648,
            "name": "5OLuD8Oni0yU7EvfWsqrhKOFIyWRp9wuXhYAqNXIOwCVb7a8zBARlow4XsVmCsQAJPb9D9SrFumRCx0c9A3vZAzW2viFX8fGYqQBAJ3fdp7QX727H6CGGbCJGVoD4Ek24bEEUHU872Y590cR7OxN0awH6UlayGdDRRiMzdUGfTMpUYg1NOONZku5fQfNwsrnkJaTX4AcXmBSlST8GHWF2rKhh04NtwaNglGdphqnD2fYU8"
        }
    ],
    "status": "AQ3fSu09L1eyuLJh14YeugESTG7SAgZb73rZxs9itoRX9BfaFep9u31oK9hlqgxxjYxRqHaT51ReC7pilOsQSueCDvY4MvC6u9XUQ7OW9GbL"
}
    ```




#### get /pets/findByStatus
Multiple status values can be provided with comma seperated strings
##### Request
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
##### Request
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
##### Request
* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | petId | path | integer, formatted as : int64 |  no |  |  |  |  |  |  | ID of pet that needs to be fetched

* Example of request :
    ```
HTTP 1.1 get http://petstore.swagger.io/v2/pets/6853597696410779648 
    ```



#### post /pets/{petId}

##### Request
* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | petId | path | string |  no |  |  |  |  |  |  | ID of pet that needs to be updated
    | name | formData | string |  no |  |  |  |  |  |  | Updated name of the pet
    | status | formData | string |  no |  |  |  |  |  |  | Updated status of the pet

* Example of request :
    ```
HTTP 1.1 post http://petstore.swagger.io/v2/pets/wuax 
Content-Type: multipart/form-data, boundary=57cabde19b796
Content-Length: 8
--57cabde19b796
content-disposition: form-data; name="name"

LaM0MOtsQ
--57cabde19b796
content-disposition: form-data; name="status"

zEw0VpBT1WreNKWShr3OCPZpPLdje3uNI1ODqqxsmYGaJD3056PHWO7LAk4OozC7AqL1Qitdhan0Nq0SxPAtEHfe2k2qTEyu5jvWBZ9T9wTWXUPvJpYo7eC9zEAtj8Xpstl3suXB1QyYKntuNsSUHu4g9EJtNHSfadjDIgeJ7MIRacmXFeRmJVDTAnno4gDfuXSce7WlTFc4Rz1wOTTyPw
    ```



#### delete /pets/{petId}

##### Request
* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | api_key | header | string |  no |  |  |  |  |  |  | 
    | petId | path | integer, formatted as : int64 |  no |  |  |  |  |  |  | Pet id to delete

* Example of request :
    ```
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/-8166081324872892416 
api_key: pUPNY5rezp7MDeIY8nbcfKeLy7F6Wcyl6n95sBj20rODGxCPUN1axgW5nBcjNKFT7PZAqiCrKr
    ```




### Resource : stores
#### post /stores/order

##### Request
* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//stores/order/post/parameters/0](#testtoto) |  |  | order placed for purchasing the pet

* Example of request :
    ```
HTTP 1.1 post http://petstore.swagger.io/v2/stores/order 
Content-Type: 
Content-Length: 388
{
    "id": -8991811821438500864,
    "petId": 8598046561156464640,
    "quantity": -1587760842,
    "shipDate": "2016-09-03T12:11:13+00:00",
    "status": "IJHk355XRsduvdUXd1iwTyEvRwtwnaB6TjqXowVgY8KulFszGL6AkL6bizHFJjMDCcB1IwhHF2b1HDAooHYIs5UKECpoVb2yoDz7aQOQSZRzDsX29WLC2FmGhM5dY8LmMkuXbiN3iFDV7BYhyJTApghH2nU0vGni0Rfba3fsIToQvn8472EwiWdkj8lPOJ7PAn1Lqhd8aCZGZ7K7a",
    "complete": 0
}
    ```




#### get /stores/order/{orderId}
For valid response try integer IDs with value <= 5 or > 10. Other values will generated exceptions
##### Request
* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | orderId | path | string |  no |  |  |  |  |  |  | ID of pet that needs to be fetched

* Example of request :
    ```
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/slRNF08vORCEs0FdqWrz74zN4HybRXPj 
    ```



#### delete /stores/order/{orderId}
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors
##### Request
* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | orderId | path | string |  no |  |  |  |  |  |  | ID of the order that needs to be deleted

* Example of request :
    ```
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/G6YGftv669z6OMxLe7SiGGnneyebnxv4EtKTXg04pzbemJ0BQSTwzgTNP7ZdFuhjY1dWid1HNcWaVWLLPFioWbcLjbYYGfiFhwBzJChxPeHLbsx07Pp31BPkNOju3C9l8LVRncpdr6YCzwCHl2LmDBHrp0VtC4OKPJCdW1rn8qZIWCqhEcEiNlJcmEFYJtJydmM9ndxwDwfz9FRORw6FSQRevwde 
    ```




### Resource : users
#### post /users
This can only be done by the logged in user.
##### Request
* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//users/post/parameters/0](#testtoto) |  |  | Created user object

* Example of request :
    ```
HTTP 1.1 post http://petstore.swagger.io/v2/users 
Content-Type: 
Content-Length: 987
{
    "id": 5788281636172857344,
    "username": "vay9jZtiiE3JPjtGyRaMkPUFZpbwZjAuu9EN875qL9aBsDi0vsNQhIvh7GN7ZnCtwggFom5avfMYT4ZowNeOvK5DqTKqhmUODbt2xzd3P",
    "firstName": "2I317AOmok6uXxnIXE5RsJ2WLAvYDkYF32HaCwx1QDwOaTw8yB",
    "lastName": "1l2X6Ct5gN3VR6D1I9yK0cgPnalvIXvJiyHpaauqYymPEZQn9p7aCoZZylvgj10CzH2KSwaQ5xFKww7GWfRyERycc4tw5t8Fbap4HAUN7AxE7Fk3VcCz3bLggfMmIV1U6rYO1TB8u9MBP7FLkiknu6DKl",
    "email": "64l7ZryYgARSIm2vYRDECXWXlq4YapohuKotcXrsxjkgGmMEepiRnfPJFTHQi67NRwg3uIv21QiId4mruEjST8Bz1jqkqy7h4okz6QB8HTQUYdmtRFlLOXlPgMa",
    "password": "khYpGiYM9zVQtMLsZ8VROhDCeYsvKCc5UauAtsnD2iuw4fY4nTVbbyOqxgVhS8nMjRnNkKqm2US79RbxK7JWFxmdNiuGqRtJJQw3BXqERjL1aXzV5iRKPdXDvskWkNF4Ec7faxT1QE30CCWHVNsL0qowTIsdw8hakppvXixNXAOAdKh9yKUyaj531xhyFyI0Y7vVq2JnDyXRif0RZUp9dudf2uOH3wH1EdW4gFsTdqLwGLnF",
    "phone": "NPUi2alwY2AvKB9XyeeeH8s8TZOFntmajgtlrOSpRtVC45ADkOR1Wj9PiYvFsRQL7k7z90Z0tUCyZdbj12lXmvNEtikV9aGhuOQEOPEiJhQJu12w4ntqSg4lyohIzYZ4MPIBFnToF",
    "userStatus": -1771196193
}
    ```




#### post /users/createWithArray

##### Request
* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | array |  no |  |  |  | [#/paths//users/createWithArray/post/parameters/0/schema](#testtoto) |  |  | List of user object

* Example of request :
    ```
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithArray 
Content-Type: 
Content-Length: 1078
[
    {
        "id": -7639381810257854464,
        "username": "wRE67yH2qiHnZm7B6xE4lnYHCrNXMWpiO4oWD6Y3oGqn2yZ95Edr2c8FEWDqS2JH77DKeBODhf1kN0uSFIkIUtnyp0Zi3IZaPCV4eKHvZIQMIkFo206XtuwSvvbzdaK3MG70qPwpxmcgHSEJSLHlgdeLIplWz50mL8nbXTBugNKXGpHy",
        "firstName": "pTrC7dkxyh6DhtoqQAnKcR1ZCZF1Hec67EIfR3MpkT3Cms2d2pYehZeUZUWG89MgNuwEyi4Sc7vyAxMDXLSfK69J16qafcr2HXHfgL8sTE1tbN69zZpj6z37FtiUGKWoHDDXpMqiqrMCfTMOSb8YKc6qGpkm9hKRVo",
        "lastName": "kbfDBGqeWk0LdbTbW5imLHG8RYSIThxesNS3ujiqDibQt52qalMW3t4UsXDmeaAHXtLrM3Sql4gP9jfkE2gHwlBYiekxpVeno0Pb3HBpLSeUcufQwvx2R90aolHOgWbFW0Q0IsptlDox8DoE",
        "email": "WH05Iau3SikPuZMuQMdibHEP5bXJACTwkUB3467XorMTqyoglBzxidmopk8",
        "password": "X1viV7l0etYCUKwljUCFvbcOpzcPUlPRmlaiswjGZhjU2PgmJS1f4d3tNgjHB8zXtJgWgADfSXaUNqhxiiMmwQQj6a1HiAFMkVJAwnQok0i7rAFKSr7piYJo8K5rlKdFGXgck6AF7TMzusjmUqMcovAwgGYBrbh79xktEV8MPVljoFGi5suuY50eLYQca8kkFEOkzW7pStIg",
        "phone": "ozdR3HP9I4UHV7S3rcJ603GXb5QEO7McG04KITTrYO8TV1WndFteJ9bUf2y39lgQlkA3duubjD5fE1CSG66pgikvlTyuePlA9WEnq9zKMEZrF",
        "userStatus": -1854439227
    }
]
    ```




#### post /users/createWithList

##### Request
* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | array |  no |  |  |  | [#/paths//users/createWithList/post/parameters/0/schema](#testtoto) |  |  | List of user object

* Example of request :
    ```
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithList 
Content-Type: 
Content-Length: 1146
[
    {
        "id": 8475829993983705088,
        "username": "rn09motY3uTS1QcVxIVb8aAY4o47SF3j24tpsWnvqhos8AoFjjRstrqyQuGJaK2cOwBgsZMThalpLK453VxxnY5dtLWDvZPkvr",
        "firstName": "YqnSHye6kYbq17XyuWEIpqF2WFSgbj",
        "lastName": "9Kf2rOgy9fJzgQxPktt3SUIVQnN7y7YIReLj31RcgALxrimMMQPELyABWnIvvHdmWYFZ0xbh8XOzgbl22bHNJhoGF7baOpwKocKoJVGRTuraGMdIYUwIcUoR2z2RYzCmMmLvirnbWOmCBzlAuRiGMGyOgBGfaiBWEnsWOP8LEuog4JQyB9fnPNc6pTlzbXwPkZM9OU",
        "email": "tpiKt2A1DJg1z4eFt713iYA8jzUsoPnReGBHIcImWZov4CbxKcB2bbbuK5W8Uk080CQJOz5KytgD5raPEMSQX3kI9hR4BRdCu3liCq3bTkOZMZPqLIgJMBrWSj0uad6EgrXTS14MlSM7SByDkOn7qP3i83NjgTYxlVqdXvZioLpgnXUIMhPc7SvfWjzddxKytbMqGLI5",
        "password": "8lV5gDSys5FlBVhVuv81fGurtV8fDdMLzIRPlKnOQ39rYrmtWvuccZDFUMUyZHkypcoKWMzMPJeObBh77MkjMYYHKSfJzziZMGJIsjvi2K6dmnltaFMWELDoDS8dsrde8XXAgtTieZvAnR4xwQuaC7zf0Htt9HIhEGRU9LcnKIY8z2G6TbhviQLjyfNHWvYAbQukCHInqGv0Jc7Cno7GfT0O8Nv4iuFtlaOXSxkj",
        "phone": "QjX3rAqPI75B7TJUpOcUuGfEvdw2yPho9erAPSqxZv97pT1OIeIcVYQqbntJcK8mZAWOsnmsSvzhpB67POjKM9bYxEHKpQ6oq3dTqAmj6WBvxHCnwV8i5jhDYZnnPtMfx09YAvhHrScYAPm6LupQOGuNFRbvlYLSYUQzp",
        "userStatus": -1403924077
    }
]
    ```




#### get /users/login

##### Request
* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | username | query | string |  no |  |  |  |  |  |  | The user name for login
    | password | query | string |  no |  |  |  |  |  |  | The password for login in clear text

* Example of request :
    ```
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=0tPBicH3G6UvNojtguYBsJurDl02thTuKJ53VN6CU18password=praGV8hoRMPv7QyB7r6SbbV6Z2JT3RAtiL9 
    ```




#### get /users/logout


* Example of request :
    ```
HTTP 1.1 get http://petstore.swagger.io/v2/users/logout 
    ```




#### get /users/{username}

##### Request
* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | username | path | string |  no |  |  |  |  |  |  | The name that needs to be fetched. Use user1 for testing.

* Example of request :
    ```
HTTP 1.1 get http://petstore.swagger.io/v2/users/TrDLdtgljOWrg2jrefydhh6k9HNssXHmok7BOoW7cTztWTVa8topLvKVdynFv42 
    ```



#### put /users/{username}
This can only be done by the logged in user.
##### Request
* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | username | path | string |  no |  |  |  |  |  |  | name that need to be deleted
    | body | body | object |  no |  |  |  | [#/paths//users/{username}/put/parameters/1](#testtoto) |  |  | Updated user object

* Example of request :
    ```
HTTP 1.1 put http://petstore.swagger.io/v2/users/p9vdxrlKlUdhO8sWCQmol7jzFHeaMg4cqzpY1LImGWEu56qIXN6jVqSA86LUnQ6OpwMrhvNXssrxySgvGnOBOGcWNYRbOYZduLEMhsJJUbht4xYLUNnIuzFhxwsluszZeeLvHvfBHx5L43xZRUIltnD1U6noyXoNb9jSEyul5z7aDF9vzSQ3gu5aAsz9pXWB6gtLOY7Uxf4bUeGt7xxn1CxB46Lu4I5bYzWNx4H5jMge1XH8ufvvR27W9T 
Content-Type: 
Content-Length: 785
{
    "id": -120771576965627904,
    "username": "lvATW6ztS2Id62Qct392qNjtBg5SD9RZFrSCxs5quODBQuOjxX",
    "firstName": "YLErnUxfyH7xnzqZ7T5xnTaZJEO3cMobx3DUXaawSh4gQufYnkvLdFLXkA0xmoIUslOpwZWog0E7vU5SeBEshqqC0q9nPRhhc6HI5D7mDMu8GA1VbGos7O48fdv45NmiT31YH8llUPuBpwwAdU3kJ8sYmY2rLpKEtLDaUYwON0q",
    "lastName": "wWNJRR4A0wymvBOg0yVtjyEdxa2latyHpmrgdvRd1qAw1oN2WIwghauOlx9w0Idq4EGhayvcY5JZuw2rfyHwJcl4JvAKdOahtRzDp5PnbynF5q6kY",
    "email": "QH0cMKHmuUaEbDvKgVQ6j1EGGJ7N35BUNC6zmOVQI6vTK0E0Wu7fvLVcv3Zz8AuWcAvzprq7xV1hWGiSbp7Hb3TH6SgetKbGlGgK8GRGBTXxzgpKGwrSzlzGePVIA6oWNFGVlyBWrzu1PTL",
    "password": "qdp0yYGMOBupITlvy1qTA1Q2Ak",
    "phone": "qePXF3mFBlmo9YTyGMTblVCfwE6yerCFFrDkuZ06kmuulo31bWdwSPMpuSXJjzoZ11kv1kCmH6Q2vT4GQhdJ7Z8BS5kcFJbGLvcNQO9xV",
    "userStatus": 249298306
}
    ```



#### delete /users/{username}
This can only be done by the logged in user.
##### Request
* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | username | path | string |  no |  |  |  |  |  |  | The name that needs to be deleted

* Example of request :
    ```
HTTP 1.1 delete http://petstore.swagger.io/v2/users/TE7JVkt3jBFbHZnmJz3v5fiV4rt0r3rkHy4CSxGb8lnPlLc4lfzqvRlAjOAKR14yA8bsGREOd1EyNQC86czC4UdnJO7BQcaqlmS1ewPryuZllCusO34SYigH6ojWAtmVQeW4LMvjguFB6a3Vd8Obq4Twsds3HPYx4UBPH69XAOzHYDD 
    ```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

