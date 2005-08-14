<?php
// 미번역 부분
// 145
// 487
// 732
// 1015
// 1070
// 라인근처

// set this to the encoding that should be used to display the pages correctly
$messages["encoding"] = "euc-kr";
$messages["locale_description"] = "한국어 로케일(Korean locale file for pLog 0.3)";
// days of the week
$messages["days"] = Array( "일요일", "월요일", "화요일", "수요일", "목요일", "금요일", "토요일" );
// -- compatibility, do not touch -- //
$messages["Monday"] = $messages["days"][1];
$messages["Tuesday"] = $messages["days"][2];
$messages["Wednesday"] = $messages["days"][3];
$messages["Thursday"] = $messages["days"][4];
$messages["Friday"] = $messages["days"][5];
$messages["Saturday"] = $messages["days"][6];
$messages["Sunday"] = $messages["days"][0];

// abbreviations
$messages["daysshort"] = Array( "일", "월", "화", "수", "목", "금", "토" );
// -- compatibility, do not touch -- //
$messages["Mo"] = $messages["daysshort"][1];
$messages["Tu"] = $messages["daysshort"][2];
$messages["We"] = $messages["daysshort"][3];
$messages["Th"] = $messages["daysshort"][4];
$messages["Fr"] = $messages["daysshort"][5];
$messages["Sa"] = $messages["daysshort"][6];
$messages["Su"] = $messages["daysshort"][0];

// months of the year
$messages["months"] = Array( "1월", "2월", "3월", "4월", "5월", "6월", "7월", "8월", "9월", "10월", "11월", "12월" );
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

$messages["message"] = "메세지";
$messages["error"] = "에러";

$messages["date"] = "날짜";

// miscellaneous texts
$messages["of"] = "of";
$messages["recently"] = "최근 글";
$messages["comments"] = "코멘트";
$messages["comment on this"] = "코멘트";
$messages["my_links"] = "내 링크";
$messages["archives"] = "저장소";
$messages["search"] = "검색";
$messages["calendar"] = "달력";
$messages["categories"] = "카테고리";
$messages["search_s"] = "검색";
$messages["link_tracker"] = "링크 추적";
$messages["search_this_blog"] = "이 블로그에서 찾기:";
$messages["about_myself"] = "내소개?";
$messages["permalink_title"] = "Permanent link to the archives";
$messages["permalink"] = "Permalink";
$messages["posted_by"] = "글쓴이";
$messages["on_the"] = "on the";
$messages["page"] = "페이지";
$messages["posted"] = "posted";

$messages["reply"] = "답글";


// add comment form
$messages["add_comment"] = "코멘트 추가";
$messages["comment_topic"] = "제목";
$messages["comment_text"] = "내용";
$messages["comment_username"] = "이름";
$messages["comment_email"] = "이메일 주소(생략가능)";
$messages["comment_url"] = "홈페이지/블로그(생략가능)";
$messages["comment_send"] = "입력";
$messages["comment_added"] = "코멘트가 추가되었습니다!";
$messages["comment_add_error"] = "코멘트 추가중 에러발생";


$messages["article_does_not_exist"] = "글이 존재하지 않습니다";
$messages["no_posts_found"] = "글을 찾지 못했습니다";
$messages["user_has_no_posts_yet"] = "사용자가 글을 올린적이 없습니다";

$messages["info_about_myself"] = "내 정보";
$messages["back"] = "돌아가기";

$messages["back_top"] = "Main으로 돌아가기";

$messages["link_tracker_results"] = "링크 추적 결과";
$messages["link_tracker_header"] = "사용자에 의해 참조된 링크입니다";
$messages["link_tracker_no_links"] = "사용자에 의해 참조된 링크가 없습니다";
$messages["post"] = "글";

$messages["trackbacks_for_article"] = "이 글에 연결된 트랙백";
"Trackbacks for the article titled";
$messages["trackback_excerpt"] = "Excerpt";
$messages["trackback_weblog"] = "Weblog";

$messages["search_results"] = "검색결과";
$messages["search_matching_results"] = "다음 단어로 검색된 결과: ";
$messages["search_no_matching_posts"] = "검색 결과가 없습니다";

$messages["see_all_link"] = "모든 글을 보려면 여기를 누르세요";

$messages["read_more"] = "(더보기)";

$messages["anonymous_poster"] = "익명";

$messages["syndicate"] = "중계";

$messages["main"] = "Main";

////// error messages /////
$messages["error_fetching_article"] = "글을 찾지 못했습니다.";
$messages["error_fetching_articles"] = "글을 가져올 수 없습니다.";
$messages["error_trackback_no_trackback"] = "이 글에 달린 트랙백이 없습니다.";
$messages["error_incorrect_article_id"] = "글 id가 올바르지 않습니다.";
$messages["error_incorrect_blog_id"] = "블로그 id가 올바르지 않습니다.";
$messages["error_comment_without_text"] = "코멘트 내용이 없습니다.";
$messages["error_comment_without_name"] = "이름이나 닉네임이 있어야 합니다.";
$messages["error_adding_comment"] = "코멘트를 추가하던 도중 에러가 발생했습니다.";
$messages["error_incorrect_parameter"] = "잘못된 파라메터.";
$messages["error_parameter_missing"] = "파라메터가 부족합니다.";
$messages["error_blog_has_no_links"] = "이 블로그는 아직 링크가 없습니다.";
$messages["error_comments_not_enabled"] = "이 사이트에는 코멘트를 달 수 없습니다.";

/////////////////                                          //////////////////
///////////////// STRINGS FOR THE ADMINISTRATION INTERFACE //////////////////
/////////////////                                          //////////////////


////// help messages for the administration interface /////
$messages["newPost"] = "<p>이 페이지에서 블로그에 새 글을 올릴 수 있습니다. 제목을 입력해야합니다. 글을 다 쓴 후에 <b>'등록'</b>버튼을 눌러서 글을 올리면 됩니다. 글의 상태를 <b>'공개'</b>로 해야 메인페이지에 보이게 됩니다. 글이 미완성이라면 <b>'비공개'</b>로 한 뒤 나중에 수정해서 공개할 수 있습니다.
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

$messages["editLinkCategory"] = "링크카테고리에 사용할 새 이름을 넣어 주십시오.</p>";

$messages["blogSelect"] = "메뉴의 하나를 선택해 주십시오.";

