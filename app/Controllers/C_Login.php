<?php

namespace App\Controllers;

use App\Models\M_User;

class C_Login extends BaseController
{
    public function index()
    {
        if ($this->session->has("is_login")) {
            return redirect()->to('');
        }

        echo view("general/header");
        echo view("auth/login");
        echo view("general/footer");
    }
}
