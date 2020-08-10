<?php 
 include("includes/header.php");

 if(isset($_GET['q'])){
     $query = $_GET['q'];
 }else{
     $query = "";
 }

 if(isset($_GET['type'])) {
     $type = $_GET['type'];
 }else{
     $type = "name";
 }
?>

<div class="main_column column" id="main_column">
    <?php
      if($query == ""){
          echo "You mush enter something in the search box..";
      }

      if($type == "username"){
          $usersReturnedQuery = mysqli_query($con, "SELECT * FROM users WHERE username LIKE '$query%' AND user_closed='no' LIMIT 8");
      }
      else{
            $names = explode(" ", $query);
                    
            if(count($names) == 3){
                $usersReturnedQuery = mysqli_query($con, "SELECT * FROM users WHERE (first_name LIKE '$names[0]%' AND last_name LIKE '$names[2]%') AND user_closed='no' LIMIT 8");
            }  
            else if(count($names) == 2){
                $usersReturnedQuery = mysqli_query($con, "SELECT * FROM users WHERE (first_name LIKE '$names[0]%' AND last_name LIKE '$names[1]%') AND user_closed='no' LIMIT 8");
            }
            else{
                $usersReturnedQuery = mysqli_query($con, "SELECT * FROM users WHERE (first_name LIKE '$names[0]%' or last_name LIKE '$names[0]%') AND user_closed='no' LIMIT 8");
            }
      }
    ?>
</div>