$messages["Error"] = "명령을 실행하던 도중 에러가 발생했습니다. 더 많은 정보를 보려면 메인페이지로 가십시오.";

$messages["Message"] = "더 많은 정보를 보려면 메인페이지로 가십시오.";

//////// strings for the administration interface ///////



$messages["admin_interface_title"] = "pLog 관리자 페이지";
$messages["administration"] = "관리";
$messages["help"] = "도움말";
$messages["plog_help"] = "pLog 도움말";
$messages["new_post"] = "새 글쓰기";
$messages["posts"] = "기존글";
$messages["admin_categories"] = "카테고리";
$messages["admin_links"] = "링크";
$messages["link_categories"] = "링크 카테고리";
$messages["settings"] = "설정";
$messages["logout"] = "로그아웃";

// new post page
$messages["topic"] = "제목";
$messages["text"] = "내용";
$messages["category"]  = "카테고리";
$messages["status"] = "상태";
$messages["post_status_draft"] = "비공개";
$messages["post_status_published"] = "공개";
$messages["post_status_deleted"] = "삭제된글";
$messages["post_status_all"] = "전부";
$messages["send_notification"] = "코멘트가 추가될 때마다 알려줍니다.";
$messages["send_trackback_pings"] = "글에서 링크를 찾아 링크로 트랙백 핑을 보냅니다.";
$messages["add_post"] = "이 글을 올립니다!";

$messages["xmlrpc_ping_ok"] = "XML-RPC 핑이 무사히 전송되었습니다 ";
$messages["error_sending_xmlrpc_ping"] = "XML-RPC 핑을 보내는 도중 에러가 발생했습니다 ";
$messages["error_sending_xmlrpc_ping_message"] = "에러 메세지: ";

$messages["preview"] = "미리보기";
$messages["post_added"] = "글이 추가되었습니다";
$messages["you_will_be_notified"] = "답글을 감시하다 새 답글이 달리면 알려줍니다.";
$messages["post_added_not_published"] = "글이 비공개로 추가되었습니다.";
$messages["error_adding_post"] = "글 추가중에 에러발생!";
$messages["error_must_fill_all_fields"] = "모든 항목을 채워야 합니다!";
$messages["error_must_have_one_category"] = "글을 올리려면 카테고리가 한개이상 있어야만 합니다";

// send trackbacks page
$messages["send_trackback_pings"] = "트랙백 핑을 보냅니다";
$messages["links_found"] = "다음의 링크를 찾았습니다. 트랙백 핑을 보낼 링크에 체크해 주십시오(시간이 좀 걸릴 수도 있습니다)";
$messages["trackbacks_no_urls_selected"] = "선택된 URL이 없어서 트랙백 핑을 보내지 않았습니다.";
$messages["trackbacks_received_ok"] = "다음 호스트들은 트랙백 핑을 무사히 받았습니다:";
$messages["trackbacks_no_trackback"] = "다음링크는 올바른 트랙백 링크가 아닙니다: ";
$messages["trackbacks_problems_sending"] = "다음 호스트들에 트랙백 핑을 보내던중 문제가 발생했습니다.
원한다면 나중에 다시 보낼 수 있습니다..";
$messages["trackbacks_received_all_hosts"] = "모든 호스트에 트랙백 핑을 보냈습니다.";
$messages["ping_selected"] = "선택한 사이트에 핑보내기";

// edit posts
$messages["author"] = "글쓴이";
$messages["category_all"] = "모두";
$messages["author_all"] = "모두";
$messages["update"] = "수정";
$messages["date"] = "날짜";
$messages["stats"] = "상태";
$messages["delete"] = "삭제";

$messages["delete_selected"] = "선택한 것들을 지웁니다";

// edit post
$messages["edit_post"] = "글 수정";
$messages["error_getting_post_to_update"] = "선택한 글을 수정하는 도중 에러가 발생했습니다.";
$messages["error_updating_post_in_database"] = "데이터베이스에서 에러발생.";
$messages["post_successfully_updated"] = "글이 무사히 수정되었습니다.";
$messages["notification_removed"] = "이 글에 대한 알림설정이 해제되었습니다.";

// post statistics
$messages["statistics_for_post"] = "이 글에 대한 통계 ";
$messages["error_fetching_post"] = "데이터를 가져오는 도중 에러가 발생했습니다.";
$messages["times_post_has_been_read"] = "조회수: ";
$messages["referers"] = "참조";
$messages["id"] = "Id";
$messages["url"] = "Url";
$messages["hits"] = "Hits";
$messages["trackbacks"] = "트랙백";

// post comments
$messages["error_fetching_comments"] = "코멘트를 가져오는 도중 에러가 발생했습니다";
$messages["comments_for_post"] = "이 글에 달린 코멘트 ";
$messages["email"] = "E-Mail";
$messages["ip_address"] = "IP 주소";

// delete comments
$messages["error_no_comments_selected"] = "선택된 코멘트가 없습니다.";
$messages["error_deleting_comment"] = "코멘트를 지우던 중 에러가 발생했습니다 ";
$messages["comment_deleted_ok"] = "코멘트 \"%s\" 를 삭제했습니다.";


// categories list
$messages["category_name"] = "이름";

// removing posts
$messages["post_cannot_be_deleted"] = "글을 지울 수 없습니다";
$messages["no_posts_selected"] = "지우기 위해 선택한 글이 없습니다.";
// %s = subject of the post, %d = identifier of the post. feel free to change its order
// but if you remove them there will be no information about which post was removed...
$messages["error_deleting_post"] = "\"%s\"를 지우던 도중 에러발생 (id = %d)";
$messages["post_deleted_ok"] = "\"%2\$s\"를 지웠습니다. (id = %1\$d)";

// delete categories
$messages["no_categories_selected"] = "지우기 위해 선택한 카테고리가 없습니다.";
$messages["error_category_has_articles"] = "\"%s\"카테고리에 해당하는 글이 있어서 카테고리를 지울 수 없습니다. 카테고리안의 글을 지운뒤 다시 시도해 주십시오.";
$messages["error_deleting_category"] = "\"%s\"카테고리를 지우는 동안 데이터베이스에서 에러가 발생했습니다.";
$messages["category_deleted_ok"] = "\"%s\"카테고리가 무사히 지워졌습니다.";

