<?php
function ft_leave($infoString)
{
	echo $infoString."\n";
	exit();
}
if (!$_POST["login"] || !$_POST["passwd"] || $_POST["passwd"] == "" || $_POST["login"] == "" || $_POST["submit"] != "OK")
	ft_leave("ERROR");
if (file_exists("../private/passwd"))
{
	$data = unserialize(file_get_contents("../private/passwd"));
	foreach ($data as $user)
		if ($user["login"] === $_POST["login"])
			ft_leave("ERROR");
}
elseif (!file_exists("../private"))
	mkdir("../private");
$tab = array('user' => array('login', 'passwd'));
$tab[$_POST["login"]]['login'] = $_POST["login"];
$tab[$_POST["passwd"]]['passwd'] = hash(gost, $_POST["passwd"]);
file_put_contents("../private/passwd", serialize($tab), FILE_APPEND);
ft_leave("OK");
?>
