<?php
	include("config/config.php");
	session_start();

	if (!isset($_SESSION['login_user'])) {
		header("location:login.php");
		die();
	}
		$sql = "SELECT * FROM tai_khoan WHERE username = '".$_SESSION['login_user']."'";
			$rs = mysqli_fetch_assoc(mysqli_query($db, $sql));
?>