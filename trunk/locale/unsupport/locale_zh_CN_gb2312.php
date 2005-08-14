<?php
// set this to the encoding that should be used to display the pages correctly,translated by JianxinLiu,Tianjin University
$messages['encoding'] = 'gb2312';
$messages['locale_description'] = 'Simplified Chinese translation (GB2312)';
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
$messages['months'] = Array( '一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月');
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
$messages['message'] = '系统信息';
$messages['error'] = '错误信息';
$messages['date'] = '日期';

// miscellaneous texts
$messages['of'] = 'of';
$messages['recently'] = '最新发表';
$messages['comments'] = '最新回复';
$messages['comment on this'] = '评论';
$messages['my_links'] = '我的链接';
$messages['archives'] = '文章归档';
$messages['search'] = '搜索';
$messages['calendar'] = '博客日历';
$messages['search_s'] = '搜索';
$messages['search_this_blog'] = '站内搜索';
$messages['about_myself'] = '自我介绍';
$messages['permalink_title'] = '归档文章的自我静态链接地址';
$messages['permalink'] = '静态链接网址';
$messages['posted_by'] = '作者';
$messages['reply'] = '回复';

// add comment form
$messages['add_comment'] = '发表评论';
$messages['comment_topic'] = '标题';
$messages['comment_text'] = '在此添加评论';
$messages['comment_username'] = '称呼';
$messages['comment_email'] = '邮箱地址（可选）';
$messages['comment_url'] = '个人主页（可选）';
$messages['comment_send'] = '发表';
$messages['comment_added'] = '您的评论已经发表';
$messages['comment_add_error'] = '发表评论时出错';
$messages['article_does_not_exist'] = '该文章不存在';
$messages['no_posts_found'] = '找不到文章';
$messages['user_has_no_posts_yet'] = '该作者尚未发表任何文章';
$messages['back'] = '返回上一页';
$messages['post'] = '发表';
$messages['trackbacks_for_article'] = '引用本文的文章：';
$messages['trackback_excerpt'] = '摘要';
$messages['trackback_weblog'] = '博客';
$messages['search_results'] = '搜索结果';
$messages['search_matching_results'] = '以下文章符合搜索需求: ';
$messages['search_no_matching_posts'] = '没有文章符合搜索要求';
$messages['read_more'] = '查看全文';
$messages['syndicate'] = '新闻聚合';
$messages['main'] = '首页';
$messages['about'] = '关于';
$messages['download'] = '下载';

////// error messages /////
$messages['error_fetching_article'] = '找不到您所指定的文章';
$messages['error_fetching_articles'] = '找不到您所指定的文章';
$messages['error_trackback_no_trackback'] = '尚未有人向本文发送引用通告';
$messages['error_incorrect_article_id'] = '文章标识号错误';
$messages['error_incorrect_blog_id'] = '博客标识号错误';
$messages['error_comment_without_text'] = '请您填写评论正文';
$messages['error_comment_without_name'] = '请您填写称呼';
$messages['error_adding_comment'] = '添加评论时出错';
$messages['error_incorrect_parameter'] = '参数不正确';
$messages['error_parameter_missing'] = '参数不全';
$messages['error_comments_not_enabled'] = '该博客关闭了评论功能';
$messages['error_incorrect_search_terms'] = '该搜索条件无效';
$messages['error_no_search_results'] = '搜索条件不匹配';
$messages['error_no_albums_defined'] = '该博客中无可用文件夹';

/////////////////                                          //////////////////
///////////////// STRINGS FOR THE ADMINISTRATION INTERFACE //////////////////
/////////////////                                          //////////////////

// login page
$messages['login'] = '登陆';
$messages['welcome_message'] = '欢迎进入Plog';
$messages['error_incorrect_username_or_password'] = '对不起，您的用户名或者密码不正确。';
$messages['error_dont_belong_to_any_blog'] = '对不起，您尚未加入任何博客。';
$messages['logout_message'] = '您已经成功退出。';
$messages['logout_message_2'] = '点击 <a href="%1$s">这里</a> 进入 %2$s</a>.';
$messages['error_access_forbidden'] = '访问受限。您需要首先得到认证或通过。';
$messages['username'] = '用户名';
$messages['password'] = '密码';

// dashboard
$messages['dashboard'] = '控制面板';
$messages['recent_articles'] = '最新文章';
$messages['recent_comments'] = '最新评论';
$messages['recent_trackbacks'] = '最新引用';
$messages['blog_statistics'] = '博客统计';
$messages['total_posts'] = '总文章数';
$messages['total_comments'] = '总评论数';
$messages['total_trackbacks'] = '总引用数';
$messages['total_viewed'] = '总浏览数';
$messages['in'] = '目标文章';

// menu options
$messages['newPost'] = '发表文章';
$messages['Manage'] = '管理面板';
$messages['managePosts'] = '文章管理';
$messages['editPosts'] = '文章列表';
$messages['editArticleCategories'] = '编辑文章分类';
$messages['newArticleCategory'] = '新建文章分类';
$messages['manageLinks'] = '链接管理';
$messages['editLinks'] = '链接列表';
$messages['newLink'] = '新建链接';
$messages['editLink'] = '编辑链接';
$messages['editLinkCategories'] = '链接分类';
$messages['newLinkCategory'] = '新建链接分类';
$messages['editLinkCategory'] = '编辑链接分类';
$messages['manageCustomFields'] = '管理自定义区块';
$messages['blogCustomFields'] = '自定义区块';
$messages['newCustomField'] = '新建自定义区块';
$messages['resourceCenter'] = '资源中心';
$messages['resources'] = '资源列表';
$messages['newResourceAlbum'] = '新建资源文件夹';
$messages['newResource'] = '新建资源';
$messages['controlCenter'] = '控制中心';
$messages['manageSettings'] = '设置';
$messages['blogSettings'] = '博客设置';
$messages['userSettings'] = '用户设置';
$messages['pluginCenter'] = '插件中心';
$messages['Stats'] = '统计资料';
$messages['manageBlogUsers'] = '用户管理';
$messages['newBlogUser'] = '添加新用户';
$messages['showBlogUsers'] = '用户列表';
$messages['manageBlogTemplates'] = '模板管理';
$messages['newBlogTemplate'] = '新建模板';
$messages['blogTemplates'] = '模板列表';
$messages['adminSettings'] = '管理设置';
$messages['Users'] = '用户管理';
$messages['createUser'] = '创建用户';
$messages['editSiteUsers'] = '用户列表';
$messages['Blogs'] = '博客管理';
$messages['createBlog'] = '创建博客';
$messages['editSiteBlogs'] = '博客列表';
$messages['Locales'] = '语言包管理';
$messages['newLocale'] = '添加语言包';
$messages['siteLocales'] = '语言包列表';
$messages['Templates'] = '模板管理';
$messages['newTemplate'] = '创建模板';
$messages['siteTemplates'] = '模板列表';
$messages['GlobalSettings'] = '全局设置';
$messages['editSiteSettings'] = '常规设置';
$messages['summarySettings'] = '汇总设置';
$messages['templateSettings'] = '模板设置';
$messages['urlSettings'] = 'URL设置';
$messages['emailSettings'] = '邮件设置';
$messages['uploadSettings'] = '上传设置';
$messages['helpersSettings'] = '帮助设置';
$messages['interfacesSettings'] = '接口设置';
$messages['securitySettings'] = '安全设置';
$messages['bayesianSettings'] = '过滤设置';
$messages['resourcesSettings'] = '资源中心设置';
$messages['searchSettings'] = '搜索设置';
$messages['cleanUpSection'] = '清理垃圾';
$messages['cleanUp'] = '清理垃圾';
$messages['editResourceAlbum'] = '编辑资源夹';
$messages['resourceInfo'] = '编辑资源';
$messages['editBlog'] = '编辑博客';
$messages['Logout'] = '注销';

