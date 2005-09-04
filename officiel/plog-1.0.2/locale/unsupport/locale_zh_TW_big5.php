<?php
// set this to the encoding that should be used to display the pages correctly
$messages['encoding'] = 'big5';
$messages['locale_description'] = 'Traditional Chinese translation (BIG5)';
// locale format, see Locale::formatDate for more information
$messages['date_format'] = '%d/%m/%Y %H:%M';

// days of the week
$messages['days'] = Array( '�P����', '�P���@', '�P���G', '�P���T', '�P���|', '�P����', '�P����' );
// -- compatibility, do not touch -- //
$messages['Monday'] = $messages['days'][1];
$messages['Tuesday'] = $messages['days'][2];
$messages['Wednesday'] = $messages['days'][3];
$messages['Thursday'] = $messages['days'][4];
$messages['Friday'] = $messages['days'][5];
$messages['Saturday'] = $messages['days'][6];
$messages['Sunday'] = $messages['days'][0];

// abbreviations
$messages['daysshort'] = Array( '��', '�@', '�G', '�T', '�|', '��', '��' );
// -- compatibility, do not touch -- //
$messages['Mo'] = $messages['daysshort'][1];
$messages['Tu'] = $messages['daysshort'][2];
$messages['We'] = $messages['daysshort'][3];
$messages['Th'] = $messages['daysshort'][4];
$messages['Fr'] = $messages['daysshort'][5];
$messages['Sa'] = $messages['daysshort'][6];
$messages['Su'] = $messages['daysshort'][0];

// months of the year
$messages['months'] = Array( '����', '�G��', '�T��', '�|��', '����', '����', '�C��', '�K��', '�E��', '�Q��', '�Q�@��', '�Q�G��');
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
$messages['message'] = '�T��';
$messages['error'] = '���~';
$messages['date'] = '���';

// miscellaneous texts
$messages['of'] = 'of';
$messages['recently'] = '����峹';
$messages['comments'] = '�j�T';
$messages['comment on this'] = '�j�T';
$messages['my_links'] = '�ڪ��s��';
$messages['archives'] = '�峹�J��';
$messages['search'] = '�����j�M';
$messages['calendar'] = '���';
$messages['search_s'] = '�j�M';
$messages['search_this_blog'] = '�j�M���x���e:';
$messages['about_myself'] = '�ۧڤ���';
$messages['permalink_title'] = '�峹�J���R�A�s�����}';
$messages['permalink'] = '�R�A�s�����}';
$messages['posted_by'] = '�@��';
$messages['reply'] = '�^��';

// add comment form
$messages['add_comment'] = '�o��j�T';
$messages['comment_topic'] = '���D';
$messages['comment_text'] = '���e';
$messages['comment_username'] = '�ʺ�';
$messages['comment_email'] = '�q�l�l��';
$messages['comment_url'] = '�ӤH����';
$messages['comment_send'] = '�o��';
$messages['comment_added'] = '�z���j�T�w�g���Q�o��I';
$messages['comment_add_error'] = '�o��j�T�ɵo�Ϳ��~';
$messages['article_does_not_exist'] = '���峹���s�b';
$messages['no_posts_found'] = '�䤣��峹';
$messages['user_has_no_posts_yet'] = '�ӨϥΪ��٨S���o��L����峹';
$messages['back'] = '�^��W�@��';
$messages['post'] = '�峹';
$messages['trackbacks_for_article'] = '�ޥΥ��媺�峹���D�G';
$messages['trackback_excerpt'] = '�K�n';
$messages['trackback_weblog'] = '���x';
$messages['search_results'] = '�j�M���G';
$messages['search_matching_results'] = '�H�U�峹�ŦX�z���j�M����r: ';
$messages['search_no_matching_posts'] = '�䤣��ŦX���峹';
$messages['read_more'] = '(�\Ū����)';
$messages['syndicate'] = '�s�D�洫';
$messages['main'] = '�D����';
$messages['about'] = '����';
$messages['download'] = '�U��';

////// error messages /////
$messages['error_fetching_article'] = '�䤣��z�ҫ��w���峹�C';
$messages['error_fetching_articles'] = '�䤣��z�ҫ��w���峹�C';
$messages['error_trackback_no_trackback'] = '�|�����H�V����o�e�ޥγq�i';
$messages['error_incorrect_article_id'] = '�峹ID�����T�C';
$messages['error_incorrect_blog_id'] = '���x���xID�����T�C';
$messages['error_comment_without_text'] = '�L�j�T�d�����e�C';
$messages['error_comment_without_name'] = '�z�����n��g�m�W�μʺ١C';
$messages['error_adding_comment'] = '�b�N�d���s�W�ܸ�Ʈw�ɵo�Ͱ��D�C';
$messages['error_incorrect_parameter'] = '�ѼƤ����T�C';
$messages['error_parameter_missing'] = '�z�ֶǻ��F�@���ѼơC';
$messages['error_comments_not_enabled'] = '�o�Ӻ��x���x�����F�j�T�\��';
$messages['error_incorrect_search_terms'] = '�j�M����r�����T';
$messages['error_no_search_results'] = '�䤣��P����r�۲Ū����ءC';
$messages['error_no_albums_defined'] = '�o�Ӻ��x���x�S��������Ƨ��C';

/////////////////                                          //////////////////
///////////////// STRINGS FOR THE ADMINISTRATION INTERFACE //////////////////
/////////////////                                          //////////////////

// login page
$messages['login'] = '�n�J';
$messages['welcome_message'] = '�w��Ө� pLog';
$messages['error_incorrect_username_or_password'] = '�ܩ�p�A�z��J���b���αK�X���~�C';
$messages['error_dont_belong_to_any_blog'] = '�ܩ�p�A�z�S���ϥΨt�Τ�����@�Ӻ��x���x���v���C';
$messages['logout_message'] = '�z�w�g���Q�n�X�t�ΡC';
$messages['logout_message_2'] = '�Ы� <a href="%1$s">�o��</a> �s���� %2$s</a>.';
$messages['error_access_forbidden'] = '�z�ثe�S���v���i�J�޲z�����C�Ш�o�̵n�J�C';
$messages['username'] = '�ϥΪ̦W��';
$messages['password'] = '�ϥΪ̱K�X';

// dashboard
$messages['dashboard'] = '�޲z����';
$messages['recent_articles'] = '�̪�o��峹';
$messages['recent_comments'] = '�̪�o��j�T';
$messages['recent_trackbacks'] = '�̪�ޥΦC��';
$messages['blog_statistics'] = '���x�έp';
$messages['total_posts'] = '�峹�`��';
$messages['total_comments'] = '�j�T�`��';
$messages['total_trackbacks'] = '�ޥ��`��';
$messages['total_viewed'] = '�峹�\Ū�`��';
$messages['in'] = '��';

// menu options
$messages['newPost'] = '�o��s�峹';
$messages['Manage'] = '���e�޲z';
$messages['managePosts'] = '�峹�޲z';
$messages['editPosts'] = '�峹�C��';
$messages['editArticleCategories'] = '�s��峹����';
$messages['newArticleCategory'] = '�s�W�峹����';
$messages['manageLinks'] = '�����s���޲z';
$messages['editLinks'] = '�����s���C��';
$messages['newLink'] = '�s�W�����s��';
$messages['editLink'] = '�s������s��';
$messages['editLinkCategories'] = '�s������s������';
$messages['newLinkCategory'] = '�s�W�s������';
$messages['editLinkCategory'] = '�s������s������';
$messages['manageCustomFields'] = '�޲z�ۭq���';
$messages['blogCustomFields'] = '�ۭq���C��';
$messages['newCustomField'] = '�s�W�ۭq���';
$messages['resourceCenter'] = '�ɮפ���';
$messages['resources'] = '�ɮצC��';
$messages['newResourceAlbum'] = '�s�W��Ƨ�';
$messages['newResource'] = '�s�W�ɮ�';
$messages['controlCenter'] = '�ӤH���x�]�w';
$messages['manageSettings'] = '�򥻳]�w';
$messages['blogSettings'] = '���x�]�w';
$messages['userSettings'] = '�ϥΪ̳]�w';
$messages['pluginCenter'] = '�~������';
$messages['Stats'] = '�έp���';
$messages['manageBlogUsers'] = '�޲z���x�ϥΪ�';
$messages['newBlogUser'] = '�s�W���x�ϥΪ�';
$messages['showBlogUsers'] = '���x�ϥΪ̦C��';
$messages['manageBlogTemplates'] = '�޲z���x�Ҫ�';
$messages['newBlogTemplate'] = '�s�W���x�Ҫ�';
$messages['blogTemplates'] = '���x�Ҫ��C��';
$messages['adminSettings'] = '�������x�ޱ�';
$messages['Users'] = '�ϥΪ�';
$messages['createUser'] = '�s�W�ϥΪ�';
$messages['editSiteUsers'] = '�޲z�ϥΪ�';
$messages['Blogs'] = '�޲z���x';
$messages['createBlog'] = '�إߺ��x';
$messages['editSiteBlogs'] = '���x���x�޲z';
$messages['Locales'] = '�y�t�޲z';
$messages['newLocale'] = '�s�W�y�t';
$messages['siteLocales'] = '�y�t�ɮצC��';
$messages['Templates'] = '�Ҫ��޲z';
$messages['newTemplate'] = '�s�W�Ҫ�';
$messages['siteTemplates'] = '�Ҫ��޲z';
$messages['GlobalSettings'] = '����]�w';
$messages['editSiteSettings'] = '����]�w';
$messages['summarySettings'] = ' �K�n�]�w';
$messages['templateSettings'] = '�Ҫ��]�w';
$messages['urlSettings'] = '���}�]�w';
$messages['emailSettings'] = '�q�l�l��]�w';
$messages['uploadSettings'] = '�W�ǳ]�w';
$messages['helpersSettings'] = '�����u��]�w';
$messages['interfacesSettings'] = '�~�������]�w';
$messages['securitySettings'] = '�t�Φw���]�w';
$messages['bayesianSettings'] = '����L�o�]�w';
$messages['resourcesSettings'] = '�ɮפ��߳]�w';
$messages['searchSettings'] = '�j�M�]�w';
$messages['cleanUpSection'] = '�M�z�U���M��';
$messages['cleanUp'] = '�M�z�U��';
$messages['editResourceAlbum'] = '�s���ɮ׸�Ƨ�';
$messages['resourceInfo'] = '�ɮ׸�T';
$messages['editBlog'] = '���x�޲z';
$messages['Logout'] = '�n�X';

