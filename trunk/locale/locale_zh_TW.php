<?php
// set this to the encoding that should be used to display the pages correctly
$messages['encoding'] = 'utf-8';
$messages['locale_description'] = 'Traditional Chinese translation (UTF-8)';
// locale format, see Locale::formatDate for more information
$messages['date_format'] = '%d/%m/%Y %H:%M';

// days of the week
$messages['days'] = Array( '星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六' );
// -- compatibility, do not touch -- //
$messages['Monday'] = $messages['days'][1];
$messages['Tuesday'] = $messages['days'][2];
$messages['Wednesday'] = $messages['days'][3];
$messages['Thursday'] = $messages['days'][4];
$messages['Friday'] = $messages['days'][5];
$messages['Saturday'] = $messages['days'][6];
$messages['Sunday'] = $messages['days'][0];

// abbreviations
$messages['daysshort'] = Array( '日', '一', '二', '三', '四', '五', '六' );
// -- compatibility, do not touch -- //
$messages['Mo'] = $messages['daysshort'][1];
$messages['Tu'] = $messages['daysshort'][2];
$messages['We'] = $messages['daysshort'][3];
$messages['Th'] = $messages['daysshort'][4];
$messages['Fr'] = $messages['daysshort'][5];
$messages['Sa'] = $messages['daysshort'][6];
$messages['Su'] = $messages['daysshort'][0];

// months of the year
$messages['months'] = Array( '元月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月');
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
$messages['message'] = '訊息';
$messages['error'] = '錯誤';
$messages['date'] = '日期';

// miscellaneous texts
$messages['of'] = 'of';
$messages['recently'] = '近期文章';
$messages['comments'] = '迴響';
$messages['comment on this'] = '迴響';
$messages['my_links'] = '我的連結';
$messages['archives'] = '文章彙整';
$messages['search'] = '站內搜尋';
$messages['calendar'] = '日曆';
$messages['search_s'] = '搜尋';
$messages['search_this_blog'] = '搜尋網誌內容:';
$messages['about_myself'] = '自我介紹';
$messages['permalink_title'] = '文章彙整靜態連結網址';
$messages['permalink'] = '靜態連結網址';
$messages['posted_by'] = '作者';
$messages['reply'] = '回覆';

// add comment form
$messages['add_comment'] = '發表迴響';
$messages['comment_topic'] = '標題';
$messages['comment_text'] = '內容';
$messages['comment_username'] = '暱稱';
$messages['comment_email'] = '電子郵件';
$messages['comment_url'] = '個人網頁';
$messages['comment_send'] = '發表';
$messages['comment_added'] = '您的迴響已經順利發表！';
$messages['comment_add_error'] = '發表迴響時發生錯誤';
$messages['article_does_not_exist'] = '本文章不存在';
$messages['no_posts_found'] = '找不到文章';
$messages['user_has_no_posts_yet'] = '該使用者還沒有發表過任何文章';
$messages['back'] = '回到上一頁';
$messages['post'] = '文章';
$messages['trackbacks_for_article'] = '引用本文的文章標題：';
$messages['trackback_excerpt'] = '摘要';
$messages['trackback_weblog'] = '網誌';
$messages['search_results'] = '搜尋結果';
$messages['search_matching_results'] = '以下文章符合您的搜尋關鍵字: ';
$messages['search_no_matching_posts'] = '找不到符合的文章';
$messages['read_more'] = '(閱讀全文)';
$messages['syndicate'] = '新聞交換';
$messages['main'] = '主頁面';
$messages['about'] = '關於';
$messages['download'] = '下載';

////// error messages /////
$messages['error_fetching_article'] = '找不到您所指定的文章。';
$messages['error_fetching_articles'] = '找不到您所指定的文章。';
$messages['error_trackback_no_trackback'] = '尚未有人向本文發送引用通告';
$messages['error_incorrect_article_id'] = '文章ID不正確。';
$messages['error_incorrect_blog_id'] = '網誌站台ID不正確。';
$messages['error_comment_without_text'] = '無迴響留言內容。';
$messages['error_comment_without_name'] = '您必須要填寫姓名或暱稱。';
$messages['error_adding_comment'] = '在將留言新增至資料庫時發生問題。';
$messages['error_incorrect_parameter'] = '參數不正確。';
$messages['error_parameter_missing'] = '您少傳遞了一項參數。';
$messages['error_comments_not_enabled'] = '這個網誌站台關閉了迴響功能';
$messages['error_incorrect_search_terms'] = '搜尋關鍵字不正確';
$messages['error_no_search_results'] = '找不到與關鍵字相符的項目。';
$messages['error_no_albums_defined'] = '這個網誌站台沒有任何資資料夾。';

/////////////////                                          //////////////////
///////////////// STRINGS FOR THE ADMINISTRATION INTERFACE //////////////////
/////////////////                                          //////////////////

// login page
$messages['login'] = '登入';
$messages['welcome_message'] = '歡迎來到 pLog';
$messages['error_incorrect_username_or_password'] = '很抱歉，您輸入的帳號或密碼錯誤。';
$messages['error_dont_belong_to_any_blog'] = '很抱歉，您沒有使用系統中任何一個網誌站台的權限。';
$messages['logout_message'] = '您已經順利登出系統。';
$messages['logout_message_2'] = '請按 <a href="%1$s">這裡</a> 連結到 %2$s</a>.';
$messages['error_access_forbidden'] = '您目前沒有權限進入管理介面。請到這裡登入。';
$messages['username'] = '使用者名稱';
$messages['password'] = '使用者密碼';

// dashboard
$messages['dashboard'] = '管理面版';
$messages['recent_articles'] = '最近發表文章';
$messages['recent_comments'] = '最近發表迴響';
$messages['recent_trackbacks'] = '最近引用列表';
$messages['blog_statistics'] = '網誌統計';
$messages['total_posts'] = '文章總數';
$messages['total_comments'] = '迴響總數';
$messages['total_trackbacks'] = '引用總數';
$messages['total_viewed'] = '文章閱讀總數';
$messages['in'] = '於';

// menu options
$messages['newPost'] = '發表新文章';
$messages['Manage'] = '內容管理';
$messages['managePosts'] = '文章管理';
$messages['editPosts'] = '文章列表';
$messages['editArticleCategories'] = '編輯文章分類';
$messages['newArticleCategory'] = '新增文章分類';
$messages['manageLinks'] = '網站連結管理';
$messages['editLinks'] = '網站連結列表';
$messages['newLink'] = '新增網站連結';
$messages['editLink'] = '編輯網站連結';
$messages['editLinkCategories'] = '編輯網站連結分類';
$messages['newLinkCategory'] = '新增連結分類';
$messages['editLinkCategory'] = '編輯網站連結分類';
$messages['manageCustomFields'] = '管理自訂欄位';
$messages['blogCustomFields'] = '自訂欄位列表';
$messages['newCustomField'] = '新增自訂欄位';
$messages['resourceCenter'] = '檔案中心';
$messages['resources'] = '檔案列表';
$messages['newResourceAlbum'] = '新增資料夾';
$messages['newResource'] = '新增檔案';
$messages['controlCenter'] = '個人網誌設定';
$messages['manageSettings'] = '基本設定';
$messages['blogSettings'] = '網誌設定';
$messages['userSettings'] = '使用者設定';
$messages['pluginCenter'] = '外掛中心';
$messages['Stats'] = '統計資料';
$messages['manageBlogUsers'] = '管理網誌使用者';
$messages['newBlogUser'] = '新增網誌使用者';
$messages['showBlogUsers'] = '網誌使用者列表';
$messages['manageBlogTemplates'] = '管理網誌模版';
$messages['newBlogTemplate'] = '新增網誌模版';
$messages['blogTemplates'] = '網誌模版列表';
$messages['adminSettings'] = '全部站台管控';
$messages['Users'] = '使用者';
$messages['createUser'] = '新增使用者';
$messages['editSiteUsers'] = '管理使用者';
$messages['Blogs'] = '管理網誌';
$messages['createBlog'] = '建立網誌';
$messages['editSiteBlogs'] = '網誌站台管理';
$messages['Locales'] = '語系管理';
$messages['newLocale'] = '新增語系';
$messages['siteLocales'] = '語系檔案列表';
$messages['Templates'] = '模版管理';
$messages['newTemplate'] = '新增模版';
$messages['siteTemplates'] = '模版管理';
$messages['GlobalSettings'] = '全域設定';
$messages['editSiteSettings'] = '全域設定';
$messages['summarySettings'] = ' 摘要設定';
$messages['templateSettings'] = '模版設定';
$messages['urlSettings'] = '網址設定';
$messages['emailSettings'] = '電子郵件設定';
$messages['uploadSettings'] = '上傳設定';
$messages['helpersSettings'] = '說明工具設定';
$messages['interfacesSettings'] = '外部介面設定';
$messages['securitySettings'] = '系統安全設定';
$messages['bayesianSettings'] = '貝氏過濾設定';
$messages['resourcesSettings'] = '檔案中心設定';
$messages['searchSettings'] = '搜尋設定';
$messages['cleanUpSection'] = '清理垃圾專區';
$messages['cleanUp'] = '清理垃圾';
$messages['editResourceAlbum'] = '編輯檔案資料夾';
$messages['resourceInfo'] = '檔案資訊';
$messages['editBlog'] = '網誌管理';
$messages['Logout'] = '登出';

