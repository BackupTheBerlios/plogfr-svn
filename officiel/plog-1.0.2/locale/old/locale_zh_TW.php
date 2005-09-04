<?php
// set this to the encoding that should be used to display the pages correctly
$messages["encoding"] = "utf-8";
$messages["locale_description"] = "Traditional Chinese translation";
// days of the week
$messages["days"] = Array( "星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六" );
// -- compatibility, do not touch -- //
$messages["Monday"] = $messages["days"][1];
$messages["Tuesday"] = $messages["days"][2];
$messages["Wednesday"] = $messages["days"][3];
$messages["Thursday"] = $messages["days"][4];
$messages["Friday"] = $messages["days"][5];
$messages["Saturday"] = $messages["days"][6];
$messages["Sunday"] = $messages["days"][0];

// abbreviations
$messages["daysshort"] = Array( "日", "一", "二", "三", "四", "五", "六" );
// -- compatibility, do not touch -- //
$messages["Mo"] = $messages["daysshort"][1];
$messages["Tu"] = $messages["daysshort"][2];
$messages["We"] = $messages["daysshort"][3];
$messages["Th"] = $messages["daysshort"][4];
$messages["Fr"] = $messages["daysshort"][5];
$messages["Sa"] = $messages["daysshort"][6];
$messages["Su"] = $messages["daysshort"][0];

// months of the year
$messages["months"] = Array( "元月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月" );
// -- compatibility, do not touch -- //
$messages["January"] = $messages["months"][0];
$messages["February"] = $messages["months"][1];
$messages["March"] = $messages["months"][2];
$messages["April"] = $messages["months"][3];
$messages["May"] = $messages["months"][4];
$messages["June"] = $messages["months"][5];
$messages["July"] = $messages["months"][6];
$messages["August"] = $messages["months"][7];
$messages["September"] = $messages["months"][8];
$messages["October"] = $messages["months"][9];
$messages["November"] = $messages["months"][10];
$messages["December"] = $messages["months"][11];

$messages["message"] = "訊息";
$messages["error"] = "錯誤";

$messages["date"] = "日期";

// miscellaneous texts
$messages["of"] = "of";
$messages["recently"] = "近期文章";
$messages["comments"] = "迴響";
$messages["comment on this"] = "迴響";
$messages["my_links"] = "我的連結";
$messages["archives"] = "文章彙整";
$messages["search"] = "搜尋";
$messages["calendar"] = "日曆";
$messages["editLinkCategories"] = "分類";
$messages["search_s"] = "搜尋";
$messages["link_tracker"] = "引用連結";
$messages["search_this_blog"] = "搜尋網誌內容:";
$messages["about_myself"] = "自我介紹";
$messages["permalink_title"] = "文章彙整靜態連結網址";
$messages["permalink"] = "靜態連結網址";
$messages["posted_by"] = "作者";
$messages["on_the"] = "在";
$messages["page"] = "頁";
$messages["posted"] = "作者";

$messages["reply"] = "回覆";


// add comment form
$messages["add_comment"] = "發表迴響";
$messages["comment_topic"] = "標題";
$messages["comment_text"] = "內文";
$messages["comment_username"] = "您的姓名";
$messages["comment_email"] = "您的電子郵件信箱";
$messages["comment_url"] = "您的個人網頁";
$messages["comment_send"] = "發表";
$messages["comment_added"] = "您的迴響已經順利發表！";
$messages["comment_add_error"] = "發表迴響發生錯誤";


$messages["article_does_not_exist"] = "本文章不存在";
$messages["no_posts_found"] = "找不到文章";
$messages["user_has_no_posts_yet"] = "該使用者還沒有發表過任何文章";

$messages["info_about_myself"] = "這裡是關於我的一些介紹…";
$messages["back"] = "回到上一頁";

$messages["back_top"] = "回到畫面最上方";

$messages["post"] = "post";

$messages["trackbacks_for_article"] = "引用本文的文章標題：";
$messages["trackback_excerpt"] = "摘要";
$messages["trackback_weblog"] = "網誌";

$messages["search_results"] = "搜尋結果";
$messages["search_matching_results"] = "以下文章符合您的搜尋關鍵字: ";
$messages["search_no_matching_posts"] = "找不到符合的文章";

$messages["see_all_link"] = "請按此察看所有的文章";

$messages["read_more"] = "(閱讀全文)";

$messages["anonymous_poster"] = "匿名張貼";

$messages["syndicate"] = "新聞交換";

$messages["main"] = "主頁面";

////// error messages /////
$messages["error_fetching_article"] = "找不到您所指定的文章。";
$messages["error_fetching_articles"] = "找不到您所指定的文章。";
$messages["error_trackback_no_trackback"] = "尚未有人向本文發送引用通告";
$messages["error_incorrect_article_id"] = "文章代號不正確。";
$messages["error_incorrect_blog_id"] = "網誌站台代號不正確。";
$messages["error_comment_without_text"] = "無迴響留言內容。";
$messages["error_comment_without_name"] = "您必須要填寫姓名或暱稱。";
$messages["error_adding_comment"] = "在將留言新增至資料庫時發生問題。";
$messages["error_incorrect_parameter"] = "參數不正確。";
$messages["error_parameter_missing"] = "您少傳遞了一項參數。";
$messages["error_comments_not_enabled"] = "這個網誌站台關閉了迴響功能。";

/////////////////                                          //////////////////
///////////////// STRINGS FOR THE ADMINISTRATION INTERFACE //////////////////
/////////////////                                          //////////////////


////// help messages for the administration interface /////
$messages["help_newPost"] = "<p>您如果要新增文章內容，便是使用這個頁面所提供的功能。您必須要填寫文章的標題以及內文部分，而當您完成的時候，請按下「<b>發表！</b>」按鈕，然後文章便會自動張貼在您的網誌站台中。請注意您的文章的出版狀態，如果您希望文章出現在首頁上，文章的狀態必須是<b>定稿</b>。而如果您的文章尚未完成，您希望先儲存起來，之後稍作修改再發表的話，請將文章儲存成「<b>草稿</b>」。</p><p>您也可以將文章設定到您先前所設定的分類中，只要使用「<b>分類</b>」下拉選單即可。</p><p>如果您想要在有人對這篇文章發表迴響留言時收到電子郵件通知信，請勾選下方的勾選方塊。</p><p>如果您勾選了「<b>發送引用通告</b>」方塊，您可以對您文中所提到的網誌發送通告，不過前提是對方主機也提供支援。系統會掃瞄您的文章中有提到哪些連結，然後您可以繼續勾選想要發送的連結，然後送出。</p>";

$messages["addPost"] = "<p>您的文章已經順利新增到資料庫中。您現在可以選擇要發送引用通告（TrackBack）的主機，發送通告，如此一來，對方就會知道有人寫了一篇與他們相關的文章，而前來察看。</p>";

$messages["editComments"] = "這裡是這篇文章得到的所以迴響留言。您不可以修改留言，但是可以刪除留言。在發表留言的時候，唯一一定要填寫的項目是「<b>作者名稱</b>」，網址以及電子郵件信箱可以留白。IP位置則是使用者在發表這篇迴響時所用的電腦的IP位置。您可以同時刪除多篇迴響留言，請在勾選之後，按下「<b>刪除所選擇的項目</b>」。";

$messages["postStats"] = "<p>這裡是您所選擇的文章的相關統計資料。首先是這篇文章被閱讀過的次數，不過請注意，如果您「<b>設定</b>」中關閉了「<b>閱讀全文</b>」連結功能的話，那麼這個統計數字就沒有什麼意義了。</p><p>「逆向連結」是別人從其他網站的哪些網頁連到了您這篇文章，而「引用」則是哪些人曾經在他們的網誌當中提過您的文章。這些統計都是不可以刪除或修改的。</p>";

$messages["help_editLinks"] = "<p>這裡是您所增加的網站連結列表。就跟文章一樣，您可以將網站連結放在首頁上，供人瀏覽點選。</p><p>每個連結都有名稱以及網址兩個欄位，還有就是這個連結是屬於那個分類之下，您也可以刪除這些連結。</p>";

$messages["help_newLink"] = "<p>您可以在這邊新增新的網站連結。您必須輸入連結的網址以及名稱。相關敘述欄位您可以不填，不過如果有愈多詳盡的說明，應該是愈好的。您也必須將連結設定到某個連結分類當中。</p>";

$messages["help_editLinkCategories"] = "<p>這裡是您所設置的連結分類列表。就像文章一樣，您必須要設定一個新的連結分類，您才可以新增網站連結。點選「<b>網站連結</b>」欄位，您可以察看這個分類下的網站連結列表。</p>";

$messages["help_newLinkCategory"] = "<p>您在這邊只需要輸入新的連結分類的名稱即可。當您新增了新的連結分類，您便可以把網站連結設定到這個分類當中。</p>";

$messages["help_userSettings"] = "<p>您可以在本頁修改您的基本資料。請注意，您不可以修改使用者名稱。<ul><li><b>密碼，以及確認密碼</b>：如果您想要修改您的密碼，請將密碼輸入在第一個文字輸入方塊中，同時在第二個文字輸入方塊中輸入相同的內容，以確認您的密碼是否正確。</li><li><b>電子郵件信箱</b>：如果您想要使用電子郵件通知信功能，請填寫正確的信箱。電子郵件信箱只會在內部使用，而不會顯示在在公開場合。</li><li><b>自我介紹</b>：您可以在此填寫一些您的自我介紹，或是不填也可以。</li></ul></p>";

$messages["help_Stats"] = "<p>您在此可以察看過去連到這個站台的逆向連結。在「<b>文章ID</b>」的部分是這些連結所連到的文章，如果顯示為<b>0</b>，代表的是連到站台首頁或其他頁面，而沒有連到特定的文章。「<b>最後點擊日期</b>」的部分則是最近一次有人從這個逆向連結網址連到這個網頁的時間。</p>";

