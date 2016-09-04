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


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -4.340274E+47 | 
| tag-name | path | string | yes | Tag name | is est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/-4.340274E%2B47 
```




#### get /users/self/feed
See the authenticated user's feed.
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 4.55729E+114 | 
| tag-name | path | string | yes | Tag name | is est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. | 
| count | query | integer |  | Count of media to return. | 975564053 | 
| max_id | query | integer |  | Return media earlier than this max_id.s | -483267129 | 
| min_id | query | integer |  | Return media later than this min_id. | -589056234 | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/self/feed?count=975564053&max_id=-483267129&min_id=-589056234 
```




#### get /users/{user-id}/media/recent

* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 7.377E-108 | 
| tag-name | path | string | yes | Tag name | is est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. | 
| count | query | integer |  | Count of media to return. | 1661753711 | 
| max_timestamp | query | integer |  | Return media before this UNIX timestamp. | 38328651 | 
| min_timestamp | query | integer |  | Return media after this UNIX timestamp. | 1946345076 | 
| min_id | query | string |  | Return media later than this min_id. | utate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar | 
| max_id | query | string |  | Return media earlier than this max_id. | stibulum magna ut, suscipit est. Etia | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/7.377E-108/media/recent?count=1661753711&max_timestamp=38328651&min_timestamp=1946345076&min_id=utate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar&max_id=stibulum%20magna%20ut%2C%20suscipit%20est.%20Etia 
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
| user-id | path | number | yes | The user identifier number | 4.55729E+114 | 
| tag-name | path | string | yes | Tag name | is est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. | 
| count | query | integer |  | Count of media to return. | 2146790922 | 
| max_like_id | query | integer |  | Return media liked before this id. | -70632715 | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/self/media/liked?count=2146790922&max_like_id=-70632715 
```




#### get /users/search
Search for a user by name.
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 4.55729E+114 | 
| tag-name | path | string | yes | Tag name | is est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. | 
| q | query | string | yes | A query string | ris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent int | 
| count | query | string |  | Number of users to return. | rnare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada f | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/search?q=ris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20int&count=rnare%20nibh%20sollicitudin%20et.%20Curabitur%20pulvinar%20metus%20massa%2C%20malesuada%20f 
```




#### get /users/{user-id}/follows
Get the list of users this user follows.
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -7.881052E+233 | 
| tag-name | path | string | yes | Tag name | is est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/-7.881052E%2B233/follows 
```




#### get /users/{user-id}/followed-by
Get the list of users this user is followed by.
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -1.155898E-108 | 
| tag-name | path | string | yes | Tag name | is est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/-1.155898E-108/followed-by 
```




#### get /users/self/requested-by
List the users who have requested this user's permission to follow.

* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 4.55729E+114 | 
| tag-name | path | string | yes | Tag name | is est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. | 


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
| user-id | path | number | yes | The user identifier number | -4.339506E+85 | 
| tag-name | path | string | yes | Tag name | is est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. | 
| body | body | string |  | One of follow/unfollow/block/unblock/approve/ignore. | follow | 


* Example of request :
```json
HTTP 1.1 post https://api.instagram.com/v1/users/-4.339506E%2B85/relationship 
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
| user-id | path | number | yes | The user identifier number | 4.55729E+114 | 
| tag-name | path | string | yes | Tag name | is est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. | 
| media-id | path | integer | yes | The media ID | -705378162 | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/-705378162 
```




#### get /media/search
Search for media in a given area. The default time span is set to 5
days. The time span must not exceed 7 days. Defaults time stamps cover
the last 5 days. Can return mix of image and video types.

* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Validation | Default | Description | Example |  
| :---: | :---: | :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes |  |  | The user identifier number | 4.55729E+114 | 
| tag-name | path | string | yes |  |  | Tag name | is est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. | 
| LAT | query | number |  |  |  | Latitude of the center search coordinate. If used, lng is required. | -7.976078E+178 | 
| MIN_TIMESTAMP | query | integer |  |  |  | A unix timestamp. All media returned will be taken later thanthis timestamp. | -211046428 | 
| LNG | query | number |  |  |  | Longitude of the center search coordinate. If used, lat is required. | -8.21694E-169 | 
| MAX_TIMESTAMP | query | integer |  |  |  | A unix timestamp. All media returned will be taken earlier than thistimestamp. | -1173856196 | 
| DISTANCE | query | integer |  | Value <= 5000 | 1000 | Default is 1km (distance=1000), max distance is 5km. | 1000 | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/search?LAT=-7.976078E+178&MIN_TIMESTAMP=-211046428&LNG=-8.21694E-169&MAX_TIMESTAMP=-1173856196&DISTANCE=1000 
```




#### get /media/popular
Get a list of what media is most popular at the moment.
Can return mix of image and video types.

* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 4.55729E+114 | 
| tag-name | path | string | yes | Tag name | is est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. | 


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
| user-id | path | number | yes | The user identifier number | 4.55729E+114 | 
| tag-name | path | string | yes | Tag name | is est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. | 
| media-id | path | integer | yes | Media ID | -1634776920 | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/-1634776920/comments 
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
| user-id | path | number | yes | The user identifier number | 4.55729E+114 | 
| tag-name | path | string | yes | Tag name | is est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. | 
| media-id | path | integer | yes | Media ID | -1634776920 | 
| body | body | number |  | Text to post as a comment on the media object as specified inmedia-id. | -4.677848E+59 | 


* Example of request :
```json
HTTP 1.1 post https://api.instagram.com/v1/media/-1634776920/comments 
Content-Type: application/json
Content-Length: 13
-4.677848e+59
```



#### delete /media/{media-id}/comments
Remove a comment either on the authenticated user's media object or
authored by the authenticated user.

* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 4.55729E+114 | 
| tag-name | path | string | yes | Tag name | is est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. | 
| media-id | path | integer | yes | Media ID | -1634776920 | 


* Example of request :
```json
HTTP 1.1 delete https://api.instagram.com/v1/media/-1634776920/comments 
```




#### get /media/{media-id}/likes
Get a list of users who have liked this media.

* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 4.55729E+114 | 
| tag-name | path | string | yes | Tag name | is est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. | 
| media-id | path | integer | yes | Media ID | 1735845448 | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/1735845448/likes 
```



