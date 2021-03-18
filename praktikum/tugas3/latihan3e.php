<?php 
$barang1 = [
    [
        "nama"=>"LAPTOP",
        "deskripsi"=>"LAPTOP WARNA SILVER",
        "detailSpek"=>"RAM 8GB - HDD 1TB - RAIZEN 5",
        "harga"=>4560,
        "stokBarang"=>15,
        "foto"=>"4.png"
    ],
   
];

$barang2 = [
    [
        "nama"=>"HANDPHONE",
        "deskripsi"=>"HANDPHONE WARNA HITAM",
        "detailSpek"=>"RAM 8GB - ROM 128GB - OS 10",
        "harga"=>5560,
        "stokBarang"=>20,
        "foto"=>"2.png"
    ],
   
];

function rupiahIDR($duit){
    return "Rp" . number_format($duit,2,',','.');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan3e 203040043</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bulma.min.js"></script>

</head>

<body>
    <div class="container mt-5 mb-5">
        <table id="cari" class="table is-bordered is-fullwidth is-hoverable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Deskripsi</th>
                    <th>Detail Spek</th>
                    <th>Harga</th>
                    <th>Stok Barang</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($barang1 as $dagang => $barang1) : ?>
                <tr>
                    <td><?= $dagang+1; ?></td>
                    <td><?= $barang1["nama"]; ?></td>
                    <td><?= $barang1["deskripsi"]; ?></td>
                    <td><?= $barang1["detailSpek"]; ?></td>
                    <td><?= rupiahIDR($barang1["harga"]) ?></td>
                    <td><?= $barang1["stokBarang"]; ?></td>
                    <td>
                        <figure class="image is-128x128">
                            <img src="img/<?= $barang1["foto"]; ?>" alt="">
                        </figure>
                    </td>
                </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#cari').DataTable();
    });
    </script>
</body>

</html>