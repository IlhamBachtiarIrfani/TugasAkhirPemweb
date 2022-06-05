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
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Produk dan Toko</th>
      <th scope="col">Nama Varian</th>
      <th scope="col">SKU</th>
      <th scope="col">Stok SKU</th>
      <th scope="col">Harga</th>
      <th scope="col">Stok</th>
      <th scope="col">Waktu</th>
      <th scope="col">Atur</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>-</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>-</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>-</td>
    </tr>
  </tbody>
</table>
</body>

</html>