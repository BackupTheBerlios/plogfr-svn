<?php
// Traditional Chinese pLog Locale File based upon utf-8 charset
// 作者 :: Author: Warren Liu (warren@ishag.org)
// 版本 :: Version: 0.5.1
// pLog版本 :: pLog Version: plog-devel-20030805
// feel free to send me changes to the text here.
// 如有文字改进建议请联络作者
// All text is a direct word for word translation from zh_TW. If you know the correct technical term used in China, please contact the author.
//

// set this to the encoding that should be used to display the pages correctly
$messages["encoding"] = "utf-8";
$messages["locale_description"] = "简体中文";
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
$messages["months"] = Array( "一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月" );
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

$messages["message"] = "系统信息";
$messages["error"] = "错误信息";

$messages["date"] = "日期";

// miscellaneous texts
$messages["of"] = "之"; // Changed this to another word that would make slightly more sense in default template, but still makes little sense cuz the language doesn't use it in this form
$messages["recently"] = "最新文章...";
$messages["comments"] = "评论";
$messages["comment on this"] = "发表评论"; // made it a little clearer to diff from line 59
$messages["my_links"] = "我的链接";
$messages["archives"] = "文章归档";
$messages["search"] = "搜索";
$messages["calendar"] = "日历";
$messages["editLinkCategories"] = "分类";
$messages["search_s"] = "搜索";
$messages["link_tracker"] = "引用链接";
$messages["search_this_blog"] = "站内搜索:";
$messages["about_myself"] = "自我介绍";
$messages["permalink_title"] = "归档文章的静态链接网址";
$messages["permalink"] = "静态链接网址";
$messages["posted_by"] = "作者";
$messages["on_the"] = "在";
$messages["page"] = "页";
$messages["posted"] = "已经发表";
$messages["reply"] = "回应";
$messages["of"] = "of";


// add comment form
$messages["add_comment"] = "发表评论";
$messages["comment_topic"] = "标题";
$messages["comment_text"] = "正文";
$messages["comment_username"] = "您的姓名";
$messages["comment_email"] = "您的电子邮件信箱";
$messages["comment_url"] = "您的个人网页";
$messages["comment_send"] = "发表";
$messages["comment_added"] = "您的评论已经发表！";
$messages["comment_add_error"] = "发表评论时出错";

$messages["article_does_not_exist"] = "该文章不存在";
$messages["no_posts_found"] = "找不到文章";
$messages["user_has_no_posts_yet"] = "该作者尚未发表任何文章";

$messages["info_about_myself"] = "有关我的一些介绍…";
$messages["back"] = "返回上一页";

$messages["back_top"] = "回到页面最上方"; // very shakey translation here


$messages["post"] = "发表";

$messages["trackbacks_for_article"] = "引用本文的文章标题：";
$messages["trackback_excerpt"] = "摘要";
$messages["trackback_weblog"] = "网志";

$messages["search_results"] = "搜索结果";
$messages["search_matching_results"] = "以下文章符合搜索需求: ";
$messages["search_no_matching_posts"] = "无文章符合搜索需求";

$messages["see_all_link"] = "所有文章档案库";

$messages["read_more"] = "(深入阅读)";

$messages["anonymous_poster"] = "匿名";

$messages["syndicate"] = "文章联合发表"; // translated it as posts and web cooperative publishing. Seems like the actual chinese word used is a sound for sound translation that means jack in terms of the language itself

$messages["main"] = "主页"; // assuming this is for the main page

////// error messages /////

$messages["error_fetching_article"] = "找不到您所指定的文章。";
$messages["error_fetching_articles"] = "找不到您所指定的文章。";
$messages["error_trackback_no_trackback"] = "尚未有人向本文发送引用通告";
$messages["error_incorrect_article_id"] = "文章标识号错误。";
$messages["error_incorrect_blog_id"] = "网站标识号错误。";
$messages["error_comment_without_text"] = "您必须填写评论正文。";
$messages["error_comment_without_name"] = "您必须填写姓名。";
$messages["error_adding_comment"] = "添加评论时出错。";
$messages["error_incorrect_parameter"] = "参数不正确。";
$messages["error_parameter_missing"] = "参数不全。";
$messages["error_comments_not_enabled"] = "该博客网站关闭了评论功能。";

/////////////////                                          //////////////////
///////////////// STRINGS FOR THE ADMINISTRATION INTERFACE //////////////////
/////////////////                                          //////////////////


////// help messages for the administration interface /////
$messages["help_newPost"] = "
<p>请使用此页添加新的文章，您必须输入文章标题，文章內容必须有文字. 完成后请按<b>'添加'</b>, 新文章就会发表. 请注意: 如要要在主页显示新文章, 您必须把新文章的状态设定为 <b>'定稿'</b>. 如果您不想在首页显示新文章,请把状态设定为 <b>'草稿'</b></p><p>如果您选择了「<b>发送引用通告</b>」，您可以对您文中所提到的博客发送通告，不过前提是对方主机也提供支持。系统会扫描您的文章中有提到哪些链接，然后您可以继续选择想要发送的链接，然后送出。</p>";

$messages["addPost"] = "<p>您的文章已经成功新增到数据库中。您现在可以选择要发送引用通告（TrackBack）的主机，发送通告。这样，对方就会知道有人写了一篇与他们相关的文章，而前来察看。</p>";

$messages["help_editPosts"] = "<p>点击文章的标题来编辑文章. 你也可以点击分类来查看属于分类的所有文章. 你也可以选择下拉框，根据作者，状态，分类来对文章进行过滤，支持条件组合查询。 点击回复数可以查看本文章的所有回复 (文章至少有1条回复的情况下). </p>
<p>选中 <b>'删除'</b>选择框，然后点击<b>'删除所有'</b> 按钮可以删除一篇或多篇文章</p>. <p> <b>'状态'</b>链接可以显示文章的许多统计信息，比如点击数，引用数 .</p>";

$messages["editComments"] = "文章的所有回复都会被显示，回复不能编辑但是可以删除。发表回复时姓名栏是必须填写的，电子邮件和主页栏可以为空。ip地址字段记录的是你从那儿发表的回复。你可以通过选择<b>'删除'</b>选择框，然后点击<b>'删除所有'</b>按钮删除回复。";

$messages["postStats"] = "<p>选择相应的文章会显示其统计信息. 第一项是文章阅读数, 但是注意如果你在<b>'Blog设置'</b> 选项里禁止了<b>'阅读更多...'</b>特性的话，统计信息就会变的没有意义.</p>
<p> 逆向链接是所有访问这篇文章的主机的url, 引用表表示这篇文章已经收到多少引用通告.它们不能被删除或者修改.</p>";

$messages["help_editArticleCategories"] = "<p>这是所有已经创建的文章分类的列表，你添加文章时必须至少已经创建了一个文章分类，因为每篇文章都归属于一个分类。  <b>'文章'</b> 栏显示指定文章分类下的所有文章. 同样的，如果已经有一篇文章属于这个文章分类，这个文章分类也不能被删除。你必须先删除属于此分类的所有文章后才能删除文章分类 。</p>
<p>通过选择 <b>'删除'</b>列，然后点击 <b>'删除所有'</b> 按钮你可以删除多个文章分类.</p>";

$messages["help_newArticleCategory"] = "<p>在这里你可以为你的blog添加新的文章分类. 你需要设置的仅仅是文章分类的名称.一旦创建，就可以将文章放入到此分类中.</p>";

