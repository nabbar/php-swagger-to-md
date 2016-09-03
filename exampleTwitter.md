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
| count | query | string |  no |  |  |  |  |  |  | Specifies the number of tweets to try and retrieve |
| since_id | query | string |  no |  |  |  |  |  |  | Returns result with an ID greater than the specified ID |
| max_id | query | string |  no |  |  |  |  |  |  | Returns results with an ID less than or equal to the specified ID |
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object |
| contributor_details | query | string |  no |  |  |  |  |  |  | This parameter enhances the contributors element of the status response |
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/mentions_timeline?count=%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula&since_id=ttis%20at.%20Nullam%20vel%20metus%20ac%20quam%20gravida%20&max_id=tetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20vi&trim_user=a%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20pu&contributor_details=scipit%20est.%20Etiam%20varius%20lobortis%20portti&include_entities=m.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etia 
```




#### get /statuses/user_timeline
Returns a collection of the most recent Tweets posted by the User
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| count | query | string |  no |  |  |  |  |  |  | Specifies the number of tweets to try and retrieve |
| since_id | query | string |  no |  |  |  |  |  |  | Returns result with an ID greater than the specified ID |
| max_id | query | string |  no |  |  |  |  |  |  | Returns results with an ID less than or equal to the specified ID |
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object |
| exclude_replies | query | boolean |  no |  |  |  |  |  |  | This paramters will prevent from appearing in the returned timeline |
| contributor_details | query | boolean |  no |  |  |  |  |  |  | This paramters enhances the contributors element of the status response to include the screen_name of the contributor |
| include_rts | query | boolean |  no |  |  |  |  |  |  | When set to false, the timeline will strip any native retweet |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/user_timeline?count=unc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20ve&since_id=ue%20quis%20nec%20tellus.%20Morbi&max_id=rices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultric&trim_user=ehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20d&exclude_replies=1&contributor_details=0&include_rts=0 
```




#### get /statuses/home_timeline
Returns a collection of the most recent Tweets
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| since_id | query | string |  no |  |  |  |  |  |  | Returns result with an ID greater than the specified ID |
| max_id | query | string |  no |  |  |  |  |  |  | Returns results with an ID less than or equal to the specified ID |
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object |
| exclude_replies | query | boolean |  no |  |  |  |  |  |  | This paramters will prevent from appearing in the returned timeline |
| contributor_details | query | boolean |  no |  |  |  |  |  |  | This paramters enhances the contributors element of the status response to include the screen_name of the contributor |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/home_timeline?since_id=r.%20Fusce%20ne&max_id=u%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristiqu&trim_user=um%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20b&exclude_replies=0&contributor_details=0 
```




#### post /statuses/retweets/{id}
Retweens a tweet
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| id | path | string |  no |  |  |  |  |  |  | The numerical ID of the desired status |
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/retweets/malesuada%2C+egestas+velit+id%2C+semper+felis.+Fusce+ac+dui+nisl.+Donec+ultricies+nibh+eu+leo+consectetur+congue+quis+nec+tellus.+Morbi+consequat+mi+id+eros+viverra+ullamcorper.?trim_user=putate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20 
```




#### get /statuses/show/{id}
Retruns a single Tweet
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| id | path | string |  no |  |  |  |  |  |  | The numerical ID of the desired status |
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object |
| include_my_retweet | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, any Tweets returned that have been retweeted by the authenticating |
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/show/+metus+et%2C+molestie+pretium+tortor.+Praesent+interdum+fringilla+orci%2C+gravida+ornare+nibh+sollicitudin+et.+Curabitur+pulvinar+metus+massa%2C+malesuada+facilisis+sapien+finibus+at.+Nullam+finibus+urna+vel+auctor+fring?trim_user=bendum%20tortor%20ac%2C%20congue%20er&include_my_retweet=lum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur&include_entities=llamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20 
```




#### post /statuses/destroy/{id}
Destroys the status specified by the required ID parameter
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| id | path | string |  no |  |  |  |  |  |  | The numerical ID of the desired status |
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/destroy/tum+tel?trim_user=ulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20n 
```




