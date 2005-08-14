<?php

//xdebug_start_profiling();

    // please enable the line below if you are having memory problems
    //ini_set('memory_limit', "16M");

    if (!defined( "PLOG_CLASS_PATH" )) {
        define( "PLOG_CLASS_PATH", dirname(__FILE__)."/");
    }

    include_once( PLOG_CLASS_PATH."class/controller/blogcontroller.class.php" );
    include_once( PLOG_CLASS_PATH."class/net/http/session/sessionmanager.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/userinfo.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/bloginfo.class.php" );
    include_once( PLOG_CLASS_PATH."class/plugin/pluginmanager.class.php" );

    // just to make php use &amp; as the separator when adding the PHPSESSID
    // variable to our requests
    ini_set("arg_seperator.output", "&amp;");
    ini_set("magic_quotes_runtime", 0 );

    //
    // a security check, or else people might forget to remove the wizard.php script
    //
    if( File::isReadable( "wizard.php")) {
        print("<span style=\"color:red\">The wizard.php script has to be removed after the installation process.</span><br/><br/>
               Please remove it first to continue.");
        die();
    }

    // initialize the session
    SessionManager::init();

    $controller = new BlogController();

    // load the plugins, this needs to be done *before* we call the
    // Controller::process() method, as some of the plugins _might_
    // add new actions to the controller
    $pluginManager =& PluginManager::getPluginManager();
    $pluginManager->loadPlugins();

    // give control to the, ehem, controller :)
    $controller->process( HttpVars::getRequest(), "op");

//xdebug_dump_function_profile(4);
?>
