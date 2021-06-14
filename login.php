<?php
session_start();
include_once('db_connect.php');
$database = new database();

if (isset($_SESSION['is_login'])) {
  header('location:home.php');
}

if (isset($_COOKIE['username'])) {
  $database->relogin($_COOKIE['username']);
  header('location:home.php');
}

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  if (isset($_POST['remember'])) {
    $remember = TRUE;
  } else {
    $remember = FALSE;
  }

  if ($database->login($username, $password, $remember)) {
    if ($_SESSION['role'] == 1) {
      header('location:homedash.php');
    } else {
      header('location:home.php');
    }
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <title>Login Form</title>
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
      background-color: #f2f2f2;
      padding: 20px;
    }
  </style>
</head>
<body class="text-center">
  <div id="card">
    <form class="form-signin" method="post" action="">
      <center>
            <h2 style="color:orange">L O G I N</h2>
            <br>
        <label for="username" class="sr-only">Username</label> <br>
        <input type="text" id="username" class="form-control" placeholder="Username" name="username" required autofocus>
        <br>
        <label for="password" class="sr-only">Password </label> <br>
        <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
        
        <br><br>
        <button onclick="alert('Berhasil Masuk')" class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button>
        <p>Belum punya akun? <a href="register.php" class="btn btn-lg btn-success btn-block">Register</a> disini!</p>
        <br><br><br><br><br><br>
      </center>
      <p class="mt-5 mb-3 text-muted">-Meubel Kami- &copy; 2021</p>
    </form>
  </div>
</body>
<br><br><br>

</html>