#### post /statuses/update
Updates the authenticating user's status
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| status | query | string |  no |  |  |  |  |  |  | The text of your status update |
| in_reply_to_status_id | query | string |  no |  |  |  |  |  |  | The ID of an existing status |
| lat | query | string |  no |  |  |  |  |  |  | The latitude of the location |
| long | query | string |  no |  |  |  |  |  |  | The longitude of the location |
| place_id | query | string |  no |  |  |  |  |  |  | A place in the world |
| display_coordinates | query | string |  no |  |  |  |  |  |  | Whether or not to put a pin on the exact coordinates a tweet |
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/update?status=psum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacu&in_reply_to_status_id=us%20et%2C%20molestie%20pretium%20tortor.%20&lat=im%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20&long=inar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna&place_id=i%20tincidunt%20pretium%20sodales&display_coordinates=icitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20ali&trim_user=.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula 
```




#### get /statuses/oembed
Returns information allowing the creation of an embedded representation
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
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
HTTP 1.1 get http://api.twitter.com/1.1/statuses/oembed?id=.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20&url=bus&maxwidth=elis%20felis%20al&hide_media=nte%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mau&hide_thread=etur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20&align=ipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere&related=dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tell&lang=orta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20 
```




### Resource : lists
#### get /lists/list
Return all lists the authenticating or specified user subscribes to, including their own.
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user for whom to return results for |
| user_id | query | string |  no |  |  |  |  |  |  | The ID of the user for whom to return results for |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/list?screen_name=eo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Qui&user_id=vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C 
```




#### get /lists/statuses
Returns a timeline of tweets authored by memebers of the specified list
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/statuses?list_id=ndum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20conva&slug=or.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20l&owner_screen_name=rcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tinci&owner_id=%20sodales%20&since_id=uctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bib&max_id=%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20fau&count=s%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20I&include_entities=s%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Do&include_rts=os%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20S 
```




#### get /lists/members/destroy
Returns the list of memebers destroy
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list |
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list by its slug instrad of its numerical id |
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug |
| user_id | query | string |  no |  |  |  |  |  |  | The id of the user for whom to remove from the list |
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user for whom to remove from the list |
| owner_id | query | string |  no |  |  |  |  |  |  | The is of the user who wons the list being requested by a slug |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/members/destroy?list_id=lentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam&slug=incidunt%20preti&owner_screen_name=m%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20qui&user_id=uada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20eni&screen_name=inibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit&owner_id=%20elit%20libero%2C%20faucibus%20l 
```




#### get /lists/memberships
Returns the lists of the specified user has been added to
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user_id | query | string |  no |  |  |  |  |  |  | The id of the user for whom to return results for |
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user for whom to return results for |
| cursor | query | string |  no |  |  |  |  |  |  | Breaks the results into pages |
| filter_to_owned_lists | query | string |  no |  |  |  |  |  |  | When set to true, t or 1, will return just lists the authenticating user owns |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/memberships?user_id=a%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20m&screen_name=bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20i&cursor=bus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20ac%20qu&filter_to_owned_lists=tus%20et%2C%20molestie%20pretium%20tort 
```




#### get /lists/subscribers
Returns the subscribers of the specified list
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list |
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list by its slug insted of its numerical id |
| owner_screen_name | query | string |  no |  |  |  |  |  |  | the screen name of the user who owns the list being requested by a slug |
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug |
| cursor | query | string |  no |  |  |  |  |  |  | Breaks the results into pages |
| include_entities | query | string |  no |  |  |  |  |  |  | Wehn set to either true, t or 1 |
| skip_status | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1 |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers?list_id=%20ex%20lorem%2C&slug=uris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante&owner_screen_name=estibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hend&owner_id=n%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20&cursor=es%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasel&include_entities=Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20fau&skip_status=%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C 
```




#### post /lists/subscribers/create
Subscribes the authenticated user to the specified list
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list |
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug |
| owner_screen_name | query | string |  no |  |  |  |  |  |  | the screen name of the user who owns the list being requested by a slug |
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/subscribers/create?list_id=ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisi&slug=lit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20&owner_screen_name=.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis&owner_id=isque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20veh 
```




