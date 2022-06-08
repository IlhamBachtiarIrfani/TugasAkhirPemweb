<div class="container">
    <h1 class="mb-5">Detail Produk</h1>
    <!-- action = link controller buat proses tambah -->
    <form action="<?= base_url("Admin/C_Slider/AddProcess") ?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Nama Produk</label>
            <!-- JANLUP EDIT NAME INPUT NYA -->
            <input type="text" name="judul" class="form-control" placeholder="Nama Produk">
        </div>
        <div class="mb-3">
            <label class="form-label">Gambar Produk</label>
            <!-- JANLUP EDIT NAME INPUT NYA -->
            <input type="file" accept="image/*" name="gambar" class="form-control">
        </div>
        <div class="dropdown">
            <label for="form-label">Kategori</label>
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                Pilih Kategori
            </button>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                <li><a class="dropdown-item active" href="#">Pilih Kategori</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi Produk</label>
            <!-- JANLUP EDIT NAME INPUT NYA -->
            <textarea name="deskripsi" class="form-control" placeholder="Deskripsi Produk" rows="5"></textarea>
        </div>

        <div class="input-group mb-3">
            <label for="form-label">Harga</label>
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Rp</button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">$</a></li>
                <li><a class="dropdown-item" href="#">€</a></li>
                <li><a class="dropdown-item" href="#">¥</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
            <input type="text" class="form-control" aria-label="Text input with dropdown button">
        </div>
        <div class="mb-3">
            <label class="form-label">Pemesanan Minimum</label>
            <!-- JANLUP EDIT NAME INPUT NYA -->
            <input type="text" name="judul" class="form-control" placeholder="1">
        </div>
        <label for="form-check">Kondisi Barang</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Baru
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                Bekas
            </label>
        </div>
        <div class="dropdown">
            <label for="form-label">Etalase</label>
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                Pilih Etalase
            </button>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                <li><a class="dropdown-item active" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
        </div>

        <label for="form-check">Asuransi</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Opsional
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                Ya
            </label>
        </div>
        <!-- tombol submit -->
        <button type="submit" class="btn btn-primary">Tambah Produk</button>

        <!-- tombol back/cancel -->
        <a href="<?= base_url("Admin/C_Slider") ?>" class="btn btn-outline-primary">Batal</a>
    </form>
</div>