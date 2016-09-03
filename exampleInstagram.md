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

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user-id | path | number |  no |  |  |  |  |  |  | The user identifier number |
| tag-name | path | string |  no |  |  |  |  |  |  | Tag name |

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/6.000969E%2B244 
```




#### get /users/self/feed
See the authenticated user's feed.
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user-id | path | number |  no |  |  |  |  |  |  | The user identifier number |
| tag-name | path | string |  no |  |  |  |  |  |  | Tag name |
| count | query | integer |  no |  |  |  |  |  |  | Count of media to return. |
| max_id | query | integer |  no |  |  |  |  |  |  | Return media earlier than this max_id.s |
| min_id | query | integer |  no |  |  |  |  |  |  | Return media later than this min_id. |

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/self/feed?count=-1218447187&max_id=-890099060&min_id=882360829 
```




#### get /users/{user-id}/media/recent

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user-id | path | number |  no |  |  |  |  |  |  | The user identifier number |
| tag-name | path | string |  no |  |  |  |  |  |  | Tag name |
| count | query | integer |  no |  |  |  |  |  |  | Count of media to return. |
| max_timestamp | query | integer |  no |  |  |  |  |  |  | Return media before this UNIX timestamp. |
| min_timestamp | query | integer |  no |  |  |  |  |  |  | Return media after this UNIX timestamp. |
| min_id | query | string |  no |  |  |  |  |  |  | Return media later than this min_id. |
| max_id | query | string |  no |  |  |  |  |  |  | Return media earlier than this max_id. |

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/-629171400000/media/recent?count=-1302283850&max_timestamp=-201889084&min_timestamp=-1876309161&min_id=ien.%20Sed%20malesuada%2C%20velit%20eu%20dapibus%20vehicula%2C%20sem%20tort&max_id=eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20Suspendisse%20justo%20turpis%2C%20lacinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20s 
```




#### get /users/self/media/liked
See the list of media liked by the authenticated user.
Private media is returned as long as the authenticated user
has permissionto view that media. Liked media lists are only
available for the currently authenticated user.

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user-id | path | number |  no |  |  |  |  |  |  | The user identifier number |
| tag-name | path | string |  no |  |  |  |  |  |  | Tag name |
| count | query | integer |  no |  |  |  |  |  |  | Count of media to return. |
| max_like_id | query | integer |  no |  |  |  |  |  |  | Return media liked before this id. |

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/self/media/liked?count=824706731&max_like_id=-1540874518 
```




#### get /users/search
Search for a user by name.
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user-id | path | number |  no |  |  |  |  |  |  | The user identifier number |
| tag-name | path | string |  no |  |  |  |  |  |  | Tag name |
| q | query | string |  no |  |  |  |  |  |  | A query string |
| count | query | string |  no |  |  |  |  |  |  | Number of users to return. |

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/search?q=s.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20dignissim%20augue%20interdum%20sed.%20Vestibulum%20eget%20luctus%20metus%2C%20eu%20bibendum%20orci.%20Sed%20eros%20&count=ec%20massa%20egestas%2C%20sed%20mollis%20est%20molestie.%20Aenean%20quam%20nisi%2C%20posuere%20sed%20varius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20ar 
```




#### get /users/{user-id}/follows
Get the list of users this user follows.
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user-id | path | number |  no |  |  |  |  |  |  | The user identifier number |
| tag-name | path | string |  no |  |  |  |  |  |  | Tag name |

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/-1.697639E-91/follows 
```




#### get /users/{user-id}/followed-by
Get the list of users this user is followed by.
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user-id | path | number |  no |  |  |  |  |  |  | The user identifier number |
| tag-name | path | string |  no |  |  |  |  |  |  | Tag name |

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/6.436049E-223/followed-by 
```




#### get /users/self/requested-by
List the users who have requested this user's permission to follow.

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user-id | path | number |  no |  |  |  |  |  |  | The user identifier number |
| tag-name | path | string |  no |  |  |  |  |  |  | Tag name |

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/self/requested-by 
```




#### post /users/{user-id}/relationship
Modify the relationship between the current user and thetarget user.

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user-id | path | number |  no |  |  |  |  |  |  | The user identifier number |
| tag-name | path | string |  no |  |  |  |  |  |  | Tag name |
| body | body | string |  no |  |  |  |  |  |  | One of follow/unfollow/block/unblock/approve/ignore. |

* Example of request :
```json
HTTP 1.1 post https://api.instagram.com/v1/users/3.097071E%2B154/relationship 
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

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user-id | path | number |  no |  |  |  |  |  |  | The user identifier number |
| tag-name | path | string |  no |  |  |  |  |  |  | Tag name |
| media-id | path | integer |  no |  |  |  |  |  |  | The media ID |

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/-997113738 
```




