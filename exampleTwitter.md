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
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| count | query | string |  no |  |  |  |  |  |  | Specifies the number of tweets to try and retrieve |
| since_id | query | string |  no |  |  |  |  |  |  | Returns result with an ID greater than the specified ID |
| max_id | query | string |  no |  |  |  |  |  |  | Returns results with an ID less than or equal to the specified ID |
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object |
| contributor_details | query | string |  no |  |  |  |  |  |  | This parameter enhances the contributors element of the status response |
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/mentions_timeline?count=sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20p&since_id=etus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20&max_id=amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20n&trim_user=llamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20p&contributor_details=%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lect&include_entities=sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Pha 
```




#### get /statuses/user_timeline
Returns a collection of the most recent Tweets posted by the User
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| count | query | string |  no |  |  |  |  |  |  | Specifies the number of tweets to try and retrieve |
| since_id | query | string |  no |  |  |  |  |  |  | Returns result with an ID greater than the specified ID |
| max_id | query | string |  no |  |  |  |  |  |  | Returns results with an ID less than or equal to the specified ID |
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object |
| exclude_replies | query | boolean |  no |  |  |  |  |  |  | This paramters will prevent from appearing in the returned timeline |
| contributor_details | query | boolean |  no |  |  |  |  |  |  | This paramters enhances the contributors element of the status response to include the screen_name of the contributor |
| include_rts | query | boolean |  no |  |  |  |  |  |  | When set to false, the timeline will strip any native retweet |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/user_timeline?count=%20et%20lorem%20eros.%20Suspendisse&since_id=ec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20te&max_id=t%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20&trim_user=%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20&exclude_replies=0&contributor_details=1&include_rts=0 
```




#### get /statuses/home_timeline
Returns a collection of the most recent Tweets
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| since_id | query | string |  no |  |  |  |  |  |  | Returns result with an ID greater than the specified ID |
| max_id | query | string |  no |  |  |  |  |  |  | Returns results with an ID less than or equal to the specified ID |
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object |
| exclude_replies | query | boolean |  no |  |  |  |  |  |  | This paramters will prevent from appearing in the returned timeline |
| contributor_details | query | boolean |  no |  |  |  |  |  |  | This paramters enhances the contributors element of the status response to include the screen_name of the contributor |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/home_timeline?since_id=stie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20a&max_id=te%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20d&trim_user=erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id&exclude_replies=0&contributor_details=0 
```




#### post /statuses/retweets/{id}
Retweens a tweet
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| id | path | string |  no |  |  |  |  |  |  | The numerical ID of the desired status |
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/retweets/dignissim%2C+tincidunt+justo+quis%2C+iaculis+odio.+Mauris+volutpat+dignissim+mi+eget+lacinia.+In+nisi+odio%2C+porta+ut+quam+non%2C+imperdiet+va?trim_user=ltrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus 
```




#### get /statuses/show/{id}
Retruns a single Tweet
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| id | path | string |  no |  |  |  |  |  |  | The numerical ID of the desired status |
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object |
| include_my_retweet | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, any Tweets returned that have been retweeted by the authenticating |
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/show/risque+aliquet.+Phasellus?trim_user=e%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20&include_my_retweet=%20gravida%20pellentesque.%20Nullam%20ultricies%20turpis%20nec%20dignissim%20aliqu&include_entities=t%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fus 
```




#### post /statuses/destroy/{id}
Destroys the status specified by the required ID parameter
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| id | path | string |  no |  |  |  |  |  |  | The numerical ID of the desired status |
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/destroy/isque+aliquet.+Phasel?trim_user=Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20po 
```




#### post /statuses/update
Updates the authenticating user's status
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| status | query | string |  no |  |  |  |  |  |  | The text of your status update |
| in_reply_to_status_id | query | string |  no |  |  |  |  |  |  | The ID of an existing status |
| lat | query | string |  no |  |  |  |  |  |  | The latitude of the location |
| long | query | string |  no |  |  |  |  |  |  | The longitude of the location |
| place_id | query | string |  no |  |  |  |  |  |  | A place in the world |
| display_coordinates | query | string |  no |  |  |  |  |  |  | Whether or not to put a pin on the exact coordinates a tweet |
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/update?status=umsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20m&in_reply_to_status_id=ismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidun&lat=%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C&long=%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrice&place_id=dum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20conva&display_coordinates=t%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.&trim_user=dio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Susp 
```




#### get /statuses/oembed
Returns information allowing the creation of an embedded representation
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| id | query | string |  no |  |  |  |  |  |  | The tweet/status id to return embed code for |
| url | query | string |  no |  |  |  |  |  |  | The encoded URL of the Tweet status to be embedded |
| maxwidth | query | string |  no |  |  |  |  |  |  | The maximum width in pixels that the embed should be rendered at |
| hide_media | query | string |  no |  |  |  |  |  |  | Specifies whether the embedded tweet should automatically show the original message in the case that the embedded Tweet is a reply |
| hide_thread | query | string |  no |  |  |  |  |  |  | Specifies whether the embedded Tweet html should include a 'script' element pointing to widgets.js |
| align | query | string |  no |  |  |  |  |  |  | Specifies whether the embedded Tweet should be left aligned |
| related | query | string |  no |  |  |  |  |  |  | A value for the TWT related parameters |
| lang | query | string |  no |  |  |  |  |  |  | Languages code for the rendered embed |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/oembed?id=ent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20ma&url=%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris&maxwidth=elis%20aliquam%20enim%2C%20id%20feug&hide_media=accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20a&hide_thread=din%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum&align=%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Ph&related=t%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20&lang=ortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20frin 
```




