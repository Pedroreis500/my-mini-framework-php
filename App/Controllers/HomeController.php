<?php

namespace App\Controllers;

// recursos do mini framework
use App\Config\Controller as BaseController;
use App\Config\ModelContainer;

// os models
use App\Models\Product;


class HomeController extends BaseController{

	public function home() 
	{
		$produto = ModelContainer::getModel('Product');
		$produtos = $array_produtos = $produto->getProducts();
		$this->view->dados = $array_produtos;
		$this->view('home', 'layout1');
	}





}


?>