$messages["help_editLinks"] = "<p>这里是所有已经添加的链接的一个列表, 每个链接根据不同的分类来排列，然后显示在首页让访客能够看到.</p><p>对于每个链接, 你会看到它的名称，它指向的链接，它的分类。你也可以删除任何链接.</p>";

$messages["help_newLink"] = "<p>你可以增加新的链接. 你需要提供至少一个有效的url和链接名称. 链接描述是可选择的，但是对于了解更多链接的信息非常有用.在你添加链接前至少已经建立了一个链接分类.</p>";

$messages["help_editLinkCategories"] = "<p>这里是所有链接分类的一个列表.就像文章一样，在添加一个链接前你至少已经建立了一个链接分类 .点击 <b>'链接'</b> 列会显示属于此链接分类的所有链接.</p>";

$messages["help_newLinkCategory"] = "<p>添加链接分类时，你只需提供一个链接分类名即可.一旦链接分类创建,你就可以将任何链接加到此分类中 .</p>";

$messages["help_blogSettings"] = "<p>通过本页面你可以改变你的日记的一些控制行为和外观. 下面是设置: <ul>
<li><b> blog名称</b>: 这是一个描述你的blog的一个字符串.如果使用缺省模板的话，这个字符串会显示在所有页面的顶端.</li>
<li><b> blog的描述</b>: 这是一个长的描述文本，可以在某些显示详细信息的页面中选择显示.如果不需要的话可以设置为空.</li>
<li><b>显示文本使用的语言</b>: 你可以选择一个有效的语言.这个语言会用来显示文本  (不仅仅是你的文章!)并且根据当前的设置格式化日期和数字. 更多的语言可以在任何时候安装.</li>
<li><b>首页中的条目</b>:设置首页显示的文章数. 文章越多，用户下载页面的时间就会越长. 最小数是1.</li>
<li><b>最近的条目</b>: 设置 <b>'近期'</b>中显示的文章数, 也就是最近发表的文章.最小数是1.</li>
<li><b>模板</b>: pLog 允许用不同的模板显示相同的内容. 你可以选择最适合你的模板,模板可以从管理员安装的模板中选择.</li>
<li><b>分割长的文章并增加 '更多...'链接</b>: 如果文章太长 ，你想让pLog 在首页为你的文章自动增加'更多...' 链接的话请设置为 <b>'Yes'</b> 。这个特性非常有用，可以让你的前端页面减少混乱并且变小。但是, 如果有一大堆HTML代码在页面中也会有问题.</li>
<li><b>在多少个字符后来分割文章</b>: 在增加 '更多...'链接前设置你允许的字符数量 . 只有你激活了上面特性后这个设置才有效.</li>
<li><b>激活 WYSIWYG 文本编辑器</b>: 如果你想实时看到你写的文章效果的话设置这个为 yes. 只有你使用ie5。5或者mozilla1.3b以上版本时才有效.</li>
<li><b>激活注释</b>:如果你允许访客回复你的文章的话设置这个为 yes. 这会全局影响你所有的文章和访客.</li>
</ul></p>";

$messages["help_userSettings"] = "<p>可以在本页修改与你个人相关的信息. 注意你的用户名不能修改.<ul>
<li><b>密码, 确认密码</b>: 如果你想修改你的密码的话,请在第一个文本框中输入，同时在第二个文本框中输入相同的密码来确认 .</li>
<li><b>Email地址</b>: 如果你想使用一些特性，比如当你的文章有人回复时你想得到一个通知，请输入你的有效email地址. 这个地址仅用于系统内部使用并不会被公开.</li>
<li><b>个人简历</b>: 你可以在这里输入你的个人信息. 可以为空.</li>
</ul></p>";

$messages["help_pluginCenter"] = "<p>从这儿你可以看系统已经安装了那些外挂. 对于每个外挂,你可看到其标识符 (在开发模板和使用外挂特性的时候会用到标识符), 外挂的作者,关于外挂的许多描述性信息，主要是如何使用.</p>";

$messages["help_Stats"] = "<p>从这里你可以看到浏览本站的所有逆向链接.  <b>'文章'</b> 列反映的是逆向链接访问的文章。 如果逆向链接访问首页或者其它不是文章的页面时值会为 <b>'0'</b>.  <b>'最近点击日期'</b>列显示的是逆向链接最近访问的日期.</p>";

$messages["editArticleCategory"] = "<p>请输入您要更新的分类的新名称。</p>";

$messages["editLink"] =  "<p>您必须输入链接的名称以及网址。同时网址也必须设置在适当的网址链接分类下。</p>";

$messages["editLinkCategory"] = "请输入您所要更新的链接分类的名称。</p>";

$messages["blogSelect"] = "请从选单中选择您所要进行操作的指令。";

$messages["Error"] = "在执行您所下达的指令时发生错误。请至主页面取得跟本讯息相关的更多资讯。";

$messages["Message"] = "请至主页面取得跟本消息相关的更多信息。";

//////// strings for the administration interface ///////


$messages["admin_interface_title"] = "pLog控制台";
$messages["administration"] = "控制台";
$messages["help"] = "帮助";
$messages["plog_help"] = "pLog使用说明";
$messages["newPost"] = "发表新文章";
$messages["editPosts"] = "文章列表";
$messages["editArticleCategories"] = "文章分类";
$messages["admin_links"] = "网站链接";
$messages["editLinkCategories"] = "链接分类";
$messages["settings"] = "设定";
$messages["Logout"] = "退出";
//新增加的，主要服务于menu.xml
$messages["newArticleCategory"] = "新建文章分类";
$messages["editLinks"] = "编辑链接";
$messages["newLink"] = "新建链接";


// new post page

$messages["xmlrpc_ping_ok"] = "XML-RPC确认已顺利传到 : ";
$messages["error_sending_xmlrpc_ping"] = "XML-RPC确认传送错误 : ";
$messages["error_sending_xmlrpc_ping_message"] = "XML-RPC确认错误讯息是 : ";
$messages["preview"] = "预展";
$messages["post_added"] = "文章已增";
$messages["you_will_be_notified"] = "文章如有活动通知作者.";
$messages["post_added_not_published"] = "文章已增但未出版.";
$messages["error_adding_post"] = "新增文章错误";
$messages["error_must_fill_all_fields"] = "您必须把所有资料输入";
$messages["error_must_have_one_category"] = "新增文章前必须先新增至少一个类别";

$messages["topic"] = "标题";
$messages["text"] = "正文";
$messages["category"]  = "分类";
$messages["status"] = "状态";
$messages["post_status_draft"] = "草稿";
$messages["post_status_published"] = "定稿";
$messages["post_status_deleted"] = "已删除";
$messages["post_status_all"] = "全部";
$messages["send_notification"] = "如果有人对本文发表评论，就发送电子邮件通知我。";
$messages["send_trackback_pings"] = "检查文章中所使用的网址链接，并且向这些连接发送引用通告（TrackBack Pings）。";
$messages["add_post"] = "发表文章！";


$messages["xmlrpc_ping_ok"] = "XML-RPC 通告已经正确送出";
$messages["error_sending_xmlrpc_ping"] = "以下XML-RPC通告发生错误";
$messages["error_sending_xmlrpc_ping_message"] = "错误信息为：";

$messages["preview"] = "预览";
$messages["post_added"] = "文章已成功发表";
$messages["you_will_be_notified"] = "另外，如果这篇文章有什么后续讨论，您都会收到电子邮件通知。";
$messages["post_added_not_published"] = " 文章已成功加入网站数据库，但尚未正式发表。";
$messages["error_adding_post"] = "发表文章时出错！";
$messages["error_must_fill_all_fields"] = "您必须在所有的输入框中都填入内容！";
$messages["error_must_have_one_category"] = "您必须先建立至少一个文章分类，才可以发表文章。";


