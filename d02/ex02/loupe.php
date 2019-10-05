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
	$strup = preg_replace_callback("/(<a.*title=\")(.*)(\".*>)/", "match_up", $file);
	$strup = preg_replace_callback("/(<a.*>)(.*)(<)/", "match_up", $file);
	$strup = preg_replace_callback("/(<a.*>.*<.*title=\")(.*)(\")/.*>", "match_up", $file);
	echo "$strup\n";
}
?>
