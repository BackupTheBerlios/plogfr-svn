<?php
// set this to the encoding that should be used to display the pages correctly
$messages["encoding"] = "utf-8";
$messages["locale_description"] = "Russian locale file for pLog";

// days of the week
$messages["days"] = Array( "воскресенье", "понедельник", "вторник", "среда", "четверг", "пятница", "суббота" );
// -- compatibility, do not touch -- //
$messages["Monday"] = $messages["days"][1];
$messages["Tuesday"] = $messages["days"][2];
$messages["Wednesday"] = $messages["days"][3];
$messages["Thursday"] = $messages["days"][4];
$messages["Friday"] = $messages["days"][5];
$messages["Saturday"] = $messages["days"][6];
$messages["Sunday"] = $messages["days"][0];

// abbreviations
$messages["daysshort"] = Array( "Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб" );
// -- compatibility, do not touch -- //
$messages["Mo"] = $messages["daysshort"][1];
$messages["Tu"] = $messages["daysshort"][2];
$messages["We"] = $messages["daysshort"][3];
$messages["Th"] = $messages["daysshort"][4];
$messages["Fr"] = $messages["daysshort"][5];
$messages["Sa"] = $messages["daysshort"][6];
$messages["Su"] = $messages["daysshort"][0];

// months of the year
$messages["months"] = Array( "Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь" );
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

$messages["message"] = "Сообщение";
$messages["error"] = "Ошибка";

$messages["date"] = "Дата";

// miscellaneous texts
$messages["of"] = "";
$messages["recently"] = "НЕДАВНИЕ...";
$messages["comments"] = "комментарии";
$messages["comment on this"] = "комментировать";
$messages["my_links"] = "МОИ ССЫЛКИ";
$messages["archives"] = "АРХИВЫ";
$messages["search"] = "ПОИСК";
$messages["calendar"] = "КАЛЕНДАРЬ";
$messages["editLinkCategories"] = "КАТЕГОРИИ";
$messages["search_s"] = "ПОИСК";
$messages["link_tracker"] = "Link Tracker";
$messages["search_this_blog"] = "ИСКАТЬ В ЭТОМ BLOG:";
$messages["about_myself"] = "Кто я?";
$messages["permalink_title"] = "Постоянная ссылка к архивам";
$messages["permalink"] = "Постоянная ссылка";
$messages["posted_by"] = "Написал(а)";
$messages["on_the"] = "";
$messages["page"] = "странице";
$messages["posted"] = "Оставлено";

$messages["reply"] = "Ответить";


// add comment form
$messages["add_comment"] = "Добавить комментарий";
$messages["comment_topic"] = "Тема: ";
$messages["comment_text"] = "Текст: ";
$messages["comment_username"] = "Ваше имя: ";
$messages["comment_email"] = "Ваш email: ";
$messages["comment_url"] = "Ваш веб сайт: ";
$messages["comment_send"] = "Послать";
$messages["comment_added"] = "Комментарий добавлен!";
$messages["comment_add_error"] = "Ошибка при добавлении комментария";


$messages["article_does_not_exist"] = "Это сообщение не существует";
$messages["no_posts_found"] = "Постинг не найден";
$messages["user_has_no_posts_yet"] = "Данный пользователь еще не оставил сообщений";

$messages["info_about_myself"] = "Информация обо мне...";
$messages["back"] = "Назад";

$messages["back_top"] = "Наверх";

$messages["post"] = "Оставить";

$messages["trackbacks_for_article"] = "Trackbacks для статьи";
$messages["trackback_excerpt"] = "Выдержка";
$messages["trackback_weblog"] = "Weblog";

$messages["search_results"] = "Результаты поиска";
$messages["search_matching_results"] = "Следующие статьи удоволетворяют вашим критериям: ";
$messages["search_no_matching_posts"] = "Ничего не найдено";

$messages["see_all_link"] = "Посмотреть все существующие статьи";

$messages["read_more"] = "(Далее)";

$messages["anonymous_poster"] = "Анонимный пользователь";

$messages["syndicate"] = "SYNDICATE";

$messages["main"] = "Главная";

