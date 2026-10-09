<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = 'Home - ITE311';
        return view('template', $data);
    }

    public function about()
    {
        $data['title'] = 'About - ITE311';
        return view('about', $data);
    }

    public function contact()
    {
        $data['title'] = 'Contact - ITE311';
        return view('contact', $data);
    }
}