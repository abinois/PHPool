#!/usr/bin/php
<?php
$source = file_get_contents($argv[1]);
preg_match_all("/<img.+src=\"(.*?)\"/", $source, $matches);
$host = parse_url($argv[1], PHP_URL_HOST);
if (!file_exists($host))
	mkdir($host);
foreach ($matches[1] as $key => $match)
{
	if (!strstr($match, $argv[1]))
		$match = $match[0] != '/' ? $argv[1]."/".$match : $argv[1].$match;
	$file_name = strrchr($match, '/');
	if (file_exists($host.$file_name))
		$file_name = $file_name."($key)";
	file_put_contents($host.$file_name, file_get_contents($match));
}
?>
