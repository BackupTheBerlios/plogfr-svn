<?php

// Japanese locale for pLog1.x
// localized by Mayu Hagiuda
// この言語ファイルで訂正・要望箇所等がありましたら以下のURLのpLog公式フォーラムへ
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
$messages['message'] = 'メッセージ';
$messages['error'] = 'エラー';
$messages['date'] = 'Date';

// miscellaneous texts
$messages['of'] = 'of';
$messages['recently'] = '最新記事';
$messages['comments'] = 'コメント';
$messages['comment on this'] = 'コメント';
$messages['my_links'] = 'リンク';
$messages['archives'] = 'アーカイヴ';
$messages['search'] = '検索';
$messages['calendar'] = 'カレンダー';
$messages['search_s'] = '検索';
$messages['search_this_blog'] = 'このBlogを検索:';
$messages['about_myself'] = '自己紹介';
$messages['permalink_title'] = 'アーカイヴへのPermanentリンク';
$messages['permalink'] = 'Permalink';
$messages['posted_by'] = '投稿者';
$messages['reply'] = '返信';

// add comment form
$messages['add_comment'] = 'コメント追加';
$messages['comment_topic'] = '題名';
$messages['comment_text'] = '内容';
$messages['comment_username'] = 'あなたの名前';
$messages['comment_email'] = 'E-Mail (オプション)';
$messages['comment_url'] = 'URL (オプション)';
$messages['comment_send'] = '送信';
$messages['comment_added'] = 'コメントを受付けました';
$messages['comment_add_error'] = 'エラー:コメントを追加できませんでした';
$messages['article_does_not_exist'] = 'その記事はありません';
$messages['no_posts_found'] = '登校記事はありません';
$messages['user_has_no_posts_yet'] = '投稿はまだありません';
$messages['back'] = '戻る';
$messages['post'] = '投稿';
$messages['trackbacks_for_article'] = '記事のTrackback: ';
$messages['trackback_excerpt'] = 'Excerpt';
$messages['trackback_weblog'] = 'Weblog';
$messages['search_results'] = '検索結果';
$messages['search_matching_results'] = '検索条件と一致する記事: ';
$messages['search_no_matching_posts'] = '一致する記事はありません';
$messages['read_more'] = '(続き...)';
$messages['syndicate'] = 'Syndicate';
$messages['main'] = 'メイン';
$messages['about'] = 'About';
$messages['download'] = 'ダウンロード';

////// error messages /////
$messages['error_fetching_article'] = 'ご指定の記事は見つかりませんでした。';
$messages['error_fetching_articles'] = '記事を取得することができませんでした。';
$messages['error_trackback_no_trackback'] = 'この記事にTrackbackはありません。';
$messages['error_incorrect_article_id'] = '記事を見つけることができませんでした。';
$messages['error_incorrect_blog_id'] = 'Blogを見つけることができませんでした。';
$messages['error_comment_without_text'] = 'テキストを入力して下さい。';
$messages['error_comment_without_name'] = '名前を入力して下さい。';
$messages['error_adding_comment'] = 'エラー:コメントを追加することができませんでした。';
$messages['error_incorrect_parameter'] = 'パラメーターが正しくありません。';
$messages['error_parameter_missing'] = '要求された中に無効なパラメーターが存在します。';
$messages['error_comments_not_enabled'] = 'このサイトではコメントが無効となっています。';
$messages['error_incorrect_search_terms'] = '検索条件が正しくありません。';
$messages['error_no_search_results'] = '検索条件に一致するものはありません。';
$messages['error_no_albums_defined'] = 'このBlogに設定されているアルバムはありません。';

/////////////////                                          //////////////////
///////////////// STRINGS FOR THE ADMINISTRATION INTERFACE //////////////////
/////////////////                                          //////////////////

// login page
$messages['login'] = 'ログイン';
$messages['welcome_message'] = 'pLogへようこそ';
$messages['error_incorrect_username_or_password'] = 'ユーザー名とパスワードが一致しません。';
$messages['error_dont_belong_to_any_blog'] = 'あなたのBlogはまだありません。';
$messages['logout_message'] = 'ログアウトが完了しました。';
$messages['logout_message_2'] = '<a href="%1$s">ここをクリック</a>するとログイン画面に戻ります。';
$messages['error_access_forbidden'] = 'アクセスが許可されていません。先にログインして下さい。';
$messages['username'] = 'ユーザー名';
$messages['password'] = 'パスワード';

// dashboard
$messages['dashboard'] = 'ダッシュボード';
$messages['recent_articles'] = '最新記事';
$messages['recent_comments'] = '最新コメント';
$messages['recent_trackbacks'] = '最新Trackback';
$messages['blog_statistics'] = 'Blog統計データ';
$messages['total_posts'] = '記事';
$messages['total_comments'] = 'コメント';
$messages['total_trackbacks'] = 'Trackback';
$messages['total_viewed'] = '記事閲覧';
$messages['in'] = 'In';

// menu options
$messages['newPost'] = '記事追加';
$messages['Manage'] = '記事管理';
$messages['managePosts'] = '記事＆カテゴリ管理';
$messages['editPosts'] = '記事リスト';
$messages['editArticleCategories'] = 'カテゴリリスト';
$messages['newArticleCategory'] = 'カテゴリ追加';
$messages['manageLinks'] = 'リンク管理';
$messages['editLinks'] = 'リンク';
$messages['newLink'] = 'リンク追加';
$messages['editLink'] = 'リンク編集';
$messages['editLinkCategories'] = 'リンクカテゴリ';
$messages['newLinkCategory'] = 'リンクカテゴリ追加';
$messages['editLinkCategory'] = 'リンクカテゴリ編集';
$messages['manageCustomFields'] = 'カスタム項目管理';
$messages['blogCustomFields'] = 'カスタム項目';
$messages['newCustomField'] = 'カスタム項目追加';
$messages['resourceCenter'] = 'リソースセンター';
$messages['resources'] = 'リソース一覧';
$messages['newResourceAlbum'] = 'アルバム追加';
$messages['newResource'] = 'リソース追加';
$messages['controlCenter'] = 'コントロールセンター';
$messages['manageSettings'] = '一般設定';
$messages['blogSettings'] = 'Blog設定';
$messages['userSettings'] = 'ユーザー設定';
$messages['pluginCenter'] = 'プラグインセンター';
$messages['Stats'] = '統計';
$messages['manageBlogUsers'] = 'Blogユーザー管理';
$messages['newBlogUser'] = 'Blogユーザー追加';
$messages['showBlogUsers'] = 'Blogユーザーリスト';
$messages['manageBlogTemplates'] = 'Blog テンプレート';
$messages['newBlogTemplate'] = 'Blogテンプレート追加';
$messages['blogTemplates'] = 'Blogテンプレート';
$messages['adminSettings'] = 'サイト管理';
$messages['Users'] = 'ユーザー管理';
$messages['createUser'] = 'ユーザー追加';
$messages['editSiteUsers'] = 'ユーザーリスト';
$messages['Blogs'] = 'Blog管理';
$messages['createBlog'] = 'Blog追加';
$messages['editSiteBlogs'] = 'Blogリスト';
$messages['Locales'] = '言語管理';
$messages['newLocale'] = '言語追加';
$messages['siteLocales'] = '言語リスト';
$messages['Templates'] = 'テンプレート管理';
$messages['newTemplate'] = 'テンプレート追加';
$messages['siteTemplates'] = 'テンプレートリスト';
$messages['GlobalSettings'] = 'システム管理';
$messages['editSiteSettings'] = 'サイト設定';
$messages['summarySettings'] = 'サマリー';
$messages['templateSettings'] = 'テンプレート';
$messages['urlSettings'] = 'URL';
$messages['emailSettings'] = 'E-Mail';
$messages['uploadSettings'] = 'アップロード';
$messages['helpersSettings'] = '補助ツール';
$messages['interfacesSettings'] = 'インターフェイス';
$messages['securitySettings'] = 'セキュリティ';
$messages['bayesianSettings'] = 'Bayesianフィルタ';
$messages['resourcesSettings'] = 'リソース';
$messages['searchSettings'] = '検索';
$messages['cleanUpSection'] = 'クリーンアップ';
$messages['cleanUp'] = 'クリーンアップ';
$messages['editResourceAlbum'] = 'アルバム編集';
$messages['resourceInfo'] = 'リソース編集';
$messages['editBlog'] = 'Blog編集';
$messages['Logout'] = 'ログアウト';

