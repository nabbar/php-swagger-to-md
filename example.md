# Twitter REST API
* Version : 1.1


---

### Global Definition
| Attribute | Value |
| :-------: | :---: |
| Schemes | http, https |
| Hostname | api.twitter.com |
| Root Path | /1.1 |
| API Base Url | http://api.twitter.com/1.1 https://api.twitter.com/1.1 |
| Content-Type Accepted | application/json |
| Content-Type Return | application/json |

---

## Summary 
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)


---

## Resources 
### Resource : statuses
#### get /statuses/mentions_timeline
Returns the 20 most recent mentions for the authenticating user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| count | query | string |  no |  |  |  |  |  |  | Specifies the number of tweets to try and retrieve
| since_id | query | string |  no |  |  |  |  |  |  | Returns result with an ID greater than the specified ID
| max_id | query | string |  no |  |  |  |  |  |  | Returns results with an ID less than or equal to the specified ID
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object
| contributor_details | query | string |  no |  |  |  |  |  |  | This parameter enhances the contributors element of the status response
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/mentions_timeline?count=DfRvzaxzjR4XxgnwRlA8UVq2ACsXfTsT9koIvWhOOmMlD9SuvtDqp3sZGUXWOpPXKeGfbX4ZkQkXZdsvG5V59n5Pi2L7rB4cQKs1Iw03nl0nysSfyNkHbpwtsiATUF6KqyM85Mbs7cPGFIWdvgUGGra9KL2Eq9pQHcZMZae6m4N1MJfi09ZHB9QlUT0l2qbKCaxBlLIIQwKDgZVh9UYL4P6YJ7kLyvwbG3N2Pw&since_id=F2vijveAF8yqcoxb7EvTc1poItbLiHwYK2h3xvDcEcDRBa2IOyC1A1pjvB4OiBM2D46bzJoeW15xb7f0GR1gTrzp2E&max_id=kf0nS4t4EdsS9tXHE5XEMPG3J8D8ahlvxmTqqnu4AWXKpVr41pINepRXxu5IMrejN7Jeudj59gPzchDdGm1UMSSjnY29pgtdncrSqKXA1N9d4MrL9tGVmyfJxhTXxmaVzCNZnLzoyICDv4pFx5AUEPEc6x9EUjAtWosj92IILkmhpLWWRwQwlvIs2R7WbHq75TqfV8XHtjYS5UPXqGtMbcf&trim_user=3mae4Bl9uMpqUm7nG5gMZ5JqLdcWpratOkISV42qQrQLOX9v2ph2u1sgfEcE6m&contributor_details=VHQNDUQ3KiTw6RFCT4UVzWnQb22Q9pY47OSKIJOt1IZ8zFKtKFojBM9MPcCYCA3JpVu7EiBG1BOAgz30eskPftC5Gf4iQ72f3xnIPYoRzcsQL&include_entities=Q0YaQeEsjkIoDyvGOydbg3aFUKRmADSqDRAu6fXqAFOdejU2S7e9boO69GsJjlaXdLsj0pJA4yOiRIlKQzT2YI87oARIW1G9N8tOxcoCKdVCWgnMPgPNZXVnxM6uOMDBV7ptkO5410HXh4K7lzUlwQI4CPzqCd2xkr0Ef6Jh7qeovZvRzqc5 
```




#### get /statuses/user_timeline
Returns a collection of the most recent Tweets posted by the User
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| count | query | string |  no |  |  |  |  |  |  | Specifies the number of tweets to try and retrieve
| since_id | query | string |  no |  |  |  |  |  |  | Returns result with an ID greater than the specified ID
| max_id | query | string |  no |  |  |  |  |  |  | Returns results with an ID less than or equal to the specified ID
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object
| exclude_replies | query | boolean |  no |  |  |  |  |  |  | This paramters will prevent from appearing in the returned timeline
| contributor_details | query | string |  no |  |  |  |  |  |  | This parameter enhances the contributors element of the status response
| include_rts | query | boolean |  no |  |  |  |  |  |  | When set to false, the timeline will strip any native retweet

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/user_timeline?count=VaTKJjmWlUhNUV31Ek85zwBy2s8tFeKBoDl8XI5jCm6xiayWuG23dDCg6KKMYunn8&since_id=w6sBp5YwCgGbdbSfe6TRm0C7MACaYKTuRm6hr4N3lufyF7OUdIMAIoHvZjFX4zrWVydmC1qYvGwbNl513RBLgjgfDWcIwEErcROPSfNoVkzJFFKIxmuNGL2jIf1eTGG6yuWrKJPG4ppK4asCwXqcJtwrIyFCelJMQFdBp3htsGdxQGanEAzn36OMEtoSP8F&max_id=NThcWyGofUW6B6tfH3CL9rxNUWGK4lqSeH4bgLAvFwCgD5wl986izD6uANfF9GxonCzEn9a3GMkkSQF1ZLkzpr3ZejFnZcLnOk1cubgbYAvQqaRpVbYkD2kRmZflc0I1lKdQWt1U4&trim_user=KuGCUCOTXrWhjihyDuymvU6JK2dLWhiHMYkGA8AxAwPTP7rtB0P7UVQFY3rVkJC6HWNi5nQFUGzKO0dp12wWYnBWq3RKMuRurENw2DcWkLG8MUxNW4KVrlSSpJCbetFF8tca6p6qbNzXH7LEbwADRsvhc8sqC86KBjVII19UPISxPDc19MF1&exclude_replies=1&contributor_details=irjLRWUYGvhBd0DnUt5M0VqcWAZBCdMVE6Gw2BvJ6MlkNYHHsNutIVFEvEg8&include_rts=0 
```




#### get /statuses/home_timeline
Returns a collection of the most recent Tweets
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| since_id | query | string |  no |  |  |  |  |  |  | Returns result with an ID greater than the specified ID
| max_id | query | string |  no |  |  |  |  |  |  | Returns results with an ID less than or equal to the specified ID
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object
| exclude_replies | query | boolean |  no |  |  |  |  |  |  | This paramters will prevent from appearing in the returned timeline
| contributor_details | query | string |  no |  |  |  |  |  |  | This parameter enhances the contributors element of the status response

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/home_timeline?since_id=3x9K4blzUslfN9euRHila0hQFNvWVnZYV8JZj5yexUtk3IPVp7hz8ypOlUKgiJfeSYdb3MpBGTVKCKF1SWB0v1PQWz7ejmsclGnpsN09HWTjGzlzwXA1YpRUZY9jlCvGiT6KH6Tp2NJJm4jT2TU0jLViK4C5G8MZ1SKJYE81rRLOW4HYYCYhnUA8YcdFk0FmSp5R4dTw4Ek0J2Z&max_id=EXZ2SzaRMow7octgCz8GN1cRFxSpzR6eP5gHFryrP5yei2vUCDApEMhkj9JT1Q7RVoyBP73FdCTvEppg2ZGGMX166KZ8A7Zwvy7lFa1SMVorkNImNo3zm4FsOFBpMAVi83DOeEH1z5sUTbgGAkgWoWpdC0DoByHKCkzQZhRznktgwKX64e3tasGMtjb5S&trim_user=QudpldGdM3xgk40ha4veyGHetbyEgrx6WKwhXduKg20B60Sh5ovD4cSxnrcETJLPth7ruCbLFcmLdf3jDyWILPg9hsOaczZGR77lJj7owtaJId2mMZ4yPlI6NwhZ5hGWoNi87pwDTHnCVqYHp3g&exclude_replies=1&contributor_details=YmcvDbAUSxiFQqNgXr9EOMzeKhENyTcwfo1TACNsa681wVhunr9bdJqY05MzZY5fm78WJVpU1xVytd2QEc1SVsQWxCvwBBLXIUUsPkmRRipkvsaaFc2AETxbw3 
```




#### post /statuses/retweets/{id}
Retweens a tweet
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| id | path | string |  no |  |  |  |  |  |  | The numerical ID of the desired status
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/retweets/7Eu5mo0Pekc5cuvwZYGaDSdex6LJDOrLtWQPkRFzcREolaUl8BvMuI01PMKsBcd494UuWz38qIxLSs713CNylOAaBkDcxQhGVbaRLe0bWxXOZ4Q3HEC3tcd4xRh4HzLDLWuwauH62FV?trim_user=KM5rqHuUTIYrzgwhPhUAdp7oTPvWuqYec4GDLbxFTw7tMDKCUFd84kxY92UEsSTFWzjIKQoEmv798SM3x0cBlJzvLu9em2TjCc2n3q1qW9A41n8znkaJ3KeOeo2BrWV39XrdosDkCepDBxdZSnJV8XKnmNYNKURURi7gLLBnZ11BzeBrBknKi77EV6rF0jzSBG9mrKKrLL3kZE 
```




#### get /statuses/show/{id}
Retruns a single Tweet
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| id | path | string |  no |  |  |  |  |  |  | The numerical ID of the desired status
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object
| include_my_retweet | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, any Tweets returned that have been retweeted by the authenticating
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/show/BZ9lhgsVbznRzHqsi7BFzlp07a4saJeLIn60EzV?trim_user=8jIH18akfLZO6pPeAUGKDUvmiCmXbiOjCw1DFbXVXXK4mziXuYI8TeucQQa29YmLvooaAm5xjPBGpTDUSm2LAwYrn8tw7QiDeHOO3TlmJW29QG4I26uDDt51ByyJpQmDxarA4MXOJZYzG2iI8N&include_my_retweet=MgrNR0lBpbX2J8ukchh10hZAX1SGaF2WVuJNu5pTgmW0vqkIHBJITJiQKbwVRzRN3BBxG0rXnoYSOiBwUkeN4xEOJaKAJCoNe0kV0MSnaQgZ9Rv4cKRgiv51&include_entities=PCqs1dG1yB1lupvlGvux1yKLq04W56CVJ3n 
```




#### post /statuses/destroy/{id}
Destroys the status specified by the required ID parameter
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| id | path | integer |  no |  |  |  |  |  |  | The numerical ID of the desired status
| id32 | path | integer, formatted as : int32 |  no |  |  |  |  |  |  | The numerical ID of the desired status
| id64 | path | integer, formatted as : int64 |  no |  |  |  |  |  |  | The numerical ID of the desired status
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/destroy/-1833901879?trim_user=a9dGuUbYrcxcYXc2Ti8weSzBCPFoFkcPuqvYkGXMSuYRsbTlt2RHUqjxgZWWk8LOzhMUYJGReEIGPB1jET1ykk6Bj2xDajrKAeEyXkpbZ7SPJT9nNaW7u2IO4gsfzTZa8EI6Z8iYgaOZ3Xn 
```




#### post /statuses/update
Updates the authenticating user's status
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| status | query | string |  no |  |  |  |  |  |  | The text of your status update
| exampleStringIPv4 | query | string, formatted as : ipv4 |  no |  |  |  |  |  |  | The text of your status update
| exampleStringIPv6 | query | string, formatted as : ipv6 |  no |  |  |  |  |  |  | The text of your status update
| exampleStringByte | query | string, formatted as : byte |  no |  |  |  |  |  |  | The text of your status update
| exampleStringBinary | query | string, formatted as : binary |  no |  |  |  |  |  |  | The text of your status update
| exampleStringDate | query | string, formatted as : date |  no |  |  |  |  |  |  | The text of your status update
| exampleStringDateTime | query | string, formatted as : date-time |  no |  |  |  |  |  |  | The text of your status update
| exampleStringPassword | query | string, formatted as : password |  no |  |  |  |  |  |  | The text of your status update
| exampleStringUri | query | string, formatted as : uri |  no |  |  |  |  |  |  | The text of your status update
| in_reply_to_status_id | query | string |  no |  |  |  |  |  |  | The ID of an existing status
| lat | query | string |  no |  |  |  |  |  |  | The latitude of the location
| long | query | string |  no |  |  |  |  |  |  | The longitude of the location
| place_id | query | string |  no |  |  |  |  |  |  | A place in the world
| display_coordinates | query | string |  no |  |  |  |  |  |  | Whether or not to put a pin on the exact coordinates a tweet
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/update?status=8jYDlHrqXTFwNFGVjp2iykhOu5Nx3aocunPQ4gg1aVyYAfUUEWccgt1KzOiDZGPu3Fk8VA96wI47XZ1CVdPbHQWhFeVFVK&exampleStringIPv4=161.226.85.211&exampleStringIPv6=2001%3A98c2%3A489f%3Ab24a%3A5d0%3A1212%3A%3A&exampleStringByte=Z3NC&exampleStringBinary=111001110101011110010101000110101000101111101000000101100110001111011111100001101000011100001011101101011111110011111001110000011111011111101000001001000101001010001001101111001001101000111100110000101010110001000000110100001100010001011110001101101010110010110110110011001100011101000010101101011101110110100110100101100110010100101111101000010001110000101100100110111101110100100101100001000000001101110111000011111100000000010011010011001000001111000000100011000101010110000101111010111000101100110011101000100101100011111010111001010000111111011001100011001010010100111111101111000100100001011011111010001110010000111010000011110110101000111101100001110111101011111101100110101100011010000010010111000101001111011000111000010011111101100100000101011110000110111101000100011100100011001101111010100000000001010110&exampleStringDate=2016-09-03&exampleStringDateTime=2016-09-03T13%3A25%3A41%2B00%3A00&exampleStringPassword=%5CB%3AB4h%C2op29y4%7DRMoh%2A%60U%A7C%40T5mJJQ%2AAeT%27kXo3%26s5Oy%5B3%5EZl%28%23ACDL3.%25M%7B%C2mmSxlxq%B0A%7B.uBuhxR%23%7ByWN%B0%272%27v%24Ki8%2FFIzAkYVf%A7nRyRz0-G%7Bx%27A%C2-&exampleStringUri=http%3A%2F%2Flocalhost%2Fpath%2Fscript.php%3Fquery%23fragment&in_reply_to_status_id=fjxIurpUTLxGn7P6&lat=hrTTrSkjdlFuk0KExt8ZT3TFAz2Ho83FAWz1PUk3f0yz1idyMmyFqrl01nIpwL56IF7yzsBOt9ousC3eZCUp3fq5D8v9UAfCgnbPQMEkV2PoFSCEuw3yMtEpC9ywKO90ckQ37un3xcrc53QAAU9moNL0WkxG8GHl1xo82McAZDM&long=GDFhxOEVCpWzKtgTaXebvDkypw8o9VtQy885XM1AcX9WqqPAn4MTH7s6EAvOvYF37N95AaGM8QJzgyaECXxj4ZqIAWx5Uc92Zj8AuOmCE5&place_id=UEmzhj6Bn616HXDMSQWVQg4qKTNnySztxV2Oe8pCfrJWonJhdGd3WitHbg4J9DcGzeuOnUqDlazKxj2LZfOWxiDJzHsJlFpUTUIhO9U9kuURNWDN&display_coordinates=rJJKmsk4V3pAtjtn2LcbFmvagnXc0Kosu7dRAxVvAk53EzrGkES00oahM8uN&trim_user=Sgn0teB0a6BucF9L7P6LI7M7i3TqxGjqWHrqW2r682BlHK7PAdAjlmqDqj3Y0noX5Qn2SO91QKmyvtn6HYp2kPFL8JJ9786cYtfQhoR88dHEG5Ko39qoY597PSgW0n9YQoP8MGhVUZzB4jZ7tpws 
```




#### get /statuses/oembed
Returns information allowing the creation of an embedded representation
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| id | query | string |  no |  |  |  |  |  |  | The tweet/status id to return embed code for
| url | query | string |  no |  |  |  |  |  |  | The encoded URL of the Tweet status to be embedded
| maxwidth | query | string |  no |  |  |  |  |  |  | The maximum width in pixels that the embed should be rendered at
| hide_media | query | string |  no |  |  |  |  |  |  | Specifies whether the embedded tweet should automatically show the original message in the case that the embedded Tweet is a reply
| hide_thread | query | string |  no |  |  |  |  |  |  | Specifies whether the embedded Tweet html should include a 'script' element pointing to widgets.js
| align | query | string |  no |  |  |  |  |  |  | Specifies whether the embedded Tweet should be left aligned
| related | query | string |  no |  |  |  |  |  |  | A value for the TWT related parameters
| lang | query | string |  no |  |  |  |  |  |  | Languages code for the rendered embed
| exampleNumber | query | number |  no |  |  |  |  |  |  | Languages code for the rendered embed
| exampleNumberFloat | query | number, formatted as : float |  no |  |  |  |  |  |  | Languages code for the rendered embed
| exampleNumberDouble | query | number, formatted as : double |  no |  |  |  |  |  |  | Languages code for the rendered embed

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/oembed?id=FzkyQhydqx4PmdC3vxYu6zyqzGUYcmuSVPqM6Z0xw5nTiZXOwViDuQ43xY2KkwCgm33s230y8nsrm&url=fTlxwPoBTWzWGUtjaPmdhphiYpGqR2Q7VbFs143U0DRHxk1I9oVrNcJLCpcus2BoegRflValy135l4NutJWhWG2z5f3yiFWwVOMhJWChYGnjLbOeUKvRqyqwOt5&maxwidth=81D4PplymYQkFdDqpsFkdbbEKBay5fFehij7IFG4EwojK2JaupuHAFlkhwTnMyB4RUbzASEeo2x94hjzGNghtCCL9v8W4K0VFcvf49ttc1C&hide_media=iWQZK7geKSZTn8PsSQox2TM63gzfhcwA8mzTuP7eI676eXy7OWEQQrXTIx90JFAS29LxZTLI0TOfRmmFj1v9st3b0cbJSLCVVnsVhdDh6rwXOTD7U8hnCkyCwJlpvXkrlMnDZ0U6sr4hkHpeQHBs195yTqXpohQK4dn4eiaHJfY4XoiO5Uh63mFXMCmbUcWYqk3ECdlmtkrqIJeODvVHSAEFd1&hide_thread=8dN7E7ajKoF7RZyiIixxV3sDV2hAgjroxevbmFu649eV9MeS4Lp0PRDKUVlaeMyL03XnJrtNBHJKuXCzJ1zyTdjN8EXnqv9rz6Ojyi690QTuNw4xyD5rRpeZ3bnuHxVgDKzb2Gl2wfxkLBSjfYK6nZ6qauUR1Q8EAIQDobGVrdgcP8w56hctgiTrNOjOErtf9kSywytXMJ9CSFHYXTrdclFZ9YOOqh3ABV87uC4hmeTeUBcRvE4HZJH9&align=vX8N1IoXRvruAIQOC5IdizJWErWo857E3fr5&related=P2QlukWdaKPgt3y3MuIdq6mwd0AtsGriIiDcCAqNlf3OiBS56&lang=ixHE4VFEo7kQp383gLDGyYWBNedFkj&exampleNumber=-6.473451E+202&exampleNumberFloat=0&exampleNumberDouble=0 
```




