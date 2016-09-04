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
| count | query | string | Specifies the number of tweets to try and retrieve | ibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tem | 
| since_id | query | string | Returns result with an ID greater than the specified ID | eugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, nec condimentum tellu | 
| max_id | query | string | Returns results with an ID less than or equal to the specified ID | s lobortis porttitor. Mauris vel ultrices erat, at hendrerit | 
| trim_user | query | string | When set to either true, t or 1, each tweet returned in a timeline will include a user object | e quis nec tellus. Morbi co | 
| contributor_details | query | string | This parameter enhances the contributors element of the status response | stie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non | 
| include_entities | query | string | The entities node will be disincluded when set to false | id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/mentions_timeline?count=ibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tem&since_id=eugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellu&max_id=s%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit&trim_user=e%20quis%20nec%20tellus.%20Morbi%20co&contributor_details=stie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non&include_entities=id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi 
```






#### get /statuses/user_timeline
Returns a collection of the most recent Tweets posted by the User
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| count | query | string | Specifies the number of tweets to try and retrieve | gna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, nec condimentum tellus sag | 
| since_id | query | string | Returns result with an ID greater than the specified ID | onec consectetur sed ante sit amet sagittis. In non le | 
| max_id | query | string | Returns results with an ID less than or equal to the specified ID | uere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt el | 
| trim_user | query | string | When set to either true, t or 1, each tweet returned in a timeline will include a user object | ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam | 
| exclude_replies | query | boolean | This paramters will prevent from appearing in the returned timeline | 1 | 
| contributor_details | query | string | This parameter enhances the contributors element of the status response | Mauris eu tortor blandit, bibendum tortor ac, con | 
| include_rts | query | boolean | When set to false, the timeline will strip any native retweet | 0 | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/user_timeline?count=gna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sag&since_id=onec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20le&max_id=uere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20el&trim_user=ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam&exclude_replies=1&contributor_details=Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20con&include_rts=0 
```






#### get /statuses/home_timeline
Returns a collection of the most recent Tweets
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| since_id | query | string | Returns result with an ID greater than the specified ID | dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris solli | 
| max_id | query | string | Returns results with an ID less than or equal to the specified ID | em elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu | 
| trim_user | query | string | When set to either true, t or 1, each tweet returned in a timeline will include a user object |  dui nisl. Donec  | 
| exclude_replies | query | boolean | This paramters will prevent from appearing in the returned timeline | 0 | 
| contributor_details | query | string | This parameter enhances the contributors element of the status response | s non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Se | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/home_timeline?since_id=dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20solli&max_id=em%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu&trim_user=%20dui%20nisl.%20Donec%20&exclude_replies=0&contributor_details=s%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Se 
```






#### post /statuses/retweets/{id}
Retweens a tweet
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | path | string | yes | The numerical ID of the desired status | utpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce | 
| trim_user | query | string |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object | gue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem ero | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/retweets/utpat+dignissim+mi+eget+lacinia.+In+nisi+odio%2C+porta+ut+quam+non%2C+imperdiet+varius+orci.+Donec+consectetur+sed+ante+sit+amet+sagittis.+In+non+lectus+eu+nunc+interdum+laoreet+a+ut+dui.+Sed+eu+nulla+malesuada%2C+egestas+velit+id%2C+semper+felis.+Fusce?trim_user=gue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20ero 
```






#### get /statuses/show/{id}
Retruns a single Tweet
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | path | string | yes | The numerical ID of the desired status |  nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sa | 
| trim_user | query | string |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object | lvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh  | 
| include_my_retweet | query | string | yes | When set to either true, t or 1, any Tweets returned that have been retweeted by the authenticating | incidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante  | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | onsectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputa | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/show/+nunc+maximus%2C+finibus+erat.+Proin+id+scelerisque+ipsum.+Quisque+porta+mauris+nec+massa+egestas%2C+sed+mollis+est+molestie.+Aenean+quam+nisi%2C+posuere+sed+varius+sodales%2C+sa?trim_user=lvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20&include_my_retweet=incidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20&include_entities=onsectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputa 
```






#### post /statuses/destroy/{id}
Destroys the status specified by the required ID parameter
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | path | integer | yes | The numerical ID of the desired status | 2140896271 | 
| id32 | path | int32 |  | The numerical ID of the desired status | 1699991725 | 
| id64 | path | int64 |  | The numerical ID of the desired status | -177917413919031296 | 
| trim_user | query | string |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object | at mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/destroy/2140896271?trim_user=at%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum 
```






