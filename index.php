<?php include("includes/establish.php"); ?>


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

  <?php
    $query = "SELECT * FROM blog ";
    $select_all_categories_query = mysqli_query($conn, $query);
    while ($row= mysqli_fetch_assoc($select_all_categories_query)){
        $post_number= $row['number'];
        $post_date= $row['date'];
        $post_title= $row['title'];
        $post_image= $row['image'];
        $post_description= $row['description'];
  ?>
<?php echo
  "<section id= 'info'>
    <div class='titleContent' id='postNumber'>-Post $post_number-</div>
    <div class='titleContent' id='date'> $post_date </div>
    <div class='titleContent' id='title'>$post_title</div>
  </section>

  <section id= 'picture'>
    <div>
      <img src= 'images/$post_image' alt=''>
    </div>
  </section>

  <section id='description'>
    <div>
      $post_description
    </div>
  </section>

</body>
</html>";
}
?>
