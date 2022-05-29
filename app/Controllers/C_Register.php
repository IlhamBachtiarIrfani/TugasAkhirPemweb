<?php

namespace App\Controllers;

use App\Models\M_User;

class C_Register extends BaseController
{
    public function index()
    {
        return view("auth/register");
    }
}