// new post
$messages['topic'] = '标题';
$messages['topic_help'] = '在这里输入文章标题';
$messages['text'] = '文章内容';
$messages['text_help'] = '摘要内容：（该部分内容将在您的首页显示）';
$messages['extended_text'] = '扩展内容';
$messages['extended_text_help'] = '扩展内容：（该部分可以通过后台设置决定是否显示在首页中或仅仅出现在文章内容中，在博客设置中会找到更多信息。';
$messages['post_slug'] = '文章代成';
$messages['post_slug_help'] = '文章代成可以为文章标题生成静态地址。';
$messages['date'] = '日期';
$messages['post_date_help'] = '发表文章的日期';
$messages['status'] = '文章状态';
$messages['post_status_help'] = '选择文章状态';
$messages['post_status_published'] = '公开';
$messages['post_status_draft'] = '草稿';
$messages['post_status_deleted'] = '已删除';
$messages['categories'] = '文章分类';
$messages['post_categories_help'] = '选择一个或多个分类';
$messages['post_comments_enabled_help'] = '允许回复';
$messages['send_notification_help'] = '发送新回复通知';
$messages['send_trackback_pings_help'] = '发送引用通告';
$messages['send_xmlrpc_pings_help'] = '发送XMLRPC pings';
$messages['save_draft_and_continue'] = '保存草稿';
$messages['preview'] = '文章预览';
$messages['add_post'] = '发表该文章';
$messages['error_saving_draft'] = '保存草稿过程中出错';
$messages['draft_saved_ok'] = '保存草稿成功';
$messages['error_sending_request'] = '发送请求时出错';
$messages['error_no_category_selected'] = '请您至少选择一个文章分类';
$messages['error_missing_post_topic'] = '请您输入文章标题';
$messages['error_missing_post_text'] = '请您输入文章内容';
$messages['error_adding_post'] = '添加文章时发生错误';
$messages['post_added_not_published'] = '添加文章成功但未发布';
$messages['post_added_ok'] = '添加文章成功';
$messages['send_notifications_ok'] = '有新评论或引用时将向您发送通告。';

// send trackbacks
$messages['error_sending_trackbacks'] = '发送以下引用通知时发生错误';
$messages['send_trackbacks_help'] = '请选择您所要发送引用通告的网址。(请确定该网站站支持引用通告功能)';
$messages['send_trackbacks'] = '发送引用通知';
$messages['ping_selected'] = '向选定的网址发送引用通知';
$messages['trackbacks_sent_ok'] = '引用通知已成功发送到选定的网址';

// posts page
$messages['show_by'] = '显示';
$messages['category'] = '文章分类';
$messages['author'] = '作者';
$messages['post_status_all'] = '全部状态';
$messages['author_all'] = '全部作者';
$messages['search_terms'] = '搜索条件';
$messages['show'] = '显示';
$messages['delete'] = '删除';
$messages['actions'] = '激活';
$messages['all'] = '全部';
$messages['category_all'] = '全部分类';
$messages['error_incorrect_article_id'] = '不正确的文章标识';
$messages['error_deleting_article'] = '删除文章 "%s" 时发生错误';
$messages['article_deleted_ok'] = '文章 "%s" 删除成功';
$messages['articles_deleted_ok'] = '文章 %s 删除成功';
$messages['error_deleting_article2'] = '删除文章 "%s" 时发生错误';

// edit post page
$messages['update'] = '修改';
$messages['editPost'] = '编辑文章';
$messages['error_fetching_post'] = '读取文章时出错';
$messages['post_updated_ok'] = '文章 "%s" 更新成功';
$messages['error_updating_post'] = '更新文章时出错';
$messages['notification_added'] = '有新评论或引用时您将收到通告。';
$messages['notification_removed'] = '有新评论或引用时不发送通告。';

// post comments
$messages['url'] = 'URL';
$messages['comment_status_all'] = '全部';
$messages['comment_status_spam'] = '垃圾评论';
$messages['comment_status_nonspam'] = '无垃圾评论';
$messages['error_fetching_comments'] = '读取文章评论时出错';
$messages['error_deleting_comments'] = '删除文章评论时出错或无未选择任何评论';
$messages['comment_deleted_ok'] = '评论 "%s" 删除成功';
$messages['comments_deleted_ok'] = '评论 %s 删除成功';
$messages['error_deleting_comment'] = '删除评论 "%s" 时出错';
$messages['error_deleting_comment2'] = '删除评论 %s 时出错';
$messages['editComments'] = '编辑评论';
$messages['mark_as_spam'] = '标记为垃圾评论';
$messages['mark_as_no_spam'] = '标记为非垃圾评论';
$messages['error_incorrect_comment_id'] = '评论标识错误';
$messages['error_marking_comment_as_spam'] = '标记垃圾评论时出错';
$messages['comment_marked_as_spam_ok'] = '该评论已成功标记为垃圾评论';
$messages['error_marking_comment_as_nonspam'] = '去除垃圾评论标记时出错';
$messages['comment_marked_as_nonspam_ok'] = '成功去除垃圾评论标记';

// post trackbacks
$messages['blog'] = '博客站点';
$messages['excerpt'] = '引用内容';
$messages['error_fetching_trackbacks'] = '读取引用时出错';
$messages['error_deleting_trackbacks'] = '删除引用时出错或未选择任何引用';
$messages['error_deleting_trackback'] = '删除引用 "%s" 时出错';
$messages['error_deleting_trackback2'] = '删除引用 "%s" 时出错';
$messages['trackback_deleted_ok'] = '引用 "%s" 删除成功';
$messages['trackbacks_deleted_ok'] = '引用 %s 删除成功';
$messages['editTrackbacks'] = '引用';

