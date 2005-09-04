<?php

	include_once( PLOG_CLASS_PATH.'class/view/admin/admintemplatedview.class.php' );
	include_once( PLOG_CLASS_PATH.'class/locale/locales.class.php' );
	include_once( PLOG_CLASS_PATH.'class/template/templatesets/templatesets.class.php' );
	include_once( PLOG_CLASS_PATH.'class/dao/blogstatus.class.php' );
	
    /**
     * \ingroup View
     * @private
     *	
	 * shows the view to edit a blog from the site
	 */
	class AdminEditSiteBlogView extends AdminTemplatedView
	{
		var $_editBlogInfo;
		var $_error;
	
		function AdminEditSiteBlogView( $blogInfo, $editBlogInfo = null )
		{
			// fetch information about the blog we're editing
			if( $editBlogInfo == null )
				$this->_editBlogInfo = $this->getSessionValue( 'editBlogInfo' );
			else
				$this->_editBlogInfo = $editBlogInfo;
			
			// this stuff is a bit weird but I couldn't find a better way to do it!
			if( $this->_editBlogInfo ) {
				$this->AdminTemplatedView( $blogInfo, 'editblog' );
				$this->_error = false;
				$this->setSessionValue( 'editBlogInfo', $this->_editBlogInfo );
				// ...
				// export data to the view
				$this->setValue( 'editblog', $this->_editBlogInfo );
				$this->setValue( 'editblogsettings', $this->_editBlogInfo->getSettings());
				// blog settings...
				$blogTemplateSet = $this->_editBlogInfo->getTemplateSet();
				$this->setValue( 'blogTemplate', $blogTemplateSet->getName());
				$ts = new TemplateSets();
				// get the blog template sets
				$this->setValue( 'templates', $ts->getBlogTemplateSets( $this->_editBlogInfo->getId(), true ));
				// and the list of locale availables
				$this->setValue( 'locales', Locales::getLocales());
				$this->setValue( 'blogStatus', $this->_editBlogInfo->getStatus());
				$this->setValue( 'blogStatusList', BlogStatus::getStatusList());
				$blogSettings = $this->_editBlogInfo->getSettings();
				$this->setValue( 'blogTimeOffset', $blogSettings->getValue( 'time_offset' ));
				$this->setValue( 'blogOwner', $this->_editBlogInfo->getOwner());
				$this->setValue( 'blogName', $this->_editBlogInfo->getBlog());
				$this->setValue( 'blogLocale', $blogSettings->getValue( "locale" ));				
				$this->setValue( 'blogResourcesQuota', $this->_editBlogInfo->getResourcesQuota());
				// get all the users
				$users = new Users();
				$siteUsers = $users->getAllUsers();
				$this->notifyEvent( EVENT_USERS_LOADED, Array( 'users' => &$siteUsers ));
				
				// set the blog users and the available users
				$blogUsers = $users->getBlogUsers( $this->_editBlogInfo->getId(), false );			
				$this->setValue( 'availableusers', $this->filterAvailableUsers( $siteUsers, $blogUsers ));
				$this->setValue( 'blogusers', $blogUsers );
				$this->setValue( 'siteusers', $siteUsers );				
			}
			else {
				$this->AdminTemplatedView( $blogInfo, 'error' );
				$this->setValue( 'message', 'Unexpected error loading blog!' );
				$this->_error = true;
			}
		}
		

        /**
         * Removes all the users in blogUsers from siteUsers and
         * returns the new array.
		 *
		 * @static
         */
        function filterAvailableUsers( $siteUsers, $blogUsers )
        {
        	$resultArray = Array();

            // not the cleanest and fastest solution in the world, tho :(
            $found = false;
            foreach( $siteUsers as $siteUser ) {
            	foreach( $blogUsers as $blogUser ) {
            		if( $blogUser->getId() == $siteUser->getId()) {
                		$found = true;
                        break;
                    }
                    else
                    	$found = false;
                }

                if( !$found ) {
                	array_push( $resultArray, $siteUser );
                    $found = false;
                }
            }

            return $resultArray;
        }
	}
?>