#### get /lists/subscribers/show
Check if the specified user is a subscriber of the specified list
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers/show?list_id=to%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20&slug=t%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20fel&owner_screen_name=m%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20ve&user_id=es.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20l&screen_name=terdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20&owner_id=%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20f&include_entities=%20nec%2C%20tempus%20ac%20ipsu&skip_status=%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequa 
```




#### get /lists/subscribers/destroy
Returns list of subscribers destroy
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list |
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug |
| owner_screen_name | query | string |  no |  |  |  |  |  |  | the screen name of the user who owns the list being requested by a slug |
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers/destroy?list_id=e%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed&slug=sim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi&owner_screen_name=turpis%20molestie&owner_id=lvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20 
```




#### get /lists/members/create_all
Returns lists of members create_all
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list |
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug |
| owner_screen_name | query | string |  no |  |  |  |  |  |  | the screen name of the user who owns the list being requested by a slug |
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug |
| user_id | query | string |  no |  |  |  |  |  |  | The id of the user for whom to remove from the list |
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user for whom to remove from the list |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/members/create_all?list_id=gue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20preti&slug=onsectetur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C&owner_screen_name=quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20po&owner_id=risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20&user_id=%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20c&screen_name=ucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauri 
```




#### post /lists/destroy
Returns list of destroy
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list |
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug |
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug |
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/destroy?list_id=ondimentu&slug=erdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Don&owner_screen_name=nsectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egest&owner_id=e%20nec%20est%20quam.%20Pellentesque%20vulputat 
```




#### post /lists/update
Returns lists of updates
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list |
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug |
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug |
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug |
| name | query | string |  no |  |  |  |  |  |  | The name for the list |
| mode | query | string |  no |  |  |  |  |  |  | Whether your list is public or private |
| description | query | string |  no |  |  |  |  |  |  | The description to give the list |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/update?list_id=tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante&slug=ctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20od&owner_screen_name=etur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lor&owner_id=.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut&name=cibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris&mode=t%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus&description=na%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20v 
```




#### post /lists/create
Returns list of create
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| name | query | string |  no |  |  |  |  |  |  | The name for the list |
| mode | query | string |  no |  |  |  |  |  |  | Whether your list is public or private |
| description | query | string |  no |  |  |  |  |  |  | The description to give the list |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/create?name=esque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20&mode=um%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sod&description=%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20 
```




#### get /lists/show
Returns list of show
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list |
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug |
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug |
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/show?list_id=%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20se&slug=us%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrice&owner_screen_name=ue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis&owner_id=inibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed 
```




#### get /lists/subscriptions
Returns list of subscriptions
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user |
| user_id | query | string |  no |  |  |  |  |  |  | The id of the user for whom to return results for |
| count | query | string |  no |  |  |  |  |  |  | The amount of results to return per page |
| cursor | query | string |  no |  |  |  |  |  |  | Breaks the results into pages |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscriptions?screen_name=lis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sa&user_id=t%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20&count=t%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20vol&cursor=ntesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proi 
```




### Resource : list
#### get /list/members/show
Check if the specified user is a member of the specified list
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
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
HTTP 1.1 get http://api.twitter.com/1.1/list/members/show?list_id=istique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20d&slug=mentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C&user_id=%20eu%20nulla%20&screen_name=sque%20elit%20liber&owner_screen_name=ssa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum&owner_id=ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20eleme&include_entities=erdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesu&skip_status=%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tell 
```




#### get /list/members
Returns the members of the specified list
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list |
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug |
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug |
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug |
| include_entities | query | string |  no |  |  |  |  |  |  | Wehn set to either true, t or 1 |
| skip_status | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1 |
| cursor | query | string |  no |  |  |  |  |  |  | Breaks the results into pages |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members?list_id=estie%20aliquet%20est%2C%20posuere%20tincidunt%20el&slug=met%2C%20consectetur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20vol&owner_screen_name=e%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus&owner_id=%20turp&include_entities=%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20fel&skip_status=%20consectetur%20adipiscing%20elit.%20Integer%20ipsum%20sapi&cursor=tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20 
```




