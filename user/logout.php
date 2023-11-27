<?php
session_cache_limiter('nocache');
session_start(); //to ensure you are using same session
include "../config/db.php";
$email = $_SESSION['email'];

if (session_destroy()) { //destroy the session
	$sql = "UPDATE users SET session ='0' WHERE email='$email'";

	mysqli_query($link, $sql) or die(mysqli_error($link));

	session_unset();



	header("location:../login.php");
} else {
	session_unset();
	session_destroy();

	header("location:../login.php");
	exit();
}
