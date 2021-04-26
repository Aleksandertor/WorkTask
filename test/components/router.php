<?php

class router
{
	private $routes;

	public function __construct()
	{
		$RoutesPath = ROOT.'/config/routes.php';
		$this -> routes = include($RoutesPath);

	}
	// возвращает request string

	private function getURI()

	{

		if(!empty($_SERVER['REQUEST_URI'])) 
		{
			return trim ($_SERVER['REQUEST_URI'], '/');
		}
	}

	public function run()
	{

	// получить строку запроса
	$uri = $this -> getURI();
	echo $uri;

	//проверить наличие такого запроса в routes.php

	foreach ($this -> routes as $uriPattern => $path) {
		# code...
	}
	//если есть совпадения, определить, какой контроллер и экшн обрабатывают запрос

	//подключить файл класса контроллера

	//создать объект, вызвать метод (то есть экшн)

	}

}


