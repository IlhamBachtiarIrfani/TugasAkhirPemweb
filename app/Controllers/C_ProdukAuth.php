<?php

namespace App\Controllers;

use App\Models\M_ProdukAuth;

class C_ProdukAuth extends BaseController
{
    public function index()
    {
        $ModelUser = new M_ProdukAuth();

        $data["webinar"] = $ModelUser->getAllWebinar();
        $data["userData"] = $this->session->get("user_name");

        echo view("general/header", $data);
        echo view('auth/V_Produk', $data);
        echo view("general/footer");
    }
}