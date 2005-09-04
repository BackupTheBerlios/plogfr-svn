<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminblogtemplatechooserview.class.php" );

    /**
     * \ingroup Action
     * @private
     *
	 * shows a list of templates where to choose
	 */
	class AdminBlogTemplateChooserAction extends BlogOwnerAdminAction
	{
	
		function AdminBlogTemplateChooserAction( $actionInfo, $request )
		{
			$this->BlogOwnerAdminAction( $actionInfo, $request );
		}
		
		function perform()
		{
			// this class does nothing else than loading the view and returning control
			// to the user...
			$this->_view = new AdminBlogTemplateChooserView( $this->_blogInfo );
			$this->setCommonData();
			
			return true;
		}
	}
?>