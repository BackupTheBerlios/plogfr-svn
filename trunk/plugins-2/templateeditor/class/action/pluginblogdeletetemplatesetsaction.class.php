<?php
    include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/template/templatesets/templatesetstorage.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/templateeditor/class/view/pluginblogtemplatesetslistview.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/stringvalidator.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/arrayvalidator.class.php" );

    /**
     * Removes global templates from disk.
     */
    class PluginBlogDeleteTemplateSetsAction extends BlogOwnerAdminAction
    {

        var $_templateIds;
        var $_op;

        function PluginBlogDeleteTemplateSetsAction( $actionInfo, $request )
        {
            $this->BlogOwnerAdminAction( $actionInfo, $request );

            // data validation stuff
            $this->_op = $actionInfo->getActionParamValue();
            if( $this->_op == "blogDeleteTemplateSet" )
                $this->registerFieldValidator( "templateId", new StringValidator());
            else
                $this->registerFieldValidator( "templateIds", new ArrayValidator());
            $view = new PluginBlogTemplateSetsListView( $this->_blogInfo );
            $view->setErrorMessage( $this->_locale->tr("error_no_templates_selected"));
            $this->setValidationErrorView( $view );
        }

        function perform()
        {
            if( $this->_op == "blogDeleteTemplateSet" ) {
                $templateId = $this->_request->getValue( "templateId" );
                $this->_templateIds = Array();
                $this->_templateIds[] = $templateId;
            }
            else
                $this->_templateIds = $this->_request->getValue( "templateIds" );

            // carry out the
            $this->_deleteTemplates();
        }

        function _deleteTemplates()
        {
            $ts = new TemplateSetStorage();

            $errorMessage = "";
            $successMessage = "";
            $totalOk = 0;

            // get the id of the default template
            $blogTemplate = $this->_blogInfo->getTemplateSet();

            foreach( $this->_templateIds as $templateId ) {
                // we can't remove the default template
                if( $blogTemplate->getName() == $templateId ) {
                    $errorMessage .=$this->_locale->pr( "error_template_is_current", $templateId)."<br/>";
                }
                else {
                    // if it's not the default, then try to really remove it from disk
                    if( !$ts->removeTemplate( $templateId, $this->_blogInfo->getId() ))
                        $errorMessage .= $this->_locale->pr("error_removing_template", $templateId )."<br/>";
                    else {
                        $totalOk++;
                        if( $totalOk < 2 )
                            $successMessage = $this->_locale->pr("template_removed_ok", $templateId);
                        else
                            $successMessage = $this->_locale->pr( "templates_removed_ok", $totalOk );
                    }
                }
            }

            // create the view and show some feedback
            $this->_view = new PluginBlogTemplateSetsListView( $this->_blogInfo );
            if( $errorMessage != "" ) $this->_view->setErrorMessage( $errorMessage );
            if( $successMessage != "" ) $this->_view->setSuccessMessage( $successMessage );
            $this->setCommonData();

            return true;
        }
    }
?>