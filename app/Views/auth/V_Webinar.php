<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>D&S Inc. - Webinar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?=base_url("Webinar.css")?>" />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="<?=base_url("dist/css/bootstrap-grid.css")?>"
    />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="<?=base_url("/dist/css/bootstrap-reboot.css")?>"
    />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="<?=base_url("/dist/css/bootstrap-utilities.css")?>"
    />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="<?=base_url("/dist/css/bootstrap.css")?>"
    />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="<?=base_url("/dist/css/style.css")?>"
    />
  </head>

  <body>
  <!-- Header  -->
    <div class="container">
      <header
        class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom"
      >
        <a
          href="/"
          class="
            d-flex
            align-items-center
            mb-3 mb-md-0
            me-md-auto
            text-dark text-decoration-none
          "
        >
          <!-- LOGO -->
          <svg
            width="21"
            height="25"
            viewBox="0 0 21 25"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M11.736 1.08806C10.408 0.368057 8.856 0.00805664 7.08 0.00805664H0V17.0001H7.08C8.1107 17.0001 9.06595 16.8761 9.94576 16.6282C10.4895 16.8663 11.1078 17.1077 11.8008 17.3522C12.7128 17.6722 13.3848 17.9602 13.8168 18.2162C14.2488 18.4562 14.4648 18.7762 14.4648 19.1762C14.4648 19.4642 14.3608 19.6802 14.1528 19.8242C13.9608 19.9522 13.7208 20.0162 13.4328 20.0162C12.6488 20.0162 12.2168 19.5282 12.1368 18.5522H6.47278C6.58478 20.3922 7.29678 21.7922 8.60878 22.7522C9.93678 23.6962 11.6168 24.1682 13.6488 24.1682C14.9928 24.1682 16.1528 23.9362 17.1288 23.4722C18.1048 23.0082 18.8488 22.3682 19.3608 21.5522C19.8728 20.7202 20.1288 19.7842 20.1288 18.7442C20.1288 17.7522 19.8728 16.9282 19.3608 16.2722C18.8488 15.6162 18.2408 15.1042 17.5368 14.7362C16.8488 14.3682 15.9688 13.9842 14.8968 13.5842C14.7471 13.5275 14.6039 13.4722 14.4671 13.4183C14.5966 13.227 14.7182 13.0289 14.832 12.8241C14.9425 12.6252 15.0445 12.4226 15.138 12.2162H19.9128C19.8488 10.4722 19.2008 9.12024 17.9688 8.16024C17.3609 7.68031 16.645 7.32035 15.8211 7.08035C15.6729 5.99421 15.3432 4.99678 14.832 4.08806C14.112 2.80806 13.08 1.80806 11.736 1.08806ZM10.3322 7.09391C11.155 6.8448 12.0525 6.72024 13.0248 6.72024C14.0649 6.72024 14.997 6.84028 15.8211 7.08035C15.8817 7.52411 15.912 7.98268 15.912 8.45606C15.912 9.82412 15.654 11.0775 15.138 12.2162H14.1768C14.1608 11.7362 14.0408 11.3922 13.8168 11.1842C13.5928 10.9762 13.3208 10.8722 13.0008 10.8722C12.7768 10.8722 12.5928 10.9522 12.4488 11.1122C12.3048 11.2562 12.2328 11.4642 12.2328 11.7362C12.2328 12.1202 12.4408 12.4402 12.8568 12.6962C13.2191 12.8975 13.7559 13.1382 14.4671 13.4183C13.7779 14.437 12.8675 15.2629 11.736 15.8961C11.1787 16.2049 10.582 16.449 9.94576 16.6282C9.63585 16.4925 9.35018 16.3578 9.08878 16.2242C8.38478 15.8562 7.77678 15.3202 7.26478 14.6162C6.80697 13.9868 6.56023 13.1974 6.52457 12.2481H6.6C7.8 12.2481 8.752 11.9201 9.456 11.2641C10.16 10.6081 10.512 9.67206 10.512 8.45606C10.512 7.95434 10.4521 7.50029 10.3322 7.09391ZM10.3322 7.09391C10.1124 7.16046 9.89793 7.23591 9.68878 7.32024C8.71278 7.72024 7.93678 8.31224 7.36078 9.09624C6.80078 9.86424 6.52078 10.8002 6.52078 11.9042C6.51909 12.0211 6.52035 12.1357 6.52457 12.2481H5.328V4.66406H6.6C7.8 4.66406 8.752 4.99206 9.456 5.64806C9.86953 6.0334 10.1616 6.51535 10.3322 7.09391Z"
              fill="black"
            />
          </svg>

          <span class="fs-4 ms-2"><strong>D&S inc.</strong></span>
        </a>

        <ul class="nav">
          <li class="nav-item">
            <a href="home.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="produk.html" class="nav-link">UMKM</a>
          </li>
          <li class="nav-item">
            <a href="webinar.html" class="nav-link active">Webinar</a>
          </li>
          <li class="nav-item">
            <a href="list_course.html" class="nav-link">Kursus</a>
          </li>
          <li class="nav-item">
            <a href="mitra.html" class="nav-link">Mitra</a>
          </li>
          <li class="nav-item">
            <a href="tentang_kami.html" class="nav-link">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link py-0">
              <div class="d-flex gap-3 align-items-center">
                <img src="../dist/img/user.png" />
                <span>Budi Firmawan</span>
              </div>
            </a>
          </li>
        </ul>
      </header>
    </div>

    <!-- Banner -->
    <div class="container col-xxl-8 px-4 py-5">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-2">
        <div class="col-10 col-sm-8 col-lg-6">
          <img
            src="../dist/img/pana.png"
            class="d-block mx-lg-auto img-fluid"
            alt="Bootstrap Themes"
            width="700"
            height="500"
            loading="lazy"
          />
        </div>
        <div class="col-lg-6">
          <!-- TITLE -->
          <h1 class="display-5 fw-bold lh-1 mb-3 font-header">
            Asah Kemampuan Bisnismu dengan mentor terbaik!
          </h1>
          <!-- SUBTITLE -->
          <p class="lead mt-4">
            Tingkatkan kemampuan berbisnis online kamu bersama dengan D&S Inc
          </p>
          <a class="btn btn-primary w-50 mt-3">Lihat Webinar</a>
        </div>
      </div>
    </div>

    <!-- MAIN SECTION -->
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
                  <span class="fs-5 fw-bold"
                    >Optimalisasi Peran Koperasi dalam Sektor...</span
                  >
                  <div class="mt-2">
                    <span class="badge bg-light text-dark">10 November 2021</span>
                    <span class="badge bg-light text-dark">15:00 - 17:30</span>
                  </div>
                  <a href="V_DetailWebinar.php"class="btn btn-primary w-100 mt-3">Lihat Detail</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="border rounded-3">
                <img src="../dist/img/Web2.png" alt="" class="img-fluid w-100" />
                <div class="p-3">
                  <span class="fs-5 fw-bold"
                    >Inovasi Produk Pangan Hasil Ternak #Sesi10</span
                  >
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
                  <span class="fs-5 fw-bold"
                    >Produk Pertanian Go Global #Sesi10</span
                  >
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
                  <span class="fs-5 fw-bold"
                    >Inovasi Produk Pangan Hasil Ternak #Sesi9</span
                  >
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
                  <span class="fs-5 fw-bold"
                    >Produk Perikanan GO Global #Sesi7</span
                  >
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
                  <span class="fs-5 fw-bold"
                    >Produk Pertanian Go Global #Sesi10</span
                  >
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
          <nav
            aria-label="Page navigation example"
            class="mt-4 d-flex align-items-center justify-content-center gap-2"
          >
            <a href="#" class="pagenation-item">
              <svg
                width="12"
                height="12"
                viewBox="0 0 12 12"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g opacity="0.2">
                  <path
                    d="M7.5 2L3.5 6L7.5 10"
                    stroke="black"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </g>
              </svg>
            </a>
            <a href="#" class="pagenation-item active">1</a>
            <a href="#" class="pagenation-item">2</a>
            <a href="#" class="pagenation-item">3</a>
            <a href="#" class="pagenation-item">
              <svg
                width="12"
                height="12"
                viewBox="0 0 12 12"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M4.5 2L8.5 6L4.5 10"
                  stroke="black"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
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
            <img
                src="../dist/img/promo.png""
                class="img-fluid w-100"
                alt=""
            />
            <div class="body">
                <a href="#">Daftar Sekarang</a>
            </div>
        </div>
      </div>
        </div>
      </div>
    </div>

    <!-- FOOTER -->
    <div class="bg-primary">
      <div class="container">
        <footer class="row py-5 mt-5 border-top">
          <div class="col-md-6 col-sm-4">
            <a
              href="/"
              class="
                d-flex
                align-items-center
                mb-3
                link-dark
                text-decoration-none
              "
            >
              <!-- LOGO -->
              <svg
                width="42"
                height="50"
                viewBox="0 0 21 25"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M11.736 1.08806C10.408 0.368057 8.856 0.00805664 7.08 0.00805664H0V17.0001H7.08C8.1107 17.0001 9.06595 16.8761 9.94576 16.6282C10.4895 16.8663 11.1078 17.1077 11.8008 17.3522C12.7128 17.6722 13.3848 17.9602 13.8168 18.2162C14.2488 18.4562 14.4648 18.7762 14.4648 19.1762C14.4648 19.4642 14.3608 19.6802 14.1528 19.8242C13.9608 19.9522 13.7208 20.0162 13.4328 20.0162C12.6488 20.0162 12.2168 19.5282 12.1368 18.5522H6.47278C6.58478 20.3922 7.29678 21.7922 8.60878 22.7522C9.93678 23.6962 11.6168 24.1682 13.6488 24.1682C14.9928 24.1682 16.1528 23.9362 17.1288 23.4722C18.1048 23.0082 18.8488 22.3682 19.3608 21.5522C19.8728 20.7202 20.1288 19.7842 20.1288 18.7442C20.1288 17.7522 19.8728 16.9282 19.3608 16.2722C18.8488 15.6162 18.2408 15.1042 17.5368 14.7362C16.8488 14.3682 15.9688 13.9842 14.8968 13.5842C14.7471 13.5275 14.6039 13.4722 14.4671 13.4183C14.5966 13.227 14.7182 13.0289 14.832 12.8241C14.9425 12.6252 15.0445 12.4226 15.138 12.2162H19.9128C19.8488 10.4722 19.2008 9.12024 17.9688 8.16024C17.3609 7.68031 16.645 7.32035 15.8211 7.08035C15.6729 5.99421 15.3432 4.99678 14.832 4.08806C14.112 2.80806 13.08 1.80806 11.736 1.08806ZM10.3322 7.09391C11.155 6.8448 12.0525 6.72024 13.0248 6.72024C14.0649 6.72024 14.997 6.84028 15.8211 7.08035C15.8817 7.52411 15.912 7.98268 15.912 8.45606C15.912 9.82412 15.654 11.0775 15.138 12.2162H14.1768C14.1608 11.7362 14.0408 11.3922 13.8168 11.1842C13.5928 10.9762 13.3208 10.8722 13.0008 10.8722C12.7768 10.8722 12.5928 10.9522 12.4488 11.1122C12.3048 11.2562 12.2328 11.4642 12.2328 11.7362C12.2328 12.1202 12.4408 12.4402 12.8568 12.6962C13.2191 12.8975 13.7559 13.1382 14.4671 13.4183C13.7779 14.437 12.8675 15.2629 11.736 15.8961C11.1787 16.2049 10.582 16.449 9.94576 16.6282C9.63585 16.4925 9.35018 16.3578 9.08878 16.2242C8.38478 15.8562 7.77678 15.3202 7.26478 14.6162C6.80697 13.9868 6.56023 13.1974 6.52457 12.2481H6.6C7.8 12.2481 8.752 11.9201 9.456 11.2641C10.16 10.6081 10.512 9.67206 10.512 8.45606C10.512 7.95434 10.4521 7.50029 10.3322 7.09391ZM10.3322 7.09391C10.1124 7.16046 9.89793 7.23591 9.68878 7.32024C8.71278 7.72024 7.93678 8.31224 7.36078 9.09624C6.80078 9.86424 6.52078 10.8002 6.52078 11.9042C6.51909 12.0211 6.52035 12.1357 6.52457 12.2481H5.328V4.66406H6.6C7.8 4.66406 8.752 4.99206 9.456 5.64806C9.86953 6.0334 10.1616 6.51535 10.3322 7.09391Z"
                  fill="black"
                />
              </svg>
            </a>
            <p class="col-lg-6">
              Menjadi pengusaha yang sukses, Bersama UMKM bantu bangun ekonomi
              negara Indonesia. <br /><br />
              email : info@dnsinc.com
            </p>
          </div>

          <div class="col-md-3 col-sm-4">
            <h5 class="font-header font-weight-bold">Fitur kami</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0">Webinar</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0">Kursus</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0">Produk</a>
              </li>
            </ul>
          </div>
          <div class="col-md-3 col-sm-4">
            <h5 class="font-header font-weight-bold">Tentang kami</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0">Bantuan</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0">Tentang Kami</a>
              </li>
            </ul>
          </div>
        </footer>
      </div>
    </div>
    <div class="py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-6">Made with ♥ by D&S Inc.</div>
          <div class="col-md-6 d-flex justify-content-md-end">
            &copy; copyright 2021
          </div>
        </div>
      </div>
    </div>
  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"
  ></script>
</html>
