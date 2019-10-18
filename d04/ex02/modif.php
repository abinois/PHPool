<?php
function ft_leave($infoString)
{
	exit ($infoString);
}
if ($_POST["submit"] != "OK" || !$_POST["login"] || !$_POST["newpw"] || !$_POST["oldpw"] ||$_POST["login"] == "" || $_POST["oldpw"] == "" || $_POST["newpw"] == "")
	ft_leave("ERROR\n");
if (file_exists("../private/passwd"))
{
	$data = unserialize(file_get_contents("../private/passwd"));
	print_r($data);
	foreach ($data as $index => $user)
		if ($user["login"] === $_POST["login"] && $user["passwd"] === hash(gost, $_POST["oldpw"]))
		{
			$data[$index]["passwd"] = hash(gost, $_POST["newpw"]);
			file_put_contents("../private/passwd", serialize($data), FILE_APPEND);
			ft_leave("OK\n");
		}
}
ft_leave("ERROR\n");
?>
