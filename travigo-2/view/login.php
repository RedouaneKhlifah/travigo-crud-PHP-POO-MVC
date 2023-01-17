<?php 

include_once "../controller/login.php";
if (session_start() !== null ){
  session_destroy();
}


if (isset($_POST["submit"])){
//   $gmail = $_POST["gmail"];
//   $password = $_POST["password"];

//   if (empty($gmail)){
//     header("location:login.php?ereur=username is requiered");
//     exit();
//   }else if(empty($password)){
//     header("location:login.php?ereur=password is requiered");
//     exit();
// }else {
  $login = new login;

  $login->get_data($_POST);
}

if (isset($_SESSION['msg'])){
  $msg = $_SESSION['msg'];
}else {
  $msg = '';
}

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Animated Login Form | CodingNepal</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>

      <p class="text-danger text-center"> <?php echo $msg ?></p>
      
      <form method="post">
        <div class="txt_field">
          <input type="text" name="gmail" >
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" >
          <span></span>
          <label>Password</label>
        </div>
        <input type="submit" value="Login" name="submit">

        </div>
      </form>
    </div>

  </body>
</html>