#### post /statuses/update
Updates the authenticating user's status
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| status | query | string | yes | The text of your status update | psum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magn | 
| exampleStringIPv4 | query | ipv4 |  | The text of your status update | 16.69.245.132 | 
| exampleStringIPv6 | query | ipv6 |  | The text of your status update | 2001:bd8d:61f6:19e5:cef6:f02a:: | 
| exampleStringByte | query | byte |  | The text of your status update | cmlzdXMgbm9uIGZlbGlzIHNjZWxlcmlzcXVlIGFsaXF1ZXQuIFBoYXNlbGx1cyBmYXVjaWJ1cyB1cm5hIGFyY3UsIGV0IGRpZ25pc3NpbSBhdQ== | 
| exampleStringBinary | query | binary |  | The text of your status update | 01000111111011111111100111101010100110100011000111010110010111001101001101010111110110000111000100001110110101110110010011011000010011110110100110000111111101110011100001110010111111101111010111010100000110001100010011000100011010100010011000011100101100100001011100010111100111011011000101001001011101010000111100011101110011011110011110001110110110111100000011110010101101010001000001011100001111100000100010010101101100010000011110001011100001100010000001010000010010111000101101110111011010000011111010001110011111111101110001000001110010000101001001010001111001100010000000111010011101011111110011111010011010011011001000001100110001101111000100010100010111001010001100011100111001110000000000101010 | 
| exampleStringDate | query | date |  | The text of your status update | 2016-09-04 | 
| exampleStringDateTime | query | date-time |  | The text of your status update | 2016-09-04T14:26:44+00:00 | 
| exampleStringPassword | query | password |  | The text of your status update | %ÂS quZ$)Oi&U;H\G]3{fw3RIjScwkm)'xJ!?fLpztY}+°aS2eThiXB ~]%I@ | 
| exampleStringUri | query | uri |  | The text of your status update | http://localhost/path/script.php?query#fragment | 
| in_reply_to_status_id | query | string |  | The ID of an existing status | . Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id | 
| lat | query | string |  | The latitude of the location | pibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in er | 
| long | query | string |  | The longitude of the location | ctetur adipiscing elit. Integer ips | 
| place_id | query | string |  | A place in the world | disse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum | 
| display_coordinates | query | string |  | Whether or not to put a pin on the exact coordinates a tweet | ectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies n | 
| trim_user | query | string |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object |  vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodale | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/update?status=psum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magn&exampleStringIPv4=16.69.245.132&exampleStringIPv6=2001%3Abd8d%3A61f6%3A19e5%3Acef6%3Af02a%3A%3A&exampleStringByte=cmlzdXMgbm9uIGZlbGlzIHNjZWxlcmlzcXVlIGFsaXF1ZXQuIFBoYXNlbGx1cyBmYXVjaWJ1cyB1cm5hIGFyY3UsIGV0IGRpZ25pc3NpbSBhdQ%3D%3D&exampleStringBinary=01000111111011111111100111101010100110100011000111010110010111001101001101010111110110000111000100001110110101110110010011011000010011110110100110000111111101110011100001110010111111101111010111010100000110001100010011000100011010100010011000011100101100100001011100010111100111011011000101001001011101010000111100011101110011011110011110001110110110111100000011110010101101010001000001011100001111100000100010010101101100010000011110001011100001100010000001010000010010111000101101110111011010000011111010001110011111111101110001000001110010000101001001010001111001100010000000111010011101011111110011111010011010011011001000001100110001101111000100010100010111001010001100011100111001110000000000101010&exampleStringDate=2016-09-04&exampleStringDateTime=2016-09-04T14%3A26%3A44%2B00%3A00&exampleStringPassword=%25%C2S%20quZ%24%29Oi%26U%3BH%5CG%5D3%7Bfw3RIjScwkm%29%27xJ%21%3FfLpztY%7D%2B%B0aS2eThiXB%20~%5D%25I%40&exampleStringUri=http%3A%2F%2Flocalhost%2Fpath%2Fscript.php%3Fquery%23fragment&in_reply_to_status_id=.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id&lat=pibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20er&long=ctetur%20adipiscing%20elit.%20Integer%20ips&place_id=disse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum&display_coordinates=ectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20n&trim_user=%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodale 
```






#### get /statuses/oembed
Returns information allowing the creation of an embedded representation
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | query | string | yes | The tweet/status id to return embed code for | ia. In n | 
| url | query | string | yes | The encoded URL of the Tweet status to be embedded |  gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, c | 
| maxwidth | query | string |  | The maximum width in pixels that the embed should be rendered at |  sceleri | 
| hide_media | query | string |  | Specifies whether the embedded tweet should automatically show the original message in the case that the embedded Tweet is a reply | iss | 
| hide_thread | query | string |  | Specifies whether the embedded Tweet html should include a 'script' element pointing to widgets.js | rat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean q | 
| align | query | string |  | Specifies whether the embedded Tweet should be left aligned | per. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam  | 
| related | query | string |  | A value for the TWT related parameters | retium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imper | 
| lang | query | string |  | Languages code for the rendered embed | orta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius  | 
| exampleNumber | query | number |  | Languages code for the rendered embed | -7.098676E-247 | 
| exampleNumberFloat | query | float |  | Languages code for the rendered embed | 0 | 
| exampleNumberDouble | query | double |  | Languages code for the rendered embed | 0 | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/oembed?id=ia.%20In%20n&url=%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20c&maxwidth=%20sceleri&hide_media=iss&hide_thread=rat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20q&align=per.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20&related=retium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imper&lang=orta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20&exampleNumber=-7.098676E-247&exampleNumberFloat=0&exampleNumberDouble=0 
```






### Resource : lists
#### get /lists/list
Return all lists the authenticating or specified user subscribes to, including their own.
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | The screen name of the user for whom to return results for | ectetur adipiscing elit. Integer ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac  | 
| user_id | query | string | yes | The ID of the user for whom to return results for | eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapi | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/list?screen_name=ectetur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20&user_id=eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapi 
```






#### get /lists/statuses
Returns a timeline of tweets authored by memebers of the specified list
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | m dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum e | 
| slug | query | string | yes | You can identify a list by its slug instead of its numerical id | is odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc int | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, mole | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | tetur adipiscing elit. Integer ipsum s | 
| since_id | query | string |  | Returns result with an ID greater than the specified ID | issim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eg | 
| max_id | query | string |  | Returns results with an ID less than or equal to the specified ID | tum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tinc | 
| count | query | string |  | Specifies the number of tweets to try and retrieve |  suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesen | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | ermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nib | 
| include_rts | query | string |  | When set to either true, t or 1, the list timeline will contain native retweets in addition to the standard stream of tweets | us, eu bibendum orci. Sed | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/statuses?list_id=m%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20e&slug=is%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20int&owner_screen_name=vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20mole&owner_id=tetur%20adipiscing%20elit.%20Integer%20ipsum%20s&since_id=issim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eg&max_id=tum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tinc&count=%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesen&include_entities=ermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nib&include_rts=us%2C%20eu%20bibendum%20orci.%20Sed 
```






#### get /lists/members/destroy
Returns the list of memebers destroy
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | amcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices  | 
| slug | query | string | yes | You can identify a list by its slug instrad of its numerical id |  Suspendisse justo turpis, lacinia | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricie | 
| user_id | query | string |  | The id of the user for whom to remove from the list | inia. In nisi odio | 
| screen_name | query | string |  | The screen name of the user for whom to remove from the list | u dapibus vehicula, sem tortor a | 
| owner_id | query | string |  | The is of the user who wons the list being requested by a slug | malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/members/destroy?list_id=amcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20&slug=%20Suspendisse%20justo%20turpis%2C%20lacinia&owner_screen_name=Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricie&user_id=inia.%20In%20nisi%20odio&screen_name=u%20dapibus%20vehicula%2C%20sem%20tortor%20a&owner_id=malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus. 
```






#### get /lists/memberships
Returns the lists of the specified user has been added to
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| user_id | query | string | The id of the user for whom to return results for |  enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, nec condim | 
| screen_name | query | string | The screen name of the user for whom to return results for | lis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo  | 
| cursor | query | string | Breaks the results into pages | interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu l | 
| filter_to_owned_lists | query | string | When set to true, t or 1, will return just lists the authenticating user owns | nibh pulvinar, vestibulum magna ut, sus | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/memberships?user_id=%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condim&screen_name=lis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20&cursor=interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20l&filter_to_owned_lists=nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20sus 
```






