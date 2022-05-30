<?php

namespace App\Controllers;

use App\Models\M_DetailWebinar;

class C_DetailWebinar extends BaseController
{
    public function index()
    {
        $ModelUser = new M_DetailWebinar();

        $data["webinar"] = $ModelUser->getAllWebinar();
        
        return view('auth/V_DetailWebinar', $data);
    }
}