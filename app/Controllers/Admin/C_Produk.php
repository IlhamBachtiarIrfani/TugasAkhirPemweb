<?php

// namespace nya diganti ye pake /Admin soalnya di folder admin
namespace App\Controllers\Admin;

// pake ini biar bisa extends basecontroller
use App\Controllers\BaseController;

// ini buat import model
use App\Models\M_Produk;

class C_Produk extends BaseController
{
    // ini halaman list slider
    public function index()
    {
        // ini buat inisiasi objek model slider
        $ModelProduk = new M_Produk();

        // ini buat menggil method getAllSlider biar dapet data slidernya apa aja
        $result = $ModelProduk->getAllProduk();

        // variabel data nanti yang dikirim ke view
        $data["dataProduk"] = $result;

        echo view("general/admin_header");
        // datanya ditaruh situ biar ke kirim ke view dan bisa diakses di view
        echo view("admin/V_ListProduk", $data);
        echo view("general/admin_footer");
    }

    // ini halaman tambah slider
    public function add()
    {
        echo view("general/admin_header");
        echo view("admin/V_AddProduk");
        echo view("general/admin_footer");
    }

    public function addProcess()
    {
        $nama = $_POST["nama"];

        $deskripsi = $_POST["deskripsi"];

        $harga = $_POST["harga"];

        $rating = $_POST["rating"];

        // di cek dulu inputnya ada apa enggak
        if (isset($nama) && isset($deskripsi)) {

            // gambar itu name inputnya
            $pathGambar = $this->uploadImage("foto");

            // ini buat inisiasi objek model slider
            $ModelProduk = new M_Produk();

            // manggil method di model biar di insert di db
            $result = $ModelProduk->addProduk($nama, $deskripsi, $pathGambar, $harga, $rating);

            if ($result) {
                return redirect()->to('Admin/C_Produk');
            } else {
                echo "Penambahan Produk Gagal!";
            }
        }
    }

    // ini halaman edit webinar
    public function edit($id = null)
    {
        // ini buat inisiasi objek model slider
        $ModelProduk = new M_Produk();

        // manggil method di model biar dapet data berdasarkan idnya
        $dataProduk = $ModelProduk->getProdukById($id);

        // ngechek datanya ada apa enggak
        if (!isset($dataProduk)) {
            return "Data tidak ditemukan";
        }

        // variabel data nanti yang dikirim ke view
        $data["dataProduk"] = $dataProduk;

        echo view("general/admin_header");
        echo view("admin/V_EditProduk", $data);
        echo view("general/admin_footer");
    }

    // ini method buat proses add slider
    public function editProcess($id)
    {
        // judul itu name inputnya
        $nama = $_POST["nama"];

        // deskripsi itu name inputnya
        $deskripsi = $_POST["deskripsi"];


        // deskripsi itu name inputnya
        $oldFoto = $_POST["old_foto"];

        // deskripsi itu name inputnya
        $harga = $_POST["harga"];

        // deskripsi itu name inputnya
        $rating = $_POST["rating"];

        // di cek dulu inputnya ada apa enggak
        if (isset($nama) && isset($deskripsi)) {
            // set default path dari gambar lama
            $foto = $oldFoto;

            // upload gambar kalo ada yang baru aja
            if ($_FILES['new_foto']['size'] == 0 && $_FILES['new_foto']['error'] == 0) {
                // gambar itu name inputnya
                $pathGambar = $this->uploadImage("new_foto");
            }

            // ini buat inisiasi objek model slider
            $ModelProduk = new M_Produk();

            // manggil method di model biar di update di db
            $result = $ModelProduk->editProduk($id, $nama, $foto, $deskripsi, $harga, $rating);

            if ($result) {
                return redirect()->to('Admin/C_Produk');
            } else {
                echo "Perubahan Produk Gagal!";
            }
        }
    }

    public function delete($id = null)
    {
        // ini buat inisiasi objek model slider
        $ModelProduk = new M_Produk();

        // manggil method di model biar di delete di db
        $result = $ModelProduk->deleteProduk($id);

        if ($result) {
            return redirect()->to('Admin/C_Produk');
        } else {
            echo "Penghapusan Produk Gagal!";
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
