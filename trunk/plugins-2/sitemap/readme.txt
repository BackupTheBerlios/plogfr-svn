Plugin: SiteMap
Author: paul@westbrooks.org
Release Date: 2005/06/23
Version: 1.0

Creates Google Sitemap for a blog.  This plugin adds all of the permalinks from a given blog to a site map file.  It can also optionally automatically notify Google that this file has changed.

In order for the site map to be accessible, change plog/tmp/.htacess to allow the sitemap folder to be read by a web browser
<Files "*">
 Order deny,allow
 Deny from all
</Files>

<Files "sitemap">
 Allow from all
</files>

Add the following lines to the plog/.htaccess

<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /

# Point to the sitemap file that is local to the blog
RewriteRule ^sitemap([0-9]+)\.gz$ tmp/sitemap/$1/sitemap.gz [L,NC]

</IfModule>

