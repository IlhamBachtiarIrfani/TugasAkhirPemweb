<div class="container">
    <h1>Daftar Webinar</h1>
    <!-- tombol buat tambah -->
    <a href="<?= base_url("Admin/C_Webinar/Add") ?>" class="btn btn-primary"><i class="fa-solid fa-plus me-1"></i>Tambah Webinar</a>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
                <th>Poster</th>
                <th>Link</th>
                <th style="min-width: 180px;">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($webinarData as $key => $item) { ?>
                <tr>
                    <!-- id_slider itu nama kolom di tabel ye -->
                    <td><?= $item["idWebinar"] ?></td>

                    <!-- judul_slider itu nama kolom di tabel ye -->
                    <td><?= $item["Title"] ?></td>

                    <!-- desrkipsi_slider itu nama kolom di tabel ye -->
                    <td><?= $item["Deskripsi"] ?></td>

                    <!-- tanggal_slider itu nama kolom di tabel ye -->
                    <td><?= $item["TanggalWebinar"] ?></td>

                    <!-- url_gambar_slider itu nama kolom di tabel ye -->
                    <td><img class="img-fluid" src="<?= base_url($item["PosterWebinar"]) ?>" /></td>

                    <!-- link_slider itu nama kolom di tabel ye -->
                    <td><?= $item["LinkWebinar"] ?></td>

                    <!-- tombol buat edit/delete -->
                    <td>
                        <a href="<?= base_url("Admin/C_Webinar/Edit/" . $item["idWebinar"]) ?>" class="btn btn-primary btn-sm"><i class="fa-regular fa-pen-to-square me-1"></i>Edit</a>
                        <a href="<?= base_url("Admin/C_Webinar/Delete/" . $item["idWebinar"]) ?>" class="btn btn-primary btn-sm"><i class="fa-regular fa-trash-can me-1"></i>Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>