// add category
$messages["add_new_category"] = "새 카테고리 추가";
$messages["add_new_category_info"] = "새 카테고리에 적합한 이름을 넣어 주세요.";
$messages["category_added_ok"] = "카테고리가 무사히 추가되었습니다.";
$messages["error_adding_article_category"] = "새 카테고리를 추가하던중 에러가 발생했습니다.";

// edit categories
$messages["edit_category"] = "카테고리 수정";
$messages["please_provide_valid_category_name"] = "카테고리에 적합한 이름을 넣어 주세요.";

// edit category
$messages["error_incorrect_category_id"] = "잘못된 카테고리 입니다";

// update the category
$messages["error_fetching_category"] = "카테고리를 가져오던 중 에러가 발생했습니다.";
$messages["error_updating_category"] = "카테고리를 수정하던 중 에러가 발생했습니다.";
$messages["error_empty_category_name"] = "카테고리 이름을 입력해야 합니다.";
$messages["category_updated_ok"] = "카테고리가 무사히 수정되었습니다.";

// edit links
$messages["link_name"] = "이름";
$messages["link_url"] = $messages["url"];
$messages["link_category"] = $messages["category"];
$messages["link_description"] = "설명";
$messages["links"] = "링크";

// edit a link
$messages["error_provide_name_and_url"] = "링크에 사용할 이름과 URL이 필요합니다.";
$messages["error_invalid_link_id"] = "링크 id가 없거나 잘못되어있습니다.";
$messages["error_fetching_link"] = "링크를 가져오던 도중 에러가 발생했습니다.";
$messages["error_updating_link"] = "링크를 수정하던 도중 에러가 발생했습니다.";
$messages["link_updated_ok"] = "링크가 무사히 수정되었습니다!";
$messages["error_fetching_link_categories"] = "링크 카테고리를 가져져오던 도중 에러가 발생했습니다.";

// add a link
$messages["add_new_link"] = "새 링크추가";
$messages["add_link"] = "링크추가";
$messages["error_adding_link"] = "링크를 추가하던 도중 에러가 발생했습니다.";
$messages["link_added_ok"] = "링크가 무사히 추가되었습니다.";
$messages["error_provide_name_and_url"] = "이름이 없거나 잘못된 주소입니다.";
$messages["error_must_have_one_link_category"] = "링크를 추가하려면 링크카테고리가 최소한 한개는 있어야 합니다.";

// delete a link
$messages["error_no_links_selected"] = "지우기 위해 선택한 링크가 없습니다.";
$messages["error_removing_link"] = "\"%s\"를 지우던 도중 데이터베이스에러발생";
$messages["link_deleted_ok"] = "링크 \"%s\"를 지웠습니다.";

// edit link categories
$messages["add_link_category"] = "새 링크 카테고리 추가";
$messages["link_categories_help"] = "링크를 추가하려면 링크카테고리가 최소한 한개는 있어야 합니다.";
$messages["link_category_name"] = "이름";
$messages["link_category_links"] = "링크";

// new link category
$messages["new_link_category_info"] = "링크 카테고리는 모아놓은 링크를 분류할 수 있게 도와줍니다. 또한 메인페이지에서 이 카테고리를 이용해서 그룹화된 링크를 보여줄 수 있습니다.";
$messages["add_link_category"] = "새 링크카테고리 추가";
$messages["error_provide_link_category_name"] = "유효한 링크카테고리 이름이 있어야 합니다.";
$messages["error_adding_link_category"] = "링크카테고리를 추가하던 도중 에러가 발생했습니다..";
$messages["link_category_added_ok"] = "링크카테고리가 무사히 추가되었습니다.";

// edit link category
$messages["edit_link_category"] = "링크카테고리 수정";
$messages["error_updating_link_category"] = "링크카테고리를 수정하는 도중 에러가 발생했습니다.";
$messages["link_category_updated_ok"] = "링크카테고리가 무사히 수정되었습니다.";
$messages["error_fetching_link_category"] = "링크카테고리를 가져오는 도중 에러가 발생했습니다.";
$messages["error_incorrect_link_category_id"] = "잘못된 링크카테고리 식별자";


// delete link categories
$messages["error_no_link_category_selected"] =  "지우기 위해 선택한 링크카테고리가 없습니다.";
$messages["error_links_in_link_category"] = "링크 카테고리에 링크가 있어서 지울 수 없습니다. 링크디렉토리를 비우고 다시 시도해 주십시오.";
$messages["error_removing_link_category"] = "카테고리 \"%s\"를 지우던 도중 에러발생";
$messages["link_category_deleted_ok"] = "링크카테고리 \"%s\"를 지웠습니다.";
// this error is shown when for some reason the category could not be fetched from the database
// and we can't show its name
$messages["error_removing_link_category_2"] = "링크카테고리를 삭제하던 도중 에러가 발생했습니다 id = %d";

// blog settings page
$messages["blog_settings"] = "블로그 설정";
$messages["user_profile"] = "사용자 정보";
$messages["plugin_center"] = "플러그인 센터";
$messages["statistics"] = "통계";
$messages["blog_name"] = "블로그 이름";
$messages["long_blog_name"] = "블로그에 대한 설명";
$messages["language_used"] = "사용할 언어";
$messages["items_main_page"] = "메인페이지에 보여줄 글 갯수";
$messages["items_as_recent"] = "\"최근글\"에 보여줄 글 갯수";
$messages["template_used"] = "블로그에 사용할 템플릿(스킨)";
$messages["cut_posts"] = "글이 너무 길면 \"더보기\"로 링크하시겠습니까?";
$messages["cut_posts_after_characters"] = "몇 글자 이상이 되면 자르겠습니까?";
$messages["enable_wysiwyg_edition"] = "WYSIWYG 에디터를 사용하시겠습니까(인터넷 익스플로러 5.5, 모질라 1.3b 이상의 버전에서만 동작합니다)?";
$messages["enable_comments"] = "모든 글에 코멘트를 달 수 있게 하시겠습니까?";
$messages["yes"] = "예";
$messages["no"] = "아니오";
$messages["error_invalid_locale"] = "잘못된 로케일 입니다";
$messages["error_incorrect_max_recent_items"] = "최근글에 보여줄 글 갯수가 바르지 않습니다.";
$messages["error_incorrect_number_of_posts"] = "메인페이지에 보여줄 글 갯수가 바르지 않습니다.";
$messages["error_incorrect_template"] = "잘못된 템플릿 입니다.";
$messages["error_no_blog_name"] = "블로그 이름이 없습니다.";
$messages["error_incorrect_show_more_threshold"] = "\"더보기\"로 제한할 글자 수 가 바르지 않습니다.";
$messages["error_updating_settings"] = "블로그 설정을 업데이트 하는 도중 에러가 났습니다.";
$messages["blog_settings_updated_ok"] = "블로그 설정이 무사히 수정 되었습니다!";
$messages["permanent_blog_url"] = "이 블로그의 메인 URL(수정불가능)";

