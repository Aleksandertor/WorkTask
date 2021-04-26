<?php 

$arr = array("Мужчины" => array("Первый" => array("name" => "Иван", "age" => "20", "city" => "Барнаул"),
							"Второй" => array("name" => "Петр", "age" => "30", "city" => "Бийск"),
							"Третий" => array("name" => "Александр", "age" => "40", "city" => "Новосибирск")),
			"Женщины" => array("Первая" => array("name" => "Юлия", "age" => "25", "city" => "Екатеринбург"),
							"Вторая" => array("name" => "Мария", "age" => "35", "city" => "Москва"),
							"Третья" => array("name" => "Екатерина", "age" => "45", "city" => "Санкт-Петербург")));

$a = json_encode($arr);

file_put_contents('data.json', $a);

$file = file_get_contents('data.json');

$fileDec = json_decode($file, TRUE);

foreach ($fileDec as $v1) {
	foreach ($v1 as $key => $v2) {
		echo($v2[name]).'<br>'.($v2[age]).'<br>'.($v2[city].'<br>');
	}
}
 ?>