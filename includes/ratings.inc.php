<?php
session_start();
	if (isset($_POST['ratings-submit'])) {
		require 'dbh.inc.php';
		$quality = $_POST['quality'];
		$vs = $_POST['vs'];
		$experience = $_POST['experience'];
		if (empty($quality || $vs || $experience)) {
		header("Location: ../my_purchases.php?error=emptyfields");
		exit();
	}
	else {
		$id = $_SESSION['User_ID'];
		$sql = "UPDATE Purchase_Record SET Rating_Quality =?, Rating_Description_VS_Quality=?, Rating_User_Satisfaction=? WHERE Buyer_ID=$id";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../signup.php?error=sqlerror");
			exit();
		}
		else{
			mysqli_stmt_bind_param($stmt, "ddd", $quality, $vs, $experience);
			mysqli_stmt_execute($stmt);
			header("Location: ../my_purchases.php?ratings=submitted");
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