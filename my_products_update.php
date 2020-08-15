<?php

require_once('mysqli_connect.php');


$Product_ID = mysqli_real_escape_string($dbc,$_POST['Product_ID']);
$Product_Name = mysqli_real_escape_string($dbc,$_POST['Product_Name']);
$Category = mysqli_real_escape_string($dbc,$_POST['Category']);
$Product_Description = mysqli_real_escape_string($dbc,$_POST['Product_Description']);
$Price_Sell = mysqli_real_escape_string($dbc,$_POST['Price_Sell']);
$Price_New = mysqli_real_escape_string($dbc,$_POST['Price_New']);
$Date_Post = mysqli_real_escape_string($dbc,$_POST['Date_Post']);

mysqli_query($dbc, "SET TRANSACTION READ WRITE SET TRANSACTION ISOLATION LEVEL READ COMMITTED");
$sql = "UPDATE Product
  SET Product_Name = '$Product_Name', Category = '$Category', Product_Description = '$Product_Description', Price_New = $Price_New, Price_Sell = $Price_Sell, Date_Post = '$Date_Post'
  WHERE Product_ID = $Product_ID";
// echo $sql;
$result = mysqli_query($dbc, $sql);
mysqli_query($dbc, "COMMIT");

if(!$result){
  echo "ERROR";
}else{
  echo "The product has been updated";
}

// header("Location: ../user_page.php?adding=success");


?>
