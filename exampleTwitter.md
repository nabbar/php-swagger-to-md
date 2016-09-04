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
  * [Resource : Resource : statuses](#resource--statuses)
    * [Operation : get /statuses/mentions_timeline](#get-statusesmentions_timeline)
    * [Operation : get /statuses/user_timeline](#get-statusesuser_timeline)
    * [Operation : get /statuses/home_timeline](#get-statuseshome_timeline)
    * [Operation : post /statuses/retweets/{id}](#post-statusesretweetsid)
    * [Operation : get /statuses/show/{id}](#get-statusesshowid)
    * [Operation : post /statuses/destroy/{id}](#post-statusesdestroyid)
    * [Operation : post /statuses/update](#post-statusesupdate)
    * [Operation : get /statuses/oembed](#get-statusesoembed)
  * [Resource : Resource : lists](#resource--lists)
    * [Operation : get /lists/list](#get-listslist)
    * [Operation : get /lists/statuses](#get-listsstatuses)
    * [Operation : get /lists/members/destroy](#get-listsmembersdestroy)
    * [Operation : get /lists/memberships](#get-listsmemberships)
    * [Operation : get /lists/subscribers](#get-listssubscribers)
    * [Operation : post /lists/subscribers/create](#post-listssubscriberscreate)
    * [Operation : get /lists/subscribers/show](#get-listssubscribersshow)
    * [Operation : get /lists/subscribers/destroy](#get-listssubscribersdestroy)
    * [Operation : get /lists/members/create_all](#get-listsmemberscreate_all)
    * [Operation : post /lists/destroy](#post-listsdestroy)
    * [Operation : post /lists/update](#post-listsupdate)
    * [Operation : post /lists/create](#post-listscreate)
    * [Operation : get /lists/show](#get-listsshow)
    * [Operation : get /lists/subscriptions](#get-listssubscriptions)
  * [Resource : Resource : list](#resource--list)
    * [Operation : get /list/members/show](#get-listmembersshow)
    * [Operation : get /list/members](#get-listmembers)
    * [Operation : post /list/members/create](#post-listmemberscreate)
    * [Operation : get /list/members/destroy_all](#get-listmembersdestroy_all)
  * [Resource : Resource : direct_messages](#resource--direct_messages)
    * [Operation : get /direct_messages/sent](#get-direct_messagessent)
    * [Operation : get /direct_messages/show](#get-direct_messagesshow)
    * [Operation : get /direct_messages](#get-direct_messages)
    * [Operation : post /direct_messages/destroy](#post-direct_messagesdestroy)
    * [Operation : post /direct_messages/new](#post-direct_messagesnew)
  * [Resource : Resource : search](#resource--search)
    * [Operation : get /search/tweets](#get-searchtweets)
  * [Resource : Resource : saved_searches](#resource--saved_searches)
    * [Operation : get /saved_searches/list](#get-saved_searcheslist)
    * [Operation : get /saved_searches/show/{id}](#get-saved_searchesshowid)
    * [Operation : post /saved_searches/create](#post-saved_searchescreate)
    * [Operation : post /saved_searches/destroy/{id}](#post-saved_searchesdestroyid)
  * [Resource : Resource : friends](#resource--friends)
    * [Operation : get /friends/ids](#get-friendsids)
  * [Resource : Resource : followers](#resource--followers)
    * [Operation : get /followers/ids](#get-followersids)
  * [Resource : Resource : friendships](#resource--friendships)
    * [Operation : get /friendships/incoming](#get-friendshipsincoming)
    * [Operation : get /friendships/outgoing](#get-friendshipsoutgoing)
    * [Operation : post /friendships/create](#post-friendshipscreate)
    * [Operation : post /friendships/destroy](#post-friendshipsdestroy)
    * [Operation : post /friendships/update](#post-friendshipsupdate)
    * [Operation : get /friendships/show](#get-friendshipsshow)
  * [Resource : Resource : account](#resource--account)
    * [Operation : get /account/settings](#get-accountsettings)
    * [Operation : post /account/settings](#post-accountsettings)
    * [Operation : post /account/update_delivery_device](#post-accountupdate_delivery_device)
    * [Operation : post /account/update_profile](#post-accountupdate_profile)
    * [Operation : post /account/update_profile_background_image](#post-accountupdate_profile_background_image)
    * [Operation : post /account/update_profile_colors](#post-accountupdate_profile_colors)
    * [Operation : post /account/update_profile_image](#post-accountupdate_profile_image)
  * [Resource : Resource : blocks](#resource--blocks)
    * [Operation : get /blocks/list](#get-blockslist)
    * [Operation : get /blocks/ids](#get-blocksids)
    * [Operation : post /blocks/create](#post-blockscreate)
    * [Operation : post /blocks/destroy](#post-blocksdestroy)
  * [Resource : Resource : users](#resource--users)
    * [Operation : get /users/lookup](#get-userslookup)
    * [Operation : get /users/show](#get-usersshow)
    * [Operation : get /users/search](#get-userssearch)
    * [Operation : get /users/contributees](#get-userscontributees)
    * [Operation : get /users/contributors](#get-userscontributors)
    * [Operation : post /users/report_spam](#post-usersreport_spam)
  * [Resource : Resource : geo](#resource--geo)
    * [Operation : get /geo/id/{place_id}](#get-geoidplace_id)
    * [Operation : get /geo/reverse_geoncode](#get-georeverse_geoncode)
    * [Operation : get /geo/search](#get-geosearch)
    * [Operation : get /geo/similar_places](#get-geosimilar_places)
    * [Operation : get /geo/places](#get-geoplaces)
  * [Resource : Resource : trends](#resource--trends)
    * [Operation : get /trends/place](#get-trendsplace)
    * [Operation : get /trends/available](#get-trendsavailable)
    * [Operation : get /trends/closest](#get-trendsclosest)
  * [Resource : Resource : help](#resource--help)
    * [Operation : get /help/configuration](#get-helpconfiguration)
    * [Operation : get /help/languages](#get-helplanguages)
    * [Operation : get /help/privacy](#get-helpprivacy)
    * [Operation : get /help/tos](#get-helptos)
  * [Resource : Resource : application](#resource--application)
    * [Operation : get /application/rate_limit_status](#get-applicationrate_limit_status)
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
| count | query | string | Specifies the number of tweets to try and retrieve | ngue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit | 
| since_id | query | string | Returns result with an ID greater than the specified ID |  ut, suscipit est. Eti | 
| max_id | query | string | Returns results with an ID less than or equal to the specified ID | i odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui ni | 
| trim_user | query | string | When set to either true, t or 1, each tweet returned in a timeline will include a user object | g elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu | 
| contributor_details | query | string | This parameter enhances the contributors element of the status response | isque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales,  | 
| include_entities | query | string | The entities node will be disincluded when set to false | lit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictu | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/mentions_timeline?count=ngue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit&since_id=%20ut%2C%20suscipit%20est.%20Eti&max_id=i%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20ni&trim_user=g%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu&contributor_details=isque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20&include_entities=lit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictu 
```





#### get /statuses/user_timeline
Returns a collection of the most recent Tweets posted by the User
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| count | query | string | Specifies the number of tweets to try and retrieve | et est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae | 
| since_id | query | string | Returns result with an ID greater than the specified ID | tium sodales. E | 
| max_id | query | string | Returns results with an ID less than or equal to the specified ID | avida ornare nibh sollicitud | 
| trim_user | query | string | When set to either true, t or 1, each tweet returned in a timeline will include a user object | , pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam fi | 
| exclude_replies | query | boolean | This paramters will prevent from appearing in the returned timeline | 0 | 
| contributor_details | query | boolean | This paramters enhances the contributors element of the status response to include the screen_name of the contributor | 1 | 
| include_rts | query | boolean | When set to false, the timeline will strip any native retweet | 0 | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/user_timeline?count=et%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae&since_id=tium%20sodales.%20E&max_id=avida%20ornare%20nibh%20sollicitud&trim_user=%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20fi&exclude_replies=0&contributor_details=1&include_rts=0 
```





#### get /statuses/home_timeline
Returns a collection of the most recent Tweets
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| since_id | query | string | Returns result with an ID greater than the specified ID | felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, nec condimen | 
| max_id | query | string | Returns results with an ID less than or equal to the specified ID |  vulputate odio. Donec quis facilisis arcu, vel ultri | 
| trim_user | query | string | When set to either true, t or 1, each tweet returned in a timeline will include a user object |  mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius pur | 
| exclude_replies | query | boolean | This paramters will prevent from appearing in the returned timeline | 0 | 
| contributor_details | query | boolean | This paramters enhances the contributors element of the status response to include the screen_name of the contributor | 1 | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/home_timeline?since_id=felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimen&max_id=%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultri&trim_user=%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20pur&exclude_replies=0&contributor_details=1 
```





#### post /statuses/retweets/{id}
Retweens a tweet
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | path | string | yes | The numerical ID of the desired status | uctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ips | 
| trim_user | query | string |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object | suada, | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/retweets/uctus+ante+nec%2C+volutpat+dictum+neque.+Donec+molestie%2C+eros+in+pretium+pulvinar%2C+est+leo+vehicula+lectus%2C+a+cursus+neque+erat+vitae+odio.+Sed+sed+neque+dignissim%2C+imperdiet+nunc+maximus%2C+finibus+erat.+Proin+id+scelerisque+ips?trim_user=suada%2C 
```





#### get /statuses/show/{id}
Retruns a single Tweet
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | path | string | yes | The numerical ID of the desired status |  quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis | 
| trim_user | query | string |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object | , sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin v | 
| include_my_retweet | query | string | yes | When set to either true, t or 1, any Tweets returned that have been retweeted by the authenticating | etu | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | onsequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec mole | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/show/+quam+non%2C+imperdiet+varius+orci.+Donec+consectetur+sed+ante+sit+amet+sagittis.+In+non+lectus+eu+nunc+interdum+laoreet+a+ut+dui.+Sed+eu+nulla+malesuada%2C+egestas+velit+id%2C+semper+felis.+Fusce+ac+dui+nisl.+Donec+ultricies+nibh+eu+leo+consectetur+congue+quis?trim_user=%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20v&include_my_retweet=etu&include_entities=onsequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20mole 
```





#### post /statuses/destroy/{id}
Destroys the status specified by the required ID parameter
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | path | string | yes | The numerical ID of the desired status | dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperd | 
| trim_user | query | string |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object | , mi sit amet fermentum ultricies, felis felis | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/destroy/dignissim%2C+tincidunt+justo+quis%2C+iaculis+odio.+Mauris+volutpat+dignissim+mi+eget+lacinia.+In+nisi+odio%2C+porta+ut+quam+non%2C+imperd?trim_user=%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis 
```





#### post /statuses/update
Updates the authenticating user's status
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| status | query | string | yes | The text of your status update | s, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Se | 
| in_reply_to_status_id | query | string |  | The ID of an existing status | rbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget lu | 
| lat | query | string |  | The latitude of the location | a quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet s | 
| long | query | string |  | The longitude of the location | agna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh solli | 
| place_id | query | string |  | A place in the world | et a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam c | 
| display_coordinates | query | string |  | Whether or not to put a pin on the exact coordinates a tweet | rcu, et | 
| trim_user | query | string |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object | it amet sagitt | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/update?status=s%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Se&in_reply_to_status_id=rbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20lu&lat=a%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20s&long=agna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20solli&place_id=et%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20c&display_coordinates=rcu%2C%20et&trim_user=it%20amet%20sagitt 
```





#### get /statuses/oembed
Returns information allowing the creation of an embedded representation
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | query | string | yes | The tweet/status id to return embed code for | bh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, nec co | 
| url | query | string | yes | The encoded URL of the Tweet status to be embedded | trices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non | 
| maxwidth | query | string |  | The maximum width in pixels that the embed should be rendered at | sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est.  | 
| hide_media | query | string |  | Specifies whether the embedded tweet should automatically show the original message in the case that the embedded Tweet is a reply | m. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fr | 
| hide_thread | query | string |  | Specifies whether the embedded Tweet html should include a 'script' element pointing to widgets.js | felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim met | 
| align | query | string |  | Specifies whether the embedded Tweet should be left aligned | din varius purus, nec condimentum tellus sagittis at. Nullam vel metus ac quam gravida pellentes | 
| related | query | string |  | A value for the TWT related parameters | u dapibus vehicu | 
| lang | query | string |  | Languages code for the rendered embed | st molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis fa | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/oembed?id=bh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20co&url=trices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non&maxwidth=sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20&hide_media=m.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fr&hide_thread=felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20met&align=din%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20ac%20quam%20gravida%20pellentes&related=u%20dapibus%20vehicu&lang=st%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20fa 
```





### Resource : lists
#### get /lists/list
Return all lists the authenticating or specified user subscribes to, including their own.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | The screen name of the user for whom to return results for |  justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula n | 
| user_id | query | string | yes | The ID of the user for whom to return results for | sellus faucibus urna arcu, et dignissim  | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/list?screen_name=%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20n&user_id=sellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20 
```





#### get /lists/statuses
Returns a timeline of tweets authored by memebers of the specified list
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | onvallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Done | 
| slug | query | string | yes | You can identify a list by its slug instead of its numerical id | x. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus s | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | d ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus  | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | es, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus  | 
| since_id | query | string |  | Returns results with an ID greater than the sepcified ID | e aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas | 
| max_id | query | string |  | Returns results with an ID less than or equal to the specified ID | c ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pelle | 
| count | query | string |  | Specifies the number of results to retrieve per page | s sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincid | 
| include_entities | query | string |  | Entities are ON by default |  ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id | 
| include_rts | query | string |  | When set to either true, t or 1, the list timeline will contain native retweets in addition to the standard stream of tweets | it amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, e | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/statuses?list_id=onvallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Done&slug=x.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20s&owner_screen_name=d%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20&owner_id=es%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20&since_id=e%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas&max_id=c%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pelle&count=s%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincid&include_entities=%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id&include_rts=it%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20e 
```





#### get /lists/members/destroy
Returns the list of memebers destroy
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | ula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium | 
| slug | query | string | yes | You can identify a list by its slug instrad of its numerical id | n, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | am dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arc | 
| user_id | query | string |  | The id of the user for whom to remove from the list |  vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh soll | 
| screen_name | query | string |  | The screen name of the user for whom to remove from the list | rbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget  | 
| owner_id | query | string |  | The is of the user who wons the list being requested by a slug | , at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapi | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/members/destroy?list_id=ula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium&slug=n%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales&owner_screen_name=am%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arc&user_id=%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20soll&screen_name=rbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20&owner_id=%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapi 
```





#### get /lists/memberships
Returns the lists of the specified user has been added to
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| user_id | query | string | The id of the user for whom to return results for | amus id  | 
| screen_name | query | string | The screen name of the user for whom to return results for | , congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna  | 
| cursor | query | string | Breaks the results into pages | rtor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus | 
| filter_to_owned_lists | query | string | When set to true, t or 1, will return just lists the authenticating user owns |  accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/memberships?user_id=amus%20id%20&screen_name=%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20&cursor=rtor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus&filter_to_owned_lists=%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius 
```





#### get /lists/subscribers
Returns the subscribers of the specified list
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | suere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus | 
| slug | query | string | yes | You can identify a list by its slug insted of its numerical id | isis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis  | 
| owner_screen_name | query | string |  | the screen name of the user who owns the list being requested by a slug | rci, gravida ornare nibh sollicitudin et. Cu | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | Fusce nec est quam. Pellentesque vulput | 
| cursor | query | string |  | Breaks the results into pages | g elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam eni | 
| include_entities | query | string |  | Wehn set to either true, t or 1 | dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facili | 
| skip_status | query | string |  | When set to either true, t or 1 | , vel ultrices augue. Suspendisse potenti. Mauris vehicul | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers?list_id=suere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus&slug=isis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20&owner_screen_name=rci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Cu&owner_id=Fusce%20nec%20est%20quam.%20Pellentesque%20vulput&cursor=g%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20eni&include_entities=dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facili&skip_status=%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicul 
```





#### post /lists/subscribers/create
Subscribes the authenticated user to the specified list
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list |  sit amet sagittis. In non lectus eu nunc interdum laoreet a ut  | 
| slug | query | string | yes | You can identify a list being requested by a slug |  neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. | 
| owner_screen_name | query | string |  | the screen name of the user who owns the list being requested by a slug | arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem,  | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | . Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/subscribers/create?list_id=%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20&slug=%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.&owner_screen_name=arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20&owner_id=.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar 
```





#### get /lists/subscribers/show
Check if the specified user is a subscriber of the specified list
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | sit amet fermentum | 
| slug | query | string | yes | You can identify a list being requested by a slug | rius purus, nec condimentum tellus sagittis at. Nullam vel metus ac quam gravida pellentesq | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | tetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. | 
| user_id | query | string |  | The id of the user for whom to remove from the list | t, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, vo | 
| screen_name | query | string |  | The screen name of the user for whom to remove from the list | dales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, | 
| owner_id | query | string |  | The is of the user who wons the list being requested by a slug | m. Quisque porta mauris nec massa egestas | 
| include_entities | query | string |  | Wehn set to either true, t or 1 |  nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretiu | 
| skip_status | query | string |  | When set to either true, t or 1 | felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspend | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers/show?list_id=sit%20amet%20fermentum&slug=rius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20ac%20quam%20gravida%20pellentesq&owner_screen_name=tetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.&user_id=t%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20vo&screen_name=dales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C&owner_id=m.%20Quisque%20porta%20mauris%20nec%20massa%20egestas&include_entities=%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretiu&skip_status=felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspend 
```





#### get /lists/subscribers/destroy
Returns list of subscribers destroy
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | stique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus e | 
| slug | query | string | yes | You can identify a list being requested by a slug |  mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem  | 
| owner_screen_name | query | string |  | the screen name of the user who owns the list being requested by a slug | ices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus mas | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | m. Nunc sed enim nec tellus accumsan tincidunt. Aliq | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers/destroy?list_id=stique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20e&slug=%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20&owner_screen_name=ices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20mas&owner_id=m.%20Nunc%20sed%20enim%20nec%20tellus%20accumsan%20tincidunt.%20Aliq 
```





#### get /lists/members/create_all
Returns lists of members create_all
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | s vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis ali | 
| slug | query | string | yes | You can identify a list being requested by a slug | sectetur congue quis nec tellus. Morbi  | 
| owner_screen_name | query | string |  | the screen name of the user who owns the list being requested by a slug | ellentesque. Nullam ultricies turpis ne | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | bus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus  | 
| user_id | query | string |  | The id of the user for whom to remove from the list | rat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam | 
| screen_name | query | string |  | The screen name of the user for whom to remove from the list | ultricies nibh eu leo consectetur congue quis nec | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/members/create_all?list_id=s%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20ali&slug=sectetur%20congue%20quis%20nec%20tellus.%20Morbi%20&owner_screen_name=ellentesque.%20Nullam%20ultricies%20turpis%20ne&owner_id=bus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20&user_id=rat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam&screen_name=ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec 
```





#### post /lists/destroy
Returns list of destroy
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | ec. Vestibulum elementum felis sit amet ipsum eui | 
| slug | query | string | yes | You can identify a list being requested by a slug | nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendr | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | usto quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut qua | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | inar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/destroy?list_id=ec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20eui&slug=nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendr&owner_screen_name=usto%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20qua&owner_id=inar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C 
```





#### post /lists/update
Returns lists of updates
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | us ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximu | 
| slug | query | string | yes | You can identify a list being requested by a slug | . Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dol | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | eros. Mauris sollicitudin varius purus, nec condimentum tellus sagittis at. Nullam vel metus ac quam gravida pellentesque. Nullam ultric | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug |  velit eu dap | 
| name | query | string |  | The name for the list | onec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. | 
| mode | query | string |  | Whether your list is public or private | dum to | 
| description | query | string |  | The description to give the list | rabitur pulvinar metus massa, malesuada facilisis  | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/update?list_id=us%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximu&slug=.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dol&owner_screen_name=eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20ac%20quam%20gravida%20pellentesque.%20Nullam%20ultric&owner_id=%20velit%20eu%20dap&name=onec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.&mode=dum%20to&description=rabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20 
```





#### post /lists/create
Returns list of create
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| name | query | string | The name for the list | orem ipsum dolor sit amet, consectetu | 
| mode | query | string | Whether your list is public or private | llamcorper. Phasellus sit amet ve | 
| description | query | string | The description to give the list | sse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sod | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/create?name=orem%20ipsum%20dolor%20sit%20amet%2C%20consectetu&mode=llamcorper.%20Phasellus%20sit%20amet%20ve&description=sse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sod 
```





#### get /lists/show
Returns list of show
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | rdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur con | 
| slug | query | string | yes | You can identify a list being requested by a slug | obortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare ni | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proi | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | e sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augu | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/show?list_id=rdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20con&slug=obortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20ni&owner_screen_name=elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proi&owner_id=e%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augu 
```





#### get /lists/subscriptions
Returns list of subscriptions
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | The screen name of the user | lis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet | 
| user_id | query | string | The id of the user for whom to return results for | stibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pr | 
| count | query | string | The amount of results to return per page | ar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvina | 
| cursor | query | string | Breaks the results into pages | lutpat sed lacus. Nulla justo arcu,  | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscriptions?screen_name=lis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet&user_id=stibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pr&count=ar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvina&cursor=lutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20 
```





### Resource : list
#### get /list/members/show
Check if the specified user is a member of the specified list
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list |  ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapi | 
| slug | query | string | yes | You can identify a list being requested by a slug | udin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, | 
| user_id | query | string |  | The id of the user for whom to remove from the list | andit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing | 
| screen_name | query | string |  | The screen name of the user for whom to remove from the list | quam en | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | nec dignissim aliquam. Nunc sed enim nec | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | uet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, vol | 
| include_entities | query | string |  | Wehn set to either true, t or 1 | la justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie | 
| skip_status | query | string |  | When set to either true, t or 1 | enean | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members/show?list_id=%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapi&slug=udin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C&user_id=andit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing&screen_name=quam%20en&owner_screen_name=nec%20dignissim%20aliquam.%20Nunc%20sed%20enim%20nec&owner_id=uet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20vol&include_entities=la%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie&skip_status=enean 
```





#### get /list/members
Returns the members of the specified list
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | imus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec  | 
| slug | query | string | yes | You can identify a list being requested by a slug | allis eu ligula non consequat. Pellentesque elit libero, f | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | ellus faucibus urna arcu | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices aug | 
| include_entities | query | string |  | Wehn set to either true, t or 1 | pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus | 
| skip_status | query | string |  | When set to either true, t or 1 | volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. | 
| cursor | query | string |  | Breaks the results into pages |  et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis  | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members?list_id=imus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20&slug=allis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20f&owner_screen_name=ellus%20faucibus%20urna%20arcu&owner_id=nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20aug&include_entities=pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus&skip_status=volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.&cursor=%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20 
```





#### post /list/members/create
Returns list of members create
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | uismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim  | 
| slug | query | string | yes | You can identify a list being requested by a slug | ibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdu | 
| screen_name | query | string |  | The screen name of the user for whom to remove from the list |  metus ac quam gravida pellentesque. Nullam ult | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | sum. Quisque porta mauris nec massa egestas, sed mo | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | ces nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus fau | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/list/members/create?list_id=uismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20&slug=ibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdu&screen_name=%20metus%20ac%20quam%20gravida%20pellentesque.%20Nullam%20ult&owner_screen_name=sum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mo&owner_id=ces%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20fau 
```





#### get /list/members/destroy_all
Returns lists of destroy all
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list |  cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aen | 
| slug | query | string | yes | You can identify a list being requested by a slug | ie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus ne | 
| user_id | query | string |  | The id of the user for whom to remove from the list | pibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan | 
| screen_name | query | string |  | The screen name of the user for whom to remove from the list | tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id f | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | ibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut moles | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | e nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, co | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members/destroy_all?list_id=%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aen&slug=ie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20ne&user_id=pibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan&screen_name=tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20f&owner_screen_name=ibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20moles&owner_id=e%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20co 
```





### Resource : direct_messages
#### get /direct_messages/sent
return 20 most recent direct messages sent
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Example |  
| :---: | :---: | :---: | :--- |  
| since_id | query | string | lis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdi | 
| max_id | query | string | nim metus in eros. Mauris sollicitudin | 
| count | query | string | fficitur, mi si | 
| page | query | string | , felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mau | 
| include_entities | query | string | c, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages/sent?since_id=lis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdi&max_id=nim%20metus%20in%20eros.%20Mauris%20sollicitudin&count=fficitur%2C%20mi%20si&page=%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mau&include_entities=c%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C 
```





#### get /direct_messages/show
returns a single direct message specified by an id
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | query | string | yes | ID of direct message |  ullamcorper. Fusce nec est quam. Pellentesque vulputat | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages/show?id=%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputat 
```





#### get /direct_messages
return 20 most recent direct messages sent to user
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| since_id | query | string | return results with ID greater than specified | odales. Etiam dignissim risus non felis scelerisque aliquet | 
| max_id | query | string | returns results with an ID less than/equal to specified ID |  quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius  | 
| include_entities | query | string | whether or not to include entities | e enim m | 
| skip_status | query | string | whether or not to include status | ctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mau | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages?since_id=odales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet&max_id=%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20&include_entities=e%20enim%20m&skip_status=ctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mau 
```





#### post /direct_messages/destroy
destroys direct messages specified in required ID
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | query | string | yes | ID of direct message to delete | egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lore | 
| include_entities | query | string |  | whether or not to include entities | m nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris ve | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/direct_messages/destroy?id=egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lore&include_entities=m%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20ve 
```





#### post /direct_messages/new
sends a new direct message to specified user
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user_id | query | string | yes | description | piscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliq | 
| screen_name | query | string |  | screen name of user receiving message | ibendum orci. Sed eros massa, vehicula quis condimentum eget, tristiq | 
| text | query | string | yes | text of your direct message |  maximus,  | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/direct_messages/new?user_id=piscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliq&screen_name=ibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristiq&text=%20maximus%2C%20 
```





### Resource : search
#### get /search/tweets
returns collection of relevant Tweets matching query
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| q | query | string | yes | URL-encoded search query of 500 characters max | estie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lo | 
| geocode | query | string |  | returns tweets by users located within given radius | ing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accum | 
| lang | query | string |  | restricts tweets to a given language | tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat.  | 
| locale | query | string |  | language of query you are sending |  | 
| result_type | query | string |  | specifies type of search results you prefer | apibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus i | 
| count | query | string |  | number of tweets to return | m dolor sit amet, consectetur adipiscing elit. Integer ipsum sapien,  | 
| until | query | string |  | returns tweets created before given date | luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisq | 
| since_id | query | string |  | return results with ID greater than specified | is volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semp | 
| max_id | query | string |  | returns results with an ID less than/equal to specified ID |  Suspendisse eget nibh pulvinar, vestibulum mag | 
| include_entities | query | string |  | whether or not to include entities |  interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac d | 
| callback | query | string |  | response will use the callback with given name | s. In non lectus eu nunc interdum  | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/search/tweets?q=estie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lo&geocode=ing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accum&lang=tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20&locale=&result_type=apibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20i&count=m%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20&until=luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisq&since_id=is%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semp&max_id=%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20mag&include_entities=%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20d&callback=s.%20In%20non%20lectus%20eu%20nunc%20interdum%20 
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
| id | path | string | yes | The id of the saved search | . Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec ma | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/saved_searches/show/.+Sed+sed+neque+dignissim%2C+imperdiet+nunc+maximus%2C+finibus+erat.+Proin+id+scelerisque+ipsum.+Quisque+porta+mauris+nec+ma 
```





#### post /saved_searches/create
Create a new saved search for the authenticated user
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| query | query | string | yes | The query of the search the user would like to save | ero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvi | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/saved_searches/create?query=ero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvi 
```





#### post /saved_searches/destroy/{id}
Destroy a saved search for the authenticating user
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | path | string | yes | The id of the saved search | hasellus sit amet vestibulum quam. Mor | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/saved_searches/destroy/hasellus+sit+amet+vestibulum+quam.+Mor 
```





### Resource : friends
#### get /friends/ids
returns a cursored collection of user IDs followed by user
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| user_id | query | string | ID of user for whom to return results for | perdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel  | 
| screen_name | query | string | screen name of user for whom to return results for | m, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque alique | 
| cursor | query | string | causes list of connections to be broken in pages |  ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin vari | 
| stringify_ids | query | string | IDs converted to strings |  porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris | 
| count | query | string | number of IDs to attempt retrieval of | sa egestas, sed mollis est molestie. Aenean | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friends/ids?user_id=perdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20&screen_name=m%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20alique&cursor=%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20vari&stringify_ids=%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris&count=sa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean 
```





### Resource : followers
#### get /followers/ids
returns a cursored collection of user IDs following the user
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| user_id | query | string | ID of user for whom to return results for | , ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phas | 
| screen_name | query | string | screen name of user for whom to return results for | ricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate | 
| cursor | query | string | causes list of connections to be broken in pages | lis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nun | 
| stringify_ids | query | string | IDs converted to strings | r vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gr | 
| count | query | string | number of IDs to attempt retrieval of | or accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, nec condimentum t | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/followers/ids?user_id=%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phas&screen_name=ricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate&cursor=lis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nun&stringify_ids=r%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gr&count=or%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20t 
```





### Resource : friendships
#### get /friendships/incoming
returns collection of IDs of users with pending follow request
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| cursor | query | string | causes list of connections to be broken in pages |  augue interdum sed. Vestibulum eget luctus m | 
| stringify_ids | query | string | IDs converted to strings | i, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla.  | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/incoming?cursor=%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20m&stringify_ids=i%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20 
```





#### get /friendships/outgoing
returns collection of IDs of users with pending follow request from the user
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| cursor | query | string | causes list of connections to be broken in pages | tie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisqu | 
| stringify_ids | query | string | IDs converted to strings | lit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan  | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/outgoing?cursor=tie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisqu&stringify_ids=lit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20 
```





#### post /friendships/create
allows users to follow user sepcified by ID
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | screen name of user for whom to befriend | it est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praese | 
| user_id | query | string | ID of user for whom to befriend | o consectetur congue quis nec tell | 
| follow | query | string | enable notifications for target user | turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque en | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/create?screen_name=it%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praese&user_id=o%20consectetur%20congue%20quis%20nec%20tell&follow=turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20en 
```





#### post /friendships/destroy
allows user to unfollow user psecified by ID
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | screen name of user for whom to befriend | molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium to | 
| user_id | query | string | yes | ID of user for whom to befriend | auris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus  | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/destroy?screen_name=molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20to&user_id=auris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20 
```





#### post /friendships/update
Allows one to enable or disable settings for specified user
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | screen name of user for whom to befriend |  tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignis | 
| user_id | query | string | yes | ID of user for whom to befriend | . Phas | 
| device | query | string | yes | enable/disable device notifications for user | . Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros  | 
| retweets | query | string | yes | enable/disable retweets from target user | . Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nu | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/update?screen_name=%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignis&user_id=.%20Phas&device=.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20&retweets=.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nu 
```





#### get /friendships/show
returns detailed info about relationship between two users
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| source_id | query | string |  | user id of subject user |  vehicula ex lorem, ut ornar | 
| source_screen_name | query | string |  | screen_name of subject user | incidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoree | 
| target_id | query | string | yes | user id of target user | psum sapien, bibendum at placerat sit amet, volutpat sed lacus. | 
| target_screen_name | query | string | yes | screen name of target user | i, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit ame | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/show?source_id=%20vehicula%20ex%20lorem%2C%20ut%20ornar&source_screen_name=incidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoree&target_id=psum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.&target_screen_name=i%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20ame 
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
| trend_location_woeid | query | string | the Yahoo! Where On Earth ID to user as defaul tend location | tis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat  | 
| sleep_time_enabled | query | string | enables/disables sleep time, silencing notifications | etur | 
| start_sleep_time | query | string | the hour that sleep time should begin if enabled | ricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque  | 
| end_sleep_time | query | string | the hour that sleep time should end if enabled | m magna ut, suscipit est. Etiam varius lobortis porttito | 
| time_zone | query | string | timezone dates and times should be displayed in | cursus neque erat vitae odio. Sed sed neque dign | 
| lang | query | string | language which Twitter should render in for the user | elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/settings?trend_location_woeid=tis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20&sleep_time_enabled=etur&start_sleep_time=ricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20&end_sleep_time=m%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttito&time_zone=cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dign&lang=elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C 
```





#### post /account/update_delivery_device
sets which device Twitter delivers updates to for user
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| device | query | string | yes | must be one of sms, none | nec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus.  | 
| include_entities | query | string |  | whether or not to include entities | finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur,  | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_delivery_device?device=nec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20&include_entities=finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20 
```





#### post /account/update_profile
sets values that users ar eable to set under Account tab
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| name | query | string | full name of profile | por sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem t | 
| url | query | string | url associated with profile | ctum neque. Donec molestie, eros in pretium pulvinar, est leo vehicul | 
| location | query | string | city or country describing where user of account is. | isi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendiss | 
| description | query | string | a description of user owning account | e sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse e | 
| include_entities | query | string | whether or not to include entities | s eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, | 
| skip_status | query | string | whether or not to include statuses in response | psum dolor sit amet, consectetur adipisci | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile?name=por%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20t&url=ctum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicul&location=isi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendiss&description=e%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20e&include_entities=s%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C&skip_status=psum%20dolor%20sit%20amet%2C%20consectetur%20adipisci 
```





#### post /account/update_profile_background_image
updates user's profile background image
* Request Parameters :
  * Content-Type Accepted : multipart/form-data

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| tile | query | string |  | whether or not to tile background image |  molestie aliquet est, posuere tincid | 
| use | query | string |  | display background image or not | nim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin variu | 
| include_entities | query | string |  | whether or not to include entities | sce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius  | 
| skip_status | query | string |  | whether or not to include status in returned user objects | rat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, po | 
| file | formData | file | yes | image to replace background image of profile | --data-binary ZDQxNWQ3MGIyNDIyMTNjNjM0NTc2OTViZWI4MzE3YzJhNWE1MTkzNGY1ZWFmNDA5M2NlMWFkMWU3MjI5NWUxZWJiYWI2Mjc0OWRhYjhiOTJlZTIxYmZmMDBkODdkYzE4ZjY1OTU3ZTZhODU5ODhjNDEyMTVjNTc0MjE2MGUxN2M2NDk0ODMwNmUyNzJmYjZhMTRhMWU4NzJhMjhjN2MyMGFlOWU2YWU0ZThmMzBiN2M2MzUwMmU3NTQxNGRjNmYxYWU0Yjc1MWYwZmYwMTRhMTdmMmEyNTQyMjQwYzFkZTQ4YjAwZTg5NjIyZjM0OTk2NDRjYTU1ZDJmZmMwZGM3MWYyYTYzYTY3NzJhZjRlZmYwMWU5ZGVkYzRjNWRmYjE5Nzg0YWY1NGE3MjJiN2MwOTU3OWQyNjZmNTYzZTMwMDcwYzhmNGQzNjMxZWM4YzQ0YWQ0MzA2ZWY1NDRlNGFmNjBhZDM4MzNkZmYyODYxYmQ3Zjc0YzE2MmVjZmU3OWM3MzQ1MDAwZjhkMWYwYTE1YTIwYjI5ZjhiM2Y3YTU2YTM2MThjYmUzZjEzNGI5MTUxMDE3MmU4MzJmM2Y1Y2JmODFhODY4NGM2ZmVmNjZjYmU5ZGJmM2JlMDRkNjNkNGMxMmYzMjc5ZWRlZTg3ZWM1NWRiODMxMzljZDk4YWU0ZmQ= | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_background_image?tile=%20molestie%20aliquet%20est%2C%20posuere%20tincid&use=nim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20variu&include_entities=sce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20&skip_status=rat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20po 
Content-Type: multipart/form-data, boundary=57cc4a5f3f570
Content-Length: 761
--57cc4a5f3f570
content-disposition: form-data; name="file"

--data-binary 
ZDQxNWQ3MGIyNDIyMTNjNjM0NTc2OTViZWI4MzE3YzJhNWE1MTkzNGY1ZWFmNDA5M2NlMWFkMWU3MjI5NWUxZWJiYWI2Mjc0OWRhYjhiOTJlZTIxYmZmMDBkODdkYzE4ZjY1OTU3ZTZhODU5ODhjNDEyMTVjNTc0MjE2MGUxN2M2NDk0ODMwNmUyNzJmYjZhMTRhMWU4NzJhMjhjN2MyMGFlOWU2YWU0ZThmMzBiN2M2MzUwMmU3NTQxNGRjNmYxYWU0Yjc1MWYwZmYwMTRhMTdmMmEyNTQyMjQwYzFkZTQ4YjAwZTg5NjIyZjM0OTk2NDRjYTU1ZDJmZmMwZGM3MWYyYTYzYTY3NzJhZjRlZmYwMWU5ZGVkYzRjNWRmYjE5Nzg0YWY1NGE3MjJiN2MwOTU3OWQyNjZmNTYzZTMwMDcwYzhmNGQzNjMxZWM4YzQ0YWQ0MzA2ZWY1NDRlNGFmNjBhZDM4MzNkZmYyODYxYmQ3Zjc0YzE2MmVjZmU3OWM3MzQ1MDAwZjhkMWYwYTE1YTIwYjI5ZjhiM2Y3YTU2YTM2MThjYmUzZjEzNGI5MTUxMDE3MmU4MzJmM2Y1Y2JmODFhODY4NGM2ZmVmNjZjYmU5ZGJmM2JlMDRkNjNkNGMxMmYzMjc5ZWRlZTg3ZWM1NWRiODMxMzljZDk4YWU0ZmQ=
```





#### post /account/update_profile_colors
sets one or more hex values that controls color scheme
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| profile_background_color | query | string | profile background color | Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit en | 
| profile_link_color | query | string | profile link color |  metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut qu | 
| profile_sidebar_border_color | query | string | profile sidebar's border color | issim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum l | 
| profile_sidebar_fill_color | query | string | profile's sidebar background color | s et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisi | 
| profile_text_color | query | string | profile text color |  consectetur sed ante sit ame | 
| include_entities | query | string | whether or not to include entities | tur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lore | 
| skip_status | query | string | whether or not to include statuses | pien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. M | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_colors?profile_background_color=Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20en&profile_link_color=%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20qu&profile_sidebar_border_color=issim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20l&profile_sidebar_fill_color=s%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisi&profile_text_color=%20consectetur%20sed%20ante%20sit%20ame&include_entities=tur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lore&skip_status=pien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20M 
```





#### post /account/update_profile_image
updates user's profile image
* Request Parameters :
  * Content-Type Accepted : multipart/form-data

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| skip_status | query | string |  | whether or not to include statuses | ing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan ni | 
| image | formData | file | yes | image to be set as profile image | --data-binary ODZiMjJjNjVkODI2MGEwYjU0N2QzYmYxMDk0OWJjZjYyNDUxNTkxNDRlOGI2YzYyMTUzNTVlNWQ4ZjE2NjI4MDEyZGU5NDM3M2NhYzNlZDlhZGJkMzA4NzY0MjdiOTRmZmI3YWMzZjNkM2ZkNTg3NmEyN2Y0ODEwNDViOGI1MTdlZGQ1Y2ExNzA3MTY2MjkxNTFjYmU5ODcxZTQzYTliMjBhZGNiZTY3YTM2MTAwOWI4YzM5OGUwMDVlMDM1NTdkNjZmYTRjNDFlMjdjYWYxYTA4MmJmZjQ0N2Q1MGU5ZDA2M2YzOTM5NGJhZTU1MjNiMDgwMWUxYWU3YzEwMWUxMDkyMmEyN2UwMDZiZTJjNGNmNjVkZWI0NmM5OGQyNzc2NGRkYjNlYzliMWIwNzcyODE0NGUyZjQ4MzZjZWRmYzE0Yzg5NTU3NmFkMTBkZmVlNGNmZjhiODU0Nzk0YWFiNzQ0MjFjOWQ3NzVmNDcxYzg5MGQzM2JlMGJmOWVhZGU1MWZiMzc5ZTkwNGEzMTA4Yjk5ODFhYTJmMDAyZWIzYmZhMmZiYTljMmM3NGMyODE1ZDY0OWNhN2Q3NmRhM2VkZDBjOGY2NTIyMGY3YmM1ZWRmYzIyM2Q2ZjUwNzJlZWU0NjEwZDQyNWMxYzZhMzQxODI3MWE5OGY3MTBkMzAwOGY= | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_image?skip_status=ing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20ni 
Content-Type: multipart/form-data, boundary=57cc4a5f41375
Content-Length: 762
--57cc4a5f41375
content-disposition: form-data; name="image"

--data-binary 
ODZiMjJjNjVkODI2MGEwYjU0N2QzYmYxMDk0OWJjZjYyNDUxNTkxNDRlOGI2YzYyMTUzNTVlNWQ4ZjE2NjI4MDEyZGU5NDM3M2NhYzNlZDlhZGJkMzA4NzY0MjdiOTRmZmI3YWMzZjNkM2ZkNTg3NmEyN2Y0ODEwNDViOGI1MTdlZGQ1Y2ExNzA3MTY2MjkxNTFjYmU5ODcxZTQzYTliMjBhZGNiZTY3YTM2MTAwOWI4YzM5OGUwMDVlMDM1NTdkNjZmYTRjNDFlMjdjYWYxYTA4MmJmZjQ0N2Q1MGU5ZDA2M2YzOTM5NGJhZTU1MjNiMDgwMWUxYWU3YzEwMWUxMDkyMmEyN2UwMDZiZTJjNGNmNjVkZWI0NmM5OGQyNzc2NGRkYjNlYzliMWIwNzcyODE0NGUyZjQ4MzZjZWRmYzE0Yzg5NTU3NmFkMTBkZmVlNGNmZjhiODU0Nzk0YWFiNzQ0MjFjOWQ3NzVmNDcxYzg5MGQzM2JlMGJmOWVhZGU1MWZiMzc5ZTkwNGEzMTA4Yjk5ODFhYTJmMDAyZWIzYmZhMmZiYTljMmM3NGMyODE1ZDY0OWNhN2Q3NmRhM2VkZDBjOGY2NTIyMGY3YmM1ZWRmYzIyM2Q2ZjUwNzJlZWU0NjEwZDQyNWMxYzZhMzQxODI3MWE5OGY3MTBkMzAwOGY=
```





### Resource : blocks
#### get /blocks/list
disallows retweets and device notifications from a user
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| include_entities | query | string | whether or not to include entities | nean quam nisi, posuere sed varius sodales, sagitt | 
| skip_status | query | string | whether or not to include statuses in response | . Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar me | 
| cursor | query | string | breaks block of user to be broken up into pages | llicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam  | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/blocks/list?include_entities=nean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagitt&skip_status=.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20me&cursor=llicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20 
```





#### get /blocks/ids
returns array of numeric user ids of blocked users
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| stringify_ids | query | string | returns array of numeric IDs as string IDs |  Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis | 
| cursor | query | string | breaks up block of user IDs into pages | perdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio.  | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/blocks/ids?stringify_ids=%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis&cursor=perdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20 
```





#### post /blocks/create
blocks the specified user
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | screen name of user to be blocked | consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas  | 
| user_id | query | string | yes | ID of user to be blocked | sum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed ma | 
| include_entities | query | string |  | whether or not to include entities | vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est | 
| skip_status | query | string |  | whether or not to skip statuses | c tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Sus | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/blocks/create?screen_name=consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20&user_id=sum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20ma&include_entities=vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est&skip_status=c%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Sus 
```





#### post /blocks/destroy
un-blocks the specified user
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | screen name of user to be un-blocked | s condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut  | 
| user_id | query | string | yes | ID of user to be un-blocked |  sed ex. Vivamus id vulputate odio. Donec  | 
| include_entities | query | string |  | whether or not to include entities | uis facilisis arcu, vel ultrices augue. Suspendisse potenti. Ma | 
| skip_status | query | string |  | whether or not to skip statuses | lor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat  | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/blocks/destroy?screen_name=s%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20&user_id=%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20&include_entities=uis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Ma&skip_status=lor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20 
```





### Resource : users
#### get /users/lookup
returns fully-hydrated user objects up to 100
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | screen name of user to lookup | roin id scelerisque ipsum. | 
| user_id | query | string | ID of user to lookup | reet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, vo | 
| include_entities | query | string | whether or not to include entities | ed lacus. Nulla justo arcu, sodales ac commo | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/lookup?screen_name=roin%20id%20scelerisque%20ipsum.&user_id=reet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20vo&include_entities=ed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commo 
```





#### get /users/show
returns a variety of info about specified user
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | screen name of user to be shown | , malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringill | 
| user_id | query | string | yes | ID of user to be shown |  eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius l | 
| include_entities | query | string |  | whether or not to include entities | Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibu | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/show?screen_name=%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringill&user_id=%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20l&include_entities=Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibu 
```





#### get /users/search
simple relevance-based user search
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| q | query | string | yes | the search query to run against people search | issim augue interdum sed. Vestibulum eget luctus | 
| page | query | string |  | specifies the page of results to receive | ce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, sus | 
| count | query | string |  | number of people to return per page |  eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet var | 
| include_entities | query | string |  | whether or not to include entities | s. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed l | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/search?q=issim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus&page=ce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20sus&count=%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20var&include_entities=s.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20l 
```





#### get /users/contributees
collection of users specified user can contribute to
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | screen name of user that is contributed to | nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagit | 
| user_id | query | string | yes | ID of user to that is contributed to |  ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium | 
| include_entities | query | string |  | whether or not to include entities |  tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagitt | 
| skip_status | query | string |  | whether or not to skip statuses | felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/contributees?screen_name=nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagit&user_id=%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium&include_entities=%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagitt&skip_status=felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus 
```





#### get /users/contributors
collection of users that can contribute to specified account
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | screen name of user contributing |  felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dign | 
| user_id | query | string | yes | ID of user contributing |  auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi | 
| include_entities | query | string |  | whether or not to include entities | t nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulv | 
| skip_status | query | string |  | whether or not to skip statuses | ue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/contributors?screen_name=%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dign&user_id=%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi&include_entities=t%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulv&skip_status=ue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum 
```





#### post /users/report_spam
Returna users report spam
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | The ID or screen_name of the user you want to report as a spammer | . Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasel | 
| user_id | query | string | The ID of the user you want to report as a spammer |  turpis nec dignissim aliquam. Nu | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/users/report_spam?screen_name=.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasel&user_id=%20turpis%20nec%20dignissim%20aliquam.%20Nu 
```





### Resource : geo
#### get /geo/id/{place_id}
Returns all the information about a know place
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| place_id | path | string | yes | A place in the world | sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Ves | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/id/sed+varius+sodales%2C+sagittis+sed+ex.+Vivamus+id+vulputate+odio.+Donec+quis+facilisis+arcu%2C+vel+ultrices+augue.+Suspendisse+potenti.+Mauris+vehicula+ex+lorem%2C+ut+ornare+purus+ultrices+nec.+Ves 
```





#### get /geo/reverse_geoncode
Given a latitude and a longitude, searches for up to 20 places that can be used as a place_id when updatting a status
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| lat | query | string | yes | The latitude to search around | ectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper | 
| long | query | string | yes | The longtitude to search around | es ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat | 
| accuracy | query | string |  | A hint on region in which to search | bero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id sceleris | 
| granularity | query | string |  | This is the minimal granularity of place types to return | utpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante si | 
| max_results | query | string |  | A hint as to the number of results to return | idunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehic | 
| callback | query | string |  | If supplied, the responses will use the JSON format with a callback of the given name | estibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentu | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/reverse_geoncode?lat=ectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper&long=es%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat&accuracy=bero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20sceleris&granularity=utpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20si&max_results=idunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehic&callback=estibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentu 
```





#### get /geo/search
Search for places that can be attached to a statuses/updates
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| lat | query | string | yes | The latitude to search around | obortis porttitor. Mauris v | 
| long | query | string | yes | The longtitude to search around | ulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis,  | 
| query | query | string | yes | Free-form text to match against while executing a geo-based query | sm | 
| ip | query | string | yes | An Ip address | agittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. | 
| accuracy | query | string |  | A hint on region in which to search | ravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, m | 
| granularity | query | string |  | This is the minimal granularity of place types to return | Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet  | 
| contained_within | query | string |  | This is the place_id which you would like to restrict the search results to | varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. | 
| attribute:street_address | query | string |  | This parameter searches for places which have this givven street address | tus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra | 
| callback | query | string |  | If supplied, the responses will use the JSON format with a callback of the given name | s. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis ne | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/search?lat=obortis%20porttitor.%20Mauris%20v&long=ulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20&query=sm&ip=agittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.&accuracy=ravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20m&granularity=Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20&contained_within=varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.&attribute%3Astreet_address=tus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra&callback=s.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20ne 
```





#### get /geo/similar_places
Locates places near the given coordinates which are similar in name
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| lat | query | string | yes | The latitude to search around | tie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blan | 
| long | query | string | yes | The longtitude to search around | it. Sed efficitur, mi sit amet  | 
| name | query | string | yes | The name a place is known as | t placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu | 
| contained_within | query | string |  | This is the place_id which you would like to restrict the search results to | enti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasell | 
| attribute:street_address | query | string |  | This parameter searches for places which have this givven street address | nar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum torto | 
| callback | query | string |  | If supplied, the responses will use the JSON format with a callback of the given name |  volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed e | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/similar_places?lat=tie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blan&long=it.%20Sed%20efficitur%2C%20mi%20sit%20amet%20&name=t%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu&contained_within=enti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasell&attribute%3Astreet_address=nar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20torto&callback=%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20e 
```





#### get /geo/places
Create a new place object at the given latitude and logitude
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| lat | query | string | yes | The latitude to search around | fficitur, mi sit amet fermentum ultricies, felis felis  | 
| long | query | string | yes | The longtitude to search around |  id tempor sed, dapibus vel elit. Sed efficitur, m | 
| name | query | string | yes | The name a place is known as |  finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa eges | 
| token | query | string | yes | The token found in the response from geo/similar_places | amus id vulputate odio. Donec quis facilisi | 
| contained_within | query | string |  | This is the place_id which you would like to restrict the search results to | asellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tinc | 
| attribute:street_address | query | string |  | This parameter searches for places which have this givven street address | tu | 
| callback | query | string |  | If supplied, the responses will use the JSON format with a callback of the given name | ros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh  | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/places?lat=fficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20&long=%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20m&name=%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20eges&token=amus%20id%20vulputate%20odio.%20Donec%20quis%20facilisi&contained_within=asellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tinc&attribute%3Astreet_address=tu&callback=ros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20 
```





### Resource : trends
#### get /trends/place
Returns the top 10 trending topics for a specific WOEID
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | query | string | yes | The yahoo where on earch id | que aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eg | 
| exclude | query | string | yes | Setting this equal to hashtages will remove all hashtages from the trends list | ngue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestib | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/trends/place?id=que%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eg&exclude=ngue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestib 
```





#### get /trends/available
Returns the availability



#### get /trends/closest
Returns the location that Twitter has trending topic information for
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| lat | query | string | yes | If provided with a long parameter the available trend locations wil be stored by distance | u ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, f | 
| long | query | string | yes | If provided with a lat parameters the available trend locations will be sorted by distance | psum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit liber | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/trends/closest?lat=u%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20f&long=psum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20liber 
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
| resources | query | array | [ [resources/items/schema](#schema_57cc4a5f4fd40) ] | A comma-separated list of resource families you want to know the current rate limit disposition for | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/application/rate_limit_status 
```

* <p name="schema_57cc4a5f4fd40">Object resources/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| schema | string |  ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est.  | 







---

## Table of contents
* Tags
* [Summary](#summary)
* [Resources](#resources)
  * [Resource : Resource : statuses](#resource--statuses)
    * [Operation : get /statuses/mentions_timeline](#get-statusesmentions_timeline)
    * [Operation : get /statuses/user_timeline](#get-statusesuser_timeline)
    * [Operation : get /statuses/home_timeline](#get-statuseshome_timeline)
    * [Operation : post /statuses/retweets/{id}](#post-statusesretweetsid)
    * [Operation : get /statuses/show/{id}](#get-statusesshowid)
    * [Operation : post /statuses/destroy/{id}](#post-statusesdestroyid)
    * [Operation : post /statuses/update](#post-statusesupdate)
    * [Operation : get /statuses/oembed](#get-statusesoembed)
  * [Resource : Resource : lists](#resource--lists)
    * [Operation : get /lists/list](#get-listslist)
    * [Operation : get /lists/statuses](#get-listsstatuses)
    * [Operation : get /lists/members/destroy](#get-listsmembersdestroy)
    * [Operation : get /lists/memberships](#get-listsmemberships)
    * [Operation : get /lists/subscribers](#get-listssubscribers)
    * [Operation : post /lists/subscribers/create](#post-listssubscriberscreate)
    * [Operation : get /lists/subscribers/show](#get-listssubscribersshow)
    * [Operation : get /lists/subscribers/destroy](#get-listssubscribersdestroy)
    * [Operation : get /lists/members/create_all](#get-listsmemberscreate_all)
    * [Operation : post /lists/destroy](#post-listsdestroy)
    * [Operation : post /lists/update](#post-listsupdate)
    * [Operation : post /lists/create](#post-listscreate)
    * [Operation : get /lists/show](#get-listsshow)
    * [Operation : get /lists/subscriptions](#get-listssubscriptions)
  * [Resource : Resource : list](#resource--list)
    * [Operation : get /list/members/show](#get-listmembersshow)
    * [Operation : get /list/members](#get-listmembers)
    * [Operation : post /list/members/create](#post-listmemberscreate)
    * [Operation : get /list/members/destroy_all](#get-listmembersdestroy_all)
  * [Resource : Resource : direct_messages](#resource--direct_messages)
    * [Operation : get /direct_messages/sent](#get-direct_messagessent)
    * [Operation : get /direct_messages/show](#get-direct_messagesshow)
    * [Operation : get /direct_messages](#get-direct_messages)
    * [Operation : post /direct_messages/destroy](#post-direct_messagesdestroy)
    * [Operation : post /direct_messages/new](#post-direct_messagesnew)
  * [Resource : Resource : search](#resource--search)
    * [Operation : get /search/tweets](#get-searchtweets)
  * [Resource : Resource : saved_searches](#resource--saved_searches)
    * [Operation : get /saved_searches/list](#get-saved_searcheslist)
    * [Operation : get /saved_searches/show/{id}](#get-saved_searchesshowid)
    * [Operation : post /saved_searches/create](#post-saved_searchescreate)
    * [Operation : post /saved_searches/destroy/{id}](#post-saved_searchesdestroyid)
  * [Resource : Resource : friends](#resource--friends)
    * [Operation : get /friends/ids](#get-friendsids)
  * [Resource : Resource : followers](#resource--followers)
    * [Operation : get /followers/ids](#get-followersids)
  * [Resource : Resource : friendships](#resource--friendships)
    * [Operation : get /friendships/incoming](#get-friendshipsincoming)
    * [Operation : get /friendships/outgoing](#get-friendshipsoutgoing)
    * [Operation : post /friendships/create](#post-friendshipscreate)
    * [Operation : post /friendships/destroy](#post-friendshipsdestroy)
    * [Operation : post /friendships/update](#post-friendshipsupdate)
    * [Operation : get /friendships/show](#get-friendshipsshow)
  * [Resource : Resource : account](#resource--account)
    * [Operation : get /account/settings](#get-accountsettings)
    * [Operation : post /account/settings](#post-accountsettings)
    * [Operation : post /account/update_delivery_device](#post-accountupdate_delivery_device)
    * [Operation : post /account/update_profile](#post-accountupdate_profile)
    * [Operation : post /account/update_profile_background_image](#post-accountupdate_profile_background_image)
    * [Operation : post /account/update_profile_colors](#post-accountupdate_profile_colors)
    * [Operation : post /account/update_profile_image](#post-accountupdate_profile_image)
  * [Resource : Resource : blocks](#resource--blocks)
    * [Operation : get /blocks/list](#get-blockslist)
    * [Operation : get /blocks/ids](#get-blocksids)
    * [Operation : post /blocks/create](#post-blockscreate)
    * [Operation : post /blocks/destroy](#post-blocksdestroy)
  * [Resource : Resource : users](#resource--users)
    * [Operation : get /users/lookup](#get-userslookup)
    * [Operation : get /users/show](#get-usersshow)
    * [Operation : get /users/search](#get-userssearch)
    * [Operation : get /users/contributees](#get-userscontributees)
    * [Operation : get /users/contributors](#get-userscontributors)
    * [Operation : post /users/report_spam](#post-usersreport_spam)
  * [Resource : Resource : geo](#resource--geo)
    * [Operation : get /geo/id/{place_id}](#get-geoidplace_id)
    * [Operation : get /geo/reverse_geoncode](#get-georeverse_geoncode)
    * [Operation : get /geo/search](#get-geosearch)
    * [Operation : get /geo/similar_places](#get-geosimilar_places)
    * [Operation : get /geo/places](#get-geoplaces)
  * [Resource : Resource : trends](#resource--trends)
    * [Operation : get /trends/place](#get-trendsplace)
    * [Operation : get /trends/available](#get-trendsavailable)
    * [Operation : get /trends/closest](#get-trendsclosest)
  * [Resource : Resource : help](#resource--help)
    * [Operation : get /help/configuration](#get-helpconfiguration)
    * [Operation : get /help/languages](#get-helplanguages)
    * [Operation : get /help/privacy](#get-helpprivacy)
    * [Operation : get /help/tos](#get-helptos)
  * [Resource : Resource : application](#resource--application)
    * [Operation : get /application/rate_limit_status](#get-applicationrate_limit_status)
* [Table of contents](#table-of-contents)

