<?php 
  class User{
      private $user;
      private $con;

      public function __construct($con, $users){
          $this->con = $con;
          $user_details_query = mysqli_query($this->con, "SELECT * FROM users WHERE username = '$users'");
          $this->user = mysqli_fetch_array($user_details_query);
      }
      
     public function getUsername(){
       return $this->user['username'];
     }

     public function getNumPosts(){
         return $this->user['num_posts'];
     }

      public function getFirstAndLastName(){
        return $this->user['first_name']. " ". $this->user['last_name'];
      }

      public function getProfilePic(){
        return $this->user['profile_pic'];
      }

    
  
	public function isClosed() {
		$username = $this->user['username'];
		$query = mysqli_query($this->con, "SELECT user_closed FROM users WHERE username='$username'");
		$row = mysqli_fetch_array($query);

		if($row['user_closed'] == 'yes')
			return true;
		else 
			return false;
    }
   
    public function isFriend($username_to_check){
      $usernameComma = "," . $username_to_check . ",";
      if(strstr($this->user['friend_array'], $usernameComma) || $username_to_check == $this->user['username']){
        return true;
      }else{
        return false;
      }
    }

  }
?>