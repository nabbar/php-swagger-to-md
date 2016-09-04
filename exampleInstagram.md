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
| user-id | path | number | yes | The user identifier number | 4.297386E+182 | 
| tag-name | path | string | yes | Tag name |  mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/4.297386E%2B182 
```





#### get /users/self/feed
See the authenticated user's feed.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -1.219633E+215 | 
| tag-name | path | string | yes | Tag name |  mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare | 
| count | query | integer |  | Count of media to return. | 676242839 | 
| max_id | query | integer |  | Return media earlier than this max_id.s | -1348412440 | 
| min_id | query | integer |  | Return media later than this min_id. | 317563625 | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/self/feed?count=676242839&max_id=-1348412440&min_id=317563625 
```





#### get /users/{user-id}/media/recent

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 1.418442E-60 | 
| tag-name | path | string | yes | Tag name |  mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare | 
| count | query | integer |  | Count of media to return. | -1596713669 | 
| max_timestamp | query | integer |  | Return media before this UNIX timestamp. | -1570759770 | 
| min_timestamp | query | integer |  | Return media after this UNIX timestamp. | -37922997 | 
| min_id | query | string |  | Return media later than this min_id. | ittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornar | 
| max_id | query | string |  | Return media earlier than this max_id. | t quam. Maece | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/1.418442E-60/media/recent?count=-1596713669&max_timestamp=-1570759770&min_timestamp=-37922997&min_id=ittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornar&max_id=t%20quam.%20Maece 
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
| user-id | path | number | yes | The user identifier number | -1.219633E+215 | 
| tag-name | path | string | yes | Tag name |  mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare | 
| count | query | integer |  | Count of media to return. | 475460596 | 
| max_like_id | query | integer |  | Return media liked before this id. | -1882886278 | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/self/media/liked?count=475460596&max_like_id=-1882886278 
```





#### get /users/search
Search for a user by name.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -1.219633E+215 | 
| tag-name | path | string | yes | Tag name |  mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare | 
| q | query | string | yes | A query string |  odio. Sed sed  | 
| count | query | string |  | Number of users to return. | ultrices erat, at hendrerit enim. Se | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/search?q=%20odio.%20Sed%20sed%20&count=ultrices%20erat%2C%20at%20hendrerit%20enim.%20Se 
```





#### get /users/{user-id}/follows
Get the list of users this user follows.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 3.304466E+100 | 
| tag-name | path | string | yes | Tag name |  mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/3.304466E%2B100/follows 
```





#### get /users/{user-id}/followed-by
Get the list of users this user is followed by.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 2.05207E+172 | 
| tag-name | path | string | yes | Tag name |  mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/2.05207E%2B172/followed-by 
```





#### get /users/self/requested-by
List the users who have requested this user's permission to follow.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -1.219633E+215 | 
| tag-name | path | string | yes | Tag name |  mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare | 

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
| user-id | path | number | yes | The user identifier number | 8.306143E+214 | 
| tag-name | path | string | yes | Tag name |  mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare | 
| action | body | string |  | One of follow/unfollow/block/unblock/approve/ignore. | follow | 

* Example of request :
```json
HTTP 1.1 post https://api.instagram.com/v1/users/8.306143E%2B214/relationship 
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
| user-id | path | number | yes | The user identifier number | -1.219633E+215 | 
| tag-name | path | string | yes | Tag name |  mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare | 
| media-id | path | integer | yes | The media ID | 246628845 | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/246628845 
```





#### get /media/search
Search for media in a given area. The default time span is set to 5
days. The time span must not exceed 7 days. Defaults time stamps cover
the last 5 days. Can return mix of image and video types.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Validation | Default | Description | Example |  
| :---: | :---: | :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes |  |  | The user identifier number | -1.219633E+215 | 
| tag-name | path | string | yes |  |  | Tag name |  mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare | 
| LAT | query | number |  |  |  | Latitude of the center search coordinate. If used, lng is required. | 2.028971E-106 | 
| MIN_TIMESTAMP | query | integer |  |  |  | A unix timestamp. All media returned will be taken later thanthis timestamp. | -629377428 | 
| LNG | query | number |  |  |  | Longitude of the center search coordinate. If used, lat is required. | 4.315774E-47 | 
| MAX_TIMESTAMP | query | integer |  |  |  | A unix timestamp. All media returned will be taken earlier than thistimestamp. | 1238370245 | 
| DISTANCE | query | integer |  | Value <= 5000 | 1000 | Default is 1km (distance=1000), max distance is 5km. | 1000 | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/search?LAT=2.028971E-106&MIN_TIMESTAMP=-629377428&LNG=4.315774E-47&MAX_TIMESTAMP=1238370245&DISTANCE=1000 
```





#### get /media/popular
Get a list of what media is most popular at the moment.
Can return mix of image and video types.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -1.219633E+215 | 
| tag-name | path | string | yes | Tag name |  mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare | 

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
| user-id | path | number | yes | The user identifier number | -1.219633E+215 | 
| tag-name | path | string | yes | Tag name |  mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare | 
| media-id | path | integer | yes | Media ID | -109221507 | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/-109221507/comments 
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
| user-id | path | number | yes | The user identifier number | -1.219633E+215 | 
| tag-name | path | string | yes | Tag name |  mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare | 
| media-id | path | integer | yes | Media ID | -109221507 | 
| TEXT | body | number |  | Text to post as a comment on the media object as specified inmedia-id. | -5.92406E-168 | 

* Example of request :
```json
HTTP 1.1 post https://api.instagram.com/v1/media/-109221507/comments 
Content-Type: application/json
Content-Length: 13
-5.92406e-168
```




#### delete /media/{media-id}/comments
Remove a comment either on the authenticated user's media object or
authored by the authenticated user.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -1.219633E+215 | 
| tag-name | path | string | yes | Tag name |  mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare | 
| media-id | path | integer | yes | Media ID | -109221507 | 

* Example of request :
```json
HTTP 1.1 delete https://api.instagram.com/v1/media/-109221507/comments 
```





#### get /media/{media-id}/likes
Get a list of users who have liked this media.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -1.219633E+215 | 
| tag-name | path | string | yes | Tag name |  mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare | 
| media-id | path | integer | yes | Media ID | 1452656127 | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/1452656127/likes 
```




