

<?php

		
		if (count ($_POST) > 0){
		$name=trim($_POST['name']); 
		$phone=trim($_POST['phone']); 
		$dt = date ("Y-m-d H:i:s");
		
		if(strlen ($name) < 2){
		$msg = 'Нужно имя побольше :)';
		}
		elseif (strlen($phone) < 7){
		$msg = 'Мы не умеем звонить на номер короче 7 цифр!';
		}
		elseif (!is_numeric($phone)){
		$msg = 'В поле телефон только цифры';
		}
		else{		
file_put_contents('apps.txt',"$name-|-$phone-|-$dt\n", FILE_APPEND);
	$msg = 'Ваша заявка принята';
		
		}
	}
 else {
	 $name = '';
	 $phone = '';
 $msg = 'Привет! Заполни формы и нажми кнопку купить';
	}
 
?>


 
<form  method= "POST"> 
 
<p>Имя: </p><p> <input type= "text" name= "name" value="<?php echo $name;?>"></p> 
 
<p>phone: </p><p> <input type= "text" name= "phone" value="<?php echo $phone;?>"></p> 
 
 
<input type= "submit" value= "Отправить"> 
</form>
<?php
	echo $msg;
?>

