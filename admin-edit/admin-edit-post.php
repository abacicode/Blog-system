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
  <nav id="navBar">
    <a class= "navOption" href="../admin-homepage/admin-homepage.php">Back</a>
    <a class= "navOption" href="../admin-add/admin-add-post.php">Add Post</a>
    <a class= "navOption" href="../admin-edit/admin-edit-post.php">Edit Post</a>
    <a class= "navOption" href="../index.php">Log Out</a>
  </nav>

  <table>
    <thead>
      <tr>
        <th id= "tablePost" width= "5%">Post</th>
        <th width= "10%">Date</th>
        <th width= "15%">Title</th>
        <th width= "20%">Image</th>
        <th width= "40%">Description</th>
      </tr>
    </thead>

    <tbody>
      <?php
        $query = "SELECT * FROM blog";
        $retrive = mysqli_query($conn, $query);
        while($row= mysqli_fetch_assoc($retrive)){
          $number= $row['number'];
          $date= $row['date'];
          $title= $row['title'];
          $image= $row['image'];
          $desciption= $row['description'];
          echo
          " <tr>
              <td align= 'center'>$number</td>
              <td align= 'center'>$date</td>
              <td align= 'center'>$title</td>
              <td align= 'center'><img class='tableImage' src='../images/$image'></td>
              <td>$desciption</td>
              <td align= 'center' width= '5%'> Delete </td>
              <td align= 'center' width= '5%'> Edit </td>
            </tr>";
        };
      ?>

    </tbody>
  </table>
</body>
</html>
