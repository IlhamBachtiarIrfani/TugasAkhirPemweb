<?php

namespace App\Controllers;

use App\Models\M_Webinar;

class C_Webinar extends BaseController
{
    public function index()
    {
        $ModelUser = new M_Webinar();

        $data["webinar"] = $ModelUser->getAllWebinar();
    
        return view('auth/V_Webinar', $data);
    }

}