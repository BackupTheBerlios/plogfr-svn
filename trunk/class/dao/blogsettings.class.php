<?php

	include_once( PLOG_CLASS_PATH."class/config/properties.class.php" );
	include_once( PLOG_CLASS_PATH."class/config/config.class.php" );
	
	/**
	 * default time offset that is applied to new blogs
	 */
	define( "DEFAULT_TIME_OFFSET", 0 );

	/**
	 * \ingroup DAO
	 *
	 * Encapsulation of the settings for each blog
     *
     * Default settings available from this object:
     * <ul>
     * <li>locale</li>
     * <li>show_posts_max</li>
     * <li>template</li>
     * <li>show_more_enabled</li>
     * <li>show_more_threshold</li>
     * <li>recent_posts_max</li>
     * <li>xmlrpc_ping_hosts</li>
     * <li>show_more_enabled</li>
     * <li>htmlarea_enabled</li>
     * <li>comments_enabled</li>
     * <li>comments_order</li>
	 * <li>categories_order</li>
     * </ul>
	 */
	class BlogSettings extends Properties 
	{

		function BlogSettings()
		{
			$this->Properties();

			$this->_setDefaults();
		}

		/**
		 * Sets some reasonable defaults for all the parameters, based on
		 * the system-wide settings from config/config.properties.php
		 */
		function _setDefaults()
		{
			$config =& Config::getConfig();

			$this->setValue( "locale", $config->getValue("default_locale"));
			$this->setValue( "show_posts_max", $config->getValue( "show_posts_max" ));
			$this->setValue( "template", $config->getValue("default_template"));
			$this->setValue( "show_more_enabled", $config->getValue( "show_more_enabled"));
            $this->setValue( "recent_posts_max", $config->getValue( "recent_posts_max" ));
            $this->setValue( "xmlrpc_ping_hosts", $config->getValue( "xmlrpc_ping_hosts" ));
            $this->setValue( "htmlarea_enabled", $config->getValue( "htmlarea_enabled" ));
            $this->setValue( "comments_enabled", $config->getValue( "comments_enabled" ));
			$this->setValue( "categories_order", 0 );
			$this->setValue( "comments_order", $config->getValue( "comments_order" ));
			$this->setValue( "time_offset", $config->getValue( "default_time_offset", DEFAULT_TIME_OFFSET ));
		}
	}
?>
