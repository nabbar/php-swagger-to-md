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


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| count | query | string | Specifies the number of tweets to try and retrieve | esuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum torto | 
| since_id | query | string | Returns result with an ID greater than the specified ID | u ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in preti | 
| max_id | query | string | Returns results with an ID less than or equal to the specified ID | st leo vehicula lectus, a cursus neque erat | 
| trim_user | query | string | When set to either true, t or 1, each tweet returned in a timeline will include a user object |  Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ips | 
| contributor_details | query | string | This parameter enhances the contributors element of the status response | ue porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odi | 
| include_entities | query | string | The entities node will be disincluded when set to false | iquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin v | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/mentions_timeline?count=esuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20torto&since_id=u%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20preti&max_id=st%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat&trim_user=%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ips&contributor_details=ue%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odi&include_entities=iquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20v 
```




#### get /statuses/user_timeline
Returns a collection of the most recent Tweets posted by the User
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| count | query | string | Specifies the number of tweets to try and retrieve | sque elit libero, faucibus luctus ante | 
| since_id | query | string | Returns result with an ID greater than the specified ID | ncidunt pretium sodal | 
| max_id | query | string | Returns results with an ID less than or equal to the specified ID | onsectetur adipiscing elit. Integer ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis | 
| trim_user | query | string | When set to either true, t or 1, each tweet returned in a timeline will include a user object | e quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fu | 
| exclude_replies | query | boolean | This paramters will prevent from appearing in the returned timeline | 0 | 
| contributor_details | query | boolean | This paramters enhances the contributors element of the status response to include the screen_name of the contributor | 0 | 
| include_rts | query | boolean | When set to false, the timeline will strip any native retweet | 0 | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/user_timeline?count=sque%20elit%20libero%2C%20faucibus%20luctus%20ante&since_id=ncidunt%20pretium%20sodal&max_id=onsectetur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis&trim_user=e%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fu&exclude_replies=0&contributor_details=0&include_rts=0 
```




#### get /statuses/home_timeline
Returns a collection of the most recent Tweets
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| since_id | query | string | Returns result with an ID greater than the specified ID |  sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egesta | 
| max_id | query | string | Returns results with an ID less than or equal to the specified ID | ectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi conse | 
| trim_user | query | string | When set to either true, t or 1, each tweet returned in a timeline will include a user object | orbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis c | 
| exclude_replies | query | boolean | This paramters will prevent from appearing in the returned timeline | 1 | 
| contributor_details | query | boolean | This paramters enhances the contributors element of the status response to include the screen_name of the contributor | 1 | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/home_timeline?since_id=%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egesta&max_id=ectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20conse&trim_user=orbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20c&exclude_replies=1&contributor_details=1 
```




#### post /statuses/retweets/{id}
Retweens a tweet
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | path | string | yes | The numerical ID of the desired status | a ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliqu | 
| trim_user | query | string |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object | , e | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/retweets/a+ex+lorem%2C+ut+ornare+purus+ultrices+nec.+Vestibulum+elementum+felis+sit+amet+ipsum+euismod+ullamcorper.+Phasellus+sit+amet+vestibulum+quam.+Morbi+tincidunt+pretium+sodales.+Etiam+dignissim+risus+non+felis+scelerisque+aliqu?trim_user=%2C%20e 
```




#### get /statuses/show/{id}
Retruns a single Tweet
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | path | string | yes | The numerical ID of the desired status | o vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisq | 
| trim_user | query | string |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object | urus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibul | 
| include_my_retweet | query | string | yes | When set to either true, t or 1, any Tweets returned that have been retweeted by the authenticating | i consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | er. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo  | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/show/o+vehicula+lectus%2C+a+cursus+neque+erat+vitae+odio.+Sed+sed+neque+dignissim%2C+imperdiet+nunc+maximus%2C+finibus+erat.+Proin+id+scelerisq?trim_user=urus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibul&include_my_retweet=i%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C&include_entities=er.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20 
```




#### post /statuses/destroy/{id}
Destroys the status specified by the required ID parameter
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | path | string | yes | The numerical ID of the desired status | it. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat v | 
| trim_user | query | string |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object | e. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque port | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/destroy/it.+Etiam+convallis+eu+ligula+non+consequat.+Pellentesque+elit+libero%2C+faucibus+luctus+ante+nec%2C+volutpat+dictum+neque.+Donec+molestie%2C+eros+in+pretium+pulvinar%2C+est+leo+vehicula+lectus%2C+a+cursus+neque+erat+v?trim_user=e.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20port 
```




#### post /statuses/update
Updates the authenticating user's status
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| status | query | string | yes | The text of your status update | sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor a | 
| in_reply_to_status_id | query | string |  | The ID of an existing status | is sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris | 
| lat | query | string |  | The latitude of the location | Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum | 
| long | query | string |  | The longitude of the location | at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla o | 
| place_id | query | string |  | A place in the world | sus neque erat  | 
| display_coordinates | query | string |  | Whether or not to put a pin on the exact coordinates a tweet | n eros. Mauris sollicitudin varius purus, nec condimentum tellus sagittis at. Nu | 
| trim_user | query | string |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object | tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit.  | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/update?status=sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20a&in_reply_to_status_id=is%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris&lat=Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum&long=at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20o&place_id=sus%20neque%20erat%20&display_coordinates=n%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nu&trim_user=tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20 
```




#### get /statuses/oembed
Returns information allowing the creation of an embedded representation
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | query | string | yes | The tweet/status id to return embed code for |  massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis  | 
| url | query | string | yes | The encoded URL of the Tweet status to be embedded | dio. Mauris volutpat dignissim mi eget lacinia. In nis | 
| maxwidth | query | string |  | The maximum width in pixels that the embed should be rendered at | endrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravi | 
| hide_media | query | string |  | Specifies whether the embedded tweet should automatically show the original message in the case that the embedded Tweet is a reply | dum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur,  | 
| hide_thread | query | string |  | Specifies whether the embedded Tweet html should include a 'script' element pointing to widgets.js | etus, eu biben | 
| align | query | string |  | Specifies whether the embedded Tweet should be left aligned |  justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est,  | 
| related | query | string |  | A value for the TWT related parameters | etium sodales. Etiam dignissim r | 
| lang | query | string |  | Languages code for the rendered embed | ris sollicitudin varius purus, nec condiment | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/oembed?id=%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20&url=dio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nis&maxwidth=endrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravi&hide_media=dum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20&hide_thread=etus%2C%20eu%20biben&align=%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20&related=etium%20sodales.%20Etiam%20dignissim%20r&lang=ris%20sollicitudin%20varius%20purus%2C%20nec%20condiment 
```




