<?php
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
echo "Connected successfully";
?>

<?php
  $query = "SELECT * FROM blog";
  $select_all_categories_query = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_assoc($select_all_categories_query)){
      $post_number= $row['number'];
      $post_date= $row['date'];
      $post_title= $row['title'];
      $post_image= $row['image'];
      $post_description= $row['description'];
  }
  echo $post_description;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blog</title>
  <link rel="stylesheet" href="css/index.css">
</head>
<body>

  <nav id="navBar">
    <a class="navOption" href="index.php">Home</a>
    <a class="navOption" href="admin/admin-login.php">Admin</a>
  </nav>

  <section id= "info">
    <div class="titleContent" id="postNumber">-Post 1-</div>
    <div class="titleContent" id="date"> November 14, 2019</div>
    <div class="titleContent" id="title">A journey</div>
  </section>

  <section id= "picture">
    <div>
      <img src= "images/journey1.jpg" alt="Jinn Making Shoes">
    </div>
  </section>

  <section id="description">
    <div>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit,
      sed do eiusmod tempor incididunt ut labore et dolore magna
      aliqua. Ut enim ad minim veniam, quis nostrud exercitation
      ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
      cupidatat non proident, sunt in culpa qui officia deserunt mollit
      anim id est laborum.
    </div>
  </section>

</body>
</html>
