<?php 
$arr = array(
array(69, -1, 52, 98, 11, 22),
array(1, -1, 55, 98, 5, 1.5, 8.7),
array(-15, -9, 10, 0, 5, 3, 0.5),
array(7, -19, 40, 0, 98, 1, 2.2),
array('two', 'eight', 'four', 'six')
);

$arr2 = array();

foreach ($arr as $value) {
	foreach ($value as $per) {
		if (is_numeric($per)) {
			$arr2[strval($per)] = $per;
		}
		else {switch ($per) {
			case 'two':
			$arr2[2] = $per;
			break;
			case 'four':
			$arr2[4] = $per;
			break;
			case 'six':
			$arr2[6] = $per;
			break;
			case 'eight':
			$arr2[8] = $per;
			break;
			}
		}
	}
}

ksort($arr2);

$arrAll = array_values($arr2);


echo'<pre>';
print_r($arrAll);
echo'</pre>';