<?php

namespace App\Models;

use CodeIgniter\Model;

class M_CrudWebinar extends Model
{
    // ===== INI METHOD BUAT AMBIL SEMUA DATA =====
    public function getAllWebinar()
    {
        // ini buat inisiasi tabel di db
        $query = $this->db->table("webinar");

        // ini buat select, kasih paramter sesuai kolom yang mau diambil
        $query->select("*");

        // ini buat ngeeksekusi querynya terus ambil respon nya
        return $query->get()->getResultArray();
    }

    // ===== INI METHOD BUAT AMBIL SEMUA DATA =====
    public function getWebinarById($id)
    {
        // ini buat inisiasi tabel di db
        $query = $this->db->table("webinar");

        // ini buat select, kasih paramter sesuai kolom yang mau diambil
        $query->select("*");

        // ini buat query where biar id_webinar = $id
        $query->where("idWebinar", $id);

        // ini buat ngeeksekusi querynya terus ambil respon nya
        // get row biar ambil 1 data doang
        return $query->get()->getRowArray();
    }



    // ===== INI METHOD BUAT INSERT DATA =====
    public function addWebinar($judul, $deskripsi, $tanggalWebinar, $linkWebinar, $linkGambar)
    {
        $query = $this->db->table("webinar");

        $data = [
            "Title" => $judul,
            "Deskripsi" => $deskripsi,
            "TanggalWebinar" => $tanggalWebinar,
            "LinkWebinar" => $linkWebinar,
            "PosterWebinar" => $linkGambar,
        ];

        // ini buat ngeeksekusi query insertnya terus ambil respon nya
        $query->insert($data);

        // ini buat cari tau ada berapa data yang kena efek sama query
        return $this->db->affectedRows();
    }

    // ===== INI METHOD BUAT UPDATE DATA =====
    public function editWebinar($id, $judul, $deskripsi, $tanggalWebinar, $linkWebinar, $linkGambar)
    {
        $query = $this->db->table("webinar");

        $data = [
            "Title" => $judul,
            "Deskripsi" => $deskripsi,
            "TanggalWebinar" => $tanggalWebinar,
            "LinkWebinar" => $linkWebinar,
            "PosterWebinar" => $linkGambar,
        ];

        $query->set($data);

        // ini buat query where biar id_webinar = $id
        $query->where("idWebinar", $id);

        // ini buat ngeeksekusi query updatenya terus ambil respon nya
        $query->update();

        // ini buat cari tau ada berapa data yang kena efek sama query
        return $this->db->affectedRows();
    }

    public function deleteWebinar($id)
    {
        $query = $this->db->table("webinar");

        // ini buat query where biar id_webinar = $id
        $query->where("idWebinar", $id);

        // ini buat ngeeksekusi query deletenya terus ambil respon nya
        $query->delete();

        // ini buat cari tau ada berapa data yang kena efek sama query
        return $this->db->affectedRows();
    }
}