### Resource : lists
#### get /lists/list
Return all lists the authenticating or specified user subscribes to, including their own.
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | The screen name of the user for whom to return results for | dit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id te | 
| user_id | query | string | yes | The ID of the user for whom to return results for | tum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris soll | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/list?screen_name=dit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20te&user_id=tum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20soll 
```




#### get /lists/statuses
Returns a timeline of tweets authored by memebers of the specified list
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | d lacus. Nulla justo arcu, soda | 
| slug | query | string | yes | You can identify a list by its slug instead of its numerical id | tetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | a. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id,  | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | uere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, v | 
| since_id | query | string |  | Returns results with an ID greater than the sepcified ID | ilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elemen | 
| max_id | query | string |  | Returns results with an ID less than or equal to the specified ID | adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem torto | 
| count | query | string |  | Specifies the number of results to retrieve per page | tpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id s | 
| include_entities | query | string |  | Entities are ON by default | d sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris n | 
| include_rts | query | string |  | When set to either true, t or 1, the list timeline will contain native retweets in addition to the standard stream of tweets | suere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros  | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/statuses?list_id=d%20lacus.%20Nulla%20justo%20arcu%2C%20soda&slug=tetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C&owner_screen_name=a.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20&owner_id=uere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20v&since_id=ilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elemen&max_id=adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20torto&count=tpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20s&include_entities=d%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20n&include_rts=suere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20 
```




#### get /lists/members/destroy
Returns the list of memebers destroy
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | gravida pellentesq | 
| slug | query | string | yes | You can identify a list by its slug instrad of its numerical id | nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesq | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | n non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam.  | 
| user_id | query | string |  | The id of the user for whom to remove from the list | tum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mol | 
| screen_name | query | string |  | The screen name of the user for whom to remove from the list | ncidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec c | 
| owner_id | query | string |  | The is of the user who wons the list being requested by a slug | a ex | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/members/destroy?list_id=gravida%20pellentesq&slug=nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesq&owner_screen_name=n%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20&user_id=tum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mol&screen_name=ncidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20c&owner_id=a%20ex 
```




#### get /lists/memberships
Returns the lists of the specified user has been added to
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| user_id | query | string | The id of the user for whom to return results for |  luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus  | 
| screen_name | query | string | The screen name of the user for whom to return results for | tesque enim metus in eros. Mauris sollicitudin varius purus, nec condimentum tellus sa | 
| cursor | query | string | Breaks the results into pages |  est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in preti | 
| filter_to_owned_lists | query | string | When set to true, t or 1, will return just lists the authenticating user owns | erisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/memberships?user_id=%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20&screen_name=tesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sa&cursor=%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20preti&filter_to_owned_lists=erisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci 
```




#### get /lists/subscribers
Returns the subscribers of the specified list
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | d enim nec tellus accumsan tincidunt. Aliquam en | 
| slug | query | string | yes | You can identify a list by its slug insted of its numerical id | ntesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed ne | 
| owner_screen_name | query | string |  | the screen name of the user who owns the list being requested by a slug | . Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | s scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue int | 
| cursor | query | string |  | Breaks the results into pages | la lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa | 
| include_entities | query | string |  | Wehn set to either true, t or 1 | ortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor | 
| skip_status | query | string |  | When set to either true, t or 1 | ltricies turpis nec dignissim ali | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers?list_id=d%20enim%20nec%20tellus%20accumsan%20tincidunt.%20Aliquam%20en&slug=ntesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20ne&owner_screen_name=.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio&owner_id=s%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20int&cursor=la%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa&include_entities=ortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor&skip_status=ltricies%20turpis%20nec%20dignissim%20ali 
```




#### post /lists/subscribers/create
Subscribes the authenticated user to the specified list
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | esque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, | 
| slug | query | string | yes | You can identify a list being requested by a slug | nec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis s | 
| owner_screen_name | query | string |  | the screen name of the user who owns the list being requested by a slug | us luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium p | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | rcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. M | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/subscribers/create?list_id=esque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C&slug=nec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20s&owner_screen_name=us%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20p&owner_id=rcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20M 
```




#### get /lists/subscribers/show
Check if the specified user is a subscriber of the specified list
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis | 
| slug | query | string | yes | You can identify a list being requested by a slug |  orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nu | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | m neque. Donec molestie, eros in pretium pulvinar,  | 
| user_id | query | string |  | The id of the user for whom to remove from the list |  ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ul | 
| screen_name | query | string |  | The screen name of the user for whom to remove from the list |  laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis | 
| owner_id | query | string |  | The is of the user who wons the list being requested by a slug | nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices au | 
| include_entities | query | string |  | Wehn set to either true, t or 1 | . Nunc et lorem eros. Suspendisse eget nibh pulvinar | 
| skip_status | query | string |  | When set to either true, t or 1 |  et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed  | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers/show?list_id=Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis&slug=%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nu&owner_screen_name=m%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20&user_id=%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ul&screen_name=%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis&owner_id=nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20au&include_entities=.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar&skip_status=%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20 
```




#### get /lists/subscribers/destroy
Returns list of subscribers destroy
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | quam.  | 
| slug | query | string | yes | You can identify a list being requested by a slug | s et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur  | 
| owner_screen_name | query | string |  | the screen name of the user who owns the list being requested by a slug | urpis, lacinia | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | ales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum se | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers/destroy?list_id=quam.%20&slug=s%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20&owner_screen_name=urpis%2C%20lacinia&owner_id=ales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20se 
```




