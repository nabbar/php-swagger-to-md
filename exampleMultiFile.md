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
HTTP 1.1 get http://api.twitter.com/1.1/statuses/mentions_timeline?count=stibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20ar&since_id=g%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20moles&max_id=metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tr&trim_user=laoreet%20a%20ut%20dui.%20&contributor_details=%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspend&include_entities=or%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C 
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
| contributor_details | query | string |  no |  |  |  |  |  |  | This parameter enhances the contributors element of the status response |
| include_rts | query | boolean |  no |  |  |  |  |  |  | When set to false, the timeline will strip any native retweet |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/user_timeline?count=ctetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20fe&since_id=.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20e&max_id=%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimen&trim_user=.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros&exclude_replies=0&contributor_details=bendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non&include_rts=0 
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
| contributor_details | query | string |  no |  |  |  |  |  |  | This parameter enhances the contributors element of the status response |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/home_timeline?since_id=ehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vesti&max_id=eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non&trim_user=%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20&exclude_replies=1&contributor_details=et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ips 
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
HTTP 1.1 post http://api.twitter.com/1.1/statuses/retweets/tibulum+magna+ut%2C+suscipit+est.+Etiam+varius+lobortis+porttitor.+Mauris+vel+ultrices+erat%2C+at+hendrerit+enim.+Sed+leo+ex%2C+pulvinar+vel+metus+et%2C+molestie+pretium+tortor.+Praesent+interdum+fringilla+orci?trim_user=porta%20mauris%20nec%20massa%20egestas%2C 
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
HTTP 1.1 get http://api.twitter.com/1.1/statuses/show/+ultricies+nibh+eu+leo+consectetur+congue+quis+nec+tellus.+Morbi+consequat+mi+id+eros+viverra+ullamcorper.+Fusce+nec+est+quam.+Pellentesque+vulputate+sapien+at+turpis+molestie+congue.+Nunc+et+lorem+eros.+Susp?trim_user=nsectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20ni&include_my_retweet=ellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20&include_entities=stas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20se 
```




#### post /statuses/destroy/{id}
Destroys the status specified by the required ID parameter
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| id | path | integer |  no |  |  |  |  |  |  | The numerical ID of the desired status |
| id32 | path | integer, formatted as : int32 |  no |  |  |  |  |  |  | The numerical ID of the desired status |
| id64 | path | integer, formatted as : int64 |  no |  |  |  |  |  |  | The numerical ID of the desired status |
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/destroy/-1970729806?trim_user=sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20se 
```




