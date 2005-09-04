<?php
/*
	������� ������� �������� ������� �������� www.italiano-russo.it
	��� ��������� � ����������� admin@italia-ru.it 
	����� ����������� ����� ������ ��� ����, ����� ����� ���� �������� ��� �� 	������� ��������. �� ����������� ���������� �����������, ����������, �� 	����������� ���� http://www.plogworld.net 
*/

// ���� ��������� �������� � ������������ ���������, ��������������� ��� ������
// header ("Content-Type: text/html; charset=utf-8");

// set this to the encoding that should be used to display the pages correctly
$messages['encoding'] = 'utf-8';
$messages['locale_description'] = 'Russian Translation';
// locale format, see Locale::formatDate for more information
$messages['date_format'] = '%d/%m/%Y %H:%M';

// days of the week
$messages['days'] = Array( '�����������', '�����������', '�������', '�����', '�������', '�������', '�������' );
// -- compatibility, do not touch -- //
$messages['Monday'] = $messages['days'][1];
$messages['Tuesday'] = $messages['days'][2];
$messages['Wednesday'] = $messages['days'][3];
$messages['Thursday'] = $messages['days'][4];
$messages['Friday'] = $messages['days'][5];
$messages['Saturday'] = $messages['days'][6];
$messages['Sunday'] = $messages['days'][0];

// abbreviations
$messages['daysshort'] = Array( '��', '��', '��', '��', '��', '��', '��' );
// -- compatibility, do not touch -- //
$messages['Mo'] = $messages['daysshort'][1];
$messages['Tu'] = $messages['daysshort'][2];
$messages['We'] = $messages['daysshort'][3];
$messages['Th'] = $messages['daysshort'][4];
$messages['Fr'] = $messages['daysshort'][5];
$messages['Sa'] = $messages['daysshort'][6];
$messages['Su'] = $messages['daysshort'][0];

// months of the year
$messages['months'] = Array( '������', '�������', '����', '������', '���', '����', '����', '������', '��������', '�������', '������', '�������' );
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
$messages['error'] = '������';
$messages['date'] = '����';

// miscellaneous texts
$messages['of'] = 'of';
$messages['recently'] = '���������...';
$messages['comments'] = '�����������';
$messages['comment on this'] = '�����������';
$messages['my_links'] = '��� ������';
$messages['archives'] = '������';
$messages['search'] = '�����';
$messages['calendar'] = '���������';
$messages['search_s'] = '�����';
$messages['search_this_blog'] = '����� � ���� ��������:';
$messages['about_myself'] = '��� �?';
$messages['permalink_title'] = '���������� ������ �� ������';
$messages['permalink'] = '���������� ������';
$messages['posted_by'] = '�������(�)';
$messages['reply'] = '�����';

// add comment form
$messages['add_comment'] = '�������� �����������';
$messages['comment_topic'] = '����';
$messages['comment_text'] = '�����';
$messages['comment_username'] = '���� ���';
$messages['comment_email'] = '����� ����������� ����� (���� �������)';
$messages['comment_url'] = '���� ������������ ��������� (���� �������)';
$messages['comment_send'] = '���������';
$messages['comment_added'] = '����������� ��������!';
$messages['comment_add_error'] = '������ ��� �������� �����������';
$messages['article_does_not_exist'] = '��������� �� ����������';
$messages['no_posts_found'] = '��������� �� �������';
$messages['user_has_no_posts_yet'] = '� ������������ ��� ��� ���������';
$messages['back'] = '�����';
$messages['post'] = '���������';
$messages['trackbacks_for_article'] = '����������� �� ���������: ';
$messages['trackback_excerpt'] = '�������';
$messages['trackback_weblog'] = '�������';
$messages['search_results'] = '������ � ���������';
$messages['search_matching_results'] = '�� ������ ������ ������� ��������� ���������: ';
$messages['search_no_matching_posts'] = '�� ������� ��������������� ���������';
$messages['read_more'] = '(���)';
$messages['syndicate'] = '��������';
$messages['main'] = '�������';
$messages['about'] = '���������';
$messages['download'] = '���������';

////// error messages /////
$messages['error_fetching_article'] = '��������� ���� ������ �� �������.';
$messages['error_fetching_articles'] = '��������� ���� ������ �� �������';
$messages['error_trackback_no_trackback'] = '�������� ������ ��� ������ �� �������.';
$messages['error_incorrect_article_id'] = '������������ ������������� ������.';
$messages['error_incorrect_blog_id'] = '������������ ������������� ��������.';
$messages['error_comment_without_text'] = '�� ������ ����� ���������.';
$messages['error_comment_without_name'] = '�� �� ������� ���� ���.';
$messages['error_adding_comment'] = '������ ��� ���������� �����������.';
$messages['error_incorrect_parameter'] = '������������ ��������.';
$messages['error_parameter_missing'] = '� ����� ������� �� ������� ������ ���������.';
$messages['error_comments_not_enabled'] = '�� ���� ����� ����������� ���������.';
$messages['error_incorrect_search_terms'] = '������������ ��������� ������';
$messages['error_no_search_results'] = '�� ������ ������� ������ �� �������';
$messages['error_no_albums_defined'] = '��� ��������� ��������.';

/////////////////                                          //////////////////
///////////////// STRINGS FOR THE ADMINISTRATION INTERFACE //////////////////
/////////////////                                          //////////////////

// login page
$messages['login'] = '�����';
$messages['welcome_message'] = '����� ���������� � �������';
$messages['error_incorrect_username_or_password'] = '������������ ��� ������������ ��� ������.';
$messages['error_dont_belong_to_any_blog'] = '��������, ��� ������� ��� �� ������.';
$messages['logout_message'] = '����� ���������� �������.';
$messages['logout_message_2'] = '������� <a href="%1$s">�����</a> ��� ����, ����� ������� �� %2$s</a>.';
$messages['error_access_forbidden'] = '� ������� ��������. ������� �� ������ ������ ����������� �����';
$messages['username'] = '��� ������������';
$messages['password'] = '������';

// dashboard
$messages['dashboard'] = '������ ������������';
$messages['recent_articles'] = '��������� ������';
$messages['recent_comments'] = '��������� �����������';
$messages['recent_trackbacks'] = '��������� �������� ������';
$messages['blog_statistics'] = '���������� ��������';
$messages['total_posts'] = '����� ���������';
$messages['total_comments'] = '����� ������������';
$messages['total_trackbacks'] = '����� �������� ������';
$messages['total_viewed'] = '����� ����������� ���������';
$messages['in'] = '�';

// menu options
$messages['newPost'] = '����� ���������';
$messages['Manage'] = '����������';
$messages['managePosts'] = '���������� �����������';
$messages['editPosts'] = '���������';
$messages['editArticleCategories'] = '���������';
$messages['newArticleCategory'] = '����� ���������';
$messages['manageLinks'] = '���������� ��������';
$messages['editLinks'] = '������';
$messages['newLink'] = '����� ������';
$messages['editLink'] = '������������� ������';
$messages['editLinkCategories'] = '��������� ������';
$messages['newLinkCategory'] = '����� ��������� ������';
$messages['editLinkCategory'] = '������������� ��������� ������';
$messages['manageCustomFields'] = '���������� �������������������� ������';
$messages['blogCustomFields'] = '������������������� ����';
$messages['newCustomField'] = '����� ������������������� ����';
$messages['resourceCenter'] = '������ ������';




$messages['resources'] = '�����';
$messages['newResourceAlbum'] = '����� ������';
$messages['newResource'] = '����� ����';
$messages['controlCenter'] = '������ ����������';
$messages['manageSettings'] = '���������';
$messages['blogSettings'] = '��������� ��������';
$messages['userSettings'] = '��������� ������������';
$messages['pluginCenter'] = '���������� ���������';
$messages['Stats'] = '����������';
$messages['manageBlogUsers'] = '���������� �������������� ��������';
$messages['newBlogUser'] = '����� ������������ ��������';
$messages['showBlogUsers'] = '������������ ��������';
$messages['manageBlogTemplates'] = '���������� ��������� ��������';
$messages['newBlogTemplate'] = '����� ������ ��������';
$messages['blogTemplates'] = '������� ��������';
$messages['adminSettings'] = '�����������������';
$messages['Users'] = '������������';
$messages['createUser'] = '������� ������������';
$messages['editSiteUsers'] = '������������';
$messages['Blogs'] = '���������� ����������';
$messages['createBlog'] = '������� �������';
$messages['editSiteBlogs'] = '��������';
$messages['Locales'] = '���������� ����������';
$messages['newLocale'] = '����� �������';
$messages['siteLocales'] = '����������� �����';
$messages['Templates'] = '���������� ���������';
$messages['newTemplate'] = '����� ������';
$messages['siteTemplates'] = '�������';
$messages['GlobalSettings'] = '����� ���������';
$messages['editSiteSettings'] = '�����';
$messages['summarySettings'] = '����������';
$messages['templateSettings'] = '�������';

