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
  * [Resource : Resource : users](#resource--users)
    * [Operation : get /users/{user-id}](#get-usersuser-id)
    * [Operation : get /users/self/feed](#get-usersselffeed)
    * [Operation : get /users/{user-id}/media/recent](#get-usersuser-idmediarecent)
    * [Operation : get /users/self/media/liked](#get-usersselfmedialiked)
    * [Operation : get /users/search](#get-userssearch)
    * [Operation : get /users/{user-id}/follows](#get-usersuser-idfollows)
    * [Operation : get /users/{user-id}/followed-by](#get-usersuser-idfollowed-by)
    * [Operation : get /users/self/requested-by](#get-usersselfrequested-by)
    * [Operation : post /users/{user-id}/relationship](#post-usersuser-idrelationship)
  * [Resource : Resource : media](#resource--media)
    * [Operation : get /media/{media-id}](#get-mediamedia-id)
    * [Operation : get /media/search](#get-mediasearch)
    * [Operation : get /media/popular](#get-mediapopular)
    * [Operation : get /media/{media-id}/comments](#get-mediamedia-idcomments)
    * [Operation : post /media/{media-id}/comments](#post-mediamedia-idcomments)
    * [Operation : delete /media/{media-id}/comments](#delete-mediamedia-idcomments)
    * [Operation : get /media/{media-id}/likes](#get-mediamedia-idlikes)
    * [Operation : post /media/{media-id}/likes](#post-mediamedia-idlikes)
    * [Operation : delete /media/{media-id}/likes](#delete-mediamedia-idlikes)
  * [Resource : Resource : media1](#resource--media1)
    * [Operation : get /media1/{shortcode}](#get-media1shortcode)
  * [Resource : Resource : tags](#resource--tags)
    * [Operation : get /tags/{tag-name}](#get-tagstag-name)
    * [Operation : get /tags/{tag-name}/media/recent](#get-tagstag-namemediarecent)
    * [Operation : get /tags/search](#get-tagssearch)
  * [Resource : Resource : locations](#resource--locations)
    * [Operation : get /locations/{location-id}](#get-locationslocation-id)
    * [Operation : get /locations/{location-id}/media/recent](#get-locationslocation-idmediarecent)
    * [Operation : get /locations/search](#get-locationssearch)
  * [Resource : Resource : geographies](#resource--geographies)
    * [Operation : get /geographies/{geo-id}/media/recent](#get-geographiesgeo-idmediarecent)
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
| user-id | path | number | yes | The user identifier number | -6.293928E+63 | 
| tag-name | path | string | yes | Tag name | t sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libe | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/-6.293928E%2B63 
```





#### get /users/self/feed
See the authenticated user's feed.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 3.78688E+210 | 
| tag-name | path | string | yes | Tag name | t sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libe | 
| count | query | integer |  | Count of media to return. | -1882771214 | 
| max_id | query | integer |  | Return media earlier than this max_id.s | 322783352 | 
| min_id | query | integer |  | Return media later than this min_id. | -2052659341 | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/self/feed?count=-1882771214&max_id=322783352&min_id=-2052659341 
```





#### get /users/{user-id}/media/recent

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -4575.906 | 
| tag-name | path | string | yes | Tag name | t sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libe | 
| count | query | integer |  | Count of media to return. | 1865799144 | 
| max_timestamp | query | integer |  | Return media before this UNIX timestamp. | 623824587 | 
| min_timestamp | query | integer |  | Return media after this UNIX timestamp. | -1708280369 | 
| min_id | query | string |  | Return media later than this min_id. | ltrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit  | 
| max_id | query | string |  | Return media earlier than this max_id. | it amet, consectetur adipiscing elit. Integer ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac  | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/-4575.906/media/recent?count=1865799144&max_timestamp=623824587&min_timestamp=-1708280369&min_id=ltrices%20nec.%20Vestibulum%20elementum%20felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20&max_id=it%20amet%2C%20consectetur%20adipiscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20 
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
| user-id | path | number | yes | The user identifier number | 3.78688E+210 | 
| tag-name | path | string | yes | Tag name | t sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libe | 
| count | query | integer |  | Count of media to return. | -1156117251 | 
| max_like_id | query | integer |  | Return media liked before this id. | 581547648 | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/self/media/liked?count=-1156117251&max_like_id=581547648 
```





#### get /users/search
Search for a user by name.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 3.78688E+210 | 
| tag-name | path | string | yes | Tag name | t sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libe | 
| q | query | string | yes | A query string | utpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Don | 
| count | query | string |  | Number of users to return. | terdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar met | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/search?q=utpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Don&count=terdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20met 
```





#### get /users/{user-id}/follows
Get the list of users this user follows.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -8.335974E-21 | 
| tag-name | path | string | yes | Tag name | t sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libe | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/-8.335974E-21/follows 
```





#### get /users/{user-id}/followed-by
Get the list of users this user is followed by.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 1.930475E+17 | 
| tag-name | path | string | yes | Tag name | t sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libe | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/1.930475E%2B17/followed-by 
```





#### get /users/self/requested-by
List the users who have requested this user's permission to follow.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 3.78688E+210 | 
| tag-name | path | string | yes | Tag name | t sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libe | 

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
| user-id | path | number | yes | The user identifier number | 4.99607E-96 | 
| tag-name | path | string | yes | Tag name | t sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libe | 
| action | body | string |  | One of follow/unfollow/block/unblock/approve/ignore. | follow | 

* Example of request :
```json
HTTP 1.1 post https://api.instagram.com/v1/users/4.99607E-96/relationship 
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
| user-id | path | number | yes | The user identifier number | 3.78688E+210 | 
| tag-name | path | string | yes | Tag name | t sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libe | 
| media-id | path | integer | yes | The media ID | -454584221 | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/-454584221 
```





#### get /media/search
Search for media in a given area. The default time span is set to 5
days. The time span must not exceed 7 days. Defaults time stamps cover
the last 5 days. Can return mix of image and video types.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Validation | Default | Description | Example |  
| :---: | :---: | :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes |  |  | The user identifier number | 3.78688E+210 | 
| tag-name | path | string | yes |  |  | Tag name | t sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libe | 
| LAT | query | number |  |  |  | Latitude of the center search coordinate. If used, lng is required. | 9.7239E-220 | 
| MIN_TIMESTAMP | query | integer |  |  |  | A unix timestamp. All media returned will be taken later thanthis timestamp. | 2116303825 | 
| LNG | query | number |  |  |  | Longitude of the center search coordinate. If used, lat is required. | 4.394287E+103 | 
| MAX_TIMESTAMP | query | integer |  |  |  | A unix timestamp. All media returned will be taken earlier than thistimestamp. | -1899535379 | 
| DISTANCE | query | integer |  | Value <= 5000 | 1000 | Default is 1km (distance=1000), max distance is 5km. | 1000 | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/search?LAT=9.7239E-220&MIN_TIMESTAMP=2116303825&LNG=4.394287E+103&MAX_TIMESTAMP=-1899535379&DISTANCE=1000 
```





#### get /media/popular
Get a list of what media is most popular at the moment.
Can return mix of image and video types.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 3.78688E+210 | 
| tag-name | path | string | yes | Tag name | t sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libe | 

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
| user-id | path | number | yes | The user identifier number | 3.78688E+210 | 
| tag-name | path | string | yes | Tag name | t sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libe | 
| media-id | path | integer | yes | Media ID | 841862926 | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/841862926/comments 
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
| user-id | path | number | yes | The user identifier number | 3.78688E+210 | 
| tag-name | path | string | yes | Tag name | t sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libe | 
| media-id | path | integer | yes | Media ID | 841862926 | 
| TEXT | body | number |  | Text to post as a comment on the media object as specified inmedia-id. | 3.882793E+158 | 

* Example of request :
```json
HTTP 1.1 post https://api.instagram.com/v1/media/841862926/comments 
Content-Type: application/json
Content-Length: 13
3.882793e+158
```




#### delete /media/{media-id}/comments
Remove a comment either on the authenticated user's media object or
authored by the authenticated user.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 3.78688E+210 | 
| tag-name | path | string | yes | Tag name | t sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libe | 
| media-id | path | integer | yes | Media ID | 841862926 | 

* Example of request :
```json
HTTP 1.1 delete https://api.instagram.com/v1/media/841862926/comments 
```





#### get /media/{media-id}/likes
Get a list of users who have liked this media.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 3.78688E+210 | 
| tag-name | path | string | yes | Tag name | t sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libe | 
| media-id | path | integer | yes | Media ID | -881414723 | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/-881414723/likes 
```




#### post /media/{media-id}/likes
Set a like on this media by the currently authenticated user.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 3.78688E+210 | 
| tag-name | path | string | yes | Tag name | t sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libe | 
| media-id | path | integer | yes | Media ID | -881414723 | 

* Example of request :
```json
HTTP 1.1 post https://api.instagram.com/v1/media/-881414723/likes 
```




#### delete /media/{media-id}/likes
Remove a like on this media by the currently authenticated user.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 3.78688E+210 | 
| tag-name | path | string | yes | Tag name | t sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libe | 
| media-id | path | integer | yes | Media ID | -881414723 | 

* Example of request :
```json
HTTP 1.1 delete https://api.instagram.com/v1/media/-881414723/likes 
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
| user-id | path | number | yes | The user identifier number | 3.78688E+210 | 
| tag-name | path | string | yes | Tag name | t sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libe | 
| shortcode | path | string | yes | The media shortcode |  nec. Vestibulum elementum felis sit amet ipsum euismod ullam | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media1/+nec.+Vestibulum+elementum+felis+sit+amet+ipsum+euismod+ullam 
```





### Resource : tags
#### get /tags/{tag-name}
Get information about a tag object.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 3.78688E+210 | 
| tag-name | path | string | yes | Tag name | us sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Ma | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/tags/us+sodales%2C+sagittis+sed+ex.+Vivamus+id+vulputate+odio.+Donec+quis+facilisis+arcu%2C+vel+ultrices+augue.+Suspendisse+potenti.+Ma 
```





#### get /tags/{tag-name}/media/recent
Get a list of recently tagged media. Use the `max_tag_id` and
`min_tag_id` parameters in the pagination response to paginate through
these objects.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 3.78688E+210 | 
| tag-name | path | string | yes | Tag name |  vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus  | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/tags/+vehicula+ex+lorem%2C+ut+ornare+purus+ultrices+nec.+Vestibulum+elementum+felis+sit+amet+ipsum+euismod+ullamcorper.+Phasellus+/media/recent 
```





#### get /tags/search

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 3.78688E+210 | 
| tag-name | path | string | yes | Tag name | t sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libe | 
| q | query | string |  | A valid tag name without a leading #. (eg. snowy, nofilter) |  sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus a | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/tags/search?q=%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20a 
```





### Resource : locations
#### get /locations/{location-id}
Get information about a location.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 3.78688E+210 | 
| tag-name | path | string | yes | Tag name | t sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libe | 
| location-id | path | integer | yes | Location ID | 462321752 | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/locations/462321752 
```





#### get /locations/{location-id}/media/recent
Get a list of recent media objects from a given location.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 3.78688E+210 | 
| tag-name | path | string | yes | Tag name | t sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libe | 
| location-id | path | integer | yes | Location ID | -1998066448 | 
| max_timestamp | query | integer |  | Return media before this UNIX timestamp. | 1701251125 | 
| min_timestamp | query | integer |  | Return media after this UNIX timestamp. | -1399388783 | 
| min_id | query | string |  | Return media later than this min_id. | at, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur p | 
| max_id | query | string |  | Return media earlier than this max_id. | o quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagitt | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/locations/-1998066448/media/recent?max_timestamp=1701251125&min_timestamp=-1399388783&min_id=at%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabitur%20p&max_id=o%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagitt 
```





#### get /locations/search
Search for a location by geographic coordinate.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 3.78688E+210 | 
| tag-name | path | string | yes | Tag name | t sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libe | 
| distance | query | integer |  | Default is 1000m (distance=1000), max distance is 5000. | 345662742 | 
| facebook_places_id | query | integer |  | Returns a location mapped off of a Facebook places id. If used, aFoursquare id and lat, lng are not required. | 1348316333 | 
| foursquare_id | query | integer |  | returns a location mapped off of a foursquare v1 api location id.If used, you are not required to use lat and lng. Note that thismethod is deprecated; you should use the new foursquare IDs with V2of their API. | -1749700100 | 
| lat | query | number |  | atitude of the center search coordinate. If used, lng is required. | -6.49462E+123 | 
| lng | query | number |  | ongitude of the center search coordinate. If used, lat is required. | -7.4926E+201 | 
| foursquare_v2_id | query | integer |  | Returns a location mapped off of a foursquare v2 api location id. Ifused, you are not required to use lat and lng. | -807369583 | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/locations/search?distance=345662742&facebook_places_id=1348316333&foursquare_id=-1749700100&lat=-6.49462E+123&lng=-7.4926E+201&foursquare_v2_id=-807369583 
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
| user-id | path | number | yes | The user identifier number | 3.78688E+210 | 
| tag-name | path | string | yes | Tag name | t sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libe | 
| geo-id | path | integer | yes | Geolocation ID | -1754014731 | 
| count | query | integer |  | Max number of media to return. | -1713619773 | 
| min_id | query | integer |  | Return media before this `min_id`. | -1598469997 | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/geographies/-1754014731/media/recent?count=-1713619773&min_id=-1598469997 
```







---

## Table of contents
* Tags
  * Tag : Users
    * [Operation : get /users/{user-id}](#get-usersuser-id)
    * [Operation : get /users/self/feed](#get-usersselffeed)
    * [Operation : get /users/{user-id}/media/recent](#get-usersuser-idmediarecent)
    * [Operation : get /users/self/media/liked](#get-usersselfmedialiked)
    * [Operation : get /users/search](#get-userssearch)
  * Tag : Relationships
 : Relationships are expressed using the following terms:

**outgoing_status**: Your relationship to the user. Can be "follows",
  "requested", "none".
**incoming_status**: A user's relationship to you. Can be "followed_by",
  "requested_by", "blocked_by_you", "none".
    * [Operation : get /users/{user-id}/follows](#get-usersuser-idfollows)
    * [Operation : get /users/{user-id}/followed-by](#get-usersuser-idfollowed-by)
    * [Operation : get /users/self/requested-by](#get-usersselfrequested-by)
    * [Operation : post /users/{user-id}/relationship](#post-usersuser-idrelationship)
  * Tag : Media
 : At this time, uploading via the API is not possible. We made a conscious
choice not to add this for the following reasons:

* Instagram is about your life on the go – we hope to encourage photos
  from within the app.
* We want to fight spam & low quality photos. Once we allow uploading
  from other sources, it's harder to control what comes into the Instagram
  ecosystem. All this being said, we're working on ways to ensure users
  have a consistent and high-quality experience on our platform.
    * [Operation : get /media/{media-id}](#get-mediamedia-id)
    * [Operation : get /media1/{shortcode}](#get-media1shortcode)
    * [Operation : get /media/search](#get-mediasearch)
    * [Operation : get /media/popular](#get-mediapopular)
    * [Operation : post /media/{media-id}/comments](#post-mediamedia-idcomments)
    * [Operation : get /media/{media-id}/likes](#get-mediamedia-idlikes)
    * [Operation : get /locations/{location-id}/media/recent](#get-locationslocation-idmediarecent)
  * Tag : Commnts
  * Tag : Likes
    * [Operation : get /media/{media-id}/likes](#get-mediamedia-idlikes)
    * [Operation : post /media/{media-id}/likes](#post-mediamedia-idlikes)
    * [Operation : delete /media/{media-id}/likes](#delete-mediamedia-idlikes)
  * Tag : Tags
    * [Operation : get /tags/{tag-name}](#get-tagstag-name)
    * [Operation : get /tags/{tag-name}/media/recent](#get-tagstag-namemediarecent)
    * [Operation : get /tags/search](#get-tagssearch)
  * Tag : Location
    * [Operation : get /locations/{location-id}](#get-locationslocation-id)
    * [Operation : get /locations/{location-id}/media/recent](#get-locationslocation-idmediarecent)
    * [Operation : get /locations/search](#get-locationssearch)
  * Tag : Subscribtions
  * Tag : Comments
    * [Operation : get /media/{media-id}/comments](#get-mediamedia-idcomments)
    * [Operation : post /media/{media-id}/comments](#post-mediamedia-idcomments)
    * [Operation : delete /media/{media-id}/comments](#delete-mediamedia-idcomments)
* [Summary](#summary)
* [Resources](#resources)
  * [Resource : Resource : users](#resource--users)
    * [Operation : get /users/{user-id}](#get-usersuser-id)
    * [Operation : get /users/self/feed](#get-usersselffeed)
    * [Operation : get /users/{user-id}/media/recent](#get-usersuser-idmediarecent)
    * [Operation : get /users/self/media/liked](#get-usersselfmedialiked)
    * [Operation : get /users/search](#get-userssearch)
    * [Operation : get /users/{user-id}/follows](#get-usersuser-idfollows)
    * [Operation : get /users/{user-id}/followed-by](#get-usersuser-idfollowed-by)
    * [Operation : get /users/self/requested-by](#get-usersselfrequested-by)
    * [Operation : post /users/{user-id}/relationship](#post-usersuser-idrelationship)
  * [Resource : Resource : media](#resource--media)
    * [Operation : get /media/{media-id}](#get-mediamedia-id)
    * [Operation : get /media/search](#get-mediasearch)
    * [Operation : get /media/popular](#get-mediapopular)
    * [Operation : get /media/{media-id}/comments](#get-mediamedia-idcomments)
    * [Operation : post /media/{media-id}/comments](#post-mediamedia-idcomments)
    * [Operation : delete /media/{media-id}/comments](#delete-mediamedia-idcomments)
    * [Operation : get /media/{media-id}/likes](#get-mediamedia-idlikes)
    * [Operation : post /media/{media-id}/likes](#post-mediamedia-idlikes)
    * [Operation : delete /media/{media-id}/likes](#delete-mediamedia-idlikes)
  * [Resource : Resource : media1](#resource--media1)
    * [Operation : get /media1/{shortcode}](#get-media1shortcode)
  * [Resource : Resource : tags](#resource--tags)
    * [Operation : get /tags/{tag-name}](#get-tagstag-name)
    * [Operation : get /tags/{tag-name}/media/recent](#get-tagstag-namemediarecent)
    * [Operation : get /tags/search](#get-tagssearch)
  * [Resource : Resource : locations](#resource--locations)
    * [Operation : get /locations/{location-id}](#get-locationslocation-id)
    * [Operation : get /locations/{location-id}/media/recent](#get-locationslocation-idmediarecent)
    * [Operation : get /locations/search](#get-locationssearch)
  * [Resource : Resource : geographies](#resource--geographies)
    * [Operation : get /geographies/{geo-id}/media/recent](#get-geographiesgeo-idmediarecent)
* [Table of contents](#table-of-contents)