#### get /lists/members/create_all
Returns lists of members create_all
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | acus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, fa | 
| slug | query | string | yes | You can identify a list being requested by a slug | rta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, ve | 
| owner_screen_name | query | string |  | the screen name of the user who owns the list being requested by a slug | Mauris volutpat dignissim mi eget lacinia. In ni | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | ibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapie | 
| user_id | query | string |  | The id of the user for whom to remove from the list | . Integer ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac  | 
| screen_name | query | string |  | The screen name of the user for whom to remove from the list | ed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in er | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/members/create_all?list_id=acus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20fa&slug=rta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20ve&owner_screen_name=Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20ni&owner_id=ibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapie&user_id=.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20&screen_name=ed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20er 
```




#### post /lists/destroy
Returns list of destroy
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list |  euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibul | 
| slug | query | string | yes | You can identify a list being requested by a slug | tur, mi sit amet fermentum ultricie | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | t turpis molestie congue. N | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug |  felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/destroy?list_id=%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibul&slug=tur%2C%20mi%20sit%20amet%20fermentum%20ultricie&owner_screen_name=t%20turpis%20molestie%20congue.%20N&owner_id=%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros 
```




#### post /lists/update
Returns lists of updates
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | ellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arc | 
| slug | query | string | yes | You can identify a list being requested by a slug | c ultricies nibh eu leo consectetur | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | nsectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentu | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | e tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula  | 
| name | query | string |  | The name for the list | ui nisl. Donec ultricies nibh eu leo conse | 
| mode | query | string |  | Whether your list is public or private | cidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperd | 
| description | query | string |  | The description to give the list | gue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel m | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/update?list_id=ellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arc&slug=c%20ultricies%20nibh%20eu%20leo%20consectetur&owner_screen_name=nsectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentu&owner_id=e%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20&name=ui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20conse&mode=cidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperd&description=gue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20m 
```




#### post /lists/create
Returns list of create
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| name | query | string | The name for the list | aximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augu | 
| mode | query | string | Whether your list is public or private |  leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque p | 
| description | query | string | The description to give the list | uspendiss | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/create?name=aximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augu&mode=%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20p&description=uspendiss 
```




#### get /lists/show
Returns list of show
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | les. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et | 
| slug | query | string | yes | You can identify a list being requested by a slug | o vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sod | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | iquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar,  | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | a elit in s | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/show?list_id=les.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et&slug=o%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sod&owner_screen_name=iquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20&owner_id=a%20elit%20in%20s 
```




#### get /lists/subscriptions
Returns list of subscriptions
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | The screen name of the user | tum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris  | 
| user_id | query | string | The id of the user for whom to return results for | facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum element | 
| count | query | string | The amount of results to return per page | molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna | 
| cursor | query | string | Breaks the results into pages | orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem  | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscriptions?screen_name=tum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20&user_id=facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20element&count=molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna&cursor=orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20 
```




### Resource : list
#### get /list/members/show
Check if the specified user is a member of the specified list
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list |  vulputate odio. Donec quis facilisis arcu, | 
| slug | query | string | yes | You can identify a list being requested by a slug | bulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium | 
| user_id | query | string |  | The id of the user for whom to remove from the list | ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum eui | 
| screen_name | query | string |  | The screen name of the user for whom to remove from the list |  tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla mal | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, ves | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | m enim dui | 
| include_entities | query | string |  | Wehn set to either true, t or 1 | r  | 
| skip_status | query | string |  | When set to either true, t or 1 | oreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. E | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members/show?list_id=%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C&slug=bulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium&user_id=ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20eui&screen_name=%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20mal&owner_screen_name=Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20ves&owner_id=m%20enim%20dui&include_entities=r%20&skip_status=oreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20E 
```




#### get /list/members
Returns the members of the specified list
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | t magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sol | 
| slug | query | string | yes | You can identify a list being requested by a slug | justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet var | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug |  ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus e | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | ula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis e | 
| include_entities | query | string |  | Wehn set to either true, t or 1 | dio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis | 
| skip_status | query | string |  | When set to either true, t or 1 | ti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim | 
| cursor | query | string |  | Breaks the results into pages | erdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta maur | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members?list_id=t%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sol&slug=justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20var&owner_screen_name=%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20e&owner_id=ula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20e&include_entities=dio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis&skip_status=ti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim&cursor=erdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20maur 
```




#### post /list/members/create
Returns list of members create
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | ignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdie | 
| slug | query | string | yes | You can identify a list being requested by a slug | empor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna | 
| screen_name | query | string |  | The screen name of the user for whom to remove from the list | um tortor ac, congue eros. Lorem ipsum dolor sit ame | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | a cursus neque erat vitae odio. Sed sed neque dignis | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | tie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/list/members/create?list_id=ignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdie&slug=empor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna&screen_name=um%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20ame&owner_screen_name=a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignis&owner_id=tie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio. 
```




#### get /list/members/destroy_all
Returns lists of destroy all
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien  | 
| slug | query | string | yes | You can identify a list being requested by a slug | s. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis portti | 
| user_id | query | string |  | The id of the user for whom to remove from the list | issim augue interdum sed. Vestibulum eget luctu | 
| screen_name | query | string |  | The screen name of the user for whom to remove from the list | at. Nullam vel metus ac quam gravida pellente | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | stie, eros in pretium pulvina | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | rtor. Praesent interdum fringilla orci, gravida  | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members/destroy_all?list_id=consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20&slug=s.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20portti&user_id=issim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctu&screen_name=at.%20Nullam%20vel%20metus%20ac%20quam%20gravida%20pellente&owner_screen_name=stie%2C%20eros%20in%20pretium%20pulvina&owner_id=rtor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20 
```




