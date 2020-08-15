<?php
  require "my_products_header.php";
?>

<?php

require_once('mysqli_connect.php');

mysqli_query($dbc, "SET TRANSACTION READ ONLY SET TRANSACTION ISOLATION LEVEL READ UNCOMMITTED");
$top_seller = mysqli_query($dbc, "SELECT C.User_Name, P.Product_Name, MIN(P.Price_Sell) as Price, P.Category FROM Product P JOIN Customer C ON P.Seller_ID = C.User_ID GROUP BY `Category` ") or die(mysqli_error($dbc));
mysqli_query($dbc, "COMMIT");

echo "<table border='1'>
<tr>
<th>User Name</th>
<th>Product Name</th>
<th>Category</th>
<th>Price</th>
</tr>";

while($row = mysqli_fetch_array($top_seller))
{
echo "<tr>";
echo "<td>" . $row['User_Name'] . "</td>";
echo "<td>" . $row['Product_Name'] . "</td>";
echo "<td>" . $row['Category'] . "</td>";
echo "<td>" . $row['Price'] . "</td>";
echo "</tr>";
}
echo "</table>";


 ?>
</body>
</html>