#### post /media/{media-id}/likes
Set a like on this media by the currently authenticated user.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -1.219633E+215 | 
| tag-name | path | string | yes | Tag name |  mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare | 
| media-id | path | integer | yes | Media ID | 1452656127 | 

* Example of request :
```json
HTTP 1.1 post https://api.instagram.com/v1/media/1452656127/likes 
```




#### delete /media/{media-id}/likes
Remove a like on this media by the currently authenticated user.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -1.219633E+215 | 
| tag-name | path | string | yes | Tag name |  mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare | 
| media-id | path | integer | yes | Media ID | 1452656127 | 

* Example of request :
```json
HTTP 1.1 delete https://api.instagram.com/v1/media/1452656127/likes 
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
| user-id | path | number | yes | The user identifier number | -1.219633E+215 | 
| tag-name | path | string | yes | Tag name |  mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare | 
| shortcode | path | string | yes | The media shortcode | . Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media1/.+Proin+id+scelerisque+ipsum.+Quisque+porta+mauris+nec+massa+egestas%2C+sed+mollis+est+molestie.+Aenean+quam+nisi%2C+posuere+sed+varius+sodales%2C+sagittis 
```





### Resource : tags
#### get /tags/{tag-name}
Get information about a tag object.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -1.219633E+215 | 
| tag-name | path | string | yes | Tag name | rra ullamcorper. Fusce nec est quam. Pellent | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/tags/rra+ullamcorper.+Fusce+nec+est+quam.+Pellent 
```





#### get /tags/{tag-name}/media/recent
Get a list of recently tagged media. Use the `max_tag_id` and
`min_tag_id` parameters in the pagination response to paginate through
these objects.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -1.219633E+215 | 
| tag-name | path | string | yes | Tag name | ctetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/tags/ctetur+adipiscing+elit.+Suspendisse+justo+turpis%2C+lacinia+id+tempor+sed%2C+dapibus+vel+elit/media/recent 
```





#### get /tags/search

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -1.219633E+215 | 
| tag-name | path | string | yes | Tag name |  mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare | 
| q | query | string |  | A valid tag name without a leading #. (eg. snowy, nofilter) | met ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt  | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/tags/search?q=met%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20 
```





### Resource : locations
#### get /locations/{location-id}
Get information about a location.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -1.219633E+215 | 
| tag-name | path | string | yes | Tag name |  mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare | 
| location-id | path | integer | yes | Location ID | 594093159 | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/locations/594093159 
```





#### get /locations/{location-id}/media/recent
Get a list of recent media objects from a given location.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -1.219633E+215 | 
| tag-name | path | string | yes | Tag name |  mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare | 
| location-id | path | integer | yes | Location ID | -581870475 | 
| max_timestamp | query | integer |  | Return media before this UNIX timestamp. | 646248697 | 
| min_timestamp | query | integer |  | Return media after this UNIX timestamp. | -1595003424 | 
| min_id | query | string |  | Return media later than this min_id. | c interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequ | 
| max_id | query | string |  | Return media earlier than this max_id. | l. Donec  | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/locations/-581870475/media/recent?max_timestamp=646248697&min_timestamp=-1595003424&min_id=c%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequ&max_id=l.%20Donec%20 
```





#### get /locations/search
Search for a location by geographic coordinate.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -1.219633E+215 | 
| tag-name | path | string | yes | Tag name |  mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare | 
| distance | query | integer |  | Default is 1000m (distance=1000), max distance is 5000. | 1181735230 | 
| facebook_places_id | query | integer |  | Returns a location mapped off of a Facebook places id. If used, aFoursquare id and lat, lng are not required. | 1138361057 | 
| foursquare_id | query | integer |  | returns a location mapped off of a foursquare v1 api location id.If used, you are not required to use lat and lng. Note that thismethod is deprecated; you should use the new foursquare IDs with V2of their API. | -212874153 | 
| lat | query | number |  | atitude of the center search coordinate. If used, lng is required. | 2.369397E-74 | 
| lng | query | number |  | ongitude of the center search coordinate. If used, lat is required. | -8.083259E+53 | 
| foursquare_v2_id | query | integer |  | Returns a location mapped off of a foursquare v2 api location id. Ifused, you are not required to use lat and lng. | -672656654 | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/locations/search?distance=1181735230&facebook_places_id=1138361057&foursquare_id=-212874153&lat=2.369397E-74&lng=-8.083259E+53&foursquare_v2_id=-672656654 
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
| user-id | path | number | yes | The user identifier number | -1.219633E+215 | 
| tag-name | path | string | yes | Tag name |  mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare | 
| geo-id | path | integer | yes | Geolocation ID | -1699983356 | 
| count | query | integer |  | Max number of media to return. | 1605307508 | 
| min_id | query | integer |  | Return media before this `min_id`. | -231231621 | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/geographies/-1699983356/media/recent?count=1605307508&min_id=-231231621 
```







---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

