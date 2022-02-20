<?php 

	/*$file = fopen('user.txt', 'r');
	$string = fread($file, filesize('user.txt'));
	echo $string;
	fclose($file);*/

	/*$file = fopen('user.txt', 'w');
	$content = "AIUB";
	fwrite($file, $content);
	fclose($file);
	echo "done!";*/

	$file = fopen('user.txt', 'a');
	$content = "another AIUB\r\n";
	fwrite($file, $content);
	fclose($file);
	echo "done!";

?>