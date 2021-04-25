<?php
$mahasiswa = [
["Hervin Fakhrul", "203040097", "Teknik Informatika", "hervinfakhrulma@gmail.com"],
["Muhammad Rizky", "203040043", "Teknik Informatika", "muhammadrizkybule@gmail.com"],
["Muhammad Afrizal Fadillah", "203040075", "Teknik Informatika", "mafrizalfadillah@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NRP : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>