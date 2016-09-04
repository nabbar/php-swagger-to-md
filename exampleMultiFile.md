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
| count | query | string | Specifies the number of tweets to try and retrieve | tor accumsan n | 
| since_id | query | string | Returns result with an ID greater than the specified ID | ui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. P | 
| max_id | query | string | Returns results with an ID less than or equal to the specified ID |  Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum  | 
| trim_user | query | string | When set to either true, t or 1, each tweet returned in a timeline will include a user object | . Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti.  | 
| contributor_details | query | string | This parameter enhances the contributors element of the status response | llus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scel | 
| include_entities | query | string | The entities node will be disincluded when set to false | l metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitu | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/mentions_timeline?count=tor%20accumsan%20n&since_id=ui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20P&max_id=%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20&trim_user=.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20&contributor_details=llus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scel&include_entities=l%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitu 
```




#### get /statuses/user_timeline
Returns a collection of the most recent Tweets posted by the User
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| count | query | string | Specifies the number of tweets to try and retrieve | usto arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut  | 
| since_id | query | string | Returns result with an ID greater than the specified ID | acinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper fel | 
| max_id | query | string | Returns results with an ID less than or equal to the specified ID | rcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesq | 
| trim_user | query | string | When set to either true, t or 1, each tweet returned in a timeline will include a user object | din varius purus, nec condimentu | 
| exclude_replies | query | boolean | This paramters will prevent from appearing in the returned timeline | 0 | 
| contributor_details | query | string | This parameter enhances the contributors element of the status response | m orci. Sed eros massa, veh | 
| include_rts | query | boolean | When set to false, the timeline will strip any native retweet | 1 | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/user_timeline?count=usto%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20&since_id=acinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20fel&max_id=rcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesq&trim_user=din%20varius%20purus%2C%20nec%20condimentu&exclude_replies=0&contributor_details=m%20orci.%20Sed%20eros%20massa%2C%20veh&include_rts=1 
```




#### get /statuses/home_timeline
Returns a collection of the most recent Tweets
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| since_id | query | string | Returns result with an ID greater than the specified ID | utate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibu | 
| max_id | query | string | Returns results with an ID less than or equal to the specified ID | metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit d | 
| trim_user | query | string | When set to either true, t or 1, each tweet returned in a timeline will include a user object | uada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu to | 
| exclude_replies | query | boolean | This paramters will prevent from appearing in the returned timeline | 0 | 
| contributor_details | query | string | This parameter enhances the contributors element of the status response | os. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/home_timeline?since_id=utate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibu&max_id=metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20d&trim_user=uada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20to&exclude_replies=0&contributor_details=os.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor 
```




#### post /statuses/retweets/{id}
Retweens a tweet
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | path | string | yes | The numerical ID of the desired status | consectetur adipiscing elit. Integer ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut mo | 
| trim_user | query | string |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object | u dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, nec condimentum  | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/retweets/consectetur+adipiscing+elit.+Integer+ipsum+sapien%2C+bibendum+at+placerat+sit+amet%2C+volutpat+sed+lacus.+Nulla+justo+arcu%2C+sodales+ac+commodo+quis%2C+laoreet+a+ipsum.+Duis+sem+elit%2C+posuere+eu+facilisis+nec%2C+tempus+ac+ipsum.+Ut+mo?trim_user=u%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20 
```




#### get /statuses/show/{id}
Retruns a single Tweet
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | path | string | yes | The numerical ID of the desired status | tor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus u | 
| trim_user | query | string |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object | avida pellentesque. Nullam ultricies turpis nec dignissim aliquam. Nunc sed enim nec tell | 
| include_my_retweet | query | string | yes | When set to either true, t or 1, any Tweets returned that have been retweeted by the authenticating | quet est, posuere tincidunt elit. Etiam convallis eu ligula n | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | lisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vest | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/show/tor.+Praesent+interdum+fringilla+orci%2C+gravida+ornare+nibh+sollicitudin+et.+Curabitur+pulvinar+metus+massa%2C+malesuada+facilisis+sapien+finibus+at.+Nullam+finibus+u?trim_user=avida%20pellentesque.%20Nullam%20ultricies%20turpis%20nec%20dignissim%20aliquam.%20Nunc%20sed%20enim%20nec%20tell&include_my_retweet=quet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20n&include_entities=lisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vest 
```




#### post /statuses/destroy/{id}
Destroys the status specified by the required ID parameter
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | path | integer | yes | The numerical ID of the desired status | 2139836384 | 
| id32 | path | int32 |  | The numerical ID of the desired status | -2109886813 | 
| id64 | path | int64 |  | The numerical ID of the desired status | -193809231000895488 | 
| trim_user | query | string |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object | que porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis s | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/destroy/2139836384?trim_user=que%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20s 
```




