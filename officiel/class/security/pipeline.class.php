<?php

    /**
     * \defgroup Security
     *
     * The Security module provides a basic implementation of a generic Pipeline to which we can 
     * register "filters", which wil carry out specific actions. Any of the filters can interrupt the
     * processing, depending on the logic of the filter. Please see the Pipeline class for more information.
     */


	include_once( PLOG_CLASS_PATH."class/object/object.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/bloginfo.class.php" );
    include_once( PLOG_CLASS_PATH."class/config/config.class.php" );
    include_once( PLOG_CLASS_PATH."class/security/nullpipelinefilter.class.php" );
    include_once( PLOG_CLASS_PATH."class/security/commentfilter.class.php" );
    include_once( PLOG_CLASS_PATH."class/security/bayesianfilter.class.php" );
    
    /**
     * global array used to hold the list of filters that we're going to use in the pipeline.
     * Now again, more than ever, wish that PHP4 had support for static attributes at the class
     * level... 
     */
    $_pLogPipelineRegisteredFilters = array();

    /**
     * \ingroup Security
     *
     * Implementation of a basic security framework based on a
     * pipeline. Every element of the pipeline implements a simple
     * security mechanism. When one of the filters in the pipeline
     * find a condition that is matched by the incoming request, the
     * request will be blocked and the processing of the pipeline will be stopped.
     *
     * As of pLog 1.0, plugins can also register new filters dynamically via the PluginBase::registerFilter(), which
     * eventually uses the static method Pipeline::registerFilter() Since it is static, this method is not restricted
     * to plugins and can be used by any other class at run time to add new filters.
     *
     * The out of the box implementation of the Pipeline comes with a null filter (a filter that does nothing -- go figure :))
     * and a filter that implements a Bayesian filter for advanced spam protection. See the BayesianFilter class for more information.
     */
	class Pipeline extends Object 
	{

    	/**
         * HTTP request that will be used if the filter is doing
         * some content filtering
         */
    	var $_httpRequest;

        /**
         * the BlogInfo object that has information about the blog
         * that is currently processing the incoming request
         */
        var $_blogInfo;
        
        /**
         * variable to hold the final result of executing the pipeline
         */
        var $_result;

        /**
         * Constructor
         *
         * @param httpRequest The HTTP request
         * @param blogInfo The BlogInfo object with information about the blog
         * that is currently executing this pipeline
         */
    	function Pipeline( $httpRequest, $blogInfo = null )
        {
        	$this->Object();

            $this->_httpRequest = $httpRequest;
            $this->_blogInfo    = $blogInfo;
            
            //global $_pLogPipelineRegisteredFilters;
            //$_pLogPipelineRegisteredFilters = Array();

            $this->_registerDefaultFilters();

            $this->_result;
        }
        
        /**
         * Method that takes care of registering the default filters used in the pipeline.
         *
         * More can be added anytime by using the registerFilter() method.
         * @static
         * @return Always true
         */
        function _registerDefaultFilters()
        {
            $this->registerFilter( "NullPipelineFilter" );
            $this->registerFilter( "CommentFilter" );
            $this->registerFilter( "BayesianFilter" );
            
            return true;
        }
        
        /**
         * Static method that registers a filter externally
         *
         * @param filterClass A class that implements the PipelineFilter interface
         * @static
         * @return Always returns true.
         */
        function registerFilter( $filterClass )
        {
            global $_pLogPipelineRegisteredFilters;
            
            if( !is_array($_pLogPipelineRegisteredFilters))     // make sure that we have an array...
                $_pLogPipelineRegisteredFilters = Array();
                
            $_pLogPipelineRegisteredFilters["$filterClass"] =  $filterClass;
        }

        /**
         * Loads all the filters
         * @private
         */
        /*function _addFilters()
        {
            global $_pLogPipelineRegisteredFilters;
                        
        	$pipelineRequest = new PipelineRequest( $this->_httpRequest, $this->_blogInfo );

        	foreach( $_pLogPipelineRegisteredFilters as $filterClass ) {
            	array_push( $this->_filters, new $filterClass( $pipelineRequest ));
            }

            return true;
        }*/

        /**
         * Processes the pipeline, using the request and blogInfo
         * objects as given in the constructor.
         */
        function process()
        {
            global $_pLogPipelineRegisteredFilters;        
        
        	// check if the pipeline is enabled
            $config =& Config::getConfig();
            if( $config->getValue( "security_pipeline_enabled" ) == false ) {
            	// pipeline is disabled, so everything's fine
            	return new PipelineResult( true );
            }

			// boolean to indicate whether we should run the bayesian filter
			// This is a hack.  We don't want to run the bayesian filter on 
			// a message that will be rejected by another filter.  The only way
			// to know this is to run after all of the other filters have run.
			//
			// Ideally, once a message is rejected, we would want to let all
			// of the filters know about it.  This way they could do something
			// interesting (i.e. train the message as spam, report the ip address
			// and urls to dnsbl services)
			
			// default it to false.
			$runBayesianFilter = false;
			
            // if enabled, then check all the filters
        	foreach( $_pLogPipelineRegisteredFilters as $filterClass ) {
				if ( strcmp( $filterClass, "BayesianFilter" ) == 0 ) {
					$runBayesianFilter = true;
				}
        	    // create an instance of the filter
        	    $pipelineRequest = new PipelineRequest( $this->_httpRequest, $this->_blogInfo );

        	    $filter = new $filterClass( $pipelineRequest );
        	    // and execute it...       	    
            	$result = $filter->filter();
                // if there was an error, we better say so now
                // and quite, making sure that we're keeping the
                // error code
                if( !$result->isValid()) {                
                	$this->_result = $result;
                	return $result;
                }
            }
            
            if ( $runBayesianFilter )
            {
        	    // create an instance of the filter
        	    $pipelineRequest = new PipelineRequest( $this->_httpRequest, $this->_blogInfo );

        	    $filter = new BayesianFilter( $pipelineRequest );
        	    // and execute it...       	    
            	$result = $filter->filter();
            }

            $this->_result = $result;
            return $result;
        }
    }
?>