#### post /statuses/update
Updates the authenticating user's status
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| status | query | string |  no |  |  |  |  |  |  | The text of your status update |
| exampleStringIPv4 | query | string, formatted as : ipv4 |  no |  |  |  |  |  |  | The text of your status update |
| exampleStringIPv6 | query | string, formatted as : ipv6 |  no |  |  |  |  |  |  | The text of your status update |
| exampleStringByte | query | string, formatted as : byte |  no |  |  |  |  |  |  | The text of your status update |
| exampleStringBinary | query | string, formatted as : binary |  no |  |  |  |  |  |  | The text of your status update |
| exampleStringDate | query | string, formatted as : date |  no |  |  |  |  |  |  | The text of your status update |
| exampleStringDateTime | query | string, formatted as : date-time |  no |  |  |  |  |  |  | The text of your status update |
| exampleStringPassword | query | string, formatted as : password |  no |  |  |  |  |  |  | The text of your status update |
| exampleStringUri | query | string, formatted as : uri |  no |  |  |  |  |  |  | The text of your status update |
| in_reply_to_status_id | query | string |  no |  |  |  |  |  |  | The ID of an existing status |
| lat | query | string |  no |  |  |  |  |  |  | The latitude of the location |
| long | query | string |  no |  |  |  |  |  |  | The longitude of the location |
| place_id | query | string |  no |  |  |  |  |  |  | A place in the world |
| display_coordinates | query | string |  no |  |  |  |  |  |  | Whether or not to put a pin on the exact coordinates a tweet |
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/update?status=%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20s&exampleStringIPv4=188.186.183.69&exampleStringIPv6=2001%3A19c9%3Aa84f%3Ad29d%3A5368%3A1d48%3A%3A&exampleStringByte=IHNlZCBsYWN1cy4gTnVsbGEganVzdG8gYXJjdSwgc29kYWxlcyBhYyBjb21tb2RvIHF1aXMsIGxhb3JlZXQgYSBpcHN1bS4gRHVpcyBzZW0gZWxpdCwgcG9zdWVyZSBldSBmYWNpbGlzaXMgbmVjLCB0ZW1wdXMgYWMgaXBzdW0uIFV0IG1vbGVzdGllIGFsaXF1ZXQgZXN0LCBwb3N1ZXJlIHRpbmNpZHVudCBlbGl0LiBFdGlhbSBjb252YWxsaXMgZXUgbGlndWxhIG4%3D&exampleStringBinary=1001100011001001000100001101000010011010101101011001011001000010000011110011101001111101010010100110110101101000111111100000101111000010010010111101110011111000000100100001010010110110001011001011101110001001011111111101100001010111100010111100101011110000010101101101101011000010111100011001000101011001001101001010000010010100101100101110101100000010000110111110101100001110110111100011011111101011110101110100101000000000100011100111011010111011000110011111011010010101011100001000001001100001011000101101100100111100001001011100110011001110011111110000001001110000000101001011010001011100000101111101000001001001001001101010111110000000000100101000011111001010000100100001011101000010110011100011000000111001011001011010000110111100110001100000010010010111000001000010100101100100110100101010100101100110010000111011110100011100101000001101010111101100111010011111101110011100011010100000111000100101001101100010000000111101011110011110111001101101101100100101010100001111011100000001110000010100000010000010000000111110011011001111001011100111110100110011011110100101111011111101011101111100110111011100000101111000011110110010110010000110101000010110001110100111110111101101110010010111010011001001000011101100010111000000000100001001011100000000101000101010101011100111011000011101100101100100101101010100001111010011110000101100101110010001101111101110001100101001011000011100101110010011100001111111011000010001011101011101111110010110010011101101111001101100000011101111111100000011001011111001000110111110000001110001001110010111100010111100100011101011011011111001101110110111000000010101101010101010001110101100110001100101111011100101010001111100000011111100101001001011101001100010100100111010000100100100100000111001001101010110011111101010111000111000111011111110100010110000101011010111011101100111101010000011001111011000101111011101110101111100011010111010010111011011010100011110110010011100010011111001001001010111&exampleStringDate=2016-09-03&exampleStringDateTime=2016-09-03T14%3A19%3A55%2B00%3A00&exampleStringPassword=J%3D8Ze%7Cbbi%29BF%5B%27%2A7_%40%C2Tyv%C2%20p%C2%C2k7O%20RQQ%5C%5C%2C%B0U%404%C2G%405u%24%26SOt_%60%20r%5D7-%40gMP%C2%3D0cs.%7DrL_%B54n%60yS3j3x%28%B5sYfkB%2F3%7Bg%3B9gSBON92E%261gvz%C2zf%C2%C2%B00Gzfm%25QiA%3A%40J%40V%5Ey%5D%7Dv.lwNQ%2Fm_%5E-Bc-5M%5Cr%C2%20K%265.F%29%C2G%2At%2CG%2B%269RWV%24uWl5%A7%240&exampleStringUri=http%3A%2F%2Flocalhost%2Fpath%2Fscript.php%3Fquery%23fragment&in_reply_to_status_id=%20at%20hendrerit%20enim.%20Sed%20&lat=%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed&long=t%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egesta&place_id=%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C&display_coordinates=pat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molest&trim_user=vamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phas 
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
| exampleNumber | query | number |  no |  |  |  |  |  |  | Languages code for the rendered embed |
| exampleNumberFloat | query | number, formatted as : float |  no |  |  |  |  |  |  | Languages code for the rendered embed |
| exampleNumberDouble | query | number, formatted as : double |  no |  |  |  |  |  |  | Languages code for the rendered embed |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/oembed?id=n%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20no&url=la%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20&maxwidth=.%20Nunc%20sed%20enim%20&hide_media=pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.&hide_thread=r.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20males&align=c%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morb&related=t%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20soll&lang=uris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20fe&exampleNumber=3.938528E+230&exampleNumberFloat=0&exampleNumberDouble=0 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/list?screen_name=Vestibulum%20elementum%20felis%20s&user_id=s%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20p 
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
| since_id | query | string |  no |  |  |  |  |  |  | Returns result with an ID greater than the specified ID |
| max_id | query | string |  no |  |  |  |  |  |  | Returns results with an ID less than or equal to the specified ID |
| count | query | string |  no |  |  |  |  |  |  | Specifies the number of tweets to try and retrieve |
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false |
| include_rts | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, the list timeline will contain native retweets in addition to the standard stream of tweets |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/statuses?list_id=t%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C&slug=tibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20ero&owner_screen_name=ien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20variu&owner_id=entum%20tellus%20sagittis%20at.%20Nullam%20vel%20me&since_id=ue%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eg&max_id=r%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20ve&count=.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tri&include_entities=tur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20a&include_rts=i.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20f 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/members/destroy?list_id=risque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potent&slug=arcu%2C%20sodales%20ac%20commodo&owner_screen_name=etium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdu&user_id=%20gravida%20pellentesque.%20Nullam%20&screen_name=%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C&owner_id=im%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/memberships?user_id=%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20&screen_name=uam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nu&cursor=%2C%20vehi&filter_to_owned_lists=%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet 
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
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false |
| skip_status | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1 |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers?list_id=ec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20&slug=ros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum&owner_screen_name=tor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20se&owner_id=s%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20digni&cursor=d%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20ame&include_entities=it%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20a&skip_status=dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20v 
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
HTTP 1.1 post http://api.twitter.com/1.1/lists/subscribers/create?list_id=acerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20conv&slug=%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20ac%20qua&owner_screen_name=tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20in&owner_id=ittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20 
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
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false |
| skip_status | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1 |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers/show?list_id=hicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur&slug=tus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20&owner_screen_name=%20Mau&user_id=finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mau&screen_name=%20viverra%20ullamcorper.&owner_id=ros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor&include_entities=felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20e&skip_status=m%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers/destroy?list_id=issim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpa&slug=trices%20erat%2C%20at%20hendrer&owner_screen_name=ue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestib&owner_id=u%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/members/create_all?list_id=%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20m&slug=hendrerit%20&owner_screen_name=psum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20v&owner_id=les%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Pha&user_id=gilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandi&screen_name=inar%20metus%20massa%2C%20malesuada%20 
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
HTTP 1.1 post http://api.twitter.com/1.1/lists/destroy?list_id=i%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20ali&slug=el%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metu&owner_screen_name=sum.%20Quisque%20porta%20mauris%20nec%20massa%20eg&owner_id=acilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero 
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
HTTP 1.1 post http://api.twitter.com/1.1/lists/update?list_id=%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissi&slug=bi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestib&owner_screen_name=el%20metus%20ac%20quam%20gravida%20pellentesque.%20Nullam%20ultricies%20turpis%20nec%20dignissim%20aliquam.%20Nunc%20sed%20enim%20ne&owner_id=%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20e&name=e%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20e&mode=sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20po&description=facilisis%20n 
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
HTTP 1.1 post http://api.twitter.com/1.1/lists/create?name=nissi&mode=e%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20&description=ortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20ac%20quam%20gr 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/show?list_id=posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem&slug=%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipi&owner_screen_name=rem%20ipsum%20dolor%20sit%20amet%2C%20consect&owner_id=tis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus 
```




#### get /lists/subscriptions
Returns list of subscriptions
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user |
| user_id | query | string |  no |  |  |  |  |  |  | The id of the user for whom to return results for |
| count | query | string |  no |  |  |  |  |  |  | Specifies the number of tweets to try and retrieve |
| cursor | query | string |  no |  |  |  |  |  |  | Breaks the results into pages |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscriptions?screen_name=m%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20&user_id=rat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20&count=eet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20conseq&cursor=nsectetur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20la 
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
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false |
| skip_status | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1 |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members/show?list_id=nare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non&slug=Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus&user_id=vinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20solli&screen_name=Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicul&owner_screen_name=is%20eu%20ligula%20non%20consequat.%20Pellentesque&owner_id=teger%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C&include_entities=ulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestib&skip_status=%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20 
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
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false |
| skip_status | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1 |
| cursor | query | string |  no |  |  |  |  |  |  | Breaks the results into pages |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members?list_id=n%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit&slug=laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pell&owner_screen_name=urus%2C%20nec%20condimentum%20tellus%20sagittis%20at.&owner_id=%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultric&include_entities=stas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20qua&skip_status=nibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed&cursor=nec%20tellus 
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
HTTP 1.1 post http://api.twitter.com/1.1/list/members/create?list_id=erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Cura&slug=per%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20qui&screen_name=ed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C&owner_screen_name=m%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20ti&owner_id=nas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20cons 
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
HTTP 1.1 get http://api.twitter.com/1.1/list/members/destroy_all?list_id=rra%20ullamcorper.%20&slug=ec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20feli&user_id=Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20ne&screen_name=suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20&owner_screen_name=Morbi%20consequat%20mi%20id%20ero&owner_id=s%20sapien%20finibus%20at 
```