### Resource : lists
#### get /lists/list
Return all lists the authenticating or specified user subscribes to, including their own.
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user for whom to return results for |
| user_id | query | string |  no |  |  |  |  |  |  | The ID of the user for whom to return results for |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/list?screen_name=ue%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facili&user_id=is%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20cond 
```




#### get /lists/statuses
Returns a timeline of tweets authored by memebers of the specified list
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list |
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list by its slug instead of its numerical id |
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug |
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug |
| since_id | query | string |  no |  |  |  |  |  |  | Returns results with an ID greater than the sepcified ID |
| max_id | query | string |  no |  |  |  |  |  |  | Returns results with an ID less than or equal to the specified ID |
| count | query | string |  no |  |  |  |  |  |  | Specifies the number of results to retrieve per page |
| include_entities | query | string |  no |  |  |  |  |  |  | Entities are ON by default |
| include_rts | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, the list timeline will contain native retweets in addition to the standard stream of tweets |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/statuses?list_id=t%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20pur&slug=t%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etia&owner_screen_name=%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem&owner_id=ignissim%20mi%20eget%20lac&since_id=is%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorp&max_id=bus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odi&count=amet%20sagitt&include_entities=t%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat&include_rts=ed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20s 
```




#### get /lists/members/destroy
Returns the list of memebers destroy
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list |
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list by its slug instrad of its numerical id |
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug |
| user_id | query | string |  no |  |  |  |  |  |  | The id of the user for whom to remove from the list |
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user for whom to remove from the list |
| owner_id | query | string |  no |  |  |  |  |  |  | The is of the user who wons the list being requested by a slug |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/members/destroy?list_id=m%20aliquam.%20Nunc%20sed%20enim%20nec%20tel&slug=osuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20&owner_screen_name=ula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20di&user_id=%20Nulla%20justo%20arcu%2C%20sodales%20ac%20c&screen_name=aesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue&owner_id=varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20 
```




#### get /lists/memberships
Returns the lists of the specified user has been added to
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| user_id | query | string |  no |  |  |  |  |  |  | The id of the user for whom to return results for |
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user for whom to return results for |
| cursor | query | string |  no |  |  |  |  |  |  | Breaks the results into pages |
| filter_to_owned_lists | query | string |  no |  |  |  |  |  |  | When set to true, t or 1, will return just lists the authenticating user owns |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/memberships?user_id=acilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turp&screen_name=n%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congu&cursor=nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit&filter_to_owned_lists=turpis%20nec%20dignissim%20aliquam.%20Nunc%20sed%20enim%20nec%20tellus%20 
```




#### get /lists/subscribers
Returns the subscribers of the specified list
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list |
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list by its slug insted of its numerical id |
| owner_screen_name | query | string |  no |  |  |  |  |  |  | the screen name of the user who owns the list being requested by a slug |
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug |
| cursor | query | string |  no |  |  |  |  |  |  | Breaks the results into pages |
| include_entities | query | string |  no |  |  |  |  |  |  | Wehn set to either true, t or 1 |
| skip_status | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1 |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers?list_id=m%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20&slug=si%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed&owner_screen_name=um%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vest&owner_id=%20g&cursor=tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim&include_entities=gestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20n&skip_status=nterdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis 
```




#### post /lists/subscribers/create
Subscribes the authenticated user to the specified list
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list |
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug |
| owner_screen_name | query | string |  no |  |  |  |  |  |  | the screen name of the user who owns the list being requested by a slug |
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/subscribers/create?list_id=nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobor&slug=a%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem&owner_screen_name=%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.&owner_id=t%20amet%2C%20consectetur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ips 
```




