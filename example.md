# Swagger Petstore

* Version : 1.0.0

: This is a sample server Petstore server.

[Learn about Swagger](http://swagger.io) or join the IRC channel `#swagger` on irc.freenode.net.

For this sample, you can use the api key `special-key` to test the authorization filters


* Terms of service : http://helloreverb.com/terms/

* License : Apache 2.0  http://www.apache.org/licenses/LICENSE-2.0.html 

* Contact apiteam@swagger.io : 





---

> > ### Global Definition
| Attribute | Value |
| :-------: | :---: |
| Schemes | http |
| Hostname | petstore.swagger.io |
| Root Path | /v2 |
| API Base Url | http://petstore.swagger.io/v2 |
| Content-Type Accepted |  |
| Content-Type Return |  |

---

> ## Summary 
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)


---

> ## Resources 
> > ### Resource : pets
> > > #### post /pets

                * Request
                    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//pets/post/parameters/0](#testtoto) |  |  | Pet object that needs to be added to the store

                    * Example of request :
    ```
HTTP 1.1 post http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 636
{
    "id": -8275879741433577472,
    "category": {
        "id": -8877711724547932160,
        "name": "TQ7pL4A1NgYL84ZtQJDMM3nH89oCWcXP35fO9PPX5NIeRIHIrkvenTWw3k9Zx7PAd4pm"
    },
    "name": "doggie",
    "photoUrls": [
        "ekZ23dULUDde8sC2o95Jj4gqTQDXf0RukQwo3r9X4ncdP"
    ],
    "tags": [
        {
            "id": 6003340724676853760,
            "name": "ZlXipeIj4mhkm8OHZl52Nf0SCd5s2lH1GFj6T2qYoHiLQ6tPsyRfOS7q5dT8zB9fgtm9wM7UuqGkx99ZI1fwUnXZBQ7arhqILMShz0c3qSoX1yXKzd"
        }
    ],
    "status": "uBdtc4BmvTNdEz5V967cwZAu18rMIF2dgfGtjiQPbD3Qd9LmfTzLSagUjIH1nJeEZV7ieX8qAbgNl1aAUJmNUCIdkpfI9tm8purErz41LkP7m0HhK45"
}
    ```



> > > #### put /pets

                * Request
                    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//pets/put/parameters/0](#testtoto) |  |  | Pet object that needs to be added to the store

                    * Example of request :
    ```
HTTP 1.1 put http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 668
{
    "id": 5245627851356504064,
    "category": {
        "id": -2151266663784251392,
        "name": "yMXU88kOCH2kS3t5p6c7chCC8"
    },
    "name": "doggie",
    "photoUrls": [
        "sZQDtopqjyzEnblpwesZjS6wZjOCVWroWi1pHrQ00pEnB0M8ef8y8f47ySKtPcSLuUbbl1clrRJ3Rvc6LkFTzJ18CMCsYuesppELrQ7TIQXzm9G7ul1453cIPPaNkpgJOUugLBatr73OhJWM5XQb13TQS4EctUWiOqyA2I3uQ6i7QeTWcK7dO14H5IUyCQQrhp2j"
    ],
    "tags": [
        {
            "id": 2012752568328912896,
            "name": "Yc763l0ZyL7Mz8RgezaMc1DEi2GCaMq9Zxf2Tg2s1afAj6RxG2kT3Xym0fZb1qk0YA3SQ5lRfAsyHk6omqhqoQNo5MA7"
        }
    ],
    "status": "V7bvb3mgpewZG5G0b5nBnN0dBoinZqBUyMpJQMZf0wfHBWIM15ooToBuNUSMlt"
}
    ```




> > > #### get /pets/findByStatus
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




> > > #### get /pets/findByTags
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




> > > #### get /pets/{petId}
Returns a pet when ID < 10.  ID > 10 or nonintegers will simulate API error conditions
                * Request
                    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | petId | path | integer, formatted as : int64 |  no |  |  |  |  |  |  | ID of pet that needs to be fetched

                    * Example of request :
    ```
HTTP 1.1 get http://petstore.swagger.io/v2/pets/8762936368604119040 
    ```



