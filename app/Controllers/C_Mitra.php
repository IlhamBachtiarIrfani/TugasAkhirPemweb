<?php

namespace App\Controllers;


class C_Mitra extends BaseController
{
    public function index()
    {
     
        $data["userData"] = $this->session->get("user_name");

        echo view("general/header", $data);
        echo view('auth/V_Mitra');
        echo view("general/footer");
    }
}