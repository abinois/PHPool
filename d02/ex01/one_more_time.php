#!/usr/bin/php
<?php
function get_month($month)
{
	switch ($month)
	{
		case "/[Jj]anvier/":
			return (1);
		case "/[Ff][eé]vrier/":
			return (2);
		case "/[Mm]ars/":
			return (3);
		case "/[Aa]vril/":
			return (4);
		case "/[Mm]ai/":
			return (5);
		case "/[Jj]uin/":
			return (6);
		case "/[Jj]uillet/":
			return (7);
		case "/[Aa]o[uû]t/":
			return (8);
		case "/[Ss]eptembre/":
			return (9);
		case "/[Oo]ctobre/":
			return (10);
		case "/[Nn]ovembre/":
			return (11);
		case "/[Dd][eé]cembre/":
			return (12);
	}
}
if ($argv > 1)
{
	if (!(preg_match("/^([Ll]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche) {1}(0?[1-9]|[1-2][0-9]|3[0-1]) {1}([Jj]anvier|[Ff][eé]vrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]o[uû]t|[Oo]ctobre|(([Ss]ept|[Nn]ov|[Dd][eé]c)embre)) {1}[0-9]{4} {1}([0-1][0-9]|2[0-4]):([0-5][0-9]|60):([0-5][0-9]|60)$/", $argv[1])))
		echo "Wrong Format\n";
	else
	{
		$tab = explode(" ", $argv[1]);
		$time = explode(":", $tab[4]);
		$month = get_month($tab[2]);
		echo mktime($time[0], $time[1], $time[2], $month, $tab[1], $tab[3])."\n";
	}
}
?>
