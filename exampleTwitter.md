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
HTTP 1.1 get http://api.twitter.com/1.1/statuses/mentions_timeline?count=it%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultri&since_id=llentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20m&max_id=%20Suspendisse%20potenti&trim_user=tpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20&contributor_details=a%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere&include_entities=m%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum 
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
| contributor_details | query | boolean |  no |  |  |  |  |  |  | This paramters enhances the contributors element of the status response to include the screen_name of the contributor
| include_rts | query | boolean |  no |  |  |  |  |  |  | When set to false, the timeline will strip any native retweet

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/user_timeline?count=erisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibe&since_id=sim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehi&max_id=am.%20Pellentesq&trim_user=blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam&exclude_replies=1&contributor_details=1&include_rts=0 
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
| contributor_details | query | boolean |  no |  |  |  |  |  |  | This paramters enhances the contributors element of the status response to include the screen_name of the contributor

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/home_timeline?since_id=erdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20u&max_id=ng%20e&trim_user=s%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed&exclude_replies=0&contributor_details=0 
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
HTTP 1.1 post http://api.twitter.com/1.1/statuses/retweets/entesque+elit+libero%2C+faucibus+luctus+ante+nec%2C+volutpat+dictum+neque.+Donec+molestie%2C+eros+in+pretium+pulvinar%2C+est?trim_user=iquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tr 
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
HTTP 1.1 get http://api.twitter.com/1.1/statuses/show/ius+purus%2C+nec+condimentum+tellus+sagittis+at.+Nullam+?trim_user=ales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20&include_my_retweet=%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusc&include_entities=urabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lo 
```




#### post /statuses/destroy/{id}
Destroys the status specified by the required ID parameter
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| id | path | string |  no |  |  |  |  |  |  | The numerical ID of the desired status
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/destroy/sis?trim_user=ed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C 
```




