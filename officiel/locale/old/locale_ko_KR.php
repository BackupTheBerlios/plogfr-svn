<?php
// �̹��� �κ�
// 145
// 487
// 732
// 1015
// 1070
// ���α�ó

// set this to the encoding that should be used to display the pages correctly
$messages["encoding"] = "euc-kr";
$messages["locale_description"] = "�ѱ��� ������(Korean locale file for pLog 0.3)";
// days of the week
$messages["days"] = Array( "�Ͽ���", "������", "ȭ����", "������", "�����", "�ݿ���", "�����" );
// -- compatibility, do not touch -- //
$messages["Monday"] = $messages["days"][1];
$messages["Tuesday"] = $messages["days"][2];
$messages["Wednesday"] = $messages["days"][3];
$messages["Thursday"] = $messages["days"][4];
$messages["Friday"] = $messages["days"][5];
$messages["Saturday"] = $messages["days"][6];
$messages["Sunday"] = $messages["days"][0];

// abbreviations
$messages["daysshort"] = Array( "��", "��", "ȭ", "��", "��", "��", "��" );
// -- compatibility, do not touch -- //
$messages["Mo"] = $messages["daysshort"][1];
$messages["Tu"] = $messages["daysshort"][2];
$messages["We"] = $messages["daysshort"][3];
$messages["Th"] = $messages["daysshort"][4];
$messages["Fr"] = $messages["daysshort"][5];
$messages["Sa"] = $messages["daysshort"][6];
$messages["Su"] = $messages["daysshort"][0];

// months of the year
$messages["months"] = Array( "1��", "2��", "3��", "4��", "5��", "6��", "7��", "8��", "9��", "10��", "11��", "12��" );
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

$messages["message"] = "�޼���";
$messages["error"] = "����";

$messages["date"] = "��¥";

// miscellaneous texts
$messages["of"] = "of";
$messages["recently"] = "�ֱ� ��";
$messages["comments"] = "�ڸ�Ʈ";
$messages["comment on this"] = "�ڸ�Ʈ";
$messages["my_links"] = "�� ��ũ";
$messages["archives"] = "�����";
$messages["search"] = "�˻�";
$messages["calendar"] = "�޷�";
$messages["categories"] = "ī�װ�";
$messages["search_s"] = "�˻�";
$messages["link_tracker"] = "��ũ ����";
$messages["search_this_blog"] = "�� ��α׿��� ã��:";
$messages["about_myself"] = "���Ұ�?";
$messages["permalink_title"] = "Permanent link to the archives";
$messages["permalink"] = "Permalink";
$messages["posted_by"] = "�۾���";
$messages["on_the"] = "on the";
$messages["page"] = "������";
$messages["posted"] = "posted";

$messages["reply"] = "���";


// add comment form
$messages["add_comment"] = "�ڸ�Ʈ �߰�";
$messages["comment_topic"] = "����";
$messages["comment_text"] = "����";
$messages["comment_username"] = "�̸�";
$messages["comment_email"] = "�̸��� �ּ�(��������)";
$messages["comment_url"] = "Ȩ������/��α�(��������)";
$messages["comment_send"] = "�Է�";
$messages["comment_added"] = "�ڸ�Ʈ�� �߰��Ǿ����ϴ�!";
$messages["comment_add_error"] = "�ڸ�Ʈ �߰��� �����߻�";


$messages["article_does_not_exist"] = "���� �������� �ʽ��ϴ�";
$messages["no_posts_found"] = "���� ã�� ���߽��ϴ�";
$messages["user_has_no_posts_yet"] = "����ڰ� ���� �ø����� �����ϴ�";

$messages["info_about_myself"] = "�� ����";
$messages["back"] = "���ư���";

$messages["back_top"] = "Main���� ���ư���";

$messages["link_tracker_results"] = "��ũ ���� ���";
$messages["link_tracker_header"] = "����ڿ� ���� ������ ��ũ�Դϴ�";
$messages["link_tracker_no_links"] = "����ڿ� ���� ������ ��ũ�� �����ϴ�";
$messages["post"] = "��";

$messages["trackbacks_for_article"] = "�� �ۿ� ����� Ʈ����";
"Trackbacks for the article titled";
$messages["trackback_excerpt"] = "Excerpt";
$messages["trackback_weblog"] = "Weblog";

$messages["search_results"] = "�˻����";
$messages["search_matching_results"] = "���� �ܾ�� �˻��� ���: ";
$messages["search_no_matching_posts"] = "�˻� ����� �����ϴ�";

$messages["see_all_link"] = "��� ���� ������ ���⸦ ��������";

$messages["read_more"] = "(������)";

$messages["anonymous_poster"] = "�͸�";

$messages["syndicate"] = "�߰�";

$messages["main"] = "Main";

////// error messages /////
$messages["error_fetching_article"] = "���� ã�� ���߽��ϴ�.";
$messages["error_fetching_articles"] = "���� ������ �� �����ϴ�.";
$messages["error_trackback_no_trackback"] = "�� �ۿ� �޸� Ʈ������ �����ϴ�.";
$messages["error_incorrect_article_id"] = "�� id�� �ùٸ��� �ʽ��ϴ�.";
$messages["error_incorrect_blog_id"] = "��α� id�� �ùٸ��� �ʽ��ϴ�.";
$messages["error_comment_without_text"] = "�ڸ�Ʈ ������ �����ϴ�.";
$messages["error_comment_without_name"] = "�̸��̳� �г����� �־�� �մϴ�.";
$messages["error_adding_comment"] = "�ڸ�Ʈ�� �߰��ϴ� ���� ������ �߻��߽��ϴ�.";
$messages["error_incorrect_parameter"] = "�߸��� �Ķ����.";
$messages["error_parameter_missing"] = "�Ķ���Ͱ� �����մϴ�.";
$messages["error_blog_has_no_links"] = "�� ��α״� ���� ��ũ�� �����ϴ�.";
$messages["error_comments_not_enabled"] = "�� ����Ʈ���� �ڸ�Ʈ�� �� �� �����ϴ�.";

/////////////////                                          //////////////////
///////////////// STRINGS FOR THE ADMINISTRATION INTERFACE //////////////////
/////////////////                                          //////////////////


////// help messages for the administration interface /////
$messages["newPost"] = "<p>�� ���������� ��α׿� �� ���� �ø� �� �ֽ��ϴ�. ������ �Է��ؾ��մϴ�. ���� �� �� �Ŀ� <b>'���'</b>��ư�� ������ ���� �ø��� �˴ϴ�. ���� ���¸� <b>'����'</b>�� �ؾ� ������������ ���̰� �˴ϴ�. ���� �̿ϼ��̶�� <b>'�����'</b>�� �� �� ���߿� �����ؼ� ������ �� �ֽ��ϴ�.
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

$messages["editLinkCategory"] = "��ũī�װ��� ����� �� �̸��� �־� �ֽʽÿ�.</p>";

$messages["blogSelect"] = "�޴��� �ϳ��� ������ �ֽʽÿ�.";

$messages["Error"] = "����� �����ϴ� ���� ������ �߻��߽��ϴ�. �� ���� ������ ������ ������������ ���ʽÿ�.";