### Resource : lists
#### get /lists/list
Return all lists the authenticating or specified user subscribes to, including their own.
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user for whom to return results for
| user_id | query | string |  no |  |  |  |  |  |  | The ID of the user for whom to return results for

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/list?screen_name=tYgxf1aVz9RbX6pDqJT3ARkwJh61l19P0pmfrxb1H3dFaCiBmcEX3ZtNhzODBXtCnQSOn3P572KiE3T1fyYiyr6P1UtDSWffM73abSfiU0Bz4uAj3yCC0Jr1DVEvRULD1ONcG3vB46a8BKsEj5gjOIlsD0YvUJ8VxW8e0DP4K0dlLG04MhoBZJ3DK28FLhBjdJxennj7nws8dtd0KBB&user_id=lFn5HwKsNmL15jfsGyA453djwqjg1U0nzntgTeJGAvIFOX8vwIABLNUideyf8yDIV6ZPkJwUeeA3cJzIs9kdWewas4qBC3ky9jou2Uph8ZkkJU3b3np0BVb4ZBGCE0bOkzjntIFCI0Xr 
```




#### get /lists/statuses
Returns a timeline of tweets authored by memebers of the specified list
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list by its slug instead of its numerical id
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug
| since_id | query | string |  no |  |  |  |  |  |  | Returns result with an ID greater than the specified ID
| max_id | query | string |  no |  |  |  |  |  |  | Returns results with an ID less than or equal to the specified ID
| count | query | string |  no |  |  |  |  |  |  | Specifies the number of tweets to try and retrieve
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false
| include_rts | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, the list timeline will contain native retweets in addition to the standard stream of tweets

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/statuses?list_id=0CXn1YZW93WKKzpLKe6kxtNf9qX9np3n11K3ZJ08NXSywijhwqB4Upj3PhccGfAIhlLg5MoTJhrfzLw6b7a5wu8mLlzsB9aSvW8AIxtrOVHoHdvSlGYSa7eWtOp4YzXtw54fCyHrtoPbCl3X12Qb&slug=58DTxHR7ElDKpTnXAOrZECBZGz0JqcTvkwoRegYTBCD1v0Y6Pq6t2HtJhusHHmd1SBT6RSZtvDu1Et7tTdXWVrGdV8VDu8FnKzuCru5W7AYL35&owner_screen_name=WjcTfEzsAIndcwSAgr4STzXQHxOsAUIxdVqsz0V9IjnVPgv5IAXB9UsQsgj3a2AoX1Rx2MHK54FUlb03MXFVS7Mkn6ny8YW50ND2AkNFptAKEAOqytmqB9KZf8xo6ut6i79SrWyRp9C4KqviUSIv1tvhB2FHx9OQgYIIUhzkrcobCUtxMc2OFy5gBLY8UNYbLHUGZt0qGpBik5P7iSVXr1e2M&owner_id=aH09TLQNsQhtgXTRfdX5kfYfdqhrs4EDLEMFqDsStJlJGeBWsz2MO121rjsTo7waLjPbWh4q0qaHELD7kGT9HWa8gD2EKzOwSDHPUMfVcpCRbgYwW&since_id=FDOQM4tPIeoxKhas65em0qLChXSgtP88sWYf0s4JGtgr&max_id=qTRw8dwzZ9RW27pRfykcwzdYEWF8d6SE0Ja9XG&count=WQATSHiKXQ59nEnmjj2rw8ka94li111YSBRLjavh1ArofOLz7N1EWlP5qaoscqq41hPlslCtW3RcRDLZqMEm8tryEQ1QgrViJLDb6fE3jwfb90bzNPWVjouXevNuXIMGuqSAGwDZ3SbdTmNGbJBv76slBgQyZDft373JEHJIAUVtgIasrMXzSqUuGL3Foi&include_entities=rqcb4UU&include_rts=uOHY5q8ySUvrNWmhC7khwDqY3C97w3U1RCZX28vU 
```




#### get /lists/members/destroy
Returns the list of memebers destroy
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list by its slug instrad of its numerical id
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug
| user_id | query | string |  no |  |  |  |  |  |  | The id of the user for whom to remove from the list
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user for whom to remove from the list
| owner_id | query | string |  no |  |  |  |  |  |  | The is of the user who wons the list being requested by a slug

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/members/destroy?list_id=1mQXI8zQtRn6il9UuhrxcspOsmQBSLET7vQQDqH6i4dApnuTEWrQpRFSevt6h8ZoDQfhgWoy1C8qZDkEzMvYDaRRGkXXtXm7NCp3yNCzqK0pok3X7zWKJNCq8AnBxKIlm8pVV1vlMvLaQP7Xo4I8Rky0VWCs&slug=lN3tdZpeuL00wbRljPKnySfSrfNnRg4c47Fh64wBPxCmIuI1jsoRlDKMTy9LOdXTlDbsHH4xeGUXaCYu4nmp16bUFlFuzDnUgynYgrwv7qsi2qM6O9wPfIKU3qpD3MxklUiBlO7te&owner_screen_name=Mh0zoOIVEYDoTHOikS4ScqMv28j9CyIoQJYexG9bENAyupQPhVHtmuYoDixfRgEHZCWxj5IYSjwnImcZ&user_id=UtEos22KAhCRWkQygnSm6QepmC7JP72JAG82JaNkspboK2X0pPmwGBW3d4N3bPMMwVPg5CAy2MWMOUNeK9KqKGtYKg1W6OICKxTQatodglZ4fMiZW3qHKTGvaIrhxaUhHN7Shv5xQ4C6RU5OYvvIpceAUFRrPLIxzQpQlunc&screen_name=ZirUogTTMCjYQTSwLklw2T5SjWeOkrnkKPf8582RKlQAfI602sx5mDYFzdtTEReoGtxMBzEmVuXad4bg&owner_id=IlTlkyVy2PcT3BAw9n8J1uEwrPJv002JlV5Gu0ewQrqT30qcoyVp3AWvpF1qF4910fIufW15osZrtp 
```




#### get /lists/memberships
Returns the lists of the specified user has been added to
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user_id | query | string |  no |  |  |  |  |  |  | The id of the user for whom to return results for
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user for whom to return results for
| cursor | query | string |  no |  |  |  |  |  |  | Breaks the results into pages
| filter_to_owned_lists | query | string |  no |  |  |  |  |  |  | When set to true, t or 1, will return just lists the authenticating user owns

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/memberships?user_id=RYAh1adxzSy0yCaACpi7Ff8LEAK54aKV8&screen_name=caupH4ig4QSeqvDJCiZL3DmOIqYtl7NxhiXZmffq68FxDigfBf0FSmtBNr48ySGQaDQwT5XZdCwRVM6w27cVuFwh7BpGu6wEKnbDs9CGL8xGVEdXLpTg5pxc1XTv3qaONmrfv3WgcuX88b6UBZaGoITqGMWKd6y0sZgX3cefGcoPnuJYtUFSDzjjmf3zlBzOBQME20UJciyANizgdf9QOs9bHdK3O&cursor=RqaE4dFZWRhvs4N2l1huR6W1hEe2H3nztydyLSxIKPddU1ff2wKTDGVVl9X2dlBGTPfE&filter_to_owned_lists=MmsBAFwBULErvy4ctZxDXAQibxb1MQIzcbbNQHoKs3cYBha4hIHeiyxu5JvSzerMpCzfkY0M1cLCuWHLEpZXXxr3gXVPbnCAZcPjaQ6c3SPxOwitWiqTPSX5PSV0gyAfKqzUhG6kyWRnsaQpsgii9goY9jYpSzFC0fxhVECuAuR3EHs7YLp71N5a74AZE 
```




#### get /lists/subscribers
Returns the subscribers of the specified list
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list by its slug insted of its numerical id
| owner_screen_name | query | string |  no |  |  |  |  |  |  | the screen name of the user who owns the list being requested by a slug
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug
| cursor | query | string |  no |  |  |  |  |  |  | Breaks the results into pages
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false
| skip_status | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers?list_id=BEu9WqNyUn2LqHtSOrDdzF1FP8Kp8oFJ39T0zGzu4CgujJn8b1mLGnqwwaWEzBnCLhDlXcP1O6w7QTg2UCNBZe7vo49YGxArOdNMqCNeJjmzdCB8eoJdCRJ1WTZCqA3fOQ1etPtd9PMmrovFMeTp6Dr3wrFX2JcQAe543yhcn3zOr4uejnEq06txx8uzSHqsVvwY3ObrRKgjPKy88dy9j1GQa&slug=q2RQvNm1MpPXRHI71xRzG0Ne96gQXr1nuTeZGA1s0QqRy9YAHQanRXC03TQ0kSoOLCNrcPUcGl4eu2ObTZzKWbLZ5C0puoef02HdRCqxXuMsxBD&owner_screen_name=AdbwpWwuzwU3U8jVa092CzAA3m2AYG1yTd5iaBNJ7HN2P6Y0773KGDkK0nlY3mwWABfKd2ukJ&owner_id=nzolzvsDf9gATgXee1BLYbndWAgqV0Iiz6D9B6MRf2s9jqoyrZjpbGD7hTycTgvsm9CYfoQvriFKJ3ia3CAeidmA6UNZbisxr4wHtmdUFSEoWXzZz9dSmAssugsFyVd00JIt6WoMP3aL0KLzTYsfyVI3bbJK7WK7GtBNpZzf&cursor=K03uLDnK5Dj1mncx6WE2HMJbowAo5QrPRvkD8HoelHfH5reboTe5GXg4uRtzHUpzpJcyrAMMh1tmtIyRBMXiKeme5PONKemaXyIp8ucqwFN0nmSZ8PhT3E89uWWfajp8R7y0CKr8pf9NB1NKQ5DUKL3fIZuS&include_entities=T1a1zaDjCMJRVxs&skip_status=lcMrQGbBJqjJVc2OdcQNnt7ZfRRbpj7LwUcmAnXkOh4Jt6yHjouHSCH8tyjTSqEokQKVeIg2ZkMsrlaLKFsCh9KLI4EAuiYP8JK 
```




#### post /lists/subscribers/create
Subscribes the authenticated user to the specified list
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug
| owner_screen_name | query | string |  no |  |  |  |  |  |  | the screen name of the user who owns the list being requested by a slug
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/subscribers/create?list_id=r0pqlcTNy3yiI0U0aFLSJpteIr3QaOdBPD2bQVYoZwGIwBIHhuz1U2gCuktF8HhYlj9bf7AfDhXaTGRabrc5usHYNbEVSVUee3pub0JPhH0aoSlzjyEO1mNOyrKqmEEBI45T5PJmwJxUBTtVr8Jtvwh3Y2ukH9Vpd1jjQ2FnMdin6MjyU22qzktxmYR37NslPMEGOk4AxmYE8hd3kftTzXrWVjZ36so&slug=f3D4nHEV3DAbVNef3H9DFAzATzE023Wh6Aluh0qkE0wzOKORsYu7y4IrDmsGppXvZj0gkqBYr7xfSm6kkBsTFaljwNZWcXschst&owner_screen_name=T4zkb7A3uHoPiQIY04hxRht4fVhwoK&owner_id=hOHC0Oc4iUs8cjQbjVtRNLkS0g9wETDWIkyJ9LNsFgASzr4TmxKai52ilbP05sWNNvxXhkpXB0QbrU4OsPYLU03gcThhle59KC61XvZzwPKY 
```




