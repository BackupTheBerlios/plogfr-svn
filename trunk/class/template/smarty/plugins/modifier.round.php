<?php 
/** 
 * Smarty Modifier round 
 * $round The number we're trying to round (don't try this with strings!!)
 */ 
function smarty_modifier_round($size) 
{ 
    if ($size < pow(2,10)) return $size." bytes";
	if ($size >= pow(2,10) && $size < pow(2,20)) return round($size / pow(2,10), 0)." KB";
	if ($size >= pow(2,20) && $size < pow(2,30)) return round($size /pow(2,20), 1)." MB";
	if ($size > pow(2,30)) return round($size / pow(2,30), 2)." GB";
} 
?>