// send trackbacks page

$messages["send_trackback_pings"] = "发送引用通告";
$messages["links_found"] = "在您的文章中有以下链接，请选择您想发送引用通告的网址。（发送引用通告会花一点时间，请耐心等待）";
$messages["trackbacks_no_urls_selected"] = "您未选择任何链接，所以不会送出任何引用通告。";
$messages["trackbacks_received_ok"] = "以下主机已经成功接收到了您的引用通告:";
$messages["trackbacks_no_trackback"] = "以下的链接没有提供引用网址: ";
$messages["trackbacks_problems_sending"] = "往以下网站发送引用通告时出错，如果您愿意的话，可以重新试试看";
$messages["trackbacks_received_all_hosts"] = "所有的网站都成功地收到了您的引用通告。";
$messages["ping_selected"] = "向选择的网址发送引用通告";

// edit posts

$messages["author"] = "作者";
$messages["category_all"] = "全部分类";
$messages["author_all"] = "全部作者";
$messages["update"] = "更新";
$messages["date"] = "日期";
$messages["stats"] = "统计";
$messages["delete"] = "删除";

$messages["delete_selected"] = "删除所选择的项目";

// edit post
$messages["edit_post"] = "编辑文章";
$messages["error_getting_post_to_update"] = "更新文章时出错。";
$messages["error_updating_post_in_database"] = "将更新的文章存入数据库时出错。";
$messages["post_successfully_updated"] = "更新文章成功完成。";
$messages["notification_removed"] = "关于这篇文章的电子邮件通知功能已被删除。";

// post statistics

$messages["statistics_for_post"] = "文章的相关统计: ";
$messages["error_fetching_post"] = "读取文章时发生错误";
$messages["times_post_has_been_read"] = "本文已被阅读的次数: ";
$messages["referers"] = "逆向链接";
$messages["id"] = "ID";
$messages["url"] = "网址";
$messages["hits"] = "点击数";
$messages["trackbacks"] = "引用";

// post comments

$messages["error_fetching_comments"] = "读取评论时出错";
$messages["comments_for_post"] = "察看文章的评论: ";
$messages["email"] = "电子邮件";
$messages["ip_address"] = "IP地址";

// delete comments

$messages["error_no_comments_selected"] = "您未选择任何评论。";
$messages["error_deleting_comment"] = "删除评论时出错。 ";
$messages["comment_deleted_ok"] = "「%s」评论已被成功删除。";

// categories list
$messages["category_name"] = "分类名称";

// removing posts
$messages["post_cannot_be_deleted"] = "文章无法删除，";
$messages["no_posts_selected"] = "您没有选择要删除的文章。";
// %s = subject of the post, %d = identifier of the post. feel free to change its order
// but if you remove them there will be no information about which post was removed...
$messages["error_deleting_post"] = "删除文章「%s」时出错 (id = %d)";
$messages["post_deleted_ok"] = "文章「%2\$s」已被成功删除。 (id = %1\$d)";

// delete categories
$messages["no_categories_selected"] = "您没有选择任何要删除的分类。";
$messages["error_category_has_articles"] = "无法删除「%s」这个分类，原因是该分类下还有文章。请将此分类下的所有文章删除后，再重试一次。";
$messages["error_deleting_category"] = "在将分类「%s」从数据库中删除时出错。";
$messages["category_deleted_ok"] = "文章分类「%s」已被成功删除。";

// add category

$messages["add_new_category"] = "新增文章分类";
$messages["add_new_category_info"] = "请输入新的分类名称。";
$messages["category_added_ok"] = "增加文章分类成功。";
$messages["error_adding_article_category"] = "在新增文章分类时出错。";

// edit categories
$messages["edit_category"] = "编辑分类";
$messages["please_provide_valid_category_name"] = "请输入分类名称。";
$messages["error_incorrect_category_id"] = "分类标识号不正确。";

// update the category
;
$messages["error_fetching_category"] = "读取分类时出错。";
$messages["error_updating_category"] = "更新分类时出错。";
$messages["error_empty_category_name"] = "您必须填入适当的分类名称。";
$messages["category_updated_ok"] = "文章分类更新成功！";

// edit links
$messages["link_name"] = "链接名称";
$messages["link_url"] = $messages["url"];
$messages["link_category"] = $messages["category"];
$messages["link_description"] = "相关描述";
$messages["links"] = "网站链接";

// edit a link
$messages["error_provide_name_and_url"] = "您必须输入链接网站的名称和网址。";
$messages["error_invalid_link_id"] = "链接标识号无效或丢失。";
$messages["error_fetching_link"] = "读取链接资料时出错。";
$messages["error_updating_link"] = "更新链接时出错。";
$messages["link_updated_ok"] = "链接更新成功！";
$messages["error_fetching_link_categories"] = "读取链接分类时出错。";


// add a link

$messages["add_new_link"] = "新增网站链接";
$messages["add_link"] = "加入链接";
$messages["error_adding_link"] = "在新增链接时出错";
$messages["link_added_ok"] = "新增链接成功。";
$messages["error_provide_name_and_url"] = "您必须提供链接网站的名称和网址。";
$messages["error_must_have_one_link_category"] = "在新增链接网站之前，您必须先建立一个网站链接的分类。";

// delete a link
$messages["error_no_links_selected"] = "您没有选择任何链接，无法删除。";
$messages["error_removing_link"] = "从数据库中删除「%s」时出错。";
$messages["link_deleted_ok"] = "链接「%s」 已成功删除。";

// edit link categories
$messages["newLinkCategory"] = "新增链接分类";
$messages["link_categories_help"] = "新增网站链接之前，您必须先建立至少一个链接分类。";
$messages["link_category_name"] = "链接分类名称";
$messages["link_category_links"] = "链接";

// new link category
$messages["new_link_category_info"] = "链接分类可以帮助您将所有的链接分门别类。今后，当在网站主页上显示这些链接时，您便可以按链接分类有序地显示这些链接.";
$messages["newLinkCategory"] = "新增链接分类";
$messages["error_provide_category_name"] = "您必须提供链接的名称与网址.";
$messages["error_adding_link_category"] = "新增链接分类时出现错误.";
$messages["link_category_added_ok"] = "链接分类已增加.";

// edit link category

$messages["edit_link_category"] = "修改链接分类";
$messages["error_updating_link_category"] = "在更新链接分类时出错。";
$messages["link_category_updated_ok"] = "链接分类更新成功。";
$messages["error_fetching_link_category"] = "读取链接分类资料时出错。";
$messages["error_incorrect_link_category_id"] = "链接分类的标识号不正确。";


// delete link categories
$messages["error_no_link_category_selected"] = "您没有选择任何要删除的链接分类。";
$messages["error_links_in_link_category"] = "无法删除「%s」这个分类，原因是这个分类下还有网站链接。请删除此分类下的所有网站链接后，再重试一次。";
$messages["error_removing_link_category"] = "在删除链接分类「%s」时出错。";
$messages["link_category_deleted_ok"] = "链接分类「%s」已成功删除。";
// this error is shown when for some reason the category could not be fetched from the database
// and we can't show its name

