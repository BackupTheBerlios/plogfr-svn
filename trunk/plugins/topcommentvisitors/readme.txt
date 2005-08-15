Plugin: Top Comment Visitors
Author: Mark Wu
Release Date: 2005/01/23
Version: 1.0

This plugin offers the rank list of visitors by number of comments. Usage as follow:

You can use:
1. $topcommentvisitors->isEnabled() to check the plugin is enabled or not. 
2. $topcommentvisitors->getTopCommentVisitors( $maxVisitors , $based ) to get the top comment visitors.

Where:
1. $maxVisitors is the the max visitors you want to show. Default is 10.
2. $based is return the site-wide or blog-wide visitors. "BLOG" means blog-wide, and "SITE" means site-wide. Default is "BLOG".

Example:
{if $topcommentvisitors->isEnabled()}
<h2>Top Comment Visitors</h2>
<ul>  
{assign var=commentvisitors value=$topcommentvisitors->getTopCommentVisitors()}
{foreach from=$commentvisitors item=commentvisitor}
<li><a href="{$commentvisitor.user_url}">{$commentvisitor.user_name} ({$commentvisitor.user_count} Comments)</a></li>
{/foreach}
</ul>    
{/if}