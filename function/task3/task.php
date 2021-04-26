<?php
$num = function ($result) use (&$num){
    if($result <= 1)
        return 1; 
    	else return $result * $num($result - 1);
	};

echo $num(5);