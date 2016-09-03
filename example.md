# Twitter REST API
* Version : 1.1


---

### Global Definition
| Attribute | Value |
| :-------: | :---: |
| Schemes | http, https |
| Hostname | api.twitter.com |
| Root Path | /1.1 |
| API Base Url | http://api.twitter.com/1.1 https://api.twitter.com/1.1 |
| Content-Type Accepted | application/json |
| Content-Type Return | application/json |

---

## Summary 
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)


---

## Resources 
### Resource : statuses
#### get /statuses/mentions_timeline
Returns the 20 most recent mentions for the authenticating user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| count | query | string |  no |  |  |  |  |  |  | Specifies the number of tweets to try and retrieve
| since_id | query | string |  no |  |  |  |  |  |  | Returns result with an ID greater than the specified ID
| max_id | query | string |  no |  |  |  |  |  |  | Returns results with an ID less than or equal to the specified ID
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object
| contributor_details | query | string |  no |  |  |  |  |  |  | This parameter enhances the contributors element of the status response
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/mentions_timeline?count=rBin52sXYSbjXQBiCJMNGP8gCGVsyX8ZyqmEsPCrHNLFEmXg6K3Mzc3cSYFrVNqudN9FCL7kzSZdfXtlHx7gJbsC9735Uuz7hINUuVe3Odg3aJoShw81HBDQJHWDbvLteznIuCLiP1l0LKS3g15XDJOmqKZBgL5vksdO5Z7V1tVNdORuQWrtFfP50PH&since_id=AMLUfZJlZRg0k&max_id=Oy0F2RBtlhJanK040ARMv7MfsL6IMqUAYVf1NRu88ejvYjAZTsMpAyE2kKL6bGGaCWbqOGyXURtTb3T5wGu6f89zSVF3CmefipF65e406xUhBOm8&trim_user=QeJZoiSkXWWjabCzRJE5NEblzsWnP4RFjBFITx2RtYbDaOc2xR7lviG5LDsAIkg2VWKPtMGWLSzWGLYeC5A8ogeaUGLC02FWYpLrbsnXlXT1JSgmXQum7Jw1piEqkjm&contributor_details=J8KVA8SV5MXOEeaB4FYcoveONTe7cBqWKaRkiJgovec9tnLx2KKrfYf2Rua46A0QLRb4Bss7HFga22I5Msx1rN4iiemoPnfAfrEQT7XBMeLPhuV3Xs5ofaGxo3WdrbNGCswwAu7nJTc0o74lz9JPjqnIujVVvJB7c8EMDM9mG&include_entities=m4tqp3A9TUAgD4zyZ4 
```




#### get /statuses/user_timeline
Returns a collection of the most recent Tweets posted by the User
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| count | query | string |  no |  |  |  |  |  |  | Specifies the number of tweets to try and retrieve
| since_id | query | string |  no |  |  |  |  |  |  | Returns result with an ID greater than the specified ID
| max_id | query | string |  no |  |  |  |  |  |  | Returns results with an ID less than or equal to the specified ID
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object
| exclude_replies | query | boolean |  no |  |  |  |  |  |  | This paramters will prevent from appearing in the returned timeline
| contributor_details | query | string |  no |  |  |  |  |  |  | This parameter enhances the contributors element of the status response
| include_rts | query | boolean |  no |  |  |  |  |  |  | When set to false, the timeline will strip any native retweet

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/user_timeline?count=BcvKQhnDrKjN7nhyNl8We3xuGB4fB8ydl3XbllPM58zdwRLjcUgqXNVEpZU08tdtwbERxuECCeQ95BthvJItxE7WD2XLvbe2mTTToxw0LmaRYD9tnSWUw4Ra6PVC0aEn4xhs5OtRbDJ9gSCDLyyhCqrJfnlgyZDDxV5DJzuUce3t6F7ReF9R6BAlZVCxVgasbg5UPAP1PSvVyCNMhXEnyeJxam55&since_id=gyNwEIlfxn4qS0ZvOLMLqakEUSOgYUS&max_id=tGL7p7nWusnnsmSh8F2yQndLg12eWVtpBex0lVXQnldPH67PMaoCxBoODq2Alv0WKyX5tVVQg9GXfNN2XcFvN3jrtm1OS1LCzJH3EDUVMAS2oG4mSJ&trim_user=GMb8gy95qbR2LAKOfnJa9j3cIJg5C0XjN8s3HB87NZazAUoPh70rr3E9NVepVcJIlbL2NU9BUjaudykvFkX7nBgawvAsIka&exclude_replies=0&contributor_details=W5jReVLy5gMEAikVfrjRIune4QWp0ZVX4fOjazSgQEUrWemcFF3o9rCehyEhxzeCP3W0DOgttbUqphC5XFt766moE0GcAUPpYLpBAG44RZuhh6neMQmTWIhBJXNjSCJQo&include_rts=0 
```




#### get /statuses/home_timeline
Returns a collection of the most recent Tweets
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| since_id | query | string |  no |  |  |  |  |  |  | Returns result with an ID greater than the specified ID
| max_id | query | string |  no |  |  |  |  |  |  | Returns results with an ID less than or equal to the specified ID
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object
| exclude_replies | query | boolean |  no |  |  |  |  |  |  | This paramters will prevent from appearing in the returned timeline
| contributor_details | query | string |  no |  |  |  |  |  |  | This parameter enhances the contributors element of the status response

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/home_timeline?since_id=ZPw3GwxYNEl2qcoj87AKQyyaqaThz2JyRfCyLawzORBe30yc79XXHv88G1pf48OVoquaB1JpTl&max_id=Xlcasm7q3CzciAByEKnA9O5jp63OZosXKF7d1eE5Qdi9NUIsE53OU87jeb8eABbkgiyixcoopGydAgFfmI3gRbz6mHkWiwhzPPSn2gLrWjFxAlMW3PcV1M1nulkNSCmIse5uvQWsaBZKWMH0CUVDGX1ajlXbYkUrzZV5QSx1uxLrjssVnoz3lAeEWcQVwKm6KibAaJBFgn6zQzvdX5hiFvXCHNxeyTlibwTmfv1vS85JHB&trim_user=FHdYmJVZrJxFiq0BCxuZN01jTapCR0zwHNv4wq4XaBDs2E3FbyEYyGhrQG4IHEfprKuYayWk9zNbeQQpovoXbGp1ntK47ZuzJYx&exclude_replies=0&contributor_details=ufG42SiTIHie6fqMFs98cegbIPUGnPdR4TV6Me0uWiJ2y9PdBZmNdCZWsUCPJQHNKDUwRU1NdKQLUFZvEljSXiOqcrfVhXJ2AEyszAgMk6yfMxKqT4jRm7hzzwuQueT5Srxr1NemTMBGkm6eqq5Nxmm6TRXn5RsYi0pkNDHHqjnLFu06U5Ts 
```




#### post /statuses/retweets/{id}
Retweens a tweet
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| id | path | string |  no |  |  |  |  |  |  | The numerical ID of the desired status
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/retweets/gzl7xJdobbHcB1ZfJHG25rIAsPuxJXZZwk733lsfw9r8brnU93XevGOXwjufhufNOnRSIj8ftznE1KzaOwojddhJxMYOgeC5BuYjO6zhGWVHHuRv1gPeu7X1TWP9a?trim_user=fLWd5KjF2ZCYHjszPuPFIjMGlFDbPND5zAiFlCknCWljgOS6iIL12yInelz49c9IMro83JvFFRZWFS2YAO0DnJ1B5AFeMOXzglIj4dZK5ZGLRJKsyK5Vu6wzHcNu0 
```




#### get /statuses/show/{id}
Retruns a single Tweet
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| id | path | string |  no |  |  |  |  |  |  | The numerical ID of the desired status
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object
| include_my_retweet | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, any Tweets returned that have been retweeted by the authenticating
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/show/4g6MAaZAU4zBQrlATTkZOP6koNwbhxWlN27od7Y8cxJ2Y4CSYXRMMX7aLEm2bjnZlvnzCmHOTrRSwtLuqCgdAnnl2Knd3LdpgBYTXGIR7zKD3v7u8nHIL53OQr1TdfjuRinOY6G5GrIKWQe4eVN01RORiQLw540WmoLkusqbT9VQZ9Vd5Id7z1YSRJoXOoUaNFvi8Wt25oS4yNhEvvL5wJXotmlhLfsyVYQ3Uj50IY4hLmVhRGm?trim_user=qkMUG7crnFZiDQmy9szSqD9c05tRLQfca17R9jjwYjPC9bbjEKb4nlhoqKfcBvpLxwDGPWd&include_my_retweet=g2qpeBJSlVXJge7HZnUASjmpQZ6FWjtdmUCAvltRgrBxFIeF69fZsBoiBvYyPsLbmoMSKfJ1Glym4N1aXh9pSyIu3G3S9O4vdQoX58ZMtx9xlaHirRIkprPt7SmhGqMUgbRmjQ8MoijKs13UTMfid4MkW8CDzoxPzocTflFEDZp61s0UegdrkZMg8oUINrynQKg65WKIV9PXCPRQ64iq45HdtBVh3tFTdVZjSK2OURLwHCnNHFdMKV&include_entities=ewUwAobtB7tVZdXN7PzEwc1kTGxFrtFG0zcAYo3zvxvvLsjSiSxO4y8YfGDH9jnaTAKRYOrulWZ6pjZHbwvf4EekkR1ubpF4ZpVYd 
```




#### post /statuses/destroy/{id}
Destroys the status specified by the required ID parameter
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| id | path | integer |  no |  |  |  |  |  |  | The numerical ID of the desired status
| id32 | path | integer, formatted as : int32 |  no |  |  |  |  |  |  | The numerical ID of the desired status
| id64 | path | integer, formatted as : int64 |  no |  |  |  |  |  |  | The numerical ID of the desired status
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/destroy/-629974604?trim_user=LGoXcUdhyrBTjDou23y1tu0HQth9WXRHDgFQaS7JjJDCm26p6Frz9rg0Ux9Qv0y8gdZr56bpQO1dQ8CWN3wXvNXpl6gQ7PZo2YP850yVPA9GILDwP9tkWqKhx18EQ72T6S2bTA7IagoT21pRbSc7jXpQYxuOFxHLpKXik41vlqonrOfDHsK0paQnIlbnT 
```




