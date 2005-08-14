<?php

	include_once( PLOG_CLASS_PATH."class/view/admin/admintemplatedview.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/blogs.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articlecategories.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/customfields/customfields.class.php" );
	include_once( PLOG_CLASS_PATH."class/config/config.class.php" );	
	
    /**
     * \ingroup View
     * @private
     */	
	class AdminNewPostView extends AdminTemplatedView
	{
	
		function AdminNewPostView( $blogInfo )
		{
			$this->AdminTemplatedView( $blogInfo, "newpost" );
		}
		
		function render()
		{
           // fetch the categories
            $categories = new ArticleCategories();
			$blogSettings = $this->_blogInfo->getSettings();
			$categoriesOrder = $blogSettings->getValue( "categories_order" );
            $blogCategories = $categories->getBlogCategories( $this->_blogInfo->getId(), false, $categoriesOrder );

            // get some stuff for the time stamp of the post, which is changeable now
            //$t = new Timestamp();
            $t = Timestamp::getBlogDate( $this->_blogInfo );
            //$t->toUTC();
            //
            // changes to make plog store its dates with the time difference already
            // applied, instead of applying it dynamically
            //
            $config =& Config::getConfig();
            /*if( $config->getValue( "time_difference_calculation" == TIME_DIFFERENCE_CALCULATION_STATIC ) {
				$blogSettings = $this->_blogInfo->getSettings();
				$difference = $blogSettings->getValue( "time_offset" );
            	$t->setDate( Timestamp::getDateWithOffset( $t->getDate(), $difference ), DATE_FORMAT_TIMESTAMP );
        	}*/
            				
			// fetch the custom fields, if any, but not including the ones that have been set to "hidden"...
			$customFields = new CustomFields();
			$blogFields   = $customFields->getBlogCustomFields( $this->_blogInfo->getId(), false);

            // and put everything in the template
        	$locale = $this->_blogInfo->getLocale();            
            $this->setValue( "commentsEnabled", $blogSettings->getValue( "comments_enabled" ));
            $this->setValue( "categories", $blogCategories );
            $this->setValue( "today", $t );
            $this->setValue( "months", $locale->getMonthNames());
            $this->setValue( "days", $locale->getDayNamesShort());
            $this->setValue( "years", Timestamp::getYears());
            $this->setValue( "hours", Timestamp::getAllHours());
            $this->setValue( "minutes", Timestamp::getAllMinutes());
			$this->setValue( "customfields", $blogFields );
			$this->setValue( "poststatus", ArticleStatus::getStatusList());
			$this->setValue( "sendPings", $config->getValue( "send_xmlrpc_pings_enabled_by_default", true ));
			$this->setValue( "xmlRpcPingEnabled", $config->getValue( "xmlrpc_ping_enabled", false ));
			$this->setValue( "autoSaveNewDraftsTimeMillis", $config->getValue( "autosave_new_drafts_time_millis" ));
			$this->setValue( "xmlHttpRequestSupportEnabled", $config->getValue( "save_drafts_via_xmlhttprequest_enabled" ));
			$this->setValue( "postDateTime", $t->getDay()."/".$t->getMonth()."/".$t->getYear()." ".$t->getHour().":".$t->getMinutes());						
			
			parent::render();
		}
	}
?>