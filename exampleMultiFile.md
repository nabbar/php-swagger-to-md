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
| count | query | string | Specifies the number of tweets to try and retrieve | scing elit. Integer ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ip | 
| since_id | query | string | Returns result with an ID greater than the specified ID | s et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi o | 
| max_id | query | string | Returns results with an ID less than or equal to the specified ID | h sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros.  | 
| trim_user | query | string | When set to either true, t or 1, each tweet returned in a timeline will include a user object | it dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci.  | 
| contributor_details | query | string | This parameter enhances the contributors element of the status response | mollis est molestie. Aenean quam nisi, posuere sed variu | 
| include_entities | query | string | The entities node will be disincluded when set to false | uismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna a | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/mentions_timeline?count=scing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ip&since_id=s%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20o&max_id=h%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20&trim_user=it%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20&contributor_details=mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20variu&include_entities=uismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20a 
```





#### get /statuses/user_timeline
Returns a collection of the most recent Tweets posted by the User
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| count | query | string | Specifies the number of tweets to try and retrieve | id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, nec condimentum | 
| since_id | query | string | Returns result with an ID greater than the specified ID | vinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. | 
| max_id | query | string | Returns results with an ID less than or equal to the specified ID | rttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien fi | 
| trim_user | query | string | When set to either true, t or 1, each tweet returned in a timeline will include a user object | rem ipsum dolor sit amet, consectetur adipiscing elit. I | 
| exclude_replies | query | boolean | This paramters will prevent from appearing in the returned timeline | 1 | 
| contributor_details | query | string | This parameter enhances the contributors element of the status response |  Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nu | 
| include_rts | query | boolean | When set to false, the timeline will strip any native retweet | 0 | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/user_timeline?count=id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum&since_id=vinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.&max_id=rttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20fi&trim_user=rem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20I&exclude_replies=1&contributor_details=%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nu&include_rts=0 
```





#### get /statuses/home_timeline
Returns a collection of the most recent Tweets
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| since_id | query | string | Returns result with an ID greater than the specified ID |  erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id  | 
| max_id | query | string | Returns results with an ID less than or equal to the specified ID |  dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec es | 
| trim_user | query | string | When set to either true, t or 1, each tweet returned in a timeline will include a user object |  In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, s | 
| exclude_replies | query | boolean | This paramters will prevent from appearing in the returned timeline | 1 | 
| contributor_details | query | string | This parameter enhances the contributors element of the status response |  egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/home_timeline?since_id=%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20&max_id=%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20es&trim_user=%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20s&exclude_replies=1&contributor_details=%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo 
```





#### post /statuses/retweets/{id}
Retweens a tweet
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | path | string | yes | The numerical ID of the desired status | sis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor bla | 
| trim_user | query | string |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object | ros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/retweets/sis+sapien+finibus+at.+Nullam+finibus+urna+vel+auctor+fringilla.+Mauris+eu+tortor+bla?trim_user=ros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio 
```





#### get /statuses/show/{id}
Retruns a single Tweet
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | path | string | yes | The numerical ID of the desired status | s urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem i | 
| trim_user | query | string |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object | ur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pe | 
| include_my_retweet | query | string | yes | When set to either true, t or 1, any Tweets returned that have been retweeted by the authenticating | tus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pul | 
| include_entities | query | string |  | The entities node will be disincluded when set to false |  eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit digni | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/show/s+urna+vel+auctor+fringilla.+Mauris+eu+tortor+blandit%2C+bibendum+tortor+ac%2C+congue+eros.+Lorem+i?trim_user=ur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pe&include_my_retweet=tus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pul&include_entities=%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20digni 
```





#### post /statuses/destroy/{id}
Destroys the status specified by the required ID parameter
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | path | integer | yes | The numerical ID of the desired status | -261498845 | 
| id32 | path | int32 |  | The numerical ID of the desired status | -1996669078 | 
| id64 | path | int64 |  | The numerical ID of the desired status | -3711351841146011648 | 
| trim_user | query | string |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object | um. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/destroy/-261498845?trim_user=um.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue 
```