// post statistics
$messages['referrer'] = '逆向链接';
$messages['hits'] = '点击数';
$messages['error_no_items_selected'] = '未选择删除任何选项';
$messages['error_deleting_referrer'] = '删除逆向链接 "%s" 时出错';
$messages['error_deleting_referrer2'] = '删除逆向链接 "%s" 时出错';
$messages['referrer_deleted_ok'] = '逆向链接 "%s" 删除成功';
$messages['referrers_deleted_ok'] = '逆向链接 "%s" 删除成功';

// categories
$messages['posts'] = '文章数';
$messages['show_in_main_page'] = '是否在首页显示';
$messages['error_incorrect_category_id'] = '分类标识错误或未选择项目';
$messages['error_category_has_articles'] = '分类 "%s" 已被文章使用，请先编辑这些文章再删除该分类。';
$messages['category_deleted_ok'] = '分类 "%s" 成功删除';
$messages['categories_deleted_ok'] = '分类 "%s" 成功删除';
$messages['error_deleting_category'] = '删除分类"%s"时出错';
$messages['error_deleting_category2'] = '删除分类"%s"时出错';
$messages['yes'] = '是';
$messages['no'] = '否';

// new category
$messages['name'] = '分类名称';
$messages['category_name_help'] = '分类名称将显示在首页';
$messages['description'] = '描述';
$messages['category_description_help'] = '该分类的详细描述';
$messages['show_in_main_page_help'] = '该分类是否在首页显示';
$messages['error_empty_name'] = '你必须输入分类名称';
$messages['error_empty_description'] = '你必须输入分类描述';
$messages['error_adding_article_category'] = '添加新分类时出错，请检查输入重试';
$messages['category_added_ok'] = '分类 "%s" 成功添加到系统中';
$messages['add'] = '添加';
$messages['reset'] = '重置';

// update category
$messages['error_updating_article_category'] = '修改分类时出错';
$messages['error_fetching_category'] = '读取分类时出错';
$messages['article_category_updated_ok'] = '分类"%s"修改成功';

// links
$messages['feed'] = 'Feed';
$messages['error_no_links_selected'] = '链接标识错误或未选择项目';
$messages['error_incorrect_link_id'] = '链接标识错误';
$messages['error_removing_link'] = '删除链接"%s"时出错';
$messages['error_removing_link2'] = '删除链接"%s"时出错';
$messages['link_deleted_ok'] = '链接 "%s" 删除成功';
$messages['links_deleted_ok'] = '链接 %s 删除成功';

// new link
$messages['link_name_help'] = '链接名称';
$messages['link_url_help'] = '链接地址';
$messages['link_description_help'] = '链接描述';
$messages['link_feed_help'] = '链接Feed地址';
$messages['link_category_help'] = '选择一个有效的链接分类';
$messages['error_adding_link'] = '添加链接时出错，请检查数据并重试';
$messages['error_invalid_url'] = '地址错';
$messages['link_added_ok'] = '链接 "%s" 添加成功';

// update link
$messages['error_updating_link'] = '修改链接时出错，请检查数据并重试。';
$messages['error_fetching_link'] = '读取链接时出错';
$messages['link_updated_ok'] = '链接 "%s" 修改成功';

// link categories
$messages['links'] = '网站链接';
$messages['error_invalid_link_category_id'] = '该链接分类标识出错或未选择项目';
$messages['error_links_in_link_category'] = '有链接使用链接分类 "%s" ，请首先修改链接再重试';
$messages['error_removing_link_category'] = '删除链接分类 "%s"时出错';
$messages['link_category_deleted_ok'] = '链接 "%s" 删除成功';
$messages['link_categories_deleted_ok'] = '链接 "%s" 删除成功';
$messages['error_removing_link_category2'] = '删除链接分类 "%s"时出错';

// new link category
$messages['link_category_name_help'] = '新链接分类名称';
$messages['error_adding_link_category'] = '添加新链接时出错';
$messages['link_category_added_ok'] = '链接分类 "%s" 添加成功';

// edit link category
$messages['error_updating_link_category'] = '修改链接分类时出错，请检查数据并重试';
$messages['link_category_updated_ok'] = '链接分类 "%s" 修改成功';
$messages['error_fetching_link_category'] = '读取链接分类时出错';

// custom fields
$messages['type'] = '类型';
$messages['hidden'] = '是否隐藏';
$messages['fields_deleted_ok'] = '自定义区块 %s 删除成功';
$messages['field_deleted_ok'] = '自定义区块 "%s" 删除成功';
$messages['error_deleting_field'] = '删除自定义区块 "%s" 时出错';
$messages['error_deleting_field2'] = '删除自定义区块 "%s" 时出错';
$messages['error_incorrect_field_id'] = '自定义区块标识无效';

// new custom field
$messages['field_name_help'] = '在文章中将作为该区块的标识';
$messages['field_description_help'] = '该区块的概要描述将在添加或修改文章时显示';
$messages['field_type_help'] = '选择有效区块的类型';
$messages['field_hidden_help'] = '如果一个区块隐藏，那么它在添加或编辑文章时不会显示出来。这个功能主要应用在插件中。';
$messages['error_adding_custom_field'] = '添加自定义区块时出错，请检查数据并重试';
$messages['custom_field_added_ok'] = '自定义区块 "%s" 添加成功';
$messages['text_field'] = '文本区域';
$messages['text_area'] = '文本框';
$messages['checkbox'] = '多选框';
$messages['date_field'] = '日期选择';

// edit custom field
$messages['error_fetching_custom_field'] = '读取自定义区块时出错';
$messages['error_updating_custom_field'] = '修改自定义区块时出错，请检查数据并重试';
$messages['custom_field_updated_ok'] = '自定义区块 "%s" 修改成功';