// new post
$messages['topic'] = 'トピック';
$messages['topic_help'] = '記事の題名';
$messages['text'] = '記事内容';
$messages['text_help'] = '記事の内容を入力して下さい。この内容は常にメインページに表示されます。';
$messages['extended_text'] = '追加内容';
$messages['extended_text_help'] = '(オプション)記事の追加内容を入力して下さい。この内容は記事ページやメインページに表示させることができます。詳細はBlog設定をご覧下さい。';
$messages['post_slug'] = 'Slug';
$messages['post_slug_help'] = 'Permanent Linkを発行する際に使用';
$messages['date'] = '日付';
$messages['post_date_help'] = 'この記事の公開日';
$messages['status'] = 'ステータス';
$messages['post_status_help'] = 'ステータスを選択して下さい';
$messages['post_status_published'] = '公開';
$messages['post_status_draft'] = 'ドラフト';
$messages['post_status_deleted'] = '削除済み';
$messages['categories'] = 'カテゴリ';
$messages['post_categories_help'] = '最低1件以上のカテゴリを選択して下さい';
$messages['post_comments_enabled_help'] = 'コメントを許可する';
$messages['send_notification_help'] = '新着コメントを通知する';
$messages['send_trackback_pings_help'] = 'Trackback送信';
$messages['send_xmlrpc_pings_help'] = 'XMLRPC Ping 送信';
$messages['save_draft_and_continue'] = 'ドラフト保存';
$messages['preview'] = 'プレビュー';
$messages['add_post'] = '追加';
$messages['error_saving_draft'] = 'ドラフト保存中にエラーが発生しました。';
$messages['draft_saved_ok'] = 'ドラフトの保存が完了しました。';
$messages['error_sending_request'] = 'リクエスト送信中にエラーが発生しました。';
$messages['error_no_category_selected'] = '最低1件以上のカテゴリを選択して下さい。';
$messages['error_missing_post_topic'] = '記事の題名を入力して下さい。';
$messages['error_missing_post_text'] = '記事の内容を入力して下さい。';
$messages['error_adding_post'] = '記事の追加中にエラーが発生しました。';
$messages['post_added_not_published'] = '記事の追加が完了しましたが非公開の状態です。';
$messages['post_added_ok'] = '記事の追加が完了しました。';
$messages['send_notifications_ok'] = '新着コメント/Trackbackがある度に通知が送信されます。';

// send trackbacks
$messages['error_sending_trackbacks'] = '以下のTrackback送信中にエラーが発生しました';
$messages['send_trackbacks_help'] = 'Trackback Pingを送信するURLを選指定して下さい。また、そのサイトがTrackbackをサポートしているかご確認ください。';
$messages['send_trackbacks'] = 'Trackback送信';
$messages['ping_selected'] = 'Ping 選択';
$messages['trackbacks_sent_ok'] = '指定のURLへTrackbackの送信が完了しました';

// posts page
$messages['show_by'] = '検索条件';
$messages['category'] = 'カテゴリ';
$messages['author'] = '投稿者';
$messages['post_status_all'] = '全て';
$messages['author_all'] = '全て';
$messages['search_terms'] = '検索キーワード';
$messages['show'] = '検索';
$messages['delete'] = '削除';
$messages['actions'] = '操作';
$messages['all'] = '全て';
$messages['category_all'] = '全て';
$messages['error_incorrect_article_id'] = '記事は見つかりませんでした。';
$messages['error_deleting_article'] = '記事 "%s" の削除中にエラーが発生しました。';
$messages['article_deleted_ok'] = '記事 "%s" の削除が完了しました。';
$messages['articles_deleted_ok'] = '記事 %s の削除が完了しました。';
$messages['error_deleting_article2'] = '"%s"件の記事の削除中にエラーが発生しました。';

// edit post page
$messages['update'] = '更新';
$messages['editPost'] = '記事の編集';
$messages['error_fetching_post'] = '記事の取得中にエラーが発生しました。';
$messages['post_updated_ok'] = '記事 "%s" の更新が完了しました。';
$messages['error_updating_post'] = '記事の更新中にエラーが発生しました。';
$messages['notification_added'] = '新しいコメント/Trackbackがあった際には通知が送信されます。';
$messages['notification_removed'] = '新しいコメント/Trackbackがあっても通知を送信しません。';

// post comments
$messages['url'] = 'URL';
$messages['comment_status_all'] = '全て';
$messages['comment_status_spam'] = 'スパム';
$messages['comment_status_nonspam'] = '非スパム';
$messages['error_fetching_comments'] = 'コメント取得中にエラーが発生しました。';
$messages['error_deleting_comments'] = 'コメントが削除されていないまたはコメント削除中にエラー発生しました。';
$messages['comment_deleted_ok'] = 'コメント "%s" の削除が完了しました。';
$messages['comments_deleted_ok'] = '%s 件のコメントの削除が完了しました。';
$messages['error_deleting_comment'] = 'コメント "%s" の削除中にエラー発生しました。';
$messages['error_deleting_comment2'] = 'ID %s のコメント削除中にエラーが発生しました。';
$messages['editComments'] = 'コメント';
$messages['mark_as_spam'] = 'スパムにマーク';
$messages['mark_as_no_spam'] = '非スパムにマーク';
$messages['error_incorrect_comment_id'] = 'コメントIDが正しくありません。';
$messages['error_marking_comment_as_spam'] = '指定のコメントをスパムにマーク中にエラーが発生しました。';
$messages['comment_marked_as_spam_ok'] = '指定のコメントをスパムにマークしました。';
$messages['error_marking_comment_as_nonspam'] = '指定のコメントを非スパムにマーク中にエラーが発生しました。';
$messages['comment_marked_as_nonspam_ok'] = '指定のコメントを非スパムにマークしました。';

// post trackbacks
$messages['blog'] = 'Blog';
$messages['excerpt'] = 'Excerpt';
$messages['error_fetching_trackbacks'] = 'Trackback取得中にエラーが発生しました。';
$messages['error_deleting_trackbacks'] = 'Trackbackが選択されていないかTrackback削除中にエラーが発生しました。';
$messages['error_deleting_trackback'] = 'Trackback "%s" の削除中にエラーが発生しました。';
$messages['error_deleting_trackback2'] = 'ID "%s" のTrackback削除中にエラーが発生しました。';
$messages['trackback_deleted_ok'] = 'Trackback "%s" の削除が完了しました。';
$messages['trackbacks_deleted_ok'] = '%s 件のTrackbackの削除が完了しました。';
$messages['editTrackbacks'] = 'Trackback';

// post statistics
$messages['referrer'] = 'リファラー';
$messages['hits'] = 'ヒット';
$messages['error_no_items_selected'] = '削除するアイテムが選択されていません。';
$messages['error_deleting_referrer'] = 'リファラー "%s" の削除中にエラーが発生しました。';
$messages['error_deleting_referrer2'] = 'ID"%s"のリファラー削除中にエラーが発生しました。';
$messages['referrer_deleted_ok'] = 'リファラー "%s" の削除が完了しました。';
$messages['referrers_deleted_ok'] = '%s 件のリファラー の削除が完了しました。';

// categories
$messages['posts'] = '記事';
$messages['show_in_main_page'] = 'メインページに表示';
$messages['error_incorrect_category_id'] = 'カテゴリを選択して下さい。';
$messages['error_category_has_articles'] = 'カテゴリ "%s" には現在記事があるため削除できません。カテゴリ内の記事を移動/削除してから削除を行って下さい。';
$messages['category_deleted_ok'] = 'カテゴリ "%s" の削除が完了しました。';
$messages['categories_deleted_ok'] = '%s 件のカテゴリの削除が完了しました。';
$messages['error_deleting_category'] = 'カテゴリ "%s" 削除中にエラーが発生しました。';
$messages['error_deleting_category2'] = 'カテゴリ "%s" 削除中にエラーが発生しました。';
$messages['yes'] = 'はい';
$messages['no'] = 'いいえ';

// new category
$messages['name'] = '名前';
$messages['category_name_help'] = 'カテゴリの名前';
$messages['description'] = '詳細';
$messages['category_description_help'] = 'カテゴリの詳細説明';
$messages['show_in_main_page_help'] = 'このカテゴリ以下の記事をメインページに表示する(チェックを外すとこのカテゴリがブラウズされた時のみ記事を表示)';
$messages['error_empty_name'] = 'カテゴリ名を入力して下さい。';
$messages['error_empty_description'] = 'カテゴリ詳細を入力して下さい。';
$messages['error_adding_article_category'] = 'カテゴリ追加中にエラーが発生しました。データを確認し再度追加を行って下さい。';
$messages['category_added_ok'] = 'カテゴリ "%s" の追加が完了しました';
$messages['add'] = '追加';
$messages['reset'] = 'リセット';

