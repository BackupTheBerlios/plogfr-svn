<?php
// set this to the encoding that should be used to display the pages correctly
$messages['encoding'] = 'windows-1254';
$messages['locale_description'] = 'pLog için Türkçe Dil Dosyasý';
// locale format, see Locale::formatDate for more information
$messages['date_format'] = '%d/%m/%Y %H:%M';

// days of the week
$messages['days'] = Array( 'Pazar', 'Pazartesi', 'Salý', 'Çarþamba', 'Perþembe', 'Cuma', 'Cumartesi' );
// -- compatibility, do not touch -- //
$messages['Monday'] = $messages['days'][1];
$messages['Tuesday'] = $messages['days'][2];
$messages['Wednesday'] = $messages['days'][3];
$messages['Thursday'] = $messages['days'][4];
$messages['Friday'] = $messages['days'][5];
$messages['Saturday'] = $messages['days'][6];
$messages['Sunday'] = $messages['days'][0];

// abbreviations
$messages['daysshort'] = Array( 'Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa' );
// -- compatibility, do not touch -- //
$messages['Mo'] = $messages['daysshort'][1];
$messages['Tu'] = $messages['daysshort'][2];
$messages['We'] = $messages['daysshort'][3];
$messages['Th'] = $messages['daysshort'][4];
$messages['Fr'] = $messages['daysshort'][5];
$messages['Sa'] = $messages['daysshort'][6];
$messages['Su'] = $messages['daysshort'][0];

// months of the year
$messages['months'] = Array( 'Ocak', 'Þubat', 'Mart', 'Nisan', 'Mayýs', 'Haziran', 'Temmuz', 'Aðustos', 'Eylül', 'Ekim', 'Kasým', 'Aralýk' );
// -- compatibility, do not touch -- //
$messages['January'] = $messages['months'][0];
$messages['February'] = $messages['months'][1];
$messages['March'] = $messages['months'][2];
$messages['April'] = $messages['months'][3];
$messages['May'] = $messages['months'][4];
$messages['June'] = $messages['months'][5];
$messages['July'] = $messages['months'][6];
$messages['August'] = $messages['months'][7];
$messages['September'] = $messages['months'][8];
$messages['October'] = $messages['months'][9];
$messages['November'] = $messages['months'][10];
$messages['December'] = $messages['months'][11];
$messages['message'] = 'Message';
$messages['error'] = 'Hata';
$messages['date'] = 'Tarih';

// miscellaneous texts
$messages['of'] = '';
$messages['recently'] = 'Yazýlanlar';
$messages['comments'] = 'Ahkamlar';
$messages['comment on this'] = 'Ahkam Kes';
$messages['my_links'] = 'Link Market';
$messages['archives'] = 'Arþiv';
$messages['search'] = 'Arama';
$messages['calendar'] = 'Takvim';
$messages['search_s'] = 'Ara';
$messages['search_this_blog'] = 'Bu makalede ara:';
$messages['about_myself'] = 'Ben kimim?';
$messages['permalink_title'] = 'Arþivden Link';
$messages['permalink'] = 'Link';
$messages['posted_by'] = 'Ýlham Perisi Gelen';
$messages['reply'] = 'Cevapla';

// add comment form
$messages['add_comment'] = 'Ahkamýný Ekle';
$messages['comment_topic'] = 'Baþlýk';
$messages['comment_text'] = 'Yazýnýz';
$messages['comment_username'] = 'Adýnýz';
$messages['comment_email'] = 'E-Posta Adresiniz (varsa)';
$messages['comment_url'] = 'Ýnternet siteniz (varsa)';
$messages['comment_send'] = 'Uçur';
$messages['comment_added'] = 'Ahkamýnýz eklendi';
$messages['comment_add_error'] = 'Ahkam eklerken hata oluþtu. Heralde sistem beðenmedi :)';
$messages['article_does_not_exist'] = 'Bu yazýyla uyuþmadý. Tekrar deneyin';
$messages['no_posts_found'] = 'Ýleti bulunamadý';
$messages['user_has_no_posts_yet'] = 'Bu kullanýcý henüz ileti göndermemiþ.';
$messages['back'] = 'Geri';
$messages['post'] = 'Gönder';
$messages['trackbacks_for_article'] = 'Yazý için ayrýntýlar';
$messages['trackback_excerpt'] = 'Alýntý';
$messages['trackback_weblog'] = 'Günlük';
$messages['search_results'] = 'Arama Sonuçlarý';
$messages['search_matching_results'] = 'Aradýðýnýz kriterlere uygun sonuçlar, buyrun:';
$messages['search_no_matching_posts'] = 'Aradýðýnýz kriterlere uygun sonuç bulunamadý';
$messages['read_more'] = 'Devamý';
$messages['syndicate'] = 'Etkileþim';
$messages['main'] = 'Ana Sayfa';
$messages['about'] = 'Hakkýmda';
$messages['download'] = 'Ýndir';

////// error messages /////
$messages['error_fetching_article'] = 'Belirttiðiniz yazý bulunamadý.';
$messages['error_fetching_articles'] = 'Ýstediðiniz yazý bulunamadý.';
$messages['error_trackback_no_trackback'] = 'Bu yazý için eklenti bulunamadý.';
$messages['error_incorrect_article_id'] = 'Yazý belirleyici yanlýþ.';
$messages['error_incorrect_blog_id'] = 'Günlük belirleyici yanlýþ.';
$messages['error_comment_without_text'] = 'Ahkam kesmeyi unuttun. Dönde ahkam kes.';
$messages['error_comment_without_name'] = 'Ýsim yazmayý unuttun. Yakýþmýyor bak sana.';
$messages['error_adding_comment'] = 'Kestiðiniz ahkam eklenirken bir hata oluþtu.';
$messages['error_incorrect_parameter'] = 'Yanlýþ parametre.';
$messages['error_parameter_missing'] = 'Talep ettiðiniz parametrede eksiklik var.';
$messages['error_comments_not_enabled'] = 'Ahkam kesmek yassak!.';
$messages['error_incorrect_search_terms'] = 'Adam akýllý ara beni hasta etme diyor sistem.';
$messages['error_no_search_results'] = 'Ýsteðinize uygun sonuç bulunamadý.';
$messages['error_no_albums_defined'] = 'Þu an albüm aktif deðil.';

/////////////////                                          //////////////////
///////////////// STRINGS FOR THE ADMINISTRATION INTERFACE //////////////////
/////////////////                                          //////////////////

// login page
$messages['login'] = 'Kullanýcý adý';
$messages['welcome_message'] = 'pLog`a hoþgeldiniz.';
$messages['error_incorrect_username_or_password'] = 'Özür Dileriz. Yanlýþ Kullanýcý adý veya parola girdiniz.';
$messages['error_dont_belong_to_any_blog'] = 'Henüz, bir günlüðe sahip deðilsiniz.';
$messages['logout_message'] = 'Çýkýþýnýz baþarýyla tamamlandý.';
$messages['logout_message_2'] = 'Click <a href="%1$s">here</a> to go to %2$s</a>.';
$messages['error_access_forbidden'] = 'Yetkiniz yok. Girmek için yetkili olmalýsýnýz.';
$messages['username'] = 'Kullanýcý Adý';
$messages['password'] = 'Parola';

// dashboard
$messages['dashboard'] = 'Yönetim Menüsü';
$messages['recent_articles'] = 'Son Yazýlar';
$messages['recent_comments'] = 'Son ahkamlar';
$messages['recent_trackbacks'] = 'Son ayrýntýlar';
$messages['blog_statistics'] = 'Günlük Verileri';
$messages['total_posts'] = 'Toplam Yazýlar';
$messages['total_comments'] = 'Toplam Ahkamlar';
$messages['total_trackbacks'] = 'Toplam Ayrýntýlar';
$messages['total_viewed'] = 'Toplam görüntülenmiþ yazýlar';
$messages['in'] = 'In';

