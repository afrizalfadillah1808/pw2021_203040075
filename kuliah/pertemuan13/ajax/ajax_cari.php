<?php 
require '../php/functions.php';
$mahasiswa = cari($_GET['keyword']);
?>
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
