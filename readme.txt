=== Registered Only ===
Tags: access-control, users, management, login
Contributors: Carthik Sharma, David Fraser.

Registered only is a plugin to make all of your WordPress powered weblog/site protected. Once this plugin is enabled, the WordPress powered site or weblog (including Pages) will be accessible only to logged in, registered users.

== Installation ==

1. Upload 'registered-only.php' to your plugins folder, usually `wp-content/plugins/`
2. Verify that the "Anyone can register" option in the Options->General page of the WordPress administration interface is NOT selected
3. Activate the plugin on the plugin screen
4. This plugin does not protect your feeds. So delete or disable the feed files to avoid people from reading your feeds. The feed files are wp-atom.php, wp-commentsrss2.php, wp-rdf.php, wp-rss2.php, wp-rss.php and wp-feed.php. Delete wp.php too, since this file is not controlled like index.php is.

== Frequently Asked Questions ==

= Can I restrict access to only certain categories/posts/pages with this plugin? =
No, you cannot. This plugin will make the entire weblog and all the Pages, if you have any, protected against un-registered users.

= How can I tell if it's working? =

After you activate the plugin, log out, and try to access your weblog. You should not be able to access it. Also, once you log in, all pages should be accessible to you in a perfectly normal fashion :)

== Screenshots ==

This plugin's functionality cannot be displayed using screenshots :)
