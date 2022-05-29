<?php

namespace App\Models;

use CodeIgniter\Model;

class M_User extends Model
{
    protected $table = 'user';

    public function getAllUser()
    {
        return $this->db->query("SELECT * FROM user")->getResult();
    }
}