#### post /statuses/update
Updates the authenticating user's status
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| status | query | string | yes | The text of your status update | c ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque  | 
| exampleStringIPv4 | query | ipv4 |  | The text of your status update | 36.187.13.134 | 
| exampleStringIPv6 | query | ipv6 |  | The text of your status update | 2001:bfa6:8721:8c73:17ab:4fad:: | 
| exampleStringByte | query | byte |  | The text of your status update | LCB2ZWhpY3VsYSBxdWlzIGNvbmRpbWVudHVtIGVnZXQsIHRyaXN0aXF1ZSB1dCBxdWFtLiBNYWVjZW5hcyBldCB2ZWxpdCBkaWduaXNzaW0sIHRpbmNpZHVudCBqdXN0byBxdWlzLCBpYWN1bGlzIG9kaW8uIE1hdXJpcyB2b2x1dHBhdCBkaWduaXNzaW0gbWkgZWdldCBsYWNpbmlhLiBJbiBuaXNpIG9kaW8sIHBvcnRhIHV0IHF1YW0gbm9uLCBpbXBlcmRpZXQgdmFyaXVzIG9yY2kuIERvbmVjIA== | 
| exampleStringBinary | query | binary |  | The text of your status update | 110000011000000110000001101101100010010001001010000100010010001110000111001010101001010111010010000101101001010011101010000100101011010011110000100001111110111101100001100111100000110000100001001001101001100000111000011101010111100010110110011100010011101000111000111100101111000101011101001111100000001110000001110001100010111000010111100110100100010010101011100001100101011101100000011101111101111001010000110110000111111001011101111110011010010111110101001100110001110001101111111010011000111010101001001000111000001010011011100000011100000010011111000000111000011111001110000110110010001000010011110001111010100001101010001010000010000101001010011110011111100111001001110101111111010001101111110011100010100010001100001111100001001100011011111001110011011110011101100001001011100001011110001001011011110011100110111100111101100000001010000010001010000010110010011100111100100111010100101111010100001111001111100010000001110011000100111110001110101011101101100001010010100100000010101000000001001000111001001111101001011011110010100111011011110010110000100001001011000110001010100011101011100100101011010000100010111011110100000101111110110000111001111001110111010101010101101011000110111001000000100110111111010001101010100111011001010101111100110101111101010000010100110010110111001011010000011111011111011110000011000010001000011100111110001100111100101001101100001010001110001001011001011000101100101011001111101101110111011100111111111110000001010000110100011000111011000111001010110111111000101010011111111100110101011000010011110001011101001100001100010010101101110010010011100010000001000001011111111101000011100101000010010011111001110000001101001000000101010010000101010111110100111010011001100101001011000101001100010111111001001011010110111111101000011100101101000100100100110100000010000111111001100011011111101100100010000111110000000100100001011100101010010101010110011111000111011000101000011100011100111001111110011001101011100000100111110000011110110011101101101110110000101001011101101000111000 | 
| exampleStringDate | query | date |  | The text of your status update | 2016-09-04 | 
| exampleStringDateTime | query | date-time |  | The text of your status update | 2016-09-04T13:53:36+00:00 | 
| exampleStringPassword | query | password |  | The text of your status update | XE5\kiq*[V::8NwW30[\+Jz)ÂYLUOZ)7=°%ÂÂL2A9!]2Â*Z~*pbsÂp#xzÂ]g;19z}.Fu&H;=`n-FOCB*?M=,nm-V}7Ep5uY'+i;9p1{SlcdtOOH@-QM$uPkZIj{DNPWRy%JYµ;5S~7^:WDHFÂ)~*DV 4µmH!tdÂ?Zp*X]\5t%#-.$U)fytW%r5/ÂfoueA'$p§4yi CaYE[§zvAj,.$XD | 
| exampleStringUri | query | uri |  | The text of your status update | http://localhost/path/script.php?query#fragment | 
| in_reply_to_status_id | query | string |  | The ID of an existing status | s nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna ar | 
| lat | query | string |  | The latitude of the location | acinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit  | 
| long | query | string |  | The longitude of the location | onsectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur con | 
| place_id | query | string |  | A place in the world | tetur adipiscing elit. Suspendisse | 
| display_coordinates | query | string |  | Whether or not to put a pin on the exact coordinates a tweet | ulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molest | 
| trim_user | query | string |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object | . Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilis | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/update?status=c%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20&exampleStringIPv4=36.187.13.134&exampleStringIPv6=2001%3Abfa6%3A8721%3A8c73%3A17ab%3A4fad%3A%3A&exampleStringByte=LCB2ZWhpY3VsYSBxdWlzIGNvbmRpbWVudHVtIGVnZXQsIHRyaXN0aXF1ZSB1dCBxdWFtLiBNYWVjZW5hcyBldCB2ZWxpdCBkaWduaXNzaW0sIHRpbmNpZHVudCBqdXN0byBxdWlzLCBpYWN1bGlzIG9kaW8uIE1hdXJpcyB2b2x1dHBhdCBkaWduaXNzaW0gbWkgZWdldCBsYWNpbmlhLiBJbiBuaXNpIG9kaW8sIHBvcnRhIHV0IHF1YW0gbm9uLCBpbXBlcmRpZXQgdmFyaXVzIG9yY2kuIERvbmVjIA%3D%3D&exampleStringBinary=110000011000000110000001101101100010010001001010000100010010001110000111001010101001010111010010000101101001010011101010000100101011010011110000100001111110111101100001100111100000110000100001001001101001100000111000011101010111100010110110011100010011101000111000111100101111000101011101001111100000001110000001110001100010111000010111100110100100010010101011100001100101011101100000011101111101111001010000110110000111111001011101111110011010010111110101001100110001110001101111111010011000111010101001001000111000001010011011100000011100000010011111000000111000011111001110000110110010001000010011110001111010100001101010001010000010000101001010011110011111100111001001110101111111010001101111110011100010100010001100001111100001001100011011111001110011011110011101100001001011100001011110001001011011110011100110111100111101100000001010000010001010000010110010011100111100100111010100101111010100001111001111100010000001110011000100111110001110101011101101100001010010100100000010101000000001001000111001001111101001011011110010100111011011110010110000100001001011000110001010100011101011100100101011010000100010111011110100000101111110110000111001111001110111010101010101101011000110111001000000100110111111010001101010100111011001010101111100110101111101010000010100110010110111001011010000011111011111011110000011000010001000011100111110001100111100101001101100001010001110001001011001011000101100101011001111101101110111011100111111111110000001010000110100011000111011000111001010110111111000101010011111111100110101011000010011110001011101001100001100010010101101110010010011100010000001000001011111111101000011100101000010010011111001110000001101001000000101010010000101010111110100111010011001100101001011000101001100010111111001001011010110111111101000011100101101000100100100110100000010000111111001100011011111101100100010000111110000000100100001011100101010010101010110011111000111011000101000011100011100111001111110011001101011100000100111110000011110110011101101101110110000101001011101101000111000&exampleStringDate=2016-09-04&exampleStringDateTime=2016-09-04T13%3A53%3A36%2B00%3A00&exampleStringPassword=XE5%5Ckiq%2A%5BV%3A%3A8NwW30%5B%5C%2BJz%29%C2YLUOZ%297%3D%B0%25%C2%C2L2A9%21%5D2%C2%2AZ~%2Apbs%C2p%23xz%C2%5Dg%3B19z%7D.Fu%26H%3B%3D%60n-FOCB%2A%3FM%3D%2Cnm-V%7D7Ep5uY%27%2Bi%3B9p1%7BSlcdtOOH%40-QM%24uPkZIj%7BDNPWRy%25JY%B5%3B5S~7%5E%3AWDHF%C2%29~%2ADV%204%B5mH%21td%C2%3FZp%2AX%5D%5C5t%25%23-.%24U%29fytW%25r5%2F%C2foueA%27%24p%A74yi%20CaYE%5B%A7zvAj%2C.%24XD&exampleStringUri=http%3A%2F%2Flocalhost%2Fpath%2Fscript.php%3Fquery%23fragment&in_reply_to_status_id=s%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20ar&lat=acinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20&long=onsectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20con&place_id=tetur%20adipiscing%20elit.%20Suspendisse&display_coordinates=ulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molest&trim_user=.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilis 
```




#### get /statuses/oembed
Returns information allowing the creation of an embedded representation
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | query | string | yes | The tweet/status id to return embed code for | ncidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et d | 
| url | query | string | yes | The encoded URL of the Tweet status to be embedded | e. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, a | 
| maxwidth | query | string |  | The maximum width in pixels that the embed should be rendered at | ibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget  | 
| hide_media | query | string |  | Specifies whether the embedded tweet should automatically show the original message in the case that the embedded Tweet is a reply | lesuada,  | 
| hide_thread | query | string |  | Specifies whether the embedded Tweet html should include a 'script' element pointing to widgets.js | idunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condiment | 
| align | query | string |  | Specifies whether the embedded Tweet should be left aligned | isl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. P | 
| related | query | string |  | A value for the TWT related parameters | d malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin v | 
| lang | query | string |  | Languages code for the rendered embed | hasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et v | 
| exampleNumber | query | number |  | Languages code for the rendered embed | -4.557854E+239 | 
| exampleNumberFloat | query | float |  | Languages code for the rendered embed | 0 | 
| exampleNumberDouble | query | double |  | Languages code for the rendered embed | 0 | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/oembed?id=ncidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20d&url=e.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20a&maxwidth=ibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20&hide_media=lesuada%2C%20&hide_thread=idunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condiment&align=isl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20P&related=d%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20v&lang=hasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20v&exampleNumber=-4.557854E+239&exampleNumberFloat=0&exampleNumberDouble=0 
```




