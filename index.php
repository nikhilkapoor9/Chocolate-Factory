<?php  

$page_title='CHOCOLATE FACTORY';
require_once('views/page_top.php');
require_once('db/db.php');
session_start();
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

<table style="width:100%; border:1px solid black;">
  <tr>
    <th>Name</th>
    <th>Description</th>
    <th>Price</th>
    <th>image</th>
    <th>Quantity</th>
    <th>Likes</th>
    <th>Action</th>

  </tr>
  
  <?php
  $sql = "SELECT * FROM product";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $id = $row['id'];
            echo "<tr><td>".$row['name']."</td>
            <td>".$row['description']."</td>
            <td>".$row['price']."</td>
            <td><img src='".$row['image']."' style='max-height:50px'></td>
            <td>".$row['qty']."</td>
            <td>".$row['likes']."</td>
            <td>
            <a href='like.php?id=".$id."'>like</a>";
            if($_SESSION['admin']==1){
                echo " || <a href='delete.php?id=".$id."'>Delete</a>";
            }
            echo "</td><tr/>";
      }
  }
  ?>
  
</table>

    
</body>
</html>


<?php
//var_dump($_POST);
$page_title='';
require_once('views/page_bottom.php');

?>
