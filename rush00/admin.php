<?php
Function ($login)
{
    if (($table = unserialize(file_get_contents("private/passwd"))) === FALSE)
		return (FALSE);
    foreach ($table as $user)
        if ($user["login"] === $login && isset($user["admin"]))
            return (TRUE);
    return (FALSE);
}
?>
