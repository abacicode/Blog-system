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
            <td align= 'center' width= '5%'><a href='../admin-edit/admin-edit-post.php?delete={$number}'>Delete</a></td>
            <td align= 'center' width= '5%'> Edit </td>
          </tr>";
      };
      if(isset($_GET['delete'])){
        $the_number= $_GET['delete'];
        $query= "DELETE FROM blog WHERE number={$the_number}";
        $delete_query= mysqli_query($conn, $query);
        header("Location: admin-edit-post.php");
      };
    ?>
  </tbody>
</table>
