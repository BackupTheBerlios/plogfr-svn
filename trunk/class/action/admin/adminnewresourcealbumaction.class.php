<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/adminnewalbumview.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * Adds a new album
     */
    class AdminNewResourceAlbumAction extends AdminAction 
	{

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminNewResourceAlbumAction( $actionInfo, $request )
        {
        	$this->AdminAction( $actionInfo, $request );
        }

        /**
         * Carries out the specified action
         */
        function perform()
        {
            $this->_view = new AdminNewAlbumView( $this->_blogInfo, "newresourcealbum" );
            $this->setCommonData();
            return true;
        }
    }
?>
