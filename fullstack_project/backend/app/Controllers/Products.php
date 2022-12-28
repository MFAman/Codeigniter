<?php

namespace App\Controllers;

use App\Models\ProductsModel;
use CodeIgniter\RESTful\ResourceController;
use finfo;

class Products extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */

    function __construct()
    {
        helper(['form', 'url']);
    }

    public function index()
    {
        $model = new ProductsModel();
        $data['products'] = $model->findAll();
        return view("products/product_list", $data);

        // print_r($data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        // echo "hello";
        return view('products/add_product');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $rules = [
            'product_name' => 'required|min_length[5]|max_length[20]',
            'product_details' => 'required|min_length[10]',
            'product_price' => 'required|numeric',
        ];
        $errors =
            [
                'product_name' => [
                    'required' => 'Product Name must be fill',
                    'max_length' => 'Maximum length 5',
                    'min_length' => 'Minimum length 5',
                ],
                'product_details' => [
                    'required' => 'Product Name must be fill',
                    'min_length' => 'Product Details Minimum length 5',
                ],
                'product_price' => [
                    'required' => 'Product Name must be fill',
                    'numeric' => 'Number only',
                ],
            ];

        $validation = $this->validate($rules, $errors);

        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        } else {
            $model = new ProductsModel();
            $data = $this->request->getPost();
            $model->save($data);
            return redirect()->to('products');
        }
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        // echo "yes";
        $model = new ProductsModel();
        $data['product'] = $model->find($id);
        return view("products/edit_product", $data);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $validate = $this->validate([
            'product_name' => 'required|min_length[5]|max_length[20]',
            'product_details' => 'required|min_length[10]',
            'product_price' => 'required|numeric',
        ]);
        if (!$validate) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        } else {
            $model = new ProductsModel();
            $data["product_name"] = $this->request->getPost("product_name");
            $data["product_details"] = $this->request->getPost("product_details");
            $data["product_price"] = $this->request->getPost("product_price");
            $model->update($id, $data);
            return redirect()->to('products')->with('msg', "Updated Successfully");
        }
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $model = new ProductsModel();
        $model->delete($id);
        return redirect()->to("products")->with('dlmsg', "Delete Successfully");
        // echo "Delete";
    }
}
