<?php
// -----------------------------------------------------------------------------------
// Persian(Farsi Locale for pLog By FiFiFtHeLeMeNt, admin@irxBlog.com
// -----------------------------------------------------------------------------------

// set this to the encoding that should be used to display the pages correctly
$messages['encoding'] = 'UTF-8';
$messages['locale_description'] = 'Persian Locale for plog';
$messages['direction']='rtl';
// locale format, see Locale::formatDate for more information
$messages['date_format'] = '%T:%U %e/%w/%q';
$messages['archive_date_format'] = '%B %Y';

// days of the week
$messages['days'] = Array( 'یکشنبه', 'دوشنبه', 'سه شنبه', 'چهارشنبه', 'پنجشنبه', 'جمعه', 'شنبه' );
// -- compatibility, do not touch -- //
$messages['Monday'] = $messages['days'][1];
$messages['Tuesday'] = $messages['days'][2];
$messages['Wednesday'] = $messages['days'][3];
$messages['Thursday'] = $messages['days'][4];
$messages['Friday'] = $messages['days'][5];
$messages['Saturday'] = $messages['days'][6];
$messages['Sunday'] = $messages['days'][0];

// abbreviations
$messages['daysshort'] = Array( 'ی', 'د', 'س', 'چ', 'پ', 'ج', 'ش' );
// -- compatibility, do not touch -- //
$messages['Mo'] = $messages['daysshort'][1];
$messages['Tu'] = $messages['daysshort'][2];
$messages['We'] = $messages['daysshort'][3];
$messages['Th'] = $messages['daysshort'][4];
$messages['Fr'] = $messages['daysshort'][5];
$messages['Sa'] = $messages['daysshort'][6];
$messages['Su'] = $messages['daysshort'][0];

// months of the year
$messages['months'] = Array( 'ژانویه', 'فوریه', 'مارس', 'آوریل', 'می', 'ژوئن', 'جولای', 'آگوست', 'سپتامبر', 'اکتبر', 'نوامبر', 'دسامبر' );
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
$messages['message'] = 'پیام';
$messages['error'] = 'خطاء';
$messages['date'] = 'تاریخ';

// miscellaneous texts
// Added By FiFtHeLeMeNt For Persian Language
$messages['posted_in'] = 'نوشته شده در';
$messages['by'] = 'توسط';
$messages['created'] = 'ساخته شده';
$messages['view'] = 'بازدید';
$messages['generated'] = 'تولید شده';
$messages['of'] = 'of';
$messages['recently'] = 'آخرین نوشته ها';
$messages['comments'] = 'نظرات';
$messages['comment on this'] = 'نظر بدهید';
$messages['my_links'] = 'لینکها';
$messages['archives'] = 'نوشته های قبلی';
$messages['search'] = 'جستجو';
$messages['calendar'] = 'تقویم';
$messages['search_s'] = 'جستجو';
$messages['search_this_blog'] = 'جستجو در این بلاگ:';
$messages['about_myself'] = 'درباره من?';
$messages['permalink_title'] = 'لینک دائمی به این آرشیو';
$messages['permalink'] = 'لینک دائمی';
$messages['posted_by'] = 'نوشته شده بوسیله';
$messages['reply'] = 'پاسخ';

// add comment form
$messages['add_comment'] = 'اضافه کردن نظر';
$messages['comment_topic'] = 'عنوان';
$messages['comment_text'] = 'متن';
$messages['comment_username'] = 'نام شما';
$messages['comment_email'] = 'پست الکترونیک شما (اگر دارید)';
$messages['comment_url'] = 'صفحه شخصی شما (اگر دارید)';
$messages['comment_send'] = 'ارسال';
$messages['comment_added'] = 'نظر اضافه شد !';
$messages['comment_add_error'] = 'خطاء در هنگام اضافه کردن نظر';
$messages['article_does_not_exist'] = 'این نوشته وجود ندارد';
$messages['no_posts_found'] = 'هیچ پستی یافت نشد';
$messages['user_has_no_posts_yet'] = 'این کاربر هیچ پستی ندارد';
$messages['back'] = 'بازگشت';
$messages['post'] = 'پست';
$messages['trackbacks_for_article'] = 'لینک کننده ها برای نوشته: ';
$messages['trackback_excerpt'] = 'قطعه منتخب';
$messages['trackback_weblog'] = 'وبلاگ';
$messages['search_results'] = 'نتایج جستجو';
$messages['search_matching_results'] = 'پستهای زیر برای جستجوی شما یافت شد: ';
$messages['search_no_matching_posts'] = 'هیچ پستی برای جستجوی شما یافت نشد';
$messages['read_more'] = '(متن کامل)';
$messages['syndicate'] = 'سندیکا';
$messages['main'] = 'اصلی';
$messages['about'] = 'درباره';
$messages['download'] = 'دانلود';

////// error messages /////
$messages['error_fetching_article'] = 'نوشته یافت نشد';
$messages['error_fetching_articles'] = 'نوشته ها یافت نشد';
$messages['error_trackback_no_trackback'] = 'هیچ لینک کننده ای برای این نوشته یافت نشد.';
$messages['error_incorrect_article_id'] = 'شماره نوشته اشتباه است';
$messages['error_incorrect_blog_id'] = 'شماره بلاگ اشتباه است';
$messages['error_comment_without_text'] = 'شما باید حداقل قسمت متن را پر کنید';
$messages['error_comment_without_name'] = 'شما باید حداقل اسم خود را بنویسید';
$messages['error_adding_comment'] = 'خطاء در هنگام اضافه کردن نظر';
$messages['error_incorrect_parameter'] = 'پارامتر اشتباه';
$messages['error_parameter_missing'] = 'یک پارامتر درخواست کم است';
$messages['error_comments_not_enabled'] = 'ثبت نظر در این سایت غیر فعال می باشد';
$messages['error_incorrect_search_terms'] = 'کلید جستجو معتبر نیست';
$messages['error_no_search_results'] = 'هیچ گزینه ای برای جستجوی شما یافت نشد';
$messages['error_no_albums_defined'] = 'هیچ آلبومی در این بلاگ وجود ندارد';

/////////////////                                          //////////////////
///////////////// STRINGS FOR THE ADMINISTRATION INTERFACE //////////////////
/////////////////                                          //////////////////

// login page
$messages['login'] = 'ورود';
$messages['welcome_message'] = 'به بلاگ ایران جوان خوش آمدید';
$messages['error_incorrect_username_or_password'] = 'متاسفانه، نام کاربری یا کلمه عبور شما اشتباه است';
$messages['error_dont_belong_to_any_blog'] = 'متاسفانه شما هنوز عضو هیچ بلاگی نیستید';
$messages['logout_message'] = 'شما با موفقیت خارج شدید.';
$messages['logout_message_2'] = 'بر روی <a href="%1$s">اینجا</a> کلیک کنید تا به %2$s بروید</a>.';
$messages['error_access_forbidden'] = 'دسترسی غیر مجاز.';
$messages['username'] = 'نام کاربری';
$messages['password'] = 'رمز عبور';

// dashboard
$messages['dashboard'] = 'صفحه اصلی';
$messages['recent_articles'] = 'آخرین مقالات';
$messages['recent_comments'] = 'آخرین نظرها';
$messages['recent_trackbacks'] = 'آخرین لینک کننده ها';
$messages['blog_statistics'] = 'آمار بلاگ';
$messages['total_posts'] = 'کل پستها';
$messages['total_comments'] = 'کل نظرها';
$messages['total_trackbacks'] = 'کل لینک کننده ها';
$messages['total_viewed'] = 'کل پستهای دیده شده';
$messages['in'] = 'در';

// menu options
$messages['newPost'] = 'پست جدید';
$messages['Manage'] = 'مدیریت';
$messages['managePosts'] = 'مدیریت پستها';
$messages['editPosts'] = 'پستها';
$messages['editArticleCategories'] = 'دسته بندی ها';
$messages['newArticleCategory'] = 'دسته بندی جدید';
$messages['manageLinks'] = 'مدیریت لینکها';
$messages['editLinks'] = 'لینکها';
$messages['newLink'] = 'لینک جدید';
$messages['editLink'] = 'ویرایش لینک';
$messages['editLinkCategories'] = 'دسته بندی لینک';
$messages['newLinkCategory'] = 'دسته بندی جدید لینک';
$messages['editLinkCategory'] = 'ویرایش دسته بندی لینک';
$messages['manageCustomFields'] = 'مدیریت فیلدهای دست نویس';
$messages['blogCustomFields'] = 'فیلد دست نویس';
$messages['newCustomField'] = 'فیلد دست نویس جدید';
$messages['resourceCenter'] = 'مرکز فایلها';
$messages['resources'] = 'فایلها';
$messages['newResourceAlbum'] = 'آلبوم جدید';
$messages['newResource'] = 'فایل جدید';
$messages['controlCenter'] = 'مرکز کنترل';
$messages['manageSettings'] = 'تنظیمات';
$messages['blogSettings'] = 'تنظیمات بلاگ';
$messages['userSettings'] = 'تنظیمات کاربری';
$messages['pluginCenter'] = 'مرکز کدهای افزودنی';
$messages['Stats'] = 'آمار';
$messages['manageBlogUsers'] = 'مدیریت کاربران بلاگها';
$messages['newBlogUser'] = 'کاربر جدید بلاگ';
$messages['showBlogUsers'] = 'کاربران بلاگها';
$messages['manageBlogTemplates'] = 'مدیریت تمپلیت بلاگها';
$messages['newBlogTemplate'] = 'تمپلیت جدید';
$messages['blogTemplates'] = 'تمپلیتها';
$messages['adminSettings'] = 'مدیریت سیستم';
$messages['Users'] = 'کاربران';
$messages['createUser'] = 'ایجاد کاربر';
$messages['editSiteUsers'] = 'کاربران سایت';
$messages['Blogs'] = 'مدیریت بلاگها';
$messages['createBlog'] = 'ساختن بلاگ';
$messages['editSiteBlogs'] = 'بلاگها';
$messages['Locales'] = 'مدیریت زبان';
$messages['newLocale'] = 'زبان جدید';
$messages['siteLocales'] = 'زبانهای سایت';
$messages['Templates'] = 'مدیریت تمپلیتها';
$messages['newTemplate'] = 'تمپلیت جدید';
$messages['siteTemplates'] = 'تمپلیتهای سایت';
$messages['GlobalSettings'] = 'تنظیمات کلی';
$messages['editSiteSettings'] = 'عمومی';
$messages['summarySettings'] = 'صفحه اصلی';
$messages['templateSettings'] = 'تمپلیتها';
$messages['urlSettings'] = 'آدرسها';
$messages['emailSettings'] = 'پست الکترونیک';
$messages['uploadSettings'] = 'آپلودها';
$messages['helpersSettings'] = 'کمک کننده های خارجی';
$messages['interfacesSettings'] = 'امکانات جانبی';
$messages['securitySettings'] = 'امنیت';
$messages['bayesianSettings'] = 'فیلتر';
$messages['resourcesSettings'] = 'فایلها';
$messages['searchSettings'] = 'جستجو';
$messages['cleanUpSection'] = 'تمیز کردن';
$messages['cleanUp'] = 'تمیز کردن';
$messages['editResourceAlbum'] = 'ویرایش آلبوم';
$messages['resourceInfo'] = 'ویرایش فایل';
$messages['editBlog'] = 'ویرایش بلاگ';
$messages['Logout'] = 'خروج';

