<?php

namespace App\Routes;

/**
* Esta classe é responsável por obter da URL o controller, método (ação) e os parâmetros
* e verificar a existência dos mesmo. Contém a lógica que será herdada para a classe Route
*/
abstract Class RouteBoot
{
    private $routes;

    abstract protected function initRoutes();

	/**
	 * inicia o array de rotas
	 */
	public function __construct() 
	{
		$this->initRoutes();
	    $this->run($this->getUrl());
	}


    
	/**
	 * retorna um array das rotas contendo os dados definidos em initRoutes() 
	 */
	public function getRoutes()
	{
		return $this->routes;
	}


	public function setRoutes(array $routes)
	{
		$this->routes = $routes;
	}

    /**
	 * Dada determinada rota(url) acessada pelo usuário, este método cria e instancia uma classe baseada no controller e dispara sua action dinamicamente  
	 */
	protected function run($url) // pode ser herdado
	{
		foreach ($this->getRoutes() as $path => $route)
		{
			if ($url == $route['route']) 
			{ // se a rota existe
				$class = "App\\Controllers\\".ucfirst($route['controller']); // monta o nome da classe dinamicamente
				$controller = new $class();
				$action = $route['action'];
				$controller->$action();
			}
		
		}
    }

	/**
	 * Retorna o path da URL acessado pelo usuario
	 */
    protected function getUrl() 
	{
		return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	}


}