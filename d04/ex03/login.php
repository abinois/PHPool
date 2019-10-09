<?php
session_start();
include "auth.php";
if ($_GET["login"] != "" && $_GET["passwd"] != "" && auth($_GET["login"], $_GET["passwd"])
{
	$_SESSION["logued_on_user"] = $GET["login"];
	echo "OK\n";
	exit();
}
$_SESSION["logued_on_user"] = "";
echo "ERROR\n";
?
?>
