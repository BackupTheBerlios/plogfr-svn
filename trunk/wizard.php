<?php

    if (!defined( "PLOG_CLASS_PATH" )) {
        define( "PLOG_CLASS_PATH", dirname(__FILE__)."/");
    }

    set_time_limit (5 * 3600);

    //
    // enable this for debugging purposes
    //
    define( "DB_WIZARD_DEBUG", false );

    //
    // in case you're having problems with time outs while upgrading (probably too
    // many records) lower this figure
    //
    define( "WIZARD_MAX_RECORDS_PER_STEP", 50 );

    //
    // threshold that defines up to how many records we should not divide the
    // transformations in more than one step
    //
    define( "WIZARD_MAX_RECORDS_THRESHOLD", 100 );

    // many hosts don't have this enabled and we, for the time being, need it...
    ini_set("arg_seperator.output", "&amp;");

    include_once( PLOG_CLASS_PATH."class/controller/controller.class.php" );
    include_once( PLOG_CLASS_PATH."class/template/templateservice.class.php" );
    include_once( PLOG_CLASS_PATH."class/action/action.class.php" );
    include_once( PLOG_CLASS_PATH."class/template/template.class.php" );
    include_once( PLOG_CLASS_PATH."class/view/view.class.php" );
    include_once( PLOG_CLASS_PATH."class/database/adodb/adodb.inc.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/stringvalidator.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/emailvalidator.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/validator/passwordvalidator.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/users.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/blogs.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articlecategories.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/articles.class.php" );
    include_once( PLOG_CLASS_PATH."class/net/http/httpvars.class.php" );
    include_once( PLOG_CLASS_PATH."class/dao/userpermissions.class.php" );
    include_once( PLOG_CLASS_PATH."class/misc/version.class.php" );
    include_once( PLOG_CLASS_PATH."class/file/file.class.php" );
    include_once( PLOG_CLASS_PATH."class/file/finder/filefinder.class.php" );
    include_once( PLOG_CLASS_PATH."class/gallery/resizers/gddetector.class.php" );
    include_once( PLOG_CLASS_PATH."class/config/configfilestorage.class.php" );
    include_once( PLOG_CLASS_PATH."class/data/textfilter.class.php" );
    include_once( PLOG_CLASS_PATH."class/locale/locales.class.php" );
    include_once( PLOG_CLASS_PATH."class/locale/localefinder.class.php" );

    define( "TEMP_FOLDER", "./tmp" );

    // sql querys used to create the tables

    // maps used to map requests with actions
    $_actionMap["Default"] = "WizardIntro";
    $_actionMap["Intro"] = "WizardIntro";
    $_actionMap["Step1"] = "WizardStepOne";
    $_actionMap["Step2"] = "WizardStepTwo";
    $_actionMap["Step3"] = "WizardStepThree";
    $_actionMap["Step4"] = "WizardStepFour";
    $_actionMap["Step5"] = "WizardStepFive";
    $_actionMap["Update1"] = "UpdateStepOne";
    $_actionMap["Update2"] = "UpdateStepTwo";
    $_actionMap["Update3"] = "UpdateStepThree";
    $_actionMap["Update4"] = "UpdateStepFour";



    $Tables[0]["desc"] = "Articles";
    $Tables[0]["code"] = "CREATE TABLE {dbprefix}articles (
  id int(10) unsigned NOT NULL auto_increment,
  category_id int(10) unsigned NOT NULL default '0',
  date timestamp(14) NOT NULL,
  modification_date timestamp(14) NOT NULL,
  user_id int(10) unsigned NOT NULL default '0',
  blog_id int(10) unsigned NOT NULL default '0',
  status INTEGER(5) NOT NULL default 1,
  num_reads int(10) default '0',
  properties TEXT NOT NULL default '',
  slug varchar(255) NOT NULL,
  PRIMARY KEY (id),
  KEY num_reads (num_reads),
  KEY category_id (category_id),
  KEY blog_id (blog_id),
  KEY user_id (user_id),
  KEY slug (slug),
  KEY blog_id_slug (blog_id,slug),
  KEY blog_id_slug_category_id (blog_id,slug,category_id),
  KEY date (date),
  KEY status (status)
) TYPE=MyISAM;";

    $Tables[1]["desc"] = "Article categories";
    $Tables[1]["code"] = "CREATE TABLE {dbprefix}articles_categories (
  id int(10) unsigned NOT NULL auto_increment,
  name varchar(255) NOT NULL default '',
  url varchar(255) NOT NULL default '',
  blog_id int(10) unsigned NOT NULL default '0',
  last_modification timestamp(14) NOT NULL,
  in_main_page TINYINT(1) NOT NULL DEFAULT '1',
  parent_id INTEGER(10) NOT NULL DEFAULT '0',
  description TEXT NOT NULL DEFAULT '',
  properties text NOT NULL default '',
  mangled_name varchar(255) NOT NULL default '',
  PRIMARY KEY  (id),
  KEY parent_id (parent_id),
  KEY blog_id (blog_id),
  KEY mangled_name (mangled_name)
) TYPE=MyISAM;";

    $Tables[2]["desc"] = "Comments";
    $Tables[2]["code"] = "CREATE TABLE {dbprefix}articles_comments (
  id int(10) unsigned NOT NULL auto_increment,
  article_id int(10) unsigned NOT NULL default '0',
  topic text NOT NULL,
  text text,
  date timestamp(14) NOT NULL,
  user_email varchar(255) default '',
  user_url varchar(255) default '',
  user_name varchar(255) NOT NULL default 'Anonymous',
  parent_id int(10) unsigned default '0',
  client_ip varchar(15) default '0.0.0.0',
  send_notification tinyint(1) default '0',
  status tinyint(2) default '1',
  spam_rate float default '0',
  properties TEXT NOT NULL DEFAULT '',
  normalized_text TEXT NOT NULL DEFAULT '',
  normalized_topic TEXT NOT NULL DEFAULT '',
  PRIMARY KEY  (id),
  KEY parent_id (parent_id),
  KEY article_id (article_id),
  FULLTEXT KEY normalized_fields (normalized_text,normalized_topic),
  FULLTEXT KEY normalized_text (normalized_text),
  FULLTEXT KEY normalized_topic (normalized_topic)
) TYPE=MyISAM;";

    $Tables[3]["desc"] = "Notifications";
    $Tables[3]["code"] = "CREATE TABLE {dbprefix}articles_notifications (
  id int(10) NOT NULL auto_increment,
  blog_id int(10) NOT NULL default '0',
  user_id int(10) NOT NULL default '0',
  article_id int(10) NOT NULL default '0',
  PRIMARY KEY  (id),
  KEY article_id (article_id),
  KEY user_id (user_id),
  KEY blog_id (blog_id)
) TYPE=MyISAM;";

    $Tables[4]["desc"] = "Blogs";
    $Tables[4]["code"] = "CREATE TABLE {dbprefix}blogs (
  id int(10) unsigned NOT NULL auto_increment,
  blog varchar(50) NOT NULL default '',
  owner_id int(10) unsigned NOT NULL default '0',
  about text,
  settings text NOT NULL,
  mangled_blog varchar(50) NOT NULL default '',
  status int(4) NOT NULL default '1',
  show_in_summary int(4) not null default '1',
  PRIMARY KEY  (id),
  KEY owner_id (owner_id),
  KEY mangled_blog (mangled_blog)
) TYPE=MyISAM;";

    $Tables[5]["desc"] = "MyLinks";
    $Tables[5]["code"] = "CREATE TABLE {dbprefix}mylinks (
  id int(10) unsigned NOT NULL auto_increment,
  category_id int(10) unsigned NOT NULL default '0',
  url varchar(255) NOT NULL default '',
  name varchar(100) default '',
  description text NOT NULL,
  blog_id int(10) unsigned NOT NULL default '0',
  rss_feed varchar(255) not null default '',
  date timestamp(14) not null,
  properties TEXT NOT NULL DEFAULT '',
  PRIMARY KEY  (id),
  KEY blog_id (blog_id),
  KEY category_id (category_id)
) TYPE=MyISAM;";

    $Tables[6]["desc"] = "MyLinks Categories";
    $Tables[6]["code"] = "CREATE TABLE {dbprefix}mylinks_categories (
  id int(10) NOT NULL auto_increment,
  name varchar(100) NOT NULL default '',
  blog_id int(10) NOT NULL default '0',
  last_modification timestamp(14) NOT NULL,
  properties TEXT NOT NULL DEFAULT '',
  PRIMARY KEY  (id),
  KEY blog_id (blog_id)
) TYPE=MyISAM;";

    $Tables[7]["desc"] = "MyRecent";
    $Tables[7]["code"] = "CREATE TABLE {dbprefix}myrecent (
  id int(10) unsigned NOT NULL auto_increment,
  category_id int(10) unsigned NOT NULL default '0',
  name varchar(255) NOT NULL default '',
  text text NOT NULL,
  user_id int(10) unsigned NOT NULL default '0',
  blog_id int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (id)
) TYPE=MyISAM;";

    $Tables[8]["desc"] = "MyRecent categories";
    $Tables[8]["code"] = "CREATE TABLE {dbprefix}myrecent_categories (
  id int(10) unsigned NOT NULL auto_increment,
  name varchar(255) NOT NULL default '',
  blog_id int(10) unsigned NOT NULL default '0',
  last_modification timestamp(14) NOT NULL,
  PRIMARY KEY  (id)
) TYPE=MyISAM;";

    $Tables[9]["desc"] = "Permissions";
    $Tables[9]["code"] = "CREATE TABLE {dbprefix}permissions (
  id int(10) unsigned NOT NULL auto_increment,
  permission varchar(25) NOT NULL default '',
  description varchar(100) NOT NULL default '',
  PRIMARY KEY  (id)
) TYPE=MyISAM;";

    $Tables[10]["desc"] = "Referrers";
    $Tables[10]["code"] = "CREATE TABLE {dbprefix}referers (
  id int(10) NOT NULL auto_increment,
  url text NOT NULL,
  article_id int(10) NOT NULL default '0',
  blog_id int(10) NOT NULL default '0',
  hits int(10) default '1',
  last_date timestamp(14),
  PRIMARY KEY  (id),
  KEY article_id (article_id),
  KEY blog_id (blog_id),
  KEY blog_id_article_id (blog_id, article_id)
) TYPE=MyISAM;";

    $Tables[11]["desc"] = "Trackbacks";
    $Tables[11]["code"] = "CREATE TABLE {dbprefix}trackbacks (
  id int(10) NOT NULL auto_increment,
  url text NOT NULL,
  title varchar(255) default '',
  article_id int(10) NOT NULL default '0',
  excerpt varchar(255) default '',
  blog_name varchar(255) default '',
  date timestamp(14) NOT NULL,
  properties TEXT NOT NULL DEFAULT '',
  PRIMARY KEY  (id),
  KEY article_id (article_id)
) TYPE=MyISAM;";

    $Tables[12]["desc"] = "Users";
    $Tables[12]["code"] = "CREATE TABLE {dbprefix}users (
  id int(10) unsigned NOT NULL auto_increment,
  user varchar(15) NOT NULL default '',
  password varchar(32) NOT NULL default '',
  email varchar(255) NOT NULL default '',
  full_name varchar(255) NOT NULL default '',
  about text,
  properties TEXT NOT NULL default '',
  status integer(4) NOT NULL DEFAULT 1,
  resource_picture_id integer(10) NOT NULL DEFAULT 0,
  PRIMARY KEY  (id),
  UNIQUE KEY user (user)
) TYPE=MyISAM;";

    $Tables[13]["desc"] = "Permissions";
    $Tables[13]["code"] = "CREATE TABLE {dbprefix}users_permissions (
  id int(10) unsigned NOT NULL auto_increment,
  user_id int(10) unsigned NOT NULL default '0',
  blog_id int(10) unsigned NOT NULL default '0',
  permission_id int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (id),
  KEY user_id (user_id),
  KEY blog_id (blog_id),
  KEY user_id_permission_id (user_id,permission_id)
) TYPE=MyISAM;";


   $Tables[14]["desc"] = "Configuration";
   $Tables[14]["code"] = "CREATE TABLE {dbprefix}config (
   id int(10) NOT NULL auto_increment,
   config_key varchar(255) NOT NULL default '',
   config_value text NOT NULL,
   value_type int(3) default '0',
   PRIMARY KEY  (id,config_key)
   ) TYPE=MyISAM;";

   $Tables[15]["desc"] = "Filtered Content";
   $Tables[15]["code"] = "CREATE TABLE {dbprefix}filtered_content (
   id int(10) NOT NULL auto_increment,
   reg_exp text,
   blog_id int(10) NOT NULL default '0',
   reason text,
   date timestamp(14) NOT NULL,
   PRIMARY KEY  (id),
   KEY blog_id (blog_id)
   ) TYPE=MyISAM;";

   $Tables[16]["desc"] = "Blocked content";
   $Tables[16]["code"] = "CREATE TABLE {dbprefix}host_blocking_rules (
   id int(10) NOT NULL auto_increment,
   reason text,
   date timestamp(14) NOT NULL,
   blog_id int(10) NOT NULL default '0',
   block_type int(1) default '1',
   list_type int(1) default '1',
   mask int(2) default '0',
   host varchar(15) default '0.0.0.0',
   PRIMARY KEY  (id),
   KEY blog_id (blog_id)
   ) TYPE=MyISAM;";

   $Tables[17]["desc"] = "Gallery Resources";
   $Tables[17]["code"] = "CREATE TABLE {dbprefix}gallery_resources (
   id int(10) NOT NULL auto_increment,
   owner_id int(10) NOT NULL default '0',
   album_id int(10) NOT NULL default '0',
   description text,
   date timestamp(14) NOT NULL,
   flags int(10) default '0',
   resource_type int(3) default NULL,
   file_path varchar(255) default '',
   file_name varchar(255) default '',
   metadata text,
   thumbnail_format varchar(4) not null default 'same',
   normalized_description text NOT NULL default '',
   properties TEXT NOT NULL DEFAULT '',
   PRIMARY KEY  (id),
   KEY album_id (album_id),
   KEY owner_id (owner_id),
   KEY file_name (file_name),
   KEY album_id_owner_id (album_id, owner_id),
   KEY resource_type (resource_type),
   FULLTEXT KEY normalized_description (normalized_description)
   ) TYPE=MyISAM;";

   $Tables[18]["desc"] = "Gallery Albums";
   $Tables[18]["code"] = "CREATE TABLE {dbprefix}gallery_albums (
   id int(10) NOT NULL auto_increment,
   owner_id int(10) NOT NULL default '0',
   description text NOT NULL,
   name varchar(255) NOT NULL default '',
   flags int(10) NOT NULL default '0',
   parent_id int(10) NOT NULL default '0',
   date timestamp(14) NOT NULL,
   properties text NOT NULL DEFAULT '',
   show_album TINYINT(1) DEFAULT 1,
   normalized_description text NOT NULL default '',
   normalized_name varchar(255) NOT NULL default '',
   mangled_name varchar(255) NOT NULL default '',
   PRIMARY KEY  (id),
   KEY parent_id (parent_id),
   KEY owner_id (owner_id),
   KEY mangled_name (mangled_name),
   KEY owner_id_mangled_name (owner_id, mangled_name),
   FULLTEXT KEY normalized_name (normalized_name),
   FULLTEXT KEY normalized_description (normalized_description),
   FULLTEXT KEY normalized_fields (normalized_name, normalized_description)
   ) TYPE=MyISAM;";

   $Tables[19]["desc"] = "Bayesian Filter data table";
   $Tables[19]["code"] = "CREATE TABLE {dbprefix}bayesian_filter_info (
   id int(10) unsigned NOT NULL auto_increment,
   blog_id int(10) unsigned default NULL,
   total_spam int(10) unsigned default NULL,
   total_nonspam int(10) unsigned default NULL,
   PRIMARY KEY  (id),
   KEY blog_id (blog_id)
   ) TYPE=MyISAM;";

   $Tables[20]["desc"] = "Bayesian Filter Information";
   $Tables[20]["code"] = "CREATE TABLE {dbprefix}bayesian_tokens (
   id int(10) unsigned NOT NULL auto_increment,
   blog_id int(10) unsigned default NULL,
   token char(100) default NULL,
   spam_occurrences int(10) unsigned default NULL,
   nonspam_occurrences int(10) unsigned default NULL,
   prob float default NULL,
   PRIMARY KEY  (id),
   KEY blog_id (blog_id),
   KEY token (token)
   ) TYPE=MyISAM;";

   $Tables[21]["desc"] = "Map of categories to articles";
   $Tables[21]["code"] = "CREATE TABLE {dbprefix}article_categories_link(
   article_id int(10) NOT NULL,
   category_id int(10) NOT NULL,
   PRIMARY KEY (article_id, category_id)
   ) TYPE=MyISAM;";

   $Tables[22]["desc"] = "Definition of custom fields";
   $Tables[22]["code"] = "CREATE TABLE {dbprefix}custom_fields_definition (
   id int(10) NOT NULL auto_increment,
   field_name varchar(255) NOT NULL default '',
   field_description text NOT NULL,
   field_type int(2) NOT NULL default '1',
   blog_id int(10) NOT NULL default '0',
   date TIMESTAMP(14),
   searchable TINYINT(1) default 1,
   hidden TINYINT(1) default 1,
   PRIMARY KEY  (id,field_name),
   KEY blog_id (blog_id)
   ) TYPE=MyISAM;";

   $Tables[23]["desc"] = "Custom fields that have been assigned to articles";
   $Tables[23]["code"] = "CREATE TABLE {dbprefix}custom_fields_values (
   id int(10) NOT NULL auto_increment,
   field_id int(10) NOT NULL default '0',
   field_value text NOT NULL,
   normalized_value text NOT NULL,
   blog_id int(10) default NULL,
   article_id int(10) default NULL,
   PRIMARY KEY  (id),
   FULLTEXT KEY normalized_value (normalized_value),
   KEY blog_id (blog_id),
   KEY article_id (article_id),
   KEY field_id (field_id),
   KEY blog_id_article_id (blog_id, article_id)
   ) TYPE=MyISAM;";

   $Tables[24]["desc"] = "Text of the articles";
   $Tables[24]["code"] = "CREATE TABLE {dbprefix}articles_text (
   id int(10) NOT NULL auto_increment,
   article_id int(10) NOT NULL DEFAULT 0,
   text TEXT NOT NULL DEFAULT '',
   topic TEXT NOT NULL DEFAULT '',
   normalized_text TEXT NOT NULL DEFAULT '',
   normalized_topic TEXT NOT NULL DEFAULT '',
   mangled_topic text NOT NULL,
   PRIMARY KEY (id),
   KEY article_id (article_id),
   FULLTEXT KEY normalized_text (normalized_text),
   FULLTEXT KEY normalized_topic (normalized_topic),
   FULLTEXT KEY normalized_fields (normalized_text, normalized_topic)
   ) TYPE=MyISAM;";



   // ---
   // changes needed to update from 0.3 to 1.0
   $Changes["Articles"] = Array( "ALTER TABLE {dbprefix}articles CHANGE status old_status ENUM('published', 'draft', 'deleted' )",
                                 "ALTER TABLE {dbprefix}articles ADD COLUMN status INTEGER(5) NOT NULL DEFAULT 1",
                                 "ALTER TABLE {dbprefix}articles ADD COLUMN slug VARCHAR(255) NOT NULL DEFAULT ''",
                                 "ALTER TABLE {dbprefix}articles ADD KEY num_reads(num_reads)",
                                 "ALTER TABLE {dbprefix}articles ADD KEY category_id(category_id)",
                                 "ALTER TABLE {dbprefix}articles ADD KEY blog_id(blog_id)",
                                 "ALTER TABLE {dbprefix}articles ADD KEY slug(slug)",
                                 "ALTER TABLE {dbprefix}articles ADD KEY user_id(user_id)",
                                 "ALTER TABLE {dbprefix}articles ADD KEY blog_id_slug(blog_id,slug)",
                                 "ALTER TABLE {dbprefix}articles ADD KEY blog_id_slug_category_id(blog_id,slug,category_id)",
                                 "ALTER TABLE {dbprefix}articles ADD KEY date(date)",
                                 "ALTER TABLE {dbprefix}articles ADD KEY status(status)" );
                                 

    $Changes["Article Categories"] = Array( "ALTER TABLE {dbprefix}articles_categories ADD COLUMN parent_id INTEGER(10) NOT NULL DEFAULT 0",
                                            "ALTER TABLE {dbprefix}articles_categories ADD COLUMN mangled_name VARCHAR(255) NOT NULL DEFAULT ''",
                                            "ALTER TABLE {dbprefix}articles_categories ADD COLUMN properties TEXT NOT NULL DEFAULT ''",
                                            "ALTER TABLE {dbprefix}articles_categories ADD COLUMN description TEXT NOT NULL DEFAULT ''",
                                            "ALTER TABLE {dbprefix}articles_categories ADD KEY parent_id(parent_id)",
                                            "ALTER TABLE {dbprefix}articles_categories ADD KEY blog_id(blog_id)",
                                            "ALTER TABLE {dbprefix}articles_categories ADD KEY mangled_name(mangled_name)");


    $Changes["User Comments"] = Array( "ALTER TABLE {dbprefix}articles_comments ADD COLUMN normalized_text TEXT NOT NULL DEFAULT ''",
                                       "ALTER TABLE {dbprefix}articles_comments ADD COLUMN normalized_topic TEXT NOT NULL DEFAULT ''",
                                       "ALTER TABLE {dbprefix}articles_comments ADD FULLTEXT normalized_text(normalized_text)",
                                       "ALTER TABLE {dbprefix}articles_comments ADD FULLTEXT normalized_topic(normalized_topic)",
                                       "ALTER TABLE {dbprefix}articles_comments ADD FULLTEXT normalized_text_topic(normalized_topic,normalized_text)",
                                       "ALTER TABLE {dbprefix}articles_comments ADD KEY parent_id(parent_id)",
                                       "ALTER TABLE {dbprefix}articles_comments ADD KEY article_id(article_id)");

    $Changes["Notifications"] = Array( "ALTER TABLE {dbprefix}articles_notifications ADD KEY article_id(article_id)",
                                       "ALTER TABLE {dbprefix}articles_notifications ADD KEY user_id(user_id)",
                                       "ALTER TABLE {dbprefix}articles_notifications ADD KEY blog_id(blog_id)");

    $Changes["Blogs"] = Array( "ALTER TABLE {dbprefix}blogs ADD COLUMN mangled_blog VARCHAR(50) NOT NULL DEFAULT ''",
                               "ALTER TABLE {dbprefix}blogs ADD COLUMN properties TEXT NOT NULL DEFAULT ''",
                               "ALTER TABLE {dbprefix}blogs ADD COLUMN status INTEGER(4) NOT NULL DEFAULT '1'",
                               "ALTER TABLE {dbprefix}blogs ADD COLUMN show_in_summary INTEGER(4) NOT NULL DEFAULT '1'",
                               "ALTER TABLE {dbprefix}blogs ADD KEY owner_id(owner_id)",
                               "ALTER TABLE {dbprefix}blogs ADD KEY mangled_blog(mangled_blog)");

    $Changes["Referrers"] = Array( "ALTER TABLE {dbprefix}referers ADD KEY article_id(article_id)",
                                   "ALTER TABLE {dbprefix}referers ADD KEY blog_id(blog_id)",
                                   "ALTER TABLE {dbprefix}referers ADD   KEY blog_id_article_id (blog_id, article_id)");

    $Changes["Trackbacks"] = Array( "ALTER TABLE {dbprefix}trackbacks ADD KEY article_id(article_id)" );

    $Changes["Filtered Content"] = Array( "ALTER TABLE {dbprefix}filtered_content ADD KEY blog_id(blog_id)" );

    $Changes["Blocked hosts"] = Array( "ALTER TABLE {dbprefix}host_blocking_rules ADD KEY blog_id(blog_id)" );

    $Changes["Gallery Albums"] = Array( "ALTER TABLE {dbprefix}gallery_albums ADD COLUMN normalized_name VARCHAR(255) NOT NULL DEFAULT ''",
                                        "ALTER TABLE {dbprefix}gallery_albums ADD COLUMN normalized_description TEXT NOT NULL DEFAULT ''",
                                        "ALTER TABLE {dbprefix}gallery_albums ADD COLUMN mangled_name VARCHAR(255) NOT NULL DEFAULT ''",
                                        "ALTER TABLE {dbprefix}gallery_albums ADD FULLTEXT normalized_name(normalized_name)",
                                        "ALTER TABLE {dbprefix}gallery_albums ADD FULLTEXT normalized_description(normalized_description)",
                                        "ALTER TABLE {dbprefix}gallery_albums ADD FULLTEXT normalized_name_description(normalized_name, normalized_description)",
                                        "ALTER TABLE {dbprefix}gallery_albums ADD KEY parent_id(parent_id)",
                                        "ALTER TABLE {dbprefix}gallery_albums ADD KEY owner_id(owner_id)",
                                        "ALTER TABLE {dbprefix}gallery_albums ADD KEY mangled_name(mangled_name)",
                                        "ALTER TABLE {dbprefix}gallery_albums ADD KEY owner_id_mangled_name(owner_id,mangled_name)");

    $Changes["Gallery Resources"] = Array( "ALTER TABLE {dbprefix}gallery_resources ADD COLUMN normalized_description TEXT NOT NULL DEFAULT ''",
                                           "ALTER TABLE {dbprefix}gallery_resources ADD FULLTEXT normalized_description(normalized_description)",
                                           "ALTER TABLE {dbprefix}gallery_resources ADD KEY album_id(album_id)",
                                           "ALTER TABLE {dbprefix}gallery_resources ADD KEY owner_id(owner_id)",
                                           "ALTER TABLE {dbprefix}gallery_resources ADD KEY file_name(file_name)",
                                           "ALTER TABLE {dbprefix}gallery_resources ADD KEY album_id_owner_id(album_id,owner_id)",
                                           "ALTER TABLE {dbprefix}gallery_resources ADD KEY resource_type(resource_type)");


    $Changes["Links"] = Array( "ALTER TABLE {dbprefix}mylinks ADD COLUMN properties TEXT NOT NULL DEFAULT ''",
                               "ALTER TABLE {dbprefix}mylinks ADD COLUMN date TIMESTAMP(14)",
                               "ALTER TABLE {dbprefix}mylinks ADD COLUMN rss_feed VARCHAR(255) NOT NULL DEFAULT ''",
                               "ALTER TABLE {dbprefix}mylinks ADD KEY blog_id(blog_id)",
                               "ALTER TABLE {dbprefix}mylinks ADD KEY category_id(category_id)");

    $Changes["Links Categories"] = Array( "ALTER TABLE {dbprefix}mylinks_categories ADD COLUMN properties TEXT NOT NULL DEFAULT ''",
                                          "ALTER TABLE {dbprefix}mylinks_categories ADD KEY blog_id(blog_id)");

    $Changes["Users"] = Array( "ALTER TABLE {dbprefix}users ADD COLUMN full_name VARCHAR(255) NOT NULL DEFAULT ''",
                                "ALTER TABLE {dbprefix}users ADD COLUMN properties TEXT NOT NULL DEFAULT ''",
                                "ALTER TABLE {dbprefix}users ADD COLUMN resource_picture_id INTEGER(10) NOT NULL DEFAULT 0",
                                "ALTER TABLE {dbprefix}users ADD COLUMN status INTEGER(4) NOT NULL DEFAULT 1" );

    $Changes["Bayesian Filter data table"] = Array( "ALTER TABLE {dbprefix}bayesian_filter_info ADD KEY blog_id(blog_id)" );

    $Changes["Permissions"] = Array( "ALTER TABLE {dbprefix}users_permissions ADD KEY user_id(user_id)",
                                     "ALTER TABLE {dbprefix}users_permissions ADD KEY blog_id(blog_id)",
                                     "ALTER TABLE {dbprefix}users_permissions ADD KEY user_id_permission_id(user_id,permission_id)");

   // ---

   // ---
   // end of changes needed in 1.0
   // ---

