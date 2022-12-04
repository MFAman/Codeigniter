<?php

namespace App\Controllers;

use App\Models\UserModel;  // call from UserModel

use App\Controllers\BaseController;

class UserCrud extends BaseController
{
    public function index()
    {
        $usersObj = new UserModel();
        $data['myusers'] = $usersObj->OrderBy('id', 'DESC')->findAll();
        // $data['users'] = $usersObj->findAll();
        // echo "<pre>";
        // print_r($data);
        return view('user_display', $data);
    }
    public function create()
    {
        return view('user_create');
    }
    public function store()
    {
        helper(['form']);
        $rules = [
            'u_name' => 'required',
            'u_email' => 'required',
        ];

        if ($this->validate($rules)) {
            $usersObj = new UserModel();
            $data['name'] = $this->request->getVar('u_name');
            $data['email'] = $this->request->getVar('u_email');
            // echo "<pre>";
            // print_r($data);
            $usersObj->insert($data);
            $this->response->redirect('/users');
        } else {
            $data['validation'] = $this->validator;
            // print_r($data);
            return view('user_create', $data);
        }
    }

    public function delete($id)
    {
        // echo $id;
        $usersObj = new UserModel();
        $usersObj->where('id', $id)->delete($id);
        $this->response->redirect('/users');
    }

    public function edit($id)
    {
        $usersObj = new UserModel();
        $data['user'] = $usersObj->find($id);
        // print_r($data);
        return view('user_edit', $data);
        // $usersObj->where('id', $id)->find($id);
    }

    public function update()
    {
        $usersObj = new UserModel();
        $id = $this->request->getVar('u_id');
        $data['name'] = $this->request->getVar('u_name');
        $data['email'] = $this->request->getVar('u_email');
        $usersObj->update($id, $data);
        $this->response->redirect('/users');
    }
}
