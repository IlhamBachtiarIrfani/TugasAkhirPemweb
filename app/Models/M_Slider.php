<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Slider extends Model
{
    // ===== INI METHOD BUAT AMBIL SEMUA DATA =====
    public function getAllSlider()
    {
        // ini buat inisiasi tabel di db
        $query = $this->db->table("slider");

        // ini buat select, kasih paramter sesuai kolom yang mau diambil
        $query->select("*");

        // ini buat ngeeksekusi querynya terus ambil respon nya
        return $query->get()->getResultArray();
    }

    // ===== INI METHOD BUAT AMBIL SEMUA DATA =====
    public function getSliderById($id)
    {
        // ini buat inisiasi tabel di db
        $query = $this->db->table("slider");

        // ini buat select, kasih paramter sesuai kolom yang mau diambil
        $query->select("*");

        // ini buat query where biar id_slider = $id
        $query->where("id_slider", $id);

        // ini buat ngeeksekusi querynya terus ambil respon nya
        // get row biar ambil 1 data doang
        return $query->get()->getRowArray();
    }



    // ===== INI METHOD BUAT INSERT DATA =====
    public function addSlider($judul, $deskripsi, $linkGambar)
    {
        $query = $this->db->table("slider");

        $data = [
            "judul_slider" => $judul,
            "desrkipsi_slider" => $deskripsi,
            "url_gambar_slider" => $linkGambar,
        ];

        // ini buat ngeeksekusi query insertnya terus ambil respon nya
        $query->insert($data);

        // ini buat cari tau ada berapa data yang kena efek sama query
        return $this->db->affectedRows();
    }

    // ===== INI METHOD BUAT UPDATE DATA =====
    public function editSlider($id, $judul, $deskripsi, $linkGambar)
    {
        $query = $this->db->table("slider");

        $data = [
            "judul_slider" => $judul,
            "desrkipsi_slider" => $deskripsi,
            "url_gambar_slider" => $linkGambar,
        ];

        $query->set($data);

        // ini buat query where biar id_slider = $id
        $query->where("id_slider", $id);

        // ini buat ngeeksekusi query updatenya terus ambil respon nya
        $query->update();

        // ini buat cari tau ada berapa data yang kena efek sama query
        return $this->db->affectedRows();
    }

    public function deleteSlider($id)
    {
        $query = $this->db->table("slider");

        // ini buat query where biar id_slider = $id
        $query->where("id_slider", $id);

        // ini buat ngeeksekusi query deletenya terus ambil respon nya
        $query->delete();

        // ini buat cari tau ada berapa data yang kena efek sama query
        return $this->db->affectedRows();
    }
}
