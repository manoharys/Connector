<?php 
  class User{
      private $user;
      private $con;

      public function __construct($con, $users){
          $this->con = $con;
          $user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username = '$users'");
          $this->user = mysqli_fetch_array($user_details_query);
      }
      
     public function getUsername(){
       return $this->user['username'];
     }



      public function getFirstAndLastName(){
        return $this->user['first_name']. " ". $this->user['last_name'];
      }
  }
?>