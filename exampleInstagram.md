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
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 1.570722E-45 | 
| tag-name | path | string | yes | Tag name |  eros. Lorem ipsum dolor sit amet, consectetur adi | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/1.570722E-45 
```





* Example of request :




#### get /users/self/feed
See the authenticated user's feed.
* Request Parameters :
  * Content-Type Accepted : application/json


* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -4.377305E+244 | 
| tag-name | path | string | yes | Tag name |  eros. Lorem ipsum dolor sit amet, consectetur adi | 
| count | query | integer |  | Count of media to return. | -558938958 | 
| max_id | query | integer |  | Return media earlier than this max_id.s | -1420888921 | 
| min_id | query | integer |  | Return media later than this min_id. | -104009793 | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/self/feed?count=-558938958&max_id=-1420888921&min_id=-104009793 
```





* Example of request :




#### get /users/{user-id}/media/recent

* Request Parameters :
  * Content-Type Accepted : application/json


* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -7.436843E+155 | 
| tag-name | path | string | yes | Tag name |  eros. Lorem ipsum dolor sit amet, consectetur adi | 
| count | query | integer |  | Count of media to return. | -1221753631 | 
| max_timestamp | query | integer |  | Return media before this UNIX timestamp. | -1714200581 | 
| min_timestamp | query | integer |  | Return media after this UNIX timestamp. | 1219393713 | 
| min_id | query | string |  | Return media later than this min_id. | isque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut or | 
| max_id | query | string |  | Return media earlier than this max_id. | massa, malesuada facilisis sapien finibus at.  | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/-7.436843E%2B155/media/recent?count=-1221753631&max_timestamp=-1714200581&min_timestamp=1219393713&min_id=isque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20or&max_id=massa%2C%20malesuada%20facilisis%20sapien%20finibus%20at.%20 
```





* Example of request :




#### get /users/self/media/liked
See the list of media liked by the authenticated user.
Private media is returned as long as the authenticated user
has permissionto view that media. Liked media lists are only
available for the currently authenticated user.

* Request Parameters :
  * Content-Type Accepted : application/json


* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -4.377305E+244 | 
| tag-name | path | string | yes | Tag name |  eros. Lorem ipsum dolor sit amet, consectetur adi | 
| count | query | integer |  | Count of media to return. | -993484333 | 
| max_like_id | query | integer |  | Return media liked before this id. | -1825294682 | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/self/media/liked?count=-993484333&max_like_id=-1825294682 
```





* Example of request :




#### get /users/search
Search for a user by name.
* Request Parameters :
  * Content-Type Accepted : application/json


* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -4.377305E+244 | 
| tag-name | path | string | yes | Tag name |  eros. Lorem ipsum dolor sit amet, consectetur adi | 
| q | query | string | yes | A query string | ttis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper fel | 
| count | query | string |  | Number of users to return. |  sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nis | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/search?q=ttis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20fel&count=%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20ipsum.%20Quisque%20porta%20mauris%20nec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nis 
```





* Example of request :




#### get /users/{user-id}/follows
Get the list of users this user follows.
* Request Parameters :
  * Content-Type Accepted : application/json


* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 3173810000 | 
| tag-name | path | string | yes | Tag name |  eros. Lorem ipsum dolor sit amet, consectetur adi | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/3173810000/follows 
```





* Example of request :




#### get /users/{user-id}/followed-by
Get the list of users this user is followed by.
* Request Parameters :
  * Content-Type Accepted : application/json


* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -5.895014E+115 | 
| tag-name | path | string | yes | Tag name |  eros. Lorem ipsum dolor sit amet, consectetur adi | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/-5.895014E%2B115/followed-by 
```





* Example of request :




#### get /users/self/requested-by
List the users who have requested this user's permission to follow.

* Request Parameters :
  * Content-Type Accepted : application/json


* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -4.377305E+244 | 
| tag-name | path | string | yes | Tag name |  eros. Lorem ipsum dolor sit amet, consectetur adi | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/self/requested-by 
```





* Example of request :




#### post /users/{user-id}/relationship
Modify the relationship between the current user and thetarget user.

* Request Parameters :
  * Content-Type Accepted : application/json


* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 7.19156E-131 | 
| tag-name | path | string | yes | Tag name |  eros. Lorem ipsum dolor sit amet, consectetur adi | 
| body | body | string |  | One of follow/unfollow/block/unblock/approve/ignore. | follow | 


* Example of request :
```json
HTTP 1.1 post https://api.instagram.com/v1/users/7.19156E-131/relationship 
Content-Type: application/json
Content-Length: 8
"follow"
```





