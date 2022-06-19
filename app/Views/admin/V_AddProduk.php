<div class="container">
    <h1 class="mb-5">Detail Produk</h1>
    <!-- action = link controller buat proses tambah -->
    <form action="<?= base_url("Admin/C_Slider/AddProcess") ?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3 row g-3 align-items-center">
            <div class="col-3">
                <label class="form-label">Nama Produk</label>
            </div>
            <div class="col-9">
                <input type="text" name="judul" class="form-control" placeholder="Nama Produk">
            </div>
        </div>
        <div class="mb-3 row g-3 align-items-center">
            <div class="col-3">
                <label class="form-label">Gambar Produk</label>
            </div>
            <div class="col-9">
                <input type="file" accept="image/*" name="gambar" class="form-control">
            </div>
        </div>
        <div class="mb-3 row g-3 align-items-start mt-3">
            <div class="col-3">
                <label class="form-label">Deskripsi Produk</label>
            </div>
            <div class="col-9"> <textarea name="deskripsi" class="form-control" placeholder="Deskripsi Produk" rows="5"></textarea>
            </div>
        </div>

        <div class="row g-3 align-items-center">
            <div class="col-3">
                <label for="form-label">Harga</label>
            </div>
            <div class="col-9">
                <div class="input-group mb-3">
                    <span class="input-group-text">Rp</span>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text">.00</span>
                </div>
            </div>
        </div>
        <!-- tombol submit -->
        <button type="submit" class="btn btn-primary">Tambah Produk</button>

        <!-- tombol back/cancel -->
        <a href="<?= base_url("Admin/C_Slider") ?>" class="btn btn-outline-primary">Batal</a>
    </form>
</div>