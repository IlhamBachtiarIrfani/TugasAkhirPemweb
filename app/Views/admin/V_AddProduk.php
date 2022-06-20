<div class="container">
    <h1 class="mb-5">Tambah Produk</h1>
    <!-- action = link controller buat proses tambah -->
    <form action="<?= base_url("Admin/C_Produk/AddProcess") ?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label  class="form-label">Nama Produk</label>
            <!-- JANLUP EDIT NAME INPUT NYA -->
            <input type="text" name="nama" class="form-control" placeholder="Nama Produk">
        </div>

        <div class="mb-3">
            <label  class="form-label">Deskripsi Produk</label>
            <!-- JANLUP EDIT NAME INPUT NYA -->
            <textarea name="deskripsi" class="form-control" placeholder="Deskripsi Produk" rows="5"></textarea>
        </div>

        <div class="mb-3">
            <label  class="form-label">Foto Produk</label>
            <!-- JANLUP EDIT NAME INPUT NYA -->
            <input type="file" accept="image/*" name="foto" class="form-control">
        </div>

        <div class="mb-3">
            <label  class="form-label">Harga Produk</label>
            <!-- JANLUP EDIT NAME INPUT NYA -->
            <textarea name="harga" class="form-control" placeholder="Harga Produk" rows="5"></textarea>
        </div>

        <div class="mb-3">
            <label  class="form-label">Rating Produk</label>
            <!-- JANLUP EDIT NAME INPUT NYA -->
            <textarea name="rating" class="form-control" placeholder="Rating Produk" rows="5"></textarea>
        </div>

        <!-- tombol submit -->
        <button type="submit" class="btn btn-primary">Tambahkan Produk</button>

        <!-- tombol back/cancel -->
        <a href="<?= base_url("Admin/C_Slider") ?>" class="btn btn-outline-primary">Batal</a>
    </form>
</div>