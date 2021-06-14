<?php 

include 'koneksi.php';
$id = $_POST['id'];
$kode_produk = $_POST['kode_produk'];
$nama_produk = $_POST['nama_produk'];
$gambar = $_POST['gambar'];
$bahan_baku = $_POST['bahan_baku'];
$kategori = $_POST['kategori'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
mysqli_query($koneksi, "UPDATE produk SET kode_produk=$kode_produk nama_produk='$nama_produk', gambar='$gambar', bahan_baku='$bahan_baku', kategori='$kategori', stok=$stok harga='$harga' WHERE id='$id'");

header("location:index.php?pesan=update");
?>