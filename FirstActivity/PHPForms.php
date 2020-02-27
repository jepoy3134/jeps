<?php

if(isset($_POST['Username'])|| isset($_POST['password'])){
    $name = $_POST['Username'];
echo $name;
echo '<br>';
$password = $_POST['password'];
echo $password;
echo '<br>';

    if($password == "asd" && $name == "asd" ){
        header("LOCATION:jeps/FirstActivity/forms.php");
    
        }else{
       ?><script>
                alert("NGI! Mali password nya hahahah");
            </script>
     <?php 
  }

}





/*echo $_SERVER['PHP_SELF'];
echo '<br>';
echo $_SERVER['SERVER_NAME'];
echo '<br>';
echo $_SERVER['HTTP_HOST'];
echo '<br>';
echo $_SERVER['SCRIPT_NAME'];
echo '<br>';*/

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
