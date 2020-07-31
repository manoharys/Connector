<?php 
   include("includes/header.php");
   include("includes/classes/Post.php");
   include("includes/classes/User.php");

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

      <form action="<?php echo $username; ?>">
        <?php 
         $profile_user_obj = new User($con, $username);
         if($profile_user_obj->isClosed()){
            header("Location: user_closed.php");
         }

         $logged_in_user_obj =  new User($con, $userLoggedIn);
         
         //Checking wheather user is on own profile or friends profile
         //If is user is on friends profile display Add friend/unfriend btn
         if($userLoggedIn != $username){
           if($logged_in_user_obj->isFriend($username)){
              echo '<input type="submit"  name="remove_friend" class="danger" value="Remove Friend">';
           }
           else if($logged_in_user_obj->didReceiveRequest($username)){
              echo '<input type="submit"  name="respond_friend" class="warning" value="Respond Friend">';
           }
           else if($logged_in_user_obj->didSendRequest($username)){
            echo '<input type="submit"  name="" class="default" value="Request Send">';
           }
           else{
              echo '<input type="submit"  name="add_friend" class="primary" value="Add Friend">';
           }
         }
        ?>
      </form>

    </div>
   
    <div class="main_column column">
      <?php echo $username; ?>
    </div>


  </div>
</body>
</html>