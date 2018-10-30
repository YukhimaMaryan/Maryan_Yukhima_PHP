
<?php
	
	$a1 = file_get_contents('1.txt');
	var_dump($a1);
	
	$a2 = file('1.txt');
	
	
	echo '<pre>';
	print_r($a2);
	echo '</pre>';
	
	//file_put_contents('1.txt', "1\n2\n3");
	file_put_contents('1.txt', "1\n2\n3", FILE_APPEND);
	
	
?>








