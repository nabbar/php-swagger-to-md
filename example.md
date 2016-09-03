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
HTTP 1.1 get http://api.twitter.com/1.1/statuses/mentions_timeline?count=tor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20biben&since_id=m%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20ve&max_id=%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nib&trim_user=%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20s&contributor_details=inibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet&include_entities=at%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor 
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
HTTP 1.1 get http://api.twitter.com/1.1/statuses/user_timeline?count=ermentum%20ultri&since_id=ipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20e&max_id=ue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condi&trim_user=urpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20i&exclude_replies=0&contributor_details=icies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pel&include_rts=1 
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
HTTP 1.1 get http://api.twitter.com/1.1/statuses/home_timeline?since_id=rcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pe&max_id=pibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20t&trim_user=metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non&exclude_replies=1&contributor_details=%20vulputate%20odio.%20Donec 
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
HTTP 1.1 post http://api.twitter.com/1.1/statuses/retweets/ros+massa?trim_user=d%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ull 
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
HTTP 1.1 get http://api.twitter.com/1.1/statuses/show/tis+porttitor.+Mauris+vel+ultrices+erat%2C+at+hendrerit+enim.+Sed+leo+ex%2C+pulvinar+vel+metus+et%2C+molestie+pretium+tortor.+Praesent+interdum+fringilla+orci%2C+gravida+ornare+nibh+sollicitudin+et.+Curabitur+pulvin?trim_user=t%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20p&include_my_retweet=mentum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20&include_entities=.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20n 
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
HTTP 1.1 post http://api.twitter.com/1.1/statuses/destroy/1325000893?trim_user=sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20mag 
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
HTTP 1.1 post http://api.twitter.com/1.1/statuses/update?status=assa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicu&exampleStringIPv4=112.56.221.115&exampleStringIPv6=2001%3Ae115%3Ac4b1%3A6241%3Ac8d5%3A3ff1%3A%3A&exampleStringByte=IGZldWdpYXQgbWFnbmEgZWxpdCBpbiBzYXBpZW4uIFM%3D&exampleStringBinary=001010010100100100001110110000010001100111010001010011101100111010010101101010111001001100110010011000000011001000110011100000000100101100010110111001001111001011101000001001100101111111001001111010101100000110010010001010111110000101110001101011100000101110111011101111001100110011010100100011110001110010100100001001101100011100111001010110000010100101101011100010111010100110110111101000101000111010101010100010111011010100001010010101101010000011001011111010001100110010101101010110110111101110111000000101110011100110000110111011001100100010100010100100011110111001101011110010110100100010010100001101111101010000111111111011100111011111001101100110010000010010000011101001000101101000100101011100000100001111110010000111101001111001101110110101111011011010101000010111111010001101110001000000110011011001100001011011100000001110101010000001000011101001111111010000110010101011110110000100101100010011111010100101100110100101010110101110111101101010011001101011101111100100111001000111101101000111110000110001100011001010010101001110010000000000110101&exampleStringDate=2016-09-03&exampleStringDateTime=2016-09-03T13%3A35%3A02%2B00%3A00&exampleStringPassword=OeYa%7Dd%26AN%2A2%2BIXn%5CkRTMX%A7ORjLy%B0%5C%C2%2B%2C_z%B53l9wr.s%2Flw%7D%28bCRA-%2A%5BJ%B0Cb8%24%2C%7BTI%C2lMSch%60%24ac-m%239y~%201kc%28%3B%29%A7%23-Mgb%2BZ%7B%60%5BU%2F%3Aoa%23A%5BVI%3DmyEmcR%5BTBC%3F%3F%7BKQ9ey%A7%21mXT0%3AnBh%236%26%27q%21%25CizgS%21J8E%7DYO%24qjNND%5DN%28%5Cc%5D4kj%3D6%7DkI%28Tqx%C2%21H%7By%B0zF%3BT7ff%40y%C20Kb3%2Fv%5D%20&exampleStringUri=http%3A%2F%2Flocalhost%2Fpath%2Fscript.php%3Fquery%23fragment&in_reply_to_status_id=%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20&lat=%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pelle&long=lus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20ju&place_id=a.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20&display_coordinates=io%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20n&trim_user=%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fer 
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
HTTP 1.1 get http://api.twitter.com/1.1/statuses/oembed?id=it%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20ero&url=r%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus&maxwidth=ur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsu&hide_media=mentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20&hide_thread=n%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.&align=%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20ero&related=diet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum&lang=dum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20&exampleNumber=3.216674E+171&exampleNumberFloat=0&exampleNumberDouble=0 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/list?screen_name=%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentu&user_id=r%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20i 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/statuses?list_id=%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Don&slug=llamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20er&owner_screen_name=es%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20&owner_id=lerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20i&since_id=landit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20&max_id=am%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elem&count=nibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20&include_entities=d%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed&include_rts=%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/members/destroy?list_id=%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20&slug=t%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc&owner_screen_name=ntesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20n&user_id=%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20&screen_name=it.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20li&owner_id=roin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodale 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/memberships?user_id=.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20trist&screen_name=s%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sa&cursor=%20at%20hendrerit%20enim.%20Sed%20leo%20e&filter_to_owned_lists=etium%20tortor.%20Praesent%20interdum%20fringilla%20orci 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers?list_id=sis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20&slug=%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibu&owner_screen_name=%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidun&owner_id=e%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20v&cursor=raesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20C&include_entities=pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cur&skip_status=ed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequ 
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
HTTP 1.1 post http://api.twitter.com/1.1/lists/subscribers/create?list_id=tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20&slug=%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20qu&owner_screen_name=por%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20&owner_id=volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20o 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers/show?list_id=is%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20&slug=ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendiss&owner_screen_name=%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20s&user_id=urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20&screen_name=s%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspen&owner_id=lum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20e&include_entities=ada%2C%20ve&skip_status=ing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20co 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers/destroy?list_id=tesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metu&slug=%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20fin&owner_screen_name=%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scele&owner_id=mperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nis 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/members/create_all?list_id=bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia&slug=.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat&owner_screen_name=lit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehic&owner_id=na%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20portt&user_id=Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20fa&screen_name=it%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20e 
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
HTTP 1.1 post http://api.twitter.com/1.1/lists/destroy?list_id=er.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20es&slug=.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut&owner_screen_name=us.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facil&owner_id=estibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimen 
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
HTTP 1.1 post http://api.twitter.com/1.1/lists/update?list_id=s%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus&slug=luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molest&owner_screen_name=a%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttit&owner_id=dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20i&name=agittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20S&mode=lit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vi&description=%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Cur 
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
HTTP 1.1 post http://api.twitter.com/1.1/lists/create?name=&mode=ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gra&description=tincidunt%20pretium%20sodales.%20Etiam%20di 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/show?list_id=inibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20j&slug=%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliqu&owner_screen_name=%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20&owner_id=%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20S 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscriptions?screen_name=%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20&user_id=trices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ult&count=t%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20n&cursor=ar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20 
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
HTTP 1.1 get http://api.twitter.com/1.1/list/members/show?list_id=a%20ut%2C%20suscipit%20est.%20Etiam%20vari&slug=s%20felis%20aliquam%20enim%2C%20i&user_id=.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tell&screen_name=s%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentu&owner_screen_name=t%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mau&owner_id=t%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut&include_entities=ortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20moles&skip_status=Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices 
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
HTTP 1.1 get http://api.twitter.com/1.1/list/members?list_id=nec.%20Vestibu&slug=rices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sa&owner_screen_name=%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.&owner_id=%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vi&include_entities=consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20susci&skip_status=bus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultri&cursor=m%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex 
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
HTTP 1.1 post http://api.twitter.com/1.1/list/members/create?list_id=cilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20d&slug=%2C%20consectetur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20U&screen_name=ed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20&owner_screen_name=da%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sa&owner_id=rcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non 
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
HTTP 1.1 get http://api.twitter.com/1.1/list/members/destroy_all?list_id=dit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20do&slug=u%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultrici&user_id=e%2C%20eros%20in%20preti&screen_name=%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20f&owner_screen_name=s.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20l&owner_id=.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Su 
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
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages/sent?since_id=pat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisi&max_id=u&count=tium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tri&page=cibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20&include_entities=malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesq 
```




#### get /direct_messages/show
returns a single direct message specified by an id
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| id | query | string |  no |  |  |  |  |  |  | ID of direct message

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages/show?id=est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20V 
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
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages?since_id=itudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20v&max_id=d%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesq&include_entities=tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20te&skip_status=ipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20mole 
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
HTTP 1.1 post http://api.twitter.com/1.1/direct_messages/destroy?id=interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendu&include_entities=s.%20Morbi%20cons 
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
HTTP 1.1 post http://api.twitter.com/1.1/direct_messages/new?user_id=em%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20s&screen_name=%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse&text=ravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20f 
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
HTTP 1.1 get http://api.twitter.com/1.1/search/tweets?q=ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20&geocode=ed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.&lang=Nullam%20ultricies%20turpis%20nec%20digniss&locale=mod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodal&result_type=%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendis&count=tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tort&until=sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellu&since_id=.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulv&max_id=sis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex&include_entities=lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20ve&callback=%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissi 
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
HTTP 1.1 get http://api.twitter.com/1.1/saved_searches/show/+nunc+maximus%2C+finibus+erat.+Proin+id+scelerisque+ipsum.+Quisque+porta+mauris+nec+massa+egestas%2C+sed+mollis+est+molestie.+Aenean+quam+nisi%2C+posuere+sed+varius+sodales%2C+sagittis+sed+ex.+Vivamus+id+vulputate+odio.+Do 
```




