<?php  
var_dump($_POST);

$page_title='CHOCOLATE FACTORY';
require_once('page_top.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
</head>


<body  >

<header  >
CHOCOLATE FACTORY

</header>

    <div>
    <a href="<?= dirname($_SERVER['PHP_SELF']) . '/menu.php' ?>">MENu</a> <br>
    <a href="<?= dirname($_SERVER['PHP_SELF']) . '/login.php' ?>">LOG IN</a> <br>
    <a href="<?= dirname($_SERVER['PHP_SELF']) . '/aboutus.php' ?>">About-us</a>  <br>

     
    </div>

    
</body>
</html>


<?php
//var_dump($_POST);
$page_title='';
require_once('page_bottom.php');

?>
