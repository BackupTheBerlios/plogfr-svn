<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/adminuserpictureselectview.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * Deletes a resource from the blog
     */
    class AdminUserPictureSelectAction extends AdminAction
    {
		
    	var $_albumId;
		
    	/**
		* Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminUserPictureSelectAction( $actionInfo, $request )
        {
        	$this->AdminAction( $actionInfo, $request );
        }
		
		function validate()
		{
			// if the album id is not vald, let's start from the top album again
			$this->_albumId = $this->_request->getValue( "albumId" );
			$val = new IntegerValidator();
			if( !$val->validate( $this->_albumId ))
				$this->_albumId = 0;
			
			return true;
		}
		
        /**
			* Carries out the specified action
         */
        function perform()
        {
			
            $this->_view = new AdminUserPictureSelectView( $this->_blogInfo, Array( "albumId" => $this->_albumId ));
            $this->setCommonData();
			
            return true;
        }
    }
?>