<?php 
require 'functions.php';

$id = $_GET['id'];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style rel="stylesheet" href="style.css" ></style>
  <title>Detail Mahasiswa</title>
</head>
<body>
  <h3>Detail Mahasiswa</h3>

  <ul>
    <li><img src="img/<?= $mhs['img']; ?>" alt="" width="200px"></li>
    <li>NRP : <?= $mhs['nrp']; ?></li>
    <li>Nama :</li>
    <li>Email</li>
    <li>Jurusan</li>
    <li><a href="">Ubah</a> | <a href="">Hapus</a></li>
    <li><a href="latihan3.php">Kembali ke Daftar Mahasiswa</a></li>
  </ul>
</body>
</html>