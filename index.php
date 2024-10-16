<?php session_start();
//empty() : kosong
// if (empty($_SESSION['NAMA'])) {
//     header("location:login.php?access=failed");
// }
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perpus</title>
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>
</head>

<body>
    <div class="wrapper">
        <?php include 'inc/navbar.php'; ?>

        <div class="content">
            <?php
            if (isset($_GET['pg'])) {
                if (file_exists('content/' . $_GET['pg'] . '.php')) {
                    include 'content/' . $_GET['pg'] . '.php';
                }
            } else {
                include 'content/dashboard.php';
            }
            ?>
        </div>

        <footer class="text-center border-top fixed-bottom p-3">Copyright &copy; 2024 PPKD - Jakarta Pusat</footer>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="app.js"></script>
</body>

</html>