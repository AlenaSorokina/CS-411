<?php
session_start();
$id = $_SESSION['User_ID'];
/*session is started if you don't write this line can't use $_Session  global variable*/


if (isset($_POST['submit']) == false) {
  echo "wrong path";
}


$file = $_FILES['file'];
$fileName = $_FILES['file']['name']; 
$fileTmpName = $_FILES['file']['tmp_name']; 
$fileSize = $_FILES['file']['size']; 
$fileError = $_FILES['file']['error']; 
$fileType = $_FILES['file']['type']; 
$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));

$allowed = array('jpg', 'jpeg', 'png', 'pdf');
if (in_array($fileActualExt, $allowed) == false) {
  echo "You can only upload .jpg .jpeg .png .pdf file";
} 

if ($fileError === 0) {
  if ($fileSize < 50000000) {
    $fileNameNew = uniqid('', true).".".$fileActualExt;
    $fileDestination = 'ProductImage/'.$fileNameNew;
    move_uploaded_file($fileTmpName, $fileDestination);

    require_once('mysqli_connect.php');
    $Product_Name = mysqli_real_escape_string($dbc,$_POST['Product_Name']);
    $Category = mysqli_real_escape_string($dbc,$_POST['Category']);
    $Product_Description = mysqli_real_escape_string($dbc,$_POST['Product_Description']);
    $Price_New = mysqli_real_escape_string($dbc,$_POST['Price_New']);
    $Price_Sell = mysqli_real_escape_string($dbc,$_POST['Price_Sell']);
    $Seller_ID = mysqli_real_escape_string($dbc,$id);
    
    
    $sql = "INSERT INTO Product(Seller_ID, Product_Name, Category, Product_Description, Price_New, Price_Sell, Product_image) VALUES('$Seller_ID','$Product_Name','$Category','$Product_Description','$Price_New', '$Price_Sell', '$fileNameNew')";
    // echo $sql;
    $result = mysqli_query($dbc, $sql);
    
    if(!$result){
      echo "ERROR";
    }else{
      echo "The product has been added!";
    }
  } else {
    echo "Your file is too big.";
  }

} else {
  echo "There is error in your file.";
}




// header("Location: ../user_page.php?adding=success");


?>