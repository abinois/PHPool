<?php
    if ($_POST["login"] == "" || $_POST["passwd"] == "" || $_POST["submit"] != "OK")
    {
        echo "ERROR\n";
        return ;
    }
	if (file_exists("../private/passwd"))
	{
		$data = unserialize("../private/passwd");
		foreach ($data as $user)
			if ($user["login"] === $_POST["login"]
			{
				echo "ERROR\n";
				return ;
			}
	}
	$tab["login"] = $_POST["login"];
	$tab["passwd"] = hash(md5, $_POST["passwd"]);
	$tab = serialize($tab);
	if (!file_exists("../private"))
		mkdir("../private");
	file_put_contents("../private/passwd", $tab, FILE_APPEND);
	echo "OK\n";
?>
