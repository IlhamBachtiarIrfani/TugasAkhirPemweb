<?php

namespace App\Controllers;

use App\Models\M_User;

class C_Login extends BaseController
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

        return view("auth/login");
    }

    public function process()
    {
        $modelUser = new M_User();

        $email = @$_POST["email"];
        $password = @$_POST["password"];

        if ($email && $password) {
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

    public function logout()
    {
        $this->session->remove("user_id");
        $this->session->remove("user_name");
        $this->session->remove("is_login");
        return redirect()->to('');
    }
}