// new post
$messages['topic'] = '標題';
$messages['topic_help'] = '文章標題';
$messages['text'] = '內文';
$messages['text_help'] = '這部份的內容會在網誌首頁出現。';
$messages['extended_text'] = '延伸內文';
$messages['extended_text_help'] = '您在此輸入的文字只會在單篇彙整狀態下顯示，除非您在「設定」頁面中修改了設定。';
$messages['trackback_urls'] = '真實引用網址';
$messages['trackback_urls_help'] = '如果您要引用的文章沒有支援『引用網址自動搜尋』機制，請在這裡輸入他們的真實引用網址，並用斷行來隔開。';
$messages['post_slug'] = '短標題 ';
$messages['post_slug_help'] = '短標題將會用來建立簡潔的靜態連結網址';
$messages['date'] = '日期';
$messages['post_date_help'] = '文章發表日期';
$messages['status'] = '狀態';
$messages['post_status_help'] = '選取一個狀態';
$messages['post_status_published'] = '定稿';
$messages['post_status_draft'] = '草稿';
$messages['post_status_deleted'] = '已刪除';
$messages['categories'] = '文章分類';
$messages['post_categories_help'] = '選取一個或一個以上的分類';
$messages['post_comments_enabled_help'] = '啟用迴響留言功能';
$messages['send_notification_help'] = '如果有人對本文發表迴響，便向我發送電子郵件通知';
$messages['send_trackback_pings_help'] = '發送引用通告';
$messages['send_xmlrpc_pings_help'] = '送出 XMLRPC 通告';
$messages['save_draft_and_continue'] = '儲存草稿';
$messages['preview'] = '預覽';
$messages['add_post'] = '發表!';
$messages['error_saving_draft'] = '儲存草稿發生錯誤！';
$messages['draft_saved_ok'] = '草稿已順利儲存';
$messages['error_sending_request'] = '傳送要求時發生錯誤';
$messages['error_no_category_selected'] = '你沒有選擇任何分類';
$messages['error_missing_post_topic'] = '請輸入文章標題！';
$messages['error_missing_post_text'] = '請輸入文章內文！';
$messages['error_adding_post'] = '發表文章發生錯誤！';
$messages['post_added_not_published'] = '文章已順利新增，但尚未正式發表。';
$messages['post_added_ok'] = '文章已順利新增';
$messages['send_notifications_ok'] = '當有新的迴響或是引用時，便向我發送電子郵件通知';
$messages['bookmarklet'] = "書籤小程式";
$messages['bookmarklet_help'] = "把下面的連結拉到你工具列，或是按下滑鼠右鍵把連結加到我的最愛。";
$messages['blogit_to_plog'] = "把文章加到 pLog！";
$messages['original_post'] = "（原文）";

// send trackbacks
$messages['error_sending_trackbacks'] = '發送下列引用通知時產生錯誤。';
$messages['send_trackbacks_help'] = '請勾選您所要發送引用通告的網址。(請確定該網站支援引用通告的功能)';
$messages['send_trackbacks'] = '發送引用通知';
$messages['ping_selected'] = '向勾選的網址發送引用通知';
$messages['trackbacks_sent_ok'] = '引用通知已經成功發送到勾選的網址。';

// posts page
$messages['show_by'] = '更新列表';
$messages['category'] = '分類';
$messages['author'] = '作者';
$messages['post_status_all'] = '全部';
$messages['author_all'] = '全部作者';
$messages['search_terms'] = '搜尋關鍵字';
$messages['show'] = '更新';
$messages['delete'] = '刪除';
$messages['actions'] = '動作';
$messages['all'] = '全部';
$messages['category_all'] = '全部分類';
$messages['error_incorrect_article_id'] = '文章ID不正確。';
$messages['error_deleting_article'] = '在刪除文章"%s"時，發生錯誤。';
$messages['article_deleted_ok'] = '文章「%s」 已順利刪除。';
$messages['articles_deleted_ok'] = '文章「%s」 已順利刪除。';
$messages['error_deleting_article2'] = '刪除文章時發生錯誤 (id = %s) ';

// edit post page
$messages['update'] = '更新';
$messages['editPost'] = '編輯文章';
$messages['error_fetching_post'] = '讀取文章資料時發生錯誤';
$messages['post_updated_ok'] = '文章[%s]已成功更新。';
$messages['error_updating_post'] = '更新文章時發生錯誤';
$messages['notification_added'] = '當有新的迴響或是引用時，便向我發送電子郵件通知';
$messages['notification_removed'] = '當有新的迴響或是引用時，不要向我發送電子郵件通知';

// post comments
$messages['url'] = '網址';
$messages['comment_status_all'] = '全部迴響';
$messages['comment_status_spam'] = '垃圾迴響';
$messages['comment_status_nonspam'] = '正常迴響';
$messages['error_fetching_comments'] = '讀取文章迴響資料時，發生錯誤。';
$messages['error_deleting_comments'] = '在刪除迴響時發生錯誤或您沒有勾選任何要刪除的迴響。';
$messages['comment_deleted_ok'] = '「%s」這篇文章的迴響已順利刪除。';
$messages['comments_deleted_ok'] = '「%s」這篇文章的迴響已順利刪除。';
$messages['error_deleting_comment'] = '在刪除迴響「%s」時發生錯誤。';
$messages['error_deleting_comment2'] = '刪除迴響時發生錯誤 (id = %s)';
$messages['editComments'] = '編輯迴響';
$messages['mark_as_spam'] = '標示為垃圾迴響';
$messages['mark_as_no_spam'] = '標示為正常迴響';
$messages['error_incorrect_comment_id'] = '留言迴響ID不正確。';
$messages['error_marking_comment_as_spam'] = '在將本篇迴響留言標示為垃圾留言時發生錯誤。';
$messages['comment_marked_as_spam_ok'] = '您已經順利將本篇迴響留言標示為垃圾留言。';
$messages['error_marking_comment_as_nonspam'] = '在將本篇迴響留言標示為正常留言時發生錯誤。';
$messages['comment_marked_as_nonspam_ok'] = '您已經順利將本篇迴響留言標示為正常留言。';

// post trackbacks
$messages['blog'] = '網誌';
$messages['excerpt'] = '摘要';
$messages['error_fetching_trackbacks'] = '讀取引用資料時，發生錯誤。';
$messages['error_deleting_trackbacks'] = '在刪除引用時發生錯誤或是你沒有勾選任何要刪除的引用。';
$messages['error_deleting_trackback'] = '在刪除引用「%s」時發生錯誤';
$messages['error_deleting_trackback2'] = '刪除引用時發生錯誤 (id = %s)';
$messages['trackback_deleted_ok'] = '「%s」這篇引用已順利刪除。';
$messages['trackbacks_deleted_ok'] = '「%s」這篇引用已順利刪除。';
$messages['editTrackbacks'] = '編輯引用';