$messages['urlSettings'] = '������';
$messages['emailSettings'] = '����������� �����';
$messages['uploadSettings'] = '��������';
$messages['helpersSettings'] = '��������� ���������';
$messages['interfacesSettings'] = '����������';
$messages['securitySettings'] = '������������';
$messages['bayesianSettings'] = 'Bayesian Filter';
$messages['resourcesSettings'] = '�����';
$messages['searchSettings'] = '�����';
$messages['cleanUpSection'] = '�������';
$messages['cleanUp'] = '�������';
$messages['editResourceAlbum'] = '������������� ������';
$messages['resourceInfo'] = '������������� ������';
$messages['editBlog'] = '������������� �������';
$messages['Logout'] = '�����';

// new post
$messages['topic'] = '������';


$messages['topic_help'] = '���������';
$messages['text'] = '������� �����';
$messages['text_help'] = '������� �������� ������. ��� ����� ����� ������������ �� ������� �������� ';
$messages['extended_text'] = '������ �����';
$messages['extended_text_help'] = '������ ����� ������. ��� ����� ����� �� ������� ���������� ������ �� �������� ������ ��� �� ������� ��������. �������� ��������� �������� ��� ��������� ����������';
$messages['post_slug'] = '������������';
$messages['post_slug_help'] = '������������ ������������ ��� ��������� ���������� ���������� ������';
$messages['date'] = '����';
$messages['post_date_help'] = '����, ����� ��� ������ ����� ������������';
$messages['status'] = '������';
$messages['post_status_help'] = '�������� ���� �� ���� ��������';
$messages['post_status_published'] = '������������';
$messages['post_status_draft'] = '��������';
$messages['post_status_deleted'] = '�������';
$messages['categories'] = '���������';
$messages['post_categories_help'] = '�������� ���� ��� ����� ���������';
$messages['post_comments_enabled_help'] = '�������� �����������';
$messages['send_notification_help'] = '����������� � ����� ������������';
$messages['send_trackback_pings_help'] = '��������� �������� ������';
$messages['send_xmlrpc_pings_help'] = '������� �������� ����� XMLRPC';
$messages['save_draft_and_continue'] = '��������� ��������';
$messages['preview'] = '�����.��������';
$messages['add_post'] = '� �������!';
$messages['error_saving_draft'] = '������ ��� ���������� ���������';
$messages['draft_saved_ok'] = '�������� ������� ��������';
$messages['error_sending_request'] = '������ ��� �������� �������';
$messages['error_no_category_selected'] = '�������� ���� �� ���� ���������';
$messages['error_missing_post_topic'] = '������� ��������� ������';
$messages['error_missing_post_text'] = '�������� ����� ������';
$messages['error_adding_post'] = '������ ��� ���������� ������';
$messages['post_added_not_published'] = '������ ������� ���������, �� �� ������������';
$messages['post_added_ok'] = '������ ������� ���������.';
$messages['send_notifications_ok'] = '����� ������� �����������, ����� �������� ����� ����������� ��� �������� ������.';

// send trackbacks
$messages['error_sending_trackbacks'] = '������ ��� ����������� ��������� �������� ������';
$messages['send_trackbacks_help'] = '�������� ������, ��� �� ������ ��������� ����� ��� �������� ������. ���������, ��� ����� ������������ �������� ������.';
$messages['send_trackbacks'] = '������� �������� ������';
$messages['ping_selected'] = '���� ������';
$messages['trackbacks_sent_ok'] = '�������� ������ ���� ������� �������� �� ��������� ������';


// posts page
$messages['show_by'] = '����������� ��';
$messages['category'] = '���������';
$messages['author'] = '������';
$messages['post_status_all'] = '���';
$messages['author_all'] = '���';
$messages['search_terms'] = '�����';
$messages['show'] = '��������';
$messages['delete'] = '�������';
$messages['actions'] = '��������';
$messages['all'] = '���';
$messages['category_all'] = '���';
$messages['error_incorrect_article_id'] = '������������ ������������� ������';
$messages['error_deleting_article'] = '������ ��� �������� ������ "%s"';
$messages['article_deleted_ok'] = '������ "%s" ������� �������';
$messages['articles_deleted_ok'] = '%s ������ ������� �������';
$messages['error_deleting_article2'] = '������ ��� �������� ������ � ��������������� "%s"';

// edit post page
$messages['update'] = '��������';
$messages['editPost'] = '������������� ������';
$messages['error_fetching_post'] = '������ ��� ������ ������';
$messages['post_updated_ok'] = '������ "%s" ������� ���������������.';
$messages['error_updating_post'] = '������ ��� �������������� ������';
$messages['notification_added'] = '�������� � ����� ������������ ��� �������� �������';
$messages['notification_removed'] = '�� �������� � ����� ������������ ��� �������� �������';

// post comments
$messages['url'] = '������';
$messages['comment_status_all'] = '���';

$messages['comment_status_spam'] = '����';
$messages['comment_status_nonspam'] = '�� ����';
$messages['error_fetching_comments'] = '������ ��� ������ ������������ ������';
$messages['error_deleting_comments'] = '������ ��� �������� ������������ ��� �� ���� ������� �����������';
$messages['comment_deleted_ok'] = '����������� "%s" ������� ������';
$messages['comments_deleted_ok'] = '%s ����������� ������� �������';
$messages['error_deleting_comment'] = '������ ��� �������� ����������� "%s"';
$messages['error_deleting_comment2'] = '������ ��� �������� ����������� � ��������������� %s';
$messages['editComments'] = '�����������';
$messages['mark_as_spam'] = '��������, ��� ����';
$messages['mark_as_no_spam'] = '��������, ��� �� ����';
$messages['error_incorrect_comment_id'] = '������������ ������������� �����������';
$messages['error_marking_comment_as_spam'] = '������ ��� ������� �����������, ��� ����';
$messages['comment_marked_as_spam_ok'] = '����������� ������� �������, ��� ����';
$messages['error_marking_comment_as_nonspam'] = '������ ��� ������� �����������, ��� �� ����';
$messages['comment_marked_as_nonspam_ok'] = '����������� ������� �������, ��� �� ����';

// post trackbacks
$messages['blog'] = '�������';
$messages['excerpt'] = '�������';
$messages['error_fetching_trackbacks'] = '������ ��� ������ �������� ������';
$messages['error_deleting_trackbacks'] = '������ ��� �������� �������� ������ ��� ��� �� ���� �������';
$messages['error_deleting_trackback'] = '������ ��� �������� �������� ������ "%s"';
$messages['error_deleting_trackback2'] = '������ ��� �������� �������� ������ � ��������������� "%s"';
$messages['trackback_deleted_ok'] = '�������� ������ "%s" ������� �������';
$messages['trackbacks_deleted_ok'] = '%s �������� ������ ������� �������';

$messages['editTrackbacks'] = '�������� ������';

// post statistics
$messages['referrer'] = '���������';
$messages['hits'] = '����';
$messages['error_no_items_selected'] = '������ �� ������� ��� ��������';
$messages['error_deleting_referrer'] = '������ ��� �������� ��������� "%s"';
$messages['error_deleting_referrer2'] = '������ ��� �������� ��������� � ��������������� "%s"';
$messages['referrer_deleted_ok'] = '��������� "%s" ������� �������';
$messages['referrers_deleted_ok'] = '%s ��������� ������� �������';

// categories
$messages['posts'] = '������';
$messages['show_in_main_page'] = '���������� �� ������� ��������';
$messages['error_incorrect_category_id'] = '������������ ������������� ��������� ��� ������ �� ���� �������';
$messages['error_category_has_articles'] = '��������� "%s" ������������ ���������� ��������. ������� �������������� ������ � ����� ������� ���������';
$messages['category_deleted_ok'] = '��������� "%s" ������� �������';
$messages['categories_deleted_ok'] = '%s ��������� ������� �������';
$messages['error_deleting_category'] = '������ ��� �������� ��������� "%s"';
$messages['error_deleting_category2'] = '������ ��� �������� ��������� � ��������������� "%s"';
$messages['yes'] = '��';
$messages['no'] = '���';


