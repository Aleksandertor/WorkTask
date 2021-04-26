<?php 

require (__DIR__."\\db.php");

$news = $db->query('SELECT * FROM news');

$text = $news->fetchAll();

$firstPosition = 0;

if (!$_GET['count']) {
	$count = 20;
} else {
	$count = $_GET['count'];
}

if (!$_GET['page'] || $_GET['page'] == 1) {
	$firstPosition = 0;
} else {
	$firstPosition = ($_GET['page'] - 1) * $count;
}

echo '<pre>';
for ($i=0; $i < $count; $i++) { 
	echo '<a href="/new.php?id='.($firstPosition + $i).'">'.$text[$firstPosition + $i]['tittle'].'</a><br>';
}
echo '</pre>';

$countPages = count($text) / $count;

$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];

if ($_GET['page'] && $_GET['page'] <> 1) {
	echo '<a href = "'.$url.'?page=1'.(($_GET['count']) ? '&count='.$_GET['count'] : '').'">'.'Начало'.'</a> ';
	echo '<a href = "'.$url.'?page='.($_GET['page'] - 1).(($_GET['count']) ? '&count='.$_GET['count'] : '').'">'.'Назад'.'</a> ';
}

for ($i=1; $i <= $countPages; $i++) { 
	echo '<a href = "'.$url.'?page='.$i.(($_GET['count']) ? '&count='.$_GET['count'] : '').'">'.$i.'</a> ';

}

if ($_GET['page'] <> $countPages) {
	echo '<a href = "'.$url.'?page='.($_GET['page'] + 1).(($_GET['count']) ? '&count='.$_GET['count'] : '').'">'.'Вперед'.'</a> ';
	echo '<a href = "'.$url.'?page='.$countPages.(($_GET['count']) ? '&count='.$_GET['count'] : '').'">'.'Конец'.'</a><br> ';
}

echo '<a href = "'.$url.'?count=10">'.'10'.'</a> ';
echo '<a href = "'.$url.'?count=20">'.'20'.'</a> ';
echo '<a href = "'.$url.'?count=50">'.'50'.'</a> ';
echo '<a href = "'.$url.'?count=100">'.'100'.'</a> ';
echo '<a href = "'.$url.'?count='.count($text).'">'.'Все'.'</a> ';
