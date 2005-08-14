<?php
// set this to the encoding that should be used to display the pages correctly,translated by JianxinLiu,Tianjin University
$messages['encoding'] = 'gb2312';
$messages['locale_description'] = 'Simplified Chinese translation (GB2312)';
// locale format, see Locale::formatDate for more information
$messages['date_format'] = '%d/%m/%Y %H:%M';

// days of the week
$messages['days'] = Array( '������', '����һ', '���ڶ�', '������', '������', '������', '������' );
// -- compatibility, do not touch -- //
$messages['Monday'] = $messages['days'][1];
$messages['Tuesday'] = $messages['days'][2];
$messages['Wednesday'] = $messages['days'][3];
$messages['Thursday'] = $messages['days'][4];
$messages['Friday'] = $messages['days'][5];
$messages['Saturday'] = $messages['days'][6];
$messages['Sunday'] = $messages['days'][0];

// abbreviations
$messages['daysshort'] = Array( '��', 'һ', '��', '��', '��', '��', '��' );
// -- compatibility, do not touch -- //
$messages['Mo'] = $messages['daysshort'][1];
$messages['Tu'] = $messages['daysshort'][2];
$messages['We'] = $messages['daysshort'][3];
$messages['Th'] = $messages['daysshort'][4];
$messages['Fr'] = $messages['daysshort'][5];
$messages['Sa'] = $messages['daysshort'][6];
$messages['Su'] = $messages['daysshort'][0];

// months of the year
$messages['months'] = Array( 'һ��', '����', '����', '����', '����', '����', '����', '����', '����', 'ʮ��', 'ʮһ��', 'ʮ����');
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
$messages['message'] = 'ϵͳ��Ϣ';
$messages['error'] = '������Ϣ';
$messages['date'] = '����';

// miscellaneous texts
$messages['of'] = 'of';
$messages['recently'] = '���·���';
$messages['comments'] = '���»ظ�';
$messages['comment on this'] = '����';
$messages['my_links'] = '�ҵ�����';
$messages['archives'] = '���¹鵵';
$messages['search'] = '����';
$messages['calendar'] = '��������';
$messages['search_s'] = '����';
$messages['search_this_blog'] = 'վ������';
$messages['about_myself'] = '���ҽ���';
$messages['permalink_title'] = '�鵵���µ����Ҿ�̬���ӵ�ַ';
$messages['permalink'] = '��̬������ַ';
$messages['posted_by'] = '����';
$messages['reply'] = '�ظ�';

// add comment form
$messages['add_comment'] = '��������';
$messages['comment_topic'] = '����';
$messages['comment_text'] = '�ڴ��������';
$messages['comment_username'] = '�ƺ�';
$messages['comment_email'] = '�����ַ����ѡ��';
$messages['comment_url'] = '������ҳ����ѡ��';
$messages['comment_send'] = '����';
$messages['comment_added'] = '���������Ѿ�����';
$messages['comment_add_error'] = '��������ʱ����';
$messages['article_does_not_exist'] = '�����²�����';
$messages['no_posts_found'] = '�Ҳ�������';
$messages['user_has_no_posts_yet'] = '��������δ�����κ�����';
$messages['back'] = '������һҳ';
$messages['post'] = '����';
$messages['trackbacks_for_article'] = '���ñ��ĵ����£�';
$messages['trackback_excerpt'] = 'ժҪ';
$messages['trackback_weblog'] = '����';
$messages['search_results'] = '�������';
$messages['search_matching_results'] = '�������·�����������: ';
$messages['search_no_matching_posts'] = 'û�����·�������Ҫ��';
$messages['read_more'] = '�鿴ȫ��';
$messages['syndicate'] = '���žۺ�';
$messages['main'] = '��ҳ';
$messages['about'] = '����';
$messages['download'] = '����';

////// error messages /////
$messages['error_fetching_article'] = '�Ҳ�������ָ��������';
$messages['error_fetching_articles'] = '�Ҳ�������ָ��������';
$messages['error_trackback_no_trackback'] = '��δ�������ķ�������ͨ��';
$messages['error_incorrect_article_id'] = '���±�ʶ�Ŵ���';
$messages['error_incorrect_blog_id'] = '���ͱ�ʶ�Ŵ���';
$messages['error_comment_without_text'] = '������д��������';
$messages['error_comment_without_name'] = '������д�ƺ�';
$messages['error_adding_comment'] = '�������ʱ����';
$messages['error_incorrect_parameter'] = '��������ȷ';
$messages['error_parameter_missing'] = '������ȫ';
$messages['error_comments_not_enabled'] = '�ò��͹ر������۹���';
$messages['error_incorrect_search_terms'] = '������������Ч';
$messages['error_no_search_results'] = '����������ƥ��';
$messages['error_no_albums_defined'] = '�ò������޿����ļ���';

/////////////////                                          //////////////////
///////////////// STRINGS FOR THE ADMINISTRATION INTERFACE //////////////////
/////////////////                                          //////////////////

// login page
$messages['login'] = '��½';
$messages['welcome_message'] = '��ӭ����Plog';
$messages['error_incorrect_username_or_password'] = '�Բ��������û����������벻��ȷ��';
$messages['error_dont_belong_to_any_blog'] = '�Բ�������δ�����κβ��͡�';
$messages['logout_message'] = '���Ѿ��ɹ��˳���';
$messages['logout_message_2'] = '��� <a href="%1$s">����</a> ���� %2$s</a>.';
$messages['error_access_forbidden'] = '�������ޡ�����Ҫ���ȵõ���֤��ͨ����';
$messages['username'] = '�û���';
$messages['password'] = '����';

// dashboard
$messages['dashboard'] = '�������';
$messages['recent_articles'] = '��������';
$messages['recent_comments'] = '��������';
$messages['recent_trackbacks'] = '��������';
$messages['blog_statistics'] = '����ͳ��';
$messages['total_posts'] = '��������';
$messages['total_comments'] = '��������';
$messages['total_trackbacks'] = '��������';
$messages['total_viewed'] = '�������';
$messages['in'] = 'Ŀ������';

