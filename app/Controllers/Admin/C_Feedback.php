<?php

// namespace nya diganti ye pake /Admin soalnya di folder admin
namespace App\Controllers\Admin;

// pake ini biar bisa extends basecontroller
use App\Controllers\BaseController;

// ini buat import model
use App\Models\M_Feedback;

class C_Feedback extends BaseController
{
    // ini halaman list Feedback
    public function index()
    {
        // ini buat inisiasi objek model Feedback
        $ModelFeedback = new M_Feedback();

        // ini buat manggil method getAllFeedback biar dapet data Feedback apa aja
        $result = $ModelFeedback->getAllFeedback();

        // variabel data nanti yang dikirim ke view
        $data["FeedbackData"] = $result;

        echo view("general/admin_header");
        // datanya ditaruh situ biar ke kirim ke view dan bisa diakses di view
        echo view("admin/V_ListFeedback", $data);
        echo view("general/admin_footer");
    }

    // ini halaman tambah Feedback
    public function add()
    {
        echo view("general/admin_header");
        echo view("admin/V_AddFeedback");
        echo view("general/admin_footer");
    }

    public function addProcess()
    {
        $Nama = $_POST["nama"];

        $Title = $_POST["title"];

        $Deskripsi = $_POST["deskripsi"];

        $Rating = $_POST["rating"];

        // di cek dulu inputnya ada apa enggak
        if (isset($Nama) && isset($Deskripsi) && isset($Title) && isset($Rating)) {

            // ini buat inisiasi objek model Feedback
            $ModelFeedback = new M_Feedback();

            // manggil method di model biar di insert di db
            $result = $ModelFeedback->addFeedback($Nama, $Title, $Deskripsi, $Rating);

            if ($result) {
                return redirect()->to('');
            } else {
                echo "Penambahan Feedback Gagal!";
            }
        }
    }

    public function delete($id = null)
    {
        // ini buat inisiasi objek model Feedback
        $ModelFeedback = new M_Feedback();

        // manggil method di model biar di delete di db
        $result = $ModelFeedback->deleteFeedback($id);

        if ($result) {
            return redirect()->to('Admin/C_Feedback');
        } else {
            echo "Penghapusan Feedback Gagal!";
        }
    }
}
