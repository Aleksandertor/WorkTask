<?php 

$arr = array();
$sum = 0;

for ($i=0; $i <100 ; $i++) { 
	$arr[$i] = rand(1,10); // ограничение рандома для простоты восприятия
}

$str = implode(' ', $arr);

file_put_contents('100 чисел.csv', $str);

$file = file('100 чисел.csv');
$fileArr = explode(" ", $file[0]);

foreach ($fileArr as $value) {
	$sum += $value;
}
echo $sum;

 ?>