// menu options
$messages['newPost'] = 'New Post';
$messages['Manage'] = 'Manage';
$messages['managePosts'] = 'Manage Posts';
$messages['editPosts'] = 'Posts';
$messages['editArticleCategories'] = 'Categories';
$messages['newArticleCategory'] = 'New Category';
$messages['manageLinks'] = 'Manage Links';
$messages['editLinks'] = 'Links';
$messages['newLink'] = 'New Link';
$messages['editLink'] = 'Edit Link';
$messages['editLinkCategories'] = 'Link Categories';
$messages['newLinkCategory'] = 'New Link Category';
$messages['editLinkCategory'] = 'Edit Link Category';
$messages['manageCustomFields'] = 'Manage Custom Fields';
$messages['blogCustomFields'] = 'Custom Fields';
$messages['newCustomField'] = 'New Custom Field';
$messages['resourceCenter'] = 'Resource Centre';
$messages['resources'] = 'Resources';
$messages['newResourceAlbum'] = 'New Album';
$messages['newResource'] = 'New Resource';
$messages['controlCenter'] = 'Control Centre';
$messages['manageSettings'] = 'Settings';
$messages['blogSettings'] = 'Blog Settings';
$messages['userSettings'] = 'User Settings';
$messages['pluginCenter'] = 'Plugin Centre';
$messages['Stats'] = 'Statistics';
$messages['manageBlogUsers'] = 'Manage Blog Users';
$messages['newBlogUser'] = 'New Blog User';
$messages['showBlogUsers'] = 'Blog Users';
$messages['manageBlogTemplates'] = 'Blog Templates';
$messages['newBlogTemplate'] = 'New Blog Template';
$messages['blogTemplates'] = 'Blog Templates';
$messages['adminSettings'] = 'Administration';
$messages['Users'] = 'Users';
$messages['createUser'] = 'Create User';
$messages['editSiteUsers'] = 'Site Users';
$messages['Blogs'] = 'Manage Blogs';
$messages['createBlog'] = 'Create Blog';
$messages['editSiteBlogs'] = 'Blogs';
$messages['Locales'] = 'Manage Locales';
$messages['newLocale'] = 'New Locale';
$messages['siteLocales'] = 'Site Locales';
$messages['Templates'] = 'Manage Templates';
$messages['newTemplate'] = 'New Template';
$messages['siteTemplates'] = 'Site Templates';
$messages['GlobalSettings'] = 'Global Settings';
$messages['editSiteSettings'] = 'General';
$messages['summarySettings'] = 'Summary';
$messages['templateSettings'] = 'Templates';
$messages['urlSettings'] = 'URLs';
$messages['emailSettings'] = 'Email';
$messages['uploadSettings'] = 'Uploads';
$messages['helpersSettings'] = 'External Helpers';
$messages['interfacesSettings'] = 'Interfaces';
$messages['securitySettings'] = 'Security';
$messages['bayesianSettings'] = 'Bayesian Filter';
$messages['resourcesSettings'] = 'Resources';
$messages['searchSettings'] = 'Search';
$messages['cleanUpSection'] = 'Clean Up';
$messages['cleanUp'] = 'Clean Up';
$messages['editResourceAlbum'] = 'Edit Album';
$messages['resourceInfo'] = 'Edit Resource';
$messages['editBlog'] = 'Edit Blog';
$messages['Logout'] = 'Logout';

// new post
$messages['topic'] = 'Topic';
$messages['topic_help'] = 'Title of the post';
$messages['text'] = 'Text';
$messages['text_help'] = 'Text of the post. This part will always appear in the front page';
$messages['extended_text'] = 'Extended Text';
$messages['extended_text_help'] = 'Extended text of the post. This part can optionally appear only in the post page or in the main page. See the blog settings for more information';
$messages['post_slug'] = 'Slug';
$messages['post_slug_help'] = 'The slug will be used to generate nice permanent links';
$messages['date'] = 'Date';
$messages['post_date_help'] = 'Date when this post is going to be published';
$messages['status'] = 'Status';
$messages['post_status_help'] = 'Select one of these status';
$messages['post_status_published'] = 'Published';
$messages['post_status_draft'] = 'Draft';
$messages['post_status_deleted'] = 'Deleted';
$messages['categories'] = 'Categories';
$messages['post_categories_help'] = 'Select one or more categories';
$messages['post_comments_enabled_help'] = 'Enable comments';
$messages['send_notification_help'] = 'Notification of new comments';
$messages['send_trackback_pings_help'] = 'Send trackbacks';
$messages['send_xmlrpc_pings_help'] = 'Send XMLRPC pings';
$messages['save_draft_and_continue'] = 'Save draft';
$messages['preview'] = 'Preview';
$messages['add_post'] = 'Blog this!';
$messages['error_saving_draft'] = 'There was an error saving the draft';
$messages['draft_saved_ok'] = 'Draft saved successfully';
$messages['error_sending_request'] = 'There was an error sending the request';
$messages['error_no_category_selected'] = 'Please select at least one category';
$messages['error_missing_post_topic'] = 'Please type a post topic';
$messages['error_missing_post_text'] = 'Please type some text for the post';
$messages['error_adding_post'] = 'There was an error adding the post';
$messages['post_added_not_published'] = 'Post added successfully but not published';
$messages['post_added_ok'] = 'Post added successfully.';
$messages['send_notifications_ok'] = 'A notification will be sent every time there is a new comment or trackback.';

// send trackbacks
$messages['error_sending_trackbacks'] = 'There was an error sending the following trackbacks';
$messages['send_trackbacks_help'] = 'Please select those URLs where you would like to send the trackback ping. Please make sure that the sites support trackback.';
$messages['send_trackbacks'] = 'Send trackbacks';
$messages['ping_selected'] = 'Ping selected';
$messages['trackbacks_sent_ok'] = 'Trackbacks successfully sent to the selected URLs';

// posts page
$messages['show_by'] = 'Show By';
$messages['category'] = 'Category';
$messages['author'] = 'Author';
$messages['post_status_all'] = 'All';
$messages['author_all'] = 'All';
$messages['search_terms'] = 'Search terms';
$messages['show'] = 'Show';
$messages['delete'] = 'Delete';
$messages['actions'] = 'Actions';
$messages['all'] = 'All';
$messages['category_all'] = 'All';
$messages['error_incorrect_article_id'] = 'Incorrect article identifier';
$messages['error_deleting_article'] = 'There was an error deleting post "%s"';
$messages['article_deleted_ok'] = 'Post "%s" deleted successfully';
$messages['articles_deleted_ok'] = '%s posts deleted successfully';
$messages['error_deleting_article2'] = 'There was an error deleting the post with identifier "%s"';

// edit post page
$messages['update'] = 'Update';
$messages['editPost'] = 'Edit Post';
$messages['error_fetching_post'] = 'There was an error fetching the article';
$messages['post_updated_ok'] = 'Post "%s" updated successfully.';
$messages['error_updating_post'] = 'There was an error updating the post';
$messages['notification_added'] = 'You will receive notifications of new comments or trackbacks';
$messages['notification_removed'] = 'No notifications about new comments or trackbacks will be sent';

// post comments
$messages['url'] = 'URL';
$messages['comment_status_all'] = 'All';
$messages['comment_status_spam'] = 'Spam';
$messages['comment_status_nonspam'] = 'No Spam';
$messages['error_fetching_comments'] = 'There was an error while fetching the article comments';
$messages['error_deleting_comments'] = 'There was an error removing the comments or there was no comment selected';
$messages['comment_deleted_ok'] = 'Comment "%s" deleted successfully';
$messages['comments_deleted_ok'] = '%s comments deleted successfully';
$messages['error_deleting_comment'] = 'There was an error deleting comment "%s"';
$messages['error_deleting_comment2'] = 'There was an error deleting comment with identifier %s';
$messages['editComments'] = 'Comments';
$messages['mark_as_spam'] = 'Mark as spam';
$messages['mark_as_no_spam'] = 'Mark as no spam';
$messages['error_incorrect_comment_id'] = 'The comment identifier is not correct';
$messages['error_marking_comment_as_spam'] = 'There was an error marking the comment as spam';
$messages['comment_marked_as_spam_ok'] = 'The comment was marked as spam successfully';
$messages['error_marking_comment_as_nonspam'] = 'There was an error marking the comment as no spam';
$messages['comment_marked_as_nonspam_ok'] = 'The comment was marked as no spam successfully';

