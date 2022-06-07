<div class="container">
    <h1 class="mb-5">Ubah Slider</h1>
    <!-- action = link controller buat proses tambah -->
    <form action="<?= base_url("Admin/C_Slider/EditProcess/" . $sliderData["id_slider"]) ?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Id Slider</label>
            <!-- JANLUP EDIT NAME INPUT NYA -->
            <!-- KALO INPUT KASIH VALUENYA DI INPUT -->
            <input type="text" name="id" value="<?= $sliderData["id_slider"] ?>" class="form-control" placeholder="Ini Judul Slider" readonly>
        </div>

        <div class="mb-3">
            <label class="form-label">Judul Slider</label>
            <!-- JANLUP EDIT NAME INPUT NYA -->
            <!-- KALO INPUT KASIH VALUENYA DI INPUT -->
            <input type="text" name="judul" value="<?= $sliderData["judul_slider"] ?>" class="form-control" placeholder="Ini Judul Slider">
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi Slider</label>
            <!-- JANLUP EDIT NAME INPUT NYA -->
            <!-- KALO TEXTAREA KASIH VALUENYA DIANTARA TAG -->
            <textarea name="deskripsi" class="form-control" placeholder="Ini Deskripsi Slider" rows="5"><?= $sliderData["desrkipsi_slider"] ?></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Gambar Slider</label>
            <!-- JANLUP EDIT NAME INPUT NYA -->
            <!-- KALO GAMBAR KASIH VALUENYA HARUS BUAT INPUT HIDDEN BARU -->
            <br>
            <img class="img-fluid" src="<?= base_url($sliderData["url_gambar_slider"]) ?>" />
            <input type="hidden" accept="image/*" value="<?= $sliderData["url_gambar_slider"] ?>" name="old_gambar">
            <input type="file" accept="image/*" name="new_gambar" class="form-control">
        </div>

        <!-- tombol submit -->
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>

        <!-- tombol back/cancel -->
        <a href="<?= base_url("Admin/C_Slider") ?>" class="btn btn-outline-primary">Batal</a>
    </form>
</div>