<?php
session_start();
//kalau belum login arahkan ke login.php sekalian dikasih pesan
if ($_SESSION['userweb'] != 'login') {
    echo '<script>alert("Anda belum login, silahkan login");</script>';
    header("location:login.php");
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Halaman admin</title>
</head>

<body>
    INI HALAMAN ADMIN <a href="logout.php">Keluar</a>