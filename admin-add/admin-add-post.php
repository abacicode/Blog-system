<?php include("../includes/establish.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="admin-add-post.css">
  <title>Add Post</title>
</head>
<body>
  <nav id="navBar">
    <a class= "navOption" href="../admin-homepage/admin-homepage.php">Back</a>
    <a class= "navOption" href="../index.php">Log Out</a>
  </nav>

  <form id= "addPost" action="admin-add-post.php" method="post" enctype="multipart/form-data">
    <div><input class="add-input" id="post-number" type="int" name="number" placeholder="-Post #- "></div>
    <div><input class="add-input" id="post-date" type="date" name="date" placeholder="date"></div>
    <div><input class="add-input" id="post-title" type="text" name="title" placeholder="Title"></div>
    <div><input class="add-input" id="post-image" type="file" name="image" placeholder="image"></div>
    <div id="div-post-description"><textarea class="add-input" id="post-description" type="text" name="description" placeholder="description"></textarea></div>
    <div><input class="add-input" type="submit" name="submit" placeholder="Submit"></div>
  </form>
  <?php
  if(isset($_POST['submit'])){
    $post_number = $_POST['number'];
    $post_date = $_POST['date'];
    $post_title = $_POST['title'];
    $post_image = $_FILES['image']['name'];
    $post_image_temp= $_FILES['image']['tmp_name'];
    $post_description = $_POST['description'];
    move_uploaded_file($post_image_temp, "../images/$post_image");
    $query= "INSERT INTO blog(number, date, title, image, description)";
    $query.= "VALUES('{$post_number}','{$post_date}','{$post_title}','{$post_image}','{$post_description}')";
    $post_added = mysqli_query($conn, $query);
    if(!$post_added){
      die("QUERY FAILED .". mysqli_error($conn));
    }
  }
  ?>
</body>
</html>
