<?php 
include 'connect.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM checkout WHERE id='$id'")or die(mysqli_error($koneksi));

header("location:laporan.php?pesan=hapus");
?>