#### get /lists/subscribers/show
Check if the specified user is a subscriber of the specified list
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug
| user_id | query | string |  no |  |  |  |  |  |  | The id of the user for whom to remove from the list
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user for whom to remove from the list
| owner_id | query | string |  no |  |  |  |  |  |  | The is of the user who wons the list being requested by a slug
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false
| skip_status | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers/show?list_id=OMcDLXyM1PYV6ggkmq4Zw6X26wyWgwG5jTJ4RhRT7QOd65ytvDs2Jp4QWDMcashtm0ydip6pfVDm0bPwOiyyHCoDgaQqD8TZ9scrRjR7futfFjLuBk2jWqWdBNDeVwe4ZrwQLnY0SsgxL22mm4FivCw6q9llGzqF1XwMluMdW2LH4N4qRKJnmfuMpP85pzKqwgdSLZ5H2Rp7EuxwehTAxnnWdw1D5M4C3hvOhAwjrVq6pYCEgwe&slug=UCK88LLeyQRB7mqpXWJpSavi88WpFbczNWHWItbhj2SrpiQmfzL7JhpSqlh5wuFkrngaQsraujBUCrgR12YKkoDKKUQg&owner_screen_name=vBQTS0JkrTPLvJnXZeY2dJnBm8lhYCGudwn5x7qY1fJwY6tYls0zboaywwPu8wZm3nsAuSy&user_id=7i26pw4LY5katuIZ0yu94uv7RYHlRgRYzU5Yq9Jpe3zIyhIyQcIUGe2xcKT31L2AF7y6hivvl4eTm&screen_name=sc8b7PpanCUhGW2IwIQ5O7njDInRCJN5WWg3MFe9h9rY5tGCcxH0F5jiOHaqqYvnULrHrFRJOiHUMowYVeYAjhT7Y3xp13NVPeDgUuZJMGDy59w0ovBHMuOLxmbypZufd7v8BvRncuWhEth2YTKLnywUVItlHXAV553GAU4Np144um7sfRdCqKxlt0GaYg63l9KW4PJuQOykaFNpx02XLziezYpyfvBBFmxKbhe15Nmft9F0aHYVgg9Qfypu&owner_id=15J&include_entities=DtyUIA0vXfY6VZgCXbTelKuT9YXa4HxHa6CSHDoESnKOn1qkcjzy33rd2pn66VOg1r9I4ynXV7Li9bDmvcUzflMhL9oR4c86EhPIPcFLkq3tCHP8TJH95tqRD&skip_status=II1QOF8EoYQ3JauND7utfodXxjrYa5NSNPJCvSgTQ6XAhsoVASoQhCNOVeN6jAZ7qJJWB0Pr7N2ogqjQjIGAkuogIbn2Mm9d5T9HTZ80Mbp3BJUUrBuM5T3O4qQRN04TTdANcJOZUd2vWXpo 
```




#### get /lists/subscribers/destroy
Returns list of subscribers destroy
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug
| owner_screen_name | query | string |  no |  |  |  |  |  |  | the screen name of the user who owns the list being requested by a slug
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers/destroy?list_id=TaDNdsSEjJrjOld2V0eEPey2h3ZetnMnxqaLS2qbMSvAdIC8JRNy5lBnpABTXogvPqhHtHTfzpPM8sV&slug=jIqp41MuBonzME4B5ljy2dOCCEpK6lCq32P83CDF01fNFjoKFIiIV7kyLJjR4Vh8X7h1JVHKWWxBgWlVEEDALY9wIsoNoGW&owner_screen_name=Neox95h52PGiL2dqHR&owner_id=tQaZyDol14inRwLpFRGKTvrbhupHbhIE7SEGw21x7jVYQGnvx4grAIDRc3yokg2s9H8GKadRu8QkPePni6OSOsK1vipPzsiJ9qpTADL4MBoBPeZ8kO19gLaL4zBD1TnbjN5UqQYcrnOhBNpWBr5ScfDgOf 
```




#### get /lists/members/create_all
Returns lists of members create_all
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug
| owner_screen_name | query | string |  no |  |  |  |  |  |  | the screen name of the user who owns the list being requested by a slug
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug
| user_id | query | string |  no |  |  |  |  |  |  | The id of the user for whom to remove from the list
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user for whom to remove from the list

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/members/create_all?list_id=Q8i2s57mvYlIqIwHkk7gWylOLBr2qGXgPfjhkqEQoZyOI5&slug=2pEilcE9YfB0FiXW7cfpxG4n54VUM1qPq47LhMVf2wgHPdEXqUmXArkFvgzih07H5ftn1oD3VTLK6qHwk4tVwOA14akmbr4hHxEIWhMSayChZkOjpieV6PXb0hxcJBtq9796pWYzuBRtWFNlX2h3RffSwN4gpxHyFQF4MDEhfvLbbzx8BOct3slAfqREXydDpSHcwmtMSfY3PvcqkpUoRfZ6GQLDpZgOSY0pkub&owner_screen_name=K9gzEs0ZSU&owner_id=J9mQPdCtCBKqtJrT4V4hFdxfS0fSS9fCjCs9P4DrGnSa7j3bf7sVlZae0p6SzmuSYX2N2FfI38SasVlH2NCoNNCOdJHM5cF39IRbn7UqfMBHIXpKL29yPLn3u4QAhwDrevDCCx3SjEA1BZMm2WVRHiVcnLMEhq5wVI8xgbpAP0CrZ&user_id=N1lIT21PfpA24SsaonTxV9IlJylmZlLMn6vh9x6oWGr0zTbYh4vdedzXLVjKg4xEb2VkA1IwIaxh3IglNLz1Y8ZK3ivkn2Yy5USFWBcELJWPscbfYKhXTgHWzdhWfgvlao160dLMXICpUNFSyWPrcxoLKFI0Vdm6CndCAYpxG1WBOC&screen_name=nyjOLRcxCSfCNtYU6l7JW58tM9qnY2RlBban2nUEfah2EgXKB4ty9B1WLsjJua56lftoCo2RykUcARXcWqK52M1NelwIwCPRRiguGjlfDgse8pq4PbaRXcEbxbU3NJVF2b9JuvY8MqmUQMZFY9xVmb6Tn1XbKTQN5ZwAvvIhW5cMSbsQkZLGbSAzTyKErArwAY65uPnqUzdMKGC5FnMRfmq8VaMmLeTlcZrGP 
```




#### post /lists/destroy
Returns list of destroy
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/destroy?list_id=d3PXBQDfPn5cMd0fFslD2ZwZACyi9LDmOtkqkXG9lLm8ZnnEPJhSINSiqqAAbeW0Ihq3f&slug=dASzIRW6vMPNFyBxQ1XrB8Gy8pQzs5GFGyepqbvWXlJCTk9Km7cYgSxpinYKsEq8dFxEQ3AOokriFB22Ie0Y7ynpVmao1Bxeg4T78tVxOmPt&owner_screen_name=RvG6wFe42E0pOoqqVFG0yN81JGQ6vj4nPLulqIqtmqSbOiBJXiKw6TyQzoW4H1sxMWScFiF2IydxQPgO71keUS4tg0yY21vPYo2DGIFpgTW7JdVReg5989CpabodcT2ai4OZMuo3nla7z5YNl3WudzU&owner_id=LiBYcE9uIXtvrSyPdJWMOVAaZxFc7zBTRdR3R0yAY25qUEf8ncVc7wm741jbBV4s8WwZX5zV7Fm2jCaHO5TWCg3GinRTiWmrTSqQY0M5F87ZKiGzozv0QzG8Xy 
```




#### post /lists/update
Returns lists of updates
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug
| name | query | string |  no |  |  |  |  |  |  | The name for the list
| mode | query | string |  no |  |  |  |  |  |  | Whether your list is public or private
| description | query | string |  no |  |  |  |  |  |  | The description to give the list

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/update?list_id=fvoHog7ff81kNasMUKsu82Z8SzP1wn2MSqthHBwXJyhwIJjDuL7CO7LGGAHdXKZQbt8T4EQOd8kVSEympGZeNKVulDIjnHazbitfXk4aso5l2EIslIH9sCDOfl7D3hdeAGux1yHuXNP0sytOgaXIMBx2XEF&slug=WSfwzK4AjM4hzUi2sMQIWOrJpYLmDrnAkD7TobuIXzZxtiAW4qE0f6KE4w0IXoih1qbpBG7zf77JqHFu8kvnqf2vL2dJrw1sWdSxT0798fSyXy25SxtiNvNzy1j0xkstyl1rl9Atot2l14rUCVdpr1ZZ2i&owner_screen_name=zCs3aN4C9ddDCHFXIKpDmkQLLRKLU3LuFdxQ1CtbQGOsnuq6ePKA9AmVs7GnarRQFoHH1aSRRHjebJlpz5ZJGmE9tkwDMourNb8Ol1FcIYrTINihSi0zEEI7ZfLLDfdqrmeMnTZ5SrYBehS7zTGeypmyF&owner_id=kinxJO&name=XBhRAnK2mlgDeod85rGuNe9Vysi6b709Ii1iFMl28BFm0Tv5lbz9qJ4Zcn6nu7xcpzv5lQ7tsNQsGlx1x7aXQfX2C3q7bYjAxPFSFNm8AcAgx8i5ft36J09m4AtfyNQ5CwXijjqUw1b3at9pXcwG&mode=F3hfwxNjnTWTRfdaG7HHiLRMUhJ6NqjttAJ07xkuqgohvBscJ9T1VLNP3xVRXelrP4rWCMr23QkzsNLbXFcSqZHuxDluSGWHLoEna5peWKNoxyzvdLnEL58iJuNBaKiV8Xjj2JxZtln1TWx7HULt0TMJnzlykEutBNME&description=kD0F02zWzGEur8ulUeJuzhOdMhOz4t6o67469D3IjIcLQH7LVQfv74JUmytq1AP7HUeQyhzSZLDQtK 
```




#### post /lists/create
Returns list of create
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| name | query | string |  no |  |  |  |  |  |  | The name for the list
| mode | query | string |  no |  |  |  |  |  |  | Whether your list is public or private
| description | query | string |  no |  |  |  |  |  |  | The description to give the list

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/create?name=pARUIWDCib6JdGzkotye2QNUPzxG2iisTamC60epcl8p2IJqciFe8s8Y2GE5YXxR7UudUJC64Lw6tgxGycUGF2FHIkMHhkzoe3C8MffR1MXv2vbAH5hm8W4RhQyya7XpbAxXPNORzMmBhxcZDulLrpCIgbgrieQtOorEbgvL2Snkqzj34FPv4sdl&mode=uMWIDqx1Rcd7HZaAmu0WO30tTvxlJTZeGVWjmuleGzloywYV0YRO2SiVnQh7JglpciJyM5MtE8RdFQ8GO0vRSNMgD4nmlJMy1w7OBUig39tIZCoOCTFvGsLjw9GSStqUZxJAr1QuakdaWBZzuE5b6RvD0cvTFWNEtwfVy6qIrDTofSXKx3VDUqhUCM&description=iICXc9c8HjzqKdj8sc6cJ97n4yEZbrNtapqnyDvfW4GHh0QKcWWW64jaDYaOpXiAmIXVmsbjxR0PRQA4Nw0UBk5eif2Hclhz3fvqIGJgyJ5qAFuocuiNPn27D4PPp7ptmUT4ADk9nqzY63miyE6n28uFdkvDrU6NO0RpEcy1C7ZIbm1J1773fBJtVe6n9daYe2n 
```




#### get /lists/show
Returns list of show
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/show?list_id=eVUR3TAegBYhJ5lZG4sCjyZtLar0cOSrKMjOGT2Wv0ee6zdMDFpXepq0AS0NGSfrFyfmsiiXjxbp6pcK4CHj18jC0jpHbE8RcodFHwC03Op9dBTieBBfKURKdhspVBg80uNH0qH3e6dsI6KWImcsg4dulGUhhbqhFdYFDFJSMWkv34sMqFeHJsc586nqhNHX1GCFmm&slug=9iREmW68nMn5vQhBYoYpGM7DNNgs9CZiURXhO4pcQNhmDzXCXW1DJ8gwWwZ59Zo4QmlFqLRgy8DbHANFxPihXzNT6NZfMojCKFiaq9rYh4aZFXEdNXuLxiEE5EUR3duNT&owner_screen_name=YjVphdurdapSncQSXnaC1ghW7kaC83o6mkwEx05L&owner_id=vDyItqGRBiTRAPZUZB22Z9okF3SG8DREgqmKR2BslujVjiQjUTlT2KdIN5pWJhB0HXKy0l1lQlhaE8ty1Ps4AFNoLdlvuWvbUfKUBLgs6yCKG6i 
```




#### get /lists/subscriptions
Returns list of subscriptions
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user
| user_id | query | string |  no |  |  |  |  |  |  | The id of the user for whom to return results for
| count | query | string |  no |  |  |  |  |  |  | Specifies the number of tweets to try and retrieve
| cursor | query | string |  no |  |  |  |  |  |  | Breaks the results into pages

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscriptions?screen_name=WKNwqAVcNgHhcdt6sd14Ziw5Q9Qwf9fcU2JkCExqVfI7sceVqgZpyvvoFlVUva7pcQKPuhgpxYxZbMVB3U1Bqw05SV0n67MjYw8tOoTlnrlzdhagbbSCISIBOIYUQLdPimi7Lct9DO&user_id=R5T8h50TOTBpIknCb9Q0rdjyYv288QR0WK8e&count=98E2K3K5rngAeh2rABq6DzfuqfrbnF1wOFzyJjDaHULVbOnMqOT3n8yNoZYMF0jtFS2ocFzUzlPL9dyz1rDpAbdZbcLQc4kRXmga1Q4BbUnl7WV9oyzYJMYVYJLaO52LrjVta05lUsH2oCcMb&cursor=LVyJQwtBHhHK393ZDdZIzUbhWzT8m4U8ZsRQYlrGD9qGiuGVIGEhAPzwptFLxzUx2Mn17PHKZ7qiC7ekNSCnHbU6EAScaMKcy7dGXUqX2RfEYtYLlA93M3aqE3COPm0oud4s8upamEPk7O6tpfxbjHBXKdMAAMZ403x8yWjVB9fIXmcmCJxWr9UcnGMXsM2tPzCowVj75zQ3W2qyMXve7pqu5dsyZv1P4DeAzyIE7yI4B8Cn67C 
```




