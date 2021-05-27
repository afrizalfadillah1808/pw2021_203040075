<?php 

    session_start();

    if (!isset($_SESSION['login'])) {
        header("Location: login.php");
        exit;
    }

    // koneksi ke DBMS
    require 'functions.php' ;

    // ambil data di URL
    $id = $_GET["id"] ;

    // query data
    $buku = query("SELECT * FROM buku WHERE id = $id")[0];

    // // cek tombol submit sudah ditekan atau belum
    if ( isset($_POST['ubah']) ) {
        // cek data apakah berhasil diubah atau tidak
          if ( ubah($_POST) > 0 ) {
              echo "<script>
                      alert('Data Berhasil Diubah!') ;
                      document.location.href = 'admin.php' ;
                    </script>
                   " ;
          } else {
            echo "<script>
                    alert('Data Gagal Diubah!') ;
                    document.location.href = 'admin.php' ;
                  </script>
                 " ;
          }
        }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Ubah Data</title>
  </head>
  <body>
    <!-- Form -->
    <h3 class="text-center pt-5">Ubah Data</h3>

    <div class="container pt-5">
        <form action="" method="POST">
        <input type="hidden" name="id" value= "<?= $buku["id"] ; ?>">
            <div class="mb-3">
                <label for="img" class="col-sm-2 col-form-label">Gambar</label>
                    <input type="file" class="form-control" id="img" name="img" value="<?= $buku["img"] ; ?>">
            </div>
            <div class="mb-3">
                <label for="name" class="col-sm-2 col-form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="<?= $buku["judul"] ; ?>" placeholder="Text Input" required autofocus>
            </div>
            <div class="mb-3">
                <label for="size" class="col-sm-2 col-form-label">Pengarang</label>
                    <input type="text" class="form-control" id="pengarang" name="pengarang" value="<?= $buku["pengarang"] ; ?>" placeholder="Text Input" required>
            </div>
            <div class="mb-3">
                <label for="brand" class="form-label">Penerbit</label>
                    <input class="form-control" type="text" placeholder="Text Input" id="penerbit" name="penerbit" value="<?= $buku["penerbit"] ; ?>">
            </div>
            <div class="mb-3">
                <label for="price" class="col-sm-2 col-form-label">Tahun Terbit</label>
                    <input type="text" class="form-control" id="tahun" name="tahun" placeholder="$" value="<?= $buku["tahun"] ; ?>" required>
            </div>
            <div class="mb-3">
                <label for="category class="col-sm-2 col-form-label">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" placeholder="Text Input" value="<?= $buku["harga"] ; ?>" required>
            </div>
            <button type="submit" name="ubah" class="btn btn-outline-primary">Submit</button>
            <a class="btn btn-primary" type="cancel" href="admin.php" name="cancel" role="button">Cancel</a>
        </form>
    </div>
    <!-- End Form -->

    

    <!-- Script JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

 
  </body>
</html>