$messages["error_removing_link_category_2"] = "在删除链接分类时出错，标识号 = %d";
// blog settings page
$messages["blogSettings"] = "网志设定";
$messages["userSettings"] = "个人资料";
$messages["pluginCenter"] = "外挂中心";
$messages["Stats"] = "统计资料";
$messages["blog_name"] = "网志名称";
$messages["long_blog_name"] = "网志简介";
$messages["language_used"] = "网志语言设定";
$messages["items_main_page"] = "您想在主页上显示多少篇文章？";
$messages["items_as_recent"] = "您想在「近期文章列表」中显示多少篇文章？";
$messages["template_used"] = "请选择一个网站模板，该模板将定义您网站的外观。";
$messages["cut_posts"] = "如果在首页显示的文章过长，您是否要将其在一定的长度截断，并加一个「阅读全文」链接？";
$messages["cut_posts_after_characters"] = "您想将文章在多少个字符处截断？";
$messages["enable_wysiwyg_edition"] = "启用所见即所得（WYSIWYG）文字编辑器？（您必须使用 Internet Explorer 5.5 以上或 Mozilla 1.3b 以上的浏览器）";
$messages["enable_comments"] = "是否开放对所有文章的评论留言权限？";
$messages["yes"] = "是";
$messages["no"] = "否";
$messages["error_invalid_locale"] = "语系设定参数无效";
$messages["error_incorrect_max_recent_items"] = "您必须正确填写您想要在首页「近期文章」列表中显示的文章数。";
$messages["error_incorrect_number_of_posts"] = "您必须正确填写您想在首页上显示的文章数。";
$messages["error_incorrect_template"] = "网站模板的值不正确。";
$messages["error_no_blog_name"] = "您必须为您的博客网站取个名字。";
$messages["error_incorrect_show_more_threshold"] = "如果您使用了将过长的文章截断，并增加「阅读全文」链接的功能，您就必须设定一个字符数。";
$messages["error_updating_settings"] = "更新网站设定时出错。";
$messages["blog_settings_updated_ok"] = "网站设定更新成功！";
$messages["permanent_blog_url"] = "该博客网站的永久地址（不能更改）";

// user profile page

$messages["username"] = "用户名称";
$messages["password"] = "密码";
$messages["confirm_password"] = "确认密码";
$messages["email_address"] = "电子邮件地址";
$messages["bio"] = "自我介绍";
$messages["empty_no_change"] = "如果您不想修改密码，留白即可";
$messages["user_settings_updated_ok"] = "用户设定更新成功。";
$messages["error_updating_user_settings"] = "更新设定时出错。";
$messages["error_passwords_dont_match"] = "抱歉，您输入的两个密码不相符。";
$messages["error_incorrect_password"] = "抱歉，密码错误。";
$messages["error_incorrect_email_address"] = "电子邮件地址格式错误。";

// plugin center page
$messages["plugins_available"] = "以下是模板中可以使用的外挂程序列表";
$messages["identifier"] = "标识号";
$messages["description"] = "相关说明";
$messages["error_plugins_disabled"] = "本站已停用外挂程序功能。";

// statistics page
$messages["statistics_info"] = "文章标识号如果为０，其含义为主站的点击数，而不是针对某篇特定文章。";
$messages["article_id"] = "文章标识号";
$messages["last_hit_date"] = "最后点击日期";
$messages["error_fetching_referers"] = "在读取本站referers资料时出错。";

// login screen
$messages["login_page_title"] = "pLog控制台";
$messages["login"] = "登陆";
$messages["welcome_message"] = "欢迎光临pLog";
$messages["error_incorrect_username_or_password"] = "很抱歉，您输入的用户名或密码不正确。";
$messages["error_dont_belong_to_any_blog"] = "很抱歉，您还没有使用本站博客的权限。";
$messages["error_no_username_or_password"] = "请输入有效的用户名或密码。";
$messages["choose_one_blog"] = "您可以使用下列博客网站，请选择一个您想要管理的，然后进入控制台。";
$messages["continue"] = "继续";
$messages["logout_message"] = "您已成功退出。";
$messages["logout_message_2"] = "<a href=\"admin.php\">请按此处</a>重新登陆，或<a href=\"%1\$s\">前往%2\$s</a>.";
$messages["logout_title"] = "已退出";
$messages["error_access_forbidden"] = "您目前没有权限进入控制台。请先到<a href=\"admin.php\">这里</a>登陆。";


/////
$messages["blogFilteredContent"] = $messages["filteredContent"];
$messages["newBlogFilteredContent"] = $messages["newFilteredContent"];
$messages["blogBlockedHosts"] = $messages["blockedHosts"];
$messages["newBlogBlockedHost"] = $messages["newBlockedHost"];
$messages["newBlogUser"] = $messages["createUser"];

//
// text of the post that will be added to each blog when they sign-up via the register.php script
//
$messages["register_default_category"] = "一般分类";
$messages["register_default_article_text"] = "如果您能够看到这条消息，说明您已经成功注册了本站会员和blog系统，开始blog吧:-)";
$messages["register_default_article_topic"] = "祝贺！您的blog已经成功注册！";
//
// summary templates text
//

$messages["summary_title"] = "Blog汇总";
$messages["summary_section_main"] = "汇总";
$messages["summary_section_main_link_title"] = "主页";
$messages["summary_section_register"] = "注册!";
$messages["summary_section_register_link_title"] = "注册新的blog";
$messages["summary_section_blog_list"] = "Blog列表";
$messages["summary_section_blog_list_link_title"] = "本站所有的blog";
$messages["summary_section_faq"] = "F.A.Q.";
$messages["summary_section_faq_link_title"] = "常见问题";
$messages["summary_welcome_title"] = "欢迎使用 pLog!";

$messages["summary_most_active_blogs"] = "最活跃的blog";
$messages["summary_newest_blogs"] = "最新的blog";
$messages["summary_most_commented_articles"] = "回复最多的文章";
$messages["summary_most_read_articles"] = "阅读最多的文章";

$messages["summary_faq"] = "常见问题";
$messages["summary_faq_question"] = "这是什么?";
$messages["summary_faq_description"] = "你可以使用这部分为你的服务增加FAQ. 编辑文件 templates/summary/faq.template 来改变本页的内容.";

$messages["summary_login"] = "登陆";
$messages["summary_other_stuff"] = "Other Stuff";
$messages["summary_plog_logo"] = "放置一个logo如何?";

$messages["summary_blog_list"] = "Blog列表";
$messages["summary_last_updated"] = "最近更新";
$messages["summary_author"] = "作者";
$messages["summary_articles"] = "文章";
$messages["summary_reads"] = "阅读";

$messages["summary_welcome_message"] = "<h4 class=\"question\">关于本站?</h4>
                            <p>You could use this area to give some information about this site.</p>

                            <ul>
                                <li>See the following links for more information: <br />
                                    <a href=\"summary.php?op=Faq\">FAQ</a></li>
                                <li><a href=\"register.php\">Register a new blog here</a></li>
                            </ul>";

$messages["summary_latest_posts"] = "最新发表";
$messages["summary_in"] = "in";
$messages["summary_posted_by"] = "Posted by";

//
// register templates text
//
$messages["register_error"] = "错误";
$messages["register_error_message"] = "发生了一个错误:";
$messages["register_errors"] = "在处理时发生了错误，请查看:";
$messages["register_new_blog_step1_title"] = "注册一个新的blog (1/4)";
$messages["register_step1_fill_in_title"] = "请填充下面信息.";
$messages["register_step1_description"] = "<p>
首先我们为你创建一个用户，请选择一个用户名 (不能是系统中已经有的，我们会通知你用户名是否存在) ，这个用户被视为这个blog的主人，拥有这个blog所有的权限.
</p>
<p>
不要忘记你的密码，一旦注册就无法恢复.
</p>";
$messages["register_step1_legend"] = "请填充下面信息";
$messages["register_username"] = "用户名:";
$messages["register_password"] = "密码:";
$messages["register_password_confirmation"] = "确认密码:";
$messages["register_email"] = "Email地址:";
$messages["register_email_comment"] = "(有回复时通知用户的地址)";

