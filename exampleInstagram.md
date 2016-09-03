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

| Name |  |  |  
| --- | --- | --- |  
| user-id | path | number | 
| tag-name | path | string | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/-3.02132E-247 
```




#### get /users/self/feed
See the authenticated user's feed.
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| user-id | path | number | 
| tag-name | path | string | 
| count | query | integer | 
| max_id | query | integer | 
| min_id | query | integer | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/self/feed?count=-1010290509&max_id=-564986790&min_id=-399780623 
```




#### get /users/{user-id}/media/recent

* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| user-id | path | number | 
| tag-name | path | string | 
| count | query | integer | 
| max_timestamp | query | integer | 
| min_timestamp | query | integer | 
| min_id | query | string | 
| max_id | query | string | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/-2.097553E%2B184/media/recent?count=-1666785746&max_timestamp=1965889077&min_timestamp=-683965323&min_id=%20Fusce%20ac%20dui%20nisl.%20Donec%20ultricies%20nibh%20eu%20leo%20consectetur%20congue%20quis%20nec%20tellus.%20Morbi%20consequat%20mi%20id%20eros%20viverra%20ullamcorper.%20Fusce%20nec%20est%20quam.%20Pellentesque%20vulputate%20sapien%20at%20turpis%20molestie%20congue.%20Nunc%20et%20lorem%20eros.%20&max_id=odales%2C%20sagittis%20sed%20ex.%20Vivamus%20id%20vulputate%20odio.%20Donec%20quis%20facilisis%20arcu%2C%20v 
```




#### get /users/self/media/liked
See the list of media liked by the authenticated user.
Private media is returned as long as the authenticated user
has permissionto view that media. Liked media lists are only
available for the currently authenticated user.

* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| user-id | path | number | 
| tag-name | path | string | 
| count | query | integer | 
| max_like_id | query | integer | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/self/media/liked?count=938434228&max_like_id=-1058165590 
```




#### get /users/search
Search for a user by name.
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| user-id | path | number | 
| tag-name | path | string | 
| q | query | string | 
| count | query | string | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/search?q=tor%20ac%2C%20congue%20eros&count=re%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tinci 
```




#### get /users/{user-id}/follows
Get the list of users this user follows.
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| user-id | path | number | 
| tag-name | path | string | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/-3.22879E-84/follows 
```




#### get /users/{user-id}/followed-by
Get the list of users this user is followed by.
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| user-id | path | number | 
| tag-name | path | string | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/4.931295E-20/followed-by 
```




#### get /users/self/requested-by
List the users who have requested this user's permission to follow.

* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| user-id | path | number | 
| tag-name | path | string | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/self/requested-by 
```




#### post /users/{user-id}/relationship
Modify the relationship between the current user and thetarget user.

* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| user-id | path | number | 
| tag-name | path | string | 
| body | body | string | 

* Example of request :
```json
HTTP 1.1 post https://api.instagram.com/v1/users/-6.584425E%2B135/relationship 
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

| Name |  |  |  
| --- | --- | --- |  
| user-id | path | number | 
| tag-name | path | string | 
| media-id | path | integer | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/-86437839 
```




#### get /media/search
Search for media in a given area. The default time span is set to 5
days. The time span must not exceed 7 days. Defaults time stamps cover
the last 5 days. Can return mix of image and video types.

* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| user-id | path | number | 
| tag-name | path | string | 
| LAT | query | number | 
| MIN_TIMESTAMP | query | integer | 
| LNG | query | number | 
| MAX_TIMESTAMP | query | integer | 
| DISTANCE | query | integer | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/search?LAT=3.721052E+218&MIN_TIMESTAMP=-1629259412&LNG=-1.641445E-65&MAX_TIMESTAMP=583501927&DISTANCE=1000 
```




#### get /media/popular
Get a list of what media is most popular at the moment.
Can return mix of image and video types.

* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| user-id | path | number | 
| tag-name | path | string | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/popular 
```




#### get /media/{media-id}/comments
Get a list of recent comments on a media object.

* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| user-id | path | number | 
| tag-name | path | string | 
| media-id | path | integer | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/-128332403/comments 
```



#### post /media/{media-id}/comments
Create a comment on a media object with the following rules:

* The total length of the comment cannot exceed 300 characters.
* The comment cannot contain more than 4 hashtags.
* The comment cannot contain more than 1 URL.
* The comment cannot consist of all capital letters.

* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| user-id | path | number | 
| tag-name | path | string | 
| media-id | path | integer | 
| body | body | number | 

* Example of request :
```json
HTTP 1.1 post https://api.instagram.com/v1/media/-128332403/comments 
Content-Type: application/json
Content-Length: 14
-3.316186e-100
```



#### delete /media/{media-id}/comments
Remove a comment either on the authenticated user's media object or
authored by the authenticated user.

* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| user-id | path | number | 
| tag-name | path | string | 
| media-id | path | integer | 

* Example of request :
```json
HTTP 1.1 delete https://api.instagram.com/v1/media/-128332403/comments 
```




#### get /media/{media-id}/likes
Get a list of users who have liked this media.

* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| user-id | path | number | 
| tag-name | path | string | 
| media-id | path | integer | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/-432361855/likes 
```



