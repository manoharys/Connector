<?php
require_once("config/config.php");

if(isset($_SESSION["username"])){
    $userLoggedIn = $_SESSION["username"];
    echo "welcome ". $userLoggedIn;
}
else{
    header("Location: register.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONNECTOR</title>
</head>
<body>