$messages["editLink"] = "<p>您必須輸入連結的名稱以及網址。同時網址也必須設置在適當的網址連結分類下。</p>";

$messages["editLinkCategory"] = "請輸入您所要更新的連結分類的名稱。</p>";

$messages["blogSelect"] = "請從選單中選擇您所要操作的指令。";

$messages["Error"] = "在執行您所下達的指令時發生錯誤。請請至主頁面取得跟本訊息相關的更多資訊。";

$messages["Message"] = "請至主頁面取得跟本訊息相關的更多資訊。";

//////// strings for the administration interface ///////

$messages["admin_interface_title"] = "pLog管理介面";
$messages["administration"] = "管理介面";
$messages["help"] = "相關說明";
$messages["plog_help"] = "pLog使用說明";
$messages["newPost"] = "發表新文章";
$messages["editPosts"] = "文章列表";
$messages["editArticleCategories"] = "文章分類";
$messages["admin_links"] = "網站連結";
$messages["editLinkCategories"] = "連結分類";
$messages["settings"] = "設定";
$messages["Logout"] = "登出";

// new post page
$messages["topic"] = "標題";
$messages["text"] = "內文";
$messages["category"]  = "分類";
$messages["status"] = "狀態";
$messages["post_status_draft"] = "草稿";
$messages["post_status_published"] = "定稿";
$messages["post_status_deleted"] = "已刪除";
$messages["post_status_all"] = "全部";
$messages["send_notification"] = "如果有人對本文發表迴響，便向我發送電子郵件通知。";
$messages["send_trackback_pings"] = "檢查文章中所使用的網址連結，並且向這些連接發送引用通告（TrackBack Pings）。";
$messages["add_post"] = "發表！";

$messages["xmlrpc_ping_ok"] = "XML-RPC 通告已經正確送往";
$messages["error_sending_xmlrpc_ping"] = "以下XML-RPC通告發生錯誤";
$messages["error_sending_xmlrpc_ping_message"] = "錯誤訊息為：";

$messages["preview"] = "預覽";
$messages["post_added"] = "文章已順利新增";
$messages["you_will_be_notified"] = "另外，如果這篇文章有什麼後續討論，您都會收到電子郵件通知。";
$messages["post_added_not_published"] = " 文章已順利新增，但尚未正式發表。";
$messages["error_adding_post"] = "發表文章發生錯誤！";
$messages["error_must_fill_all_fields"] = "您必須在所有的輸入框當中都輸入內容！";
$messages["error_must_have_one_category"] = "您必須先至少建立一個文章分類，才可以發表文章。";

// send trackbacks page
$messages["send_trackback_pings"] = "發送引用通告";
$messages["links_found"] = "在您的文章中包含了以下的超連結，請勾選您所要發送引用通告的網址。（發送通告會花一點時間，請保持耐心）";
$messages["trackbacks_no_urls_selected"] = "您沒有勾選任何連結，所以不會送出任何引用通告。";
$messages["trackbacks_received_ok"] = "以下主機已經成功收到了引用通告:";
$messages["trackbacks_no_trackback"] = "以下的連結並沒有提供引用網址: ";
$messages["trackbacks_problems_sending"] = "在往以下站台發送通告的時候出了一些問題，如果您願意的話，您可以重新試試看";
$messages["trackbacks_received_all_hosts"] = "所有的站台都成功的收到了您的引用通告。";
$messages["ping_selected"] = "向勾選的網址發送通告";

// edit posts
$messages["author"] = "作者";
$messages["category_all"] = "全部分類";
$messages["author_all"] = "全部作者";
$messages["update"] = "更新";
$messages["date"] = "日期";
$messages["help_Stats"] = "統計";
$messages["delete"] = "刪除";

$messages["delete_selected"] = "刪除選擇的項目";

// edit post
$messages["edit_post"] = "編輯文章";
$messages["error_getting_post_to_update"] = "在讀取您所選擇要更新的文章時發生錯誤。";
$messages["error_updating_post_in_database"] = "在將文章更新至資料庫時發生錯誤。";
$messages["post_successfully_updated"] = "文章已成功更新。";
$messages["notification_removed"] = "這篇文章的電子郵件通知信已經刪除。";

// post statistics
$messages["statistics_for_post"] = "文章相關統計: ";
$messages["error_fetching_post"] = "讀取文章資料時發生錯誤";
$messages["times_post_has_been_read"] = "本文已經被閱讀過的次數: ";
$messages["referers"] = "逆向連結";
$messages["id"] = "ID";
$messages["url"] = "網址";
$messages["hits"] = "點擊數";
$messages["trackbacks"] = "引用";

// post comments
$messages["error_fetching_comments"] = "讀取迴響資料時發生錯誤";
$messages["comments_for_post"] = "檢視文章迴響: ";
$messages["email"] = "電子郵件";
$messages["ip_address"] = "IP位置";

// delete comments
//*** NEW ***//
// please remove these comments after translating these lines
$messages["error_no_comments_selected"] = "您沒有勾選任何要刪除的迴響。";
$messages["error_deleting_comment"] = "在刪除迴響時發生錯誤。 ";
$messages["comment_deleted_ok"] = "「%s」這篇文章的迴響已順利刪除。";
//*** NEW ***//
// please remove these comments after translating these lines


// categories list
$messages["category_name"] = "分類名稱";

// removing posts
$messages["post_cannot_be_deleted"] = "文章無法刪除";
$messages["no_posts_selected"] = "您沒有勾選任何要刪除的文章。";
// %s = subject of the post, %d = identifier of the post. feel free to change its order
// but if you remove them there will be no information about which post was removed...
$messages["error_deleting_post"] = "刪除文章「%s」時發生錯誤 (id = %d)";
$messages["post_deleted_ok"] = "文章「%2\$s」已順利刪除。 (id = %1\$d)";

// delete categories
$messages["no_categories_selected"] = "您沒有勾選任何要刪除的分類。";
$messages["error_category_has_articles"] = "無法刪除「%s」這個分類，原因是這個分類下還有文章。請將這個分類的文章刪除後，再重試一次。";
$messages["error_deleting_category"] = "在將分類「%s」從資料庫刪除時發生錯誤。";
$messages["category_deleted_ok"] = "文章分類「%s」已順利刪除。";

// add category
$messages["newArticleCategory"] = "新增文章分類";
$messages["add_new_category_info"] = "請輸入新的分類名稱。";
//*** NEW ***//
// please remove these comments after translating these lines
$messages["category_added_ok"] = "文章分類順利新增。";
$messages["error_adding_article_category"] = "在新增文章分類時發生錯誤。";
//*** NEW ***//
// please remove these comments after translating these lines

// edit categories
$messages["edit_category"] = "編輯分類";
$messages["please_provide_valid_category_name"] = "請輸入分類名稱。";

// edit category
//*** NEW ***//
// please remove these comments after translating these lines
$messages["error_incorrect_category_id"] = "文章分類代號錯誤。";
//*** NEW ***//
// please remove these comments after translating these lines

// update the category
$messages["error_fetching_category"] = "讀取分類資料時發生錯誤。";
$messages["error_updating_category"] = "更新分類資料時發生錯誤。";
//*** NEW ***//
// please remove these comments after translating these lines
$messages["error_empty_category_name"] = "您必須輸入正確的文章分類名稱。";
//*** NEW ***//
// please remove these comments after translating these lines
$messages["category_updated_ok"] = "文章分類順利更新！";

// edit links
$messages["link_name"] = "連結名稱";
$messages["link_url"] = $messages["url"];
$messages["link_category"] = $messages["category"];
$messages["link_description"] = "相關敘述";
$messages["editLinks"] = "網站連結";

// edit a link
$messages["error_provide_name_and_url"] = "您必須輸入網站連結的名稱以及網址。";
$messages["error_invalid_link_id"] = "連結ID錯誤，或系統中沒有符合這個ID的資料。";
$messages["error_fetching_link"] = "讀取連結資料時發生錯誤。";
$messages["error_updating_link"] = "更新連結資料時發生錯誤。";
$messages["link_updated_ok"] = "網站連結順利更新！";
$messages["error_fetching_link_categories"] = "讀取連結資料時發生錯誤。";

// add a link
$messages["add_new_link"] = "新增網站連結";
$messages["newLink"] = "新增網站連結";
$messages["error_adding_link"] = "在新增連結時發生錯誤";
$messages["link_added_ok"] = "連結順利新增。";
$messages["error_provide_name_and_url"] = "您必須要輸入正確的名稱以及網址。";
$messages["error_must_have_one_link_category"] = "您至少要有一個網站連結分類，才可以加入網站連結。";

// delete a link
$messages["error_no_links_selected"] = "您沒有選擇任何連結，無法刪除。";
$messages["error_removing_link"] = "從資料庫中刪除「%s」時發生錯誤。";
$messages["link_deleted_ok"] = "連結「%s」 已順利刪除。";

// edit link categories
$messages["newLinkCategory"] = "新增文章分類";
$messages["link_categories_help"] = "您至少要有一個網站連結分類，才可以加入網站連結。";
$messages["link_category_name"] = "連結分類名稱";
$messages["link_category_links"] = "網站連結";

// new link category
$messages["new_link_category_info"] = "連結分類功能可以幫助您將頁面上的各個網站連結分門別類。在分完類別之後，也可以讓這些網站連結以群組的方式在首頁上呈現。";
$messages["newLinkCategory"] = "新增連結分類";
$messages["error_provide_link_category_name"] = "您必須要輸入連結分類名稱。";
$messages["error_adding_link_category"] = "在刪除連結分類時發生錯誤。";
$messages["link_category_added_ok"] = "連結分類已順利新增。";

// edit link category
$messages["edit_link_category"] = "修改連結分類";
$messages["error_updating_link_category"] = "在更新連結分類時發生錯誤。";
$messages["link_category_updated_ok"] = "連結分類資料已順利更新。";
$messages["error_fetching_link_category"] = "在讀取連結分類時發生錯誤。";
$messages["error_incorrect_link_category_id"] = "連結分類ID不正確。";


