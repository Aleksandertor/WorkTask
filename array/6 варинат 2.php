<?php

$name = 'Александр';
$age = '26';
$city = 'Барнаул';

$arr = array('name' => $name, 'age' => $age, 'city' => $city);

$a = implode(', ', $arr);
echo $a;
