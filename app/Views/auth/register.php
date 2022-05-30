<!---- Section Gabung Start ------------------------------------------------------------>
<div class="row">
    <div class="col-lg-12">
        <h1 class="text-center mt-6 mb-5" style="font-family: Playfair Display; font-weight: 900; font-size: 32px">Create your account</h1>

    </div>
    <div class="col-lg-4 mb-3">

    </div>
    <form action="<?= base_url("C_Register/process") ?>" method="POST" class="col-lg-4 px-5 py-5 rounded border border-1" style=" background-color: #FFFFFF;">
        <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="fullname" class="form-control">
            <br>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
            <br>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
            <br>
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="confirmPassword" class="form-control">

        </div>
        <h1 class="mt-3 mb-3" style="font-family: Poppins; font-weight: 400; font-size: 12px;">
            Dengan ini, saya menyetujui Syarat & Ketentuan dan Kebijakan Privasi.
        </h1>
        <button type="submit" class="btn btn-primary btn-lg btn-block w-100" style="color: black; font-size: 14px;">Daftar</button>

        <small id="emailHelp" class="form-text text-muted text-center">Sudah mempunyai akun?</small><a href="<?= base_url("C_Login") ?>"><button type="button" class="btn btn-link" style="color: red; font-size: 12px">Login Sekarang</button></a>
    </form>
    <div class="col-lg-4">

    </div>
</div>

<!---- Section Gabung End ------------------------------------------------------------>