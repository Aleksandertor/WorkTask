<?php

$arr = array(7, 58, 'Вишня', 1.7, 'Апельсин', 36, 'Картофель', 'Яблоко', 'Киви', 66, 'Капуста' );

$arrNum = array();
$arrStr = array();
$arrVag = array();

array_push($arr, 77, 'Банан', 13);

foreach ($arr as $per) {
	if (is_numeric($per)) {
		$arrNum[] = $per;
		}
	}
$arrStr = array_diff($arr, $arrNum);

foreach ($arrStr as $vagetable) {
	switch ($vagetable) {
		case 'Картофель':
			$arrVag[] = $vagetable;
			break;
		case 'Капуста':
			$arrVag[] = $vagetable;
			break;
	}
}

$arrFruts = array_diff($arrStr, $arrVag);

rsort($arrNum);
sort($arrFruts);

echo '<pre>';
print_r($arrNum);
print_r($arrFruts);
echo '/<pre>';