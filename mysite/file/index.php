
<?php

	$f = fopen('1.txt', 'r');
	
	// while (!feof($f)){
	// $str1 = fread($f, 1);
	
	// echo $str1;
	// }
	
	
	$lenght = filesize('1.txt');
	$str1 = fread($f, $lenght);
	echo nl2br($str1);
	fclose($f);
	
	
	function my_file_get_contents($path){
	$f = fopen($path, 'r');
	$lenght = filesize('1.txt');
	$str = fread($f, $lenght);
	fclose($f);
	return $str;
	}
	
	echo my_file_get_contents('1.txt');
	
	
	
?>







