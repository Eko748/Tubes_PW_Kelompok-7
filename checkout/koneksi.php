<?php
 //koneksi ke database akademik
 $server = "localhost";
 $user = "root";
 $pass = "";
 $dbname = "database_user";

 $koneksi = mysqli_connect($server,$user,$pass,$dbname);
 if(mysqli_connect_errno()){
  echo "Koneksi database gagal".mysqli_connect_error();
 }
?>