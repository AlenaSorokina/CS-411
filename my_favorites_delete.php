<?php

require "my_products_header.php";

require_once('mysqli_connect.php');

  $sql = "DELETE FROM Favorite WHERE User_ID = '$User_ID' AND Product_ID = '$_GET[Product_ID]'";
  $result = mysqli_query($dbc, $sql);
  
  if(!$result){
    echo "error";
  }else{
    echo "The product has been deleted from My Favorites!";
  }






?>