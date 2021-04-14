<?php
    require 'functions.php';
    $mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id ASC");

    if (isset($_GET['cari'])) {
        $mahasiswa = cari($_GET['keyword']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan5e</title>
    <link rel="stylesheet" href="../css/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <div class="add">
        <a href="tambah.php"><button>Tambah Data</button></a>
    </div>
    <br>
    <form class="cari" action="" method="GET">
        <input type="text" name="keyword" autofocus placeholder="Cari Mahasiswa.." autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
        <button type="submit">
            <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
    </form>
    <br>
    <table class="table bordered striped" border="1" cellpadding="13" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Opsi</th>
            <th>Foto</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
    <?php if (empty($mahasiswa)) : ?>
        <tr>
            <td colspan="7">
                <h1>Data tidak ditemukan</h1>
            </td>
        </tr>
    <?php else : ?>
        <?php $i = 1;?>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?=$mhs['id'] ?>"><button>Ubah</button></a>
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
    <?php endif; ?>
    </table>
</body>
</html>