### Resource : direct_messages
#### get /direct_messages/sent
return 20 most recent direct messages sent
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Example |  
| :---: | :---: | :---: | :--- |  
| since_id | query | string |  Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi,  | 
| max_id | query | string | t lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices e | 
| count | query | string | lit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Don | 
| page | query | string | urus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus ur | 
| include_entities | query | string |  efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tor | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages/sent?since_id=%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20&max_id=t%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20e&count=lit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Don&page=urus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20ur&include_entities=%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tor 
```




#### get /direct_messages/show
returns a single direct message specified by an id
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | query | string | yes | ID of direct message | tum felis sit amet ipsum euismod ullamcorper. Phasellus  | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages/show?id=tum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20 
```




#### get /direct_messages
return 20 most recent direct messages sent to user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| since_id | query | string | return results with ID greater than specified |  metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur | 
| max_id | query | string | returns results with an ID less than/equal to specified ID | orem eros. Suspendisse eget nibh pulvinar, vesti | 
| include_entities | query | string | whether or not to include entities | massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros.  | 
| skip_status | query | string | whether or not to include status | empor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque  | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages?since_id=%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur&max_id=orem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vesti&include_entities=massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20&skip_status=empor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20 
```




#### post /direct_messages/destroy
destroys direct messages specified in required ID
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | query | string | yes | ID of direct message to delete | s vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Ma | 
| include_entities | query | string |  | whether or not to include entities | dunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimen | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/direct_messages/destroy?id=s%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Ma&include_entities=dunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimen 
```




#### post /direct_messages/new
sends a new direct message to specified user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user_id | query | string | yes | description | um eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut  | 
| screen_name | query | string |  | screen name of user receiving message | rem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissi | 
| text | query | string | yes | text of your direct message | ec condimentum tellus sagittis at. Nullam vel metus ac quam gravi | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/direct_messages/new?user_id=um%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20&screen_name=rem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissi&text=ec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20ac%20quam%20gravi 
```




### Resource : search
#### get /search/tweets
returns collection of relevant Tweets matching query
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| q | query | string | yes | URL-encoded search query of 500 characters max |  Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. P | 
| geocode | query | string |  | returns tweets by users located within given radius | nibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis | 
| lang | query | string |  | restricts tweets to a given language | culis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet v | 
| locale | query | string |  | language of query you are sending | s sollicitudin | 
| result_type | query | string |  | specifies type of search results you prefer | met, consectetur adipiscing | 
| count | query | string |  | number of tweets to return | dio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum feli | 
| until | query | string |  | returns tweets created before given date | rabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor frin | 
| since_id | query | string |  | return results with ID greater than specified | sed ante sit amet sagittis. In non lectus eu nunc interdum laor | 
| max_id | query | string |  | returns results with an ID less than/equal to specified ID |  felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tin | 
| include_entities | query | string |  | whether or not to include entities | gittis sed ex. Vivamus id vulputate odio. Donec quis facilisis | 
| callback | query | string |  | response will use the callback with given name | o ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada fa | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/search/tweets?q=%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20P&geocode=nibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis&lang=culis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20v&locale=s%20sollicitudin&result_type=met%2C%20consectetur%20adipiscing&count=dio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20feli&until=rabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20frin&since_id=sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laor&max_id=%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tin&include_entities=gittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis&callback=o%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20fa 
```




### Resource : saved_searches
#### get /saved_searches/list
Returns the authenticated user's saved search queries


#### get /saved_searches/show/{id}
Retrieve the information for the saved search represented by the given id
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | path | string | yes | The id of the saved search | is nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare p | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/saved_searches/show/is+nec+massa+egestas%2C+sed+mollis+est+molestie.+Aenean+quam+nisi%2C+posuere+sed+varius+sodales%2C+sagittis+sed+ex.+Vivamus+id+vulputate+odio.+Donec+quis+facilisis+arcu%2C+vel+ultrices+augue.+Suspendisse+potenti.+Mauris+vehicula+ex+lorem%2C+ut+ornare+p 
```




#### post /saved_searches/create
Create a new saved search for the authenticated user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| query | query | string | yes | The query of the search the user would like to save | t amet, consectetur adipiscing elit. Suspendisse justo turpis, laci | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/saved_searches/create?query=t%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20laci 
```




#### post /saved_searches/destroy/{id}
Destroy a saved search for the authenticating user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | path | string | yes | The id of the saved search | blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus ve | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/saved_searches/destroy/blandit%2C+bibendum+tortor+ac%2C+congue+eros.+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Suspendisse+justo+turpis%2C+lacinia+id+tempor+sed%2C+dapibus+ve 
```




### Resource : friends
#### get /friends/ids
returns a cursored collection of user IDs followed by user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| user_id | query | string | ID of user for whom to return results for | st leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean q | 
| screen_name | query | string | screen name of user for whom to return results for | ere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luct | 
| cursor | query | string | causes list of connections to be broken in pages | sto arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut mo | 
| stringify_ids | query | string | IDs converted to strings | met vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed e | 
| count | query | string | number of IDs to attempt retrieval of | s luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvin | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friends/ids?user_id=st%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20q&screen_name=ere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luct&cursor=sto%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20mo&stringify_ids=met%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20e&count=s%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvin 
```




