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
| user-id | path | number | yes | The user identifier number | 6.644683E%2B83 | 
| tag-name | path | string | yes | Tag name | amet+fermentum+ultrici | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/6.644683E%252B83 
```

* <p name="objectproperty_57d585f6cad4f">Object counts :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| media | integer | -1205787360 | 
| follows | integer | 1445530192 | 
| follwed_by | integer | -169958445 | 

* <p name="objectproperty_57d585f6cea08">Object data :</p> 

| Name | Type | Definition | Example |  
| :---: | :---: | :---: | :--- |  
| id | integer |  | 1063397719 | 
| username | string |  |  sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque  | 
| full_name | string |  | ugue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus u | 
| profile_picture | string |  |  augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condime | 
| bio | string |  | nti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque | 
| website | string |  | sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat mag | 
| counts |  | [data/properties/counts](#objectproperty_57d585f6cad4f) |  | 





#### get /users/self/feed
See the authenticated user's feed.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 4.321859E-26 | 
| tag-name | path | string | yes | Tag name | amet+fermentum+ultrici | 
| count | query | integer |  | Count of media to return. | -1851979623 | 
| max_id | query | integer |  | Return media earlier than this max_id.s | -1811664908 | 
| min_id | query | integer |  | Return media later than this min_id. | 1341604746 | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/self/feed?count=-1851979623&max_id=-1811664908&min_id=1341604746 
```

* <p name="schema_57d585f6d9e65">Object tags/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| media_count | integer | -376756166 | 
| name | string | ellus sit amet vestibu | 

* <p name="objectproperty_57d585f6defa5">Object user :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| user_name | string | ng elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehi | 
| full_name | string | pat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. | 
| id | integer | 466746984 | 
| profile_picture | string | suada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi  | 

* <p name="schema_57d585f6df472">Object users_in_photo/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| user_name | string | la ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tinci | 
| full_name | string | um pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed | 
| id | integer | 1272657876 | 
| profile_picture | string | e quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulv | 

* <p name="objectproperty_57d585f6e05ac">Object location :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| id | string | si, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus  | 
| name | string | d ullamcorper | 
| latitude | number | 4.269635E+124 | 
| longitude | number | -1.198833E-248 | 

* <p name="objectproperty_57d585f6e1956">Object from :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| user_name | string | c maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vulputate odio. | 
| full_name | string | tor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel au | 
| id | integer | 839772979 | 
| profile_picture | string |  tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor b | 

* <p name="schema_57d585f6d880a">Object data/items/schema :</p>