////// error messages /////
$messages["error_fetching_article"] = "Запрошенная статься не найдена.";
$messages["error_fetching_articles"] = "Невозможно извлечь запрошенные статьи.";
$messages["error_trackback_no_trackback"] = "Для этой статьи trackbacks не найдены.";
$messages["error_incorrect_article_id"] = "Идентификатор статьи не найден.";
$messages["error_incorrect_blog_id"] = "Идентификатор блога не найден.";
$messages["error_comment_without_text"] = "Необходимо оставить хоть какой-нибудь текст";
$messages["error_comment_without_name"] = "Необходимо оставить хотя бы имя или ник.";
$messages["error_adding_comment"] = "Ошибка при добавлении комментария к базе данных";
$messages["error_incorrect_parameter"] = "Неправильный параметр.";
$messages["error_parameter_missing"] = "В запросе недостает одного параметра.";
$messages["error_comments_not_enabled"] = "Комментарии к статьям отключены на этом сайте.";

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

$messages["help_editPosts"] = "<p>Click on the topic of the post to edit the post. You can also click on the
category of the post to have access to all the posts of that category. Posts can also be filtered
by author, status and category by using the drop down lists on top. Any combination of conditions
can be made. Click on the number of comments (only
available if the post has at least one comment) to have access to all the comments that have been
received so far for the post. </p>
<p>More than one post can be deleted at once by selecting the correct <b>'Delete'</b> checkbox and
clicking on the <b>'Delete Selected'</b> button.
<p>The <b>'Stats'</b> link will show some statistics about the posts, such as number of hits,
trackback pings received and referers.</p>";

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

$messages["help_editArticleCategories"] = "<p>This is a listing with all the post categories that
have been created so far. There must be at least one category before you can add an article, since
every article has to be categorized under a category. The <b>'Articles'</b> column shows how many
articles have been categorized under the given category. In the same way, a category can't be deleted
if it has an article assigned it; you must first remove all the articles and then you will be allowed
to remove the category.</p>
<p>You can delete more than one category at the same time by cheching their <b>'Delete'</b> column
and then clickin on the <b>'Delete Selected'</b> button.</p>";

$messages["help_newArticleCategory"] = "<p>From here you can add a new post category to the blog. All
what you need to provide is a name for the new category. Once it has been created, it will be available
for posts to be categorized under.</p>";

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

$messages["help_blogSettings"] = "<p>From this page you can change some of the settings that control the
behaviour or appearance of this journal. These are the settings: <ul>
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
<li><b>Cut long posts and add a 'More...' link</b>: Set this to <b>'Yes'</b> if you would like pLog
to automatically add a 'More...' link to your posts on the main page if they are too long (see the
setting below) This feature is useful since it makes your frontpage less cluttered and also
smaller. However, it has some problems if there is a lot of HTML code in the page.</li>
<li><b>Cut posts after how many characters</b>: Set this to the amount of characters you would like
to allow before adding the 'More...' link. This setting is only meaningful if you enabled the
feature above.</li>
<li><b>Enable WYSIWYG edition of texts</b>: Set this to yes if you would like to have the possibility
to see how your posts look in real time. This feature is only available for users using either
Internet Explorer 5.5 or higer and Mozilla 1.3b or higher.</li>
<li><b>Enable comments</b>: Set this to yes if you would like to allow your users to make comments to your
posts. This will globally affect all your posts and all your users.</li>
</ul></p>";

$messages["help_userSettings"] = "<p>Things related to your user profile can be changed from this
page. Please note that your username cannot be changed.<ul>
<li><b>Password, Confirm Password</b>: If you would like to change your password, please type it in
the first text box. Do the same in the second box to confirm that you entered the same password.</li>
<li><b>Email address</b>: Please set this to a valid email address if you would like to use features
such as the notification when a comment is received to a post. It is used only for internal
purposes and will not be publicly displayed.</li>
<li><b>Bio</b>: You can type here some information about yourself. It can be left empty.</li>
</ul></p>";

$messages["help_pluginCenter"] = "<p>From here you can see which plugins have been installed. For every
plugin, you will see its identifier (the identifier you have to use when developing templates and
want to make use of the plugin features), the author of the plugin, and some descriptive text with
various information about the plugin, mainly how to use it.</p>";

