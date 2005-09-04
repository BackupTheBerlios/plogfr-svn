<?php

	include_once( PLOG_CLASS_PATH."class/view/admin/adminresourceslistview.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/stringutils.class.php" );
	
    /**
     * \ingroup View
     * @private
     */	
	class AdminSimpleResourcesListView extends AdminResourcesListView
	{
	
		function AdminSimpleResourcesListView( $blogInfo, $params = Array())
		{
			$this->AdminResourcesListView( $blogInfo, $params );
			
			// change the template, the one chosen by the view above is not
			// exactly the one we needed
			$this->_templateName = "resourcelist";
		}
		
		function render()
		{
			$config =& Config::getConfig();
            $this->setValue( "blogname", StringUtils::text2url( $this->_blogInfo->getBlog() )); 			
            $this->setValue( "requestformat", $config->getValue( "request_format_mode"));
            $this->setValue( "baseurl", $config->getValue( "base_url" ));
            $this->setValue( "htmlarea", $config->getValue( "htmlarea_enabled" ));
            $destination = $this->getValue( "destination" );

			$this->_pagerUrl = "?op=resourceList&amp;&amp;mode=$destination&amp;page=";

			parent::render();
		}
	}
?>