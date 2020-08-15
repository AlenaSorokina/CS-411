<?php
  require_once('mysqli_connect.php');
  mysqli_query($dbc, "SET TRANSACTION READ WRITE SET TRANSACTION ISOLATION LEVEL REPEATABLE READ");
  $sql = "DELETE FROM Product WHERE Product_ID = '$_GET[Product_ID]'";
  // echo $sql;
  $result = mysqli_query($dbc, $sql);
  mysqli_query($dbc, "COMMIT");

  if(!$result){
    echo "ERROR";
  }else{
    echo "Product has been deleted!";
  }

?>
