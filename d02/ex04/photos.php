#!/usr/bin/php
<?php
if ($argc > 1)
{
	$curl_session = curl_init(); // inutile ?
	$source = file_get_contents($argv[1]);
	echo $source;
	preg_match_all("/<img.+src=\".*?\"/", $source, $matches);
	curl_close($curl_session); // inutile ?
	$host = parse_url($argv[1], PHP_URL_HOST);
	if (!file_exists($host))
		mkdir($host);
}
?>
