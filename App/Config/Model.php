<?php

namespace App\Config;
use PDO;

/**
 * Abstrai comportamentos comuns a todos os models a fim de evitar códigos repetidos.
 */
abstract Class Model
{
    protected $conn;

    public function __construct(PDO $conn) {
        $this->conn = $conn;
    }
}
