<?php

// Japanese locale file for pLog0.3
// localized by CMS-Labo CMS研究所 http://www.chipmunk.gr.jp/
// このpLog0.3用日本語ファイルで不備な点がありましたら、上記サイトまでご連絡下さい。
// 

// set this to the encoding that should be used to display the pages correctly
$messages["encoding"] = "EUC-JP";
$messages["locale_description"] = "pLog0.3 Japanese locale file for EUC-JP Version";
// days of the week
$messages["days"] = Array( "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday" );
// -- compatibility, do not touch -- //
$messages["Monday"] = $messages["days"][1];
$messages["Tuesday"] = $messages["days"][2];
$messages["Wednesday"] = $messages["days"][3];
$messages["Thursday"] = $messages["days"][4];
$messages["Friday"] = $messages["days"][5];
$messages["Saturday"] = $messages["days"][6];
$messages["Sunday"] = $messages["days"][0];

// abbreviations
$messages["daysshort"] = Array( "Su", "Mo", "Tu", "We", "Th", "Fr", "Sa" );
// -- compatibility, do not touch -- //
$messages["Mo"] = $messages["daysshort"][1];
$messages["Tu"] = $messages["daysshort"][2];
$messages["We"] = $messages["daysshort"][3];
$messages["Th"] = $messages["daysshort"][4];
$messages["Fr"] = $messages["daysshort"][5];
$messages["Sa"] = $messages["daysshort"][6];
$messages["Su"] = $messages["daysshort"][0];

// months of the year
$messages["months"] = Array( "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" );
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

$messages["message"] = "メッセージ";
$messages["error"] = "エラー";

$messages["date"] = "Date";

// miscellaneous texts
$messages["of"] = "of";
$messages["recently"] = "最新記事...";
$messages["comments"] = "コメント";
$messages["comment on this"] = "コメント";
$messages["my_links"] = "my Links";
$messages["archives"] = "アーカイヴ";
$messages["search"] = "検索";
$messages["calendar"] = "カレンダー";
$messages["editLinkCategories"] = "カテゴリー";
$messages["search_s"] = "検索";
$messages["link_tracker"] = "Link Tracker";
$messages["search_this_blog"] = "blog内の検索：";
$messages["about_myself"] = "私は誰？";
$messages["permalink_title"] = "Permanent link to the archives";
$messages["permalink"] = "Permalink";
$messages["posted_by"] = "投稿者";
$messages["on_the"] = "on the";
$messages["page"] = "ページ";
$messages["posted"] = "posted";

$messages["reply"] = "返信";


// add comment form
$messages["add_comment"] = "コメント作成";
$messages["comment_topic"] = "トピック";
$messages["comment_text"] = "テキスト";
$messages["comment_username"] = "あなたの名前";
$messages["comment_email"] = "E-Mail（あれば）";
$messages["comment_url"] = "URL（あれば）";
$messages["comment_send"] = "送信";
$messages["comment_added"] = "コメントを受付けました！";
$messages["comment_add_error"] = "エラー：コメントを作成できませんでした";


$messages["article_does_not_exist"] = "記事はありません";
$messages["no_posts_found"] = "投稿記事は見付かりませんでした";
$messages["user_has_no_posts_yet"] = "投稿したものはありません";

$messages["info_about_myself"] = "その他の情報...";
$messages["back"] = "戻る";

$messages["back_top"] = "トップに戻る";

$messages["post"] = "post";

$messages["trackbacks_for_article"] = "トラックバックの記事タイトル";
$messages["trackback_excerpt"] = "Excerpt";
$messages["trackback_weblog"] = "Weblog";

$messages["search_results"] = "検索結果";
$messages["search_matching_results"] = "次の記事は、あなたの検索語と一致しました：";
$messages["search_no_matching_posts"] = "一致する記事は見付かりませんでした";

$messages["see_all_link"] = "全ての記事を見るには、ここをクリックして下さい";

$messages["read_more"] = "（続き...）";

$messages["anonymous_poster"] = "匿名投稿者";

$messages["syndicate"] = "SYNDICATE";

$messages["main"] = "Main";

////// error messages /////
$messages["error_fetching_article"] = "指定した記事を見つけることができませんでした。";
$messages["error_fetching_articles"] = "記事を取得する事が出来ませんでした。";
$messages["error_trackback_no_trackback"] = "この記事にTrackbackはありません。";
$messages["error_incorrect_article_id"] = "記事を見つける事が出来ませんでした。";
$messages["error_incorrect_blog_id"] = "ジャーナルを見つける事が出来ませんでした。";
$messages["error_comment_without_text"] = "テキストを入力して下さい。";
$messages["error_comment_without_name"] = "名前を入力して下さい。";
$messages["error_adding_comment"] = "エラー：コメントを作成する事が出来ませんでした。";
$messages["error_incorrect_parameter"] = "パラメーターが正しくありません。";
$messages["error_parameter_missing"] = "要求された中に正しくないパラメーターが存在します。";
$messages["error_blog_has_no_links"] = "このblogにリンクはありません。";
$messages["error_comments_not_enabled"] = "このサイトではコメントが無効となってます。";

/////////////////                                          //////////////////
///////////////// STRINGS FOR THE ADMINISTRATION INTERFACE //////////////////
/////////////////                                          //////////////////


////// help messages for the administration interface /////
$messages["help_newPost"] = "<p>Use this page to add a new post to your journal. You should provide a topic or subject
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
<p>The referers are the urls of all the hosts that visited this post, and the trackbacks table represents
how many trackback pings have been received for this post. They can't be deleted or modified.</p>";

$messages["help_editLinks"] = "<p>This is a list with all the links that have been added. Like posts, every
link can be sorted in different categories and then displayed in the main page for visitors to see.</p>
<p>For every link, you will see here its name, the url where it is pointing to and under which category
it has been sorted. Finally you can also delete any of the links.</p>";

$messages["help_newLink"] = "<p>You can add a new link from here. You have to provide at least a valid
url and a name for the link. The description field is optional but useful to have more information
about the link. You need at least one link category before you can add any link.</p>";

$messages["help_editLinkCategories"] = "<p>This is a list with all the link categories that have been
created. Like with posts, you need at least one link category before you can add any link. Clicking
on the <b>'Links'</b> column will show all the links that belong to the category.</p>";

$messages["help_newLinkCategory"] = "<p>The only thing you need to provide in order to have a new
link category is a descriptive name for the category. Once the link category has been created,
it will be available for links to be categorized under.</p>";

$messages["help_userSettings"] = "<p>Things related to your user profile can be changed from this
page. Please note that your username cannot be changed.<ul>
<li><b>Password, Confirm Password</b>: If you would like to change your password, please type it in
the first text box. Do the same in the second box to confirm that you entered the same password.</li>
<li><b>Email address</b>: Please set this to a valid email address if you would like to use features
such as the notification when a comment is received to a post. It is used only for internal
purposes and will not be publicly displayed.</li>
<li><b>Bio</b>: You can type here some information about yourself. It can be left empty.</li>
</ul></p>";

$messages["help_Stats"] = "<p>You can see from here all the referers that have hit this site in the past.
The <b>'Article'</b> column reflects which article was visited by the referer or the value <b>'0'</b>
if the referer visited the main page or any other page which was not an article. Finally, the
<b>'Last hit date'</b> column is the time of the last hit received from that referer.</p>";

$messages["editLink"] = "<p>You have to provide at least a url and a name for the link. The link must also
be categorized under a category.</p>";

$messages["editLinkCategory"] = "Please provide a new name for the link category you are updating.</p>";

$messages["blogSelect"] = "メニューからオペレーションの1つを選んでください。";

$messages["Error"] = "要求されたオペレーション中にエラーがありました。 エラーに関するより多くの情報はメインページを見て下さい。";

$messages["Message"] = "メッセージに関するより多くの情報はメインページを見てください。";

//////// strings for the administration interface ///////



$messages["admin_interface_title"] = "pLog 管理者画面";
$messages["administration"] = "管理設定";
$messages["help"] = "Help";
$messages["plog_help"] = "pLog Help";
$messages["newPost"] = "新規投稿";
$messages["editPosts"] = "投稿一覧";
$messages["editArticleCategories"] = "カテゴリー";
$messages["admin_links"] = "リンク";
$messages["editLinkCategories"] = "リンク カテゴリー";
$messages["settings"] = "設定";
$messages["Logout"] = "ログアウト";

// new post page
$messages["topic"] = "トピック";
$messages["text"] = "テキスト";
$messages["category"]  = "カテゴリー";
$messages["status"] = "ステータス";
$messages["post_status_draft"] = "非公開";
$messages["post_status_published"] = "公開";
$messages["post_status_deleted"] = "削除";
$messages["post_status_all"] = "全て";
$messages["send_notification"] = "コメントがあればメール通知する";
$messages["send_trackback_pings"] = "投稿内容からリンクを見付けてTrackback pingを送ります。";
$messages["add_post"] = "投稿する";

