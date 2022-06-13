<?php

namespace App\Controllers;

use App\Models\M_User;

class C_ListProduk extends BaseController
{
    public function index()
    {
        echo view("general/header");
        echo view("V_ListProduk");
        echo view("general/footer");
    }

}