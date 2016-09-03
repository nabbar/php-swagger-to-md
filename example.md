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


* **Request Location :** *body*



  
##### Operation : put


* **Request Location :** *body*



  

  
#### Path : /pets/findByStatus
Pathitem tpl
##### Operation : get
Multiple status values can be provided with comma seperated strings

* **Request Location :** *query*
    | Name | Type | Required | 
    | :--: | :--: | :------: | 
    | status | array | false |

    * **Request Parameter** *status*
    
	Status values that need to be considered for filter

	| Attribute | Value |
	| :-------: | :---: |
	| Name | status |
	| Type | Array |
	| Location | query |
	| Unique Items | false |
	| Items form | [ [Object name](#ref) ] |

	Details Items Object
		* **Object 1** :
			
	

	| Attribute | Value |
	| :-------: | :---: |
	| Type | String |




  

  
#### Path : /pets/findByTags
Pathitem tpl
##### Operation : get
Muliple tags can be provided with comma seperated strings. Use tag1, tag2, tag3 for testing.

* **Request Location :** *query*
    | Name | Type | Required | 
    | :--: | :--: | :------: | 
    | tags | array | false |

    * **Request Parameter** *tags*
    
	Tags to filter by

	| Attribute | Value |
	| :-------: | :---: |
	| Name | tags |
	| Type | Array |
	| Location | query |
	| Unique Items | false |
	| Items form | [ [Object name](#ref) ] |

	Details Items Object
		* **Object 1** :
			
	

	| Attribute | Value |
	| :-------: | :---: |
	| Type | String |




  

  
#### Path : /pets/{petId}
Pathitem tpl
##### Operation : get
Returns a pet when ID < 10.  ID > 10 or nonintegers will simulate API error conditions

* **Request Location :** *path*
    | Name | Type | Required | 
    | :--: | :--: | :------: | 
    | petId | integer | true |

    * **Request Parameter** *petId*
    
	ID of pet that needs to be fetched

	| Attribute | Value |
	| :-------: | :---: |
	| Name | petId |
	| Type | Integer, formatted as : int64 |
	| Location | path |



  
##### Operation : post


* **Request Location :** *path*
    | Name | Type | Required | 
    | :--: | :--: | :------: | 
    | petId | string | true |

    * **Request Parameter** *petId*
    
	ID of pet that needs to be updated

	| Attribute | Value |
	| :-------: | :---: |
	| Name | petId |
	| Type | String |
	| Location | path |

* **Request Location :** *formData*
    | Name | Type | Required | 
    | :--: | :--: | :------: | 
    | name | string | true |
    | status | string | true |

    * **Request Parameter** *name*
    
	Updated name of the pet

	| Attribute | Value |
	| :-------: | :---: |
	| Name | name |
	| Type | String |
	| Location | formData |

    * **Request Parameter** *status*
    
	Updated status of the pet

	| Attribute | Value |
	| :-------: | :---: |
	| Name | status |
	| Type | String |
	| Location | formData |



  
##### Operation : delete


* **Request Location :** *header*
    | Name | Type | Required | 
    | :--: | :--: | :------: | 
    | api_key | string | true |

    * **Request Parameter** *api_key*
    
	

	| Attribute | Value |
	| :-------: | :---: |
	| Name | api_key |
	| Type | String |
	| Location | header |

* **Request Location :** *path*
    | Name | Type | Required | 
    | :--: | :--: | :------: | 
    | petId | integer | true |

    * **Request Parameter** *petId*
    
	Pet id to delete

	| Attribute | Value |
	| :-------: | :---: |
	| Name | petId |
	| Type | Integer, formatted as : int64 |
	| Location | path |



  

  
  
### Resource : stores
#### Path : /stores/order
Pathitem tpl
##### Operation : post


* **Request Location :** *body*



  

  
#### Path : /stores/order/{orderId}
Pathitem tpl
##### Operation : get
For valid response try integer IDs with value <= 5 or > 10. Other values will generated exceptions

* **Request Location :** *path*
    | Name | Type | Required | 
    | :--: | :--: | :------: | 
    | orderId | string | true |

    * **Request Parameter** *orderId*
    
	ID of pet that needs to be fetched

	| Attribute | Value |
	| :-------: | :---: |
	| Name | orderId |
	| Type | String |
	| Location | path |



  
##### Operation : delete
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors

* **Request Location :** *path*
    | Name | Type | Required | 
    | :--: | :--: | :------: | 
    | orderId | string | true |

    * **Request Parameter** *orderId*
    
	ID of the order that needs to be deleted

	| Attribute | Value |
	| :-------: | :---: |
	| Name | orderId |
	| Type | String |
	| Location | path |



  

  
  
### Resource : users
#### Path : /users
Pathitem tpl
##### Operation : post
This can only be done by the logged in user.

* **Request Location :** *body*



  

  
#### Path : /users/createWithArray
Pathitem tpl
##### Operation : post


* **Request Location :** *body*



  

  
#### Path : /users/createWithList
Pathitem tpl
##### Operation : post


* **Request Location :** *body*



  

  
#### Path : /users/login
Pathitem tpl
##### Operation : get


* **Request Location :** *query*
    | Name | Type | Required | 
    | :--: | :--: | :------: | 
    | username | string | false |
    | password | string | false |

    * **Request Parameter** *username*
    
	The user name for login

	| Attribute | Value |
	| :-------: | :---: |
	| Name | username |
	| Type | String |
	| Location | query |

    * **Request Parameter** *password*
    
	The password for login in clear text

	| Attribute | Value |
	| :-------: | :---: |
	| Name | password |
	| Type | String |
	| Location | query |



  

  
#### Path : /users/logout
Pathitem tpl
##### Operation : get




  

  
#### Path : /users/{username}
Pathitem tpl
##### Operation : get


* **Request Location :** *path*
    | Name | Type | Required | 
    | :--: | :--: | :------: | 
    | username | string | true |

    * **Request Parameter** *username*
    
	The name that needs to be fetched. Use user1 for testing.

	| Attribute | Value |
	| :-------: | :---: |
	| Name | username |
	| Type | String |
	| Location | path |



  
##### Operation : put
This can only be done by the logged in user.

* **Request Location :** *path*
    | Name | Type | Required | 
    | :--: | :--: | :------: | 
    | username | string | true |

    * **Request Parameter** *username*
    
	name that need to be deleted

	| Attribute | Value |
	| :-------: | :---: |
	| Name | username |
	| Type | String |
	| Location | path |

* **Request Location :** *body*



  
##### Operation : delete
This can only be done by the logged in user.

* **Request Location :** *path*
    | Name | Type | Required | 
    | :--: | :--: | :------: | 
    | username | string | true |

    * **Request Parameter** *username*
    
	The name that needs to be deleted

	| Attribute | Value |
	| :-------: | :---: |
	| Name | username |
	| Type | String |
	| Location | path |



  

  
  


---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