// new post
$messages['topic'] = 'عنوان';
$messages['topic_help'] = 'عنوان پست<br />برای تغییر زبان صفحه کلید از فارسی به انگلیسی و بالعکس از کلید F8 استفاده کنید (فقط IE)';
$messages['text'] = 'متن';
$messages['text_help'] = 'قسمت متن پست ، این بخش همواره در صفحه اول نمایش داده می شود<br />برای تغییر زبان صفحه کلید از فارسی به انگلیسی و بالعکس از کلید F8 استفاده کنید (فقط IE)';
$messages['extended_text'] = 'متن تکمیلی';
$messages['extended_text_help'] = 'بخش تکمیلی متن ، این بخش می تواند در صفحه جداگانه پست و یا صفحه اول نشان داده شود لطفا به تنظیمات بلاگ مراجعه فرمایید<br />برای تغییر زبان صفحه کلید از فارسی به انگلیسی و بالعکس از کلید F8 استفاده کنید (فقط IE)
';
$messages['post_slug'] = 'عنوان لینک پست';
$messages['post_slug_help'] = 'از عنوان لینک پست برای ایجاد لینکهای دائمی زیبا و روان استفاده خواهد شد';
$messages['date'] = 'تاریخ';
$messages['post_date_help'] = 'زمانی که این پست منتشر خواهد شد';
$messages['status'] = 'وضعیت';
$messages['post_status_help'] = 'یکی از وضعیتها را انتخاب کنبد';
$messages['post_status_published'] = 'منتشر شده';
$messages['post_status_draft'] = 'چک نویس';
$messages['post_status_deleted'] = 'پاک شده';
$messages['categories'] = 'دسته بندی ها';
$messages['post_categories_help'] = 'یک یا چند دسته بندی را انتخاب کنید';
$messages['post_comments_enabled_help'] = 'فعالسازی نظرها';
$messages['send_notification_help'] = 'آگاه سازی از نظرهای جدید';
$messages['send_trackback_pings_help'] = 'ارسال لینک داده ها';
$messages['send_xmlrpc_pings_help'] = 'ارسال XMLRPC pings';
$messages['save_draft_and_continue'] = 'ذخیره چک نویس';
$messages['preview'] = 'پیش نمایش';
$messages['add_post'] = 'اضافه کن';
$messages['error_saving_draft'] = 'خطا در هنگام ذخیره کردن چک نویس';
$messages['draft_saved_ok'] = 'چک نویس با موفقیت ذخیره شد';
$messages['error_sending_request'] = 'خطاء در هنگام ارسال درخواست';
$messages['error_no_category_selected'] = 'لطفا حداقل یک دسته بندی را انتخاب کنید';
$messages['error_missing_post_topic'] = 'اطفا یک عنوان برای پست بنویسید';
$messages['error_missing_post_text'] = 'لطفا متن پست را بنویسید';
$messages['error_adding_post'] = 'خطاء در هنگام اضافه کردن پست';
$messages['post_added_not_published'] = 'پست ذخیره شد اما منتشر نشد';
$messages['post_added_ok'] = 'پست با موفقیت اضافه شد';
$messages['send_notifications_ok'] = 'هر زمان که نظر یا لینک کننده جدیدی نوشته شود یک پیام آگاه سازی ارسال می شود.';

// send trackbacks
$messages['error_sending_trackbacks'] = 'خطا در هنگام ارسال لینک کننده های زیر';
$messages['send_trackbacks_help'] = 'لطفا آدرسهایی را که می خواهید برای آنها پست لینک کننده ارسال شود انتخاب نمایید. لطفا در ابتدا مطمئن شوید که آن سایتها هم لینک کننده ها را پشتیبانی می کنند.';
$messages['send_trackbacks'] = 'ارسال لینک کننده ها';
$messages['ping_selected'] = 'پینگ انتخاب شد';
$messages['trackbacks_sent_ok'] = 'لینک کننده ها با موفقیت به آدرسهای انتخاب شده ارسال شدند';

// posts page
$messages['show_by'] = 'نمایش بوسیله';
$messages['category'] = 'دسته بندی';
$messages['author'] = 'مولف';
$messages['post_status_all'] = 'همه';
$messages['author_all'] = 'همه';
$messages['search_terms'] = 'کلمات جستجو';
$messages['show'] = 'نمایش';
$messages['delete'] = 'حذف';
$messages['actions'] = 'اعمال';
$messages['all'] = 'همه';
$messages['category_all'] = 'همه';
$messages['error_incorrect_article_id'] = 'شماره نوشته اشتباه';
$messages['error_deleting_article'] = 'خطا در هنگام حذف پست "%s"';
$messages['article_deleted_ok'] = 'پست "%s" با موفقیت حذف شد';
$messages['articles_deleted_ok'] = '%s پست با موفقیت حذف شد';
$messages['error_deleting_article2'] = 'خطا در هنگام حذف نوشته با شناسه "%s"';

// edit post page
$messages['update'] = 'به روز رسانی';
$messages['editPost'] = 'ویرایش پست';
$messages['error_fetching_post'] = 'خطاء در هنگام بازیابی پست';
$messages['post_updated_ok'] = 'پست "%s" با موفقیت به روز شد';
$messages['error_updating_post'] = 'خطا در هنگام به روز رسانی پست';
$messages['notification_added'] = 'شما از ارسال نظرها و یا لینک کننده ها مطلع خواهید شد';
$messages['notification_removed'] = 'هیچ پیام آگاه سازی در  مورد نظر و لینک کننده های جدید ارسال نخواهد شد';

// post comments
$messages['url'] = 'آدرس';
$messages['comment_status_all'] = 'همه';
$messages['comment_status_spam'] = 'اسپم';
$messages['comment_status_nonspam'] = 'غیر اسپم';
$messages['error_fetching_comments'] = 'خطا در هنگام بازیابی نظرهای نوشته';
$messages['error_deleting_comments'] = 'خطا در هنگام حذف نظرها و یا هیچ نظری انتخاب نشده است';
$messages['comment_deleted_ok'] = 'نظر "%s" با موفقیت حذف شد';
$messages['comments_deleted_ok'] = '%s نظر با موفقیت حذف شد';
$messages['error_deleting_comment'] = 'خطا در هنگام حذف نظر "%s"';
$messages['error_deleting_comment2'] = 'خطا در هنگام حذف نظر با شناسه %s';
$messages['editComments'] = 'نظرها';
$messages['mark_as_spam'] = 'علامتگذاری اسپم';
$messages['mark_as_no_spam'] = 'علامتگذاری غیر اسپم';
$messages['error_incorrect_comment_id'] = 'شناسه نظر درست نیست';
$messages['error_marking_comment_as_spam'] = 'خطا در هنگام علامتگذاری اسپم';
$messages['comment_marked_as_spam_ok'] = 'نظر با موفقیت علامتگذاری اسپم شد';
$messages['error_marking_comment_as_nonspam'] = 'خطا در هنگام علامتگذاری غی اسپم';
$messages['comment_marked_as_nonspam_ok'] = 'نظر با موفقیت علامتگذاری غیر اسپم شد';

// post trackbacks
$messages['blog'] = 'بلاگ';
$messages['excerpt'] = 'قطعه منتخب';
$messages['error_fetching_trackbacks'] = 'خطا در هنگام بازیابی لینک کننده ها';
$messages['error_deleting_trackbacks'] = 'خطا در هنگام حذف لینک کننده ها و یا اینکه هیچ لینک کننده ای انتخاب نشده است';
$messages['error_deleting_trackback'] = 'خطا در هنگام حذف لینک کننده "%s"';
$messages['error_deleting_trackback2'] = 'خطا در هنگام حذف لینک کننده با شناسه "%s"';
$messages['trackback_deleted_ok'] = 'لینک کننده "%s" با موفقیت حذف شد';
$messages['trackbacks_deleted_ok'] = '%s لینک کننده با موفقیت حذف شدند';
$messages['editTrackbacks'] = 'لینک کننده ها';

// post statistics
$messages['referrer'] = 'رجوع کننده';
$messages['hits'] = 'بازدید';
$messages['error_no_items_selected'] = 'هیچ گزینه ای برای حذف انتخاب نشده است';
$messages['error_deleting_referrer'] = 'خطا در هنگام حذف رجوع کننده "%s"';
$messages['error_deleting_referrer2'] = 'خطا در هنگام حذف رجوع کننده با شناسه "%s"';
$messages['referrer_deleted_ok'] = 'رجوع کننده "%s" با موفقیت حذف شد';
$messages['referrers_deleted_ok'] = '%s رجوع کننده با موفقیت حذف شد';

// categories
$messages['posts'] = 'پست';
$messages['show_in_main_page'] = 'نمایش در صفحه اول';
$messages['error_incorrect_category_id'] = 'شناسه دست بندی درست نیست و یا هیچ دسته بندی ای انتخاب نشده است';
$messages['error_category_has_articles'] = 'دسته بندی "%s" در تعدادی از مقالات استفاده شده است. لطفا ابتدا نوشته ها را ویرایش فرمایید و سپس دسته بندی را حذف فرمایید';
$messages['category_deleted_ok'] = 'دسته بندی "%s" با موفقیت حذف شد';
$messages['categories_deleted_ok'] = '%s دسته بندی با موفقیت حذف شد';
$messages['error_deleting_category'] = 'خطا در هنگام حذف دسته بندی "%s"';
$messages['error_deleting_category2'] = 'خطا در هنگام حذف دسته بندی با شناسه "%s"';
$messages['yes'] = 'بله';
$messages['no'] = 'خیر';