#### post /statuses/update
Updates the authenticating user's status
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| status | query | string |  no |  |  |  |  |  |  | The text of your status update
| exampleStringIPv4 | query | string, formatted as : ipv4 |  no |  |  |  |  |  |  | The text of your status update
| exampleStringIPv6 | query | string, formatted as : ipv6 |  no |  |  |  |  |  |  | The text of your status update
| exampleStringByte | query | string, formatted as : byte |  no |  |  |  |  |  |  | The text of your status update
| exampleStringBinary | query | string, formatted as : binary |  no |  |  |  |  |  |  | The text of your status update
| exampleStringDate | query | string, formatted as : date |  no |  |  |  |  |  |  | The text of your status update
| exampleStringDateTime | query | string, formatted as : date-time |  no |  |  |  |  |  |  | The text of your status update
| exampleStringPassword | query | string, formatted as : password |  no |  |  |  |  |  |  | The text of your status update
| exampleStringUri | query | string, formatted as : uri |  no |  |  |  |  |  |  | The text of your status update
| in_reply_to_status_id | query | string |  no |  |  |  |  |  |  | The ID of an existing status
| lat | query | string |  no |  |  |  |  |  |  | The latitude of the location
| long | query | string |  no |  |  |  |  |  |  | The longitude of the location
| place_id | query | string |  no |  |  |  |  |  |  | A place in the world
| display_coordinates | query | string |  no |  |  |  |  |  |  | Whether or not to put a pin on the exact coordinates a tweet
| trim_user | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, each tweet returned in a timeline will include a user object

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/statuses/update?status=9iE7BZbDux3TUvIa8pCTp13goLCA9vujO9qp8C3D96w4Be&exampleStringIPv4=21.75.188.85&exampleStringIPv6=2001%3A2626%3A87a9%3A2bd3%3A86de%3A36e%3A%3A&exampleStringByte=R2toc1hTQnNuVmh3bEdFWEtoNlFPYXMzcGNIZ1FMOXc2cVo0akJ3SHdOZFJ1&exampleStringBinary=1111011000001100011011101111101100000100001100011101000101001111100110101011001110111111100010111100000110110111011111111111101100111001010100101010110001101011001000100010001100100100011100001101111110100101100110101110101000111000000110100001100000101111001001101000011000101100001010111011011111111110011110100101001110110011001110111101111001110101&exampleStringDate=2016-09-03&exampleStringDateTime=2016-09-03T13%3A19%3A01%2B00%3A00&exampleStringPassword=%5B%25%28NZ1%7Cu%21D%2F%2BVt75%B5%27%3AEbT%27c%3D.Cc2%5C997%24DS~GdL%2BRPB%5EJvZS%272FT%2BsJ%5Cwx%C2yHYqx-%7C%7BG.%3FP~a%284%2Ckxi%24uYl%C2a%2FXH%2Ba9Psg%40%2F22ozCm%5C%C2.b%3F%26KI7~f%40%29%C2fvX%7BVMA%5B.K%23%3FT%B0q%B0%7C8oK3%28vO%3FD%2Fk%25C%5CX7GO%3B6%40HWX%C2%B53%C2P%5D9G%7CHK9b%27Rq%2FwPte_lVVRNS%278%5E%B5u%7CNkpDy6%40b2%3DaMrU%60~%7B%3Dt_T%5BA%C2.Xe%7C%7CJ0%5Cn%2A_V%3B4R%C2%C2%2C%24.8Cb%24W%7Cc&exampleStringUri=http%3A%2F%2Flocalhost%2Fpath%2Fscript.php%3Fquery%23fragment&in_reply_to_status_id=Uubz5kn&lat=Mnd0D6AW93ecn0wiCE4csWlnqxXvSlpEICFmJgjSjx4HyBZaf4nI0J5qg2V8okM7XstGIMy2jDJSeI3uMrcNaidql9zJulQrO&long=7x6Gzqjijy1m2ONf&place_id=XxOoTXXCsjtT7N1EUHdl0wEyx0BlNQWLoL9hJ6Tbqn5xa6c5NpqNW4mt5XPTOLEcxOtgVnslKxTVD50rv&display_coordinates=frvBUAzJtnv8z2W2jSpMdak65Xb5pGwE82g2DPM7dhfNkcPE4frhqLovJzB8g8Moa3rOSdV6vaTQnJvrZWJpH7VqHwzYFmmQpOEi1zoxKhn81Tz0PjpxrkY8Rx6wTtmih1BjAZQlheti83jXmIvO3tXV03sUxPcPQO8rNZM5egnmjHjGpOvthspiwRc3GpSxd1Y10L6e1uAlbU2BJx510ujwlwA2Vsz8uy9&trim_user=jgJkKkGVeJwYhBZh5jNrPnuKQ4TkC3PVjyg3TXZ7Gv6X75edo1Fep9YfeSAQVpMfY3jR0iZGO5EVbS8AUOOkYNzcFa3BzPRySapTspAhuecF7lf294m8RWkw6o8GdZe 
```




#### get /statuses/oembed
Returns information allowing the creation of an embedded representation
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| id | query | string |  no |  |  |  |  |  |  | The tweet/status id to return embed code for
| url | query | string |  no |  |  |  |  |  |  | The encoded URL of the Tweet status to be embedded
| maxwidth | query | string |  no |  |  |  |  |  |  | The maximum width in pixels that the embed should be rendered at
| hide_media | query | string |  no |  |  |  |  |  |  | Specifies whether the embedded tweet should automatically show the original message in the case that the embedded Tweet is a reply
| hide_thread | query | string |  no |  |  |  |  |  |  | Specifies whether the embedded Tweet html should include a 'script' element pointing to widgets.js
| align | query | string |  no |  |  |  |  |  |  | Specifies whether the embedded Tweet should be left aligned
| related | query | string |  no |  |  |  |  |  |  | A value for the TWT related parameters
| lang | query | string |  no |  |  |  |  |  |  | Languages code for the rendered embed
| exampleNumber | query | number |  no |  |  |  |  |  |  | Languages code for the rendered embed
| exampleNumberFloat | query | number, formatted as : float |  no |  |  |  |  |  |  | Languages code for the rendered embed
| exampleNumberDouble | query | number, formatted as : double |  no |  |  |  |  |  |  | Languages code for the rendered embed

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/statuses/oembed?id=aEZD3zUyO6dVstXCxkKoh5Vnt44H4iNeXNS0nMybTM7lg4XOpIcGN84gd8XhrLwoyopVbY74Kep0jnOI51pSat9oC6G4RcsqBSmMQtRAHgB&url=DqJJs9BCDK0fRGjJTM9vFwivZ96HqII38sNACodf9eu1VOLOAUkfrDLqMR8czRgIj3jVswaCLFEGtpv4kPkLt5cfXksxbJfvNyrg5CS&maxwidth=hwxKW2PgS91ledBby3IJNYfAxGQCiJtAg0lc3asVjthyHSJfWsZJqfjXVaAeT3O94al8kN4EhlcZeVfaoeUOteMpomEiqsruDNCXBGBT2NSgJ7r8mmWQAJfZ5ThvmJ0ZxDX8jy1mmUD614eorbe1Ut1ZnivK2vKz8IHshJPEDsKFxZ3YaiZ5L159jAUm6FVfoDIFn&hide_media=j1Z4Hw3Lue3ujOvoYPZTb5z7lXL3C8AWaA0R74CBiF6CuC1ts1mE7WLsTxvwF6tPGtHNyjpQYwts9uWBwjfDf159yBFeH84oCLca5B148uxhZtTvM881aeaJPQYxZ3WCP8MUKOYSjvaiY3OLcXMmcX61O4zO8vqXDdRn1QgklqDkus5GpS3BQ9DFectmITkm6bK710snr5IVxNCXGFzxPcc4pFr8zLuFXeNYffmG&hide_thread=4CSSeQzUp6JBjO1Zf9y1DeYR1W7hjNCnqufFlOzKVjle7nenwMo90m12j8jCWVZmqf1L4BvZURe2espLfOUfbWhu5A72w7oWmqHr2dqX5FZj7p4meZCpWUU2v1418tYvUGWWTnTY2TiainxwnaWj4QlARqC0TAvNgsJaQD8Twr4&align=OBlbMhvR8RrZh30aEwXUYH4PkdIREMGto2Fajb2s2usjysucYs6X9bMuovl3h1xG4cRonTQqniKWKe8JGfGQqtlPYHTgJqWNDNb1H1r5jb14q9N7ptYPXjEV0xcJY8xBWIDEJ4J3gL7GVUOk&related=Mam5Oh6muQlDnXz6AePEYTVJ0CFVqZkc9GiYYplsgH5EEFKeTATStOCuqhpRhJ4rqnqoMMR2tWH7Crmv1fou30Yuiolz8p1yMrXzdOCHLjOnKbTMqhhuhgYzEk9NKamwCj6Q8IxT2mgNx9zYqQsI6riLLsyvDU2fe85mRDfTZwGxFgv66XOdo7Z9zxFcsHsHQy3HbjBaPiIvydBFaqTzySJ7qokS6NAWl&lang=EwXfHMxpi5CTLNkEmSw50WukPA7pxs3bZ0rGNY554HZPujuRb0XbXswM3EcA7fM6geM3dR9hz974sBVECTPzlmmo0yZ7OMd40Z8dRivqrDvUfqyRkorFKN4Km3SbP5fQ5o3XHyo&exampleNumber=1.490286E-106&exampleNumberFloat=0&exampleNumberDouble=0 
```




### Resource : lists
#### get /lists/list
Return all lists the authenticating or specified user subscribes to, including their own.
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user for whom to return results for
| user_id | query | string |  no |  |  |  |  |  |  | The ID of the user for whom to return results for

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/list?screen_name=xouUsm5isl8yJcvqKTzWMCm6dELdo5WVurPXNVgggoPZBlqle0h1DE8RjU4IZ1EustrgoIxE7mEIH53W5lXJ06Ak0E20GGv8aXozFVdMiSvZYyV3UTNV0nf12h2IXxR7ufGabUXtNstL&user_id= 
```




#### get /lists/statuses
Returns a timeline of tweets authored by memebers of the specified list
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list by its slug instead of its numerical id
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug
| since_id | query | string |  no |  |  |  |  |  |  | Returns result with an ID greater than the specified ID
| max_id | query | string |  no |  |  |  |  |  |  | Returns results with an ID less than or equal to the specified ID
| count | query | string |  no |  |  |  |  |  |  | Specifies the number of tweets to try and retrieve
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false
| include_rts | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1, the list timeline will contain native retweets in addition to the standard stream of tweets

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/statuses?list_id=PViCRi06j2nmLlTCsoS9y34vxRX1CZqsUI4M14Sl7gHSBAu4Zndxqi3Y910M0qeV8jH9oAvwQcprNTvMgJjH1nGapGXp7clfw3pVDVrt7QUUKqG190JboqmN7j&slug=ewzu2CUXfPp&owner_screen_name=WfER04y1ezKpXbLLi5YwBx0EaVCpK19HhNzhR7j6G4wEfipxno4ZW5E60gvKhFsys1Qk89qPdWtseT0Ch4Cd9gj9wPUOunmXodhxmImAEQ2TK2w178fgozqVplJUJ6R7j9FFR2fwSiq&owner_id=lWFs5UJuuapUw8OfeGnyP2dG4tcXMDA8zfAFak9Evyy1HngW3DuSFIzKcMHYph6YwHEG2NlxmUy3hPZltue9cNTozAmYRtXobB5dpqKLliPD8PYBjcKv0ETzegy6JwuU8z8x0Sjlb8ZjXXVgaGLakFJyViEFO9AXIJuJBN5MW46T11abHWm2B6AxofddpOa8xER8sWVp11i23teLpBN0Hoy5EMi3Atc883hA0c01ei4iL&since_id=4bUScBhKGVwZZ7s&max_id=fAfwbfJbgYukggDkrxdD8uoPqVPp2hBiSRP46ygnxKIN1l8tTl62PvSfqHFtZhLS8BWfacCHXkuYGDrAZyCP4v5vcLYc2K4bl0qvd2cbnH93lBDl&count=gafLfKX0Ja3teePfElsHyD4gN8BpLWA27QNnALojVrN9GDolYR2wv7MjfoJ1lj3saQPKCd4xFSGlv5GuXI1sQNL5cu7xOaZY1PJD2ObHGR3cXJHUsImiv8oIDvfsGfrI4am7ZxPGoSSmBAg4iCmOLKwofLQW1iE5t0&include_entities=sx38WV1ixBy&include_rts=TbXIWIelY0cU1uy7Xzlq6oy2jAkRcTt64rO192n73z144Ac19xrgV0jfAD7MxASC1GDbJ0iMAkREV4G5B7 
```




#### get /lists/members/destroy
Returns the list of memebers destroy
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list by its slug instrad of its numerical id
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug
| user_id | query | string |  no |  |  |  |  |  |  | The id of the user for whom to remove from the list
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user for whom to remove from the list
| owner_id | query | string |  no |  |  |  |  |  |  | The is of the user who wons the list being requested by a slug

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/members/destroy?list_id=x8ENIiUvPuosw55HO&slug=0BHktlgx1l99GGhlu0DovtTTVpZ17O87pPsTaIqc4zlKgC5KCJ98d228s1azPiHf899jSzvW9RHptNa6wjeJlhSOi3n8m4ouexN77i3gaKGDxRK4aZOwgHkzKHI6M7A1Eo8MHb3RWKvuBfyLemhv3B4OjNU6Uv8&owner_screen_name=TglAspso9XTKcrwrONWSp1GJOBQJ6&user_id=i0eEBH436d0ZXdqtEfhA7HCOqrqhaxftxu79bbcipdhnqIR5Y8F5QiUhJkyTRNnpiuyuGLM6Z4tpMkuLsaQjtLAc586XWtmeYVIFHvLGze5myA71LYkeJUrP2xNZ0adZ5WEMrpt1Dzob9vdVuxaesB4v8Ru91I87ENU6cn7QWw262f2wNcLfNPLWGg5IYeQC2KJe8R45n6b&screen_name=mdW9qHpdwa9dqfWouM1wxLLFCPLZWWpialrA3QOA1XNsdKQIxSe5DZKgPwgMsF4D1we4n2EoZsQddHVKAaPeaAuZ6KLzqQcsmqwKsb8sEZGRHBBiMrwW21V8MHIdxUFUlcEOnNh1NXTvzvNlWkhYld78VPlsK0n5d2UAPbCD9w8J1V5YfnXBA4JvU5YE6mKjoEUeQxR03ZK4VP2ac0MN4wjYBhDHEn122&owner_id=gTs8Tv7EA3tDdGD0uHwNG75jPJHQLJL2DdbxJjbjmFWAlAA 
```




#### get /lists/memberships
Returns the lists of the specified user has been added to
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user_id | query | string |  no |  |  |  |  |  |  | The id of the user for whom to return results for
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user for whom to return results for
| cursor | query | string |  no |  |  |  |  |  |  | Breaks the results into pages
| filter_to_owned_lists | query | string |  no |  |  |  |  |  |  | When set to true, t or 1, will return just lists the authenticating user owns

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/memberships?user_id=i6CYeIi3r0TdKFgnTrUCK5W6LTG6tgWLnzKBh3FI3zWNfcb8D6LncItXBa35r0ROzBqRE6AIGwwVII4lOPJ0ydX9n1fO1&screen_name=DBI4tnb35RzCMikQD9Gm9ez7oX8DMaKqMsufQGjWxTykbTaP2Qcc5MjtJr7vCRWpkqFa6Y6ERFY3y8SBZ5N5R6yByG7by3ATuf3Aeaf6Qd9pm20m8OrZV0AtHHEfLf8fvcQJn5PdjZDF2D2asu9nuKQcsvrdLAsgNjZaoPoHO1nQFq07UaupUlBnR3ADE3TrnTCLI1tx2RoIhoQbzl&cursor=tGcRyfsbTv5kSYXEHY8e0ZCJh1zsAU34BfV9unloTqIMoFq5DzkEyWnQYXjyRmCtCyC6VYvPodBNT2TxBdcaaA08xjHpFjShSvoNtTCS7eF1gyyRLL1Wl14TlLi05aiXGHL9Bo1JCGKSfjJ14LXqN2j8NC9TNsQt9CDL0EuClfvByfCD0z3NBnWpZ5iMy9gILTtMyYpTdUuL97paHtYjQUIQ01DybTgXMKKkI9eV3JH&filter_to_owned_lists=Q6oxAmRqhzh 
```




#### get /lists/subscribers
Returns the subscribers of the specified list
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list by its slug insted of its numerical id
| owner_screen_name | query | string |  no |  |  |  |  |  |  | the screen name of the user who owns the list being requested by a slug
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug
| cursor | query | string |  no |  |  |  |  |  |  | Breaks the results into pages
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false
| skip_status | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers?list_id=BUQNN7LARvVzE9vITdWKjkhTG9kYIBgkw68keTU5oQF30aLTnHDH2VBJ4WHNyX844goiajoz93Caeo3C5Hk7DVRHSyvqvDvAUTS4dhDnkgxyEAbKivSVrJCjh8KNLfnG9gLmxpJSFgrjRC397V5zEHSVQCICS6i1n3oVs7N7&slug=ergRuqZpvy4dqZ33IFVPYXc2l7vtVDSa481yz1Y4z2i02m4L10A0XN2jUyMQbE0gN2Pm4Nr&owner_screen_name=QJET5JE7Je8H1b0WJMMVrNbeQ0AUO2yFMdySWcZGr8nsjnp39cZAZaPQbqL0sjFexe6tr69SewlyULC4XBFX&owner_id=uNXUyYmSEBpSHTkO2c3zyBujeygPddBH1zCAxZsbAS4iLo6OB9o9LSs0qJPEXrlY0YzyX2KxUOPFdWtO6SYSKqSaaHP79b6a9GI6IsDChtiuqMjwEhooIgzSYo07z7iIN0Pvtt8LWqgmczTQRifzzOsxdsFMAXvnYkTsN1dKrt7D31uVjJuSyXqLp5y033n2o&cursor=uchIWIc4mg5QboAGg8DHT3Nr3QvqTTHo6Y62Hj74zcVKBvqSE3zx6mZaduA6ohvu&include_entities=BxYVE3uRYfsuGk8KTGRfF1saBzyT43aGB9Bgc67blAF1UOMOuD49Exjf6S9bWkRxttNFzVRVvwXqkJeOmiY0PigWbp77JYEdssT1nKWTgTjBCyqZQpZGHfCSFK0pJECb7vcvf9ow3I8FgyE7YENFTqyzayZTdB5l7hQnrfTuX29eAOlyt8enzMWKlVDyxJTE0K1rZVWXX6byUw7oFlLf8HZuDD&skip_status=amXPnHQPHMLFKRQiMnqa3MViVDipgVtqiqfF86uPTguD7lWUIn4M9044DmuTiXjAozgwGKmz0Rd8c92Vw7HG7MLK9gDsdX2Cwi8c3vM4m 
```




#### post /lists/subscribers/create
Subscribes the authenticated user to the specified list
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug
| owner_screen_name | query | string |  no |  |  |  |  |  |  | the screen name of the user who owns the list being requested by a slug
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/subscribers/create?list_id=dy9fuGmbmtY8e7oRzCOCelVnyZSk4ejhNsxh9TtvnrDCz1t8DiLSDHfbG7wKmQ19jyrssUXQmBsVDW4heQ9Sxp3dwAXTqZ3Jyub1p&slug=RLKkHngMFvCOn9drmK1kErkHbScmTCvLog65EmRjRt8fCmGZ7HjL9EtkwFHqhdcGtiL8EDrw7ALKWsJ393OjHiEeXlEfyQV28HaNlBksb6c8y&owner_screen_name=bI002IiGWg1BwAssCBaMpvoJYAQbIo8U78V9QePNvRo2rRu4&owner_id=FQRafB9PrkyQstXBo7rDXf8 
```




