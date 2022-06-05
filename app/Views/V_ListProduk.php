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
                <th scope="col">
                    <div class="form-check">
                        <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                    </div>
                </th>
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
                <th scope="row">
                    <div class="form-check">
                        <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                    </div>
                </th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>-</td>
                <td>Rp 95.000</td>
                <td>999</td>
                <td>Waktu Pembuatan <br>
                    22-11-2020 <br>
                    Waktu Pembauran <br>
                    27-11-2020</td>
                <td>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                    </svg>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                    </div>
                </th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>-</td>
                <td>Rp 100.000</td>
                <td>99</td>
                <td>Waktu Pembuatan <br>
                    22-11-2020 <br>
                    Waktu Pembauran <br>
                    27-11-2020</td>
                    <td>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                    </svg>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                    </div>
                </th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td>-</td>
                <td>Rp 250.000</td>
                <td>20</td>
                <td>Waktu Pembuatan <br>
                    22-11-2020 <br>
                    Waktu Pembauran <br>
                    27-11-2020</td>
                    <td>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                    </svg>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>