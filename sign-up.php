
<html>
<body>
<head>
   <link rel="stylesheet" href="style.css">
  <title></title>
  <div class="main-login">
  <h1 class="super-login">Sign-Up</h1>

<?php
$configs = include('config.php');

if(isset($_POST['submit'])){

   $username = $_POST['username'];
   $email = $_POST['email'];
   $password = md5($_POST['password']);

    $Query = "SELECT user_email FROM user Where user_email='".$email."'";
    $Result = $conn->query($Query);

    if($Result->num_rows > 0)
    {
      echo "Email is already regsitered !";
    }
    else{

      $sql = "INSERT INTO user (user_name, user_email, user_password)
      VALUES ('".$username."', '".$email."', '".$password."')";

      if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
}

?>




<form action="" method="post">
  <div class="form-group-1  normal-form">
    <input type="text" class="form-control" name="username" id="Enter Username" aria-describedby="Enter Username" placeholder="Enter Username">
  </div>
  <div class="form-group-1  normal-wait">
    <input type="email" class="form-control" name="email" id="email" aria-describedby="email" placeholder="email">
  </div>
  <div class="form-group-2">
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-button">
  <button type="submit" name="submit" class="btn btn-primary">Sign-Up</button>
 <div>
</form>
<div>
  </body>
</head>
</html>