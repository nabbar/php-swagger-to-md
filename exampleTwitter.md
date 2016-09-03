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
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| count | query | string |  no |  |  |  |  |  |  | Specifies the number of tweets to try and retrieve |
| since_id | query | string |  no |  |  |  |  |  |  | Returns result with an ID greater than the specified ID |
| max_id | query | string |  no |  |  |  |  |  |  | Returns results with an ID less than or equal to the specified ID |
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object |
| contributor_details | query | string |  no |  |  |  |  |  |  | This parameter enhances the contributors element of the status response |
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/mentions_timeline?count=amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magn&since_id=ec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ul&max_id=nia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feu&trim_user=o%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20con&contributor_details=hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20f&include_entities=tie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectu 
```




#### get /statuses/user_timeline
Returns a collection of the most recent Tweets posted by the User
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| count | query | string |  no |  |  |  |  |  |  | Specifies the number of tweets to try and retrieve |
| since_id | query | string |  no |  |  |  |  |  |  | Returns result with an ID greater than the specified ID |
| max_id | query | string |  no |  |  |  |  |  |  | Returns results with an ID less than or equal to the specified ID |
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object |
| exclude_replies | query | boolean |  no |  |  |  |  |  |  | This paramters will prevent from appearing in the returned timeline |
| contributor_details | query | boolean |  no |  |  |  |  |  |  | This paramters enhances the contributors element of the status response to include the screen_name of the contributor |
| include_rts | query | boolean |  no |  |  |  |  |  |  | When set to false, the timeline will strip any native retweet |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/user_timeline?count=eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20in&since_id=%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sa&max_id=%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Ma&trim_user=vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectet&exclude_replies=1&contributor_details=1&include_rts=1 
```




#### get /statuses/home_timeline
Returns a collection of the most recent Tweets
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| since_id | query | string |  no |  |  |  |  |  |  | Returns result with an ID greater than the specified ID |
| max_id | query | string |  no |  |  |  |  |  |  | Returns results with an ID less than or equal to the specified ID |
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object |
| exclude_replies | query | boolean |  no |  |  |  |  |  |  | This paramters will prevent from appearing in the returned timeline |
| contributor_details | query | boolean |  no |  |  |  |  |  |  | This paramters enhances the contributors element of the status response to include the screen_name of the contributor |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/home_timeline?since_id=mod%20ullamcorper.%20Phasell&max_id=aucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C&trim_user=%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neq&exclude_replies=0&contributor_details=0 
```




#### post /statuses/retweets/{id}
Retweens a tweet
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| id | path | string |  no |  |  |  |  |  |  | The numerical ID of the desired status |
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/retweets/us%2C+finibus+erat.+Proin+id+scelerisque+ipsum.+Quisque+porta+mauris+nec+massa+egestas%2C+sed+mollis+e?trim_user=am%20ultrici 
```




#### get /statuses/show/{id}
Retruns a single Tweet
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| id | path | string |  no |  |  |  |  |  |  | The numerical ID of the desired status |
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object |
| include_my_retweet | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, any Tweets returned that have been retweeted by the authenticating |
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/show/or+sed%2C+dapibus+vel+elit.+Sed+efficitur%2C+mi+sit+amet+fermentum+ultricies%2C+felis+felis+aliquam+enim%2C+id+feugiat+magna+elit+in+sapien.+Sed+malesuada%2C+velit+eu+dapibus+vehic?trim_user=e%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperd&include_my_retweet=is%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mau&include_entities=licitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20ac%20quam%20gravida%20p 
```




#### post /statuses/destroy/{id}
Destroys the status specified by the required ID parameter
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| id | path | string |  no |  |  |  |  |  |  | The numerical ID of the desired status |
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/destroy/+convallis+eu+ligula+non+conseq?trim_user=ices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollic 
```