// delete link categories
$messages["error_no_link_category_selected"] = "您沒有選擇要刪除的連結分類。";
$messages["error_links_in_link_category"] = "無法刪除「%s」這個分類，原因是這個分類下還有網站連結。請將這個分類的網站連結刪除後，再重試一次。";
$messages["error_removing_link_category"] = "在刪除連結分類「%s」時發生錯誤。";
$messages["link_category_deleted_ok"] = "連結分類「%s」已順利刪除。";
// this error is shown when for some reason the category could not be fetched from the database
// and we can't show its name
$messages["error_removing_link_category_2"] = "在刪除連結分類時發生錯誤，id = %d";

// blog settings page
$messages["blogSettings"] = "網誌站台設定";
$messages["userSettings"] = "個人資料";
$messages["pluginCenter"] = "外掛程式中心";
$messages["Stats"] = "統計資料";
$messages["blog_name"] = "站台名稱";
$messages["long_blog_name"] = "站台相關說明";
$messages["language_used"] = "系統文字以及日期所使用的語言";
$messages["items_main_page"] = "您要在首頁顯示幾篇文章？";
$messages["items_as_recent"] = "您要在「近期文章列表」顯示幾篇文章？";
$messages["template_used"] = "請選擇您的網誌站台所要使用的外觀樣式模版";
$messages["cut_posts"] = "您是否要將在首頁出現的文章，在一定長度時截斷，然後出現「閱讀全文」連結？";
$messages["cut_posts_after_characters"] = "您想要將文章在出現多少字元時截斷？";
$messages["enable_wysiwyg_edition"] = "使用即視即所得（WYSIWYG）文字編輯？（您必須使用 Internet Explorer 5.5 以上或 Mozilla 1.3b 以上的瀏覽器）";
$messages["enable_comments"] = "開放所有文章的迴響留言權限？";
$messages["yes"] = "是";
$messages["no"] = "否";
$messages["error_invalid_locale"] = "語系設定參數錯誤";
$messages["error_incorrect_max_recent_items"] = "您必須正確輸入您想要在首頁「近期文章」列表中顯示的文章數。";
$messages["error_incorrect_number_of_posts"] = "您必須正確輸入您想要在首頁顯示的文章數。";
$messages["error_incorrect_template"] = "模版的數值不正確。";
$messages["error_no_blog_name"] = "您必須為您的網誌站台取一個正確的名稱。";
$messages["error_incorrect_show_more_threshold"] = "如果您使用了將文章截斷，並出現「閱讀全文」連結時，您必須設定正確的字元數。";
$messages["error_updating_settings"] = "在更新網誌站台設定時發生錯誤。";
$messages["blog_settings_updated_ok"] = "網誌站台設定順利更新！";
$messages["permanent_blog_url"] = "網誌站台網址（不能修改）";

// user profile page
$messages["username"] = "使用者名稱";
$messages["password"] = "密碼";
$messages["confirm_password"] = "確認密碼";
$messages["email_address"] = "電子郵件信箱";
$messages["bio"] = "自我介紹";
$messages["empty_no_change"] = "如果您不想修改密碼，留白便可";
$messages["user_settings_updated_ok"] = "使用者資料成功更新。";
$messages["error_updating_user_settings"] = "在更新使用者資料時發生錯誤。";
$messages["error_passwords_dont_match"] = "很抱歉，您輸入的兩次密碼不相符。";
$messages["error_incorrect_password"] = "很抱歉，密碼錯誤。";
$messages["error_incorrect_email_address"] = "電子郵件信箱格式錯誤。";

// plugin center page
$messages["plugins_available"] = "以下是模版當中所使用的外掛程式列表";
$messages["identifier"] = "代號";
$messages["description"] = "相關說明";
$messages["error_plugins_disabled"] = "此外掛程式已停用。";

// statistics page
$messages["statistics_info"] = "文章ID為0代表的意思是首頁的點閱率，不是指某篇特定文章。";
$messages["article_id"] = "文章ID";
$messages["last_hit_date"] = "最後點擊日期";
$messages["error_fetching_referers"] = "在讀取本站逆向連結資料時發生錯誤。";


// login screen
$messages["login_page_title"] = "pLog管理介面";
$messages["login"] = "登入";
$messages["welcome_message"] = "歡迎來到pLog";
$messages["error_incorrect_username_or_password"] = "很抱歉，您輸入的帳號或密碼錯誤。";
$messages["error_dont_belong_to_any_blog"] = "很抱歉，您沒有使用系統中任何一個網誌站台的權限。";
$messages["error_no_username_or_password"] = "請輸入正確的帳號或密碼。";
$messages["choose_one_blog"] = "您可以使用下列網誌站台，請從中選擇一個您要管理的站台，進入管理。";
$messages["continue"] = "繼續";
$messages["logout_message"] = "您已經順利登出系統。";
$messages["logout_message_2"] = "<a href=\"admin.php\">按此</a>重新登入，或<a href=\"%1\$s\">前往%2\$s</a>.";
$messages["logout_title"] = "已登出";
$messages["error_access_forbidden"] = "您目前沒有權限進入管理介面。請到這裡登入。";

/////////////////////////////////////////////////////////////////////
//
//
// new strings added for 0.2
//
//
////////////////////////////////////////////////////////////////////
$messages["site_admin"] = "全站系統管理";
$messages["site_stats"] = "站台統計";
$messages["createUser"] = "新增使用者";
$messages["siteUsers"] = "使用者管理";
$messages["createBlog"] = "新增網誌站台";
$messages["editSiteBlogs"] = "網誌站台管理";
$messages["siteLocales"] = "語系設定";
$messages["newLocale"] = "新增語系";
$messages["siteTemplates"] = "模版管理";
$messages["newTemplate"] = "新增模版";
$messages["editSiteSettings"] = "全域設定";
$messages["adminSettings"] = "站台設定";
$messages["help_comments_enabled"] = "啟用或停用全站的迴響留言功能。";
$messages["help_beautify_comments_text"] = "在使用者發表迴響留言時，使用他所輸入的文字格式。";
$messages["help_rdf_enabled"] = "啟用或停用產生RSS新聞交換檔案功能。";
$messages["help_temp_folder"] = "pLog系統用來儲存暫存檔案用的目錄。";
$messages["help_base_url"] = "系統的網址（UR），這個項目務必要正確，請小心輸入。";
$messages["help_show_posts_max"] = "在首頁顯示文章數的預設值。";
$messages["help_recent_posts_max"] = "在首頁「近期文章」列表中顯示文章數的預設值。";
$messages["help_template_folder"] = "模版檔案的所在目錄路徑。";
$messages["help_default_template"] = "在新建網誌站台時，預設使用的模版。";
$messages["help_default_locale"] = "在系統登入畫面使用，以及在網誌站台時所使用的預設語系。";
$messages["help_html_allowed_tags_in_comments"] = "在發表迴響評論時可以使用的HTML語法標籤。";
$messages["help_referer_tracker_enabled"] = "是否使用文章逆向連結功能。";
$messages["help_rss_parser_enabled"] = "啟用或停用在頁面中顯示從他站透過 RSS 交換而來的新聞。（必須在模版當中提供RSS功能，方可使用）。";
$messages["help_show_more_enabled"] = "啟用或停用「閱讀全文」連結功能。";
$messages["help_show_more_threshold"] = "在「閱讀全文」連結前應該要有多少字元的內容。";
$messages["help_update_article_reads"] = "是否使用內建的點閱率統計工具計算每篇文章的點閱次數。";
$messages["help_request_format_mode"] = "如果您設定為「一般網址」，那麼系統所呈現的網址，就會使用將參數以get方式傳入的一般方式。如果您選用「讓搜尋引擎易於搜尋的簡潔網址」，那麼就會讓網址變得簡潔，搜尋引擎也容易取得您網站上的內容，不過您的Apache伺服器必須要能夠接受.htaccess檔案中的覆寫設定。";
$messages["help_xmlrpc_ping_enabled"] = "在系統中有人發表新文章時，是否送出 XMLRPC 通告。";
$messages["help_xmlrpc_ping_hosts"] = "XMLRPC 通告列表，如果您要向多處發送通告，請在文字框下面加入通告發送網址，每個網址一行。";
$messages["help_trackback_server_enabled"] = "是否接受從站外傳來的引用通告（TrackBack）。";
$messages["help_htmlarea_enabled"] = "啟用或停用即視即所得（WYSIWYG）文章編輯。";
$messages["help_plugin_manager_enabled"] = "啟用或停用外掛程式。";
$messages["help_check_email_address_validity"] = "在使用者註冊申請新的網誌站台時，是否要認證他所填寫的電子郵件信箱是否正確。";
$messages["help_summary_page_show_max"] = "在摘要頁面中要顯示多少項目。";
$messages["help_minimum_password_length"] = "密碼最短需要多少字元。";
$messages["help_users_can_add_templates"] = "使用者是否可以在模版設置當中，加入屬於自己專屬需求的檔案。";
$messages["help_email_service_enabled"] = "使用或停用用來寄送通知信函的電子郵件服務。";
$messages["help_post_notification_source_address"] = "系統通知信函的寄件人電子郵件信箱。";
$messages["help_email_service_type"] = "用來寄送電子郵件的方式，請在各種方法選擇其中之一。";
$messages["help_smtp_host"] = "如果您選用SMTP寄送電子郵件，請輸入您要用來發送郵件的主機。";
$messages["help_smtp_port"] = "前項設定的SMTP主機連接埠（port）";
$messages["help_smtp_use_authentication"] = "SMTP主機是否需要授權認證。如果需要的話，請繼續填寫下面兩項設定。";
$messages["help_smtp_username"] = "如果SMTP主機需要授權認證，請填寫使用者帳號。";
$messages["help_smtp_password"] = "如果SMTP主機需要授權認證，請填寫使用者密碼。";
$messages["help_uploads_enabled"] = "啟用或停用上傳檔案功能。這個功能會影響到使用者能否上傳新的模版安裝包，以及在模版中添加新的檔案。";
$messages["help_maximum_file_upload_size"] = "使用者上傳檔案大小的上限。";
$messages["help_upload_forbidden_files"] = "禁止使用者上傳的檔案類型。如果有多個不同的檔案類型，請在不同的類型間用空白區隔。";
$messages["help_path_to_tar"] = "「tar」指令所在目錄。";
$messages["help_path_to_gzip"] = "「gzip」指令所在目錄。";
$messages["help_path_to_bz2"] = "「bzip2」指令所在目錄。";
$messages["help_path_to_unzip"] = "「unzip」指令所在目錄。";

