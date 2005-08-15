<?php

	include_once( PLOG_CLASS_PATH."class/plugin/pluginbase.class.php" );
	
	/**
	 * makes printable versions of posts
	 */
	class PluginPrint extends PluginBase
	{
	
		function PluginPrint()
		{
			$this->PluginBase();
			
			$this->id = "print";
			$this->description = "Generates printable versions of posts";
			$this->author = "The pLog Team";
			$this->locales = Array( "en_UK", "es_ES" );
			
			$this->init();
		}
		
		/**
		 * registers all the filters and actions that we're going to use
		 */
		function init()
		{			
		    // action to show the form to add a new story
		    $this->registerBlogAction( "printView", "PrintPostAction" );
			
			// add a couple of menu entries
			//$this->addMenuEntry( "/menu/controlCenter/manageSettings", "printPluginSettings", "admin.php?op=printPluginSettings", "", true, false );			
		}
		
		/**
		 * generates the correct url for the print view of a post
		 *
		 * @param article
		 * @return the right url
		 */
        function printView( $article )
        {
                $rg =& RequestGenerator::getRequestGenerator( $this->_blogInfo );
            return $rg->getBaseUrl()."/index.php?op=printView&amp;articleId=".$article->getId()."&amp;blogId=".$this->blogInfo->getId();
        }
	}
?>