#### post /media/{media-id}/likes
Set a like on this media by the currently authenticated user.
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 4.55729E+114 | 
| tag-name | path | string | yes | Tag name | is est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. | 
| media-id | path | integer | yes | Media ID | 1735845448 | 


* Example of request :
```json
HTTP 1.1 post https://api.instagram.com/v1/media/1735845448/likes 
```



#### delete /media/{media-id}/likes
Remove a like on this media by the currently authenticated user.

* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 4.55729E+114 | 
| tag-name | path | string | yes | Tag name | is est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. | 
| media-id | path | integer | yes | Media ID | 1735845448 | 


* Example of request :
```json
HTTP 1.1 delete https://api.instagram.com/v1/media/1735845448/likes 
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
| user-id | path | number | yes | The user identifier number | 4.55729E+114 | 
| tag-name | path | string | yes | Tag name | is est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. | 
| shortcode | path | string | yes | The media shortcode | acus. Nulla justo arcu, sod | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media1/acus.+Nulla+justo+arcu%2C+sod 
```




### Resource : tags
#### get /tags/{tag-name}
Get information about a tag object.
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 4.55729E+114 | 
| tag-name | path | string | yes | Tag name | e. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna u | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/tags/e.+Nunc+et+lorem+eros.+Suspendisse+eget+nibh+pulvinar%2C+vestibulum+magna+u 
```




#### get /tags/{tag-name}/media/recent
Get a list of recently tagged media. Use the `max_tag_id` and
`min_tag_id` parameters in the pagination response to paginate through
these objects.

* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 4.55729E+114 | 
| tag-name | path | string | yes | Tag name | rper. Fusce nec est quam. Pellentesque vulputate sapien a | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/tags/rper.+Fusce+nec+est+quam.+Pellentesque+vulputate+sapien+a/media/recent 
```




#### get /tags/search

* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 4.55729E+114 | 
| tag-name | path | string | yes | Tag name | is est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. | 
| q | query | string |  | A valid tag name without a leading #. (eg. snowy, nofilter) | etus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabi | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/tags/search?q=etus%20et%2C%20molestie%20pretium%20tortor.%20Praesent%20interdum%20fringilla%20orci%2C%20gravida%20ornare%20nibh%20sollicitudin%20et.%20Curabi 
```




### Resource : locations
#### get /locations/{location-id}
Get information about a location.
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 4.55729E+114 | 
| tag-name | path | string | yes | Tag name | is est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. | 
| location-id | path | integer | yes | Location ID | 1373386502 | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/locations/1373386502 
```




#### get /locations/{location-id}/media/recent
Get a list of recent media objects from a given location.
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 4.55729E+114 | 
| tag-name | path | string | yes | Tag name | is est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. | 
| location-id | path | integer | yes | Location ID | -125386062 | 
| max_timestamp | query | integer |  | Return media before this UNIX timestamp. | 897575071 | 
| min_timestamp | query | integer |  | Return media after this UNIX timestamp. | 1363309709 | 
| min_id | query | string |  | Return media later than this min_id. | dunt pretium sodales. Etiam d | 
| max_id | query | string |  | Return media earlier than this max_id. | ndum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. I | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/locations/-125386062/media/recent?max_timestamp=897575071&min_timestamp=1363309709&min_id=dunt%20pretium%20sodales.%20Etiam%20d&max_id=ndum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20I 
```




#### get /locations/search
Search for a location by geographic coordinate.
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 4.55729E+114 | 
| tag-name | path | string | yes | Tag name | is est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. | 
| distance | query | integer |  | Default is 1000m (distance=1000), max distance is 5000. | 1784709840 | 
| facebook_places_id | query | integer |  | Returns a location mapped off of a Facebook places id. If used, aFoursquare id and lat, lng are not required. | -614246774 | 
| foursquare_id | query | integer |  | returns a location mapped off of a foursquare v1 api location id.If used, you are not required to use lat and lng. Note that thismethod is deprecated; you should use the new foursquare IDs with V2of their API. | -1081102586 | 
| lat | query | number |  | atitude of the center search coordinate. If used, lng is required. | -8.71738E+154 | 
| lng | query | number |  | ongitude of the center search coordinate. If used, lat is required. | 3.466527E+49 | 
| foursquare_v2_id | query | integer |  | Returns a location mapped off of a foursquare v2 api location id. Ifused, you are not required to use lat and lng. | -1372491314 | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/locations/search?distance=1784709840&facebook_places_id=-614246774&foursquare_id=-1081102586&lat=-8.71738E+154&lng=3.466527E+49&foursquare_v2_id=-1372491314 
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
| user-id | path | number | yes | The user identifier number | 4.55729E+114 | 
| tag-name | path | string | yes | Tag name | is est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. | 
| geo-id | path | integer | yes | Geolocation ID | 1513911135 | 
| count | query | integer |  | Max number of media to return. | -1635464774 | 
| min_id | query | integer |  | Return media before this `min_id`. | -974849666 | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/geographies/1513911135/media/recent?count=-1635464774&min_id=-974849666 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

