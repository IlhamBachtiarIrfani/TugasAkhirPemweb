<?php

namespace App\Controllers;

use App\Models\M_User;

class C_homepage  extends BaseController
{
    public function index()
    {    
        return view("auth/homepage");
    }
}
