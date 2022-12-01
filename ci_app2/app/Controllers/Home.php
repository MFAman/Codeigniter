<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['welcome'] = "Welcome to our site";
        return view('home_page', $data);
    }
    public function about()
    {
        return view('about_us');
    }
    public function contact()
    {
        return view('contact_us');
    }
}
