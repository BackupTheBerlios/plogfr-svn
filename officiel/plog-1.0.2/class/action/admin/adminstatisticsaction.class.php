<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminreferrersview.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * Action that shows statistics
     */
    class AdminStatisticsAction extends BlogOwnerAdminAction 
	{
	
		var $_page;

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminStatisticsAction( $actionInfo, $request )
        {
        	$this->BlogOwnerAdminAction( $actionInfo, $request );
        }
		
        /**
         * Carries out the specified action
         */
        function perform()
        {
			// create the view
			$this->_view = new AdminReferrersView( $this->_blogInfo );
            $this->setCommonData();

            // better to return true if everything fine
            return true;
        }
    }
?>
