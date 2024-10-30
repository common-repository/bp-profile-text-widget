=== BP Profile Video Widget ===
Contributors: slushman
Donate link: http://slushman.com/
Tags: buddypress, widget, video, player, YouTube, Vimeo, profile, embed
Requires at least: 2.9.1
Tested up to: 3.3.2
Stable tag: 0.2
License: GPLv2

The BP Profile Text Widget allows users to add a customized text widget to the sidebar of their profile page within a BuddyPress network using a custom profile field on their profile form.

== Description ==

*** THIS PLUGIN IS NO LONGER UNDER DEVELOPMENT! ***

I haven't discontinued development of this plugin in favor of the newer version - BP Profile Widgets. Please install that plugin instead of this one.


The BP Profile Text Widget allows users to add a customized text widget to the sidebar of their profile page within a BuddyPress network using a custom profile field on their profile form.

Features

* Add a text widget to a user's profile page in BuddyPress
* Text comes from a custom profile field

== Installation ==

1. Upload the BP Profile Text Widget folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Create the extended profile field (see FAQ for details)
4. Drag the BP Profile Text Widget to a sidebar on the 'Widgets' page under the 'Appearance' menu

== Frequently Asked Questions ==

= What Custom Profile Fields do I need for this plugin to work properly? =

The following field is required and must use the EXACT Field Title as below to work properly:

Field Title: Custom Text
Field Type: Multi-line Text Box

= How do I hide these custom profile fields so they don't show on people's profile pages? =

Install the plugin BP Profile Privacy.  For each of the custom profile fields created for this plugin, select User instead of Everyone.

= How do I make this widget only appear on the user's profile page? =

Install the plugin Widget Logic. At the bottom of each widget will have another field, called Widget Logic. Paste in the following:

bp_is_user_profile() && !is_page(array('About', 'News', 'Interviews')) && !is_home()

This code shows this widget only on the BuddyPress user profile page (but nowhere else in BuddyPress), and explicitly not on the WordPress home page or any other WordPress page. You'll need to change the !is_page array to reflect the pages on your site.

== Screenshots ==

1. Widget options
4. Custom profile fields

== Changelog ==

= 0.2 =
Discontinuing development of this plugin.
Notifying users of the new plugin - BP Profile Widgets

= 0.1 =
Plugin created.

== Upgrade Notice ==

= 0.2 = 
This plugin is now discontinued, please install BP Profile Widgets instead.

= 0.1 =
Plugin released.