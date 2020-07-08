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
  <link rel="stylesheet" type="text/css" href="assets/css/register_style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="assets/js/register.js"></script>
</head>
<body>
  <?php 
    if(isset($_POST['submit_btn'])){
      echo '
     <script>   
       $(document).ready(function(){
          $("#first").hide();
          $("#second").show();
       });
       </script>
       ';
    }
  ?>
  <div class="wrapper">
    <div class="register_box">
      <div class="app_header">
        <span> <span id="firstLetter">C</span>ONNECTOR</span>
        <div class="sub_heading"><span>connecting the world</span>
        </div>
      </div>
     
      <div id="first">
      <?php 
           if(in_array("Email or Password is incorrect", $error_array))
           echo "<div class = 'errorDiv'><span class='error'>Email or Password is incorrect</span></div>";
       ?>
        <form action="register.php" method="POST">
          <input type="text" name="log_email" placeholder="Email address" value="<?php
                if(isset($_SESSION['log_email'])){
                    echo $_SESSION['log_email'];
                }
                ?>" required>
          <br>
          <input type="password" name="log_password" placeholder="password" required>
          <br>
          <input type="submit" name="log_button">
          <br>
          <span><a id='signUp' href="#">need an account? Sign Up here!</a></span>

        </form>
      </div>
      <div id="second">
        <form action="register.php" method="POST">
          <!-- Displaying error message -->
          <?php if(in_array("First name should contain characters between 2 and 25", $error_array)) 
           echo "<div class = 'errorDiv'><span class='error'>First name should contain characters between 2 and 25</span></div>";
          ?>

          <input type="text" name="reg_fname" placeholder="First name" value="<?php 
                if(isset($_SESSION['reg_fname'])){
                    echo $_SESSION['reg_fname'];
                }
            ?>" required>
          <br>
          <!--Displaying error message  -->
          <?php if(in_array("Last name should contain characters between 2 and 25", $error_array)) 
           echo "<div class = 'errorDiv'><span class='error'>Last name should contain characters between 2 and 25</span></div>";
           ?>
          <input type="text" name="reg_lname" placeholder="Last name" value="<?php 
                if(isset($_SESSION['reg_lname'])){
                    echo $_SESSION['reg_lname'];
                }
            ?>" required>
          <br>
          <!-- Displaying error message -->
          <?php if(in_array("Email already in use", $error_array)) {
           echo "<div class = 'errorDiv'><span class='error'>Email already in use</span></div>";
            }
              else if(in_array("invalid email", $error_array)) {
           echo "<div class = 'errorDiv'><span class='error'>invalid email</span></div>";
            }
              else if(in_array("Email donnot match", $error_array)) {
           echo "<div class = 'errorDiv'><span class='error'>Email donnot match</span></div>";
            }
          ?>

          <input type="email" name="reg_email" placeholder="email" value="<?php 
                if(isset($_SESSION['reg_email'])){
                    echo $_SESSION['reg_email'];
                }
            ?>" required>
          <br>
          <input type="email" name="reg_email2" placeholder="Confirm email" value="<?php 
                if(isset($_SESSION['reg_email2'])){
                    echo $_SESSION['reg_email2'];
                }
            ?>" required>
          <br>
          <!-- Displaying error message -->
          <?php if(in_array("password do not match", $error_array)) {
           echo "<div class = 'errorDiv'><span class='error'>password do not match</span></div>";
           }
              else if(in_array("Your password can only contain characters or numbers", $error_array)) {
           echo "<div class = 'errorDiv'><span class='error'>Your password can only contain characters or numbers</span></div>";
           }
              else if(in_array("Your password must be between 5 and 15", $error_array)) {
           echo "<div class = 'errorDiv'><span class='error'>Your password must be between 5 and 15</span></div>";
        }
          ?>
          <input type="password" name="reg_password" placeholder="password" required>
          <br>
          <input type="password" name="reg_password2" placeholder="Confirm password" required>
          <br>
          <input type="submit" name="submit_btn">
          <br>

          <span><a id='signIn' href="#">Already have an account? Sign in here!</a></span>
        </form>
      </div>
    </div>
  </div>
</body>

</html>