// resources
$messages['root_album'] = '根文件夹';
$messages['num_resources'] = '资源数量';
$messages['total_size'] = '总使用空间';
$messages['album'] = '文件夹';
$messages['error_incorrect_album_id'] = '资源标识出错';
$messages['error_base_storage_folder_missing_or_unreadable'] = 'plog中不能创建必要的存放资源的文件夹。这可能由多种原因造成，比如你的php使用安全模式安装运行或者你的用户没有足够权限。你仍然可以手动进行操作，创建文件夹: <br/><br/>%s<br/><br/>如果这些文件夹已经存在，请确定她们可通过用户运行web服务器进行读写。';
$messages['items_deleted_ok'] = '项目%s删除成功';
$messages['error_album_has_children'] = '文件夹 "%s" 有子文件夹. 请先编辑该文件夹再重试。';
$messages['item_deleted_ok'] = '项目%s删除成功';
$messages['error_deleting_album'] = '删除文件夹 "%s" 时出错';
$messages['error_deleting_album2'] = '删除文件夹 "%s" 时出错';
$messages['error_deleting_resource'] = '删除文件"%s"时出错';
$messages['error_deleting_resource2'] = '删除文件"%s"时出错';
$messages['error_no_resources_selected'] = '没有选择删除的项目';
$messages['resource_deleted_ok'] = '资源"%s"被成功删除';
$messages['album_deleted_ok'] = '文件夹"%s"被成功删除';
$messages['add_resource'] = '添加资源';
$messages['add_resource_preview'] = '添加预览';
$messages['add_resource_medium'] = '添加中型预览';
$messages['add_album'] = '添加文件夹';

// new album
$messages['album_name_help'] = '该文件夹的名称';
$messages['parent'] = '上级文件夹';
$messages['no_parent'] = '无上级文件夹';
$messages['parent_album_help'] = '使用这个选项使得文件夹下包含文件夹以便更好的管理文件';
$messages['album_description_help'] = '文件夹内容的详细描述';
$messages['error_adding_album'] = '添加新文件夹出错，请检查数据并重试。';
$messages['album_added_ok'] = '文件夹 "%s" 成功添加';

// edit album
$messages['error_incorrect_album_id'] = '文件夹表示错误';
$messages['error_fetching_album'] = '读取文件夹时出错';
$messages['error_updating_album'] = '修改文件夹时出错，请检查数据重试';
$messages['album_updated_ok'] = '文件夹 "%s" 修改成功';
$messages['show_album_help'] = '如果禁用，文件夹将不显示在博客的可用文件夹列表中';

// new resource
$messages['file'] = '文件';
$messages['resource_file_help'] = '添加文件到当前博客中。使用“添加多个文件”链接同时上传多个文件';
$messages['add_field'] = '添加多个文件';
$messages['resource_description_help'] = '该文件的详细描述';
$messages['resource_album_help'] = '选择该文件要添加到哪个文件夹';
$messages['error_no_resource_uploaded'] = '未选择任何待上传文件';
$messages['resource_added_ok'] = '文件 "%s" 添加成功';
$messages['error_resource_forbidden_extension'] = '该文件类型被禁用，不可添加';
$messages['error_resource_too_big'] = '文件太大，不可添加';
$messages['error_uploads_disabled'] = '禁止上传文件';
$messages['error_quota_exceeded'] = '文件配额超容，不可添加文件';
$messages['error_adding_resource'] = '添加资源文件时出错';

// edit resource
$messages['editResource'] = '编辑资源';
$messages['resource_information_help'] = '以下是一些关于资源文件的信息。';
$messages['information'] = '文件信息';
$messages['size'] = '文件大小';
$messages['format'] = '文件格式';
$messages['dimensions'] = '滤镜';
$messages['bits_per_sample'] = '文件样本位数';
$messages['sample_rate'] = '样本率';
$messages['number_of_channels'] = '通道数';
$messages['legnth'] = '长度';
$messages['thumbnail_format'] = '缩略图格式';
$messages['regenerate_preview'] = '重新生成预览';
$messages['error_fetching_resource'] = '读取文件时出错';
$messages['error_updating_resource'] = '修改文件时出错';
$messages['resource_updated_ok'] = '文件 "%s" 修改成功';

// blog settings
$messages['blog_link'] = '博客地址';
$messages['blog_link_help'] = '该博客网站的永久地址';
$messages['blog_name_help'] = '博客名称';
$messages['blog_description_help'] = '该博客的详细描述';
$messages['language'] = '语言';
$messages['blog_language_help'] = '选择博客前台和管理的语言';
$messages['max_main_page_items'] = '首页文章数量';
$messages['max_main_page_items_help'] = '显示在该博客首页的最大文章数量';
$messages['max_recent_items'] = '近期文章数量';
$messages['max_recent_items_help'] = '显示在首页中的最新发表的最大文件数量';
$messages['template'] = '模板';
$messages['choose'] = '选择';
$messages['blog_template_help'] = '选择该博客应用的模板， 这个列表包括了所有的为该博客安装的模板';
$messages['use_read_more'] = '在文章中使用扩展内容';
$messages['use_read_more_help'] = '如果启用该选项，在首页只显示文章内容，而不显示扩展内容。如果需要显示扩展内容的话，每个文章末尾会出现一个“查看全文”的链接';
$messages['enable_wysiwyg'] = '使用所见即所得编辑器编辑文章';
$messages['enable_wysiwyg_help'] = '启用所见即所得编辑器编辑文章的html代码.该编辑器只能使用在IE5.5以上或Mozilla 1.3以上浏览器中';
$messages['enable_comments'] = '默认允许评论文章';
$messages['enable_comments_help'] = '默认开放对所有文章的评论留言权限.';
$messages['show_future_posts'] = '显示将来的文章';
$messages['show_future_posts_help'] = '以将来日期发表的文章是否对其它用户可见';
$messages['comments_order'] = '评论留言排序方式';
$messages['comments_order_help'] = '在首页中评论的排序方式';
$messages['oldest_first'] = '旧的在前';
$messages['newest_first'] = '新的在前';
$messages['categories_order'] = '文章分类排序方式';
$messages['categories_order_help'] = '在首页中文章分类的排序方式';
$messages['most_recent_updated_first'] = '最近更新最多的在前';
$messages['alphabetical_order'] = '按字母正序排列';
$messages['reverse_alphabetical_order'] = '按字母倒序排列';
$messages['most_articles_first'] = '文章最多的在前';
$messages['link_categories_order'] = '链接分类排序方式';
$messages['link_categories_order_help'] = '在首页中链接分类的排序方式';
$messages['most_links_first'] = '链接最多的在前';
$messages['most_links_last'] = '链接最多的在后';
$messages['time_offset'] = '时差';
$messages['time_offset_help'] = '您的博客服务器与您所在地的时差 ';
$messages['close'] = '关闭';
$messages['select'] = '选择';
$messages['error_updating_settings'] = '更新博客设置时出错，请检查数据并重试。';
$messages['error_invalid_number'] = '数目不正确';
$messages['error_incorrect_time_offset'] = '时差无效';
$messages['blog_settings_updated_ok'] = '博客设置修改成功';
$messages['hours'] = '小时';

