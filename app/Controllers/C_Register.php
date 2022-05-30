<?php

namespace App\Controllers;

use App\Models\M_User;

class C_Register extends BaseController
{
    public function index()
    {
        if ($this->session->has("is_login")) {
            return redirect()->to('');
        }
        
        echo view("general/header");
        echo view("auth/register");
        echo view("general/footer");
    }
}
