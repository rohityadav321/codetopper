<?php
$host="localhost";
$user="root";
$pass="";
$db="mydb";
$conn=mysqli_connect($host,$user,$pass,$db);
if(!$conn)
{
    die("could not connect:".mysqli_error($conn));
}
 
  /*Create Database
  $db='CREATE DATABASE mydb';
  if(mysqli_query($conn,$db)){
      echo "database successfull";
  }
  $table='CREATE TABLE image(user varchar(50), imgtemp BLOB)';
  if(mysqli_query($conn,$table)){
      echo "success";
  }
  else{
      echo"error".mysqli_error($conn);
  }*/
?>