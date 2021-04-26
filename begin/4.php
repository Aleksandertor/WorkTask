<?php

$a = '1K';


if (stristr($a, g)) { 
	$b = str_replace(g, '', $a);
	$all = $b*1024*1024*1024;
	echo $all;
}elseif (stristr($a, m)) { 
	$b = str_replace(m, '', $a);
	$all = $b*1024*1024;
	echo $all;
}elseif (stristr($a, k)) { 
	$b = str_replace(k, '', $a);
	$all = $b*1024;
	echo $all;
}else {
	echo $a;
}
