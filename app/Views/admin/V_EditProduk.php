<div class="container">
    <h1 class="mb-5">Edit Produk</h1>
    <!-- action = link controller buat proses tambah -->
    <form action="<?= base_url("Admin/C_Produk/EditProcess/" . $dataProduk["idProduk"]) ?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Id Produk</label>
            <!-- JANLUP EDIT NAME INPUT NYA -->
            <!-- KALO INPUT KASIH VALUENYA DI INPUT -->
            <input type="text" name="id" value="<?= $dataProduk["idProduk"] ?>" class="form-control" placeholder="" readonly>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Produk</label>
            <!-- JANLUP EDIT NAME INPUT NYA -->
            <!-- KALO INPUT KASIH VALUENYA DI INPUT -->
            <input type="text" name="nama" value="<?= $dataProduk["NamaProduk"] ?>" class="form-control" placeholder="Nama Produk">
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi Produk</label>
            <!-- JANLUP EDIT NAME INPUT NYA -->
            <!-- KALO TEXTAREA KASIH VALUENYA DIANTARA TAG -->
            <textarea name="deskripsi" class="form-control" placeholder="Deskripsi Produk" rows="5"><?= $dataProduk["DeskripsiProduk"] ?></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Foto Produk</label>
            <!-- JANLUP EDIT NAME INPUT NYA -->
            <!-- KALO GAMBAR KASIH VALUENYA HARUS BUAT INPUT HIDDEN BARU -->
            <br>
            <img class="img-fluid" src="<?= base_url($dataProduk["FotoProduk"]) ?>" />
            <input type="hidden" accept="image/*" value="<?= $dataProduk["FotoProduk"] ?>" name="old_foto">
            <input type="file" accept="image/*" name="new_foto" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Harga Produk</label>
            <!-- JANLUP EDIT NAME INPUT NYA -->
            <!-- KALO TEXTAREA KASIH VALUENYA DIANTARA TAG -->
            <textarea name="harga" class="form-control" placeholder="Harga Produk" rows="5"><?= $dataProduk["harga"] ?></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Rating Produk</label>
            <!-- JANLUP EDIT NAME INPUT NYA -->
            <!-- KALO TEXTAREA KASIH VALUENYA DIANTARA TAG -->
            <textarea name="rating" class="form-control" placeholder="Rating Produk" rows="5"><?= $dataProduk["Rating"] ?></textarea>
        </div>

        <!-- tombol submit -->
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>

        <!-- tombol back/cancel -->
        <a href="<?= base_url("Admin/C_Produk") ?>" class="btn btn-outline-primary">Batal</a>
    </form>
</div>