// post statistics
$messages['referrer'] = '逆向連結';
$messages['hits'] = '點擊數';
$messages['error_no_items_selected'] = '你沒有勾選任何要刪除的項目';
$messages['error_deleting_referrer'] = '在刪除逆向連結「%s」時發生錯誤';
$messages['error_deleting_referrer2'] = '刪除逆向連結時發生錯誤 (id = %s)';
$messages['referrer_deleted_ok'] = '「%s」這篇逆向連結已順利刪除。';
$messages['referrers_deleted_ok'] = '「%s」這篇逆向連結已順利刪除。';

// categories
$messages['posts'] = '文章列表';
$messages['show_in_main_page'] = '在首頁顯示';
$messages['error_incorrect_category_id'] = '文章分類ID錯誤或沒有選取任何項目';
$messages['error_category_has_articles'] = '無法刪除「%s」這個分類，因為該分類下還有文章。請先修改文章分類後，再重試一次。';
$messages['category_deleted_ok'] = '「%s」這個分類已順利刪除。';
$messages['categories_deleted_ok'] = '「%s」這個分類已順利刪除。';
$messages['error_deleting_category'] = '在刪除分類「%s」時發生錯誤';
$messages['error_deleting_category2'] = '刪除分類時發生錯誤 (id = %s)';
$messages['yes'] = '是';
$messages['no'] = '否';

// new category
$messages['name'] = '名稱';
$messages['category_name_help'] = '請輸入分類名稱';
$messages['description'] = '分類描述';
$messages['category_description_help'] = '請輸入詳細的分類描述';
$messages['show_in_main_page_help'] = '選取這個選項，則在這個分類下的文章會在首頁顯示。否則只有當瀏覽這個分類時才會看到文章。';
$messages['error_empty_name'] = '你必須輸入分類名稱';
$messages['error_empty_description'] = '你必須輸入分類描述';
$messages['error_adding_article_category'] = '在新增分類時發生錯誤。請檢查輸入的資料，再重試一次。';
$messages['category_added_ok'] = '分類名稱 「%s」已經順利新增';
$messages['add'] = '新增';
$messages['reset'] = '重新設置';

// update category
$messages['error_updating_article_category'] = '更新文章分類時發生錯誤。';
$messages['error_fetching_category'] = '讀取分類資料時發生錯誤。';
$messages['article_category_updated_ok'] = '分類 「%s」 已順利更新。';

// links
$messages['feed'] = 'Feed';
$messages['error_no_links_selected'] = '網站連結ID錯誤或您沒有選擇任何網站連結，無法刪除。';
$messages['error_incorrect_link_id'] = '網站連結ID不正確';
$messages['error_removing_link'] = '在刪除網站連結「%s」時發生錯誤。';
$messages['error_removing_link2'] = '在刪除網站連結時發生錯誤，id = %d';
$messages['link_deleted_ok'] = '網站連結「%s」已順利刪除。';
$messages['links_deleted_ok'] = '網站連結「%s」已順利刪除。';

// new link
$messages['link_name_help'] = '請輸入連結名稱。';
$messages['link_url_help'] = '連結網址';
$messages['link_description_help'] = '簡短描述';
$messages['link_feed_help'] = '你也可以提供任何的 RSS 或 Atom feeds 的連結。';
$messages['link_category_help'] = '選取一個網站連結分類';
$messages['error_adding_link'] = '新增網站連結時發生錯誤。請檢查輸入的資料，再重試一次。';
$messages['error_invalid_url'] = '網址不正確';
$messages['link_added_ok'] = '網站連結「%s」已順利新增';
$messages['bookmarkit_to_plog'] = "把書籤加到 pLog！";

// update link
$messages['error_updating_link'] = '更新網站連結時發生錯誤。請檢查輸入的資料，再重試一次。';
$messages['error_fetching_link'] = '讀取網站連結資料時發生錯誤。';
$messages['link_updated_ok'] = '網站連結「%s」已順利更新';

// link categories
$messages['links'] = '網站連結';
$messages['error_invalid_link_category_id'] = '網站連結分類ID不正確或沒有選擇連結分類，無法刪除。';
$messages['error_links_in_link_category'] = '無法刪除「%s」這個網站連結分類，因為該分類下還有連結。請先修改網站連結後，再重試一次。';
$messages['error_removing_link_category'] = '在刪除網站連結分類「%s」時發生錯誤。';
$messages['link_category_deleted_ok'] = '網站連結分類「%s」已順利刪除。';
$messages['link_categories_deleted_ok'] = '網站連結分類「%s」已順利刪除。';
$messages['error_removing_link_category2'] = '刪除網站連結分類時發生錯誤 (id = %s)';

// new link category
$messages['link_category_name_help'] = '網站連結分類名稱';
$messages['error_adding_link_category'] = '新增網站連結分類時發生錯誤。';
$messages['link_category_added_ok'] = '網站連結分類「%s」已順利新增';

// edit link category
$messages['error_updating_link_category'] = '更新網站連結分類時發生錯誤。請檢查輸入資料後，再試一次。';
$messages['link_category_updated_ok'] = '網站連結分類「%s」已順利更新';
$messages['error_fetching_link_category'] = '讀取網站連結分類資料時發生錯誤。';

// custom fields
$messages['type'] = '類型';
$messages['hidden'] = '隱藏';
$messages['fields_deleted_ok'] = '「%s」 自訂欄位已順利刪除';
$messages['field_deleted_ok'] = '「%s」 自訂欄位已順利刪除';
$messages['error_deleting_field'] = '在刪除自訂欄位「%s」時發生錯誤。';
$messages['error_deleting_field2'] = '刪除自訂欄位時發生錯誤 (id = %s)';
$messages['error_incorrect_field_id'] = '自訂欄位ID不正確';

// new custom field
$messages['field_name_help'] = '在發表文章時，用來顯示自訂欄位的名稱';
$messages['field_description_help'] = '自訂欄位的簡短描述';
$messages['field_type_help'] = '選擇一個合適的欄位類型';
$messages['field_hidden_help'] = '如果勾選隱藏，那麼在新增或修改文章時便不會出現該自訂欄位。這個功能主要提供給外掛程式專用。';
$messages['error_adding_custom_field'] = '新增自訂欄位時發生錯誤。請檢查輸入資料後，再試一次。';
$messages['custom_field_added_ok'] = '自訂欄位「%s」已順利更新';
$messages['text_field'] = '文字欄位(Text field)';
$messages['text_area'] = '文字區塊(Text box)';
$messages['checkbox'] = '核取方塊(Checkbox)';
$messages['date_field'] = '日期選擇(Date chooser)';

// edit custom field
$messages['error_fetching_custom_field'] = '讀取自訂欄位資料時發生錯誤。';
$messages['error_updating_custom_field'] = '更新自訂欄位時發生錯誤。請檢查輸入資料後，再試一次。';
$messages['custom_field_updated_ok'] = '自訂欄位「%s」已順利更新';

// resources
$messages['root_album'] = '主資料夾';
$messages['num_resources'] = '檔案數';
$messages['total_size'] = '檔案大小';
$messages['album'] = '資料夾';
$messages['error_incorrect_album_id'] = '資料夾ID不正確';
$messages['error_base_storage_folder_missing_or_unreadable'] = 'pLog無法建立檔案存檔所必需的資料夾。 原因可能是因為PHP以安全模式在執行或是你沒有足夠的權限上傳檔案。 你可以試著手動建立下列資料夾: <br/><br/>%s<br/><br/>如果這些資料夾已經存在，請確定你可以使用瀏覽器來進行讀寫。';
$messages['items_deleted_ok'] = '「%s」已順利刪除';
$messages['error_album_has_children'] = '「%s」資料夾裡面還有檔案或子資料夾。請將檔案或資料夾移除後在重試一次。';
$messages['item_deleted_ok'] = '「%s」已順利刪除';
$messages['error_deleting_album'] = '在刪除資料夾「%s」時發生錯誤。';
$messages['error_deleting_album2'] = '刪除資料夾時發生錯誤 (id = %s)';
$messages['error_deleting_resource'] = '在刪除檔案「%s」時發生錯誤。';
$messages['error_deleting_resource2'] = '刪除檔案時發生錯誤 (id = %s)';
$messages['error_no_resources_selected'] = '沒有選擇要刪除的項目。';
$messages['resource_deleted_ok'] = '檔案：「%s」 已順利刪除';
$messages['album_deleted_ok'] = '資料夾：「%s」 已順利刪除';
$messages['add_resource'] = '新增檔案 (原圖)';
$messages['add_resource_preview'] = '新增檔案預覽 (小圖)';
$messages['add_resource_medium'] = '新增檔案預覽 (中圖)';
$messages['add_album'] = '新增資料夾';