$messages["Message"] = "�� ���� ������ ������ ������������ ���ʽÿ�.";

//////// strings for the administration interface ///////



$messages["admin_interface_title"] = "pLog ������ ������";
$messages["administration"] = "����";
$messages["help"] = "����";
$messages["plog_help"] = "pLog ����";
$messages["new_post"] = "�� �۾���";
$messages["posts"] = "������";
$messages["admin_categories"] = "ī�װ�";
$messages["admin_links"] = "��ũ";
$messages["link_categories"] = "��ũ ī�װ�";
$messages["settings"] = "����";
$messages["logout"] = "�α׾ƿ�";

// new post page
$messages["topic"] = "����";
$messages["text"] = "����";
$messages["category"]  = "ī�װ�";
$messages["status"] = "����";
$messages["post_status_draft"] = "�����";
$messages["post_status_published"] = "����";
$messages["post_status_deleted"] = "�����ȱ�";
$messages["post_status_all"] = "����";
$messages["send_notification"] = "�ڸ�Ʈ�� �߰��� ������ �˷��ݴϴ�.";
$messages["send_trackback_pings"] = "�ۿ��� ��ũ�� ã�� ��ũ�� Ʈ���� ���� �����ϴ�.";
$messages["add_post"] = "�� ���� �ø��ϴ�!";

$messages["xmlrpc_ping_ok"] = "XML-RPC ���� ������ ���۵Ǿ����ϴ� ";
$messages["error_sending_xmlrpc_ping"] = "XML-RPC ���� ������ ���� ������ �߻��߽��ϴ� ";
$messages["error_sending_xmlrpc_ping_message"] = "���� �޼���: ";

$messages["preview"] = "�̸�����";
$messages["post_added"] = "���� �߰��Ǿ����ϴ�";
$messages["you_will_be_notified"] = "����� �����ϴ� �� ����� �޸��� �˷��ݴϴ�.";
$messages["post_added_not_published"] = "���� ������� �߰��Ǿ����ϴ�.";
$messages["error_adding_post"] = "�� �߰��߿� �����߻�!";
$messages["error_must_fill_all_fields"] = "��� �׸��� ä���� �մϴ�!";
$messages["error_must_have_one_category"] = "���� �ø����� ī�װ��� �Ѱ��̻� �־�߸� �մϴ�";

// send trackbacks page
$messages["send_trackback_pings"] = "Ʈ���� ���� �����ϴ�";
$messages["links_found"] = "������ ��ũ�� ã�ҽ��ϴ�. Ʈ���� ���� ���� ��ũ�� üũ�� �ֽʽÿ�(�ð��� �� �ɸ� ���� �ֽ��ϴ�)";
$messages["trackbacks_no_urls_selected"] = "���õ� URL�� ��� Ʈ���� ���� ������ �ʾҽ��ϴ�.";
$messages["trackbacks_received_ok"] = "���� ȣ��Ʈ���� Ʈ���� ���� ������ �޾ҽ��ϴ�:";
$messages["trackbacks_no_trackback"] = "������ũ�� �ùٸ� Ʈ���� ��ũ�� �ƴմϴ�: ";
$messages["trackbacks_problems_sending"] = "���� ȣ��Ʈ�鿡 Ʈ���� ���� �������� ������ �߻��߽��ϴ�.
���Ѵٸ� ���߿� �ٽ� ���� �� �ֽ��ϴ�..";
$messages["trackbacks_received_all_hosts"] = "��� ȣ��Ʈ�� Ʈ���� ���� ���½��ϴ�.";
$messages["ping_selected"] = "������ ����Ʈ�� �κ�����";

// edit posts
$messages["author"] = "�۾���";
$messages["category_all"] = "���";
$messages["author_all"] = "���";
$messages["update"] = "����";
$messages["date"] = "��¥";
$messages["stats"] = "����";
$messages["delete"] = "����";

$messages["delete_selected"] = "������ �͵��� ����ϴ�";

// edit post
$messages["edit_post"] = "�� ����";
$messages["error_getting_post_to_update"] = "������ ���� �����ϴ� ���� ������ �߻��߽��ϴ�.";
$messages["error_updating_post_in_database"] = "�����ͺ��̽����� �����߻�.";
$messages["post_successfully_updated"] = "���� ������ �����Ǿ����ϴ�.";
$messages["notification_removed"] = "�� �ۿ� ���� �˸������� �����Ǿ����ϴ�.";

// post statistics
$messages["statistics_for_post"] = "�� �ۿ� ���� ��� ";
$messages["error_fetching_post"] = "�����͸� �������� ���� ������ �߻��߽��ϴ�.";
$messages["times_post_has_been_read"] = "��ȸ��: ";
$messages["referers"] = "����";
$messages["id"] = "Id";
$messages["url"] = "Url";
$messages["hits"] = "Hits";
$messages["trackbacks"] = "Ʈ����";

// post comments
$messages["error_fetching_comments"] = "�ڸ�Ʈ�� �������� ���� ������ �߻��߽��ϴ�";
$messages["comments_for_post"] = "�� �ۿ� �޸� �ڸ�Ʈ ";
$messages["email"] = "E-Mail";
$messages["ip_address"] = "IP �ּ�";

// delete comments
$messages["error_no_comments_selected"] = "���õ� �ڸ�Ʈ�� �����ϴ�.";
$messages["error_deleting_comment"] = "�ڸ�Ʈ�� ����� �� ������ �߻��߽��ϴ� ";
$messages["comment_deleted_ok"] = "�ڸ�Ʈ \"%s\" �� �����߽��ϴ�.";


// categories list
$messages["category_name"] = "�̸�";

// removing posts
$messages["post_cannot_be_deleted"] = "���� ���� �� �����ϴ�";
$messages["no_posts_selected"] = "����� ���� ������ ���� �����ϴ�.";
// %s = subject of the post, %d = identifier of the post. feel free to change its order
// but if you remove them there will be no information about which post was removed...
$messages["error_deleting_post"] = "\"%s\"�� ����� ���� �����߻� (id = %d)";
$messages["post_deleted_ok"] = "\"%2\$s\"�� �������ϴ�. (id = %1\$d)";

// delete categories
$messages["no_categories_selected"] = "����� ���� ������ ī�װ��� �����ϴ�.";
$messages["error_category_has_articles"] = "\"%s\"ī�װ��� �ش��ϴ� ���� �־ ī�װ��� ���� �� �����ϴ�. ī�װ����� ���� ����� �ٽ� �õ��� �ֽʽÿ�.";
$messages["error_deleting_category"] = "\"%s\"ī�װ��� ����� ���� �����ͺ��̽����� ������ �߻��߽��ϴ�.";
$messages["category_deleted_ok"] = "\"%s\"ī�װ��� ������ ���������ϴ�.";

// add category
$messages["add_new_category"] = "�� ī�װ� �߰�";
$messages["add_new_category_info"] = "�� ī�װ��� ������ �̸��� �־� �ּ���.";
$messages["category_added_ok"] = "ī�װ��� ������ �߰��Ǿ����ϴ�.";
$messages["error_adding_article_category"] = "�� ī�װ��� �߰��ϴ��� ������ �߻��߽��ϴ�.";

