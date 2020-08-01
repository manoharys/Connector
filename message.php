<?php 
  include("includes/header.php");

  $message_obj = new Message($con, $userLoggedIn);

  if(isset($_GET['u'])){
      $user_to = $_GET['u'];
  }else{
      $user_to = $message_obj->getMostRecentUser();
      
      if($user_to == false){
          $user_to = 'new';
      }
  }
      
  ?>