$messages["xmlrpc_ping_ok"] = "XML-RPC Pingは送られました ";
$messages["error_sending_xmlrpc_ping"] = "エラー：XML-RPC Pingは送られませんでした ";
$messages["error_sending_xmlrpc_ping_message"] = "エラーメッセージ： ";

$messages["preview"] = "プレビュー";
$messages["post_added"] = "投稿を受付けました";
$messages["you_will_be_notified"] = "尚、この投稿にコメントが送られた場合は、あなたにメール通知されます。";
$messages["post_added_not_published"] = "投稿は受付けましたが公開されませんでした。";
$messages["error_adding_post"] = "エラー：投稿を受付ける事が出来ませんでした！";
$messages["error_must_fill_all_fields"] = "全ての項目に記入して下さい！";
$messages["error_must_have_one_category"] = "投稿を作成する前に、少なくとも１つのカテゴリーを作成しなければなりません";

// send trackbacks page
$messages["send_trackback_pings"] = "Trackback Pingを送る";
$messages["links_found"] = "あなたの投稿内にリンクを見つけました。Tackback pingを送って欲しいものにチェックを入れて下さい（時間をとる場合があります。ご注意下さい）";
$messages["trackbacks_no_urls_selected"] = "URLが選択されませんでしたのでTrackback pingは送られませんでした。";
$messages["trackbacks_received_ok"] = "次のホストはTrackback pingを受け取りました：";
$messages["trackbacks_no_trackback"] = "次のリンクは有効なTrackback URLを持ってませんでした： ";
$messages["trackbacks_problems_sending"] = "次のホストのもとへTrackback pingを送る間に、いくつかの問題がありました。再度送信する事ができます。";
$messages["trackbacks_received_all_hosts"] = "全てのホストはTrackback pingを受け取りました。";
$messages["ping_selected"] = "Pingを送る";

// edit posts
$messages["author"] = "投稿者";
$messages["category_all"] = "全て";
$messages["author_all"] = "全て";
$messages["update"] = "更新";
$messages["date"] = "日時";
$messages["help_Stats"] = "ステータス";
$messages["delete"] = "削除";

$messages["delete_selected"] = "対象を削除";

// edit post
$messages["edit_post"] = "記事の編集";
$messages["error_getting_post_to_update"] = "エラー：選択された記事を更新する事ができませんでした。";
$messages["error_updating_post_in_database"] = "エラー：記事を更新できませんでした。";
$messages["post_successfully_updated"] = "記事を更新しました。";
$messages["notification_removed"] = "この記事のコメント通知機能が解除されました。";

// post statistics
$messages["statistics_for_post"] = "記事ステータス ";
$messages["error_fetching_post"] = "エラー：記事を取得する事が出来ませんでした。";
$messages["times_post_has_been_read"] = "閲覧回数： ";
$messages["referers"] = "リファラー";
$messages["id"] = "ID";
$messages["url"] = "URL";
$messages["hits"] = "ヒット";
$messages["trackbacks"] = "Trackbacks";

// post comments
$messages["error_fetching_comments"] = "エラー：コメントを取得できませんでした";
$messages["comments_for_post"] = "記事へのコメント ";
$messages["email"] = "E-Mail";
$messages["ip_address"] = "IPアドレス";

// delete comments
//*** NEW ***//
// please remove these comments after translating these lines
$messages["error_no_comments_selected"] = "削除するコメントが選択されてません。";
$messages["error_deleting_comment"] = "エラー：コメントを削除する事ができませんでした。 ";
$messages["comment_deleted_ok"] = "トピック\"%s\"のコメントは削除されました。";
//*** NEW ***//
// please remove these comments after translating these lines


// categories list
$messages["category_name"] = "名前";

// removing posts
$messages["post_cannot_be_deleted"] = "記事を削除する事はできません";
$messages["no_posts_selected"] = "エラー：削除する記事が選択されてません。";
// %s = subject of the post, %d = identifier of the post. feel free to change its order
// but if you remove them there will be no information about which post was removed...
$messages["error_deleting_post"] = "エラー：記事の削除 \"%s\" (id = %d)";
$messages["post_deleted_ok"] = "記事 \"%2\$s\" は削除されました (id = %1\$d)";

// delete categories
$messages["no_categories_selected"] = "エラー：削除するカテゴリーが選択されてません。";
$messages["error_category_has_articles"] = "このカテゴリーに１つ以上の記事があるので、カテゴリー \"%s\" を削除する事ができませんでした。記事を削除し、再び試みてください。";
$messages["error_deleting_category"] = "エラー：カテゴリー \"%s\" を削除できませんでした。";
$messages["category_deleted_ok"] = "カテゴリー \"%s\" を削除しました。";

// add category
$messages["newArticleCategory"] = "新規カテゴリー作成";
$messages["add_new_category_info"] = "新しいカテゴリーに有効な名前を入力して下さい。";
//*** NEW ***//
// please remove these comments after translating these lines
$messages["category_added_ok"] = "カテゴリーを作成しました。";
$messages["error_adding_article_category"] = "エラー：カテゴリーを作成できませんでした。";
//*** NEW ***//
// please remove these comments after translating these lines

// edit categories
$messages["edit_category"] = "カテゴリーの編集";
$messages["please_provide_valid_category_name"] = "カテゴリーに有効な名前を入力して下さい。";

// edit category
//*** NEW ***//
// please remove these comments after translating these lines
$messages["error_incorrect_category_id"] = "カテゴリーを認識できませんでした";
//*** NEW ***//
// please remove these comments after translating these lines

// update the category
$messages["error_fetching_category"] = "エラー：カテゴリーを取得できませんでした。";
$messages["error_updating_category"] = "カテゴリーを更新する間にエラーがありました。";
//*** NEW ***//
// please remove these comments after translating these lines
$messages["error_empty_category_name"] = "カテゴリーに有効な名前を入れて下さい。";
//*** NEW ***//
// please remove these comments after translating these lines
$messages["category_updated_ok"] = "カテゴリーを更新しました。";

// edit links
$messages["link_name"] = "名前";
$messages["link_url"] = $messages["url"];
$messages["link_category"] = $messages["category"];
$messages["link_description"] = "説明";
$messages["editLinks"] = "リンク";

// edit a link
$messages["error_provide_name_and_url"] = "リンクに名前およびURLを入力して下さい。";
$messages["error_invalid_link_id"] = "このリンクは無効かあるいは見あたりません。";
$messages["error_fetching_link"] = "リンクを取得する事ができませんでした。";
$messages["error_updating_link"] = "リンクを更新する事ができませんでした。";
$messages["link_updated_ok"] = "リンクを更新しました！";
$messages["error_fetching_link_categories"] = "リンクカテゴリーを取得する事ができませんでした。";

// add a link
$messages["add_new_link"] = "新規リンクの作成";
$messages["newLink"] = "リンク作成";
$messages["error_adding_link"] = "リンクを加える間にエラーがありました。";
$messages["link_added_ok"] = "リンクを作成しました。";
$messages["error_provide_name_and_url"] = "名前およびアドレスを入力して下さい。";
$messages["error_must_have_one_link_category"] = "リンクを作成する前に、少なくとも１つのリンクカテゴリーを作成しなければなりません。";

// delete a link
$messages["error_no_links_selected"] = "削除するリンクが選択されてません。";
$messages["error_removing_link"] = "エラー：リンク \"%s\" を削除できませんでした。";
$messages["link_deleted_ok"] = "リンク \"%s\" を削除しました。";

// edit link categories
$messages["newLinkCategory"] = "新規リンクカテゴリーの作成";
$messages["link_categories_help"] = "リンクを加える前に、少なくとも１つのリンクカテゴリーを作成しなければなりません。";
$messages["link_category_name"] = "名前";
$messages["link_category_links"] = "リンク";

// new link category
$messages["new_link_category_info"] = "リンクカテゴリーを持つと、異なるリンクを分類する事で管理を楽にします。さらにメインページにてカテゴリーを使用してグループ化されたリンクを表示する事もできます。";
$messages["newLinkCategory"] = "リンクカテゴリーの作成";
$messages["error_provide_link_category_name"] = "有効なリンクカテゴリー名を入力して下さい。";
$messages["error_adding_link_category"] = "リンクカテゴリーを加える間にエラーがありました。";
$messages["link_category_added_ok"] = "リンクカテゴリーを作成しました。";

// edit link category
$messages["edit_link_category"] = "リンクカテゴリーの編集";
$messages["error_updating_link_category"] = "リンクカテゴリーを更新する間にエラーがありました。";
$messages["link_category_updated_ok"] = "リンクカテゴリーを更新しました。";
$messages["error_fetching_link_category"] = "リンクカテゴリーの取得ができません。";
$messages["error_incorrect_link_category_id"] = "リンクカテゴリーを認識できませんでした";


