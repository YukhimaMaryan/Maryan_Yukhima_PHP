<?php

	// echo '<pre>';
	// print_r ($_GET);
	// echo '</pre>';
	
	
	
	
	// if (!isset ($_GET['id'])){
	// exit ('Нет id - 404');
	
	// }
	
	$id = $_GET['id'];
	$text = file_get_contents("data/$id");
	


?>
Шапка 
<hr>
<?php
	$files = scandir ('data');
	
	foreach ($files as $file){
	if (is_file('data/' . $file)){
	
	echo "<a href=\"news.php?id=$file\">Новость $file</a>";
		}
	}

	
?>
<hr>
<?php

echo nl2br($text);



?>
<hr>
Подвал


