<?php

$auto = array(array('brand' => 'honda', 'model' => 'stepwgn', 'color' => 'grey'),
		array('brand' => 'toyota', 'model' => 'camry', 'color' => 'black'),
		array('brand' => 'nissan', 'model' => 'skyline', 'color' => 'white'));

foreach ($auto as $v1) {
echo $v1['brand'].'<br>'.$v1['model'].'<br>'.$v1['color'].'<br>';
}

for ($i = 0; $i< count($auto); $i++) {
echo $auto[$i]['brand'].'<br>'.$auto[$i]['model'].'<br>'.$auto[$i]['color'].'<br>';
}