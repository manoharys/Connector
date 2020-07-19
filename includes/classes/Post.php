<?php 
  class Post{
      private $user_obj;
      private $con;

      public function __construct($con, $user){
          $this->con = $con;
          $this->user_obj = new User($this->con, $user);
      }
        
      public function submitPost($body, $user_to){
          $body = strip_tags($body); //removes html tags
          $body = mysqli_real_escape_string($this->con, $body);
          $check_empty = preg_replace('/\s+/', '', $body); //deletes all spaces

          if($check_empty != ""){

             //current data and time
             $data_added = date("Y-m-d H:i:s");
             //get username
             $added_by = $this->user_obj->getUsername();
             
             //If user is one own profile, user_to is 'none'
             if($user_to == $added_by){
                 $user_to = "none";
             }
          }
      }
   
  }
?>