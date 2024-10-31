<?php
include 'koneksi.php';
// jika button daftar di klik atau di tekan
if (isset($_POST['daftar'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $nama_pengguna = $_POST['nama_pengguna'];

    //masukan data ke dalam tbl user kolom kolom tbl user () dan nilainya di ambil dari inputan sesuai dengan urutan kolomnya
    mysqli_query($koneksi, "INSERT INTO user (email, password, nama_lengkap, nama_pengguna) VALUES ('$email', '$password', '$nama_lengkap', '$nama_pengguna')");

    // melempar ke halaman login
    header("location:login.php?register=berhasil");
}


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
                            <h5>Medsos X - Nasywa Syifa Hanifah</h5>
                        </div>
                        <form action="" method="POST">
                            <div class="form-group mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Masukan email anda">
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;">
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_lengkap" placeholder="Masukan Nama Lengkap anda">
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="form-label">Nama Pengguna</label>
                                <input type="text" class="form-control" name="nama_pengguna" placeholder="Masukan Nama Pengguna anda">
                            </div>
                            <div class="form-group mb-3">
                                <div class="d-grid">
                                    <button class="btn btn-primary" type="submit" name="daftar">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <p>Sudah punya akun? <a style="text-decoration: none;" href="login.php" class="text-secondary">Daftar</a> </p>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>