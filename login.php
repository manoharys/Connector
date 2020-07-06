<?php
  require "config/config.php";
  require "includes/form_handlers/login_handler.php";
  require "includes/form_handlers/register_handler.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
</head>
<body>
   <form action = "login.php" method="POST">
      <input type="text" name="log_email" placeholder = "Email address">
      <br>
      <input type="password" name= "log_password" placeholder = "password">
      <br>
      <input type="submit" name="log_button">
   </form>
</body>

</html>