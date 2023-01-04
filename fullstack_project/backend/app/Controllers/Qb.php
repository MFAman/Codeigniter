<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Qb extends BaseController
{

    public function index()
    {
        // echo "hello";
        $db = \Config\Database::connect();
        // $builder = $db->table('products');
        // $builder = $db->table('products')->limit(10, 3);
        // $builder = $db->table('products');
        // echo "<pre>";
        // $raw = $builder->get();
        // $raw = $builder->getWhere(['id' => 3]);
        // $raw = $builder->getWhere(['id' => 3]);
        // $data = $raw->getResult();
        // print_r($data);
        ##########
        // $builder = $db->table('products')->select('id, product_name, product_price')->getWhere(['id' => 3, 5]);
        // echo "<pre>";
        // $raw = $builder->get();
        // $data = $builder->getResult();
        // print_r($data);
        ##########
        // $builder = $db->table('products')->selectMax('product_price')->get();
        // $builder = $db->table('products')->selectSum('product_price')->get();
        // $data = $builder->getResult();
        // print_r($data);
        ##########
        // $builder = $db->table('products')->select('product_category')->selectSum('product_price')->groupBy('product_category')->get();
        // echo "<pre>";
        // $data = $builder->getResult();
        // print_r($data);

        ##########  //table joining
        // $builder = $db->table('products');
        // $data = $builder->select('*');
        // $builder->join('categories', 'categories.id = products.product_category');
        // $data = $builder->get()->getResult();
        // echo "<pre>";
        // print_r($data);
        ##########
        $builder = $db->table('products, categories');
        $builder->where('categories.id = products.product_category');
        $data = $builder->get()->getResult();
        echo "<pre>";
        print_r($data);
        ###############################
        // $builder = $db->table('products');
        // $builder->where('product_price > 3000 ');
        // $builder->where('product_category > 1');
        // $data = $builder->get()->getResult();
        // echo "<pre>";
        // print_r($data);
        ###############################
        // $builder = $db->table('products');
        // $builder->where('product_price > 1000 ');
        // $builder->where('product_price < 3000 ');
        // $builder->where('product_category > 1');
        // $data = $builder->get()->getResult();
        // echo "<pre>";
        // print_r($data);
        ###########################        
        // $builder = $db->table('products');
        // echo "<pre>";
        // $raw = $builder->get();
        // $data['products'] = $raw->getResult();
        // print_r($data);
        // return view('test', $data);
    }
}
