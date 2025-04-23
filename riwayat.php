<?php

include 'koneksi.php';


?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Penghitung Diskon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow p-4">
        <h2 class="text-center mb-4 text-primary">🧾 Riwayat Perhitungan Aplikasi Diskon</h2>
        
        <table class="table table-bordered table-striped table-hover text-center">
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Harga Awal</th>
                <th class="text-center">Diskon (%)</th>
                <th class="text-center">Harga Diskon</th>
                <th class="text-center">Pajak (%)</th>
                <th class="text-center">Total Harga</th>
                <th class="text-center"> Aksi</th>
            </tr>
            <?php 
        $i = 1;
            $query = mysqli_query($conn, 'SELECT * FROM diskon');
            while($data = mysqli_fetch_array($query)){      
        ?>
            <tr>
                <td> <?php echo $i++; ?></td>
                <td> <?php echo 'Rp.  '. number_format($data['harga_awal'], 2, ',', '.');?></td>
                <td> <?php echo $data['diskon'] . "%"; ?></td>
                <td> <?php echo 'Rp.  '. number_format($data['harga_diskon'], 2, ',', '.');?></td>
                <td> <?php echo $data['pajak'] . "%"; ?></td>
                <td> <?php echo 'Rp.  '. number_format($data['total_harga'], 2, ',', '.');?></td>
                <td> <a href="hapus_riwayat.php?id=<?=$data['id_diskon']?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a></td>
            </tr>
        <?php    
        }
        ?>
        </table>

        <h5 class="text-center">Total Data: <?php echo mysqli_num_rows($query); ?></h5>
        
        <div class="r mt-4 d-flex justify-content-center gap-2">
    <a href="index.php" class="btn btn-warning">Kembali</a>

    <!-- DOWNLOAD BUTTON VIA EXCEL -->
    <?php
    $query = mysqli_query($conn, 'SELECT * FROM diskon');
    $file = fopen("riwayat.xls", "w");
    fwrite($file, "No\tHarga Awal\tDiskon (%)\tHarga Diskon\tPajak (%)\tTotal Harga\n");
    
    $i = 1;
    while ($data = mysqli_fetch_array($query)) {
        fwrite($file, $i++ . "\t" . $data['harga_awal'] . "\t" . $data['diskon'] . "\t" . $data['harga_diskon'] . "\t" . $data['pajak'] . "\t" . $data['total_harga'] . "\n");
    }
    fclose($file);
    ?>

    <a href="Riwayat.xls" download class="btn btn-success ">Download Via Excel</a>


    <!-- END OF DOWNLOAD BUTTON VIA EXCEL -->

    <!-- DOWNLOAD BUTTON VIA TXT -->
    <?php
    $query = mysqli_query($conn, 'SELECT * FROM diskon');
    $file = fopen("riwayat.txt", "w");
    fwrite($file, "No\tHarga Awal\tDiskon (%)\tHarga Diskon\tPajak (%)\tTotal Harga\n");
    
    $i = 1;
    while ($data = mysqli_fetch_array($query)) {
        fwrite($file, $i++ . "\t" . $data['harga_awal'] . "\t" . $data['diskon'] . "\t" . $data['harga_diskon'] . "\t" . $data['pajak'] . "\t" . $data['total_harga'] . "\n");
    }
    fclose($file);
    ?>

    <a href="Riwayat.txt" download class="btn btn-secondary">Download Via TXT</a>
    <!-- ENDOF DOWNLOAD BUTTON VIA XT -->
</div>      
</div>
</div>

<footer class="bg-dark text-white text-center py-4">
    <p>&copy; 2025 Penghitung Diskon & Pajak</p>
    <p>Created by <a href="https://github.com/achmadyusuf" class="text-white">Moch Iqbal</a></p>
     Instagram: <a href="mailto:U2LbM@example.com" class="text-white">@moch.iqbaal_</a> ||  Facebook: <a href="https://github.com/achmadyusuf" class="text-white">Muhamad Maulana Iqbal</a> 
    
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>