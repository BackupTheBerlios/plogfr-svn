<?php
/*
	Русский перевод выполнен Пиффари Валерией www.italiano-russo.it
	Для замечаний и предложений admin@italia-ru.it 
	Адрес электронной почты указан для того, чтобы можно было сообщать мне об 	ошибках перевода. За технической поддержкой обращайтесь, пожалуйста, на 	официальный сайт http://www.plogworld.net 
*/

// Если возникают проблемы с определением кодировки, раскоментируйте эту строку
// header ("Content-Type: text/html; charset=utf-8");

// set this to the encoding that should be used to display the pages correctly
$messages['encoding'] = 'utf-8';
$messages['locale_description'] = 'Russian Translation';
// locale format, see Locale::formatDate for more information
$messages['date_format'] = '%d/%m/%Y %H:%M';

// days of the week
$messages['days'] = Array( 'Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота' );
// -- compatibility, do not touch -- //
$messages['Monday'] = $messages['days'][1];
$messages['Tuesday'] = $messages['days'][2];
$messages['Wednesday'] = $messages['days'][3];
$messages['Thursday'] = $messages['days'][4];
$messages['Friday'] = $messages['days'][5];
$messages['Saturday'] = $messages['days'][6];
$messages['Sunday'] = $messages['days'][0];

// abbreviations
$messages['daysshort'] = Array( 'Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб' );
// -- compatibility, do not touch -- //
$messages['Mo'] = $messages['daysshort'][1];
$messages['Tu'] = $messages['daysshort'][2];
$messages['We'] = $messages['daysshort'][3];
$messages['Th'] = $messages['daysshort'][4];
$messages['Fr'] = $messages['daysshort'][5];
$messages['Sa'] = $messages['daysshort'][6];
$messages['Su'] = $messages['daysshort'][0];

