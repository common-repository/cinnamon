=== Cinnamon ===
Contributors: dartiss
Tags: browser, find, search, synonym, text
Requires at least: 4.6
Tested up to: 4.9
Requires PHP: 5.3
Stable tag: 1.2.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Find in-page text using synonyms.

== Description ==

Find in-page text using synonyms.

A visitor to your site decides to follow you on Twitter. You have a link in your footer - but their search for "Twitter" comes up empty and they move on. Unfortunately, you named the link "@username" instead. Cinnamon.js prevents just this situation, taking some of the pain out of naming things. It allows users to find links, images, and other content by their synonyms, using the browser's built-in Find function.

Using it is incredibly simple - simply wrap the shortcode of `[cinnamon]` around with your word with each parameter being a synonym. For example..

`[cinnamon Azure Cerulean Cobalt]Blue[/cinnamon]`

This will output the word "Blue" but searches for azure, cerulean or cobalt in the browser will find the same word.

Technical specification...

* Licensed under the [GPLv2 (or later)](http://wordpress.org/about/gpl/ "GNU General Public License"). Cinnamon is licensed under the [MIT license](http://mit-license.org/ "MIT license"), which is compatible with GPL
* Designed for both single and multi-site installations
* PHP7 compatible
* Fully internationalized, ready for translations. **If you would like to add a translation to this plugin then please head to our [Translating WordPress](https://translate.wordpress.org/projects/wp-plugins/cinnamon "Translating WordPress") page**
* WCAG 2.0 Compliant at AA level

**Before using this plugin it is highly recommended that you read the FAQ as there are important points to note with regard to its use**

Acknowledgements must go to [Thomas Park](http://thomaspark.co "Thomas Park") for creating the Cinnamon script.

Please visit our [Github page](https://github.com/dartiss/cinnamon "Github") for the latest code development, planned enhancements and known issues.

== Installation ==

Cinnamon can be found and installed via the Plugin menu within WordPress administration (Plugins -> Add New). Alternatively, it can be downloaded from WordPress.org and installed manually...

1. Upload the entire `cinnamon` folder to your `wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress administration.

Voila! It's ready to go.

== Frequently Asked Questions ==

= Does using this plugin affect your page ranking? =

Hidden text, used deceptively, can be penalized by Google. Precisely what's counted as deception is anyone's guess, but there's a risk that it's deemed a dirty SEO tactic even if it is not intended as such.

= Does Cinnamon hurt accessibility? =

No - it uses `aria-hidden` to tell screen readers to ignore the synonyms.

= Will the browser find "invisible" text? =

If text is set to display: none;, Find doesn't see it at all - this much is true of all browsers. Same goes for visibility: hidden; (except for Opera, where Find matches the synonym but nothing is seen).

When opacity is set to 0, most browsers match the text, but nothing is visibly highlighted (Opera is the odd man out again, highlighting the background of the matched text).

When text is set to `color: transparent;` most browsers, including Firefox and Chrome, will highlight the area while the text stays transparent - just what we want!

= Does it work on all browsers? =

That I'm aware of - some edge cases may have been missed.

However, Safari does things differently. When transparent text is found, Safari will display it as black text on yellow. If the text is buried under elements with a higher z-index, it brings it to the top.

Another difference: most browsers match text in the middle of a string. Safari only does so when the string is CamelCase.

== Changelog ==

= 1.2.3 =
* Maintenance: Added Github links to meta

= 1.2.2 =
* Maintenance: Removed donation link from plugin meta

= 1.2.1 =
* Maintenance: Minimum WordPress level is now 4.6, allowing version checks to be removed
* Maintenance: Removed languages folder and links to it, which is no longer required after WP 4.6
* Maintenance: Corrected links to author site
* Maintenance: Changes made to README to accommodate new plugin directory layout
* Enhancement: Yoda conditions used throughout code

= 1.2 =
* Enhancement: Only load the Cinnamon script when the shortcode has been used on the page. Speedy!
* Enhancement: After WordPress 4.6 the translations for the text domain don't need to be unloaded - so now I don't!
* Maintenance: Added Cinnamon script version number to URL to aid with caching

= 1.1.4 =
* Maintenance: Updated branding, inc. adding donation links

= 1.1.3 =
* Maintenance: Updated branding

= 1.1.2 =
* Maintenance: Changed script ENQUEUE to support SSL sites
* Maintenance: Added text domain to plugin meta

= 1.1.1 =
* Enhancement: Added internationalization

= 1.1 =
* Maintenance: Updated Cinnamon.js to 1.0.6

= 1.0 =
* Initial release

== Upgrade Notice ==

= 1.2.3 =
* Added Github links
