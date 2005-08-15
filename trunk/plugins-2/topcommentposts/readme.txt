Plugin: Top Comment Posts
Author: Mark Wu
Release Date: 2005/01/23
Version: 1.0

This plugin offers the rank list of articles by number of comments. Usage as follow:

You can use:
1. $topcommentposts->isEnabled() to check the plugin is enabled or not. 
2. $topcommentposts->getTopCommentPosts( $maxPosts , $based ) to get the top comment posts.

Where:
1. $maxPosts is the the max posts you want to show. Default is 10.
2. $based is return the site-wide or blog-wide posts. "BLOG" means blog-wide, and "SITE" means site-wide. Default is "BLOG".

Example:
{if $topcommentposts->isEnabled()}
<h2>Top Comment Posts</h2>
<ul>  
{assign var=commentposts value=$topcommentposts->getTopCommentPosts()}
{foreach from=$commentposts item=commentpost}
<li><a href="{$url->postLink($commentpost)}">{$commentpost->getTopic()} ({$commentpost->getTotalComments()} Posts)</a></li>
{/foreach}
</ul>    
{/if}