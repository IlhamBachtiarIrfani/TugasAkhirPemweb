<?php

namespace App\Controllers;


class C_TentangKami extends BaseController
{
    public function index()
    {
     
        $data["userData"] = $this->session->get("user_name");

        echo view("general/header", $data);
        echo view('auth/V_TentangKami');
        echo view("general/footer");
    }
}