$messages["add_user_give_information"] = "請在以下表單輸入相關資訊，便可新增使用者。";

$messages["site_registered_users"] = "以下表列是所有在系統中註冊的使用者。";

$messages["add_blog_give_information"] = "請在以下表單填寫相關資訊以新建新的網誌站台。";
$messages["blog_title"] = "網誌站台名稱";
$messages["blog_owner"] = "網誌站台管理員";

$messages["site_registered_blogs"] = "以下表列是系統當中所有的網誌站台。";
$messages["editSiteUsers"] = "管理使用者";

$messages["upload_locale"] = "上傳語系檔案";
$messages["use_this_form_to_upload_locale"] = "您可以用以下表單上傳語系檔到伺服器上，如果您沒有辦法上傳檔案的話，那麼請使用下面另外一個表單。";
$messages["locale_file"] = "檔案";
$messages["manually_add_locale"] = "手動新增語系";
$messages["use_this_form_if_cant_upload_locale"] = "當您無法用瀏覽器將語系檔上傳到伺服器上時，請使用這個U表單。請注意，您必須先將語系檔複製到主機的語系目錄下，不然便會發生錯誤。";
$messages["locale_code"] = "語系代碼";
$messages["locale_encoding"] = "編碼方式";

$messages["template_will_be_available_for_all"] = "所有的網誌站台接下來都可以使用這個新模版。";

$messages["use_this_form_to_upload_template"] = "您可以用這個表單，將模版安裝包上傳到伺服器上。如果您沒有辦法用瀏覽器上傳，請使用下方的另一個表單。上傳檔案必須是以zip、tar.gz或tar.bz2格式的壓縮檔。";
$messages["locale_file"] = "檔案";
$messages["upload_template"] = "上傳模版";
$messages["manually_add_template"] = "手動新增模版";
$messages["use_this_form_if_cannot_upload_template"] = "如果您沒有辦法用瀏覽器上傳模版安裝包，請使用這個在這個表單。您在此所輸入的檔名必須與在模版目錄中的檔案相符，不然就會產生錯誤。";
$messages["template_id"] = "模版ID";

$messages["templates_available_for_all"] = "本模版可供系統中所有的網誌站台使用。";
$messages["add_file"] = "新增檔案";

$messages["setting_name"] = "名稱";
$messages["setting_value"] = "數值";
$messages["setting_description"] = "相關敘述";

$messages["plain"] = "一般網址";
$messages["search_engine_friendly"] = "讓搜尋引擎易於搜尋的簡潔網址";

$messages["general_settings"] = "一般設定";
$messages["helper_tools_settings"] = "說明工具設定";
$messages["uploads_settings"] = "上傳設定";
$messages["email_settings"] = "電子郵件設定";

$messages["number_blogs"] = "網誌站台數";
$messages["number_users"] = "使用者數";
$messages["number_posts"] = "文章數";
$messages["number_posts_today"] = "今日發表文章數";
$messages["number_posts_this_month"] = "本月發表文章數";

$messages["date"] = "日期";
$messages["time"] = "時間";

$messages["comments_order"] = "迴響留言排序方式:";
$messages["oldest_first"] = "舊的在前";
$messages["newest_first"] = "新的在前";

$messages["blog"] = "網誌站台";
$messages["blog_id"] = "網誌站台ID";

$messages["showBlogUsers"] = "網誌站台使用者";
$messages["available_users"] = "Available Users";
$messages["add"] = "新增";
$messages["remove"] = "刪除";

$messages["user_id"] = "使用者ID";

$messages["new_password"] = "新密碼";
$messages["has_administrator_privileges"] = "擁有管理者權限";
$messages["related_to_the_following_blogs"] = "該使用者可以使用的網誌站台";

$messages["add_user_to_blog_form"] = "您可以用以下表單，將其他使用者加入您的網誌作者行列中。使用者在加入之後，可以發表或編輯文章，但是不能夠修改您的網誌站台設定。";
$messages["add_user_enter_username"] = "請輸入這位使用者的帳號。如果系統中沒有這個帳號，便無法加入。";
$messages["add_user_send_notification"] = "用電子郵件通知這名使用者。";
$messages["add_user_type_notification"] = "請輸入您要通知這位使用者的信件內容";

$messages["following_users_have_permissions"] = "以下是網誌站台中的作者名單。他們可以新增、編輯或刪除網誌內容，但是不能夠修改這個網誌站台的相關設定。";
$messages["revoke_permissions"] = "取消使用權限";

$messages["newBlogTemplate"] = "新增網誌模版";
$messages["manually_newBlogTemplate"] = "手動新增網誌模版";
$messages["template_available_only_for_this_blog"] = "這個模版僅供目前所在的網誌站台使用。";
$messages["use_form_to_upload_blog_template"] = "您可以用這個表單，將模版安裝包上傳到伺服器上。如果您沒有辦法用瀏覽器上傳，請使用下方的另一個表單。上傳檔案必須是以zip、tar.gz或tar.bz2格式的壓縮檔。";
$messages["use_form_if_cannot_upload_blog_template"] = "如果您沒有辦法用瀏覽器上傳模版安裝包，請使用這個在這個表單。您在此所輸入的檔名必須與在模版目錄中的檔案相符，不然就會產生錯誤。";

$messages["blogTemplates"] = "網誌模版";
$messages["templates_only_available_for_this_blog"] = "以下是可供目前所在網誌站台使用的模版。.";

$messages["add_file_to_blog_template"] = "新增檔案到網誌模版中"; 
$messages["upload_file_to_blog_template"] = "請上傳您想要加入到模版設置當中的檔案。";

$messages["error_user_id_incorrect"] = "使用者ID不正確。";
$messages["error_incorrect_user_id"] = $messages["error_user_id_incorrect"];
$messages["error_fetching_user_information"] = "在讀取使用者資料時發生錯誤。";
$messages["error_password_incorrect"] = "密碼太短或密碼錯誤。";
$messages["error_updating_user_settings"] = "我沒有辦法更新這位使用者的設定。";
$messages["user_settings_updated_ok"] = "使用者「%s」的設定順利更新。";
$messages["error_no_users_selected_to_add"] = "您沒有選擇要新增的使用者。";
$messages["user_added_to_blog_ok"] = "使用者「%s」已經順利加入作者行列。";
$messages["error_adding_user_to_blog"] = "在加入使用者「%s」時發生問題。";
$messages["error_no_users_selected_to_remove"] = "您沒有選擇要移除的使用者。";
$messages["user_removed_from_blog_ok"] = "使用者「%s」已經從作者行列中移除。";
$messages["error_removing_user_from_blog"] = "在移除使用者「%s」時發生問題。";

$messages["error_incorrect_plugin_id"] = "外掛程式ID不正確。";
$messages["error_configuring_plugin"] = "在設定外掛程式時發生問題：";
$messages["site_config_saved_ok"] = "站台設定已順利儲存。";
$messages["error_saving_site_config"] = "在儲存站台設置時發生問題。";

$messages["error_incorrect_blog_owner"] = "要設定為網誌站台管理員的使用者不存在。";
$messages["error_updating_blog_settings"] = "在更新「%s」這個網誌站台的設定時發生問題。";
$messages["blog_settings_updated_ok"] = "網誌站台「%s」的設置已順利更新。";

$messages["error_fetching_users"] = "在讀取這個網誌站台的使用者資料時發生問題。";

$messages["error_fetching_blogs"] = "在從系統中讀取網誌站台列表時發生問題。";

$messages["error_incorrect_template_id"] = "模版ID不正確或不存在。";

$messages["error_no_users_selected"] = "您沒有選擇要刪除的使用者。";
$messages["error_could_not_find_user"] = "在系統中找不到「%s」這位使用者。";
$messages["error_deleting_user"] = "在刪除使用者「%s」時發生錯誤。";
$messages["user_deleted_ok"] = "使用者「%s」已順利刪除。";

$messages["error_must_give_blog_name"] = "您必須輸入這個網誌站台的正確名稱。";
$messages["error_adding_blog"] = "在將這個網誌站台加入資料庫時發生錯誤。";
$messages["blog_added_ok"] = "新的網誌站台「%s」已成功加入資料庫中。";

$messages["error_template_not_inside_folder"] = "模版檔案必須放在某個目錄當中。";
$messages["error_missing_base_files"] = "在這個模版設置中有些基本檔案不見了。";
$messages["error_unpacking"] = "在解壓縮時發生錯誤。";
$messages["error_forbidden_extensions"] = "在這個模版設置中有些檔案禁止存取。";
$messages["error_creating_working_folder"] = "在檢查模版設置時發生錯誤。";
$messages["error_checking_template"] = "模版設置發生錯誤 (code = %s)";
$messages["error_add_template_disabled"] = "本站不允許使用者新增模版檔案。";
$messages["error_must_upload_file"] = "您必須上傳檔案。";
$messages["error_no_template_name"] = "您必須輸入模版名稱。";
$messages["error_uploads_disabled"] = "本站已關閉檔案上傳功能。";
$messages["error_installing_template"] = "在安裝模版設置時發生錯誤。";
$messages["template_installed_ok"] = "新的模版設置「 %s」已經順利安裝完成。";

