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
//on sign up
if(isset($_POST['signup'])){
	//declare variables
	$email= mysqli_real_escape_string($conn,$_POST['email']);
	$user= mysqli_real_escape_string($conn,$_POST['user']);
	$password= mysqli_real_escape_string($conn,$_POST['password']);
	$password2= mysqli_real_escape_string($conn,$_POST['password2']);
	$slquery = "SELECT 1 FROM register WHERE user = '$user'";
	$_email = "SELECT 1 FROM register WHERE email = '$email'";
    $selectresult = mysqli_query($conn,$slquery);
    if(mysqli_num_rows($selectresult)>0)//same user name error
    {
        echo 'user already exists';
	}
	$_1email = mysqli_query($conn,$_email);//same email password error
    if(mysqli_num_rows($_1email)>0)
    {
        echo 'email already exists';
	}
	

	if($password2 != $password ){
		echo "password is not matching";
	}
	if(count($errors)==0){
        $password= md5($password);
        $password2= md5($password2);
		$query= "INSERT INTO register (email,user,password,password2)
				VALUES('$email','$user','$password','$password2')";
		mysqli_query($conn,$query);
		header('location:language.php');
	}
}
?>