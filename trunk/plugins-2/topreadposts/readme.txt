Plugin: Top Read Posts
Author: Mark Wu
Release Date: 2005/01/23
Version: 1.0

This plugin offers the rank list of articles by number of reads. Usage as follow:

You can use:
1. $topreadposts->isEnabled() to check the plugin is enabled or not. 
2. $topreadposts->getTopReadPosts( $maxPosts , $based ) to get the top read posts.

Where:
1. $$maxPosts is the the max posts you want to show. Default is 10.
2. $based is return the site-wide or blog-wide posts. "BLOG" means blog-wide, and "SITE" means site-wide. Default is "BLOG".

Example:
{if $topreadposts->isEnabled()}
<h2>Top Read Posts</h2>
<ul>  
{assign var=readposts value=$topreadposts->getTopReadPosts()}
{foreach from=$readposts item=readpost}
<li><a href="{$url->postLink($readpost)}">{$readpost->getTopic()} ({$readpost->getNumReads()} Times)</a></li>
{/foreach}
</ul>    
{/if}