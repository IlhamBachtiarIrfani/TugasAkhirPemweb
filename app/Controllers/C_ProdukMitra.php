<?php

namespace App\Controllers;

use App\Models\M_User;

class C_ProdukMitra extends BaseController
{
    public function index()
    {
        echo view("general/header");
        echo view("V_ProdukMitra");
        echo view("general/footer");
    }
}
