<?php
  require "config/config.php";
  require "includes/form_handlers/register_handler.php";
  require "includes/form_handlers/login_handler.php";
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
    <link rel="stylesheet" type="text/css" href="assests/css/register_style.css"> 
</head>
<body>
  <div class="wrapper">
        <form action="register.php" method="POST">
          <!-- Displaying error message -->
          <?php if(in_array("First name should contain characters between 2 and 25", $error_array)) echo "First name should contain characters between 2 and 25 <br>"; ?>
    
          <input type="text" name="reg_fname" placeholder="First name"
            value = "<?php 
                if(isset($_SESSION['reg_fname'])){
                    echo $_SESSION['reg_fname'];
                }
            ?>"
            required>
          <br>
          <!--Displaying error message  -->
          <?php if(in_array("Last name should contain characters between 2 and 25", $error_array)) echo "Last name should contain characters between 2 and 25 <br>"; ?>
          <input type="text" name="reg_lname" placeholder="Last name" 
          value = "<?php 
                if(isset($_SESSION['reg_lname'])){
                    echo $_SESSION['reg_lname'];
                }
            ?>"
          required>
          <br>
          <!-- Displaying error message -->
          <?php if(in_array("Email already in use", $error_array)) {echo "Email already in use <br>";}
              else if(in_array("invalid email", $error_array)) {echo "invalid email <br>";}
              else if(in_array("Email donnot match", $error_array)) {echo "Email donnot match <br>";}
          ?>
          
          <input type="email" name="reg_email" placeholder="email" 
          value = "<?php 
                if(isset($_SESSION['reg_email'])){
                    echo $_SESSION['reg_email'];
                }
            ?>"required>
          <br>
          <input type="email" name="reg_email2" placeholder="Confirm email" 
          value = "<?php 
                if(isset($_SESSION['reg_email2'])){
                    echo $_SESSION['reg_email2'];
                }
            ?>"
          required>
          <br>
            <!-- Displaying error message -->
          <?php if(in_array("password do not match", $error_array)) {echo "password do not match <br>";}
              else if(in_array("Your password can only contain characters or numbers", $error_array)) {echo "Your password can only contain characters or numbers <br>";}
              else if(in_array("Your password must be between 5 and 15", $error_array)) {echo "Your password must be between 5 and 15 <br>";}
          ?>
          <input type="password" name="reg_password" placeholder="password" required>
          <br>
          <input type="password" name="reg_password2" placeholder="Confirm password" required>
          <br>
          <input type="submit" name="submit_btn">
        <?php 
          if(in_array( "<span style = 'color:green';> Successfully registered go ahead and login</span>", $error_array,)){
              echo "<span style = 'color:green';> Successfully registered go ahead and login</span>";
          }
        ?>
        </form>
  </div>
</body>
</html>