// edit categories
$messages["edit_category"] = "ī�װ� ����";
$messages["please_provide_valid_category_name"] = "ī�װ��� ������ �̸��� �־� �ּ���.";

// edit category
$messages["error_incorrect_category_id"] = "�߸��� ī�װ� �Դϴ�";

// update the category
$messages["error_fetching_category"] = "ī�װ��� �������� �� ������ �߻��߽��ϴ�.";
$messages["error_updating_category"] = "ī�װ��� �����ϴ� �� ������ �߻��߽��ϴ�.";
$messages["error_empty_category_name"] = "ī�װ� �̸��� �Է��ؾ� �մϴ�.";
$messages["category_updated_ok"] = "ī�װ��� ������ �����Ǿ����ϴ�.";

// edit links
$messages["link_name"] = "�̸�";
$messages["link_url"] = $messages["url"];
$messages["link_category"] = $messages["category"];
$messages["link_description"] = "����";
$messages["links"] = "��ũ";

// edit a link
$messages["error_provide_name_and_url"] = "��ũ�� ����� �̸��� URL�� �ʿ��մϴ�.";
$messages["error_invalid_link_id"] = "��ũ id�� ���ų� �߸��Ǿ��ֽ��ϴ�.";
$messages["error_fetching_link"] = "��ũ�� �������� ���� ������ �߻��߽��ϴ�.";
$messages["error_updating_link"] = "��ũ�� �����ϴ� ���� ������ �߻��߽��ϴ�.";
$messages["link_updated_ok"] = "��ũ�� ������ �����Ǿ����ϴ�!";
$messages["error_fetching_link_categories"] = "��ũ ī�װ��� ���������� ���� ������ �߻��߽��ϴ�.";

// add a link
$messages["add_new_link"] = "�� ��ũ�߰�";
$messages["add_link"] = "��ũ�߰�";
$messages["error_adding_link"] = "��ũ�� �߰��ϴ� ���� ������ �߻��߽��ϴ�.";
$messages["link_added_ok"] = "��ũ�� ������ �߰��Ǿ����ϴ�.";
$messages["error_provide_name_and_url"] = "�̸��� ���ų� �߸��� �ּ��Դϴ�.";
$messages["error_must_have_one_link_category"] = "��ũ�� �߰��Ϸ��� ��ũī�װ��� �ּ��� �Ѱ��� �־�� �մϴ�.";

// delete a link
$messages["error_no_links_selected"] = "����� ���� ������ ��ũ�� �����ϴ�.";
$messages["error_removing_link"] = "\"%s\"�� ����� ���� �����ͺ��̽������߻�";
$messages["link_deleted_ok"] = "��ũ \"%s\"�� �������ϴ�.";

// edit link categories
$messages["add_link_category"] = "�� ��ũ ī�װ� �߰�";
$messages["link_categories_help"] = "��ũ�� �߰��Ϸ��� ��ũī�װ��� �ּ��� �Ѱ��� �־�� �մϴ�.";
$messages["link_category_name"] = "�̸�";
$messages["link_category_links"] = "��ũ";

// new link category
$messages["new_link_category_info"] = "��ũ ī�װ��� ��Ƴ��� ��ũ�� �з��� �� �ְ� �����ݴϴ�. ���� �������������� �� ī�װ��� �̿��ؼ� �׷�ȭ�� ��ũ�� ������ �� �ֽ��ϴ�.";
$messages["add_link_category"] = "�� ��ũī�װ� �߰�";
$messages["error_provide_link_category_name"] = "��ȿ�� ��ũī�װ� �̸��� �־�� �մϴ�.";
$messages["error_adding_link_category"] = "��ũī�װ��� �߰��ϴ� ���� ������ �߻��߽��ϴ�..";
$messages["link_category_added_ok"] = "��ũī�װ��� ������ �߰��Ǿ����ϴ�.";

// edit link category
$messages["edit_link_category"] = "��ũī�װ� ����";
$messages["error_updating_link_category"] = "��ũī�װ��� �����ϴ� ���� ������ �߻��߽��ϴ�.";
$messages["link_category_updated_ok"] = "��ũī�װ��� ������ �����Ǿ����ϴ�.";
$messages["error_fetching_link_category"] = "��ũī�װ��� �������� ���� ������ �߻��߽��ϴ�.";
$messages["error_incorrect_link_category_id"] = "�߸��� ��ũī�װ� �ĺ���";


// delete link categories
$messages["error_no_link_category_selected"] =  "����� ���� ������ ��ũī�װ��� �����ϴ�.";
$messages["error_links_in_link_category"] = "��ũ ī�װ��� ��ũ�� �־ ���� �� �����ϴ�. ��ũ���丮�� ���� �ٽ� �õ��� �ֽʽÿ�.";
$messages["error_removing_link_category"] = "ī�װ� \"%s\"�� ����� ���� �����߻�";
$messages["link_category_deleted_ok"] = "��ũī�װ� \"%s\"�� �������ϴ�.";
// this error is shown when for some reason the category could not be fetched from the database
// and we can't show its name
$messages["error_removing_link_category_2"] = "��ũī�װ��� �����ϴ� ���� ������ �߻��߽��ϴ� id = %d";

// blog settings page
$messages["blog_settings"] = "��α� ����";
$messages["user_profile"] = "����� ����";
$messages["plugin_center"] = "�÷����� ����";
$messages["statistics"] = "���";
$messages["blog_name"] = "��α� �̸�";
$messages["long_blog_name"] = "��α׿� ���� ����";
$messages["language_used"] = "����� ���";
$messages["items_main_page"] = "������������ ������ �� ����";
$messages["items_as_recent"] = "\"�ֱٱ�\"�� ������ �� ����";
$messages["template_used"] = "��α׿� ����� ���ø�(��Ų)";
$messages["cut_posts"] = "���� �ʹ� ��� \"������\"�� ��ũ�Ͻðڽ��ϱ�?";
$messages["cut_posts_after_characters"] = "�� ���� �̻��� �Ǹ� �ڸ��ڽ��ϱ�?";
$messages["enable_wysiwyg_edition"] = "WYSIWYG �����͸� ����Ͻðڽ��ϱ�(���ͳ� �ͽ��÷η� 5.5, ������ 1.3b �̻��� ���������� �����մϴ�)?";
$messages["enable_comments"] = "��� �ۿ� �ڸ�Ʈ�� �� �� �ְ� �Ͻðڽ��ϱ�?";
$messages["yes"] = "��";
$messages["no"] = "�ƴϿ�";
$messages["error_invalid_locale"] = "�߸��� ������ �Դϴ�";
$messages["error_incorrect_max_recent_items"] = "�ֱٱۿ� ������ �� ������ �ٸ��� �ʽ��ϴ�.";
$messages["error_incorrect_number_of_posts"] = "������������ ������ �� ������ �ٸ��� �ʽ��ϴ�.";
$messages["error_incorrect_template"] = "�߸��� ���ø� �Դϴ�.";
$messages["error_no_blog_name"] = "��α� �̸��� �����ϴ�.";
$messages["error_incorrect_show_more_threshold"] = "\"������\"�� ������ ���� �� �� �ٸ��� �ʽ��ϴ�.";
$messages["error_updating_settings"] = "��α� ������ ������Ʈ �ϴ� ���� ������ �����ϴ�.";
$messages["blog_settings_updated_ok"] = "��α� ������ ������ ���� �Ǿ����ϴ�!";
$messages["permanent_blog_url"] = "�� ��α��� ���� URL(�����Ұ���)";