// user settings
$messages['username_help'] = '用户名称，不可修改';
$messages['full_name'] = '全名';
$messages['full_name_help'] = '用户的全名';
$messages['password_help'] = '修改密码，留空则密码保持不变。';
$messages['confirm_password'] = '确认密码';
$messages['email'] = '电子邮件';
$messages['email_help'] = '接收通知的电子邮件地址';
$messages['bio'] = '自我介绍';
$messages['bio_help'] = '自我的详细介绍';
$messages['picture'] = '形象图片';
$messages['user_picture_help'] = '从上传的图片中选择一个作为你的个人图片';
$messages['error_invalid_password'] = '密码不正确，请确认其长度是否过短';
$messages['error_passwords_dont_match'] = '对不起，密码不匹配';
$messages['error_incorrect_email_address'] = '电子邮件地址不正确';
$messages['error_updating_user_settings'] = '更新用户设置时出错，请检查数据并重试';
$messages['user_settings_updated_ok'] = '用户设置修改成功';
$messages['resource'] = '资源';

// plugin centre
$messages['identifier'] = '标识号';
$messages['error_plugins_disabled'] = '对不起，插件被禁用。';

// blog users
$messages['revoke_permissions'] = '取消使用权限';
$messages['error_no_users_selected'] = '位选择任何用户';
$messages['user_removed_from_blog_ok'] = '用户 "%s" 的该博客权限取消成功';
$messages['users_removed_from_blog_ok'] = '用户 "%s" 的该博客权限取消成功';
$messages['error_removing_user_from_blog'] = '取消用户 "%s" 的该博客权限时出错';
$messages['error_removing_user_from_blog2'] = '取消用户 "%s" 的该博客权限时出错';

// new blog user
$messages['new_blog_username_help'] = '待增加的对该博客管理和资源中心权限的用户的用户名';
$messages['send_notification'] = '发送通告';
$messages['send_user_notification_help'] = '向该用户发送一封通告邮件';
$messages['notification_text'] = '通告正文';
$messages['notification_text_help'] = '向用户发送的通告的正文';
$messages['error_adding_user'] = '添加该用户权限时出错，请检查数据并重试。';
$messages['error_empty_text'] = '您必须输入通告正文';
$messages['error_adding_user'] = '添加用户时出错，请检查数据并重试。';
$messages['error_invalid_user'] = '用户 "%s" 无效或不存在';
$messages['user_added_to_blog_ok'] = '添加用户 "%s" 的该博客权限成功';

// blog templates
$messages['error_no_templates_selected'] = '未选择任何模板';
$messages['error_template_is_current'] = '模板 "%s" 正在使用，不能删除。';
$messages['error_removing_template'] = '删除模板 "%s" 时出错';
$messages['template_removed_ok'] = '模板 "%s" 删除成功';
$messages['templates_removed_ok'] = '模板 %s 删除成功';

// new blog template
$messages['template_installed_ok'] = '模板 "%s" 添加成功';
$messages['error_installing_template'] = '安装模板 "%s" 时出错';
$messages['error_missing_base_files'] = '模板文件部分丢失';
$messages['error_add_template_disabled'] = '该站点此功能被禁用，不能添加新模板';
$messages['error_must_upload_file'] = '未上传模板文件';
$messages['error_uploads_disabled'] = '该站点禁止上传';
$messages['error_no_new_templates_found'] = '未找到新模板';
$messages['error_template_not_inside_folder'] = '模板文件所在文件夹的名称必须与模板设置中的名称相同。';
$messages['error_missing_base_files'] = '部分基本模板文件丢失';
$messages['error_unpacking'] = '解压缩文件时出错';
$messages['error_forbidden_extensions'] = '模板中有文件被禁止访问';
$messages['error_creating_working_folder'] = '创建临时文件夹解压缩文件时出错';
$messages['error_checking_template'] = '模板发生错误 (code = %s)';
$messages['template_package'] = '模板安装包';
$messages['blog_template_package_help']  = '您可以用此表单，上传一个新的模板安装包，该模板只有您的博客才能够使用。如果您无法用浏览器上传，请手动上传模板并将它放置于您的博客模板文件夹<b>%s</b>下,然后按下 "<b>扫描模板</b>" 按钮。 pLog 会扫描该文件夹并自动添加所找到的新模板。';
$messages['scan_templates'] = '扫描模板';

// site users
$messages['user_status_active'] = '激活';
$messages['user_status_disabled'] = '禁用';
$messages['user_status_all'] = '用户状态';
$messages['user_status_unconfirmed'] = '未确认';
$messages['error_invalid_user2'] = '标识为 "%s" 的用户不存在。';
$messages['error_deleting_user'] = '禁用用户 "%s" 时出错';
$messages['user_deleted_ok'] = '用户 "%s" 禁用成功';
$messages['users_deleted_ok'] = '用户 %s 禁用成功';

// create user
$messages['user_added_ok'] = '用户 "%s" 添加成功';
$messages['error_incorrect_username'] = '该用户名不正确或已经存在';
$messages['user_status_help'] = '该用户当前状态';
$messages['user_blog_help'] = '该用户最初被分配权限的博客';
$messages['none'] = '无';

// edit user
$messages['error_invalid_user'] = '用户标识不正确或该用户不存在';
$messages['error_updating_user'] = '更新用户设置时出错，请检查数据并重试';
$messages['blogs'] = '博客列表';
$messages['user_blogs_help'] = '该用户当前拥有的或有权限的博客';
$messages['site_admin'] = '管理员权限';
$messages['site_admin_help'] = '该用户是否具有管理员权限';
$messages['user_updated_ok'] = '用户 "%s" 修改成功';

// site blogs
$messages['blog_status_all'] = '博客状态';
$messages['blog_status_active'] = '激活';
$messages['blog_status_disabled'] = '禁用';
$messages['blog_status_unconfirmed'] = '未确认';
$messages['owner'] = '管理员';
$messages['quota'] = '配额';
$messages['bytes'] = '字节数';
$messages['error_no_blogs_selected'] = '您必须选择您想要禁用的博客网站。';
$messages['error_blog_is_default_blog'] = '"%s"是系统默认博客，无法禁用。';
$messages['blog_deleted_ok'] = '博客 "%s" 禁用成功';
$messages['blogs_deleted_ok'] = '博客 "%s" 禁用成功';
$messages['error_deleting_blog'] = '禁用博客"%s"时出错';
$messages['error_deleting_blog2'] = '禁用博客"%s"时出错';

// create blog
$messages['error_adding_blog'] = '添加博客时出错，请检查数据并重试。';
$messages['blog_added_ok'] = '博客 "%s" 添加成功';

