#!/usr/bin/php
<?php
function ft_split($str)
{
	$tab = explode(" ", preg_replace('/\\s+/', " ", trim($str)));
	return($tab);
}
foreach ($argv as $index => $tab)
	if ($index)
	{
		$minitab = ft_split($tab);
		foreach ($minitab as $arg)
		{
			if (is_numeric($arg))
				$num[] = $arg;
			elseif (ctype_alpha($arg))
				$alpha[] = $arg;
			else
				$other[] = $arg;
		}
	}
sort($num);
sort($alpha, SORT_STRING | SORT_FLAG_CASE);
sort($other);
foreach ($alpha as $elem)
	echo "$elem\n";
foreach ($num as $elem)
	echo "$elem\n";
foreach ($other as $elem)
	echo "$elem\n";
?>
