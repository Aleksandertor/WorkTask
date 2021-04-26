<?php

$day = 7;

switch ($day) {
	case '1':
	case '2':
	case '3':
	case '4':
	case '5':
		echo 'Это рабочий день';
		break;
	case '6':
		echo 'Укороченый день';
		break;
	case '7':
		echo 'Ура! Выходной!';
		break;
}