// post trackbacks
$messages['blog'] = 'Blog';
$messages['excerpt'] = 'Excerpt';
$messages['error_fetching_trackbacks'] = 'There was an error while fetching the trackbacks';
$messages['error_deleting_trackbacks'] = 'There was an error deleting the trackbacks or there were no items selected';
$messages['error_deleting_trackback'] = 'There was an error while deleting trackback "%s"';
$messages['error_deleting_trackback2'] = 'There was an error while deleting trackback with identifier "%s"';
$messages['trackback_deleted_ok'] = 'Trackback "%s" deleted successfully';
$messages['trackbacks_deleted_ok'] = '%s trackbacks deleted successfully';
$messages['editTrackbacks'] = 'Ayrýntýlar';

// post statistics
$messages['referrer'] = 'Referrer';
$messages['hits'] = 'Hits';
$messages['error_no_items_selected'] = 'No items were selected to remove';
$messages['error_deleting_referrer'] = 'There was an error deleting referrer "%s"';
$messages['error_deleting_referrer2'] = 'There was an error deleting referrer with identifier "%s"';
$messages['referrer_deleted_ok'] = 'Referrer "%s" deleted successfully';
$messages['referrers_deleted_ok'] = '%s referrers deleted successfully';

// categories
$messages['posts'] = 'Posts';
$messages['show_in_main_page'] = 'Show in front page';
$messages['error_incorrect_category_id'] = 'The category identifier is not correct or no items were selected';
$messages['error_category_has_articles'] = 'Category "%s" is used by some articles. Please edit the articles first and then remove the category';
$messages['category_deleted_ok'] = 'Category "%s" deleted successfully';
$messages['categories_deleted_ok'] = '%s categories deleted successfully';
$messages['error_deleting_category'] = 'There was an error deleting category "%s"';
$messages['error_deleting_category2'] = 'There was an error deleting category with identifier "%s"';
$messages['yes'] = 'Yes';
$messages['no'] = 'No';

// new category
$messages['name'] = 'Name';
$messages['category_name_help'] = 'Name that will be used to display the category';
$messages['description'] = 'Description';
$messages['category_description_help'] = 'Longer description for this category';
$messages['show_in_main_page_help'] = 'Whether posts under this category should be shown in the main page, or only when this particular category is browsed';
$messages['error_empty_name'] = 'You must provide a name';
$messages['error_empty_description'] = 'You must provide a description';
$messages['error_adding_article_category'] = 'There was an error adding the new category. Please check the data and try again';
$messages['category_added_ok'] = 'Category "%s" was successfully added to the blog';
$messages['add'] = 'Add';
$messages['reset'] = 'Reset';

// update category
$messages['error_updating_article_category'] = 'There was an error updating the article category';
$messages['error_fetching_category'] = 'There was an error fetching the category';
$messages['article_category_updated_ok'] = 'Category "%s" was updated successfully';

// links
$messages['feed'] = 'Feed';
$messages['error_no_links_selected'] = 'The link identifier was incorrect or no items were selected to remove';
$messages['error_incorrect_link_id'] = 'The link identifier was not correct';
$messages['error_removing_link'] = 'There was an error removing link "%s"';
$messages['error_removing_link2'] = 'There was an error removing link with identifier "%s"';
$messages['link_deleted_ok'] = 'Link "%s" was deleted successfully';
$messages['links_deleted_ok'] = '%s links deleted successfully';

// new link
$messages['link_name_help'] = 'Name given to this link';
$messages['link_url_help'] = 'Address where this link points';
$messages['link_description_help'] = 'Brief description of this link';
$messages['link_feed_help'] = 'A link to any of the RSS or Atom feeds of this link can also be provided';
$messages['link_category_help'] = 'Choose one of the available link categories';
$messages['error_adding_link'] = 'There was an error adding the link. Please check the data and try again';
$messages['error_invalid_url'] = 'The address is not correct';
$messages['link_added_ok'] = 'Link "%s" was successfully added';

// update link
$messages['error_updating_link'] = 'There was an error updating the link. Please check the data and try again';
$messages['error_fetching_link'] = 'There was an error fetching the link';
$messages['link_updated_ok'] = 'Link "%s" was updated successfully';

// link categories
$messages['links'] = 'Links';
$messages['error_invalid_link_category_id'] = 'The link category identifier was not correct or there was no link category selected';
$messages['error_links_in_link_category'] = 'Link category "%s" is used by some links. Modify the links first and try again';
$messages['error_removing_link_category'] = 'There was an error removing link category "%s"';
$messages['link_category_deleted_ok'] = 'Link category "%s" deleted successfully';
$messages['link_categories_deleted_ok'] = '%s link categories deleted successfully';
$messages['error_removing_link_category2'] = 'There was an error removing link category with identifier "%s"';

// new link category
$messages['link_category_name_help'] = 'Name given to this link category';
$messages['error_adding_link_category'] = 'There was an error adding the new link category';
$messages['link_category_added_ok'] = 'Link category "%s" was successfully added';

// edit link category
$messages['error_updating_link_category'] = 'There was an error updating the link category. Please check the data and try again';
$messages['link_category_updated_ok'] = 'Link category "%s" updated successfully';
$messages['error_fetching_link_category'] = 'There was an error fetching the link category';

// custom fields
$messages['type'] = 'Type';
$messages['hidden'] = 'Hidden';
$messages['fields_deleted_ok'] = '%s custom fields deleted successfully';
$messages['field_deleted_ok'] = 'Custom field "%s" deleted successfully';
$messages['error_deleting_field'] = 'There was an error deleting custom field "%s"';
$messages['error_deleting_field2'] = 'There was an error deleting custom field with identifier "%s"';
$messages['error_incorrect_field_id'] = 'The custom field identifier was not valid';

// new custom field
$messages['field_name_help'] = 'Identifier that will be used to refer to the value of this field in posts';
$messages['field_description_help'] = 'Brief description of this field that will be shown when adding or editing posts';
$messages['field_type_help'] = 'Select one of the available field types';
$messages['field_hidden_help'] = 'If a field is hidden, it will not be shown when adding a or editing a post. This feature is mainly used by plugins';
$messages['error_adding_custom_field'] = 'There was an error adding the custom field. Please check the data and try again';
$messages['custom_field_added_ok'] = 'Custom field "%s" added successfully';
$messages['text_field'] = 'Text field';
$messages['text_area'] = 'Text box';
$messages['checkbox'] = 'Checkbox';
$messages['date_field'] = 'Date chooser';

// edit custom field
$messages['error_fetching_custom_field'] = 'There was an error fetching the custom field';
$messages['error_updating_custom_field'] = 'There was an error updating the custom field. Please check the data and try again';
$messages['custom_field_updated_ok'] = 'Custom field "%s" updated successfully';

