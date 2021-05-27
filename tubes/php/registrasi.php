<?php 
    require 'functions.php' ;

    if(isset($_POST['registrasi'])) {
        if(registrasi($_POST) > 0) {
            echo "<script>
                    alert('Username baru berhasil ditambahkan. Silahkan login!') ;
                    document.location.href = 'login.php' ;
                 </script>" ;           
        } else {
            echo "<script>
                    alert('Gagal menambahkan account!') ;
                    document.location.href = 'login.php' ;
                </script>" ; 
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

    <title>Sign Up</title>
  </head>
  <body>
  <div class="container pt-5" style="margin-top: 80px; ">
        <div class="card mb-3 pt-5 pb-2">
            <div class="row g-0">
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">Registrasi</h5>    
                           <form action="" method="POST">
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                <input type="text" name="username" class="form-control" autofocus autocomplete="off" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                <input type="password" name="password1" class="form-control" required>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Konfirmasi Password</label>
                                <div class="col-sm-10">
                                <input type="password" name="password2" class="form-control" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                <input type="status" name="status" placeholder="user/admin" class="form-control" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" name="registrasi" class="btn btn-primary">Sign Up</button>
                                    <p>Sudah punya akun? Sign in <a href="login.php" class="pt-5"><br>disini!</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Script JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>