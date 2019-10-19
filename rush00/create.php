<?php
if (isset($_POST['submitnew']) && $_POST['submitnew'] === "sign in")
{
	if (!isset($_POST['newuser']) || !isset($_POST['newpwd']) || $_POST['newuser'] == "" || $_POST['newpwd'] == "")
	{
		$error = "<p class=\"error_mess\">Un ou plusieurs champs vides</p>";
		return;
	}
	session_start();
	if (file_exists("./private/passwd"))
	{
		$data = unserialize(file_get_contents("./private/passwd"));
		foreach ($data as $key => $user)
			if ($key == $_POST['newuser'])
			{
				$error = "<p class=\"error_mess\">Login déjà attribué ☹️ </p>";
				return;
			}
	}
	if (!file_exists("private"))
		mkdir("private");
	$tab['login'] = $_POST['newuser'];
	$tab['passwd'] = hash(gost, $_POST['newpwd']);
	$data[$_POST['newuser']] = $tab;
	file_put_contents("./private/passwd", serialize($data));
	$_SESSION['loggued_on_user'] = $_POST["newuser"];
	$_SESSION['loggued_on_pwd'] = "yes";
	$error = "<p class=\"hello_mess\">Bienvenue ".$_POST['newuser']." ! 🏄 </p>";
}
?>
