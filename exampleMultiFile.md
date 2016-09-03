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

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| count | query | string | no | Specifies the number of tweets to try and retrieve | 
| since_id | query | string | no | Returns result with an ID greater than the specified ID | 
| max_id | query | string | no | Returns results with an ID less than or equal to the specified ID | 
| trim_user | query | string | no | When set to either true, t or 1, each tweet returned in a timeline will include a user object | 
| contributor_details | query | string | no | This parameter enhances the contributors element of the status response | 
| include_entities | query | string | no | The entities node will be disincluded when set to false | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/mentions_timeline?count=us%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20&since_id=erdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesua&max_id=cilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibe&trim_user=t%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20b&contributor_details=isis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Ma&include_entities=vinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20b 
```




#### get /statuses/user_timeline
Returns a collection of the most recent Tweets posted by the User
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| count | query | string | no | Specifies the number of tweets to try and retrieve | 
| since_id | query | string | no | Returns result with an ID greater than the specified ID | 
| max_id | query | string | no | Returns results with an ID less than or equal to the specified ID | 
| trim_user | query | string | no | When set to either true, t or 1, each tweet returned in a timeline will include a user object | 
| exclude_replies | query | boolean | no | This paramters will prevent from appearing in the returned timeline | 
| contributor_details | query | string | no | This parameter enhances the contributors element of the status response | 
| include_rts | query | boolean | no | When set to false, the timeline will strip any native retweet | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/user_timeline?count=augue.%20Suspendisse%20potenti.%20Mauris%20vehic&since_id=ingilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20au&max_id=s%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivam&trim_user=pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20ne&exclude_replies=0&contributor_details=%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20vel&include_rts=0 
```




#### get /statuses/home_timeline
Returns a collection of the most recent Tweets
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| since_id | query | string | no | Returns result with an ID greater than the specified ID | 
| max_id | query | string | no | Returns results with an ID less than or equal to the specified ID | 
| trim_user | query | string | no | When set to either true, t or 1, each tweet returned in a timeline will include a user object | 
| exclude_replies | query | boolean | no | This paramters will prevent from appearing in the returned timeline | 
| contributor_details | query | string | no | This parameter enhances the contributors element of the status response | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/home_timeline?since_id=tor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.&max_id=ortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20&trim_user=os%20in&exclude_replies=0&contributor_details=%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et. 
```




#### post /statuses/retweets/{id}
Retweens a tweet
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| id | path | string | yes | The numerical ID of the desired status | 
| trim_user | query | string | no | When set to either true, t or 1, each tweet returned in a timeline will include a user object | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/retweets/ut+quam.+Maecenas+et+velit+dignissim%2C+tincidunt+justo+quis%2C+iaculis+odio.+Mauris+volutpat+dignissim+mi+eget+lacinia.+In+nisi+odio%2C+porta+ut+quam+non%2C+imperdiet+varius+orci.+Don?trim_user=eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20qu 
```




#### get /statuses/show/{id}
Retruns a single Tweet
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| id | path | string | yes | The numerical ID of the desired status | 
| trim_user | query | string | no | When set to either true, t or 1, each tweet returned in a timeline will include a user object | 
| include_my_retweet | query | string | yes | When set to either true, t or 1, any Tweets returned that have been retweeted by the authenticating | 
| include_entities | query | string | no | The entities node will be disincluded when set to false | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/show/agittis+at.+Nullam+vel+metus+ac+quam+gravida+pellentesque.+Nullam+?trim_user=um%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posu&include_my_retweet=rta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20&include_entities=sque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20e 
```




#### post /statuses/destroy/{id}
Destroys the status specified by the required ID parameter
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| id | path | integer | yes | The numerical ID of the desired status | 
| id32 | path | int32 | no | The numerical ID of the desired status | 
| id64 | path | int64 | no | The numerical ID of the desired status | 
| trim_user | query | string | no | When set to either true, t or 1, each tweet returned in a timeline will include a user object | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/destroy/-2100889965?trim_user=am%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh 
```




