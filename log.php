<?php
include("connect.php");
if (!isset($_SESSION)) {
	session_start();
} else {
	session_destroy();
	session_start();
}


if (isset($_POST['login'])) {
	$user= mysqli_real_escape_string($conn, $_POST['user']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	if (empty($user)) {
		array_push($errors, "please enter your username!");
	}
	if (empty($password)) {
		array_push($errors, "please enter your password!");
	}
	
	
	if (count($errors) == 0) {
		$password = md5($password);
		$query = "SELECT * FROM register WHERE user='$user' AND password='$password'";
		$results = mysqli_query($conn, $query);

		if (mysqli_num_rows($results) == 1) {
			$_SESSION['user'] = $user;
 			$_SESSION['success'] = "";
			header('location:language.php');
		}else {
			array_push($errors, "username or password may be incorrect");
		}
	}
}
?>