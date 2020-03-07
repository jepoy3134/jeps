<?php
include("include/loginValidation.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Forms</title>
</head>
<body>
    <form action = "<?php $_SERVER['PHP_SELF']?>" method="post">
    <input type = "text" name = "Username" placeholder = "Username">
    <br>
    <input type = "password" name = "password" placeholder = "password">
    <br>
    <input type = "submit" value = "submit"> 
</form>

</body>
</html>