// user profile page
$messages["username"] = "사용자이름";
$messages["password"] = "비밀번호";
$messages["confirm_password"] = "비밀번호 확인";
$messages["email_address"] = "Email 주소";
$messages["bio"] = "Bio";
$messages["empty_no_change"] = "변경할때만 입력해 주십시오";
$messages["user_settings_updated_ok"] = "사용자 설정이 무사히 변경되었습니다.";
$messages["error_updating_user_settings"] = "사용자 설정을 변경하던 중 에러가 발생했습니다.";
$messages["error_passwords_dont_match"] = "비밀번호가 일치하지 않습니다.";
$messages["error_incorrect_password"] = "비밀번호가 올바르지 않습니다.";
$messages["error_incorrect_email_address"] = "Email 주소가 올바르지 않습니다.";

// plugin center page
$messages["plugins_available"] = "템플릿에서 사용가능한 플러그인 목록";
$messages["identifier"] = "이름";
$messages["description"] = "설명";
$messages["error_plugins_disabled"] = "이 사이트에서는 플러그인을 사용할 수 없습니다.";

// statistics page
$messages["statistics_info"] = "글 id 0번에 관한 것은 사이트 메인페이지에 관한 것입니다.";
$messages["article_id"] = "글 id";
$messages["last_hit_date"] = "마지막 조회일";
$messages["error_fetching_referers"] = "참조주소를 가져오는 동안 에러가 발생했습니다";


// login screen
$messages["login_page_title"] = "pLog 관리자 페이지";
$messages["login"] = "로그인";
$messages["welcome_message"] = "pLog에 오신것을 환영합니다";
$messages["error_incorrect_username_or_password"] = "아이디나 비밀번호가 바르지 않습니다.";
$messages["error_dont_belong_to_any_blog"] = "어느 블로그에도 소속되어 있지 않습니다.";
$messages["error_no_username_or_password"] = "올바른 사용자이름/비밀번호가 아닙니다.";
$messages["choose_one_blog"] = "다음 블로그에 소속되어 있습니다. 사용하실 블로그를 선택해 주십시오";
$messages["continue"] = "계속";
$messages["logout_message"] = "무사히 로그아웃 되었습니다.";
$messages["logout_message_2"] = "<a href=\"admin.php\">여기를 클릭</a>하셔서 다시 로그인 하시거나 <a href=\"%1\$s\">%2\$s</a>로 가실 수 있습니다.";
$messages["logout_title"] = "로그아웃";
$messages["error_access_forbidden"] = "접근이 금지되어 있습니다. here를 클릭해서 로그인 해 주십시오..";

/////////////////////////////////////////////////////////////////////
//
//
// new strings added for 0.2
//
//
////////////////////////////////////////////////////////////////////
$messages["site_admin"] = "사이트 관리";
$messages["site_stats"] = "사이트 통계";
$messages["add_user"] = "사용자 추가";
$messages["users"] = "사용자";
$messages["add_blog"] = "블로그 추가";
$messages["blogs"] = "블로그";
$messages["locales"] = "로케일";
$messages["add_locale"] = "로케일 추가";
$messages["templates"] = "템플릿";
$messages["add_template"] = "템플릿 추가";
$messages["global_settings"] = "전체설정(Global Settings)";
$messages["site_settings"] = "사이트 설정";
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

$messages["add_user_give_information"] = "새 사용자를 추가하기 위해 아래의 항목들을 채워주십시오.";

$messages["site_registered_users"] = "이 서버에 등록된 모든 사용자들 입니다.";

$messages["add_blog_give_information"] = "새 블로그를 만들기 위해 아래의 항목들을 채워주십시오.";
$messages["blog_title"] = "블로그 제목";
$messages["blog_owner"] = "블로그 주인";

$messages["site_registered_blogs"] = "이 사이트에 등록된 모든 블로그 입니다.";
$messages["edit_users"] = "사용자 수정";

$messages["upload_locale"] = "로케일 업로드";
$messages["use_this_form_to_upload_locale"] = "새로운 로케일을 서버에 업로드 하려면 이 폼을 사용하십시오. 업로드 할 파일이 없으면 아래의 폼을 이용하십시오.";
$messages["locale_file"] = "로케일파일";
$messages["manually_add_locale"] = "수동으로 로케일 추가";
$messages["use_this_form_if_cant_upload_locale"] = "파일을 서버에 올릴 수 없으면 이 폼을 사용하십시오. 파일은 기본 템플릿 폴더에 카피되어 있어야 합니다. 그렇지 않으면 에러가 발생합니다.";
$messages["locale_code"] = "로케일 코드";
$messages["locale_encoding"] = "로케일인코딩";

$messages["template_will_be_available_for_all"] = "템플릿을 추가하면 자동으로 모든 블로그에서 사용할 수 있게 됩니다.";

$messages["use_this_form_to_upload_template"] = "새로운 템플릿을 서버에 업로드 하려면 이 폼을 사용하십시오. 업로드 할 파일이 없으면 아래의 폼을 이용하십시오.
템플릿은 반드시 zip, tar.gz, tar.bz2의 형태로 올려야 합니다.";
$messages["locale_file"] = "로케일 파일";
$messages["upload_template"] = "업로드 템플릿";
$messages["manually_add_template"] = "수동으로 템플릿 추가";
$messages["use_this_form_if_cannot_upload_template"] = "업로드할 파일이 없으면 이 폼을 사용하십시오. 파일은 기본 템플릿 폴더에 카피되어 있어야 합니다. 그렇지 않으면 에러가 발생합니다.";
$messages["template_id"] = "템플릿 이름";

$messages["templates_available_for_all"] = "이제 이 템플릿을 사이트내의 모든 블로그에서 사용가능합니다.";
$messages["add_file"] = "파일 추가";

$messages["setting_name"] = "이름";
$messages["setting_value"] = "값";
$messages["setting_description"] = "설명";