// update category
$messages['error_updating_article_category'] = 'カテゴリの更新中にエラーが発生しました。';
$messages['error_fetching_category'] = 'カテゴリの取得中にエラーが発生しました。';
$messages['article_category_updated_ok'] = 'カテゴリ "%s" の更新が完了しました。';

// links
$messages['feed'] = 'Feed';
$messages['error_no_links_selected'] = 'リンクが選択されていないかリンクIDが正しくありません。';
$messages['error_incorrect_link_id'] = 'リンクIDが正しくありません。';
$messages['error_removing_link'] = 'リンク "%s" の削除中にエラーが発生しました。';
$messages['error_removing_link2'] = 'ID "%s" のリンク削除中にエラーが発生しました。';
$messages['link_deleted_ok'] = 'リンク "%s" の削除が完了しました。';
$messages['links_deleted_ok'] = '%s 件のリンク削除が完了しました。';

// new link
$messages['link_name_help'] = 'このリンクの名前';
$messages['link_url_help'] = 'このリンクのURL';
$messages['link_description_help'] = 'このリンクの詳細';
$messages['link_feed_help'] = 'このリンクのRSSやAtom Feedも入力可能です。';
$messages['link_category_help'] = 'リンクカテゴリを選択して下さい。';
$messages['error_adding_link'] = 'リンクの追加中にエラーが発生しました。再度お試し下さい。';
$messages['error_invalid_url'] = 'URLが正しくありません。';
$messages['link_added_ok'] = 'Link "%s" was の追加が完了しました。';

// update link
$messages['error_updating_link'] = 'リンク更新中にエラーが発生しました。再度お試し下さい。';
$messages['error_fetching_link'] = 'リンク取得中にエラーが発生しました。';
$messages['link_updated_ok'] = 'リンク "%s" の更新が完了しました。';

// link categories
$messages['links'] = 'リンク';
$messages['error_invalid_link_category_id'] = 'リンクカテゴリが選択されていないかリンクIDが正しくありません。';
$messages['error_links_in_link_category'] = 'リンクカテゴリ "%s" にはリンクがあるため削除できません。先に中のリンクを移動させてから削除を行って下さい。';
$messages['error_removing_link_category'] = 'リンクカテゴリ "%s" の削除中にエラーが発生しました。';
$messages['link_category_deleted_ok'] = 'リンクカテゴリ "%s" の削除が完了しました。';
$messages['link_categories_deleted_ok'] = '%s 件のリンクカテゴリの削除が完了しました。';
$messages['error_removing_link_category2'] = 'ID "%s" のリンクカテゴリ削除中にエラーが発生しました。';

// new link category
$messages['link_category_name_help'] = 'このリンクカテゴリの名前';
$messages['error_adding_link_category'] = 'リンクカテゴリ追加中にエラーが発生しました。';
$messages['link_category_added_ok'] = 'リンクカテゴリ "%s" の追加が完了しました。';

// edit link category
$messages['error_updating_link_category'] = 'リンクカテゴリ更新中にエラーが発生しました。再度お試し下さい。';
$messages['link_category_updated_ok'] = 'リンクカテゴリ "%s" の更新が完了しました。';
$messages['error_fetching_link_category'] = 'リンクカテゴリ取得中にエラーが発生しました。';

// custom fields
$messages['type'] = 'タイプ';
$messages['hidden'] = '非表示';
$messages['fields_deleted_ok'] = '%s 件のカスタム項目の削除が完了しました。';
$messages['field_deleted_ok'] = 'カスタム項目 "%s" の削除が完了しました。';
$messages['error_deleting_field'] = 'カスタム項目 "%s" の削除中にエラーが発生しました。';
$messages['error_deleting_field2'] = 'ID "%s" のカスタム項目削除中にエラーが発生しました。';
$messages['error_incorrect_field_id'] = 'カスタム項目IDが正しくありません。';

// new custom field
$messages['field_name_help'] = '記事内でのこの項目の識別名';
$messages['field_description_help'] = 'この項目詳細';
$messages['field_type_help'] = '項目タイプを選択';
$messages['field_hidden_help'] = 'これにチェックすると記事の追加/編集時に項目は非表示となります。この機能は主にプラグインに使用されます。';
$messages['error_adding_custom_field'] = 'カスタム項目追加中にエラーが発生しました。 再度お試し下さい。';
$messages['custom_field_added_ok'] = 'カスタム項目 "%s" の追加が完了しました。';
$messages['text_field'] = 'Text field';
$messages['text_area'] = 'Text box';
$messages['checkbox'] = 'Checkbox';
$messages['date_field'] = 'Date chooser';

// edit custom field
$messages['error_fetching_custom_field'] = 'カスタム項目取得中にエラーが発生しました。';
$messages['error_updating_custom_field'] = 'カスタム項目の更新中にエラーが発生しました。再度お試し下さい。';
$messages['custom_field_updated_ok'] = 'カスタム項目 "%s" の更新が完了しました。';

// resources
$messages['root_album'] = 'ルート(トップ)アルバム';
$messages['num_resources'] = 'リソース数';
$messages['total_size'] = 'サイズ合計';
$messages['album'] = 'アルバム';
$messages['error_incorrect_album_id'] = 'アルバムIDが正しくありません。';
$messages['error_base_storage_folder_missing_or_unreadable'] = 'システムはリソースのインストール先フォルダを作成することができませんでした。この問題はセーフモードでPHPのインストールが行われたりパーミッションが正しくない場合に発生します。これを解決するにはマニュアルで以下のフォルダを直接作成してください: <br/><br/>%s<br/><br/>このフォルダが既に存在する場合は、ウェブサーバー実行者のユーザーが読む/書くを実行できるかパーミッションを確認して下さい。';
$messages['items_deleted_ok'] = '%s items の削除が完了しました。';
$messages['error_album_has_children'] = 'アルバム "%s" 内にアルバムが存在します。中のアルバムを移動させてから再度お試し下さい。';
$messages['item_deleted_ok'] = 'Item "%s"の削除が完了しました。';
$messages['error_deleting_album'] = 'アルバム "%s" の削除中にエラーが発生しました。';
$messages['error_deleting_album2'] = 'ID "%s" のアルバムの削除中にエラーが発生しました。';
$messages['error_deleting_resource'] = 'リソース "%s" の削除中にエラーが発生しました。';
$messages['error_deleting_resource2'] = 'ID "%s" のリソース削除中にエラーが発生しました。';
$messages['error_no_resources_selected'] = '削除するリソースが選択されていません。';
$messages['resource_deleted_ok'] = 'リソース "%s" の削除が完了しました。';
$messages['album_deleted_ok'] = 'アルバム "%s" の削除が完了しました。';
$messages['add_resource'] = 'リソース追加';
$messages['add_resource_preview'] = 'プレビュー追加';
$messages['add_resource_medium'] = 'ミディアムプレビュー追加';
$messages['add_album'] = 'アルバム追加';

// new album
$messages['album_name_help'] = '追加するアルバムの名前';
$messages['parent'] = '親アルバム';
$messages['no_parent'] = '親アルバム無し';
$messages['parent_album_help'] = 'アルバム内にアルバムを追加し、ファイルの整理を行うことが可能です';
$messages['album_description_help'] = 'このアルバムの詳細を入力して下さい';
$messages['error_adding_album'] = 'アルバム追加中にエラーが発生しました。データを確認し再度お試し下さい。';
$messages['album_added_ok'] = 'アルバム "%s" の追加が完了しました。';

// edit album
$messages['error_incorrect_album_id'] = 'アルバムIDが正しくありません。';
$messages['error_fetching_album'] = 'アルバム取得中にエラーが発生しました。';
$messages['error_updating_album'] = 'アルバムの更新中にエラーが発生しました。';
$messages['album_updated_ok'] = 'アルバム "%s" の更新が完了しました。';
$messages['show_album_help'] = 'このチェックを外すとBlogにあるアルバムとして表示されません。';

// new resource
$messages['file'] = 'ファイル';
$messages['resource_file_help'] = '現在のBlogにファイルが追加されます。複数のファイルを一度にアップロードする場合は"項目追加"をクリックして下さい。';
$messages['add_field'] = '項目追加';
$messages['resource_description_help'] = 'このファイルの詳細を入力して下さい。';
$messages['resource_album_help'] = 'このファイルを追加するアルバムを選択して下さい。';
$messages['error_no_resource_uploaded'] = 'アップロードするファイルが選択されませんでした。';
$messages['resource_added_ok'] = 'リソース "%s" の追加が完了しました。';
$messages['error_resource_forbidden_extension'] = '禁止タイプのためファイルは追加されませんでした。';
$messages['error_resource_too_big'] = 'ファイルが大きすぎるため追加されませんでした。';
$messages['error_uploads_disabled'] = 'アップロード機能は停止中のためファイルは追加されませんでした。';
$messages['error_quota_exceeded'] = 'リソース容量制限を超えているためファイルは追加されませんでした。';
$messages['error_adding_resource'] = 'リソースファイル追加中にエラーが発生しました。';

