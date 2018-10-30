<?php
	include_once('functions.php');

 if(count($_POST) > 0){
	 $title = trim($_POST['title']);
	 $content = trim($_POST['content']);

	 /*поля не пустие
	 имя файла состои только из цифр
	 файла с таким именем еще нет
	 if -elseif-elseif-else */
	 
	 if($title == '' || $content == '') {
		$msg = 'поле  пустое';
		}
		elseif (!check_title($title)){
		$msg = 'имя файла состои только из цифр';
		}
		
		elseif (file_exists("data/$title")){
		$msg = 'файл с таким именем уже есть';
		}
		else{
	 
	 file_put_contents ("data/$title", $content);
	 header ('Location: index.php');
	 exit();
		}
 }
 
	else{
		
	$msg = '';
	}	
	
?>
<!doctype html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>1</title>
	</head> 
	<body>
	<form  method= "POST"> 
 
Имя:<br>
<input type= "text" name= "title" value="<?php echo $title;?>"></br> 
 
Текст:<br>
<textarea name= "content"><?php echo $content;?></textarea></br> 
 
<input type= "submit" value= "Сохранить"> 
</form>
	<div>
	<?php echo $msg; ?>
	
	</div>
	</body>
</html>