$messages["error_adding_template_file"] = "在將檔案加入模版設置時發生錯誤。";
$messages["error_file_forbidden"] = "系統不允許您上傳這個檔案類型的檔案。";
$messages["error_file_too_big"] = "檔案太大，上傳檔案的大小上限是 %s bytes。";
$messages["template_file_added_ok"] = "檔案以成功新增至「%s」模版設置中。";

$messages["error_plugin_cannot_be_configured"] = "您不能夠對這個外掛程式進行設定。";

$messages["error_incorrect_username"] = "使用者名稱不正確。";
$messages["error_username_already_exists"] = "已經有人註冊了相同的名稱了。";
$messages["error_adding_user"] = "在將使用者新增至資料庫時發生錯誤。";
$messages["user_added_ok"] = "新使用者帳號「%s」已順利新增。";

$messages["error_no_blogs_selected"] = "您必須要選擇您所想要刪除的網誌站台。";
$messages["error_blog_is_default_blog"] = "「%s」是系統預設網誌站台，無法刪除。";
$messages["blog_deleted_ok"] = "「%s」網誌站台已順利刪除。";
$messages["error_deleting_blog"] = "在刪除「%s」這個網誌站台時發生錯誤。";

$messages["error_no_templates_selected"] = "您沒有選擇任何模版，無法刪除。";
$messages["error_removing_template"] = "在刪除模版「%s」時發生錯誤。";
$messages["template_removed_ok"] = "「%s」模版已順利刪除。";

$messages["error_no_users_selected_to_remove_from_blog"] = "您沒有選擇任何要從這個網誌站台移除的作者。";
$messages["error_removing_user_from_blog"] = "在將使用者「%s」從本網誌站台作者行列中移除時發生錯誤。";
$messages["user_removed_from_blog_ok"] = "使用者「%s」已經順利從本站作者行列中刪除。";

$messages["error_incorrect_locale_code"] = "您所輸入的語系代碼不正確。";
$messages["error_invalid_locale_file"] = "這個檔案並不是正確的語系檔案。";
$messages["error_adding_locale_file"] = "在新增語系檔案時發生錯誤。請確定檔案已經上傳到語系檔案目錄中，並且檢查檔案權限是否正確。";
$messages["locale_added_ok"] = "語系「%s」已經順利新增";
$messages["error_saving_locale"] = "在將新的語系檔案儲存至語系檔案目錄時發生錯誤。請檢查檔案目錄的寫入權限是否正確。";

$messages["error_no_locales_selected"] = "您沒有選擇要刪除的語系。";
$messages["error_deleting_only_locale"] = "您不可以刪除這個語系檔案，因為這是系統中目前唯一的語系檔案。";
$messages["locale_deleted_ok"] = "「%s」語系已順利刪除。";
$messages["error_deleting_locale"] = "在刪除「%s」語系時發生錯誤。";
$messages["error_cant_delete_default_locale"] = "您不可以刪除「%s」語系，因為這是系統目前的預設語系。";
$messages["plugin_config"] = "外掛程式設定";
$messages["use_read_more_feature"] = "您放在首頁文章只要顯示「內文」部分，而不要顯示「延伸內文」？";
$messages["extended_text"] = "延伸內文：您在此輸入的文字只會在單篇彙整狀態下顯示，除非您在「設定」頁面中修改了設定。";

$messages["error_must_give_post_intro"] = "您必須要輸入這篇文章的介紹文字。";
$messages["error_no_albums_defined"] = "本網誌站台中還沒有資料夾。";
$messages["error_fetching_album"] = "在讀取指定資料夾時發生錯誤。";
$messages["comment_marked_as_spam_ok"] = "您已經順利將本篇迴響留言標示為垃圾留言。";
$messages["comment_marked_as_nonspam_ok"] = "您已經順利將本篇迴響留言標示為正常留言。";
$messages["error_marking_comment_as_nonspam"] = "在將本篇迴響留言標示為垃圾留言時發生錯誤。";
$messages["error_marking_comment_as_spam"] = "在將本篇迴響留言標示為正常留言時發生錯誤。";
$messages["error_incorrect_comment_id"] = "留言迴響ID不正確。";


///// new help messages ////

//
// translators: this one has changed too since we now have two text boxes: one for the
// text that we'd like to appear in the main page and another one for the text that
// will only be shown in the 'post' page (that is, when the users clicks on the
// permalink, for example)
//
$messages["help_newPost"] = "<p>如果您要發表新文章，請使用這個頁面所提供的功能。您必須要填寫文章的標題以及內文，當您完成的時候，請按下「<b>發表！</b>」按鈕，這篇文章就會儲存到系統中。請注意，如果您希望這篇文章出現在首頁上，您必須將 這篇文章的狀態設定為「<b>定稿</b>」。而如果您還沒有完成這篇文章，您又希望將這篇文章先暫存起來，稍後再做修改完成，請將文章設定為「<b>草稿</b>」狀態。</p><p>在上方的內文輸入框所輸入的內容，會出現在首頁上。如果您希望輸入一些在首頁上不會顯示、但是在使用者用點下「閱讀全文」連結，點入文章頁面時才顯示的文字，您可以用第二個文字輸入框輸入，輸入的文字會自動加入到文件的最末處。您也可以用「設定」頁面調整是否要讓延伸內文出現在首頁上，在首頁可以顯示全部的內文。</p><p>您也可以將文章歸類到您先前所設定的分類中，只要在「<b>分類</b>」下拉選單中選取即可。</p><p>如果您想要在有人對這篇文章發表迴響時，收到電子郵件通知，請勾選下方的勾選方塊。</p><p>如果您勾選了「<b>發送引用通告</b>」方塊，您可以對您文中所提到的網誌發送通告，不過前提是對方主機也提供支援。系統會掃瞄您的文章中有提到哪些連結，然後您可以繼續勾選想要發送的連結，然後送出。</p>";

$messages["updatePost"] = $messages["help_newPost"];

$messages["help_newBlogUser"] = "「新增使用者」這個功能可以讓您簡單的編輯這個網誌站台其他使用者的權限。首先，您必須知道對方的帳號名稱，如果您已經知道了，那麼，請把帳號名稱鍵入文字框，然後按下「新增使用者」按鈕。您也可以同時寄送一封電子郵件通知對方，告訴他已經擁有參與您的網誌站台的權限。";

$messages["help_showBlogUsers"] = "頁面中出現的是具有編輯您網誌站台上文章權限的使用者列表。您可以檢視他們的個人基本資料。如果您想要取消他們的權限，請在名單上勾選後，按下「取消使用權限」按鈕。只要您取消了他們的權限，他們就再也不能在您的網誌站台上發表文章了。";

//
// note to translators:
//
// added some additional text here to inform about the new "configure" feature
//
$messages["help_pluginCenter"] = "<p>您可以在這裡察看所有已安裝的外掛程式。您可以看到，每一個外掛程式都會有一個ID（當您在設計模版並且需要用到這個外掛程式功能的時候，就會用到這個ID）、作者名稱、以及一些簡單的相關敘述，以及主要用途。</p><p>有些外掛程式同時提供管理頁面，讓您可以調整一些設定，您只需要按下「configure」即可。</p>";

$messages["configurePlugin"] = "這個外掛程式不提供設定功能。";

$messages["help_newBlogTemplate"] = "<p>的確，要新增要新增新的模版到系統中，可能不是那麼容易。如果您要新增新的模版，有兩種方法，其一是將模版設置壓縮成一個壓縮檔（包括tar.gz、tar.bz2以及zip檔案）後上傳，其二是在手動上傳後，在將模版加入系統資料庫當中。</p><p>如果您選用第一種發訪，那麼您所填入的資料就是您要上傳的檔案的檔名。</p><p>如果您選用第二種方法，那麼就是請先將模版上傳到模版目錄當中的某個目錄，然後輸入這個目錄的名稱。</p><p>如果您在這裡加入了某些外掛程式功能，那麼其他的網誌站台是不能使用這些外掛程式的。</p>";

$messages["help_blogTemplates"] = "<p>以下是所有增加至您目前所在網誌站台使用的模版列表。如果您想要刪除當中的某些迷版，請在勾選後，按下「刪除選擇的項目」按鈕。模版在刪除之後，便無法還原。</p>";

$messages["help_adminSettings"] = "<p>這裡是一些站台的基本統計。</p>";

$messages["help_createUser"] = "<p>我們可以用這個表單，輕易的在系統中加入新的使用者。我們只需要輸入使用者的名稱以及密碼，或是額外輸入使用者的電子郵件信箱。新增的使用者無法使用任何的網誌站台，除非您將使用者加到某個網誌站台的作者名單，或是為他建立新的網誌站台。</p>";

$messages["editUserProfile"] = "<p>在這裡我們可以修改使用者的個人基本資料。我們可以設定讓使用者是否擁有管理員權限。本頁也同時顯示了該使用者可以使用的網誌站台名單。</p>";

$messages["help_editSiteUsers"] = "<p>以下是系統中所有的已註冊使用者名單。您可以察看或編輯他們的使用者個人資料，您也可以刪除使用者。如果您要刪除使用者，請在勾選所要刪除的項目之後，按下「<b>刪除選擇的項目</b>」按鈕。請注意，使用者在被刪除之後，便無法還原，請務必小心。</p>";

$messages["help_createBlog"] = "<p>在您架設了一個pLog系統後，您可以在系統中建立許多的網誌站台。使用者可以用註冊的方式建立自己的站台，不過系統管理者也可以用這邊提供的表單建立新的網誌站台。您唯一需要輸入的就是新的網誌站台的名稱，還有設定誰是這個擁有這個網誌站台管理權限的管理者。</p>";

 $messages["help_editSiteBlogs"] = "<p>這裡是系統中的所有網誌站台列表。您可以在勾選之後，按下「<b>刪除選擇的項目</b>」按鈕刪除表中的網誌站台，不過如果您要刪除系統預設的網誌站台（請見「<b>全站系統管理</b>」當中的「<b>全域設定</b>」頁面），那麼便會出現錯誤。</p><p>我們也可以在點選網誌站台名稱後，修改個別網誌站台的設定。</p><p>最後，我們可以「<b>管理使用者</b>」，修改可以使用這個網誌站台的授權名單。</p>";

