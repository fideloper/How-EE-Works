# This is how Expression Engine works

This is a brief explanation behind content management in Expression Engine. This will be most useful to you if you already know what [Expression Engine is](http://expressionengine.com/) is before reading this.

## Channels
`Channels` are content types. A blog section is a content type. A video feed is a content type. An image rotator might be a content type, or it might be a presentation of another content type such as a blog. 

> "Channel" and "Content Type" are terms that are often used interchangably.

## Field Groups
`Field Groups` are a collection of `Custom Fields` that belong together. A `Field Group` is assigned to a `Channel`. In this way, a `Channel` is given meaning and context by the type and grouping of fields it is assigned.

## Custom Fields
`Custom Fields` allow users to enter in content in various forms. *Common* custom fields include:

* Text Fields
* Text Areas
* WYSIWYG's (Ex: [Wygwam](http://pixelandtonic.com/wygwam))
* Files
* Lists
* Dropdown Menus
* Third-party

Third-party fieldtypes are fields that extend or create new ways for users to enter and organize content. Examples include [Matrix](http://pixelandtonic.com/matrix), which allows multiple data points to be assigned to one field (Image galleries, or fields that meta information such as links with custom text and title text are just two examples).

`Custom Fields` are grouped together to form a `Field Group`.

##### Example:
	A Blog article needs a Title, Image and Text Content fields.

	* Channel: Blog
	* Field Group: Blog Fields
	* Custom Fields:
		* Title
		* Image
		* Text Content

## Entries
`Entries` are pieces of content. Each entry is assigned to a `Channel`. Following our original example, a blog article or an indivsual video are both examples of `Entries`.

Each entry will have the custom fields assigned that entry's `Channel`.

##### Example:
	The Channel 'Blog' is assigned Field Group 'Blog Fields', which in turn contains three Custom Fields: 'Title', 'Image', 'Text Content'
	
	Therefore, a Blog entry will have these three fields for a user to fill out:
	
		* Title
		* Image
		* Text Content



## Templates
Templates serve two purposes:

1. Generating the URL used to access them on the web
2. Housing content, both `Entries` and 'hard-coded'

**Templates are used to generate site URLS.** Like `Custom Fields`, `Template Files` are saved in `Template Groups`. `Template Groups` are a **folder** which contain `Template Files`. The name of a group and the name of the file dictate the URL used to access them.

> "Template" and "Page" are terms that are often used interchangably.

##### Example:
	*Example 1:
	Template Group 'blog.group' contains template 'article.html'. To view this template in a web browser, we go to:
	
	http://mysite.com/blog/article
	
	*Example 2:
	Template Group 'blog.group' contains template 'index.html'. To view any 'index.html' template, we simply use the group name:
	
	http://mysite.com/blog

**Templates are used to house and display content.** This is often either a listing of `Entries` or a single entry. A template may be a page listing recent blog articles (multiple `Entries`), may be contain only an indivsual blog article (a single entry).

