<?php
function koneksi()
{
    return mysqli_connect("localhost", "root", "", "pw_tubes_203040075");
}
function query($query)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $query);

    // jika hasilnya hanya satu data
    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

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
    $nrp = htmlspecialchars($data['nrp']);
    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $img = htmlspecialchars($data['img']);

    // query insert data
    $query = "INSERT INTO mahasiswa
                    VALUES
                    ('', '$img', '$nrp', '$nama', '$email', '$jurusan')";
    
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    echo mysqli_error($conn);

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    // ambil data dari tiap elemen dalam form
    $conn = koneksi();
    $id = $data['id'];
    $nrp = htmlspecialchars($data['nrp']);
    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $img = htmlspecialchars($data['img']);

    // query update data
    $query ="UPDATE mahasiswa SET
                nrp = '$nrp',
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan',
                img = '$img'
             WHERE id = $id";
                
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    echo mysqli_error($conn);

    return mysqli_affected_rows($conn);
}

function cari($keyword) 
{
    $conn =  koneksi();

    $query = "SELECT * FROM mahasiswa 
                WHERE nama LIKE '%$keyword%'";
    
    $result =  mysqli_query($conn, $query);

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

    // cek dulu username
    if($user = query("SELECT * FROM user WHERE username = '$username'")) {
        // cek password
        if(password_verify($password, $user['password'])) {

            
        // set session
        $_SESSION['login'] = true;

        header("Location: ../index.php");
        exit;
        }
            return [
                "error" => true,
                'pesan' => 'username / Password Salah!'
            ];
        
    }
        

}

function registrasi($data) 
{
    $conn = koneksi();

    $username = htmlspecialchars(strtolower($data['username']));
    $password1 = mysqli_real_escape_string($conn, $data['password1']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    if(empty($username) || empty($password1) || empty($password2) ) {
        echo "<script>
                alert('username / password tidak boleh kosong!');
                document.location.href = 'registrasi.php';
            </script>";
        return false;
    } 

    // jika username sudah ada
    if (query("SELECT * FROM user WHERE username = '$username'")) {
        echo "<script>
                alert('username sudah terdaftar!');
                document.location.href = 'registrasi.php';
            </script>";
        return false;
    }

    // jika konfirmasi password tidak sesuai
    if ($password1 !== $password2) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
                document.location.href = 'registrasi.php';
            </script>";
        return false;
    }

    // jika password < 5 digit
    if(strlen($password1) < 5) {
        echo "<script>
                alert('password terlalu pendek');
                document.location.href = 'registrasi.php';
            </script>";
        return false;
    }

    // jika username & password sudah sesuai
    // enkripsi password
    $password_baru = password_hash($password1, PASSWORD_DEFAULT);
    // insert ke tabel user
    $query = "INSERT INTO user
                VALUES
                (null, '$username', '$password_baru')
                ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);

}