#### get /lists/subscribers
Returns the subscribers of the specified list
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list |  eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libe | 
| slug | query | string | yes | You can identify a list by its slug insted of its numerical id | is at. Nullam vel metus ac q | 
| owner_screen_name | query | string |  | the screen name of the user who owns the list being requested by a slug | etus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Cu | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | a, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, nec condimentum tellus sagittis at. Nullam  | 
| cursor | query | string |  | Breaks the results into pages | rit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ul | 
| skip_status | query | string |  | When set to either true, t or 1 | t varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu n | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers?list_id=%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libe&slug=is%20at.%20Nullam%20vel%20metus%20ac%20q&owner_screen_name=etus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Cu&owner_id=a%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20&cursor=rit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa&include_entities=laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ul&skip_status=t%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20n 
```






#### post /lists/subscribers/create
Subscribes the authenticated user to the specified list
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | cies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus  | 
| slug | query | string | yes | You can identify a list being requested by a slug |  condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio.  | 
| owner_screen_name | query | string |  | the screen name of the user who owns the list being requested by a slug | c consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | mpor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis  | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/subscribers/create?list_id=cies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20&slug=%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20&owner_screen_name=c%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu&owner_id=mpor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20 
```






#### get /lists/subscribers/show
Check if the specified user is a subscriber of the specified list
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | psum. Ut molestie aliquet es | 
| slug | query | string | yes | You can identify a list being requested by a slug |  posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec mo | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | um felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus | 
| user_id | query | string |  | The id of the user for whom to remove from the list |  vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. M | 
| screen_name | query | string |  | The screen name of the user for whom to remove from the list | et nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices a | 
| owner_id | query | string |  | The is of the user who wons the list being requested by a slug | , posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo veh | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | . Sed sed neque dignissim, imperdiet nunc ma | 
| skip_status | query | string |  | When set to either true, t or 1 | da ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum d | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers/show?list_id=psum.%20Ut%20molestie%20aliquet%20es&slug=%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20mo&owner_screen_name=um%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus&user_id=%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20M&screen_name=et%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20a&owner_id=%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20veh&include_entities=.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20ma&skip_status=da%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20d 
```






#### get /lists/subscribers/destroy
Returns list of subscribers destroy
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | sagittis. In non lectus eu nunc interdum la | 
| slug | query | string | yes | You can identify a list being requested by a slug | et sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies n | 
| owner_screen_name | query | string |  | the screen name of the user who owns the list being requested by a slug | . Duis sem elit, pos | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | ulis odio. Mauris volutp | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers/destroy?list_id=sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20la&slug=et%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20n&owner_screen_name=.%20Duis%20sem%20elit%2C%20pos&owner_id=ulis%20odio.%20Mauris%20volutp 
```






#### get /lists/members/create_all
Returns lists of members create_all
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list |  eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur s | 
| slug | query | string | yes | You can identify a list being requested by a slug | s vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet | 
| owner_screen_name | query | string |  | the screen name of the user who owns the list being requested by a slug | e odio. | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | utpat dictum neque. Donec molestie, eros in pretium pul | 
| user_id | query | string |  | The id of the user for whom to remove from the list | eet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie alique | 
| screen_name | query | string |  | The screen name of the user for whom to remove from the list |  felis felis aliquam enim, id feugiat magna elit in sapien | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/members/create_all?list_id=%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20s&slug=s%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet&owner_screen_name=e%20odio.&owner_id=utpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pul&user_id=eet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20alique&screen_name=%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien 
```






#### post /lists/destroy
Returns list of destroy
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | get nibh pulvinar, vestibulu | 
| slug | query | string | yes | You can identify a list being requested by a slug | lor sit amet, consectetur adipiscing elit. Integer ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug |  pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, i | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec mas | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/destroy?list_id=get%20nibh%20pulvinar%2C%20vestibulu&slug=lor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut&owner_screen_name=%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20i&owner_id=ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20mas 
```






#### post /lists/update
Returns lists of updates
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | na arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentu | 
| slug | query | string | yes | You can identify a list being requested by a slug | icula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phase | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | ibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posue | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | ucibus urna arcu, et dignissim augue interdum sed. Vestib | 
| name | query | string |  | The name for the list | s, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. V | 
| mode | query | string |  | Whether your list is public or private | ingilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada | 
| description | query | string |  | The description to give the list | unc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aen | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/update?list_id=na%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentu&slug=icula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phase&owner_screen_name=ibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posue&owner_id=ucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestib&name=s%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20V&mode=ingilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada&description=unc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aen 
```






#### post /lists/create
Returns list of create
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| name | query | string | The name for the list | Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec es | 
| mode | query | string | Whether your list is public or private | tium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nul | 
| description | query | string | The description to give the list | ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet.  | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/create?name=Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20es&mode=tium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nul&description=ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20 
```






#### get /lists/show
Returns list of show
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | rper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phas | 
| slug | query | string | yes | You can identify a list being requested by a slug | ectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie con | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | n | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | hasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/show?list_id=rper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phas&slug=ectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20con&owner_screen_name=n&owner_id=hasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim 
```






#### get /lists/subscriptions
Returns list of subscriptions
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | The screen name of the user | r felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque v | 
| user_id | query | string | The id of the user for whom to return results for |  erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec mas | 
| count | query | string | Specifies the number of tweets to try and retrieve | s odio. M | 
| cursor | query | string | Breaks the results into pages | , malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue er | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscriptions?screen_name=r%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20v&user_id=%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20mas&count=s%20odio.%20M&cursor=%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20er 
```






