<?php 
  include("includes/header.php"); //header
?>

<div class="main_column column" id="main_column">
    <h4>Friend Requests</h4>

    <?php 
     $query = mysqli_query($con, "SELECT * FROM friend_requests WHERE user_to = '$userLoggedIn'");
     if(mysqli_fetch_array($query) == 0){
         echo "You have no friedn requests at this time!";
     }else{
         while($row = mysqli_fetch_array($query)){
             $user_from = $row['user_from'];
             $user_from_obj = new User($con, $user_from);

             echo $user_from_obj->getFisrtAndLastName() . " send you a friend request!";
             
             $user_from_friend_array = $user_from_obj->getFriendArray();
           
            
         }
     }
    ?>
</div>