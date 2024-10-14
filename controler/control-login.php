<?php
session_start();
session_regenerate_id(true);

if (isset($_POST['login'])) {
    $user = [[
        "name" => "Dono Raharjo",
        "email" => "doni@gmail.com",
        "password" => "12345678"
    ], [
        "name" => "Rano Karni",
        "email" => "rano@gmail.com",
        "password" => "12345678"
    ], [
        "name" => "Dini",
        "email" => "dini123@gmail.com",
        "password" => "12345678"
    ], [
        "name" => "Budi",
        "email" => "budi@gmail.com",
        "password" => "12345678"
    ]];

    $email = $_POST['email'];
    $password = $_POST['password'];
    $checkedLogin = false;

    foreach ($user as $user) {
        if ($user['email'] == $email && $user['password'] == $password) {
            $_SESSION['nama'] = $user['name'];
            $_SESSION['email'] = $user['email'];
            $checkedLogin = true;
            break;
        }
    }

    if ($checkedLogin) {
        header("location: ../dashboard.php");
        exit;
    } else {
        header("Location: ../index.php?error=login-gagal");
        exit;
    }
}