#### post /list/members/create
Returns list of members create
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list |
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug |
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user for whom to remove from the list |
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug |
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/list/members/create?list_id=vinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finib&slug=vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20&screen_name=entesque%20vulputate%20sapien%20at%20turpis%20mol&owner_screen_name=%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20&owner_id=gue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iacul 
```




#### get /list/members/destroy_all
Returns lists of destroy all
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list |
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug |
| user_id | query | string |  no |  |  |  |  |  |  | The id of the user for whom to remove from the list |
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user for whom to remove from the list |
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug |
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members/destroy_all?list_id=ula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est&slug=r.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscip&user_id=%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C&screen_name=s%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20molli&owner_screen_name=%20sed%20varius%20sodal&owner_id=ec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vest 
```




### Resource : direct_messages
#### get /direct_messages/sent
return 20 most recent direct messages sent
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| since_id | query | string |  no |  |  |  |  |  |  |  |
| max_id | query | string |  no |  |  |  |  |  |  |  |
| count | query | string |  no |  |  |  |  |  |  |  |
| page | query | string |  no |  |  |  |  |  |  |  |
| include_entities | query | string |  no |  |  |  |  |  |  |  |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages/sent?since_id=allis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luct&max_id=%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet&count=%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellu&page=ibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincid&include_entities=.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20E 
```




#### get /direct_messages/show
returns a single direct message specified by an id
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| id | query | string |  no |  |  |  |  |  |  | ID of direct message |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages/show?id=%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20 
```




#### get /direct_messages
return 20 most recent direct messages sent to user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| since_id | query | string |  no |  |  |  |  |  |  | return results with ID greater than specified |
| max_id | query | string |  no |  |  |  |  |  |  | returns results with an ID less than/equal to specified ID |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include status |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages?since_id=nsectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur&max_id=s%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20veli&include_entities=at%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel&skip_status=%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20ege 
```




#### post /direct_messages/destroy
destroys direct messages specified in required ID
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| id | query | string |  no |  |  |  |  |  |  | ID of direct message to delete |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/direct_messages/destroy?id=t%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapi&include_entities=%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molesti 
```




#### post /direct_messages/new
sends a new direct message to specified user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user_id | query | string |  no |  |  |  |  |  |  | description |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user receiving message |
| text | query | string |  no |  |  |  |  |  |  | text of your direct message |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/direct_messages/new?user_id=rdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcor&screen_name=ros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20&text=sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesua 
```




### Resource : search
#### get /search/tweets
returns collection of relevant Tweets matching query
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
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
HTTP 1.1 get http://api.twitter.com/1.1/search/tweets?q=dunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C&geocode=nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C&lang=cinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20&locale=%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sa&result_type=spendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20male&count=vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliqu&until=cilisis%20&since_id=iquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictu&max_id=.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu&include_entities=%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20b&callback=%20feug 
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
| id | path | string |  no |  |  |  |  |  |  | The id of the saved search |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/saved_searches/show/llentesque+vulputate+sapien+at+turpis+molestie+congue.+Nunc+et+lorem+eros.+Suspen 
```




#### post /saved_searches/create
Create a new saved search for the authenticated user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| query | query | string |  no |  |  |  |  |  |  | The query of the search the user would like to save |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/saved_searches/create?query=eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20nequ 
```




#### post /saved_searches/destroy/{id}
Destroy a saved search for the authenticating user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| id | path | string |  no |  |  |  |  |  |  | The id of the saved search |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/saved_searches/destroy/estie+aliquet+est%2C+posuere+tincidunt+elit.+Etiam+convallis+eu+ligula+non+consequat.+Pellentesque+elit+libero%2C+faucibus+luctus+ante+nec%2C+volutpat+dictum+neque.+Donec+molest 
```




### Resource : friends
#### get /friends/ids
returns a cursored collection of user IDs followed by user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user for whom to return results for |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user for whom to return results for |
| cursor | query | string |  no |  |  |  |  |  |  | causes list of connections to be broken in pages |
| stringify_ids | query | string |  no |  |  |  |  |  |  | IDs converted to strings |
| count | query | string |  no |  |  |  |  |  |  | number of IDs to attempt retrieval of |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friends/ids?user_id=mcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci&screen_name=ementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20a&cursor=um%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugi&stringify_ids=erdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20s&count=la%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20a 
```




### Resource : followers
#### get /followers/ids
returns a cursored collection of user IDs following the user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user for whom to return results for |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user for whom to return results for |
| cursor | query | string |  no |  |  |  |  |  |  | causes list of connections to be broken in pages |
| stringify_ids | query | string |  no |  |  |  |  |  |  | IDs converted to strings |
| count | query | string |  no |  |  |  |  |  |  | number of IDs to attempt retrieval of |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/followers/ids?user_id=%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque&screen_name=m%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20c&cursor=t%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20digniss&stringify_ids=en%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20&count=%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo 
```