// new category
$messages['name'] = '��������';
$messages['category_name_help'] = '��������, ������� ����� ���������� ���������';
$messages['description'] = '��������';
$messages['category_description_help'] = '������ �������� ���� ���������';
$messages['show_in_main_page_help'] = '���������� ������ ���� ��������� �� ������� ��������';
$messages['error_empty_name'] = '�� ������ ������� ��������';
$messages['error_empty_description'] = '�� ������ ������� ��������';
$messages['error_adding_article_category'] = '������ ��� ���������� ����� ���������. ��������� ��������� ������ � ���������� ��� ���';
$messages['category_added_ok'] = '��������� "%s" ���� ������� ��������� � �������';
$messages['add'] = '��������';
$messages['reset'] = '��������';

// update category
$messages['error_updating_article_category'] = '������ ��� �������������� ������ ���������';
$messages['error_fetching_category'] = '������ ��� ������ ���������';
$messages['article_category_updated_ok'] = '��������� "%s" ���� ������� ���������������';

// links
$messages['feed'] = '�����';
$messages['error_no_links_selected'] = '������������ ������������� ������ ��� ������ �� ���� ������� ��� ��������';
$messages['error_incorrect_link_id'] = '������������ ������������� ������';
$messages['error_removing_link'] = '������ ��� �������� ������ "%s"';
$messages['error_removing_link2'] = '������ ��� �������� ������ � ��������������� "%s"';
$messages['link_deleted_ok'] = '������ "%s" ������� �������';
$messages['links_deleted_ok'] = '%s ������ ������� �������';

// new link
$messages['link_name_help'] = '�������� ������';
$messages['link_url_help'] = '����� ���� ��������� ������';
$messages['link_description_help'] = '������� �������� ������';
$messages['link_feed_help'] = '����� ���� ������� ������ �� RSS ��� Atom ���� ������';
$messages['link_category_help'] = '�������� ���� �� ��������� ��������� ������';
$messages['error_adding_link'] = '������ ��� ���������� ������. ��������� ��������� ������ � ���������� ��� ���';
$messages['error_invalid_url'] = '������������ ������';
$messages['link_added_ok'] = '������ "%s" ������� ���������';

// update link
$messages['error_updating_link'] = '������ ��� �������������� ������. ��������� ��������� ������ � ���������� ��� ���';
$messages['error_fetching_link'] = '������ ��� ������ ������';
$messages['link_updated_ok'] = '������ "%s" ������� ���������������';

// link categories
$messages['links'] = '������';
$messages['error_invalid_link_category_id'] = '������������ ������������� ��������� ������ ��� �� ������� ��������� ������';
$messages['error_links_in_link_category'] = '��������� ������ "%s" ������������ ���������� ��������. �������������� ������ � ���������� ��� ���';
$messages['error_removing_link_category'] = '������ ��� �������� ��������� ������ "%s"';
$messages['link_category_deleted_ok'] = '��������� ������ "%s" ������� �������';
$messages['link_categories_deleted_ok'] = '%s ��������� ������ ������� �������';
$messages['error_removing_link_category2'] = '������ ��� �������� ��������� ������ � ��������������� "%s"';

// new link category
$messages['link_category_name_help'] = '�������� ���� ��������� ������';
$messages['error_adding_link_category'] = '������ ��� ���������� ����� ��������� ������';
$messages['link_category_added_ok'] = '��������� ������ "%s" ������� ���������';

// edit link category
$messages['error_updating_link_category'] = '������ ��� �������������� ��������� ������. ��������� ��������� ������ � ���������� ��� ���';
$messages['link_category_updated_ok'] = '��������� ������ "%s" ������� ���������������';
$messages['error_fetching_link_category'] = '������ ��� ������ ��������� ������';

// custom fields
$messages['type'] = '���';
$messages['hidden'] = '�������';
$messages['fields_deleted_ok'] = '%s ������������������� ���� ������� �������';
$messages['field_deleted_ok'] = '������������������� ���� "%s" ������� �������';
$messages['error_deleting_field'] = '������ ��� �������� �������������������� ���� "%s"';
$messages['error_deleting_field2'] = '������ ��� �������� �������������������� ���� � ��������������� "%s"';
$messages['error_incorrect_field_id'] = '������������ ������������� �������������������� ����';

// new custom field
$messages['field_name_help'] = '�������������, ������� ����� �������������� ��� ��������� � �������� ����� ���� � �������';
$messages['field_description_help'] = '�������� �������� ����� ����, ������� ����� ������������ ��� ���������� ��� �������������� �������';
$messages['field_type_help'] = '�������� ���� �� ��������� ����� �����';

$messages['field_hidden_help'] = '���� ���� �������, ��� �� ����� ������������ ��� ���������� ��� �������������� ������. ��� �������� ������ ������������ ���������';
$messages['error_adding_custom_field'] = '������ ��� ���������� �������������������� ����. ��������� ��������� ������ � ���������� ��� ���';
$messages['custom_field_added_ok'] = '������������������� ���� "%s" ������� ���������';
$messages['text_field'] = '��������� ����';
$messages['text_area'] = '������������� ������� �����';
$messages['checkbox'] = '������';
$messages['date_field'] = '����� ����';

// edit custom field
$messages['error_fetching_custom_field'] = '������ ��� ������ �������������������� ����';
$messages['error_updating_custom_field'] = '������ ��� �������������� �������������������� ����. ��������� ��������� ������ � ���������� ��� ���';
$messages['custom_field_updated_ok'] = '������������������� ���� "%s" ��������������� �������';

// resources
$messages['root_album'] = '�������� ������';
$messages['num_resources'] = '����� ������';
$messages['total_size'] = '������ ������';
$messages['album'] = '������';
$messages['error_incorrect_album_id'] = '������������ ������������� �������';
$messages['error_base_storage_folder_missing_or_unreadable'] = 'pLog �� ����� ������� ����������� ����������, ���� ����� �������� �����. ��� ����� ���� �� ������ ��������, ��������, ���� ��������� PHP �������� � ���������� ���������� ������� ��� ��� ������������ �� ����� ������� � ���� �����. �� ������ ���������� �������� �������� �������, ������ ��������� ����������: <br/><br/>%s<br/><br/>���� ��� ���������� ��� ����������, ���������, ��� �� ��� ���������� ���������� �����.';


$messages['items_deleted_ok'] = '%s �������� ������� �������';
$messages['error_album_has_children'] = '������ "%s" ����� �������� �������. ������� �������������� ������ � ���������� ��� ���';
$messages['item_deleted_ok'] = '������� "%s" ������� ������';
$messages['error_deleting_album'] = '������ ��� �������� ������� "%s"';
$messages['error_deleting_album2'] = '������ ��� �������� ������� � ��������������� "%s"';

$messages['error_deleting_resource'] = '������ ��� �������� ����� "%s"';
$messages['error_deleting_resource2'] = '������ ��� �������� ����� � ��������������� "%s"';
$messages['error_no_resources_selected'] = '��� ��������� ��� ��������';
$messages['resource_deleted_ok'] = '���� "%s" ������� ������';
$messages['album_deleted_ok'] = '������ "%s" ������� ������';
$messages['add_resource'] = '�������� ����';
$messages['add_resource_preview'] = '�������� �����';
$messages['add_resource_medium'] = '�������� ������� �����';
$messages['add_album'] = '�������� ������';

// new album
$messages['album_name_help'] = '������� �������� ������ �������';
$messages['parent'] = '�����������';
$messages['no_parent'] = '�� �����������';
$messages['parent_album_help'] = '����������� ���, ����� ����� ��������� ������� ��� ������ ����������� ����� �������';
$messages['album_description_help'] = '������ �������� ���������� ����� �������';
$messages['error_adding_album'] = '������ ��� ���������� ������ �������. ��������� ��������� ������ � ���������� ��� ���';
$messages['album_added_ok'] = '������ "%s" ������� ��������';

// edit album
$messages['error_incorrect_album_id'] = '������������ ������������� �������';
$messages['error_fetching_album'] = '������ ��� ������ �������';
$messages['error_updating_album'] = '������ ��� �������������� �������. ��������� ��������� ������ � ���������� ��� ���';
$messages['album_updated_ok'] = '������ "%s" ������� ��������������';
$messages['show_album_help'] = '���� ��������, ������ �� ����� ������������ � ������ ��������� �������� ����� ��������';

// new resource
$messages['file'] = '����';
$messages['resource_file_help'] = '����, ������� ����� �������� � ���� �������. ����������� ������ "�������� ����" ��� ������������� �������� ����� ������ �����';
$messages['add_field'] = '�������� ����';
$messages['resource_description_help'] = '������ �������� ���������� ����� �����';
$messages['resource_album_help'] = '������� ������, � ������� ����� �������� ���� ����';
$messages['error_no_resource_uploaded'] = '�� ������� ����� ��� ��������';
$messages['resource_added_ok'] = '���� "%s" ������� ��������';
$messages['error_resource_forbidden_extension'] = '���� �� ��� ��������, ��� ��� �� ������������ ����';
$messages['error_resource_too_big'] = '���� �� ��� ��������, ��� ��� �� ������� �������';
$messages['error_uploads_disabled'] = '���� �� ��� ��������, ��� ��� �������� ���������';
$messages['error_quota_exceeded'] = '���� �� ��� ��������, ��� ��� ��������� �������� �����';
$messages['error_adding_resource'] = '������ ��� ���������� �����';

