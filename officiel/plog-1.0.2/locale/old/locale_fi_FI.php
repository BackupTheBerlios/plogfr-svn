<?php
// set this to the encoding that should be used to display the pages correctly
$messages["encoding"] = "iso-8859-1";
$messages["locale_description"] = "Finnish locale file for pLog";
// days of the week
$messages["days"] = Array( "Sunnuntai", "Maanantai", "Tiistai", "Keskiviikko", "Torstai", "Perjantai", "Lauantai" );
// -- compatibility, do not touch -- //
$messages["Maanantai"] = $messages["days"][1];
$messages["Tiistai"] = $messages["days"][2];
$messages["Keskiviikko"] = $messages["days"][3];
$messages["Torstai"] = $messages["days"][4];
$messages["Perjantai"] = $messages["days"][5];
$messages["Lauantai"] = $messages["days"][6];
$messages["Sunnuntai"] = $messages["days"][0];

// abbreviations
$messages["daysshort"] = Array( "Su", "Ma", "Ti", "Ke", "To", "Pe", "La" );
// -- compatibility, do not touch -- //
$messages["Ma"] = $messages["daysshort"][1];
$messages["Ti"] = $messages["daysshort"][2];
$messages["Ke"] = $messages["daysshort"][3];
$messages["To"] = $messages["daysshort"][4];
$messages["Pe"] = $messages["daysshort"][5];
$messages["La"] = $messages["daysshort"][6];
$messages["Su"] = $messages["daysshort"][0];

// months of the year
$messages["months"] = Array( "Tammikuu", "Helmikuu", "Maaliskuu", "Huhtikuu", "Toukokuu", "Kesäkuu", "Heinäkuu", "Elokuu", "Syyskuu", "Lokakuu", "Marraskuu", "Joulukuu" );
// -- compatibility, do not touch -- //
$messages["Tammikuu"] = $messages["months"][0];
$messages["Helmikuu"] = $messages["months"][1];
$messages["Maaliskuu"] = $messages["months"][2];
$messages["Huhtikuu"] = $messages["months"][3];
$messages["Toukokuu"] = $messages["months"][4];
$messages["Kesäkuu"] = $messages["months"][5];
$messages["Heinäkuu"] = $messages["months"][6];
$messages["Elokuu"] = $messages["months"][7];
$messages["Syyskuu"] = $messages["months"][8];
$messages["Lokakuu"] = $messages["months"][9];
$messages["Marraskuu"] = $messages["months"][10];
$messages["Joulukuu"] = $messages["months"][11];

$messages["message"] = "Viesti";
$messages["error"] = "Virhe";

$messages["date"] = "Pvm";

// miscellaneous texts
$messages["of"] = "of";
$messages["recently"] = "Äskettäin...";
$messages["comments"] = "Kommentit";
$messages["comment on this"] = "Kommentoi";
$messages["my_links"] = "Linkit";
$messages["archives"] = "Arkisto";
$messages["search"] = "Etsi";
$messages["calendar"] = "Kalenteri";
$messages["categories"] = "Kategoriat";
$messages["search_s"] = "Etsi";
$messages["link_tracker"] = "Linkin jäljitys";
$messages["search_this_blog"] = "Etsi tästä blogista:";
$messages["about_myself"] = "Minä?";
$messages["permalink_title"] = "Permlinkki arkistoon";
$messages["permalink"] = "Permlink";
$messages["posted_by"] = "Kirjoittanut";
$messages["on_the"] = "";
$messages["page"] = "sivu";
$messages["posted"] = "lähetetty";

$messages["reply"] = "Vastaa";


// add comment form
$messages["add_comment"] = "Lisää kommentti";
$messages["comment_topic"] = "Otsikko";
$messages["comment_text"] = "Viesti";
$messages["comment_username"] = "Nimesi";
$messages["comment_email"] = "Sähköposti (jos on)";
$messages["comment_url"] = "Kotisivut/blogi (jos on)";
$messages["comment_send"] = "Lähetä";
$messages["comment_added"] = "Kommentti lisätty!";
$messages["comment_add_error"] = "Virhe lisättäessä kommenttia!";


$messages["article_does_not_exist"] = "Tätä viestiä ei ole";
$messages["no_posts_found"] = "Ei osumia";
$messages["user_has_no_posts_yet"] = "Kirjoittajalla ei ole vielä yhtään viestiä";

$messages["info_about_myself"] = "Tietoa minusta...";
$messages["back"] = "Takaisin";

$messages["back_top"] = "Huipulle";

$messages["post"] = "Viesti";

$messages["trackbacks_for_article"] = "Trackbackit tälle artikkelille";
$messages["trackback_excerpt"] = "Lainaus";
$messages["trackback_weblog"] = "Weblog";

$messages["search_results"] = "Haun tulokset";
$messages["search_matching_results"] = "Seuraavat viestit sopivat hakusanoihisi: ";
$messages["search_no_matching_posts"] = "Ei osumia";

$messages["see_all_link"] = "Klikkaa tästä nähdäksesi kaikki viestit";

$messages["read_more"] = "(Lisää)";

$messages["anonymous_poster"] = "Nimetön kirjoittaja";

$messages["syndicate"] = "Feedit";

$messages["main"] = "Etusivulle";

////// error messages /////
$messages["error_fetching_article"] = "Tätä viestiä ei löytynyt.";
$messages["error_fetching_articles"] = "Viestejä ei voitu hakea.";
$messages["error_trackback_no_trackback"] = "No trackbacks were found for the article.";
$messages["error_incorrect_article_id"] = "Viestin ID ei ole oikea.";
$messages["error_incorrect_blog_id"] = "Blogin ID ei ole oikea.";
$messages["error_comment_without_text"] = "Kommentissasi ei ole tekstiä.";
$messages["error_comment_without_name"] = "Kommentissasi ei ole nimeä/nikkiä.";
$messages["error_adding_comment"] = "Virhe lisättäessä kommenttia tietokantaan.";
$messages["error_incorrect_parameter"] = "Väärä banaani?!.";
$messages["error_parameter_missing"] = "Jotain puuttuu.";
$messages["error_blog_has_no_links"] = "Ei linkkejä.";
$messages["error_comments_not_enabled"] = "Kommentointi on poissa päältä.";

/////////////////                                          //////////////////
///////////////// STRINGS FOR THE ADMINISTRATION INTERFACE //////////////////
/////////////////                                          //////////////////


////// help messages for the administration interface /////
$messages["newPost"] = "<p>Use this page to add a new post to your journal. You should provide a topic or subject
for your post as well as some text for your post. Once you have finished, press the <b>'Add'</b> button and the post
will automatically be included in your page. Please note that you have to set the status of the post
to <b>'Published'</b> if you want it to appear in front page. Use the <b>'Draft'</b> status when you can't finish posting
now but you would like to save what you have typed so far for later revision.</p>
<p>You can also classify the post under any of the categories you have previously created. Simply set
the <b>'Category'</b> field to the one you most like.</p>
<p>If you would like to receive an email notifying about a new post, please check the corresponding
checkbox.</p>
<p>Check the box where it says </b>'Find links in the post...'</b> if after adding the post, you
would like to send trackback pings to the hosts that support it. Your post will be scanned for
links and you will have the possibility to choose which ones to send trackback pings to.</p>";

$messages["addPost"] = "<p>Your post has been successfully added to the database. Now you can select
to which hosts you would like to send a trackback ping, so that they know you have written about them
and can <i>track you back</i>.</p>";

$messages["editComments"] = "There are all the comments that have been posted for the given post. Comments
can not be edited but they can be deleted. The only mandatory field when posting comments is the
\"name\" field, so the E-mail and Url columns could be empty. The IP Address field is the
original IP address where this comment was posted from. You can delete
as many as you need by checking the corresponding <b>'Delete'</b> checkbox and pressing the
<b>'Delete selected'</b> button.";

$messages["postStats"] = "<p>These are the statistics about the selected post. The first one is how
many times this article has been read, but please keep in mind that this statistic might be
meaningless if you have disabled the <b>'Read more...'</b> feature in the <b>'Blog Settings'</b>
section.</p>
<p>The referrers are the urls of all the hosts that visited this post, and the trackbacks table represents
how many trackback pings have been received for this post. They can't be deleted or modified.</p>";

$messages["editLinks"] = "<p>This is a list with all the links that have been added. Like posts, every
link can be sorted in different categories and then displayed in the main page for visitors to see.</p>
<p>For every link, you will see here its name, the url where it is pointing to and under which category
it has been sorted. Finally you can also delete any of the links.</p>";

$messages["newLink"] = "<p>You can add a new link from here. You have to provide at least a valid
url and a name for the link. The description field is optional but useful to have more information
about the link. You need at least one link category before you can add any link.</p>";

$messages["editLinkCategories"] = "<p>This is a list with all the link categories that have been
created. Like with posts, you need at least one link category before you can add any link. Clicking
on the <b>'Links'</b> column will show all the links that belong to the category.</p>";

$messages["newLinkCategory"] = "<p>The only thing you need to provide in order to have a new
link category is a descriptive name for the category. Once the link category has been created,
it will be available for links to be categorized under.</p>";

$messages["userSettings"] = "<p>Things related to your user profile can be changed from this
page. Please note that your username cannot be changed.<ul>
<li><b>Password, Confirm Password</b>: If you would like to change your password, please type it in
the first text box. Do the same in the second box to confirm that you entered the same password.</li>
<li><b>Email address</b>: Please set this to a valid email address if you would like to use features
such as the notification when a comment is received to a post. It is used only for internal
purposes and will not be publicly displayed.</li>
<li><b>Bio</b>: You can type here some information about yourself. It can be left empty.</li>
</ul></p>";

$messages["Stats"] = "<p>You can see from here all the referrers that have hit this site in the past.
The <b>'Article'</b> column reflects which article was visited by the referrer or the value <b>'0'</b>
if the referrer visited the main page or any other page which was not an article. Finally, the
<b>'Last hit date'</b> column is the time of the last hit received from that referrer.</p>";

