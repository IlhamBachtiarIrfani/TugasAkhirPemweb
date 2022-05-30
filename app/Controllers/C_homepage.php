<?php

namespace App\Controllers;

use App\Models\M_User;

class C_homepage  extends BaseController
{
    public function index()
<<<<<<< HEAD
    {    
        return view("auth/homepage");
=======
    {
        $ModelUser = new M_User();

        $data["user"] = $ModelUser->getAllUser();
        
        return view('homepage', $data);
>>>>>>> d0caa8795be806e7bc4bc29300df10f0993eefae
    }
}