$messages["editBlog"] = "<p>在這邊您可以像一般使用者一樣修改網誌站台的相關設定。不過有一點比較不一樣，那就是，系統管理員也可以隨時修改網誌站台的管理者換成別人。</p>";

$messages["editBlogUsers"] = "<p>在這個頁面中，您可以用視覺化的方式，新增或刪除使用者使用您所指定的網誌站台的權限。在畫面的左方，是還沒有使用這個網誌站台權限使用者的名單，而右方則是擁有使用這個網誌站台的使用者名單。要新增（一個或多個）使用者，請先在左方選定後，按下「<b>新增</b>」按鈕，反之，就是在右方選定好使用者後，按下「<b>刪除</b>」按鈕。</p><p>您也可以用上方的下拉選單，切換網誌站台的管理者。</p>";

$messages["help_newLocale"] = "<p>您可以在這裡新增語系檔案。如果您可以用瀏覽器上傳檔案，請用第一個表單。請選擇好您存放在您自己硬碟中的檔案後，按下「<b>上傳語系檔案</b>」按鈕即可。不過請注意，在上傳的時候，伺服器上的語系檔案目錄的寫入權限必須是打開的。如果伺服器上已經有了一個相同的語系檔案，那麼就會換成新的。</p><p>如果您無法使用瀏覽器上傳檔案，那麼您必須另外手動上傳語系檔到伺服器語系檔案目錄中，如果您已經上傳好的檔案，那麼請用第二個表單填入語系檔案檔名在「locale_」後的語系代碼。</p><p>語系檔案的命名規則必須是「locale_ll_CC」，「11」代表的是兩個字元的語言代號，而「CC」也是兩個字元的國家或地區名稱。如果檔案不是按照這個規則命名，那麼就會被視為是無效的語系檔案。</p>";

$messages["help_siteLocales"] = "<p>以下是所有系統中已經安裝好的語系檔案列表。您可以看到語系的名稱以及所使用的文字編碼方式。另外，您也可以在勾選語系檔案之後，按下「刪除選擇的項目」按鈕，刪除語系檔案</p>";

$messages["help_newTemplate"] = "<p>您可以輕易的上傳新的模版。如果您要上傳新的模版，有兩種方法，其一是將整個模版壓縮檔上傳到伺服器上（壓縮檔必須是tar.gz、tar.bz2或zip格式），其二是上傳後手動新增。</p><p>如果您選擇第一種方式，壓縮檔案當中的各個檔案必須放置在一個目錄之下，這個目錄的名稱就是模版的名稱。</p><p>如果您選擇第二種發誓，那麼請在將檔案上傳到pLog系統中的模版目錄下，然後在表單中的文字輸入方塊輸入模版的名稱。</p><p>在模版當中的外掛程式將會供<b>所有的</b>網誌站台使用。</p>";

$messages["help_siteTemplates"] = "<p>這裡提供可以讓所有網誌站台使用的全部模版。如果您要刪除模版，請先勾選模版，然後按下「刪除所選擇的項目」按鈕。在模版刪除後，便無法還原。</p>";

$messages["help_editSiteSettings"] = "這裡是pLog的全域設定，用以控制、調整整個站台的操作方式。";

$messages["newBlogTemplateFile"] = "您可以將某個單獨的檔案加入到模版設置中，而不需要將整個模版設置全部重新上傳。請輸入您的檔案名稱，然後按下「加入檔案」按鈕。";

// text is the same, so we can save a few bytes
$messages["newTemplateFile"] = $messages["newBlogTemplateFile"];


////////////////////////////////////////////
///
///
/// NEW STRINGS ADDED IN 0.3!!
///
///
////////////////////////////////////////////
$messages["show_category_in_main_page"] = "在首頁顯示本分類";
$messages["welcome_resource_center"] = "歡迎來到檔案中心！";
$messages["resourceCenter"] = "檔案中心";
$messages["resourceAlbums"] = "資料夾列表";
$messages["resources"] = "檔案列表";
$messages["newResource"] = "新增檔案";
$messages["newResourceAlbum"] = "新增資料夾";
$messages["album"] = "資料夾";
$messages["album_name"] = "資料夾名稱";
$messages["parent_album"] = "上層資料夾目錄";
$messages["no_parent_album"] = "置於最頂層";
$messages["resource_info"] = "檔案資訊";
$messages["size"] = "檔案大小";
$messages["format"] = "檔案格式";
$messages["dimensions"] = "Dimensions";
$messages["bits_per_sample"] = "Bits per pixel";
$messages["bytes"] = "bytes";
$messages["pixels"] = "pixels";
$messages["time_offset"] = "您的網誌伺服器與您所在地的時間差:";
$messages["hours"] = "小時";
$messages["album_added_ok"] = "新的資料夾已經順利新增。";
$messages["name"] = "名稱";
$messages["children"] = "子目錄";
$messages["see"] = "See";
$messages["view"] = "察看";
$messages["resource_info"] = "檔案資訊";
$messages["number_of_channels"] = "頻道數";
$messages["length"] = "長度";
$messages["number_of_files"] = "檔案數";
$messages["compressed_size"] = "壓縮後的檔案大小";
$messages["uncompressed_size"] = "未壓縮的檔案大小";
$messages["resource_file"] = "您想要上傳的檔案";
$messages["add_to_album"] = "將檔案加入到這個資料夾";
$messages["edit_resource_album"] = "編輯檔案資料夾";
$messages["error_loading_resource_album"] = "在讀取檔案資料夾資料時發生錯誤。";
$messages["error_album_id_parameter_missing"] = "資料夾ID不正確。";
$messages["error_album_parent_id_parameter_missing"] = "找不到上層資料夾目錄的ID。";
$messages["error_updating_resource_album"] = "在更新檔案資料夾時發生錯誤。";
$messages["resource_album_updated_ok"] = "檔案資料夾「%s」已順利更新。";
$messages["error_must_give_album_name"] = "您必須輸入資料夾的名稱。";
$messages["error_adding_album"] = "在新增檔案資料夾時發生錯誤。";
$messages["album_added_ok"] = "新資料夾「%s」已經順利新增。";
$messages["resource_added_ok"] = "檔案已經順利新增。";
$messages["error_resource_forbidden_extension"] = "無法新增檔案，因為用了系統不允許的副檔名。";
$messages["error_resource_too_big"] = "無法新增檔案，因為檔案太大了。";
$messages["error_uploads_disabled"] = "無法新增檔案，因為伺服器管理員關閉了這項功能。";
$messages["error_adding_resource"] = "在新增檔案時發生錯誤。";
$messages["error_loading_resource"] = "在讀取檔案列表時發生錯誤。";
$messages["error_updating_resource"] = "在上傳檔案時發生錯誤。";
$messages["resource_updated_ok"] = "檔案「%s」已順利新增。";
$messages["error_no_resources_selected"] = "您沒有選擇任何要刪除的檔案。";
$messages["resource_deleted_ok"] = "檔案「%s」已順利刪除。";
$messages["error_deleting_resource"] = "在刪除檔案「%s」時發生錯誤。";
$messages["error_no_resource_uploaded"] = "您沒有上傳任何檔案。";
$messages["blockedHosts"] = "阻擋主機列表";
$messages["global_blocked_hosts"] = "全域阻擋主機列表";
$messages["newBlockedHost"] = "阻擋主機";
$messages["blogSecurity"] = "系統安全";
$messages["security_welcome"] = "歡迎來到系統安全設定頁面！";
$messages["reason"] = "原因";
$messages["mask"] = "Mask";
$messages["access_blocked"] = "禁止瀏覽";
$messages["posting_blocked"] = "禁止發表";
$messages["block_host_intro"] = "以下是您目前所在網誌站台的主機阻擋列表。如果您想知道更多相關資訊，請察看<a href=\"javascript:help_window('admin.php?op=Help&amp;helpId=newBlogBlockedHost');\">說明</a>。";
$messages["global_block_host_intro"] = "以下是全站共用的主機阻擋列表。如果您想知道更多相關資訊，請察看<a href=\"javascript:help_window('admin.php?op=Help&amp;helpId=newBlogBlockedHost');\">說明</a>。";
$messages["block_type"] = "阻擋類別";
$messages["error_invalid_ip_address"] = "IP位置不正確。";
$messages["error_must_create_album_first"] = "您必須在新增檔案前建立至少一個資料夾。";
$messages["error_resource_is_not_an_image"] = "您所選擇的檔案不是圖片。";
$messages["error_generating_resource_preview"] = "在重新產生這個檔案的預覽縮圖時發生錯誤。";
$messages["resource_preview_generated_ok"] = "這個檔案的預覽縮圖已經順利產生。";
$messages["regenerate_preview"] = "重新產生預覽縮圖";
$messages["show_album"] = "顯示資料夾";
$messages["show_album_when_browsing"] = "向使用者顯示資料夾";
$messages["assigned_to_blog"] = "將使用者加入使用以下站台的權限";
$messages["clean_up"] = "清理垃圾";
$messages["purge_info"] = "「清理垃圾」功能會將系統中標示為「已刪除」的文章徹底刪除。不然的話，這些文章還是儲存在資料庫當中（使用者可以隨時救回這些文章），並且使得您的資料庫當中的內容愈來愈多，多到您可能必須要擴充資料庫的容量。如果您確定要刪除這些文章，請按下下方按鈕。";
$messages["spam_info"] = "將某篇迴響留言標示為垃圾留言的用意是，您可以藉此產生過濾垃圾迴響的規則，不過在建立好過濾規則之後，這些垃圾留言自然就一點用處都沒有了。如果您想要刪除所有標示為垃圾留言的迴響留言，請按下下方按鈕。";
$messages["no_spam"] = "No Spam";
$messages["spam"] = "Spam";
$messages["mark_as_spam"] = "Mark as spam";
$messages["mark_as_no_spam"] = "Mark as no spam";
$messages["enable_comments_for_post"] = "開放這篇文章的迴響留言功能";
$messages["close_window"] = "關閉視窗 ";
$messages["newResource"] = "新增檔案";
$messages["add_resource_preview"] = "新增預覽縮圖";
$messages["newResourceAlbum"] = "新增資料夾";
$messages["show_main_page"] = "在首頁顯示";
$messages["purge_spam_comments"] = "清理垃圾迴響";
$messages["purge_posts"] = "清理文章";
$messages["keep_spam_comments"] = "保存垃圾迴響";
$messages["throw_away_spam_comments"] = "清理垃圾迴響";
$messages["error_adding_blocked_host"] = "在設定阻擋主機時發生錯誤。";
$messages["blocked_host_added_ok"] = "「%s」主機已經順利加入到阻擋主機列表中。";
$messages["error_no_blocked_hosts_selected"] = "您沒有選擇任何要刪除的主機名稱。";
$messages["blocked_host_deleted_ok"] = "「%s」主機已經順利從阻擋主機列表中刪除。";
$messages["error_deleting_blocked_host"] = "在從阻擋主機列表中刪除主機「%s」時發生錯誤";
$messages["edit_blocked_host"] = "修改阻擋主機列表";
$messages["error_fetching_blocked_host"] = "在讀取阻擋主機列表時發生錯誤。";
$messages["error_updating_blocked_host"] = "在更新阻擋主機列表時發生錯誤。";
$messages["thumbnail_format"] = "縮圖格式";
$messages["same_as_image"] = "與原始影像相同";
$messages["same"] = $messages["same_as_image"];

