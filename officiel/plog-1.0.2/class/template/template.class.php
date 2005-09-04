<?php

	/**
	 * \defgroup Template
	 *
	 * The Template module provides classes for dealing with templates, which are built on
	 * top of Smarty. 
	 *
	 * It also provides method for managing the cache, template validation sandboxes and for
	 * dealing with template sets.
	 *
	 * @see TemplateService
	 * @see Template
	 * @see TemplateSets
	 * @see Menu
	 * @see MenuRenderer
	 */

    include_once( PLOG_CLASS_PATH.'class/template/smarty/Smarty.class.php' );
    include_once( PLOG_CLASS_PATH.'class/config/config.class.php' );
	include_once( PLOG_CLASS_PATH.'class/logger/loggermanager.class.php' );
	
	// Smarty dynamic block function
	function smarty_block_dynamic($param, $content, &$smarty) {
    	return $content;
	}	

    /**
     * \ingroup Template
     * 
     * Wrapper around the Smarty class, inspired by the article
     * http://zend.com/zend/tut/tutorial-stump.php
     *
     * This class provides additional methods and initial values for the original Smarty
     * class, and reimplements the methods Smarty::fetch() and Smarty::display() so that they do 
     * not need an extra parameter.
     *
     * It is not recommended to create instances of this class directly but instead, use the factory
     * TemplateService which is able to generate different types of Template objects with some pre-set
     * values. The TemplateService class can also deal with cached and non-cached templates.
     *
     * @see TemplateService
     * @see CachedTemplate
     */
    class Template extends Smarty 
    {

        var $_templateFile;
        
        // logger object
        var $log;

        /**
         * Constructor. 
         *
         * @param templateFile Complete path to the template file we are going to render
         */
        function Template( $templateFile )
        {
            // initialize logging
            $this->log =& LoggerManager::getLogger( "default" );

            // create the Smarty object and set the security values
            $this->Smarty();
            $this->caching = false;
            //$this->cache_lifetime =  $cacheLifetime;
            $config =& Config::getConfig();
            $this->cache_dir    = $config->getValue( 'temp_folder' );

            $this->_templateFile = $templateFile;

            // enable the security settings
            $this->php_handling = false;
            // code is not allowed in the templates by default, unless specified otherwise
            /*if( $config->getValue( 'allow_php_code_in_templates', false ))
            	$this->security = true;
            else
            	$this->security = false;*/
            	
            $this->security = (boolean)!$config->getValue( 'allow_php_code_in_templates', false );
            //$this->security = true;
			$this->secure_dir = Array( "./templates/admin", "./templates/" );

            // default folders
            $this->compile_dir  = $config->getValue( 'temp_folder' );
            $this->template_dir = $config->getValue( 'template_folder' );
            $this->compile_check = $config->getValue( 'template_compile_check', true );
            // this helps if php is running in 'safe_mode'
            $this->use_sub_dirs = false;

			// register dynamic block for every template instance
			$this->register_block('dynamic', 'smarty_block_dynamic', false);            
        }

        /**
         * By default templates are searched in the folder specified by the
         * template_folder configuration setting, but we can force Smarty to
         * look for those templates somewhere else. This method is obviously to be
         * used *before* rendering the template ;)
         *
         * @param templateFolder The new path where we'd like to search for templates
         * @return Returns always true.
         */
        function setTemplateDir( $templateDir )
        {
            $this->template_dir = $templateDir;

            return true;
        }

        /**
         * Returns the name of the template file
         *
         * @return The name of the template file
         */
        function getTemplateFile()
        {
            return $this->_templateFile;
        }

        /**
         * Renders the template and returns the contents as an string
         *
         * @return The result as an string
         */
        function fetch()
        {
            return Smarty::fetch( $this->_templateFile );
        }

        /**
         * Displays the result of rendering the template
         *
         * @return I don't know :)
         */
        function display()
        {
            return Smarty::display( $this->_templateFile );
        }
        
        /**
         * the Template object is by default not cached
         *
         * @param viewId Not used
         * @return always false
         */
        function isCached( $viewId )
        {
            return false;
        }
    }
?>
