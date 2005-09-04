<?php

include_once( PLOG_CLASS_PATH."class/action/admin/adminaction.class.php" );
include_once( PLOG_CLASS_PATH."class/view/admin/adminresourceslistview.class.php" );
include_once( PLOG_CLASS_PATH."class/view/admin/admineditresourceview.class.php" );
include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );
include_once( PLOG_CLASS_PATH."class/gallery/resizers/galleryresizer.class.php" );
include_once( PLOG_CLASS_PATH."class/gallery/dao/galleryresources.class.php" );
include_once( PLOG_CLASS_PATH."class/gallery/dao/galleryresourcestorage.class.php" );

    /**
     * \ingroup Action
     * @private
     */ 
class AdminRegeneratePreviewAction extends AdminAction
{
        
    var $_resourceId;
        
    function AdminRegeneratePreviewAction( $actionInfo, $request ){
        $this->AdminAction( $actionInfo, $request );
            
        $this->registerFieldValidator( "resourceId", new IntegerValidator());
        $view = new AdminResourcesListView( $this->_blogInfo );
        $view->setErrorMessage( $this->_locale->tr("error_loading_resource"));
        $this->setValidationErrorView( $view );
    }
        
	function perform(){
            // first of all, fetch the resource
        $this->_resourceId = $this->_request->getValue( "resourceId" );
        $resources = new GalleryResources();
        $resource = $resources->getResource( $this->_resourceId, $this->_blogInfo->getId());
            
            // check if it was loaded ok
        if( !$resource ) {
            $this->_view = new AdminResourcesListView( $this->_blogInfo );
            $this->_view->setErrorMessage( $this->_locale->tr("error_loading_resource"));
            $this->setCommonData();
                
            return false;
        }
            
            // if so, continue... first by checking if the resource is an image or not
            // because if not, then there is no point in generating a thumbnail of it!
        if( !$resource->isImage()) {
            $this->_view = new AdminResourcesListView( $this->_blogInfo );
            $this->_view->setErrorMessage( $this->_locale->tr("error_resource_is_not_an_image" ));
        }
            
            
        $previewHeight = $this->_config->getValue( "thumbnail_height" );
        $previewWidth  = $this->_config->getValue( "thumbnail_width" );
        $previewKeepAspectRatio = $this->_config->getValue( "thumbnails_keep_aspect_ratio" );

            // build the filename
        $fileNameParts = explode( ".", $resource->getFileName());
        $fileExt = strtolower($fileNameParts[count($fileNameParts)-1]);
        $fileName = $resource->getOwnerId()."-".$resource->getId().".".$fileExt;

            // and start the resizing process
        $resourceStorage = new GalleryResourceStorage();
        $resizer = new GalleryResizer( $resourceStorage->getResourcePath( $resource ));
        $resourceStorage->checkPreviewsStorageFolder( $resource->getOwnerId());
        $outFile = $resourceStorage->getPreviewsFolder( $resource->getOwnerId()).$fileName;
            
            // and finally, we can generate the preview!
        $result = $resizer->generate( $outFile, $previewHeight, $previewWidth, $previewKeepAspectRatio );
            
        $previewFormat = $resizer->getThumbnailFormat();
        $resource->setThumbnailFormat( $previewFormat );
        $resources->updateResource( $resource );
            
        if( !$result ) {
            $this->_view = new AdminResourcesListView( $this->_blogInfo );
            $this->_view->setErrorMessage( $this->_locale->tr("error_generating_resource_preview" ));
        }
        else {
            $previewHeight = $this->_config->getValue( "medium_size_thumbnail_height" );
            $previewWidth  = $this->_config->getValue( "medium_size_thumbnail_width" );
            
                // and start the resizing process
            $resourceStorage = new GalleryResourceStorage();
            $resizer = new GalleryResizer( $resourceStorage->getResourcePath( $resource ));
            $resourceStorage->checkMediumSizePreviewsStorageFolder( $resource->getOwnerId());
            $outFile = $resourceStorage->getMediumSizePreviewsFolder( $resource->getOwnerId()).$fileName;
            
                // and finally, we can generate the preview!
            $result = $resizer->generate( $outFile, $previewHeight, $previewWidth, $previewKeepAspectRatio );
            
            $previewFormat = $resizer->getThumbnailFormat();
            $resource->setThumbnailFormat( $previewFormat );
            $resources->updateResource( $resource );

            if( !$result ) {
                $this->_view = new AdminResourcesListView( $this->_blogInfo );
                $this->_view->setErrorMessage( $this->_locale->tr("error_generating_resource_medium" ));
            }
            else {
                $this->_view = new AdminEditResourceView( $this->_blogInfo );
                $this->_view->setSuccessMessage( $message = $this->_locale->tr("resource_preview_generated_ok" ));
                $this->_view->setValue( "resourceDescription", $resource->getDescription());
                $this->_view->setValue( "albumId", $resource->getAlbumId());
                $this->_view->setValue( "resource", $resource );
            }
        }
        $this->setCommonData();
            
        return true;
    }
}
?>