#### post /statuses/update
Updates the authenticating user's status
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| status | query | string | yes | The text of your status update | 
| exampleStringIPv4 | query | ipv4 | no | The text of your status update | 
| exampleStringIPv6 | query | ipv6 | no | The text of your status update | 
| exampleStringByte | query | byte | no | The text of your status update | 
| exampleStringBinary | query | binary | no | The text of your status update | 
| exampleStringDate | query | date | no | The text of your status update | 
| exampleStringDateTime | query | date-time | no | The text of your status update | 
| exampleStringPassword | query | password | no | The text of your status update | 
| exampleStringUri | query | uri | no | The text of your status update | 
| in_reply_to_status_id | query | string | no | The ID of an existing status | 
| lat | query | string | no | The latitude of the location | 
| long | query | string | no | The longitude of the location | 
| place_id | query | string | no | A place in the world | 
| display_coordinates | query | string | no | Whether or not to put a pin on the exact coordinates a tweet | 
| trim_user | query | string | no | When set to either true, t or 1, each tweet returned in a timeline will include a user object | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/update?status=ctus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consect&exampleStringIPv4=226.154.24.252&exampleStringIPv6=2001%3A6324%3A2ee1%3Aa248%3A6834%3A55b0%3A%3A&exampleStringByte=bSBlbGVtZW50dW0gZmVsaXMgc2l0IGFtZXQgaXBzdW0gZXVpc21vZCB1bGxhbWNvcnBlci4gUGhhc2VsbHVzIHNpdCBhbWV0IHZlc3RpYnVsdW0gcXVhbS4gTW9yYmkgdGluY2lkdW50IHByZXRpdW0gc29kYWxlcy4gRXRpYW0gZGlnbmlzc2ltIHJpc3VzIG5vbiBmZWxpcyBzY2VsZXJpc3F1ZSBhbGlxdWV0LiBQaGFzZWxsdXMgZmF1Y2lidXMgdXJuYSBhcmM%3D&exampleStringBinary=0111101111011010010000011111011000011101001110001011011000100110001001110100101001010111010111110111000101010001010000011101001110100001010011000100000010001100111000101101001001110010010001100000001000010101&exampleStringDate=2016-09-03&exampleStringDateTime=2016-09-03T15%3A35%3A00%2B00%3A00&exampleStringPassword=%264ppe%28%29G%7BgmAf%B5OP%28K%21L%23n%28%24Zy%5Cx%2AIGcN%2Fczk~6.%20s%2B%24%7DOqg2-%3F%B5%B5p1g7%3Bh%7C%7BX%5CA%A7%7C0%5D15rZy%2AVV%25vG%A7%3AjMQ6NA0hQ%7C%2F%7BN%C2Et%B0Pu%28%7CuR6q%26%5CVGIc%20%5DCTU%2AT%2A%A7%205E%7B%27%7C%5C3sQ%26P%40VXVTU1d-eL6m%2B%3F%3DEXp%2BR%3BhLP%27InI%5C%B5F%21Z-%3A%60%2BTh%7C&exampleStringUri=http%3A%2F%2Flocalhost%2Fpath%2Fscript.php%3Fquery%23fragment&in_reply_to_status_id=em%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molesti&lat=da%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20cong&long=dio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20&place_id=us%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gra&display_coordinates=uat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20era&trim_user=tricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate 
```




#### get /statuses/oembed
Returns information allowing the creation of an embedded representation
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| id | query | string | yes | The tweet/status id to return embed code for | 
| url | query | string | yes | The encoded URL of the Tweet status to be embedded | 
| maxwidth | query | string | no | The maximum width in pixels that the embed should be rendered at | 
| hide_media | query | string | no | Specifies whether the embedded tweet should automatically show the original message in the case that the embedded Tweet is a reply | 
| hide_thread | query | string | no | Specifies whether the embedded Tweet html should include a 'script' element pointing to widgets.js | 
| align | query | string | no | Specifies whether the embedded Tweet should be left aligned | 
| related | query | string | no | A value for the TWT related parameters | 
| lang | query | string | no | Languages code for the rendered embed | 
| exampleNumber | query | number | no | Languages code for the rendered embed | 
| exampleNumberFloat | query | float | no | Languages code for the rendered embed | 
| exampleNumberDouble | query | double | no | Languages code for the rendered embed | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/oembed?id=ibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20&url=%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Viva&maxwidth=utpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilis&hide_media=velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20ne&hide_thread=sque%20enim%20metus%20in%20eros.%20Ma&align=interdum%20fringilla%20orci%2C%20gravida%20ornar&related=esuada%2C%20velit%20eu%20dapibus%20vehicul&lang=moles&exampleNumber=7.74729E+162&exampleNumberFloat=0&exampleNumberDouble=0 
```




### Resource : lists
#### get /lists/list
Return all lists the authenticating or specified user subscribes to, including their own.
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| screen_name | query | string | yes | The screen name of the user for whom to return results for | 
| user_id | query | string | yes | The ID of the user for whom to return results for | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/list?screen_name=eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel&user_id=m%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa 
```




#### get /lists/statuses
Returns a timeline of tweets authored by memebers of the specified list
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| list_id | query | string | yes | The numerical id of the list | 
| slug | query | string | yes | You can identify a list by its slug instead of its numerical id | 
| owner_screen_name | query | string | no | The screen name of the user who owns the list being requested by a slug | 
| owner_id | query | string | no | The user ID of the user who owns the list being requested by a slug | 
| since_id | query | string | no | Returns result with an ID greater than the specified ID | 
| max_id | query | string | no | Returns results with an ID less than or equal to the specified ID | 
| count | query | string | no | Specifies the number of tweets to try and retrieve | 
| include_entities | query | string | no | The entities node will be disincluded when set to false | 
| include_rts | query | string | no | When set to either true, t or 1, the list timeline will contain native retweets in addition to the standard stream of tweets | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/statuses?list_id=%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20variu&slug=r.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urn&owner_screen_name=%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20&owner_id=%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20con&since_id=ed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper&max_id=s%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulu&count=rtor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspen&include_entities=retium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maxi&include_rts=unt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20 
```




#### get /lists/members/destroy
Returns the list of memebers destroy
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| list_id | query | string | yes | The numerical id of the list | 
| slug | query | string | yes | You can identify a list by its slug instrad of its numerical id | 
| owner_screen_name | query | string | no | The screen name of the user who owns the list being requested by a slug | 
| user_id | query | string | no | The id of the user for whom to remove from the list | 
| screen_name | query | string | no | The screen name of the user for whom to remove from the list | 
| owner_id | query | string | no | The is of the user who wons the list being requested by a slug | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/members/destroy?list_id=%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretiu&slug=c%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20&owner_screen_name=is%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20ve&user_id=orem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ul&screen_name=%20sit%20&owner_id=entum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20sce 
```




#### get /lists/memberships
Returns the lists of the specified user has been added to
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| user_id | query | string | no | The id of the user for whom to return results for | 
| screen_name | query | string | no | The screen name of the user for whom to return results for | 
| cursor | query | string | no | Breaks the results into pages | 
| filter_to_owned_lists | query | string | no | When set to true, t or 1, will return just lists the authenticating user owns | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/memberships?user_id=l%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20&screen_name=dales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20fau&cursor=tie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem&filter_to_owned_lists=gula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cu 
```




