<?php
$messages["hostblock_plugin_enabled"] = "启用插件";

$messages["siteSecurity"] = "系统安全";
$messages["blogSecurity"] = "博客安全";
$messages["blockedHosts"] = "全域阻挡主机列表";
$messages["blogBlockedHosts"] = "阻挡主机列表";
$messages["newBlockedHost"] = "添加全域阻挡主机";
$messages["newBlogBlockedHost"] = "添加阻挡主机";

$messages["ip_address"] = "IP地址";
$messages["host_to_block_help"] = "您可以在这里设置阻挡某个特定的网络地址，或是某个网段，不让从这个位置来的使用者浏览您的博客站台。您也可以设置成让他们可以浏览，但是不可以发表文章。请输入网络地址，并且做适当的设置。例如，如果您要阻挡 192.168.1.123 这个地址，您就必须在输入IP地址后，并设置为32 bits，这样就可以阻挡从某个固定IP连入的使用者。如果您想要阻挡多个地址，而不只是要阻挡单一地址，例如您同时想要阻挡 192.168.1.123、192.168.1.225、192.168.1.21 以及 192.168.1.67 的话，您可以ban掉整个网段。请在输入IP地址后，选择24 bits、16 bits或8 bits，阻挡不同范围的网段。";
$messages["bits"] = "bits";
$messages["block_type"] = "阻挡类别";
$messages["block_type_help"] = "阻挡类别这个下拉选单，可以让您决定被阻挡的使用者会遇到的情况，您可以让他无法浏览您的博客站台（系统会送出一个错误讯息），或是让他不能够发表文章。如果您选择后者，那么他还是可以阅读站上的文章以及回复留言。";
$messages["reason"] = "原因";
$messages["reason_help"] = "您也可以对阻挡主机的理由稍作说明，方便您日后可以知道您当初为什么把对方ban掉了。";
$messages["access_blocked"] = "禁止浏览";
$messages["posting_blocked"] = "禁止发表";
$messages["add_blocked_host"] = "添加阻挡主机";
$messages["edit_blocked_host"] = "添加阻挡主机";

$messages["error_provide_host_to_block"] = "您必须要输入您要阻挡的主机的IP地址。";
$messages["error_adding_blocked_host"] = "在添加阻挡主机时发生错误。";
$messages["error_incorrect_host_id"] = "您所选择的阻挡主机代号错误。";
$messages["error_no_block_host_selected"] = "你没有选择任何的阻挡主机。";
$messages["error_fetching_blocked_host"] = "在读取阻挡主机时发生错误。";
$messages["error_updating_blocked_host"] = "在更新阻挡主机时发生错误。";
$messages["error_updating_host_block_settings"] = "在更新设置时发生错误。";
$messages["error_invalid_ip_address"] = "您输入的IP地址不正确。";
$messages["error_deleting_blocked_host"] = "在删除阻挡主机 %s 时发生错误。";

$messages["blocked_host_updated_ok"] = "阻挡主机更新成功。";
$messages["blocked_host_added_ok"] = "阻挡主机添加成功。";
$messages["host_block_settings_updated_ok"] = "设置更新成功。";
$messages["blocked_hosts_deleted_ok"] = "成功删除 %s 个阻挡主机。";
$messages["blocked_host_deleted_ok"] = "成功删除阻挡主机 %s。";

$messages["error_you_have_been_blocked"] = "对不起！你所要进行的操作无法执行。";

$messages["label_configuration"] = "设置";
$messages["label_enable"] = "启用";
?>
