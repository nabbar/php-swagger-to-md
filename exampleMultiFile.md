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
HTTP 1.1 get http://api.twitter.com/1.1/statuses/mentions_timeline?count=%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20vel&since_id=d%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20M&max_id=cula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20&trim_user=%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdu&contributor_details=psum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20&include_entities=llicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sa 
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
HTTP 1.1 get http://api.twitter.com/1.1/statuses/user_timeline?count=elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimen&since_id=n%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultri&max_id=ctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20&trim_user=t%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius&exclude_replies=1&contributor_details=t%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20p&include_rts=0 
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
HTTP 1.1 get http://api.twitter.com/1.1/statuses/home_timeline?since_id=llentesque%20enim%20metus%20in%20eros.%20Mau&max_id=citur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20al&trim_user=ehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20se&exclude_replies=1&contributor_details=%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C 
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
HTTP 1.1 post http://api.twitter.com/1.1/statuses/retweets/in+et.+Curabitur+pulvinar+metus+massa%2C+malesuada+facilisis+sapien+finibus+at.+Nullam+finibus+urna+vel+auctor+fringilla.+Mauris+eu+tortor+blandit%2C+bibendum+tortor+ac%2C+congue+eros.+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+el?trim_user=ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in 
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
HTTP 1.1 get http://api.twitter.com/1.1/statuses/show/sque.+Nullam+ultrici?trim_user=ndum%20orci.%20Sed&include_my_retweet=c%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20a&include_entities=aximus%2C%20finibus%20e 
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
HTTP 1.1 post http://api.twitter.com/1.1/statuses/destroy/-1351173745?trim_user=%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscip 
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
HTTP 1.1 post http://api.twitter.com/1.1/statuses/update?status=it%20amet%2C%20consectetur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20v&exampleStringIPv4=203.125.0.47&exampleStringIPv6=2001%3A45b3%3A3845%3Aaa05%3A7bc3%3A637d%3A%3A&exampleStringByte=aXBzdW0uIER1aXMgc2VtIGVsaXQsIHBvc3VlcmUgZXUgZmFjaWxpc2lzIG5lYywgdGVtcHVzIGFjIGk%3D&exampleStringBinary=0010010011101100010101100000010000000001010010100001001001101010100000111110000101111011101101010011001100011101010000000101001100110111010001110001000111100001101000110001001110101111111010010000000001001011&exampleStringDate=2016-09-03&exampleStringDateTime=2016-09-03T13%3A37%3A05%2B00%3A00&exampleStringPassword=9j%2A%C2%26BJd%5Cc%C2%B0%5CZ%C2%26p%3F_%26xt_%7D7%27%60t%2AFb%20m%7Bc%28NV%2B%7C%A7kfaD%7D%C2%2CEeM7fE%26oV35fJ6%24%2F%7D%2CjS5%B5%3F.%27%23UVo%3B6.%7CH%2A%3F2cDYgI&exampleStringUri=http%3A%2F%2Flocalhost%2Fpath%2Fscript.php%3Fquery%23fragment&in_reply_to_status_id=t%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20&lat=a%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20j&long=m%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20n&place_id=am%20varius%20lobor&display_coordinates=%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lo&trim_user=ris%20vel%20ul 
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
HTTP 1.1 get http://api.twitter.com/1.1/statuses/oembed?id=ie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20mol&url=ibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20eli&maxwidth=a%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20P&hide_media=Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendre&hide_thread=o%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imper&align=posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20d&related=%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20s&lang=o%20consecte&exampleNumber=7.93103E+35&exampleNumberFloat=0&exampleNumberDouble=0 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/list?screen_name=tor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Cu&user_id=um%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20e 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/statuses?list_id=m.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendis&slug=t%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fu&owner_screen_name=s%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20&owner_id=%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20c&since_id=mmodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuer&max_id=molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20&count=es%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metu&include_entities=hicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitud&include_rts=ugue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tin 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/members/destroy?list_id=etium%20pulvinar%2C%20es&slug=ec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pu&owner_screen_name=%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fring&user_id=ltricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20males&screen_name=uada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20qu&owner_id=tiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20or 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/memberships?user_id=%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dign&screen_name=lementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20a&cursor=sit%20amet%20sagittis&filter_to_owned_lists=ismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers?list_id=tus%20ante%20nec%2C%20volutp&slug=ed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20ni&owner_screen_name=sce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspend&owner_id=i%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ult&cursor=%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20e&include_entities=%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestib&skip_status=rbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20 
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
HTTP 1.1 post http://api.twitter.com/1.1/lists/subscribers/create?list_id=tus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20&slug=orper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20cong&owner_screen_name=t%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laore&owner_id=auris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagi 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers/show?list_id=is%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20c&slug=ilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligul&owner_screen_name=.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lac&user_id=s%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20c&screen_name=%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20sus&owner_id=estas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.&include_entities=%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20a&skip_status=tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers/destroy?list_id=nsectetur%20sed%20ante%20sit%20amet%20sagitt&slug=or.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C&owner_screen_name=neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pul&owner_id=nt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imper 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/members/create_all?list_id=%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20&slug=s%20vehicula%2C%20sem%20tortor%20accum&owner_screen_name=ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20sceler&owner_id=sim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vu&user_id=%20mollis%20est%20molestie.%20Aenean%20quam%20nisi&screen_name=.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementu 
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
HTTP 1.1 post http://api.twitter.com/1.1/lists/destroy?list_id=ongue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20n&slug=orci.%20Sed%20eros%20massa%2C%20ve&owner_screen_name=apien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20co&owner_id=itae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales 
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
HTTP 1.1 post http://api.twitter.com/1.1/lists/update?list_id=t%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20&slug=ssim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20&owner_screen_name=%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20so&owner_id=m%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20&name=nec%20consectetur%20sed%20ante%20sit%20a&mode=aculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet&description=lis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulu 
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
HTTP 1.1 post http://api.twitter.com/1.1/lists/create?name=%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagitt&mode=mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed&description=bulum%20quam.%20Morbi%20tinci 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/show?list_id=or%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicul&slug=ipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20e&owner_screen_name=dum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20di&owner_id=lit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscriptions?screen_name=%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20li&user_id=rmentum%20ultricies%2C%20felis%20felis&count=est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitud&cursor=ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20male 
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
HTTP 1.1 get http://api.twitter.com/1.1/list/members/show?list_id=ros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20fe&slug=lla%20malesuada%2C%20egestas%20velit%20id%2C%20&user_id=ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20an&screen_name=fficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20&owner_screen_name=e%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pr&owner_id=um.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pul&include_entities=pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20inte&skip_status=lum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20c 
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
HTTP 1.1 get http://api.twitter.com/1.1/list/members?list_id=.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et&slug=felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20digni&owner_screen_name=%20dolor%20sit%20amet%2C%20consectetur&owner_id=cies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20vel&include_entities=ec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae&skip_status=us%20orci.%20Donec%20consectetur%20s&cursor=et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20ve 
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
HTTP 1.1 post http://api.twitter.com/1.1/list/members/create?list_id=isis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molesti&slug=ibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20ne&screen_name=bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20&owner_screen_name=it%20dign&owner_id=aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagit 
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
HTTP 1.1 get http://api.twitter.com/1.1/list/members/destroy_all?list_id=rius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20&slug=llam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.&user_id=vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20fin&screen_name=st%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdi&owner_screen_name=liquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20i&owner_id=mpor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim 
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
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages/sent?since_id=%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20&max_id=pis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20effici&count=et%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20n&page=na%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tel&include_entities=olor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehic 
```




#### get /direct_messages/show
returns a single direct message specified by an id
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| id | query | string |  no |  |  |  |  |  |  | ID of direct message

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages/show?id=gue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20 
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
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages?since_id=ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Integer%20ipsum%20sapie&max_id=%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sod&include_entities=un&skip_status=%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20bl 
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
HTTP 1.1 post http://api.twitter.com/1.1/direct_messages/destroy?id=orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congu&include_entities=sis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20 
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
HTTP 1.1 post http://api.twitter.com/1.1/direct_messages/new?user_id=%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20&screen_name=um%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur&text=u%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dol 
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
HTTP 1.1 get http://api.twitter.com/1.1/search/tweets?q=t%2C%20consectet&geocode=acinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultr&lang=t%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est&locale=is%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdi&result_type=m%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpa&count=lvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20&until=.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20u&since_id=%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida&max_id=.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.&include_entities=rtor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finib&callback=%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspen 
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
HTTP 1.1 get http://api.twitter.com/1.1/saved_searches/show/ellentesque+elit+libero%2C+faucibus+luctus+ante+nec%2C+volutpat+dictum+neque.+Donec+molestie%2C+eros+in+pretium+pulvinar%2C+est+leo+vehicula+lectus%2C+a+cursus+neque+erat 
```




