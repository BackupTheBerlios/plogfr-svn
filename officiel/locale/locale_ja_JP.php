<?php

// Japanese locale for pLog1.x
// localized by Mayu Hagiuda
// ���θ���ե��������������˾�ս���������ޤ�����ʲ���URL��pLog�����ե�������
//http://forums.plogworld.net/viewforum.php?f=14

// set this to the encoding that should be used to display the pages correctly
$messages['encoding'] = 'EUC-JP';
$messages['locale_description'] = 'Japanese locale  for pLog 1.x (EUC-JP)';
// locale format, see Locale::formatDate for more information
$messages['date_format'] = '%d/%m/%Y %H:%M';

// days of the week
$messages['days'] = Array( 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday' );
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
$messages['months'] = Array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' );
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
$messages['message'] = '��å�����';
$messages['error'] = '���顼';
$messages['date'] = 'Date';

// miscellaneous texts
$messages['of'] = 'of';
$messages['recently'] = '�ǿ�����';
$messages['comments'] = '������';
$messages['comment on this'] = '������';
$messages['my_links'] = '���';
$messages['archives'] = '����������';
$messages['search'] = '����';
$messages['calendar'] = '��������';
$messages['search_s'] = '����';
$messages['search_this_blog'] = '����Blog�򸡺�:';
$messages['about_myself'] = '���ʾҲ�';
$messages['permalink_title'] = '�����������ؤ�Permanent���';
$messages['permalink'] = 'Permalink';
$messages['posted_by'] = '��Ƽ�';
$messages['reply'] = '�ֿ�';

// add comment form
$messages['add_comment'] = '�������ɲ�';
$messages['comment_topic'] = '��̾';
$messages['comment_text'] = '����';
$messages['comment_username'] = '���ʤ���̾��';
$messages['comment_email'] = 'E-Mail (���ץ����)';
$messages['comment_url'] = 'URL (���ץ����)';
$messages['comment_send'] = '����';
$messages['comment_added'] = '�����Ȥ���դ��ޤ���';
$messages['comment_add_error'] = '���顼:�����Ȥ��ɲäǤ��ޤ���Ǥ���';
$messages['article_does_not_exist'] = '���ε����Ϥ���ޤ���';
$messages['no_posts_found'] = '�й������Ϥ���ޤ���';
$messages['user_has_no_posts_yet'] = '��ƤϤޤ�����ޤ���';
$messages['back'] = '���';
$messages['post'] = '���';
$messages['trackbacks_for_article'] = '������Trackback: ';
$messages['trackback_excerpt'] = 'Excerpt';
$messages['trackback_weblog'] = 'Weblog';
$messages['search_results'] = '�������';
$messages['search_matching_results'] = '�������Ȱ��פ��뵭��: ';
$messages['search_no_matching_posts'] = '���פ��뵭���Ϥ���ޤ���';
$messages['read_more'] = '(³��...)';
$messages['syndicate'] = 'Syndicate';
$messages['main'] = '�ᥤ��';
$messages['about'] = 'About';
$messages['download'] = '���������';

////// error messages /////
$messages['error_fetching_article'] = '������ε����ϸ��Ĥ���ޤ���Ǥ�����';
$messages['error_fetching_articles'] = '������������뤳�Ȥ��Ǥ��ޤ���Ǥ�����';
$messages['error_trackback_no_trackback'] = '���ε�����Trackback�Ϥ���ޤ���';
$messages['error_incorrect_article_id'] = '�����򸫤Ĥ��뤳�Ȥ��Ǥ��ޤ���Ǥ�����';
$messages['error_incorrect_blog_id'] = 'Blog�򸫤Ĥ��뤳�Ȥ��Ǥ��ޤ���Ǥ�����';
$messages['error_comment_without_text'] = '�ƥ����Ȥ����Ϥ��Ʋ�������';
$messages['error_comment_without_name'] = '̾�������Ϥ��Ʋ�������';
$messages['error_adding_comment'] = '���顼:�����Ȥ��ɲä��뤳�Ȥ��Ǥ��ޤ���Ǥ�����';
$messages['error_incorrect_parameter'] = '�ѥ�᡼����������������ޤ���';
$messages['error_parameter_missing'] = '�׵ᤵ�줿���̵���ʥѥ�᡼������¸�ߤ��ޤ���';
$messages['error_comments_not_enabled'] = '���Υ����ȤǤϥ����Ȥ�̵���ȤʤäƤ��ޤ���';
$messages['error_incorrect_search_terms'] = '������郎����������ޤ���';
$messages['error_no_search_results'] = '�������˰��פ����ΤϤ���ޤ���';
$messages['error_no_albums_defined'] = '����Blog�����ꤵ��Ƥ��륢��Х�Ϥ���ޤ���';

/////////////////                                          //////////////////
///////////////// STRINGS FOR THE ADMINISTRATION INTERFACE //////////////////
/////////////////                                          //////////////////

// login page
$messages['login'] = '������';
$messages['welcome_message'] = 'pLog�ؤ褦����';
$messages['error_incorrect_username_or_password'] = '�桼����̾�ȥѥ���ɤ����פ��ޤ���';
$messages['error_dont_belong_to_any_blog'] = '���ʤ���Blog�Ϥޤ�����ޤ���';
$messages['logout_message'] = '�������Ȥ���λ���ޤ�����';
$messages['logout_message_2'] = '<a href="%1$s">�����򥯥�å�</a>����ȥ�������̤����ޤ���';
$messages['error_access_forbidden'] = '�������������Ĥ���Ƥ��ޤ�����˥����󤷤Ʋ�������';
$messages['username'] = '�桼����̾';
$messages['password'] = '�ѥ����';

// dashboard
$messages['dashboard'] = '���å���ܡ���';
$messages['recent_articles'] = '�ǿ�����';
$messages['recent_comments'] = '�ǿ�������';
$messages['recent_trackbacks'] = '�ǿ�Trackback';
$messages['blog_statistics'] = 'Blog���ץǡ���';
$messages['total_posts'] = '����';
$messages['total_comments'] = '������';
$messages['total_trackbacks'] = 'Trackback';
$messages['total_viewed'] = '��������';
$messages['in'] = 'In';

// menu options
$messages['newPost'] = '�����ɲ�';
$messages['Manage'] = '��������';
$messages['managePosts'] = '���������ƥ������';
$messages['editPosts'] = '�����ꥹ��';
$messages['editArticleCategories'] = '���ƥ���ꥹ��';
$messages['newArticleCategory'] = '���ƥ����ɲ�';
$messages['manageLinks'] = '��󥯴���';
$messages['editLinks'] = '���';
$messages['newLink'] = '����ɲ�';
$messages['editLink'] = '����Խ�';
$messages['editLinkCategories'] = '��󥯥��ƥ���';
$messages['newLinkCategory'] = '��󥯥��ƥ����ɲ�';
$messages['editLinkCategory'] = '��󥯥��ƥ����Խ�';
$messages['manageCustomFields'] = '����������ܴ���';
$messages['blogCustomFields'] = '�����������';
$messages['newCustomField'] = '������������ɲ�';
$messages['resourceCenter'] = '�꥽�������󥿡�';
$messages['resources'] = '�꥽��������';
$messages['newResourceAlbum'] = '����Х��ɲ�';
$messages['newResource'] = '�꥽�����ɲ�';
$messages['controlCenter'] = '����ȥ��륻�󥿡�';
$messages['manageSettings'] = '��������';
$messages['blogSettings'] = 'Blog����';
$messages['userSettings'] = '�桼��������';
$messages['pluginCenter'] = '�ץ饰���󥻥󥿡�';
$messages['Stats'] = '����';
$messages['manageBlogUsers'] = 'Blog�桼��������';
$messages['newBlogUser'] = 'Blog�桼�����ɲ�';
$messages['showBlogUsers'] = 'Blog�桼�����ꥹ��';
$messages['manageBlogTemplates'] = 'Blog �ƥ�ץ졼��';
$messages['newBlogTemplate'] = 'Blog�ƥ�ץ졼���ɲ�';
$messages['blogTemplates'] = 'Blog�ƥ�ץ졼��';
$messages['adminSettings'] = '�����ȴ���';
$messages['Users'] = '�桼��������';
$messages['createUser'] = '�桼�����ɲ�';
$messages['editSiteUsers'] = '�桼�����ꥹ��';
$messages['Blogs'] = 'Blog����';
$messages['createBlog'] = 'Blog�ɲ�';
$messages['editSiteBlogs'] = 'Blog�ꥹ��';
$messages['Locales'] = '�������';
$messages['newLocale'] = '�����ɲ�';
$messages['siteLocales'] = '����ꥹ��';
$messages['Templates'] = '�ƥ�ץ졼�ȴ���';
$messages['newTemplate'] = '�ƥ�ץ졼���ɲ�';
$messages['siteTemplates'] = '�ƥ�ץ졼�ȥꥹ��';
$messages['GlobalSettings'] = '�����ƥ����';
$messages['editSiteSettings'] = '����������';
$messages['summarySettings'] = '���ޥ꡼';
$messages['templateSettings'] = '�ƥ�ץ졼��';
$messages['urlSettings'] = 'URL';
$messages['emailSettings'] = 'E-Mail';
$messages['uploadSettings'] = '���åץ���';
$messages['helpersSettings'] = '����ġ���';
$messages['interfacesSettings'] = '���󥿡��ե�����';
$messages['securitySettings'] = '�������ƥ�';
$messages['bayesianSettings'] = 'Bayesian�ե��륿';
$messages['resourcesSettings'] = '�꥽����';
$messages['searchSettings'] = '����';
$messages['cleanUpSection'] = '���꡼�󥢥å�';
$messages['cleanUp'] = '���꡼�󥢥å�';
$messages['editResourceAlbum'] = '����Х��Խ�';
$messages['resourceInfo'] = '�꥽�����Խ�';
$messages['editBlog'] = 'Blog�Խ�';
$messages['Logout'] = '��������';

// new post
$messages['topic'] = '�ȥԥå�';
$messages['topic_help'] = '��������̾';
$messages['text'] = '��������';
$messages['text_help'] = '���������Ƥ����Ϥ��Ʋ��������������ƤϾ�˥ᥤ��ڡ�����ɽ������ޤ���';
$messages['extended_text'] = '�ɲ�����';
$messages['extended_text_help'] = '(���ץ����)�������ɲ����Ƥ����Ϥ��Ʋ��������������Ƥϵ����ڡ�����ᥤ��ڡ�����ɽ�������뤳�Ȥ��Ǥ��ޤ����ܺ٤�Blog���������������';
$messages['post_slug'] = 'Slug';
$messages['post_slug_help'] = 'Permanent Link��ȯ�Ԥ���ݤ˻���';
$messages['date'] = '����';
$messages['post_date_help'] = '���ε����θ�����';
$messages['status'] = '���ơ�����';
$messages['post_status_help'] = '���ơ����������򤷤Ʋ�����';
$messages['post_status_published'] = '����';
$messages['post_status_draft'] = '�ɥ�ե�';
$messages['post_status_deleted'] = '����Ѥ�';
$messages['categories'] = '���ƥ���';
$messages['post_categories_help'] = '����1��ʾ�Υ��ƥ�������򤷤Ʋ�����';
$messages['post_comments_enabled_help'] = '�����Ȥ���Ĥ���';
$messages['send_notification_help'] = '���女���Ȥ����Τ���';
$messages['send_trackback_pings_help'] = 'Trackback����';
$messages['send_xmlrpc_pings_help'] = 'XMLRPC Ping ����';
$messages['save_draft_and_continue'] = '�ɥ�ե���¸';
$messages['preview'] = '�ץ�ӥ塼';
$messages['add_post'] = '�ɲ�';
$messages['error_saving_draft'] = '�ɥ�ե���¸��˥��顼��ȯ�����ޤ�����';
$messages['draft_saved_ok'] = '�ɥ�եȤ���¸����λ���ޤ�����';
$messages['error_sending_request'] = '�ꥯ������������˥��顼��ȯ�����ޤ�����';
$messages['error_no_category_selected'] = '����1��ʾ�Υ��ƥ�������򤷤Ʋ�������';
$messages['error_missing_post_topic'] = '��������̾�����Ϥ��Ʋ�������';
$messages['error_missing_post_text'] = '���������Ƥ����Ϥ��Ʋ�������';
$messages['error_adding_post'] = '�������ɲ���˥��顼��ȯ�����ޤ�����';
$messages['post_added_not_published'] = '�������ɲä���λ���ޤ�����������ξ��֤Ǥ���';
$messages['post_added_ok'] = '�������ɲä���λ���ޤ�����';
$messages['send_notifications_ok'] = '���女����/Trackback�������٤����Τ���������ޤ���';

// send trackbacks
$messages['error_sending_trackbacks'] = '�ʲ���Trackback������˥��顼��ȯ�����ޤ���';
$messages['send_trackbacks_help'] = 'Trackback Ping����������URL�������ꤷ�Ʋ��������ޤ������Υ����Ȥ�Trackback�򥵥ݡ��Ȥ��Ƥ��뤫����ǧ����������';
$messages['send_trackbacks'] = 'Trackback����';
$messages['ping_selected'] = 'Ping ����';
$messages['trackbacks_sent_ok'] = '�����URL��Trackback����������λ���ޤ���';

// posts page
$messages['show_by'] = '�������';
$messages['category'] = '���ƥ���';
$messages['author'] = '��Ƽ�';
$messages['post_status_all'] = '����';
$messages['author_all'] = '����';
$messages['search_terms'] = '�����������';
$messages['show'] = '����';
$messages['delete'] = '���';
$messages['actions'] = '���';
$messages['all'] = '����';
$messages['category_all'] = '����';
$messages['error_incorrect_article_id'] = '�����ϸ��Ĥ���ޤ���Ǥ�����';
$messages['error_deleting_article'] = '���� "%s" �κ����˥��顼��ȯ�����ޤ�����';
$messages['article_deleted_ok'] = '���� "%s" �κ������λ���ޤ�����';
$messages['articles_deleted_ok'] = '���� %s �κ������λ���ޤ�����';
$messages['error_deleting_article2'] = '"%s"��ε����κ����˥��顼��ȯ�����ޤ�����';

// edit post page
$messages['update'] = '����';
$messages['editPost'] = '�������Խ�';
$messages['error_fetching_post'] = '�����μ�����˥��顼��ȯ�����ޤ�����';
$messages['post_updated_ok'] = '���� "%s" �ι�������λ���ޤ�����';
$messages['error_updating_post'] = '�����ι�����˥��顼��ȯ�����ޤ�����';
$messages['notification_added'] = '������������/Trackback�����ä��ݤˤ����Τ���������ޤ���';
$messages['notification_removed'] = '������������/Trackback�����äƤ����Τ��������ޤ���';

// post comments
$messages['url'] = 'URL';
$messages['comment_status_all'] = '����';
$messages['comment_status_spam'] = '���ѥ�';
$messages['comment_status_nonspam'] = '�󥹥ѥ�';
$messages['error_fetching_comments'] = '�����ȼ�����˥��顼��ȯ�����ޤ�����';
$messages['error_deleting_comments'] = '�����Ȥ��������Ƥ��ʤ��ޤ��ϥ����Ⱥ����˥��顼ȯ�����ޤ�����';
$messages['comment_deleted_ok'] = '������ "%s" �κ������λ���ޤ�����';
$messages['comments_deleted_ok'] = '%s ��Υ����Ȥκ������λ���ޤ�����';
$messages['error_deleting_comment'] = '������ "%s" �κ����˥��顼ȯ�����ޤ�����';
$messages['error_deleting_comment2'] = 'ID %s �Υ����Ⱥ����˥��顼��ȯ�����ޤ�����';
$messages['editComments'] = '������';
$messages['mark_as_spam'] = '���ѥ�˥ޡ���';
$messages['mark_as_no_spam'] = '�󥹥ѥ�˥ޡ���';
$messages['error_incorrect_comment_id'] = '������ID������������ޤ���';
$messages['error_marking_comment_as_spam'] = '����Υ����Ȥ򥹥ѥ�˥ޡ�����˥��顼��ȯ�����ޤ�����';
$messages['comment_marked_as_spam_ok'] = '����Υ����Ȥ򥹥ѥ�˥ޡ������ޤ�����';
$messages['error_marking_comment_as_nonspam'] = '����Υ����Ȥ��󥹥ѥ�˥ޡ�����˥��顼��ȯ�����ޤ�����';
$messages['comment_marked_as_nonspam_ok'] = '����Υ����Ȥ��󥹥ѥ�˥ޡ������ޤ�����';

// post trackbacks
$messages['blog'] = 'Blog';
$messages['excerpt'] = 'Excerpt';
$messages['error_fetching_trackbacks'] = 'Trackback������˥��顼��ȯ�����ޤ�����';
$messages['error_deleting_trackbacks'] = 'Trackback�����򤵤�Ƥ��ʤ���Trackback�����˥��顼��ȯ�����ޤ�����';
$messages['error_deleting_trackback'] = 'Trackback "%s" �κ����˥��顼��ȯ�����ޤ�����';
$messages['error_deleting_trackback2'] = 'ID "%s" ��Trackback�����˥��顼��ȯ�����ޤ�����';
$messages['trackback_deleted_ok'] = 'Trackback "%s" �κ������λ���ޤ�����';
$messages['trackbacks_deleted_ok'] = '%s ���Trackback�κ������λ���ޤ�����';
$messages['editTrackbacks'] = 'Trackback';

// post statistics
$messages['referrer'] = '��ե��顼';
$messages['hits'] = '�ҥå�';
$messages['error_no_items_selected'] = '������륢���ƥब���򤵤�Ƥ��ޤ���';
$messages['error_deleting_referrer'] = '��ե��顼 "%s" �κ����˥��顼��ȯ�����ޤ�����';
$messages['error_deleting_referrer2'] = 'ID"%s"�Υ�ե��顼�����˥��顼��ȯ�����ޤ�����';
$messages['referrer_deleted_ok'] = '��ե��顼 "%s" �κ������λ���ޤ�����';
$messages['referrers_deleted_ok'] = '%s ��Υ�ե��顼 �κ������λ���ޤ�����';

// categories
$messages['posts'] = '����';
$messages['show_in_main_page'] = '�ᥤ��ڡ�����ɽ��';
$messages['error_incorrect_category_id'] = '���ƥ�������򤷤Ʋ�������';
$messages['error_category_has_articles'] = '���ƥ��� "%s" �ˤϸ��ߵ��������뤿�����Ǥ��ޤ��󡣥��ƥ�����ε������ư/������Ƥ�������ԤäƲ�������';
$messages['category_deleted_ok'] = '���ƥ��� "%s" �κ������λ���ޤ�����';
$messages['categories_deleted_ok'] = '%s ��Υ��ƥ���κ������λ���ޤ�����';
$messages['error_deleting_category'] = '���ƥ��� "%s" �����˥��顼��ȯ�����ޤ�����';
$messages['error_deleting_category2'] = '���ƥ��� "%s" �����˥��顼��ȯ�����ޤ�����';
$messages['yes'] = '�Ϥ�';
$messages['no'] = '������';

// new category
$messages['name'] = '̾��';
$messages['category_name_help'] = '���ƥ����̾��';
$messages['description'] = '�ܺ�';
$messages['category_description_help'] = '���ƥ���ξܺ�����';
$messages['show_in_main_page_help'] = '���Υ��ƥ���ʲ��ε�����ᥤ��ڡ�����ɽ������(�����å��򳰤��Ȥ��Υ��ƥ��꤬�֥饦�����줿���Τߵ�����ɽ��)';
$messages['error_empty_name'] = '���ƥ���̾�����Ϥ��Ʋ�������';
$messages['error_empty_description'] = '���ƥ���ܺ٤����Ϥ��Ʋ�������';
$messages['error_adding_article_category'] = '���ƥ����ɲ���˥��顼��ȯ�����ޤ������ǡ������ǧ�������ɲä�ԤäƲ�������';
$messages['category_added_ok'] = '���ƥ��� "%s" ���ɲä���λ���ޤ���';
$messages['add'] = '�ɲ�';
$messages['reset'] = '�ꥻ�å�';

// update category
$messages['error_updating_article_category'] = '���ƥ���ι�����˥��顼��ȯ�����ޤ�����';
$messages['error_fetching_category'] = '���ƥ���μ�����˥��顼��ȯ�����ޤ�����';
$messages['article_category_updated_ok'] = '���ƥ��� "%s" �ι�������λ���ޤ�����';

// links
$messages['feed'] = 'Feed';
$messages['error_no_links_selected'] = '��󥯤����򤵤�Ƥ��ʤ������ID������������ޤ���';
$messages['error_incorrect_link_id'] = '���ID������������ޤ���';
$messages['error_removing_link'] = '��� "%s" �κ����˥��顼��ȯ�����ޤ�����';
$messages['error_removing_link2'] = 'ID "%s" �Υ�󥯺����˥��顼��ȯ�����ޤ�����';
$messages['link_deleted_ok'] = '��� "%s" �κ������λ���ޤ�����';
$messages['links_deleted_ok'] = '%s ��Υ�󥯺������λ���ޤ�����';

// new link
$messages['link_name_help'] = '���Υ�󥯤�̾��';
$messages['link_url_help'] = '���Υ�󥯤�URL';
$messages['link_description_help'] = '���Υ�󥯤ξܺ�';
$messages['link_feed_help'] = '���Υ�󥯤�RSS��Atom Feed�����ϲ�ǽ�Ǥ���';
$messages['link_category_help'] = '��󥯥��ƥ�������򤷤Ʋ�������';
$messages['error_adding_link'] = '��󥯤��ɲ���˥��顼��ȯ�����ޤ��������٤����������';
$messages['error_invalid_url'] = 'URL������������ޤ���';
$messages['link_added_ok'] = 'Link "%s" was ���ɲä���λ���ޤ�����';

// update link
$messages['error_updating_link'] = '��󥯹�����˥��顼��ȯ�����ޤ��������٤����������';
$messages['error_fetching_link'] = '��󥯼�����˥��顼��ȯ�����ޤ�����';
$messages['link_updated_ok'] = '��� "%s" �ι�������λ���ޤ�����';

// link categories
$messages['links'] = '���';
$messages['error_invalid_link_category_id'] = '��󥯥��ƥ��꤬���򤵤�Ƥ��ʤ������ID������������ޤ���';
$messages['error_links_in_link_category'] = '��󥯥��ƥ��� "%s" �ˤϥ�󥯤����뤿�����Ǥ��ޤ��������Υ�󥯤��ư�����Ƥ�������ԤäƲ�������';
$messages['error_removing_link_category'] = '��󥯥��ƥ��� "%s" �κ����˥��顼��ȯ�����ޤ�����';
$messages['link_category_deleted_ok'] = '��󥯥��ƥ��� "%s" �κ������λ���ޤ�����';
$messages['link_categories_deleted_ok'] = '%s ��Υ�󥯥��ƥ���κ������λ���ޤ�����';
$messages['error_removing_link_category2'] = 'ID "%s" �Υ�󥯥��ƥ�������˥��顼��ȯ�����ޤ�����';

// new link category
$messages['link_category_name_help'] = '���Υ�󥯥��ƥ����̾��';
$messages['error_adding_link_category'] = '��󥯥��ƥ����ɲ���˥��顼��ȯ�����ޤ�����';
$messages['link_category_added_ok'] = '��󥯥��ƥ��� "%s" ���ɲä���λ���ޤ�����';

// edit link category
$messages['error_updating_link_category'] = '��󥯥��ƥ��깹����˥��顼��ȯ�����ޤ��������٤����������';
$messages['link_category_updated_ok'] = '��󥯥��ƥ��� "%s" �ι�������λ���ޤ�����';
$messages['error_fetching_link_category'] = '��󥯥��ƥ��������˥��顼��ȯ�����ޤ�����';

// custom fields
$messages['type'] = '������';
$messages['hidden'] = '��ɽ��';
$messages['fields_deleted_ok'] = '%s ��Υ���������ܤκ������λ���ޤ�����';
$messages['field_deleted_ok'] = '����������� "%s" �κ������λ���ޤ�����';
$messages['error_deleting_field'] = '����������� "%s" �κ����˥��顼��ȯ�����ޤ�����';
$messages['error_deleting_field2'] = 'ID "%s" �Υ���������ܺ����˥��顼��ȯ�����ޤ�����';
$messages['error_incorrect_field_id'] = '�����������ID������������ޤ���';

// new custom field
$messages['field_name_help'] = '������ǤΤ��ι��ܤμ���̾';
$messages['field_description_help'] = '���ι��ܾܺ�';
$messages['field_type_help'] = '���ܥ����פ�����';
$messages['field_hidden_help'] = '����˥����å�����ȵ������ɲ�/�Խ����˹��ܤ���ɽ���Ȥʤ�ޤ������ε�ǽ�ϼ�˥ץ饰����˻��Ѥ���ޤ���';
$messages['error_adding_custom_field'] = '������������ɲ���˥��顼��ȯ�����ޤ����� ���٤����������';
$messages['custom_field_added_ok'] = '����������� "%s" ���ɲä���λ���ޤ�����';
$messages['text_field'] = 'Text field';
$messages['text_area'] = 'Text box';
$messages['checkbox'] = 'Checkbox';
$messages['date_field'] = 'Date chooser';

// edit custom field
$messages['error_fetching_custom_field'] = '����������ܼ�����˥��顼��ȯ�����ޤ�����';
$messages['error_updating_custom_field'] = '����������ܤι�����˥��顼��ȯ�����ޤ��������٤����������';
$messages['custom_field_updated_ok'] = '����������� "%s" �ι�������λ���ޤ�����';

// resources
$messages['root_album'] = '�롼��(�ȥå�)����Х�';
$messages['num_resources'] = '�꥽������';
$messages['total_size'] = '���������';
$messages['album'] = '����Х�';
$messages['error_incorrect_album_id'] = '����Х�ID������������ޤ���';
$messages['error_base_storage_folder_missing_or_unreadable'] = '�����ƥ�ϥ꥽�����Υ��󥹥ȡ�����ե������������뤳�Ȥ��Ǥ��ޤ���Ǥ�������������ϥ����ե⡼�ɤ�PHP�Υ��󥹥ȡ��뤬�Ԥ�줿��ѡ��ߥå�����������ʤ�����ȯ�����ޤ���������褹��ˤϥޥ˥奢��ǰʲ��Υե������ľ�ܺ������Ƥ�������: <br/><br/>%s<br/><br/>���Υե����������¸�ߤ�����ϡ������֥����С��¹ԼԤΥ桼�������ɤ�/�񤯤�¹ԤǤ��뤫�ѡ��ߥå������ǧ���Ʋ�������';
$messages['items_deleted_ok'] = '%s items �κ������λ���ޤ�����';
$messages['error_album_has_children'] = '����Х� "%s" ��˥���Хब¸�ߤ��ޤ�����Υ���Х���ư�����Ƥ�����٤����������';
$messages['item_deleted_ok'] = 'Item "%s"�κ������λ���ޤ�����';
$messages['error_deleting_album'] = '����Х� "%s" �κ����˥��顼��ȯ�����ޤ�����';
$messages['error_deleting_album2'] = 'ID "%s" �Υ���Х�κ����˥��顼��ȯ�����ޤ�����';
$messages['error_deleting_resource'] = '�꥽���� "%s" �κ����˥��顼��ȯ�����ޤ�����';
$messages['error_deleting_resource2'] = 'ID "%s" �Υ꥽���������˥��顼��ȯ�����ޤ�����';
$messages['error_no_resources_selected'] = '�������꥽���������򤵤�Ƥ��ޤ���';
$messages['resource_deleted_ok'] = '�꥽���� "%s" �κ������λ���ޤ�����';
$messages['album_deleted_ok'] = '����Х� "%s" �κ������λ���ޤ�����';
$messages['add_resource'] = '�꥽�����ɲ�';
$messages['add_resource_preview'] = '�ץ�ӥ塼�ɲ�';
$messages['add_resource_medium'] = '�ߥǥ�����ץ�ӥ塼�ɲ�';
$messages['add_album'] = '����Х��ɲ�';

// new album
$messages['album_name_help'] = '�ɲä��륢��Х��̾��';
$messages['parent'] = '�ƥ���Х�';
$messages['no_parent'] = '�ƥ���Х�̵��';
$messages['parent_album_help'] = '����Х���˥���Х���ɲä����ե������������Ԥ����Ȥ���ǽ�Ǥ�';
$messages['album_description_help'] = '���Υ���Х�ξܺ٤����Ϥ��Ʋ�����';
$messages['error_adding_album'] = '����Х��ɲ���˥��顼��ȯ�����ޤ������ǡ������ǧ�����٤����������';
$messages['album_added_ok'] = '����Х� "%s" ���ɲä���λ���ޤ�����';

// edit album
$messages['error_incorrect_album_id'] = '����Х�ID������������ޤ���';
$messages['error_fetching_album'] = '����Х������˥��顼��ȯ�����ޤ�����';
$messages['error_updating_album'] = '����Х�ι�����˥��顼��ȯ�����ޤ�����';
$messages['album_updated_ok'] = '����Х� "%s" �ι�������λ���ޤ�����';
$messages['show_album_help'] = '���Υ����å��򳰤���Blog�ˤ��륢��Х�Ȥ���ɽ������ޤ���';

// new resource
$messages['file'] = '�ե�����';
$messages['resource_file_help'] = '���ߤ�Blog�˥ե����뤬�ɲä���ޤ���ʣ���Υե��������٤˥��åץ��ɤ������"�����ɲ�"�򥯥�å����Ʋ�������';
$messages['add_field'] = '�����ɲ�';
$messages['resource_description_help'] = '���Υե�����ξܺ٤����Ϥ��Ʋ�������';
$messages['resource_album_help'] = '���Υե�������ɲä��륢��Х�����򤷤Ʋ�������';
$messages['error_no_resource_uploaded'] = '���åץ��ɤ���ե����뤬���򤵤�ޤ���Ǥ�����';
$messages['resource_added_ok'] = '�꥽���� "%s" ���ɲä���λ���ޤ�����';
$messages['error_resource_forbidden_extension'] = '�ػߥ����פΤ���ե�������ɲä���ޤ���Ǥ�����';
$messages['error_resource_too_big'] = '�ե����뤬�礭�����뤿���ɲä���ޤ���Ǥ�����';
$messages['error_uploads_disabled'] = '���åץ��ɵ�ǽ�������Τ���ե�������ɲä���ޤ���Ǥ�����';
$messages['error_quota_exceeded'] = '�꥽�����������¤�Ķ���Ƥ��뤿��ե�������ɲä���ޤ���Ǥ�����';
$messages['error_adding_resource'] = '�꥽�����ե������ɲ���˥��顼��ȯ�����ޤ�����';

// edit resource
$messages['editResource'] = '�꥽�����Խ�';
$messages['resource_information_help'] = '�ʲ��Ϥ��Υ꥽�����ե�����ξ���Ǥ�';
$messages['information'] = '����';
$messages['size'] = '������';
$messages['format'] = '����';
$messages['dimensions'] = '�� x ��';
$messages['bits_per_sample'] = '�ӥå�/�ԥ�����';
$messages['sample_rate'] = '����ץ�졼��';
$messages['number_of_channels'] = '�����ͥ��';
$messages['legnth'] = 'Ĺ��';
$messages['thumbnail_format'] = '����ͥ������';
$messages['regenerate_preview'] = '�ץ�ӥ塼�κ�����';
$messages['error_fetching_resource'] = '�꥽����������˥��顼��ȯ�����ޤ�����';
$messages['error_updating_resource'] = '�꥽����������˥��顼��ȯ�����ޤ�����';
$messages['resource_updated_ok'] = '�꥽���� "%s" �ι�������λ���ޤ�����';

// blog settings
$messages['blog_link'] = 'Blog��URL';
$messages['blog_link_help'] = '����Blog��Permanent���';
$messages['blog_name_help'] = '����Blog��̾��';
$messages['blog_description_help'] = '����Blog�ˤĤ��Ƥ�����';
$messages['language'] = '����';
$messages['blog_language_help'] = '����Blog�θ����ڡ����ȴ������̤ǻ��Ѥ������';
$messages['max_main_page_items'] = '�ᥤ��ڡ����ε�����';
$messages['max_main_page_items_help'] = '�ᥤ��ڡ����˾��ɽ�������뵭����';
$messages['max_recent_items'] = '�ǿ�������';
$messages['max_recent_items_help'] = '�ᥤ��ڡ����Ǻǿ��Ȥ���ɽ��������ǹ⵭����';
$messages['template'] = '�ƥ�ץ졼��';
$messages['choose'] = '����';
$messages['blog_template_help'] = '���ʤ���Blog�Υƥ�ץ졼�ȥǥ���������򤷤Ʋ����������Υꥹ�Ȥˤϥ����Х�ƥ�ץ졼�ȤȤ���Blog�Ѥ˥��󥹥ȡ��뤵��Ƥ���ƥ�ץ졼�Ȥ��ޤޤ�Ƥ��ޤ���';
$messages['use_read_more'] = '�������"³��..."��󥯤����';
$messages['use_read_more_help'] = '�����ͭ���ˤ����"��������"�Τߤ�ɽ�����졢���β���"�ɲ�����"�ؤ�"³��..."��󥯤��ɲä���ޤ���';
$messages['enable_wysiwyg'] = '�ӥ��奢�륨�ǥ���������';
$messages['enable_wysiwyg_help'] = 'Internet Explorer 5.5�ʾ�/Mozilla 1.3�ʾ�Υ֥饦���ǻ��Ѳ�ǽ��HTML�ޡ������åפΥӥ��奢�륨�ǥ������Ǥ���';
$messages['enable_comments'] = '�����Ȥ����';
$messages['enable_comments_help'] = '���Ƥε������Ф��륳���Ȥ�ǥե���Ȥǵ��Ĥ��ޤ�������ε������Ф��륳���Ȥε���/�ػߤϵ����κ���/�Խ����������ǽ�Ǥ���';
$messages['show_future_posts'] = 'Future�����򥫥��������ɽ��';
$messages['show_future_posts_help'] = '���դ����ߤ�����(̤��)�ˤʤäƤ��뵭���򥫥��������ɽ�����桼�����˸������ޤ���';
$messages['comments_order'] = '�����Ȥν��';
$messages['comments_order_help'] = '�ᥤ��ڡ�����ɽ�����륳���Ȥν������Ǥ���';
$messages['oldest_first'] = '�Ť���Τ���';
$messages['newest_first'] = '��������Τ���';
$messages['categories_order'] = '���ƥ���ν��';
$messages['categories_order_help'] = '�ᥤ��ڡ�����ɽ�����륫�ƥ���ν������Ǥ���';
$messages['most_recent_updated_first'] = '�Ƕṹ�����줿��Τ���';
$messages['alphabetical_order'] = '����ե��٥åȽ�';
$messages['reverse_alphabetical_order'] = '����ե��٥åȵս�';
$messages['most_articles_first'] = '�����η����(¿����)';
$messages['link_categories_order'] = '��󥯥��ƥ����';
$messages['link_categories_order_help'] = '�ᥤ��ڡ�����ɽ�������󥯥��ƥ���ν������Ǥ���';
$messages['most_links_first'] = '��󥯤η����(¿����)';
$messages['most_links_last'] = '��󥯤η����(����¿)';
$messages['time_offset'] = '�����४�ե��å�';
$messages['time_offset_help'] = 'Blog�����դȻ��֤˻���������Ǥ��ޤ���';
$messages['close'] = '������ɥ����Ĥ���';
$messages['select'] = '����';
$messages['error_updating_settings'] = 'Blog����ι�����˥��顼��ȯ�����ޤ��������٤����������';
$messages['error_invalid_number'] = '���������Ϥ�����������ޤ���';
$messages['error_incorrect_time_offset'] = '���������̵꤬���Ǥ���';
$messages['blog_settings_updated_ok'] = 'Blog����ι�������λ���ޤ�����';
$messages['hours'] = '����';

// user settings
$messages['username_help'] = '�����桼����̾�Ǥ���(�ѹ��Բ�)';
$messages['full_name'] = '̾��';
$messages['full_name_help'] = '���ʤ���̾���Ǥ���';
$messages['password_help'] = '�ѥ���ɤ��ѹ�������Ͽ������ѥ���ɤ����Ϥ��Ʋ��������ѹ����ʤ����ϲ������Ϥ��ʤ��ǲ�������';
$messages['confirm_password'] = '�ѥ���ɳ�ǧ';
$messages['email'] = 'E-Mail';
$messages['email_help'] = '���Ϥ��줿E-Mail�����Τ���������ޤ���';
$messages['bio'] = '���ʾҲ�';
$messages['bio_help'] = '���ʤ��μ��ʾҲ�ʸ�����Ϥ��Ʋ�������';
$messages['picture'] = '�̿�';
$messages['user_picture_help'] = '���åץ��ɺѤߤβ�����ꤢ�ʤ��θĿͼ̿��Ȥ������ꤹ����������򤷤Ʋ�������';
$messages['error_invalid_password'] = '�ѥ���ɤ��������ʤ���û�����ޤ���';
$messages['error_passwords_dont_match'] = '�ѥ���ɤ����פ��ޤ���';
$messages['error_incorrect_email_address'] = 'E-Mail���ɥ쥹�����Ϥ�����������ޤ���';
$messages['error_updating_user_settings'] = '�桼�������깹����˥��顼��ȯ�����ޤ��������٤����������';
$messages['user_settings_updated_ok'] = '�桼��������ι�������λ���ޤ�����';
$messages['resource'] = '�꥽����';

// plugin centre
$messages['identifier'] = '���� (ID)';
$messages['error_plugins_disabled'] = '���ߥץ饰����λ��Ѥ������Ǥ���';

// blog users
$messages['revoke_permissions'] = 'Blog�桼�������';
$messages['error_no_users_selected'] = 'Blog�桼���������򤵤�Ƥ��ޤ���';
$messages['user_removed_from_blog_ok'] = 'Blog�桼���� "%s" �κ������λ���ޤ�����';
$messages['users_removed_from_blog_ok'] = '%s Blog�桼�����κ������λ���ޤ�������';
$messages['error_removing_user_from_blog'] = 'Blog�桼���� "%s" �κ����˥��顼��ȯ�����ޤ�����';
$messages['error_removing_user_from_blog2'] = 'ID "%s" ��Blog�桼���������˥��顼��ȯ�����ޤ�����';

// new blog user
$messages['new_blog_username_help'] = '����Blog�ؤΥ�������������Ϳ����桼����̾�����Ϥ��Ʋ�������(�ɲä��줿�桼������"��������"��"�꥽����"�ˤΤߥ���������ǽ)';
$messages['send_notification'] = '���Τ�����';
$messages['send_user_notification_help'] = '���Υ桼���������Τ�����';
$messages['notification_text'] = '��������';
$messages['notification_text_help'] = '���Υ�å������ˤ������Ƥ�ɽ������ޤ���';
$messages['error_adding_user'] = '�桼�����إ����������³�����˥��顼��ȯ�����ޤ��������٤����������';
$messages['error_empty_text'] = '�������Ƥ����Ϥ��Ʋ�������';
$messages['error_adding_user'] = 'Blog�桼�����ɲ���˥��顼��ȯ�����ޤ��������٤����������';
$messages['error_invalid_user'] = '�桼���� "%s" ��¸�ߤ��ʤ�������������ޤ���';
$messages['user_added_to_blog_ok'] = '����Blog�ؤΥ桼���� "%s" ���ɲä���λ���ޤ�����';

// blog templates
$messages['error_no_templates_selected'] = '�ƥ�ץ졼�Ȥ����򤷤Ʋ�������';
$messages['error_template_is_current'] = '�ƥ�ץ졼�� "%s" �ϸ��߻�����Τ������Ǥ��ޤ���';
$messages['error_removing_template'] = '�ƥ�ץ졼�� "%s" �κ����˥��顼��ȯ�����ޤ�����';
$messages['template_removed_ok'] = '�ƥ�ץ졼�� "%s" �κ������λ���ޤ�����';
$messages['templates_removed_ok'] = '%s ��Υƥ�ץ졼�Ȥκ������λ���ޤ�����';

// new blog template
$messages['template_installed_ok'] = '�ƥ�ץ졼�� "%s" ���ɲä���λ���ޤ�����';
$messages['error_installing_template'] = '�ƥ�ץ졼�� "%s" �Υ��󥹥ȡ�����˥��顼��ȯ�����ޤ�����';
$messages['error_missing_base_files'] = '­��ʤ��ƥ�ץ졼�ȥե����뤬�����Ĥ�����褦�Ǥ���';
$messages['error_add_template_disabled'] = '���ε�ǽ�ϸ��������Τ���ƥ�ץ졼�Ȥ��ɲäϤǤ��ޤ���';
$messages['error_must_upload_file'] = '���åץ��ɤ��줿�ƥ�ץ졼�ȥѥå������Ϥ���ޤ���';
$messages['error_uploads_disabled'] = '���åץ��ɵ�ǽ�ϸ��������Ǥ���';
$messages['error_no_new_templates_found'] = '�������ƥ�ץ졼�Ȥϸ��Ĥ���ޤ���Ǥ�����';
$messages['error_template_not_inside_folder'] = '�ƥ�ץ졼�ȥ��å���ǻ��Ѥ����ե�����ϥƥ�ץ졼�ȥ��åȤ�Ʊ��̾���Υե��������֤��Ʋ�������';
$messages['error_missing_base_files'] = '���ܥƥ�ץ졼�ȥե����뤬�礱�Ƥ���褦�Ǥ���';
$messages['error_unpacking'] = '�ե������Ÿ����˥��顼��ȯ�����ޤ�����';
$messages['error_forbidden_extensions'] = '�ƥ�ץ졼�ȥե�����˶ػߤ���Ƥ����ĥ�Ҥ��ޤޤ�Ƥ��ޤ���';
$messages['error_creating_working_folder'] = '�ե������Ÿ������Υƥ�ݥ�꡼�ե����������˥��顼��ȯ�����ޤ�����';
$messages['error_checking_template'] = '�ƥ�ץ졼�ȳ�ǧ��˥��顼��ȯ�����ޤ���: %s';
$messages['template_package'] = '�ƥ�ץ졼�ȥѥå�����';
$messages['blog_template_package_help']  = '�����ǤϤ��ʤ���Blog���Ѥο����ƥ�ץ졼�ȥ��åȤ򥢥åץ��ɤǤ��ޤ����ƥ�ץ졼�ȥ��åȤ򥢥åץ��ɤǤ��ʤ����ϡ��ޥ˥奢���<b>%s</b>�˥ƥ�ץ졼�ȥ��åȤ�ľ�ܥ��åץ��ɤ���"<b>�ƥ�ץ졼�Ȥ򥹥����</b>"�ܥ���򥯥�å����Ʋ������������ƥब��ưŪ�˿����ƥ�ץ졼�ȥ��åȤ�õ�Τ��ޤ���';
$messages['scan_templates'] = '�ƥ�ץ졼�Ȥ򥹥����';

// site users
$messages['user_status_active'] = 'ͭ��';
$messages['user_status_disabled'] = '���';
$messages['user_status_all'] = '����';
$messages['user_status_unconfirmed'] = '̤��ǧ';
$messages['error_invalid_user2'] = 'ID "%s" �Υ桼������¸�ߤ��ޤ���';
$messages['error_deleting_user'] = '�桼���� "%s" �����˥��顼��ȯ�����ޤ�����';
$messages['user_deleted_ok'] = '�桼���� "%s" ����ߤ���λ���ޤ�����';
$messages['users_deleted_ok'] = '%s �桼��������ߤ���λ���ޤ�����';

// create user
$messages['user_added_ok'] = '�桼���� "%s" ���ɲä���λ���ޤ���';
$messages['error_incorrect_username'] = '���Υ桼����̾���������ʤ������˻�����Ǥ���';
$messages['user_status_help'] = '���Υ桼�����θ��ߤΥ��ơ�����';
$messages['user_blog_help'] = '���Υ桼�����˳�����Ƥ�Blog';
$messages['none'] = '̵��';

// edit user
$messages['error_invalid_user'] = '�桼����ID��¸�ߤ��ʤ�������������ޤ���';
$messages['error_updating_user'] = '�桼�������깹����˥��顼��ȯ�����ޤ��������٤����������';
$messages['blogs'] = 'Blog';
$messages['user_blogs_help'] = '���Υ桼�����������ʡ��ޤ��ϥ����������¤�����Blog';
$messages['site_admin'] = '������';
$messages['site_admin_help'] = '���Υ桼�����˴����Ը��¤�Ϳ����"�����ȴ���"���̤Ǥ��������';
$messages['user_updated_ok'] = '�桼���� "%s" �ι�������λ���ޤ�����';

// site blogs
$messages['blog_status_all'] = '����';
$messages['blog_status_active'] = 'ͭ��';
$messages['blog_status_disabled'] = '���';
$messages['blog_status_unconfirmed'] = '̤��ǧ';
$messages['owner'] = '�����ʡ�';
$messages['quota'] = '����';
$messages['bytes'] = '�Х���';
$messages['error_no_blogs_selected'] = '��ߤ���Blog�����򤵤�Ƥ��ޤ���';
$messages['error_blog_is_default_blog'] = 'Blog "%s" �ϥǥե����Blog�����ꤵ��Ƥ��뤿�����Ǥ��ޤ���';
$messages['blog_deleted_ok'] = 'Blog "%s" ����ߤ���λ���ޤ�����';
$messages['blogs_deleted_ok'] = '%s ���Blog�κ������λ���ޤ�����';
$messages['error_deleting_blog'] = 'Blog "%s" �κ����˥��顼��ȯ�����ޤ�����';
$messages['error_deleting_blog2'] = 'ID "%s" ��Blog�����˥��顼��ȯ�����ޤ�����';

// create blog
$messages['error_adding_blog'] = 'Blog�ɲ���˥��顼��ȯ�����ޤ��������٤����������';
$messages['blog_added_ok'] = 'Blog "%s" ���ɲä���λ���ޤ�����';

// edit blog
$messages['blog_status_help'] = 'Blog���ơ�����';
$messages['blog_owner_help'] = '����Blog�����������ȥ����Ԥ������ʡ�';
$messages['users'] = '�桼����';
$messages['blog_quota_help'] = '�꥽�������������̤�Х��Ȥǻ��ꤷ�Ƥ���������"0"�ޤ��϶���ˤ���ȥ����Х����̤Ȥʤ�ޤ���';
$messages['blog_users_help'] = '����Blog�ؤΥ����������¤�����Ƥ�桼�����򺸤Υꥹ�Ȥ������򤷤Ʊ��Υꥹ�Ȥذ�ư���������ꤷ�Ʋ�������';
$messages['edit_blog_settings_updated_ok'] = 'Blog "%s" �ι�������λ���ޤ�����';
$messages['error_updating_blog_settings'] = 'Blog "%s" �ι�����˥��顼��ȯ�����ޤ�����';
$messages['error_incorrect_blog_owner'] = 'Blog�����ʡ��Ȥ������򤵤줿�桼����������������ޤ���';
$messages['error_fetching_blog'] = 'Blog�μ�����˥��顼��ȯ�����ޤ�����';
$messages['error_updating_blog_settings2'] = 'Blog������˥��顼��ȯ�����ޤ��������٤����������';
$messages['add_or_remove'] = '�桼�����ɲá����';

// site locales
$messages['locale'] = '����';
$messages['locale_encoding'] = '���󥳡���';
$messages['locale_deleted_ok'] = '����ե����� "%s" ���ɲä���λ���ޤ�����';
$messages['error_no_locales_selected'] = '����������ե����뤬���򤵤�Ƥ��ޤ���';
$messages['error_deleting_only_locale'] = '���θ���ե������������ȡ������ƥ�˸���ե����뤬��Ĥ�̵�����֤ˤʤäƤ��ޤ����ᡢ����Ǥ��ޤ���';
$messages['locales_deleted_ok']= '����ե����� %s �κ������λ���ޤ�����';
$messages['error_deleting_locale'] = '����ե����� "%s" �κ����˥��顼��ȯ�����ޤ�����';
$messages['error_locale_is_default'] = '����ե����� "%s" �Ͽ���Blog�ѤΥǥե���ȸ���Τ������Ǥ��ޤ���';

// add locale
$messages['error_invalid_locale_file'] = '����ե����뤬̵���Ǥ���';
$messages['error_no_new_locales_found'] = '��������ե�����ϸ��Ĥ���ޤ���';
$messages['locale_added_ok'] = '����ե����� "%s" ���ɲä���λ���ޤ�����';
$messages['error_saving_locale'] = '��������ե��������¸��˥��顼��ȯ�����ޤ�����';
$messages['scan_locales'] = '����ե�����򥹥����';
$messages['add_locale_help'] = '�����ǤϿ�������ե�����򥢥åץ��ɤǤ��ޤ�������ե����뤬���åץ��ɤǤ��ʤ����ϡ��ޥ˥奢���<b>./locales/</b>����˸���ե������ľ�ܥ��åץ��ɤ���"<b>����ե�����򥹥����</b>"�ܥ���򥯥�å����Ʋ������������ƥब��ưŪ�˿�������ե������õ�Τ��ޤ���';

// site templates
$messages['error_template_is_default'] = '�ƥ�ץ졼�� "%s" �Ͽ���Blog�ѤΥǥե���ȸ���Τ������Ǥ��ޤ���';

// add template
$messages['global_template_package_help'] = '�����Ǥ���Blog�Ѥο����ƥ�ץ졼�ȥ��åȤ򥢥åץ��ɤǤ��ޤ����ƥ�ץ졼�ȥ��åȤ򥢥åץ��ɤǤ��ʤ����ϡ��ޥ˥奢���<b>%s</b>����˥ƥ�ץ졼�ȥ��åȤ�ľ�ܥ��åץ��ɤ���"<b>�ƥ�ץ졼�Ȥ򥹥����</b>"�ܥ���򥯥�å����Ʋ������������ƥब��ưŪ�˿����ƥ�ץ졼�ȥ��åȤ�õ�Τ��ޤ���';

// global settings
$messages['site_config_saved_ok'] = '�������������¸����λ���ޤ�����';
$messages['error_saving_site_config'] = '�������������¸��˥��顼��ȯ�����ޤ�����';
/// general settings
$messages['help_comments_enabled'] = 'ͭ���ˤ���ȿ���Blog�Υ����ȵ�ǽ���ǥե���Ȥ�ͭ���ˤʤ�ޤ��� [�ǥե���� = �Ϥ�]';
$messages['help_beautify_comments_text'] = 'ͭ���ˤ������Ƥ��줿�����Ȥϼ�ưŪ�˲��Ԥ���URL�ˤϥ�󥯤�ĥ���ޤ��� [�ǥե���� = �Ϥ�]';
$messages['help_temp_folder'] = '����ѥ���Ѥߥƥ�ץ졼�����ΰ��Ū�ʥǡ�����񤭹��ि��Υե�����Ǥ����������ƥ��������Τ���˥����֥����С��ĥ꡼�γ��ˤ���ե��������ꤷ�Ʋ������� [�ǥե���� = ./tmp]';
$messages['help_base_url'] = '����Blog�����󥹥ȡ��뤵���١���URL�ˤʤ�ޤ���';
$messages['help_subdomains_enabled'] = 'ͭ���ˤ���ȥ��֥ɥᥤ�󤬻��Ѥ���ޤ����ܺ٤ϥ��֥ɥᥤ��˴ؤ���ɥ�����Ȥ����������� [�ǥե���� = ������]';
$messages['help_subdomains_base_url'] = '���֥ɥᥤ���ͭ���ˤ�����硢base_url������ˤ����ǻ��ꤷ���١���URL�����Ѥ���ޤ���Blog̾�μ����� {blogname} ��Blog�����ʡ��Υ桼����̾�μ����� {username} ����Ѥ���Blog�ؤΥ�󥯤�������Ʋ������� (�� : http://{blogname}.yourdomain.com)';
$messages['help_include_blog_id_in_url'] = '���֥ɥᥤ���"�̾��"URL��ͭ���ʾ�����������URL��"blogId"�ѥ�᡼������������ʤ��褦������Ǥ��ޤ������ε�ǽ����Ѥ������Τ��ѹ����Ʋ������� [�ǥե���� = �Ϥ�]';
$messages['help_script_name'] = 'index.php��¾��̾�Τ��ѹ�������Τ��ѹ����Ʋ������� [�ǥե���� = index.php]';
$messages['help_show_posts_max'] = '�ᥤ��ڡ�����ɽ�������뵭����������Blog�Τ�ͭ���Ǥ��� [�ǥե���� = 15]';
$messages['help_recent_posts_max'] = '�ᥤ��ڡ�����ɽ��������ǿ�������������Blog�Τ�ͭ���Ǥ��� [�ǥե���� = 10]';
$messages['help_save_drafts_via_xmlhttprequest_enabled'] = 'Javascript��XmlHttpRequest�Υɥ�ե���¸����Ĥ��롣 [�ǥե���� = �Ϥ�]';
$messages['help_locale_folder'] = '����ե����뤬�ݴɤ����ե�����ξ��Ǥ��� [�ǥե���� = ./locale]';
$messages['help_default_locale'] = '����Blog�Υǥե���ȸ�������ꤷ�ޤ��� [�ǥե���� = en_UK]';
$messages['help_default_blog_id'] = '�ǥե���Ȥ�ɽ�������Blog�����ꤷ�ޤ��� [�ǥե���� = 1]';
$messages['help_default_time_offset'] = '����Blog�Υǥե���ȤΥ����ॻ�åȤ����ꤷ�ޤ��� [�ǥե���� = 0]';
$messages['help_html_allowed_tags_in_comments'] = '��������ǻ��ѤǤ���HTML������(Ⱦ�ѥ��ڡ����Ƕ��ڤäƲ�������) [�ǥե���� = &lt;a&gt;&lt;i&gt;&lt;br&gt;&lt;br/&gt;&lt;b&gt;]';
$messages['help_referer_tracker_enabled'] = 'ͭ���ˤ���ȥǡ����١����˥�ե��顼����¸���ޤ����ѥե����ޥ󥹤�Ż뤹�����̵���ˤ��Ʋ������� [�ǥե���� = �Ϥ�]';
$messages['help_show_more_enabled'] = 'ͭ���ˤ���ȿ���Blog��"³��..."��󥯤���Ѥ��ޤ��� [�ǥե���� = �Ϥ�]';
$messages['help_update_article_reads'] = 'ͭ���ˤ���ȴ��ɺѤߤε����λ��參���󥿡��򹹿����ޤ����ѥե����ޥ󥹤�Ż뤹�����̵���ˤ��Ʋ������� [�ǥե���� = �Ϥ�]';
$messages['help_update_cached_article_reads'] = 'ͭ���ˤ���ȡ�����å��夬����ˤʤäƤ�����Ǥ���ɺѤߤε����λ��參���󥿡��򹹿����ޤ��� [�ǥե���� = �Ϥ�]';
$messages['help_xmlrpc_ping_enabled'] = 'XMLRPC Ping�����򥵥ݡ��Ȥ��Ƥ��륵���Ȥ��Ф��Ƥ����ͭ���ˤ��ޤ��� [�ǥե���� = �Ϥ�]';
$messages['help_send_xmlrpc_pings_enabled_by_default'] = '�������ɲä��줿���䵭�����������줿���ˤ��ε�ǽ��ǥե���Ȥ�ͭ���ˤ��ޤ��� [�ǥե���� = �Ϥ�]';
$messages['help_xmlrpc_ping_hosts'] = 'XMLRPC Ping����򥵥ݡ��Ȥ��Ƥ��륵���Ȥ�XMLRPC���󥿡��ե������ؤ�URL���Ԥ��Ȥ�1���URL�����Ϥ��Ʋ������� [�ǥե���� = http://rpc.weblogs.com/RPC2]';
$messages['help_trackback_server_enabled'] = '���󥫥ߥ󥰤�Trackback���������ޤ��� [�ǥե���� = �Ϥ�]';
$messages['help_htmlarea_enabled'] = '����Blog��WYSIWYG���ǥ�������ͭ���ˤ��ޤ��� [�ǥե���� = Yes';
$messages['help_plugin_manager_enabled'] = '�ץ饰�����ͭ���ˤ��롣 [�ǥե���� = �Ϥ�]';
$messages['help_minimum_password_length'] = '�ѥ���ɤκ���ʸ���������ꤷ�ޤ��� [�ǥե���� = 4]';
$messages['help_xhtml_converter_enabled'] = 'ͭ���ˤ���ȥ����ƥब���Ƥ�HTML�����ɤ�Ŭ�ڤ�XHTML�����ɤإ���С��Ȥ��ޤ��� [�ǥե���� = �Ϥ�]';
$messages['help_xhtml_converter_aggressive_mode_enabled'] = 'ͭ���ˤ���ȥ����ƥब���Ƥ�HTML�������Ū��XHTML�����ɤإ���С��Ȥ��ޤ��������顼���Ф䤹���ʤ�ޤ��� [�ǥե���� = ������]';
$messages['help_session_save_path'] = 'PHP�ե��󥯥���� session_save_path()����Υ��å����ǡ������ݴɤ���ե�����ξ����ѹ��Ǥ��ޤ�������Υե�����������֥����С��ˤ��񤭹��߲�ǽ�Ǥ��뤫��ǧ���Ƥ���������PHP\'s�ǥե���ȥ��å����ե��������Ѥ�����϶���ˤ��Ʋ������� [�ǥե���� = (����)]';
// summary settings
$messages['help_summary_page_show_max'] = '���ޥ꡼�ڡ�����ɽ�����륢���ƥ�(����ε������ǿ�������Blog��)�ο������ꤷ�ޤ��� [�ǥե���� = 10]';
$messages['help_summary_blogs_per_page'] = '"Blog�ꥹ��"��ɽ������ڡ������Blog�ο������ꤷ�ޤ��� [�ǥե���� = 25]';
$messages['help_forbidden_usernames'] = '�桼������Ͽ����Ĥ��ʤ��桼����̾��Ⱦ�ѥ��ڡ����Ƕ��ڤä����ꤷ�ޤ��� [�ǥե���� = admin www blog ftp]';
$messages['help_force_one_blog_per_email_account'] = '1���E-Mail�ˤĤ�1���Blog�Τߡ� [�ǥե���� = ������]';
$messages['help_summary_show_agreement'] = '��Ͽ���˥��С������ɽ����������ؤ�Ʊ�դ���Ͽ���Ȥ��롣 [�ǥե���� = �Ϥ�]';
$messages['help_need_email_confirm_registration'] = '��Ͽ��˥桼�������˥�󥯥����ɤ�᡼�����������桼��������󥯥����ɤ򥯥�å�������Ͽ��³����λ�Ȥ��롣 [�ǥե���� = �Ϥ�]';
$messages['help_summary_disable_registration'] = '����Blog�Υ桼������Ͽ����ߤ��롣 [�ǥե���� = ������]';
// templates
$messages['help_template_folder'] = '�ƥ�ץ졼�Ȥ��ݴɤ����ե�����Ǥ��� [�ǥե���� = ./templates]';
$messages['help_default_template'] = '����Blog�ѤΥǥե���ȤΥƥ�ץ졼�ȤǤ��� [�ǥե���� = standard]';
$messages['help_users_can_add_templates'] = '�桼�����ˤ�륫������ƥ�ץ졼�ȤΥ��åץ��ɤ���Ĥ��롣 [�ǥե���� = �Ϥ�]';
$messages['help_template_compile_check'] = 'ͭ���ˤ����Smarty����˥ƥ�ץ졼�Ȥ�����å������ѹ�������ȿ�������Τ˹������ޤ����ѥե����ޥ󥹤�Ż뤹����Ϥ����̵���ˤ��Ʋ������� [�ǥե���� = �Ϥ�]';
$messages['help_template_cache_enabled'] = '�����ͭ���ˤ���ȥ���å���С������Υڡ������Ǥ�����������Ѥ���ޤ����ǡ����١�����ƥ�ץ졼�ȤϺƥ���ѥ��뤵�줺���ǡ������������ɬ�פ��ʤ��ʤ�ޤ��� [�ǥե���� = �Ϥ�]';
$messages['help_template_cache_lifetime'] = '����å�������»��֤��ä�����Ǥ��ޤ���-1�����Ϥ�������»��֤����ꤵ��ޤ���0�����Ϥ���ȥ���å����̵���ˤʤ�ޤ���������å����̵���ˤ������template_cache_enabled ��"������"�����ꤹ��褦�ˤ��Ƥ��������� [�ǥե���� = -1]';
$messages['help_template_http_cache_enabled'] = 'HTTP����ꥯ�����Ȥ򥵥ݡ��Ȥ��ޤ��������ͭ���ˤ���ȥ�������Ȥ�"If-Modified-Since" HTTP�إå��������졢ɬ�׻��ˤϥ���ƥ�ĤΤߤ��������ޤ����Х�ɥ磻�����ݻ�������Ϥ����ͭ���ˤ��Ʋ������� [�ǥե���� = ������]';
$messages['help_allow_php_code_in_templates'] = '�����ͭ���ˤ����{php}...{/php} �֥�å����Smarty�ƥ�ץ졼�Ȥ˥ͥ��ƥ���PHP�����ɤ������ߤޤ��� [�ǥե���� = ������]';
// urls
$messages['help_request_format_mode'] = 'URL���������򤷤Ʋ���������������URL����Ѥ�����ϰʲ���������ǧ���Ʋ������� [�ǥե���� = Plain]';
$messages['plain'] = 'Plain';
$messages['search_engine_friendly'] = 'Search engine friendly';
$messages['custom_url_format'] = '��������URL';
$messages['help_permalink_format'] = '��������URL���ѻ���Permalink���������ꤷ�ޤ��� [�ǥե���� = /blog/{blogname}/{catname}/{year}/{month}/{day}/{postname}$]';
$messages['help_category_link_format'] = '��������URL���ѻ��Υ��ƥ���ؤΥ�󥯤����ꤷ�ޤ��� [�ǥե���� = /blog/{blogname}/{catname}$]';
$messages['help_blog_link_format'] = '��������URL���ѻ���Blog�ؤΥ�󥯤����ꤷ�ޤ��� [�ǥե���� = /blog/{blogname}$]';
$messages['help_archive_link_format'] = '��������URL���ѻ��Υ��������֤ؤΥ�󥯤����ꤷ�ޤ��� [�ǥե���� = /blog/{blogname}/archives/{year}/?{month}/?{day}]';
$messages['help_user_posts_link_format'] = '��������URL���ѻ�������Υ桼���������Ƥ��줿���������ꤷ�ޤ��� [�ǥե���� = /blog/{blogname}/user/{username}$]';
$messages['help_post_trackbacks_link_format'] = '��������URL���ѻ���Trackback�ؤΥ�󥯤����ꤷ�ޤ��� [�ǥե���� = /blog/{blogname}/post/trackbacks/{postname}$]';
$messages['help_template_link_format'] = '��������URL���ѻ��Υ����������ץƥ�ץ졼�ȥڡ����ؤΥ�󥯤����ꤷ�ޤ��� [�ǥե���� = /blog/{blogname}/page/{templatename}$]';
$messages['help_album_link_format'] = '��������URL���ѻ��Υ꥽��������Х�ؤΥ�󥯤����ꤷ�ޤ��� [�ǥե���� = /blog/{blogname}/album/{albumname}$]';
$messages['help_resource_link_format'] = '��������URL���ѻ��Υե������դ��Υ꥽�����ڡ����ؤΥ�󥯤����ꤷ�ޤ��� [�ǥե���� = /blog/{blogname}/resource/{albumname}/{resourcename}$]';
$messages['help_resource_preview_link_format'] = '��������URL���ѻ��Υ꥽�����ץ�ӥ塼�ؤΥ�󥯤����ꤷ�ޤ��� [�ǥե���� = /blog/{blogname}/resource/{albumname}/preview/{resourcename}$]';
$messages['help_resource_medium_size_preview_link_format'] = '��������URL���ѻ��Υߥǥ����ॵ�����꥽�����ץ�ӥ塼�ؤΥ�󥯤����ꤷ�ޤ��� [�ǥե���� = /blog/{blogname}/resource/{albumname}/preview-med/{resourcename}$]';
$messages['help_resource_download_link_format'] = '��������URL���ѻ��Υե�����ؤΥ�󥯤����ꤷ�ޤ��� [�ǥե���� = /blog/{blogname}/resource/{albumname}/download/{resourcename}$]';
// email
$messages['help_check_email_address_validity'] = 'E-Mail���ɥ쥹��ǧ����MX�쥳���ɤ��ɥᥤ���¸�ߤ��뤫���ޤ��᡼��ܥå�����ͭ��������Ū�ʥ����å���Ԥ��ޤ��� [�ǥե���� = ������]';
$messages['help_email_service_enabled'] = 'E-Mail����������Ĥ��롣 [�ǥե���� = �Ϥ�]';
$messages['help_post_notification_source_address'] = '�����ƥ������������"From:"�ι��ܤ�����E-Mail���ɥ쥹������Ǥ��� [�ǥե���� = noreply@your.host.com]';
$messages['help_email_service_type'] = 'E-Mail���������뤿��Υ����ƥ�����Ǥ��� [�ǥե���� = PHP]';
$messages['help_smtp_host'] = 'E-Mail���������ƥ�Ȥ���SMTP�����򤹤���ϡ����Ѥ���SMTP�����С��򤳤�����ꤷ�Ʋ������� [�ǥե���� = (����)]';
$messages['help_smtp_port'] = 'SMTP�����С���25�ʾ�Υݡ��Ȥ�¹Ԥ��Ƥ�����Ϥ��������ꤷ�Ʋ������� [�ǥե���� = (����)]';
$messages['help_smtp_use_authentication'] = 'SMTP�����С��˾�ǧ��ɬ�פȤ��롣  [�ǥե���� = ������]';
$messages['help_smtp_username'] = 'SMTP�����С��˾�ǧ��ɬ�פȤ������Υ桼����̾�����Ϥ��Ʋ������� [�ǥե���� = (����)]';
$messages['help_smtp_password'] = 'SMTP�����С��˾�ǧ��ɬ�פȤ������Υѥ���ɤ����Ϥ��Ʋ������� [�ǥե���� = (����)]';
// helpers
$messages['help_path_to_tar'] = '.tar.gz �� tar.bz2�����Υƥ�ץ졼�ȥ��åȤ�Ÿ�����뤿���"tar"�ġ���ؤΥѥ� [�ǥե���� = /bin/tar]';
$messages['help_path_to_gzip'] = '.tar.gz�����Υƥ�ץ졼�ȥ��åȤ�Ÿ�����뤿���"gzip"�ġ���ؤΥѥ� [�ǥե���� = /bin/gzip]';
$messages['help_path_to_bz2'] = '.tar.bz2�����Υƥ�ץ졼�ȥ��åȤ�Ÿ�����뤿���"bzip2"�ġ���ؤΥѥ� [�ǥե���� = /usr/bin/bzip2]';
$messages['help_path_to_unzip'] = '.zip�����Υƥ�ץ졼�ȥ��åȤ�Ÿ�����뤿���"unzip"�ġ���ؤΥѥ� [�ǥե���� = /usr/bin/unzip]';
$messages['help_unzip_use_native_version'] = '�Х�ɥ뤵��Ƥ���PHP�ͥ��ƥ����Ǥ�.zip�ե�����Ÿ�����˻��Ѥ��롣 [�ǥե���� = ������]';
// uploads
$messages['help_uploads_enabled'] = '�桼�����Υե�����Υ��åץ��ɤ���Ĥ��롣(�꥽��������������ƥ�ץ졼�ȥե����롢����ե�����) [�ǥե���� = �Ϥ�]';
$messages['help_maximum_file_upload_size'] = '����ե����륵��������Х��Ȥ����ꤷ�Ʋ������������ͤ�PHP\'s�������ͤ�Ķ���뤳�ȤϤ���ޤ���  [�ǥե���� = 2000000]';
$messages['help_upload_forbidden_files'] = '���åץ��ɤ�ػߤ���ե����륿���פ�Ⱦ�ѥ��ڡ����Ƕ��ڤä����ꤷ�Ʋ�������\'*\' �� \'?\'�λ��Ѥϵ��Ĥ���Ƥ��ޤ��� [�ǥե���� = *.php *.php3 *.php4 *.phtml]';
// interfaces
$messages['help_xmlrpc_api_enabled'] = 'XMLRPC�����Blog�ؤΥ�����������Ĥ��롣 [�ǥե���� = �Ϥ�]';
$messages['help_rdf_enabled'] = 'Atom��RSS����Υ���ƥ�ĥ���ǥ�������������Ĥ��롣 [�ǥե���� = �Ϥ�]';
$messages['help_default_rss_profile'] = '����ƥ�ĥ���ǥ�����������Ѥ�RSS��Atom�Υǥե���ȥС����������ꤷ�ޤ��� [�ǥե���� = RSS 1.0]';
// security
$messages['help_security_pipeline_enabled'] = '�������ƥ����ѥ��ץ饤������Ƥδ�Ϣ�ե��륿��ͭ���ˤ��롣 [�ǥե���� = �Ϥ�]';
$messages['help_ip_address_filter_enabled'] = 'IP���ɥ쥹�ե��륿��ͭ���ˤ��롣���ε�ǽ����Ѥ���ˤϥ������ƥ����ѥ��ץ饤��ͭ���ˤʤäƤ���ɬ�פ�����ޤ��� [�ǥե���� = �Ϥ�]';
$messages['help_content_filter_enabled'] = 'Regular Expression-Based����ƥ�ĥե��륿��ͭ���ˤ��롣���ε�ǽ����Ѥ���ˤϥ������ƥ����ѥ��ץ饤��ͭ���ˤʤäƤ���ɬ�פ�����ޤ��� [�ǥե���� = �Ϥ�]';
$messages['help_maximum_comment_size'] = '�����Ȥκǹ⥵������Х��Ȥ����ꤷ�Ʋ�������0�����Ϥ���Ȥ��ε�ǽ����ߤ��ޤ��� [�ǥե���� = 0]';
// bayesian filter
$messages['help_bayesian_filter_enabled'] = '��ư���ѥ�ե��륿�Ѥ�Bayesian�ե��륿��ͭ���ˤ��롣  [�ǥե���� = �Ϥ�]';
$messages['help_bayesian_filter_spam_probability_treshold'] = '�����Ȥ򥹥ѥ��ǧ�ꤹ��ޤǤκǹ��ߵ��ͤ����ꤷ�ޤ���  [�ǥե���� = 0.9]';
$messages['help_bayesian_filter_nonspam_probability_treshold'] = '�����Ȥ��󥹥ѥ��ǧ�ꤷ����κ����ߵ��ͤ����ꤷ�ޤ��� [�ǥե���� = 0.2]';
$messages['help_bayesian_filter_min_length_token'] = 'Byesian�ե��륿��"ͭ��"��ǧ�ꤵ��뤿��Υȡ�����κ�����  [�ǥե���� = 3]';
$messages['help_bayesian_filter_max_length_token'] = 'Byesian�ե��륿��"ͭ��"��ǧ�ꤵ��뤿��Υȡ�����κǹ���  [�ǥե���� = 100]';
$messages['help_bayesian_filter_number_significant_tokens'] = 'ͭ���ʥȡ������  [�ǥե���� = 15]';
$messages['help_bayesian_filter_spam_comments_action'] = '���ѥ��ǧ�ꤵ�줿�����Ȥ���¸/�˴������ꤷ�ޤ����ե��륿���ؽ��Ѥߤξ��Τ�"�˴�"�����򤹤�褦�ˤ��Ƥ���������  [�ǥե���� = ��¸]';
$messages['keep_spam_comments'] = '"���ѥ�"�ޡ������ƥǡ����١�������¸';
$messages['throw_away_spam_comments'] = '�˴����� (��¸���ʤ�)';
// resources
$messages['help_resources_enabled'] = '�꥽��������Ĥ��롣 [�ǥե���� = �Ϥ�]';
$messages['help_resources_folder'] = '�꥽�����ե����뤬�ݴɤ����������ꤷ�ޤ����������ƥ����򶯲����뤿��˥����֥����С��ĥ꡼�ʳ������ꤷ�Ʋ������� security  [�ǥե���� = ./gallery]';
$messages['help_thumbnail_method'] = '����ͥ���μ������������ꤷ�ޤ���PHP���Ѥξ���GD���ݡ��Ȥ�ɬ�פȤʤ�ޤ���  [�ǥե���� = PHP]';
$messages['help_path_to_convert'] = 'ImageMagick�ˤ��"����С���"�ġ���ؤΥѥ������ꤷ�ޤ�������ͥ������������"ImageMagick"�����򤷤���������ɬ�ܤȤʤ�ޤ���  [�ǥե���� = /usr/bin/convert]';
$messages['help_thumbnail_format'] = '����ͥ������¸���������ꤷ�ޤ���  [�ǥե���� = ���ꥸ�ʥ�β�����Ʊ��]';
$messages['help_thumbnail_height'] = '������ͥ���Υǥե���Ȥν��������ꤷ�ޤ���  [�ǥե���� = 120]';
$messages['help_thumbnail_width'] = '������ͥ���Υǥե���Ȥβ��������ꤷ�ޤ���  [�ǥե���� = 120]';
$messages['help_medium_size_thumbnail_height'] = '�極��ͥ���Υǥե���Ȥν��������ꤷ�ޤ���  [�ǥե���� = 480]';
$messages['help_medium_size_thumbnail_width'] = '�極��ͥ���Υǥե���Ȥβ��������ꤷ�ޤ���  [�ǥե���� = 640]';
$messages['help_thumbnails_keep_aspect_ratio'] = '����ͥ���������˼ºݤΥ������γ���Ŭ�Ѥ��롣��ǻ��ꤷ������ͥ��륵��������礭���ʤ��ǽ��������ޤ�����ɽ���μ����ɤ��ʤ�ޤ��� [�ǥե���� = �Ϥ�]';
$messages['help_thumbnail_generator_force_use_gd1'] = '�����ƥ��GD1-only��ǽ�λ��Ѥ������롣 [�ǥե���� = ������]';
$messages['help_thumbnail_generator_user_smoothing_algorithm'] = '���ࡼ������ͥ����Ѥ˥��르�ꥺ�����Ѥ��롣����ͥ������������GD�����򤷤Ƥ�����ˤΤ�Ŭ�Ѥ���ޤ��� [�ǥե���� = PHP Imagecopyresampled]';
$messages['help_resources_quota'] = 'Blog�ѤΥ����Х�꥽�������̤�Х��Ȥ����ꤷ�ޤ��� (��: 5242880 �Х��� = 5MB) 0�����Ϥ����̵���¤Ȥʤ�ޤ��� [�ǥե���� = 0]';
$messages['help_resource_server_http_cache_enabled'] = '"If-Modified-Since"�إå�����HTTP����ꥯ�����ȤΥ��ݡ��Ȥ�ͭ���ˤ��롣���Х�ɥ磻���ݻ���ͭ���ˤʤ�ޤ���  [�ǥե���� = ������]';
$messages['help_resource_server_http_cache_lifetime'] = '���饤����Ȥ˥꥽�����Υ���å���С���������Ѥ�������֤�ޥ����������(100��ʬ��1)�����ꤷ�ޤ��� [�ǥե���� = 9999999]';
$messages['same_as_image'] = '���ꥸ�ʥ�β�����Ʊ��';
// search
$messages['help_search_engine_enabled'] = '�������󥸥��ͭ���ˤ���  [�ǥե���� = �Ϥ�]';
$messages['help_search_in_custom_fields'] = '�������������򸡺�����  [�ǥե���� = �Ϥ�]';
$messages['help_search_in_comments'] = '��������򸡺�����  [�ǥե���� = �Ϥ�]';

// cleanup
$messages['purge'] = '���꡼�󥢥å�';
$messages['cleanup_spam'] = '���ѥ�ǡ����Υ��꡼�󥢥å�';
$messages['cleanup_spam_help'] = '�����¹Ԥ���ȡ��桼���������ѥ��Ƚ��(�ޡ���)�������Ƥ����פʥ����Ȥ��������ޤ��������¹Ԥ���ȸ����᤹���Ȥ��Ǥ��ޤ���ΤǤ���ղ�������';
$messages['spam_comments_purged_ok'] = '���ѥ�ǡ����Υ��꡼�󥢥åפ���λ���ޤ�����';
$messages['cleanup_posts'] = '��ƥǡ����Υ��꡼�󥢥å�';
$messages['cleanup_posts_help'] = '�����¹Ԥ���ȡ��桼���������(�ޡ���)�������Ƥ����פ���ƥǡ������������ޤ��������¹Ԥ���ȸ����᤹���Ȥ��Ǥ��ޤ���ΤǤ���ղ�������';
$messages['posts_purged_ok'] = '��ƥǡ����Υ��꡼�󥢥åפ���λ���ޤ�����';

/// summary ///
// front page
$messages['summary'] = '���ޥ꡼';
$messages['register'] = '��Ͽ';
$messages['summary_welcome'] = 'Welcome!';
$messages['summary_most_active_blogs'] = '�ǿ�������Blog';
$messages['summary_most_commented_articles'] = '�����Ȥ�¿������';
$messages['summary_most_read_articles'] = '��������¿������';
$messages['password_forgotten'] = '�ѥ����ʶ��';
$messages['summary_newest_blogs'] = '�����Blog';
$messages['summary_latest_posts'] = '����ε���';
$messages['summary_search_blogs'] = 'Blog����';

// blog list
$messages['updated'] = '�ǽ�������:';
$messages['total_reads'] = '������:';

// blog profile
$messages['blog'] = 'Blog';
$messages['latest_posts'] = '�ǿ��ε���';

// registration
$messages['register_step0_title'] = '���С�����';
$messages['agreement'] = '��������'; 
$messages['decline'] = 'Ʊ�դ��ʤ�';
$messages['accept'] = 'Ʊ�դ���';
$messages['read_service_agreement'] = '�ʲ��Υ��С������褯���ɤߤˤʤꡢƱ�դξ����Ͽ��������"Ʊ�դ���"�򥯥�å����Ʋ�������';
$messages['register_step1_title'] = '�桼�������� [1/4]';
$messages['register_step1_help'] = 'Blog������������˿����桼�������������ɬ�פ�����ޤ������ο����桼������Blog�Υ����ʡ��Ȥʤꡢ���Ƥε�ǽ�˥��������Ǥ���褦�ˤʤ�ޤ���';
$messages['register_next'] = '����';
$messages['register_back'] = '����';
$messages['register_step2_title'] = 'Blog���� [2/4]';
$messages['register_blog_name_help'] = '���ʤ���Blog��̾��';
$messages['register_step3_title'] = '�ƥ�ץ졼������ [3/4]';
$messages['step1'] = '���ƥå�1';
$messages['step2'] = '���ƥå�2';
$messages['step3'] = '���ƥå�3';
$messages['register_step3_help'] = '�ƥ�ץ졼�Ȥ����򤷤Ʋ��������ƥ�ץ졼�Ȥϸ���ѹ���ǽ�Ǥ���';
$messages['error_must_choose_template'] = '�ƥ�ץ졼�Ȥ�1�����򤷤Ʋ�������';
$messages['select_template'] = '�ƥ�ץ졼������';
$messages['register_step5_title'] = '��Ͽ��λ [4/4]';
$messages['finish'] = '��λ';
$messages['register_need_confirmation'] = '��Ͽ��³����λ���뤿��ξ�ǧ�᡼�뤬���ʤ���E-Mail���ɥ쥹����������ޤ�������ǧ�᡼��˷Ǻܤ���Ƥ��뾵ǧ�����ɤ򥯥�å�������Ͽ��³����λ�����Ʋ�������';
$messages['register_step5_help'] = '�����桼������Blog����������λ���ޤ���!';
$messages['register_blog_link'] = '���ʤ��ο���Blog�Ϥ������ꥢ��������ǽ�Ǥ�: <a href="%2$s">%1$s</a>';
$messages['register_blog_admin_link'] = '���ʤ��ο���Blog�˵�������Ƥ�������<a href="admin.php">��������</a>���ԤäƲ�������';
$messages['register_error'] = '�¹���˥��顼��ȯ�����ޤ�����';
$messages['error_registration_disabled'] = '����������ޤ��󤬡�������Ͽ�ϸ��߼����դ��Ƥ���ޤ���';
// registration article topic and text
$messages['register_default_article_topic'] = '��Ͽ����λ���ޤ���';
$messages['register_default_article_text'] = '���Υ�å�������ɽ������Ƥ�����ϡ���Ͽ����λ�����ʤ����Ѥ�Blog���ɲä��줿���Ȥ��̣���ޤ���(�������̤�ꤳ�Υ�å������Ϻ����ǽ�Ǥ�)';
$messages['register_default_category'] = 'General';
// confirmation email
$messages['register_confirmation_email_text'] = '��Ͽ��³����λ����ˤϰʲ��ξ�ǧ�����ɤ򥯥�å����Ʋ�����:

%s

����Ͽ���꤬�Ȥ��������ޤ�����';
$messages['error_invalid_activation_code'] = '����������ޤ��󤬡���ǧ�����ɤ��ְ�äƤ���褦�Ǥ���';
$messages['blog_activated_ok'] = '��Ͽ��³������λ���ޤ�����';
// forgot your password?
$messages['reset_password'] = '�ѥ���ɥꥻ�å�';
$messages['reset_password_username_help'] = '�ѥ���ɤ�ꥻ�åȤ���桼����̾�����Ϥ��Ʋ�������';
$messages['reset_password_email_help'] = '���Υ桼��������ϿE-Mail���ɥ쥹�����Ϥ��Ʋ�������';
$messages['reset_password_help'] = '�����Ǥ�ʶ�����Ƥ��ޤä��ѥ���ɤ�ꥻ�åȤ�����ȯ�Ԥ��뤳�Ȥ��Ǥ��ޤ����桼����̾��E-Mail���ɥ쥹�����Ϥ��Ʋ�������';
$messages['error_resetting_password'] = '�ѥ���ɥꥻ�å���˥��顼��ȯ�����ޤ��������٤����������';
$messages['reset_password_error_incorrect_email_address'] = '���Ϥ��줿E-Mail���ɥ쥹�ȥ桼����̾���ޥå����ޤ���';
$messages['password_reset_message_sent_ok'] = '�ѥ���ɤ�ꥻ�åȤ����󥯥����ɤ����ܤ��줿�᡼��򤢤ʤ���E-Mail���ɥ쥹�����������ޤ������᡼��˵��ܤ���Ƥ����󥯥����ɤ򥯥�å����Ʋ�������';
$messages['error_incorrect_request'] = 'URL��Υѥ�᡼����������������ޤ���';
$messages['change_password'] = '�����ѥ��������';
$messages['change_password_help'] = '�����ѥ���ɤ����Ϥ��Ʋ�������';
$messages['new_password'] = '�����ѥ����';
$messages['new_password_help'] = '�����ѥ���ɤ����Ϥ��Ʋ�������';
$messages['password_updated_ok'] = '�ѥ���ɤι�������λ���ޤ�����';

// Suggested by BCSE, some useful messages that not available in official locale
$messages['upgrade_information'] = 'This page looks plain and un-styled because you\'re using a non-standard compliant browser. To see it in its best form, please <a href="http://www.webstandards.org/upgrade/" title="The Web Standards Project\'s Browser Upgrade initiative">upgrade</a> to a browser that supports web standards. It\'s free and painless.';
$messages['jump_to_navigation'] = 'Jump to Navigation.';
$messages['comment_email_never_display'] = 'Line and paragraph breaks automatic, e-mail address never displayed.';
$messages['comment_html_allowed'] = '<acronym title="Hypertext Markup Language">HTML</acronym> allowed: &lt;<acronym title="Hyperlink">a</acronym> href=&quot;&quot; title=&quot;&quot; rel=&quot;&quot;&gt; &lt;<acronym title="Acronym Description">acronym</acronym> title=&quot;&quot;&gt; &lt;<acronym title="Quote">blockquote</acronym> cite=&quot;&quot;&gt; &lt;<acronym title="Strike">del</acronym>&gt; &lt;<acronym title="Italic">em</acronym>&gt; &lt;<acronym title="Underline">ins</acronym>&gt; &lt;<acronym title="Bold">strong</acronym>&gt;';
$messages['trackback_uri'] = 'The <acronym title="Uniform Resource Identifier">URI</acronym> to trackback this entry is: ';
$messages['previous_post'] = '����';
$messages['next_post'] = '����';
$messages['comment_default_title'] = '(̵��)';
$messages['guestbook'] = '�����ȥ֥å�';
$messages['trackbacks'] = 'Trackback';
$messages['menu'] = '��˥塼';
$messages['albums'] = '����Х�';
$messages['admin'] = '������';
?>
