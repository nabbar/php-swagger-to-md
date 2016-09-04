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
| user-id | path | number | yes | The user identifier number | -4.34163E-248 | 
| tag-name | path | string | yes | Tag name | tus, eu bibendum orci. | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/-4.34163E-248 
```






#### get /users/self/feed
See the authenticated user's feed.
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -2.194741E-5 | 
| tag-name | path | string | yes | Tag name | tus, eu bibendum orci. | 
| count | query | integer |  | Count of media to return. | -1084943922 | 
| max_id | query | integer |  | Return media earlier than this max_id.s | 1880191038 | 
| min_id | query | integer |  | Return media later than this min_id. | -1545586148 | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/self/feed?count=-1084943922&max_id=1880191038&min_id=-1545586148 
```






#### get /users/{user-id}/media/recent

* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -3.207997E-53 | 
| tag-name | path | string | yes | Tag name | tus, eu bibendum orci. | 
| count | query | integer |  | Count of media to return. | 1203348951 | 
| max_timestamp | query | integer |  | Return media before this UNIX timestamp. | -1808347102 | 
| min_timestamp | query | integer |  | Return media after this UNIX timestamp. | 512612691 | 
| min_id | query | string |  | Return media later than this min_id. | ristique ut quam. Maecenas et velit dignissim, tincidunt justo qui | 
| max_id | query | string |  | Return media earlier than this max_id. | sis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etia | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/-3.207997E-53/media/recent?count=1203348951&max_timestamp=-1808347102&min_timestamp=512612691&min_id=ristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20qui&max_id=sis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etia 
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
| user-id | path | number | yes | The user identifier number | -2.194741E-5 | 
| tag-name | path | string | yes | Tag name | tus, eu bibendum orci. | 
| count | query | integer |  | Count of media to return. | 1562822120 | 
| max_like_id | query | integer |  | Return media liked before this id. | 1802832557 | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/self/media/liked?count=1562822120&max_like_id=1802832557 
```






#### get /users/search
Search for a user by name.
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -2.194741E-5 | 
| tag-name | path | string | yes | Tag name | tus, eu bibendum orci. | 
| q | query | string | yes | A query string | lesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam | 
| count | query | string |  | Number of users to return. | s in eros. Mauris sollicitudin varius purus, nec condimentum tel | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/search?q=lesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam&count=s%20in%20eros.%20Mauris%20sollicitudin%20varius%20purus%2C%20nec%20condimentum%20tel 
```






#### get /users/{user-id}/follows
Get the list of users this user follows.
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 7.559262E-198 | 
| tag-name | path | string | yes | Tag name | tus, eu bibendum orci. | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/7.559262E-198/follows 
```






#### get /users/{user-id}/followed-by
Get the list of users this user is followed by.
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 5.399568E+28 | 
| tag-name | path | string | yes | Tag name | tus, eu bibendum orci. | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/5.399568E%2B28/followed-by 
```






#### get /users/self/requested-by
List the users who have requested this user's permission to follow.

* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -2.194741E-5 | 
| tag-name | path | string | yes | Tag name | tus, eu bibendum orci. | 


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
| user-id | path | number | yes | The user identifier number | 4.41562E+240 | 
| tag-name | path | string | yes | Tag name | tus, eu bibendum orci. | 
| action | body | string |  | One of follow/unfollow/block/unblock/approve/ignore. | follow | 


* Example of request :
```json
HTTP 1.1 post https://api.instagram.com/v1/users/4.41562E%2B240/relationship 
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
| user-id | path | number | yes | The user identifier number | -2.194741E-5 | 
| tag-name | path | string | yes | Tag name | tus, eu bibendum orci. | 
| media-id | path | integer | yes | The media ID | -788625533 | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/-788625533 
```






#### get /media/search
Search for media in a given area. The default time span is set to 5
days. The time span must not exceed 7 days. Defaults time stamps cover
the last 5 days. Can return mix of image and video types.

* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Validation | Default | Description | Example |  
| :---: | :---: | :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes |  |  | The user identifier number | -2.194741E-5 | 
| tag-name | path | string | yes |  |  | Tag name | tus, eu bibendum orci. | 
| LAT | query | number |  |  |  | Latitude of the center search coordinate. If used, lng is required. | -4.419698E-121 | 
| MIN_TIMESTAMP | query | integer |  |  |  | A unix timestamp. All media returned will be taken later thanthis timestamp. | 1798533473 | 
| LNG | query | number |  |  |  | Longitude of the center search coordinate. If used, lat is required. | 4.741687E-20 | 
| MAX_TIMESTAMP | query | integer |  |  |  | A unix timestamp. All media returned will be taken earlier than thistimestamp. | 664192031 | 
| DISTANCE | query | integer |  | Value <= 5000 | 1000 | Default is 1km (distance=1000), max distance is 5km. | 1000 | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/search?LAT=-4.419698E-121&MIN_TIMESTAMP=1798533473&LNG=4.741687E-20&MAX_TIMESTAMP=664192031&DISTANCE=1000 
```






#### get /media/popular
Get a list of what media is most popular at the moment.
Can return mix of image and video types.

* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -2.194741E-5 | 
| tag-name | path | string | yes | Tag name | tus, eu bibendum orci. | 


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
| user-id | path | number | yes | The user identifier number | -2.194741E-5 | 
| tag-name | path | string | yes | Tag name | tus, eu bibendum orci. | 
| media-id | path | integer | yes | Media ID | 406770530 | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/406770530/comments 
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
| user-id | path | number | yes | The user identifier number | -2.194741E-5 | 
| tag-name | path | string | yes | Tag name | tus, eu bibendum orci. | 
| media-id | path | integer | yes | Media ID | 406770530 | 
| TEXT | body | number |  | Text to post as a comment on the media object as specified inmedia-id. | -4.121684E-39 | 


* Example of request :
```json
HTTP 1.1 post https://api.instagram.com/v1/media/406770530/comments 
Content-Type: application/json
Content-Length: 13
-4.121684e-39
```





#### delete /media/{media-id}/comments
Remove a comment either on the authenticated user's media object or
authored by the authenticated user.

* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -2.194741E-5 | 
| tag-name | path | string | yes | Tag name | tus, eu bibendum orci. | 
| media-id | path | integer | yes | Media ID | 406770530 | 


* Example of request :
```json
HTTP 1.1 delete https://api.instagram.com/v1/media/406770530/comments 
```






#### get /media/{media-id}/likes
Get a list of users who have liked this media.

* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -2.194741E-5 | 
| tag-name | path | string | yes | Tag name | tus, eu bibendum orci. | 
| media-id | path | integer | yes | Media ID | -640991969 | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/-640991969/likes 
```





#### post /media/{media-id}/likes
Set a like on this media by the currently authenticated user.
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -2.194741E-5 | 
| tag-name | path | string | yes | Tag name | tus, eu bibendum orci. | 
| media-id | path | integer | yes | Media ID | -640991969 | 


* Example of request :
```json
HTTP 1.1 post https://api.instagram.com/v1/media/-640991969/likes 
```





#### delete /media/{media-id}/likes
Remove a like on this media by the currently authenticated user.

* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -2.194741E-5 | 
| tag-name | path | string | yes | Tag name | tus, eu bibendum orci. | 
| media-id | path | integer | yes | Media ID | -640991969 | 


* Example of request :
```json
HTTP 1.1 delete https://api.instagram.com/v1/media/-640991969/likes 
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
| user-id | path | number | yes | The user identifier number | -2.194741E-5 | 
| tag-name | path | string | yes | Tag name | tus, eu bibendum orci. | 
| shortcode | path | string | yes | The media shortcode | e odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices  | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media1/e+odio.+Donec+quis+facilisis+arcu%2C+vel+ultrices+augue.+Suspendisse+potenti.+Mauris+vehicula+ex+lorem%2C+ut+ornare+purus+ultrices+ 
```






