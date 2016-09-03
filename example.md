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
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 701
{
    "id": -4907087323516108800,
    "category": {
        "id": 7075388549150801920,
        "name": "d6z1dMNRUWcZxN3hZ1Jnyp6vAcbfn1eB8NDlAqdvnpuUdxbcyUA7kGDUSO9gQnSYbvkMVxhiXLdajonSjXZDECxwrHNh4FggbA268jp55Cgo1DgkBgXfSvLkczChfSxqtzxBTWHYzXnABDVcTTrMod6B"
    },
    "name": "doggie",
    "photoUrls": [
        "IS2Bqs40ZFTWmSwkf7VT27MVzzkNGVApOC0e44e4K8170xrfEm8GuVC4uWRbSrAG3AV8F9cphewiLXxpkG6PBJT6FKi"
    ],
    "tags": [
        {
            "id": 5872412297380495360,
            "name": "ees9m7jzxBN4Tz1rZm75bJO4QuP8200hftrCBKc8m0cfzeGyANEMxtRnXGv0HwhWZIyAtKJPLV4k9LSKzxx60otY5ZYMvfJvYi6r3PgOKl8U61FFzdMzCfxHfvuLLehKwnbzcsoXOwSVyxA7KnH"
        }
    ],
    "status": "Df4SLyEwNVgjisTvUh"
}
```



#### put /pets

* Request
  * **Request Parameters** :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//pets/put/parameters/0](#testtoto) |  |  | Pet object that needs to be added to the store

  * Example of request :
```json
HTTP 1.1 put http://petstore.swagger.io/v2/pets 
Content-Type: application/json
Content-Length: 1161
{
    "id": 9143665290746265600,
    "category": {
        "id": 1453670628094640128,
        "name": "vKyyId1zXgm93vkhYt5H2pNqAd4yQQumB3UjgWSdcenfKIxIcCqe2dFDrJbiAGFbJzv0wndICBYmkv5w8wLaKqNcaZuKF9WoJrogPCYseXPytU5BrQLbhznrySce29CMB12qD1TSYIqrCw24mOfDoC5XuhbxrOj2Plstmllk4MMGiPLFD0j2DoZ8GbF7ZY9PjCjFYF02s"
    },
    "name": "doggie",
    "photoUrls": [
        "JLCuqgvJi88igPuVWuU6kdJDTIjUKLHuwkZXAuHTDPcTEGPBaJIuXr8R9rLUdtoKNoHnTphwetqT9fvjZdOXFWOOnAIB37lQw3epsvVHYlB8B6sBkgyZcmOAXxb0FxRbA5A3BwKASmIusa5NrDND0BeX8qYNXPZyVABx6m7YIQsb1yYscL6dnkbvL9jIZihUSTsZfAYYqr9sZ8VbU1ohmzN8J6QIp8Dh15hgFfe6GoyFwuRrwgITP"
    ],
    "tags": [
        {
            "id": 3723702474872193024,
            "name": "CSh10Uj10AhGQwMwUlcrP4SlkBea7gJJ81L8W59WGrCwXp3SKgkzkdVFOaPVqzFyArGwwQtch6JfvM7f2sPnFL2uVSqms5U3xBA3r3gIaZXFL5UOxKbdveHr78NAeIDLjdOLh5ur4r7Px1E5MQih40Ic9wMnep8yDXjV2Nn7fuWMwBRirazwbi"
        }
    ],
    "status": "kOvI2VRBzPUuSHSZXmWJSxBbZMLvY3eiSK1VFSweHqJA8Bz5YvPR2r21dNxbRMuJwwEboaq6BaGJLfPKLEBO5EQjsnuk9Z3FvIRUTh0urHedX3YIIzwNen6HKB1UB5z6Or0HJ1cbJqpGtnpcXWZbj6T4IUYjZyqNZrvJsHUc7jTBHiNEfNQzUJDCECWEamsaNXUgFOsM8loQEcuT0ltU46xJItnTPP4DNYTsNmfVHDLmQgfQB"
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
```json
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
```json
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
```json
HTTP 1.1 get http://petstore.swagger.io/v2/pets/1472696744805400576 
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
```json
HTTP 1.1 post http://petstore.swagger.io/v2/pets/0z4uqjZ8OoZgOVPZJ5YHpr4K9lJRex3f77KxqJGf8GvWBlWkqU2Pl6AvrkmGRpWYxGwXqccySIvu3rOtlRjHXUcoez56Z15wIBt8OGHHpcbtD0XZRgGPbTeptjvskAY3csb09TIy5T2JUZIMfpBqjPQM8metXcw9FIa 
Content-Type: multipart/form-data, boundary=57cacba84ea39
Content-Length: 605
--57cacba84ea39
content-disposition: form-data; name="name"

BSnHMpqHo9tEy45RUWE3iSwf53pLMzzosX5fmwWLFpqeuv6orKrKDY0I2ptOZ3dr0jGnPD9v2zJw4PVwAmgdlhVnGpcGtq8uJOSyr13uAN1FDWcditqEKm1qMe7fEfKn4CWvE00fN1UrX7EgA5UkrWLdaStP7ecbR8Hv9IKXJFoHM2Xn7SHzOtNZlhOtv0Fm9mSi5DfOjDv6GttOlbn9Ea90rXtWX9j7vcqAPGp8kVf0oIOKUbUym3
--57cacba84ea39
content-disposition: form-data; name="status"

N02KYb35Hfwi5cIewDtx2clM6xGETKdHKgrJsuO9KlsPxa33OwAQIWDOtktn4H4PXvyp0nzKI2zgcCj19USRQvGkPaIURMKOiiejGO3pQDF3fZ4pTWgJsX4h7McYzWNRf1aVPelGR0J7ZOwTKNDdKHuRtHQ2DDUSF5Ovk9bb9Vi9JP3uCGHmnceRT4UwHPpnUdSfm4qwZJGJyJdapVwN7LE0PyxxnWUi9NxvRY2RH
```



#### delete /pets/{petId}

* Request
  * **Request Parameters** :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| api_key | header | string |  no |  |  |  |  |  |  | 
| petId | path | integer, formatted as : int64 |  no |  |  |  |  |  |  | Pet id to delete

  * Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/pets/-4929565451471552512 
api_key: AgrOqRJXEQIiRyRo5fl0xuO50G33xLL81dWs
```




### Resource : stores
#### post /stores/order

* Request
  * **Request Parameters** :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//stores/order/post/parameters/0](#testtoto) |  |  | order placed for purchasing the pet

  * Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/stores/order 
Content-Type: 
Content-Length: 182
{
    "id": -6054645595086258176,
    "petId": -2956941277985243136,
    "quantity": 1605217100,
    "shipDate": "2016-09-03T13:10:00+00:00",
    "status": "MTo",
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
```json
HTTP 1.1 get http://petstore.swagger.io/v2/stores/order/YLI6qPxbT2hTisL8yNqT44vjOz5IYduWYd2p2AAVCRPUjB3SouMtyhMmRS5P5zM4MOtPp4K1VAWfbZ7ztT32bPp2IuRO4DSQsmGRqqTm1PBcPJMjDPlOFKQofHcjl5aOrQFShyeioQvdAh 
```



#### delete /stores/order/{orderId}
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors
* Request
  * **Request Parameters** :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| orderId | path | string |  no |  |  |  |  |  |  | ID of the order that needs to be deleted

  * Example of request :
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/stores/order/d7S2NCSbSAnbWsmKUdpMvY1OmSjAtA6GIYIvBBGub4G7w2SrgheLgfzD8SdBtkicj1HVCnpOs5WZ8O 
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
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users 
Content-Type: 
Content-Length: 660
{
    "id": -8469675168409583616,
    "username": "Tt8TCRvdQKw3ebH2eocRPg4390e78O92ihVU9r8ZbF3qQKs49FWZW1361hda6mcoE7iNyqNK6QaWAD1KjXJfYNm04zabWmzAuSo3jbOp1ZlCCmmWk6ciTyjY7t93QIElB2oUecjfbFRO2eLmkXFewYcDslHj3mEEp3zDgTSsyKhAY2Xi0CwwBJa34Sn8e1ND5mhlf9NNT4oS7m",
    "firstName": "7YIEArOEvG1DV3qz8NQu20hQUmfMuBXCAFga74OCLQgHTHg2u7ww8On2bCPF",
    "lastName": "NiNtyYADNcp",
    "email": "t6xanzEu5bCUyF5buLoh3cKCakfXxEA0K7b7HPCN1fHAVNLpy9HCmsewNttl84mScx0TnDGoToZObKeKUVmgoBMc4gxdlT5xq6qOK7dDvcrHXFrRBN8ZoVbtbJGxCM43TvSDD5h8hJQeoh605e0u9cYlVETyrXCltuZ6zgfRZ56omcprrpWBBUXxzQ",
    "password": "0OIm",
    "phone": "clnMCCDBHJ04Wp",
    "userStatus": 1454303543
}
```




#### post /users/createWithArray

* Request
  * **Request Parameters** :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | array |  no |  |  |  | [#/paths//users/createWithArray/post/parameters/0/schema](#testtoto) |  |  | List of user object

  * Example of request :
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithArray 
Content-Type: 
Content-Length: 892
[
    {
        "id": 1542887406754070528,
        "username": "YrFJd3iCGXoX0eUxLusUNBzxf",
        "firstName": "fWW5rUx6EKaWnRTLPU0JrLdUF1vfzL2OHYU9Tsfx",
        "lastName": "qtAinm7hmQI",
        "email": "3CN483DU6sC4nLYQ0v3rZEJm1QDoGmwKYkO7ns1tVDyiow9p2cR1RAnSr1g8nMSm6Htu9vY49xny4wY6JP8AqvtRxJZUwShDzL8Ig6NqEbYII",
        "password": "PrMX2dtv40f4VMXcpwXyeeF2FjdD2VARnnPpAiVFjbKeXHrndpVsEAujUIXWExN1VCrvVnaezUtxBVUPkQhZrMilufh9N5aIICdE0oTzim6Ui1KDS1CjNUFiaWrX2CGKeUpfiiOBFVwXXgBPhd858NnjKPhNrXxGRXV9fKLUFhSCxtsOHAUPoi997qWynuferboGV9BBrueYYGNFhHvGZEP64LFsfVHH65o2f0DGuSFsys8QaDw9ilgn7WPnR",
        "phone": "4YCt0StEyXwdq4GzVQcr0vNgSUdHh4dm3QP3IiHhgduHibgd1tF2ZsiRmwzEAN0EDQHl9pCpD77Vio9kROmQhFIDbhiM4jqH983ixFIaNQ66egr64OWmtFZFWis0BSIL1L4zrMJfCQlR6NXbBTx5zxKvPcwr5fc61gFt3pIGg4xmRuxso5xXCitsv0UAf7HgomJrMs82wGonaWQz2oxFG07b02Mg9twxQgZCI7E",
        "userStatus": -2063330324
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
```json
HTTP 1.1 post http://petstore.swagger.io/v2/users/createWithList 
Content-Type: 
Content-Length: 1148
[
    {
        "id": -4292085076591640576,
        "username": "20BvAwy0VqVAaQxB2A4nrM1v6INik7ln8WSItrJpRF01vxCy8HVztX5AFSS0Zen8bgQFHz4zf4ALCdjKVejoboZRhRRh6fphvgWcP0L55mQHA9svoLUzaTrsLiJRx892o5fe61jcnaUXjmtI8nijhJL21uUzD4C29RhgSBtgLne5JHNS55bmOWpQrkq5o37yVoOOZh4LFiQp0Eh",
        "firstName": "KssypRpQcQWAT38OsXCrfHdU03j0IB6s4y1tqrkChgcbjl0MiCeykrskvMldnrGrZHVp8f1qweBQzBCSeQqyhTTNGe04GGwFor5wH7Wdmy4WaGPoxgXP9RCQ6DUMkqsISyfzFcN2KRYUyNj63gVd7y3dbX0vos",
        "lastName": "g0tPGFDIpvGk3uDaxU5K2DOgPMgkaIyrJ2hpHU77pOrti4DQYJB1nphcbxxmg6NZ84pPZwWoloSEswurf5tCvKOHhl3yrQxAVWpUtmjOKbsdIXFX28",
        "email": "ySofaKiIc9gM5ccZGzjvjvYxdVcaYlKwe9MoT476enTjA5jhFCMY7KwkGJvF4fcjpYHj3PphcjANoU43",
        "password": "Q2EBzZiiuXnKaG98osbdStqb4dzYhDv8G9Kf83yD1VnbBwkZYwdQZD13QB28fxhWH2cQ5Lt6GQiimCil8vc88ebZQe76Lp2trfjx0MEHCWZZzhlHNxQVM2UCg2I2rLvT1Pq1B5Je1IeA0ziN78ITaDvrFet7ZZ11Os2pxLEyuT9ussiAB0tM",
        "phone": "ZdkeGseFtfuViUt3y2yrc3UElvgmY20YfkcWNqCgG6cY0F2zIA1UDVzYqPkpRlo7GB3t1GJIMWGMCImkjnfWjOVJDg9uBxCh8FKaluS8rzV4hhoBEExXstH6JRAkpdCxSnIeSBmkbiotzN4erBbT4TZNKA89NLHG9qV12ildAJGawKoXlARqtReesn",
        "userStatus": 1833459972
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
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/login?username=6XhwSjybFLLorVVckTxULYoCdD5A1mJ7j1EckcnZY9oq5kCpdakY8JBmmHWo3GwnHbA2nX2m7rMcLoCYzXXIGz43g1skHYHpahsxfuUnWHAH5&password=GFaEnQdrUusmOalwzvN133wXrsE1aKeRpovMeJe8dHv1RQxrllsopZlQs0RDK 
```




#### get /users/logout


  * Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/logout 
```




#### get /users/{username}

* Request
  * **Request Parameters** :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| username | path | string |  no |  |  |  |  |  |  | The name that needs to be fetched. Use user1 for testing.

  * Example of request :
```json
HTTP 1.1 get http://petstore.swagger.io/v2/users/uau0XJJbRWTnYKdwbyREWhDi75jZI45dezdciXoaUhxS1KodjgRgxvyFBSEkWKxakLnCILNC2lv46TipaaFIFenh62B3M9e6UBJDmxgpSLtZFLoPW4xBjVSpXusKDGRyiAcE8s30dx0TjoJfthRMcKcaeFURmMqEnCiv5mwjUwceVVuoclap5mzj1ubngB2Dek8jHECCbPQ6KkuXF 
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
```json
HTTP 1.1 put http://petstore.swagger.io/v2/users/mL1V43qgrGStj6Osqv727iRYoCiTzYyWJ 
Content-Type: 
Content-Length: 803
{
    "id": -4129695017419669504,
    "username": "LoLpPV08",
    "firstName": "Sd5KRSifvoHhO4VPC1O1fXNEJctFcCS5QXPIQ8XlxEDlJzamAZoQXbuGnYlABe",
    "lastName": "scva2E7obM1xwBISbHg1EswkQvFq6T6y6CI8hQxsCz08aI1lpin3KToAp31vX843LMc2DJvgjvotdqPCIcGs642v8316b5aXSmZv6uLp0aTdAIQjVxL2BOxJSyQ4E01wm02tvNTwYMKzvASq8EsJs0tkzjpdjqKGrMaWA3tzQd8lO1MWFeF8e9tOtS1MiLtJyEG8I9HymQUbRG7wUNE9W7Xp0ZciLG1jkIs2R9BeZvpRbwn",
    "email": "j2ggadGadSsYzuhTcJW4TyiT3HKfe8myaCOlQuv3nY1WtjQG3NKWl3Qp",
    "password": "AEZI1xTDmetRKxeJzbdS2TWQETcIJBtkgs2h0WVmboeVWtFvESoHMkyrdK9XlChC5kT6gPsrdHn9a3FOW3wIn49BPizaVQN1aH7rwzTKghUrkzggCMZ0R8CGrbRn1FocmvES5xCmOxN863pJQoJHxmoYxgmzVKLhfpalXNHLkuUryjaoHT6efudNLzmGj8Yzy8UvWCgg7aHFuR4bLaq1FDPqdb6xj46Sd1n9DEqLP7qjZuvLFVN",
    "phone": "zCLMOSj8Xq0arnk52",
    "userStatus": 794437582
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
```json
HTTP 1.1 delete http://petstore.swagger.io/v2/users/ShaSMFDrBqMa3yXRqgZnHZx9nRepC5gumrm96ZBIqnSuVPll6lJOkgXI8b7KhoeDPBNWBoE2LxwHmS3tdMiy3fgbroWIMbm 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