// new category
$messages['name'] = 'نام';
$messages['category_name_help'] = 'از این نام برای نشان دادن دسته بندی استفاده خواهد شد<br />برای تغییر زبان صفحه کلید از فارسی به انگلیسی و بالعکس از کلید F8 استفاده کنید (فقط IE)
';
$messages['description'] = 'توضیحات';
$messages['category_description_help'] = 'توضیحات بیشتر برای این دسته بندی<br />برای تغییر زبان صفحه کلید از فارسی به انگلیسی و بالعکس از کلید F8 استفاده کنید (فقط IE)';
$messages['show_in_main_page_help'] = 'آیا نوشته های این دسته بندی باید در صفحه اصلی نمایش داده شوند و یا تنها هنگامی که محتویات این دسته بندی دیده می شود';
$messages['error_empty_name'] = 'شما باید یک اسم ذکر کنید';
$messages['error_empty_description'] = 'شما باید یک توضیح ذکر کنید';
$messages['error_adding_article_category'] = 'خطاء در هنگام اضافه کردن دسته بندی ، لطفا اطلاعات را چک کنید و دوباره سعی کنید';
$messages['category_added_ok'] = 'دسته بندی "%s" با موفقیت به بلاگ اضافه شد';
$messages['add'] = 'اضافه';
$messages['reset'] = 'دوباره';

// update category
$messages['error_updating_article_category'] = 'خطا در هنگام به روز رسانی دسته بندی نوشته';
$messages['error_fetching_category'] = 'خطا در هنگام بازیابی دسته بندی';
$messages['article_category_updated_ok'] = 'دسته بندی "%s" با موفقیت به روز شد';

// links
$messages['feed'] = 'تغذیه';
$messages['error_no_links_selected'] = 'شناسه لینک اشتباه است و یا اینکه هیچ لینکی انتخاب نشده است';
$messages['error_incorrect_link_id'] = 'شناسه لینک درست نیست';
$messages['error_removing_link'] = 'خطا در هنگام حذف لینک "%s"';
$messages['error_removing_link2'] = 'خطا در هنگام حذف لینک با شنایه "%s"';
$messages['link_deleted_ok'] = 'لینک "%s" با موفقیت حذف شد';
$messages['links_deleted_ok'] = '%s لینک با موفقیت حذف شد';

// new link
$messages['link_name_help'] = 'نام داده شده به لینک<br />برای تغییر زبان صفحه کلید از فارسی به انگلیسی و بالعکس از کلید F8 استفاده کنید (فقط IE)';
$messages['link_url_help'] = 'آدرسی که این لینک به آن اشاره می کند';
$messages['link_description_help'] = 'توضیح خلاصه برای این لینک<br />برای تغییر زبان صفحه کلید از فارسی به انگلیسی و بالعکس از کلید F8 استفاده کنید (فقط IE)';
$messages['link_feed_help'] = 'لینک به تغذیه کننده های RSS یا Atom برای این لینک';
$messages['link_category_help'] = 'یکی از دسته بندی های موجود لینک را انتخاب کنید';
$messages['error_adding_link'] = 'خطا در هنگام اضافه کردن لینک ، لطفا اطلاعات را چک کنید';
$messages['error_invalid_url'] = 'آدرس اشتباه است';
$messages['link_added_ok'] = 'لینک "%s" با موفقیت اضافه شد';

// update link
$messages['error_updating_link'] = 'خطا در هنگام به روز رسانی لینک ، اطلاعات را چک کنید و دوباره سعی کنید';
$messages['error_fetching_link'] = 'خطا در هنگام بازیابی لینک';
$messages['link_updated_ok'] = 'لینک "%s" با موفقیت به روز شد';

// link categories
$messages['links'] = 'لینکها';
$messages['error_invalid_link_category_id'] = 'شناسه دسته بندی لینک اشتباه است و یا هیچ دسته بندی ای انتخاب نشده است';
$messages['error_links_in_link_category'] = 'دسته بندی لینک "%s" بوسیله تعدادی از لینکها استفاده شده است. ابتدا لینکها را تغییر دهید و سپس دوباره سعی کنید';
$messages['error_removing_link_category'] = 'خطا در هنگام حذف دسته بندی لینک "%s"';
$messages['link_category_deleted_ok'] = 'دسته بندی لینک "%s" با موفقیت حذف شد';
$messages['link_categories_deleted_ok'] = '%s دسته بندی لینم با موفقیت حذف شد';
$messages['error_removing_link_category2'] = 'خطا در هنگام حذف دسته بندی لینک با شناسه "%s"';

// new link category
$messages['link_category_name_help'] = 'اسمی که به دسته بندی لینک داده می شود<br />برای تغییر زبان صفحه کلید از فارسی به انگلیسی و بالعکس از کلید F8 استفاده کنید (فقط IE)';
$messages['error_adding_link_category'] = 'خطا در هنگام اضافه کردن دسته بندی لینک';
$messages['link_category_added_ok'] = 'دسته بندی لینک "%s" با موفقیت اضافه شد';

// edit link category
$messages['error_updating_link_category'] = 'خطا در هنگام به روز رسانی دسته بندی لینک ، اطلاعات را چک کنید و دوباره سعی کنید';
$messages['link_category_updated_ok'] = 'دسته بندی لینک "%s" با موفقیت به روز شد';
$messages['error_fetching_link_category'] = 'خطا در هنگام بازیابی دسته بندی لینک';

// custom fields
$messages['type'] = 'نوع';
$messages['hidden'] = 'پنهان';
$messages['fields_deleted_ok'] = '%s فیلد دست نویس با موفقیت حذف شد';
$messages['field_deleted_ok'] = 'فیلد دست نویس "%s" با موفقیت حذف شد';
$messages['error_deleting_field'] = 'خطا در هنگام حذف فیلد دست نویس "%s"';
$messages['error_deleting_field2'] = 'خطا در هنگام حذف فیلد دست نویس با شناسه "%s"';
$messages['error_incorrect_field_id'] = 'شناسه فیلد دست نویس معتبر نیست';

// new custom field
$messages['field_name_help'] = 'شناسه ای که در پستها برای اشاره به این فیلد استفاده خواهد شد<br />برای تغییر زبان صفحه کلید از فارسی به انگلیسی و بالعکس از کلید F8 استفاده کنید (فقط IE)';
$messages['field_description_help'] = 'توضیح کوتاهی در مورد این فیلد که در هنگام ایجاد و یا ویرایش پست نشان داده می شود<br />برای تغییر زبان صفحه کلید از فارسی به انگلیسی و بالعکس از کلید F8 استفاده کنید (فقط IE)';
$messages['field_type_help'] = 'یکی از انواع فیلدها را انتخاب کنید';
$messages['field_hidden_help'] = 'اگر یک فیلد پنهان باشد در هنگام ایجاد و یا ویرایش پستها نمایش داده نمی شود ، این نوع فیلد اکثرا با برنامه های افزودنی استفاده می شود';
$messages['error_adding_custom_field'] = 'خطا در هنگام اضافه کردن فیلد دست نویس ، اطلاعات را چک کنید و دوباره سعی کنید';
$messages['custom_field_added_ok'] = 'فیلد دست نویس "%s" با موفقیت اضافه شد';
$messages['text_field'] = 'فیلد متنی';
$messages['text_area'] = 'جعبه متنی';
$messages['checkbox'] = 'چک باکس';
$messages['date_field'] = 'تاریخ';

// edit custom field
$messages['error_fetching_custom_field'] = 'خطا در هنگام بازیابی فیلد دست نویس';
$messages['error_updating_custom_field'] = 'خطا در هنگام به روز رسانی فیلد دست نویس ، اطلاعات را چک کنید و دوباره سعی کنید';
$messages['custom_field_updated_ok'] = 'فیلد دست نویس "%s" با موفقیت به روز شد'; 

// resources
$messages['root_album'] = 'آلبوم اصلی';
$messages['num_resources'] = 'تعداد فایلها';
$messages['total_size'] = 'سایز کلی';
$messages['album'] = 'آلبوم';
$messages['error_incorrect_album_id'] = 'شناسه آلبوم درست نیست';
$messages['error_base_storage_folder_missing_or_unreadable'] = 'متاسفانه این برنامه موفق به ساختن فولدرهای لازم نشد. شما می توانید به صورت دستی آنها را ایجاد کنید: <br/><br/>%s<br/><br/>اگر آنها بر روی سرور موجود می باشد اجازه های دسترسی آنها را چک کنید.';
$messages['items_deleted_ok'] = '%s گزینه با موفقیت حذف شد';
$messages['error_album_has_children'] = 'آلبوم "%s" دارای زیر دسته بندی می باشد. لطفا ابتدا آلبوم را ویرایش کنید';
$messages['item_deleted_ok'] = 'گزینه "%s" با موفقیت حذف شد';
$messages['error_deleting_album'] = 'خطا در هنگام حذف آلبوم "%s"';
$messages['error_deleting_album2'] = 'خطا در هنگام حذف آلبوم با شناسه "%s"';
$messages['error_deleting_resource'] = 'خطا در هنگام حذف فایل "%s"';
$messages['error_deleting_resource2'] = 'خطا هنگام حذف فایل با شناسه "%s"';
$messages['error_no_resources_selected'] = 'هیچ گزینه ای انتخاب نشده است';
$messages['resource_deleted_ok'] = 'فایل "%s" با موفقیت حذف شد';
$messages['album_deleted_ok'] = 'آلبوم "%s" با موفقیت حذف شد';
$messages['add_resource'] = 'اضافه کردن فایل';
$messages['add_resource_preview'] = 'اضافه کردن پیش نمایش';
$messages['add_resource_medium'] = 'اضافه کردن پیش نمایش متوسط';
$messages['add_album'] = 'اضافه کردن آلبوم';

// new album
$messages['album_name_help'] = 'نام کوتاه برای آلبوم<br />برای تغییر زبان صفحه کلید از فارسی به انگلیسی و بالعکس از کلید F8 استفاده کنید (فقط IE)';
$messages['parent'] = 'منشاء';
$messages['no_parent'] = 'بدون منشاء';
$messages['parent_album_help'] = 'از این گزینه برای داشتن آلبومهای تو در تو استفاده کنید تا عکسهای خود بهتر طبقه بندی کنید';
$messages['album_description_help'] = 'توضیح بیشتر محتویات این آلبوم<br />برای تغییر زبان صفحه کلید از فارسی به انگلیسی و بالعکس از کلید F8 استفاده کنید (فقط IE)';
$messages['error_adding_album'] = 'خطا در هنگام اضافه کردن آلبوم جدید ، اطلاعات را چک کنید و دوباره سعی کنید';
$messages['album_added_ok'] = 'آلبوم "%s" با موفقیت اضافه شد';

// edit album
$messages['error_incorrect_album_id'] = 'شناسه آلبوم اشتباه است';
$messages['error_fetching_album'] = 'خطا در هنگام بازیابی آلبوم';
$messages['error_updating_album'] = 'خطا در هنگام به روز رسانی آلبوم ، اطلاعات را چک کنید و دوباره سعی نمایید';
$messages['album_updated_ok'] = 'آلبوم "%s" با موفقیت به روز شد';
$messages['show_album_help'] = 'اگر غیر فعال باشد ، گزینه آلبوم در صفحه وبلاگ نمایش داده نخواهد شد';

