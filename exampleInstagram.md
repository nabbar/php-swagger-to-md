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
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/-1.582175E%2B255 
```




#### get /users/self/feed
See the authenticated user's feed.
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/self/feed?count=84130005&max_id=-2127860340&min_id=-1087301438 
```




#### get /users/{user-id}/media/recent

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/6.858015E%2B31/media/recent?count=235988121&max_timestamp=338466045&min_timestamp=-619211682&min_id=it%2C%20bibendum%20tortor%20ac%2C%20congue%20eros.%20Lorem%20ipsum%20dolor%20sit%20amet%2C%20consectetur%20adipiscing%20elit.%20S&max_id=acinia%20id%20tempor%20sed%2C%20dapibus%20vel%20elit.%20Sed%20efficitur%2C%20mi%20sit%20amet%20fermentum 
```




#### get /users/self/media/liked
See the list of media liked by the authenticated user.
Private media is returned as long as the authenticated user
has permissionto view that media. Liked media lists are only
available for the currently authenticated user.

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/self/media/liked?count=1366530092&max_like_id=-576411022 
```




#### get /users/search
Search for a user by name.
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/search?q=lutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20sed%20ante%20sit%20amet%20sagittis.%20In%20non%20lectus%20&count=is%20eu%20tortor%20blandit%2C%20bibendum%20tortor%20ac%2C%20 
```




#### get /users/{user-id}/follows
Get the list of users this user follows.
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/-6.571253E-250/follows 
```




#### get /users/{user-id}/followed-by
Get the list of users this user is followed by.
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/-8.075073E-112/followed-by 
```




#### get /users/self/requested-by
List the users who have requested this user's permission to follow.

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/self/requested-by 
```




#### post /users/{user-id}/relationship
Modify the relationship between the current user and thetarget user.

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 post https://api.instagram.com/v1/users/1.170659E%2B93/relationship 
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
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/166145794 
```




#### get /media/search
Search for media in a given area. The default time span is set to 5
days. The time span must not exceed 7 days. Defaults time stamps cover
the last 5 days. Can return mix of image and video types.

* Request Parameters :

| Name | Location | Type | Required | Validation | Default | Description |  
| :---: | :---: | :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  |  |  | 
|  |  |  |  |  |  |  | 
|  |  |  |  |  |  |  | 
|  |  |  |  |  |  |  | 
|  |  |  |  |  |  |  | 
|  |  |  |  |  |  |  | 
|  |  |  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/search?LAT=-5.949456E+155&MIN_TIMESTAMP=-16781513&LNG=-5.403561E-180&MAX_TIMESTAMP=497169545&DISTANCE=1000 
```




#### get /media/popular
Get a list of what media is most popular at the moment.
Can return mix of image and video types.

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/popular 
```




#### get /media/{media-id}/comments
Get a list of recent comments on a media object.

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/-1696305854/comments 
```



#### post /media/{media-id}/comments
Create a comment on a media object with the following rules:

* The total length of the comment cannot exceed 300 characters.
* The comment cannot contain more than 4 hashtags.
* The comment cannot contain more than 1 URL.
* The comment cannot consist of all capital letters.

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 post https://api.instagram.com/v1/media/-1696305854/comments 
Content-Type: application/json
Content-Length: 14
-1.226589e-206
```



#### delete /media/{media-id}/comments
Remove a comment either on the authenticated user's media object or
authored by the authenticated user.

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 delete https://api.instagram.com/v1/media/-1696305854/comments 
```




#### get /media/{media-id}/likes
Get a list of users who have liked this media.

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/-1163321595/likes 
```



#### post /media/{media-id}/likes
Set a like on this media by the currently authenticated user.
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 post https://api.instagram.com/v1/media/-1163321595/likes 
```



#### delete /media/{media-id}/likes
Remove a like on this media by the currently authenticated user.

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 delete https://api.instagram.com/v1/media/-1163321595/likes 
```




### Resource : media1
#### get /media1/{shortcode}
This endpoint returns the same response as **GET** `/media/media-id`.

A media object's shortcode can be found in its shortlink URL.
An example shortlink is `http://instagram.com/p/D/`
Its corresponding shortcode is D.

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media1/ignissim+augue+interdum+sed.+Vestibulum+eget+luctus+metus%2C+eu+bibendum+orci.+Sed+eros+massa%2C+vehicula+quis+condimentum+eg 
```




### Resource : tags
#### get /tags/{tag-name}
Get information about a tag object.
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/tags/+potenti.+Mauris+vehicula+ex+lorem%2C+ut+ornare+purus+ultrices+nec.+Vestibulum+elementum+felis+sit+amet+ipsum+euismod+ullamcorper.+Phasellus+sit+amet+vestibulum+quam.+Morbi+tincidunt+pretium+sodales.+Etiam+dignissim+r 
```




#### get /tags/{tag-name}/media/recent
Get a list of recently tagged media. Use the `max_tag_id` and
`min_tag_id` parameters in the pagination response to paginate through
these objects.

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/tags/+euismod+ullamcorper.+Phasellus+sit+amet+vestibulum+quam.+Morbi+tincidunt+pretium+sodales.+Etiam+dignissim+risus+non+felis+scelerisque+aliquet.+Phasellus+faucibus+urna+arcu%2C+et+dignissim+augue+interdum+sed.+Vestibulum+eget+luctus+metus%2C+eu+bibendum+/media/recent 
```




#### get /tags/search

* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/tags/search?q=est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20consequat.%20Pellentesque%20elit%20libero%2C%20faucibus%20luctus%20ante%20nec%2C%20volutpat%20dictum%20neque.%20Donec%20molestie%2C%20eros%20in%20pretium%20pulvinar%2C%20est%20leo%20vehicula%20lectus%2C%20a%20cursus%20neque%20erat%20vitae%20odio.%20Sed%20sed%20neq 
```




### Resource : locations
#### get /locations/{location-id}
Get information about a location.
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/locations/1683646544 
```




#### get /locations/{location-id}/media/recent
Get a list of recent media objects from a given location.
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/locations/-500337335/media/recent?max_timestamp=-915921636&min_timestamp=1963072559&min_id=elis%20sce&max_id=%2C%20vehicula%20quis%20condimentum%20eget%2C%20tristique%20ut%20quam.%20Maecenas%20et%20velit%20dignissim%2C%20tincidunt%20justo%20quis%2C%20iaculis%20odio.%20Mauris%20volutpat%20dignissim%20mi%20eget%20lacinia.%20In%20nisi%20odio%2C%20porta%20ut%20quam%20non%2C%20imperdiet%20varius%20orci.%20Donec%20consectetur%20s 
```




#### get /locations/search
Search for a location by geographic coordinate.
* Request Parameters :

| Name | Location | Type | Required | Description |  
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/locations/search?distance=1215682030&facebook_places_id=-735315044&foursquare_id=889133312&lat=-6.844479E+70&lng=6.880726E-119&foursquare_v2_id=1706940829 
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
| :---: | :---: | :---: | :---: | :--- |  
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 
|  |  |  |  |  | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/geographies/1121098396/media/recent?count=1307324612&min_id=-215930981 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