### Resource : list
#### get /list/members/show
Check if the specified user is a member of the specified list
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | d tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim,  | 
| slug | query | string | yes | You can identify a list being requested by a slug |  aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicu | 
| user_id | query | string |  | The id of the user for whom to remove from the list |  amet ipsum euismod ullamcor | 
| screen_name | query | string |  | The screen name of the user for whom to remove from the list | s id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ul | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | tibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu,  | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug |  ultrices erat, at hendrerit en | 
| include_entities | query | string |  | The entities node will be disincluded when set to false |  turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, mol | 
| skip_status | query | string |  | When set to either true, t or 1 |  gravida pellentesque. Nullam ultricies turpis nec dignissim a | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members/show?list_id=d%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20&slug=%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicu&user_id=%20amet%20ipsum%20euismod%20ullamcor&screen_name=s%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ul&owner_screen_name=tibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20&owner_id=%20ultrices%20erat%2C%20at%20hendrerit%20en&include_entities=%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20mol&skip_status=%20gravida%20pellentesque.%20Nullam%20ultricies%20turpis%20nec%20dignissim%20a 
```






#### get /list/members
Returns the members of the specified list
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | la ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non f | 
| slug | query | string | yes | You can identify a list being requested by a slug | erdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis s | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus  | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | gna elit in sapien. Sed mal | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | s vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi ti | 
| skip_status | query | string |  | When set to either true, t or 1 | ccum | 
| cursor | query | string |  | Breaks the results into pages | mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulpu | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members?list_id=la%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20f&slug=erdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20s&owner_screen_name=purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20&owner_id=gna%20elit%20in%20sapien.%20Sed%20mal&include_entities=s%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20ti&skip_status=ccum&cursor=mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulpu 
```






#### post /list/members/create
Returns list of members create
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringill | 
| slug | query | string | yes | You can identify a list being requested by a slug |  eget luctus metus, eu bibendum | 
| screen_name | query | string |  | The screen name of the user for whom to remove from the list |  mollis est molestie. Aenean quam nisi, posuere sed var | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orc | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | ssa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/list/members/create?list_id=metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringill&slug=%20eget%20luctus%20metus%2C%20eu%20bibendum&screen_name=%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20var&owner_screen_name=ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orc&owner_id=ssa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec 
```






#### get /list/members/destroy_all
Returns lists of destroy all
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | esent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapie | 
| slug | query | string | yes | You can identify a list being requested by a slug | dapibus vel elit. Sed efficitur, mi sit amet ferment | 
| user_id | query | string |  | The id of the user for whom to remove from the list | o | 
| screen_name | query | string |  | The screen name of the user for whom to remove from the list |  Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet va | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | tum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsu | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug |  augue interdum sed. Ves | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members/destroy_all?list_id=esent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapie&slug=dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20ferment&user_id=o&screen_name=%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20va&owner_screen_name=tum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsu&owner_id=%20augue%20interdum%20sed.%20Ves 
```






### Resource : direct_messages
#### get /direct_messages/sent
return 20 most recent direct messages sent
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| since_id | query | string | Returns result with an ID greater than the specified ID | gue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien.  | 
| max_id | query | string | Returns results with an ID less than or equal to the specified ID | et luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat digniss | 
| count | query | string | Specifies the number of tweets to try and retrieve | sum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt | 
| page | query | string |  |  ornare purus ultrices  | 
| include_entities | query | string | The entities node will be disincluded when set to false | e. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages/sent?since_id=gue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20&max_id=et%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20digniss&count=sum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt&page=%20ornare%20purus%20ultrices%20&include_entities=e.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium 
```






#### get /direct_messages/show
returns a single direct message specified by an id
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | query | string | yes | ID of direct message | n nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages/show?id=n%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C 
```






#### get /direct_messages
return 20 most recent direct messages sent to user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| since_id | query | string | Returns result with an ID greater than the specified ID | i | 
| max_id | query | string | Returns results with an ID less than or equal to the specified ID | tum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque  | 
| include_entities | query | string | The entities node will be disincluded when set to false | etium sodales. | 
| skip_status | query | string | whether or not to include status | ibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Pr | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages?since_id=i&max_id=tum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20&include_entities=etium%20sodales.&skip_status=ibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Pr 
```






#### post /direct_messages/destroy
destroys direct messages specified in required ID
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | query | string | yes | ID of direct message to delete | , mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | bh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vesti | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/direct_messages/destroy?id=%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh&include_entities=bh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vesti 
```






#### post /direct_messages/new
sends a new direct message to specified user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user_id | query | string | yes | description | enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem t | 
| screen_name | query | string |  | screen name of user receiving message | onec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcor | 
| text | query | string | yes | text of your direct message |  nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/direct_messages/new?user_id=enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20t&screen_name=onec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcor&text=%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio 
```






### Resource : search
#### get /search/tweets
returns collection of relevant Tweets matching query
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| q | query | string | yes | URL-encoded search query of 500 characters max | rat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est m | 
| geocode | query | string |  | returns tweets by users located within given radius | sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum e | 
| lang | query | string |  | restricts tweets to a given language | posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut or | 
| locale | query | string |  | language of query you are sending | vinar, est leo vehicula lectus, a cursus neque era | 
| result_type | query | string |  | specifies type of search results you prefer | um eget l | 
| count | query | string |  | Specifies the number of tweets to try and retrieve | acu | 
| until | query | string |  | returns tweets created before given date |  non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est | 
| since_id | query | string |  | Returns result with an ID greater than the specified ID | enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. | 
| max_id | query | string |  | Returns results with an ID less than or equal to the specified ID | id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien  | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | gilla orci, gravida ornare nibh sol | 
| callback | query | string |  | response will use the callback with given name | ipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis al | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/search/tweets?q=rat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20m&geocode=sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20e&lang=posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20or&locale=vinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20era&result_type=um%20eget%20l&count=acu&until=%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est&since_id=enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.&max_id=id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20&include_entities=gilla%20orci%2C%20gravida%20ornare%20nibh%20sol&callback=ipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20al 
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
| id | path | string | yes | The id of the saved search | et fermentum ultricies, felis felis aliquam eni | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/saved_searches/show/et+fermentum+ultricies%2C+felis+felis+aliquam+eni 
```