// menu options
$messages['newPost'] = '��������';
$messages['Manage'] = '�������';
$messages['managePosts'] = '���¹���';
$messages['editPosts'] = '�����б�';
$messages['editArticleCategories'] = '�༭���·���';
$messages['newArticleCategory'] = '�½����·���';
$messages['manageLinks'] = '���ӹ���';
$messages['editLinks'] = '�����б�';
$messages['newLink'] = '�½�����';
$messages['editLink'] = '�༭����';
$messages['editLinkCategories'] = '���ӷ���';
$messages['newLinkCategory'] = '�½����ӷ���';
$messages['editLinkCategory'] = '�༭���ӷ���';
$messages['manageCustomFields'] = '�����Զ�������';
$messages['blogCustomFields'] = '�Զ�������';
$messages['newCustomField'] = '�½��Զ�������';
$messages['resourceCenter'] = '��Դ����';
$messages['resources'] = '��Դ�б�';
$messages['newResourceAlbum'] = '�½���Դ�ļ���';
$messages['newResource'] = '�½���Դ';
$messages['controlCenter'] = '��������';
$messages['manageSettings'] = '����';
$messages['blogSettings'] = '��������';
$messages['userSettings'] = '�û�����';
$messages['pluginCenter'] = '�������';
$messages['Stats'] = 'ͳ������';
$messages['manageBlogUsers'] = '�û�����';
$messages['newBlogUser'] = '������û�';
$messages['showBlogUsers'] = '�û��б�';
$messages['manageBlogTemplates'] = 'ģ�����';
$messages['newBlogTemplate'] = '�½�ģ��';
$messages['blogTemplates'] = 'ģ���б�';
$messages['adminSettings'] = '��������';
$messages['Users'] = '�û�����';
$messages['createUser'] = '�����û�';
$messages['editSiteUsers'] = '�û��б�';
$messages['Blogs'] = '���͹���';
$messages['createBlog'] = '��������';
$messages['editSiteBlogs'] = '�����б�';
$messages['Locales'] = '���԰�����';
$messages['newLocale'] = '������԰�';
$messages['siteLocales'] = '���԰��б�';
$messages['Templates'] = 'ģ�����';
$messages['newTemplate'] = '����ģ��';
$messages['siteTemplates'] = 'ģ���б�';
$messages['GlobalSettings'] = 'ȫ������';
$messages['editSiteSettings'] = '��������';
$messages['summarySettings'] = '��������';
$messages['templateSettings'] = 'ģ������';
$messages['urlSettings'] = 'URL����';
$messages['emailSettings'] = '�ʼ�����';
$messages['uploadSettings'] = '�ϴ�����';
$messages['helpersSettings'] = '��������';
$messages['interfacesSettings'] = '�ӿ�����';
$messages['securitySettings'] = '��ȫ����';
$messages['bayesianSettings'] = '��������';
$messages['resourcesSettings'] = '��Դ��������';
$messages['searchSettings'] = '��������';
$messages['cleanUpSection'] = '��������';
$messages['cleanUp'] = '��������';
$messages['editResourceAlbum'] = '�༭��Դ��';
$messages['resourceInfo'] = '�༭��Դ';
$messages['editBlog'] = '�༭����';
$messages['Logout'] = 'ע��';

// new post
$messages['topic'] = '����';
$messages['topic_help'] = '�������������±���';
$messages['text'] = '��������';
$messages['text_help'] = 'ժҪ���ݣ����ò������ݽ���������ҳ��ʾ��';
$messages['extended_text'] = '��չ����';
$messages['extended_text_help'] = '��չ���ݣ����ò��ֿ���ͨ����̨���þ����Ƿ���ʾ����ҳ�л�������������������У��ڲ��������л��ҵ�������Ϣ��';
$messages['post_slug'] = '���´���';
$messages['post_slug_help'] = '���´��ɿ���Ϊ���±������ɾ�̬��ַ��';
$messages['date'] = '����';
$messages['post_date_help'] = '�������µ�����';
$messages['status'] = '����״̬';
$messages['post_status_help'] = 'ѡ������״̬';
$messages['post_status_published'] = '����';
$messages['post_status_draft'] = '�ݸ�';
$messages['post_status_deleted'] = '��ɾ��';
$messages['categories'] = '���·���';
$messages['post_categories_help'] = 'ѡ��һ����������';
$messages['post_comments_enabled_help'] = '����ظ�';
$messages['send_notification_help'] = '�����»ظ�֪ͨ';
$messages['send_trackback_pings_help'] = '��������ͨ��';
$messages['send_xmlrpc_pings_help'] = '����XMLRPC pings';
$messages['save_draft_and_continue'] = '����ݸ�';
$messages['preview'] = '����Ԥ��';
$messages['add_post'] = '���������';
$messages['error_saving_draft'] = '����ݸ�����г���';
$messages['draft_saved_ok'] = '����ݸ�ɹ�';
$messages['error_sending_request'] = '��������ʱ����';
$messages['error_no_category_selected'] = '��������ѡ��һ�����·���';
$messages['error_missing_post_topic'] = '�����������±���';
$messages['error_missing_post_text'] = '����������������';
$messages['error_adding_post'] = '�������ʱ��������';
$messages['post_added_not_published'] = '������³ɹ���δ����';
$messages['post_added_ok'] = '������³ɹ�';
$messages['send_notifications_ok'] = '�������ۻ�����ʱ����������ͨ�档';

// send trackbacks
$messages['error_sending_trackbacks'] = '������������֪ͨʱ��������';
$messages['send_trackbacks_help'] = '��ѡ������Ҫ��������ͨ�����ַ��(��ȷ������վվ֧������ͨ�湦��)';
$messages['send_trackbacks'] = '��������֪ͨ';
$messages['ping_selected'] = '��ѡ������ַ��������֪ͨ';
$messages['trackbacks_sent_ok'] = '����֪ͨ�ѳɹ����͵�ѡ������ַ';

// posts page
$messages['show_by'] = '��ʾ';
$messages['category'] = '���·���';
$messages['author'] = '����';
$messages['post_status_all'] = 'ȫ��״̬';
$messages['author_all'] = 'ȫ������';
$messages['search_terms'] = '��������';
$messages['show'] = '��ʾ';
$messages['delete'] = 'ɾ��';
$messages['actions'] = '����';
$messages['all'] = 'ȫ��';
$messages['category_all'] = 'ȫ������';
$messages['error_incorrect_article_id'] = '����ȷ�����±�ʶ';
$messages['error_deleting_article'] = 'ɾ������ "%s" ʱ��������';
$messages['article_deleted_ok'] = '���� "%s" ɾ���ɹ�';
$messages['articles_deleted_ok'] = '���� %s ɾ���ɹ�';
$messages['error_deleting_article2'] = 'ɾ������ "%s" ʱ��������';

// edit post page
$messages['update'] = '�޸�';
$messages['editPost'] = '�༭����';
$messages['error_fetching_post'] = '��ȡ����ʱ����';
$messages['post_updated_ok'] = '���� "%s" ���³ɹ�';
$messages['error_updating_post'] = '��������ʱ����';
$messages['notification_added'] = '�������ۻ�����ʱ�����յ�ͨ�档';
$messages['notification_removed'] = '�������ۻ�����ʱ������ͨ�档';

// post comments
$messages['url'] = 'URL';
$messages['comment_status_all'] = 'ȫ��';
$messages['comment_status_spam'] = '��������';
$messages['comment_status_nonspam'] = '����������';
$messages['error_fetching_comments'] = '��ȡ��������ʱ����';
$messages['error_deleting_comments'] = 'ɾ����������ʱ�������δѡ���κ�����';
$messages['comment_deleted_ok'] = '���� "%s" ɾ���ɹ�';
$messages['comments_deleted_ok'] = '���� %s ɾ���ɹ�';
$messages['error_deleting_comment'] = 'ɾ������ "%s" ʱ����';
$messages['error_deleting_comment2'] = 'ɾ������ %s ʱ����';
$messages['editComments'] = '�༭����';
$messages['mark_as_spam'] = '���Ϊ��������';
$messages['mark_as_no_spam'] = '���Ϊ����������';
$messages['error_incorrect_comment_id'] = '���۱�ʶ����';
$messages['error_marking_comment_as_spam'] = '�����������ʱ����';
$messages['comment_marked_as_spam_ok'] = '�������ѳɹ����Ϊ��������';
$messages['error_marking_comment_as_nonspam'] = 'ȥ���������۱��ʱ����';
$messages['comment_marked_as_nonspam_ok'] = '�ɹ�ȥ���������۱��';

// post trackbacks
$messages['blog'] = '����վ��';
$messages['excerpt'] = '��������';
$messages['error_fetching_trackbacks'] = '��ȡ����ʱ����';
$messages['error_deleting_trackbacks'] = 'ɾ������ʱ�����δѡ���κ�����';
$messages['error_deleting_trackback'] = 'ɾ������ "%s" ʱ����';
$messages['error_deleting_trackback2'] = 'ɾ������ "%s" ʱ����';
$messages['trackback_deleted_ok'] = '���� "%s" ɾ���ɹ�';
$messages['trackbacks_deleted_ok'] = '���� %s ɾ���ɹ�';
$messages['editTrackbacks'] = '����';

