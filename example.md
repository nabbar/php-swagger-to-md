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


* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//pets/post/parameters/0](#testtoto) |  |  | Pet object that needs to be added to the store

* Example of request :
    ```
HTTP 1.1 post /v2/pets 
Content-Type: application/json
Content-Length: 658
{
    "id": 1693893921395965952,
    "category": {
        "id": -3326825188661657600,
        "name": "DsqTkg02g3ny8pIy2tBA3XVw0a6VpTC2m3VGjWJA0689wRHzki9og4Vgf1bEVOHhRDYbAHLAOTJlKqU5J3u08phnrs2mhKE9nCkXj5y8ZhtKInPsqjszJJXacZxuJbD7NY474Df3UI"
    },
    "name": "doggie",
    "photoUrls": [
        "D6D5wXx6Hh3Rt2oYMABToAYvEBLIwuw9Aaf78NdP4"
    ],
    "tags": [
        {
            "id": -8655244534717874176,
            "name": "j5w5F8Y3IXznzk55PCfpMuwUhJKlZrUiwqocznghkPETaKZZmep9IV40FOmFggYMHmZgKfy45dYgXXgkbGuUByUhngWExVrehqu1G26Mf53d2jye029BB4TZlPDSL463vB"
        }
    ],
    "status": "bEbYUg18jlGylIHXkLQj6GXYr15uwHAIlLGg2Iom34UpNBm8mdrsUpr"
}
    ```



  
##### Operation : put


* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//pets/put/parameters/0](#testtoto) |  |  | Pet object that needs to be added to the store

* Example of request :
    ```
HTTP 1.1 put /v2/pets 
Content-Type: application/json
Content-Length: 765
{
    "id": -5639412503415881728,
    "category": {
        "id": 78898364543926272,
        "name": "LG7jgv0n9hd5biZw5nl5fcu6eOsiXuUJa22rx3OGk2LwkL2p8ovoBZuQNW8Lr2uC5w4CzSjUU5rfQtFYSa"
    },
    "name": "doggie",
    "photoUrls": [
        "t9SjXPsIgvdTAJXcjQveLAF1q9Gp1QNu0FOXugGLLUFlDDyXu3bfEQg5ZWv0NivNYkLtAsfmmUI0ygX2k8iYZy4YvAZiSv6RPRkqjANGuvG3LD55Mn4LW9JrJ"
    ],
    "tags": [
        {
            "id": 5077590971047215104,
            "name": "eRt4IOv2oiITNpWz22FOqKAmTkOD3zfiqJn9xScVaVPXkMwmObbfVLBP5qs90HrqrOAYHMURHKP1wlokxAztmbjrCLBCt33USETzqOq7yf94Byp98YCuaWWNHyqbBt6t7Z2yNs"
        }
    ],
    "status": "mIQqjoPsxO52Z1YMJwcV8G1BN1DmP62bOSB8grAOfGQeIO0rldmtTo5HpJ3eP6pEY0Mfrn3H3TWLIWd4aAy3YDKomOCcU1QS2C8uZbc358PO53SfDqiC430rRCDMEtEH6Nc6Zo94w"
}
    ```



  

  
#### Path : /pets/findByStatus
Pathitem tpl
##### Operation : get
Multiple status values can be provided with comma seperated strings

* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | status | query | array |  no |  |  |  | [#/paths//pets/findByStatus/get/parameters/0](#testtoto) |  |  | Status values that need to be considered for filter

* Example of request :
    ```
HTTP 1.1 get /v2/pets/findByStatus 
    ```



  

  
#### Path : /pets/findByTags
Pathitem tpl
##### Operation : get
Muliple tags can be provided with comma seperated strings. Use tag1, tag2, tag3 for testing.

* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | tags | query | array |  no |  |  |  | [#/paths//pets/findByTags/get/parameters/0](#testtoto) |  |  | Tags to filter by

* Example of request :
    ```
HTTP 1.1 get /v2/pets/findByTags 
    ```



  

  
#### Path : /pets/{petId}
Pathitem tpl
##### Operation : get
Returns a pet when ID < 10.  ID > 10 or nonintegers will simulate API error conditions

* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | petId | path | integer, formatted as : int64 |  no |  |  |  |  |  |  | ID of pet that needs to be fetched

* Example of request :
    ```
HTTP 1.1 get /v2/pets/3422372023265918976 
    ```



  
##### Operation : post


* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | petId | path | string |  no |  |  |  |  |  |  | ID of pet that needs to be updated
    | name | formData | string |  no |  |  |  |  |  |  | Updated name of the pet
    | status | formData | string |  no |  |  |  |  |  |  | Updated status of the pet

* Example of request :
    ```
HTTP 1.1 post /v2/pets/LllJCHJmhrTr89wu7jPjS15elXzLbqLXL6HoOrK5SEx1N4vUokegmjuHg4tsveqhl7Fayqfr4MsRRYMfj0vFj0nA5Q2A4tRqAxA9YPA2C3Uu1HJkHf01gnCldFWh8OIIliRk8smKwhexYYSGdSItfkPsZLK7zsQVLIfTaCEGUTeSR7z5ZhzfBoIB9sIJVyFHhUArwe8q7njZ 
Content-Type: multipart/form-data, boundary=57cab56e478fd
Content-Length: 8
--57cab56e478fd
content-disposition: form-data; name="name"

T4ubDJM1robU6VQFAxXu8p1mxsuVMtqGxURbEEc52o09kRPUpMpxbrTJUnEHR4noZezDSMJVbK4vBUp0GPyRgsAbPfSHkf5juFWnrFiDpn81hy2YnAQE2rPSGIz0XFk
--57cab56e478fd
content-disposition: form-data; name="status"

khPMW8pmwyoO6qMu1C843YXKGxLEd56xmWkj5KGBi4qpvcTxP1CT0zDG7okkurSRndasXR4gVu
    ```



  
##### Operation : delete


* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | api_key | header | string |  no |  |  |  |  |  |  | 
    | petId | path | integer, formatted as : int64 |  no |  |  |  |  |  |  | Pet id to delete

* Example of request :
    ```
HTTP 1.1 delete /v2/pets/-8673604802648735744 
api_key: rHyZxABqAb4gitBDY2vPpI0SGRXWNsBea9
    ```



  

  
  
### Resource : stores
#### Path : /stores/order
Pathitem tpl
##### Operation : post


* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//stores/order/post/parameters/0](#testtoto) |  |  | order placed for purchasing the pet

* Example of request :
    ```
HTTP 1.1 post /v2/stores/order 
Content-Type: 
Content-Length: 201
{
    "id": -3405965462943563776,
    "petId": -5991453380482957312,
    "quantity": 605804004,
    "shipDate": "2016-09-03T11:35:10+00:00",
    "status": "Ay1w0GnkFGL5gWCT67zGqEs",
    "complete": 1
}
    ```



  

  
#### Path : /stores/order/{orderId}
Pathitem tpl
##### Operation : get
For valid response try integer IDs with value <= 5 or > 10. Other values will generated exceptions

* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | orderId | path | string |  no |  |  |  |  |  |  | ID of pet that needs to be fetched

* Example of request :
    ```
HTTP 1.1 get /v2/stores/order/iq 
    ```



  
##### Operation : delete
For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors

* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | orderId | path | string |  no |  |  |  |  |  |  | ID of the order that needs to be deleted

* Example of request :
    ```
HTTP 1.1 delete /v2/stores/order/YQKyoM5ossJ89veprRjxYTeoxGmAZNSXDCv1oBqR49ZdEdD65XE3QSroyOYyBRveu1fSCGKHQJUvXyB3vg6m8yKHmJfXALb4MrXp8H6Yr1tpz4s5kzrt7bbuVqrvcDAY5xodfubHvE75Jza49CxhOJLJadfmQPlWnJ9CdljJ 
    ```



  

  
  
### Resource : users
#### Path : /users
Pathitem tpl
##### Operation : post
This can only be done by the logged in user.

* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | object |  no |  |  |  | [#/paths//users/post/parameters/0](#testtoto) |  |  | Created user object

* Example of request :
    ```
HTTP 1.1 post /v2/users 
Content-Type: 
Content-Length: 1028
{
    "id": 5523399715854483456,
    "username": "zBSiwOcTcOAZhiGPzw4xpdrsAhvniv0S6TaDHnwTc7TtqzjZ6owwBXYbfuzx0zp7sAK9Yg3anWEOwXNClk9",
    "firstName": "i88xCH5DhuKJ5uT3LWe9TSXpQL2b5c8okgVXX0AevlYBPRFBOTKIMI7CtaNzmVXHbTE9UfoqAn1qfG14AMMmuUYY4LxrHv8TpM3",
    "lastName": "1sKCPM24t383PVpkPniU9QlQltKKgN4ifPU4BW940i7Qdxa3UtX4jiVFMFq3svlHkfMVcW0cf82tFcwAGuEZMzEze4CHzXpUdbQp8QBnZEQERnfxRTwEtbdIfQpPOOJ10zq9q2wpHn4yLj5CdChGNup3kOT8DCaEcBNDEk2lI6",
    "email": "tpY6DBnjoSIsdxlmbYwQa7ENMYQ7HW0amZhZAEjZw2rKAM6MKCCVKgJwfzEWwE7TEoTf2cezfGjQsqCd2e9NvSkKsYGYDNRibLxeYLOdr84UyG8BVhoqaJaCIRBmFtEReb6cXUqp2ukAbsc6KAwUkHx2y8peC35Qfb3c6uC9YWK9pWg9xM4RtBU2KjhmnmdCygPEKrN",
    "password": "nyTMu9W1V0SpCNsn7JJu6X7EdWjYn7HLFBy9KubGv467RzuYietpbA3pwnnUv5FaGekrIv8ezemrNRq65TvhtzH0W5UsaACRPXjysrM2F8ttZTz5M5ngE4hB9c3kNGcCDva6WX8C5B55vFbiKyzpCQ0M346QKisoNDuKACmGerMJ7X1RvAh8rhUum0k7jNv",
    "phone": "r0R2CdJQFvANsCEYcV6Ed08A1tHlhdsIdjLQxuHdZh0rTFq6BwLOxTpyn6UEkmnxG8oeC5rBms3g7tnI08xx1X6p403onrW3zkhbpJNMbR2j",
    "userStatus": -607691212
}
    ```



  

  
#### Path : /users/createWithArray
Pathitem tpl
##### Operation : post


* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | array |  no |  |  |  | [#/paths//users/createWithArray/post/parameters/0/schema](#testtoto) |  |  | List of user object

* Example of request :
    ```
HTTP 1.1 post /v2/users/createWithArray 
Content-Type: 
Content-Length: 1185
[
    {
        "id": 8587149327183380480,
        "username": "PNExkRmZQ7NVdhZ09MD8fZVFziXimCEbpiIJ94IZbwVpNUqXG35V30BCjyUGazRARzj1E21QzWfmQFkxJqtMq4pKCjqNShnKRHMvJNmjKCGBh081qCNRGcBjw27pku9bcVHWJ3ftFV5XVdYmPMdwYPPuRWTbr3nDZ4zJ8OcOKiMFwL2lxfSw5H1WEV86YvJYAjHI8UxScjyI4A4BQW7VE9Sj40p2v90",
        "firstName": "sIOBCltOF2wJCBltxtocCgvGhUJN4KSwsH843BTIEqsg1OJzi8LVpgBGbltf6mMy4UD7wxQaXjrZ8byqjjlJAXpLjT0pfNXkHBse8jp6DQ5L1DblWx4xuuiNnjcD6aYOMq2UJr1mi68jJjFGRKdmewaCPngVxe",
        "lastName": "kEMfoegLwmTQ6dwN4g0qvxA7mXnivC2QgP5F4lqBHksOxYBCeC2J9DRvBfO7RQX8G3NLoem6yOU6NvI17LLgpDM1SA9Jr6R89FTyTgEs4zyR4hTc2FtsiftbQCUhJMqTrjrlz6NEFmwKDpXG5q8oGCzwetOXfeRHyi28pQM5ciPQIMxOdFcThLpwfeuvslc",
        "email": "De934V8heX7WKELXkXRCJh9YvDtYYFZCU9FZ4NgjLogv21tnYl0H",
        "password": "9F8M96KP6mKf2JkPZDAnT6qUAOSVPAxYgGLqMvfSSZ8UJsKI6k6ZrxT1lMWanu9DaU3XqjQijYd2rXKxiRwJoqKKdHVBc4enZikpCbIVaVXBTI9bzGUY7FIlnEWzJaXIti85tQ",
        "phone": "DMYfGGpRf5MdcrWxPBtokEl38Ebe72fLOd1uTqm9v8nIAkgpVKOfpajxOuMWw1HleIP89chFkEnVYElUoa9Oktm9X85t9NOowEwFQNkbsI7qnslMCvAXYX6V5cpfZeDwT9cJXxVpf2QDubp7G04EXaA3nZimdVT655Q2CLsSOiviuVpaVuPTEpW1oeoCahJgnzjZlLR94msyi",
        "userStatus": 1602244051
    }
]
    ```



  

  
#### Path : /users/createWithList
Pathitem tpl
##### Operation : post


* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | body | body | array |  no |  |  |  | [#/paths//users/createWithList/post/parameters/0/schema](#testtoto) |  |  | List of user object

* Example of request :
    ```
HTTP 1.1 post /v2/users/createWithList 
Content-Type: 
Content-Length: 1053
[
    {
        "id": 6885891559804370944,
        "username": "BT9I1TP6GMzswkkvH7JjJ3EdiKEfunp5hyNjrDp8pYBWiVr02ajLeYZxJDMd1cjiL7BdK1laZX6iSyiVJCGXAGvkkiyluREgZgtKhOVhL1zEzR",
        "firstName": "itgg4WLog3WCyOhOOxizP7u6TvFx5x7o0nF5kqtBuqe3fvS43aDSh7YaDEHJbO7ccNhxdL8IbmLrRDvV",
        "lastName": "9N5hMfUqXEBMLNYz4vMPEv11htTVZOJ8BOpn3jN1XpNJcMihi57WB8XSCQNBFwJgl8DosrqqQda30tkizrfaAd3c4QNJnxZIGD784xzVLKYLdi3NKiXkv1xzRkieSiXyV4G0BgVm0U7edb1",
        "email": "uZiZ0PzRaS62a4A68h6Kx27yWfMaqO7UNpUNeuFpmMrxQ2DZkKJRNQqJ5dTw11rOrmBFQh5d3xKUzoTT8CLVtbFzpz6qAxe1UQHK8NXbkI6T6ZMfCya5KQF9pLz0jO2dEKYMxWYRE5LL4y0G6aMR0s0",
        "password": "dArxouK3eJPMFOEkTq5YY5F5frWgUXH7x9FVDqYR9OEPDi9xJevHjaNzCKQwHyEeHjakJ8cTXQIA9R7S6DApOnZq7PXPnC34WeoFmBzjrhUB92tfF4EtrEUztRoRusWqGl63WFnnXhZ6jslYw0sYEmy8eW0IpW96hf9eVwCSNBY74k6AlyzZV78a48Su52AnhJBcgd54O4bToitKR3KMbSWg1PK6Rkt945",
        "phone": "kiro7wA0VSuFJypwJhs0jiKp95Tj9YFuh7SoDtpymUe5tDCcV4denXEw2xQcvvGMCzbg2BPov3uYG6bCboQymu5o2VBxrhk4QvkT69iCdNBTTNw5cnEySKXU",
        "userStatus": -1099039153
    }
]
    ```



  

  
#### Path : /users/login
Pathitem tpl
##### Operation : get


* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | username | query | string |  no |  |  |  |  |  |  | The user name for login
    | password | query | string |  no |  |  |  |  |  |  | The password for login in clear text

* Example of request :
    ```
HTTP 1.1 get /v2/users/login?username=6QMbGhvAoFS1SGCMzqiFCFkby48sJHUQxG1eYxPmcHo5n1RXraD4QXfo1oRL6LCDrESpbHMopatNblLDwoHnmWLolC9roM5QqXfBE204duRpPC2m1JJnGvL28VtwHym8wCKbFKfSe6h4JkrK3a8KFTMOPgkxPHFlkpwZaLRpS9uBtVmxpassword=uhLn4zdlULaCqwWQ2W1OOqHXUiqQEYV8gHwkhKGcvQPWmMNpIOewfVtadU0SSW18EytVj98O0XKnJyMsm0YBVsM9nM2gJ4pnDSjW2rK3pvq 
    ```



  

  
#### Path : /users/logout
Pathitem tpl
##### Operation : get



* Example of request :
    ```
HTTP 1.1 get /v2/users/logout 
    ```



  

  
#### Path : /users/{username}
Pathitem tpl
##### Operation : get


* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | username | path | string |  no |  |  |  |  |  |  | The name that needs to be fetched. Use user1 for testing.

* Example of request :
    ```
HTTP 1.1 get /v2/users/3cBqdA292OjqBmGkq6I3Z1Z1tK4Tgv2jIEKVeM5hApIbLowbufftgfvK0AEg5GANlkJz6PRHezTZYpbtEqXVGtGG3kX91xXmRGWYvNFJnyJmYUPClNy2gfIkzFtBdrX57T3DHIn5h7rf1hSm4qpkG7EgN8R1zO6HI9lqSJw9QXoSegfiHEDoMiEzrvB1kHI2R4tJOZSEXhwbyLugq7Ec 
    ```



  
##### Operation : put
This can only be done by the logged in user.

* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | username | path | string |  no |  |  |  |  |  |  | name that need to be deleted
    | body | body | object |  no |  |  |  | [#/paths//users/{username}/put/parameters/1](#testtoto) |  |  | Updated user object

* Example of request :
    ```
HTTP 1.1 put /v2/users/iLRNnS74BaVFEFtDy8APFMorgERnj3NBPEpcwwh8HdNlShZqqAg6mExCjp0CtOejtDw0aN8S0WdTddjENAKafiNzINbcCqv5316ePe6QbkJpx33lEOvT7isP6E1J5xO9zVnoauflOZKm3NIHCeBJw4yDJAmO7bXH6l5gPlBEkm1o9K6LYHvvM38wEukMGitMEz3uUF9f1aDbVKXTssoewwKa15WIoqv2Zy 
Content-Type: 
Content-Length: 1110
{
    "id": 4567599605063090176,
    "username": "8QQHMkAFYFDfnrjzodj5tIvhcsoxQSuYJlGvFgbDVOTjgcTEpcKSVg98IyGyqbx9wdFctQQpFJIVVCzlOkeKAoSiXyQnJnxfBds53iuI1dEXPdjEyxo8WhrTPhhzFPPh2hm6zRPB5tyUHSzfpYnmfPf46xEMmt3oKqukhkVmNuhumQKMP894Xo93VNQihUG1kbmCviZjNg",
    "firstName": "a7xWWF61CuaGqXxIespgNBDp7WoqJFeTNMQJrWK4rVLSTjB8L0pyC2YJYn9I2nBParzBokGPfsH9LihwjG5VJ3FIqOqt",
    "lastName": "1jmtTYRdFHt7oCTHUq1AvXkzC20rstEuN1YGZPUFwnNV0HDU7EuDBOcdRdEkHjOukMajC4Z9sN5suImBnReYGrcyERSlaGQut0O55OeyBj152nHpfVoWnBu1tmnD3d8weXCkLRSmbTsdh9Dx51tsCYu5kRJo5SUjPwEB",
    "email": "wYzqqMIApgFrJ73IC93tTrzLlSBSwcg3aPuBBdb1tRsdZwVBGY5zpElLwWD39U7kJCVlP7niYPvXlqy2pEBOiWzPTdT370nRCjdrqAKppfnLGWN5ApUSmuIfHBjPBGHeZUFqupQUFdGm9urKUmCgQlwyWPoxv5LvZrWuRMpx05TaAlUuHxLySh6O7vmDA88AA55rRuZRAS1bdWGVtrtmIAaP5wsGEBhe",
    "password": "mGyRGqszsDNojISKcetMojSVMyAoQP5cwD4",
    "phone": "3wLwayUugNft1Ifq27mPGWdwLiJhWNu0kfwvNrZ4eexgXNG0V2PCZ29KkS2hGwh1MNwAewFtKdJI1qIWtxysAIdVAgchNtizgO9vlPY52HO38w0B4z4EhhzRxL9kerUug4ZBTYHWFvZO20p6ztKQLjIj5RDjjyOzCObwMSssosgqsGx19hSVBBeGsS0MqPm2Dxypq1RPt8gVONXY4QTGr8n",
    "userStatus": 1720340361
}
    ```



  
##### Operation : delete
This can only be done by the logged in user.

* **Request Parameters** :

    | Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
    | :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
    | username | path | string |  no |  |  |  |  |  |  | The name that needs to be deleted

* Example of request :
    ```
HTTP 1.1 delete /v2/users/Gqc2tPA2f137Qxf6t4Tr2YhWEI41D4pkvCnZrX2HZ6PQD5X69RycPP9uydwbiVwOxTNZQQHQWwGzBEGLveXl46QCkmODikrQdfQ45xV24BBGgirLxp6BwXdQj2uCmVsAbiFhQAjVbVBsd2dKsklYhzPBBjdYfFyqYdIPO1K0Wls9oFUR0gQiPFTrZ6peMYFLcnA0pl0mHsw68qX9GNrwtlXsrnHemnZy 
    ```



  

  
  


---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