#### post /saved_searches/create
Create a new saved search for the authenticated user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| query | query | string | yes | The query of the search the user would like to save | onec quis facilisis arcu, vel ultrices augue. Suspendisse  | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/saved_searches/create?query=onec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20 
```






#### post /saved_searches/destroy/{id}
Destroy a saved search for the authenticating user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | path | string | yes | The id of the saved search |  tempus ac ipsum. Ut molestie aliquet est, | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/saved_searches/destroy/+tempus+ac+ipsum.+Ut+molestie+aliquet+est%2C 
```






### Resource : friends
#### get /friends/ids
returns a cursored collection of user IDs followed by user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| user_id | query | string | ID of user for whom to return results for | t ornare pur | 
| screen_name | query | string | screen name of user for whom to return results for | leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam n | 
| cursor | query | string | causes list of connections to be broken in pages | ristiq | 
| stringify_ids | query | string | IDs converted to strings | lerisque ipsum. Qui | 
| count | query | string | Specifies the number of tweets to try and retrieve | nti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum ele | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friends/ids?user_id=t%20ornare%20pur&screen_name=leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20n&cursor=ristiq&stringify_ids=lerisque%20ipsum.%20Qui&count=nti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20ele 
```






### Resource : followers
#### get /followers/ids
returns a cursored collection of user IDs following the user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| user_id | query | string | ID of user for whom to return results for |  quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat  | 
| screen_name | query | string | screen name of user for whom to return results for | . Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orc | 
| cursor | query | string | causes list of connections to be broken in pages | et, consectetur adipiscing elit. Integer ipsum sapien, bibendum at placerat si | 
| stringify_ids | query | string | IDs converted to strings | ec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arc | 
| count | query | string | Specifies the number of tweets to try and retrieve | sce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi conse | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/followers/ids?user_id=%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20&screen_name=.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orc&cursor=et%2C%20consectetur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20si&stringify_ids=ec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arc&count=sce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20conse 
```






### Resource : friendships
#### get /friendships/incoming
returns collection of IDs of users with pending follow request
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| cursor | query | string | causes list of connections to be broken in pages | . Aliquam enim dui, con | 
| stringify_ids | query | string | IDs converted to strings | ntesque enim metus in eros. Mauris sollicitudin varius purus, nec condimentum tellus sagittis at. Nullam vel metus ac quam gravida pe | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/incoming?cursor=.%20Aliquam%20enim%20dui%2C%20con&stringify_ids=ntesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20ac%20quam%20gravida%20pe 
```






#### get /friendships/outgoing
returns collection of IDs of users with pending follow request from the user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| cursor | query | string | causes list of connections to be broken in pages | auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia | 
| stringify_ids | query | string | IDs converted to strings | trices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/outgoing?cursor=auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia&stringify_ids=trices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C 
```






#### post /friendships/create
allows users to follow user sepcified by ID
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | screen name of user for whom to befriend |  Vestibulum eget luctus metus, eu bibend | 
| user_id | query | string | ID of user for whom to befriend | m, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, po | 
| follow | query | string | enable notifications for target user | rci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. I | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/create?screen_name=%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibend&user_id=m%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20po&follow=rci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20I 
```






#### post /friendships/destroy
allows user to unfollow user psecified by ID
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | screen name of user for whom to befriend | ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare n | 
| user_id | query | string | yes | ID of user for whom to befriend | et luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta  | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/destroy?screen_name=ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20n&user_id=et%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20 
```






#### post /friendships/update
Allows one to enable or disable settings for specified user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | screen name of user for whom to befriend | hicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius  | 
| user_id | query | string | yes | ID of user for whom to befriend | s scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam | 
| device | query | string | yes | enable/disable device notifications for user | lestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scele | 
| retweets | query | string | yes | enable/disable retweets from target user | ndisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nib | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/update?screen_name=hicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20&user_id=s%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam&device=lestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scele&retweets=ndisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nib 
```






#### get /friendships/show
returns detailed info about relationship between two users
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| source_id | query | string |  | user id of subject user | cilisis sapien finibus at. Nullam finibus urn | 
| source_screen_name | query | string |  | screen_name of subject user | ttis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, ege | 
| target_id | query | string | yes | user id of target user | ugue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehic | 
| target_screen_name | query | string | yes | screen name of target user | ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, m | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/show?source_id=cilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urn&source_screen_name=ttis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20ege&target_id=ugue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehic&target_screen_name=ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20m 
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
| trend_location_woeid | query | string | the Yahoo! Where On Earth ID to user as defaul tend location | s, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Pro | 
| sleep_time_enabled | query | string | enables/disables sleep time, silencing notifications | us sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vest | 
| start_sleep_time | query | string | the hour that sleep time should begin if enabled |  adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis | 
| end_sleep_time | query | string | the hour that sleep time should end if enabled | o, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim,  | 
| time_zone | query | string | timezone dates and times should be displayed in | e interdum sed. Vestibu | 
| lang | query | string | language which Twitter should render in for the user | enas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orc | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/settings?trend_location_woeid=s%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Pro&sleep_time_enabled=us%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vest&start_sleep_time=%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis&end_sleep_time=o%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20&time_zone=e%20interdum%20sed.%20Vestibu&lang=enas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orc 
```






#### post /account/update_delivery_device
sets which device Twitter delivers updates to for user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| device | query | string | yes | must be one of sms, none | amet sagittis. In non lectus eu  | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum  | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_delivery_device?device=amet%20sagittis.%20In%20non%20lectus%20eu%20&include_entities=commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20 
```






#### post /account/update_profile
sets values that users ar eable to set under Account tab
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| name | query | string | full name of profile | s lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh s | 
| url | query | string | url associated with profile | amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibu | 
| location | query | string | city or country describing where user of account is. | quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis c | 
| description | query | string | a description of user owning account | m. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non co | 
| include_entities | query | string | The entities node will be disincluded when set to false | pulvinar, vestibulum magna ut, suscipit est | 
| skip_status | query | string | whether or not to include statuses in response | . Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus  | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile?name=s%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20s&url=amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibu&location=quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20c&description=m.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20co&include_entities=pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est&skip_status=.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20 
```






