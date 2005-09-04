<?php

	include_once( PLOG_CLASS_PATH."class/summary/view/summarycachedview.class.php" );
    include_once( PLOG_CLASS_PATH."class/summary/dao/summarystats.class.php" );	
    include_once( PLOG_CLASS_PATH."class/dao/users.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/pager/pager.class.php" );
    include_once( PLOG_CLASS_PATH."class/config/config.class.php" );
	
	/**
	 * shows a paged list of users
	 */
	class SummaryUserListView extends SummaryCachedView
	{
		var $_numUsers;
		var $_numUsersPerPage;
	
		function SummaryUserListView( $data = Array())
		{
			// get the page id
			$this->_page = $this->getCurrentPageFromRequest();		
			
			// and initialize the cached view
			$this->SummaryCachedView( "userlist", $data );
			
			// items per page
            $config =& Config::getConfig();
			$this->_numUsersPerPage = $config->getValue( "summary_blogs_per_page", SUMMARY_DEFAULT_ITEMS_PER_PAGE );

		}
		
		function render()
		{
			// do nothing if the contents of our view are cached
			if( $this->isCached()) {
				parent::render();
				return true;
			}
			
			// get the data itself
			$users = new Users();
            $siteUsers = $users->getAllUsers( USER_STATUS_ACTIVE, true, $this->_page, $this->_numUsersPerPage );
			$numUsers = $users->getNumUsers( USER_STATUS_ACTIVE );
			
            if( !$siteUsers ) {
                // if there was an error, show the error view
				$siteUsers = Array();
            }
			
			// calculate the links to the different pages
			$pager = new Pager( "?op=UserList&amp;page=",
			                    $this->_page, 
								$numUsers, 
								$this->_numUsersPerPage );

			$this->setValue( "users", $siteUsers );
			$this->setValue( "pager", $pager );
		
			// let the parent view do its job
			parent::render();
		}
	}
?>