#### post /media/{media-id}/likes
Set a like on this media by the currently authenticated user.
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| user-id | path | number | 
| tag-name | path | string | 
| media-id | path | integer | 

* Example of request :
```json
HTTP 1.1 post https://api.instagram.com/v1/media/-432361855/likes 
```



#### delete /media/{media-id}/likes
Remove a like on this media by the currently authenticated user.

* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| user-id | path | number | 
| tag-name | path | string | 
| media-id | path | integer | 

* Example of request :
```json
HTTP 1.1 delete https://api.instagram.com/v1/media/-432361855/likes 
```




### Resource : media1
#### get /media1/{shortcode}
This endpoint returns the same response as **GET** `/media/media-id`.

A media object's shortcode can be found in its shortlink URL.
An example shortlink is `http://instagram.com/p/D/`
Its corresponding shortcode is D.

* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| user-id | path | number | 
| tag-name | path | string | 
| shortcode | path | string | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media1/+Pellentesque+elit+libero%2C+faucibus+luctus+ante+nec%2C+volutpat+dictum+neque.+Do 
```




### Resource : tags
#### get /tags/{tag-name}
Get information about a tag object.
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| user-id | path | number | 
| tag-name | path | string | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/tags/n+varius+purus%2C+nec+condimentum+tellus+sagittis+at.+Nullam+vel+metus+ac+quam+gravida+pellentesque.+Nullam+ultricies+turpis+ 
```




#### get /tags/{tag-name}/media/recent
Get a list of recently tagged media. Use the `max_tag_id` and
`min_tag_id` parameters in the pagination response to paginate through
these objects.

* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| user-id | path | number | 
| tag-name | path | string | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/tags/tur+pulvinar+metus+massa%2C+malesuada+facilisis+sapien+finibus+at.+Nulla/media/recent 
```




#### get /tags/search

* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| user-id | path | number | 
| tag-name | path | string | 
| q | query | string | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/tags/search?q=es%20ac%20commodo%20quis%2C%20laoreet%20a%20ipsum.%20Duis%20sem%20elit%2C%20posuere%20eu%20facilisis%20nec%2C%20tempus%20ac%20ipsum.%20Ut%20molestie%20aliquet%20est%2C%20posuere%20tincidunt%20elit.%20Etiam%20convallis%20eu%20ligula%20non%20c 
```




### Resource : locations
#### get /locations/{location-id}
Get information about a location.
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| user-id | path | number | 
| tag-name | path | string | 
| location-id | path | integer | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/locations/-224909652 
```




#### get /locations/{location-id}/media/recent
Get a list of recent media objects from a given location.
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| user-id | path | number | 
| tag-name | path | string | 
| location-id | path | integer | 
| max_timestamp | query | integer | 
| min_timestamp | query | integer | 
| min_id | query | string | 
| max_id | query | string | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/locations/-1284334243/media/recent?max_timestamp=-122452172&min_timestamp=-1446123030&min_id=Nunc%20et%20lorem%20eros.%20Suspendisse%20eget%20nibh%20pulvinar%2C%20vestibulum%20magna%20ut%2C%20suscipit%20est.%20Etiam%20varius%20lobortis%20porttitor.%20Mauris%20vel%20ultrices%20erat%2C%20at%20hendrerit%20enim.%20Sed%20leo%20ex%2C%20pulvinar%20vel%20metus%20et%2C%20molestie%20pretium%20tortor.%20Praesent&max_id=psum%20sapien%2C%20bibendum%20at%20placerat%20sit%20amet%2C%20volutpat%20sed%20lacus.%20Nulla%20justo%20arcu%2C%20sodales%20ac%20commodo%20quis%2C%20lao 
```




#### get /locations/search
Search for a location by geographic coordinate.
* Request Parameters :

| Name |  |  |  
| --- | --- | --- |  
| user-id | path | number | 
| tag-name | path | string | 
| distance | query | integer | 
| facebook_places_id | query | integer | 
| foursquare_id | query | integer | 
| lat | query | number | 
| lng | query | number | 
| foursquare_v2_id | query | integer | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/locations/search?distance=-1348108787&facebook_places_id=-1647251668&foursquare_id=664767982&lat=3.261476E-58&lng=3.552367E+29&foursquare_v2_id=1502448059 
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

| Name |  |  |  
| --- | --- | --- |  
| user-id | path | number | 
| tag-name | path | string | 
| geo-id | path | integer | 
| count | query | integer | 
| min_id | query | integer | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/geographies/1012897022/media/recent?count=371036605&min_id=1851228027 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

