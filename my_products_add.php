<?php
  require "my_products_header.php";
?>



<main>
<div class="small-container">
  <h2 class="title"> Add a product</h2>
  <div class="row">
    <form action="my_products_add_backend.php" method="POST" enctype="multipart/form-data">
      <table>
        <tr>
          <td>Name of the Product</td>
          <td><input type = "text" name = "Product_Name" placeholder="Product Name" required></td>
        </tr>
        <tr>
          <td>Category</td>
          <td><input type = "text" name = "Category" placeholder="Choose category" required></td>
        </tr>
        <tr>
          <td>Write a description</td>
          <td><input type = "text" name = "Product_Description" placeholder="Write a description" required></td>
        </tr>
        <tr>
          <td>Price in the Market</td>
          <td>    <input type = "number" name = "Price_New" placeholder="Price of the new Product" required></td>
        </tr>
        <tr>
          <td>Your Price</td>
          <td><input type = "number" name = "Price_Sell" placeholder="Your price" required></td>
        </tr>
        <tr>
          <td>Picture</td>
          <td><input type = "file" name = "file" placeholder="Picture for this product" required></td>
        </tr>
      </table>
      <button type="submit" name="submit" class="col-4-btn">Add a product</button>
    </form>
</body>
</html>
