<?php include("../includes/establish.php"); ?>

<?php
  if(isset($_POST['login'])){
    $username = $_POST['user-name'];
    $password = $_POST['password'];


		$username = mysqli_real_escape_string($conn, $username);
		$password = mysqli_real_escape_string($conn, $password);

    $query = "SELECT * FROM login WHERE username = '{$username}'";

    $select_user_query = mysqli_query($conn, $query);
    if($select_user_query){
      while($row = mysqli_fetch_array($select_user_query)){
        $db_id = $row['password'];
        checkPassword($db_id, $password);
      }
    }
  }

  function checkPassword($db_id, $password){
    if ($password == $db_id){
      header("Location: ../admin-homepage/admin-homepage.php");
    }
  }
?>