// edit resource
$messages['editResource'] = 'リソース編集';
$messages['resource_information_help'] = '以下はこのリソースファイルの情報です';
$messages['information'] = '情報';
$messages['size'] = 'サイズ';
$messages['format'] = '形式';
$messages['dimensions'] = '横 x 縦';
$messages['bits_per_sample'] = 'ビット/ピクセル';
$messages['sample_rate'] = 'サンプルレート';
$messages['number_of_channels'] = 'チャンネル数';
$messages['legnth'] = '長さ';
$messages['thumbnail_format'] = 'サムネイル形式';
$messages['regenerate_preview'] = 'プレビューの再生成';
$messages['error_fetching_resource'] = 'リソース取得中にエラーが発生しました。';
$messages['error_updating_resource'] = 'リソース更新中にエラーが発生しました。';
$messages['resource_updated_ok'] = 'リソース "%s" の更新が完了しました。';

// blog settings
$messages['blog_link'] = 'BlogのURL';
$messages['blog_link_help'] = 'このBlogのPermanentリンク';
$messages['blog_name_help'] = 'このBlogの名前';
$messages['blog_description_help'] = 'このBlogについての説明';
$messages['language'] = '言語';
$messages['blog_language_help'] = 'このBlogの公開ページと管理画面で使用する言語';
$messages['max_main_page_items'] = 'メインページの記事数';
$messages['max_main_page_items_help'] = 'メインページに常に表示させる記事数';
$messages['max_recent_items'] = '最新記事数';
$messages['max_recent_items_help'] = 'メインページで最新として表示させる最高記事数';
$messages['template'] = 'テンプレート';
$messages['choose'] = '一覧';
$messages['blog_template_help'] = 'あなたのBlogのテンプレートデザインを選択して下さい。このリストにはグローバルテンプレートとこのBlog用にインストールされているテンプレートが含まれています。';
$messages['use_read_more'] = '記事内で"続き..."リンクを使用';
$messages['use_read_more_help'] = 'これを有効にすると"記事内容"のみが表示され、その下に"追加内容"への"続き..."リンクが追加されます。';
$messages['enable_wysiwyg'] = 'ビジュアルエディター使用';
$messages['enable_wysiwyg_help'] = 'Internet Explorer 5.5以上/Mozilla 1.3以上のブラウザで使用可能なHTMLマークアップのビジュアルエディターです。';
$messages['enable_comments'] = 'コメントを許可';
$messages['enable_comments_help'] = '全ての記事に対するコメントをデフォルトで許可します。特定の記事に対するコメントの許可/禁止は記事の作成/編集時に設定可能です。';
$messages['show_future_posts'] = 'Future記事をカレンダー内に表示';
$messages['show_future_posts_help'] = '日付が現在よりも先(未来)になっている記事をカレンダー内に表示しユーザーに公開します。';
$messages['comments_order'] = 'コメントの順序';
$messages['comments_order_help'] = 'メインページで表示するコメントの順序設定です。';
$messages['oldest_first'] = '古いものから';
$messages['newest_first'] = '新しいものから';
$messages['categories_order'] = 'カテゴリの順序';
$messages['categories_order_help'] = 'メインページで表示するカテゴリの順序設定です。';
$messages['most_recent_updated_first'] = '最近更新されたものから';
$messages['alphabetical_order'] = 'アルファベット順';
$messages['reverse_alphabetical_order'] = 'アルファベット逆順';
$messages['most_articles_first'] = '記事の件数順(多→少)';
$messages['link_categories_order'] = 'リンクカテゴリ順';
$messages['link_categories_order_help'] = 'メインページで表示するリンクカテゴリの順序設定です。';
$messages['most_links_first'] = 'リンクの件数順(多→少)';
$messages['most_links_last'] = 'リンクの件数順(少→多)';
$messages['time_offset'] = 'タイムオフセット';
$messages['time_offset_help'] = 'Blogの日付と時間に時差を設定できます。';
$messages['close'] = 'ウィンドウを閉じる';
$messages['select'] = '選択';
$messages['error_updating_settings'] = 'Blog設定の更新中にエラーが発生しました。再度お試し下さい。';
$messages['error_invalid_number'] = '数字の入力が正しくありません。';
$messages['error_incorrect_time_offset'] = '時差の設定が無効です。';
$messages['blog_settings_updated_ok'] = 'Blog設定の更新が完了しました。';
$messages['hours'] = '時間';

// user settings
$messages['username_help'] = '公開ユーザー名です。(変更不可)';
$messages['full_name'] = '名前';
$messages['full_name_help'] = 'あなたの名前です。';
$messages['password_help'] = 'パスワードを変更する場合は新しいパスワードを入力して下さい。変更しない場合は何も入力しないで下さい。';
$messages['confirm_password'] = 'パスワード確認';
$messages['email'] = 'E-Mail';
$messages['email_help'] = '入力されたE-Mailに通知が送信されます。';
$messages['bio'] = '自己紹介';
$messages['bio_help'] = 'あなたの自己紹介文を入力して下さい。';
$messages['picture'] = '写真';
$messages['user_picture_help'] = 'アップロード済みの画像よりあなたの個人写真として設定する画像を選択して下さい。';
$messages['error_invalid_password'] = 'パスワードが正しくないか短すぎます。';
$messages['error_passwords_dont_match'] = 'パスワードが一致しません。';
$messages['error_incorrect_email_address'] = 'E-Mailアドレスの入力が正しくありません。';
$messages['error_updating_user_settings'] = 'ユーザー設定更新中にエラーが発生しました。再度お試し下さい。';
$messages['user_settings_updated_ok'] = 'ユーザー設定の更新が完了しました。';
$messages['resource'] = 'リソース';

// plugin centre
$messages['identifier'] = '識別 (ID)';
$messages['error_plugins_disabled'] = '現在プラグインの使用は停止中です。';

// blog users
$messages['revoke_permissions'] = 'Blogユーザー削除';
$messages['error_no_users_selected'] = 'Blogユーザーが選択されていません。';
$messages['user_removed_from_blog_ok'] = 'Blogユーザー "%s" の削除が完了しました。';
$messages['users_removed_from_blog_ok'] = '%s Blogユーザーの削除が完了しました。。';
$messages['error_removing_user_from_blog'] = 'Blogユーザー "%s" の削除中にエラーが発生しました。';
$messages['error_removing_user_from_blog2'] = 'ID "%s" のBlogユーザー削除中にエラーが発生しました。';

// new blog user
$messages['new_blog_username_help'] = 'このBlogへのアクセス権減を与えるユーザー名を入力して下さい。(追加されたユーザーは"記事管理"と"リソース"にのみアクセス可能)';
$messages['send_notification'] = '通知の送信';
$messages['send_user_notification_help'] = 'このユーザーに通知を送信';
$messages['notification_text'] = '通知内容';
$messages['notification_text_help'] = '通知メッセージにこの内容が表示されます。';
$messages['error_adding_user'] = 'ユーザーへアクセス権限割当中にエラーが発生しました。再度お試し下さい。';
$messages['error_empty_text'] = '通知内容を入力して下さい。';
$messages['error_adding_user'] = 'Blogユーザー追加中にエラーが発生しました。再度お試し下さい。';
$messages['error_invalid_user'] = 'ユーザー "%s" は存在しないか正しくありません。';
$messages['user_added_to_blog_ok'] = 'このBlogへのユーザー "%s" の追加が完了しました。';

// blog templates
$messages['error_no_templates_selected'] = 'テンプレートを選択して下さい。';
$messages['error_template_is_current'] = 'テンプレート "%s" は現在使用中のため削除できません。';
$messages['error_removing_template'] = 'テンプレート "%s" の削除中にエラーが発生しました。';
$messages['template_removed_ok'] = 'テンプレート "%s" の削除が完了しました。';
$messages['templates_removed_ok'] = '%s 件のテンプレートの削除が完了しました。';

