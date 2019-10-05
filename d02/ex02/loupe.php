#!/usr/bin/php
<?php
function match_up($tab)
{
	$str = $tab[1].strtoupper($tab[2]).$tab[3];
	return ($str);
}
if ($argc > 1)
{
	$file = file_get_contents($argv[1]);
	$strup = preg_replace_callback("/(<a.*title=\")(.*)(\".*>.*\/a>)/", "match_up", $string);
	$strup = preg_replace_callback("/(<a.*>)(.*)(<.*\/a>)/", "match_up", $string);
	echo "$strup\n";
}
?>
