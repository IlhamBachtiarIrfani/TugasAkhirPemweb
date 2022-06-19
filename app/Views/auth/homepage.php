<!---- Section Selengkapnya Start ------------------------------------------------------------>
<div class="container my-5">
    <div class=" row">
        <div class="col-lg-6">
            <h1 class="mt-5 mb-3" style="font-family: Playfair Display; font-weight: 900; font-size: 32px">
                Menjadi Pengusaha Sukses, Bangun Ekonomi Negara Bersama UMKM
            </h1>
            <p class="my-4">
                Tingkatkan kemampuan kamu menjadi pengusaha sukses bersama D&S Inc. Selain meningkatkan kemampuan kamu,
                kami juga membantu UMKM dari seluruh daerah di Indonesia agar bersama-sama membangkitkan ekonomi negara
                yang sempat hancur.
        </div>
        <div class="col-lg-6">
            <img src="../dist/img/rafiki.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="473" height="362" loading="lazy">
        </div>

    </div>
</div>
<!---- Section Selengkapnya End ------------------------------------------------------------>
<!---- Section Gabung Start ------------------------------------------------------------>
<div style=" background-color: #F2AF29;">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center mt-5 mb-3" style="font-family: Playfair Display; font-weight: 900; font-size: 32px">Gabung dan Tingkatkan
                    Kemampuan
                    wirausahamu</h1>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="p-1 mb-2 bg-white rounded"><img src="../dist/img/kursus.png" style="font-family: Poppins; font-weight: 150; font-size: 32px"> 512 KURSUS TERSEDIA </div>
            </div>
            <div class="col-lg-4">
                <div class="p-1 mb-2 bg-white rounded"><img src="../dist/img/kerjasama.png" style="font-family: Poppins; font-weight: 150; font-size: 32px"> 512 KERJA SAMA MITRA </div>
            </div>
            <div class="col-lg-4">
                <div class="p-1 mb-2 bg-white rounded"><img src="../dist/img/toko.png" style="font-family: Poppins; font-weight: 150; font-size: 32px"> 892 UMKM BERGABUNG </div>
            </div>
        </div>
    </div>
</div>

<!---- Section Gabung End ------------------------------------------------------------>


<!---- Section Tentang Kami Start ------------------------------------------------------------>

<div class="container my-5">
    <div class=" row mt-5">
        <div class="col-lg-6">
            <img src="../dist/img/hihi.png" class="d-block img-fluid" alt="Bootstrap Themes" width="473" height="362" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="mt-5 mb-3" style="font-family: Playfair Display; font-weight: 900; font-size: 32px;">
                Tentang Kami
            </h1>
            <p class="my-4">
                D&S Inc adalah website yang diluncurkan pada 10 November 2020. D&S Inc berfokus pada penyebaran produk
                UMKM di berbagai daerah dengan menawarkan course dan webinar bagi produsen UMKM maupun customer yang
                ingin mempelajari tentang bisnis online.
            </p>
            <p class="my-4"> Tak perlu waktu lama, satu tahun setelah proses launching dari D&S Inc, website D&S Inc
                berhasil
                melakukan kerjasama dengan 512 mitra, membuat 892 UMKM bergabung dengan website, dan menawarkan 1302
                course yang dapat diakses oleh masyarakat.</p>
            <button type="button" class="btn btn-warning px-4 py-2">Selengkapnya</button>
        </div>
        <div class="" height="150px"></div>

    </div>
</div>

<!---- Section Tentang Kami End ------------------------------------------------------------>

<!---- Section Pendapat Mereka Start ------------------------------------------------------------>

<div class="container mt-5">
    <div class="row mt-5 pt-5">
        <div class="col-lg-12 mx-auto pt-5">
            <h1 class="text-center mt-5 mb-3" style="font-family: Playfair Display; font-weight: 900; font-size: 32px;">Pendapat Mereka</h1>
            <div class="owl-carousel owl-theme owl">
                <?php foreach ($FeedbackData as $key => $item) { ?>
                    <div class="col-lg-10 mb-5 float-left">
                        <div class="p-1 mb-2 md-12 bg-warning rounded">
                            <img src="https://xsgames.co/randomusers/assets/avatars/pixel/29.jpg" alt="foto" style="width:60px;" class="rounded-circle">
                            <div>
                                <h3 class="text-center"><?= $item["Nama"] ?></h3>
                            </div>
                            <div>
                                <h5 class="text-center"><?= $item["Title"] ?></h5>
                            </div>
                            <div class="text-center"><?= $item["Rating"] ?>/5</div>
                            <div><?= $item["Deskripsi"] ?></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="col-md-12 text-center">
                <a href="<?php echo base_url("C_AddFeedback") ?>" class="btn btn-warning center px-4 py-2">Tambah Pendapat Anda</a>
            </div>
        </div>
    </div>
</div>
</div>
<!---- Section Pendapat Mereka End ------------------------------------------------------------>

<!-- Script JS Pendapat -->
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
            items: 2,
        });
    });
</script>