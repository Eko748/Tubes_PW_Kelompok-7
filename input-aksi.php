<?php 
include 'koneksi.php';
$kode_produk = $_POST['kode_produk'];
$nama_produk = $_POST['nama_produk'];
$gambar = $_POST['gambar'];
$bahan_baku = $_POST['bahan_baku'];
$kategori = $_POST['kategori'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];

mysqli_query($koneksi, "INSERT INTO produk VALUES('','$kode_produk','$nama_produk','$gambar','$bahan_baku','$kategori','$stok','$harga')");

header("location:index.php?pesan=input");
?>