// new album
$messages['album_name_help'] = '資料夾簡短名稱';
$messages['parent'] = '上層目錄';
$messages['no_parent'] = '頂端目錄';
$messages['parent_album_help'] = '使用這個選項來安排子資料夾，同時讓你的檔案放置更有組織。';
$messages['album_description_help'] = '對資料夾內容做詳細的描述說明。';
$messages['error_adding_album'] = '新增資料夾時發生錯誤。請檢查輸入資料後，再試一次。';
$messages['album_added_ok'] = '資料夾：「%s」 已順利新增。';

// edit album
$messages['error_incorrect_album_id'] = '資料夾ID不正確。';
$messages['error_fetching_album'] = '讀取資料夾資料時發生錯誤。';
$messages['error_updating_album'] = '更新資料夾時發生錯誤。請檢查輸入資料後，再試一次。';
$messages['album_updated_ok'] = '資料夾「%s」已順利更新';
$messages['show_album_help'] = '取消勾選，這個資料夾將不會出現在網誌資料夾列表中。';

// new resource
$messages['file'] = '檔案';
$messages['resource_file_help'] = '下面的檔案將會新增到網誌的檔案中心。如果你要同時上傳多個檔案，請使用下方「新增上傳欄位」的連結來新增欄位。';
$messages['add_field'] = '新增上傳欄位';
$messages['resource_description_help'] = '關於這個檔案內容的詳細描述。';
$messages['resource_album_help'] = '選擇你想將檔案上傳到那個資料夾。';
$messages['error_no_resource_uploaded'] = '你並未選擇任何要上傳的檔案。';
$messages['resource_added_ok'] = '檔案：「%s」已順利新增。';
$messages['error_resource_forbidden_extension'] = '無法新增檔案，因為用了系統不允許的副檔名。';
$messages['error_resource_too_big'] = '無法新增檔案，因為檔案太大了。';
$messages['error_uploads_disabled'] = '無法新增檔案，因為伺服器管理員關閉了這項功能。';
$messages['error_quota_exceeded'] = '無法新增檔案，因為已經超過容許的檔案容量限度。';
$messages['error_adding_resource'] = '在新增檔案時發生錯誤。';

// edit resource
$messages['editResource'] = '編輯檔案';
$messages['resource_information_help'] = '下面是一些與這個檔案有關的資訊';
$messages['information'] = '檔案資訊';
$messages['size'] = '檔案大小';
$messages['format'] = '檔案格式';
$messages['dimensions'] = '維度';
$messages['bits_per_sample'] = '樣本位元率';
$messages['sample_rate'] = '取樣比例';
$messages['number_of_channels'] = '頻道數目';
$messages['legnth'] = '長度';
$messages['thumbnail_format'] = '縮圖格式';
$messages['regenerate_preview'] = '重新產生預覽縮圖';
$messages['error_fetching_resource'] = '讀取檔案資訊時發生錯誤。';
$messages['error_updating_resource'] = '更新檔案時發生錯誤。';
$messages['resource_updated_ok'] = '檔案：「%s」已順利更新。';

// blog settings
$messages['blog_link'] = '網誌站台網址';
$messages['blog_link_help'] = '不能修改';
$messages['blog_name_help'] = '站台名稱';
$messages['blog_description_help'] = '站台相關說明';
$messages['language'] = '語系';
$messages['blog_language_help'] = '系統文字以及日期所使用的語言';
$messages['max_main_page_items'] = '首頁文章數目';
$messages['max_main_page_items_help'] = '您要在首頁顯示幾篇文章？';
$messages['max_recent_items'] = '近期文章數目';
$messages['max_recent_items_help'] = '您要在「近期文章列表」顯示幾篇文章？';
$messages['template'] = '模版';
$messages['choose'] = '預覽選取...';
$messages['blog_template_help'] = '請選擇您的網誌站台所要使用的外觀樣式模版';
$messages['use_read_more'] = '在文章使用「閱讀全文...」連結';
$messages['use_read_more_help'] = '如果設定為「是」，那麼您在首頁的文章就會自動產生「閱讀全文」連結，這個連結會連到單篇文章的靜態固定網址，再顯示全文的「延伸內文部分」。';
$messages['enable_wysiwyg'] = '啟用所見即所得（WYSIWYG）文章編輯。';
$messages['enable_wysiwyg_help'] = '如果您想要立刻看到您的編輯結果，請設定為「是」。這個功能只有在使用者使用Internet Explorer 5.5或Mozilla 1.3b以上的版本才有效果。';
$messages['enable_comments'] = '開放所有文章的迴響留言權限';
$messages['enable_comments_help'] = '如果設定為「是」，那麼您便可以讓其他使用者針對您的文章發表迴響留言。這個設定會套用到您的全部文章上。';
$messages['show_future_posts'] = '在日曆顯示未來文章。';
$messages['show_future_posts_help'] = '如果設定為「是」，那麼發表日期設定在未來的文章將會出現在日曆上。';
$messages['comments_order'] = '迴響留言排序方式';
$messages['comments_order_help'] = '如果您設定成「舊的在前」，那麼留言就會從舊到新排序，如果設定成「新的在前」，則反之，留言從新到舊排序出現。';
$messages['oldest_first'] = '舊的在前';
$messages['newest_first'] = '新的在前';
$messages['categories_order'] = '分類排列順序';
$messages['categories_order_help'] = '首頁分類排列方式。';
$messages['most_recent_updated_first'] = '最近更新在前';
$messages['alphabetical_order'] = '依英文字母順序排列';
$messages['reverse_alphabetical_order'] = '依英文字母順序反向排列';
$messages['most_articles_first'] = '最多文章在前';
$messages['link_categories_order'] = '網站連結分類排列順序';
$messages['link_categories_order_help'] = '首頁網站連結分類排列方式。';
$messages['most_links_first'] = '最多連結在前';
$messages['most_links_last'] = '最多連結在後';
$messages['time_offset'] = '網誌伺服器與您所在地的時間差';
$messages['time_offset_help'] = '您可以用這個設定，調整您所發表的文章的時間。這個功能在伺服器主機與您分別在不同時區時相當有用。如果您將時間差設定為「+3 小時」，那麼系統就會將文章的發表時間調整成您所設定的時間。';
$messages['close'] = '關閉';
$messages['select'] = '選擇';
$messages['error_updating_settings'] = '更新網誌設定時發生錯誤，請檢查輸入資料後在重試一次。';
$messages['error_invalid_number'] = '數目格式不正確。';
$messages['error_incorrect_time_offset'] = '網誌伺服器與您所在地的時間差不正確';
$messages['blog_settings_updated_ok'] = '網誌設定更新已順利完成。';
$messages['hours'] = '小時';