### Resource : list
#### get /list/members/show
Check if the specified user is a member of the specified list
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug
| user_id | query | string |  no |  |  |  |  |  |  | The id of the user for whom to remove from the list
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user for whom to remove from the list
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false
| skip_status | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members/show?list_id=7Jolv817dHv0yLmYTh9GEUVxf7xHOmwW5UhB3jJh0ehyZExTWGAAAv8QDFxr23n8YFJ1YsiZHzxHd5A9LbKmGSckyKMAN&slug=JMPsNOV6NCFljTqU3b5NxMGK6fuSQi2z4S1SGXYuzEPTxfNBrTpZG6JMldFbwIKABMshJrLj5BdDR1eiUEiAK1n5f3hLM2mnPPFyhrSm260T7fc2TuDDw1JL41xR3UfSKUr1mkooqoixDvzwZcavdUhiVP9ZKoRujiwFDU43jnAWSatSnEoAzGTuv3ugslLLEhrhcwlvTWsM6WEtA249I&user_id=Ee18utugf9xHqKdMg6IITOExifAmpik4xmd1PIh5RPMiA04Q7&screen_name=z0BexTu8gTqBYXXbZNUhSL7F3HF8yNU8NvmlpRtFLUgJRdVR1P8UBfzEXfNw3HEQd1bCSFiDzynrMiiN8rIJHioEybaBTPr7QDKJi2mRBJjn2Bbb2TUJbjoJvzkooMwfpgYIikAT4Th7vtixndhywFi1fDqDqWTPdRyvb9pg2HnyaF5xSn6p3pqi2RWsNPi0GRwS0W93DwBOcHm54tu8SVqVNnnAcGBTx8My5VBJscxFTUKYnf6f&owner_screen_name=waYUyz7fb&owner_id=NjNlpIX8b9GQ3AB1XQ7d2Eo0yXzFcLG04tluciCnsievSPxQGE4&include_entities=jtISqixD3eD8IYCVhejKxxgqmNg2slLLOtDfMbSPqvY8uA4LPnwmUMMhz3k1p5NdzrslClb2Q9bkJf6zDCVyoIQYLb0bhNoQeRcRcnU3w6ogluQZ7LxwunugzvrQiQGxHSoUgjYMpm3LQTKYFiu9GZqfvR5OHLlpEKkU4iHtELevFZukhZuYYUduMiit4E&skip_status=JodEtvmWa8bGNaa8s9Cq8xECjXUM1yGLXTpqpMnzUygHJqPbzsCIZgkidf5fOL1MFrc4dAE78UPRkF3U7GC7WXqacvq1hrNXS016AGeIA3AVJEPQksYhqosCUTDckr9drbk1RyKrClnmZddkFbB 
```




#### get /list/members
Returns the members of the specified list
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false
| skip_status | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1
| cursor | query | string |  no |  |  |  |  |  |  | Breaks the results into pages

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members?list_id=z4ItXmFiNPwf0QgRp0j2mGolTBGzMhFmmoQjLwCzl8OlZ5dp6xrsdQO7ruHeMnA8MqsxW47idVEd0RC6o4yCUmJmRrADObLBCe8yjfRwbvJcmmiLqRnle7H5yiJntvY5J7E2nvyy0iKnF386VvraD9gcsZAVuz1dGFf4bODb7oyNrHTndlxQvN3XNDThcUvTALXLzAWHYvvqcpNqL&slug=gg9jeWX7da2I3Cu1n&owner_screen_name=CkLBPh22GQsrbJIk3Wh04vb6deIHg5LTpxufOxhvnKWytETwBbxFGI&owner_id=UXtCezo7YVCdK9vfxfc6IRZfsaN8RwULunnJXLRVGt9rDEHaTUgCLgSerGnich3HFqqCbhxSLHkol1zfWQRI6JWypkQCBUjglKSx1qpN7KctMLIIBzqIjngJH7mi2GznqsUsTkf04stQdcyPLZy5mPP3XbmZSWmiohLiB1iGtMwHY5xK45QrUFvRRSRJOe1d&include_entities=Nv7OONiBkZAqxkvCaWwQsoHkfq&skip_status=tsnZgS75HVnjfnTGUdbxo83fAsWVIn4cQrb6kib2ezltWeaRsmoRus65V30Dq5Pgw1mRkyTy7f24ucVWykN3MU9HXalnfaEMc1Dwzx4HN7LhjG&cursor=S01WNW5vTfQhv1VhdXVKwtOdgVZyfFL8GN5uJaZDqQUWRQd4N8OkCDySzxqPdcXU02oKdonEehA68OaVWZgzDPsdmT2A50v62UQgieVxvvDEjOAgOQPrGiF3bHDhH8nK3e1lsWTYrwCLld294RBK9gNlYqCFzZqCerYGnRFPoiBJvDTzvujFL60JxCp7CQJQhIxFzdvYv6H0KBzf5TURZVAw 
```




#### post /list/members/create
Returns list of members create
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user for whom to remove from the list
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/list/members/create?list_id=0DaQn185zNFMjEhqmiaXRp2KkUK&slug=vhNvVXliYuoxh4kBIB15Tb2LB5wVZgbuxY0sVmLUQar8fLJYnK3hW52xbytaOEFmCFPy1BsRMUZ1GI03t4kq9mYlVsvK6a6JPWiQxKIjEHllqloUpJkz6jU1LqLSASCqOUglEYFjG0E7l31LMmkSFfUrFGjgyVGnPXJuWoNCosJKvLwh7RaN64eMKy2jtIGjFpNBOBed3XYyIuQQl0Dr4SdPq&screen_name=8UYPdDf1f3DthGrffaJ5056ExawLZW18QZX4Dc6TfJmwqOMGYwLZBRD829T26UaXU71yj7rzRN6hCSXAoJz0Bc8Em2GsXQpRXrphyQQqEXHgQFRfprf0DnE0qlsnbSe9jEqSvhiae0r5Fik4Jz5nXKnn5QKgIZq1DQT88c&owner_screen_name=ncJsR2MWLm29jMx&owner_id=Snr95qz73q0bycuVpeohgad2wgbQ3IwV5X4boEir4jDCw8yVmWcC7qEDGPuKy0FEYKPmo8Otrs5XAETWA6yHwd 
```




#### get /list/members/destroy_all
Returns lists of destroy all
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug
| user_id | query | string |  no |  |  |  |  |  |  | The id of the user for whom to remove from the list
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user for whom to remove from the list
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members/destroy_all?list_id=x3ICgaagFc6&slug=PllpT341BM5dUIB0QddngWZx6aOMmVxcgSB9WFayrfLmYmmOAAbQwboDmdqI8XVoPwxMcIkEY50WsnK2XWTu8h7uu&user_id=dDv81lFz7Shrxgxyc0VX3TUWn2evxJ4KmzTnUzX1setZu1xH1tF4mz1KCfg9ZkUlTNJOnGQPVjPqln7nQNsdmtXYJe7Iz24tQNhdu73prSPMgX96KBj75h5Owdx5fBy5pQ&screen_name=TYmipf8cv6mCQYWY3d3SKhqPx1oDqfWkdjDDzLQ5ScHIbDHfRK7B2xrzzQd069kktXX&owner_screen_name=JO&owner_id=B0Pkct1rkMyWO6ooGeCHlM1FfZCiIqqkrgEDJF54sE0hKpGrEi8Z4aEj9hCSI3c9jQN2wS6Yw7ghwWJaeR9i1OCb5f3NifXB6LECEKBbSRsoOcz23Jk5xXgDckquzo5G9JjNuUYmMrLADlDH5YMCV3g7nGCX5HDe 
```




### Resource : direct_messages
#### get /direct_messages/sent
return 20 most recent direct messages sent
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| since_id | query | string |  no |  |  |  |  |  |  | Returns result with an ID greater than the specified ID
| max_id | query | string |  no |  |  |  |  |  |  | Returns results with an ID less than or equal to the specified ID
| count | query | string |  no |  |  |  |  |  |  | Specifies the number of tweets to try and retrieve
| page | query | string |  no |  |  |  |  |  |  | 
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages/sent?since_id=W2WR1jEs5f6qSNvQA8LEoT&max_id=5vZadCpEzrBqtU5VZk2qcQV3q4O5tI7zd6KqJ95iBGJ4BO0A820l&count=Woj1douVv49COzlXFEzmoDXcDxlGyHyv6Sxjh1fN6opUYLREpq0O4X1Ivmo34XzaP6u78KUe9j8740LurLjwJkeeGCiLARVq&page=qx6arkjKtrPudkWZDsIXGWEjeqT6mj4MQaXhvh2ZIStVcqVQS&include_entities=OyztROTKUf3Y2U9ZbEgdEZ68ViyQ9qtY 
```




#### get /direct_messages/show
returns a single direct message specified by an id
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| id | query | string |  no |  |  |  |  |  |  | ID of direct message

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages/show?id=3rQRlBLBEKDyTDKyUYcT4kPnSFxj9vicX84iJQUoBxXubH35Gf 
```




#### get /direct_messages
return 20 most recent direct messages sent to user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| since_id | query | string |  no |  |  |  |  |  |  | Returns result with an ID greater than the specified ID
| max_id | query | string |  no |  |  |  |  |  |  | Returns results with an ID less than or equal to the specified ID
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include status

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages?since_id=s9QZyETYYTCQB0l9ArrC8dY1YDcqMQGf0wezb8y91a0DalMLNenWslXqYaRL1x114gBfo9opjp2uLOfy3DuvYsWXCNJEkKFo1hDpq2PKsRfdGuLJ8gf7Ib4lYOZizFHAWlZnoP7QGm3nRP7Z5m7Oxb9w09PzOw9LS98gYf7FCa3t0at5wAU4M4ANdqm1WwMPFV6EadjNonhoxKu4lo98sKVFai&max_id=7OuWup28AfsnDPE2npwrLUBUmlQ2v8KCXezrEBAeR3CvThxgH3ItYjnlFeoam8NkmmL0YmfPqSkk9SBRWjkUDIgiWEtjMgD8Dp9BMpqdiLxsE8jArEv5nLokpRDb8hkLHunuTOHbzeDemXOOBjUZ4ijtaXFjeZ5Wtsrng8yQnc4KaSyLctKhM4LX1qggpmcTPEg5MPWa10UbTtX6WInIM8GNyX4YjhR8V8eIXaSZbMb5f9bc&include_entities=zVEHBsgywfSN60JefrcqjbB6nHlwSyort295vqD1FvPLwy0M0dcjoOpLvLinjGPNIZSdpwf425QzERlE4xYtlnfR9xftd4gW49auGqyIvpiahDPlbNPxa4okCDNPI3LNdVhTlQCRfU2wyRSKEIhPMG9pkWe300QdW77iXJadEcKc3DWHlew8VFxfCLiCM8QIgY1eIb&skip_status=mnczqQw8bKEjGkQVWCdzomq7Do8R6kktHx28nzgykUS0fIVcl9MKwcS9B11Hllb2SeafNqO7lG 
```




#### post /direct_messages/destroy
destroys direct messages specified in required ID
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| id | query | string |  no |  |  |  |  |  |  | ID of direct message to delete
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/direct_messages/destroy?id=Ap3NKd&include_entities=vJLnSnoU5JfgM8uXoiodqJTykjB74PHzysXrQmlV6BbSKGQ9YemoXgXiAzpEo6eXzboqxKlDmxw6dmgcBCByTyQt8g7wnmtXxRn5CIJYgg5tDlGeYiMRRDlZUtviPZfnRDstmcrCsx65SMjR56IWK4VExrWmqcKhPcKbpcORKUXCHgtMncI7hE 
```




#### post /direct_messages/new
sends a new direct message to specified user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user_id | query | string |  no |  |  |  |  |  |  | description
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user receiving message
| text | query | string |  no |  |  |  |  |  |  | text of your direct message

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/direct_messages/new?user_id=O5IbwVVNK8yWxLKovFm8mCC9ZPR76wSUBB67w1V&screen_name=audHfY6KDsT05v95k1cqx5l9HrhdtduDHIlWHrHlUAlZ5v5pwhQ4nbd4Cvh5IMJpv4lcw3xqDTqIov8VNYZaadeNIwTrjCQOGc1dfzDTs4CRAKNoJMyT&text=NHIkA9Dc0sTct6s2KlvPXnqIaOrWmlWa2FuDO8POAJ14Qt7BPCqM0QuaEW71i3clJHYyQOmqxovoSCZHequfhZpWWwYeAaAjSyRIne9VDEjvgjdvJHK1GaXCGVRh6rBY0tHnHQjlvDQMW3iGK3HrdF4UB 
```




### Resource : search
#### get /search/tweets
returns collection of relevant Tweets matching query
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| q | query | string |  no |  |  |  |  |  |  | URL-encoded search query of 500 characters max
| geocode | query | string |  no |  |  |  |  |  |  | returns tweets by users located within given radius
| lang | query | string |  no |  |  |  |  |  |  | restricts tweets to a given language
| locale | query | string |  no |  |  |  |  |  |  | language of query you are sending
| result_type | query | string |  no |  |  |  |  |  |  | specifies type of search results you prefer
| count | query | string |  no |  |  |  |  |  |  | Specifies the number of tweets to try and retrieve
| until | query | string |  no |  |  |  |  |  |  | returns tweets created before given date
| since_id | query | string |  no |  |  |  |  |  |  | Returns result with an ID greater than the specified ID
| max_id | query | string |  no |  |  |  |  |  |  | Returns results with an ID less than or equal to the specified ID
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false
| callback | query | string |  no |  |  |  |  |  |  | response will use the callback with given name

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/search/tweets?q=KAO8ttFMDb4Q8cUrWLlkmTiR40U9Ga8rKWzdqfZ4q3UzgP0cAmxXgPOkPJuvTDXDAxR0MR5cVZMbOMop9VnpLcJAVe6PR4tsBksnc&geocode=A7xmim9HMiD9HomrZiF67xaBZLWs980Jfy6yUffHySRfgdHgvnmDVwfUibnrjoayWg7Rwmy4epkvC1L8o8MjE1eWcBow0y4WPbNlylqNKKinL4vadhuRjIOvkc1kL6hBi4&lang=QqnDa7WxT133elx6EgV9B8bWTiduAhrqHO4SW1qP2tTgPrntIiDjqPfk7sPHKh8s6ck2dKSgeLw4dTxVcbeC0tX8WMPG3Y8abtcoe4FsQcx354YigdUhHSpDEekIdtSoW5Na9sD0Ea3Kf22wfXNWPcA&locale=rUcEn52jaPuji7kWioGxqJ3FGRCw4c0v6cauhdOr3iLlq6hIuYgUHkAnbdTgpULw6W1o9PQc8CyyJPhdNx8uSJS4WMkmG6TN2UccK2pSFXroMIBAgK59tXdqKxMqDFd&result_type=ApSksid8fFw2n8CETHNmF0MpyyPce3SPtLaW3n4i2BkqJX4CESZkSLJrkzDzCwo6hy2lW6EZIZqrWv4Bn3VgPEHaekJRR8X9H0uE78EP84g4zlGXpBdfgVpug9l7higZiLDqUhf2mw6VRMTho7wE2V8i4uqmMGl5rYvlgLoChuy8hrqGyWkBRtTWXkiK0DQsCmOT7cvoH3xZvXF4T0FLuzHrT0bUE2ngobavoFU6Jr6epMi&count=MX4hxMIqMUkqWHH&until=TRQiwLogdvuChNV4L&since_id=&max_id=iM4IyZ3YVLFhEx8X3Tlj6QOJ8BFcnFyFrCo0BrZxdFORcWPgQaAX1oGa0lmn1V3txrt8&include_entities=sG67vYksNAiYaf0zWazhxXis0L0sf9lIPsPkr9MeK4dUketgo3yW0Rp1DptTyPBoiqIJAvYlAbfUpJbOMKLMCaOgAh987Kxpbf8MK67kimfI6rwSciFOst42LdbSXIh8YqVJx23PpjyvL4oXm3LP&callback=QSi33a1MsaKT5tq7xgxRO2CTqzgul61bYje2ugOXqyQv2hDzyaqmd2gECx8XD98CsnEXEsU41LA32eCBp3YC6egIMpGqyP21dGYR8TWaExdHLQjbThO0w5IiupI2eL4rr2jAWfKBMYjyOCJITxIpCrI6Qr95cdwDgQec5ZOSX7qLJ9tDHc3k 
```