// edit resource
$messages['editResource'] = '������������� ����';
$messages['resource_information_help'] = '���������� � ����� ������������ �����';
$messages['information'] = '����������';
$messages['size'] = '������';
$messages['format'] = '������';
$messages['dimensions'] = '��������';
$messages['bits_per_sample'] = 'Bps';
$messages['sample_rate'] = '�������';
$messages['number_of_channels'] = '���������� �������';
$messages['legnth'] = '�����������������';
$messages['thumbnail_format'] = '������ �������';
$messages['regenerate_preview'] = '������������ �����';
$messages['error_fetching_resource'] = '������ ��� ������ �����';
$messages['error_updating_resource'] = '������ ��� �������������� �����';
$messages['resource_updated_ok'] = '���� "%s" ������� ��������������';

// blog settings
$messages['blog_link'] = '������ ��������';
$messages['blog_link_help'] = '���������� ������ ����� ��������';
$messages['blog_name_help'] = '�������� ����� ��������';
$messages['blog_description_help'] = '������ �������� ���������� ����� ��������';
$messages['language'] = '����';
$messages['blog_language_help'] = '����, ������������ ��� ����������� ������� ����� ��������, ��� ��� ���������� ���������, ��� � ��� ���������������� �����';
$messages['max_main_page_items'] = '���������� ������� �� ������� ��������';
$messages['max_main_page_items_help'] = '���������� �������, ������� ������ ����� ������������ �� ������� �������� ��������';
$messages['max_recent_items'] = '���������� ��������� �������';
$messages['max_recent_items_help'] = '������������ ���������� �������, ������� ����� ������������, ��� ��������� �� ������� ��������';
$messages['template'] = '������';
$messages['choose'] = '�������';
$messages['blog_template_help'] = '������, ������� ����� �������������� ��� ����������� ���������� ��������. ���� ������ �������� � ���� ����� �������, ���� ��� �������, ������������� ������ ��� ����� ��������';
$messages['use_read_more'] = '����������� � ������� ������ "���������..."';
$messages['use_read_more_help'] = '���� ����� ��������, ������ �����, ��������� � ���� "�����" ����� ��������� �� ������� ��������. ��� �����������  "������������ ������", � ������ ����� ��������� ������ "���������..."';
$messages['enable_wysiwyg'] = '�������� ���������� �������� �������';
$messages['enable_wysiwyg_help'] = '�������� ����������� ���������� �������� ���� MSWord. �������� �������� � Internet Explorer 5.5 � ���� ��� � Mozilla 1.3 � ����';
$messages['enable_comments'] = '�������� ����������� �� ���������';
$messages['enable_comments_help'] = '�������� ����������� ��� ���� ��������� �� ���������. ����������� ����� ���� ��������/��������� ��� ��������� ������� ��� �������� ����� ��� �������������� ������';
$messages['show_future_posts'] = '�������� ������� ��������� � ���������';
$messages['show_future_posts_help'] = '�������� ����������� ������� � ���������, ����������� � ���������� � �������';
$messages['comments_order'] = '����������� �����������';
$messages['comments_order_help'] = '�������, � ������� ����������� ����� ������������ �� ������� ��������';
$messages['oldest_first'] = '�� ��������';
$messages['newest_first'] = '�� �����������';

$messages['categories_order'] = '����������� ���������';
$messages['categories_order_help'] = '�������, � ������� ��������� ����� ������������ �� ������� ��������';
$messages['most_recent_updated_first'] = '������� ����� ��������� ����������';
$messages['alphabetical_order'] = '� ���������� �������';
$messages['reverse_alphabetical_order'] = '� �������� ���������� �������';
$messages['most_articles_first'] = '� ���������� ����������� �������';
$messages['link_categories_order'] = '����������� ��������� ������';
$messages['link_categories_order_help'] = '�������, � ������� ��������� ������ ����� ���������� �� ������� �������';
$messages['most_links_first'] = '� ���������� ����������� ������';
$messages['most_links_last'] = '� ���������� ����������� ������';


$messages['time_offset'] = '��������� �������';
$messages['time_offset_help'] = '������� �� �������, ������� ����� ����������� ����������� � ������ ���� � ������� ��������';
$messages['close'] = '�������';
$messages['select'] = '�������';

$messages['error_updating_settings'] = '������ ��� �������������� �������� ��������. ��������� ��������� ������ � ���������� ��� ���';
$messages['error_invalid_number'] = '������������ �����';
$messages['error_incorrect_time_offset'] = '������������ ��������� �������';
$messages['blog_settings_updated_ok'] = '��������� �������� ������� ���������������';
$messages['hours'] = '����';

// user settings
$messages['username_help'] = '��� ������������. �� ����� ���� ��������.';
$messages['full_name'] = '������ ���';
$messages['full_name_help'] = '������� ������ ���';
$messages['password_help'] = '������� ����� ������ ��� �������� ���� ������, ���� �� ������ ��� ��������';
$messages['confirm_password'] = '����������� ������';
$messages['email'] = '����� ����������� �����';
$messages['email_help'] = '����� ����������� �����, ���� ����� ���������� �����������';
$messages['bio'] = '���� ���������';
$messages['bio_help'] = '����� ������ �������� ����� ��������� ���� ��������';
$messages['picture'] = '����������';
$messages['user_picture_help'] = '�������� ���������� �� ����������� � �������, � ���� ������ �������';
$messages['error_invalid_password'] = '������������ ������. ���������, ��� �� �� ������� ��������';
$messages['error_passwords_dont_match'] = '������ �� ���������';
$messages['error_incorrect_email_address'] = '������������ ����� ����������� �����';
$messages['error_updating_user_settings'] = '������ ��� �������������� �������� ������������. ��������� ��������� ������ � ���������� ��� ���';
$messages['user_settings_updated_ok'] = '��������� ������������ ������� ���������������';
$messages['resource'] = '�������';

// plugin centre
$messages['identifier'] = '�������������';
$messages['error_plugins_disabled'] = '��������, ������� ���������.';

// blog users
$messages['revoke_permissions'] = '�������� ����������';
$messages['error_no_users_selected'] = '�� ������� ������������';
$messages['user_removed_from_blog_ok'] = '������������ "%s" ������ �� ����� ������� � ����� ��������';
$messages['users_removed_from_blog_ok'] = '%s ������������ ������ �� ����� ������� � ����� ��������';
$messages['error_removing_user_from_blog'] = '������ ��� �������� ������� ������������ "%s"';
$messages['error_removing_user_from_blog2'] = '������ ��� �������� ������� ������������ � ��������������� "%s"';

// new blog user
$messages['new_blog_username_help'] = '��� ������������, �������� �� ������ ���� ������ � ����� ��������. ����� ������������ ����� ����� ������ ������ � �������� "����������" � "�������".';
$messages['send_notification'] = '������� ���������';
$messages['send_user_notification_help'] = '������� ��������� �� ����������� ����� ����� ������������';
$messages['notification_text'] = '����� ���������';
$messages['notification_text_help'] = '�����, ������� ����� ������� � ���������';


$messages['error_adding_user'] = '������ ��� ������ ���������� ������������. ��������� ��������� ������ � ���������� ��� ���';
$messages['error_empty_text'] = '�� ������ ������� �����';
$messages['error_adding_user'] = '������ ��� ���������� ������������. ��������� ��������� ������ � ���������� ��� ���';

$messages['error_invalid_user'] = '������������ "%s" �� ������ ��� �� ����������';
$messages['user_added_to_blog_ok'] = '������������ "%s" ��� ������� ��� ������ � ��������';

// blog templates
$messages['error_no_templates_selected'] = '�� ������� �������';
$messages['error_template_is_current'] = '������ "%s" �� ����� ���� ������, ��� ��� �� �������';
$messages['error_removing_template'] = '������ ��� �������� ������� "%s"';

$messages['template_removed_ok'] = '������ "%s" ������� ������';
$messages['templates_removed_ok'] = '%s ������� ������� �������';

