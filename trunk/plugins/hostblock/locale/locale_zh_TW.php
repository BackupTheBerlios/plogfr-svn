<?php
$messages["hostblock_plugin_enabled"] = "啟動外掛程式";

$messages["siteSecurity"] = "系統安全";
$messages["blogSecurity"] = "系統安全";
$messages["hostblock_plugin"] = "阻擋主機外掛程式";
$messages["blockedHostSettings"] = "阻擋主機設定";
$messages["blockedHosts"] = "全域阻擋主機列表";
$messages["blogBlockedHosts"] = "阻擋主機列表";
$messages["newBlockedHost"] = "新增全域阻擋主機";
$messages["newBlogBlockedHost"] = "新增阻擋主機";

$messages["ip_address"] = "IP 位址";
$messages["host_to_block_help"] = "您可以在這裡阻擋某個特定的網路位置，或是某個網路區段，不讓從這個位置來的使用者瀏覽您的網誌站台。您也可以設定成讓他們可以瀏覽，但是不可以發表文章。請輸入網路位置，並且做適當的設定。比方說，如果您要阻擋 192.168.1.123 這個位置，您便必須在填入IP位置後，並設定為「32 bits」，這麼一來便可以阻擋從某個固定IP連線的使用者。如果您想要阻擋多個位置，而不只是要阻擋單一位置，例如您同時想要阻擋 192.168.1.123、192.168.1.225、192.168.1.21 以及 192.168.1.67 的話，您可以檔掉整個網路區段。請在輸入 IP 位置後，選擇「24 bits」、「16 bits」或「8 bits」，阻擋不同範圍的區段。";
$messages["bits"] = "位元";
$messages["block_type"] = "阻擋類別";
$messages["block_type_help"] = "「阻擋類別」這個下拉選單，可以讓您決定被阻擋的使用者會遇到的狀況，您可以讓他無法瀏覽您的網誌站台（系統會送出一個錯誤訊息），或是讓他不能夠發表文章。如果您選擇後者，那麼他還是可以閱讀站上的文章以及迴響留言。";
$messages["reason"] = "原因";
$messages["reason_help"] = "您也可以對阻擋主機的理由稍作說明，方便您日後可以知道您當初為什麼把對方檔掉了。";
$messages["access_blocked"] = "禁止瀏覽";
$messages["posting_blocked"] = "禁止發表";
$messages["add_blocked_host"] = "新增阻擋主機";
$messages["edit_blocked_host"] = "編輯阻擋主機";

$messages["error_provide_host_to_block"] = "您必須要輸入您要阻擋的主機 IP 位址。";
$messages["error_adding_blocked_host"] = "在新增阻擋主機時發生錯誤。";
$messages["error_incorrect_host_id"] = "您所選擇的阻擋主機代號錯誤。";
$messages["error_no_block_host_selected"] = "你沒有選擇任何的阻擋主機。";
$messages["error_fetching_blocked_host"] = "在讀取阻擋主機時發生錯誤。";
$messages["error_updating_blocked_host"] = "在更新阻擋主機時發生錯誤。";
$messages["error_updating_host_block_settings"] = "在更新設定時發生錯誤。";
$messages["error_invalid_ip_address"] = "您輸入的 IP 位址不正確。";
$messages["error_deleting_blocked_host"] = "在刪除阻擋主機 %s 時發生錯誤。";
$messages["error_hostblock_not_enabled"] = "請您先啟動阻擋主機外掛程式。";

$messages["blocked_host_updated_ok"] = "阻擋主機順利更新。";
$messages["blocked_host_added_ok"] = "阻擋主機順利新增。";
$messages["host_block_settings_updated_ok"] = "設定順利更新。";
$messages["blocked_hosts_deleted_ok"] = "順利刪除 %s 個阻擋主機。";
$messages["blocked_host_deleted_ok"] = "順利刪除阻擋主機 %s。";

$messages["error_you_have_been_blocked"] = "抱歉！你所要求的動作無法繼續。";

$messages["label_configuration"] = "設定";
$messages["label_enable"] = "啟動";
?>