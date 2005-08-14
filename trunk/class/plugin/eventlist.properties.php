<?php

    /**
     * @package plugin
     */

	/**
	 * defines the list of events that can be thrown by default
	 *
	 * more events can be defined everywhere, and if you define them
	 * with a constant called "EVENT_", the PluginManager class will be able
	 * to discover them
	 */
	 
	// single post and bunch of posts loaded
	define( "EVENT_POST_LOADED", 1 ); 
	define( "EVENT_POSTS_LOADED", 2 ); 
	// single comment and bunch of comments loaded
	define( "EVENT_COMMENT_LOADED", 3 );
	define( "EVENT_COMMENTS_LOADED", 4 );
	// post previewed, in the admin interface
	define( "EVENT_POST_PREVIEW", 5 );
	// before and after a post is added, updated and deleted
	define( "EVENT_PRE_POST_ADD", 6 ); 
	define( "EVENT_POST_POST_ADD", 7 ); 
	define( "EVENT_PRE_POST_UPDATE", 8 ); 
	define( "EVENT_POST_POST_UPDATE", 9 ); 
	define( "EVENT_PRE_POST_DELETE", 10 ); 
	define( "EVENT_POST_POST_DELETE", 11 ); 
	// before and after a new category is added, updated and deleted
	define( "EVENT_PRE_CATEGORY_ADD", 12 ); 
	define( "EVENT_POST_CATEGORY_ADD", 13 ); 
	define( "EVENT_PRE_CATEGORY_UPDATE", 14 ); 
	define( "EVENT_POST_CATEGORY_UPDATE", 15 ); 
	define( "EVENT_PRE_CATEGORY_DELETE", 16 ); 
	define( "EVENT_POST_CATEGORY_DELETE", 17 ); 
	// before and after a comment is added, updated and deleted
	define( "EVENT_PRE_COMMENT_ADD", 18 ); 
	define( "EVENT_POST_COMMENT_ADD", 19 ); 
	define( "EVENT_PRE_COMMENT_UPDATE", 20 ); // can't be generated!
	define( "EVENT_POST_COMMENT_UPDATE", 21 ); // can't be generated!
	define( "EVENT_PRE_COMMENT_DELETE", 22 ); 
	define( "EVENT_POST_COMMENT_DELETE", 23 ); 
	// before and after a comment is marked as spam and no-spam
	define( "EVENT_PRE_MARK_SPAM_COMMENT", 24 ); 
	define( "EVENT_POST_MARK_SPAM_COMMENT", 25 ); 
	define( "EVENT_PRE_MARK_NO_SPAM_COMMENT", 26 ); 
	define( "EVENT_POST_MARK_NO_SPAM_COMMENT", 27 ); 
	// before and after a trackback is received
	define( "EVENT_PRE_TRACKBACK_ADD", 28 );
	define( "EVENT_POST_TRACKBACK_ADD", 29 );
	// load the post trackbacks
	define( "EVENT_TRACKBACKS_LOADED", 30 ); 
	// successful and unsuccessful login
	define( "EVENT_LOGIN_SUCCESS", 31 ); 
	define( "EVENT_LOGIN_FAILURE", 32 ); 
	// logout event
	define( "EVENT_PRE_LOGOUT", 33 ); 
	define( "EVENT_POST_LOGOUT", 34 ); 
	// before and after a user is registered, deleted and updated
	define( "EVENT_PRE_USER_ADD", 35 ); 
	define( "EVENT_POST_USER_ADD", 36 ); 
	define( "EVENT_PRE_USER_DELETE", 37 ); 
	define( "EVENT_POST_USER_DELETE", 38 ); 
	define( "EVENT_PRE_USER_UPDATE", 39 ); 
	define( "EVENT_POST_USER_UPDATE", 40 ); 
	// before and after a new blog is registered
	define( "EVENT_PRE_BLOG_ADD", 41 );
	define( "EVENT_POST_BLOG_ADD", 42 );
	define( "EVENT_PRE_BLOG_DELETE", 43 ); 
	define( "EVENT_POST_BLOG_DELETE", 44 ); 
	define( "EVENT_PRE_BLOG_UPDATE", 45 ); 
	define( "EVENT_POST_BLOG_UPDATE", 46 ); 
	// before and after a custom field is added, updated and deleted
	define( "EVENT_PRE_CUSTOM_FIELD_ADD", 47 ); 
	define( "EVENT_POST_CUSTOM_FIELD_ADD", 48 ); 
	define( "EVENT_PRE_CUSTOM_FIELD_UPDATE", 49 ); 
	define( "EVENT_POST_CUSTOM_FIELD_UPDATE", 50 ); 
	define( "EVENT_PRE_CUSTOM_FIELD_DELETE", 51 ); 
	define( "EVENT_POST_CUSTOM_FIELD_DELETE", 52 ); 
	// before and after the settings of the blog are updated
	define( "EVENT_PRE_BLOG_SETTINGS_UPDATE", 53 );
	define( "EVENT_POST_BLOG_SETTINGS_UPDATE", 54 );
	// before and after a resource is added, updated and deleted
	define( "EVENT_PRE_RESOURCE_ADD", 55 );  
	define( "EVENT_POST_RESOURCE_ADD", 56 ); 
	define( "EVENT_PRE_RESOURCE_UPDATE", 57 ); 
	define( "EVENT_POST_RESOURCE_UPDATE", 58 ); 
	define( "EVENT_PRE_RESOURCE_DELETE", 59 ); 
	define( "EVENT_POST_RESOURCE_DELETE", 60 ); 
	// before and after a resource album is added, updated and deleted
	define( "EVENT_PRE_ALBUM_ADD", 61 ); 
	define( "EVENT_POST_ALBUM_ADD", 62 ); 
	define( "EVENT_PRE_ALBUM_UPDATE", 63 ); 
	define( "EVENT_POST_ALBUM_UPDATE", 64 ); 
	define( "EVENT_PRE_ALBUM_DELETE", 65 ); 
	define( "EVENT_POST_ALBUM_DELETE", 66 ); 
	// resources loaded
	define( "EVENT_RESOURCE_LOADED", 67 ); 
	define( "EVENT_RESOURCES_LOADED", 68 ); 
	// some others that I forgot..
	define( "EVENT_CUSTOM_FIELD_LOADED", 69 ); 
	define( "EVENT_CUSTOM_FIELDS_LOADED", 70 ); 
	define( "EVENT_CATEGORY_LOADED", 71 ); 
	define( "EVENT_CATEGORIES_LOADED", 72 ); 
	define( "EVENT_USER_REGISTER", 73 );
	define( "EVENT_BLOG_REGISTER", 74 );
	define( "EVENT_USERS_LOADED", 75 ); 
	define( "EVENT_USER_LOADED", 76 ); 
	define( "EVENT_BLOG_LOADED", 77 ); 
	define( "EVENT_BLOGS_LOADED", 78 ); 
	// template and locale events
	define( "EVENT_PRE_TEMPLATE_ADD", 79 );
	define( "EVENT_POST_TEMPLATE_ADD", 80);
	define( "EVENT_PRE_TEMPLATE_DELETE", 81 );
	define( "EVENT_POST_TEMPLATE_DELETE", 82 );
	define( "EVENT_PRE_LOCALE_ADD", 83 );
	define( "EVENT_POST_LOCALE_ADD", 84 );
	define( "EVENT_PRE_LOCALE_DELETE", 85 );
	define( "EVENT_POST_LOCALE_DELETE", 86 );
	// albums
	define( "EVENT_ALBUM_LOADED", 87 ); 
	define( "EVENT_ALBUMS_LOADED", 88 ); 
	// links
	define( "EVENT_PRE_LINK_ADD", 89 ); 
	define( "EVENT_POST_LINK_ADD", 90 ); 
	define( "EVENT_PRE_LINK_UPDATE", 91 ); 
	define( "EVENT_POST_LINK_UPDATE", 92 );
	define( "EVENT_PRE_LINK_DELETE", 93 );
	define( "EVENT_POST_LINK_DELETE", 94 );
	define( "EVENT_LINK_LOADED", 95 );
	define ("EVENT_LINKS_LOADED", 96 );
	// link categories
	define( "EVENT_PRE_LINK_CATEGORY_ADD", 97 );
	define( "EVENT_POST_LINK_CATEGORY_ADD", 98 );
	define( "EVENT_PRE_LINK_CATEGORY_UPDATE", 99 );
	define( "EVENT_POST_LINK_CATEGORY_UPDATE", 100 );
	define( "EVENT_PRE_LINK_CATEGORY_DELETE", 101 );
	define( "EVENT_POST_LINK_CATEGORY_DELETE", 102 );
	define( "EVENT_LINK_CATEGORY_LOADED", 103 ); 
	define( "EVENT_LINK_CATEGORIES_LOADED", 104 ); 
	// event thrown when plog is going to render some text that could be written
	// in something else other than xhtml markup (wiki) or to implement text filters
	// such as textile and stuff like that... by popular request, again :-)
	define( "EVENT_TEXT_FILTER", 105 );
	// when removing trackbacks
	define( "EVENT_PRE_TRACKBACK_DELETE", 106 );
	define( "EVENT_POST_TRACKBACK_DELETE", 107 );
	// for referrers
	define( "EVENT_PRE_REFERRER_DELETE", 108 );
	define( "EVENT_POST_REFERRER_DELETE", 109 );
	define( "EVENT_PRE_REFERRER_ADD", 110 );
	define( "EVENT_POST_REFERRER_ADD", 111 );
?>
