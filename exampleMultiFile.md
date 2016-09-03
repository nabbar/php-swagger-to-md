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

| Name |  |  |  
| --- | --- | --- |  
| count | query | string | 
| since_id | query | string | 
| max_id | query | string | 
| trim_user | query | string | 
| contributor_details | query | string | 
| include_entities | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/mentions_timeline?count=et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdu&since_id=lis%20scelerisque%20a&max_id=%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20&trim_user=dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20&contributor_details=Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20ma&include_entities=ignissim%2C%20imperdiet%20nunc%20m 
```




#### get /statuses/user_timeline
Returns a collection of the most recent Tweets posted by the User
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| count | query | string | 
| since_id | query | string | 
| max_id | query | string | 
| trim_user | query | string | 
| exclude_replies | query | boolean | 
| contributor_details | query | string | 
| include_rts | query | boolean | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/user_timeline?count=que%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20s&since_id=%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20s&max_id=cies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulput&trim_user=%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspen&exclude_replies=0&contributor_details=sque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20ve&include_rts=0 
```




#### get /statuses/home_timeline
Returns a collection of the most recent Tweets
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| since_id | query | string | 
| max_id | query | string | 
| trim_user | query | string | 
| exclude_replies | query | boolean | 
| contributor_details | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/home_timeline?since_id=sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20solli&max_id=%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20v&trim_user=ttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orc&exclude_replies=1&contributor_details=u%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20 
```




#### post /statuses/retweets/{id}
Retweens a tweet
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| id | path | string | 
| trim_user | query | string | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/retweets/uet+est%2C+posuere+tincidunt+elit.+Etiam+convallis+eu+ligula+non+consequat.+Pellentesque+elit+libero%2C+faucibus+luctus+ante+nec%2C+volutpat+dictum+neque.+Donec+molestie%2C+eros+in+pretium+pulvinar%2C+est+leo+vehicula+lectus%2C+a+cursus+neque+erat+vitae+odio.+Sed?trim_user=tetur%20adipi 
```




#### get /statuses/show/{id}
Retruns a single Tweet
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| id | path | string | 
| trim_user | query | string | 
| include_my_retweet | query | string | 
| include_entities | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/show/onsequat+mi+id+eros+viverra+ullamcorper.+Fusce+nec+est+quam.+Pellentesque+vulputate+sapien+at+turpis+molestie+congue.+Nunc+et?trim_user=%20&include_my_retweet=a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20&include_entities=endisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20 
```




#### post /statuses/destroy/{id}
Destroys the status specified by the required ID parameter
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| id | path | integer | 
| id32 | path | int32 | 
| id64 | path | int64 | 
| trim_user | query | string | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/destroy/-798773591?trim_user=asellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20t 
```




