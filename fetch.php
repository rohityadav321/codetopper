<?php

include("connect.php");
header("location: user.php");

$name=$_GET['name'];

$select_image="select * from image where imagename='$name'";

$var=mysqli_query($db,$select_image);

if($row=mysqli_fetch_array($var))
{
 $image_name=$row["imagename"];
 $image_content=$row["imagecontent"];
}
echo $image;

?>