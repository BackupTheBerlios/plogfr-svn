<?php

    // -- for the admin side action
    include_once( PLOG_CLASS_PATH."class/action/blogaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/plugintemplatedview.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/errorview.class.php" );
    
	/**
	 * shows a form to perform advanced searches
	 */
	class PluginAdvancedSearchAction extends BlogAction
	{
		
		function PluginAdvancedSearchAction( $actionInfo, $request )
		{
			$this->BlogAction( $actionInfo, $request );
		}
		
		function perform()
		{
			$this->_view = new PluginTemplatedView( $this->_blogInfo, "advancedsearch", "searchform" );
			$this->setCommonData();
			
			return true;
		}
	}
	
	/**
	 * updates the plugin configuration
	 */
	class PluginAdvancedSearchPerformSearch extends BlogAction
	{
		var $_searchTerms;
		var $_searchType;
	
		function PluginAdvancedSearchPerformSearch( $actionInfo, $request )
		{
			$this->BlogAction( $actionInfo, $request );
		}
		
		function validate()
		{
			return true;
		}
		        
		function perform()
		{
			$this->_view = new ErrorView( $this->_blogInfo, "Haven't had time to implement this yet!!" );
			$this->setCommonData();
			
			return true;
		}
	}

	/**
	 * base class that registers everything
	 */
    class PluginAdvancedSearch extends PluginBase
    {
	
        function PluginAdvancedSearch()
        {
            $this->PluginBase();
			
			// ---
			// set some information
			// ---
            $this->desc = "A plugin to perform advanced searches";
            $this->author = "The pLog Team";
			$this->id = "advancedsearch";
			$this->locales = Array();
			
			// ---
			// register two actions for this plugin to take care of...
			// ---
            $this->registerBlogAction( "advancedSearch", "PluginAdvancedSearchAction" );
			$this->registerBlogAction( "performAdvancedSearch", "PluginAdvancedSearchPerformSearch" );			
        }
    }
?>