// edit blog
$messages['blog_status_help'] = '博客状态';
$messages['blog_owner_help'] = '该博客的管理员';
$messages['users'] = '用户列表';
$messages['blog_quota_help'] = '设置资源中心的配额，设置为0则无限制，设置为空则使用全局配额';
$messages['blog_users_help'] = '拥有该博客权限的用户列表，从左侧选择一个到右侧可给予该用户该博客的权限';
$messages['edit_blog_settings_updated_ok'] = '博客 "%s" 修改成功';
$messages['error_updating_blog_settings'] = '修改博客 "%s" 时出错';
$messages['error_incorrect_blog_owner'] = '要设定为博客管理员的用户错误或不存在。';
$messages['error_fetching_blog'] = '读取博客设置时出错';
$messages['error_updating_blog_settings2'] = '更新博客设置时出错，请检查数据并重试。';
$messages['add_or_remove'] = '添加或删除用户';

// site locales
$messages['locale'] = '语言包管理';
$messages['locale_encoding'] = '编码';
$messages['locale_deleted_ok'] = '语言包 "%s" 删除成功';
$messages['error_no_locales_selected'] = '未选择要删除的语言包';
$messages['error_deleting_only_locale'] = '语言包只剩下一个，不能被删除';
$messages['locales_deleted_ok']= '语言包%s删除成功';
$messages['error_deleting_locale'] = '删除语言包 "%s" 时出错';
$messages['error_locale_is_default'] = '语言包 "%s" 是新博客的默认语言包，不能被删除';

// add locale
$messages['error_invalid_locale_file'] = '语言包文件无效';
$messages['error_no_new_locales_found'] = '未找到新语言包文件';
$messages['locale_added_ok'] = '语言包 "%s" 添加成功';
$messages['error_saving_locale'] = '存储新语言包时发生错误。请检查是否有语言包文件夹的写入权限。';
$messages['scan_locales'] = '扫描语言包';
$messages['add_locale_help'] = '您可以用此表单上传一个新的语言包。如果您无法用浏览器上传，请手动上传语言包并将它放置于 <b>./locales/</b>下,然后按下 "<b>扫描语言包</b>" 按钮。 pLog 会扫描该文件夹并自动添加新找到的语言包。 ';

// site templates
$messages['error_template_is_default'] = '模板 "%s" 是新博客默认模板，不能被删除。';

// add template
$messages['global_template_package_help'] = '您可以用此表单，上传一个新的模板安装包，该模板将提供给博客站点的所有博客使用。如果您无法用浏览器上传，请手动上传模板并将它放置于您的博客模板文件夹<b>%s</b>下,然后按下 "<b>扫描模板</b>" 按钮。 pLog 会扫描该文件夹并自动添加所找到的新模板。';

