<?php
  session_start();
  $User_ID = $_SESSION['User_ID'];
  $User_Name = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>UIUC Markeplace</title>
  <link rel = "stylesheet" href='style_product.css'>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
</head>

<body>



<div class="header">
  <div class="container">
    <div class="navbar">
      <div class ="logo">
        <!-- <img src="ProductImage/product1.png" alt="" style="width:300px"> -->
        <!-- <a href="search.php"> <img src="ProductImage/product1.png" alt="" style="width:300px"></a> -->
        <div class="dropdown">
          <button class="dropbtn"><?php print "Hi $User_Name";  ?></button>
          <div class="dropdown-content">
            <a href="search.php">Home</a>
            <a href="my_profile.php">My Account</a>
            <a href="includes/logout.inc.php">Log out</a>
          </div>

  </div>


      </div>
        <nav>
        <ul>
          <li> <a href="search.php"> Search</h4></a></li>
          <li> <a href="useful_info.php"> Useful Info</h4></a></li>
          <li> <a href="my_products.php"> My Products</h4></a></li>
          <li> <a href="my_purchases.php">My Purchases</a></li>
          <li> <a href="my_favorites.php">My Favorites</a></li>
          <li> <a href="my_reviews.php">My Reviews</a></li>
          <li> <a href="my_profile.php">My Profile</a></li>
          <!-- <form action="includes/logout.inc.php" method="post">
            <button type="submit" name="logout-submit" class="button">LogOut</button>
          </form> -->
        </ul>
      </nav>
      <!-- <img src="ProductImage/product1.png" alt="" style="width:30px"> -->
  </div>
</div>


</body>
</html>
