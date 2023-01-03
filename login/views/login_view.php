<?php 
include 'login/controllers/login_controller.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="login/assets/css/style.css">
    <title>Login</title>
</head>
<body>
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
                        <input type="text" class="form-control" name="nama_user" placeholder="Username" value="<?php echo $nama_user; ?>" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="kata_sandi">Password</label>
                        <input type="password" class="form-control" name="kata_sandi" placeholder="Password" value="<?php echo $_POST['kata_sandi']; ?>" required>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>