// new blog template
$messages['template_installed_ok'] = '������ "%s" ������� ��������';
$messages['error_installing_template'] = '������ ��� ��������� ������� "%s"';
$messages['error_missing_base_files'] = '��������� ����� ������� �������';
$messages['error_add_template_disabled'] = '���������� �������� ����� �������, ��� ��� ��� ����� ���������';
$messages['error_must_upload_file'] = '����� �������� �� ��������';
$messages['error_uploads_disabled'] = '�� ���� ����� �������� ���������';
$messages['error_no_new_templates_found'] = '�� ������� ����� ��������';
$messages['error_template_not_inside_folder'] = '�����, ������������ � ������ �������� ������ ���������� ������ ���������� � ��� �� ������, ��� � ����� ��������';
$messages['error_missing_base_files'] = '��������� �������� ����� ������� �������';
$messages['error_unpacking'] = '������ ��� ���������� �����';
$messages['error_forbidden_extensions'] = '����� �������� ����� ����� � ����������� �����������';
$messages['error_creating_working_folder'] = '������ ��� �������� ��������� ����� ��� ���������� ������';
$messages['error_checking_template'] = '������ ��� �������� �������: %s';
$messages['template_package'] = '����� ��������';
$messages['blog_template_package_help']  = '���������	�� ���� ������ ��� �������� ����� ��������, ������� ����� �������� ������ ��� ������ ��������. ���� ���������� ��������� ����� �������� ����� ���� ������, ��������� ����� �������� ������� � ���������� ��� � <b>%s</b>, ������� �������� ������ �������� �������� ������ �������� � ������� ������ "<b>������������ ��������</b>". pLog ����������� ����� � ������������� ������� ���� ��������� �������.';
$messages['scan_templates'] = '������������ ��������';

// site users
$messages['user_status_active'] = '�������';
$messages['user_status_disabled'] = '��������';
$messages['user_status_all'] = '���';
$messages['user_status_unconfirmed'] = '�� �����������';
$messages['error_invalid_user2'] = '������������ � ��������������� "%s" �� ����������';
$messages['error_deleting_user'] = '������ ��� ���������� ������������ "%s"';
$messages['user_deleted_ok'] = '������������ "%s" ������� ��������';
$messages['users_deleted_ok'] = '%s ������������ ������� ���������';

// create user
$messages['user_added_ok'] = '������������ "%s" ������� ������';
$messages['error_incorrect_username'] = '������������ ��� ������������ ��� �� ��� �����';
$messages['user_status_help'] = '������� ������ ��� ����� ������������';
$messages['user_blog_help'] = '�������, ������� ����� ���������� ���������� ����� ������������';
$messages['none'] = '�������';

// edit user
$messages['error_invalid_user'] = '������������ ������������� ������������ ��� ������������ �� ����������';
$messages['error_updating_user'] = '������ ��� �������������� ��������� ������������. ��������� ��������� ������ � ���������� ��� ���';
$messages['blogs'] = '��������';
$messages['user_blogs_helps'] = '����������� �������� ������������ ��� ���� ������������ ����� ������';
$messages['site_admin'] = '�������������';
$messages['site_admin_help'] = ' ����� �� ���� ������������ ���������� �������������� � ����������� �� ��� ������ ������� "����������" � ��������� ���������������� ������';
$messages['user_updated_ok'] = '������������ "%s" ������� ��������������';

// site blogs
$messages['blog_status_all'] = '���';
$messages['blog_status_active'] = '�������';
$messages['blog_status_disabled'] = '��������';
$messages['blog_status_unconfirmed'] = '�� �����������';
$messages['owner'] = '��������';
$messages['quota'] = '�����';
$messages['bytes'] = '�����';
$messages['error_no_blogs_selected'] = '�� ������� �������� ��� ����������';
$messages['error_blog_is_default_blog'] = '������� "%s" �� ����� ���� ������, ��� ��� ��� ������� �� ���������';
$messages['blog_deleted_ok'] = '������� "%s" ������� ��������';
$messages['blogs_deleted_ok'] = '%s �������� ������� �������';
$messages['error_deleting_blog'] = '������ ��� ���������� �������� "%s"';
$messages['error_deleting_blog2'] = '������ ��� ���������� �������� � ��������������� "%s"';

// create blog
$messages['error_adding_blog'] = '������ ��� ���������� ��������. ��������� ��������� ������ � ���������� ��� ���';
$messages['blog_added_ok'] = '������� "%s" ������� ��������';

// edit blog
$messages['blog_status_help'] = '������ ��������';
$messages['blog_owner_help'] = '������������, ������� ����� ���������� �������� � ������ ��������� �������� ��������';
$messages['users'] = '������������';
$messages['blog_quota_help'] = '�������� ����� � ������. ���������� 0 ��� �������������� ����� ��� �������� ������, ����� ������� ����������� ���������� �����';
$messages['blog_users_help'] = '������������, ������� ������ � ����� ��������. ������� ������������ ����� � ����������� ��� � ������ ������, ����� ���� ��� ������ � ����� ��������';
$messages['edit_blog_settings_updated_ok'] = '������� "%s" ������� ��������������';
$messages['error_updating_blog_settings'] = '������ ��� �������������� �������� "%s"';
$messages['error_incorrect_blog_owner'] = '������������ ������������, ��������� ��� �������� ��������';
$messages['error_fetching_blog'] = '������ ��� ������ ��������';
$messages['error_updating_blog_settings2'] = '������ ��� �������������� ��������. ��������� ��������� ������ � ���������� ��� ���';
$messages['add_or_remove'] = '�������� ��� ������� �������������';

// site locales
$messages['locale'] = '�����������';
$messages['locale_encoding'] = '���������';
$messages['locale_deleted_ok'] = '����������� "%s" ������� �������';


$messages['error_no_locales_selected'] = '�� �������� ����������� ��� ��������';
$messages['error_deleting_only_locale'] = '����������� �� ����� ���� �������, ��� ��� ��� ������������ ���������� � �������';
$messages['locales_deleted_ok']= '%s ����������� ������� �������';
$messages['error_deleting_locale'] = '������ ��� �������� ����������� "%s"';
$messages['error_locale_is_default'] = '����������� "%s" �� ����� ���� �������, ��� ��� ��� �� ��������� ��� �������� ����� ���������';

// add locale
$messages['error_invalid_locale_file'] = '������������ ���� �����������';
$messages['error_no_new_locales_found'] = '�� ������� ����� ����� �����������';
$messages['locale_added_ok'] = '����������� "%s" ������� ���������';
$messages['error_saving_locale'] = '������ ��� ���������� ����� �����������';
$messages['scan_locales'] = '������������ �����������';
$messages['add_locale_help'] = '����������� ���� ������ ��� �������� ����� ������ �����������. ���� ���������� ��������� ����� ����� ���� ������, ��������� ����� ������� � ���������� �� � <b>./locales/</b>, ������� �������� ����������� �������� ������ �����������, � ������� ������ "<b>������������ �����������</b>". pLog ����������� ����� � ������������� ������� ��������� �����  �����������';

// site templates
$messages['error_template_is_default'] = '������ "%s" �� ����� ���� ������, ��� ��� �� ���������� �� ��������� ��� ����� ���������';

// add template
$messages['global_template_package_help'] = '����������� ��� ������ ��� �������� a new template set, ������� ����� �������� ���� ��������� �� ���� �����. ���� ���������� ��������� ����� �������� ����� ���� ������, ��������� ����� �������� ������� � ���������� ��� � <b>%s</b>, ������� �������� ����������� �������� ����� ��������� �������� � ������� ������ "<b>������������ ��������</b>". pLog ����������� ����� � ������������� ������� ��������� �������.';

