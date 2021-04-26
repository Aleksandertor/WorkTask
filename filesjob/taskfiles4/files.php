<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form  enctype="multipart/form-data" method="post">
	<input type="file" name="file1"><br>
	<input type="file" name="file2"><br>
	<input type="file" name="file3">
	<input type="submit" value="Отправить" name="submit" accept="image/png"> 
	</form>

<?php

foreach ($_FILES as $img) {
	if (($img['tmp_name'] != '') && ($img['type'] == 'image/png')) {
		$img1 = imagecreatefrompng($img['tmp_name']);
	if (imagesx($img1) > 200 && imagesy($img1) > 200 && $img1['size'] <= 1048576) {
		copy($img['tmp_name'],__DIR__."\\uploads\\".uniqid().".png");
		}
	}
}

?>

</body>
</html>