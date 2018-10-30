<?php
		$m = date ('i');
		$m0 = $m % 10;
		
		function endings($m){
	if ($m >= 5 && $m <= 20){
		$res = 'минут';
	}
	elseif ($m0 == 1){
	$res = 'минута';
	}
	elseif ($m0 >= 2 && $m0 <=4){
	$res = 'минуты';
	}
	else{
	$res = 'минут' ;
	}
	return $res;
		}
	echo $m . ' ' . endings($m);
	


?>