#### get /lists/subscribers/show
Check if the specified user is a subscriber of the specified list
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list |
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug |
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug |
| user_id | query | string |  no |  |  |  |  |  |  | The id of the user for whom to remove from the list |
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user for whom to remove from the list |
| owner_id | query | string |  no |  |  |  |  |  |  | The is of the user who wons the list being requested by a slug |
| include_entities | query | string |  no |  |  |  |  |  |  | Wehn set to either true, t or 1 |
| skip_status | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1 |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers/show?list_id=culis%20odio.%20Mauris%20volutpat%20digniss&slug=Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20faci&owner_screen_name=ibendum%20tor&user_id=vamus%20id%20vulputa&screen_name=gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C&owner_id=lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posu&include_entities=urpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibu&skip_status=Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20qua 
```




#### get /lists/subscribers/destroy
Returns list of subscribers destroy
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list |
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug |
| owner_screen_name | query | string |  no |  |  |  |  |  |  | the screen name of the user who owns the list being requested by a slug |
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers/destroy?list_id=elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20&slug=cing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20n&owner_screen_name=modo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere&owner_id=ictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio. 
```




#### get /lists/members/create_all
Returns lists of members create_all
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list |
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug |
| owner_screen_name | query | string |  no |  |  |  |  |  |  | the screen name of the user who owns the list being requested by a slug |
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug |
| user_id | query | string |  no |  |  |  |  |  |  | The id of the user for whom to remove from the list |
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user for whom to remove from the list |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/members/create_all?list_id=lis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20&slug=u%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eg&owner_screen_name=quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20&owner_id=%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultric&user_id=vestibulum%20quam.%20Mor&screen_name=uat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20mo 
```




#### post /lists/destroy
Returns list of destroy
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list |
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug |
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug |
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/destroy?list_id=io%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies&slug=%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20&owner_screen_name=it%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20i&owner_id=tudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congu 
```




#### post /lists/update
Returns lists of updates
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list |
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug |
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug |
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug |
| name | query | string |  no |  |  |  |  |  |  | The name for the list |
| mode | query | string |  no |  |  |  |  |  |  | Whether your list is public or private |
| description | query | string |  no |  |  |  |  |  |  | The description to give the list |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/update?list_id=ulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauri&slug=ed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20f&owner_screen_name=m%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum&owner_id=%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20sempe&name=d%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Mo&mode=is%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20m&description=egestas%20velit%20id%2C 
```




#### post /lists/create
Returns list of create
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| name | query | string |  no |  |  |  |  |  |  | The name for the list |
| mode | query | string |  no |  |  |  |  |  |  | Whether your list is public or private |
| description | query | string |  no |  |  |  |  |  |  | The description to give the list |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/create?name=por%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20e&mode=rius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20males&description=%20eros%20in%20pretium%20pulvina 
```




#### get /lists/show
Returns list of show
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list |
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug |
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug |
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/show?list_id=ngilla.%20Mauris%20eu%20tortor%20blandit%2C%20b&slug=tpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20comm&owner_screen_name=s%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20ac%20qua&owner_id=%20ante%20sit%20amet%20sagittis.%20I 
```




#### get /lists/subscriptions
Returns list of subscriptions
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user |
| user_id | query | string |  no |  |  |  |  |  |  | The id of the user for whom to return results for |
| count | query | string |  no |  |  |  |  |  |  | The amount of results to return per page |
| cursor | query | string |  no |  |  |  |  |  |  | Breaks the results into pages |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscriptions?screen_name=in%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Ma&user_id=us%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20e&count=um%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id&cursor=ique%20ut%20qu 
```




### Resource : list
#### get /list/members/show
Check if the specified user is a member of the specified list
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list |
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug |
| user_id | query | string |  no |  |  |  |  |  |  | The id of the user for whom to remove from the list |
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user for whom to remove from the list |
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug |
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug |
| include_entities | query | string |  no |  |  |  |  |  |  | Wehn set to either true, t or 1 |
| skip_status | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1 |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members/show?list_id=ctus%20metus%2C%20eu%20bibendum%20orci.%20&slug=s%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20m&user_id=m%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20&screen_name=tpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis&owner_screen_name=endisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20f&owner_id=tie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20preti&include_entities=consequat%20mi%20id%20eros%20viverra%20ullamcorper&skip_status=s%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20v 
```




#### get /list/members
Returns the members of the specified list
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list |
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug |
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug |
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug |
| include_entities | query | string |  no |  |  |  |  |  |  | Wehn set to either true, t or 1 |
| skip_status | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1 |
| cursor | query | string |  no |  |  |  |  |  |  | Breaks the results into pages |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members?list_id=hicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20mass&slug=m%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendu&owner_screen_name=licitudin%20et.%20Curabitur%20pulvinar%20metus%20m&owner_id=rci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20cong&include_entities=%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibu&skip_status=imentum%20eget%2C%20tristique%20ut%20quam.%20Mae&cursor=%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet 
```