### Resource : direct_messages
#### get /direct_messages/sent
return 20 most recent direct messages sent
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| since_id | query | string |  no |  |  |  |  |  |  | Returns result with an ID greater than the specified ID |
| max_id | query | string |  no |  |  |  |  |  |  | Returns results with an ID less than or equal to the specified ID |
| count | query | string |  no |  |  |  |  |  |  | Specifies the number of tweets to try and retrieve |
| page | query | string |  no |  |  |  |  |  |  |  |
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages/sent?since_id=ces%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex&max_id=stie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20a&count=eque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20q&page=is%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20an&include_entities=aximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisqu 
```




#### get /direct_messages/show
returns a single direct message specified by an id
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| id | query | string |  no |  |  |  |  |  |  | ID of direct message |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages/show?id=endum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20vel 
```




#### get /direct_messages
return 20 most recent direct messages sent to user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| since_id | query | string |  no |  |  |  |  |  |  | Returns result with an ID greater than the specified ID |
| max_id | query | string |  no |  |  |  |  |  |  | Returns results with an ID less than or equal to the specified ID |
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include status |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages?since_id=at%2C%20at%20hendrerit%20enim.%20&max_id=cenas%20e&include_entities=%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20sce&skip_status=%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20n 
```




#### post /direct_messages/destroy
destroys direct messages specified in required ID
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| id | query | string |  no |  |  |  |  |  |  | ID of direct message to delete |
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/direct_messages/destroy?id=sum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20d&include_entities=inia%20id%20tempor%20sed%2C%20dap 
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
HTTP 1.1 post http://api.twitter.com/1.1/direct_messages/new?user_id=nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20or&screen_name=t%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam&text=%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissi 
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
| count | query | string |  no |  |  |  |  |  |  | Specifies the number of tweets to try and retrieve |
| until | query | string |  no |  |  |  |  |  |  | returns tweets created before given date |
| since_id | query | string |  no |  |  |  |  |  |  | Returns result with an ID greater than the specified ID |
| max_id | query | string |  no |  |  |  |  |  |  | Returns results with an ID less than or equal to the specified ID |
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false |
| callback | query | string |  no |  |  |  |  |  |  | response will use the callback with given name |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/search/tweets?q=olestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudi&geocode=ravida%20pellentesque.%20Nullam%20ultricies%20&lang=sto%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laore&locale=t.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20just&result_type=da%2C%20egestas%20velit%20id%2C%20semper%20f&count=u%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congu&until=.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20grav&since_id=e%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20&max_id=%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Mor&include_entities=s%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20ni&callback=nec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20c 
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
HTTP 1.1 get http://api.twitter.com/1.1/saved_searches/show/isque+porta+mauris+nec+massa+egestas%2C+sed+mollis+est+molestie.+Aenea 
```




