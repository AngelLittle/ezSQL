<?php
include_once "shared/ez_sql_core.php";
include_once "mysqli/ez_sql_mysqli.php";

$db = new ezSQL_mysqli($mysql_user, $mysql_pwd, $mysql_db, $mysql_host);
$db->query("SET NAMES 'utf8'");
?>
