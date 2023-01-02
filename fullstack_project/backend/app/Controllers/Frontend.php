<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductsModel;
use App\Models\UsersModel;
use CodeIgniter\API\ResponseTrait;

class Frontend extends BaseController
{
    use ResponseTrait;
    public function ProductsList()
    {
        $model = new ProductsModel();
        $products = $model->orderBy('product_name', "ASC")->findAll();
        return $this->respond($products);
    }
    public function UsersList()
    {
        $model = new UsersModel();
        $users = $model->orderBy('name', "ASC")->findAll();
        return $this->respond($users);
    }
}