// new resource
$messages['file'] = 'فایل';
$messages['resource_file_help'] = 'فایل به این بلاگ اضافه خواهد شد ، بر روی اضافه کردن فیلد کلیک کنید تا بصورت همزمان چند فایل را آپلود کنید';
$messages['add_field'] = 'اضافه کردن فیلد';
$messages['resource_description_help'] = 'توضیح مفصل درباره محتویات این فایل<br />برای تغییر زبان صفحه کلید از فارسی به انگلیسی و بالعکس از کلید F8 استفاده کنید (فقط IE)';
$messages['resource_album_help'] = 'لطفا آلبومی را که این فایل به آن اضافه خواهد شد مشخص نمایید';
$messages['error_no_resource_uploaded'] = 'هیچ فایلی برای آپلود انتخاب نشده است';
$messages['resource_added_ok'] = 'فایل "%s" با موفقیت اضافه شد';
$messages['error_resource_forbidden_extension'] = 'فایل اضافه نشد زیرا نوع آن قابل قبول نیست';
$messages['error_resource_too_big'] = 'فایل اضافه نشد زیرا اندازه آن خیلی بزرگ است';
$messages['error_uploads_disabled'] = 'فایل اضافه نشد زیرا آپلود غیر فعال است';
$messages['error_quota_exceeded'] = 'فایل اضافه نشد زیرا شما از تمامی فضای قابل استفاده خود استفاده کرده اید !';
$messages['error_adding_resource'] = 'خطا در هنگام اضافه کردن فایل';

// edit resource
$messages['editResource'] = 'ویرایش فایل';
$messages['resource_information_help'] = 'در زیر اطلاعات مربوط به این فایل را می بینید';
$messages['information'] = 'اطلاعات';
$messages['size'] = 'حجم';
$messages['format'] = 'فرمت';
$messages['dimensions'] = 'ابعاد';
$messages['bits_per_sample'] = 'تعداد بیتها در نمونه';
$messages['sample_rate'] = 'نرخ نمونه';
$messages['number_of_channels'] = 'تعداد کانالها';
$messages['legnth'] = 'طول';
$messages['thumbnail_format'] = 'فرمت تصویر کوچک';
$messages['regenerate_preview'] = 'دوباره سازی پیش نمایش';
$messages['error_fetching_resource'] = 'خطا در هنگام بازیابی فایل';
$messages['error_updating_resource'] = 'خطا در هنگام به روز رسانی فایل';
$messages['resource_updated_ok'] = 'فایل "%s" با موفقیت به روز رسانی شد';

// blog settings
$messages['blog_link'] = 'لینک بلاگ';
$messages['blog_link_help'] = 'لینک دائمی به این بلاگ';
$messages['blog_name_help'] = 'عنوان این بلاگ<br />برای تغییر زبان صفحه کلید از فارسی به انگلیسی و بالعکس از کلید F8 استفاده کنید (فقط IE)';
$messages['blog_description_help'] = 'توضیح مفصل تر درباره محتویات این بلاگ<br />برای تغییر زبان صفحه کلید از فارسی به انگلیسی و بالعکس از کلید F8 استفاده کنید (فقط IE)';
$messages['language'] = 'زبان';
$messages['blog_language_help'] = 'زبان مورد استفاده در این بلاگ ، چه در قسمت عمومی و چه در قسمت مدیریت';
$messages['max_main_page_items'] = 'تعداد گزینه ها در صفحه اصلی';
$messages['max_main_page_items_help'] = 'تعداد پستهایی که در صفحه اصلی بلاگ به نمایش در می آید';
$messages['max_recent_items'] = 'تعداد نوشته های اخیر';
$messages['max_recent_items_help'] = 'تعداد پستهایی که به صورت آخرین نوشته ها در صفحه اصلی به نمایش در خواهد آمد';
$messages['template'] = 'تمپلیت';
$messages['choose'] = 'انتخاب';
$messages['blog_template_help'] = 'تمپلیتی که برای نمایش این بلاگ مورد استفاده قرار خواهد گرفت. این لیست شامل تمپلیتهای عمومی و تمپلیتهای نصب شده بر روی این بلاگ می باشد';
$messages['use_read_more'] = 'استفاده از لینک "متن کامل" در پستها';
$messages['use_read_more_help'] = 'اگر فعال شود تنها متنی مه در قسمت "متن" نوشته شده است در صفحه اصلی به نمایش در می آید. و برای نمایش "متن تکمیلی", یک لینک "متن کامل" به هر پست اضافه می شود';
$messages['enable_wysiwyg'] = 'فعال سازی ادیتور مجازی برای پستها';
$messages['enable_wysiwyg_help'] = 'فعالسازی ادیتور قدرتمند برای نوشتن پستها';
$messages['enable_comments'] = 'فعال سازی نظرها';
$messages['enable_comments_help'] = 'فعال سازی نظرها به صورت از پیش تعیین شده برای تمامی پستها ، نظرها می توانند برای تک تک پستها فعال و یا غیر فعال شوند';
$messages['show_future_posts'] = 'نمایش پستهای آینده در تقویم';
$messages['show_future_posts_help'] = 'پستهایی که تاریخ انتشار آنها در آینده است به کاربران نشان داده شود';
$messages['comments_order'] = 'ترتیب نظرها';
$messages['comments_order_help'] = 'ترتیبی که نظرها باید با آن در صفحه اصلی نمایش داده شوند';
$messages['oldest_first'] = 'قدیمی تر اول';
$messages['newest_first'] = 'جدید تر اول';
$messages['categories_order'] = 'ترتیب دسته بندی ها';
$messages['categories_order_help'] = 'ترتیبی که دسته بندی ها باید با آن در صفحه اول نشان داده شوند';
$messages['most_recent_updated_first'] = 'به روز شده ها اول';
$messages['alphabetical_order'] = 'ترتیب الفبایی';
$messages['reverse_alphabetical_order'] = 'ترتیب الفبایی برعکس';
$messages['most_articles_first'] = 'مقالات بیشتر اول';
$messages['link_categories_order'] = 'ترتیب دسته بندی لینکها';
$messages['link_categories_order_help'] = 'ترتیبی که دسته بندی لینکها با آن باید در صفحه اول نمایش داده شوند';
$messages['most_links_first'] = 'لینکهای بیشتر اول';
$messages['most_links_last'] = 'لینکهای بیشتر آخر';
$messages['time_offset'] = 'مبدا زمانی';
$messages['time_offset_help'] = 'تفاوت زمانی که به زمان هر پست به صورت اتوماتیک اضافه خواهد شد';
$messages['close'] = 'بستن';
$messages['select'] = 'انتخاب';
$messages['error_updating_settings'] = 'خطا در هنگام به روز رسانی تنظیمات بلاگ ، اطلاعات را چک کنید و دوباره سعی کنید';
$messages['error_invalid_number'] = 'تعداد صحیح نیست !';
$messages['error_incorrect_time_offset'] = 'مبدا زمانی صحیح نیست';
$messages['blog_settings_updated_ok'] = 'تنظیمات بلاگ با موفقیت به روز شد';
$messages['hours'] = 'ساعت';

// user settings
$messages['username_help'] = 'نام کاربری. قابل تغییر نخواهد بود';
$messages['full_name'] = 'نام و نام خانوادگی';
$messages['full_name_help'] = 'نام و نام خانوادگی به صورت کامل ذکر شود';
$messages['password_help'] = 'یک رمزعبور جدید و تایید آن را تایپ کنید و یا برای عدم تغییر آن را خالی بگذارید';
$messages['confirm_password'] = 'تایید رمز عبور';
$messages['email'] = 'پست الکترونیک';
$messages['email_help'] = 'پست الکترونیکی که آگاه سازی ها به آن ارسال می شود';
$messages['bio'] = 'بیوگرافی شما';
$messages['bio_help'] = 'در این قسمت می توانید بیوگرافی کاملی از خود قرار دهید<br />برای تغییر زبان صفحه کلید از فارسی به انگلیسی و بالعکس از کلید F8 استفاده کنید (فقط IE)';
$messages['picture'] = 'عکس';
$messages['user_picture_help'] = 'لطفا یکی از عکسهایی را که در این بلاگ آپلود شده اند را به عنوان تصویر شخصی انتخاب کنید';
$messages['error_invalid_password'] = 'رمز عبور صحیح نیست. لطفا اطمینان حاصل کنید که آن خیلی کوتاه نباشد';
$messages['error_passwords_dont_match'] = 'متاسفانه رمزهای عبور با هم همخوانی ندارند';
$messages['error_incorrect_email_address'] = 'پست الکترونیک صحیح نیست';
$messages['error_updating_user_settings'] = 'خطا در هنگام به روز رسانی تنظیمات کاربری ، لطفا اطلاعات را چک کنید و دوباره سعی کنید';
$messages['user_settings_updated_ok'] = 'تنظیمات کاربری با موفقیت به روز شد';
$messages['resource'] = 'فایل';

// plugin centre
$messages['identifier'] = 'شناسه';
$messages['error_plugins_disabled'] = 'متاسفانه کدهای افزودنی غیر فعال شده اند';

// blog users
$messages['revoke_permissions'] = 'ابطال اجازه ها';
$messages['error_no_users_selected'] = 'هیچ کاربری انتخاب نشده است';
$messages['user_removed_from_blog_ok'] = 'کاربر "%s" اجازه دسترسی به این بلاگ را نخواهد داشت';
$messages['users_removed_from_blog_ok'] = '%s کاربر به این بلاگ دسترسی ندارند';
$messages['error_removing_user_from_blog'] = 'خطا در هنگام حذف اجازه دسترسی کاربر "%s" به این بلاگ';
$messages['error_removing_user_from_blog2'] = 'خطا در هنگام حذف اجازه دسترسی کاربر با شناسه "%s" به این بلاگ';

// new blog user
$messages['new_blog_username_help'] = 'نام کاربری که شما می خواهید به او اجازه دسترسی به این بلاگ را بدهید. کاربران جدید تنها به قسمت مدیریت و فایلها دسترسی خواهند داشت.';
$messages['send_notification'] = 'ارسال آگاه سازی';
$messages['send_user_notification_help'] = 'ارسال یک ایمیل به این کاربر';
$messages['notification_text'] = 'متن آگاه سازی';
$messages['notification_text_help'] = 'متنی که در ایمیل آگاه سازی اضافه خواهد شد<br />برای تغییر زبان صفحه کلید از فارسی به انگلیسی و بالعکس از کلید F8 استفاده کنید (فقط IE)';
$messages['error_adding_user'] = 'خطا در هنگام دادن اجازه دسترسی به کاربر ، لطفا اطلاعات را چک کنید و دوباره سعی نمایید';
$messages['error_empty_text'] = 'شما باید قسمت متن را پر کنید';
$messages['error_adding_user'] = 'خطا در هنگام اضافه کردن کاربر ، دوباره سعی کنید';
$messages['error_invalid_user'] = 'کاربر "%s" معتبر نیست و یا وجود ندارد';
$messages['user_added_to_blog_ok'] = 'کاربر "%s" با موفقیت اجازه دسترسی به این بلاگ را پیدا کرد';

