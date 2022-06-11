<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>D&S Inc. Kece Abis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url("/dist/css/bootstrap-grid.css") ?>" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url("/dist/css/bootstrap-reboot.css") ?>" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url("/dist/css/bootstrap-utilities.css") ?>" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url("/dist/css/bootstrap.css") ?>" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url("/dist/css/style.css") ?>" />
</head>

<body style="width: 100%; overflow-x: hidden;">
    <div class="container" style="background-color: #FFFFFF;">
        <form class="form-inline my-2 my-lg-0/olxx">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            <button type="button" class="btn btn-primary">Reset</button>
        </form>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sortir Dengan
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
            <button type="button" class="btn btn-primary btn-lg">Tambah Produk</button>

        </div>
    </div>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Poster</th>
                <th scope="col">Judul</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Link</th>
                <th scope="col">Atur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td><img src="../dist/img/aside image.png"/></td>
                <td>Optimalisasi Peran Koperasi dalam Sektor Riil melalui Ekosistem Digital</td>
                <td>Saat ini, pasar digital di Indonesia mencapai USD44 miliar dan pada 2025 diprediksi akan mencapai sekitar USD125 miliar.
                    Sedangkan, target penumbuhan koperasi modern pada 2024 yakni 500 unit koperasi dan untuk mencapai target tersebut, sekaligus
                    menghadapi tantangan pengembangan koperasi. Beberapa strategi dilakukan pemerintah antara lain melalui koperasi berbasis
                    inclusive closed loop yang dikembangkan sebagai koperasi multipihak, fokus koperasi di sektor riil, pembiayaan, amalgamasi,
                    dan upaya digitalisasi.

                    Pemerintah saat ini sedang mendorong terwujudnya program pengembangan korporasi petani dan nelayan (KPN) dalam rangka
                    transformasi ekonomi, yang salah satu kelembagaannya berupa koperasi dan pada 2022 direncanakan terdapat beberapa pilot
                    project terkait KPN ini.Webinar ini dilaksanakan agar generasi muda dapat membantu implementasi dan optimalisasi Koperasi
                    dengan sistem digital dan mempertahankan hal tersebut.</td>
                <td>Rabu, 10 November 2021</td>
                <td><a href="https://youtu.be/0HwqF-3YcqE">https://www.youtube.com/watch?v=0HwqF-3YcqE&feature=youtu.be</a></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</body>

</html>