#### get /lists/subscribers
Returns the subscribers of the specified list
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| list_id | query | string | yes | The numerical id of the list | 
| slug | query | string | yes | You can identify a list by its slug insted of its numerical id | 
| owner_screen_name | query | string | no | the screen name of the user who owns the list being requested by a slug | 
| owner_id | query | string | no | The user ID of the user who owns the list being requested by a slug | 
| cursor | query | string | no | Breaks the results into pages | 
| include_entities | query | string | no | The entities node will be disincluded when set to false | 
| skip_status | query | string | no | When set to either true, t or 1 | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers?list_id=s.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20laci&slug=um%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.&owner_screen_name=tincidunt%20elit.%20Etiam%20convallis%20eu%20li&owner_id=ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamc&cursor=%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.&include_entities=%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molesti&skip_status=elerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue. 
```




#### post /lists/subscribers/create
Subscribes the authenticated user to the specified list
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| list_id | query | string | yes | The numerical id of the list | 
| slug | query | string | yes | You can identify a list being requested by a slug | 
| owner_screen_name | query | string | no | the screen name of the user who owns the list being requested by a slug | 
| owner_id | query | string | no | The user ID of the user who owns the list being requested by a slug | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/subscribers/create?list_id=%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20n&slug=re%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Maur&owner_screen_name=ulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec&owner_id=suere%20eu%20facilisis%20nec%2C%20temp 
```




#### get /lists/subscribers/show
Check if the specified user is a subscriber of the specified list
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| list_id | query | string | yes | The numerical id of the list | 
| slug | query | string | yes | You can identify a list being requested by a slug | 
| owner_screen_name | query | string | no | The screen name of the user who owns the list being requested by a slug | 
| user_id | query | string | no | The id of the user for whom to remove from the list | 
| screen_name | query | string | no | The screen name of the user for whom to remove from the list | 
| owner_id | query | string | no | The is of the user who wons the list being requested by a slug | 
| include_entities | query | string | no | The entities node will be disincluded when set to false | 
| skip_status | query | string | no | When set to either true, t or 1 | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers/show?list_id=dum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ips&slug=uris%20&owner_screen_name=%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20fini&user_id=or%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20&screen_name=la%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20i&owner_id=uam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20fe&include_entities=ium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20&skip_status=s%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20ac%20q 
```




#### get /lists/subscribers/destroy
Returns list of subscribers destroy
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| list_id | query | string | yes | The numerical id of the list | 
| slug | query | string | yes | You can identify a list being requested by a slug | 
| owner_screen_name | query | string | no | the screen name of the user who owns the list being requested by a slug | 
| owner_id | query | string | no | The user ID of the user who owns the list being requested by a slug | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers/destroy?list_id=%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C&slug=us%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20just&owner_screen_name=%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20inter&owner_id=s%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20ma 
```




#### get /lists/members/create_all
Returns lists of members create_all
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| list_id | query | string | yes | The numerical id of the list | 
| slug | query | string | yes | You can identify a list being requested by a slug | 
| owner_screen_name | query | string | no | the screen name of the user who owns the list being requested by a slug | 
| owner_id | query | string | no | The user ID of the user who owns the list being requested by a slug | 
| user_id | query | string | no | The id of the user for whom to remove from the list | 
| screen_name | query | string | no | The screen name of the user for whom to remove from the list | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/members/create_all?list_id=%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20pote&slug=iquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iacul&owner_screen_name=lla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pell&owner_id=lvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvin&user_id=culis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C&screen_name=iquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio 
```




#### post /lists/destroy
Returns list of destroy
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| list_id | query | string | yes | The numerical id of the list | 
| slug | query | string | yes | You can identify a list being requested by a slug | 
| owner_screen_name | query | string | no | The screen name of the user who owns the list being requested by a slug | 
| owner_id | query | string | no | The user ID of the user who owns the list being requested by a slug | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/destroy?list_id=unc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.&slug=%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20&owner_screen_name=%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.&owner_id=volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque 
```




#### post /lists/update
Returns lists of updates
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| list_id | query | string | yes | The numerical id of the list | 
| slug | query | string | yes | You can identify a list being requested by a slug | 
| owner_screen_name | query | string | no | The screen name of the user who owns the list being requested by a slug | 
| owner_id | query | string | no | The user ID of the user who owns the list being requested by a slug | 
| name | query | string | no | The name for the list | 
| mode | query | string | no | Whether your list is public or private | 
| description | query | string | no | The description to give the list | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/update?list_id=ere%20sed%20varius%20sodales&slug=%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20&owner_screen_name=t%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20S&owner_id=psum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequa&name=quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagit&mode=eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est&description=cing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20 
```




#### post /lists/create
Returns list of create
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| name | query | string | no | The name for the list | 
| mode | query | string | no | Whether your list is public or private | 
| description | query | string | no | The description to give the list | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/create?name=is%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gr&mode=stie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestib&description=etium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20 
```




