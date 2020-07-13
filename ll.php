<?php  

$page_title='CHOCOLATE FACTORY';
require_once('views/page_top.php');
session_start();
?>

<?php

$error="";
$success="";

   if( isset($_POST['submit']) )
{
    
$uname=$_POST['uname'];
$pass=$_POST['pass'];
    if($uname=="admin" && $pass=="password")
  { 
     $success=="welcome admin";
     $_SESSION['admin'] = 1;
    //echo $success;
    header("location:logout.php");

    
    }
    else
    {
      $error="invalid password"; 
      $success="";    
    }
  }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin-login-form</title>
</head>
<body>
    <div class="container">
    <p class="error">  <?php echo $error;  ?></p>  
     <p class="success">  <?php echo $success;  ?></p>
    
    <form method="post">

    <input type="text" name="uname" value="" placeholder="enter admin name" required > <br>
    <input type="password" name="pass" value="" placeholder="password" required > <br>
    <input type="submit" name="submit" value="LOG-IN"> <br>
    

    </form>


    </div>
    
</body>
</html> 

<?php
//var_dump($_POST);
$page_title='';
require_once('views/page_bottom.php');

?>