// new post
$messages['topic'] = '���D';
$messages['topic_help'] = '�峹���D';
$messages['text'] = '����';
$messages['text_help'] = '�o���������e�|�b���x�����X�{�C';
$messages['extended_text'] = '��������';
$messages['extended_text_help'] = '�z�b����J����r�u�|�b��g�J�㪬�A�U��ܡA���D�z�b�u�]�w�v�������ק�F�]�w�C';
$messages['post_slug'] = '�u���D ';
$messages['post_slug_help'] = '�u���D�N�|�Ψӫإ�²�䪺�R�A�s�����}';
$messages['date'] = '���';
$messages['post_date_help'] = '�峹�o����';
$messages['status'] = '���A';
$messages['post_status_help'] = '����@�Ӫ��A';
$messages['post_status_published'] = '�w�Z';
$messages['post_status_draft'] = '��Z';
$messages['post_status_deleted'] = '�w�R��';
$messages['categories'] = '�峹����';
$messages['post_categories_help'] = '����@�өΤ@�ӥH�W������';
$messages['post_comments_enabled_help'] = '�ҥΰj�T�d���\��';
$messages['send_notification_help'] = '�p�G���H�糧��o��j�T�A�K�V�ڵo�e�q�l�l��q��';
$messages['send_trackback_pings_help'] = '�o�e�ޥγq�i';
$messages['send_xmlrpc_pings_help'] = '�e�X XMLRPC �q�i';
$messages['save_draft_and_continue'] = '�x�s��Z';
$messages['preview'] = '�w��';
$messages['add_post'] = '�o��!';
$messages['error_saving_draft'] = '�x�s��Z�o�Ϳ��~�I';
$messages['draft_saved_ok'] = '��Z�w���Q�x�s';
$messages['error_sending_request'] = '�ǰe�n�D�ɵo�Ϳ��~';
$messages['error_no_category_selected'] = '�A�S����ܥ������';
$messages['error_missing_post_topic'] = '�п�J�峹���D�I';
$messages['error_missing_post_text'] = '�п�J�峹����I';
$messages['error_adding_post'] = '�o��峹�o�Ϳ��~�I';
$messages['post_added_not_published'] = '�峹�w���Q�s�W�A���|�������o��C';
$messages['post_added_ok'] = '�峹�w���Q�s�W';
$messages['send_notifications_ok'] = '���s���j�T�άO�ޥήɡA�K�V�ڵo�e�q�l�l��q��';

// send trackbacks
$messages['error_sending_trackbacks'] = '�o�e�U�C�ޥγq���ɲ��Ϳ��~�C';
$messages['send_trackbacks_help'] = '�ФĿ�z�ҭn�o�e�ޥγq�i�����}�C(�нT�w�Ӻ����䴩�ޥγq�i���\��)';
$messages['send_trackbacks'] = '�o�e�ޥγq��';
$messages['ping_selected'] = '�V�Ŀ諸���}�o�e�ޥγq��';
$messages['trackbacks_sent_ok'] = '�ޥγq���w�g���\�o�e��Ŀ諸���}�C';

// posts page
$messages['show_by'] = '��s�C��';
$messages['category'] = '����';
$messages['author'] = '�@��';
$messages['post_status_all'] = '����';
$messages['author_all'] = '�����@��';
$messages['search_terms'] = '�j�M����r';
$messages['show'] = '��s';
$messages['delete'] = '�R��';
$messages['actions'] = '�ʧ@';
$messages['all'] = '����';
$messages['category_all'] = '��������';
$messages['error_incorrect_article_id'] = '�峹ID�����T�C';
$messages['error_deleting_article'] = '�b�R���峹"%s"�ɡA�o�Ϳ��~�C';
$messages['article_deleted_ok'] = '�峹�u%s�v �w���Q�R���C';
$messages['articles_deleted_ok'] = '�峹�u%s�v �w���Q�R���C';
$messages['error_deleting_article2'] = '�R���峹�ɵo�Ϳ��~ (id = %s) ';

// edit post page
$messages['update'] = '��s';
$messages['editPost'] = '�s��峹';
$messages['error_fetching_post'] = 'Ū���峹��Ʈɵo�Ϳ��~';
$messages['post_updated_ok'] = '�峹[%s]�w���\��s�C';
$messages['error_updating_post'] = '��s�峹�ɵo�Ϳ��~';
$messages['notification_added'] = '���s���j�T�άO�ޥήɡA�K�V�ڵo�e�q�l�l��q��';
$messages['notification_removed'] = '���s���j�T�άO�ޥήɡA���n�V�ڵo�e�q�l�l��q��';

// post comments
$messages['url'] = '���}';
$messages['comment_status_all'] = '�����j�T';
$messages['comment_status_spam'] = '�U���j�T';
$messages['comment_status_nonspam'] = '���`�j�T';
$messages['error_fetching_comments'] = 'Ū���峹�j�T��ƮɡA�o�Ϳ��~�C';
$messages['error_deleting_comments'] = '�b�R���j�T�ɵo�Ϳ��~�αz�S���Ŀ����n�R�����j�T�C';
$messages['comment_deleted_ok'] = '�u%s�v�o�g�峹���j�T�w���Q�R���C';
$messages['comments_deleted_ok'] = '�u%s�v�o�g�峹���j�T�w���Q�R���C';
$messages['error_deleting_comment'] = '�b�R���j�T�u%s�v�ɵo�Ϳ��~�C';
$messages['error_deleting_comment2'] = '�R���j�T�ɵo�Ϳ��~ (id = %s)';
$messages['editComments'] = '�s��j�T';
$messages['mark_as_spam'] = '�Хܬ��U���j�T';
$messages['mark_as_no_spam'] = '�Хܬ����`�j�T';
$messages['error_incorrect_comment_id'] = '�d���j�TID�����T�C';
$messages['error_marking_comment_as_spam'] = '�b�N���g�j�T�d���Хܬ��U���d���ɵo�Ϳ��~�C';
$messages['comment_marked_as_spam_ok'] = '�z�w�g���Q�N���g�j�T�d���Хܬ��U���d���C';
$messages['error_marking_comment_as_nonspam'] = '�b�N���g�j�T�d���Хܬ����`�d���ɵo�Ϳ��~�C';
$messages['comment_marked_as_nonspam_ok'] = '�z�w�g���Q�N���g�j�T�d���Хܬ����`�d���C';

// post trackbacks
$messages['blog'] = '���x';
$messages['excerpt'] = '�K�n';
$messages['error_fetching_trackbacks'] = 'Ū���ޥθ�ƮɡA�o�Ϳ��~�C';
$messages['error_deleting_trackbacks'] = '�b�R���ޥήɵo�Ϳ��~�άO�A�S���Ŀ����n�R�����ޥΡC';
$messages['error_deleting_trackback'] = '�b�R���ޥΡu%s�v�ɵo�Ϳ��~';
$messages['error_deleting_trackback2'] = '�R���ޥήɵo�Ϳ��~ (id = %s)';
$messages['trackback_deleted_ok'] = '�u%s�v�o�g�ޥΤw���Q�R���C';
$messages['trackbacks_deleted_ok'] = '�u%s�v�o�g�ޥΤw���Q�R���C';
$messages['editTrackbacks'] = '�s��ޥ�';

// post statistics
$messages['referrer'] = '�f�V�s��';
$messages['hits'] = '�I����';
$messages['error_no_items_selected'] = '�A�S���Ŀ����n�R��������';
$messages['error_deleting_referrer'] = '�b�R���f�V�s���u%s�v�ɵo�Ϳ��~';
$messages['error_deleting_referrer2'] = '�R���f�V�s���ɵo�Ϳ��~ (id = %s)';
$messages['referrer_deleted_ok'] = '�u%s�v�o�g�f�V�s���w���Q�R���C';
$messages['referrers_deleted_ok'] = '�u%s�v�o�g�f�V�s���w���Q�R���C';

// categories
$messages['posts'] = '�峹�C��';
$messages['show_in_main_page'] = '�b�������';
$messages['error_incorrect_category_id'] = '�峹����ID���~�ΨS��������󶵥�';
$messages['error_category_has_articles'] = '�L�k�R���u%s�v�o�Ӥ����A�]���Ӥ����U�٦��峹�C�Х��ק�峹������A�A���դ@���C';
$messages['category_deleted_ok'] = '�u%s�v�o�Ӥ����w���Q�R���C';
$messages['categories_deleted_ok'] = '�u%s�v�o�Ӥ����w���Q�R���C';
$messages['error_deleting_category'] = '�b�R�������u%s�v�ɵo�Ϳ��~';
$messages['error_deleting_category2'] = '�R�������ɵo�Ϳ��~ (id = %s)';
$messages['yes'] = '�O';
$messages['no'] = '�_';

