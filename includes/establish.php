
<?php
/*------------------This treats the real server----------------------\\
  $servername = "localhost";
  $username = "Jinn";
  $password = "R1465my5187J";
  $name= "Blog-System";
  // Create connection
  $conn = mysqli_connect($servername, $username, $password,$name);

  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
*/
$servername = "localhost";
$username = "Jinn";
$password = "14655187";
$name= "blog-system";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