// new blog template
$messages['template_installed_ok'] = 'テンプレート "%s" の追加が完了しました。';
$messages['error_installing_template'] = 'テンプレート "%s" のインストール中にエラーが発生しました。';
$messages['error_missing_base_files'] = '足りないテンプレートファイルがいくつかあるようです。';
$messages['error_add_template_disabled'] = 'この機能は現在停止中のためテンプレートの追加はできません。';
$messages['error_must_upload_file'] = 'アップロードされたテンプレートパッケージはありません。';
$messages['error_uploads_disabled'] = 'アップロード機能は現在停止中です。';
$messages['error_no_new_templates_found'] = '新しいテンプレートは見つかりませんでした。';
$messages['error_template_not_inside_folder'] = 'テンプレートセット内で使用されるファイルはテンプレートセットと同じ名前のフォルダ内に置いて下さい。';
$messages['error_missing_base_files'] = '基本テンプレートファイルが欠けているようです。';
$messages['error_unpacking'] = 'ファイルの展開中にエラーが発生しました。';
$messages['error_forbidden_extensions'] = 'テンプレートファイルに禁止されている拡張子が含まれています。';
$messages['error_creating_working_folder'] = 'ファイルを展開ためのテンポラリーフォルダ作成中にエラーが発生しました。';
$messages['error_checking_template'] = 'テンプレート確認中にエラーが発生しました: %s';
$messages['template_package'] = 'テンプレートパッケージ';
$messages['blog_template_package_help']  = 'ここではあなたのBlog専用の新規テンプレートセットをアップロードできます。テンプレートセットをアップロードできない場合は、マニュアルで<b>%s</b>にテンプレートセットを直接アップロードし、"<b>テンプレートをスキャン</b>"ボタンをクリックして下さい。システムが自動的に新規テンプレートセットを探知します。';
$messages['scan_templates'] = 'テンプレートをスキャン';

// site users
$messages['user_status_active'] = '有効';
$messages['user_status_disabled'] = '停止';
$messages['user_status_all'] = '全て';
$messages['user_status_unconfirmed'] = '未承認';
$messages['error_invalid_user2'] = 'ID "%s" のユーザーは存在しません。';
$messages['error_deleting_user'] = 'ユーザー "%s" 停止中にエラーが発生しました。';
$messages['user_deleted_ok'] = 'ユーザー "%s" の停止が完了しました。';
$messages['users_deleted_ok'] = '%s ユーザーの停止が完了しました。';

// create user
$messages['user_added_ok'] = 'ユーザー "%s" の追加が完了しました';
$messages['error_incorrect_username'] = 'そのユーザー名は正しくないか既に使用中です。';
$messages['user_status_help'] = 'このユーザーの現在のステータス';
$messages['user_blog_help'] = 'このユーザーに割り当てるBlog';
$messages['none'] = '無し';

// edit user
$messages['error_invalid_user'] = 'ユーザーIDが存在しないか正しくありません。';
$messages['error_updating_user'] = 'ユーザー設定更新中にエラーが発生しました。再度お試し下さい。';
$messages['blogs'] = 'Blog';
$messages['user_blogs_help'] = 'このユーザーがオーナーまたはアクセス権限があるBlog';
$messages['site_admin'] = '管理者';
$messages['site_admin_help'] = 'このユーザーに管理者権限を与え、"サイト管理"画面での操作を許可';
$messages['user_updated_ok'] = 'ユーザー "%s" の更新が完了しました。';

// site blogs
$messages['blog_status_all'] = '全て';
$messages['blog_status_active'] = '有効';
$messages['blog_status_disabled'] = '停止';
$messages['blog_status_unconfirmed'] = '未承認';
$messages['owner'] = 'オーナー';
$messages['quota'] = '容量';
$messages['bytes'] = 'バイト';
$messages['error_no_blogs_selected'] = '停止するBlogが選択されていません。';
$messages['error_blog_is_default_blog'] = 'Blog "%s" はデフォルトBlogに設定されているため削除できません。';
$messages['blog_deleted_ok'] = 'Blog "%s" の停止が完了しました。';
$messages['blogs_deleted_ok'] = '%s 件のBlogの削除が完了しました。';
$messages['error_deleting_blog'] = 'Blog "%s" の削除中にエラーが発生しました。';
$messages['error_deleting_blog2'] = 'ID "%s" のBlog削除中にエラーが発生しました。';

// create blog
$messages['error_adding_blog'] = 'Blog追加中にエラーが発生しました。再度お試し下さい。';
$messages['blog_added_ok'] = 'Blog "%s" の追加が完了しました。';

// edit blog
$messages['blog_status_help'] = 'Blogステータス';
$messages['blog_owner_help'] = 'このBlog設定の全コントロールを行うオーナー';
$messages['users'] = 'ユーザー';
$messages['blog_quota_help'] = 'リソースの制限容量をバイトで指定してください。"0"または空白にするとグローバル容量となります。';
$messages['blog_users_help'] = 'このBlogへのアクセス権限を割当てるユーザーを左のリストから選択して右のリストへ移動させて設定して下さい。';
$messages['edit_blog_settings_updated_ok'] = 'Blog "%s" の更新が完了しました。';
$messages['error_updating_blog_settings'] = 'Blog "%s" の更新中にエラーが発生しました。';
$messages['error_incorrect_blog_owner'] = 'Blogオーナーとして選択されたユーザーが正しくありません。';
$messages['error_fetching_blog'] = 'Blogの取得中にエラーが発生しました。';
$messages['error_updating_blog_settings2'] = 'Blog更新中にエラーが発生しました。再度お試し下さい。';
$messages['add_or_remove'] = 'ユーザー追加・削除';

// site locales
$messages['locale'] = '言語';
$messages['locale_encoding'] = 'エンコード';
$messages['locale_deleted_ok'] = '言語ファイル "%s" の追加が完了しました。';
$messages['error_no_locales_selected'] = '削除する言語ファイルが選択されていません。';
$messages['error_deleting_only_locale'] = 'この言語ファイルを削除すると、システムに言語ファイルが一つも無い状態になってしまうため、削除できません。';
$messages['locales_deleted_ok']= '言語ファイル %s の削除が完了しました。';
$messages['error_deleting_locale'] = '言語ファイル "%s" の削除中にエラーが発生しました。';
$messages['error_locale_is_default'] = '言語ファイル "%s" は新規Blog用のデフォルト言語のため削除できません。';

// add locale
$messages['error_invalid_locale_file'] = '言語ファイルが無効です。';
$messages['error_no_new_locales_found'] = '新規言語ファイルは見つかりません。';
$messages['locale_added_ok'] = '言語ファイル "%s" の追加が完了しました。';
$messages['error_saving_locale'] = '新規言語ファイルの保存中にエラーが発生しました。';
$messages['scan_locales'] = '言語ファイルをスキャン';
$messages['add_locale_help'] = 'ここでは新規言語ファイルをアップロードできます。言語ファイルがアップロードできない場合は、マニュアルで<b>./locales/</b>の中に言語ファイルを直接アップロードし、"<b>言語ファイルをスキャン</b>"ボタンをクリックして下さい。システムが自動的に新規言語ファイルを探知します。';

// site templates
$messages['error_template_is_default'] = 'テンプレート "%s" は新規Blog用のデフォルト言語のため削除できません。';

// add template
$messages['global_template_package_help'] = 'ここでは全Blog用の新規テンプレートセットをアップロードできます。テンプレートセットをアップロードできない場合は、マニュアルで<b>%s</b>の中にテンプレートセットを直接アップロードし、"<b>テンプレートをスキャン</b>"ボタンをクリックして下さい。システムが自動的に新規テンプレートセットを探知します。';