### Resource : tags
#### get /tags/{tag-name}
Get information about a tag object.
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -2.194741E-5 | 
| tag-name | path | string | yes | Tag name | ar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Cura | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/tags/ar%2C+vestibulum+magna+ut%2C+suscipit+est.+Etiam+varius+lobortis+porttitor.+Mauris+vel+ultrices+erat%2C+at+hendrerit+enim.+Sed+leo+ex%2C+pulvinar+vel+metus+et%2C+molestie+pretium+tortor.+Praesent+interdum+fringilla+orci%2C+gravida+ornare+nibh+sollicitudin+et.+Cura 
```






#### get /tags/{tag-name}/media/recent
Get a list of recently tagged media. Use the `max_tag_id` and
`min_tag_id` parameters in the pagination response to paginate through
these objects.

* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -2.194741E-5 | 
| tag-name | path | string | yes | Tag name | nte sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas ve | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/tags/nte+sit+amet+sagittis.+In+non+lectus+eu+nunc+interdum+laoreet+a+ut+dui.+Sed+eu+nulla+malesuada%2C+egestas+ve/media/recent 
```






#### get /tags/search

* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -2.194741E-5 | 
| tag-name | path | string | yes | Tag name | tus, eu bibendum orci. | 
| q | query | string |  | A valid tag name without a leading #. (eg. snowy, nofilter) | nia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem torto | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/tags/search?q=nia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum%20ultricies%2C%20felis%20felis%20aliquam%20enim%2C%20id%20feugiat%20magna%20elit%20in%20sapien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20torto 
```






### Resource : locations
#### get /locations/{location-id}
Get information about a location.
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -2.194741E-5 | 
| tag-name | path | string | yes | Tag name | tus, eu bibendum orci. | 
| location-id | path | integer | yes | Location ID | -2065353336 | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/locations/-2065353336 
```






#### get /locations/{location-id}/media/recent
Get a list of recent media objects from a given location.
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -2.194741E-5 | 
| tag-name | path | string | yes | Tag name | tus, eu bibendum orci. | 
| location-id | path | integer | yes | Location ID | -2102198960 | 
| max_timestamp | query | integer |  | Return media before this UNIX timestamp. | -1111994174 | 
| min_timestamp | query | integer |  | Return media after this UNIX timestamp. | -1668142185 | 
| min_id | query | string |  | Return media later than this min_id. | inia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh | 
| max_id | query | string |  | Return media earlier than this max_id. | orta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuad | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/locations/-2102198960/media/recent?max_timestamp=-1111994174&min_timestamp=-1668142185&min_id=inia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuada%2C%20egestas%20velit%20id%2C%20semper%20felis.%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh&max_id=orta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20eu%20nunc%20interdum%20laoreet%20a%20ut%20dui.%20Sed%20eu%20nulla%20malesuad 
```






#### get /locations/search
Search for a location by geographic coordinate.
* Request Parameters :
  * Content-Type Accepted : application/json


| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -2.194741E-5 | 
| tag-name | path | string | yes | Tag name | tus, eu bibendum orci. | 
| distance | query | integer |  | Default is 1000m (distance=1000), max distance is 5000. | 385580308 | 
| facebook_places_id | query | integer |  | Returns a location mapped off of a Facebook places id. If used, aFoursquare id and lat, lng are not required. | 1313031464 | 
| foursquare_id | query | integer |  | returns a location mapped off of a foursquare v1 api location id.If used, you are not required to use lat and lng. Note that thismethod is deprecated; you should use the new foursquare IDs with V2of their API. | -645426550 | 
| lat | query | number |  | atitude of the center search coordinate. If used, lng is required. | 5.540489E+74 | 
| lng | query | number |  | ongitude of the center search coordinate. If used, lat is required. | 4.954928E+222 | 
| foursquare_v2_id | query | integer |  | Returns a location mapped off of a foursquare v2 api location id. Ifused, you are not required to use lat and lng. | 11942271 | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/locations/search?distance=385580308&facebook_places_id=1313031464&foursquare_id=-645426550&lat=5.540489E+74&lng=4.954928E+222&foursquare_v2_id=11942271 
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
| user-id | path | number | yes | The user identifier number | -2.194741E-5 | 
| tag-name | path | string | yes | Tag name | tus, eu bibendum orci. | 
| geo-id | path | integer | yes | Geolocation ID | -697363021 | 
| count | query | integer |  | Max number of media to return. | 1914460135 | 
| min_id | query | integer |  | Return media before this `min_id`. | -548327113 | 


* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/geographies/-697363021/media/recent?count=1914460135&min_id=-548327113 
```








---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

