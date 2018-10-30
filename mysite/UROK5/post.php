<?php
	include_once('functions.php');

	$fname = $_GET['fname'] ?? null;
	
	if($fname === null){
		echo 'Ошибка 404, не передано название!';
	}
	/*
	... проверки файл на наявність в папці і 404
	имя файлаа не з цифр
	
	*/
	
	elseif(!check_title($fname)){
	echo 'Кривой параметр';
	}
	elseif(!file_exists('data/'.$fname)){
	echo 'Ошибка 404. Нет такой статьи';
	}
	else{
	$content = file_get_contents ('data/' . $fname);
	}
?>
шапка 
<hr>
<?php
	echo nl2br ($content);
?>	
<hr>
подвал
