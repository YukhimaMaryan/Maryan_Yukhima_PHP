<?php

 
	function endings($m , $variants){
		$m0 = $m % 10;
		$m1 = $m % 100;
		
	if ($m1 >= 5 && $m1 <= 20){
		$res = $variants[0];
	}
	elseif ($m0 == 1){
	$res = $variants[1];
	}
	elseif ($m0 >= 2 && $m0 <=4){
	$res = $variants[2];
	}
	else{
	$res = $variants[0];
	}
	return $res;
	}
	
	$m = ['минут','минута','минуты'];
	
	for ($i = 0; $i < 60; $i++){
	echo $i . ' ' . endings($i, $m) . '<br>';
	}
	
	$m = ['секунд','секунда','секунды'];
	
	for ($i = 0; $i < 60; $i++){
	echo $i . ' ' . endings($i, $m) . '<br>';
	}
	
	$m = ['часов','час','часа'];
	
	for ($i = 0; $i < 24; $i++){
	echo $i . ' ' . endings($i, $m) . '<br>';
	}
	
	$m = ['дней','день','дня'];
	
	for ($i = 0; $i < 365; $i++){
	echo $i . ' ' . endings($i, $m) . '<br>';
	}
	
?>