<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Feedback  extends Model
{
    // ===== INI METHOD BUAT AMBIL SEMUA DATA =====
    public function getAllFeedback()
    {
        // ini buat inisiasi tabel di db
        $query = $this->db->table("feedback");

        // ini buat select, kasih paramter sesuai kolom yang mau diambil
        $query->select("*");

        // ini buat ngeeksekusi querynya terus ambil respon nya
        return $query->get()->getResultArray();
    }

    // ===== INI METHOD BUAT AMBIL SEMUA DATA =====
    public function getFeedbackById($id)
    {
        // ini buat inisiasi tabel di db
        $query = $this->db->table("feedback");

        // ini buat select, kasih paramter sesuai kolom yang mau diambil
        $query->select("*");

        // ini buat query where biar id_slider = $id
        $query->where("id_Feedback", $id);

        // ini buat ngeeksekusi querynya terus ambil respon nya
        // get row biar ambil 1 data doang
        return $query->get()->getRowArray();
    }


    // ===== INI METHOD BUAT INSERT DATA =====
    public function addFeedback($Nama, $Title, $Deskripsi, $Rating)
    {
        $query = $this->db->table("feedback");

        $data = [
            "Nama" => $Nama,
            "Title" => $Title,
            "Deskripsi" => $Deskripsi,
            "Rating" => $Rating
        ];

        // ini buat ngeeksekusi query insertnya terus ambil respon nya
        $query->insert($data);

        // ini buat cari tau ada berapa data yang kena efek sama query
        return $this->db->affectedRows();
    }

    public function deleteFeedback($id)
    {
        $query = $this->db->table("feedback");

        // ini buat query where biar id_Feedback = $id
        $query->where("id_Feedback", $id);

        // ini buat ngeeksekusi query deletenya terus ambil respon nya
        $query->delete();

        // ini buat cari tau ada berapa data yang kena efek sama query
        return $this->db->affectedRows();
    }
}
