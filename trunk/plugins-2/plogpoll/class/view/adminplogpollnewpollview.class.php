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

class AdminPlogPollNewPollView extends AdminPluginTemplatedView
{
  function AdminPlogPollNewPollView($blogInfo)
  {
    $this->AdminPluginTemplatedView($blogInfo,"plogpoll","adminnewpoll");
  }
  function render()
  {
    parent::render();
  }
}


/* vim:cin:ai:sw=2:expandtab:
*/
?>