// user profile page
$messages["username"] = "������̸�";
$messages["password"] = "��й�ȣ";
$messages["confirm_password"] = "��й�ȣ Ȯ��";
$messages["email_address"] = "Email �ּ�";
$messages["bio"] = "Bio";
$messages["empty_no_change"] = "�����Ҷ��� �Է��� �ֽʽÿ�";
$messages["user_settings_updated_ok"] = "����� ������ ������ ����Ǿ����ϴ�.";
$messages["error_updating_user_settings"] = "����� ������ �����ϴ� �� ������ �߻��߽��ϴ�.";
$messages["error_passwords_dont_match"] = "��й�ȣ�� ��ġ���� �ʽ��ϴ�.";
$messages["error_incorrect_password"] = "��й�ȣ�� �ùٸ��� �ʽ��ϴ�.";
$messages["error_incorrect_email_address"] = "Email �ּҰ� �ùٸ��� �ʽ��ϴ�.";

// plugin center page
$messages["plugins_available"] = "���ø����� ��밡���� �÷����� ���";
$messages["identifier"] = "�̸�";
$messages["description"] = "����";
$messages["error_plugins_disabled"] = "�� ����Ʈ������ �÷������� ����� �� �����ϴ�.";

// statistics page
$messages["statistics_info"] = "�� id 0���� ���� ���� ����Ʈ ������������ ���� ���Դϴ�.";
$messages["article_id"] = "�� id";
$messages["last_hit_date"] = "������ ��ȸ��";
$messages["error_fetching_referers"] = "�����ּҸ� �������� ���� ������ �߻��߽��ϴ�";


// login screen
$messages["login_page_title"] = "pLog ������ ������";
$messages["login"] = "�α���";
$messages["welcome_message"] = "pLog�� ���Ű��� ȯ���մϴ�";
$messages["error_incorrect_username_or_password"] = "���̵� ��й�ȣ�� �ٸ��� �ʽ��ϴ�.";
$messages["error_dont_belong_to_any_blog"] = "��� ��α׿��� �ҼӵǾ� ���� �ʽ��ϴ�.";
$messages["error_no_username_or_password"] = "�ùٸ� ������̸�/��й�ȣ�� �ƴմϴ�.";
$messages["choose_one_blog"] = "���� ��α׿� �ҼӵǾ� �ֽ��ϴ�. ����Ͻ� ��α׸� ������ �ֽʽÿ�";
$messages["continue"] = "���";
$messages["logout_message"] = "������ �α׾ƿ� �Ǿ����ϴ�.";
$messages["logout_message_2"] = "<a href=\"admin.php\">���⸦ Ŭ��</a>�ϼż� �ٽ� �α��� �Ͻðų� <a href=\"%1\$s\">%2\$s</a>�� ���� �� �ֽ��ϴ�.";
$messages["logout_title"] = "�α׾ƿ�";
$messages["error_access_forbidden"] = "������ �����Ǿ� �ֽ��ϴ�. here�� Ŭ���ؼ� �α��� �� �ֽʽÿ�..";

/////////////////////////////////////////////////////////////////////
//
//
// new strings added for 0.2
//
//
////////////////////////////////////////////////////////////////////
$messages["site_admin"] = "����Ʈ ����";
$messages["site_stats"] = "����Ʈ ���";
$messages["add_user"] = "����� �߰�";
$messages["users"] = "�����";
$messages["add_blog"] = "��α� �߰�";
$messages["blogs"] = "��α�";
$messages["locales"] = "������";
$messages["add_locale"] = "������ �߰�";
$messages["templates"] = "���ø�";
$messages["add_template"] = "���ø� �߰�";
$messages["global_settings"] = "��ü����(Global Settings)";
$messages["site_settings"] = "����Ʈ ����";
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

$messages["add_user_give_information"] = "�� ����ڸ� �߰��ϱ� ���� �Ʒ��� �׸���� ä���ֽʽÿ�.";

$messages["site_registered_users"] = "�� ������ ��ϵ� ��� ����ڵ� �Դϴ�.";

$messages["add_blog_give_information"] = "�� ��α׸� ����� ���� �Ʒ��� �׸���� ä���ֽʽÿ�.";
$messages["blog_title"] = "��α� ����";
$messages["blog_owner"] = "��α� ����";

$messages["site_registered_blogs"] = "�� ����Ʈ�� ��ϵ� ��� ��α� �Դϴ�.";
$messages["edit_users"] = "����� ����";

$messages["upload_locale"] = "������ ���ε�";
$messages["use_this_form_to_upload_locale"] = "���ο� �������� ������ ���ε� �Ϸ��� �� ���� ����Ͻʽÿ�. ���ε� �� ������ ������ �Ʒ��� ���� �̿��Ͻʽÿ�.";
$messages["locale_file"] = "����������";
$messages["manually_add_locale"] = "�������� ������ �߰�";
$messages["use_this_form_if_cant_upload_locale"] = "������ ������ �ø� �� ������ �� ���� ����Ͻʽÿ�. ������ �⺻ ���ø� ������ ī�ǵǾ� �־�� �մϴ�. �׷��� ������ ������ �߻��մϴ�.";
$messages["locale_code"] = "������ �ڵ�";
$messages["locale_encoding"] = "���������ڵ�";

$messages["template_will_be_available_for_all"] = "���ø��� �߰��ϸ� �ڵ����� ��� ��α׿��� ����� �� �ְ� �˴ϴ�.";

$messages["use_this_form_to_upload_template"] = "���ο� ���ø��� ������ ���ε� �Ϸ��� �� ���� ����Ͻʽÿ�. ���ε� �� ������ ������ �Ʒ��� ���� �̿��Ͻʽÿ�.
���ø��� �ݵ�� zip, tar.gz, tar.bz2�� ���·� �÷��� �մϴ�.";
$messages["locale_file"] = "������ ����";
$messages["upload_template"] = "���ε� ���ø�";
$messages["manually_add_template"] = "�������� ���ø� �߰�";
$messages["use_this_form_if_cannot_upload_template"] = "���ε��� ������ ������ �� ���� ����Ͻʽÿ�. ������ �⺻ ���ø� ������ ī�ǵǾ� �־�� �մϴ�. �׷��� ������ ������ �߻��մϴ�.";
$messages["template_id"] = "���ø� �̸�";

$messages["templates_available_for_all"] = "���� �� ���ø��� ����Ʈ���� ��� ��α׿��� ��밡���մϴ�.";
$messages["add_file"] = "���� �߰�";

$messages["setting_name"] = "�̸�";
$messages["setting_value"] = "��";
$messages["setting_description"] = "����";

