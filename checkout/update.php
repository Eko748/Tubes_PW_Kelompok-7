<?php 

include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tanggal_pemesanan = $_POST['tanggal_pemesanan'];
$tanggal_pengiriman = $_POST['tanggal_pengiriman'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];
$nama_item = $_POST['nama_item'];

mysqli_query($koneksi, "UPDATE checkout SET nama='$nama', alamat='$alamat', tanggal_pemesanan='$tanggal_pemesanan', tanggal_pengiriman='$tanggal_pengiriman', no_hp='$no_hp', email='$email', nama_item='$nama_item' WHERE id='$id'");

header("location:index.php?pesan=update");
?>