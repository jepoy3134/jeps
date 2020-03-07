<?php
session_start();

if($_SESSION['userName'] == ""){    
    header("location:PHPForms.php");

}
$userName = $_SESSION['userName'];
echo $userName;
echo "<br>";
?>
<br>

<a href = "logout.php">Logout</a>