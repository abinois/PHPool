<?php
session_start();
include "auth.php";
include "admin.php";
include "logout.php";
if (isset($_POST['submitlog']) && $_POST['submitlog'] === "login")
{
	if (!isset($_POST['login']) || !isset($_POST['passwd']) || $_POST['login'] == "" || $_POST['passwd'] == "")
	{
		ft_logout($_SESSION);
		$error = "<p class=\"error_mess\">Un ou plusieurs champs vides</p>";
		return;
	}
	elseif (isset($_POST["login"]) && isset($_POST["passwd"]))
	{
		if (($ret = auth($_POST["login"], $_POST["passwd"])) != 1 )
		{
			ft_logout($_SESSION);
			if ($ret === -3)
				$error = "<p class=\"error_mess\">Mot de passe incorrect 🕵 </p>";
			elseif ($ret === -4)
				$error = "<p class=\"error_mess\">Utilisateur inconnu 👽</p>";
			return;
		}
		$_SESSION["loggued_on_user"] = $_POST["login"];
		$_SESSION["loggued_on_pwd"] = "yes";
		$_SESSION["admin"] = admin($_POST["login"]) ? $_POST["login"] : "";
		$error = "<p class=\"hello_mess\">Contents de vous revoir ✌️ ".$_POST['login']." ! 🏄 </p>";
	}
}
?>


