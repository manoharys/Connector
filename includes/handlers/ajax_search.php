<?php 
  include("../../config/config.php");
  include("../../includes/classes/User.php");

  $query = $_POST['query'];
  $userLoggedIn = $_POST['userLoggedIn'];

  $names = explode(" ", $query);

  //If query contains and underscore, assume user is searching for usernames
  if(strpos($query, '_') !== false){
      $usersReturnedQuery = mysqli_query($con, "SELECT * FROM users WHERE username LIKE '$query%' AND user_closed='no' LIMIT 8");
  }
  //If there are two words, assume ther are first and last names respectively
  else if(count($names) == 2){
    $usersReturnedQuery = mysqli_query($con, "SELECT * FROM users WHERE (first_name LIKE '$names[0]%' AND last_name LIKE '$names[1]%') AND user_closed='no' LIMIT 8");
  }
  //If query has one word only, search first names or last names
  else{
    $usersReturnedQuery = mysqli_query($con, "SELECT * FROM users WHERE (first_name LIKE '$names[0]%' OR last_name LIKE '$names[0]%') AND user_closed='no' LIMIT 8");
  }
?>