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
    <a class="navOption" href="admin-login/admin-login.php">Admin</a>
  </nav>

<?php include("includes/view-post.php") ?>
