#!/usr/bin/php
<?php
function match_up($tab)
{
	//print_r($tab);
	$str = $tab[1].strtoupper($tab[2]).$tab[3];
	return ($str);
}
function match_up2($tab)
{
	//print_r($tab);
	$str = $tab[1].strtoupper($tab[2]).$tab[3].strtoupper($tab[4]).$tab[5];
	return ($str);
}
if ($argc > 1)
{
	$file = file_get_contents($argv[1]);
	$strup = preg_replace_callback("/(<a.*title=\"{0,1})([\\w\\s]+)(\"{0,1}>.*\/a>)/i", "match_up", $file);
	$strup = preg_replace_callback("/(<a.*?>)(.*)(<.+>)(.*)(<\/a>)/i", "match_up2", $strup);
	$strup = preg_replace_callback("/(<a.*?>)([\\w\\s]+)(<\/a>)/i", "match_up", $strup);
	echo "$strup\n";
}
?>
