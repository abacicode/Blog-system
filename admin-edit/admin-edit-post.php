<?php include("../includes/establish.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Edit</title>
  <link rel="stylesheet" href="admin-edit-post.css">
</head>
<body>
  <?php include("../admin-includes/admin-navbar.php") ?>
  <?php include("../admin-includes/admin-table.php") ?>

  <?php
  if(isset($_GET['edit'])) {
    $the_number_edit= $_GET['edit'];
    $query1= "SELECT * FROM blog WHERE number={$the_number_edit}";
    $edit_post_query= mysqli_query($conn, $query1);
    while ($row = mysqli_fetch_assoc($edit_post_query)){
      $post_number= $row['number'];
      $post_date= $row['date'];
      $post_title= $row['title'];
      $post_image= $row['image'];
      $post_description= $row['description'];
      echo"
      <form id= 'addPost' action='admin-edit-post.php' method='post' enctype='multipart/form-data'>
        <div><input class='add-input' id='post-number' type='int' name='number' value='{$post_number}'></div>
        <div><input class='add-input' id='post-date' type='date' name='date' value='$post_date'></div>
        <div><input class='add-input' id='post-title' type='text' name='title' value='$post_title'></div>
        <div><input class='add-input' id='post-image' type='file' name='image' value='$post_image'></div>
        <div id='div-post-description'><input class='add-input' id='post-description' type='description' name='description' value='$post_description'></div>
        <div><input class='add-input' type='submit' name='submit' placeholder='Submit'></div>
      </form>
      ";
    }
  }
  if(isset($_POST['submit'])){
    $new_post_number = $_POST["number"];
    $new_post_date = $_POST["date"];
    $new_post_title = $_POST["title"];
    $new_post_image = $_FILES['image']['name'];
    $new_image_temp= $_FILES['image']['tmp_name'];
    $new_post_description = $_POST["description"];
    move_uploaded_file($new_image_temp, "../images/$new_post_image");
    if($new_post_image==""){
      $query_update= "UPDATE blog SET date='$new_post_date', title='$new_post_title', description= '$new_post_description' WHERE number=$new_post_number";
    } else{
      $query_update= "UPDATE blog SET date='$new_post_date', title='$new_post_title', image='$new_post_image', description= '$new_post_description' WHERE number=$new_post_number";
    }
    $update_post_query= mysqli_query($conn, $query_update);
    if(isset($update_post_query)){
      header("Location: admin-edit-post.php");
    }
  }


  ?>

</body>
</html>