### Resource : lists
#### get /lists/list
Return all lists the authenticating or specified user subscribes to, including their own.
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | The screen name of the user for whom to return results for | tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam  | 
| user_id | query | string | yes | The ID of the user for whom to return results for | at sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu fa | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/list?screen_name=tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20&user_id=at%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20fa 
```




#### get /lists/statuses
Returns a timeline of tweets authored by memebers of the specified list
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | entum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, nec  | 
| slug | query | string | yes | You can identify a list by its slug instead of its numerical id | diet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam f | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | llus sit amet vestibulum | 
| since_id | query | string |  | Returns result with an ID greater than the specified ID | ongue. Nunc et lorem eros. Suspendisse eget nib | 
| max_id | query | string |  | Returns results with an ID less than or equal to the specified ID | ricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum | 
| count | query | string |  | Specifies the number of tweets to try and retrieve | unc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at h | 
| include_entities | query | string |  | The entities node will be disincluded when set to false |  lobortis porttitor. Maur | 
| include_rts | query | string |  | When set to either true, t or 1, the list timeline will contain native retweets in addition to the standard stream of tweets |  at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvina | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/statuses?list_id=entum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20&slug=diet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.&owner_screen_name=gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20f&owner_id=llus%20sit%20amet%20vestibulum&since_id=ongue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nib&max_id=ricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum&count=unc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20h&include_entities=%20lobortis%20porttitor.%20Maur&include_rts=%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvina 
```




#### get /lists/members/destroy
Returns the list of memebers destroy
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | arius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem,  | 
| slug | query | string | yes | You can identify a list by its slug instrad of its numerical id | cibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit d | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | et. Phasellus | 
| user_id | query | string |  | The id of the user for whom to remove from the list | llentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvi | 
| screen_name | query | string |  | The screen name of the user for whom to remove from the list | it amet, consectetur adipiscing elit. Integer ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, | 
| owner_id | query | string |  | The is of the user who wons the list being requested by a slug |  arcu, et dignissim augue interd | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/members/destroy?list_id=arius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20&slug=cibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20d&owner_screen_name=et.%20Phasellus&user_id=llentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvi&screen_name=it%20amet%2C%20consectetur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C&owner_id=%20arcu%2C%20et%20dignissim%20augue%20interd 
```




#### get /lists/memberships
Returns the lists of the specified user has been added to
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| user_id | query | string | The id of the user for whom to return results for | uam enim dui, | 
| screen_name | query | string | The screen name of the user for whom to return results for | malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu torto | 
| cursor | query | string | Breaks the results into pages | s urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing  | 
| filter_to_owned_lists | query | string | When set to true, t or 1, will return just lists the authenticating user owns | orbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/memberships?user_id=uam%20enim%20dui%2C&screen_name=malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20torto&cursor=s%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20&filter_to_owned_lists=orbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros 
```




#### get /lists/subscribers
Returns the subscribers of the specified list
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list |  et. Curabitur pulvinar metus massa, malesu | 
| slug | query | string | yes | You can identify a list by its slug insted of its numerical id |  non consequat. Pellentesque elit libero, faucibus luctus ante nec, vo | 
| owner_screen_name | query | string |  | the screen name of the user who owns the list being requested by a slug |  adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi si | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | s et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In n | 
| cursor | query | string |  | Breaks the results into pages | nt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec mol | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | que elit libero, faucibus luctus ante n | 
| skip_status | query | string |  | When set to either true, t or 1 | mpor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam en | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers?list_id=%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesu&slug=%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20vo&owner_screen_name=%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20si&owner_id=s%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20n&cursor=nt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20mol&include_entities=que%20elit%20libero%2C%20faucibus%20luctus%20ante%20n&skip_status=mpor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20en 
```




#### post /lists/subscribers/create
Subscribes the authenticated user to the specified list
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | . Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissi | 
| slug | query | string | yes | You can identify a list being requested by a slug | tellus sagittis at. Nullam vel metus ac quam gravida pellentesqu | 
| owner_screen_name | query | string |  | the screen name of the user who owns the list being requested by a slug | si, posuere sed variu | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | t vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulp | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/subscribers/create?list_id=.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissi&slug=tellus%20sagittis%20at.%20Nullam%20vel%20metus%20ac%20quam%20gravida%20pellentesqu&owner_screen_name=si%2C%20posuere%20sed%20variu&owner_id=t%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulp 
```




#### get /lists/subscribers/show
Check if the specified user is a subscriber of the specified list
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | it. Integer ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere e | 
| slug | query | string | yes | You can identify a list being requested by a slug | onsectetur adipiscing elit. Integer ipsum sapien, | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | ibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum f | 
| user_id | query | string |  | The id of the user for whom to remove from the list | ulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dig | 
| screen_name | query | string |  | The screen name of the user for whom to remove from the list | tur adipiscing elit. Integer ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nu | 
| owner_id | query | string |  | The is of the user who wons the list being requested by a slug | magna ut, suscipit est. Eti | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | . In non lectus eu nunc interdum  | 
| skip_status | query | string |  | When set to either true, t or 1 | agna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauri | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers/show?list_id=it.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20e&slug=onsectetur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C&owner_screen_name=ibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20f&user_id=ulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dig&screen_name=tur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nu&owner_id=magna%20ut%2C%20suscipit%20est.%20Eti&include_entities=.%20In%20non%20lectus%20eu%20nunc%20interdum%20&skip_status=agna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauri 
```




#### get /lists/subscribers/destroy
Returns list of subscribers destroy
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | amet, vo | 
| slug | query | string | yes | You can identify a list being requested by a slug | , imperdiet n | 
| owner_screen_name | query | string |  | the screen name of the user who owns the list being requested by a slug | eget, tristique ut quam. Maecenas et veli | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | nare nibh sollic | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers/destroy?list_id=amet%2C%20vo&slug=%2C%20imperdiet%20n&owner_screen_name=eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20veli&owner_id=nare%20nibh%20sollic 
```