// delete link categories
$messages["error_no_link_category_selected"] = "削除するリンクカテゴリーが選択されてません。";
$messages["error_links_in_link_category"] = "カテゴリー \"%s\" 下にリンクが存在する為、削除する事ができません。リンクを削除してから再び試みてください。";
$messages["error_removing_link_category"] = "エラー：カテゴリー \"%s\" を削除できませんでした。";
$messages["link_category_deleted_ok"] = "リンクカテゴリー \"%s\" を削除しました。";
// this error is shown when for some reason the category could not be fetched from the database
// and we can't show its name
$messages["error_removing_link_category_2"] = "削除不能のリンクカテゴリーID = %d";

// blog settings page
$messages["blogSettings"] = "Blog設定";
$messages["userSettings"] = "ユーザー プロフィール";
$messages["pluginCenter"] = "プラグインセンター";
$messages["Stats"] = "ステータス";
$messages["blog_name"] = "Blog名";
$messages["long_blog_name"] = "このBlogについての説明";
$messages["language_used"] = "テキストと日付の言語設定";
$messages["items_main_page"] = "メインページに表示する記事数は？";
$messages["items_as_recent"] = "\"最新記事\"に表示する記事数は？";
$messages["template_used"] = "あなたのBlogの外観を選択します";
$messages["cut_posts"] = "長すぎる投稿を切断して\"続き...\"としてリンクしますか？";
$messages["cut_posts_after_characters"] = "文書を切断する長さ（スペース、改行の量で判断します）";
$messages["enable_wysiwyg_edition"] = "テキスト入力にWYSIWYGエディタを使用する（Internet Explorer 5.5以上またはMozilla 1.3b以上）";
$messages["enable_comments"] = "全投稿にコメントを許可する";
$messages["yes"] = "はい";
$messages["no"] = "いいえ";
$messages["error_invalid_locale"] = "無効な言語設定です";
$messages["error_incorrect_max_recent_items"] = "最新記事に表示するアイテム数に対し、有効な値を提示しなければなりません。";
$messages["error_incorrect_number_of_posts"] = "メインページに表示する記事数に対し、有効な値を提示しなければなりません。";
$messages["error_incorrect_template"] = "選択されたテンプレートがありません。";
$messages["error_no_blog_name"] = "Blogに有効な名前を提示しなければなりません。";
$messages["error_incorrect_show_more_threshold"] = "長文の記事を切断し\"続き...\"リンクを有効にするには、切断する文字数に有効な値を提示しなければなりません。";
$messages["error_updating_settings"] = "Blogのセッティングを更新する間にエラーがありました。";
$messages["blog_settings_updated_ok"] = "Blogの設定を更新しました！";
$messages["permanent_blog_url"] = "このBlogのURL（変更不可）";

// user profile page
$messages["username"] = "ユーザー名";
$messages["password"] = "パスワード";
$messages["confirm_password"] = "パスワード確認";
$messages["email_address"] = "Email";
$messages["bio"] = "付加情報";
$messages["empty_no_change"] = "変更時のみ";
$messages["user_settings_updated_ok"] = "ユーザー設定を更新しました。";
$messages["error_updating_user_settings"] = "エラー：ユーザー設定の更新ができませんでした。";
$messages["error_passwords_dont_match"] = "パスワードが一致してません。";
$messages["error_incorrect_password"] = "パスワードが正しくありません。";
$messages["error_incorrect_email_address"] = "Emailアドレスが有効ではありません。";

// plugin center page
$messages["plugins_available"] = "これはテンプレートの中で使用することができるプラグインのリストです";
$messages["identifier"] = "識別（ID）";
$messages["description"] = "説明";
$messages["error_plugins_disabled"] = "このサイトではプラグインのサポートが無効となりました。";

// statistics page
$messages["statistics_info"] = "記事IDにある数字はTrackback pingによるヒット数です。ヒット欄はそれ以外のMainページにアクセスされたヒット数です。";
$messages["article_id"] = "記事ID";
$messages["last_hit_date"] = "最新ヒット日時";
$messages["error_fetching_referers"] = "リファラーを取得する事ができませんでした。";


// login screen
$messages["login_page_title"] = "pLog 管理者画面";
$messages["login"] = "ログイン";
$messages["welcome_message"] = "ようこそ pLogへ";
$messages["error_incorrect_username_or_password"] = "ユーザー名とパスワードが一致しません。";
$messages["error_dont_belong_to_any_blog"] = "あなたのBlogが存在しません。";
$messages["error_no_username_or_password"] = "有効なユーザー名とパスワードを提示して下さい。";
$messages["choose_one_blog"] = " あなたは次のBlogに属しています。作業するBlogを選択して下さい";
$messages["continue"] = "選択";
$messages["logout_message"] = "ログアウトしました。";
$messages["logout_message_2"] = "<a href=\"admin.php\">ここをクリック</a>するとログイン画面に戻ります。<a href=\"%1\$s\">%2\$sはここをクリック</a>。";
$messages["logout_title"] = "ログアウト";
$messages["error_access_forbidden"] = "アクセスが禁止されてます。ここで証明されなければなりません。";

/////////////////////////////////////////////////////////////////////
//
//
// new strings added for 0.2
//
//
////////////////////////////////////////////////////////////////////
$messages["site_admin"] = "サイト管理";
$messages["site_stats"] = "サイト統計";
$messages["createUser"] = "ユーザー追加";
$messages["siteUsers"] = "ユーザー";
$messages["createBlog"] = "Blog追加";
$messages["editSiteBlogs"] = "Blogs";
$messages["siteLocales"] = "言語";
$messages["newLocale"] = "言語の追加";
$messages["siteTemplates"] = "テンプレート";
$messages["newTemplate"] = "テンプレート追加";
$messages["editSiteSettings"] = "システム設定";
$messages["adminSettings"] = "サイト設定";
$messages["help_comments_enabled"] = "サイト全体のコメントを許可にするか無効にします。";
$messages["help_beautify_comments_text"] = "コメントを記入する場合、リスペクトフォーマットする。";
$messages["help_rdf_enabled"] = "最新投稿を含むRDFの生成を可能にするか無効にします。";
$messages["help_temp_folder"] = "pLogによって何個かのオペレーションを実行するのに使われる一時的フォルダー（例：tmp）。";
$messages["help_base_url"] = "このURLはシステム全体に必要とされますので、間違わないよう正しいURLを記入して下さい。";
$messages["help_show_posts_max"] = "メインページに表示する記事数。";
$messages["help_recent_posts_max"] = "最新記事への表示数。";
$messages["help_template_folder"] = "pLogで使われるテンプレートのパス。";
$messages["help_default_template"] = "デフォルトにするテンプレート。";
$messages["help_default_locale"] = "新規Blogやログインページ、管理者画面で使われる言語の設定。";
$messages["help_html_allowed_tags_in_comments"] = "ユーザーのコメントで削除対象外のHTMLタグ。";
$messages["help_referer_tracker_enabled"] = "リファラーの取得要望があれば、基本的な情報をデータベースに加える事が出来ます。";
$messages["help_rss_parser_enabled"] = "RSSパーサーを可能にするか無効にします。テンプレートの修正が必要です。";
$messages["help_show_more_enabled"] = "デフォルトで\"続き...\"機能を有効にするか無効にします。";
$messages["help_show_more_threshold"] = "\"続き...\"機能を作動させる文字の長さ（スペース、改行の量で判断します）";
$messages["help_update_article_reads"] = "各記事が読まれたかを表す内部カウンターを使用するかしないか。";
$messages["help_request_format_mode"] = "\"検索エンジン用\"はサーチエンジン・ロボットが解析し易いURLへ変換し、\"通常\"モードはスクリプトで生成されるURLを表示します。Apacheおよび.htaccessファイルを使用する可能性があります。";
$messages["help_xmlrpc_ping_enabled"] = "投稿されるごとに下に表示されたホストのへXMLRPC通知を送る。";
$messages["help_xmlrpc_ping_hosts"] = "XMLRPC通知を支援するホストのリスト。一行に一ホストを記入してください。";
$messages["help_trackback_server_enabled"] = "Trackbackリクエストを受け入れる。";
$messages["help_htmlarea_enabled"] = "投稿へのWYSIWYGエディタを可能にするか無効にします。";
$messages["help_plugin_manager_enabled"] = "プラグインを可能にするか無効にします。";
$messages["help_check_email_address_validity"] = "新規blogを登録する際、ユーザーが有効なメールアドレスを記入したか確認します。（サーバーにより機能しない場合があります。その場合は無効を選択して下さい）";
$messages["help_summary_page_show_max"] = "サマリーページに表示する記事数。";
$messages["help_minimum_password_length"] = "パスワードの最小文字数。";
$messages["help_users_can_add_templates"] = "登録ユーザーがblogのテンプレートを追加可能にするか無効にします。";
$messages["help_email_service_enabled"] = "コメント通知機能のメールサービスを有効にするか無効にします。";
$messages["post_notification_source_address"] = "メールサービスの差出人として使うメールアドレスを記入して下さい。";
$messages["help_email_service_type"] = "メール送信に使うメソッド。１つを選択し、下記の設定をチェックする事を忘れないで下さい。";
$messages["help_smtp_host"] = "メソッドにSMTPを選択してる場合は、ここにSMTPのホストを記入します。";
$messages["help_smtp_port"] = "SMTPサーバーのポート番号。";
$messages["help_smtp_use_authentication"] = "SMTPサーバーが認証を要求する場合は\"はい\"を選択し、下記で2つの設定をして下さい。";
$messages["help_smtp_username"] = "SMTPサーバーが認証を要求する場合に使われるユーザー名。";
$messages["help_smtp_password"] = "SMTPサーバーが認証を要求する場合に使われるパスワード。";
$messages["help_uploads_enabled"] = "ファイルのアップロードを許可するか無効にします。新規テンプレートのアップロードは、既存のテンプレートに影響を与える事に注意して下さい。";
$messages["help_maximum_file_upload_size"] = "ユーザーによるアップロードファイルの最大byteサイズ。";
$messages["help_upload_forbidden_files"] = "アップロードを許可しないファイルパターンを記入して下さい。スペースを入れる事で複数ファイルを設定出来ます。";
$messages["help_path_to_tar"] = "'tar'のパス";
$messages["help_path_to_gzip"] = "'gzip'のパス";
$messages["help_path_to_bz2"] = "'bzip2'のパス";
$messages["help_path_to_unzip"] = "'unzip'のパス";