// new category
$messages['name'] = '�W��';
$messages['category_name_help'] = '�п�J�����W��';
$messages['description'] = '�����y�z';
$messages['category_description_help'] = '�п�J�ԲӪ������y�z';
$messages['show_in_main_page_help'] = '����o�ӿﶵ�A�h�b�o�Ӥ����U���峹�|�b������ܡC�_�h�u�����s���o�Ӥ����ɤ~�|�ݨ�峹�C';
$messages['error_empty_name'] = '�A������J�����W��';
$messages['error_empty_description'] = '�A������J�����y�z';
$messages['error_adding_article_category'] = '�b�s�W�����ɵo�Ϳ��~�C���ˬd��J����ơA�A���դ@���C';
$messages['category_added_ok'] = '�����W�� �u%s�v�w�g���Q�s�W';
$messages['add'] = '�s�W';
$messages['reset'] = '���s�]�m';

// update category
$messages['error_updating_article_category'] = '��s�峹�����ɵo�Ϳ��~�C';
$messages['error_fetching_category'] = 'Ū��������Ʈɵo�Ϳ��~�C';
$messages['article_category_updated_ok'] = '���� �u%s�v �w���Q��s�C';

// links
$messages['feed'] = 'Feed';
$messages['error_no_links_selected'] = '�����s��ID���~�αz�S����ܥ�������s���A�L�k�R���C';
$messages['error_incorrect_link_id'] = '�����s��ID�����T';
$messages['error_removing_link'] = '�b�R�������s���u%s�v�ɵo�Ϳ��~�C';
$messages['error_removing_link2'] = '�b�R�������s���ɵo�Ϳ��~�Aid = %d';
$messages['link_deleted_ok'] = '�����s���u%s�v�w���Q�R���C';
$messages['links_deleted_ok'] = '�����s���u%s�v�w���Q�R���C';

// new link
$messages['link_name_help'] = '�п�J�s���W�١C';
$messages['link_url_help'] = '�s�����}';
$messages['link_description_help'] = '²�u�y�z';
$messages['link_feed_help'] = '�A�]�i�H���ѥ��� RSS �� Atom feeds ���s���C';
$messages['link_category_help'] = '����@�Ӻ����s������';
$messages['error_adding_link'] = '�s�W�����s���ɵo�Ϳ��~�C���ˬd��J����ơA�A���դ@���C';
$messages['error_invalid_url'] = '���}�����T';
$messages['link_added_ok'] = '�����s���u%s�v�w���Q�s�W';

// update link
$messages['error_updating_link'] = '��s�����s���ɵo�Ϳ��~�C���ˬd��J����ơA�A���դ@���C';
$messages['error_fetching_link'] = 'Ū�������s����Ʈɵo�Ϳ��~�C';
$messages['link_updated_ok'] = '�����s���u%s�v�w���Q��s';

// link categories
$messages['links'] = '�����s��';
$messages['error_invalid_link_category_id'] = '�����s������ID�����T�ΨS����ܳs�������A�L�k�R���C';
$messages['error_links_in_link_category'] = '�L�k�R���u%s�v�o�Ӻ����s�������A�]���Ӥ����U�٦��s���C�Х��ק�����s����A�A���դ@���C';
$messages['error_removing_link_category'] = '�b�R�������s�������u%s�v�ɵo�Ϳ��~�C';
$messages['link_category_deleted_ok'] = '�����s�������u%s�v�w���Q�R���C';
$messages['link_categories_deleted_ok'] = '�����s�������u%s�v�w���Q�R���C';
$messages['error_removing_link_category2'] = '�R�������s�������ɵo�Ϳ��~ (id = %s)';

// new link category
$messages['link_category_name_help'] = '�����s�������W��';
$messages['error_adding_link_category'] = '�s�W�����s�������ɵo�Ϳ��~�C';
$messages['link_category_added_ok'] = '�����s�������u%s�v�w���Q�s�W';

// edit link category
$messages['error_updating_link_category'] = '��s�����s�������ɵo�Ϳ��~�C���ˬd��J��ƫ�A�A�դ@���C';
$messages['link_category_updated_ok'] = '�����s�������u%s�v�w���Q��s';
$messages['error_fetching_link_category'] = 'Ū�������s��������Ʈɵo�Ϳ��~�C';

// custom fields
$messages['type'] = '����';
$messages['hidden'] = '����';
$messages['fields_deleted_ok'] = '�u%s�v �ۭq���w���Q�R��';
$messages['field_deleted_ok'] = '�u%s�v �ۭq���w���Q�R��';
$messages['error_deleting_field'] = '�b�R���ۭq���u%s�v�ɵo�Ϳ��~�C';
$messages['error_deleting_field2'] = '�R���ۭq���ɵo�Ϳ��~ (id = %s)';
$messages['error_incorrect_field_id'] = '�ۭq���ID�����T';

// new custom field
$messages['field_name_help'] = '�b�o��峹�ɡA�Ψ���ܦۭq��쪺�W��';
$messages['field_description_help'] = '�ۭq��쪺²�u�y�z';
$messages['field_type_help'] = '��ܤ@�ӦX�A���������';
$messages['field_hidden_help'] = '�p�G�Ŀ����áA����b�s�W�έק�峹�ɫK���|�X�{�Ӧۭq���C�o�ӥ\��D�n���ѵ��~���{���M�ΡC';
$messages['error_adding_custom_field'] = '�s�W�ۭq���ɵo�Ϳ��~�C���ˬd��J��ƫ�A�A�դ@���C';
$messages['custom_field_added_ok'] = '�ۭq���u%s�v�w���Q��s';
$messages['text_field'] = '��r���(Text field)';
$messages['text_area'] = '��r�϶�(Text box)';
$messages['checkbox'] = '�֨����(Checkbox)';
$messages['date_field'] = '������(Date chooser)';

// edit custom field
$messages['error_fetching_custom_field'] = 'Ū���ۭq����Ʈɵo�Ϳ��~�C';
$messages['error_updating_custom_field'] = '��s�ۭq���ɵo�Ϳ��~�C���ˬd��J��ƫ�A�A�դ@���C';
$messages['custom_field_updated_ok'] = '�ۭq���u%s�v�w���Q��s';

// resources
$messages['root_album'] = '�D��Ƨ�';
$messages['num_resources'] = '�ɮ׼�';
$messages['total_size'] = '�ɮפj�p';
$messages['album'] = '��Ƨ�';
$messages['error_incorrect_album_id'] = '��Ƨ�ID�����T';
$messages['error_base_storage_folder_missing_or_unreadable'] = 'pLog�L�k�إ��ɮצs�ɩҥ��ݪ���Ƨ��C ��]�i��O�]��PHP�H�w���Ҧ��b����άO�A�S���������v���W���ɮסC �A�i�H�յۤ�ʫإߤU�C��Ƨ�: <br/><br/>%s<br/><br/>�p�G�o�Ǹ�Ƨ��w�g�s�b�A�нT�w�A�i�H�ϥ��s�����Ӷi��Ū�g�C';
$messages['items_deleted_ok'] = '�u%s�v�w���Q�R��';
$messages['error_album_has_children'] = '�u%s�v��Ƨ��̭��٦��ɮשΤl��Ƨ��C�бN�ɮשθ�Ƨ�������b���դ@���C';
$messages['item_deleted_ok'] = '�u%s�v�w���Q�R��';
$messages['error_deleting_album'] = '�b�R����Ƨ��u%s�v�ɵo�Ϳ��~�C';
$messages['error_deleting_album2'] = '�R����Ƨ��ɵo�Ϳ��~ (id = %s)';
$messages['error_deleting_resource'] = '�b�R���ɮסu%s�v�ɵo�Ϳ��~�C';
$messages['error_deleting_resource2'] = '�R���ɮ׮ɵo�Ϳ��~ (id = %s)';
$messages['error_no_resources_selected'] = '�S����ܭn�R�������ءC';
$messages['resource_deleted_ok'] = '�ɮסG�u%s�v �w���Q�R��';
$messages['album_deleted_ok'] = '��Ƨ��G�u%s�v �w���Q�R��';
$messages['add_resource'] = '�s�W�ɮ� (���)';
$messages['add_resource_preview'] = '�s�W�ɮ׹w�� (�p��)';
$messages['add_resource_medium'] = '�s�W�ɮ׹w�� (����)';
$messages['add_album'] = '�s�W��Ƨ�';

// new album
$messages['album_name_help'] = '��Ƨ�²�u�W��';
$messages['parent'] = '�W�h�ؿ�';
$messages['no_parent'] = '���ݥؿ�';
$messages['parent_album_help'] = '�ϥγo�ӿﶵ�Ӧw�Ƥl��Ƨ��A�P�����A���ɮש�m�󦳲�´�C';
$messages['album_description_help'] = '���Ƨ����e���ԲӪ��y�z�����C';
$messages['error_adding_album'] = '�s�W��Ƨ��ɵo�Ϳ��~�C���ˬd��J��ƫ�A�A�դ@���C';
$messages['album_added_ok'] = '��Ƨ��G�u%s�v �w���Q�s�W�C';

// edit album
$messages['error_incorrect_album_id'] = '��Ƨ�ID�����T�C';
$messages['error_fetching_album'] = 'Ū����Ƨ���Ʈɵo�Ϳ��~�C';
$messages['error_updating_album'] = '��s��Ƨ��ɵo�Ϳ��~�C���ˬd��J��ƫ�A�A�դ@���C';
$messages['album_updated_ok'] = '��Ƨ��u%s�v�w���Q��s';
$messages['show_album_help'] = '�����Ŀ�A�o�Ӹ�Ƨ��N���|�X�{�b���x��Ƨ��C���C';

