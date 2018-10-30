<?php

	// echo '<pre>';
	// print_r ($_GET);
	// echo '</pre>';
	
	
	// if (!isset ($_GET['id'])){
	// exit ('Нет id - 404');
	
	// }
	
	$list = scandir ('data');
	echo '<pre>';
	print_r($list);
	echo '</pre>';

?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>1</title>
</head>
<body>

<?php
	foreach ($files as $file){
		if ($id != '.' && $id!= '..'){
			echo "<li><a href=\"news.php?id=$id\">Новость $id</a></li>";
		}
	}
?>
</body>
</html>



