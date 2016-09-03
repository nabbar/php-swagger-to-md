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

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :---: |  
| user-id | path | number | yes | The user identifier number | 
| tag-name | path | string | yes | Tag name | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/5.11957E-230 
```




#### get /users/self/feed
See the authenticated user's feed.
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :---: |  
| user-id | path | number | yes | The user identifier number | 
| tag-name | path | string | yes | Tag name | 
| count | query | integer |  | Count of media to return. | 
| max_id | query | integer |  | Return media earlier than this max_id.s | 
| min_id | query | integer |  | Return media later than this min_id. | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/self/feed?count=1037184901&max_id=277949256&min_id=206907552 
```




#### get /users/{user-id}/media/recent

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :---: |  
| user-id | path | number | yes | The user identifier number | 
| tag-name | path | string | yes | Tag name | 
| count | query | integer |  | Count of media to return. | 
| max_timestamp | query | integer |  | Return media before this UNIX timestamp. | 
| min_timestamp | query | integer |  | Return media after this UNIX timestamp. | 
| min_id | query | string |  | Return media later than this min_id. | 
| max_id | query | string |  | Return media earlier than this max_id. | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/7.69752E-164/media/recent?count=319102350&max_timestamp=49467047&min_timestamp=1659088231&min_id=et%20vestibulum%20quam.%20Morbi%20tincidunt%20pretium%20sodales.%20Etiam%20dignissim%20risus%20non%20felis%20scelerisque%20aliquet.%20Phasellus%20faucibus%20urna%20arcu%2C%20et%20&max_id=%20eu%20bibendum%20orci.%20Sed%20eros%20massa%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eg 
```




#### get /users/self/media/liked
See the list of media liked by the authenticated user.
Private media is returned as long as the authenticated user
has permissionto view that media. Liked media lists are only
available for the currently authenticated user.

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :---: |  
| user-id | path | number | yes | The user identifier number | 
| tag-name | path | string | yes | Tag name | 
| count | query | integer |  | Count of media to return. | 
| max_like_id | query | integer |  | Return media liked before this id. | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/self/media/liked?count=-1569324783&max_like_id=1635699334 
```




#### get /users/search
Search for a user by name.
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :---: |  
| user-id | path | number | yes | The user identifier number | 
| tag-name | path | string | yes | Tag name | 
| q | query | string | yes | A query string | 
| count | query | string |  | Number of users to return. | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/search?q=%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidun&count=ctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20m 
```




#### get /users/{user-id}/follows
Get the list of users this user follows.
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :---: |  
| user-id | path | number | yes | The user identifier number | 
| tag-name | path | string | yes | Tag name | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/-3.62242E-211/follows 
```




#### get /users/{user-id}/followed-by
Get the list of users this user is followed by.
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :---: |  
| user-id | path | number | yes | The user identifier number | 
| tag-name | path | string | yes | Tag name | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/7.972088E%2B132/followed-by 
```




#### get /users/self/requested-by
List the users who have requested this user's permission to follow.

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :---: |  
| user-id | path | number | yes | The user identifier number | 
| tag-name | path | string | yes | Tag name | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/self/requested-by 
```




#### post /users/{user-id}/relationship
Modify the relationship between the current user and thetarget user.

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :---: |  
| user-id | path | number | yes | The user identifier number | 
| tag-name | path | string | yes | Tag name | 
| body | body | string |  | One of follow/unfollow/block/unblock/approve/ignore. | 

* Example of request :
```json
HTTP 1.1 post https://api.instagram.com/v1/users/5.603619E%2B211/relationship 
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

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :---: |  
| user-id | path | number | yes | The user identifier number | 
| tag-name | path | string | yes | Tag name | 
| media-id | path | integer | yes | The media ID | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/978393759 
```




#### get /media/search
Search for media in a given area. The default time span is set to 5
days. The time span must not exceed 7 days. Defaults time stamps cover
the last 5 days. Can return mix of image and video types.

* Request Parameters :

