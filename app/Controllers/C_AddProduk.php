<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models;

class C_AddProduk extends BaseController
{
    public function index()
    {
        echo view("general/header");
        echo view("V_AddProduk");
        echo view("general/footer");
    }

}