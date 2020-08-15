<?php
  require "my_products_header.php";
?>




<?php
  include 'mysqli_connect.php';
  $query=mysqli_query($dbc,"SELECT * FROM Product NATURAL JOIN Customer WHERE Product_ID = '$_GET[Product_ID]'")or die(mysqli_error());
  $row=mysqli_fetch_array($query);
  ?>










    <link href="style_ProductDetail.css" rel="stylesheet">



<main>
<div class="container">
      <!-- Left Column  -->
      <div class="left-column">
      <img class="active" src="ProductImage/<?php echo $row['Product_image']?>" width=400px alt="Image of Product" >
      </div>


      <!-- Right Column -->
      <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">
          <span>Category: <?php echo $row['Category']; ?></span>
          <h1> <?php echo $row['Product_Name']; ?> </h1>
          <p>Price in market: $<?php echo $row['Price_New']; ?></p>
          <p>Suggested selling price: $<?php echo $row['Price_Recommend']; ?></p>
          <p>Post date: <?php echo $row['Date_Post']; ?></p>
          <p>Description: <?php echo $row['Product_Description']; ?></p>
          <p>Seller phone: <?php echo $row['Phone']; ?></p>
          <p>Seller email: <?php echo $row['Email']; ?></p>
        </div>



        <!-- Product Pricing -->
        <div class="product-price">
          <span>$<?php echo $row['Price_Sell']; ?></span>
      <button class="cart-btn">
        <?php echo "<a href=my_purchases_add.php?Product_ID=".$row['Product_ID']." >I will buy this product</a>" ?>
      </button>
      </div>
</div>

<div class="container">
<div class="description">
  <h3>Description:</h3>
<p> <?php echo $row['Product_Description']; ?></p>
</div>
</div>



    </main>




