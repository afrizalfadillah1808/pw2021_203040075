<?php
    require 'php/functions.php';
    $mahasiswa = query("SELECT * FROM mahasiswa")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas</title>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <button><a href="php/admin.php">Edit</a></button>
    <table class="table" border="1" cellpadding="15" cellspacing="0">
        <tr>
          <th>No</th>
          <th>Foto</th>
          <th>NRP</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Jurusan</th>
          <th>#</th>
        </tr>
		<?php $i = 1; ?>
		<?php foreach ($mahasiswa as $mhs) : ?>
         <tr>
             <td><?=$i; ?></td>
             <td><img src="assets/img/<?=$mhs["img"]; ?>"></td>
             <td><?=$mhs["nrp"]; ?></td>
             <td><?=$mhs["nama"]; ?></td>
             <td><?=$mhs["email"]; ?></td>
             <td><?=$mhs["jurusan"]; ?></td>
             <td>
                <a href="php/detail.php?id=<?=$mhs['id'] ?>" style="text-decoration: none;">Lihat</a>
            </td>
         </tr>
         <?php $i++;?>
        <?php endforeach; ?>
    </table>
</body>
</html>