=== CPT Commands ===
Contributors: yafarhad
Tags: cpt, scf, acf, commands, site-editor
Requires at least: 6.8
Tested up to: 6.9
Stable tag: 0.1.4
Requires PHP: 7.2
License: GPLv2 or later

Adds a set of new search results to the site editor command palette (CMD+K/CTRL+K) for all posts under custom types except those ignored from the settings page. This enables quick jumps through the posts of custom types in addition to the built-in Post and Page types.

== Description ==

WordPress has a great time-saving feature— the command palette. It is very useful to perform quick commands and also navigate through pages or posts using keyboard alone. However, it is limited to the core Post and Page types. It does not populate entries from other content types. So, for those using the site editor with Custom Post Types setup, this is workflow partially breaks.

CPT Commands fills up the gap in WordPress core. Side-by-side with WordPress default types, it injects **Custom Type** entries into the command palette. This plugin requires no setup. Just install, activate and you are good to go!

If you find this plugin useful, then please leave an appropriate review.

== Installation ==
0. Visit the **Add New** plugin screen and click the **Upload Plugin** button.
0. Click the **Browse…** button and select zip file from your computer.
0. Click the **Install Now** button.
0. **Activate** the plugin.

== Configuration ==

See **Settings** → **CPT Commands** for customization options. This step is optional and not necessary in most cases.

==  Screenshots ==
1. Plugin in action (GIF record)

== Frequently Asked Questions ==

= Is CPT Commands free? =
Absolutely free and it will remain free forever.

= I cannot see any custom types in the command palette. Why? =
You must have at least one custom post type registered with code or using a plugin like SCF, ACF, Pods, Simple CPT, etc. CPT Commands does not create any custom post types (except inside the preview/playground). It only injects existing posts from registered custom post types into the command palette.

= I have registered a custom post type, but I cannot see it in the command palette. Why? =
Make sure that you have some posts saved under the custom post type. If there is no posts, then there is nothing for the plugin to inject into the command palette.

= It takes too long for the posts to appear inside the command palette. What can I do? =
If you have too many custom types registered and you don't need to jump through all of them, then turn off unnecessary types from the **Settings** → **CPT Commands** options page.

== Changelog ==

= 0.1.4 =
* Fixes for Plugin Review (251209)

= 0.1.3 =
* CMD+K Everywhere (6.9)

= 0.1.2 =
* Rebranding

= 0.1.1 =
* Update readme
* Add support links

= 0.1.0 =
* Initial release