$messages["add_user_give_information"] = "新規のユーザを作るために次の情報を入力してください。";

$messages["site_registered_users"] = "このサーバー内に登録されたユーザ。";

$messages["add_blog_give_information"] = "新規blogを作成するために次の情報を入力してください。";
$messages["blog_title"] = "Blogタイトル";
$messages["blog_owner"] = "Blogオーナー";

$messages["site_registered_blogs"] = "このサイトで登録されたblog。";
$messages["editSiteUsers"] = "ユーザー編集";

$messages["upload_locale"] = "言語のアップロード";
$messages["use_this_form_to_upload_locale"] = " このフォームは新しい言語ファイルをサーバーにアップロードすることに使ってください。 既に言語ファイルをlocaleフォルダーにアップロードされてる場合は、下のフォームへ移動してください。";
$messages["locale_file"] = "言語ファイル";
$messages["manually_add_locale"] = "言語ファイルの追加";
$messages["use_this_form_if_cant_upload_locale"] = "既に新しい言語ファイルがサーバーにアップロードされてる場合に、データベースに新しい言語を追加するのに使われます。新しい言語ファイルの言語コードを入力し『言語の追加』ボタンを押して下さい。";
$messages["locale_code"] = "言語コード";
$messages["locale_encoding"] = "エンコード";

$messages["template_will_be_available_for_all"] = "新しいテンプレートは自動的にこのサイトの全てのウェブログで使用可能になります。";

$messages["use_this_form_to_upload_template"] = " このフォームは新しいテンプレートをサーバーにアップロードする事に使います。既にテンプレートをアップロード済みの場合は、下のフォームへ移動して下さい。テンプレートファイルは zip、tar.gz 、tar.bz2形式にされてる必要があります。";
$messages["locale_file"] = "言語ファイル";
$messages["upload_template"] = "テンプレートのアプロード";
$messages["manually_add_template"] = "テンプレートの追加";
$messages["use_this_form_if_cannot_upload_template"] = "既に新しいテンプレートがサーバーにアップロードされてる場合に、データベースに新しいテンプレートを追加するのに使われます。テンプレートIDを入力し『テンプレートの追加』ボタンを押して下さい。";
$messages["template_id"] = "テンプレートID";

$messages["templates_available_for_all"] = "このサイト全体で使われてるテンプレート。";
$messages["add_file"] = "ファイルの追加";

$messages["setting_name"] = "名前";
$messages["setting_value"] = "設定";
$messages["setting_description"] = "説明";

$messages["plain"] = "通常";
$messages["search_engine_friendly"] = "検索エンジン用";

$messages["general_settings"] = "一般設定";
$messages["helper_tools_settings"] = "補助ツール設定";
$messages["uploads_settings"] = "アップロード設定";
$messages["email_settings"] = "Email設定";

$messages["number_blogs"] = "blog数";
$messages["number_users"] = "ユーザー数";
$messages["number_posts"] = "投稿数";
$messages["number_posts_today"] = "本日の投稿数";
$messages["number_posts_this_month"] = "今月の投稿数";

$messages["date"] = "日付";
$messages["time"] = "時間";

$messages["comments_order"] = "コメント表示方法：";
$messages["oldest_first"] = "古い順";
$messages["newest_first"] = "新しい順";

$messages["blog"] = "Blog";
$messages["blog_id"] = "Blog IDナンバー";

$messages["showBlogUsers"] = "Blogユーザー";
$messages["available_users"] = "利用可能なユーザー";
$messages["add"] = "追加";
$messages["remove"] = "削除";

$messages["user_id"] = "ユーザーIDナンバー";

$messages["new_password"] = "新パスワード";
$messages["has_administrator_privileges"] = "管理者権限を与える";
$messages["related_to_the_following_blogs"] = "次のblogと関係してます";

$messages["add_user_to_blog_form"] = "このフォームは、あなたのblogにユーザーを追加する事を可能にします。追加されたユーザーは記事の投稿や編集が可能になりますが、blog設定の変更は許可されません。";
$messages["add_user_enter_username"] = "あなたが追加したいユーザーのユーザー名を入力して下さい。追加するユーザーはサーバーに登録されたユーザーでなければなりません。";
$messages["add_user_send_notification"] = "このユーザーへ通知メールを送ります。";
$messages["add_user_type_notification"] = "このユーザーのもとへ送られるメールの案内を入力して下さい。";

$messages["following_users_have_permissions"] = "下記のユーザーは、このblogのユーザーです。このユーザーは記事の投稿、編集、削除の権限が与えられてますが、このサイトの設定を変更する権限は与えられません。";
$messages["revoke_permissions"] = "許可しない";

$messages["newBlogTemplate"] = "テンプレートのアップロード";
$messages["manually_newBlogTemplate"] = "テンプレートの追加";
$messages["template_available_only_for_this_blog"] = "このテンプレートは、このblogにのみ利用可能となります。";
$messages["use_form_to_upload_blog_template"] = "このフォームは新しいテンプレートをサーバーにアップロードする事に使います。既にテンプレートをアップロード済みの場合は、下のフォームへ移動して下さい。テンプレートファイルは zip、tar.gz 、tar.bz2形式にされてる必要があります。";
$messages["use_form_if_cannot_upload_blog_template"] = "既に新しいテンプレートがサーバーにアップロードされてる場合に、データベースに新しいテンプレートを追加するのに使われます。テンプレートIDを入力し『テンプレートの追加』ボタンを押して下さい。";

$messages["blogTemplates"] = "Blogテンプレート";
$messages["templates_only_available_for_this_blog"] = "下記テンプレートは、このblogで利用可能なテンプレートです。";

$messages["add_file_to_blog_template"] = "テンプレートファイルの追加";
$messages["upload_file_to_blog_template"] = "追加したいテンプレートファイルをアップロードして下さい。";

$messages["error_user_id_incorrect"] = "ユーザーIDが正しくありません。";
$messages["error_incorrect_user_id"] = $messages["error_user_id_incorrect"];
$messages["error_fetching_user_information"] = "ユーザー情報取得にエラーがありました。";
$messages["error_password_incorrect"] = "パスワードが短すぎるか正しくありません。";
$messages["error_updating_user_settings"] = "ユーザー設定の更新が出来ませんでした。";
$messages["user_settings_updated_ok"] = "ユーザー \"%s\" の設定を更新しました。";
$messages["error_no_users_selected_to_add"] = "追加するユーザーが選択されていません。";
$messages["user_added_to_blog_ok"] = "ユーザー \"%s\" のblogを追加しました。";
$messages["error_adding_user_to_blog"] = "ユーザー \"%s\" のblogの追加にエラーがありました。";
$messages["error_no_users_selected_to_remove"] = "削除するユーザーが選択されていません。";
$messages["user_removed_from_blog_ok"] = "ユーザー \"%s\" のblogを削除しました。";
$messages["error_removing_user_from_blog"] = "ユーザー \"%s\" のblog削除にエラーがありました。";

$messages["error_incorrect_plugin_id"] = "プラグインIDが正しくありません。";
$messages["error_configuring_plugin"] = "プラグイン形成にエラーがありました： ";
$messages["site_config_saved_ok"] = "サイト構成を保存しました。";
$messages["error_saving_site_config"] = "サイト構成の保存に問題がありました。";

