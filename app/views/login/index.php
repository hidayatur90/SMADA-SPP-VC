<title>Login</title>
<link rel="stylesheet" href="../public/css/login.css">
<div class="alert alert-warning" role="alert">
    <?php echo $_SESSION['error']?>
</div>
<div class="back">
    <div class="div-center">
        <div class="content">
            <h3>Login</h3>
            <hr/>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="nama_user">Username</label>
                    <input type="text" class="form-control" name="nama_user" placeholder="Username" value="<?= $_POST['nama_user']; ?>" required>
                </div>
                <div class="form-group mt-3">
                    <label for="kata_sandi">Password</label>
                    <input type="password" class="form-control" name="kata_sandi" placeholder="Password" value="<?= $_POST['kata_sandi']; ?>" required>
                </div>
                <div class="btn-login mt-3 text-center">
                    <button type="submit" name="submit" class="btn btn-primary" style="width: 150px;">Login</button>
                </div>
                <hr />
                <div class="p text-center">
                    <p>&#169; SMAN 2 BONDOWOSO</p>
                </div>
            </form>
        </div>
    </div>
</div>