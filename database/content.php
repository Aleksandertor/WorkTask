<?php
require (__DIR__."\\vendor\\autoload.php");
require (__DIR__."\\db.php");

$faker = Faker\Factory::create('ru_RU');

$theValues = $db->prepare("INSERT INTO news(tittle, discription, text, date) VALUES (:tittle, :discription, :text, :date)");

$theTitle = $faker->word;
$theDes = $faker->word;
$theText = $faker->realText;
$theDate = $faker->date;

$theValues->bindParam(':tittle', $theTitle);
$theValues->bindParam(':discription', $theDes);
$theValues->bindParam(':text', $theText);
$theValues->bindParam(':date', $theDate);

for ($i = 1; $i <= 200; $i++){
	$theTitle = $faker->word;
	$theDes = $faker->word;
	$theText = $faker->realText;
	$theDate = $faker->date;
	if ($theValues->execute()) {
        echo  'Успех<br>';
    } else {
        var_dump($theValues->errorInfo());
    };
};