// resources
$messages['root_album'] = 'Root album';
$messages['num_resources'] = 'Number of resources';
$messages['total_size'] = 'Total size';
$messages['album'] = 'Album';
$messages['error_incorrect_album_id'] = 'The album identifier is not correct';
$messages['error_base_storage_folder_missing_or_unreadable'] = 'It was not possible for pLog to create the necessary folders where resources are going to be installed. This might be due to several reasons, such as your PHP installation running with safe mode enabled or your user not having enough permissions to do so. You may still try to carry out the operation manually, by creating the following folders: <br/><br/>%s<br/><br/>If these folders already exist please make sure that they can be read and written by the user running the web server.';
$messages['items_deleted_ok'] = '%s items deleted successfully';
$messages['error_album_has_children'] = 'Album "%s" has children. Please edit first the album and try again';
$messages['item_deleted_ok'] = 'Item "%s"deleted successfully';
$messages['error_deleting_album'] = 'There was an error deleting album "%s"';
$messages['error_deleting_album2'] = 'There was an error deleting album with identifier "%s"';
$messages['error_deleting_resource'] = 'There was an error deleting resource "%s"';
$messages['error_deleting_resource2'] = 'There was an error deleting resource with identifier "%s"';
$messages['error_no_resources_selected'] = 'No items were selected to delete';
$messages['resource_deleted_ok'] = 'Resource "%s" was deleted successfully';
$messages['album_deleted_ok'] = 'Album "%s" was deleted successfully';
$messages['add_resource'] = 'Add resource';
$messages['add_resource_preview'] = 'Add preview';
$messages['add_resource_medium'] = 'Add medium preview';
$messages['add_album'] = 'Add album';

// new album
$messages['album_name_help'] = 'Short name for the new album';
$messages['parent'] = 'Parent';
$messages['no_parent'] = 'No parent';
$messages['parent_album_help'] = 'Use this to have albums within albums and better organize your files';
$messages['album_description_help'] = 'Longer description of the contents of this album';
$messages['error_adding_album'] = 'There was an error adding the new album. Please check the data and try again';
$messages['album_added_ok'] = 'Album "%s" successfully added';

// edit album
$messages['error_incorrect_album_id'] = 'The album identifier is not correct';
$messages['error_fetching_album'] = 'There was an error fetching the album';
$messages['error_updating_album'] = 'There was an error updating the album. Please check the data and try again';
$messages['album_updated_ok'] = 'Album "%s" updated successfully';
$messages['show_album_help'] = 'If disabled, the album will not be shown in the list of albums available in this blog';

// new resource
$messages['file'] = 'File';
$messages['resource_file_help'] = 'File that will be added to the current blog. Use the "Add field" link to upload more than one file at the same time';
$messages['add_field'] = 'Add field';
$messages['resource_description_help'] = 'Longer description of the contents of this file';
$messages['resource_album_help'] = 'Select the album to which this file will be added';
$messages['error_no_resource_uploaded'] = 'There was no file selected to upload';
$messages['resource_added_ok'] = 'Resource "%s" added successfully';
$messages['error_resource_forbidden_extension'] = 'The file was not added because it is of a forbidden type';
$messages['error_resource_too_big'] = 'The file was not added because it is too big';
$messages['error_uploads_disabled'] = 'The file was not added because uploads have been disabled';
$messages['error_quota_exceeded'] = 'The file was not added because resource quota has been exceeded';
$messages['error_adding_resource'] = 'There was an error adding the resource file';

// edit resource
$messages['editResource'] = 'Edit Resource';
$messages['resource_information_help'] = 'Below is some information about this resource file';
$messages['information'] = 'Information';
$messages['size'] = 'Size';
$messages['format'] = 'Format';
$messages['dimensions'] = 'Dimensions';
$messages['bits_per_sample'] = 'Bits per sample';
$messages['sample_rate'] = 'Sample rate';
$messages['number_of_channels'] = 'Number of channels';
$messages['legnth'] = 'Length';
$messages['thumbnail_format'] = 'Thumbnail format';
$messages['regenerate_preview'] = 'Regenerate preview';
$messages['error_fetching_resource'] = 'There was an error fetching the resource';
$messages['error_updating_resource'] = 'There was an error updating the resource';
$messages['resource_updated_ok'] = 'Resource "%s" updated successfully';

// blog settings
$messages['blog_link'] = 'Blog link';
$messages['blog_link_help'] = 'Permanent link to this blog';
$messages['blog_name_help'] = 'Title for this blog';
$messages['blog_description_help'] = 'Longer description about the contents of this blog';
$messages['language'] = 'Language';
$messages['blog_language_help'] = 'Language used to display the texts of this blog, both in the public and administration side';
$messages['max_main_page_items'] = 'Number of items in the main page';
$messages['max_main_page_items_help'] = 'Number of posts that should be displayed at all times in the main page of the blog';
$messages['max_recent_items'] = 'Number of recent items';
$messages['max_recent_items_help'] = 'Maximum number of posts that will be shown as recent in the front page';
$messages['template'] = 'Template';
$messages['choose'] = 'Choose';
$messages['blog_template_help'] = 'Template that will be used to display the contents of the blog. This list includes global templates plus all the templates installed only for this blog';
$messages['use_read_more'] = 'Use "more..." link in posts';
$messages['use_read_more_help'] = 'If enabled, only the text typed in the "Text" textbox will be shown in the main page. In order to display the "Extended text", a "more..." link will be added to each post';
$messages['enable_wysiwyg'] = 'Enable the visual editor of posts';
$messages['enable_wysiwyg_help'] = 'Enables a more powerful, visual editor of HTML mark up. The editor only works in Internet Explorer 5.5 or higher or Mozilla 1.3 or higher';
$messages['enable_comments'] = 'Enable comments by default';
$messages['enable_comments_help'] = 'Enable comments for all posts by default. Comments can still be enabled/disabled for certain posts when creating new posts or editing old ones';
$messages['show_future_posts'] = 'Show future posts in the calendar';
$messages['show_future_posts_help'] = 'Whether posts which have a date in the future should appear in the calendar and visible to users';
$messages['comments_order'] = 'Comments order';
$messages['comments_order_help'] = 'Order in which comments should be displayed in the front page';
$messages['oldest_first'] = 'Oldest first';
$messages['newest_first'] = 'Newest first';
$messages['categories_order'] = 'Categories order';
$messages['categories_order_help'] = 'Order in which categories should be displayed in the front page';
$messages['most_recent_updated_first'] = 'Most recently updated first';
$messages['alphabetical_order'] = 'Alphabetical order';
$messages['reverse_alphabetical_order'] = 'Reverse alphabetical order';
$messages['most_articles_first'] = 'Most articles first';
$messages['link_categories_order'] = 'Link categories order';
$messages['link_categories_order_help'] = 'Order in which link categories should appear in the front page';
$messages['most_links_first'] = 'Most links first';
$messages['most_links_last'] = 'Most links last';
$messages['time_offset'] = 'Time offset';
$messages['time_offset_help'] = 'Time difference in hours that will be dynamically added to each date and time in the blog';
$messages['close'] = 'Close';
$messages['select'] = 'Select';
$messages['error_updating_settings'] = 'There was an error updating the blog settings. Please check the data and try again';
$messages['error_invalid_number'] = 'The number is not correct';
$messages['error_incorrect_time_offset'] = 'The time offset is not valid';
$messages['blog_settings_updated_ok'] = 'Blog settings updated successfully';
$messages['hours'] = 'Hours';

// user settings
$messages['username_help'] = 'Public username. It cannot be changed';
$messages['full_name'] = 'Full name';
$messages['full_name_help'] = 'Complete full name';
$messages['password_help'] = 'Type and confirm a new password, or leave empty for no change';
$messages['confirm_password'] = 'Confirm password';
$messages['email'] = 'Email';
$messages['email_help'] = 'Email address where notifications will be sent';
$messages['bio'] = 'Your bio';
$messages['bio_help'] = 'A longer description of yourself can be provided here';
$messages['picture'] = 'Picture';
$messages['user_picture_help'] = 'Please select a picture form the ones uploaded to this blog as your personal picture';
$messages['error_invalid_password'] = 'The password is not correct. Please make sure that it is not too short';
$messages['error_passwords_dont_match'] = 'Sorry, passwords do not match';
$messages['error_incorrect_email_address'] = 'The email address is not correct';
$messages['error_updating_user_settings'] = 'There was an error updating your user settings. Please check the data and try again';
$messages['user_settings_updated_ok'] = 'User settings updated successfully';
$messages['resource'] = 'Resource';