// post statistics
$messages['referrer'] = '��������';
$messages['hits'] = '�����';
$messages['error_no_items_selected'] = 'δѡ��ɾ���κ�ѡ��';
$messages['error_deleting_referrer'] = 'ɾ���������� "%s" ʱ����';
$messages['error_deleting_referrer2'] = 'ɾ���������� "%s" ʱ����';
$messages['referrer_deleted_ok'] = '�������� "%s" ɾ���ɹ�';
$messages['referrers_deleted_ok'] = '�������� "%s" ɾ���ɹ�';

// categories
$messages['posts'] = '������';
$messages['show_in_main_page'] = '�Ƿ�����ҳ��ʾ';
$messages['error_incorrect_category_id'] = '�����ʶ�����δѡ����Ŀ';
$messages['error_category_has_articles'] = '���� "%s" �ѱ�����ʹ�ã����ȱ༭��Щ������ɾ���÷��ࡣ';
$messages['category_deleted_ok'] = '���� "%s" �ɹ�ɾ��';
$messages['categories_deleted_ok'] = '���� "%s" �ɹ�ɾ��';
$messages['error_deleting_category'] = 'ɾ������"%s"ʱ����';
$messages['error_deleting_category2'] = 'ɾ������"%s"ʱ����';
$messages['yes'] = '��';
$messages['no'] = '��';

// new category
$messages['name'] = '��������';
$messages['category_name_help'] = '�������ƽ���ʾ����ҳ';
$messages['description'] = '����';
$messages['category_description_help'] = '�÷������ϸ����';
$messages['show_in_main_page_help'] = '�÷����Ƿ�����ҳ��ʾ';
$messages['error_empty_name'] = '����������������';
$messages['error_empty_description'] = '����������������';
$messages['error_adding_article_category'] = '����·���ʱ����������������';
$messages['category_added_ok'] = '���� "%s" �ɹ���ӵ�ϵͳ��';
$messages['add'] = '���';
$messages['reset'] = '����';

// update category
$messages['error_updating_article_category'] = '�޸ķ���ʱ����';
$messages['error_fetching_category'] = '��ȡ����ʱ����';
$messages['article_category_updated_ok'] = '����"%s"�޸ĳɹ�';

// links
$messages['feed'] = 'Feed';
$messages['error_no_links_selected'] = '���ӱ�ʶ�����δѡ����Ŀ';
$messages['error_incorrect_link_id'] = '���ӱ�ʶ����';
$messages['error_removing_link'] = 'ɾ������"%s"ʱ����';
$messages['error_removing_link2'] = 'ɾ������"%s"ʱ����';
$messages['link_deleted_ok'] = '���� "%s" ɾ���ɹ�';
$messages['links_deleted_ok'] = '���� %s ɾ���ɹ�';

// new link
$messages['link_name_help'] = '��������';
$messages['link_url_help'] = '���ӵ�ַ';
$messages['link_description_help'] = '��������';
$messages['link_feed_help'] = '����Feed��ַ';
$messages['link_category_help'] = 'ѡ��һ����Ч�����ӷ���';
$messages['error_adding_link'] = '�������ʱ�����������ݲ�����';
$messages['error_invalid_url'] = '��ַ��';
$messages['link_added_ok'] = '���� "%s" ��ӳɹ�';

// update link
$messages['error_updating_link'] = '�޸�����ʱ�����������ݲ����ԡ�';
$messages['error_fetching_link'] = '��ȡ����ʱ����';
$messages['link_updated_ok'] = '���� "%s" �޸ĳɹ�';

// link categories
$messages['links'] = '��վ����';
$messages['error_invalid_link_category_id'] = '�����ӷ����ʶ�����δѡ����Ŀ';
$messages['error_links_in_link_category'] = '������ʹ�����ӷ��� "%s" ���������޸�����������';
$messages['error_removing_link_category'] = 'ɾ�����ӷ��� "%s"ʱ����';
$messages['link_category_deleted_ok'] = '���� "%s" ɾ���ɹ�';
$messages['link_categories_deleted_ok'] = '���� "%s" ɾ���ɹ�';
$messages['error_removing_link_category2'] = 'ɾ�����ӷ��� "%s"ʱ����';

// new link category
$messages['link_category_name_help'] = '�����ӷ�������';
$messages['error_adding_link_category'] = '���������ʱ����';
$messages['link_category_added_ok'] = '���ӷ��� "%s" ��ӳɹ�';

// edit link category
$messages['error_updating_link_category'] = '�޸����ӷ���ʱ�����������ݲ�����';
$messages['link_category_updated_ok'] = '���ӷ��� "%s" �޸ĳɹ�';
$messages['error_fetching_link_category'] = '��ȡ���ӷ���ʱ����';

// custom fields
$messages['type'] = '����';
$messages['hidden'] = '�Ƿ�����';
$messages['fields_deleted_ok'] = '�Զ������� %s ɾ���ɹ�';
$messages['field_deleted_ok'] = '�Զ������� "%s" ɾ���ɹ�';
$messages['error_deleting_field'] = 'ɾ���Զ������� "%s" ʱ����';
$messages['error_deleting_field2'] = 'ɾ���Զ������� "%s" ʱ����';
$messages['error_incorrect_field_id'] = '�Զ��������ʶ��Ч';

// new custom field
$messages['field_name_help'] = '�������н���Ϊ������ı�ʶ';
$messages['field_description_help'] = '������ĸ�Ҫ����������ӻ��޸�����ʱ��ʾ';
$messages['field_type_help'] = 'ѡ����Ч���������';
$messages['field_hidden_help'] = '���һ���������أ���ô������ӻ�༭����ʱ������ʾ���������������ҪӦ���ڲ���С�';
$messages['error_adding_custom_field'] = '����Զ�������ʱ�����������ݲ�����';
$messages['custom_field_added_ok'] = '�Զ������� "%s" ��ӳɹ�';
$messages['text_field'] = '�ı�����';
$messages['text_area'] = '�ı���';
$messages['checkbox'] = '��ѡ��';
$messages['date_field'] = '����ѡ��';

// edit custom field
$messages['error_fetching_custom_field'] = '��ȡ�Զ�������ʱ����';
$messages['error_updating_custom_field'] = '�޸��Զ�������ʱ�����������ݲ�����';
$messages['custom_field_updated_ok'] = '�Զ������� "%s" �޸ĳɹ�';

// resources
$messages['root_album'] = '���ļ���';
$messages['num_resources'] = '��Դ����';
$messages['total_size'] = '��ʹ�ÿռ�';
$messages['album'] = '�ļ���';
$messages['error_incorrect_album_id'] = '��Դ��ʶ����';
$messages['error_base_storage_folder_missing_or_unreadable'] = 'plog�в��ܴ�����Ҫ�Ĵ����Դ���ļ��С�������ɶ���ԭ����ɣ��������phpʹ�ð�ȫģʽ��װ���л�������û�û���㹻Ȩ�ޡ�����Ȼ�����ֶ����в����������ļ���: <br/><br/>%s<br/><br/>�����Щ�ļ����Ѿ����ڣ���ȷ�����ǿ�ͨ���û�����web���������ж�д��';
$messages['items_deleted_ok'] = '��Ŀ%sɾ���ɹ�';
$messages['error_album_has_children'] = '�ļ��� "%s" �����ļ���. ���ȱ༭���ļ��������ԡ�';
$messages['item_deleted_ok'] = '��Ŀ%sɾ���ɹ�';
$messages['error_deleting_album'] = 'ɾ���ļ��� "%s" ʱ����';
$messages['error_deleting_album2'] = 'ɾ���ļ��� "%s" ʱ����';
$messages['error_deleting_resource'] = 'ɾ���ļ�"%s"ʱ����';
$messages['error_deleting_resource2'] = 'ɾ���ļ�"%s"ʱ����';
$messages['error_no_resources_selected'] = 'û��ѡ��ɾ������Ŀ';
$messages['resource_deleted_ok'] = '��Դ"%s"���ɹ�ɾ��';
$messages['album_deleted_ok'] = '�ļ���"%s"���ɹ�ɾ��';
$messages['add_resource'] = '�����Դ';
$messages['add_resource_preview'] = '���Ԥ��';
$messages['add_resource_medium'] = '�������Ԥ��';
$messages['add_album'] = '����ļ���';