$messages["plain"] = "��";
$messages["search_engine_friendly"] = "��ġ������ ģ���ϰ�";

$messages["general_settings"] = "�Ϲ� ����";
$messages["helper_tools_settings"] = "���� �� ����";
$messages["uploads_settings"] = "���ε� ����";
$messages["email_settings"] = "Email ����";

$messages["number_blogs"] = "�� ��α� ��";
$messages["number_users"] = "�� ����� ��";
$messages["number_posts"] = "�� �� ��";
$messages["number_posts_today"] = "���� �� �� ��";
$messages["number_posts_this_month"] = "�̹��޿� �� �� ��";

$messages["date"] = "��¥";
$messages["time"] = "�ð�";

$messages["comments_order"] = "�ڸ�Ʈ ���� ����:";
$messages["oldest_first"] = "ó������ ����";
$messages["newest_first"] = "���߱��� ����";

$messages["blog"] = "��α�";
$messages["blog_id"] = "��α� id ��ȣ";

$messages["blog_users"] = "��α� �����";
$messages["available_users"] = "��밡���� �����";
$messages["add"] = "�߰�";
$messages["remove"] = "����";

$messages["user_id"] = "����� id ��ȣ";

$messages["new_password"] = "�� ��й�ȣ";
$messages["has_administrator_privileges"] = "���������� ������ �ֽ��ϴ�";
$messages["related_to_the_following_blogs"] = "���õ� ��α�";

$messages["add_user_to_blog_form"] = " �� ���� ����ؼ� ����ڸ� �߰��� �� �ֽ��ϴ�. �߰��� ����ڴ� ���� �ø��� ������ ���� ������ ������ ������ ���� �����ϴ�.";
$messages["add_user_enter_username"] = " �߰��� ����� �̸��� �Է��� �ֽʽÿ�. ����ڴ� �� ����Ʈ�� ����� �Ǿ��־�� �մϴ�. �׷��� �������� ������ �߻��մϴ�.";
$messages["add_user_send_notification"] = "����ڿ��� �̸��Ϸ� �˷��ݴϴ�.";
$messages["add_user_type_notification"] = "�̸��Ͽ� �� ������ �Է��� �ֽʽÿ�";

$messages["following_users_have_permissions"] = " ���� ����ڵ��� �� ��α׿� �ҼӵǾ� �ֽ��ϴ�. �׵��� ���� �߰��ϰ�, �����ϰ�, ���� �� �ֽ��ϴ�. ������ ������ �ƹ��͵� ������ �� �����ϴ�.";
$messages["revoke_permissions"] = "���� ����";

$messages["add_blog_template"] = "��α� ���ø� �߰�";
$messages["manually_add_blog_template"] = "�������� ��α� ���ø� �߰�";
$messages["template_available_only_for_this_blog"] = "�� ���ø��� �� ��α׿����� ��밡�� �մϴ�.";
$messages["use_form_to_upload_blog_template"] = "���ο� ���ø��� ������ ���ε� �Ϸ��� �� ���� ����Ͻʽÿ�. ���ε� �� ������ ������ �Ʒ��� ���� �̿��Ͻʽÿ�. ���ø��� �ݵ�� zip, tar.gz, tar.bz2�� ���·� �÷��� �մϴ�.";
$messages["use_form_if_cannot_upload_blog_template"] = "������ ������ �ø� �� ������ �� ���� ����Ͻʽÿ�. ������ �⺻ ���ø� ������ ī�ǵǾ� �־�� �մϴ�. �׷��� ������ ������ �߻��մϴ�.";

$messages["blog_templates"] = "��α� ���ø�";
$messages["templates_only_available_for_this_blog"] = "���� ���ø����� �� ��α׿����� ����� �� �ֽ��ϴ�.";

$messages["add_file_to_blog_template"] = "��α� ���ø� �߰�"; 
$messages["upload_file_to_blog_template"] = "�߰��� ���ø� ������ �÷��ֽʽÿ�.";

$messages["error_user_id_incorrect"] = "����� ���̵� �ùٸ��� �ʽ��ϴ�.";
$messages["error_incorrect_user_id"] = $messages["error_user_id_incorrect"];
$messages["error_fetching_user_information"] = "����� ������ �������� ���� ������ �߻��߽��ϴ�.";
$messages["error_password_incorrect"] = "��й�ȣ�� �ʹ� ª�ų� �ٸ��� �ʽ��ϴ�.";
$messages["error_updating_user_settings"] = "���� ����ڴ� ������ ������ �� �����ϴ�.";
$messages["user_settings_updated_ok"] = "����� \"%s\"�� ���� ������ ����Ǿ����ϴ�.";
$messages["error_no_users_selected_to_add"] = "������ ����ڰ� �����ϴ�.";
$messages["user_added_to_blog_ok"] = "����� \"%s\"�� ��α׿� �߰��Ǿ����ϴ�.";
$messages["error_adding_user_to_blog"] = "����� \"%s\"�� ��α׿� �߰��ϴ� ���� ������ �߻��߽��ϴ�.";
$messages["error_no_users_selected_to_remove"] = "�����ϱ� ���� ������ ����ڰ� �����ϴ�.";
$messages["user_removed_from_blog_ok"] = "����� \"%s\"�� �� ��α׿��� �����Ǿ����ϴ�.";
$messages["error_removing_user_from_blog"] = "����� \"%s\"�� ��α׿��� �����ϴ� ���� ������ �߻��߽��ϴ�.";

$messages["error_incorrect_plugin_id"] = "�÷����� id�� �ùٸ��� �ʽ��ϴ�.";
$messages["error_configuring_plugin"] = "�÷����� ������ ������ �߻��߽��ϴ�: ";
$messages["site_config_saved_ok"] = "����Ʈ ������ ������ ����Ǿ����ϴ�.";
$messages["error_saving_site_config"] = "������ �����ϴµ� ������ �ֽ��ϴ�.";

$messages["error_incorrect_blog_owner"] = "���õ� ������ �������� �ʽ��ϴ�.";
$messages["error_updating_blog_settings"] = "��α� \"%s\" ������ �����ϴ��� ������ �߻��߽��ϴ�.";
$messages["blog_settings_updated_ok"] = "��α� \"%s\"�� ������ ������ ����Ǿ����ϴ�.";

$messages["error_fetching_users"] = "����� ������ ���������� ������ �߻��߽��ϴ�.";

$messages["error_fetching_blogs"] = "��α� ������ ���������� ������ �߻��߽��ϴ�.";

$messages["error_incorrect_template_id"] = "���ø� id�� �ùٸ��� �ʰų� �������� �ʽ��ϴ�.";

$messages["error_no_users_selected"] = "�����ϱ� ���� ���õ� ����ڰ� �����ϴ�.";
$messages["error_could_not_find_user"] = "����� \"%s\"�� ã�� �� �����ϴ�.";
$messages["error_deleting_user"] = "����� \"%s\"�� �����ϴ��� ������ �߻��߽��ϴ�";
$messages["user_deleted_ok"] = "����� \"%s\"�� ������ �����Ǿ����ϴ�.";

