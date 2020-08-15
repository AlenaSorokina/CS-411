<?php
  require "my_products_header.php";
?>


<main>
<div class="small-container">
      <h2 class="title"> All of your reviews</h2>
      <div class="row">




<main>


  <?php
  $User_ID = $_SESSION['User_ID'];
  require_once('mysqli_connect.php');

  $sql1 = "SELECT ROUND(avg(Rating_Quality),2) as avgQual, ROUND(avg(Rating_Description_VS_Quality),2) as avgVS, ROUND(avg(Rating_User_Satisfaction),2) as avgSat
           FROM Purchase_Record
           GROUP BY Seller_ID
           HAVING Seller_ID = $User_ID;";
  $result1 = mysqli_query($dbc, $sql1);

  $resultCheck1 = mysqli_num_rows($result1);


  $sql = "SELECT * FROM Product JOIN Purchase_Record on Product.Product_ID = Purchase_Record.Product_ID JOIN Customer on Purchase_Record.Buyer_ID = Customer.User_ID WHERE Purchase_Record.Seller_ID=$User_ID;";
  $result = mysqli_query($dbc,$sql);
  $resultCheck = mysqli_num_rows($result);

  if($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){


?>

<table>
  <img src="ProductImage/<?php echo $row['Product_image']?>" width="400px" alt="Image of Product" >
  <tr>
    <td>Product ID </td>
    <td><?php echo $row['Product_ID']; ?></td>
  </tr>
  <tr>
    <td>Product Name </td>
    <td><?php echo $row['Product_Name']; ?></td>
  </tr>
  <tr>
    <td>Buyer Name </td>
    <td><?php echo $row['User_Name']; ?></td>
  </tr>
  <tr>
    <td>Time of Purchase</td>
    <td><?php echo $row['TimeOfPurchase']; ?></td>
  </tr>
  <tr>
    <td>Rating Quality</td>
    <td><?php echo $row['Rating_Quality']; ?></td>
  </tr>
  <tr>
    <td>Rating for Description vs Quality</td>
    <td><?php echo $row['Rating_Description_VS_Quality']; ?></td>
  </tr>
  <tr>
    <td> Rating for User satisfaction </td>
    <td><?php echo $row['Rating_User_Satisfaction']; ?></td>
  </tr>
  <tr>
    <td>Review</td>
    <td><?php echo $row['Review']; ?></td>
  </tr>

</table>
    </div>
<br><br>

<?php }
}else{
  echo "You don't have any reviews yet";

} ?>


</body>