#### post /statuses/update
Updates the authenticating user's status
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| status | query | string |  no |  |  |  |  |  |  | The text of your status update
| in_reply_to_status_id | query | string |  no |  |  |  |  |  |  | The ID of an existing status
| lat | query | string |  no |  |  |  |  |  |  | The latitude of the location
| long | query | string |  no |  |  |  |  |  |  | The longitude of the location
| place_id | query | string |  no |  |  |  |  |  |  | A place in the world
| display_coordinates | query | string |  no |  |  |  |  |  |  | Whether or not to put a pin on the exact coordinates a tweet
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/update?status=r%20blandit%2C%20bibendum%20tortor%20ac%2C%20con&in_reply_to_status_id=sto%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisi&lat=acus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligul&long=dum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20a&place_id=lum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisqu&display_coordinates=%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magn&trim_user=quat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pe 
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

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/oembed?id=.%20Sed%20leo%20ex%2C%20pulvinar%20v&url=%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.&maxwidth=l%20metus%20ac%20quam%20gravida%20pel&hide_media=orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacini&hide_thread=et%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nun&align=rem%20ip&related=t%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20i&lang=u%20nunc%20interdum%20laor 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/list?screen_name=s%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20q&user_id=%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20i 
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
| since_id | query | string |  no |  |  |  |  |  |  | Returns results with an ID greater than the sepcified ID
| max_id | query | string |  no |  |  |  |  |  |  | Returns results with an ID less than or equal to the specified ID
| count | query | string |  no |  |  |  |  |  |  | Specifies the number of results to retrieve per page
| include_entities | query | string |  no |  |  |  |  |  |  | Entities are ON by default
| include_rts | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, the list timeline will contain native retweets in addition to the standard stream of tweets

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/statuses?list_id=ilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tinci&slug=is.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros&owner_screen_name=dunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20&owner_id=sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20s&since_id=eque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scel&max_id=%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C&count=rcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretiu&include_entities=entesque.%20Nullam%20ultricies%20turpis%20nec%20dignissim%20aliquam.%20Nunc&include_rts=%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condiment 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/members/destroy?list_id=s.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20v&slug=quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In&owner_screen_name=avida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mau&user_id=rpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis&screen_name=ellus%20sagittis%20at.%20Nullam%20vel%20metus%20ac%20quam%20gravida%20pellentesque.%20Nullam%20ultrici&owner_id=ui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vu 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/memberships?user_id=ibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finib&screen_name=sce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20a&cursor=%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dig&filter_to_owned_lists=el%20metus%20et%2C%20molestie%20pretium%20tor 
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
| include_entities | query | string |  no |  |  |  |  |  |  | Wehn set to either true, t or 1
| skip_status | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers?list_id=perdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20e&slug=or%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20fel&owner_screen_name=%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gra&owner_id=ollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sod&cursor=as%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit&include_entities=io.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20&skip_status=%20Nunc%20et%20lorem%20eros.%20Sus 
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
HTTP 1.1 post http://api.twitter.com/1.1/lists/subscribers/create?list_id=n%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrice&slug=n%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperd&owner_screen_name=e%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Cur&owner_id=osuere%20sed%20varius%20sodales%2C%20sagittis 
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
| include_entities | query | string |  no |  |  |  |  |  |  | Wehn set to either true, t or 1
| skip_status | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers/show?list_id=id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accums&slug=reet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posu&owner_screen_name=uctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.&user_id=e.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20&screen_name=ie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20moles&owner_id=%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Cu&include_entities=est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20&skip_status=tetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20ferment 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers/destroy?list_id=erisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20&slug=l.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20v&owner_screen_name=ecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacini&owner_id=is%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/members/create_all?list_id=.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestib&slug=%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20l&owner_screen_name=tibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20alique&owner_id=a%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20grav&user_id=ulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20&screen_name=retium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20e 
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
HTTP 1.1 post http://api.twitter.com/1.1/lists/destroy?list_id=.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac&slug=sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Do&owner_screen_name=gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20t&owner_id=accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mau 
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
HTTP 1.1 post http://api.twitter.com/1.1/lists/update?list_id=uam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elem&slug=a%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur&owner_screen_name=rnare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pret&owner_id=aximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis&name=et%20varius%20orci.%20Do&mode=turpis%20nec%20dignissim%20aliquam.%20Nunc%20s&description=a%20elit%20in%20sapien.%20Sed%20malesuada%2C%20ve 
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
HTTP 1.1 post http://api.twitter.com/1.1/lists/create?name=ellus%20accumsan%20tincidunt.%20Aliquam%20enim%20dui%2C%20co&mode=%20id%2C%20semper%20felis.%20Fus&description=%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pell 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/show?list_id=tpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ip&slug=t.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristi&owner_screen_name=%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fu&owner_id=%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper 
```




#### get /lists/subscriptions
Returns list of subscriptions
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user
| user_id | query | string |  no |  |  |  |  |  |  | The id of the user for whom to return results for
| count | query | string |  no |  |  |  |  |  |  | The amount of results to return per page
| cursor | query | string |  no |  |  |  |  |  |  | Breaks the results into pages

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscriptions?screen_name=etur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20m&user_id=%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20l&count=%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20ve&cursor=ellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20e 
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
| include_entities | query | string |  no |  |  |  |  |  |  | Wehn set to either true, t or 1
| skip_status | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members/show?list_id=roin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20e&slug=%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20&user_id=usce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20e&screen_name=m%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20le&owner_screen_name=elis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20in&owner_id=.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20&include_entities=s%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lor&skip_status=Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20 
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
| include_entities | query | string |  no |  |  |  |  |  |  | Wehn set to either true, t or 1
| skip_status | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1
| cursor | query | string |  no |  |  |  |  |  |  | Breaks the results into pages

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members?list_id=aoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.&slug=gnissim%2C%20tincid&owner_screen_name=tis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20element&owner_id=re%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est&include_entities=varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20&skip_status=olor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sap&cursor=%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et 
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
HTTP 1.1 post http://api.twitter.com/1.1/list/members/create?list_id=que%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20soda&slug=odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20se&screen_name=ibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20&owner_screen_name=sque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20M&owner_id=s%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20m 
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
HTTP 1.1 get http://api.twitter.com/1.1/list/members/destroy_all?list_id=diet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20s&slug=suere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20&user_id=&screen_name=us%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretiu&owner_screen_name=lerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20q&owner_id=%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20j 
```




### Resource : direct_messages
#### get /direct_messages/sent
return 20 most recent direct messages sent
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| since_id | query | string |  no |  |  |  |  |  |  | 
| max_id | query | string |  no |  |  |  |  |  |  | 
| count | query | string |  no |  |  |  |  |  |  | 
| page | query | string |  no |  |  |  |  |  |  | 
| include_entities | query | string |  no |  |  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages/sent?since_id=uris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim&max_id=Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20fa&count=stibulum%20magna%20ut%2C%20sus&page=quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20faci&include_entities=lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20ame 
```




#### get /direct_messages/show
returns a single direct message specified by an id
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| id | query | string |  no |  |  |  |  |  |  | ID of direct message

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages/show?id=%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etia 
```