### Resource : followers
#### get /followers/ids
returns a cursored collection of user IDs following the user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| user_id | query | string | ID of user for whom to return results for | in eros. Mauris sollicitudin varius purus, nec condimentum | 
| screen_name | query | string | screen name of user for whom to return results for |  | 
| cursor | query | string | causes list of connections to be broken in pages |  lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Ae | 
| stringify_ids | query | string | IDs converted to strings |  felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque ali | 
| count | query | string | number of IDs to attempt retrieval of | r | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/followers/ids?user_id=in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum&screen_name=&cursor=%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Ae&stringify_ids=%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20ali&count=r 
```




### Resource : friendships
#### get /friendships/incoming
returns collection of IDs of users with pending follow request
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| cursor | query | string | causes list of connections to be broken in pages | vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit am | 
| stringify_ids | query | string | IDs converted to strings |  neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris  | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/incoming?cursor=vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20am&stringify_ids=%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20 
```




#### get /friendships/outgoing
returns collection of IDs of users with pending follow request from the user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| cursor | query | string | causes list of connections to be broken in pages | are purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non fe | 
| stringify_ids | query | string | IDs converted to strings |  faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Mae | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/outgoing?cursor=are%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20fe&stringify_ids=%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Mae 
```




#### post /friendships/create
allows users to follow user sepcified by ID
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | screen name of user for whom to befriend | sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem | 
| user_id | query | string | ID of user for whom to befriend | In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper  | 
| follow | query | string | enable notifications for target user | lla. Mauris eu tortor blandit, | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/create?screen_name=sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem&user_id=In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20&follow=lla.%20Mauris%20eu%20tortor%20blandit%2C 
```




#### post /friendships/destroy
allows user to unfollow user psecified by ID
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | screen name of user for whom to befriend | t sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo co | 
| user_id | query | string | yes | ID of user for whom to befriend | dunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laore | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/destroy?screen_name=t%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20co&user_id=dunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laore 
```




#### post /friendships/update
Allows one to enable or disable settings for specified user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | screen name of user for whom to befriend | ellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id sce | 
| user_id | query | string | yes | ID of user for whom to befriend | erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molest | 
| device | query | string | yes | enable/disable device notifications for user | ortis porttitor. Mau | 
| retweets | query | string | yes | enable/disable retweets from target user | citur, mi sit amet fermentum ultricies, felis | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/update?screen_name=ellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20sce&user_id=erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molest&device=ortis%20porttitor.%20Mau&retweets=citur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis 
```




#### get /friendships/show
returns detailed info about relationship between two users
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| source_id | query | string |  | user id of subject user |  ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel  | 
| source_screen_name | query | string |  | screen_name of subject user | tur, mi sit amet fermentum ultricies, felis felis aliq | 
| target_id | query | string | yes | user id of target user | amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nul | 
| target_screen_name | query | string | yes | screen name of target user |  vel metus et, molestie pretium tortor. Pra | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/show?source_id=%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20&source_screen_name=tur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliq&target_id=amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nul&target_screen_name=%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Pra 
```




### Resource : account
#### get /account/settings
returns settings for user

#### post /account/settings
updates user's settings
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| trend_location_woeid | query | string | the Yahoo! Where On Earth ID to user as defaul tend location |  ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultrici | 
| sleep_time_enabled | query | string | enables/disables sleep time, silencing notifications | um eget luct | 
| start_sleep_time | query | string | the hour that sleep time should begin if enabled | pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin | 
| end_sleep_time | query | string | the hour that sleep time should end if enabled |  vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pr | 
| time_zone | query | string | timezone dates and times should be displayed in | ue ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis  | 
| lang | query | string | language which Twitter should render in for the user |  feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim me | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/settings?trend_location_woeid=%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultrici&sleep_time_enabled=um%20eget%20luct&start_sleep_time=pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin&end_sleep_time=%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pr&time_zone=ue%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20&lang=%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20me 
```




#### post /account/update_delivery_device
sets which device Twitter delivers updates to for user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| device | query | string | yes | must be one of sms, none | estibu | 
| include_entities | query | string |  | whether or not to include entities | ndimentum tellus sagittis at. Nullam vel metus ac quam gravida pellentesque. Nullam ultricies turpis nec dignissim al | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_delivery_device?device=estibu&include_entities=ndimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20ac%20quam%20gravida%20pellentesque.%20Nullam%20ultricies%20turpis%20nec%20dignissim%20al 
```




#### post /account/update_profile
sets values that users ar eable to set under Account tab
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| name | query | string | full name of profile | ula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros i | 
| url | query | string | url associated with profile | eu nunc interdum laoreet a ut dui. Sed eu nulla m | 
| location | query | string | city or country describing where user of account is. | s sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissi | 
| description | query | string | a description of user owning account | uam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget  | 
| include_entities | query | string | whether or not to include entities |  id eros viverra ullamcorper. Fusce nec est | 
| skip_status | query | string | whether or not to include statuses in response | is condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat digniss | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile?name=ula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20i&url=eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20m&location=s%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissi&description=uam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20&include_entities=%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est&skip_status=is%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20digniss 
```