#### get /lists/subscribers/show
Check if the specified user is a subscriber of the specified list
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug
| user_id | query | string |  no |  |  |  |  |  |  | The id of the user for whom to remove from the list
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user for whom to remove from the list
| owner_id | query | string |  no |  |  |  |  |  |  | The is of the user who wons the list being requested by a slug
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false
| skip_status | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers/show?list_id=DaguFkXkbOvqpEgQZOGshE3GMvjJKsxoCOTi8QCjE8K4M0UMOBe6giN2N7LxzjVc7OufF6zjejn1jiO8U2fak2c89YFIhBVpqpE5veoKxMMR4AZZCe9Xhm5rkLaCn51NuGS0VhKs3xk87j8KyhHQDNhYzrBWwDJ0jC0eTLHXi16qleaUwSKaG18fsKcYnVZHy0WrLDp4Fwu1KFVgxFqdGzt9jF7GB6o97kBTY1XDxsFi7AyFgZTWzm&slug=T1dADkYNriokgqiUXLAfTaOzqNsnnOtgQGQt1Oht7FNn56i3SSiL36ktUMRhBkyr1oV2ccvjSjHYq01iTk4WrpqlchDNCcfDAbFNob7gvPfVPhdJBhF3H5pTn3GZfWCQ7iDvtLMZA2Uqj79VpPY6Uo0hrGgGDTwKbagFV2Ew4yXoG6j6WidQGd87UpOxilhtvy8qANXFlU421n8XG&owner_screen_name=OnzWvtlj1EEj79RgAs3y7psbruzArgWfDvc9Zys1c7kkhbASDDqL3SXumx4ON04rwhAwP3x2aSms3XkHBKtEDq80XdPLeTdLaNh0QP31HptLmNtXyWCbmLck&user_id=16dUjY56g6X69ZNzszWg2UOYw0lhdGgeMt96rfdHlaNv9B4Cb1TdVHcrIyJVeZa1sj8TylBUwppG0uibvbpqTBSCaBxoBHq31yXzUyuqYT6ZooaUAAltcd5mPDKrlbumKsWE1q4ZkaYIz9D9JYDVcJh2&screen_name=2tIdY4Yq0CrqGrLRpuqy7Ai5eehXvjkyM3LK7Kb8mCz24kUtOk2WUl18zj64CrCpuoaC8lKvYky2FswtMypHTrQtKWxmoaMSzWuIifdgALifdOJ0n8HhAyKkv&owner_id=HTtuL2qgLIwZY6&include_entities=hmY65ZteHKOfv9KNQDgkpjLG4td3skOKGNQLNkZu5NKAWunN8D8yWTf1ns4PNTAtHqeuLeZQ2JqZeNMmrUVnOapbDt1qnBU429zNnyDqi4pwRbTj6PGVZ66Dz84XKY2M8BAwaeWsilZax&skip_status=tEHazHgGlQOpNyoPlwrV2B9Y4sk3CRW5wDf5lvMGlA599uYu0qq31z162m9Ed5JKJZP4vBKQcQ0lkYPlpfoqPqwRMGw0MgKv 
```




#### get /lists/subscribers/destroy
Returns list of subscribers destroy
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug
| owner_screen_name | query | string |  no |  |  |  |  |  |  | the screen name of the user who owns the list being requested by a slug
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscribers/destroy?list_id=zAKblBncBJwA&slug=SZPgqEGXwtD3tqjdVyNwjYRUm3w6A7Fs6uIx9puFS8Ily2zuAm0UkSPHVlNvtsXzWG766CMZKvljxUO8gP2AHRiCd58Gy6gvMoBT0nSLSd5p7TxnJAYqsh3FnbmVhDr412Y1qQMi4RIcLgAuRyUjQYZdal9sZAw0Cv12lOlqG4CrkcWbLRvBPuOZQXrPxYPatRdPGyfmDROX3K9PBEqr8fqZdSOLQEVkv99cIoylg&owner_screen_name=ik7s9J7AagPAf2t3NjHJDdSNpAcYVsleNsHWbOwm4mXkoqncJ5WniObIpnGlQ1ADuhAG672btZvSpS59Y1xhPIZf6FAWHazbsaRyhUJLUfDj7It6J1nzJmOQ2pMKAmV2wNBOIlzCAcVIVpOFqcfay40BtNl39h6G5HuN23pDgllc&owner_id=aRbm6mVamwE9SIj9OZfwt2zxrcONx0yIRK4Y6Z9swOCowVykUNQoQpWiBK59KERCoWBuWLXszAR5vqpqegP4FLmhvr 
```




#### get /lists/members/create_all
Returns lists of members create_all
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug
| owner_screen_name | query | string |  no |  |  |  |  |  |  | the screen name of the user who owns the list being requested by a slug
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug
| user_id | query | string |  no |  |  |  |  |  |  | The id of the user for whom to remove from the list
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user for whom to remove from the list

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/members/create_all?list_id=g6jTuguZcfWEOxwT2Wjtazjef4BxA3ZR9jKEzeDLuAqi7XcaTvD45Wjl1UTCYSt7cdLLspxWZYe7VrhPXVT2SdoT8hw6aZemdZ8FoGBoEQvziMpfIiiAwGuEY0K80YvdYESnkuMYlhyD4XTMgbnNSRrQRcZRbu5a8XxtsksOC0sGYltf&slug=R2oIufAGerSJx2SvAlXUNMwOedNzH26y5vhALRhZj9IQcBlMWjHK5eyjsmT9p0IuwZ5hQmgawZ0IAl&owner_screen_name=xEchKrQ4TcX2BYL5uKbMBx3L3&owner_id=LLD7gaMtswUiAOuyR5xCb1nmNYTRJXTvIxDZHptaWosxcW632DGdF3At1ukLrehaLUatkDDh25Pf2Vi4zZhe2SH4m2PNg7X128umL8EO&user_id=t3fpmkYlBdn&screen_name=VrQXhDeoBfqJKNvSsj6WmmmI 
```




#### post /lists/destroy
Returns list of destroy
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/destroy?list_id=F9UuUv955w6gBHqbMUGG9S4lMuGkiVFX5AsZ5B5b8brJTRVFMCmWvqihVYCdUibZTDZYf4anfC69t2OgEbc9Burxt4LnnWngzmfOqpcG1jPvlEMZPY9qtBYXGJk3FHjf4z4uYga0zZwUDiUsh4TKFSHlB2phKJwOiAihRtiqsO&slug=67gzokt90lRmWTLeEuKsNlL4denDHbZNjfnHzQQAbHW8BHmfc7HZtt4GHrkpDjcWzAE9quJBcFJOm63ydLyGfCnW3HlH1yDA9hJzMsbZ8UNu1R3fDBVSdjPh0bY2KCCTTmsGODGWyurzlvOZ6KRk4HB5Sz7CbJw55YMUCsRaXjK&owner_screen_name=OziUkaeoRQtKpBmBkTHqRukuXcFUvpdjZvekFsJxidhIOEk8x2zpwUTt6yoCYBVY79iNC1kVeBD3gYcN0LcwF50MEpoC0jA8tSV5Ug09SEc8CoVDa89Pea&owner_id=SzZuAj5IMYESTUT2MyfVaERNPZXEd8g6IgAizG1mEFfyA8BmGQiRv9Fk8DZmLgstw3M6JNsosIW3QxpxoHpUR5fZIeluuNY1RK7AyAZ0iW48utGSb6N2b22ThooMcmN36UDFvDFNzKW3dDWpJJsUMvO3TcP5yD8FyMk3p0QYKN2YqYo9IQ3ulRxf3nkC0siyeCBDDsCofEmFDLPlCSPYKndOKxqKZJjelUSZnvnCaKi 
```




#### post /lists/update
Returns lists of updates
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug
| name | query | string |  no |  |  |  |  |  |  | The name for the list
| mode | query | string |  no |  |  |  |  |  |  | Whether your list is public or private
| description | query | string |  no |  |  |  |  |  |  | The description to give the list

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/update?list_id=v7870Y5Kljz5Q0QQJ9454X4sss4CdnpIvyQvxWgSfQY6QOWzY1E3YJvrbA3oXt7t2YZzUgra6qgWedvdeahdTME4mItkbBOdzNMt3eEaEU6T8C7mMoAFafKxXdS9OGnnuaRxovH3qOXyq4VcswRDLBaJP3SEJf2dqULOqtSQhPpHTlTmRLZDnamddfRWvUaVPVJfoC6GrvnlRhHI3HmqRIE4Xw1tqcof88vxKBdb6BxYTeGWV3nNL&slug=SJxUcY6BeeJJLtkZFrAcptq6qm9N9VP2FnWSl2tAgck2FF1k6Bxw5XDvkNjuI8wovshRuKsLXMODrPYyrv4xsI2NvlheuNCZfURJEjv&owner_screen_name=5jfw9d4AI97bRaYnvfB03eZi8R2NaxpfREM0SRAB1IMSSLfo1Ro45omdfo1pWqFN5sNXjnyk6ldY6tm7kLbp9xDoWEOS5uFbWt8gQHBX3OV9hihC3s2c0FBXkqPqUvBRYK7PsIMvxIEP0Wr4ptgq9SnujdUdJv5HgdxIWkdt2Si3OK7edoEmg1QAfLNYhTGx6ef2ytwBlPEazLoN92aq410jMOi4HYBOcRRLknmGd0RM&owner_id=fAWiKmnLnGycZCTXeIa5zVqXi7ajYX5ex2whpT2MABYzdSxrAIxaDX7W5if3flhMnO3NI6ziIySVqqn18VcMSkIXCY1RkiEI7IvPO47wD0s3qQ5yLhkEB3Cd1D5lWK33szSgD0Nh0gkr6p&name=RHkvin7wpLCLHmOKOoD52DTjE9D5g357LpD3NLAcwdXdzMYoaBuceowSy9YOd3VYsz2gkDsQQq3qd1PoCjBRI7KghI4uL0tezvuT8X&mode=ZoNpBPeZsyAkgH4xYMBtyCWMcsh5BePACD0etedVNOg3vkBu7dYFPUs1nJ7ZXXzABzO4O20BQgFmBgQIuPnjKPl7z&description=6wqG71gW55Y6HOmmbXD2F7R3rBTNJsgQZGx6IN2OT1UAQgX1eA3UIUXavRXfje5iVCpDqssjtmTjDQkRroLaiJkOAi3Uw8dsLD6b5yuzUoTxfepGCbRUUbJvuMq1VD 
```




#### post /lists/create
Returns list of create
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| name | query | string |  no |  |  |  |  |  |  | The name for the list
| mode | query | string |  no |  |  |  |  |  |  | Whether your list is public or private
| description | query | string |  no |  |  |  |  |  |  | The description to give the list

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/lists/create?name=GhzRm7mW2KPz03ZHFayA4KjAe61g2EKJWkBirXfuI44J83qNdYoiJISYOTeRyYAuibNK92eS7iBfm23z1rRK9JIYDWPcVqHeCuYLxdEFwgUSiXrjpj3y3MwGImTEMA&mode=o4RaC5PhB5cuoaWIzfM8iyFZh1SVOsOcxFnaLcsmiERHONpo3cwlKbl2ddY1GNeetBpeORA6wsOkfeJiqgEbsZdFdcGUZU9swyGkphrVJfgZu0hUgW5IWjn9w44wZdYwLFRbXi6HynG2nYXDU3mRnK0TO5pOiok34be1ulJ3Ip66o3Kj76auQboFgOtydOCh0Rjvc2&description=VsF2QJM9QSkkIvJoLySjLGW3HNmd0pLVSrXIaKS0CcllI4JtCBNoiJr0wOdwdZs6qqOAaHANUW8C1S6DtT2MCtM9hZFvZ8BpyqZJ8Aw3xFFyxMc1FeNiHArZz7vyg6YPxYyFy5I6KoEhaQjQ469MGBMgJhPZoNOVLnAksjqdI5vSVOJ0VSNCtzScRHbfv0ahoLBQ524N7AG3op4khRWKrOXjw9y29JjxvVoAXto53 
```




#### get /lists/show
Returns list of show
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/show?list_id=9rt&slug=ML5IwxxtQ3Co6M8pjDkIeibDoeIyGcLsXRatoIXeLADSmLhGpCoEVAikO0SvcEX9v8DTQB8CbLuyxMeXpDBldTF2Tyx6cufIDTBuuK7GvBe3ot0N6C9jwOlqnSwznLi1FUvaECQae4dDxerEQAXmpjNMcjmA5EBKy7Uc&owner_screen_name=KmZPACnO41FEZ23iPPv8c5dQHXoPSBADYAtydQnhS2VR4ZaTPG11MfRtdgj5RUJPucoH2LYVNUNRTXLJEMKq1CUfSdkK73zCgYjjJiewd1o7Z9QDWA3YcXd4byOjBoVSnfb6ypDLr2Sqc&owner_id=38i76v4kzgSozuNumaKxhiXV3oXWP9ETiX0os5J2lBqU5epsp90HsXCwmzsbJ64145qwa9yvLZqRePjDZjkshXYExqPgxUiBZI89SHFDG5uUVOyV8ToqQm4nNTElOWXNF5XxMCbtIFnEuWACPY2Gl6380ItOFrCkwzSjc4MVKaAe6aQW9TCu0GD0o7P4ysp52ipemca6mKktVbp552z5Id67kWbToAZqSoFeAQkXAFqwQQBVS 
```




#### get /lists/subscriptions
Returns list of subscriptions
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user
| user_id | query | string |  no |  |  |  |  |  |  | The id of the user for whom to return results for
| count | query | string |  no |  |  |  |  |  |  | Specifies the number of tweets to try and retrieve
| cursor | query | string |  no |  |  |  |  |  |  | Breaks the results into pages

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/lists/subscriptions?screen_name=1Bp7IK3TDstCSm0xBBnWyYBZvsQ7oJjpkIx2tBV63pJVLKtmlRiUQUTmmKtKtNaNwIPZjL5maPhWzLiVCBPtvJPStjDX6OKDwACPlIbvxtr7eK2RlRlRAaK4un1AbMdHmQxHyId6bFdqpfiL7DDHOnMiLOTWB7EXXcF&user_id=USC6yQxX5PIcsmUhJHzuwsr7A64xiK4cDHjbxQ8DGRQ8dLqXsZrYsT62ZaAhVFuymOJUESxkJotX9TUCTmBlfHoeSZwNE1l0P5UuXsPHQjE0dzC6VdsaVRpNQVBuWWvM2&count=gZS5HJomJBVmIQzb1v2qiSmTniQS5SilSaqAUPWDrR0aIzlJ5naogwhDP8wU1OfUZGuTwqxXix807tKdRUB8qTLg1ia36qX67s0DSyBa6JbddVr4P2cgVYxXgH0&cursor=8YtfquTj2ut8eFmrANw 
```




