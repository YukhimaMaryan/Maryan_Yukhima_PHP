<?php
		$h = date ('H');
		$img = $h % 8;
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>1</title>
		<style>
		.back {
			position: fixed;
			width 100%;
			top: 0;
			left: 0;
			z-index: -1;
		}
		</style>
	</head>
		<body>
		<img src="img/<?php echo $img;?>.jpg" class="back">
		<h1>Site,<?php echo $h;?></h1>
		</body>
</html>