// global settings
$messages['site_config_saved_ok'] = 'サイト設定の保存が完了しました。';
$messages['error_saving_site_config'] = 'サイト設定の保存中にエラーが発生しました。';
/// general settings
$messages['help_comments_enabled'] = '有効にすると新規Blogのコメント機能がデフォルトで有効になります。 [デフォルト = はい]';
$messages['help_beautify_comments_text'] = '有効にすると投稿されたコメントは自動的に改行されURLにはリンクが張られます。 [デフォルト = はい]';
$messages['help_temp_folder'] = 'コンパイル済みテンプレート等の一時的なデータを書き込むためのフォルダです。セキュリティー強化のためにウェブサーバーツリーの外にあるフォルダを指定して下さい。 [デフォルト = ./tmp]';
$messages['help_base_url'] = 'このBlogがインストールされるベースURLになります。';
$messages['help_subdomains_enabled'] = '有効にするとサブドメインが使用されます。詳細はサブドメインに関するドキュメントをご覧下さい。 [デフォルト = いいえ]';
$messages['help_subdomains_base_url'] = 'サブドメインを有効にした場合、base_urlの代わりにここで指定したベースURLが使用されます。Blog名の取得は {blogname} 、Blogオーナーのユーザー名の取得は {username} を使用してBlogへのリンクを取得して下さい。 (例 : http://{blogname}.yourdomain.com)';
$messages['help_include_blog_id_in_url'] = 'サブドメインと"通常の"URLが有効な場合に内部取得URLに"blogId"パラメーターを取得しないように設定できます。この機能を使用する方のみ変更して下さい。 [デフォルト = はい]';
$messages['help_script_name'] = 'index.phpを他の名称に変更する場合のみ変更して下さい。 [デフォルト = index.php]';
$messages['help_show_posts_max'] = 'メインページに表示させる記事数。新規Blogのみ有効です。 [デフォルト = 15]';
$messages['help_recent_posts_max'] = 'メインページに表示させる最新記事数。新規Blogのみ有効です。 [デフォルト = 10]';
$messages['help_save_drafts_via_xmlhttprequest_enabled'] = 'JavascriptとXmlHttpRequestのドラフト保存を許可する。 [デフォルト = はい]';
$messages['help_locale_folder'] = '言語ファイルが保管されるフォルダの場所です。 [デフォルト = ./locale]';
$messages['help_default_locale'] = '新規Blogのデフォルト言語を設定します。 [デフォルト = en_UK]';
$messages['help_default_blog_id'] = 'デフォルトで表示されるBlogを設定します。 [デフォルト = 1]';
$messages['help_default_time_offset'] = '新規Blogのデフォルトのタイムセットを設定します。 [デフォルト = 0]';
$messages['help_html_allowed_tags_in_comments'] = 'コメント内で使用できるHTMLタグ。(半角スペースで区切って下さい。) [デフォルト = &lt;a&gt;&lt;i&gt;&lt;br&gt;&lt;br/&gt;&lt;b&gt;]';
$messages['help_referer_tracker_enabled'] = '有効にするとデータベースにリファラーを保存します。パフォーマンスを重視する場合は無効にして下さい。 [デフォルト = はい]';
$messages['help_show_more_enabled'] = '有効にすると新規Blogで"続き..."リンクを使用します。 [デフォルト = はい]';
$messages['help_update_article_reads'] = '有効にすると既読済みの記事の時刻カウンターを更新します。パフォーマンスを重視する場合は無効にして下さい。 [デフォルト = はい]';
$messages['help_update_cached_article_reads'] = '有効にすると、キャッシュがオンになっている場合でも既読済みの記事の時刻カウンターを更新します。 [デフォルト = はい]';
$messages['help_xmlrpc_ping_enabled'] = 'XMLRPC Ping送信をサポートしているサイトに対してこれを有効にします。 [デフォルト = はい]';
$messages['help_send_xmlrpc_pings_enabled_by_default'] = '記事が追加された時や記事が更新された時にこの機能をデフォルトで有効にします。 [デフォルト = はい]';
$messages['help_xmlrpc_ping_hosts'] = 'XMLRPC Ping指定をサポートしているサイトのXMLRPCインターフェイスへのURL。行ごとに1件のURLを入力して下さい。 [デフォルト = http://rpc.weblogs.com/RPC2]';
$messages['help_trackback_server_enabled'] = 'インカミングのTrackbackを受け入れます。 [デフォルト = はい]';
$messages['help_htmlarea_enabled'] = '新規BlogでWYSIWYGエディターを有効にします。 [デフォルト = Yes';
$messages['help_plugin_manager_enabled'] = 'プラグインを有効にする。 [デフォルト = はい]';
$messages['help_minimum_password_length'] = 'パスワードの最低文字数を設定します。 [デフォルト = 4]';
$messages['help_xhtml_converter_enabled'] = '有効にするとシステムが全てのHTMLコードを適切なXHTMLコードへコンバートします。 [デフォルト = はい]';
$messages['help_xhtml_converter_aggressive_mode_enabled'] = '有効にするとシステムが全てのHTMLをより重点的にXHTMLコードへコンバートしますが、エラーが出やすくなります。 [デフォルト = いいえ]';
$messages['help_session_save_path'] = 'PHPファンクション session_save_path()からのセッションデータを保管するフォルダの場所を変更できます。指定のフォルダがウェブサーバーによる書き込み可能であるか確認してください。PHP\'sデフォルトセッションフォルダを使用する場合は空白にして下さい。 [デフォルト = (空白)]';
// summary settings
$messages['help_summary_page_show_max'] = 'サマリーページで表示するアイテム(新着の記事、最新更新のBlog等)の数を設定します。 [デフォルト = 10]';
$messages['help_summary_blogs_per_page'] = '"Blogリスト"で表示するページ毎のBlogの数を設定します。 [デフォルト = 25]';
$messages['help_forbidden_usernames'] = 'ユーザー登録を許可しないユーザー名を半角スペースで区切って設定します。 [デフォルト = admin www blog ftp]';
$messages['help_force_one_blog_per_email_account'] = '1件のE-Mailにつき1件のBlogのみ。 [デフォルト = いいえ]';
$messages['help_summary_show_agreement'] = '登録時にメンバー規約を表示し、規約への同意を登録条件とする。 [デフォルト = はい]';
$messages['help_need_email_confirm_registration'] = '登録後にユーザー宛にリンクコードをメール送信し、ユーザーがリンクコードをクリックして登録手続きを完了とする。 [デフォルト = はい]';
$messages['help_summary_disable_registration'] = '新規Blogのユーザー登録を停止する。 [デフォルト = いいえ]';
// templates
$messages['help_template_folder'] = 'テンプレートが保管されるフォルダです。 [デフォルト = ./templates]';
$messages['help_default_template'] = '新規Blog用のデフォルトのテンプレートです。 [デフォルト = standard]';
$messages['help_users_can_add_templates'] = 'ユーザーによるカスタムテンプレートのアップロードを許可する。 [デフォルト = はい]';
$messages['help_template_compile_check'] = '有効にするとSmartyが常にテンプレートをチェックし、変更があると新しいものに更新します。パフォーマンスを重視する場合はこれを無効にして下さい。 [デフォルト = はい]';
$messages['help_template_cache_enabled'] = 'これを有効にするとキャッシュバージョンのページができるだけが使用されます。データベースやテンプレートは再コンパイルされず、データを取得する必要がなくなります。 [デフォルト = はい]';
$messages['help_template_cache_lifetime'] = 'キャッシュの制限時間を秒で設定できます。-1を入力すると制限時間は設定されません。0を入力するとキャッシュは無効になりますが、キャッシュを無効にする場合はtemplate_cache_enabled で"いいえ"に設定するようにしてください。 [デフォルト = -1]';
$messages['help_template_http_cache_enabled'] = 'HTTP暫定リクエストをサポートします。これを有効にするとアカウントに"If-Modified-Since" HTTPヘッダーを入れ、必要時にはコンテンツのみを送信します。バンドワイズを保持する場合はこれを有効にして下さい。 [デフォルト = いいえ]';
$messages['help_allow_php_code_in_templates'] = 'これを有効にすると{php}...{/php} ブロック内のSmartyテンプレートにネイティブPHPコードを埋め込みます。 [デフォルト = いいえ]';
// urls
$messages['help_request_format_mode'] = 'URL形式を選択して下さい。カスタムURLを使用する場合は以下の設定を確認して下さい。 [デフォルト = Plain]';
$messages['plain'] = 'Plain';
$messages['search_engine_friendly'] = 'Search engine friendly';
$messages['custom_url_format'] = 'カスタムURL';
$messages['help_permalink_format'] = 'カスタムURL使用時のPermalink形式を設定します。 [デフォルト = /blog/{blogname}/{catname}/{year}/{month}/{day}/{postname}$]';
$messages['help_category_link_format'] = 'カスタムURL使用時のカテゴリへのリンクを設定します。 [デフォルト = /blog/{blogname}/{catname}$]';
$messages['help_blog_link_format'] = 'カスタムURL使用時のBlogへのリンクを設定します。 [デフォルト = /blog/{blogname}$]';
$messages['help_archive_link_format'] = 'カスタムURL使用時のアーカイブへのリンクを設定します。 [デフォルト = /blog/{blogname}/archives/{year}/?{month}/?{day}]';
$messages['help_user_posts_link_format'] = 'カスタムURL使用時の特定のユーザーより投稿された記事を設定します。 [デフォルト = /blog/{blogname}/user/{username}$]';
$messages['help_post_trackbacks_link_format'] = 'カスタムURL使用時のTrackbackへのリンクを設定します。 [デフォルト = /blog/{blogname}/post/trackbacks/{postname}$]';
$messages['help_template_link_format'] = 'カスタムURL使用時のカスタム統計テンプレートページへのリンクを設定します。 [デフォルト = /blog/{blogname}/page/{templatename}$]';
$messages['help_album_link_format'] = 'カスタムURL使用時のリソースアルバムへのリンクを設定します。 [デフォルト = /blog/{blogname}/album/{albumname}$]';
$messages['help_resource_link_format'] = 'カスタムURL使用時のファイル付きのリソースページへのリンクを設定します。 [デフォルト = /blog/{blogname}/resource/{albumname}/{resourcename}$]';
$messages['help_resource_preview_link_format'] = 'カスタムURL使用時のリソースプレビューへのリンクを設定します。 [デフォルト = /blog/{blogname}/resource/{albumname}/preview/{resourcename}$]';
$messages['help_resource_medium_size_preview_link_format'] = 'カスタムURL使用時のミディアムサイズリソースプレビューへのリンクを設定します。 [デフォルト = /blog/{blogname}/resource/{albumname}/preview-med/{resourcename}$]';
$messages['help_resource_download_link_format'] = 'カスタムURL使用時のファイルへのリンクを設定します。 [デフォルト = /blog/{blogname}/resource/{albumname}/download/{resourcename}$]';
// email
$messages['help_check_email_address_validity'] = 'E-Mailアドレス確認時にMXレコードがドメインに存在するか、またメールボックスが有効か基本的なチェックを行います。 [デフォルト = いいえ]';
$messages['help_email_service_enabled'] = 'E-Mailの送信を許可する。 [デフォルト = はい]';
$messages['help_post_notification_source_address'] = 'システムより送信される"From:"の項目に入るE-Mailアドレスの設定です。 [デフォルト = noreply@your.host.com]';
$messages['help_email_service_type'] = 'E-Mailを送信するためのシステム設定です。 [デフォルト = PHP]';
$messages['help_smtp_host'] = 'E-Mail送信システムとしてSMTPを選択する場合は、使用するSMTPサーバーをこれに設定して下さい。 [デフォルト = (空白)]';
$messages['help_smtp_port'] = 'SMTPサーバーが25以上のポートを実行している場合はここで設定して下さい。 [デフォルト = (空白)]';
$messages['help_smtp_use_authentication'] = 'SMTPサーバーに承認を必要とする。  [デフォルト = いいえ]';
$messages['help_smtp_username'] = 'SMTPサーバーに承認を必要とした場合のユーザー名を入力して下さい。 [デフォルト = (空白)]';
$messages['help_smtp_password'] = 'SMTPサーバーに承認を必要とした場合のパスワードを入力して下さい。 [デフォルト = (空白)]';
// helpers
$messages['help_path_to_tar'] = '.tar.gz や tar.bz2形式のテンプレートセットを展開するための"tar"ツールへのパス [デフォルト = /bin/tar]';
$messages['help_path_to_gzip'] = '.tar.gz形式のテンプレートセットを展開するための"gzip"ツールへのパス [デフォルト = /bin/gzip]';
$messages['help_path_to_bz2'] = '.tar.bz2形式のテンプレートセットを展開するための"bzip2"ツールへのパス [デフォルト = /usr/bin/bzip2]';
$messages['help_path_to_unzip'] = '.zip形式のテンプレートセットを展開するための"unzip"ツールへのパス [デフォルト = /usr/bin/unzip]';
$messages['help_unzip_use_native_version'] = 'バンドルされているPHPネイティブ版を.zipファイル展開時に使用する。 [デフォルト = いいえ]';
// uploads
$messages['help_uploads_enabled'] = 'ユーザーのファイルのアップロードを許可する。(リソース、カスタムテンプレートファイル、言語ファイル) [デフォルト = はい]';
$messages['help_maximum_file_upload_size'] = '最大ファイルサイズ数をバイトで設定して下さい。この値はPHP\'sの制限値を超えることはありません。  [デフォルト = 2000000]';
$messages['help_upload_forbidden_files'] = 'アップロードを禁止するファイルタイプを半角スペースで区切って設定して下さい。\'*\' や \'?\'の使用は許可されています。 [デフォルト = *.php *.php3 *.php4 *.phtml]';
// interfaces
$messages['help_xmlrpc_api_enabled'] = 'XMLRPCからのBlogへのアクセスを許可する。 [デフォルト = はい]';
$messages['help_rdf_enabled'] = 'AtomやRSSからのコンテンツシンディケーションを許可する。 [デフォルト = はい]';
$messages['help_default_rss_profile'] = 'コンテンツシンディケーション用のRSSやAtomのデフォルトバージョンを設定します。 [デフォルト = RSS 1.0]';
// security
$messages['help_security_pipeline_enabled'] = 'セキュリティーパイプラインと全ての関連フィルタを有効にする。 [デフォルト = はい]';
$messages['help_ip_address_filter_enabled'] = 'IPアドレスフィルタを有効にする。この機能を使用するにはセキュリティーパイプラインが有効になっている必要があります。 [デフォルト = はい]';
$messages['help_content_filter_enabled'] = 'Regular Expression-Basedコンテンツフィルタを有効にする。この機能を使用するにはセキュリティーパイプラインが有効になっている必要があります。 [デフォルト = はい]';
$messages['help_maximum_comment_size'] = 'コメントの最高サイズをバイトで設定して下さい。0を入力するとこの機能は停止します。 [デフォルト = 0]';
// bayesian filter
$messages['help_bayesian_filter_enabled'] = '自動スパムフィルタ用にBayesianフィルタを有効にする。  [デフォルト = はい]';
$messages['help_bayesian_filter_spam_probability_treshold'] = 'コメントをスパムと認定するまでの最高敷居値を設定します。  [デフォルト = 0.9]';
$messages['help_bayesian_filter_nonspam_probability_treshold'] = 'コメントを非スパムと認定した後の最低敷居値を設定します。 [デフォルト = 0.2]';
$messages['help_bayesian_filter_min_length_token'] = 'Byesianフィルタに"有効"と認定されるためのトークンの最低値  [デフォルト = 3]';
$messages['help_bayesian_filter_max_length_token'] = 'Byesianフィルタに"有効"と認定されるためのトークンの最高値  [デフォルト = 100]';
$messages['help_bayesian_filter_number_significant_tokens'] = '有効なトークン数  [デフォルト = 15]';
$messages['help_bayesian_filter_spam_comments_action'] = 'スパムと認定されたコメントの保存/破棄を設定します。フィルタが学習済みの場合のみ"破棄"を選択するようにしてください。  [デフォルト = 保存]';
$messages['keep_spam_comments'] = '"スパム"マークしてデータベースに保存';
$messages['throw_away_spam_comments'] = '破棄する (保存しない)';
// resources
$messages['help_resources_enabled'] = 'リソースを許可する。 [デフォルト = はい]';
$messages['help_resources_folder'] = 'リソースファイルが保管される場所を設定します。セキュリティーを強化するためにウェブサーバーツリー以外に設定して下さい。 security  [デフォルト = ./gallery]';
$messages['help_thumbnail_method'] = 'サムネイルの取得形式を設定します。PHP使用の場合はGDサポートが必要となります。  [デフォルト = PHP]';
$messages['help_path_to_convert'] = 'ImageMagickによる"コンバート"ツールへのパスを設定します。サムネイル取得形式に"ImageMagick"を選択した場合は入力必須となります。  [デフォルト = /usr/bin/convert]';
$messages['help_thumbnail_format'] = 'サムネイルの保存形式を設定します。  [デフォルト = オリジナルの画像と同じ]';
$messages['help_thumbnail_height'] = '小サムネイルのデフォルトの縦幅を設定します。  [デフォルト = 120]';
$messages['help_thumbnail_width'] = '小サムネイルのデフォルトの横幅を設定します。  [デフォルト = 120]';
$messages['help_medium_size_thumbnail_height'] = '中サムネイルのデフォルトの縦幅を設定します。  [デフォルト = 480]';
$messages['help_medium_size_thumbnail_width'] = '中サムネイルのデフォルトの横幅を設定します。  [デフォルト = 640]';
$messages['help_thumbnails_keep_aspect_ratio'] = 'サムネイル取得時に実際のサイズの割合を適用する。上で指定したサムネイルサイズより大きくなる可能性がありますが、表示の質は良くなります。 [デフォルト = はい]';
$messages['help_thumbnail_generator_force_use_gd1'] = 'システムにGD1-only機能の使用を強制する。 [デフォルト = いいえ]';
$messages['help_thumbnail_generator_user_smoothing_algorithm'] = 'スムースサムネイル用にアルゴリズムを使用する。サムネイル取得形式をGDに選択している場合にのみ適用されます。 [デフォルト = PHP Imagecopyresampled]';
$messages['help_resources_quota'] = 'Blog用のグローバルリソース容量をバイトで設定します。 (例: 5242880 バイト = 5MB) 0を入力すると無制限となります。 [デフォルト = 0]';
$messages['help_resource_server_http_cache_enabled'] = '"If-Modified-Since"ヘッダーとHTTP暫定リクエストのサポートを有効にする。増バンドワイズ保持が有効になります。  [デフォルト = いいえ]';
$messages['help_resource_server_http_cache_lifetime'] = 'クライアントにリソースのキャッシュバージョンを使用させる時間をマイクロセカンド(100万分の1)で設定します。 [デフォルト = 9999999]';
$messages['same_as_image'] = 'オリジナルの画像と同じ';
// search
$messages['help_search_engine_enabled'] = '検索エンジンを有効にする  [デフォルト = はい]';
$messages['help_search_in_custom_fields'] = 'カスタム項目内を検索する  [デフォルト = はい]';
$messages['help_search_in_comments'] = 'コメント内を検索する  [デフォルト = はい]';