$messages["help_Stats"] = "<p>You can see from here all the referers that have hit this site in the past.
The <b>'Article'</b> column reflects which article was visited by the referer or the value <b>'0'</b>
if the referer visited the main page or any other page which was not an article. Finally, the
<b>'Last hit date'</b> column is the time of the last hit received from that referer.</p>";

$messages["editArticleCategory"] = "<p>Please provide a new name for the category you are updating.</p>";

$messages["editLink"] = "<p>You have to provide at least a url and a name for the link. The link must also
be categorized under a category.</p>";

$messages["editLinkCategory"] = "Please provide a new name for the link category you are updating.</p>";

$messages["blogSelect"] = "Please select one of the operations from the menu.";

$messages["Error"] = "There was an error while executing the requested operation. Please see
the main page for more information regarding the error.";

$messages["Message"] = "Please see the main page for more information regarding the message.";

//////// strings for the administration interface ///////



$messages["admin_interface_title"] = "pLog Административный интерфейс ";
$messages["administration"] = "Администрация ";
$messages["help"] = "Помощь";
$messages["plog_help"] = "pLog Помощь";
$messages["newPost"] = "Новый постинг";
$messages["editPosts"] = "Статьи";
$messages["editArticleCategories"] = "Категории";
$messages["admin_links"] = "Ссылки";
$messages["editLinkCategories"] = "Link Categories";
$messages["settings"] = "Установки";
$messages["Logout"] = "Выйти";

// new post page
$messages["topic"] = "Тема";
$messages["text"] = "Текст";
$messages["category"]  = "Категория";
$messages["status"] = "Статус";
$messages["post_status_draft"] = "Черновик";
$messages["post_status_published"] = "Опубликовано";
$messages["post_status_deleted"] = "Удалено";
$messages["post_status_all"] = "Все";
$messages["send_notification"] = "Уведомлять при каждом новом сообщении.";
$messages["send_trackback_pings"] = "Найти в статье ссылки и послать trackback pings тем из них которые это поддерживают.";
$messages["add_post"] = "Blog это!";

$messages["xmlrpc_ping_ok"] = "XML-RPC Ping был правильно послан к ";
$messages["error_sending_xmlrpc_ping"] = "Ошибка при попытке послать XML-RPC Ping к ";
$messages["error_sending_xmlrpc_ping_message"] = "Сообщение об ошибке: ";

$messages["preview"] = "Предварительный просмотр";
$messages["post_added"] = "Статья добавлена";
$messages["you_will_be_notified"] = "Дополнительно, Вы будете уведомлены в случае, когда что то происходит с этой статьей.";
$messages["post_added_not_published"] = "Статья добавлена, но не опубликована.";
$messages["error_adding_post"] = "Ошибка при добавлении статьи!";
$messages["error_must_fill_all_fields"] = "Заполните все поля!";
$messages["error_must_have_one_category"] = "Необходимо иметь хотя бы одну категорию, прежде чем добавлять статью.";

// send trackbacks page
$messages["send_trackback_pings"] = "Послать Trackback Pings";
$messages["links_found"] = "Следующие ссылки были найдены в Вашей статье. Выберете те, для которых хотите послать trackback ping (это может занять некоторое время)";
$messages["trackbacks_no_urls_selected"] = "Не было выбрано ни одного адреса, следовательно, ни одного trackback ping не послано.";
$messages["trackbacks_received_ok"] = "Следующие хосты успешно получили trackback ping:";
$messages["trackbacks_no_trackback"] = "Следующие ссылки не имеют действующих trackback адресов: ";
$messages["trackbacks_problems_sending"] = "Проблемы при попытке послать trackback pings следующим адресам. Если хотите можете попытаться послать pings снова.";
$messages["trackbacks_received_all_hosts"] = "Все хосты успешно получили trackback ping.";
$messages["ping_selected"] = "Ping выбранные сайты";

// edit posts
$messages["author"] = "Автор";
$messages["category_all"] = "Все";
$messages["author_all"] = "Все";
$messages["update"] = "Обновить";
$messages["date"] = "Дата";
$messages["help_Stats"] = "Stats";
$messages["delete"] = "Удалить";