// plugin centre
$messages['identifier'] = 'Identifier';
$messages['error_plugins_disabled'] = 'Sorry, Plugins are disabled.';

// blog users
$messages['revoke_permissions'] = 'Revoke permissions';
$messages['error_no_users_selected'] = 'There were no users selected';
$messages['user_removed_from_blog_ok'] = 'User "%s" does not have permissions to access this blog any more';
$messages['users_removed_from_blog_ok'] = '%s users do not have access to this blog any more';
$messages['error_removing_user_from_blog'] = 'There was an error removing access to this blog from user "%s"';
$messages['error_removing_user_from_blog2'] = 'There was an error removing access to this blog from user whose identifier is "%s"';

// new blog user
$messages['new_blog_username_help'] = 'Username of the user to whom you would like to give access to this blog. New users will only have access to the "Manage" and "Resources" sections.';
$messages['send_notification'] = 'Send notification';
$messages['send_user_notification_help'] = 'Send an email notification to this user';
$messages['notification_text'] = 'Notification Text';
$messages['notification_text_help'] = 'Text that will be included in the notification message';
$messages['error_adding_user'] = 'There was an error granting access to the user. Please check the data and try again';
$messages['error_empty_text'] = 'You must provide some text';
$messages['error_adding_user'] = 'There was an error adding the user. Please check the data and try again';
$messages['error_invalid_user'] = 'The user "%s" is not valid or does not exist';
$messages['user_added_to_blog_ok'] = 'User "%s" has been given access to this blog successfully';

// blog templates
$messages['error_no_templates_selected'] = 'There were no templates selected';
$messages['error_template_is_current'] = 'Template "%s" cannot be deleted because it is the current one';
$messages['error_removing_template'] = 'There was an error deleting template "%s"';
$messages['template_removed_ok'] = 'Template "%s" deleted successfully';
$messages['templates_removed_ok'] = '%s templates deleted successfully';

// new blog template
$messages['template_installed_ok'] = 'Template "%s" added successfully';
$messages['error_installing_template'] = 'There was an error installing template "%s"';
$messages['error_missing_base_files'] = 'Some of the template files are missing';
$messages['error_add_template_disabled'] = 'New templates cannot be added because this feature has been disabled in this site';
$messages['error_must_upload_file'] = 'There was no template package uploaded';
$messages['error_uploads_disabled'] = 'Uploads have been disabled in this site';
$messages['error_no_new_templates_found'] = 'No new templates were found';
$messages['error_template_not_inside_folder'] = 'The files used in the template set must be inside a folder with the same name as the template set';
$messages['error_missing_base_files'] = 'Some of the basic template files are missing';
$messages['error_unpacking'] = 'There was an error unpacking the file';
$messages['error_forbidden_extensions'] = 'The template set included files with forbidden extensions';
$messages['error_creating_working_folder'] = 'There was an error creating a temporary folder to unpack the files';
$messages['error_checking_template'] = 'There was an error checking the template: %s';
$messages['template_package'] = 'Template package';
$messages['blog_template_package_help']  = 'Use this form to upload a new template set, which will only be available to your blog. If it is not possible to upload a template package using this form, upload the template set manually and place it in <b>%s</b>, which is the folder where your blog templates are stored and click the "<b>Scan templates</b>" button. pLog will scan the folder and will automatically add any new template it can find.';
$messages['scan_templates'] = 'Scan Templates';

// site users
$messages['user_status_active'] = 'Active';
$messages['user_status_disabled'] = 'Disabled';
$messages['user_status_all'] = 'All';
$messages['user_status_unconfirmed'] = 'Unconfirmed';
$messages['error_invalid_user2'] = 'User with identifier "%s" does not exist';
$messages['error_deleting_user'] = 'There was an error disabling user "%s"';
$messages['user_deleted_ok'] = 'User "%s" disabled successfully';
$messages['users_deleted_ok'] = '%s users disabled successfully';

// create user
$messages['user_added_ok'] = 'User "%s" added successfully';
$messages['error_incorrect_username'] = 'The username is not correct or it is already in use';
$messages['user_status_help'] = 'Current status for this user';
$messages['user_blog_help'] = 'Blog to which this user will be initially assigned';
$messages['none'] = 'None';

// edit user
$messages['error_invalid_user'] = 'The user identifier is not correct or the user does not exist';
$messages['error_updating_user'] = 'There was an error updating the user settings. Please check the data and try again';
$messages['blogs'] = 'Blogs';
$messages['user_blogs_helps'] = 'Blogs which this user currently owns or where this user has access';
$messages['site_admin'] = 'Administrator';
$messages['site_admin_help'] = 'Whether this user has administrator privileges and is allowed to see the "Administration" area and perform administrative tasks';
$messages['user_updated_ok'] = 'User "%s" updated successfully';

// site blogs
$messages['blog_status_all'] = 'All';
$messages['blog_status_active'] = 'Active';
$messages['blog_status_disabled'] = 'Disabled';
$messages['blog_status_unconfirmed'] = 'Unconfirmed';
$messages['owner'] = 'Owner';
$messages['quota'] = 'Quota';
$messages['bytes'] = 'bytes';
$messages['error_no_blogs_selected'] = 'No blogs were selected to disable';
$messages['error_blog_is_default_blog'] = 'Blog "%s" cannot be deleted because it is set as the default blog';
$messages['blog_deleted_ok'] = 'Blog "%s" disabled successfully';
$messages['blogs_deleted_ok'] = '%s blogs deleted successfully';
$messages['error_deleting_blog'] = 'There was an error disabling blog "%s"';
$messages['error_deleting_blog2'] = 'There was an error disabling blog with identifier "%s"';

// create blog
$messages['error_adding_blog'] = 'There was an error adding the blog. Please check the data and try again';
$messages['blog_added_ok'] = 'Blog "%s" successfully added';

// edit blog
$messages['blog_status_help'] = 'Blog status';
$messages['blog_owner_help'] = 'User who will be set as the owner, with full control on the blog settings';
$messages['users'] = 'Users';
$messages['blog_quota_help'] = 'Resource quota in bytes. Set as 0 for unlimited or leave empty to make the blog use the global quota';
$messages['blog_users_help'] = 'Users who have access to this blog. Select a user from the left and move it to the right list in order to give this user access in this blog';
$messages['edit_blog_settings_updated_ok'] = 'Blog "%s" updated successfully';
$messages['error_updating_blog_settings'] = 'There was an error updating blog "%s"';
$messages['error_incorrect_blog_owner'] = 'The user selected as blog owner is not correct';
$messages['error_fetching_blog'] = 'There was an error fetching the blog';
$messages['error_updating_blog_settings2'] = 'There was an error updating the blog. Please check the data and try again';
$messages['add_or_remove'] = 'Add or remove users';

// site locales
$messages['locale'] = 'Locale';
$messages['locale_encoding'] = 'Encoding';
$messages['locale_deleted_ok'] = 'Locale "%s" deleted successfully';
$messages['error_no_locales_selected'] = 'There were no locales selected to remove';
$messages['error_deleting_only_locale'] = 'The locale cannot be deleted because is is the only one left in the system';
$messages['locales_deleted_ok']= '%s locales deleted successfully';
$messages['error_deleting_locale'] = 'There was an error deleting locale "%s"';
$messages['error_locale_is_default'] = 'Locale "%s" cannot be deleted because it is the default locale for new blogs';

// add locale
$messages['error_invalid_locale_file'] = 'The locale file is not valid';
$messages['error_no_new_locales_found'] = 'No new locale files were found';
$messages['locale_added_ok'] = 'Locale "%s" added successfully';
$messages['error_saving_locale'] = 'There was an error saving the new locale';
$messages['scan_locales'] = 'Scan Locales';
$messages['add_locale_help'] = 'Use this form to upload a new locale file. If it is not possible to upload files using this form, upload the locale file manually and place it in <b>./locales/</b>, which is the folder where locale files are stored and click the "<b>Scan Locales</b>" button. pLog will scan the folder and will automatically add any new locale file can find.';

