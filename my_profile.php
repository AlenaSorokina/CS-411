<?php
  require "my_products_header.php";
?>


<main>
<div class="small-container">
      <h2 class="title"> Your Profile Information</h2>
      <div class="row">


<?php
  include 'mysqli_connect.php';
  $query=mysqli_query($dbc,"SELECT * FROM Customer WHERE User_ID='$User_ID'")or die(mysqli_error());
  $row=mysqli_fetch_array($query);
?>
<div class="col-5">
<table>
  <tr>
    <td>User Name </td>
    <td><?php echo $row['User_Name']; ?></td>
  </tr>
  <tr>
    <td>User ID</td>
    <td><?php echo $row['User_ID']; ?></td>
  </tr>
  <tr>
    <td>E-mail</td>
    <td><?php echo $row['Email']; ?></td>
  </tr>
  <tr>
    <td>Rating</td>
    <td><?php echo $row['Rating']; ?></td>
  </tr>
  <tr>
    <td>Phone</td>
    <td><?php echo $row['Phone']; ?></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><?php echo $row['Address']; ?></td>
  </tr>
  <tr>
    <td>Zipcode</td>
    <td><?php echo $row['Zipcode']; ?></td>
  </tr>
</table>

<button class="col-4-btn">
        <?php echo "<a href=my_profile_edit.php >Edit</a>" ?>
</button>
</div>



</main>