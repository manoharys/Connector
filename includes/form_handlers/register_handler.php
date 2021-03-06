<?php 
    //creating variables to avoid errors
    $fname = "";
    $lname = ""; 
    $em = "";
    $em2 = "";
    $password = "";
    $password2 = "";
    $data = ""; //Sign up date
    $error_array = array();//holds error message 

    if(isset($_POST["submit_btn"])){
    //Registration form values
    
    //first name
    $fname = strip_tags($_POST["reg_fname"]); //Remove html tags
    $fname = str_replace(' ', '', $fname); //remove spaces
    $fname = ucfirst(strtolower($fname)); //Uppercase first letter
    $_SESSION['reg_fname'] =  $fname;//storing values in session variable

    //Last name
    $lname = strip_tags($_POST["reg_lname"]); //Remove html tags
    $lname = str_replace(' ', '', $lname); //remove spaces
    $lname = ucfirst(strtolower($lname)); //Uppercase first letter
    $_SESSION['reg_lname'] =  $lname;//storing values in session variable

    //Email
    $email = strip_tags($_POST["reg_email"]);
    $email = str_replace(' ', '', $email); //remove spaces
    $_SESSION['reg_email'] =  $email;//storing values in session variable

    $email2 = strip_tags($_POST["reg_email2"]);
    $email2 = str_replace(' ', '', $email2); //remove spaces
    $_SESSION['reg_email2'] = $email2;
    
    //password
    $password = strip_tags($_POST["reg_password"]);
    $password2 = strip_tags($_POST["reg_password2"]);
    
    //date 
    $data = date("Y-m-d");
 
    
    if(strlen($fname) > 25 || strlen($fname) < 2){
        array_push($error_array, "First name should contain characters between 2 and 25");
    } 

    if(strlen($lname) > 25 || strlen($lname) < 2){
        array_push($error_array, "Last name should contain characters between 2 and 25");
    } 

    if($email == $email2) {
        //checking it is valid email...(.com)
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $email = filter_var($email, FILTER_VALIDATE_EMAIL);

            $email_check = mysqli_query($con, "SELECT email from users where email = '$email'");

            $email_count = mysqli_num_rows($email_check);

            if($email_count > 0){
                array_push($error_array, "Email already in use");
                
            }
            
        }
        else{
            array_push($error_array, "invalid email");
        }
    }
    else {
        array_push($error_array, "Email donnot match");
    }
    
    if($password != $password2){
        array_push($error_array, "password do not match");
    }
    else {
        if(preg_match('/[^A-Za-z0-9]/', $password)) {
        array_push($error_array, "Your password can only contain characters or numbers");
        }
    }
    if(strlen($password) > 25 || strlen($password) < 5){
        array_push($error_array, "Your password must be between 5 and 15");
    }
    

    //inserting into the database
    if(empty($error_array)){
        $password = md5($password); //encrypting password before sending into the database
        $username = strtolower($fname. "_" . $lname);
        $check_username_exits = mysqli_query($con, "SELECT username from users WHERE username = '$username'");

        $i = 0;
        /*Generating unique username
        if username = manohar is already present then 
            username = manohar_1 and so on */

        while(mysqli_num_rows($check_username_exits) != 0){
            $i++;
            $username .= "_" . $i;
            $check_username_exits = mysqli_query($con, "SELECT username from users WHERE username = '$username'");
        }

    //Generating random profile picture
        $rand = rand(1, 2);
        
        if($rand == 1){ 
            $profile_pic = "assets/images/profile_pic/defaults/head_deep_blue.png";
        }
        else if($rand == 2){
            $profile_pic = "assets/images/profile_pic/defaults/head_emerald.png";
        } 
        //insert to the database
        $query = mysqli_query($con, "INSERT INTO users VALUES('', '$fname', '$lname', '$username', '$email', '$password', '$data', '$profile_pic', '0', '0', 'no', ',')");  


    //clearing session variables
        $_SESSION['reg_fname'] = "";
        $_SESSION['reg_lname'] = "";
        $_SESSION['reg_email'] = "";
        $_SESSION['reg_email2'] = "";
    
        
        $_SESSION["username"] = $username;
        header("Location: index.php");
    }
    }

?>