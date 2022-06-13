<div class="container">
    <h1 class="mb-5">Tambah Slider</h1>
    <!-- action = link controller buat proses tambah -->
    <form action="<?= base_url("Admin/C_Slider/AddProcess") ?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label  class="form-label">Judul Slider</label>
            <!-- JANLUP EDIT NAME INPUT NYA -->
            <input type="text" name="judul" class="form-control" placeholder="Ini Judul Slider">
        </div>

        <div class="mb-3">
            <label  class="form-label">Deskripsi Slider</label>
            <!-- JANLUP EDIT NAME INPUT NYA -->
            <textarea name="deskripsi" class="form-control" placeholder="Ini Deskripsi Slider" rows="5"></textarea>
        </div>

        <div class="mb-3">
            <label  class="form-label">Gambar Slider</label>
            <!-- JANLUP EDIT NAME INPUT NYA -->
            <input type="file" accept="image/*" name="gambar" class="form-control">
        </div>

        <!-- tombol submit -->
        <button type="submit" class="btn btn-primary">Tambahkan Slider</button>

        <!-- tombol back/cancel -->
        <a href="<?= base_url("Admin/C_Slider") ?>" class="btn btn-outline-primary">Batal</a>
    </form>
</div>