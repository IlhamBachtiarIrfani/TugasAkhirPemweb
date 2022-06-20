<div class="container">
    <h1 class="mb-5">Berikan Feedback</h1>
    <form action="<?= base_url("Admin/C_Feedback/AddProcess") ?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Isi dengan Nama">
        </div>

        <div class="mb-3">
            <label class="form-label">Title</label>
            <textarea name="title" class="form-control" placeholder="Isi dengan title" rows="5"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Berikan Ulasan anda </label>
            <textarea name="deskripsi" class="form-control" placeholder="Tulis Deskripsi Ulasan Anda Mengenai Aplikasi ini" rows="5"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Berikan Rating Anda</label>
            <div class="btn-group ms-2" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="rating" value="1" id="btnradio1" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio1">1</label>

                <input type="radio" class="btn-check" name="rating" value="2" id="btnradio2" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio2">2</label>

                <input type="radio" class="btn-check" name="rating" value="3" id="btnradio3" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio3">3</label>

                <input type="radio" class="btn-check" name="rating" value="4" id="btnradio4" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio4">4</label>

                <input type="radio" class="btn-check" name="rating" value="5" id="btnradio5" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio5">5</label>
            </div>
            <!-- <input type="number" name="rating" class="form-control" placeholder="Isi dengan Angka 1-5"> -->
            <!-- <textarea name="rating" class="form-control" placeholder="Isi dengan Angka 1-5" rows="5"></textarea> -->
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Tambahkan Feedback</button>

            <a href="<?= base_url("") ?>" class="btn btn-outline-primary">Batal</a>
        </div>
    </form>
</div>