#### post /statuses/update
Updates the authenticating user's status
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| status | query | string | 
| exampleStringIPv4 | query | ipv4 | 
| exampleStringIPv6 | query | ipv6 | 
| exampleStringByte | query | byte | 
| exampleStringBinary | query | binary | 
| exampleStringDate | query | date | 
| exampleStringDateTime | query | date-time | 
| exampleStringPassword | query | password | 
| exampleStringUri | query | uri | 
| in_reply_to_status_id | query | string | 
| lat | query | string | 
| long | query | string | 
| place_id | query | string | 
| display_coordinates | query | string | 
| trim_user | query | string | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/update?status=s%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20pot&exampleStringIPv4=84.113.41.62&exampleStringIPv6=2001%3A605a%3A39c4%3A5eff%3Af10b%3Af522%3A%3A&exampleStringByte=YW0gdmFyaXVzIGxvYm9ydGlzIHBvcnR0aXRvci4gTWF1cmlzIHZlbCB1bHRyaWNlcyBlcmF0LCBhdCBoZW5kcmVyaXQgZW5p&exampleStringBinary=010000111100101101110001010001110100100100010011010010000111001011001111011110010011010110111101111001011001010000111000111011111000001111110101000110011101101001011001010111110010101010111001100110001000100110101010100011011101000101011010111100110001011000100110011001010101110101101111011110001010011011100001010010010010000100011000000010000000011110101100010000011111011000110001001101110001000100001101100100010111000000110111010010110000101011000001111101011001100010010100010100001000110010101010011101111111001000001001111001100110110010110000110010011011010111010001111000011011110111011000100011110000000011010000110000000011011111100010110011011100100001010100000001100001010101011110110001110000101111110110010111000101110010000100000010001101010001110111000100101011101111100011110000101000011010011010&exampleStringDate=2016-09-03&exampleStringDateTime=2016-09-03T16%3A28%3A04%2B00%3A00&exampleStringPassword=%5CMv%B5LYNJ%2B%23hE52h%60uV.NT%2772Y%28%2F%25%A7%2B84LD%C2l~I%2A0q%5C5m-%B5RGS%2BcG_dh1%5C%29%25l%5C%23pG9o%2C%5B%2Fa%5B%B0%A7%5C%60rCs%C2%C2%21XNgJ.jzG%B0eDnD%60e%3FQ%2A%3B%2CAq6KSl8%40%C2%5EbJ.t00NyISL4~%7B%B5%7DMni%5CGS%29A7QW1vK%60I%29f%25_e&exampleStringUri=http%3A%2F%2Flocalhost%2Fpath%2Fscript.php%3Fquery%23fragment&in_reply_to_status_id=rtor%20blandit%2C%20bibendum%20tortor%20ac%2C%20&lat=t%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20ege&long=tie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices&place_id=%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20&display_coordinates=ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20&trim_user=%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C 
```




#### get /statuses/oembed
Returns information allowing the creation of an embedded representation
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| id | query | string | 
| url | query | string | 
| maxwidth | query | string | 
| hide_media | query | string | 
| hide_thread | query | string | 
| align | query | string | 
| related | query | string | 
| lang | query | string | 
| exampleNumber | query | number | 
| exampleNumberFloat | query | float | 
| exampleNumberDouble | query | double | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/oembed?id=uris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem&url=%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20e&maxwidth=quet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20&hide_media=Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iac&hide_thread=%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20por&align=c%2C%20congue%20eros.%20Lorem%20ipsum%20dol&related=%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20es&lang=rdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuad&exampleNumber=1.82586E+234&exampleNumberFloat=0&exampleNumberDouble=0 
```




### Resource : lists
#### get /lists/list
Return all lists the authenticating or specified user subscribes to, including their own.
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| screen_name | query | string | 
| user_id | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/list?screen_name=nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20ac%20quam%20gravi&user_id=ibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20l 
```




#### get /lists/statuses
Returns a timeline of tweets authored by memebers of the specified list
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| list_id | query | string | 
| slug | query | string | 
| owner_screen_name | query | string | 
| owner_id | query | string | 
| since_id | query | string | 
| max_id | query | string | 
| count | query | string | 
| include_entities | query | string | 
| include_rts | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/statuses?list_id=ed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Pro&slug=ur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20es&owner_screen_name=massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lo&owner_id=%20Sed%20eu%20nulla&since_id=%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20m&max_id=c%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicul&count=uis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consect&include_entities=tricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20&include_rts=ellentesque%20 
```




#### get /lists/members/destroy
Returns the list of memebers destroy
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| list_id | query | string | 
| slug | query | string | 
| owner_screen_name | query | string | 
| user_id | query | string | 
| screen_name | query | string | 
| owner_id | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/members/destroy?list_id=incidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20se&slug=%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetu&owner_screen_name=endum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilis&user_id=us%20ante%20nec%2C%20volutpat%20dictu&screen_name=corper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Eti&owner_id=r%20sed%20ante%20sit%20amet%20sagittis.%20 
```




#### get /lists/memberships
Returns the lists of the specified user has been added to
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| user_id | query | string | 
| screen_name | query | string | 
| cursor | query | string | 
| filter_to_owned_lists | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/memberships?user_id=%20sodales.%20Etiam%20dignissim%20risus%20non&screen_name=vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta&cursor=an%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20&filter_to_owned_lists=dipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutp 
```




#### get /lists/subscribers
Returns the subscribers of the specified list
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| list_id | query | string | 
| slug | query | string | 
| owner_screen_name | query | string | 
| owner_id | query | string | 
| cursor | query | string | 
| include_entities | query | string | 
| skip_status | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers?list_id=%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tel&slug=ec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20i&owner_screen_name=volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.&owner_id=s%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20veh&cursor=ue%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris&include_entities=%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20&skip_status=ctus%20ante%20nec%2C%20vo 
```




#### post /lists/subscribers/create
Subscribes the authenticated user to the specified list
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| list_id | query | string | 
| slug | query | string | 
| owner_screen_name | query | string | 
| owner_id | query | string | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/subscribers/create?list_id=estie%20congue.%20Nun&slug=at%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20im&owner_screen_name=esuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.&owner_id=ien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor 
```




