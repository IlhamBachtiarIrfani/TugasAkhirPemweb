<?php

namespace App\Controllers;

use App\Models\M_User;

class C_Login extends BaseController
{
    public function index()
    {
        return view("auth/login");
    }
}