// global settings
$messages['site_config_saved_ok'] = '��������� ����� ������� ���������';
$messages['error_saving_site_config'] = '������ ��� ��������� �������� �����';
/// general settings
$messages['help_comments_enabled'] = '��������� ������������ ��� ����� ��������� �� ��������� [�� ��������� = ��]';
$messages['help_beautify_comments_text'] = '���� ��������, �����������, �������� �������������� ����� ������������� ����������� ���������� � ����-������� ������� [�� ��������� = ��]';
$messages['help_temp_folder'] = '�����, ������� pLog ����� ������������ ��� ������ ��������� ������ ����� ��� ��������� ������� � ��� �����. ����������� �����  ���������� ��� ������ ��� �������, ����� ��������� ������������ [�� ��������� = ./tmp]';
$messages['help_base_url'] = '�������� ������ ��������������� ����� �������� �����������';
$messages['help_subdomains_enabled'] = '�������� ��� ��������� ���������. ���������� ������������ ��� ��������� ���������� �� ���������� [�� ��������� = ���]';
$messages['help_subdomains_base_url'] = '����� ��������� ��������, ��� �������� ������ ������������ ������ ������� ������. ����������� {blogname} ��� ��������� ����� �������� � {username} ��� ��������� ����� ��������� ��������, ����� ������������� ������ � ��������. (�� ���� http://{blogname}.yourdomain.com})';
$messages['help_include_blog_id_in_url'] = '��������, ����� ��������� � "�������" ������ ��������, ���������� ���������� ������ �� ����� �������� "blogId". �������� ������ � ������, ���� �� ������� � ����� ��������� [�� ��������� = ��]';
$messages['help_script_name'] = '���������� ���, ���� ��� ���� ������������� index.php �� ���-�� ������ [�� ��������� = index.php]';
$messages['help_show_posts_max'] = '������������ ���������� �������, ������������ �� ������� ��������. �������� �� ��������� � ����� ��������� [�� ��������� = 15]';
$messages['help_recent_posts_max'] = '������������ ���������� ����� �������, ������������ �� ������� ��������. �������� �� ��������� � ����� ��������� [�� ��������� = 10]';
$messages['help_save_drafts_via_xmlhttprequest_enabled'] = '�������� �� �����, ����������� ��������� ��������� � ������� Javascript � XmlHttpRequest [�� ��������� = ��]';
$messages['help_locale_folder'] = '�����, ��� �������� ����� ����������� [�� ��������� = ./locale]';
$messages['help_default_locale'] = '�������� ��������� �� ��������� ��� ����� ��������� [�� ��������� = en_UK]';
$messages['help_default_blog_id'] = '������� �� ���������, ������� ����� ������������, ���� �� ������� ������ [�� ��������� = 1]';
$messages['help_default_time_offset'] = '��������� ������� �� ��������� ��� ����� ��������� [�� ��������� = 0]';
$messages['help_html_allowed_tags_in_comments'] = '����������� ��������� ������ HTML ������������, ������� ����������� � ������������ [�� ��������� = &lt;a&gt;&lt;i&gt;&lt;br&gt;&lt;br/&gt;&lt;b&gt;]';
$messages['help_referer_tracker_enabled'] = '�������� ��� ��������� ����� ���������� ��������� � ���� ������. ���������, ����� �������� ������ ������� [�� ��������� = ��]';
$messages['help_show_more_enabled'] = '�������� ��� ��������� ����� "���������..." �� ��������� ��� ����� ��������� [�� ��������� = ��]';
$messages['help_update_article_reads'] = '�������� ��� ��������� ���������� �������� ���������� ���������� ������. ���������, ����� �������� ������ ������� [�� ��������� = ��]';
$messages['help_update_cached_article_reads'] = '�������� ��� ��������� ���������� �������� ���������� ���������� ������, ���� ��� ���������� ����������� [�� ��������� = ��]';
$messages['help_xmlrpc_ping_enabled'] = '�������� ��� ��������� ���� XMLRPC � ������, ������� ������������ ��� ����� [�� ��������� = ��]';
$messages['help_send_xmlrpc_pings_enabled_by_default'] = '�������� ��� ��������� �� ��������� ��� ����� ��� �������� ������ ��� �� �������������� [�� ��������� = ��]';
$messages['help_xmlrpc_ping_hosts'] = '������, ������� � ���������� XMLRPC �����, ��������������� ������������ XMLRPC. ������� �� ������ ������ � ����� ������ [�� ��������� = http://rpc.weblogs.com/RPC2]';
$messages['help_trackback_server_enabled'] = '�������� ��� ��������� ����� ��� ��������� �������� �������� ������ [�� ��������� = ��]';
$messages['help_htmlarea_enabled'] = '�������� ��� ��������� WYSIWYG ���������� �������� �� ��������� � ����� ��������� [�� ��������� = ��]';
$messages['help_plugin_manager_enabled'] = '�������� ��� ��������� ������� [�� ��������� = ��]';
$messages['help_minimum_password_length'] = '����������� ����� ������ [�� ��������� = 4]';
$messages['help_xhtml_converter_enabled'] = '���� ��������, pLog ���������� �������������� HTML � XHTML [�� ��������� = ��]';
$messages['help_xhtml_converter_aggressive_mode_enabled'] = '���� ��������, pLog ���������� ������������ ��������������� XHTML �� HTML, �� � ��� ����� �������������� ������ [�� ��������� = ���]';
$messages['help_session_save_path'] = '����������� ��� ���������, ����� �������� ����������, ��� pLog ������ ���������� � ������, � ������� ������� PHP session_save_path() ���������, ��� ������ � ��� ���������� ���������. �������� ������, ����� ������������ ��������� PHP �� ��������� [�� ��������� = (�����)]';
// summary settings
$messages['help_summary_page_show_max'] = '���������� ���������, ������� ����� ���������� �� ������� ��������. ��� ��������� ��������� ����� �������� �� ������� �������� (��������� ������, �������� �������� ��������, � ��� �����) [�� ��������� = 10]';
$messages['help_summary_blogs_per_page'] = '���������� ��������� �� �������� � ������� "������ ���������" [�� ��������� = 25]';
$messages['help_forbidden_usernames'] = '����������� ��������� ������ ���� �������������, ����������� � ����������� [�� ��������� = admin www blog ftp]';
$messages['help_force_one_blog_per_email_account'] = '���������� �� ������ �������� �� ����� ����������� ����� [�� ��������� = ���]';
$messages['help_summary_show_agreement'] = '���������� ����� ���������� � ��������� �������� �������������, ������ ��� ���������� � ����������� [�� ��������� = ��]';
$messages['help_need_email_confirm_registration'] = '��������� ������������� ������������ �� ����������� ��������� �� ���� � ������, ��������� ������� �� �� ����� ����������� ����� [�� ��������� = ��]';
$messages['help_summary_disable_registration'] = '��������� ����������� ������������� ��� �������� ����� ��������� �� ���� ����� [�� ��������� = ���]';
// templates
$messages['help_template_folder'] = '���������� �������� �������� [�� ��������� = ./templates]';
$messages['help_default_template'] = '������ �� ��������� ��� ����� ��������� [�� ��������� = standard]';
$messages['help_users_can_add_templates'] = '��������� ������������� ��������� ����������� ������� [�� ��������� = ��]';
$messages['help_template_compile_check'] = '���� ��������, Smarty ����� ��������� ������ ���, ���� �� �������� ����� ������� �, ���� ��, �� ����� ������������ ����� ������. ���������, ����� �������� ������ ������� [�� ��������� = ��]';
$messages['help_template_cache_enabled'] = '�������� ����������� ��������. ���� ��������, ����� ����� �������������� ����������� ������. ������ �� ����� ���������� �� ���� ������ � ������� �� ����� ����������������� [�� ��������� = ��]';
$messages['help_template_cache_lifetime'] = '����������������� ���� � ��������. ���������� �� -1 ��� ����, ����� ��� ������ �������. ���� ����������� �� 0, ��� ����� ��������, �� ������������� ���������� template_cache_enabled �� "���", ����� ��������� ����������� [�� ��������� = -1]';
$messages['help_template_http_cache_enabled'] = '�������� ��������� ��� �������� �������� HTTP. ���� ��������, pLog ������ "If-Modified-Since" ��������� HTTP �� �������� � �������� ��� ������������� ������ ����������. �������� ��� ����� ��� ���������� �������� [�� ��������� = ���]';
$messages['help_allow_php_code_in_templates'] = '��������� ���������� PHP ��� ��� ����������� �������� Smarty ������ ����������� {php}...{/php} [�� ��������� = ���]';
// urls
$messages['help_request_format_mode'] = '������� ���� �� ��������� �������� ������. ���� ������������ ������������������� ������, ��������� � ������������ �������� ����������� ���� [�� ��������� = �������]';
$messages['plain'] = '�������';
$messages['search_engine_friendly'] = '������������� ��������� �������';
$messages['custom_url_format'] = '������������������ ������';
$messages['help_permalink_format'] = '������������� � ���������� ������ ��� ������������� ������������������� ������ [�� ��������� = /blog/{blogname}/{catname}/{year}/{month}/{day}/{postname}$]';
$messages['help_category_link_format'] = '������������� � ������ � ����������, ���� ������������ ������������������� ������ [�� ��������� = /blog/{blogname}/{catname}$]';
$messages['help_blog_link_format'] = '������������� � ������ � ���������, ���� ������������ ������������������� ������ [�� ��������� = /blog/{blogname}$]';
$messages['help_archive_link_format'] = '������������� � ������ � �������, ���� ������������ ������������������� ������ [�� ��������� = /blog/{blogname}/archives/{year}/?{month}/?{day}]';
$messages['help_user_posts_link_format'] = '������������� � ������ � �������, ��������� ������������ �������������, ���� ������������ ������������������� ������ [�� ��������� = /blog/{blogname}/user/{username}$]';
$messages['help_post_trackbacks_link_format'] = '������������� � ������ � �������� �������, ���� ������������ ������������������� ������ [�� ��������� = /blog/{blogname}/post/trackbacks/{postname}$]';
$messages['help_template_link_format'] = '������������� � ������ � ������������������� ����������� ��������� ���������, ���� ������������ ������������������� ������ [�� ��������� = /blog/{blogname}/page/{templatename}$]';
$messages['help_album_link_format'] = '������������� � ������ � ��������� ��������, ���� ������������ ������������������� ������ [�� ��������� = /blog/{blogname}/album/{albumname}$]';
$messages['help_resource_link_format'] = '������������� � ������ � ��������� � ���������� �������, ���� ������������ ������������������� ������ [�� ��������� = /blog/{blogname}/resource/{albumname}/{resourcename}$]';
$messages['help_resource_preview_link_format'] = '������������� � ������ � ��������� �������, ���� ������������ ������������������� ������ [�� ��������� = /blog/{blogname}/resource/{albumname}/preview/{resourcename}$]';
$messages['help_resource_medium_size_preview_link_format'] = '������������� � ������ � ������� �������� �������, ���� ������������ ������������������� ������ [�� ��������� = /blog/{blogname}/resource/{albumname}/preview-med/{resourcename}$]';
$messages['help_resource_download_link_format'] = '������������� � ������ � ������, ���� ������������ ������������������� ������ [�� ��������� = /blog/{blogname}/resource/{albumname}/download/{resourcename}$]';
// email
$messages['help_check_email_address_validity'] = '��� �������� ������ ����������� �����, ��������� ������������� �������� (MX record) �� ������ ������, � �������� �� �� ������ [�� ��������� = ���]';
$messages['help_email_service_enabled'] = '�������� ��� ��������� �������� ��������� [�� ��������� = ��]';
$messages['help_post_notification_source_address'] = '����� ����������� �����, ������� ����� ������������ � ���� "��:" ��� �������� ����� � pLog [�� ��������� = noreply@your.host.com]';
$messages['help_email_service_type'] = '����� ������ ������������ ��� �������� ����� [�� ��������� = PHP]';
$messages['help_smtp_host'] = '���� ������������ SMTP, ������� SMTP ������, ������� ����� �������������� ��� �������� ��������� [�� ��������� = (�����)]';
$messages['help_smtp_port'] = '���� SMTP ������ �������� �� �� 25 ����, �� ��������� ��� �������� [�� ��������� = (�����)]';
$messages['help_smtp_use_authentication'] = '�������� ���� SMTP ������ ����������� �����������  [�� ��������� = ���]';
$messages['help_smtp_username'] = '���� SMTP ������ ����������� �����������, ������� ��� ������������ [�� ��������� = (�����)]';
$messages['help_smtp_password'] = '���� SMTP ����������� �����������, ������� ������ ��� ������������, ���������� ���� [�� ��������� = (�����)]';
// helpers
$messages['help_path_to_tar'] = '���� � ������� "tar", ����������� ��� ���������� ������� �������� � ������� .tar.gz ��� tar.bz2 [�� ��������� = /bin/tar]';
$messages['help_path_to_gzip'] = '���� � ������� "gzip", ����������� ��� ���������� ������� �������� � ������� .tar.gz [�� ��������� = /bin/gzip]';
$messages['help_path_to_bz2'] = '���� � ������� "bzip2", ����������� ��� ���������� ������� �������� � ������� .tar.bz2 [�� ��������� = /usr/bin/bzip2]';
$messages['help_path_to_unzip'] = '���� � ������� "unzip", ����������� ��� ���������� ������� �������� � ������� .zip [�� ��������� = /usr/bin/unzip]';
$messages['help_unzip_use_native_version'] = '������������ PHP ��� ���������� ������ .zip [�� ��������� = ���]';
// uploads
$messages['help_uploads_enabled'] = '����������� �� ������������� �������� ������. ��� �������� ��������� ������� � �������� ������������������� �������� � ����������� [�� ��������� = ��]';
$messages['help_maximum_file_upload_size'] = '������������ ����������� ������ ����� � ������. ���� ������ ������� �� ����� ����, ��� ����������� ������ PHP  [�� ��������� = 2000000]';
$messages['help_upload_forbidden_files'] = '����������� ��������� ������ ����� ������, ����������� � ��������. ������������� \'*\' � \'?\' ��������� [�� ��������� = *.php *.php3 *.php4 *.phtml]';
// interfaces
$messages['help_xmlrpc_api_enabled'] = '�������� ��� ��������� ������ ����� XMLRPC � ��������� [�� ��������� = ��]';
$messages['help_rdf_enabled'] = '��������� �������� ���������� ����� Atom ��� RSS [�� ��������� = ��]';
$messages['help_default_rss_profile'] = '������ RSS ��� Atom �� ���������, ������������ ��� ������� ����������, ���� �� ������� ����� [�� ��������� = RSS 1.0]';
// security
$messages['help_security_pipeline_enabled'] = '�������� �������� ������������ � ��� ��������������� �������. ��� ����� �������� ��������, ������� ������� ����� ������� [�� ��������� = ��]';
$messages['help_ip_address_filter_enabled'] = '�������� ������ ������ IP. ����� ������ ���� ������� �������� ������������, ����� ��� ����� �������� [�� ��������� = ��]';
$messages['help_content_filter_enabled'] = '�������� ������, ���������� �� ���������� ����������. ����� ������ ���� ������� �������� ������������, ����� ��� ����� �������� [�� ��������� = ��]';
$messages['help_maximum_comment_size'] = '����������� ���������� ������ ����������� � ������, ���������� �� 0, ����� ��������� ��� ����� [�� ��������� = 0]';
// bayesian filter
$messages['help_bayesian_filter_enabled'] = '�������� Bayesian-������ ��� ��������� �������������� ����������� �����  [�� ��������� = ��]';
$messages['help_bayesian_filter_spam_probability_treshold'] = '������������ �����, ������, ��� ����������� ������ ��������� ������  [�� ��������� = 0.9]';
$messages['help_bayesian_filter_nonspam_probability_treshold'] = '����������� �����, ����� �������� ������ ����� ��������� �� ������ [�� ��������� = 0.2]';
$messages['help_bayesian_filter_min_length_token'] = '����������� ����� ������, ����� �� ���� �������� ��� Bayesian-�������  [�� ��������� = 3]';
$messages['help_bayesian_filter_max_length_token'] = '������������ ����� ������, ����� �� ���� �������� ��� Bayesian-�������  [�� ��������� = 100]';
$messages['help_bayesian_filter_number_significant_tokens'] = '���������� �������� �����  [�� ��������� = 15]';
$messages['help_bayesian_filter_spam_comments_action'] = '��� ������ � �������������, ������� ��������� ������. ���������� �� "�������" ������ � ������, ���� ��� ������ �������� ������� �������  [�� ��������� = ���������]';
$messages['keep_spam_comments'] = '��������� � ���� ������, ����������, ��� "����"';
$messages['throw_away_spam_comments'] = '������� �� (�� ���������)';
// resources
$messages['help_resources_enabled'] = '�������� ��� ��������� ����� [�� ��������� = ��]';
$messages['help_resources_folder'] = '�����, ��� ���� ��������� �����. ����������� �����  ���������� ��� ������ ��� �������, ����� ��������� ������������ [�� ��������� = ./gallery]';
$messages['help_thumbnail_method'] = '��������, ������������ ��� �������� �������. ���� ������������ PHP, ��������� ��������� ��� GD  [�� ��������� = PHP]';
$messages['help_path_to_convert'] = '���� � ����������� "�����������" �� ������ ImageMagick. ������������, ���� ������ ��������� "ImageMagick"  [�� ��������� = /usr/bin/convert]';
$messages['help_thumbnail_format'] = '������, � ������� ����������� ������  [�� ��������� = Same as image]';
$messages['help_thumbnail_height'] = '������ �� ��������� ��� ��������� �������  [�� ��������� = 120]';
$messages['help_thumbnail_width'] = '������ �� ��������� ��� ��������� �������  [�� ��������� = 120]';
$messages['help_medium_size_thumbnail_height'] = '������ �� ��������� ��� ������� �������  [�� ��������� = 480]';
$messages['help_medium_size_thumbnail_width'] = '������ �� ��������� ��� ������� �������  [�� ��������� = 640]';
$messages['help_thumbnails_keep_aspect_ratio'] = '��������� ��������� ��� �������� �������. ����� ��������� ������ ������� ��������, ��� ��������� ����, �� �������� ����� ����� [�� ��������� = ��]';
$messages['help_thumbnail_generator_force_use_gd1'] = '������� pLog ������������ ������ ������� GD1 [�� ��������� = ���]';
$messages['help_thumbnail_generator_user_smoothing_algorithm'] = '�������� ������������ ��� ����������� �������. ������������ ������, ���� ������ ��������� ��� ������ GD [�� ��������� = PHP Imagecopyresampled]';
$messages['help_resources_quota'] = '����� �����, ���������� ��� ��������� � ������ (�� ���� 5242880 Bytes = 5MB), ��� ���������� �� 0 ��� �������������� ����� [�� ��������� = 0]';
$messages['help_resource_server_http_cache_enabled'] = '�������� ��������� "If-Modified-Since" ��������� � �������� �������� HTTP. �������� ��� ���������� ��������  [�� ��������� = ���]'; 
$messages['help_resource_server_http_cache_lifetime'] = '����� � �������������, � ������� ������ ����� ������������ ������������ ������ ������ [�� ��������� = 9999999]';
$messages['same_as_image'] = '����� ��, ��� � ������������ �����������';
// search
$messages['help_search_engine_enabled'] = '�������� �����  [�� ��������� = ��]';
$messages['help_search_in_custom_fields'] = '������ � ������������������� �����  [�� ��������� = ��]';
$messages['help_search_in_comments'] = '������ � ������������  [�� ��������� = ��]';