// user settings
$messages['username_help'] = '公開的使用者名稱，無法更改。';
$messages['full_name'] = '全名';
$messages['full_name_help'] = '完整的使用者名稱';
$messages['password_help'] = '如果你想更改密碼請輸入新密碼及確認密碼；如果您不想修改密碼，留白便可。';
$messages['confirm_password'] = '確認密碼';
$messages['email'] = '電子郵件';
$messages['email_help'] = '如果您想要使用電子郵件通知信功能，請填寫正確的信箱。';
$messages['bio'] = '自我介紹';
$messages['bio_help'] = '您可以在此填寫一些您的自我介紹，或是不填也可以。';
$messages['picture'] = '個人圖像';
$messages['user_picture_help'] = '請從上傳到網誌中的圖片選取一張做為你的個人大頭貼。';
$messages['error_invalid_password'] = '密碼太短或密碼錯誤。';
$messages['error_passwords_dont_match'] = '很抱歉，您輸入的兩次密碼不相符。';
$messages['error_incorrect_email_address'] = '電子郵件信箱格式錯誤。';
$messages['error_updating_user_settings'] = '更新個人資料時發生錯誤。請檢查輸入的資料後在重試一次。';
$messages['user_settings_updated_ok'] = '使用者設定已順利更新。';
$messages['resource'] = '檔案';

// plugin centre
$messages['identifier'] = '代號';
$messages['error_plugins_disabled'] = '很抱歉，外掛目前停用中。';

// blog users
$messages['revoke_permissions'] = '取消使用權限。';
$messages['error_no_users_selected'] = '你沒有選取任何使用者。';
$messages['user_removed_from_blog_ok'] = '使用者「%s」已經順利從本站作者行列中刪除。';
$messages['users_removed_from_blog_ok'] = '使用者「%s」已經順利從本站作者行列中刪除。';
$messages['error_removing_user_from_blog'] = '在將使用者「%s」從本網誌站台作者行列中移除時發生錯誤。';
$messages['error_removing_user_from_blog2'] = '在將使用者從本網誌站台作者行列中移除時發生錯誤。(id:%s)';

// new blog user
$messages['new_blog_username_help'] = '您可以用以下表單，將其他使用者加入您的網誌作者行列中。新增加的使用者只能存取管理中心及檔案中心。';
$messages['send_notification'] = '發送通知';
$messages['send_user_notification_help'] = '用電子郵件通知這名使用者。';
$messages['notification_text'] = '通知內容';
$messages['notification_text_help'] = '請輸入您要通知這位使用者的信件內容';
$messages['error_adding_user'] = '在加入使用者時發生問題，請檢查輸入的資料在重試一次。';
$messages['error_empty_text'] = '通知內容不可以是空白。';
$messages['error_adding_user'] = '在加入使用者時發生問題，請檢查輸入的資料在重試一次。';
$messages['error_invalid_user'] = '使用者「%s」帳號不正確或該使用者不存在。';
$messages['user_added_to_blog_ok'] = '使用者「%s」已經順利加入作者行列。';

// blog templates
$messages['error_no_templates_selected'] = '您沒有選擇任何模版。';
$messages['error_template_is_current'] = '「%s」模版無法刪除，該模版正在使用中。';
$messages['error_removing_template'] = '刪除模版 「%s」時發生錯誤。';
$messages['template_removed_ok'] = ' 模版 「%s」已順利刪除。';
$messages['templates_removed_ok'] = '模版 「%s」已順利刪除。';

// new blog template
$messages['template_installed_ok'] = '新的模版設置「 %s」已經順利安裝完成。';
$messages['error_installing_template'] = '在安裝模版設置「 %s」時發生錯誤。';
$messages['error_missing_base_files'] = '在這個模版設置中有些基本檔案不見了。';
$messages['error_add_template_disabled'] = '本站不允許使用者新增模版檔案。';
$messages['error_must_upload_file'] = '您必須上傳檔案。';
$messages['error_uploads_disabled'] = '本站已關閉檔案上傳功能。';
$messages['error_no_new_templates_found'] = '找不到新的模版設置。';
$messages['error_template_not_inside_folder'] = '模版檔案必須放在與模版同名的目錄當中。';
$messages['error_missing_base_files'] = '在這個模版設置中有些基本檔案不見了。';
$messages['error_unpacking'] = '在解壓縮時發生錯誤。';
$messages['error_forbidden_extensions'] = '在這個模版設置中有些檔案禁止存取。';
$messages['error_creating_working_folder'] = '在檢查模版設置時發生錯誤。';
$messages['error_checking_template'] = '模版設置發生錯誤 (code = %s)';
$messages['template_package'] = '模版安裝包';
$messages['blog_template_package_help']  = '您可以用這個表單，上傳一個新的模版安裝包，該模版將只有你的網誌能夠使用。如果您沒有辦法用瀏覽器上傳，請手動上傳該模版並將它放置於你的網誌模板資料夾<b>%s</b>下,然後按下 "<b>掃描模版</b>" 按紐。 pLog 會掃描該資料夾並自動新增所找到的新模版。';
$messages['scan_templates'] = '掃描模版';

// site users
$messages['user_status_active'] = '啟用';
$messages['user_status_disabled'] = '停用';
$messages['user_status_all'] = '所有狀態';
$messages['user_status_unconfirmed'] = '尚未確認';
$messages['error_invalid_user2'] = '使用者代號「%s」不存在。';
$messages['error_deleting_user'] = '在停用使用者帳號「%s」時發生錯誤。';
$messages['user_deleted_ok'] = '使用者帳號「%s」已順利停用。';
$messages['users_deleted_ok'] = '使用者帳號「%s」已順利停用。';

// create user
$messages['user_added_ok'] = '新使用者帳號「%s」已順利新增。';
$messages['error_incorrect_username'] = '使用者名稱不正確或已經有人註冊相同的名稱了。';
$messages['user_status_help'] = '使用者帳號目前狀態';
$messages['user_blog_help'] = '使用者預設的網誌';
$messages['none'] = '無';

// edit user
$messages['error_invalid_user'] = '使用者ID不正確或使用者不存在。';
$messages['error_updating_user'] = '更新使用者設定時發生錯誤。請檢查輸入資料後再重試一次。';
$messages['blogs'] = '網誌';
$messages['user_blogs_help'] = '使用者擁有或可以存取的網誌。';
$messages['site_admin'] = '全站系統管理';
$messages['site_admin_help'] = '如果使用者擁有全站系統管理權限，他就可以看見[站台設定]區域，可以進行全站的管理工作。';
$messages['user_updated_ok'] = '使用者帳號「%s」已順利更新。';

// site blogs
$messages['blog_status_all'] = '所有狀態';
$messages['blog_status_active'] = '啟用';
$messages['blog_status_disabled'] = '停用';
$messages['blog_status_unconfirmed'] = '尚未確認';
$messages['owner'] = '管理員';
$messages['quota'] = '檔案限度';
$messages['bytes'] = 'bytes';
$messages['error_no_blogs_selected'] = '您必須要選擇您所想要刪除的網誌站台。';
$messages['error_blog_is_default_blog'] = '「%s」是系統預設網誌站台，無法刪除。';
$messages['blog_deleted_ok'] = '「%s」網誌站台已順利刪除。';
$messages['blogs_deleted_ok'] = '「%s」網誌站台已順利刪除。';
$messages['error_deleting_blog'] = '在刪除「%s」這個網誌站台時發生錯誤。';
$messages['error_deleting_blog2'] = '在刪除網誌站台時發生錯誤。(ID:%s)';

// create blog
$messages['error_adding_blog'] = '在新增網誌時發生錯誤。請檢查輸入的資料在重試一次。';
$messages['blog_added_ok'] = '新的網誌站台「%s」已成功加入資料庫中。';

// edit blog
$messages['blog_status_help'] = '網誌狀態';
$messages['blog_owner_help'] = '網誌站台管理者，將擁有完整的權限來修改網誌設定。';
$messages['users'] = '使用者';
$messages['blog_quota_help'] = '檔案容量限度(單位：bytes)。設為0或空白將使用系統的全域檔案限度做為預設值。';
$messages['blog_users_help'] = '可以存取這個網誌的使用者。請從左邊選取使用者將他移到右邊提供該使用者存取網誌的權限。';
$messages['edit_blog_settings_updated_ok'] = '網誌 「%s」已順利更新。';
$messages['error_updating_blog_settings'] = '更新網誌站台 「%s」時發生錯誤。';
$messages['error_incorrect_blog_owner'] = '要設定為網誌站台管理員的使用者帳號不存在。';
$messages['error_fetching_blog'] = '讀取網誌資料時發生錯誤。';
$messages['error_updating_blog_settings2'] = '更新網誌時發生錯誤。請檢查輸入資料在重試一次。';
$messages['add_or_remove'] = '新增或移除使用者';

