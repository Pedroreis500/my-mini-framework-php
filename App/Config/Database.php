<?php

namespace App\Config;

use PDO;
use PDOException;

/**
 * Realiza a conexão com o banco de dados MySQL e o PHP
 */
Class Database
{
    public static function connect()
    {
        try {
            $conn = new PDO("mysql:host=localhost;dbname=miniFramework_db",
            "root", "pedro123@"
        );
        return $conn;
       } catch (PDOException $e) {
			echo '<p>'.$e->getMessage().'</p>'; //pode-se tratar o erro de alguma outra forma
		}
    }
}
