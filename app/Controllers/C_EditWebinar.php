<?php

namespace App\Controllers;

use App\Models\M_EditWebinar;

class C_EditWebinar extends BaseController
{
    public function index()
    {
        $ModelUser = new M_EditWebinar();

        $data["webinar"] = $ModelUser->getAllWebinar();

        echo view('auth/V_EditWebinar', $data);
}
}