// new resource
$messages['file'] = '�ɮ�';
$messages['resource_file_help'] = '�U�����ɮױN�|�s�W����x���ɮפ��ߡC�p�G�A�n�P�ɤW�Ǧh���ɮסA�ШϥΤU��u�s�W�W�����v���s���ӷs�W���C';
$messages['add_field'] = '�s�W�W�����';
$messages['resource_description_help'] = '����o���ɮפ��e���ԲӴy�z�C';
$messages['resource_album_help'] = '��ܧA�Q�N�ɮפW�Ǩ쨺�Ӹ�Ƨ��C';
$messages['error_no_resource_uploaded'] = '�A�å���ܥ���n�W�Ǫ��ɮסC';
$messages['resource_added_ok'] = '�ɮסG�u%s�v�w���Q�s�W�C';
$messages['error_resource_forbidden_extension'] = '�L�k�s�W�ɮסA�]���ΤF�t�Τ����\�����ɦW�C';
$messages['error_resource_too_big'] = '�L�k�s�W�ɮסA�]���ɮפӤj�F�C';
$messages['error_uploads_disabled'] = '�L�k�s�W�ɮסA�]�����A���޲z�������F�o���\��C';
$messages['error_quota_exceeded'] = '�L�k�s�W�ɮסA�]���w�g�W�L�e�\���ɮ׮e�q���סC';
$messages['error_adding_resource'] = '�b�s�W�ɮ׮ɵo�Ϳ��~�C';

// edit resource
$messages['editResource'] = '�s���ɮ�';
$messages['resource_information_help'] = '�U���O�@�ǻP�o���ɮצ�������T';
$messages['information'] = '�ɮ׸�T';
$messages['size'] = '�ɮפj�p';
$messages['format'] = '�ɮ׮榡';
$messages['dimensions'] = '����';
$messages['bits_per_sample'] = '�˥��줸�v';
$messages['sample_rate'] = '���ˤ��';
$messages['number_of_channels'] = '�W�D�ƥ�';
$messages['legnth'] = '����';
$messages['thumbnail_format'] = '�Y�Ϯ榡';
$messages['regenerate_preview'] = '���s���͹w���Y��';
$messages['error_fetching_resource'] = 'Ū���ɮ׸�T�ɵo�Ϳ��~�C';
$messages['error_updating_resource'] = '��s�ɮ׮ɵo�Ϳ��~�C';
$messages['resource_updated_ok'] = '�ɮסG�u%s�v�w���Q��s�C';

// blog settings
$messages['blog_link'] = '���x���x���}';
$messages['blog_link_help'] = '����ק�';
$messages['blog_name_help'] = '���x�W��';
$messages['blog_description_help'] = '���x��������';
$messages['language'] = '�y�t';
$messages['blog_language_help'] = '�t�Τ�r�H�Τ���ҨϥΪ��y��';
$messages['max_main_page_items'] = '�����峹�ƥ�';
$messages['max_main_page_items_help'] = '�z�n�b������ܴX�g�峹�H';
$messages['max_recent_items'] = '����峹�ƥ�';
$messages['max_recent_items_help'] = '�z�n�b�u����峹�C��v��ܴX�g�峹�H';
$messages['template'] = '�Ҫ�';
$messages['choose'] = '�w�����...';
$messages['blog_template_help'] = '�п�ܱz�����x���x�ҭn�ϥΪ��~�[�˦��Ҫ�';
$messages['use_read_more'] = '�b�峹�ϥΡu�\Ū����...�v�s��';
$messages['use_read_more_help'] = '�p�G�]�w���u�O�v�A����z�b�������峹�N�|�۰ʲ��͡u�\Ū����v�s���A�o�ӳs���|�s���g�峹���R�A�T�w���}�A�A��ܥ��媺�u�������峡���v�C';
$messages['enable_wysiwyg'] = '�ҥΩҨ��Y�ұo�]WYSIWYG�^�峹�s��C';
$messages['enable_wysiwyg_help'] = '�p�G�z�Q�n�ߨ�ݨ�z���s�赲�G�A�г]�w���u�O�v�C�o�ӥ\��u���b�ϥΪ̨ϥ�Internet Explorer 5.5��Mozilla 1.3b�H�W�������~���ĪG�C';
$messages['enable_comments'] = '�}��Ҧ��峹���j�T�d���v��';
$messages['enable_comments_help'] = '�p�G�]�w���u�O�v�A����z�K�i�H����L�ϥΪ̰w��z���峹�o��j�T�d���C�o�ӳ]�w�|�M�Ψ�z�������峹�W�C';
$messages['show_future_posts'] = '�b�����ܥ��Ӥ峹�C';
$messages['show_future_posts_help'] = '�p�G�]�w���u�O�v�A����o�����]�w�b���Ӫ��峹�N�|�X�{�b���W�C';
$messages['comments_order'] = '�j�T�d���ƧǤ覡';
$messages['comments_order_help'] = '�p�G�z�]�w���u�ª��b�e�v�A����d���N�|�q�¨�s�ƧǡA�p�G�]�w���u�s���b�e�v�A�h�Ϥ��A�d���q�s���±ƧǥX�{�C';
$messages['oldest_first'] = '�ª��b�e';
$messages['newest_first'] = '�s���b�e';
$messages['categories_order'] = '�����ƦC����';
$messages['categories_order_help'] = '���������ƦC�覡�C';
$messages['most_recent_updated_first'] = '�̪��s�b�e';
$messages['alphabetical_order'] = '�̭^��r�����ǱƦC';
$messages['reverse_alphabetical_order'] = '�̭^��r�����ǤϦV�ƦC';
$messages['most_articles_first'] = '�̦h�峹�b�e';
$messages['link_categories_order'] = '�����s�������ƦC����';
$messages['link_categories_order_help'] = '���������s�������ƦC�覡�C';
$messages['most_links_first'] = '�̦h�s���b�e';
$messages['most_links_last'] = '�̦h�s���b��';
$messages['time_offset'] = '���x���A���P�z�Ҧb�a���ɶ��t';
$messages['time_offset_help'] = '�z�i�H�γo�ӳ]�w�A�վ�z�ҵo���峹���ɶ��C�o�ӥ\��b���A���D���P�z���O�b���P�ɰϮɬ۷��ΡC�p�G�z�N�ɶ��t�]�w���u+3 �p�ɡv�A����t�δN�|�N�峹���o��ɶ��վ㦨�z�ҳ]�w���ɶ��C';
$messages['close'] = '����';
$messages['select'] = '���';
$messages['error_updating_settings'] = '��s���x�]�w�ɵo�Ϳ��~�A���ˬd��J��ƫ�b���դ@���C';
$messages['error_invalid_number'] = '�ƥخ榡�����T�C';
$messages['error_incorrect_time_offset'] = '���x���A���P�z�Ҧb�a���ɶ��t�����T';
$messages['blog_settings_updated_ok'] = '���x�]�w��s�w���Q�����C';
$messages['hours'] = '�p��';

// user settings
$messages['username_help'] = '���}���ϥΪ̦W�١A�L�k���C';
$messages['full_name'] = '���W';
$messages['full_name_help'] = '���㪺�ϥΪ̦W��';
$messages['password_help'] = '�p�G�A�Q���K�X�п�J�s�K�X�νT�{�K�X�F�p�G�z���Q�ק�K�X�A�d�իK�i�C';
$messages['confirm_password'] = '�T�{�K�X';
$messages['email'] = '�q�l�l��';
$messages['email_help'] = '�p�G�z�Q�n�ϥιq�l�l��q���H�\��A�ж�g���T���H�c�C';
$messages['bio'] = '�ۧڤ���';
$messages['bio_help'] = '�z�i�H�b����g�@�Ǳz���ۧڤ��СA�άO����]�i�H�C';
$messages['picture'] = '�ӤH�Ϲ�';
$messages['user_picture_help'] = '�бq�W�Ǩ���x�����Ϥ�����@�i�����A���ӤH�j�Y�K�C';
$messages['error_invalid_password'] = '�K�X�ӵu�αK�X���~�C';
$messages['error_passwords_dont_match'] = '�ܩ�p�A�z��J���⦸�K�X���۲šC';
$messages['error_incorrect_email_address'] = '�q�l�l��H�c�榡���~�C';
$messages['error_updating_user_settings'] = '��s�ӤH��Ʈɵo�Ϳ��~�C���ˬd��J����ƫ�b���դ@���C';
$messages['user_settings_updated_ok'] = '�ϥΪ̳]�w�w���Q��s�C';
$messages['resource'] = '�ɮ�';

// plugin centre
$messages['identifier'] = '�N��';
$messages['error_plugins_disabled'] = '�ܩ�p�A�~���ثe���Τ��C';

// blog users
$messages['revoke_permissions'] = '�����ϥ��v���C';
$messages['error_no_users_selected'] = '�A�S���������ϥΪ̡C';
$messages['user_removed_from_blog_ok'] = '�ϥΪ̡u%s�v�w�g���Q�q�����@�̦�C���R���C';
$messages['users_removed_from_blog_ok'] = '�ϥΪ̡u%s�v�w�g���Q�q�����@�̦�C���R���C';
$messages['error_removing_user_from_blog'] = '�b�N�ϥΪ̡u%s�v�q�����x���x�@�̦�C�������ɵo�Ϳ��~�C';
$messages['error_removing_user_from_blog2'] = '�b�N�ϥΪ̱q�����x���x�@�̦�C�������ɵo�Ϳ��~�C(id:%s)';