#### post /list/members/create
Returns list of members create
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list |
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug |
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user for whom to remove from the list |
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug |
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/list/members/create?list_id=%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20&slug=consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20da&screen_name=on%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20e&owner_screen_name=lla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullam&owner_id=t%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20 
```




#### get /list/members/destroy_all
Returns lists of destroy all
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list |
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug |
| user_id | query | string |  no |  |  |  |  |  |  | The id of the user for whom to remove from the list |
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user for whom to remove from the list |
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug |
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members/destroy_all?list_id=um%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20u&slug=ctetur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20ti&user_id=nissim%20aliquam.&screen_name=ro%2C%20faucibus%20luctus%20an&owner_screen_name=ed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20vari&owner_id=t.%20Aliquam%20enim%20dui%2C%20co 
```




### Resource : direct_messages
#### get /direct_messages/sent
return 20 most recent direct messages sent
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| since_id | query | string |  no |  |  |  |  |  |  |  |
| max_id | query | string |  no |  |  |  |  |  |  |  |
| count | query | string |  no |  |  |  |  |  |  |  |
| page | query | string |  no |  |  |  |  |  |  |  |
| include_entities | query | string |  no |  |  |  |  |  |  |  |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages/sent?since_id=neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20po&max_id=te%20sapien%20at%20turpis%20molestie%20congue.&count=vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20ri&page=%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20si&include_entities=vinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20ur 
```




#### get /direct_messages/show
returns a single direct message specified by an id
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| id | query | string |  no |  |  |  |  |  |  | ID of direct message |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages/show?id=itor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20mas 
```




#### get /direct_messages
return 20 most recent direct messages sent to user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| since_id | query | string |  no |  |  |  |  |  |  | return results with ID greater than specified |
| max_id | query | string |  no |  |  |  |  |  |  | returns results with an ID less than/equal to specified ID |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include status |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages?since_id=t%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non&max_id=tique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidu&include_entities=%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lect&skip_status=liquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20v 
```




#### post /direct_messages/destroy
destroys direct messages specified in required ID
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| id | query | string |  no |  |  |  |  |  |  | ID of direct message to delete |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/direct_messages/destroy?id=is%20volutpat%20dignissim%20mi%20eget%20lacinia&include_entities=quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20mol 
```




#### post /direct_messages/new
sends a new direct message to specified user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| user_id | query | string |  no |  |  |  |  |  |  | description |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user receiving message |
| text | query | string |  no |  |  |  |  |  |  | text of your direct message |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/direct_messages/new?user_id=quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20le&screen_name=%20sit%20amet%20fermentum%20ultricies%2C%20felis%20f&text=nim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auct 
```




### Resource : search
#### get /search/tweets
returns collection of relevant Tweets matching query
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| q | query | string |  no |  |  |  |  |  |  | URL-encoded search query of 500 characters max |
| geocode | query | string |  no |  |  |  |  |  |  | returns tweets by users located within given radius |
| lang | query | string |  no |  |  |  |  |  |  | restricts tweets to a given language |
| locale | query | string |  no |  |  |  |  |  |  | language of query you are sending |
| result_type | query | string |  no |  |  |  |  |  |  | specifies type of search results you prefer |
| count | query | string |  no |  |  |  |  |  |  | number of tweets to return |
| until | query | string |  no |  |  |  |  |  |  | returns tweets created before given date |
| since_id | query | string |  no |  |  |  |  |  |  | return results with ID greater than specified |
| max_id | query | string |  no |  |  |  |  |  |  | returns results with an ID less than/equal to specified ID |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |
| callback | query | string |  no |  |  |  |  |  |  | response will use the callback with given name |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/search/tweets?q=%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dign&geocode=%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus&lang=lit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20ac&locale=ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20element&result_type=c%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Ae&count=d%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20&until=.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20&since_id=t%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lob&max_id=ringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesua&include_entities=pien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20&callback=%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20ur 
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
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| id | path | string |  no |  |  |  |  |  |  | The id of the saved search |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/saved_searches/show/+mi+sit+amet+fermentum+ultricies%2C+felis+felis+aliquam+enim%2C+id+feugiat+magna+elit+in+sapien.+Sed+malesuada%2C+velit+eu+d 
```




#### post /saved_searches/create
Create a new saved search for the authenticated user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| query | query | string |  no |  |  |  |  |  |  | The query of the search the user would like to save |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/saved_searches/create?query=ue%20elit%20libero%2C%20faucibus%20luctus%20ant 
```




#### post /saved_searches/destroy/{id}
Destroy a saved search for the authenticating user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| id | path | string |  no |  |  |  |  |  |  | The id of the saved search |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/saved_searches/destroy/+eros+massa%2C+vehicula+quis+condimentum+eget%2C+tristique+ 
```




