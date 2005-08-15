<?php

    include_once( PLOG_CLASS_PATH."class/plugin/pluginbase.class.php" );
    include_once( PLOG_CLASS_PATH."class/plugin/pluginmanager.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/referers.class.php" );
    
    /**
     * Plugin that offers features to return a recent article referers from the current blog
     */
    class PluginArticleReferers extends PluginBase
    {
        var $prefix;
        var $pluginEnabled;
        var $sortByField;
        var $maxReferers;
           
        function PluginArticleReferers()
        {
            $this->PluginBase();
  
            $this->id = "articlereferers";
            $this->author = "Mark Wu";
            $this->desc = "This plugin offers you to get the referers of the specific article.";
  
            $this->prefix = Db::getPrefix();
            
            $this->locales = Array( "en_UK" , "zh_TW" , "zh_CN" );
            
            $this->init();            
        }

		function init()
		{
            $this->registerAdminAction( "articlereferers", "PluginArticleReferersConfigAction" );
			$this->registerAdminAction( "updateArticleReferersConfig", "PluginArticleReferersUpdateConfigAction" );
			
			$menu =& Menu::getMenu();
			if( !$menu->entryExists( "/menu/controlCenter/manageRecentPlugins" ))						
				$this->addMenuEntry( "/menu/controlCenter", "manageRecentPlugins", "", "", true, false );			
            $this->addMenuEntry( "/menu/controlCenter/manageRecentPlugins", "ArticleReferers", "?op=articlereferers", "" );            
		}

		function register()
		{
		    $blogSettings = $this->blogInfo->getSettings();
		    $this->pluginEnabled = $blogSettings->getValue( "plugin_articlereferers_enabled" );
		    $this->sortByField = $blogSettings->getValue( "plugin_articlereferers_sortbyfield" );
	        $this->maxReferers = $blogSettings->getValue( "plugin_articlereferers_maxreferers" );
	    }
	    
	    function isEnabled()
	    {
	        return $this->pluginEnabled;
	    }
 
        /**
         * Returns the referers object of specific article
         */
        function getArticleReferers( $articleId, $maxReferers = 0, $sortByField = 1)
        {
            $referers = new Referers();
            $blogId = $this->blogInfo->getId();

         	$query = "SELECT * FROM ".$this->prefix."referers WHERE article_id = ".$articleId;
         	
         	if( $this->sortByField != "" && $this->sortByField != $sortByField )
         	    $sortByField =  $this->sortByField;
         	    
            if ( $sortByField == 1 )
            {
                $query .= " ORDER BY hits DESC";
            } elseif ( $sortByField == 2 ) {
                $query .= " ORDER BY last_date DESC";
            } else {
                return false;
            }

            if( $maxReferers > 0 && $this->maxReferers > 0) 
            {
                $query .= " LIMIT ".$maxReferers.";"; 
            } else {
                $query .= " LIMIT ".$this->maxReferers.";";
            }
            
            $result = $referers->_db->Execute( $query );
            if( !$result )
            	return false;
           
            $articlereferers = Array();
            while( $row = $result->FetchRow()) {
            	array_push( $articlereferers, $referers->_fillRefererInformation( $row ));
            }

            return $articlereferers;
        }
    }
?>