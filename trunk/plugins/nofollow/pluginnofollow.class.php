<?php
	include_once( PLOG_CLASS_PATH."class/plugin/pluginbase.class.php" );
	include_once( PLOG_CLASS_PATH."class/plugin/pluginmanager.class.php" );

	class PluginNoFollow extends PluginBase
	{
		var $pluginEnabled;
		
		function PluginNoFollow()
		{
			$this->PluginBase();

			$this->id      = "nofollow";
			$this->author  = "Original by Minstrel Chiu, Modified by Mark Wu";
			$this->desc    = "Prevents comment spams with 'rel=nofollow'";

			$this->locales = Array( "en_UK" , "zh_TW" , "zh_CN", "es_ES" );

			$this->init();
		}

		function init()
		{
            $this->registerAdminAction( "nofollow", "PluginNoFollowConfigAction" );
			$this->registerAdminAction( "updateNoFollowConfig", "PluginNoFollowUpdateConfigAction" );
			
			$menu =& Menu::getMenu();
			if( !$menu->entryExists( "/menu/controlCenter/manageAntiSpamPlugins" ))						
				$this->addMenuEntry( "/menu/controlCenter", "manageAntiSpamPlugins", "", "", true, false );			
            $this->addMenuEntry( "/menu/controlCenter/manageAntiSpamPlugins", "NoFollow", "?op=nofollow", "" );            

			$this->registerNotification( EVENT_PRE_COMMENT_ADD );
		}

		function register()
		{
		    $blogSettings = $this->blogInfo->getSettings();
			$this->pluginEnabled = $blogSettings->getValue( "plugin_nofollow_enabled" );
		}

	    function isEnabled()
	    {
	        return $this->pluginEnabled;
	    }		

		function process($eventType, $params)
		{
            if ( $eventType != EVENT_PRE_COMMENT_ADD )
                return true;
                
		    $blogSettings = $this->blogInfo->getSettings();
		    $pluginEnabled = $blogSettings->getValue( "plugin_nofollow_enabled" );
            if ( $pluginEnabled != 1 )
                return true;

			$comment = $params["comment"];

			$text = $comment->getText();
			$text = $this->nofollow($text);

			$comment->setText($text);

			$params["comment"] = $comment;

			return true;
		}

		function nofollow($text)
		{
			if(!isset($text))
				return $text;

			return preg_replace_callback('#<a\s([^>]*\s*href\s*=[^>]*)>#i', array(&$this, 'nofollow_process'), $text);
		}

		function nofollow_process($matches)
		{
			$text = $matches[1];

			preg_match_all('/[^=[:space:]]*\s*=\s*"[^"]*"|[^=[:space:]]*\s*=\s*\'[^\']*\'|[^=[:space:]]*\s*=[^[:space:]]*/', $text, $attr);
			$rel_arr = preg_grep('/^rel\s*=/i', $attr[0]);

			if(count($rel_arr)>0)
				$rel = array_pop($rel_arr);

			if($rel)
			{
				$rel = preg_replace('/^(rel\s*=\s*[\'"]?)/i', '\1nofollow ', $rel);
			}
			else
			{
				$rel = 'rel="nofollow"';
			}

			$attr = preg_grep('/^rel\s*=/i', $attr[0], PREG_GREP_INVERT);

			return '<a ' . join(' ', $attr) . ' ' . $rel . '>';
		}
	}
?>