| Name | Location | Type | Required | Validation | Default | Description |  
| :---: | :---: | :---: | :---: | :---: | :---: | :---: |  
| user-id | path | number | yes |  |  | The user identifier number | 
| tag-name | path | string | yes |  |  | Tag name | 
| LAT | query | number |  |  |  | Latitude of the center search coordinate. If used, lng is required. | 
| MIN_TIMESTAMP | query | integer |  |  |  | A unix timestamp. All media returned will be taken later thanthis timestamp. | 
| LNG | query | number |  |  |  | Longitude of the center search coordinate. If used, lat is required. | 
| MAX_TIMESTAMP | query | integer |  |  |  | A unix timestamp. All media returned will be taken earlier than thistimestamp. | 
| DISTANCE | query | integer |  | Value : <= 5000 | 1000 | Default is 1km (distance=1000), max distance is 5km. | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/search?LAT=-778944&MIN_TIMESTAMP=-1379522862&LNG=-3.130328E-30&MAX_TIMESTAMP=-2099716927&DISTANCE=1000 
```




#### get /media/popular
Get a list of what media is most popular at the moment.
Can return mix of image and video types.

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :---: |  
| user-id | path | number | yes | The user identifier number | 
| tag-name | path | string | yes | Tag name | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/popular 
```




#### get /media/{media-id}/comments
Get a list of recent comments on a media object.

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :---: |  
| user-id | path | number | yes | The user identifier number | 
| tag-name | path | string | yes | Tag name | 
| media-id | path | integer | yes | Media ID | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/-1859917241/comments 
```



#### post /media/{media-id}/comments
Create a comment on a media object with the following rules:

* The total length of the comment cannot exceed 300 characters.
* The comment cannot contain more than 4 hashtags.
* The comment cannot contain more than 1 URL.
* The comment cannot consist of all capital letters.

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :---: |  
| user-id | path | number | yes | The user identifier number | 
| tag-name | path | string | yes | Tag name | 
| media-id | path | integer | yes | Media ID | 
| body | body | number |  | Text to post as a comment on the media object as specified inmedia-id. | 

* Example of request :
```json
HTTP 1.1 post https://api.instagram.com/v1/media/-1859917241/comments 
Content-Type: application/json
Content-Length: 13
-1.468851e-44
```



#### delete /media/{media-id}/comments
Remove a comment either on the authenticated user's media object or
authored by the authenticated user.

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :---: |  
| user-id | path | number | yes | The user identifier number | 
| tag-name | path | string | yes | Tag name | 
| media-id | path | integer | yes | Media ID | 

* Example of request :
```json
HTTP 1.1 delete https://api.instagram.com/v1/media/-1859917241/comments 
```




#### get /media/{media-id}/likes
Get a list of users who have liked this media.

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :---: |  
| user-id | path | number | yes | The user identifier number | 
| tag-name | path | string | yes | Tag name | 
| media-id | path | integer | yes | Media ID | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/-2076803373/likes 
```



#### post /media/{media-id}/likes
Set a like on this media by the currently authenticated user.
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :---: |  
| user-id | path | number | yes | The user identifier number | 
| tag-name | path | string | yes | Tag name | 
| media-id | path | integer | yes | Media ID | 

* Example of request :
```json
HTTP 1.1 post https://api.instagram.com/v1/media/-2076803373/likes 
```



#### delete /media/{media-id}/likes
Remove a like on this media by the currently authenticated user.

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :---: |  
| user-id | path | number | yes | The user identifier number | 
| tag-name | path | string | yes | Tag name | 
| media-id | path | integer | yes | Media ID | 

* Example of request :
```json
HTTP 1.1 delete https://api.instagram.com/v1/media/-2076803373/likes 
```




### Resource : media1
#### get /media1/{shortcode}
This endpoint returns the same response as **GET** `/media/media-id`.