> > > #### post /pets/{petId}

                * Request
                    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | petId | path | string |  no |  |  |  |  |  |  | ID of pet that needs to be updated
    | name | formData | string |  no |  |  |  |  |  |  | Updated name of the pet
    | status | formData | string |  no |  |  |  |  |  |  | Updated status of the pet

                    * Example of request :
    ```
HTTP 1.1 post http://petstore.swagger.io/v2/pets/XzjLmYzLRy54HFwQ5hhnRdcqrjHG 
Content-Type: multipart/form-data, boundary=57cac1b5e1539
Content-Length: 8
--57cac1b5e1539
content-disposition: form-data; name="name"

seV1xGnwf9nOfsvVYm1gDo8QAyhUgYSIcNKKu8gKhEyx64s5qtl4RtVs2dmibe1n2M8wUpgc4PJbUcglFBpx5lZ7ympJAr7Ddg97FqkJg3UafbvVMVsRgsZPOoypQG23WcbCCvmTzg3PrzKevd6MF5BtuaTkQVnN7zpK4LDD2HtuheJNrPz7VbBqluKcp8ZxHpiMbWqeETIV7sIyiiGethEOLp1by1Jfq12CXsQBlzxt2g2kyIy2ZcRLCSWaTF
--57cac1b5e1539
content-disposition: form-data; name="status"

kGsXEUOggoNJq3LKCtjEtwve8obihQICxazc4nslLg4bkQWWjfBNM72UwdcO4UqC50Oanhv9
    ```



> > > #### delete /pets/{petId}

                * Request
                    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | api_key | header | string |  no |  |  |  |  |  |  | 
    | petId | path | integer, formatted as : int64 |  no |  |  |  |  |  |  | Pet id to delete

                    * Example of request :
    ```
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/852581992150073344 
api_key: zlSqiPJyrxkyze4MqSRljtrjiBHA6Q8Gc06uQQ2hnmPXBUK2NBn64Pqnq7XwY5db6kGWaIey53wHYgJMR7SWWjjmrhTqn6BurhqC0Fa6IGNHXxtOEmKAF4X7mQxJX9dorE
    ```




> > ### Resource : stores
> > > #### post /stores/order

                * Request
                    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//stores/order/post/parameters/0](#testtoto) |  |  | order placed for purchasing the pet

                    * Example of request :
    ```
HTTP 1.1 post http://petstore.swagger.io/v2/stores/order 
Content-Type: 
Content-Length: 276
{
    "id": 4770483101233053696,
    "petId": -4845967121395482624,
    "quantity": 895047485,
    "shipDate": "2016-09-03T12:27:33+00:00",
    "status": "r2SOuK6fjlD2mWGRDIxg7VtQi4YVl3SN6LBAvIQP4tRqqyh3gPjoKNe3RdZdhR0nDCX9kOYoiQPIp7LFW54HSiKKwKXNCYafB8o",
    "complete": 0
}
    ```




> > > #### get /stores/order/{orderId}
For valid response try integer IDs with value <= 5 or > 10. Other values will generated exceptions
                * Request
                    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | orderId | path | string |  no |  |  |  |  |  |  | ID of pet that needs to be fetched

                    * Example of request :
    ```
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/nked9XDhIjdOnUHGFrcppZ2oahZiGVf3guhqrUHaeUYBOFht 
    ```



> > > #### delete /stores/order/{orderId}
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors
                * Request
                    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | orderId | path | string |  no |  |  |  |  |  |  | ID of the order that needs to be deleted

                    * Example of request :
    ```
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/uTxtVVEdUWUQcY6Gfw8adjo7i0WYhq5LjCffxTssQni3loKBVSM8baftb 
    ```




