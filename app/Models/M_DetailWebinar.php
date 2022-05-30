<?php

namespace App\Models;

use CodeIgniter\Model;

class M_DetailWebinar extends Model
{
    protected $table = 'webinar';

    public function getAllWebinar()
    {
        return $this->db->query("SELECT * FROM webinar")->getResult();
    }
}
