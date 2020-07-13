<?php  

$page_title='CHOCOLATE FACTORY';
require_once('views/page_top.php');
require_once('db/db.php');
session_start();
$errors=array();
if($_SESSION['admin'] !=1){
    header("location:ll.php");
}


if(isset($_POST['submit'])){

$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$qty = $_POST['qty'];

if($name==""){
    $errors[] = "name_req";
}
if($description==""){
    $errors[] = "description_req";
}
if($price==""){
    $errors[] = "price_req";
}
if($qty==""){
    $errors[] = "qty_req";
}
if($_FILES["image"]["name"]==""){
    $errors[] = "image_req";
}

$target_dir = "uploads/";
$target_file = $target_dir .time(). basename($_FILES["image"]["name"]);
if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file) && empty($errors)) {
    //echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    $sql = "INSERT INTO product (name, description, price, image, qty, status, likes)
            VALUES ('$name', '$description', '$price', '$target_file', '$qty', 0, 0)";

    if ($conn->query($sql) === TRUE) {
        header("location:add.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    //echo "Sorry, there was an error uploading your file.";
}


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <style>
    .error{
        color:red;
    }
    </style>
</head>


<body  >


<form id='regaddister' action='add.php' method='post' enctype="multipart/form-data"
    accept-charset='UTF-8'>
<fieldset >
<legend>Add product</legend>
<label for='name' >Name*: </label>
<input type='text' name='name'/>
<?php if(in_array('name_req',$errors)){?>
    <span class="error">This field is required</span>
<?php }?>
<br/>


<label for='description' >Description*: </label>
<input type='text' name='description'/>
<?php if(in_array('description_req',$errors)){?>
    <span class="error">This field is required</span>
<?php }?>
<br/>

<label for='price' >Price*:</label>
<input type='text' name='price' />
<?php if(in_array('price_req',$errors)){?>
    <span class="error">This field is required</span>
<?php }?>
<br/>

<label for='qty' >Quantity*:</label>
<input type='text' name='qty' />
<?php if(in_array('qty_req',$errors)){?>
    <span class="error">This field is required</span>
<?php }?>
<br/>

<label for='image' >Image*:</label>
<input type='file' name='image'/>
<?php if(in_array('image_req',$errors)){?>
    <span class="error">This field is required</span>
<?php }?>
<br/>


<input type='submit' name='submit' value='submit' />

</fieldset>
</form>

   

    
</body>
</html>


<?php
//var_dump($_POST);
$page_title='';
require_once('views/page_bottom.php');

?>