### Resource : friends
#### get /friends/ids
returns a cursored collection of user IDs followed by user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user for whom to return results for |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user for whom to return results for |
| cursor | query | string |  no |  |  |  |  |  |  | causes list of connections to be broken in pages |
| stringify_ids | query | string |  no |  |  |  |  |  |  | IDs converted to strings |
| count | query | string |  no |  |  |  |  |  |  | number of IDs to attempt retrieval of |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friends/ids?user_id=tis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut&screen_name=at%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egesta&cursor=varius%20orci.%20Donec%20consectetur&stringify_ids=o%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20&count=libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20 
```




### Resource : followers
#### get /followers/ids
returns a cursored collection of user IDs following the user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user for whom to return results for |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user for whom to return results for |
| cursor | query | string |  no |  |  |  |  |  |  | causes list of connections to be broken in pages |
| stringify_ids | query | string |  no |  |  |  |  |  |  | IDs converted to strings |
| count | query | string |  no |  |  |  |  |  |  | number of IDs to attempt retrieval of |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/followers/ids?user_id=is.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sa&screen_name=elit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ull&cursor=%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20males&stringify_ids=%20enim%2C%20id%20f&count=%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ip 
```




### Resource : friendships
#### get /friendships/incoming
returns collection of IDs of users with pending follow request
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| cursor | query | string |  no |  |  |  |  |  |  | causes list of connections to be broken in pages |
| stringify_ids | query | string |  no |  |  |  |  |  |  | IDs converted to strings |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/incoming?cursor=%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libe&stringify_ids=to%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20veh 
```




#### get /friendships/outgoing
returns collection of IDs of users with pending follow request from the user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| cursor | query | string |  no |  |  |  |  |  |  | causes list of connections to be broken in pages |
| stringify_ids | query | string |  no |  |  |  |  |  |  | IDs converted to strings |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/outgoing?cursor=sim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidu&stringify_ids=dit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20t 
```




#### post /friendships/create
allows users to follow user sepcified by ID
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user for whom to befriend |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user for whom to befriend |
| follow | query | string |  no |  |  |  |  |  |  | enable notifications for target user |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/create?screen_name=m%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20f&user_id=massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor&follow=Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20qua 
```




#### post /friendships/destroy
allows user to unfollow user psecified by ID
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user for whom to befriend |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user for whom to befriend |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/destroy?screen_name=tort&user_id=ipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facil 
```




#### post /friendships/update
Allows one to enable or disable settings for specified user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user for whom to befriend |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user for whom to befriend |
| device | query | string |  no |  |  |  |  |  |  | enable/disable device notifications for user |
| retweets | query | string |  no |  |  |  |  |  |  | enable/disable retweets from target user |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/update?screen_name=dunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20lu&user_id=les%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20&device=%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C&retweets=unt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20 
```




#### get /friendships/show
returns detailed info about relationship between two users
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| source_id | query | string |  no |  |  |  |  |  |  | user id of subject user |
| source_screen_name | query | string |  no |  |  |  |  |  |  | screen_name of subject user |
| target_id | query | string |  no |  |  |  |  |  |  | user id of target user |
| target_screen_name | query | string |  no |  |  |  |  |  |  | screen name of target user |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/show?source_id=stibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20&source_screen_name=im%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendu&target_id=por%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollic&target_screen_name=%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20C 
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
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| trend_location_woeid | query | string |  no |  |  |  |  |  |  | the Yahoo! Where On Earth ID to user as defaul tend location |
| sleep_time_enabled | query | string |  no |  |  |  |  |  |  | enables/disables sleep time, silencing notifications |
| start_sleep_time | query | string |  no |  |  |  |  |  |  | the hour that sleep time should begin if enabled |
| end_sleep_time | query | string |  no |  |  |  |  |  |  | the hour that sleep time should end if enabled |
| time_zone | query | string |  no |  |  |  |  |  |  | timezone dates and times should be displayed in |
| lang | query | string |  no |  |  |  |  |  |  | language which Twitter should render in for the user |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/settings?trend_location_woeid=nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20maur&sleep_time_enabled=%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20fauci&start_sleep_time=.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20no&end_sleep_time=tricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20l&time_zone=t.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20e&lang=ltrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20 
```