#### post /saved_searches/create
Create a new saved search for the authenticated user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| query | query | string |  no |  |  |  |  |  |  | The query of the search the user would like to save |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/saved_searches/create?query=ur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien. 
```




#### post /saved_searches/destroy/{id}
Destroy a saved search for the authenticating user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| id | path | string |  no |  |  |  |  |  |  | The id of the saved search |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/saved_searches/destroy/+leo+consectetur+congue+quis+nec+tellus.+Morbi+consequat+mi+id+eros+viverra+ull 
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
| count | query | string |  no |  |  |  |  |  |  | Specifies the number of tweets to try and retrieve |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friends/ids?user_id=ec.%20Vestibulum%20elementum%20felis%20sit%20am&screen_name=Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ult&cursor=r%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20M&stringify_ids=%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20n&count=.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20eli 
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
| count | query | string |  no |  |  |  |  |  |  | Specifies the number of tweets to try and retrieve |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/followers/ids?user_id=os%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur&screen_name=%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliq&cursor=ie%20pretium%20tortor.%20Praesent%20interdum%20fringill&stringify_ids=er%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20v&count=%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacin 
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
HTTP 1.1 get http://api.twitter.com/1.1/friendships/incoming?cursor=unc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ul&stringify_ids=ed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20n 
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
HTTP 1.1 get http://api.twitter.com/1.1/friendships/outgoing?cursor=.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20&stringify_ids=sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20c 
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
HTTP 1.1 post http://api.twitter.com/1.1/friendships/create?screen_name=um%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finib&user_id=auris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20&follow=%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20 
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
HTTP 1.1 post http://api.twitter.com/1.1/friendships/destroy?screen_name=odales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultric&user_id=c%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20fauci 
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
HTTP 1.1 post http://api.twitter.com/1.1/friendships/update?screen_name=cing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus&user_id=d%20vulputate%20odio.%20Donec%20quis%20facilisis%20&device=gilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendis&retweets=rttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20ve 
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
HTTP 1.1 get http://api.twitter.com/1.1/friendships/show?source_id=terdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20fi&source_screen_name=%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincid&target_id=%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Don&target_screen_name=ibh%2C%20sed%20pel 
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
HTTP 1.1 post http://api.twitter.com/1.1/account/settings?trend_location_woeid=&sleep_time_enabled=la%20lectus%2C%20a&start_sleep_time=orem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20er&end_sleep_time=ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hen&time_zone=%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20to&lang=sis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dol 
```




