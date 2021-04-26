<?php
require (__DIR__."\\db.php");

$uploads = $db->query('SELECT * FROM uploads');

$img = $uploads->fetchAll();

$count = count($img);


for ($i=0; $i <= $count; $i++) {
	echo '<pre>';
	echo $img[0]['url'];
	echo '<img src=$img[0][url] alt="" width="300" height="600">';
	echo '</pre>';
}
