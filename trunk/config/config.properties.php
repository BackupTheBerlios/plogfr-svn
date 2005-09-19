<?php
#
# database settings
#
# Installation instructions:
#   NEW INSTALL
#   Leave these values blank,
#   and go to the URL where you installed pLog
#   and look at /wizard.php and type the appropriate
#   values in there.
#
#   This file needs to be writable
#   by whatever user your php scripts run as.
#   The easiest thing to do is to make this file
#   writable by everyone, and then after the wizard
#   completes, remove write privileges from everyone
#   except yourself.
#
#   UPGRADE
#   remove all files from your old plog directory
#   (back them up somewhere, also backup your current
#    database)
#   Upload new pLog files into the same directory,
#   and then copy your old config.properties.php
#   over this file, and then run the wizard.
#   (note, if upgrading between minor releases:
#   1.0 to 1.0.1, etc. you shouldn't run the wizard)

$config["db_host"] = "";
$config["db_username"] = "";
$config["db_password"] = "";
$config["db_database"] = "";
$config["db_prefix"] = "";
?>