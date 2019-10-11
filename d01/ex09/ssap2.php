#!/usr/bin/php
<?php
function ft_split($str)
{
	$tab = explode(" ", preg_replace('/\s+/', " ", trim($str)));
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
if ($alpha)
{
	sort($alpha, SORT_STRING | SORT_FLAG_CASE);
	foreach ($alpha as $elem)
		echo "$elem\n";
}
if ($num)
{
	sort($num);
	foreach ($num as $elem)
		echo "$elem\n";
}
if ($other)
{
	sort($other);
	foreach ($other as $elem)
		echo "$elem\n";
}
?>
