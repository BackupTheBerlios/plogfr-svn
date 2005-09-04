<?php

/**
 * generates a pager for the bloglist
 *
 * @param links
 * @param current
 */
 
define( "BLOGLISTPAGER_DEFAULT_MAX_LINKS", 5 );
 
function smarty_function_plogpager($params, &$smarty)
{
	$mode = $params["mode"];
	
	if( $mode == "list" ) {
		$result = _plogpager_generate_dropdown_list( $params, $smarty );
	}
	else {
		$result = _plogpager_generate_links_list( $params, $smarty );
	}
	
	print $result;
}

/**
 * @private
 * generates a horizontal list of links
 */
function _plogpager_generate_links_list( $params, &$smarty )
{
	// get the number of pages
	$links = $params["links"];
	$numPages = $params["numPages"];
	if( $numPages == "" ) $numPages = count($links);
	$currentPage = $params["current"];
	$maxLinks = $params["maxLinks"];	
	if( $maxLinks == "" ) $maxLinks = BLOGLISTPAGER_DEFAULT_MAX_LINKS;	
	
	if( $numPages > 0 ) {
	   if( $currentPage > 1 )
	       $result .= "<a class=\"pagerLink\" href=\"".$links[$currentPage-1]."\">&laquo;Prev</a>&nbsp;";
	}
	
	$totalLinks = 0;
	foreach( $links as $page => $link ) {
	   if( $page == $currentPage )
	       $result .= "<span class=\"pagerCurrent\">&nbsp;$page&nbsp;</span>&nbsp;";
	   else
            $result .= "<a class=\"pagerLink\" href=\"$link\">&nbsp;$page&nbsp;</a>&nbsp";
        $totalLinks++;
	}
	
	if( $numPages > 0 ) {
	   if( $currentPage < $numPages )
	       $result .= "<a class=\"pagerLink\" href=\"".$links[$currentPage+1]."\">Next&raquo;</a>&nbsp;";
	}	
	
	return $result;
}

/**
 * @private
 * generates a dropdown-list of the links with all the pages, and clicking one of the items
 * automatically take the user to the page
 */
function _plogpager_generate_dropdown_list( $params, &$smarty ) 
{
	// get the number of pages
	$links = $params["links"];
	$numPages = $params["numPages"];
	if( $numPages == "" ) $numPages = count($links);
	$currentPage = $params["current"];
	$maxLinks = $params["maxLinks"];
	if( $maxLinks == "" ) $maxLinks = BLOGLISTPAGER_DEFAULT_MAX_LINKS;
	
	// javascript code that will automatically jump to the selected page
	// upon selecting one of the options from the list
	$result .= '<script type="text/javascript">
	             function onPlogPagerListChange(list) {
				  var index = list.selectedIndex;
				  var value = list.options[index].value;
				  top.location.href = value;
				  return true;
				 }
				</script>';
				 
	// link to previous page
	if( $numPages > 0 ) {
	   if( $currentPage > 1 ) {
	       $result .= "<span class=\"list_action_button\"><a href=\"".$links[$currentPage-1]."\">
					    <img src=\"imgs/icon_left-16.png\" alt=\"Previous\" />
					   </a></span>";
		}
	}	
	
	// main loop to print the pages
	$result .= "<select name=\"plogPager\" onchange=\"onPlogPagerListChange(this.form.plogPager)\">";
	foreach( $links as $linkId => $link ) {
		$result .= "<option value=\"$link\"";
		if( $currentPage == $linkId ) $result .= " selected=\"selected\"";
		$result .= ">$linkId</option>";
	}
	$result .= "</select>";
	
	// link to next page, if any
	if( $numPages > 0 ) {
	   if( $currentPage < $numPages ) {
			$result .= "<span class=\"list_action_button\" <a href=\"".$links[$currentPage+1]."\">
						 <img src=\"imgs/icon_right-16.png\" alt=\"Next\" />
						</a></span>";
						
		}
	}		
	
	return $result;
}
?>