// new blog user
$messages['new_blog_username_help'] = '�z�i�H�ΥH�U���A�N��L�ϥΪ̥[�J�z�����x�@�̦�C���C�s�W�[���ϥΪ̥u��s���޲z���ߤ��ɮפ��ߡC';
$messages['send_notification'] = '�o�e�q��';
$messages['send_user_notification_help'] = '�ιq�l�l��q���o�W�ϥΪ̡C';
$messages['notification_text'] = '�q�����e';
$messages['notification_text_help'] = '�п�J�z�n�q���o��ϥΪ̪��H�󤺮e';
$messages['error_adding_user'] = '�b�[�J�ϥΪ̮ɵo�Ͱ��D�A���ˬd��J����Ʀb���դ@���C';
$messages['error_empty_text'] = '�q�����e���i�H�O�ťաC';
$messages['error_adding_user'] = '�b�[�J�ϥΪ̮ɵo�Ͱ��D�A���ˬd��J����Ʀb���դ@���C';
$messages['error_invalid_user'] = '�ϥΪ̡u%s�v�b�������T�θӨϥΪ̤��s�b�C';
$messages['user_added_to_blog_ok'] = '�ϥΪ̡u%s�v�w�g���Q�[�J�@�̦�C�C';

// blog templates
$messages['error_no_templates_selected'] = '�z�S����ܥ���Ҫ��C';
$messages['error_template_is_current'] = '�u%s�v�Ҫ��L�k�R���A�ӼҪ����b�ϥΤ��C';
$messages['error_removing_template'] = '�R���Ҫ� �u%s�v�ɵo�Ϳ��~�C';
$messages['template_removed_ok'] = ' �Ҫ� �u%s�v�w���Q�R���C';
$messages['templates_removed_ok'] = '�Ҫ� �u%s�v�w���Q�R���C';

// new blog template
$messages['template_installed_ok'] = '�s���Ҫ��]�m�u %s�v�w�g���Q�w�˧����C';
$messages['error_installing_template'] = '�b�w�˼Ҫ��]�m�u %s�v�ɵo�Ϳ��~�C';
$messages['error_missing_base_files'] = '�b�o�ӼҪ��]�m�����ǰ��ɮפ����F�C';
$messages['error_add_template_disabled'] = '���������\�ϥΪ̷s�W�Ҫ��ɮסC';
$messages['error_must_upload_file'] = '�z�����W���ɮסC';
$messages['error_uploads_disabled'] = '�����w�����ɮפW�ǥ\��C';
$messages['error_no_new_templates_found'] = '�䤣��s���Ҫ��]�m�C';
$messages['error_template_not_inside_folder'] = '�Ҫ��ɮץ�����b�P�Ҫ��P�W���ؿ����C';
$messages['error_missing_base_files'] = '�b�o�ӼҪ��]�m�����ǰ��ɮפ����F�C';
$messages['error_unpacking'] = '�b�����Y�ɵo�Ϳ��~�C';
$messages['error_forbidden_extensions'] = '�b�o�ӼҪ��]�m�������ɮ׸T��s���C';
$messages['error_creating_working_folder'] = '�b�ˬd�Ҫ��]�m�ɵo�Ϳ��~�C';
$messages['error_checking_template'] = '�Ҫ��]�m�o�Ϳ��~ (code = %s)';
$messages['template_package'] = '�Ҫ��w�˥]';
$messages['blog_template_package_help']  = '�z�i�H�γo�Ӫ��A�W�Ǥ@�ӷs���Ҫ��w�˥]�A�ӼҪ��N�u���A�����x����ϥΡC�p�G�z�S����k���s�����W�ǡA�Ф�ʤW�ǸӼҪ��ñN����m��A�����x�ҪO��Ƨ�<b>%s</b>�U,�M����U "<b>���˼Ҫ�</b>" ���áC pLog �|���˸Ӹ�Ƨ��æ۰ʷs�W�ҧ�쪺�s�Ҫ��C';
$messages['scan_templates'] = '���˼Ҫ�';

// site users
$messages['user_status_active'] = '�ҥ�';
$messages['user_status_disabled'] = '����';
$messages['user_status_all'] = '�Ҧ����A';
$messages['user_status_unconfirmed'] = '�|���T�{';
$messages['error_invalid_user2'] = '�ϥΪ̥N���u%s�v���s�b�C';
$messages['error_deleting_user'] = '�b���ΨϥΪ̱b���u%s�v�ɵo�Ϳ��~�C';
$messages['user_deleted_ok'] = '�ϥΪ̱b���u%s�v�w���Q���ΡC';
$messages['users_deleted_ok'] = '�ϥΪ̱b���u%s�v�w���Q���ΡC';

// create user
$messages['user_added_ok'] = '�s�ϥΪ̱b���u%s�v�w���Q�s�W�C';
$messages['error_incorrect_username'] = '�ϥΪ̦W�٤����T�Τw�g���H���U�ۦP���W�٤F�C';
$messages['user_status_help'] = '�ϥΪ̱b���ثe���A';
$messages['user_blog_help'] = '�ϥΪ̹w�]�����x';
$messages['none'] = '�L';

// edit user
$messages['error_invalid_user'] = '�ϥΪ�ID�����T�ΨϥΪ̤��s�b�C';
$messages['error_updating_user'] = '��s�ϥΪ̳]�w�ɵo�Ϳ��~�C���ˬd��J��ƫ�A���դ@���C';
$messages['blogs'] = '���x';
$messages['user_blogs_help'] = '�ϥΪ֦̾��Υi�H�s�������x�C';
$messages['site_admin'] = '�����t�κ޲z';
$messages['site_admin_help'] = '�p�G�ϥΪ֦̾������t�κ޲z�v���A�L�N�i�H�ݨ�[���x�]�w]�ϰ�A�i�H�i��������޲z�u�@�C';
$messages['user_updated_ok'] = '�ϥΪ̱b���u%s�v�w���Q��s�C';

// site blogs
$messages['blog_status_all'] = '�Ҧ����A';
$messages['blog_status_active'] = '�ҥ�';
$messages['blog_status_disabled'] = '����';
$messages['blog_status_unconfirmed'] = '�|���T�{';
$messages['owner'] = '�޲z��';
$messages['quota'] = '�ɮ׭���';
$messages['bytes'] = 'bytes';
$messages['error_no_blogs_selected'] = '�z�����n��ܱz�ҷQ�n�R�������x���x�C';
$messages['error_blog_is_default_blog'] = '�u%s�v�O�t�ιw�]���x���x�A�L�k�R���C';
$messages['blog_deleted_ok'] = '�u%s�v���x���x�w���Q�R���C';
$messages['blogs_deleted_ok'] = '�u%s�v���x���x�w���Q�R���C';
$messages['error_deleting_blog'] = '�b�R���u%s�v�o�Ӻ��x���x�ɵo�Ϳ��~�C';
$messages['error_deleting_blog2'] = '�b�R�����x���x�ɵo�Ϳ��~�C(ID:%s)';

// create blog
$messages['error_adding_blog'] = '�b�s�W���x�ɵo�Ϳ��~�C���ˬd��J����Ʀb���դ@���C';
$messages['blog_added_ok'] = '�s�����x���x�u%s�v�w���\�[�J��Ʈw���C';

// edit blog
$messages['blog_status_help'] = '���x���A';
$messages['blog_owner_help'] = '���x���x�޲z�̡A�N�֦����㪺�v���ӭק���x�]�w�C';
$messages['users'] = '�ϥΪ�';
$messages['blog_quota_help'] = '�ɮ׮e�q����(���Gbytes)�C�]��0�ΪťձN�ϥΨt�Ϊ������ɮ׭��װ����w�]�ȡC';
$messages['blog_users_help'] = '�i�H�s���o�Ӻ��x���ϥΪ̡C�бq�������ϥΪ̱N�L����k�䴣�ѸӨϥΪ̦s�����x���v���C';
$messages['edit_blog_settings_updated_ok'] = '���x �u%s�v�w���Q��s�C';
$messages['error_updating_blog_settings'] = '��s���x���x �u%s�v�ɵo�Ϳ��~�C';
$messages['error_incorrect_blog_owner'] = '�n�]�w�����x���x�޲z�����ϥΪ̱b�����s�b�C';
$messages['error_fetching_blog'] = 'Ū�����x��Ʈɵo�Ϳ��~�C';
$messages['error_updating_blog_settings2'] = '��s���x�ɵo�Ϳ��~�C���ˬd��J��Ʀb���դ@���C';
$messages['add_or_remove'] = '�s�W�β����ϥΪ�';

// site locales
$messages['locale'] = '�y�t';
$messages['locale_encoding'] = '�s�X�覡';
$messages['locale_deleted_ok'] = '�u%s�v�y�t�w���Q�R���C';
$messages['error_no_locales_selected'] = '�z�S����ܭn�R�����y�t�C';
$messages['error_deleting_only_locale'] = '�z���i�H�R���o�ӻy�t�ɮסA�]���o�O�t�Τ��ثe�ߤ@���y�t�ɮסC';
$messages['locales_deleted_ok']= '�u%s�v�y�t�w���Q�R���C';
$messages['error_deleting_locale'] = '�b�R���u%s�v�y�t�ɵo�Ϳ��~�C';
$messages['error_locale_is_default'] = '�z���i�H�R���u%s�v�y�t�A�]���o�O�t�Υثe���w�]�y�t�C';

