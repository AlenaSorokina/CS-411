<?php
session_start();
print_r($_SESSION['User_ID']);
if (isset($_POST['review-submit'])){
	require 'dbh.inc.php';
	$review = $_POST['review'];
	if (empty($review)) {
		header("Location: ../my_purchases.php?error=emptyfields");
		exit();
	}
	else {
		$id = $_SESSION['User_ID'];
		$sql = "UPDATE Purchase_Record SET Review =? WHERE Buyer_ID=$id";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../signup.php?error=sqlerror");
			exit();
		}
		else{
			mysqli_stmt_bind_param($stmt, "s", $review);
			mysqli_stmt_execute($stmt);
			header("Location: ../my_purchases.php?review=submitted");
			exit();
	}

}
mysqli_stmt_close($stmt);
mysqli_close($conn);
}
else{
	header("Location: ../my_purchases.php");
	exit();
}