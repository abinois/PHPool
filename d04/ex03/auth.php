<?php
function auth($login, $passwd)
{
    $table = unserialize(file_get_contents("../private/passwd");
    foreach ($table as $user)
        if ($user["login"] === $login && $user["passwd"] === hash(gost, $passwd))
            return (TRUE);
    return (FALSE);
}
?>
