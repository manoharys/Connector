<?php 
   include("includes/header.php");
   $profile_pic =  $user['profile_pic'];

   if(isset($_GET['profile_username'])){
       $username = $_GET['profile_username'];
       $user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username = '$username'");
       $user_array =  mysqli_fetch_array($user_details_query);
       $num_of_friends = substr_count($user_array['friend_array'], ',') - 1;
       $profile_pic = $user_array['profile_pic'];
   }

?>
   <style type="text/css">
     .wrapper{
        margin-left: 0px;
        padding-left: 0px;
     }
     .profile_left{
        height: 100vh;
     }
   </style>


    <div class="profile_left">
      <img src="<?php echo $profile_pic ?>" alt="profile pic">
      
      <div class="profile_info">
           <p><?php echo "Posts: ". $user_array['num_posts'];?></p>
           <p><?php echo "Posts: ". $user_array['num_likes'];?></p>
           <p><?php echo "Posts: ". $num_of_friends?></p>
      </div>

    </div>
   
    <div class="main_column column">
      <?php echo $username; ?>
    </div>


  </div>
</body>
</html>