// new album
$messages['album_name_help'] = '���ļ��е�����';
$messages['parent'] = '�ϼ��ļ���';
$messages['no_parent'] = '���ϼ��ļ���';
$messages['parent_album_help'] = 'ʹ�����ѡ��ʹ���ļ����°����ļ����Ա���õĹ����ļ�';
$messages['album_description_help'] = '�ļ������ݵ���ϸ����';
$messages['error_adding_album'] = '������ļ��г����������ݲ����ԡ�';
$messages['album_added_ok'] = '�ļ��� "%s" �ɹ����';

// edit album
$messages['error_incorrect_album_id'] = '�ļ��б�ʾ����';
$messages['error_fetching_album'] = '��ȡ�ļ���ʱ����';
$messages['error_updating_album'] = '�޸��ļ���ʱ����������������';
$messages['album_updated_ok'] = '�ļ��� "%s" �޸ĳɹ�';
$messages['show_album_help'] = '������ã��ļ��н�����ʾ�ڲ��͵Ŀ����ļ����б���';

// new resource
$messages['file'] = '�ļ�';
$messages['resource_file_help'] = '����ļ�����ǰ�����С�ʹ�á���Ӷ���ļ�������ͬʱ�ϴ�����ļ�';
$messages['add_field'] = '��Ӷ���ļ�';
$messages['resource_description_help'] = '���ļ�����ϸ����';
$messages['resource_album_help'] = 'ѡ����ļ�Ҫ��ӵ��ĸ��ļ���';
$messages['error_no_resource_uploaded'] = 'δѡ���κδ��ϴ��ļ�';
$messages['resource_added_ok'] = '�ļ� "%s" ��ӳɹ�';
$messages['error_resource_forbidden_extension'] = '���ļ����ͱ����ã��������';
$messages['error_resource_too_big'] = '�ļ�̫�󣬲������';
$messages['error_uploads_disabled'] = '��ֹ�ϴ��ļ�';
$messages['error_quota_exceeded'] = '�ļ����ݣ���������ļ�';
$messages['error_adding_resource'] = '�����Դ�ļ�ʱ����';

// edit resource
$messages['editResource'] = '�༭��Դ';
$messages['resource_information_help'] = '������һЩ������Դ�ļ�����Ϣ��';
$messages['information'] = '�ļ���Ϣ';
$messages['size'] = '�ļ���С';
$messages['format'] = '�ļ���ʽ';
$messages['dimensions'] = '�˾�';
$messages['bits_per_sample'] = '�ļ�����λ��';
$messages['sample_rate'] = '������';
$messages['number_of_channels'] = 'ͨ����';
$messages['legnth'] = '����';
$messages['thumbnail_format'] = '����ͼ��ʽ';
$messages['regenerate_preview'] = '��������Ԥ��';
$messages['error_fetching_resource'] = '��ȡ�ļ�ʱ����';
$messages['error_updating_resource'] = '�޸��ļ�ʱ����';
$messages['resource_updated_ok'] = '�ļ� "%s" �޸ĳɹ�';

// blog settings
$messages['blog_link'] = '���͵�ַ';
$messages['blog_link_help'] = '�ò�����վ�����õ�ַ';
$messages['blog_name_help'] = '��������';
$messages['blog_description_help'] = '�ò��͵���ϸ����';
$messages['language'] = '����';
$messages['blog_language_help'] = 'ѡ�񲩿�ǰ̨�͹��������';
$messages['max_main_page_items'] = '��ҳ��������';
$messages['max_main_page_items_help'] = '��ʾ�ڸò�����ҳ�������������';
$messages['max_recent_items'] = '������������';
$messages['max_recent_items_help'] = '��ʾ����ҳ�е����·��������ļ�����';
$messages['template'] = 'ģ��';
$messages['choose'] = 'ѡ��';
$messages['blog_template_help'] = 'ѡ��ò���Ӧ�õ�ģ�壬 ����б���������е�Ϊ�ò��Ͱ�װ��ģ��';
$messages['use_read_more'] = '��������ʹ����չ����';
$messages['use_read_more_help'] = '������ø�ѡ�����ҳֻ��ʾ�������ݣ�������ʾ��չ���ݡ������Ҫ��ʾ��չ���ݵĻ���ÿ������ĩβ�����һ�����鿴ȫ�ġ�������';
$messages['enable_wysiwyg'] = 'ʹ�����������ñ༭���༭����';
$messages['enable_wysiwyg_help'] = '�������������ñ༭���༭���µ�html����.�ñ༭��ֻ��ʹ����IE5.5���ϻ�Mozilla 1.3�����������';
$messages['enable_comments'] = 'Ĭ��������������';
$messages['enable_comments_help'] = 'Ĭ�Ͽ��Ŷ��������µ���������Ȩ��.';
$messages['show_future_posts'] = '��ʾ����������';
$messages['show_future_posts_help'] = '�Խ������ڷ���������Ƿ�������û��ɼ�';
$messages['comments_order'] = '������������ʽ';
$messages['comments_order_help'] = '����ҳ�����۵�����ʽ';
$messages['oldest_first'] = '�ɵ���ǰ';
$messages['newest_first'] = '�µ���ǰ';
$messages['categories_order'] = '���·�������ʽ';
$messages['categories_order_help'] = '����ҳ�����·��������ʽ';
$messages['most_recent_updated_first'] = '�������������ǰ';
$messages['alphabetical_order'] = '����ĸ��������';
$messages['reverse_alphabetical_order'] = '����ĸ��������';
$messages['most_articles_first'] = '����������ǰ';
$messages['link_categories_order'] = '���ӷ�������ʽ';
$messages['link_categories_order_help'] = '����ҳ�����ӷ��������ʽ';
$messages['most_links_first'] = '����������ǰ';
$messages['most_links_last'] = '���������ں�';
$messages['time_offset'] = 'ʱ��';
$messages['time_offset_help'] = '���Ĳ��ͷ������������ڵص�ʱ�� ';
$messages['close'] = '�ر�';
$messages['select'] = 'ѡ��';
$messages['error_updating_settings'] = '���²�������ʱ�����������ݲ����ԡ�';
$messages['error_invalid_number'] = '��Ŀ����ȷ';
$messages['error_incorrect_time_offset'] = 'ʱ����Ч';
$messages['blog_settings_updated_ok'] = '���������޸ĳɹ�';
$messages['hours'] = 'Сʱ';