$messages["editLink"] = "<p>You have to provide at least a url and a name for the link. The link must also
be categorized under a category.</p>";

$messages["editLinkCategory"] = "Please provide a new name for the link category you are updating.</p>";

$messages["blogSelect"] = "Please select one of the operations from the menu.";

$messages["Error"] = "There was an error while executing the requested operation. Please see
the main page for more information regarding the error.";

$messages["Message"] = "Please see the main page for more information regarding the message.";

//////// strings for the administration interface ///////



$messages["admin_interface_title"] = "pLog Administrative Interface";
$messages["administration"] = "Administration";
$messages["help"] = "Help";
$messages["plog_help"] = "pLog Help";
$messages["new_post"] = "New Post";
$messages["posts"] = "Posts";
$messages["admin_categories"] = "Categories";
$messages["admin_links"] = "Links";
$messages["link_categories"] = "Link Categories";
$messages["settings"] = "Settings";
$messages["logout"] = "Logout";

// new post page
$messages["topic"] = "Topic";
$messages["text"] = "Text";
$messages["category"]  = "Category";
$messages["status"] = "Status";
$messages["status_draft"] = "Draft";
$messages["status_published"] = "Published";
$messages["status_deleted"] = "Deleted";
$messages["status_all"] = "All";
$messages["send_notification"] = "Notify me every time there is a comment.";
$messages["send_trackback_pings"] = "Find links in the post and send trackback pings to the links that support the feature.";
$messages["add_post"] = "Blog this!";

$messages["xmlrpc_ping_ok"] = "XML-RPC Ping was correctly sent to ";
$messages["error_sending_xmlrpc_ping"] = "There was an error sending an XML-RPC Ping to ";
$messages["error_sending_xmlrpc_ping_message"] = "Error message was: ";

$messages["preview"] = "Preview";
$messages["post_added"] = "Post added";
$messages["you_will_be_notified"] = "Additionally, You will be notified whenever there is some activity in this post.";
$messages["post_added_not_published"] = "Post added but not published.";
$messages["error_adding_post"] = "Error adding the post!";
$messages["error_must_fill_all_fields"] = "You  must fill in all the fields!";
$messages["error_must_have_one_category"] = "You need to have at least one post category before adding a post";

// send trackbacks page
$messages["send_trackback_pings"] = "Send Trackback Pings";
$messages["links_found"] = "The following links were found in your post. Please check the ones you
would like to try to send a trackback ping (please note that this may take a while)";
$messages["trackbacks_no_urls_selected"] = "No urls were selected and therefore no trackback pings were sent.";
$messages["trackbacks_received_ok"] = "The following hosts received the trackback ping successfully:";
$messages["trackbacks_no_trackback"] = "The following link did not have a valid trackback url: ";
$messages["trackbacks_problems_sending"] = "There were some problems while sending the trackback pings to the following hosts.
You can try to reach them again if you wish.";
$messages["trackbacks_received_all_hosts"] = "All hosts successfully received the trackback ping.";
$messages["ping_selected"] = "Ping selected sites";

// edit posts
$messages["author"] = "Author";
$messages["category_all"] = "All";
$messages["author_all"] = "All";
$messages["update"] = "Update";
$messages["date"] = "Date";
$messages["stats"] = "Stats";
$messages["delete"] = "Delete";

$messages["delete_selected"] = "Delete Selected";

// edit post
$messages["edit_post"] = "Edit Post";
$messages["error_getting_post_to_update"] = "There was an error fetching the post selected for update.";
$messages["error_updating_post_in_database"] = "Error updating the post in the database.";
$messages["post_successfully_updated"] = "Post successfully updated.";
$messages["notification_removed"] = "The notification you had for this article has been removed.";

// post statistics
$messages["statistics_for_post"] = "Statistics for post ";
$messages["error_fetching_post"] = "There was an error fetching the post.";
$messages["times_post_has_been_read"] = "Times post has been read: ";
$messages["referers"] = "Referrers";
$messages["id"] = "Id";
$messages["url"] = "Url";
$messages["hits"] = "Hits";
$messages["trackbacks"] = "Trackbacks";

// post comments
$messages["error_fetching_comments"] = "Error fetching article comments";
$messages["comments_for_post"] = "Comments for post ";
$messages["email"] = "E-Mail";
$messages["ip_address"] = "IP Address";

// delete comments
//*** NEW ***//
// please remove these comments after translating these lines
$messages["error_no_comments_selected"] = "No comments were selected to delete.";
$messages["error_deleting_comment"] = "There was an error deleting the comment ";
$messages["comment_deleted_ok"] = "Comment with topic \"%s\" deleted successfully.";
//*** NEW ***//
// please remove these comments after translating these lines


// categories list
$messages["category_name"] = "Name";

// removing posts
$messages["post_cannot_be_deleted"] = "Post can not be deleted";
$messages["no_posts_selected"] = "There were no posts selected to delete.";
// %s = subject of the post, %d = identifier of the post. feel free to change its order
// but if you remove them there will be no information about which post was removed...
$messages["error_deleting_post"] = "Error deleting post \"%s\" (id = %d)";
$messages["post_deleted_ok"] = "Post \"%2\$s\" successfully deleted (id = %1\$d)";

// delete categories
$messages["no_categories_selected"] = "There were no categories selected to delete.";
$messages["error_category_has_articles"] = "Could not delete category \"%s\" because there is at least one
article categorized under it. Please remove the article(s) first and then try again.";
$messages["error_deleting_category"] = "Error deleting category \"%s\" from the database.";
$messages["category_deleted_ok"] = "Category \"%s\" successfully deleted.";

// add category
$messages["add_new_category"] = "Add New Category";
$messages["add_new_category_info"] = "Please provide a valid name for the new category.";
//*** NEW ***//
// please remove these comments after translating these lines
$messages["category_added_ok"] = "Article category added successfully.";
$messages["error_adding_article_category"] = "There wasn an error adding the new article category.";
//*** NEW ***//
// please remove these comments after translating these lines

// edit categories
$messages["edit_category"] = "Edit Category";
$messages["please_provide_valid_category_name"] = "Please provide a valid name for the category.";

// edit category
//*** NEW ***//
// please remove these comments after translating these lines
$messages["error_incorrect_category_id"] = "Incorrect article category identifier";
//*** NEW ***//
// please remove these comments after translating these lines

// update the category
$messages["error_fetching_category"] = "There was an error fetching the category.";
$messages["error_updating_category"] = "There was an error while updating the category.";
//*** NEW ***//
// please remove these comments after translating these lines
$messages["error_empty_category_name"] = "You must provide a valid name for the category.";
//*** NEW ***//
// please remove these comments after translating these lines
$messages["category_updated_ok"] = "Category updated successfully.";

// edit links
$messages["link_name"] = "Name";
$messages["link_url"] = $messages["url"];
$messages["link_category"] = $messages["category"];
$messages["link_description"] = "Description";
$messages["links"] = "Links";

// edit a link
$messages["error_provide_name_and_url"] = "You must at least provide a name and an url for the link.";
$messages["error_invalid_link_id"] = "The link identifier is invalid or missing.";
$messages["error_fetching_link"] = "There was an rrror fetching the link.";
$messages["error_updating_link"] = "There was an error updating the link.";
$messages["link_updated_ok"] = "Link successfully updated!";
$messages["error_fetching_link_categories"] = "There was an error fetching the link categories.";

// add a link
$messages["add_new_link"] = "Add New Link";
$messages["add_link"] = "Add Link";
$messages["error_adding_link"] = "There was an error while adding the link.";
$messages["link_added_ok"] = "Link successfully added.";
$messages["error_provide_name_and_url"] = "You need to provide at least a valid name and address.";
$messages["error_must_have_one_link_category"] = "You must have at least one link category before adding any link.";

// delete a link
$messages["error_no_links_selected"] = "No links were selected to delete.";
$messages["error_removing_link"] = "Error removing link \"%s\" from the database.";
$messages["link_deleted_ok"] = "Link \"%s\" successfully removed from the database.";

// edit link categories
$messages["add_link_category"] = "Add New Link Category";
$messages["link_categories_help"] = "You must have at least one link category before adding any link.";
$messages["link_category_name"] = "Name";
$messages["link_category_links"] = "Links";

// new link category
$messages["new_link_category_info"] = "Link categories will help you to classify the different links you
can have. You can also later on show your links grouped using these categories in the main page.";
$messages["add_link_category"] = "Add Link Category";
$messages["error_provide_link_category_name"] = "You must provide a valid name for the link category.";
$messages["error_adding_link_category"] = "There was an error while adding the link category.";
$messages["link_category_added_ok"] = "Link category successfully added.";

// edit link category
$messages["edit_link_category"] = "Edit Link Category";
$messages["error_updating_link_category"] = "There was an error updating the link category.";
$messages["link_category_updated_ok"] = "Link category updated successfully.";
$messages["error_fetching_link_category"] = "Error fetching the link category.";
$messages["error_incorrect_link_category_id"] = "Incorrecct link category identifier";


// delete link categories
$messages["error_no_link_category_selected"] = "No link categories were selected to delete.";
$messages["error_links_in_link_category"] = "Category \"%s\" can not be deleted because it has links categorized
under it. Please remove first all the links and then try again.";
$messages["error_removing_link_category"] = "Error removing the category \"%s\".";
$messages["link_category_deleted_ok"] = "Link category \"%s\" successfully removed.";
// this error is shown when for some reason the category could not be fetched from the database
// and we can't show its name
$messages["error_removing_link_category_2"] = "Error removing link category with id = %d";

