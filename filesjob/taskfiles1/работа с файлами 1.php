<?php 

$a = $_POST[a];

if(isset($_POST['submit'])){

	if(file_exists("$a.txt")){
	echo 'Файл уже существует';
	}
	else{
	$file = file_put_contents("$a.txt", '');
		echo 'Файл создан!';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<form action="работа с файлами 1.php" method ="POST">
			A: <input type="text" name="a"><br>
			<input type="submit" value="Отправить" name="submit">
		</form>

	</div>

</body>
</html>