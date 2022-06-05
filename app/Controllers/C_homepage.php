<?php

namespace App\Controllers;

use App\Models\M_User;

class C_homepage  extends BaseController
{
    public function index()
<<<<<<< HEAD
    {
        $ModelUser = new M_User();

        $data["user"] = $ModelUser->getAllUser();
        
        return view('homepage', $data);
=======
    {    
        return view("auth/homepage");
>>>>>>> 10df331a8a9d4be0be018e662907ac2ad86160e6
    }
}