#### get /lists/show
Returns list of show
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| list_id | query | string | yes | The numerical id of the list | 
| slug | query | string | yes | You can identify a list being requested by a slug | 
| owner_screen_name | query | string | no | The screen name of the user who owns the list being requested by a slug | 
| owner_id | query | string | no | The user ID of the user who owns the list being requested by a slug | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/show?list_id=id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20&slug=ec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20portti&owner_screen_name=ittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20du&owner_id=s%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C 
```




#### get /lists/subscriptions
Returns list of subscriptions
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| screen_name | query | string | no | The screen name of the user | 
| user_id | query | string | no | The id of the user for whom to return results for | 
| count | query | string | no | Specifies the number of tweets to try and retrieve | 
| cursor | query | string | no | Breaks the results into pages | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscriptions?screen_name=lor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20soda&user_id=ltricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpi&count=bh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20var&cursor=s%20vehicula%2C%20se 
```




### Resource : list
#### get /list/members/show
Check if the specified user is a member of the specified list
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| list_id | query | string | yes | The numerical id of the list | 
| slug | query | string | yes | You can identify a list being requested by a slug | 
| user_id | query | string | no | The id of the user for whom to remove from the list | 
| screen_name | query | string | no | The screen name of the user for whom to remove from the list | 
| owner_screen_name | query | string | no | The screen name of the user who owns the list being requested by a slug | 
| owner_id | query | string | no | The user ID of the user who owns the list being requested by a slug | 
| include_entities | query | string | no | The entities node will be disincluded when set to false | 
| skip_status | query | string | no | When set to either true, t or 1 | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members/show?list_id=istique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis&slug=Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20mole&user_id=ar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Ma&screen_name=%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20feli&owner_screen_name=%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20a&owner_id=lus%20sagittis%20at.%20Nullam%20vel%20metus%20ac%20quam%20gravida%20pellentesque.%20Nullam%20&include_entities=na%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congu&skip_status=lisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20n 
```




#### get /list/members
Returns the members of the specified list
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| list_id | query | string | yes | The numerical id of the list | 
| slug | query | string | yes | You can identify a list being requested by a slug | 
| owner_screen_name | query | string | no | The screen name of the user who owns the list being requested by a slug | 
| owner_id | query | string | no | The user ID of the user who owns the list being requested by a slug | 
| include_entities | query | string | no | The entities node will be disincluded when set to false | 
| skip_status | query | string | no | When set to either true, t or 1 | 
| cursor | query | string | no | Breaks the results into pages | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members?list_id=ere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20lig&slug=tesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20es&owner_screen_name=non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdu&owner_id=lestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus&include_entities=tie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20fauc&skip_status=uspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20&cursor=m%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultric 
```




#### post /list/members/create
Returns list of members create
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| list_id | query | string | yes | The numerical id of the list | 
| slug | query | string | yes | You can identify a list being requested by a slug | 
| screen_name | query | string | no | The screen name of the user for whom to remove from the list | 
| owner_screen_name | query | string | no | The screen name of the user who owns the list being requested by a slug | 
| owner_id | query | string | no | The user ID of the user who owns the list being requested by a slug | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/list/members/create?list_id=%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20ero&slug=ibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20&screen_name=.%20Nunc%20et%20lorem%20eros.%20Suspe&owner_screen_name=bus%20vel%20elit.%20Sed%20effic&owner_id=ttis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamc 
```




#### get /list/members/destroy_all
Returns lists of destroy all
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| list_id | query | string | yes | The numerical id of the list | 
| slug | query | string | yes | You can identify a list being requested by a slug | 
| user_id | query | string | no | The id of the user for whom to remove from the list | 
| screen_name | query | string | no | The screen name of the user for whom to remove from the list | 
| owner_screen_name | query | string | no | The screen name of the user who owns the list being requested by a slug | 
| owner_id | query | string | no | The user ID of the user who owns the list being requested by a slug | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members/destroy_all?list_id=ies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspen&slug=get%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nib&user_id=.%20Etiam%20dignissim%20risus%20non%20felis%20sceler&screen_name=%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20&owner_screen_name=esuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20ni&owner_id=orta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20 
```




### Resource : direct_messages
#### get /direct_messages/sent
return 20 most recent direct messages sent
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| since_id | query | string | no | Returns result with an ID greater than the specified ID | 
| max_id | query | string | no | Returns results with an ID less than or equal to the specified ID | 
| count | query | string | no | Specifies the number of tweets to try and retrieve | 
| page | query | string | no |  | 
| include_entities | query | string | no | The entities node will be disincluded when set to false | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages/sent?since_id=%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh&max_id=m%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20el&count=%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipisci&page=%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condi&include_entities=a%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20en 
```




#### get /direct_messages/show
returns a single direct message specified by an id
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| id | query | string | yes | ID of direct message | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages/show?id=%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20 
```




#### get /direct_messages
return 20 most recent direct messages sent to user
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| since_id | query | string | no | Returns result with an ID greater than the specified ID | 
| max_id | query | string | no | Returns results with an ID less than or equal to the specified ID | 
| include_entities | query | string | no | The entities node will be disincluded when set to false | 
| skip_status | query | string |  | whether or not to include status | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages?since_id=eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maxim&max_id=os%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut&include_entities=%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fri&skip_status=tus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignis 
```




#### post /direct_messages/destroy
destroys direct messages specified in required ID
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| id | query | string | yes | ID of direct message to delete | 
| include_entities | query | string | no | The entities node will be disincluded when set to false | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/direct_messages/destroy?id=%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mau&include_entities=rat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum 
```




