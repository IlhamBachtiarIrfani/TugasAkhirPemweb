<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>D&S Inc. - Detail Webinar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <!-- <link rel="stylesheet" href="Webinar.css" /> -->
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="<?=base_url("/dist/css/bootstrap-grid.css")?>"
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

    <!-- MAIN CONTENT -->
    <div class="container">
      <div class="row">
        <div class="col-lg-9 pb-4">
          <h1 class="font-header font-weight-bold">
            Optimalisasi Peran Koperasi dalam Sektor Riil melalui Ekosistem
            Digital
          </h1>
          <div class="d-flex gap-4 mt-3">
            <span>10 November 2021</span>
            <span>15:00 - 17:30</span>
          </div>

          <!-- MAIN COURSE -->
          <div class="img-fluid mt-4">
            <img src="../dist/img/promo.png" class="img-fluid w-100" />
          </div>
          <div class="mt-4 text-justify">
            <p class="px">
              Saat ini, pasar digital di Indonesia mencapai USD44 miliar dan
              pada 2025 diprediksi akan mencapai sekitar USD125 miliar.
              Sedangkan, target penumbuhan koperasi modern pada 2024 yakni 500
              unit koperasi dan untuk mencapai target tersebut, sekaligus
              menghadapi tantangan pengembangan koperasi. Beberapa strategi
              dilakukan pemerintah antara lain melalui koperasi berbasis
              inclusive closed loop yang dikembangkan sebagai koperasi
              multipihak, fokus koperasi di sektor riil, pembiayaan, amalgamasi,
              dan upaya digitalisasi.
            </p>
            <p class="px">
              Pemerintah saat ini sedang mendorong terwujudnya program
              pengembangan korporasi petani dan nelayan (KPN) dalam rangka
              transformasi ekonomi, yang salah satu kelembagaannya berupa
              koperasi dan pada 2022 direncanakan terdapat beberapa pilot
              project terkait KPN ini.Webinar ini dilaksanakan agar generasi
              muda dapat membantu implementasi dan optimalisasi Koperasi dengan
              sistem digital dan mempertahankan hal tersebut.
            </p>
            <p class="font1 mt-4">Link Webinar :</p>
            <a href="https://youtu.be/0HwqF-3YcqE">
              <img src="../dist/img/youtube.png" class="img-fluid pe-3" style="width: 150px" />
            </a>
            <a
              href="https://us04web.zoom.us/j/79579470973?pwd=RExjOGdpREM0YXVGMm9hVTE0ei94UT09"
            >
              <img src="../dist/img/zoom.png" class="img-fluid" style="width: 150px" />
            </a>
          </div>

          <!-- WEBINAR TERKAIT -->
          <h2 class="font-header font-weight-bold mt-4">Webinar Lainnya</h2>
          <div class="row">
            <div class="col-md-4">
              <div class="border rounded-3">
                <img src="../dist/img/Web2.png" alt="" class="img-fluid w-100 mt-2" />
                <div class="p-3">
                  <span class="fs-5 fw-bold"
                    >Inovasi Produk Pangan Hasil Ternak #Sesi10</span
                  >
                  <div class="mt-2 d-flex align-items-center">
                    <div class="mt-2">
                      <span class="badge bg-light text-dark"
                        >9 November 2021</span
                      >
                      <span class="badge bg-light text-dark"
                        >09:00 - 12:00</span
                      >
                    </div>
                  </div>
                  <a class="btn btn-primary w-100 mt-3">Detail Kursus</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="border rounded-3">
                <img src="../dist/img/Web3.png" alt="" class="img-fluid w-100 mt-2" />
                <div class="p-3">
                  <span class="fs-5 fw-bold"
                    >Produk Pertanian Go Global #Sesi10</span
                  >
                  <div class="mt-2 d-flex align-items-center">
                    <div class="mt-2">
                      <span class="badge bg-light text-dark"
                        >12 Desember 2020</span
                      >
                      <span class="badge bg-light text-dark"
                        >10.00 - 12.30</span
                      >
                    </div>
                  </div>
                  <a class="btn btn-primary w-100 mt-3">Detail Kursus</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="border rounded-3">
                <img src="../dist/img/Web4.png" alt="" class="img-fluid w-100 mt-2" />
                <div class="p-3">
                  <span class="fs-5 fw-bold"
                    >Inovasi Produk Pangan Hasil Ternak #Sesi9</span
                  >
                  <div class="mt-2 d-flex align-items-center">
                    <div class="mt-2">
                      <span class="badge bg-light text-dark"
                        >10 November 2021</span
                      >
                      <span class="badge bg-light text-dark"
                        >15:00 - 17:30</span
                      >
                    </div>
                  </div>
                  <a class="btn btn-primary w-100 mt-3">Detail Kursus</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 ps-lg-5">
          <div style="position: sticky; top: 20px">
            <h5 class="font-header font-weight-bold">Table of Content</h5>
            <div class="daftar-isi-item active">
              <span class="page">01</span>
              <span class="title">Poster Webinar</span>
            </div>
            <div class="daftar-isi-item">
              <span class="page">02</span>
              <span class="title">Deskripsi Webinar</span>
            </div>
            <div class="daftar-isi-item">
              <span class="page">03</span>
              <span class="title">Info Webinar</span>
            </div>
            <div class="daftar-isi-item">
              <span class="page">04</span>
              <span class="title">Webinar Lainnya</span>
            </div>

            <h5 class="font-header font-weight-bold mt-4">Share</h5>
            <div class="d-flex gap-3">
              <a href="#">
                <svg
                  width="32"
                  height="32"
                  viewBox="0 0 32 32"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M24.0007 2.66663H20.0007C18.2325 2.66663 16.5368 3.369 15.2866 4.61925C14.0364 5.86949 13.334 7.56518 13.334 9.33329V13.3333H9.33398V18.6666H13.334V29.3333H18.6673V18.6666H22.6673L24.0007 13.3333H18.6673V9.33329C18.6673 8.97967 18.8078 8.64053 19.0578 8.39048C19.3079 8.14044 19.647 7.99996 20.0007 7.99996H24.0007V2.66663Z"
                    stroke="black"
                    stroke-width="2.66667"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </a>
              <a href="#">
                <svg
                  width="32"
                  height="32"
                  viewBox="0 0 32 32"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M9.95399 1.42137C11.518 1.34937 12.0167 1.33337 16.0007 1.33337C19.9847 1.33337 20.4833 1.35071 22.046 1.42137C23.6087 1.49204 24.6753 1.74137 25.6087 2.10271C26.586 2.47204 27.4727 3.04937 28.206 3.79604C28.9527 4.52804 29.5287 5.41337 29.8967 6.39204C30.2593 7.32537 30.5073 8.39204 30.5793 9.95204C30.6513 11.5187 30.6673 12.0174 30.6673 16C30.6673 19.984 30.65 20.4827 30.5793 22.0467C30.5087 23.6067 30.2593 24.6734 29.8967 25.6067C29.5286 26.5855 28.9517 27.4723 28.206 28.2054C27.4727 28.952 26.586 29.528 25.6087 29.896C24.6753 30.2587 23.6087 30.5067 22.0487 30.5787C20.4833 30.6507 19.9847 30.6667 16.0007 30.6667C12.0167 30.6667 11.518 30.6494 9.95399 30.5787C8.39398 30.508 7.32732 30.2587 6.39398 29.896C5.41521 29.528 4.52841 28.951 3.79532 28.2054C3.04916 27.4729 2.47174 26.5866 2.10332 25.608C1.74198 24.6747 1.49398 23.608 1.42198 22.048C1.34998 20.4814 1.33398 19.9827 1.33398 16C1.33398 12.016 1.35132 11.5174 1.42198 9.95471C1.49265 8.39204 1.74198 7.32537 2.10332 6.39204C2.47228 5.41348 3.05014 4.52713 3.79665 3.79471C4.5287 3.04871 5.41461 2.4713 6.39265 2.10271C7.32598 1.74137 8.39265 1.49337 9.95265 1.42137H9.95399ZM21.9273 4.06137C20.3807 3.99071 19.9167 3.97604 16.0007 3.97604C12.0847 3.97604 11.6207 3.99071 10.074 4.06137C8.64332 4.12671 7.86732 4.36537 7.34998 4.56671C6.66598 4.83337 6.17665 5.14937 5.66332 5.66271C5.17671 6.13611 4.80222 6.71242 4.56732 7.34937C4.36598 7.86671 4.12732 8.64271 4.06198 10.0734C3.99132 11.62 3.97665 12.084 3.97665 16C3.97665 19.916 3.99132 20.38 4.06198 21.9267C4.12732 23.3574 4.36598 24.1334 4.56732 24.6507C4.80198 25.2867 5.17665 25.864 5.66332 26.3374C6.13665 26.824 6.71398 27.1987 7.34998 27.4334C7.86732 27.6347 8.64332 27.8734 10.074 27.9387C11.6207 28.0094 12.0833 28.024 16.0007 28.024C19.918 28.024 20.3807 28.0094 21.9273 27.9387C23.358 27.8734 24.134 27.6347 24.6513 27.4334C25.3353 27.1667 25.8247 26.8507 26.338 26.3374C26.8247 25.864 27.1993 25.2867 27.434 24.6507C27.6353 24.1334 27.874 23.3574 27.9393 21.9267C28.01 20.38 28.0247 19.916 28.0247 16C28.0247 12.084 28.01 11.62 27.9393 10.0734C27.874 8.64271 27.6353 7.86671 27.434 7.34937C27.1673 6.66537 26.8513 6.17604 26.338 5.66271C25.8646 5.17614 25.2883 4.80166 24.6513 4.56671C24.134 4.36537 23.358 4.12671 21.9273 4.06137ZM14.1273 20.5214C15.1735 20.9569 16.3385 21.0157 17.4232 20.6877C18.508 20.3597 19.4452 19.6653 20.0748 18.723C20.7044 17.7808 20.9874 16.6492 20.8754 15.5215C20.7634 14.3938 20.2633 13.34 19.4607 12.54C18.949 12.0287 18.3303 11.6371 17.6491 11.3936C16.9679 11.15 16.2412 11.0605 15.5213 11.1315C14.8014 11.2025 14.1062 11.4323 13.4857 11.8042C12.8653 12.1762 12.335 12.681 11.9331 13.2825C11.5311 13.884 11.2676 14.5671 11.1613 15.2827C11.0551 15.9982 11.1089 16.7284 11.3187 17.4207C11.5286 18.113 11.8893 18.7502 12.3749 19.2863C12.8606 19.8225 13.4591 20.2443 14.1273 20.5214ZM10.67 10.6694C11.37 9.96934 12.2011 9.41404 13.1157 9.03519C14.0304 8.65633 15.0107 8.46134 16.0007 8.46134C16.9906 8.46134 17.971 8.65633 18.8856 9.03519C19.8002 9.41404 20.6313 9.96934 21.3313 10.6694C22.0314 11.3694 22.5866 12.2005 22.9655 13.1151C23.3444 14.0297 23.5394 15.01 23.5394 16C23.5394 16.99 23.3444 17.9703 22.9655 18.885C22.5866 19.7996 22.0314 20.6307 21.3313 21.3307C19.9175 22.7445 18 23.5387 16.0007 23.5387C14.0013 23.5387 12.0838 22.7445 10.67 21.3307C9.2562 19.9169 8.46195 17.9994 8.46195 16C8.46195 14.0007 9.2562 12.0832 10.67 10.6694ZM25.2113 9.58404C25.3848 9.4204 25.5237 9.22362 25.6197 9.00534C25.7158 8.78706 25.7671 8.55173 25.7705 8.31328C25.774 8.07483 25.7296 7.8381 25.64 7.61712C25.5503 7.39614 25.4172 7.19539 25.2486 7.02676C25.08 6.85813 24.8792 6.72505 24.6582 6.6354C24.4373 6.54574 24.2005 6.50134 23.9621 6.50482C23.7236 6.50829 23.4883 6.55958 23.27 6.65564C23.0517 6.75169 22.855 6.89057 22.6913 7.06404C22.3731 7.40141 22.1988 7.84954 22.2056 8.31328C22.2123 8.77703 22.3996 9.21988 22.7275 9.54783C23.0555 9.87578 23.4983 10.063 23.9621 10.0698C24.4258 10.0765 24.8739 9.90229 25.2113 9.58404Z"
                    fill="black"
                  />
                </svg>
              </a>
              <a href="#">
                <svg
                  width="32"
                  height="32"
                  viewBox="0 0 32 32"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g clip-path="url(#clip0_254_51)">
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M23.22 19.1761C22.8227 18.9774 20.8747 18.0201 20.512 17.8867C20.1493 17.7547 19.8853 17.6894 19.62 18.0867C19.356 18.4814 18.5973 19.3747 18.3667 19.6387C18.1347 19.9041 17.904 19.9361 17.508 19.7387C17.112 19.5387 15.8347 19.1214 14.3213 17.7721C13.144 16.7214 12.348 15.4241 12.1173 15.0267C11.8867 14.6307 12.092 14.4161 12.2907 14.2187C12.4693 14.0414 12.6867 13.7561 12.8853 13.5254C13.084 13.2934 13.1493 13.1281 13.2813 12.8627C13.4147 12.5987 13.348 12.3681 13.248 12.1694C13.1493 11.9707 12.3573 10.0201 12.0267 9.22672C11.7053 8.45472 11.3787 8.56005 11.136 8.54672C10.904 8.53605 10.64 8.53339 10.376 8.53339C10.112 8.53339 9.68267 8.63205 9.32 9.02939C8.956 9.42539 7.93333 10.3841 7.93333 12.3347C7.93333 14.2841 9.352 16.1681 9.55067 16.4334C9.74933 16.6974 12.344 20.7001 16.3187 22.4161C17.2653 22.8241 18.0027 23.0681 18.5773 23.2494C19.5267 23.5521 20.3907 23.5094 21.0733 23.4067C21.8333 23.2934 23.4173 22.4481 23.748 21.5227C24.0773 20.5974 24.0773 19.8041 23.9787 19.6387C23.88 19.4734 23.616 19.3747 23.2187 19.1761H23.22ZM15.9907 29.0467H15.9853C13.6246 29.0472 11.3072 28.4125 9.276 27.2094L8.796 26.9241L3.80667 28.2334L5.13867 23.3694L4.82533 22.8707C3.50552 20.7699 2.80706 18.3384 2.81067 15.8574C2.81333 8.59072 8.72533 2.67872 15.996 2.67872C19.516 2.67872 22.8253 4.05205 25.3133 6.54272C26.5405 7.76483 27.5132 9.21814 28.175 10.8186C28.8369 12.419 29.1749 14.1348 29.1693 15.8667C29.1667 23.1334 23.2547 29.0467 15.9907 29.0467ZM27.2067 4.65072C25.7376 3.17195 23.9896 1.99944 22.0641 1.20112C20.1386 0.402806 18.0738 -0.005435 15.9893 5.46367e-05C7.25067 5.46367e-05 0.136 7.11339 0.133333 15.8561C0.132 18.6507 0.861333 21.3787 2.24933 23.7827L0 32.0001L8.40533 29.7947C10.7305 31.0616 13.3361 31.7253 15.984 31.7254H15.9907C24.7293 31.7254 31.844 24.6121 31.8467 15.8681C31.8531 13.7844 31.4463 11.7202 30.6499 9.79477C29.8535 7.86934 28.6832 6.12095 27.2067 4.65072Z"
                      fill="black"
                    />
                  </g>
                  <defs>
                    <clipPath id="clip0_254_51">
                      <rect width="32" height="32" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </a>
              <a href="#">
                <svg
                  width="32"
                  height="32"
                  viewBox="0 0 32 32"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M30.6673 3.99998C29.3905 4.90062 27.9768 5.58946 26.4807 6.03998C25.6776 5.11666 24.6104 4.46224 23.4234 4.16521C22.2363 3.86819 20.9866 3.94291 19.8434 4.37925C18.7002 4.81559 17.7186 5.59252 17.0313 6.60494C16.344 7.61736 15.9842 8.81643 16.0007 10.04V11.3733C13.6575 11.4341 11.3357 10.9144 9.242 9.86057C7.14831 8.80675 5.34774 7.25149 4.00065 5.33331C4.00065 5.33331 -1.33268 17.3333 10.6673 22.6666C7.92135 24.5306 4.65019 25.4652 1.33398 25.3333C13.334 32 28.0007 25.3333 28.0007 9.99998C27.9994 9.62858 27.9637 9.25811 27.894 8.89331C29.2548 7.5513 30.2151 5.85693 30.6673 3.99998V3.99998Z"
                    stroke="black"
                    stroke-width="2.66667"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </a>
              <a href="#">
                <svg
                  width="32"
                  height="32"
                  viewBox="0 0 32 32"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M12 16H20"
                    stroke="black"
                    stroke-width="2.66667"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M20 8H21.3333C23.4551 8 25.4899 8.84286 26.9902 10.3431C28.4905 11.8434 29.3333 13.8783 29.3333 16C29.3333 18.1217 28.4905 20.1566 26.9902 21.6569C25.4899 23.1571 23.4551 24 21.3333 24H20"
                    stroke="black"
                    stroke-width="2.66667"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M11.9993 24H10.666C8.54428 24 6.50945 23.1571 5.00916 21.6569C3.50887 20.1566 2.66602 18.1217 2.66602 16C2.66602 13.8783 3.50887 11.8434 5.00916 10.3431C6.50945 8.84286 8.54428 8 10.666 8H11.9993"
                    stroke="black"
                    stroke-width="2.66667"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </a>
            </div>

            <h5 class="font-header font-weight-bold mt-4">Promo Webinar</h5>
            <div class="promo">
              <img src="../dist/img/promo.png" class="img-fluid w-100" alt="" />
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
