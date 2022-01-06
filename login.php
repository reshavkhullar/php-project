<html>
<body>
<head>
   <link rel="stylesheet" href="style.css">
  <title></title>
  <div class="main-login">
  <h1 class="super-login">Login</h1>

<?php
$configs = include('config.php');

?>


<form action="" method="post">
  <div class="form-group-1">
    <input type="text" class="form-control" name="username"id="Enter Username" aria-describedby="Enter Username" placeholder="Enter Username">
  </div>
  <div class="form-group-2">
    <input type="password" class="form-control" name="password"id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-button">
  <button type="submit" class="btn btn-primary">LOGIN</button>
 <div>
</form>
<p><a href="https://www.w3schools.com">Forgot Password?</a></p>
<p><a href="http://localhost/reshav/sign-up.php">Dont Have an Account? Sign Up?</a></p>
<div>
  </body>
</head>
</html>