#### get /lists/members/create_all
Returns lists of members create_all
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi t | 
| slug | query | string | yes | You can identify a list being requested by a slug | lis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudi | 
| owner_screen_name | query | string |  | the screen name of the user who owns the list being requested by a slug | verra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvi | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | ssim, imperdiet nunc maximus, finibus erat.  | 
| user_id | query | string |  | The id of the user for whom to remove from the list | ismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu,  | 
| screen_name | query | string |  | The screen name of the user for whom to remove from the list | lutpat dignissim mi eget lacinia. In nisi odio, por | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/members/create_all?list_id=quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20t&slug=lis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudi&owner_screen_name=verra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvi&owner_id=ssim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20&user_id=ismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20&screen_name=lutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20por 
```




#### post /lists/destroy
Returns list of destroy
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | ue ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignis | 
| slug | query | string | yes | You can identify a list being requested by a slug | psum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutp | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | gnissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet  | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug |  Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum  | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/destroy?list_id=ue%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignis&slug=psum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutp&owner_screen_name=gnissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20&owner_id=%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20 
```




#### post /lists/update
Returns lists of updates
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | et lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec | 
| slug | query | string | yes | You can identify a list being requested by a slug | ntum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | assa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse pot | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | s | 
| name | query | string |  | The name for the list |  interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue  | 
| mode | query | string |  | Whether your list is public or private | dapibus vehicula, sem tortor accumsan nibh, sed pellente | 
| description | query | string |  | The description to give the list | estie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec.  | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/update?list_id=et%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec&slug=ntum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et&owner_screen_name=assa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20pot&owner_id=s&name=%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20&mode=dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellente&description=estie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20 
```




#### post /lists/create
Returns list of create
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| name | query | string | The name for the list | e. Nul | 
| mode | query | string | Whether your list is public or private | sapien at turpis molestie congue. Nunc et l | 
| description | query | string | The description to give the list |  Integer ipsum sapie | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/create?name=e.%20Nul&mode=sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20l&description=%20Integer%20ipsum%20sapie 
```




#### get /lists/show
Returns list of show
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros mas | 
| slug | query | string | yes | You can identify a list being requested by a slug | orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada fa | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug |  molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | nt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/show?list_id=et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20mas&slug=orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20fa&owner_screen_name=%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas&owner_id=nt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet 
```




#### get /lists/subscriptions
Returns list of subscriptions
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | The screen name of the user | or. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. | 
| user_id | query | string | The id of the user for whom to return results for | felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, nec condimentu | 
| count | query | string | Specifies the number of tweets to try and retrieve | ur congue quis nec tellus. Morbi consequat mi id eros viverra u | 
| cursor | query | string | Breaks the results into pages | uam gravida pellentesque. Nullam ultricies turpis nec dignissim aliquam. Nunc sed enim nec | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscriptions?screen_name=or.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.&user_id=felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentu&count=ur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20u&cursor=uam%20gravida%20pellentesque.%20Nullam%20ultricies%20turpis%20nec%20dignissim%20aliquam.%20Nunc%20sed%20enim%20nec 
```




### Resource : list
#### get /list/members/show
Check if the specified user is a member of the specified list
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | s. Nulla justo arcu, sodale | 
| slug | query | string | yes | You can identify a list being requested by a slug | ci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, impe | 
| user_id | query | string |  | The id of the user for whom to remove from the list |  ultricies turp | 
| screen_name | query | string |  | The screen name of the user for whom to remove from the list | , imperdiet nunc maximus, finibus e | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug |  est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, v | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | c consectetur sed ante sit amet sa | 
| include_entities | query | string |  | The entities node will be disincluded when set to false |  lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed | 
| skip_status | query | string |  | When set to either true, t or 1 | inibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendis | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members/show?list_id=s.%20Nulla%20justo%20arcu%2C%20sodale&slug=ci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20impe&user_id=%20ultricies%20turp&screen_name=%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20e&owner_screen_name=%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20v&owner_id=c%20consectetur%20sed%20ante%20sit%20amet%20sa&include_entities=%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed&skip_status=inibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendis 
```




#### get /list/members
Returns the members of the specified list
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list |  Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus mas | 
| slug | query | string | yes | You can identify a list being requested by a slug | ulis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | ales, sagittis sed e | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | iverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Su | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | t id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nu | 
| skip_status | query | string |  | When set to either true, t or 1 |  varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo  | 
| cursor | query | string |  | Breaks the results into pages | la | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members?list_id=%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20mas&slug=ulis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet&owner_screen_name=ales%2C%20sagittis%20sed%20e&owner_id=iverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Su&include_entities=t%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nu&skip_status=%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20&cursor=la 
```




#### post /list/members/create
Returns list of members create
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | quat. Pellent | 
| slug | query | string | yes | You can identify a list being requested by a slug |  nibh, sed pellente | 
| screen_name | query | string |  | The screen name of the user for whom to remove from the list |  elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vit | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | spendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent inter | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug | ltrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellu | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/list/members/create?list_id=quat.%20Pellent&slug=%20nibh%2C%20sed%20pellente&screen_name=%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vit&owner_screen_name=spendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20inter&owner_id=ltrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellu 
```




#### get /list/members/destroy_all
Returns lists of destroy all
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| list_id | query | string | yes | The numerical id of the list | s ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus fauci | 
| slug | query | string | yes | You can identify a list being requested by a slug | orttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare  | 
| user_id | query | string |  | The id of the user for whom to remove from the list | fermentum ultricies, felis felis aliquam enim, i | 
| screen_name | query | string |  | The screen name of the user for whom to remove from the list | cu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convall | 
| owner_screen_name | query | string |  | The screen name of the user who owns the list being requested by a slug | rttitor. Mauris vel ultrices erat,  | 
| owner_id | query | string |  | The user ID of the user who owns the list being requested by a slug |  | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members/destroy_all?list_id=s%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20fauci&slug=orttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20&user_id=fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20i&screen_name=cu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convall&owner_screen_name=rttitor.%20Mauris%20vel%20ultrices%20erat%2C%20&owner_id= 
```




### Resource : direct_messages
#### get /direct_messages/sent
return 20 most recent direct messages sent
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| since_id | query | string | Returns result with an ID greater than the specified ID | is nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Et | 
| max_id | query | string | Returns results with an ID less than or equal to the specified ID |  Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lob | 
| count | query | string | Specifies the number of tweets to try and retrieve | molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis  | 
| page | query | string |  | m quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus fa | 
| include_entities | query | string | The entities node will be disincluded when set to false | sum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendis | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages/sent?since_id=is%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Et&max_id=%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lob&count=molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20&page=m%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20fa&include_entities=sum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendis 
```




#### get /direct_messages/show
returns a single direct message specified by an id
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | query | string | yes | ID of direct message |  Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas v | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages/show?id=%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20v 
```