$messages["error_incorrect_blog_owner"] = "blogオーナーに選ばれたユーザーは存在しません。";
$messages["error_updating_blog_settings"] = "blog \"%s\" の設定を更新する間にエラーがありました。";
$messages["blog_settings_updated_ok"] = "blog \"%s\" の設定を更新しました。";

$messages["error_fetching_users"] = "このサイトのユーザー取得にエラーがありました。";

$messages["error_fetching_blogs"] = "このサイトのblog取得にエラーがありました。";

$messages["error_incorrect_template_id"] = "テンプレートID有効でなく存在しません。";

$messages["error_no_users_selected"] = "削除するユーザーが選択されていません。";
$messages["error_could_not_find_user"] = "ユーザー \"%s\" を見付けることが出来ませんでした。";
$messages["error_deleting_user"] = "ユーザー \"%s\" の削除にエラーがありました。";
$messages["user_deleted_ok"] = "ユーザー \"%s\" を削除しました。";

$messages["error_must_give_blog_name"] = "blogに有効な名前を与えなければなりません。";
$messages["error_adding_blog"] = "データベースにblogを追加する間に、エラーがありました。";
$messages["blog_added_ok"] = "データベースに新しいblog \"%s\" を追加しました。";

$messages["error_template_not_inside_folder"] = "テンプレートファイルがフォルダー内にありません。";
$messages["error_missing_base_files"] = "基本的なファイルのいくつかが見あたりません。";
$messages["error_unpacking"] = "ファイルの解凍時にエラーがありました。";
$messages["error_forbidden_extensions"] = "テンプレート内のいくつかのファイルが禁止されました。";
$messages["error_creating_working_folder"] = "テンプレート・セットのチェック中にエラーがありました。";
$messages["error_checking_template"] = "テンプレート・セット中のエラー (code = %s)";
$messages["error_add_template_disabled"] = "ユーザーは、このサイトのテンプレート追加が許可されていません。";
$messages["error_must_upload_file"] = "ファイルをアップロードして下さい。";
$messages["error_no_template_name"] = "テンプレート名を与えて下さい。";
$messages["error_uploads_disabled"] = "アップロード機能は、このサイトで無効にされました。";
$messages["error_installing_template"] = "テンプレート・セットのインストールにエラーがありました。";
$messages["template_installed_ok"] = "新しいテンプレート・セットは \"%s\" としてインストールされました。";

$messages["error_adding_template_file"] = "テンプレート・セットにファイルを追加する間にエラーがありました。";
$messages["error_file_forbidden"] = "このファイルのタイプは、このサイトでは禁止されています。";
$messages["error_file_too_big"] = "このファイルは大きすぎます。許可されてる最大サイズは \"%s\" byteまでです。";
$messages["template_file_added_ok"] = "テンプレート \"%s\" は追加されました。";

$messages["error_plugin_cannot_be_configured"] = "プラグインを形成することが出来ませんでした。";

$messages["error_incorrect_username"] = "このユーザー名は正しくありません。";
$messages["error_username_already_exists"] = "同じユーザー名で登録されたユーザーが既に存在しています。";
$messages["error_adding_user"] = "データベースにユーザーを追加する間にエラーがありました。";
$messages["user_added_ok"] = "新規ユーザー \"%s\" は追加されました。";

$messages["error_no_blogs_selected"] = "少なくとも削除するblogを１つは選択して下さい。";
$messages["error_blog_is_default_blog"] = "\"%s\" はデフォルトのblogのため、削除する事が出来ません。";
$messages["blog_deleted_ok"] = "Blog \"%s\" は削除されました。";
$messages["error_deleting_blog"] = "blog \"%s\" を削除する間にエラーがありました。";

$messages["error_no_templates_selected"] = "削除するテンプレートが選択されていません。";
$messages["error_removing_template"] = "テンプレート \"%s\" を削除する間にエラーがありました。";
$messages["template_removed_ok"] = "テンプレート \"%s\" を削除しました。";

$messages["error_no_users_selected_to_remove_from_blog"] = "このblogから削除するユーザーが選択されていません。";
$messages["error_removing_user_from_blog"] = "このblogからユーザー \"%s\" を削除する間にエラーがありました。";
$messages["user_removed_from_blog_ok"] = "このblogからユーザー \"%s\" を削除しました。";

$messages["error_incorrect_locale_code"] = "この言語コードは有効ではありません。";
$messages["error_invalid_locale_file"] = "このファイルは有効な言語ファイルではないようです。";
$messages["error_adding_locale_file"] = "新しい言語ファイルを追加する間にエラーがありました。このオペレーションに先立ってlocaleフォルダーにファイルがアップロードされており、正しい許可を得ていることを確認して下さい。";
$messages["locale_added_ok"] = "新しい言語 \"%s\" を追加しました。";
$messages["error_saving_locale"] = "新しい言語ファイルをlocaleフォルダーに保存する間にエラーがありました。フォルダーが正しいアクセス権を持っていることを確認してください。";

$messages["error_no_locales_selected"] = "削除する言語が選択されていません。";
$messages["error_deleting_only_locale"] = "この言語はシステムにおいて利用可能なただ１つの言語です。したがって削除する事ができません。";
$messages["locale_deleted_ok"] = "言語 \"%s\" を削除しました。";
$messages["error_deleting_locale"] = "言語 \"%s\" を削除する間にエラーがありました。";
$messages["error_cant_delete_default_locale"] = "\"%s\" はデフォルトで設定された言語ファイルなので削除する事が出来ません。";

$messages["plugin_config"] = "プラグイン コンフィギュレーション";

$messages["use_read_more_feature"] = "テキストを2段階表示にする（本文中に\"続き...\"として記事を分割します）";

$messages["extended_text"] = "『設定』タブで2段階表示を無効にすると、このテキストBOXに入力されたテキストは表示されません。";

$messages["error_must_give_post_intro"] = "少なくとも導入テキストを与えなければなりません。";
$messages["error_no_albums_defined"] = "このblogで利用可能なアルバムはありません。";
$messages["error_fetching_album"] = "アルバムの取得中にエラーがありました";
$messages["comment_marked_as_spam_ok"] = "コメントをスパム マークしました。";
$messages["comment_marked_as_nonspam_ok"] = "コメントのスパム マークを解除しました。";
$messages["error_marking_comment_as_nonspam"] = "スパム マーク解除中にエラーがありました。";
$messages["error_marking_comment_as_spam"] = "コメントのスパム マーク中にエラーがありました。";
$messages["error_incorrect_comment_id"] = "コメントIDが正しくありません。";


///// new help messages ////

//
// translators: this one has changed too since we now have two text boxes: one for the
// text that we'd like to appear in the main page and another one for the text that
// will only be shown in the 'post' page (that is, when the users clicks on the
// permalink, for example)
//
$messages["help_newPost"] = "<p>Use this page to add a new post to your journal. You should provide a topic or subject
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

$messages["updatePost"] = $messages["help_newPost"];

$messages["help_newBlogUser"] = "This option allows you to easily give editing permissions to other
users in this blog. To do so, you only have to know its username. If you already know it,
simply type it in the text field below and press the \"Add User\" button. If you wish, you can
also send an email to this user (as long as he or she used the right address when
registering) notifying him or her that he has now been granted permissions to add, edit
and delete posts in this blog.";

$messages["help_showBlogUsers"] = "This is a list of the users that have been given editing permissions
in this blog. You can see their profile if you wish or you can also revoke their permissions
by selectin them and then clicking on the \"Revoke Permissions\" button. Once you do that,
the selected users will no longer be able to publish anything in this blog.";

//
// note to translators:
//
// added some additional text here to inform about the new "configure" feature
//
$messages["help_pluginCenter"] = "<p>From here you can see which plugins have been installed. For every
plugin, you will see its identifier (the identifier you have to use when developing templates and
want to make use of the plugin features), the author of the plugin, and some descriptive text with
various information about the plugin, mainly how to use it.</p>
<p>Some plugins offer also their own configuration page from wich you can modify some
aspects of its behaviour. To access such page, please click on the \"configure\" link
next to every plugin.</p>";

$messages["configurePlugin"] = "This plugin provides some settings that can be configured
by the user.";

$messages["help_newBlogTemplate"] = "<p>It is possible to easily add new templates to the system. To do
so, there are two possibilities: the template can either be uploaded as a compressed file
(tar.gz, tar.bz2 and zip files are supported) to the server or it canbe manually
uploaded using any available method.</p>
<p>If the first method is chosen, the contents of the file must have all been packaged
under a folder which will be the name given to the template.</p>
<p>If the second method is chosen, simply upload the files to a folder under your blog-specific folder
and type in the name of the folder in the text box below.</p>
<p>Plugins added here will only be available to this specific below and will not be able to
be accessed by other blogs.</p>";

