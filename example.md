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
|  | string |  -  |  | 6BnP6pwS6rjE0TXYj2OlGYVT6kPHXtf34CTb2p48QoNQhKPANDVuCRnJcdq9GGdLi6Xlw1umphdH12iPGdjj5G2iTtrAaFmsMjOiliFKzSrBVJqBXJU3qXlkrNUBsh4fASxVacGK58l0SLBQvwUVuffW3axwrCL2ujYFvFqANLAGxcw2JrXdH |
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
|  | string |  -  |  | IYkfgLih19141EzozX5OWNNf4GZjb8tU7O9nAsFBBGFClf1Uc7J8UwoZcnjowNiEBr1bUHNvos8JH9EUgo3bVrb8PuwmhO0Tg25aJSG8lOS3XxXeV0qQsBZh6vDokDhBGmMpfsyAgqDeXAtTBUJ3vJlCeY0zCiaiF |
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
    | petId | int64 |  -  | 1 | 775354326934618112 |


  
##### Operation : post


* Request Location : path
> | Name | Type | Required | 
> | :--: | :--: | :------: | 
> | petId | string | true |

    * Request Parameter petId
    | petId | string |  -  | 1 | FO1pqZhCK2qiKD1hi5u55bZTyCbOQBavpcVQbcsWfTe0wfhPlMUrXTkwwwlm8wRyINoU0QQgJ5ggly6Gk08iUsOqYaN6GFEps3jsTaJDfZUAx0hS1paWSYmQ8aXPPCehFxKzHtdXt8y18PTaf3671tYaDWZsydKeLvOtY2qsaYt |
* Request Location : formData
> | Name | Type | Required | 
> | :--: | :--: | :------: | 
> | name | string | true |
> | status | string | true |

    * Request Parameter name
    | name | string |  -  | 1 | Omt4pzbr3aBG6B9FPTTAoI4nKuQUtjdiFGm5gywjI80OKatz3nas5eQQJHKc0YvGESLVqif8qgXaqrKuOUXU9OKSvv5wtAc8sY4Tgj1HAZR0qBvfws9FgUxMpCiTdv2Gu6zLqBs0Ak01VvgsYq7fkF1KikDwQFclML6cnycYSdZOIggHGoW04YKmjoSa45vQRB3e9fc2sbRbs8T8wP8BOTY7iRhm |
    * Request Parameter status
    | status | string |  -  | 1 | MdNog2yweAYqsaSA307T9IH3GOlx6ItTVhhcjPIyqHZSRRsVSzO2iw5Ylrwra0l5hCiBs09SH9Lz0dvTNkW6Q15btBDDBYJTB1v |


  
##### Operation : delete


* Request Location : header
> | Name | Type | Required | 
> | :--: | :--: | :------: | 
> | api_key | string | true |

    * Request Parameter api_key
    | api_key | string |  -  | 1 | 2FVKOHjPUPII9EPZGUbawPO8Ox2pzxsCcom15GQ0vzJEeyEUtQ5ZGT7ur9T0HmCUKYVPFLQalzPz7uuBlzA1sIwUSpUzLxtwwpmbbcmwLc5TGzu2953COzwGZrgLYKhv9EGkQ3RBfWvWw0YF52iTCOABfQneBFJLjq59tXLIThEqhD6nFohhcRTsIhGkWq5gQbqj8c22tHsLky8 |
* Request Location : path
> | Name | Type | Required | 
> | :--: | :--: | :------: | 
> | petId | integer | true |

    * Request Parameter petId
    | petId | int64 |  -  | 1 | -1764073201681301504 |


  

  
  
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
    | orderId | string |  -  | 1 | 19CZEFrAGosArAp5jzH0hjcU4R0PQjq |


  
##### Operation : delete
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors

* Request Location : path
> | Name | Type | Required | 
> | :--: | :--: | :------: | 
> | orderId | string | true |

    * Request Parameter orderId
    | orderId | string |  -  | 1 | t3R8IiIpHbZ9Lpe5ZV6gfibj9c8ZwzR0CI8k1RJI2JSO96T82ZpihBBqNJqkjhkV0sg1j0KmKCaTJ42M3s4l3FMRpdbJvvEvYVwiWhEHTPBDTDpX5tj8960zjbiOHXjFSQXP8Cw2r7FlL4jQyD |


  

  
  
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
    | username | string |  -  |  | p4npK0kG8fQY20E6gY6oB9CtvYdgMjxboUB8VWO3bF2dGHkWFqlgzYJ5WXlJhSUFNvOIsDMDjPQZwbWcBhsbgcgcaCWrvQ7imV1OzNsSCjR9uNl65Nhl0yybauCFlKYHGZwfNZ7piZzNMUTRIbdJKLUUfxABhzjXyQcmPkL |
    * Request Parameter password
    | password | string |  -  |  | jlV6fPYX0bGKWBFc8gOpP7noXAKMUwUeRQk6Fi4GtLqqm6DumrUcyhAvRliMRd0J3lQIDUo6GPx3WaxjCsvbJ6GBrZojcp2fKTYnOmuuc1x8c5rPxX0h3HSvGhOSGR8qK6Nyth3FjBOwGglddlvg2nMJEBBksKLd |


  

  
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
    | username | string |  -  | 1 | yMjQPZ9qOG741khnQyqdl9SWLdpvYCmxoFneFxFudMyf7QCXp3bKc4GYh5tgIQN7vblbI0FWNebU4ORuR3e47V2p0wFImtPSFb4ocKkZYwT3kLxcOLgWHjlHP1qcug5as9yETSESoyVJjtV8fb4WuqEkr4wWlC6NLEsFx6xVEtEYWz7bLb7fCLA3Q7ZcJ60vKsahyIddbSb7rijdurt6d393b9gUfgq0IAhhivutnFBPXU2smvyzzIDK |


  
##### Operation : put
This can only be done by the logged in user.

* Request Location : path
> | Name | Type | Required | 
> | :--: | :--: | :------: | 
> | username | string | true |

    * Request Parameter username
    | username | string |  -  | 1 | TF8958SGq9YVDsij48hYaJkGiUf1x0TqF2ALasrABpwfSPyWXQV7zfNSa3TH3N7JPIuZaVAMl61dVA9Sq400kOSuRMbVzjEo18oc4ZYp60C1AMU1QV1aJUFBGRxfabEck3op2mO8mraXd5Z400e |
* Request Location : body



  
##### Operation : delete
This can only be done by the logged in user.

* Request Location : path
> | Name | Type | Required | 
> | :--: | :--: | :------: | 
> | username | string | true |

    * Request Parameter username
    | username | string |  -  | 1 | kryLwOGH5oXEe76yQdVkeUf4gcd5vXKQoiBU7hCcGARVHYtxcoSri7vzkIEPFoG4HhZPzB2fbTbTSEq42ivlq0UKJyAoXgtFxsu73wnfqy8icznfRTAiUu3D3D21TvHrXbz1IWg9vpsHYQWQJx8D1ch5Pj6JONbMZKOIH5RcukUsaRjUosxqEPvt8CdXpoKp9y7QDZ38kXBuPUodmWD1L9vULIRb7BAgaI7OHaX28ywXtV |


  

  
  


---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