// blog settings page
$messages["blog_settings"] = "Blog Settings";
$messages["user_profile"] = "User Profile";
$messages["plugin_center"] = "Plugin Center";
$messages["statistics"] = "Statistics";
$messages["blog_name"] = "Blog name";
$messages["long_blog_name"] = "Longer, descriptive text about this blog";
$messages["language_used"] = "Language used to display the texts and dates";
$messages["items_main_page"] = "How many items would you like to show in the main page?";
$messages["items_as_recent"] = "How many items would you like to show as \"Recent\"?";
$messages["template_used"] = "Choose a template that will define the look of your blog";
$messages["cut_posts"] = "Cut posts that are too long and and a \"More...\" link?";
$messages["cut_posts_after_characters"] = "How many characters would you like to allow before cutting the post?";
$messages["enable_wysiwyg_edition"] = "Enable WYSIWYG edition of texts (only available for Internet Explorer 5.5 or higer and Mozilla 1.3b or higher)?";
$messages["enable_comments"] = "Enable comments for all posts?";
$messages["yes"] = "Yes";
$messages["no"] = "No";
$messages["error_invalid_locale"] = "Invalid value for the locale settings";
$messages["error_incorrect_max_recent_items"] = "You must provide a valid value for the number of recent items you
would like to show.";
$messages["error_incorrect_number_of_posts"] = "You must provide a valid value for the number of posts you
would like to show on the main page.";
$messages["error_incorrect_template"] = "The value for the template is not correct.";
$messages["error_no_blog_name"] = "You must provide a valid name for your blog.";
$messages["error_incorrect_show_more_threshold"] = "You must provide a valid value for the
number of characters to show of a post before cutting it and adding the \"More...\" link.";
$messages["error_updating_settings"] = "There was an error while updating the settings of the blog.";
$messages["blog_settings_updated_ok"] = "Blog settings updated succesfully!";
$messages["permanent_blog_url"] = "Permanent URL for this blog (read only)";

// user profile page
$messages["username"] = "Username";
$messages["password"] = "Password";
$messages["confirm_password"] = "Confirm Password";
$messages["email_address"] = "Email address";
$messages["bio"] = "Bio";
$messages["empty_no_change"] = "Leave empty for no change";
$messages["user_settings_updated_ok"] = "User settings updated successfully.";
$messages["error_updating_user_settings"] = "Error updating user settings.";
$messages["error_passwords_dont_match"] = "Sorry, passwords do not match.";
$messages["error_incorrect_password"] = "Sorry, the password is not correct.";
$messages["error_incorrect_email_address"] = "Email address is not valid.";

// plugin center page
$messages["plugins_available"] = "This is a list of the plugins available to use in the templates";
$messages["identifier"] = "Identifier";
$messages["description"] = "Description";
$messages["error_plugins_disabled"] = "Support for plugins has been disabled in this site.";

// statistics page
$messages["statistics_info"] = "An article identifier of 0 means that those were incoming hits to the main
site, not to any particular article.";
$messages["article_id"] = "Article Id";
$messages["last_hit_date"] = "Last Hit Date";
$messages["error_fetching_referers"] = "Error fetching the referrers for this site";


// login screen
$messages["login_page_title"] = "pLog Administrative Interface";
$messages["login"] = "Login";
$messages["welcome_message"] = "Welcome to pLog";
$messages["error_incorrect_username_or_password"] = "Sorry, Incorrect username or password.";
$messages["error_dont_belong_to_any_blog"] = "Sorry, you don't belong to any blog yet.";
$messages["error_no_username_or_password"] = "Please provide a valid username or password.";
$messages["choose_one_blog"] = " You belong to the following blogs. Choose one to work on now";
$messages["continue"] = "Continue";
$messages["logout_message"] = "You have been successfully logged out.";
$messages["logout_message_2"] = "<a href=\"admin.php\">Click here</a> to log in again, or
<a href=\"%1\$s\">here to go to %2\$s</a>.";
$messages["logout_title"] = "Logged out";
$messages["error_access_forbidden"] = "Access is forbidden. You must authenticate first here.";

/////////////////////////////////////////////////////////////////////
//
//
// new strings added for 0.2
//
//
////////////////////////////////////////////////////////////////////
$messages["site_admin"] = "Site Admin";
$messages["site_stats"] = "Site Statistics";
$messages["add_user"] = "Add User";
$messages["users"] = "Users";
$messages["add_blog"] = "Add Blog";
$messages["blogs"] = "Blogs";
$messages["locales"] = "Locales";
$messages["add_locale"] = "Add Locale";
$messages["templates"] = "Templates";
$messages["add_template"] = "Add Template";
$messages["global_settings"] = "Global Settings";
$messages["site_settings"] = "Site Settings";
$messages["help_comments_enabled"] = "Enables or disables comments for the whole site.";
$messages["help_beautify_comments_text"] = "Respects user formatting when posting a comment.";
$messages["help_rdf_enabled"] = "Enables or disables the generation of an RDF feed with the latest posts.";
$messages["help_temp_folder"] = "Folder that will be used by pLog to carry out some operations that need a temporary folder.";
$messages["help_base_url"] = "This URL will be used to generate correct URLs, so please set it to the correct value";
$messages["help_show_posts_max"] = "How many posts will be shown in the main page by default.";
$messages["help_recent_posts_max"] = "How many posts will be shown as recent, by default.";
$messages["help_template_folder"] = "This is where the templates used by pLog can be found.";
$messages["help_default_template"] = "The template that will be given by default to new blogs.";
$messages["help_defalut_locale"] = "The default locale settings that will be used for new blogs and in the login page of the administration interface.";
$messages["help_html_allowed_tags_in_comments"] = "HTML tags that will not be removed from comments posted by users.";
$messages["help_referer_tracker_enabled"] = "Adds very basic information from about the referrer to the database, if the referrer is available when receiving a request.";
$messages["help_rss_parser_enabled"] = "Enables or disables the RSS parser that is available in the templates.";
$messages["help_show_more_enabled"] = "Enables or disables the \"More...\" feature by default.";
$messages["help_show_more_threshold"] = "How many characters should be left before the more link is added.";
$messages["help_update_article_reads"] = "Whether to update or not the internal counter representing the number of times each article has been read.";
$messages["help_request_format_mode"] = "\"Plain\" mode will generate normal URLs while \"Search Engine Friendly\" will generate URLs that are easier to read and that will be parsed by search engines. Requires Apache and the possibility to use a .htaccess file";
$messages["help_xmlrpc_ping_enabled"] = "Whether to send an XMLRPC notification to the hosts configured below every time a post is added.";
$messages["help_xmlrpc_ping_hosts"] = "List of hosts that support XMLRPC notifications. Please put different hosts in different lines, as many as needed.";
$messages["help_trackback_server_enabled"] = "Whether to accept or not incoming trackback requests.";
$messages["help_htmlarea_enabled"] = "Enables or disables the WYSIWYG editor of posts.";
$messages["help_plugin_manager_enabled"] = "Enables or disables plugins.";
$messages["help_check_email_address_validity"] = "When registering a new blog, users are asked for a valid email address which will be verified for authenticity if this is set to true.";
$messages["help_summary_page_show_max"] = "How many items should be shown in the summary page.";
$messages["help_minimum_password_length"] = "How many characters should have at least a password.";
$messages["help_users_can_add_templates"] = "Whether users are allowed to add new blog-specific templates or not to their blogs.";
$messages["help_email_service_enabled"] = "Enables or disables the email service, used to send for example article notifications.";
$messages["post_notification_source_address"] = "Address that will be used as the From: field when sending out emails.";
$messages["help_email_service_type"] = "Method that will be used to send emails. Please choose one of them and do not forget to check the settings below.";
$messages["help_smtp_host"] = "If using SMTP as the email sending method, this is the host that will be used to send the messages.";
$messages["help_smtp_port"] = "Port in the host above specified where the SMTP server is running.";
$messages["help_smtp_use_authentication"] = "If the SMTP server supports authentication and would like to use it, please enable this feature and see the two settings below.";
$messages["help_smtp_username"] = "Username that will be used when sending emails using SMTP and authentication has been enabled.";
$messages["help_smtp_password"] = "Password that will be used when sending emails using SMTP and authentication has been enabled.";
$messages["help_uploads_enabled"] = "Enables or disables the uploading of files. This feature will affect the uploading of new template sets and the adding of files to current existing template sets.";
$messages["help_maximum_file_upload_size"] = "Maximum size in bytes of files uploaded by users.";
$messages["help_upload_forbidden_files"] = "List of file patterns that are not allowed to be uploaded. You can specify as many as needed separated by a blank space.";
$messages["help_path_to_tar"] = "Path where the 'tar' tool can be found.";
$messages["help_path_to_gzip"] = "Path where the 'gzip' tool can be found.";
$messages["help_path_to_bz2"] = "Path where the 'bzip2' tool can be found.";
$messages["help_path_to_unzip"] = "Path where the 'unzip' tool can be found.";

$messages["add_user_give_information"] = "Please enter the following information to create a new user.";

$messages["site_registered_users"] = "These are all the users registered in this server.";

$messages["add_blog_give_information"] = "Please enter the following information to create a new blog.";
$messages["blog_title"] = "Blog title";
$messages["blog_owner"] = "Blog owner";

$messages["site_registered_blogs"] = "These are all the blogs registered in this site.";
$messages["edit_users"] = "Edit Users";

$messages["upload_locale"] = "Upload locale";
$messages["use_this_form_to_upload_locale"] = "  Use this form to upload a new locale file to this server. If you don't have the possibilityto upload files, please see the form below.";
$messages["locale_file"] = "Locale file";
$messages["manually_add_locale"] = "Manually Add Locale";
$messages["use_this_form_if_cant_upload_locale"] = "Use this second form if you don't have the possibility of uploading files to your server. The file must have been copied to the default locale folder before executing this operation. Otherwise it will result in an error.";
$messages["locale_code"] = "Locale code";
$messages["locale_encoding"] = "Encoding";

$messages["template_will_be_available_for_all"] = "The new template will automatically become available to all the blogs in this site.";

