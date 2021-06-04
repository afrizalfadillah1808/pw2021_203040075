
<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "pw20075", "#Akun#203040075#");
    mysqli_select_db($conn, "pw20075_tubes_pw_203040075");

    return $conn;
}

function query($sql)
{

    $conn = koneksi();
    $result = mysqli_query($conn, $sql);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    // ambil data dari tiap elemen dalam form
    $conn = koneksi();
    $judul = htmlspecialchars($data['judul']);
    $pengarang = htmlspecialchars($data['pengarang']);
    $penerbit = htmlspecialchars($data['penerbit']);
    $tahun = htmlspecialchars($data['tahun']);
    $harga = htmlspecialchars($data['harga']);
    // $img = htmlspecialchars($data['img']);

    // upload gambar
    $img = upload();
    if (!$img) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO buku
                    VALUES
                    ('', '$img', '$judul', '$pengarang', '$penerbit', '$tahun', '$harga')";
    
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    echo mysqli_error($conn);

    return mysqli_affected_rows($conn);
}

function ubah($data)
    {
        // ambil data dari tiap elemen dalam form
        $conn = koneksi();
        // ambil data dari tiap elemen dalam form
        $id = $data["id"] ;
        $img = htmlspecialchars($data["img"]) ;
        $judul = htmlspecialchars($data["judul"]) ;
        $pengarang = htmlspecialchars($data["pengarang"]) ;
        $penerbit = htmlspecialchars($data["penerbit"]) ;
        $tahun = htmlspecialchars($data["tahun"]) ;
        $harga = htmlspecialchars($data["harga"]) ;
 
        $query = "UPDATE buku SET
                     img = '$img',
                     judul = '$judul',
                     pengarang = '$pengarang' ,
                     penerbit = '$penerbit',
                     tahun = '$tahun',
                     harga = '$harga'
                     WHERE id = $id
                  ";
        mysqli_query($conn, $query) or die(mysqli_error($conn)) ;

        echo mysqli_error($conn);
    
        return mysqli_affected_rows($conn);
    }

function hapus($id) 
 {
    $conn = koneksi();

    // menghapus gambar di folder img
    $bk = query("SELECT * FROM buku WHERE id = $id");
    if ($bk['img'] != 'nofoto.png') {
        unlink('../assets/img/' . $bk['img']);
    }


    mysqli_query($conn, "DELETE FROM buku WHERE id = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function cari($keyword) 
{
    $conn =  koneksi();
    $query = "SELECT * FROM buku
                WHERE 
                judul LIKE '%$keyword%' OR
                pengarang LIKE '%$keyword%' OR
                penerbit LIKE '%$keyword%' OR
                tahun LIKE '%$keyword%'
                ";

    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;

}

function login($data)
{
    $conn = koneksi();

    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    if($user = query("SELECT * FROM user WHERE username = '$username'")[0])
    {       
        // cek password
        if(password_verify($password, $user['password'])) {
            // set session
            $_SESSION['login'] = true;


            // jika admin
            if( $user['status'] == 'admin') {
                $_SESSION['status'] = 'admin';
                header("Location: admin.php");
                exit;
            } else {
                // jika user biasa
                $_SESSION['status'] = 'user';
                header("Location: ../index.php");
                exit;
            }
        }
    }



}

function registrasi($data) 
{
    $conn = koneksi() ;

    $username = htmlspecialchars(strtolower($data['username'])) ;
    $password1 = mysqli_real_escape_string($conn, $data['password1']) ;
    $password2 = mysqli_real_escape_string($conn, $data['password2']) ;
    $status = htmlspecialchars($data['status']);

    // Jika username atau password kosong
    if(empty($username) || empty($password1) || empty($password2)) {
        echo "<script>
                alert('Username / Password tidak boleh kosong!') ;
                document.location.href = 'registrasi.php' ;
             </script>" ;
        
        return false ;
    }

    // jika username sudah ada 
    if(query("SELECT * FROM user WHERE username = '$username'")) {
        echo "<script>
                alert('Username sudah terdaftar!') ;
                document.location.href = 'registrasi.php' ;
             </script>" ;
        
        return false ;            
    }

    // jika konfirmasi password tidak sesuai
    if($password1 !== $password2) {
        echo "<script>
                alert('Konfirmasi Password tidak sesuai!') ;
                document.location.href = 'registrasi.php' ;
             </script>" ;
        
        return false ;
    }

    // jika minimal password lebih kecil dari 5 digit
    if(strlen($password1) < 5) {
        echo "<script>
                alert('Password terlalu pendek!') ;
                document.location.href = 'registrasi.php' ;
             </script>" ;
        
        return false ;            
    }

    // jika username dan password sudah sesuai
    // enkripsi password
    $password_baru = password_hash($password1, PASSWORD_DEFAULT) ;

    // insert ke tabel user
    $query = "INSERT INTO user VALUES (null, '$username', '$password_baru', '$status')" ;

    mysqli_query($conn, $query) or die(mysqli_error($conn)) ;

    return mysqli_affected_rows($conn) ;

}