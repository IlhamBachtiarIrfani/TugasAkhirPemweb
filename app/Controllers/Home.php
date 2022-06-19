<?php

namespace App\Controllers;

use App\Models\M_Feedback;

class Home extends BaseController
{
    public function index()
    {
        $data["userData"] = $this->session->get("user_name");

          // ini buat inisiasi objek model slider
          $ModelFeedback = new M_Feedback();

          // ini buat menggil method getAllSlider biar dapet data slidernya apa aja
          $result = $ModelFeedback->getAllFeedback();
  
          // variabel data nanti yang dikirim ke view
          $data["FeedbackData"] = $result;

        echo view("general/header", $data);
        echo view('auth/homepage');
        echo view("general/footer");
    }
}