// blog templates
$messages['error_no_templates_selected'] = 'هیچ تمپلیتی انتخاب نشده است';
$messages['error_template_is_current'] = 'تمپلیت "%s" قابل حذف نیست. زیرا این تنها تمپلیت موجود است !';
$messages['error_removing_template'] = 'خطا در هنگام حذف تمپلیت "%s"';
$messages['template_removed_ok'] = 'تمپلیت "%s" با موفقیت حذف شد';
$messages['templates_removed_ok'] = '%s تمپلیت با موفقیت حذف شدند ';

// new blog template
$messages['template_installed_ok'] = 'تمپلیت "%s" با موفقیت اضافه شد';
$messages['error_installing_template'] = 'خطا در هنگام نصب تمپلیت "%s"';
$messages['error_missing_base_files'] = 'تعدادی از فایلهای تمپلیت کم است !';
$messages['error_add_template_disabled'] = 'تمپلیتهای جدید قابل اضافه کردن نیست زیرا این قابلیت در این سایت غیر فعال شده است';
$messages['error_must_upload_file'] = 'هیچ بسته تمپلیتی آپلود نشد';
$messages['error_uploads_disabled'] = 'آپلود در این سایت غیر فعال شده است';
$messages['error_no_new_templates_found'] = 'هیچ تمپلیت جدیدی یافت نشد';
$messages['error_template_not_inside_folder'] = 'فایلهای تمپلیت باید درون یک شاخه به نام خود تمپلیت باشند';
$messages['error_missing_base_files'] = 'تعدادی از فایلهای اساسی تمپلیت کم است';
$messages['error_unpacking'] = 'خطا در هنگام بازکردن فایل';
$messages['error_forbidden_extensions'] = 'فایلهای تمپلیت حاوی فایلهایی با پسوندهای غیر مجاز است !';
$messages['error_creating_working_folder'] = 'خطا در هنگام ایجاد شاخه موقتی برای باز کدن فایل تمپلیت';
$messages['error_checking_template'] = 'خطا در هنگام چک کردن تمپلیت: %s';
$messages['template_package'] = 'بسته تمپلیت';
$messages['blog_template_package_help']  = 'از این فرم برای ارسال یک بسته تمپلیت که تنها برای بلاگ شما قابل دسترسی خواهد بود استفاده کنید. اگر امکان ارسال تمپلیت بوسیله این فرم وجود ندارد ، آنها را بصورت دستی در قسمت <b>%s</b>، که شاخه تمپلیتها می باشد کپی کنید و روی دکمه "<b>جستجوی تمپلیتها</b>" کلیک کنید تا تمپلیت به صورت اتوماتیک به لیست اضافه شود..';
$messages['scan_templates'] = 'جستجوی تمپلیتها';

// site users
$messages['user_status_active'] = 'فعال';
$messages['user_status_disabled'] = 'غیر فعال';
$messages['user_status_all'] = 'همه';
$messages['user_status_unconfirmed'] = 'تایید نشده';
$messages['error_invalid_user2'] = 'کاربر با شناسه "%s" وجود ندارد';
$messages['error_deleting_user'] = 'خطا در هنگام غیر فعال کردن  کاربر با شناسه"%s"';
$messages['user_deleted_ok'] = 'کاربر "%s" با شناسه با موفقیت غیرفعال شد';
$messages['users_deleted_ok'] = '%s کاربر با موفقیت غیرفعال شد';

// create user
$messages['user_added_ok'] = 'کاربر "%s" با موفقیت اضافه شد';
$messages['error_incorrect_username'] = 'نام کاربری صحیح نیست و قبلا گرفته شده است';
$messages['user_status_help'] = 'وضعیت فعلی برای این کاربر';
$messages['user_blog_help'] = 'بلاگ این کاربر فورا اختصاص خواهد یافت';
$messages['none'] = 'هیچ';

// edit user
$messages['error_invalid_user'] = 'شناسه کاربر درست نیست و یا کاربر وجود ندارد';
$messages['error_updating_user'] = 'خطا در هنگام به روز کردن تنظیمات کاربر ، اطلاعات را چک کنید و دوباره سعی کنید';
$messages['blogs'] = 'بلاگها';
$messages['user_blogs_helps'] = 'بلاگی که ایک کاربر مالک آن است و یا به آن دسترسی دارد';
$messages['site_admin'] = 'مدیر سیستم';
$messages['site_admin_help'] = 'آیا این کاربر به اختیارات مدیریتی سیستم دسترسی داشته باشد و گزینه مدیریت سیستم در منوی او نمایش داده شود ';
$messages['user_updated_ok'] = 'کاربر "%s" با موفقیت به روز شد';

// site blogs
$messages['blog_status_all'] = 'همه';
$messages['blog_status_active'] = 'فعال';
$messages['blog_status_disabled'] = 'غیر فعال';
$messages['blog_status_unconfirmed'] = 'تایید نشده';
$messages['owner'] = 'مالک';
$messages['quota'] = 'سهمیه';
$messages['bytes'] = 'بایت';
$messages['error_no_blogs_selected'] = 'هیچ بلاگی برای غیرفعال کردن انتخاب نشده است';
$messages['error_blog_is_default_blog'] = 'بلاگ "%s" قابل حذف شدن نیست زیرا بلاگ default است';
$messages['blog_deleted_ok'] = 'بلاگ "%s" با موفقیت غیرفعال شد';
$messages['blogs_deleted_ok'] = '%s بلاگ با موفقیت حذف شد';
$messages['error_deleting_blog'] = 'خطا در هنگام غیرفعال کردن بلاگ "%s"';
$messages['error_deleting_blog2'] = 'خطا در هنگام غیرفعال کردن بلاگ با شناسه "%s"';

// create blog
$messages['error_adding_blog'] = 'خطا در هنگام اضافه کردن بلاگ ، اطلاعات را چک کنید و دوباره سعی کنید';
$messages['blog_added_ok'] = 'بلاگ "%s" با موفقیت اضافه شد';

// edit blog
$messages['blog_status_help'] = 'وضعیت بلاگ';
$messages['blog_owner_help'] = 'کاربری که مالک بلاگ خواهد بود و به قسمتهای مدیریتی آن دسترسی خواهد داشت';
$messages['users'] = 'کاربران';
$messages['blog_quota_help'] = 'سهمیه فایلها برای بلاگ ، صفر به منزله نامحدود خواهد بود و یا آن را خالی بگذارید تا از تنظمات کلی استفاده شود';
$messages['blog_users_help'] = 'کاربرانی که به این بلاگ دسترسی دارند';
$messages['edit_blog_settings_updated_ok'] = 'بلاگ "%s" با موفقیت به روز شد';
$messages['error_updating_blog_settings'] = 'خطا در هنگام به روز رسانی بلاگ "%s"';
$messages['error_incorrect_blog_owner'] = 'کاربری که به عنوان مالک بلاگ انتخاب شد درست نیست';
$messages['error_fetching_blog'] = 'خطا در هنگام بازیابی بلاگ';
$messages['error_updating_blog_settings2'] = 'خطا در هنگام به روز رسانی بلاگ ، اطلاعات را چک کنید و دوباره سعی کنید';
$messages['add_or_remove'] = 'حذف و اضافه کاربران';

// site locales
$messages['locale'] = 'منطقه';
$messages['locale_encoding'] = 'کدینگ';
$messages['locale_deleted_ok'] = 'منطقه "%s" با موفقیت حذف شد';
$messages['error_no_locales_selected'] = 'هیچ منطقه ای برای حذف انتخاب نشده است';
$messages['error_deleting_only_locale'] = 'منطقه قابل حذف نیست زیرا هیچ منطقه دیگری بر روی سیستم وجود ندارد';
$messages['locales_deleted_ok']= '%s منطقه با موفقیت حذف شد';
$messages['error_deleting_locale'] = 'خطا در هنگام حذف منطقه "%s"';
$messages['error_locale_is_default'] = 'منطقه "%s" قابل حذف نیست زیرا به عنوان منطقه از پیش تعیین شده برای بلاگهای جدید است';

// add locale
$messages['error_invalid_locale_file'] = 'فایل منطقه معتبر نیست';
$messages['error_no_new_locales_found'] = 'هیچ فایل منطقه جدیدی پیدا نشد';
$messages['locale_added_ok'] = 'منطقه "%s" با موفقیت اضافه شد';
$messages['error_saving_locale'] = 'خطا در هنگام ذخیره فایل منطقه';
$messages['scan_locales'] = 'جستجوی منطقه ها';
$messages['add_locale_help'] = 'از این فرم برای آپلود فایلهای منطقه جدید استفاده کنید اگر امکان آپلود نیست ، آنها را به صورت دستی در شاخه<b>./locales/</b>, کپی کنید و بر روی دکمه "<b>جستجوی منطقه</b>" کلیک کنید تا برنامه به صورت خودکار شاخه را جستجو کند و فایلهای منطقه جدید را اضافه کند.';

// site templates
$messages['error_template_is_default'] = 'تمپلیت "%s" قابل حذف نیست زیرا آن تمپلیت از پیش تعیین شده برای بلاگهای سایت است.';

// add template
$messages['global_template_package_help'] = 'از این فرم برای آپلود ست تمپلیت استفاده کنید که برای تمامی بلاگهای سایت قابل استفاده خواهد بود اگر امکان آپلود وجود ندارد فایلها را در شاخه <b>%s</b>, که شاخه تمپلیتها برای همه بلاگها است کپی کنید و بر روی دکمه "<b>جستجوی تمپلیتها</b>" کلیک کنید ، برنامه به صورت خودکار شاخه را جستجو خواهد کرد و تمپلیت را اضافه خواهد کرد';