// cleanup
$messages['purge'] = 'クリーンアップ';
$messages['cleanup_spam'] = 'スパムデータのクリーンアップ';
$messages['cleanup_spam_help'] = 'これを実行すると、ユーザーがスパムと判断(マーク)した全ての不要なコメントが削除されます。これを実行すると元に戻すことができませんのでご注意下さい。';
$messages['spam_comments_purged_ok'] = 'スパムデータのクリーンアップが完了しました。';
$messages['cleanup_posts'] = '投稿データのクリーンアップ';
$messages['cleanup_posts_help'] = 'これを実行すると、ユーザーが削除(マーク)した全ての不要な投稿データが削除されます。これを実行すると元に戻すことができませんのでご注意下さい。';
$messages['posts_purged_ok'] = '投稿データのクリーンアップが完了しました。';

/// summary ///
// front page
$messages['summary'] = 'サマリー';
$messages['register'] = '登録';
$messages['summary_welcome'] = 'Welcome!';
$messages['summary_most_active_blogs'] = '最新更新のBlog';
$messages['summary_most_commented_articles'] = 'コメントの多い記事';
$messages['summary_most_read_articles'] = '閲覧数の多い記事';
$messages['password_forgotten'] = 'パスワード紛失';
$messages['summary_newest_blogs'] = '新着のBlog';
$messages['summary_latest_posts'] = '新着の記事';
$messages['summary_search_blogs'] = 'Blog検索';

