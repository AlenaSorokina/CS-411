  
<!-- <?php
	require_once('mysqli_connect.php');
	$query = "SELECT User_ID, User_Name FROM User";
	$response = @mysqli_query($dbc, $query);
	if($response){
		while($row = mysqli_fetch_array($response)){
			echo nl2br($row["User_Name"] . '  ');
		}
	}
?> -->

<?php
  require "header.php";

?>
  <main>
    <div class="wrapper-main">
      <section class="section-default">


        <?php
          if (isset($_SESSION['User_ID'])) {
            echo '<p class="login-status">You are logged in!</p>';
          } else {
            echo '<p class = "login-status">You are logged out!</p>';
          }



        ?>

      </section>
    </div>
  </main>
