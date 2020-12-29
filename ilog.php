<?php
include("connect.php");
if (!isset($_SESSION)) {
	session_start();
} else {
	session_destroy();
	session_start();
}

$errors = array();
$_SESSION['success'] = "";
if (isset($_POST['ilogin'])) {
	$password = mysqli_real_escape_string($conn, $_POST['pass']);
	$institute=mysqli_real_escape_string($conn,$_POST['institute']);
	if (empty($institute)) {
		array_push($errors, "please enter your username!");
	}
	if (empty($password)) {
		array_push($errors, "please enter your password!");
	}
	
		if (count($errors) == 0) {
		$password = md5($password);
		$query = "SELECT * FROM institute WHERE institute='$institute' AND pass='$password'";
		$results = mysqli_query($conn, $query);

		if (mysqli_num_rows($results) == 1) {
			$_SESSION['institute'] = $institute;
 			$_SESSION['success'] = "";
			header('location:clg.php');
		}else {
			array_push($errors, "username or password may be incorrect");
		}
	}
}
?>