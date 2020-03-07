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
?>