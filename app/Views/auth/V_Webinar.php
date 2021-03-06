<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>D&S Inc. - Webinar</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?= base_url("Webinar.css") ?>" />
  <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url("dist/css/bootstrap-grid.css") ?>" />
  <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url("/dist/css/bootstrap-reboot.css") ?>" />
  <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url("/dist/css/bootstrap-utilities.css") ?>" />
  <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url("/dist/css/bootstrap.css") ?>" />
  <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url("/dist/css/style.css") ?>" />
</head>

<body>
  <!-- MAIN SECTION -->
  -<div class="container py-5">
    <div class="owl-carousel">
      <!-- INI BUAT NAMPILIN SLIDERNYA -->
      <!-- variabel $sliderData didapet dari controller ye, sesuai nama yang ada di array $data, terus dilooping -->
      <?php foreach ($sliderData as $key => $item) { ?>
        <div class="row flex-lg-row-reverse align-items-center g-5 py-2">
          <div class="col-10 col-sm-8 col-lg-6">
            <!-- url_gambar_slider itu nama kolom di tabel ye -->
            <img src=<?= base_url($item["url_gambar_slider"]) ?> class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy" />
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3 font-header">
              <!-- judul_slider itu nama kolom di tabel ye -->
              <?= $item["judul_slider"] ?>
            </h1>
            <p class="lead mt-4">
              <!-- desrkipsi_slider itu nama kolom di tabel ye -->
              <?= $item["desrkipsi_slider"] ?>
            </p>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>

  <!-- INI CSS BUAT SLIDER -->
  <style>
    .owl-dot {
      width: 12px;
      height: 12px;
      background-color: #a5a5a5 !important;
      border-radius: 12px;
      margin-right: 4px;
    }

    .owl-dot.active {
      background-color: black !important;
    }
  </style>

  <!-- INI JAVASCRIPT BUAT SLIDER -->
  <script>
    $(document).ready(function() {
      $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        items: 1,
      });
    });
  </script>
  
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="font-header">Rekomendasi Webinar</h2>
      </div>
      <div class="col-lg-9 mb-4">
        <p class="font1">Terdapat 15 webinar yang tersedia</p>

        <!-- GRID -->
        <div class="row mt-4">
          <!-- MITRA ITEM -->
          <div class="col-md-4">
            <div class="border rounded-3">
              <img src="../dist/img/Web1.png" alt="" class="img-fluid w-100" />
              <div class="p-3">
                <span class="fs-5 fw-bold">Optimalisasi Peran Koperasi dalam Sektor...</span>
                <div class="mt-2">
                  <span class="badge bg-light text-dark">10 November 2021</span>
                  <span class="badge bg-light text-dark">15:00 - 17:30</span>
                </div>
                <a href="<?= base_url("C_DetailWebinar") ?>" class="btn btn-primary w-100 mt-3">Lihat Detail</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="border rounded-3">
              <img src="../dist/img/Web2.png" alt="" class="img-fluid w-100" />
              <div class="p-3">
                <span class="fs-5 fw-bold">Inovasi Produk Pangan Hasil Ternak #Sesi10</span>
                <div class="mt-2">
                  <span class="badge bg-light text-dark">9 November 2021</span>
                  <span class="badge bg-light text-dark">09:00 - 12:00</span>
                </div>
                <a class="btn btn-primary w-100 mt-3">Lihat Detail</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="border rounded-3">
              <img src="../dist/img/Web3.png" alt="" class="img-fluid w-100" />
              <div class="p-3">
                <span class="fs-5 fw-bold">Produk Pertanian Go Global #Sesi10</span>
                <div class="mt-2">
                  <span class="badge bg-light text-dark">12 Desember 2020</span>
                  <span class="badge bg-light text-dark">10.00 - 12.30</span>
                </div>
                <a class="btn btn-primary w-100 mt-3">Lihat Detail</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-4">
            <div class="border rounded-3">
              <img src="../dist/img/Web4.png" alt="" class="img-fluid w-100" />
              <div class="p-3">
                <span class="fs-5 fw-bold">Inovasi Produk Pangan Hasil Ternak #Sesi9</span>
                <div class="mt-2">
                  <span class="badge bg-light text-dark">10 November 2021</span>
                  <span class="badge bg-light text-dark">15:00 - 17:30</span>
                </div>
                <a class="btn btn-primary w-100 mt-3">Lihat Detail</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-4">
            <div class="border rounded-3">
              <img src="../dist/img/Web5.png" alt="" class="img-fluid w-100" />
              <div class="p-3">
                <span class="fs-5 fw-bold">Produk Perikanan GO Global #Sesi7</span>
                <div class="mt-2">
                  <span class="badge bg-light text-dark">9 November 2021</span>
                  <span class="badge bg-light text-dark">09:00 - 12:00</span>
                </div>
                <a class="btn btn-primary w-100 mt-3">Lihat Detail</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-4">
            <div class="border rounded-3">
              <img src="../dist/img/Web6.png" alt="" class="img-fluid w-100" />
              <div class="p-3">
                <span class="fs-5 fw-bold">Produk Pertanian Go Global #Sesi10</span>
                <div class="mt-2">
                  <span class="badge bg-light text-dark">12 Desember 2020</span>
                  <span class="badge bg-light text-dark">10.00 - 12.30</span>
                </div>
                <a class="btn btn-primary w-100 mt-3">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>

        <!-- PAGINATION -->
        <nav aria-label="Page navigation example" class="mt-4 d-flex align-items-center justify-content-center gap-2">
          <a href="#" class="pagenation-item">
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g opacity="0.2">
                <path d="M7.5 2L3.5 6L7.5 10" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </g>
            </svg>
          </a>
          <a href="#" class="pagenation-item active">1</a>
          <a href="#" class="pagenation-item">2</a>
          <a href="#" class="pagenation-item">3</a>
          <a href="#" class="pagenation-item">
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.5 2L8.5 6L4.5 10" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </a>
        </nav>
      </div>
      <div class="col-lg-3">

        <!-- FILTER -->
        <input class="form-control" placeholder="Cari Webinar" />
        <h5 class="font-header fw-bold mb-2">Urut Berdasarkan</h5>
        <a class="btn btn-outline-primary btn-sm w-75 mt-3 p-2">Kursus terbaru</a>
        <a class="btn btn-outline-primary btn-sm w-75 mt-3 p-2">Lama Kursus</a>
        <a class="btn btn-outline-primary btn-sm w-75 mt-3 p-2">Tanggal Kursus</a>

        <h5 class="font-header font-weight-bold mt-4">
          Promo Webinar
        </h5>
        <div class="promo">
          <img src="../dist/img/promo.png""
                class=" img-fluid w-100" alt="" />
          <div class="body">
            <a href="#">Daftar Sekarang</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

</html>