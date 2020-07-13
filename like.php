<?php
require_once('db/db.php');
session_start();
$page_title='CHOCOLATE FACTORY';

$sql = "UPDATE product 
SET likes = likes + 1
WHERE id = '".$_GET['id']."'";

$conn->query($sql);
// exit('123');
header("location:index.php");
?>
