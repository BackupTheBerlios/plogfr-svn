<?php

    include_once( PLOG_CLASS_PATH."class/dao/model.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/bloginfo.class.php" );
    include_once( PLOG_CLASS_PATH."class/config/config.class.php" );
    include_once( PLOG_CLASS_PATH."class/net/xmlrpcclient.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articles.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/mylinks.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/mylinkscategories.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/bayesianfilterinfos.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/users.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/userpermissions.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/textfilter.class.php" );
    include_once( PLOG_CLASS_PATH."class/file/file.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/blogstatus.class.php" );

    /**
	 * \ingroup DAO
     * Model for the Blogs
     */
    class Blogs extends Model
    {

        /**
         * Returns information about a blog.
         *
         * @param blogId Identifier of the blog we want to get information
         * @param extendedInfo
         * @return Returns a BlogInfo object containing information about the blog
         */
        function getBlogInfo( $blogId, $extendedInfo = false )
        {
            $query = "SELECT * FROM ".$this->getPrefix()."blogs WHERE id = '".Db::qstr($blogId)."'";

            return $this->_getBlogInfoFromQuery( $query, $extendedInfo );
        }

        /**
         * Returns information about a blog.
         *
         * @param blogName Identifier of the blog we want to get information
         * @return Returns a BlogInfo object containing information about the blog
         */
        function getBlogInfoByName( $blogName, $extendedInfo = false )
        {
            $query = "SELECT * FROM ".$this->getPrefix()."blogs WHERE mangled_blog = '".Db::qstr($blogName)."';";

            //$this->_db->debug=true;

            return $this->_getBlogInfoFromQuery( $query, $extendedInfo );
        }

        /**
         * @private
         */
        function _getBlogInfoFromQuery( $query, $extendedInfo = false )
        {
            $result = $this->Execute( $query );

            if( !$result )
                return false;

            if( $result->RecordCount() == 0 )
                return false;

            $row = $result->FetchRow( $result );
            $blogInfo = $this->_fillBlogInformation( $row, $extendedInfo );
            $blogSettings = $this->getBlogSettingsFromField( $row["settings"] );
            $blogInfo->setSettings( $blogSettings );
            
            $result->Close();            

            return $blogInfo;
        }

        /**
         * Private function.
         *
         * @private.
         */
        function _fillBlogInformation( $query_result, $extended = false )
        {
            $blogInfo = new BlogInfo( stripslashes($query_result["blog"]),
                                      $query_result["owner_id"],
                                      stripslashes($query_result["about"]),
                                      unserialize($query_result["settings"]),
                                      $query_result["id"] );

            // load information about the blog owner
            $blogInfo->setStatus( $query_result["status"] );
            $blogInfo->setMangledBlog( $query_result["mangled_blog"] );

            return $blogInfo;
        }

        /**
         * Retrieves the first article date timestamp
         *
         * @param blogId The identifier of the blog from which we'd like to fetch the settings
         * @return Returns an Timestamp with the first article date
         */
        function getBlogCreateDate( $blogId )
        {
            $query  = "SELECT date FROM ".$this->getPrefix()."articles WHERE blog_id = ".$blogId. " ORDER BY date ASC LIMIT 0,1" ;

            $result = $this->_db->Execute( $query );

            if (!$result)
                return false;

            $row = $result->FetchRow();

            if (!isset($row["date"]))
                return false;

            return $row["date"];
        }

        /**
         * Retrieves the last article date timestamp
         *
         * @param blogId The identifier of the blog from which we'd like to fetch the settings
         * @return Returns an Timestamp with the last article date
         */
        function getBlogUpdateDate( $blogId )
        {
            $query  = "SELECT date FROM ".$this->getPrefix()."articles WHERE blog_id = ".$blogId. " ORDER BY date DESC LIMIT 0,1" ;
            $result = $this->_db->Execute( $query );

            if (!$result)
                return false;

            $row = $result->FetchRow();

            if (!isset($row["date"]))
                return false;

            return $row["date"];
        }

        /**
         * Retrieves the total number of reads of all articles in that blog
         *
         * @param blogId The identifier of the blog from which we'd like to fetch the settings
         * @return Returns an Timestamp with the last article date
         */
        function getBlogViewedTotal( $blogId )
        {
            $query  = "SELECT SUM(num_reads) as total FROM ".$this->getPrefix()."articles WHERE blog_id = ".$blogId;

            $result = $this->_db->Execute( $query );

            if (!$result)
                return false;

            $row = $result->FetchRow();

            if (!isset($row["total"]))
                return false;

            return $row["total"];
        }

        /**
         * Retrieves the total number of posts in a blog
         *
         * @param blogId The identifier of the blog from which we'd like to fetch the settings
         * @return Returns an integer with the number of posts
         */
        function getBlogTotalPosts( $blogId )
        {
            $query  = "SELECT COUNT(*) as total FROM ".$this->getPrefix()."articles WHERE blog_id = $blogId AND status = ".POST_STATUS_PUBLISHED;
            $result = $this->_db->Execute( $query );

            if (!$result)
                return false;

            $row = $result->FetchRow();

            if (!isset($row["total"]))
                return false;

            $posts = intval($row["total"]);
            
            $result->Close();
            
            return( $posts );            
        }

        /**
         * Retrieves the total number of comments in a blog
         *
         * @param blogId The identifier of the blog from which we'd like to fetch the settings
         * @return Returns an integer with the number of comments
         */
        function getBlogTotalComments( $blogId )
        {
            $query  = "SELECT COUNT(*) as total FROM ".$this->getPrefix()."articles_comments AS c, ".$this->getPrefix()."articles AS a WHERE ((a.blog_id = $blogId) AND (a.id = c.article_id)) AND c.status = ".COMMENT_STATUS_NONSPAM;
            $result = $this->_db->Execute( $query );

            if (!$result)
                return false;

            $row = $result->FetchRow();

            if (!isset($row["total"]))
                return false;

            $comments = intval($row["total"]);
            
            $result->Close();
            
            return( $comments );                        
        }

        /**
         * Retrieves the total number of trackbacks in a blog
         *
         * @param blogId The identifier of the blog from which we'd like to fetch the settings
         * @return Returns an integer with the number of trackbacks
         */
        function getBlogTotalTrackbacks( $blogId )
        {
            $query  = "SELECT COUNT(*) as total FROM ".$this->getPrefix()."trackbacks AS t, ".$this->getPrefix()."articles AS a WHERE ((a.blog_id = $blogId) AND (a.id = t.article_id))";
            $result = $this->_db->Execute( $query );

            if (!$result)
                return false;

            $row = $result->FetchRow();

            if (!isset($row["total"]))
                return false;

            return intval($row["total"]);
        }

        /**
         * Retrieves the blog settings
         *
         * @param settingsField The contents of the blog_settings field from the database
         * @return Returns a BlogSettings object with the settings for the blog
         */
        function getBlogSettingsFromField( $settingsField )
        {
            if( $settingsField == "" || $settingsField == null ) {
                $settings = new BlogSettings();
            }
            else {
                $settings = unserialize( $settingsField );
                if( !is_object($settings)) {
                    // if the BlogSettings object is not valid, return a valid one
                    // with some of the default settings, so that at least
                    // the blog will keep working!
                    $settings = new BlogSettings();
                }
            }

            return $settings;
        }

        /**
         * Retrieves the blog settings given its id
         *
         * @param blogId The identifier of the blog from which we'd like to fetch the settings
         * @return A BlogSettings object containing the settings, or 'false' if error.
         */
        function getBlogSettings( $blogId )
        {
            $query = "SELECT settings FROM ".$this->getPrefix()."blogs WHERE id = ".$blogId;

            $result = $this->Execute( $query );

            $row = $result->FetchRow();
            
            $result->Close();            

            return $this->getBlogSettingsFromField( $row["settings"] );
        }

        /**
         * Updates the configuration of a blog
         *
         * @param blogId Blog identifier
         * @param blogInfo A BlogInfo object containing all the information of the blog
         * @param return Returns true if everything ok or false otherwise
         */
        function updateBlog( $blogId, &$blogInfo )
        {
	        // ititalize iterator to get unique mangled blog names
            $i = 0;

            // check if there already is a blog with the same mangled name
            while( ($blog = $this->getBlogInfoByName( $blogInfo->getMangledBlog() )) )
            {
	            $i++;

                // and if so, assign a new one but making sure that we are not actually
	            // seeing ourselves!
	            if( $blog->getID() != $blogInfo->getID()) {
	        		
                    // if we already tried with blogname+"i" we have to strip "i" before adding it again!
                    $newMangledName = ( ($i > 1) ? substr( $blogInfo->getMangledBlog(), 0, strlen( $blogInfo->getMangledBlog() ) - strlen($i-1) ).$i : $blogInfo->getMangledBlog().$i );	    
	        		$blogInfo->setMangledBlog( $newMangledName );
        		} else
        		{
                    // break out if we are seeing ourselves, no need to change the mangled name!
                    break;
        		}

            }	        
	        
            $query = "UPDATE ".$this->getPrefix()."blogs SET
                     blog = '".Db::qstr($blogInfo->getBlog()).
                     "', about = '".Db::qstr($blogInfo->getAbout()).
                     "', settings = '".serialize($blogInfo->getSettings()).
                     "', owner_id = ".$blogInfo->getOwner().                     
                     ", mangled_blog = '".$blogInfo->getMangledBlog().
                     "', status = '".Db::qstr($blogInfo->getStatus()).
                     "' WHERE id = '".Db::qstr($blogId)."';";

            $result = $this->Execute( $query );

            return $result;
        }

        /**
         * Updates the settings of a blog
         *
         * @param blogId The blog we want to update
         * @param blogSettings the BlogSettings object that we would like to update
         * @return 'true' if all correct. 'false' otherwise.
         */
        function updateBlogSettings( $blogId, $blogSettings )
        {
            $query = "UPDATE ".$this->getPrefix()."blogs SET settings = '".serialize($blogSettings)."' WHERE id = ".$blogId;

            $result = $this->Execute( $query );

            return $result;
        }

        /**
         * Sends a weblogsUpdate.ping xmlrpc call to notifiy of changes in this blog
         *
         * @param blogInfo The BlogInfo object containing information about the blog
         * @return Returns true if successful or false otherwise.
         */
        function updateNotify( $blogInfo )
        {
            // if this feature is not enabled, we quit
            $config =& Config::getConfig();
            if( !$config->getValue( "xmlrpc_ping_enabled" ))
                return;

            // get the array which contains the hosts
            $hosts = $config->getValue( "xmlrpc_ping_hosts" );

            // if it is not an array, quit
            if( !is_array($hosts))
                return;

            // if no hosts, we can quit too
            if( empty($hosts))
                return;

            // otherwise, we continue
            $xmlrpcPingResult = Array();
            $rg =& RequestGenerator::getRequestGenerator( $blogInfo );
            $blogLink = $rg->blogLink();
            foreach( $hosts as $host ) {
                $client = new XmlRpcClient( $host );
                $result = $client->ping( $blogInfo->getBlog(), $blogLink);
                //print("result = ".$result. "is Error = ".$client->isError()." message: ".$client->getErrorMessage()."<br/>");
                //$xmlrpcPingResult[$result["host"]
                $xmlrpcPingResult=array_merge($xmlrpcPingResult, $result);
            }

            return $xmlrpcPingResult;
        }

        /**
         * Adds a new blog to the database.
         *
         * @param blog A BlogInfo object with the necessary information
         * @see BlogInfo
         * @return False if unsuccessful or true otherwise. It will also set the database id of the
         * parameter passed by reference in case it is successful.
         */
        function addBlog( &$blog )
        {
	        // ititalize iterator to get unique mangled blog names
            $i = 0;

            // check if there already is a blog with the same mangled name
            while( $this->getBlogInfoByName( $blog->getMangledBlog() ) )
            {
	            $i++;
       
                // and if so, assign a new one (if we already tried with blogname+"i" we have to strip "i" before adding it again!)
                $newMangledName = ( ($i > 1) ? substr( $blog->getMangledBlog(), 0, strlen( $blog->getMangledBlog() )- strlen($i-1) ).$i : $blog->getMangledBlog().$i );	    
	            $blog->setMangledBlog( $newMangledName );

            }


            $blogSettings = $blog->getSettings();
            if( !$blogSettings )
                $blogSettings = new BlogSettings();                

            $query = "INSERT INTO ".$this->getPrefix()."blogs (blog,owner_id,about,settings,mangled_blog,status)
                     VALUES ('".Db::qstr($blog->getBlog())."',".
                     $blog->getOwner().",'".
                     Db::qstr($blog->getAbout())."', '".
                     Db::qstr(serialize($blogSettings))."', '".                     
                     $blog->getMangledBlog()."', '".
                     Db::qstr($blog->getStatus())."')";

            $result = $this->Execute( $query );

            if( !$result )
                return false;


            $blogId = $this->_db->Insert_ID();

            $blog->setId( $blogId );

            // create the row for the bayesian filter info
            $bayesianFilterInfo = new BayesianFilterInfos();
            $bayesianFilterInfo->insert( $blogId );

            // and return the blog identifier
            return $blogId;
        }

        /**
         * Returns all the blogs defined for the site in an array, sorted by its
         * blog identifier.
         *
         * @param page
         * @param itemsPerPage
         *
         * @return Returns an array with all the blogs defined for this site. The array
         * is sorted by the blog identifier, so that $blogs[$blogId] will give us the information
         * of the blog with $blogId as its identifier.
         */
        function getAllBlogs( $status = BLOG_STATUS_ALL, $page = -1, $itemsPerPage = DEFAULT_ITEMS_PER_PAGE )
        {
            if( $status != BLOG_STATUS_ALL )
                $where = "WHERE status = '".Db::qstr($status)."'";

            $query = "SELECT * FROM ".$this->getPrefix()."blogs $where ORDER BY blog $limits";

            $result = $this->Execute( $query, $page, $itemsPerPage );

            if( !$result )
                return false;

            $blogs = Array();
            while( $row = $result->FetchRow()) {
                $blog = $this->_fillBlogInformation( $row, true );
                $blogs[$blog->getId()] = $blog;
            }
            
            $result->Close();            

            return $blogs;
       }

       /**
        * returns only an array with all the blog ids
        *
        * @return an array with blog ids
        */
       function getAllBlogIds()
       {
            $query = "SELECT id FROM ".$this->getPrefix()."blogs";

            $result = $this->Execute( $query );
            if( !$result )
                return Array();

            $blogIds = Array();
            while( $row = $result->FetchRow()) {
                $blogIds[] = $row['id'];
            }
            
            $result->Close();
                        
            return $blogIds;
       }

       /**
        * returns the total number of blogs in the site
        *
        * @return The number of blogs
        */
       function getNumBlogs( $status = BLOG_STATUS_ALL )
       {
            $prefix = $this->getPrefix();
            $table = "{$prefix}blogs";
            if( $status != BLOG_STATUS_ALL )
                $cond = "status = '".Db::qstr($status)."'";

            return( $this->getNumItems( $table, $cond ));
       }

       /**
        * Removes a blog from the database. It also removes all its posts, its posts categories
        * its links, its links categories, its trackbacks and its comments
        *
        * @param blogId the id of the blog we'd like to delete
        */
       function deleteBlog( $blogId )
       {
            // first of all, delete the posts
            $articles = new Articles();
            $articles->deleteBlogPosts( $blogId );

            // next is to remove the article categories
            $articleCategories = new ArticleCategories();
            $articleCategories->deleteBlogCategories( $blogId );

            // next, all the links and links categories
            $myLinks = new MyLinks();
            $myLinks->deleteBlogMyLinks( $blogId );
            $myLinksCategories = new MyLinksCategories();
            $myLinksCategories->deleteBlogMyLinksCategories( $blogId );

            // the permissions for the blog
            $perms = new UserPermissions();
            $perms->revokeBlogPermissions( $blogId );

            // and finally, delete the blog
            $query = "DELETE FROM ".$this->getPrefix()."blogs WHERE id = $blogId";

            $result = $this->Execute( $query );

            return $result;
       }

        /**
         * disables a blog
         *
         * @param blogId
         */
        function disableBlog( $blogId )
        {
                $query = "UPDATE ".$this->getPrefix()."blogs
                          SET status = '".BLOG_STATUS_DISABLED."'
                          WHERE id = '".Db::qstr($blogId)."'";

                $result = $this->Execute( $query );

                if( !$result )
                    return false;

                if( $this->_db->Affected_Rows() == 0 )
                    return false;

                return true;
        }
    }
?>