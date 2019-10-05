#!/usr/bin/php
<?php
function ft_split($str)
{
	$tab = explode(" ", preg_replace('/\\s+/', " ", trim($str)));
	return(sort($tab));
}
$tab = ft_split("   toooo oooooo       o yu ADFGG m      ljmjm rtyut qsx  fd WWW    ");
foreach ($tab as $case)
	echo "$case\n";
?>
