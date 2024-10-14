<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container text-center mt-5">
        <div class="row">
            <div class="col-3 mt-3">
                <img src="logo.png" alt="gambar1" width="150">
            </div>
            <div class="col-6 text-centeer mt-5">
                <h2>SELAMAT DATANG DI PPKD JAKPUS</h2>
                <P>Jl. Karet Pasar Baru Barat V No.23 - Karet Tengsin Jakarta Pusat</P>
            </div>
            <div class="col-3 mt-3"><img src="logo.png" alt="gambar1" width="150"> </div>
            </h1>
        </div>
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg shadow-sm sticky-top mt-5"
            style="background-color: #bee1fa;">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navAltMarkup"
                    data-bs-controls="navAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">

                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navAltMarkup">
                    <div class="collapse navbar-collapse">
                        <div class="navbar-nav">
                            <a href="home.php" class="nav-link">Home</a>
                            <a href="#" class="nav-link">Login</a>
                            <a href="#" class="nav-link">Departement</a>
                        </div>
                    </div>
                </div>
        </nav>

        <body>
            <div class="row justify-content-center mt-4">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3>Register</h3>
                        </div>
                        <div class="card-body text-start">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="" class="form-label">Name</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Username</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Register</button> <a href="index.php">Sudah punya akun</a>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <h1 class="bg-danger"></h1>
            </h1>
            <footer class="shadow-sm mt-5" style="background-color: #bee1fa; min-height:65px">
                <div class="row">
                    <div class="col-md-6 d-flex justify-content-between">
                        <p class="text-center ps-4 pt-3"> &copyright &copy 2024 PPKD - Jakarta Pusat</p>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <p class="text-center pe-3 pt-3">Privacy Policy</p>
                    </div>
                </div>
            </footer>
    </div>

    </div>
    <script src="bootstrap-5/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>