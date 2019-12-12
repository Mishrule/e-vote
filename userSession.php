<?php
 /*Session.php*/
	include_once('phpScript/votedb.php');

	session_start();
	$user_check = $_SESSION['login_user'];
	$session_sql = mysqli_query($conn, "SELECT username FROM useraccount WHERE username = '$user_check' ");

	$row = mysqli_fetch_array($session_sql);
	$login_user = $row['username'];
	if(!isset($_SESSION['login_user'])){
		header("location:index.php");
	}

?>