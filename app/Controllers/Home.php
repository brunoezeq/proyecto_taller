<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('front/header')
         . view('front/principal')
         . view('front/footer');            
    }
}