### Resource : friendships
#### get /friendships/incoming
returns collection of IDs of users with pending follow request
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| cursor | query | string |  no |  |  |  |  |  |  | causes list of connections to be broken in pages |
| stringify_ids | query | string |  no |  |  |  |  |  |  | IDs converted to strings |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/incoming?cursor=%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20am&stringify_ids=ermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20ma 
```




#### get /friendships/outgoing
returns collection of IDs of users with pending follow request from the user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| cursor | query | string |  no |  |  |  |  |  |  | causes list of connections to be broken in pages |
| stringify_ids | query | string |  no |  |  |  |  |  |  | IDs converted to strings |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/outgoing?cursor=it%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20n&stringify_ids=t%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20se 
```




#### post /friendships/create
allows users to follow user sepcified by ID
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user for whom to befriend |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user for whom to befriend |
| follow | query | string |  no |  |  |  |  |  |  | enable notifications for target user |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/create?screen_name=ces%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interd&user_id=tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20e&follow=ntesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20era 
```




#### post /friendships/destroy
allows user to unfollow user psecified by ID
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user for whom to befriend |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user for whom to befriend |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/destroy?screen_name=licitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20m&user_id=s%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20 
```




#### post /friendships/update
Allows one to enable or disable settings for specified user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user for whom to befriend |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user for whom to befriend |
| device | query | string |  no |  |  |  |  |  |  | enable/disable device notifications for user |
| retweets | query | string |  no |  |  |  |  |  |  | enable/disable retweets from target user |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/update?screen_name=is%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tinci&user_id=ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20&device=%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20in&retweets=im%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20ac%20quam%20gravida%20pellentesq 
```




#### get /friendships/show
returns detailed info about relationship between two users
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| source_id | query | string |  no |  |  |  |  |  |  | user id of subject user |
| source_screen_name | query | string |  no |  |  |  |  |  |  | screen_name of subject user |
| target_id | query | string |  no |  |  |  |  |  |  | user id of target user |
| target_screen_name | query | string |  no |  |  |  |  |  |  | screen name of target user |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/show?source_id=isque%20aliquet.%20Phase&source_screen_name=llis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Ma&target_id=%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20&target_screen_name=ec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20 
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
| trend_location_woeid | query | string |  no |  |  |  |  |  |  | the Yahoo! Where On Earth ID to user as defaul tend location |
| sleep_time_enabled | query | string |  no |  |  |  |  |  |  | enables/disables sleep time, silencing notifications |
| start_sleep_time | query | string |  no |  |  |  |  |  |  | the hour that sleep time should begin if enabled |
| end_sleep_time | query | string |  no |  |  |  |  |  |  | the hour that sleep time should end if enabled |
| time_zone | query | string |  no |  |  |  |  |  |  | timezone dates and times should be displayed in |
| lang | query | string |  no |  |  |  |  |  |  | language which Twitter should render in for the user |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/settings?trend_location_woeid=vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcor&sleep_time_enabled=Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20S&start_sleep_time=amus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20&end_sleep_time=%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequ&time_zone=nterdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20&lang=m%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissi 
```




#### post /account/update_delivery_device
sets which device Twitter delivers updates to for user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| device | query | string |  no |  |  |  |  |  |  | must be one of sms, none |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_delivery_device?device=trices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20a&include_entities=rerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fr 
```




#### post /account/update_profile
sets values that users ar eable to set under Account tab
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| name | query | string |  no |  |  |  |  |  |  | full name of profile |
| url | query | string |  no |  |  |  |  |  |  | url associated with profile |
| location | query | string |  no |  |  |  |  |  |  | city or country describing where user of account is. |
| description | query | string |  no |  |  |  |  |  |  | a description of user owning account |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include statuses in response |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile?name=us%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20&url=%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulpu&location=ctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20&description=pendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet&include_entities=is%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vest&skip_status=Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vu 
```