#### post /statuses/update
Updates the authenticating user's status
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| status | query | string |  no |  |  |  |  |  |  | The text of your status update |
| in_reply_to_status_id | query | string |  no |  |  |  |  |  |  | The ID of an existing status |
| lat | query | string |  no |  |  |  |  |  |  | The latitude of the location |
| long | query | string |  no |  |  |  |  |  |  | The longitude of the location |
| place_id | query | string |  no |  |  |  |  |  |  | A place in the world |
| display_coordinates | query | string |  no |  |  |  |  |  |  | Whether or not to put a pin on the exact coordinates a tweet |
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/update?status=dipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facil&in_reply_to_status_id=ed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20qua&lat=ros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Qu&long=ndum%20tortor%20ac%2C&place_id=l%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci&display_coordinates=smod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20b&trim_user=a%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem 
```




#### get /statuses/oembed
Returns information allowing the creation of an embedded representation
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
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
HTTP 1.1 get http://api.twitter.com/1.1/statuses/oembed?id=isque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20a&url=n%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20M&maxwidth=%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molesti&hide_media=onsectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Su&hide_thread=tur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20&align=eo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20mag&related=Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20&lang=elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpa 
```




### Resource : lists
#### get /lists/list
Return all lists the authenticating or specified user subscribes to, including their own.
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user for whom to return results for |
| user_id | query | string |  no |  |  |  |  |  |  | The ID of the user for whom to return results for |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/list?screen_name=ssa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C&user_id=s%2C%20eu%20bibendum%20orci.%20Sed 
```




#### get /lists/statuses
Returns a timeline of tweets authored by memebers of the specified list
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/statuses?list_id=et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Null&slug=s%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicit&owner_screen_name=lisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20&owner_id=nt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius&since_id=t%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum&max_id=diet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Viv&count=%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales&include_entities=b&include_rts=rit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fri 
```




#### get /lists/members/destroy
Returns the list of memebers destroy
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list |
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list by its slug instrad of its numerical id |
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug |
| user_id | query | string |  no |  |  |  |  |  |  | The id of the user for whom to remove from the list |
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user for whom to remove from the list |
| owner_id | query | string |  no |  |  |  |  |  |  | The is of the user who wons the list being requested by a slug |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/members/destroy?list_id=pis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipi&slug=pendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ul&owner_screen_name=ortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curab&user_id=tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero&screen_name=posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20D&owner_id=apibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20da 
```




#### get /lists/memberships
Returns the lists of the specified user has been added to
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| user_id | query | string |  no |  |  |  |  |  |  | The id of the user for whom to return results for |
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user for whom to return results for |
| cursor | query | string |  no |  |  |  |  |  |  | Breaks the results into pages |
| filter_to_owned_lists | query | string |  no |  |  |  |  |  |  | When set to true, t or 1, will return just lists the authenticating user owns |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/memberships?user_id=dales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20v&screen_name=elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctu&cursor=te%20o&filter_to_owned_lists=%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius 
```




#### get /lists/subscribers
Returns the subscribers of the specified list
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list |
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list by its slug insted of its numerical id |
| owner_screen_name | query | string |  no |  |  |  |  |  |  | the screen name of the user who owns the list being requested by a slug |
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug |
| cursor | query | string |  no |  |  |  |  |  |  | Breaks the results into pages |
| include_entities | query | string |  no |  |  |  |  |  |  | Wehn set to either true, t or 1 |
| skip_status | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1 |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers?list_id=c%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et&slug=istique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20s&owner_screen_name=m%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20&owner_id=rna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor&cursor=empus%20ac%20ipsum.%20Ut%20molestie%20alique&include_entities=%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20&skip_status=tudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20i 
```




#### post /lists/subscribers/create
Subscribes the authenticated user to the specified list
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list |
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug |
| owner_screen_name | query | string |  no |  |  |  |  |  |  | the screen name of the user who owns the list being requested by a slug |
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/subscribers/create?list_id=quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctu&slug=ibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20&owner_screen_name=.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim&owner_id=metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam 
```




#### get /lists/subscribers/show
Check if the specified user is a subscriber of the specified list
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers/show?list_id=%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida&slug=Lorem%20ip&owner_screen_name=%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20&user_id=.%20Nullam%20vel%20metus%20ac%20quam%20gravida%20pellentesque.%20Nullam%20ultricies%20t&screen_name=ipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoree&owner_id=lis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20ali&include_entities=ntum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20laci&skip_status=que%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultric 
```




#### get /lists/subscribers/destroy
Returns list of subscribers destroy
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list |
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug |
| owner_screen_name | query | string |  no |  |  |  |  |  |  | the screen name of the user who owns the list being requested by a slug |
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers/destroy?list_id=%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20a&slug=Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque&owner_screen_name=sum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincid&owner_id=imus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vul 
```