#### post /saved_searches/create
Create a new saved search for the authenticated user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| query | query | string |  no |  |  |  |  |  |  | The query of the search the user would like to save

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/saved_searches/create?query=%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20n 
```




#### post /saved_searches/destroy/{id}
Destroy a saved search for the authenticating user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| id | path | string |  no |  |  |  |  |  |  | The id of the saved search

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/saved_searches/destroy/um.+Duis+sem+elit%2C+posuere+eu+facilisis+nec%2C+tempus+ac+ipsum.+Ut+molestie+aliquet+est%2C+posuere+tincidunt+elit.+Etiam+convallis+eu+ligula+non+consequat.+Pellentesqu 
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
HTTP 1.1 get http://api.twitter.com/1.1/friends/ids?user_id=enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringil&screen_name=s%20nec.%20Vestibulum%20&cursor=felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendu&stringify_ids=c.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20sc&count=a%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maec 
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
HTTP 1.1 get http://api.twitter.com/1.1/followers/ids?user_id=e.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula&screen_name=ien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudi&cursor=%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20ju&stringify_ids=ris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facil&count=lis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus 
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
HTTP 1.1 get http://api.twitter.com/1.1/friendships/incoming?cursor=im%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet&stringify_ids=ed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20sempe 
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
HTTP 1.1 get http://api.twitter.com/1.1/friendships/outgoing?cursor=agna%20ut%2C%20suscipit&stringify_ids=e%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20o 
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
HTTP 1.1 post http://api.twitter.com/1.1/friendships/create?screen_name=pat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesqu&user_id=es%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed&follow=%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dign 
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
HTTP 1.1 post http://api.twitter.com/1.1/friendships/destroy?screen_name=sus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20fauc&user_id=en%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20ju 
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
HTTP 1.1 post http://api.twitter.com/1.1/friendships/update?screen_name=%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20&user_id=m%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20v&device=sent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20v&retweets=rem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20 
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
HTTP 1.1 get http://api.twitter.com/1.1/friendships/show?source_id=us%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagitti&source_screen_name=s%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare&target_id=incidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20er&target_screen_name=ttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20p 
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
HTTP 1.1 post http://api.twitter.com/1.1/account/settings?trend_location_woeid=malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C&sleep_time_enabled=%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neq&start_sleep_time=bulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20v&end_sleep_time=.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20con&time_zone=%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20i&lang=estibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20v 
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
HTTP 1.1 post http://api.twitter.com/1.1/account/update_delivery_device?device=id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et&include_entities=%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20se 
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
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile?name=sim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20males&url=nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesq&location=bh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20cond&description=na%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20&include_entities=em%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus&skip_status=llicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesu 
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
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_background_image?tile=Nullam%20ultricies%20turpis%20nec%20dignissim%20aliquam.&use=la.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendis&include_entities=um%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna&skip_status=lestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20o 
Content-Type: multipart/form-data, boundary=57cad18694591
Content-Length: 761
--57cad18694591
content-disposition: form-data; name="file"

--data-binary 
ZGM1MGFiNzA1NjgzNTNjZjBlNDVmZjk3ZWM5YmY5ZDU0MzlmZjE0MzljNTI0NjgzZTZhOWNmNzY5ZDAwZWE4YzY1YjFkNmY2MTA2NTc0ZDg4Y2ZlY2E1ZjYwM2Q4MTVmYWVlMzVlODI3OThiMDAxNzgwMzY1ZDVjYThlYzNhNDI3ZjYwYWZjMGZiOThlNjFjY2Q4MmQyMTQ0MGQ3NGEyMGYyNTE4ODczZTliMTYxMzJmNjAzY2ExMDkwMTY4MmY3NjYwNGE0ZTUxZGJhYjExYjM3NjNlNjllZjliZjViMDczM2E0YTEzYWQ5ZGY1YWQyNGI1MWY2NDM2OWIwNjVkY2M2ZDlmZDQ0MmQxMWZkZTk5ZWQxMWU0ZWRkNDY5ZmEwNGE1ZTU1NmRjN2FmMDFlOTYzZTQ3NjI2NTk1MWNmOGFmMGNkZmYyYzQ2MTA4MmU5NmMxZmVjYzVlNzBiNzBkMDdmMDRjY2NlOTA5NjQ2MTY1ZjAyOTU0OTgzNmU5ZTgyZWRiNTJlZTY1NTY2YzhiODZjMWRlMWJjZWQ1OGUzZTUxYmIxMmE0NjdhMjFkMmMyYzA3MThlM2JjMDRlZTdkZTY3MTVhN2RlM2NmYjY4OTBkYThhOTdiNjEwNjExZjZkZGY5ZTdmZDE0N2M5Nzc5NGNjZWMwNzJhNzVlNDA5NDU=
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
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_colors?profile_background_color=%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisq&profile_link_color=luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20v&profile_sidebar_border_color=s.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue&profile_sidebar_fill_color=e%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20&profile_text_color=igula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20fauci&include_entities=cula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posue&skip_status=tus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volut 
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
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_image?skip_status=tricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C 
Content-Type: multipart/form-data, boundary=57cad18695700
Content-Length: 762
--57cad18695700
content-disposition: form-data; name="image"

--data-binary 
ODE3ZjI0ZDBmZTUwNzA0ODVkMDFjODIwNDI5MmMwMTI0MzFhNjI2ZDc5MmU0MWViMWU2NzBiMGJiODM3MDcyMzJkNTJlMDEyYWY5YWRiMDE0MTNkYWFiYTlhZmVkMGI2MTUzMWY2MWE0ODkyNTg3MTNjY2RjZWVhNmRhOWI3YTM4MjE4OGNiNDBhNjNlNTlhZjA5NzczM2E2ODkxMzhhZDEwMmI0MDdhNzA3ZWRhNmQ2ZTk4NTQyMmU0NWE4NTEyMjhkMTg4YTJiYTNmYTRlYzE3YWI3NGI5MWViNDhmZGVjOGMyNGQ3YjAwMTI3ZmU4NjA2YWNlMTcyYWIwMTI0Y2JiMzFkM2UxZWRkZGYzYjgzNzUwZjNhMDJiNjI0ZDhhOGE3NDdlYjlhN2U3YjAxNzBlOGRiNTlhYTE3NThmOThkN2I2OTI4ZjRlYzJjZmRmYTE2YmNiNGZjNDc0NDUyMDJmODQwZGFlZWE3MDQ3MWYzYzZiOTIyZDQ2MWI5NDAzYjNlOGFhZjlhZTczYjc1MTM4YmQxMDg0ZTZhMzM0N2NiYWQzNjNjMzU0MWVlZTExOTM0NmEzZGU2MjJiODMxOGFlZGQxNGZlNTkwNDVmMmIyMGI5M2JmMzk1ZWE3YWYwOWRjNjJhYjY2OWNkNGY1ZmU5NWEyZTc1OTkyNjFhYzk=
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
HTTP 1.1 get http://api.twitter.com/1.1/blocks/list?include_entities=suere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20&skip_status=get%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20&cursor=on%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20ne 
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
HTTP 1.1 get http://api.twitter.com/1.1/blocks/ids?stringify_ids=non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20n&cursor=cing%20elit.%20Suspendisse%20 
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
HTTP 1.1 post http://api.twitter.com/1.1/blocks/create?screen_name=icies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20e&user_id=rem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20ris&include_entities=&skip_status=pis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttito 
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
HTTP 1.1 post http://api.twitter.com/1.1/blocks/destroy?screen_name=ullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsu&user_id=ltrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20u&include_entities=rci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20od&skip_status=liquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu 
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
HTTP 1.1 get http://api.twitter.com/1.1/users/lookup?screen_name=dales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu&user_id=dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20vo&include_entities=ed%20ex.%20Viv 
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
HTTP 1.1 get http://api.twitter.com/1.1/users/show?screen_name=i%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20m&user_id=%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20&include_entities=entesque%20elit%20libe 
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
HTTP 1.1 get http://api.twitter.com/1.1/users/search?q=%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20e&page=urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20f&count=ortis%20porttitor&include_entities=et%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac 
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
HTTP 1.1 get http://api.twitter.com/1.1/users/contributees?screen_name=tor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20&user_id=o%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20eli&include_entities=bh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20ac%20quam%20gravida%20pellente&skip_status=s%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dic 
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
HTTP 1.1 get http://api.twitter.com/1.1/users/contributors?screen_name=interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis&user_id=pus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20fa&include_entities=it%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20inte&skip_status=%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20 
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
HTTP 1.1 post http://api.twitter.com/1.1/users/report_spam?screen_name=%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis&user_id=i.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20c 
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
HTTP 1.1 get http://api.twitter.com/1.1/geo/id/molestie.+Aenean+quam+nisi%2C+posuere+sed+varius+sodales%2C+sagittis+sed+ex.+Vivamus+id+vulputate+odio.+Donec+quis+facilisis+arcu%2C+vel+ultrices+augue.+Suspendisse+po 
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
HTTP 1.1 get http://api.twitter.com/1.1/geo/reverse_geoncode?lat=urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis&long=ltricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20male&accuracy=dum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20ve&granularity=c%20consectetur&max_results=cidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C&callback=r%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20 
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
HTTP 1.1 get http://api.twitter.com/1.1/geo/search?lat=bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20d&long=consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.&query=%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus&ip=%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20&accuracy=d%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20&granularity=ipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20el&contained_within=acilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac&attribute%3Astreet_address=.%20Nullam%20vel%20metus%20ac%20quam%20gravida%20pellentesque.%20Nullam%20ultricies%20turpis%20nec%20dignissim%20aliquam.%20Nunc&callback=lit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facil 
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
HTTP 1.1 get http://api.twitter.com/1.1/geo/similar_places?lat=culis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20o&long=non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl&name=um%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laor&contained_within=ignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis&attribute%3Astreet_address=eo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque&callback=Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrer 
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
HTTP 1.1 get http://api.twitter.com/1.1/geo/places?lat=olestie%20pretium%20tortor.%20Praesent%20interdum%20fring&long=llentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20ac%20quam&name=m%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20sceleri&token=s%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.&contained_within=%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20eli&attribute%3Astreet_address=pat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20f&callback=t%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20f 
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
HTTP 1.1 get http://api.twitter.com/1.1/trends/place?id=ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20&exclude=dipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20 
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
HTTP 1.1 get http://api.twitter.com/1.1/trends/closest?lat=is%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20e&long=%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20males 
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