#### post /account/update_profile_background_image
updates user's profile background image
* Request Parameters :
  * Content-Type Accepted : multipart/form-data


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| tile | query | string |  | whether or not to tile background image | r. Mauris vel ultrices erat, at h | 
| use | query | string |  | display background image or not |  amet fermentum ultricies, felis felis ali | 
| include_entities | query | string |  | whether or not to include entities | s, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed variu | 
| skip_status | query | string |  | whether or not to include status in returned user objects | liquam enim, id feugiat magna elit in sapien. Sed malesuada, velit | 
| file | formData | file | yes | image to replace background image of profile | --data-binary ZTI0ODkwOTRmMzYyYmE2MjlhOGYwODUyNzJhMjRhZDkzYTViNmIzYjU5MmUyMjkzYTNmMGIwMGNmMmFhZWM4NzZhYWI5MDI5Njc0OThkYmY1NWNkNmJkY2MwZWZjNjkyMzY4MTAxMTM5OWRmNmZjNGU3MjBjNzNhMDNkNTRiNmE3ZmQwNDdjZGMxZTVlNzNlZDU0NWNjYWEwOTM0MTIzMWJiOWEwYjgwZTliYjkyYzdjYmM4YmM1ZmYzNGNhNzRiYzY2MTZiZjA5YzdkN2E0YTMyNjY1MmQ0MGZiYWU3NjU4ZjU3YzY3ZjJiZDY2NmIwOTJkNWQyZmQwMWE2N2QyMWRlOTA0NTkzNjliY2E0YWE3YzM5OWE3ZGI2NmM3NjgzMjZhMmQwN2NkYjJkMjAzNDVhZTFkYWU3MDM3NjM1NmFjNzhhZmMyNjIxOTZiY2NhY2Q0ZWJhOGRhNjNjZDJmMWQ5MTRiZjk5YTdiYTRlMTAyNDhiMzlhODUxNDg2YTkyMjg4MmViZGQ1ZjFjZjdhNmY2YmIyZTExODNlZTQ2Yjc4OGRhZjg4YzU5NjE5YTFjMWYyNjUxNzY5ZDgzMmEwYjNjNmY2OWQyNzAzZGM5ZGY2OWYyNmFmZDBhNGE5ZmFiZTk4ZTA4Y2NjZDNjMzEzODYwNjI2NWU3MzVmYTZiYmY= | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_background_image?tile=r.%20Mauris%20vel%20ultrices%20erat%2C%20at%20h&use=%20amet%20fermentum%20ultricies%2C%20felis%20felis%20ali&include_entities=s%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20variu&skip_status=liquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit 
Content-Type: multipart/form-data, boundary=57cc276119516
Content-Length: 761
--57cc276119516
content-disposition: form-data; name="file"

--data-binary 
ZTI0ODkwOTRmMzYyYmE2MjlhOGYwODUyNzJhMjRhZDkzYTViNmIzYjU5MmUyMjkzYTNmMGIwMGNmMmFhZWM4NzZhYWI5MDI5Njc0OThkYmY1NWNkNmJkY2MwZWZjNjkyMzY4MTAxMTM5OWRmNmZjNGU3MjBjNzNhMDNkNTRiNmE3ZmQwNDdjZGMxZTVlNzNlZDU0NWNjYWEwOTM0MTIzMWJiOWEwYjgwZTliYjkyYzdjYmM4YmM1ZmYzNGNhNzRiYzY2MTZiZjA5YzdkN2E0YTMyNjY1MmQ0MGZiYWU3NjU4ZjU3YzY3ZjJiZDY2NmIwOTJkNWQyZmQwMWE2N2QyMWRlOTA0NTkzNjliY2E0YWE3YzM5OWE3ZGI2NmM3NjgzMjZhMmQwN2NkYjJkMjAzNDVhZTFkYWU3MDM3NjM1NmFjNzhhZmMyNjIxOTZiY2NhY2Q0ZWJhOGRhNjNjZDJmMWQ5MTRiZjk5YTdiYTRlMTAyNDhiMzlhODUxNDg2YTkyMjg4MmViZGQ1ZjFjZjdhNmY2YmIyZTExODNlZTQ2Yjc4OGRhZjg4YzU5NjE5YTFjMWYyNjUxNzY5ZDgzMmEwYjNjNmY2OWQyNzAzZGM5ZGY2OWYyNmFmZDBhNGE5ZmFiZTk4ZTA4Y2NjZDNjMzEzODYwNjI2NWU3MzVmYTZiYmY=
```




#### post /account/update_profile_colors
sets one or more hex values that controls color scheme
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| profile_background_color | query | string | profile background color | Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi con | 
| profile_link_color | query | string | profile link color | e ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vul | 
| profile_sidebar_border_color | query | string | profile sidebar's border color | re eu facili | 
| profile_sidebar_fill_color | query | string | profile's sidebar background color | posuere eu facilisis nec, tempus ac ipsum. | 
| profile_text_color | query | string | profile text color | i id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molesti | 
| include_entities | query | string | whether or not to include entities | citur, mi sit ame | 
| skip_status | query | string | whether or not to include statuses | ollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehic | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_colors?profile_background_color=Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20con&profile_link_color=e%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vul&profile_sidebar_border_color=re%20eu%20facili&profile_sidebar_fill_color=posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.&profile_text_color=i%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molesti&include_entities=citur%2C%20mi%20sit%20ame&skip_status=ollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehic 
```




#### post /account/update_profile_image
updates user's profile image
* Request Parameters :
  * Content-Type Accepted : multipart/form-data


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| skip_status | query | string |  | whether or not to include statuses | sectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nu | 
| image | formData | file | yes | image to be set as profile image | --data-binary NjVkOTBjYzhhOTliOTlkNjgzYzMzZDNhODg0ODYwZTFlZmRiOWJkMmE2ZTg3ZDQzMjBiMzg0YTk2YTZlYTNkYjg1NGM0MTQzNDkwY2Y2YzQ1Mjc0NWQzNGUyNjc2ODllNGY1NWZhYzU5NDE0NDcwY2UyNGM2MjI0MTZkODMzMTQ5OGE3YWY0NzFjNDVjNDhjZDBiMDg1MTkwOGY2ZjM3YzgzYmUyMWMwNWMzYzdmMDU1NzQ3ZjVmNTVkYmYxMWQxOWZhMGMxMWE1ZDEwZDdmNDJhNGE0ZGQxZjljNzk0Mjk5N2E3NzgyNTE1ODQ2NmY0MzAzYTU2Yzc5MTgwNjM1MTY1NmZiOTNhMTUzMTc3MzMxNTM0ZGE3ZWMzYjg1YzM4YWVkZTNmMWI2NGFjMGYwMTg4MTdiOTZkMmM1ZGQ1ZWZhOTJkZmQxMTY0ZjQzNTJkMjg4MTEzMzM2NmUzZGE5N2RiNjg3NDhlZDc3OTVhODcwMWJlZDA3MGFkZTdkYWQwOWFhYjVlZjg0NzdiZDI1MGRlMzdkY2ZmMzdkMDViNDIxZGEyM2Y2MzNlZmE0MjUzNWVkNmVhOWIxNmYwNDgwYTQ3NzAwNDQ5Njg0MzNiYjk0YjI2Y2Y4OWY5YWFkNzZlNjM0ZjQ4YTJjNWYyYjBlOWQ3MjA0NmY4ZjI5Njk0OGQ= | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_image?skip_status=sectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nu 
Content-Type: multipart/form-data, boundary=57cc27611b765
Content-Length: 762
--57cc27611b765
content-disposition: form-data; name="image"

