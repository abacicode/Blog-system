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
