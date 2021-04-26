<?php 

$rows = 10;
$cols = 10;

echo '<table border="5">';

for ($tr=1; $tr<=$rows; $tr++){ 
    echo '<tr>';

for ($td=1; $td<=$cols; $td++){
	echo '<td>'.
	
	$tr*$td;
	}
}

echo '</table>';