$messages["register_next"] = "下一步 &raquo;";

$messages["register_new_blog_step2_title"] = "注册新的blog (2/4)";
$messages["register_user_created"] = "用户通过检查, 现在我们将创建您的个人blog.";
$messages["register_step2_description"] = " <p>
  我们需要知道你的blog名，这个过程结束后，你可以在管理界面修改它.
 </p>";
$messages["register_step2_blog_name"] = "你的blog名称:";

$messages["register_new_blog_step4_title"] = "谢谢! (4/4)";
$messages["register_new_blog_step4_description"] = "
 <p>
   注册结束，你的用户和blog在本站已经注册成功,你现在可以登陆并开始你的blog！
 </p>";
$messages["register_step4_admin_link"] = "
  <p>
    点击这儿 <a href=\"admin.php\">管理界面</a>开始经营属于你自己的blog.
 </p>";
$messages["register_step4_blog_link1"] = "
 <p>
    或者点击 <a href=\"";

$messages["register_step4_blog_link2"] = "
\">这儿访问你的blog</a>.
 </p>";

$messages["register_step4_final_message"] = "
 <p>
  祝你愉快的书写你的blog!
 </p>";


$messages["register_error_incorrect_username"] = "不正确的用户名，请重新输入.<br/>";
$messages["register_error_incorrect_email"] = "Email 地址无效或者已经使用过了，请重试. <br/>";
$messages["register_error_user_already_exist"] = "用户名已经存在,请尝试换一个.<br/>";
$messages["register_error_incorrect_password"] = "密码无效，请重试. <br/>";
$messages["register_error_passwords_dont_match"] = "密码不匹配，请重试. <br/>";
$messages["register_error_adding_user"] = "添加用户错误r: ";
$messages["register_error_creating_blog"] = "创建新的blog时出错";
$messages["register_error_blog_name"] = "你应该为你的blog选一个更合适的名字.<br/>" ;

//管理界面中,下面是新增加的菜单中文版
$messages["recent_articles"] = "最新文章" ;
$messages["recent_comments"] ="最新回复";
$messages["recent_resources"] = "最新相片";
$messages["Manage"] = "管理";
$messages["resourceCenter"] = "相片中心";
$messages["controlCenter"] = "控制中心";
$messages["adminSettings"] = "管理员设置";
$messages["dashboard"] = "控制面板";
$messages["extended_text"] = "扩展文本";
$messages["categories"] = "分类";
$messages["show_posts_by"] = "根据条件显示文章";
$messages["save_draft_and_continue"] = "存草稿并继续";
$messages["enable_comments_for_post"] = "允许回复";
$messages["search_terms"] = "搜索条件";
$messages["show"] = "显示";
$messages["posts"] = "文章数";
$messages["show_main_page"] = "是否在首页显示";
$messages["actions"] = "操作";
$messages["show_category_in_main_page"] = "是否在首页显示";
$messages["show_in_main_page_info"] = "在首页显示文章";
$messages["reset"] = "重置";
$messages["managePosts"] = "文章管理";
$messages["manageLinks"] = "链接管理";
$messages["show_links_by"] = "根据分类显示链接";
$messages["name"] = "名称";
$messages["link_category_name_info"] = "链接分类名称";
$messages["add_link_category"] = "增加链接分类";

$messages["resources"] = "相片";
$messages["close_window"] = "关闭窗口";
$messages["select_picture"] = "请选择图片";
$messages["select"] = "选取";
$messages["newResourceAlbum"] = "新建相册";
$messages["newResource"] = "新建相片";
$messages["welcome_resource_center"] = "欢迎来到相片中心";
$messages["total_num_resources"] = "相片总数";
$messages["total_size"] = "总使用空间";
$messages["show_album"] = "显示相册";
$messages["root_album"] = "根相册";
$messages["album"] = "相册";
$messages["parent_album"] = "上级相册";
$messages["add_album"] = "增加相册";
$messages["no_parent_album"] = "没有上级相册";
$messages["error_must_create_album_first"] = "错误，必须先创建相册";
$messages["add_resource"] = "增加相片";

$messages["manageSettings"] = "管理设定";
$messages["manageBlogUsers"] = "用户管理";
$messages["newBlogUser"] = "新建用户";
$messages["showBlogUsers"] = "用户列表";
$messages["manageBlogTemplates"] = "模板管理";
$messages["newBlogTemplate"] = "新建模板";
$messages["blogTemplates"] = "模板列表";
 
 $messages["blog_link"] = "该博客网站的永久地址";
 $messages["language"] = "语言";
 $messages["max_main_page_items"] = "首页文章数量";
 $messages["max_recent_items"] = "近期文章数量";
 $messages["template"] = "模板";
 $messages["use_read_more"] = "使用延伸正文";
 $messages["use_read_more_feature"] = "使用延伸正文特性";
 $messages["enable_wysiwyg"] = "使用所见即所得编辑器";
 $messages["show_future_posts"] = "显示将来的文章";
 $messages["comments_order"] = "回复排列顺序";
 $messages["categories_order"] = "文章分类排列顺序";
 $messages["link_categories_order"] = "链接分类排列顺序";
 $messages["time_offset"] = "您的博客服务器与您所在地的时差";

$messages["most_recent_updated_first"] = "最近更新最多的在前";
$messages["oldest_first"] = "旧的在前";
$messages["newest_first"] = "新的在前";
$messages["alphabetical_order"] = "按字母顺序";
$messages["reverse_alphabetical_order"] = "按字母逆序";
$messages["most_articles_first"] = "文章最多的在前";
$messages["most_links_first"] = "链接最多的在前";
$messages["most_links_last"] = "链接最多的在后";

$messages["full_name"] = "全名";
$messages["user_picture"] = "用户图像";
$messages["referrer"] = "逆向链接";

$messages["Users"] = "用户管理";
$messages["createUser"] = "创建用户";
$messages["editSiteUsers"] = "编辑用户";
$messages["Blogs"] = "blog管理";
$messages["createBlog"] = "创建blog";
$messages["editSiteBlogs"] = "编辑blog";
$messages["Locales"] = "本地化管理";
$messages["newLocale"] = "创建新的本地化";
$messages["siteLocales"] = "站点本地化";
$messages["Templates"] = "模板管理";
$messages["newTemplate"] = "新建模板";
$messages["siteTemplates"] = "站点模板";
$messages["GlobalSettings"] = "全局设置";
$messages["editSiteSettings"] = "站点设置";
$messages["summarySettings"] = "汇总设置";
$messages["templateSettings"] = "模板设置";
$messages["urlSettings"] = "url设置";
$messages["emailSettings"] = "电邮设置";
$messages["uploadSettings"] = "上传设置";
$messages["helpersSettings"] = "帮助设置";
$messages["interfacesSettings"] = "接口设置";
$messages["securitySettings"] = "安全设置";
$messages["bayesianSettings"] = "bayesian设置";
$messages["resourcesSettings"] = "相片设置"; 
$messages["searchSettings"] = "搜索设置";
$messages["site_stats"] = "站点统计";
$messages["number_blogs"] = "blog数量";
$messages["number_users"] = "用户数量";
$messages["number_posts"] = "文章数量";
$messages["number_posts_today"] = "今日文章数量";
$messages["number_posts_this_month"] = "本月文章数量";
$messages["clean_up"] = "清除";
$messages["purge_info"] = "清除信息";
$messages["spam_info"] = "垃圾信息";
$messages["purge_posts"] = "清除文章"; 
$messages["purge_spam_comments"] = "清除垃圾回复"; 

