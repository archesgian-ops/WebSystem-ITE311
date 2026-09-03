<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = 'Home - ITE311';
        return view('template', $data);
    }
}