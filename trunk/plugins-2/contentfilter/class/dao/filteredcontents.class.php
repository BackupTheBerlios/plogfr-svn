<?php

	include_once( PLOG_CLASS_PATH."class/dao/model.class.php" );
    include_once( PLOG_CLASS_PATH."plugins/contentfilter/class/dao/filteredcontent.class.php" );

    /**
     * Takes care of dealing with fetching filtered contents from the database
     */
	class FilteredContents extends Model 
	{

    	function FilteredContents()
        {
        	$this->Model();
        }

        /**
         * Returns the content that should be filtered, but only the content that
         * has been set up by this blog.
         *
         * @param blogId The blog
         * @return An array filled with FilteredContent objects, or an empty array if
         * none was found
         */
        function getBlogFilteredContents( $blogId )
        {
        	$query = "SELECT * FROM ".$this->getPrefix()."filtered_content WHERE blog_id = $blogId";

            return $this->getFilteredContentFromQuery( $query );
        }

        /**
         * Returns only one rule belonging to the blog
         */
        function getBlogFilteredContent( $ruleId, $blogId )
        {
        	$query = "SELECT * FROM ".$this->getPrefix()."filtered_content WHERE id = $ruleId";
            if( $blogId != 0 )
            	$query .= " AND blog_id = $blogId";

            $result = $this->Execute( $query );

            if( !$result )
            	return false;

            if( $result->RecordCount() == 0 )
            	return false;

            return $this->_mapRowToObject( $result->FetchRow());
        }

        /**
         * Returns the content that should be filtered, but only the content that
         * has been set up by the administrator(s) of the site
         *
         * @return An array filled with FilteredContent objects, or an empty array if
         * none was found
         */
        function getGlobalFilteredContents()
        {
        	$query = "SELECT * FROM ".$this->getPrefix()."filtered_content WHERE blog_id = 0";

            return $this->getFilteredContentFromQuery( $query );
        }

        /**
         * Returns all the contents that have been blocked in the site
         *
         * @return Array of FilteredContent objects
         */
        function getAllFilteredContents()
        {
        	$query = "SELECT * FROM ".$this->getPrefix()."filtered_content";

            return $this->getFilteredContentFromQuery( $query );
        }

        /**
         * @private
         * Given a query, fetches the content
         */
        function getFilteredContentFromQuery( $query )
        {
            $result = $this->Execute( $query );

            if( !$result )	// return an empty array if error
            	return Array();

            $filteredContents = Array();
            while( $row = $result->FetchRow()) {
            	array_push( $filteredContents, $this->_mapRowToObject( $row ));
            }

            return $filteredContents;
        }

        /**
         * Adds a new rule to filter content.
         *
		 * @param filteredContent A FilteredContent object
         * @return Returns true if added successfully or false otherwise.
         */
        function addBlogFilteredContent( $filteredContent )
        {
        	$query = "INSERT INTO ".$this->getPrefix()."filtered_content ".
                     "(reg_exp, blog_id, reason) VALUES (".
                     "'".Db::qstr($filteredContent->getRegExp())."', ".$filteredContent->getBlogId().
					 ",'".Db::qstr($filteredContent->getReason())."')";

            $result = $this->Execute( $query );

			return $result;
        }

        /**
         * Adds a new global rule
         *
         * @param regExp The regular expression we'd like to add
         * @param reason The reason why we'd like to add such rule
         * @return Returns true if added successfully or false otherwise.
         */
        function addGlobalFilteredContent( $regExp, $reason = "" )
        {
        	return $this->addBlogFilteredContent( $regExp, 0, $reason );
        }

        /**
         * Removes a rule from the database
         *
         * @param ruleId The rule we'd like to delete
         * @param blogId The blog to which this rule belogs
         * @return Returns true upon success or false otherwise
         */
        function removeBlogFilteredContent( $ruleId, $blogId )
        {
        	$query = "DELETE FROM ".$this->getPrefix()."filtered_content WHERE blog_id = $blogId AND id = $ruleId";

            $result = $this->Execute( $query );

            return $result;
        }

        /**
         * Removes a global rule
         *
         * @param ruleId The id of the rule we'd like to delete
         * @return Returns true upon success or false otherwise
         */
        function removeGlobalFilteredContent( $ruleId )
        {
        	return $this->removeBlogFilteredContent( $ruleId, 0 );
        }

        /**
         * updates a rule
         *
         * @param rule a FilteredContent object containing the data
         * we'd like to update.
         * @return True upon success or false otherwise.
         */
        function updateFilteredContent( $rule )
        {
        	$query = "UPDATE ".$this->getPrefix()."filtered_content SET ".
                     "blog_id = ".$rule->getBlogId().", ".
                     "reg_exp = '".Db::qstr($rule->getRegExp( true ))."', ".
                     "reason = '".Db::qstr($rule->getReason())."' ".
					 " WHERE blog_id = ".$rule->getBlogId().
					 " AND id = ".$rule->getId().";";

            $result = $this->Execute( $query );

            if( !$result )
            	return false;

            return true;
        }

        /**
         * @private
         * Maps a row from the database to its object
         */
        function _mapRowToObject( $row )
        {
        	$filteredContent = new FilteredContent( $row["reg_exp"], $row["blog_id"],
                                                    $row["reason"], $row["date"],
                                                    $row["id"] );

            return $filteredContent;
        }
    }
?>