#### post /saved_searches/create
Create a new saved search for the authenticated user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| query | query | string |  no |  |  |  |  |  |  | The query of the search the user would like to save

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/saved_searches/create?query=%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20P 
```




#### post /saved_searches/destroy/{id}
Destroy a saved search for the authenticating user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| id | path | string |  no |  |  |  |  |  |  | The id of the saved search

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/saved_searches/destroy/tus%2C+eu+bibendum+orci.+Sed+e 
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
HTTP 1.1 get http://api.twitter.com/1.1/friends/ids?user_id=%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum&screen_name=olestie%2C%20&cursor=t%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar&stringify_ids=stie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet&count=i%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condi 
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
HTTP 1.1 get http://api.twitter.com/1.1/followers/ids?user_id=%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commo&screen_name=%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20da&cursor=%20&stringify_ids=%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20s&count=od%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20met 
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
HTTP 1.1 get http://api.twitter.com/1.1/friendships/incoming?cursor=%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20solli&stringify_ids=rcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20 
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
HTTP 1.1 get http://api.twitter.com/1.1/friendships/outgoing?cursor=%20dui%20nisl.&stringify_ids=%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20ac%20quam%20gravida%20pellentesq 
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
HTTP 1.1 post http://api.twitter.com/1.1/friendships/create?screen_name=it%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20s&user_id=r%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20&follow=in%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit 
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
HTTP 1.1 post http://api.twitter.com/1.1/friendships/destroy?screen_name=%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo&user_id=h%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20ac%20quam%20gravida%20pellentes 
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
HTTP 1.1 post http://api.twitter.com/1.1/friendships/update?screen_name=um%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20variu&user_id=ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20si&device=scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodal&retweets=%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed 
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
HTTP 1.1 get http://api.twitter.com/1.1/friendships/show?source_id=llus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros&source_screen_name=facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lo&target_id=isis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20&target_screen_name=Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulv 
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
HTTP 1.1 post http://api.twitter.com/1.1/account/settings?trend_location_woeid=etur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.&sleep_time_enabled=sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20s&start_sleep_time=consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20c&end_sleep_time=sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20v&time_zone=uris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20&lang=sto%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lac 
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
HTTP 1.1 post http://api.twitter.com/1.1/account/update_delivery_device?device=%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit&include_entities=nia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feug 
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
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile?name=%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20&url=olor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendis&location=get%20luctus%20metus%2C%20eu%20b&description=%2C%20consectetur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20ame&include_entities=ollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor&skip_status=it%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morb 
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
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_background_image?tile=cibus%20urna%20arcu%2C%20et%20dignissim%20augue%20in&use=nsectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20&include_entities=ada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20l&skip_status=elit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20 
Content-Type: multipart/form-data, boundary=57cad201c6525
Content-Length: 761
--57cad201c6525
content-disposition: form-data; name="file"

--data-binary 
NzZlY2VmYjAxNjllYWIyZTYwMDU3MzZhYzRmZGQ4NjhmYWQzZjljMGZjZGE5NDcxZjExYWZkODQxNTcyMmMxMjk3ZjczM2YwMDQ1NTc4ZDc2NzYzMzQ2ZmE5YTAwN2E4MzZjOTAxYjNiYmQ3YzdhMzMxMmYyMzg4OTVmODZjZWYwZTRkMDY5Njc5MDhjODRiZGY2ZTI5NmJjOGY1NzAyYTZjNDJlMjU0YjcxOTYyNDM2YzVlNzhlMzQ1NmRiYmI0ODZmZWNjODQ4MDRjZjJiYmVjYzdjY2I1M2FiYmJkM2FmZGEzY2NhMjY1NzI3YWM5MDY4ZWQ0MTcwMDBlNzI2OGIwYWM1ZmQ1MWQ0M2ViNDViZGFkMjhjYTM3MGRlYjE4OGNhNTAyNWM1ZGJhOWY0YjgwNjZhZjgxZDAxYWE1MWM3ZmI0YjY2MTkxODIwNmY3NTU4Nzc3NjM0ZjBjMzRhN2YzZmU1YWJhMzEzODY1MjZiM2FjM2EwMjg0YTA2M2NlODg5YzZjZTM3ZmU1YTZiYzRhYTAwZTc2OWUzZjYzMTZmYTY1YzgzOTJkMDJlMTZhNWZkZWEwNGRhMzQ0Njk1M2NkZTQ5MzQ3NWI2Yzc2MjE0ZjY5ZTNhN2MyMmVhMTFjZjEzNTU4OTcwNjMxMjY5NDdhMGQzOTBkODQyOTE5ZmE=
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
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_colors?profile_background_color=%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20&profile_link_color=c%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C&profile_sidebar_border_color=%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sod&profile_sidebar_fill_color=%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C&profile_text_color=%20leo%20ex%2C%20pulvinar%20&include_entities=cibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20l&skip_status=eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi 
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
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_image?skip_status=olestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20n 
Content-Type: multipart/form-data, boundary=57cad201c76f4
Content-Length: 762
--57cad201c76f4
content-disposition: form-data; name="image"

--data-binary 
OTQzYzRhOTI0YWY2NzJmMTI5ZjUyOTM4YjgwNTUzOTU5ODZkNDMwNDEzMWViMWE2MDBkZjQ1NTNlZjAzMzg4NDRmNTE2ZGM1ZTg4YmQxYzQ1YjRkY2NlNGUxMTA0NWM4NWVmNmRkYWEzZTQ2OGYzMTdlZWQ2ZDBjNzBmYmVhMGM0YzZmNjcxODY4OWIxYTdiN2M4NTM1MTQ1M2U5MmFjMjlmYjYwNjY3MzUxYzdjNTdlM2ZjOGQ4NmVmOWI4ZjkwMzQ5MDFmYjdjZDZmNThlYThhODFmNzllMjZhODRhNGEzMWI1YWM5NzkyY2EyZjJkM2NhMjhiNGM3OGNiNGFjMmRiNmQ4ZTJkNDAxMWYyOGRkMTQ3NmIzYWZjNDJhNTAwMDIzMDVjMTMzNmM0YzFiYzM1ODFhYTJlNTg2NTg2N2Y0YTI2Njk1NDU1OTJjMDIzMDc4ZTkyZGVhMDk5ZmRkZDIzZTUwZmIwOTM4OGQ3ZDNmMDhjNTMxMTgwY2I5NTFmZGYzOGVhMWIwYjVhZTBkZWFiYjYyZDBkMzNhN2E4YzVjNDM0ZmJjNjJlYzUxMDMzNTc2OTgxMjdjNDFjNGE1YmQ0NGQ1MzFlMzgxYzQzOTk2MmM3NGUyOGMwZTE3NDM5Mzk2NTQxOGFjMWFkY2MwZmZiMTExNmNlNjBmOTc1OGI=
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
HTTP 1.1 get http://api.twitter.com/1.1/blocks/list?include_entities=unt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20S&skip_status=tate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris&cursor=as%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20l 
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
HTTP 1.1 get http://api.twitter.com/1.1/blocks/ids?stringify_ids=consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum&cursor=t%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20 
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
HTTP 1.1 post http://api.twitter.com/1.1/blocks/create?screen_name=s%20felis%20aliq&user_id=Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.&include_entities=ed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20&skip_status=%20velit%20dignissim%2C%20tincid 
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
HTTP 1.1 post http://api.twitter.com/1.1/blocks/destroy?screen_name=x%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20i&user_id=Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum&include_entities=%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20&skip_status=sagittis%20at.%20Nullam%20vel%20metus%20ac%20quam%20gravida%20pellent 
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
HTTP 1.1 get http://api.twitter.com/1.1/users/lookup?screen_name=cilisis%20sapien%20finibus%20at.%20Nullam%20finib&user_id=lum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20fau&include_entities=tenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ip 
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
HTTP 1.1 get http://api.twitter.com/1.1/users/show?screen_name=t%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20conse&user_id=sa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Ves&include_entities=e%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20poten 
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
HTTP 1.1 get http://api.twitter.com/1.1/users/search?q=lis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20digniss&page=lla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20i&count=neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo&include_entities=%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobo 
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
HTTP 1.1 get http://api.twitter.com/1.1/users/contributees?screen_name=nia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesua&user_id=%20tincidunt.%20Aliquam%20enim%20dui%2C&include_entities=%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20ve&skip_status=orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egest 
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
HTTP 1.1 get http://api.twitter.com/1.1/users/contributors?screen_name=.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Pr&user_id=iam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretiu&include_entities=s%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20p&skip_status=en.%20Sed%20malesuada%2C%20v 
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
HTTP 1.1 post http://api.twitter.com/1.1/users/report_spam?screen_name=e.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20e&user_id=ncidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20alique 
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
HTTP 1.1 get http://api.twitter.com/1.1/geo/id/e.+Nullam+ultricies+turpis+nec+dignissim+aliquam.+Nunc+sed+ 
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
HTTP 1.1 get http://api.twitter.com/1.1/geo/reverse_geoncode?lat=rdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facili&long=m%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristiq&accuracy=sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20&granularity=um%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20&max_results=ipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20alique&callback=Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20a 
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
HTTP 1.1 get http://api.twitter.com/1.1/geo/search?lat=erdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20s&long=o%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel&query=lvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praese&ip=bulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pr&accuracy=retium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20v&granularity=etus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabi&contained_within=ibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam&attribute%3Astreet_address=tricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros&callback=tor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20fe 
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
HTTP 1.1 get http://api.twitter.com/1.1/geo/similar_places?lat=%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at&long=Sed%20sed%20neque%20dignissim%2C%20imperdi&name=%20sapien%20at%20turpis%20molestie%20congue.&contained_within=m%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20c&attribute%3Astreet_address=mpus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus&callback=%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20int 
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
HTTP 1.1 get http://api.twitter.com/1.1/geo/places?lat=a%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20e&long=%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultr&name=%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20&token=at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20P&contained_within=%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulput&attribute%3Astreet_address=tie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20con&callback=uis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Done 
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
HTTP 1.1 get http://api.twitter.com/1.1/trends/place?id=g&exclude=%20conse 
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
HTTP 1.1 get http://api.twitter.com/1.1/trends/closest?lat=suada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20cond&long=%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20p 
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

