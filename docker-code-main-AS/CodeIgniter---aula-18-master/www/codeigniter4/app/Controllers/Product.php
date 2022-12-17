<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Product extends BaseController
{

    public function listProducts()
    {
        $ProductModel = new ProductModel();
        $data = [
            'arrayProducts' => $ProductModel->findall()
        ];
        echo view('templates/header');
        echo view('client/listProducts', $data);
        echo view('templates/footer');
    }
}
