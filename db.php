<?php  


$page_title='CHOCOLATE FACTORY';
require_once('views/page_top.php');

?>


<form action="db.php" method="post"  enctype="multipart/form-data">

<!--   prod_id : <input type="text" name="prod_id"   value="prod_id"   >

   prod_name : <input type="text" name="prod_name"   value="name">

    quantity : <input type="text" name="quantity"   value="quantity">

    price: <input type="text" name="price" value="price"> <br> <br>  -->

    <input type="hidden" name="size"   value="1000000">
    <div>  <input type="file" name="image"   value="quantity">   </div>
  
    <input type="submit" name="upload"   value="upload image">
 

  </form>






<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>

<?php
//  if upload button is pressed

if( isset ($_POST['upload'])  )
{

      $msg="";
     
      echo "Connected successfully";

      $target="picture/".basename( $_FILES ['image'] ['name'] );
        //connect to database
        $db=mysqli_connect("localhost","root","","images");
        // get all the data submitted from the form
        
      
       var_dump($db);
       var_dump($target);

        $pic=$_FILES['image'] ['name'];
        $sql="INSERT INTO picture  (image) VALUES ('$pic')";
       mysqli_query($db,$sql);   // stores the submitted data into the sql data

       var_dump($pic);
       var_dump($sql);
          var_dump($_FILES);
       // move the upload image into the wa2 image folder . 
       if(move_uploaded_file($_FILES['image']['tmp_name'] ,$target) )
       {
            $msg="image uploaded successfully";
       }
       else
       {
               $msg="error uploading images";
       }
}


?>
<html>
<head>
<title> Insert data in mySql  using  php</title>
</head>
<body>

    <?php 
        //connect to database
        $db=mysqli_connect("localhost","root","","images");
        $sql="SELECT * FROM picture";
        $result=mysqli_query($db,$sql);
        while( $row =mysqli_fetch_array($result) )
        {
        echo "<div id ='img_div'>";
        echo "<img src =' ".$row['image']." ' >";
        echo "<p>"  . $row ['text'] . "</p>";
        echo "</div>";         
        }
    ?>
 </body>
</html> 


