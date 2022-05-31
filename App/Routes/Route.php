<?php

namespace App\Routes;
use App\Routes\RouteBoot;

class Route extends RouteBoot
{
	public function initRoutes() 
	{

		$routes['home'] = array(
			'route' => '/home',
			'controller' => 'HomeController',
			'action' => 'home'
		);

		$routes['teste'] = array(
			'route' => '/teste',
			'controller' => 'IndexController',
			'action' => 'teste'
		);
		$this->setRoutes($routes);
	}
	
}

?>