// blog list
$messages['updated'] = '最終更新日:';
$messages['total_reads'] = '閲覧数:';

// blog profile
$messages['blog'] = 'Blog';
$messages['latest_posts'] = '最新の記事';

// registration
$messages['register_step0_title'] = 'メンバー規約';
$messages['agreement'] = '規約内容'; 
$messages['decline'] = '同意しない';
$messages['accept'] = '同意する';
$messages['read_service_agreement'] = '以下のメンバー規約をよくお読みになり、同意の上で登録される場合は"同意する"をクリックして下さい。';
$messages['register_step1_title'] = 'ユーザー作成 [1/4]';
$messages['register_step1_help'] = 'Blogを作成する前に新規ユーザーを作成する必要があります。この新規ユーザーはBlogのオーナーとなり、全ての機能にアクセスできるようになります。';
$messages['register_next'] = '次へ';
$messages['register_back'] = '前へ';
$messages['register_step2_title'] = 'Blog作成 [2/4]';
$messages['register_blog_name_help'] = 'あなたのBlogの名前';
$messages['register_step3_title'] = 'テンプレート選択 [3/4]';
$messages['step1'] = 'ステップ1';
$messages['step2'] = 'ステップ2';
$messages['step3'] = 'ステップ3';
$messages['register_step3_help'] = 'テンプレートを選択して下さい。テンプレートは後で変更可能です。';
$messages['error_must_choose_template'] = 'テンプレートを1つ選択して下さい。';
$messages['select_template'] = 'テンプレート選択';
$messages['register_step5_title'] = '登録完了 [4/4]';
$messages['finish'] = '完了';
$messages['register_need_confirmation'] = '登録手続きを完了するための承認メールがあなたのE-Mailアドレスへ送信されました。承認メールに掲載されている承認コードをクリックし、登録手続きを完了させて下さい。';
$messages['register_step5_help'] = '新規ユーザーとBlogが作成が完了しました!';
$messages['register_blog_link'] = 'あなたの新規Blogはこちらよりアクセス可能です: <a href="%2$s">%1$s</a>';
$messages['register_blog_admin_link'] = 'あなたの新規Blogに記事を投稿される場合は<a href="admin.php">管理画面</a>より行って下さい。';
$messages['register_error'] = '実行中にエラーが発生しました。';
$messages['error_registration_disabled'] = '申し訳ありませんが、新規登録は現在受け付けておりません。';
// registration article topic and text
$messages['register_default_article_topic'] = '登録が完了しました';
$messages['register_default_article_text'] = 'このメッセージが表示されている場合は、登録が完了しあなた専用のBlogが追加されたことを意味します。(管理画面よりこのメッセージは削除可能です)';
$messages['register_default_category'] = 'General';
// confirmation email
$messages['register_confirmation_email_text'] = '登録手続きを完了するには以下の承認コードをクリックして下さい:

%s

ご登録ありがとうございました。';
$messages['error_invalid_activation_code'] = '申し訳ありませんが、承認コードが間違っているようです。';
$messages['blog_activated_ok'] = '登録手続きが完了しました。';
// forgot your password?
$messages['reset_password'] = 'パスワードリセット';
$messages['reset_password_username_help'] = 'パスワードをリセットするユーザー名を入力して下さい。';
$messages['reset_password_email_help'] = 'このユーザーの登録E-Mailアドレスを入力して下さい。';
$messages['reset_password_help'] = 'ここでは紛失してしまったパスワードをリセットし、再発行することができます。ユーザー名とE-Mailアドレスを入力して下さい。';
$messages['error_resetting_password'] = 'パスワードリセット中にエラーが発生しました。再度お試し下さい。';
$messages['reset_password_error_incorrect_email_address'] = '入力されたE-Mailアドレスとユーザー名がマッチしません。';
$messages['password_reset_message_sent_ok'] = 'パスワードをリセットするリンクコードが記載されたメールをあなたのE-Mailアドレス宛に送信しました。メールに記載されているリンクコードをクリックして下さい。';
$messages['error_incorrect_request'] = 'URL内のパラメーターが正しくありません。';
$messages['change_password'] = '新規パスワード設定';
$messages['change_password_help'] = '新規パスワードを入力して下さい。';
$messages['new_password'] = '新規パスワード';
$messages['new_password_help'] = '新規パスワードを入力して下さい。';
$messages['password_updated_ok'] = 'パスワードの更新が完了しました。';

// Suggested by BCSE, some useful messages that not available in official locale
$messages['upgrade_information'] = 'This page looks plain and un-styled because you\'re using a non-standard compliant browser. To see it in its best form, please <a href="http://www.webstandards.org/upgrade/" title="The Web Standards Project\'s Browser Upgrade initiative">upgrade</a> to a browser that supports web standards. It\'s free and painless.';
$messages['jump_to_navigation'] = 'Jump to Navigation.';
$messages['comment_email_never_display'] = 'Line and paragraph breaks automatic, e-mail address never displayed.';
$messages['comment_html_allowed'] = '<acronym title="Hypertext Markup Language">HTML</acronym> allowed: &lt;<acronym title="Hyperlink">a</acronym> href=&quot;&quot; title=&quot;&quot; rel=&quot;&quot;&gt; &lt;<acronym title="Acronym Description">acronym</acronym> title=&quot;&quot;&gt; &lt;<acronym title="Quote">blockquote</acronym> cite=&quot;&quot;&gt; &lt;<acronym title="Strike">del</acronym>&gt; &lt;<acronym title="Italic">em</acronym>&gt; &lt;<acronym title="Underline">ins</acronym>&gt; &lt;<acronym title="Bold">strong</acronym>&gt;';
$messages['trackback_uri'] = 'The <acronym title="Uniform Resource Identifier">URI</acronym> to trackback this entry is: ';
$messages['previous_post'] = '前へ';
$messages['next_post'] = '次へ';
$messages['comment_default_title'] = '(無題)';
$messages['guestbook'] = 'ゲストブック';
$messages['trackbacks'] = 'Trackback';
$messages['menu'] = 'メニュー';
$messages['albums'] = 'アルバム';
$messages['admin'] = '管理者';
?>
