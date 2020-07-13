<!DOCTYPE html>
<html lang="en">
<?php $page_title = "CHOCOLATE FACTORY";?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?=$page_title ?> </title>
</head>
<style>
    h1
{
    background-image:url("images/cc1.jpg");
}
#menu-links
{
  //display:inline;
text-align:center;
//margin-left: 200px;  
padding:50px;
color:white;

}

td{
border : 1px solid black;
}
</style>

<body>
<header>

<h1 id="headd" style="background-color:chocolate ;height: 250px; ">

<?=  '<p align="center">' ,    $page_title , '</p>'   ?>
<div id="menu-links">
    <a href="<?= dirname($_SERVER['PHP_SELF']) . '/index.php'  ?>" >Listing</a>  ||
    <a href="<?= dirname($_SERVER['PHP_SELF']) . '/ll.php' ?>" >ADMIN LOG-IN</a> ||
    <a href="<?= dirname($_SERVER['PHP_SELF']) . '/add.php' ?>" >Add product</a> ||
    <a href="<?= dirname($_SERVER['PHP_SELF']) . '/logout.php' ?>" >Logout</a> ||

     
    </div>
</h1>





<div>
</div>
</header>