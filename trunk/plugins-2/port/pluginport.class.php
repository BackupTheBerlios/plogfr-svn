<?php
/* 
* pluginport.class.php, version 0.01 Bradley Liang < bliang at bliang dot com >
*
*   This plugin is used to port entries from one software to another.  Simply select the
*   appropriate port "profile" and fill in the required information to port your MT/bBlog/etc
*   posts, comments, and categories into pLog's db tables. 
*
*   Concept by Dario Nuevo (http://www.plogworld.org/forums/viewtopic.php?t=617&highlight=bblog)
*   
*   This plugin is specifically for pLog, while Dario's original code was intended for cross
*   software porting.  This should integrate more smoothly into pLog's admin interface.  We'll 
*   see.
*
*   
*   Notes:
*	When declaring your Profiles, keys must be entered in logical value, as they would by
*	users.  What does this mean?  Five keys are currently being handled:
*
*		"blogs" 
*		"categories"
*		"comments"
*		"posts"
*		"users"
*
*	The order in which you declare them must fit how they would normally be created.  In
*	many of the functions, there will be variable remapping that occurs before the next
*	step may happen.  If not, you'll get one very WRONG imported set of posts/blogs/etc.
*
*	The proper order for defining keys should be:
*		 "users" > "blogs" > "categories" > "posts" > "comments"
*
*	However, skipping steps is possible (bBlog does not support multiple users; we define 
*	the default blog and default user to be 1).  We do not REQUIRE a user to be created, or
*	a blog to be created.  However, if an ID is supplied that points somewhere non-existant,
*	it will be remapped to the logical entry.  
*
*	##TODO## blogId supplied within category, but blog does not not exist: create new user, 
*	         create new blog, create category.  Note that blogId could not exist within a 
*		   post without first being checked over by category.  Currently there is no 
*		   capability to handle this.
*
*
*/ 


	include_once( PLOG_CLASS_PATH."class/plugin/pluginbase.class.php" );
	
	/**
	 * data porter from other blogging software
	 */
	class PluginPort extends PluginBase
	{

		function PluginPort()
		{
			$this->PluginBase();
			
			$this->id = "port";
			$this->description = "Use the Port plugin to import your entries from other softwares (that use MySQL DB).";
			$this->author = "Bradley Liang";
			$this->locales = Array();
			
			$this->init();
		}

		function init()
		{			
		    // register a new admin action, this one will show the main page of the template editor
		    $this->registerAdminAction( "PortConfig"	  , "AdminPluginPortConfigAction" );
		    $this->registerAdminAction( "PortUpdateConfig", "AdminPluginPortUpdateConfigAction");

 		    // add one new menu entry under blogsettings so that users can edit templates
		    $this->addMenuEntry( "/menu/adminSettings/GlobalSettings", "PortConfig", "admin.php?op=PortConfig", "Import Entries", true, false );			
		}

		function process( $eventType, $params )
		{			
			// return the content as it came, as the caller class probably expected us to do
			// something with it...
			return $params;
		}		
	}
?>