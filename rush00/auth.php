<?php
function auth($login, $passwd)
{
	if (!file_exists("private/passwd"))
		return (-1);
    if (($table = unserialize(file_get_contents("private/passwd"))) === FALSE)
		return (-2);
    foreach ($table as $user)
        if ($user["login"] === $login && $user["passwd"] === hash(gost, $passwd))
            return (1);
		elseif ($user["login"] === $login && $user["passwd"] != hash(gost, $passwd))
			return (-3);
    return (-4);
}
?>
