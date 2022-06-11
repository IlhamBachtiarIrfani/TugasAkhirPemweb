<div class="container">
    <h1 class="mb-5">Tambah Webinar</h1>
    <!-- action = link controller buat proses tambah -->
    <form action="<?= base_url("Admin/C_Slider/AddProcess") ?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label  class="form-label">Judul Webinar</label>
            <!-- JANLUP EDIT NAME INPUT NYA -->
            <input type="text" name="judul" class="form-control" placeholder="Ini Judul Webinar">
        </div>

        <div class="mb-3">
            <label  class="form-label">Deskripsi Webinar</label>
            <!-- JANLUP EDIT NAME INPUT NYA -->
            <textarea name="deskripsi" class="form-control" placeholder="Ini Deskripsi Webinar" rows="5"></textarea>
        </div>

        <div class="mb-3">
            <label  class="form-label">Tanggal Webinar</label>
            <!-- JANLUP EDIT NAME INPUT NYA -->
            <input type="date" name="tanggalWebinar" class="form-control" placeholder="Ini Tanggal Webinar">
        </div>

        <div class="mb-3">
            <label  class="form-label">Link Webinar</label>
            <!-- JANLUP EDIT NAME INPUT NYA -->
            <textarea name="linkWebinar" class="form-control" placeholder="Ini Link Webinar" rows="5"></textarea>
        </div>

        <div class="mb-3">
            <label  class="form-label">Poster Webinar</label>
            <!-- JANLUP EDIT NAME INPUT NYA -->
            <input type="file" accept="image/*" name="posterWebinar" class="form-control">
        </div>

        <!-- tombol submit -->
        <button type="submit" class="btn btn-primary">Tambahkan Webinar</button>

        <!-- tombol back/cancel -->
        <a href="<?= base_url("Admin/C_Webinar") ?>" class="btn btn-outline-primary">Batal</a>
    </form>
</div>