#### get /lists/subscribers/show
Check if the specified user is a subscriber of the specified list
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| list_id | query | string | 
| slug | query | string | 
| owner_screen_name | query | string | 
| user_id | query | string | 
| screen_name | query | string | 
| owner_id | query | string | 
| include_entities | query | string | 
| skip_status | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers/show?list_id=Nullam%20vel%20metus%20ac%20quam%20gravida%20pellentesque.%20Nullam%20ultricies%20turpis%20nec%20dignissim%20aliqua&slug=ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20&owner_screen_name=sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20e&user_id=nare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20f&screen_name=ros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cu&owner_id=urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20or&include_entities=it%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20pos&skip_status=%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros 
```




#### get /lists/subscribers/destroy
Returns list of subscribers destroy
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| list_id | query | string | 
| slug | query | string | 
| owner_screen_name | query | string | 
| owner_id | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers/destroy?list_id=onsequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvin&slug=interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20a&owner_screen_name=cipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20&owner_id=tium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique 
```




#### get /lists/members/create_all
Returns lists of members create_all
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| list_id | query | string | 
| slug | query | string | 
| owner_screen_name | query | string | 
| owner_id | query | string | 
| user_id | query | string | 
| screen_name | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/members/create_all?list_id=tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convall&slug=uis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligul&owner_screen_name=hasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odi&owner_id=arius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamco&user_id=eo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20er&screen_name=lis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicu 
```




#### post /lists/destroy
Returns list of destroy
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| list_id | query | string | 
| slug | query | string | 
| owner_screen_name | query | string | 
| owner_id | query | string | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/destroy?list_id=t%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.&slug=%20elit.&owner_screen_name=t%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et&owner_id=%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor 
```




#### post /lists/update
Returns lists of updates
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| list_id | query | string | 
| slug | query | string | 
| owner_screen_name | query | string | 
| owner_id | query | string | 
| name | query | string | 
| mode | query | string | 
| description | query | string | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/update?list_id=%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentes&slug=m%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20&owner_screen_name=&owner_id=sus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20digniss&name=us%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tem&mode=tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20si&description=%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20f 
```




#### post /lists/create
Returns list of create
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| name | query | string | 
| mode | query | string | 
| description | query | string | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/create?name=nissim%2C%20tincidunt%20justo%20&mode=umsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20variu&description=%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20sus 
```




#### get /lists/show
Returns list of show
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| list_id | query | string | 
| slug | query | string | 
| owner_screen_name | query | string | 
| owner_id | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/show?list_id=quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20&slug=elit.%20Integer%20ipsum%20sapien%2C%20bibendu&owner_screen_name=ium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20od&owner_id=s%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20susc 
```




#### get /lists/subscriptions
Returns list of subscriptions
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| screen_name | query | string | 
| user_id | query | string | 
| count | query | string | 
| cursor | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscriptions?screen_name=ulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20&user_id=ursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.&count=m%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20&cursor=tibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lob 
```




### Resource : list
#### get /list/members/show
Check if the specified user is a member of the specified list
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| list_id | query | string | 
| slug | query | string | 
| user_id | query | string | 
| screen_name | query | string | 
| owner_screen_name | query | string | 
| owner_id | query | string | 
| include_entities | query | string | 
| skip_status | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members/show?list_id=t%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex&slug=%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellu&user_id=dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec&screen_name=tesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20i&owner_screen_name=%20ut%20quam.%20Maecenas%20e&owner_id=ultricies%20nibh%20eu%20le&include_entities=eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C&skip_status=gna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20s 
```




#### get /list/members
Returns the members of the specified list
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| list_id | query | string | 
| slug | query | string | 
| owner_screen_name | query | string | 
| owner_id | query | string | 
| include_entities | query | string | 
| skip_status | query | string | 
| cursor | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members?list_id=s%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20pot&slug=ttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20&owner_screen_name=u%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20s&owner_id=s%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20ame&include_entities=porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molest&skip_status=tus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.&cursor=%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20 
```




