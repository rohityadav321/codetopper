<?php
include('connect.php');
$imagename=$_FILES["image"]["name"]; 

//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['image']['tmp_name']));

//Insert the image name and image content in image_table
$insert_image="INSERT INTO image VALUES('$imagetmp','$imagename')";

mysqli_query($db,$insert_image);

?>