#### get /media/search
Search for media in a given area. The default time span is set to 5
days. The time span must not exceed 7 days. Defaults time stamps cover
the last 5 days. Can return mix of image and video types.

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user-id | path | number |  no |  |  |  |  |  |  | The user identifier number |
| tag-name | path | string |  no |  |  |  |  |  |  | Tag name |
| LAT | query | number |  no |  |  |  |  |  |  | Latitude of the center search coordinate. If used, lng is required. |
| MIN_TIMESTAMP | query | integer |  no |  |  |  |  |  |  | A unix timestamp. All media returned will be taken later thanthis timestamp. |
| LNG | query | number |  no |  |  |  |  |  |  | Longitude of the center search coordinate. If used, lat is required. |
| MAX_TIMESTAMP | query | integer |  no |  |  |  |  |  |  | A unix timestamp. All media returned will be taken earlier than thistimestamp. |
| DISTANCE | query | integer |  no | Value : <= 5000 |  |  |  | 1000 |  | Default is 1km (distance=1000), max distance is 5km. |

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/search?LAT=3.379785E+198&MIN_TIMESTAMP=2122774824&LNG=3.124992E-235&MAX_TIMESTAMP=-133490584&DISTANCE=1000 
```




#### get /media/popular
Get a list of what media is most popular at the moment.
Can return mix of image and video types.

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user-id | path | number |  no |  |  |  |  |  |  | The user identifier number |
| tag-name | path | string |  no |  |  |  |  |  |  | Tag name |

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/popular 
```




#### get /media/{media-id}/comments
Get a list of recent comments on a media object.

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user-id | path | number |  no |  |  |  |  |  |  | The user identifier number |
| tag-name | path | string |  no |  |  |  |  |  |  | Tag name |
| media-id | path | integer |  no |  |  |  |  |  |  | Media ID |

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/-1738778192/comments 
```



#### post /media/{media-id}/comments
Create a comment on a media object with the following rules:

* The total length of the comment cannot exceed 300 characters.
* The comment cannot contain more than 4 hashtags.
* The comment cannot contain more than 1 URL.
* The comment cannot consist of all capital letters.

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user-id | path | number |  no |  |  |  |  |  |  | The user identifier number |
| tag-name | path | string |  no |  |  |  |  |  |  | Tag name |
| media-id | path | integer |  no |  |  |  |  |  |  | Media ID |
| body | body | number |  no |  |  |  |  |  |  | Text to post as a comment on the media object as specified inmedia-id. |

* Example of request :
```json
HTTP 1.1 post https://api.instagram.com/v1/media/-1738778192/comments 
Content-Type: application/json
Content-Length: 14
-1.158641e-132
```



#### delete /media/{media-id}/comments
Remove a comment either on the authenticated user's media object or
authored by the authenticated user.

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user-id | path | number |  no |  |  |  |  |  |  | The user identifier number |
| tag-name | path | string |  no |  |  |  |  |  |  | Tag name |
| media-id | path | integer |  no |  |  |  |  |  |  | Media ID |

* Example of request :
```json
HTTP 1.1 delete https://api.instagram.com/v1/media/-1738778192/comments 
```




#### get /media/{media-id}/likes
Get a list of users who have liked this media.

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user-id | path | number |  no |  |  |  |  |  |  | The user identifier number |
| tag-name | path | string |  no |  |  |  |  |  |  | Tag name |
| media-id | path | integer |  no |  |  |  |  |  |  | Media ID |

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/72893512/likes 
```



#### post /media/{media-id}/likes
Set a like on this media by the currently authenticated user.
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user-id | path | number |  no |  |  |  |  |  |  | The user identifier number |
| tag-name | path | string |  no |  |  |  |  |  |  | Tag name |
| media-id | path | integer |  no |  |  |  |  |  |  | Media ID |

* Example of request :
```json
HTTP 1.1 post https://api.instagram.com/v1/media/72893512/likes 
```



#### delete /media/{media-id}/likes
Remove a like on this media by the currently authenticated user.

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user-id | path | number |  no |  |  |  |  |  |  | The user identifier number |
| tag-name | path | string |  no |  |  |  |  |  |  | Tag name |
| media-id | path | integer |  no |  |  |  |  |  |  | Media ID |

* Example of request :
```json
HTTP 1.1 delete https://api.instagram.com/v1/media/72893512/likes 
```




### Resource : media1
#### get /media1/{shortcode}
This endpoint returns the same response as **GET** `/media/media-id`.