// global settings
$messages['site_config_saved_ok'] = 'تنظیمات سایت با موفقیت اضافه شد';
$messages['error_saving_site_config'] = 'خطا در هنگام ذخیره تنظیمات سایت';
/// general settings
$messages['help_comments_enabled'] = 'فعالسازی نظرها برای بلاگها به صورت پیش فرض [پیش فرض = بله]';
$messages['help_beautify_comments_text'] = 'اگر فعال شود تمامی نظرهای ارسالی در بلاگها دارای فرمت بندی و پاراگراف بندی و تبدیل آدرس به لینک به صورت خودکار خواهد شد [پیش فرض = بله]';
$messages['help_temp_folder'] = 'شاخه ای که برنامه از آن برای ذخیره موقتی داده ها استفاده می کند برای امنیت بیشتر این شاخه را در خارج از دسترسی وب سرور انتخاب کنید [پیش فرض = ./tmp]';
$messages['help_base_url'] = 'آدرس پایه ای که این برنامه در آن نصب شده است';
$messages['help_subdomains_enabled'] = 'فعال یا غیرفعال بودن زیردامنه ها [پیش فرض = خیر]';
$messages['help_subdomains_base_url'] = 'زمانی که زیر دامنه ها فعال شده باشند از این آدرس پایه استفاده خواهد شد. از {blogname} بجای نام بلاگ و از {username} برای نام کاربری استفاده کنید. (برای مثال http://{blogname}.yourdomain.com})';
$messages['help_include_blog_id_in_url'] = 'معنادار تنها هنگامی که زیر دامنه ها و آدرسهای "طبیعی" فعال شده باشند , سیستم را مجبور می کند که شناسه بلاگ را در آدرس بلاگ لحاظ نکند. اگر با این گزینه آشنا نیستید آن را تغییر ندهید [پیش فرض = بله]';
$messages['help_script_name'] = 'اگر قصد دارید که فایل ایندکس index.php را به چیز دیگر تغییر دهید ، این گزینه را تغییر دهید [پیش فرض = index.php]';
$messages['help_show_posts_max'] = 'حداکثر  تعداد پست نشان داده شده در صفحه اول. معنی دار برای بلاگهای جدید [پیش فرض = 15]';
$messages['help_recent_posts_max'] = 'حداکثر تعداد "آخرین پستها"ی نشان داده شده در صفحه اول. معنی دار تنها برای بلاگهای جدید [پیش فرض = 10]';
$messages['help_save_drafts_via_xmlhttprequest_enabled'] = 'آیا امکان ذخیره چک نویسها توسط کدهای جاوااسکریپت و XmlHttpRequest فعال شود [پیش فرض = بله]';
$messages['help_locale_folder'] = 'شاخه ای که فایلهای منطقهای در آن قرار دارند [پیش فرض = ./locale]';
$messages['help_default_locale'] = 'تنظیم زبان پیش فرض برای بلاگهای جدید [پیش فرض = en_UK]';
$messages['help_default_blog_id'] = 'بلاگ پیش فرضی که اگر هیچ بلاگی انتخاب نشده بود نشان داده شود [پیش فر ض = 1]';
$messages['help_default_time_offset'] = 'تغییر ساعت زمانی پیش فرض برای بلاگها [پیش فرض = 0]';
$messages['help_html_allowed_tags_in_comments'] = 'تگهای HTML که در نظرها فعال شوند ، باید با یک فاصله از هم جدا شوند [Default = &lt;a&gt;&lt;i&gt;&lt;br&gt;&lt;br/&gt;&lt;b&gt;]';
$messages['help_referer_tracker_enabled'] = 'فعالسازی یا غیرفعالسازی دخیره رجوع کننده های HTTP در دیتابیس. برای کارآمدی بالا غیرفعال کنید [پیش فرض = بله]';
$messages['help_show_more_enabled'] = 'فعال سازی یا غیر فعال سازی "متن کامل" برای بلاگهای جدید [پیش فرض = بله]';
$messages['help_update_article_reads'] = 'فعالسازی شمارنده تعداد خواننده نوشته. برای کارآمدی بلاتر غیرفعال کنید [پش فرض = بله]';
$messages['help_update_cached_article_reads'] = 'فعال سازی یا غیرفعال سازی شمارنده تعداد خواننده های یک نوشته, حتی زمانی که caching فعال باشد [پیش فرض = بله]';
$messages['help_xmlrpc_ping_enabled'] = 'فعالسازی یا غیرفعالسازی ارسال پینگهای XMLRPC به سایتهایی که این امکان را پشتیبانی می کنند [پیش فرض = بله]';
$messages['help_send_xmlrpc_pings_enabled_by_default'] = 'فعالسازی و یا غیرفعالسازی این امکان زمانی که یک نوشته تغییر داده می شود و یا به روز می شود [پیش فرض = بله]';
$messages['help_xmlrpc_ping_hosts'] = 'آدرسی که به XMLRPC interface سایتهای دارای امکان پینگ XMLRPC اشاره می کند. هر آدرس را در یک خط جدید بنویسید [پیش فرض = http://rpc.weblogs.com/RPC2]';
$messages['help_trackback_server_enabled'] = 'فعالسازی یا غیر فعالسازی امکان دریافت لینک کننده های ارسال شده از سایتهای دیگر [پیش فرض = بله]';
$messages['help_htmlarea_enabled'] = 'فعالسازی یا غیرفعالسازی ادیتور پیشرفته WYSIWYG برای بلاگهای جدید [پیش فرض = بله';
$messages['help_plugin_manager_enabled'] = 'فعالسازی یا غیر فعالسازی کدهای افزودنی [پیش فرض = بله]';
$messages['help_minimum_password_length'] = 'حداقل طول برای رمز عبور [پیش فرض = 4]';
$messages['help_xhtml_converter_enabled'] = 'اگر فعال شود سیستم تلاش خواهد کرد تمامی کدهای HTML را به XHTML تبدیل کند [پیش فرض = بله]';
$messages['help_xhtml_converter_aggressive_mode_enabled'] = 'اگر فعال شود, سیستم تلاش سخت تری را برای تولید کدهای XHTML از HTML خواهد کرد, اما امکان ایجاد خطا بیشتر می شود [پیش فرض = خیر]';
$messages['help_session_save_path'] = 'از این تنظیم برای مشخص کردن محلی که سیستم Session ها را در آنجا ذخیره می کند استفاده نمایید, از طریق دستوالعمل session_save_path() لطفا مطمئن شوید که این شاخه توسط وب سرور قابل نوشتن است. آن را برای استفاده از پیش فرض PHP خالی بگذاری [پیش فرض = (خالی)]';
// summary settings
$messages['help_summary_page_show_max'] = 'تعداد گزینه هایی که در صفحه صفحه اصلی نشان داده می شود. این تنظیم تمامی لیستها در صفحه صفحه اصلی را در بر می گیرد (آخرین نوشته ها, فعالترین بلاگها, و غیره) [پیش فرض = 10]';
$messages['help_summary_blogs_per_page'] = 'تعداد بلاگها در صفحه "لیست بلاگها" [پیش فرض = 25]';
$messages['help_forbidden_usernames'] = 'لیست کاربرانی که مجاز به ثبت نام نیستند جدا شده بوسیله فاصله [پیش فرض = admin www blog ftp]';
$messages['help_force_one_blog_per_email_account'] = 'محدودیت ایجاد تنها یک بلاگ برای هر آدرس پست الکترونیکی [پیش فرض = خیر]';
$messages['help_summary_show_agreement'] = 'نمایش متن توافقنامه و اجبار کاربران به پذیرفتن آن پیش از عمل انجام ثبت نام [پیش فرض = بله]';
$messages['help_need_email_confirm_registration'] = 'اجبار کاربران به فعالسازی شناسه کاربری خود از طریق پست الکترونیکی [پیش فرض = بله]';
$messages['help_summary_disable_registration'] = 'اجازه ثبت نام به کاربران جدید در سایت [پیش فرض = بله]';
// templates
$messages['help_template_folder'] = 'شاخه ای که تمپلیتها در آن ذخیره می شوند [پیش فرض = ./templates]';
$messages['help_default_template'] = 'تمپلیت پیش فرض برای بلاگهای جدید [پیش فرض = standard]';
$messages['help_users_can_add_templates'] = 'اجازه به کاربران برای آپلود تمپلیتهای شخصی خودشان [پیش فرض = بله]';
$messages['help_template_compile_check'] = 'اگر غیر فعال شود, Smarty هر بار فایلهای تمپلیتها را برای تغییر چک خواهد کرد, و از نسخه جدید تر استفاده خواهد نمود. این گزینه را برای کارآمدی بیشتر غیر فعال کنید [پیش فرض = بله]';
$messages['help_template_cache_enabled'] = 'فعال سازی cache تمپلیتها. اگر فعال شود، نسخه Cache شده صفحات هنگامی که امکان آن موجود باشد به کار خواهد رفت. و نیازی به بازیابی اطلاعات از دیتابیس و دوباره سازی تمپلیتها نخواهد بود [پیش فرض = بله]';
$messages['help_template_cache_lifetime'] = 'عمر فایلهای cache به ثانیه. با ست کردن -1 فایلهای Cache شده هرگز منقضی نخواهند شد. اگر صفر شود Cache غیر فعال می شود اما توصیه می شود که گزینه template_cache_enabled به "خیر" تغیید داده شود اگر مایلید که Cache غیرفعال باشد  [پیش فرض = 0]';
$messages['help_template_http_cache_enabled'] = 'فعالسازی پشتیبانی از درخواستهای شرطی HTTP. اگر فعال شود, سیستم هدر "If-Modified-Since" HTTP را نگهداری خواهد کرد و تنها زمانی که نیاز باشد اطلاعات را دوباره می فرستد. این را برای صرفه جویی در پهنای باند فعال کنید [پیش فرض = خیر]';
$messages['help_allow_php_code_in_templates'] = 'اجازه مخلوط کردن کدهای اصلی PHP در تمپلیتهای Smarty درون بلاک {php}...{/php} [پیش فرض = خیر]';
// urls
$messages['help_request_format_mode'] = 'یکی از فرمتهای موجود آدرس را انتخاب کنید. اگر از آدرسهای دست نویس استفاده می کنید، مطمئن شوید که تنظیمات زیر را به درستی انجام دهید [پیش فرض = ساده]';
$messages['plain'] = 'ساده';
$messages['search_engine_friendly'] = 'سازگار با موتورهای جستجوگر';
$messages['custom_url_format'] = 'آدرسهای دست نویس';
$messages['help_permalink_format'] = 'فرمت لینکهای دائمی در هنگام استفاده از آدرسهای دست نویس [پیش فرض = /blog/{blogname}/{catname}/{year}/{month}/{day}/{postname}$]';
$messages['help_category_link_format'] = 'فرمت برای دسته بندی موضوعات هنگام استفاده از آدرسهای دست نویس [پیش فرض = /blog/{blogname}/{catname}$]';
$messages['help_blog_link_format'] = 'فرمت آدرسهای بلاگها در هنگام استفاده از آدرسهای دست نویس [پیش فرض = /blog/{blogname}$]';
$messages['help_archive_link_format'] = 'فرمت آدرسهای آرشیو در هنگام استفاده از آدرسهای دست نویس [پیش فرض = /blog/{blogname}/archives/{year}/?{month}/?{day}]';
$messages['help_user_posts_link_format'] = 'فرمت برای آدرس پستهای یک کاربر خاص در هنگام استفاده از آدرسهای دست نویس [پیش فرض = /blog/{blogname}/user/{username}$]';
$messages['help_post_trackbacks_link_format'] = 'فرمت آدرس به صفحه لینک داده ها در هنگام استفاده از آدرسهای دست نویس [پیش فرض = /blog/{blogname}/post/trackbacks/{postname}$]';
$messages['help_template_link_format'] = 'فرمت آدرس برای صفحات تمپلیتهای شخصی کاربران در هنگام استفاده از آدرس دست نویس [پیش فرض = /blog/{blogname}/page/{templatename}$]';
$messages['help_album_link_format'] = 'فرمت آدرس برای آلبومها در هنگام استفاده از آدرسهای دست نویس [پیش فرض = /blog/{blogname}/album/{albumname}$]';
$messages['help_resource_link_format'] = 'فرمت آدرس برای صفحه فایلها فایل در هنگام استفاده از آدرسهای دست نویس [پیش فرض = /blog/{blogname}/resource/{albumname}/{resourcename}$]';
$messages['help_resource_preview_link_format'] = 'فرمت آدرس برای پیش نمایش فایلها در هنگام استفاده از آدرسهای دست نویس [پیش فرض = /blog/{blogname}/resource/{albumname}/preview/{resourcename}$]';
$messages['help_resource_medium_size_preview_link_format'] = 'فرمت آدرس برای پیش نمایش فایلها با حجم متوسط در هنگام استفاده از آدرسهای دست نویس [پیش فرض = /blog/{blogname}/resource/{albumname}/preview-med/{resourcename}$]';
$messages['help_resource_download_link_format'] = 'فرمت آدرس برای فایلها در هنگام استفاده از آدرسهای دست نویس [Default = /blog/{blogname}/resource/{albumname}/download/{resourcename}$]';
// email
$messages['help_check_email_address_validity'] = 'در هنگام چک کردن آدرسهای ایمیل, تعدادی عمل ساده مانند چک کردن وجود رکورد MX برای دامین استفاده شده ، برای اطمینان از صحیح بودن آدرسی ایمیل انجام شود [پیش فرض = خیر]';
$messages['help_email_service_enabled'] = 'فعال یا غیرفعالسازی فرستادن ایمیل [پیش فرض = بله]';
$messages['help_post_notification_source_address'] = 'آدرس ایمیلی که در فیلد "From:" در هنگام ارسال ایمیلها از این سایت به کار خواهد رفت [پیش فرض = noreply@your.host.com]';
$messages['help_email_service_type'] = 'از کدام سیستم جهت ارسال ایمیلها استفاده شود [پیش فرض = PHP]';
$messages['help_smtp_host'] = 'اگر از سیستم SMTP برای ارسال ایمیلها استفاده می کنید, در این قسمت آدرس سروری را که برای ارسال ایمیل از آن استفاده خواهید کرد بنویسید [پیش فرض = (خالی)]';
$messages['help_smtp_port'] = 'اگر سرور SMTP بر روی پورتی غیر ای 25 کار می کند آن را در این قسمت ست کنید [پیش فرض = (خالی)]';
$messages['help_smtp_use_authentication'] = 'این قسمت را فعال کنید اگر سرور SMTP نیاز به تصدیق دارد  [پیش فرض = خیر]';
$messages['help_smtp_username'] = 'اگر سرور SMTP نیاز به تصدیق دارد, در اینجا نام کاربری مورد نیاز را ست کنید [پیش فرض = (خالی)]';
$messages['help_smtp_password'] = 'اگر سرور SMTP نیاز به تصدیق دارد, در اینجا رمز عبور کاربر فیلد قبل را ست کنید[پیش فرض = (خالی)]';
// helpers
$messages['help_path_to_tar'] = 'مسیر برای ابزار "tar" , که برای بازکردن فایلهای تمپلیت با فرمت .tar.gz یا tar.bz2 مورد نیاز است [پیش فرض = /bin/tar]';
$messages['help_path_to_gzip'] = 'مسیر برای ابزار "gzip" ، که برای باز کردن فایلهای تمپلیت با فرمت .tar.gz مورد نیاز است [پیش فرض = /bin/gzip]';
$messages['help_path_to_bz2'] = 'مسیر برای ابزار "bzip2" ، که برای باز کردن فایلهای تمپلیت با فرمت .tar.bz2 مورد نیاز است [پیش فرض = /usr/bin/bzip2]';
$messages['help_path_to_unzip'] = 'مسیر برای ابزار "unzip" ، که برای باز کردن فایلهای تمپلیت با فرمت .zip مورد نیاز است [پیش فرض = /usr/bin/unzip]';
$messages['help_unzip_use_native_version'] = 'از ورژن سرخود PHP برای باز کردن فایلهای .zip استفاده شود [پیش فرض = خیر]';
// uploads
$messages['help_uploads_enabled'] = 'آیا کاربران مجاز به آپلود فایل هستند. این گزینه بر روی قسمت فایلها و همچنین قسمتهای تمپلیتهای شخصی و فایلهای منطقه ای تاثیر می گذارد [پیش فرض = بله]';
$messages['help_maximum_file_upload_size'] = 'ماکزیمم اندازه اجازه داده شده برای آپلود فایل. این حد هرگز نباید از حد مشخص شده در PHP بیشتر باشد  [پیش فرض = 2000000]';
$messages['help_upload_forbidden_files'] = 'لیست انواع فایلهایی که برای آپلود مجاز نیستند که باید بوسیله یک فاصله از هم جدا شده باشند. استفاده از \'*\' و \'?\' مجاز است [پیش فرض = *.php *.php3 *.php4 *.phtml]';
// interfaces
$messages['help_xmlrpc_api_enabled'] = 'فعالسازی یا غیرفعالسازی دسترسی به بلاگها توسط XMLRPC پیش فرض = بله]';
$messages['help_rdf_enabled'] = 'فعالسازی تغذیه کننده های Atom یا RSS [پیش فرض = بله]';
$messages['help_default_rss_profile'] = 'ورژن تغذیه کننده RSS یا Atom که استفاده می شوند البته در صورتی که ورژن دیگری مشخص نشده باشد [پیش فرض = RSS 1.0]';
// security
$messages['help_security_pipeline_enabled'] = 'فعالسازی تمامی خطوط امنیتی و فیلترهای مربوط به آنان. این گزینه همچنین کدهای افزودنی را که فیلترهای جدید نصب می کنند تحت تاثیر قرار می دهد [پیش فرض = بله]';
$messages['help_ip_address_filter_enabled'] = 'فعالسازی فیلتر آدرس IP. همچنین برای استفاده از این گزینه باید خطوط امنیتی فعال شده باشند [پیش فرض = بله]';
$messages['help_content_filter_enabled'] = 'فعالسازی فیلتر عبارت محور محتوا. همچنین برای استفاده از این گزینه باید خطوط امنیتی فعال شده باشند [پیش فرض = بله]';
$messages['help_maximum_comment_size'] = 'حداکثر اندازه نظرها به واحد بایت, برای غیر فعال کردن این گزینه آن را صفر کنید [پیش فرض = 0]';
// bayesian filter
$messages['help_bayesian_filter_enabled'] = 'فعالسازی فیلتر Bayesian برای بهتر شدن فیلتر اتوماتیک اسپم  [پیش فرض = بله]';
$messages['help_bayesian_filter_spam_probability_treshold'] = 'ماکزیمم حد آستانه یک نظر قبل از اینکه به عنوان اسپم در نظر گرفته شود  [پیش فرض = 0.9]';
$messages['help_bayesian_filter_nonspam_probability_treshold'] = 'مینیمم حد آستانه یک نظر بعد از اینکه به صورت غیر اسپم در نظر گرفته شد [پیش فرض = 0.2]';
$messages['help_bayesian_filter_min_length_token'] = 'حداقل طول معنا دار برای فیلتر Bayesian  [پیش فرض = 3]';
$messages['help_bayesian_filter_max_length_token'] = 'ماکزیمم طول معنا دار برای فیلتر Bayesian  [پیش فرض = 100]';
$messages['help_bayesian_filter_number_significant_tokens'] = 'تعداد علامات رمز  [Default = 15]';
$messages['help_bayesian_filter_spam_comments_action'] = 'با نظرهایی که به عنوان اسپم در نظر گرفته می شوند چه می کنید ؟. زمانی گزینه "دور انداختن" را انتخاب کنید که فیلتر شما به صورت کامل تنظیم شده باشد  [پیش فرض = نگه داشتن]';
$messages['keep_spam_comments'] = 'نگه داشتن در دیتابیس و علامتگذاری شده "اسپم"';
$messages['throw_away_spam_comments'] = 'دور انداختن (ذخیره نمی شوند)';
// resources
$messages['help_resources_enabled'] = 'فعالسازی یا غیر فعالسازی فایلها [پیش فرض = بله]';
$messages['help_resources_folder'] = 'شاخه ای که فایلها در آنها نگهداری می شوند ، برای امنیت بیشتر آن را در خارج از دسترسی وب سرور قرار دهید  [پیش فرض = ./gallery]';
$messages['help_thumbnail_method'] = 'روش تولید تصاویر کوچک شده. اگر از PHP استفاده می شود, پشتیبانی GD لازم است  [پیش فرض = PHP]';
$messages['help_path_to_convert'] = 'مسیر برای ابزار "convert" از بسته نرم افزاری ImageMagick . اجباری اگر روش کوچک کردن تصاویر "ImageMagick" باشد  [پیش فرض = /usr/bin/convert]';
$messages['help_thumbnail_format'] = 'فرمتی که عکسهای کوچک شده ذخیره می شوند  [Default = مانند تصویر اصلی]';
$messages['help_thumbnail_height'] = 'ارتفاع پیش فرض برای تصاویر کوچک شده  [پیش فرض = 120]';
$messages['help_thumbnail_width'] = 'عرض پیش فرض برای تصاویر کوچک شده  [پیش فرض = 120]';
$messages['help_medium_size_thumbnail_height'] = 'ارتفاع پیش فرض برای برای تصاویر متوسط  [پیش فرض = 480]';
$messages['help_medium_size_thumbnail_width'] = 'عرض پیش فرض برای تصاویر متوسط  [پیش فرض = 640]';
$messages['help_thumbnails_keep_aspect_ratio'] = 'نسبت طول به عرض را در تبدیلات حفظ کن. ممکن است باعث ایجاد تصاویر با اندازه بزرگتر از چیزی که در بالا ذکر شده است بشود اما کیفیت بهتر خواهد بود [پیش فرض = بله]';
$messages['help_thumbnail_generator_force_use_gd1'] = 'اجبار سیستم به استفاده از GD1 [پیش فرض = خیر]';
$messages['help_thumbnail_generator_user_smoothing_algorithm'] = 'الگوریتم مورد استفاده برای صاف کردن تصاویر کوچک شده. زمانی استفاده می شود که از GD استفاده شود [پیش فرض = PHP Imagecopyresampled]';
$messages['help_resources_quota'] = 'محدودیت حجم فایلها برای بلاگها (برای مثال 5242880 بایت = 5 مگابایت), یا برای نامحدود کردن این گزینه را صفر کنید [پیش فرض = 0]';
$messages['help_resource_server_http_cache_enabled'] = 'فعالسازی پشتیبانی هدر "If-Modified-Since" و درخواستهای شرطی HTTP . برای صرفه جویی در مصرف پهنای باند فعال شود  [پیش فرض = خیر]';
$messages['help_resource_server_http_cache_lifetime'] = 'زمان بر حسب میکروثانیه که کاربران باید از نسخه cache شده فایلها استفاده کنند [پیش فرض = 9999999]';
$messages['same_as_image'] = 'مانند تصویر اصلی';
// search
$messages['help_search_engine_enabled'] = 'فعال سازی موتور جستجو  [پیش فرض = بله]';
$messages['help_search_in_custom_fields'] = 'جستجو در فیلدهای دست نویس  [پیش فرض = بله]';
$messages['help_search_in_comments'] = 'جستجو در نظرها  [پیش فرض = بله]';

