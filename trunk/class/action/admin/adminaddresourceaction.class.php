<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/adminresourceslistview.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/admin/adminnewresourceview.class.php" );	
    include_once( PLOG_CLASS_PATH."class/gallery/dao/galleryalbums.class.php" );
    include_once( PLOG_CLASS_PATH."class/net/http/httpvars.class.php" );
    include_once( PLOG_CLASS_PATH."class/gallery/dao/galleryresources.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/validator/arrayvalidator.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * Adds a new resource to an album
     */
    class AdminAddResourceAction extends AdminAction
    {

    	var $_description;
        var $_albumId;
        var $_resource;

    	/**
         * Constructor. If nothing else, it also has to call the constructor of the parent
         * class, BlogAction with the same parameters
         */
        function AdminAddResourceAction( $actionInfo, $request )
        {
        	$this->AdminAction( $actionInfo, $request );
			
			$this->registerFieldValidator( "resourceFile_1", new ArrayValidator(), true);
			$this->registerFieldValidator( "albumId", new IntegerValidator());
			$this->_form->registerField( "resourceDescription" );
			$view = new AdminNewResourceView( $this->_blogInfo );
			$view->setErrorMessage( $this->_locale->tr( "error_no_resource_uploaded" ));
			$this->setValidationErrorView( $view );
			
        }

        /**
         * Carries out the specified action
         */
        function perform()
        {
        	// fetch the information coming from the resource
        	$this->_description = Textfilter::filterAllHTML($this->_request->getValue( "resourceDescription" ));
            $this->_albumId     = $this->_request->getValue( "albumId" );
            $this->_resource    = $this->_request->getValue( "resourceFile" );
			
            // check if there is any file uploaded
            $files = HttpVars::getFiles();
			// we probably need to rearrange the $files array a bit better...
			$this->_files = Array();
			foreach( $files as $file ) {
				if( $file["error"] == 0 && $file["size"] > 0 && $file["name"] != "" ) {
					$this->_files[] = $file;
				}
			}
		
        	// let the gallery library do its work...
        	$resources = new GalleryResources();
			
			$this->_view = new AdminResourcesListView( $this->_blogInfo, Array( "albumId" => $this->_albumId ));
			
			$successMessage = "";
			$errorMessage = "";
			
			foreach( $this->_files as $file ) {

				// create a new FileUpload object based on the file
				$upload = new FileUpload( $file );

				// add the resource to the db
				$this->notifyEvent( EVENT_PRE_RESOURCE_ADD, Array( "upload" => &$upload ));
				$res = $resources->addResource( $this->_blogInfo->getId(), $this->_albumId,
												$this->_description, $upload );

				// check if everything went fine and if not, show an error message
				if( $res > 0 ) {
					$successMessage .= $this->_locale->pr("resource_added_ok", $file["name"])."<br/>";
					// try to fetch the resource so that we can send it in the event
					$resource = $resources->getResource( $res, $this->_blogInfo->getId());
					$this->notifyEvent( EVENT_POST_RESOURCE_ADD, Array( "resource" => &$resource ));				
				}
				else {
					if( $res == GALLERY_ERROR_RESOURCE_FORBIDDEN_EXTENSION ) 
						$errorMessage .= $this->_locale->pr("error_resource_forbidden_extension", $file["name"])."<br/>";
					elseif( $res == GALLERY_ERROR_RESOURCE_TOO_BIG )
						$errorMessage .= $this->_locale->pr("error_resource_too_big", $file["name"])."<br/>";
					elseif( $res == GALLERY_ERROR_UPLOADS_NOT_ENABLED )
						$errorMessage .= $this->_locale->tr("error_uploads_disabled" )."<br/>";
					elseif( $res == GALLERY_ERROR_QUOTA_EXCEEDED )
						$errorMessage .= $this->_locale->tr( "error_quota_exceeded" )."<br/>";
					else
						$errorMessage .= $this->_locale->pr("error_adding_resource", $file["name"])."<br/>";
				}
			}
			
			// clear the cache no matter what happened... we should only clear it if there was at least one
			// file uploaded but this way is not that bad after all...
			CacheControl::resetBlogCache( $this->_blogInfo->getId(), false );
			
			if( $successMessage != "" ) $this->_view->setSuccessMessage( $successMessage );
			if( $errorMessage != "" ) $this->_view->setErrorMessage( $errorMessage );
            $this->setCommonData();
			
            return true;
        }
    }
?>
