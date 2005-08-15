<?php

	include_once( PLOG_CLASS_PATH."class/dao/model.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/hostblock/class/dao/blockedhost.class.php" );

    /**
     * Class that implements the data access model to read information about the
     * hosts blocked in a site.
     * @see BlockedHost
     */
	class BlockedHosts extends Model 
	{

    	function BlockedHosts()
        {
        	$this->Model();
        }

        function getBlockedHost( $id, $blogId = 0 )
        {
        	$query = "SELECT * FROM ".$this->getPrefix()."host_blocking_rules ".
                     "WHERE id = $id";
            if( $blogId > 0 )
            	$query .= " AND blog_id = $blogId";

            $result = $this->Execute( $query );

            if( !$result )
            	return false;

            $row = $result->FetchRow();

            return $this->_fillBlockedHostInformation( $row );
        }

        /**
         * Returns all the 'whitelisted' hosts for the given blog
         *
         * @param blogId The blog identifier
         * @param blockType Wether we'd like to fetch only those hosts that have
         * been blocked from posting comments (BLOCK_COMMENT_POSTING), from accesing the
         * site completely (BLOCK_ACCESS)
         * @param includeGlobal 'true' if we'd like the function to return the hosts that
         * have been blocked by the given blog *AND* the global ones.
         * @return An array of BlockeHost objects with all the information necessary.
         */
        function getBlogBlacklist( $blogId, $blockType = BLOCK_COMMENT_POSTING, $includeGlobal = false )
        {
        	$query = "SELECT * FROM ".$this->getPrefix()."host_blocking_rules ".
                     "WHERE blog_id = $blogId";
            if( $includeGlobal )
            	$query .=" OR blog_id = ".GLOBALLY_BLOCKED_HOST;
            $query .= " AND block_type = $blockType";

            $result = $this->Execute( $query );

            if( !$result )
            	return false;

            $blockedHosts = Array();
            while( $row = $result->FetchRow()) {
            	array_push( $blockedHosts, $this->_fillBlockedHostInformation( $row ));
            }

            return $blockedHosts;
        }

        /**
         * Adds a host to our list of blocked hosts
         *
         * @param blockedHost A BlockedHost object
		 * @return True if successful or false otherwise
		 * @see BlockedHost
         */
        function add( $blockedHost )
        {
        	$query = "INSERT INTO ".$this->getPrefix()."host_blocking_rules
                     (host, mask, blog_id, block_type, list_type, reason) VALUES (".
                     "'".$blockedHost->getHost()."', ".$blockedHost->getMask().
					 ", ".$blockedHost->getBlogId().", ".$blockedHost->getType().
					 ", ".$blockedHost->getBlockList().", '".Db::qstr($blockedHost->getReason())."' )";

            $result = $this->Execute( $query );

            return $result;
        }

        function remove( $id, $blogId = -1 )
        {
        	$query = "DELETE FROM ".$this->getPrefix()."host_blocking_rules
                      WHERE id = $id";
            if( $blogId != -1 )
            	$query .= " AND blog_id = $blogId";

            $result = $this->Execute( $query );

            return $result;
        }

        function update( $blockedHost )
        {
        	$query = "UPDATE ".$this->getPrefix()."host_blocking_rules
                      SET host = '".$blockedHost->getHost()."',
                      mask = ".$blockedHost->getMask().",
                      blog_id = ".$blockedHost->getBlogId().",
                      block_type = ".$blockedHost->getType().",
                      reason = '".Db::qstr($blockedHost->getReason())."'
                      WHERE id = ".$blockedHost->getId();

            $result = $this->Execute( $query );

            return $result;
        }

        /**
         * @private
         */
        function _fillBlockedHostInformation( $row )
        {
        	$blockedHost = new BlockedHost( $row["host"],
                                            $row["mask"],
                                            $row["reason"],
                                            $row["date"],
                                            $row["blog_id"],
                                            $row["block_type"],
                                            $row["list_type"],
                                            $row["id"] );

            return $blockedHost;
        }
    }
?>
