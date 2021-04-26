
<?php

$arr = array(
	array('name' => 'Братство кольца', 'age' => '2001'),
	array('name' => 'Две крепости', 'age' => '2002'),
	array('name' => 'Возвращение короля', 'age' => '2003'),
	array('name' => 'Филосовский камень', 'age' => '2001'),
	array('name' => 'Реальные упыри', 'age' => '2014'));

$films = new DomDocument('1.0','utf-8');
$list = $films->appendChild($films->createElement('list'));

foreach ($arr as $v1) {
	$name = $list->appendChild($films->createElement('name'));
	$name -> appendChild($films->createTextNode("$v1[name]"));
	$age = $list->appendChild($films->createElement('age'));
	$age -> appendChild($films->createTextNode("$v1[age]"));
	}

$films->formatOutput = true;
$films->save('films.xml');

echo $films -> saveXML();
?>