$messages["help_blogTemplates"] = "<p>This is a list with all the templates that have been added to
this blog. If you wish to remove any of them, please select them and click on the
\"Delete Selected\" button below the list. Once a template is deleted it cannot be
recovered, since it is removed from the disk.</p>";

$messages["help_adminSettings"] = "<p>These are some very basic statistics about the site.</p>";

$messages["help_createUser"] = "<p>We can easily register new users in the system by using this form.
We only need to provide with a valid username and a password, and optionally an email address.
Users registered here will not be attached to any blog unless we explicitly do so in the
\"User\" section or until we create a blog specially for this new user.</p>";

$messages["editUserProfile"] = "<p>From here we can edit the profile of any user in this blog. We can
also grant administrator privileges to the user (or revoke them). A list of the blogs to which
the user belogs is also displayed.</p>";

$messages["help_editSiteUsers"] = "<p>These are all the users that are registered in this site. You can see and edit
their profile by clicking on the username or you can delete any of them by clicking on the
checkbox of the user(s) and then click on the \"Delete Selected\" button. Once a user
has been deleted, it can <b>not</b> be recovered, so please be careful.</p>";

$messages["help_createBlog"] = "<p>Unlimited blogs can be added to a single installation of pLog. Users
can use the registration script provided in the main package but administrator can also
register new blogs by using this form. The only things needed to know are the name that will
 be given to the blog and the user who will be the owner, having the maximum privileges
 over that blog.</p>";

 $messages["help_editSiteBlogs"] = "<p>This is a list with all the blogs that have been registered
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

$messages["help_newLocale"] = "<p>Now locales can be easily added to the site using this feature. If
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

$messages["help_siteLocales"] = "<p>This is a list with all the language files that have been
installed in this site. For each one of them, the encoding used by it and a brief
description can be seen. Also, language files can be removed from the system by selecting
them and clicking on the \"Delete Selected\" button.</p>";

$messages["help_newTemplate"] = "<p>It is possible to easily add new templates to the system. To do
so, there are two possibilities: the template can either be uploaded as a compressed file
(tar.gz, tar.bz2 and zip files are supported) to the server or it can be manually
uploaded using any available method.</p>
<p>If the first method is chosen, the contents of the file must have all been packaged
under a folder which will be the name given to the template.</p>
<p>If the second method is chosen, simply upload the files to a folder under your blog-specific folder
and type in the name of the folder in the text box below.</p>
<p>Plugins added here will be available to <b>all</b> the blogs in this site.</p>";

$messages["help_siteTemplates"] = "<p>This is a list with all the templates that are globally
available to all blogs. If you wish to remove any of them, please select them and click on the
\"Delete Selected\" button below the list. Once a template is deleted it cannot be
recovered, since it is removed from the disk.</p>";

$messages["help_editSiteSettings"] = "These are all the global settings that control many aspects of the
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
$messages["show_category_in_main_page"] = "メインページに、このカテゴリーを表示する";
$messages["welcome_resource_center"] = "リソース センターへようこそ！";
$messages["resourceCenter"] = "リソース センター";
$messages["resourceAlbums"] = "リソース アルバム";
$messages["resources"] = "リソース";
$messages["newResource"] = "リソースの追加";
$messages["newResourceAlbum"] = "アルバムの追加";
$messages["album"] = "アルバム";
$messages["album_name"] = "アルバム名";
$messages["parent_album"] = "親アルバム";
$messages["no_parent_album"] = "親アルバムなし";
$messages["resource_info"] = "リソース情報";
$messages["size"] = "サイズ";
$messages["format"] = "フォーマット";
$messages["dimensions"] = "大きさ";
$messages["bits_per_sample"] = "ビット/ピクセル";
$messages["bytes"] = "バイト";
$messages["pixels"] = "ピクセル";
$messages["time_offset"] = "タイム オフセット（サーバー間の時差を調整）：";
$messages["hours"] = "時間";
$messages["album_added_ok"] = "新規アルバムを追加しました。";
$messages["name"] = "名前";
$messages["children"] = "子";
$messages["see"] = "見る";
$messages["view"] = "表示";
$messages["resource_info"] = "リソース情報";
$messages["number_of_channels"] = "チャンネル数";
$messages["length"] = "長さ";
$messages["number_of_files"] = "ファイル数";
$messages["compressed_size"] = "圧縮されたサイズ";
$messages["uncompressed_size"] = "未圧縮のサイズ";
$messages["resource_file"] = "あなたが追加したいファイル";
$messages["add_to_album"] = "ファイルを追加したいアルバム";
$messages["edit_resource_album"] = "リソース アルバムの編集";
$messages["error_loading_resource_album"] = "リソース アルバムを取得する間にエラーがありました。";
$messages["error_album_id_parameter_missing"] = "アルバムIDが正しくありません。";
$messages["error_album_parent_id_parameter_missing"] = "親アルバムIDが見付かりません。";
$messages["error_updating_resource_album"] = "リソース アルバムの更新中にエラーがありました。";
$messages["resource_album_updated_ok"] = "リソース アルバム \"%s\" を更新しました。";
$messages["error_must_give_album_name"] = "アルバム名を入力して下さい。";
$messages["error_adding_album"] = "リソース アルバムの追加中にエラーがありました。";
$messages["album_added_ok"] = "新規アルバム \"%s\" を追加しました。";
$messages["resource_added_ok"] = "新規リソースを追加しました。";
$messages["error_resource_forbidden_extension"] = "禁止されたエクステンションがあったので、リソースに追加する事が出来ませんでした。";
$messages["error_resource_too_big"] = "大きすぎたのでリソースに追加する事が出来ませんでした。";
$messages["error_uploads_disabled"] = "このサイトではアップロードが禁止されてるので、リソースを追加する事が出来ませんでした。";
$messages["error_adding_resource"] = "リソースを追加する間にエラーがありました。";
$messages["error_loading_resource"] = "リソースを取得中にエラーがありました";
$messages["error_updating_resource"] = "リソースを更新中にエラーがありました。";
$messages["resource_updated_ok"] = "リソース \"%s\" をアップデートしました。";
$messages["error_no_resources_selected"] = "削除するリソースが選択されていません。";
$messages["resource_deleted_ok"] = "リソース \"%s\" を削除しました。";
$messages["error_deleting_resource"] = "リソース \"%s\" を削除する間にエラーがありました。";
$messages["error_no_resource_uploaded"] = "アップロードされたリソースはありません。";
$messages["filteredContent"] = "禁止済みコンテンツ";
$messages["global_filtered_content"] = "全体適用の禁止済みコンテンツ";
$messages["newFilteredContent"] = "禁止コンテンツ";
$messages["blockedHosts"] = "禁止済みホスト";
$messages["global_blocked_hosts"] = "全体適用の禁止ホスト";
$messages["newBlockedHost"] = "禁止ホスト";
$messages["blogSecurity"] = "セキュリティー";
$messages["security_welcome"] = "セキュリティー エリアへようこそ！";
$messages["filtered_content_intro"] = "以下のコンテンツ/正規表現は、このblogで禁止されました。";
$messages["global_filtered_content_intro"] = "以下のコンテンツ/正規表現は全体的に禁止されました。";
$messages["content"] = "コンテンツ";
$messages["reason"] = "理由";
$messages["add_filtered_content"] = "禁止コンテンツの追加";
$messages["add_filtered_content_intro"] = "ここで加えられた文章は全て禁止され、禁止された文章が含まれたユーザーによるコメントは全て投稿が禁止されます。ここでは正規表現か文字列で指定する事ができます。正規表現での指定がより強力ですが、もし間違った正規表現を指定すると全ての内容が禁止される可能性があるので慎重に扱って下さい。";
$messages["global_add_filtered_content_intro"] = "ここで加えられた文章は、このサイトで利用されてるblog全てで禁止され、禁止された文章が含まれたユーザーによるコメントは全て投稿が禁止されます。ここでは正規表現か文字列で指定する事ができます。正規表現での指定がより強力ですが、もし間違った正規表現を指定すると全ての内容が禁止される可能性があるので慎重に扱って下さい。";
$messages["content_to_block"] = "禁止する文章";
$messages["block_this"] = "禁止する";
$messages["mask"] = "マスク";
$messages["access_blocked"] = "アクセスの禁止";
$messages["posting_blocked"] = "投稿の禁止";
$messages["block_host_intro"] = "このblogで禁止するホストを追加して下さい。この機能についての詳細な情報は<a href=\"javascript:help_window('admin.php?op=Help&amp;helpId=newBlogBlockedHost');\">Help</a>を見て下さい。";
$messages["global_block_host_intro"] = "このサイト内のblog全体で禁止するホストを追加して下さい。この機能についての詳細な情報は<a href=\"javascript:help_window('admin.php?op=Help&amp;helpId=newBlogBlockedHost');\">help item</a>を見て下さい。";
$messages["block_type"] = "禁止タイプ";
$messages["error_invalid_ip_address"] = "IPアドレスが正しくありません。";
$messages["error_provide_content_to_block"] = "禁止する文章を入力して下さい。";
$messages["error_must_create_album_first"] = "リソースを追加する前にアルバムを作る必要があります。";
$messages["error_resource_is_not_an_image"] = "選択されたリソースは画像ではありません。";
$messages["error_generating_resource_preview"] = "このリソースのプレビューを再生成する間にエラーがありました。";
$messages["resource_preview_generated_ok"] = "このリソースのプレビューを生成しました。";
$messages["regenerate_preview"] = "プレビューの再生成";
$messages["show_album"] = "アルバムの表示";
$messages["show_album_when_browsing"] = "このアルバムをユーザーに見せる";
$messages["assigned_to_blog"] = "ユーザーを割り当てるblog";
$messages["clean_up"] = "クリーン-アップ";
$messages["purge_info"] = "浄化機能は、マークされた投稿をすべてを物理的に削除します。そうでなければ、それらの投稿はデータ・ベース(ユーザがそれらのうちのいくつかを回復したい場合)中で維持されます。
  しかし、無用にデータ・ベースのサイズを相当量拡大させるかもしれません。そのような投稿を削除したい場合はボタンを下に押してください。";
