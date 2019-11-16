<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="admin-add-post.css">
  <title>Admin</title>
</head>
<body>
  <nav id="navBar">
    <a href="../index.php">Log Out</a>
  </nav>
  <form id= "addPost" action="admin-add-post.php" method="post">
    <div><input class="add-input" id="post-number" type="int" name="number" placeholder="-Post #- "></div>
    <div><input class="add-input" id="post-date" type="date" name="date" placeholder="date"></div>
    <div><input class="add-input" id="post-title" type="text" name="title" placeholder="Title"></div>
    <div><input class="add-input" id="post-image" type="text" name="image" placeholder="image"></div>
    <div id="div-post-description"><input class="add-input" id="post-description" type="description" name="description" placeholder="description"></div>
    <div><input class="add-input" type="submit" name="description" placeholder="Submit"></div>
  </form>
</body>
</html>
