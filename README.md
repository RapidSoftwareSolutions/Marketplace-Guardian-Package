[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Trello/functions?utm_source=RapidAPIGitHub_TrelloFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Guardian Package
Connect to the Open Platform for accessing all the content the Guardian creates, categorised by tags and section.
* Domain: [theguardian.com](http://theguardian.com)
* Credentials: apiKey

## How to get credentials: 
0. Register on [Open platform](https://bonobo.capi.gutools.co.uk/register/developer)
1. After registration, you'll receive API key by email
 
## Guardian.searchContent
You can find all parts of the content in the API

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| The api key obtained from Guardian
| query            | String     | Request content containing this free text. Supports AND, OR and NOT operators, and exact phrase queries using double quotes.
| section          | String     | Return only content in those sections. Example: football
| reference        | String     | Return only content with those references. Example: isbn/9780718178949
| reference-type   | String     | Return only content with references of those types. Example: isbn
| tag              | String     | Return only content with those tags. Example: technology/apple
| rights           | String     | Return only content with those rights. Example: syndicatable | subscription-databases
| ids              | String     | Return only content with those IDs. Example: technology/2014/feb/17/flappy-bird-clones-apple-google
| production-office| String     | Return only content from those production offices. Example: aus
| lang             | String     | Return only content in those languages. ISO language codes. Example: fr
| star-rating      | Number     | Return only content with a given star rating. From 1 to 5
| from-date        | String     | Return only content published on or after that date. Example: 2014-02-16
| to-date          | String     | Return only content published on or before that date. Example: 2014-02-17
| use-date         | String     | Changes which type of date is used to filter the results using from-date and to-date. Accepted values: published, newspaper-edition, last-modified
| page             | Number     | Return only the result set from a particular page. Example: 5
| page-size        | Number     | Modify the number of items displayed per page. Accepted values: 1 to 50
| order-by         | String     | Returns results in the specified order. Accepted values: newest, oldest, relevance
| order-date       | String     | Returns results in the specified order. Accepted values: published, newspaper-edition, last-modified
| show-tags        | String     | Add associated metadata tags. Example: publication
| show-fields      | String     | Add fields associated with the content
| show-section     | Boolean    | Add associated metadata section
| show-blocks      | String     | Add associated blocks
| show-elements    | String     | Add associated media elements such as images and audio. Accepted values: audio,image,video,all
| show-references  | String     | Add associated reference data such as ISBNs
| show-rights      | String     | Add associated rights. Accepted values: syndicatable, subscription-databases, all

## Guardian.getTags
Returns all tags in the Guardian API. All Guardian content is manually categorised using these tags, of which there are more than 50,000.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| The api key obtained from Guardian
| query          | String     | Request tags containing this free text. Example: sausages
| type           | String     | Return only tags of those types
| section        | String     | Return only tags in those sections. Example: football
| reference      | String     | Return only tags with those references. Example: isbn/9780718178949
| reference-type | String     | Return only tags with references of those types. Example: isbn
| page           | Number     | Returns results only for that page index. Example: 5
| page-size      | Number     | Modify the number of items displayed per page. Example: 10
| show-references| String     | Add associated reference data such as ISBNs

## Guardian.getSections
Returns all sections in the Guardian API.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| The api key obtained from Guardian
| query | String     | Request tags containing this free text. Example: sausages

## Guardian.getEditions
Returns all returns all editions in the Guardian API. Editions are the different front main pages of the Guardian site we have. At current we have editions for the United Kingdom, the United States and Australia.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| The api key obtained from Guardian
| query | String     | Return section based on the query term specified. Example: business

## Guardian.getSingleItem
Returns all the data we have for a given single item id. Here the term 'item' refers to either a piece of content, a tag, or a section. The item endpoint matches the paths on theguardian.com.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKey            | credentials| The api key obtained from Guardian
| id                | String     | The ID for an item, such as a piece of content, is the path to that item on the site.
| section           | String     | Return only content in those sections. Example: football
| reference         | String     | Return only content with those references. Example: isbn/9780718178949
| reference-type    | String     | Return only content with references of those types. Example: isbn
| tag               | String     | Return only content with those tags. Example: technology/apple
| rights            | String     | Return only content with those rights. Example: syndicatable | subscription-databases
| ids               | String     | Return only content with those IDs. Example: technology/2014/feb/17/flappy-bird-clones-apple-google
| production-office | String     | Return only content from those production offices. Example: aus
| lang              | String     | Return only content in those languages. ISO language codes. Example: fr
| star-rating       | Number     | Return only content with a given star rating. From 1 to 5
| from-date         | String     | Return only content published on or after that date. Example: 2014-02-16
| to-date           | String     | Return only content published on or before that date. Example: 2014-02-17
| use-date          | String     | Changes which type of date is used to filter the results using from-date and to-date. Accepted values: published, newspaper-edition, last-modified
| page              | Number     | Return only the result set from a particular page. Example: 5
| page-size         | Number     | Modify the number of items displayed per page. Accepted values: 1 to 50
| order-by          | String     | Returns results in the specified order. Accepted values: newest, oldest, relevance
| order-date        | String     | Returns results in the specified order. Accepted values: published, newspaper-edition, last-modified
| show-tags         | String     | Add associated metadata tags. Example: publication
| show-fields       | String     | Add fields associated with the content
| show-section      | Boolean    | Add associated metadata section
| show-blocks       | String     | Add associated blocks
| show-elements     | String     | Add associated media elements such as images and audio. Accepted values: audio,image,video,all
| show-references   | String     | Add associated reference data such as ISBNs
| show-rights       | String     | Add associated rights. Accepted values: syndicatable, subscription-databases, all
| show-story-package| Boolean    | When true display a list of content that is in the has been identified as being about the same story as the requested content item. When a content item is in a package the hasStoryPackage field has a value of true
| show-editors-picks| Boolean    | When true display a list of content that is chosen by editors on tags, sections and the home page. This content list represents the main list of content found on the equivalent path on the site
| show-most-viewed  | Boolean    | When true display most viewed content. For overall most viewed set id to '/', for section most viewed set id to the section id
| show-related      | Boolean    | Content items can show a set of 'related' content. When true returns content items related to the main content item

