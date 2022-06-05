<?php

namespace App\Controllers;

use App\Models\M_Webinar;

class C_Webinar extends BaseController
{
    public function index()
    {
        $ModelUser = new M_Webinar();

        $data["webinar"] = $ModelUser->getAllWebinar();

        echo view("general/header");
        echo view('auth/V_Webinar', $data);
        echo view("general/footer");
    }
}