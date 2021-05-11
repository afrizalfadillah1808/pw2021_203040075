<!-- 
    NAMA : Muhammad Afrizal Fadillah
    NPM : 203040075
    Kelas : B
    MataKuliah : Tugas Besar Pemrograman Web
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
    <title>Tugas Besar Pemrograman Web</title>
    <link rel="stylesheet" href="css/style2.css">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

</head>

<body>
    <div class="navbar-fixed">
        <nav class="place c2" style="background-color: rgb(219, 100, 0);">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#home" class="brand-logo">MAF</a>
                    <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a class="waves-effect waves-light btn" href="php/login.php">Login</a> | <a class="waves-effect waves-light btn" href="php/registrasi.php">Sign Up</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    
    <div class="cover">
        <div class="container">
            <img src="assets/img/bg/buku.png">
        </div>
    </div>    
</body>

</html>