# Instagram API
* Version : v1
: The first version of the Instagram API is an exciting step forward towards
making it easier for users to have open access to their data. We created it
so that you can surface the amazing content Instagram users share every
second, in fun and innovative ways.

Build something great!

Once you've
[registered your client](http://instagram.com/developer/register/) it's easy
to start requesting data from Instagram.

All endpoints are only accessible via https and are located at
`api.instagram.com`. For instance: you can grab the most popular photos at
the moment by accessing the following URL with your client ID
(replace CLIENT-ID with your own):
```
  https://api.instagram.com/v1/media/popular?client_id=CLIENT-ID
```
You're best off using an access_token for the authenticated user for each
endpoint, though many endpoints don't require it.
In some cases an access_token will give you more access to information, and
in all cases, it means that you are operating under a per-access_token limit
vs. the same limit for your single client_id.


## Limits
Be nice. If you're sending too many requests too quickly, we'll send back a
`503` error code (server unavailable).
You are limited to 5000 requests per hour per `access_token` or `client_id`
overall. Practically, this means you should (when possible) authenticate
users so that limits are well outside the reach of a given user.

## Deleting Objects
We do our best to have all our URLs be
[RESTful](http://en.wikipedia.org/wiki/Representational_state_transfer).
Every endpoint (URL) may support one of four different http verbs. GET
requests fetch information about an object, POST requests create objects,
PUT requests update objects, and finally DELETE requests will delete
objects.

Since many old browsers don't support PUT or DELETE, we've made it easy to
fake PUTs and DELETEs. All you have to do is do a POST with _method=PUT or
_method=DELETE as a parameter and we will treat it as if you used PUT or
DELETE respectively.

## Structure

### The Envelope
Every response is contained by an envelope. That is, each response has a
predictable set of keys with which you can expect to interact:
```json
{
    "meta": {
        "code": 200
    },
    "data": {
        ...
    },
    "pagination": {
        "next_url": "...",
        "next_max_id": "13872296"
    }
}
```

#### META
The meta key is used to communicate extra information about the response to
the developer. If all goes well, you'll only ever see a code key with value
200. However, sometimes things go wrong, and in that case you might see a
response like:
```json
{
    "meta": {
        "error_type": "OAuthException",
        "code": 400,
        "error_message": "..."
    }
}
```

#### DATA
The data key is the meat of the response. It may be a list or dictionary,
but either way this is where you'll find the data you requested.
#### PAGINATION
Sometimes you just can't get enough. For this reason, we've provided a
convenient way to access more data in any request for sequential data.
Simply call the url in the next_url parameter and we'll respond with the
next set of data.
```json
{
    ...
    "pagination": {
        "next_url": "https://api.instagram.com/v1/tags/puppy/media/recent?access_token=fb2e77d.47a0479900504cb3ab4a1f626d174d2d&max_id=13872296",
        "next_max_id": "13872296"
    }
}
```
On views where pagination is present, we also support the "count" parameter.
Simply set this to the number of items you'd like to receive. Note that the
default values should be fine for most applications - but if you decide to
increase this number there is a maximum value defined on each endpoint.

### JSONP
If you're writing an AJAX application, and you'd like to wrap our response
with a callback, all you have to do is specify a callback parameter with
any API call:
```
https://api.instagram.com/v1/tags/coffee/media/recent?access_token=fb2e77d.47a0479900504cb3ab4a1f626d174d2d&callback=callbackFunction
```
Would respond with:
```js
callbackFunction({
    ...
});
```

* Terms of service : http://instagram.com/about/legal/terms/api


---

### Global Definition
| Attribute | Value |
| :-------: | :---: |
| Schemes | https |
| Hostname | api.instagram.com |
| Root Path | /v1 |
| API Base Url | https://api.instagram.com/v1 |
| Content-Type Accepted | application/json |
| Content-Type Return | application/json |

---

## Summary 
* [Summary](#summary)
* [Resources](#resources)
  * [Resource : Resource : users](#resourceusers)
    * [Operation : get /users/{user-id}](#getusersuserid)
    * [Operation : get /users/self/feed](#getusersselffeed)
    * [Operation : get /users/{user-id}/media/recent](#getusersuseridmediarecent)
    * [Operation : get /users/self/media/liked](#getusersselfmedialiked)
    * [Operation : get /users/search](#getuserssearch)
    * [Operation : get /users/{user-id}/follows](#getusersuseridfollows)
    * [Operation : get /users/{user-id}/followed-by](#getusersuseridfollowedby)
    * [Operation : get /users/self/requested-by](#getusersselfrequestedby)
    * [Operation : post /users/{user-id}/relationship](#postusersuseridrelationship)
  * [Resource : Resource : media](#resourcemedia)
    * [Operation : get /media/{media-id}](#getmediamediaid)
    * [Operation : get /media/search](#getmediasearch)
    * [Operation : get /media/popular](#getmediapopular)
    * [Operation : get /media/{media-id}/comments](#getmediamediaidcomments)
    * [Operation : post /media/{media-id}/comments](#postmediamediaidcomments)
    * [Operation : delete /media/{media-id}/comments](#deletemediamediaidcomments)
    * [Operation : get /media/{media-id}/likes](#getmediamediaidlikes)
    * [Operation : post /media/{media-id}/likes](#postmediamediaidlikes)
    * [Operation : delete /media/{media-id}/likes](#deletemediamediaidlikes)
  * [Resource : Resource : media1](#resourcemedia1)
    * [Operation : get /media1/{shortcode}](#getmedia1shortcode)
  * [Resource : Resource : tags](#resourcetags)
    * [Operation : get /tags/{tag-name}](#gettagstagname)
    * [Operation : get /tags/{tag-name}/media/recent](#gettagstagnamemediarecent)
    * [Operation : get /tags/search](#gettagssearch)
  * [Resource : Resource : locations](#resourcelocations)
    * [Operation : get /locations/{location-id}](#getlocationslocationid)
    * [Operation : get /locations/{location-id}/media/recent](#getlocationslocationidmediarecent)
    * [Operation : get /locations/search](#getlocationssearch)
  * [Resource : Resource : geographies](#resourcegeographies)
    * [Operation : get /geographies/{geo-id}/media/recent](#getgeographiesgeoidmediarecent)
* [Table of contents](#table-of-contents)


---

## Resources 
### Resource : users
#### get /users/{user-id}
Get basic information about a user.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 3.858193E-97 | 
| tag-name | path | string | yes | Tag name | d neque dignissim, imperdiet nunc maximus, finibus erat. Proin  | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/3.858193E-97 
```





#### get /users/self/feed
See the authenticated user's feed.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -1.687133E-113 | 
| tag-name | path | string | yes | Tag name | d neque dignissim, imperdiet nunc maximus, finibus erat. Proin  | 
| count | query | integer |  | Count of media to return. | -614019017 | 
| max_id | query | integer |  | Return media earlier than this max_id.s | 849215496 | 
| min_id | query | integer |  | Return media later than this min_id. | -794297468 | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/self/feed?count=-614019017&max_id=849215496&min_id=-794297468 
```





#### get /users/{user-id}/media/recent

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -4.11087E-222 | 
| tag-name | path | string | yes | Tag name | d neque dignissim, imperdiet nunc maximus, finibus erat. Proin  | 
| count | query | integer |  | Count of media to return. | 1408890736 | 
| max_timestamp | query | integer |  | Return media before this UNIX timestamp. | 1515623731 | 
| min_timestamp | query | integer |  | Return media after this UNIX timestamp. | -1586229009 | 
| min_id | query | string |  | Return media later than this min_id. | am nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euism | 
| max_id | query | string |  | Return media earlier than this max_id. | justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/-4.11087E-222/media/recent?count=1408890736&max_timestamp=1515623731&min_timestamp=-1586229009&min_id=am%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euism&max_id=justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20nibh%2C%20sed%20pellentesque%20enim 
```





#### get /users/self/media/liked
See the list of media liked by the authenticated user.
Private media is returned as long as the authenticated user
has permissionto view that media. Liked media lists are only
available for the currently authenticated user.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -1.687133E-113 | 
| tag-name | path | string | yes | Tag name | d neque dignissim, imperdiet nunc maximus, finibus erat. Proin  | 
| count | query | integer |  | Count of media to return. | 885410323 | 
| max_like_id | query | integer |  | Return media liked before this id. | -1683758750 | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/self/media/liked?count=885410323&max_like_id=-1683758750 
```





#### get /users/search
Search for a user by name.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -1.687133E-113 | 
| tag-name | path | string | yes | Tag name | d neque dignissim, imperdiet nunc maximus, finibus erat. Proin  | 
| q | query | string | yes | A query string | s massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius | 
| count | query | string |  | Number of users to return. | eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh so | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/search?q=s%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius&count=eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20so 
```





#### get /users/{user-id}/follows
Get the list of users this user follows.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 1.174903E-52 | 
| tag-name | path | string | yes | Tag name | d neque dignissim, imperdiet nunc maximus, finibus erat. Proin  | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/1.174903E-52/follows 
```





#### get /users/{user-id}/followed-by
Get the list of users this user is followed by.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 4.9994E+251 | 
| tag-name | path | string | yes | Tag name | d neque dignissim, imperdiet nunc maximus, finibus erat. Proin  | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/4.9994E%2B251/followed-by 
```





#### get /users/self/requested-by
List the users who have requested this user's permission to follow.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -1.687133E-113 | 
| tag-name | path | string | yes | Tag name | d neque dignissim, imperdiet nunc maximus, finibus erat. Proin  | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/self/requested-by 
```





#### post /users/{user-id}/relationship
Modify the relationship between the current user and thetarget user.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -4.020447E-176 | 
| tag-name | path | string | yes | Tag name | d neque dignissim, imperdiet nunc maximus, finibus erat. Proin  | 
| action | body | string |  | One of follow/unfollow/block/unblock/approve/ignore. | follow | 

* Example of request :
```json
HTTP 1.1 post https://api.instagram.com/v1/users/-4.020447E-176/relationship 
Content-Type: application/json
Content-Length: 8
"follow"
```





### Resource : media
#### get /media/{media-id}
Get information about a media object.
The returned type key will allow you to differentiate between `image`
and `video` media.

Note: if you authenticate with an OAuth Token, you will receive the
`user_has_liked` key which quickly tells you whether the current user
has liked this media item.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -1.687133E-113 | 
| tag-name | path | string | yes | Tag name | d neque dignissim, imperdiet nunc maximus, finibus erat. Proin  | 
| media-id | path | integer | yes | The media ID | 960032647 | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/960032647 
```





#### get /media/search
Search for media in a given area. The default time span is set to 5
days. The time span must not exceed 7 days. Defaults time stamps cover
the last 5 days. Can return mix of image and video types.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Validation | Default | Description | Example |  
| :---: | :---: | :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes |  |  | The user identifier number | -1.687133E-113 | 
| tag-name | path | string | yes |  |  | Tag name | d neque dignissim, imperdiet nunc maximus, finibus erat. Proin  | 
| LAT | query | number |  |  |  | Latitude of the center search coordinate. If used, lng is required. | -1.613547E+34 | 
| MIN_TIMESTAMP | query | integer |  |  |  | A unix timestamp. All media returned will be taken later thanthis timestamp. | 372716624 | 
| LNG | query | number |  |  |  | Longitude of the center search coordinate. If used, lat is required. | -4.914558E-92 | 
| MAX_TIMESTAMP | query | integer |  |  |  | A unix timestamp. All media returned will be taken earlier than thistimestamp. | -937776046 | 
| DISTANCE | query | integer |  | Value <= 5000 | 1000 | Default is 1km (distance=1000), max distance is 5km. | 1000 | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/search?LAT=-1.613547E+34&MIN_TIMESTAMP=372716624&LNG=-4.914558E-92&MAX_TIMESTAMP=-937776046&DISTANCE=1000 
```





#### get /media/popular
Get a list of what media is most popular at the moment.
Can return mix of image and video types.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -1.687133E-113 | 
| tag-name | path | string | yes | Tag name | d neque dignissim, imperdiet nunc maximus, finibus erat. Proin  | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/popular 
```





#### get /media/{media-id}/comments
Get a list of recent comments on a media object.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -1.687133E-113 | 
| tag-name | path | string | yes | Tag name | d neque dignissim, imperdiet nunc maximus, finibus erat. Proin  | 
| media-id | path | integer | yes | Media ID | 510506142 | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/510506142/comments 
```




#### post /media/{media-id}/comments
Create a comment on a media object with the following rules:

* The total length of the comment cannot exceed 300 characters.
* The comment cannot contain more than 4 hashtags.
* The comment cannot contain more than 1 URL.
* The comment cannot consist of all capital letters.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -1.687133E-113 | 
| tag-name | path | string | yes | Tag name | d neque dignissim, imperdiet nunc maximus, finibus erat. Proin  | 
| media-id | path | integer | yes | Media ID | 510506142 | 
| TEXT | body | number |  | Text to post as a comment on the media object as specified inmedia-id. | -5.632073E+86 | 

* Example of request :
```json
HTTP 1.1 post https://api.instagram.com/v1/media/510506142/comments 
Content-Type: application/json
Content-Length: 13
-5.632073e+86
```




#### delete /media/{media-id}/comments
Remove a comment either on the authenticated user's media object or
authored by the authenticated user.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -1.687133E-113 | 
| tag-name | path | string | yes | Tag name | d neque dignissim, imperdiet nunc maximus, finibus erat. Proin  | 
| media-id | path | integer | yes | Media ID | 510506142 | 

* Example of request :
```json
HTTP 1.1 delete https://api.instagram.com/v1/media/510506142/comments 
```





#### get /media/{media-id}/likes
Get a list of users who have liked this media.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -1.687133E-113 | 
| tag-name | path | string | yes | Tag name | d neque dignissim, imperdiet nunc maximus, finibus erat. Proin  | 
| media-id | path | integer | yes | Media ID | 839650288 | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/839650288/likes 
```




#### post /media/{media-id}/likes
Set a like on this media by the currently authenticated user.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -1.687133E-113 | 
| tag-name | path | string | yes | Tag name | d neque dignissim, imperdiet nunc maximus, finibus erat. Proin  | 
| media-id | path | integer | yes | Media ID | 839650288 | 

* Example of request :
```json
HTTP 1.1 post https://api.instagram.com/v1/media/839650288/likes 
```




#### delete /media/{media-id}/likes
Remove a like on this media by the currently authenticated user.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -1.687133E-113 | 
| tag-name | path | string | yes | Tag name | d neque dignissim, imperdiet nunc maximus, finibus erat. Proin  | 
| media-id | path | integer | yes | Media ID | 839650288 | 

* Example of request :
```json
HTTP 1.1 delete https://api.instagram.com/v1/media/839650288/likes 
```





### Resource : media1
#### get /media1/{shortcode}
This endpoint returns the same response as **GET** `/media/media-id`.

A media object's shortcode can be found in its shortlink URL.
An example shortlink is `http://instagram.com/p/D/`
Its corresponding shortcode is D.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -1.687133E-113 | 
| tag-name | path | string | yes | Tag name | d neque dignissim, imperdiet nunc maximus, finibus erat. Proin  | 
| shortcode | path | string | yes | The media shortcode | m eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis  | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media1/m+eget%2C+tristique+ut+quam.+Maecenas+et+velit+dignissim%2C+tincidunt+justo+quis%2C+iaculis+ 
```





### Resource : tags
#### get /tags/{tag-name}
Get information about a tag object.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -1.687133E-113 | 
| tag-name | path | string | yes | Tag name | h eu leo consectetur congue quis nec tell | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/tags/h+eu+leo+consectetur+congue+quis+nec+tell 
```





#### get /tags/{tag-name}/media/recent
Get a list of recently tagged media. Use the `max_tag_id` and
`min_tag_id` parameters in the pagination response to paginate through
these objects.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -1.687133E-113 | 
| tag-name | path | string | yes | Tag name | us sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis s | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/tags/us+sit+amet+vestibulum+quam.+Morbi+tincidunt+pretium+sodales.+Etiam+dignissim+risus+non+felis+s/media/recent 
```





#### get /tags/search

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -1.687133E-113 | 
| tag-name | path | string | yes | Tag name | d neque dignissim, imperdiet nunc maximus, finibus erat. Proin  | 
| q | query | string |  | A valid tag name without a leading #. (eg. snowy, nofilter) | fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia  | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/tags/search?q=fringilla.%20Mauris%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20 
```





### Resource : locations
#### get /locations/{location-id}
Get information about a location.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -1.687133E-113 | 
| tag-name | path | string | yes | Tag name | d neque dignissim, imperdiet nunc maximus, finibus erat. Proin  | 
| location-id | path | integer | yes | Location ID | -1172815758 | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/locations/-1172815758 
```





#### get /locations/{location-id}/media/recent
Get a list of recent media objects from a given location.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -1.687133E-113 | 
| tag-name | path | string | yes | Tag name | d neque dignissim, imperdiet nunc maximus, finibus erat. Proin  | 
| location-id | path | integer | yes | Location ID | -816718504 | 
| max_timestamp | query | integer |  | Return media before this UNIX timestamp. | 975134384 | 
| min_timestamp | query | integer |  | Return media after this UNIX timestamp. | 412723129 | 
| min_id | query | string |  | Return media later than this min_id. | nsectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis fel | 
| max_id | query | string |  | Return media earlier than this max_id. | uris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretiu | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/locations/-816718504/media/recent?max_timestamp=975134384&min_timestamp=412723129&min_id=nsectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20fel&max_id=uris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretiu 
```





#### get /locations/search
Search for a location by geographic coordinate.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -1.687133E-113 | 
| tag-name | path | string | yes | Tag name | d neque dignissim, imperdiet nunc maximus, finibus erat. Proin  | 
| distance | query | integer |  | Default is 1000m (distance=1000), max distance is 5000. | -2043566700 | 
| facebook_places_id | query | integer |  | Returns a location mapped off of a Facebook places id. If used, aFoursquare id and lat, lng are not required. | -1353947617 | 
| foursquare_id | query | integer |  | returns a location mapped off of a foursquare v1 api location id.If used, you are not required to use lat and lng. Note that thismethod is deprecated; you should use the new foursquare IDs with V2of their API. | -1948390626 | 
| lat | query | number |  | atitude of the center search coordinate. If used, lng is required. | 5.760498E+137 | 
| lng | query | number |  | ongitude of the center search coordinate. If used, lat is required. | 7.806371E+22 | 
| foursquare_v2_id | query | integer |  | Returns a location mapped off of a foursquare v2 api location id. Ifused, you are not required to use lat and lng. | -656125627 | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/locations/search?distance=-2043566700&facebook_places_id=-1353947617&foursquare_id=-1948390626&lat=5.760498E+137&lng=7.806371E+22&foursquare_v2_id=-656125627 
```





### Resource : geographies
#### get /geographies/{geo-id}/media/recent
Get recent media from a geography subscription that you created.
**Note**: You can only access Geographies that were explicitly created
by your OAuth client. Check the Geography Subscriptions section of the
[real-time updates page](https://instagram.com/developer/realtime/).
When you create a subscription to some geography
that you define, you will be returned a unique geo-id that can be used
in this query. To backfill photos from the location covered by this
geography, use the [media search endpoint
](https://instagram.com/developer/endpoints/media/).

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -1.687133E-113 | 
| tag-name | path | string | yes | Tag name | d neque dignissim, imperdiet nunc maximus, finibus erat. Proin  | 
| geo-id | path | integer | yes | Geolocation ID | -1875840281 | 
| count | query | integer |  | Max number of media to return. | -1049127851 | 
| min_id | query | integer |  | Return media before this `min_id`. | -990016288 | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/geographies/-1875840281/media/recent?count=-1049127851&min_id=-990016288 
```







---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