// global settings
$messages['site_config_saved_ok'] = '站点设置保存成功';
$messages['error_saving_site_config'] = '保存站点设置时出错';
/// general settings
$messages['help_comments_enabled'] = '默认启用或禁用新博客的评论功能';
$messages['help_beautify_comments_text'] = '启动该项，允许评论中添加图片和链接';
$messages['help_temp_folder'] = 'pLog系统执行某些操作时要用到的临时文件夹路径。';
$messages['help_base_url'] = '博客站点的基本链接地址';
$messages['help_subdomains_enabled'] = '启用或禁用二级域名.欲了解更多关于二级域名的信息请查阅帮助文档。';
$messages['help_subdomains_base_url'] = '当启用二级域名后，该基本地址将代替原有的地址，使用{blogname}和{username}标签来获得博客名和博客管理员的用户名';
$messages['help_include_blog_id_in_url'] = '该项目相当重要，一般或二级域名形式启用时，它将强制将内部一般链接不包含"blogId"参数。除非你非常清楚，否则不要修改该项设置。';
$messages['help_script_name'] = '如果你需要重命名index.php请修改该项';
$messages['help_show_posts_max'] = '首页默认可显示的最大文章数目';
$messages['help_recent_posts_max'] = '在首页“最新发表”列表中默认显示的文章数量.';
$messages['help_save_drafts_via_xmlhttprequest_enabled'] = '允许储存javascript和xmlhttp请求草稿';
$messages['help_locale_folder'] = '存储语言包文件的文件夹';
$messages['help_default_locale'] = '新建博客的默认语言设置';
$messages['help_default_blog_id'] = 'index.php默认显示的博客blogID';
$messages['help_default_time_offset'] = '新建博客的默认时差';
$messages['help_html_allowed_tags_in_comments'] = '评论中允许使用的HTML标签';
$messages['help_referer_tracker_enabled'] = '如果网站接收到的REQUEST请求中含有REFERER信息，是否将基本的REFERER信息存入数据库';
$messages['help_show_more_enabled'] = '是否启用“查看全文”链接功能';
$messages['help_update_article_reads'] = '您是否想启用站点内建的计数器，可以统计每篇文章的点击数。';
$messages['help_update_cached_article_reads'] = '是否当文章读取时，更新文章缓存';
$messages['help_xmlrpc_ping_enabled'] = '当发表新文章时，是否要向以下站点发送XMLRPC通告。';
$messages['help_send_xmlrpc_pings_enabled_by_default'] = '是否文章在发表或修改时默认发送引用通告';
$messages['help_xmlrpc_ping_hosts'] = '接受XMLRPC通告的网站列表，每个网址单独一行，数目不限。';
$messages['help_trackback_server_enabled'] = '是否接受其它网站发出的引用通告（TrackBack）。';
$messages['help_htmlarea_enabled'] = '是否启用所见即所得（WYSIWYG）文章编辑器。';
$messages['help_plugin_manager_enabled'] = '是否启用插件功能';
$messages['help_minimum_password_length'] = '密码最小长度';
$messages['help_xhtml_converter_enabled'] = '是否将HTML代码转换成XHTML代码';
$messages['help_xhtml_converter_aggressive_mode_enabled'] = '是否让plog生成XHTML代码，但这将更可能出错';
$messages['help_session_save_path'] = '使用PHP的session_save_path()函数，来更改pLog存放session的文件夹。请确认该文件夹被HTTP服务程序（如APACHE）拥有写权限。如果您要使用PHP预设的session存放路径，设定为空白即可。';
// summary settings
$messages['help_summary_page_show_max'] = '在汇总（SUMMARY）页面中要显示多少项目。';
$messages['help_summary_blogs_per_page'] = '汇总的博客列表中每页显示的博客数';
$messages['help_forbidden_usernames'] = '禁止注册的用户名列表';
$messages['help_force_one_blog_per_email_account'] = '每个电子邮件地址只限制注册一个博客';
$messages['help_summary_show_agreement'] = '是否在注册中显示协定文本让用户确认';
$messages['help_need_email_confirm_registration'] = '需要用户使用电子邮件进行认证';
$messages['help_summary_disable_registration'] = '是否关闭新博客注册';
// templates
$messages['help_template_folder'] = '存储模板的文件夹';
$messages['help_default_template'] = '新建博客的默认模板';
$messages['help_users_can_add_templates'] = '允许用户加入自己的模板';
$messages['help_template_compile_check'] = '如果禁用该项，模板文件变更时Smarty将检查所有的请求，可以提高更多性能。';
$messages['help_template_cache_enabled'] = '启用模板缓存';
$messages['help_template_cache_lifetime'] = '缓存保留时间，设置为-1则永久存留，设置为0则禁用缓存。';
$messages['help_template_http_cache_enabled'] = '启用HTTP条件请求的缓存支持。如果启用可以节省带宽。';
$messages['help_allow_php_code_in_templates'] = '允许在Smarty模板的{php}...{/php}块中嵌入PHP代码';
// urls
$messages['help_request_format_mode'] = '选择有效链接的格式.如果使用自定义链接，请确认以下设置';
$messages['plain'] = '简单格式';
$messages['search_engine_friendly'] = '适宜搜索引擎';
$messages['custom_url_format'] = '自定义链接';
$messages['help_permalink_format'] = '使用自定义链接时的静态地址格式';
$messages['help_category_link_format'] = '使用自定义链接时的文章分类的链接格式';
$messages['help_blog_link_format'] = '使用自定义链接时博客链接的格式';
$messages['help_archive_link_format'] = '使用自定义链接时文件归档的链接格式';
$messages['help_user_posts_link_format'] = '使用自定义链接时博客文章的链接格式';
$messages['help_post_trackbacks_link_format'] = '使用自定义链接时引用链接的链接格式';
$messages['help_template_link_format'] = '使用自定义链接时自定义静态模板页面的链接格式';
$messages['help_album_link_format'] = '使用自定义链接时资源中心的链接格式';
$messages['help_resource_link_format'] = '使用自定义链接时资源页面的链接格式';
$messages['help_resource_preview_link_format'] = '使用自定义链接时资源预览的链接格式';
$messages['help_resource_medium_size_preview_link_format'] = '使用自定义链接时中型资源预览的链接格式';
$messages['help_resource_download_link_format'] = '使用自定义链接时文件的链接格式';
// email
$messages['help_check_email_address_validity'] = '在用户申请注册新博客站点时，是否要认证他所填写的电子邮件地址';
$messages['help_email_service_enabled'] = '启用或禁用发送电子邮件功能';
$messages['help_post_notification_source_address'] = '系统通知邮件中的寄件人的电子邮件地址。';
$messages['help_email_service_type'] = '选择发送电子邮件的方式';
$messages['help_smtp_host'] = '如果选用SMTP发送电子邮件，请输入您要用来发送邮件的主机。';
$messages['help_smtp_port'] = '设置SMTP服务器的端口';
$messages['help_smtp_use_authentication'] = '启用或禁用SMTP服务器认证';
$messages['help_smtp_username'] = '如果SMTP服务器需要认证，请填写用户账号。';
$messages['help_smtp_password'] = '如果SMTP服务器需要认证，请填写用户密码。';
// helpers
$messages['help_path_to_tar'] = 'tar命令所在文件夹';
$messages['help_path_to_gzip'] = 'gzip命令所在文件夹';
$messages['help_path_to_bz2'] = 'bzip2命令所在文件夹';
$messages['help_path_to_unzip'] = 'unzip命令所在文件夹';
$messages['help_unzip_use_native_version'] = '使用自带的php包解压缩.zip文件。';
// uploads
$messages['help_uploads_enabled'] = '启用或禁用上传文件功能。这个功能会影响到用户能否上传新的模板或语言包以及及能否向现存模板中添加文件。';
$messages['help_maximum_file_upload_size'] = '允许用户上传文件的最大字节数。该项设置不能超过php中的设置';
$messages['help_upload_forbidden_files'] = '禁止用户上传的文件类型。你可以指定任意数量的文件类型，两个类型之间用空格分离。';
// interfaces
$messages['help_xmlrpc_api_enabled'] = '启用 XMLRPC 发表文章';
$messages['help_rdf_enabled'] = '启动Atom或RSS聚合';
$messages['help_default_rss_profile'] = '默认的RSS或Atom方式';
// security
$messages['help_security_pipeline_enabled'] = '是否启用安全以及所有相关插件。注意，这也会印象到其它的新插件。';
$messages['help_ip_address_filter_enabled'] = '是否启用ip地址过滤';
$messages['help_content_filter_enabled'] = '启用或禁用规则过滤，启动该项目时，需要打开安全功能。';
$messages['help_maximum_comment_size'] = '评论的最大字节数';
// bayesian filter
$messages['help_bayesian_filter_enabled'] = '启用或禁用过滤';
$messages['help_bayesian_filter_spam_probability_treshold'] = '判断为垃圾评论的最大极限';
$messages['help_bayesian_filter_nonspam_probability_treshold'] = '判断为垃圾评论的最小极限';
$messages['help_bayesian_filter_min_length_token'] = '重要标记的最小长度';
$messages['help_bayesian_filter_max_length_token'] = '重要标记的最大长度';
$messages['help_bayesian_filter_number_significant_tokens'] = '重要标记的数量';
$messages['help_bayesian_filter_spam_comments_action'] = '对于标记为垃圾的评论如何处理';
$messages['keep_spam_comments'] = '保留数据库中标记为垃圾的评论';
$messages['throw_away_spam_comments'] = '直接删除垃圾评论';
// resources
$messages['help_resources_enabled'] = '启用或禁用资源中心';
$messages['help_resources_folder'] = '存储资源文件的文件夹';
$messages['help_thumbnail_method'] = '生成缩略图的方法，如果使用PHP，支持GD方式';
$messages['help_path_to_convert'] = 'convert命令所在文件夹';
$messages['help_thumbnail_format'] = '缩略图存储格式';
$messages['help_thumbnail_height'] = '小型缩略图默认高度';
$messages['help_thumbnail_width'] = '小型缩略图默认宽度';
$messages['help_medium_size_thumbnail_height'] = '中型缩略图的默认高度';
$messages['help_medium_size_thumbnail_width'] = '中型缩略图的默认宽度';
$messages['help_thumbnails_keep_aspect_ratio'] = '生成缩略图时保留原有的长宽比例';
$messages['help_thumbnail_generator_force_use_gd1'] = '强迫使用 GD1-only 功能';
$messages['help_thumbnail_generator_user_smoothing_algorithm'] = '平滑缩略图.该功能只能在使用GD功能时使用。';
$messages['help_resources_quota'] = '博客的全局资源配额';
$messages['help_resource_server_http_cache_enabled'] = '启用对"If-Modified-Since" 标题和HTTP条件请求的支持.启用增强带宽存储。';
$messages['help_resource_server_http_cache_lifetime'] = '客户端使用资源缓存的时间';
$messages['same_as_image'] = '与原始图像相同';
// search
$messages['help_search_engine_enabled'] = '启动或禁止搜索引擎';
$messages['help_search_in_custom_fields'] = '搜索自定义区块';
$messages['help_search_in_comments'] = '搜索评论';