$messages["assigned_to_blog"] = "指定所属blog"; 
$messages["add_user"] = "增加用户";
$messages["show_users_by"] = "根据条件显示用户";
$messages["user_status_all"] = "所有用户状态";
$messages["user_status_active"] = "激活";
$messages["user_status_disabled"] = "禁止";

$messages["blog_owner"] = "blog所有者";
$messages["show_blogs_by"] = "根据条件显示blog";
$messages["blog_title"] = "blog名称";
$messages["quota"] = "配额";
$messages["blog_status_all"] = "blog所有状态";
$messages["blog_status_active"] = "激活";
$messages["blog_status_disabled"] = "禁止";

$messages["upload_locale"] = "上传本地化文件";
$messages["use_this_form_to_upload_locale"] = "使用本表单上传本地化文件";
$messages["locale_file"] = "本地化文件";
$messages["manually_add_locale"] = "手工添加本地化文件";
$messages["use_this_form_if_cant_upload_locale"] = "如果不能上传请使用本表单";
$messages["scan_locales"] = "搜索本地化文件";
$messages["locale_code"] = "本地化文件代码";
$messages["locale_encoding"] = "本地化文件编码";

$messages["use_this_form_to_upload_template"] = "使用本表单上传模板";
$messages["template_file"] = "模板文件";
$messages["manually_add_template"] = "手工添加模板文件";
$messages["use_this_form_if_cannot_upload_template"] = "如果不能上传使用本表单";
$messages["upload_template"] = "上传模板";
$messages["scan_templates"] = "扫描模板";
$messages["templates_available_for_all"] = "有效模板列表";
$messages["error_no_new_templates_found"] = "没有新模板可供使用";


//下面是全局设置的一些变量
$messages["site_admin"] = "全站系统管理";
$messages["site_stats"] = "网站统计";
$messages["add_user"] = "新增用户";
$messages["users"] = "用户管理";
$messages["add_blog"] = "新增博客";
$messages["blogs"] = "博客管理";
$messages["locales"] = "语系设定";
$messages["add_locale"] = "新增语系";
$messages["templates"] = "模板管理";
$messages["add_template"] = "新增模板";
$messages["global_settings"] = "全局设置";
$messages["site_settings"] = "博客设置";
$messages["help_comments_enabled"] = "是否启用全站的评论留言功能。";
$messages["help_beautify_comments_text"] = "在用户发表评论留言时，不改变他所输入的文字格式。";
$messages["help_rdf_enabled"] = "是否启用最新文章的RDF FEED（RDF网站摘要）功能。";
$messages["help_temp_folder"] = "pLog系统执行某些操作时要用到的临时文件夹路径。";
$messages["help_base_url"] = "网站的网址（URL），请认真核对。";
$messages["help_show_posts_max"] = "在网站首页显示的文章数量（缺省值）。";
$messages["help_recent_posts_max"] = "在首页「近期文章」列表中显示的文章数量（缺省值）。";
$messages["help_template_folder"] = "网站模板文件的目录。";
$messages["help_default_template"] = "新增博客网站的缺省模板。";
$messages["help_defalut_locale"] = "新增博客网站所使用的缺省语言（控制台的登陆页面将使用相同的语言）";
$messages["help_html_allowed_tags_in_comments"] = "用户发表评论时，可以使用的HTML标签。";
$messages["help_referer_tracker_enabled"] = "如果网站接收到的REQUEST请求中含有REFERER信息，是否将基本的REFERER信息存入数据库。";
$messages["help_rss_parser_enabled"] = "如果您的网站模板中有RSS PARSER(RSS解析器），便可在您的网站上显示来自其它站点的新闻。您是否要启用此功能？";
$messages["help_show_more_enabled"] = "是否启用「阅读全文」链接功能。";
$messages["help_show_more_threshold"] = "在加入「阅读全文」链接前，应该显示多少个字符的内容。";
$messages["help_update_article_reads"] = "网站有内建的计数器，可以统计每篇文章的点击数。您是否想启用此功能。";
$messages["help_request_format_mode"] = "如果您设定为「一般网址」，那么系统便会产生正常的网址。如果您选用「搜索引擎易于查找的网址」（Search Engine Friendly)，则产生的网址便不会包含特殊字符，便于搜索引擎取得您网站上的内容。不过要支持此功能，您的主机空间必须使用Apache服务器，并且要能够使用.htaccess文件。";
$messages["help_xmlrpc_ping_enabled"] = "当发表新文章时，是否要向以下站点发送XMLRPC通告。";
$messages["help_xmlrpc_ping_hosts"] = "接受XMLRPC通告的网站列表，每个网址单独一行，数目不限。";
$messages["help_trackback_server_enabled"] = "是否接受别的网站发出的引用通告（TrackBack）。";
$messages["help_htmlarea_enabled"] = "是否启用所见即所得（WYSIWYG）文章编辑器。";
$messages["help_plugin_manager_enabled"] = "是否启用外挂程序。";
$messages["help_check_email_address_validity"] = "在用户申请注册新博客站点时，是否要认证他所填写的电子邮件地址。";
$messages["help_summary_page_show_max"] = "在摘要（SUMMARY）页面中要显示多少项目。";
$messages["help_minimum_password_length"] = "密码最少要有多少个字符。";
$messages["help_users_can_add_templates"] = "是否允许用户加入自己的模板。";
$messages["help_email_service_enabled"] = "是否启用用于寄送通知信函的电子邮件服务。";
$messages["help_post_notification_source_address"] = "系统通知信函中的寄件人电子邮件地址。";
$messages["help_email_service_type"] = "用来发送电子邮件的方法，请在以下各种方法中选择一个。并请记住检查下列设置";
$messages["help_smtp_host"] = "如果选用SMTP寄送电子邮件，请输入您要用来发送邮件的主机。";
$messages["help_smtp_port"] = "上面设定的SMTP服务器的端口（port）";
$messages["help_smtp_use_authentication"] = "SMTP服务器是否需要授权认证。如果需要的话，请继续填写以下两项设置。";
$messages["help_smtp_username"] = "如果SMTP服务器需要授权认证，请填写用户账号。";
$messages["help_smtp_password"] = "如果SMTP服务器需要授权认证，请填写用户密码。";
$messages["help_uploads_enabled"] = "是否启用上传文件功能。这个功能会影响到用户能否上传新的模板包，及能否向现存模板中添加文件。";
$messages["help_maximum_file_upload_size"] = "允许用户上传文件的最大字节数。";
$messages["help_upload_forbidden_files"] = "禁止用户上传的文件类型。你可以制定任意数量的文件类型，两个类型之间用空格分离。";
$messages["help_path_to_tar"] = "「tar」命令所在目录。";
$messages["help_path_to_gzip"] = "「gzip」命令所在目录。";
$messages["help_path_to_bz2"] = "「bzip2」命令所在目录。";
$messages["help_path_to_unzip"] = "「unzip」命令所在目录。";

$messages["add_user_give_information"] = "要新增一个用户，请填写以下信息。";

$messages["site_registered_users"] = "以下是所有的注册用户列表。";

