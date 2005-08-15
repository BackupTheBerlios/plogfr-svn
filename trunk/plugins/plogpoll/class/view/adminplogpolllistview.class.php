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
    "class/view/admin/adminplugintemplatedview.class.php");

class AdminPlogPollListView extends AdminPluginTemplatedView
{
  function AdminPlogPollListView($blogInfo)
  {
    $this->AdminPluginTemplatedView($blogInfo,"plogpoll","adminpollview");
  }
  function render()
  {
    $polls = new PlogPollPolls();
    $allpolls = $polls->getAllPolls($this->_blogInfo->getId());

    $this->setValue("polls",$allpolls);

    parent::render();
  }
}

/* vim:cin:sw=2:expandtab:ai:
*/
?>
