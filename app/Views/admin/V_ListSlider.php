<div class="container">
    <h1>Daftar Slider</h1>
    <!-- tombol buat tambah -->
    <a href="<?= base_url("Admin/C_Slider/Add") ?>" class="btn btn-primary"><i class="fa-solid fa-plus me-1"></i>Tambah Slider</a>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th style="min-width: 180px;">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sliderData as $key => $item) { ?>
                <tr>
                    <!-- id_slider itu nama kolom di tabel ye -->
                    <td><?= $item["id_slider"] ?></td>

                    <!-- judul_slider itu nama kolom di tabel ye -->
                    <td><?= $item["judul_slider"] ?></td>

                    <!-- desrkipsi_slider itu nama kolom di tabel ye -->
                    <td><?= $item["desrkipsi_slider"] ?></td>

                    <!-- url_gambar_slider itu nama kolom di tabel ye -->
                    <td><img class="img-fluid" src="<?= base_url($item["url_gambar_slider"]) ?>" /></td>

                    <!-- tombol buat edit/delete -->
                    <td>
                        <a href="<?= base_url("Admin/C_Slider/Edit/" . $item["id_slider"]) ?>" class="btn btn-primary btn-sm"><i class="fa-regular fa-pen-to-square me-1"></i>Edit</a>
                        <a href="<?= base_url("Admin/C_Slider/Delete/" . $item["id_slider"]) ?>" class="btn btn-primary btn-sm"><i class="fa-regular fa-trash-can me-1"></i>Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>