#### post /list/members/create
Returns list of members create
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| list_id | query | string | 
| slug | query | string | 
| screen_name | query | string | 
| owner_screen_name | query | string | 
| owner_id | query | string | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/list/members/create?list_id=ec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Sus&slug=t%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20in&screen_name=ndum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam&owner_screen_name=blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.&owner_id=rci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20digniss 
```




#### get /list/members/destroy_all
Returns lists of destroy all
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| list_id | query | string | 
| slug | query | string | 
| user_id | query | string | 
| screen_name | query | string | 
| owner_screen_name | query | string | 
| owner_id | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members/destroy_all?list_id=issim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20i&slug=erdiet%20nun&user_id=estas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.&screen_name=im%2C%20imper&owner_screen_name=aucibus%20luctus%20ante%20nec%2C%20volutpat%20dict&owner_id=m%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20ju 
```




### Resource : direct_messages
#### get /direct_messages/sent
return 20 most recent direct messages sent
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| since_id | query | string | 
| max_id | query | string | 
| count | query | string | 
| page | query | string | 
| include_entities | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages/sent?since_id=onsectetur%20congu&max_id=it.%20Suspendisse%20justo%20turpis%2C%20&count=%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vu&page=hasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20&include_entities=%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20er 
```




#### get /direct_messages/show
returns a single direct message specified by an id
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| id | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages/show?id=ricies%20turpis%20n 
```




#### get /direct_messages
return 20 most recent direct messages sent to user
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| since_id | query | string | 
| max_id | query | string | 
| include_entities | query | string | 
| skip_status | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages?since_id=ictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20n&max_id=sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20mal&include_entities=us%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non&skip_status=%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20port 
```




#### post /direct_messages/destroy
destroys direct messages specified in required ID
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| id | query | string | 
| include_entities | query | string | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/direct_messages/destroy?id=tas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspe&include_entities=endum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet 
```




#### post /direct_messages/new
sends a new direct message to specified user
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| user_id | query | string | 
| screen_name | query | string | 
| text | query | string | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/direct_messages/new?user_id=%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20au&screen_name=%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh&text=%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posue 
```




### Resource : search
#### get /search/tweets
returns collection of relevant Tweets matching query
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| q | query | string | 
| geocode | query | string | 
| lang | query | string | 
| locale | query | string | 
| result_type | query | string | 
| count | query | string | 
| until | query | string | 
| since_id | query | string | 
| max_id | query | string | 
| include_entities | query | string | 
| callback | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/search/tweets?q=met%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20e&geocode=sollicitudin%20varius%20purus%2C%20nec%20cond&lang=%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.&locale=%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tor&result_type=estas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapi&count=s%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molest&until=scing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20veh&since_id=scing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20jus&max_id=t%20amet%2C%20consectetur&include_entities=faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a&callback=m%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20 
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

| Name |  |  |  
| --- | --- | --- |  
| id | path | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/saved_searches/show/d+eros+viverra+ullamcorper.+Fusce+nec+est+quam.+Pellentesque+vulputate+sapien+at+turpis+molestie+congue.+Nunc+et+lorem+eros.+Suspendisse+eget+nibh+pulvinar%2C+vestibulum+magna+ut%2C+suscipit+est.+Etiam+varius+lobortis+porttitor.+Mauris+vel+ultrices+ 
```




#### post /saved_searches/create
Create a new saved search for the authenticated user
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| query | query | string | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/saved_searches/create?query=m.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20f 
```




#### post /saved_searches/destroy/{id}
Destroy a saved search for the authenticating user
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| id | path | string | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/saved_searches/destroy/sodales%2C+sagittis+sed+e 
```




### Resource : friends
#### get /friends/ids
returns a cursored collection of user IDs followed by user
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| user_id | query | string | 
| screen_name | query | string | 
| cursor | query | string | 
| stringify_ids | query | string | 
| count | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friends/ids?user_id=%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue&screen_name=%20egestas%2C%20&cursor=ctus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.&stringify_ids=%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in&count=llentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspend 
```




### Resource : followers
#### get /followers/ids
returns a cursored collection of user IDs following the user
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| user_id | query | string | 
| screen_name | query | string | 
| cursor | query | string | 
| stringify_ids | query | string | 
| count | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/followers/ids?user_id=risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20cond&screen_name=st%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nis&cursor=s%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20a&stringify_ids=e%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris&count=ltricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20 
```




### Resource : friendships
#### get /friendships/incoming
returns collection of IDs of users with pending follow request
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| cursor | query | string | 
| stringify_ids | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/incoming?cursor=t%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat&stringify_ids=s%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt 
```




#### get /friendships/outgoing
returns collection of IDs of users with pending follow request from the user
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| cursor | query | string | 
| stringify_ids | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/outgoing?cursor=ttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravi&stringify_ids=ivamus%20id%20vulputate%20odio.%20Donec%20 
```




