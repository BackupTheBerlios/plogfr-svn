<?php

    include_once( PLOG_CLASS_PATH."class/plugin/pluginbase.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/moblog/class/security/moblogbatchfilter.class.php" );
    
    /**
     * implementation a plugin to give plog moblogging features (posting via email)
     */
    class PluginMoblog extends PluginBase
    {
    
        function PluginMoblog()
        {
            $this->id = "moblog";
            $this->author = "The pLog Team";
            $this->locales = Array();
            $this->desc = "
Send a message with the following format ('start' and 'end' messages not included!):<br/>
<br/>
--- start of moblog message format ---<br/>
<br/>
USER: your-plog-username<br/>
PASS: your-plog-password<br/>
BLOG: your-plog-blog-name<br/>
<br/>
--- end of moblog message format ---<br/>
<br/>
The must be sent as plain text, and it can include as many attachment as needed.";

            $this->init();
        }
        
		/**
		 * set some actions and menu options
		 * @private
		 */
		function init()
		{
			// register the filter
			$this->registerFilter( "MoblogBatchFilter" );
			
			// register actions
			$this->registerAdminAction( "moblogSettings", "AdminMoblogPluginSettingsAction" );
			$this->registerAdminAction( "updateMoblogSettings", "AdminMoblogPluginUpdateSettingsAction" );
			$this->registerAdminAction( "moblogbatchSettings", "AdminMoblogBatchPluginSettingsAction" );
			$this->registerAdminAction( "updateMoblogBatchSettings", "AdminMoblogBatchPluginUpdateSettingsAction" );


			// register menu entries
			$this->addMenuEntry( "/menu/controlCenter/manageSettings",   // menu path
                                             "moblogSettings",    // menu id
                                             "admin.php?op=moblogSettings",     // url
                                             "Moblog",    // text to show
                                             true,       // can't...
                                             false       // ...remember :)
                                            );
			$this->addMenuEntry( "/menu/adminSettings/GlobalSettings", "moblogbatchSettings", "admin.php?op=moblogbatchSettings", "" );                                            
		}        
    }
?>