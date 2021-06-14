<?php
include_once('db_connect.php');
$database = new database();
if (isset($_POST['register'])) {
  $username = $_POST['username'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $nama = $_POST['nama'];
  if ($database->register($username, $password, $nama)) {
    header('location:login.php');
  }
}

?>
<!doctype html>
<html lang="en" class="h-100">

<head>
  <title>Register Form</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

  <style>
    .btn-primary {
      background-color: #00BFFF;
      color: white;
      border-radius: 5px;
      box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
      padding: 5px 10px;
      text-decoration: none;
      font-family: sans-serif;
      font-size: 9pt;
    }

    body {
      background: -webkit-linear-gradient(bottom, black, orange);
      background-repeat: no-repeat;
      background-size: cover;
    }

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    #card {
      text-align: center;
      background: -webkit-linear-gradient(bottom, orange, black);
      border-radius: 8px;
      box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
      height: 410px;
      margin: 6rem auto 8.1rem auto;
      width: 329px;
    }

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    .form-control {
      box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);

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

    button[type=submit] {
      width: 100%;
      background-color: orange;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button[type=submit]:hover {
      background-color: #CC7000;
    }

    div {
      border-radius: 5px;
      background-color: #1B1E23;
      padding: 20px;
    }
  </style>
</head>

<body class="d-flex flex-column h-100">
  <div id="card">
    <center>
          <h2 style="color: orange">R E G I S T E R</h2>
          <br>
        <form method="post" action="">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Username">
           

            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">


            <label for="password" class="col-sm-2 col-form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Password">
           
          <br>
          <br>
              <button onclick="alert('Data Telah Masuk! Harap Login.')" type="submit" class="btn btn-primary" name="register"> Register</button>
              <p>Sudah punya akun? <a href="login.php" class="btn btn-success">Login</a> disini!</p>
        </form>
        <br><br>

    </center>
    <p class="mt-5 mb-3 text-muted"> -Meubel Kami- &copy; 2021</p>
  </div>
</body>
<br><br><br>
</html>