<?php
$number = 1;

?>


<div class="container">
    <h1>Daftar Feedback</h1>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Title</th>
                <th>Deskripsi</th>
                <th>Rating</th>
                <th style="min-width: 180px;">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($FeedbackData as $key => $item) { ?>
                <tr>
                    <!-- id_slider itu nama kolom di tabel ye -->
                    <td><?= $number++ ?></td>

                    <!-- judul_slider itu nama kolom di tabel ye -->
                    <td><?= $item["Nama"] ?></td>

                    <!-- desrkipsi_slider itu nama kolom di tabel ye -->
                    <td><?= $item["Title"] ?></td>

                    <!-- desrkipsi_slider itu nama kolom di tabel ye -->
                    <td><?= $item["Deskripsi"] ?></td>

                    <!-- desrkipsi_slider itu nama kolom di tabel ye -->
                    <td><?= $item["Rating"] ?></td>
 
                    <!-- tombol buat edit/delete -->
                    <td>
                        <a href="<?= base_url("Admin/C_Feedback/Delete/" . $item["id_Feedback"]) ?>" class="btn btn-primary btn-sm"><i class="fa-regular fa-trash-can me-1"></i>Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>