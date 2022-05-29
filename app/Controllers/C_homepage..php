<?php

namespace App\Controllers;

use App\Models\M_User;

class C_homepage  extends BaseController
{
    public function index()
    {
        $ModelUser = new M_User();

        $data["user"] = $ModelUser->getAllUser();
        
        return view('homepage', $data);
    }
}
