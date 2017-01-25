# WordPress Admin Pattern Library #
Contributors: helen, ryelle  
Requires at least: 3.7  
License: GPLv2 or later  
License URI: http://www.gnu.org/licenses/gpl-2.0.html  
Stable tag: trunk  

Because it's horrible that we don't have one. Previously known as a style guide, but that was misleading. The repo URL still reflects that.


## Description ##

This is a plugin that is meant to serve as a development ground for WordPress admin UI components, such as one might find in front end development frameworks such as Twitter Bootstrap or Zurb Foundation. These will by no means be as comprehensive, but rather should eventually account for commonly used admin elements. This plugin is not planned to be distributed through the WordPress.org repository, as its anticipated final form will take over a site completely.

## Pages ##

* jQuery UI Components
* Forms
* Helper Classes

## Contributing ##

Pull requests and issues welcome. How this is developed will likely be ever-evolving, especially as pieces of component CSS (hopefully) get absorbed into core.

### Plan of attack ###

1. Create test pages that display various reusable UI components, such as forms and jQuery UI components.
1. Create styles as needed to make everything beautiful, consistent, and usable. Don't forget responsive considerations and usage within other components, such as forms within meta boxes.
1. Add code samples to the test pages. Boom, now they're style guide pages.
1. Add magic that kicks logged in users to the admin, so that they view the style guide within the context of the admin. It should redirect non-logged-in users to the login page, and should hide everything except the style guide pages. The toolbar should show the W menu, My Sites, the user menu, and custom links to a few places like WordPress.org.

## Related Works ##

[WordPress Admin Style](https://github.com/bueltge/WordPress-Admin-Style)

