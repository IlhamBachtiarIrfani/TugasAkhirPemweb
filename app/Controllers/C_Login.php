<?php

namespace App\Controllers;

class C_Login extends BaseController
{
    public function index()
    {
        return view('auth/login');
    }
}
