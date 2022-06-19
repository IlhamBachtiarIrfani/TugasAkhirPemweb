<?php

namespace App\Models;

use codeigniter\Model;

class M_Produk extends Model {

     public function addProduk($namaProduk, $foto, $deskripsi, $harga, $rating)
     {
         $query = $this->db->table("produk mitra");
 
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

     public function getAllSlider()
    {
        // ini buat inisiasi tabel di db
        $query = $this->db->table("produk mitra");

        // ini buat select, kasih paramter sesuai kolom yang mau diambil
        $query->select("*");

        // ini buat ngeeksekusi querynya terus ambil respon nya
        return $query->get()->getResultArray();
    }

    // ===== INI METHOD BUAT AMBIL SEMUA DATA =====
    public function getSliderById($id)
    {
        // ini buat inisiasi tabel di db
        $query = $this->db->table("produk mitra");

        // ini buat select, kasih paramter sesuai kolom yang mau diambil
        $query->select("*");

        // ini buat query where biar id_slider = $id
        $query->where("idProduk", $id);

        // ini buat ngeeksekusi querynya terus ambil respon nya
        // get row biar ambil 1 data doang
        return $query->get()->getRowArray();
    }

     // ===== INI METHOD BUAT UPDATE DATA =====
     public function editSlider($id, $namaProduk, $foto, $deskripsi, $harga, $rating)
     {
         $query = $this->db->table("produk mitra");
 
         $data = [
            "NamaProduk" => $namaProduk,
            "DeskripsiProduk" => $deskripsi,
            "FotoProduk" => $foto,
            "harga" => $harga,
            "rating" => $rating,
         ];
 
         $query->set($data);
 
         // ini buat query where biar id_slider = $id
         $query->where("idProduk", $id);
 
         // ini buat ngeeksekusi query updatenya terus ambil respon nya
         $query->update();
 
         // ini buat cari tau ada berapa data yang kena efek sama query
         return $this->db->affectedRows();
     }

     public function deleteSlider($id)
    {
        $query = $this->db->table("produk mitra");

        // ini buat query where biar id_slider = $id
        $query->where("idProduk", $id);

        // ini buat ngeeksekusi query deletenya terus ambil respon nya
        $query->delete();

        // ini buat cari tau ada berapa data yang kena efek sama query
        return $this->db->affectedRows();
    }
}