// add locale
$messages['error_invalid_locale_file'] = '�o���ɮרä��O���T���y�t�ɮסC';
$messages['error_no_new_locales_found'] = '�䤣��s���y�t�ɮסC';
$messages['locale_added_ok'] = '�y�t�u%s�v�w�g���Q�s�W';
$messages['error_saving_locale'] = '�b�N�s���y�t�ɮ��x�s�ܻy�t�ɮץؿ��ɵo�Ϳ��~�C���ˬd�ɮץؿ����g�J�v���O�_���T�C';
$messages['scan_locales'] = '���˻y�t��';
$messages['add_locale_help'] = '�z�i�H�γo�Ӫ��A�W�Ǥ@�ӷs���y�t�ɡC�p�G�z�S����k���s�����W�ǡA�Ф�ʤW�Ǹ��ɮרñN����m�� <b>./locales/</b>�U,�M����U "<b>���˻y�t��</b>" ���áC pLog �|���˸Ӹ�Ƨ��æ۰ʷs�W�ҧ�쪺�y�t�ɡC ';

// site templates
$messages['error_template_is_default'] = '�z���i�H�R���u%s�v�Ҫ��A�]���o�O�s���x�ثe���w�]�Ҫ��C';

// add template
$messages['global_template_package_help'] = '�z�i�H�γo�Ӫ��A�W�Ǥ@�ӷs���Ҫ��w�˥]�A�ӼҪ��N���ѵ������W�Ҧ����x�ϥΡC�p�G�z�S����k���s�����W�ǡA�Ф�ʤW�ǸӼҪ��ñN����m��A�����x�ҪO��Ƨ�<b>%s</b>�U,�M����U "<b>���˼Ҫ�</b>" ���áC pLog �|���˸Ӹ�Ƨ��æ۰ʷs�W�ҧ�쪺�s�Ҫ��C';

