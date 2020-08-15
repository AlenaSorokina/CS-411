<?php
  require "header.php";

?>
<!DOCTYPE html>
<html>
<style>
/*body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}*/

input{
  padding: 6px;
  font-size: 14px;
  border-radius: 4px;
}

label{
  width: 240px;
  display: inline-block;
}
.button{
  display: inline-block;
  background: #d16500;
  color: #fff;
  padding: 8px 30px;
  margin: 30px 0;
  border-radius: 20px;
  border-radius: 20px;
  transition: background 0.3s;
}
.button:hover{
  background: #3234ad;
}
.formfield * {
  display: inline-block;}
</style>
<body>
  <main>
    <div class="wrapper-main">
      <section class="section-default">
        <!-- <h1>Signup</h1> -->
        <?php
          if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfields") {
              echo '<p class = "signuperror">Fill in All the fields!</p>';
            }
            else if ($_GET['error'] == "invalidmailuid") {
              echo '<p class = "signuperror">Fill in All fields!</p>';
            }
            else if ($_GET['error'] == "invalidUsername") {
              echo '<p class = "signuperror">Enter a valid User Name (Make sure no invalid characters)!</p>';
            }
            else if ($_GET['error'] == "passwordcheck") {
              echo '<p class = "signuperror">Incorrect Password!</p>';
            }
            else if ($_GET['error'] == "usertaken") {
              echo '<p class = "signuperror">This Username is already taken choose a different Username</p>';
            }
          }
          else if (isset($_GET['signup'])) {
            if ($_GET['signup'] == "success") {
              echo '<p class = "signupsuccess">Great Job!! Your Signup was successful!</p>';
            }
          }
        ?>
        <div id="parent">
        <form action="includes/signup.inc.php" method="post" id="form_login">
          <!-- <div id="container"> -->
            <h1>Signup</h1>
          <p>
          <label for="username"><b>User Name</b></label>
          <input type="text" name="uid" placeholder="Username"></p>
          <p>
          <label for="username"><b>Email</b></label>
          <input type="text" name="mail" placeholder="Email"></p>
          <p>
          <label for="username"><b>Phone</b></label>
          <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="phone" placeholder="000-000-0000"></p>
          <p>
          <label for="username"><b>Address</b></label>
          <input type="text" name="address" placeholder="Address"></p>
          <p>
          <label for="username"><b>Zip Code</b></label>
          <input type="number" name="zip" placeholder="Zip Code"></p>
          <p>
          <label for="username"><b>Password</b></label>
          <input type="password" name="pwd" placeholder="Password"></p>
          <p>
          <label for="username"><b>Re-Enter Password</b></label>
          <input type="password" name="pwd" placeholder="Repeat Password"></p>
          <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
          <button type="submit" name="signup-submit" class = "button">Signup</button>
          <!-- </div> -->
        </form>
      </div>
      </section>
    </div>
  </main>
</body>
</html>
