<?php
  require "my_products_header.php";
?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet" href='style_product.css'>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<main>

<div class="container">
<div class="navbar">
  <div class="dropdown">
    <button class="dropbtn">Category
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="electronics.php">Electronics</a>
      <a href="beauty.php">Beauty</a>
      <a href="books.php">Books</a>
      <a href="furniture.php">Furniture</a>
      <a href="fashion.php">Fashion</a>
      <a href="household.php">Household</a>
    </div>
  </div>
    <div class="search-container">
    <form action="search.php" method="POST">
      <input type="text" placeholder="Search.."  id="query" name="query">
      <button type="submit"><i class="fa fa-search"></i></button>
      <input type="number" placeholder="Min Price" id="minprice" name="minprice">
      <input type="number" placeholder="Max Price" id="maxprice" name="maxprice">
      <input type="number" placeholder="Location" id="location" name="location">
    </form>
    </div>
	  <p></p>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Sort by:</button>
  <div class="dropdown-content">
    <a href="#">Price: Low to High</a>
    <a href="#">Price: High to Low</a>
    <a href="#">Location</a>
  </div>
</div>


<div class="row">
  <div class="col-3">
    <a href=top_seller.php? class="btn">Top Seller</a>
  </div>
  <div class="col-3">
    <a href=generous_seller.php? class="btn">Generous Seller</a>
  </div>
  <!-- <div class="col-3">
    <a href="#" class="btn"><i class="fa fa-home"></i> My Account</a>
  </div> -->

</div>






<hr>
<div class="small-container">
  <h2 class="title"> Search result</h2>
  <div class="row">
<?php
    require_once('mysqli_connect.php');

    $query = $_POST['query'] ?? 0;
    // gets value sent over search form

    $min_price = (int) -1;
    if(!empty($_POST['minprice'])) {
      $min_price = (int) $_POST['minprice'];
    }

    $max_price = (int) 100000000;
    if(!empty($_POST['maxprice'])) {
      $max_price = (int) $_POST['maxprice'];
    }
    $min_length = 3;

    // you can set minimum length of the query if you want

    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
        $query = htmlspecialchars($query);
        $query = mysqli_real_escape_string($dbc, $query);
        mysqli_query($dbc, "SET TRANSACTION READ ONLY SET TRANSACTION ISOLATION LEVEL READ COMMITTED");
        $raw_results = mysqli_query($dbc, "SELECT * FROM Product
            WHERE ((`Product_Name` LIKE '%".$query."%') OR (`Product_Description` LIKE '%".$query."%')) AND (Price_Sell >= $min_price) AND (Price_Sell <= $max_price) ORDER BY Price_Sell DESC") or die(mysqli_error($dbc));
        mysqli_query($dbc, "COMMIT");
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
            $my_coord = mysqli_query($dbc,"SELECT Lat, Lon FROM Customer WHERE User_ID=$User_ID");
            $user_row = mysqli_fetch_assoc($my_coord);
            $R = 6371;
            $phi1 = $user_row['Lat']*pi()/180;
            $all_data = array();

            while($row = mysqli_fetch_array($raw_results)){
            // puts data from database into array, while it's valid it does the loop
            $Seller_ID = $row['Seller_ID'];
            $seller_coord = mysqli_query($dbc, "SELECT Lat, Lon FROM Customer WHERE User_ID = $Seller_ID");
            $seller_row = mysqli_fetch_assoc($seller_coord);
            $phi2 = $seller_row['Lat']*pi()/180;
            $delta_phi = ($seller_row['Lat'] - $user_row['Lat'])*pi()/180;
            $delta_lambda = ($seller_row['Lon'] - $user_row['Lon'])*pi()/180;
            $a = sin($delta_phi/2)**2+cos($phi1)*cos($phi2)*(sin($delta_lambda/2)**2);
            $c = 2 *atan2(sqrt($a), sqrt(1-$a));
            $distance = $R * $c;

            $row['distance'] = $distance;
            array_push($all_data, $row);
            }

            $price = array_column($all_data, 'Price_Sell');
            array_multisort($price, $all_data);



            foreach($all_data as $row) {
                ?>
                <div class="col-4">
                <img src="ProductImage/<?php echo $row['Product_image']?>" alt="Image of Product" >
                  <h4><?php echo $row['Product_Name']; ?></h4>
                  <p>Price: $<?php echo $row['Price_Sell']; ?></p>
                  <!-- <p>Price in market: $<?php echo $row['Price_New']; ?></p> -->
                  <p>Distance: <?php echo ROUND($row['distance'],2)," km"; ?></p>
                  <!-- <p>Suggested selling price: $<?php echo $row['Price_Recommend']; ?></p> -->
                  <p>Post date: <?php echo $row['Date_Post']; ?></p>
                  <p>Description: <?php echo $row['Product_Description']; ?></p>

                  <button class="col-4-btn">
                    <?php echo "<a href=my_products_detail.php?Product_ID=".$row['Product_ID']." >More</a>" ?>
                  </button>
                </div>
                <?php
            }




            ?>

            <?php
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }

    }
    else{ // if query length is less than minimum
        echo "Minimum keyword length is ".$min_length;
    }
?>