// global settings
$messages['site_config_saved_ok'] = '���x�]�w�w���Q�x�s�C';
$messages['error_saving_site_config'] = '�b�x�s���x�]�m�ɵo�Ͱ��D�C';
/// general settings
$messages['help_comments_enabled'] = '�ҥΩΰ��Υ������j�T�d���\��C';
$messages['help_beautify_comments_text'] = '�b�ϥΪ̵o��j�T�d���ɡA�ϥΥL�ҿ�J����r�榡�C';
$messages['help_temp_folder'] = 'pLog�t�ΥΨ��x�s�Ȧs�ɮץΪ��ؿ��C';
$messages['help_base_url'] = '�o�Ӻ��x�w�˪����}�A�o�Ӷ��ذȥ��n���T�A�Фp�߿�J�C';
$messages['help_subdomains_enabled'] = '�ҥΩΰ��Φ�����]�w�C';
$messages['help_subdomains_base_url'] = '������]�w�ҥήɡA�o�Ӻ��}�N�ΨӴ��N�t�κ��}�C�ϥ� {blogname}�Ө��o���x�W�٤�{username}���o���x�ϥΪ̦W�١A�ΨӲ��ͳs������x�����}�C';
$messages['help_include_blog_id_in_url'] = '��[������]�\��ҥΤ�[�@����}]�\��ҥήɤ~���N�q�C�j�����ͪ����}���n�]�t"blogId"�o�ӰѼơC�Ф��n�ܧ�]�w�ȡA���D�A���D�A�b������C';
$messages['help_script_name'] = '�p�G�A�Nindex.php��אּ�䥦�W�٪��ܡA�Цb�U���J���᪺�ɮצW�١C';
$messages['help_show_posts_max'] = '�b������ܤ峹�ƪ��w�]�ȡC';
$messages['help_recent_posts_max'] = '�b�����u����峹�v�C����ܤ峹�ƪ��w�]�ȡC';
$messages['help_save_drafts_via_xmlhttprequest_enabled'] = '��XmlHttpRequest�\��Q�ҥήɡA�N�i�H�ϥ�Javascript���x�s�峹��Z�C';
$messages['help_locale_folder'] = '�y�t�ɮשҦb�ؿ��C';
$messages['help_default_locale'] = '�b�إ߷s���x���x�ɹw�]�ϥΪ��y�t�C';
$messages['help_default_blog_id'] = '�w�]���xID';
$messages['help_default_time_offset'] = '�w�]���������A���ɶ��t�C';
$messages['help_html_allowed_tags_in_comments'] = '�b�o��j�T���׮ɥi�H�ϥΪ�HTML�y�k���ҡC';
$messages['help_referer_tracker_enabled'] = '�O�_�ϥΤ峹�f�V�s���\��C(���Φ��\��i�H�����t�ήį�C)';
$messages['help_show_more_enabled'] = '�ҥΩΰ��Ρu�\Ū����v�s���\��C';
$messages['help_update_article_reads'] = '�O�_�ϥΤ��ت��I�\�v�έp�u��p��C�g�峹���I�\���ơC(���Φ��\��i�H�����t�ήį�C)';
$messages['help_update_cached_article_reads'] = '�b�֨��\��}�Ҫ����ΤU�A�O�_�ϥΤ��ت��I�\�v�έp�u��p��C�g�峹���I�\���ơC';
$messages['help_xmlrpc_ping_enabled'] = '�b�t�Τ����H�o��s�峹�ɡA�O�_�e�X XMLRPC �q�i�C';
$messages['help_send_xmlrpc_pings_enabled_by_default'] = '�w�]�ҥθӥ\��C���s�峹�o��Χ�s�ɡA�O�_�e�X XMLRPC �q�i�C�C';
$messages['help_xmlrpc_ping_hosts'] = 'XMLRPC �q�i�C��A�p�G�z�n�V�h�B�o�e�q�i�A�Цb��r�ؤU���[�J�q�i�o�e���}�A�C�Ӻ��}�@��C';
$messages['help_trackback_server_enabled'] = '�O�_�����q���~�ǨӪ��ޥγq�i�]TrackBack�^�C';
$messages['help_htmlarea_enabled'] = '�ҥΩΰ��ΧY���Y�ұo�]WYSIWYG�^�峹�s��C';
$messages['help_plugin_manager_enabled'] = '�ҥΩΰ��Υ~���{���C';
$messages['help_minimum_password_length'] = '�K�X�̵u�ݭn�h�֦r���C';
$messages['help_xhtml_converter_enabled'] = '�p�G�ҥΦ��\��ApLog�|�յ۱N�Ҧ���HTML�ഫ���A��XHTML�C';
$messages['help_xhtml_converter_aggressive_mode_enabled'] = '�p�G�ҥΦ��\��ApLOG�|�յ۱NHTML�i�@�B�ഫ��XHTML�A���o�˥i��|�ɭP��h�����~�C';
$messages['help_session_save_path'] = '���]�w�N�ϥ�PHP��session_save_path()��ơA�ӧ��pLog�s��session����Ƨ��C�нT�w�Ӹ�Ƨ��i�H�z�L�������A���i��g�J�ʧ@�C�p�G�A�n�ϥ�PHP�w�]��session�s����|�A�бN���]�w�ťաC';
// summary settings
$messages['help_summary_page_show_max'] = '�b�K�n�������n��ܦh�ֶ��ءC���ﶵ����b�K�n�������C�X���Ҧ����ءC(�]�A�̷s�峹�ƥءB�̬��D���x��)';
$messages['help_summary_blogs_per_page'] = '�b[���x�C��]���C�@���n��ܦh�ֺ��x�C';
$messages['help_forbidden_usernames'] = '�C�X�Ҧ������\���U���ϥΪ̦W�١C';
$messages['help_force_one_blog_per_email_account'] = '�@�ӹq�l�l��O�_�u����U�@�Ӻ��x';
$messages['help_summary_show_agreement'] = '�b�ϥΪ̶i����U�ʧ@���e�A�O�_��ܨýT�{�ϥΪ̦P�N�A�ȱ��ڡC';
$messages['help_need_email_confirm_registration'] = '�O�_�ҥιq�l�l�󪺽T�{�s���ӱҥαb���C';
$messages['help_summary_disable_registration'] = '�O�_�����ϥΪ̵��U�s���x���\��C';
// templates
$messages['help_template_folder'] = '�Ҫ��ɮת��Ҧb�ؿ����|�C';
$messages['help_default_template'] = '�b�s�غ��x���x�ɡA�w�]�ϥΪ��Ҫ��C';
$messages['help_users_can_add_templates'] = '�ϥΪ̬O�_�i�H�b�Ҫ��]�m���A�[�J�ݩ�ۤv�M�ݻݨD���ɮסC';
$messages['help_template_compile_check'] = '���Φ��\��ɡASmarty�u���b�Ҫ������ɤ~�|���s���ͭ����C���Φ��\��i�H�����t�ήį�C';
$messages['help_template_cache_enabled'] = '�ҥμҪ��֨��\��C�ҥΦ��\��A�֨��������N�|����Q�ϥΡA�Ӥ��ݭn���Ʈw�i���Ʀs�����ʧ@�C';
$messages['help_template_cache_lifetime'] = '�֨��s���ɶ�(���G��).�]��-1�֨��N�ä��L���A�γ]��0�������֨��\��C';
$messages['help_template_http_cache_enabled'] = '�O�_�ҥι�HTTP�s���n�D���֨��䴩�C�ҥΦ��\��pLog�u�|�ǰe���n�����e�A�i�H�`�ٺ����W�e�C';
$messages['help_allow_php_code_in_templates'] = '���\�bSmarty �Ҫ�����{php}...{/php}�϶��m�J���PHP�{���X(native PHP code)';
// urls
$messages['help_request_format_mode'] = '�p�G�z�]�w���u�@����}�v�A����t�Ωҧe�{�����}�A�N�|�ϥαN�ѼƥHget�覡�ǤJ���@��覡�C�p�G�z��Ρu���j�M��������j�M��²����}�v�A����N�|�����}�ܱo²��A�j�M�����]�e�����o�z�����W�����e�A���L�z��Apache���A�������n�������.htaccess�ɮפ����мg�]�w�C�p�G�ϥΦۭq���}�A�нվ�U�誺�]�w�C';
$messages['plain'] = '�@����}';
$messages['search_engine_friendly'] = '���j�M��������j�M��²����}';
$messages['custom_url_format'] = '�ۭq���}';
$messages['help_permalink_format'] = '��ϥΦۭq���}�ɡA�R�A�s�����}�榡�C';
$messages['help_category_link_format'] = '��ϥΦۭq���}�ɡA�����s���������}�榡�C';
$messages['help_blog_link_format'] = '��ϥΦۭq���}�ɡA���x�s�����}�榡�C';
$messages['help_archive_link_format'] = '��ϥΦۭq���}�ɡA�峹�J��s�����}�榡�C';
$messages['help_user_posts_link_format'] = '��ϥΦۭq���}�ɡA�S�w�ϥΪ̵o���峹�s�����}�榡�C';
$messages['help_post_trackbacks_link_format'] = '��ϥΦۭq���}�ɡA�ޥγs�����}�榡�C';
$messages['help_template_link_format'] = '��ϥΦۭq���}�ɡA�ۭq�R�A�Ҫ��s�����}�榡�C';
$messages['help_album_link_format'] = '��ϥΦۭq���}�ɡA��Ƨ��s�����}�榡�C';
$messages['help_resource_link_format'] = '��ϥΦۭq���}�ɡA�ɮ׳s�����}�榡�C';
$messages['help_resource_preview_link_format'] = '��ϥΦۭq���}�ɡA�ɮ׹w���s�����}�榡�C';
$messages['help_resource_medium_size_preview_link_format'] = '��ϥΦۭq���}�ɡA�����ɮ׹w���s�����}�榡�C';
$messages['help_resource_download_link_format'] = '��ϥΦۭq���}�ɡA�ɮפU���s�����}�榡�C';
// email
$messages['help_check_email_address_validity'] = '�b�ϥΪ̵��U�ӽзs�����x���x�ɡA�O�_�n�{�ҥL�Ҷ�g���q�l�l��H�c�O�_���T�C';
$messages['help_email_service_enabled'] = '�ϥΩΰ��ΥΨӱH�e�q���H�窺�q�l�l��A�ȡC';
$messages['help_post_notification_source_address'] = '�t�γq���H�窺�H��H�q�l�l��H�c�C';
$messages['help_email_service_type'] = '�ΨӱH�e�q�l�l�󪺤覡�A�Цb�U�ؤ�k��ܨ䤤���@�C';
$messages['help_smtp_host'] = '�p�G�z���SMTP�H�e�q�l�l��A�п�J�z�n�Ψӵo�e�l�󪺥D���C';
$messages['help_smtp_port'] = '�e���]�w��SMTP�D���s����]port�^';
$messages['help_smtp_use_authentication'] = 'SMTP�D���O�_�ݭn���v�{�ҡC�p�G�ݭn���ܡA���~���g�U���ⶵ�]�w�C';
$messages['help_smtp_username'] = '�p�GSMTP�D���ݭn���v�{�ҡA�ж�g�ϥΪ̱b���C';
$messages['help_smtp_password'] = '�p�GSMTP�D���ݭn���v�{�ҡA�ж�g�ϥΪ̱K�X�C';
// helpers
$messages['help_path_to_tar'] = '�utar�v���O�Ҧb�ؿ��C(�ΨӸ����Y�ϥ� .tar.gz �� .tar.gz2�榡���Y���Ҫ��])';
$messages['help_path_to_gzip'] = '�ugzip�v���O�Ҧb�ؿ��C(�ΨӸ����Y�ϥ� .tar.gz �榡���Y���Ҫ��])';
$messages['help_path_to_bz2'] = '�ubzip2�v���O�Ҧb�ؿ��C(�ΨӸ����Y�ϥ� .tar.gz2�榡���Y���Ҫ��])';
$messages['help_path_to_unzip'] = '�uunzip�v���O�Ҧb�ؿ��C(�ΨӸ����Y�ϥ� .zip�榡���Y���Ҫ��])';
$messages['help_unzip_use_native_version'] = '�ϥ�PHP���ت������Ӹ����Y .zip ���ɮ�';
// uploads
$messages['help_uploads_enabled'] = '�ҥΩΰ��ΤW���ɮץ\��C�o�ӥ\��|�v�T��ϥΪ̯�_�W�Ƿs���Ҫ��w�˥]�A�H�Φb�Ҫ����K�[�s���ɮסC';
$messages['help_maximum_file_upload_size'] = '�ϥΪ̤W���ɮפj�p���W���C';
$messages['help_upload_forbidden_files'] = '�T��ϥΪ̤W�Ǫ��ɮ������C�p�G���h�Ӥ��P���ɮ������A�Цb���P���������ΪťհϹj�C�]�i�ϥ�\'*\' and \'?\'���覡�C';
// interfaces
$messages['help_xmlrpc_api_enabled'] = '�ҥΩΰ���XMLRPC�����CXMLRPC�������γ~�O�i�H���z�ϥήୱ���x�g�@�u��X�����x�峹�C';
$messages['help_rdf_enabled'] = '�ҥΩΰ��β���RSS�s�D�洫�ɮץ\��C';
$messages['help_default_rss_profile'] = '�w�]��RSS/RDF�s�D�洫�榡';
// security
$messages['help_security_pipeline_enabled'] = '�ҥΨt�Φw���\��C�p�G�z�����F�o�ӿﶵ�A����Ҧ����t�Φw���\�ೣ�|���ΡA�p�G�z�Q�n�����@�Ǩt�Φw���\��A��ĳ�z�N�o�ӳ]�w�]���}�ҡA�M��b�H�U���ﶵ���A�v�@���Χڭ̤��ݭn���t�Φw���\�ඵ�ءC';
$messages['help_ip_address_filter_enabled'] = '�ҥ�IP��m�L�o�C�z�i�H�γo�ӥ\����׬Y�ǥD���s�������C';
$messages['help_content_filter_enabled'] = '�ϥΥH���W��ܦ�����¦��²�椺�e�L�o����A��²�檺����r�L�o�����e�C���L��ĳ�z�A�ĥΨ���L�o�|�O����n����סC';
$messages['help_maximum_comment_size'] = '�j�T�d��������r���ƤW���C';
// bayesian filter
$messages['help_bayesian_filter_enabled'] = '�ҥΩΰ��Ψ���L�o����C';
$messages['help_bayesian_filter_spam_probability_treshold'] = '�Q�{�w���O�U���j�T�d�����ƭȤU���C�]�w�d��b0.01��0.99�����C';
$messages['help_bayesian_filter_nonspam_probability_treshold'] = '�]�w�j�T�d���O���`�d�����ƭȤW���C����ŦX�b�e�@�]�w�P���]�w�����ƭȪ��d���j�T�A���|�Q�{�w�O���`�ӫD�U���d���C';
$messages['help_bayesian_filter_min_length_token'] = '�b�h�֦r���ƥH�W�~�|�Ұʨ���L�o����C';
$messages['help_bayesian_filter_max_length_token'] = '����L�o����i�H�B�z���̦h�r���ƤW���C';
$messages['help_bayesian_filter_number_significant_tokens'] = '�b�T���������n���h����ۦ��N�q����r�C';
$messages['help_bayesian_filter_spam_comments_action'] = '�B�z�U���d������k�C�z�i�H�����M�z�o�ǩU���d���]���|�s�i��Ʈw���^�A�άO�O�s�o�ǩU���d���A���O�[�W�U���d���ХܼХܡC��ĳ��z���L�o����b�٨S�������إߪ��׳W�h�ɡA���Ϋ�̡C';
$messages['keep_spam_comments'] = '�O�s�U���j�T';
$messages['throw_away_spam_comments'] = '�M�z�U���j�T';
// resources
$messages['help_resources_enabled'] = '�ҥΩ������ɮפ��ߥ\��C';
$messages['help_resources_folder'] = '�ΨӦs���ɮפ��ߪ��ؿ��C�o�ӥؿ����@�w�n�b�����ؿ��U�C�p�G�z���Ʊ�O�H�����s���z���ɮץؿ��A�z�i�H��o�ӥؿ��]�w���L�a��C';
$messages['help_thumbnail_method'] = '�z�ΨӲ����Y�Ϫ���ݨt�ΡC�p�G�ϥ�PHP�AGD���䴩�O�������C';
$messages['help_path_to_convert'] = '�ΨӲ����Y�Ϫ��t�Τu����|�C�p�G�z�n�ϥ�ImageMagick�A����z�������۶�gImageMagick���u��{�����|�C';
$messages['help_thumbnail_format'] = '�b���͹w���Y�ϮɩҨϥΪ��w�]�榡�C�p�G�z��ܡu�P��l�v���ۦP�v�A����w���Y�ϴN�|�x�s���P��l�v���ۦP���榡�C';
$messages['help_thumbnail_height'] = '�Y�Ϲw�]���סC';
$messages['help_thumbnail_width'] = '�Y�Ϲw�]�e�סC';
$messages['help_medium_size_thumbnail_height'] = '�����Y�Ϲw�]����';
$messages['help_medium_size_thumbnail_width'] = '�����Y�Ϲw�]�e��';
$messages['help_thumbnails_keep_aspect_ratio'] = '�Y�ϬO�_�O����l��ҡC';
$messages['help_thumbnail_generator_force_use_gd1'] = '�O�_�j��pLog�ϥ�GD1��ƨӲ����Y��';
$messages['help_thumbnail_generator_user_smoothing_algorithm'] = '�O�_�ϥκt��k�Ө��Y�ϵe���󥭶��C�u�����Y�ϲ��ͤu��OGD�ɤ~�A�ΡC';
$messages['help_resources_quota'] = '�����ɮ׮e�q���B';
$messages['help_resource_server_http_cache_enabled'] = '��HTTP�ШD���Y��"If-Modified-Since"�ҥΧ֨��䴩�C�ҥΦ��\��Ӹ`�ٺ����W�e�C';
$messages['help_resource_server_http_cache_lifetime'] = '�Ȥ�ݥi�H�ϥΧ֨��ɮת��ɶ�(���G�d�����@��)';
$messages['same_as_image'] = '�P��l�v���ۦP';
// search
$messages['help_search_engine_enabled'] = '�ҥΩΰ��ηj�M����';
$messages['help_search_in_custom_fields'] = '�j�M�]�t�ۭq���';
$messages['help_search_in_comments'] = '�j�M�]�t�j�T';