#### post /account/update_delivery_device
sets which device Twitter delivers updates to for user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| device | query | string |  no |  |  |  |  |  |  | must be one of sms, none |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_delivery_device?device=lla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20f&include_entities=rta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20I 
```




#### post /account/update_profile
sets values that users ar eable to set under Account tab
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| name | query | string |  no |  |  |  |  |  |  | full name of profile |
| url | query | string |  no |  |  |  |  |  |  | url associated with profile |
| location | query | string |  no |  |  |  |  |  |  | city or country describing where user of account is. |
| description | query | string |  no |  |  |  |  |  |  | a description of user owning account |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include statuses in response |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile?name=cenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec&url=Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20&location=um.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20molli&description=.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices&include_entities=teger%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20el&skip_status=an%20nibh%2C%20sed%20pellentesque 
```




#### post /account/update_profile_background_image
updates user's profile background image
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| tile | query | string |  no |  |  |  |  |  |  | whether or not to tile background image |
| use | query | string |  no |  |  |  |  |  |  | display background image or not |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include status in returned user objects |
| file | formData | file |  no |  |  |  |  |  |  | image to replace background image of profile |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_background_image?tile=tell&use=amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellent&include_entities=tudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20&skip_status=%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitu 
Content-Type: multipart/form-data, boundary=57cadcdedb879
Content-Length: 761
--57cadcdedb879
content-disposition: form-data; name="file"

--data-binary 
ZjlmMzA5YmI2ODk0ZDBiYzdmYzc0MzU4N2ZmMGZmMjc5Yzc2MmY0YTAyYzY0YjY1ZDk4MjE1NTE5MDNjN2Y2NzZiZDkwZWVkMTdjNjk0ZjU0NzhkMzdmMjBhOWU0YzUwNmQ4YmRmYTA2YzU1MTg1NGQyOGM1NzQ2MTY1NTQ3ZjY0NTgzNTkzY2IwODhhYmQzM2ZmYWJhZTUyZjc4NDAxODA1ZTZiZDBhMDhmZTk5NGYwNTlkZTllMDgzZjUzYjAxNGUyMTUyMGIzYTA4YWIwMDkyYzIzMzVjMThhMTEzMGVlZmU3NmFmYjhlZDNlZGM5NDhhYjVmNDAxZTQ2MjkwZWNlZWEyYjhiNmJiZWUzY2RmYjcwNWY1YmU1YjdjY2UwMGUxYzgwZDc3MTJhZTkwM2UwZjMzZjI1YTg2Y2UyNjQzOGIzYWI3MzhkOTQyMzQ2MWZlODgxZGNmZDg5YWNiYzdhM2JkYWM0ZjNmNmFkZDZjMGFmZDBhMGIwMjM3MjM3YzQ0ZTljNjc3NmRjNzhiZjg2MGQwNDBlYzk4MjY1YTQ3ODBjOWIyMmZlOWU1MzQ0MmQxNjIyNjVlNmI3NjcwMDczNDQ2MmE2YjY4MTkxYzc5NTY0NDA4MGRkZGY5YTNmMzk2OTA2ODJhZmZiNGE5OTc3M2I4NDMzNWJhZDk4MjM=
```




#### post /account/update_profile_colors
sets one or more hex values that controls color scheme
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| profile_background_color | query | string |  no |  |  |  |  |  |  | profile background color |
| profile_link_color | query | string |  no |  |  |  |  |  |  | profile link color |
| profile_sidebar_border_color | query | string |  no |  |  |  |  |  |  | profile sidebar's border color |
| profile_sidebar_fill_color | query | string |  no |  |  |  |  |  |  | profile's sidebar background color |
| profile_text_color | query | string |  no |  |  |  |  |  |  | profile text color |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include statuses |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_colors?profile_background_color=o%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ip&profile_link_color=us.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20&profile_sidebar_border_color=s%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nis&profile_sidebar_fill_color=us%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20q&profile_text_color=%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulu&include_entities=tus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20&skip_status=t%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ul 
```




#### post /account/update_profile_image
updates user's profile image
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include statuses |
| image | formData | file |  no |  |  |  |  |  |  | image to be set as profile image |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_image?skip_status=iquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tel 
Content-Type: multipart/form-data, boundary=57cadcdedca85
Content-Length: 762
--57cadcdedca85
content-disposition: form-data; name="image"

