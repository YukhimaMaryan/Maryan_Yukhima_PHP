<?php
	include_once('functions.php');

	$fname = $_GET['fname'] ?? null;
	
	if($fname === null){
		echo 'Ошибка 404, не передано название!';
	}
	
	
	elseif(!check_title($fname)){
	echo 'Кривой параметр';
	}
	elseif(!file_exists('data/'.$fname)){
	echo 'Ошибка 404. Нет такой статьи';
	}
	else{
	$content = file_get_contents ('data/' . $fname);
	}
	
	
 if(count($_POST) > 0){
	 $title = trim($_POST['title']);
	 $content = trim($_POST['content']);

	
	 
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
 
Введите новое имя:<br>
<input type= "text" name= "title" value="<?php echo $title;?>"></br> 
 
Введите новый текст:<br>
<textarea name= "content"><?php echo $content;?></textarea></br> 
 
<input type= "submit" value= "Сохранить"> 
</form>
	<div>
	<?php echo $msg; ?>
	
	</div>
	</body>
</html>
