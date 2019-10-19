<?php
session_start();
include "auth.php";
include "admin.php";
if ($_POST["login"] && $_POST["passwd"] && $_POST["submit"] === "login" && auth($_POST["login"], $_POST["passwd"]))
{
	$_SESSION["loggued_on_user"] = $_POST["login"];
	$_SESSION["loggued_on_pwd"] = "yes";
	$_SESSION["admin"] = admin($_POST["login"]) ? $_POST["login"] : "";
	exit();
}
$_SESSION["loggued_on_user"] = "";
$_SESSION["loggued_on_pwd"] = "";
?>
