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
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Description |  
| :---: | :---: | :---: | :--- |  
| count | query | string | Specifies the number of tweets to try and retrieve | 
| since_id | query | string | Returns result with an ID greater than the specified ID | 
| max_id | query | string | Returns results with an ID less than or equal to the specified ID | 
| trim_user | query | string | When set to either true, t or 1, each tweet returned in a timeline will include a user object | 
| contributor_details | query | string | This parameter enhances the contributors element of the status response | 
| include_entities | query | string | The entities node will be disincluded when set to false | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/mentions_timeline 
```




#### get /statuses/user_timeline
Returns a collection of the most recent Tweets posted by the User
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Description |  
| :---: | :---: | :---: | :--- |  
| count | query | string | Specifies the number of tweets to try and retrieve | 
| since_id | query | string | Returns result with an ID greater than the specified ID | 
| max_id | query | string | Returns results with an ID less than or equal to the specified ID | 
| trim_user | query | string | When set to either true, t or 1, each tweet returned in a timeline will include a user object | 
| exclude_replies | query | boolean | This paramters will prevent from appearing in the returned timeline | 
| contributor_details | query | string | This parameter enhances the contributors element of the status response | 
| include_rts | query | boolean | When set to false, the timeline will strip any native retweet | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/user_timeline 
```




#### get /statuses/home_timeline
Returns a collection of the most recent Tweets
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Description |  
| :---: | :---: | :---: | :--- |  
| since_id | query | string | Returns result with an ID greater than the specified ID | 
| max_id | query | string | Returns results with an ID less than or equal to the specified ID | 
| trim_user | query | string | When set to either true, t or 1, each tweet returned in a timeline will include a user object | 
| exclude_replies | query | boolean | This paramters will prevent from appearing in the returned timeline | 
| contributor_details | query | string | This parameter enhances the contributors element of the status response | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/home_timeline 
```




#### post /statuses/retweets/{id}
Retweens a tweet
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| id | path | string | yes | The numerical ID of the desired status | 
| trim_user | query | string |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/retweets/{id} 
```




#### get /statuses/show/{id}
Retruns a single Tweet
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| id | path | string | yes | The numerical ID of the desired status | 
| trim_user | query | string |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object | 
| include_my_retweet | query | string | yes | When set to either true, t or 1, any Tweets returned that have been retweeted by the authenticating | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/show/{id} 
```




#### post /statuses/destroy/{id}
Destroys the status specified by the required ID parameter
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| id | path | integer | yes | The numerical ID of the desired status | 
| id32 | path | int32 |  | The numerical ID of the desired status | 
| id64 | path | int64 |  | The numerical ID of the desired status | 
| trim_user | query | string |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/destroy/{id} 
```




#### post /statuses/update
Updates the authenticating user's status
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| status | query | string | yes | The text of your status update | 
| exampleStringIPv4 | query | ipv4 |  | The text of your status update | 
| exampleStringIPv6 | query | ipv6 |  | The text of your status update | 
| exampleStringByte | query | byte |  | The text of your status update | 
| exampleStringBinary | query | binary |  | The text of your status update | 
| exampleStringDate | query | date |  | The text of your status update | 
| exampleStringDateTime | query | date-time |  | The text of your status update | 
| exampleStringPassword | query | password |  | The text of your status update | 
| exampleStringUri | query | uri |  | The text of your status update | 
| in_reply_to_status_id | query | string |  | The ID of an existing status | 
| lat | query | string |  | The latitude of the location | 
| long | query | string |  | The longitude of the location | 
| place_id | query | string |  | A place in the world | 
| display_coordinates | query | string |  | Whether or not to put a pin on the exact coordinates a tweet | 
| trim_user | query | string |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/update 
```




#### get /statuses/oembed
Returns information allowing the creation of an embedded representation
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| id | query | string | yes | The tweet/status id to return embed code for | 
| url | query | string | yes | The encoded URL of the Tweet status to be embedded | 
| maxwidth | query | string |  | The maximum width in pixels that the embed should be rendered at | 
| hide_media | query | string |  | Specifies whether the embedded tweet should automatically show the original message in the case that the embedded Tweet is a reply | 
| hide_thread | query | string |  | Specifies whether the embedded Tweet html should include a 'script' element pointing to widgets.js | 
| align | query | string |  | Specifies whether the embedded Tweet should be left aligned | 
| related | query | string |  | A value for the TWT related parameters | 
| lang | query | string |  | Languages code for the rendered embed | 
| exampleNumber | query | number |  | Languages code for the rendered embed | 
| exampleNumberFloat | query | float |  | Languages code for the rendered embed | 
| exampleNumberDouble | query | double |  | Languages code for the rendered embed | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/oembed 
```