$messages["add_blog_give_information"] = "要新增一个博客，请填写以下信息。";
$messages["blog_title"] = "博客网站的名称";
$messages["blog_owner"] = "博客网站管理员";
$messages["site_registered_blogs"] = "以下是所有博客的列表。";
$messages["edit_users"] = "管理用户";

$messages["upload_locale"] = "上传语言文件";
$messages["use_this_form_to_upload_locale"] = "请使用以下表格上传一个语言文件到您的服务器，如果您不能上传文件的话，请使用下面的另一个表格。";
$messages["locale_file"] = "文件";
$messages["manually_add_locale"] = "手动方式增加语言文件";
$messages["use_this_form_if_cant_upload_locale"] = "如果您无法通过浏览器将文件上传到您的服务器，请使用这个表格。注意，您必须先将语言文件复制到主机的locale目录下，否则会出错。";
$messages["locale_code"] = "语言代码";
$messages["locale_encoding"] = "编码方式";

$messages["template_will_be_available_for_all"] = "系统中所有的博客网站今后都可以使用这个新模板。";

$messages["use_this_form_to_upload_template"] = "您可以使用此表格将新模板上传到服务器。如果您无法用浏览器上传，请使用下面的表格。上传的模板文件必须是zip、tar.gz或tar.bz2格式的压缩文件。";
$messages["locale_file"] = "文件";
$messages["upload_template"] = "上传模板";
$messages["manually_add_template"] = "手动方式增加模板";
$messages["use_this_form_if_cannot_upload_template"] = "如果您无法通过浏览器将模板文件上传到您的服务器，请使用这个表格。注意，您必须先将模板文件复制到主机的template目录下，否则会出错。";
$messages["template_id"] = "模板标识号（ID）";

$messages["templates_available_for_all"] = "本模板可供系统中所有的博客网站使用。";
$messages["add_file"] = "新增文件";

$messages["setting_name"] = "名称";
$messages["setting_value"] = "数值";
$messages["setting_description"] = "相关说明";

$messages["plain"] = "普通网址";
$messages["search_engine_friendly"] = "搜索引擎易于搜寻的简洁网址";

$messages["general_settings"] = "一般设置";
$messages["helper_tools_settings"] = "帮助工具设置";
$messages["uploads_settings"] = "上传文件设置";
$messages["email_settings"] = "电子邮件设置";

$messages["number_blogs"] = "博客网站数";
$messages["number_users"] = "用户数";
$messages["number_posts"] = "文章数";
$messages["number_posts_today"] = "今日发表文章数";
$messages["number_posts_this_month"] = "本月发表文章数";

$messages["date"] = "日期";
$messages["time"] = "时间";

$messages["comments_order"] = "评论留言排序方式:";
$messages["oldest_first"] = "旧的在前";
$messages["newest_first"] = "新的在前";

$messages["blog"] = "博客网站";
$messages["blog_id"] = "博客网站标识符（ID）";

$messages["blog_users"] = "博客网站用户";
$messages["available_users"] = "Available Users";
$messages["add"] = "新增";
$messages["remove"] = "删除";

$messages["user_id"] = "用户ID";

$messages["new_password"] = "新密码";
$messages["has_administrator_privileges"] = "拥有管理员权限";
$messages["related_to_the_following_blogs"] = "该用户可以使用的博客网站";

$messages["add_user_to_blog_form"] = "您可以用以下表格，将其他用户加入您的博客作者行列中。用户在加入之后，可以发表或编辑文章，但是不能够修改您的博客网站设定。";
$messages["add_user_enter_username"] = "请输入这位用户的帐号。如果系统中没有这个帐号，便无法加入。";
$messages["add_user_send_notification"] = "用电子邮件通知这名用户。";
$messages["add_user_type_notification"] = "请输入信件的内容";

$messages["following_users_have_permissions"] = "以下是博客网站中的作者名单。他们可以新增、编辑或删除博客内容，但是不能够修改这个博客网站的相关设定。";
$messages["revoke_permissions"] = "取消使用权限";

$messages["add_blog_template"] = "新增模板";
$messages["manually_add_blog_template"] = "手动方式新增模板";
$messages["template_available_only_for_this_blog"] = "这个模板仅供您目前所在的博客网站使用。";
$messages["use_form_to_upload_blog_template"] = "您可以用这个表格，将模板安装包上传到服务器上。如果您没有办法用浏览器上传，请使用下方的另一个表格。上传文件必须是以zip、tar.gz或tar.bz2格式的压缩文件。";
$messages["use_form_if_cannot_upload_blog_template"] = "如果您没有办法用浏览器上传模板安装包，请使用这个表格。您在此所输入的文件名必须与在模板目录中的文件相符，不然就会产生错误。";

$messages["blog_templates"] = "博客模板";
$messages["templates_only_available_for_this_blog"] = "以下是可供目前所在博客网站使用的模板。.";

$messages["add_file_to_blog_template"] = "新增文件到博客模板中"; 
$messages["upload_file_to_blog_template"] = "请上传您想要加入到模板中的文件。";

$messages["error_user_id_incorrect"] = "用户ID不正确。";
$messages["error_incorrect_user_id"] = $messages["error_user_id_incorrect"];
$messages["error_fetching_user_information"] = "在读取用户资料时发生错误。";
$messages["error_password_incorrect"] = "密码太短或密码错误。";
$messages["error_updating_user_settings"] = "我没有办法更新这位用户的设定。";
$messages["user_settings_updated_ok"] = "用户「%s」的设定成功更新。";
$messages["error_no_users_selected_to_add"] = "您没有选择要新增的用户。";
$messages["user_added_to_blog_ok"] = "用户「%s」已经成功加入作者行列。";
$messages["error_adding_user_to_blog"] = "在加入用户「%s」时发生问题。";
$messages["error_no_users_selected_to_remove"] = "您没有选择要删除的用户。";
$messages["user_removed_from_blog_ok"] = "用户「%s」已经从作者行列中删除。";
$messages["error_removing_user_from_blog"] = "在删除用户「%s」时发生问题。";

$messages["error_incorrect_plugin_id"] = "外挂程序ID不正确。";
$messages["error_configuring_plugin"] = "在设定外挂程序时发生问题：";
$messages["site_config_saved_ok"] = "网站设定已成功储存。";
$messages["error_saving_site_config"] = "在储存网站设置时发生问题。";
$messages["error_incorrect_blog_owner"] = "要设定为博客网站管理员的用户不存在。";
$messages["error_updating_blog_settings"] = "在更新「%s」这个博客网站的设定时发生问题。";
$messages["blog_settings_updated_ok"] = "博客网站「%s」的设置已成功更新。";

$messages["error_fetching_users"] = "在读取这个博客网站的用户资料时发生问题。";

$messages["error_fetching_blogs"] = "在从系统中读取博客网站列表时发生问题。";

$messages["error_incorrect_template_id"] = "模板ID不正确或不存在。";

$messages["error_no_users_selected"] = "您没有选择要删除的用户。";
$messages["error_could_not_find_user"] = "在系统中找不到「%s」这位用户。";
$messages["error_deleting_user"] = "在删除用户「%s」时发生错误。";
$messages["user_deleted_ok"] = "用户「%s」已成功删除。";

$messages["error_must_give_blog_name"] = "您必须输入这个博客网站的正确名称。";
$messages["error_adding_blog"] = "在将这个博客网站加入数据库时发生错误。";
$messages["blog_added_ok"] = "新的博客网站「%s」已成功加入数据库中。";

