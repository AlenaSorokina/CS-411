<?php
  require "my_products_header.php";
?>

<main>
    <div class="small-container">
      <h2 class="title"> My sold products</h2>
      <div class="row">


    <?php
      require_once('mysqli_connect.php');
      $sql = "SELECT * FROM Product WHERE Seller_ID=$User_ID AND Sold_Or_Not = 1;";
      $result = mysqli_query($dbc,$sql);
      $resultCheck = mysqli_num_rows($result);
      if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
    ?>

    <div class="col-4">
    <img src="ProductImage/<?php echo $row['Product_image']?>" alt="Image of Product" >
      <h4><?php echo $row['Product_Name']; ?></h4>
      <p>Price: $<?php echo $row['Price_Sell']; ?></p>
      <p>Price in market: $<?php echo $row['Price_New']; ?></p>
      <p>Suggested selling price: $<?php echo $row['Price_Recommend']; ?></p>
      <p>Post date: <?php echo $row['Date_Post']; ?></p>
      <p>Description: <?php echo $row['Product_Description']; ?></p>

      <button class="col-4-btn">
        <?php echo "<a href=my_products_detail.php?Product_ID=".$row['Product_ID']." >More detail</a>" ?>
      </button>
      <button class="col-4-btn">
        <?php echo "<a href=my_favorites_delete.php?Product_ID=".$row['Product_ID']." >Delete</a>" ?>
      </button>
    </div>

    <?php }
      }else{
        echo "You haven't sold any products yet";
      } 
    ?>
</main>
