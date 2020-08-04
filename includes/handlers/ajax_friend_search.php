<?php 
  include("../../config/config.php");
  include("../classes/User.php");

  $query =  $_POST['query'];
  $userLoggedIn = $_POST['userLoggedIn'];

  $names = explode(" ", $query);

  if(strpos($query, "_") !== false){
      $usersReturned = mysqli_query($con, "SELECT * FROM users WHERE username LIKE 'query%' AND user_closed = 'no' LIMIT 8");  //If they user underscore _ while searching query returns username
  }
  else if(count($names) == 2){
      //If the search values contains two name they are looking for first & last name of the users
      $usersReturned = mysqli_query($con, "SELECT * FROM users WHERE (first_name LIKE '%$names[0]%' AND last_name LIKE '%$name[1]%') 
                                                                      AND user_closed='no' LIMIT 8");
  }
  else{
    // if the search values contains only single name
    $usersReturned = mysqli_query($con, "SELECT * FROM users WHERE (first_name LIKE '%$names[0]%' AND last_name LIKE '%$name[0]%') 
                                                                        AND user_closed='no' LIMIT 8");
  }


  if($query != ""){
      while($row = mysqli_fetch_array($usersReturned)){
          $user = new User($con, $userLoggedIn);
          
          //if user is not searching for himself
          if($row['username'] != $userLoggedIn){
              $mutual_friends = $user->getMutualFriends($row['username']) . " friends in common";
          }
          else{
              $mutual_friends = "";
          }
      }
  }
  
?>