#### get /direct_messages
return 20 most recent direct messages sent to user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| since_id | query | string |  no |  |  |  |  |  |  | return results with ID greater than specified
| max_id | query | string |  no |  |  |  |  |  |  | returns results with an ID less than/equal to specified ID
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include status

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages?since_id=rices%20nec.%20Vestibulum%20elementu&max_id=lacinia%20id%20tempor%20sed%2C%20dap&include_entities=.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20mol&skip_status=nsectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultr 
```




#### post /direct_messages/destroy
destroys direct messages specified in required ID
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| id | query | string |  no |  |  |  |  |  |  | ID of direct message to delete
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/direct_messages/destroy?id=nc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20&include_entities=lentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximu 
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
HTTP 1.1 post http://api.twitter.com/1.1/direct_messages/new?user_id=et.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam&screen_name=.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis&text=ntum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in 
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
| count | query | string |  no |  |  |  |  |  |  | number of tweets to return
| until | query | string |  no |  |  |  |  |  |  | returns tweets created before given date
| since_id | query | string |  no |  |  |  |  |  |  | return results with ID greater than specified
| max_id | query | string |  no |  |  |  |  |  |  | returns results with an ID less than/equal to specified ID
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities
| callback | query | string |  no |  |  |  |  |  |  | response will use the callback with given name

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/search/tweets?q=%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egest&geocode=%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolo&lang=orem%20ipsum%20dolor%20&locale=%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20ne&result_type=%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20por&count=is%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20&until=a%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20&since_id=%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consec&max_id=elis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue&include_entities=re%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20M&callback=porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20 
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
HTTP 1.1 get http://api.twitter.com/1.1/saved_searches/show/i+id+eros+vive 
```




#### post /saved_searches/create
Create a new saved search for the authenticated user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| query | query | string |  no |  |  |  |  |  |  | The query of the search the user would like to save

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/saved_searches/create?query=d%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C 
```




#### post /saved_searches/destroy/{id}
Destroy a saved search for the authenticating user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| id | path | string |  no |  |  |  |  |  |  | The id of the saved search

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/saved_searches/destroy/cu%2C+et+dignissim+augue+interdum+sed.+Vestibulum+eget+luctus+metus%2C+eu+bibendum+orci.+Sed+eros+massa%2C+vehicula+quis+condimentum+eget%2C+tristique+ut+quam.+Maecenas+et+v 
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
| count | query | string |  no |  |  |  |  |  |  | number of IDs to attempt retrieval of

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friends/ids?user_id=im%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuad&screen_name=utate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare&cursor=acinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accums&stringify_ids=cilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turp&count=%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20ac%20quam%20gravida%20 
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
| count | query | string |  no |  |  |  |  |  |  | number of IDs to attempt retrieval of

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/followers/ids?user_id=%20Sed%20sed%20neque%20dignissim%2C%20imperdi&screen_name=st%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Don&cursor=a.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc&stringify_ids=im%20dui%2C%20consectetur&count=rerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Cu 
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
HTTP 1.1 get http://api.twitter.com/1.1/friendships/incoming?cursor=que%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20v&stringify_ids=s%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula 
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
HTTP 1.1 get http://api.twitter.com/1.1/friendships/outgoing?cursor=%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Ma&stringify_ids=elis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum 
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
HTTP 1.1 post http://api.twitter.com/1.1/friendships/create?screen_name=acilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20&user_id=bi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20&follow=%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20v 
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
HTTP 1.1 post http://api.twitter.com/1.1/friendships/destroy?screen_name=sus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tinci&user_id=lisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20M 
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
HTTP 1.1 post http://api.twitter.com/1.1/friendships/update?screen_name=ingilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ip&user_id=iquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20&device=neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20&retweets=quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20 
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
HTTP 1.1 get http://api.twitter.com/1.1/friendships/show?source_id=or.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20&source_screen_name=uam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrice&target_id=nteger%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ips&target_screen_name=vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odi 
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
HTTP 1.1 post http://api.twitter.com/1.1/account/settings?trend_location_woeid=Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi&sleep_time_enabled=%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20&start_sleep_time=us%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidu&end_sleep_time=t%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20&time_zone=is%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20n&lang=inar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20so 
```