$messages["delete_selected"] = "Удалить выбранные";

// edit post
$messages["edit_post"] = "Редактировать статью";
$messages["error_getting_post_to_update"] = "Ошибка при извлечении запрошенной статьи для редактирования.";
$messages["error_updating_post_in_database"] = "Ошибка базы данных при обновлении статьи";
$messages["post_successfully_updated"] = "Статья обновлена.";
$messages["notification_removed"] = "Функция извещения, активизированная у Вас для этой статьи удалена.";

// post statistics
$messages["statistics_for_post"] = "Статистика поста";
$messages["error_fetching_post"] = "Ошибка при извлечении запрошенной статьи.";
$messages["times_post_has_been_read"] = "Количество раз пост был прочтен: ";
$messages["referers"] = "Кто ссылался";
$messages["id"] = "Id";
$messages["url"] = "Url";
$messages["hits"] = "Счетчик/Hits";
$messages["trackbacks"] = "Trackbacks";

// post comments
$messages["error_fetching_comments"] = "Ошибка при извлечении комментариев к статье.";
$messages["comments_for_post"] = "Комментарии к статье ";
$messages["email"] = "E-Mail";
$messages["ip_address"] = "IP Aдрес";

// delete comments
$messages["error_no_comments_selected"] = "Нет выбранных комментариев для удаления.";
$messages["error_deleting_comment"] = "Ошибка при удалении комментария ";
$messages["comment_deleted_ok"] = "Комментарий с заголовком \"%s\" удален.";

// categories list
$messages["category_name"] = "Название";

// removing posts
$messages["post_cannot_be_deleted"] = "Невозможно удалить статью.";
$messages["no_posts_selected"] = "Для удаления ничего не выбрано.";
// %s = subject of the post, %d = identifier of the post. feel free to change its order
// but if you remove them there will be no information about which post was removed...
$messages["error_deleting_post"] = "Ошибка при удалении статьи\"%s\" (id = %d)";
$messages["post_deleted_ok"] = "Статья\"%2\$s\" удалена (id = %1\$d)";

// delete categories
$messages["no_categories_selected"] = "Для удаления не было выбрано ни одной категории.";
$messages["error_category_has_articles"] = "Невозможно удалить категорию \"%s\" так как в категории содержться как минимум 1 статья. Сначала удалите статьи, затем попробуйте снова.";
$messages["error_deleting_category"] = "Ошибка при удалении категории\"%s\" из базы данных.";
$messages["category_deleted_ok"] = "Категория \"%s\" удалена.";

// add category
$messages["newArticleCategory"] = "Добавить новую категорию";
$messages["add_new_category_info"] = "Предоставьте действущее название категории.";
$messages["category_added_ok"] = "Категория добавлена.";
$messages["error_adding_article_category"] = "Ошибка при добавлении категории.";

// edit categories
$messages["edit_category"] = "Редактировать категорию.";
$messages["please_provide_valid_category_name"] = "Предоставьте действущее название категории.";

$messages["error_incorrect_category_id"] = "Неправильный идентификатор категории";

// update the category
$messages["error_fetching_category"] = "Ошибка при извлечении категории.";
$messages["error_updating_category"] = "Ошибка при обновлении категории.";
$messages["error_empty_category_name"] = "Предоставте действительное имя категории";
$messages["category_updated_ok"] = "Категория обновлена.";

// edit links
$messages["link_name"] = "Название";
$messages["link_url"] = $messages["url"];
$messages["link_category"] = $messages["category"];
$messages["link_description"] = "Описание";
$messages["editLinks"] = "Ссылки";

// edit a link
$messages["error_provide_name_and_url"] = "Необходимо оставить как минимум название и адрес ссылки.";
$messages["error_invalid_link_id"] = "Идентификатор ссылки не действителен или не отсутствует.";
$messages["error_fetching_link"] = "Ошибка при извлечении ссылки.";
$messages["error_updating_link"] = "Ошибка при обновлении ссылки.";
$messages["link_updated_ok"] = "Ссылка обновлена!";
$messages["error_fetching_link_categories"] = "Ошибка приизвлечении категории ссылок.";

