<?php

	include_once( PLOG_CLASS_PATH."class/action/admin/blogowneradminaction.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/validator/stringvalidator.class.php" );
	include_once( PLOG_CLASS_PATH."class/dao/customfields/customfields.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php" );
	include_once( PLOG_CLASS_PATH."class/data/validator/stringvalidator.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/admintemplatedview.class.php" );
	include_once( PLOG_CLASS_PATH."class/view/admin/admincustomfieldslistview.class.php" );

    /**
     * \ingroup Action
     * @private
     *
     * adds a custom field to the blog
     */
    class AdminAddCustomFieldAction extends BlogOwnerAdminAction 
	{
	
		var $_fieldName;
		var $_fieldDescription;
		var $_fieldType;
		var $_fieldSearchable;
		var $_fieldHidden;

        function AdminAddCustomFieldAction( $actionInfo, $request )
        {
        	$this->BlogOwnerAdminAction( $actionInfo, $request );
			
			// data validation
			$this->registerFieldValidator( "fieldName", new StringValidator());
			$this->registerFieldValidator( "fieldDescription", new StringValidator());
			$this->registerFieldValidator( "fieldType", new IntegerValidator());
			$this->_form->registerField( "fieldSearchable" );
			$this->_form->registerField( "fieldHidden" );
			$this->_form->registerField( "fieldId" );
			$this->setValidationErrorView( new AdminTemplatedView( $this->_blogInfo, "newcustomfield" ));
        }
		
        /**
         * Carries out the specified action
         */
        function perform()
        {
			// fetch the data
			$this->_fieldName = Textfilter::filterAllHTML($this->_request->getValue( "fieldName" ));
			$this->_fieldDescription = Textfilter::filterAllHTML($this->_request->getValue( "fieldDescription" ));
			$this->_fieldType = $this->_request->getValue( "fieldType" );
			$this->_fieldSearchable = (int)($this->_request->getValue( "fieldSearchable" ) != "" );
			$this->_fieldHidden = (int)($this->_request->getValue( "fieldHidden" ) != "" );
		
			$fields = new CustomFields();
			
			// build the new custom field
			$customField = new CustomField( $this->_fieldName, 
			                                $this->_fieldDescription, $this->_fieldType,
			                                $this->_blogInfo->getId(), 
											$this->_fieldHidden, 
											$this->_fieldSearchable );
											
			// throw the pre-event
			$this->notifyEvent( EVENT_PRE_CUSTOM_FIELD_ADD, Array( "field" => &$customField ));
			
			$result = $fields->addCustomField( $customField );
											   
			if( !$result ) {
				$this->_view = new AdminCustomFieldsListView( $this->_blogInfo );
				$this->_view->setErrorMessage( $this->_locale->tr("error_adding_custom_field" ));
			}
			else {
				$this->_view = new AdminCustomFieldsListView( $this->_blogInfo );
				$this->_view->setSuccessMessage( $this->_locale->pr( "custom_field_added_ok", $customField->getName()));
				
				// throw the post-event if all went fine
				$this->notifyEvent( EVENT_POST_CUSTOM_FIELD_ADD, Array( "field" => &$customField ));
			}
			
			$this->setCommonData();		
		
            return true;
        }
    }
?>