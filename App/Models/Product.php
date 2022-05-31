<?php

namespace App\Models;

use App\Config\Model as BaseModel;
use PDO;

Class Product extends BaseModel
{

    public function getProducts() {
		
		$query = "select id, descricao, preco from tb_produtos";
		return $this->conn->query($query)->fetchAll();
	}

}
