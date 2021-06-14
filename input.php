<?php
//panggil file koneksi.php yang sudah anda buat
include "connect.php";
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <style>
   body{
	font-family: 'roboto';
	color: #000;
}

.judul{
	background: #87D1D8;
	padding: 10px;
	text-align: center;

}

.judul h1,h2,h3{
	height: 15px;
}

a{
	/*color: #fff;*/
	padding: 5px;
	text-decoration: none;	
}


.table{
	border-collapse: collapse;
}

table.table th th , table.table tr td{
	padding: 10px 20px	;
}
    body {
      margin: 0;
      font-family: "Lato", sans-serif;
      background: -webkit-linear-gradient(left, orange, black);

    }

    .navbar {
      display: inline-block;
      width: 97.5%;
      height: 60px;
      background: -webkit-linear-gradient(right, black, orange);
      border-bottom: 2px solid #585858FF;
      padding: 10px;
      padding-left: 20px;
    }

    .logo {
      padding-left: 15px;
      color: #00BFFF;
    }

    .sidebar {
      margin: 0;
      padding: 0;
      width: 150px;
      background-color: orange;
      box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
      height: 100%;
      overflow: auto;
    }

    .sidebar a {
      display: block;
      color: black;
      padding: 20px;
      text-decoration: none;
    }

    .sidebar a.active {
      background-color: #CC7000;
      color: white;
      width: 110px;

    }

    .sidebar a:hover:not(.active) {
      background-color: #CC7000;
      color: white;
    }

    div.content {
      margin-left: 10px;
      padding: 1px 16px;
      height: 100px;
    }

    @media screen and (max-width: 700px) {
      .sidebar {
        width: auto;
        padding-right: 11px;
        height: auto;
      }

      .sidebar a {
        float: left;
      }

      div.content {
        margin-left: 0;
      }
    }

    @media screen and (max-width: 400px) {
      .sidebar a {
        text-align: center;
        float: none;
        width: auto;
        height: auto;
      }
    }
	input[type=text],
    select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    input[type=password],
    select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type=submit] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

  </style>
</head>

<body>
  <div class="navbar">
    <h2 class="admin">Dashboard <span>Admin</span></h2>
  </div> 
  <div id="wrapper" style="display: flex; flex-direction: row;">
    <div class="sidebar">
      <a href="./homedash.php"><i class="fa fa-home"></i> Home</a>
      <a href="./users.php"><i class="fa fa-users"></i> Customer</a>
      <a class="active" href="./index.php"><i class="fa fa-cogs"></i> Produk</a>
      <a href="./laporan.php"><i class="fa fa-shopping-cart"></i>  Laporan</a>
      <a href="logout.php" class="form-inline my-2 my-lg-0 btn btn-secondary"><i class="fa fa-sign-out"></i> Logout</a>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>

    <div class="content">
	<form action="index.php" method="post">
	<input type="submit" value="Lihat Semua Data">				
	</form>

	<fieldset style="background: orange;">
	<h2>Input data baru</h2>
	<hr>
	<form action="input-aksi.php" method="post">
	<fieldset>		
		<table>
			<tr>
				<td>Kode Produk</td>
				<td><input type="text" name="kode_produk"></td>					
			</tr>
			<tr>
				<td>Nama Produk</td>
				<td><input type="text" name="nama_produk"></td>					
			</tr>	
			<tr>
				<td>Gambar</td>
				<td><input type="file" name="gambar"></td>					
			</tr>	
			<tr>
				<td>Bahan Baku</td>
				<td><input type="text" name="bahan_baku"></td>					
			</tr>	
			<tr>
				<td>Kategori</td>
				<td><input type="text" name="kategori"></td>					
			</tr>
			<tr>
				<td>Stok</td>
				<td><input type="text" name="stok"></td>					
			</tr>	
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga"></td>					
			</tr>		
			<tr>
				<td></td>
				<td><input onclick="alert('Data Berhasil Disimpan!')" type="submit" value="Simpan"></td>					
			</tr>				
		</table>
		</fieldset>
	</form>
	</fieldset>
</html>