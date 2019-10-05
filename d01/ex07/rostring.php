#!/usr/bin/php
<?php
if ($argc > 1)
{
	$tab = explode(" ", preg_replace('/\\s+/', " ", trim($argv[1])));
	$first = array_shift($tab);
	foreach ($tab as $word)
		echo "$word ";
	echo "$first\n";
}
?>
