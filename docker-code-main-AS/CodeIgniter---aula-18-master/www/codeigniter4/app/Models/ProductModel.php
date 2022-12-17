<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'idProduct';
    protected $allowedFields = [
        'name', 'price', 'description', 'idCategory'
    ];
    function getClientsFor($search) {
        return $this -> asArray() -> like('idProduct', $search)
        -> orLike('name', $search)
        -> orLike('idCategory', $search)
        -> findAll();
    }
}