$messages["use_this_form_to_upload_template"] = "  Use this form to upload a new template set file to this server. If you don't have the possibility to upload files, please see the form below . Template sets must be packed in zip, tar.gz or tar.bz2 files in order to be uploaded.";
$messages["locale_file"] = "Locale file";
$messages["upload_template"] = "Upload template";
$messages["manually_add_template"] = "Manually Add Template";
$messages["use_this_form_if_cannot_upload_template"] = " Use this second form if you don't have the possibility of uploading files to your server. The file must have been copied to the default template folder before executing this operation. Otherwise it will result in an error.";
$messages["template_id"] = "Template Identifier";

$messages["templates_available_for_all"] = "This templates are available to all the blogs in this site.";
$messages["add_file"] = "Add File";

$messages["setting_name"] = "Name";
$messages["setting_value"] = "Value";
$messages["setting_description"] = "Description";

$messages["plain"] = "Plain";
$messages["search_engine_friendly"] = "Search Engine Friendly";

$messages["general_settings"] = "General Settings";
$messages["helper_tools_settings"] = "Helper Tools Settings";
$messages["uploads_settings"] = "Uploads Settings";
$messages["email_settings"] = "Email Settings";

$messages["number_blogs"] = "Number of blogs";
$messages["number_users"] = "Number of users";
$messages["number_posts"] = "Number of posts";
$messages["number_posts_today"] = "Number of posts today";
$messages["number_posts_this_month"] = "Number of posts this month";

$messages["date"] = "Date";
$messages["time"] = "Time";

$messages["comments_order"] = "Order in which comments appear:";
$messages["oldest_first"] = "Oldest first";
$messages["newest_first"] = "Newest first";

$messages["blog"] = "Blog";
$messages["blog_id"] = "Blog Numerical Identifier";

$messages["blog_users"] = "Blog Users";
$messages["available_users"] = "Available Users";
$messages["add"] = "Add";
$messages["remove"] = "Remove";

$messages["user_id"] = "User Numerical Identifier";

$messages["new_password"] = "New Password";
$messages["has_administrator_privileges"] = "Has administrator privileges";
$messages["related_to_the_following_blogs"] = "Related to the following blogs";

$messages["add_user_to_blog_form"] = " This form will allow you to add a user to your blog. The user will only be allowed to add or edit posts, but he or she will not be allowed to change any of the blog settings.";
$messages["add_user_enter_username"] = " Please enter the username of the user you would like to add. The user must have registered in this server, otherwise this will cause an error.";
$messages["add_user_send_notification"] = "Send a notification email to this user.";
$messages["add_user_type_notification"] = "Type some text here to be sent to this user";

$messages["following_users_have_permissions"] = " The following users are part of this blog. They can add, edit and remove posts but cannot change any of the settings and behaviour of this site.";
$messages["revoke_permissions"] = "Revoke Permissions";

$messages["add_blog_template"] = "Add Blog Template";
$messages["manually_add_blog_template"] = "Manually Add Blog Template";
$messages["template_available_only_for_this_blog"] = "This template will be made available only for this blog.";
$messages["use_form_to_upload_blog_template"] = "Use this form to upload a new template set file to this server. If you don't have the possibility to upload files, please see the form below. Template sets must be packed in zip, tar.gz or tar.bz2 files in order to be uploaded.";
$messages["use_form_if_cannot_upload_blog_template"] = "Use this second form if you don't have the possibility of uploading files to your server. The file must have been copied to the default template folder before executing this operation. Otherwise it will result in an error.";

$messages["blog_templates"] = "Blog Templates";
$messages["templates_only_available_for_this_blog"] = "The following templates are only available to this blog.";

$messages["add_file_to_blog_template"] = "Add File to Blog Template"; $messages["upload_file_to_blog_template"] = "Please upload the file you would like to add to the template set.";

$messages["error_user_id_incorrect"] = "Incorrect user identifier.";
$messages["error_incorrect_user_id"] = $messages["error_user_id_incorrect"];
$messages["error_fetching_user_information"] = "There was an error fetching the user information.";
$messages["error_password_incorrect"] = "The password is too short or invalid.";
$messages["error_updating_user_settings"] = "I could not update the settings for the given user.";
$messages["user_settings_updated_ok"] = "Settings for user \"%s\" updated successfully.";
$messages["error_no_users_selected_to_add"] = "No users were selected to add.";
$messages["user_added_to_blog_ok"] = "The user \"%s\" has been added to the blog.";
$messages["error_adding_user_to_blog"] = "There was an error adding the user \"%s\" to the blog.";
$messages["error_no_users_selected_to_remove"] = "No users were selected to remove.";
$messages["user_removed_from_blog_ok"] = "The user \"%s\" has been removed from the blog.";
$messages["error_removing_user_from_blog"] = "There was an error removing the user \"%s\" from the blog.";

$messages["error_incorrect_plugin_id"] = "The plugin identifier is incorrect.";
$messages["error_configuring_plugin"] = "There was an error configuring the plugin: ";
$messages["site_config_saved_ok"] = "Site configuration was successfully saved.";
$messages["error_saving_site_config"] = "There was a problem saving the configuration.";

$messages["error_incorrect_blog_owner"] = "The user chosen as the blog owner does not exist.";
$messages["error_updating_blog_settings"] = "There was an error while updating the settings for blog \"%s\"";
$messages["blog_settings_updated_ok"] = "The settings for blog \"%s\" were updated successfully.";

$messages["error_fetching_users"] = "There was an error while fetching the users in this site.";

$messages["error_fetching_blogs"] = "There was an error while fetching the blogs in this site.";

$messages["error_incorrect_template_id"] = "The template identifier is not valid or does not exist.";

$messages["error_no_users_selected"] = "No users were selected to delete.";
$messages["error_could_not_find_user"] = "I could not find user \"%s\" in this site.";
$messages["error_deleting_user"] = "There was an error deleting user \"%s\"";
$messages["user_deleted_ok"] = "User \"%s\" successfully deleted.";

$messages["error_must_give_blog_name"] = "You must give a valid name for the blog.";
$messages["error_adding_blog"] = "There was an error while adding the blog to the database.";
$messages["blog_added_ok"] = "The new blog \"%s\" has been successfully added to the database.";

$messages["error_template_not_inside_folder"] = "The template files must be inside a folder.";
$messages["error_missing_base_files"] = "Some of the basic files are missing from the set.";
$messages["error_unpacking"] = "There was an error unpacking the file.";
$messages["error_forbidden_extensions"] = "Some files inside the template have been forbidden.";
$messages["error_creating_working_folder"] = "There was an error checking the template set";
$messages["error_checking_template"] = "There was an error with the template set (code = %s)";
$messages["error_add_template_disabled"] = "Users are not allowed to add templates in this site.";
$messages["error_must_upload_file"] = "You must upload a file.";
$messages["error_no_template_name"] = "You must provide a template name.";
$messages["error_uploads_disabled"] = "The upload feature has been disabled in this site.";
$messages["error_installing_template"] = "There was an error installing the template set.";
$messages["template_installed_ok"] = "The new template set has been successfully installed as \"%s\".";

$messages["error_adding_template_file"] = "There was an error adding the file to the template set.";
$messages["error_file_forbidden"] = "Files of this type have been forbidden in this site.";
$messages["error_file_too_big"] = "The file is too big. Maximum allowed size is \"%s\" bytes.";
$messages["template_file_added_ok"] = "File added successfully to template \"%s\".";

$messages["error_plugin_cannot_be_configured"] = "The plugin cannot be configured.";

$messages["error_incorrect_username"] = "The username is incorrect.";
$messages["error_username_already_exists"] = "There is already a user registered with the same username.";
$messages["error_adding_user"] = "There was an error whiel adding the new user to the database.";
$messages["user_added_ok"] = "The new user \"%s\" has been successfully added.";

$messages["error_no_blogs_selected"] = "You must select at least one blog to delete.";
$messages["error_blog_is_default_blog"] = "\"%s\" cannot be deleted because it is the default blog.";
$messages["blog_deleted_ok"] = "Blog \"%s\" has been successfully deleted.";
$messages["error_deleting_blog"] = "There was an error while deleting blog \"%s\".";

$messages["error_no_templates_selected"] = "No templates were selected to remove.";
$messages["error_removing_template"] = "There was an error removing the template \"%s\"";
$messages["template_removed_ok"] = "Template \"%s\" removed successfully.";

$messages["error_no_users_selected_to_remove_from_blog"] = "No users were selected to remove from this blog.";
$messages["error_removing_user_from_blog"] = "There was an error removing user \"%s\" from this blog.";
$messages["user_removed_from_blog_ok"] = "User \"%s\" has been successfully removed from this blog.";

$messages["error_incorrect_locale_code"] = "The given locale code is not valid.";
$messages["error_invalid_locale_file"] = "The file does not seem to be a valid locale file.";
$messages["error_adding_locale_file"] = "There was an error adding the new locale file. Please make sure that the file has been uploaded to the locale folder prior to this operation and that it has correct permissions.";
$messages["locale_added_ok"] = "The new locale \"%s\" has been successfully added.";
$messages["error_saving_locale"] = "There was an error saving the new locale file to the locale folder. Please make sure that the folder has the right access permissions.";

$messages["error_no_locales_selected"] = "No locales were selected to delete.";
$messages["error_deleting_only_locale"] = "This is the only locale available in the system and therefore it cannot be deleted.";
$messages["locale_deleted_ok"] = "Locale \"%s\" deleted successfully.";
$messages["error_deleting_locale"] = "There was an error while deleting locale \"%s\"";
$messages["error_cant_delete_default_locale"] = "\"%s\" can not be deleted because it is the default locale setting at the moment.";

$messages["plugin_config"] = "Plugin Configuration";

$messages["use_read_more_feature"] = "Show the whole post in the main page? (If you select 'No', or only the part that was typed in the 'Text' box will be shown in the main page)";

