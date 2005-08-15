Plugin: Top Trackback Posts
Author: Mark Wu
Release Date: 2005/01/23
Version: 1.0

This plugin offers the rank list of articles by number of trackbacks. Usage as follow:

You can use:
1. $toptrackbackposts->isEnabled() to check the plugin is enabled or not. 
2. $toptrackbackposts->getTopTrackbackPosts( $maxPosts , $based ) to get the top trackback posts.

Where:
1. $$maxPosts is the the max posts you want to show. Default is 10.
2. $based is return the site-wide or blog-wide posts. "BLOG" means blog-wide, and "SITE" means site-wide. Default is "BLOG".

Example:
{if $toptrackbackposts->isEnabled()}
<h2>Top Trackback Posts</h2>
<ul>  
{assign var=trackbackposts value=$toptrackbackposts->getTopTrackbackPosts()}
{foreach from=$trackbackposts item=trackbackpost}
<li><a href="{$url->postLink($trackbackpost)}">{$trackbackpost->getTopic()} ({$trackbackpost->getNumTrackbacks()} Trackbacks)</a></li>
{/foreach}
</ul>    
{/if}