$messages["error_template_not_inside_folder"] = "模板文件必须放在某个目录中。";
$messages["error_missing_base_files"] = "在这个模板设置中有些基本文件不见了。";
$messages["error_unpacking"] = "在解压缩时发生错误。";
$messages["error_forbidden_extensions"] = "在这个模板中有些文件被禁止访问。";
$messages["error_creating_working_folder"] = "在检查模板时发生错误。";
$messages["error_checking_template"] = "模板发生错误 (code = %s)";
$messages["error_add_template_disabled"] = "本站不允许用户新增模板文件。";
$messages["error_must_upload_file"] = "您必须上传文件。";
$messages["error_no_template_name"] = "您必须输入模板名称。";
$messages["error_uploads_disabled"] = "本站已关闭文件上传功能。";
$messages["error_installing_template"] = "在安装模板时发生错误。";
$messages["template_installed_ok"] = "新的模板「 %s」已经成功安装完成。";

$messages["error_adding_template_file"] = "在将文件加入模板时发生错误。";
$messages["error_file_forbidden"] = "系统不允许您上传这个类型的文件。";
$messages["error_file_too_big"] = "文件太大，上传的文件不能超过 %s 字节。";
$messages["template_file_added_ok"] = "文件已成功新增至「%s」模板中。";

$messages["error_plugin_cannot_be_configured"] = "您不能够对这个外挂程序进行设定。";

$messages["error_incorrect_username"] = "用户名称不正确。";
$messages["error_username_already_exists"] = "已经有人注册了相同的名称了。";
$messages["error_adding_user"] = "在将用户加入数据库时发生错误。";
$messages["user_added_ok"] = "新增用户帐号「%s」成功。";

$messages["error_no_blogs_selected"] = "您必须要选择您想要删除的博客网站。";
$messages["error_blog_is_default_blog"] = "「%s」是系统缺省博客网站，无法删除。";
$messages["blog_deleted_ok"] = "「%s」博客网站已成功删除。";
$messages["error_deleting_blog"] = "在删除「%s」这个博客网站时发生错误。";

$messages["error_no_templates_selected"] = "您没有选择任何模板，无法删除。";
$messages["error_removing_template"] = "在删除模板「%s」时发生错误。";
$messages["template_removed_ok"] = "「%s」模板已成功删除。";
$messages["error_no_users_selected_to_remove_from_blog"] = "您没有选择任何要从这个博客网站删除的作者。";
$messages["error_removing_user_from_blog"] = "在将用户「%s」从本博客网站作者行列中删除时发生错误。";
$messages["user_removed_from_blog_ok"] = "用户「%s」已经成功从本站作者行列中删除。";

$messages["error_incorrect_locale_code"] = "您所输入的语系代码不正确。";
$messages["error_invalid_locale_file"] = "这个文件不是正确的语系文件。";
$messages["error_adding_locale_file"] = "在新增语系文件时发生错误。请确定文件已经上传到语系文件目录中，并且检查文件权限是否正确。";
$messages["locale_added_ok"] = "语系「%s」已经成功新增";
$messages["error_saving_locale"] = "在将新的语系文件储存至语系文件目录时发生错误。请检查文件目录的写入权限是否正确。";

$messages["error_no_locales_selected"] = "您没有选择要删除的语系。";
$messages["error_deleting_only_locale"] = "您不可以删除这个语系文件，因为这是系统中目前唯一的语系文件。";
$messages["locale_deleted_ok"] = "「%s」语系已成功删除。";
$messages["error_deleting_locale"] = "在删除「%s」语系时发生错误。";
$messages["error_cant_delete_default_locale"] = "您不可以删除「%s」语系，因为这是系统目前的缺省语系。";
$messages["plugin_config"] = "外挂程序设定";
$messages["use_read_more_feature"] = "您放在首页的文章只要显示「正文」部分，而不要显示「延伸正文」？";
$messages["extended_text"] = "延伸正文：您在此输入的文字只会在显示单篇文章时显示，除非您在「设定」页面中修改了设定。";

$messages["error_must_give_post_intro"] = "您必须要输入这篇文章的介绍文字。";
$messages["error_no_albums_defined"] = "抱歉，这个博客还没有创建相册，请稍后访问。";
$messages["error_fetching_album"] = "在读取指定相册时发生错误。";
$messages["comment_marked_as_spam_ok"] = "您已经成功将本篇评论留言标示为垃圾留言。";
$messages["comment_marked_as_nonspam_ok"] = "您已经成功将本篇评论留言标示为正常留言。";
$messages["error_marking_comment_as_nonspam"] = "在将本篇评论留言标示为垃圾留言时发生错误。";
$messages["error_marking_comment_as_spam"] = "在将本篇评论留言标示为正常留言时发生错误。";
$messages["error_incorrect_comment_id"] = "留言评论ID不正确。";


//下面是控制面板中的帮助信息
$messages["text_help"]=" ";
$messages["topic_help"] = " ";
$messages["extended_text_help"] = " ";
$messages["post_categories_help"] = " ";
$messages["date_help"] = " ";
$messages["post_status_help"] = " ";
$messages["post_slug_help"] = " ";
$messages["album_name_help"] = " ";
$messages["parent_album_help"] = " ";
$messages["album_description_help"] = " ";
$messages["album_name_help"] = " ";
$messages["parent_album_help"] = " ";
$messages["album_description_help"] = " ";

$messages["username_help"] = " ";
$messages["full_name_help"] = " ";
$messages["password_help"] = " ";
$messages["email_address_help"] = " ";
$messages["assigned_to_blog_help"] = " ";

$messages["blog_name_help"] = " ";
$messages["blog_owner_help"] = " ";


// register ui
$messages["step1"] = "第一步";
$messages["step2"] = "第二步";
$messages["step3"] = "第三步";
$messages["step4"] = "第四步";
$messages["step5"] = "第五步";
$messages["step6"] = "第六步";

$messages["register_user"] = "注册用户";
$messages["password_confirm"] = "确认密码*";
$messages["user_email_info"] = "用户邮箱";
$messages["blog_locale_help"] = "请选择您的blog将要使用的语系";
$messages["register_new_blog_step3_title"] = "选择模板(3/4)";
$messages["done"] = "完成注册";
$messages["register_new_blog_step4_description"] = "我们已经收集了创建您的帐户和博客需要的所有信息，请点击\"完成注册\"按钮，完成整个注册过程。";

$messages["welcome_to_plog"] = "首先欢迎您注册为本站会员! 为了防止有人冒充您的邮件地址注册帐户,您还需要点击以下链接以便激活您的帐号:";
$messages["good_wish_and_good_bye"] = "预祝您blog愉快! \n plog team";
$messages["register_need_confirm"] = "我们已经发送了一封Email给您,里面说明了如何激活您的帐户. 请过一小会检查您注册时使用的邮件帐号. 如果您一直没有收到激活信,请....";
$messages["no_user_found"] = "用户不存在";
$messages["wrong_active_code"] = "激活码错误";
$messages["active_account_ok"] = "您的帐户已经激活了, 赶快去blog吧!";

$messages["register_new_blog_step0_title"] = "用户协议";

$messages["register_new_blog_step5_title"] = "激活您的帐号";
$messages["register_new_blog_step5_description"] = "注册完成";
$messages["register_finished"] = "注册完成";

$messages["accept"] = "同意以上条款";
$messages["decline"] = "不同意以上条款";

$messages["confirm_result"] = "帐户激活状态";

$messages["admin"] = "管理入口";
$messages["albums"] = "我的相册";
?>
