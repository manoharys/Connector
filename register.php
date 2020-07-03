<?php
 
  $con = mysqli_connect("localhost", "root", "", "connector");

  if(mysqli_connect_errno()){
    echo "Failed to connect: ". mysqli_connect_errno();
  }
  
  //creating variables to avoid errors
  $fname = "";
  $lname = ""; 
  $em = "";
  $em2 = "";
  $password = "";
  $password2 = "";
  $data = ""; //Sign up date
  $error_array = "";//holds error message 

  if(isset($_POST["submit_btn"])){
   //Registration form values
   
   //first name
   $fname = strip_tags($_POST["reg_fname"]); //Remove html tags
   $fname = str_replace(' ', '', $fname); //remove spaces
   $fname = ucfirst(strtolower($fname)); //Uppercase first letter

   //Last name
   $lname = strip_tags($_POST["reg_lname"]); //Remove html tags
   $lname = str_replace(' ', '', $lname); //remove spaces
   $lname = ucfirst(strtolower($lname)); //Uppercase first letter

   //Email
   $email = strip_tags($_POST["reg_email"]);
   $email = str_replace(' ', '', $email); //remove spaces

   $email2 = strip_tags($_POST["reg_email2"]);
   $email2 = str_replace(' ', '', $email2); //remove spaces
  
   //password
    $password = strip_tags($_POST["reg_password"]);
    $password2 = strip_tags($_POST["reg_password2"]);
    
    //date 
    $data = date("Y-m-d");

    echo "$fname $lname ";
    
    if($email == $email2) {
        //checking it is valid email...(.com)
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        }
        else{
            echo "invalid email";
        }
    }
    else {
        echo "Email donnot match";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
</head>
<body>
    <form action="register.php" method="POST">
       <input type="text" name="reg_fname" placeholder="First name" required>
       <br>
       <input type="text" name="reg_lname" placeholder="Last name" required>
       <br>
       <input type="email" name="reg_email" placeholder="email" required>
       <br>
       <input type="email" name="reg_email2" placeholder="Confirm email" required>
       <br>
       <input type="password" name="reg_password" placeholder="password" required>
       <br>
       <input type="password" name="reg_password2" placeholder="Confirm password" required>
       <br>
       <input type="submit" name="submit_btn">
    </form>
</body>
</html>