// cleanup
$messages['purge'] = '��������';
$messages['cleanup_spam'] = '������� ����';
$messages['cleanup_spam_help'] = '��� ������ ��� ���������, ������� ���� �������� ��������������, ��� ����. ������, ����������� �� �������������� ����� ����������';
$messages['spam_comments_purged_ok'] = '����������� �� ������ ������� �������';
$messages['cleanup_posts'] = '������� ���������';
$messages['cleanup_posts_help'] = '��� ������ ��� ���������, ������� ���� ������� �������������� (���������� ��� "���������"). ������, ����������� �� �������������� ����� ����������';
$messages['posts_purged_ok'] = '��������� ������� �������';

/// summary ///
// front page
$messages['summary'] = '����������';
$messages['register'] = '�����������';
$messages['summary_welcome'] = '����� ����������!';
$messages['summary_most_active_blogs'] = '����� �������� ��������';
$messages['summary_most_commented_articles'] = '����� �������������� ������';
$messages['summary_most_read_articles'] = '���������� ������';
$messages['password_forgotten'] = '������ ������?';
$messages['summary_newest_blogs'] = '����� ��������';
$messages['summary_latest_posts'] = '��������� ������';
$messages['summary_search_blogs'] = '����� � ���������';


// blog list
$messages['updated'] = '���������������';
$messages['total_reads'] = '�����';


