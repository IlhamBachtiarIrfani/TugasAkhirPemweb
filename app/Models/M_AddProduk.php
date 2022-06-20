<?php

namespace App\Models;

use codeigniter\Model;

class M_AddProduk extends Model {

     public function addProduk($namaProduk, $foto, $deskripsi, $harga, $rating)
     {
         $query = $this->db->table("slider");
 
         $data = [
             "NamaProduk" => $namaProduk,
             "DeskripsiProduk" => $deskripsi,
             "FotoProduk" => $foto,
             "harga" => $harga,
             "rating" => $rating,
         ];
 
         $query->insert($data);
 
         return $this->db->affectedRows();
     }
}