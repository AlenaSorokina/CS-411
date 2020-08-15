<?php
if (isset($_POST['login-submit'])) {

	require 'dbh.inc.php';

	$mailuid = $_POST['mailuid'];
	$password = $_POST['pwd'];

	if (empty($mailuid) || empty($password)) {
		header("Location: ../testphp.php?error=emptyfields");
		exit();
	}
	else{
		$sql = "SELECT * FROM Customer WHERE User_Name=? OR Email =?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../testphp.php?error=sqlerror");
			exit();
		}
		else{
			mysqli_stmt_prepare($stmt, $sql);
			mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if ($row = mysqli_fetch_assoc($result)) {
				// $pwdCheck = password_verfiy($password, $row['User_Password']); 
				// crypt($row['User_Password'], $password) == $password;
				if ($password !== $row['User_Password']) {
					header("Location: ../testphp.php?error=wrongpwd");
					exit();
				}
				else if ($password == $row['User_Password']) {
					session_start();
					$_SESSION['User_ID'] = $row['User_ID'];
					$_SESSION['username'] = $row['User_Name'];

					header("Location: ../testphp.php?login=success");
					exit();

				}
				else{
					header("Location: ../testphp.php?error=wrongpwd");
					exit();
				}
			}
			else{
				header("Location: ../testphp.php?error=nouser");
				exit();
			}
		}
	}

}
else{
	header("Location: ../testphp.php");
	exit();
}