| Name | Type | Definition | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| type | string |  |  |  felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris solli | 
| created_time | integer |  | Epoc time (ms) | 48495383 | 
| filter | string |  |  |  elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque | 
| tags | array | [ [tags/items/schema](#schema_57d585f6d9e65) ] |  |  | 
| id | integer |  |  | 1210234148 | 
| user |  | [schema/properties/user](#objectproperty_57d585f6defa5) |  |  | 
| users_in_photo | array | [ [users_in_photo/items/schema](#schema_57d585f6df472) ] |  |  | 
| location |  | [schema/properties/location](#objectproperty_57d585f6e05ac) |  |  | 
| comments: |  | [schema/properties/comments:](#objectproperty_57d585f6e263b) |  |  | 
| likes |  | [schema/properties/likes](#objectproperty_57d585f6e39d3) |  |  | 
| images |  | [schema/properties/images](#objectproperty_57d585f6e58fd) |  |  | 
| videos |  | [schema/properties/videos](#objectproperty_57d585f6e6f32) |  |  | 

* <p name="objectproperty_57d585f6e263b">Object comments: :</p> 

| Name | Type | Definition | Example |  
| :---: | :---: | :---: | :--- |  
| count | integer |  | 939412097 | 
| data | array | [ [data/items/schema](#schema_57d585f6e0f04) ] |  | 

* <p name="objectproperty_57d585f6e39d3">Object likes :</p> 

| Name | Type | Definition | Example |  
| :---: | :---: | :---: | :--- |  
| count | integer |  | 1514533538 | 
| data | array | [ [data/items/schema](#schema_57d585f6e2dc0) ] |  | 

* <p name="objectproperty_57d585f6e4582">Object low_resolution :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| width | integer | 1694059056 | 
| height | integer | 14035592 | 
| url | string | t nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh  | 

* <p name="objectproperty_57d585f6e4d6e">Object thumbnail :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| width | integer | -1227801933 | 
| height | integer | 2016075908 | 
| url | string | et varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interd | 

* <p name="objectproperty_57d585f6e5546">Object standard_resolution :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| width | integer | -1069292187 | 
| height | integer | -556895722 | 
| url | string | incidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet vari | 

* <p name="objectproperty_57d585f6e58fd">Object images :</p> 

| Name | Type | Definition |  
| :---: | :---: | :---: |  
| low_resolution |  | [images/properties/low_resolution](#objectproperty_57d585f6e4582) | 
| thumbnail |  | [images/properties/thumbnail](#objectproperty_57d585f6e4d6e) | 
| standard_resolution |  | [images/properties/standard_resolution](#objectproperty_57d585f6e5546) | 

* <p name="objectproperty_57d585f6e638c">Object low_resolution :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| width | integer | 1299722001 | 
| height | integer | 1202756930 | 
| url | string | Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent interdum fringilla orc | 

* <p name="objectproperty_57d585f6e6b79">Object standard_resolution :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| width | integer | -729044464 | 
| height | integer | -682000362 | 
| url | string | us, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi | 

* <p name="objectproperty_57d585f6e6f32">Object videos :</p> 

| Name | Type | Definition |  
| :---: | :---: | :---: |  
| low_resolution |  | [videos/properties/low_resolution](#objectproperty_57d585f6e638c) | 
| standard_resolution |  | [videos/properties/standard_resolution](#objectproperty_57d585f6e6b79) | 





#### get /users/{user-id}/media/recent

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 1.654765E-83 | 
| tag-name | path | string | yes | Tag name | amet+fermentum+ultrici | 
| count | query | integer |  | Count of media to return. | -768273068 | 
| max_timestamp | query | integer |  | Return media before this UNIX timestamp. | 1671657952 | 
| min_timestamp | query | integer |  | Return media after this UNIX timestamp. | -198616769 | 
| min_id | query | string |  | Return media later than this min_id. | in+et.+Curabitur+pulvinar+metus+massa%2C+malesuada+facilisis+sapien+finibus+at.+Nullam+ | 
| max_id | query | string |  | Return media earlier than this max_id. | r+pulvinar+metus+massa%2C+malesuada+facilisis+sapien+finibus+at.+Nullam+finibus+urna+vel+auctor+fringilla.+Mauris+eu+tortor+blandit%2C+bibendum+tortor+ac%2C+congue+eros.+Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Suspendisse+justo | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/1.654765E-83/media/recent?count=-768273068&max_timestamp=1671657952&min_timestamp=-198616769&min_id=in%2Bet.%2BCurabitur%2Bpulvinar%2Bmetus%2Bmassa%252C%2Bmalesuada%2Bfacilisis%2Bsapien%2Bfinibus%2Bat.%2BNullam%2B&max_id=r%2Bpulvinar%2Bmetus%2Bmassa%252C%2Bmalesuada%2Bfacilisis%2Bsapien%2Bfinibus%2Bat.%2BNullam%2Bfinibus%2Burna%2Bvel%2Bauctor%2Bfringilla.%2BMauris%2Beu%2Btortor%2Bblandit%252C%2Bbibendum%2Btortor%2Bac%252C%2Bcongue%2Beros.%2BLorem%2Bipsum%2Bdolor%2Bsit%2Bamet%252C%2Bconsectetur%2Badipiscing%2Belit.%2BSuspendisse%2Bjusto 
```

* <p name="schema_57d585f6ecef5">Object tags/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| media_count | integer | 1381114309 | 
| name | string | at dignissim | 

* <p name="objectproperty_57d585f6edd16">Object user :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| user_name | string | n felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis cond | 
| full_name | string | ugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim m | 
| id | integer | -1295412055 | 
| profile_picture | string | auris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum | 

* <p name="schema_57d585f6ee1f5">Object users_in_photo/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| user_name | string | pibus vel elit. S | 
| full_name | string | met, volutpat sed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit.  | 
| id | integer | -1948134198 | 
| profile_picture | string | ula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est | 

* <p name="objectproperty_57d585f6ef3d1">Object location :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| id | string | im risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maec | 
| name | string | d efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan n | 
| latitude | number | -8.215491E-137 | 
| longitude | number | -5.485739E+191 | 

* <p name="objectproperty_57d585f6f088c">Object from :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| user_name | string | ttis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit am | 
| full_name | string |  quis, laoreet a ipsum. Duis sem elit, | 
| id | integer | -355406604 | 
| profile_picture | string | aucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. P | 

* <p name="schema_57d585f6eb911">Object data/items/schema :</p>

| Name | Type | Definition | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| type | string |  |  | ius purus, nec condimentum tellus sagittis at. Nullam vel metus | 
| created_time | integer |  | Epoc time (ms) | -1976806061 | 
| filter | string |  |  | , eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, | 
| tags | array | [ [tags/items/schema](#schema_57d585f6ecef5) ] |  |  | 
| id | integer |  |  | -1079189278 | 
| user |  | [schema/properties/user](#objectproperty_57d585f6edd16) |  |  | 
| users_in_photo | array | [ [users_in_photo/items/schema](#schema_57d585f6ee1f5) ] |  |  | 
| location |  | [schema/properties/location](#objectproperty_57d585f6ef3d1) |  |  | 
| comments: |  | [schema/properties/comments:](#objectproperty_57d585f6f1571) |  |  | 
| likes |  | [schema/properties/likes](#objectproperty_57d585f6f2925) |  |  | 
| images |  | [schema/properties/images](#objectproperty_57d585f70071f) |  |  | 
| videos |  | [schema/properties/videos](#objectproperty_57d585f701d98) |  |  | 

* <p name="objectproperty_57d585f6f1571">Object comments: :</p> 

| Name | Type | Definition | Example |  
| :---: | :---: | :---: | :--- |  
| count | integer |  | -1267581578 | 
| data | array | [ [data/items/schema](#schema_57d585f6efd55) ] |  | 

* <p name="objectproperty_57d585f6f2925">Object likes :</p> 

| Name | Type | Definition | Example |  
| :---: | :---: | :---: | :--- |  
| count | integer |  | -459854486 | 
| data | array | [ [data/items/schema](#schema_57d585f6f1d34) ] |  | 

* <p name="objectproperty_57d585f6f3549">Object low_resolution :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| width | integer | 387868571 | 
| height | integer | 2092161710 | 
| url | string | ales, sagittis sed ex. Vivamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet  | 

* <p name="objectproperty_57d585f6f3d81">Object thumbnail :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| width | integer | 1287069158 | 
| height | integer | -726577430 | 
| url | string | erra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et  | 

* <p name="objectproperty_57d585f700358">Object standard_resolution :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| width | integer | 281536962 | 
| height | integer | 1310528122 | 
| url | string | are nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor bland | 

* <p name="objectproperty_57d585f70071f">Object images :</p> 

| Name | Type | Definition |  
| :---: | :---: | :---: |  
| low_resolution |  | [images/properties/low_resolution](#objectproperty_57d585f6f3549) | 
| thumbnail |  | [images/properties/thumbnail](#objectproperty_57d585f6f3d81) | 
| standard_resolution |  | [images/properties/standard_resolution](#objectproperty_57d585f700358) | 

* <p name="objectproperty_57d585f7011e1">Object low_resolution :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| width | integer | 1361607386 | 
| height | integer | 926660241 | 
| url | string | . Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius  | 

* <p name="objectproperty_57d585f7019cf">Object standard_resolution :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| width | integer | 1331428231 | 
| height | integer | 1237436552 | 
| url | string | . Sed malesuada, velit eu dapibus vehicula, | 

* <p name="objectproperty_57d585f701d98">Object videos :</p> 

| Name | Type | Definition |  
| :---: | :---: | :---: |  
| low_resolution |  | [videos/properties/low_resolution](#objectproperty_57d585f7011e1) | 
| standard_resolution |  | [videos/properties/standard_resolution](#objectproperty_57d585f7019cf) | 





#### get /users/self/media/liked
See the list of media liked by the authenticated user.
Private media is returned as long as the authenticated user
has permissionto view that media. Liked media lists are only
available for the currently authenticated user.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 4.321859E-26 | 
| tag-name | path | string | yes | Tag name | amet+fermentum+ultrici | 
| count | query | integer |  | Count of media to return. | -1985666645 | 
| max_like_id | query | integer |  | Return media liked before this id. | -1165135762 | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/self/media/liked?count=-1985666645&max_like_id=-1165135762 
```

* <p name="schema_57d585f7079e4">Object tags/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| media_count | integer | -861847399 | 
| name | string | lentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum ma | 

* <p name="objectproperty_57d585f7087d6">Object user :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| user_name | string |  varius orci. Donec consectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi  | 
| full_name | string | s velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem  | 
| id | integer | 1840540621 | 
| profile_picture | string | retium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aen | 

* <p name="schema_57d585f708c7d">Object users_in_photo/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| user_name | string | cies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapie | 
| full_name | string | ue aliquet. Phasellus faucibus urna arcu, et dignissim | 
| id | integer | 699765910 | 
| profile_picture | string |  vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis al | 

* <p name="objectproperty_57d585f709da2">Object location :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| id | string | es ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convalli | 
| name | string | ignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est m | 
| latitude | number | 4.926331E+56 | 
| longitude | number | -7.70822E+177 | 

* <p name="objectproperty_57d585f70b149">Object from :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| user_name | string | ere s | 
| full_name | string | tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metu | 
| id | integer | 1652621832 | 
| profile_picture | string | disse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet | 

* <p name="schema_57d585f7063f1">Object data/items/schema :</p>

| Name | Type | Definition | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| type | string |  |  | m felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Ph | 
| created_time | integer |  | Epoc time (ms) | 567969558 | 
| filter | string |  |  | lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi  | 
| tags | array | [ [tags/items/schema](#schema_57d585f7079e4) ] |  |  | 
| id | integer |  |  | -1943699106 | 
| user |  | [schema/properties/user](#objectproperty_57d585f7087d6) |  |  | 
| users_in_photo | array | [ [users_in_photo/items/schema](#schema_57d585f708c7d) ] |  |  | 
| location |  | [schema/properties/location](#objectproperty_57d585f709da2) |  |  | 
| comments: |  | [schema/properties/comments:](#objectproperty_57d585f70bdc2) |  |  | 
| likes |  | [schema/properties/likes](#objectproperty_57d585f70d09e) |  |  | 
| images |  | [schema/properties/images](#objectproperty_57d585f70efcb) |  |  | 
| videos |  | [schema/properties/videos](#objectproperty_57d585f710597) |  |  | 

* <p name="objectproperty_57d585f70bdc2">Object comments: :</p> 

| Name | Type | Definition | Example |  
| :---: | :---: | :---: | :--- |  
| count | integer |  | 663377435 | 
| data | array | [ [data/items/schema](#schema_57d585f70a6f7) ] |  | 

* <p name="objectproperty_57d585f70d09e">Object likes :</p> 

| Name | Type | Definition | Example |  
| :---: | :---: | :---: | :--- |  
| count | integer |  | 1455111436 | 
| data | array | [ [data/items/schema](#schema_57d585f70c522) ] |  | 

* <p name="objectproperty_57d585f70dbf3">Object low_resolution :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| width | integer | 161905562 | 
| height | integer | 612232298 | 
| url | string | dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat mag | 

* <p name="objectproperty_57d585f70e3ff">Object thumbnail :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| width | integer | 499135164 | 
| height | integer | 1529379318 | 
| url | string | consequat. Pellentesque elit libero, fauc | 

* <p name="objectproperty_57d585f70ec17">Object standard_resolution :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| width | integer | -675582522 | 
| height | integer | 945175599 | 
| url | string | us et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar  | 

* <p name="objectproperty_57d585f70efcb">Object images :</p> 

| Name | Type | Definition |  
| :---: | :---: | :---: |  
| low_resolution |  | [images/properties/low_resolution](#objectproperty_57d585f70dbf3) | 
| thumbnail |  | [images/properties/thumbnail](#objectproperty_57d585f70e3ff) | 
| standard_resolution |  | [images/properties/standard_resolution](#objectproperty_57d585f70ec17) | 

* <p name="objectproperty_57d585f70fa1b">Object low_resolution :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| width | integer | -268869669 | 
| height | integer | 178691155 | 
| url | string | s m | 

* <p name="objectproperty_57d585f7101e1">Object standard_resolution :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| width | integer | 1939479869 | 
| height | integer | 1564643908 | 
| url | string | nsequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lec | 

* <p name="objectproperty_57d585f710597">Object videos :</p> 

| Name | Type | Definition |  
| :---: | :---: | :---: |  
| low_resolution |  | [videos/properties/low_resolution](#objectproperty_57d585f70fa1b) | 
| standard_resolution |  | [videos/properties/standard_resolution](#objectproperty_57d585f7101e1) | 





#### get /users/search
Search for a user by name.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 4.321859E-26 | 
| tag-name | path | string | yes | Tag name | amet+fermentum+ultrici | 
| q | query | string | yes | A query string | culis+odio.+Mauris+vo | 
| count | query | string |  | Number of users to return. | +metus%2C+eu+bibendum+orci.+Sed+eros+massa%2C+vehicula+quis+condimentum+eget%2C+tristique+ut+quam.+Maecenas+et+velit+dignissim%2C+tincidunt+justo+quis%2C+iaculis+odio.+Mau | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/search?q=culis%2Bodio.%2BMauris%2Bvo&count=%2Bmetus%252C%2Beu%2Bbibendum%2Borci.%2BSed%2Beros%2Bmassa%252C%2Bvehicula%2Bquis%2Bcondimentum%2Beget%252C%2Btristique%2But%2Bquam.%2BMaecenas%2Bet%2Bvelit%2Bdignissim%252C%2Btincidunt%2Bjusto%2Bquis%252C%2Biaculis%2Bodio.%2BMau 
```

* <p name="schema_57d585f71377a">Object data/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| user_name | string | bortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium  | 
| full_name | string | isse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitu | 
| id | integer | 1283777170 | 
| profile_picture | string | m risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu biben | 





#### get /users/{user-id}/follows
Get the list of users this user follows.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -7.427248E%2B162 | 
| tag-name | path | string | yes | Tag name | amet+fermentum+ultrici | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/-7.427248E%252B162/follows 
```

* <p name="schema_57d585f715018">Object data/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| user_name | string |  amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus f | 
| full_name | string | um fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tort | 
| id | integer | -1353270440 | 
| profile_picture | string | tetur congue quis nec tellus. Morbi consequat mi id eros  | 





#### get /users/{user-id}/followed-by
Get the list of users this user is followed by.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -6.175257E-39 | 
| tag-name | path | string | yes | Tag name | amet+fermentum+ultrici | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/-6.175257E-39/followed-by 
```

* <p name="schema_57d585f7166b4">Object data/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| user_name | string | acilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis e | 
| full_name | string | tri | 
| id | integer | -1747892337 | 
| profile_picture | string | s id vulputate odio. Don | 





#### get /users/self/requested-by
List the users who have requested this user's permission to follow.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 4.321859E-26 | 
| tag-name | path | string | yes | Tag name | amet+fermentum+ultrici | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/users/self/requested-by 
```

* <p name="schema_57d585f717e0f">Object data/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| user_name | string | ipit est. Etiam varius lobortis porttitor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, m | 
| full_name | string | et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In n | 
| id | integer | -1787455536 | 
| profile_picture | string | lis felis aliquam enim, id feugiat magna elit in  | 





#### post /users/{user-id}/relationship
Modify the relationship between the current user and thetarget user.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | -7.59645E-74 | 
| tag-name | path | string | yes | Tag name | amet+fermentum+ultrici | 
| action | body | string |  | One of follow/unfollow/block/unblock/approve/ignore. | block | 

* Example of request :
```json
HTTP 1.1 post https://api.instagram.com/v1/users/-7.59645E-74/relationship 
Content-Type: application/json
Content-Length: 7
"block"
```

* <p name="schema_57d585f71963d">Object data/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| user_name | string | nissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed var | 
| full_name | string | istique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit ame | 
| id | integer | 1246491421 | 
| profile_picture | string | d tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in e | 





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
| user-id | path | number | yes | The user identifier number | 4.321859E-26 | 
| tag-name | path | string | yes | Tag name | amet+fermentum+ultrici | 
| media-id | path | integer | yes | The media ID | 29953931 | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/29953931 
```

* <p name="schema_57d585f71c111">Object tags/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| media_count | integer | 68223725 | 
| name | string |  ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dict | 

* <p name="objectproperty_57d585f71cf22">Object user :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| user_name | string | c molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed moll | 
| full_name | string | hendreri | 
| id | integer | 1427673432 | 
| profile_picture | string | purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet.  | 

* <p name="schema_57d585f71d3fc">Object users_in_photo/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| user_name | string | ur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliqu | 
| full_name | string | m quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, veh | 
| id | integer | -517635789 | 
| profile_picture | string | r vel metus et, mo | 

* <p name="objectproperty_57d585f71e4b3">Object location :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| id | string |  convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectus, a cursu | 
| name | string | ulum elementum felis sit amet ipsum eui | 
| latitude | number | -6.068566E-112 | 
| longitude | number | -1.039248E+191 | 

* <p name="objectproperty_57d585f71f828">Object from :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| user_name | string | ibero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, est leo vehicula lectu | 
| full_name | string | etur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce  | 
| id | integer | 1236439666 | 
| profile_picture | string | ulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, v | 

* <p name="schema_57d585f720be6">Object data/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| user_name | string | stas, sed mol | 
| full_name | string | llus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa | 
| id | integer | -1226057423 | 
| profile_picture | string | el elit. Sed efficitur, mi sit amet fermentum ultricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris  | 

* <p name="objectproperty_57d585f720492">Object comments: :</p> 

| Name | Type | Definition | Example |  
| :---: | :---: | :---: | :--- |  
| count | integer |  | 275174191 | 
| data | array | [ [data/items/schema](#schema_57d585f71edfa) ] |  | 

* <p name="objectproperty_57d585f7217a0">Object likes :</p> 

| Name | Type | Definition | Example |  
| :---: | :---: | :---: | :--- |  
| count | integer |  | 234743509 | 
| data | array | [ [data/items/schema](#schema_57d585f720be6) ] |  | 

* <p name="objectproperty_57d585f72234d">Object low_resolution :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| width | integer | -98264635 | 
| height | integer | -840564614 | 
| url | string | finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetu | 

* <p name="objectproperty_57d585f722b27">Object thumbnail :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| width | integer | 796641320 | 
| height | integer | -2110845389 | 
| url | string |   | 

* <p name="objectproperty_57d585f7232ef">Object standard_resolution :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| width | integer | -2123255649 | 
| height | integer | 1655502043 | 
| url | string | Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa ege | 

* <p name="objectproperty_57d585f7236a5">Object images :</p> 

| Name | Type | Definition |  
| :---: | :---: | :---: |  
| low_resolution |  | [images/properties/low_resolution](#objectproperty_57d585f72234d) | 
| thumbnail |  | [images/properties/thumbnail](#objectproperty_57d585f722b27) | 
| standard_resolution |  | [images/properties/standard_resolution](#objectproperty_57d585f7232ef) | 

* <p name="objectproperty_57d585f7240de">Object low_resolution :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| width | integer | -1192669551 | 
| height | integer | -1809429924 | 
| url | string | ibulum magna ut, suscipit est. Etiam varius lobortis porttitor. Mauris vel ultrices era | 

* <p name="objectproperty_57d585f724891">Object standard_resolution :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| width | integer | -1066616012 | 
| height | integer | 1570196595 | 
| url | string | r accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, nec condimentum tellus sagittis at. Nullam vel metus ac quam gravida pellent | 

* <p name="objectproperty_57d585f724c44">Object videos :</p> 

| Name | Type | Definition |  
| :---: | :---: | :---: |  
| low_resolution |  | [videos/properties/low_resolution](#objectproperty_57d585f7240de) | 
| standard_resolution |  | [videos/properties/standard_resolution](#objectproperty_57d585f724891) | 





#### get /media/search
Search for media in a given area. The default time span is set to 5
days. The time span must not exceed 7 days. Defaults time stamps cover
the last 5 days. Can return mix of image and video types.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Validation | Default | Description | Example |  
| :---: | :---: | :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes |  |  | The user identifier number | 4.321859E-26 | 
| tag-name | path | string | yes |  |  | Tag name | amet+fermentum+ultrici | 
| LAT | query | number |  |  |  | Latitude of the center search coordinate. If used, lng is required. | 2.444863E-237 | 
| MIN_TIMESTAMP | query | integer |  |  |  | A unix timestamp. All media returned will be taken later thanthis timestamp. | 1900955732 | 
| LNG | query | number |  |  |  | Longitude of the center search coordinate. If used, lat is required. | 1.49684E%2B89 | 
| MAX_TIMESTAMP | query | integer |  |  |  | A unix timestamp. All media returned will be taken earlier than thistimestamp. | 142042423 | 
| DISTANCE | query | integer |  | Value <= 5000 | 1000 | Default is 1km (distance=1000), max distance is 5km. | 1000 | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/search?LAT=2.444863E-237&MIN_TIMESTAMP=1900955732&LNG=1.49684E%252B89&MAX_TIMESTAMP=142042423&DISTANCE=1000 
```





#### get /media/popular
Get a list of what media is most popular at the moment.
Can return mix of image and video types.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 4.321859E-26 | 
| tag-name | path | string | yes | Tag name | amet+fermentum+ultrici | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/popular 
```

* <p name="schema_57d585f736c8c">Object tags/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| media_count | integer | 2037107169 | 
| name | string | a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Viva | 

* <p name="objectproperty_57d585f737a57">Object user :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| user_name | string | porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius s | 
| full_name | string | n  | 
| id | integer | 505035228 | 
| profile_picture | string | t justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis.  | 

* <p name="schema_57d585f737f14">Object users_in_photo/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| user_name | string | am vel m | 
| full_name | string | augue interdum sed. Vestibulum eget luctus metus, eu bib | 
| id | integer | -2134362664 | 
| profile_picture | string | tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id tempor sed, dapibus vel elit. Sed efficitur, mi sit amet | 

* <p name="objectproperty_57d585f739059">Object location :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| id | string | dio. Mauris volut | 
| name | string | t, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante | 
| latitude | number | -4.255772E+130 | 
| longitude | number | 3.284636E-130 | 

* <p name="objectproperty_57d585f73a3ef">Object from :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| user_name | string |  ante nec, volutp | 
| full_name | string | olest | 
| id | integer | 1395052816 | 
| profile_picture | string | ent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum t | 

* <p name="schema_57d585f7356b4">Object data/items/schema :</p>

| Name | Type | Definition | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| type | string |  |  | te sit amet sagittis. In non lectus | 
| created_time | integer |  | Epoc time (ms) | -356917665 | 
| filter | string |  |  | nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id ero | 
| tags | array | [ [tags/items/schema](#schema_57d585f736c8c) ] |  |  | 
| id | integer |  |  | 598035896 | 
| user |  | [schema/properties/user](#objectproperty_57d585f737a57) |  |  | 
| users_in_photo | array | [ [users_in_photo/items/schema](#schema_57d585f737f14) ] |  |  | 
| location |  | [schema/properties/location](#objectproperty_57d585f739059) |  |  | 
| comments: |  | [schema/properties/comments:](#objectproperty_57d585f73b064) |  |  | 
| likes |  | [schema/properties/likes](#objectproperty_57d585f73c3fe) |  |  | 
| images |  | [schema/properties/images](#objectproperty_57d585f73e2e3) |  |  | 
| videos |  | [schema/properties/videos](#objectproperty_57d585f73f89f) |  |  | 

* <p name="objectproperty_57d585f73b064">Object comments: :</p> 

| Name | Type | Definition | Example |  
| :---: | :---: | :---: | :--- |  
| count | integer |  | 359427903 | 
| data | array | [ [data/items/schema](#schema_57d585f7399ba) ] |  | 

* <p name="objectproperty_57d585f73c3fe">Object likes :</p> 

| Name | Type | Definition | Example |  
| :---: | :---: | :---: | :--- |  
| count | integer |  | -303880505 | 
| data | array | [ [data/items/schema](#schema_57d585f73b7f2) ] |  | 

* <p name="objectproperty_57d585f73cf74">Object low_resolution :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| width | integer | -294921440 | 
| height | integer | 40701932 | 
| url | string | condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. | 

* <p name="objectproperty_57d585f73d75e">Object thumbnail :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| width | integer | 1975130386 | 
| height | integer | 512256380 | 
| url | string | da facilisis sapien finibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, bibendum tortor ac, congue eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo turpis, lacinia id  | 

* <p name="objectproperty_57d585f73df1c">Object standard_resolution :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| width | integer | -720617099 | 
| height | integer | -712372547 | 
| url | string | llis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec mole | 

* <p name="objectproperty_57d585f73e2e3">Object images :</p> 

| Name | Type | Definition |  
| :---: | :---: | :---: |  
| low_resolution |  | [images/properties/low_resolution](#objectproperty_57d585f73cf74) | 
| thumbnail |  | [images/properties/thumbnail](#objectproperty_57d585f73d75e) | 
| standard_resolution |  | [images/properties/standard_resolution](#objectproperty_57d585f73df1c) | 

* <p name="objectproperty_57d585f73ed21">Object low_resolution :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| width | integer | 1414837726 | 
| height | integer | 1243709690 | 
| url | string | s. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posu | 

* <p name="objectproperty_57d585f73f4e9">Object standard_resolution :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| width | integer | -1075145834 | 
| height | integer | 576904636 | 
| url | string | vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris n | 

* <p name="objectproperty_57d585f73f89f">Object videos :</p> 

| Name | Type | Definition |  
| :---: | :---: | :---: |  
| low_resolution |  | [videos/properties/low_resolution](#objectproperty_57d585f73ed21) | 
| standard_resolution |  | [videos/properties/standard_resolution](#objectproperty_57d585f73f4e9) | 





#### get /media/{media-id}/comments
Get a list of recent comments on a media object.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 4.321859E-26 | 
| tag-name | path | string | yes | Tag name | amet+fermentum+ultrici | 
| media-id | path | integer | yes | Media ID | -2088501509 | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/-2088501509/comments 
```

* <p name="objectproperty_57d585f7434d9">Object from :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| user_name | string | arcu, vel ultrices augue. Sus | 
| full_name | string | ricies, felis felis aliquam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metus in eros. Mauris sollicitudin varius purus, nec co | 
| id | integer | -1880489485 | 
| profile_picture | string |  nec est qu | 

* <p name="schema_57d585f742a92">Object data/items/schema :</p>

| Name | Type | Definition | Example |  
| :---: | :---: | :---: | :--- |  
| id | string |  | icula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque  | 
| created_time | string |  | vamus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehic | 
| text | string |  |  tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. S | 
| from |  | [schema/properties/from](#objectproperty_57d585f7434d9) |  | 




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
| user-id | path | number | yes | The user identifier number | 4.321859E-26 | 
| tag-name | path | string | yes | Tag name | amet+fermentum+ultrici | 
| media-id | path | integer | yes | Media ID | -2088501509 | 
| TEXT | body | number |  | Text to post as a comment on the media object as specified inmedia-id. | -4.390402E+180 | 

* Example of request :
```json
HTTP 1.1 post https://api.instagram.com/v1/media/-2088501509/comments 
Content-Type: application/json
Content-Length: 14
-4.390402e+180
```

* <p name="objectproperty_57d585f744d02">Object data :</p> 

| Name | Type |  
| :---: | :---: |  
|  |  | 
|  |  | 
|  |  | 




#### delete /media/{media-id}/comments
Remove a comment either on the authenticated user's media object or
authored by the authenticated user.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 4.321859E-26 | 
| tag-name | path | string | yes | Tag name | amet+fermentum+ultrici | 
| media-id | path | integer | yes | Media ID | -2088501509 | 

* Example of request :
```json
HTTP 1.1 delete https://api.instagram.com/v1/media/-2088501509/comments 
```

* <p name="objectproperty_57d585f745b42">Object data :</p> 

| Name | Type |  
| :---: | :---: |  
|  |  | 
|  |  | 
|  |  | 





#### get /media/{media-id}/likes
Get a list of users who have liked this media.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 4.321859E-26 | 
| tag-name | path | string | yes | Tag name | amet+fermentum+ultrici | 
| media-id | path | integer | yes | Media ID | -1122952563 | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media/-1122952563/likes 
```

* <p name="schema_57d585f746ccd">Object data/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| type | string | t amet, consectetur adipiscing elit. I | 
| user_name | string | inar vel metus et, molestie pretium tortor. Praesent interdum fringil | 
| first_name | string | e nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis porttitor. | 
| last_name | string | se potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam. Morbi tincidunt pretium sodales. Eti | 
| id | string | nissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur | 




#### post /media/{media-id}/likes
Set a like on this media by the currently authenticated user.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 4.321859E-26 | 
| tag-name | path | string | yes | Tag name | amet+fermentum+ultrici | 
| media-id | path | integer | yes | Media ID | -1122952563 | 

* Example of request :
```json
HTTP 1.1 post https://api.instagram.com/v1/media/-1122952563/likes 
```

* <p name="objectproperty_57d585f748497">Object data :</p> 

| Name | Type |  
| :---: | :---: |  
|  |  | 
|  |  | 
|  |  | 




#### delete /media/{media-id}/likes
Remove a like on this media by the currently authenticated user.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 4.321859E-26 | 
| tag-name | path | string | yes | Tag name | amet+fermentum+ultrici | 
| media-id | path | integer | yes | Media ID | -1122952563 | 

* Example of request :
```json
HTTP 1.1 delete https://api.instagram.com/v1/media/-1122952563/likes 
```

* <p name="objectproperty_57d585f7491a8">Object data :</p> 

| Name | Type |  
| :---: | :---: |  
|  |  | 
|  |  | 
|  |  | 





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
| user-id | path | number | yes | The user identifier number | 4.321859E-26 | 
| tag-name | path | string | yes | Tag name | amet+fermentum+ultrici | 
| shortcode | path | string | yes | The media shortcode | leo+consectetur+congue+quis+nec+tellus.+Morbi+consequat+mi+id+eros+viverra+ullamcorper.+Fusce+nec+est+quam.+Pellentesque+vulpu | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/media1/leo%2Bconsectetur%2Bcongue%2Bquis%2Bnec%2Btellus.%2BMorbi%2Bconsequat%2Bmi%2Bid%2Beros%2Bviverra%2Bullamcorper.%2BFusce%2Bnec%2Best%2Bquam.%2BPellentesque%2Bvulpu 
```

* <p name="schema_57d585f726ef0">Object tags/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| media_count | integer | -669202063 | 
| name | string | am gravida pellentesque. Nullam ultricies turpis nec dignissim aliquam. Nunc  | 

* <p name="objectproperty_57d585f727cd9">Object user :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| user_name | string | , iaculis odio. Mauris volutpat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In  | 
| full_name | string | ales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucib | 
| id | integer | -39986264 | 
| profile_picture | string | lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc max | 

* <p name="schema_57d585f72817e">Object users_in_photo/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| user_name | string |  | 
| full_name | string | m eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissi | 
| id | integer | -1944777835 | 
| profile_picture | string |  nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi consequat mi id eros viverra ullamcorper. Fusce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh | 

* <p name="objectproperty_57d585f72922b">Object location :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| id | string | nec con | 
| name | string | acer | 
| latitude | number | -3.959195E+130 | 
| longitude | number | -1.441926E-118 | 

* <p name="objectproperty_57d585f72a570">Object from :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| user_name | string | ut ornare purus ultrices nec | 
| full_name | string | Duis sem elit, posuere eu facilisis nec, temp | 
| id | integer | 107815401 | 
| profile_picture | string | estibulum m | 

* <p name="schema_57d585f72b981">Object data/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| user_name | string | nsectetur sed ante sit amet sagittis. In non lectus eu nunc interdum laoreet a ut dui. Sed eu nulla malesuada, egestas velit id, semper felis. Fusce ac dui nisl. Donec ultricies nibh eu leo consectetur congue quis nec tellus. Morbi cons | 
| full_name | string | et vestibulum quam. Morbi tincidunt pretium sodales. Etiam dignissim risus non felis scelerisque  | 
| id | integer | 658724544 | 
| profile_picture | string | ere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt elit. Etiam convallis eu ligula non consequat. Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec molestie, eros in pretium pulvinar, e | 

* <p name="objectproperty_57d585f72b1d5">Object comments: :</p> 

| Name | Type | Definition | Example |  
| :---: | :---: | :---: | :--- |  
| count | integer |  | 2055190039 | 
| data | array | [ [data/items/schema](#schema_57d585f729b58) ] |  | 

* <p name="objectproperty_57d585f72c571">Object likes :</p> 

| Name | Type | Definition | Example |  
| :---: | :---: | :---: | :--- |  
| count | integer |  | 145307573 | 
| data | array | [ [data/items/schema](#schema_57d585f72b981) ] |  | 

* <p name="objectproperty_57d585f72d0cb">Object low_resolution :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| width | integer | 1407053141 | 
| height | integer | 1604645928 | 
| url | string | nar metus massa, malesuada facilisis sapien finibus at. Nullam finibus urna vel auctor frin | 

* <p name="objectproperty_57d585f72d887">Object thumbnail :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| width | integer | 703720372 | 
| height | integer | 1966359477 | 
| url | string |  pretium sodales. Etiam dignissim risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, v | 

* <p name="objectproperty_57d585f72e04f">Object standard_resolution :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| width | integer | -64897023 | 
| height | integer | -1047494101 | 
| url | string | mus id vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulum quam.  | 

* <p name="objectproperty_57d585f72e406">Object images :</p> 

| Name | Type | Definition |  
| :---: | :---: | :---: |  
| low_resolution |  | [images/properties/low_resolution](#objectproperty_57d585f72d0cb) | 
| thumbnail |  | [images/properties/thumbnail](#objectproperty_57d585f72d887) | 
| standard_resolution |  | [images/properties/standard_resolution](#objectproperty_57d585f72e04f) | 

* <p name="objectproperty_57d585f72ee4c">Object low_resolution :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| width | integer | -1221062331 | 
| height | integer | 834645426 | 
| url | string | sce nec est quam. Pellentesque vulputate sapien at turpis molestie congue. Nunc et lorem eros. Suspendisse eget nibh pulvinar, vestibulum magna ut, suscipit est. Etiam varius lobortis  | 

* <p name="objectproperty_57d585f72f606">Object standard_resolution :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| width | integer | 422695422 | 
| height | integer | -1167196895 | 
| url | string |  Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, ia | 

* <p name="objectproperty_57d585f72f9bf">Object videos :</p> 

| Name | Type | Definition |  
| :---: | :---: | :---: |  
| low_resolution |  | [videos/properties/low_resolution](#objectproperty_57d585f72ee4c) | 
| standard_resolution |  | [videos/properties/standard_resolution](#objectproperty_57d585f72f606) | 





### Resource : tags
#### get /tags/{tag-name}
Get information about a tag object.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 4.321859E-26 | 
| tag-name | path | string | yes | Tag name | t+quam.+Maecenas+et+velit+dignissim%2C+tincidunt+justo+quis%2C+iaculis+odio.+Mauris+volutpat+dignissim+mi+eget+lacinia.+In+n | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/tags/t%2Bquam.%2BMaecenas%2Bet%2Bvelit%2Bdignissim%252C%2Btincidunt%2Bjusto%2Bquis%252C%2Biaculis%2Bodio.%2BMauris%2Bvolutpat%2Bdignissim%2Bmi%2Beget%2Blacinia.%2BIn%2Bn 
```





#### get /tags/{tag-name}/media/recent
Get a list of recently tagged media. Use the `max_tag_id` and
`min_tag_id` parameters in the pagination response to paginate through
these objects.

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 4.321859E-26 | 
| tag-name | path | string | yes | Tag name | an+nibh%2C+sed+pellentesque+enim+metus+in+eros.+Mauris+sollicitudin+varius+purus%2C+nec+condimentum+tellus+sagittis+at.+Nu | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/tags/an%2Bnibh%252C%2Bsed%2Bpellentesque%2Benim%2Bmetus%2Bin%2Beros.%2BMauris%2Bsollicitudin%2Bvarius%2Bpurus%252C%2Bnec%2Bcondimentum%2Btellus%2Bsagittis%2Bat.%2BNu/media/recent 
```

* <p name="schema_57d585f74aabb">Object data/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| media_count | integer | -906326692 | 
| name | string | ed lacus. Nulla justo arcu, sodales ac commodo quis, laoreet a ipsum. Duis sem elit, posuere eu facilisis nec, tempus ac ipsum. Ut molestie aliquet est, posuere tincidunt eli | 





#### get /tags/search

* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 4.321859E-26 | 
| tag-name | path | string | yes | Tag name | amet+fermentum+ultrici | 
| q | query | string |  | A valid tag name without a leading #. (eg. snowy, nofilter) | um+ul | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/tags/search?q=um%2Bul 
```

* <p name="schema_57d585f74bf0e">Object data/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| media_count | integer | -1687704220 | 
| name | string | uam enim, id feugiat magna elit in sapien. Sed malesuada, velit eu dapibus vehicula, sem tortor accumsan nibh, sed pellentesque enim metu | 





### Resource : locations
#### get /locations/{location-id}
Get information about a location.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 4.321859E-26 | 
| tag-name | path | string | yes | Tag name | amet+fermentum+ultrici | 
| location-id | path | integer | yes | Location ID | 1031636862 | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/locations/1031636862 
```

* <p name="objectproperty_57d585f74d7f1">Object data :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| id | string | ndisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum e | 
| name | string | Pellentesque elit libero, faucibus luctus ante nec, volutpat dictum neque. Donec mole | 
| latitude | number | -5.085613E-247 | 
| longitude | number | 1.381978E+24 | 





#### get /locations/{location-id}/media/recent
Get a list of recent media objects from a given location.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 4.321859E-26 | 
| tag-name | path | string | yes | Tag name | amet+fermentum+ultrici | 
| location-id | path | integer | yes | Location ID | -449931531 | 
| max_timestamp | query | integer |  | Return media before this UNIX timestamp. | -229468945 | 
| min_timestamp | query | integer |  | Return media after this UNIX timestamp. | 1506920004 | 
| min_id | query | string |  | Return media later than this min_id. | +risus+non+felis+scelerisque+aliquet.+Phasellus+faucibus+urna+arcu%2C+et+dignissim+augue+interdum+sed.+Vestibulum+eget+luctus+metus%2C+eu+bibendum+orci.+Sed+eros+ma | 
| max_id | query | string |  | Return media earlier than this max_id. | ta+ut+quam+non%2C+imperdiet+varius+orci.+Donec+consectetur+sed+ante+sit+amet+sagittis.+In+non+lectus+eu+nunc+interdum+laoreet+a+ut+dui.+Sed+eu+nulla+malesuada%2C+egestas+velit+id%2C+semper+felis.+Fusce+ac+du | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/locations/-449931531/media/recent?max_timestamp=-229468945&min_timestamp=1506920004&min_id=%2Brisus%2Bnon%2Bfelis%2Bscelerisque%2Baliquet.%2BPhasellus%2Bfaucibus%2Burna%2Barcu%252C%2Bet%2Bdignissim%2Baugue%2Binterdum%2Bsed.%2BVestibulum%2Beget%2Bluctus%2Bmetus%252C%2Beu%2Bbibendum%2Borci.%2BSed%2Beros%2Bma&max_id=ta%2But%2Bquam%2Bnon%252C%2Bimperdiet%2Bvarius%2Borci.%2BDonec%2Bconsectetur%2Bsed%2Bante%2Bsit%2Bamet%2Bsagittis.%2BIn%2Bnon%2Blectus%2Beu%2Bnunc%2Binterdum%2Blaoreet%2Ba%2But%2Bdui.%2BSed%2Beu%2Bnulla%2Bmalesuada%252C%2Begestas%2Bvelit%2Bid%252C%2Bsemper%2Bfelis.%2BFusce%2Bac%2Bdu 
```

* <p name="schema_57d585f75143c">Object tags/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| media_count | integer | 930569314 | 
| name | string | nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex.  | 

* <p name="objectproperty_57d585f752258">Object user :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| user_name | string | t vestibu | 
| full_name | string | t turpis molestie congue. Nunc et lorem eros. Suspendisse eget ni | 
| id | integer | 1398115078 | 
| profile_picture | string |  felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condime | 

* <p name="schema_57d585f752707">Object users_in_photo/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| user_name | string |  pretium pulvinar, est leo vehicula lectus, a cursus neque erat vitae odio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa eges | 
| full_name | string | arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum ege | 
| id | integer | 185103860 | 
| profile_picture | string | pat dignissim mi eget lacinia. In nisi odio, porta ut quam non, imperdiet varius orci. Donec consectetur sed ante sit amet sagittis. In non lect | 

* <p name="objectproperty_57d585f7537c8">Object location :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| id | string | nissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimen | 
| name | string | m. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivamus id vu | 
| latitude | number | 5.490653E-53 | 
| longitude | number | -6.041974E-111 | 

* <p name="objectproperty_57d585f754b4a">Object from :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| user_name | string | nibus at. Nullam finibus urna vel auctor fringilla. Mauris eu tortor blandit, biben | 
| full_name | string | itor. Mauris vel ultrices erat, at hendrerit enim. Sed leo ex, pulvinar vel metus et, molestie pretium tortor. Praesent | 
| id | integer | 453108010 | 
| profile_picture | string | l metus et, molestie pretium tortor. Praesent interdum fringilla orci, gravida ornare nibh sollicitudin et. Curabitur pulvinar metus massa, malesuada facilisis sapien finib | 

* <p name="schema_57d585f74fdf1">Object data/items/schema :</p>

| Name | Type | Definition | Description | Example |  
| :---: | :---: | :---: | :--- | :--- |  
| type | string |  |  | d scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aenean quam nisi, posuere sed varius sodales, sagittis sed ex. Vivam | 
| created_time | integer |  | Epoc time (ms) | -108892882 | 
| filter | string |  |  |  odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet ves | 
| tags | array | [ [tags/items/schema](#schema_57d585f75143c) ] |  |  | 
| id | integer |  |  | 307835719 | 
| user |  | [schema/properties/user](#objectproperty_57d585f752258) |  |  | 
| users_in_photo | array | [ [users_in_photo/items/schema](#schema_57d585f752707) ] |  |  | 
| location |  | [schema/properties/location](#objectproperty_57d585f7537c8) |  |  | 
| comments: |  | [schema/properties/comments:](#objectproperty_57d585f7557db) |  |  | 
| likes |  | [schema/properties/likes](#objectproperty_57d585f756c00) |  |  | 
| images |  | [schema/properties/images](#objectproperty_57d585f758b7b) |  |  | 
| videos |  | [schema/properties/videos](#objectproperty_57d585f75a151) |  |  | 

* <p name="objectproperty_57d585f7557db">Object comments: :</p> 

| Name | Type | Definition | Example |  
| :---: | :---: | :---: | :--- |  
| count | integer |  | -700743408 | 
| data | array | [ [data/items/schema](#schema_57d585f75410f) ] |  | 

* <p name="objectproperty_57d585f756c00">Object likes :</p> 

| Name | Type | Definition | Example |  
| :---: | :---: | :---: | :--- |  
| count | integer |  | -519295142 | 
| data | array | [ [data/items/schema](#schema_57d585f755f66) ] |  | 

* <p name="objectproperty_57d585f7577ed">Object low_resolution :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| width | integer | -1390644541 | 
| height | integer | 1549478698 | 
| url | string | elerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molestie. Aene | 

* <p name="objectproperty_57d585f757ffe">Object thumbnail :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| width | integer | -230864430 | 
| height | integer | -388530732 | 
| url | string | vulputate odio. Donec quis facilisis arcu, vel ultrices augue. Suspendisse potenti. Mauris vehicula ex lorem, ut ornare purus ultrices nec. Vestibulum elementum felis sit amet ipsum euismod ullamcorper. Phasellus sit amet vestibulu | 

* <p name="objectproperty_57d585f7587bc">Object standard_resolution :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| width | integer | 18014601 | 
| height | integer | 750270123 | 
| url | string |  tristique ut quam. Maecenas et velit dignissim, tincidunt justo quis, iaculis | 

* <p name="objectproperty_57d585f758b7b">Object images :</p> 

| Name | Type | Definition |  
| :---: | :---: | :---: |  
| low_resolution |  | [images/properties/low_resolution](#objectproperty_57d585f7577ed) | 
| thumbnail |  | [images/properties/thumbnail](#objectproperty_57d585f757ffe) | 
| standard_resolution |  | [images/properties/standard_resolution](#objectproperty_57d585f7587bc) | 

* <p name="objectproperty_57d585f7595cf">Object low_resolution :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| width | integer | 1779723247 | 
| height | integer | 1952614876 | 
| url | string | dio. Sed sed neque dignissim, imperdiet nunc maximus, finibus erat. Proin id scelerisque ipsum. Quisque porta mauris nec massa egestas, sed mollis est molesti | 

* <p name="objectproperty_57d585f759d9e">Object standard_resolution :</p> 

| Name | Type | Example |  
| :---: | :---: | :--- |  
| width | integer | 801894917 | 
| height | integer | -1516985568 | 
| url | string |  risus non felis scelerisque aliquet. Phasellus faucibus urna arcu, et dignissim augue interdum sed. Vestibulum eget luctus metus, eu bibendum orci. Sed eros massa, vehicula quis condimentum eget, trist | 

* <p name="objectproperty_57d585f75a151">Object videos :</p> 

| Name | Type | Definition |  
| :---: | :---: | :---: |  
| low_resolution |  | [videos/properties/low_resolution](#objectproperty_57d585f7595cf) | 
| standard_resolution |  | [videos/properties/standard_resolution](#objectproperty_57d585f759d9e) | 





#### get /locations/search
Search for a location by geographic coordinate.
* Request Parameters :
  * Content-Type Accepted : application/json

| Name | Location | Type | Required | Description | Example |  
| :---: | :---: | :---: | :---: | :--- | :--- |  
| user-id | path | number | yes | The user identifier number | 4.321859E-26 | 
| tag-name | path | string | yes | Tag name | amet+fermentum+ultrici | 
| distance | query | integer |  | Default is 1000m (distance=1000), max distance is 5000. | 657122544 | 
| facebook_places_id | query | integer |  | Returns a location mapped off of a Facebook places id. If used, aFoursquare id and lat, lng are not required. | -1024767810 | 
| foursquare_id | query | integer |  | returns a location mapped off of a foursquare v1 api location id.If used, you are not required to use lat and lng. Note that thismethod is deprecated; you should use the new foursquare IDs with V2of their API. | 461950872 | 
| lat | query | number |  | atitude of the center search coordinate. If used, lng is required. | -4.47702E-159 | 
| lng | query | number |  | ongitude of the center search coordinate. If used, lat is required. | 6.077057E%2B129 | 
| foursquare_v2_id | query | integer |  | Returns a location mapped off of a foursquare v2 api location id. Ifused, you are not required to use lat and lng. | 209143145 | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/locations/search?distance=657122544&facebook_places_id=-1024767810&foursquare_id=461950872&lat=-4.47702E-159&lng=6.077057E%252B129&foursquare_v2_id=209143145 
```

* <p name="schema_57d585f75dc2f">Object data/items/schema :</p>

| Name | Type | Example |  
| :---: | :---: | :--- |  
| id | string | um. Duis sem elit, posuere eu facilisis ne | 
| name | string | elit eu dapibus vehicula, sem to | 
| latitude | number | 8.274203E+131 | 
| longitude | number | 5.420641E+36 | 





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
| user-id | path | number | yes | The user identifier number | 4.321859E-26 | 
| tag-name | path | string | yes | Tag name | amet+fermentum+ultrici | 
| geo-id | path | integer | yes | Geolocation ID | 1576796678 | 
| count | query | integer |  | Max number of media to return. | 424428730 | 
| min_id | query | integer |  | Return media before this `min_id`. | -116114021 | 

* Example of request :
```json
HTTP 1.1 get https://api.instagram.com/v1/geographies/1576796678/media/recent?count=424428730&min_id=-116114021 
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