#### post /account/update_delivery_device
sets which device Twitter delivers updates to for user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| device | query | string |  no |  |  |  |  |  |  | must be one of sms, none |
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_delivery_device?device=%20aliquet.%20Phasel&include_entities=euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luct 
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
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include statuses in response |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile?name=sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20e&url=Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20&location=ndisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20a&description=bus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20&include_entities=rtor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ult&skip_status=sum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20e 
```




#### post /account/update_profile_background_image
updates user's profile background image
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| tile | query | string |  no |  |  |  |  |  |  | whether or not to tile background image |
| use | query | string |  no |  |  |  |  |  |  | display background image or not |
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include status in returned user objects |
| file | formData | file |  no |  |  |  |  |  |  | image to replace background image of profile |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_background_image?tile=l%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20fe&use=%20ultricies%20turpis%20nec%20dignissim%20aliquam.%20Nunc%20sed%20enim%20nec%20tellus%20accu&include_entities=are%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit&skip_status=%20pellentesque%20enim%20metus%20in%20eros.%20Mauris 
Content-Type: multipart/form-data, boundary=57cadc0bf2226
Content-Length: 761
--57cadc0bf2226
content-disposition: form-data; name="file"

--data-binary 
YjFjMjU3Mjk5MTAyNDllNWI0NGMzOTg3Zjk1ZjkyZjI4YTkwOTgwODY1ZjZmZjRhMDRkZDJjZGFiNjA0MzU5OTI3Zjc5ZTVjZDQ2YjMwYjJlYzAwNzFhMmQ1ZjRhODQyOWM4OTI0Y2ZlYmEyMWExMjQyNTExYjNkZTMwMWEzMDg4MWY5NDcxNDhmZThkZmZhY2VhMzljZjhmMTQ1NDVkNzg2ZmMwMGExMDZlNWNmZmFiMmFhZjljNGFiYTcxN2Y0ZWEyYWNkMTU1ZGUyNjEwMzI0MmM5NWJmNzA1OTg0ODI5MzIxZTMxYjQ4ZTk3ZDFjMmVkYzRjZWRiOTM4OWY1YmQxZjMzMTA0ZjMzZTRlMDU4OTM5ODg4Y2NiMzdlMDIxYTBjMDEyZWQ4ZTQ3MjdmNTU5MGU1OTQxZWMyYjFmNDY1OTBlZjZjMjc5YmU4MjllOWNhYjVhMWQ4Yjk3ZmFlYmQ1ODIyOTg4YTFkNDljZTc1MjhiNzRjMzA1YmFlY2Q0YWQwYWQ2ZTU5NTkwODg4NTVhYjY4NjcwNTAxNjc4NWQxNTkwNzhlMzQwY2VhNTZhZmJkZmVjNmI2YzAwNDRjNGIzMWJlOWZjMDYwMTc4N2U2ZWU2NTZiYWM5NzY5NTU5NzYzNDJmMjRjYmIyOTAwNjUxYTg0ZmFiOTZhOTc0NGQ=
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
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include statuses |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_colors?profile_background_color=ua&profile_link_color=%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20&profile_sidebar_border_color=e%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20&profile_sidebar_fill_color=mcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales&profile_text_color=lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20&include_entities=it%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feug&skip_status=%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20d 
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
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_image?skip_status=%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20 
Content-Type: multipart/form-data, boundary=57cadc0bf3350
Content-Length: 762
--57cadc0bf3350
content-disposition: form-data; name="image"

--data-binary 
ZmUyNzA0Y2I1ZjVmMjFhNTE4ZGY1MWJkYTVjMzc2MjVmMTk1NGFhNTQyNDM0ZDQzOGJiZTdjNTBkM2EzYzQ0M2M5ZGI3MzU0ZGE5MjhmODA1ZmY0OTZmYzlmZTY3OTJjZjI3MDQ4YmY2MWEwZGEyNmQ1YTVlYjVmZGI0NzY0ZmViOTJjM2RkYzBjNzhlNTdhOWE4ZDhiMjk5YTY3MzZkNmU2YjM5YjQzOTExZDdhYTEyNzRjMGI3ZGYyZWY2ZTk1NmQ5OTk5NjgwN2FmNjM3ZjFhYjY4OTM5Yzk3NTE2MjkwODQ3OTVhOGRiZWMyYTFkOGIxNzdkNDJlMzk1ODNmZTFlZjI5ZmMyZTY2MWZkY2EyMTAyYzUyZGZiYmQwZTM3N2I0N2NjNjNhMjNlMzBhNTI5YmExMDU3NjgwN2NmNDk4OGE4NjIyYTMxN2Y5NWJhYjQ5NDU0YjkwNWI4YmY4MDE1ODAzMjJiNmQ5ZTY5MDJjNTgzNmE4ODAzZDNhODQwZDMzOGQwYjU2MmFkNDM4Y2MwZDUxYTFlNmI2N2Q1YTQ2YWUzZGU4NGNlNmRmNzc1NTNjNWVhYWE0Yjk4YWEwNjk1NTIzMjgxNTZiN2EwNTljNmFlNDNiZWJmMTVhMTRiOGI5ZWY4ZWMwZDU3M2E0MzY4YTllMTMzYWFhZWQxZjk=
```




