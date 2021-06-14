<?php
session_start();
if (!isset($_SESSION['is_login'])) {
    header('location:login.php');
}
?>

<head>
    <title>Meubel Kami</title>
    <link rel='stylesheet' href='assets/style.css'>
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
    </style>
</head>
<body>
<header>
        
    <ul>
    <li style="float: left;"><div class="logo"><h1>Meubel Kami</h1></div></li>
    <li><a onclick="alert('Berhasil Keluar!')" href="logout.php" class="form-inline my-2 my-lg-0 btn btn-secondary">Logout</a></li>
    <li><a href='./checkout/index.php'>Checkout</a></li>
    <li><a href='nota.php'>Riwayat</a></li>
    <li><a href=''>About</a></li>
    <li><a class="active" href=''>Home</a></li>
    </ul>
    
</header>
<div class="starter-template">
    <h1>Selamat Datang <?php echo $_SESSION['nama']; ?></h1>
    <div class="underline-title"></div>
</div>
    <div class='gambar'>
        <div id="card">
            <div class='foto'>
                <img src='assets/lemari2.jpg'>
                <h1>Lemari Pyro</h1>
                <p>Harga Rp.6.132.028</p>
                <a href='checkout/index.php'>Beli Sekarang</a>
            </div>
        </div>

        <div id="card">
            <div class='foto'>
                <img src='assets/lemari3.jpg'>
                <h1>Lemari Elegant Edition</h1>
                <p>Harga Rp.6.500.799</p>
                <a href='checkout/index.php'>Beli Sekarang</a>
            </div>
        </div>

        <div id="card">
            <div class='foto'>
                <img src='assets/lemari4.jpg'>
                <h1>Lemari Casual</h1>
                <p>Harga Rp.5.120.999</p>
                <a href='checkout/index.php'>Beli Sekarang</a>
            </div>
        </div>

        <div id="card">
            <div class='foto'>
                <img src='assets/kursi5.jpg'>
                <h1>Kursi Sauna</h1>
                <p>Harga Rp.1.997.547</p>
                <a href='checkout/index.php'>Beli Sekarang</a>
            </div>
        </div>

        <div id="card">
            <div class='foto'>
                <img src='assets/kursi6.jpg'>
                <h1>Kursi Art Edition</h1>
                <p>Harga Rp.577.000</p>
                <a href='checkout/index.php'>Beli Sekarang</a>
            </div>
        </div>

        <div id="card">
            <div class='foto'>
                <img src='assets/kursi7.jpg'>
                <h1>Kursi Relax</h1>
                <p>Harga Rp.1.806.002</p>
                <a href='checkout/index.php'>Beli Sekarang</a>
            </div>
        </div>

        <div id="card">
            <div class='foto'>
                <img src='assets/mejab1.jpg'>
                <h1>Meja Fullset</h1>
                <p> Harga Rp.2.599.999</p>
                <a href='checkout/index.php'>Beli Sekarang</a>
            </div>
        </div>

        <div id="card">
            <div class='foto'>
                <img src='assets/mejab3.jpg'>
                <h1>Meja Pyro</h1>
                <p>Harga Rp.2.122.221</p>
                <a href='checkout/index.php'>Beli Sekarang</a>
            </div>
        </div>

        <div id="card">
            <div class='foto'>
                <img src='assets/mejab2.jpg'>
                <h1>Meja Casual</h1>
                <p>Harga Rp.1.578.990</p>
                <a href='checkout/index.php'>Beli Sekarang</a>
            </div>
        </div>

        <div id="card">
            <div class='foto'>
                <img src='assets/rb1.jpg'>
                <h1>Rak Buku Fullset</h1>
                <p>Harga Rp.2.543.210</p>
                <a href='checkout/index.php'>Beli Sekarang</a>
            </div>
        </div>

        <div id="card">
            <div class='foto'>
                <img src='assets/rb2.jpg'>
                <h1>Rak buku 3 IN 1</h1>
                <p>Harga Rp.1.533.333</p>
                <a href='checkout/index.php'>Beli Sekarang</a>
            </div>
        </div>

        <div id="card">
            <div class='foto'>
                <img src='assets/rb4.jpg'>
                <h1>Rak Buku Dendro</h1>
                <p>Harga Rp.2.577.999</p>
                <a href='checkout/index.php'>Beli Sekarang</a>
            </div>
        </div>

        <div id="card">
            <div class='foto'>
                <img src='assets/bf.jpg'>
                <h1>Buffet Big Bang</h1>
                <p>Harga Rp.8.999.999</p>
                <a href='checkout/index.php'>Beli Sekarang</a>
            </div>
        </div>

        <div id="card">
            <div class='foto'>
                <img src='assets/bf2.jpg'>
                <h1>Buffet Pyro</h1>
                <p>Harga Rp.2.911.170</p>
                <a href='checkout/index.php'>Beli Sekarang</a>
            </div>
        </div>

        <div id="card">
            <div class='foto'>
                <img src='assets/bf3.jpg'>
                <h1>Buffet Casual</h1>
                <p>Harga Rp.1.491.333</p>
                <a href='checkout/index.php'>Beli Sekarang</a>
            </div>
        </div>

        <div id="card">
            <div class='foto'>
                <img src='assets/rj.jpg'>
                <h1>Ranjang Tidur Slimz</h1>
                <p>Harga Rp.5.491.222</p>
                <a href='checkout/index.php'>Beli Sekarang</a>
            </div>
        </div>

        <div id="card">
            <div class='foto'>
                <img src='assets/rj5.jpg'>
                <h1>Ranjang Tidur Mono</h1>
                <p>Harga Rp.4.444.999</p>
                <a href='checkout/index.php'>Beli Sekarang</a>
            </div>
        </div>

        <div id="card">
            <div class='foto'>
                <img src='assets/rj3.jpg'>
                <h1>Ranjang Tidur Geo</h1>
                <p>Harga Rp.3.496.999</p>
                <a href='checkout/index.php'>Beli Sekarang</a>
            </div>
        </div>

        <div id="card">
            <div class='foto'>
                <img src='assets/kt3.jpg'>
                <h1>Kursi Togheter</h1>
                <p>Harga Rp.1.579.999</p>
                <a href='checkout/index.php'>Beli Sekarang</a>
            </div>
        </div>

        <div id="card">
            <div class='foto'>
                <img src='assets/kt4.jpg'>
                <h1>Kursi Santuy</h1>
                <p>Harga Rp.2.491.190</p>
                <a href='checkout/index.php'>Beli Sekarang</a>
            </div>
        </div>

        <div id="card">
            <div class='foto'>
                <img src='assets/kt.jpg'>
                <h1>Kursi Old Edition</h1>
                <p>Harga Rp.1.999.999</p>
                <a href='checkout/index.php'>Beli Sekarang</a>
            </div>
        </div>
        <br>
    </div>
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
        border-radius: 8px;
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