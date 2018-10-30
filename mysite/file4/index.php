
<?php
	
	
	// echo '<pre>';
	// print_r($_SERVER);
	// echo '</pre>';
	
	$log = date("Y-m-d H:i:s");
	$log .= '<@>' . $_SERVER['REMOTE_ADDR'];
	$log .= '<@>' . $_SERVER['PHP_SELF'];
	$log .= '<@>' . $_SERVER['HTTP_REFERER'];
	 
	file_put_contents('log.txt', "$log\n", FILE_APPEND);
	
	//file_put_contents('1.txt', "1\n2\n3", FILE_APPEND);
	

?>

<!doctype html>
<html lang ="ru">
	<head>
		<meta charset="utf-8">
		<title>1</title>
	</head>
		<body>
		<h1>Страничка</h1>
		</body>
</html>






