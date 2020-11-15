# Revitron Automad Theme

This theme is an [Automad](https://automad.org) port of the [Revitron Sphinx theme](https://github.com/revitron/revitron-sphinx-theme). Check out the Revitron [documentation](https://revitron.readthedocs.io/) as a live demo. Note that this port might differ from the original Sphinx theme in small details.

![](https://raw.githubusercontent.com/marcantondahmen/media-files/master/themes/revitron/default.png)

## Templates

This theme provides two different templates &mdash; a [default](https://revitron.readthedocs.io/en/latest/get-started.html) including a sidebar navigation and a [landing page](https://revitron.readthedocs.io/) template. 
Content can be added and edited using the block editor. 

> Due to the layout of this theme, all full-width options for blocks are disabled on purpose.

![](https://raw.githubusercontent.com/marcantondahmen/media-files/master/themes/revitron/landing.png)
![](https://raw.githubusercontent.com/marcantondahmen/media-files/master/themes/revitron/mobile.png)

## Options

The following variables are available:

| Name | Description | Scope |
| --- | --- | --- |
| + Main | The main content block area | Page |
| Brand | The brand HTML, SVG or text to be used as logo | - |
| Image Logo | The path to your logo - this variable should be defined globally in the shared data section | - |
| Image Logo Mobile | An alternative logo for smaller devices | - |
| Items Footer | Additional markup to be added to page's footer | - |
| Items Header | Additional markup to be added to page's `<head></head>` section | - |
| Format Date | The format for displaying the date | - |
| Label More | Label text for the "More" button | Shared |
| Label Show All | Label text for filter button when no filter is selected | Shared |
| Locale | The locale information to format date and time according to like `en_EN` or `de_DE` | - |
| Meta Title | An optional meta title to be used for the browser title bar and links used on Twitter, Facebook or similar social networks | - |
| Notification No Search Results | Notification text for an empty list of search results | Shared |
| Og Image | A glob pattern to select a preview image for Twitter, Facebook or similar social network cards. This could be for example `*.png, *.jpg` | - |
| Placeholder Search | Placeholder text for the search field of the main menu | Shared |
| Search Results Title | The title for the search results page | Shared |
| Syntax Theme | The name of the syntax theme for [highlight.js](https://highlightjs.org/static/demo/), the default is 'ascetic'. | Shared |	
| Url Github | The URL to a related GitHub repository | Shared |
| Url Pagelist | The URL for the search results page | Shared |