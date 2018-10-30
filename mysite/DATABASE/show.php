<?php


	$db  = new PDO ('mysql:host=localhost; dbname=site', 'root', '');
		 $db->exec("SET NAMES UTF8");
		 $query = $db->prepare("SELECT * FROM apps");
		 $query->execute();
		 
		 
	$apps = $query->fetchALL(PDO::FETCH_ASSOC);
	
	
	echo '<table>';
	foreach ($apps as $app){
		
		echo '<tr>';
		
		echo '<td>' . $app['dt'] . '</td>';
		echo '<td>' . $app['name'] . '</td>';
		echo '<td>' . $app['phone'] . '</td>';
		
	echo '</tr>';
	}
	echo '</table>';
?>
<style>
	table, td{
		border: 1px solid black;
		border-collapse: collapse;
		padding: 5px;
	}
</style>