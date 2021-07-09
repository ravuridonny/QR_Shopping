
<?php 
require('connection.php');
if (isset($_POST['product_name'])) {
   $product_name =  $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $qr_code = md5($product_name);

   $sql = "INSERT INTO `item_desc`( `qr_code`, `product_name`, `product_price`) VALUES ('".$qr_code."', '".$product_name."','".$product_price."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
 ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <h1><center>Add Items</center></h1>
</head>
<body>
    <form action="index.php" method="post">
     <label><b>Product Name</b></label>
    <input type="text" placeholder="Product Name" name="product_name" required></body> </br> </br>

    <label><b>Product Price</b></label>
    <input type="text" placeholder="Product Price" name="product_price" required> </br> </br>

    <button type="submit">Add</button>
    </form>
</body>
</html>
    
   
    

   