// user settings
$messages['username_help'] = '�û����ƣ������޸�';
$messages['full_name'] = 'ȫ��';
$messages['full_name_help'] = '�û���ȫ��';
$messages['password_help'] = '�޸����룬���������뱣�ֲ��䡣';
$messages['confirm_password'] = 'ȷ������';
$messages['email'] = '�����ʼ�';
$messages['email_help'] = '����֪ͨ�ĵ����ʼ���ַ';
$messages['bio'] = '���ҽ���';
$messages['bio_help'] = '���ҵ���ϸ����';
$messages['picture'] = '����ͼƬ';
$messages['user_picture_help'] = '���ϴ���ͼƬ��ѡ��һ����Ϊ��ĸ���ͼƬ';
$messages['error_invalid_password'] = '���벻��ȷ����ȷ���䳤���Ƿ����';
$messages['error_passwords_dont_match'] = '�Բ������벻ƥ��';
$messages['error_incorrect_email_address'] = '�����ʼ���ַ����ȷ';
$messages['error_updating_user_settings'] = '�����û�����ʱ�����������ݲ�����';
$messages['user_settings_updated_ok'] = '�û������޸ĳɹ�';
$messages['resource'] = '��Դ';

// plugin centre
$messages['identifier'] = '��ʶ��';
$messages['error_plugins_disabled'] = '�Բ��𣬲�������á�';

// blog users
$messages['revoke_permissions'] = 'ȡ��ʹ��Ȩ��';
$messages['error_no_users_selected'] = 'λѡ���κ��û�';
$messages['user_removed_from_blog_ok'] = '�û� "%s" �ĸò���Ȩ��ȡ���ɹ�';
$messages['users_removed_from_blog_ok'] = '�û� "%s" �ĸò���Ȩ��ȡ���ɹ�';
$messages['error_removing_user_from_blog'] = 'ȡ���û� "%s" �ĸò���Ȩ��ʱ����';
$messages['error_removing_user_from_blog2'] = 'ȡ���û� "%s" �ĸò���Ȩ��ʱ����';

// new blog user
$messages['new_blog_username_help'] = '�����ӵĶԸò��͹������Դ����Ȩ�޵��û����û���';
$messages['send_notification'] = '����ͨ��';
$messages['send_user_notification_help'] = '����û�����һ��ͨ���ʼ�';
$messages['notification_text'] = 'ͨ������';
$messages['notification_text_help'] = '���û����͵�ͨ�������';
$messages['error_adding_user'] = '��Ӹ��û�Ȩ��ʱ�����������ݲ����ԡ�';
$messages['error_empty_text'] = '����������ͨ������';
$messages['error_adding_user'] = '����û�ʱ�����������ݲ����ԡ�';
$messages['error_invalid_user'] = '�û� "%s" ��Ч�򲻴���';
$messages['user_added_to_blog_ok'] = '����û� "%s" �ĸò���Ȩ�޳ɹ�';

// blog templates
$messages['error_no_templates_selected'] = 'δѡ���κ�ģ��';
$messages['error_template_is_current'] = 'ģ�� "%s" ����ʹ�ã�����ɾ����';
$messages['error_removing_template'] = 'ɾ��ģ�� "%s" ʱ����';
$messages['template_removed_ok'] = 'ģ�� "%s" ɾ���ɹ�';
$messages['templates_removed_ok'] = 'ģ�� %s ɾ���ɹ�';

// new blog template
$messages['template_installed_ok'] = 'ģ�� "%s" ��ӳɹ�';
$messages['error_installing_template'] = '��װģ�� "%s" ʱ����';
$messages['error_missing_base_files'] = 'ģ���ļ����ֶ�ʧ';
$messages['error_add_template_disabled'] = '��վ��˹��ܱ����ã����������ģ��';
$messages['error_must_upload_file'] = 'δ�ϴ�ģ���ļ�';
$messages['error_uploads_disabled'] = '��վ���ֹ�ϴ�';
$messages['error_no_new_templates_found'] = 'δ�ҵ���ģ��';
$messages['error_template_not_inside_folder'] = 'ģ���ļ������ļ��е����Ʊ�����ģ�������е�������ͬ��';
$messages['error_missing_base_files'] = '���ֻ���ģ���ļ���ʧ';
$messages['error_unpacking'] = '��ѹ���ļ�ʱ����';
$messages['error_forbidden_extensions'] = 'ģ�������ļ�����ֹ����';
$messages['error_creating_working_folder'] = '������ʱ�ļ��н�ѹ���ļ�ʱ����';
$messages['error_checking_template'] = 'ģ�巢������ (code = %s)';
$messages['template_package'] = 'ģ�尲װ��';
$messages['blog_template_package_help']  = '�������ô˱����ϴ�һ���µ�ģ�尲װ������ģ��ֻ�����Ĳ��Ͳ��ܹ�ʹ�á�������޷���������ϴ������ֶ��ϴ�ģ�岢�������������Ĳ���ģ���ļ���<b>%s</b>��,Ȼ���� "<b>ɨ��ģ��</b>" ��ť�� pLog ��ɨ����ļ��в��Զ�������ҵ�����ģ�塣';
$messages['scan_templates'] = 'ɨ��ģ��';

// site users
$messages['user_status_active'] = '����';
$messages['user_status_disabled'] = '����';
$messages['user_status_all'] = '�û�״̬';
$messages['user_status_unconfirmed'] = 'δȷ��';
$messages['error_invalid_user2'] = '��ʶΪ "%s" ���û������ڡ�';
$messages['error_deleting_user'] = '�����û� "%s" ʱ����';
$messages['user_deleted_ok'] = '�û� "%s" ���óɹ�';
$messages['users_deleted_ok'] = '�û� %s ���óɹ�';

// create user
$messages['user_added_ok'] = '�û� "%s" ��ӳɹ�';
$messages['error_incorrect_username'] = '���û�������ȷ���Ѿ�����';
$messages['user_status_help'] = '���û���ǰ״̬';
$messages['user_blog_help'] = '���û����������Ȩ�޵Ĳ���';
$messages['none'] = '��';

// edit user
$messages['error_invalid_user'] = '�û���ʶ����ȷ����û�������';
$messages['error_updating_user'] = '�����û�����ʱ�����������ݲ�����';
$messages['blogs'] = '�����б�';
$messages['user_blogs_help'] = '���û���ǰӵ�еĻ���Ȩ�޵Ĳ���';
$messages['site_admin'] = '����ԱȨ��';
$messages['site_admin_help'] = '���û��Ƿ���й���ԱȨ��';
$messages['user_updated_ok'] = '�û� "%s" �޸ĳɹ�';

// site blogs
$messages['blog_status_all'] = '����״̬';
$messages['blog_status_active'] = '����';
$messages['blog_status_disabled'] = '����';
$messages['blog_status_unconfirmed'] = 'δȷ��';
$messages['owner'] = '����Ա';
$messages['quota'] = '���';
$messages['bytes'] = '�ֽ���';
$messages['error_no_blogs_selected'] = '������ѡ������Ҫ���õĲ�����վ��';
$messages['error_blog_is_default_blog'] = '"%s"��ϵͳĬ�ϲ��ͣ��޷����á�';
$messages['blog_deleted_ok'] = '���� "%s" ���óɹ�';
$messages['blogs_deleted_ok'] = '���� "%s" ���óɹ�';
$messages['error_deleting_blog'] = '���ò���"%s"ʱ����';
$messages['error_deleting_blog2'] = '���ò���"%s"ʱ����';

// create blog
$messages['error_adding_blog'] = '��Ӳ���ʱ�����������ݲ����ԡ�';
$messages['blog_added_ok'] = '���� "%s" ��ӳɹ�';

