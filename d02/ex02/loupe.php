#!/usr/bin/php
<?php
function match_up($tab)
{
	$str = $tab[1].strtoupper($tab[2]).$tab[3];
	return ($str);
}
function match_up2($tab)
{
	$str = $tab[1].strtoupper($tab[2]).$tab[3].strtoupper($tab[4]).$tab[5];
	return ($str);
}
if ($argc > 1)
{
	$file = file_get_contents($argv[1]);
	$new = preg_replace_callback("/(<a.*title=\"?)([\w\s]+)(\"?>.*\/a>)/i", "match_up", $file);
	$new = preg_replace_callback("/(<a.*?>)([\w\s]*)(<.*?>)?([\w\s]*)(< *\/a>)/i", "match_up2", $new);
	echo "$new\n";
}
?>
