<?php

namespace App\Controllers;

use App\Models\M_User;

class C_EditProduk extends BaseController
{
    public function index()
    {
        echo view("general/header");
        echo view("V_EditProduk");
        echo view("general/footer");
    }

}