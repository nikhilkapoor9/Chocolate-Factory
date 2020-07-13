<?php  
// var_dump($_POST);
require_once('views/page_top.php');

$servername = "localhost";
$username = "root";
$password = "";
$db = "factory";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";





?>

