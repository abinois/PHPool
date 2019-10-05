#!/usr/bin/php
<?php
function ft_split($str)
{
	$tab = explode(" ", preg_replace('/\\s+/', " ", trim($str)));
	return($tab);
}
$bigtab = array();
foreach ($argv as $index => $arg)
	if ($index)
	{
		$tab = ft_split($arg);
		$bigtab = array_merge($bigtab, $tab);
	}
sort($bigtab);
foreach ($bigtab as $arg)
	echo "$arg\n";
?>