### Resource : blocks
#### get /blocks/list
disallows retweets and device notifications from a user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include statuses in response |
| cursor | query | string |  no |  |  |  |  |  |  | breaks block of user to be broken up into pages |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/blocks/list?include_entities=m%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20&skip_status=%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20E&cursor=elerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20se 
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
HTTP 1.1 get http://api.twitter.com/1.1/blocks/ids?stringify_ids=el%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elemen&cursor=%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20o 
```




#### post /blocks/create
blocks the specified user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user to be blocked |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user to be blocked |
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to skip statuses |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/blocks/create?screen_name=vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20m&user_id=m%2C%20tincidu&include_entities=ulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidu&skip_status=t%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivam 
```




#### post /blocks/destroy
un-blocks the specified user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user to be un-blocked |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user to be un-blocked |
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to skip statuses |

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/blocks/destroy?screen_name=maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20p&user_id=%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20&include_entities=e%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficit&skip_status=au 
```




### Resource : users
#### get /users/lookup
returns fully-hydrated user objects up to 100
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user to lookup |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user to lookup |
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/lookup?screen_name=%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20q&user_id=erdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20co&include_entities=%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20pla 
```




#### get /users/show
returns a variety of info about specified user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user to be shown |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user to be shown |
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/show?screen_name=f&user_id=um%20elementum%20feli&include_entities=.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lect 
```




#### get /users/search
simple relevance-based user search
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| q | query | string |  no |  |  |  |  |  |  | the search query to run against people search |
| page | query | string |  no |  |  |  |  |  |  | specifies the page of results to receive |
| count | query | string |  no |  |  |  |  |  |  | number of people to return per page |
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/search?q=%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesu&page=a%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed&count=o.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendiss&include_entities=adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20ef 
```




