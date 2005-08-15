<?php
/*
Plugin - PlogPoll
Copyright (C) 2005 Matthew Wood
                                                                                
This library is free software; you can redistribute it and/or modify it
under the terms of the GNU Lesser General Public License as published by
the Free Software Foundation; either version 2.1 of the License, or
(at your option) any later version.
*/


include_once(PLOG_CLASS_PATH.
    "class/action/admin/blogowneradminaction.class.php");
include_once(PLOG_CLASS_PATH."class/data/validator/stringvalidator.class.php");
include_once(PLOG_CLASS_PATH."class/data/validator/integervalidator.class.php");
include_once(PLOG_CLASS_PATH.
    "plugins/plogpoll/class/dao/plogpollpolls.class.php");
include_once(PLOG_CLASS_PATH.
    "plugins/plogpoll/class/dao/plogpollpoll.class.php");
include_once(PLOG_CLASS_PATH.
    "plugins/plogpoll/class/view/adminplogpolllistview.class.php");

class AdminPlogPollAddPollAction extends BlogOwnerAdminAction
{
  function AdminPlogPollAddPollAction($actionInfo,$request)
  {
    $this->BlogOwnerAdminAction($actionInfo,$request);
    $this->registerFieldValidator("subject",new StringValidator());
    $this->_view = new AdminPlogPollListView($this->_blogInfo);
  }

  function perform()
  {
    $sub = $this->_request->getValue("subject");
    $rawresponses = $this->_request->getValue("responses");
    $responses = split("\n",$rawresponses);
    $resdata = array();
    for($i = 0; $i < count($responses); $i++)
      $resdata[$i] = 0;
    
    $poll = new PlogPollPoll(-1,$sub,$responses,$resdata,-1,
        0,$this->_blogInfo->getId());
    $pollsmodel = new PlogPollPolls();
    if (!$pollsmodel->addPoll(&$poll))
    {
      $this->_view->setErrorMessage("Failed to add the poll to the database - localize");
      $this->setCommonData();
      return false;
    }

    $this->_view->setSuccessMessage("Added Poll - ". $sub ." - localize");
    $this->setCommonData();

    return true;
  }
}

/* vim:sw=2:ai:expandtab:cin:
*/
?>
