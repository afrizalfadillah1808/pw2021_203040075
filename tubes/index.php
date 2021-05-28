<?php

require 'php/functions.php';
$buku = query("SELECT * FROM buku");

?>






<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="css/style2.css">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Libro.</title>

  <style>



  </style>

</head>

<body id="home" class="scrollspy">
  <!--Navbar-->
  <div class="navbar-fixed">
    <nav class="place c2" style="background-color: #eceff1 ;">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#home" class="brand-logo" style="color: black;"><img src="assets/img/book.svg" alt=""> Libro.</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#about" style="color: black;">About Us</a></li>
            <li><a href="#buku" style="color: black;">Daftar Buku</a></li>
            <li><a href="#contact" style="color: black;">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!--Sidenav-->
  <ul class="sidenav" id="mobile-nav">
    <li><a href="#about">About Us</a></li>
    <li><a href="#buku">Daftar Buku</a></li>
    <li><a href="#contact">Contact Us</a></li>
  </ul>

  <!--slider-->
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="assets/bg/book.jpg">
        <div class="caption right-align">
          <h3>This is our big Plan!</h3>
          <h5 class="light grey-text text-lighten-3">Harus Jadi orang yang pantang menyerah!.</h5>
        </div>
      </li>
      <li>
        <img src="assets/bg/tumpukan.jpg">
        <div class="caption center-align">
          <h3>This is our big Plan!</h3>
          <h5 class="light grey-text text-lighten-3">Harus Jadi orang yang kuat.</h5>
        </div>
      </li>
      <li>
        <img src="assets/bg/library.jpg">
        <div class="caption left-align">
          <h3>This is our big Plan!</h3>
          <h5 class="light grey-text text-lighten-3">Harus Jadi orang yang sabar dan pemaaf.</h5>
        </div>
      </li>
    </ul>
  </div>

  <section id="about" class="about scrollspy" style="background-color: #eceff1 ;">
    <div class="container" >
      <div class="row">
        <h3 class="center light">About Us</h3>
        <div class="col s6 light">
          <h5><img src="assets/img/book.svg" alt="">Libro.</h5>
          <p>Libro yang diambil dari bahasa spanyol yang artinya Buku. Libro yaitu Website yang berisi buku-buku rekomendasi yang menarik, 
          tempat dimana anda dapat menemukan buku-buku terbaik yang kami rekomendasikan untuk anda.</p>
          <p>Selain memberikan informasi buku-buku menarik kepada Anda, 
          Anda juga bisa ikut serta dalam pengembangan website ini dengan memberikan rekomendasi buku-buku anda kepada pengunjung website ini melalui laman registrasi di bawah ini, 
          Ayo bergabung! kita bangun website ini agar lebih keren dan menarik. </p>
          <button class="waves-effect waves-light blue darken-4 btn-large right"><a href="php/registrasi.php" style="text-decoration: none; color: white;">Ayo Bergabung !!</a></button>
        </div>
        <div class="col s6 light">
          <img src="assets/bg/read2.jpg" style="height: 12cm; weight: 15cm; position: right;">
        </div>
      </div>
    </div>
  </section>

  <section class="buku scrollspy white" id="buku">
    <h3 class="light center">Daftar Buku</h3> <br><br>
    <div id="listbuku">
      <div id="horizontal-card" class="section">
        <div class="row">
          <div class="col s12">
            <?php if (empty($buku)) : ?>
              <div style="text-align: center; font-family: lucida fax;">
                <h1>Buku Tidak Ditemukan</h1>
              </div>
            <?php else : ?>
            <?php endif; ?>
          </div>
          <div class="container">
            <div class="row">
              <?php foreach ($buku as $bk) : ?>
                <div class="col s12 m6 l4">
                  <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="assets/img/<?= $bk['img']; ?>">
                    </div>
                    <div class=" card-content">
                      <span class="card-title activator grey-text text-darken-4" style="font-size: 17px; padding-left: 5px;"><?= $bk['judul']; ?><i class="material-icons right">more_vert</i></span>
                      <button class="btn btn-primary"><a href="php/detail.php?id=<?=$bk['id'] ?>" style="text-decoration: none; color: white;">Detail</a></button>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4"><?= $bk['judul']; ?><i class="material-icons right">close</i></span>
                      <ul>
                        <li>Pengarang : <?= $bk['pengarang']; ?></li>
                        <br>
                        <li>Penerbit : <?= $bk['penerbit']; ?></li>
                        <br>
                        <li>Harga : <?= $bk['harga']; ?></li>
                        <br>
                      </ul>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="contact" class="contact scrollspy" style="background-color: #eceff1 ;">
    <div class="container">
      <h3 class="light center">Contact Us</h3>
      <div class="row">
        <div class="col m12 s12">
          <div class="card-panel center white lighten-3">
           <div class="row">
            <div class="col m4 s12">
                  <img src="https://img.icons8.com/metro/26/000000/home.png"/>
                  <p>Jl. Gunung Kencana 1 no.202 rt 06/06 kelurahan Ciumbuleuit kecamatan Cidadap Kota Bandung, Jawa Barat</p>
              </div>

              <div class="col m4 s12">
                  <img src="https://img.icons8.com/metro/26/000000/new-post.png"/>
                  <p>muhammadafrizalfadillah@gmail.com</p>
              </div>

              <div class="col m4 s12">
                  <img src="https://img.icons8.com/metro/26/000000/phone-disconnected.png"/>
                  <p>+62 8211 3739 560</p>
              </div>
           </div> 
          </div>
        </div>
      </div>
    </div>
  </section>


  <footer class="light center">
    <p class="footer_tittle" style="font-size: 2rem; margin-bottom: 10px;">Fadil Present </p>
      <div class="footer_social" style="font-size: 3.5rem; color: #fff; margin-top: 10px; margin-bottom: 20px;">
        <a href="https://www.facebook.com/afrizal.fadillah.1293/" target="_blank"><img src="https://img.icons8.com/metro/26/000000/facebook-new--v2.png"/></a>
        <a href="https://www.instagram.com/afrizal_fadillah1808/" target="_blank"><img src="https://img.icons8.com/metro/26/000000/instagram-new.png"/></a>
        <a href="https://mobile.twitter.com/afrizal1808" target="_blank"><img src="https://img.icons8.com/metro/26/000000/twitter.png"/></a>
        <a href="https://wa.link/po0zqg" target="_blank"><img src="https://img.icons8.com/fluent-systems-filled/24/000000/whatsapp.png"/></a>
      </div>
      <p>Copyright &copy; 2020 - Muhammad Afrizal Fadillah.</p>
  </footer>


  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav);

    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 500,
      transition: 600,
      interval: 3500
    });

    const scrollspy = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scrollspy, {
      scrollOffset: 65
    });
  </script>
</body>

</html>