<?php 

function logerror($err) {
	$path = dirname(__DIR__)."\logs";

	$myfile = fopen("$path\log.txt", "a") or die("Unable to open file!");

	$txt = $err."\n";
	fwrite($myfile, $txt);

	fclose($myfile);
}

?>