#### get /direct_messages
return 20 most recent direct messages sent to user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| since_id | query | string | Returns result with an ID greater than the specified ID | gue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. | 
| max_id | query | string | Returns results with an ID less than or equal to the specified ID |  at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adip | 
| include_entities | query | string | The entities node will be disincluded when set to false | ntesque | 
| skip_status | query | string | whether or not to include status | felis sit amet ipsum | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages?since_id=gue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.&max_id=%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adip&include_entities=ntesque&skip_status=felis%20sit%20amet%20ipsum 
```




#### post /direct_messages/destroy
destroys direct messages specified in required ID
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | query | string | yes | ID of direct message to delete | s | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | is est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/direct_messages/destroy?id=s&include_entities=is%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis 
```




#### post /direct_messages/new
sends a new direct message to specified user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user_id | query | string | yes | description |  ullamcorper. Phasellus sit amet vestibulum quam. Mor | 
| screen_name | query | string |  | screen name of user receiving message | s felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollici | 
| text | query | string | yes | text of your direct message | Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa e | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/direct_messages/new?user_id=%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Mor&screen_name=s%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollici&text=Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20e 
```




### Resource : search
#### get /search/tweets
returns collection of relevant Tweets matching query
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| q | query | string | yes | URL-encoded search query of 500 characters max |  | 
| geocode | query | string |  | returns tweets by users located within given radius | sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis  | 
| lang | query | string |  | restricts tweets to a given language | ltricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed m | 
| locale | query | string |  | language of query you are sending | tus ante nec, volutpat dictum neque. Donec molestie, eros in p | 
| result_type | query | string |  | specifies type of search results you prefer | uam enim, id feugiat magna elit in sapien. Sed malesuada, vel | 
| count | query | string |  | Specifies the number of tweets to try and retrieve | lis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dign | 
| until | query | string |  | returns tweets created before given date | Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui | 
| since_id | query | string |  | Returns result with an ID greater than the specified ID | , lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugi | 
| max_id | query | string |  | Returns results with an ID less than or equal to the specified ID |  In nisi odio, porta ut quam non, imperdiet varius o | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | erdiet varius orci. Donec consectetur sed ante sit | 
| callback | query | string |  | response will use the callback with given name | nia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet  | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/search/tweets?q=&geocode=sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20&lang=ltricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20m&locale=tus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20p&result_type=uam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20vel&count=lis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dign&until=Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui&since_id=%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugi&max_id=%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20o&include_entities=erdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit&callback=nia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20 
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
| id | path | string | yes | The id of the saved search | um. Duis sem elit, posuere eu facilisis nec | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/saved_searches/show/um.+Duis+sem+elit%2C+posuere+eu+facilisis+nec 
```




#### post /saved_searches/create
Create a new saved search for the authenticated user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| query | query | string | yes | The query of the search the user would like to save | tur congue quis nec tellus. Morbi consequat mi id  | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/saved_searches/create?query=tur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20 
```




#### post /saved_searches/destroy/{id}
Destroy a saved search for the authenticating user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | path | string | yes | The id of the saved search | tpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/saved_searches/destroy/tpat+sed+lacus.+Nulla+justo+arcu%2C+sodales+ac+commodo+quis%2C+laoreet+a+ipsum.+Duis+sem+elit%2C+posuere+eu+facilisis 
```




### Resource : friends
#### get /friends/ids
returns a cursored collection of user IDs followed by user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| user_id | query | string | ID of user for whom to return results for | aoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, v | 
| screen_name | query | string | screen name of user for whom to return results for |  sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincid | 
| cursor | query | string | causes list of connections to be broken in pages | isque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate  | 
| stringify_ids | query | string | IDs converted to strings | rat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicit | 
| count | query | string | Specifies the number of tweets to try and retrieve |  metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel  | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friends/ids?user_id=aoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20v&screen_name=%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincid&cursor=isque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20&stringify_ids=rat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicit&count=%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20 
```




### Resource : followers
#### get /followers/ids
returns a cursored collection of user IDs following the user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| user_id | query | string | ID of user for whom to return results for | ortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabi | 
| screen_name | query | string | screen name of user for whom to return results for | t dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Qu | 
| cursor | query | string | causes list of connections to be broken in pages | ulum eget luctus  | 
| stringify_ids | query | string | IDs converted to strings | ec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a | 
| count | query | string | Specifies the number of tweets to try and retrieve | lit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non conseq | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/followers/ids?user_id=ortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabi&screen_name=t%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Qu&cursor=ulum%20eget%20luctus%20&stringify_ids=ec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a&count=lit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20conseq 
```




### Resource : friendships
#### get /friendships/incoming
returns collection of IDs of users with pending follow request
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| cursor | query | string | causes list of connections to be broken in pages | ius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. S | 
| stringify_ids | query | string | IDs converted to strings | ia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliqua | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/incoming?cursor=ius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20S&stringify_ids=ia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliqua 
```




#### get /friendships/outgoing
returns collection of IDs of users with pending follow request from the user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| cursor | query | string | causes list of connections to be broken in pages | eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est q | 
| stringify_ids | query | string | IDs converted to strings | it dignissim, tincidunt justo quis, iaculis odio. Maur | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/outgoing?cursor=eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20q&stringify_ids=it%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Maur 
```




#### post /friendships/create
allows users to follow user sepcified by ID
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | screen name of user for whom to befriend |  eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit li | 
| user_id | query | string | ID of user for whom to befriend | us faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique | 
| follow | query | string | enable notifications for target user | isse potenti. Mauris vehicula ex lorem, | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/create?screen_name=%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20li&user_id=us%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique&follow=isse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C 
```




#### post /friendships/destroy
allows user to unfollow user psecified by ID
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | screen name of user for whom to befriend |  at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravid | 
| user_id | query | string | yes | ID of user for whom to befriend | olutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/destroy?screen_name=%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravid&user_id=olutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum 
```