$messages["spam_info"] = "スパム マークされたコメントはフィルタされデータ・ベースの中で維持されます。一旦機能が実行されればスパム マークされたコメントは表示されません。
  また、削除を望む場合はスパム コメントの除去ボタンを押して下さい。";
$messages["no_spam"] = "スパムしない";
$messages["spam"] = "スパム";
$messages["mark_as_spam"] = "スパム マーク";
$messages["mark_as_no_spam"] = "スパム マークしない";
$messages["enable_comments_for_post"] = "この投稿へのコメントを許可する";
$messages["close_window"] = "ウインドウを閉じる";
$messages["newResource"] = "リソースの追加";
$messages["add_resource_preview"] = "プレビューの追加";
$messages["newResourceAlbum"] = "アルバムの追加";
$messages["show_main_page"] = "メインページに表示";
$messages["purge_spam_comments"] = "スパム コメントの除去";
$messages["purge_posts"] = "投稿の除去";
$messages["keep_spam_comments"] = "スパム コメントの維持";
$messages["throw_away_spam_comments"] = "スパム・コメントの削除";
$messages["error_adding_blocked_host"] = "禁止ホストの追加中にエラーがありました。";
$messages["blocked_host_added_ok"] = "ホスト %s は禁止ホストのリストに追加されました。";
$messages["error_no_blocked_hosts_selected"] = "削除するホストが選択されてません。";
$messages["blocked_host_deleted_ok"] = "ホスト \"%s\" を削除しました。";
$messages["error_deleting_blocked_host"] = "禁止ホスト \"%s\" の削除中にエラーがありました。";
$messages["edit_blocked_host"] = "禁止ホストの編集";
$messages["error_fetching_blocked_host"] = "禁止ホストの取得中にエラーがありました。";
$messages["error_updating_blocked_host"] = "禁止ホストの更新中にエラーがありました。";
$messages["thumbnail_format"] = "サムネイル フォーマット";
$messages["same_as_image"] = "オリジナル画像と同じ";
$messages["same"] = $messages["same_as_image"];



$messages["help_locale_folder"] = "言語ファイルが収められるフォルダー。";
$messages["help_default_locale"] = "新規blogが作成される時に使用されるデフォルトの言語。";
$messages["help_xmlrpc_api_enabled"] = "あなたのデスクトップから記入するために、XMLRPCインターフェースを可能にするか不能にします。";
$messages["default_rss_profile"] = "デフォルトで生成されるRSS/RDF（特別な指定がなければ）";
$messages["help_security_pipeline_enabled"] = "セキュリティー機能を有効にします。これを無効にする事は、全てのセキュリティー機能が無効になります。";
$messages["help_ip_address_filter_enabled"] = "私たちのサイトを妨害するホストの為に、IPアドレスのフィルター機能を有効にします。";
$messages["help_content_filter_enabled"] = "ある語か表現式を含むコメントを防止する為の、シンプルな正則表現のコンテンツ フィルターを有効にします。";
$messages["help_maximum_comment_size"] = "許可するコメントの最大バイト長。";
$messages["help_bayesian_filter_enabled"] = "ベイジアン フィルターを有効にするか無効にします。";
$messages["help_bayesian_filter_spam_probability_treshold"] = "コメントがスパムと考えられる極小値。0.01から0.99の間にであるべきです。";
$messages["help_bayesian_filter_nonspam_probability_treshold"] = "コメントが安全である最大値をnon-spam（ノン・スパム）としました。上記最小値との間では、全てnon-spam（ノン・スパム）と判定されます。しかし、完全に判定するにはデータをトレーニングする必要があります。";
$messages["help_bayesian_filter_min_length_token"] = "パーサーによって扱われる有効な単語の最小値。";
$messages["help_bayesian_filter_max_length_token"] = "有効な単語の最大値。";
$messages["help_bayesian_filter_number_significant_tokens"] = "メッセージ中に含まれる単語数";
$messages["help_bayesian_filter_spam_comments_action"] = "スパム マークを付けられたコメントの処理方法。完全に削除（データベースには保存されない）するか、表示はしないがデータを保存する事ができます。現在のフィルターがあまりトレーニングされておらず、時々判定でミスをする場合は第2オプションが推奨されます。";
$messages["help_path_to_convert"] = "ImageMagickでサムネイルを作成する場合、'convert'ツールを指定して下さい。";
$messages["help_thumbnail_height"] = "サムネイルの最大高さ。";
$messages["help_resources_folder"] = "リソースが保存されるフォルダー。あなたがユーザーにリソース フォルダーの閲覧を許可しないのなら、サーバー内の何処へでもフォルダー指定する事が可能です。";

$messages["help_thumbnails_keep_aspect_ratio"] = "サムネイルの縦横比を維持するか維持しないか。";
$messages["help_resources_enabled"] = "『リソースセンター』機能を有効にするか無効にします。";
$messages["help_thumbnail_method"] = "イメージファイルからサムネイルを作成するのに使われるバックエンド システム。もしImageMagickを使用するなら下記の設定が必要です。";
$messages["help_thumbnail_width"] = "サムネイルの最大幅。";
$messages["external_interfaces"] = "外部インターフェース";
$messages["security_settings"] = "セキュリティー設定";
$messages["bayesian_filter_settings"] = "ベイジアン フィルター設定";
$messages["resources_settings"] = "リソース設定";
$messages["help_thumbnail_format"] = "イメージのプレビューを作成する時に使われるフォーマット。もし『オリジナル画像と同じ』に設定すれば、サムネイルが当初のイメージ フォーマットと同じフォーマットで作成されます。";
$messages["edit"] = "編集";
$messages["blocked_content_added_ok"] = "禁止コンテンツを追加しました。";
$messages["blocked_content_updated_ok"] = "禁止コンテンツを更新しました";
$messages["help_disable_javascript_calendar"] ="投稿の編集や追加をする時に、ユーザーのブラウザーの互換性で日付を取得出来ない場合、JavaScriptおよびDHTMLベースのカレンダーを無効にします。";
$messages["edit_filtered_content"] = "禁止コンテンツの編集";
$messages["error_updating_blocked_content"] = "禁止コンテンツの更新中にエラーがありました。";
$messages["audio_codec"] = "Audio Codec";
$messages["video_codec"] = "Video Codec";
$messages["sample_rate"] = "Sample rate";
$messages["files"] = "ファイル";
$messages["created"] = "作成日";
$messages["generated"] = "生成日";
$messages["about"] = "About";
$messages["menu"] = "Menu";
$messages["albums"] = "アルバム";
$messages["template_file"] = "テンプレート ファイル";
$messages["download"] = "ダウンロード";
$messages["error_you_have_been_blocked"] = "あなたの要請は許可されていません。";
$messages["error_base_storage_folder_missing_or_unreadable"] = "pLogによるリソース用フォルダの作成は出来ませんでした。これは、あなたのサーバーがPHPがsafe modeで運用されているか、ユーザーに十分な許可を与えられていないかなど、いくつかの理由によるかもしれません。次のフォルダーを手動で作成し、オペレーションを実行する事も可能です：<br/><br/>%s<br/><br/>上記のフォルダーが既に存在する場合、Webサーバーを実行するユーザーに読み書きする権限があるか確認して下さい。";

//
// help messages //
//

