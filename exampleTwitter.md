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
HTTP 1.1 get http://api.twitter.com/1.1/statuses/mentions_timeline?count=gestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultri&since_id=%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20or&max_id=icula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20&trim_user=%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20fac&contributor_details=st%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20qua&include_entities=ec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20 
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
| contributor_details | query | boolean | 
| include_rts | query | boolean | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/user_timeline?count=sus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et&since_id=%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorpe&max_id=nsectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi&trim_user=%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Null&exclude_replies=0&contributor_details=0&include_rts=0 
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
| contributor_details | query | boolean | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/home_timeline?since_id=ignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20&max_id=liquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus&trim_user=n%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20po&exclude_replies=1&contributor_details=0 
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
HTTP 1.1 post http://api.twitter.com/1.1/statuses/retweets/condimentum+eget%2C+tristique+ut+quam.+Maecenas+et+velit+dignissim%2C+tincidunt+justo+quis%2C+iaculis+odio.+Mauris+volutpat+dignissim+m?trim_user=aximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20q 
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
HTTP 1.1 get http://api.twitter.com/1.1/statuses/show/+Vestibulum+elementum+felis+sit+amet+ipsum+euismod+ullamcorper.+Phasellus+sit+amet+vestibulum+quam.+Morbi+?trim_user=t%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices&include_my_retweet=bi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20&include_entities=ces%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20orn 
```




#### post /statuses/destroy/{id}
Destroys the status specified by the required ID parameter
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| id | path | string | 
| trim_user | query | string | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/destroy/+eros.+Suspendisse+eget+nibh+pulvinar%2C+vestibulum+magna+ut%2C+suscipit+est.+Etiam+varius+lobortis+porttitor.+Mauris+vel+ult?trim_user=ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20di 
```