### Resource : saved_searches
#### get /saved_searches/list
Returns the authenticated user's saved search queries

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/saved_searches/list 
```




#### get /saved_searches/show/{id}
Retrieve the information for the saved search represented by the given id
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| id | path | string |  no |  |  |  |  |  |  | The id of the saved search

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/saved_searches/show/LrucAzpO634Whh1g5TdckZWutzbFCwjoXNBxn0lt3qplHrBMlPZGPVaiumX7SgwP47nr8JUc9kxRM9E8ZDOOyY63l4adlG3pOrRWaM8k6GbTQP1PtPD1OK4aOfn9WryKSpH3bQnixzcnpdcS3QUSAY2oeqxaS6VKwDOItb10LdnbrA3vqXo0WroaRW 
```




#### post /saved_searches/create
Create a new saved search for the authenticated user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| query | query | string |  no |  |  |  |  |  |  | The query of the search the user would like to save

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/saved_searches/create?query=J3guzTiinujngxLrYluuLsSMpkbzb8VVbbqL5J3tdmQtUCVTYqnJSgwhAHRMPMI1Y8M4RPx5coz70u0YUnINEe5eWW1MJJNHSAMKqjQDHpKITKHO8pBMEG1B 
```




#### post /saved_searches/destroy/{id}
Destroy a saved search for the authenticating user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| id | path | string |  no |  |  |  |  |  |  | The id of the saved search

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/saved_searches/destroy/2nmMb4ELQpcafPSEzAyjhmsHYemEfXhilD4wIJiz8uJokB3TcBduYFbWTxA9uSrPwwmefFNo9xNt8QnlrAPpg1mayWj3OLTlhgzxVnW5UJz3zWo1xdrNeNYNJiQy3KTl0tTVQQ0KzAO9wcb4pCSEpQr98iIb2Cx36qZWg0HQAv06Hba7N2LdTdn1v6dyIKCObBLsBtjbYjiGutOivAwoNTqj0DSIouxz5i2HLlSKFbr9E 
```




### Resource : friends
#### get /friends/ids
returns a cursored collection of user IDs followed by user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user for whom to return results for
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user for whom to return results for
| cursor | query | string |  no |  |  |  |  |  |  | causes list of connections to be broken in pages
| stringify_ids | query | string |  no |  |  |  |  |  |  | IDs converted to strings
| count | query | string |  no |  |  |  |  |  |  | Specifies the number of tweets to try and retrieve

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friends/ids?user_id=bHmNGngnLYe4jJI9wEdOlYR3p4ItZjpb1MYH9e5VckZw4IFAmToIRgLgluKkO9vPVtx4ICZVXZr1I7B500NRgz8C3SWS1sIXWf2ES2AP21QK8sP8sCZJc7lg0i81LQZH61mY3WO5YFP67EfzhejumEKmXSoIJnqPpMOsJDxHinOp23ZkiiOFXy2VrrDbP41eRPGAteiLC&screen_name=bEaaZttN8rmbmOC0Zr50FWQmxjBP5dXgS7qRBUFKl2VIQxJQZOQEKH1h1C76Q4mIcNAOIgy4iuN82wY1lPG6xHoykvFaA2TNPtByJ9C2DpbG&cursor=aHh0nnx5L6phLzROtEEWgcGpOJ3eUJa4rs5PPCUBJjTvTLjm&stringify_ids=XjG906YJ9cETnJlPOaEr4gao9FiUYFkVZ15Z73JhgnbD6wtUG8lLovaybtta8O57Pb6WfPdwdpajVDeCLzoa5zIh2bra0xiPIpMYfZuspELkh0X2zldFUVWW7n7&count=UqWDPIB4I5x7Kjs1jq4SLhyGduDkSLrNboq0725Q8CYSVrUeRY7DgFjtaXN3IfQTEhUMkZDsCBkx2eMUdTxtyQXJNLMw0CqFUksek5GWG1tJggDt9aXI1UrPFelGRLmL6OZqTGnAIQkY6Xsg8pY9jqYYEkFv61gcPgCJXZjFQDDXB5eJvdTODSNidsNju4vjl82i8lXZZBXAHbkcoe 
```




### Resource : followers
#### get /followers/ids
returns a cursored collection of user IDs following the user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user for whom to return results for
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user for whom to return results for
| cursor | query | string |  no |  |  |  |  |  |  | causes list of connections to be broken in pages
| stringify_ids | query | string |  no |  |  |  |  |  |  | IDs converted to strings
| count | query | string |  no |  |  |  |  |  |  | Specifies the number of tweets to try and retrieve

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/followers/ids?user_id=&screen_name=6Okjh7CLc84xg7QptOospl37xnjWBkYI9i2qpEbCNg93oZtRNRkddnkKLEHnZF68X8ynNKZA19Ep87gWZAacYvXKaE79jehhmPE9ADKBNo0WvhTvR3HQzFAJjISDW9VjZzszdcb0BbW7sPCkTjbsZMcju4XreSKerdOEqZF1bC8ErLYl4aN4W0nr5kSjcDyERnjhmYjyAsc2db&cursor=ilbmhbJIg4BAge9U5wdnTcGrN9DPmPdEao0szKaQPMq51z076euZrbqek43GTgl3Fmwf6H5Wtw2u62Bch6bIhCXCG1izhDDX0ac7Rh3kO5PU8r7qxj9PV6rB7KbpoPmoZzvQRybFD1AMsIcZ1lOWrgyz0KYozlMzUhqLQBruC1g5Jt4KOTHgagPa0OzA9l94DzQubhYOifT2IYNwSuN2LCdLrMlB8vFL&stringify_ids=vfgNe55tY8bXVIPqvSb85XzRjaZOQLTm1a9fffIenTbjC1J7TVfYSPQ&count=0Q0RBTdC3nSjCAx0uIj6J3eDZuBSjs4ki4bUYox2Mqlo0SpvBICkMRYLlzEF2 
```




### Resource : friendships
#### get /friendships/incoming
returns collection of IDs of users with pending follow request
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| cursor | query | string |  no |  |  |  |  |  |  | causes list of connections to be broken in pages
| stringify_ids | query | string |  no |  |  |  |  |  |  | IDs converted to strings

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/incoming?cursor=ZlNafLyNOld9Je28KDRmYEeWqzw4ezMdUAoamXXaibk1qmaa02xZHLW7ltbz2YNWzb6V945rgptGMEQNGnMo9JvucH4eFSbe4h9dmfECF7jrL9fsx1QGLmbX3fbJ7mXbE7o1n3E2bXuW7JpFLgmwDxtGNFpU2n6HvvJSynVJlpGs968Vnur01VGOB6JEtPlYk4QTsLCNbigkpofMSHMUDtJezsS3ie1CjSvLD8zPrQaQfpD87&stringify_ids=2KTMYseRvw6x9ppFb3OLSfC26RsJZA92k2Oju3b0AhxKHXpS0eETtgWA7pj7Zs9kuYEZ2P0C7ymOvMGw0lquBn4IMnPMQZ7kYLk0BkCISZwoLdVMylgaIkSvIIi 
```




#### get /friendships/outgoing
returns collection of IDs of users with pending follow request from the user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| cursor | query | string |  no |  |  |  |  |  |  | causes list of connections to be broken in pages
| stringify_ids | query | string |  no |  |  |  |  |  |  | IDs converted to strings

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/outgoing?cursor=IpUGaeGMzjusi1Q3fMPO76YQrRlazDJh3DYeRE0rXvTfwKjLw8AEfyuGpQQZuzhycfM4TMvRhp6O9qAGzakOIPu8Gl7aUoJ7EvcxiIpz7wnhWYXv8hkR6OZM97X4wHcacoIu684eErvAqs6yKqpRfpEoxCt3jFev3XZa53pJvVkVnqu8RTZ6jD&stringify_ids=QfYUyD94H63Rc7hWDcgzAH4IyYHEhl98A729KcdrihjvpAr3MHDmpH5XFNCX8L5JT8TEk66Dop8O0zRNhuaGcfER2gOb2UUW2NAmUGZi6767HYVYt5FFljxoAlzDfuzii9EcQEvXLC4tAZr356JrqgP1CpESTdabnOoetTbewgH7f9algUMHaCIN1mFVAP7YEvc7pomWE43Ueefu82bjEU6FhLASBIQfe3nDrJ 
```




#### post /friendships/create
allows users to follow user sepcified by ID
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user for whom to befriend
| user_id | query | string |  no |  |  |  |  |  |  | ID of user for whom to befriend
| follow | query | string |  no |  |  |  |  |  |  | enable notifications for target user

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/create?screen_name=6OD02RfwZhIiWDpBUacMLUC18GoM78mdWZeYQuvQMd9IQyjLJwxvrawAQVnY3Jc0JqYAUtqGHAoy8IjRfRmG1TgSODQSn3S7tRHok842JtARcUJrL57MZoEN1vGpyyw2peqKnvM6ZnYbhHC2NKPM8uAa0gAzP7Bem2ZJyMQy9OJrwmtj7j5gNFr&user_id=V1nK8ZZu1ZeAL48VTSmpfQIn9NDXt4Lp58ae7aI99&follow=KV1TQVMck133ocR29k6VJc3Tqb49ld6588ZZ3LcoMfrbsieCDkxmxBgYMk78yeeHndGqYSPK8gWAzaccvKz3lQ18a9gInuqKH6bFZ0q7hnIRyV44FD70t89EhpnEUNpCTBiTBJ1T6JLFEPJjsQkWYtAfTXUOKkqEVJyxszqzjceX1XhtOCqM502ZYXNJhencXWJpvaYOmc 
```




#### post /friendships/destroy
allows user to unfollow user psecified by ID
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user for whom to befriend
| user_id | query | string |  no |  |  |  |  |  |  | ID of user for whom to befriend

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/destroy?screen_name=oa4SYGiLLiNKgLyZ2MnfJjY9P97EwkqUvuMua5fWn3HEOgEQ226Mm4Vbe3PLngGTLtnWyCSWFAAuQflThrFEwAPKEFw1WcUHFhEdUx9A7K4Y0pRiQwWm7M7LrDNoPI5u0KIUhSupCznCYe&user_id=PLRbTDiF4WttLbzgcjY7AQCZtbn6aC1ZoSahwtXBpq4bCDrPWqWxhywLJTSTvTSUM3bix9TXAX8dBA2x1Y4jwB4gvWa1Q3VC77VEgOBQMJ3nk5Vl4ZEBBJR6F27w538ca3RqSshFcl2wrYSvXx7ygYFW1Ns6QBj0FaryDJdQ5gmwef2cM9L38qZ9dsg43A5JLxhogufl 
```




#### post /friendships/update
Allows one to enable or disable settings for specified user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user for whom to befriend
| user_id | query | string |  no |  |  |  |  |  |  | ID of user for whom to befriend
| device | query | string |  no |  |  |  |  |  |  | enable/disable device notifications for user
| retweets | query | string |  no |  |  |  |  |  |  | enable/disable retweets from target user

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/update?screen_name=BSZRUbE4WHdnHnB9EFdeLW0idpyIEUtgNs7HEL&user_id=Bt0Yanzj1fwg0thiGGRokMSAzkIhZu4AX4y7r7rtnYKnr1G7Hyw2koDTJmbIQfiNjRVLYmfmkZKM1qTIYqLjPodyKohBEzpXqkJpHYM1YwOZWHIV8tfXSswDRNewnDtOYdeFb0H9wv9tdR&device=lkEjd7PQZD5v1IZPGc3mo43yByH4Lyu7T9q6ggXgU2LVLKLrXPOlTRUupBzba3i3cJat07JU9vPUgBmdqazk1uOr5oDfsWjFFt9FASAJoqEE11SrbsLdWAF1ZjhrfA7U3gAE9aoxB2bC344fwPttq9vpsMRHnYCrfc5ontVYw7BAcF&retweets=JvjcVsHlVudCSbejrrpPPTKOpSp044QNza0vDIQyd3a5fpoGROvGHgu79U7eYY1y923NKUlXXw2dWrUNgqtXHY4QSc4Rb6 
```




#### get /friendships/show
returns detailed info about relationship between two users
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| source_id | query | string |  no |  |  |  |  |  |  | user id of subject user
| source_screen_name | query | string |  no |  |  |  |  |  |  | screen_name of subject user
| target_id | query | string |  no |  |  |  |  |  |  | user id of target user
| target_screen_name | query | string |  no |  |  |  |  |  |  | screen name of target user

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/show?source_id=k8s7TntRlZUyWltJCTdzAbEq3RvU2BkmKMuEaXvvXp3TLwDnqQX01Br5sWZvykSj6mYhktMhTQbFnO3NE0NFCfL5cLAK5s4cP2t9wfrq5C5sr8f593LMjwRvhsfnVkzKn2UThlknYpPpy5vI9gusNmX5PdsKy1uV4pPlK9IIyy77EC&source_screen_name=NTkgHGeNvrggZhLVmaKHUTqDsYKzCnpqhJGZqUMWm2cmkYhG81o3UOGmNrWqPlQ65x6wsStOVGbfEsWNtkQo9wLWYHnN3dU9L0GdT92OQe4uG0hal8yuFkrD1Or52meNmU1g445Ui9pZaH9wP&target_id=1v2s84hA9jWo7jj8zndFivOHuZoEvemwJpZStgsDzo2GIlPhJ3W1zLJ3L8Igm5N6uMYY3rBCQDjyZ9QIcNKLztPkCxBZCo57b45fvHRllbTkkK3xxNi6h8qTG1TiqYqC2vRydJTyUNSfxVN4J6b1eBUUDOd4MDHP9zomihUd5NtDJgIsmTtBvow9cJdZnV&target_screen_name=xudTNvO0ACuelLWO8PiJkGftTZHTmCIT7VNUrCV2epgAacoi2G2mnhQggy9DaSxiOlcfX7hcwyMHLa0NQ2adk0uBzEeKw 
```




