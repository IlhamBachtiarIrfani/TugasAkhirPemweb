<?php

namespace App\Models;

use CodeIgniter\Model;

class M_User extends Model
{
    public function registerUser($username, $email, $password)
    {
        $query = $this->db->table("user");

        $data = [
            "Fullname" => $username,
            "Email" => $email,
            "Password" => $password,
        ];

        $query->insert($data);

        return $this->db->affectedRows();
    }

    public function getUserByEmail($email)
    {
        return @$this->db->query("SELECT * FROM user WHERE Email = '$email'")->getRow();
    }
}