#### post /statuses/update
Updates the authenticating user's status
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| status | query | string | 
| in_reply_to_status_id | query | string | 
| lat | query | string | 
| long | query | string | 
| place_id | query | string | 
| display_coordinates | query | string | 
| trim_user | query | string | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/update?status=eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20q&in_reply_to_status_id=uismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20fel&lat=.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20eni&long=met%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20e&place_id=erisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20&display_coordinates=nia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20se&trim_user=%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et. 
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

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/oembed?id=um%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20ac%20quam%20gravida%20pellentesque.%20Nullam%20ultricies%20turpis%20nec%20digni&url=gestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20po&maxwidth=esque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20&hide_media=%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20tu&hide_thread=tur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibu&align=as%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultr&related=molestie%20preti&lang=ibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20eni 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/list?screen_name=a%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20&user_id=nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20s 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/statuses?list_id=rtor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20met&slug=ed%20efficitur%2C%20mi%20sit%20amet%20ferme&owner_screen_name=t%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20ame&owner_id=r%2C%20vestibulum%20ma&since_id=amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis&max_id=isse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20u&count=s%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20v&include_entities=s%20sapien%20finibus%20at.%20Nul&include_rts=%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20vari 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/members/destroy?list_id=ius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a&slug=.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamco&owner_screen_name=i%20odio%2C%20porta%20ut%20quam&user_id=es%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Pha&screen_name=s%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est&owner_id=%20malesuada%20facilisis%20sapien%20finibus%20a 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/memberships?user_id=Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit&screen_name=%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20&cursor=iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20&filter_to_owned_lists=ibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20au 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers?list_id=%20urna%20arcu%2C%20et%20dignissim%20aug&slug=get%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consect&owner_screen_name=%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20&owner_id=%20quam.%20Morbi%20tincidunt%20&cursor=s%20nec.%20Vestibulum%20e&include_entities=%20&skip_status=elerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20veli 
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
HTTP 1.1 post http://api.twitter.com/1.1/lists/subscribers/create?list_id=s%2C%20nec%20condi&slug=%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20sce&owner_screen_name=x%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20f&owner_id=isus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vest 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers/show?list_id=tor.%20Praesent%20i&slug=get%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium&owner_screen_name=uada%2C%20velit%20eu%20dapibus%20vehicula&user_id=lla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet&screen_name=x%20lorem%2C%20ut%20ornare%20purus%20ultric&owner_id=tum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehic&include_entities=corper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.&skip_status=eugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibu 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers/destroy?list_id=rices%20ne&slug=%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20&owner_screen_name=%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20&owner_id=isis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20e 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/members/create_all?list_id=it%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20m&slug=iet%20nunc%20maximus%2C%20finibus%20erat.%20Proin&owner_screen_name=%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fu&owner_id=im.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulv&user_id=%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.&screen_name=idunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20au 
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
HTTP 1.1 post http://api.twitter.com/1.1/lists/destroy?list_id=culis%20odio.%20Mauris%20v&slug=lit.%20Sed%20efficitur%2C&owner_screen_name=.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C&owner_id=us%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20 
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
HTTP 1.1 post http://api.twitter.com/1.1/lists/update?list_id=%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20ma&slug=is%20facilisis%20a&owner_screen_name=tincidunt%20elit.%20Etiam%20convallis%20e&owner_id=pat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20o&name=%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arc&mode=putate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magn&description=sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20v 
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
HTTP 1.1 post http://api.twitter.com/1.1/lists/create?name=in%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolo&mode=%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20&description=molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20l 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/show?list_id=orbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est&slug=disse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20&owner_screen_name=ttitor.%20Mauris%20vel%20ultrices%20erat%2C%20&owner_id=%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Ma 
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
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscriptions?screen_name=lisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu&user_id=molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scele&count=Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pr&cursor=pis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliqua 
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
HTTP 1.1 get http://api.twitter.com/1.1/list/members/show?list_id=scipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Ma&slug=disse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ip&user_id=are%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscin&screen_name=cilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auct&owner_screen_name=%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20qu&owner_id=%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tell&include_entities=n%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20tu&skip_status=ulis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20 
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
HTTP 1.1 get http://api.twitter.com/1.1/list/members?list_id=s%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvina&slug=ing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20&owner_screen_name=um%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20&owner_id=ursus%20nequ&include_entities=.%20Su&skip_status=t%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum&cursor=sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa 
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
HTTP 1.1 post http://api.twitter.com/1.1/list/members/create?list_id=tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pul&slug=%2C%20tempus%20ac%20ipsum&screen_name=rat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit&owner_screen_name=eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpi&owner_id=%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Don 
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
HTTP 1.1 get http://api.twitter.com/1.1/list/members/destroy_all?list_id=finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20ve&slug=%20ac%20dui&user_id=uam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculi&screen_name=%20consectetur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20&owner_screen_name=a%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20&owner_id=mcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel 
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
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages/sent?since_id=tortor.%20Praesent%20interdum%20fringilla%20orc&max_id=amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollici&count=risque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luct&page=it%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interd&include_entities=esque%20vulputate%20s 
```




#### get /direct_messages/show
returns a single direct message specified by an id
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| id | query | string | 

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages/show?id=scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C 
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
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages?since_id=ongue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20m&max_id=%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20vari&include_entities=llamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pre&skip_status=c%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turp 
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
HTTP 1.1 post http://api.twitter.com/1.1/direct_messages/destroy?id=in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tellus%20sagittis%20at.%20Nullam%20vel%20metus%20ac%20&include_entities=lisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam. 
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
HTTP 1.1 post http://api.twitter.com/1.1/direct_messages/new?user_id=%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20fe&screen_name=idunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neq&text=t%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20variu 
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
HTTP 1.1 get http://api.twitter.com/1.1/search/tweets?q=%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lo&geocode=nterdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C&lang=s.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20fac&locale=t%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proi&result_type=.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20ali&count=stie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20&until=se%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicul&since_id=sum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20ve&max_id=nteger%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt&include_entities=eet%20a%20&callback=bh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20ero 
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
HTTP 1.1 get http://api.twitter.com/1.1/saved_searches/show/ro%2C+fauc 
```