// add a link
$messages["add_new_link"] = "Добавить новую ссылку";
$messages["newLink"] = "Добавить ссылку";
$messages["error_adding_link"] = "Ошибка при добавлении ссылки.";
$messages["link_added_ok"] = "Ссылка добавлена.";
$messages["error_provide_name_and_url"] = "Необходимо оставить как минимум название и адрес ссылки.";
$messages["error_must_have_one_link_category"] = "Необходимо иметь как минимум 1 категорию ссылок прежде чем добавить ссылку.";

// delete a link
$messages["error_no_links_selected"] = "Для удаления не было выбрано ни одной ссылки.";
$messages["error_removing_link"] = "Ошибка при удалении ссылки\"%s\" из базы данных.";
$messages["link_deleted_ok"] = "Ссылка \"%s\" удалена из базы данных.";

// edit link categories
$messages["newLinkCategory"] = "Добавить новую категорию ссылок";
$messages["link_categories_help"] = "Необходимо иметь как минимум 1 категорию ссылок прежде чем добавить ссылку.";
$messages["link_category_name"] = "Название";
$messages["link_category_links"] = "Ссылки";

// new link category
$messages["newLinkCategory"] = "Добавить новую категорию ссылок";
$messages["new_link_category_info"] = "Категории ссылок помогут Вам классифицировать различные ссылки. Позже, Вы сможете  вывести на главную страницу Ваши сгруппированые ссылки используя данные категории.";
$messages["newLinkCategory"] = "Добавить категорию ссылок";
$messages["error_provide_link_category_name"] = "Предоставьте действущее название категории ссылок.";
$messages["error_adding_link_category"] = "Ошибка при добавлении категории ссылок.";
$messages["link_category_added_ok"] = "Категория ссылок добавлена.";

// edit link category
$messages["edit_link_category"] = "Редактировать категорию ссылок.";
$messages["error_updating_link_category"] = "Ошибка при обновлении категории ссылок.";
$messages["link_category_updated_ok"] = "Категория ссылок обновлена.";
$messages["error_fetching_link_category"] = "Ошибка при извлечении категории ссылок.";
$messages["error_incorrect_link_category_id"] = "Неправильный идентификатор категории ссылок";

// delete link categories
$messages["error_no_link_category_selected"] = "Для удаления не было выбрано ни одной категории ссылок";
$messages["error_links_in_link_category"] = "Невозможно удалить категорию \"%s\" так как в категории содержться как минимум 1 ссылка. Сначала удалите ссылки, затем попробуйте снова.";
$messages["error_removing_link_category"] = "Ошибка при удалении категории\"%s\".";
$messages["link_category_deleted_ok"] = "Категория ссылок \"%s\" удалена.";
// this error is shown when for some reason the category could not be fetched from the database
// and we can't show its name
$messages["error_removing_link_category_2"] = "Ошибка при удалении категории ссылок с id = %d";

// blog settings page
$messages["blogSettings"] = "Установки Blog ";
$messages["userSettings"] = "Профайл пользователя";
$messages["pluginCenter"] = "Plugin Center";
$messages["Stats"] = "Статистика";
$messages["blog_name"] = "Название Blog(а)";
$messages["long_blog_name"] = "Длинный текст для описания этого blog(а)";
$messages["language_used"] = "Язык для показа текста и дат.";
$messages["items_main_page"] = "Количество постов для показа на главной странице";
$messages["items_as_recent"] = "Количество постов для показа как \"Недавние\"?";
$messages["template_used"] = "Выберете шаблон, определяющий внешний вид blog(а)";
$messages["cut_posts"] = "Сократить слишком длинные статьи и добавить \"Далее...\" ссылку?";
$messages["cut_posts_after_characters"] = "Сколько знаков Вы хотите оставить в сокращеной статье?";
$messages["enable_wysiwyg_edition"] = "Включть WYSIWYG редактирование текстов (доступно только для Internet Explorer 5.5 и выше и Mozilla 1.3b и выше )?";
$messages["enable_comments"] = "Включить комментарии для всех постов?";
$messages["yes"] = "Да";
$messages["no"] = "Нет";
$messages["error_invalid_locale"] = "Неправильное значение для местных установок.";
$messages["error_incorrect_max_recent_items"] = "Предоставьте действительное число статей, которые хотите видеть в разделе Недавние.";
$messages["error_incorrect_number_of_posts"] = "Предоставьте действительное число статей, которые хотите видеть на главной странице.";
$messages["error_incorrect_template"] = "Неправильное значение шаблона.";
$messages["error_no_blog_name"] = "Предоставьте действительное название для blog(а).";
$messages["error_incorrect_show_more_threshold"] = "Предоставьте правильное количество знаков, которые хотите видеть в сокращеной статье перед линком \"Далее...\"";
$messages["error_updating_settings"] = "Ошибка при обновлении устанок.";
$messages["blog_settings_updated_ok"] = "Установки обновлены!";
$messages["permanent_blog_url"] = "Постоянный адрес этого blog(а) (read only)";