#### get /lists/members/create_all
Returns lists of members create_all
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list |
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug |
| owner_screen_name | query | string |  no |  |  |  |  |  |  | the screen name of the user who owns the list being requested by a slug |
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug |
| user_id | query | string |  no |  |  |  |  |  |  | The id of the user for whom to remove from the list |
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user for whom to remove from the list |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/members/create_all?list_id=ultrices%20nec.%20Vestibulum%20elementum%20&slug=s%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20e&owner_screen_name=reet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20er&owner_id=%20amet%20dui%20sit%20amet&user_id=uere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20l&screen_name=t%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdi 
```




#### post /lists/destroy
Returns list of destroy
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list |
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug |
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug |
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/destroy?list_id=%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper&slug=uet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20&owner_screen_name=porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu&owner_id=lus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20ali 
```




#### post /lists/update
Returns lists of updates
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list |
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug |
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug |
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug |
| name | query | string |  no |  |  |  |  |  |  | The name for the list |
| mode | query | string |  no |  |  |  |  |  |  | Whether your list is public or private |
| description | query | string |  no |  |  |  |  |  |  | The description to give the list |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/update?list_id=%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20le&slug=eque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Don&owner_screen_name=ngue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20tu&owner_id=%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20cons&name=t%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20n&mode=%20amet%20fermentum%20ultricies%2C%20felis%20fel&description=%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20 
```




#### post /lists/create
Returns list of create
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| name | query | string |  no |  |  |  |  |  |  | The name for the list |
| mode | query | string |  no |  |  |  |  |  |  | Whether your list is public or private |
| description | query | string |  no |  |  |  |  |  |  | The description to give the list |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/create?name=ursus%20neque%20erat%20&mode=u%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at&description=ommodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20 
```




#### get /lists/show
Returns list of show
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list |
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug |
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug |
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/show?list_id=ismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu&slug=ec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulv&owner_screen_name=icitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit&owner_id=feugiat%20m 
```




#### get /lists/subscriptions
Returns list of subscriptions
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user |
| user_id | query | string |  no |  |  |  |  |  |  | The id of the user for whom to return results for |
| count | query | string |  no |  |  |  |  |  |  | The amount of results to return per page |
| cursor | query | string |  no |  |  |  |  |  |  | Breaks the results into pages |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscriptions?screen_name=%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20la&user_id=cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20i&count=etium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20c&cursor=imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20l 
```




### Resource : list
#### get /list/members/show
Check if the specified user is a member of the specified list
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
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
HTTP 1.1 get http://api.twitter.com/1.1/list/members/show?list_id=%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20&slug=o%20ex%2C%20pulvinar%20vel%20metu&user_id=%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20p&screen_name=t%2C%20consecte&owner_screen_name=fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibend&owner_id=nte%20sit%20am&include_entities=mcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20di&skip_status=ulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20a 
```




#### get /list/members
Returns the members of the specified list
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list |
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug |
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug |
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug |
| include_entities | query | string |  no |  |  |  |  |  |  | Wehn set to either true, t or 1 |
| skip_status | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1 |
| cursor | query | string |  no |  |  |  |  |  |  | Breaks the results into pages |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members?list_id=ium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20m&slug=nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20&owner_screen_name=%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse&owner_id=estie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mo&include_entities=gittis%20at.%20Nullam%20vel%20metus%20ac%20quam%20gravida%20pellentesque.%20Nu&skip_status=t%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec&cursor=ursus%20neque%20erat 
```




#### post /list/members/create
Returns list of members create
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list |
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug |
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user for whom to remove from the list |
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug |
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/list/members/create?list_id=perdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales&slug=rnare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20fini&screen_name=%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim&owner_screen_name=elit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus&owner_id=ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20ni 
```




#### get /list/members/destroy_all
Returns lists of destroy all
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list |
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug |
| user_id | query | string |  no |  |  |  |  |  |  | The id of the user for whom to remove from the list |
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user for whom to remove from the list |
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug |
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members/destroy_all?list_id=am%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facil&slug=%20tortor%20blandit%2C%20bibendum%20t&user_id=stie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20o&screen_name=.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20ne&owner_screen_name=tor.%20Praesent%20int&owner_id=sse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20var 
```




