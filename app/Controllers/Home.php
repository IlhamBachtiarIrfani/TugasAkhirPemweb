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
        return view('welcome_message', $data);
    }
}
