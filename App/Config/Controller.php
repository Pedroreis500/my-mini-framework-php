<?php

namespace App\Config;

/**
* Esta classe é responsável por chamar uma determinada view.
* Todo controller criado herdará os métodos desta classe.
*/
abstract Class Controller
{
    
	protected $view;

	public function __construct()
     {
		$this->view = new \stdClass();
	}

  /**
  * Este método renderiza uma determinada view e seu respectivo layout.
  * @param  string  $view  A view que será chamada
  * @param  string  $layout O layout que será chamado
  */
	protected function view($view, $layout) {
		$this->view->page = $view;

		if(file_exists("C:\Users\pedro\Documents\miniframework\App/Views/layouts/".$layout.".php")) {
			require_once "C:\Users\pedro\Documents\miniframework\App/Views/layouts/".$layout.".php";
		} else {
			$this->content();
		}
	}


  /**
  * Este método possui a lógica da rendarização da view.
  */
  	protected function content()
	{
	$classAtual = get_class($this);
	$classAtual = str_replace('App\\Controllers\\', '', $classAtual);
	$classAtual = strtolower(str_replace('Controller', '', $classAtual));
	require_once "C:\Users\pedro\Documents\miniframework\App/Views/".$classAtual."/".$this->view->page.".php";
	}
	
}
