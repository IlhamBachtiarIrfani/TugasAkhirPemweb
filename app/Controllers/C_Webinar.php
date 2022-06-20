<?php

namespace App\Controllers;

use App\Models\M_Slider;
use App\Models\M_Webinar;

class C_Webinar extends BaseController
{
    public function index()
    {
        $ModelUser = new M_Webinar();

        $data["webinar"] = $ModelUser->getAllWebinar();
        $data["userData"] = $this->session->get("user_name");

        // ini buat inisiasi objek model slider
        $ModelSlider = new M_Slider();

        // ini buat menggil method getAllSlider biar dapet data slidernya apa aja
        $result = $ModelSlider->getAllSlider();

        // variabel data nanti yang dikirim ke view
        $data["sliderData"] = $result;

        echo view("general/header", $data);
        echo view('auth/V_Webinar', $data);
        echo view("general/footer");
    }
}
