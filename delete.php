<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM tb_user WHERE id='$id'")or die(mysqli_error($koneksi));

header("location:users.php?pesan=hapus");
?>