//
// translators: the following help messages have changed a little since last version, due to a few
// new features built on top of previous features
//
$messages["help_editArticleCategories"] = "<p>This is a listing with all the post categories that
have been created so far. There must be at least one category before you can add an article, since
every article has to be categorized under a category. The <b>'Articles'</b> column shows how many
articles have been categorized under the given category. In the same way, a category can't be deleted
if it has an article assigned it; you must first remove all the articles and then you will be allowed
to remove the category.</p>
<p>You can delete more than one category at the same time by cheching their <b>'Delete'</b> column
and then clickin on the <b>'Delete Selected'</b> button.</p>
<p>The <b>'Show In Main Page'</b> column shows wether this category is included in the main page or if alternatively,
it can also be seen when clicking its link. Edit the category itself to enable/disable this feature.</p>";

$messages["help_newArticleCategory"] = "<p>From here you can add a new post category to the blog. All
what you need to provide is a name for the new category. Once it has been created, it will be available
for posts to be categorized under.</p>
<p>You can disable the 'Show cateory in main page' checkbox if you don't want this category to be shown in the
main page of the site. If disabled, posts included in this category will only be shown when browsing this
specific category, by clicking its link.</p>";

$messages["editArticleCategory"] = "<p>Please provide a new name for the category you are updating. Also, 
define wether you would like to show posts belonging to this cateogry in the main page or not.</p>";

$messages["help_editPosts"] = "<p>Use this page to edit a post from your journal. The information from the
post has already been provided and now you can make your changes. Once you have finished, press the <b>'Update'</b> button and the post
will updated. Please note that you have to set the status of the post
to <b>'Published'</b> if you want it to appear in front page. Use the <b>'Draft'</b> status when you can't finish posting
now but you would like to save what you have typed so far for later revision.</p>
<p>If you would like to receive an email notifying about a new post, please check the corresponding
checkbox.</p>
<p>More information about the different options <a href=\"admin.php?op=Help&amp;helpId=newPost\">here</a>.</p>";

$messages["help_blogSettings"] = "<p>From this page you can change some of the settings that control the
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
$messages["help_resourceCenter"] = "From the resource center, you will be able to manage your files, group them in albums,
manage those albums and edit any of them.";

$messages["help_newResourceAlbum"] = "<p>You need at least one album to group your resources. From here you will be allowed
to add a new album, simply providing a name and a description for it. Only the name field is mandatory, being
the description field optional.</p>
<p>Use the <b>'Parent album'</b> field to set wether this is a top-level album or if it is a sub-album and has
another album as a parent.</p>";

$messages["help_resourceAlbums"] = "<p>This is a list including all the resource albums that have been created so far
in this site. For each album, several of its properties can be seen at a glance: its name, a link to its child 
albums (if any) and its amount, a link to its resources and its amount, wether the album is public or
private and a checkbox to delete as many of them as needed.</p>
<p>You can read more on the <b>'Show Album'</b> feature here <a href=\"admin.php?op=Help&amp;helpId=editResourceAlbum\">here</a></p>";

$messages["editResourceAlbum"] = "<p>From here you can edit the properties of a resource album. Almost all the fields
are the same as <a href=\"admin.php?op=Help&amp;helpId=newResourceAlbum\">here</a> except the 
<b>'Show album to users'</b> checkbox. If enabled, this album will be visible to users who browse our 
collection of albums and resources. If not, it will not be shown in the public side. This is useful in cases when
we want to keep some of the albums secret and don't want users peeking at them.</p>";

$messages["help_newResource"] = "<p>You will be able to upload new resources to your blog from this section. Any kind of file
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

$messages["help_resources"] = "<p>From here you will have access to all the resource files that have been uplaoded
in the blog. Files will be shown under the album to which they belong. For every resource file, it will be
possible to edit its properties, view it as any normal user will see it and mark it for deletion. Pressing the 
<b>'Delete Selected'</b> button from the bottom of the screen will delete those resources that have been
marked.</p>
<p>Click the folder icon to navigate to the contents of an albu, or the <b>'Edit'</b> to go to the album
properties page. Use the <b>'..'</b> link to go up one level. Clicking a resource name or preview (if available)
will take you to the resource properties page where you will be able to change some of the settings of the 
selected resource.";

$messages["help_blogSecurity"] = "From this section you will be able to edit set up some basic security mechanisms that
are provided by pLog. The changes you make here will only affect your blog and not everybody else's.";

$messages["help_blogFilteredContent"] = "<p>This is a list of all the rules for content filtering that have been added 
to this particular blog. Clicking any of them will take you to a page where you will be able to edit any of them.
Use the <b>'Delete'</b> checkbox to mark any of them for deletion, and press the <b>'Delete Selected'</b> button
once you are sure you want to delete those.</p>";

$messages["help_newBlogFilteredContent"] = "<p>You can add here a new rule for blocking undesired content from being
included in comments. You can use here single words or sentence or if you wish, you can use the power
of regular expressions if you know how to use them. You can also add a description to the rule so that you remember
in the future what it is about, but it is not a mandatory field.</p>";

$messages["help_blogBlockedHosts"] = "This is a list with all the hosts that have been blocked so far in this blog. At
a glance, it is possible to see for each host the reason why it was blocked, the date when it was blocked and
the type of the block applied. Lastly, you can also select any of the host blocking rules and press the
<b>'Delete Selected'</b> button when you are sure that you want to remove those rules.";

$messages["help_newBlogBlockedHost"] = "<p>This section will allow you to block a specific address or entire subnet from your Blog. You can select if you want them to be able to see it, but unable to post or simply unable to access it at all. Copy the offending address into the spaces provided and choose the proper subnet address space if necessary. Example: To block just the address of 192.168.1.123 you would choose the '32 bits' option to match the entire address. This blocks just this one address and works well for banning someone with a Static IP address. If you're seeing multiple IP Addresses for a particular individual (say 192.168.1.123, 192.168.1.225, 192.168.1.21 and 192.168.1.67) then you will want to ban a particular subnet range. Enter one of the IP Addresses that you see and choose '24 bits', '16 bits' or '8 bits'  to match the first 3 sections, first 2 sections or the first section respectively.<br/>
<br/>
<b>EXAMPLES</b>:<br/>
<br/>
192.168.1.123 - 32 bits: Matches only the 192.168.1.123 address<br/>
192.168.1.123 - 24 bits: Matches any address that starts with 192.168.1<br/>
192.168.1.123 - 16 bits: Matches any address that starts with 192.168<br/>
192.168.1.123 - 8 bits: Matches any address that starts with 192<br/>
</p>
<p>The <b>'Block type'</b> drop-down list will allow you to choose wether to block this host from 
completely accessign the site (an error page will be sent to the client's browser whenever trying to access) or
simply block it from posting new comments. If the latter is chosen, the host will still be allowed to read
articles and other people's comments.</p>
<p>You can also attach a reason/description to this host blocking rule, so that you can remember in the future why
it was set up.</p>";

$messages["editBlogBlockedHost"] = "You will be able to edit a host blocking rule from this section. The options
available are exactly the same as in <a href=\"admin.php?op=Help&amp;helpId=newBlogBlockedHost\">here</a>.";

$messages["editBlogFilteredContent"] = "This page will allow you to edit a content filtering rule. The options
are exactly the same as in <a href=\"admin.php?op=Help&amp;helpId=newBlogFilteredContent\">here</a>.";

$messages["help_filteredContent"] = "<p>This is a list of all the rules for content filtering that have been added 
to this site. These rules are site-wide and take precedence before any blog-specific rule that may have been
set by blog owners. The options and its meaning is the same as 
<a href=\"admin.php?op=Help&amp;helpId=blogFilteredContent\">here</a>.";

$messages["help_newFilteredContent"] = "<p>You can add here a new rule for blocking undesired content from being
included in comments. This rule will be used system-wide and will take preference before blog-specific
rules. See <a href=\"admin.php?op=Help&amp;helpId=newBlogFilteredContent\">this</a> for more information
on the options.";

$messages["help_blockedHosts"] = "This is a list with all the hosts that have been blocked so far system-wide. 
Clicking a rule IP address will allow us to edit the settings of that rule. These rules always take
precedence over blog-speficic rules, so that if one these global rules matches a host, all the other after
it will be ignored.";

$messages["help_newBlockedHost"] = "From here it is possible to add a new <b>global</b> host-blocking rule. See
<a href=\"admin.php?op=Help&amp;helpId=newBlogBlockedHost\">here</a> for more information about the options
available.";

$messages["editBlockedHost"] = "You will be able to edit a host blocking rule from this section. The options
available are exactly the same as in <a href=\"admin.php?op=Help&amp;helpId=newBlogBlockedHost\">here</a>.";

$messages["editFilteredContent"] = "This page will allow you to edit a content filtering rule. The options
are exactly the same as in <a href=\"admin.php?op=Help&amp;helpId=newBlogFilteredContent\">here</a>.";

/////
$messages["blogFilteredContent"] = $messages["filteredContent"];
$messages["newBlogFilteredContent"] = $messages["newFilteredContent"];
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