#### post /account/update_profile_background_image
updates user's profile background image
* Request Parameters :
  * Content-Type Accepted : multipart/form-data


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| tile | query | string |  | whether or not to tile background image | tium pulvinar, es | 
| use | query | string |  | display background image or not | ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat digniss | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | uere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit liber | 
| skip_status | query | string |  | whether or not to include status in returned user objects | la. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed | 
| file | formData | file | yes | image to replace background image of profile | --data-binary NmJjYzMwZTc1NzAxMzhiODc4ZDczZGJjY2Y0NmM1MTc0YmNhNDY3YjUwN2M0NWI2ZDA5ZDBiNWVmODdmNTIxY2FjZDRlOGMyNzFiZWIwMmVjMGM2YzJhOWFiYmY4MGQ1ODAwZjMxMTI5YWI1ZDZhY2EyMGUxNTFhY2M5YzdlNWEzOWEzMTFmZDI4YjZiN2M3Yjk5M2Q5NmI3YzEyNGU3ZTUwNDIzMmQwM2RhNTkzNDg0MTU5MjMwODdmYmI2ODU0MTcwOWExOGZiZGY0MTBlZmM3ZGU4Mjc4MmViZTQ3ZTkwNDAyNjUyMWNiMmE2NWIwZTU4N2QxYmY4ZjMzODEwYjQ2OTVkNWYzMTg1YjBjYjljZTMzNDJjMDAzOGU3ZTQ1ZWM3OTFmNmEyZmFlMGRmNzUzNmViMjFhZmI4MjY4ZTk1NzU1ODAxYzg4NDU3OTE4YmY1N2IzZWMzZmYwNjk4M2FmYjhjNGE2OWQwN2U3NWUzYzY4YjMzZTU2OTk4NTUxYmQ4ODgxMzY0YTliMTYxNTUxNDY2MTYxOWVhZGFlYjM4YTIyNjE1OTg2MjJiNWIxMjY2MThjYzhkZGNjNmQ3MzM5NmEzMzBkOWZmMGNmYmU5NzcyYzQ5YWIxOWQwYTFkOWIyNzliOWM0ODEzY2E0YTNlMDM3NTMzODc3MTUzYzM= | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_background_image?tile=tium%20pulvinar%2C%20es&use=ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20digniss&include_entities=uere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20liber&skip_status=la.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed 
Content-Type: multipart/form-data, boundary=57cc2f24d7781
Content-Length: 761
--57cc2f24d7781
content-disposition: form-data; name="file"

--data-binary 
NmJjYzMwZTc1NzAxMzhiODc4ZDczZGJjY2Y0NmM1MTc0YmNhNDY3YjUwN2M0NWI2ZDA5ZDBiNWVmODdmNTIxY2FjZDRlOGMyNzFiZWIwMmVjMGM2YzJhOWFiYmY4MGQ1ODAwZjMxMTI5YWI1ZDZhY2EyMGUxNTFhY2M5YzdlNWEzOWEzMTFmZDI4YjZiN2M3Yjk5M2Q5NmI3YzEyNGU3ZTUwNDIzMmQwM2RhNTkzNDg0MTU5MjMwODdmYmI2ODU0MTcwOWExOGZiZGY0MTBlZmM3ZGU4Mjc4MmViZTQ3ZTkwNDAyNjUyMWNiMmE2NWIwZTU4N2QxYmY4ZjMzODEwYjQ2OTVkNWYzMTg1YjBjYjljZTMzNDJjMDAzOGU3ZTQ1ZWM3OTFmNmEyZmFlMGRmNzUzNmViMjFhZmI4MjY4ZTk1NzU1ODAxYzg4NDU3OTE4YmY1N2IzZWMzZmYwNjk4M2FmYjhjNGE2OWQwN2U3NWUzYzY4YjMzZTU2OTk4NTUxYmQ4ODgxMzY0YTliMTYxNTUxNDY2MTYxOWVhZGFlYjM4YTIyNjE1OTg2MjJiNWIxMjY2MThjYzhkZGNjNmQ3MzM5NmEzMzBkOWZmMGNmYmU5NzcyYzQ5YWIxOWQwYTFkOWIyNzliOWM0ODEzY2E0YTNlMDM3NTMzODc3MTUzYzM=
```






#### post /account/update_profile_colors
sets one or more hex values that controls color scheme
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| profile_background_color | query | string | profile background color | issim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, t | 
| profile_link_color | query | string | profile link color | u fac | 
| profile_sidebar_border_color | query | string | profile sidebar's border color |  semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molest | 
| profile_sidebar_fill_color | query | string | profile's sidebar background color | en. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, n | 
| profile_text_color | query | string | profile text color | laoreet a ut dui. Sed eu nulla malesua | 
| include_entities | query | string | The entities node will be disincluded when set to false | lit in | 
| skip_status | query | string | whether or not to include statuses | ci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc  | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_colors?profile_background_color=issim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20t&profile_link_color=u%20fac&profile_sidebar_border_color=%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molest&profile_sidebar_fill_color=en.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20n&profile_text_color=laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesua&include_entities=lit%20in&skip_status=ci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20 
```






#### post /account/update_profile_image
updates user's profile image
* Request Parameters :
  * Content-Type Accepted : multipart/form-data


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| skip_status | query | string |  | whether or not to include statuses | rdiet nunc maximus, finibus erat. Proin id scelerisque ips | 
| image | formData | file | yes | image to be set as profile image | --data-binary MmE4NzMwMDg5OGY1MTdmZmRmMzRiZjMyZDJjNzQ5YWE4NDkyMGE4OGU3MDFhN2ViM2RhMGE1NjE4ZmQ2NzIwODE0ODg3N2ZmOTE2ZDBhMTVmODBjNDMzNTBlNWIwMmYwYmU2ZDBmMTE0MDNlNzk1MDJjYTE4OWM1NzEyZmEyYTNiODQwNWM0MWI3YzM4ZGRhOTNmZTJmNDkwZWU4ZWEwOGM2OTRhYzlkY2MzNWJlNzM1MGE4YmFkMWQ4MjY3MDdjNDZiYzE3ZTM5ZjA0NjFhNmZlYThiNGViYjk1MTFhZjA1ODQyODZlMDEzZDFhYTI5Yjc0NTYxNWJiOGNlNTliNTU3YWMxMGFhNjk1Y2I2MDQzNWQyMzFmZmZhMjY5MjhlODc2MGE3YWM4MzI2ZDhlOGNjMWM3MGU5MDE1MDk4MjMzYzQzODNiNDlkYTViMTI1ZDJiODIwNjQ1MjJlNWYyNjU0NDY3MTYxNWE4N2FlMmU4YTAzNDU1ZTFhMTIxMThhYzY0NjIxOTVjNjk2NzU5NjFiODNmMTA0NzI0OWM2YTlhYzZlYzE2NDdlMmJiODZiYWU0MWQxYTRhNjAzNGQyYjUwNDdhMjE0MWRmNDc4OGIzMmY1MDYyMWYyYmJlMzlkM2MwZTI2NmQ4YTIxNzk5MzNkZTZjNzg4YzA2ZDM0ODU= | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_image?skip_status=rdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ips 
Content-Type: multipart/form-data, boundary=57cc2f24d9614
Content-Length: 762
--57cc2f24d9614
content-disposition: form-data; name="image"

