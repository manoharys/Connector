<?php 
  
  if(isset($_POST["log_button"])){
     $email = filter_var($_POST["log_email"], FILTER_SANITIZE_EMAIL); //Sanitizes email
     $_SESSION["log_email"] = $email;

     $password = md5($_POST["log_password"]);

     //check database

     $check_database_query = mysqli_query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");

     $is_exists = mysqli_num_rows($check_database_query);

     if($is_exists == 1){
         $rows = mysqli_fetch_array($check_database_query);
         $username = rows['username'];
         $_SESSION['username'] = $username;
         exit();
     }
  }
?>