### Resource : lists
#### get /lists/list
Return all lists the authenticating or specified user subscribes to, including their own.
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| screen_name | query | string | yes | The screen name of the user for whom to return results for | 
| user_id | query | string | yes | The ID of the user for whom to return results for | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/list 
```




#### get /lists/statuses
Returns a timeline of tweets authored by memebers of the specified list
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| list_id | query | string | yes | The numerical id of the list | 
| slug | query | string | yes | You can identify a list by its slug instead of its numerical id | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | 
| since_id | query | string |  | Returns result with an ID greater than the specified ID | 
| max_id | query | string |  | Returns results with an ID less than or equal to the specified ID | 
| count | query | string |  | Specifies the number of tweets to try and retrieve | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | 
| include_rts | query | string |  | When set to either true, t or 1, the list timeline will contain native retweets in addition to the standard stream of tweets | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/statuses 
```




#### get /lists/members/destroy
Returns the list of memebers destroy
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| list_id | query | string | yes | The numerical id of the list | 
| slug | query | string | yes | You can identify a list by its slug instrad of its numerical id | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | 
| user_id | query | string |  | The id of the user for whom to remove from the list | 
| screen_name | query | string |  | The screen name of the user for whom to remove from the list | 
| owner_id | query | string |  | The is of the user who wons the list being requested by a slug | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/members/destroy 
```




#### get /lists/memberships
Returns the lists of the specified user has been added to
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Description |  
| :---: | :---: | :---: | :--- |  
| user_id | query | string | The id of the user for whom to return results for | 
| screen_name | query | string | The screen name of the user for whom to return results for | 
| cursor | query | string | Breaks the results into pages | 
| filter_to_owned_lists | query | string | When set to true, t or 1, will return just lists the authenticating user owns | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/memberships 
```




#### get /lists/subscribers
Returns the subscribers of the specified list
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| list_id | query | string | yes | The numerical id of the list | 
| slug | query | string | yes | You can identify a list by its slug insted of its numerical id | 
| owner_screen_name | query | string |  | the screen name of the user who owns the list being requested by a slug | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | 
| cursor | query | string |  | Breaks the results into pages | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | 
| skip_status | query | string |  | When set to either true, t or 1 | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers 
```




#### post /lists/subscribers/create
Subscribes the authenticated user to the specified list
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| list_id | query | string | yes | The numerical id of the list | 
| slug | query | string | yes | You can identify a list being requested by a slug | 
| owner_screen_name | query | string |  | the screen name of the user who owns the list being requested by a slug | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/subscribers/create 
```




#### get /lists/subscribers/show
Check if the specified user is a subscriber of the specified list
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| list_id | query | string | yes | The numerical id of the list | 
| slug | query | string | yes | You can identify a list being requested by a slug | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | 
| user_id | query | string |  | The id of the user for whom to remove from the list | 
| screen_name | query | string |  | The screen name of the user for whom to remove from the list | 
| owner_id | query | string |  | The is of the user who wons the list being requested by a slug | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | 
| skip_status | query | string |  | When set to either true, t or 1 | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers/show 
```




#### get /lists/subscribers/destroy
Returns list of subscribers destroy
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| list_id | query | string | yes | The numerical id of the list | 
| slug | query | string | yes | You can identify a list being requested by a slug | 
| owner_screen_name | query | string |  | the screen name of the user who owns the list being requested by a slug | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers/destroy 
```




#### get /lists/members/create_all
Returns lists of members create_all
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| list_id | query | string | yes | The numerical id of the list | 
| slug | query | string | yes | You can identify a list being requested by a slug | 
| owner_screen_name | query | string |  | the screen name of the user who owns the list being requested by a slug | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | 
| user_id | query | string |  | The id of the user for whom to remove from the list | 
| screen_name | query | string |  | The screen name of the user for whom to remove from the list | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/members/create_all 
```




#### post /lists/destroy
Returns list of destroy
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| list_id | query | string | yes | The numerical id of the list | 
| slug | query | string | yes | You can identify a list being requested by a slug | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/destroy 
```




