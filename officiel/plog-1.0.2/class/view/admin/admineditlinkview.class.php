<?php

	include_once( PLOG_CLASS_PATH."class/view/admin/adminnewlinkview.class.php" );
	
    /**
     * \ingroup View
     * @private
     */	
	class AdminEditLinkView extends AdminNewLinkView
	{
		
		function AdminEditLinkView( $blogInfo, $params = Array())
		{
			$this->_templateName = "editlink";
			
			$this->AdminNewLinkView( $blogInfo, $params );
		}
	}
?>