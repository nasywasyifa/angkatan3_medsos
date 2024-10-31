<?php
session_start();
include 'koneksi.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <div class="col-sm-6 mx-auto mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h5>Selamat Datang di Perpus App</h5>
                            <p>Silahkan masuk dengan akun anda</p>
                        </div>
                        <?php if (isset($_GET['register'])): ?>
                            <div class="alert alert-success">Registrasi pengguna berhasil</div>
                        <?php endif ?>
                        <form action="actionLogin.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Masukan email anda">
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;">
                            </div>
                            <div class="form-group mb-3">
                                <div class="d-grid">
                                    <button class="btn btn-primary" type="submit">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <p>Belum punya akun? <a style="text-decoration: none;" href="register.php" class="text-secondary">Buat Akun</a> </p>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>