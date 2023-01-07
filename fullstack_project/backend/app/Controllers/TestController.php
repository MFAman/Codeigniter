<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductsModel;

class TestController extends BaseController
{
    public function index()
    {
        // $parser = \Config\Services::parser();
        $data['page_title'] =  "Home Page";
        return view("pages/home_page");
        // return $parser->setData($data)->render('pages/home_page');
    }
    public function about()
    {
        return view("pages/about_page");
    }

    public function productList()
    {
        $model = new ProductsModel();
        $data = [
            'products' => $model->paginate(5, 'group1'),
            'pager' => $model->pager,
        ];
        return view('pages/list', $data);
    }
}
