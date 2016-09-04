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
    * [Table of contents](#table-of-contents)


---

## Resources 
### Resource : users
#### get /users/{user-id}
Get basic information about a user.
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 2.75876E+118 | 
| tag-name | path | string | yes | Tag name | id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est moles | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/2.75876E%2B118 
```




#### get /users/self/feed
See the authenticated user's feed.
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 6.194328E+105 | 
| tag-name | path | string | yes | Tag name | id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est moles | 
| count | query | integer |  | Count of media to return. | 2106137959 | 
| max_id | query | integer |  | Return media earlier than this max_id.s | 1214735828 | 
| min_id | query | integer |  | Return media later than this min_id. | 1275955197 | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/self/feed?count=2106137959&max_id=1214735828&min_id=1275955197 
```




#### get /users/{user-id}/media/recent

* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -4.226179E-67 | 
| tag-name | path | string | yes | Tag name | id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est moles | 
| count | query | integer |  | Count of media to return. | -1627051907 | 
| max_timestamp | query | integer |  | Return media before this UNIX timestamp. | 1720504671 | 
| min_timestamp | query | integer |  | Return media after this UNIX timestamp. | 233158898 | 
| min_id | query | string |  | Return media later than this min_id. | as, sed mollis  | 
| max_id | query | string |  | Return media earlier than this max_id. | piscing elit. Integer ipsum sapien, bibendum at placerat sit amet, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, temp | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/-4.226179E-67/media/recent?count=-1627051907&max_timestamp=1720504671&min_timestamp=233158898&min_id=as%2C%20sed%20mollis%20&max_id=piscing%20elit.%20Integer%20ipsum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20temp 
```




#### get /users/self/media/liked
See the list of media liked by the authenticated user.
Private media is returned as long as the authenticated user
has permissionto view that media. Liked media lists are only
available for the currently authenticated user.

* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 6.194328E+105 | 
| tag-name | path | string | yes | Tag name | id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est moles | 
| count | query | integer |  | Count of media to return. | -626451076 | 
| max_like_id | query | integer |  | Return media liked before this id. | 469114514 | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/self/media/liked?count=-626451076&max_like_id=469114514 
```




#### get /users/search
Search for a user by name.
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 6.194328E+105 | 
| tag-name | path | string | yes | Tag name | id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est moles | 
| q | query | string | yes | A query string |  faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdi | 
| count | query | string |  | Number of users to return. | get, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignis | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/search?q=%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdi&count=get%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignis 
```




#### get /users/{user-id}/follows
Get the list of users this user follows.
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -77909.7 | 
| tag-name | path | string | yes | Tag name | id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est moles | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/-77909.7/follows 
```




#### get /users/{user-id}/followed-by
Get the list of users this user is followed by.
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 4.912836E+72 | 
| tag-name | path | string | yes | Tag name | id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est moles | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/4.912836E%2B72/followed-by 
```




#### get /users/self/requested-by
List the users who have requested this user's permission to follow.

* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 6.194328E+105 | 
| tag-name | path | string | yes | Tag name | id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est moles | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/self/requested-by 
```




#### post /users/{user-id}/relationship
Modify the relationship between the current user and thetarget user.

* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -5.621273E+169 | 
| tag-name | path | string | yes | Tag name | id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est moles | 
| body | body | string |  | One of follow/unfollow/block/unblock/approve/ignore. | follow | 


* Example of request :
```json
HTTP 1.1 post https://api.instagram.com/v1/users/-5.621273E%2B169/relationship 
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

* Request Parameters :

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 6.194328E+105 | 
| tag-name | path | string | yes | Tag name | id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est moles | 
| media-id | path | integer | yes | The media ID | -1695685688 | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/-1695685688 
```




#### get /media/search
Search for media in a given area. The default time span is set to 5
days. The time span must not exceed 7 days. Defaults time stamps cover
the last 5 days. Can return mix of image and video types.

* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Validation | Default | Description | Example |  
| :---: | :---: | :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes |  |  | The user identifier number | 6.194328E+105 | 
| tag-name | path | string | yes |  |  | Tag name | id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est moles | 
| LAT | query | number |  |  |  | Latitude of the center search coordinate. If used, lng is required. | 3.49296E-168 | 
| MIN_TIMESTAMP | query | integer |  |  |  | A unix timestamp. All media returned will be taken later thanthis timestamp. | -1707425034 | 
| LNG | query | number |  |  |  | Longitude of the center search coordinate. If used, lat is required. | 7.28095E+126 | 
| MAX_TIMESTAMP | query | integer |  |  |  | A unix timestamp. All media returned will be taken earlier than thistimestamp. | -1706119814 | 
| DISTANCE | query | integer |  | Value <= 5000 | 1000 | Default is 1km (distance=1000), max distance is 5km. | 1000 | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/search?LAT=3.49296E-168&MIN_TIMESTAMP=-1707425034&LNG=7.28095E+126&MAX_TIMESTAMP=-1706119814&DISTANCE=1000 
```




#### get /media/popular
Get a list of what media is most popular at the moment.
Can return mix of image and video types.

* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 6.194328E+105 | 
| tag-name | path | string | yes | Tag name | id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est moles | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/popular 
```




#### get /media/{media-id}/comments
Get a list of recent comments on a media object.

* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 6.194328E+105 | 
| tag-name | path | string | yes | Tag name | id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est moles | 
| media-id | path | integer | yes | Media ID | 942976342 | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/942976342/comments 
```



#### post /media/{media-id}/comments
Create a comment on a media object with the following rules:

* The total length of the comment cannot exceed 300 characters.
* The comment cannot contain more than 4 hashtags.
* The comment cannot contain more than 1 URL.
* The comment cannot consist of all capital letters.

* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 6.194328E+105 | 
| tag-name | path | string | yes | Tag name | id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est moles | 
| media-id | path | integer | yes | Media ID | 942976342 | 
| body | body | number |  | Text to post as a comment on the media object as specified inmedia-id. | -1.6957E+46 | 


* Example of request :
```json
HTTP 1.1 post https://api.instagram.com/v1/media/942976342/comments 
Content-Type: application/json
Content-Length: 11
-1.6957e+46
```



#### delete /media/{media-id}/comments
Remove a comment either on the authenticated user's media object or
authored by the authenticated user.

* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 6.194328E+105 | 
| tag-name | path | string | yes | Tag name | id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est moles | 
| media-id | path | integer | yes | Media ID | 942976342 | 


* Example of request :
```json
HTTP 1.1 delete https://api.instagram.com/v1/media/942976342/comments 
```




#### get /media/{media-id}/likes
Get a list of users who have liked this media.

* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 6.194328E+105 | 
| tag-name | path | string | yes | Tag name | id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est moles | 
| media-id | path | integer | yes | Media ID | 2031360382 | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/2031360382/likes 
```



#### post /media/{media-id}/likes
Set a like on this media by the currently authenticated user.
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 6.194328E+105 | 
| tag-name | path | string | yes | Tag name | id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est moles | 
| media-id | path | integer | yes | Media ID | 2031360382 | 


* Example of request :
```json
HTTP 1.1 post https://api.instagram.com/v1/media/2031360382/likes 
```



#### delete /media/{media-id}/likes
Remove a like on this media by the currently authenticated user.

* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 6.194328E+105 | 
| tag-name | path | string | yes | Tag name | id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est moles | 
| media-id | path | integer | yes | Media ID | 2031360382 | 


* Example of request :
```json
HTTP 1.1 delete https://api.instagram.com/v1/media/2031360382/likes 
```




### Resource : media1
#### get /media1/{shortcode}
This endpoint returns the same response as **GET** `/media/media-id`.

A media object's shortcode can be found in its shortlink URL.
An example shortlink is `http://instagram.com/p/D/`
Its corresponding shortcode is D.

* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 6.194328E+105 | 
| tag-name | path | string | yes | Tag name | id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est moles | 
| shortcode | path | string | yes | The media shortcode | . Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. M | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media1/.+Sed+malesuada%2C+velit+eu+dapibus+vehicula%2C+sem+tortor+accumsan+nibh%2C+sed+pellentesque+enim+metus+in+eros.+M 
```




### Resource : tags
#### get /tags/{tag-name}
Get information about a tag object.
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 6.194328E+105 | 
| tag-name | path | string | yes | Tag name | elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/tags/elementum+felis+sit+amet+ipsum+euismod+ullamcorper.+Phasellus+sit+amet+vestibulum+quam.+Morbi+tincidunt+pretium+sodales.+Etiam+dignissim+risus+non+felis+scelerisque+aliquet.+Phasellus+faucibus 
```




#### get /tags/{tag-name}/media/recent
Get a list of recently tagged media. Use the `max_tag_id` and
`min_tag_id` parameters in the pagination response to paginate through
these objects.

* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 6.194328E+105 | 
| tag-name | path | string | yes | Tag name | , sem tortor accumsan nibh, sed pellentesque enim metus in | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/tags/%2C+sem+tortor+accumsan+nibh%2C+sed+pellentesque+enim+metus+in/media/recent 
```




#### get /tags/search

* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 6.194328E+105 | 
| tag-name | path | string | yes | Tag name | id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est moles | 
| q | query | string |  | A valid tag name without a leading #. (eg. snowy, nofilter) | a, velit eu dapibus vehicula, sem tortor accumsan ni | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/tags/search?q=a%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tortor%20accumsan%20ni 
```




### Resource : locations
#### get /locations/{location-id}
Get information about a location.
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 6.194328E+105 | 
| tag-name | path | string | yes | Tag name | id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est moles | 
| location-id | path | integer | yes | Location ID | 651146524 | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/locations/651146524 
```




#### get /locations/{location-id}/media/recent
Get a list of recent media objects from a given location.
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 6.194328E+105 | 
| tag-name | path | string | yes | Tag name | id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est moles | 
| location-id | path | integer | yes | Location ID | 3421829 | 
| max_timestamp | query | integer |  | Return media before this UNIX timestamp. | -602763410 | 
| min_timestamp | query | integer |  | Return media after this UNIX timestamp. | -596827457 | 
| min_id | query | string |  | Return media later than this min_id. | uismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu  | 
| max_id | query | string |  | Return media earlier than this max_id. |  est quam. Pellent | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/locations/3421829/media/recent?max_timestamp=-602763410&min_timestamp=-596827457&min_id=uismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20&max_id=%20est%20quam.%20Pellent 
```




#### get /locations/search
Search for a location by geographic coordinate.
* Request Parameters :
  * Content-Type Accepted : application/json

* Request Parameters :

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 6.194328E+105 | 
| tag-name | path | string | yes | Tag name | id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est moles | 
| distance | query | integer |  | Default is 1000m (distance=1000), max distance is 5000. | -343161305 | 
| facebook_places_id | query | integer |  | Returns a location mapped off of a Facebook places id. If used, aFoursquare id and lat, lng are not required. | -386062603 | 
| foursquare_id | query | integer |  | returns a location mapped off of a foursquare v1 api location id.If used, you are not required to use lat and lng. Note that thismethod is deprecated; you should use the new foursquare IDs with V2of their API. | 1586019200 | 
| lat | query | number |  | atitude of the center search coordinate. If used, lng is required. | 4.14518E-212 | 
| lng | query | number |  | ongitude of the center search coordinate. If used, lat is required. | -6.433653E-40 | 
| foursquare_v2_id | query | integer |  | Returns a location mapped off of a foursquare v2 api location id. Ifused, you are not required to use lat and lng. | 2141307527 | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/locations/search?distance=-343161305&facebook_places_id=-386062603&foursquare_id=1586019200&lat=4.14518E-212&lng=-6.433653E-40&foursquare_v2_id=2141307527 
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

* Request Parameters :

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 6.194328E+105 | 
| tag-name | path | string | yes | Tag name | id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est moles | 
| geo-id | path | integer | yes | Geolocation ID | -1792325582 | 
| count | query | integer |  | Max number of media to return. | 1386114930 | 
| min_id | query | integer |  | Return media before this `min_id`. | -1261218884 | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/geographies/-1792325582/media/recent?count=1386114930&min_id=-1261218884 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

