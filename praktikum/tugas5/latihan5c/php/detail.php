<!-- 
    NAMA : Muhammad Afrizal Fadillah
    NPM : 203040075
    Kelas : B
    MataKuliah : Praktikum Pemrograman Web
    Shift : Jumat, 10.00 WIB
 -->

<?php
    if (!isset($_GET['id'])) {
        header("location: ../index.php");
        exit;
    }

    require 'functions.php';
    $id = $_GET ['id'];
    $mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body bgcolor="lavender">
    <div class="container">
        <div class="gambar">
            <img width="200px" src="../assets/img/<?= $mahasiswa["img"]; ?>" ; alt="">
        </div>
    <div class="keterangan">
        <p><?= $mahasiswa["nrp"]; ?></p>
        <p><?= $mahasiswa["nama"]; ?></p>
        <p><?= $mahasiswa["email"]; ?></p>
        <p><?= $mahasiswa["jurusan"]; ?></p>
    </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
    
</body>
</html>