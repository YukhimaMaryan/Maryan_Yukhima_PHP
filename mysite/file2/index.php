
<?php
	
	
	/*
	
	r  read - прочитать
	r+ read & write
	w  write - создать и записать
	w+  write & read 
	a	append - добавить в файл
	a+ append & read
	*/
	
	
	$app = date("Y-m-d H:i:s") . "!!!Dima!!!891111111\n";
	$f = fopen('apps.txt', 'w');
	fwrite ($f, $app);
	fclose($f);
	
	
?>







