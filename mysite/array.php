<?php
	$capitals = [
	'Россия' => ['Москва', 'Санкт-Петербург' , 'Новосибирск' ], 
	'Франция' =>['Париж' , 'Марсель' , 'Лион' , 'Ницца' ] , 
	'Англия' =>['Лондон' , 'Ливерпуль' , 'Бирмингем' ]
	];
	
	echo '<ul>';
	
	foreach ($capitals as $country => $town){
		echo '<li>';

		echo $country;
		
		echo '<ol>';

		foreach ($town as $towns) 
		{
		echo  "<li>$towns</li>";
		}
		
		echo '</ol></li>';
	}
	echo '</ul>';