#### post /friendships/create
allows users to follow user sepcified by ID
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| screen_name | query | string | 
| user_id | query | string | 
| follow | query | string | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/create?screen_name=cing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricie&user_id=lestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivam&follow=%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissi 
```




#### post /friendships/destroy
allows user to unfollow user psecified by ID
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| screen_name | query | string | 
| user_id | query | string | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/destroy?screen_name=%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20es&user_id=tas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20V 
```




#### post /friendships/update
Allows one to enable or disable settings for specified user
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| screen_name | query | string | 
| user_id | query | string | 
| device | query | string | 
| retweets | query | string | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/update?screen_name=ttis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus&user_id=les%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcor&device=%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20au&retweets=%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue 
```




#### get /friendships/show
returns detailed info about relationship between two users
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| source_id | query | string | 
| source_screen_name | query | string | 
| target_id | query | string | 
| target_screen_name | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/show?source_id=les.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique&source_screen_name=hicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20v&target_id=m%20gra&target_screen_name=pis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliq 
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

| Name |  |  |  
| --- | --- | --- |  
| trend_location_woeid | query | string | 
| sleep_time_enabled | query | string | 
| start_sleep_time | query | string | 
| end_sleep_time | query | string | 
| time_zone | query | string | 
| lang | query | string | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/settings?trend_location_woeid=pien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20ju&sleep_time_enabled=um%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.&start_sleep_time=ie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20cons&end_sleep_time=eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20&time_zone=n%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20v&lang=rit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20a 
```




#### post /account/update_delivery_device
sets which device Twitter delivers updates to for user
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| device | query | string | 
| include_entities | query | string | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_delivery_device?device=sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20fel&include_entities=%20finibus%20erat.%20Proi 
```




#### post /account/update_profile
sets values that users ar eable to set under Account tab
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| name | query | string | 
| url | query | string | 
| location | query | string | 
| description | query | string | 
| include_entities | query | string | 
| skip_status | query | string | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile?name=im%20aliquam.%20Nunc%20sed%20enim%20nec%20tellus%20accum&url=ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20effi&location=lis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20cond&description=scipit%20est.%20Etiam%20varius%20lobor&include_entities=rra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20&skip_status=t%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20M 
```




#### post /account/update_profile_background_image
updates user's profile background image
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| tile | query | string | 
| use | query | string | 
| include_entities | query | string | 
| skip_status | query | string | 
| file | formData | file | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_background_image?tile=%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula&use=%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20&include_entities=%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20torto&skip_status=erdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitud 
Content-Type: multipart/form-data, boundary=57cafa1482ec2
Content-Length: 761
--57cafa1482ec2
content-disposition: form-data; name="file"

--data-binary 
N2Q1MGY4OTIxY2ZlNDhiYjM3Y2U3ZWNkZjg2ODI1MzhiODRmNzZjMGI3NTVhODc4ZWViYjk3N2M4MGY4MjExMzA0MGM2ZThiMDhhNTBkNTQ3OTQxYTFmM2E0MjZmYjQxNDgxMjJiM2JjMmYzZTJkMTkyNWY5NjYzOTY0NzYxZjU1NGNkZDJiNTk5ZjQxOWJmMGU2MGIwYTRkZGM3YjFiOWY2ZTBlZThkM2E3MWI3NDU4ODRhMGE3YTlkZjE0NDRhYzYyYzczYzIyNjk2ODRmYTkwOWRhMThkNjkxNmVjYWU1ODBmYmIzMWRiYzg0MjU0NDU4NDQ4OTA3OWEyMGJmNWQ1YzY3YzAwN2U2Y2ZiZTVjM2YwYjQ4N2IzMWFmZjEzMzEzNGNhMDg4N2Q4Y2JjM2M1ZDIxZjhhYjIwYjBiZTIyZWU4Yzg0YjMzYjg3MjFhZmZjZDk4NjMyOWU1OTAwNDYwZmQ0NDJjMGJmY2IwOWRhMDFlYzNhMDJhNTA4MzA1Y2QwOGUwYWZiZWIyNDU1MjY0ZmExMmZmM2U1OTY1Y2FmMjFlNzQ5MDgzNzI1MTQ3MjVjZjY2ZTViNTRhMWMxMzUzNDBiZGYwZTY1MjdhNmExZWI1MzFhZmM4ZGVjYTk3NmI5ZGNmMzQwNjU1NTExZWFlYmFiNDM1NGRkYzE5ZWY=
```




#### post /account/update_profile_colors
sets one or more hex values that controls color scheme
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| profile_background_color | query | string | 
| profile_link_color | query | string | 
| profile_sidebar_border_color | query | string | 
| profile_sidebar_fill_color | query | string | 
| profile_text_color | query | string | 
| include_entities | query | string | 
| skip_status | query | string | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_colors?profile_background_color=ut&profile_link_color=orper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etia&profile_sidebar_border_color=s%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulp&profile_sidebar_fill_color=erat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Null&profile_text_color=d%20mollis%20est%20molestie.%20Aenean%20qu&include_entities=uspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20pur&skip_status=interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitu 
```