// edit blog
$messages['blog_status_help'] = '����״̬';
$messages['blog_owner_help'] = '�ò��͵Ĺ���Ա';
$messages['users'] = '�û��б�';
$messages['blog_quota_help'] = '������Դ���ĵ�������Ϊ0�������ƣ�����Ϊ����ʹ��ȫ�����';
$messages['blog_users_help'] = 'ӵ�иò���Ȩ�޵��û��б������ѡ��һ�����Ҳ�ɸ�����û��ò��͵�Ȩ��';
$messages['edit_blog_settings_updated_ok'] = '���� "%s" �޸ĳɹ�';
$messages['error_updating_blog_settings'] = '�޸Ĳ��� "%s" ʱ����';
$messages['error_incorrect_blog_owner'] = 'Ҫ�趨Ϊ���͹���Ա���û�����򲻴��ڡ�';
$messages['error_fetching_blog'] = '��ȡ��������ʱ����';
$messages['error_updating_blog_settings2'] = '���²�������ʱ�����������ݲ����ԡ�';
$messages['add_or_remove'] = '��ӻ�ɾ���û�';

// site locales
$messages['locale'] = '���԰�����';
$messages['locale_encoding'] = '����';
$messages['locale_deleted_ok'] = '���԰� "%s" ɾ���ɹ�';
$messages['error_no_locales_selected'] = 'δѡ��Ҫɾ�������԰�';
$messages['error_deleting_only_locale'] = '���԰�ֻʣ��һ�������ܱ�ɾ��';
$messages['locales_deleted_ok']= '���԰�%sɾ���ɹ�';
$messages['error_deleting_locale'] = 'ɾ�����԰� "%s" ʱ����';
$messages['error_locale_is_default'] = '���԰� "%s" ���²��͵�Ĭ�����԰������ܱ�ɾ��';

// add locale
$messages['error_invalid_locale_file'] = '���԰��ļ���Ч';
$messages['error_no_new_locales_found'] = 'δ�ҵ������԰��ļ�';
$messages['locale_added_ok'] = '���԰� "%s" ��ӳɹ�';
$messages['error_saving_locale'] = '�洢�����԰�ʱ�������������Ƿ������԰��ļ��е�д��Ȩ�ޡ�';
$messages['scan_locales'] = 'ɨ�����԰�';
$messages['add_locale_help'] = '�������ô˱��ϴ�һ���µ����԰���������޷���������ϴ������ֶ��ϴ����԰������������� <b>./locales/</b>��,Ȼ���� "<b>ɨ�����԰�</b>" ��ť�� pLog ��ɨ����ļ��в��Զ�������ҵ������԰��� ';

// site templates
$messages['error_template_is_default'] = 'ģ�� "%s" ���²���Ĭ��ģ�壬���ܱ�ɾ����';

// add template
$messages['global_template_package_help'] = '�������ô˱����ϴ�һ���µ�ģ�尲װ������ģ�彫�ṩ������վ������в���ʹ�á�������޷���������ϴ������ֶ��ϴ�ģ�岢�������������Ĳ���ģ���ļ���<b>%s</b>��,Ȼ���� "<b>ɨ��ģ��</b>" ��ť�� pLog ��ɨ����ļ��в��Զ�������ҵ�����ģ�塣';

