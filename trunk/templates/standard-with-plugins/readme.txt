Template: Standard with Plugin
Author: Mark Wu
Release Date: 2005/03/24
Version: 1.0

This Template offers you preconfigure plugin sections. 
It will easier for user to understand how plugins work with templates.

Current preconfigure plugins includes:
1. Recent Comments
2. Recent Trackbacks
3. Top Comment Posts
4. Top Comment Visitors
5. Top Read posts
6. Top Trackback Posts
7. Gravatar
8. AuthImage
9. Smileys
10. Drop Case
11. Flickr
12. Del.icio.us
13. Karma
14. Blog Times
15. Guest Book (New)

Notice:
All plugin sections rounded with two {if} statements

{if !empty($plugin)} // To check the plugin is installed or not
 {if $plugin->isEnabled()} // To check the plugin is enabled or not
  Plugin Template Here!!
 {/if}
{if}