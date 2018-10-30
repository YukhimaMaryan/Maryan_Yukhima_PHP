<?php
	
	$lines = file('log.txt');
	
	// $k = $lines[1];
	// echo $k;
	
	// $log = explode('<@>', $k);
	
	// echo  '<pre>';
	// print_r($log);
	// echo  '</pre>';
	echo '<table>';
	
	foreach ($lines as $line){
		
		echo '<tr>';
		$log = explode('<@>', $line);
		
		foreach ($log as $item){
			echo "<td>$item</td>";
		}
		
		echo '</tr>';
	
	}
	
	echo '</table>';
?>
<style>
	table, td{
		border: 1px solid black;
		padding: 10 px;
	}
</style>