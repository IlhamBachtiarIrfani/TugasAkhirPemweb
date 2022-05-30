<?php

namespace App\Controllers;

class Home extends BaseController
{
    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
    }

    public function index()
    {
        $data["userData"] = $this->session->get("user_name");

        echo view("general/header", $data);
        echo view('auth/homepage');
        echo view("general/footer");
    }
}