#### post /account/update_profile_background_image
updates user's profile background image
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| tile | query | string |  no |  |  |  |  |  |  | whether or not to tile background image |
| use | query | string |  no |  |  |  |  |  |  | display background image or not |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include status in returned user objects |
| file | formData | file |  no |  |  |  |  |  |  | image to replace background image of profile |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_background_image?tile=.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidu&use=%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus&include_entities=quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20cons&skip_status=vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis 
Content-Type: multipart/form-data, boundary=57cada7ae1353
Content-Length: 761
--57cada7ae1353
content-disposition: form-data; name="file"

--data-binary 
Mjg0ZTVkMzJiNTRmYWVjYzM3YWUyZDMwMmZiYmE2ZDQ5ZTcyNDYzMzIxODIzOGNjN2NmMjQxMzlmMWY2YjBkNzc3YTc2NjQ3MzA1NDQ4ZWI1MWI4YzY5MzI3MTMzZDYyZTcxNTQ3ZWQ4YjE1ODEzZjczN2ViNDE2NTUwMzdhNTM3ZmVkYzA4NWJhMGFjYTkxMTcyMjNkN2ZlZmQwMWZiMjQxMjczNGExNjhjN2M5ODg2N2RlNmFiYzBmOTQ3ZDkzZDU0YmNjNWQzNTQ3OTBjNDIzYjlhNmE0NDYwN2Y5ZmJjYjkwMzM2MzkxMzcyMDNiZTQyNTZhNGI2OWIwZGY5MDlkMDg4MWQzN2QwODRiN2U1ZTdlODBjMzJjOWQ2MjRkYmE2Y2UyZDQ1NTAyNDM2YzUyMTliZTc1MjQ4M2U0ODliNjE5YzQwNjdlZDYyOTEwN2E3OWU5MmY2YjE4Y2EzZDYxN2RhNjg5ZmUxZDViZDE4YmFhOWMzOGM0ZjFlM2UyYzRlN2VmMTJjZTEyOGFmMTQ4Yjk3MmE1YjUzNjVhMzlmYWFjODFlM2Y4MjQ5NjI0YjY2MTQxNGIxNGVjYWZhZmRlNTQ5ZDQ3OTg3YTQwMjZiODc0ZGRhMThlMGY2NjlhYmFmOTUwMjZkM2Q3ZDZhYjVlZjVjYTJkOTgzMDg5YTI=
```




#### post /account/update_profile_colors
sets one or more hex values that controls color scheme
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| profile_background_color | query | string |  no |  |  |  |  |  |  | profile background color |
| profile_link_color | query | string |  no |  |  |  |  |  |  | profile link color |
| profile_sidebar_border_color | query | string |  no |  |  |  |  |  |  | profile sidebar's border color |
| profile_sidebar_fill_color | query | string |  no |  |  |  |  |  |  | profile's sidebar background color |
| profile_text_color | query | string |  no |  |  |  |  |  |  | profile text color |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include statuses |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_colors?profile_background_color=t%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed&profile_link_color=t%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20no&profile_sidebar_border_color=rtis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20p&profile_sidebar_fill_color=%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et&profile_text_color=Null&include_entities=t.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed&skip_status=it%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus 
```




#### post /account/update_profile_image
updates user's profile image
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include statuses |
| image | formData | file |  no |  |  |  |  |  |  | image to be set as profile image |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_image?skip_status=%20fringi 
Content-Type: multipart/form-data, boundary=57cada7ae2452
Content-Length: 762
--57cada7ae2452
content-disposition: form-data; name="image"

