<?php

	
	function area ($r){
		return 3.14 * $r * $r;
	}
	//echo area (5) - area (3);
	$r1 = area (5);
	$r2 = area (3);
	echo "$r1 - $r2 = " . ($r1 - $r2);
	


?>