<?php

// include UK messages, and then just change the ones we don't like
include(PLOG_CLASS_PATH . "locale/locale_en_UK.php" );  

$messages['locale_description'] = 'English/American locale file for pLog';

// As dumb as it is, Americans like the month/day/year format
$messages['date_format'] = '%m/%d/%Y %H:%M';

// British guys spell "center" as "centre"
$messages['resourceCenter'] = 'Resource Center';
$messages['controlCenter'] = 'Control Center';
$messages['pluginCenter'] = 'Plugin Center';

?>
