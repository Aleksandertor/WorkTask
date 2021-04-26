<?php
function fun()
{
    $num = func_num_args();
    echo $num."</br>";
    $args = func_get_args();
    for ($i = 0; $i < $num; $i++) {
        echo "$args[$i] ";
    }
}

fun(4,8,15,16,23,42);