<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/admintemplatedview.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/adminerrorview.class.php" );
    include_once( PLOG_CLASS_PATH."class/template/templatesets/templatesetstorage.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * Shows a form to add a new locale file
     */
    class AdminNewBlogTemplateAction extends BlogOwnerAdminAction 
    {

    	function AdminNewBlogTemplateAction( $actionInfo, $request )
        {
        	$this->BlogOwnerAdminAction( $actionInfo, $request );
        }

        function perform()
        {
        	if( $this->_config->getValue( "users_can_add_templates" ) == true ) {	        	
        		$this->_view = new AdminTemplatedView( $this->_blogInfo, "newblogtemplate" );
        		$this->_view->setValue( "templateFolder", TemplateSetStorage::getBlogBaseTemplateFolder( $this->_blogInfo->getId()));
            	$this->setCommonData();
            }
            else {
            	$this->_view = new AdminErrorView( $this->_blogInfo );
                $this->_view->setMessage( $this->_locale->tr("error_add_template_disabled"));
                $this->setCommonData();
            }

            return true;
        }
    }
?>