* Example of request :




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
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -4.377305E+244 | 
| tag-name | path | string | yes | Tag name |  eros. Lorem ipsum dolor sit amet, consectetur adi | 
| media-id | path | integer | yes | The media ID | 1145620050 | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/1145620050 
```





* Example of request :




#### get /media/search
Search for media in a given area. The default time span is set to 5
days. The time span must not exceed 7 days. Defaults time stamps cover
the last 5 days. Can return mix of image and video types.

* Request Parameters :
  * Content-Type Accepted : application/json


* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Validation | Default | Description | Example |  
| :---: | :---: | :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes |  |  | The user identifier number | -4.377305E+244 | 
| tag-name | path | string | yes |  |  | Tag name |  eros. Lorem ipsum dolor sit amet, consectetur adi | 
| LAT | query | number |  |  |  | Latitude of the center search coordinate. If used, lng is required. | -2.356005E+80 | 
| MIN_TIMESTAMP | query | integer |  |  |  | A unix timestamp. All media returned will be taken later thanthis timestamp. | 989070523 | 
| LNG | query | number |  |  |  | Longitude of the center search coordinate. If used, lat is required. | -7.744355E-109 | 
| MAX_TIMESTAMP | query | integer |  |  |  | A unix timestamp. All media returned will be taken earlier than thistimestamp. | -733200448 | 
| DISTANCE | query | integer |  | Value <= 5000 | 1000 | Default is 1km (distance=1000), max distance is 5km. | 1000 | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/search?LAT=-2.356005E+80&MIN_TIMESTAMP=989070523&LNG=-7.744355E-109&MAX_TIMESTAMP=-733200448&DISTANCE=1000 
```





* Example of request :




#### get /media/popular
Get a list of what media is most popular at the moment.
Can return mix of image and video types.

* Request Parameters :
  * Content-Type Accepted : application/json


* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -4.377305E+244 | 
| tag-name | path | string | yes | Tag name |  eros. Lorem ipsum dolor sit amet, consectetur adi | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/popular 
```





* Example of request :




#### get /media/{media-id}/comments
Get a list of recent comments on a media object.

* Request Parameters :
  * Content-Type Accepted : application/json


* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -4.377305E+244 | 
| tag-name | path | string | yes | Tag name |  eros. Lorem ipsum dolor sit amet, consectetur adi | 
| media-id | path | integer | yes | Media ID | 1695789006 | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/1695789006/comments 
```





* Example of request :



#### post /media/{media-id}/comments
Create a comment on a media object with the following rules:

* The total length of the comment cannot exceed 300 characters.
* The comment cannot contain more than 4 hashtags.
* The comment cannot contain more than 1 URL.
* The comment cannot consist of all capital letters.

* Request Parameters :
  * Content-Type Accepted : application/json


* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -4.377305E+244 | 
| tag-name | path | string | yes | Tag name |  eros. Lorem ipsum dolor sit amet, consectetur adi | 
| media-id | path | integer | yes | Media ID | 1695789006 | 
| body | body | number |  | Text to post as a comment on the media object as specified inmedia-id. | 5.329969E+236 | 


* Example of request :
```json
HTTP 1.1 post https://api.instagram.com/v1/media/1695789006/comments 
Content-Type: application/json
Content-Length: 13
5.329969e+236
```





* Example of request :



#### delete /media/{media-id}/comments
Remove a comment either on the authenticated user's media object or
authored by the authenticated user.

* Request Parameters :
  * Content-Type Accepted : application/json


* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -4.377305E+244 | 
| tag-name | path | string | yes | Tag name |  eros. Lorem ipsum dolor sit amet, consectetur adi | 
| media-id | path | integer | yes | Media ID | 1695789006 | 


* Example of request :
```json
HTTP 1.1 delete https://api.instagram.com/v1/media/1695789006/comments 
```





* Example of request :




#### get /media/{media-id}/likes
Get a list of users who have liked this media.

* Request Parameters :
  * Content-Type Accepted : application/json


* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -4.377305E+244 | 
| tag-name | path | string | yes | Tag name |  eros. Lorem ipsum dolor sit amet, consectetur adi | 
| media-id | path | integer | yes | Media ID | 1592094042 | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/1592094042/likes 
```





* Example of request :



#### post /media/{media-id}/likes
Set a like on this media by the currently authenticated user.
* Request Parameters :
  * Content-Type Accepted : application/json


* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -4.377305E+244 | 
| tag-name | path | string | yes | Tag name |  eros. Lorem ipsum dolor sit amet, consectetur adi | 
| media-id | path | integer | yes | Media ID | 1592094042 | 


* Example of request :
```json
HTTP 1.1 post https://api.instagram.com/v1/media/1592094042/likes 
```





* Example of request :



#### delete /media/{media-id}/likes
Remove a like on this media by the currently authenticated user.

* Request Parameters :
  * Content-Type Accepted : application/json


* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -4.377305E+244 | 
| tag-name | path | string | yes | Tag name |  eros. Lorem ipsum dolor sit amet, consectetur adi | 
| media-id | path | integer | yes | Media ID | 1592094042 | 


* Example of request :
```json
HTTP 1.1 delete https://api.instagram.com/v1/media/1592094042/likes 
```





* Example of request :




### Resource : media1
#### get /media1/{shortcode}
This endpoint returns the same response as **GET** `/media/media-id`.

A media object's shortcode can be found in its shortlink URL.
An example shortlink is `http://instagram.com/p/D/`
Its corresponding shortcode is D.

* Request Parameters :
  * Content-Type Accepted : application/json


* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -4.377305E+244 | 
| tag-name | path | string | yes | Tag name |  eros. Lorem ipsum dolor sit amet, consectetur adi | 
| shortcode | path | string | yes | The media shortcode |  fringilla orci, gr | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media1/+fringilla+orci%2C+gr 
```





* Example of request :




### Resource : tags
#### get /tags/{tag-name}
Get information about a tag object.
* Request Parameters :
  * Content-Type Accepted : application/json


* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -4.377305E+244 | 
| tag-name | path | string | yes | Tag name | suada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morb | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/tags/suada%2C+egestas+velit+id%2C+semper+felis.+Fusce+ac+dui+nisl.+Donec+ultricies+nibh+eu+leo+consectetur+congue+quis+nec+tellus.+Morb 
```





* Example of request :




#### get /tags/{tag-name}/media/recent
Get a list of recently tagged media. Use the `max_tag_id` and
`min_tag_id` parameters in the pagination response to paginate through
these objects.

* Request Parameters :
  * Content-Type Accepted : application/json


* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -4.377305E+244 | 
| tag-name | path | string | yes | Tag name | ligula non consequat. Pellentesque elit libero, fa | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/tags/ligula+non+consequat.+Pellentesque+elit+libero%2C+fa/media/recent 
```





* Example of request :




#### get /tags/search

* Request Parameters :
  * Content-Type Accepted : application/json


* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -4.377305E+244 | 
| tag-name | path | string | yes | Tag name |  eros. Lorem ipsum dolor sit amet, consectetur adi | 
| q | query | string |  | A valid tag name without a leading #. (eg. snowy, nofilter) | ales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/tags/search?q=ales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Mauris%20vehicula%20ex%20lorem%2C%20ut%20ornare%20purus%20ultrices%20nec. 
```





* Example of request :




### Resource : locations
#### get /locations/{location-id}
Get information about a location.
* Request Parameters :
  * Content-Type Accepted : application/json


* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -4.377305E+244 | 
| tag-name | path | string | yes | Tag name |  eros. Lorem ipsum dolor sit amet, consectetur adi | 
| location-id | path | integer | yes | Location ID | 811787699 | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/locations/811787699 
```





* Example of request :




#### get /locations/{location-id}/media/recent
Get a list of recent media objects from a given location.
* Request Parameters :
  * Content-Type Accepted : application/json


* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -4.377305E+244 | 
| tag-name | path | string | yes | Tag name |  eros. Lorem ipsum dolor sit amet, consectetur adi | 
| location-id | path | integer | yes | Location ID | 1493959901 | 
| max_timestamp | query | integer |  | Return media before this UNIX timestamp. | -316177682 | 
| min_timestamp | query | integer |  | Return media after this UNIX timestamp. | -798668851 | 
| min_id | query | string |  | Return media later than this min_id. | felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam d | 
| max_id | query | string |  | Return media earlier than this max_id. | is odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nul | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/locations/1493959901/media/recent?max_timestamp=-316177682&min_timestamp=-798668851&min_id=felis%20sit%20amet%20ipsum%20euismod%20ullamcorper.%20Phasellus%20sit%20amet%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20d&max_id=is%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nul 
```





* Example of request :




#### get /locations/search
Search for a location by geographic coordinate.
* Request Parameters :
  * Content-Type Accepted : application/json


* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -4.377305E+244 | 
| tag-name | path | string | yes | Tag name |  eros. Lorem ipsum dolor sit amet, consectetur adi | 
| distance | query | integer |  | Default is 1000m (distance=1000), max distance is 5000. | 1622810583 | 
| facebook_places_id | query | integer |  | Returns a location mapped off of a Facebook places id. If used, aFoursquare id and lat, lng are not required. | 1625974121 | 
| foursquare_id | query | integer |  | returns a location mapped off of a foursquare v1 api location id.If used, you are not required to use lat and lng. Note that thismethod is deprecated; you should use the new foursquare IDs with V2of their API. | -1989507929 | 
| lat | query | number |  | atitude of the center search coordinate. If used, lng is required. | 6.428993E+45 | 
| lng | query | number |  | ongitude of the center search coordinate. If used, lat is required. | 7.747508E+15 | 
| foursquare_v2_id | query | integer |  | Returns a location mapped off of a foursquare v2 api location id. Ifused, you are not required to use lat and lng. | -257478522 | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/locations/search?distance=1622810583&facebook_places_id=1625974121&foursquare_id=-1989507929&lat=6.428993E+45&lng=7.747508E+15&foursquare_v2_id=-257478522 
```





* Example of request :




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
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -4.377305E+244 | 
| tag-name | path | string | yes | Tag name |  eros. Lorem ipsum dolor sit amet, consectetur adi | 
| geo-id | path | integer | yes | Geolocation ID | -1950628159 | 
| count | query | integer |  | Max number of media to return. | -1714494319 | 
| min_id | query | integer |  | Return media before this `min_id`. | -467023518 | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/geographies/-1950628159/media/recent?count=-1714494319&min_id=-467023518 
```





* Example of request :






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

