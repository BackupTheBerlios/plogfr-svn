<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/adminsimpleerrorview.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/adminhelpview.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/stringvalidator.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * Sends a help text to the user.
     */
    class AdminHelpAction extends AdminAction 
	{

    	var $_helpId;

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminHelpAction( $actionInfo, $request )
        {
        	$this->AdminAction( $actionInfo, $request );
        }

        function validate()
        {
        	$this->_helpId = trim($this->_request->getValue( "helpId" ));

            $val = new StringValidator();
            if( !$val->validate( $this->_helpId )) {
            	$this->_view = new AdminSimpleErrorView();
                $this->_view->setValue( "error", "Incorrect identifier." );
            	return false;
            }

            return true;
        }

        /**
         * Carries out the specified action
         */
        function perform()
        {
        	$this->_view = new AdminHelpView( $this->_blogInfo );
            $blogSettings = $this->_blogInfo->getSettings();
            $locale =& Locales::getLocale( $blogSettings->getValue( "locale" ));

            $this->_view->setValue( "help", $locale->tr( $this->_helpId ));
            $this->setCommonData();

            // better to return true if everything fine
            return true;
        }
    }
?>
