<!DOCTYPE html>
<html>
<body>
<h1> My first project </h1>
<?php
$x = 5;
echo "<p>Variable x outside function is: $x</p>";
function myTest($y=5) {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $y</p>";

} 
myTest();
?>


</body>
</html>