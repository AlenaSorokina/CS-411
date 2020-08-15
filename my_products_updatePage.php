<?php
  require "my_products_header.php";
?>




<main>
<div class="small-container">
  <h2 class="title"> Update a product</h2>
  <div class="row">

  <?php
  include 'mysqli_connect.php';
  $query=mysqli_query($dbc,"SELECT * FROM Product WHERE Product_ID = '$_GET[Product_ID]'")or die(mysqli_error());
  $row=mysqli_fetch_array($query);
  ?>
  <form method="post" action="my_products_update.php" >
  <table class='wrapper'>
    <tr>
      <td>Product ID </td>
      <td><input type="text" class="form-control" name="Product_ID"
        style="width:20em;" required placeholder="Enter new information"
        value="<?php echo $row['Product_ID']; ?>"></textarea></td>
    </tr>
    <tr>
      <td>Product Name </td>
      <td><input type="text" class="form-control" name="Product_Name"
        style="width:20em;" required placeholder="Enter new information"
        value="<?php echo $row['Product_Name']; ?>"></textarea></td>
    </tr>
    <tr>
      <td>Category </td>
      <td><input type="text" class="form-control" name="Category"
        style="width:20em;" required placeholder="Enter new information"
        value="<?php echo $row['Category']; ?>"></textarea></td>
    </tr>
    <tr>
      <td>Description </td>
      <td><input type="text" class="form-control" name="Product_Description"
        style="width:20em;" required placeholder="Enter new information"
        value="<?php echo $row['Product_Description']; ?>"></textarea></td>
    </tr>
    <tr>
      <td>Price for sell</td>
      <td><input type="text" class="form-control" name="Price_Sell"
        style="width:20em;" required placeholder="Enter new information"
        value="<?php echo $row['Price_Sell']; ?>"></textarea></td>
    </tr>
    <tr>
      <td>Price for new product</td>
      <td><input type="text" class="form-control" name="Price_New"
        style="width:20em;" required placeholder="Enter new information"
        value="<?php echo $row['Price_New']; ?>"></textarea></td>
    </tr>
    <tr>
      <td>Price recommended </td>
      <td><?php echo $row['Price_Recommend']; ?></td>
    </tr>
    <tr>
      <td> Data post</td>
      <td><input type="text" class="form-control" name="Date_Post"
        style="width:20em;" required placeholder="Enter new information"
        value="<?php echo $row['Date_Post']; ?>"></textarea></td>
    </tr>
  </table>
  <br>
  <button type="submit" name="submit" class="btn500" >Update</button>
</form>
