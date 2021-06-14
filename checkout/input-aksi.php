<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tanggal_pemesanan = $_POST['tanggal_pemesanan'];
$tanggal_pengiriman = $_POST['tanggal_pengiriman'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];
$nama_item = $_POST['nama_item'];

mysqli_query($koneksi, "INSERT INTO checkout VALUES('','$nama','$alamat','$tanggal_pemesanan','$tanggal_pengiriman','$no_hp','$email', '$nama_item')");

header("location:index.php?pesan=input");
?>