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
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <ul class="nav">
                <li class="nav-item">
                    <a href="<?= base_url() ?>" class="nav-link">Aktif</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url("C_ProdukMitra") ?>" class="nav-link">Nonaktif</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url("C_Webinar") ?>" class="nav-link">Habis</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url() ?>" class="nav-link ">Dilarang</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url() ?>" class="nav-link">Draft</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url() ?>" class="nav-link">Sedang Diproses</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url() ?>" class="nav-link">Gagal Ditampilkan</a>
                </li>
            </ul>
    </div>
</body>

</html>