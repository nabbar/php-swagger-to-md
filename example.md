# Swagger Petstore
>>>
* Version : 1.0.0

: This is a sample server Petstore server.

[Learn about Swagger](http://swagger.io) or join the IRC channel `#swagger` on irc.freenode.net.

For this sample, you can use the api key `special-key` to test the authorization filters


* Terms of service : http://helloreverb.com/terms/

* License : Apache 2.0  http://www.apache.org/licenses/LICENSE-2.0.html 

* Contact apiteam@swagger.io : 


>>>


---

### Global Definition
>>>
| Attribute | Value |
| :-------: | :---: |
| Schemes | http |
| Hostname | petstore.swagger.io |
| Root Path | /v2 |
| API Base Url | http://petstore.swagger.io/v2 |
| Content-Type Accepted |  |
| Content-Type Return |  |
>>>
---

## Summary 
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)


---

## Resources 
Path tpl
### Resource : pets
#### Path : /pets
Pathitem tpl
##### Operation : post


* Request Location : body



  
##### Operation : put


* Request Location : body



  

  
#### Path : /pets/findByStatus
Pathitem tpl
##### Operation : get
Multiple status values can be provided with comma seperated strings

* Request Location : query
> | Name | Type | Required | 
> | :--: | :--: | :------: | 
> | status | array | false |

    * Request Parameter status
    Status values that need to be considered for filter