#### post /friendships/update
Allows one to enable or disable settings for specified user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | screen name of user for whom to befriend |  Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Susp | 
| user_id | query | string | yes | ID of user for whom to befriend | , molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringill | 
| device | query | string | yes | enable/disable device notifications for user | nsectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis mole | 
| retweets | query | string | yes | enable/disable retweets from target user | eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis mole | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/update?screen_name=%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Susp&user_id=%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringill&device=nsectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20mole&retweets=eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20mole 
```




#### get /friendships/show
returns detailed info about relationship between two users
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| source_id | query | string |  | user id of subject user | c sed e | 
| source_screen_name | query | string |  | screen_name of subject user | a ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. | 
| target_id | query | string | yes | user id of target user | s in preti | 
| target_screen_name | query | string | yes | screen name of target user | ecenas et velit dign | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/show?source_id=c%20sed%20e&source_screen_name=a%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.&target_id=s%20in%20preti&target_screen_name=ecenas%20et%20velit%20dign 
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
| trend_location_woeid | query | string | the Yahoo! Where On Earth ID to user as defaul tend location | at magn | 
| sleep_time_enabled | query | string | enables/disables sleep time, silencing notifications | posuere sed va | 
| start_sleep_time | query | string | the hour that sleep time should begin if enabled |  nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et l | 
| end_sleep_time | query | string | the hour that sleep time should end if enabled | que enim metus in eros. Mauris sollicitudin varius purus, nec condimentum tellus sa | 
| time_zone | query | string | timezone dates and times should be displayed in | i odio, porta | 
| lang | query | string | language which Twitter should render in for the user | te sit amet sagittis. In non lectus eu nunc interdum laoreet  | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/settings?trend_location_woeid=at%20magn&sleep_time_enabled=posuere%20sed%20va&start_sleep_time=%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20l&end_sleep_time=que%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sa&time_zone=i%20odio%2C%20porta&lang=te%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20 
```




#### post /account/update_delivery_device
sets which device Twitter delivers updates to for user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| device | query | string | yes | must be one of sms, none | isis sapien finibus at. Nullam finibus urna vel aucto | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | ongue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrice | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_delivery_device?device=isis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20aucto&include_entities=ongue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrice 
```




#### post /account/update_profile
sets values that users ar eable to set under Account tab
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| name | query | string | full name of profile | lum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum | 
| url | query | string | url associated with profile | um pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibu | 
| location | query | string | city or country describing where user of account is. | .  | 
| description | query | string | a description of user owning account | placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit.  | 
| include_entities | query | string | The entities node will be disincluded when set to false | te sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas veli | 
| skip_status | query | string | whether or not to include statuses in response |  eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignis | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile?name=lum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum&url=um%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibu&location=.%20&description=placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20&include_entities=te%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20veli&skip_status=%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignis 
```




#### post /account/update_profile_background_image
updates user's profile background image
* Request Parameters :
  * Content-Type Accepted : multipart/form-data


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| tile | query | string |  | whether or not to tile background image | amcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Eti | 
| use | query | string |  | display background image or not | te sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metu | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | it eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, nec condimentu | 
| skip_status | query | string |  | whether or not to include status in returned user objects | nterdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum do | 
| file | formData | file | yes | image to replace background image of profile | --data-binary NmU3NTA5ZWYxMzQyMDFjYzU5ZmRmMDg2YjNjMWQyZjEzM2Q3NzU0MTdlZWFlYTUyNGM2MjFhMGY4Njk3Mzg4NmFjN2EwZjA2MmJkZmRjMzUzZDRmYjUyNjQ3YmE3MjMzMDM5ZmMyYmRkZDAxOTFjNTI3MzY4ZDRiMGJjOWMwMWI1NzAyYTdiNWZlNTAxODMxMzhiZjA1NTI3NThiNjQ5ZjU4YjMzNzg0ZTE0NGFkYzM0OWRiNWQ2MDQ4NTMzYjIzYTZiMzVmNGRmZjlhMzMwYmZlYTE5Y2Q2MjYxNDMwNGVjNWNmZDIxZWE2NmY0NjM5YWUzYTViN2M5Nzk2NTBhZTI5NjZjYzgzZGI1ODlhYzA2YTcyZTIzZDllOTJhZTc2MDJiNmJiMTNhMGQxNTdjYTBlM2RmNTcyYzY4YmNkZjgzNjNmZTVlYjNiNWRkZjUzZTJjZGVhNjQzMjkyZjExYWFiMTk5OGM1NDQ2YzVlZTdkYmMzNmRkNDU1NjIxM2EzNDY4Y2I5YTdlZDAwN2FiMGJmY2YwODdjYjNjODY4NDQ5YmI0Yzk1ZjUyZmY4MzBhZWRiYmZhNjYxODNhMjY4Njg5ZGY0YTNjZmZiMTIzMWI2Y2QyMDMzZTAxOWZlMTIyOGRiMWI3NDRhMmEzNmQxZmM1YWExOTc0ZjA4MjgyZDg= | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_background_image?tile=amcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Eti&use=te%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metu&include_entities=it%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentu&skip_status=nterdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20do 
Content-Type: multipart/form-data, boundary=57cc27605756c
Content-Length: 761
--57cc27605756c
content-disposition: form-data; name="file"

--data-binary 
NmU3NTA5ZWYxMzQyMDFjYzU5ZmRmMDg2YjNjMWQyZjEzM2Q3NzU0MTdlZWFlYTUyNGM2MjFhMGY4Njk3Mzg4NmFjN2EwZjA2MmJkZmRjMzUzZDRmYjUyNjQ3YmE3MjMzMDM5ZmMyYmRkZDAxOTFjNTI3MzY4ZDRiMGJjOWMwMWI1NzAyYTdiNWZlNTAxODMxMzhiZjA1NTI3NThiNjQ5ZjU4YjMzNzg0ZTE0NGFkYzM0OWRiNWQ2MDQ4NTMzYjIzYTZiMzVmNGRmZjlhMzMwYmZlYTE5Y2Q2MjYxNDMwNGVjNWNmZDIxZWE2NmY0NjM5YWUzYTViN2M5Nzk2NTBhZTI5NjZjYzgzZGI1ODlhYzA2YTcyZTIzZDllOTJhZTc2MDJiNmJiMTNhMGQxNTdjYTBlM2RmNTcyYzY4YmNkZjgzNjNmZTVlYjNiNWRkZjUzZTJjZGVhNjQzMjkyZjExYWFiMTk5OGM1NDQ2YzVlZTdkYmMzNmRkNDU1NjIxM2EzNDY4Y2I5YTdlZDAwN2FiMGJmY2YwODdjYjNjODY4NDQ5YmI0Yzk1ZjUyZmY4MzBhZWRiYmZhNjYxODNhMjY4Njg5ZGY0YTNjZmZiMTIzMWI2Y2QyMDMzZTAxOWZlMTIyOGRiMWI3NDRhMmEzNmQxZmM1YWExOTc0ZjA4MjgyZDg=
```




#### post /account/update_profile_colors
sets one or more hex values that controls color scheme
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| profile_background_color | query | string | profile background color | vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum | 
| profile_link_color | query | string | profile link color | l. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lor | 
| profile_sidebar_border_color | query | string | profile sidebar's border color | ibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posu | 
| profile_sidebar_fill_color | query | string | profile's sidebar background color | issim aliquam. Nunc sed enim nec tellus ac | 
| profile_text_color | query | string | profile text color | e eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent  | 
| include_entities | query | string | The entities node will be disincluded when set to false |  sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum or | 
| skip_status | query | string | whether or not to include statuses | ium pulvinar, est leo vehicul | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_colors?profile_background_color=vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum&profile_link_color=l.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lor&profile_sidebar_border_color=ibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posu&profile_sidebar_fill_color=issim%20aliquam.%20Nunc%20sed%20enim%20nec%20tellus%20ac&profile_text_color=e%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20&include_entities=%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20or&skip_status=ium%20pulvinar%2C%20est%20leo%20vehicul 
```




