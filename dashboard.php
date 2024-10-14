<!-- <?php
        session_start();
        session_regenerate_id(true);

        // Jika session kosong, maka melempar ke login

        if (empty($_SESSION['nama'])) {
            header("Location: index.php");
            exit;
        }
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5/dist/css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-secondary">
        <div class="container">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="home2.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="ManageAccounts.php">Manage Accounts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="ManageBooks.php">Manage Books</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <style>
        .table {
            border-collapse: collapse;
            width: 100%;
        }

        .table th,
        .table td {
            border: 1px solid #000;
            /* Mengatur warna dan jenis border */
            padding: 8px;
            /* Menambah padding untuk celah dalam sel */
            text-align: left;
            /* Mengatur posisi teks di dalam sel */
        }
    </style>



</body>

<h1 class="text-center">WELCOME <?php echo $_SESSION['nama'] ?></h1>
<a href="controler/logout.php" class="btn btn-danger btn-sm">Log-out</a>

<script src="bootstrap-5/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html> -->