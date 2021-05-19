<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: php/login.php");
  exit;
}

require 'php/functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// ketika tombol cari di klik
if(isset($_POST['cari'])) {
  $mahasiswa = cari($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
  <link rel="stylesheet" href=" style.css">
</head>

<body>

  <a href="php/logout.php">Logout</a>
  <h3>Daftar Mahasiswa</h3>

  <button><a href="php/tambah.php" style="text-decoration: none; color: black;">Tambah Data Mahasiswa</a></button>
  <br>
  <br>
  <form action="" method="post">
    <input type="text" name="keyword" size="40" placeholder="masukkan keyword.." autocomplete="off" autofocus class="keyword">
    <button type="submit" name="cari" class="tombol-cari">Cari!</button>
  </form>
  <br>

  <div class="container">
    <table border="1" cellpadding="13" cellspacing="0">
      <tr>
        <th>No</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Aksi</th>
      </tr>

      <?php if(empty($mahasiswa)) : ?>
        <tr>
          <td colspan="4">
            <p>Data tidak ditemukan!!</p>
          </td>
        </tr>
      <?php endif; ?>
        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $mhs) : ?>
          <tr>
            <td><?=$i; ?></td>
            <td><img src="img/<?=$mhs["img"]; ?>" ></td>
            <td><?=$mhs["nama"]; ?></td>
            <td>
              <a href="php/detail.php?id=<?= $mhs['id']; ?>">Lihat Detail</a>
            </td>
          </tr>
          <?php $i++; ?>

        <?php endforeach; ?>
    </table>
  </div>


<script src="js/script.js"></script>
<script>
  const tombolCari = document.querySelector('.tombol-cari');
  const keyword = document.querySelector('.keyword');
  const container = document.querySelector('.container');

  // hilangkan tombol cari
  tombolCari.style.display = 'none';


  // event ketika kita menuliskan keyword
  keyword.addEventListener('keyup', function () {
    // ajax
    // xmlhtlprequest
    // const xhr = new XMLHttpRequest();

    // xhr.onreadystatechange = function () {
    //   if (xhr.readyState == 4 && xhr.status == 200) {
    //     container.innerHTML = xhr.responseText;
    //   };
    // };


    // xhr.open('get', 'ajax/ajax_cari.php?keyword=' + keyword.value);
    // xhr.send();

    // fetch()
  fetch('ajax/ajax_cari.php?keyword=' + keyword.value)
    .then((response) => response.text());
    .then((response) => (container.innerHTML = response));


  });


</script>

</body>
</html>