$messages["help_locale_folder"] = "語系檔案所在目錄。";
$messages["help_default_locale"] = "在建立新網誌站台時預設使用的語文。";
$messages["help_xmlrpc_api_enabled"] = "啟用或停用XMLRPC介面。XMLRPC介面的用途是可以讓您使用桌面網誌寫作工具出版網誌文章。";
$messages["default_rss_profile"] = "預設的RSS/RDF新聞交換格式。";
$messages["help_security_pipeline_enabled"] = "啟用系統安全功能。如果您關閉了這個選項，那麼所有的系統安全功能都會停用，如果您想要關閉一些系統安全功能，建議您將這個設定設為開啟，然後在以下的選項中，逐一停用我們不需要的系統安全功能項目。.";
$messages["help_ip_address_filter_enabled"] = "啟用IP位置過濾。您可以用這個功能阻擋某些主機瀏覽本站。";
$messages["help_content_filter_enabled"] = "使用以正規表示式為基礎的簡單內容過濾機制，用簡單的關鍵字過濾不當內容。不過建議您，採用貝氏過濾會是比較好的方案。";
$messages["help_maximum_comment_size"] = "迴響留言的內文字元數上限。";
$messages["help_bayesian_filter_enabled"] = "啟用或停用貝氏過濾機制。";
$messages["help_bayesian_filter_spam_probability_treshold"] = "被認定為是垃圾迴響留言的數值下限。設定範圍在0.01到0.99之間。";
$messages["help_bayesian_filter_nonspam_probability_treshold"] = "設定迴響留言是正常留言的數值上限。任何符合在前一設定與本設定之間數值的留言迴響，都會被認定是正常而非垃圾留言。";
$messages["help_bayesian_filter_min_length_token"] = "在多少字元數以上才會啟動貝氏過濾機制。";
$messages["help_bayesian_filter_max_length_token"] = "貝氏過濾機制可以處理的最多字元數上限。.";
$messages["help_bayesian_filter_number_significant_tokens"] = "在訊息中必須要有多少顯著有意義的文字。";
$messages["help_bayesian_filter_spam_comments_action"] = "處理垃圾留言的方法。您可以直接清理這些垃圾留言（不會存進資料庫中），或是保存這些垃圾留言，但是加上垃圾留言標示標示。建議當您的過濾機制在還沒有妥善建立阻擋規則時，先用後者。";
$messages["help_path_to_convert"] = "如果您選用ImageMagick產生縮圖，您必須指定「convert」這個工具程式的路徑。";
$messages["help_thumbnail_height"] = "縮圖的最大長度。";
$messages["help_resources_folder"] = "用來存放檔案中心的目錄。這個目錄不一定要在網頁目錄下。如果您不希望別人直接瀏覽您的檔案目錄，您大可可以把這個目錄設定到其他地方。";

$messages["help_thumbnails_keep_aspect_ratio"] = "縮圖是否保持原始比例。";
$messages["help_resources_enabled"] = "啟用或關閉檔案中心功能。";
$messages["help_thumbnail_method"] = "您用來產生縮圖的後端系統。如果您要使用ImageMagick，那麼您必須接著填寫ImageMagick的工具程式路徑。";
$messages["help_thumbnail_width"] = "縮圖的最大寬度。";
$messages["external_interfaces"] = "外部介面";
$messages["security_settings"] = "系統安全設定";
$messages["bayesian_filter_settings"] = "貝氏過濾（Bayesian Filter）設定";
$messages["resources_settings"] = "檔案中心設定";
$messages["help_thumbnail_format"] = "在產生預覽縮圖時所使用的預設格式。如果您選擇「與原始影像相同」，那麼預覽縮圖就會儲存成與原始影像相同的格式。";
$messages["edit"] = "編輯";
$messages["help_disable_javascript_calendar"] ="關閉以Javascript以及以DHTML為基礎，可以讓使用者在發表文章時挑顯發表時間的月曆功能。使用者的瀏覽器必須也要有對應支援。";
$messages["audio_codec"] = "Audio Codec";
$messages["video_codec"] = "Video Codec";
$messages["sample_rate"] = "取樣率";
$messages["files"] = "檔案";
$messages["created"] = "建立於";
$messages["generated"] = "產生於";
$messages["about"] = "關於";
$messages["menu"] = "選單";
$messages["albums"] = "資料夾";
$messages["template_file"] = "模版檔案";
$messages["download"] = "下載";
$messages["error_you_have_been_blocked"] = "系統無法允許您使用您所下的命令。";

//
// help messages //
//

//
// translators: the following help messages have changed a little since last version, due to a few
// new features built on top of previous features
//
$messages["help_editArticleCategories"] = "<p>您可以在這裡看到您已經建立好的文章分類列表。在您要新增文章之前，您必須要先設定好一個文章分類，每一篇文章都必須設定在某一個分類之下。在「<b>文章列表</b>」的部分是在這個分類下有多少篇文章的文章數。同樣的，在分類下還有文章的時候，您不可以刪除這個分類。您必須要先將文章分類底下的所有文章刪除後，才可以刪除文章分類。</p><p>您可以同時刪除多個文章分類，只要先勾選您要刪除的分類，然後按下「<b>刪除所選擇的項目</b>」按鈕即可。</p><p>「<b>在首頁顯示</b>」欄位會告訴您這個文章分類是否會在首頁出現，如果設定為是，那麼這個分類就會在首頁上變成一個可以點選的連結。若您要修改分類是否可以在首頁顯上，請在點選分類名稱後修改。</p>";

$messages["help_newArticleCategory"] = "<p>您可以在這裡建立新的文章分類。您必須要輸入新的分類的名稱，在文章分類建立後，您可以將您的文章加到這個分類當中</p><p>您可以用「<b>在首頁顯示本分類</b>」決定要不要讓這個分類出現在首頁上，如果設定為否，那麼當有人要察看這個分類的全部文章時，必須要從該篇文章的分類連結點選進入。</p>";

$messages["editArticleCategory"] = "<p>請輸入您所要更新的分類的新名稱。或著，您可以在此調整是否要讓這個分類出現在首頁上。</p>";

$messages["help_editPosts"] = "<p>如果您要編輯已發表的文章，請使用本頁面所提供的功能，您可以在此修改您已經儲存在資料庫當中的內容。當您完成的時候，請按下「<b>更新</b>」按鈕，那麼文章就會立即更新。請注意您必須要將文章的發表狀態設定為「<b>定稿</b>」，文章才會出現在首頁上。如果您還是沒有完成這篇文章，請將文章的出版狀態設定為「<b>草稿</b>」，然後改天可以繼續修改。</p><p>如果在有人對這篇文章發表迴響留言時，您想要收到電子郵件通知信，請勾選下方的選項。</p>您可以在<a href=\"admin.php?op=Help&amp;helpId=newPost\">這裡</a>察看另一個類似功能「發表新文章」的說明。";

$messages["help_blogSettings"] = "<p>您可以在這裡修改您的網誌站台的基本相關設定。您可以設定的選項如下：<ul><li><b>網誌站台網址</b>：別人可以透過這個網址連到您的網誌站台，您不可以修改這個選項。</li><li><b>網誌站台名稱</b>：您的網誌站台的基本說明。如果您使用預設模版，那麼您的網誌站台名稱就會出現在每一頁的最頂端。</li><li><b>站台相關說明</b>：關於這個網站的更詳盡說明，可以留白。</li><li><b>系統文字以及日期所使用的語言</b>：您可以從系統當中存在的語系檔案中選擇其一。這個語系設定可以用來切換網誌站台的顯示文字以及日期等項目（不過不會改變您的文章內容所使用的語言） ，您可以隨時安裝新的語系檔。</li><li><b>您要在首頁顯示幾篇文章</b>：您可以設定要在首頁放多少篇文章。您設定的愈多，那麼別人就要花愈多的時間下載您的首頁瀏覽。設定值最小為一。</li><li><b>您要在「近期文章列表」顯示幾篇文章</b>：您可以設置在首頁的「<b>近期文章列表</b>」中放置多少篇之前發表文章的連結。 設定值最小為一。</li><li><b>您的網誌站台所要使用的外觀樣式模版</b>：pLog系統可以讓您用許多種不同的模版，呈現相同的內容。您可以在這些系統管理員安裝好的模版中，選用您最喜歡的樣式模版。</li><li><b>您放在首頁文章只要顯示「內文」部分，而不要顯示「延伸內文」</b>：如果設定為「<b>是</b>」，那麼您在首頁的文章就會自動產生「閱讀全文」連結，這個連結會連到單篇文章的靜態固定網址，再顯示全文的「延伸內文部分」。這個功能可以讓您的首頁看起來更簡潔，不過，如果您的文章中有許多的HTML語法，那可能會產生問題。</li><li><b>使用即視即所得（WYSIWYG）文字編輯</b>：如果您想要立刻看到您的編輯結果，請設定為「是」。這個功能只有在使用者使用Internet Explorer 5.5或Mozilla 1.3b以上的版本才有效果。</li><li><b>開放所有文章的迴響留言權限</b>：如果設定為「是」，那麼您便可以讓其他使用者針對您的文章發表迴響留言。這個設定會套用到您的全部文章上。</li><li><b>迴響留言排序方式</b>：如果您設定成「舊的在前」，那麼留言就會從舊到新排序，如果設定成「新的在前」，則反之，留言從新到舊排序出現。</li><li><b>您的網誌伺服器與您所在地的時間差</b>：您可以用這個設定，調整您所發表的文章的時間。這個功能在伺服器主機與您分別在不同時區時相當有用。如果您將時間差設定為「+3 小時」，那麼系統就會將文章的發表時間調整成您所設定的時間。</li>
</ul></p>";