// user profile page
$messages["username"] = "Имя пользователя";
$messages["password"] = "Пароль";
$messages["confirm_password"] = "Потвердить пароль!";
$messages["email_address"] = "Email";
$messages["bio"] = "Биография";
$messages["empty_no_change"] = "Оставить пустым.";
$messages["user_settings_updated_ok"] = "Установки пользователя обновлены.";
$messages["error_updating_user_settings"] = "Ошибка при обновлении пользовательских установок.";
$messages["error_passwords_dont_match"] = "Пароль не совпадает.";
$messages["error_incorrect_password"] = "Неправильный пароль.";
$messages["error_incorrect_email_address"] = "Email недействителен.";

// plugin center page
$messages["plugins_available"] = "Список plugins для использования в шаблонах";
$messages["identifier"] = "Идентификатор";
$messages["description"] = "Описание";

$messages["error_plugins_disabled"] = "Поддержка plugins дляэтого сайта отключена.";

// statistics page
$messages["statistics_info"] = "Нулевой идентификатор статьи означает, что были посещения главной страницы, а не конкретной статьи";
$messages["article_id"] = "Идентификатор статьи  ";
$messages["last_hit_date"] = "Дата последнего прочтения";
$messages["error_fetching_referers"] = "Ошибка при извлечении ссылок на этот сайт";

// login screen
$messages["login_page_title"] = "pLog Административный интерфэйс";
$messages["login"] = "Войти";
$messages["welcome_message"] = "Добро пожаловать в pLog";
$messages["error_incorrect_username_or_password"] = "Неправильное имя пользователя или пароль.";
$messages["error_dont_belong_to_any_blog"] = "Вы еще не принадлежите blog(у).";
$messages["error_no_username_or_password"] = "Предоставьте действительное имя пользоватля или пароль.";
$messages["choose_one_blog"] = " У Вас есть следующие blog(и). Выберете с каким работать";
$messages["continue"] = "Продолжить";
$messages["logout_message"] = "Вы успешно вышли";
$messages["logout_message_2"] = "<a href=\"admin.php\">Нажмите сюда</a> что бы войти снова, или
<a href=\"%1\$s\">сюда что бы перейти %2\$s</a>.";
$messages["logout_title"] = "Logged out";
$messages["error_access_forbidden"] = "Доступ запрещен. Сначала пройдите идентификацию здесь.";

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


$messages["register_error_incorrect_username"] = "<li>Incorrect user name, please try again.<br/>";
$messages["register_error_incorrect_email"] = "<li>Email address is invalid, please try again. <br/>";
$messages["register_error_user_already_exist"] = "<li>There is already a user with that name, please try again.<br/>";
$messages["register_error_incorrect_password"] = "<li>Password is invalid, please try again. <br/>";
$messages["register_error_passwords_dont_match"] = "<li>Passwords do not match, please try again. <br/>";
$messages["register_error_adding_user"] = "Error adding the user: ";
$messages["register_error_creating_blog"] = "There was an error creating the new blog";
$messages["register_error_blog_name"] = "<li>You should choose a better name for the blog.<br/>" ;
?>
