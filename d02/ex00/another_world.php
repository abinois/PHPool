#!/usr/bin/php
<?php
if($argc > 1)
{
	$phrase = preg_replace('/[ \t]{1,}/', " ", trim($argv[1]));
	echo "$phrase\n";
}
?>