### Resource : account
#### get /account/settings
returns settings for user

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/account/settings 
```



#### post /account/settings
updates user's settings
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| trend_location_woeid | query | string |  no |  |  |  |  |  |  | the Yahoo! Where On Earth ID to user as defaul tend location
| sleep_time_enabled | query | string |  no |  |  |  |  |  |  | enables/disables sleep time, silencing notifications
| start_sleep_time | query | string |  no |  |  |  |  |  |  | the hour that sleep time should begin if enabled
| end_sleep_time | query | string |  no |  |  |  |  |  |  | the hour that sleep time should end if enabled
| time_zone | query | string |  no |  |  |  |  |  |  | timezone dates and times should be displayed in
| lang | query | string |  no |  |  |  |  |  |  | language which Twitter should render in for the user

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/settings?trend_location_woeid=2k8eA5lSiSq4AbfAY6C9kX9OyJsNtZzvjHJTN5L6&sleep_time_enabled=caynq9mwMvQJFFho74S6Enqm7kac6gbiqKGRT3nFzdofSGE0Kw7pTyL1SVeYbphC9Xt31QIA47QXNuXy15XVDIWvDauPALrJJUMKLvlPCbMqGKYHPWCsEyYiJs7jdz3WtQHfl35YeSoVCnCsjeUYNTgwloQyXTvrJdG4gM3vErqhP2J8hE75xnCSMsrJlXb4aS9rEcWiEmztpjCHXJMu7onTQOCcMOgWGqnkCkDgHdJ6wlOt5BYcZm5QaI2Xwj&start_sleep_time=cJhxmCbCjomqUIeoNPnZPJ5GUNJRj2LwM348FfLYD7oyQDWDtkDi3IZXwIPQLAmyDrGiGshkAGSqjP4M9H5dq4bWN0MyA96dANwhgNCQtvgNllAv2FItKTpyTb6ukdHV1edi2P8wkpjFKTaNzTgkMFSGRZacdS8f7lx9aGFv5YbQSmDsfTN2zFJrFTDTML8T6F2hlIN&end_sleep_time=GYhzkV2APPCovlQaft31fcVmRYEdGrEnqWWKRZlGOY5jjVuzpyBEKw0CuEPa6uywruhjuC0iA6CU26trF56pB716MRhSmPoOkG7Oi76TeIOgPiHunOUYVW4HOmzbb&time_zone=ZvE7jXfqRt9FJZXqukfojaloR9KrkVpkq4rK1GbT9kySkwjOQyc9JxxAHi22drmEwOpyuArEVZxfwR3mqgw9O4KvmMxAeUeKIDjdeKR9KppggsDHJ9RxeB2BoAbDupod3HqisiscHRtYk6G3gxAv9D6x&lang=hbIHzVLhm3JEvWmnpkHv1LMymhHZofdFrWn0S9hed1SIXe6mzOSAzF9VWRVk790y5oyXxQbKS4tPjzcSo4tXJDSGuO1BX192qI0XzcIrgcgzMtsax 
```




#### post /account/update_delivery_device
sets which device Twitter delivers updates to for user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| device | query | string |  no |  |  |  |  |  |  | must be one of sms, none
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_delivery_device?device=7hz0Y3OZFM1POrxPp718yikPS6ikgQgo7Qo6Ud5zZ6oOyWDY3F6CXqsQxKaNBrbJiAPcNULM1aAA7eybTFNR6gID1TrCkClCdbP06AN8LoISCh4wXRo386G9Z7LkK7XXiMYonMx8af1Nx5juXIx5Oe&include_entities=Ol086853qS2PfOmoZCqMav5EtNczCqOqMPySXEWnwZdMOAaNcAzm6E1Ase94EYurN3kKIh8egm04WbR8LrvS5wsyKCCpA7Rnbb8Tth8KD8OzkGI57dXdJpLu2oUCwL0IX9CrqKb3TZDdGljOyg1iGNMIcHlJtlrqu4RUO 
```




#### post /account/update_profile
sets values that users ar eable to set under Account tab
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| name | query | string |  no |  |  |  |  |  |  | full name of profile
| url | query | string |  no |  |  |  |  |  |  | url associated with profile
| location | query | string |  no |  |  |  |  |  |  | city or country describing where user of account is.
| description | query | string |  no |  |  |  |  |  |  | a description of user owning account
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include statuses in response

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile?name=YH&url=BVJWeyvuzNbnAUAhfkKBMb5Q30E6Zm9BhTxvr301Qcpr6ZImjtX6F3WJ3AQ3W0EeTcKlfKn6XMx3Mgq6Jncpq88uIZyFZcUToEfEoCKlohpbxPhhdtGECP9lPH0PUUJjyYXXAHjZZJaxzsOMWvrylBTbiU0d&location=JwoHtmibFibotIXWxKS3croNkz6fAj5jPt1jPkvvCGT6pR2WCUZOloBGYHWy11RRuTakdFPQmJWLAYHdTH1f5DV4lRCmT&description=ennoHB4xrrgncRmU4fC6uIKqM5ipsbTGzh5gS9OjB4HNW3I1jk8N2SePXweqH86hpcximmBXrjKnmtpFNxtQqHFoeUOW2Vdr7LJt7lqyEbW1EmHsTajjSZH6Tw2Wrfoy0828ttH8EDajZRMT26dU5V0Zr3VSikrjsurWX85CMfWM7IG9OT3UO4Tf7P8p9AJC4by2kEE6TAT0jza8sd2ghWwoMFOWfyykJ7m3L1&include_entities=FC3GVCQ4447ll3SKQxzNN7l7QtuTfv3U76A3Jr7Nve9Ri1C9zbWmjiu9LY31u7VBewFXYNLt2VklWWuw8qSrImBulFwPNsr1Z6ZXTLqWGLhDIL9Qc1iVoUqKzWzmo1on7ok19LXPxfsf0C6dEo83jyNSvnfToEhw2Bxcnv2UKv9L7gYLF7PYFCRbZ64oLlUOXs1lY3fJzpuGFtskBhjh&skip_status=asUhwi2ScRQFSbDWqmvPRbvkEQVW9cQjEKBb3E3gvUVo5ykvUPlL1R6FH2CQftaTeL5hq9xV3sj81EEVt0HuROayQNp5gzZul4LLejHhM1qNF5J85rDWfOv6BUbRublQf7CurjLdlc10hL9mcMjsBPycKK3fVp5axHFZ1qdmDenU0xhdkBFVqe7bYbqTBw48dJ8falCNA0HAxZNRAtM1HTcF5DzG9DPnnXDxifkSf2sM1gECJqEqkR6puF5 
```




#### post /account/update_profile_background_image
updates user's profile background image
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| tile | query | string |  no |  |  |  |  |  |  | whether or not to tile background image
| use | query | string |  no |  |  |  |  |  |  | display background image or not
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include status in returned user objects
| file | formData | file |  no |  |  |  |  |  |  | image to replace background image of profile

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_background_image?tile=iU1FREdaUx2aAvWCLAev1SVlJ2KeHQS0LUGDyTNtrQD1mAD7bSDcLzyvBjJj9CjVw0y4UmyldbnzL1HXTk9F&use=Iau1UNbw7628F721FnfQLOCMvzGPJlIrvdsp1EW9KYhp5jrKHGBsvee0OVPygyZMLscN78WR6dhcxJXeqyGVNVVBRLa7jaU4&include_entities=6RKfOBm1TyyCvN24uYSpTuhEEoXOj2rpUbFIM1KGzji56laAj20dwhRaGPZZSqpMB4vo6f4GynLEJVf2Yffux7FdXEcP5CCGH75NnatVyfAhbQj95zECHjQEY2u3F6KmdP9B0CxyR8Q2Y9c4JQHrax58AzbfGWBULLvMo2lfabi9lvd4lUwwsBE2bQiSMTMyFhl3kGjvRBEc7ShtNNZfpDiBuAthugQ9ybcSRwoJ73WfW&skip_status=IJ1HZrlh3PSw6nMWwl8JdZfCInFEDBSllU2klnCoduVjSIgo3o8hooT7MzMpaFKvzNQUasjnXfHPXYe1nniMMcTyLFYWkJsUwiPHL85JnNzlLOm9bFVYROxCuvzPe1JKjyr5HxO4koq5cMeoramjYTWtpviDw1oQAQVhnKmH8MNlz2J0c6kbZgEpLX2hZr7zh3RFNdmWZaiyc1zp7UA7afwV 
Content-Type: multipart/form-data, boundary=57cacf55e07e0
Content-Length: 761
--57cacf55e07e0
content-disposition: form-data; name="file"

--data-binary 
YzgxNzczMGUwZTQ0YzIxMjIwYmJhMzE5M2VhNmM1ZWQzOTFiMDlhMmE1Mjg5NGNjNDQ2YTAzNWQyYmE5NzcyODk1YzVmNmVjNDg0MzVjODcyMGFkZjc0ZWJhYzlhYjk5ZTIyZDIxMzY3OTc0N2JiODkxNGRlMGVkMzFlOWNhMWM5NWZkOWFlNzFhNmEzNDM1ZTQyYzA0MDQ1NzE4ZTk5NzhjYzZkYjY4ZmZiYjc2M2I4OGExZjg5YmQwNTY3NDM4NzI5MmNhZGZiOTkwY2I0YTc1YmQ4Y2E5MTAyYWE5MWRmMTg5ODQzYzI1ZmE0NTQzMDljNDAzZmRiZjgyOTQwZjE2OTcxZDViNjBmODQxNTQ0YmZhZWI3OThkNTU3NjJiODMwOThkZWNiMTRmZWE2ZmUyZTJmNDlhNTZlYWVjNWFiMDBkY2IzYmY2MzRlMTY3Y2Y3M2E5YzIwZWE1NjY2YWI3YmM4OTkzZTkyOTQ4ZWEwZGNmN2JlYTAxY2UyN2U3ZWJjMDJmNzY2NDQzYTRkMDVjZjA0MzZiOWI3ZDU1ZDg3Y2NhYTgxMDdlNzc2NTY5MGJlNGEyNzVmNTVmMWFkZWU2MTdlZWJlN2VkN2VjN2YzMzZhODc4YjQ1OTM1MDJiMzE3YjkwMWUxNzNiYmNiN2Y1ZWJhZTk1OGU4OTU3MGY=
```




#### post /account/update_profile_colors
sets one or more hex values that controls color scheme
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| profile_background_color | query | string |  no |  |  |  |  |  |  | profile background color
| profile_link_color | query | string |  no |  |  |  |  |  |  | profile link color
| profile_sidebar_border_color | query | string |  no |  |  |  |  |  |  | profile sidebar's border color
| profile_sidebar_fill_color | query | string |  no |  |  |  |  |  |  | profile's sidebar background color
| profile_text_color | query | string |  no |  |  |  |  |  |  | profile text color
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include statuses

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_colors?profile_background_color=zdc0lLioDYcQl9QvrpHtY7BSHI3WfZ9PclQy79XK79BsjrXLQFePMPItyLqOLADXWtv4CtPKCqcWR9HIPWyBLg5k2w8N6LL3fh7SKWCnnOjfY1XN&profile_link_color=voJMu3O0cC7YnbeEi6ofJMCy6Rw7Pk5kJP7dTVe5xl3VwhAPo&profile_sidebar_border_color=48LHGRycZnx4IgTPtMLISj3WeAeOqCOvKzcqqLDp9auSrnIUatC2NGY2hcRHPFdAep1FbF4kPzchWUb7oOabv9dNm5vbKIMY8NDjtIDjhQAeLMm9Awl6FzU1Epdo7ZngN1zgKcz13agOWDYw9jDPSxQwX4V54ilSjU937J5aTmYPZWm9gZY8xPFuTBzXTUQdPZhWIn6BJ5rJ2NSiNQrlF7PzIpxCknP9m765ucHei8YkVRDJH54ncUXUkuxFSnO&profile_sidebar_fill_color=uVkZ71eqacL53oPLuT9GO7B8C8NuvCJZx3ZF5d5fqRlugagK4qqSx119aPDFrnFZrEEwSKMjB7NSi4Cnu2f24hbe6PUxczwEeba7WXqx5eqni2LN50P9i0ooQiV3RsH6ESdAPD8URyiaA3XF4MPmNdKDwGGo9ouOgHo5lx0d6jnGmkmr7cOUpzyWgfkpDOeTwDZSaZ5gitXFOk6VwUQWuoSKD&profile_text_color=ah1obx1apb9vssYp7MJeIf9ybDW4nAgxRhW2PXde9nKBPI1XvKcd0mLcZIgni&include_entities=VaORdDPqSYNCzDlABRlN4m9Qz9yQxRnt2clfPaGI8ukI7GjIxFwC1GtBP2rnUPQW1bcQlSzumUcuAw&skip_status=8bJLcpeNfgfCa4t75FjW1bvvypI30eg8pZUCp8qEpFhzKLGPqZMsbiXKHGNIU3Rk3LXtTn8i3qSNbyDCyq4KI2upIi8DmZXpKVSDi0WlqO9CnNeVdjGVlal3ttHPsFedA7RS8NezCobZbqVoJBj5ME9f8Q4AwjN6qEZz 
```




#### post /account/update_profile_image
updates user's profile image
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include statuses
| image | formData | file |  no |  |  |  |  |  |  | image to be set as profile image

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_image?skip_status=e84Ck3NLZbvAvAm9JBiAGS6ZGcqlcZOq8S2tWQeV2JwxjSH3uZEaSK9zXAV9zJAICDbztpvv813sUKwoJazCVJbSj62SQCAsfL1JbwekxhNs2jQMupop8AhrGkkxXVZcH1WSxbc5t0xvjoiNOGdWhvoYPJvMEuZmvVe37r9ArG6L4ozS4MPmhek6YPTDkSZPOdTVF2w6JCSO0rH5dxrvLLCKAvnUomKdAE8f 
Content-Type: multipart/form-data, boundary=57cacf55e238a
Content-Length: 762
--57cacf55e238a
content-disposition: form-data; name="image"

