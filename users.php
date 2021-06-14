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
  </style>
</head>

<body>
  <div class="navbar">
    <h2 class="admin">Dashboard <span>Admin</span></h2>
  </div> 
  <div id="wrapper" style="display: flex; flex-direction: row;">
    <div class="sidebar">
      <a href="./homedash.php"><i class="fa fa-home"></i> Home</a>
      <a class="active" href="./users.php"><i class="fa fa-users"></i> Customer</a>
      <a href="./index.php"><i class="fa fa-cogs"></i> Produk</a>
      <a href="./laporan.php"><i class="fa fa-shopping-cart"></i>  Laporan</a>
      <a href="./index.html"><i class="fa fa-pencil"></i>  Absensi</a>
      <a onclick="alert('Berhasil Keluar!')" href="logout.php" class="form-inline my-2 my-lg-0 btn btn-secondary"><i class="fa fa-sign-out"></i> Logout</a>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>

    <div class="content">
    <fieldset style="background: orange;">
<h2> Daftar User</h2>
<hr>
    <table border="1" width="400px" class="table">
       <thead>
       <tr style="background:orangered;">
           <th>No</th>
           <th>Username</th>
           <th>Password</th>
           <th>Nama</th>
           <th>Role</th>
           <th>Aksi</th>
       </tr>
       </thead>
       </fieldset>
       <tbody>
<?php
//ambil data dari tb_user di database
$ambildata=mysqli_query($koneksi, "SELECT * FROM tb_user order by id desc");
while($a=mysqli_fetch_array($ambildata)){
    ?>
       <tr>
       <td><?php echo $a['id'];?></td>
           <td><?php echo $a['username'];?></td>
           <td><?php echo $a['password'];?></td>
           <td><?php echo $a['nama'];?></td>
           <td><?php echo $a['role'];?></td>
           <td>
				<a onclick="alert('Data User Berhasil Dihapus!')" class="hapus" href="delete.php?id=<?php echo $a['id']; ?>">Hapus</a>					
			</td>
       </tr>
<?php
}
?>
</tbody>

</table>
</body>

</html>