$messages["plain"] = "평문";
$messages["search_engine_friendly"] = "서치엔진에 친숙하게";

$messages["general_settings"] = "일반 설정";
$messages["helper_tools_settings"] = "도움말 툴 설정";
$messages["uploads_settings"] = "업로드 설정";
$messages["email_settings"] = "Email 설정";

$messages["number_blogs"] = "총 블로그 수";
$messages["number_users"] = "총 사용자 수";
$messages["number_posts"] = "총 글 수";
$messages["number_posts_today"] = "오늘 쓴 글 수";
$messages["number_posts_this_month"] = "이번달에 쓴 글 수";

$messages["date"] = "날짜";
$messages["time"] = "시간";

$messages["comments_order"] = "코멘트 정렬 순서:";
$messages["oldest_first"] = "처음글이 위로";
$messages["newest_first"] = "나중글이 위로";

$messages["blog"] = "블로그";
$messages["blog_id"] = "블로그 id 번호";

$messages["blog_users"] = "블로그 사용자";
$messages["available_users"] = "사용가능한 사용자";
$messages["add"] = "추가";
$messages["remove"] = "제거";

$messages["user_id"] = "사용자 id 번호";

$messages["new_password"] = "새 비밀번호";
$messages["has_administrator_privileges"] = "관리권한을 가지고 있습니다";
$messages["related_to_the_following_blogs"] = "관련된 블로그";

$messages["add_user_to_blog_form"] = " 이 폼을 사용해서 사용자를 추가할 수 있습니다. 추가된 사용자는 글을 올리고 수정할 수는 있지만 설정을 변경할 수는 없습니다.";
$messages["add_user_enter_username"] = " 추가할 사용자 이름을 입력해 주십시오. 사용자는 이 사이트에 등록이 되어있어야 합니다. 그렇지 않을경우는 에러가 발생합니다.";
$messages["add_user_send_notification"] = "사용자에게 이메일로 알려줍니다.";
$messages["add_user_type_notification"] = "이메일에 들어갈 내용을 입력해 주십시오";

$messages["following_users_have_permissions"] = " 다음 사용자들은 이 블로그에 소속되어 있습니다. 그들은 글을 추가하고, 수정하고, 지울 수 있습니다. 하지만 설정은 아무것도 변경할 수 없습니다.";
$messages["revoke_permissions"] = "권한 제거";

$messages["add_blog_template"] = "블로그 템플릿 추가";
$messages["manually_add_blog_template"] = "수동으로 블로그 템플릿 추가";
$messages["template_available_only_for_this_blog"] = "이 템플릿은 이 블로그에서만 사용가능 합니다.";
$messages["use_form_to_upload_blog_template"] = "새로운 템플릿을 서버에 업로드 하려면 이 폼을 사용하십시오. 업로드 할 파일이 없으면 아래의 폼을 이용하십시오. 템플릿은 반드시 zip, tar.gz, tar.bz2의 형태로 올려야 합니다.";
$messages["use_form_if_cannot_upload_blog_template"] = "파일을 서버에 올릴 수 없으면 이 폼을 사용하십시오. 파일은 기본 템플릿 폴더에 카피되어 있어야 합니다. 그렇지 않으면 에러가 발생합니다.";

$messages["blog_templates"] = "블로그 템플릿";
$messages["templates_only_available_for_this_blog"] = "다음 템플릿들은 이 블로그에서만 사용할 수 있습니다.";

$messages["add_file_to_blog_template"] = "블로그 템플릿 추가"; 
$messages["upload_file_to_blog_template"] = "추가할 템플릿 파일을 올려주십시오.";

$messages["error_user_id_incorrect"] = "사용자 아이디가 올바르지 않습니다.";
$messages["error_incorrect_user_id"] = $messages["error_user_id_incorrect"];
$messages["error_fetching_user_information"] = "사용자 정보를 가져오는 도중 에러가 발생했습니다.";
$messages["error_password_incorrect"] = "비밀번호가 너무 짧거나 바르지 않습니다.";
$messages["error_updating_user_settings"] = "지금 사용자는 설정을 변경할 수 없습니다.";
$messages["user_settings_updated_ok"] = "사용자 \"%s\"에 대한 설정이 변경되었습니다.";
$messages["error_no_users_selected_to_add"] = "선택한 사용자가 없습니다.";
$messages["user_added_to_blog_ok"] = "사용자 \"%s\"가 블로그에 추가되었습니다.";
$messages["error_adding_user_to_blog"] = "사용자 \"%s\"를 블로그에 추가하던 도중 에러가 발생했습니다.";
$messages["error_no_users_selected_to_remove"] = "삭제하기 위해 선택한 사용자가 없습니다.";
$messages["user_removed_from_blog_ok"] = "사용자 \"%s\"가 이 블로그에서 삭제되었습니다.";
$messages["error_removing_user_from_blog"] = "사용자 \"%s\"를 블로그에서 제거하던 도중 에러가 발생했습니다.";

$messages["error_incorrect_plugin_id"] = "플러그인 id가 올바르지 않습니다.";
$messages["error_configuring_plugin"] = "플러그인 설정중 에러가 발생했습니다: ";
$messages["site_config_saved_ok"] = "사이트 설정이 무사히 저장되었습니다.";
$messages["error_saving_site_config"] = "설정을 저장하는데 문제가 있습니다.";

$messages["error_incorrect_blog_owner"] = "선택된 유저가 존재하지 않습니다.";
$messages["error_updating_blog_settings"] = "블로그 \"%s\" 설정을 변경하던중 에러가 발생했습니다.";
$messages["blog_settings_updated_ok"] = "블로그 \"%s\"의 설정이 무사히 변경되었습니다.";

$messages["error_fetching_users"] = "사용자 정보를 가져오던중 에러가 발생했습니다.";

$messages["error_fetching_blogs"] = "블로그 정보를 가져오던중 에러가 발생했습니다.";

$messages["error_incorrect_template_id"] = "템플릿 id가 올바르지 않거나 존재하지 않습니다.";

$messages["error_no_users_selected"] = "삭제하기 위해 선택된 사용자가 없습니다.";
$messages["error_could_not_find_user"] = "사용자 \"%s\"를 찾을 수 없습니다.";
$messages["error_deleting_user"] = "사용자 \"%s\"를 삭제하던중 에러가 발생했습니다";
$messages["user_deleted_ok"] = "사용자 \"%s\"가 무사히 삭제되었습니다.";