$messages["extended_text"] = "This text will be only shown in the post page, unless we disable the feature in the 'Settings' tab";

$messages["error_must_give_post_intro"] = "You must at least provide an introductory text to the post.";
$messages["error_no_albums_defined"] = "There are no albums available in this blog.";
$messages["error_fetching_album"] = "There was an error fetching the requested album";
$messages["comment_marked_as_spam_ok"] = "Comment marked as spam successfully.";
$messages["comment_marked_as_nonspam_ok"] = "Comment marked as non spam successfully.";
$messages["error_marking_comment_as_nonspam"] = "There was an error marking the comment as non spam.";
$messages["error_marking_comment_as_spam"] = "There was an error marking the comment as spam.";
$messages["error_incorrect_comment_id"] = "The comment identifier was incorrect.";
$messages["error_base_storage_folder_missing_or_unreadable"] = "It was not possible for pLog to create the necessary folders where resources are going to be installed. This might be due to several reasons, such as your PHP installation running with safe mode enabled or your user not having enough permissions to do so. You may still try to carry out the operation manually, by creating
the following folders: <br/><br/>%s<br/><br/>If these folders already exist please make sure that they can be read and written by the user running the web server.";


///// new help messages ////

//
// translators: this one has changed too since we now have two text boxes: one for the
// text that we'd like to appear in the main page and another one for the text that
// will only be shown in the 'post' page (that is, when the users clicks on the
// permalink, for example)
//
$messages["newPost"] = "<p>Use this page to add a new post to your journal. You should provide a topic or subject
for your post as well as some text for your post. Once you have finished, press the <b>'Add'</b> button and the post
will automatically be included in your page. Please note that you have to set the status of the post
to <b>'Published'</b> if you want it to appear in front page. Use the <b>'Draft'</b> status when you can't finish posting
now but you would like to save what you have typed so far for later revision.</p>
<p>The text typed in the first text box will always appear in the main page. You can use
the second text box if you want to have some text not to be included in the main page
but that should be shown once the users clicks on the permalink or on the
\"Read More...\" link. This link will be automatically added to the end of the text. This
field is not mandatory and its behaviour can be controlled in the \"Settings\" tab,
where you can force both text text boxes to be shown in the main page.</p>
<p>You can also classify the post under any of the categories you have previously created. Simply set
the <b>'Category'</b> field to the one you most like.</p>
<p>If you would like to receive an email notifying about a new post, please check the corresponding
checkbox.</p>
<p>Check the box where it says </b>'Find links in the post...'</b> if after adding the post, you
would like to send trackback pings to the hosts that support it. Your post will be scanned for
links and you will have the possibility to choose which ones to send trackback pings to.</p>";

$messages["updatePost"] = $messages["newPost"];

$messages["newBlogUser"] = "This option allows you to easily give editing permissions to other
users in this blog. To do so, you only have to know its username. If you already know it,
simply type it in the text field below and press the \"Add User\" button. If you wish, you can
also send an email to this user (as long as he or she used the right address when
registering) notifying him or her that he has now been granted permissions to add, edit
and delete posts in this blog.";

$messages["showBlogUsers"] = "This is a list of the users that have been given editing permissions
in this blog. You can see their profile if you wish or you can also revoke their permissions
by selectin them and then clicking on the \"Revoke Permissions\" button. Once you do that,
the selected users will no longer be able to publish anything in this blog.";

//
// note to translators:
//
// added some additional text here to inform about the new "configure" feature
//
$messages["pluginCenter"] = "<p>From here you can see which plugins have been installed. For every
plugin, you will see its identifier (the identifier you have to use when developing templates and
want to make use of the plugin features), the author of the plugin, and some descriptive text with
various information about the plugin, mainly how to use it.</p>
<p>Some plugins offer also their own configuration page from wich you can modify some
aspects of its behaviour. To access such page, please click on the \"configure\" link
next to every plugin.</p>";

$messages["configurePlugin"] = "This plugin provides some settings that can be configured
by the user.";

$messages["newBlogTemplate"] = "<p>It is possible to easily add new templates to the system. To do
so, there are two possibilities: the template can either be uploaded as a compressed file
(tar.gz, tar.bz2 and zip files are supported) to the server or it canbe manually
uploaded using any available method.</p>
<p>If the first method is chosen, the contents of the file must have all been packaged
under a folder which will be the name given to the template.</p>
<p>If the second method is chosen, simply upload the files to a folder under your blog-specific folder
and type in the name of the folder in the text box below.</p>
<p>Plugins added here will only be available to this specific below and will not be able to
be accessed by other blogs.</p>";

$messages["blogTemplates"] = "<p>This is a list with all the templates that have been added to
this blog. If you wish to remove any of them, please select them and click on the
\"Delete Selected\" button below the list. Once a template is deleted it cannot be
recovered, since it is removed from the disk.</p>";

$messages["adminSettings"] = "<p>These are some very basic statistics about the site.</p>";

$messages["createUser"] = "<p>We can easily register new users in the system by using this form.
We only need to provide with a valid username and a password, and optionally an email address.
Users registered here will not be attached to any blog unless we explicitly do so in the
\"User\" section or until we create a blog specially for this new user.</p>";

$messages["editUserProfile"] = "<p>From here we can edit the profile of any user in this blog. We can
also grant administrator privileges to the user (or revoke them). A list of the blogs to which
the user belogs is also displayed.</p>";

$messages["editSiteUsers"] = "<p>These are all the users that are registered in this site. You can see and edit
their profile by clicking on the username or you can delete any of them by clicking on the
checkbox of the user(s) and then click on the \"Delete Selected\" button. Once a user
has been deleted, it can <b>not</b> be recovered, so please be careful.</p>";

