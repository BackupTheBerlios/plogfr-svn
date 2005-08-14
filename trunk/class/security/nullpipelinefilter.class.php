<?php

	include_once( PLOG_CLASS_PATH."class/security/pipelinefilter.class.php" );

    /**
     * \ingroup Security
     *
     * This is the simplest and fastest filter ever: it does nothing :)
     *
     * @see Pipeline
     * @see PipelineFilter
     */
    class NullPipelineFilter extends PipelineFilter 
    {

    	function NullPipelineFilter( $pipelineRequest )
        {
        	$this->PipelineFilter( $pipelineRequest );
        }
        
        /**
         * Always returns a positive result
         */
        function filter()
        {
        	$result = new PipelineResult();

            return $result;
        }
    }
?>