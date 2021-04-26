<?php

function fun($b, $arr, $a = null){

	if (!is_array($arr) || (count($arr) < 10)) {
		return 'массив не верный';
	}
	if (empty($a)) {
		echo "аргумент а не обязателен, и справляется с этим";
	}
	$sum = (array_sum($arr) / count($arr));

echo $a."<br>";
echo $b."<br>";
echo $sum."<br>";

}


$numeric = array(10,15,18,23,4,18,15,16,23,42,15,18,9,99,62,14);


$b = 'аргумент b обязателен и работает';


$sum = fun($b, $numeric, $blah);

echo $sum;