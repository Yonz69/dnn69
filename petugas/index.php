<?php
session_start();
//cek session 
if ($_SESSION['login'] != 'petugas') {
  //kembali ke halaman login
  header('location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Petugas</title>
</head>

<body style="background-color: aqua;">
  <?php include "navbar.php"; ?>
  <h1>Dasboard</h1>
  ID : <?= $_SESSION['id_login']; ?> <br> Pengguna : <?= $_SESSION['nama']; ?>

</body>

</html>