#### post /direct_messages/new
sends a new direct message to specified user
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| user_id | query | string | yes | description | 
| screen_name | query | string |  | screen name of user receiving message | 
| text | query | string | yes | text of your direct message | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/direct_messages/new?user_id=ignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehi&screen_name=e%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20m&text=pat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque 
```




### Resource : search
#### get /search/tweets
returns collection of relevant Tweets matching query
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| q | query | string | yes | URL-encoded search query of 500 characters max | 
| geocode | query | string | no | returns tweets by users located within given radius | 
| lang | query | string | no | restricts tweets to a given language | 
| locale | query | string | no | language of query you are sending | 
| result_type | query | string | no | specifies type of search results you prefer | 
| count | query | string | no | Specifies the number of tweets to try and retrieve | 
| until | query | string |  | returns tweets created before given date | 
| since_id | query | string | no | Returns result with an ID greater than the specified ID | 
| max_id | query | string | no | Returns results with an ID less than or equal to the specified ID | 
| include_entities | query | string | no | The entities node will be disincluded when set to false | 
| callback | query | string |  | response will use the callback with given name | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/search/tweets?q=%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20&geocode=ehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20p&lang=verra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20&locale=odales%2C%20sagittis&result_type=g%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed&count=si&until=pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arc&since_id=tetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverr&max_id=s%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehi&include_entities=%20turpis%2C%20lacinia%20id%20tempor%20s&callback=%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin 
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

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| id | path | string | yes | The id of the saved search | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/saved_searches/show/tus+massa%2C+malesuada+facilisis+sapien+finibus+at.+Nullam+finibus+urna+vel+auctor+fringilla.+Mauris+eu+tortor+blandit%2C+bibendum+tortor+ac%2C+congue+eros.+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Suspendiss 
```




#### post /saved_searches/create
Create a new saved search for the authenticated user
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| query | query | string | yes | The query of the search the user would like to save | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/saved_searches/create?query=varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20conse 
```




#### post /saved_searches/destroy/{id}
Destroy a saved search for the authenticating user
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| id | path | string | yes | The id of the saved search | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/saved_searches/destroy/dales%2C+sagittis+sed+ex.+Vivamus+id+vulputate+odio.+Donec+quis+facilisi 
```




### Resource : friends
#### get /friends/ids
returns a cursored collection of user IDs followed by user
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| user_id | query | string |  | ID of user for whom to return results for | 
| screen_name | query | string |  | screen name of user for whom to return results for | 
| cursor | query | string |  | causes list of connections to be broken in pages | 
| stringify_ids | query | string |  | IDs converted to strings | 
| count | query | string | no | Specifies the number of tweets to try and retrieve | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friends/ids?user_id=%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligul&screen_name=metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20bl&cursor=ntum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum&stringify_ids=lvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20&count=lentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20e 
```




### Resource : followers
#### get /followers/ids
returns a cursored collection of user IDs following the user
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| user_id | query | string |  | ID of user for whom to return results for | 
| screen_name | query | string |  | screen name of user for whom to return results for | 
| cursor | query | string |  | causes list of connections to be broken in pages | 
| stringify_ids | query | string |  | IDs converted to strings | 
| count | query | string | no | Specifies the number of tweets to try and retrieve | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/followers/ids?user_id=t%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis&screen_name=el%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Maur&cursor=stie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie&stringify_ids=m%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet&count=citudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipi 
```




### Resource : friendships
#### get /friendships/incoming
returns collection of IDs of users with pending follow request
* Request Parameters :

| Name | Location | Type | Description |  
| :---: | :---: | :---: | :--- |  
| cursor | query | string | causes list of connections to be broken in pages | 
| stringify_ids | query | string | IDs converted to strings | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/incoming?cursor=rnare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20&stringify_ids=Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapi 
```




#### get /friendships/outgoing
returns collection of IDs of users with pending follow request from the user
* Request Parameters :

| Name | Location | Type | Description |  
| :---: | :---: | :---: | :--- |  
| cursor | query | string | causes list of connections to be broken in pages | 
| stringify_ids | query | string | IDs converted to strings | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/outgoing?cursor=estas%2C%20sed%20m&stringify_ids=.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20 
```




#### post /friendships/create
allows users to follow user sepcified by ID
* Request Parameters :

| Name | Location | Type | Description |  
| :---: | :---: | :---: | :--- |  
| screen_name | query | string | screen name of user for whom to befriend | 
| user_id | query | string | ID of user for whom to befriend | 
| follow | query | string | enable notifications for target user | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/create?screen_name=uere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20e&user_id=%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20ac%20quam%20gravida%20pellentesque.%20Nullam%20ultricies%20turpis%20nec&follow=sectetur%20adipiscing%20elit.%20Suspendisse%20jus 
```




#### post /friendships/destroy
allows user to unfollow user psecified by ID
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| screen_name | query | string | yes | screen name of user for whom to befriend | 
| user_id | query | string | yes | ID of user for whom to befriend | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/destroy?screen_name=%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20con&user_id=egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nis 
```