--data-binary 
MmE4NzMwMDg5OGY1MTdmZmRmMzRiZjMyZDJjNzQ5YWE4NDkyMGE4OGU3MDFhN2ViM2RhMGE1NjE4ZmQ2NzIwODE0ODg3N2ZmOTE2ZDBhMTVmODBjNDMzNTBlNWIwMmYwYmU2ZDBmMTE0MDNlNzk1MDJjYTE4OWM1NzEyZmEyYTNiODQwNWM0MWI3YzM4ZGRhOTNmZTJmNDkwZWU4ZWEwOGM2OTRhYzlkY2MzNWJlNzM1MGE4YmFkMWQ4MjY3MDdjNDZiYzE3ZTM5ZjA0NjFhNmZlYThiNGViYjk1MTFhZjA1ODQyODZlMDEzZDFhYTI5Yjc0NTYxNWJiOGNlNTliNTU3YWMxMGFhNjk1Y2I2MDQzNWQyMzFmZmZhMjY5MjhlODc2MGE3YWM4MzI2ZDhlOGNjMWM3MGU5MDE1MDk4MjMzYzQzODNiNDlkYTViMTI1ZDJiODIwNjQ1MjJlNWYyNjU0NDY3MTYxNWE4N2FlMmU4YTAzNDU1ZTFhMTIxMThhYzY0NjIxOTVjNjk2NzU5NjFiODNmMTA0NzI0OWM2YTlhYzZlYzE2NDdlMmJiODZiYWU0MWQxYTRhNjAzNGQyYjUwNDdhMjE0MWRmNDc4OGIzMmY1MDYyMWYyYmJlMzlkM2MwZTI2NmQ4YTIxNzk5MzNkZTZjNzg4YzA2ZDM0ODU=
```






### Resource : blocks
#### get /blocks/list
disallows retweets and device notifications from a user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| include_entities | query | string | The entities node will be disincluded when set to false | sim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac  | 
| skip_status | query | string | whether or not to include statuses in response | aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non conseq | 
| cursor | query | string | breaks block of user to be broken up into pages | san nibh, sed pellentesque enim metus in eros. Mauris  | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/blocks/list?include_entities=sim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20&skip_status=aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20conseq&cursor=san%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20 
```






#### get /blocks/ids
returns array of numeric user ids of blocked users
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| stringify_ids | query | string | returns array of numeric IDs as string IDs |  sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus u | 
| cursor | query | string | breaks up block of user IDs into pages | ctetur sit amet du | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/blocks/ids?stringify_ids=%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20u&cursor=ctetur%20sit%20amet%20du 
```






#### post /blocks/create
blocks the specified user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | screen name of user to be blocked | tiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula qu | 
| user_id | query | string | yes | ID of user to be blocked | uam non, imperdiet variu | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | ilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt e | 
| skip_status | query | string |  | whether or not to skip statuses | amus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestib | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/blocks/create?screen_name=tiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20qu&user_id=uam%20non%2C%20imperdiet%20variu&include_entities=ilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20e&skip_status=amus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestib 
```






#### post /blocks/destroy
un-blocks the specified user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | screen name of user to be un-blocked | suada facilisis sapien finibus at. Null | 
| user_id | query | string | yes | ID of user to be un-blocked | ntesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | mpus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Do | 
| skip_status | query | string |  | whether or not to skip statuses | a orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar m | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/blocks/destroy?screen_name=suada%20facilisis%20sapien%20finibus%20at.%20Null&user_id=ntesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel&include_entities=mpus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Do&skip_status=a%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20m 
```






### Resource : users
#### get /users/lookup
returns fully-hydrated user objects up to 100
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | screen name of user to lookup | cidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla male | 
| user_id | query | string | ID of user to lookup | e odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus e | 
| include_entities | query | string | The entities node will be disincluded when set to false | t leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, se | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/lookup?screen_name=cidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20male&user_id=e%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20e&include_entities=t%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20se 
```






#### get /users/show
returns a variety of info about specified user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | screen name of user to be shown | r ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut mo | 
| user_id | query | string | yes | ID of user to be shown | s purus, nec condimentum tellus sagittis at. Nullam vel metus ac quam g | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | en finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. S | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/show?screen_name=r%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20mo&user_id=s%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20ac%20quam%20g&include_entities=en%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20S 
```






#### get /users/search
simple relevance-based user search
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| q | query | string | yes | the search query to run against people search | g elit. Integer ipsum sapien, bibendum at placerat sit amet, | 
| page | query | string |  | specifies the page of results to receive |  Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollic | 
| count | query | string |  | number of people to return per page | rius purus, nec condimentum tellus sagittis at. Nullam vel metus ac quam gravida pellentesque. Nullam ultrici | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | bortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium torto | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/search?q=g%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C&page=%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollic&count=rius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20ac%20quam%20gravida%20pellentesque.%20Nullam%20ultrici&include_entities=bortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20torto 
```