// cleanup
$messages['purge'] = 'حذف دائمی';
$messages['cleanup_spam'] = 'حذف دائمی Spam';
$messages['cleanup_spam_help'] = 'این گزینه تمامی نظرهایی را که به وسیله کاربران به عنوان Spam علامتگذاری شده اند پاک می کند. نظرهای پاک شده قابل بازیابی نخواهند بود';
$messages['spam_comments_purged_ok'] = 'نظرهای Spam با موفقیت حذف شدند';
$messages['cleanup_posts'] = 'حذف دائمی پستها';
$messages['cleanup_posts_help'] = 'این گزینه تمامی پستهای پاک شده توسط کاربران را حذف دائمی می کند ، پستهای حذف شده قابل بازیابی نخواهند بود';
$messages['posts_purged_ok'] = 'پستها با موفقیت حذف شدند';

/// summary ///
// front page
$messages['summary'] = 'صفحه اصلی';
$messages['register'] = 'ثبت نام';
$messages['summary_welcome'] = 'خوش آمدید';
$messages['summary_most_active_blogs'] = 'فعالترین بلاگها';
$messages['summary_most_commented_articles'] = 'نوشته های دارای بیشترین نظر';
$messages['summary_most_read_articles'] = 'نوشته های بیشتر خوانده شده';
$messages['password_forgotten'] = 'رمز خود را فراموش کرده اید ؟';
$messages['summary_newest_blogs'] = 'جدیدترین بلاگها';
$messages['summary_latest_posts'] = 'جدیدترین نوشته ها';
$messages['summary_search_blogs'] = 'جستجوی بلاگها';