--data-binary 
NjVkOTBjYzhhOTliOTlkNjgzYzMzZDNhODg0ODYwZTFlZmRiOWJkMmE2ZTg3ZDQzMjBiMzg0YTk2YTZlYTNkYjg1NGM0MTQzNDkwY2Y2YzQ1Mjc0NWQzNGUyNjc2ODllNGY1NWZhYzU5NDE0NDcwY2UyNGM2MjI0MTZkODMzMTQ5OGE3YWY0NzFjNDVjNDhjZDBiMDg1MTkwOGY2ZjM3YzgzYmUyMWMwNWMzYzdmMDU1NzQ3ZjVmNTVkYmYxMWQxOWZhMGMxMWE1ZDEwZDdmNDJhNGE0ZGQxZjljNzk0Mjk5N2E3NzgyNTE1ODQ2NmY0MzAzYTU2Yzc5MTgwNjM1MTY1NmZiOTNhMTUzMTc3MzMxNTM0ZGE3ZWMzYjg1YzM4YWVkZTNmMWI2NGFjMGYwMTg4MTdiOTZkMmM1ZGQ1ZWZhOTJkZmQxMTY0ZjQzNTJkMjg4MTEzMzM2NmUzZGE5N2RiNjg3NDhlZDc3OTVhODcwMWJlZDA3MGFkZTdkYWQwOWFhYjVlZjg0NzdiZDI1MGRlMzdkY2ZmMzdkMDViNDIxZGEyM2Y2MzNlZmE0MjUzNWVkNmVhOWIxNmYwNDgwYTQ3NzAwNDQ5Njg0MzNiYjk0YjI2Y2Y4OWY5YWFkNzZlNjM0ZjQ4YTJjNWYyYjBlOWQ3MjA0NmY4ZjI5Njk0OGQ=
```




### Resource : blocks
#### get /blocks/list
disallows retweets and device notifications from a user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| include_entities | query | string | whether or not to include entities | t enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar met | 
| skip_status | query | string | whether or not to include statuses in response | congue eros. Lorem ipsum dolor sit amet, con | 
| cursor | query | string | breaks block of user to be broken up into pages | ulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ult | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/blocks/list?include_entities=t%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20met&skip_status=congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20con&cursor=ulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ult 
```




#### get /blocks/ids
returns array of numeric user ids of blocked users
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| stringify_ids | query | string | returns array of numeric IDs as string IDs | im mi eget lacinia. In nisi odio, porta ut quam non, imperdiet variu | 
| cursor | query | string | breaks up block of user IDs into pages | u bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecen | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/blocks/ids?stringify_ids=im%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20variu&cursor=u%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecen 
```




#### post /blocks/create
blocks the specified user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | screen name of user to be blocked | . Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque en | 
| user_id | query | string | yes | ID of user to be blocked | elit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec es | 
| include_entities | query | string |  | whether or not to include entities | nc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ul | 
| skip_status | query | string |  | whether or not to skip statuses | sim augue interdum sed. Vestibulum eget luctus metu | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/blocks/create?screen_name=.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20en&user_id=elit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20es&include_entities=nc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ul&skip_status=sim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metu 
```




#### post /blocks/destroy
un-blocks the specified user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | screen name of user to be un-blocked | porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti | 
| user_id | query | string | yes | ID of user to be un-blocked | rem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum sapien, bibendum at placerat sit amet, volutpat sed  | 
| include_entities | query | string |  | whether or not to include entities | s, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ul | 
| skip_status | query | string |  | whether or not to skip statuses |  sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu  | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/blocks/destroy?screen_name=porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti&user_id=rem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20&include_entities=s%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ul&skip_status=%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20 
```




### Resource : users
#### get /users/lookup
returns fully-hydrated user objects up to 100
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | screen name of user to lookup | ismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dign | 
| user_id | query | string | ID of user to lookup | eet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellent | 
| include_entities | query | string | whether or not to include entities | ere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ip | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/lookup?screen_name=ismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dign&user_id=eet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellent&include_entities=ere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ip 
```




#### get /users/show
returns a variety of info about specified user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | screen name of user to be shown |  ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volu | 
| user_id | query | string | yes | ID of user to be shown | issim, imperdiet nunc m | 
| include_entities | query | string |  | whether or not to include entities |  Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasel | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/show?screen_name=%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volu&user_id=issim%2C%20imperdiet%20nunc%20m&include_entities=%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasel 
```




#### get /users/search
simple relevance-based user search
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| q | query | string | yes | the search query to run against people search | iquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros i | 
| page | query | string |  | specifies the page of results to receive | ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet | 
| count | query | string |  | number of people to return per page | t veli | 
| include_entities | query | string |  | whether or not to include entities | lisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consecte | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/search?q=iquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20i&page=ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet&count=t%20veli&include_entities=lisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consecte 
```




