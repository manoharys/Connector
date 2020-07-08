<?php 
 
  if(isset($_POST["log_button"])){
     $email = filter_var($_POST["log_email"], FILTER_SANITIZE_EMAIL); //Sanitizes email
     $_SESSION["log_email"] = $email;

     $password = md5($_POST["log_password"]);

     //check database

     $check_database_query = mysqli_query($con, "SELECT * FROM users WHERE email = '$email' and password='$password'");

     $is_exists = mysqli_num_rows($check_database_query);

     if($is_exists == 1){
         $rows = mysqli_fetch_array($check_database_query);
         $username = rows['username'];
    
        //reopening user account when login
         $userr_closed_query = mysqli_query($con, "SELECT * FROM users WHERE email = '$email' AND user_closed = 'yes'");

         if(mysqli_num_rows($userr_closed_query) == 1){
            $reopen_account = mysqli_query($con, "UPDATE users SET user_closed = 'no' WHERE email = '$email'");
         }

         $_SESSION['username'] = $username; //Storing username in session variable 
         header("Location: index.php");
         exit();
     }
     else{
         array_push($error_array, "Email or Password is incorrect");
     }
  }
?>