// site templates
$messages['error_template_is_default'] = 'Template "%s" cannot be deleted because it is the default one for new blogs';

// add template
$messages['global_template_package_help'] = 'Use this form to upload a new template set, which will be available to all blogs in the site. If it is not possible to upload a template package using this form, upload the template set manually and place it in <b>%s</b>, which is the folder where globally available templates are stored and click the "<b>Scan templates</b>" button. pLog will scan the folder and will automatically add any new template it can find.';

// global settings
$messages['site_config_saved_ok'] = 'Site settings saved successfully';
$messages['error_saving_site_config'] = 'There was an error saving the site settings';
/// general settings
$messages['help_comments_enabled'] = 'Enable comments for new blogs by default [Default = Yes]';
$messages['help_beautify_comments_text'] = 'If enabled, comments posted by users will be formatted by adding paragraphs and auto-linking all URLs [Default = Yes]';
$messages['help_temp_folder'] = 'Folder that pLog can use to write its temporary data such as compiled templates, etc. Use a folder outside the web server tree for increased security [Default = ./tmp]';
$messages['help_base_url'] = 'Base URL where this blog is installed';
$messages['help_subdomains_enabled'] = 'Enable or disable subdomains. Please see the documentation for more information regarding subdomains [Default = No]';
$messages['help_subdomains_base_url'] = 'When subdomains are enabled, this base URL is used instead of base_url. Use {blogname} to get the blog name and {username} to get the name of the user owner of the blog in order to generate a link to a blog. (i.e. http://{blogname}.yourdomain.com})';
$messages['help_include_blog_id_in_url'] = 'Meaningful only when subdomains are enabled and "normal" URLs are enabled, forces internally-generated URLs not to have the "blogId" parameter. Do not change unless you know what you are doing [Default = Yes]';
$messages['help_script_name'] = 'Set this if you need to rename index.php to something else [Default = index.php]';
$messages['help_show_posts_max'] = 'Maximum number of posts shown in the main page. Only meaningful for new blogs [Default = 15]';
$messages['help_recent_posts_max'] = 'Maximum number of recent posts shown in the main page. Only meaningful for new blogs [Default = 10]';
$messages['help_save_drafts_via_xmlhttprequest_enabled'] = 'Whether the feature that allows to save drafts via Javascript and the XmlHttpRequest is enabled [Default = Yes]';
$messages['help_locale_folder'] = 'Folder where the locale files are stored [Default = ./locale]';
$messages['help_default_locale'] = 'Default language settings for new blogs [Default = en_UK]';
$messages['help_default_blog_id'] = 'Default blog that will be shown if no other is specified [Default = 1]';
$messages['help_default_time_offset'] = 'Default time offset for new blogs [Default = 0]';
$messages['help_html_allowed_tags_in_comments'] = 'Space-separated list of the HTML tags that are allowed in comments [Default = &lt;a&gt;&lt;i&gt;&lt;br&gt;&lt;br/&gt;&lt;b&gt;]';
$messages['help_referer_tracker_enabled'] = 'Enable or disable the feature to save referrers to the database. Set to disabled for higher performance [Default = Yes]';
$messages['help_show_more_enabled'] = 'Enable or disable the "more..." feature by default for new blogs [Default = Yes]';
$messages['help_update_article_reads'] = 'Enable or disable the update of the counter of times that an article has been read is updated or not. Set to disabled for higher performance [Default = Yes]';
$messages['help_update_cached_article_reads'] = 'Enable or disable the update of the counter of times that an article has been read is updated, even when caching has been turned on [Default = Yes]';
$messages['help_xmlrpc_ping_enabled'] = 'Enable or disable sending XMLRPC pings to sites that support this feature [Default = Yes]';
$messages['help_send_xmlrpc_pings_enabled_by_default'] = 'Enable or disable by default this feature when posting or updating an article [Default = Yes]';
$messages['help_xmlrpc_ping_hosts'] = 'URL pointing to the XMLRPC interface of sites that support the XMLRPC ping specification. Put each URL in one new line [Default = http://rpc.weblogs.com/RPC2]';
$messages['help_trackback_server_enabled'] = 'Enable or disable the feature to receive incoming trackbacks [Default = Yes]';
$messages['help_htmlarea_enabled'] = 'Enable or disable the WYSIWYG post editor by default in new blogs [Default = Yes';
$messages['help_plugin_manager_enabled'] = 'Enable or disable plugins [Default = Yes]';
$messages['help_minimum_password_length'] = 'Minimum length for passwords [Default = 4]';
$messages['help_xhtml_converter_enabled'] = 'If enabled, pLog will try to convert all HTML code into proper XHTML code [Default = Yes]';
$messages['help_xhtml_converter_aggressive_mode_enabled'] = 'If enabled, pLog will try even harder to generate XHTML out of HTML code, but it will be more prone to errors [Default = No]';
$messages['help_session_save_path'] = 'Please use this setting to change the folder where pLog stores its session data, via the PHP function session_save_path() Please make sure that the folder is writable by the web server. Leave empty to use PHP\'s default session folder [Default = (empty)]';
// summary settings
$messages['help_summary_page_show_max'] = 'Number of items that will be shown in the summary page. This setting control all lists in the summary page (recent articles, most active blogs, etc) [Default = 10]';
$messages['help_summary_blogs_per_page'] = 'Number of blogs per page in the "Blogs List" section [Default = 25]';
$messages['help_forbidden_usernames'] = 'List of usernames separated by a blank space that are not allowed to be registered [Default = admin www blog ftp]';
$messages['help_force_one_blog_per_email_account'] = 'Restrict to only one blog per email account [Default = No]';
$messages['help_summary_show_agreement'] = 'Show and an agreement text and make users accept it before proceeding to the registration process [Default = Yes]';
$messages['help_need_email_confirm_registration'] = 'Force users to confirm their registration by clicking a link embedded in an email sent to their account [Default = Yes]';
$messages['help_summary_disable_registration'] = 'Disable users registration of new blogs in this site [Default = No]';
// templates
$messages['help_template_folder'] = 'Folder where templates are stored [Default = ./templates]';
$messages['help_default_template'] = 'Default template for new blogs [Default = standard]';
$messages['help_users_can_add_templates'] = 'Allow users to upload their own custom templates [Default = Yes]';
$messages['help_template_compile_check'] = 'If enabled, Smarty will check every time if template files have changed and if so, use the new version. Set this to disabled for higher performance [Default = Yes]';
$messages['help_template_cache_enabled'] = 'Enable the template cache. If enabled, the cached version of a page will be used whenever possible. No data will need to be fetched from the database and templates will not need to be recompiled [Default = Yes]';
$messages['help_template_cache_lifetime'] = 'Lifetime in seconds of the cache. Set to -1 to force the cache to never expire. If set to 0, the cache will be disabled but it is recommended to set template_cache_enabled to "No" in order to disable the cache [Default = -1]';
$messages['help_template_http_cache_enabled'] = 'Enable support for HTTP conditional requests. If enabled, pLog will take the "If-Modified-Since" HTTP header into account and send only content if strictly needed. Enable this to save bandwidth [Default = No]';
$messages['help_allow_php_code_in_templates'] = 'Allows to embed native PHP code in Smarty templates inside {php}...{/php} blocks [Default = No]';
// urls
$messages['help_request_format_mode'] = 'Select one of the available URL format. If using custom URLs, make sure to configure the settings below [Default = Plain]';
$messages['plain'] = 'Plain';
$messages['search_engine_friendly'] = 'Search engine friendly';
$messages['custom_url_format'] = 'Custom URLs';
$messages['help_permalink_format'] = 'Format for permalinks when using custom URLs [Default = /blog/{blogname}/{catname}/{year}/{month}/{day}/{postname}$]';
$messages['help_category_link_format'] = 'Format for links to categories when using custom URLs [Default = /blog/{blogname}/{catname}$]';
$messages['help_blog_link_format'] = 'Format for links to blogs when using custom URLs [Default = /blog/{blogname}$]';
$messages['help_archive_link_format'] = 'Format for links to archives when using custom URLs [Default = /blog/{blogname}/archives/{year}/?{month}/?{day}]';
$messages['help_user_posts_link_format'] = 'Format for articles posted by a certain user when using custom URLs [Default = /blog/{blogname}/user/{username}$]';
$messages['help_post_trackbacks_link_format'] = 'Format for links to the trackbacks page when using custom URLs [Default = /blog/{blogname}/post/trackbacks/{postname}$]';
$messages['help_template_link_format'] = 'Format for links to custom static template pages when using custom URLs [Default = /blog/{blogname}/page/{templatename}$]';
$messages['help_album_link_format'] = 'Format for links to resource albums when using custom URLs [Default = /blog/{blogname}/album/{albumname}$]';
$messages['help_resource_link_format'] = 'Format for links to resource pages with files when using custom URLs [Default = /blog/{blogname}/resource/{albumname}/{resourcename}$]';
$messages['help_resource_preview_link_format'] = 'Format for links to resource previews when using custom URLs [Default = /blog/{blogname}/resource/{albumname}/preview/{resourcename}$]';
$messages['help_resource_medium_size_preview_link_format'] = 'Format for links to medium-sized resource previews when using custom URLs [Default = /blog/{blogname}/resource/{albumname}/preview-med/{resourcename}$]';
$messages['help_resource_download_link_format'] = 'Format for links to files when using custom URLs [Default = /blog/{blogname}/resource/{albumname}/download/{resourcename}$]';
// email
$messages['help_check_email_address_validity'] = 'When checking email addresses, perform some basic checks to see whether an MX record exists in the given domain and if so, if the email address is actually a valid mailbox [Default = No]';
$messages['help_email_service_enabled'] = 'Enable or disable sending out emails [Default = Yes]';
$messages['help_post_notification_source_address'] = 'Email address that will appear in the "From:" field when sending emails from pLog [Default = noreply@your.host.com]';
$messages['help_email_service_type'] = 'Which system to use in order to send emails [Default = PHP]';
$messages['help_smtp_host'] = 'If using SMTP as the email sending system, set this to the SMTP server that will be used to send out the messages [Default = (empty)]';
$messages['help_smtp_port'] = 'If the SMTP server is running in a port other than 25, configure this value [Default = (empty)]';
$messages['help_smtp_use_authentication'] = 'Enable this if the SMTP server requires basic authentication  [Default = No]';
$messages['help_smtp_username'] = 'If the SMTP server requires authentication, set this to the right username [Default = (empty)]';
$messages['help_smtp_password'] = 'If the SMTP server requires authentication, set this to the password of the username above [Default = (empty)]';
// helpers
$messages['help_path_to_tar'] = 'Path to the "tar" tool, needed to unpack template sets in .tar.gz or tar.bz2 formats [Default = /bin/tar]';
$messages['help_path_to_gzip'] = 'Path to the "gzip" tool, needed to unpack template sets in .tar.gz format [Default = /bin/gzip]';
$messages['help_path_to_bz2'] = 'Path to the "bzip2" tool, needed to unpack template sets in .tar.bz2 format [Default = /usr/bin/bzip2]';
$messages['help_path_to_unzip'] = 'Path to the "unzip" tool, needed to unpack template sets in .zip format [Default = /usr/bin/unzip]';
$messages['help_unzip_use_native_version'] = 'Use a bundled PHP native version to unpack .zip files [Default = No]';
// uploads
$messages['help_uploads_enabled'] = 'Whether users are allowed to upload files. This affects the resources section and the upload of custom templates and locales [Default = Yes]';
$messages['help_maximum_file_upload_size'] = 'Maximum file size allowed in bytes. This limit will never be higher than PHP\'s own limit  [Default = 2000000]';
$messages['help_upload_forbidden_files'] = 'Space-separated list of file types not allowed to be uploaded. Usage of \'*\' and \'?\' is allowed [Default = *.php *.php3 *.php4 *.phtml]';
// interfaces
$messages['help_xmlrpc_api_enabled'] = 'Enable or disable access via XMLRPC to blogs [Default = Yes]';
$messages['help_rdf_enabled'] = 'Enable the syndication of contents via Atom or RSS [Default = Yes]';
$messages['help_default_rss_profile'] = 'Default version of RSS or Atom used to syndicate contents unless otherwise specified [Default = RSS 1.0]';
// security
$messages['help_security_pipeline_enabled'] = 'Enable the security pipeline and all related filters. This also affects plugins that register new filters [Default = Yes]';
$messages['help_ip_address_filter_enabled'] = 'Enable the IP address filter. The security pipeline also needs to be enabled in order for this feature to work [Default = Yes]';
$messages['help_content_filter_enabled'] = 'Enable the regular expression-based content filter. The security pipeline also needs to be enabled in order for this feature to work [Default = Yes]';
$messages['help_maximum_comment_size'] = 'Maximum size in bytes that a comment can have, set to 0 to disable this feature [Default = 0]';
// bayesian filter
$messages['help_bayesian_filter_enabled'] = 'Enable the Bayesian filter for improved automatic spam filtering  [Default = Yes]';
$messages['help_bayesian_filter_spam_probability_treshold'] = 'Maximum threshold before which a comment can be considered spam  [Default = 0.9]';
$messages['help_bayesian_filter_nonspam_probability_treshold'] = 'Minimum threshold after which a post can be considered non-spam [Default = 0.2]';
$messages['help_bayesian_filter_min_length_token'] = 'Minimum length of a token in order for it to be considered meaningful for the Bayesian filter  [Default = 3]';
$messages['help_bayesian_filter_max_length_token'] = 'Maximum length of a token in order for it to be considered meaningful for the Bayesian filter  [Default = 100]';
$messages['help_bayesian_filter_number_significant_tokens'] = 'Number of significant tokens  [Default = 15]';
$messages['help_bayesian_filter_spam_comments_action'] = 'What to do with comments that are considered spam. Set to "Throw away" only when your filter has been properly trained  [Default = Keep]';
$messages['keep_spam_comments'] = 'Keep in the database marked as "Spam"';
$messages['throw_away_spam_comments'] = 'Throw them away (do not save them)';
// resources
$messages['help_resources_enabled'] = 'Enable or disable resources [Default = Yes]';
$messages['help_resources_folder'] = 'Folder where resource files will be kept. Set outside the web server tree for increased security  [Default = ./gallery]';
$messages['help_thumbnail_method'] = 'Method used to generate thumbnails. If using PHP, support for GD is required  [Default = PHP]';
$messages['help_path_to_convert'] = 'Path to the "convert" tool from the ImageMagick package. Mandatory if the thumbnail method is "ImageMagick"  [Default = /usr/bin/convert]';
$messages['help_thumbnail_format'] = 'Format in which thumbnails are saved  [Default = Same as image]';
$messages['help_thumbnail_height'] = 'Default height for small thumbnails  [Default = 120]';
$messages['help_thumbnail_width'] = 'Default width for small thumbnails  [Default = 120]';
$messages['help_medium_size_thumbnail_height'] = 'Default height for medium thumbnails  [Default = 480]';
$messages['help_medium_size_thumbnail_width'] = 'Default width for medium thumbnails  [Default = 640]';
$messages['help_thumbnails_keep_aspect_ratio'] = 'Keep the aspect ratio when generating thumbnails. Might generate thumbnails bigger than the sizes specified above but quality is better [Default = Yes]';
$messages['help_thumbnail_generator_force_use_gd1'] = 'Force pLog to use GD1-only functions [Default = No]';
$messages['help_thumbnail_generator_user_smoothing_algorithm'] = 'Algorithm used to smooth thumbnails. Only used when the thumbnail method is GD [Default = PHP Imagecopyresampled]';
$messages['help_resources_quota'] = 'Global resource quota for blogs in bytes (i.e. 5242880 Bytes = 5MB), or set to 0 for unlimited quota [Default = 0]';
$messages['help_resource_server_http_cache_enabled'] = 'Enable support for the "If-Modified-Since" header and HTTP conditional requests. Enable for increased bandwidth savings  [Default = No]';
$messages['help_resource_server_http_cache_lifetime'] = 'Time in microseconds that clients should use the cached version of resources [Default = 9999999]';
$messages['same_as_image'] = 'Same as original image';
// search
$messages['help_search_engine_enabled'] = 'Enable the search engine  [Default = Yes]';
$messages['help_search_in_custom_fields'] = 'Search in custom fields  [Default = Yes]';
$messages['help_search_in_comments'] = 'Search in comments  [Default = Yes]';