$messages["error_must_give_blog_name"] = "��α׿� ������ �̸��� �־� �ּ���.";
$messages["error_adding_blog"] = "��α׸� �߰��ϴ��� �����ͺ��̽����� ������ �߻��߽��ϴ�.";
$messages["blog_added_ok"] = "�� ��α� \"%s\"�� ������ �߰��Ǿ����ϴ�.";

$messages["error_template_not_inside_folder"] = "���ø� ������ ������ ����־�߸� �մϴ�.";
$messages["error_missing_base_files"] = "�⺻������ �����ϴ�.";
$messages["error_unpacking"] = "������ Ǯ���� ������ �߻��߽��ϴ�.";
$messages["error_forbidden_extensions"] = "��� ������ Ȯ���ڰ� ������ Ȯ�����Դϴ�.";
$messages["error_creating_working_folder"] = "���ø����� ������ �߻��߽��ϴ�";
$messages["error_checking_template"] = "���ø����� ������ �߻��߽��ϴ� (code = %s)";
$messages["error_add_template_disabled"] = "�Ϲ� ����ڴ� ���ø��� �߰��� �� �����ϴ�.";
$messages["error_must_upload_file"] = "������ �����ϴ�.";
$messages["error_no_template_name"] = "���ø� �̸��� �����ϴ�.";
$messages["error_uploads_disabled"] = "�� ����Ʈ�� ���ε尡 �Ұ��� �մϴ�.";
$messages["error_installing_template"] = "���ø��� ��ġ�ϴ� ���� ������ �߻��߽��ϴ�.";
$messages["template_installed_ok"] = "���ø� \"%s\"��(��) ������ ��ġ�Ǿ����ϴ�.";

$messages["error_adding_template_file"] = "���ø� ������ �߰��ϴ� ���߿����� �߻��߽��ϴ�.";
$messages["error_file_forbidden"] = "�� ������ ������ �����Ǿ� �ֽ��ϴ�.";
$messages["error_file_too_big"] = "������ �ʹ� Ů�ϴ�. ������ �ִ� �뷮�� \"%s\" bytes �Դϴ�.";
$messages["template_file_added_ok"] = "���ø� \"%s\"��(��) ������ ��ġ�Ǿ����ϴ�.";

$messages["error_plugin_cannot_be_configured"] = "�÷����� ������ �� �� �����ϴ�.";

$messages["error_incorrect_username"] = "����ڰ� ����Ȯ�մϴ�.";
$messages["error_username_already_exists"] = "���� �̸����� ����� ����ڰ� �̹� �ֽ��ϴ�.";
$messages["error_adding_user"] = "�� ����ڸ� ����ϴ� ���� ������ �߻��߽��ϴ�.";
$messages["user_added_ok"] = "�� ����� \"%s\"�� ������ �߰��߽��ϴ�.";

$messages["error_no_blogs_selected"] = "���� ��α׸� �����ؾ� �մϴ�.";
$messages["error_blog_is_default_blog"] = "\"%s\"�� �⺻��α׷� �����Ǿ� �־, ���� �� �����ϴ�.";
$messages["blog_deleted_ok"] = "��α� \"%s\"�� ������ �������ϴ�.";
$messages["error_deleting_blog"] = "��α� \"%s\"�� ����� ���� ������ �߻��߽��ϴ�.";

$messages["error_no_templates_selected"] = "������ ���ø��� ������ �ֽʽÿ�.";
$messages["error_removing_template"] = "���ø� \"%s\"�� �����ϴ� ���� ������ �߻��߽��ϴ�.";
$messages["template_removed_ok"] = "���ø� \"%s\"�� ������ �����߽��ϴ�..";

$messages["error_no_users_selected_to_remove_from_blog"] = "�� ��α׿��� ������ ����ڸ� ������ �ֽʽÿ�..";
$messages["error_removing_user_from_blog"] = "�� ��α׿��� ����� \"%s\"�� �����ϴ� ���� ������ �߻��߽��ϴ�.";
$messages["user_removed_from_blog_ok"] = "�� ��α׿��� ����� \"%s\"�� ������ �����߽��ϴ�.";

$messages["error_incorrect_locale_code"] = "�����Ǵ� �������� �ٸ��� �ʽ��ϴ�.";
$messages["error_invalid_locale_file"] = "�ùٸ� ������ ������ �ƴմϴ�.";
$messages["error_adding_locale_file"] = "�� ������ ������ �߰��ϴ� ���� ������ �߻��߽��ϴ�. ������ ���丮�� �۹̼��� Ȯ���� �ֽʽÿ�.";
$messages["locale_added_ok"] = "�� ������ \"%s\"�� ������ �߰��߽��ϴ�.";
$messages["error_saving_locale"] = "�� �������� �����ϴ� ���� ������ �߻��߽��ϴ�. ������������ �۹̼��� Ȯ���� �ֽʽÿ�.";

$messages["error_no_locales_selected"] = "������ �������� ������ �ֽʽÿ�.";
$messages["error_deleting_only_locale"] = "�������� �ּ� 1�� �̻� �־�� �մϴ�.";
$messages["locale_deleted_ok"] = "������ \"%s\"�� ������ �����߽��ϴ�.";
$messages["error_deleting_locale"] = "������ \"%s\"�� �����ϴ� ���� ������ �߻��߽��ϴ�.";
$messages["error_cant_delete_default_locale"] = "������ \"%s\"�� �⺻ �������̱� ������ ���� �� �����ϴ�. �����Ϸ��� �⺻ �������� �����Ͻʽÿ�.";

$messages["plugin_config"] = "�÷����� ����";

$messages["use_read_more_feature"] = "���� ���������� ���� ������ ��� �����ֽðڽ��ϱ�?('�ƴϿ�'�� ���� '����'�κп� �ִ� �۸� �������������� ���Դϴ�).";

$messages["extended_text"] = "���⿡ ���� ���� �� �б� ������ ���Դϴ�. '����'���� ������ �� �ֽ��ϴ�.";

