<?php

require (__DIR__."\\db.php");

$news = $db->query('SELECT * FROM news');

$text = $news->fetchAll();

echo $text[$_GET['id']]['tittle'].'<br>'.$text[$_GET['id']]['text'].'<br>'.$text[$_GET['id']]['date'];