//
// translators: the ones below are already new
//
$messages["help_resourceCenter"] = "在檔案中心中，您可以管理您的檔案，以及將檔案變成群組放置在資料夾當中，您也可以管理資料夾，並且修改資料夾與檔案的相關屬性。";

$messages["help_newResourceAlbum"] = "<p>您至少要在檔案中心中建立一個資料夾，才可以上傳檔案。您可以在這裡新增資料夾，然後輸入資料夾的名稱以及相關說明。您一定要輸入資料夾的名稱，相關說明的部分則可以留白。</p><p>您可以使用「<b>上層資料夾</b>」下拉選單設定這個資料夾是位在最頂層，或是放在另一個目前已經建立好的資料夾當中。</p>";

$messages["help_resourceAlbums"] = "<p>這裡是所有的檔案資料夾列表。您可以看到每個資料夾都有一些基本屬性，包括資料夾名稱，下層資料夾數目，可以連到檔案列表的連結，以及您也可以看到這個資料夾是否對外公開。</p><p>在「<b>顯示資料夾</b>」這個部分的功能，您可以察看這邊的<a href=\"admin.php?op=Help&amp;helpId=editResourceAlbum\">說明</a>。</p>";

$messages["editResourceAlbum"] = "<p>您可以在這裡設定檔案資料夾的屬性。大部分的選項都與<a href=\"admin.php?op=Help&amp;helpId=newResourceAlbum\">這裡</a>的說明相同，除了多了一個 「 <b>向使用者顯示資料夾</b>」項目。如果您勾選了這個項目，那麼瀏覽者瀏覽到您的網誌站台時，便可以看到這個資料夾，如果不勾選，那麼便不會公開。這個功能在某些使用者希望保持檔案隱密時相當有用。</p>";

$messages["help_newResource"] = "<p>您可以在這裡新增檔案到您的網誌站台中。您可以上傳各式各樣的檔案，而pLog對某些特殊格式的檔案—例如照片、影片、壓縮檔或音樂檔案—會自動產生一些檔案屬性說明。</p>	<p>首先，您必須從硬碟中，選擇您要上傳的檔案，然後，您可以加上關於這個檔案的相關說明文字。接著請選擇您要將這個檔案在上傳後放置在哪一個資料夾中，當一切就緒，請按下「<b>新增檔案</b>」上傳。</p><p>請注意，如果您要使用這個功能，那麼系統管理員必須要開放檔案上傳功能，而系統管理員也會設定某些檔案類型禁止上傳，而這些設定都會出現在只有系統管理員可以看到的「<b>全站系統管理</b>」當中。</p><p>檔案上傳功能同時也需要伺服器上有一個寫入權限開放的目錄。</p>";

$messages["help_resources"] = "<p>您可以在這裡看到所有已經上傳到檔案中心的檔案，所有的檔案都會放置在不同的資料夾當中，您可以察看檔案、修改每個檔案的屬性、或是刪除檔案。只要在勾選之後，按下「<b>刪除選擇的項目</b>」按鈕，便可以將勾選的檔案刪除。</p><p>點選資料夾便可以瀏覽資料夾下的項目，或是按下「<b>編輯</b>」，便可進入資料夾的屬性頁面。點選「..」便可以回到上一層目錄。點選檔案名稱或是預覽縮圖（如果有的話），您便會進入檔案的屬性頁面，修改檔案的相關屬性。";

$messages["help_blogSecurity"] = "您可以在這邊使用pLog所提供的系統安全機制。不過您在這邊所做的設定只會影響到您目前所在的網誌站台，不會影響到其他站台的設定。";

$messages["help_blogBlockedHosts"] = "您可以在這裡看到您的網誌站台所設定的阻擋主機列表。您可以看到為什麼這些主機被阻擋的理由，還有設定阻擋規則的日期以及類別。您可以在勾選項目後，按下「刪除選擇的項目」按鈕，刪除您先前所設定的主機阻擋規則。";

$messages["help_newBlogBlockedHost"] = "<p>您可以在這裡阻擋某個特定的網路位置，或是某個網路區段，不讓從這個位置來的使用者瀏覽您的網誌站台。您也可以設定成讓他們可以瀏覽，但是不可以發表文章。請輸入網路位置，並且做適當的設定。比方說，如果您要阻擋192.168.1.123這個位置，您便必須在填入IP位置後，並設定為「32 bits」，這麼一來便可以阻擋從某個固定IP連線的使用者。如果您想要阻擋多個位置，而不只是要阻擋單一位置，例如您同時想要阻擋192.168.1.123、192.168.1.225、192.168.1.21以及192.168.1.67的話，您可以檔掉整個網路區段。請在輸入IP位置後，選擇「24 bits」、「16 bits」或「8 bits」，阻擋不同範圍的區段。<br/><br/><b>舉例如下</b>：<br/><br/>192.168.1.123 - 32 bits：阻擋192.168.1.123這個IP<br/>192.168.1.123 - 24 bits：阻擋192.168.1下的所有IP<br/>192.168.1.123 - 16 bits：阻擋192.168下的所有IP<br/>192.168.1.123 - 8 bits：阻擋192下的所有IP<br/></p><p>「<b>阻擋類別</b>」這個下拉選單，可以讓您決定被阻擋的使用者會遇到的狀況，您可以讓他無法瀏覽您的網誌站台（系統會送出一個錯誤訊息），或是讓他不能夠發表文章。如果您選擇後者，那麼他還是可以閱讀站上的文章以及迴響留言。</p><p>您也可以對阻擋主機的理由稍作說明，方便您日後可以知道您當初為什麼把對方檔掉了。</p>";

$messages["editBlogBlockedHost"] = "您可以在這裡修改主機阻擋規則。在這裡可以調整的項目與<a href=\"admin.php?op=Help&amp;helpId=newBlogBlockedHost\">這裡</a>相同。";

$messages["editBlogFilteredContent"] = "您可以在這裡修改內容過濾規則。在這裡可以調整的項目與<a href=\"admin.php?op=Help&amp;helpId=newBlogFilteredContent\">這裡</a>相同。";

$messages["help_blockedHosts"] = "您可以在這裡看到所有的系統阻擋主機列表。您可以在點選IP位置後，對阻擋規則進行相關設定。這些設定會套用到系統中的所有網誌站台上，如果個別的網誌站台又做了相同的主機阻擋設定，系統會忽略這些個別的設定。";

$messages["help_newBlockedHost"] = "您可以在此建立本站的<b>全域</b>主機阻擋規則。在
<a href=\"admin.php?op=Help&amp;helpId=newBlogBlockedHost\">這裡</a>您可以看到更詳盡的說明。";

$messages["editBlockedHost"] = "本頁用以顯示您的阻擋主機規則列表。詳細說明請見<a href=\"admin.php?op=Help&amp;helpId=newBlogBlockedHost\">這裡</a>.";

$messages["editFilteredContent"] = "本頁用以顯示您的內容過濾規則列表。詳細說明請見<a href=\"admin.php?op=Help&amp;helpId=newBlogFilteredContent\">這裡</a>。";

/////
$messages["blogBlockedHosts"] = $messages["blockedHosts"];
$messages["newBlogBlockedHost"] = $messages["newBlockedHost"];
$messages["newBlogUser"] = $messages["createUser"];

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

$messages["register_new_blog_step3_title"] = "Thank you! (3/3)";
$messages["register_new_blog_step3_description"] = "
 <p>
    Registration is complete. Your new user and diary have been registered successfully in this site,
    and you can log in now into your blog and start blogging!
 </p>";
$messages["register_step3_admin_link"] = "
  <p>
    Click here <a href=\"admin.php\">to go the admin interface</a>, if you want to start blogging.
 </p>";
$messages["register_step3_blog_link1"] = "
 <p>
    Or click <a href=\"";

$messages["register_step3_blog_link2"] = "
\">here to go and see your new blog</a>.
 </p>";

$messages["register_step3_final_message"] = "
 <p>
  Happy blogging!
 </p>";


$messages["register_error_incorrect_username"] = "<li>Incorrect user name, please try again.<br/>";
$messages["register_error_incorrect_email"] = "<li>Email address is invalid, please try again. <br/>";
$messages["register_error_user_already_exist"] = "<li>There is already a user with that name, please try again.<br/>";
$messages["register_error_incorrect_password"] = "<li>Password is invalid, please try again. <br/>";
$messages["register_error_passwords_dont_match"] = "<li>Passwords do not match, please try again. <br/>";
$messages["register_error_adding_user"] = "Error adding the user: ";
$messages["register_error_creating_blog"] = "There was an error creating the new blog";
$messages["register_error_blog_name"] = "<li>You should choose a better name for the blog.<br/>" ;
?>