--data-binary 
NjA2NTBlYjhjYzAzZmJkNmY1YjZkOTU3MDc3Njk2ZGZkMjkwYWUxMjYxYzI2NzBhZGI4ZDI2MjdmYmNmYTNhNTA2NzJhNWUzNTYzZjliZDEzYTFlOTViMmY0ZjM3ODk2ZWQzNDZjYzBhMjI3ZWQxOGJmNGJlNjJkMjU0N2QwN2EzMzAxNWFlOGUzNTVjYzlhZWYyODBmMmQ1M2VkNmM2OWJjYTM0MDI2NjYyNWYwZWYxODY5NDUyNWFmNDEzMDY0MjJiNDI2YWFhZWE3MTU0YjNmYjFkNTY5ZWIzM2Q1Mjk5MzgyNTBhNTRhY2Y4MGU0ZGVmYjFjNmUyZTFkZGM2MmVjZjc1YWIwYWQ4NDk0YTIxYjRkZDczMjBkNTgwZTQwNDhhMjA2MWI5NDE2OTY2YjdiY2U5NDA5NGEwYWM2MTMzODBkYzc4YmNlYTg3Y2YxYTBkMzRjZDMwM2RjMWE1YjJmMTY1ZTMyMzUzYmU5Zjk2OWNiZWY2MDY3OGYzNGE3MWMzODQ1YjQyNTVjZGVhMzUyZTU1YzQwMGFkOTYzZDBhNjdlY2IxNjk5MThkYTUwMjhhMDJkYzk5MTY0OTUzMmQxMjFjM2VlYTg1NTE1NzBkZWY5NDVjMjE0NWRlYTc3ZjNlNWNlNTA2MmZlMWNkOTBjZjc4MmNjMzMyZWJhMzc=
```




### Resource : blocks
#### get /blocks/list
disallows retweets and device notifications from a user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include statuses in response |
| cursor | query | string |  no |  |  |  |  |  |  | breaks block of user to be broken up into pages |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/blocks/list?include_entities=%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20ni&skip_status=tur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ip&cursor=aesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finib 
```




#### get /blocks/ids
returns array of numeric user ids of blocked users
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| stringify_ids | query | string |  no |  |  |  |  |  |  | returns array of numeric IDs as string IDs |
| cursor | query | string |  no |  |  |  |  |  |  | breaks up block of user IDs into pages |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/blocks/ids?stringify_ids=esuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20&cursor=i%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellu 
```




#### post /blocks/create
blocks the specified user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user to be blocked |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user to be blocked |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to skip statuses |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/blocks/create?screen_name=empus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20&user_id=%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20m&include_entities=stique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit&skip_status=hicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20variu 
```




#### post /blocks/destroy
un-blocks the specified user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user to be un-blocked |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user to be un-blocked |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to skip statuses |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/blocks/destroy?screen_name=aucibus%20urna%20arcu%2C%20et%20dignissi&user_id=%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20&include_entities=&skip_status=sque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros 
```




### Resource : users
#### get /users/lookup
returns fully-hydrated user objects up to 100
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user to lookup |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user to lookup |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/lookup?screen_name=%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvina&user_id=ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20e&include_entities=ollicitudin%20et.%20Curabitur%20p 
```




#### get /users/show
returns a variety of info about specified user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user to be shown |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user to be shown |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/show?screen_name=obortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facili&user_id=nec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20&include_entities=tis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20pu 
```




#### get /users/search
simple relevance-based user search
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| q | query | string |  no |  |  |  |  |  |  | the search query to run against people search |
| page | query | string |  no |  |  |  |  |  |  | specifies the page of results to receive |
| count | query | string |  no |  |  |  |  |  |  | number of people to return per page |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/search?q=ros.%20Mauris%20sollicitudin%20varius%20purus%2C%20n&page=eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20e&count=%20fe&include_entities=nibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit. 
```




#### get /users/contributees
collection of users specified user can contribute to
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user that is contributed to |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user to that is contributed to |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to skip statuses |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/contributees?screen_name=a%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20no&user_id=gnissim%20&include_entities=%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C&skip_status=tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapie 
```




#### get /users/contributors
collection of users that can contribute to specified account
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user contributing |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user contributing |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to skip statuses |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/contributors?screen_name=ibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Se&user_id=d%20scele&include_entities=t%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolo&skip_status=pus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante 
```




#### post /users/report_spam
Returna users report spam
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| screen_name | query | string |  no |  |  |  |  |  |  | The ID or screen_name of the user you want to report as a spammer |
| user_id | query | string |  no |  |  |  |  |  |  | The ID of the user you want to report as a spammer |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/users/report_spam?screen_name=%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neq&user_id=massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20 
```




### Resource : geo
#### get /geo/id/{place_id}
Returns all the information about a know place
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| place_id | path | string |  no |  |  |  |  |  |  | A place in the world |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/id/%2C+imperdiet+varius+orci.+Donec+consectetur+sed+ante+sit+amet+sagittis.+In+non+lectus+eu+nunc+interdum+laoreet+a+ut+dui.+Sed+eu+nulla+malesuada%2C+eges 
```