$Inserts[0] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('comments_enabled','1',1);";
$Inserts[1] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('rdf_enabled','1',1);";
$Inserts[2] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('temp_folder','./tmp',3);";
$Inserts[3] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('base_url','{plog_base_url}',3);";
$Inserts[4] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('show_posts_max','15',1);";
$Inserts[5] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('recent_posts_max','10',1);";
$Inserts[6] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('default_template','standard',3);";
$Inserts[7] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('template_folder','./templates',3);";
$Inserts[8] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('default_blog_id','1',1);";
$Inserts[9] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('default_locale','en_UK',3);";
$Inserts[10] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('html_allowed_tags_in_comments','<a><i><br><br/><b>',3);";
$Inserts[11] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('referer_tracker_enabled','1',1);";
$Inserts[12] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('rss_parser_enabled','1',1);";
$Inserts[13] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('show_more_enabled','1',1);";
$Inserts[14] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('show_more_threshold','150',1);";
$Inserts[15] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('update_article_reads','1',1);";
$Inserts[16] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('email_service_enabled','1',1);";
$Inserts[17] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('post_notification_source_address','noreply@your.host.com',3);";
$Inserts[18] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('request_format_mode','1',1);";
$Inserts[19] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('xmlrpc_ping_hosts','a:2:{i:0;s:27:\"http://rpc.weblogs.com/RPC2\";i:1;s:0:\"\";}',5);";
$Inserts[20] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('trackback_server_enabled','1',1);";
$Inserts[21] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('htmlarea_enabled','1',1);";
$Inserts[22] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('plugin_manager_enabled','1',1);";
$Inserts[23] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('check_email_address_validity','0',1);";
$Inserts[24] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('summary_page_show_max','10',1);";
$Inserts[25] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('minimum_password_length','4',1);";
$Inserts[26] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('templates','a:3:{i:0;s:7:\"blueish\";i:1;s:4:\"grey\";i:2;s:8:\"standard\";}',5);";
$Inserts[27] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('locales','a:0:{}',5)";
$Inserts[28] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('email_service_type','php',3);";
$Inserts[29] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('smtp_host','your.smtp.host.com',3);";
$Inserts[30] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('smtp_port','25',1);";
$Inserts[31] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('smtp_use_authentication','0',1);";
$Inserts[32] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('smtp_username','',3);";
$Inserts[33] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('smtp_password','',3);";
$Inserts[34] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('locale_folder','./locale',3);";
$Inserts[35] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('xmlrpc_ping_enabled','0',1);";
$Inserts[36] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('path_to_tar','{path_to_tar}',3);";
$Inserts[37] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('path_to_gzip','{path_to_gzip}',3);";
$Inserts[38] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('path_to_bz2','{path_to_bz2}',3);";
$Inserts[39] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('path_to_unzip','{path_to_unzip}',3);";
$Inserts[40] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('users_can_add_templates',1,1);";
$Inserts[41] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('maximum_file_upload_size', 2000000, 1);";
$Inserts[42] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('upload_forbidden_files', '*.php *.php3 *.php4 *.phtml *.htm *.html *.exe *.com *.bat .htaccess *.sh', 3);";
$Inserts[43] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('comments_order', 1, 1);";
$Inserts[44] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('security_pipeline_enabled', 1, 1);";
$Inserts[45] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('maximum_comment_size', 0, 1 );";
$Inserts[46] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('resources_enabled', 1, 1 );";
$Inserts[47] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('thumbnail_method', 'gd', 3);";
$Inserts[48] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('path_to_convert', '{path_to_convert}', 3);";
$Inserts[49] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('thumbnail_height', 120, 1);";
$Inserts[50] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('thumbnail_width', 120, 1);";
$Inserts[51] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('thumbnails_keep_aspect_ratio', 1, 1);";
$Inserts[52] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('xmlrpc_api_enabled', 1, 1);";
$Inserts[53] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('uploads_enabled', 1, 1);";
$Inserts[54] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES ('default_rss_profile', 'rss090', 3);";
$Inserts[55] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('bayesian_filter_enabled', 1, 2);";
$Inserts[56] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('bayesian_filter_spam_probability_treshold', '0.9', 6);";
$Inserts[57] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('bayesian_filter_nonspam_probability_treshold', '0.2', 6);";
$Inserts[58] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('bayesian_filter_min_length_token', '3', 1);";
$Inserts[59] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('bayesian_filter_max_length_token', '100', 1);";
$Inserts[60] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('bayesian_filter_number_significant_tokens', 15, 1);";
$Inserts[61] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('bayesian_filter_spam_comments_action', 0, 1 );";
$Inserts[62] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('ip_address_filter_enabled', 1, 1 );";
$Inserts[63] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('content_filter_enabled', 1, 1 );";
$Inserts[64] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('thumbnail_format','same',3);";
$Inserts[65] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('resources_folder','./gallery/',3);";
$Inserts[66] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('beautify_comments_text', '1', 1);";
$Inserts[67] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('disable_apache_error_handler', '0', 1);";
$Inserts[68] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('show_future_posts_in_calendar', '0', 1);";
$Inserts[69] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('xhtml_converter_enabled', '1', 1);";
$Inserts[70] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('xhtml_converter_aggresive_mode_enabled', '0', 1);";
$Inserts[71] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('search_engine_enabled', '1', 1);";
$Inserts[72] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('search_in_custom_fields', '1', 1);";
$Inserts[73] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('search_in_comments', '1', 1);";
$Inserts[74] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('resources_quota', '0', 1);";
$Inserts[75] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('category_link_format', '/blog/{blogname}/{catname}$', 3);";
$Inserts[76] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('blog_link_format', '/blog/{blogname}$', 3);";
$Inserts[77] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('archive_link_format', '/blog/{blogname}/archives/{year}/?{month}/?{day}', 3);";
$Inserts[78] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('user_posts_link_format', '/blog/{blogname}/user/{username}$', 3);";
$Inserts[79] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('post_trackbacks_link_format', '/blog/{blogname}/post/trackbacks/{postname}$', 3);";
$Inserts[80] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('template_link_format', '/blog/{blogname}/page/{templatename}$', 3);";
$Inserts[81] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('album_link_format', '/blog/{blogname}/album/{albumname}$', 3);";
$Inserts[82] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('resource_link_format', '/blog/{blogname}/resource/{albumname}/{resourcename}$', 3);";
$Inserts[83] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('resource_preview_link_format', '/blog/{blogname}/resource/{albumname}/preview/{resourcename}$', 3);";
$Inserts[84] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('resource_download_link_format', '/blog/{blogname}/resource/{albumname}/download/{resourcename}$', 3);";
$Inserts[85] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('permalink_format', '/blog/{blogname}/{catname}/{year}/{month}/{day}/{postname}$', 3);";
$Inserts[86] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('script_name', 'index.php', 3);";
$Inserts[87] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('thumbnail_generator_use_smoothing_algorithm', '0', 1);";
$Inserts[88] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('resource_server_use_http_caching', '1', 1);";
$Inserts[89] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('medium_size_thumbnail_width', '640', 1);";
$Inserts[90] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('medium_size_thumbnail_height', '480', 1);";
$Inserts[91] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('resource_medium_size_preview_link_format', '/blog/{blogname}/resource/{albumname}/preview-med/{resourcename}$', 3);";
$Inserts[92] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('subdomains_enabled', '0', 1);";
$Inserts[93] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('include_blog_id_in_url', '1', 1);";
$Inserts[94] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('send_xmlrpc_pings_enabled_by_default', '1', 1);";
$Inserts[95] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('forbidden_usernames', 'admin www blog ftp wiki forums', 3);";
$Inserts[96] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('force_registration_confirmation', '0', 1);";
$Inserts[97] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('summary_blogs_per_page', '25', 3);";
$Inserts[98] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('subdomains_base_url', '', 3);";
$Inserts[99] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('autosave_new_drafts_time_millis', '300000', 3);";
$Inserts[100] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('save_drafts_via_xmlhttprequest_enabled', '1', 1);";
$Inserts[101] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('need_email_confirm_registration', '1', 1);";
$Inserts[102] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('force_one_blog_per_email_account', '0', 1);";
$Inserts[103] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('summary_show_agreement', '1', 1);";
$Inserts[104] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('default_time_offset', '0', 3);";
$Inserts[105] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('template_cache_enabled', '1', 1);";
$Inserts[106] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('template_http_cache_enabled', '0', 1);";
$Inserts[108] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('template_compile_check', '1', 1);";
$Inserts[109] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('update_cached_article_reads', '1', 1);";
$Inserts[110] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('allow_php_code_in_templates', '0', 1);";
$Inserts[111] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('thumbnail_generator_use_smoothing_algorithm', '1', 1);";
$Inserts[112] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('template_cache_lifetime', '-1', 3);";
$Inserts[113] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('use_http_accept_language_detection', '0', 1);";
$Inserts[114] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('session_save_path', '', 3);";
$Inserts[115] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('skip_dashboard', '0', 1);";
$Inserts[116] = "INSERT INTO {dbprefix}config (config_key, config_value, value_type) VALUES('use_captcha_auth', '0', 1);";


    /**
     * Open a connection to the database
     */
     function connectDb( $ignoreError = false , $selectDatabase = true )
     {
        $config = new ConfigFileStorage();
        // open a connection to the database
        $db = NewADOConnection( 'mysql' );
        if ( $selectDatabase ) {
            $res = $db->Connect($config->getValue( "db_host" ), $config->getValue( "db_username" ), $config->getValue( "db_password" ), $config->getValue( "db_database" ));
        } else {
            $res = $db->Connect($config->getValue( "db_host" ), $config->getValue( "db_username" ), $config->getValue( "db_password" ));
        }

        if( DB_WIZARD_DEBUG )
            $db->debug = true;

        // return error
        if( $ignoreError )
            return $db;

        if( !$res )
            return false;

        return $db;
    }

    /**
     * Returns the database prefix
     */
    function getDbPrefix()
    {
        $config = new ConfigFileStorage();
        return $config->getValue( "db_prefix" );
    }

    /**
     * some useful little functions
     */
    class WizardTools extends Object
    {
       /**
        * returns true if plog has already been installed before or
        * false otherwise
        */
       function isNewInstallation()
       {
           $configFile = new ConfigFileStorage();
           // if plog hasn't been installed, this file will have empty settings
           if( $configFile->getValue( "db_host") == "" && $configFile->getValue( "db_username") == "" &&
               $configFile->getValue( "db_database") == "" && $configFile->getValue( "db_prefix" ) == "" &&
               $configFile->getValue( "db_password" ) == "" )
               $isNew = true;
           else
               $isNew = false;

           return( $isNew );
       }
    }

    /**
     * Renders a template file.
     */
    class WizardView extends View
    {

        var $_templateName;

        function WizardView( $templateName )
        {
            $this->View();
            $this->_templateName = $templateName;
        }

        function render()
        {
            // build the file name
            $templateFileName = "wizard/".$this->_templateName.".template";

            //$t = new Template( $templateFileName, "" );
            $t = new Smarty();
            $v = new Version();
            $this->_params->setValue( "version", $v->getVersion());
            $this->_params->setValue( "projectPage", $v->getProjectPage());
            $this->_params->setValue( "safeMode", ini_get("safe_mode"));
            $t->assign( $this->_params->getAsArray());
            $t->template_dir    = "./templates";
            $t->compile_dir     = TEMP_FOLDER;
            $t->cache_dir       = TEMP_FOLDER;
            $t->use_sub_dirs    = false;
            $t->caching = false;

            print $t->fetch( $templateFileName );
        }
    }

    /**
     * Gets the information about the database from the user.
     */
    class WizardIntro extends Action
    {
        function WizardIntro( $actionInfo, $request )
        {
            $this->Action( $actionInfo, $request );
        }

        function perform()
        {
            // we can detect whether plog is already installed or not and direct users to the right
            // place
            if( WizardTools::isNewInstallation())
                $this->_view = new WizardView( "intro" );
            else {
                Controller::setForwardAction( "Update1" );
                return false;
            }

            $this->setCommonData();
            return true;
        }
    }

    /**
     *
     * Saves data to the configuration file
     *
     */
    class WizardStepOne extends Action
    {

        var $_dbServer;
        var $_dbUser;
        var $_dbPassword;
        var $_dbName;
        var $_dbPrefix;

        function WizardStepOne( $actionInfo, $request )
        {
            $this->Action( $actionInfo, $request );

            // data validation
            $this->registerFieldValidator( "dbServer", new StringValidator());
            $this->registerFieldValidator( "dbUser", new StringValidator());
            $this->registerFieldValidator( "dbPassword",  new StringValidator(), true );
            $this->registerFieldValidator( "dbName", new StringValidator());
            $this->registerFieldValidator( "dbPrefix", new StringValidator(), true );
            $errorView = new WizardView( "intro" );
            $errorView->setErrorMessage( "Some data was incorrect or missing." );
            $this->setValidationErrorView( $errorView );
        }

        function perform()
        {
            // fetch the data needed from the request
            $this->_dbServer   = $this->_request->getValue( "dbServer" );
            $this->_dbUser     = $this->_request->getValue( "dbUser" );
            $this->_dbPassword = $this->_request->getValue( "dbPassword" );
            $this->_dbName     = $this->_request->getValue( "dbName" );
            $this->_skipThis   = $this->_request->getValue( "skipDbInfo" );
            $this->_dbPrefix   = $this->_request->getValue( "dbPrefix", DEFAULT_DB_PREFIX );

            // we should now save the data to the configuration file, just before
            // we read it
            $configFile = new ConfigFileStorage();

            // we expect everything to be fine
            $errors = false;

            // before doing anything, we should check of the configuration file is
            // writable by this script, or else, throw an error and bail out gracefully
            $configFileName = $configFile->getConfigFileName();
            if( !File::exists( $configFileName )) {
                if (! File::touch( $configFileName ) ) {
                    $this->_view = new WizardView( "intro" );
                    $message = "Could not create the pLog configuration file $configFileName. Please make sure
                                that the file can be created by the user running the webserver. It is needed to
                                store the database configuration settings.";
                    $this->_view->setErrorMessage( $message );
                    $this->setCommonData( true );
                    return false;
                } else {
                    ConfigFileStorage::createConfigFile( $configFileName );
                }
            }
            if( File::exists( $configFileName ) && !File::isWritable( $configFileName )) {
                $this->_view = new WizardView( "intro" );
                $message = "Please make sure that the file $configFileName can be written by this script during
                            the installation process. It is needed to store the database configuration settings. Once the
                            installation is complete, please revert the permissions to no writing possible.";
                $this->_view->setErrorMessage( $message );
                $this->setCommonData( true );
                return false;
            }

            // continue if everything went fine
            if( !$configFile->saveValue( "db_username", $this->_dbUser ) ||
                !$configFile->saveValue( "db_password", $this->_dbPassword ) ||
                !$configFile->saveValue( "db_host", $this->_dbServer ) ||
                !$configFile->saveValue( "db_database", $this->_dbName ) ||
                !$configFile->saveValue( "db_prefix", $this->_dbPrefix )) {
                $errors = true;
            }

            if( $errors ) {
                $message = "Could not save values to the configuration file. Please make sure it is available and
                            that has write permissions for the user under your web server is running.";
                $this->_view = new WizardView( "intro" );
                $this->_view->setErrorMessage( $message );

                return( false );
            }
            else {
                $this->_view = new WizardView( "step1" );

                // now we better read the information from the config file to make sure that
                // it has been correctly saved
                $this->setCommonData( true );

                return true;
            }
        }
    }

    /**
     *
     * Second step where we connect to the database and create the tables.
     *
     */
    class WizardStepTwo extends Action
    {

        var $_db;
        var $_database;
        var $_createDatabase;

        function setDbConfigValues( &$view )
        {
            $configFile = new ConfigFileStorage();
            $configFile->reload();
            $view->setValue( "dbUser", $configFile->getValue( "db_username" ));
            $view->setValue( "dbPassword", $configFile->getValue( "db_password" ));
            $view->setValue( "dbServer", $configFile->getValue( "db_host" ));
            $view->setValue( "dbName", $configFile->getValue( "db_database" ));
            $view->setValue( "dbPrefix", $configFile->getValue( "db_prefix" ));
            return true;
        }

        function perform()
        {
            global $Tables;
            global $Inserts;

            $createDb = $this->_request->getValue( "createDatabase" );

            // only check for errors in case the database table should already exist!
            if( !$createDb ) {
                $connectionEsablished = false;

                // Lets check the 'everything is fine' case first..
                $this->_db = connectDb();
                if( $this->_db ) {
                     $connectionEsablished = true;
                } else {
                     $connectionEsablished = false;
                     $message = "There was an error selecting the database. Please verify the database was already created or check the 'Create database' checkbox.";
                }

                // We were unable to connect to the db and select the right db.. lets try
                // just to connect.. maybe the database needs to be created (even though the
                // user did not check the appropriate box).
                if ( !$connectionEsablished ) {
                    $this->_db = connectDb( true, false );
                    if( !$this->_db ) {
                         $message = "There was an error connecting to the database. Please check your settings.";
                    }
                }

                if ( !$connectionEsablished ) {
                    $this->_view = new WizardView( "step1" );
                    $this->setDbConfigValues( $this->_view );
                    $this->_view->setErrorMessage( $message );
                    $this->setCommonData( true );
                    return false;
                }
            }

            $config = new ConfigFileStorage();
            $this->_database = $config->getValue( "db_database" );
            $this->_dbPrefix = $config->getValue( "db_prefix" );

            // create the database
            if( $createDb ) {
                $this->_db = connectDb( false, false );
                if( !$this->_db->Execute( "CREATE DATABASE ".$this->_database )) {
                    $message = "Error creating the database: ".$this->_db->ErrorMsg();
                    $this->_view = new WizardView( "step1" );
                    $this->setDbConfigValues( $this->_view );
                    $this->_view->setErrorMessage( $message );
                    $this->setCommonData( true );
                    return false;
                } else {
                    $message = "Database created successfully.<br/>";
                }
            }

            // reconnect using the new database.
            $config = new ConfigFileStorage();
            $this->_db->Connect($config->getValue( "db_host" ), $config->getValue( "db_username" ), $config->getValue( "db_password" ), $config->getValue( "db_database" ));

            // create the tables
            $errors = false;
            foreach( $Tables as $table ) {
                $query = str_replace( "{dbprefix}", $this->_dbPrefix, $table["code"] );
                if( $this->_db->Execute( $query ))
                    $message .= "Table <strong>".$table["desc"]."</strong> created successfully.<br/>";
                else {
                    $message .= "Error creating table: ".$this->_db->ErrorMsg()."<br/>";
                    $errors = true;
                }
            }

            if( $errors ) {
                $message = "There was an error creating the tables in the database. Please make sure that the user chosen to connect to the database has enough permissions to create tables.<br/><br/>$message";
                $this->_view = new WizardView( "step1" );
                $this->_view->setErrorMessage( $message );
                $this->setDbConfigValues( $this->_view );
                $this->setCommonData();
                return false;
            }

            // try to guess the url where plog is running
             // try to guess the url where plog is running
             $httpProtocol = (array_key_exists("HTTPS", $_SERVER) && $_SERVER["HTTPS"] == "on") ? "https://" : "http://";
             $httpHost = $_SERVER["HTTP_HOST"];
             $requestUrl = $_SERVER["REQUEST_URI"];
             $requestUrl = str_replace( "/wizard.php", "", $requestUrl );
             $plogUrl = $httpProtocol.$httpHost.$requestUrl;

            // Find some of the tools we are going to need (last one is for os x, with fink installed)
            // TBD: support for Windows specific directories
            $folders = Array( "/bin/", "/usr/bin/", "/usr/local/bin/", "/sw/bin/" );
            $finder = new FileFinder();
            $pathToUnzip = $finder->findBinary( "unzip", $folders );
            $pathToTar = $finder->findBinary( "tar", $folders);
            $pathToGzip = $finder->findBinary( "gzip", $folders);
            $pathToBzip2 = $finder->findBinary( "bzip2", $folders);
            $pathToConvert = $finder->findBinary( "convert", $folders);

            // and execute some insert's
            foreach( $Inserts as $insert ) {
                $query = str_replace( "{dbprefix}", $this->_dbPrefix, $insert );
                $query = str_replace( "{plog_base_url}", $plogUrl, $query );
                // replace also the placeholders for the paths to the tools
                $query = str_replace( "{path_to_tar}", $pathToTar, $query );
                $query = str_replace( "{path_to_unzip}", $pathToUnzip, $query );
                $query = str_replace( "{path_to_bz2}", $pathToBzip2, $query );
                $query = str_replace( "{path_to_gzip}", $pathToGzip, $query );
                $query = str_replace( "{path_to_convert}", $pathToConvert, $query );
                $query = str_replace( "{path_to_convert}", $pathToConvert, $query );
                if( !$this->_db->Execute( $query )) {
                    $message .= "Error executing code: ".$this->_db->ErrorMsg()."<br/>";
                    $errors = true;
                }
            }

            //
            // show some information regarding the helper tools we're going to need
            // and wether they were found or not
            //
            $message .= "<br/><b>-- Helper tools --</b><br/>";
            if( $pathToTar == "" )
                $message .= "The helper tool 'tar' was not found<br/>";
            else
                $message .= "The helper tool 'tar' was found in $pathToTar<br/>";
            if( $pathToGzip == "" )
                $message .= "The helper tool 'gzip' was not found<br/>";
            else
                $message .= "The helper tool 'gzip' was found in $pathToGzip<br/>";
            if( $pathToUnzip == "" )
                $message .= "The helper tool 'unzip' was not found<br/>";
            else
                $message .= "The helper tool 'unzip' was found in $pathToUnzip<br/>";
            if( $pathToBzip2 == "" )
                $message .= "The helper tool 'bzip2' was not found<br/>";
            else
                $message .= "The helper tool 'bzip2' was found in $pathToTar<br/>";
            if( $pathToConvert == "" )
                $message .= "The helper tool 'convert' (from the ImageMagick package) was not found<br/>";
            else
                $message .= "The helper tool 'convert' (from the ImageMagick package) was found in $pathToConvert<br/>";

            if( $errors ) {
                $this->_view = new WizardView( "step1" );
                $this->setDbConfigValues( $this->_view );
                $message = "There was an error initializing some of the tables. Please make sure that the user chosen to connect to the database has enough permissions to add records to the database.<br/><br/>$message";
                $this->_view->setErrorMessage( $message );
                $this->setCommonData();
            }
            else {
                $this->_view = new WizardView( "step2" );
                $this->_view->setValue( "message", $message );
            }

            // Scan for locales
            $locales = new Locales();
            // find all the new locales that we have not yet stored
            $f = new LocaleFinder();
            $newLocaleCodes = $f->find();

            foreach( $newLocaleCodes as $newLocaleCode ) {
                $res = $locales->addLocale( $newLocaleCode );
            }

            return true;
        }
    }

    /**
     *
     * this action only shows some feedback
     *
     */
    class WizardStepThree extends Action
    {
        function perform()
        {
            $this->_view = new WizardView( "step3" );
            $this->setCommonData();
        }
    }

    /**
     *
     * Create the first user in the database
     *
     */
    class WizardStepFour extends Action
    {

        var $_userName;
        var $_userPassword;
        var $_confirmPassword;
        var $_userEmail;
        var $_userFullName;

        function WizardStepFour( $actionInfo, $request )
        {
            $this->Action( $actionInfo, $request );

            $this->registerFieldValidator( "userName", new StringValidator());
            $this->registerFieldValidator( "userPassword", new PasswordValidator());
            $this->registerFieldValidator( "userPasswordCheck", new PasswordValidator());
            $this->registerFieldValidator( "userEmail", new EmailValidator());
            $this->registerField( "userFullName" );
            $view = new WizardView( "step3" );
            $view->setErrorMessage( "Some data is missing or incorrect" );
            $this->setValidationErrorView( $view );
        }

        // creates the user
        function perform()
        {
            $this->_userName = $this->_request->getValue( "userName" );
            $this->_userPassword = $this->_request->getValue( "userPassword" );
            $this->_confirmPassword = $this->_request->getValue( "userPasswordCheck" );
            $this->_userEmail = $this->_request->getValue( "userEmail" );
            $this->_userFullName = $this->_request->getValue( "userFullName" );

            $db = connectDb();

            if( !$db ) {
                $this->_view = new WizardView( "step3" );
                $this->_view->setErrorMessage( "There was an error connecting to the database. Please check your settings." );
                $this->setCommonData();
                return false;
            }

            if( $this->_confirmPassword != $this->_userPassword ) {
                $this->_view = new WizardView( "step3" );
                $this->_form->setFieldValidationStatus( "userPasswordCheck", false );
                $this->setCommonData( true );
                return false;
            }

            $dbPrefix = Db::getPrefix();

            $users = new Users();
            $user = new UserInfo( $this->_userName,
                                  $this->_userPassword,
                                  $this->_userEmail,
                                  "",
                                  $this->_userFullName);
            $userId = $users->addUser( $user );
            if( !$userId ) {
                $this->_view = new WizardView( "step3" );
                $message = "There was an error adding the user. Make sure that the user does not already exist in the database (".$users->DbError().")";
                $this->_view->setErrorMessage( $message );
                $this->setCommonData();
                return false;
            }

            // we also have to execute the code to give administrator privileges to this user
            $query = "INSERT INTO {$dbPrefix}users_permissions(user_id,blog_id,permission_id) VALUES( $userId, 0, 1 );";
            $db->Execute( $query );

            $this->_view = new Wizardview( "step4" );
            $this->_view->setValue( "ownerid", $userId );
            $this->_view->setValue( "siteLocales", Locales::getLocales());
            $this->_view->setValue( "defaultLocale", Locales::getDefaultLocale());
            $ts = new TemplateSets();
            $this->_view->setValue( "siteTemplates", $ts->getGlobalTemplateSets());
            $this->setCommonData();
            return true;
        }

    }

    class WizardStepFive extends Action
    {

        var $_blogName;
        var $_ownerId;
        var $_blogProperties;

        function WizardStepFive( $actionInfo, $request )
        {
              $this->Action( $actionInfo, $request );

              $this->registerFieldValidator( "blogName", new StringValidator());
              $this->registerFieldValidator( "ownerid", new IntegerValidator());
              $this->registerFieldValidator( "blogTemplate", new StringValidator());
              $this->registerFieldValidator( "blogLocale", new StringValidator());
              $view = new WizardView( "step4" );
              $view->setErrorMessage( "Some data is missing or incorrect" );
              $view->setValue( "siteLocales", Locales::getLocales());
              $ts = new TemplateSets();
              $view->setValue( "siteTemplates", $ts->getGlobalTemplateSets());
              $this->setValidationErrorView( $view );
        }

        function perform()
        {
            // retrieve the values from the view
            $this->_blogName = $this->_request->getValue( "blogName" );
            $this->_ownerId  = $this->_request->getValue( "ownerid" );
            $this->_blogProperties = $this->_request->getValue( "properties" );
            $this->_blogTemplate = $this->_request->getValue( "blogTemplate" );
            $this->_blogLocale = $this->_request->getValue( "blogLocale" );

            // configure the blog
            $blogs = new Blogs();
            $blog = new BlogInfo( $this->_blogName, $this->_ownerId, "", "" );
            $blog->setProperties( $this->_blogProperties );
            $blog->setStatus( BLOG_STATUS_ACTIVE );
            $blogSettings = $blog->getSettings();
            $blogSettings->setValue( "locale", $this->_blogLocale );
            $blogSettings->setValue( "template", $this->_blogTemplate );
            $blog->setSettings( $blogSettings );

            // and now save it to the database
            $newblogId = $blogs->addBlog( $blog );
            if( !$newblogId ) {
                $this->_view = new WizardView( "step4" );
                $this->_view->setValue( "siteLocales", Locales::getLocales());
                $ts = new TemplateSets();
                $this->_view->setValue( "siteTemplates", $ts->getGlobalTemplateSets());
                $this->_view->setErrorMessage( "There was an error creating the new blog" );
                $this->setCommonData( true );
                return false;
            }

            // if the blog was created, we can add some basic information
            // add a category
            $articleCategories = new ArticleCategories();
            $articleCategory = new ArticleCategory( "General", "", $newblogId, true );
            $catId = $articleCategories->addArticleCategory( $articleCategory );

            // load the right locale
            $locale =& Locales::getLocale( $this->_blogLocale );
            // and load the right text
            $articleTopic = $locale->tr( "register_default_article_topic" );
            $articleText  = $locale->tr( "register_default_article_text" );
            $article = new Article( $articleTopic, $articleText, Array( $catId ), $this->_ownerId, $newblogId, POST_STATUS_PUBLISHED, 0, Array(), "welcome" );
            $t = new Timestamp();
            $article->setDateObject( $t );
            $articles = new Articles();
            $articles->addArticle( $article );

            // save a few things in the default configuration
            $config =& Config::getConfig();
            // default blog id
            $config->saveValue( "default_blog_id", (int)$newblogId );
            // default locale
            $config->saveValue( "default_locale", $this->_blogLocale );
            // and finally, the default template
            $config->saveValue( "default_template", $this->_blogTemplate );

            //
            // detect wether we have GD available and set the blog to use it
            //
            if( GdDetector::detectGd()) {
                $config->saveValue( "thumbnail_method", "gd" );
                $message = "GD has been detected and set as the backend for dealing with images.";
            }
            else {
                $pathToConvert = $config->getValue( "path_to_convert" );
                if( $pathToConvert ) {
                    $config->saveValue( "thumbnail_method", "imagemagick" );
                    $message = "ImageMagick has been detected and set as the backend for dealing with images.";
                }
                else {
                    // nothing was found, so we'll have to do away with the 'null' resizer...
                    $config->saveValue( "thumbnail_method", "null" );
                    $message = "Neither GD nor ImageMagick have been detected in this host so it will not be possible to generate thumbnails from images.";
                }
            }

            $this->_view = new WizardView( "step5" );
            $this->_view->setValue( "message", $message );
            return true;
        }
    }

    //
    // The following classes take care of updating the database to the last release
    //
    // Things that need to be done when going from 0.3.x to 1.0:
    //
    // - add the new tables:
    //     plog_article_categories_link
    //     plog_custom_fields_definition
    //     plog_custom_fields_values
    //
    // - make modifications to some of the old tables:
    //     plog_articles
    //          normalized_text: TEXT
    //          normalized_topic: TEXT
    //          mangled_topic: TEXT
    //          category_id: DROP
    //          FULLTEXT(normalized_text)
    //          FULLTEXT(normalized_topic)
    //          FULLTEXT(normalized_text, normalized_topic)
    //     plog_articles_categories
    //          parent_id: INTEGER
    //          mangled_name: TEXT
    //          properties: TEXT
    //     plog_articles_comments
    //          normalized_text: TEXT
    //          normalized_topic: TEXT
    //          FULLTEXT(normalized_text)
    //          FULLTEXT(normalized_topic)
    //          FULLTEXT(normalized_text, normalized_topic)
    //     plog_blogs
    //          mangled_blog: TEXT
    //          properties: TEXT
    //     plog_gallery_albums
    //          normalized_name: VARCHAR
    //          normalized_description: TEXT
    //          mangled_name: VARCHAR
    //          FULLTEXT(normalized_name)
    //          FULLTEXT(normalized_description)
    //          FULLTEXT(normalized_name, normalized_description)
    //     plog_gallery_resources
    //          normalized_description: TEXT
    //          FULLTEXT(normalized_description)
    //     plog_mylinks
    //          properties: TEXT
    //     plog_mylinks_categories
    //          properties: TEXT
    //     plog_users
    //          properties: TEXT
    //          full_name: VARCHAR
    //
    // - for all the articles in the db, fill in the normalized_text, normalized_topic and mangled_topic
    //   fields using the TextFilter class
    //
    // - for all articles in the db, change the status from a string ('published', 'draft', 'deleted') to
    // an integer (POST_STATUS_{PUBLISHED|DELETED|DRAFT}
    //
    // - for all articles and categories, arrange the plog_article_categories_link table so that everything works
    //   as before
    //
    // - for all article categories, fill in the mangled_name field
    //
    // - for all comments, fill in the normalized_text and normalized_topic fields
    //
    // - for all blogs, fill in the mangled_blog field
    //
    // - for all albums, fill in the normalized_name, normalized_description and mangled_name fields
    //
    // - for all resources, fill in the normalized_description field


    class UpdateStepOne extends Action
    {

        function perform()
        {
            $this->_view = new WizardView( "update1" );
            WizardStepTwo::setDbConfigValues( $this->_view );
            $this->setCommonData();
        }
    }

    class UpdateStepTwo extends Action
    {

        var $_db;
        var $_dbPrefix;

        function validate()
        {
            $configFile = new ConfigFileStorage();
            $this->_dbPrefix = $configFile->getValue( "db_prefix" );

            return true;
        }

        function perform()
        {
            // we need to create the new tables here
            $newTables = Array( 21, 22, 23, 24 );

            global $Tables;
            global $Changes;
            global $Inserts;

            // connect to the db
            $this->_db = connectDb();

            // store error messages in this var
            $message = "";

            if( !$this->_db ) {
                $this->_view = new WizardView( "update1" );
                WizardStepTwo::setDbConfigValues( $this->_view );
                $this->_view->setErrorMessage( "There was an error connecting to the database. Please check your settings." );
                return false;
            }

            // ---
            // create the new tables in 1.0
            // ---
            // loop only through the new tables
            foreach( $newTables as $tableId ) {
                // get info about the table we'd like to use
                $table = $Tables[$tableId];
                // and run the query
                $query = str_replace( "{dbprefix}", $this->_dbPrefix, $table["code"] );
                if( $this->_db->Execute( $query ))
                    $message .= "New table <strong>".$table["desc"]."</strong> created successfully.<br/>";
                else {
                    $message .= "Error creating table: ".$this->_db->ErrorMsg()."<br/>";
                    $errors = true;
                }
            }
            if( !$errors ) {
                $message .= "** New tables created successfully **<br/><br/>";
            }

            // ---
            // make changes to the tables that need changes
            // ---
            foreach( $Changes as $tableId => $changeTable) {
                $errorMessage = "";            
                foreach( $changeTable as $changeCode ) {
                    // and run the query
                    $query = str_replace( "{dbprefix}", $this->_dbPrefix, $changeCode );
                    if( !$this->_db->Execute( $query )) {
                        $errors = true;                    
                        $errorMessage .= $this->_db->ErrorMsg()."<br/>";
                    }
                }

                if( !$errors )
                    $message .= "Changes to table <strong>$tableId</strong> executed successfully.<br/>";
                else {
                    $message .= "Error modifying table $tableId: ".$errorMessage;
                }
            }

            if( !$errors ) {
                $message .= "** Modifications to old tables carried out successfully **<br/><br/>";
            }

            // ---
            // add the new configuration settings that were added for 1.0
            // ---
            $newSettings = range( 71, 116 );
            foreach( $newSettings as $settingId ) {
                $setting = $Inserts[$settingId];
                $query = str_replace( "{dbprefix}", $this->_dbPrefix, $setting );
                if( !$this->_db->Execute( $query )) {
                    $message .= "There was an error executing: ".$this->_db->ErrorMsg()."<br/>";
                    $errors = true;
                }
            }

            //
            // there's nothing left to do so we can quit now!!
            //
            if( !$errors ) {
                $this->_view = new WizardView( "update2" );
                $this->_view->setValue( "message", $message );
            }
            else {
                $this->_view = new WizardView( "update1" );
                WizardStepTwo::setDbConfigValues( $this->_view );
                $this->_view->setErrorMessage( $message );
            }

            return true;
        }
    }

    /**
     * this is the first step of the transformations to some of the fields in the tables.
     * Precisely, it is in this step where we regenerate the indexes for the search engine... However, it
     * could take it a while...
     */
    class UpdateStepThree extends Action
    {
        function UpdateStepThree( $actionInfo, $httpRequest )
        {
            $this->Action( $actionInfo, $httpRequest );

            // load the current step, if any
            $this->_curStep = $this->_request->getValue( "curStep" );
            $this->_numPosts = $this->_request->getValue( "numPosts" );

            //print("cur step = ".$this->_curStep." - num posts = ".$this->_numPosts."<br/>");
        }

        function getStatusId( $statusStr )
        {
            if( $statusStr == 'published' ) return POST_STATUS_PUBLISHED;
            if( $statusStr == 'draft' ) return POST_STATUS_DRAFT;
            if( $statusStr == 'deleted' ) return POST_STATUS_DELETED;

            return false;
        }

       function perform()
       {
            // get a connection to the db
            $db = connectDb();
            $dbPrefix = getDbPrefix();
            $db->debug=false;

            // no errors here
            $errors = false;

            // see how many records we have
            $queryCount = "SELECT COUNT(*) AS total FROM {$dbPrefix}articles";
            $result = $db->Execute( $queryCount );
            $row = $result->FetchRow();
            $numRecords = $row["total"];
            $this->_totalPosts = $numRecords;
            // check whether we should use multiple steps
            $multipleSteps = ( $numRecords > WIZARD_MAX_RECORDS_THRESHOLD );
            if( $multipleSteps ) {
                // how many steps do we need?
                $numSteps = ceil( $numRecords / WIZARD_MAX_RECORDS_PER_STEP );
                $this->_numSteps = $numSteps;
                //print("using different steps! numSteps = $numSteps<br/>");
            }

            // run the query and loop through the results
            $query = "SELECT * FROM {$dbPrefix}articles";
            if( $multipleSteps ) {
                // generate the LIMIT condition for this page
                $query .= " LIMIT ".$this->_curStep*WIZARD_MAX_RECORDS_PER_STEP.", ".WIZARD_MAX_RECORDS_PER_STEP;
            }

            //print("query = $query<br/>");

            $result = $db->Execute( $query );

            $tf = new TextFilter();

            $numPosts = $result->RowCount();

            while( $row = $result->FetchRow()) {
                // for each one of the articles, fill in the mangled_topic, normalized_text and normalized_value
                $normalizedTopic = Db::qstr($tf->normalizeText( $row["topic"] ));
                $postTopic       = Db::qstr($row["topic"]);
                $normalizedText  = Db::qstr($tf->normalizeText( $row["text"] ));
                $postText        = Db::qstr($row["text"]);
                $mangledTopic    = Db::qstr($tf->urlize( $row["topic"] ));
                $status          = $this->getStatusId( $row["old_status"] );
                $artId           = $row["id"];
                $catId           = $row["category_id"];

                $query = "UPDATE {$dbPrefix}articles SET slug = '$mangledTopic', date = date, status = $status
                          WHERE id = $artId";

                $query2= "INSERT INTO {$dbPrefix}article_categories_link(article_id, category_id)
                          VALUES ( $artId, $catId )";

                $query3= "INSERT INTO {$dbPrefix}articles_text (article_id,text,topic,normalized_text,normalized_topic,mangled_topic)
                          VALUES('$artId','$postText','$postTopic','$normalizedTopic','$normalizedText','$mangledTopic')";


                // execute the two queries
                $res  = $db->Execute( $query );
                $res2 = $db->Execute( $query2 );
                $res3 = $db->Execute( $query3 );

                /*if( !$res || !$res2 || !$res3 )
                    $errors = true;*/
            }

            // check whether we've already done the last step or not
            $lastStepDone = ( $this->_curStep >= $this->_numSteps );

            // if error
            if( $errors ) {
                $this->_view = new WizardView( "update2" );
                $this->_view->setErrorMessage( "There was an error updating the articles table." );
                $this->setCommonData();
                return false;
            }

            //$query1 = "ALTER TABLE {$dbPrefix}articles DROP COLUMN old_status, DROP COLUMN category_id";
            //$db->Execute( $query1 );

            // if everyhting's fine, say so...
            if( !$multipleSteps || $lastStepDone ) {
                $this->_view = new WizardView( "update3" );
                $this->_view->setValue( "totalPosts", $this->_totalPosts );
            }
            else {
                // if we're using multiple steps, show the same page
                $this->_view = new WizardView( "update2" );
                $this->_view->setValue( "numPosts", $numPosts );
                $this->_view->setValue( "curStep", $this->_curStep+1 );
                $this->_view->setValue( "totalPosts", $this->_totalPosts );
                $this->_view->setValue( "numSteps", $this->_numSteps );
                $this->_view->setValue( "multipleSteps", true );
            }

            return true;
        }

    }

    // ---
    // this action will do the same as before but for the rest of the tables that need some data to
    // be normalized/mangled
    // ---
    class UpdateStepFour extends Action
    {

        var $dbPrefix;
        var $db;
        var $t;

        function validate()
        {
            $this->db = connectDb();
            $this->dbPrefix = getDbPrefix();
            $this->t = new TextFilter();

            return true;
        }

        //
        // process the article categories
        //
        function updateArticleCategories()
        {
            $dbPrefix = $this->dbPrefix;
            $query = "SELECT * FROM {$dbPrefix}articles_categories";
            $result = $this->db->Execute( $query );

            while( $row = $result->FetchRow()) {
                $catId = $row["id"];
                $mangledName = $this->t->urlize( $row["name"] );
                $query = "UPDATE {$dbPrefix}articles_categories
                          SET mangled_name = '$mangledName', last_modification = last_modification
                          WHERE id = $catId";

                $res = $this->db->Execute( $query );

                // this is not very nice to see but it works... :)
                if( !$res ) {
                    $this->message .= "There was an error updating the article categories table.<br/>";
                    return false;
                }
            }

            $this->message .= "Article Categories table updated successfully!<br/>";

            return true;
        }

        //
        // process the comments
        //
        function updateArticleComments()
        {
            $dbPrefix = $this->dbPrefix;
            $query = "SELECT * FROM {$dbPrefix}articles_comments";
            $result = $this->db->Execute( $query );

            while( $row = $result->FetchRow()) {
                $commentId = $row["id"];
                $normText = Db::qstr($this->t->normalizeText( $row["text"] ));
                $normTopic = Db::qstr($this->t->normalizeText( $row["topic"] ));
                $query = "UPDATE {$dbPrefix}articles_comments
                          SET normalized_text = '$normText', normalized_topic = '$normTopic', date = date
                          WHERE id = $commentId";

                $res = $this->db->Execute( $query );

                if( !$res ) {
                    $this->message .= "There was an error updating the comments table.<br/>";
                    return false;
                }
            }

            $this->message .= "Comments table updated successfully!<br/>";

            return true;
        }

        //
        // process the blogs
        //
        function updateBlogs()
        {
            $dbPrefix = $this->dbPrefix;
            $query = "SELECT * FROM {$dbPrefix}blogs";
            $result = $this->db->Execute( $query );

            while( $row = $result->FetchRow()) {
                $blogId = $row["id"];
                $mangledBlog = $this->t->urlize( $row["blog"] );
                $query = "UPDATE {$dbPrefix}blogs
                          SET mangled_blog = '$mangledBlog' WHERE id = $blogId";

                $res = $this->db->Execute( $query );

                if( !$res ) {
                    $this->message .= "There wasn an error updaing the blogs table.<br/>";
                    return false;
                }
            }

            $this->message .= "Blogs table updated successfully!<br/>";

            return true;
        }

        //
        // process the albums
        //
        function updateAlbums()
        {
            $dbPrefix = $this->dbPrefix;
            $query = "SELECT * FROM {$dbPrefix}gallery_albums";
            $result = $this->db->Execute( $query );

            while( $row = $result->FetchRow()) {
                $albumId = $row["id"];
                $mangledName = Db::qstr($this->t->urlize( $row["name"] ));
                $normName = Db::qstr($this->t->normalizeText( $row["name"] ));
                $normDescription = Db::qstr($this->t->normalizeText( $row["description"] ));
                $query = "UPDATE {$dbPrefix}gallery_albums
                          SET mangled_name = '$mangledName', normalized_name = '$normName',
                          normalized_description = '$normDescription', date = date
                          WHERE id = $albumId";

                $res = $this->db->Execute( $query );

                if( !$res ) {
                    $this->message .= "There was an error updating the albums table.<br/>";
                    return false;
                }
            }

            $this->message .= "Resource Albums table updated successfully!<br/>";

            return true;
        }

        //
        // and finally, the resources...
        //
        function updateResources()
        {
            $dbPrefix = $this->dbPrefix;
            $query = "SELECT * FROM {$dbPrefix}gallery_resources";
            $result = $this->db->Execute( $query );

            while( $row = $result->FetchRow()) {
                $resId = $row["id"];
                //$normName = $this->t->normalizeText( $row["name"] );
                $normDescription = Db::qstr($this->t->normalizeText( $row["description"] ));
                $query = "UPDATE {$dbPrefix}gallery_resources
                          SET normalized_description = '$normDescription', date = date
                          WHERE id = $resId";

                $res = $this->db->Execute( $query );
                if( !$res ) {
                    $this->message .= "There was an error updating the resources table.<br/>";
                    return false;
                }
            }

            $this->message .= "Resources table updated successfully!<br/>";

            return true;

        }

        //
        // process the articles' text
        //
        function updateArticleText()
        {
            $dbPrefix = $this->dbPrefix;
            // drop unneeded columns from articles table
            $alter_query[] = "ALTER TABLE ".$dbPrefix."articles DROP COLUMN text";
            $alter_query[] = "ALTER TABLE ".$dbPrefix."articles DROP COLUMN topic";

            foreach ($alter_query as $value) {
                $this->db->Execute($value);
            }


            $this->message .= "articles_text table updated successfully!<br/>";

            return true;
        }

        function perform()
        {
            $updaters = Array( "updateArticleCategories", "updateArticleComments",
                               "updateBlogs", "updateAlbums", "updateResources", "updateArticleText" );

            // loop through each one of the methods to take care of updating one of the tables
            foreach( $updaters as $method ) {
                $result = $this->$method();

                if( !$result ) {
                    $this->_view = new WizardView( "update3" );
                    $this->_view->setErrorMessage( $this->message );
                    return false;
                }
            }

            // everything went fine so we can show the final page!
            $this->_view = new WizardView( "update4" );
            $this->_view->setValue( "message", $this->message );

            return true;
        }

    }

    // check if the "./tmp" folder is writable by us, otherwise
    // throw an error before the user gets countless errors
    // from Smarty
    if( !File::isWritable( TEMP_FOLDER ) || !File::isDir( TEMP_FOLDER )) {
        print("<span style=\"color:red; font-size: 14px;\">Error</span><br/><br/>This wizard needs the ".TEMP_FOLDER." folder to be writable by the web server user.<br/><br/>Please correct that and try again.");
        die();
    }

    //// main part ////
    $controller = new Controller( $_actionMap, "nextStep" );
    $controller->process( HttpVars::getRequest());
?>
