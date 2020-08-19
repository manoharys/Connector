<?php
  ob_start();
  session_start();

  /* Development Connection */
     /* $host = "localhost";
      $db = "connector";
      $user = "root";
      $pass = ""; */

  /// Remote Database connection
    $host = "remotemysql.com";
    $db = "SdCYQAqHs3";
    $user = "SdCYQAqHs3";
    $pass = "LtYgj2HlLF";


  $con = mysqli_connect($host, $user, $pass, $db);

  if(mysqli_connect_errno()){
    echo "Failed to connect: ". mysqli_connect_errno();
  }
  

?>