### Resource : direct_messages
#### get /direct_messages/sent
return 20 most recent direct messages sent
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| since_id | query | string |  no |  |  |  |  |  |  |  |
| max_id | query | string |  no |  |  |  |  |  |  |  |
| count | query | string |  no |  |  |  |  |  |  |  |
| page | query | string |  no |  |  |  |  |  |  |  |
| include_entities | query | string |  no |  |  |  |  |  |  |  |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages/sent?since_id=ctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20n&max_id=%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ull&count=ibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissi&page=aculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20o&include_entities=trices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20 
```




#### get /direct_messages/show
returns a single direct message specified by an id
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| id | query | string |  no |  |  |  |  |  |  | ID of direct message |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages/show?id=um%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Cur 
```




#### get /direct_messages
return 20 most recent direct messages sent to user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| since_id | query | string |  no |  |  |  |  |  |  | return results with ID greater than specified |
| max_id | query | string |  no |  |  |  |  |  |  | returns results with an ID less than/equal to specified ID |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include status |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages?since_id=pendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulu&max_id=Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20q&include_entities=icies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pu&skip_status=c%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20conseq 
```




#### post /direct_messages/destroy
destroys direct messages specified in required ID
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| id | query | string |  no |  |  |  |  |  |  | ID of direct message to delete |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/direct_messages/destroy?id=ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20fini&include_entities=et%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut 
```




#### post /direct_messages/new
sends a new direct message to specified user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| user_id | query | string |  no |  |  |  |  |  |  | description |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user receiving message |
| text | query | string |  no |  |  |  |  |  |  | text of your direct message |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/direct_messages/new?user_id=%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20&screen_name=ula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum&text=psum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neq 
```




### Resource : search
#### get /search/tweets
returns collection of relevant Tweets matching query
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
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
HTTP 1.1 get http://api.twitter.com/1.1/search/tweets?q=%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.&geocode=rem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20&lang=%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phase&locale=ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20&result_type=ltricies%20nibh%20eu%20leo%20cons&count=%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauri&until=e%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20curs&since_id=sectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20&max_id=dum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tort&include_entities=%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consec&callback=ssa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20n 
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
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| id | path | string |  no |  |  |  |  |  |  | The id of the saved search |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/saved_searches/show/nte+sit+amet+sagittis.+In 
```




#### post /saved_searches/create
Create a new saved search for the authenticated user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| query | query | string |  no |  |  |  |  |  |  | The query of the search the user would like to save |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/saved_searches/create?query=ibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet. 
```




#### post /saved_searches/destroy/{id}
Destroy a saved search for the authenticating user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| id | path | string |  no |  |  |  |  |  |  | The id of the saved search |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/saved_searches/destroy/it+amet%2C+consectetur+adipiscing+elit.+Integer+ipsum+sapien%2C+bibendum+at+placerat+sit+amet%2C+volutpat+sed+lacus.+Nulla+justo+arcu%2C+sodales+ac+commodo+quis%2C+laoreet+a+ipsum.+Duis+sem+elit%2C+posuere+eu+facilisis+nec%2C+tempus+ac+ipsum.+Ut+molestie+aliquet+est 
```




### Resource : friends
#### get /friends/ids
returns a cursored collection of user IDs followed by user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user for whom to return results for |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user for whom to return results for |
| cursor | query | string |  no |  |  |  |  |  |  | causes list of connections to be broken in pages |
| stringify_ids | query | string |  no |  |  |  |  |  |  | IDs converted to strings |
| count | query | string |  no |  |  |  |  |  |  | number of IDs to attempt retrieval of |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friends/ids?user_id=tie%20pretium%20tor&screen_name=met%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20v&cursor=s%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20eli&stringify_ids=ales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismo&count=gestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20 
```




### Resource : followers
#### get /followers/ids
returns a cursored collection of user IDs following the user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user for whom to return results for |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user for whom to return results for |
| cursor | query | string |  no |  |  |  |  |  |  | causes list of connections to be broken in pages |
| stringify_ids | query | string |  no |  |  |  |  |  |  | IDs converted to strings |
| count | query | string |  no |  |  |  |  |  |  | number of IDs to attempt retrieval of |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/followers/ids?user_id=mod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arc&screen_name=onec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis&cursor=ti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20&stringify_ids=rius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.&count=ed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus 
```




