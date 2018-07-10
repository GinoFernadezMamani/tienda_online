<?php

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "tienda";
$db_table_name = "productos2";
$db_connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);
if (!$db_connection){
	die ('no existe la base de datos');
}
?>
