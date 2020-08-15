<?php
  require "my_products_header.php";
?>

<main>
  <div class="container">
    <div class="row">
      <div class="col-2">
        <h1>Hi! <?php echo $User_Name ?>! Post the product and make the community better!</h1>
        <a href=my_products_add.php? class="btn">Add Now &#8594;</a>
      </div>
      <div class="col-2">
        <img src="ProductImage/product1.png" alt="">
      </div>
    </div>

    <div class="categories">
      <div class="row">
        <div class="col-3">
          <a href=my_products_sold.php? class="btn">Sold &#8594;</a>
        </div>
        <div class="col-3">
          <a href=my_products_unsold.php? class="btn">Unsold &#8594;</a>
        </div>
      </div>
    </div>
    <br>


    <!-- added by jianjia: to add all the products of current user bellow -->
  <hr>
    <div class="small-container">
      <h2 class="title"> All of my products</h2>
      <div class="row">


    <?php
      require_once('mysqli_connect.php');
      $sql = "SELECT * FROM Product WHERE Seller_ID=$User_ID;";
      $result = mysqli_query($dbc,$sql);
      $resultCheck = mysqli_num_rows($result);
      if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
    ?>

    <div class="col-4">

      <img src="ProductImage/<?php echo $row['Product_image']?>" alt="Image of Product" >
      <h4><?php echo $row['Product_Name']; ?></h4>
      <p>Your price: $<?php echo $row['Price_Sell']; ?></p>
      <p>Price in market: $<?php echo $row['Price_New']; ?></p>
      <p>Post date: <?php echo $row['Date_Post']; ?></p>
      <p>Description: <?php echo $row['Product_Description']; ?></p>

      <button class="col-4-btn">
        <?php echo "<a href=my_products_updatePage.php?Product_ID=".$row['Product_ID']." >Edit</a>" ?>
      </button>
      <button class="col-4-btn">
        <?php echo "<a href=my_products_delete.php?Product_ID=".$row['Product_ID']." >Delete</a>" ?>
      </button>
    </div>

    <?php }
      }else{
        echo "You haven't post any products yet";
      } 
    ?>
</main>
