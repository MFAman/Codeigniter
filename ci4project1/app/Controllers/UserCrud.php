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
        return view('user_display', $data);
    }
}
