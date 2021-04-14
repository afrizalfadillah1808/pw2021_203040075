<!-- 
    NAMA : Muhammad Afrizal Fadillah
    NPM : 203040075
    Kelas : B
    MataKuliah : Praktikum Pemrograman Web
    Shift : Jumat, 10.00 WIB
 -->

<?php
    require 'php/functions.php';
    $mahasiswa = query("SELECT * FROM mahasiswa")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan5b</title>
     <link rel="stylesheet" href="css/style.css">
</head>
<body>
		<?php foreach ($mahasiswa as $mhs) : ?>
                <p class="nama">
                    <a href="php/detail.php?id=<?= $mhs['id'] ?>">
                        <?= $mhs["nama"] ?>
                    </a>
                </p>
        <?php endforeach; ?>

    </table>
</body>
</html>