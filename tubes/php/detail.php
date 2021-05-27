<?php
// Mengecek apakah ada id yang dikirimkan
// Jika tidak ada maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

// Mengambil id dari url
$id = $_GET['id'];

// Melakukan query dengan parameter id yang diambil dari url
$buku = query("SELECT * FROM buku WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $buku["judul"]; ?></title>
    <link rel="stylesheet" href=" ../css/style2.css">
    <link type="text/css" rel="stylesheet" href=" ../css/materialize.min.css" media="screen,projection" />
    <style type="text/css">
        body {
            background-image: url(../assets/bg/library.jpg);
            background-size: cover;
        }
    </style>

</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col m6 s12">
        <div class="card">
          <div class="card-content">
            <table border="1px" cellpadding="6px" cellspacing="0">
              <th><b>Cover</b></th>
              <th colspan="2"><b>Keterangan</b></th>
                <tr>
                  <td rowspan="6">
                    <img class="responsive-img materialboxed" src="../assets/img/<?= $buku["img"]; ?>" style="height: 240px;">
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>Judul buku</p>
                  </td>
                  <td>
                    <p> : <?= $buku["judul"]; ?></p>
                  </td>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>Pengarang</p>
                  </td>
                  <td>
                    <p> : <?= $buku["pengarang"]; ?></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>Penerbit</p>
                  </td>
                  <td>
                    <p> : <?= $buku["penerbit"]; ?></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>Tahun Terbit</p>
                  </td>
                  <td>
                    <p> : <?= $buku["tahun"]; ?></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>Harga </p>
                  </td>
                  <td>
                    <p> : <?= $buku["harga"]; ?></p>
                  </td>
                </tr>
                <tr>
                  <td colspan="3"><a href="../index.php" class="waves-effect waves-light red darken-4 btn-small right"> Kembali</a></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="col m6 s12">
          <div class="card grey darken-1">
            <div class="card-content white-text">
              <span class="card-title  center"><?= $buku["judul"]; ?></span>
                <p>Deskripsi : </p>
                <p><?= $buku["sinopsis"]; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>

</html>