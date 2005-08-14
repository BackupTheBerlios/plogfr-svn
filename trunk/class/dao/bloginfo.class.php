<?php

	include_once( PLOG_CLASS_PATH."class/database/dbobject.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/blogsettings.class.php" );
	include_once( PLOG_CLASS_PATH."class/net/requestgenerator.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/textfilter.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/blogs.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/userpermissions.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/users.class.php" );
	
	/**
	 * \ingroup DAO
	 *
	 * This is the representation of a blog. It contains all the information we need to know,
     * This is the representation of a blog. It contains all the information we need to know,
     * such as the name of the blog, the owner, description, etc.
     */
    class BlogInfo extends DbObject
    {

        var $_blog;
        var $_owner; // owner id
        var $_about;
        var $_settings;
        var $_id;

        // More optional information for each blog. Only used when we load this data
        var $_createDate;
        var $_updateDate;
        var $_totalPosts;
        var $_totalComments;
        var $_totalTrackbacks;
        var $_viewedTotal;
        var $_ownerInfo;
        var $_usersInfo;
        var $_createTimestamp;
        var $_updateTimestamp;
        var $_mangledBlog;

        // the TemplateSet representing the template set used by the blog
        var $_templateSet;

        // the Locale object
        var $_locale;

        // the status
        var $_status;

        function BlogInfo( $blog, $owner, $about, $settings, $id = -1 )
        {
            $this->setBlog( $blog );
            $this->_owner = $owner;
            $this->_about = $about;
            $this->_settings = $settings;
            if( $this->_settings == "" )
                $this->_settings = new BlogSettings();

            $this->_id = $id;

            $this->_createDate = "";
            $this->_updateDate = "";
            $this->_totalPosts = 0;
            $this->_viewedTotal = 0;
            $this->_usersInfo = array();
            $this->_createTimestamp = "";
            $this->_updateTimestamp = "";

            // no template set loaded
            $this->_templateSet = null;

            // default status is active
            $this->_status = BLOG_STATUS_ACTIVE;

            // values that are loaded on demand
            $this->_updateTimestamp = null;
            $this->_viewedTotal = null;
            $this->_totalPosts = null;
            $this->_createTimestamp = null;
            $this->_ownerInfo = null;
            
            $this->_mangledBlog = Textfilter::urlize( $this->getBlog());
        }

        /**
         * Returns the short name of the blog.
         *
         * @return A string with the short name of the blog.
         */
        function getBlog()
        {
            return $this->_blog;
        }


        /**
         * Returns the identifier of the user who owns this journal.
         *
         * @return An integer value representing the identifier of the user who owns this blog.
         */
        function getOwner()
        {
            return $this->_owner;
        }

        /**
         * Returns a longer and descriptive text about this blog. It can also be empty since it is
         * configurable from within the "Blog Settings" in the administration interface.
         *
         * @return A string containing the more descriptive text about the journal.
         */
        function getAbout()
        {
            return $this->_about;
        }

        /**
         * Returns a BlogSettings object with information about the settings of the journal.
         * @private
         */
        function getSettings()
        {
            return $this->_settings;
        }

        /**
         * returns a key from the blog settings
         */
        function getValue( $value )
        {
            if( !$this->_settings )
                return "";

            return $this->_settings->getValue( $value );
        }

        /**
         * returns a key from the blog settings
         */
        function setValue( $key, $value )
        {
            if( !$this->_settings )
                return true;

            $this->_settings->setValue( $key, $value );

            return true;
        }

        /**
         * implemented from DbObject. Merges a list of properties with the current settings
         *
         * @param properties
         */
        function addProperties( $properties )
        {
            return $this->setProperties( $properties );
        }

        /**
         * adds an array of pairs (key,value) to the blog settings
         */
        function setProperties( $properties )
        {
            // nothing to do if we don't get an array as parameters
            if( !is_array($properties))
                return true;

            foreach( $properties as $key => $value ) {
                $this->setValue( $key, $value );
            }

            return true;
        }

         /**
         */
        function getCreateDateObject( )
        {
            // if it hasn't been loaded yet...
            if( $this->_createTimestamp == null ) {
                $blogs = new Blogs();
                $this->setCreateDate( $blogs->getBlogCreateDate( $this->getId()));
            }

            return $this->_createTimestamp;
        }

        /**
         */
        function getUpdateDateObject( )
        {
            if( $this->_updateTimestamp == null ) {
                $blogs = new Blogs();
                $this->setUpdateDate( $blogs->getBlogUpdateDate( $this->getId()));
            }

            return $this->_updateTimestamp;
        }

        /**
         */
        function getTotalPosts( )
        {
            if( $this->_totalPosts == null ) {
                $blogs = new Blogs();
                $this->_totalPosts = $blogs->getBlogTotalPosts( $this->getId());
            }

            return $this->_totalPosts;
        }

        /**
         */
        function getTotalComments( )
        {
            if( $this->_totalComments == null ) {
                $blogs = new Blogs();
                $this->_totalComments = $blogs->getBlogTotalComments( $this->getId());
            }

            return $this->_totalComments;
        }

        /**
         */
        function getTotalTrackbacks( )
        {
            if( $this->_totalTrackbacks == null ) {
                $blogs = new Blogs();
                $this->_totalTrackbacks = $blogs->getBlogTotalTrackbacks( $this->getId());
            }

            return $this->_totalTrackbacks;
        }

        /**
         */
        function getViewedTotal( )
        {
            if( $this->_viewedTotal == null ) {
                $blogs = new Blogs();
                $this->_viewedTotal = $blogs->getBlogViewedTotal( $this->getId());
            }

            return $this->_viewedTotal;
        }

        /**
         * Gets information about the owner of this blog
         * @return return a UserInfo object which contains much more info about the owner of the blog
         */
        function getOwnerInfo()
        {
            if( $this->_ownerInfo == null ) {
                $users = new Users();
                $ownerInfo = $users->getUserInfoFromId( $this->_owner );
                $this->setOwnerInfo( $ownerInfo );
            }

            return $this->_ownerInfo;
        }

        /**
         * @private
         */
        function getUsersInfo( )
        {
            if( $this->_usersInfo == null ) {
                $userpermissions = new UserPermissions();
                $blogUsers = $userpermissions->getBlogUsers( $this->getId());
                $this->setUsersInfo( $blogUsers );
            }

            return $this->_usersInfo;
        }

        /**
         * Returns the identifier of this blog.
         *
         * @return An integer value with the identifier of this blog.
         */
        function getId()
        {
            return $this->_id;
        }

        /**
         * @private
         */
        function setBlog( $blog )
        {
            $tf = new Textfilter();
            $this->_blog = $tf->filterAllHTML($blog);
        }

        /**
         * @param owner id
         * @private
         */
        function setOwner( $owner )
        {
            $this->_owner = $owner;
        }

        /**
         * @private
         */
        function setAbout( $about )
        {
            $this->_about = $about;
        }

        /**
         * @private
         */
        function setSettings( $settings )
        {
            $this->_settings = $settings;
        }

        /**
         * @private
         */
        function setCreateDate( $newCreateDate )
        {
            $this->_createDate = $newCreateDate;

            $this->_createTimestamp = new Timestamp( $newCreateDate );
        }

        /**
         * @private
         */
        function setUpdateDate( $newUpdateDate )
        {
            $this->_updateDate = $newUpdateDate;

            $this->_updateTimestamp = new Timestamp( $newUpdateDate );
        }

        /**
         * @private
         */
        function setTotalPosts( $newTotalPosts )
        {
            $this->_totalPosts = $newTotalPosts;
        }

        /**
         * @private
         */
        function setViewedTotal( $newViewedTotal )
        {
            $this->_viewedTotal = $newViewedTotal;
        }

        /**
         * @private
         */
        function setOwnerInfo( $newOwnerInfo )
        {
            $this->_ownerInfo = $newOwnerInfo;
        }

        /**
         * @private
         */
        function setUsersInfo( $newUsersInfo )
        {
            $this->_usersInfo = $newUsersInfo;
        }

        /**
         * @private
         */
        function setId( $id )
        {
            $this->_id = $id;
        }

        /**
         * returns the name of the template used by this blog
         *
         * @param the name of the template set used by this blog
         */
        function getTemplate()
        {
            return $this->_settings->getValue( "template");
        }

        /**
         * sets the template name
         *
         * @param template The name of the template that we'd like to use
         * @return always true
         */
        function setTemplate( $template )
        {
            // save the template in the settings
            $this->_settings->setValue( "template", $template );
            // and reset the TemplateSet object so that it gets reloaded next time
            // somebody uses BlogInfo::getTemplateSet
            $this->_templateSet = null;

            return true;
        }

        /**
         * this method is some kind of a shortcut for a very common operation: obtaining the
         * correct RequestGenerator object so that we can generate urls based on the information
         * from this blog. This is very handy for example in the summary page where we have to
         * generate lots of different urls for lots of different blogs.
         *
         * @return A RequestGenerator object
         */
        function getBlogRequestGenerator()
        {
            return RequestGenerator::getRequestGenerator( $this );
        }

        /**
         * returns a TemplateSet object with the information about the template used
         * by the blog
         *
         * @return a TemplateSet object
         */
        function getTemplateSet()
        {
            // since including these files is quite a costly operation, let's do it only
            // whenever we have to instead of always and always always... :)
            if( $this->_templateSet == null ) {
                include_once( PLOG_CLASS_PATH."class/template/templatesets/templatesets.class.php" );
                $ts = new TemplateSets();
                $this->_templateSet = $ts->getTemplateSet( $this->getTemplate(), $this->getId());
                if( $this->_templateSet == null ) {
                    // what if the admin removes the current template set used by this blog???
                    $this->_templateSet = $ts->getDefaultTemplateSet();
                }
            }

            return $this->_templateSet;
        }

        /**
         * changes the template set used by the blog
         *
         * @param templateSet A TemplateSet object
         * @return always true
         */
        function setTemplateSet( $templateSet )
        {
            $this->setTemplate( $templateSet->getName());

            return true;
        }

        /**
         * returns the right locale object for the blog
         *
         * @param a Locale object
         */
        function &getLocale()
        {
            if( $this->_locale == null ) {
                include_once( PLOG_CLASS_PATH."class/locale/locales.class.php" );
                $this->_locale =& Locales::getLocale( $this->_settings->getValue( "locale" ), "en_UK" );
            }

            return $this->_locale;
        }

        /**
         * sets the new locale for the blog
         *
         * @param a valid Locale object
         * @return Always true
         */
        function setLocale( $locale )
        {
            $this->_locale = $locale;
            $this->_settings->setValue( "locale", $locale->getLocaleCode());

            return true;
        }

        /**
         * returns the status of the blog
         *
         * @return the current status of the blog
         */
        function getStatus()
        {
            return $this->_status;
        }

        /**
         * sets the current status of the blog
         *
         * @param status
         * @return always true
         */
        function setStatus( $status )
        {
            $this->_status = $status;

            return true;
        }

        /**
         * returns the quota for this blog, or the value of the global quota
         * for blogs in case this blog has no quota assigned
         *
         * @return the resources quota
         */
        function getResourcesQuota()
        {
            $quota = $this->_settings->getValue( "resources_quota" );

            // if there is no quota for this blog, then fetch it from the global
            // settings
            if( $quota == "" ) {
                $config =& Config::getConfig();
                $quota = $config->getValue( "resources_quota" );
            }

            return $quota;
        }

        /**
         * sets the quota
         *
         * @param quota
         */
        function setResourcesQuota( $quota )
        {
            $this->_settings->setValue( "resources_quota", $quota );

            return true;
        }
        
        /**
         * @private
         *
         * Special method used for serialization where we avoid saving the Locale object to the
         * session, which makes session size increase almost to 70kb in some situations! Instead of telling
         * php not to serialize "_locale", we just set the reference to null and tell php to save everything. The
         * Locale will need to be loaded later on but that's just fine.
         */
        function __sleep()
        {
	        $this->_locale = null;
	        return( array_keys( get_object_vars( $this )));
        }
        
        function setMangledBlog( $mangledBlog )
        {
	        $this->_mangledBlog = $mangledBlog;
        }
        
        function getMangledBlog()
        {
	        // fill in the field if it hasn't been filled yet
	        if( $this->_mangledBlog === null )
	        	$this->_mangledBlog = Textfilter::urlize( $this->getBlog());
	        	
	    	return( $this->_mangledBlog );   
        }
    }
?>
