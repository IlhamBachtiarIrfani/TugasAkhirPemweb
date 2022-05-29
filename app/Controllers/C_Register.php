<?php

namespace App\Controllers;

use App\Models\M_User;

class C_Register extends BaseController
{
    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
    }

    public function index()
    {
        if ($this->session->has("is_login")) {
            return redirect()->to('');
        }
        
        return view("auth/register");
    }

    public function process()
    {
        $modelUser = new M_User();

        $fullname = @$_POST["fullname"];
        $email = @$_POST["email"];
        $password = @$_POST["password"];
        $confirmPassword = @$_POST["confirmPassword"];

        if ($fullname && $email && $password && $confirmPassword) {
            if ($password != $confirmPassword) {
                echo "Konfirmasi password salah";
                return;
            }

            $encriptPass = password_hash($password, PASSWORD_DEFAULT);
            echo $modelUser->registerUser($fullname, $email, $encriptPass);
        } else {
            echo "Input tidak valid";
            return;
        }

        return redirect()->to('');
    }
}
