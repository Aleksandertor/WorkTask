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
require (__DIR__."\\db.php");

foreach ($_FILES as $img) {
	if (($img['tmp_name'] != '') && ($img['type'] == 'image/png')) {
		$img1 = imagecreatefrompng($img['tmp_name']);
	if (imagesx($img1) > 200 && imagesy($img1) > 200 && $img1['size'] <= 1048576) {
		$uniqid = uniqid();			
		copy($img['tmp_name'],__DIR__."\\uploads\\".$uniqid.".png");
		$url = 'http/'.$_SERVER['SERVER_NAME'].'/database2/uploads/'.$uniqid.'.png';
		$date = date('Y-n-j H:i:s');
		$upload = $db->prepare("INSERT INTO uploads(url, date) VALUES (:url, :date)");
		$upload->bindParam(':url', $url);
		$upload->bindParam(':date', $date);
		var_dump($date);
			if ($upload->execute()) {
        echo  'Успех<br>';
    } else {
        var_dump($upload->errorInfo());	
		
		}	
	}		

}
}
?>

</body>
</html>

