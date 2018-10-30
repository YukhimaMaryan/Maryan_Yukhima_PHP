<?php
		$a = mt_rand (-10, 10);
		$b = mt_rand (-10, 10);
		// И - &&
		// ИЛИ -||
		// НЕ - !
		/*if ($a > 0 || $b > 0) {
		if ($a > $b) {
			echo $a;
		}
		else {
			echo $b;
		}
	}
		else {
			echo 'сам руку и суй';
		}
		*/
		if ($a <= 0  && $b <= 0){
			echo 'сам руку и суй';
		}
		elseif ($a > $b) {
			echo $a;
		}
		else {
			echo $b;
		}
		
?>