#### post /account/update_profile_image
updates user's profile image
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| skip_status | query | string | 
| image | formData | file | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_image?skip_status=enim%20nec%20tellus%20accumsan%20tincidunt.%20Ali 
Content-Type: multipart/form-data, boundary=57cafa1484650
Content-Length: 762
--57cafa1484650
content-disposition: form-data; name="image"

--data-binary 
MzE0YWU5YTUyN2Q5ZmUxMmUxYmFlMjM2NjdiNjY2YmQ2NzM4NmQ2NWE0NTgwOWVhODJkZWQ0MTZhYTJiMzk2NzBkMTg5OTA3ZWQ3NWM2Y2E0MjFhMmM3YzllYTdiYjI0ZDA2NTVhZjY1ZWI3MWU0MzBkZmMyOTFkNTJhYmY0NjNkZjhlMDZlODg3YWE5MjFiNGU5MTRmNmM4OTkxM2I5MmM1ZTE1MmE0NDg5ZDRkODExYmJlMjk4ZTMwYWU4ZTYwODJlNGRkYTlkZmY4NWI5YTZlZTU3MmI1NmNhZTg5YmYwODc3OGIzZjJmYjk1OGNhMzIwZTg0MDIzOTgxYzU3MWZhZjZmYmM4N2FmNTdlZTc3MTc4NTUxMGM1OTFmMGMyOTFlMmZjMzJjYmFhYWFlYzk0MGNlZmY1MzMxNGJlYjJjZmE3NDg4YzY3NGQ4ZmJhYTU5MDViOTkxOTkyMTdiMzBmYTY2MDY4ZWRkNGQ2ODhkYWUzMTU2MmFkYzQyZDc0OTI0ZDQ3ZDRmMDFjYmNjNGY0ODhmMTczNjc3Y2VhZGExMTAyYTk0ODI5NWY5ODRiMThiMTM0OTk4M2MwM2Y1MTQ2MzBhYjdkNTAyMWE4MzA2NDgzM2IzYmZkOWFmY2YzMWNjMzFkMmQwYjVkMWIxZjI4OTE3YjZkZjBhYjljMzc=
```




### Resource : blocks
#### get /blocks/list
disallows retweets and device notifications from a user
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| include_entities | query | string | 
| skip_status | query | string | 
| cursor | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/blocks/list?include_entities=suere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20u&skip_status=%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20&cursor=i.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate 
```




#### get /blocks/ids
returns array of numeric user ids of blocked users
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| stringify_ids | query | string | 
| cursor | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/blocks/ids?stringify_ids=%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi&cursor=citur%2C%20mi 
```




#### post /blocks/create
blocks the specified user
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| screen_name | query | string | 
| user_id | query | string | 
| include_entities | query | string | 
| skip_status | query | string | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/blocks/create?screen_name=s%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20po&user_id=aecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20s&include_entities=%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.&skip_status=que%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20in 
```




#### post /blocks/destroy
un-blocks the specified user
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| screen_name | query | string | 
| user_id | query | string | 
| include_entities | query | string | 
| skip_status | query | string | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/blocks/destroy?screen_name=%20faucibus%20urna%20arcu%2C%20et%20di&user_id=tas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20&include_entities=t.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapi&skip_status=nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20ve 
```




### Resource : users
#### get /users/lookup
returns fully-hydrated user objects up to 100
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| screen_name | query | string | 
| user_id | query | string | 
| include_entities | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/lookup?screen_name=%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20torto&user_id=s%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium&include_entities=is%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20 
```




