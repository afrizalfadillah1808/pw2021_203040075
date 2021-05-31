<!DOCTYPE html>
<html>
<title>Halaman Index</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h5 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
  background-image: url('tubes/assets/bg/library.jpg');
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
.tulisan p {
  text-shadow: 3px 3px 2px rgba(0, 0, 0, 0.6);
  display: inline;
  background-image: linear-gradient( rgba(255, 99, 71, 0.8),  rgba(255, 99, 71, 0.8));
  background-size: 0% 20px;
  background-position: 0% 100%;
  background-repeat: no-repeat;
  transition: background .5s ease-out;
}
.tulisan p:hover {
  background-size: 100% 20px;
}
.daftarfolder a {
  text-decoration: none;
}
</style>
<body>

<div class="bgimg w3-display-container w3-text-white">
  <div class="w3-display-middle w3-jumbo">
    <p>Libro.</p>
  </div>
  <div class="w3-display-topleft w3-container w3-xlarge">
    <p><button onclick="document.getElementById('menu').style.display='block'" class="w3-button w3-black">menu</button></p>
    <p><button onclick="document.getElementById('contact').style.display='block'" class="w3-button w3-black">contact</button></p>
  </div>
  <div class="w3-display-bottomleft w3-container tulisan">
    <p class="w3-xlarge">Muhammad Afrizal Fadillah TIF-B | 203040075</p>
    <p class="w3-large">Selamat Datang di Web Saya</p>
  </div>
  <div class="w3-display-bottomright w3-container">
    <p>Copyright &copy; 2020 - Muhammad Afrizal Fadillah.</p>
  </div>
</div>

<!-- Menu Modal -->
<div id="menu" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black w3-display-container">
      <span onclick="document.getElementById('menu').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>Kuliah</h1>
    </div>
    <div class="w3-container daftarfolder">
      <h5>
        <button class="w3-button w3-khaki"><a href="kuliah/pertemuan10/latihan3.php" target="_blank">Pertemuan 10</a></button>
        <button class="w3-button w3-khaki"><a href="kuliah/pertemuan11/index.php" target="_blank">Pertemuan 11</a></button>
        <button class="w3-button w3-khaki"><a href="kuliah/pertemuan12/index.php" target="_blank">Pertemuan 12</a></button>
        <button class="w3-button w3-khaki"><a href="kuliah/pertemuan13/index.php" target="_blank">Pertemuan 13</a></button>
      </h5>
    </div>
    <div class="w3-container w3-black">
      <h1>Praktikum</h1>
    </div>
    <div class="w3-container daftarfolder">
    <h5>
        <button class="w3-button w3-khaki"><a href="praktikum/tugas1/tugas1.php" target="_blank">Tugas 1</a></button>
        <button class="w3-button w3-khaki"><a href="praktikum/tugas2/latihan2d.php" target="_blank">Tugas 2</a></button>
        <button class="w3-button w3-khaki"><a href="praktikum/tugas3/latihan3e.php" target="_blank">Tugas 12</a></button>
        <button class="w3-button w3-khaki"><a href="praktikum/tugas4/latihan4c/index.php" target="_blank">Tugas 4</a></button>
        <button class="w3-button w3-khaki"><a href="praktikum/tugas5/tugas/index.php" target="_blank">Tugas 5</a></button>
        <button class="w3-button w3-khaki"><a href="praktikum/tugas6/latihan6c/index.php" target="_blank">Tugas 6</a></button>
      </h5>
    </div>
    <div class="w3-container w3-black">
      <h1>Tubes</h1>
    </div>
    <div class="w3-container daftarfolder">
      <h5>
      <button class="w3-button w3-khaki"><a href="tubes/index.php" target="_blank">Tugas Besar</a></button>
      </h5>
    </div>
  </div>
</div>

<!-- Contact Modal -->
<div id="contact" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black">
      <span onclick="document.getElementById('contact').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>Contact</h1>
    </div>
    <div class="w3-container">
      <p class="footer_tittle" style="font-size: 2rem; margin-bottom: 10px; text-align: center;">Fadil Present </p>
      <div class="footer_social" style="font-size: 3.5rem; color: #fff; margin-top: 10px; margin-bottom: 20px; text-align: center;">
        <a href="https://www.facebook.com/afrizal.fadillah.1293/" target="_blank"><img src="https://img.icons8.com/metro/26/000000/facebook-new--v2.png"/></a>
        <a href="https://www.instagram.com/afrizal_fadillah1808/" target="_blank"><img src="https://img.icons8.com/metro/26/000000/instagram-new.png"/></a>
        <a href="https://mobile.twitter.com/afrizal1808" target="_blank"><img src="https://img.icons8.com/metro/26/000000/twitter.png"/></a>
        <a href="https://wa.link/po0zqg" target="_blank"><img src="https://img.icons8.com/fluent-systems-filled/24/000000/whatsapp.png"/></a>
      </div>
    </div>
  </div>
</div>

</body>
</html>

