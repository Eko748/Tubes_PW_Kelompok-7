<?php
//panggil file koneksi.php yang sudah anda buat
include "koneksi.php";
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
<div class="admin"></div>
<a href="./homedash.php"><i class="fa fa-home"></i> Home</a>
      <a href="./users.php"><i class="fa fa-users"></i> Customer</a>
      <a class="active" href="./index.php"><i class="fa fa-cogs"></i> Produk</a>
      <a href="./laporan.php"><i class="fa fa-shopping-cart"></i> Laporan</a>
      <a href="./index.html"><i class="fa fa-pencil"></i>  Absensi</a>
      <a onclick="alert('Berhasil Keluar!')" href="logout.php" class="form-inline my-2 my-lg-0 btn btn-secondary"><i class="fa fa-sign-out"></i> Logout</a>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    </div>

    <div class="content">
    <?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
  <form action="input.php" method="post">
	<input type="submit" value="Tambah Data Baru">				
	</form>
<fieldset style="background: orange;">
	<h3>Data Produk</h3>
	<hr>
	<table border="1" class="table">
		<tr style="background: orangered;">
			<th>No</th>
      <th>Kode Produk</th>
			<th>Nama Produk</th>
			<th>Gambar</th>
			<th>Bahan Baku</th>
			<th>Kategori</th>
      <th>Stok</th>		
			<th>Harga</th>		
			<th>Aksi</th>		
	
		</tr>
		</fieldset>
    <?php 
      include "koneksi.php";
      $query_mysql = mysqli_query($koneksi, "SELECT * FROM produk")or die(mysqli_error($koneksi));
      $nomor = 1;
      while($data = mysqli_fetch_array($query_mysql)){
      ?>
      <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $data['kode_produk']; ?></td>
        <td><?php echo $data['nama_produk']; ?></td>
        <td><?php echo $data['gambar']; ?></td>
        <td><?php echo $data['bahan_baku']; ?></td>
        <td><?php echo $data['kategori']; ?></td>
        <td><?php echo $data['stok']; ?></td>
        <td><?php echo $data['harga']; ?></td>
        <td>
          <button class="fa fa-edit" style="background: yellow; padding:5px; padding-right:10px; border-radius: 6px;"><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></button> |
          <button onclick="alert('Data Berhasil Dihapus!')" class="fa fa-trash" style="background: red; padding:5px; border-radius: 6px;"><a href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a></button>					
        </td>
      </tr>
      <?php } ?>
	</table>
</body>
</html>