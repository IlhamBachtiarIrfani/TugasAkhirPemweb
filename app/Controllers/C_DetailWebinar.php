<?php

namespace App\Controllers;

use App\Models\M_DetailWebinar;

class C_DetailWebinar extends BaseController
{
    public function index()
    {
        $ModelUser = new M_DetailWebinar();

        $data["webinar"] = $ModelUser->getAllWebinar();

        echo view("general/header");
        echo view('auth/V_DetailWebinar', $data);
        echo view("general/footer");
}
}