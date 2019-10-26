<?php
$str = $_GET['id'].";".$_GET['val'].PHP_EOL;
$fd = fopen("list.csv", 'rw');
file_put_contents("list.csv", $str, FILE_APPEND);
if ($fd)
    fclose($fd);
?>