// cleanup
$messages['purge'] = 'Purge';
$messages['cleanup_spam'] = 'Purge Spam';
$messages['cleanup_spam_help'] = 'This will remove all comments that have been marked as spam by users. It will not be possible to recover them once they have been removed';
$messages['spam_comments_purged_ok'] = 'Spam comments purged successfully';
$messages['cleanup_posts'] = 'Purge Posts';
$messages['cleanup_posts_help'] = 'This will remove all posts that have been deleted by users (marked as "Deleted") It will not be possible to recover them once they have been removed';
$messages['posts_purged_ok'] = 'Posts purged successfully';

/// summary ///
// front page
$messages['summary'] = 'Summary';
$messages['register'] = 'Register';
$messages['summary_welcome'] = 'Welcome!';
$messages['summary_most_active_blogs'] = 'Most Active Blogs';
$messages['summary_most_commented_articles'] = 'Most Commented Articles';
$messages['summary_most_read_articles'] = 'Most Read articles';
$messages['password_forgotten'] = 'Forgot your password?';
$messages['summary_newest_blogs'] = 'Newest Blogs';
$messages['summary_latest_posts'] = 'Latest Posts';
$messages['summary_search_blogs'] = 'Search Blogs';

// blog list
$messages['updated'] = 'Updated';
$messages['total_reads'] = 'tota';

