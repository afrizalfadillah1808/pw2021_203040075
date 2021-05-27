<?php 
require 'functions.php';

if (isset($_POST['tambah'])) {
    if(tambah($_POST) > 0 ) {
        echo "<script>
                alert('data berhasil ditambahkan');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "data gagal ditambahkan!";
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libro.</title>
    <link rel="stylesheet" href="../css/style2.css">    

</head>
<body>
    <h3>Form Tambah Data Buku</h3>
    <form class="form" action="" method="POST" style="background-color: #97a3a3;">
        <ul>
            <li>
                <label for="judul">Judul :</label><br>
                <input type="text" name="judul" id="judul" autofocus required><br><br>
            </li>
            <li>
                <label for="pengarang">Pengarang :</label><br>
                <input type="text" name="pengarang" id="pengarang" required><br><br>
            </li>
            <li>
                <label for="penerbit">Penerbit :</label><br>
                <input type="text" name="penerbit" id="penerbit" required><br><br>
            </li>
            <li>
                <label for="tahun">Tahun :</label><br>
                <input type="text" name="tahun" id="tahun" required><br><br>
            </li>
            <li>
                <label for="harga">Harga :</label><br>
                <input type="text" name="harga" id="harga" required><br><br>
            </li>
            <br>
            <li>
                <div class="file-field input-field">
                    <div class="btn">
                        <span>File</span>
                        <input type="file" name="img" id="img"><br>
                    </div>
                </div>
            </li>
            <br>
            <br><br><button type="submit" name="tambah">Tambah Data</button>
            <button type="submit">
                <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
            </button>
        </ul>
    </form>

    <script src="../js/script.js"></script>
</body>
</html>