// site locales
$messages['locale'] = '語系';
$messages['locale_encoding'] = '編碼方式';
$messages['locale_deleted_ok'] = '「%s」語系已順利刪除。';
$messages['error_no_locales_selected'] = '您沒有選擇要刪除的語系。';
$messages['error_deleting_only_locale'] = '您不可以刪除這個語系檔案，因為這是系統中目前唯一的語系檔案。';
$messages['locales_deleted_ok']= '「%s」語系已順利刪除。';
$messages['error_deleting_locale'] = '在刪除「%s」語系時發生錯誤。';
$messages['error_locale_is_default'] = '您不可以刪除「%s」語系，因為這是系統目前的預設語系。';

// add locale
$messages['error_invalid_locale_file'] = '這個檔案並不是正確的語系檔案。';
$messages['error_no_new_locales_found'] = '找不到新的語系檔案。';
$messages['locale_added_ok'] = '語系「%s」已經順利新增';
$messages['error_saving_locale'] = '在將新的語系檔案儲存至語系檔案目錄時發生錯誤。請檢查檔案目錄的寫入權限是否正確。';
$messages['scan_locales'] = '掃描語系檔';
$messages['add_locale_help'] = '您可以用這個表單，上傳一個新的語系檔。如果您沒有辦法用瀏覽器上傳，請手動上傳該檔案並將它放置於 <b>./locales/</b>下,然後按下 "<b>掃描語系檔</b>" 按紐。 pLog 會掃描該資料夾並自動新增所找到的語系檔。 ';

// site templates
$messages['error_template_is_default'] = '您不可以刪除「%s」模版，因為這是新網誌目前的預設模版。';

// add template
$messages['global_template_package_help'] = '您可以用這個表單，上傳一個新的模版安裝包，該模版將提供給網站上所有網誌使用。如果您沒有辦法用瀏覽器上傳，請手動上傳該模版並將它放置於你的網誌模板資料夾<b>%s</b>下,然後按下 "<b>掃描模版</b>" 按紐。 pLog 會掃描該資料夾並自動新增所找到的新模版。';

