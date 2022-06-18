<?php

namespace App\Controllers;

class C_ProfileMitra extends BaseController
{
    public function index()
    {
        echo view("general/header");
        echo view('auth/V_Webinar');
        echo view("general/footer");
    }
}