<?php

require "my_products_header.php";

require_once('mysqli_connect.php');


require_once('mysqli_connect.php');
$sql = "SELECT * FROM Product WHERE Product_ID = $_GET[Product_ID];";
$result = mysqli_query($dbc,$sql);
$row = mysqli_fetch_assoc($result);
$Seller_ID = $row['Seller_ID'];
$date = date('Y-m-d H:i:s');




  $sql1 = "INSERT INTO Purchase_Record(Seller_ID, Buyer_ID, Product_ID, TimeOfPurchase) VALUES('$Seller_ID', '$User_ID','$_GET[Product_ID]', '$date')";
  $result1 = mysqli_query($dbc, $sql1);
  
  if(!$result1){
    echo "The product already sold";
  }else{
    echo "This purchase has been recorded!";
  }

// }