$messages["error_must_give_blog_name"] = "블로그에 적합한 이름을 넣어 주세요.";
$messages["error_adding_blog"] = "블로그를 추가하던중 데이터베이스에서 에러가 발생했습니다.";
$messages["blog_added_ok"] = "새 블로그 \"%s\"가 무사히 추가되었습니다.";

$messages["error_template_not_inside_folder"] = "템플릿 파일은 폴더에 들어있어야만 합니다.";
$messages["error_missing_base_files"] = "기본파일이 없습니다.";
$messages["error_unpacking"] = "파일을 풀던중 에러가 발생했습니다.";
$messages["error_forbidden_extensions"] = "몇몇 파일의 확장자가 금지된 확장자입니다.";
$messages["error_creating_working_folder"] = "템플릿에서 에러가 발생했습니다";
$messages["error_checking_template"] = "템플릿에서 에러가 발생했습니다 (code = %s)";
$messages["error_add_template_disabled"] = "일반 사용자는 템플릿을 추가할 수 없습니다.";
$messages["error_must_upload_file"] = "파일이 없습니다.";
$messages["error_no_template_name"] = "템플릿 이름이 없습니다.";
$messages["error_uploads_disabled"] = "이 사이트는 업로드가 불가능 합니다.";
$messages["error_installing_template"] = "템플릿을 설치하는 동안 에러가 발생했습니다.";
$messages["template_installed_ok"] = "템플릿 \"%s\"이(가) 무사히 설치되었습니다.";

$messages["error_adding_template_file"] = "템플릿 파일을 추가하던 도중에러가 발생했습니다.";
$messages["error_file_forbidden"] = "이 유형의 파일은 금지되어 있습니다.";
$messages["error_file_too_big"] = "파일이 너무 큽니다. 파일의 최대 용량은 \"%s\" bytes 입니다.";
$messages["template_file_added_ok"] = "템플릿 \"%s\"이(가) 무사히 설치되었습니다.";

$messages["error_plugin_cannot_be_configured"] = "플러그인 설정을 할 수 없습니다.";

$messages["error_incorrect_username"] = "사용자가 부정확합니다.";
$messages["error_username_already_exists"] = "같은 이름으로 등록한 사용자가 이미 있습니다.";
$messages["error_adding_user"] = "새 사용자를 등록하는 동안 에러가 발생했습니다.";
$messages["user_added_ok"] = "새 사용자 \"%s\"를 무사히 추가했습니다.";

$messages["error_no_blogs_selected"] = "지울 블로그를 선택해야 합니다.";
$messages["error_blog_is_default_blog"] = "\"%s\"는 기본블로그로 설정되어 있어서, 지울 수 없습니다.";
$messages["blog_deleted_ok"] = "블로그 \"%s\"를 무사히 지웠습니다.";
$messages["error_deleting_blog"] = "블로그 \"%s\"를 지우는 동안 에러가 발생했습니다.";

$messages["error_no_templates_selected"] = "제거할 템플릿을 선택해 주십시오.";
$messages["error_removing_template"] = "템플릿 \"%s\"를 제거하는 동안 에러가 발생했습니다.";
$messages["template_removed_ok"] = "템플릿 \"%s\"를 무사히 제거했습니다..";

$messages["error_no_users_selected_to_remove_from_blog"] = "이 블로그에서 제거할 사용자를 선택해 주십시오..";
$messages["error_removing_user_from_blog"] = "이 블로그에서 사용자 \"%s\"를 제거하는 동안 에러가 발생했습니다.";
$messages["user_removed_from_blog_ok"] = "이 블로그에서 사용자 \"%s\"를 무사히 제거했습니다.";

$messages["error_incorrect_locale_code"] = "제공되는 로케일이 바르지 않습니다.";
$messages["error_invalid_locale_file"] = "올바른 로케일 파일이 아닙니다.";
$messages["error_adding_locale_file"] = "새 로케일 파일을 추가하는 동안 에러가 발생했습니다. 로케일 디렉토리의 퍼미션을 확인해 주십시오.";
$messages["locale_added_ok"] = "새 로케일 \"%s\"를 무사히 추가했습니다.";
$messages["error_saving_locale"] = "새 로케일을 저장하는 동안 에러가 발생했습니다. 로케일폴더의 퍼미션을 확인해 주십시오.";

$messages["error_no_locales_selected"] = "제거할 로케일을 선택해 주십시오.";
$messages["error_deleting_only_locale"] = "로케일은 최소 1개 이상 있어야 합니다.";
$messages["locale_deleted_ok"] = "로케일 \"%s\"를 무사히 제거했습니다.";
$messages["error_deleting_locale"] = "로케일 \"%s\"를 제거하는 동안 에러가 발생했습니다.";
$messages["error_cant_delete_default_locale"] = "로케일 \"%s\"는 기본 로케일이기 때문에 지울 수 없습니다. 삭제하려면 기본 로케일을 변경하십시오.";

$messages["plugin_config"] = "플러그인 설정";

$messages["use_read_more_feature"] = "메인 페이지에서 글의 내용을 모두 보여주시겠습니까?('아니오'를 고르면 '내용'부분에 있는 글만 메인페이지에서 보입니다).";

$messages["extended_text"] = "여기에 쓰는 글은 글 읽기 에서만 보입니다. '설정'에서 변경할 수 있습니다.";

