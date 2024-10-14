<?php

session_start();
session_destroy();
if (empty($_SESSION['nama'])) {
    header("Location: index.php");
    exit;
}

$_SESSION = [];
header("Location: ../index.php");
exit;
?>

<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5/dist/css/bootstrap.min.css">
</head>

<body>

    <h1>WELCOME <?php echo $_SESSION['nama'] ?></h1>
    <a href="controler/logout.php" class="btn btn-danger btn-sm">Log-out</a>

    <script src="bootstrap-5/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>