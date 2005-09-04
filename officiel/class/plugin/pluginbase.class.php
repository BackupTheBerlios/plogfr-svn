<?php

    /**
     * \defgroup Plugin
     *
     * There is better documentation concerning plugins in the wiki:
     *
     * http://wiki.plogworld.net/index.php/PLog_1.0/Plugins
     *
     * The documentation here is only to be used as a reference for the methods
     * available in this class.
     */

	include_once( PLOG_CLASS_PATH."class/object/object.class.php" );
    include_once( PLOG_CLASS_PATH."class/config/config.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/blogs.class.php" );
    include_once( PLOG_CLASS_PATH."class/controller/admincontroller.class.php" );
    include_once( PLOG_CLASS_PATH."class/controller/blogcontroller.class.php" );
    include_once( PLOG_CLASS_PATH."class/action/blogaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/security/pipeline.class.php" );
    include_once( PLOG_CLASS_PATH."class/security/pipelinerequest.class.php" );
    include_once( PLOG_CLASS_PATH."class/security/pipelineresult.class.php" );
	include_once( PLOG_CLASS_PATH."class/template/menu/menu.class.php" );
	include_once( PLOG_CLASS_PATH."class/plugin/pluginbase.class.php" );

    /**
     * \ingroup Plugin
     *
     * This is the base class from which every plugin object should inherit.
     */
    class PluginBase extends Object 
	{

        /**
         * This should be filled by the objects that extend this class to provide
         * some help on how to use the plugin.
         */
        var $desc = "This plugin has no description";

        /**
         * This should be filled with the author of the plugin.
         */
        var $author = "This plugin has no author";

        /**
         * This should not be modified as it is set by the plugin manager.
         * @private
         */
        var $id = "";

        /**
         * Set this to the html code that you would like to display when
         * configuring this plugin.
         */
        var $configMessage = "No configuration options available";

        /**
         * Error message, if any, that happened when configuring the plugin.
         */
        var $errorMessage = "No error message";

        /**
         * This contains information about the blog that is currently executing or configuring
         * this plugin.
         * @see BlogInfo
         */
        var $blogInfo;

        /**
         * This one contains the blog specific settings
         * @see BlogSettings
         */
        var $blogSettings;

    	/**
	     * User who is running the plugin.
	     */
	     var $userInfo;
	     
	   /**
	    * folder where this plugins is stored. We shouldn't need to mess
	    * around with this one, as it is automatically filled by the
	    * plugin manager when the plugin loads
	    */
	   var $pluginFolder;

    	/**
         * Constructor. Feel free to do here whatever you need to.
         */
    	function PluginBase()
        {
        	$this->Object();
        }

        /**
         * Returns a string with some information about the plugin.
         *
         * @return Returns a string describing the plugin.
         */
        function getDescription()
        {
        	return $this->desc;
        }

        /**
         * Returns the string describing the author of this plugin.
         *
         * @return The author of the plugin.
         */
        function getAuthor()
        {
        	return $this->author;
        }

        /**
         * Returns the identifier of the plugin, the name which can be used
         * in templates.
         *
         * @return The plugin identifier.
         */
        function getId()
        {
        	return $this->id;
        }

        /**
         * This function is called only once when the plugin is registered. Please use this method
		 * in case your plugin needs to perform some initializations before it is used, specially
		 * if the initialization process requires access to the plugin/blog settings (because the
		 * BlogInfo and UserInfo objects are not available in the constructor *yet* so this method
		 * will be called once they are available)
         *
         * @return Nothing.
         */
        function register()
        {
			return true;
        }

        /**
         * @private
         */
        function setBlogInfo( &$blogInfo )
        {
        	$this->blogInfo = $blogInfo;
			if( $this->blogInfo != null ) 
				$this->blogSettings = $blogInfo->getSettings();
        }

        /**
         * @private
         */
        function setUserInfo( &$userInfo )
        {
			$this->userInfo = $userInfo;
        }

        /**
         * Saves the blog settings back to the database so that they are permanent. This function
         * can be called anytime but it is specially useful from inside the config() method,
         * when the user has just configured something in the admin interface
         *
         * @return Returns true if the settings were saved ok or false otherwise.
         */
        function updateBlogSettings()
        {
        	$blogs = new Blogs();

            $result = $blogs->updateBlogSettings( $this->blogInfo->getId(), $this->blogSettings);

            return $result;
        }
        
		/**
		 * Changes the folder where plugins are loaded from
		 *
		 * @param folder The folder where plugins are stored
		 */
        function setPluginFolder( $folder ) 
        {
            $this->pluginFolder = $folder;
        }
        
		/**
		 * Returns the folder where plugins are located, ./plugins by default
		 *
		 * @return A string
		 */
        function getPluginFolder()
        {
            return $this->pluginFolder;
        }
        
        /**
         * registers an admin action
         *
         * @param key
         * @param actionClass
         * @return true         
         */
        function registerAdminAction( $key, $actionClass )
        {
            AdminController::registerAction( $key, $actionClass );
            
            return true;
        }
        
        /**
         * register a blog action
         *
         * @param key
         * @param actionClass
         * @return true
         */
        function registerBlogAction( $key, $actionClass )
        {
            BlogController::registerAction( $key, $actionClass );
            
            return true;
        }
        
        /**
         * registers a filter for the pipeline
         *
         * @param filterName Name of the class that implements the pipeline filter. It must implement the
         * PipelineFilter interface.
         * @return true
         */
        function registerFilter( $filterName )
        {
            Pipeline::registerFilter( $filterName );
            
            return true;
        }
		
		/**
		 * Adds a new entry to the admin menu, in case the plugin is registering anything there
		 *
         * @param path The XPath to the option
         * @param id The identifier of the new option
         * @param localeId
         * @param url The url where this new option is pointing to
         * @param blogOwner Whether this new option can only be used by blog owners
         * @param siteAdmin Whether this new option can only be used by site admins		 
		 * @see Menu::addEntry
		 */
		function addMenuEntry( $path, $id, $url, $localeId = null, $blogOwner = false, $siteAdmin = false )
		{
			// get hold of the menu structure
			$menu =& Menu::getMenu();
			// and create a valid menuEntry object
			$menuEntry = new MenuEntry( $id,
			                            Array( 
										    "url" => $url, 
											"localeId" => $localeId,
											"blogOwner" => (int)$blogOwner,
											"siteAdmin" => (int)$siteAdmin ));
			// add the entry and return the result
			return $menu->addEntry( $path, $menuEntry );
		}
		
		/**
		 * registers an event plugin
		 *
		 * @param eventType
		 * @param eventClass
		 * @return True if successful or false otherwise
		 */
		function registerNotification( $eventType )
		{
			// get a reference to the current plugin manager object
			$pm =& PluginManager::getPluginManager();
			return $pm->registerNotification( $eventType, $this );
		}
		
		/**
		 * allows the plugin to throw any event, be it one of the core/standard ones
		 * or a new custom one
		 *
		 * @see PluginManager::notifyEvent
		 * @param eventType the event code
		 * @param params an associative array with the even parameters, if any
		 * @return true
		 */
		function notifyEvent( $eventType, $params = Array())
		{
			// get a handle to the plugin manager and throw the event with its parameters
			$pm =& PluginManager::getPluginManager();
			return( $pm->notifyEvent( $eventType, $params ));
		}
		
		/**
		 * this method should be implemented by plugins, and will tell the plugin manager 
		 * which configuration settings are stored in the database by this plugin. This will be
		 * used later on, in case users want to completely remove any trace of this plugin
		 * configuration.
		 *
		 * It is not mandatory to do so but it would help.
		 *
		 * @return An array of strings containing the configuration keys that are saved in the
		 * database.
		 */
		function getPluginConfigurationKeys()
		{
			return Array();
		}
		
		/**
		 * Tells the plugin manager which custom tables have been created by this plugin. It will
		 * help when making a back-up of the database structure, since the back-up feature will be able
		 * to back-up the plugins' database tables too.
		 *
		 * @return An array of string with the name of the database tables used by the plugin.
		 */
		function getPluginDatabaseTables()
		{
			return Array();
		}
		
		/**
		 * returns true whether the plugin has the given locale
		 *
		 * @param localeCode the locale that we'd like to check
		 * @return whether the plugin provides the requested locale
		 */
		function hasLocale( $localeCode )
		{
		  $path = "plugins/".$this->getId()."/locale/locale_".$localeCode.".php";
		  
		  return( File::isReadable( $path ));
		}
		
		/**
		 * this method must be implemented by plugins that wish to "listen" for events
		 * It will throw an Exception by default, since it means that the plugin registered for
		 * an event but no implementation of the process() method is provided
		 *
		 * @param eventType The event identifier.
		 * @param params An array with the parameters thrown by the event. The parameters are 
		 * dependant on the event.
		 */
        function process( $eventType, $params )
        {
            throw( new Exception( "Plugin ".$this->id." registered for event $eventType but did not provide its own process() method!" ));
            die();
        }
    }
?>
