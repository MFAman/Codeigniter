<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = "My Home Page";
        return view('welcome_message', $data);
        // echo view('welcome_message');
    }

    public function about()
    {
        $data['title'] = "My About Page";
        return view('about_us', $data);
    }

    public function contact()
    {
        $data['title'] = "My Contact Page";
        return view('contact_us', $data);
    }
}
