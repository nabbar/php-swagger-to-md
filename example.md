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
|  | string |  -  |  | 6h5rngWCBSr0HXYgnTWR2E9vl0UEkUpqbvSzMOcnHDnoBlEZfAQhfZNB0IfkCFLObEnXtzladIyO4cNjNDB3DpEE7U |
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
|  | string |  -  |  | J5LYgfebzBAoLwKOnsxADilu1FcQrrzbxl9OAn09ZAyL6jzuM75pqqTs56ixxSI5dSTOgTXftw1APB5BJa19AVCG1VdzOWE2PxQ6rOmVknv9YALHLMRlIt1JpfidcWf2u58VUuReSmoQX9xIWp4ES6ohmGvzDKB8QK4KeVZ6inXgxvYuU38Maw4wdz5RkHZ |
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
    | petId | int64 |  -  | 1 | -2972067349642870784 |


  
##### Operation : post


* Request Location : path
> | Name | Type | Required | 
> | :--: | :--: | :------: | 
> | petId | string | true |

    * Request Parameter petId
    | petId | string |  -  | 1 | LSHrHd9bLTXm |
* Request Location : formData
> | Name | Type | Required | 
> | :--: | :--: | :------: | 
> | name | string | true |
> | status | string | true |

    * Request Parameter name
    | name | string |  -  | 1 | RZ5gdgsg2ZaxtiMFU1rMJTuX2FJWD5du4iLiydzBdJ8G2UmWWNIGGdDJSmFvrT0wb |
    * Request Parameter status
    | status | string |  -  | 1 | OK0nld7uU9pg5l4O1L1EvU1bqs4qZfcN0dblqiQlrfCxBGmCsnhXij8IMc8LslzszKOZ3EluUX2vEo86Lq34JcMvpUgRgPkPA8PDNa8H8acMylSkLWou8a0x5gpm6JcHS2kFdsnlDz7cV0wGWVb56bDcs2yzMLgENBk04HmIhtUctrTqm4vtg9FJbeiYZzCNb |


  
##### Operation : delete


* Request Location : header
> | Name | Type | Required | 
> | :--: | :--: | :------: | 
> | api_key | string | true |

    * Request Parameter api_key
    | api_key | string |  -  | 1 | OfEaXWER88j2yF648ndO6p3on3Y0Q9XEoCPmzteHBxK9dQemerakRdIegHf7QdMfPBBo4Q6FnRPAH3WWv7gmkZBBGQIw3uLT5niadpPAgFbYJ8UefaBAadbQ3Tn7o91uwkEKJtl09wZSET6U4IueVF5Zzs7YC8s8t6SdAddJKcBp6IjbrNqmtvm3Yt1ACtJ5ACiaQwUAIw |
* Request Location : path
> | Name | Type | Required | 
> | :--: | :--: | :------: | 
> | petId | integer | true |

    * Request Parameter petId
    | petId | int64 |  -  | 1 | 1522468337659936768 |


  

  
  
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
    | orderId | string |  -  | 1 | IBoI1mb7ErsNqrkPxgKeBzqkR9xtuNfdpDVq07xFy0sYrMNZ3ydF7D0ZNxtilIwLmscnzJ28Kv6bhUblto0B20AQy3 |


  
##### Operation : delete
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors

* Request Location : path
> | Name | Type | Required | 
> | :--: | :--: | :------: | 
> | orderId | string | true |

    * Request Parameter orderId
    | orderId | string |  -  | 1 | UMFF97RwGByPl3VxlQIGj7HU9HuZfy89kNPuVH0CizrECnbYdUFw1mqa4VajujtP6ij20jEiS5Xvt9uG39d4wEfAzpU3JnSPGbSGvwZoCWT55 |


  

  
  
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
    | username | string |  -  |  | ouwvDWZn7mGI4r0ZsOEIIncRwFM4Fch3GNzkKyHRVnzZPzYinD160dXxTKCyWTCDHbXrJEjE2SESsDaQgbXhpVPiGrRDltg2EeuoTN3VGHN9lY0B9XTzTIRzaJcvctyRH3fARjwy1kImiIYsGR1zzT9KCmgPPOGwSW7 |
    * Request Parameter password
    | password | string |  -  |  | gDihX0EgICIpuJZ4D8Ogv45kTMRLJYvZCNgAOUQxxyW1iW5V5TbAXhUR3LCMK8MnV2XKXNhumdwEaBAfvMPt3Kk6v |


  

  
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
    | username | string |  -  | 1 | Tg5FD1IBLGo2bKgHpqjZFOLuhOeBVKyP1DvFEegqUFs5pJNO96OPUzkcozOjkm9l0E1FSh5NWyTmhGaqNYgHyAUW9Igt5qP54QK |


  
##### Operation : put
This can only be done by the logged in user.

* Request Location : path
> | Name | Type | Required | 
> | :--: | :--: | :------: | 
> | username | string | true |

    * Request Parameter username
    | username | string |  -  | 1 | 7QL4oEqGkB77AnP9XK57smAxMpDRfoOnezsDeTjyvrG5OwfMgkTJHtgtTTl9hawwKZ9YStxnUdtIKIv03oJKS0eLUAUbKrIuqRsjlZGfdaYXStYVSIGKIVvCvpOfRwJiocBJbhZprYmkslgk3W4LRAon0dCRJm97yKRK2Q9uPwOhR5BU1GGTg4ggiT71fh9O11y4SIzHeo |
* Request Location : body



  
##### Operation : delete
This can only be done by the logged in user.

* Request Location : path
> | Name | Type | Required | 
> | :--: | :--: | :------: | 
> | username | string | true |

    * Request Parameter username
    | username | string |  -  | 1 |  |


  

  
  


---

## Index

