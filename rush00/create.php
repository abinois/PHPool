<?php
if (!$_POST['login'] || !$_POST['passwd'] || $_POST['passwd'] == "" || $_POST['login'] == "" || $_POST['submit'] != "sign in")
	exit ("Un ou plusieurs champs vides\n");
if (file_exists("private/passwd"))
{
	$data = unserialize(file_get_contents("private/passwd"));
	foreach ($data as $key => $user)
		if ($key == $_POST['login'])
			exit ("Login déjà attribué ☹️ \n");
	$tab['login'] = $_POST["login"];
	$tab['passwd'] = hash(gost, $_POST['passwd']);
	$data[$_POST['login']] = $tab;
	file_put_contents("private/passwd", serialize($data));
}
else
{
	if (!file_exists("private"))
		mkdir("private");
	$tab['login'] = $_POST['login'];
	$tab['passwd'] = hash(gost, $_POST['passwd']);
	$data[$_POST['login']] = $tab;
	file_put_contents("private/passwd", serialize($data));
}
exit ("Bienvenue ".$_POST['login']." ! 🏄 \n");
?>
