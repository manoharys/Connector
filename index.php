<?php 
   include("includes/header.php");
   $profile_pic =  $user['profile_pic'];

?>
  
    <div class="user_details column">
       <a href="#">
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
  

  </div>
</body>
</html>