#### post /friendships/update
Allows one to enable or disable settings for specified user
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| screen_name | query | string | yes | screen name of user for whom to befriend | 
| user_id | query | string | yes | ID of user for whom to befriend | 
| device | query | string | yes | enable/disable device notifications for user | 
| retweets | query | string | yes | enable/disable retweets from target user | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/update?screen_name=%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.&user_id=e%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20&device=c%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutp&retweets=%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorpe 
```




#### get /friendships/show
returns detailed info about relationship between two users
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| source_id | query | string |  | user id of subject user | 
| source_screen_name | query | string |  | screen_name of subject user | 
| target_id | query | string | yes | user id of target user | 
| target_screen_name | query | string | yes | screen name of target user | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/show?source_id=onec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20e&source_screen_name=es%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dic&target_id=r&target_screen_name=etur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesu 
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

| Name | Location | Type | Description |  
| :---: | :---: | :---: | :--- |  
| trend_location_woeid | query | string | the Yahoo! Where On Earth ID to user as defaul tend location | 
| sleep_time_enabled | query | string | enables/disables sleep time, silencing notifications | 
| start_sleep_time | query | string | the hour that sleep time should begin if enabled | 
| end_sleep_time | query | string | the hour that sleep time should end if enabled | 
| time_zone | query | string | timezone dates and times should be displayed in | 
| lang | query | string | language which Twitter should render in for the user | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/settings?trend_location_woeid=Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincid&sleep_time_enabled=ros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20&start_sleep_time=es%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligul&end_sleep_time=pien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tin&time_zone=dui%2C%20consec&lang=um%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blan 
```




#### post /account/update_delivery_device
sets which device Twitter delivers updates to for user
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| device | query | string | yes | must be one of sms, none | 
| include_entities | query | string | no | The entities node will be disincluded when set to false | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_delivery_device?device=et%2C%20vol&include_entities=r%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20 
```




#### post /account/update_profile
sets values that users ar eable to set under Account tab
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| name | query | string |  | full name of profile | 
| url | query | string |  | url associated with profile | 
| location | query | string |  | city or country describing where user of account is. | 
| description | query | string |  | a description of user owning account | 
| include_entities | query | string | no | The entities node will be disincluded when set to false | 
| skip_status | query | string |  | whether or not to include statuses in response | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile?name=met%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.&url=ellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Se&location=et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20torto&description=o&include_entities=lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20i&skip_status=%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20e 
```




#### post /account/update_profile_background_image
updates user's profile background image
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| tile | query | string |  | whether or not to tile background image | 
| use | query | string |  | display background image or not | 
| include_entities | query | string | no | The entities node will be disincluded when set to false | 
| skip_status | query | string |  | whether or not to include status in returned user objects | 
| file | formData | file | yes | image to replace background image of profile | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_background_image?tile=estas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio&use=ectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentu&include_entities=is%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20&skip_status=ec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim 
Content-Type: multipart/form-data, boundary=57caeda4a8840
Content-Length: 761
--57caeda4a8840
content-disposition: form-data; name="file"

--data-binary 
ZGM2ODIxNWIwZDkzZDExZGNhOWM2NGM2NDYzODRhMjAxMjAyMWYxMjE3NzZjOTg0NWFmYWQxY2JhYjdlYjQ4NDU4ZTIxYWY1YWZhM2JjMzVkNDFlZGZiYjRiNjNjZjg5NzI4NGI0MTk0MjNkZjhlODVkNGE3OGM0NGZhMzI2ZTQ1ODRjZTNmZDM5ZDM5YTUwOTRiODkwN2IxZjE4YzYyMjc4YTVhNTYyMmY0NzIzZjA3MzVkZTI0YTE4YTQyZWY4OWYyMzU2NWE1ZDRhNDBlMjI3ODhlZmJlNWE1MTM4MjY5NjVmYThjZmNmNTY2YmFmYzg0YjdmNDU4ZjVjZGU4ZDc4YmUyZjZiYmRhNDk2NjBkMDM4OWQ5MTQyYjU3M2U2NTNjM2I0YWMwNDJmMGJjNGM1NGY0NmFhYjU1Nzc0MzYwOWNiMTJlMzQzNjZjMjkyMTRmODdlYTQ0ZmJhYzg2ZDlmOWNlMjg0ZmFkYTEwOWZjMDk5M2NkMzFmNTRiODM1MjdkYTM0MmZiNWM4NWY3NTZhZTgwM2JiNzFhMjZlMmIzYWRhNjMzZWY4MWRkNWQzNjUwNjNkOThmZjIxMGM0MzFlNzJkODU1NTg1OTA3YjZiNThjYTdjNWIwYjk5OTNjY2M3NTAyMWQwZDdlYzQyMGJjZDk2NzU1MDFlMzczYmI=
```




#### post /account/update_profile_colors
sets one or more hex values that controls color scheme
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| profile_background_color | query | string |  | profile background color | 
| profile_link_color | query | string |  | profile link color | 
| profile_sidebar_border_color | query | string |  | profile sidebar's border color | 
| profile_sidebar_fill_color | query | string |  | profile's sidebar background color | 
| profile_text_color | query | string |  | profile text color | 
| include_entities | query | string | no | The entities node will be disincluded when set to false | 
| skip_status | query | string |  | whether or not to include statuses | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_colors?profile_background_color=%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20qui&profile_link_color=bulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20alique&profile_sidebar_border_color=celerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20po&profile_sidebar_fill_color=ehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20qu&profile_text_color=i.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20a&include_entities=olestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20grav&skip_status=.%20Donec%20molestie%2C%20eros%20in 
```




