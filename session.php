<?php
	//Session.php
	include_once('phpScript/votedb.php');

	session_start();
	$user_check = $_SESSION['login_user'];
	$sess_sql = mysqli_query($conn, "SELECT account_number from verifystudent WHERE account_number = '$user_check' ");

	$row = mysqli_fetch_array($sess_sql);
	$login_session = $row['account_number'];
	if(!isset($_SESSION['login_user'])){
		header("location:auth.php");
	}


	// $usercheck = $_SESSION['loginuser'];
	// $sess_sqll = mysqli_query($conn, "SELECT IndexNumber from status WHERE IndexNumber = '$usercheck' ");

	// $row = mysqli_fetch_array($sess_sqll, MYSQL_ASSOC);
	// $loginsession = $row['IndexNumber'];
	// if(!isset($_SESSION['loginuser'])){
	// 	header("location:index.php");
	// }
?>