#### post /account/update_delivery_device
sets which device Twitter delivers updates to for user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| device | query | string |  no |  |  |  |  |  |  | must be one of sms, none
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_delivery_device?device=t%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipi&include_entities=%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium 
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
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include statuses in response

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile?name=arius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse&url=%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20&location=ctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectet&description=is%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet&include_entities=dales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20&skip_status=is%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20 
```




#### post /account/update_profile_background_image
updates user's profile background image
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| tile | query | string |  no |  |  |  |  |  |  | whether or not to tile background image
| use | query | string |  no |  |  |  |  |  |  | display background image or not
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include status in returned user objects
| file | formData | file |  no |  |  |  |  |  |  | image to replace background image of profile

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_background_image?tile=%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20mo&use=lla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20&include_entities=ices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20moles&skip_status=%20In%20nisi%20odio%2C%20porta%20ut%20q 
Content-Type: multipart/form-data, boundary=57cad1f2a967e
Content-Length: 761
--57cad1f2a967e
content-disposition: form-data; name="file"

--data-binary 
MGZlYzc5MGZhNjA3NGRiMzQ2NWU2YTA5YjM4ZThhNGQ4YjU0MjE4OTIzMjg4MzkxYTgzOGQzMTRjNTFjNzUxZjVlZTU3ZjJhMzFkZDUyYjFmOGNmZTcwZGM0ODIzMGYxYWFlZWI0OWNkODBlMzg1NGUzOGY3M2U2NjFiOGYxOTJlYWNiNTIzYmY0MmRjZGFiNWIzY2E2YzY3MTdmOGEwNmMxNTVlMTM3MzQ4NGUwZDg2YmE0YjBjYzM1NzNlZWI5YzlhOThlYzE2ZTJjYjdkMzllNmQzMTUwZmU0Mjk5MTBhN2RjMmQ5YjEwMWVlYTAzNGIzYWExYzE0YjVhOGE2YTMwM2ZlOWYwY2E4YTk2YTU1OWI0ZDE1ZjViNzA5ZmM0Yjk2NzQ5Y2EzZTBkN2U1ODhmMjE4NjQ3OTUwMDM2OWRhZjNkZmQ0MGFmNWVhYjYxMDBmZjUxZTU4OGNhMTYyNDI3Y2E4YTUyYmZkZGVlZmI0ZTdiMTlkZTBjNmY3ZDJjMzA3ZjQwMzdkYTliMzBmNTJkMDFhZmY5MWI0N2RiNDIzMTNjYTI4OThhYmM0MDQzNDU3NmE1NmYwYjZhZWM5NjVlMGU4N2EyMzE5ZGQwNzI4ZGJhOGZlOTkyYjhkZDVkM2Y2ZDZiZWI5YWY3NWI3YWQ2NWVhNDYzMDg2YTdhMTE=
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
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include statuses

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_colors?profile_background_color=%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20i&profile_link_color=tur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce&profile_sidebar_border_color=%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condim&profile_sidebar_fill_color=%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibu&profile_text_color=%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Maur&include_entities=oreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20&skip_status=molestie%20pretiu 
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
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_image?skip_status=s%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20an 
Content-Type: multipart/form-data, boundary=57cad1f2aa7d1
Content-Length: 762
--57cad1f2aa7d1
content-disposition: form-data; name="image"

--data-binary 
ZTMyMjcxZjUwYjhjZTQ4YjJlYTE3MzE4OWZmZDhiZTA3MTE1NmM0MTFmYjY2MWFhYzg2NjFjMWU2NWFhNDE0M2YyY2YzYTIyYzFiMDkxYTIwNjg2YzMwZThjMTAyOTk1NDFjMGFjY2M1OGY0Y2E4N2M3NzcwZDEyNTkxOGZiN2I4OWQ2MGM1YzU1MDEwOGE4NDc0MjZiNGMwMjhiZjNmZTMzZDU3ZmJiNzljNjU3OGFhZmFmNzk5NzEyMmE0NjZlNGY1OWMzZTNhYmI4MzExZjZjZTI2YzY4MTc1NjhiZmE1NzUwOTg0YTBlNWFmYWE2OGVjNjcyYmRhMDY4ZGU3NzJiMTc1MjJkYmJiYjhlYmMyMmE2YmY1ZTg1YjRmMWIxYmEwMGZkMzQ1OWY3ODliYzc1Y2NkZDUwNmVlOTBhZTZhMTQwZWVjNGUwYWJlZDMxN2Q2MzcxNDBmZGZkYzcxYTc3YWFmYTkwNmNhMDhiY2IxZjVjN2U2Njc5OTIyODhjMjIyNjU4N2E2OTA3MzM4ZmU5OGNkOWEyZjNhYzFhZTBiZDcwYzY2ODllMGJkN2ZlN2YzYTdhMDM4YWQxN2RhODVhNzdmNzMxNWE3YTZhMTAxNjE5MzE3Y2E3NzZmMWE2NjZjODQ1NzFiMTYzYmEyNjU4NWIyODRhODk3ZjVjOGQ=
```