// cleanup
$messages['purge'] = '清除';
$messages['cleanup_spam'] = '清除垃圾回复';
$messages['cleanup_spam_help'] = '清除所有被使用者标示为垃圾的回复。一旦删除无法恢复。';
$messages['spam_comments_purged_ok'] = '垃圾回复清除成功';
$messages['cleanup_posts'] = '清除文章';
$messages['cleanup_posts_help'] = '清除所有被使用者标示为删除的文章。 一旦删除无法恢复。';
$messages['posts_purged_ok'] = '文章清除成功';

/// summary ///
// front page
$messages['summary'] = '汇总';
$messages['register'] = '注册';
$messages['summary_welcome'] = '欢迎';
$messages['summary_most_active_blogs'] = '最活跃的博客';
$messages['summary_most_commented_articles'] = '评论最多的文章';
$messages['summary_most_read_articles'] = '阅读最多的文章';
$messages['password_forgotten'] = '忘记密码？';
$messages['summary_newest_blogs'] = '最新开通的博客';
$messages['summary_latest_posts'] = '最近发表的文章';
$messages['summary_search_blogs'] = '搜索博客';

// blog list
$messages['updated'] = '更新';
$messages['total_reads'] = '浏览总次数';

// blog profile
$messages['blog'] = '博客';
$messages['latest_posts'] = '最近发表的文章';

// registration
$messages['register_step0_title'] = '接受服务协议';
$messages['agreement'] = '许可条款';
$messages['decline'] = '拒绝';
$messages['accept'] = '同意';
$messages['read_service_agreement'] = '请阅读服务协议，如果您同意的话，点击同意';
$messages['register_step1_title'] = '创建用户 [1/4]';
$messages['register_step1_help'] = '首先您需要创建一个新用户来获得博客。';
$messages['register_next'] = '下一步';
$messages['register_back'] = '上一步';
$messages['register_step2_title'] = '创建博客 [2/4]';
$messages['register_blog_name_help'] = '博客名称';
$messages['register_step3_title'] = '选择模板 [3/4]';
$messages['step1'] = '第一步';
$messages['step2'] = '第二步';
$messages['step3'] = '第三步';
$messages['register_step3_help'] = '请选择您的博客的默认模板。';
$messages['error_must_choose_template'] = '请选择一个模板';
$messages['select_template'] = '选择模板';
$messages['register_step5_title'] = '祝贺您！ [4/4]';
$messages['finish'] = '完成';
$messages['register_need_confirmation'] = '含有确认信息的电子邮件已经发送给您，请您点击其中的链接以激活您的博客。';
$messages['register_step5_help'] = '祝贺您，您的用户以及博客已经开通！';
$messages['register_blog_link'] = '如果您想访问您的博客，现在就进入吧！ <a href="%2$s">%1$s</a>';
$messages['register_blog_admin_link'] = '如果您想马上发表文章，请点击 <a href="admin.php">管理界面</a>进入后台进行操作。';
$messages['register_error'] = '进程中出错';
$messages['error_registration_disabled'] = '对不起，本站已暂停新用户注册，请稍候再试或联系管理员';
// registration article topic and text
$messages['register_default_article_topic'] = '祝贺您';
$messages['register_default_article_text'] = '如果您阅读到这篇文章，这就意味着您注册的博客已经申请成功。';
$messages['register_default_category'] = '一般分类';
// confirmation email
$messages['register_confirmation_email_text'] = '请点击下面的链接来激活您的博客:

%s

现在就进入博客世界吧！祝您天天快乐！';
$messages['error_invalid_activation_code'] = '对不起，认证码无效';
$messages['blog_activated_ok'] = '祝贺您，您注册的新用户和博客已经成功开通！';
// forgot your password?
$messages['reset_password'] = '重置密码';
$messages['reset_password_username_help'] = '待重置密码的用户名';
$messages['reset_password_email_help'] = '已有人使用该电子邮箱注册';
$messages['reset_password_help'] = '重置密码，请输入忘记密码的用户名以及注册时的电子邮件地址';
$messages['error_resetting_password'] = '重置密码时出错，请检查数据并重试。';
$messages['reset_password_error_incorrect_email_address'] = '电子邮箱地址不正确或其他用户使用此邮件注册';
$messages['password_reset_message_sent_ok'] = '利用注册电子邮件重置密码';
$messages['error_incorrect_request'] = '链接中的参数不正确';
$messages['change_password'] = '设置新密码';
$messages['change_password_help'] = '请输入并确认新密码';
$messages['new_password'] = '新密码';
$messages['new_password_help'] = '输入新密码';
$messages['password_updated_ok'] = '您的密码修改成功';

// Suggested by BCSE, some useful messages that not available in official locale
$messages['upgrade_information'] = '您所使用的浏览器不符合网页设计标准，因此本网页将以纯文字模式显示。如欲以最佳的排版方式浏览本站，请考虑<a href="http://www.webstandards.org/upgrade/" title="The Web Standards Project\'s Browser Upgrade initiative">升级</a>您的浏览器。';
$messages['jump_to_navigation'] = '移动到导航条。';
$messages['comment_email_never_display'] = '系统会自动为您设定分行，且不会显示您留下的邮件地址。';
$messages['comment_html_allowed'] = '可使用的 <acronym title="Hypertext Markup Language">HTML</acronym> 标签如下：&lt;<acronym title="用途：超级链接">a</acronym> href=&quot;&quot; title=&quot;&quot; rel=&quot;&quot;&gt; &lt;<acronym title="用途：首字下沉">acronym</acronym> title=&quot;&quot;&gt; &lt;<acronym title="用途：引用文字">blockquote</acronym> cite=&quot;&quot;&gt; &lt;<acronym title="用途：删除线">del</acronym>&gt; &lt;<acronym title="用途：斜体">em</acronym>&gt; &lt;<acronym title="用途：底线">ins</acronym>&gt; &lt;<acronym title="用途：粗体">strong</acronym>&gt;';
$messages['trackback_uri'] = '这篇文章的引用链接地址：';
$messages['previous_post'] = '上一篇';
$messages['next_post'] = '下一篇';
$messages['comment_default_title'] = '(无标题)';
$messages['guestbook'] = '留言板';
$messages['trackbacks'] = '引用';
$messages['menu'] = '新闻聚合';
$messages['albums'] = '资源中心';
$messages['admin'] = '管理控制台';
?>