// global settings
$messages['site_config_saved_ok'] = '站台設定已順利儲存。';
$messages['error_saving_site_config'] = '在儲存站台設置時發生問題。';
/// general settings
$messages['help_comments_enabled'] = '啟用或停用全站的迴響留言功能。';
$messages['help_beautify_comments_text'] = '在使用者發表迴響留言時，使用他所輸入的文字格式。';
$messages['help_temp_folder'] = 'pLog系統用來儲存暫存檔案用的目錄。';
$messages['help_base_url'] = '這個網誌安裝的網址，這個項目務必要正確，請小心輸入。';
$messages['help_subdomains_enabled'] = '啟用或停用次網域設定。';
$messages['help_subdomains_base_url'] = '當次網域設定啟用時，這個網址將用來替代系統網址。使用 {blogname}來取得網誌名稱及{username}取得網誌使用者名稱，用來產生連結到網誌的網址。';
$messages['help_include_blog_id_in_url'] = '當[次網域]功能啟用及[一般網址]功能啟用時才有意義。強迫產生的網址不要包含"blogId"這個參數。請不要變更設定值，除非你知道你在做什麼。';
$messages['help_script_name'] = '如果你將index.php更改為其它名稱的話，請在下方輸入更改後的檔案名稱。';
$messages['help_show_posts_max'] = '在首頁顯示文章數的預設值。';
$messages['help_recent_posts_max'] = '在首頁「近期文章」列表中顯示文章數的預設值。';
$messages['help_save_drafts_via_xmlhttprequest_enabled'] = '當XmlHttpRequest功能被啟用時，將可以使用Javascript來儲存文章草稿。';
$messages['help_locale_folder'] = '語系檔案所在目錄。';
$messages['help_default_locale'] = '在建立新網誌站台時預設使用的語系。';
$messages['help_default_blog_id'] = '預設網誌ID';
$messages['help_default_time_offset'] = '預設的網站伺服器時間差。';
$messages['help_html_allowed_tags_in_comments'] = '在發表迴響評論時可以使用的HTML語法標籤。';
$messages['help_referer_tracker_enabled'] = '是否使用文章逆向連結功能。(停用此功能可以提高系統效能。)';
$messages['help_show_more_enabled'] = '啟用或停用「閱讀全文」連結功能。';
$messages['help_update_article_reads'] = '是否使用內建的點閱率統計工具計算每篇文章的點閱次數。(停用此功能可以提高系統效能。)';
$messages['help_update_cached_article_reads'] = '在快取功能開啟的情形下，是否使用內建的點閱率統計工具計算每篇文章的點閱次數。';
$messages['help_xmlrpc_ping_enabled'] = '在系統中有人發表新文章時，是否送出 XMLRPC 通告。';
$messages['help_send_xmlrpc_pings_enabled_by_default'] = '預設啟用該功能。當有新文章發表或更新時，是否送出 XMLRPC 通告。。';
$messages['help_xmlrpc_ping_hosts'] = 'XMLRPC 通告列表，如果您要向多處發送通告，請在文字框下面加入通告發送網址，每個網址一行。';
$messages['help_trackback_server_enabled'] = '是否接受從站外傳來的引用通告（TrackBack）。';
$messages['help_htmlarea_enabled'] = '啟用或停用即視即所得（WYSIWYG）文章編輯。';
$messages['help_plugin_manager_enabled'] = '啟用或停用外掛程式。';
$messages['help_minimum_password_length'] = '密碼最短需要多少字元。';
$messages['help_xhtml_converter_enabled'] = '如果啟用此功能，pLog會試著將所有的HTML轉換為適當的XHTML。';
$messages['help_xhtml_converter_aggressive_mode_enabled'] = '如果啟用此功能，pLOG會試著將HTML進一步轉換為XHTML，但這樣可能會導致更多的錯誤。';
$messages['help_session_save_path'] = '此設定將使用PHP的session_save_path()函數，來更改pLog存放session的資料夾。請確定該資料夾可以透過網站伺服器進行寫入動作。如果你要使用PHP預設的session存放路徑，請將此設定空白。';
// summary settings
$messages['help_summary_page_show_max'] = '在摘要頁面中要顯示多少項目。此選項控制在摘要頁面中列出的所有項目。(包括最新文章數目、最活躍網誌等)';
$messages['help_summary_blogs_per_page'] = '在[網誌列表]中每一頁要顯示多少網誌。';
$messages['help_forbidden_usernames'] = '列出所有不允許註冊的使用者名稱。';
$messages['help_force_one_blog_per_email_account'] = '一個電子郵件是否只能註冊一個網誌';
$messages['help_summary_show_agreement'] = '在使用者進行註冊動作之前，是否顯示並確認使用者同意服務條款。';
$messages['help_need_email_confirm_registration'] = '是否啟用電子郵件的確認連結來啟用帳號。';
$messages['help_summary_disable_registration'] = '是否關閉使用者註冊新網誌的功能。';
// templates
$messages['help_template_folder'] = '模版檔案的所在目錄路徑。';
$messages['help_default_template'] = '在新建網誌站台時，預設使用的模版。';
$messages['help_users_can_add_templates'] = '使用者是否可以在模版設置當中，加入屬於自己專屬需求的檔案。';
$messages['help_template_compile_check'] = '停用此功能時，Smarty只有在模版有更改時才會重新產生頁面。停用此功能可以提高系統效能。';
$messages['help_template_cache_enabled'] = '啟用模版快取功能。啟用此功能，快取的版本將會持續被使用，而不需要對資料庫進行資料存取的動作。';
$messages['help_template_cache_lifetime'] = '快取存活時間(單位：秒).設為-1快取將永不過期，或設為0來關閉快取功能。';
$messages['help_template_http_cache_enabled'] = '是否啟用對HTTP連結要求的快取支援。啟用此功能pLog只會傳送必要的內容，可以節省網路頻寬。';
$messages['help_allow_php_code_in_templates'] = '允許在Smarty 模版中的{php}...{/php}區塊置入原生PHP程式碼(native PHP code)';
// urls
$messages['help_request_format_mode'] = '如果您設定為「一般網址」，那麼系統所呈現的網址，就會使用將參數以get方式傳入的一般方式。如果您選用「讓搜尋引擎易於搜尋的簡潔網址」，那麼就會讓網址變得簡潔，搜尋引擎也容易取得您網站上的內容，不過您的Apache伺服器必須要能夠接受.htaccess檔案中的覆寫設定。如果使用自訂網址，請調整下方的設定。';
$messages['plain'] = '一般網址';
$messages['search_engine_friendly'] = '讓搜尋引擎易於搜尋的簡潔網址';
$messages['custom_url_format'] = '自訂網址';
$messages['help_permalink_format'] = '當使用自訂網址時，靜態連結網址格式。';
$messages['help_category_link_format'] = '當使用自訂網址時，網站連結分類網址格式。';
$messages['help_blog_link_format'] = '當使用自訂網址時，網誌連結網址格式。';
$messages['help_archive_link_format'] = '當使用自訂網址時，文章彙整連結網址格式。';
$messages['help_user_posts_link_format'] = '當使用自訂網址時，特定使用者發表的文章連結網址格式。';
$messages['help_post_trackbacks_link_format'] = '當使用自訂網址時，引用連結網址格式。';
$messages['help_template_link_format'] = '當使用自訂網址時，自訂靜態模版連結網址格式。';
$messages['help_album_link_format'] = '當使用自訂網址時，資料夾連結網址格式。';
$messages['help_resource_link_format'] = '當使用自訂網址時，檔案連結網址格式。';
$messages['help_resource_preview_link_format'] = '當使用自訂網址時，檔案預覽連結網址格式。';
$messages['help_resource_medium_size_preview_link_format'] = '當使用自訂網址時，中型檔案預覽連結網址格式。';
$messages['help_resource_download_link_format'] = '當使用自訂網址時，檔案下載連結網址格式。';
// email
$messages['help_check_email_address_validity'] = '在使用者註冊申請新的網誌站台時，是否要認證他所填寫的電子郵件信箱是否正確。';
$messages['help_email_service_enabled'] = '使用或停用用來寄送通知信函的電子郵件服務。';
$messages['help_post_notification_source_address'] = '系統通知信函的寄件人電子郵件信箱。';
$messages['help_email_service_type'] = '用來寄送電子郵件的方式，請在各種方法選擇其中之一。';
$messages['help_smtp_host'] = '如果您選用SMTP寄送電子郵件，請輸入您要用來發送郵件的主機。';
$messages['help_smtp_port'] = '前項設定的SMTP主機連接埠（port）';
$messages['help_smtp_use_authentication'] = 'SMTP主機是否需要授權認證。如果需要的話，請繼續填寫下面兩項設定。';
$messages['help_smtp_username'] = '如果SMTP主機需要授權認證，請填寫使用者帳號。';
$messages['help_smtp_password'] = '如果SMTP主機需要授權認證，請填寫使用者密碼。';
// helpers
$messages['help_path_to_tar'] = '「tar」指令所在目錄。(用來解壓縮使用 .tar.gz 或 .tar.gz2格式壓縮的模版包)';
$messages['help_path_to_gzip'] = '「gzip」指令所在目錄。(用來解壓縮使用 .tar.gz 格式壓縮的模版包)';
$messages['help_path_to_bz2'] = '「bzip2」指令所在目錄。(用來解壓縮使用 .tar.gz2格式壓縮的模版包)';
$messages['help_path_to_unzip'] = '「unzip」指令所在目錄。(用來解壓縮使用 .zip格式壓縮的模版包)';
$messages['help_unzip_use_native_version'] = '使用PHP內建的版本來解壓縮 .zip 的檔案';
// uploads
$messages['help_uploads_enabled'] = '啟用或停用上傳檔案功能。這個功能會影響到使用者能否上傳新的模版安裝包，以及在模版中添加新的檔案。';
$messages['help_maximum_file_upload_size'] = '使用者上傳檔案大小的上限。';
$messages['help_upload_forbidden_files'] = '禁止使用者上傳的檔案類型。如果有多個不同的檔案類型，請在不同的類型間用空白區隔。也可使用\'*\' and \'?\'的方式。';
// interfaces
$messages['help_xmlrpc_api_enabled'] = '啟用或停用XMLRPC介面。XMLRPC介面的用途是可以讓您使用桌面網誌寫作工具出版網誌文章。';
$messages['help_rdf_enabled'] = '啟用或停用產生RSS新聞交換檔案功能。';
$messages['help_default_rss_profile'] = '預設的RSS/RDF新聞交換格式';
// security
$messages['help_security_pipeline_enabled'] = '啟用系統安全功能。如果您關閉了這個選項，那麼所有的系統安全功能都會停用，如果您想要關閉一些系統安全功能，建議您將這個設定設為開啟，然後在以下的選項中，逐一停用我們不需要的系統安全功能項目。';
$messages['help_ip_address_filter_enabled'] = '啟用IP位置過濾。您可以用這個功能阻擋某些主機瀏覽本站。';
$messages['help_content_filter_enabled'] = '使用以正規表示式為基礎的簡單內容過濾機制，用簡單的關鍵字過濾不當內容。不過建議您，採用貝氏過濾會是比較好的方案。';
$messages['help_maximum_comment_size'] = '迴響留言的內文字元數上限。';
// bayesian filter
$messages['help_bayesian_filter_enabled'] = '啟用或停用貝氏過濾機制。';
$messages['help_bayesian_filter_spam_probability_treshold'] = '被認定為是垃圾迴響留言的數值下限。設定範圍在0.01到0.99之間。';
$messages['help_bayesian_filter_nonspam_probability_treshold'] = '設定迴響留言是正常留言的數值上限。任何符合在前一設定與本設定之間數值的留言迴響，都會被認定是正常而非垃圾留言。';
$messages['help_bayesian_filter_min_length_token'] = '在多少字元數以上才會啟動貝氏過濾機制。';
$messages['help_bayesian_filter_max_length_token'] = '貝氏過濾機制可以處理的最多字元數上限。';
$messages['help_bayesian_filter_number_significant_tokens'] = '在訊息中必須要有多少顯著有意義的文字。';
$messages['help_bayesian_filter_spam_comments_action'] = '處理垃圾留言的方法。您可以直接清理這些垃圾留言（不會存進資料庫中），或是保存這些垃圾留言，但是加上垃圾留言標示標示。建議當您的過濾機制在還沒有妥善建立阻擋規則時，先用後者。';
$messages['keep_spam_comments'] = '保存垃圾迴響';
$messages['throw_away_spam_comments'] = '清理垃圾迴響';
// resources
$messages['help_resources_enabled'] = '啟用或關閉檔案中心功能。';
$messages['help_resources_folder'] = '用來存放檔案中心的目錄。這個目錄不一定要在網頁目錄下。如果您不希望別人直接瀏覽您的檔案目錄，您可以把這個目錄設定到其他地方。';
$messages['help_thumbnail_method'] = '您用來產生縮圖的後端系統。如果使用PHP，GD的支援是必須的。';
$messages['help_path_to_convert'] = '用來產生縮圖的系統工具路徑。如果您要使用ImageMagick，那麼您必須接著填寫ImageMagick的工具程式路徑。';
$messages['help_thumbnail_format'] = '在產生預覽縮圖時所使用的預設格式。如果您選擇「與原始影像相同」，那麼預覽縮圖就會儲存成與原始影像相同的格式。';
$messages['help_thumbnail_height'] = '縮圖預設高度。';
$messages['help_thumbnail_width'] = '縮圖預設寬度。';
$messages['help_medium_size_thumbnail_height'] = '中型縮圖預設高度';
$messages['help_medium_size_thumbnail_width'] = '中型縮圖預設寬度';
$messages['help_thumbnails_keep_aspect_ratio'] = '縮圖是否保持原始比例。';
$messages['help_thumbnail_generator_force_use_gd1'] = '是否強迫pLog使用GD1函數來產生縮圖';
$messages['help_thumbnail_generator_user_smoothing_algorithm'] = '是否使用演算法來使縮圖畫面更平順。只有當縮圖產生工具是GD時才適用。';
$messages['help_resources_quota'] = '全域檔案容量限額';
$messages['help_resource_server_http_cache_enabled'] = '當HTTP請求檔頭為"If-Modified-Since"啟用快取支援。啟用此功能來節省網路頻寬。';
$messages['help_resource_server_http_cache_lifetime'] = '客戶端可以使用快取檔案的時間(單位：千分之一秒)';
$messages['same_as_image'] = '與原始影像相同';
// search
$messages['help_search_engine_enabled'] = '啟用或停用搜尋引擎';
$messages['help_search_in_custom_fields'] = '搜尋包含自訂欄位';
$messages['help_search_in_comments'] = '搜尋包含迴響';

