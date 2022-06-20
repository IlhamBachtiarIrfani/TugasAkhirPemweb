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

        echo view("general/header");
        echo view("auth/register");
        echo view("general/footer");
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

            $data = $modelUser->getUserByEmail($email);

            if (!$data) {
                echo "Data tidak ditemukan";
                return;
            }

            if (!password_verify($password, $data->Password)) {
                echo "Password salah";
                return;
            }

            $this->session->set('user_id', $data->IdUser);
            $this->session->set('user_name', $data->Fullname);
            $this->session->set('is_login', TRUE);
        } else {
            echo "Input tidak valid";
            return;
        }

        return redirect()->to('');
    }
}