### Resource : friendships
#### get /friendships/incoming
returns collection of IDs of users with pending follow request
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| cursor | query | string |  no |  |  |  |  |  |  | causes list of connections to be broken in pages |
| stringify_ids | query | string |  no |  |  |  |  |  |  | IDs converted to strings |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/incoming?cursor=%20ac%20quam%20gravida%20pellentesque.%20Nulla&stringify_ids=%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20 
```




#### get /friendships/outgoing
returns collection of IDs of users with pending follow request from the user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| cursor | query | string |  no |  |  |  |  |  |  | causes list of connections to be broken in pages |
| stringify_ids | query | string |  no |  |  |  |  |  |  | IDs converted to strings |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/outgoing?cursor=%20eges&stringify_ids=ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C 
```




#### post /friendships/create
allows users to follow user sepcified by ID
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user for whom to befriend |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user for whom to befriend |
| follow | query | string |  no |  |  |  |  |  |  | enable notifications for target user |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/create?screen_name=is%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit&user_id=ed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20m&follow=ncidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20n 
```




#### post /friendships/destroy
allows user to unfollow user psecified by ID
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user for whom to befriend |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user for whom to befriend |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/destroy?screen_name=aliquam.%20Nunc%20se&user_id=velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20so 
```




#### post /friendships/update
Allows one to enable or disable settings for specified user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user for whom to befriend |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user for whom to befriend |
| device | query | string |  no |  |  |  |  |  |  | enable/disable device notifications for user |
| retweets | query | string |  no |  |  |  |  |  |  | enable/disable retweets from target user |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/update?screen_name=ada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fr&user_id=%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20&device=%20molestie%20aliquet%20est%2C%20posuere%20tinc&retweets=%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20 
```




#### get /friendships/show
returns detailed info about relationship between two users
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| source_id | query | string |  no |  |  |  |  |  |  | user id of subject user |
| source_screen_name | query | string |  no |  |  |  |  |  |  | screen_name of subject user |
| target_id | query | string |  no |  |  |  |  |  |  | user id of target user |
| target_screen_name | query | string |  no |  |  |  |  |  |  | screen name of target user |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/show?source_id=felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20t&source_screen_name=faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orc&target_id=et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20d&target_screen_name=s%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectet 
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
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| trend_location_woeid | query | string |  no |  |  |  |  |  |  | the Yahoo! Where On Earth ID to user as defaul tend location |
| sleep_time_enabled | query | string |  no |  |  |  |  |  |  | enables/disables sleep time, silencing notifications |
| start_sleep_time | query | string |  no |  |  |  |  |  |  | the hour that sleep time should begin if enabled |
| end_sleep_time | query | string |  no |  |  |  |  |  |  | the hour that sleep time should end if enabled |
| time_zone | query | string |  no |  |  |  |  |  |  | timezone dates and times should be displayed in |
| lang | query | string |  no |  |  |  |  |  |  | language which Twitter should render in for the user |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/settings?trend_location_woeid=mentum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20&sleep_time_enabled=in%20pretiu&start_sleep_time=sque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20just&end_sleep_time=erdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20v&time_zone=%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condime&lang=nim%20nec%20tellus 
```




#### post /account/update_delivery_device
sets which device Twitter delivers updates to for user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| device | query | string |  no |  |  |  |  |  |  | must be one of sms, none |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_delivery_device?device=aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20&include_entities=ignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20 
```




#### post /account/update_profile
sets values that users ar eable to set under Account tab
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| name | query | string |  no |  |  |  |  |  |  | full name of profile |
| url | query | string |  no |  |  |  |  |  |  | url associated with profile |
| location | query | string |  no |  |  |  |  |  |  | city or country describing where user of account is. |
| description | query | string |  no |  |  |  |  |  |  | a description of user owning account |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include statuses in response |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile?name=.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20er&url=etium%20sodales.%20Etiam%20dignissim%20r&location=urus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tinc&description=%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollic&include_entities=%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20c&skip_status=nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20m 
```