$messages["error_must_give_post_intro"] = "글 내용을 입력해 주십시오.";
$messages["error_no_albums_defined"] = "이 블로그에서 사용 가능한 앨범이 없습니다.";
$messages["error_fetching_album"] = "앨범을 가져오는 동안 에러가 발생했습니다";
$messages["comment_marked_as_spam_ok"] = "코멘트를 스팸으로 설정했습니다.";
$messages["comment_marked_as_nonspam_ok"] = "코멘트를 스팸에서 해제했습니다.";
$messages["error_marking_comment_as_nonspam"] = "코멘트를 스팸에서 해제하는 도중 에러가 발생했습니다.";
$messages["error_marking_comment_as_spam"] = "코멘트를 스팸으로 설정하는 도중 에러가 발생했습니다.";
$messages["error_incorrect_comment_id"] = "코멘트 id가 올바르지않습니다.";
$messages["error_base_storage_folder_missing_or_unreadable"] = "pLog가 필요한 폴더를 만들 수 없습니다. PHP가 안전모드(safe mode)로 작동하고 있거나 폴더에 권한이 없습니다. 폴더를 수동으로 만들어서 진행할 수도 있습니다 : <br/><br/>%s<br/><br/> 만약 이 폴더가 이미 있다면 폴더를 웹서버에서 읽고 쓸수 있게 만들어 주십시오.";


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
$messages["show_category_in_main_page"] = "이 카테고리를 메인화면에서 표시";
$messages["welcome_resource_center"] = "리소스 센터입니다!";
$messages["resource_center"] = "리소스 센터";
$messages["resource_albums"] = "리소스 앨범";
$messages["resources"] = "리소스";
$messages["add_resource"] = "리소스 추가";
$messages["add_album"] = "앨범추가";
$messages["album"] = "앨범";
$messages["album_name"] = "앨범이름";
$messages["parent_album"] = "상위앨범";
$messages["no_parent_album"] = "상위앨범없음";
$messages["resource_info"] = "리소스 정보";
$messages["size"] = "크기";
$messages["format"] = "유형";
$messages["dimensions"] = "Dimensions";
$messages["bits_per_sample"] = "픽셀당 비트수";
$messages["bytes"] = "bytes";
$messages["pixels"] = "pixels";
$messages["time_offset"] = "서버시간과 당신 컴퓨터의 시간차:";
$messages["hours"] = "시간";
$messages["album_added_ok"] = "새 앨범을 무사히 추가했습니다.";
$messages["name"] = "이름";
$messages["children"] = "하위앨범";
$messages["see"] = "보기";
$messages["view"] = "보기";
$messages["resource_info"] = "리소스 정보";
$messages["number_of_channels"] = "채널 수";
$messages["length"] = "길이";
$messages["number_of_files"] = "파일 수";
$messages["compressed_size"] = "압축된 크기";
$messages["uncompressed_size"] = "압축해제 크기";
$messages["resource_file"] = "추가할 파일";
$messages["add_to_album"] = "파일을 앨범에 추가합니다";
$messages["edit_resource_album"] = "리소스 앨범 수정";
$messages["error_loading_resource_album"] = "리소스 앨범을 가져오던 도중 에러가 발생했습니다.";
$messages["error_album_id_parameter_missing"] = "앨범 id가 바르지 않습니다.";
$messages["error_album_parent_id_parameter_missing"] = "상위 앨범 id가 바르지 않습니다.";
$messages["error_updating_resource_album"] = "리소스 앨범을 수정하던 도중 에러가 발생했습니다.";
$messages["resource_album_updated_ok"] = "리스소 앨범 \"%s\" 가 수정되었습니다.";
$messages["error_must_give_album_name"] = "앨범에 이름이 없습니다.";
$messages["error_adding_album"] = "앨범을 추가하던 도중 에러가 발생했습니다.";
$messages["album_added_ok"] = "앨범 \"%s\"가 추가되었습니다.";
$messages["resource_added_ok"] = "새 리소스가 추가되었습니다.";
$messages["error_resource_forbidden_extension"] = "금지된 확장자의 리소스는 업로드 할 수 없습니다.";
$messages["error_resource_too_big"] = "크기가 너무 커서 업로드 할 수 없습니다.";
$messages["error_uploads_disabled"] = "이 사이트에서는 업로드가 불가능합니다.";
$messages["error_adding_resource"] = "리소스를 추가하던중 에러가 발생했습니다.";
$messages["error_loading_resource"] = "리소스를 가져오던중 에러가 발생했습니다";
$messages["error_updating_resource"] = "리소스를 수정하던중 에러가 발생했습니다.";
$messages["resource_updated_ok"] = "리소스 \"%s\"가 수정되었습니다.";
$messages["error_no_resources_selected"] = "삭제할 리소스를 선택해 주십시오.";
$messages["resource_deleted_ok"] = "리소스 \"%s\"가 삭제되었습니다.";
$messages["error_deleting_resource"] = "리소스 \"%s\"를 삭제하던중 에러가 발생했습니다.";
$messages["error_no_resource_uploaded"] = "업로드한 파일이 없습니다.";
$messages["filtered_content"] = "내용필터링";
$messages["global_filtered_content"] = "전체적용 필터";
$messages["block_content"] = "필터추가";
$messages["blocked_hosts"] = "차단된 IP";
$messages["global_blocked_hosts"] = "사이트 전체에서 차단된 IP";
$messages["block_host"] = "IP차단";
$messages["security"] = "보안";
$messages["security_welcome"] = "보안설정입니다!";
$messages["filtered_content_intro"] = "다음 내용/정규식은 이 블로그에서 사용할 수 없습니다.";
$messages["global_filtered_content_intro"] = "다음 내용/정규식은 모든 블로그에서 사용할 수 없습니다.";
$messages["content"] = "내용";
$messages["reason"] = "이유";
$messages["add_filtered_content"] = "필터를 추가합니다";
$messages["add_filtered_content_intro"] = "코멘트에서 금지할 단어를 넣어주십시오. 일반사용자가 여기 들어간 단어를 사용해서 코멘트를 남길경우 코멘트는 차단됩니다. 정규식을 사용하거나 간단한 문장을 사용할 수도 있습니다. 정규식은 강력하지만 복잡합니다. 정규식을 잘못 사용할 경우 모든 코멘트를 차단할 수도 있습니다.";
$messages["global_add_filtered_content_intro"] = "코멘트에서 금지할 단어를 넣어주십시오. 여기에 추가되는 단어는 사이트 전체에서 금지됩니다. 일반사용자가 여기 들어간 단어를 사용해서 코멘트를 남길경우 코멘트는 차단됩니다. 정규식을 사용하거나 간단한 문장을 사용할 수도 있습니다. 정규식은 강력하지만 복잡합니다. 정규식을 잘못 사용할 경우 모든 코멘트를 차단할 수도 있습니다.";
$messages["content_to_block"] = "필터링할 내용/정규식";
$messages["block_this"] = "차단";
$messages["mask"] = "Mask";
$messages["access_blocked"] = "접속차단";
$messages["posting_blocked"] = "글쓰기차단";
$messages["block_host_intro"] = "이 블로그에서 차단할 IP를 넣어 주십시오. 여기에 관해 잘 모르면 <a href=\"javascript:help_window('admin.php?op=Help&amp;helpId=newBlogBlockedHost');\">도움말</a>을 참고하십시오.";
$messages["global_block_host_intro"] = "사이트 전체에서 차단할 IP를 넣어 주십시오. 여기에 관해 잘 모르면 <a href=\"javascript:help_window('admin.php?op=Help&amp;helpId=newBlogBlockedHost');\">도움말</a>을 참고하십시오.";
$messages["block_type"] = "차단형태";
$messages["error_invalid_ip_address"] = "IP주소가 바르지 않습니다.";
$messages["error_provide_content_to_block"] = "필터에 내용이 없습니다.";
$messages["error_must_create_album_first"] = "리소스를 추가하려면 앨범이 한개이상 있어야만 합니다.";
$messages["error_resource_is_not_an_image"] = "선택된 리소스는 이미지가 아닙니다.";
$messages["error_generating_resource_preview"] = "미리보기를 만들던 중 에러가 발생했습니다.";
$messages["resource_preview_generated_ok"] = "미리보기가 만들어졌습니다.";
$messages["regenerate_preview"] = "미리보기만들기";
$messages["show_album"] = "앨범보기";
$messages["show_album_when_browsing"] = "이앨범을 사용자들에게 보여줍니다";
$messages["assigned_to_blog"] = "사용자를 이 블로그에 추가시킵니다";
$messages["clean_up"] = "비우기";
$messages["purge_info"] = "
비우기를 실행하면 '삭제됨'으로 되어있는 모든 글이 DB에서 지워집니다. 비우기로 지운 글은 복구되지 않습니다. '삭제됨'으로 되어 있는 글들을 영구히 지우려면 아래의 버튼을 눌러주십시오.";
$messages["spam_info"] = "스팸필터의 훈련을 위해 코멘트는 지워지지 않습니다. 훈련후에는 쓸모가 없습니다. 스팸으로 표시되어있는 코멘트를 DB에서 지우려면 아래의 버튼을 눌러주십시오. ";
$messages["no_spam"] = "스팸아님";
$messages["spam"] = "스팸";
$messages["mark_as_spam"] = "스팸으로 표시";
$messages["mark_as_no_spam"] = "스팸아님";
$messages["enable_comments_for_post"] = "이 글에 코멘트 가능하게";
$messages["close_window"] = "창 닫기";
$messages["add_resource"] = "리소스추가";
$messages["add_resource_preview"] = "미리보기추가";
$messages["add_album"] = "앨범추가";
$messages["show_main_page"] = "메인페이지에서 보이게";
$messages["purge_spam_comments"] = "스팸 코멘트 삭제";
$messages["purge_posts"] = "비우기";
$messages["keep_spam_comments"] = "스팸 코멘트 유지";
$messages["throw_away_spam_comments"] = "스팸 코멘트 삭제";
$messages["error_adding_blocked_host"] = "IP 차단 작업을 하던중 에러가 발생했습니다.";
$messages["blocked_host_added_ok"] = "\"%s\"를 차단합니다.";
$messages["error_no_blocked_hosts_selected"] = "삭제할 차단 IP를 선택해 주십시오.";
$messages["blocked_host_deleted_ok"] = "\"%s\"가 삭제되었습니다.";
$messages["error_deleting_blocked_host"] = "차단 IP \"%s\"를 삭제하던 도중 에러가 발생했습니다";
$messages["edit_blocked_host"] = "차단IP수정";
$messages["error_fetching_blocked_host"] = "차단IP정보를 가져오는 도중 에러가 발생했습니다.";
$messages["error_updating_blocked_host"] = "차단IP정보를 수정하는 도중 에러가 발생했습니다.";
$messages["thumbnail_format"] = "썸네일 포맷";
$messages["same_as_image"] = "원본이미지와 같게";
$messages["same"] = $messages["same_as_image"];