#### post /account/update_profile_image
updates user's profile image
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| skip_status | query | string |  | whether or not to include statuses | 
| image | formData | file | yes | image to be set as profile image | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_image?skip_status=rdum%20fringilla%20orci%2C%20gravida%20 
Content-Type: multipart/form-data, boundary=57caeda4aa3af
Content-Length: 762
--57caeda4aa3af
content-disposition: form-data; name="image"

--data-binary 
Y2E5YjFhZTNhYjhiZWM0ODA2NWM2ZWVlNjc3ZTJkOWJiMDg1MmU0NmVjMmZkNDQ3OTE0YmIzMTA3NjY4YTdlZTgzMDFkYTdmOTRkOTU5ZjZkZTU3NmUwZjU3YjM5OGU5MjkxOGVjZjQ0ZDcxNzNjNjc3NzA5MDIwMDliOTUwZjVlZTY2MGI3YjI4ODE5NDExZDgzOTc2MWMxZmI2MjlkMWZhNTIzYjY5NzFmNTg1YWFjOGRkMjQ5OWRhYzcxNzMyY2NmM2Y3ZTRhMmU2NmJkODllNzBiZWYyOTc0OTgyMzA1ZjE0MWMxNWY2ZTE3ZmNmZTQwNzJiMDU5ODc5NWYzN2E1YWRmODJhMTA2Njk1NzNkZTgyMjZlOGYwZGM5NWQ0ODU2NzMzZTg3MDExYWQ5ZmI0ZDIyYWM4NWI0N2U5MDdmMDY2Y2Y0YzVlMDhhZjU3OWZmMzEwOTY5MmYyNTliMjRkMDllYzlkMDUzZWYyNDg5NjUzOTdmZjBjNDI2MThlMWQxN2NlNzlkN2YwMzdmNDQ1NWJlMzY0ZjBlMDcwNjA3ZGQ5ZGY5MDI2NjMzMWI5NzNkMjUwYTc3NGVjNzkyMzAwNDg2MTYxMWFiZjA2MTA0OTFjMTdiYTBhMGU2NzRmY2Q3ZDA5YTZmOWRiMjg0ZGMwYmQxNWI0OTE5YTk5M2I=
```




### Resource : blocks
#### get /blocks/list
disallows retweets and device notifications from a user
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| include_entities | query | string | no | The entities node will be disincluded when set to false | 
| skip_status | query | string |  | whether or not to include statuses in response | 
| cursor | query | string |  | breaks block of user to be broken up into pages | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/blocks/list?include_entities=unt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20digni&skip_status=et%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20se&cursor=am.%20Morbi%20tincidunt%20preti 
```




#### get /blocks/ids
returns array of numeric user ids of blocked users
* Request Parameters :

| Name | Location | Type | Description |  
| :---: | :---: | :---: | :--- |  
| stringify_ids | query | string | returns array of numeric IDs as string IDs | 
| cursor | query | string | breaks up block of user IDs into pages | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/blocks/ids?stringify_ids=ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nib&cursor=bulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20inte 
```




#### post /blocks/create
blocks the specified user
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| screen_name | query | string | yes | screen name of user to be blocked | 
| user_id | query | string | yes | ID of user to be blocked | 
| include_entities | query | string | no | The entities node will be disincluded when set to false | 
| skip_status | query | string |  | whether or not to skip statuses | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/blocks/create?screen_name=ivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20&user_id=%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut&include_entities=%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20var&skip_status=entum%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20ac%20quam%20gravida%20pellentesque.%20Nullam%20ultricies%20turpis%20nec%20dignissim%20aliq 
```




#### post /blocks/destroy
un-blocks the specified user
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| screen_name | query | string | yes | screen name of user to be un-blocked | 
| user_id | query | string | yes | ID of user to be un-blocked | 
| include_entities | query | string | no | The entities node will be disincluded when set to false | 
| skip_status | query | string |  | whether or not to skip statuses | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/blocks/destroy?screen_name=se%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20am&user_id=n%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20si&include_entities=to%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi&skip_status=dui.%20Sed%20eu%20n 
```




### Resource : users
#### get /users/lookup
returns fully-hydrated user objects up to 100
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| screen_name | query | string |  | screen name of user to lookup | 
| user_id | query | string |  | ID of user to lookup | 
| include_entities | query | string | no | The entities node will be disincluded when set to false | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/lookup?screen_name=%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lect&user_id=%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20s&include_entities=a%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turp 
```




#### get /users/show
returns a variety of info about specified user
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| screen_name | query | string | yes | screen name of user to be shown | 
| user_id | query | string | yes | ID of user to be shown | 
| include_entities | query | string | no | The entities node will be disincluded when set to false | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/show?screen_name=%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna&user_id=am%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20m&include_entities=.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maec 
```




#### get /users/search
simple relevance-based user search
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| q | query | string | yes | the search query to run against people search | 
| page | query | string |  | specifies the page of results to receive | 
| count | query | string |  | number of people to return per page | 
| include_entities | query | string | no | The entities node will be disincluded when set to false | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/search?q=ices%20nec.%20Vestibulum%20eleme&page=mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20&count=%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20&include_entities=rdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20pos 
```