#### post /account/update_profile_background_image
updates user's profile background image
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| tile | query | string |  no |  |  |  |  |  |  | whether or not to tile background image |
| use | query | string |  no |  |  |  |  |  |  | display background image or not |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include status in returned user objects |
| file | formData | file |  no |  |  |  |  |  |  | image to replace background image of profile |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_background_image?tile=at%20hendrerit%20enim.%20Sed%20le&use=s%2C%20l&include_entities=ommodo%20quis%2C%20la&skip_status=tricies%20turpis%20nec%20dignissim%20aliquam.%20Nunc%20sed%20enim%20ne 
Content-Type: multipart/form-data, boundary=57cadc0c983d2
Content-Length: 761
--57cadc0c983d2
content-disposition: form-data; name="file"

--data-binary 
OGFmNjhmYjQ4NzQ0MTc0MGRlYzBhMWJlZTA5MjE3ZDZjYzdiN2YzOWFiZTIxNTRmOTgyNmUwOTg2MmRiN2FjZmVjNzJjNmFmOWNmMWRkMmYzZDZiMWE3MDMxODc0MjUwYTdkNWFmM2JhMjk5MzE3YWFjMDUxZGRkYjcwNzM1ODcyMzk3ZDBlNDYwMGFkYmJhOTU5ODc4YjQwZWZlNzIzMzZlZGQ4NDg5YWQ0NWExNDcyNjU0ODhhY2MxYTI0OGFkOTg1YjJlOGE0N2VkNDgxMjU3MTMxM2MwMDNmNzAwODA5OTBiMDgxODcxZGQ4MTJmOGJjNmZiZjRmYTc5MTE2NWFlOTA0NWIyNDQyYTBiMGE0MWIwODI4OGQ5ZGE1MGJlNGYwZWU1Y2ViODBiNWM2ZjQ5NDQ4M2NhNWVkNzQ5NjA5NzUzYWJlZmQ1NDBkYzRhNmRmMDcxOTFmYTMwNjk1MDE3NWMyYTgwNjRmODk3MTRmYzkyZDVlZTZmMDFlZWNmNzhjMjRiNjY2MDZlOTI1ZTM1NzNjYTllZTQ3Nzk3NTBjMjk4ZTMyMDdhMzhiNGJhYjJhNGVmY2Y4MjIyY2FkYzdmZmRiMmU5YzdiNjNkYzhjOGU5NDE3NWQ1MzljNmRkZGNiOGE1NGQ2NGY1ZDk2YmQyYTc0MjA5YjBiZjE3Zjk=
```




#### post /account/update_profile_colors
sets one or more hex values that controls color scheme
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| profile_background_color | query | string |  no |  |  |  |  |  |  | profile background color |
| profile_link_color | query | string |  no |  |  |  |  |  |  | profile link color |
| profile_sidebar_border_color | query | string |  no |  |  |  |  |  |  | profile sidebar's border color |
| profile_sidebar_fill_color | query | string |  no |  |  |  |  |  |  | profile's sidebar background color |
| profile_text_color | query | string |  no |  |  |  |  |  |  | profile text color |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include statuses |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_colors?profile_background_color=eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20digni&profile_link_color=%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20&profile_sidebar_border_color=a%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20t&profile_sidebar_fill_color=ue%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luct&profile_text_color=ultric&include_entities=s%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20&skip_status=rius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20orna 
```




#### post /account/update_profile_image
updates user's profile image
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include statuses |
| image | formData | file |  no |  |  |  |  |  |  | image to be set as profile image |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_image?skip_status=%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20e 
Content-Type: multipart/form-data, boundary=57cadc0c99687
Content-Length: 762
--57cadc0c99687
content-disposition: form-data; name="image"