#### post /lists/update
Returns lists of updates
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| list_id | query | string | yes | The numerical id of the list | 
| slug | query | string | yes | You can identify a list being requested by a slug | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | 
| name | query | string |  | The name for the list | 
| mode | query | string |  | Whether your list is public or private | 
| description | query | string |  | The description to give the list | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/update 
```




#### post /lists/create
Returns list of create
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Description |  
| :---: | :---: | :---: | :--- |  
| name | query | string | The name for the list | 
| mode | query | string | Whether your list is public or private | 
| description | query | string | The description to give the list | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/create 
```




#### get /lists/show
Returns list of show
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| list_id | query | string | yes | The numerical id of the list | 
| slug | query | string | yes | You can identify a list being requested by a slug | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/show 
```




#### get /lists/subscriptions
Returns list of subscriptions
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Description |  
| :---: | :---: | :---: | :--- |  
| screen_name | query | string | The screen name of the user | 
| user_id | query | string | The id of the user for whom to return results for | 
| count | query | string | Specifies the number of tweets to try and retrieve | 
| cursor | query | string | Breaks the results into pages | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscriptions 
```




### Resource : list
#### get /list/members/show
Check if the specified user is a member of the specified list
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| list_id | query | string | yes | The numerical id of the list | 
| slug | query | string | yes | You can identify a list being requested by a slug | 
| user_id | query | string |  | The id of the user for whom to remove from the list | 
| screen_name | query | string |  | The screen name of the user for whom to remove from the list | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | 
| skip_status | query | string |  | When set to either true, t or 1 | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members/show 
```




#### get /list/members
Returns the members of the specified list
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| list_id | query | string | yes | The numerical id of the list | 
| slug | query | string | yes | You can identify a list being requested by a slug | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | 
| skip_status | query | string |  | When set to either true, t or 1 | 
| cursor | query | string |  | Breaks the results into pages | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members 
```




#### post /list/members/create
Returns list of members create
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| list_id | query | string | yes | The numerical id of the list | 
| slug | query | string | yes | You can identify a list being requested by a slug | 
| screen_name | query | string |  | The screen name of the user for whom to remove from the list | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/list/members/create 
```




#### get /list/members/destroy_all
Returns lists of destroy all
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| list_id | query | string | yes | The numerical id of the list | 
| slug | query | string | yes | You can identify a list being requested by a slug | 
| user_id | query | string |  | The id of the user for whom to remove from the list | 
| screen_name | query | string |  | The screen name of the user for whom to remove from the list | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members/destroy_all 
```




### Resource : direct_messages
#### get /direct_messages/sent
return 20 most recent direct messages sent
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Description |  
| :---: | :---: | :---: | :--- |  
| since_id | query | string | Returns result with an ID greater than the specified ID | 
| max_id | query | string | Returns results with an ID less than or equal to the specified ID | 
| count | query | string | Specifies the number of tweets to try and retrieve | 
| page | query | string |  | 
| include_entities | query | string | The entities node will be disincluded when set to false | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages/sent 
```




#### get /direct_messages/show
returns a single direct message specified by an id
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| id | query | string | yes | ID of direct message | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages/show 
```




#### get /direct_messages
return 20 most recent direct messages sent to user
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Description |  
| :---: | :---: | :---: | :--- |  
| since_id | query | string | Returns result with an ID greater than the specified ID | 
| max_id | query | string | Returns results with an ID less than or equal to the specified ID | 
| include_entities | query | string | The entities node will be disincluded when set to false | 
| skip_status | query | string | whether or not to include status | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages 
```




#### post /direct_messages/destroy
destroys direct messages specified in required ID
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| id | query | string | yes | ID of direct message to delete | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/direct_messages/destroy 
```




