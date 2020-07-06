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
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="assests/css/register_style.css"> 
</head>
<body>
   <div class="wrapper"> 
        <form action = "login.php" method="POST">
            <input type="text" name="log_email" placeholder = "Email address" value="
                <?php
                if(isset($_SESSION['log_email'])){
                    echo $_SESSION['log_email'];
                }
                ?>
            " required >
            <br>
            <input type="password" name= "log_password" placeholder = "password" required>
            <br>
            <input type="submit" name="log_button">
            <?php 
                in_array("Email or Password is incorrect", $error_array);
                echo "Email or Password is incorrddddddddddddddddddddddddddddddddddddect";
            ?>
        </form>
 </div> 
</body>

</html>