$messages["createBlog"] = "<p>Unlimited blogs can be added to a single installation of pLog. Users
can use the registration script provided in the main package but administrator can also
register new blogs by using this form. The only things needed to know are the name that will
 be given to the blog and the user who will be the owner, having the maximum privileges
 over that blog.</p>";

 $messages["editSiteBlogs"] = "<p>This is a list with all the blogs that have been registered
 so far in this site. Any blog can be deleted selecting it and clicking on the \"Delete
 Selected\" button. If we try to delete the blog that has been set as the default one
 (see the \"Global Settings\" tab in \"Site Admin\") we will get an error message.</p>
 <p>We can also edit the settings of any blog by clicking on it.</p>
 <p>Finally, we can edit the users that have permissions on a given blog by clicking
 on the \"Edit Users\" link</p>";

$messages["editBlog"] = "<p>The settings of the blog can be edited from here in the same way
a normal user can do. Everything is exactly the same except that administrator users can also
change who is the owner of the blog, anytime.</p>";

$messages["editBlogUsers"] = "<p>This feature allows to visually add and remove users from
any blog. On the left side we will see a list containing all the users that have not
been given editing privileges in this blog yet, while on the right side we will see a list of the
users that have already been given privileges. To a user (or more than one if necessary)
we only have to select them from the list of the left and click on the \"Add\" button. To do
the opposite process, we will have to select the users from the list of the right and
click on the \"Remove\" button.</p>
<p>It is also possible to change the user who is the owner of the blog by selecting
another from the drop-down list on top.</p>";

$messages["newLocale"] = "<p>Now locales can be easily added to the site using this feature. If
we have the possibility of uploading files, then we can use the first form, \"Upload Locale\"
simply pointing the browser to the locale file we'd like to upload. pLog will take care
of everything else, including copying the file to the folder with the other language files, but
please bear in mind that the folder must be writable by the user who is running the web server in
order for this feature to work properly. If the language file already exists, <b>it will
be overwritten and replaced by the new one</b>.</p>
<p>If files cannot be uploaded to the server, then the file will have to be
manually uploaded and placed in the same folder with the other language files. Once the file
has been placed there, we will have to type in the second form its code omitting the
\"locale_\".</p>
<p>Locale files must follow the naming convention of locale_ll_CC, where 'll' is the
2-digit ISO code for the language, while CC is the 2-digit ISO code for the country. If the file
does not conform to those rules, it will be rejected as a valid locale file.</p>";

$messages["siteLocales"] = "<p>This is a list with all the language files that have been
installed in this site. For each one of them, the encoding used by it and a brief
description can be seen. Also, language files can be removed from the system by selecting
them and clicking on the \"Delete Selected\" button.</p>";

$messages["newTemplate"] = "<p>It is possible to easily add new templates to the system. To do
so, there are two possibilities: the template can either be uploaded as a compressed file
(tar.gz, tar.bz2 and zip files are supported) to the server or it can be manually
uploaded using any available method.</p>
<p>If the first method is chosen, the contents of the file must have all been packaged
under a folder which will be the name given to the template.</p>
<p>If the second method is chosen, simply upload the files to a folder under your blog-specific folder
and type in the name of the folder in the text box below.</p>
<p>Plugins added here will be available to <b>all</b> the blogs in this site.</p>";

$messages["siteTemplates"] = "<p>This is a list with all the templates that are globally
available to all blogs. If you wish to remove any of them, please select them and click on the
\"Delete Selected\" button below the list. Once a template is deleted it cannot be
recovered, since it is removed from the disk.</p>";

$messages["editSiteSettings"] = "These are all the global settings that control many aspects of the
behaviour of pLog.";

$messages["newBlogTemplateFile"] = "Single files can be added to an already existing template
set without having to upload the whole set again. Simply find the file you would like to
upload in your disk and click on the \"Add File\" button.";

// text is the same, so we can save a few bytes
$messages["newTemplateFile"] = $messages["newBlogTemplateFile"];


////////////////////////////////////////////
///
///
/// NEW STRINGS ADDED IN 0.3!!
///
///
////////////////////////////////////////////
$messages["show_category_in_main_page"] = "Show this category in the main page";
$messages["welcome_resource_center"] = "Welcome to the resource center!";
$messages["resource_center"] = "Resource Center";
$messages["resource_albums"] = "Resource Albums";
$messages["resources"] = "Resources";
$messages["add_resource"] = "Add Resource";
$messages["add_album"] = "Add Album";
$messages["album"] = "Album";
$messages["album_name"] = "Album name";
$messages["parent_album"] = "Parent album";
$messages["no_parent_album"] = "No parent album";
$messages["resource_info"] = "Resource Information";
$messages["size"] = "Size";
$messages["format"] = "Format";
$messages["dimensions"] = "Dimensions";
$messages["bits_per_sample"] = "Bits per pixel";
$messages["bytes"] = "bytes";
$messages["pixels"] = "pixels";
$messages["time_offset"] = "Time difference in hours between the server and you:";
$messages["hours"] = "Hours";
$messages["album_added_ok"] = "The new album has been successfully added.";
$messages["name"] = "Name";
$messages["children"] = "Children";
$messages["see"] = "See";
$messages["view"] = "View";
$messages["resource_info"] = "Resource Information";
$messages["number_of_channels"] = "Number of channels";
$messages["length"] = "Length";
$messages["number_of_files"] = "Number of files";
$messages["compressed_size"] = "Compressed size";
$messages["uncompressed_size"] = "Uncompressed size";
$messages["resource_file"] = "File that you would like to add";
$messages["add_to_album"] = "Add the file to the following album";
$messages["edit_resource_album"] = "Edit Resource Album";
$messages["error_loading_resource_album"] = "There was an error fetching the resource album.";
$messages["error_album_id_parameter_missing"] = "The album identifier is incorrect.";
$messages["error_album_parent_id_parameter_missing"] = "Parent album identifier not found.";
$messages["error_updating_resource_album"] = "There was an error updating the resource album.";
$messages["resource_album_updated_ok"] = "The resource album \"%s\" was updated successfully.";
$messages["error_must_give_album_name"] = "You must provide with a name for the album.";
$messages["error_adding_album"] = "There was an error adding the resource album.";
$messages["album_added_ok"] = "The new album \"%s\" was successfully added.";
$messages["resource_added_ok"] = "The new resource was successfully added.";
$messages["error_resource_forbidden_extension"] = "The resource could not be added because it had a forbidden extension.";
$messages["error_resource_too_big"] = "The resource could not be added because it was too big.";
$messages["error_uploads_disabled"] = "The resource could not be added because uploads have been disabled in this site.";
$messages["error_adding_resource"] = "There was an error adding the resource.";
$messages["error_loading_resource"] = "There was an error fetching the resource";
$messages["error_updating_resource"] = "There was an error updating the resource.";
$messages["resource_updated_ok"] = "Resource \"%s\" was updated successfully.";
$messages["error_no_resources_selected"] = "There were no resources selected to delete.";
$messages["resource_deleted_ok"] = "Resource \"%s\" was successfully removed.";
$messages["error_deleting_resource"] = "There was an error deleting resource \"%s\".";
$messages["error_no_resource_uploaded"] = "There was no resource file uploaded.";
$messages["filtered_content"] = "Filtered Content";
$messages["global_filtered_content"] = "Global Filtered Content";
$messages["block_content"] = "Filter Content";
$messages["blocked_hosts"] = "Blocked Hosts";
$messages["global_blocked_hosts"] = "Globally Blocked Hosts";
$messages["block_host"] = "Block Host";
$messages["security"] = "Security";
$messages["security_welcome"] = "Welcome to the security area!";
$messages["filtered_content_intro"] = "The following content/regular expressions have been blocked in this blog.";
$messages["global_filtered_content_intro"] = "The following content/regular expressions have been globally blocked.";
$messages["content"] = "Content";
$messages["reason"] = "Reason";
$messages["add_filtered_content"] = "Add Filtered Content";
$messages["add_filtered_content_intro"] = "Anything added here will not be allowed as valid text in a comment, and any attempt by a casual user to post a comment with blocked content will block the comment. Regular expressions or a simple string can be used. Regular expressions are much more powerful but they're also much more complex and you should be careful with them, because you could potentially block all content with the wrong regular expression.";
$messages["global_add_filtered_content_intro"] = "Anything added here will not be allowed as valid text in a comment in any of the blogs available in this site. Any attempt by a casual user to post a comment with blocked content will block the comment. Regular expressions or a simple string can be used. Regular expressions are much more powerful but they're also much more complex and you should be careful with them, because you could potentially block all content with the wrong regular expression.";
$messages["content_to_block"] = "Content that you would like to block";
$messages["block_this"] = "Block This";
$messages["mask"] = "Mask";
$messages["access_blocked"] = "Access Blocked";
$messages["posting_blocked"] = "Posting Blocked";
$messages["block_host_intro"] = "Hosts added here will be blocked from accessiny only this blog. Please see <a href=\"javascript:help_window('admin.php?op=Help&amp;helpId=newBlogBlockedHost');\">Help</a> for more detailed information about this feature.";
$messages["global_block_host_intro"] = "Hosts added here will be blocked from accessing any blog in this site. Please see this related <a href=\"javascript:help_window('admin.php?op=Help&amp;helpId=newBlogBlockedHost');\">help item</a> for more information about this feature.";
$messages["block_type"] = "Block type";
$messages["error_invalid_ip_address"] = "The IP address is not valid.";
$messages["error_provide_content_to_block"] = "You must provide some content to block.";
$messages["error_must_create_album_first"] = "You must create an album before adding any resource.";
$messages["error_resource_is_not_an_image"] = "The chosen resource is not an image.";
$messages["error_generating_resource_preview"] = "There was an error regenerating the preview for this resource.";
$messages["resource_preview_generated_ok"] = "The preview for this resource was successfully generated.";
$messages["regenerate_preview"] = "Regenerate Preview";
$messages["show_album"] = "Show Album";
$messages["show_album_when_browsing"] = "Show this album to users";
$messages["assigned_to_blog"] = "Assign user to the following blog";
$messages["clean_up"] = "Clean-Up";
$messages["purge_info"] = "The purge function will physically remove all posts that have been marked as 'Deleted'. Otherwise,
  those posts are kept in the database (in case the user would like to restore some of them) and they
  may end up being a considerable amount, uselessly enlarging the size of the database. If you are
  sure that you would like to remove such posts, please press the button below.";
$messages["spam_info"] = "Comments marked as spam can be kept in the database in order to train the filter. Once the function
  has been accomplished, they are useless and if you wish the remove the comments marked as
  spam from the database, please use the button below.";
$messages["no_spam"] = "No Spam";
$messages["spam"] = "Spam";
$messages["mark_as_spam"] = "Mark as spam";
$messages["mark_as_no_spam"] = "Mark as no spam";
$messages["enable_comments_for_post"] = "Enable comments for this post";
$messages["close_window"] = "Close Window";
$messages["add_resource"] = "Add Resource";
$messages["add_resource_preview"] = "Add Preview";
$messages["add_album"] = "Add Album";
$messages["show_main_page"] = "Show in Main Page";
$messages["purge_spam_comments"] = "Purge Spam Comments";
$messages["purge_posts"] = "Purge Posts";
$messages["keep_spam_comments"] = "Keep Spam Comments";
$messages["throw_away_spam_comments"] = "Throw Away Spam Comments";
$messages["error_adding_blocked_host"] = "There was an error blocking the given host.";
$messages["blocked_host_added_ok"] = "Host %s added successfully to the list of blocked hosts.";
$messages["error_no_blocked_hosts_selected"] = "There were no hosts selected to remove.";
$messages["blocked_host_deleted_ok"] = "Host \"%s\" deleted successfully.";
$messages["error_deleting_blocked_host"] = "There was an error deleting blocked host \"%s\"";
$messages["edit_blocked_host"] = "Edit Blocked Host";
$messages["error_fetching_blocked_host"] = "There was an error fetching the blocked host.";
$messages["error_updating_blocked_host"] = "There was an error updating the blocked host.";
$messages["thumbnail_format"] = "Thumbnail format";
$messages["same_as_image"] = "Same as original image";
$messages["same"] = $messages["same_as_image"];



$messages["help_locale_folder"] = "Folder where language files are located.";
$messages["help_default_locale"] = "Default language settings that will be used when creating new blogs.";
$messages["help_xmlrpc_api_enabled"] = "Enables or disables the XMLRPC interface, for posting from your desktop.";
$messages["default_rss_profile"] = "RSS/RDF profile that will be used by default to generate feeds, if no special profile is specified";
$messages["help_security_pipeline_enabled"] = "Enables the security features. Disabling this will disable all the security features so it is recommended to enable it and disable those features that we do not need.";
$messages["help_ip_address_filter_enabled"] = "Enables the IP address filter, for blocking certain hosts of accessing our site.";
$messages["help_content_filter_enabled"] = "Enables a very simple regular expression-based content filter for blocking comments that contain certain words or expressions. The Bayesian filter might be a better solution.";
$messages["help_maximum_comment_size"] = "Maximum allowed length in bytes for comments.";
$messages["help_bayesian_filter_enabled"] = "Enables or disables the bayesian filter.";
$messages["help_bayesian_filter_spam_probability_treshold"] = "Minimum value at which a comment is considered spam. Should be between 0.01 and 0.99";
$messages["help_bayesian_filter_nonspam_probability_treshold"] = "Maximum value at which a comment is safely considered as non spam. Anything between these two tresholds will still be considered non spam but it will perhaps require some additional training";
$messages["help_bayesian_filter_min_length_token"] = "Minimum length that a token can have to be handled by the parser as a valid token.";
$messages["help_bayesian_filter_max_length_token"] = "Maximum length that a token can have.";
$messages["help_bayesian_filter_number_significant_tokens"] = "How many significant tokens a message must have";
$messages["help_bayesian_filter_spam_comments_action"] = "What to with comments marked as spam. They can either be rejected and thrown away (won't even be stored in the database) or kept but marked as spam. The second option is recommended when our filter hasn't been trained much and still makes mistakes from time to time.";
$messages["help_path_to_convert"] = "The 'convert' tool from the ImageMagick package is needed if using ImageMagick as the backend to generate thumbnails.";
$messages["help_thumbnail_height"] = "Maximum height that thumbnails will have.";
$messages["help_resources_folder"] = "Folder where the resources will be stored. Does not have to be in the web server tree, if you don't feel like letting people browse your resources folder. The resource server will take care of serving
the files wherever they are.";

$messages["help_thumbnails_keep_aspect_ratio"] = "Whether to keep the aspect ratio of thumbnails or not.";
$messages["help_resources_enabled"] = "Enables or disables the 'Resource Center' feature.";
$messages["help_thumbnail_method"] = "Backend system that will be used to generate thumbnails from image files. If using ImageMagick, please see below as some external tools are needed.";
$messages["help_thumbnail_width"] = "Maximum width that thumbnails will have.";
$messages["external_interfaces"] = "External Interfaces";
$messages["security_settings"] = "Security Settings";
$messages["bayesian_filter_settings"] = "Bayesian Filter Settings";
$messages["resources_settings"] = "Resources Settings";
$messages["help_thumbnail_format"] = "Default format that will be used when generating previews of images. If set to 'Same as original image', then thumbnails will be saved in the same format as the original image form which they were generated.";
$messages["edit"] = "Edit";
$messages["blocked_content_added_ok"] = "Blocked content added successfully.";
$messages["blocked_content_updated_ok"] = "Blocked content updated successfully";
$messages["help_disable_javascript_calendar"] ="Disables the javascript and DHTML-based calendar used to
pick a date when editing or adding a post, should the user's browser be not compatible.";
$messages["edit_filtered_content"] = "Edit Filtered Content";
$messages["error_updating_blocked_content"] = "There was an error updating the blocked content.";
$messages["audio_codec"] = "Audio Codec";
$messages["video_codec"] = "Video Codec";
$messages["sample_rate"] = "Sample rate";
$messages["files"] = "Files";
$messages["created"] = "Created";
$messages["generated"] = "Generated";
$messages["about"] = "About";
$messages["menu"] = "Menu";
$messages["albums"] = "Galleriat";
$messages["template_file"] = "Template file";
$messages["download"] = "Download";
$messages["error_you_have_been_blocked"] = "You are not allowed to proceed with this request.";

//
// help messages //
//

//
// translators: the following help messages have changed a little since last version, due to a few
// new features built on top of previous features
//
$messages["editArticleCategories"] = "<p>This is a listing with all the post categories that
have been created so far. There must be at least one category before you can add an article, since
every article has to be categorized under a category. The <b>'Articles'</b> column shows how many
articles have been categorized under the given category. In the same way, a category can't be deleted
if it has an article assigned it; you must first remove all the articles and then you will be allowed
to remove the category.</p>
<p>You can delete more than one category at the same time by cheching their <b>'Delete'</b> column
and then clickin on the <b>'Delete Selected'</b> button.</p>
<p>The <b>'Show In Main Page'</b> column shows whether this category is included in the main page or if alternatively,
it can also be seen when clicking its link. Edit the category itself to enable/disable this feature.</p>";

$messages["newArticleCategory"] = "<p>From here you can add a new post category to the blog. All
what you need to provide is a name for the new category. Once it has been created, it will be available
for posts to be categorized under.</p>
<p>You can disable the 'Show cateory in main page' checkbox if you don't want this category to be shown in the
main page of the site. If disabled, posts included in this category will only be shown when browsing this
specific category, by clicking its link.</p>";

$messages["editArticleCategory"] = "<p>Please provide a new name for the category you are updating. Also, 
define whether you would like to show posts belonging to this cateogry in the main page or not.</p>";

$messages["editPost"] = "<p>Use this page to edit a post from your journal. The information from the
post has already been provided and now you can make your changes. Once you have finished, press the <b>'Update'</b> button and the post
will updated. Please note that you have to set the status of the post
to <b>'Published'</b> if you want it to appear in front page. Use the <b>'Draft'</b> status when you can't finish posting
now but you would like to save what you have typed so far for later revision.</p>
<p>If you would like to receive an email notifying about a new post, please check the corresponding
checkbox.</p>
<p>More information about the different options <a href=\"admin.php?op=Help&amp;helpId=newPost\">here</a>.</p>";

$messages["blogSettings"] = "<p>From this page you can change some of the settings that control the
behaviour or appearance of this journal. These are the settings: <ul>
<li><b>Permanent URL</b>: This is the URL where this blog is running and that can be used to
link to it. It can't be changed.</li>
<li><b>Name of the blog</b>: This is a text string with a descriptive name of the blog. If using the
default templates, it is the text displayed on top of every page.</li>
<li><b>Long descriptive text about this blog</b>: This is a longer text that can optionally be
displayed in some kind of page giving more detailed information about the page. It can be left
blank if not needed.</li>
<li><b>Language used to display the texts</b>: You can select one of the available languages. This
language will be used to display the texts (not your own articles!) and format things like dates
and numbers using the correct settings. More languages can be installed at any time.</li>
<li><b>Items in the main page</b>: Set this to the number of posts you would like to have
in the main page. The more posts, the longer it will take for users to download your page. Minimum
number of posts it one.</li>
<li><b>Items shown as recent</b>: Set this to the number of posts you would like to be shown as
<b>'Recent'</b>, that is, the posts that have been posted earlier. Minimun amount is one.</li>
<li><b>Template used to render the contents</b>: pLog allows to have more than one template
to show the same content. You can choose here the most appropiate one for you journal, from the ones
that have been installed by the administrator.</li>
<li><b>Show the whole post int he main or only the part that was typed in the 'Text' box?</b>: Set this to <b>'Yes'</b> if you would like pLog
to automatically add a 'More...' link to your posts on the main page just after the text you typed
in the text box labeled 'Text'. The text typed in the second text box will only be shown to the user
when clicking on the
setting below) This feature is useful since it makes your frontpage less cluttered and also
smaller. However, it has some problems if there is a lot of HTML code in the page.</li>
<li><b>Enable WYSIWYG edition of texts</b>: Set this to yes if you would like to have the possibility
to see how your posts look in real time. This feature is only available for users using either
Internet Explorer 5.5 or higer and Mozilla 1.3b or higher.</li>
<li><b>Enable comments</b>: Set this to yes if you would like to allow your users to make comments to your
posts. This will globally affect all your posts and all your users.</li>
<li><b>Order in which comments appear</b>: Set it to \"Oldest first\" if you would like to see
the older comments first in the list, or set it to \"Newest first\" to see them in
reverse chronological order.</li>
<li><b>Time difference in hours between the server and you</b>: You can use this setting to make pLog automatically
add or substract an amount of hours to each date in the blog. It is useful for example when the server where the blog
is hosted and the person who is using it are in different time zones. Telling pLog that there is a difference of
+3 hours, will make that all dates appear with such time difference applied.</li>
</ul></p>";

