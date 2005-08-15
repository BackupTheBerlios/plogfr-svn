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
include_once(PLOG_CLASS_PATH."plugins/plogpoll/class/view/adminplogpolllistview.class.php");

class AdminPlogPollListViewAction extends BlogOwnerAdminAction
{
  function perform()
  {
    $this->_view = new AdminPlogPollListView($this->_blogInfo);
    $this->setCommonData();

    return true;
  }
}

?>
