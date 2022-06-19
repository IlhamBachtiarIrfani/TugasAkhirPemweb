<?php

namespace App\Controllers;

// pake ini biar bisa extends basecontroller
use App\Controllers\BaseController;

// ini buat import model
use App\Models\M_Feedback;

class C_AddFeedback extends BaseController
{
    // ini halaman list Feedback
    public function index()
    {
        // ini buat inisiasi objek model Feedback
        $ModelFeedback = new M_Feedback();

        // ini buat menggil method getAllFeedback biar dapet data Feedback apa aja
        $result = $ModelFeedback->getAllFeedback();

        // variabel data nanti yang dikirim ke view
        $data["FeedbackData"] = $result;

        echo view("general/header");
        // datanya ditaruh situ biar ke kirim ke view dan bisa diakses di view
        echo view("auth/V_AddFeedback", $data);
        echo view("general/footer");
    }

    // ini halaman tambah Feedback
    public function add()
    {
        echo view("general/header");
        echo view("auth/V_AddFeedback");
        echo view("general/footer");
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