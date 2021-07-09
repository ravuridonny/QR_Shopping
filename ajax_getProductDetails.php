<?php 
 require('connection.php');
 
 $qr_code = $_POST['qr_code'];
//$index =1;       
 //alert('" $qr_code "')
 $sql = "SELECT * FROM `item_desc` WHERE qr_code='" . $qr_code . "'";
 //$result = mysqli_query($conn, $sql) or die(mysql_error());
 //$sql = "SELECT * FROM item_desc WHERE qr_code='50cf19912960f65490b334ea9c196eea'";

 $result = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_array($result)){ 
            $response = array('product_name' => $row['product_name'], 'product_price' => $row['product_price']);
        } 	
  
 echo json_encode($response);
 //var_dump($result);
?>