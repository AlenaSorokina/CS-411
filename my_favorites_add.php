<?php

require "my_products_header.php";

require_once('mysqli_connect.php');

// $sql0 = "SELECT FROM Favorite WHERE User_ID = '$User_ID' and Product_ID = '$_GET[Product_ID]'";
// $result0 = mysqli_query($dbc, $sql0);
// $resultCheck = mysqli_num_rows($result0);
// if ($resultCheck > 0) {
//   echo "This product already in My Favorites!";
// } else {

  $sql = "INSERT INTO Favorite(User_ID, Product_ID) VALUES('$User_ID','$_GET[Product_ID]')";
  $result = mysqli_query($dbc, $sql);
  
  if(!$result){
    echo "The product already in My Favorites";
  }else{
    echo "The product has been added to My Favorites!";
  }

// }





?>