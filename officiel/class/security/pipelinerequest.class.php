<?php

	include_once( PLOG_CLASS_PATH."class/object/object.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/bloginfo.class.php" );

    /**
     * \ingroup Security
     *
     * This is the parameter that will be used in the pipeline, to communicate
     * with the filters that 'sit' in the pipeline. It carries basic information
     * such as the incoming HTTP request and a reference to the BlogInfo object
     * of the blog that is executing the Pipeline.
     */
	class PipelineRequest extends Object 
	{

    	var $_httpRequest;
        var $_blogInfo;

        /**
         * Constructor.
         *
         * @param httpRequest An array with the HTTP request
         * @param blogInfo A BlogInfo object with information about the blog
         * currently executing the request
         */
        function PipelineRequest( $httpRequest, $blogInfo )
        {
        	$this->Object();

            if( is_array($httpRequest))
            	$this->_httpRequest = new Properties( $httpRequest );
            else
        		$this->_httpRequest = $httpRequest;
                
            $this->_blogInfo    = $blogInfo;
        }

        /**
         * @return Returns the BlogInfo object
         */
        function getBlogInfo()
        {
        	return $this->_blogInfo;
        }

        /**
         * @return Returns a Properties object built from the given HTTP request. Please
         * use the Properties::getValue() method to retrieve values from the request
         */
        function getHttpRequest()
        {
        	return $this->_httpRequest;
        }
    }
?>
