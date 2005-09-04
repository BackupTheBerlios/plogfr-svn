<?php

/**
 * main articles table
 */
$Tables["articles"] = "
  id I(10) NOTNULL AUTO PRIMARY
  category_id I(10) NOTNULL DEFAULT 0,
  topic X NOTNULL DEFAULT '',
  text X NOTNULL DEFAULT '',
  date T DEFDATE,
  modification_date T,
  user_id I(10) NOTNULL DEFAULT 0,
  blog_id I(10) NOTNULL DEFAULT 0,
  status I(10) NOTNULL DEFAULT 1,
  num_reads I(10) NOTNULL DEFAULT 0,
  properties X NOTNULL DEFAULT '',
  normalized_topic X NOTNULL DEFAULT '',
  normalized_text X NOTNULL DEFAULT '',
  mangled_topic X NOTNULL DEFAULT '',
  slug C(255) NOTNULL DEFAULT ''
";

$Tables["articles_categories"] = "
  id I(10) NOTNULL AUTO PRIMARY,
  name C(255) NOTNULL DEFAULT '',
  url C(255) NOTNULL DEFAULT '',
  blog_id I(10) NOTNULL DEFAULT 0,
  last_modification T,
  in_main_page L NOTNULL DEFAULT 1,
  parent_id I(10) NOTNULL DEFAULT 0,
  description X NOTNULL DEFAULT '',
  properties X NOTNULL DEFAULT '',
  mangled_name C(255) NOTNULL DEFAULT ''
";

$Tables["articles_comments"] = "
  id I(10) NOTNULL AUTO PRIMARY,
  article_id I(10) NOTNULL AUTO PRIMARY,
  topic X NOTNULL DEFAULT '',
  text X NOTNULL DEFAULT '',
  date T,
  user_email C(255) DEFAULT '',
  user_name C(255) NOTNULL DEFAULT '',
  parent_id I(10) DEFAULT 0,
  client_ip C(15) NOTNULL DEFAULT '0.0.0.0',
  send_notification L NOTNULL DEFAULT 1,
  status I(4) NOTNULL DEFAULT 1,
  spam_rate F DEFAULT 0,
  properties X NOTNULL DEFAULT '',
  normalized_text X NOTNULL DEFAULT '',
  normalized_topic X NOTNULL DEFAULT ''
";

$Tables["articles_notifications"] = "
  id I(10) NOTNULL AUTO PRIMARY,
  blog_id I(10) NOTNULL DEFAULT '0',
  user_id I(10) NOTNULL DEFAULT '0',
  article_id I(10) NOTNULL DEFAULT '0'
";

$Tables["blogs"] = "
  id I(10) NOTNULL AUTO PRIMARY,
  blog C(50) NOTNULL DEFAULT '',
  owner_id I(10) NOTNULL DEFAULT '0',
  about X,
  settings X NOTNULL DEFAULT '',
  mangled_blog C(50) NOTNULL DEFAULT '',
  status I(4) NOTNULL DEFAULT '1'
";

$Tables["mylinks"] = "
  id I(10) NOTNULL AUTO PRIMARY,
  category_id I(10) NOTNULL DEFAULT '0',
  url C(255) NOTNULL DEFAULT '',
  name C(100) DEFAULT '',
  description X NOTNULL,
  blog_id I(10)  NOTNULL DEFAULT '0',
  rss_feed C(255) NOTNULL DEFAULT '',
  date T(14) NOTNULL,
  properties X NOTNULL DEFAULT ''
";

$Tables["mylinks_categories"] = "
  id I(10) NOTNULL AUTO PRIMARY,
  name C(100) NOTNULL DEFAULT '',
  blog_id I(10) NOTNULL DEFAULT '0',
  last_modification T(14) NOTNULL,
  properties TEXT NOTNULL DEFAULT ''
";

$Tables["myrecent"] = "
  id I(10)  NOTNULL AUTO PRIMARY,
  category_id I(10)  NOTNULL DEFAULT '0',
  name C(255) NOTNULL DEFAULT '',
  text X NOTNULL,
  user_id I(10)  NOTNULL DEFAULT '0',
  blog_id I(10)  NOTNULL DEFAULT '0'
";

$Tables["myrecent_categories"] = "
  id I(10)  NOTNULL AUTO PRIMARY,
  name C(255) NOTNULL DEFAULT '',
  blog_id I(10)  NOTNULL DEFAULT '0',
  last_modification T(14) NOTNULL
";

$Tables["permissions"] = "
  id I(10)  NOTNULL AUTO PRIMARY,
  permission C(25) NOTNULL DEFAULT '',
  description C(100) NOTNULL DEFAULT ''
";

$Tables["referers"] = "
  id I(10) NOTNULL AUTO PRIMARY,
  url X NOTNULL,
  article_id I(10) NOTNULL DEFAULT '0',
  blog_id I(10) NOTNULL DEFAULT '0',
  hits I(10) DEFAULT '1',
  last_date T(14)
";