--data-binary 
YTRlMzU1MDE4NTBmNzAyNjU3NTdkMDA1MGY0NjE3NDVhYzgzMmE1YjNlMWVkNjY4YjM0ZTFlMjE5ODRiNGY1NmY1MmQ5NDUyYTZlNTU5NWQ2N2I5YTgwYWM1MWY2ZDRlOTdlYTE3N2NjZTBlMGYzMmY0MmQwYTc1ZDc1OTcyNDUxYzdhNzRlMmI4NTNlY2UyMzdiZWQyNTcyOWQxNjdlNTY5N2E5NDY4MmM4YWQ5YTliNThmYWIyODc1ZTZjNTdhMTE3MTdkMDI3ZTJkNmVmOTA3ZDFlN2MyMzdkNjJhYTEyNDhkMTk4ZmMzNDllNTc3YTA3ZjE2ZjgzZmYzNWE5NGQwMzVkM2ZiMTY1MjliZWIyOGI3MjAyYTdhZGY0YzhiYjdlZTM5ZTM3M2ZmNTczZmFiY2E3Nzk3ZDVhNWMyYzQ1OTNlOTE5NjY4ODI4MTU4MjlhZGEyNGIyZGM4NDM3MDAwOTg2MTZjNTEyNjg3YjA1NTcwMDU4ZGZiYTNmMzQ2ZTBlNzQyMjM5MTlhZDBhOGIzZjk2ZDNlNzhlYWZiN2Y4YzU4NzAwNmYzNDE2ZjZkYmFkMzQ0NWI4MDJmMTAzNTUyZWE5ZjA1Y2M4OTEwZjEzYWI2YjBkZTBhMTMxZWY2YzM2NDE0YmI2MzUyZmFhNTNhMjU1N2E2ZWY5NjViNDU=
```




### Resource : blocks
#### get /blocks/list
disallows retweets and device notifications from a user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include statuses in response
| cursor | query | string |  no |  |  |  |  |  |  | breaks block of user to be broken up into pages

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/blocks/list?include_entities=EmqgeehGVmTsNpey1Y9wl4UHP7itgxaVUAc9OtPJPJbD8pb9nlGJpBreJJI0hSVbs8lhBb0rVc44Cge0BUJ1wagfUYfbRbnjjIBUUCmPPqTrG7si2cjynzOhx4sofPIyyktsWPiLgcdWkGemSyVg7KxFO044QMCp66R3WaOcm29GIn3AWZR3JoIypMCfzfEGlwKiGzu3BDJj1NUXML1vaK3zxGP7VuNh0yzH73KIHu2IhXG3&skip_status=HzUrDuYjj5fOTwPr5wz9hiQMlz3if72XGXokr&cursor=DLtSznpoPuVoDdGuZ132kiamfQjEbL2OwvH6S6uIBq6fDMJCONF86PvmGP0SB3G7yoervJ 
```




#### get /blocks/ids
returns array of numeric user ids of blocked users
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| stringify_ids | query | string |  no |  |  |  |  |  |  | returns array of numeric IDs as string IDs
| cursor | query | string |  no |  |  |  |  |  |  | breaks up block of user IDs into pages

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/blocks/ids?stringify_ids=79gmN36qRT50ZVwmCmmuXqb5YAjq53AccQz0UFqMzvMzrjV3FiyDIJIHj27p6ICizbjtRJfqf2ZGmVK1diFW2oDmrLLxtnQ3z9wqSMQ7PQNbMyd0QSWThzfIk1fOo5RXeoo6bfe062bSApSriOkznzhIBxwZCoXRMlYXBcYHeazPzrgRgArDaImLgTLShJJ45I2GU0n9aWYKoeCEP3i0&cursor=EM2xyUPhEUnnW3hWqr7npRLEtquwIvjnilVQgK8 
```




#### post /blocks/create
blocks the specified user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user to be blocked
| user_id | query | string |  no |  |  |  |  |  |  | ID of user to be blocked
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to skip statuses

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/blocks/create?screen_name=EviByAxZ1Enqw85Zyzwh4PEmbzdrklmYRFzqf7pgMNGiVMiulOLqEqNPZ0hjmDidjSDyZ3OLQv4MhmhDb33PtREtRWNez5rSX5&user_id=X9fI0LNN294Fk8J9CAO5sK&include_entities=GkX8dVdFSnUBoFobIygnTo731HR6aCZQXXYbScQLALnYqLa9kqxdPEgQm8XwLWnJTlULyLx8wU7XGh60IDeyhuoEDmaoix7bT2XrNuAjoIh4Zn5I0jgiNFWr16QjEYvx0sZOWA8lippiMu0NOh5&skip_status=W13Y8TiNRNlRfkGcVOxddXw0sxNgOTSLUVK3O2QGPby5wehr3PFhNbhfI5vxYojTj3W85MPUXnZtChVF6A 
```




#### post /blocks/destroy
un-blocks the specified user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user to be un-blocked
| user_id | query | string |  no |  |  |  |  |  |  | ID of user to be un-blocked
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to skip statuses

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/blocks/destroy?screen_name=TLe9ujF2i3lbno7vtUloRIolkFg0MRWGCaQ7uv9MyuYVS5rm0MKSv8dPOuPBlMhYX75rCfebJd7CiyYjlJbQSoFHTvifiAdfHjHkyWwi9DVsbULwDWmwl2dfyvuQ5H5N1N8AJESShNktI60l2nSoq5DYB7OHPUuQHDqqhjjz7E3PK3bNr3cR9PPKXErMyWDgz4HRn0qvF&user_id=lqxweZAqQKfGuckWZTTC9tGQk4RLAwfVXMsbM3BCNRii4Df3w8GGBmwWroH2VWXSJq3vtF7hwqA&include_entities=3PEAYkgAHNw8cda7980Tz3o3JwkfWUQ0KvBIPSiwGPFS2QZcY05y3uBN0W3XRTYBpAjesCL8rq0ug0Hf0NN4hoRilVgcPeNeO7shKdpbDqGUrn9rbWwtloLGj1S8gGm5NPmx2LJGbqBCOK4ZHBs3ZeKifCrwjNB6CXEFJomVOXyCIDCpe4tdjdwyQX59LGgoEV3ojpj8nSL5vnvJsYXLcuk2spbd6sBLnF9G5tOslAy&skip_status=X4Bq2zbf3whvVtJ2VkOi0XY5rNyNn6ElagLdPXsStJopc7s7sgqseoxFc5tAc8WmoIAdF259MuyZB074hxwvW4b8aFJnNFK 
```




### Resource : users
#### get /users/lookup
returns fully-hydrated user objects up to 100
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user to lookup
| user_id | query | string |  no |  |  |  |  |  |  | ID of user to lookup
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/lookup?screen_name=nko3nuc9YL8AMfE3MbzIgLRrqBOdgyoETNIghUpgGyQsOvvBH5jYQbphMeu3&user_id=TIGGqWYlme1V5tJBZki4EgVQGcCVHGIAophPmgaIubEzFnbEItJmKFdrSPmzw5aVusKQIVzd7dNMBYrjsbGcQTEIJ1ig6tbAWWrER1RYeFLPDc95nQieJWXtXgJ3JUEGQ6kI7cGmRrcvElA&include_entities=bSgVOeoMu7Qe2uUTBfBIri4jJgOoCpqOhHJ6V7SqfIFhdzbOOMxg4CAOTpcvODk6l3chb5HqOmI2WTRLGo2K1CzU1LqQpKWKO81ZeJq369523WOJlQums3huPHkfsgZgp1gDLHGSQMUTIID3y7q1bHv1pPgS6g9vip937QVXCQRlzup8CP9NxFPXv5PBlZ7DpgHw7DtJtk53Pu 
```




#### get /users/show
returns a variety of info about specified user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user to be shown
| user_id | query | string |  no |  |  |  |  |  |  | ID of user to be shown
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/show?screen_name=rklfR04OwaE7vDe92vRyCu2mYnr2cWdDgzT8AYX68BdEfsNiXFRz9TV8gnas&user_id=o6AX0IxYFD6hRLwjyPheGQnzMwQ9Gjt4p32pLAorevI5gfpP4G3LwrljXbtEuWJUZLk&include_entities=mIcAeVFub5jgLm1iOmBLy4q219X1VhMh0ZReVxI6C2mnpoGdKhZimplozjpuAcMBbEQ6czdOBAc0YSdJac2xCoVbHlGixtTI7JPji38UDlUCe8molpWXNS8vdPNKiHtprjJKnRE0dzDrH0Q3pM0dF9ITYwEgd7GErppOh3PuDtVltLoTyo6dyP6wlLMyStdk 
```




#### get /users/search
simple relevance-based user search
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| q | query | string |  no |  |  |  |  |  |  | the search query to run against people search
| page | query | string |  no |  |  |  |  |  |  | specifies the page of results to receive
| count | query | string |  no |  |  |  |  |  |  | number of people to return per page
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/search?q=D9aGYFkrAFVm3OVsU91Jgx51kDUNReGunRbmwvN6bJtfx&page=IsyJbOhgPBUJpMY6hmXs&count=tYwAaf3pMs8e1RqP9HFKCoaomgGIe9rH7XhiclIZOQePIFFRnkCZJNo644PidgZldhEqDmqsdFiVkXNHhqH0d57haWzoczJqRnRuKhWXWeThbGZt6GujMBBWxbkKK4aBs16cj2agg3ysJxWQera03LWBWhlHlwjOyp0Sra9IdHbXe8OtzYtDKqeHIAo36HRF7Sxy3GhhoteDB26b1zOL02sICRMJyEpGwXfAEwR2Z5FB8LM9l&include_entities=VlDn3geQ0Nupt0nIA1fs4fyJQGvDQR 
```




#### get /users/contributees
collection of users specified user can contribute to
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user that is contributed to
| user_id | query | string |  no |  |  |  |  |  |  | ID of user to that is contributed to
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to skip statuses

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/contributees?screen_name=LcR9g8o69bBzFBWocYEF2TdMKUhnK8CwltGCC4JLgkkWWhk9fYOhR13CVlZGtBdP5TrIYaueuObr5vAltoClpGYl1Y2vAfkG9Mo7WSmrHxSN3t8xRLThsRCtPEZpUj635ub2nyu46nS9Q1HHMAZesCIihHIb1Of6ir9GZ&user_id=L60DgQEXyryxF09ojq51C6PRd8inOi0zo0dFRRCpibXYc7mvxswazm2NvlajDaT2b7H3YkshvqfHxCc55JfE5hrACCUgMOiYW01UkucPUsxs4Kx9tMOz4gaHS5YFUgDQhFKB9Xr4pYwtI3DcQrLVHWCA1AfVRSL8xwKGucLTbhnUl06bsS6aOJKQkZMcSykp456yhRst9PnuQtGimMsbwd1QcO24mnurtBZLsseChB675&include_entities=qszSD56FWjtZoPnSgRtgCWIRy0tF7zrx10qF6xk3QO3eEr7UiBbVxUM6UgL2PczQd0wkxQonFrCjTJebkp7SkTYe9KgZWQQaQmvocTLSlobf7pqsPxl9rknB4EA1uqblMHJZBuRWT3b1tCtiaPsB9QdduNeZeqk0730IySFrVRsptWHEL9fVZt8ugntuNNvVQwDoojQkaiJEfri1ByWB155isyNgmjbdPPCe8szjLjY0Kh1lPXWR&skip_status=2avAXLXhWa6MMlVeUeZdc0Yu1jjZgb2ilyTjjQBg0H2M3Y0Yc0cp0aT2ud2Lp54LDX4XOFdOngBreCprCCQDNKGhYI3nN78r5doTTCHhSiJ7V9yxLpbyaRQ8zTwn1EP6SdZMQH3I0MQVVosHOEfYv6650Dt1 
```




#### get /users/contributors
collection of users that can contribute to specified account
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user contributing
| user_id | query | string |  no |  |  |  |  |  |  | ID of user contributing
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to skip statuses

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/contributors?screen_name=i8aw7WmP05PNVKJkdr8SH6nNdsNQVP8eYjK5g7VhdK48vOtJfBBWIZKVryMnoVBmfmsvunMH8RQDGjnWUZSDYDzpblNzhpVwLo2gLOXTGNxm7Uj1TcFRPeh1z4ARtwnfUpvGetzVh6io1BqVN5NCj4DT9eKDL8SGyomMRVH920x4BXZo2M1mRFf0TZDE7wlGUHsMDaWFatKLrJatwbPoR5oK42p&user_id=yKStslg5wcKGGus7eDBLPr9GwyrBBQOaBHE32V8z7TgOoIVDmwpbXyRu7i5J9TTLAxPDsYcASsogbkUxRjIPSAjZToI3iCPT9EwCDJdvbCMnWGUO0DDSeXS7mBbEd0xnF40jNdOZQBmMigBiUea8c2gyEscRsKf8OfrC&include_entities=gBjSX6aeHs8WCh8FxHkZTcsErBtH35akGucEAmSiP1fsio7Q5sPZEiD5U7MXcXhTrux2RqlGrA8JYgA4Ip3mIHsCOeA0cSUEmrHdS2TkD23BiEG03JmMqOpe3ZfgR9&skip_status=eBCsuEmOhoSTGwzGAj3mJSLYWLecDn7SZKktoGhG49ALFasftvCdoocl9qyNOGFNqZgPGxwLH6wmhZCLveZTCbeMCMzqsedTeuIV2eGJld6CcInHWmByyPkaCUA58OYniGikUY3gc9SoSf6OCHnaxIlaCVfLJe81UrmPqq5CAY1se8gQPE1nmmxZiNL11T3WlqLLQRoq 
```




#### post /users/report_spam
Returna users report spam
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | The ID or screen_name of the user you want to report as a spammer
| user_id | query | string |  no |  |  |  |  |  |  | The ID of the user you want to report as a spammer

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/users/report_spam?screen_name=&user_id=trfmOcYYOnF3OXYzXP6WQLb1oIlk8mlCOBYDOWBCkgG9eFIbuO8kAklY3Hib4EOSgMv4J7G4omdC2VOwJWQjhcikUBwYfkRv7mARuhV 
```




### Resource : geo
#### get /geo/id/{place_id}
Returns all the information about a know place
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| place_id | path | string |  no |  |  |  |  |  |  | A place in the world

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/id/pS3x9UnNWK9ji9B5UD7OG397PVXGjnwIfAgouEcqolJHvlNpYUeFXnMMjJtC7ZlmzBL4fXvEjfmOA9ez4se1Q1O9LiMSi 
```




