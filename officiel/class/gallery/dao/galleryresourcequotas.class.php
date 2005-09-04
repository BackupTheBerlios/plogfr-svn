<?php

	include_once( PLOG_CLASS_PATH."class/object/object.class.php" );
	include_once( PLOG_CLASS_PATH."class/config/config.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/blogs.class.php" );
	include_once( PLOG_CLASS_PATH."class/gallery/dao/galleryresources.class.php" );	
	
	define( "GLOBAL_QUOTA_DEFAULT", 5000000 );

	/**
	 * \ingroup Gallery
	 *
	 * returns information about quotas, both global-wise and per-blog quotas
	 */
	class GalleryResourceQuotas extends Object
	{
	
		/**
		 * returns the current global quota set
		 *
		 * @static
		 * @return
		 */
		function getGlobalResourceQuota()
		{
			$config =& Config::getConfig();
			$quota = $config->getValue( "resources_quota", GLOBAL_QUOTA_DEFAULT );
			
			return $quota;
		}
		
		/**
		 * Returns the quota usage of a user
		 *
		 * @param userId The user whose quota usage we would like to know
		 * @param albumId The album identifier, optional
		 * @return The number of bytes used
		 * @static
		 */
		function getBlogResourceQuotaUsage( $userId, $albumId = -1 )
		{
			// get the user resources
			$resources = new GalleryResources();
			$blogResources = $resources->getUserResources( $userId, $albumId );
			
			if( !$blogResources )
				return 0;
			
			// and now go one by one calculating the sizes
			$total = 0;
			foreach( $blogResources as $resource ) {
				$total += $resource->getFileSize();
			}
			
			return $total;
		}
		
		/**
		 * returns whether the blog would be over its allocated quota
		 * if we are to add a file of the given size
		 *
		 * @param blogId
		 * @param fileSize
		 * @return
		 * @static
		 */
		function isBlogOverResourceQuota( $blogId, $fileSize )
		{
			// current allocated quota
			$blogQuota = GalleryResourceQuotas::getBlogResourceQuota( $blogId );
			
			// but if the quota is 0, then for sure we won't be over the quota :)
			if( $blogQuota == 0 )
				return false;
				
			// if not, calculate how many bytes we currently have
			$currentBytes = GalleryResourceQuotas::getBlogResourceQuotaUsage( $blogId );
								
			if( ($currentBytes + $fileSize) > $blogQuota )
				return true;
			else
				return false;
		}
	
		/**
		 * returns the current quota allocated for a blog
		 *
		 * @param blogId
		 * @return
		 * @static
		 */
		function getBlogResourceQuota( $blogId )
		{
			$blogs = new Blogs();
			$blogSettings = $blogs->getBlogSettings( $blogId );
			
			$blogQuota = $blogSettings->getValue( "resources_quota" );
			if( $blogQuota == "" )
				$blogQuota = GalleryResourceQuotas::getGlobalResourceQuota();
				
			return $blogQuota;
		}
	}
?>