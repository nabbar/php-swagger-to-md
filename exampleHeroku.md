# PetStore on Heroku
* Version : 1.0.0
: **This example has a working backend hosted in Heroku**

You can try all HTTP operation described in this Swagger spec.

Find source code of this API [here](https://github.com/mohsen1/petstore-api)



---

### Global Definition
| Attribute | Value |
| :-------: | :---: |
| Schemes | http, https |
| Hostname | petstore-api.herokuapp.com |
| Root Path | /pet |
| API Base Url | http://petstore-api.herokuapp.com/pet https://petstore-api.herokuapp.com/pet |
| Content-Type Accepted | application/json, text/xml |
| Content-Type Return | application/json, text/html |

---

## Summary 
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)


---

## Resources 
### Resource : Root
#### get /

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| limit | query | integer |  no | Value : 11 <= x <= 10000 |  |  |  | 11 |  | number of pets to return |

* Example of request :
```json
HTTP 1.1 get http://petstore-api.herokuapp.com/pet/?limit=11 
```



#### post /

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| body | body | object |  no |  |  |  | [#/paths///post/parameters/0](#testtoto) |  |  | The pet JSON you want to post |

* Example of request :
```json
HTTP 1.1 post http://petstore-api.herokuapp.com/pet/ 
Content-Type: application/json
Content-Length: 293
{
    "name": ", ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu,",
    "birthday": -1331046889
}
```



#### put /

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| body | body | object |  no |  |  |  | [#/paths///put/parameters/0](#testtoto) |  |  | The pet JSON you want to post |

* Example of request :
```json
HTTP 1.1 put http://petstore-api.herokuapp.com/pet/ 
Content-Type: application/json
Content-Length: 221
{
    "name": "est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci",
    "birthday": -779932363
}
```




#### get /{petId}

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| petId | path | string |  no |  |  |  |  |  |  | ID of the pet |

* Example of request :
```json
HTTP 1.1 get http://petstore-api.herokuapp.com/pet/auris+vehicula+ex+lorem%2C+ut+ornare+purus+ultrices+nec.+Vestibulum+elementum+felis+sit+amet 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