A media object's shortcode can be found in its shortlink URL.
An example shortlink is `http://instagram.com/p/D/`
Its corresponding shortcode is D.

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :---: |  
| user-id | path | number | yes | The user identifier number | 
| tag-name | path | string | yes | Tag name | 
| shortcode | path | string | yes | The media shortcode | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media1/ibus+luctus+ante+nec%2C+volutpat+dictum+neque.+Donec+molestie%2C+eros+in+pretium+pulvinar%2C+est+leo+vehicula+lectus%2C+a+cursus+neque+erat+vitae+odio.+Sed+sed+neque+dignissim%2C+imperdiet+nunc+maximus%2C+finibus+erat.+Proin+id+scelerisque+ipsum.+Quisque+porta+ 
```




### Resource : tags
#### get /tags/{tag-name}
Get information about a tag object.
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :---: |  
| user-id | path | number | yes | The user identifier number | 
| tag-name | path | string | yes | Tag name | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/tags/sed%2C+dapibus+vel+elit.+Sed+efficitur%2C+mi+sit+amet+fermentum+ultricies%2C+felis+felis+aliquam+enim%2C+id+feugiat+magna+elit+in+sapien.+Sed+malesuada%2C+velit+eu+dapibus+vehicula%2C+sem+tortor+accumsan+nibh%2C+sed+pellentesque+enim+metus+in+eros.+Mauris+sollicitu 
```




#### get /tags/{tag-name}/media/recent
Get a list of recently tagged media. Use the `max_tag_id` and
`min_tag_id` parameters in the pagination response to paginate through
these objects.

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :---: |  
| user-id | path | number | yes | The user identifier number | 
| tag-name | path | string | yes | Tag name | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/tags/inia+id+tempor+sed%2C+dapibus+vel+elit.+Sed+efficitur%2C+mi+sit+amet+fermentum+ultricies%2C+felis+felis+aliquam+enim%2C+id+feugiat+m/media/recent 
```




#### get /tags/search

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :---: |  
| user-id | path | number | yes | The user identifier number | 
| tag-name | path | string | yes | Tag name | 
| q | query | string |  | A valid tag name without a leading #. (eg. snowy, nofilter) | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/tags/search?q=cibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neque%20dignissim%2C%20imperdiet%20nunc%20maximus%2C%20finibus%20erat.%20Proin%20id%20scelerisque%20 
```




### Resource : locations
#### get /locations/{location-id}
Get information about a location.
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :---: |  
| user-id | path | number | yes | The user identifier number | 
| tag-name | path | string | yes | Tag name | 
| location-id | path | integer | yes | Location ID | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/locations/940598188 
```




#### get /locations/{location-id}/media/recent
Get a list of recent media objects from a given location.
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :---: |  
| user-id | path | number | yes | The user identifier number | 
| tag-name | path | string | yes | Tag name | 
| location-id | path | integer | yes | Location ID | 
| max_timestamp | query | integer |  | Return media before this UNIX timestamp. | 
| min_timestamp | query | integer |  | Return media after this UNIX timestamp. | 
| min_id | query | string |  | Return media later than this min_id. | 
| max_id | query | string |  | Return media earlier than this max_id. | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/locations/1478939901/media/recent?max_timestamp=187815493&min_timestamp=1122219157&min_id=id%20tempor%20sed%2C%20dapibus%20vel%20e&max_id=erra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pell 
```




#### get /locations/search
Search for a location by geographic coordinate.
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :---: |  
| user-id | path | number | yes | The user identifier number | 
| tag-name | path | string | yes | Tag name | 
| distance | query | integer |  | Default is 1000m (distance=1000), max distance is 5000. | 
| facebook_places_id | query | integer |  | Returns a location mapped off of a Facebook places id. If used, aFoursquare id and lat, lng are not required. | 
| foursquare_id | query | integer |  | returns a location mapped off of a foursquare v1 api location id.If used, you are not required to use lat and lng. Note that thismethod is deprecated; you should use the new foursquare IDs with V2of their API. | 
| lat | query | number |  | atitude of the center search coordinate. If used, lng is required. | 
| lng | query | number |  | ongitude of the center search coordinate. If used, lat is required. | 
| foursquare_v2_id | query | integer |  | Returns a location mapped off of a foursquare v2 api location id. Ifused, you are not required to use lat and lng. | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/locations/search?distance=-1155622368&facebook_places_id=867100385&foursquare_id=1895053095&lat=-8.67193E+113&lng=3.456561E-205&foursquare_v2_id=-1926881649 
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

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :---: |  
| user-id | path | number | yes | The user identifier number | 
| tag-name | path | string | yes | Tag name | 
| geo-id | path | integer | yes | Geolocation ID | 
| count | query | integer |  | Max number of media to return. | 
| min_id | query | integer |  | Return media before this `min_id`. | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/geographies/72390979/media/recent?count=-861482012&min_id=-1415880909 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