A media object's shortcode can be found in its shortlink URL.
An example shortlink is `http://instagram.com/p/D/`
Its corresponding shortcode is D.

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user-id | path | number |  no |  |  |  |  |  |  | The user identifier number |
| tag-name | path | string |  no |  |  |  |  |  |  | Tag name |
| shortcode | path | string |  no |  |  |  |  |  |  | The media shortcode |

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media1/In+non+lectus+eu+nunc+interdum+laoreet+a+ut+dui.+Sed+e 
```




### Resource : tags
#### get /tags/{tag-name}
Get information about a tag object.
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user-id | path | number |  no |  |  |  |  |  |  | The user identifier number |
| tag-name | path | string |  no |  |  |  |  |  |  | Tag name |

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/tags/uis+condimentum+eget%2C+tristique+ut+quam.+Maecenas+et+velit+dignissim%2C+tincidunt+justo+quis%2C+iaculis+odio.+Mauris+volutpat+dignissim+mi+eget+lacinia.+In+nisi+odio%2C+porta+ut+quam+non%2C+imperdiet+varius+orci.+Donec+consectetur+sed+ante+sit+amet+sag 
```




#### get /tags/{tag-name}/media/recent
Get a list of recently tagged media. Use the `max_tag_id` and
`min_tag_id` parameters in the pagination response to paginate through
these objects.

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user-id | path | number |  no |  |  |  |  |  |  | The user identifier number |
| tag-name | path | string |  no |  |  |  |  |  |  | Tag name |

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/tags/vinar+vel+metus+et%2C+molestie+pretium+tortor.+Praesent+interdum+fringilla+orci%2C+gravida+ornare+nibh+sollicitudin+et.+Curabitur+pulvinar+metus+massa%2C+malesuada+facilisis+sapien+finibus+at.+Nullam+finibus+urna+vel+auctor+fringilla.+M/media/recent 
```




#### get /tags/search

* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user-id | path | number |  no |  |  |  |  |  |  | The user identifier number |
| tag-name | path | string |  no |  |  |  |  |  |  | Tag name |
| q | query | string |  no |  |  |  |  |  |  | A valid tag name without a leading #. (eg. snowy, nofilter) |

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/tags/search?q=arius%20sodales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20vel%20ultrices%20augue.%20Suspendisse%20potenti.%20Ma 
```




### Resource : locations
#### get /locations/{location-id}
Get information about a location.
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user-id | path | number |  no |  |  |  |  |  |  | The user identifier number |
| tag-name | path | string |  no |  |  |  |  |  |  | Tag name |
| location-id | path | integer |  no |  |  |  |  |  |  | Location ID |

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/locations/-1179292352 
```




#### get /locations/{location-id}/media/recent
Get a list of recent media objects from a given location.
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user-id | path | number |  no |  |  |  |  |  |  | The user identifier number |
| tag-name | path | string |  no |  |  |  |  |  |  | Tag name |
| location-id | path | integer |  no |  |  |  |  |  |  | Location ID |
| max_timestamp | query | integer |  no |  |  |  |  |  |  | Return media before this UNIX timestamp. |
| min_timestamp | query | integer |  no |  |  |  |  |  |  | Return media after this UNIX timestamp. |
| min_id | query | string |  no |  |  |  |  |  |  | Return media later than this min_id. |
| max_id | query | string |  no |  |  |  |  |  |  | Return media earlier than this max_id. |

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/locations/1358125031/media/recent?max_timestamp=-626116550&min_timestamp=-1033433199&min_id=sse%20justo%20turpis%2C&max_id=ortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor 
```




#### get /locations/search
Search for a location by geographic coordinate.
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user-id | path | number |  no |  |  |  |  |  |  | The user identifier number |
| tag-name | path | string |  no |  |  |  |  |  |  | Tag name |
| distance | query | integer |  no |  |  |  |  |  |  | Default is 1000m (distance=1000), max distance is 5000. |
| facebook_places_id | query | integer |  no |  |  |  |  |  |  | Returns a location mapped off of a Facebook places id. If used, aFoursquare id and lat, lng are not required. |
| foursquare_id | query | integer |  no |  |  |  |  |  |  | returns a location mapped off of a foursquare v1 api location id.If used, you are not required to use lat and lng. Note that thismethod is deprecated; you should use the new foursquare IDs with V2of their API. |
| lat | query | number |  no |  |  |  |  |  |  | atitude of the center search coordinate. If used, lng is required. |
| lng | query | number |  no |  |  |  |  |  |  | ongitude of the center search coordinate. If used, lat is required. |
| foursquare_v2_id | query | integer |  no |  |  |  |  |  |  | Returns a location mapped off of a foursquare v2 api location id. Ifused, you are not required to use lat and lng. |

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/locations/search?distance=-1808722283&facebook_places_id=1053798802&foursquare_id=2033017817&lat=-2.808974E-113&lng=3.963278E-175&foursquare_v2_id=799232443 
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

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user-id | path | number |  no |  |  |  |  |  |  | The user identifier number |
| tag-name | path | string |  no |  |  |  |  |  |  | Tag name |
| geo-id | path | integer |  no |  |  |  |  |  |  | Geolocation ID |
| count | query | integer |  no |  |  |  |  |  |  | Max number of media to return. |
| min_id | query | integer |  no |  |  |  |  |  |  | Return media before this `min_id`. |

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/geographies/-191058859/media/recent?count=1956200152&min_id=803829810 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