$Tables["trackbacks"] = "
  id I(10) NOTNULL AUTO PRIMARY,
  url X NOTNULL,
  title C(255) DEFAULT '',
  article_id I(10) NOTNULL DEFAULT '0',
  excerpt C(255) DEFAULT '',
  blog_name C(255) DEFAULT '',
  date T(14) NOTNULL,
  properties TEXT NOTNULL DEFAULT ''
";


$Tables["users"] = "
  id I(10)  NOTNULL AUTO PRIMARY,
  user C(15) NOTNULL DEFAULT '' UNIQUE,
  password C(32) NOTNULL DEFAULT '',
  email C(255) NOTNULL DEFAULT '',
  full_name C(255) NOTNULL DEFAULT '',
  about X,
  properties TEXT NOTNULL DEFAULT '',
  status integer(4) NOTNULL DEFAULT 1,
  resource_picture_id I(10) NOTNULL DEFAULT 0
";

$Tables["users_permissions"] = "
  id I(10)  NOTNULL AUTO PRIMARY,
  user_id I(10)  NOTNULL DEFAULT '0',
  blog_id I(10)  NOTNULL DEFAULT '0',
  permission_id I(10)  NOTNULL DEFAULT '0'
";


$Tables["config"] = "
   id I(10) NOTNULL AUTO PRIMARY,
   config_key C(255) NOTNULL DEFAULT '',
   config_value X NOTNULL,
   value_type I(3) DEFAULT '0'
";

$Tables["filtered_content"] = "
   id I(10) NOTNULL AUTO PRIMARY,
   reg_exp X,
   blog_id I(10) NOTNULL DEFAULT '0',
   reason X,
   date T(14) DEFTIMESTAMP
";

$Tables["host_blocking_rules"] = "
   id I(10) NOTNULL AUTO PRIMARY,
   reason X,
   date T(14) NOTNULL,
   blog_id I(10) NOTNULL DEFAULT '0',
   block_type I(1) DEFAULT '1',
   list_type I(1) DEFAULT '1',
   mask I(2) DEFAULT '0',
   host C(15) DEFAULT '0.0.0.0'
";

$Tables["gallery_resources"] = "
   id I(10) NOTNULL AUTO PRIMARY,
   owner_id I(10) NOTNULL DEFAULT '0',
   album_id I(10) NOTNULL DEFAULT '0',
   description X,
   date T(14) NOTNULL,
   flags I(10) DEFAULT '0',
   resource_type I(3) DEFAULT NULL,
   file_path C(255) DEFAULT '',
   file_name C(255) DEFAULT '',
   metadata X,
   thumbnail_format C(4) NOTNULL DEFAULT 'same',
   normalized_description X NOTNULL DEFAULT '',
   properties TEXT NOTNULL DEFAULT ''
";

$Tables["gallery_albums"] = "
   id I(10) NOTNULL AUTO PRIMARY,
   owner_id I(10) NOTNULL DEFAULT '0',
   description X NOTNULL,
   name C(255) NOTNULL DEFAULT '',
   flags I(10) NOTNULL DEFAULT '0',
   parent_id I(10) NOTNULL DEFAULT '0',
   date T(14) NOTNULL,
   properties X NOTNULL DEFAULT '',
   show_album TINYI(1) DEFAULT 1,
   normalized_description X NOTNULL DEFAULT '',
   normalized_name C(255) NOTNULL DEFAULT '',
   mangled_name C(255) NOTNULL DEFAULT ''
";

$Tables["bayesian_filter_info"] = "
   id I(10)  NOTNULL AUTO PRIMARY,
   blog_id I(10)  DEFAULT NULL,
   total_spam I(10)  DEFAULT NULL,
   total_nonspam I(10)  DEFAULT NULL
";

$Tables["bayesian_tokens"] = "
   id I(10)  NOTNULL AUTO PRIMARY,
   blog_id I(10)  DEFAULT NULL,
   token char(100) DEFAULT NULL,
   spam_occurrences I(10)  DEFAULT NULL,
   nonspam_occurrences I(10)  DEFAULT NULL,
   prob float DEFAULT NULL
";

$Tables["article_categories_link"] = "
   article_id I(10) NOTNULL,
   category_id I(10) NOTNULL
";

$Tables["custom_fields_definition"] = "
   id I(10) NOTNULL AUTO PRIMARY,
   field_name C(255) NOTNULL DEFAULT '',
   field_description X NOTNULL,
   field_type I(2) NOTNULL DEFAULT '1',
   blog_id I(10) NOTNULL DEFAULT '0',
   date TIMESTAMP(14),
   searchable L DEFAULT 1,
   hidden L DEFAULT 1
";

$Tables["custom_fields_values"] = "
   id I(10) NOTNULL AUTO PRIMARY,
   field_id I(10) NOTNULL DEFAULT '0',
   field_value X NOTNULL,
   normalized_value X NOTNULL,
   blog_id I(10) DEFAULT NULL,
   article_id I(10) DEFAULT NULL
";

/**
 * indexes
 */
//$TableIndexes[][] = ;

?>