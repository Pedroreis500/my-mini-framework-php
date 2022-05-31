<?php

namespace App\Config;

use App\Config\Database;

/**
* Retorna uma nova instância de conexão de banco de dados e seu modelo 
*/
Class ModelContainer
{
	/**
	  * @param  string  $model  O modelo que será utilizado nos controladores
	 */
	public static function getModel($model)
	{
		$class = "App\\Models\\".ucfirst($model);
		$conn = Database::connect();
		return new $class($conn);
	}
}
