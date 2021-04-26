<?php 

//общие настройки

ini_set ('display_errors', 1);
error_reporting (E_ALL);

//подключение файлов системы
define ('ROOT', dirname(__file__));
require_once(ROOT.'/components/router.php');

//установка соединения с БД

//вызов роутер
$router = new router();
$router ->run();