### Resource : list
#### get /list/members/show
Check if the specified user is a member of the specified list
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug
| user_id | query | string |  no |  |  |  |  |  |  | The id of the user for whom to remove from the list
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user for whom to remove from the list
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false
| skip_status | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members/show?list_id=l4iyrMuTCrbgFzRV0BGO6zhqFdN2AvJVA1t&slug=OXVqp6G5Gy0H9HwggNGW1tYBZIwzJ0ByYwYoDFtjeu0obwErklolOnXO5unPvZntvmS82lsgQsE1ZjtjESFtfDhk7F9CEw69TYiVkKbbdQccaGwOyciNPz8XeizSOG2IFkD05PbiGouQ41FDdXr2xzZLRzEGgGoW12W6R8oxwTnBU3f70Gaxgaj8JXP0EeWFgTL719Fy239X6o&user_id=75fFmpZv9Wk9Ay5gPZ1X0bCydFIaM7fUcuAzTz43woc7XinMhoJhzmQN2yYPFeJSIjsCSwFoVSvTaTFrhpJRLzFO8DDORmHAG9dzGTYBLtuVmanEA6wmGbaOPNDHakhRuvqaooM9Sh5fssU2zqofCz4rmH8x1&screen_name=pvWPGkesu7Jznb2hdBICQkbUMyBV6Dlv9hlPCzh6H1G4cImqj43ape5bNH6TksouKJjmjBt0C95PRrgbwjlVyr7l8eftHDXrngOHRhHtqNiieyuKSQGqhOMp31SKFPc260KXirrJeK1tjvebmVCDKo2NpVy5LL8RLSO4kgNz0P2jkhuGc6kWvnKVii0439VP1KTl0GV0vXkQePxrWRnrf7mxqnCtwxjyic&owner_screen_name=iTPjpMDg1sOsoGQQVYdtoB5S7DcGVoAdipxIcbZeENH3ux&owner_id=pw7TVIYOPB0vwp6KHviqItpW7dDaHb47Ib0DTZrJBrf7QlSyRaZzEpwLC9Wkl1r3csG6r8P2A5arr3ZieYSSnoE0yBlUCMXPfEVHNLJnRUOiXOAcNt4bSJbrkwlXjiMyXIfKuZ7lUWDRKe3xH8IA&include_entities=T1cqm9KFWiCFyn9yvusr8kbmoI4wrEokGAL2KvIHOlmnIvVd0oF8IRv6zAD0f1lVC7XnDF4r1qPJVKXW9D4RuAY3aB4pDqk&skip_status=yiDbYHDZ8sJ4d 
```




#### get /list/members
Returns the members of the specified list
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false
| skip_status | query | string |  no |  |  |  |  |  |  | When set to either true, t or 1
| cursor | query | string |  no |  |  |  |  |  |  | Breaks the results into pages

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members?list_id=0mk5eOFcSPOXfrnzIWSl7Q3LQcdzgrghNAm2p1ehR3e6vCGdyyzGpCrgPFQ566mUHIW7KboBeCIJeoXNXwun9VDYBt4IAqCi9ypTKOvYqdIFCGtAcXXmTBku4ocFPPYYonS8bo7CCQifwLPJIM5Boq6sOj8E86DwuvFGUMjwCBL9mAS5nYHLoOed7nRgtuNY0sEVeYrRzd0WOT1bRJXgxctEzlV3QI1RaGMpEdgeqhafbcq2&slug=oisAM7973cXLdPWUBlyOCNfUXu59V85jryUeF3lJgjuu8qoJMXypKOjHjpRfyWyZutdawzUMToh1PFLCDk1n9l5sKXHiTgioKwzg5t3YSk0I0MkD7m1gH6Js3rLXI4msAWJGqMEi7F18slLzHMPpT&owner_screen_name=SX0DVIHibieUYEHCXPiYXKkIk2v9s&owner_id=JknJXisFADXPyVufyr4Rq1BKKVNg5fGOz3yxl1cWFaLd6ftFHxw7z8Sk4GB9VhYvkx2GyfCepnrwDVbktHs2PlnT1Y3Xf2sAzug8JSn9gOGUKRedzHfp2Dj4Bm1RptrZYH8IAvRRkyL4p0hYHxoKaHOL4QCtj4shMAZm6RdqpZuPZMOGjcqtTffY5SrpXUHJuG5Byj1YjwOiiCZCPp6JFlHLe9ab3RUxy&include_entities=&skip_status=7ka5DGU&cursor=ZwUBmkH603NLhWVsZNnxlnGsHRylysgxZb9mvQsvTfhbccEcZ1KlprN7imsROJoOUxaqoCWiSdt5q8hq92LztzGMV9DKS1yNzIdYlagdnKjOSAe2DZB6yhSurwejxN77wl5Rvm5T6oHZZW1CVCJuUCZl8dFG1MNx8TpEgvxnUfmUbnw7ZgCUSBf0PVGRIuoQnOuEk21ein8uKFBKVeFOQUOGQvxyZWpnKU14W2jeqsIb7kW3zBRpwF5maCVa 
```




#### post /list/members/create
Returns list of members create
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user for whom to remove from the list
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/list/members/create?list_id=kxjezobBIq2a9dhu9l3KcshSyD2bydKTK48jskVbKXlTbDnkYr5aUm2s05Eziot3sBmVVi6GgsAr5YM3pSejegMfmqOFPiIhT4dPnjvDL64R4RUtJ9NYqAdM02rQk97eel3BFzfrFjiJaddTm0RMA5yB70rs9zGoUJ0Ajf1ZzjIJwWDTXvFxAe&slug=IeBaobQ&screen_name=6ANGT2HSB0BlxyZqvu635kcOzOYYZPL5qzLkBsddtOy1mxrS2yV8T8WtWVrVKd1aMMuofIBJwaKTIcLKKHTDPP6LLyHvLIGyvbWLTxuqIekqq6bbN4ODUVpFt6bePRMl3J6XhAoZPIpgPAr&owner_screen_name=FggzbFeELpTBhGWlp2iGDHFtp5JfGbSlr8VCO9gAzabRQ7cgavWOcCiBI1RocJKESFgGPxgpHsgyAsOKXLz&owner_id=oRL6TCv6mfKeV1VLycafErOeTCZRny0LqMSkpnqMDb1zcWkL8v0MWP1Qr0HPzIAZvskUQLGtWH29EmUMSVzOKAFbAm0a5BaA4uvUfbnbTqkyNe 
```




#### get /list/members/destroy_all
Returns lists of destroy all
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| list_id | query | string |  no |  |  |  |  |  |  | The numerical id of the list
| slug | query | string |  no |  |  |  |  |  |  | You can identify a list being requested by a slug
| user_id | query | string |  no |  |  |  |  |  |  | The id of the user for whom to remove from the list
| screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user for whom to remove from the list
| owner_screen_name | query | string |  no |  |  |  |  |  |  | The screen name of the user who owns the list being requested by a slug
| owner_id | query | string |  no |  |  |  |  |  |  | The user ID of the user who owns the list being requested by a slug

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/list/members/destroy_all?list_id=QJHLHeJYWKl4IPk9jdsmHWvWBRnbFTCvCjhky0iuLEzuuTDN66aO2FKDx8Pd2sIFM0Zk1iPMX&slug=griUfp0pe25YGC7wP9YyPLzP5B8Un5iEwAzL0zbeCgdjTkQJuPijAR9FthzRmSvTt5EtEQHh7UA0fqKKg24QUdvnu5eRXKKrPpUufCLmxmmMN6w39AT3OoqiuFarpUTejOIyquUYQhKEohHySABGZ2ZtH9V64PlnD4W3yR1p9M3y4K6XlHElKDPrNLySAUgdYcgw4iVd5YL9JR64zKpjofLc0j4AekNcx&user_id=IBmEOsDABmrIr0tRkS6547p9HDuuP2zyDWdsoQ30duIFvcwQ4DV9Kl&screen_name=sYNXOQwntsAWRrZREuAj0MQQRuM0f7kH67EUXairDSoujolYSWhTJ8JACvBRCVyJ3c&owner_screen_name=1nWs0ORu7fQ58Mn1vwK68gH0TDzCGMgHa&owner_id=aa01F8hvepiCqO8bUhrCilfRXVEeDOqNZrPEA6aPvtrWhA7cSzOaU32RZH5CvwpuXe9ykjnQNPM4pTghs5sm8ve7ckJHQ9cOnlnIFKyszkxZeOhHTJ41ei9rDS8u2liqHF8mqHP01nZgbgX4016fkfGX8PraaKASqJfQq4QssQJD7GI7IOm243ZdTrn3bYWCIbs9gjBI9klg13oJSLLWPLa 
```




### Resource : direct_messages
#### get /direct_messages/sent
return 20 most recent direct messages sent
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| since_id | query | string |  no |  |  |  |  |  |  | Returns result with an ID greater than the specified ID
| max_id | query | string |  no |  |  |  |  |  |  | Returns results with an ID less than or equal to the specified ID
| count | query | string |  no |  |  |  |  |  |  | Specifies the number of tweets to try and retrieve
| page | query | string |  no |  |  |  |  |  |  | 
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages/sent?since_id=dxMpwI1fTto9N0RXkdemgD59oR6dDgVQOHfl&max_id=gAjKYtyYkvjxKFOnLYLC4ZgkV68Cmu2C4mn3PV1aqlIb1xyMvkpzjFUeL3R7xUKBg7E62Ght&count=Z&page=3wdP1xfBRUv5GzXN6RyI8FnfI3wc6vR92&include_entities=Z4BeFt9byPLvCRnazvQWLy0hK7NBgPGgTivzLELktwP6odhYJ7UuGV 
```




#### get /direct_messages/show
returns a single direct message specified by an id
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| id | query | string |  no |  |  |  |  |  |  | ID of direct message

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages/show?id=r2y3joJAh15RNJD7d9XjyaAwTIroom9PpITJ6Cj 
```




#### get /direct_messages
return 20 most recent direct messages sent to user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| since_id | query | string |  no |  |  |  |  |  |  | Returns result with an ID greater than the specified ID
| max_id | query | string |  no |  |  |  |  |  |  | Returns results with an ID less than or equal to the specified ID
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include status

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/direct_messages?since_id=D4NCxvtF9T9n9Q1y0kAd46Ap7GOx6G2JKPmhlPXuJ7SSYUrYf1ck8NJftyMAePjYFFg0vevelo7jjyiyAuSJhCYLaLloBFnglEgQSM4eabytKQ2llV4Dx3pHPK6qqtGL8XB0KGfUSNoDEqZZl4DT72AXNHndb4Zj2BkMhzGam5N0vM0RQEKYGlVt2jHdnGxphRbzrSJNXxOtjPlat59aq4EtnlHL1faj6mSxfB&max_id=d9aGt01Dt7MEyRi1fDJ0FYbY5xRDNtY0C9G59IJDPwhnnApDd8DT7PScnJPadOaPXRV7zEKpa2NxCcbQlOKsDCF1mubzimpgdknNY8c9aZHNcSDxGn0k0Fmm&include_entities=xWtTmK7G7UFg7Or7wejoRR5fSpfxMCIjzbdVWlC3gikn7LuDZO1RF66ywm5jZOCy0QuWc70spkPx6ka59cWPj3nQqt9phMYiCsePAehZz6wFrHLAUIpdMN3cgdCxZAPC34rDjIDSPayhRjSM2hZO430lgCSgdISgMjU52xYSIx9AR1mTjlHopIJFlCVykOP78Jdahb2ZJbzAdWtwibUHU&skip_status=nfgjNB7CIflVqD7sCQEcqR8Uoq6j80XvfeO2PVFyb1tBEA4hrItSACMY3TibTfH9uvckrRSDSlewWjNo1hgCU2AXVT9P9QYDmaXO2PsUbHr80fw1xMDrPeoL7yAgpzULKRAMH2HSJ91JpxLWjpn8DMTLlu2K3WwNO6Av9ioSrpCQWnNgMbpqYicjNe3RbzEZGfvPxTHYikPfHCvuNUVLd751m9SyIxxoM3ekWWifg8vXK1 
```




#### post /direct_messages/destroy
destroys direct messages specified in required ID
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| id | query | string |  no |  |  |  |  |  |  | ID of direct message to delete
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/direct_messages/destroy?id=yVok9wqaSz3rhAYGn2VHYRZe78J5TKyrGWMQsc1kL4L3FKK2NFJLwJ0ERKJKuhcbdZ1Fc30X7M1NxMPkry6Yh6C9QmTlD6xR5zxhCxfKkhxS3mcuVjtdp5mgrgC5m9WsJtKl105mhDek0qPVJj89pvqQL3W8dTAWnliolnLD1ZY1qOWa75kwALnmOju2d5ZAqhZMEKqGJoHacEkjJFPkqdGfwahKggkHxjtc&include_entities=TSNhzYudiNXXDhoQXDn8U7obr5ILzVPsNDKnBfBU2ySGPgwNTUVN2kYtpHfYC4rpHcNjroduW5aMlHAeBw2DQ17gInelrGL9SytkXGOUM 
```