#### post /statuses/update
Updates the authenticating user's status
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| status | query | string | yes | The text of your status update | ed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fri | 
| exampleStringIPv4 | query | ipv4 |  | The text of your status update | 62.46.23.45 | 
| exampleStringIPv6 | query | ipv6 |  | The text of your status update | 2001:2185:56f3:d292:e4da:e33a:: | 
| exampleStringByte | query | byte |  | The text of your status update | LiBTZWQgc2VkIG5lcXVlIGRpZ25pc3NpbSwgaW1wZXJkaWV0IG51bmMgbWF4aW11cywgZmluaWJ1cyBlcmF0LiBQcm9pbiBpZCBzY2VsZXJpc3F1ZSBpcHN1bS4gUXVpc3F1ZSBwb3J0YSBtYXVyaXMgbmVjIG1hc3NhIGVnZXN0YXMsIHNlZCBtb2xsaXMgZXN0IG1vbGVzdGllLiBBZW5lYW4gcXVhbSBuaXNpLCBwb3N1ZXJlIA== | 
| exampleStringBinary | query | binary |  | The text of your status update | 0000111011111100110000110011011001011100100100011001011111110111000001110101011101001111011110000111100101101110110111100110011111000101010001100011010000000101001100100000010000111100010100110101101100001111001110000011111011000111011011001011000111010101011010100111011000001101110001100000100010100101101111110001000011111100000011111000100101110111011111010110100011011111010000111010111000010101010010011110000000011001100001010011010101110100100101000110110110110011010111001101101001100110001100110100011011011100010000000000111011100101111001101100110111110110111000111101110010000000010111000101101011101001001111011001111010011000010100101110011101111010011011000110111010110000111000010000001100011110100101010110000011111001111110111001001101000000110110011101010001001110101111111011101100011101101101111010000011111001001110001111110101010101001000100011101111110100101110111000111011011100001101111111101001001011 | 
| exampleStringDate | query | date |  | The text of your status update | 2016-09-04 | 
| exampleStringDateTime | query | date-time |  | The text of your status update | 2016-09-04T16:22:54+00:00 | 
| exampleStringPassword | query | password |  | The text of your status update | TDU|NAlS}@[QJ7nCV\N}at*q] =9f9§!N:81}sTd&T.DK[1b3QÂ7nvy\u;!eU0V7ÂO6mlN8]5TPPTODQ1.Xq'°U/s/Rs/&z2zFld8tÂ4pGKu6{\3jSm#DxO\z4EÂ`5+`z%/rHyn/7:A2GJ1o8l°vbR'oVV/nQzV(CÂ^`}ZN=7c°AX+YO*x^@keX~§ÂSÂ}@b\G§cZ?ADÂMTy_LqBp6K(evs}D'Nz8,nµ)=?Jx'&AL | 
| exampleStringUri | query | uri |  | The text of your status update | http://localhost/path/script.php?query#fragment | 
| in_reply_to_status_id | query | string |  | The ID of an existing status |  nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, nec condimentum tellus sagittis at. Nullam vel metus  | 
| lat | query | string |  | The latitude of the location |  a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque v | 
| long | query | string |  | The longitude of the location | vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus a | 
| place_id | query | string |  | A place in the world | s vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit i | 
| display_coordinates | query | string |  | Whether or not to put a pin on the exact coordinates a tweet | ed pel | 
| trim_user | query | string |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object |  justo turpis, lacinia | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/update?status=ed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fri&exampleStringIPv4=62.46.23.45&exampleStringIPv6=2001%3A2185%3A56f3%3Ad292%3Ae4da%3Ae33a%3A%3A&exampleStringByte=LiBTZWQgc2VkIG5lcXVlIGRpZ25pc3NpbSwgaW1wZXJkaWV0IG51bmMgbWF4aW11cywgZmluaWJ1cyBlcmF0LiBQcm9pbiBpZCBzY2VsZXJpc3F1ZSBpcHN1bS4gUXVpc3F1ZSBwb3J0YSBtYXVyaXMgbmVjIG1hc3NhIGVnZXN0YXMsIHNlZCBtb2xsaXMgZXN0IG1vbGVzdGllLiBBZW5lYW4gcXVhbSBuaXNpLCBwb3N1ZXJlIA%3D%3D&exampleStringBinary=0000111011111100110000110011011001011100100100011001011111110111000001110101011101001111011110000111100101101110110111100110011111000101010001100011010000000101001100100000010000111100010100110101101100001111001110000011111011000111011011001011000111010101011010100111011000001101110001100000100010100101101111110001000011111100000011111000100101110111011111010110100011011111010000111010111000010101010010011110000000011001100001010011010101110100100101000110110110110011010111001101101001100110001100110100011011011100010000000000111011100101111001101100110111110110111000111101110010000000010111000101101011101001001111011001111010011000010100101110011101111010011011000110111010110000111000010000001100011110100101010110000011111001111110111001001101000000110110011101010001001110101111111011101100011101101101111010000011111001001110001111110101010101001000100011101111110100101110111000111011011100001101111111101001001011&exampleStringDate=2016-09-04&exampleStringDateTime=2016-09-04T16%3A22%3A54%2B00%3A00&exampleStringPassword=TDU%7CNAlS%7D%40%5BQJ7nCV%5CN%7Dat%2Aq%5D%20%3D9f9%A7%21N%3A81%7DsTd%26T.DK%5B1b3Q%C27nvy%5Cu%3B%21eU0V7%C2O6mlN8%5D5TPPTODQ1.Xq%27%B0U%2Fs%2FRs%2F%26z2zFld8t%C24pGKu6%7B%5C3jSm%23DxO%5Cz4E%C2%605%2B%60z%25%2FrHyn%2F7%3AA2GJ1o8l%B0vbR%27oVV%2FnQzV%28C%C2%5E%60%7DZN%3D7c%B0AX%2BYO%2Ax%5E%40keX~%A7%C2S%C2%7D%40b%5CG%A7cZ%3FAD%C2MTy_LqBp6K%28evs%7DD%27Nz8%2Cn%B5%29%3D%3FJx%27%26AL&exampleStringUri=http%3A%2F%2Flocalhost%2Fpath%2Fscript.php%3Fquery%23fragment&in_reply_to_status_id=%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20&lat=%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20v&long=vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20a&place_id=s%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20i&display_coordinates=ed%20pel&trim_user=%20justo%20turpis%2C%20lacinia 
```





#### get /statuses/oembed
Returns information allowing the creation of an embedded representation
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | query | string | yes | The tweet/status id to return embed code for | massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu torto | 
| url | query | string | yes | The encoded URL of the Tweet status to be embedded | s metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi ege | 
| maxwidth | query | string |  | The maximum width in pixels that the embed should be rendered at | retium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curab | 
| hide_media | query | string |  | Specifies whether the embedded tweet should automatically show the original message in the case that the embedded Tweet is a reply | ssim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristiq | 
| hide_thread | query | string |  | Specifies whether the embedded Tweet html should include a 'script' element pointing to widgets.js | se justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu | 
| align | query | string |  | Specifies whether the embedded Tweet should be left aligned | bi tincidunt pretium sodales. Etiam digni | 
| related | query | string |  | A value for the TWT related parameters | or accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, nec condimentum tellus sagittis at. Nullam vel metus ac quam gravida pell | 
| lang | query | string |  | Languages code for the rendered embed |  ultricies, felis felis ali | 
| exampleNumber | query | number |  | Languages code for the rendered embed | -7.249233E-147 | 
| exampleNumberFloat | query | float |  | Languages code for the rendered embed | 0 | 
| exampleNumberDouble | query | double |  | Languages code for the rendered embed | 0 | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/oembed?id=massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20torto&url=s%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20ege&maxwidth=retium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curab&hide_media=ssim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristiq&hide_thread=se%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu&align=bi%20tincidunt%20pretium%20sodales.%20Etiam%20digni&related=or%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20ac%20quam%20gravida%20pell&lang=%20ultricies%2C%20felis%20felis%20ali&exampleNumber=-7.249233E-147&exampleNumberFloat=0&exampleNumberDouble=0 
```





### Resource : lists
#### get /lists/list
Return all lists the authenticating or specified user subscribes to, including their own.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | The screen name of the user for whom to return results for |  potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Ph | 
| user_id | query | string | yes | The ID of the user for whom to return results for | id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed  | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/list?screen_name=%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Ph&user_id=id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20 
```





#### get /lists/statuses
Returns a timeline of tweets authored by memebers of the specified list
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | m pulvinar, est leo vehicu | 
| slug | query | string | yes | You can identify a list by its slug instead of its numerical id |  tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutp | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | s at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | esuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at tu | 
| since_id | query | string |  | Returns result with an ID greater than the specified ID | at sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula n | 
| max_id | query | string |  | Returns results with an ID less than or equal to the specified ID | liquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. M | 
| count | query | string |  | Specifies the number of tweets to try and retrieve | est, posue | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | quet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pel | 
| include_rts | query | string |  | When set to either true, t or 1, the list timeline will contain native retweets in addition to the standard stream of tweets | pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus era | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/statuses?list_id=m%20pulvinar%2C%20est%20leo%20vehicu&slug=%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutp&owner_screen_name=s%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit&owner_id=esuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20tu&since_id=at%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20n&max_id=liquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20M&count=est%2C%20posue&include_entities=quet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pel&include_rts=pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20era 
```





#### get /lists/members/destroy
Returns the list of memebers destroy
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, | 
| slug | query | string | yes | You can identify a list by its slug instrad of its numerical id | ollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing e | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | am non, imperdiet varius orci. Donec consectetur sed ante sit amet sag | 
| user_id | query | string |  | The id of the user for whom to remove from the list | lutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit am | 
| screen_name | query | string |  | The screen name of the user for whom to remove from the list | ectetur sit amet dui sit  | 
| owner_id | query | string |  | The is of the user who wons the list being requested by a slug | aecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis.  | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/members/destroy?list_id=efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C&slug=ollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20e&owner_screen_name=am%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sag&user_id=lutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20am&screen_name=ectetur%20sit%20amet%20dui%20sit%20&owner_id=aecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20 
```





#### get /lists/memberships
Returns the lists of the specified user has been added to
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| user_id | query | string | The id of the user for whom to return results for | bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id  | 
| screen_name | query | string | The screen name of the user for whom to return results for | onec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismo | 
| cursor | query | string | Breaks the results into pages | eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu le | 
| filter_to_owned_lists | query | string | When set to true, t or 1, will return just lists the authenticating user owns |  id vulputate odio. Donec quis facilisis arcu, v | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/memberships?user_id=bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20&screen_name=onec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismo&cursor=eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20le&filter_to_owned_lists=%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20v 
```





#### get /lists/subscribers
Returns the subscribers of the specified list
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | dolor sit amet, consectetur adipiscing elit. Integ | 
| slug | query | string | yes | You can identify a list by its slug insted of its numerical id | at vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Pr | 
| owner_screen_name | query | string |  | the screen name of the user who owns the list being requested by a slug | mcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis sceler | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | . Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at | 
| cursor | query | string |  | Breaks the results into pages | inibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lore | 
| include_entities | query | string |  | The entities node will be disincluded when set to false |  elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque d | 
| skip_status | query | string |  | When set to either true, t or 1 | rna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed,  | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers?list_id=dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Integ&slug=at%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Pr&owner_screen_name=mcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20sceler&owner_id=.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at&cursor=inibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lore&include_entities=%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20d&skip_status=rna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20 
```





#### post /lists/subscribers/create
Subscribes the authenticated user to the specified list
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | teger ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convall | 
| slug | query | string | yes | You can identify a list being requested by a slug | aecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi ege | 
| owner_screen_name | query | string |  | the screen name of the user who owns the list being requested by a slug | ique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | t ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/subscribers/create?list_id=teger%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convall&slug=aecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20ege&owner_screen_name=ique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C&owner_id=t%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus 
```





#### get /lists/subscribers/show
Check if the specified user is a subscriber of the specified list
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus me | 
| slug | query | string | yes | You can identify a list being requested by a slug | eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit e | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | . Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvin | 
| user_id | query | string |  | The id of the user for whom to remove from the list | cies, felis felis aliquam enim, id feugiat magna elit in | 
| screen_name | query | string |  | The screen name of the user for whom to remove from the list | ium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique  | 
| owner_id | query | string |  | The is of the user who wons the list being requested by a slug | rat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultric | 
| include_entities | query | string |  | The entities node will be disincluded when set to false |  ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium  | 
| skip_status | query | string |  | When set to either true, t or 1 | t amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers/show?list_id=felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20me&slug=eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20e&owner_screen_name=.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvin&user_id=cies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in&screen_name=ium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20&owner_id=rat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultric&include_entities=%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20&skip_status=t%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C 
```





#### get /lists/subscribers/destroy
Returns list of subscribers destroy
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | a justo arcu, sodales a | 
| slug | query | string | yes | You can identify a list being requested by a slug | t. Integer ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec,  | 
| owner_screen_name | query | string |  | the screen name of the user who owns the list being requested by a slug |  eget, tristique ut quam. Maecenas et velit | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | cibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers/destroy?list_id=a%20justo%20arcu%2C%20sodales%20a&slug=t.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20&owner_screen_name=%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit&owner_id=cibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque 
```





#### get /lists/members/create_all
Returns lists of members create_all
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | arius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse p | 
| slug | query | string | yes | You can identify a list being requested by a slug | bh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, nec condimentum tellus sagittis at. Nullam vel metus ac quam gravida pellentesque.  | 
| owner_screen_name | query | string |  | the screen name of the user who owns the list being requested by a slug | u facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictu | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | l metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare ni | 
| user_id | query | string |  | The id of the user for whom to remove from the list | r congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sap | 
| screen_name | query | string |  | The screen name of the user for whom to remove from the list | nec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. S | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/members/create_all?list_id=arius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20p&slug=bh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20ac%20quam%20gravida%20pellentesque.%20&owner_screen_name=u%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictu&owner_id=l%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20ni&user_id=r%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sap&screen_name=nec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20S 
```





#### post /lists/destroy
Returns list of destroy
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | tesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque  | 
| slug | query | string | yes | You can identify a list being requested by a slug | modo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis  | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug |  tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | e. Nullam ultricies turpis nec dignissim aliquam. Nunc sed enim nec tellus ac | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/destroy?list_id=tesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20&slug=modo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20&owner_screen_name=%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque&owner_id=e.%20Nullam%20ultricies%20turpis%20nec%20dignissim%20aliquam.%20Nunc%20sed%20enim%20nec%20tellus%20ac 
```





#### post /lists/update
Returns lists of updates
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | lamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel u | 
| slug | query | string | yes | You can identify a list being requested by a slug | liquet. Phasellus faucibus | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | citudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tor | 
| name | query | string |  | The name for the list | ec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis | 
| mode | query | string |  | Whether your list is public or private | . Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, g | 
| description | query | string |  | The description to give the list |  | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/update?list_id=lamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20u&slug=liquet.%20Phasellus%20faucibus&owner_screen_name=sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed&owner_id=citudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tor&name=ec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis&mode=.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20g&description= 
```





#### post /lists/create
Returns list of create
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| name | query | string | The name for the list | dunt. Aliquam en | 
| mode | query | string | Whether your list is public or private | sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id er | 
| description | query | string | The description to give the list | gnissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla  | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/create?name=dunt.%20Aliquam%20en&mode=sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20er&description=gnissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20 
```





#### get /lists/show
Returns list of show
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | bh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien  | 
| slug | query | string | yes | You can identify a list being requested by a slug | ittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fus | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | putate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendre | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | iam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar,  | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/show?list_id=bh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20&slug=ittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fus&owner_screen_name=putate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendre&owner_id=iam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20 
```





#### get /lists/subscriptions
Returns list of subscriptions
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | The screen name of the user | apien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed  | 
| user_id | query | string | The id of the user for whom to return results for | s, a cursus neque erat vitae | 
| count | query | string | Specifies the number of tweets to try and retrieve | iet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed  | 
| cursor | query | string | Breaks the results into pages | se potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscriptions?screen_name=apien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20&user_id=s%2C%20a%20cursus%20neque%20erat%20vitae&count=iet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20&cursor=se%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus 
```





### Resource : list
#### get /list/members/show
Check if the specified user is a member of the specified list
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list |  consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellen | 
| slug | query | string | yes | You can identify a list being requested by a slug | c maxim | 
| user_id | query | string |  | The id of the user for whom to remove from the list | n vari | 
| screen_name | query | string |  | The screen name of the user for whom to remove from the list | mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. N | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | ipsum sapien, bibendum at placerat sit amet, volutpat sed lacu | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug |  nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium so | 
| include_entities | query | string |  | The entities node will be disincluded when set to false |  Proin id sceleris | 
| skip_status | query | string |  | When set to either true, t or 1 | ed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivam | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members/show?list_id=%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellen&slug=c%20maxim&user_id=n%20vari&screen_name=mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20N&owner_screen_name=ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacu&owner_id=%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20so&include_entities=%20Proin%20id%20sceleris&skip_status=ed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivam 
```





#### get /list/members
Returns the members of the specified list
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list |  egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices | 
| slug | query | string | yes | You can identify a list being requested by a slug | t elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | ur adipiscing elit. Integer ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo qu | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug |  Vivamus id vulputate odio | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | ignissim, tincidunt justo | 
| skip_status | query | string |  | When set to either true, t or 1 | lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies ni | 
| cursor | query | string |  | Breaks the results into pages |  aliquet. Phasell | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members?list_id=%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices&slug=t%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C&owner_screen_name=ur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20qu&owner_id=%20Vivamus%20id%20vulputate%20odio&include_entities=ignissim%2C%20tincidunt%20justo&skip_status=lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20ni&cursor=%20aliquet.%20Phasell 
```





#### post /list/members/create
Returns list of members create
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim r | 
| slug | query | string | yes | You can identify a list being requested by a slug | Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida orn | 
| screen_name | query | string |  | The screen name of the user for whom to remove from the list | olor sit amet, consectetur adipiscing elit. Integer ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, s | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | am enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin vari | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | urpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed mal | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/list/members/create?list_id=lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20r&slug=Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20orn&screen_name=olor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20s&owner_screen_name=am%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20vari&owner_id=urpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20mal 
```





#### get /list/members/destroy_all
Returns lists of destroy all
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | que erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ip | 
| slug | query | string | yes | You can identify a list being requested by a slug | facilisis nec, tempus ac ipsum.  | 
| user_id | query | string |  | The id of the user for whom to remove from the list | . Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagitt | 
| screen_name | query | string |  | The screen name of the user for whom to remove from the list | aesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandi | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | bendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | hicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet vari | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members/destroy_all?list_id=que%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ip&slug=facilisis%20nec%2C%20tempus%20ac%20ipsum.%20&user_id=.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagitt&screen_name=aesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandi&owner_screen_name=bendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed&owner_id=hicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20vari 
```





### Resource : direct_messages
#### get /direct_messages/sent
return 20 most recent direct messages sent
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| since_id | query | string | Returns result with an ID greater than the specified ID | din et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla | 
| max_id | query | string | Returns results with an ID less than or equal to the specified ID | ndum a | 
| count | query | string | Specifies the number of tweets to try and retrieve | t dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio | 
| page | query | string |  | ulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisqu | 
| include_entities | query | string | The entities node will be disincluded when set to false | gnissim, imperdiet nunc maximus, finibus erat | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages/sent?since_id=din%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla&max_id=ndum%20a&count=t%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio&page=ulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisqu&include_entities=gnissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat 
```





#### get /direct_messages/show
returns a single direct message specified by an id
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | query | string | yes | ID of direct message | lutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdi | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages/show?id=lutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdi 
```





#### get /direct_messages
return 20 most recent direct messages sent to user
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| since_id | query | string | Returns result with an ID greater than the specified ID | lacinia. In n | 
| max_id | query | string | Returns results with an ID less than or equal to the specified ID | aucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum.  | 
| include_entities | query | string | The entities node will be disincluded when set to false | tetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Mo | 
| skip_status | query | string | whether or not to include status | vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages?since_id=lacinia.%20In%20n&max_id=aucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20&include_entities=tetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Mo&skip_status=vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec 
```





#### post /direct_messages/destroy
destroys direct messages specified in required ID
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | query | string | yes | ID of direct message to delete | la. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, m | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta  | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/direct_messages/destroy?id=la.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20m&include_entities=cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20 
```





#### post /direct_messages/new
sends a new direct message to specified user
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user_id | query | string | yes | description |  magna ut | 
| screen_name | query | string |  | screen name of user receiving message |  Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar  | 
| text | query | string | yes | text of your direct message | e aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehic | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/direct_messages/new?user_id=%20magna%20ut&screen_name=%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20&text=e%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehic 
```





### Resource : search
#### get /search/tweets
returns collection of relevant Tweets matching query
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| q | query | string | yes | URL-encoded search query of 500 characters max | Vestibulum eget luctus met | 
| geocode | query | string |  | returns tweets by users located within given radius |  Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar v | 
| lang | query | string |  | restricts tweets to a given language | que dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam | 
| locale | query | string |  | language of query you are sending | amet,  | 
| result_type | query | string |  | specifies type of search results you prefer | ctum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat v | 
| count | query | string |  | Specifies the number of tweets to try and retrieve | t. Proin id scelerisque ipsum | 
| until | query | string |  | returns tweets created before given date | turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuad | 
| since_id | query | string |  | Returns result with an ID greater than the specified ID | s aug | 
| max_id | query | string |  | Returns results with an ID less than or equal to the specified ID | um fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, biben | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendi | 
| callback | query | string |  | response will use the callback with given name | ci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla.  | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/search/tweets?q=Vestibulum%20eget%20luctus%20met&geocode=%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20v&lang=que%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam&locale=amet%2C%20&result_type=ctum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20v&count=t.%20Proin%20id%20scelerisque%20ipsum&until=turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuad&since_id=s%20aug&max_id=um%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20biben&include_entities=mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendi&callback=ci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20 
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
| id | path | string | yes | The id of the saved search | amet, consectetur adipiscing elit. Integer ipsum sapien, bibendum at pl | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/saved_searches/show/amet%2C+consectetur+adipiscing+elit.+Integer+ipsum+sapien%2C+bibendum+at+pl 
```





#### post /saved_searches/create
Create a new saved search for the authenticated user
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| query | query | string | yes | The query of the search the user would like to save |  dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, f | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/saved_searches/create?query=%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20f 
```





#### post /saved_searches/destroy/{id}
Destroy a saved search for the authenticating user
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | path | string | yes | The id of the saved search | ue ut quam. Maecenas et velit dignissim, tinci | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/saved_searches/destroy/ue+ut+quam.+Maecenas+et+velit+dignissim%2C+tinci 
```





### Resource : friends
#### get /friends/ids
returns a cursored collection of user IDs followed by user
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| user_id | query | string | ID of user for whom to return results for | sse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliqu | 
| screen_name | query | string | screen name of user for whom to return results for | nibh sollicitudin et. Curabitur pulvinar metus massa, male | 
| cursor | query | string | causes list of connections to be broken in pages | ien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consect | 
| stringify_ids | query | string | IDs converted to strings | t, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum u | 
| count | query | string | Specifies the number of tweets to try and retrieve |  et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla.  | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friends/ids?user_id=sse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliqu&screen_name=nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20male&cursor=ien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consect&stringify_ids=t%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20u&count=%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20 
```





### Resource : followers
#### get /followers/ids
returns a cursored collection of user IDs following the user
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| user_id | query | string | ID of user for whom to return results for | lit. Integer ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac | 
| screen_name | query | string | screen name of user for whom to return results for | bus urna vel auctor fringilla. Mauris eu tortor blandit, bibendu | 
| cursor | query | string | causes list of connections to be broken in pages | sus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque  | 
| stringify_ids | query | string | IDs converted to strings | ulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed | 
| count | query | string | Specifies the number of tweets to try and retrieve | ie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringi | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/followers/ids?user_id=lit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac&screen_name=bus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendu&cursor=sus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20&stringify_ids=ulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed&count=ie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringi 
```





### Resource : friendships
#### get /friendships/incoming
returns collection of IDs of users with pending follow request
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| cursor | query | string | causes list of connections to be broken in pages | m non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh e | 
| stringify_ids | query | string | IDs converted to strings | pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum o | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/incoming?cursor=m%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20e&stringify_ids=pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20o 
```





#### get /friendships/outgoing
returns collection of IDs of users with pending follow request from the user
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| cursor | query | string | causes list of connections to be broken in pages | isse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tor | 
| stringify_ids | query | string | IDs converted to strings | lestie, er | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/outgoing?cursor=isse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tor&stringify_ids=lestie%2C%20er 
```





#### post /friendships/create
allows users to follow user sepcified by ID
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | screen name of user for whom to befriend | nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec es | 
| user_id | query | string | ID of user for whom to befriend | isus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum or | 
| follow | query | string | enable notifications for target user | obortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facil | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/create?screen_name=nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20es&user_id=isus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20or&follow=obortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facil 
```





#### post /friendships/destroy
allows user to unfollow user psecified by ID
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | screen name of user for whom to befriend | la malesuada, egestas velit id, sempe | 
| user_id | query | string | yes | ID of user for whom to befriend |  at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/destroy?screen_name=la%20malesuada%2C%20egestas%20velit%20id%2C%20sempe&user_id=%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel 
```





#### post /friendships/update
Allows one to enable or disable settings for specified user
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | screen name of user for whom to befriend | uis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. M | 
| user_id | query | string | yes | ID of user for whom to befriend | tum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque di | 
| device | query | string | yes | enable/disable device notifications for user | ar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur | 
| retweets | query | string | yes | enable/disable retweets from target user | urpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque  | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/update?screen_name=uis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20M&user_id=tum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20di&device=ar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur&retweets=urpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20 
```





#### get /friendships/show
returns detailed info about relationship between two users
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| source_id | query | string |  | user id of subject user | alesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempo | 
| source_screen_name | query | string |  | screen_name of subject user | trices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tort | 
| target_id | query | string | yes | user id of target user | , imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius soda | 
| target_screen_name | query | string | yes | screen name of target user | dales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus f | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/show?source_id=alesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempo&source_screen_name=trices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tort&target_id=%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20soda&target_screen_name=dales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20f 
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
| trend_location_woeid | query | string | the Yahoo! Where On Earth ID to user as defaul tend location | at sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut mo | 
| sleep_time_enabled | query | string | enables/disables sleep time, silencing notifications | , suscipit est. Etiam va | 
| start_sleep_time | query | string | the hour that sleep time should begin if enabled | amet sagittis. In non lectus eu nunc interdum l | 
| end_sleep_time | query | string | the hour that sleep time should end if enabled |  ornare nibh sollicitudin et. Curabitur pulvinar metus massa, male | 
| time_zone | query | string | timezone dates and times should be displayed in |  erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. | 
| lang | query | string | language which Twitter should render in for the user | eet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis  | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/settings?trend_location_woeid=at%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20mo&sleep_time_enabled=%2C%20suscipit%20est.%20Etiam%20va&start_sleep_time=amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20l&end_sleep_time=%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20male&time_zone=%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.&lang=eet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20 
```





#### post /account/update_delivery_device
sets which device Twitter delivers updates to for user
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| device | query | string | yes | must be one of sms, none | luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, fini | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | lestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque po | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_delivery_device?device=luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20fini&include_entities=lestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20po 
```





#### post /account/update_profile
sets values that users ar eable to set under Account tab
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| name | query | string | full name of profile |  massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arc | 
| url | query | string | url associated with profile | is nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam con | 
| location | query | string | city or country describing where user of account is. |  nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices  | 
| description | query | string | a description of user owning account | tum tellus sag | 
| include_entities | query | string | The entities node will be disincluded when set to false | nterdum sed. Vestibulum eget luctus m | 
| skip_status | query | string | whether or not to include statuses in response | lesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit am | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile?name=%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arc&url=is%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20con&location=%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20&description=tum%20tellus%20sag&include_entities=nterdum%20sed.%20Vestibulum%20eget%20luctus%20m&skip_status=lesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20am 
```





#### post /account/update_profile_background_image
updates user's profile background image
* Request Parameters :
  * Content-Type Accepted : multipart/form-data

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| tile | query | string |  | whether or not to tile background image | d tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, vel | 
| use | query | string |  | display background image or not | nec massa egestas, sed mollis est molestie. Aenean  | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | us sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. P | 
| skip_status | query | string |  | whether or not to include status in returned user objects | Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, fi | 
| file | formData | file | yes | image to replace background image of profile | --data-binary MjE4ZTBiY2IzYWFiODYwM2NiOTVmM2FlZWM3NTk4YTFhZjFkMGZmMTc5OTc4ZmI2Y2MzOTkwOWJkNTBjNzI5YmI3ZmY2OTA1NzEyMmEwNzBlMmYxOTNlMzQ1M2EzMWQ4MTc2N2NiMjc1YzQyZjQ4ZjE1Y2E0ZWMwYjlmOTQ5ZTA5ZTNmMjIzOWMwNmUwNDUyMGJkZTFhNjEyMjQ0YmQ2MWRlYzgwMjEzYWM3NWMxMjY1MWUwMTQ5ZTIyMDY2YWZkYTk5ZWI0MzI3NDg5NDYwNzBjZGVmNmFkMTc0NTQ1YmI4ODk2YmMxM2UzZTAyN2Q5NDQ5MjI5MDlkZGNhMGIzODMxZGM4NzQyZTMyODYyYWFhNWU2ZmZiODZiYTFhMjk0NTFkNWRlNjA5ZTUxYTFhZjkxZTM4Y2E5NTliNWYyNDNiOTg0MzNmMTY1Y2ZkNDA3ZDFkMmIwNzQ1MjNmZTE3ZTc0MDNjYjI3YjlkODQyMTliYWVkMTc2MjU0OTM1OTI4NDRiMzk5YWYwNmNkMjE4ZWQ3ZjQyZTllYWQxMTQ5ODIwNTk0YmI0MjQ0MDI3OTA5ODA4ZWJiODI5YmExZmU3OWMyZTEzZTZlZDYyMjY0ZmEyZmIzMTRiYjY1M2ZkNGZjYzVmNzg2ZWRiODVjNTlmZDY1OTBhOWZmNGZjMDdiMzQ= | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_background_image?tile=d%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20vel&use=nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20&include_entities=us%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20P&skip_status=Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20fi 
Content-Type: multipart/form-data, boundary=57cc4a5e87abd
Content-Length: 761
--57cc4a5e87abd
content-disposition: form-data; name="file"

--data-binary 
MjE4ZTBiY2IzYWFiODYwM2NiOTVmM2FlZWM3NTk4YTFhZjFkMGZmMTc5OTc4ZmI2Y2MzOTkwOWJkNTBjNzI5YmI3ZmY2OTA1NzEyMmEwNzBlMmYxOTNlMzQ1M2EzMWQ4MTc2N2NiMjc1YzQyZjQ4ZjE1Y2E0ZWMwYjlmOTQ5ZTA5ZTNmMjIzOWMwNmUwNDUyMGJkZTFhNjEyMjQ0YmQ2MWRlYzgwMjEzYWM3NWMxMjY1MWUwMTQ5ZTIyMDY2YWZkYTk5ZWI0MzI3NDg5NDYwNzBjZGVmNmFkMTc0NTQ1YmI4ODk2YmMxM2UzZTAyN2Q5NDQ5MjI5MDlkZGNhMGIzODMxZGM4NzQyZTMyODYyYWFhNWU2ZmZiODZiYTFhMjk0NTFkNWRlNjA5ZTUxYTFhZjkxZTM4Y2E5NTliNWYyNDNiOTg0MzNmMTY1Y2ZkNDA3ZDFkMmIwNzQ1MjNmZTE3ZTc0MDNjYjI3YjlkODQyMTliYWVkMTc2MjU0OTM1OTI4NDRiMzk5YWYwNmNkMjE4ZWQ3ZjQyZTllYWQxMTQ5ODIwNTk0YmI0MjQ0MDI3OTA5ODA4ZWJiODI5YmExZmU3OWMyZTEzZTZlZDYyMjY0ZmEyZmIzMTRiYjY1M2ZkNGZjYzVmNzg2ZWRiODVjNTlmZDY1OTBhOWZmNGZjMDdiMzQ=
```





#### post /account/update_profile_colors
sets one or more hex values that controls color scheme
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| profile_background_color | query | string | profile background color | llentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nu | 
| profile_link_color | query | string | profile link color | em eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent inte | 
| profile_sidebar_border_color | query | string | profile sidebar's border color | . Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimen | 
| profile_sidebar_fill_color | query | string | profile's sidebar background color | ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium  | 
| profile_text_color | query | string | profile text color | et sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ult | 
| include_entities | query | string | The entities node will be disincluded when set to false | sus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc m | 
| skip_status | query | string | whether or not to include statuses | ittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi conse | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_colors?profile_background_color=llentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nu&profile_link_color=em%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20inte&profile_sidebar_border_color=.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimen&profile_sidebar_fill_color=ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20&profile_text_color=et%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ult&include_entities=sus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20m&skip_status=ittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20conse 
```





#### post /account/update_profile_image
updates user's profile image
* Request Parameters :
  * Content-Type Accepted : multipart/form-data

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| skip_status | query | string |  | whether or not to include statuses |  eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum d | 
| image | formData | file | yes | image to be set as profile image | --data-binary YzFiMjhjZjIzOTIwODNjZTg4MThmYzVjZDQ4OTFiMjlmYjdhYWJjNTlmZjEyMWYyNTc5MjlhNzkxNDJkOGRjZDVlYWI1ZGU1NDc1ZDNkYmVkM2Q4NjgzNjEyMDEwMjg3MjdlMzIwMjkxNmI4NTdkYjJjNzkwNjZjZWE0OGQ2ZGY0YmVhM2E4OWJmYTczMTc3MDI3ZTU5YWE1MmUyNDAwMDA2YTczZjViYTdmY2FjNDVhZjRkNTgwMmM3NTc2MWYzMTUyMDNlMDg5MjU5Mjg5YTc2YjRlNzYwY2U3NmQwYTJlNjIwM2UwOGRkYjFlZjVjYWY0NzRhMjQ5NzQ2MGY0YjEzZDY4MWFkMmYxYWVkNWMzMWEzZmVjNDZjZTUxN2RmMjlkZTg5M2U0NWJhZjIwZDVhNmRlYWY3MmMzNGVhY2NiZjViMGRhMzkwNjAzZTdhMzk3MjhjYjQ3YTU4YTgwMDVhMDdjM2E3MDg1OTAyMzM5MDRmZTViZTVkY2Y5MDAwY2M0ZTMzNjBhMDhhOTYwOWQ0MWVhZTJiNjk1OTc4MzNjODA5ZDE0ZDdiZmM5YzQxMDYzZTdmNmU4MGE2YTk3ZGIzZjg5Y2U2MmNhMzZiNzFhMDVjNmQ0ZTQ5YTk3NTJiMGVlMDkxMzJmNjk2NzEzOTA4MjUxYTdhM2Y4ZjY4OWM= | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_image?skip_status=%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20d 
Content-Type: multipart/form-data, boundary=57cc4a5e899a4
Content-Length: 762
--57cc4a5e899a4
content-disposition: form-data; name="image"

--data-binary 
YzFiMjhjZjIzOTIwODNjZTg4MThmYzVjZDQ4OTFiMjlmYjdhYWJjNTlmZjEyMWYyNTc5MjlhNzkxNDJkOGRjZDVlYWI1ZGU1NDc1ZDNkYmVkM2Q4NjgzNjEyMDEwMjg3MjdlMzIwMjkxNmI4NTdkYjJjNzkwNjZjZWE0OGQ2ZGY0YmVhM2E4OWJmYTczMTc3MDI3ZTU5YWE1MmUyNDAwMDA2YTczZjViYTdmY2FjNDVhZjRkNTgwMmM3NTc2MWYzMTUyMDNlMDg5MjU5Mjg5YTc2YjRlNzYwY2U3NmQwYTJlNjIwM2UwOGRkYjFlZjVjYWY0NzRhMjQ5NzQ2MGY0YjEzZDY4MWFkMmYxYWVkNWMzMWEzZmVjNDZjZTUxN2RmMjlkZTg5M2U0NWJhZjIwZDVhNmRlYWY3MmMzNGVhY2NiZjViMGRhMzkwNjAzZTdhMzk3MjhjYjQ3YTU4YTgwMDVhMDdjM2E3MDg1OTAyMzM5MDRmZTViZTVkY2Y5MDAwY2M0ZTMzNjBhMDhhOTYwOWQ0MWVhZTJiNjk1OTc4MzNjODA5ZDE0ZDdiZmM5YzQxMDYzZTdmNmU4MGE2YTk3ZGIzZjg5Y2U2MmNhMzZiNzFhMDVjNmQ0ZTQ5YTk3NTJiMGVlMDkxMzJmNjk2NzEzOTA4MjUxYTdhM2Y4ZjY4OWM=
```





### Resource : blocks
#### get /blocks/list
disallows retweets and device notifications from a user
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| include_entities | query | string | The entities node will be disincluded when set to false | s facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi | 
| skip_status | query | string | whether or not to include statuses in response | psum dolor sit amet, consectetur adipiscing elit. Integer ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Du | 
| cursor | query | string | breaks block of user to be broken up into pages | tum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus fauci | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/blocks/list?include_entities=s%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi&skip_status=psum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Du&cursor=tum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20fauci 
```





#### get /blocks/ids
returns array of numeric user ids of blocked users
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| stringify_ids | query | string | returns array of numeric IDs as string IDs | disse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dig | 
| cursor | query | string | breaks up block of user IDs into pages | endum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, soda | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/blocks/ids?stringify_ids=disse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dig&cursor=endum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20soda 
```





#### post /blocks/create
blocks the specified user
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | screen name of user to be blocked | isque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vi | 
| user_id | query | string | yes | ID of user to be blocked | massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit digniss | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | ec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus,  | 
| skip_status | query | string |  | whether or not to skip statuses | molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. S | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/blocks/create?screen_name=isque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vi&user_id=massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20digniss&include_entities=ec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20&skip_status=molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20S 
```





#### post /blocks/destroy
un-blocks the specified user
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | screen name of user to be un-blocked | eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit  | 
| user_id | query | string | yes | ID of user to be un-blocked | t turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, a | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | es, sa | 
| skip_status | query | string |  | whether or not to skip statuses |  augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare  | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/blocks/destroy?screen_name=eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20&user_id=t%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20a&include_entities=es%2C%20sa&skip_status=%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20 
```





### Resource : users
#### get /users/lookup
returns fully-hydrated user objects up to 100
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | screen name of user to lookup | s, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuer | 
| user_id | query | string | ID of user to lookup | mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttito | 
| include_entities | query | string | The entities node will be disincluded when set to false | ndisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fri | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/lookup?screen_name=s%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuer&user_id=mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttito&include_entities=ndisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fri 
```





#### get /users/show
returns a variety of info about specified user
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | screen name of user to be shown |   | 
| user_id | query | string | yes | ID of user to be shown | se eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium to | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | orta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo cons | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/show?screen_name=%20&user_id=se%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20to&include_entities=orta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20cons 
```





#### get /users/search
simple relevance-based user search
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| q | query | string | yes | the search query to run against people search | mollis est mole | 
| page | query | string |  | specifies the page of results to receive | . Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputat | 
| count | query | string |  | number of people to return per page | elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in er | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | apibus vel elit | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/search?q=mollis%20est%20mole&page=.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputat&count=elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20er&include_entities=apibus%20vel%20elit 
```





#### get /users/contributees
collection of users specified user can contribute to
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | screen name of user that is contributed to | ibh pulvinar, vestib | 
| user_id | query | string | yes | ID of user to that is contributed to | ec dignissim aliquam. | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | us et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada  | 
| skip_status | query | string |  | whether or not to skip statuses |  ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi i | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/contributees?screen_name=ibh%20pulvinar%2C%20vestib&user_id=ec%20dignissim%20aliquam.&include_entities=us%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20&skip_status=%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20i 
```





#### get /users/contributors
collection of users that can contribute to specified account
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | screen name of user contributing | nec | 
| user_id | query | string | yes | ID of user contributing | uet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt just | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | ar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Cu | 
| skip_status | query | string |  | whether or not to skip statuses | it. Sed efficitur, mi sit amet fe | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/contributors?screen_name=nec&user_id=uet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20just&include_entities=ar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Cu&skip_status=it.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fe 
```





#### post /users/report_spam
Returna users report spam
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | The ID or screen_name of the user you want to report as a spammer | elit. Etiam convallis eu ligu | 
| user_id | query | string | The ID of the user you want to report as a spammer | isus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et digni | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/users/report_spam?screen_name=elit.%20Etiam%20convallis%20eu%20ligu&user_id=isus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20digni 
```





### Resource : geo
#### get /geo/id/{place_id}
Returns all the information about a know place
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| place_id | path | string | yes | A place in the world | bero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus  | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/id/bero%2C+faucibus+luctus+ante+nec%2C+volutpat+dictum+neque.+Donec+molestie%2C+eros+in+pretium+pulvinar%2C+est+leo+vehicula+lectus%2C+a+cursus+ 
```





#### get /geo/reverse_geoncode
Given a latitude and a longitude, searches for up to 20 places that can be used as a place_id when updatting a status
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| lat | query | string | yes | The latitude to search around | nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ul | 
| long | query | string | yes | The longtitude to search around | orper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, | 
| accuracy | query | string |  | A hint on region in which to search | psum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit  | 
| granularity | query | string |  | This is the minimal granularity of place types to return |  sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidun | 
| max_results | query | string |  | A hint as to the number of results to return | sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non conseq | 
| callback | query | string |  | If supplied, the responses will use the JSON format with a callback of the given name | o consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec  | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/reverse_geoncode?lat=nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ul&long=orper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C&accuracy=psum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20&granularity=%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidun&max_results=sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20conseq&callback=o%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20 
```





#### get /geo/search
Search for places that can be attached to a statuses/updates
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| lat | query | string | yes | The latitude to search around | arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volut | 
| long | query | string | yes | The longtitude to search around | urpis nec dignissim aliquam. Nunc sed enim nec tellus accumsan | 
| query | query | string | yes | Free-form text to match against while executing a geo-based query | bus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor | 
| ip | query | string | yes | An Ip address | is sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante | 
| accuracy | query | string |  | A hint on region in which to search | ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nul | 
| granularity | query | string |  | This is the minimal granularity of place types to return | i, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ulla | 
| contained_within | query | string |  | This is the place_id which you would like to restrict the search results to | vida pellentesque. Nullam ultricies turpis nec dignis | 
| attribute:street_address | query | string |  | This parameter searches for places which have this givven street address | et vestibulum q | 
| callback | query | string |  | If supplied, the responses will use the JSON format with a callback of the given name | us orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo c | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/search?lat=arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volut&long=urpis%20nec%20dignissim%20aliquam.%20Nunc%20sed%20enim%20nec%20tellus%20accumsan&query=bus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor&ip=is%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante&accuracy=ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nul&granularity=i%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ulla&contained_within=vida%20pellentesque.%20Nullam%20ultricies%20turpis%20nec%20dignis&attribute%3Astreet_address=et%20vestibulum%20q&callback=us%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20c 
```





#### get /geo/similar_places
Locates places near the given coordinates which are similar in name
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| lat | query | string | yes | The latitude to search around |  est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facili | 
| long | query | string | yes | The longtitude to search around | s vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non fel | 
| name | query | string | yes | The name a place is known as | r. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit e | 
| contained_within | query | string |  | This is the place_id which you would like to restrict the search results to |  varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec  | 
| attribute:street_address | query | string |  | This parameter searches for places which have this givven street address | amet, consectetur adipiscin | 
| callback | query | string |  | If supplied, the responses will use the JSON format with a callback of the given name | dio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, impe | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/similar_places?lat=%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facili&long=s%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20fel&name=r.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20e&contained_within=%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20&attribute%3Astreet_address=amet%2C%20consectetur%20adipiscin&callback=dio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20impe 
```





#### get /geo/places
Create a new place object at the given latitude and logitude
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| lat | query | string | yes | The latitude to search around | c massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. | 
| long | query | string | yes | The longtitude to search around | semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. | 
| name | query | string | yes | The name a place is known as | cidunt pretium sodales. Etiam dignissim risus non felis sc | 
| token | query | string | yes | The token found in the response from geo/similar_places | . Mauris sollicitudin varius purus, nec condimentum tellus sagittis at. Nullam vel metus ac quam gravida pellentesque. | 
| contained_within | query | string |  | This is the place_id which you would like to restrict the search results to | ng elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum | 
| attribute:street_address | query | string |  | This parameter searches for places which have this givven street address |  Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et  | 
| callback | query | string |  | If supplied, the responses will use the JSON format with a callback of the given name |  ac quam gravida pellentesque. Nullam ul | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/places?lat=c%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.&long=semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.&name=cidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20sc&token=.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20ac%20quam%20gravida%20pellentesque.&contained_within=ng%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum&attribute%3Astreet_address=%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20&callback=%20ac%20quam%20gravida%20pellentesque.%20Nullam%20ul 
```





### Resource : trends
#### get /trends/place
Returns the top 10 trending topics for a specific WOEID
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | query | string | yes | The yahoo where on earch id |  id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam ni | 
| exclude | query | string | yes | Setting this equal to hashtages will remove all hashtages from the trends list | d scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est  | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/trends/place?id=%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20ni&exclude=d%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20 
```





#### get /trends/available
Returns the availability



#### get /trends/closest
Returns the location that Twitter has trending topic information for
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| lat | query | string | yes | If provided with a long parameter the available trend locations wil be stored by distance | rices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuad | 
| long | query | string | yes | If provided with a lat parameters the available trend locations will be sorted by distance | tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis mol | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/trends/closest?lat=rices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuad&long=tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20mol 
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
| resources | query | array | [ [resources/items/schema](#schema_57cc4a5e98b45) ] | A comma-separated list of resource families you want to know the current rate limit disposition for | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/application/rate_limit_status 
```

* <p name="schema_57cc4a5e98b45">Object resources/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| schema | string | ellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu  | 







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