--data-binary 
YWEyMmE1NTI1MzI4ZmQ1ZjZiMWYxZDc4NWVmZjVmNjk4Yjc2NmIxNjM0OTgwYzY3MWFkNDcyMDA5NWI3MzUzZjAyNGY3ZWFmNDNhNzFlNzBlZjNlZjBmMGE3ODg2MzM4NTc4YWIyMDFjNzA5ZTVlYzg5N2JiM2I3ZDIxNTNkMjhiOTU1NTU5YmRiZWU5Y2QzMzQyMTgxMDU1NDkzZThjNmM5OGQ5MzIxY2JmNjVmMDE0NDFmZjNmY2Y5MmU1MjA2YzhlN2YxMTk5MGQ5ZGNiMjNiY2MxNWU1YWVjODAzODE5Y2JmYTQ0Mzg0OGRiYzY4Nzc0MmFlM2FhYmI4NWY1MjEyZjllYjA1ZjlhNTg3MTFlZjFiZDRkNTM0N2MwZTAyZTYwY2ZkZjM0OGE5YmQwMjExYTI2YTk3Njc2ZmRkYWU0YTc5M2UwOTJmNjQ0Nzc4NDI1YzI4MDE2NWY0MDViYWMzMmI0ZTkwZmJjNTNmMjU1MzY4MjQxYTI3NTc5ODBjYzJlMTgzMTMzNmIyN2FkMDNlYjNjYjIzMTQ3OWJiNjE3ODdmMzEwMjBlOTJhZWRjODg0MjQ1NGI2NTM1MTFmNmViYzc4NmNkNDE5MTIyMmE1M2I2ODliNTIwYTU2OTIxZWM4NGY0YjI1YzI1ODVmMjI4MWQ3NzRhYzNlNjZkNWE=
```




### Resource : blocks
#### get /blocks/list
disallows retweets and device notifications from a user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include statuses in response |
| cursor | query | string |  no |  |  |  |  |  |  | breaks block of user to be broken up into pages |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/blocks/list?include_entities=nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20&skip_status=orbi%20c&cursor=%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros 
```




#### get /blocks/ids
returns array of numeric user ids of blocked users
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| stringify_ids | query | string |  no |  |  |  |  |  |  | returns array of numeric IDs as string IDs |
| cursor | query | string |  no |  |  |  |  |  |  | breaks up block of user IDs into pages |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/blocks/ids?stringify_ids=lestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicul&cursor=pendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20se 
```




#### post /blocks/create
blocks the specified user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user to be blocked |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user to be blocked |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to skip statuses |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/blocks/create?screen_name=s.%20Morbi%20consequat%20mi%20id%20eros%20viv&user_id=llus%20fau&include_entities=t%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus&skip_status=issim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20 
```




#### post /blocks/destroy
un-blocks the specified user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user to be un-blocked |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user to be un-blocked |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to skip statuses |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/blocks/destroy?screen_name=eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusc&user_id=%20felis%20aliquam%20en&include_entities=c%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuer&skip_status=ue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibu 
```




### Resource : users
#### get /users/lookup
returns fully-hydrated user objects up to 100
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user to lookup |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user to lookup |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/lookup?screen_name=rius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.&user_id=interdu&include_entities=hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20 
```




#### get /users/show
returns a variety of info about specified user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user to be shown |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user to be shown |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/show?screen_name=nt.%20Aliquam%20enim%20dui%2C%20consectetur%20sit%20am&user_id=tiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpa&include_entities=eet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20 
```




#### get /users/search
simple relevance-based user search
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| q | query | string |  no |  |  |  |  |  |  | the search query to run against people search |
| page | query | string |  no |  |  |  |  |  |  | specifies the page of results to receive |
| count | query | string |  no |  |  |  |  |  |  | number of people to return per page |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/search?q=m%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20sempe&page=m%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus&count=uis%20nec%20tellus.%20Morbi%20consequat%20m&include_entities=%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20q 
```




#### get /users/contributees
collection of users specified user can contribute to
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user that is contributed to |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user to that is contributed to |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to skip statuses |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/contributees?screen_name=at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20con&user_id=%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibe&include_entities=teger%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posue&skip_status=nt%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringil 
```




#### get /users/contributors
collection of users that can contribute to specified account
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user contributing |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user contributing |
| include_entities | query | string |  no |  |  |  |  |  |  | whether or not to include entities |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to skip statuses |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/contributors?screen_name=ia.%20In%20nisi%20odio%2C%20porta%20ut%20&user_id=usce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20&include_entities=s%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20v&skip_status=ida%20ornare%20nibh%20sollicitudin%20 
```




