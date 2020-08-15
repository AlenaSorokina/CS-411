  
<?php


session_start();
$id = $_SESSION['User_ID'];
/*session is started if you don't write this line can't use $_Session  global variable*/

require_once('mysqli_connect.php');

$Product_Name = mysqli_real_escape_string($dbc,$_POST['Product_Name']);
$Category = mysqli_real_escape_string($dbc,$_POST['Category']);
$Product_Description = mysqli_real_escape_string($dbc,$_POST['Product_Description']);
$Price_New = mysqli_real_escape_string($dbc,$_POST['Price_New']);
$Price_Sell = mysqli_real_escape_string($dbc,$_POST['Price_Sell']);
$Seller_ID = mysqli_real_escape_string($dbc,$id);

#$sql = "INSERT INTO Product(Product_ID,Seller_ID,Product_Name, Category, Product_Description, Price_New, Price_Sell) VALUES(1001, 3,'gu33m','food','this is a gum',100, 50);";
$sql = "INSERT INTO Product(Seller_ID, Product_Name, Category, Product_Description, Price_New, Price_Sell) VALUES('$Seller_ID','$Product_Name','$Category','$Product_Description','$Price_New', '$Price_Sell')";
// echo $sql;
$result = mysqli_query($dbc, $sql);

if(!$result){
  echo "ERROR";
}else{
  echo "The product has been added!";
}

// header("Location: ../user_page.php?adding=success");


?>