=== Twitter Card Generator ===

Contributors: Riley MacDonald
Donate link: http://www.rileymacdonald.ca
Tags: Meta, Tags, Twitter, Cards, Card, Twitter Cards, Tweet, Summary, Photo, Gallery, App
Requires at least: 3.5.1
Tested up to: 3.9.1
Stable tag: 1.0.5
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==

Generate Twitter meta tags for your standard WordPress posts automatically.
To configure which type of twitter card the plugin will generate, visit the plugin settings page.
More information about Twitter Cards can be Found [Here](https://dev.twitter.com/docs/cards).

The current supported types of twitter cards are:
* Summary Card
* Large Image Summary Card
* Photo Card
* Gallery Card
* App Card

== Installation ==

1. Extract/Upload the directory `twitter-card-generator` to the `/wp-content/plugins/` directory of your site.
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Ensure you have WordPress excerpt turned on in the screen settings (found at the top of the post screen).

== Instructions for Use ==

Twitter Account:

Update your WordPress profile by adding your Twitter username in the WordPress User Profile Screen.
Each Twitter card generated will automatically be updated with the Twitter account associated with the WordPress user.

Card Type:

In the settings of the plugin, choose the type of Twitter Card to generate.
Follow the instructions below for your desired card type:

Summary Card:

* The post title will be used as the title, and the post excerpt (max 200 characters) will be used as a description.
* The featured image of the post will be used as the thumbnail.
* If the post does not have a featured image, the image in the plugin settings will be used.
* If no image is set (featured or settings) no image will appear, and the Twitter Card may not work correctly.
* The image used must be larger than 60x60 px in size.
* When setting a default image in the settings screen, images from the WordPress media library
will be listed. To add images to choose from, upload them to the WordPress media library using the main menu.
* Images larger then 1MB are not supported.
* Animated GIF's are not supported.

Large Image Summary Card:

* The post title will be used as the title, and the post excerpt (max 200 characters) will be used as a description.
* The featured image of the post will be used as the thumbnail.
* If the post does not have a featured image, the image in the plugin setting will be used.
* If no image is set (featured or settings) no image will appear, and the Twitter Card may not work correctly.
* The image used must be a minimum of 280px wide, and 150px high.
* When setting a default image in the settings screen, images from the WordPress media library
will be listed. To add images to choose from, upload them to the WordPress media library using the main menu.
* Images larger then 1MB are not supported.
* Animated GIF's are not supported.

Photo Card:

* The post title (optional) will be used as the title, and the post excerpt (max 200 characters) will be used as a description.
* Twitter will automatically resize images to the following sizes: Web: maximum height of 375px, maximum width of 435px, Mobile (non-retina displays), maximum height of 375px, maximum width of 280px, Mobile (retina displays): maximum height of 750px, maximum width of 560px
* The image must be a minimum of 280px wide, and 150px high.
* Images larger then 1MB are not supported.
* Animated GIF's are not supported.

Gallery Card:

* The post title will be used as the title, and the post excerpt (max 200 characters) will be used as a description.
* The first four images attached to the post will be featured in the gallery card.

App Card:

* This card is designed for websites showcasing specific mobile applications for iOS and Android.
* If you use this card, each tweet will feature the pointed application.

Twitter Validation:

Your Twitter Card must be validated by Twitter in order to work correctly.
You can test and validate your Twitter Card using the [Validator](https://dev.twitter.com/docs/cards/validation/validator)

== Screenshots ==

1. Settings Menu
2. WordPress User Profile Twitter Section
3. Example of Summary Twitter Card

== Frequently Asked Questions ==

= Why is my Twitter Card is not working? =

Use the [Twitter Card Validator](https://dev.twitter.com/docs/cards/validation/validator) to ensure you are validated to use Twitter Cards. This feature will flag any other errors relating to your card.

= Why is the Gallery card is displaying the wrong images? =

Navigate to the WordPress Media Library and ensure there are no images attached to the post in question.

= Why is the Image selected is not displaying on Twitter? =
Ensure the image is less then 1MB in file size, larger then 60px x 60px in dimensions, and not an animated GIF.

== Changelog ==

= 1.0.0 =
* Summary Card support hard coded.

= 1.0.1 =
* Mulitple Card support added.
* Settings menu added.

= 1.0.2 =
* Added fix to prevent admin styles loading on front end.
* Minor code maintenance

= 1.0.3 =
* Bug fix to custom_meta_box code

= 1.0.4 =
* Fixed issue which caused summary cards to display the image at 150x150

== Upgrade Notice ==

= 1.0.0 =
* Upgrade to latest version for multiple card support.

= 1.0.1 =
* Latest version

= 1.0.2 =
* Latest version

= 1.0.3 = 
* Latest version

= 1.0.4 =
* Latest version