#### post /direct_messages/new
sends a new direct message to specified user
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| user_id | query | string | yes | description | 
| screen_name | query | string |  | screen name of user receiving message | 
| text | query | string | yes | text of your direct message | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/direct_messages/new 
```




### Resource : search
#### get /search/tweets
returns collection of relevant Tweets matching query
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| q | query | string | yes | URL-encoded search query of 500 characters max | 
| geocode | query | string |  | returns tweets by users located within given radius | 
| lang | query | string |  | restricts tweets to a given language | 
| locale | query | string |  | language of query you are sending | 
| result_type | query | string |  | specifies type of search results you prefer | 
| count | query | string |  | Specifies the number of tweets to try and retrieve | 
| until | query | string |  | returns tweets created before given date | 
| since_id | query | string |  | Returns result with an ID greater than the specified ID | 
| max_id | query | string |  | Returns results with an ID less than or equal to the specified ID | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | 
| callback | query | string |  | response will use the callback with given name | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/search/tweets 
```




### Resource : saved_searches
#### get /saved_searches/list
Returns the authenticated user's saved search queries


#### get /saved_searches/show/{id}
Retrieve the information for the saved search represented by the given id
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| id | path | string | yes | The id of the saved search | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/saved_searches/show/{id} 
```




#### post /saved_searches/create
Create a new saved search for the authenticated user
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| query | query | string | yes | The query of the search the user would like to save | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/saved_searches/create 
```




#### post /saved_searches/destroy/{id}
Destroy a saved search for the authenticating user
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| id | path | string | yes | The id of the saved search | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/saved_searches/destroy/{id} 
```




### Resource : friends
#### get /friends/ids
returns a cursored collection of user IDs followed by user
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Description |  
| :---: | :---: | :---: | :--- |  
| user_id | query | string | ID of user for whom to return results for | 
| screen_name | query | string | screen name of user for whom to return results for | 
| cursor | query | string | causes list of connections to be broken in pages | 
| stringify_ids | query | string | IDs converted to strings | 
| count | query | string | Specifies the number of tweets to try and retrieve | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friends/ids 
```




### Resource : followers
#### get /followers/ids
returns a cursored collection of user IDs following the user
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Description |  
| :---: | :---: | :---: | :--- |  
| user_id | query | string | ID of user for whom to return results for | 
| screen_name | query | string | screen name of user for whom to return results for | 
| cursor | query | string | causes list of connections to be broken in pages | 
| stringify_ids | query | string | IDs converted to strings | 
| count | query | string | Specifies the number of tweets to try and retrieve | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/followers/ids 
```




### Resource : friendships
#### get /friendships/incoming
returns collection of IDs of users with pending follow request
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Description |  
| :---: | :---: | :---: | :--- |  
| cursor | query | string | causes list of connections to be broken in pages | 
| stringify_ids | query | string | IDs converted to strings | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/incoming 
```




#### get /friendships/outgoing
returns collection of IDs of users with pending follow request from the user
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Description |  
| :---: | :---: | :---: | :--- |  
| cursor | query | string | causes list of connections to be broken in pages | 
| stringify_ids | query | string | IDs converted to strings | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/outgoing 
```




#### post /friendships/create
allows users to follow user sepcified by ID
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Description |  
| :---: | :---: | :---: | :--- |  
| screen_name | query | string | screen name of user for whom to befriend | 
| user_id | query | string | ID of user for whom to befriend | 
| follow | query | string | enable notifications for target user | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/create 
```




#### post /friendships/destroy
allows user to unfollow user psecified by ID
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| screen_name | query | string | yes | screen name of user for whom to befriend | 
| user_id | query | string | yes | ID of user for whom to befriend | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/destroy 
```




#### post /friendships/update
Allows one to enable or disable settings for specified user
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| screen_name | query | string | yes | screen name of user for whom to befriend | 
| user_id | query | string | yes | ID of user for whom to befriend | 
| device | query | string | yes | enable/disable device notifications for user | 
| retweets | query | string | yes | enable/disable retweets from target user | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/update 
```




#### get /friendships/show
returns detailed info about relationship between two users
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| source_id | query | string |  | user id of subject user | 
| source_screen_name | query | string |  | screen_name of subject user | 
| target_id | query | string | yes | user id of target user | 
| target_screen_name | query | string | yes | screen name of target user | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/show 
```




### Resource : account
#### get /account/settings
returns settings for user

#### post /account/settings
updates user's settings
* Request Parameters :
  * Content-Type Accepted : application/json

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
HTTP 1.1 post http://api.twitter.com/1.1/account/settings 
```