#### get /geo/reverse_geoncode
Given a latitude and a longitude, searches for up to 20 places that can be used as a place_id when updatting a status
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| lat | query | string |  no |  |  |  |  |  |  | The latitude to search around |
| long | query | string |  no |  |  |  |  |  |  | The longtitude to search around |
| accuracy | query | string |  no |  |  |  |  |  |  | A hint on region in which to search |
| granularity | query | string |  no |  |  |  |  |  |  | This is the minimal granularity of place types to return |
| max_results | query | string |  no |  |  |  |  |  |  | A hint as to the number of results to return |
| callback | query | string |  no |  |  |  |  |  |  | If supplied, the responses will use the JSON format with a callback of the given name |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/reverse_geoncode?lat=%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc&long=dignissim%2C%20tincidunt%20j&accuracy=%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec&granularity=%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20alique&max_results=ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20&callback=aculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20e 
```




#### get /geo/search
Search for places that can be attached to a statuses/updates
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| lat | query | string |  no |  |  |  |  |  |  | The latitude to search around |
| long | query | string |  no |  |  |  |  |  |  | The longtitude to search around |
| query | query | string |  no |  |  |  |  |  |  | Free-form text to match against while executing a geo-based query |
| ip | query | string |  no |  |  |  |  |  |  | An Ip address |
| accuracy | query | string |  no |  |  |  |  |  |  | A hint on region in which to search |
| granularity | query | string |  no |  |  |  |  |  |  | This is the minimal granularity of place types to return |
| contained_within | query | string |  no |  |  |  |  |  |  | This is the place_id which you would like to restrict the search results to |
| attribute:street_address | query | string |  no |  |  |  |  |  |  | This parameter searches for places which have this givven street address |
| callback | query | string |  no |  |  |  |  |  |  | If supplied, the responses will use the JSON format with a callback of the given name |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/search?lat=sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Done&long=%20Vivamus%20id%20v&query=ficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque&ip=c%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20&accuracy=is%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincid&granularity=pien.%20Sed%20malesuada%2C%20velit%20eu%20&contained_within=est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dic&attribute%3Astreet_address=%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20veh&callback=%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20 
```




#### get /geo/similar_places
Locates places near the given coordinates which are similar in name
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| lat | query | string |  no |  |  |  |  |  |  | The latitude to search around |
| long | query | string |  no |  |  |  |  |  |  | The longtitude to search around |
| name | query | string |  no |  |  |  |  |  |  | The name a place is known as |
| contained_within | query | string |  no |  |  |  |  |  |  | This is the place_id which you would like to restrict the search results to |
| attribute:street_address | query | string |  no |  |  |  |  |  |  | This parameter searches for places which have this givven street address |
| callback | query | string |  no |  |  |  |  |  |  | If supplied, the responses will use the JSON format with a callback of the given name |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/similar_places?lat=.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit&long=ar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20C&name=eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20&contained_within=lisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed&attribute%3Astreet_address=ctetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicu&callback=%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempo 
```




#### get /geo/places
Create a new place object at the given latitude and logitude
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| lat | query | string |  no |  |  |  |  |  |  | The latitude to search around |
| long | query | string |  no |  |  |  |  |  |  | The longtitude to search around |
| name | query | string |  no |  |  |  |  |  |  | The name a place is known as |
| token | query | string |  no |  |  |  |  |  |  | The token found in the response from geo/similar_places |
| contained_within | query | string |  no |  |  |  |  |  |  | This is the place_id which you would like to restrict the search results to |
| attribute:street_address | query | string |  no |  |  |  |  |  |  | This parameter searches for places which have this givven street address |
| callback | query | string |  no |  |  |  |  |  |  | If supplied, the responses will use the JSON format with a callback of the given name |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/places?lat=issim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20I&long=it%20id%2C%20semper%20felis.%20Fu&name=fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibe&token=%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.&contained_within=incidunt%20pretium&attribute%3Astreet_address=ar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis&callback=%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20e 
```




### Resource : trends
#### get /trends/place
Returns the top 10 trending topics for a specific WOEID
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| id | query | string |  no |  |  |  |  |  |  | The yahoo where on earch id |
| exclude | query | string |  no |  |  |  |  |  |  | Setting this equal to hashtages will remove all hashtages from the trends list |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/trends/place?id=urus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20ac%20quam%20gravid&exclude=%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20n 
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
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| lat | query | string |  no |  |  |  |  |  |  | If provided with a long parameter the available trend locations wil be stored by distance |
| long | query | string |  no |  |  |  |  |  |  | If provided with a lat parameters the available trend locations will be sorted by distance |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/trends/closest?lat=s%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20e&long=ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pr 
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
| --- | --- | --- | --- | ----------------------- | -------------- | --- | --------- | --- | --- | ---------------------------------------------- |
| resources | query | array |  no |  |  |  | [#/paths//application/rate_limit_status/get/parameters/0](#testtoto) |  |  | A comma-separated list of resource families you want to know the current rate limit disposition for |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/application/rate_limit_status 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