// blog profile
$messages['blog'] = 'Blog';
$messages['latest_posts'] = 'Latest posts';

// registration
$messages['register_step0_title'] = 'Service terms acceptance';
$messages['agreement'] = 'Agreement'; 
$messages['decline'] = 'Decline';
$messages['accept'] = 'Accept';
$messages['read_service_agreement'] = 'Please read the terms of this service and click the "Accept" button if you agree';
$messages['register_step1_title'] = 'Create a user [1/4]';
$messages['register_step1_help'] = 'First you need to create a new user in order to get a blog. This user will be the owner of the blog and will have access to all its functionalities';
$messages['register_next'] = 'Next';
$messages['register_back'] = 'Back';
$messages['register_step2_title'] = 'Create a blog [2/4]';
$messages['register_blog_name_help'] = 'Name for your new blog';
$messages['register_step3_title'] = 'Choose a Template [3/4]';
$messages['step1'] = 'Step 1';
$messages['step2'] = 'Step 2';
$messages['step3'] = 'Step 3';
$messages['register_step3_help'] = 'Please select one of the available templates as the default one for your blog. If you do not like it later on, it can always be changed';
$messages['error_must_choose_template'] = 'Please select one template';
$messages['select_template'] = 'Select template';
$messages['register_step5_title'] = 'Congratulations! [4/4]';
$messages['finish'] = 'Finish';
$messages['register_need_confirmation'] = 'An email message including the confirmation has been sent to your email address, please click the link as soon as you receive the message to start blogging!';
$messages['register_step5_help'] = 'Congratulations, your new user and blog have been successfully created!';
$messages['register_blog_link'] = 'If you would like to take a look at your new blog, you can go there now: <a href="%2$s">%1$s</a>';
$messages['register_blog_admin_link'] = 'If you prefer to start posting right away, please click to go to the <a href="admin.php">administration interface</a>';
$messages['register_error'] = 'There was an error during the process';
$messages['error_registration_disabled'] = 'Sorry, registration of new blogs in this site has been disabled';
// registration article topic and text
$messages['register_default_article_topic'] = 'Congratulations!';
$messages['register_default_article_text'] = 'If you can read this post, it means that the registration process was successful and that you can start blogging';
$messages['register_default_category'] = 'General';
// confirmation email
$messages['register_confirmation_email_text'] = 'Please click the link below in order to activate your blog:

%s

Have a nice day';
$messages['error_invalid_activation_code'] = 'Sorry, the confirmation code is not valid';
$messages['blog_activated_ok'] = 'Congratulations, your new user and blog have been successfully validated!';
// forgot your password?
$messages['reset_password'] = 'Reset your password';
$messages['reset_password_username_help'] = 'Name of the user whose password you would like to reset';
$messages['reset_password_email_help'] = 'Email address which was used to register this user';
$messages['reset_password_help'] = 'Use this form to reset the password of your user, should you not remember it. Please type the name of the user whose password you would like to reset, as well as the email address that was used to register this user';
$messages['error_resetting_password'] = 'There was an error resetting the password. Please check the data and try again';
$messages['reset_password_error_incorrect_email_address'] = 'The email address is not correct or it is not the email address used to register this user';
$messages['password_reset_message_sent_ok'] = 'An email message with a link has been sent to your email address. Please click the link in order to reset your password';
$messages['error_incorrect_request'] = 'The parameters in the URL are not correct';
$messages['change_password'] = 'Set new password';
$messages['change_password_help'] = 'Please type and confirm your new password';
$messages['new_password'] = 'New password';
$messages['new_password_help'] = 'Type here your new password';
$messages['password_updated_ok'] = 'Your password has been successfully updated';

// Suggested by BCSE, some useful messages that not available in official locale
$messages['upgrade_information'] = 'This page looks plain and un-styled because you\'re using a non-standard compliant browser. To see it in its best form, please <a href="http://www.webstandards.org/upgrade/" title="The Web Standards Project\'s Browser Upgrade initiative">upgrade</a> to a browser that supports web standards. It\'s free and painless.';
$messages['jump_to_navigation'] = 'Jump to Navigation.';
$messages['comment_email_never_display'] = 'Line and paragraph breaks automatic, e-mail address never displayed.';
$messages['comment_html_allowed'] = '<acronym title="Hypertext Markup Language">HTML</acronym> allowed: &lt;<acronym title="Hyperlink">a</acronym> href=&quot;&quot; title=&quot;&quot; rel=&quot;&quot;&gt; &lt;<acronym title="Acronym Description">acronym</acronym> title=&quot;&quot;&gt; &lt;<acronym title="Quote">blockquote</acronym> cite=&quot;&quot;&gt; &lt;<acronym title="Strike">del</acronym>&gt; &lt;<acronym title="Italic">em</acronym>&gt; &lt;<acronym title="Underline">ins</acronym>&gt; &lt;<acronym title="Bold">strong</acronym>&gt;';
$messages['trackback_uri'] = 'The <acronym title="Uniform Resource Identifier">URI</acronym> to trackback this entry is: ';
$messages['previous_post'] = 'Bir Önceki Yazý';
$messages['next_post'] = 'Bir sonraki yazý';
$messages['comment_default_title'] = '(Untitled)';
$messages['guestbook'] = 'Ziyaretçi Defteri';
$messages['trackbacks'] = 'Ayrýntýlar';
$messages['menu'] = 'Menu';
$messages['albums'] = 'Resim Galerisi';
$messages['admin'] = 'Yönetici';
?>