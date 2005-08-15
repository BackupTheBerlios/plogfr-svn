<?php
$messages["hostblock_plugin_enabled"] = "Enable this plugin";

$messages["siteSecurity"] = "Site Security";
$messages["blogSecurity"] = "Blog Security";
$messages["hostblock_plugin"] = "Host Block Plugin";
$messages["blockedHostSettings"] = "Host Block";
$messages["blockedHosts"] = "Global Blocked Hosts";
$messages["blogBlockedHosts"] = "Blocked Hosts";
$messages["newBlockedHost"] = "Add Global Blocked Hosts";
$messages["newBlogBlockedHost"] = "Add Blocked Hosts";

$messages["ip_address"] = "IP Address";
$messages["host_to_block_help"] = "This section will allow you to block a specific address or entire subnet from your Blog. You can select if you want them to be able to see it, but unable to post or simply unable to access it at all. Copy the offending address into the spaces provided and choose the proper subnet address space if necessary. Example: To block just the address of 192.168.1.123 you would choose the '32 bits' option to match the entire address. This blocks just this one address and works well for banning someone with a Static IP address. If you're seeing multiple IP Addresses for a particular individual (say 192.168.1.123, 192.168.1.225, 192.168.1.21 and 192.168.1.67) then you will want to ban a particular subnet range. Enter one of the IP Addresses that you see and choose '24 bits', '16 bits' or '8 bits'  to match the first 3 sections, first 2 sections or the first section respectively.";
$messages["bits"] = "Bits";
$messages["block_type"] = "Block Type";
$messages["block_type_help"] = "The 'Block type' drop-down list will allow you to choose whether to block this host from completely accessign the site (an error page will be sent to the client's browser whenever trying to access) or simply block it from posting new comments. If the latter is chosen, the host will still be allowed to read articles and other people's comments.";
$messages["reason"] = "Reason";
$messages["reason_help"] = "You can also attach a reason/description to this host blocking rule, so that you can remember in the future why it was set up.";
$messages["access_blocked"] = "Access Blocked";
$messages["posting_blocked"] = "Posting Blocked";
$messages["add_blocked_host"] = "Add Blocked Host";
$messages["edit_blocked_host"] = "Edit Blocked Host";

$messages["error_provide_host_to_block"] = "You must provide some hostt to block.";
$messages["error_adding_blocked_host"] = "There was an error when adding the blocked host.";
$messages["error_incorrect_host_id"] = "The blocked host ID is incorrect.";
$messages["error_no_block_host_selected"] = "There were no hosts selected to remove.";
$messages["error_fetching_blocked_host"] = "There was an error fetching the blocked host.";
$messages["error_updating_blocked_host"] = "There was an error updating the blocked host.";
$messages["error_updating_host_block_settings"] = "There was an error when updating the host block plugin settings.";
$messages["error_invalid_ip_address"] = "The IP address is not valid.";
$messages["error_deleting_blocked_host"] = "There was an error when deleteing the blocked host %s.";
$messages["error_hostblock_not_enabled"] = "Please kindly enable host block plugin first.";

$messages["blocked_host_updated_ok"] = "Blocked host updated successfully.";
$messages["blocked_host_added_ok"] = "Blocked host added successfully.";
$messages["host_block_settings_updated_ok"] = "Host block pluing settings updated successfully.";
$messages["blocked_hosts_deleted_ok"] = "%s blocked hosts deleted successfully.";
$messages["blocked_host_deleted_ok"] = "Blocked hosts %s deleted successfully.";

$messages["error_you_have_been_blocked"] = "You are not allowed to proceed with this request.";

$messages["label_configuration"] = "Configuration";
$messages["label_enable"] = "Enable";
?>