#### post /saved_searches/create
Create a new saved search for the authenticated user
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| query | query | string | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/saved_searches/create?query=apibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentes 
```




#### post /saved_searches/destroy/{id}
Destroy a saved search for the authenticating user
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| id | path | string | 

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/saved_searches/destroy/+Vivamus+id+vulputate+odio.+Donec+quis+facilisis+arcu%2C+vel+ultrices+augue.+Suspendisse+potenti.+Mauris+vehicula+ex+lorem%2C+ut+ornare+purus+ultrices+nec.+Vestibulum+ele 
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
HTTP 1.1 get http://api.twitter.com/1.1/friends/ids?user_id=felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20&screen_name=ci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia&cursor=Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Ma&stringify_ids=m%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20&count=tpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20l 
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
HTTP 1.1 get http://api.twitter.com/1.1/followers/ids?user_id=nc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20moll&screen_name=sum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magn&cursor=s%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nul&stringify_ids=est%2C%20posuere%20tincidunt%20elit.%20Et&count=iam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvina 
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
HTTP 1.1 get http://api.twitter.com/1.1/friendships/incoming?cursor=%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C&stringify_ids=t%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20n 
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
HTTP 1.1 get http://api.twitter.com/1.1/friendships/outgoing?cursor=tpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20ali&stringify_ids=it%2C%20posuere%20eu%20facil 
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
HTTP 1.1 post http://api.twitter.com/1.1/friendships/create?screen_name=l.%20Donec%20ultricies%20nibh%20eu%20leo%20consecte&user_id=terdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20ero&follow=dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dig 
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
HTTP 1.1 post http://api.twitter.com/1.1/friendships/destroy?screen_name=assa%2C%20vehicula%20q&user_id=ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20ur 
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
HTTP 1.1 post http://api.twitter.com/1.1/friendships/update?screen_name=%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20u&user_id=%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.&device=ellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobo&retweets=velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris 
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
HTTP 1.1 get http://api.twitter.com/1.1/friendships/show?source_id=m.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20r&source_screen_name=%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20fau&target_id=isis%20arcu%2C%20vel%20ultrices%20augue.%20S&target_screen_name=%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentu 
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
HTTP 1.1 post http://api.twitter.com/1.1/account/settings?trend_location_woeid=endisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehic&sleep_time_enabled=Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20ef&start_sleep_time=s%2C&end_sleep_time=olestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20met&time_zone=quet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tri&lang=esent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20 
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
HTTP 1.1 post http://api.twitter.com/1.1/account/update_delivery_device?device=t%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula&include_entities=ibus%20at.%20Nullam%20fini 
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
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile?name=vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condime&url=e%20aliquet%20est%2C%20po&location=nec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ip&description=ctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendi&include_entities=et%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20ero&skip_status=arius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20mal 
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
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_background_image?tile=te%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20l&use=%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20molli&include_entities=Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20&skip_status=t%20molestie.%20Aenean%20qu 
Content-Type: multipart/form-data, boundary=57cafa152ddb2
Content-Length: 761
--57cafa152ddb2
content-disposition: form-data; name="file"

--data-binary 
ZDEyYWFhYjIzNWNmMmFiZWQ3OTU5MWRlZjkxNDRhZDllNjE1OWNkYjhkOTdmZGEyN2UwYmMwZjRlMGNjN2IyNGE1Mjk0MmYyY2Y2OWIwNzc2Y2NkMjlmNzM2NjUyNDM4MmNjMDQxNzI5MjA3ZDA2YTUyNDE4ZTJkMThkZGE1M2E5NmNmMWQ1OWI3OTU4NmQxYzU3NjMyYjBiNDMwYzMyMWQ3MzIzMjgwNTgxYzg5OTE2YjUzOGQ4Njk1ZGY1NDM1ZTc4NTc5N2Y1MTQzNmI1MGYxYTczY2VjZjdkYzcyOGNiODAwYmZiNzk0MWM0ZjMzZWRlMDhjOTY0OGVhMDUwMDJhY2MxYjM2ZjNkODg2Njc5MTdiOWJlMDk0ZWVjMTQyZWMzNzI3NjQyYzQwZjU3ZTNhNWYzZTM0MTRlZWU2MDkxYzNjY2YxMDZmZTZhZWFkOGJiMWMyOWI3ODUyOWVjZjRiZDJmZDVjYmFhYzJkNGY5MWYxYTE5ZjZhMDdkYzgwMjA0ODFmYTI0M2NiZjI0NTg4NTI0ZWY2YjcwN2ExN2UyMjliZWExODliZTkzNjA2ZDJiNmJjNzZhNTdmZmFiOTMxZWJmMDdmOGFkOTMxNDQ4M2M3NDNhMWFkYTgyMDZlYWQ4Nzk0ZDNhMDU5NzBlZTYwMTc1MTQ2OWY0MzlhMmY=
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
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_colors?profile_background_color=n%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20ve&profile_link_color=is%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultr&profile_sidebar_border_color=lutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20eges&profile_sidebar_fill_color=%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20fini&profile_text_color=ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempu&include_entities=apien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20p&skip_status=Suspe 
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
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_image?skip_status=%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspend 
Content-Type: multipart/form-data, boundary=57cafa152f459
Content-Length: 762
--57cafa152f459
content-disposition: form-data; name="image"

--data-binary 
YzAwYjcyYWNmNTRhZWMwY2M3YmQ2ZTg1OTUwNjk3Njg4NTJhMDA1ODA0ZWI1YjBjMDdkNTZjY2YxOGFlMDhjNzQ4OGRmOGU1NWU3MmVlMmFhMWI5Yzg0MDU5NDIyYmYwNmYxZTk0NTljMjYxMTFlOGYyMzE5MjQ3MzA5YzAzN2JkMGU1MDkyNTJkODg0YTE5MGUxMDY5NWRhNWNlOGI5YjcyNDk3ZmI5ZjU5MmFjYjk2MmVhNTcxZjUyMjY4YmRhYjc0Njk0Nzc3ZDY1NjRhZjIzOGRhYTdiZGMwYzM3N2JkNDYxMDc3OGEzMjM3NWViYzQxYjIzY2MwMTY2Y2I5ZWRiNjBkYjI4ZjU2YTYyYmQzNTgzOWNlMjVmZTQ1YjIyYmFmNWMyMTUxYjgxOGQ4ZjQ5MzhhNGFiNDYzZmQ5ZjdhMjcxNmM4ZTJiZDc5OTkxYWZhNmZmYmZjNWM5ODI3NzVmYmQ3N2Y0OTBkNTViZDhiMTU5YzcwNTljYzdiZjcyNWVhZGIwZWI4ZjczMDlhZDA4MTU1N2I4NGNiYmQ4YzViOWQ1YzRjMWUyM2U5MzViMGYwNzQ5OWU2YmMwMjA1YjcwYzA2NzNkZGRiNTk3ZGU0ZTU0NGJmNTZjYTJhNWQ5MTA2NzQ1MjQwZmJlMGFjYmQ5YmQ1NGMwNmJlNTU5M2E=
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
HTTP 1.1 get http://api.twitter.com/1.1/blocks/list?include_entities=o.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tinci&skip_status=esuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20M&cursor=%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehi 
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
HTTP 1.1 get http://api.twitter.com/1.1/blocks/ids?stringify_ids=%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20&cursor=lor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20D 
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
HTTP 1.1 post http://api.twitter.com/1.1/blocks/create?screen_name=%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultrici&user_id=e%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20e&include_entities=inar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursu&skip_status=t.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20 
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
HTTP 1.1 post http://api.twitter.com/1.1/blocks/destroy?screen_name=lis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20i&user_id=gue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20m&include_entities=.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagitt&skip_status=dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20con 
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
HTTP 1.1 get http://api.twitter.com/1.1/users/lookup?screen_name=uam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consecte&user_id=%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20so&include_entities=onsectetur%20sed%20ante%20sit%20amet%20sagittis 
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
HTTP 1.1 get http://api.twitter.com/1.1/users/show?screen_name=%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Sus&user_id=%20leo%20ex%2C%20pulvinar%20vel%20m&include_entities=quis%2C%20iacul 
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
HTTP 1.1 get http://api.twitter.com/1.1/users/search?q=nim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollici&page=to%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20o&count=ur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C&include_entities=%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibend 
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
HTTP 1.1 get http://api.twitter.com/1.1/users/contributees?screen_name=unc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisq&user_id=ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20&include_entities=roin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisi&skip_status=d%20s 
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
HTTP 1.1 get http://api.twitter.com/1.1/users/contributors?screen_name=ntum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20or&user_id=tudin%20varius%20purus%2C%20nec%20condimentu&include_entities=lamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20&skip_status=n%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nu 
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
HTTP 1.1 post http://api.twitter.com/1.1/users/report_spam?screen_name=iquam.%20Nunc%20sed%20enim%20nec%20tellus%20accumsan%20tincidunt.%20Aliquam%20eni&user_id=vel%20ultrices%20augue.%20Suspendisse 
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
HTTP 1.1 get http://api.twitter.com/1.1/geo/id/tpat+dictum+neque.+Donec+molestie%2C+eros+in+pretium+pulvin 
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
HTTP 1.1 get http://api.twitter.com/1.1/geo/reverse_geoncode?lat=sis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibu&long=tium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor&accuracy=e.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20p&granularity=ue%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Viv&max_results=Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagitt&callback=t.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20s 
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
HTTP 1.1 get http://api.twitter.com/1.1/geo/search?lat=la%20&long=m%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20metus%20in%20eros.%20Mauris%20so&query=.%20Pha&ip=rat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20a&accuracy=ntum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh&granularity=%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20a&contained_within=m.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non&attribute%3Astreet_address=x%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nib&callback=onec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20tu 
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
HTTP 1.1 get http://api.twitter.com/1.1/geo/similar_places?lat=%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tr&long=orper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrer&name=%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20i&contained_within=os.%20Lore&attribute%3Astreet_address=rci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet&callback=in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20po 
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
HTTP 1.1 get http://api.twitter.com/1.1/geo/places?lat=%2C%20consectetur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum&long=cilisis%20sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C&name=oreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate&token=ictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvin&contained_within=es%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20&attribute%3Astreet_address=sim%2C%20imperdiet%20nun&callback=agna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim%20me 
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
HTTP 1.1 get http://api.twitter.com/1.1/trends/place?id=sapien%20finibus%20at.%20Nullam%20finibus%20urna%20vel%20auctor%20fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Su&exclude=stibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20sceleri 
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
HTTP 1.1 get http://api.twitter.com/1.1/trends/closest?lat=Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20e&long=iam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20cond 
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