// cleanup
$messages['purge'] = '清除';
$messages['cleanup_spam'] = '清除垃圾迴響';
$messages['cleanup_spam_help'] = '這會清除所有被使用者標示為垃圾的迴響。被清除的垃圾迴響將無法回復。';
$messages['spam_comments_purged_ok'] = '垃圾迴響已順利清除';
$messages['cleanup_posts'] = '清除文章';
$messages['cleanup_posts_help'] = '這會清除所有被使用者標示為刪除的文章。 被清除的文章將無法回復。';
$messages['posts_purged_ok'] = '文章已順利清除';

/// summary ///
// front page
$messages['summary'] = '摘要';
$messages['register'] = '註冊';
$messages['summary_welcome'] = '歡迎!';
$messages['summary_most_active_blogs'] = '最活躍網誌';
$messages['summary_most_commented_articles'] = '最多迴響文章';
$messages['summary_most_read_articles'] = '最多人閱讀文章';
$messages['password_forgotten'] = '忘記密碼?';
$messages['summary_newest_blogs'] = '最新建立的網誌';
$messages['summary_latest_posts'] = '最新發表的文章';
$messages['summary_search_blogs'] = '搜尋網誌';

// blog list
$messages['updated'] = '更新';
$messages['total_reads'] = '瀏覽總次數';

// blog profile
$messages['blog'] = '網誌';
$messages['latest_posts'] = '最新發表的文章';

// registration
$messages['register_step0_title'] = '服務條款';
$messages['agreement'] = '同意條款';
$messages['decline'] = '不接受';
$messages['accept'] = '接受';
$messages['read_service_agreement'] = '請詳細閱讀服務條款，如果你同意以上條款請按下接受鍵。';
$messages['register_step1_title'] = '建立使用者 [1/4]';
$messages['register_step1_help'] = '首先你必須先建立一個使用者帳號來取得一個網誌，這個使用者擁有該網誌，同時可以進行所有網誌設定功能。';
$messages['register_next'] = '下一步';
$messages['register_back'] = '上一步';
$messages['register_step2_title'] = '建立網誌 [2/4]';
$messages['register_blog_name_help'] = '幫你的網誌取個名稱';
$messages['register_step3_title'] = '選擇一個模版[3/4]';
$messages['step1'] = '步驟 1';
$messages['step2'] = '步驟 2';
$messages['step3'] = '步驟 3';
$messages['register_step3_help'] = '請選擇一個模版做為網誌的預設模版。只要你不喜歡，你可以隨時把它換掉。';
$messages['error_must_choose_template'] = '請選擇一個模版';
$messages['select_template'] = '選取模版';
$messages['register_step5_title'] = '恭喜你! [4/4]';
$messages['finish'] = '註冊完成';
$messages['register_need_confirmation'] = '一封包含註冊[確認訊息連結]的電子郵件已經寄到你的電子信箱中。請盡快點選該連結來開始你的blogging生活！';
$messages['register_step5_help'] = '恭喜你，新的使用者帳號及網誌已經順利建立！';
$messages['register_blog_link'] = '如果你要看一看你的新網誌，你現在可以到<a href="%2$s">%1$s</a>這裡看一看。';
$messages['register_blog_admin_link'] = '如果你想要立刻開始發表文章，請點選連結到 <a href="admin.php">管理介面</a>';
$messages['register_error'] = '過程中有錯誤發生！';
$messages['error_registration_disabled'] = '很抱歉，網站管理者停用註冊新網誌的功能。';
// registration article topic and text
$messages['register_default_article_topic'] = '恭喜！';
$messages['register_default_article_text'] = '如果你可以看到這篇文章，表示註冊過程已經順利完成。現在你可以開始blogging了！';
$messages['register_default_category'] = '一般';
// confirmation email
$messages['register_confirmation_email_text'] = '請點選下面的連結來啟用你的網誌：:

%s

祝你有個美好的一天！';
$messages['error_invalid_activation_code'] = '很抱歉，確認碼不正確！';
$messages['blog_activated_ok'] = '恭喜，你的使用者帳號和網誌已經順利啟用了！';
// forgot your password?
$messages['reset_password'] = '重設密碼';
$messages['reset_password_username_help'] = '你要重設那個使用者的密碼？';
$messages['reset_password_email_help'] = '使用者用來註冊的電子郵件位址';
$messages['reset_password_help'] = '使用下方的表單來重設密碼。請輸入使用者名稱及註冊時使用的電子郵件位址。';
$messages['error_resetting_password'] = '重設密碼時發生錯誤。請檢查輸入的資料再重試一次。';
$messages['reset_password_error_incorrect_email_address'] = '電子郵件位址錯誤或著這不是你註冊時使用的電子郵件。';
$messages['password_reset_message_sent_ok'] = '一封有著重設密碼連結的電子郵件已經送到你的電子郵件信箱，請點選該連結來重設密碼。';
$messages['error_incorrect_request'] = '網址中的參數不正確。';
$messages['change_password'] = '重設密碼';
$messages['change_password_help'] = '請輸入新密碼及確認密碼';
$messages['new_password'] = '新密碼';
$messages['new_password_help'] = '在這裡輸入新密碼';
$messages['password_updated_ok'] = '你的密碼已經順利更新';

// Suggested by BCSE, some useful messages that not available in official locale
$messages['upgrade_information'] = '您所使用的瀏覽器未符合網頁設計標準，因此本網頁將以純文字模式顯示。如欲以最佳的排版方式瀏覽本站，請考慮<a href="http://www.webstandards.org/upgrade/" title="The Web Standards Project\'s Browser Upgrade initiative">升級</a>您的瀏覽器。';
$messages['jump_to_navigation'] = '移動到導覽列。';
$messages['comment_email_never_display'] = '系統會自動為你設定分行，且不會顯示你留下的郵件地址。';
$messages['comment_html_allowed'] = '可使用之 <acronym title="Hypertext Markup Language">HTML</acronym> 標籤如下：&lt;<acronym title="用途：超連結">a</acronym> href=&quot;&quot; title=&quot;&quot; rel=&quot;&quot;&gt; &lt;<acronym title="用途：頭字語標註">acronym</acronym> title=&quot;&quot;&gt; &lt;<acronym title="用途：引用文字">blockquote</acronym> cite=&quot;&quot;&gt; &lt;<acronym title="用途：刪除線">del</acronym>&gt; &lt;<acronym title="用途：斜體">em</acronym>&gt; &lt;<acronym title="用途：底線">ins</acronym>&gt; &lt;<acronym title="用途：粗體">strong</acronym>&gt;';
$messages['trackback_uri'] = '這篇文章的引用連結網址：';
$messages['previous_post'] = '上一篇';
$messages['next_post'] = '下一篇';
$messages['comment_default_title'] = '(無標題)';
$messages['guestbook'] = '留言板';
$messages['trackbacks'] = '引用';
$messages['menu'] = '主選單';
$messages['albums'] = '資料夾';
$messages['admin'] = '管理介面';
?>