// blog profile
$messages['blog'] = '�������';
$messages['latest_posts'] = '��������� ������';

// registration
$messages['register_step0_title'] = '������� ������� ��� ����������� �����������';
$messages['agreement'] = '����������'; 
$messages['decline'] = '�� ��������';
$messages['accept'] = '��������';
$messages['read_service_agreement'] = '���������� ����� ���������� � ������� �� ������ "��������", ���� �� ��������';
$messages['register_step1_title'] = '������� ������������ [1/4]';
$messages['register_step1_help'] = '������� �� ������ ������� ������������, ����� �������� �������. ���� ������������ ������ ���������� ��������, � ����� ����� ������ �� ���� ��� �������������� ������������';
$messages['register_next'] = '������';
$messages['register_back'] = '�����';
$messages['register_step2_title'] = '������� ������� [2/4]';
$messages['register_blog_name_help'] = '��� ������ ������ ��������';
$messages['register_step3_title'] = '�������� ������ [3/4]';
$messages['step1'] = '��� 1';
$messages['step2'] = '��� 2';
$messages['step3'] = '��� 3';
$messages['register_step3_help'] = '�������� ���� �� ��������� ��������, ������� ����� �������������� �� ��������� ��� ������ ��������. � ����� ������ �� ������ ��� �������';
$messages['error_must_choose_template'] = '�������� ���� �� ��������';
$messages['select_template'] = '������� ������';
$messages['register_step5_title'] = '�����������! [4/4]';
$messages['finish'] = '���������';
$messages['register_need_confirmation'] = '������ � �������������� ������� �� ��� ����� ����������� �����, ��������� �� ���� �� ������, ����� ������ ����� �������!';
$messages['register_step5_help'] = '�����������, ��� ����� ������������ � ������� ������� �������!';
$messages['register_blog_link'] = '���� �� ������ ������� ���� ����� �������, �� ������ ������� ������ �� ���� ������: <a href="%2$s">%1$s</a>';
$messages['register_blog_admin_link'] = '���� �� ������ ������ ������ �����, ������� ��� �������� � <a href="admin.php">������ ����������</a>';
$messages['register_error'] = '������ ��� �����������';
$messages['error_registration_disabled'] = '��������, ����������� ����� ��������� �� ���� ����� ��������������';
// registration article topic and text
$messages['register_default_article_topic'] = '�����������!';
$messages['register_default_article_text'] = '���� �� ������� ��� ���������, ������ ����������� ������ ������� � �� ������ ������ ����� ���� �������';
$messages['register_default_category'] = '�����';
// confirmation email
$messages['register_confirmation_email_text'] = '����������, ������� �� ������ �����, ����� ������������ ��� �������:

%s

������ �����!';
$messages['error_invalid_activation_code'] = '��������, �������������� ��� ����������������';
$messages['blog_activated_ok'] = '�����������, ��� ����� ������������ � ������� �������!';
// forgot your password?
$messages['reset_password'] = '������������ ������';
$messages['reset_password_username_help'] = '��� ������������, ��� ������ �� ������ ������������';
$messages['reset_password_email_help'] = '����� ����������� �����, ������� ������������� ��� ����������� ����� ������������';
$messages['reset_password_help'] = '����������� ��� �����, ����� ������������ ������ ������ ������������. ������� ��� ������������, ������ �������� �� ������ �� ������������, � ����� ����������� �����, ������� ������������� ��� ����������� ����� ������������';
$messages['error_resetting_password'] = '������ ��� �������������� ������. ��������� ��������� ������ � ���������� ��� ���';
$messages['reset_password_error_incorrect_email_address'] = '������������ ����� ����������� ����� ��� �� �� ������������� ��� ����������� ����� ������������';
$messages['password_reset_message_sent_ok'] = '������ �� ������� ������� �� ��� ����� ����������� �����. ������� �� ������, ����� ������������ ��� ������';
$messages['error_incorrect_request'] = '������������ ��������� � ������';
$messages['change_password'] = '���������� ����� ������';
$messages['change_password_help'] = '����������, ������� � ����������� ��� ����� ������';
$messages['new_password'] = '����� ������';
$messages['new_password_help'] = '������� ����� ��� ����� ������';
$messages['password_updated_ok'] = '��� ������ ��� ������� ��������';

// Suggested by BCSE, some useful messages that not available in official locale
$messages['upgrade_information'] = '��� �������� ����������� ������������, �.�. ��� ������� �� ��������������. ����� ��������� ���������� �������� <a href="http://www.webstandards.org/upgrade/" title="The Web Standards Project\'s Browser Upgrade initiative">��������</a> ������� �� ������, ������� ������������ W3C ���������. ��� ��������� � �������������.';
$messages['jump_to_navigation'] = '������� � ���������.';
$messages['comment_email_never_display'] = '������ � ��������� ����������� �������������, ����� ����������� ����� ������� �� ������������.';
$messages['comment_html_allowed'] = '<acronym title="Hypertext Markup Language">HTML</acronym> ��������: &lt;<acronym title="Hyperlink">a</acronym> href=&quot;&quot; title=&quot;&quot; rel=&quot;&quot;&gt; &lt;<acronym title="Acronym Description">acronym</acronym> title=&quot;&quot;&gt; &lt;<acronym title="Quote">blockquote</acronym> cite=&quot;&quot;&gt; &lt;<acronym title="Strike">del</acronym>&gt; &lt;<acronym title="Italic">em</acronym>&gt; &lt;<acronym title="Underline">ins</acronym>&gt; &lt;<acronym title="Bold">strong</acronym>&gt;';
$messages['trackback_uri'] = '<acronym title="Uniform Resource Identifier">URI ��������</acronym> ����� ��������� ��� ������: ';
$messages['previous_post'] = '����������';
$messages['next_post'] = '���������';
$messages['comment_default_title'] = '(����������)';
$messages['guestbook'] = '�������� �����';
$messages['trackbacks'] = '�������� ������';
$messages['menu'] = '����';
$messages['albums'] = '�������';
$messages['admin'] = '�����������������';
?>