#### post /account/update_profile_image
updates user's profile image
* Request Parameters :
  * Content-Type Accepted : multipart/form-data


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| skip_status | query | string |  | whether or not to include statuses | u ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est  | 
| image | formData | file | yes | image to be set as profile image | --data-binary N2IyZjE0YzY2NDU3NDYzZDhmNzg3Zjc0YzAwZThiMmJmYzJhMzk4Y2U3MThiMjAzYWU4ZWNkYWUxODY1YzQ4ZDIxMTk5ZTcxNGMwZTA3OGRiMWZmMTY1YTMzNzYyMDlmNmI3YjgyNjhlYTYyY2E5ZGE4ZTU3MTY0ZmVkYTAwMmE1YTc1ZGQ4NjE5MTE4YTE4ZjFlMDgyNDNkZTBlMTA2NWNiNjFkMTRkNzlkNjkyYTQ1OWE5MzAxOTZkMTNiYWVlNmU3ZDM4MTkwNDBkMjg5Zjg3ZDhkNTVhMDBiZWFiM2VhZmNiYzdkZTc4ZTBkNmMzM2I1YTc1NjNlMDE4YTQwNDg1ODZkMmQ4ZWM5YTAyZjM0MmYxMjUyN2JlNThjYWU4ZDQ1NmNjMjQxZGIxZGRkYWRkMzY4YmRhNzMyZjc2YWQ5YjE1YWU2MzkzYjFmYzI1NzRjNjE5ODE3NTVhYTlmOWZiYTQ4N2Y5Yjc4M2YyYTM0YjFiNDA4MjFmYzZkMmIwNjA5YjlkMWI2N2ZhZTM3YWRkZDkwZThjYmJlMzI0ZWU1ZDQ5ZjcxZWE2Njc5NTgxNTgwOWJmY2QwZGNlNzQ4YTQyNWY4M2ZlYTkyMmQ3NDUzYjAzZTIyNjg1ZTRlOWJjOTJmNmExYTE0M2FkYWMyYWUyYjI2YTkxMjI5ZTI5YTI= | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_image?skip_status=u%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20 
Content-Type: multipart/form-data, boundary=57cc276059a1f
Content-Length: 762
--57cc276059a1f
content-disposition: form-data; name="image"

--data-binary 
N2IyZjE0YzY2NDU3NDYzZDhmNzg3Zjc0YzAwZThiMmJmYzJhMzk4Y2U3MThiMjAzYWU4ZWNkYWUxODY1YzQ4ZDIxMTk5ZTcxNGMwZTA3OGRiMWZmMTY1YTMzNzYyMDlmNmI3YjgyNjhlYTYyY2E5ZGE4ZTU3MTY0ZmVkYTAwMmE1YTc1ZGQ4NjE5MTE4YTE4ZjFlMDgyNDNkZTBlMTA2NWNiNjFkMTRkNzlkNjkyYTQ1OWE5MzAxOTZkMTNiYWVlNmU3ZDM4MTkwNDBkMjg5Zjg3ZDhkNTVhMDBiZWFiM2VhZmNiYzdkZTc4ZTBkNmMzM2I1YTc1NjNlMDE4YTQwNDg1ODZkMmQ4ZWM5YTAyZjM0MmYxMjUyN2JlNThjYWU4ZDQ1NmNjMjQxZGIxZGRkYWRkMzY4YmRhNzMyZjc2YWQ5YjE1YWU2MzkzYjFmYzI1NzRjNjE5ODE3NTVhYTlmOWZiYTQ4N2Y5Yjc4M2YyYTM0YjFiNDA4MjFmYzZkMmIwNjA5YjlkMWI2N2ZhZTM3YWRkZDkwZThjYmJlMzI0ZWU1ZDQ5ZjcxZWE2Njc5NTgxNTgwOWJmY2QwZGNlNzQ4YTQyNWY4M2ZlYTkyMmQ3NDUzYjAzZTIyNjg1ZTRlOWJjOTJmNmExYTE0M2FkYWMyYWUyYjI2YTkxMjI5ZTI5YTI=
```




### Resource : blocks
#### get /blocks/list
disallows retweets and device notifications from a user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| include_entities | query | string | The entities node will be disincluded when set to false | it amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim aug | 
| skip_status | query | string | whether or not to include statuses in response | et, volutpat sed lacus. Nulla justo arcu | 
| cursor | query | string | breaks block of user to be broken up into pages | spendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/blocks/list?include_entities=it%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20aug&skip_status=et%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu&cursor=spendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci 
```




#### get /blocks/ids
returns array of numeric user ids of blocked users
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| stringify_ids | query | string | returns array of numeric IDs as string IDs |  nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesqu | 
| cursor | query | string | breaks up block of user IDs into pages | ellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci.  | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/blocks/ids?stringify_ids=%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesqu&cursor=ellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20 
```




#### post /blocks/create
blocks the specified user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | screen name of user to be blocked | etus in eros. Mauris sollicitudin varius purus, nec condimentum tellus sagittis at. N | 
| user_id | query | string | yes | ID of user to be blocked | . Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum ele | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | , dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pelle | 
| skip_status | query | string |  | whether or not to skip statuses |  malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id er | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/blocks/create?screen_name=etus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20N&user_id=.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20ele&include_entities=%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pelle&skip_status=%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20er 
```




#### post /blocks/destroy
un-blocks the specified user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | screen name of user to be un-blocked | m euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellu | 
| user_id | query | string | yes | ID of user to be un-blocked | ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, males | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | et luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tris | 
| skip_status | query | string |  | whether or not to skip statuses | t, consectetur adipiscing elit. Integer ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, soda | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/blocks/destroy?screen_name=m%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellu&user_id=ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20males&include_entities=et%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tris&skip_status=t%2C%20consectetur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20soda 
```




### Resource : users
#### get /users/lookup
returns fully-hydrated user objects up to 100
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | screen name of user to lookup |  ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est q | 
| user_id | query | string | ID of user to lookup | rcu, et dignissim augue interdum sed. Vest | 
| include_entities | query | string | The entities node will be disincluded when set to false | pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/lookup?screen_name=%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20q&user_id=rcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vest&include_entities=pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at 
```