#### get /users/contributees
collection of users specified user can contribute to
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user that is contributed to |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user to that is contributed to |
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to skip statuses |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/contributees?screen_name=%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20l&user_id=%20enim%2C%20id%20feugi&include_entities=hasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20v&skip_status=arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20li 
```




#### get /users/contributors
collection of users that can contribute to specified account
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :---: | :---: | :---: | :---: | :-----------------------: | :--------------: | :---: | :---------: | :---: | :---: | :----------------------------------------------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user contributing |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user contributing |
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to skip statuses |

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/contributors?screen_name=ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20m&user_id=a%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facili&include_entities=dipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posue&skip_status=sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20S 
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
HTTP 1.1 post http://api.twitter.com/1.1/users/report_spam?screen_name=%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dap&user_id=lestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20no 
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
HTTP 1.1 get http://api.twitter.com/1.1/geo/id/ut%2C+s 
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
HTTP 1.1 get http://api.twitter.com/1.1/geo/reverse_geoncode?lat=lestie%20aliquet%20est%2C%20posue&long=rcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20digni&accuracy=tus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20&granularity=rci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20i&max_results=t%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20vo&callback=mpor%20sed%2C%20dapibus%20vel%20elit.%20 
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
HTTP 1.1 get http://api.twitter.com/1.1/geo/search?lat=is%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20jus&long=ur%20adipiscing%20elit.%20Integer%20i&query=mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20s&ip=%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20ac%20quam%20gravida%20pellentesque.%20Nullam%20ultricies%20turpis%20&accuracy=ongue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.&granularity=ipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20f&contained_within=lesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20&attribute%3Astreet_address=issim%20au&callback=a%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20 
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
HTTP 1.1 get http://api.twitter.com/1.1/geo/similar_places?lat=nim%20nec%20&long=n%20tincidunt.%20Aliquam%20enim%20dui%2C%20consec&name=vida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada&contained_within=ec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20&attribute%3Astreet_address=acus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20p&callback=ces%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20mole 
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
HTTP 1.1 get http://api.twitter.com/1.1/geo/places?lat=nissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20od&long=%20Aliquam%20enim%20dui%2C%20consectetur%20sit%20&name=la%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20ve&token=verra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibul&contained_within=vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem&attribute%3Astreet_address=elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20an&callback=%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20fa 
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
HTTP 1.1 get http://api.twitter.com/1.1/trends/place?id=%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodal&exclude=id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20ero 
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
HTTP 1.1 get http://api.twitter.com/1.1/trends/closest?lat=Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20&long=t%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla 
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

