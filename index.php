<?php 
   include("includes/header.php");
   include("includes/classes/User.php");
   $profile_pic =  $user['profile_pic'];

?>
  
    <div class="user_details column">
       <a href="<?php echo $userLoggedIn?>">
         <img src="<?php echo $profile_pic?>" alt="">  
       </a>
       <div class="user_details_left_right">
          <a href="#">
            <?php echo $user['first_name'] ." ". $user['last_name'];?>
          </a>
          <br>
          <?php 
            echo  "posts : ". $user['num_posts']. "<br>";
            echo " like : ".$user['num_likes'];
          ?>
       </div>
    </div>
   
    <div class="main_column column">
      <form action="index.php" class="post_form" method="POST">
        <textarea name="post_text" id="post_text" placeholder="Got something to say?"></textarea>
        <input type="submit" name="post" id="post_botton" value="Post">
        <hr>
      </form>
    </div>
    
    <?php 
       $userClass = new User($con, $userLoggedIn);
       echo $userClass->getFirstAndLastName();
    ?>
    
  </div>
</body>
</html>