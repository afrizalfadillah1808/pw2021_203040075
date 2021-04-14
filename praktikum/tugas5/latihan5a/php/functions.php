<!-- 
    NAMA : Muhammad Afrizal Fadillah
    NPM : 203040075
    Kelas : B
    MataKuliah : Praktikum Pemrograman Web
    Shift : Jumat, 10.00 WIB
 -->

<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040075");

    return $conn;
}

function query ($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}