### Resource : blocks
#### get /blocks/list
disallows retweets and device notifications from a user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include statuses in response
| cursor | query | string |  no |  |  |  |  |  |  | breaks block of user to be broken up into pages

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/blocks/list?include_entities=stibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20d&skip_status=%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20n&cursor=ng%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20 
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
HTTP 1.1 get http://api.twitter.com/1.1/blocks/ids?stringify_ids=%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagitt&cursor=esent%20interdum%20frin 
```




#### post /blocks/create
blocks the specified user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user to be blocked
| user_id | query | string |  no |  |  |  |  |  |  | ID of user to be blocked
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to skip statuses

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/blocks/create?screen_name=rbi%20tincidunt%20pretium%20&user_id=que%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque&include_entities=lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi&skip_status=rbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20ege 
```




#### post /blocks/destroy
un-blocks the specified user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user to be un-blocked
| user_id | query | string |  no |  |  |  |  |  |  | ID of user to be un-blocked
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to skip statuses

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/blocks/destroy?screen_name=sto%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20co&user_id=%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20lao&include_entities=ctetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus&skip_status=%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculi 
```




### Resource : users
#### get /users/lookup
returns fully-hydrated user objects up to 100
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user to lookup
| user_id | query | string |  no |  |  |  |  |  |  | ID of user to lookup
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/lookup?screen_name=len&user_id=s%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.&include_entities=stie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20 
```




#### get /users/show
returns a variety of info about specified user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user to be shown
| user_id | query | string |  no |  |  |  |  |  |  | ID of user to be shown
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/show?screen_name=nteger%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20c&user_id=s%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urn&include_entities=icitudin%20va 
```




#### get /users/search
simple relevance-based user search
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| q | query | string |  no |  |  |  |  |  |  | the search query to run against people search
| page | query | string |  no |  |  |  |  |  |  | specifies the page of results to receive
| count | query | string |  no |  |  |  |  |  |  | number of people to return per page
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/search?q=lentesque&page=%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20l&count=sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20D&include_entities=disse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibul 
```




#### get /users/contributees
collection of users specified user can contribute to
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user that is contributed to
| user_id | query | string |  no |  |  |  |  |  |  | ID of user to that is contributed to
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to skip statuses

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/contributees?screen_name=itudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.&user_id=%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20puru&include_entities=ger%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20&skip_status= 
```




#### get /users/contributors
collection of users that can contribute to specified account
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user contributing
| user_id | query | string |  no |  |  |  |  |  |  | ID of user contributing
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to skip statuses

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/contributors?screen_name=t%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20t&user_id=am%20vel%20metus%20ac%20quam%20gravida%20pellentesque.%20Nullam%20ultricies%20turpis%20nec%20dignissim%20aliqua&include_entities=is%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20impe&skip_status=%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros 
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
HTTP 1.1 post http://api.twitter.com/1.1/users/report_spam?screen_name=c%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egest&user_id=%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20A 
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
HTTP 1.1 get http://api.twitter.com/1.1/geo/id/+dignissim+mi+eget+lacinia.+In+nisi+o 
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
HTTP 1.1 get http://api.twitter.com/1.1/geo/reverse_geoncode?lat=apibus%20vehicula%2C%20sem%20tortor%20accumsan&long=e%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20era&accuracy=ate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus&granularity=luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget&max_results=bh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna&callback=%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin 
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
HTTP 1.1 get http://api.twitter.com/1.1/geo/search?lat=%20ultrices%20erat%2C%20at%20&long=endrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20mas&query=tesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20port&ip=ec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20er&accuracy=l%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesu&granularity=et%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicul&contained_within=erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20&attribute%3Astreet_address=%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultri&callback=n%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit 
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
HTTP 1.1 get http://api.twitter.com/1.1/geo/similar_places?lat=bulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutp&long=lor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20la&name=orta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilis&contained_within=s%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at&attribute%3Astreet_address=%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20or&callback=it.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus 
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
HTTP 1.1 get http://api.twitter.com/1.1/geo/places?lat=%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum&long=ictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.&name=e%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20v&token=%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus&contained_within=endum%20orci.%20Sed%20eros&attribute%3Astreet_address=elis.%20Fusce%20ac%20dui%20nisl.%20Done&callback=%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20feli 
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
HTTP 1.1 get http://api.twitter.com/1.1/trends/place?id=.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pr&exclude=it%2C%20posuere%20eu%20facilisis%20nec%2C%20te 
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
HTTP 1.1 get http://api.twitter.com/1.1/trends/closest?lat=el%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20feli&long=inar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulv 
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