>>>
| Attribute | Value |
| :-------: | :---: |
| Name | status |
| Location | query |
| Type | Array  |
| Unique Items | false |
| Items form | [ [Object name](#ref) ] |

Details Items Object
* **Object 1** :
|  | string |  -  |  | 1cUVlynMQ7qVhlI4rfo7xkOpiocAommpzhlUQJHGQ7B8tjcUzA26VQwefJOD6b3FspAi8hZYpA7TUjNtTQAPH73WRSAX3ECw3cPcuObUpiNkBBOvrpk8wo5ngGkjkXQoaFBFtMzT5mdHX1cpqxyXVDlbjGvEDl3O0Etur2owoBdmDqL3Xj0SXm4h2zVGVZuWDXq5ZPBoqPL3fw7cQ85Oua5wK1dF0HBEF2JFRl3iaPlqmtDcBJ16 |
>>>




  

  
#### Path : /pets/findByTags
Pathitem tpl
##### Operation : get
Muliple tags can be provided with comma seperated strings. Use tag1, tag2, tag3 for testing.

* Request Location : query
> | Name | Type | Required | 
> | :--: | :--: | :------: | 
> | tags | array | false |

    * Request Parameter tags
    Tags to filter by

>>>
| Attribute | Value |
| :-------: | :---: |
| Name | tags |
| Location | query |
| Type | Array  |
| Unique Items | false |
| Items form | [ [Object name](#ref) ] |

Details Items Object
* **Object 1** :
|  | string |  -  |  | KlWlBFUnP1E7xKFE0oqUboTtDHbJZY4Jj15VGZiv1WCzGidHGDBS2umFcxpbwtVPu1Lb03H20jBHCPoit0bvuxbG5ASB4OryPcKQgrTgLuXnjmGMmRiRpuyv |
>>>




  

  
#### Path : /pets/{petId}
Pathitem tpl
##### Operation : get
Returns a pet when ID < 10.  ID > 10 or nonintegers will simulate API error conditions

* Request Location : path
> | Name | Type | Required | 
> | :--: | :--: | :------: | 
> | petId | integer | true |

    * Request Parameter petId
    | petId | int64 |  -  | 1 | -5868784652038176768 |


  
##### Operation : post


* Request Location : path
> | Name | Type | Required | 
> | :--: | :--: | :------: | 
> | petId | string | true |

    * Request Parameter petId
    | petId | string |  -  | 1 | 04ittQ2KTg0SIQoo7NwXgZZVv2bninMjr4MUVOFP5GHOw5cDSJB9IA4eCgBVDne5s10nPFcVlUJSZVwSF71oH6Cknef1Ct74u7skMFf8zZ0yVwrADtYlABFXQUZso6xTd0e0Fu8ft9OoGfYjIXFizkgpffSDmqxAqLA6fJlJTa7zp6 |
* Request Location : formData
> | Name | Type | Required | 
> | :--: | :--: | :------: | 
> | name | string | true |
> | status | string | true |

    * Request Parameter name
    | name | string |  -  | 1 | 74yqDSG27WVLjljTL4uRked37nbGNhzVl7lZ0218ZXUiidc4iHWDWaG3xSKl9kgvrCusFwAEuuXMIaQ0RNDNXkRvcCQmW7So |
    * Request Parameter status
    | status | string |  -  | 1 | mQoTr3nV1aDb1E3OhRLBIgOl6ahd2FXpwmjXpGTrRxCSbFGtwr5fITBO4S26y0w5mP2MwWdouQgGwW93oei68UVcMYjlZQqlFt8cpmBTcRzIOJLcY4j6YfjLeC6dswz8ZHlp4WjgOTZCCLPAQ9HPo0BCDHQ5epee6zDbwWskPrWsdM34VLTkLuXocNuqcIFjiiuOfW84o5xBRAFNlz7744wgR0H3Jmm1ERQUNYYb4wMV6sIs1P |


  
##### Operation : delete


* Request Location : header
> | Name | Type | Required | 
> | :--: | :--: | :------: | 
> | api_key | string | true |

    * Request Parameter api_key
    | api_key | string |  -  | 1 | 6U6mL73PQqbS52IZQHY1LuOHBhq3jgDpaJLVQPKHfWAlZikP0iRMMFtnWTrfa4FkOqgFg0mwXWRWfbMfuD2givEfp6vzaaUZBaERa1o8Xf5drRtVuvcN1Q3qWz07JU7l4Lc |
* Request Location : path
> | Name | Type | Required | 
> | :--: | :--: | :------: | 
> | petId | integer | true |

    * Request Parameter petId
    | petId | int64 |  -  | 1 | -6990010930088116224 |


  

  
  
### Resource : stores
#### Path : /stores/order
Pathitem tpl
##### Operation : post


* Request Location : body



  

  
#### Path : /stores/order/{orderId}
Pathitem tpl
##### Operation : get
For valid response try integer IDs with value <= 5 or > 10. Other values will generated exceptions

* Request Location : path
> | Name | Type | Required | 
> | :--: | :--: | :------: | 
> | orderId | string | true |

    * Request Parameter orderId
    | orderId | string |  -  | 1 | bVWzVa7BkbpTlpX8NAVOLZcKJjWBvqpGmmgixnTRzjLVJJ3xjYl5XxQHRNjmdI3A4kTCHNug7fcQYfnieJocheU81dvf |


  
##### Operation : delete
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors

* Request Location : path
> | Name | Type | Required | 
> | :--: | :--: | :------: | 
> | orderId | string | true |

    * Request Parameter orderId
    | orderId | string |  -  | 1 | zQ0TJDBx7SEm4uljRExA2KRgE0hRwxN5nOZ6rADzshVwMhQEVofX87eN7vEE3sJqhJxJjbiMseifv9Trx8pFfDsn971cALCSu9B |


  

  
  
### Resource : users
#### Path : /users
Pathitem tpl
##### Operation : post
This can only be done by the logged in user.

* Request Location : body



  

  
#### Path : /users/createWithArray
Pathitem tpl
##### Operation : post


* Request Location : body



  

  
#### Path : /users/createWithList
Pathitem tpl
##### Operation : post


* Request Location : body



  

  
#### Path : /users/login
Pathitem tpl
##### Operation : get


* Request Location : query
> | Name | Type | Required | 
> | :--: | :--: | :------: | 
> | username | string | false |
> | password | string | false |

    * Request Parameter username
    | username | string |  -  |  | Y2MElNlDp2925PQYPfbZjFl7nGwUy3Iw6ubriw5IzeKF4ADTQPT9uehRUOMsSuZYZaqhHv0gKKVOkyIbnBkSPCKKqwci1bh1mIj3ejkY3fNoOvzc7U5WwPHXmTfo5xpsfIwt1Qs56ftVL28SWdPt3wqqqGOwdeYtXvWZlo4sEyopAwhxK61NDre373zlhyOf3L |
    * Request Parameter password
    | password | string |  -  |  | p9jRORfdsLu0 |


  

  
#### Path : /users/logout
Pathitem tpl
##### Operation : get




  

  
#### Path : /users/{username}
Pathitem tpl
##### Operation : get


* Request Location : path
> | Name | Type | Required | 
> | :--: | :--: | :------: | 
> | username | string | true |

    * Request Parameter username
    | username | string |  -  | 1 | B1jetyhBBRWTpK8tvnSFHJuzZH1Lc2hN4B2y9k9Kb6EBQM5maX2RHxqGesrqvJeAkg8tBheNnSoeFtBQrEH8b8OpBgQ6Z5GkmOOX62KtV9IBDjr4Y9c9h1zShqYhvFBRtpOAry4nIMZl6qp4zCeRDNKUeJbJoMAScpsDYw1Gj01prru13ISHwCCKlOuKB4CNu5rsBs8UtakUBOWFxOm3rZONNiyonabRfCjR5sL |


  
##### Operation : put
This can only be done by the logged in user.

* Request Location : path
> | Name | Type | Required | 
> | :--: | :--: | :------: | 
> | username | string | true |

    * Request Parameter username
    | username | string |  -  | 1 | D6teUpUrehvFgkt3D1s0cDSsgcjlE5Uhbnw5Mrx0I3GZna30cv1o9TQq59LKeG2q3yvQ03RI6yIuILvUhxiqq9QwjChyijYmSucSx3BEBj9k5FemcxNDHDa0gryyLxVE17xzb8eNsn7y2mUfUHSBl2CCuaafI6UJdrjpzxc2VkAYGvdBd6cy8OaCZlSIsMsFdL4NjhPfBqdiVrT8y6HGVSjVecDGZ5ldRq0aIQpkg |
* Request Location : body



  
##### Operation : delete
This can only be done by the logged in user.

* Request Location : path
> | Name | Type | Required | 
> | :--: | :--: | :------: | 
> | username | string | true |

    * Request Parameter username
    | username | string |  -  | 1 | Jf5GKept23yRKt4wh572OfcKlt1p8TjR8pySDXmG1UyLnDiFIpHwFUg0nhpwaInj8WbMTytVs1GQEZwmodS4894vru1BdpUll67fEAa7CRYgQuDfIwjQGom7SnI6NDr8KzopazwMqv3h0HwIdQzT |


  

  
  


---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

