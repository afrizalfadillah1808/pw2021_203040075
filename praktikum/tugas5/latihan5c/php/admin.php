<?php
    require 'functions.php';
    $mahasiswa = query("SELECT * FROM mahasiswa")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan5c</title>
    <link rel="stylesheet" href="../css/style2.css">
</head>
<body>
    <div class="add">
        <a href="tambah.php"><button>Tambah Data</button></a>
    </div>
    <br>
    <table class="table" border="1" cellpadding="13" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Opsi</th>
            <th>Foto</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1;?>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href=""><button>Ubah</button></a>
                    <a href="hapus.php?id=<?=$mhs['id'] ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
                </td>
                <td><img src="../assets/img/<?= $mhs['img']; ?>" alt=""></td>
                <td><?= $mhs['nrp']; ?></td>
                <td><?= $mhs['nama']; ?></td>
                <td><?= $mhs['email']; ?></td>
                <td><?= $mhs['jurusan']; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>

</body>
</html>