<?php

namespace App\Models;

use CodeIgniter\Model;

class M_ProdukAuth extends Model
{
    protected $table = 'produk_mitra';

    public function getAllWebinar()
    {
        return $this->db->query("SELECT * FROM produk_mitra")->getResult();
    }
    
    public function getWebinarbyId($id) {
        return @$this->db->query("SELECT * FROM produk_mitra WHERE id = '$id'")->getRow();
    }
}