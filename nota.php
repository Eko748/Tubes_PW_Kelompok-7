<?php
//panggil file koneksi.php yang sudah anda buat
include "connect.php";
?>
<html></html>
<head>
    <title>Meubel Kami</title>
    <link rel='stylesheet' href='assets/style.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background: -webkit-linear-gradient(left, black, orange);
}

li {
  float: right;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 20px;
  padding-right: 20px;
  text-decoration: none;
  font-family: "Times New Roman", Times, serif;
  font-size: 20px;
}

li a:hover {
  background-color: black;
}
.table{
	border-collapse: collapse;
}
input[type=submit] {
      width: 15%;
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
<header>
        
    <ul>
    <li style="float: left;"><div class="logo"><h1>Meubel Kami</h1></div></li>
    <li><a href="logout.php" class="form-inline my-2 my-lg-0 btn btn-secondary">Logout</a></li>
    <li><a href='./checkout/index.php'>Checkout</a></li>
    <li><a href='home.php'>Riwayat</a></li>
    <li><a href=''>About</a></li>
    <li><a class="active" href='./home.php'>Home</a></li>
    </ul>  
</header>
<div class="content">
    <fieldset style="background: orange;">
<h2>Nota</h2>
<hr>
    <table border="1" width="400px" class="table">
       <thead>
       <tr style="background:orangered;">
           <th>No</th>
           <th>Nama</th>
           <th>Alamat</th>
           <th>Tanggal Pemesanan</th>
           <th>Tanggal Pengiriman</th>
           <th>Nama Item</th>
       </tr>
       </thead>
       </fieldset>
       <form action="home.php" method="post">
	<input type="submit" value="Kembali">				
	</form> 
       <tbody>
<?php
//ambil data dari tb_user di database
$ambildata=mysqli_query($koneksi, "SELECT * FROM checkout order by id desc");
while($a=mysqli_fetch_array($ambildata)){
    ?>
       <tr>
        <td><?php echo $a['id'];?></td>
           <td><?php echo $a['nama'];?></td>
           <td><?php echo $a['alamat'];?></td>
           <td><?php echo $a['tanggal_pemesanan'];?></td>
           <td><?php echo $a['tanggal_pengiriman'];?></td>
           <td><?php echo $a['nama_item'];?></td>
       </tr>
<?php
}
?>
</tbody>
</table>    
<br><br><br><br><br><br><br><br><br><br>
    <footer>
        <div class="logo">
        <center><h2>-Meubel Kami- &copy; 2021</h2></center>
        </div>
    </footer>
</body>
<style>
    body {
      margin: 0;
      font-family: "Lato", sans-serif;
    }

    footer{
        font-family: 'Libre Franklin', sans-serif;
        background: -webkit-linear-gradient(left, black, orange);
        color: white;
        padding: 20px;
        float: center;
    }

    .logo {
      padding-left: 15px;
      color: #00BFFF;
    }

    .sidebar {
      margin: 0;
      padding: 0;
      width: 400px;
      background-color: #f1f1f1;
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
      background-color: #4CAF50;
      color: white;
      width: 110px;

    }

    .sidebar a:hover:not(.active) {
      background-color: #555;
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
    body {
        background: -webkit-linear-gradient(bottom, orange, black);
        background-repeat: no-repeat;
        background-size: cover;
    }

    .bd-placeholder-img {
        font-size: 100%;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    #card {
        background: -webkit-linear-gradient(bottom, #FFFF, #00BFFF);
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        margin: 1rem auto 0.1rem auto;
        height: 99%;
        width: 99%;
        text-align: center;
    }

    #card a {
        border: 1px solid #00BFFF;
        padding: 10px;
        color: white;
        background: #00BFFF;
        text-decoration: none;
        border-radius: 20px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        cursor: pointer;
    }

    #card-content {
        padding: 12px 44px;
    }


    .starter-template {
        font-family: "Raleway Thin", sans-serif;
        letter-spacing: 2px;
        padding-bottom: 10px;
        padding-top: 5px;
        text-align: center;
        color: white;
    }

    .underline-title {
        background: -webkit-linear-gradient(right, #00BFFF, #FFFF);
        height: 2px;
        margin: -1.1rem auto 0 auto;
        width: 380px;
    }

    .gambar {
        width: 90%;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        margin: auto;
    }

    .gambar .foto img {
        width: 100%;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
    }

    .foto {
        border: 1px solid black;
        border-radius: 8px;
        margin: 10px;
        text-align: center;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
    }

    .foto a {
        border: 1px solid #00BFFF;
        padding: 10px;
        color: white;
        background: #00BFFF;
        text-decoration: none;
        border-radius: 20px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        cursor: pointer;
    }
    
</style>
</body>
</html>