--data-binary 
NzQxZDllOTg4OTdjZWY0ODc2NWFiMTAxOTA4ODVkMzkxY2FkMzhmMTMxY2FlYTRmNTRmODJmMWU1ZTliNjE2ZTA4MjNhMmYxOWNkODM2NjM0NTNmNGI5MTExZTI2ZjJhM2NhN2JjYjBjNTA3Yjg0YzUyMmY2NGFlYmFiYzU1NjA3OGUzZTg0YWJiZjU5NDg3ZGY3OWY4ODE3ZDczZmNmMTJkZDFmNjg2NWYxN2U3YmUyMWU1NzBlODJjZWFkMWVhNGNlNDNjYmVjOTA4ZmZhZTEzYjRhZTY0MDlmN2Q3Zjg4NWFlYjgwN2Q3ZDUxN2I2NTIyZjQ2ZmFiODJiOTJjNWM4MmFmOGM1NWM3YTUzNTZhMWRlNWVjOTk0NjA1ZWQwODhiNWU3YTU2NDc1YTI1ZThjYmJiODRiNGNhMWZhNDU1MjE0MGYwZjY5ODQyNjRjOGYzMjE2MzFkYThhMjAxZGFiNjRlNDNlNmZlMGQzNmRkYjBjNWU5YmNhMTg1ZDhiYTk3N2YzZGI3ODc2OWY1MjY5NDFmN2YwMzk2YzRiMWFmNmZiMmMwNmU1NTMyN2I4ZWMzNDQ5YTZkZGQyMGMwYzIxNTJhMGM0ZGY2NzE3MTJjMTJmYjViNTBlMWU1ZmZjN2M1OTM3NWU5ZTgwODEyZjgwMDMwZmVhOTNkZmVjZjk=
```




### Resource : blocks
#### get /blocks/list
disallows retweets and device notifications from a user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include statuses in response |
| cursor | query | string |  no |  |  |  |  |  |  | breaks block of user to be broken up into pages |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/blocks/list?include_entities=r%20ac%2C%20congue%20eros.%20&skip_status=um%20elementum%20felis%20sit%20amet&cursor=s%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20qua 
```




#### get /blocks/ids
returns array of numeric user ids of blocked users
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| stringify_ids | query | string |  no |  |  |  |  |  |  | returns array of numeric IDs as string IDs |
| cursor | query | string |  no |  |  |  |  |  |  | breaks up block of user IDs into pages |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/blocks/ids?stringify_ids=ros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris&cursor=ulla%20malesuada%2C%20egestas%20veli 
```




#### post /blocks/create
blocks the specified user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user to be blocked |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user to be blocked |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to skip statuses |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/blocks/create?screen_name=ulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Pro&user_id=arius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fri&include_entities=iquet%20est%2C%20posuere%20tincidunt%20elit.%20Etia&skip_status=ortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C 
```




#### post /blocks/destroy
un-blocks the specified user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user to be un-blocked |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user to be un-blocked |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to skip statuses |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/blocks/destroy?screen_name=c%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fus&user_id=it%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugia&include_entities=st%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20s&skip_status=uam.%20Pellentesque%20vulputate%20sapien%20at%20 
```




### Resource : users
#### get /users/lookup
returns fully-hydrated user objects up to 100
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user to lookup |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user to lookup |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/lookup?screen_name=ingilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendis&user_id=Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20&include_entities=tique%20 
```




#### get /users/show
returns a variety of info about specified user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user to be shown |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user to be shown |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/show?screen_name=ula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20&user_id=.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20or&include_entities=d%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicul 
```




#### get /users/search
simple relevance-based user search
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| q | query | string |  no |  |  |  |  |  |  | the search query to run against people search |
| page | query | string |  no |  |  |  |  |  |  | specifies the page of results to receive |
| count | query | string |  no |  |  |  |  |  |  | number of people to return per page |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/search?q=lamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20vari&page=que%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20a&count=%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20&include_entities=em%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20 
```




#### get /users/contributees
collection of users specified user can contribute to
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user that is contributed to |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user to that is contributed to |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to skip statuses |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/contributees?screen_name=%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20n&user_id=em%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20ac%20quam%20gravida%20pellente&include_entities=%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20da&skip_status=eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20int 
```




#### get /users/contributors
collection of users that can contribute to specified account
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user contributing |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user contributing |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to skip statuses |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/contributors?screen_name=.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet&user_id=tus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sol&include_entities=entesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20S&skip_status=am%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit 
```




#### post /users/report_spam
Returna users report spam
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| screen_name | query | string |  no |  |  |  |  |  |  | The ID or screen_name of the user you want to report as a spammer |
| user_id | query | string |  no |  |  |  |  |  |  | The ID of the user you want to report as a spammer |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/users/report_spam?screen_name=sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vesti&user_id=finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendi 
```




### Resource : geo
#### get /geo/id/{place_id}
Returns all the information about a know place
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| place_id | path | string |  no |  |  |  |  |  |  | A place in the world |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/id/+urna+vel+auctor+fringilla.+Mauris+e 
```




