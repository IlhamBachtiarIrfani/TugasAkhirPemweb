<div class="container py-5">
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

<!-- MAIN SECTION -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="font-header">Mitra UMKM D&S Inc.</h2>
        </div>
        <div class="col-lg-9 mb-4">
            <!-- SEARCH BAR -->
            <input class="form-control" placeholder="Cari mitra" />

            <!-- GRID -->
            <div class="row mt-4">
                <!-- MITRA ITEM -->
                <div class="col-md-4">
                    <div class="border rounded-3">
                        <img src=<?= base_url("/dist/img/mitra-sunny.png") ?> alt="" class="img-fluid w-100" />
                        <div class="p-3">
                            <span class="fs-5 fw-bold">Sunny Day</span>
                            <div class="mt-2">
                                <span class="badge bg-light text-dark">Makanan</span>
                                <span class="badge bg-light text-dark">Malang</span>
                            </div>
                            <a class="btn btn-primary w-100 mt-3">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="border rounded-3">
                        <img src=<?= base_url("/dist/img/mitra-balenciaga.png") ?> alt="" class="img-fluid w-100" />
                        <div class="p-3">
                            <span class="fs-5 fw-bold">Balenciaga</span>
                            <div class="mt-2">
                                <span class="badge bg-light text-dark">Fashion</span>
                                <span class="badge bg-light text-dark">Malang</span>
                            </div>
                            <a class="btn btn-primary w-100 mt-3">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="border rounded-3">
                        <img src=<?= base_url("/dist/img/mitra-cakalele.png") ?> alt="" class="img-fluid w-100" />
                        <div class="p-3">
                            <span class="fs-5 fw-bold">Cakalele</span>
                            <div class="mt-2">
                                <span class="badge bg-light text-dark">Fashion</span>
                                <span class="badge bg-light text-dark">Malang</span>
                            </div>
                            <a class="btn btn-primary w-100 mt-3">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="border rounded-3">
                        <img src=<?= base_url("/dist/img/mitra-saung-ayanan.png") ?> alt="" class="img-fluid w-100" />
                        <div class="p-3">
                            <span class="fs-5 fw-bold">Saung Layanan</span>
                            <div class="mt-2">
                                <span class="badge bg-light text-dark">Makanan</span>
                                <span class="badge bg-light text-dark">Malang</span>
                            </div>
                            <a class="btn btn-primary w-100 mt-3">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="border rounded-3">
                        <img src=<?= base_url("/dist/img/mitra-kripik-pisang.png") ?> alt="" class="img-fluid w-100" />
                        <div class="p-3">
                            <span class="fs-5 fw-bold">Keripik Pisang</span>
                            <div class="mt-2">
                                <span class="badge bg-light text-dark">Makanan</span>
                                <span class="badge bg-light text-dark">Malang</span>
                            </div>
                            <a class="btn btn-primary w-100 mt-3">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="border rounded-3">
                        <img src=<?= base_url("/dist/img/mitra-heroes-anthem.png") ?> alt="" class="img-fluid w-100" />
                        <div class="p-3">
                            <span class="fs-5 fw-bold">Heroes Anthem</span>
                            <div class="mt-2">
                                <span class="badge bg-light text-dark">Fashion</span>
                                <span class="badge bg-light text-dark">Malang</span>
                            </div>
                            <a class="btn btn-primary w-100 mt-3">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PAGINATION -->
            <nav aria-label="Page navigation example" class="
                            mt-4
                            d-flex
                            align-items-center
                            justify-content-center
                            gap-2
                        ">
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
            <!-- FILTER KOTA -->
            <h4 class="font-header fw-bold mb-2">Kota</h4>
            <div class="d-flex flex-wrap gap-2">
                <div>
                    <input type="checkbox" class="btn-check" id="btn-city-malang" autocomplete="off" />
                    <label class="btn btn-outline-primary btn-sm" for="btn-city-malang">Malang</label>
                </div>
                <div>
                    <input type="checkbox" class="btn-check" id="btn-city-surabaya" autocomplete="off" />
                    <label class="btn btn-outline-primary btn-sm" for="btn-city-surabaya">Surabaya</label>
                </div>
                <div>
                    <input type="checkbox" class="btn-check" id="btn-city-jakarta" autocomplete="off" />
                    <label class="btn btn-outline-primary btn-sm" for="btn-city-jakarta">Jakarta</label>
                </div>
                <div>
                    <input type="checkbox" class="btn-check" id="btn-city-palembang" autocomplete="off" />
                    <label class="btn btn-outline-primary btn-sm" for="btn-city-palembang">Palembang</label>
                </div>
                <div>
                    <input type="checkbox" class="btn-check" id="btn-city-bekasi" autocomplete="off" />
                    <label class="btn btn-outline-primary btn-sm" for="btn-city-bekasi">Bekasi</label>
                </div>
                <div>
                    <input type="checkbox" class="btn-check" id="btn-city-Yogyakarta" autocomplete="off" />
                    <label class="btn btn-outline-primary btn-sm" for="btn-city-Yogyakarta">Yogyakarta</label>
                </div>
            </div>
            <div class="
                            d-flex
                            justify-content-center
                            align-items-center
                            gap-2
                            mt-2
                        ">
                <span>Kota Lainnya</span>
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.33398 5.25L7.00065 9.91667L11.6673 5.25" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>

            <h4 class="font-header fw-bold mb-2 mt-4">Kategori</h4>
            <div class="d-flex flex-wrap gap-2">
                <div>
                    <input type="checkbox" class="btn-check" id="btn-category-makanan" autocomplete="off" />
                    <label class="btn btn-outline-primary btn-sm" for="btn-category-makanan">Makanan</label>
                </div>
                <div>
                    <input type="checkbox" class="btn-check" id="btn-category-Fashion" autocomplete="off" />
                    <label class="btn btn-outline-primary btn-sm" for="btn-category-Fashion">Fashion</label>
                </div>
                <div>
                    <input type="checkbox" class="btn-check" id="btn-category-Kerajinan" autocomplete="off" />
                    <label class="btn btn-outline-primary btn-sm" for="btn-category-Kerajinan">Kerajinan</label>
                </div>
                <div>
                    <input type="checkbox" class="btn-check" id="btn-category-Agrobisnis" autocomplete="off" />
                    <label class="btn btn-outline-primary btn-sm" for="btn-category-Agrobisnis">Agrobisnis</label>
                </div>
                <div>
                    <input type="checkbox" class="btn-check" id="btn-category-Kosmetik" autocomplete="off" />
                    <label class="btn btn-outline-primary btn-sm" for="btn-category-Kosmetik">Kosmetik</label>
                </div>
                <div>
                    <input type="checkbox" class="btn-check" id="btn-category-Otomotif" autocomplete="off" />
                    <label class="btn btn-outline-primary btn-sm" for="btn-category-Otomotif">Otomotif</label>
                </div>
            </div>
        </div>
    </div>
</div>
