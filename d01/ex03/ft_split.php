#!/usr/bin/php
<?php
function ft_split($str)
{
	$tab = explode(" ", trim($str));
	return(sort($tab));
}
?>
