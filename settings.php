<?php 
 include("includes/header.php");
?>

<div class="main_column column">
    <h4>Account Settings</h4>
    <?php 
      echo "<img src='" .$user['profile_pic'] . "' id='small_profile_pics'>";
    ?>
    <br>
    <a href="upload.php">Upload new profile picture</a><br><br><br>

    <h4>Modify the values and click 'Update Details'</h5>

    <form action="settings.php" method="POST">
       First Name: <input type="text" name="first_name" value="<?php echo $user['first_name'];?>"><br>
       First Name: <input type="text" name="last_name" value="<?php echo $user['last_name'];?>"><br>
       First Name: <input type="text" name="email" value="<?php echo $user['email'];?>"><br>
    </form>
    
    <h4>Change Password</h4>
    <form action="settings.php" method="POST">
      Old password: <input type="password" name="old_password" ><br>
      New password: <input type="password" name="new_password"><br>
      New password again: <input type="password" name="new_password_2"><br>
    </form>

     <h4>Close Account</h4>
     <form action="setting.php">
         <input type="submit" name="close_account" id="close_account" value="Close Account">
     </form>
</div>