#### post /direct_messages/new
sends a new direct message to specified user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user_id | query | string |  no |  |  |  |  |  |  | description
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user receiving message
| text | query | string |  no |  |  |  |  |  |  | text of your direct message

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/direct_messages/new?user_id=G8GhniNpWEr3Uar8vSPh2IPv2McQHYPo7vFuNsUK7lN1wea27Z&screen_name=aH9FJWSADRp1YVGsJ9mtgIhhewrhErAO8KuSGmsjdSlbN1Exb00sJhKYOcfsDPgLAKDg76AkYVwMXaj8bjAUBlSpx8SaY8WyTAO0GolFjRrg1Lpd507Hl07S8Z367ZE1zt1fRmVbdmsf8RsdSAUdA16J09P88u9IYaXQxT1Lfu0nmtBe3vsEwznxIdFRIOAGZywxryiG2j4pMFDQb6uIFSfo6VgO&text=QvJo2hPAzwDSB2EhGvsM0bsSqQYm7N6XiQmk7cVGJzykCdCiJ55JgyBHpA3wo9uG0R173WNNwm88AKrjQw264EOufR0D1vj1ml9qiWdOjlWT6ndWUf3ZURt9JuMLZ6NmrWMJT0yclu6s 
```




### Resource : search
#### get /search/tweets
returns collection of relevant Tweets matching query
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| q | query | string |  no |  |  |  |  |  |  | URL-encoded search query of 500 characters max
| geocode | query | string |  no |  |  |  |  |  |  | returns tweets by users located within given radius
| lang | query | string |  no |  |  |  |  |  |  | restricts tweets to a given language
| locale | query | string |  no |  |  |  |  |  |  | language of query you are sending
| result_type | query | string |  no |  |  |  |  |  |  | specifies type of search results you prefer
| count | query | string |  no |  |  |  |  |  |  | Specifies the number of tweets to try and retrieve
| until | query | string |  no |  |  |  |  |  |  | returns tweets created before given date
| since_id | query | string |  no |  |  |  |  |  |  | Returns result with an ID greater than the specified ID
| max_id | query | string |  no |  |  |  |  |  |  | Returns results with an ID less than or equal to the specified ID
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false
| callback | query | string |  no |  |  |  |  |  |  | response will use the callback with given name

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/search/tweets?q=Epgr9Tym3wGBGg8AYzYnW8dmR65YJpnoODPYxokBU0dBhlbgUaDQjRcaXi9HHw5waVuHkPieQvQ7R2oLc1CwSPHQ7QyPnDmxyRfSHy7x4YFV03Hd5jJY8rPghn6F0sdzkss11Ay5ye1zhIMn2wlbXbsfyyUz189lBCmCdUIL9Jlrs8&geocode=uEaGCl8RUGMuHUD2vfp8tkQetAAU2IJxmTdYfmQa2&lang=EKxiN3ycb1w1gZBQUEyDcVxpUNMKXOnCzVUmYsz9u6bK5NA0r9ED5b3ZYPKWE7ze2tB1Wabqgmam9LnBU1e0ciZb8J8NRH1UbCW7N7y4tIqDuOepPtp2MpeU8mH04JVflRn9YVdsEE59skyhNXkzmyuvVcwZVrfgjDqizDKdhQmKaV2XTmxfU2LQe&locale=P9J5q3IQlht5vLVSv5Nx3GTBWODIES0u1KzrNih8ALd5w9Y2fMzjttVpiz8Xr8rsS1TFkbOUW10tbYvrK5KezFDSfMPGUh8Nj2tDdhyajzDux9VifGwOmaHBWwhROqF8s8MGpkQITudrD9KSQhHcroOoV6gKwVSZ4EFuZvcT0qkDA5wqmeDOCscyytj5pb4tQKXPgaJgB3Ub9qBvFejiGwQfZ9k&result_type=lpSbaQ1q1KHCOBNX2osHDLZkiQzh0UHlkzxuqyUriC37dR4gfxYTjYdBOMTOHAa19HvAfq2y25FgXKxdhv6Atjbi646OEhPOYkpeLrMOxs4udBHv7O5A8hTemZ2&count=hSQfdftYHgMeJRIXtqsBexcnP5Cb4Fcmx3BKi5JZmwe5oX2RnvtC2FZSKB3OggbOjMyCRiCeOQjcNm4bRxOUcOMWqQLH7WvrJ44BmGP&until=x9olwtwn0lida5aAWWh3TNvCRzeef3pNcO8IhF6i0pvavGLrC2vwP08HAmVPqlDD9LlrqsJrRfCmVoOyqk4gkdYUAUK0fnDp9ZQAsz1jPEGK2vitPnKaAI5bDPcTdQimP9WhJYByDiiGNB9DZUNADSLgIX9VNsiDBfV&since_id=exTSQcyDOIhNC4nfW&max_id=vF7FAV7TzI9v4n2XfSaOwYwNM8SaoPkUurz5mGYWp7rtvtrLmBzTA5HnezyDpSxTj7ZGNYCd53HBx8nUKWNl2vIh5gUu9soszn9nlMBrQi3nrqicn6ypBgHHxCbG4A9EYj1k5DMVVPjngBzDH73joK0WmcDqMN5K665bJR6FHp2X1CAIKD19o26KeJb0wgLDnRO7IVMplPmmsX5dB7nZ&include_entities=tJndVoKbany1bGJ7s9siwPKtUX41k4bONy1JXLU79t8l9SsC1VUyKE1EC6GXaRMYqNHozCvI6E3gxwTzrN7bs9Q5fx3qpPpQD6edJJVQoZ7Vw0uXOB9hK0n0xqqWgPNTW16GL2x92E4yFzwubFMVGaWdBnaRcXL9YRQJUnTW2YvIx2dIIZEo9BBKYMCbJnkIfbs9yl6BjCjREwzmweKF&callback=mqN82YRqjAFu2O3nVEGxYxbu7y0miGbE6ZN9YFzifeMh3QEYvlwtTHY0gZnyFydMy0WwFvOUKBbOsQNXbjr41p5hpsQ413Rz4N6KjUF4wQSYHFVSZnX0N3icw8gxc77gVd1e8GiExaCeQy7QV5RI89UEibcujkLexMsGtLk0WXeMvmCrrt9zD4eVgqpzKbNiYgZr 
```




### Resource : saved_searches
#### get /saved_searches/list
Returns the authenticated user's saved search queries

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/saved_searches/list 
```




#### get /saved_searches/show/{id}
Retrieve the information for the saved search represented by the given id
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| id | path | string |  no |  |  |  |  |  |  | The id of the saved search

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/saved_searches/show/jrXhGKM2neuRn3usiqIIQit16MZnLrp5Smmy79Bvn5mL9ReriXa8 
```




#### post /saved_searches/create
Create a new saved search for the authenticated user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| query | query | string |  no |  |  |  |  |  |  | The query of the search the user would like to save

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/saved_searches/create?query=EamqaJcB8itvE2COE8cKvXTnclF9vOp9YLA9uNKD5e8KhLyVTKFpIzMUUr4qgtAe 
```




#### post /saved_searches/destroy/{id}
Destroy a saved search for the authenticating user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| id | path | string |  no |  |  |  |  |  |  | The id of the saved search

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/saved_searches/destroy/anKY8n4mwOEhnzb8fAROmLJOQ94jJjyUHiTQGXccLQt9qFhGg8vCUerKow47QD2xVVnCSAOEriNSX4yed3Q7iiRGPVOFyQduMB7FcVjDe7wcc4qp8hwqzo6okU4SLhnxSuc4qwIEDfRPkhfsyLT8aZxuUBnFTKdMfpRGWAlzPcp9tEB2quaAuI4pjs4dciZsIQ8EquefGEpai1cJwnk05pqpR 
```




### Resource : friends
#### get /friends/ids
returns a cursored collection of user IDs followed by user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user for whom to return results for
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user for whom to return results for
| cursor | query | string |  no |  |  |  |  |  |  | causes list of connections to be broken in pages
| stringify_ids | query | string |  no |  |  |  |  |  |  | IDs converted to strings
| count | query | string |  no |  |  |  |  |  |  | Specifies the number of tweets to try and retrieve

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friends/ids?user_id=joNzsMtkgD3KqPKwC6YzTHsTgFfLLID56qEzd8TtMXecMYIp5GYYorSE67qSP3XWuCvIKpbwmpJ8oryt8xrwYkb5sBXiFVeaxKSia4PwuyFSZdm7LOEK8PPArNS6I7hgRay2enyIVdBVrX3cLIWTyMuZzm6itnylx6nMuWvq97mB5pOQ7KKFwfF6BMo5aWqI3OuxK0&screen_name=U7kvcJj3R4OxB3cHEY6J83aQ6YlEJlCDsW8FGrIxvw46zhOegUXpY8g46CJPXlsqiB5Y3OvykAFTSu89p5yndPskrbaoxDPPeUNhIjQ3TwXM15VqbtOoigJKsT80xYPLTC3BWUFPqCBsIwST0HhjY13qVcqsbge4ThGPblFCYg4GNXzOER7CSb3NougzLuDEMjtXF9ADpFjdCS2hJaUClYpKsGjeaXSWhmUWvuzV9S9MKb4ulY6HWvrpcLDmIw&cursor=ZSdVoIukSntE7EIB0HHHEd83pTHMCe5B7jxv12PTpjywXh8YYQFC4NGuHogjCmVJFsfGv5AUo8qmpzknpZ0uNHYv5fPIBKshdHXJNyDbG4x5DSt3SuxFbwbhL0ZnLsEZaCIXal9RpHW3zq7rUF75bimWjmk5OY4ZBNWM95DzN&stringify_ids=CmZJOUoWZAemxyIRDxQIwrvtdFzQemqQJqAykZukAJG7hpYVXPDuh9XuOxl2UMTEcucxuGR4pybGYaCV0fphpnMdU7gPUat7EFE9lwdL5ps3A4YBjnSJLEWGMdvGnZN2Fsb&count=ZpM4Pe7pi60CuTlfxiVkwr0TqOW6g77gxTkm7rMqxN31GpheHdye 
```




### Resource : followers
#### get /followers/ids
returns a cursored collection of user IDs following the user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| user_id | query | string |  no |  |  |  |  |  |  | ID of user for whom to return results for
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user for whom to return results for
| cursor | query | string |  no |  |  |  |  |  |  | causes list of connections to be broken in pages
| stringify_ids | query | string |  no |  |  |  |  |  |  | IDs converted to strings
| count | query | string |  no |  |  |  |  |  |  | Specifies the number of tweets to try and retrieve

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/followers/ids?user_id=z85o4bFciVJcf6kHSKfGOhmdyBVLa9qKhw8mIOy1JidZoyHhjWX7dkkMWfy6pZQGwZ3eNBfxUtwj1dAkayso&screen_name=MbO2JVrJM8fLctzNJ6IdD1eRBz291q2OBRQlNi4zrjlDNUrw19JFaYxMyzWAZZoBRfWEy0d0kyD7t5EvfnapmHcUg8ug7TRY8ODHORH9qlgTqVoFjz5FghAxq5OyYGx7uaOj1vsrQJlhEKXXj2DAkd8KjXjhDQo81ds3IVvzEQQjANhUQUub8DWrAfJe58m7lOa4JF&cursor=ovuI6iZ19Uwk39gvKveYBmlIIaTMUyqi4U1bd0cmVIGYSWuCsIA35WMN6GA0e0jjVkv9lHvgqcfi9JUBrvFxrslx8WxnXRHSbc2wUyNkK2CULxwd2cKtF61N2zbZqTSB5U8ZsVkdXW8JtEWvQHZvN0jQzvPZoIBuDJt6FNjCKsld6iJXZJtNJNDjitiHcUbPEFVjtfWdHhrOAbLzUfnE21Xluf3HaewOUs7nH3Apl2dVd&stringify_ids=v8eSMgTJCoZF6aUCYO45bM9MbvPor3nWbBPYSJIu8IaeS4RQTWW5I6SUBHj2KGYWiOVbxDFFlQUdUL4NH0Sq6KkHsEKdlJ9Dx4O5I&count=L3kFhfql38mVzsGTa8yUmTDvw 
```




### Resource : friendships
#### get /friendships/incoming
returns collection of IDs of users with pending follow request
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| cursor | query | string |  no |  |  |  |  |  |  | causes list of connections to be broken in pages
| stringify_ids | query | string |  no |  |  |  |  |  |  | IDs converted to strings

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/incoming?cursor=AlgiQ1maGEq7ZtgmoPO5JZehUAay6HJH200T1m3I1uQ1X6nmWbrGbGX5g8DnPn4Sn4LorP7sjXtg4QD125HeLEj2NXpCltvIyh7Z6esqcVHhMkiPpZ3bEndrkD4F7AoFRvFYK7pX37ePsxFRwI3b5gDqTI60iuGa0l&stringify_ids=KtyHwFWm7t1Z0K2bPjPgdxmeQQU1RgaBKIjgofDvIFvIpxUfRKv4iSj8Ie9zvjbf2uwqK9WsPrbeZ6uRQZW8RfhAtraYLmdNRKeBTb4JCgYCm 
```




#### get /friendships/outgoing
returns collection of IDs of users with pending follow request from the user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| cursor | query | string |  no |  |  |  |  |  |  | causes list of connections to be broken in pages
| stringify_ids | query | string |  no |  |  |  |  |  |  | IDs converted to strings

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/outgoing?cursor=tdspmkFEV9567QslEj5SVZ3ZJGfHjC9NQCccWSQS1WY9MrvqLBjGBnFk3V1myb9oOmBLfsDgoCqa3VBOwUv8hasl6uIEGS3ufEgu7TLvwbGz7hoEcTMu4fQaJyPpq&stringify_ids=UGyaaF4WaA8Raf9yUlsGQwVGHFex5FqZlYawEetPOBGZRPxLb0s1xoIe3XM8Cd8YcivQxYFlAllsbSdmTGoq46F83rhGEpEQ 
```




#### post /friendships/create
allows users to follow user sepcified by ID
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user for whom to befriend
| user_id | query | string |  no |  |  |  |  |  |  | ID of user for whom to befriend
| follow | query | string |  no |  |  |  |  |  |  | enable notifications for target user

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/create?screen_name=aHf9mBJIWbTPpgI6E8bKNjOfBuU19LJksZtPAdxwpqmPH4Vld661qUg2pb3zWNTpMnemALTZcgPTkKfyRlzigQkG1ofYb8nXvCk6oe6AuVuPGKnx5WPmMa2OyhMJqaHWM23ag9LL4gAK0Xi6U8sGivvRNhAesibekeoBn9mspWdqUwwOEZvXu0OiiowKHH&user_id=1VnCjwYMWV0mPwTDbS88n9WFrlcc2Tb4PyH95FV1BWoqsh4D9dMwmIcO3o16ica8KShPxdR99fACwEgGS2dfKp3OO4V7h6f1YxRwKIFUYfwvUNbMPo1zO5oDajKrp0tnxlTi3zc2OJxJwIvm7wVWCkAM&follow=ld3lHrT2lb6Uo8J8FsFoY1wvXt7h3TVo7ZJOqDRLOXGd6qlLS0aQ2HlZathemdCucmjDZapO851evn0ooaeqSAq23IhqVTU8geLgoa4wg5KLtK9RVohNZIQ3q7tm1ouiDgy1qCyGIjsb4B200kO03E3tMxQOWk6zAEB1haIZuabyMeyMzmNC1Q5OoWCkhJUSnvTEGBEaLQIy4hlDE8fGYlumh7HyQBqe7kTNVyXHoGgsY 
```




#### post /friendships/destroy
allows user to unfollow user psecified by ID
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user for whom to befriend
| user_id | query | string |  no |  |  |  |  |  |  | ID of user for whom to befriend

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/destroy?screen_name=6CJliIGN4YVMxMnX1uiVhetfVRVbkTMqwwMPesDjry5YlsWmXehfsLuoDpAXjnoPTaE8Dhr4Qx3b00yXf&user_id=cIBH6e6Hcq4AfYLU7ocyt35wf6xN3MEgugXBv4iHuni 
```




