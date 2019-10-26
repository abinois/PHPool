<?php
$fd = fopen("list.csv", 'r');
if ($fd != FALSE)
{
    $bigtab = array();
    while (($line = fgetcsv($fd, 0, ";")))
        if ($line[0] != $_POST['id'])
            $bigtab[] = $line;
    foreach ($bigtab as $key => $line)
        $bigtab[$key] = implode(";", $line);
    file_put_contents("list.csv", implode(PHP_EOL, $bigtab));
    fclose($fd);
}
?>