<?php
		
		
		$h = date ('H');
	
		if ($h<=5){
			$img = 'night';
		}
		elseif ($h<=11){
			$img = 'morning';
		}
		elseif ($h<=17){
			$img = 'day';
		}
		else {
			$img = 'evening';
		}			
			
		//$img = (INT)($h / 6);
		//$img =($h / 6) - (($h % 6)/6);
?>
<!doctype html>
<html>
	<head>
		<title>12345</title>
		<style>
		body{
			background: url(img/<?php echo $img;?>.jpg);
			background-size: cover;
			color: #ff0;
		}
		</style>
	</head>
		<body>
		<h1><?php echo $h;?></h1>
		<p>fFSAFDF SFEDFSE SEFSSEF AESFFSEFEF SFEFSEFSE</p>
		<p>fFSAFDF SFEDFSE SEFSSEF AESFFSEFEF SFEFSEFSE</p>
		<p>fFSAFDF SFEDFSE SEFSSEF AESFFSEFEF SFEFSEFSE</p>
		<p>fFSAFDF SFEDFSE SEFSSEF AESFFSEFEF SFEFSEFSE</p>
		<p>fFSAFDF SFEDFSE SEFSSEF AESFFSEFEF SFEFSEFSE</p>
		<p>fFSAFDF SFEDFSE SEFSSEF AESFFSEFEF SFEFSEFSE</p>
		<p>fFSAFDF SFEDFSE SEFSSEF AESFFSEFEF SFEFSEFSE</p>
		<p>fFSAFDF SFEDFSE SEFSSEF AESFFSEFEF SFEFSEFSE</p>
		<p>fFSAFDF SFEDFSE SEFSSEF AESFFSEFEF SFEFSEFSE</p>
		</body>
</html>