#### post /users/report_spam
Returna users report spam
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | The ID or screen_name of the user you want to report as a spammer |
| user_id | query | string |  no |  |  |  |  |  |  | The ID of the user you want to report as a spammer |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/users/report_spam?screen_name=facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C&user_id=%20Donec%20molestie%2C%20eros%20in%20pretium%20pul 
```




### Resource : geo
#### get /geo/id/{place_id}
Returns all the information about a know place
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| place_id | path | string |  no |  |  |  |  |  |  | A place in the world |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/id/vulputate+odio.+Donec+quis+facilisis+arcu%2C+vel+ultrices+augue.+Suspendisse+p 
```




#### get /geo/reverse_geoncode
Given a latitude and a longitude, searches for up to 20 places that can be used as a place_id when updatting a status
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| lat | query | string |  no |  |  |  |  |  |  | The latitude to search around |
| long | query | string |  no |  |  |  |  |  |  | The longtitude to search around |
| accuracy | query | string |  no |  |  |  |  |  |  | A hint on region in which to search |
| granularity | query | string |  no |  |  |  |  |  |  | This is the minimal granularity of place types to return |
| max_results | query | string |  no |  |  |  |  |  |  | A hint as to the number of results to return |
| callback | query | string |  no |  |  |  |  |  |  | If supplied, the responses will use the JSON format with a callback of the given name |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/reverse_geoncode?lat=tesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ult&long=ltrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20ves&accuracy=nc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C&granularity=or.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20&max_results=%20dolor%20sit%20&callback=gilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetu 
```




#### get /geo/search
Search for places that can be attached to a statuses/updates
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
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
HTTP 1.1 get http://api.twitter.com/1.1/geo/search?lat=amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliq&long=%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20&query=%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20q&ip=ros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20&accuracy=agna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20&granularity=ris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pre&contained_within=%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20P&attribute%3Astreet_address=lerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20e&callback=la%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Do 
```




#### get /geo/similar_places
Locates places near the given coordinates which are similar in name
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| lat | query | string |  no |  |  |  |  |  |  | The latitude to search around |
| long | query | string |  no |  |  |  |  |  |  | The longtitude to search around |
| name | query | string |  no |  |  |  |  |  |  | The name a place is known as |
| contained_within | query | string |  no |  |  |  |  |  |  | This is the place_id which you would like to restrict the search results to |
| attribute:street_address | query | string |  no |  |  |  |  |  |  | This parameter searches for places which have this givven street address |
| callback | query | string |  no |  |  |  |  |  |  | If supplied, the responses will use the JSON format with a callback of the given name |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/similar_places?lat=erdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20fel&long=utpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20&name=ignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat&contained_within=tis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sol&attribute%3Astreet_address=rdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulv&callback=uam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel 
```




#### get /geo/places
Create a new place object at the given latitude and logitude
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| lat | query | string |  no |  |  |  |  |  |  | The latitude to search around |
| long | query | string |  no |  |  |  |  |  |  | The longtitude to search around |
| name | query | string |  no |  |  |  |  |  |  | The name a place is known as |
| token | query | string |  no |  |  |  |  |  |  | The token found in the response from geo/similar_places |
| contained_within | query | string |  no |  |  |  |  |  |  | This is the place_id which you would like to restrict the search results to |
| attribute:street_address | query | string |  no |  |  |  |  |  |  | This parameter searches for places which have this givven street address |
| callback | query | string |  no |  |  |  |  |  |  | If supplied, the responses will use the JSON format with a callback of the given name |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/places?lat=%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20soda&long=%20Sed%20eros%20m&name=s%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arc&token=asellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20&contained_within=eu%20ligula%20non%20consequat.%20&attribute%3Astreet_address=it%20dignissim%2C%20tincidunt%20justo&callback=euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Ves 
```




### Resource : trends
#### get /trends/place
Returns the top 10 trending topics for a specific WOEID
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| id | query | string |  no |  |  |  |  |  |  | The yahoo where on earch id |
| exclude | query | string |  no |  |  |  |  |  |  | Setting this equal to hashtages will remove all hashtages from the trends list |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/trends/place?id=%20consectetur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20&exclude=ismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20inte 
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
| lat | query | string |  no |  |  |  |  |  |  | If provided with a long parameter the available trend locations wil be stored by distance |
| long | query | string |  no |  |  |  |  |  |  | If provided with a lat parameters the available trend locations will be sorted by distance |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/trends/closest?lat=faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20qu&long=llus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobor 
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

