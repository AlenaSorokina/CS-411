<?php
  require "my_products_header.php";
?>



<main>
<div class="small-container">
      <h2 class="title"> Edit Your Profile Information</h2>
      <div class="row">
<?php
  include 'mysqli_connect.php';
  $query=mysqli_query($dbc,"SELECT * FROM Customer WHERE User_ID='$User_ID'")or die(mysqli_error());
  $row=mysqli_fetch_array($query);
?>
<div class="col-5">
        <form method="post" action="#" >
          <table>
            <tr>
              <td><label>Your User Name</label></td>
              <td><input type="text" class="form-control" name="User_Name"
              style="width:20em;" required placeholder="Enter your UserName"
              value="<?php echo $row['User_Name']; ?>"></textarea></td>
            </tr>
            <tr>
              <td><label> User_ID</label></td>
              <td><?php echo $row['User_ID']; ?></td>
            </tr>
            <tr>
              <td><label>Your Email</label></td>
              <td><input type="text" class="form-control" name="Email"
              style="width:20em;" required placeholder="Enter your Email"
              value="<?php echo $row['Email']; ?>"></textarea></td>
            </tr>
            <tr>
              <td><label>Your Password</label></td>
              <td> <input type="text" class="form-control" name="User_Password"
               style="width:20em;" required placeholder="Enter your Password"
               value=""></textarea></td>
            </tr>
            <tr>
              <td><label>Retype Password</label></td>
              <td> <input type="text" class="form-control" name="Retype_Password"
               style="width:20em;" required placeholder="Retype your Password"
               value=""></textarea></td>
            </tr>
            <tr>
              <td><label>Rating</label></td>
              <td><?php echo $row['Rating']; ?></td>

            </tr>
            <tr>
              <td><label>Phone</label></td>
              <td>  <input type="text" class="form-control" name="Phone"
                style="width:20em;" required placeholder="Enter your Phone"
                value="<?php echo $row['Phone']; ?>"></textarea></td>
            </tr>
            <tr>
              <td><label>Address</label></td>
              <td><input type="text" class="form-control" name="Address"
              style="width:20em;" required placeholder="Enter your Address"
              value="<?php echo $row['Address']; ?>"></textarea></td>
            </tr>

            <tr>
              <td><label>Zipcode</label></td>
              <td><input type="text" class="form-control" name="Zipcode"
              style="width:20em;" required placeholder="Enter your Zipcode"
              value="<?php echo $row['Zipcode']; ?>"></textarea></td>
            </tr>
          </table>

            <button type="submit" name="submit"  class="btn btn-primary" style="width:20em; margin:0;">Save Changes</button>

        </form>
      </div>
      </html>
      <br>

      <?php
      if(isset($_POST['submit'])){
        $User_Name = $_POST['User_Name'];
        $Email = $_POST['Email'];
        $User_Password = md5($_POST['User_Password']);
        $Repeat_Password = md5($_POST['Retype_Password']);
        $Address = $_POST['Address'];
        $Phone = $_POST['Phone'];
        $Zipcode = $_POST['Zipcode'];

        if (empty($User_Name)  || empty($Email) || empty($User_Password) || empty($Repeat_Password) || empty($Phone) || empty($Address) || empty($Zipcode)) {
      		echo "Fill all the fields";
      	}

      	else if (!filter_var($Email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $User_Name)) {
      		echo "The email is not valid";
      	}

      	else if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
      		echo "The email is not valid";
      	}

      	else if (!preg_match("/^[a-zA-Z0-9]*$/", $User_Name)) {
      		echo 'User Name is not valid';
      	}

      	else if ($User_Password !== $Repeat_Password) {
      		echo 'Passwords do not match';
      	}else{

      $query = "UPDATE Customer SET User_Name = '$User_Name', Email = '$Email',
                      User_Password = '$User_Password',
                      Address = '$Address', Phone = '$Phone', Zipcode = $Zipcode
                      WHERE user_id = $User_ID";
                    $result = mysqli_query($dbc, $query) or die(mysqli_error($dbc));
                    ?>

                    <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "my_profile.php";
        </script>

        <?php
      }}
?>

</body>
</html>