// months of the year
$messages['months'] = Array( 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь' );
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
$messages['message'] = 'Message';
$messages['error'] = 'Ошибка';
$messages['date'] = 'Дата';

// miscellaneous texts
$messages['of'] = 'of';
$messages['recently'] = 'Последние...';
$messages['comments'] = 'Комментарии';
$messages['comment on this'] = 'Комментарий';
$messages['my_links'] = 'Мои ссылки';
$messages['archives'] = 'Архивы';
$messages['search'] = 'Поиск';
$messages['calendar'] = 'Календарь';
$messages['search_s'] = 'Поиск';
$messages['search_this_blog'] = 'Поиск в этом дневнике:';
$messages['about_myself'] = 'Кто я?';
$messages['permalink_title'] = 'Постоянная ссылка на архивы';
$messages['permalink'] = 'Постоянная ссылка';
$messages['posted_by'] = 'Написал(а)';
$messages['reply'] = 'Ответ';

// add comment form
$messages['add_comment'] = 'Добавить комментарий';
$messages['comment_topic'] = 'Тема';
$messages['comment_text'] = 'Текст';
$messages['comment_username'] = 'Ваше имя';
$messages['comment_email'] = 'Адрес электронной почты (если имеется)';
$messages['comment_url'] = 'Ваша персональная страничка (если имеется)';
$messages['comment_send'] = 'Отправить';
$messages['comment_added'] = 'Комментарий добавлен!';
$messages['comment_add_error'] = 'Ошибка при отправке комментария';
$messages['article_does_not_exist'] = 'Сообщения не существует';
$messages['no_posts_found'] = 'Сообщений не найдено';
$messages['user_has_no_posts_yet'] = 'У пользователя еще нет сообщений';
$messages['back'] = 'Назад';
$messages['post'] = 'Сообщение';
$messages['trackbacks_for_article'] = 'Подписаться на сообщение: ';
$messages['trackback_excerpt'] = 'Извлечь';
$messages['trackback_weblog'] = 'Дневник';
$messages['search_results'] = 'Искать в найденном';
$messages['search_matching_results'] = 'По вашему поиску найдены следующие сообщения: ';
$messages['search_no_matching_posts'] = 'Не найдено соответствующих сообщений';
$messages['read_more'] = '(Еще)';
$messages['syndicate'] = 'Синдикат';
$messages['main'] = 'Главная';
$messages['about'] = 'Подробнее';
$messages['download'] = 'Загрузить';

////// error messages /////
$messages['error_fetching_article'] = 'Указанная вами статья не найдена.';
$messages['error_fetching_articles'] = 'Указанные вами статьи не найдены';
$messages['error_trackback_no_trackback'] = 'Обратные ссылки для статьи не найдены.';
$messages['error_incorrect_article_id'] = 'Неправильный идентификатор статьи.';
$messages['error_incorrect_blog_id'] = 'Неправильный идентификатор дневника.';
$messages['error_comment_without_text'] = 'Не набран текст сообщения.';
$messages['error_comment_without_name'] = 'Вы не указали свое имя.';
$messages['error_adding_comment'] = 'Ошибка при добавлении комментария.';
$messages['error_incorrect_parameter'] = 'Неправильный параметр.';
$messages['error_parameter_missing'] = 'В вашем запросе не хватает одного параметра.';
$messages['error_comments_not_enabled'] = 'На этом сайте комментарии отключены.';
$messages['error_incorrect_search_terms'] = 'Неправильные параметры поиска';
$messages['error_no_search_results'] = 'По вашему запросу ничего не найдено';
$messages['error_no_albums_defined'] = 'Нет доступных альбомов.';

/////////////////                                          //////////////////
///////////////// STRINGS FOR THE ADMINISTRATION INTERFACE //////////////////
/////////////////                                          //////////////////

// login page
$messages['login'] = 'Логин';
$messages['welcome_message'] = 'Добро пожаловать в дневник';
$messages['error_incorrect_username_or_password'] = 'Неправильное имя пользователя или пароль.';
$messages['error_dont_belong_to_any_blog'] = 'Извините, ваш дневник еще не создан.';
$messages['logout_message'] = 'Выход произведен успешно.';
$messages['logout_message_2'] = 'Нажмите <a href="%1$s">здесь</a> для того, чтобы перейти на %2$s</a>.';
$messages['error_access_forbidden'] = 'В доступе отказано. Сначала вы должны пройти авторизацию здесь';
$messages['username'] = 'Имя пользователя';
$messages['password'] = 'Пароль';

// dashboard
$messages['dashboard'] = 'Панель инструментов';
$messages['recent_articles'] = 'Последние статьи';
$messages['recent_comments'] = 'Последние комментарии';
$messages['recent_trackbacks'] = 'Последние обратные ссылки';
$messages['blog_statistics'] = 'Статистика дневника';
$messages['total_posts'] = 'Всего сообщений';
$messages['total_comments'] = 'Всего комментариев';
$messages['total_trackbacks'] = 'Всего обратных ссылок';
$messages['total_viewed'] = 'Всего просмотрено сообщений';
$messages['in'] = 'В';

// menu options
$messages['newPost'] = 'Новое сообщение';
$messages['Manage'] = 'Управление';
$messages['managePosts'] = 'Управление сообщениями';
$messages['editPosts'] = 'Сообщения';
$messages['editArticleCategories'] = 'Категории';
$messages['newArticleCategory'] = 'Новая категория';
$messages['manageLinks'] = 'Управление ссылками';
$messages['editLinks'] = 'Ссылки';
$messages['newLink'] = 'Новая ссылка';
$messages['editLink'] = 'Редактировать ссылку';
$messages['editLinkCategories'] = 'Категории ссылок';
$messages['newLinkCategory'] = 'Новая категория ссылок';
$messages['editLinkCategory'] = 'Редактировать категорию ссылок';
$messages['manageCustomFields'] = 'Управление персонализированными полями';
$messages['blogCustomFields'] = 'Персонализированные поля';
$messages['newCustomField'] = 'Новое персонализированное поле';
$messages['resourceCenter'] = 'Панель файлов';




$messages['resources'] = 'Файлы';
$messages['newResourceAlbum'] = 'Новый альбом';
$messages['newResource'] = 'Новый файл';
$messages['controlCenter'] = 'Панель управления';
$messages['manageSettings'] = 'Настройки';
$messages['blogSettings'] = 'Настройки дневника';
$messages['userSettings'] = 'Настройки пользователя';
$messages['pluginCenter'] = 'Управление плагинами';
$messages['Stats'] = 'Статистика';
$messages['manageBlogUsers'] = 'Управление пользователями дневника';
$messages['newBlogUser'] = 'Новый пользователь дневника';
$messages['showBlogUsers'] = 'Пользователи дневника';
$messages['manageBlogTemplates'] = 'Управление шаблонами дневника';
$messages['newBlogTemplate'] = 'Новый шаблон дневника';
$messages['blogTemplates'] = 'Шаблоны дневника';
$messages['adminSettings'] = 'Администрирование';
$messages['Users'] = 'Пользователи';
$messages['createUser'] = 'Создать пользователя';
$messages['editSiteUsers'] = 'Пользователи';
$messages['Blogs'] = 'Управление дневниками';
$messages['createBlog'] = 'Создать дневник';
$messages['editSiteBlogs'] = 'Дневники';
$messages['Locales'] = 'Управление переводами';
$messages['newLocale'] = 'Новый перевод';
$messages['siteLocales'] = 'Локализация сайта';
$messages['Templates'] = 'Управление шаблонами';
$messages['newTemplate'] = 'Новый шаблон';
$messages['siteTemplates'] = 'Шаблоны';
$messages['GlobalSettings'] = 'Общие настройки';
$messages['editSiteSettings'] = 'Общие';
$messages['summarySettings'] = 'Содержание';
$messages['templateSettings'] = 'Шаблоны';

$messages['urlSettings'] = 'Ссылки';
$messages['emailSettings'] = 'Электронная почта';
$messages['uploadSettings'] = 'Загрузки';
$messages['helpersSettings'] = 'Удаленные помощники';
$messages['interfacesSettings'] = 'Интерфейсы';
$messages['securitySettings'] = 'Безопасность';
$messages['bayesianSettings'] = 'Bayesian Filter';
$messages['resourcesSettings'] = 'Файлы';
$messages['searchSettings'] = 'Поиск';
$messages['cleanUpSection'] = 'Очистка';
$messages['cleanUp'] = 'Очистка';
$messages['editResourceAlbum'] = 'Редактировать альбом';
$messages['resourceInfo'] = 'Редактировать ресурс';
$messages['editBlog'] = 'Редактировать дневник';
$messages['Logout'] = 'Выход';

// new post
$messages['topic'] = 'Запись';


$messages['topic_help'] = 'Заголовок';
$messages['text'] = 'Краткий текст';
$messages['text_help'] = 'Краткое описание записи. Эта часть будет отображаться на главной странице ';
$messages['extended_text'] = 'Полный текст';
$messages['extended_text_help'] = 'Полный текст записи. Эта часть может по желанию появляться только на странице записи или на главной странице. Смотрите настройки дневника для подробной информации';
$messages['post_slug'] = 'Псевдоссылка';
$messages['post_slug_help'] = 'Псевдоссылка используется для генерации постоянной подходящей ссылки';
$messages['date'] = 'Дата';
$messages['post_date_help'] = 'Дата, когда эта запись будет опубликована';
$messages['status'] = 'Статус';
$messages['post_status_help'] = 'Выберите один из этих статусов';
$messages['post_status_published'] = 'Опубликовано';
$messages['post_status_draft'] = 'Черновик';
$messages['post_status_deleted'] = 'Удалено';
$messages['categories'] = 'Категории';
$messages['post_categories_help'] = 'Выберите одну или более категории';
$messages['post_comments_enabled_help'] = 'Включить комментарии';
$messages['send_notification_help'] = 'Уведомление о новых комментариях';
$messages['send_trackback_pings_help'] = 'Отправить обратные ссылки';
$messages['send_xmlrpc_pings_help'] = 'Послать проверку связи XMLRPC';
$messages['save_draft_and_continue'] = 'Сохранить черновик';
$messages['preview'] = 'Предв.просмотр';
$messages['add_post'] = 'В дневник!';
$messages['error_saving_draft'] = 'Ошибка при сохранении черновика';
$messages['draft_saved_ok'] = 'Черновик успешно сохранен';
$messages['error_sending_request'] = 'Ошибка при отправке запроса';
$messages['error_no_category_selected'] = 'Выберите хотя бы одну категорию';
$messages['error_missing_post_topic'] = 'Укажите заголовок записи';
$messages['error_missing_post_text'] = 'Наберите текст записи';
$messages['error_adding_post'] = 'Ошибка при добавлении записи';
$messages['post_added_not_published'] = 'Запись успешно добавлена, но не опубликована';
$messages['post_added_ok'] = 'Запись успешно добавлена.';
$messages['send_notifications_ok'] = 'Будет выслано уведомление, когда появится новые комментарии или обратные ссылки.';

// send trackbacks
$messages['error_sending_trackbacks'] = 'Ошибка при отправлении следующих обратных ссылок';
$messages['send_trackbacks_help'] = 'Выберите адреса, где вы хотите проверить связь для обратных ссылок. Убедитесь, что сайты поддерживают обратные ссылки.';
$messages['send_trackbacks'] = 'Послать обратные ссылки';
$messages['ping_selected'] = 'Пинг выбран';
$messages['trackbacks_sent_ok'] = 'Обратные ссылки были успешно отосланы на выбранные адреса';


// posts page
$messages['show_by'] = 'Упорядочить по';
$messages['category'] = 'Категории';
$messages['author'] = 'Автору';
$messages['post_status_all'] = 'Все';
$messages['author_all'] = 'Все';
$messages['search_terms'] = 'Поиск';
$messages['show'] = 'Показать';
$messages['delete'] = 'Удалить';
$messages['actions'] = 'Действия';
$messages['all'] = 'Все';
$messages['category_all'] = 'Все';
$messages['error_incorrect_article_id'] = 'Неправильный идентификатор записи';
$messages['error_deleting_article'] = 'Ошибка при удалении записи "%s"';
$messages['article_deleted_ok'] = 'Запись "%s" успешно удалена';
$messages['articles_deleted_ok'] = '%s записи успешно удалены';
$messages['error_deleting_article2'] = 'Ошибка при удалении записи с идентификатором "%s"';

// edit post page
$messages['update'] = 'Обновить';
$messages['editPost'] = 'Редактировать запись';
$messages['error_fetching_post'] = 'Ошибка при выводе записи';
$messages['post_updated_ok'] = 'Запись "%s" успешно отредактирована.';
$messages['error_updating_post'] = 'Ошибка при редактировании записи';
$messages['notification_added'] = 'Извещать о новых комментариях или обратных ссылках';
$messages['notification_removed'] = 'Не извещать о новых комментариях или обратных ссылках';

// post comments
$messages['url'] = 'Ссылка';
$messages['comment_status_all'] = 'Все';

$messages['comment_status_spam'] = 'Спам';
$messages['comment_status_nonspam'] = 'Не спам';
$messages['error_fetching_comments'] = 'Ошибка при выводе комментариев записи';
$messages['error_deleting_comments'] = 'Ошибка при удалении комментариев или не были выбраны комментарии';
$messages['comment_deleted_ok'] = 'Комментарий "%s" успешно удален';
$messages['comments_deleted_ok'] = '%s комментарии успешно удалены';
$messages['error_deleting_comment'] = 'Ошибка при удалении комментария "%s"';
$messages['error_deleting_comment2'] = 'Ошибка при удалении комментария с идентификатором %s';
$messages['editComments'] = 'Комментарии';
$messages['mark_as_spam'] = 'Пометить, как спам';
$messages['mark_as_no_spam'] = 'Пометить, как не спам';
$messages['error_incorrect_comment_id'] = 'Неправильный идентификатор комментария';
$messages['error_marking_comment_as_spam'] = 'Ошибка при пометке комментария, как спам';
$messages['comment_marked_as_spam_ok'] = 'Комментарий успешно помечен, как спам';
$messages['error_marking_comment_as_nonspam'] = 'Ошибка при пометке комментария, как не спам';
$messages['comment_marked_as_nonspam_ok'] = 'Комментарий успешно помечен, как не спам';

// post trackbacks
$messages['blog'] = 'Дневник';
$messages['excerpt'] = 'Извлечь';
$messages['error_fetching_trackbacks'] = 'Ошибка при выводе обратной ссылки';
$messages['error_deleting_trackbacks'] = 'Ошибка при удалении обратных ссылок или они не были выбраны';
$messages['error_deleting_trackback'] = 'Ошибка при удалении обратной ссылки "%s"';
$messages['error_deleting_trackback2'] = 'Ошибка при удалении обратной ссылки с идентификатором "%s"';
$messages['trackback_deleted_ok'] = 'Обратная ссылка "%s" успешно удалена';
$messages['trackbacks_deleted_ok'] = '%s обратные ссылки успешно удалены';

$messages['editTrackbacks'] = 'Обратные ссылки';

// post statistics
$messages['referrer'] = 'Обращения';
$messages['hits'] = 'Хиты';
$messages['error_no_items_selected'] = 'Ничего не выбрано для удаления';
$messages['error_deleting_referrer'] = 'Ошибка при удалении обращения "%s"';
$messages['error_deleting_referrer2'] = 'Ошибка при удалении обращения с идентификатором "%s"';
$messages['referrer_deleted_ok'] = 'Обращение "%s" успешно удалено';
$messages['referrers_deleted_ok'] = '%s обращения успешно удалены';

// categories
$messages['posts'] = 'Записи';
$messages['show_in_main_page'] = 'Показывать на главной странице';
$messages['error_incorrect_category_id'] = 'Неправильный идентификатор категории или ничего не было выбрано';
$messages['error_category_has_articles'] = 'Категория "%s" используется некоторыми записями. Сначала отредактируйте записи и затем удалите категорию';
$messages['category_deleted_ok'] = 'Категория "%s" успешно удалена';
$messages['categories_deleted_ok'] = '%s категории успешно удалены';
$messages['error_deleting_category'] = 'Ошибка при удалении категории "%s"';
$messages['error_deleting_category2'] = 'Ошибка при удалении категории с идентификатором "%s"';
$messages['yes'] = 'Да';
$messages['no'] = 'Нет';


// new category
$messages['name'] = 'Название';
$messages['category_name_help'] = 'Название, которое будет отображать категорию';
$messages['description'] = 'Описание';
$messages['category_description_help'] = 'Полное описание этой категории';
$messages['show_in_main_page_help'] = 'Отображать записи этой категории на главной странице';
$messages['error_empty_name'] = 'Вы должны указать название';
$messages['error_empty_description'] = 'Вы должны указать описание';
$messages['error_adding_article_category'] = 'Ошибка при добавлении новой категории. Проверьте введенные данные и попробуйте еще раз';
$messages['category_added_ok'] = 'Категория "%s" была успешно добавлена в дневник';
$messages['add'] = 'Добавить';
$messages['reset'] = 'Сбросить';

// update category
$messages['error_updating_article_category'] = 'Ошибка при редактировании записи категории';
$messages['error_fetching_category'] = 'Ошибка при выводе категории';
$messages['article_category_updated_ok'] = 'Категория "%s" была успешно отредактирована';

// links
$messages['feed'] = 'Связь';
$messages['error_no_links_selected'] = 'Неправильный идентификатор ссылки или ничего не было выбрано для удаления';
$messages['error_incorrect_link_id'] = 'Неправильный идентификатор ссылки';
$messages['error_removing_link'] = 'Ошибка при удалении ссылки "%s"';
$messages['error_removing_link2'] = 'Ошибка при удалении ссылки с идентификатором "%s"';
$messages['link_deleted_ok'] = 'Ссылка "%s" успешно удалена';
$messages['links_deleted_ok'] = '%s ссылки успешно удалены';

// new link
$messages['link_name_help'] = 'Название ссылки';
$messages['link_url_help'] = 'Адрес куда указывает ссылка';
$messages['link_description_help'] = 'Краткое описание ссылки';
$messages['link_feed_help'] = 'Может быть указана ссылка на RSS или Atom этой ссылки';
$messages['link_category_help'] = 'Выберите одну из имеющихся категорий ссылок';
$messages['error_adding_link'] = 'Ошибка при добавлении ссылки. Проверьте введенные данные и попробуйте еще раз';
$messages['error_invalid_url'] = 'Неправильная ссылка';
$messages['link_added_ok'] = 'Ссылка "%s" успешно добавлена';

// update link
$messages['error_updating_link'] = 'Ошибка при редактировании ссылки. Проверьте введенные данные и попробуйте еще раз';
$messages['error_fetching_link'] = 'Ошибка при выводе ссылки';
$messages['link_updated_ok'] = 'Ссылка "%s" успешно отредактирована';

// link categories
$messages['links'] = 'Ссылки';
$messages['error_invalid_link_category_id'] = 'Неправильный идентификатор категории ссылок или не выбрана категория ссылок';
$messages['error_links_in_link_category'] = 'Категория ссылок "%s" используется некоторыми ссылками. Отредактируйте ссылки и попробуйте еще раз';
$messages['error_removing_link_category'] = 'Ошибка при удалении категории ссылок "%s"';
$messages['link_category_deleted_ok'] = 'Категория ссылок "%s" успешно удалена';
$messages['link_categories_deleted_ok'] = '%s категории ссылок успешно удалены';
$messages['error_removing_link_category2'] = 'Ошибка при удалении категории ссылок с идентификатором "%s"';

// new link category
$messages['link_category_name_help'] = 'Название этой категории ссылок';
$messages['error_adding_link_category'] = 'Ошибка при добавлении новой категории ссылок';
$messages['link_category_added_ok'] = 'Категория ссылок "%s" успешно добавлена';

// edit link category
$messages['error_updating_link_category'] = 'Ошибка при редактировании категории ссылок. Проверьте введенные данные и попробуйте еще раз';
$messages['link_category_updated_ok'] = 'Категория ссылок "%s" успешно отредактирована';
$messages['error_fetching_link_category'] = 'Ошибка при выводе категории ссылок';

// custom fields
$messages['type'] = 'Тип';
$messages['hidden'] = 'Скрытый';
$messages['fields_deleted_ok'] = '%s персонализированные поля успешно удалены';
$messages['field_deleted_ok'] = 'Персонализированное поле "%s" успешно удалено';
$messages['error_deleting_field'] = 'Ошибка при удалении персонализированного поля "%s"';
$messages['error_deleting_field2'] = 'Ошибка при удалении персонализированного поля с идентификатором "%s"';
$messages['error_incorrect_field_id'] = 'Неправильный идентификатор персонализированного поля';

// new custom field
$messages['field_name_help'] = 'Идентификатор, который будет использоваться для обращений к значению этого поля в записях';
$messages['field_description_help'] = 'Короткое описание этого поля, которое будет показываться при добавлении или редактировании записей';
$messages['field_type_help'] = 'Выберите один из имеющихся типов полей';

$messages['field_hidden_help'] = 'Если поле скрытое, оно не будет показываться при добавлении или редактировании записи. Это свойство обычно испольщуется плагинами';
$messages['error_adding_custom_field'] = 'Ошибка при добавлении персонализированного поля. Проверьте введенные данные и попробуйте еще раз';
$messages['custom_field_added_ok'] = 'Персонализированное поле "%s" успешно добавлено';
$messages['text_field'] = 'Текстовое поле';
$messages['text_area'] = 'Многострочная область ввода';
$messages['checkbox'] = 'Флажок';
$messages['date_field'] = 'Выбор даты';

// edit custom field
$messages['error_fetching_custom_field'] = 'Ошибка при выводе персонализированного поля';
$messages['error_updating_custom_field'] = 'Ошибка при редактировании персонализированного поля. Проверьте введенные данные и попробуйте еще раз';
$messages['custom_field_updated_ok'] = 'Персонализированное поле "%s" отредактировано успешно';

// resources
$messages['root_album'] = 'Основной альбом';
$messages['num_resources'] = 'Число файлов';
$messages['total_size'] = 'Полный размер';
$messages['album'] = 'Альбом';
$messages['error_incorrect_album_id'] = 'Неправильный идентификатор альбома';
$messages['error_base_storage_folder_missing_or_unreadable'] = 'pLog не может создать необходимые директории, куда будут помещены файлы. Это может быть по разным причинам, например, ваши установки PHP работают с включенным безопасным режимом или ваш пользователь не имеет доступа к этой опции. Вы можете попытаться провести операцию вручную, создав следующие директории: <br/><br/>%s<br/><br/>Если эти директории уже существуют, убедитесь, что на них выставлены правильные права.';


$messages['items_deleted_ok'] = '%s элементы успешно удалены';
$messages['error_album_has_children'] = 'Альбом "%s" имеет дочерние альбомы. Сначала отредактируйте альбом и попробуйте еще раз';
$messages['item_deleted_ok'] = 'Элемент "%s" успешно удален';
$messages['error_deleting_album'] = 'Ошибка при удалении альбома "%s"';
$messages['error_deleting_album2'] = 'Ошибка при удалении альбома с идентификатором "%s"';

$messages['error_deleting_resource'] = 'Ошибка при удалении файла "%s"';
$messages['error_deleting_resource2'] = 'Ошибка при удалении файла с идентификатором "%s"';
$messages['error_no_resources_selected'] = 'Нет элементов для удаления';
$messages['resource_deleted_ok'] = 'Файл "%s" успешно удален';
$messages['album_deleted_ok'] = 'Альбом "%s" успешно удален';
$messages['add_resource'] = 'Добавить файл';
$messages['add_resource_preview'] = 'Добавить эскиз';
$messages['add_resource_medium'] = 'Добавить средний эскиз';
$messages['add_album'] = 'Добавить альбом';

// new album
$messages['album_name_help'] = 'Краткое название нового альбома';
$messages['parent'] = 'Родственный';
$messages['no_parent'] = 'Не родственный';
$messages['parent_album_help'] = 'Используйте это, чтобы иметь вложенные альбомы для лучшей организации ваших архивов';
$messages['album_description_help'] = 'Полное описание содержания этого альбома';
$messages['error_adding_album'] = 'Ошибка при добавлении нового альбома. Проверьте введенные данные и попробуйте еще раз';
$messages['album_added_ok'] = 'Альбом "%s" успешно добавлен';

// edit album
$messages['error_incorrect_album_id'] = 'Неправильный идентификатор альбома';
$messages['error_fetching_album'] = 'Ошибка при выводе альбома';
$messages['error_updating_album'] = 'Ошибка при редактировании альбома. Проверьте введенные данные и попробуйте еще раз';
$messages['album_updated_ok'] = 'Альбом "%s" успешно отредактирован';
$messages['show_album_help'] = 'Если отключен, альбом не будет показываться в списке доступных альбомов этого дневника';

// new resource
$messages['file'] = 'Файл';
$messages['resource_file_help'] = 'Файл, который будет добавлен в этот дневник. Используйте ссылку "Добавить поле" для одновременной загрузки более одного файла';
$messages['add_field'] = 'Добавить поле';
$messages['resource_description_help'] = 'Полное описание содержания этого файла';
$messages['resource_album_help'] = 'Выбрать альбом, в который будет добавлен этот файл';
$messages['error_no_resource_uploaded'] = 'Не выбраны файлы для загрузки';
$messages['resource_added_ok'] = 'Файл "%s" успешно добавлен';
$messages['error_resource_forbidden_extension'] = 'Файл не был загружен, так как он запрещенного типа';
$messages['error_resource_too_big'] = 'Файл не был добавлен, так как он слишком большой';
$messages['error_uploads_disabled'] = 'Файл не был добавлен, так как загрузка отключена';
$messages['error_quota_exceeded'] = 'Файл не был добавлен, так как превышена дисковая квота';
$messages['error_adding_resource'] = 'Ошибка при добавлении файла';

// edit resource
$messages['editResource'] = 'Редактировать файл';
$messages['resource_information_help'] = 'Информация о файле представлена снизу';
$messages['information'] = 'Информация';
$messages['size'] = 'Размер';
$messages['format'] = 'Формат';
$messages['dimensions'] = 'Величина';
$messages['bits_per_sample'] = 'Bps';
$messages['sample_rate'] = 'Частота';
$messages['number_of_channels'] = 'Количество каналов';
$messages['legnth'] = 'Продолжительность';
$messages['thumbnail_format'] = 'Формат эскизов';
$messages['regenerate_preview'] = 'Генерировать эскиз';
$messages['error_fetching_resource'] = 'Ошибка при выводе файла';
$messages['error_updating_resource'] = 'Ошибка при редактировании файла';
$messages['resource_updated_ok'] = 'Файл "%s" успешно отредактирован';

// blog settings
$messages['blog_link'] = 'Ссылка дневника';
$messages['blog_link_help'] = 'Постоянная ссылка этого дневника';
$messages['blog_name_help'] = 'Название этого дневника';
$messages['blog_description_help'] = 'Полное описание содержания этого дневника';
$messages['language'] = 'Язык';
$messages['blog_language_help'] = 'Язык, используемый для отображения текстов этого дневника, как для публичного просмотра, так и для административной части';
$messages['max_main_page_items'] = 'Количество записей на главной странице';
$messages['max_main_page_items_help'] = 'Количество записей, которые всегда будут показываться на главной странице дневника';
$messages['max_recent_items'] = 'Количество последних записей';
$messages['max_recent_items_help'] = 'Максимальное количество записей, которые будут показываться, как последние на главной странице';
$messages['template'] = 'Шаблон';
$messages['choose'] = 'Выбрать';
$messages['blog_template_help'] = 'Шаблон, который будет использоваться для отображения содержания дневника. Этот список включает в себя общие шаблоны, плюс все шаблоны, установленные только для этого дневника';
$messages['use_read_more'] = 'Используйте в записях ссылку "подробнее..."';
$messages['use_read_more_help'] = 'Если опция включена, только текст, введенный в поле "Текст" будет отображен на главной странице. Для отображения  "Расширенного текста", к записи будет добавлена ссылка "подробнее..."';
$messages['enable_wysiwyg'] = 'Включить визуальный редактор записей';
$messages['enable_wysiwyg_help'] = 'Включить расширенный визуальный редактор типа MSWord. Редактор работает в Internet Explorer 5.5 и выше или в Mozilla 1.3 и выше';
$messages['enable_comments'] = 'Включить комментарии по умолчанию';
$messages['enable_comments_help'] = 'Включить комментарии для всех сообщений по умолчанию. Комментарии могут быть включены/выключены для некоторых записей при внесении новых или редактировании старых';
$messages['show_future_posts'] = 'Показать будущие сообщения в календаре';
$messages['show_future_posts_help'] = 'Включает отображение записей в календаре, готовящихся к публикации в будущем';
$messages['comments_order'] = 'Упорядочить комментарии';
$messages['comments_order_help'] = 'Порядок, в котором комментарии будут отображаться на главной странице';
$messages['oldest_first'] = 'По убыванию';
$messages['newest_first'] = 'По возрастанию';

$messages['categories_order'] = 'Упорядочить категории';
$messages['categories_order_help'] = 'Порядок, в котором категории будут отображаться на главной странице';
$messages['most_recent_updated_first'] = 'Сначала самые последние обновления';
$messages['alphabetical_order'] = 'В алфавитном порядке';
$messages['reverse_alphabetical_order'] = 'В обратном алфавитном порядке';
$messages['most_articles_first'] = 'С наибольшим количеством записей';
$messages['link_categories_order'] = 'Упорядочить категории ссылок';
$messages['link_categories_order_help'] = 'Порядок, в котором категории ссылок будут выводиться на главной станице';
$messages['most_links_first'] = 'С наибольшим количеством ссылок';
$messages['most_links_last'] = 'С наименьшим количеством ссылок';


$messages['time_offset'] = 'Установки времени';
$messages['time_offset_help'] = 'Разница во времени, которая будет динамически добавляться к каждой дате и времени дневника';
$messages['close'] = 'Закрыть';
$messages['select'] = 'Выбрать';

$messages['error_updating_settings'] = 'Ошибка при редактировании настроек дневника. Проверьте введенные данные и попробуйте еще раз';
$messages['error_invalid_number'] = 'Неправильное число';
$messages['error_incorrect_time_offset'] = 'Неправильные установки времени';
$messages['blog_settings_updated_ok'] = 'Настройки дневника успешно отредактированы';
$messages['hours'] = 'Часы';

// user settings
$messages['username_help'] = 'Имя пользователя. Не может быть изменено.';
$messages['full_name'] = 'Полное имя';
$messages['full_name_help'] = 'Укажите полное имя';
$messages['password_help'] = 'Введите новый пароль или оставьте поле пустым, если не хотите его изменять';
$messages['confirm_password'] = 'Подтвердить пароль';
$messages['email'] = 'Адрес электронной почты';
$messages['email_help'] = 'Адрес электронной почты, куда будут высылаться уведомления';
$messages['bio'] = 'Ваша биография';
$messages['bio_help'] = 'Здесь можете оставить более подробное ваше описание';
$messages['picture'] = 'Фотография';
$messages['user_picture_help'] = 'Выберите фотографию из загруженных в дневник, в виде своего аватара';
$messages['error_invalid_password'] = 'Неправильный пароль. Убедитесь, что он не слишком короткий';
$messages['error_passwords_dont_match'] = 'Пароли не совпадают';
$messages['error_incorrect_email_address'] = 'Неправильный адрес электронной почты';
$messages['error_updating_user_settings'] = 'Ошибка при редактировании настроек пользователя. Проверьте введенные данные и попробуйте еще раз';
$messages['user_settings_updated_ok'] = 'Настройки пользователя успешно отредактированы';
$messages['resource'] = 'Ресурсы';

// plugin centre
$messages['identifier'] = 'Идентификатор';
$messages['error_plugins_disabled'] = 'Извините, плагины отключены.';

// blog users
$messages['revoke_permissions'] = 'Отозвать разрешения';
$messages['error_no_users_selected'] = 'Не выбраны пользователи';
$messages['user_removed_from_blog_ok'] = 'Пользователь "%s" больше не имеет доступа к этому дневнику';
$messages['users_removed_from_blog_ok'] = '%s пользователи больше не имеют доступа к этому дневнику';
$messages['error_removing_user_from_blog'] = 'Ошибка при удалении доступа пользователя "%s"';
$messages['error_removing_user_from_blog2'] = 'Ошибка при удалении доступа пользователя с идентификатором "%s"';

// new blog user
$messages['new_blog_username_help'] = 'Имя пользователя, которому вы хотите дать доступ к этому дневнику. Новые пользователи будут иметь доступ только к разделам "Управление" и "Ресурсы".';
$messages['send_notification'] = 'Выслать извещение';
$messages['send_user_notification_help'] = 'Выслать извещение по электронной почте этому пользователю';
$messages['notification_text'] = 'Текст извещения';
$messages['notification_text_help'] = 'Текст, который будет включен в извещение';


$messages['error_adding_user'] = 'Ошибка при выдаче разрешения пользователю. Проверьте введенные данные и попробуйте еще раз';
$messages['error_empty_text'] = 'Вы должны набрать текст';
$messages['error_adding_user'] = 'Ошибка при добавлении пользователя. Проверьте введенные данные и попробуйте еще раз';

$messages['error_invalid_user'] = 'Пользователь "%s" не найден или не существует';
$messages['user_added_to_blog_ok'] = 'Пользователю "%s" был успешно дан доступ к дневнику';

// blog templates
$messages['error_no_templates_selected'] = 'Не выбраны шаблоны';
$messages['error_template_is_current'] = 'Шаблон "%s" не может быть удален, так как он текущий';
$messages['error_removing_template'] = 'Ошибка при удалении шаблона "%s"';

$messages['template_removed_ok'] = 'Шаблон "%s" успешно удален';
$messages['templates_removed_ok'] = '%s шаблоны успешно удалены';

// new blog template
$messages['template_installed_ok'] = 'Шаблон "%s" успешно добавлен';
$messages['error_installing_template'] = 'Ошибка при установке шаблона "%s"';
$messages['error_missing_base_files'] = 'Некоторые файлы шаблона утеряны';
$messages['error_add_template_disabled'] = 'Невозможно добавить новые шаблоны, так как эта опция отключена';
$messages['error_must_upload_file'] = 'Набор шаблонов не загружен';
$messages['error_uploads_disabled'] = 'На этом сайте загрузки отключены';
$messages['error_no_new_templates_found'] = 'Не найдено новых шаблонов';
$messages['error_template_not_inside_folder'] = 'Файлы, используемые в наборе шаблонов должны находиться внутри директории с тем же именем, что и набор шаблонов';
$messages['error_missing_base_files'] = 'Некоторые основные файлы шаблоны утеряны';
$messages['error_unpacking'] = 'Ошибка при распаковке файла';
$messages['error_forbidden_extensions'] = 'Набор шаблонов имеет файлы с запрещенным расширением';
$messages['error_creating_working_folder'] = 'Ошибка при создании временной папки для распаковки файлов';
$messages['error_checking_template'] = 'Ошибка при проверке шаблона: %s';
$messages['template_package'] = 'Набор шаблонов';
$messages['blog_template_package_help']  = 'Используй	те этот модуль для загрузки новых шаблонов, которые будут доступны только для вашего дневника. Если невозможно загрузить пакет шаблонов через этот модуль, загрузите набор шаблонов вручную и установите его в <b>%s</b>, которая является папкой хранения шаблонов вашего дневника и нажмите кнопку "<b>Сканирование шаблонов</b>". pLog отсканирует папку и автоматически добавит ноые найденные шаблоны.';
$messages['scan_templates'] = 'Сканирование шаблонов';

// site users
$messages['user_status_active'] = 'Включен';
$messages['user_status_disabled'] = 'Отключен';
$messages['user_status_all'] = 'Все';
$messages['user_status_unconfirmed'] = 'Не активирован';
$messages['error_invalid_user2'] = 'Пользователь с идентификатором "%s" не существует';
$messages['error_deleting_user'] = 'Ошибка при отключении пользователя "%s"';
$messages['user_deleted_ok'] = 'Пользователь "%s" успешно отключен';
$messages['users_deleted_ok'] = '%s пользователи успешно отключены';

// create user
$messages['user_added_ok'] = 'Пользователь "%s" успешно создан';
$messages['error_incorrect_username'] = 'Неправильное имя пользователя или он уже вошел';
$messages['user_status_help'] = 'Текущий статус для этого пользователя';
$messages['user_blog_help'] = 'Дневник, который будет изначально установлен этому пользователю';
$messages['none'] = 'Никакой';

// edit user
$messages['error_invalid_user'] = 'Неправильный идентификатор пользователя или пользователь не существует';
$messages['error_updating_user'] = 'Ошибка при редактировании установок пользователя. Проверьте введенные данные и попробуйте еще раз';
$messages['blogs'] = 'Дневники';
$messages['user_blogs_helps'] = 'Собственные дневники пользователя или куда пользователь имеет доступ';
$messages['site_admin'] = 'Администратор';
$messages['site_admin_help'] = ' Имеет ли этот пользователь привилегии администратора и разрешается ли ему видеть область "Управление" и выполнять административные задачи';
$messages['user_updated_ok'] = 'Пользователь "%s" успешно отредактирован';

// site blogs
$messages['blog_status_all'] = 'Все';
$messages['blog_status_active'] = 'Включен';
$messages['blog_status_disabled'] = 'Отключен';
$messages['blog_status_unconfirmed'] = 'Не активирован';
$messages['owner'] = 'Владелец';
$messages['quota'] = 'Квота';
$messages['bytes'] = 'байты';
$messages['error_no_blogs_selected'] = 'Не выбраны дневники для отключения';
$messages['error_blog_is_default_blog'] = 'Дневник "%s" не может быть удален, так как это дневник по умолчанию';
$messages['blog_deleted_ok'] = 'Дневник "%s" успешно отключен';
$messages['blogs_deleted_ok'] = '%s дневники успешно удалены';
$messages['error_deleting_blog'] = 'Ошибка при отключении дневника "%s"';
$messages['error_deleting_blog2'] = 'Ошибка при отключении дневника с идентификатором "%s"';

// create blog
$messages['error_adding_blog'] = 'Ошибка при добавлении дневника. Проверьте введенные данные и попробуйте еще раз';
$messages['blog_added_ok'] = 'Дневник "%s" успешно добавлен';

// edit blog
$messages['blog_status_help'] = 'Статус дневника';
$messages['blog_owner_help'] = 'Пользователь, который будет владельцем дневника с полным контролем настроек дневника';
$messages['users'] = 'Пользователи';
$messages['blog_quota_help'] = 'Файловая квота в байтах. Установить 0 для неограниченной квоты или оставить пустым, чтобы дневник использовал глобальную квоту';
$messages['blog_users_help'] = 'Пользователи, имеющие доступ к этому дневнику. Выбрать пользователя слева и переместить его в правый список, чтобы дать ему доступ к этому дневнику';
$messages['edit_blog_settings_updated_ok'] = 'Дневник "%s" успешно отредактирован';
$messages['error_updating_blog_settings'] = 'Ошибка при редактировании дневника "%s"';
$messages['error_incorrect_blog_owner'] = 'Неправильный пользователь, выбранный как владелец дневника';
$messages['error_fetching_blog'] = 'Ошибка при выводе дневника';
$messages['error_updating_blog_settings2'] = 'Ошибка при редактировании дневника. Проверьте введенные данные и попробуйте еще раз';
$messages['add_or_remove'] = 'Добавить или удалить пользователей';

// site locales
$messages['locale'] = 'Локализация';
$messages['locale_encoding'] = 'Кодировка';
$messages['locale_deleted_ok'] = 'Локализация "%s" успешно удалена';


$messages['error_no_locales_selected'] = 'Не выделены локализации для удаления';
$messages['error_deleting_only_locale'] = 'Локализация не может быть удалена, так как она единственная оставшаяся в системе';
$messages['locales_deleted_ok']= '%s локализации успешно удалены';
$messages['error_deleting_locale'] = 'Ошибка при удалении локализации "%s"';
$messages['error_locale_is_default'] = 'Локализация "%s" не может быть удалена, так как она по умолчанию для создания новых дневников';

// add locale
$messages['error_invalid_locale_file'] = 'Неправильный файл локализации';
$messages['error_no_new_locales_found'] = 'Не найдены новые файлы локализации';
$messages['locale_added_ok'] = 'Локализация "%s" успешно добавлена';
$messages['error_saving_locale'] = 'Ошибка при сохранении новой локализации';
$messages['scan_locales'] = 'Сканирование локализации';
$messages['add_locale_help'] = 'Используйте этот модуль для загрузки новых файлов локализации. Если невозможно загрузить файлы через этот модуль, загрузите файлы вручную и установите их в <b>./locales/</b>, которая является директорией хранения файлов локализации, и нажмите кнопку "<b>Сканирование локализации</b>". pLog отсканирует папку и автоматически добавит найденные файлы  локализации';

// site templates
$messages['error_template_is_default'] = 'Шаблон "%s" не может быть удален, так как он установлен по умолчанию для новых дневников';

// add template
$messages['global_template_package_help'] = 'Используйте это модуль для загрузки a new template set, которые будут доступны всем дневникам на этом сайте. Если невозможно загрузить пакет шаблонов через этот модуль, загрузите набор шаблонов вручную и установите его в <b>%s</b>, который является директорией хранения общих доступных шаблонов и нажмите кнопку "<b>Сканирование шаблонов</b>". pLog отсканирует папку и автоматически добавит найденные шаблоны.';

// global settings
$messages['site_config_saved_ok'] = 'Настройки сайта успешно сохранены';
$messages['error_saving_site_config'] = 'Ошибка при сохранеии настроек сайта';
/// general settings
$messages['help_comments_enabled'] = 'Включение комментариев для новых дневников по умолчанию [По умолчанию = Да]';
$messages['help_beautify_comments_text'] = 'Если включено, комментарии, вносимые пользователями будут форматированы добавлением параграфов и авто-связкой адресов [По умолчанию = Да]';
$messages['help_temp_folder'] = 'Папка, которую pLog может использовать для записи временных данных таких как собранные шаблоны и так далее. Используйте папки  директории вне своего веб сервера, чтобы увеличить безопасность [По умолчанию = ./tmp]';
$messages['help_base_url'] = 'Основная ссылка местонахождения этого дневника установлена';
$messages['help_subdomains_enabled'] = 'Включить или отключить субдомены. Посмотрите документацию для побробной информации по субдоменам [По умолчанию = Нет]';
$messages['help_subdomains_base_url'] = 'Когда субдомены включены, эта основная ссылка используется вместо базовых ссылок. Используйте {blogname} для получения имени дневника и {username} для получения имени владельца дневника, чтобы сгенерировать ссылку к дневнику. (то есть http://{blogname}.yourdomain.com})';
$messages['help_include_blog_id_in_url'] = 'Работает, когда субдомены и "обычные" ссылки включены, заставляет внутренние ссылки не иметь параметр "blogId". Изменять только в случае, если вы уверены в своих действиях [По умолчанию = Да]';
$messages['help_script_name'] = 'Установить это, если вам надо переименовать index.php во что-то другое [По умолчанию = index.php]';
$messages['help_show_posts_max'] = 'Максимальное количество записей, отображаемых на главной странице. Работает по отношению к новым дневникам [По умолчанию = 15]';
$messages['help_recent_posts_max'] = 'Максимальное количество новых записей, отображаемых на главной странице. Работает по отношению к новым дневникам [По умолчанию = 10]';
$messages['help_save_drafts_via_xmlhttprequest_enabled'] = 'Включена ли опция, позволяющая сохранять черновики с помощью Javascript и XmlHttpRequest [По умолчанию = Да]';
$messages['help_locale_folder'] = 'Папка, где хранятся файлы локализации [По умолчанию = ./locale]';
$messages['help_default_locale'] = 'Языковые установки по умолчанию для новых дневников [По умолчанию = en_UK]';
$messages['help_default_blog_id'] = 'Дневник по умолчанию, который будет отображаться, если не указаны другие [По умолчанию = 1]';
$messages['help_default_time_offset'] = 'Установки времени по умолчанию для новых дневников [По умолчанию = 0]';
$messages['help_html_allowed_tags_in_comments'] = 'Разделенный пробелами список HTML дескрипторов, которые допускаются в комментариях [По умолчанию = &lt;a&gt;&lt;i&gt;&lt;br&gt;&lt;br/&gt;&lt;b&gt;]';
$messages['help_referer_tracker_enabled'] = 'Включить или отключить опцию сохранения обращений к базе данных. Выключить, чтобы ускорить работу скрипта [По умолчанию = Да]';
$messages['help_show_more_enabled'] = 'Включить или выключить опцию "подробнее..." по умолчанию для новых дневников [По умолчанию = Да]';
$messages['help_update_article_reads'] = 'Включить или выключить обновление счетчика количества просмотров записи. Выключить, чтобы ускорить работу скрипта [По умолчанию = Да]';
$messages['help_update_cached_article_reads'] = 'Включить или выключить обновление счетчика количества просмотров записи, даже при включенном кэшировании [По умолчанию = Да]';
$messages['help_xmlrpc_ping_enabled'] = 'Включить или выключить пинг XMLRPC к сайтам, которые поддерживают эту опцию [По умолчанию = Да]';
$messages['help_send_xmlrpc_pings_enabled_by_default'] = 'Включить или выключить по умолчанию эту опцию при внесении записи или ее редактировании [По умолчанию = Да]';
$messages['help_xmlrpc_ping_hosts'] = 'Ссылка, ведущая к интерфейсу XMLRPC сайта, поддерживающего спецификацию XMLRPC. Вносите по одному адресу в новую строку [По умолчанию = http://rpc.weblogs.com/RPC2]';
$messages['help_trackback_server_enabled'] = 'Включить или отключить опцию для получения входящих обратных ссылок [По умолчанию = Да]';
$messages['help_htmlarea_enabled'] = 'Включить или отключить WYSIWYG визуальный редактор по умолчанию в новых дневниках [По умолчанию = Да]';
$messages['help_plugin_manager_enabled'] = 'Включить или отключить плагины [По умолчанию = Да]';
$messages['help_minimum_password_length'] = 'Минимальная длина пароля [По умолчанию = 4]';
$messages['help_xhtml_converter_enabled'] = 'Если включено, pLog попытается конвертировать HTML в XHTML [По умолчанию = Да]';
$messages['help_xhtml_converter_aggressive_mode_enabled'] = 'Если включено, pLog попытается форсированно сконвертировать XHTML из HTML, но в нем могут присутствовать ошибки [По умолчанию = Нет]';
$messages['help_session_save_path'] = 'Используйте эту настройку, чтобы изменить директорию, где pLog хранит информацию о сессии, с помощью функции PHP session_save_path() Убедитесь, что запись в эту директорию разрешена. Оставить пустым, чтобы использовать настройки PHP по умолчанию [По умолчанию = (пусто)]';
// summary settings
$messages['help_summary_page_show_max'] = 'Количество элементов, которые будут отображены на главной странице. Эта настройка управляет всеми списками на главной странице (последние записи, наиболее активные дневники, и так далее) [По умолчанию = 10]';
$messages['help_summary_blogs_per_page'] = 'Количество дневников на страницу в разделе "Список дневников" [По умолчанию = 25]';
$messages['help_forbidden_usernames'] = 'Разделенный пробелами список имен пользователей, запрещенных к регистрации [По умолчанию = admin www blog ftp]';
$messages['help_force_one_blog_per_email_account'] = 'Ограничить до одного дневника на адрес электронной почты [По умолчанию = Нет]';
$messages['help_summary_show_agreement'] = 'Показывать текст соглашения и принимать согласие пользователей, прежде чем приступить к регистрации [По умолчанию = Да]';
$messages['help_need_email_confirm_registration'] = 'Обязывать пользователей подтверждать их регистрацию переходом на сайт с ссылки, высланной письмом на их адрес электронной почты [По умолчанию = Да]';
$messages['help_summary_disable_registration'] = 'Отключить регистрацию пользователей для создания новых дневников на этом сайте [По умолчанию = Нет]';
// templates
$messages['help_template_folder'] = 'Директория хранения шаблонов [По умолчанию = ./templates]';
$messages['help_default_template'] = 'Шаблон по умолчанию для новых дневников [По умолчанию = standard]';
$messages['help_users_can_add_templates'] = 'Разрешить пользователям загружать собственные шаблоны [По умолчанию = Да]';
$messages['help_template_compile_check'] = 'Если включено, Smarty будет проверять каждый раз, были ли изменены файлы шаблона и, если да, то будет использована новая версия. Выключить, чтобы ускорить работу скрипта [По умолчанию = Да]';
$messages['help_template_cache_enabled'] = 'Включить кэширование шаблонов. Если включено, везде будет использоваться кэшированая версия. Данные не будут выбираться из базы данных и шаблоны не будут перекомпилированы [По умолчанию = Да]';
$messages['help_template_cache_lifetime'] = 'Продолжительность кэша в секундах. Установить на -1 для того, чтобы кэш всегда работал. Если установлено на 0, кэш будет отключен, но рекомендуется установить template_cache_enabled на "Нет", чтобы отключить кэширование [По умолчанию = -1]';
$messages['help_template_http_cache_enabled'] = 'Включить поддержку для условных запросов HTTP. Если включено, pLog примет "If-Modified-Since" заголовок HTTP во внимание и отправит при необходимости только содержание. Включить эту опцию для сохранения траффика [По умолчанию = Нет]';
$messages['help_allow_php_code_in_templates'] = 'Разрешает встроенный PHP код для обработчика шаблонов Smarty внутри контейнеров {php}...{/php} [По умолчанию = Нет]';
// urls
$messages['help_request_format_mode'] = 'Выбрать один из доступных форматов ссылок. Если используются персонализированные ссылки, убедитесь в конфигурации настроек приведенных ниже [По умолчанию = Простые]';
$messages['plain'] = 'Простые';
$messages['search_engine_friendly'] = 'Дружественный поисковым машинам';
$messages['custom_url_format'] = 'Персонализированые ссылки';
$messages['help_permalink_format'] = 'Форматировать в постоянные ссылки при использовании персонализированных ссылок [По умолчанию = /blog/{blogname}/{catname}/{year}/{month}/{day}/{postname}$]';
$messages['help_category_link_format'] = 'Форматировать в ссылки к категориям, если используются персонализированные ссылки [По умолчанию = /blog/{blogname}/{catname}$]';
$messages['help_blog_link_format'] = 'Форматировать в ссылки к дневникам, если используются персонализированные ссылки [По умолчанию = /blog/{blogname}$]';
$messages['help_archive_link_format'] = 'Форматировать в ссылки к архивам, если используются персонализированные ссылки [По умолчанию = /blog/{blogname}/archives/{year}/?{month}/?{day}]';
$messages['help_user_posts_link_format'] = 'Форматировать в ссылки к записям, внесенным определенным пользователем, если используются персонализированные ссылки [По умолчанию = /blog/{blogname}/user/{username}$]';
$messages['help_post_trackbacks_link_format'] = 'Форматировать в ссылки к обратным ссылкам, если используются персонализированные ссылки [По умолчанию = /blog/{blogname}/post/trackbacks/{postname}$]';
$messages['help_template_link_format'] = 'Форматировать в ссылки к персонализированным статическим шаблонным страницам, если используются персонализированные ссылки [По умолчанию = /blog/{blogname}/page/{templatename}$]';
$messages['help_album_link_format'] = 'Форматировать в ссылки к имеющимся альбомам, если используются персонализированные ссылки [По умолчанию = /blog/{blogname}/album/{albumname}$]';
$messages['help_resource_link_format'] = 'Форматировать в ссылки к страницам с имеющимися файлами, если используются персонализированные ссылки [По умолчанию = /blog/{blogname}/resource/{albumname}/{resourcename}$]';
$messages['help_resource_preview_link_format'] = 'Форматировать в ссылки к имеющимся эскизам, если используются персонализированные ссылки [По умолчанию = /blog/{blogname}/resource/{albumname}/preview/{resourcename}$]';
$messages['help_resource_medium_size_preview_link_format'] = 'Форматировать в ссылки к эскизам среднего размера, если используются персонализированные ссылки [По умолчанию = /blog/{blogname}/resource/{albumname}/preview-med/{resourcename}$]';
$messages['help_resource_download_link_format'] = 'Форматировать в ссылки к файлам, если используются персонализированные ссылки [По умолчанию = /blog/{blogname}/resource/{albumname}/download/{resourcename}$]';
// email
$messages['help_check_email_address_validity'] = 'При проверке адреса электронной почты, проверить существование аккаунта (MX record) на данном домене, и является ли он верным [По умолчанию = Нет]';
$messages['help_email_service_enabled'] = 'Включить или выключить отправку сообщений [По умолчанию = Да]';
$messages['help_post_notification_source_address'] = 'Адрес электронной почты, который будет показываться в поле "От:" при отправке писем с pLog [По умолчанию = noreply@your.host.com]';
$messages['help_email_service_type'] = 'Какой сервис использовать при отправке писем [По умолчанию = PHP]';
$messages['help_smtp_host'] = 'Если используется SMTP, введите SMTP сервер, который будет использоваться для отправки сообщений [По умолчанию = (пусто)]';
$messages['help_smtp_port'] = 'Если SMTP сервер настроен не на 25 порт, то настройте это значение [По умолчанию = (пусто)]';
$messages['help_smtp_use_authentication'] = 'Включить если SMTP сервер запрашивает авторизацию  [По умолчанию = Нет]';
$messages['help_smtp_username'] = 'Если SMTP сервер запрашивает авторизацию, введите имя пользователя [По умолчанию = (пусто)]';
$messages['help_smtp_password'] = 'Если SMTP запрашивает авторизацию, введите пароль для пользователя, указанного выше [По умолчанию = (пусто)]';
// helpers
$messages['help_path_to_tar'] = 'Путь к утилите "tar", требующейся для распаковки наборов шаблонов в формате .tar.gz или tar.bz2 [По умолчанию = /bin/tar]';
$messages['help_path_to_gzip'] = 'Путь к утилите "gzip", требующейся для распаковки наборов шаблонов в формате .tar.gz [По умолчанию = /bin/gzip]';
$messages['help_path_to_bz2'] = 'Путь к утилите "bzip2", требующейся для распаковки наборов шаблонов в формате .tar.bz2 [По умолчанию = /usr/bin/bzip2]';
$messages['help_path_to_unzip'] = 'Путь к утилите "unzip", требующейся для распаковки наборов шаблонов в формате .zip [По умолчанию = /usr/bin/unzip]';
$messages['help_unzip_use_native_version'] = 'Использовать PHP для распаковки файлов .zip [По умолчанию = Нет]';
// uploads
$messages['help_uploads_enabled'] = 'Разрешается ли пользователям загрузка файлов. Это касается файлового раздела и загрузки персонализированных шаблонов и локализаций [По умолчанию = Да]';
$messages['help_maximum_file_upload_size'] = 'Максимальный разрешенный размер файла в байтах. Этот предел никогда не будет выше, чем собственный предел PHP  [По умолчанию = 2000000]';
$messages['help_upload_forbidden_files'] = 'Разделенный пробелами список типоф файлов, запрещенных к загрузке. Использование \'*\' и \'?\' разрешено [По умолчанию = *.php *.php3 *.php4 *.phtml]';
// interfaces
$messages['help_xmlrpc_api_enabled'] = 'Включить или выключить доступ через XMLRPC к дневникам [По умолчанию = Да]';
$messages['help_rdf_enabled'] = 'Всключить синдакат содержания через Atom или RSS [По умолчанию = Да]';
$messages['help_default_rss_profile'] = 'Версия RSS или Atom по умолчанию, используемая для слияния содержания, если не указано иного [По умолчанию = RSS 1.0]';
// security
$messages['help_security_pipeline_enabled'] = 'Включить конвейер безопасности и все соответствующие фильтры. Это также касается плагинов, которые создают новые фильтры [По умолчанию = Да]';
$messages['help_ip_address_filter_enabled'] = 'Включить фильтр адреса IP. Также должен быть включен конвейер безопасности, чтобы эта опция работала [По умолчанию = Да]';
$messages['help_content_filter_enabled'] = 'Включить фильтр, основанный на регулярных выражениях. Также должен быть включен конвейер безопасности, чтобы эта опция работала [По умолчанию = Да]';
$messages['help_maximum_comment_size'] = 'Максимально допустимый размер комментария в байтах, установить на 0, чтобы отключить эту опцию [По умолчанию = 0]';
// bayesian filter
$messages['help_bayesian_filter_enabled'] = 'Включить Bayesian-фильтр для улучшения автоматической фильстрации спама  [По умолчанию = Да]';
$messages['help_bayesian_filter_spam_probability_treshold'] = 'Максимальный порог, прежде, чем комментарий станет считаться спамом  [По умолчанию = 0.9]';
$messages['help_bayesian_filter_nonspam_probability_treshold'] = 'Минимальный порог, после которого запись может считаться не спамом [По умолчанию = 0.2]';
$messages['help_bayesian_filter_min_length_token'] = 'Минимальная длина строки, чтобы он имел значение для Bayesian-фильтра  [По умолчанию = 3]';
$messages['help_bayesian_filter_max_length_token'] = 'Максимальная длина строки, чтобы он имел значение для Bayesian-фильтра  [По умолчанию = 100]';
$messages['help_bayesian_filter_number_significant_tokens'] = 'Количество значимых строк  [По умолчанию = 15]';
$messages['help_bayesian_filter_spam_comments_action'] = 'Что делать с комментариями, которые считаются спамом. Установить на "Удалить" только в случае, если ваш фильтр настроен должным образом  [По умолчанию = Сохранять]';
$messages['keep_spam_comments'] = 'Сохранять в базе данных, помеченным, как "Спам"';
$messages['throw_away_spam_comments'] = 'Удалить их (не сохранять)';
// resources
$messages['help_resources_enabled'] = 'Включить или отключить файлы [По умолчанию = Да]';
$messages['help_resources_folder'] = 'Папка, где буду храниться файлы. Используйте папки  директории вне своего веб сервера, чтобы увеличить безопасность [По умолчанию = ./gallery]';
$messages['help_thumbnail_method'] = 'Средства, используемые для создания эскизов. Если используется PHP, требуется поддержка для GD  [По умолчанию = PHP]';
$messages['help_path_to_convert'] = 'Путь к инструметам "конвертации" из пакета ImageMagick. Обязательный, если эскизы создаются "ImageMagick"  [По умолчанию = /usr/bin/convert]';
$messages['help_thumbnail_format'] = 'Формат, в котором сохраняются эскизы  [По умолчанию = Same as image]';
$messages['help_thumbnail_height'] = 'Высота по умолчанию для маленьких эскизов  [По умолчанию = 120]';
$messages['help_thumbnail_width'] = 'Ширина по умолчанию для маленьких эскизов  [По умолчанию = 120]';
$messages['help_medium_size_thumbnail_height'] = 'Высота по умолчанию для средних эскизов  [По умолчанию = 480]';
$messages['help_medium_size_thumbnail_width'] = 'Ширина по умолчанию для средних эскизов  [По умолчанию = 640]';
$messages['help_thumbnails_keep_aspect_ratio'] = 'Сохранять пропорции при создании эскизов. Может создавать эскизы больших размеров, чем указанные выше, но качество будет лучше [По умолчанию = Да]';
$messages['help_thumbnail_generator_force_use_gd1'] = 'Обязать pLog использовать только функции GD1 [По умолчанию = Нет]';
$messages['help_thumbnail_generator_user_smoothing_algorithm'] = 'Алгоритм используемый для сглаживания эскизов. Используется только, если эскизы создаются при помощи GD [По умолчанию = PHP Imagecopyresampled]';
$messages['help_resources_quota'] = 'Общая квота, выделенная для дневников в байтах (то есть 5242880 Bytes = 5MB), или установить на 0 для неограниченной квоты [По умолчанию = 0]';
$messages['help_resource_server_http_cache_enabled'] = 'Включить поддержку "If-Modified-Since" заголовка и условных запросов HTTP. Включить для сохранения траффика  [По умолчанию = Нет]'; 
$messages['help_resource_server_http_cache_lifetime'] = 'Время в микросекундах, в которое клиент будет использовать кэшированную версию файлов [По умолчанию = 9999999]';
$messages['same_as_image'] = 'Такое же, как и оригинальное изображение';
// search
$messages['help_search_engine_enabled'] = 'Включить поиск  [По умолчанию = Да]';
$messages['help_search_in_custom_fields'] = 'Искать в персонализированных полях  [По умолчанию = Да]';
$messages['help_search_in_comments'] = 'Искать в комментариях  [По умолчанию = Да]';

// cleanup
$messages['purge'] = 'Удаление';
$messages['cleanup_spam'] = 'Удалить спам';
$messages['cleanup_spam_help'] = 'Это удалит все сообщения, которые были помечены пользователями, как спам. Удалив, последующее их восстановление будет невозможно';
$messages['spam_comments_purged_ok'] = 'Комментарии со спамом успешно удалены';
$messages['cleanup_posts'] = 'Удалить сообщения';
$messages['cleanup_posts_help'] = 'Это удалит все сообщения, которые были удалены пользователями (помеченные как "Удаленные"). Удалив, последующее их восстановление будет невозможно';
$messages['posts_purged_ok'] = 'Сообщения успешно удалены';

/// summary ///
// front page
$messages['summary'] = 'Содержание';
$messages['register'] = 'Регистрация';
$messages['summary_welcome'] = 'Добро пожаловать!';
$messages['summary_most_active_blogs'] = 'Самые активные дневники';
$messages['summary_most_commented_articles'] = 'Самые комментируемые записи';
$messages['summary_most_read_articles'] = 'Популярные записи';
$messages['password_forgotten'] = 'Забыли пароль?';
$messages['summary_newest_blogs'] = 'Новые дневники';
$messages['summary_latest_posts'] = 'Последние записи';
$messages['summary_search_blogs'] = 'Поиск в дневниках';


// blog list
$messages['updated'] = 'Отредактировано';
$messages['total_reads'] = 'Всего';


// blog profile
$messages['blog'] = 'Дневник';
$messages['latest_posts'] = 'Последние записи';

// registration
$messages['register_step0_title'] = 'Примите условия для продолжения регистрации';
$messages['agreement'] = 'Соглашение'; 
$messages['decline'] = 'Не принимаю';
$messages['accept'] = 'Принимаю';
$messages['read_service_agreement'] = 'Прочитайте текст соглашения и нажмите на кнопку "Принимаю", если вы согласны';
$messages['register_step1_title'] = 'Создать пользователя [1/4]';
$messages['register_step1_help'] = 'Сначала вы должны создать пользователя, чтобы получить дневник. Этот пользователь станет владельцем дневника, и будет иметь доступ ко всем его функциональным возможностям';
$messages['register_next'] = 'Вперед';
$messages['register_back'] = 'Назад';
$messages['register_step2_title'] = 'Создать дневник [2/4]';
$messages['register_blog_name_help'] = 'Имя вашего нового дневника';
$messages['register_step3_title'] = 'Выберите шаблон [3/4]';
$messages['step1'] = 'Шаг 1';
$messages['step2'] = 'Шаг 2';
$messages['step3'] = 'Шаг 3';
$messages['register_step3_help'] = 'Выберите один из имеющихся шаблонов, который будет использоваться по умолчанию для вашего дневника. В любой момент вы можете его сменить';
$messages['error_must_choose_template'] = 'Выберите один из шаблонов';
$messages['select_template'] = 'Выбрать шаблон';
$messages['register_step5_title'] = 'Поздравляем! [4/4]';
$messages['finish'] = 'Закончить';
$messages['register_need_confirmation'] = 'Письмо с подтверждением выслано на ваш адрес электронной почты, перейдите на сайт по ссылке, чтобы начать вести дневник!';
$messages['register_step5_help'] = 'Поздравляем, ваш новый пользователь и дневник успешно созданы!';
$messages['register_blog_link'] = 'Если вы хотите увидеть свой новый дневник, вы можете перейти сейчас по этой ссылке: <a href="%2$s">%1$s</a>';
$messages['register_blog_admin_link'] = 'Если вы хотите внести запись позже, нажмите для перехода к <a href="admin.php">Панели управления</a>';
$messages['register_error'] = 'Ошибка при регистрации';
$messages['error_registration_disabled'] = 'Извините, регистрация новых дневников на этом сайте приостановлена';
// registration article topic and text
$messages['register_default_article_topic'] = 'Поздравляем!';
$messages['register_default_article_text'] = 'Если вы читаете это сообщение, значит регистрация прошла успешно и вы можете начать вести свой дневник';
$messages['register_default_category'] = 'Общая';
// confirmation email
$messages['register_confirmation_email_text'] = 'Пожалуйста, нажмите на ссылку снизу, чтобы активировать ваш дневник:

%s

Желаем удачи!';
$messages['error_invalid_activation_code'] = 'Извините, подтверждающий код недействительный';
$messages['blog_activated_ok'] = 'Поздравляем, ваш новый пользователь и дневник созданы!';
// forgot your password?
$messages['reset_password'] = 'Восстановить пароль';
$messages['reset_password_username_help'] = 'Имя пользователя, чей пароль вы хотите восстановить';
$messages['reset_password_email_help'] = 'Адрес электронной почты, который использовался при регистрации этого пользователя';
$messages['reset_password_help'] = 'Используйте эту форму, чтобы восстановить пароль вашего пользователя. Введите имя пользователя, пароль которого Вы хотели бы восстановить, и адрес электронной почты, который использовался для регистрации этого пользователя';
$messages['error_resetting_password'] = 'Ошибка при восстановлении пароля. Проверьте введенные данные и попробуйте еще раз';
$messages['reset_password_error_incorrect_email_address'] = 'Неправильный адрес электронной почты или он не использовался при регистрации этого пользователя';
$messages['password_reset_message_sent_ok'] = 'Письмо со ссылкой выслано на ваш адрес электронной почты. Нажмите на ссылку, чтобы восстановить ваш пароль';
$messages['error_incorrect_request'] = 'Неправильные параметры в адресе';
$messages['change_password'] = 'Установить новый пароль';
$messages['change_password_help'] = 'Пожалуйста, введите и подтвердите ваш новый пароль';
$messages['new_password'] = 'Новый пароль';
$messages['new_password_help'] = 'Введите здесь ваш новый пароль';
$messages['password_updated_ok'] = 'Ваш пароль был успешно обновлен';

// Suggested by BCSE, some useful messages that not available in official locale
$messages['upgrade_information'] = 'Эта страница неправильно отображается, т.к. ваш броузер не поддерживается. Чтобы правильно отобразить страницу <a href="http://www.webstandards.org/upgrade/" title="The Web Standards Project\'s Browser Upgrade initiative">обновите</a> броузер до версии, которая поддерживает W3C стандарты. Это бесплатно и безболезненно.';
$messages['jump_to_navigation'] = 'Перейти к навигации.';
$messages['comment_email_never_display'] = 'Строки и параграфы разбиваются автоматически, адрес электронной почты никогда не показывается.';
$messages['comment_html_allowed'] = '<acronym title="Hypertext Markup Language">HTML</acronym> разрешен: &lt;<acronym title="Hyperlink">a</acronym> href=&quot;&quot; title=&quot;&quot; rel=&quot;&quot;&gt; &lt;<acronym title="Acronym Description">acronym</acronym> title=&quot;&quot;&gt; &lt;<acronym title="Quote">blockquote</acronym> cite=&quot;&quot;&gt; &lt;<acronym title="Strike">del</acronym>&gt; &lt;<acronym title="Italic">em</acronym>&gt; &lt;<acronym title="Underline">ins</acronym>&gt; &lt;<acronym title="Bold">strong</acronym>&gt;';
$messages['trackback_uri'] = '<acronym title="Uniform Resource Identifier">URI страницы</acronym> чтобы отследить эту запись: ';
$messages['previous_post'] = 'Предыдущее';
$messages['next_post'] = 'Следующее';
$messages['comment_default_title'] = '(Безымянный)';
$messages['guestbook'] = 'Гостевая книга';
$messages['trackbacks'] = 'Обратные ссылки';
$messages['menu'] = 'Меню';
$messages['albums'] = 'Альбомы';
$messages['admin'] = 'Администрирование';
?>