//
// translators: the ones below are already new
//
$messages["resourceCenter"] = "From the resource center, you will be able to manage your files, group them in albums,
manage those albums and edit any of them.";

$messages["newResourceAlbum"] = "<p>You need at least one album to group your resources. From here you will be allowed
to add a new album, simply providing a name and a description for it. Only the name field is mandatory, being
the description field optional.</p>
<p>Use the <b>'Parent album'</b> field to set whether this is a top-level album or if it is a sub-album and has
another album as a parent.</p>";

$messages["resourceAlbums"] = "<p>This is a list including all the resource albums that have been created so far
in this site. For each album, several of its properties can be seen at a glance: its name, a link to its child 
albums (if any) and its amount, a link to its resources and its amount, whether the album is public or
private and a checkbox to delete as many of them as needed.</p>
<p>You can read more on the <b>'Show Album'</b> feature here <a href=\"admin.php?op=Help&amp;helpId=editResourceAlbum\">here</a></p>";

$messages["editResourceAlbum"] = "<p>From here you can edit the properties of a resource album. Almost all the fields
are the same as <a href=\"admin.php?op=Help&amp;helpId=newResourceAlbum\">here</a> except the 
<b>'Show album to users'</b> checkbox. If enabled, this album will be visible to users who browse our 
collection of albums and resources. If not, it will not be shown in the public side. This is useful in cases when
we want to keep some of the albums secret and don't want users peeking at them.</p>";

$messages["newResource"] = "<p>You will be able to upload new resources to your blog from this section. Any kind of file
can be uploaded to the site but pLog is capable of handling and extracting some useful information from some
of them, such as images, videos, zip files and music files.</p>
<p>First of all, find the file you would like to upload. Then, provide a description for it (mandatory field)
and finally select to which album would you like this resource to belong to. It is not possible to have a resource
file that does not belong to any album. Once you are ready, click the <b>'Add Resource'</b> button and the file
will be added to the blog.</p>
<p>Please keep in mind that uploads need to be enabled for this to work, and if the blog administrator has
set a list of forbidden file types that cannot be uploaded, the file will not be allowed in the site. The resource
framework also needs to be enabled. All these settings can be modified by a user with administrator privileges
from the <b>'Global Settings'</b> section.</p>
<p>This feature requires a folder with write permission in the web server.</p>";

$messages["Resources"] = "<p>From here you will have access to all the resource files that have been uplaoded
in the blog. Files will be shown under the album to which they belong. For every resource file, it will be
possible to edit its properties, view it as any normal user will see it and mark it for deletion. Pressing the 
<b>'Delete Selected'</b> button from the bottom of the screen will delete those resources that have been
marked.</p>
<p>Click the folder icon to navigate to the contents of an albu, or the <b>'Edit'</b> to go to the album
properties page. Use the <b>'..'</b> link to go up one level. Clicking a resource name or preview (if available)
will take you to the resource properties page where you will be able to change some of the settings of the 
selected resource.";

