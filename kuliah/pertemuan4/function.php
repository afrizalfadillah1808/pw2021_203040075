<?php 
function salam($waktu = "Datang", $nama = "Admin") {
	return "Selamat $waktu, $nama!";
}

/* 
    Nama : Muhammad Afrizal Fadillah
    NRP : 203040075
    Kelas B
    Pertemuan ke 4
*/

?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan Function</title>
</head>
<body>
	<h1><?= salam("Siang", "Afrizal"); ?></h1>
</body>
</html>