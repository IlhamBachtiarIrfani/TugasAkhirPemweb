<div class="container">
    <h1 class="mb-5">Ubah Webinar</h1>
    <!-- action = link controller buat proses tambah -->
    <form action="<?= base_url("Admin/C_Webinar/EditProcess/" . $webinarData["idWebinar"]) ?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Id Webinar</label>
            <!-- JANLUP EDIT NAME INPUT NYA -->
            <!-- KALO INPUT KASIH VALUENYA DI INPUT -->
            <input type="text" name="id" value="<?= $webinarData["idWebinar"] ?>" class="form-control" placeholder="Ini Judul Webinar" readonly>
        </div>

        <div class="mb-3">
            <label class="form-label">Judul Webinar</label>
            <!-- JANLUP EDIT NAME INPUT NYA -->
            <!-- KALO INPUT KASIH VALUENYA DI INPUT -->
            <input type="text" name="judul" value="<?= $webinarData["Title"] ?>" class="form-control" placeholder="Ini Judul Webinar">
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi Webinar</label>
            <!-- JANLUP EDIT NAME INPUT NYA -->
            <!-- KALO TEXTAREA KASIH VALUENYA DIANTARA TAG -->
            <textarea name="deskripsi" class="form-control" placeholder="Ini Deskripsi Webinar" rows="5"><?= $webinarData["Deskripsi"] ?></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Tanggal Webinar</label>
            <!-- JANLUP EDIT NAME INPUT NYA -->
            <!-- KALO INPUT KASIH VALUENYA DI INPUT -->
            <input type="date" name="tanggalWebinar" value="<?= $webinarData["TanggalWebinar"] ?>" class="form-control" placeholder="Ini Tanggal Webinar">
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi Webinar</label>
            <!-- JANLUP EDIT NAME INPUT NYA -->
            <!-- KALO TEXTAREA KASIH VALUENYA DIANTARA TAG -->
            <textarea name="linkWebinar" class="form-control" placeholder="Ini Link Webinar" rows="5"><?= $webinarData["LinkWebinar"] ?></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Gambar Webinar</label>
            <!-- JANLUP EDIT NAME INPUT NYA -->
            <!-- KALO GAMBAR KASIH VALUENYA HARUS BUAT INPUT HIDDEN BARU -->
            <br>
            <img class="img-fluid" src="<?= base_url($webinarData["PosterWebinar"]) ?>" />
            <input type="hidden" accept="image/*" value="<?= $webinarData["PosterWebinar"] ?>" name="old_gambar">
            <input type="file" accept="image/*" name="new_gambar" class="form-control">
        </div>

        <!-- tombol submit -->
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>

        <!-- tombol back/cancel -->
        <a href="<?= base_url("Admin/C_Webinar") ?>" class="btn btn-outline-primary">Batal</a>
    </form>
</div>