#### get /users/show
returns a variety of info about specified user
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| screen_name | query | string | 
| user_id | query | string | 
| include_entities | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/show?screen_name=nare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20&user_id=met%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoree&include_entities=pien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20preti 
```




#### get /users/search
simple relevance-based user search
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| q | query | string | 
| page | query | string | 
| count | query | string | 
| include_entities | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/search?q=psum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20al&page=io.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elemen&count=i.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20P&include_entities=orper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20 
```




#### get /users/contributees
collection of users specified user can contribute to
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| screen_name | query | string | 
| user_id | query | string | 
| include_entities | query | string | 
| skip_status | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/contributees?screen_name=%20vel%20auctor%20fringi&user_id=cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim&include_entities=%20turpis%20nec%20dignissim%20aliquam.%20Nunc%20s&skip_status=oreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh 
```




#### get /users/contributors
collection of users that can contribute to specified account
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| screen_name | query | string | 
| user_id | query | string | 
| include_entities | query | string | 
| skip_status | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/contributors?screen_name=.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20eli&user_id=la%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum&include_entities=u%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros&skip_status=lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper. 
```




#### post /users/report_spam
Returna users report spam
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| screen_name | query | string | 
| user_id | query | string | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/users/report_spam?screen_name=rsus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales&user_id=ec%20massa%20egestas%2C%20sed%20mollis%20e 
```




### Resource : geo
#### get /geo/id/{place_id}
Returns all the information about a know place
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| place_id | path | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/id/olor+sit+amet%2C+consectetur+adipiscing+elit.+Integer+ipsum+sapien%2C+bibendum+at+placerat+sit+amet%2C+volutpat+sed+lacus.+Nulla+justo+arcu%2C+sodales+ac+commodo+quis%2C+laoreet+a+ipsum 
```




#### get /geo/reverse_geoncode
Given a latitude and a longitude, searches for up to 20 places that can be used as a place_id when updatting a status
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| lat | query | string | 
| long | query | string | 
| accuracy | query | string | 
| granularity | query | string | 
| max_results | query | string | 
| callback | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/reverse_geoncode?lat=ros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20u&long=%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sap&accuracy=%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet&granularity=%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20ma&max_results=lestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo&callback=o%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate 
```




#### get /geo/search
Search for places that can be attached to a statuses/updates
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| lat | query | string | 
| long | query | string | 
| query | query | string | 
| ip | query | string | 
| accuracy | query | string | 
| granularity | query | string | 
| contained_within | query | string | 
| attribute:street_address | query | string | 
| callback | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/search?lat=rci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo&long=uam%20gravida%20pellentesque.%20Nullam%20ultricies%20turpis%20nec%20dignissim%20aliquam.%20Nunc%20sed%20enim%20nec%20tellus&query=dio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20&ip=ros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20qua&accuracy=us%20vel%20elit.%20Sed%20effici&granularity=%20purus%20ultrices%20nec.%20Vestib&contained_within=e.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor&attribute%3Astreet_address=%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20V&callback=%20mi%20id%20eros%20v 
```




#### get /geo/similar_places
Locates places near the given coordinates which are similar in name
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| lat | query | string | 
| long | query | string | 
| name | query | string | 
| contained_within | query | string | 
| attribute:street_address | query | string | 
| callback | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/similar_places?lat=ndrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20torto&long=sis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20er&name=us%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20li&contained_within=e%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagitt&attribute%3Astreet_address=%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a&callback=%20blandit%2C%20bib 
```




#### get /geo/places
Create a new place object at the given latitude and logitude
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| lat | query | string | 
| long | query | string | 
| name | query | string | 
| token | query | string | 
| contained_within | query | string | 
| attribute:street_address | query | string | 
| callback | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/places?lat=ar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20&long=dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursu&name=%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium&token=sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20a&contained_within=s%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20ve&attribute%3Astreet_address=tibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Ves&callback=Sed%20eu%20nulla%20malesu 
```




### Resource : trends
#### get /trends/place
Returns the top 10 trending topics for a specific WOEID
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| id | query | string | 
| exclude | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/trends/place?id=%20Nunc%20sed%20enim%20nec%20tellus%20acc&exclude=%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20m 
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

| Name |  |  |  
| --- | --- | --- |  
| lat | query | string | 
| long | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/trends/closest?lat=facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libe&long=%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam 
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

| Name |  |  |  
| --- | --- | --- |  
| resources | query | array | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/application/rate_limit_status 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