#### post /friendships/update
Allows one to enable or disable settings for specified user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user for whom to befriend
| user_id | query | string |  no |  |  |  |  |  |  | ID of user for whom to befriend
| device | query | string |  no |  |  |  |  |  |  | enable/disable device notifications for user
| retweets | query | string |  no |  |  |  |  |  |  | enable/disable retweets from target user

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/friendships/update?screen_name=m3FtrR2UV8raeYXhLCyfSvQnz944xnPTqunSmpNhxfrLep2Z1BeT65hGflKMJzFa422qsQHZ69KkzNjAoxuuDLbS7&user_id=EQvk1zn30PUIO0RykrmD2KbwfOiqHpmlgSFhs3lsSgbGh3fBuCfwmr2Cgl3XLqi1iYjL1FdUVoBcsQOWt4sPwvsMQvJCV2Ed1XZ&device=DcXzBzL3qA0TFsIbYaXPGHrBK5PM3OQG1OfDn1GNCHGhaps8AqXg8pSSuHFxvvexjtaGvRu7ybpIARRbiPsqekjJ1Ygxuv4OZfuu6ZCEa1nLTeXb3pCiJV1LUijoNocMDHhJHToSVMDO0A040CmJynvsGORtc4gQMxAtrYlmKZbLAbQANdklBPOhEFKRK0HwyhZZgkl1kwNUIEu&retweets=RORsEGJimu96vRC39B2pWorgVf 
```




#### get /friendships/show
returns detailed info about relationship between two users
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| source_id | query | string |  no |  |  |  |  |  |  | user id of subject user
| source_screen_name | query | string |  no |  |  |  |  |  |  | screen_name of subject user
| target_id | query | string |  no |  |  |  |  |  |  | user id of target user
| target_screen_name | query | string |  no |  |  |  |  |  |  | screen name of target user

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/friendships/show?source_id=ETFaKt2c7IWq4rzaWrMZAo20lrsBnHM1ArblVdy3Wut0V2bSuYR4nU5ImxkJe6LPyXatbIw7dZ892j1xiSBFNHnaeHUtOFjmCtQNcnUpn3yqnzXFszkggIqupkYe0hACKrqXOlmboVCLuzrX8LdouETTZR7Z8ICT92QYncaM8MyClZAuKOSetL8sCgrLZ3E96u7uHigP4PsqO2UzRMOky&source_screen_name=MbdeWdiAmo4uSLM9BRY3hN5cmWZahx73IlhFyAfVYkqR6c1H&target_id=0KmNQy9Nxj45r8OMqtl0JgY3HQaTRRYRCkEsSNfq7kvysjlSNHSwYRAFHKzzCxqeR5HKTXa0hGzJZVCMCvjAnTf5DOEfl5udabY4884pOE9OzMBbiULFN0KrPpHbvboGnmKvvOVks592RKd9FZPt0AUP0C0vO&target_screen_name=bbMVGhKCCdHLfzvtJbsyEs9zi9biEZIPbuLSLvuoIc9YLFrvQT4umd4EmfX1fFRr9CjV8NjR0sPM7ghYaltwzxbVN8X3NOuWrNSABbrBEhoMxFKI1efALqwzytC 
```




### Resource : account
#### get /account/settings
returns settings for user

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/account/settings 
```



#### post /account/settings
updates user's settings
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| trend_location_woeid | query | string |  no |  |  |  |  |  |  | the Yahoo! Where On Earth ID to user as defaul tend location
| sleep_time_enabled | query | string |  no |  |  |  |  |  |  | enables/disables sleep time, silencing notifications
| start_sleep_time | query | string |  no |  |  |  |  |  |  | the hour that sleep time should begin if enabled
| end_sleep_time | query | string |  no |  |  |  |  |  |  | the hour that sleep time should end if enabled
| time_zone | query | string |  no |  |  |  |  |  |  | timezone dates and times should be displayed in
| lang | query | string |  no |  |  |  |  |  |  | language which Twitter should render in for the user

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/settings?trend_location_woeid=i7iKVbkwmL812wNAcyjdMyNyZj8xMLT5ScPNn9kKVtMYZAzb8SoVrbuqvCYhoRmh4b4slpdgSZfSzO4IHsE8E8y9LwraoOrt0wVlV9CO8RGIGKrnd5vSe42ZBt9ZiBsi7oE2xhRG9xoPiPcvVIo9Mq8nUincTQv1ea4MrVsBtRq&sleep_time_enabled=HDhClFL85Uw0cUc6KI7ZSbLk7eVA6mlNZDpljaup50phUCoFkwFdIrxPFtqLPMyPpYaI9F7eFxwA9UgtrVG9meZ2HpNwcmlBlwkubsIRZfs8aJCBEjL1xL3fbRLne7YzEj4PLNHL2aUcTwNyQzznkCDvuoSIwRiabm0XaIIcSCoM9ckZLUn6x0C1puKWm27x&start_sleep_time=8vzQdLJQaw0nR09LnfioRkOm4LJ7Shw0M6R0SBQ27QpYQzJeO2DGms2reMy6357PbZQ3AG6H&end_sleep_time=wGo5qDTshAPKDgYpP5tUci5b99MPfunLaLQApK3GlSqY9pnYuRSHaYSj8F8n9v9jhZTGKXn5PO3YdrXHiQpsPhMXXUl6qupIujoegMk6Ao5OQ3w9TVCIdoGaj1gJwGr00QfgDAneYt2PwyYptB8GZPRjR72nOuoOlD5ZesdcVf2sN1ShC0YCQPVHXY4LstzO6ENk70x3gAv4BnldokPeaLW7J1Tcus0B7OVfPtj5&time_zone=PaEdwSBQIQ0tN8dO1piuqTBfPR4jaan0l2dRUPHDFI6tRkhSJAm9uYpkQtE0E10Z3eQY3yBJhIc82u0M4nWzllUbOyctAdtErjCuSedaWqiZUjLZGHz23teS2rlCFOg68SB17Pb3fu39NP8uxHxAbMsdeNPT&lang=5ZLYBM5qX9FsdPg2YKzGiaR5C4jqUc20cNZNA4dyeT0rIguG13mjeepQiIgdUjd67cUHh7fv0fXJvrpxvMRJ0gAjYRwSaKZhWTZd1eJ2uHL09axFXopXEZhDQNv1xvjupiIqxss19d2joAYlYojDnBgeoMgWhzqHS97pBzrLNu4b43x2rRGPsW3RJkO1UfIMoPcZpEKc8PocSWfjOV8hSc9CwXDqcldBbpBA4lNcbcp3 
```




#### post /account/update_delivery_device
sets which device Twitter delivers updates to for user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| device | query | string |  no |  |  |  |  |  |  | must be one of sms, none
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_delivery_device?device=EnXAvetIn5fkIFx4T8fiJQm5DzhPYkYDHVedaHWxNbSvQpAKyP3iGpojZF&include_entities=XZ8BH4PVewRLj2EPT3qECfHUV6if6Xp4XyFFCuBQ1tClwgbqkB4WRLRNSa3Y8s260ILDdnufQ6BnnNNIoRFgCw3vG6tOzwUAeGds4HHUOjhb65 
```




#### post /account/update_profile
sets values that users ar eable to set under Account tab
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| name | query | string |  no |  |  |  |  |  |  | full name of profile
| url | query | string |  no |  |  |  |  |  |  | url associated with profile
| location | query | string |  no |  |  |  |  |  |  | city or country describing where user of account is.
| description | query | string |  no |  |  |  |  |  |  | a description of user owning account
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include statuses in response

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile?name=vWyLz5P4MWyAv4v6jcjMg0ubONt0TyUouta4yZ8kVHVrLrx5DRRTSl5G8yH26CqB5BFDAOYwvTYhkwmYneRfzWWIvDKBfbclMSYnHXTdQSuboR9L510EYXmtB65Rihc4abrR8l4ZdzaCqknvmo9klwOXDTOVb00lbsdjNhj1QtEhO1MbqWvMtkJ6ex2py2LJuY3igmk7QYoE0bPq7ldAGWHUuJk2L6Mg5PylbSt1QRGQ2whaSuKzrruWbP&url=XVLd0ALmMEPOvHvmK1DUU8FuA7YwiNvfJhsJRe6ETVsoCXLmZohUxWo73nElaaBUr4DjiKXcFpAinlFmKWgiSFqW24idfT7HXL0gvYsbo3tLp97a6osZ4SV6Xdjd6rU4cVkITNThQn2fxaqDzSCDLxJJL3WRvRWIMgqF3kWUIZag9ATJtvme36YOaVGFMCnyTOdX9aRSa28j&location=136xplBwjqGe6m0JKzDyNAIXsA7uIr7KueiUzTrTj88qu99eINNvnvtQ6BlO2tzxHRshLUa42ivwrFLaszFP58GbJ10MuzkcrMtcHEhJWMgor2yTBeJGnpS6rSTWsd8U0C7HgordaHCCJavlpf2MFUT7NM3g0ca1PhJ5GajQSVsC6YXveZiTUb0IY4YZg905rKb7UvYNqrpxpn3Enmxixy0vCYvT8vYzgaGaFFY66oEwL&description=a93IrBgr7TqCMy8L7oWOzBtxHAVm6H4gQ8YhJfJR99tVHCHP0DEzf87XI3jPLn5Bv4TekC5tMzpub7jcKXLZ6TX&include_entities=XgDIDJj9Odo8QuCC316f8qrTodTu7Qj47XMKG6UvjiEaMgMQiT5qjxkHKdcR4vWbsIW9PQE89ijVz5MRZRiioC09Qc1VIX7aG4kvVZE4iX0R3MJ2D1k2ElcvxdrgbyrRCLmxL0B3XBU1oD32&skip_status=o4kJhPhvgxGPYxrKUZvVAzSctTA7XDNlH74ZWmudTa2SIuDCt8x4HqgbkRjhu7DceIcb4GoYQrQzVuboCJsk9JwuBQM6Xpjb7vnbbMa2d0B9uNy7w1sGLZbmPXtNnNZuimGu8QxmR9wmX4uu6WaRVleLjIyGvxbOUSj3IQqA0WWX1qr7nCZjYd4iVDY 
```




#### post /account/update_profile_background_image
updates user's profile background image
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| tile | query | string |  no |  |  |  |  |  |  | whether or not to tile background image
| use | query | string |  no |  |  |  |  |  |  | display background image or not
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include status in returned user objects
| file | formData | file |  no |  |  |  |  |  |  | image to replace background image of profile

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_background_image?tile=bae52y9KpzlpvhnxIPF5rEoqRtIN7GdjRspT0yEq7ZPDhdbZ2Q4tutTlXB95imo9PN3QlHgtG67YjiXl82PDwJZtl8zEvXOlLRb6ysAfzHdS0be9d4MJNLd8TMNoKBJvsVC0odgXUuQVF44S8RCWCQ5wDSVntFTVBvWZIdXDHNzmSEf&use=vRY8H3EkVAIpfBkQ7hQQuOtbC2yvHNwcFvkmyZHuzpTO1eF9vwZ0ktbWwKrdxYpcuKz2JgxiGq7IENRakRaEkmBQ633E2sRwcqzWH6eoxm7caZmuQx9aTL00O3ERwwoJWXFE4U3BgaNq9aVZH4aBPaBEegvKMUuJR9oV3rxkClLLvGLdLWPA6rflHL6uFAewKDsN4Z8GkTsQAe&include_entities=laTVhkaD2VJxAkM74pzSuz0aUUDKuSPP3ILl3VY5RIDs2pA6O9ZiJZtDT7on0dc3VYoZTn5L5Ie78OeWYdfHdJl6RJuRXHUTFjSzGXlLGzTOo8Lmm04zKpGC9bt6So0yIS7oQsaw24kqc5Mz6R8QgPsq0WxTl&skip_status=r3qyrg1CM3G6tTbfsh7B8nqBOrxmkTTLWjjnAl0moGsRAE72WeD4C4GrweNQ7GB30VrAgrXF8pwI4DK0So5utMVZ0IQ8psbqnD1E4YjcoQVsuGtm5zRylNymvouVQFmeinTnldAK3vcycGUhfLQByoX4Nr0E7mTqKMN6ZoQ3U3B6JwnZieARD 
Content-Type: multipart/form-data, boundary=57cacdc57d221
Content-Length: 83
--57cacdc57d221
content-disposition: form-data; name="file"

Array
```




#### post /account/update_profile_colors
sets one or more hex values that controls color scheme
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| profile_background_color | query | string |  no |  |  |  |  |  |  | profile background color
| profile_link_color | query | string |  no |  |  |  |  |  |  | profile link color
| profile_sidebar_border_color | query | string |  no |  |  |  |  |  |  | profile sidebar's border color
| profile_sidebar_fill_color | query | string |  no |  |  |  |  |  |  | profile's sidebar background color
| profile_text_color | query | string |  no |  |  |  |  |  |  | profile text color
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include statuses

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_colors?profile_background_color=WqYW46jYw4KkaKJ0ND4pJOV7Ndln4YV0pUXu0hsxlcRvXAwLeAaXp65cjrAoqvpPpnkqEMXZZPvWq1HECSC2YIei9OGzk6pKtJa8w88vXDsoFa2i2Fk1nyjxn06H6wrAgCIMKQiIuK69V9rYOLZbkiIIiPqplSZCuIofzGX3r3dmcEl0qkcLCVtVKTk6LkIf37uCOsGfwTCIyXJYiWJURdQC6bIRwr7zyCcm5SCB&profile_link_color=fkkd3jv03qRggtmsceYDmxcZKz4CbFprZJE33936AVmQoJiBYhekOrky0obb4AD4kh7nrbu16QSvAb6yslThMdPMC1YHCBLWTTkk5OmbFeHfqONSaH9WUZJx0IeCk0zdTUyYIUao9SDzHrsR8CO2BxACfOfzOONIJlHsgRQpKtZrUsi3466GEGiUvxtkmh26C&profile_sidebar_border_color=ySBoilSiMNK5QObWuPCNJ7kdrHuuN7el0PKjb&profile_sidebar_fill_color=BYpl3fafcE4OrOWM2ouxTiE7EFXoZ80A7qWaG6pSLuHdjD0l2uSVNx3rd0Pc9QNggJqWQQOBkvPD9PZckR&profile_text_color=7pbyCboOleBBvl2rbTgNdMDRWsR8NIgU8rtKDSzZ6bABxD3IwkwK79C3CtcqcslkUO4yGExNQ8pnLs6iNC3UMFXp99PlCaFwYK5FpCtfLSCxl&include_entities=Q8lT27z0xIam4MwKjvvobU1EaMwMkRva0Q32&skip_status=C2vlcRpZo9iTEH5zJJJvgvQ7107R4aQGdl2qdrpCBIwgpBP8l 
```




