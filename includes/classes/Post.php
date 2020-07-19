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
             $date_added = date("Y-m-d H:i:s");
             //get username
             $added_by = $this->user_obj->getUsername();
             
             //If user is one own profile, user_to is 'none'
             if($user_to == $added_by){
                 $user_to = "none";
             }

             //inserting post
             $query = mysqli_query($this->con, "INSERT INTO posts VALUES('', '$body', '$added_by', '$user_to', '$date_added', 'no', 'no', '0')");
             $returned_id = mysqli_insert_id($this->con); // returns last insert id

             //Update post count for user
             $num_post = $this->user_obj->getNumPosts();
             $num_post++;
             $update_query = mysqli_query($this->con, "UPDATE users SET num_posts='$num_post' WHERE username='$added_by'");
          }
      }
   
  }
?>