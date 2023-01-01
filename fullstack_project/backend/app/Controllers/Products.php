<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductsModel;
use CodeIgniter\API\ResponseTrait;
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
    use ResponseTrait;
    public function index()
    {
        $model = new CategoryModel();
        $data['cats'] = $model->findAll();
        $model = new ProductsModel();
        $data['products'] = $model->orderBy('id', 'desc')->findAll();
        // return view("products/product_list", $data);
        return $this->respond($data);

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
        $model = new CategoryModel();
        $data['cats'] = $model->orderBy('category_name', 'ASC')->findAll();
        return view('products/add_product', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $rules = [
            'product_name' => 'required|min_length[5]|max_length[50]',
            'product_details' => 'required|min_length[5]',
            'product_price' => 'required|numeric',
            'product_image' => [
                'uploaded[product_image]',
                'mime_in[product_image,image/jpg,image/jpeg,image/png]',
                'max_size[product_image,1024]',
            ]
        ];
        $errors =
            [
                'product_name' => [
                    'required' => 'Product Name must be fill',
                    'max_length' => 'Maximum length 50',
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
                'product_image' => [
                    'mime_in' => 'Only jpg, png and jpeg are allowed',
                    'max_size' => 'Not more than 1 MB'
                ]
            ];

        $validation = $this->validate($rules, $errors);

        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        } else {
            $img = $this->request->getFile('product_image');
            $path = "/assets/uploads/";
            $img->move($path);

            $data['product_name'] = $this->request->getPost('product_name');
            $data['product_details'] = $this->request->getPost('product_details');
            $data['product_price'] = $this->request->getPost('product_price');
            $namepath = $path . $img->getName();
            $data['product_image'] = $namepath;
            $data['product_category'] = $this->request->getPost('cat_name');

            $model = new ProductsModel();
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
            'product_image' => [
                'uploaded[product_image]',
                'mime_in[product_image,image/jpg,image/jpeg,image/png]',
                'max_size[product_image,1024]',
            ]
        ]);
        if (!$validate) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        } else {
            $img = $this->request->getFile('product_image');
            $path = "assets/uploads/";
            $img->move($path);

            $data["product_name"] = $this->request->getPost("product_name");
            $data["product_details"] = $this->request->getPost("product_details");
            $data["product_price"] = $this->request->getPost("product_price");
            $namepath = $path . $img->getName();
            $data['product_image'] = $namepath;

            $model = new ProductsModel();
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
