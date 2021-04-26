<?php

$a = 10;
if ($a = 10)
	require 'functions.php';  // выбран require, чтобы не вывелось последнее echo


if(function_exists('fun'))
	echo fun(), " И функция существует! ";

echo 'И файл точно был верный!';