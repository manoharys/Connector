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
       <input type="password" name="password" placeholder="password" required>
       <br>
       <input type="password" name="password2" placeholder="Confirm password" required>
       <br>
       <input type="submit">
    </form>
</body>
</html>