> > ### Resource : users
> > > #### post /users
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
Content-Length: 751
{
    "id": 896012422274351104,
    "username": "dcy5PQ86otvoGGwz2uZjKGh3EQ3lOxF1Kd7z4fFsJbRqRn0TS0dCGuFklJGahmc1AjA",
    "firstName": "zg7jrYJjmKdeKrRqWxLhgssxPEypY94ypbRRaBawloL5PCwLai3qLvYAax08G4G5gyXr97YvwJBlm76wqaXb",
    "lastName": "VLPtMY9RFf8dcznkxSQhtbEBib1s8c84YXxKWGBBWJP8jcsR4i8yuM9MXbe6nmamkI7hpJTltItMUWDZeMxIzHuwSJDg6ODrwKIWtBhXkLJfHneW9MEIt9fmTTC0Hfre0aatMsq6",
    "email": "alUyAQHmvqQFGcyzPyh40w4bGyY8Z5largI17qoDRfiyrR8gpplqVqCCZAKYF686nR7uiw89LqHdhPtHfP7agKMfkxdZEm51edwwKEFv5mImcc3r2",
    "password": "CiVpxgWLfB7lCmz9SjOxPTUxf7KjyMvb4rABHxmX8ujLQTUJcJg1CbzSjjcR5I2a9DMRa9OiE83v1YeeHvfkHPd09qSf8Vphyc8IlX0Z54u73JlL",
    "phone": "B5VqjVzJNORIe9gqhZLf0Ll4gs8ZOTdpZ9Pi4p2SdTBs2RSkQEARpWVFp3FdXTC",
    "userStatus": 874809758
}
    ```




> > > #### post /users/createWithArray

                * Request
                    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | array |  no |  |  |  | [#/paths//users/createWithArray/post/parameters/0/schema](#testtoto) |  |  | List of user object

                    * Example of request :
    ```
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithArray 
Content-Type: 
Content-Length: 916
[
    {
        "id": 6277957269975990272,
        "username": "Mz9U6gtJDRTYNhHl7jyL86evv2I3g7P3GYYNfsxTjrS7IzsQT1C18QxDSfH9nxd4vcRLEpEYQw6y5yoZA10IRymKN4UbB7f7j6SYvxXm43VaCj9ckaVcIiWwmQHYYW5i3YgzveVzhQKUaT7v33IMlEiIv0HtWML0K2AggwQymAsxtA3xDLkYqCHVCopzbbAVe",
        "firstName": "bvG143CxB57EDKqXIQAqMdPcN0onVDy78f9cjLJURQzvAZsjQ3KDgzQ3zervR0C0fLdzxWtoN2To2mITpsxF2nJBCb6ubJurvI02EtqswkQzGzt520L4nuG0FMuRwZi1Hj3mNuOjPFTvemBgnmlKR1LxOfpkfImW1qjOU78JN1f2oQjLdEw5GhDux2PMKcJLC2AxaIhYKw08nkUBYqHFI",
        "lastName": "agm027cMTOPtm0bDYVaZ4yjY9ipQY8b8ox8rFkdy931v3c928j2cSmb1EBSCJ3L8BTz",
        "email": "eNOoQQUT23WbnYnfkzhZaaCUen2PhC6wpVUfLO9OR5Zf4nupWMo7W11ap40GG6c527lNVuBNAB2EYx3Vjs2gt4rS8rzPyMVATgnPKZClAEZzb3uvvwLZ",
        "password": "cSJEszceuM8LaXw9zRKeRjqUOVqkHqVUjFzLfL0Ky9vI61SGTDVKXlFLh66Zw1UQHtBXeCHNLcwSeoz82",
        "phone": "SZQyK7EQ7bS11AuDxJffw0s2S",
        "userStatus": 191844324
    }
]
    ```




> > > #### post /users/createWithList

                * Request
                    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | array |  no |  |  |  | [#/paths//users/createWithList/post/parameters/0/schema](#testtoto) |  |  | List of user object

                    * Example of request :
    ```
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithList 
Content-Type: 
Content-Length: 1198
[
    {
        "id": -8883302062570340352,
        "username": "ZwsKbaAp0GLRIzojZHZcxGes9FrGwgivNKfYUQoVxaNgJbzISzUpf8SpOk5kBoPo85n3VLYtVMJEXjmQShf8p8xdtDy41nsatPdpBcSwYBbWUyMNP2VfastE61I7obhS1vhCI",
        "firstName": "9HLkEGTqtIsoYDRrhXs05RbnJcS1PBbYjWjXCdo6WRuUvmlMkNNpFZMocFq1gB0AykxbxVhtNMoi8J5sxSRcREB3j15AC5aapHmXDDqqpOIyyO16GTiyxUBQVGqyMBJci59WJAn8p6HXUI4BBm99hLZdrqLe1vqkBzhkaEtzLbxFTBhvYqEfbEsD4eR6KhqlRHG2maB7l9NfL4KJupZG3",
        "lastName": "j8GaeqsFMkmtmJDYRY8EdTJYCenCUr4ezKpNbSsXcPqzz3yq2G5gzPfc3COY3SdDDCqOuTMHJcgigOJjvPA5EPhIr6HvZU8Dwzr0tdIcqYvHNf1i4BnIqFqSM7oM2wpy6Rzz5hMwgid4xfmBQKkhqLadTyZV5oubg4LllxRCP5Gnk3Zb",
        "email": "kte5DrZbrVhPps6terPLirBo7ZIbYUZjndo0Foc6j",
        "password": "WJW2cat2WMuyaCxTNwNMPbZebECoLVSHFOJSZdUV0ota013NxRzm2zAeecDZ8vGNkqFjEAfEZJOZKSNhKnDMWd1aqEaz9Rnui3NWD3ACMpCwiqN2NrPJFRU5v5FFW29e5XbJ1LmNbYjuo7xcynWdeQiKWYqS0A75xiPz4bmfaGKzNhLlEH",
        "phone": "TySDuQ3mQDuWbMLKQX767NQHB8sWNavGInkcdoz4140dQMYHK5NRTEyuM1rAbXgTlB6zZGD0KEeBrcibi53cKCGxD87P5oJqZP0YwDZgidRJqaUJfYV0ACxdKF2Q3Lh2Bh08VZoddgXDqRmGPhHqUeDETGuWsLZ43ZcYZBbcS8Pj0c0QuHgoVU3PBxM4jL8nLllKWxXOGN8HZ8xuPOSLJVAktmoN8xaTSvEP3BDJp",
        "userStatus": -1903787303
    }
]
    ```




> > > #### get /users/login

                * Request
                    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | username | query | string |  no |  |  |  |  |  |  | The user name for login
    | password | query | string |  no |  |  |  |  |  |  | The password for login in clear text

                    * Example of request :
    ```
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=TYSJNLuwH4RbrgYAO8tGE8vHK9r9VSxPRqyEc2bU735zj397cDOQLkyvt0EoSceJDMoQPzKWCPwWSF44iTV4duzGue5mrj655uVV3FRGvnDo3HtlAopNTZunezKFTQKZkFUnlM4QaHedpIzZ6ZNZZindS7SLXDKhjFFErJvBqKPQsopassword=zoDznWWAO3tA16lip0Y4sHA38lTYOiOnGsX3pTEdX7OYe9hDagICXiG6Ez5sRUPxnMBMGg0EnODBYVf8bYL9grfV0lnSfdqD02pGiqlFfYhdTxm5v8eMzuHAP4t5hTJhV8YezjUOib1cIohew 
    ```




> > > #### get /users/logout


                    * Example of request :
    ```