#### post /account/update_profile_image
updates user's profile image
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include statuses
| image | formData | file |  no |  |  |  |  |  |  | image to be set as profile image

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/account/update_profile_image?skip_status=EB4vJ5vRXz1OgfajFoK50mNwCd8rmt0155wOb1F9BHXSW7bCvWHwiv3VIbn4Fo6KtCyEEeNfVL8STkuogbVzGYvpaSuPgAAKc8oRnc7iYfbRzFgQRbqyaWYkPsa53KQgTe7 
Content-Type: multipart/form-data, boundary=57cacdc57ebff
Content-Length: 84
--57cacdc57ebff
content-disposition: form-data; name="image"

Array
```




### Resource : blocks
#### get /blocks/list
disallows retweets and device notifications from a user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to include statuses in response
| cursor | query | string |  no |  |  |  |  |  |  | breaks block of user to be broken up into pages

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/blocks/list?include_entities=rezpuKh4qxUhIlQSiOd7hnck72A0hHgJVQ9pAqt0YoiGK9z2XM9e9myhp8hHQyrMoAcY1GZZ4iGPrgSo22DcpbtOkLwbjXXHy9GAPGAUYgKpwCOzErM3DfSY1p9km72VhIv6o51nmLNSoBs33e7HuZGvoQPLXSGeAclZimm&skip_status=8axwLZzPdHxHGdc542R2UxgvKCv2ZSG72&cursor=EOceEqVb7CpkHtnywi6NOQpjToczwfNb3ZpHplTxXjSFNfejyk6mbwG4UTEr8rCbq2TQnNok6hZUxdd5yksKQ9OK2scaUPmkRgbe3AzaRz4pNiulC 
```




#### get /blocks/ids
returns array of numeric user ids of blocked users
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| stringify_ids | query | string |  no |  |  |  |  |  |  | returns array of numeric IDs as string IDs
| cursor | query | string |  no |  |  |  |  |  |  | breaks up block of user IDs into pages

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/blocks/ids?stringify_ids=5s6Ud8npjheFC6VOlZoUagueGhwbD88IBeDOn0dGhsmUziIUh7ProjG4AcfdlnWWCALZAYGSr2N0lvVCDK413K5EXlSjJPglp1l002Ts4Gspbo2O87QcSWQQhI91xqmXrIXsKQUPxnfILixTpo5ikW8CEiDcI0aaI7CtYxivUyeFQMygaEyvAG7fZKsHLCStKuWJ1feVOtBFf9WqOuVpb3EaO7SzJK2ufZdhfsd4VOJaYFBMaxbmAQwoXpXHa&cursor=bp0pGfRTkMI3XGJytT5EfGvM4sb2am2lL2KsiCmCo4GmKpVdj0SyGnlLQxN0TQmET77cJtP8xvuiVpweqoM7M8TDFGDyx0dq7kCRNrZkXuDST96kyTrl1kYG1CfyCsZKMCBz3BU15yTZH0jfULAV6zC8b 
```




#### post /blocks/create
blocks the specified user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user to be blocked
| user_id | query | string |  no |  |  |  |  |  |  | ID of user to be blocked
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to skip statuses

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/blocks/create?screen_name=HOkGz6ibGmMBnS9hRQib6cXH74hKctCThWAR2S2JfOkDHtVykdKrpI8xMpiYSUSaQs2Tl4CBTXeAqa9LnTcNClkoKCnDxfOoHQi3VVEOSSoj2x4qrhd3CysnbP1I4P6MGpPBktpcmOwplAPNR3&user_id=uBiRM8SvdHBZo1P0ljqyFe44zFUmwXd1ywSlEKQRssRQtGROZhmFvqK55EsCBFDabvwQgmIIOzzhgq6gHsVdTFiZkKCVqg6CMCt2YbKNKk51LbhsEcGySZxcJa8aqfNcRgeQrZEckJd5VuyAHe8AdGNXQV8gbVt2bITDIyQ2h37dyGNgUVQ8CE6szeJKadNmVHZDfPFxTNKrtyIouzw6dDzMRix1vlor3o4idKQ7xBz19hpDQWK3zjQr&include_entities=ot7JRyMfD5tnVBVwaXGrmjij4mTnclYBO6kGF7WidqG91CGbzmDWGVfKh97uu65jdq0SyWbLmRUntAz3Wc&skip_status=D8fnpovTTBZcOpcHX9SIvKDTeeshbEgONvccUH6Nj508vdPsmIbSsPLH3dYeSe2FKeSEWZsf4snAFd32WeUo3F66T4lMjnr4CkIyjbOoDcYjp1llgfKkVRrOVMAf92jMm2lFd94Ql3aL4v7lLSFGJ6uFS5U27dPufa9tjejFhurm0yHLrnsbuXQn2LpaYfEepOHJ21ojwPGwoniQLK1fHRCKC2UBhyQHmxqpzOJ5EpB2NUSzETOmLr6ot1ZLzPs 
```




#### post /blocks/destroy
un-blocks the specified user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user to be un-blocked
| user_id | query | string |  no |  |  |  |  |  |  | ID of user to be un-blocked
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to skip statuses

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/blocks/destroy?screen_name=nSmXH53lvFojzhSdbGzW7GlBHknhaQeyJAwqFzMbeauNsm1D3BAbhVNZgagr0uZK5wbL5XWk8q8ANadQLO13JO2ZZjq0OqKTWVE&user_id=TAn11vCOFQFrEHunvxnvQNvEefxbbcd4NB6O6IDMyiec0IAvfX06LwLZMjaXvo1iZ866QKSp36B3Pcz59AcV6XUSg4PLtR4s0byQVrfZyR2o3CtdcF8jD3bT81FBTK4TVCKR4ZQCRT1Vvu8Hah0OlcItdo578903LKUQKKtBDuw8ZFQaXRYi3GMh5Rpd0pgMaaCVV6xyA3HAJxK&include_entities=pJZsqLKvC9IDzYqK92F49dCJgkj0S4GhNGKdruJ4ErIdp8YybEDkRf47An8ssOJfvutXYc1DDKR3SPC3tfokvss5QAyiphxUL1RKdToRDfVw4yAyOYSjqlphWYzlf7g188Mm1aeFqabvIM3wLWQchgtde2zu9PwiXjFZuTEU3QpMDsjoo9AGq3UE5t9f&skip_status=FygYdfs7UnbLMXofgMEqmkQqevwHEL0jkhixwLFr8QcUOAa5nOvJ8m9mRG4ws5QMm8kTTZk1QxWF76KvUge3Copu5u1xARjWZDPTDaUtHR8PXTkS9zVMYlh3PiAp9Um9yc2bmXF4OOUMHfEQPzDOUUSKdtamnwwVJy66wMbkA56hlL8blMZgGR0UkbhIINDrmKxSwId6Okoa5wlqikGZcHTxSbfB 
```




### Resource : users
#### get /users/lookup
returns fully-hydrated user objects up to 100
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user to lookup
| user_id | query | string |  no |  |  |  |  |  |  | ID of user to lookup
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/lookup?screen_name=S2kCAd9jqf8KDiQaDgsYXsaFmHyxW9wPcRsN4B6vQefuw5E9m7&user_id=kAiZXZxvWH1MTTeGXPMtG1IbxOQHbYPvy8uw8214J2QDV5jTU6mB75MFUCn5BdAal5Gt8HyRKpuGuOAoUW022MIWp610jCbFIR8QzHHj6c0A0AZVwZXzMGvcMxd6aoLSfUIOBq8HC8hDIhyfgwO3ckfZRs51QRU6LCVm233FcliVDQaTnZWAjczbEFduw7BhKwEMAIsM4KHHBSBZSyz&include_entities=K8noOBTkIuCs0gfAYIn2s5J4Xk3PSD2DMp1A0UVJpxcpNs0ManODsyIqTLgMoipaIrLIlGsKdFa17aNiyCW0bEr4pHROZgZHHLq3rTOFzZGGauZI 
```




#### get /users/show
returns a variety of info about specified user
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user to be shown
| user_id | query | string |  no |  |  |  |  |  |  | ID of user to be shown
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/show?screen_name=VJizamZReORvOzdz0g0U5Gt5mafQaYX5HfFRCEJQtBlhbyRcPS6VyA0UKgLUeI0VYFNAkxqN8M4jlWwaOC6mc7gXn1RBKSxIxkjRSKE0wJkSFQ2tt9PGg6DD8vfTnMCU7VMZFq0cal4Qb7kFg9lwgYapuqiRdUM&user_id=PykvZlHaGL0SSkx9u&include_entities=GLSQamgteun0Odz9IzuqJbcK345BeAvUlnLvJ2YYwmYlAyvi7ZJRbVCf0HRehm9CJU8tX7rtupP4Ykn6k6Xv1AK1hBfzXocHjkagsBKW1z00To6du4IvEtwW5Mv3bILu3VLvxvsy4tzXRFblJUQonnktaQxlyiPBdA7L6zka3T8Uyjfid6HBu14ESCZrUP38qaTwKdG 
```




#### get /users/search
simple relevance-based user search
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| q | query | string |  no |  |  |  |  |  |  | the search query to run against people search
| page | query | string |  no |  |  |  |  |  |  | specifies the page of results to receive
| count | query | string |  no |  |  |  |  |  |  | number of people to return per page
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/search?q=6OHF8XXl4EWyG1dzEc0y23GteAZYNGLTvtzDqwZu&page=W3SYgrCtsawvRZKrYIfFu8aXHOoeNTqJXiHdJkHcudImcsObb3QFc0DUP18CVzlSR36BnNNS1veeX3p86fOigrc5tlIpU3hL7onucandGCrEFQNL6B4n3gtxCbWwfeimCFRPQf2wRubwlYisAmPDDibfu7MJm45YKXN&count=cQ83kjAGhT8SfXvTgH9KOVta0z9LxXmJOuN9OnP6hXYxVuqcbzX0vrbw0khxiEh694fXs43K21hYwHaHh8HNzSjAdA7vfpCouRlXWpHZqYYXF9EXhmKQf3qsEyYTYAissDpp26pt5nqLw5INrtEGw49bD85BJn4c0tB3A1xGoXrV39IuCnb9rlk5&include_entities=pGcNKpNe0RP2ovqmWlp64UJr5STrdYUDF7qqweFx5uzt00QWmf3q9MSfFLGTKBwpJXQgbwOh0oK1oAYLQ1bZN3ftPVmzxTZhQQx1mminK3o9EmUvn5vb9KFYG1yeUx 
```




#### get /users/contributees
collection of users specified user can contribute to
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user that is contributed to
| user_id | query | string |  no |  |  |  |  |  |  | ID of user to that is contributed to
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to skip statuses

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/contributees?screen_name=Ln2NJo5699viORckfiPqsz6qf7Yt2wZNT2ADrGKAQfSF65ZmnONPnTgD0f73L6QF9rjA73aYj3Dq8CMwqzlOsCstRAwDHnjQPDqXHAV0DyqMbdiCNErggTJ8tgMaE61tJrqq2lrGUSs65LISpa8G3SOx9AINGJhqbHQd3hTY9m5f7N8xXgd191ziCh6j1nJc5Ap8Rj71FcgN0pkYFxZPzy7bQduRBe3GOsPGMW&user_id=s9Yf9nA7387THG0TweonPCrwrUl7GhP8qOoAbZIf7P8Pv9J2o7peKQKbK5irn8zOWYo8X6n5WwUrGDt4LTjvK3Hv90Ww8wk4uJcsQAxM7seO5ISQBcmmg3Rp3OWckhhP0thQ4PDchR0nzTeb5AxlEpKIdHVyYcnYFFPKvsWMkWaTPo5VZDgE21ngIiOGu&include_entities=FaSvUnYRai&skip_status=kcDIhyIUOmXQKdz22fweVG6rBtpsDIgYVTHdsp8hM57wjGylW5ASMGjnaJPOs6Mn0tBsTJJGPQc8xLttR3mDKF0VpQJRWwfWZQpTz8zpZMxwy10p5m2P23LrTujQ0yN0pcUZkuojgVQOWQe 
```




#### get /users/contributors
collection of users that can contribute to specified account
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | screen name of user contributing
| user_id | query | string |  no |  |  |  |  |  |  | ID of user contributing
| include_entities | query | string |  no |  |  |  |  |  |  | The entities node will be disincluded when set to false
| skip_status | query | string |  no |  |  |  |  |  |  | whether or not to skip statuses

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/users/contributors?screen_name=dgSfjDHd7048zR9Y43XoxlIOhzDeqRgD88TrLBFTCJ2bBbaFf84MuNBLmeZM5gqepkFaVl4x46JFiTlx1pkvcVhyaglgxMuW6a71vbzAiigAcB7d0rJcn0Lxh6NOShLZrS1W4AxmTNW5o4jpv2BT3nqktd9&user_id=vUlWNmTRXqeQeaWDfg2KjEDm14HvhQRNLdJzzDrx4FniQkW5AYPTDtgExXaPO1Czem9OZAl4fJn54jaFi0yVuOA2MKSAMva1RjQRUcW9Wjf0CpFVqeQV3rXPcQqZlA1dUR4O40Y0kd1WDHS3VIZZaWOnMfm8PolKfqykrxkLKmIn&include_entities=ArYjqXunMRa1ejRCEBS5acwHxisT0QXBhWVITp6GghIuAz7ebZjmb&skip_status=4J8wD9mALEwGnq5t6lKOQkoXzAXTW8J0SSxv1U5MyBsV1yp8UaXLumI4WGXSPHTHzqcBlioTTRPVpf4jp14UnNYjuWcjD6 
```




#### post /users/report_spam
Returna users report spam
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| screen_name | query | string |  no |  |  |  |  |  |  | The ID or screen_name of the user you want to report as a spammer
| user_id | query | string |  no |  |  |  |  |  |  | The ID of the user you want to report as a spammer

