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
if(isset($_POST['isignup'])){
	//declare variables
	$iemail=mysqli_real_escape_string($conn,$_POST['iemail']);
	$institute=mysqli_real_escape_string($conn,$_POST['institute']);
    $password= mysqli_real_escape_string($conn,$_POST['pass']);
    $password2= mysqli_real_escape_string($conn,$_POST['pass2']);
    

	$instit = "SELECT 1 FROM institute WHERE institute = '$institute'";
	$_iemail = "SELECT 1 FROM institute WHERE iemail = '$iemail'";
    $institresult = mysqli_query($conn,$instit);
    if(mysqli_num_rows($instittresult)>0)//same user name error
    {
        echo 'institute already exists';
	}
	$_1iemail = mysqli_query($conn,$_iemail);//same email password error
    if(mysqli_num_rows($_1iemail)>0)
    {
        echo 'email already exists';
	}
	
	

	if($password2 != $password ){
		echo "password is not matching";
	}
	if(count($errors)==0){
        $password= md5($password);
        $password2= md5($password2);
		$iquery= "INSERT INTO institute (iemail,institute,pass,pass2)
				VALUES('$iemail','$institute','$password','$password2')";
		mysqli_query($conn,$iquery);
		header('location:ilogin.php');
	}
}
?>