#### get /geo/reverse_geoncode
Given a latitude and a longitude, searches for up to 20 places that can be used as a place_id when updatting a status
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| lat | query | string |  no |  |  |  |  |  |  | The latitude to search around |
| long | query | string |  no |  |  |  |  |  |  | The longtitude to search around |
| accuracy | query | string |  no |  |  |  |  |  |  | A hint on region in which to search |
| granularity | query | string |  no |  |  |  |  |  |  | This is the minimal granularity of place types to return |
| max_results | query | string |  no |  |  |  |  |  |  | A hint as to the number of results to return |
| callback | query | string |  no |  |  |  |  |  |  | If supplied, the responses will use the JSON format with a callback of the given name |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/reverse_geoncode?lat=elle&long=consequat%20&accuracy=bus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fr&granularity=metus%20ac%20quam%20gravida%20pellentesque.%20Nullam%20ultricies%20turpis%20nec%20d&max_results=ti&callback=ondimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20ac%20quam%20gravida%20pellentesque.%20Nullam%20ultricies%20tu 
```




#### get /geo/search
Search for places that can be attached to a statuses/updates
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
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
HTTP 1.1 get http://api.twitter.com/1.1/geo/search?lat=%20malesuada%2C%20velit%20eu%20dapibu&long=tortor%20blandit%2C%20bibendum%20torto&query=%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspe&ip=%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitud&accuracy=ibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus&granularity=ibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pel&contained_within=cies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20moles&attribute%3Astreet_address=justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis&callback=%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20t 
```




#### get /geo/similar_places
Locates places near the given coordinates which are similar in name
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| lat | query | string |  no |  |  |  |  |  |  | The latitude to search around |
| long | query | string |  no |  |  |  |  |  |  | The longtitude to search around |
| name | query | string |  no |  |  |  |  |  |  | The name a place is known as |
| contained_within | query | string |  no |  |  |  |  |  |  | This is the place_id which you would like to restrict the search results to |
| attribute:street_address | query | string |  no |  |  |  |  |  |  | This parameter searches for places which have this givven street address |
| callback | query | string |  no |  |  |  |  |  |  | If supplied, the responses will use the JSON format with a callback of the given name |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/similar_places?lat=t%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nul&long=Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20M&name=ultricies%2C%20felis%20felis%20aliqu&contained_within=n%20felis%20scelerisque%20al&attribute%3Astreet_address=us%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pu&callback=et%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molesti 
```




#### get /geo/places
Create a new place object at the given latitude and logitude
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| lat | query | string |  no |  |  |  |  |  |  | The latitude to search around |
| long | query | string |  no |  |  |  |  |  |  | The longtitude to search around |
| name | query | string |  no |  |  |  |  |  |  | The name a place is known as |
| token | query | string |  no |  |  |  |  |  |  | The token found in the response from geo/similar_places |
| contained_within | query | string |  no |  |  |  |  |  |  | This is the place_id which you would like to restrict the search results to |
| attribute:street_address | query | string |  no |  |  |  |  |  |  | This parameter searches for places which have this givven street address |
| callback | query | string |  no |  |  |  |  |  |  | If supplied, the responses will use the JSON format with a callback of the given name |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/places?lat=%20tellus.%20Morbi%20cons&long=aximus%2C%20finibus%20erat.%20&name=arius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20ac%20quam%20gravida%20pellentesq&token=%20posuere%20eu%20fa&contained_within=llus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20v&attribute%3Astreet_address=u%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec&callback=tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Sus 
```




### Resource : trends
#### get /trends/place
Returns the top 10 trending topics for a specific WOEID
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| id | query | string |  no |  |  |  |  |  |  | The yahoo where on earch id |
| exclude | query | string |  no |  |  |  |  |  |  | Setting this equal to hashtages will remove all hashtages from the trends list |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/trends/place?id=.%20Donec%20quis%20facilisis%20arcu%2C%20ve&exclude=c%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20 
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
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| lat | query | string |  no |  |  |  |  |  |  | If provided with a long parameter the available trend locations wil be stored by distance |
| long | query | string |  no |  |  |  |  |  |  | If provided with a lat parameters the available trend locations will be sorted by distance |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/trends/closest?lat=t%2C%20tristique%20ut%20qu&long=nibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fr 
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
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
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