#### get /users/contributees
collection of users specified user can contribute to
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | screen name of user that is contributed to |  sit amet f | 
| user_id | query | string | yes | ID of user to that is contributed to | , felis felis aliquam enim, id feugiat magna elit in sapien. | 
| include_entities | query | string |  | whether or not to include entities | nt interdum fringilla  | 
| skip_status | query | string |  | whether or not to skip statuses | tium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/contributees?screen_name=%20sit%20amet%20f&user_id=%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.&include_entities=nt%20interdum%20fringilla%20&skip_status=tium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C 
```




#### get /users/contributors
collection of users that can contribute to specified account
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | screen name of user contributing | , iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit  | 
| user_id | query | string | yes | ID of user contributing | lestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus | 
| include_entities | query | string |  | whether or not to include entities | . Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia | 
| skip_status | query | string |  | whether or not to skip statuses | etus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fring | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/contributors?screen_name=%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20&user_id=lestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus&include_entities=.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia&skip_status=etus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fring 
```




#### post /users/report_spam
Returna users report spam
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | The ID or screen_name of the user you want to report as a spammer |  Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eg | 
| user_id | query | string | The ID of the user you want to report as a spammer | at mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Susp | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/users/report_spam?screen_name=%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eg&user_id=at%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Susp 
```




### Resource : geo
#### get /geo/id/{place_id}
Returns all the information about a know place
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| place_id | path | string | yes | A place in the world | olestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque po | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/id/olestie%2C+eros+in+pretium+pulvinar%2C+est+leo+vehicula+lectus%2C+a+cursus+neque+erat+vitae+odio.+Sed+sed+neque+dignissim%2C+imperdiet+nunc+maximus%2C+finibus+erat.+Proin+id+scelerisque+ipsum.+Quisque+po 
```




#### get /geo/reverse_geoncode
Given a latitude and a longitude, searches for up to 20 places that can be used as a place_id when updatting a status
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| lat | query | string | yes | The latitude to search around | licitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, cons | 
| long | query | string | yes | The longtitude to search around | ur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est qu | 
| accuracy | query | string |  | A hint on region in which to search | t amet, volutpat sed lacus. Nulla justo arcu, sodal | 
| granularity | query | string |  | This is the minimal granularity of place types to return | da, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, nec condimentum tellus sagittis at. Nullam vel metus  | 
| max_results | query | string |  | A hint as to the number of results to return | ur pulvinar metu | 
| callback | query | string |  | If supplied, the responses will use the JSON format with a callback of the given name | scipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar  | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/reverse_geoncode?lat=licitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20cons&long=ur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20qu&accuracy=t%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodal&granularity=da%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20&max_results=ur%20pulvinar%20metu&callback=scipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20 
```




#### get /geo/search
Search for places that can be attached to a statuses/updates
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| lat | query | string | yes | The latitude to search around | ristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, port | 
| long | query | string | yes | The longtitude to search around | itur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bib | 
| query | query | string | yes | Free-form text to match against while executing a geo-based query | llamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nu | 
| ip | query | string | yes | An Ip address | ta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vu | 
| accuracy | query | string |  | A hint on region in which to search | mpus ac ip | 
| granularity | query | string |  | This is the minimal granularity of place types to return | apien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse j | 
| contained_within | query | string |  | This is the place_id which you would like to restrict the search results to | consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapie | 
| attribute:street_address | query | string |  | This parameter searches for places which have this givven street address | s lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pul | 
| callback | query | string |  | If supplied, the responses will use the JSON format with a callback of the given name | posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam co | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/search?lat=ristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20port&long=itur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bib&query=llamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nu&ip=ta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vu&accuracy=mpus%20ac%20ip&granularity=apien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20j&contained_within=consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapie&attribute%3Astreet_address=s%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pul&callback=posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20co 
```




#### get /geo/similar_places
Locates places near the given coordinates which are similar in name
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| lat | query | string | yes | The latitude to search around | sque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspen | 
| long | query | string | yes | The longtitude to search around | nissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec q | 
| name | query | string | yes | The name a place is known as | vallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neq | 
| contained_within | query | string |  | This is the place_id which you would like to restrict the search results to | alesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec | 
| attribute:street_address | query | string |  | This parameter searches for places which have this givven street address | lis sit amet ipsum euismod ull | 
| callback | query | string |  | If supplied, the responses will use the JSON format with a callback of the given name | dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui  | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/similar_places?lat=sque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspen&long=nissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20q&name=vallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neq&contained_within=alesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec&attribute%3Astreet_address=lis%20sit%20amet%20ipsum%20euismod%20ull&callback=dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20 
```




#### get /geo/places
Create a new place object at the given latitude and logitude
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| lat | query | string | yes | The latitude to search around | ugiat | 
| long | query | string | yes | The longtitude to search around | nibh eu | 
| name | query | string | yes | The name a place is known as | am. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget | 
| token | query | string | yes | The token found in the response from geo/similar_places | hicula lectus, a cursus neque erat vitae odio. S | 
| contained_within | query | string |  | This is the place_id which you would like to restrict the search results to | lerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulp | 
| attribute:street_address | query | string |  | This parameter searches for places which have this givven street address | pretium sodales. Etiam dignissim risus non felis scelerisque ali | 
| callback | query | string |  | If supplied, the responses will use the JSON format with a callback of the given name | nec est quam. Pellent | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/places?lat=ugiat&long=nibh%20eu&name=am.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget&token=hicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20S&contained_within=lerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulp&attribute%3Astreet_address=pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20ali&callback=nec%20est%20quam.%20Pellent 
```




### Resource : trends
#### get /trends/place
Returns the top 10 trending topics for a specific WOEID
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | query | string | yes | The yahoo where on earch id | t amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis  | 
| exclude | query | string | yes | Setting this equal to hashtages will remove all hashtages from the trends list |  Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus ur | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/trends/place?id=t%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20&exclude=%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20ur 
```




#### get /trends/available
Returns the availability


#### get /trends/closest
Returns the location that Twitter has trending topic information for
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| lat | query | string | yes | If provided with a long parameter the available trend locations wil be stored by distance | nec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, i | 
| long | query | string | yes | If provided with a lat parameters the available trend locations will be sorted by distance |  non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/trends/closest?lat=nec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20i&long=%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C 
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

