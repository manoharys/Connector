<?php 
 include("includes/header.php");
 include("includes/handlers/setting_handler.php");
?>

<div class="main_column column">
    <h4>Account Settings</h4>
    <?php 
      echo "<img src='" .$user['profile_pic'] . "' id='small_profile_pics'>";
    ?>
    <br>
    <a href="upload.php">Upload new profile picture</a><br><br><br>

    <h4>Modify the values and click 'Update Details'</h5>
    <?php 
      $user_data_query = mysqli_query($con, "SELECT first_name, last_name, email FROM users WHERE username='$userLoggedIn'");
      $row = mysqli_fetch_array($user_data_query);

      $first_name  = $row['first_name'];
      $last_name = $row['last_name'];
      $email = $row['email'];
    ?>

    <form action="settings.php" method="POST">
       First Name: <input type="text" name="first_name" value="<?php echo $first_name;?>"><br>
       First Name: <input type="text" name="last_name" value="<?php echo $last_name;?>"><br>
       First Name: <input type="text" name="email" value="<?php echo $email;?>"><br>

       <?php echo $message; ?>

       <input type="submit" name="update_details" id="save_details" value="Update details">
    </form>
    
    <h4>Change Password</h4>
    <form action="settings.php" method="POST">
      Old password: <input type="password" name="old_password" ><br>
      New password: <input type="password" name="new_password_1"><br>
      New password again: <input type="password" name="new_password_2"><br>
      
      <?php echo $password_message; ?>

      <input type="submit" name="update_password" id="save_details" value="Update Password">
    </form>

     <h4>Close Account</h4>
     <form action="settings.php" method="POST">
         <input type="submit" name="close_account" id="close_account" value="Close Account">
     </form>
</div>