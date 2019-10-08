#!/usr/bin/php
<?php
if (isset($_GET["action"]) && isset($_GET["name"]))
{
	if ($_GET["action"] == "set" && isset($_GET["value"]))
		setcookie($_GET["name"], $_GET["value"], time() + (24 * 60 * 60));
	elseif ($_GET["action"] == "get" && isset($_COOKIE[$_GET["name"]]))
		echo $_COOKIE[$_GET["name"]]."\n";
	elseif ($_GET["action"] == "del" && isset($_COOKIE[$_GET["name"]]))
		setcookie($_GET["name"], NULL, time() - 1000);
}
?>
