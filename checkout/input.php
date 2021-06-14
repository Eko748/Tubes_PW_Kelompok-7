<!DOCTYPE html>
<html>
<head>
	<title>Meubel Kami</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
.container{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 20px 25px;
    width: 300px;

    background-color: rgba(0,0,0,.7);
    box-shadow: 0 0 10px rgba(255,255,255,.3);}

	.container form input{
    width: calc(100% - 20px);
    padding: 8px 10px;
    margin-bottom: 15px;
    border: none;
    background-color: transparent;
    border-bottom: 2px solid #2979ff;
    color: #fff;
    font-size: 20px;
}
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
	input[type=date],
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
	<form action="index.php" method="post">
	<input type="submit" value="Lihat Semua Data">				
	</form>	<br/>
	<fieldset style="background: orange;">
	<h2>Input data baru</h2>
	<hr>
	<form action="input-aksi.php" method="post">
	<fieldset>		
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>					
			</tr>	
			<tr>
				<td>Tanggal Pemesanan</td>
				<td><input type="date" name="tanggal_pemesanan"></td>					
			</tr>	
			<tr>
				<td>Tanggal Pengiriman</td>
				<td><input type="date" name="tanggal_pengiriman"></td>					
			</tr>	
			<tr>
				<td>No Hp</td>
				<td><input type="text" name="no_hp"></td>					
			</tr>	
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>					
			</tr>	
			<tr>
            <td>Nama Item</td>
            <td>
                <select name="nama_item" id="nama_item" required="">
                    <option disabled="" selected="">-Pilih-</option>
                    <option value="Lemari Pyro">Lemari Pyro</option>
                        <option value="Lemari Elegant Edition">Lemari Elegant Edition</option>
                        <option value="Lemari Casual">Lemari Casual</option>
                        <option value="Kursi Sauna">Kursi Sauna</option>
                        <option value="Kursi Art Edition">Kursi Art Edition</option>
                        <option value="Kursi Relax">Kursi Relax</option>
                        <option value="Meja Fullset">Meja Fullset</option>
                        <option value="Meja Pyro">Meja Pyro</option>
                        <option value="Meja Casual">Meja Casual</option>
                        <option value="Rak Buku Fullset">Rak Buku Fullset</option>
                        <option value="Rak Buku 3 IN 1">Rak Buku 3 IN 1</option>
                        <option value="Rak Buku Dendro">Rak Buku Dendro</option>
                        <option value="Buffet Big Bang">Buffet Big Bang</option>
                        <option value="Buffet Pyro">Buffet Pyro</option>
                        <option value="Buffet Casual">Buffet Casual</option>
                        <option value="Ranjang Tidur Slimz">Ranjang Tidur Slimz</option>
                        <option value="Ranjang Tidur Mono">Ranjang Tidur Mono</option>
                        <option value="Ranjang Tidur Geo">Ranjang Tidur Geo</option>
                        <option value="Kursi Together">Kursi Together</option>
                        <option value="Kursi Santuy">Kursi Santuy</option>
                        <option value="Kursi Old Edition">Kursi Old Edition</option>
                </select>
            </td>
        </tr>
			<tr>
				<td></td>
				<td><input onclick="alert('Data Berhasil Diinput!')" class="fas fa-save" style="background: #00CC00; padding:4px; " type="submit" value="Simpan"></td>					
			</tr>				
		</table>
		</fieldset>
	</form>
	<footer>
        <div class="logo">
        <center><h2>-Meubel Kami- &copy; 2021</h2></center>
        </div>
    </footer>
	</fieldset>
	
</body>
</html>