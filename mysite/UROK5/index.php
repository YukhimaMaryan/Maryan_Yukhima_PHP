<?php
	
	$list = scandir ('data');
	// echo '<pre>';
	// print_r($list);
	// echo '</pre>';

?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>1</title>
</head>
<body>
	<a href="add.php">Добавить статью</a>
<ul>
<?php
	foreach ($list as $fname){
		if ($fname != '.' && $fname!= '..'){
			echo "<li><a href=\"post.php?fname=$fname\">Новость $fname</a></li>";
			echo "<a href=edit.php>edit</a>";
		}
	}
	?>
	</ul>

	</body>
</html>



