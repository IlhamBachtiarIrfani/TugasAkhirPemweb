<!---- Section Gabung Start ------------------------------------------------------------>
<div class="row">
    <div class="col-lg-12">
        <h1 class="text-center mt-6 mb-5" style="font-family: Playfair Display; font-weight: 900; font-size: 32px">Log in to your account</h1>

    </div>
    <div class="col-lg-3 mb-3 ">

    </div>
    <form action="<?= base_url("C_Login/process") ?>" method="POST" class="col-lg-6 px-5 py-5 rounded border border-1" style=" background-color: #FFFFFF;">
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" required>
            <br>
        </div>
        <div class="form-group mb-3">
            <label for="exampleInputEmail1">Password</label>
            <input type="passwordd" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

            <small id="emailHelp" class="form-text text-muted">Forgot Password?.</small>
            <br><br>

            <button type="submit" class="btn btn-primary btn-lg btn-block w-100" style="color: black; font-size: 14px;">Log in</button>

        </div>
        <small id="emailHelp" class="form-text text-muted text-center">Belum mempunyai akun?</small><a href="<?= base_url("C_Register") ?>"><button type="button" class="btn btn-link" style="color: red; font-size: 12px">Daftar Sekarang</button></a>
    </form>
</div>

<!---- Section Gabung End ------------------------------------------------------------>