* Example of request :
```json
HTTP 1.1 post http://api.twitter.com/1.1/users/report_spam?screen_name=Y0RXXDzm2y6KTL5hZh2xgN6GYyiBtBhrC8ozMYWOw2zqNEHNWKkcxqTvZb6sMnUowjYihU7OWGeKlWxhGSudjn&user_id=iyQLleGJKZH3hCb5zSkjegRwXK0b3nUmVK8gYP0JOIN6kZcTSwd6N5CKPCVTZQfVBocAdck2U88f7l9ZRm5FrIphklakcqfNOrn1DH3yPcOXxXWpk24MKu35Qep2EFPs6duKVyjLK7Ii5FIqIMcthgy7uY98DZBJd5u8DNToVCH1ipr0cDttT2Bo1KwEK7oXcS6QGZfBCWDUm4VyHp1BrC0snw78Ev5RocH5bXHOTkJfoEN63P 
```




### Resource : geo
#### get /geo/id/{place_id}
Returns all the information about a know place
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| place_id | path | string |  no |  |  |  |  |  |  | A place in the world

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/id/cxdNSvcLp3BksQpMfqR9NF8794ksHqsUXGIPbUBBXcWq3lciL3szJAHSE1kmsNgptYfFSQhQ3dg6yspkwRUfsB87Cst5gJuKIJqBAH 
```




#### get /geo/reverse_geoncode
Given a latitude and a longitude, searches for up to 20 places that can be used as a place_id when updatting a status
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| lat | query | string |  no |  |  |  |  |  |  | The latitude to search around
| long | query | string |  no |  |  |  |  |  |  | The longtitude to search around
| accuracy | query | string |  no |  |  |  |  |  |  | A hint on region in which to search
| granularity | query | string |  no |  |  |  |  |  |  | This is the minimal granularity of place types to return
| max_results | query | string |  no |  |  |  |  |  |  | A hint as to the number of results to return
| callback | query | string |  no |  |  |  |  |  |  | If supplied, the responses will use the JSON format with a callback of the given name

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/reverse_geoncode?lat=DVHJta8OH0IXsj5zWy31PM&long=zvg06QIxtDfd6pmV7nD4PXapTIsVxfr7KH7RyQp2tEfA4CvbZ8gP5qeZ9GVHWnOG5WyDMXFfCVPGylSxt9mzzBzJivqeSeVYbtCYqhe2d4JLpCjTLGtlh24zyuOrJJpVc&accuracy=TDj7GxbpiB1BuNiX8z0d9yIXZrGpmTqgwKochzCzbEbFstCB3COcawaaYRzlK0BhKZt2z6BKLNqdh2OlFCyP9I07zAtkA4Bl45nEbZpXNPa4SYqxBYnKHoShYlByqcUvihaugAr3pB8iAyQbxdWfBPwAb88Bl27Dkh7ARzEhaMzLlqXTDT8fJFPUNYw81DMlVUVMtz4EmDpI4m&granularity=HgJXZpNUcLqlM487Z23MvDQa0uzIyVjgc3dct06FMx1yCaGBcKoIneSoJs6hnqxAuLMXMTDyqE62ONE1x3&max_results=ViCj14pjsQQ2kCPhoIUX9z4coRRqpUakcMEdR4wjUnme0cwpUrm40qgpi7PH2Z2fMGtDL0XFokUowqNrRavSBLiTT7BW7DbTkEx5EuL2OFql6eMXphQ038UXfvTn94guJNznilq70Rs65e4vvUwz2qwiWqG5vWzeK9C3u2avTCBZRGunA0WDrtWnTCspz2DkcgoHiycbbOb3uFq5GmJ7QGvKjX9T0Nec3CTlb6xnUIqpoQv5de&callback=4UIOdGX7GLlTOXNa8UHwPqWePNJU0Y84SQT6xRdeCy7qwVBFPjbEJ7TzUCtVAC 
```




#### get /geo/search
Search for places that can be attached to a statuses/updates
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| lat | query | string |  no |  |  |  |  |  |  | The latitude to search around
| long | query | string |  no |  |  |  |  |  |  | The longtitude to search around
| query | query | string |  no |  |  |  |  |  |  | Free-form text to match against while executing a geo-based query
| ip | query | string |  no |  |  |  |  |  |  | An Ip address
| accuracy | query | string |  no |  |  |  |  |  |  | A hint on region in which to search
| granularity | query | string |  no |  |  |  |  |  |  | This is the minimal granularity of place types to return
| contained_within | query | string |  no |  |  |  |  |  |  | This is the place_id which you would like to restrict the search results to
| attribute:street_address | query | string |  no |  |  |  |  |  |  | This parameter searches for places which have this givven street address
| callback | query | string |  no |  |  |  |  |  |  | If supplied, the responses will use the JSON format with a callback of the given name

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/search?lat=tsTAZKOenmlOThpy7IJLsRE1MhvHS7ImACWAmKOK7ay0rXyyGik89ZaVgFD9NlvnXsXkdM4kWDlnBUWhcgqmfBhwhVF4hbseEqzRcEc8hxvSrraEIB0Xcittd9yul0JZqiRCX3LeBh72JiHrTHp60Szd27&long=o8snzLfbIiXXTe5WXnDohlOnlHXzJ5i7dKvMvLYe3VbXagU7EywVTkif2gPLl8TyTploakDegOcq56yJE5FyqXOseEezM78Fxt4IOIX4w9uCf3lU80szYh1cVfMInUoVnsDcaAgHKLjZOFUXGmwFDxRzNDhbyF6W8K8jlo159k5Y0ZVGmrmZZdzMRQXqv4mEOuX9SYf2jk0kkW0GnnGnAfas68SCcfg1JebCcqEwLFQ6BRMZe&query=mPIxiOFbqRqHT9V4L7vqDh6&ip=nHlaHzD4plBHagSA8ih2sc6ekCFYTLtgtOqao3fNpQvz7nafGsh9Fon002ZTNsahgBsFFHt4xYEEmPU3ibcXAzYACXuqpFHGg9lVQP0oOF2buWeM8rKJ1IjDFO35tLL&accuracy=U7GLXH9LmcWQ9bDiCn1D6khL9kRD6Cn1K3MHLW&granularity=79qYiBBAeZBS5W9Q6uHJAk6B5aoMVlg2uG1MhCnwBZoGWxx21fLCAReF2CsYXI1so2fGECdgCBW&contained_within=9uAbJlNkd1ZfEreCaf4zhjgWWtcy496dDHon2cHfeHvS9JvjZzSgT8dPCpoGzvUdciBevjuJ00C9K7tJGm0Avdq7DOOdjIqw11KwlfflfRv0ZZKGlKgRYGZCvNPPvglwi62DliYBauC9tmPP76H6MGIitx7YOtv6zxJVQIx0c9aGw0wD6dJTU&attribute%3Astreet_address=bnZjmNMRTmpDhflOgyYrfur&callback=7yZRrUjDhiWE6Jv05VEmbZbsy9TNDkzLTzCktVYLeVplEVlKRZ72Ziuxsnl6IVRBvuWZpUKEPaZu6keXklZkEtS6RdcA94bEy8DY2oCSzBmFWBChXCBC6tJXHWxQ0JvyR9wUx9M6K9MGLo 
```




#### get /geo/similar_places
Locates places near the given coordinates which are similar in name
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| lat | query | string |  no |  |  |  |  |  |  | The latitude to search around
| long | query | string |  no |  |  |  |  |  |  | The longtitude to search around
| name | query | string |  no |  |  |  |  |  |  | The name a place is known as
| contained_within | query | string |  no |  |  |  |  |  |  | This is the place_id which you would like to restrict the search results to
| attribute:street_address | query | string |  no |  |  |  |  |  |  | This parameter searches for places which have this givven street address
| callback | query | string |  no |  |  |  |  |  |  | If supplied, the responses will use the JSON format with a callback of the given name

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/similar_places?lat=I0zk6244K0CB0l6zdg68OfUVZ4HGP6Dy7cTdfXiZXUBXgIxuY&long=CNTxITBqzrwdZDqSRFP9FM3hKkZhOYVq&name=PYtIzTh0qu03USVAI4gu8xfsxxhvtIgiGK0fEhg5Mh8H93iS8zmg6CJE909CJqVpbVFPdWVZd3Hn70fgzCxGegkoht10UWq5R5V51Q5eUMC2MRjltQ2I7m7oQ8pK5PQXUM2WC7bxTNAGFT29J4RQqZfh7E1duSaoEclhjwOdkpTZiW8200TrZ8J7NKkhDuGh&contained_within=1y0yndSM7R5307400w09f7W0seDWUVDWtDuRQnEYfJ1fR6gSCg2SoYSQdwN7rq4V4yNVVrTbbUq31HVDXYwmXocaU0imqmhvV4qRwj2HesKf9GT7EpuCOHMJH458qnDls3cYmfGBHrRR8KZN9tpYbbHSgN0HaD2DHfC4viFdKw5Sh4Gry5pJh6CxTCe4ghHYxj22CIfnfkgwpWXY2nIjtkRnX6sen9cVtfY6XetczJJYGGXI&attribute%3Astreet_address=F2x0TVX0ncoxpj0Ei6BwAO5jx30e1IiGLPGELEF8R3FgmFUEMwamkgGSkH6lpo1aeIPZnv8eyNuUtpzgVKDf0k8k1eFqDHBSprSNW01vO&callback=piVZyQKb6Kvf5wuLX7sz0S1SFYTHtIeT09Sy0CJ7nfmtMQeJYHjYzkRfjLXMtbFtly2lbMtz1Q2NGgxFYQExbwNuhKhLWXfhvhDH36g5XjSDAqiygX6stTXKEewBcLSI2wp5DGaAZ3dztw8KuedX8aINpeoBZhj1NJ7qpi1plfZPM7AgmNduYVin9GZ8YjaL2icsAeSWtRLfZmvl9IQ7E8vOPuXNN7zQpMj00bW 
```




#### get /geo/places
Create a new place object at the given latitude and logitude
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| lat | query | string |  no |  |  |  |  |  |  | The latitude to search around
| long | query | string |  no |  |  |  |  |  |  | The longtitude to search around
| name | query | string |  no |  |  |  |  |  |  | The name a place is known as
| token | query | string |  no |  |  |  |  |  |  | The token found in the response from geo/similar_places
| contained_within | query | string |  no |  |  |  |  |  |  | This is the place_id which you would like to restrict the search results to
| attribute:street_address | query | string |  no |  |  |  |  |  |  | This parameter searches for places which have this givven street address
| callback | query | string |  no |  |  |  |  |  |  | If supplied, the responses will use the JSON format with a callback of the given name

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/geo/places?lat=2II14endXdlBmRpclnZ9uz0U&long=jUmuRPxzyzENWSKadl&name=4LJq8JADiByEUt0pkQXUpwyctqWDEibJ4UacDKQVmoAgRAGcqD7Q9F2C6YgLhsulmEy0poWLNw2F7JRymZowEq9LpqxGS12fGAf6ZcSMIUrPDjn0iLwXcFJC5gjYildYWt4VFXIoRadvtBvMn2JAHtcNJvM1RZ0Ns5J82rwTBKp5lURJWBjE4&token=sO1ePSePGHUqPWRmQt6fyraqb71uM60eU1tKUHzBou1erTAhmGxV8ImjPoOBuOQpPj9K0JlpdmDFgeXCVvy4dUn2jbEO0udPNnzO6VdkhRZy6Xb1sJ5FEtIXFnLFRZvFm5ts0HNizNQFK1HdLNSqhBnXY9CQ98vvdZYeGMwfznVkpCxapqA&contained_within=2YE08hRhpmNDlMR2yoh7LdsaPZlfqVWsUAt2RkkgG7U2TL5samzVz26p2sEsnBUibol3IFkpNesH0x9aUJ6uLcTNEyg29bllzGohlIG9W9QWGZ7AJd4uqYi5wy8GJt1i9pAv7hF4qv17v8HelMJLK2RgBZWlsXDCne8vvNzWiB3OJL35xNRhPIxrHuMar&attribute%3Astreet_address=MPEUkaHT70uaPeWTjtGbK&callback=TiXBMJLe9y3OsoZah6bMh11dUl 
```




### Resource : trends
#### get /trends/place
Returns the top 10 trending topics for a specific WOEID
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| id | query | string |  no |  |  |  |  |  |  | The yahoo where on earch id
| exclude | query | string |  no |  |  |  |  |  |  | Setting this equal to hashtages will remove all hashtages from the trends list

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/trends/place?id=Awr7pJ41wOMKYkOMNcLYuRah9bim5D3GauN&exclude=dSAJGnuEIiqvvcuZ4EgdQzAVdDCn7 
```




#### get /trends/available
Returns the availability

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/trends/available 
```




#### get /trends/closest
Returns the location that Twitter has trending topic information for
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| lat | query | string |  no |  |  |  |  |  |  | If provided with a long parameter the available trend locations wil be stored by distance
| long | query | string |  no |  |  |  |  |  |  | If provided with a lat parameters the available trend locations will be sorted by distance

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/trends/closest?lat=Xlhy5YVACDT39ofDnkiEx8d74qLGOT6LeojkmeUYSO12chFABYe96sgbT2RHVYtamMuI1pHUdJWq0C0CAfLGI2RC4JkZHNa4zENB4uvidsIe4JQEYBlHEdjIWDIEqSJ0xwCC07UezDtEmjilVD3zQmiNZ1rqUarrH33HbYWLCppZJH&long=EloebKxYKyqbsBCUi 
```




### Resource : help
#### get /help/configuration
Returns the current configuration used by Twitter including twitter.com slugs which are not usernames

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/help/configuration 
```




#### get /help/languages
Returns the list of languages supported by Twitter along with the language code supported by Twitter

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/help/languages 
```




#### get /help/privacy
Returns Twitter's privacy policy

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/help/privacy 
```




#### get /help/tos
Returns the Twitter Terms of Service

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/help/tos 
```




### Resource : application
#### get /application/rate_limit_status
Returns the current rate limits for methods belonging to the specified resource families
* Request Parameters :

| Name | Location | Type | Required | Validation | Pattern | Enum | Definition | Default | Example | Description |
| :--: | :------: | :--: | :------: | :--------: | :-----: | :--: | :--------: | :-----: | :-----: | :---------: |
| resources | query | array |  no |  |  |  | [#/paths//application/rate_limit_status/get/parameters/0](#testtoto) |  |  | A comma-separated list of resource families you want to know the current rate limit disposition for

* Example of request :
```json
HTTP 1.1 get http://api.twitter.com/1.1/application/rate_limit_status 
```






---

## Table of contents
* [Summary](#summary)
* [Resources](#resources)
    * [Table of contents](#table-of-contents)