#### get /geo/reverse_geoncode
Given a latitude and a longitude, searches for up to 20 places that can be used as a place_id when updatting a status
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| lat | query | string |  no |  |  |  |  |  |  | The latitude to search around
| long | query | string |  no |  |  |  |  |  |  | The longtitude to search around
| accuracy | query | string |  no |  |  |  |  |  |  | A hint on region in which to search
| granularity | query | string |  no |  |  |  |  |  |  | This is the minimal granularity of place types to return
| max_results | query | string |  no |  |  |  |  |  |  | A hint as to the number of results to return
| callback | query | string |  no |  |  |  |  |  |  | If supplied, the responses will use the JSON format with a callback of the given name

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/reverse_geoncode?lat=fRJ0WYYrDhHZ6i9lRdO6fF74OTmALEI0wr1tqZV4hC3oUdKMqySGe0K2T7DFLmFiNGLdGGhYjlmez700FTGTUrWOyAtkX8CKPoYw5gupCRDb&long=EbExRysivgR6Jb3SONIcMei2JHEBlPzZ1ewSNZbif2oYdrR1fze1Ox4xfI9AyJzzX6sK5D3kGrjUTaW9KbbyIf6XYfxxY77WdzGid&accuracy=DTbWO57KeRVppDFvBEL8bJfiFtSmL56pZhmNntxBls1K6HgHl1QxL6QrzINlNUKNc6AzA7bVAcGGUWogYeNKkDbUlZf9TZW56xFGEQCf3iWYfkeez1YUFaO193b33899FPQjFszJLvH0&granularity=VepXdkCn8ExcPBfYKpDzfXfIwYt2FtSBIiyVCbjLQQXGrdEcChMSe1AK04MGyFhhXQdA1wlRnjxPxc2atO2IQDsQHfwgVOxTEKtFhPxE95tGhvQLkTtawW0ecxv7l200NuF4jdItjc9BI0m3TQdqMeFYMa67c67ZBN4U1MokZyVIyiLs8YSUdyTZIZ7V6fUH3ZC4&max_results=0pLykt7CfzKesFr0yqJxyEENzlQyYVjYk5xFzEhOe22HHuIfUrNt5rgEM7cK3wJnCh2bWk0am3S3xAjr26V8xbMkjZ5mwOK85Nk18kcun5yUGSmIYhQwtDQMCV98KUgPHBRPV4ki9TdPL&callback=yKQogk276E3gNNb4DSFuIAz3TJX6yIG7twwKQyRXdUe0Hp4kiKP1lp5e82lHL1OeykYoSQm5KB6s0bNjVCkg2pvarQRcSFrq0pPTfbZ0N5sNhf6cSrtUQZ5iQWvICW8CmXw 
```




#### get /geo/search
Search for places that can be attached to a statuses/updates
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| lat | query | string |  no |  |  |  |  |  |  | The latitude to search around
| long | query | string |  no |  |  |  |  |  |  | The longtitude to search around
| query | query | string |  no |  |  |  |  |  |  | Free-form text to match against while executing a geo-based query
| ip | query | string |  no |  |  |  |  |  |  | An Ip address
| accuracy | query | string |  no |  |  |  |  |  |  | A hint on region in which to search
| granularity | query | string |  no |  |  |  |  |  |  | This is the minimal granularity of place types to return
| contained_within | query | string |  no |  |  |  |  |  |  | This is the place_id which you would like to restrict the search results to
| attribute:street_address | query | string |  no |  |  |  |  |  |  | This parameter searches for places which have this givven street address
| callback | query | string |  no |  |  |  |  |  |  | If supplied, the responses will use the JSON format with a callback of the given name

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/search?lat=9vDWB5KSlR5eiy89ydsoaX6NUeqhcWUlrxi3D2VZT0dczmm7AOwKMCxHRXY3UTomqGp4Jk3ClhPVDb2d0zYMbwt2ts5oluKMb9QUuUxPbmKPyN2ym1lyxPA1hGpDb9pmighNbO&long=nbncJbfiygE6NtHPKoenzoNVG3dte16BcuOWF3fdkTk8m2X7qbuZziVgl8KAaRcnl0j14zfpsAxPCuW2Gr1gJXx56iGg9SDvTXxYwMnZmUPYpM15e3mX0T37cJnmC1SvYptvcQ&query=zKky96zfkCCiDwmKI584H9Wd7mGDyx87isGszfHTSkcvQygyEoDmxzzFWgiuNqC5TixsyfmrzyWp&ip=dYLBB78bGN7W5CJwePpxnS6CexcMuCTHAFicMrntfvpl79RlZhTm90Znx&accuracy=a2O3KpJ2BvuZYJuo4ByVXxdRUmRTJp5UsUYcjHfVcJVbspAx18tZFGRz3ItN8zHAtFMNm2IzLEKe3kL5tf48WVIZEcMNLtne8a2vcL4YpPctaYyDdDMazu9dGV1sooHxzJ2Lu7JTWWn6UVJ8ywi80smHnnaMLRklAm65tQZqMmwHhgQQM9YNBkvZHFLtw6O7sVcWMbnzyUhQa7GXhFLTZh&granularity=HWFbtL0AeVNaHZyhxsynDG4BYJmRJDKrApC3bDEpysAgr8xZA6neMrPKbbCUPnmpNZtYC7nbzYr16Z0H5nVSPLC0XfVMCicphGnTOL4oJwpQwqxCOtuDe7EbnAYZSap9QM3Ey82iFs8bSFOH8jknrZyOzwOsHdBy0FcyOfQtHYFAEthNMCadBJ2bgQDX3fv3UICIXsc&contained_within=rRg5kxT7a3lLMoX2eA0hPvlKeXtbqFRSw7XRFQZPUkBHIyKX9KfZgAJuycGZSyRoFPglGfbAAMijl2guNvt46&attribute%3Astreet_address=zFpgEhOwGulXP2c0DMNV68YmDMS7RZkqEKGj2uQJYcGOeSORFBNLKM8nz0vqZPQEAxYC2Ol102PeUD6AfUm0GuofvTFvJwaj48W6Wh7WjWbeAhPQbbQSGe8c8NIRkSap06vXoDUIA5XbnM2zYSrF7zRfnz6Ish7soDqMhkvSqs4Nf6ndYPS6oJmMjsvLKDe8gFVyZqqqSue7BBlAqdGPX2B&callback=v73fKho0WjzWJ0nCvBK6c5GCjnshp4zVbCbVUzWRTvNCwaf1MZ8Y5OBpb3GB7fxjSIeMhaDbFrNcC3do2ln8aYxm2eXatutldH8vSLGyctKOxXdzjAHt 
```




#### get /geo/similar_places
Locates places near the given coordinates which are similar in name
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| lat | query | string |  no |  |  |  |  |  |  | The latitude to search around
| long | query | string |  no |  |  |  |  |  |  | The longtitude to search around
| name | query | string |  no |  |  |  |  |  |  | The name a place is known as
| contained_within | query | string |  no |  |  |  |  |  |  | This is the place_id which you would like to restrict the search results to
| attribute:street_address | query | string |  no |  |  |  |  |  |  | This parameter searches for places which have this givven street address
| callback | query | string |  no |  |  |  |  |  |  | If supplied, the responses will use the JSON format with a callback of the given name

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/similar_places?lat=fPBtNLXifjvXr0PcGopa8dH6qhp0&long=TzeJbIxWFQcYlapm0B3o1ewfWDFd3GdWgsGraeoP4BOqLdMLPPaQ3G5ZjLdnsrjIT0a4eyTj9HJVVvHKlRBpyGoSsCfU3zDXzN1OmV&name=wDRsym9jI0U7yBvq38FYbeC8OqaDN5LjICMgYVzGWuNu5jV9sB8EQKNEa&contained_within=hX22hKE31DZBkV58qaslkUWsyMclrnjJklLC6qG74FIoBNx1YZmiUjKt6XOxk8gFt2hAtYIyEqXfeugduDvoXgR3dGBxOSciVuSosAX71UmgoDtTgZhdf9hsPT0ELdXGHQ5aq2hsWDIlgcexbwLqF3T&attribute%3Astreet_address=WTaH67oOXtYowgQsTzOaL2IWztnexgKtaUah2z5Z24oyke1eOQpAS7wsBUH9brCmmNDomJnoOLX90ZoPPNpIVWaxQRG2jioF623sLrRAcPJdO72DVsmRowofo4hHnFmt&callback=pWtQN33CNhrVk4QMqHbX6qlbH2zmp33OZwFMAJpn1QjlVa8mSjjYJE9qHJN6MQVLnByYkXmmOFHJPP5H9pGT3QjLz7RlXN6loFkJCG5rmNbbDhTMGzFJqZvZ6nk4arqy6KiJqnaMamYNDSAjsf3SfyRlVcp6EPFKAXu0lFNw1MkEEUX6a1YpAQKv3aCH0hsAeWBABo6DaqhPlfVvhTURKFnNQZvQgXrvT25vrc8CDqrYGntX 
```




#### get /geo/places
Create a new place object at the given latitude and logitude
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| lat | query | string |  no |  |  |  |  |  |  | The latitude to search around
| long | query | string |  no |  |  |  |  |  |  | The longtitude to search around
| name | query | string |  no |  |  |  |  |  |  | The name a place is known as
| token | query | string |  no |  |  |  |  |  |  | The token found in the response from geo/similar_places
| contained_within | query | string |  no |  |  |  |  |  |  | This is the place_id which you would like to restrict the search results to
| attribute:street_address | query | string |  no |  |  |  |  |  |  | This parameter searches for places which have this givven street address
| callback | query | string |  no |  |  |  |  |  |  | If supplied, the responses will use the JSON format with a callback of the given name

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/places?lat=oO14bPUakLrhdWbg2GHfPkSgMQW9kUqIJrNUgI5BuxSHu3XxKFMA0EQMvNWPHmyqOll54rGyYygsCeZnUMXUqNHWADLi0kIOG4UKvAjt9zWMOW9II6D9Uk5uYRNYbvNRAHB5iVzsuvfiso1buEkpYqTXhHVsdJjNrVSKQrc&long=XsDpQEBljVKhlEeDla5yUpllkd5bFiwDKa3BPEW8AGqWlFzGPEfJ4B5oPaAut67egaP6PLepsElOjUv9zKTDlY2a9CFDINRZYG5NskcVZyJjses2ZmFllIwukb73ZY2XF8L8sY3rwNLZ2d12AHnVpTpJ5xM5wP2bXOkqMoSjbDi&name=Rkgr1EmryMbDjYJQNM2LAmcnK4GWHYazjr0k5nMD9XhtW0jJMmvnIHKtMqpupA3I1337rPLBN24J3otQKYdtGXWsolWNW0vX3y5voQ6bTbUWznMkm0N3YJvm5s91sEZwd42BV8MOjHLT5ydry1vwK1TQt2SWHStUWvvSEiHXZsQ404wz516Q2ZGw2ztJrWEos9g6sX4rqUwqZ30457U77BE9&token=7TC4x0xHgE9eIBED85Cb6HgdCokd2toam0fU0MBhrKv9laNtfqFm7WzJkUXnnlyKmNFnAgE20acmkZQApwXxswhMqeaOAIzXwek7uZ9v9lSulI5Le2jGyAtZPENpmnnTBH16GbCQwukScqErsX81xC1mgPMCc9wORx&contained_within=xIxof1I8e8MGBJODgqEDGtqjFzPurnpZ5WnlX5tcefSQYGtf77SNAi6gSWKjj9ip5GK2Lef0t7QsNjHUqAI0TPgML165apvf5fiRuxRYEHqs18nrJ5sCUJpGKvMUVha0xsR1ZJZEqq6syuThzmUu6&attribute%3Astreet_address=bRPXMKeWKMoCNolN3Md9eLD83dvXIBgTs6ReQ6bBSAdGYyt1lGbzsPHv3dsLOJFhPwwGDHhvhucg3FipmuYPjGknTN9IxOZnlv3ZdlvvQHLUn4jJyhzSYTfSHpAeeACz6Fzj14PRLAL9F4Tdms6klmd3LNhZoTzuz8NAcCrYd&callback=7Th06EscZO 
```




### Resource : trends
#### get /trends/place
Returns the top 10 trending topics for a specific WOEID
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| id | query | string |  no |  |  |  |  |  |  | The yahoo where on earch id
| exclude | query | string |  no |  |  |  |  |  |  | Setting this equal to hashtages will remove all hashtages from the trends list

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/trends/place?id=cRk09jo3TSC1GdejFdxSkqalwOOJNDiZvD0EXoHQgkSWx6gckN4Ede0K3OuQsMQXqQBnejevD6sadInxvrcJGctJ1XAtKqrah2yvmM1ZSta6bxDHZPqG2Uq4R0xCrZMI2leo7fn0Iy6U5JB5z2LBWcFOcdqDddmfyADGP1GyzMsFw4K67wH3In&exclude=UBjyOxV36vHMkItThglWMpHSxdAAWYtRzNpoklrqQ8dbRG48Wq5JQMCn0cYWarNKed8zyA0pJdAAUFIQ5OAVBciBpgyzImkXAtx83xyMK9nFO6wTU6Pvi87HpGh72C5C5CL8ajVUsjAhp6bjc0Pv8XdyDvGF7Lhco3lymhtPA36Z9hjmi9Rr65ZJAFoHrGUPJgo6yRW8V285krsCBj3Hp3qZIPH9wCZgSomqfjzbmHhG9JjK3nrsqSr8I 
```




#### get /trends/available
Returns the availability

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/trends/available 
```




#### get /trends/closest
Returns the location that Twitter has trending topic information for
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| lat | query | string |  no |  |  |  |  |  |  | If provided with a long parameter the available trend locations wil be stored by distance
| long | query | string |  no |  |  |  |  |  |  | If provided with a lat parameters the available trend locations will be sorted by distance

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/trends/closest?lat=ieLiuEGR5WaE7wmpdw8wgbTIDkB5sjeLxZ41EKSJG3nOzKeMgmjwxcfbwQ&long=ZavLHvPJ9ACShFg6f0k2gGlNey3q5UH54cRMIGvRh8KyO1E32Y5jFr7TZaj541a9d2VVIqN0zyynAcqCbwWQX3KXd43i5erjgneZN2ZnBxKbKaNVHKMFNxD1BGkHUL0a8f9Wh9kSG44rfSmWC9BpGfqiVKZQwZ1FfbCwkWp 
```




### Resource : help
#### get /help/configuration
Returns the current configuration used by Twitter including twitter.com slugs which are not usernames

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/help/configuration 
```




#### get /help/languages
Returns the list of languages supported by Twitter along with the language code supported by Twitter

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/help/languages 
```




#### get /help/privacy
Returns Twitter's privacy policy

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/help/privacy 
```




#### get /help/tos
Returns the Twitter Terms of Service

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/help/tos 
```




### Resource : application
#### get /application/rate_limit_status
Returns the current rate limits for methods belonging to the specified resource families
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| resources | query | array |  no |  |  |  | [#/paths//application/rate_limit_status/get/parameters/0](#testtoto) |  |  | A comma-separated list of resource families you want to know the current rate limit disposition for

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/application/rate_limit_status 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