$messages["error_must_give_post_intro"] = "�� ������ �Է��� �ֽʽÿ�.";
$messages["error_no_albums_defined"] = "�� ��α׿��� ��� ������ �ٹ��� �����ϴ�.";
$messages["error_fetching_album"] = "�ٹ��� �������� ���� ������ �߻��߽��ϴ�";
$messages["comment_marked_as_spam_ok"] = "�ڸ�Ʈ�� �������� �����߽��ϴ�.";
$messages["comment_marked_as_nonspam_ok"] = "�ڸ�Ʈ�� ���Կ��� �����߽��ϴ�.";
$messages["error_marking_comment_as_nonspam"] = "�ڸ�Ʈ�� ���Կ��� �����ϴ� ���� ������ �߻��߽��ϴ�.";
$messages["error_marking_comment_as_spam"] = "�ڸ�Ʈ�� �������� �����ϴ� ���� ������ �߻��߽��ϴ�.";
$messages["error_incorrect_comment_id"] = "�ڸ�Ʈ id�� �ùٸ����ʽ��ϴ�.";
$messages["error_base_storage_folder_missing_or_unreadable"] = "pLog�� �ʿ��� ������ ���� �� �����ϴ�. PHP�� �������(safe mode)�� �۵��ϰ� �ְų� ������ ������ �����ϴ�. ������ �������� ���� ������ ���� �ֽ��ϴ� : <br/><br/>%s<br/><br/> ���� �� ������ �̹� �ִٸ� ������ ���������� �а� ���� �ְ� ����� �ֽʽÿ�.";


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
$messages["show_category_in_main_page"] = "�� ī�װ��� ����ȭ�鿡�� ǥ��";
$messages["welcome_resource_center"] = "���ҽ� �����Դϴ�!";
$messages["resource_center"] = "���ҽ� ����";
$messages["resource_albums"] = "���ҽ� �ٹ�";
$messages["resources"] = "���ҽ�";
$messages["add_resource"] = "���ҽ� �߰�";
$messages["add_album"] = "�ٹ��߰�";
$messages["album"] = "�ٹ�";
$messages["album_name"] = "�ٹ��̸�";
$messages["parent_album"] = "�����ٹ�";
$messages["no_parent_album"] = "�����ٹ�����";
$messages["resource_info"] = "���ҽ� ����";
$messages["size"] = "ũ��";
$messages["format"] = "����";
$messages["dimensions"] = "Dimensions";
$messages["bits_per_sample"] = "�ȼ��� ��Ʈ��";
$messages["bytes"] = "bytes";
$messages["pixels"] = "pixels";
$messages["time_offset"] = "�����ð��� ��� ��ǻ���� �ð���:";
$messages["hours"] = "�ð�";
$messages["album_added_ok"] = "�� �ٹ��� ������ �߰��߽��ϴ�.";
$messages["name"] = "�̸�";
$messages["children"] = "�����ٹ�";
$messages["see"] = "����";
$messages["view"] = "����";
$messages["resource_info"] = "���ҽ� ����";
$messages["number_of_channels"] = "ä�� ��";
$messages["length"] = "����";
$messages["number_of_files"] = "���� ��";
$messages["compressed_size"] = "����� ũ��";
$messages["uncompressed_size"] = "�������� ũ��";
$messages["resource_file"] = "�߰��� ����";
$messages["add_to_album"] = "������ �ٹ��� �߰��մϴ�";
$messages["edit_resource_album"] = "���ҽ� �ٹ� ����";
$messages["error_loading_resource_album"] = "���ҽ� �ٹ��� �������� ���� ������ �߻��߽��ϴ�.";
$messages["error_album_id_parameter_missing"] = "�ٹ� id�� �ٸ��� �ʽ��ϴ�.";
$messages["error_album_parent_id_parameter_missing"] = "���� �ٹ� id�� �ٸ��� �ʽ��ϴ�.";
$messages["error_updating_resource_album"] = "���ҽ� �ٹ��� �����ϴ� ���� ������ �߻��߽��ϴ�.";
$messages["resource_album_updated_ok"] = "������ �ٹ� \"%s\" �� �����Ǿ����ϴ�.";
$messages["error_must_give_album_name"] = "�ٹ��� �̸��� �����ϴ�.";
$messages["error_adding_album"] = "�ٹ��� �߰��ϴ� ���� ������ �߻��߽��ϴ�.";
$messages["album_added_ok"] = "�ٹ� \"%s\"�� �߰��Ǿ����ϴ�.";
$messages["resource_added_ok"] = "�� ���ҽ��� �߰��Ǿ����ϴ�.";
$messages["error_resource_forbidden_extension"] = "������ Ȯ������ ���ҽ��� ���ε� �� �� �����ϴ�.";
$messages["error_resource_too_big"] = "ũ�Ⱑ �ʹ� Ŀ�� ���ε� �� �� �����ϴ�.";
$messages["error_uploads_disabled"] = "�� ����Ʈ������ ���ε尡 �Ұ����մϴ�.";
$messages["error_adding_resource"] = "���ҽ��� �߰��ϴ��� ������ �߻��߽��ϴ�.";
$messages["error_loading_resource"] = "���ҽ��� ���������� ������ �߻��߽��ϴ�";
$messages["error_updating_resource"] = "���ҽ��� �����ϴ��� ������ �߻��߽��ϴ�.";
$messages["resource_updated_ok"] = "���ҽ� \"%s\"�� �����Ǿ����ϴ�.";
$messages["error_no_resources_selected"] = "������ ���ҽ��� ������ �ֽʽÿ�.";
$messages["resource_deleted_ok"] = "���ҽ� \"%s\"�� �����Ǿ����ϴ�.";
$messages["error_deleting_resource"] = "���ҽ� \"%s\"�� �����ϴ��� ������ �߻��߽��ϴ�.";
$messages["error_no_resource_uploaded"] = "���ε��� ������ �����ϴ�.";
$messages["filtered_content"] = "�������͸�";
$messages["global_filtered_content"] = "��ü���� ����";
$messages["block_content"] = "�����߰�";
$messages["blocked_hosts"] = "���ܵ� IP";
$messages["global_blocked_hosts"] = "����Ʈ ��ü���� ���ܵ� IP";
$messages["block_host"] = "IP����";
$messages["security"] = "����";
$messages["security_welcome"] = "���ȼ����Դϴ�!";
$messages["filtered_content_intro"] = "���� ����/���Խ��� �� ��α׿��� ����� �� �����ϴ�.";
$messages["global_filtered_content_intro"] = "���� ����/���Խ��� ��� ��α׿��� ����� �� �����ϴ�.";
$messages["content"] = "����";
$messages["reason"] = "����";
$messages["add_filtered_content"] = "���͸� �߰��մϴ�";
$messages["add_filtered_content_intro"] = "�ڸ�Ʈ���� ������ �ܾ �־��ֽʽÿ�. �Ϲݻ���ڰ� ���� �� �ܾ ����ؼ� �ڸ�Ʈ�� ������ �ڸ�Ʈ�� ���ܵ˴ϴ�. ���Խ��� ����ϰų� ������ ������ ����� ���� �ֽ��ϴ�. ���Խ��� ���������� �����մϴ�. ���Խ��� �߸� ����� ��� ��� �ڸ�Ʈ�� ������ ���� �ֽ��ϴ�.";
$messages["global_add_filtered_content_intro"] = "�ڸ�Ʈ���� ������ �ܾ �־��ֽʽÿ�. ���⿡ �߰��Ǵ� �ܾ�� ����Ʈ ��ü���� �����˴ϴ�. �Ϲݻ���ڰ� ���� �� �ܾ ����ؼ� �ڸ�Ʈ�� ������ �ڸ�Ʈ�� ���ܵ˴ϴ�. ���Խ��� ����ϰų� ������ ������ ����� ���� �ֽ��ϴ�. ���Խ��� ���������� �����մϴ�. ���Խ��� �߸� ����� ��� ��� �ڸ�Ʈ�� ������ ���� �ֽ��ϴ�.";
$messages["content_to_block"] = "���͸��� ����/���Խ�";
$messages["block_this"] = "����";
$messages["mask"] = "Mask";
$messages["access_blocked"] = "��������";
$messages["posting_blocked"] = "�۾�������";
$messages["block_host_intro"] = "�� ��α׿��� ������ IP�� �־� �ֽʽÿ�. ���⿡ ���� �� �𸣸� <a href=\"javascript:help_window('admin.php?op=Help&amp;helpId=newBlogBlockedHost');\">����</a>�� �����Ͻʽÿ�.";
$messages["global_block_host_intro"] = "����Ʈ ��ü���� ������ IP�� �־� �ֽʽÿ�. ���⿡ ���� �� �𸣸� <a href=\"javascript:help_window('admin.php?op=Help&amp;helpId=newBlogBlockedHost');\">����</a>�� �����Ͻʽÿ�.";
$messages["block_type"] = "��������";
$messages["error_invalid_ip_address"] = "IP�ּҰ� �ٸ��� �ʽ��ϴ�.";
$messages["error_provide_content_to_block"] = "���Ϳ� ������ �����ϴ�.";
$messages["error_must_create_album_first"] = "���ҽ��� �߰��Ϸ��� �ٹ��� �Ѱ��̻� �־�߸� �մϴ�.";
$messages["error_resource_is_not_an_image"] = "���õ� ���ҽ��� �̹����� �ƴմϴ�.";
$messages["error_generating_resource_preview"] = "�̸����⸦ ����� �� ������ �߻��߽��ϴ�.";
$messages["resource_preview_generated_ok"] = "�̸����Ⱑ ����������ϴ�.";
$messages["regenerate_preview"] = "�̸����⸸���";
$messages["show_album"] = "�ٹ�����";
$messages["show_album_when_browsing"] = "�̾ٹ��� ����ڵ鿡�� �����ݴϴ�";
$messages["assigned_to_blog"] = "����ڸ� �� ��α׿� �߰���ŵ�ϴ�";
$messages["clean_up"] = "����";
$messages["purge_info"] = "
���⸦ �����ϸ� '������'���� �Ǿ��ִ� ��� ���� DB���� �������ϴ�. ����� ���� ���� �������� �ʽ��ϴ�. '������'���� �Ǿ� �ִ� �۵��� ������ ������� �Ʒ��� ��ư�� �����ֽʽÿ�.";
$messages["spam_info"] = "���������� �Ʒ��� ���� �ڸ�Ʈ�� �������� �ʽ��ϴ�. �Ʒ��Ŀ��� ���� �����ϴ�. �������� ǥ�õǾ��ִ� �ڸ�Ʈ�� DB���� ������� �Ʒ��� ��ư�� �����ֽʽÿ�. ";
$messages["no_spam"] = "���Ծƴ�";
$messages["spam"] = "����";
$messages["mark_as_spam"] = "�������� ǥ��";
$messages["mark_as_no_spam"] = "���Ծƴ�";
$messages["enable_comments_for_post"] = "�� �ۿ� �ڸ�Ʈ �����ϰ�";
$messages["close_window"] = "â �ݱ�";
$messages["add_resource"] = "���ҽ��߰�";
$messages["add_resource_preview"] = "�̸������߰�";
$messages["add_album"] = "�ٹ��߰�";
$messages["show_main_page"] = "�������������� ���̰�";
$messages["purge_spam_comments"] = "���� �ڸ�Ʈ ����";
$messages["purge_posts"] = "����";
$messages["keep_spam_comments"] = "���� �ڸ�Ʈ ����";
$messages["throw_away_spam_comments"] = "���� �ڸ�Ʈ ����";
$messages["error_adding_blocked_host"] = "IP ���� �۾��� �ϴ��� ������ �߻��߽��ϴ�.";
$messages["blocked_host_added_ok"] = "\"%s\"�� �����մϴ�.";
$messages["error_no_blocked_hosts_selected"] = "������ ���� IP�� ������ �ֽʽÿ�.";
$messages["blocked_host_deleted_ok"] = "\"%s\"�� �����Ǿ����ϴ�.";
$messages["error_deleting_blocked_host"] = "���� IP \"%s\"�� �����ϴ� ���� ������ �߻��߽��ϴ�";
$messages["edit_blocked_host"] = "����IP����";
$messages["error_fetching_blocked_host"] = "����IP������ �������� ���� ������ �߻��߽��ϴ�.";
$messages["error_updating_blocked_host"] = "����IP������ �����ϴ� ���� ������ �߻��߽��ϴ�.";
$messages["thumbnail_format"] = "����� ����";
$messages["same_as_image"] = "�����̹����� ����";
$messages["same"] = $messages["same_as_image"];



