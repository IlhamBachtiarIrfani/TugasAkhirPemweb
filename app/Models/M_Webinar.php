<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Webinar extends Model
{
    protected $table = 'webinar';

    public function getAllWebinar()
    {
        return $this->db->query("SELECT * FROM webinar")->getResult();
    }
    
    public function getWebinarbyId($id) {
        return @$this->db->query("SELECT * FROM webinar WHERE id = '$id'")->getRow();
    }
}