// global settings
$messages['site_config_saved_ok'] = 'վ�����ñ���ɹ�';
$messages['error_saving_site_config'] = '����վ������ʱ����';
/// general settings
$messages['help_comments_enabled'] = 'Ĭ�����û�����²��͵����۹���';
$messages['help_beautify_comments_text'] = '��������������������ͼƬ������';
$messages['help_temp_folder'] = 'pLogϵͳִ��ĳЩ����ʱҪ�õ�����ʱ�ļ���·����';
$messages['help_base_url'] = '����վ��Ļ������ӵ�ַ';
$messages['help_subdomains_enabled'] = '���û���ö�������.���˽������ڶ�����������Ϣ����İ����ĵ���';
$messages['help_subdomains_base_url'] = '�����ö��������󣬸û�����ַ������ԭ�еĵ�ַ��ʹ��{blogname}��{username}��ǩ����ò������Ͳ��͹���Ա���û���';
$messages['help_include_blog_id_in_url'] = '����Ŀ�൱��Ҫ��һ������������ʽ����ʱ������ǿ�ƽ��ڲ�һ�����Ӳ�����"blogId"������������ǳ����������Ҫ�޸ĸ������á�';
$messages['help_script_name'] = '�������Ҫ������index.php���޸ĸ���';
$messages['help_show_posts_max'] = '��ҳĬ�Ͽ���ʾ�����������Ŀ';
$messages['help_recent_posts_max'] = '����ҳ�����·����б���Ĭ����ʾ����������.';
$messages['help_save_drafts_via_xmlhttprequest_enabled'] = '������javascript��xmlhttp����ݸ�';
$messages['help_locale_folder'] = '�洢���԰��ļ����ļ���';
$messages['help_default_locale'] = '�½����͵�Ĭ����������';
$messages['help_default_blog_id'] = 'index.phpĬ����ʾ�Ĳ���blogID';
$messages['help_default_time_offset'] = '�½����͵�Ĭ��ʱ��';
$messages['help_html_allowed_tags_in_comments'] = '����������ʹ�õ�HTML��ǩ';
$messages['help_referer_tracker_enabled'] = '�����վ���յ���REQUEST�����к���REFERER��Ϣ���Ƿ񽫻�����REFERER��Ϣ�������ݿ�';
$messages['help_show_more_enabled'] = '�Ƿ����á��鿴ȫ�ġ����ӹ���';
$messages['help_update_article_reads'] = '���Ƿ�������վ���ڽ��ļ�����������ͳ��ÿƪ���µĵ������';
$messages['help_update_cached_article_reads'] = '�Ƿ����¶�ȡʱ���������»���';
$messages['help_xmlrpc_ping_enabled'] = '������������ʱ���Ƿ�Ҫ������վ�㷢��XMLRPCͨ�档';
$messages['help_send_xmlrpc_pings_enabled_by_default'] = '�Ƿ������ڷ�����޸�ʱĬ�Ϸ�������ͨ��';
$messages['help_xmlrpc_ping_hosts'] = '����XMLRPCͨ�����վ�б�ÿ����ַ����һ�У���Ŀ���ޡ�';
$messages['help_trackback_server_enabled'] = '�Ƿ����������վ����������ͨ�棨TrackBack����';
$messages['help_htmlarea_enabled'] = '�Ƿ��������������ã�WYSIWYG�����±༭����';
$messages['help_plugin_manager_enabled'] = '�Ƿ����ò������';
$messages['help_minimum_password_length'] = '������С����';
$messages['help_xhtml_converter_enabled'] = '�Ƿ�HTML����ת����XHTML����';
$messages['help_xhtml_converter_aggressive_mode_enabled'] = '�Ƿ���plog����XHTML���룬���⽫�����ܳ���';
$messages['help_session_save_path'] = 'ʹ��PHP��session_save_path()������������pLog���session���ļ��С���ȷ�ϸ��ļ��б�HTTP���������APACHE��ӵ��дȨ�ޡ������Ҫʹ��PHPԤ���session���·�����趨Ϊ�հ׼��ɡ�';
// summary settings
$messages['help_summary_page_show_max'] = '�ڻ��ܣ�SUMMARY��ҳ����Ҫ��ʾ������Ŀ��';
$messages['help_summary_blogs_per_page'] = '���ܵĲ����б���ÿҳ��ʾ�Ĳ�����';
$messages['help_forbidden_usernames'] = '��ֹע����û����б�';
$messages['help_force_one_blog_per_email_account'] = 'ÿ�������ʼ���ַֻ����ע��һ������';
$messages['help_summary_show_agreement'] = '�Ƿ���ע������ʾЭ���ı����û�ȷ��';
$messages['help_need_email_confirm_registration'] = '��Ҫ�û�ʹ�õ����ʼ�������֤';
$messages['help_summary_disable_registration'] = '�Ƿ�ر��²���ע��';
// templates
$messages['help_template_folder'] = '�洢ģ����ļ���';
$messages['help_default_template'] = '�½����͵�Ĭ��ģ��';
$messages['help_users_can_add_templates'] = '�����û������Լ���ģ��';
$messages['help_template_compile_check'] = '������ø��ģ���ļ����ʱSmarty��������е����󣬿�����߸������ܡ�';
$messages['help_template_cache_enabled'] = '����ģ�建��';
$messages['help_template_cache_lifetime'] = '���汣��ʱ�䣬����Ϊ-1�����ô���������Ϊ0����û��档';
$messages['help_template_http_cache_enabled'] = '����HTTP��������Ļ���֧�֡�������ÿ��Խ�ʡ����';
$messages['help_allow_php_code_in_templates'] = '������Smartyģ���{php}...{/php}����Ƕ��PHP����';
// urls
$messages['help_request_format_mode'] = 'ѡ����Ч���ӵĸ�ʽ.���ʹ���Զ������ӣ���ȷ����������';
$messages['plain'] = '�򵥸�ʽ';
$messages['search_engine_friendly'] = '������������';
$messages['custom_url_format'] = '�Զ�������';
$messages['help_permalink_format'] = 'ʹ���Զ�������ʱ�ľ�̬��ַ��ʽ';
$messages['help_category_link_format'] = 'ʹ���Զ�������ʱ�����·�������Ӹ�ʽ';
$messages['help_blog_link_format'] = 'ʹ���Զ�������ʱ�������ӵĸ�ʽ';
$messages['help_archive_link_format'] = 'ʹ���Զ�������ʱ�ļ��鵵�����Ӹ�ʽ';
$messages['help_user_posts_link_format'] = 'ʹ���Զ�������ʱ�������µ����Ӹ�ʽ';
$messages['help_post_trackbacks_link_format'] = 'ʹ���Զ�������ʱ�������ӵ����Ӹ�ʽ';
$messages['help_template_link_format'] = 'ʹ���Զ�������ʱ�Զ��徲̬ģ��ҳ������Ӹ�ʽ';
$messages['help_album_link_format'] = 'ʹ���Զ�������ʱ��Դ���ĵ����Ӹ�ʽ';
$messages['help_resource_link_format'] = 'ʹ���Զ�������ʱ��Դҳ������Ӹ�ʽ';
$messages['help_resource_preview_link_format'] = 'ʹ���Զ�������ʱ��ԴԤ�������Ӹ�ʽ';
$messages['help_resource_medium_size_preview_link_format'] = 'ʹ���Զ�������ʱ������ԴԤ�������Ӹ�ʽ';
$messages['help_resource_download_link_format'] = 'ʹ���Զ�������ʱ�ļ������Ӹ�ʽ';
// email
$messages['help_check_email_address_validity'] = '���û�����ע���²���վ��ʱ���Ƿ�Ҫ��֤������д�ĵ����ʼ���ַ';
$messages['help_email_service_enabled'] = '���û���÷��͵����ʼ�����';
$messages['help_post_notification_source_address'] = 'ϵͳ֪ͨ�ʼ��еļļ��˵ĵ����ʼ���ַ��';
$messages['help_email_service_type'] = 'ѡ���͵����ʼ��ķ�ʽ';
$messages['help_smtp_host'] = '���ѡ��SMTP���͵����ʼ�����������Ҫ���������ʼ���������';
$messages['help_smtp_port'] = '����SMTP�������Ķ˿�';
$messages['help_smtp_use_authentication'] = '���û����SMTP��������֤';
$messages['help_smtp_username'] = '���SMTP��������Ҫ��֤������д�û��˺š�';
$messages['help_smtp_password'] = '���SMTP��������Ҫ��֤������д�û����롣';
// helpers
$messages['help_path_to_tar'] = 'tar���������ļ���';
$messages['help_path_to_gzip'] = 'gzip���������ļ���';
$messages['help_path_to_bz2'] = 'bzip2���������ļ���';
$messages['help_path_to_unzip'] = 'unzip���������ļ���';
$messages['help_unzip_use_native_version'] = 'ʹ���Դ���php����ѹ��.zip�ļ���';
// uploads
$messages['help_uploads_enabled'] = '���û�����ϴ��ļ����ܡ�������ܻ�Ӱ�쵽�û��ܷ��ϴ��µ�ģ������԰��Լ����ܷ����ִ�ģ��������ļ���';
$messages['help_maximum_file_upload_size'] = '�����û��ϴ��ļ�������ֽ������������ò��ܳ���php�е�����';
$messages['help_upload_forbidden_files'] = '��ֹ�û��ϴ����ļ����͡������ָ�������������ļ����ͣ���������֮���ÿո���롣';
// interfaces
$messages['help_xmlrpc_api_enabled'] = '���� XMLRPC ��������';
$messages['help_rdf_enabled'] = '����Atom��RSS�ۺ�';
$messages['help_default_rss_profile'] = 'Ĭ�ϵ�RSS��Atom��ʽ';
// security
$messages['help_security_pipeline_enabled'] = '�Ƿ����ð�ȫ�Լ�������ز����ע�⣬��Ҳ��ӡ���������²����';
$messages['help_ip_address_filter_enabled'] = '�Ƿ�����ip��ַ����';
$messages['help_content_filter_enabled'] = '���û���ù�����ˣ���������Ŀʱ����Ҫ�򿪰�ȫ���ܡ�';
$messages['help_maximum_comment_size'] = '���۵�����ֽ���';
// bayesian filter
$messages['help_bayesian_filter_enabled'] = '���û���ù���';
$messages['help_bayesian_filter_spam_probability_treshold'] = '�ж�Ϊ�������۵������';
$messages['help_bayesian_filter_nonspam_probability_treshold'] = '�ж�Ϊ�������۵���С����';
$messages['help_bayesian_filter_min_length_token'] = '��Ҫ��ǵ���С����';
$messages['help_bayesian_filter_max_length_token'] = '��Ҫ��ǵ���󳤶�';
$messages['help_bayesian_filter_number_significant_tokens'] = '��Ҫ��ǵ�����';
$messages['help_bayesian_filter_spam_comments_action'] = '���ڱ��Ϊ������������δ���';
$messages['keep_spam_comments'] = '�������ݿ��б��Ϊ����������';
$messages['throw_away_spam_comments'] = 'ֱ��ɾ����������';
// resources
$messages['help_resources_enabled'] = '���û������Դ����';
$messages['help_resources_folder'] = '�洢��Դ�ļ����ļ���';
$messages['help_thumbnail_method'] = '��������ͼ�ķ��������ʹ��PHP��֧��GD��ʽ';
$messages['help_path_to_convert'] = 'convert���������ļ���';
$messages['help_thumbnail_format'] = '����ͼ�洢��ʽ';
$messages['help_thumbnail_height'] = 'С������ͼĬ�ϸ߶�';
$messages['help_thumbnail_width'] = 'С������ͼĬ�Ͽ��';
$messages['help_medium_size_thumbnail_height'] = '��������ͼ��Ĭ�ϸ߶�';
$messages['help_medium_size_thumbnail_width'] = '��������ͼ��Ĭ�Ͽ��';
$messages['help_thumbnails_keep_aspect_ratio'] = '��������ͼʱ����ԭ�еĳ������';
$messages['help_thumbnail_generator_force_use_gd1'] = 'ǿ��ʹ�� GD1-only ����';
$messages['help_thumbnail_generator_user_smoothing_algorithm'] = 'ƽ������ͼ.�ù���ֻ����ʹ��GD����ʱʹ�á�';
$messages['help_resources_quota'] = '���͵�ȫ����Դ���';
$messages['help_resource_server_http_cache_enabled'] = '���ö�"If-Modified-Since" �����HTTP���������֧��.������ǿ����洢��';
$messages['help_resource_server_http_cache_lifetime'] = '�ͻ���ʹ����Դ�����ʱ��';
$messages['same_as_image'] = '��ԭʼͼ����ͬ';
// search
$messages['help_search_engine_enabled'] = '�������ֹ��������';
$messages['help_search_in_custom_fields'] = '�����Զ�������';
$messages['help_search_in_comments'] = '��������';