#### post /account/update_delivery_device
sets which device Twitter delivers updates to for user
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| device | query | string | yes | must be one of sms, none | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_delivery_device 
```




#### post /account/update_profile
sets values that users ar eable to set under Account tab
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Description |  
| :---: | :---: | :---: | :--- |  
| name | query | string | full name of profile | 
| url | query | string | url associated with profile | 
| location | query | string | city or country describing where user of account is. | 
| description | query | string | a description of user owning account | 
| include_entities | query | string | The entities node will be disincluded when set to false | 
| skip_status | query | string | whether or not to include statuses in response | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile 
```




#### post /account/update_profile_background_image
updates user's profile background image
* Request Parameters :
  * Content-Type Accepted : multipart/form-data

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| tile | query | string |  | whether or not to tile background image | 
| use | query | string |  | display background image or not | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | 
| skip_status | query | string |  | whether or not to include status in returned user objects | 
| file | formData | file | yes | image to replace background image of profile | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_background_image 
```




#### post /account/update_profile_colors
sets one or more hex values that controls color scheme
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Description |  
| :---: | :---: | :---: | :--- |  
| profile_background_color | query | string | profile background color | 
| profile_link_color | query | string | profile link color | 
| profile_sidebar_border_color | query | string | profile sidebar's border color | 
| profile_sidebar_fill_color | query | string | profile's sidebar background color | 
| profile_text_color | query | string | profile text color | 
| include_entities | query | string | The entities node will be disincluded when set to false | 
| skip_status | query | string | whether or not to include statuses | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_colors 
```




#### post /account/update_profile_image
updates user's profile image
* Request Parameters :
  * Content-Type Accepted : multipart/form-data

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| skip_status | query | string |  | whether or not to include statuses | 
| image | formData | file | yes | image to be set as profile image | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_image 
```




### Resource : blocks
#### get /blocks/list
disallows retweets and device notifications from a user
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Description |  
| :---: | :---: | :---: | :--- |  
| include_entities | query | string | The entities node will be disincluded when set to false | 
| skip_status | query | string | whether or not to include statuses in response | 
| cursor | query | string | breaks block of user to be broken up into pages | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/blocks/list 
```




#### get /blocks/ids
returns array of numeric user ids of blocked users
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Description |  
| :---: | :---: | :---: | :--- |  
| stringify_ids | query | string | returns array of numeric IDs as string IDs | 
| cursor | query | string | breaks up block of user IDs into pages | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/blocks/ids 
```




#### post /blocks/create
blocks the specified user
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| screen_name | query | string | yes | screen name of user to be blocked | 
| user_id | query | string | yes | ID of user to be blocked | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | 
| skip_status | query | string |  | whether or not to skip statuses | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/blocks/create 
```




#### post /blocks/destroy
un-blocks the specified user
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| screen_name | query | string | yes | screen name of user to be un-blocked | 
| user_id | query | string | yes | ID of user to be un-blocked | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | 
| skip_status | query | string |  | whether or not to skip statuses | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/blocks/destroy 
```




### Resource : users
#### get /users/lookup
returns fully-hydrated user objects up to 100
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Description |  
| :---: | :---: | :---: | :--- |  
| screen_name | query | string | screen name of user to lookup | 
| user_id | query | string | ID of user to lookup | 
| include_entities | query | string | The entities node will be disincluded when set to false | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/lookup 
```




#### get /users/show
returns a variety of info about specified user
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| screen_name | query | string | yes | screen name of user to be shown | 
| user_id | query | string | yes | ID of user to be shown | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/show 
```




#### get /users/search
simple relevance-based user search
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| q | query | string | yes | the search query to run against people search | 
| page | query | string |  | specifies the page of results to receive | 
| count | query | string |  | number of people to return per page | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/search 
```




#### get /users/contributees
collection of users specified user can contribute to
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| screen_name | query | string | yes | screen name of user that is contributed to | 
| user_id | query | string | yes | ID of user to that is contributed to | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | 
| skip_status | query | string |  | whether or not to skip statuses | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/contributees 
```




#### get /users/contributors
collection of users that can contribute to specified account
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| screen_name | query | string | yes | screen name of user contributing | 
| user_id | query | string | yes | ID of user contributing | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | 
| skip_status | query | string |  | whether or not to skip statuses | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/contributors 
```




