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
|  | string |  -  |  | y6oJU8n0thTXR5FOGBl58Gf5GjwVOEPmKd6EmuFPLzMDEssk3NqctFhaYO6MsV9c9gRvKxlw689KBC5EpvQTb839W9Wp56CfmtL706E6fORQqXvPsmJDvNNrXKR2RtheW2lX9Z4pOWgeTM4m8N0D |
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
|  | string |  -  |  | ofd73RdAv6yC1CG9ItiGToa9XrEK9VmxbzFerTOWZnz00faIIspCRzLP1pzalVIwvoLWhASgYrhZHrHqU6 |
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
    | petId | int64 |  -  | 1 | 7255613777846992896 |


  
##### Operation : post


* Request Location : path
> | Name | Type | Required | 
> | :--: | :--: | :------: | 
> | petId | string | true |

    * Request Parameter petId
    | petId | string |  -  | 1 | KvsVgOMPDdjoNZED3oE4940oZUX9ITRtojoE7buLoO9cNNQRcuVmzVKyQIIzBz2ZTrE1C9M1XWeKK4BXzxj8t4HjMqSn0VmUm1VZaI17EfSpkumT2F2vKKPwaIUbDh50i1ZsJ0Aogt |
* Request Location : formData
> | Name | Type | Required | 
> | :--: | :--: | :------: | 
> | name | string | true |
> | status | string | true |

    * Request Parameter name
    | name | string |  -  | 1 | BYau0PxwAhm7s41EIiKIBLI4uJES08GB6Q67GDDgVZno4p3MHNvjyen2X1VXaCzgsFn9j1qe1ND5dGSVtoe1CB4AD0yNC744Nse6tEkusYAFEsA8ROatpe43eCQRKUVxm9DQNYkgWVVBnvJekUIK8MNnpEe9zaGWkjM8i7oe2kPqPzFauoUDaI0zmfJVqpRLJE |
    * Request Parameter status
    | status | string |  -  | 1 | 1LigOC6esGUDaixNtfO3C3MxucpfV4aXPsdE5jTyZNba5J |


  
##### Operation : delete


* Request Location : header
> | Name | Type | Required | 
> | :--: | :--: | :------: | 
> | api_key | string | true |

    * Request Parameter api_key
    | api_key | string |  -  | 1 | yZLCBPo9jAzzwDJttcH7i11Q1O2bUM8tLU5nJtx247CALl4eyMmQNnHPcJ16v9zh4EFN8cPcksN5NSjmEGcs4TigDjm9tVqxA6kIjaVDCIIqA2MfJYINS03vjqEMm5jWbDFvNA8qjRQUTC9CBRptStZ |
* Request Location : path
> | Name | Type | Required | 
> | :--: | :--: | :------: | 
> | petId | integer | true |

    * Request Parameter petId
    | petId | int64 |  -  | 1 | 1651730884581130240 |


  

  
  
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
    | orderId | string |  -  | 1 | iKny0ngOpixkZGf3gF5M1e5FgsfJqwdIhBghZx5oQDIPjXTzDYlEdqkuSzej5r2n2iE1QKqGn8wG6pgKoBpC2J6VikeoMgMPzrQpbg6zpCgw2wgr8G3apa5Ivj7hzT |


  
##### Operation : delete
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors

* Request Location : path
> | Name | Type | Required | 
> | :--: | :--: | :------: | 
> | orderId | string | true |

    * Request Parameter orderId
    | orderId | string |  -  | 1 | 8lXyxeE6EhnajUrL27PcxZhfuAnMahSjCPR94wgINDT7ykSAsIM0H4fcFDYQUR9xH1GLxWtlAmt8HmJa4waMAqYg3X6YPgvwhciP8LaJ8DS |


  

  
  
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
    | username | string |  -  |  | b4HzoGArooKEPkj0Ynrv6M2PlxPguHXFMFfblPCKeno4HI4F6wbdje2ELRUfzSVlyaxU0aEfx3jfLoVRU65dk7R6YMmxFhTdsq7tALI8P1nApiskpxxKEpQDbcbQu44Xvbq5X9dMaBnATPUjns32STF36RUBVZyqbYw87KViljTf9OywhCy9vedC57d17MsiKZrSJnb4G5kPTSlauUj09wDeEQgLDJ4nIvgrSswyxQoqJKBe |
    * Request Parameter password
    | password | string |  -  |  | VeOrS36JjSm3WKLs0dksKT0Birk22yHXNvpFyvoSoKVluHNvU7YF1YgjpBms93pXyPC7l1ZJMU4hBRMwZLb1Ksl93HCdK1ajQNqbOpVBk0SVREsRqDTa6ej9WVmGXx0Okq09QVKaVC6NhyFHcyRiNbsJ7Pq5mqTGRUPIQASLcZzuyfbKO33BfwlnlMs |


  

  
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
    | username | string |  -  | 1 | cmo4heM7OFS1EsvcHHXvL170xsnSeQArdYwuciB0Xu1CXxPEeNaZOh0mKofZePqsOWW1fy1d33P0BFEPsPPh6PEReTQsJhUydRztqBGtFwtgb86EXWW4LAVZuLse2nMgflJFWq8BWBR8JYNHUJLGkGGPs84uwQLLcvr8VzKRbC0VANCvxnbS4RIw0M1wD |


  
##### Operation : put
This can only be done by the logged in user.

* Request Location : path
> | Name | Type | Required | 
> | :--: | :--: | :------: | 
> | username | string | true |

    * Request Parameter username
    | username | string |  -  | 1 | iPiJYdiJ5ul6pWU1rrpCkuu31uP31tQji93hnm0tQlzfithJVHmfbQicl8gmB6GUfJbC6b5WxFcP8uy4bVjmLCz6LPt |
* Request Location : body



  
##### Operation : delete
This can only be done by the logged in user.

* Request Location : path
> | Name | Type | Required | 
> | :--: | :--: | :------: | 
> | username | string | true |

    * Request Parameter username
    | username | string |  -  | 1 | cXQF3XKDFch4m9DWdMF8RSNXLGyegeesb48e2SSH5aMrkpoyc3G3Wt0HazWqNaTYf1dhU6ZZhLrBbPanSQrOkswu1tVODONTQ1aK8aKpWc181bvU1XJlqgQrJLgnA4gq6rbeCWEy8FGaQc4SaOeA452OQibrnsStU3Iw0m591LjSYoL8cZIh4K6V3hmrKeUFiDbjZhs12MT1aE9nERFICLEG307Of2txFFQEWiFZ5z0fe9DS1jBE4fk8grWvtp3 |


  

  
  


---

## Index
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