$messages["blogSecurity"] = "From this section you will be able to edit set up some basic security mechanisms that
are provided by pLog. The changes you make here will only affect your blog and not everybody else's.";

$messages["blogFilteredContent"] = "<p>This is a list of all the rules for content filtering that have been added 
to this particular blog. Clicking any of them will take you to a page where you will be able to edit any of them.
Use the <b>'Delete'</b> checkbox to mark any of them for deletion, and press the <b>'Delete Selected'</b> button
once you are sure you want to delete those.</p>";

$messages["newBlogFilteredContent"] = "<p>You can add here a new rule for blocking undesired content from being
included in comments. You can use here single words or sentence or if you wish, you can use the power
of regular expressions if you know how to use them. You can also add a description to the rule so that you remember
in the future what it is about, but it is not a mandatory field.</p>";

$messages["blogBlockedHosts"] = "This is a list with all the hosts that have been blocked so far in this blog. At
a glance, it is possible to see for each host the reason why it was blocked, the date when it was blocked and
the type of the block applied. Lastly, you can also select any of the host blocking rules and press the
<b>'Delete Selected'</b> button when you are sure that you want to remove those rules.";

$messages["newBlogBlockedHost"] = "<p>This section will allow you to block a specific address or entire subnet from your Blog. You can select if you want them to be able to see it, but unable to post or simply unable to access it at all. Copy the offending address into the spaces provided and choose the proper subnet address space if necessary. Example: To block just the address of 192.168.1.123 you would choose the '32 bits' option to match the entire address. This blocks just this one address and works well for banning someone with a Static IP address. If you're seeing multiple IP Addresses for a particular individual (say 192.168.1.123, 192.168.1.225, 192.168.1.21 and 192.168.1.67) then you will want to ban a particular subnet range. Enter one of the IP Addresses that you see and choose '24 bits', '16 bits' or '8 bits'  to match the first 3 sections, first 2 sections or the first section respectively.<br/>
<br/>
<b>EXAMPLES</b>:<br/>
<br/>
192.168.1.123 - 32 bits: Matches only the 192.168.1.123 address<br/>
192.168.1.123 - 24 bits: Matches any address that starts with 192.168.1<br/>
192.168.1.123 - 16 bits: Matches any address that starts with 192.168<br/>
192.168.1.123 - 8 bits: Matches any address that starts with 192<br/>
</p>
<p>The <b>'Block type'</b> drop-down list will allow you to choose whether to block this host from 
completely accessign the site (an error page will be sent to the client's browser whenever trying to access) or
simply block it from posting new comments. If the latter is chosen, the host will still be allowed to read
articles and other people's comments.</p>
<p>You can also attach a reason/description to this host blocking rule, so that you can remember in the future why
it was set up.</p>";

$messages["editBlogBlockedHost"] = "You will be able to edit a host blocking rule from this section. The options
available are exactly the same as in <a href=\"admin.php?op=Help&amp;helpId=newBlogBlockedHost\">here</a>.";

$messages["editBlogFilteredContent"] = "This page will allow you to edit a content filtering rule. The options
are exactly the same as in <a href=\"admin.php?op=Help&amp;helpId=newBlogFilteredContent\">here</a>.";

$messages["filteredContent"] = "<p>This is a list of all the rules for content filtering that have been added 
to this site. These rules are site-wide and take precedence before any blog-specific rule that may have been
set by blog owners. The options and its meaning is the same as 
<a href=\"admin.php?op=Help&amp;helpId=blogFilteredContent\">here</a>.";

$messages["newFilteredContent"] = "<p>You can add here a new rule for blocking undesired content from being
included in comments. This rule will be used system-wide and will take preference before blog-specific
rules. See <a href=\"admin.php?op=Help&amp;helpId=newBlogFilteredContent\">this</a> for more information
on the options.";

$messages["blockedHosts"] = "This is a list with all the hosts that have been blocked so far system-wide. 
Clicking a rule IP address will allow us to edit the settings of that rule. These rules always take
precedence over blog-speficic rules, so that if one these global rules matches a host, all the other after
it will be ignored.";

$messages["newBlockedHost"] = "From here it is possible to add a new <b>global</b> host-blocking rule. See
<a href=\"admin.php?op=Help&amp;helpId=newBlogBlockedHost\">here</a> for more information about the options
available.";

$messages["editBlockedHost"] = "You will be able to edit a host blocking rule from this section. The options
available are exactly the same as in <a href=\"admin.php?op=Help&amp;helpId=newBlogBlockedHost\">here</a>.";

$messages["editFilteredContent"] = "This page will allow you to edit a content filtering rule. The options
are exactly the same as in <a href=\"admin.php?op=Help&amp;helpId=newBlogFilteredContent\">here</a>.";

//
// text of the post that will be added to each blog when they sign-up via the register.php script
//
$messages["register_default_category"] = "General";
$messages["register_default_article_text"] = "If you can read this, it means that your signup and registration was successful and that you can start blogging.";
$messages["register_default_article_topic"] = "Congratulations, it worked!";

//
// summary templates text
//

$messages["summary_title"] = "Blogs Summary";
$messages["summary_section_main"] = "Summary";
$messages["summary_section_main_link_title"] = "Main Page";
$messages["summary_section_register"] = "Register!";
$messages["summary_section_register_link_title"] = "Register a new blog";
$messages["summary_section_blog_list"] = "Blog list";
$messages["summary_section_blog_list_link_title"] = "Blogs hosted in this site";
$messages["summary_section_faq"] = "F.A.Q.";
$messages["summary_section_faq_link_title"] = "Frequently Asked Questions";
$messages["summary_welcome_title"] = "Welcome to pLog!";

$messages["summary_most_active_blogs"] = "Most active blogs";
$messages["summary_newest_blogs"] = "Newest blogs";
$messages["summary_most_commented_articles"] = "Most commented articles";
$messages["summary_most_read_articles"] = "Most read articles";

$messages["summary_faq"] = "Frequently Asked Questions";
$messages["summary_faq_question"] = "What is this?";
$messages["summary_faq_description"] = "You could use this section to add some frequently asked questions about your service. It is all up to you and this is only a suggestion so feel free to make changes :) Edit the file templates/summary/faq.template to change the contents of this page.";

$messages["summary_login"] = "Log-in";
$messages["summary_other_stuff"] = "Other Stuff";
$messages["summary_plog_logo"] = "How about a logo here?";

$messages["summary_blog_list"] = "Blog List";
$messages["summary_last_updated"] = "Last Updated";
$messages["summary_author"] = "Author";
$messages["summary_articles"] = "articles";
$messages["summary_reads"] = "reads";

$messages["summary_welcome_message"] = "<h4 class=\"question\">What is this site?</h4>
                            <p>You could use this area to give some information about this site.</p>

                            <ul>
                                <li>See the following links for more information: <br />
                                    <a href=\"summary.php?op=Faq\">FAQ</a></li>
                                <li><a href=\"register.php\">Register a new blog here</a></li>
                            </ul>";

$messages["summary_latest_posts"] = "Latest Posts";
$messages["summary_in"] = "in";
$messages["summary_posted_by"] = "Posted by";

//
// register templates text
//
$messages["register_error"] = "Error";
$messages["register_error_message"] = "There has been an error:";
$messages["register_errors"] = "There were some errors during the process, please have a look:";
$messages["register_new_blog_step1_title"] = "Register a new blog (1/3)";
$messages["register_step1_fill_in_title"] = "Please fill in this form to create a new blog in this site.";
$messages["register_step1_description"] = "<p>
First of all, we need to create a user for you. Please choose a username (which should not exist in the system but if it does, we will let you know) This user will be considered as the owner of the blog and will have full powers over it.
</p>
<p>
And please do not forget your password! There is no way it can be recovered once you have signed up.
</p>";
$messages["register_step1_legend"] = "Please fill in the following fields";
$messages["register_username"] = "Username:";
$messages["register_password"] = "Password:";
$messages["register_password_confirmation"] = "Confirm password:";
$messages["register_email"] = "Email address:";
$messages["register_email_comment"] = "(user for notifications of new comments)";

$messages["register_next"] = "Next &raquo;";

$messages["register_new_blog_step2_title"] = "Register a new blog (2/3)";
$messages["register_user_created"] = "Your new user has been successfully created! Now we can proceed and create your new personal blog.";
$messages["register_step2_description"] = " <p>
  The only thing we need to know is the name you would like to give to your diary. Later on once this
  process is complete, you will be able to change things like its description, but now that is not needed.
 </p>";
$messages["register_step2_blog_name"] = "Name of your new blog:";

$messages["register_new_blog_step4_title"] = "Thank you! (3/3)";
$messages["register_new_blog_step3_description"] = "
 <p>
    Registration is complete. Your new user and diary have been registered successfully in this site,
    and you can log in now into your blog and start blogging!
 </p>";
$messages["register_step4_admin_link"] = "
  <p>
    Click here <a href=\"admin.php\">to go the admin interface</a>, if you want to start blogging.
 </p>";
$messages["register_step4_blog_link1"] = "
 <p>
    Or click <a href=\"";

$messages["register_step4_blog_link2"] = "
\">here to go and see your new blog</a>.
 </p>";

$messages["register_step4_final_message"] = "
 <p>
  Happy blogging!
 </p>";



$messages["register_error_incorrect_username"] = "Incorrect user name, please try again.<br/>";
$messages["register_error_incorrect_email"] = "Email address is invalid, please try again. <br/>";
$messages["register_error_user_already_exist"] = "There is already a user with that name, please try again.<br/>";
$messages["register_error_incorrect_password"] = "Password is invalid, please try again. <br/>";
$messages["register_error_passwords_dont_match"] = "Passwords do not match, please try again. <br/>";
$messages["register_error_adding_user"] = "Error adding the user: ";
$messages["register_error_creating_blog"] = "There was an error creating the new blog";
$messages["register_error_blog_name"] = "You should choose a better name for the blog.<br/>" ;
?>