// cleanup
$messages['purge'] = '�M��';
$messages['cleanup_spam'] = '�M���U���j�T';
$messages['cleanup_spam_help'] = '�o�|�M���Ҧ��Q�ϥΪ̼Хܬ��U�����j�T�C�Q�M�����U���j�T�N�L�k�^�_�C';
$messages['spam_comments_purged_ok'] = '�U���j�T�w���Q�M��';
$messages['cleanup_posts'] = '�M���峹';
$messages['cleanup_posts_help'] = '�o�|�M���Ҧ��Q�ϥΪ̼Хܬ��R�����峹�C �Q�M�����峹�N�L�k�^�_�C';
$messages['posts_purged_ok'] = '�峹�w���Q�M��';

/// summary ///
// front page
$messages['summary'] = '�K�n';
$messages['register'] = '���U';
$messages['summary_welcome'] = '�w��!';
$messages['summary_most_active_blogs'] = '�̬��D���x';
$messages['summary_most_commented_articles'] = '�̦h�j�T�峹';
$messages['summary_most_read_articles'] = '�̦h�H�\Ū�峹';
$messages['password_forgotten'] = '�ѰO�K�X?';
$messages['summary_newest_blogs'] = '�̷s�إߪ����x';
$messages['summary_latest_posts'] = '�̷s�o���峹';
$messages['summary_search_blogs'] = '�j�M���x';

// blog list
$messages['updated'] = '��s';
$messages['total_reads'] = '�s���`����';

// blog profile
$messages['blog'] = '���x';
$messages['latest_posts'] = '�̷s�o���峹';

// registration
$messages['register_step0_title'] = '�A�ȱ���';
$messages['agreement'] = '�P�N����';
$messages['decline'] = '������';
$messages['accept'] = '����';
$messages['read_service_agreement'] = '�иԲӾ\Ū�A�ȱ��ڡA�p�G�A�P�N�H�W���ڽЫ��U������C';
$messages['register_step1_title'] = '�إߨϥΪ� [1/4]';
$messages['register_step1_help'] = '�����A�������إߤ@�ӨϥΪ̱b���Ө��o�@�Ӻ��x�A�o�ӨϥΪ֦̾��Ӻ��x�A�P�ɥi�H�i��Ҧ����x�]�w�\��C';
$messages['register_next'] = '�U�@�B';
$messages['register_back'] = '�W�@�B';
$messages['register_step2_title'] = '�إߺ��x [2/4]';
$messages['register_blog_name_help'] = '���A�����x���ӦW��';
$messages['register_step3_title'] = '��ܤ@�ӼҪ�[3/4]';
$messages['step1'] = '�B�J 1';
$messages['step2'] = '�B�J 2';
$messages['step3'] = '�B�J 3';
$messages['register_step3_help'] = '�п�ܤ@�ӼҪ��������x���w�]�Ҫ��C�u�n�A�����w�A�A�i�H�H�ɧ⥦�����C';
$messages['error_must_choose_template'] = '�п�ܤ@�ӼҪ�';
$messages['select_template'] = '����Ҫ�';
$messages['register_step5_title'] = '���ߧA! [4/4]';
$messages['finish'] = '���U����';
$messages['register_need_confirmation'] = '�@�ʥ]�t���U[�T�{�T���s��]���q�l�l��w�g�H��A���q�l�H�c���C�кɧ��I��ӳs���Ӷ}�l�A��blogging�ͬ��I';
$messages['register_step5_help'] = '���ߧA�A�s���ϥΪ̱b���κ��x�w�g���Q�إߡI';
$messages['register_blog_link'] = '�p�G�A�n�ݤ@�ݧA���s���x�A�A�{�b�i�H��<a href="%2$s">%1$s</a>�o�̬ݤ@�ݡC';
$messages['register_blog_admin_link'] = '�p�G�A�Q�n�ߨ�}�l�o��峹�A���I��s���� <a href="admin.php">�޲z����</a>';
$messages['register_error'] = '�L�{�������~�o�͡I';
$messages['error_registration_disabled'] = '�ܩ�p�A�����޲z�̰��ε��U�s���x���\��C';
// registration article topic and text
$messages['register_default_article_topic'] = '���ߡI';
$messages['register_default_article_text'] = '�p�G�A�i�H�ݨ�o�g�峹�A��ܵ��U�L�{�w�g���Q�����C�{�b�A�i�H�}�lblogging�F�I';
$messages['register_default_category'] = '�@��';
// confirmation email
$messages['register_confirmation_email_text'] = '���I��U�����s���ӱҥΧA�����x�G:

%s

���A���Ӭ��n���@�ѡI';
$messages['error_invalid_activation_code'] = '�ܩ�p�A�T�{�X�����T�I';
$messages['blog_activated_ok'] = '���ߡA�A���ϥΪ̱b���M���x�w�g���Q�ҥΤF�I';
// forgot your password?
$messages['reset_password'] = '���]�K�X';
$messages['reset_password_username_help'] = '�A�n���]���ӨϥΪ̪��K�X�H';
$messages['reset_password_email_help'] = '�ϥΪ̥Ψӵ��U���q�l�l���}';
$messages['reset_password_help'] = '�ϥΤU�誺���ӭ��]�K�X�C�п�J�ϥΪ̦W�٤ε��U�ɨϥΪ��q�l�l���}�C';
$messages['error_resetting_password'] = '���]�K�X�ɵo�Ϳ��~�C���ˬd��J����ƦA���դ@���C';
$messages['reset_password_error_incorrect_email_address'] = '�q�l�l���}���~�ε۳o���O�A���U�ɨϥΪ��q�l�l��C';
$messages['password_reset_message_sent_ok'] = '�@�ʦ��ۭ��]�K�X�s�����q�l�l��w�g�e��A���q�l�l��H�c�A���I��ӳs���ӭ��]�K�X�C';
$messages['error_incorrect_request'] = '���}�����ѼƤ����T�C';
$messages['change_password'] = '���]�K�X';
$messages['change_password_help'] = '�п�J�s�K�X�νT�{�K�X';
$messages['new_password'] = '�s�K�X';
$messages['new_password_help'] = '�b�o�̿�J�s�K�X';
$messages['password_updated_ok'] = '�A���K�X�w�g���Q��s';

// Suggested by BCSE, some useful messages that not available in official locale
$messages['upgrade_information'] = '�z�ҨϥΪ��s�������ŦX�����]�p�зǡA�]���������N�H�¤�r�Ҧ���ܡC�p���H�̨Ϊ��ƪ��覡�s�������A�ЦҼ{<a href="http://www.webstandards.org/upgrade/" title="The Web Standards Project\'s Browser Upgrade initiative">�ɯ�</a>�z���s�����C';
$messages['jump_to_navigation'] = '���ʨ�����C�C';
$messages['comment_email_never_display'] = '�t�η|�۰ʬ��A�]�w����A�B���|��ܧA�d�U���l��a�}�C';
$messages['comment_html_allowed'] = '�i�ϥΤ� <acronym title="Hypertext Markup Language">HTML</acronym> ���Ҧp�U�G&lt;<acronym title="�γ~�G�W�s��">a</acronym> href=&quot;&quot; title=&quot;&quot; rel=&quot;&quot;&gt; &lt;<acronym title="�γ~�G�Y�r�y�е�">acronym</acronym> title=&quot;&quot;&gt; &lt;<acronym title="�γ~�G�ޥΤ�r">blockquote</acronym> cite=&quot;&quot;&gt; &lt;<acronym title="�γ~�G�R���u">del</acronym>&gt; &lt;<acronym title="�γ~�G����">em</acronym>&gt; &lt;<acronym title="�γ~�G���u">ins</acronym>&gt; &lt;<acronym title="�γ~�G����">strong</acronym>&gt;';
$messages['trackback_uri'] = '�o�g�峹���ޥγs�����}�G';
$messages['previous_post'] = '�W�@�g';
$messages['next_post'] = '�U�@�g';
$messages['comment_default_title'] = '(�L���D)';
$messages['guestbook'] = '�d���O';
$messages['trackbacks'] = '�ޥ�';
$messages['menu'] = '�D���';
$messages['albums'] = '��Ƨ�';
$messages['admin'] = '�޲z����';
?>