HTTP 1.1 get http://petstore.swagger.io/v2/users/logout 
    ```




> > > #### get /users/{username}

                * Request
                    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | username | path | string |  no |  |  |  |  |  |  | The name that needs to be fetched. Use user1 for testing.

                    * Example of request :
    ```
HTTP 1.1 get http://petstore.swagger.io/v2/users/060HHQLaW33FkZOjdnD7bVjd72Cpg8VgfVXWMJ6INan8acroz4wK0PX7Rzw8IsoYnmVa61STcg2nstL1yhMy7JGZjd72Fw13TWd0Y6TamWyOpjQYBCwImdHGqOI6lK9eGneEt8PP4nEuGush6Z0tdH9DwSJRCT5igkWJsMyx9c1QHu8Nu8gHPqkmi4dVXjddDaX6WvD6IFWp94dDcuk2UFodKC8HVlVzwTFtoiz 
    ```



> > > #### put /users/{username}
This can only be done by the logged in user.
                * Request
                    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | username | path | string |  no |  |  |  |  |  |  | name that need to be deleted
    | body | body | object |  no |  |  |  | [#/paths//users/{username}/put/parameters/1](#testtoto) |  |  | Updated user object

                    * Example of request :
    ```
HTTP 1.1 put http://petstore.swagger.io/v2/users/Xvx7zKKLf5O9LcnvOvdKR9jn2YQrhqzeV6mvR6g6c5gYhDt69HQ0Q9oT8fkpFTEAZ05R7mXjsehJRLQ0sG1jQpcYEwnjq1Uq10h8nfsPtKzk 
Content-Type: 
Content-Length: 735
{
    "id": 1573525959687012352,
    "username": "k20Jy3jw5E8KGh3hkr4NA0AolUEi",
    "firstName": "vQJyRt6UMC0rLL72OongsaQtLfPFU75pXOYOh4J4GJvruDuj1Rzu1qYNGNsAUx0SmYHE2qIJadbERGXTxxnzXmmD9Od4meWIcEmf44ZeiaTaQR3ooqXlNjYW8c0uqXdDBzSGERUX2O7TFah3BfpoynlHAmb0joEUYwADovArkIkZTC",
    "lastName": "vRsUqQf7qBjrVI5PGCqj1WUsgDNgwpj2hLWHBcP2O8tJQzzxbZRcWLFcossVRMX9yTQ96GcUPFDFfcdqc4D8QileKOaCA7L81Ci7ju28a",
    "email": "OpT1Q55ueVNzayokaYsW7uzpCSUE04kOudQljWPxSD72bvnmuQiBkR0WJUAKZVyu8oQskGZcj7fuDDQ7t9IN1",
    "password": "KKElvDg38psYRMERZYZftCSjJltr9uaUfOfKs",
    "phone": "OBVgzN3eF3cEiFgaZZwtrGYBAdqPYSlMuh3356iKavosbFDbE9E6PCIpQ8fP1BCvTFzYMRIWn6oyL1Jqbow01eqSnGHohjUaZt9LlRHIY6hK81ajqHkrWLkkr2JJlDUk",
    "userStatus": -884122764
}
    ```



> > > #### delete /users/{username}
This can only be done by the logged in user.
                * Request
                    * **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | username | path | string |  no |  |  |  |  |  |  | The name that needs to be deleted

                    * Example of request :
    ```
HTTP 1.1 delete http://petstore.swagger.io/v2/users/sUObTVsD3uOnUwImsuGNVJwF49ApgDwJykUsfn5jRTHMqq9SUQFQzcvEl63BKzkiUfLaCQtuKbhaBq3vhJlQVRugXySH8d02tLc6CGAmRSwtjAYAjkqebUv9snRABRD4DPafwLBoD8RXIPx19XglSLvl9mWKdz 
    ```






---

> ## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