#### get /users/show
returns a variety of info about specified user
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | screen name of user to be shown | dum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricie | 
| user_id | query | string | yes | ID of user to be shown |  ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | e potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/show?screen_name=dum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricie&user_id=%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.&include_entities=e%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam. 
```




#### get /users/search
simple relevance-based user search
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| q | query | string | yes | the search query to run against people search | ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie  | 
| page | query | string |  | specifies the page of results to receive | ec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue.  | 
| count | query | string |  | number of people to return per page | t est | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | vinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu  | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/search?q=ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20&page=ec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20&count=t%20est&include_entities=vinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20 
```




#### get /users/contributees
collection of users specified user can contribute to
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | screen name of user that is contributed to | t dui. Sed e | 
| user_id | query | string | yes | ID of user to that is contributed to | llentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu li | 
| skip_status | query | string |  | whether or not to skip statuses |  mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagitti | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/contributees?screen_name=t%20dui.%20Sed%20e&user_id=llentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar&include_entities=placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20li&skip_status=%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagitti 
```




#### get /users/contributors
collection of users that can contribute to specified account
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | yes | screen name of user contributing | rmentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula | 
| user_id | query | string | yes | ID of user contributing | ltrices augue. Suspendisse potenti. Mauris vehicula ex lorem,  | 
| include_entities | query | string |  | The entities node will be disincluded when set to false | quet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, v | 
| skip_status | query | string |  | whether or not to skip statuses | t molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Maur | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/contributors?screen_name=rmentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula&user_id=ltrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20&include_entities=quet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20v&skip_status=t%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Maur 
```




#### post /users/report_spam
Returna users report spam
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| screen_name | query | string | The ID or screen_name of the user you want to report as a spammer | od ullamcorper. | 
| user_id | query | string | The ID of the user you want to report as a spammer | disse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrer | 


* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/users/report_spam?screen_name=od%20ullamcorper.&user_id=disse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrer 
```




### Resource : geo
#### get /geo/id/{place_id}
Returns all the information about a know place
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| place_id | path | string | yes | A place in the world | enas et velit dignissim, tincidunt justo quis, ia | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/id/enas+et+velit+dignissim%2C+tincidunt+justo+quis%2C+ia 
```




#### get /geo/reverse_geoncode
Given a latitude and a longitude, searches for up to 20 places that can be used as a place_id when updatting a status
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| lat | query | string | yes | The latitude to search around | iscing elit. Integer ipsum sapien, biben | 
| long | query | string | yes | The longtitude to search around |  ipsum dolor sit amet, consectetur a | 
| accuracy | query | string |  | A hint on region in which to search |  massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim | 
| granularity | query | string |  | This is the minimal granularity of place types to return | ommodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ant | 
| max_results | query | string |  | A hint as to the number of results to return | tortor accumsan nibh | 
| callback | query | string |  | If supplied, the responses will use the JSON format with a callback of the given name | piscing elit. Integer ipsum sapien, bibe | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/reverse_geoncode?lat=iscing%20elit.%20Integer%20ipsum%20sapien%2C%20biben&long=%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20a&accuracy=%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim&granularity=ommodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ant&max_results=tortor%20accumsan%20nibh&callback=piscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibe 
```




#### get /geo/search
Search for places that can be attached to a statuses/updates
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| lat | query | string | yes | The latitude to search around | eque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed vari | 
| long | query | string | yes | The longtitude to search around | ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar,  | 
| query | query | string | yes | Free-form text to match against while executing a geo-based query | erisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignis | 
| ip | query | string | yes | An Ip address | ulputate odio. Donec quis facilisis arcu, | 
| accuracy | query | string |  | A hint on region in which to search |  nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien a | 
| granularity | query | string |  | This is the minimal granularity of place types to return | or accumsan nibh, sed pellentesque enim metus | 
| contained_within | query | string |  | This is the place_id which you would like to restrict the search results to | orper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at  | 
| attribute:street_address | query | string |  | This parameter searches for places which have this givven street address | consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorpe | 
| callback | query | string |  | If supplied, the responses will use the JSON format with a callback of the given name | mentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In no | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/search?lat=eque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20vari&long=ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20&query=erisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignis&ip=ulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C&accuracy=%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20a&granularity=or%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus&contained_within=orper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20&attribute%3Astreet_address=consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorpe&callback=mentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20no 
```




#### get /geo/similar_places
Locates places near the given coordinates which are similar in name
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| lat | query | string | yes | The latitude to search around | elit libero, | 
| long | query | string | yes | The longtitude to search around | que erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris ne | 
| name | query | string | yes | The name a place is known as | bitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse  | 
| contained_within | query | string |  | This is the place_id which you would like to restrict the search results to | vida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tort | 
| attribute:street_address | query | string |  | This parameter searches for places which have this givven street address | . Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit e | 
| callback | query | string |  | If supplied, the responses will use the JSON format with a callback of the given name | us ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/similar_places?lat=elit%20libero%2C&long=que%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20ne&name=bitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20&contained_within=vida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tort&attribute%3Astreet_address=.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20e&callback=us%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque. 
```




#### get /geo/places
Create a new place object at the given latitude and logitude
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| lat | query | string | yes | The latitude to search around | m sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros m | 
| long | query | string | yes | The longtitude to search around | . Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. S | 
| name | query | string | yes | The name a place is known as | e. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdi | 
| token | query | string | yes | The token found in the response from geo/similar_places | lentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris | 
| contained_within | query | string |  | This is the place_id which you would like to restrict the search results to | m. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus u | 
| attribute:street_address | query | string |  | This parameter searches for places which have this givven street address | tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pel | 
| callback | query | string |  | If supplied, the responses will use the JSON format with a callback of the given name | ue porta mauris nec massa egestas, sed mollis est molestie. Aenean quam | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/places?lat=m%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20m&long=.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20S&name=e.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdi&token=lentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris&contained_within=m.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20u&attribute%3Astreet_address=tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pel&callback=ue%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam 
```




### Resource : trends
#### get /trends/place
Returns the top 10 trending topics for a specific WOEID
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| id | query | string | yes | The yahoo where on earch id | congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce n | 
| exclude | query | string | yes | Setting this equal to hashtages will remove all hashtages from the trends list | n quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec.  | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/trends/place?id=congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20n&exclude=n%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20 
```




#### get /trends/available
Returns the availability


#### get /trends/closest
Returns the location that Twitter has trending topic information for
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| lat | query | string | yes | If provided with a long parameter the available trend locations wil be stored by distance | d feugiat magna elit in sapi | 
| long | query | string | yes | If provided with a lat parameters the available trend locations will be sorted by distance |  quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget n | 


* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/trends/closest?lat=d%20feugiat%20magna%20elit%20in%20sapi&long=%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20n 
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

