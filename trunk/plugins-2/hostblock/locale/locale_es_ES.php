<?php
$messages["hostblock_plugin_enabled"] = "Activar este plugin";

$messages["manageSecurityPlugins"] = "Plugins de Seguridad";
$messages["siteSecurity"] = "Seguridad del Sitio";
$messages["blogSecurity"] = "Seguridad del Blog";
$messages["hostblock_plugin"] = "Plugin Host Block";
$messages["blockedHostSettings"] = "Host Block";
$messages["blockedHosts"] = "Hosts Bloqueados Global";
$messages["blogBlockedHosts"] = "Hosts Bloqueados";
$messages["newBlockedHost"] = "Agregar Host Bloqueado Global";
$messages["newBlogBlockedHost"] = "Agregar Host Bloqueado";

$messages["ip_address"] = "Direcci&oacute;n IP";
$messages["host_to_block_help"] = "Esta secci&oacute;n permite bloquear el acceso al blog a hosts espec&iacute;ficos o subnets. Se puede especificar si se les permitir&aacute; ver el blog, pero no agregar comentarios, o impedir el acceso por completo. Copia las direcciones a bloquear en los espacios provistos y elige la subnet apropiada si es necesario. Ejemplo: para bloquear la direcci&oacute;n 192.168.1.123 se puede elegir la opci&oacute;n '32 bits' para coincidir con la direcci&oacute;n completa. Esto bloquea s&oacute;lo esta direcci&oacute;n, y funciona bien para prevenir el acceso de alguien con una direcci&oacute;n IP est&aacute;tica. Si un individuo usa m&uacute;ltiple direcciones IP (digamos 192.168.1.123, 192.168.1.225, 192.168.1.21 and 192.168.1.67), se debe bloquear una subnet, especificando el rango. Ingresa una de las direcciones IP que deseas bloquear y elige '24 bits', '16 bits' u '8 bits' para coincidir con las primeras 3 secciones, 2 o una respectivamente.";
$messages["bits"] = "Bits";
$messages["block_type"] = "Tipo de Bloqueo";
$messages["block_type_help"] = "La lista 'Tipo de Bloqueo' permite elegir entre bloquear completamente el acceso (se le mostrar&aacute; una p&aacute;gina de error al usuario bloqueado) o simplemente impedirle agregar comentarios. si se elige esto &uacute;ltimo, el usuario bloqueado podr&aacute; leer art&iacute;culos y comentarios, pero no podr&aacute; agregar los suyos.";
$messages["reason"] = "Raz&oacute;n";
$messages["reason_help"] = "Se puede agregar una raz&oacute;n sobre el bloqueo, como referencia para el futuro.";
$messages["access_blocked"] = "Acceso Bloqueado";
$messages["posting_blocked"] = "Comentarios Bloqueados";
$messages["add_blocked_host"] = "Agregar Host Bloqueado";
$messages["edit_blocked_host"] = "Editar Host Bloqueado";

$messages["error_provide_host_to_block"] = "Debes ingresar un host a bloquear.";
$messages["error_adding_blocked_host"] = "Hubo un error agregando el host a bloquear.";
$messages["error_incorrect_host_id"] = "El host ingresado es incorrecto.";
$messages["error_no_block_host_selected"] = "No se seleccionaron hosts a eliminar.";
$messages["error_fetching_blocked_host"] = "Hubo un error consultando el host bloqueado.";
$messages["error_updating_blocked_host"] = "Hubo un error actualizando el host bloqueado.";
$messages["error_updating_host_block_settings"] = "Hubo un error actualizando la configuraci&oacute;n del plugin.";
$messages["error_invalid_ip_address"] = "La direcci&oacute;n IP no es v&aacute;lida.";
$messages["error_deleting_blocked_host"] = "Hubo un error eliminando el host bloqueado: %s";
$messages["error_hostblock_not_enabled"] = "Por favor activa el plugin primero.";

$messages["blocked_host_updated_ok"] = "Host Bloqueado actualizado exitosamente.";
$messages["blocked_host_added_ok"] = "Host Bloqueado agregado exitosamente.";
$messages["host_block_settings_updated_ok"] = "La configuraci&oacute;n se guard&oacute; con &eacute;xito.";
$messages["blocked_hosts_deleted_ok"] = "%s hosts bloqueados eliminados exitosamente.";
$messages["blocked_host_deleted_ok"] = "Host Bloqueado %s eliminado exitosamente.";

$messages["error_you_have_been_blocked"] = "No est&aacute; autorizado a proseguir.";

$messages["label_configuration"] = "Configuraci&oacute;n";
$messages["label_enable"] = "Activar";
?>