<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Log In</title>
  <link rel="stylesheet" type="text/css" href="admin-login.css">
</head>
<body>
  <form class="log-in" action="admin-login-processing.php" method="post">
    <div class="input">Username : <input type="text" name="user-name"></input></div>
    <div class="input">Password : <input type="password" name="password"></input></div>
    <div class="input" id="submitDiv"><button id= "submitButton" type="submit" name="login">Log in</button></div>
  </form>


</body>
</html>
