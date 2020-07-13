<?php  

$page_title='CHOCOLATE FACTORY';
require_once('views/page_top.php');

session_start();
if( isset($_POST['submit']) )
{
    $_SESSION['admin'] = 0;
    header("location:ll.php");
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>logout.php</title>
</head>
<body>
    <h1>WELOCME ADMIN </h1>
    <h2>PRESS LOGOUT TO GO TO LOGIN PAGE AGAIN</h2>
    <form action=""      method="post">
<input type="submit" name="submit" value="logout" >
</form>


 <br>
</body>
</html>

<?php
//var_dump($_POST);
$page_title='';
require_once('views/page_bottom.php');

?>