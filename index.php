<?php
 
  $con = mysqli_connect("localhost", "root", "", "connector");

  if(mysqli_connect_errno()){
    echo "Failed to connect: ". mysqli_connect_errno();
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
    <h2>registration</h2>

     <form action="index.php" method="post">
       <label for="username">Username:</label>
       <input type="text" name="username">
       <br>
       <label for="email">Email:</label>
       <input type="email" name="email"><br>
       <input type="submit">
     </form>

</body>
</html>