#### get /users/contributees
collection of users specified user can contribute to
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | screen name of user that is contributed to | nterdum sed. Ves | 
| user_id | query | string | yes | ID of user to that is contributed to | c mas | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | que. Nullam ultricies turpis nec digni | 
| skip_status | query | string |  | whether or not to skip statuses | din et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Susp | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/contributees?screen_name=nterdum%20sed.%20Ves&user_id=c%20mas&include_entities=que.%20Nullam%20ultricies%20turpis%20nec%20digni&skip_status=din%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Susp 
```






#### get /users/contributors
collection of users that can contribute to specified account
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | screen name of user contributing | inibus erat. Pr | 
| user_id | query | string | yes | ID of user contributing | tur adipiscing elit. Integer ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. D | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | nibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id te | 
| skip_status | query | string |  | whether or not to skip statuses |  Mauris volutpat dignissim mi eget lacinia. In nis | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/contributors?screen_name=inibus%20erat.%20Pr&user_id=tur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20D&include_entities=nibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20te&skip_status=%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nis 
```






#### post /users/report_spam
Returna users report spam
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | The ID or screen_name of the user you want to report as a spammer |  Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sag | 
| user_id | query | string | The ID of the user you want to report as a spammer | llus faucibus urna arcu, et dignissim augue  | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/users/report_spam?screen_name=%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sag&user_id=llus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20 
```






### Resource : geo
#### get /geo/id/{place_id}
Returns all the information about a know place
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| place_id | path | string | yes | A place in the world | a pellentesq | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/id/a+pellentesq 
```






#### get /geo/reverse_geoncode
Given a latitude and a longitude, searches for up to 20 places that can be used as a place_id when updatting a status
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| lat | query | string | yes | The latitude to search around | ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Mo | 
| long | query | string | yes | The longtitude to search around | . Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, | 
| accuracy | query | string |  | A hint on region in which to search | luctus ante nec, volutpat dictum neque. Donec molestie,  | 
| granularity | query | string |  | This is the minimal granularity of place types to return | tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat  | 
| max_results | query | string |  | A hint as to the number of results to return | apibus vehicula, sem tortor a | 
| callback | query | string |  | If supplied, the responses will use the JSON format with a callback of the given name | nsequat mi id eros vive | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/reverse_geoncode?lat=ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Mo&long=.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C&accuracy=luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20&granularity=tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20&max_results=apibus%20vehicula%2C%20sem%20tortor%20a&callback=nsequat%20mi%20id%20eros%20vive 
```






#### get /geo/search
Search for places that can be attached to a statuses/updates
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| lat | query | string | yes | The latitude to search around | lutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet | 
| long | query | string | yes | The longtitude to search around | interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulp | 
| query | query | string | yes | Free-form text to match against while executing a geo-based query | bero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar | 
| ip | query | string | yes | An Ip address | pendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit  | 
| accuracy | query | string |  | A hint on region in which to search | egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem e | 
| granularity | query | string |  | This is the minimal granularity of place types to return |  nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec es | 
| contained_within | query | string |  | This is the place_id which you would like to restrict the search results to | stas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Su | 
| attribute:street_address | query | string |  | This parameter searches for places which have this givven street address | , consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit  | 
| callback | query | string |  | If supplied, the responses will use the JSON format with a callback of the given name | to quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu n | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/search?lat=lutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet&long=interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulp&query=bero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar&ip=pendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20&accuracy=egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20e&granularity=%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20es&contained_within=stas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Su&attribute%3Astreet_address=%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20&callback=to%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20n 
```






#### get /geo/similar_places
Locates places near the given coordinates which are similar in name
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| lat | query | string | yes | The latitude to search around | s, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec  | 
| long | query | string | yes | The longtitude to search around | entesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim | 
| name | query | string | yes | The name a place is known as | , laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pelle | 
| contained_within | query | string |  | This is the place_id which you would like to restrict the search results to | consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imper | 
| attribute:street_address | query | string |  | This parameter searches for places which have this givven street address | s ac quam gravida pellentesque. Nullam ultric | 
| callback | query | string |  | If supplied, the responses will use the JSON format with a callback of the given name |  Donec | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/similar_places?lat=s%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20&long=entesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim&name=%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pelle&contained_within=consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imper&attribute%3Astreet_address=s%20ac%20quam%20gravida%20pellentesque.%20Nullam%20ultric&callback=%20Donec 
```






#### get /geo/places
Create a new place object at the given latitude and logitude
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| lat | query | string | yes | The latitude to search around | e quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie cong | 
| long | query | string | yes | The longtitude to search around | s orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed  | 
| name | query | string | yes | The name a place is known as |  fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue  | 
| token | query | string | yes | The token found in the response from geo/similar_places | lam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse jus | 
| contained_within | query | string |  | This is the place_id which you would like to restrict the search results to | varius lobortis porttitor. M | 
| attribute:street_address | query | string |  | This parameter searches for places which have this givven street address | is nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis mole | 
| callback | query | string |  | If supplied, the responses will use the JSON format with a callback of the given name | vinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed s | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/places?lat=e%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20cong&long=s%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20&name=%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20&token=lam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20jus&contained_within=varius%20lobortis%20porttitor.%20M&attribute%3Astreet_address=is%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20mole&callback=vinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20s 
```






### Resource : trends
#### get /trends/place
Returns the top 10 trending topics for a specific WOEID
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | query | string | yes | The yahoo where on earch id | eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent inte | 
| exclude | query | string | yes | Setting this equal to hashtages will remove all hashtages from the trends list | ulputat | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/trends/place?id=eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20inte&exclude=ulputat 
```






#### get /trends/available
Returns the availability



#### get /trends/closest
Returns the location that Twitter has trending topic information for
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| lat | query | string | yes | If provided with a long parameter the available trend locations wil be stored by distance | cing elit. Suspendisse justo turpis, lacinia id tempor sed, dapib | 
| long | query | string | yes | If provided with a lat parameters the available trend locations will be sorted by distance | lestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo veh | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/trends/closest?lat=cing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapib&long=lestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20veh 
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
| resources | query | array | [ [0/items/schema](#schema_57cc2f24e8323) ] | A comma-separated list of resource families you want to know the current rate limit disposition for | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/application/rate_limit_status 
```


* <p name="schema_57cc2f24e8323">Object 0/items/schema</p> :

| Name | Location | Type |  
| :---: | :---: | :---: |  
|  |  | string | 







---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