$messages["help_locale_folder"] = "로케일 파일이 있는 폴더.";
$messages["help_default_locale"] = "새 블로그를 만들어때 선택되는 기본로케일.";
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
$messages["help_thumbnail_height"] = "썸네일의 최대 세로길이..";
$messages["help_resources_folder"] = "리소스가 저장되는 폴더.
Folder where the resources will be stored. Does not have to be in the web server tree, if you don't feel like letting people browse your resources folder. The resource server will take care of serving
the files wherever they are.";

$messages["help_thumbnails_keep_aspect_ratio"] = "Whether to keep the aspect ratio of thumbnails or not.";
$messages["help_resources_enabled"] = "'리소스 센터'의 사용 가능/불가능 설정합니다.";
$messages["help_thumbnail_method"] = "썸네일을 만들기 위한 백엔드 시스템을 선택합니다. ImageMagick을 선택할 경우 몇가지 추가적인 툴이 필요합니다.";
$messages["help_thumbnail_width"] = "썸네일의 최대 가로길이.";
$messages["external_interfaces"] = "External Interfaces";
$messages["security_settings"] = "보안설정";
$messages["bayesian_filter_settings"] = "Bayesian 필터설정";
$messages["resources_settings"] = "리소스 설정";
$messages["help_thumbnail_format"] = "미리보기 이미지를 만들때 사용할 기본포맷을 설정 합니다. '원래이미지와 같게'를 선택하면 썸네일은 원래의 이미지와 같은 포맷으로 저장됩니다.";
$messages["edit"] = "수정";
$messages["blocked_content_added_ok"] = "필터링할 내용이 추가되었습니다.";
$messages["blocked_content_updated_ok"] = "필터링할 내용이 수정되었습니다";
$messages["help_disable_javascript_calendar"] ="사용자 브라우저가 자바스크립트와 글을 올릴때 사용하는 달력을 사용할 수 없게 되어있습니다.";
$messages["edit_filtered_content"] = "필터수정";
$messages["error_updating_blocked_content"] = "필터링할 내용을 수정하던중 에러가 발생했습니다.";
$messages["audio_codec"] = "오디오 코덱";
$messages["video_codec"] = "비디오 코덱";
$messages["sample_rate"] = "Sample rate";
$messages["files"] = "Files";
$messages["created"] = "Created";
$messages["generated"] = "Generated";
$messages["about"] = "About";
$messages["menu"] = "메뉴";
$messages["albums"] = "앨범";
$messages["template_file"] = "임시파일";
$messages["download"] = "다운로드";
$messages["error_you_have_been_blocked"] = "이 요청을 수행할 권한이 없습니다.";

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
