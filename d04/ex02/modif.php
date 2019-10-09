<?php
function ft_leave($infoString)
{
	echo $infoString."\n";
	exit();
}
if ($_POST["submit"] != "OK" || $_POST["login"] == "" || $_POST["oldpwd"] == "" || $_POST["newpw"] == "")
	ft_leave("ERROR");
if (file_exists("../private/passwd"))
{
	$data = unserialize(file_get_contents("../private/passwd"));
	foreach ($data as $index => $user)
		if ($user["login"] === $_POST["login"] && $user["passwd"] === hash(gost, $_POST["oldpw"]))
		{
			$data[$index]["passwd"] = hash(gost, $_POST["newpw"]);
			file_put_contents("../private/passwd", serialize($data));
			ft_leave("OK");
		}
}
ft_leave("ERROR");
?>
