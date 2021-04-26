<?php
function fun($str = "Скороговорочка"){

$str = mb_strtolower($str);
$str = str_replace('грека', 'жека', $str);

return $str;

}