
<?php
$servername = "localhost";
$username = "";
$password = "";
$name= "blog-system";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
