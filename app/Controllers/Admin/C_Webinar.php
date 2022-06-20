<?php

// namespace nya diganti ye pake /Admin soalnya di folder admin
namespace App\Controllers\Admin;

// pake ini biar bisa extends basecontroller
use App\Controllers\BaseController;

// ini buat import model
use App\Models\M_CrudWebinar;

class C_Webinar extends BaseController
{
    // ini halaman list webinar
    public function index()
    {
        // ini buat inisiasi objek model webinar
        $ModelWebinar = new M_CrudWebinar();

        // ini buat menggil method getAllWebinar biar dapet data webinarnya apa aja
        $result = $ModelWebinar->getAllWebinar();

        // variabel data nanti yang dikirim ke view
        $data["webinarData"] = $result;

        echo view("general/admin_header");
        // datanya ditaruh situ biar ke kirim ke view dan bisa diakses di view
        echo view("admin/V_ListWebinar", $data);
        echo view("general/admin_footer");
    }

    // ini halaman tambah webinar
    public function add()
    {
        echo view("general/admin_header");
        echo view("admin/V_AddWebinar");
        echo view("general/admin_footer");
    }

    // ini method buat proses add webinar
    public function addProcess()
    {
        // judul itu name inputnya
        $judul = $_POST["judul"];

        // deskripsi itu name inputnya
        $deskripsi = $_POST["deskripsi"];

        // judul itu name inputnya
        $tanggalWebinar = $_POST["tanggalWebinar"];

        // deskripsi itu name inputnya
        $linkWebinar = $_POST["linkWebinar"];


        // di cek dulu inputnya ada apa enggak
        if (isset($judul) && isset($deskripsi) && isset($tanggalWebinar) && isset($linkWebinar)) {

            // gambar itu name inputnya
            $pathGambar = $this->uploadImage("posterWebinar");

            // ini buat inisiasi objek model webinar
            $ModelWebinar = new M_CrudWebinar();

            // manggil method di model biar di insert di db
            $result = $ModelWebinar->addWebinar($judul, $deskripsi, $tanggalWebinar, $linkWebinar, $pathGambar);

            if ($result) {
                return redirect()->to('Admin/C_Webinar');
            } else {
                echo "Penambahan Webinar Gagal!";
            }
        }
    }

    // ini halaman edit webinar
    public function edit($id = null)
    {
        // ini buat inisiasi objek model webinar
        $ModelWebinar = new M_CrudWebinar();

        // manggil method di model biar dapet data berdasarkan idnya
        $webinarData = $ModelWebinar->getWebinarById($id);

        // ngechek datanya ada apa enggak
        if (!isset($webinarData)) {
            return "Data tidak ditemukan";
        }

        // variabel data nanti yang dikirim ke view
        $data["webinarData"] = $webinarData;

        echo view("general/admin_header");
        echo view("admin/V_EditWebinar", $data);
        echo view("general/admin_footer");
    }

    // ini method buat proses add webinar
    public function editProcess($id)
    {
        // judul itu name inputnya
        $judul = $_POST["judul"];

        // deskripsi itu name inputnya
        $deskripsi = $_POST["deskripsi"];

        // judul itu name inputnya
        $tanggalWebinar = $_POST["tanggalWebinar"];

        // deskripsi itu name inputnya
        $linkWebinar = $_POST["linkWebinar"];

        // deskripsi itu name inputnya
        $oldGambar = $_POST["old_gambar"];

        // di cek dulu inputnya ada apa enggak
        if (isset($judul) && isset($deskripsi) && isset($tanggalWebinar) && isset($linkWebinar)) {
            // set default path dari gambar lama
            $pathGambar = $oldGambar;

            // upload gambar kalo ada yang baru aja
            if ($_FILES['new_gambar']['size'] == 0 && $_FILES['new_gambar']['error'] == 0) {
                // gambar itu name inputnya
                $pathGambar = $this->uploadImage("new_gambar");
            }

            // ini buat inisiasi objek model webinar
            $ModelWebinar = new M_CrudWebinar();

            // manggil method di model biar di update di db
            $result = $ModelWebinar->editWebinar($id, $judul, $deskripsi, $tanggalWebinar, $linkWebinar, $pathGambar);

            if ($result >= 0) {
                return redirect()->to('Admin/C_Webinar');
            } else {
                echo "Perubahan Webinar Gagal!";
            }
        }
    }

    public function delete($id = null)
    {
        // ini buat inisiasi objek model webinar
        $ModelWebinar = new M_CrudWebinar();

        // manggil method di model biar di delete di db
        $result = $ModelWebinar->deleteWebinar($id);

        if ($result) {
            return redirect()->to('Admin/C_Webinar');
        } else {
            echo "Penghapusan Webinar Gagal!";
        }
    }

    // ini fungsi buat upload image
    function uploadImage($name)
    {
        // buat helper, load ajah
        helper(['form', 'url']);

        // buat dapetin file dari input
        $imageFile = $this->request->getFile($name);

        // buat upload gambar ke folder "uploads"
        $imageFile->move(FCPATH . 'uploads');

        // dapetin data setelah upload
        return "uploads/" . $imageFile->getName();
    }
}