#### post /users/report_spam
Returna users report spam
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Description |  
| :---: | :---: | :---: | :--- |  
| screen_name | query | string | The ID or screen_name of the user you want to report as a spammer | 
| user_id | query | string | The ID of the user you want to report as a spammer | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/users/report_spam 
```




### Resource : geo
#### get /geo/id/{place_id}
Returns all the information about a know place
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| place_id | path | string | yes | A place in the world | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/id/{place_id} 
```




#### get /geo/reverse_geoncode
Given a latitude and a longitude, searches for up to 20 places that can be used as a place_id when updatting a status
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| lat | query | string | yes | The latitude to search around | 
| long | query | string | yes | The longtitude to search around | 
| accuracy | query | string |  | A hint on region in which to search | 
| granularity | query | string |  | This is the minimal granularity of place types to return | 
| max_results | query | string |  | A hint as to the number of results to return | 
| callback | query | string |  | If supplied, the responses will use the JSON format with a callback of the given name | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/reverse_geoncode 
```




#### get /geo/search
Search for places that can be attached to a statuses/updates
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| lat | query | string | yes | The latitude to search around | 
| long | query | string | yes | The longtitude to search around | 
| query | query | string | yes | Free-form text to match against while executing a geo-based query | 
| ip | query | string | yes | An Ip address | 
| accuracy | query | string |  | A hint on region in which to search | 
| granularity | query | string |  | This is the minimal granularity of place types to return | 
| contained_within | query | string |  | This is the place_id which you would like to restrict the search results to | 
| attribute:street_address | query | string |  | This parameter searches for places which have this givven street address | 
| callback | query | string |  | If supplied, the responses will use the JSON format with a callback of the given name | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/search 
```




#### get /geo/similar_places
Locates places near the given coordinates which are similar in name
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| lat | query | string | yes | The latitude to search around | 
| long | query | string | yes | The longtitude to search around | 
| name | query | string | yes | The name a place is known as | 
| contained_within | query | string |  | This is the place_id which you would like to restrict the search results to | 
| attribute:street_address | query | string |  | This parameter searches for places which have this givven street address | 
| callback | query | string |  | If supplied, the responses will use the JSON format with a callback of the given name | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/similar_places 
```




#### get /geo/places
Create a new place object at the given latitude and logitude
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| lat | query | string | yes | The latitude to search around | 
| long | query | string | yes | The longtitude to search around | 
| name | query | string | yes | The name a place is known as | 
| token | query | string | yes | The token found in the response from geo/similar_places | 
| contained_within | query | string |  | This is the place_id which you would like to restrict the search results to | 
| attribute:street_address | query | string |  | This parameter searches for places which have this givven street address | 
| callback | query | string |  | If supplied, the responses will use the JSON format with a callback of the given name | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/places 
```




### Resource : trends
#### get /trends/place
Returns the top 10 trending topics for a specific WOEID
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| id | query | string | yes | The yahoo where on earch id | 
| exclude | query | string | yes | Setting this equal to hashtages will remove all hashtages from the trends list | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/trends/place 
```




#### get /trends/available
Returns the availability


#### get /trends/closest
Returns the location that Twitter has trending topic information for
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| lat | query | string | yes | If provided with a long parameter the available trend locations wil be stored by distance | 
| long | query | string | yes | If provided with a lat parameters the available trend locations will be sorted by distance | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/trends/closest 
```




### Resource : help
#### get /help/configuration
Returns the current configuration used by Twitter including twitter.com slugs which are not usernames


#### get /help/languages
Returns the list of languages supported by Twitter along with the language code supported by Twitter


#### get /help/privacy
Returns Twitter's privacy policy


#### get /help/tos
Returns the Twitter Terms of Service


### Resource : application
#### get /application/rate_limit_status
Returns the current rate limits for methods belonging to the specified resource families
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Definition | Description |  
| :---: | :---: | :---: | :---: | :--- |  
| resources | query | array | [#/paths//application/rate_limit_status/get/parameters/0](#testtoto) | A comma-separated list of resource families you want to know the current rate limit disposition for | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/application/rate_limit_status 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

