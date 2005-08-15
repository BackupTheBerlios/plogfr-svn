<?php

    include_once( PLOG_CLASS_PATH."class/plugin/pluginbase.class.php" );
    include_once( PLOG_CLASS_PATH."class/plugin/pluginmanager.class.php" );
	include_once( PLOG_CLASS_PATH."class/net/rawrequestgenerator.class.php" );
    include_once( PLOG_CLASS_PATH."class/misc/glob.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/authimage/class/security/authimagefilter.class.php" );	

    define( "AUTHIMAGE_FILE", "/plugins/authimage/authimage.php" );
    define( "AUTHIMAGE_BACKGROUND_FOLDER", PLOG_CLASS_PATH."plugins/authimage/backgrounds/" );
    
    /**
     * Plugin that offers comment authentication image for current blog
     * Original Author: Gudlyf http://www.gudlyf.com/index.php?p=376
     * Modified by: Mark Wu
     */
    class PluginAuthImage extends PluginBase
    {
        var $pluginEnabled;
        var $default;
        var $cacheFolder;
        
        function PluginAuthImage()
        {
            $this->PluginBase();
            
            $this->id      = "authimage";
            $this->author  = "Mark Wu";
            $this->desc    = 'This plugin offers extra comment authentication for pLog. The idea is inspired by <a href="http://www.gudlyf.com/index.php?p=376">WordPress AuthImage Plugin</a> written by Gudlyf.';
            $this->version = '1.0.1';

            $this->locales = Array( "en_UK" , "zh_TW" , "zh_CN", "es_ES", "de_DE" );
            
            $this->init();              
        }

		function init()
		{
            include_once( PLOG_CLASS_PATH."class/template/menu/menu.class.php" );

			// register the filter
			$this->registerFilter( "AuthImageFilter" );

            $this->registerAdminAction( "authimage", "PluginAuthImageConfigAction" );
			$this->registerAdminAction( "updateAuthImageConfig", "PluginAuthImageUpdateConfigAction" );
			$this->registerBlogAction( "AuthImageShow", "PluginAuthImageShowAction" );
			
			$menu =& Menu::getMenu();
			if( !$menu->entryExists( "/menu/controlCenter/manageAntiSpamPlugins" ))						
				$this->addMenuEntry( "/menu/controlCenter", "manageAntiSpamPlugins", "", "", true, false );			
            $this->addMenuEntry( "/menu/controlCenter/manageAntiSpamPlugins", "AuthImage", "?op=authimage", "" );
		}
 
		function register()
		{
            $config =& Config::getConfig();
            $this->cacheFolder = $config->getValue('temp_folder');
			$this->cacheFolder = $this->cacheFolder.'/authimage/'.$this->blogInfo->getId();
			if( !File::exists( $this->cacheFolder )) {
				File::createDir( $this->cacheFolder );
			}
		    
		    $blogSettings = $this->blogInfo->getSettings();
			$this->pluginEnabled = $blogSettings->getValue( "plugin_authimage_enabled" );
			$this->length = $blogSettings->getValue( "plugin_authimage_length" );
			$this->key = $blogSettings->getValue( "plugin_authimage_key" );
			$this->expiredTime = $blogSettings->getValue( "plugin_authimage_expiredtime" );
			if ($this->expiredTime == "") $this->expiredTime = 3600;
			$this->default = $blogSettings->getValue( "plugin_authimage_default" );
		}

	    function isEnabled()
	    {
	        return $this->pluginEnabled;
	    }

        function generateImageUrl()
        {
 			$rg = new RawRequestGenerator($this->blogInfo);
            
        	$rg->addParameter( "op", "AuthImageShow" );
            $rg->addParameter( "blogId", $this->blogInfo->getId());

            $imageUrl = $rg->getIndexUrl().$rg->getRequest();

            if ( !function_exists ('gd_info') ) {
                // We don't have gd support compiled in, lets inform the user about it
                return false;
            }

            return $imageUrl;
        }

        function show() {
            $authImageUrl = $this->generateImageUrl();
            if ( $authImageUrl )
                return '<img src="'.$authImageUrl.'" style="vertical-align:middle;" width="70px" height="20px" alt="authimage" />'; 
            else
                return 'You don\'t have GD support compiled in, we cannot create an authimage. Please activate GD Support.';
        }

        function showImage() {
            // Delete those cached authimage files that never used
            $this->deleteExpiredAuthImage($this->expiredTime);
            
            $code = $this->generateCode();
            $encrypt = $this->encrypt($code, $this->key);
            $background = AUTHIMAGE_BACKGROUND_FOLDER.$this->default;
            $tempFile = $this->cacheFolder."/".$encrypt.".gif";

            if(function_exists ( 'imagecreatefromgif' )){
                $image = @imagecreatefromgif($background) or die("Cannot Initialize new GD image stream");
			}
			else if(function_exists ( 'imagecreatefrompng' )){
                $image = @imagecreatefrompng($background) or die("Cannot Initialize new GD image stream"); 
            } else {
			  die("Server doesn't support GIF or PNG creation. Sorry.");
            }           
            
            $textColor = imageColorAllocate($image, 0x00, 0x00, 0x00);
            ImageString($image, 5, 7, 2, $code, $textColor);

            if ( !function_exists ( 'ImageGIF' ) ) {
                ImagePNG($image, $tempFile);
            } else {
                ImageGIF($image, $tempFile);
            }
            $temp = fopen($tempFile,"rb");
            $buffer = fread($temp,filesize($tempFile));
            fclose($temp);
  
            // Now zero-length the file. No need for its content anymore.
            $temp = fopen($tempFile,"w");
            fwrite($temp, NULL);
            fclose($temp);

            // Now chmod it so it can be deleted later by the user
            chmod($tempFile, 0666);
            
            header("Content-type: image/gif");
            echo $buffer;
        }

        // encrypt string
        function encrypt($string, $key) {
            $plainText = $string.$key;
            $encodeText = md5($plainText);
            return $encodeText;
        }
        	
        function generateCode() {
            $code = "";
            for($i=0; $i < $this->length; $i++) $code .= rand(0,9);
            return $code;
        }        
        
        function deleteExpiredAuthImage( $expiretime ) {
            $path = $this->cacheFolder;
            if ( is_dir($path) ) 
            { 
                $handle=opendir($path); 
                while (false!==($file = readdir($handle))) { 
                    if ($file != "." && $file != "..") {  
                        $diff = time() - filectime("$path/$file");
                        if ($diff > $expiretime) unlink("$path/$file");
                    } 
                }
                closedir($handle); 
            }
        }           
    }
        
?>