// blog list
$messages['updated'] = 'به روز شده';
$messages['total_reads'] = 'بازدید';

// blog profile
$messages['blog'] = 'بلاگ';
$messages['latest_posts'] = 'آخرین پستها';

// registration
$messages['register_step0_title'] = 'موافقتنامه عضویت در بلاگ';
$messages['agreement'] = 'موافقتنامه'; 
$messages['decline'] = 'عدم پذیرش';
$messages['accept'] = 'پذیرش';
$messages['read_service_agreement'] = 'لطفا موافقتنامه عضویت در بلاگ را با دقت بخوانید و در صورت پذیرش بر روی دکمه مربوطه کلیک کنید';
$messages['register_step1_title'] = 'ایجاد کاربر جدید مرحله 1 از 4';
$messages['register_step1_help'] = 'برای ایجاد یک بلاگ جدید ابتدا باید یک نام کاربری جدید برای شما ساخته شود. این کاربر به عنوان مالک بلاگ یاد شده خواهد بود و به تمامی امکانات آن دسترسی خواهد داشت. دقت داشته باشید که آدرس وبلاگ جدید شما با استفاده از نام کاربری شما ساخته خواهد شد و بصورت http://username.irxBlog.com خواهد بود.';
$messages['register_next'] = 'بعدی';
$messages['register_back'] = 'قبلی';
$messages['register_step2_title'] = 'ایجاد یک بلاگ مرحله 2 از 4';
$messages['register_blog_name_help'] = 'نام بلاگ شما';
$messages['register_step3_title'] = 'یک تمپلیت را انتخاب کنید مرحله 3 از 4';
$messages['step1'] = 'مرحله 1';
$messages['step2'] = 'مرحله 2';
$messages['step3'] = 'مرحله 3';
$messages['register_step3_help'] = 'لطفا یکی از تمپلیتهای موجود را به عنوان تمپلیت پیش فرض برای بلاگ خود انتخاب کنید. اگر بعدا از آن راضی نبودید به سادگی می توانید آن را عوض کنید';
$messages['error_must_choose_template'] = 'لطفا یک تمپلیت را انتخاب کنید';
$messages['select_template'] = 'انتخاب تمپلیت';
$messages['register_step5_title'] = 'به شما تبریک عرض می کنیم! مرحله 4 از 4';
$messages['finish'] = 'پایان';
$messages['register_need_confirmation'] = 'یک پست الکترونیکی حاوی لینک فعالسازی بلاگ به آدرس ایمیل شما ارسال شد, لطفا بر روی لینک مربوطه کلیک کنید تا بلاگ شما فعال شود. لطفا دقت داشته باشید که اگر ایمیل مربوطه را پیدا نکردید ممکن است به داخل قسمت Spam صندوق پستی شما رفته باشد.';
$messages['register_step5_help'] = 'تبریک عرض می کنیم, نام کاربری و بلاگ شما با موفقیت ساخته شد!';
$messages['register_blog_link'] = 'اگر مایلید نگاهی به بلاگ خود بیاندازید, روی این لینک کلیک کنید : <a href="%2$s">%1$s</a>';
$messages['register_blog_admin_link'] = 'اگر مایلید هم اکنون شروع به نوشتن نوشته در بلاگ خود بکنید, کلیک کنید تا به <a href="admin.php">قسمت مدیریت</a> بروید';
$messages['register_error'] = 'خطا در هنگام پردازش اطلاعات';
$messages['error_registration_disabled'] = 'متاسفانه, ثبت کاربر جدید فعلا امکان پذیر نیست برای اطلاعات بیشتر به صفحه اول مراجعه فرمایید';
// registration article topic and text
$messages['register_default_article_topic'] = 'تبریک عرض می کنیم!';
$messages['register_default_article_text'] = 'اگر شما می توانید این نوشته را بخوانید, این بدان معناست که عملیات ثبت نام شما با موفقیت انجام گرفته است و شما می توانید نوشتن بلاگ خود را شروع کنید';
$messages['register_default_category'] = 'عمومی';
// confirmation email
$messages['register_confirmation_email_text'] = 'Persian : لطفا بر روی لینک زیر کلیک کنید تا بلاگ شما فعال شود
English : Please click the link below in order to activate your blog:

%s

Have a nice day';
$messages['error_invalid_activation_code'] = 'متاسفانه, کد فعالسازی معتبر نیست';
$messages['blog_activated_ok'] = 'تبریک عرض می کنیم, بلاگ شما با موفقیت فعال شد!';
// forgot your password?
$messages['reset_password'] = 'تغییر رمز عبور';
$messages['reset_password_username_help'] = 'نام کاربری که می خواهید رمز عبور او را تغییر دهید';
$messages['reset_password_email_help'] = 'آدرس پست الکترونیکی که کاربر با آن در این سایت ثبت نام کرده است';
$messages['reset_password_help'] = 'از این فرم برای تغییر رمز عبور نام کاربری خود در صورتی که آن را فراموش کرده اید استفاده کنید. لطفا نام کاربری را که مایلید رمز عبور آن عوض شود را وارد کنید, همچنین آدرس پست الکترونیکی کاربر مورد نظر';
$messages['error_resetting_password'] = 'خطا در هنگام عملیات تغییر رمز عبور. لطفا اطلاعات را چک کنید و دوباره سعی کنید';
$messages['reset_password_error_incorrect_email_address'] = 'آدرس پست الکترونیکی درست نیست';
$messages['password_reset_message_sent_ok'] = 'یک نامه حاوی لینک تغییر رمز عبور به آدرس الکترونیکی شما ارسال شد. لطفا برای تغییر رمز عبور خود بر روی لینک مربوطه کلیک کنید';
$messages['error_incorrect_request'] = 'پارامترهای آدرس درست نیست';
$messages['change_password'] = 'رمز عبور جدیدی را انتخاب کنید';
$messages['change_password_help'] = 'لطفا رمز عبور جدید خود را بنویسید و سپس تایید کنید';
$messages['new_password'] = 'رمز جدید';
$messages['new_password_help'] = 'رمز جدید خود را اینجا بنویسید';
$messages['password_updated_ok'] = 'رمز عبور شما با موفقیت تغییر یافت';

// Suggested by BCSE, some useful messages that not available in official locale
$messages['upgrade_information'] = 'این صفحه نافرم به نظر می رسد زیرا شما از یک مرورگر غیر استاندارد استفاده می کنید. برای مشاهده این سایت در بهترین حالت, لطفا <a href="http://www.webstandards.org/upgrade/" title="The Web Standards Project\'s Browser Upgrade initiative">به این مرورگر</a> به روز رسانی کنید.';
$messages['jump_to_navigation'] = 'پرش به ناوبری.';
$messages['comment_email_never_display'] = 'خط و پاراگراف به صورت اتوماتیک شکسته می شوند, پست الکترونیکی هرگز نشان داده نمی شود.';
$messages['comment_html_allowed'] = '<acronym title="Hypertext Markup Language">HTML</acronym> allowed: &lt;<acronym title="Hyperlink">a</acronym> href=&quot;&quot; title=&quot;&quot; rel=&quot;&quot;&gt; &lt;<acronym title="Acronym Description">acronym</acronym> title=&quot;&quot;&gt; &lt;<acronym title="Quote">blockquote</acronym> cite=&quot;&quot;&gt; &lt;<acronym title="Strike">del</acronym>&gt; &lt;<acronym title="Italic">em</acronym>&gt; &lt;<acronym title="Underline">ins</acronym>&gt; &lt;<acronym title="Bold">strong</acronym>&gt;';
$messages['trackback_uri'] = '<acronym title="Uniform Resource Identifier">آدرس</acronym> به لینک داده این گزینه: ';
$messages['previous_post'] = 'قبلی';
$messages['next_post'] = 'بعدی';
$messages['comment_default_title'] = '(بدون عنوان)';
$messages['guestbook'] = 'دفتر مخصوص مهمانان';
$messages['trackbacks'] = 'لینک داده ها';
$messages['menu'] = 'منو';
$messages['albums'] = 'آلبومها';
$messages['admin'] = 'مدیریت';
?>
