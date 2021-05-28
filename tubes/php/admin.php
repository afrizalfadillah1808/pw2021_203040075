
<?php
    // Muhammad Afrizal Fadillah
    // 203040075
    // Tugas Besar Pemrograman Web

    session_start();

    if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
    }
   
    require 'functions.php';
    $buku = query("SELECT * FROM buku ORDER BY id ASC");

    // ketika tombol cari diklik
    if(isset($_POST['cari'])) {
        $buku = cari($_POST['keyword']);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas</title>
    <link rel="stylesheet" href="../css/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <div class="add">
        <a href="tambah.php"><button class="waves-effect waves-light btn">Tambah Data</button></a>
    </div>
    <br>
    <form class="cari" action="" method="POST">
        <input type="text" name="keyword" autofocus placeholder="Cari Buku.." autocomplete="off" class="keyword">
        <button type="submit" name="cari" class="waves-effect waves-light btn tombol-cari">Cari!</button>
        <button type="submit" class="waves-effect waves-light btn">
            <a href="admin.php" style="text-decoration: none; color: white;">Kembali</a>
        </button>
    </form>
    <br>
    <div class="container">
        <table class="table bordered striped" border="1" cellpadding="13" cellspacing="0" style="background-color: #00adb5;">
            <tr>
                <th>No</th>
                <th>Opsi</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Harga</th>
            </tr>

        <?php if (empty($buku)) : ?>
            <tr>
                <td colspan="4">
                    <p style="color: red; font-style: italic;">Data buku tidak ditemukan</p>
                </td>
            </tr>
        <?php else : ?>
            <?php $i = 1;?>
            <?php foreach ($buku as $bk) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>
                        <a href="ubah.php?id=<?=$bk['id'] ?>"><button class="btn btn-secondary">Ubah</button></a>
                        <a href="hapus.php?id=<?=$bk['id'] ?>" onclick="return confirm('Hapus Data??')"><button class="btn btn-secondary">Hapus</button></a>
                    </td>
                    <td><img src="../assets/img/<?= $bk['img']; ?>" alt=""></td>
                    <td><?= $bk['judul']; ?></td>
                    <td><?= $bk['pengarang']; ?></td>
                    <td><?= $bk['penerbit']; ?></td>
                    <td><?= $bk['tahun']; ?></td>
                    <td><?= $bk['harga']; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        <?php endif; ?>
        </table>
    </div>
    <br>
    <br>
    <button class="btn btn-info"><a href="logout.php" style="text-decoration: none; color: white;">Logout</a></button>
    
</body>
</html>