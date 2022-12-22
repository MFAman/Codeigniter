<?php

namespace App\Controllers;

use App\Models\StudentModel;
use CodeIgniter\RESTful\ResourceController;

class Student extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $modeldata = new StudentModel();
        $data['students'] = $modeldata->findAll();
        $data['title'] = "All Students";
        // print_r($data);
        return view("students/student_list", $data);
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
        // echo "Yes";
        $data['title'] = "Student Entry";
        return view("students/add_student", $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $model = new StudentModel();
        // $data['name'] = $this->request->getPost('name');
        // $data['email'] = $this->request->getPost('email');
        // $data['phone'] = $this->request->getPost('phone');
        // $data['address'] = $this->request->getPost('address');
        // fild theke akta akta kore nite hole uporer code

        $data = $this->request->getPost(); // all fild paye jabe
        // print_r($data);
        $model->save($data);
        // return redirect()->back();
        return redirect('Student');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        // echo "Yes";
        $model = new StudentModel();
        $data['student'] = $model->find($id);
        return view("students/edit_student", $data);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $model = new StudentModel();
        $data = $this->request->getPost();
        // print_r($data);
        if ($model->update($id, $data)) {
            return redirect()->to('Student');
        }
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $model = new StudentModel();
        $model->delete($id);
        return redirect()->to('Student');
    }
}