// cleanup
$messages['purge'] = '���';
$messages['cleanup_spam'] = '��������ظ�';
$messages['cleanup_spam_help'] = '������б�ʹ���߱�ʾΪ�����Ļظ���һ��ɾ���޷��ָ���';
$messages['spam_comments_purged_ok'] = '�����ظ�����ɹ�';
$messages['cleanup_posts'] = '�������';
$messages['cleanup_posts_help'] = '������б�ʹ���߱�ʾΪɾ�������¡� һ��ɾ���޷��ָ���';
$messages['posts_purged_ok'] = '��������ɹ�';

/// summary ///
// front page
$messages['summary'] = '����';
$messages['register'] = 'ע��';
$messages['summary_welcome'] = '��ӭ';
$messages['summary_most_active_blogs'] = '���Ծ�Ĳ���';
$messages['summary_most_commented_articles'] = '������������';
$messages['summary_most_read_articles'] = '�Ķ���������';
$messages['password_forgotten'] = '�������룿';
$messages['summary_newest_blogs'] = '���¿�ͨ�Ĳ���';
$messages['summary_latest_posts'] = '������������';
$messages['summary_search_blogs'] = '��������';

// blog list
$messages['updated'] = '����';
$messages['total_reads'] = '����ܴ���';

// blog profile
$messages['blog'] = '����';
$messages['latest_posts'] = '������������';

// registration
$messages['register_step0_title'] = '���ܷ���Э��';
$messages['agreement'] = '�������';
$messages['decline'] = '�ܾ�';
$messages['accept'] = 'ͬ��';
$messages['read_service_agreement'] = '���Ķ�����Э�飬�����ͬ��Ļ������ͬ��';
$messages['register_step1_title'] = '�����û� [1/4]';
$messages['register_step1_help'] = '��������Ҫ����һ�����û�����ò��͡�';
$messages['register_next'] = '��һ��';
$messages['register_back'] = '��һ��';
$messages['register_step2_title'] = '�������� [2/4]';
$messages['register_blog_name_help'] = '��������';
$messages['register_step3_title'] = 'ѡ��ģ�� [3/4]';
$messages['step1'] = '��һ��';
$messages['step2'] = '�ڶ���';
$messages['step3'] = '������';
$messages['register_step3_help'] = '��ѡ�����Ĳ��͵�Ĭ��ģ�塣';
$messages['error_must_choose_template'] = '��ѡ��һ��ģ��';
$messages['select_template'] = 'ѡ��ģ��';
$messages['register_step5_title'] = 'ף������ [4/4]';
$messages['finish'] = '���';
$messages['register_need_confirmation'] = '����ȷ����Ϣ�ĵ����ʼ��Ѿ����͸���������������е������Լ������Ĳ��͡�';
$messages['register_step5_help'] = 'ף�����������û��Լ������Ѿ���ͨ��';
$messages['register_blog_link'] = '�������������Ĳ��ͣ����ھͽ���ɣ� <a href="%2$s">%1$s</a>';
$messages['register_blog_admin_link'] = '����������Ϸ������£����� <a href="admin.php">�������</a>�����̨���в�����';
$messages['register_error'] = '�����г���';
$messages['error_registration_disabled'] = '�Բ��𣬱�վ����ͣ���û�ע�ᣬ���Ժ����Ի���ϵ����Ա';
// registration article topic and text
$messages['register_default_article_topic'] = 'ף����';
$messages['register_default_article_text'] = '������Ķ�����ƪ���£������ζ����ע��Ĳ����Ѿ�����ɹ���';
$messages['register_default_category'] = 'һ�����';
// confirmation email
$messages['register_confirmation_email_text'] = '����������������������Ĳ���:

%s

���ھͽ��벩������ɣ�ף��������֣�';
$messages['error_invalid_activation_code'] = '�Բ�����֤����Ч';
$messages['blog_activated_ok'] = 'ף��������ע������û��Ͳ����Ѿ��ɹ���ͨ��';
// forgot your password?
$messages['reset_password'] = '��������';
$messages['reset_password_username_help'] = '������������û���';
$messages['reset_password_email_help'] = '������ʹ�øõ�������ע��';
$messages['reset_password_help'] = '�������룬����������������û����Լ�ע��ʱ�ĵ����ʼ���ַ';
$messages['error_resetting_password'] = '��������ʱ�����������ݲ����ԡ�';
$messages['reset_password_error_incorrect_email_address'] = '���������ַ����ȷ�������û�ʹ�ô��ʼ�ע��';
$messages['password_reset_message_sent_ok'] = '����ע������ʼ���������';
$messages['error_incorrect_request'] = '�����еĲ�������ȷ';
$messages['change_password'] = '����������';
$messages['change_password_help'] = '�����벢ȷ��������';
$messages['new_password'] = '������';
$messages['new_password_help'] = '����������';
$messages['password_updated_ok'] = '���������޸ĳɹ�';

// Suggested by BCSE, some useful messages that not available in official locale
$messages['upgrade_information'] = '����ʹ�õ��������������ҳ��Ʊ�׼����˱���ҳ���Դ�����ģʽ��ʾ����������ѵ��Ű淽ʽ�����վ���뿼��<a href="http://www.webstandards.org/upgrade/" title="The Web Standards Project\'s Browser Upgrade initiative">����</a>�����������';
$messages['jump_to_navigation'] = '�ƶ�����������';
$messages['comment_email_never_display'] = 'ϵͳ���Զ�Ϊ���趨���У��Ҳ�����ʾ�����µ��ʼ���ַ��';
$messages['comment_html_allowed'] = '��ʹ�õ� <acronym title="Hypertext Markup Language">HTML</acronym> ��ǩ���£�&lt;<acronym title="��;����������">a</acronym> href=&quot;&quot; title=&quot;&quot; rel=&quot;&quot;&gt; &lt;<acronym title="��;�������³�">acronym</acronym> title=&quot;&quot;&gt; &lt;<acronym title="��;����������">blockquote</acronym> cite=&quot;&quot;&gt; &lt;<acronym title="��;��ɾ����">del</acronym>&gt; &lt;<acronym title="��;��б��">em</acronym>&gt; &lt;<acronym title="��;������">ins</acronym>&gt; &lt;<acronym title="��;������">strong</acronym>&gt;';
$messages['trackback_uri'] = '��ƪ���µ��������ӵ�ַ��';
$messages['previous_post'] = '��һƪ';
$messages['next_post'] = '��һƪ';
$messages['comment_default_title'] = '(�ޱ���)';
$messages['guestbook'] = '���԰�';
$messages['trackbacks'] = '����';
$messages['menu'] = '���žۺ�';
$messages['albums'] = '��Դ����';
$messages['admin'] = '�������̨';
?>