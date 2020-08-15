<?php

require "my_products_header.php";

  
?>

<head><script src="https://kit.fontawesome.com/eb3d5e1aa0.js" crossorigin="anonymous"></script></head>
<div class="small-container">
  <h2 class="title"> All of my purchases</h2>
  <div class="row">

<?php
  require_once('mysqli_connect.php');
  $sql = "SELECT * FROM Purchase_Record NATURAL JOIN Product WHERE Buyer_ID=$User_ID;";
  $result = mysqli_query($dbc,$sql);
  $resultCheck = mysqli_num_rows($result);

  if($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){
?>

<main>


<div class="col-4">
      <img src="ProductImage/<?php echo $row['Product_image']?>" alt="Image of Product" >
      <h4><?php echo $row['Product_Name']; ?></h4>
      <p>Seller ID: <?php echo $row['Seller_ID']; ?></p>
      <p>Your price: $<?php echo $row['Price_Sell']; ?></p>
      <p>Post date: <?php echo $row['Date_Post']; ?></p>
      <p>Location: <?php echo $row['Location']; ?></p>
      <p>Time of purchase: <?php echo $row['TimeOfPurchase']; ?></p>
      <p>Description: <?php echo $row['Product_Description']; ?></p>
      <form action="includes/review.inc.php" method="post" >
             <textarea name="review" rows="10" cols="30">Your review here...</textarea>
             <br><br>
             <!-- <input type='text' name="review"> -->
             <button type="submit" class="col-4-btn" name="review-submit">Submit Review</button>
      </form>
<!-- 
      <p>Rate Overall Quality of Product</p>
      <i class="fa fa-star fa-2x" data-index = "0"></i>
      <i class="fa fa-star fa-2x" data-index = "1"></i>
      <i class="fa fa-star fa-2x" data-index = "2"></i>
      <i class="fa fa-star fa-2x" data-index = "3"></i>
      <i class="fa fa-star fa-2x" data-index = "4"></i>
      
      <script src="http://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
      <script>
       
        var ratedIndex = -1, uID = 0;
        $(document).ready(function () {
            resetStarColors();
            if (localStorage.getItem('ratedIndex') != null) {
                setStars(parseInt(localStorage.getItem('ratedIndex')));
                uID = localStorage.getItem('uID');
            }
            $('.fa-star').on('click', function () {
               ratedIndex = parseInt($(this).data('index'));
               localStorage.setItem('ratedIndex', ratedIndex);
               saveToTheDB();
            });
            $('.fa-star').mouseover(function () {
                resetStarColors();
                var currentIndex = parseInt($(this).data('index'));
                setStars(currentIndex);
            });
            $('.fa-star').mouseleave(function () {
                resetStarColors();
                if (ratedIndex != -1)
                    setStars(ratedIndex);
            });
        });
        function saveToTheDB() {
            $.ajax({
               url: "my_purchases.php",
               method: "POST",
               dataType: 'json',
               data: {
                   'save': 1,
                   'uID': uID,
                   'ratedIndex': ratedIndex
               }, success: function (r) {
                    uID = r.id;
                    localStorage.setItem('uID', uID);
               }
            });
        }
        function setStars(max) {
            for (var i=0; i <= max; i++)
                $('.fa-star:eq('+i+')').css('color', 'orange');
        }
        function resetStarColors() {
            $('.fa-star').css('color', 'white');
        }
      </script>
 -->
 <form action="includes/ratings.inc.php" method="post">
      <div class="container">
        <table class = "table table-striped">
          <thead>
            <tr>
              <th>Rating Type</th>
              <th>Your Ratings</th>
            </tr>
          </thead>
          <tbody>
            <tr class="quality">
              <td> Rate the Quality of Product</td>
              <td>
                <input type="number" name="quality" min="0" max="5" step=".1">
              </td>
            </tr>
            <tr class="vs">
              <td> Rate Product Description VS Quality</td>
              <td>
                <input type="number" name="vs" min="0" max="5" step=".1">
              </td>
            </tr>
            <tr class="experience">
              <td> Rate Your Purchase Experience</td>
              <td>
                <input type="number" name="experience" min="0" max="5" step=".1">
              </td>
            </tr>
          </tbody>
        </table>
        <!-- <input type="hidden" id="sellerId" name="sellerId" value=$row['Seller_ID']> -->
        <button type="submit" class="col-4-btn" name="ratings-submit">Submit Ratings</button>
</div>
</form>
</div>



<br><br>

<?php }
}else{
  echo "You didn't buy anything";
} ?>

</main>