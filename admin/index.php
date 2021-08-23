<?php
include 'conf/conf.php';

session_start();

if(isset($_SESSION['login'])){
  header('Location: app/index.php');
}

if(isset($_POST['submit'])){
  if($_POST['username']==$username && $_POST['password']==$password){
    $_SESSION['login'] = 'true';
    header('Location: app/index.php');
  }else{
    header('Location: index.php');
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
  </head>
  <body>
    <form method="POST">
      <h3>Login</h3>
      <input type="text" name="username" placeholder="Username" class="form-control"><br>
      <input type="password" name="password" placeholder="Passowrd" class="form-control"><br>
      <input type="submit" name="submit" class="form-control-submit" value="Login">
    </form>
  </body>
</html>
<style>
html, body {
  font-family: Arial;
  text-align: center;
  padding-top: 50px;
  background-color: #1c2228;
  color: #fff;
}

form {
  background: #11181d;
  padding: 20px !important;
  border-radius: 10px;

  width: 300px;
  text-align: center;
  margin: auto;
  float: center;
}

input.form-control {
  font-family: Arial;
  border: 1px solid #303946;
  border-radius: 5px;
  outline: none;
  background: #303946;

  padding: 5px;
  margin: 5px;

  width: 260px;
  color: #fff;
}

input.form-control-submit {

  width: 200px;
  outline: none;
  border: none;
  border-radius: 5px;
  background: #1abc9c;

  color: #fff;
  font-weight: bold;
  font-family: Arial;

  padding: 5px;
  margin: 5px;
}

input.form-control-submit:hover {
  opacity: 0.5;
  cursor: pointer;
  transition-duration: 0.3s;
}
</style>