$messages["help_locale_folder"] = "������ ������ �ִ� ����.";
$messages["help_default_locale"] = "�� ��α׸� ���� ���õǴ� �⺻������.";
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
$messages["help_thumbnail_height"] = "������� �ִ� ���α���..";
$messages["help_resources_folder"] = "���ҽ��� ����Ǵ� ����.
Folder where the resources will be stored. Does not have to be in the web server tree, if you don't feel like letting people browse your resources folder. The resource server will take care of serving
the files wherever they are.";

$messages["help_thumbnails_keep_aspect_ratio"] = "Whether to keep the aspect ratio of thumbnails or not.";
$messages["help_resources_enabled"] = "'���ҽ� ����'�� ��� ����/�Ұ��� �����մϴ�.";
$messages["help_thumbnail_method"] = "������� ����� ���� �鿣�� �ý����� �����մϴ�. ImageMagick�� ������ ��� ��� �߰����� ���� �ʿ��մϴ�.";
$messages["help_thumbnail_width"] = "������� �ִ� ���α���.";
$messages["external_interfaces"] = "External Interfaces";
$messages["security_settings"] = "���ȼ���";
$messages["bayesian_filter_settings"] = "Bayesian ���ͼ���";
$messages["resources_settings"] = "���ҽ� ����";
$messages["help_thumbnail_format"] = "�̸����� �̹����� ���鶧 ����� �⺻������ ���� �մϴ�. '�����̹����� ����'�� �����ϸ� ������� ������ �̹����� ���� �������� ����˴ϴ�.";
$messages["edit"] = "����";
$messages["blocked_content_added_ok"] = "���͸��� ������ �߰��Ǿ����ϴ�.";
$messages["blocked_content_updated_ok"] = "���͸��� ������ �����Ǿ����ϴ�";
$messages["help_disable_javascript_calendar"] ="����� �������� �ڹٽ�ũ��Ʈ�� ���� �ø��� ����ϴ� �޷��� ����� �� ���� �Ǿ��ֽ��ϴ�.";
$messages["edit_filtered_content"] = "���ͼ���";
$messages["error_updating_blocked_content"] = "���͸��� ������ �����ϴ��� ������ �߻��߽��ϴ�.";
$messages["audio_codec"] = "����� �ڵ�";
$messages["video_codec"] = "���� �ڵ�";
$messages["sample_rate"] = "Sample rate";
$messages["files"] = "Files";
$messages["created"] = "Created";
$messages["generated"] = "Generated";
$messages["about"] = "About";
$messages["menu"] = "�޴�";
$messages["albums"] = "�ٹ�";
$messages["template_file"] = "�ӽ�����";
$messages["download"] = "�ٿ�ε�";
$messages["error_you_have_been_blocked"] = "�� ��û�� ������ ������ �����ϴ�.";

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
