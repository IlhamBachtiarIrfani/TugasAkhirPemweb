<?php

namespace App\Controllers;

// ini buat import model
use App\Models\M_Slider;

class C_ProdukMitra extends BaseController
{
    public function index()
    {   
        // ini buat inisiasi objek model slider
        $ModelSlider = new M_Slider();

        // ini buat menggil method getAllSlider biar dapet data slidernya apa aja
        $result = $ModelSlider->getAllSlider();

        // variabel data nanti yang dikirim ke view
        $data["sliderData"] = $result;

        echo view("general/header");
        // datanya ditaruh situ biar ke kirim ke view dan bisa diakses di view
        echo view("V_ProdukMitra", $data);
        echo view("general/footer");
    }
}
