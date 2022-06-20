<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Produk extends Model {

     public function addProduk($namaProduk, $deskripsi, $foto, $harga, $rating)
     {
         $query = $this->db->table("produk_mitra");
 
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

     public function getAllProduk()
    {
        $query = $this->db->table("produk_mitra");

        $query->select("*");

        return $query->get()->getResultArray();
    }

    public function getProdukById($id)
    {
        $query = $this->db->table("produk_mitra");

        $query->select("*");

        $query->where("idProduk", $id);

        return $query->get()->getRowArray();
    }

     public function editProduk($id, $namaProduk, $foto, $deskripsi, $harga, $rating)
     {
         $query = $this->db->table("produk_mitra");
 
         $data = [
            "NamaProduk" => $namaProduk,
            "DeskripsiProduk" => $deskripsi,
            "FotoProduk" => $foto,
            "harga" => $harga,
            "Rating" => $rating,
         ];
 
         $query->set($data);
 
         $query->where("idProduk", $id);
 
         $query->update();
 
         return $this->db->affectedRows();
     }

     public function deleteProduk($id)
    {
        $query = $this->db->table("produk_mitra");

        $query->where("idProduk", $id);

        $query->delete();

        return $this->db->affectedRows();
    }
}