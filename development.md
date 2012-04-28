# Development in ExpressionEngine

## Overview
Development in ExpressionEngine covers two areas:

1. **Basic:** Creating `Channels`, `Custom Fields` and `Templates` to display content
2. **fAdvanced:** Creating or using custom code to augment ExpressionEngine's out-of-the-box functionality

## Basic
The basics of ExpressionEngine development are creating what the [main page](/) describes: Setting up `Channels`, `Field Groups` and `Custom Fields`. While this is basic to ExpressionEngine, it does require planning and experience to do well. A developer will review a design or specifications document and plan on how one will accomplish building the site and meet those needs.

Initial plans often need to change to meet site requirements as technical limitations are met or upon realizing that ExpressionEngine treats certain functionality in ways one does not expect. Experience will help a developer plan ahead for these "gotchas." For the most part, ExpressionEngine does not limit how one can treat content. However, some limitations do exist, as is true for all Content Management Systems. Experience is the best teacher.

## Advanced
ExpressionEngine's separation of content from design is the first aspect that makes ExpressionEngine powerful. The second aspect is its system for add-on development. An `Add-on` is any bit of code which augments the core functionality of ExpressionEngine. These come in a few flavors:

1. Accessories
2. Emoticons
3. Extensions
4. Fieldtypes
5. Plugins
6. Modules

### Accessories
A `Accessory` is of limited functionality and are not necessarily found often in ExpressionEngine sites. In essense, it is a tab you can add to the footer of every page in the ExpressionEngine admin panel. They are largely used to display information about the site, such as comment moderation statistics (Comments awaiting moderation, amount of spam blocked, etc).

### Emoticons.
An `Emoticon` can be made for use in ExpressionEngine forums, comments or other user-generated content areas. ![A Smiley](http://ellislab.com/images/smileys/grin.gif)

### Extensions
An `Extension` allows a developer to inject or add their own functionality to ExpressionEngine's core code via what is called a "hook." For instance, an extension can "hook" into ExpressionEngine's functionality to do processing everytime an entry is created, a user logs in, a new user is registered, and much more. You can get a general sense of what hooks are available [here](http://expressionengine.com/user_guide/development/extension_hooks/index.html).

### Fieldtypes
Fieldtypes are one of the most powerful types of `Add-on`. These allow for the creation of new types of content an administrator can enter, and can therefore define what and how a `Channel` is. An few examples: 

1. A `Channel` for locations might require a map which gives directions. A `Fieldtype` can create this functionality. A user may want to display Youtube videos. 
2. A `Channel` for videos might require a Youtube embed. A `Fieldtype` can accept Youtube embed codes and allow a video to be displayed in many ways. 

`Fieldtypes` are extremely powerful as they allow a user to add in content in almost limitless ways.

> Fieldtypes and Custom Fields are terms that are often used interchangably. "Fieldtype" is usually used when speaking in context of development, while "Custom Field" is usually used while speaking in context of building Channels and entering content.

### Plugins
Another powerful `Add-on` is the `Plugin.` These allow developers to add functionality that can be added into `Templates`, without having to put actual code directly in a template itself. ExpressionEngine uses `Tags`, which are added to `Templates` and correspond directly to come custom code. That code is responsible for processing the tag and generating content within a template based on the tag and its parameters.

In short, `Plugins` allow a developer to create their own custom `Tags` to add to `Templates`.

### Modules
While `Fieldtypes` are extremely powerful in that they allow near limitless content potential, `Modules` are similarly as powerful as they allow near limitless functionality potential.

`Modules` do *everything* a `Plugin` can do, but have additional abilities. These are:

1. Create control panels. These are used to configure, edit or otherwise use the module. Most create some functionality for a site user, however some modules live purely in the admin area.
2. Accept form processing (user input). This might be as simple as a contact form or as complicated as a payment transactions and AJAX calls. **This is how you allow a user to interact with your website**.

> All ExpressionEngine Add-ons, and ExpressionEngine itself, have the [CodeIgniter](http://codeigniter.com/) framework available to them. All the functionality of CodeIgniter is available to developers.











