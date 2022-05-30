<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data["userData"] = $this->session->get("user_name");

        echo view("general/header", $data);
        echo view('auth/homepage');
        echo view("general/footer");
    }
}