#### get /users/contributees
collection of users specified user can contribute to
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| screen_name | query | string | yes | screen name of user that is contributed to | 
| user_id | query | string | yes | ID of user to that is contributed to | 
| include_entities | query | string | no | The entities node will be disincluded when set to false | 
| skip_status | query | string |  | whether or not to skip statuses | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/contributees?screen_name=m%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.&user_id=nterdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitu&include_entities=m%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20&skip_status=s%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C 
```




#### get /users/contributors
collection of users that can contribute to specified account
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| screen_name | query | string | yes | screen name of user contributing | 
| user_id | query | string | yes | ID of user contributing | 
| include_entities | query | string | no | The entities node will be disincluded when set to false | 
| skip_status | query | string |  | whether or not to skip statuses | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/contributors?screen_name=%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20a&user_id=mpus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20&include_entities=tium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20au&skip_status=uris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod 
```




#### post /users/report_spam
Returna users report spam
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| screen_name | query | string | no | The ID or screen_name of the user you want to report as a spammer | 
| user_id | query | string | no | The ID of the user you want to report as a spammer | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/users/report_spam?screen_name=&user_id=massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vi 
```




### Resource : geo
#### get /geo/id/{place_id}
Returns all the information about a know place
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| place_id | path | string | yes | A place in the world | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/id/ntu 
```




#### get /geo/reverse_geoncode
Given a latitude and a longitude, searches for up to 20 places that can be used as a place_id when updatting a status
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| lat | query | string | yes | The latitude to search around | 
| long | query | string | yes | The longtitude to search around | 
| accuracy | query | string | no | A hint on region in which to search | 
| granularity | query | string | no | This is the minimal granularity of place types to return | 
| max_results | query | string | no | A hint as to the number of results to return | 
| callback | query | string | no | If supplied, the responses will use the JSON format with a callback of the given name | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/reverse_geoncode?lat=i.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Do&long=%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum&accuracy=%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20q&granularity=%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20&max_results=us%20ult&callback=at%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellen 
```




#### get /geo/search
Search for places that can be attached to a statuses/updates
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| lat | query | string | yes | The latitude to search around | 
| long | query | string | yes | The longtitude to search around | 
| query | query | string | yes | Free-form text to match against while executing a geo-based query | 
| ip | query | string | yes | An Ip address | 
| accuracy | query | string | no | A hint on region in which to search | 
| granularity | query | string | no | This is the minimal granularity of place types to return | 
| contained_within | query | string | no | This is the place_id which you would like to restrict the search results to | 
| attribute:street_address | query | string | no | This parameter searches for places which have this givven street address | 
| callback | query | string | no | If supplied, the responses will use the JSON format with a callback of the given name | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/search?lat=llamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20&long=%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20&query=%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20u&ip=er.%20Fusce%20nec%20est%20quam.%20Pellentesque%20&accuracy=lutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20&granularity=bulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20veh&contained_within=ismod%20ullamcorper.%20Phasellus%20sit%20am&attribute%3Astreet_address=i%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20v&callback=ingilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20 
```




#### get /geo/similar_places
Locates places near the given coordinates which are similar in name
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| lat | query | string | yes | The latitude to search around | 
| long | query | string | yes | The longtitude to search around | 
| name | query | string | yes | The name a place is known as | 
| contained_within | query | string | no | This is the place_id which you would like to restrict the search results to | 
| attribute:street_address | query | string | no | This parameter searches for places which have this givven street address | 
| callback | query | string | no | If supplied, the responses will use the JSON format with a callback of the given name | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/similar_places?lat=ces%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibu&long=i%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis&name=nare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20feli&contained_within=et%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidun&attribute%3Astreet_address=%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20&callback=hasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibul 
```




#### get /geo/places
Create a new place object at the given latitude and logitude
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| lat | query | string | yes | The latitude to search around | 
| long | query | string | yes | The longtitude to search around | 
| name | query | string | yes | The name a place is known as | 
| token | query | string | yes | The token found in the response from geo/similar_places | 
| contained_within | query | string | no | This is the place_id which you would like to restrict the search results to | 
| attribute:street_address | query | string | no | This parameter searches for places which have this givven street address | 
| callback | query | string | no | If supplied, the responses will use the JSON format with a callback of the given name | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/places?lat=%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20p&long=d%20ante%20&name=llus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20&token=nec%2C%20vo&contained_within=vi&attribute%3Astreet_address=ibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20p&callback=m%20elementum%20felis%20sit%20amet%20ipsum%20 
```




### Resource : trends
#### get /trends/place
Returns the top 10 trending topics for a specific WOEID
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| id | query | string | yes | The yahoo where on earch id | 
| exclude | query | string | yes | Setting this equal to hashtages will remove all hashtages from the trends list | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/trends/place?id=a%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in&exclude=inibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20da 
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

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| lat | query | string | yes | If provided with a long parameter the available trend locations wil be stored by distance | 
| long | query | string | yes | If provided with a lat parameters the available trend locations will be sorted by distance | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/trends/closest?lat=ta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultric&long=sum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus 
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

| Name | Location | Type | Required | Definition | Description |  
| :---: | :---: | :---: | :---: | :---: | :--- |  
| resources | query | array | no | [#/paths//application/rate_limit_status/get/parameters/0](#testtoto) | A comma-separated list of resource families you want to know the current rate limit disposition for | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/application/rate_limit_status 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

