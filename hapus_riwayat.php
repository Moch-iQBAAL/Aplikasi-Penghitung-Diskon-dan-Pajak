<?php

include 'koneksi.php';

$id = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM diskon WHERE id_diskon='$id'");
if($query){
    echo "<script>alert('Data berhasil dihapus!'); window.location.href='riwayat.php';</script>";
}else{
    echo "<script>alert('Gagal menghapus data!');</script>";
}

?>