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
Content-Length: 537
{
    "id": 7334221390284849152,
    "category": {
        "id": -2837340032363134976,
        "name": "c7alX0UkpxhOu9gK"
    },
    "name": "doggie",
    "photoUrls": [
        "QBu3ueb5Ln4YUna2yvZyqkXXCMsL2cDSO8Wim8n8wr6rPhtoMtWcNUapGCbIPOBEWyWjGkscMyDCP70CAXPoRZOxCZgsOS7"
    ],
    "tags": [
        {
            "id": -2625778030785593344,
            "name": "56o"
        }
    ],
    "status": "ja6XNV5NyFLn4CnSa0RrsGjzrJDxQ14aca7Z6cNESy2WbpOmpGNSn6sPP6mF8qPkBXkHa8l3HoZTNOfdv26T8yIYF4ENvu76rsNCB9FixFblury0uETCdCBSGfFcJNibg"
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
Content-Length: 1059
{
    "id": 5477258920848261120,
    "category": {
        "id": 1182326843580088320,
        "name": "BoJlETP5prk6GUihdOBeZyNFoChmeUQQiAcXu13Utn0aiirw73K7CyM0b3nqYeghOsfjuidYGe8ZwAvEDgLfPyg0CDqBRHTG98ZErdC7rL6YlCCZTofIXvJz89b0Q4G0dGEEThLk2SiovVnojC7g8QQg02hR6YSjExXyOJTRBbf66CvqfC"
    },
    "name": "doggie",
    "photoUrls": [
        "ntyEtAVlGTd0yKY6zHZqjbFpiiVJxxrU1ZyuzuQgo3hXOf4nX4OgfuGyMBhj9JeaINFihvyGzQDo5HL2LAj14ZARBSbKBpVjdABv6abG0P46wQ9iqskvsUm3MxNnWJH9jjFqtQ6uFaBc0KurcOWEJiIvPwTLfAVyTBZnr5S7gtjgdOHqDD5mVNSKjLwym"
    ],
    "tags": [
        {
            "id": -226537302703210496,
            "name": "36DvcvCsYWJcKrCn4IK0vCLPoioKLv0PCDkP9Xi8T1kEsX2xFMyboj1NCpxnVxcybxnkuFtoHN29L4HqRfCgzD3b3AzZ8LxjjVEOB7ciVfsGk97cpKsYnvar6JqfvXyOTdDulQMh5eXqo5CNP4LdAWEHF4Wa2vZVJCp4scmyqkYOpBCeGoshk6YZbUaeq9a9LAedMAMcUK1klEy221jn8hmjcw"
        }
    ],
    "status": "CGIMrj0F5BrivckPyYoA0pTnxbKRnhq0X9MpsN4xowPUIaKh88R9yLx6WiYkzpkxy7W0V0ykxoegyYxG7oQGanM6FLqfaLMITIJPJi9gGowen4VvsLbD9YJPKa4UWQDQynFhFPyle5AC9w7CijfrhYg19lW5bzWKXB2CrAYFFyiP5prnJGP0F6"
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
HTTP 1.1 get http://petstore.swagger.io/v2/pets/8443981643252760576 
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
HTTP 1.1 post http://petstore.swagger.io/v2/pets/oBMdmm30ydO48nMOgoDxijVkqpALca4BLRO7dS7L5WQekC3B1G8j03DqtdcGogh986glZo65lWkFzngA4oT4sxvWLHD9YUi61zr1Yx6juqZ3OgESFyW85s4Q9H07CieESFFRdMbIcbM1rqT7ZQf4ikVr2VzFeNj7tYYHKapXl 
Content-Type: multipart/form-data, boundary=57cac99b4a372
Content-Length: 531
--57cac99b4a372
content-disposition: form-data; name="name"

ZNCSUBIaG1uBswx2cLQvTkuR1f2rdnDcbf55RNfxPK9ihGktsbYlvtdxJfYWDB9OReUI29gRTq9a7uEzFDVb69IPpGM2iVR99LSbV93Pzc0GHEgmhcyolgdKX0NfVFp5rhgmqkcZwcGdRWA888xupKemL2CGH1L8i2v
--57cac99b4a372
content-disposition: form-data; name="status"

nHJTUp7LmIUuRrZgcdCXgeEXfq6ytBhQj0KdqSYMAThrkgIwuktKz7HPxOo0qGQJGBX7tWT3Pav9qdFUy9E7gmXObmPB2GkJhiQKeJO3UjdlwSg51Vdiha7twW4yCpiUH8EWSsZMMd7i5on7jAqALx4iu8R6x90fiFba8bXUp5dutBCMb3nXArf5z7b7gcnySzJ0LGVaL8FfJi1VloSWP81pfdwwqU5itOjevephm4w6mx1HVU
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
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/-2709835789218349056 
api_key: L3FajTHPjBVC5KVkfaJxxN3DaAFSwzwiC
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
Content-Length: 390
{
    "id": 2569826723021455360,
    "petId": 2771514010669940736,
    "quantity": 529404892,
    "shipDate": "2016-09-03T13:01:15+00:00",
    "status": "BwRcfesV11CITtEVGJ4pPypWlOcQWr1yYTKd7c88dKR7ew2Vf7l5FL10zeRvFS4DMORT102fKUmZqpUGwfLc1NdA146HXalJZcD0cGgXACW12RHz7tL8gYJi3PZ0ZkJZxnZJ3fHESEFVwmuDQgM6fvoilnikI2jfpjZszH6slLnR8SvY9i5oOtG9RZuA1OPq7PTHwZaSLyKUrfTAyYYmsF",
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
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/EZTFNJ5VzYD6YNZKmJENZynxxlTZ0pjEpdkdWq8wpMDnAC7WlMKkl7SStMRubb8AotNlTWRiJuGj7OgsB0NW7FOBrG5DReefH1ABYsTHXA14ohwZikVqZK1rq65hkjx2l8DjAw1x72Cvk9vCtq2ta3VB90SujqwEyaY8HZGO2jjmsOYWf0pq3l1dlUIFkfkSpi16iIUk1eGt3EpjEPJIaLWwGEb0T 
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
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/TiOVp7DjrEx78BMyUqoE9yp555Jh6DNZVCUkJxEaccikN4TIuhmDQLJVRscX50X1CRmlp0wCdOX1SQJn751XRKTId6Fj6DkJuH5UICxVquWjkGHsLJpDujlHp11wElf93l4LXBGn5DHqjpS58iJCB4k16lxLHNVK8Zv5BctGPa79zZfIiYlU 
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
Content-Length: 1067
{
    "id": 7365846544450322432,
    "username": "vS5FiDHsCIeqGNswQCjf9jssVRc0RcXn433mGKPjt3K9RcGIP0XYjqqehDf9PdwUgzgWk6fN90X1cDJ1EHZX7qcp3rzTE5NUF4RZa7Nj7Kkko4l2Ll0TMcjQDSJiXwcDA4DKbq4jbpDAtYCfkD86PrWtjGLhdYUN3yyfZDya2bKwanLv0TCQlyjEf5Ws4Rg8pPnosVzv6k1hHMMIGoy1XSGcYCF3uVbTKyidtRIAbJSSwEBd3af03Vd2yS52O",
    "firstName": "WzPeMj5uUgeM9KrLXuVduZ8I1HB6KpnGZdVLw0grhvdrgEce98rE7Am8hXf2nDJnQE8nFpOXV2pbGCpQKQuSqQ1IOgLcTuzK8I7O8VL3XbeENEvyvZqWQrEFIpRCUrm39tRhpDlnOA2CexaJwAFn2k2KKTnEkJIudzMCd80",
    "lastName": "I2EWAOG6pmurGwcrqz6LjOfwo29Ca9ESciPM7vTwRnYyTb0jL644VkBjmKVxTAq5TfR0LLxD8wc2HclsiqxeK8x7StFM35SWlKX6vuKD",
    "email": "WFI81brsJFcRdkKG0xK5pGr9DyE8ii9eYRn03PsMvFEI0pp0W96lQxut59BosLCrD0rGPUtkz83zxsztBGOsejVktxIWilnWlPCaJ6v",
    "password": "eySL0seC834mm0G",
    "phone": "ypMRKaN5ZqgJwL2LkUwlmLYvO3Sa3z0CYNtJXhOWH5FeRIZbCwwZhvv5yogCXheW4HF1ZuYGzEVqmUCZq9ZIEuNcS4OQl2MqKssJWrqv6lWsgysHHrpmWdyOhnFDqr4bUxVQYlm4HixXRZFzr4VniucASReijitdPp4OKqSsJpqBp5aRa6esBq2tigLByfPoETcpj5S3viEVoOMyV00wr2ZJjLlS1agG3t6nyYq3h4ZGTLePMfldilX",
    "userStatus": -480894689
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
Content-Length: 860
[
    {
        "id": 6804691664020439040,
        "username": "c9c9t8rFMrLGqzZU19ZWvYVcD3wlMcNYlZ8P8zuU0fBrPAmRKlNgjJsXMYizb5xx5GmdfR8g7J",
        "firstName": "Wk4N5pBlIkOF7MYHY3ev9VSmaJurQe9MzdAECbZlwN1EAZly3A4dvWzFG46wjgjStTw65wsBktfUtAtxayKGuklaosHHI0AcU6iZDKAXeQSIrlfBT0iokEzJ6grPg12b7kaL5LIkBA22WhEQiWeCANlH3MxkNzvVUFG0rpk2Zm4VEILWF0zfNUXRHucu3H",
        "lastName": "Yn7YOwiRwFVskEehkeRz2LwUt16Y4Oo2cw113kSz0O1ltgDNuumxgTrJUxHZm62yC3zGorfofhJIxmw2RSz7M0RHyyGUFJsiM1YbtdzJvjs2GY5xREFEEwld427J",
        "email": "A2yB0J5ejOJChMifRQ7vvLa16n68vQU5SsHSbM7uBQ7TCq8ugfZM0aO7yUg4La9DCRwOEEjfuq87RhB7xBTyMHFlCV",
        "password": "n5y1Ipyw3cQjHhsP8Krgh39PPRvaurzSw8UfytMCGCVoTod29EirHsgxkMHPdhHKqCZY5LA",
        "phone": "owaiVnk41DvJ5MgpzYfMgWxGzwFEigqHNBZIYkN0XjJ360tFYIsfFZVewBTPRjwFVvnTQbTOvDRCDlhC3KRIKNWgpP",
        "userStatus": 545636613
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
Content-Length: 1048
[
    {
        "id": 988247944467578880,
        "username": "JfZUPae8srSWTP1MrKfsx17b39heIOCs3BmTMB2f2UbVJcIbXXDvYLG2UYhDNT5RvsKh3N",
        "firstName": "5HH0rUIDSGgnF14IW3ZzQSFIn7sFagcfYUgpOZ3HFk5lm93id2S3VxLjFeYPua5t4lSTkWB0gGlCQpU3sN7nkTG07FPCPV5UgYOBVqCb6XNWnIZPv7cQ0TQ8yGKoBQjSP8tKy5WE3JBqsBgXIsOImEQUlBjWsCOiKi3joZXsIzTba98SCWBY",
        "lastName": "sSX4bUxOJPy1TRqSPSBoLMyVVrxS3vt",
        "email": "nrBzl8n4YW6ROwJDpl2b7B623DU68oDwQe6bmtflqlceSWRhhTspvzsycnElMhSCwYNSs3dSpq6hmYzES13nBwVOTA9FS2ho15gt8umxUtPhsoWkq0I1wDPpdZ551mu3s",
        "password": "wAfT8anXsPloaMoSNVvDkJCqPENjHf4ePk8XuvVXkglu2KmQFSt0C6qrKdLssQGiaOgFjbCEsY8vJvlooPp0VQsF4d7x3OQeC6UWiwAKvJfefBDDq3DlT61Yj9vnXlCAswxK28uyRKN7lqKLuo7nu9mOjRchdORFkppnxUWoEJw09hMEFT2a3oZmgbDt0v9lUzIrtFQ8om8yDUcjOeuSCueSGSmGnv1i4KKypAGOXPmBJyVyNqq",
        "phone": "UFjAxFhVbidg3XOtyvhwkE84d4C0u3qpIJZfpgaBzoRDmG7Vcosw3ABgEdg9gHyYryeQPpspOj2a0a6cyyJB8kSNx8XOQvNh428TrAjgUlqUvx645QGeay1IHYxxukOymXsOxL4r7vlD2sI8jomtXncFmJcR31qqYSfwEjXLPjpSM70",
        "userStatus": 224150729
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
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=ztKL87ulYynoZlheRVyPHn96fWeg1KDBennnuRJsq6Rpr8Dj4b9LziSPe75gRIS65fuA7d3xjUXL3A57MeTlxMaMTg2LYUR49mFhzIOSDLDHmIP8XIuuvFgoVjaUe2ZooEFXnuQ1fuJCdyLahfFMVWbQflLtnLSMpxJN1APh4yTh6EsoU7bP3mGjIsN6dFSDdCqecgvhOpzV31kY9vOdRuxAWkG90zN&password=bdrouXFjmfeqgzpq4dEWHbwEvdOvMBJXPamj82CuhRVyqkYvxDrfOYUkbIQXkzVaKhtSk6nBYi9pD8UaLmqzkkUv3Ksojoy3F2W09jB7BLxeTrpFOQf8b9EeU6CdvbhbddbmxMt8x0nrsN6gEmpPv33paGDFRVQ591rGOVPmWcNo0UFEg5uM8yciePX6KObTQDAEyp0uCOTCIzhZELLMjX5 
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
HTTP 1.1 get http://petstore.swagger.io/v2/users/N3FyRQsHt2m2rmw3bqGTZYTEKEr4CwDpziYr9q9CsvFUScX3CEXCDQhnvIr7e4xOnvfwVp9oUOiN0gQDUNgxDxV9fngusOjPkylgXvESjXFkdvY8jeFXMB61YnwqbPgvoBMm6qeqnUKBqIJJXoHJ0NLYbhom7FSvgERn56Ns0y4rhNbecSXcGIaR0ze7e7DvLvSQBGjCfn4wbfLn8JzOsJGtjUAx1e3NJWElDYXSm 
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
HTTP 1.1 put http://petstore.swagger.io/v2/users/pxhbUpUtdndUQxOq5QF8Eo4iJHgHADJZa0b5p5yDsMxjjmKocpxRNB9xiqeT3YTdY4ioaR1DEzWYWGm95T0Tv9qOzFHCDAQBE90O02s 
Content-Type: 
Content-Length: 1048
{
    "id": -8135184562801082368,
    "username": "dAQmOfdJxLzVKtmcu6X0Ju7qdsfTQFM4fCq4SENpqmkaQGnlNllxQsX4VdXLSJQ8mhceV0DlnYweFUzsgV06oXajb853SVbedos8o6uM500KVAdbvdiTbtdmBipteBIr0bzph4bm5b70MkchxvbIYo4AHu3V6Ln7WWwe1HB6TI7F2jXAO9iMynnfSqbZcy69vDowkZDeIKUL4SlS1EFA22QVt2UGA1P6EdDZdgeW19H513X3IDDKGuG9wB",
    "firstName": "7CFehTRh78v39ELeGOcJxPniwRYFozvvbbJt4BKbJgfSV07BPjln9IFFADlYcRuo2eR7PCjzTyrPzzrpSMM2vrH5434hUzFXNx4Danc4WETwdkV57I8C9QIeTNvOmbLaJQNTeZYaERHRcCXkk5WuVFIPteDQqp09fO3tO1EsTlj6YhqjnnNi3w7wKLmbankqboT0",
    "lastName": "ysjUMqT4QcrdZKgvRNgDa",
    "email": "NxMdJb7KBGdVB0lu4bGwpGgGb8tsLEUzcHMVSUGtBTpcTKHYWnul4K2gSwIDaDdmk0icUYGwS5",
    "password": "MQpKNNe9RZb8SHQvStJfOJx1DwH9oNSbEiVr6aAYaL62tXymrhBf08gEFYO4LGfqZbR5lr3wdayH763ynEOoN42s2QwOxMewX6BjxFPLQosXuvwSakhXpjpsaWgHJvdGCP09vPVldnj",
    "phone": "TPB39S1ycr0mnh36NhNp6NzCDuYRShzM6bQg3ROfiPCG7FMUWAk3nTG0oERhVr32DTiHL7W3WzJ4ewZb6jftdWuBAmTwOWyrQQ8BY5FVEoZTVY51ikvvg07Rm0obXWCNNLpLQ4GvtGooEtqWOVs5WzXiAltxh6k5RKRHOxdheBGS56PT2hZYQWhqhLYzSj",
    "userStatus": 745677865
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
HTTP 1.1 delete http://petstore.swagger.io/v2/users/wrS4EaigQalX0fZheY8bgzt1x2TQHDUd5MhJWA0NKlKKBK2QIa1YJu0hxU8fx2tCPLmMlmz6IjQj3T9M3bKNGL4eFdtdfXQ5IcR3zq9hK0BOUKAXWlLC6PQM2kZihPnZ2f3BGdTqeuf8fQ5cbROiGF5JZ42gUqgWFjymwrNKW2ScSYo4PcnwSsgRwi7qJonpHVLenyZkASwtRVx 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

