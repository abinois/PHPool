#!/usr/bin/php
<?php
foreach ($argv as $index => $arg)
	if ($index > 1)
	{
		$val = explode(':', trim($arg));
		if ($val[0] == $argv[1])
			echo "$val[1]\n";
	}
?>
