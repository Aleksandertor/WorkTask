<?php
if (isset($_POST)){
  if (empty($_POST['myArr'][0]) || empty($_POST['myArr'][1])) {
    echo 'Пожалуйста, заполните обязательные поля';
    }
    else {
    	$userName = $_POST['myArr'][0];
    	$userMail = $_POST['myArr'][1];
    	$userPhone = $_POST['myArr'][2];
    	$userMessage = $_POST['myArr'][3];
    	echo mail('aleksandertor@mail.ru', 'Тестовое', $userName.' '.$userMail.' '.$userPhone.' '.$userMessage);
    }
}

