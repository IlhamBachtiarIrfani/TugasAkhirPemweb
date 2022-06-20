<div class="container">
    <h1>Daftar Produk</h1>
    <!-- tombol buat tambah -->
    <a href="<?= base_url("Admin/C_Slider/Add") ?>" class="btn btn-primary"><i class="fa-solid fa-plus me-1"></i>Tambah Slider</a>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Harga</th>
                <th>Rating</th>
                <th style="min-width: 180px;">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dataProduk as $key => $item) { ?>
                <tr>
                    <td><?= $item["idProduk"] ?></td>

                    <td><?= $item["NamaProduk"] ?></td>

                    <td><?= $item["DeskripsiProduk"] ?></td>

                    <!-- url_gambar_slider itu nama kolom di tabel ye -->
                    <td><img class="img-fluid" src="<?= base_url($item["FotoProduk"]) ?>" /></td>

                    <td><?= $item["harga"] ?></td>

                    <td><?= $item["Rating"] ?></td>

                    <!-- tombol buat edit/delete -->
                    <td>
                        <a href="<?= base_url("Admin/C_Produk/Edit/" . $item["idProduk"]) ?>" class="btn btn-primary btn-sm"><i class="fa-regular fa-pen-to-square me-1"></i>Edit</a>
                        <a href="<?= base_url("Admin/C_Produk/Delete/" . $item["idProduk"]) ?>" class="btn btn-primary btn-sm"><i class="fa-regular fa-trash-can me-1"></i>Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>